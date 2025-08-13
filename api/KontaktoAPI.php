<?php
// KontaktoAPI.php - Classe pour gérer l'API du formulaire de contact

class KontaktoAPI {
    private $conn;
    
    public function __construct() {
        global $urlDb, $base, $login, $motDePasse;
        
        // Définir le timezone par défaut pour éviter les warnings
        date_default_timezone_set('UTC');
        
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
        
        if (empty($segments) || $segments[0] !== 'kontakto') {
            $this->sendError(404, "Endpoint non trouvé");
            return;
        }
        
        if ($method === 'POST') {
            // POST /api/kontakto
            $this->sendContactMessage();
        } else {
            $this->sendError(405, "Méthode non autorisée");
        }
    }
    
    private function sendContactMessage() {
        // Récupération des données JSON
        $input = json_decode(file_get_contents('php://input'), true);
        
        if (!isset($input['sendinto']) || !isset($input['temo']) || !isset($input['komento'])) {
            $this->sendError(400, "Paramètres 'sendinto', 'temo' et 'komento' requis");
            return;
        }
        
        $sendinto = trim($input['sendinto']);
        $temo = trim($input['temo']);
        $komento = trim($input['komento']);
        $reagopagxo = isset($input['reagopagxo']) ? trim($input['reagopagxo']) : '';
        
        // Validation de l'email
        if (!$this->checkEmail($sendinto)) {
            $this->sendError(400, "Adresse email invalide");
            return;
        }
        
        // Validation du contenu
        if (empty($temo)) {
            $this->sendError(400, "Le sujet ne peut pas être vide");
            return;
        }
        
        if (empty($komento)) {
            $this->sendError(400, "Le commentaire ne peut pas être vide");
            return;
        }
        
        // Vérification anti-spam
        if ($this->isSpam($komento)) {
            $this->protokolo(0, "SPAM", "Spam détecté dans le message de: " . $sendinto);
            $this->sendError(400, "Message détecté comme spam");
            return;
        }
        
        try {
            // Récupération des emails des administrateurs
            $stmt = $this->conn->prepare("SELECT retadreso FROM personoj WHERE rajtoj = 'A'");
            $stmt->execute();
            $admins = $stmt->fetchAll(PDO::FETCH_COLUMN);
            
            if (empty($admins)) {
                $this->sendError(500, "Aucun administrateur trouvé");
                return;
            }
            
            // Ajouter l'expéditeur à la liste des destinataires
            $admins[] = $sendinto;
            $destinataires = implode(",", $admins);
            
            // Construction du contenu HTML
            $contents = "<html><head><title>ikurso-reago : " . htmlspecialchars($temo) . "</title>\n";
            $contents .= "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">\n";
            $contents .= "<style>body{font-family:\"Courier New\", Courier, sans-serif;font-size:small}</style>\n";
            $contents .= "</head><body>";
            $contents .= "<p style=\"color:green;border-bottom:1px dashed green;\">Message de " . htmlspecialchars($sendinto);
            
            if (!empty($reagopagxo)) {
                $contents .= " depuis la page «" . htmlspecialchars($reagopagxo) . "»";
            }
            
            $contents .= " :</p>\n";
            $contents .= "<p>" . nl2br(htmlspecialchars($komento)) . "</p>";
            $contents .= "</body></html>";
            
            $objekto = "ikurso-reago : " . $temo;
            
            // Envoi de l'email
            if (!$this->mailViaSES($destinataires, $objekto, $contents)) {
                $this->sendError(500, "Erreur lors de l'envoi de l'email");
                return;
            }
            
            // Logger l'envoi réussi
            $this->protokolo(0, "KONTAKTO", "Message envoyé par: " . $sendinto . " - Sujet: " . $temo);
            
            // Réponse de succès
            $respondo = array(
                "status" => "success",
                "sendinto" => $sendinto,
                "temo" => $temo
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
    
    
    private function isSpam($text) {
        // Liste des mots interdits (basée sur reago2.php)
        $motsForbidden = array(" girl ", " sex ", " money ", " virginity ", "порно", "http://", "https://");
        
        $textLower = strtolower($text);
        
        foreach ($motsForbidden as $motInterdit) {
            if (strpos($textLower, strtolower($motInterdit)) !== false) {
                return true;
            }
        }
        
        return false;
    }
    
    private function checkEmail($email) {
        if (empty($email)) {
            return false;
        }
        
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return false;
        }
        
        // Vérification MX record (basée sur la fonction originale)
        list($username, $domain) = explode("@", $email);
        
        if (getmxrr($domain, $mxHosts)) {
            return true;
        } else {
            // Test de connexion au domaine sur le port 25
            $connection = @fsockopen($domain, 25, $errno, $errstr, 30);
            if ($connection) {
                fclose($connection);
                return true;
            }
        }
        
        return false;
    }
    
    private function mailViaSES($destinataires, $objekto, $contentsHtml) {
        global $awskey, $awssecret;
        
        // En développement, simuler l'envoi réussi
        if (!$awskey || !$awssecret) {
            error_log("Email would be sent to: $destinataires with subject: $objekto");
            return true;
        }
        
        // Version simplifiée - en production utiliser la vraie implémentation AWS SES
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= "From: ikurso@esperanto-france.org" . "\r\n";
        
        // Pour le développement, on peut utiliser mail() PHP ou juste logger
        if (function_exists('mail')) {
            return mail($destinataires, $objekto, $contentsHtml, $headers);
        } else {
            error_log("Email would be sent to: $destinataires with subject: $objekto");
            return true;
        }
    }
    
    private function protokolo($persono_id, $ago, $priskribo) {
        try {
            $stmt = $this->conn->prepare("INSERT INTO protokolo (persono_id, ago, priskribo, dato) VALUES (?, ?, ?, NOW())");
            $stmt->execute([$persono_id, $ago, $priskribo]);
        } catch(PDOException $e) {
            error_log("Erreur protokolo: " . $e->getMessage());
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
}
?>