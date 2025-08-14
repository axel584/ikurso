<?php
// LegitajxojAPI.php - Classe pour gérer l'API des sessions de lecture

class LegitajxojAPI {
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
        
        if (empty($segments) || $segments[0] !== 'legitajxoj') {
            $this->sendError(404, "Endpoint non trouvé");
            return;
        }
        
        // Vérifier l'authentification
        require_once __DIR__ . '/JWTAuth.php';
        $persono_id = JWTAuth::getPersonoIdFromJWT();
        
        if (!$persono_id) {
            $this->sendError(401, "Authentification requise");
            return;
        }
        
        $resource = $segments[0]; // 'legitajxoj'
        $id = isset($segments[1]) ? $segments[1] : null;
        $action = isset($segments[2]) ? $segments[2] : null;
        
        if ($method === 'GET' && !$id) {
            // GET /api/legitajxoj
            $this->getLegitajxoj($persono_id);
        } elseif ($method === 'POST' && !$id) {
            // POST /api/legitajxoj
            $this->startReadingSession($persono_id);
        } elseif ($method === 'PATCH' && $id && !$action) {
            // PATCH /api/legitajxoj/{teksto_id}
            $this->updateReadingSessionByTekstoId($id, $persono_id);
        } else {
            $this->sendError(404, "Endpoint non trouvé");
        }
    }
    
    private function startReadingSession($persono_id) {
        // Récupération des données JSON
        $input = json_decode(file_get_contents('php://input'), true);
        
        if (!isset($input['teksto_id']) || !isset($input['komenc_timestamp'])) {
            $this->sendError(400, "Paramètres 'teksto_id' et 'komenc_timestamp' requis");
            return;
        }
        
        $teksto_id = $input['teksto_id'];
        $komenc_timestamp = $input['komenc_timestamp'];
        
        if (empty($teksto_id)) {
            $this->sendError(400, "teksto_id ne peut pas être vide");
            return;
        }
        
        // Validation du timestamp
        if (!$this->validateTimestamp($komenc_timestamp)) {
            $this->sendError(400, "komenc_timestamp doit être au format ISO 8601");
            return;
        }
        
        try {
            
            // Vérifier si la session existe déjà (idempotence)
            $stmt = $this->conn->prepare("SELECT id FROM legitajxoj WHERE persono_id = ? AND teksto_id = ? AND komenc_timestamp = ?");
            $stmt->execute([$persono_id, $teksto_id, $this->formatForDatabase($komenc_timestamp)]);
            $existing_session = $stmt->fetch(PDO::FETCH_ASSOC);
            
            if ($existing_session) {
                // La session existe déjà, renvoyer les données existantes
                $session_id = $existing_session['id'];
            } else {
                // Créer la nouvelle session de lecture
                $stmt = $this->conn->prepare("INSERT INTO legitajxoj (persono_id, teksto_id, komenc_timestamp) VALUES (?, ?, ?)");
                $stmt->execute([$persono_id, $teksto_id, $this->formatForDatabase($komenc_timestamp)]);
                
                $session_id = $this->conn->lastInsertId();
                
                // Logger l'action seulement pour les nouvelles créations
                $this->protokolo($persono_id, "LEGADO KOMENCO", "Komencis legi tekston: " . $teksto_id);
            }
            
            // Réponse de succès
            $respondo = array(
                "legitajxo_id" => $session_id,
                "persono_id" => $persono_id,
                "teksto_id" => $teksto_id,
                "komenc_timestamp" => $komenc_timestamp
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
    
    private function getLegitajxoj($persono_id) {
        try {
            // Récupérer tous les legitajxoj de l'utilisateur avec les données des tekstoj
            $stmt = $this->conn->prepare("
                SELECT 
                    l.id, 
                    l.teksto_id, 
                    l.komenc_timestamp,
                    l.fin_timestamp,
                    l.legad_tempo,
                    l.noto,
                    l.komentaro,
                    l.kreita_je, 
                    l.modifita_je,
                    t.titolo,
                    t.auxtoro,
                    t.fonto,
                    t.nivelo,
                    t.vortoj,
                    t.kolekto,
                    t.etikedoj,
                    t.sono,
                    t.leganto,
                    t.aktiva
                FROM legitajxoj l
                LEFT JOIN tekstoj t ON l.teksto_id = t.id
                WHERE l.persono_id = ? 
                ORDER BY l.modifita_je DESC
            ");
            $stmt->execute([$persono_id]);
            $legitajxoj = $stmt->fetchAll(PDO::FETCH_ASSOC);
            
            // Formatter les données pour l'API
            foreach ($legitajxoj as &$legitajxo) {
                $legitajxo['id'] = (int)$legitajxo['id'];
                $legitajxo['legad_tempo'] = $legitajxo['legad_tempo'] ? (int)$legitajxo['legad_tempo'] : null;
                $legitajxo['noto'] = $legitajxo['noto'] ? (int)$legitajxo['noto'] : null;
                $legitajxo['nivelo'] = $legitajxo['nivelo'] ? (int)$legitajxo['nivelo'] : null;
                $legitajxo['vortoj'] = $legitajxo['vortoj'] ? (int)$legitajxo['vortoj'] : null;
                $legitajxo['aktiva'] = $legitajxo['aktiva'] ? (int)$legitajxo['aktiva'] : null;
            }
            
            // Réponse de succès
            $respondo = array(
                "status" => "success",
                "count" => count($legitajxoj),
                "legitajxoj" => $legitajxoj
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
    
    private function updateReadingSessionByTekstoId($teksto_id, $persono_id) {
        // Récupération des données JSON
        $input = json_decode(file_get_contents('php://input'), true);
        
        if (empty($input)) {
            $this->sendError(400, "Aucune donnée à mettre à jour");
            return;
        }
        
        // Validation du teksto_id
        if (empty($teksto_id)) {
            $this->sendError(400, "teksto_id invalide");
            return;
        }
        
        try {
            // Vérifier qu'une session existe avec ce teksto_id pour l'utilisateur connecté
            $stmt = $this->conn->prepare("SELECT id, persono_id, teksto_id FROM legitajxoj WHERE teksto_id = ? AND persono_id = ?");
            $stmt->execute([$teksto_id, $persono_id]);
            $session = $stmt->fetch(PDO::FETCH_ASSOC);
            
            if (!$session) {
                $this->sendError(404, "Session de lecture non trouvée pour ce texte ou non autorisée");
                return;
            }
            
            $session_id = $session['id'];
            
            // Construire la requête de mise à jour dynamiquement
            $updateFields = array();
            $updateValues = array();
            
            if (isset($input['legad_tempo'])) {
                if (!is_numeric($input['legad_tempo']) || $input['legad_tempo'] < 0) {
                    $this->sendError(400, "legad_tempo doit être un nombre positif");
                    return;
                }
                $updateFields[] = "legad_tempo = ?";
                $updateValues[] = $input['legad_tempo'];
            }
            
            if (isset($input['noto'])) {
                if (!is_numeric($input['noto']) || $input['noto'] < 1 || $input['noto'] > 5) {
                    $this->sendError(400, "noto doit être un nombre entre 1 et 5");
                    return;
                }
                $updateFields[] = "noto = ?";
                $updateValues[] = $input['noto'];
            }
            
            if (isset($input['komentaro'])) {
                $updateFields[] = "komentaro = ?";
                $updateValues[] = $input['komentaro'];
            }
            
            if (isset($input['fin_timestamp'])) {
                if (!$this->validateTimestamp($input['fin_timestamp'])) {
                    $this->sendError(400, "fin_timestamp doit être au format ISO 8601");
                    return;
                }
                $updateFields[] = "fin_timestamp = ?";
                $updateValues[] = $this->formatForDatabase($input['fin_timestamp']);
            }
            
            if (empty($updateFields)) {
                $this->sendError(400, "Aucun champ valide à mettre à jour");
                return;
            }
            
            // Ajouter l'ID de la session (modifita_je se met à jour automatiquement)
            $updateValues[] = $session_id;
            
            // Exécuter la mise à jour
            $sql = "UPDATE legitajxoj SET " . implode(", ", $updateFields) . " WHERE id = ?";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute($updateValues);
            
            // Logger l'action
            $this->protokolo($session['persono_id'], "LEGADO AKTUALIGO", "Aktualigis legadsesion por teksto: " . $teksto_id);
            
            // Récupérer les données mises à jour
            $stmt = $this->conn->prepare("SELECT * FROM legitajxoj WHERE id = ?");
            $stmt->execute([$session_id]);
            $updatedSession = $stmt->fetch(PDO::FETCH_ASSOC);
            
            // Réponse de succès
            $respondo = array(
                "legitajxo_id" => $session_id,
                "teksto_id" => $teksto_id,
                "updated_data" => array(
                    "legad_tempo" => $updatedSession['legad_tempo'],
                    "noto" => $updatedSession['noto'],
                    "komentaro" => $updatedSession['komentaro'],
                    "fin_timestamp" => $updatedSession['fin_timestamp'],
                    "modifita_je" => $updatedSession['modifita_je']
                )
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
    
    private function validateTimestamp($timestamp) {
        // Convertir le timestamp ISO 8601 en format MySQL datetime
        $date = @strtotime($timestamp);
        return $date !== false;
    }
    
    private function formatForDatabase($timestamp) {
        // Convertir le timestamp ISO 8601 en format MySQL datetime (Y-m-d H:i:s)
        $date = strtotime($timestamp);
        return date('Y-m-d H:i:s', $date);
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