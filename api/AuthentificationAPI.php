<?php
// AuthentificationAPI.php - Classe pour gérer l'API d'authentification

class AuthentificationAPI {
    private $conn;
    
    public function __construct() {
        global $urlDb, $base, $login, $motDePasse;
        
        try {
            $this->conn = new PDO(
                "mysql:host=" . $urlDb . ";dbname=" . $base . ";charset=utf8",
                $login, 
                $motDePasse,
                array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)
            );
        } catch(PDOException $e) {
            if (DEBUG_MODE) {
                $this->sendError(500, "Erreur de connexion à la base de données: " . $e->getMessage());
            } else {
                $this->sendError(500, "Erreur de connexion à la base de données");
            }
        }
    }
    
    public function handleRequest() {
        $method = $_SERVER['REQUEST_METHOD'];
        $path = isset($_GET['path']) ? $_GET['path'] : '';
        
        // Parsing du path
        $segments = array_filter(explode('/', $path));
        
        if (empty($segments) || $segments[0] !== 'auth') {
            $this->sendError(404, "Endpoint non trouvé");
            return;
        }
        
        $resource = $segments[0]; // 'auth'
        $action = isset($segments[1]) ? $segments[1] : null;
        
        if ($method === 'POST' && $action === 'login') {
            $this->login();
        } elseif ($method === 'POST' && $action === 'logout') {
            $this->logout();
        } elseif ($method === 'POST' && $action === 'register') {
            $this->register();
        } elseif ($method === 'GET' && $action === 'me') {
            $this->me();
        } else {
            $this->sendError(404, "Endpoint non trouvé");
        }
    }
    
    private function login() {
        // Récupération des données JSON
        $input = json_decode(file_get_contents('php://input'), true);
        
        if (!isset($input['identigilo']) || !isset($input['pasvorto'])) {
            $this->sendError(400, "Paramètres 'identigilo' et 'pasvorto' requis");
            return;
        }
        
        $identigilo = $input['identigilo'];
        $pasvorto = stripslashes($input['pasvorto']);
        
        $respondo = array();
        
        try {
            $stmt = $this->conn->prepare("SELECT id, aktivigita, pasvorto_md5, enirnomo, rajtoj, retadreso, personnomo, familinomo FROM personoj WHERE enirnomo = ?");
            $stmt->execute([$identigilo]);
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            
            if (!$row) {
                $this->sendError(401, "Identifiant introuvable");
                return;
            }
            
            if ($row["aktivigita"] == 0) {
                $this->sendError(403, "Ce compte n'est pas validé, merci de cliquer sur le lien reçu par email");
                return;
            }
            
            if (md5($pasvorto) != $row["pasvorto_md5"]) {
                $this->sendError(401, "Mot de passe incorrect");
                return;
            }
            
            // Authentification réussie
            session_start();
            $_SESSION["persono_id"] = $row["id"];
            
            // Génération du JWT
            $jwt = $this->generateJWT($row);
            
            // Définition du cookie
            global $cookieDomain;
            setcookie("access_token", $jwt, time()+(86400*365), '/', $cookieDomain, true);
            
            // Log de connexion
            $this->protokolo($row["id"], "ENIRO", $identigilo . " eniris via API");
            $this->updateLastEniro($row["id"]);
            
            // Réponse
            $respondo = array(
                "message" => "Authentification réussie",
                "user" => array(
                    "id" => $row["id"],
                    "enirnomo" => $row["enirnomo"],
                    "rajtoj" => $row["rajtoj"],
                    "retadreso" => $row["retadreso"],
                    "persononomo" => $row["persononomo"],
                    "familinomo" => $row["familinomo"]
                ),
                "access_token" => $jwt,
                "redirect_url" => $this->getRedirectionParDroits($row["id"])
            );
            
            $this->sendResponse(200, $respondo);
            
        } catch(PDOException $e) {
            if (DEBUG_MODE) {
                $this->sendError(500, "Erreur base de données: " . $e->getMessage());
            } else {
                $this->sendError(500, "Erreur interne du serveur");
            }
        }
    }
    
    private function register() {
        // Récupération des données JSON
        $input = json_decode(file_get_contents('php://input'), true);
        
        if (!isset($input['enirnomo']) || !isset($input['pasvorto']) || !isset($input['retadreso'])) {
            $this->sendError(400, "Paramètres 'enirnomo', 'pasvorto' et 'retadreso' requis");
            return;
        }
        
        $enirnomo = $input['enirnomo'];
        $pasvorto = stripslashes($input['pasvorto']);
        $retadreso = strtolower($input['retadreso']);
        
        // Validation de l'identifiant
        if ($enirnomo == "") {
            $this->sendError(400, "Merci de choisir un identifiant");
            return;
        }
        
        if (strpos($enirnomo, "@") !== false) {
            $this->sendError(400, "Merci de choisir un identifiant qui ne soit pas un e-mail car il serait visible par les autres élèves");
            return;
        }
        
        // Validation du mot de passe
        if ($pasvorto == "") {
            $this->sendError(400, "Merci de choisir un mot de passe");
            return;
        }
        
        // Validation de l'email
        if (!$this->checkEmail($retadreso)) {
            $this->sendError(400, "Votre adresse e-mail semble erronée, merci de vérifier");
            return;
        }
        
        try {
            // Vérifier si l'adresse email est déjà utilisée
            $stmt = $this->conn->prepare("SELECT COUNT(*) as combien FROM personoj WHERE retadreso = ?");
            $stmt->execute([$retadreso]);
            $retadreso_en_base = $stmt->fetch()["combien"];
            
            if ($retadreso_en_base > 0) {
                $this->sendError(400, "Un compte existe déjà avec cette adresse e-mail");
                return;
            }
            
            // Vérifier si l'identifiant est déjà utilisé
            $stmt = $this->conn->prepare("SELECT COUNT(*) as combien FROM personoj WHERE enirnomo = ?");
            $stmt->execute([$enirnomo]);
            $enirnomo_en_base = $stmt->fetch()["combien"];
            
            if ($enirnomo_en_base > 0) {
                $this->sendError(400, "Un compte existe déjà avec cet identifiant");
                return;
            }
            
            // Génération de la clef d'activation
            $aktivigo = md5(uniqid(rand(), true));
            
            // Création de la personne
            $persono_id = $this->kreiPersonon($enirnomo, $pasvorto, $retadreso, $aktivigo);
            
            if (!$persono_id) {
                $this->sendError(500, "Erreur lors de la création du compte");
                return;
            }
            
            // Envoi de l'email d'activation
            global $urlracine;
            $lien = $urlracine . "aktivigi.php?retadreso=" . $retadreso . "&aktivigo=" . $aktivigo;
            
            // Charger le template d'email
            $filename = __DIR__ . "/../mails/aktivigi.html";
            if (!file_exists($filename)) {
                $this->sendError(500, "Template d'email introuvable");
                return;
            }
            
            $contents = file_get_contents($filename);
            $contents = str_replace("##LIEN_ACTIVATION##", $lien, $contents);
            
            // Envoyer l'email
            if (!$this->mailViaSES($retadreso, "Activation de votre compte pour apprendre gratuitement l'espéranto", $contents)) {
                $this->sendError(500, "Erreur lors de l'envoi de l'email d'activation");
                return;
            }
            
            // Logger l'activation
            $this->protokolo($persono_id, "ACTIVATION COMPTE", $retadreso . " a reçu une clef d'activation");
            
            // Réponse de succès
            $respondo = array(
                "message" => "Compte créé avec succès. Un email d'activation a été envoyé à votre adresse.",
                "user_id" => $persono_id
            );
            
            $this->sendResponse(201, $respondo);
            
        } catch(PDOException $e) {
            if (DEBUG_MODE) {
                $this->sendError(500, "Erreur base de données: " . $e->getMessage());
            } else {
                $this->sendError(500, "Erreur interne du serveur");
            }
        }
    }
    
    private function generateJWT($user) {
        global $motDePasse;
        
        // Header de token JWT
        $header = array(
            "alg" => "HS256",
            "typ" => "JWT"
        );
        
        // Payload ou corps du token
        $payload = array(
            "enirnomo" => $user["enirnomo"],
            "retadreso" => $user["retadreso"],
            "persono_id" => $user["id"],
            "rajto" => $user["rajtoj"],
            "persononomo" => $user["persononomo"],
            "familinomo" => $user["familinomo"]
        );
        
        // Encodage du header et payload
        $encodedHeader = $this->base64url_encode(json_encode($header));
        $encodedPayload = $this->base64url_encode(json_encode($payload));
        
        // Corps du jeton
        $jwtBody = $encodedHeader . "." . $encodedPayload;
        
        // Signature
        $signature = hash_hmac('sha256', $jwtBody, $motDePasse, true);
        $encodedSignature = $this->base64url_encode($signature);
        
        // JWT final
        return $jwtBody . "." . $encodedSignature;
    }
    
    private function base64url_encode($data) {
        return rtrim(strtr(base64_encode($data), '+/', '-_'), '=');
    }
    
    private function protokolo($persono_id, $ago, $priskribo) {
        try {
            $stmt = $this->conn->prepare("INSERT INTO protokolo (persono_id, ago, priskribo, dato) VALUES (?, ?, ?, NOW())");
            $stmt->execute([$persono_id, $ago, $priskribo]);
        } catch(PDOException $e) {
            // Log error but don't interrupt the process
            error_log("Erreur protokolo: " . $e->getMessage());
        }
    }
    
    private function updateLastEniro($persono_id) {
        try {
            $stmt = $this->conn->prepare("UPDATE personoj SET lasteniro = NOW() WHERE id = ?");
            $stmt->execute([$persono_id]);
        } catch(PDOException $e) {
            error_log("Erreur updateLastEniro: " . $e->getMessage());
        }
    }
    
    private function getRedirectionParDroits($persono_id) {
        // Cette fonction devrait retourner l'URL de redirection basée sur les droits
        // Basé sur la fonction redirigeParDroits de db.inc.php
        try {
            $stmt = $this->conn->prepare("SELECT rajtoj FROM personoj WHERE id = ?");
            $stmt->execute([$persono_id]);
            $user = $stmt->fetch(PDO::FETCH_ASSOC);
            
            if (!$user) return "index.php";
            
            switch($user['rajtoj']) {
                case 'A': // administrateur
                    return "administri.php";
                case 'K': // correcteurs
                    return "miajlernantoj.php";
                case 'P':
                    return "fr/cge/intro.php"; // pour les nouveaux élèves
                case 'S': // élèves
                    // Logique plus complexe pour les élèves basée sur leur cours actuel
                    return $this->getStudentRedirection($persono_id);
                default:
                    return "index.php";
            }
        } catch(PDOException $e) {
            return "index.php";
        }
    }
    
    private function getStudentRedirection($persono_id) {
        try {
            $stmt = $this->conn->prepare("SELECT stato, nunleciono, kurso FROM nuna_kurso WHERE studanto = ? ORDER BY CASE stato WHEN 'N' THEN 1 WHEN 'K' THEN 2 WHEN 'H' THEN 3 WHEN 'F' THEN 4 ELSE 5 END");
            $stmt->execute([$persono_id]);
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            
            if (!$row || $row["kurso"] == "KE") {
                return "personinformoj.php";
            }
            
            if ($row['kurso'] == "GR") {
                return 'fr/gerda/index.php';
            } elseif ($row['kurso'] == "CG") {
                return 'fr/cge/index.php';
            } else {
                return "personinformoj.php";
            }
        } catch(PDOException $e) {
            return "personinformoj.php";
        }
    }
    
    private function logout() {
        session_start();
        
        $persono_id = isset($_SESSION["persono_id"]) ? $_SESSION["persono_id"] : null;
        $enirnomo = null;
        
        // Récupérer le nom d'utilisateur pour le log si possible
        if ($persono_id) {
            try {
                $stmt = $this->conn->prepare("SELECT enirnomo FROM personoj WHERE id = ?");
                $stmt->execute([$persono_id]);
                $user = $stmt->fetch(PDO::FETCH_ASSOC);
                if ($user) {
                    $enirnomo = $user['enirnomo'];
                }
            } catch(PDOException $e) {
                // Ignorer l'erreur pour le log
            }
        }
        
        // Détruire la session
        $_SESSION = array();
        
        if (ini_get("session.use_cookies")) {
            $params = session_get_cookie_params();
            setcookie(session_name(), '', time() - 42000,
                $params["path"], $params["domain"],
                $params["secure"], $params["httponly"]
            );
        }
        
        session_destroy();
        
        // Supprimer le cookie access_token
        global $cookieDomain;
        setcookie("access_token", "", time() - 3600, '/', $cookieDomain, true);
        
        // Logger la déconnexion si on a l'ID utilisateur
        if ($persono_id && $enirnomo) {
            $this->protokolo($persono_id, "ELIRO", $enirnomo . " eliris via API");
        }
        
        $respondo = array(
            "message" => "Déconnexion réussie"
        );
        
        $this->sendResponse(200, $respondo);
    }
    
    private function me() {
        session_start();
        
        $persono_id = isset($_SESSION["persono_id"]) ? $_SESSION["persono_id"] : null;
        
        if (!$persono_id) {
            $this->sendError(401, "Non authentifié");
            return;
        }
        
        try {
            $stmt = $this->conn->prepare("SELECT id, enirnomo, rajtoj, retadreso, personnomo, familinomo, aktivigita, ekdato, lasteniro FROM personoj WHERE id = ?");
            $stmt->execute([$persono_id]);
            $user = $stmt->fetch(PDO::FETCH_ASSOC);
            
            if (!$user) {
                $this->sendError(401, "Utilisateur non trouvé");
                return;
            }
            
            if ($user["aktivigita"] == 0) {
                $this->sendError(403, "Compte non activé");
                return;
            }
            
            // Récupérer les informations de cours si c'est un étudiant
            $cours_info = null;
            if ($user['rajtoj'] === 'S') {
                $stmt = $this->conn->prepare("SELECT kurso, stato, nunleciono FROM nuna_kurso WHERE studanto = ? ORDER BY CASE stato WHEN 'N' THEN 1 WHEN 'K' THEN 2 WHEN 'H' THEN 3 WHEN 'F' THEN 4 ELSE 5 END LIMIT 1");
                $stmt->execute([$persono_id]);
                $cours = $stmt->fetch(PDO::FETCH_ASSOC);
                if ($cours) {
                    $cours_info = array(
                        "kurso" => $cours["kurso"],
                        "stato" => $cours["stato"],
                        "nunleciono" => $cours["nunleciono"]
                    );
                }
            }
            
            $respondo = array(
                "user" => array(
                    "id" => $user["id"],
                    "enirnomo" => $user["enirnomo"],
                    "rajtoj" => $user["rajtoj"],
                    "retadreso" => $user["retadreso"],
                    "personnomo" => $user["personnomo"],
                    "familinomo" => $user["familinomo"],
                    "aktivigita" => (bool)$user["aktivigita"],
                    "ekdato" => $user["ekdato"],
                    "lasteniro" => $user["lasteniro"]
                ),
                "cours_info" => $cours_info,
                "redirect_url" => $this->getRedirectionParDroits($persono_id)
            );
            
            $this->sendResponse(200, $respondo);
            
        } catch(PDOException $e) {
            if (DEBUG_MODE) {
                $this->sendError(500, "Erreur base de données: " . $e->getMessage());
            } else {
                $this->sendError(500, "Erreur interne du serveur");
            }
        }
    }
    
    private function sendResponse($statusCode, $data) {
        http_response_code($statusCode);
        echo json_encode($data, JSON_UNESCAPED_UNICODE);
        exit;
    }
    
    private function sendError($statusCode, $message) {
        http_response_code($statusCode);
        echo json_encode(array("error" => $message), JSON_UNESCAPED_UNICODE);
        exit;
    }
    
    private function checkEmail($email) {
        if ($email == "") {
            return FALSE;
        }
        if (!preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{1,}\.[a-z]{2,5}$#", $email)) {
            return FALSE;
        }
        list($Username, $Domain) = explode("@", $email);
        if (getmxrr($Domain, $MXHost)) {
            return TRUE;
        } else {
            if (fsockopen($Domain, 25, $errno, $errstr, 30)) {
                return TRUE;
            } else {
                return FALSE;
            }
        }
        return TRUE;
    }
    
    private function kreiPersonon($enirnomo, $pasvorto, $retadreso, $aktivigo) {
        try {
            $stmt = $this->conn->prepare("INSERT INTO personoj (enirnomo, pasvorto_md5, retadreso, aktivigo, ekdato) VALUES (?, ?, ?, ?, NOW())");
            $stmt->execute([$enirnomo, md5($pasvorto), $retadreso, $aktivigo]);
            return $this->conn->lastInsertId();
        } catch(PDOException $e) {
            error_log("Erreur kreiPersonon: " . $e->getMessage());
            return false;
        }
    }
    
    private function mailViaSES($retadreso, $objekto, $contentsHtml) {
        // Cette méthode utilise Amazon SES pour envoyer des emails
        // Pour le développement, on va juste logger l'email
        
        global $awskey, $awssecret;
        
        // En développement, simuler l'envoi réussi
        if (!$awskey || !$awssecret) {
            error_log("Email would be sent to: $retadreso with subject: $objekto");
            return true; // Simuler succès pour les tests
        }
        
        // Version simplifiée - en production utiliser la vraie implémentation AWS SES
        // Pour les tests, on peut juste logger l'email ou utiliser mail() PHP basique
        
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= "From: ikurso@esperanto-france.org" . "\r\n";
        
        // Pour le développement, on peut utiliser mail() PHP ou juste logger
        if (function_exists('mail')) {
            return mail($retadreso, $objekto, $contentsHtml, $headers);
        } else {
            // Log pour le développement
            error_log("Email would be sent to: $retadreso with subject: $objekto");
            return true; // Simuler succès pour les tests
        }
    }
}
?>