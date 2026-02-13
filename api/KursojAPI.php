<?php
// KursojAPI.php - Classe pour gérer l'API des cours (kursoj)

class KursojAPI {
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

        if (empty($segments) || $segments[0] !== 'kursoj') {
            $this->sendError(404, "Endpoint non trouvé");
            return;
        }

        $resource = $segments[0]; // 'kursoj'
        $id = isset($segments[1]) ? $segments[1] : null;

        switch ($method) {
            case 'GET':
                if ($id) {
                    $this->getKurso($id);
                } else {
                    $this->getKursoj();
                }
                break;

            case 'POST':
                $this->createKurso();
                break;

            case 'PATCH':
                if ($id) {
                    $this->updateKurso($id);
                } else {
                    $this->sendError(400, "ID cours requis pour la modification");
                }
                break;

            case 'DELETE':
                if ($id) {
                    $this->deleteKurso($id);
                } else {
                    $this->sendError(400, "ID cours requis pour la suppression");
                }
                break;

            default:
                $this->sendError(405, "Méthode non autorisée");
                break;
        }
    }

    private function getKursoj() {
        // Vérifier l'authentification (optionnelle pour la liste)
        // Les cours sont publics, mais on peut enrichir avec des infos utilisateur

        try {
            // Requête pour récupérer tous les cours
            $sql = "SELECT id, kodo, nomo FROM kursoj ORDER BY id ASC";

            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
            $kursoj = $stmt->fetchAll(PDO::FETCH_ASSOC);

            // Conversion des types
            foreach ($kursoj as &$kurso) {
                $kurso['id'] = (int)$kurso['id'];
            }

            $response = [
                'data' => $kursoj,
                'count' => count($kursoj)
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

    private function getKurso($id) {
        // Validation de l'ID
        $id = (int)$id;
        if ($id <= 0) {
            $this->sendError(400, "ID cours invalide");
            return;
        }

        try {
            // Requête pour récupérer le cours
            $sql = "SELECT id, kodo, nomo FROM kursoj WHERE id = ?";

            $stmt = $this->conn->prepare($sql);
            $stmt->execute([$id]);
            $kurso = $stmt->fetch(PDO::FETCH_ASSOC);

            if (!$kurso) {
                $this->sendError(404, "Cours non trouvé");
                return;
            }

            // Conversion des types
            $kurso['id'] = (int)$kurso['id'];

            $response = [
                'data' => $kurso
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

    private function createKurso() {
        // Vérifier l'authentification et les droits administrateur
        if (!$this->requireAdminAuth()) {
            return;
        }

        // Récupération des données POST
        $input = json_decode(file_get_contents('php://input'), true);
        if (!$input) {
            $input = $_POST;
        }

        $kodo = isset($input['kodo']) ? trim($input['kodo']) : "";
        $nomo = isset($input['nomo']) ? trim($input['nomo']) : "";

        // Validation des champs obligatoires
        if ($kodo == "") {
            $this->sendError(400, "Le code du cours est requis");
            return;
        }

        if (strlen($kodo) > 2) {
            $this->sendError(400, "Le code du cours ne peut pas dépasser 2 caractères");
            return;
        }

        if ($nomo == "") {
            $this->sendError(400, "Le nom du cours est requis");
            return;
        }

        try {
            // Vérifier si le code est déjà utilisé
            $query = "SELECT COUNT(*) as combien FROM kursoj WHERE kodo = ?";
            $stmt = $this->conn->prepare($query);
            $stmt->execute([$kodo]);
            $kodo_en_base = $stmt->fetch()["combien"];

            if ($kodo_en_base > 0) {
                $this->sendError(409, "Un cours existe déjà avec ce code");
                return;
            }

            // Création du cours
            $query = "INSERT INTO kursoj (kodo, nomo) VALUES (?, ?)";
            $stmt = $this->conn->prepare($query);
            $stmt->execute([$kodo, $nomo]);

            $kurso_id = $this->conn->lastInsertId();

            // Réponse de succès
            $response = [
                'message' => 'Cours créé avec succès',
                'data' => [
                    'id' => (int)$kurso_id,
                    'kodo' => $kodo,
                    'nomo' => $nomo
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

    private function updateKurso($id) {
        // Vérifier l'authentification et les droits administrateur
        if (!$this->requireAdminAuth()) {
            return;
        }

        // Validation de l'ID
        $id = (int)$id;
        if ($id <= 0) {
            $this->sendError(400, "ID cours invalide");
            return;
        }

        // Récupération des données PATCH
        $input = json_decode(file_get_contents('php://input'), true);
        if (!$input) {
            $this->sendError(400, "Données JSON invalides");
            return;
        }

        try {
            // Vérifier que le cours existe
            $stmt = $this->conn->prepare("SELECT id, kodo FROM kursoj WHERE id = ?");
            $stmt->execute([$id]);
            $existing_kurso = $stmt->fetch(PDO::FETCH_ASSOC);

            if (!$existing_kurso) {
                $this->sendError(404, "Cours non trouvé");
                return;
            }

            // Champs modifiables
            $allowed_fields = ['kodo', 'nomo'];

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
                if ($field === 'kodo') {
                    $value = trim($value);
                    if (empty($value)) {
                        $this->sendError(400, "Le code du cours ne peut pas être vide");
                        return;
                    }
                    if (strlen($value) > 2) {
                        $this->sendError(400, "Le code du cours ne peut pas dépasser 2 caractères");
                        return;
                    }

                    // Vérifier l'unicité du code (sauf pour le cours actuel)
                    $stmt = $this->conn->prepare("SELECT COUNT(*) as combien FROM kursoj WHERE kodo = ? AND id != ?");
                    $stmt->execute([$value, $id]);
                    if ($stmt->fetch()["combien"] > 0) {
                        $this->sendError(409, "Ce code de cours est déjà utilisé");
                        return;
                    }
                }

                if ($field === 'nomo') {
                    $value = trim($value);
                    if (empty($value)) {
                        $this->sendError(400, "Le nom du cours ne peut pas être vide");
                        return;
                    }
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
            $sql = "UPDATE kursoj SET " . implode(', ', $update_fields) . " WHERE id = ?";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute($update_values);

            // Récupérer les données mises à jour
            $stmt = $this->conn->prepare("SELECT id, kodo, nomo FROM kursoj WHERE id = ?");
            $stmt->execute([$id]);
            $updated_kurso = $stmt->fetch(PDO::FETCH_ASSOC);

            // Conversion des types
            $updated_kurso['id'] = (int)$updated_kurso['id'];

            $response = [
                'message' => 'Cours modifié avec succès',
                'data' => $updated_kurso
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

    private function deleteKurso($id) {
        // Vérifier l'authentification et les droits administrateur
        if (!$this->requireAdminAuth()) {
            return;
        }

        // Validation de l'ID
        $id = (int)$id;
        if ($id <= 0) {
            $this->sendError(400, "ID cours invalide");
            return;
        }

        try {
            // Vérifier que le cours existe
            $stmt = $this->conn->prepare("SELECT id, kodo, nomo FROM kursoj WHERE id = ?");
            $stmt->execute([$id]);
            $kurso_to_delete = $stmt->fetch(PDO::FETCH_ASSOC);

            if (!$kurso_to_delete) {
                $this->sendError(404, "Cours non trouvé");
                return;
            }

            // Vérifier si le cours est utilisé par des étudiants
            $stmt = $this->conn->prepare("SELECT COUNT(*) as combien FROM nuna_kurso WHERE kurso = ?");
            $stmt->execute([$kurso_to_delete['kodo']]);
            $count_students = $stmt->fetch()["combien"];

            if ($count_students > 0) {
                $this->sendError(409, "Impossible de supprimer ce cours car il est utilisé par $count_students étudiant(s)");
                return;
            }

            // Vérifier si le cours est utilisé par des leçons
            $stmt = $this->conn->prepare("SELECT COUNT(*) as combien FROM lecionoj WHERE kurso = ?");
            $stmt->execute([$kurso_to_delete['kodo']]);
            $count_lessons = $stmt->fetch()["combien"];

            if ($count_lessons > 0) {
                $this->sendError(409, "Impossible de supprimer ce cours car il contient $count_lessons leçon(s)");
                return;
            }

            // Supprimer le cours
            $stmt = $this->conn->prepare("DELETE FROM kursoj WHERE id = ?");
            $stmt->execute([$id]);

            // Vérifier que la suppression a bien eu lieu
            if ($stmt->rowCount() === 0) {
                $this->sendError(500, "Aucune ligne supprimée");
                return;
            }

            $response = [
                'message' => 'Cours supprimé avec succès',
                'data' => [
                    'id' => (int)$id,
                    'kodo' => $kurso_to_delete['kodo'],
                    'nomo' => $kurso_to_delete['nomo']
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
