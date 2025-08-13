<?php
// LegotajxojAPI.php - Classe pour gérer l'API des legotajxoj (marque-pages)

class LegotajxojAPI {
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
        
        if (empty($segments) || $segments[0] !== 'legotajxoj') {
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
        
        if ($method === 'GET') {
            // GET /api/legotajxoj
            $this->getLegotajxoj($persono_id);
        } elseif ($method === 'POST') {
            // POST /api/legotajxoj
            $this->addLegotajxo($persono_id);
        } elseif ($method === 'DELETE') {
            // DELETE /api/legotajxoj
            $this->deleteLegotajxo($persono_id);
        } else {
            $this->sendError(405, "Méthode non autorisée");
        }
    }
    
    private function getLegotajxoj($persono_id) {
        try {
            // Récupérer tous les legotajxoj de l'utilisateur avec les données des tekstoj
            $stmt = $this->conn->prepare("
                SELECT 
                    l.id, 
                    l.teksto_id, 
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
                FROM legotajxoj l
                LEFT JOIN tekstoj t ON l.teksto_id = t.id
                WHERE l.persono_id = ? 
                ORDER BY l.modifita_je DESC
            ");
            $stmt->execute([$persono_id]);
            $legotajxoj = $stmt->fetchAll(PDO::FETCH_ASSOC);
            
            // Formatter les données pour l'API
            foreach ($legotajxoj as &$legotajxo) {
                $legotajxo['id'] = (int)$legotajxo['id'];
                $legotajxo['nivelo'] = $legotajxo['nivelo'] ? (int)$legotajxo['nivelo'] : null;
                $legotajxo['vortoj'] = $legotajxo['vortoj'] ? (int)$legotajxo['vortoj'] : null;
                $legotajxo['aktiva'] = $legotajxo['aktiva'] ? (int)$legotajxo['aktiva'] : null;
            }
            
            // Réponse de succès
            $respondo = array(
                "status" => "success",
                "count" => count($legotajxoj),
                "legotajxoj" => $legotajxoj
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
    
    private function addLegotajxo($persono_id) {
        // Récupération des données JSON
        $input = json_decode(file_get_contents('php://input'), true);
        
        if (!isset($input['teksto_id'])) {
            $this->sendError(400, "Paramètre 'teksto_id' requis");
            return;
        }
        
        $teksto_id = trim($input['teksto_id']);
        
        if (empty($teksto_id)) {
            $this->sendError(400, "Le teksto_id ne peut pas être vide");
            return;
        }
        
        try {
            // Vérifier si le legotajxo existe déjà
            $stmt = $this->conn->prepare("SELECT COUNT(*) as count FROM legotajxoj WHERE persono_id = ? AND teksto_id = ?");
            $stmt->execute([$persono_id, $teksto_id]);
            $existing = $stmt->fetch(PDO::FETCH_ASSOC);
            
            if ($existing['count'] > 0) {
                $this->sendError(409, "Ce legotajxo existe déjà pour cet utilisateur");
                return;
            }
            
            // Ajouter le nouveau legotajxo
            $stmt = $this->conn->prepare("INSERT INTO legotajxoj (persono_id, teksto_id) VALUES (?, ?)");
            $stmt->execute([$persono_id, $teksto_id]);
            
            $legotajxo_id = $this->conn->lastInsertId();
            
            // Logger l'action
            $this->protokolo($persono_id, "LEGOTAJXO_ALDONO", "Aldonis legotajxon por teksto_id: " . $teksto_id);
            
            // Réponse de succès
            $respondo = array(
                "status" => "success",
                "message" => "Legotajxo ajouté avec succès",
                "id" => $legotajxo_id,
                "persono_id" => $persono_id,
                "teksto_id" => $teksto_id
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
    
    private function deleteLegotajxo($persono_id) {
        // Récupération des données JSON
        $input = json_decode(file_get_contents('php://input'), true);
        
        if (!isset($input['teksto_id'])) {
            $this->sendError(400, "Paramètre 'teksto_id' requis");
            return;
        }
        
        $teksto_id = trim($input['teksto_id']);
        
        if (empty($teksto_id)) {
            $this->sendError(400, "Le teksto_id ne peut pas être vide");
            return;
        }
        
        try {
            // Vérifier si le legotajxo existe
            $stmt = $this->conn->prepare("SELECT id FROM legotajxoj WHERE persono_id = ? AND teksto_id = ?");
            $stmt->execute([$persono_id, $teksto_id]);
            $existing = $stmt->fetch(PDO::FETCH_ASSOC);
            
            if (!$existing) {
                $this->sendError(404, "Legotajxo non trouvé");
                return;
            }
            
            // Supprimer le legotajxo
            $stmt = $this->conn->prepare("DELETE FROM legotajxoj WHERE persono_id = ? AND teksto_id = ?");
            $stmt->execute([$persono_id, $teksto_id]);
            
            $deleted_count = $stmt->rowCount();
            
            if ($deleted_count === 0) {
                $this->sendError(404, "Legotajxo non trouvé");
                return;
            }
            
            // Logger l'action
            $this->protokolo($persono_id, "LEGOTAJXO_FORIGO", "Forigis legotajxon por teksto_id: " . $teksto_id);
            
            // Réponse de succès
            $respondo = array(
                "status" => "success",
                "message" => "Legotajxo supprimé avec succès",
                "persono_id" => $persono_id,
                "teksto_id" => $teksto_id
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