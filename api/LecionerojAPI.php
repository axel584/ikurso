<?php
// LecionerojAPI.php - Classe pour gérer l'API des sections de leçons (lecioneroj)

class LecionerojAPI {
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

        if (empty($segments) || $segments[0] !== 'lecioneroj') {
            $this->sendError(404, "Endpoint non trouvé");
            return;
        }

        $resource = $segments[0]; // 'lecioneroj'
        $id = isset($segments[1]) ? $segments[1] : null;

        switch ($method) {
            case 'GET':
                if ($id) {
                    $this->getLecionero($id);
                } else {
                    $this->getLecioneroj();
                }
                break;

            case 'POST':
                $this->createLecionero();
                break;

            case 'PATCH':
                if ($id) {
                    $this->updateLecionero($id);
                } else {
                    $this->sendError(400, "ID section requis pour la modification");
                }
                break;

            case 'DELETE':
                if ($id) {
                    $this->deleteLecionero($id);
                } else {
                    $this->sendError(400, "ID section requis pour la suppression");
                }
                break;

            default:
                $this->sendError(405, "Méthode non autorisée");
                break;
        }
    }

    private function getLecioneroj() {
        // Paramètres de filtrage
        $leciono_id = isset($_GET['leciono_id']) ? (int)$_GET['leciono_id'] : null;
        $tipo = isset($_GET['tipo']) ? trim($_GET['tipo']) : null;

        try {
            // Construction de la requête
            $sql = "SELECT id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta, dauxro, android FROM lecioneroj";
            $params = [];
            $where_conditions = [];

            // Filtre par leçon
            if ($leciono_id !== null) {
                $where_conditions[] = "leciono_id = ?";
                $params[] = $leciono_id;
            }

            // Filtre par type
            if ($tipo !== null) {
                $valid_tipos = ['VORTARO', 'QCM', 'TEKSTO', 'EKZERCARO'];
                if (!in_array($tipo, $valid_tipos)) {
                    $this->sendError(400, "Type invalide. Types valides: " . implode(', ', $valid_tipos));
                    return;
                }
                $where_conditions[] = "tipo = ?";
                $params[] = $tipo;
            }

            if (!empty($where_conditions)) {
                $sql .= " WHERE " . implode(' AND ', $where_conditions);
            }

            $sql .= " ORDER BY leciono_id ASC, ordo ASC";

            $stmt = $this->conn->prepare($sql);
            $stmt->execute($params);
            $lecioneroj = $stmt->fetchAll(PDO::FETCH_ASSOC);

            // Conversion des types
            foreach ($lecioneroj as &$lecionero) {
                $lecionero['id'] = (int)$lecionero['id'];
                $lecionero['leciono_id'] = $lecionero['leciono_id'] !== null ? (int)$lecionero['leciono_id'] : null;
                $lecionero['ordo'] = $lecionero['ordo'] !== null ? (int)$lecionero['ordo'] : null;
                $lecionero['unua'] = (bool)$lecionero['unua'];
                $lecionero['lasta'] = (bool)$lecionero['lasta'];
                $lecionero['dauxro'] = $lecionero['dauxro'] !== null ? (int)$lecionero['dauxro'] : null;
                $lecionero['android'] = $lecionero['android'] !== null ? (bool)$lecionero['android'] : null;
            }

            $response = [
                'data' => $lecioneroj,
                'count' => count($lecioneroj)
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

    private function getLecionero($id) {
        // Validation de l'ID
        $id = (int)$id;
        if ($id <= 0) {
            $this->sendError(400, "ID section invalide");
            return;
        }

        try {
            // Requête pour récupérer la section
            $sql = "SELECT id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta, dauxro, android FROM lecioneroj WHERE id = ?";

            $stmt = $this->conn->prepare($sql);
            $stmt->execute([$id]);
            $lecionero = $stmt->fetch(PDO::FETCH_ASSOC);

            if (!$lecionero) {
                $this->sendError(404, "Section non trouvée");
                return;
            }

            // Conversion des types
            $lecionero['id'] = (int)$lecionero['id'];
            $lecionero['leciono_id'] = $lecionero['leciono_id'] !== null ? (int)$lecionero['leciono_id'] : null;
            $lecionero['ordo'] = $lecionero['ordo'] !== null ? (int)$lecionero['ordo'] : null;
            $lecionero['unua'] = (bool)$lecionero['unua'];
            $lecionero['lasta'] = (bool)$lecionero['lasta'];
            $lecionero['dauxro'] = $lecionero['dauxro'] !== null ? (int)$lecionero['dauxro'] : null;
            $lecionero['android'] = $lecionero['android'] !== null ? (bool)$lecionero['android'] : null;

            $response = [
                'data' => $lecionero
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

    private function createLecionero() {
        // Vérifier l'authentification et les droits administrateur
        if (!$this->requireAdminAuth()) {
            return;
        }

        // Récupération des données POST
        $input = json_decode(file_get_contents('php://input'), true);
        if (!$input) {
            $input = $_POST;
        }

        $leciono_id = isset($input['leciono_id']) ? (int)$input['leciono_id'] : null;
        $titolo = isset($input['titolo']) ? trim($input['titolo']) : null;
        $tipo = isset($input['tipo']) ? trim($input['tipo']) : null;
        $enhavo = isset($input['enhavo']) ? trim($input['enhavo']) : null;
        $ordo = isset($input['ordo']) ? (int)$input['ordo'] : null;
        $unua = isset($input['unua']) ? (bool)$input['unua'] : false;
        $lasta = isset($input['lasta']) ? (bool)$input['lasta'] : false;
        $dauxro = isset($input['dauxro']) ? (int)$input['dauxro'] : null;
        $android = isset($input['android']) ? (bool)$input['android'] : null;

        // Validation du type si fourni
        if ($tipo !== null) {
            $valid_tipos = ['VORTARO', 'QCM', 'TEKSTO', 'EKZERCARO'];
            if (!in_array($tipo, $valid_tipos)) {
                $this->sendError(400, "Type invalide. Types valides: " . implode(', ', $valid_tipos));
                return;
            }
        }

        try {
            // Vérifier que la leçon existe si leciono_id est fourni
            if ($leciono_id !== null) {
                $query = "SELECT COUNT(*) as combien FROM lecionoj WHERE id = ?";
                $stmt = $this->conn->prepare($query);
                $stmt->execute([$leciono_id]);
                $leciono_existe = $stmt->fetch()["combien"];

                if ($leciono_existe == 0) {
                    $this->sendError(404, "La leçon spécifiée n'existe pas");
                    return;
                }
            }

            // Création de la section
            $query = "INSERT INTO lecioneroj (leciono_id, titolo, tipo, enhavo, ordo, unua, lasta, dauxro, android) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
            $stmt = $this->conn->prepare($query);
            $stmt->execute([
                $leciono_id,
                $titolo,
                $tipo,
                $enhavo,
                $ordo,
                $unua ? 1 : 0,
                $lasta ? 1 : 0,
                $dauxro,
                $android !== null ? ($android ? 1 : 0) : null
            ]);

            $lecionero_id = $this->conn->lastInsertId();

            // Réponse de succès
            $response = [
                'message' => 'Section créée avec succès',
                'data' => [
                    'id' => (int)$lecionero_id,
                    'leciono_id' => $leciono_id,
                    'titolo' => $titolo,
                    'tipo' => $tipo,
                    'enhavo' => $enhavo,
                    'ordo' => $ordo,
                    'unua' => $unua,
                    'lasta' => $lasta,
                    'dauxro' => $dauxro,
                    'android' => $android
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

    private function updateLecionero($id) {
        // Vérifier l'authentification et les droits administrateur
        if (!$this->requireAdminAuth()) {
            return;
        }

        // Validation de l'ID
        $id = (int)$id;
        if ($id <= 0) {
            $this->sendError(400, "ID section invalide");
            return;
        }

        // Récupération des données PATCH
        $input = json_decode(file_get_contents('php://input'), true);
        if (!$input) {
            $this->sendError(400, "Données JSON invalides");
            return;
        }

        try {
            // Vérifier que la section existe
            $stmt = $this->conn->prepare("SELECT id FROM lecioneroj WHERE id = ?");
            $stmt->execute([$id]);
            $existing_lecionero = $stmt->fetch(PDO::FETCH_ASSOC);

            if (!$existing_lecionero) {
                $this->sendError(404, "Section non trouvée");
                return;
            }

            // Champs modifiables
            $allowed_fields = ['leciono_id', 'titolo', 'tipo', 'enhavo', 'ordo', 'unua', 'lasta', 'dauxro', 'android'];

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
                if ($field === 'leciono_id' && $value !== null) {
                    $value = (int)$value;

                    // Vérifier que la leçon existe
                    $stmt = $this->conn->prepare("SELECT COUNT(*) as combien FROM lecionoj WHERE id = ?");
                    $stmt->execute([$value]);
                    if ($stmt->fetch()["combien"] == 0) {
                        $this->sendError(404, "La leçon spécifiée n'existe pas");
                        return;
                    }
                }

                if ($field === 'tipo' && $value !== null) {
                    $valid_tipos = ['VORTARO', 'QCM', 'TEKSTO', 'EKZERCARO'];
                    if (!in_array($value, $valid_tipos)) {
                        $this->sendError(400, "Type invalide. Types valides: " . implode(', ', $valid_tipos));
                        return;
                    }
                }

                if (in_array($field, ['unua', 'lasta'])) {
                    $value = $value ? 1 : 0;
                }

                if ($field === 'android' && $value !== null) {
                    $value = $value ? 1 : 0;
                }

                if (in_array($field, ['leciono_id', 'ordo', 'dauxro'])) {
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
            $sql = "UPDATE lecioneroj SET " . implode(', ', $update_fields) . " WHERE id = ?";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute($update_values);

            // Récupérer les données mises à jour
            $stmt = $this->conn->prepare("SELECT id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta, dauxro, android FROM lecioneroj WHERE id = ?");
            $stmt->execute([$id]);
            $updated_lecionero = $stmt->fetch(PDO::FETCH_ASSOC);

            // Conversion des types
            $updated_lecionero['id'] = (int)$updated_lecionero['id'];
            $updated_lecionero['leciono_id'] = $updated_lecionero['leciono_id'] !== null ? (int)$updated_lecionero['leciono_id'] : null;
            $updated_lecionero['ordo'] = $updated_lecionero['ordo'] !== null ? (int)$updated_lecionero['ordo'] : null;
            $updated_lecionero['unua'] = (bool)$updated_lecionero['unua'];
            $updated_lecionero['lasta'] = (bool)$updated_lecionero['lasta'];
            $updated_lecionero['dauxro'] = $updated_lecionero['dauxro'] !== null ? (int)$updated_lecionero['dauxro'] : null;
            $updated_lecionero['android'] = $updated_lecionero['android'] !== null ? (bool)$updated_lecionero['android'] : null;

            $response = [
                'message' => 'Section modifiée avec succès',
                'data' => $updated_lecionero
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

    private function deleteLecionero($id) {
        // Vérifier l'authentification et les droits administrateur
        if (!$this->requireAdminAuth()) {
            return;
        }

        // Validation de l'ID
        $id = (int)$id;
        if ($id <= 0) {
            $this->sendError(400, "ID section invalide");
            return;
        }

        try {
            // Vérifier que la section existe
            $stmt = $this->conn->prepare("SELECT id, titolo, tipo FROM lecioneroj WHERE id = ?");
            $stmt->execute([$id]);
            $lecionero_to_delete = $stmt->fetch(PDO::FETCH_ASSOC);

            if (!$lecionero_to_delete) {
                $this->sendError(404, "Section non trouvée");
                return;
            }

            // Vérifier si la section contient des exercices
            $stmt = $this->conn->prepare("SELECT COUNT(*) as combien FROM ekzercoj WHERE lecionero_id = ?");
            $stmt->execute([$id]);
            $count_exercises = $stmt->fetch()["combien"];

            if ($count_exercises > 0) {
                $this->sendError(409, "Impossible de supprimer cette section car elle contient $count_exercises exercice(s)");
                return;
            }

            // Supprimer la section
            $stmt = $this->conn->prepare("DELETE FROM lecioneroj WHERE id = ?");
            $stmt->execute([$id]);

            // Vérifier que la suppression a bien eu lieu
            if ($stmt->rowCount() === 0) {
                $this->sendError(500, "Aucune ligne supprimée");
                return;
            }

            $response = [
                'message' => 'Section supprimée avec succès',
                'data' => [
                    'id' => (int)$id,
                    'titolo' => $lecionero_to_delete['titolo'],
                    'tipo' => $lecionero_to_delete['tipo']
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
