<?php
// api.php - Point d'entrée principal de l'API

// Inclusion du fichier de configuration
require_once 'config.php';

// Mode debug (à désactiver en production)
define('DEBUG_MODE', true);

// Headers CORS et JSON (lecture seule)
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type');

// Gestion des requêtes OPTIONS (preflight)
if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(200);
    exit();
}

class TekstojAPI {
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
        
        // Seules les méthodes GET sont autorisées
        if ($method !== 'GET') {
            $this->sendError(405, "Seule la méthode GET est autorisée");
            return;
        }
        
        // Parsing du path
        $segments = array_filter(explode('/', $path));
        
        if (empty($segments) || $segments[0] !== 'tekstoj') {
            $this->sendError(404, "Endpoint non trouvé");
            return;
        }
        
        $resource = $segments[0]; // 'tekstoj'
        $id = isset($segments[1]) ? $segments[1] : null;
        
        if ($id) {
            $this->getTeksto($id);
        } else {
            $this->getTekstoj();
        }
    }
    
    // GET /tekstoj - Récupérer tous les tekstoj avec filtres optionnels (sans enhavo)
    private function getTekstoj() {
        $sql = "SELECT id, titolo, auxtoro, fonto, nivelo, vortoj, kolekto, etikedoj, sono FROM tekstoj WHERE aktiva = 1";
        $params = array();
        
        // Filtres optionnels
        if (isset($_GET['auxtoro'])) {
            $sql .= " AND auxtoro LIKE ?";
            $params[] = '%' . $_GET['auxtoro'] . '%';
        }
        
        if (isset($_GET['kolekto'])) {
            $sql .= " AND kolekto = ?";
            $params[] = $_GET['kolekto'];
        }
        
        // Filtre par niveau minimum
        if (isset($_GET['nivelo_min'])) {
            $sql .= " AND nivelo >= ?";
            $params[] = intval($_GET['nivelo_min']);
        }
        
        // Filtre par niveau maximum
        if (isset($_GET['nivelo_max'])) {
            $sql .= " AND nivelo <= ?";
            $params[] = intval($_GET['nivelo_max']);
        }
        
        // Filtre par nombre de mots minimum
        if (isset($_GET['vortoj_min'])) {
            $sql .= " AND vortoj >= ?";
            $params[] = intval($_GET['vortoj_min']);
        }
        
        // Filtre par nombre de mots maximum
        if (isset($_GET['vortoj_max'])) {
            $sql .= " AND vortoj <= ?";
            $params[] = intval($_GET['vortoj_max']);
        }
        
        if (isset($_GET['etikedoj'])) {
            $sql .= " AND etikedoj LIKE ?";
            $params[] = '%' . $_GET['etikedoj'] . '%';
        }
        
        // Recherche générale dans titolo et auxtoro
        if (isset($_GET['q'])) {
            $sql .= " AND (titolo LIKE ? OR auxtoro LIKE ?)";
            $searchTerm = '%' . $_GET['q'] . '%';
            $params[] = $searchTerm;
            $params[] = $searchTerm;
        }
        
        // Recherche dans le titre
        if (isset($_GET['titolo'])) {
            $sql .= " AND titolo LIKE ?";
            $params[] = '%' . $_GET['titolo'] . '%';
        }
        
        // Filtre pour les textes avec son
        if (isset($_GET['has_sono']) && $_GET['has_sono'] === 'true') {
            $sql .= " AND sono IS NOT NULL AND sono != ''";
        }
        
        // Tri (ORDER BY)
        $allowedSortFields = array('id', 'titolo', 'nivelo', 'vortoj', 'ekdato');
        $sortField = isset($_GET['sort']) && in_array($_GET['sort'], $allowedSortFields) ? $_GET['sort'] : 'id';
        $sortOrder = isset($_GET['order']) && strtoupper($_GET['order']) === 'DESC' ? 'DESC' : 'ASC';
        
        $sql .= " ORDER BY " . $sortField . " " . $sortOrder;
        
        // Pagination
        $limit = isset($_GET['limit']) ? intval($_GET['limit']) : 10;
        $offset = isset($_GET['offset']) ? intval($_GET['offset']) : 0;
        
        // Validation des valeurs de pagination
        $limit = max(1, min(100, $limit)); // Entre 1 et 100
        $offset = max(0, $offset); // Minimum 0
        
        $sql .= " LIMIT " . $limit . " OFFSET " . $offset;

        try {
            $stmt = $this->conn->prepare($sql);
            $stmt->execute($params);
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
            
            // Compter le total pour la pagination
            $countSql = "SELECT COUNT(*) as total FROM tekstoj WHERE aktiva = 1";
            $countParams = $params; // Utiliser les mêmes paramètres de filtre
            
            if (isset($_GET['auxtoro'])) {
                $countSql .= " AND auxtoro LIKE ?";
            }
            if (isset($_GET['kolekto'])) {
                $countSql .= " AND kolekto = ?";
            }
            if (isset($_GET['nivelo_min'])) {
                $countSql .= " AND nivelo >= ?";
            }
            if (isset($_GET['nivelo_max'])) {
                $countSql .= " AND nivelo <= ?";
            }
            if (isset($_GET['vortoj_min'])) {
                $countSql .= " AND vortoj >= ?";
            }
            if (isset($_GET['vortoj_max'])) {
                $countSql .= " AND vortoj <= ?";
            }
            if (isset($_GET['etikedoj'])) {
                $countSql .= " AND etikedoj LIKE ?";
            }
            if (isset($_GET['q'])) {
                $countSql .= " AND (titolo LIKE ? OR auxtoro LIKE ?)";
            }
            if (isset($_GET['titolo'])) {
                $countSql .= " AND titolo LIKE ?";
            }
            if (isset($_GET['has_sono']) && $_GET['has_sono'] === 'true') {
                $countSql .= " AND sono IS NOT NULL AND sono != ''";
            }
            
            $countStmt = $this->conn->prepare($countSql);
            $countStmt->execute($countParams);
            $total = $countStmt->fetch(PDO::FETCH_ASSOC)['total'];
            
            $this->sendResponse(array(
                'data' => $results,
                'pagination' => array(
                    'total' => intval($total),
                    'limit' => $limit,
                    'offset' => $offset,
                    'count' => count($results)
                )
            ));
            
        } catch(PDOException $e) {
            if (DEBUG_MODE) {
                $this->sendError(500, "Erreur lors de la récupération des données: " . $e->getMessage());
            } else {
                $this->sendError(500, "Erreur lors de la récupération des données");
            }
        }
    }
    
    // GET /tekstoj/{id} - Récupérer un teksto spécifique
    private function getTeksto($id) {
        try {
            $stmt = $this->conn->prepare("SELECT * FROM tekstoj WHERE id = ?");
            $stmt->execute(array($id));
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            
            if ($result) {
                if (isset($result['enhavo']) && !empty($result['enhavo'])) {
                    $decoded = json_decode($result['enhavo'], true);
                    if ($decoded !== null) {
                        $result['enhavo'] = $decoded;
                    }
                }
                $this->sendResponse($result);
            } else {
                $this->sendError(404, "Teksto non trouvé");
            }
            
        } catch(PDOException $e) {
            if (DEBUG_MODE) {
                $this->sendError(500, "Erreur lors de la récupération du teksto: " . $e->getMessage());
            } else {
                $this->sendError(500, "Erreur lors de la récupération du teksto");
            }
        }
    }
    
    private function sendResponse($data, $status = 200) {
        http_response_code($status);
        echo json_encode($data, JSON_UNESCAPED_UNICODE);
        exit();
    }
    
    private function sendError($status, $message) {
        http_response_code($status);
        echo json_encode(array('error' => $message), JSON_UNESCAPED_UNICODE);
        exit();
    }
}

// Initialisation et traitement de la requête
$api = new TekstojAPI();
$api->handleRequest();
?>