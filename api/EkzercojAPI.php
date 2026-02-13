<?php
// EkzercojAPI.php - Classe pour gérer l'API des exercices (ekzercoj)

class EkzercojAPI {
    private $conn;

    // Types valides d'exercices
    private $valid_types = [
        'traduko-1', 'traduko-2', 'traduko-3',
        'verkado-1', 'verkado-2', 'verkado-3', 'verkado-4', 'verkado-5', 'verkado-6',
        'stelo-1', 'stelo-2',
        'truoj-1', 'truoj-2',
        'kompletigu', 'ordigu', 'elektu'
    ];

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

        if (empty($segments) || $segments[0] !== 'ekzercoj') {
            $this->sendError(404, "Endpoint non trouvé");
            return;
        }

        $resource = $segments[0]; // 'ekzercoj'
        $id = isset($segments[1]) ? $segments[1] : null;

        switch ($method) {
            case 'GET':
                if ($id) {
                    $this->getEkzerco($id);
                } else {
                    $this->getEkzercoj();
                }
                break;

            case 'POST':
                $this->createEkzerco();
                break;

            case 'PATCH':
                if ($id) {
                    $this->updateEkzerco($id);
                } else {
                    $this->sendError(400, "ID exercice requis pour la modification");
                }
                break;

            case 'DELETE':
                if ($id) {
                    $this->deleteEkzerco($id);
                } else {
                    $this->sendError(400, "ID exercice requis pour la suppression");
                }
                break;

            default:
                $this->sendError(405, "Méthode non autorisée");
                break;
        }
    }

    private function getEkzercoj() {
        // Paramètres de filtrage
        $lecionero_id = isset($_GET['lecionero_id']) ? (int)$_GET['lecionero_id'] : null;
        $typo = isset($_GET['typo']) ? trim($_GET['typo']) : null;
        $korektebla = isset($_GET['korektebla']) ? $_GET['korektebla'] : null;

        try {
            // Construction de la requête
            $sql = "SELECT id, komando, lecionero_id, komando_detalo, ekzemplo, typo, x2u, korektebla FROM ekzercoj";
            $params = [];
            $where_conditions = [];

            // Filtre par section de leçon
            if ($lecionero_id !== null) {
                $where_conditions[] = "lecionero_id = ?";
                $params[] = $lecionero_id;
            }

            // Filtre par type
            if ($typo !== null) {
                if (!in_array($typo, $this->valid_types)) {
                    $this->sendError(400, "Type invalide. Types valides: " . implode(', ', $this->valid_types));
                    return;
                }
                $where_conditions[] = "typo = ?";
                $params[] = $typo;
            }

            // Filtre par korektebla
            if ($korektebla !== null) {
                $where_conditions[] = "korektebla = ?";
                $params[] = $korektebla === 'true' || $korektebla === '1' ? 1 : 0;
            }

            if (!empty($where_conditions)) {
                $sql .= " WHERE " . implode(' AND ', $where_conditions);
            }

            $sql .= " ORDER BY lecionero_id ASC, id ASC";

            $stmt = $this->conn->prepare($sql);
            $stmt->execute($params);
            $ekzercoj = $stmt->fetchAll(PDO::FETCH_ASSOC);

            // Conversion des types
            foreach ($ekzercoj as &$ekzerco) {
                $ekzerco['id'] = (int)$ekzerco['id'];
                $ekzerco['lecionero_id'] = (int)$ekzerco['lecionero_id'];
                $ekzerco['x2u'] = (bool)$ekzerco['x2u'];
                $ekzerco['korektebla'] = (bool)$ekzerco['korektebla'];
            }

            $response = [
                'data' => $ekzercoj,
                'count' => count($ekzercoj)
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

    private function getEkzerco($id) {
        // Validation de l'ID
        $id = (int)$id;
        if ($id <= 0) {
            $this->sendError(400, "ID exercice invalide");
            return;
        }

        try {
            // Requête pour récupérer l'exercice
            $sql = "SELECT id, komando, lecionero_id, komando_detalo, ekzemplo, typo, x2u, korektebla FROM ekzercoj WHERE id = ?";

            $stmt = $this->conn->prepare($sql);
            $stmt->execute([$id]);
            $ekzerco = $stmt->fetch(PDO::FETCH_ASSOC);

            if (!$ekzerco) {
                $this->sendError(404, "Exercice non trouvé");
                return;
            }

            // Conversion des types
            $ekzerco['id'] = (int)$ekzerco['id'];
            $ekzerco['lecionero_id'] = (int)$ekzerco['lecionero_id'];
            $ekzerco['x2u'] = (bool)$ekzerco['x2u'];
            $ekzerco['korektebla'] = (bool)$ekzerco['korektebla'];

            $response = [
                'data' => $ekzerco
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

    private function createEkzerco() {
        // Vérifier l'authentification et les droits administrateur
        if (!$this->requireAdminAuth()) {
            return;
        }

        // Récupération des données POST
        $input = json_decode(file_get_contents('php://input'), true);
        if (!$input) {
            $input = $_POST;
        }

        $komando = isset($input['komando']) ? trim($input['komando']) : "";
        $lecionero_id = isset($input['lecionero_id']) ? (int)$input['lecionero_id'] : null;
        $komando_detalo = isset($input['komando_detalo']) ? trim($input['komando_detalo']) : null;
        $ekzemplo = isset($input['ekzemplo']) ? trim($input['ekzemplo']) : null;
        $typo = isset($input['typo']) ? trim($input['typo']) : "";
        $x2u = isset($input['x2u']) ? (bool)$input['x2u'] : false;
        $korektebla = isset($input['korektebla']) ? (bool)$input['korektebla'] : false;

        // Validation des champs obligatoires
        if ($komando == "") {
            $this->sendError(400, "La commande de l'exercice est requise");
            return;
        }

        if ($lecionero_id === null) {
            $this->sendError(400, "L'ID de la section de leçon est requis");
            return;
        }

        if ($typo == "") {
            $this->sendError(400, "Le type de l'exercice est requis");
            return;
        }

        // Validation du type
        if (!in_array($typo, $this->valid_types)) {
            $this->sendError(400, "Type invalide. Types valides: " . implode(', ', $this->valid_types));
            return;
        }

        try {
            // Vérifier que la section de leçon existe
            $query = "SELECT COUNT(*) as combien FROM lecioneroj WHERE id = ?";
            $stmt = $this->conn->prepare($query);
            $stmt->execute([$lecionero_id]);
            $lecionero_existe = $stmt->fetch()["combien"];

            if ($lecionero_existe == 0) {
                $this->sendError(404, "La section de leçon spécifiée n'existe pas");
                return;
            }

            // Création de l'exercice
            $query = "INSERT INTO ekzercoj (komando, lecionero_id, komando_detalo, ekzemplo, typo, x2u, korektebla) VALUES (?, ?, ?, ?, ?, ?, ?)";
            $stmt = $this->conn->prepare($query);
            $stmt->execute([
                $komando,
                $lecionero_id,
                $komando_detalo,
                $ekzemplo,
                $typo,
                $x2u ? 1 : 0,
                $korektebla ? 1 : 0
            ]);

            $ekzerco_id = $this->conn->lastInsertId();

            // Réponse de succès
            $response = [
                'message' => 'Exercice créé avec succès',
                'data' => [
                    'id' => (int)$ekzerco_id,
                    'komando' => $komando,
                    'lecionero_id' => $lecionero_id,
                    'komando_detalo' => $komando_detalo,
                    'ekzemplo' => $ekzemplo,
                    'typo' => $typo,
                    'x2u' => $x2u,
                    'korektebla' => $korektebla
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

    private function updateEkzerco($id) {
        // Vérifier l'authentification et les droits administrateur
        if (!$this->requireAdminAuth()) {
            return;
        }

        // Validation de l'ID
        $id = (int)$id;
        if ($id <= 0) {
            $this->sendError(400, "ID exercice invalide");
            return;
        }

        // Récupération des données PATCH
        $input = json_decode(file_get_contents('php://input'), true);
        if (!$input) {
            $this->sendError(400, "Données JSON invalides");
            return;
        }

        try {
            // Vérifier que l'exercice existe
            $stmt = $this->conn->prepare("SELECT id FROM ekzercoj WHERE id = ?");
            $stmt->execute([$id]);
            $existing_ekzerco = $stmt->fetch(PDO::FETCH_ASSOC);

            if (!$existing_ekzerco) {
                $this->sendError(404, "Exercice non trouvé");
                return;
            }

            // Champs modifiables
            $allowed_fields = ['komando', 'lecionero_id', 'komando_detalo', 'ekzemplo', 'typo', 'x2u', 'korektebla'];

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
                if ($field === 'lecionero_id') {
                    $value = (int)$value;

                    // Vérifier que la section de leçon existe
                    $stmt = $this->conn->prepare("SELECT COUNT(*) as combien FROM lecioneroj WHERE id = ?");
                    $stmt->execute([$value]);
                    if ($stmt->fetch()["combien"] == 0) {
                        $this->sendError(404, "La section de leçon spécifiée n'existe pas");
                        return;
                    }
                }

                if ($field === 'typo') {
                    if (!in_array($value, $this->valid_types)) {
                        $this->sendError(400, "Type invalide. Types valides: " . implode(', ', $this->valid_types));
                        return;
                    }
                }

                if ($field === 'komando') {
                    $value = trim($value);
                    if (empty($value)) {
                        $this->sendError(400, "La commande ne peut pas être vide");
                        return;
                    }
                }

                if (in_array($field, ['x2u', 'korektebla'])) {
                    $value = $value ? 1 : 0;
                }

                if ($field === 'lecionero_id') {
                    $value = (int)$value;
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
            $sql = "UPDATE ekzercoj SET " . implode(', ', $update_fields) . " WHERE id = ?";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute($update_values);

            // Récupérer les données mises à jour
            $stmt = $this->conn->prepare("SELECT id, komando, lecionero_id, komando_detalo, ekzemplo, typo, x2u, korektebla FROM ekzercoj WHERE id = ?");
            $stmt->execute([$id]);
            $updated_ekzerco = $stmt->fetch(PDO::FETCH_ASSOC);

            // Conversion des types
            $updated_ekzerco['id'] = (int)$updated_ekzerco['id'];
            $updated_ekzerco['lecionero_id'] = (int)$updated_ekzerco['lecionero_id'];
            $updated_ekzerco['x2u'] = (bool)$updated_ekzerco['x2u'];
            $updated_ekzerco['korektebla'] = (bool)$updated_ekzerco['korektebla'];

            $response = [
                'message' => 'Exercice modifié avec succès',
                'data' => $updated_ekzerco
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

    private function deleteEkzerco($id) {
        // Vérifier l'authentification et les droits administrateur
        if (!$this->requireAdminAuth()) {
            return;
        }

        // Validation de l'ID
        $id = (int)$id;
        if ($id <= 0) {
            $this->sendError(400, "ID exercice invalide");
            return;
        }

        try {
            // Vérifier que l'exercice existe
            $stmt = $this->conn->prepare("SELECT id, komando, typo FROM ekzercoj WHERE id = ?");
            $stmt->execute([$id]);
            $ekzerco_to_delete = $stmt->fetch(PDO::FETCH_ASSOC);

            if (!$ekzerco_to_delete) {
                $this->sendError(404, "Exercice non trouvé");
                return;
            }

            // Vérifier si l'exercice contient des sous-exercices (ekzerceroj)
            $stmt = $this->conn->prepare("SELECT COUNT(*) as combien FROM ekzerceroj WHERE ekzerco_id = ?");
            $stmt->execute([$id]);
            $count_subekzercoj = $stmt->fetch()["combien"];

            if ($count_subekzercoj > 0) {
                $this->sendError(409, "Impossible de supprimer cet exercice car il contient $count_subekzercoj sous-exercice(s)");
                return;
            }

            // Vérifier si l'exercice a des réponses d'étudiants
            $stmt = $this->conn->prepare("SELECT COUNT(*) as combien FROM respondoj WHERE ekzerco_id = ?");
            $stmt->execute([$id]);
            $count_responses = $stmt->fetch()["combien"];

            if ($count_responses > 0) {
                $this->sendError(409, "Impossible de supprimer cet exercice car il a $count_responses réponse(s) d'étudiant(s)");
                return;
            }

            // Supprimer l'exercice
            $stmt = $this->conn->prepare("DELETE FROM ekzercoj WHERE id = ?");
            $stmt->execute([$id]);

            // Vérifier que la suppression a bien eu lieu
            if ($stmt->rowCount() === 0) {
                $this->sendError(500, "Aucune ligne supprimée");
                return;
            }

            $response = [
                'message' => 'Exercice supprimé avec succès',
                'data' => [
                    'id' => (int)$id,
                    'komando' => $ekzerco_to_delete['komando'],
                    'typo' => $ekzerco_to_delete['typo']
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
