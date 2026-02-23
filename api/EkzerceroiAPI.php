<?php
// EkzerceroiAPI.php - Classe pour gérer l'API des sous-exercices (ekzerceroj)

class EkzerceroiAPI {
    private $conn;

    public function __construct() {
        global $urlDb, $base, $login, $motDePasse;

        // Configuration du timezone par défaut
        if (!ini_get('date.timezone')) {
            date_default_timezone_set('Europe/Paris');
        }

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

        if (empty($segments) || $segments[0] !== 'ekzerceroj') {
            $this->sendError(404, "Endpoint non trouvé");
            return;
        }

        $resource = $segments[0]; // 'ekzerceroj'
        $id = isset($segments[1]) ? $segments[1] : null;
        $action = isset($segments[2]) ? $segments[2] : null;

        switch ($method) {
            case 'GET':
                if ($id && $action === 'stats') {
                    $this->getEkzerceroStats($id);
                } elseif ($id) {
                    $this->getEkzercero($id);
                } else {
                    $this->getEkzerceroj();
                }
                break;

            case 'POST':
                $this->createEkzercero();
                break;

            case 'PATCH':
                if ($id) {
                    $this->updateEkzercero($id);
                } else {
                    $this->sendError(400, "ID sous-exercice requis pour la modification");
                }
                break;

            case 'DELETE':
                if ($id) {
                    $this->deleteEkzercero($id);
                } else {
                    $this->sendError(400, "ID sous-exercice requis pour la suppression");
                }
                break;

            default:
                $this->sendError(405, "Méthode non autorisée");
                break;
        }
    }

    private function getEkzerceroj() {
        // Paramètres de filtrage
        $ekzerco_id = isset($_GET['ekzerco_id']) ? (int)$_GET['ekzerco_id'] : null;
        $kodo = isset($_GET['kodo']) ? trim($_GET['kodo']) : null;
        $forigita = isset($_GET['forigita']) ? $_GET['forigita'] : null;

        try {
            // Construction de la requête
            $sql = "SELECT id, ekzerco_id, kodo, numero, demando, respondmodelo, respondo, normaligita, bildo, forigita, korektebla, poentoj FROM ekzerceroj";
            $params = [];
            $where_conditions = [];

            // Filtre par exercice parent
            if ($ekzerco_id !== null) {
                $where_conditions[] = "ekzerco_id = ?";
                $params[] = $ekzerco_id;
            }

            // Filtre par code
            if ($kodo !== null) {
                $where_conditions[] = "kodo = ?";
                $params[] = $kodo;
            }

            // Filtre par forigita (supprimé logiquement)
            if ($forigita !== null) {
                $where_conditions[] = "forigita = ?";
                $params[] = $forigita === 'true' || $forigita === '1' ? 1 : 0;
            } else {
                // Par défaut, ne pas montrer les éléments supprimés
                $where_conditions[] = "forigita = 0";
            }

            if (!empty($where_conditions)) {
                $sql .= " WHERE " . implode(' AND ', $where_conditions);
            }

            $sql .= " ORDER BY ekzerco_id ASC, numero ASC";

            $stmt = $this->conn->prepare($sql);
            $stmt->execute($params);
            $ekzerceroj = $stmt->fetchAll(PDO::FETCH_ASSOC);

            // Conversion des types
            foreach ($ekzerceroj as &$ekzercero) {
                $ekzercero['id'] = (int)$ekzercero['id'];
                $ekzercero['ekzerco_id'] = (int)$ekzercero['ekzerco_id'];
                $ekzercero['numero'] = (int)$ekzercero['numero'];
                $ekzercero['forigita'] = (bool)$ekzercero['forigita'];
                $ekzercero['korektebla'] = (bool)$ekzercero['korektebla'];
                $ekzercero['poentoj'] = $ekzercero['poentoj'] !== null ? (int)$ekzercero['poentoj'] : null;
            }

            $response = [
                'data' => $ekzerceroj,
                'count' => count($ekzerceroj)
            ];

            $this->sendResponse(200, $response);

        } catch(PDOException $e) {
            if (DEBUG_MODE) {
                $this->sendError(500, "Erreur base de données: " . $e->getMessage());
            } else {
                $this->sendError(500, "Erreur interne du serveur");
            }
        }
    }

    private function getEkzercero($id) {
        // Validation de l'ID
        $id = (int)$id;
        if ($id <= 0) {
            $this->sendError(400, "ID sous-exercice invalide");
            return;
        }

        try {
            // Requête pour récupérer le sous-exercice
            $sql = "SELECT id, ekzerco_id, kodo, numero, demando, respondmodelo, respondo, normaligita, bildo, forigita, korektebla, poentoj FROM ekzerceroj WHERE id = ?";

            $stmt = $this->conn->prepare($sql);
            $stmt->execute([$id]);
            $ekzercero = $stmt->fetch(PDO::FETCH_ASSOC);

            if (!$ekzercero) {
                $this->sendError(404, "Sous-exercice non trouvé");
                return;
            }

            // Conversion des types
            $ekzercero['id'] = (int)$ekzercero['id'];
            $ekzercero['ekzerco_id'] = (int)$ekzercero['ekzerco_id'];
            $ekzercero['numero'] = (int)$ekzercero['numero'];
            $ekzercero['forigita'] = (bool)$ekzercero['forigita'];
            $ekzercero['korektebla'] = (bool)$ekzercero['korektebla'];
            $ekzercero['poentoj'] = $ekzercero['poentoj'] !== null ? (int)$ekzercero['poentoj'] : null;

            $response = [
                'data' => $ekzercero
            ];

            $this->sendResponse(200, $response);

        } catch(PDOException $e) {
            if (DEBUG_MODE) {
                $this->sendError(500, "Erreur base de données: " . $e->getMessage());
            } else {
                $this->sendError(500, "Erreur interne du serveur");
            }
        }
    }

    private function createEkzercero() {
        // Vérifier l'authentification et les droits administrateur
        if (!$this->requireAdminAuth()) {
            return;
        }

        // Récupération des données POST
        $input = json_decode(file_get_contents('php://input'), true);
        if (!$input) {
            $input = $_POST;
        }

        $ekzerco_id = isset($input['ekzerco_id']) ? (int)$input['ekzerco_id'] : null;
        $kodo = isset($input['kodo']) ? trim($input['kodo']) : "";
        $numero = isset($input['numero']) ? (int)$input['numero'] : null;
        $demando = isset($input['demando']) ? trim($input['demando']) : "";
        $respondmodelo = isset($input['respondmodelo']) ? trim($input['respondmodelo']) : null;
        $respondo = isset($input['respondo']) ? trim($input['respondo']) : null;
        $normaligita = isset($input['normaligita']) ? trim($input['normaligita']) : null;
        $bildo = isset($input['bildo']) ? trim($input['bildo']) : "";
        $forigita = isset($input['forigita']) ? (bool)$input['forigita'] : false;
        $korektebla = isset($input['korektebla']) ? (bool)$input['korektebla'] : false;
        $poentoj = isset($input['poentoj']) ? (int)$input['poentoj'] : null;

        // Validation des champs obligatoires
        if ($ekzerco_id === null) {
            $this->sendError(400, "L'ID de l'exercice parent est requis");
            return;
        }

        if ($kodo == "") {
            $this->sendError(400, "Le code du sous-exercice est requis");
            return;
        }

        if (strlen($kodo) > 10) {
            $this->sendError(400, "Le code ne peut pas dépasser 10 caractères");
            return;
        }

        if ($numero === null) {
            $this->sendError(400, "Le numéro du sous-exercice est requis");
            return;
        }

        if ($demando == "") {
            $this->sendError(400, "La question est requise");
            return;
        }

        try {
            // Vérifier que l'exercice parent existe
            $query = "SELECT COUNT(*) as combien FROM ekzercoj WHERE id = ?";
            $stmt = $this->conn->prepare($query);
            $stmt->execute([$ekzerco_id]);
            $ekzerco_existe = $stmt->fetch()["combien"];

            if ($ekzerco_existe == 0) {
                $this->sendError(404, "L'exercice parent spécifié n'existe pas");
                return;
            }

            // Création du sous-exercice
            $query = "INSERT INTO ekzerceroj (ekzerco_id, kodo, numero, demando, respondmodelo, respondo, normaligita, bildo, forigita, korektebla, poentoj) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
            $stmt = $this->conn->prepare($query);
            $stmt->execute([
                $ekzerco_id,
                $kodo,
                $numero,
                $demando,
                $respondmodelo,
                $respondo,
                $normaligita,
                $bildo,
                $forigita ? 1 : 0,
                $korektebla ? 1 : 0,
                $poentoj
            ]);

            $ekzercero_id = $this->conn->lastInsertId();

            // Réponse de succès
            $response = [
                'message' => 'Sous-exercice créé avec succès',
                'data' => [
                    'id' => (int)$ekzercero_id,
                    'ekzerco_id' => $ekzerco_id,
                    'kodo' => $kodo,
                    'numero' => $numero,
                    'demando' => $demando,
                    'respondmodelo' => $respondmodelo,
                    'respondo' => $respondo,
                    'normaligita' => $normaligita,
                    'bildo' => $bildo,
                    'forigita' => $forigita,
                    'korektebla' => $korektebla,
                    'poentoj' => $poentoj
                ]
            ];

            $this->sendResponse(201, $response);

        } catch(PDOException $e) {
            if (DEBUG_MODE) {
                $this->sendError(500, "Erreur base de données: " . $e->getMessage());
            } else {
                $this->sendError(500, "Erreur interne du serveur");
            }
        }
    }

    private function updateEkzercero($id) {
        // Vérifier l'authentification et les droits administrateur
        if (!$this->requireAdminAuth()) {
            return;
        }

        // Validation de l'ID
        $id = (int)$id;
        if ($id <= 0) {
            $this->sendError(400, "ID sous-exercice invalide");
            return;
        }

        // Récupération des données PATCH
        $input = json_decode(file_get_contents('php://input'), true);
        if (!$input) {
            $this->sendError(400, "Données JSON invalides");
            return;
        }

        try {
            // Vérifier que le sous-exercice existe
            $stmt = $this->conn->prepare("SELECT id FROM ekzerceroj WHERE id = ?");
            $stmt->execute([$id]);
            $existing_ekzercero = $stmt->fetch(PDO::FETCH_ASSOC);

            if (!$existing_ekzercero) {
                $this->sendError(404, "Sous-exercice non trouvé");
                return;
            }

            // Champs modifiables
            $allowed_fields = ['ekzerco_id', 'kodo', 'numero', 'demando', 'respondmodelo', 'respondo', 'normaligita', 'bildo', 'forigita', 'korektebla', 'poentoj'];

            $update_fields = [];
            $update_values = [];

            // Traitement des champs
            foreach ($input as $field => $value) {
                // Vérifier si le champ est autorisé
                if (!in_array($field, $allowed_fields)) {
                    $this->sendError(400, "Champ non modifiable: $field");
                    return;
                }

                // Validations spécifiques
                if ($field === 'ekzerco_id') {
                    $value = (int)$value;

                    // Vérifier que l'exercice parent existe
                    $stmt = $this->conn->prepare("SELECT COUNT(*) as combien FROM ekzercoj WHERE id = ?");
                    $stmt->execute([$value]);
                    if ($stmt->fetch()["combien"] == 0) {
                        $this->sendError(404, "L'exercice parent spécifié n'existe pas");
                        return;
                    }
                }

                if ($field === 'kodo') {
                    $value = trim($value);
                    if (empty($value)) {
                        $this->sendError(400, "Le code ne peut pas être vide");
                        return;
                    }
                    if (strlen($value) > 10) {
                        $this->sendError(400, "Le code ne peut pas dépasser 10 caractères");
                        return;
                    }
                }

                if ($field === 'demando') {
                    $value = trim($value);
                    if (empty($value)) {
                        $this->sendError(400, "La question ne peut pas être vide");
                        return;
                    }
                }

                if (in_array($field, ['forigita', 'korektebla'])) {
                    $value = $value ? 1 : 0;
                }

                if (in_array($field, ['ekzerco_id', 'numero', 'poentoj'])) {
                    $value = $value !== null ? (int)$value : null;
                }

                // Ajouter le champ à la mise à jour
                $update_fields[] = "$field = ?";
                $update_values[] = $value;
            }

            if (empty($update_fields)) {
                $this->sendError(400, "Aucun champ à modifier");
                return;
            }

            // Exécuter la mise à jour
            $update_values[] = $id;
            $sql = "UPDATE ekzerceroj SET " . implode(', ', $update_fields) . " WHERE id = ?";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute($update_values);

            // Récupérer les données mises à jour
            $stmt = $this->conn->prepare("SELECT id, ekzerco_id, kodo, numero, demando, respondmodelo, respondo, normaligita, bildo, forigita, korektebla, poentoj FROM ekzerceroj WHERE id = ?");
            $stmt->execute([$id]);
            $updated_ekzercero = $stmt->fetch(PDO::FETCH_ASSOC);

            // Conversion des types
            $updated_ekzercero['id'] = (int)$updated_ekzercero['id'];
            $updated_ekzercero['ekzerco_id'] = (int)$updated_ekzercero['ekzerco_id'];
            $updated_ekzercero['numero'] = (int)$updated_ekzercero['numero'];
            $updated_ekzercero['forigita'] = (bool)$updated_ekzercero['forigita'];
            $updated_ekzercero['korektebla'] = (bool)$updated_ekzercero['korektebla'];
            $updated_ekzercero['poentoj'] = $updated_ekzercero['poentoj'] !== null ? (int)$updated_ekzercero['poentoj'] : null;

            $response = [
                'message' => 'Sous-exercice modifié avec succès',
                'data' => $updated_ekzercero
            ];

            $this->sendResponse(200, $response);

        } catch(PDOException $e) {
            if (DEBUG_MODE) {
                $this->sendError(500, "Erreur base de données: " . $e->getMessage());
            } else {
                $this->sendError(500, "Erreur interne du serveur");
            }
        }
    }

    private function deleteEkzercero($id) {
        // Vérifier l'authentification et les droits administrateur
        if (!$this->requireAdminAuth()) {
            return;
        }

        // Validation de l'ID
        $id = (int)$id;
        if ($id <= 0) {
            $this->sendError(400, "ID sous-exercice invalide");
            return;
        }

        try {
            // Vérifier que le sous-exercice existe
            $stmt = $this->conn->prepare("SELECT id, kodo, demando FROM ekzerceroj WHERE id = ?");
            $stmt->execute([$id]);
            $ekzercero_to_delete = $stmt->fetch(PDO::FETCH_ASSOC);

            if (!$ekzercero_to_delete) {
                $this->sendError(404, "Sous-exercice non trouvé");
                return;
            }

            // Vérifier si le sous-exercice a des réponses d'étudiants dans la table respondoj
            $stmt = $this->conn->prepare("SELECT COUNT(*) as combien FROM respondoj WHERE ekzercero_id = ?");
            $stmt->execute([$id]);
            $count_responses = $stmt->fetch()["combien"];

            if ($count_responses > 0) {
                $this->sendError(409, "Impossible de supprimer ce sous-exercice car il a $count_responses réponse(s) d'étudiant(s)");
                return;
            }

            // Supprimer le sous-exercice
            $stmt = $this->conn->prepare("DELETE FROM ekzerceroj WHERE id = ?");
            $stmt->execute([$id]);

            // Vérifier que la suppression a bien eu lieu
            if ($stmt->rowCount() === 0) {
                $this->sendError(500, "Aucune ligne supprimée");
                return;
            }

            $response = [
                'message' => 'Sous-exercice supprimé avec succès',
                'data' => [
                    'id' => (int)$id,
                    'kodo' => $ekzercero_to_delete['kodo'],
                    'demando' => $ekzercero_to_delete['demando']
                ]
            ];

            $this->sendResponse(200, $response);

        } catch(PDOException $e) {
            if (DEBUG_MODE) {
                $this->sendError(500, "Erreur base de données: " . $e->getMessage());
            } else {
                $this->sendError(500, "Erreur interne du serveur");
            }
        }
    }

    private function getEkzerceroStats($id) {
        if (!$this->requireAdminAuth()) {
            return;
        }

        $id = (int)$id;
        if ($id <= 0) {
            $this->sendError(400, "ID sous-exercice invalide");
            return;
        }

        $limite = isset($_GET['limite']) ? (int)$_GET['limite'] : 5;
        if ($limite <= 0 || $limite > 100) {
            $limite = 5;
        }

        try {
            // Requête 1 : nombre total de réponses pour cette question
            $stmt = $this->conn->prepare(
                "SELECT COUNT(*) as total FROM respondoj WHERE ekzercero_id = ? AND forigita = 0"
            );
            $stmt->execute([$id]);
            $total = (int)$stmt->fetch(PDO::FETCH_ASSOC)['total'];

            // Requête 2 : réponses les plus fréquentes via GROUP BY
            // $limite est un int validé, on l'interpole directement (LIMIT n'accepte pas les paramètres liés)
            $stmt = $this->conn->prepare(
                "SELECT respondo, COUNT(*) as nombre
                 FROM respondoj
                 WHERE ekzercero_id = ? AND forigita = 0
                 GROUP BY respondo
                 ORDER BY nombre DESC
                 LIMIT $limite"
            );
            $stmt->execute([$id]);
            $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

            $data = [];
            foreach ($rows as $row) {
                $nombre = (int)$row['nombre'];
                $data[] = [
                    'respondo'  => $row['respondo'],
                    'nombre'    => $nombre,
                    'procento'  => $total > 0 ? round($nombre / $total * 100, 1) : 0,
                ];
            }

            $this->sendResponse(200, [
                'ekzercero_id' => $id,
                'total'        => $total,
                'limite'       => $limite,
                'data'         => $data,
            ]);

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

    private function requireAdminAuth() {
        require_once __DIR__ . '/JWTAuth.php';

        // Valider le JWT et récupérer l'utilisateur
        $payload = JWTAuth::validateJWT();
        if (!$payload) {
            $this->sendError(401, "Authentification requise");
            return false;
        }

        $persono_id = $payload['persono_id'];

        try {
            // Vérifier les droits de l'utilisateur en base
            $stmt = $this->conn->prepare("SELECT rajtoj, aktivigita FROM personoj WHERE id = ?");
            $stmt->execute([$persono_id]);
            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            if (!$user) {
                $this->sendError(401, "Utilisateur non trouvé");
                return false;
            }

            if ($user["aktivigita"] == 0) {
                $this->sendError(403, "Compte non activé");
                return false;
            }

            if ($user["rajtoj"] !== 'A') {
                $this->sendError(403, "Droits administrateur requis");
                return false;
            }

            return true;

        } catch(PDOException $e) {
            if (DEBUG_MODE) {
                $this->sendError(500, "Erreur base de données: " . $e->getMessage());
            } else {
                $this->sendError(500, "Erreur interne du serveur");
            }
            return false;
        }
    }
}
?>
