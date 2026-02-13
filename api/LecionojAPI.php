<?php
// LecionojAPI.php - Classe pour gérer l'API des leçons (lecionoj)

class LecionojAPI {
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

        if (empty($segments) || $segments[0] !== 'lecionoj') {
            $this->sendError(404, "Endpoint non trouvé");
            return;
        }

        $resource = $segments[0]; // 'lecionoj'
        $id = isset($segments[1]) ? $segments[1] : null;

        switch ($method) {
            case 'GET':
                if ($id) {
                    $this->getLeciono($id);
                } else {
                    $this->getLecionoj();
                }
                break;

            case 'POST':
                $this->createLeciono();
                break;

            case 'PATCH':
                if ($id) {
                    $this->updateLeciono($id);
                } else {
                    $this->sendError(400, "ID leçon requis pour la modification");
                }
                break;

            case 'DELETE':
                if ($id) {
                    $this->deleteLeciono($id);
                } else {
                    $this->sendError(400, "ID leçon requis pour la suppression");
                }
                break;

            default:
                $this->sendError(405, "Méthode non autorisée");
                break;
        }
    }

    private function getLecionoj() {
        // Paramètres de filtrage
        $kurso = isset($_GET['kurso']) ? trim($_GET['kurso']) : null;
        $numero = isset($_GET['numero']) ? (int)$_GET['numero'] : null;

        try {
            // Construction de la requête
            $sql = "SELECT id, numero, titolo, retpagxo, kurso, unua, lasta FROM lecionoj";
            $params = [];
            $where_conditions = [];

            // Filtre par cours
            if ($kurso !== null) {
                $where_conditions[] = "kurso = ?";
                $params[] = $kurso;
            }

            // Filtre par numéro
            if ($numero !== null) {
                $where_conditions[] = "numero = ?";
                $params[] = $numero;
            }

            if (!empty($where_conditions)) {
                $sql .= " WHERE " . implode(' AND ', $where_conditions);
            }

            $sql .= " ORDER BY kurso ASC, numero ASC";

            $stmt = $this->conn->prepare($sql);
            $stmt->execute($params);
            $lecionoj = $stmt->fetchAll(PDO::FETCH_ASSOC);

            // Conversion des types
            foreach ($lecionoj as &$leciono) {
                $leciono['id'] = (int)$leciono['id'];
                $leciono['numero'] = (int)$leciono['numero'];
                $leciono['unua'] = (bool)$leciono['unua'];
                $leciono['lasta'] = (bool)$leciono['lasta'];
            }

            $response = [
                'data' => $lecionoj,
                'count' => count($lecionoj)
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

    private function getLeciono($id) {
        // Validation de l'ID
        $id = (int)$id;
        if ($id <= 0) {
            $this->sendError(400, "ID leçon invalide");
            return;
        }

        try {
            // Requête pour récupérer la leçon
            $sql = "SELECT id, numero, titolo, retpagxo, kurso, unua, lasta FROM lecionoj WHERE id = ?";

            $stmt = $this->conn->prepare($sql);
            $stmt->execute([$id]);
            $leciono = $stmt->fetch(PDO::FETCH_ASSOC);

            if (!$leciono) {
                $this->sendError(404, "Leçon non trouvée");
                return;
            }

            // Conversion des types
            $leciono['id'] = (int)$leciono['id'];
            $leciono['numero'] = (int)$leciono['numero'];
            $leciono['unua'] = (bool)$leciono['unua'];
            $leciono['lasta'] = (bool)$leciono['lasta'];

            $response = [
                'data' => $leciono
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

    private function createLeciono() {
        // Vérifier l'authentification et les droits administrateur
        if (!$this->requireAdminAuth()) {
            return;
        }

        // Récupération des données POST
        $input = json_decode(file_get_contents('php://input'), true);
        if (!$input) {
            $input = $_POST;
        }

        $numero = isset($input['numero']) ? (int)$input['numero'] : null;
        $titolo = isset($input['titolo']) ? trim($input['titolo']) : "";
        $retpagxo = isset($input['retpagxo']) ? trim($input['retpagxo']) : null;
        $kurso = isset($input['kurso']) ? trim($input['kurso']) : "";
        $unua = isset($input['unua']) ? (bool)$input['unua'] : false;
        $lasta = isset($input['lasta']) ? (bool)$input['lasta'] : false;

        // Validation des champs obligatoires
        if ($numero === null) {
            $this->sendError(400, "Le numéro de la leçon est requis");
            return;
        }

        if ($kurso == "") {
            $this->sendError(400, "Le code du cours est requis");
            return;
        }

        if (strlen($kurso) > 2) {
            $this->sendError(400, "Le code du cours ne peut pas dépasser 2 caractères");
            return;
        }

        try {
            // Vérifier que le cours existe
            $query = "SELECT COUNT(*) as combien FROM kursoj WHERE kodo = ?";
            $stmt = $this->conn->prepare($query);
            $stmt->execute([$kurso]);
            $kurso_existe = $stmt->fetch()["combien"];

            if ($kurso_existe == 0) {
                $this->sendError(404, "Le cours spécifié n'existe pas");
                return;
            }

            // Vérifier si une leçon avec ce numéro existe déjà pour ce cours
            $query = "SELECT COUNT(*) as combien FROM lecionoj WHERE numero = ? AND kurso = ?";
            $stmt = $this->conn->prepare($query);
            $stmt->execute([$numero, $kurso]);
            $leciono_existe = $stmt->fetch()["combien"];

            if ($leciono_existe > 0) {
                $this->sendError(409, "Une leçon avec ce numéro existe déjà pour ce cours");
                return;
            }

            // Création de la leçon
            $query = "INSERT INTO lecionoj (numero, titolo, retpagxo, kurso, unua, lasta) VALUES (?, ?, ?, ?, ?, ?)";
            $stmt = $this->conn->prepare($query);
            $stmt->execute([$numero, $titolo, $retpagxo, $kurso, $unua ? 1 : 0, $lasta ? 1 : 0]);

            $leciono_id = $this->conn->lastInsertId();

            // Réponse de succès
            $response = [
                'message' => 'Leçon créée avec succès',
                'data' => [
                    'id' => (int)$leciono_id,
                    'numero' => $numero,
                    'titolo' => $titolo,
                    'retpagxo' => $retpagxo,
                    'kurso' => $kurso,
                    'unua' => $unua,
                    'lasta' => $lasta
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

    private function updateLeciono($id) {
        // Vérifier l'authentification et les droits administrateur
        if (!$this->requireAdminAuth()) {
            return;
        }

        // Validation de l'ID
        $id = (int)$id;
        if ($id <= 0) {
            $this->sendError(400, "ID leçon invalide");
            return;
        }

        // Récupération des données PATCH
        $input = json_decode(file_get_contents('php://input'), true);
        if (!$input) {
            $this->sendError(400, "Données JSON invalides");
            return;
        }

        try {
            // Vérifier que la leçon existe
            $stmt = $this->conn->prepare("SELECT id, numero, kurso FROM lecionoj WHERE id = ?");
            $stmt->execute([$id]);
            $existing_leciono = $stmt->fetch(PDO::FETCH_ASSOC);

            if (!$existing_leciono) {
                $this->sendError(404, "Leçon non trouvée");
                return;
            }

            // Champs modifiables
            $allowed_fields = ['numero', 'titolo', 'retpagxo', 'kurso', 'unua', 'lasta'];

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
                if ($field === 'kurso') {
                    $value = trim($value);
                    if (empty($value)) {
                        $this->sendError(400, "Le code du cours ne peut pas être vide");
                        return;
                    }
                    if (strlen($value) > 2) {
                        $this->sendError(400, "Le code du cours ne peut pas dépasser 2 caractères");
                        return;
                    }

                    // Vérifier que le cours existe
                    $stmt = $this->conn->prepare("SELECT COUNT(*) as combien FROM kursoj WHERE kodo = ?");
                    $stmt->execute([$value]);
                    if ($stmt->fetch()["combien"] == 0) {
                        $this->sendError(404, "Le cours spécifié n'existe pas");
                        return;
                    }
                }

                if ($field === 'numero') {
                    $value = (int)$value;

                    // Vérifier l'unicité du numéro pour ce cours (sauf pour la leçon actuelle)
                    $kurso_check = isset($input['kurso']) ? $input['kurso'] : $existing_leciono['kurso'];
                    $stmt = $this->conn->prepare("SELECT COUNT(*) as combien FROM lecionoj WHERE numero = ? AND kurso = ? AND id != ?");
                    $stmt->execute([$value, $kurso_check, $id]);
                    if ($stmt->fetch()["combien"] > 0) {
                        $this->sendError(409, "Une leçon avec ce numéro existe déjà pour ce cours");
                        return;
                    }
                }

                if (in_array($field, ['unua', 'lasta'])) {
                    $value = $value ? 1 : 0;
                }

                if ($field === 'numero') {
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
            $sql = "UPDATE lecionoj SET " . implode(', ', $update_fields) . " WHERE id = ?";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute($update_values);

            // Récupérer les données mises à jour
            $stmt = $this->conn->prepare("SELECT id, numero, titolo, retpagxo, kurso, unua, lasta FROM lecionoj WHERE id = ?");
            $stmt->execute([$id]);
            $updated_leciono = $stmt->fetch(PDO::FETCH_ASSOC);

            // Conversion des types
            $updated_leciono['id'] = (int)$updated_leciono['id'];
            $updated_leciono['numero'] = (int)$updated_leciono['numero'];
            $updated_leciono['unua'] = (bool)$updated_leciono['unua'];
            $updated_leciono['lasta'] = (bool)$updated_leciono['lasta'];

            $response = [
                'message' => 'Leçon modifiée avec succès',
                'data' => $updated_leciono
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

    private function deleteLeciono($id) {
        // Vérifier l'authentification et les droits administrateur
        if (!$this->requireAdminAuth()) {
            return;
        }

        // Validation de l'ID
        $id = (int)$id;
        if ($id <= 0) {
            $this->sendError(400, "ID leçon invalide");
            return;
        }

        try {
            // Vérifier que la leçon existe
            $stmt = $this->conn->prepare("SELECT id, numero, titolo, kurso FROM lecionoj WHERE id = ?");
            $stmt->execute([$id]);
            $leciono_to_delete = $stmt->fetch(PDO::FETCH_ASSOC);

            if (!$leciono_to_delete) {
                $this->sendError(404, "Leçon non trouvée");
                return;
            }

            // Vérifier si la leçon contient des sections
            $stmt = $this->conn->prepare("SELECT COUNT(*) as combien FROM lecioneroj WHERE leciono_id = ?");
            $stmt->execute([$id]);
            $count_sections = $stmt->fetch()["combien"];

            if ($count_sections > 0) {
                $this->sendError(409, "Impossible de supprimer cette leçon car elle contient $count_sections section(s)");
                return;
            }

            // Vérifier si la leçon a des exercices
            $stmt = $this->conn->prepare("SELECT COUNT(*) as combien FROM ekzercoj e INNER JOIN lecioneroj lr ON e.lecionero_id = lr.id WHERE lr.leciono_id = ?");
            $stmt->execute([$id]);
            $count_exercises = $stmt->fetch()["combien"];

            if ($count_exercises > 0) {
                $this->sendError(409, "Impossible de supprimer cette leçon car elle contient $count_exercises exercice(s)");
                return;
            }

            // Supprimer la leçon
            $stmt = $this->conn->prepare("DELETE FROM lecionoj WHERE id = ?");
            $stmt->execute([$id]);

            // Vérifier que la suppression a bien eu lieu
            if ($stmt->rowCount() === 0) {
                $this->sendError(500, "Aucune ligne supprimée");
                return;
            }

            $response = [
                'message' => 'Leçon supprimée avec succès',
                'data' => [
                    'id' => (int)$id,
                    'numero' => (int)$leciono_to_delete['numero'],
                    'titolo' => $leciono_to_delete['titolo'],
                    'kurso' => $leciono_to_delete['kurso']
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
