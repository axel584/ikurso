<?php
// TekstojAPI.php - Classe pour gérer l'API des tekstoj

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
        
        // Parsing du path
        $segments = array_filter(explode('/', $path));
        
        if (empty($segments) || $segments[0] !== 'tekstoj') {
            $this->sendError(404, "Endpoint non trouvé");
            return;
        }
        
        $resource = $segments[0]; // 'tekstoj'
        $id = isset($segments[1]) ? $segments[1] : null;
        
        if ($method === 'GET') {
            if ($id) {
                $this->getTeksto($id);
            } else {
                $this->getTekstoj();
            }
        } elseif ($method === 'POST') {
            if (!$this->validateBearerToken()) {
                $this->sendError(401, "Token d'authentification requis ou invalide");
                return;
            }
            $this->createTeksto();
        } elseif ($method === 'PUT') {
            if (!$this->validateBearerToken()) {
                $this->sendError(401, "Token d'authentification requis ou invalide");
                return;
            }
            if (!$id) {
                $this->sendError(400, "ID requis pour la mise à jour");
                return;
            }
            $this->updateTeksto($id, true);
        } elseif ($method === 'PATCH') {
            if (!$this->validateBearerToken()) {
                $this->sendError(401, "Token d'authentification requis ou invalide");
                return;
            }
            if (!$id) {
                $this->sendError(400, "ID requis pour la mise à jour");
                return;
            }
            $this->updateTeksto($id, false);
        } else {
            $this->sendError(405, "Méthode non autorisée");
            return;
        }
    }
    
    // GET /tekstoj - Récupérer tous les tekstoj avec filtres optionnels (sans enhavo)
    private function getTekstoj() {
        // Vérifier si l'utilisateur est connecté
        session_start();
        $persono_id = isset($_SESSION["persono_id"]) ? $_SESSION["persono_id"] : null;
        
        if ($persono_id) {
            // Utilisateur connecté : ajouter les informations de legotajxoj et legitajxoj
            $sql = "SELECT t.id, t.titolo, t.auxtoro, t.fonto, t.nivelo, t.vortoj, t.kolekto, t.etikedoj, t.sono, t.leganto, 
                           lo.kreita_je as legotajxoj_kreita_je,
                           li.komenc_timestamp as legitajxoj_komenc_timestamp,
                           li.fin_timestamp as legitajxoj_fin_timestamp,
                           li.legad_tempo as legitajxoj_legad_tempo,
                           li.noto as legitajxoj_noto,
                           li.komentaro as legitajxoj_komentaro,
                           li.kreita_je as legitajxoj_kreita_je,
                           li.modifita_je as legitajxoj_modifita_je
                    FROM tekstoj t 
                    LEFT JOIN legotajxoj lo ON t.id = lo.teksto_id AND lo.persono_id = ?
                    LEFT JOIN legitajxoj li ON t.id = li.teksto_id AND li.persono_id = ?";
            $params = array($persono_id, $persono_id);
        } else {
            // Utilisateur non connecté : requête normale
            $sql = "SELECT id, titolo, auxtoro, fonto, nivelo, vortoj, kolekto, etikedoj, sono, leganto FROM tekstoj";
            $params = array();
        }
        
        // Préfixe pour les colonnes selon le cas
        $tablePrefix = $persono_id ? "t." : "";
        
        // Filtre par statut actif/inactif
        if (isset($_GET['aktiva'])) {
            if ($_GET['aktiva'] === 'all') {
                // Pas de filtre sur aktiva, montrer tous les textes
                $sql .= " WHERE 1=1";
            } else {
                $sql .= " WHERE {$tablePrefix}aktiva = ?";
                $params[] = intval($_GET['aktiva']);
            }
        } else {
            // Par défaut, ne montrer que les tekstoj actifs
            $sql .= " WHERE {$tablePrefix}aktiva = 1";
        }
        
        // Filtres optionnels
        if (isset($_GET['auxtoro'])) {
            $sql .= " AND {$tablePrefix}auxtoro LIKE ?";
            $params[] = '%' . $_GET['auxtoro'] . '%';
        }
        
        if (isset($_GET['kolekto'])) {
            $sql .= " AND {$tablePrefix}kolekto = ?";
            $params[] = $_GET['kolekto'];
        }
        
        // Filtre par niveau minimum
        if (isset($_GET['nivelo_min'])) {
            $sql .= " AND {$tablePrefix}nivelo >= ?";
            $params[] = intval($_GET['nivelo_min']);
        }
        
        // Filtre par niveau maximum
        if (isset($_GET['nivelo_max'])) {
            $sql .= " AND {$tablePrefix}nivelo <= ?";
            $params[] = intval($_GET['nivelo_max']);
        }
        
        // Filtre par nombre de mots minimum
        if (isset($_GET['vortoj_min'])) {
            $sql .= " AND {$tablePrefix}vortoj >= ?";
            $params[] = intval($_GET['vortoj_min']);
        }
        
        // Filtre par nombre de mots maximum
        if (isset($_GET['vortoj_max'])) {
            $sql .= " AND {$tablePrefix}vortoj <= ?";
            $params[] = intval($_GET['vortoj_max']);
        }
        
        if (isset($_GET['etikedoj'])) {
            $sql .= " AND {$tablePrefix}etikedoj LIKE ?";
            $params[] = '%' . $_GET['etikedoj'] . '%';
        }
        
        // Recherche générale dans titolo, auxtoro, etikedoj et leganto
        if (isset($_GET['q'])) {
            $sql .= " AND ({$tablePrefix}titolo LIKE ? OR {$tablePrefix}auxtoro LIKE ? OR {$tablePrefix}etikedoj LIKE ? OR {$tablePrefix}leganto LIKE ?)";
            $searchTerm = '%' . $_GET['q'] . '%';
            $params[] = $searchTerm;
            $params[] = $searchTerm;
            $params[] = $searchTerm;
            $params[] = $searchTerm;
        }
        
        // Recherche dans le titre
        if (isset($_GET['titolo'])) {
            $sql .= " AND {$tablePrefix}titolo LIKE ?";
            $params[] = '%' . $_GET['titolo'] . '%';
        }
        
        // Filtre pour les textes avec son
        if (isset($_GET['has_sono']) && $_GET['has_sono'] === 'true') {
            $sql .= " AND {$tablePrefix}sono IS NOT NULL AND {$tablePrefix}sono != ''";
        }
        
        // Tri (ORDER BY)
        $allowedSortFields = array('id', 'titolo', 'nivelo', 'vortoj', 'ekdato');
        $sortField = isset($_GET['sort']) && in_array($_GET['sort'], $allowedSortFields) ? $_GET['sort'] : 'id';
        $sortOrder = isset($_GET['order']) && strtoupper($_GET['order']) === 'DESC' ? 'DESC' : 'ASC';
        
        $sql .= " ORDER BY " . $tablePrefix . $sortField . " " . $sortOrder;
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
            if ($persono_id) {
                $countSql = "SELECT COUNT(*) as total FROM tekstoj t 
                            LEFT JOIN legotajxoj lo ON t.id = lo.teksto_id AND lo.persono_id = ?
                            LEFT JOIN legitajxoj li ON t.id = li.teksto_id AND li.persono_id = ?";
            } else {
                $countSql = "SELECT COUNT(*) as total FROM tekstoj";
            }
            $countParams = $params; // Utiliser les mêmes paramètres de filtre
            
            // Même logique de filtre aktiva pour le comptage
            if (isset($_GET['aktiva'])) {
                if ($_GET['aktiva'] === 'all') {
                    $countSql .= " WHERE 1=1";
                } else {
                    $countSql .= " WHERE {$tablePrefix}aktiva = ?";
                }
            } else {
                $countSql .= " WHERE {$tablePrefix}aktiva = 1";
            }
            
            if (isset($_GET['auxtoro'])) {
                $countSql .= " AND {$tablePrefix}auxtoro LIKE ?";
            }
            if (isset($_GET['kolekto'])) {
                $countSql .= " AND {$tablePrefix}kolekto = ?";
            }
            if (isset($_GET['nivelo_min'])) {
                $countSql .= " AND {$tablePrefix}nivelo >= ?";
            }
            if (isset($_GET['nivelo_max'])) {
                $countSql .= " AND {$tablePrefix}nivelo <= ?";
            }
            if (isset($_GET['vortoj_min'])) {
                $countSql .= " AND {$tablePrefix}vortoj >= ?";
            }
            if (isset($_GET['vortoj_max'])) {
                $countSql .= " AND {$tablePrefix}vortoj <= ?";
            }
            if (isset($_GET['etikedoj'])) {
                $countSql .= " AND {$tablePrefix}etikedoj LIKE ?";
            }
            if (isset($_GET['q'])) {
                $countSql .= " AND ({$tablePrefix}titolo LIKE ? OR {$tablePrefix}auxtoro LIKE ? OR {$tablePrefix}etikedoj LIKE ? OR {$tablePrefix}leganto LIKE ?)";
            }
            if (isset($_GET['titolo'])) {
                $countSql .= " AND {$tablePrefix}titolo LIKE ?";
            }
            if (isset($_GET['has_sono']) && $_GET['has_sono'] === 'true') {
                $countSql .= " AND {$tablePrefix}sono IS NOT NULL AND {$tablePrefix}sono != ''";
            }
            
            $countStmt = $this->conn->prepare($countSql);
            $countStmt->execute($countParams);
            $total = $countStmt->fetch(PDO::FETCH_ASSOC)['total'];
            
            // Filtrer les valeurs null pour les utilisateurs connectés
            if ($persono_id) {
                foreach ($results as &$result) {
                    // Supprimer les clés avec valeur null
                    $result = array_filter($result, function($value) {
                        return $value !== null;
                    });
                }
            }
            
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
    
    private function getAuthorizationHeader() {
        $headers = null;
        
        if (isset($_SERVER['Authorization'])) {
            $headers = trim($_SERVER["Authorization"]);
        } else if (isset($_SERVER['HTTP_AUTHORIZATION'])) {
            $headers = trim($_SERVER["HTTP_AUTHORIZATION"]);
        } else if (function_exists('apache_request_headers')) {
            $requestHeaders = apache_request_headers();
            if (isset($requestHeaders['Authorization'])) {
                $headers = trim($requestHeaders['Authorization']);
            }
        }
        
        return $headers;
    }

    private function validateBearerToken() {
        global $INTERNAL_ACCESS_TOKEN;
        
        $header = $this->getAuthorizationHeader();
        if (!isset($header)) {
            return false;
        }
        
        if (!preg_match('/Bearer\s+(\S+)/', $header, $matches)) {
            return false;
        }
        
        $token = $matches[1];
        return $token === $INTERNAL_ACCESS_TOKEN;
    }
    
    // POST /tekstoj - Créer un nouveau teksto
    private function createTeksto() {
        $input = file_get_contents('php://input');
        $data = json_decode($input, true);
        
        if (!$data) {
            $this->sendError(400, "Données JSON invalides");
            return;
        }
        
        // Validation des champs requis
        $requiredFields = ['id', 'auxtoro', 'titolo'];
        foreach ($requiredFields as $field) {
            if (!isset($data[$field]) || empty($data[$field])) {
                $this->sendError(400, "Le champ '$field' est requis");
                return;
            }
        }
        
        try {
            // Préparation des données
            $id = $data['id'];
            $titolo = $data['titolo'];
            $auxtoro = $data['auxtoro'];
            $fonto = isset($data['fonto']) ? $data['fonto'] : null;
            $nivelo = isset($data['nivelo']) ? intval($data['nivelo']) : null;
            $vortoj = isset($data['vortoj']) ? intval($data['vortoj']) : null;
            $kolekto = isset($data['kolekto']) ? $data['kolekto'] : null;
            $etikedoj = isset($data['etikedoj']) ? $data['etikedoj'] : null;
            $sono = isset($data['sono']) ? $data['sono'] : null;
            $enhavo = isset($data['enhavo']) ? (is_array($data['enhavo']) ? json_encode($data['enhavo'], JSON_UNESCAPED_UNICODE) : $data['enhavo']) : null;
            $aktiva = isset($data['aktiva']) ? intval($data['aktiva']) : 0;
            
            $sql = "INSERT INTO tekstoj (id, titolo, auxtoro, fonto, nivelo, vortoj, kolekto, etikedoj, sono, enhavo, aktiva, ekdato) 
                    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, NOW())";
            
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([
                $id, $titolo, $auxtoro, $fonto, $nivelo, $vortoj, 
                $kolekto, $etikedoj, $sono, $enhavo, $aktiva
            ]);
            
            $this->sendResponse([
                'id' => $id,
                'message' => 'Teksto créé avec succès'
            ], 201);
            
        } catch(PDOException $e) {
            // Vérifier si c'est une erreur de clé primaire dupliquée
            if ($e->getCode() == 23000 && strpos($e->getMessage(), 'Duplicate entry') !== false) {
                $this->sendError(409, "Un teksto avec cet ID existe déjà");
            } else {
                if (DEBUG_MODE) {
                    $this->sendError(500, "Erreur lors de la création: " . $e->getMessage());
                } else {
                    $this->sendError(500, "Erreur lors de la création du teksto");
                }
            }
        }
    }
    
    // PUT/PATCH /tekstoj/{id} - Mettre à jour un teksto
    private function updateTeksto($id, $isFullUpdate = false) {
        $input = file_get_contents('php://input');
        $data = json_decode($input, true);
        
        if (!$data) {
            $this->sendError(400, "Données JSON invalides");
            return;
        }
        
        // Vérifier que le teksto existe
        try {
            $checkStmt = $this->conn->prepare("SELECT id FROM tekstoj WHERE id = ?");
            $checkStmt->execute(array($id));
            if (!$checkStmt->fetch()) {
                $this->sendError(404, "Teksto non trouvé");
                return;
            }
        } catch(PDOException $e) {
            $this->sendError(500, "Erreur lors de la vérification");
            return;
        }
        
        // Pour PUT (mise à jour complète), vérifier les champs requis
        if ($isFullUpdate) {
            $requiredFields = ['titolo', 'auxtoro'];
            foreach ($requiredFields as $field) {
                if (!isset($data[$field]) || empty($data[$field])) {
                    $this->sendError(400, "Le champ '$field' est requis pour une mise à jour complète");
                    return;
                }
            }
        }
        
        try {
            // Construction dynamique de la requête SQL
            $updateFields = array();
            $params = array();
            
            $allowedFields = ['titolo', 'auxtoro', 'fonto', 'nivelo', 'vortoj', 'kolekto', 'etikedoj', 'sono', 'enhavo', 'aktiva', 'leganto'];
            
            foreach ($allowedFields as $field) {
                if (isset($data[$field])) {
                    if ($field === 'enhavo' && is_array($data[$field])) {
                        $updateFields[] = "$field = ?";
                        $params[] = json_encode($data[$field], JSON_UNESCAPED_UNICODE);
                    } elseif (in_array($field, ['nivelo', 'vortoj', 'aktiva'])) {
                        $updateFields[] = "$field = ?";
                        $params[] = intval($data[$field]);
                    } else {
                        $updateFields[] = "$field = ?";
                        $params[] = $data[$field];
                    }
                }
            }
            
            if (empty($updateFields)) {
                $this->sendError(400, "Aucun champ à mettre à jour");
                return;
            }
            
            $sql = "UPDATE tekstoj SET " . implode(', ', $updateFields) . " WHERE id = ?";
            $params[] = $id;
            
            $stmt = $this->conn->prepare($sql);
            $stmt->execute($params);
            
            if ($stmt->rowCount() === 0) {
                $this->sendResponse([
                    'id' => $id,
                    'message' => 'Aucune modification effectuée'
                ]);
            } else {
                $this->sendResponse([
                    'id' => $id,
                    'message' => 'Teksto mis à jour avec succès'
                ]);
            }
            
        } catch(PDOException $e) {
            if (DEBUG_MODE) {
                $this->sendError(500, "Erreur lors de la mise à jour: " . $e->getMessage());
            } else {
                $this->sendError(500, "Erreur lors de la mise à jour du teksto");
            }
        }
    }
    
    private function sendError($status, $message) {
        http_response_code($status);
        echo json_encode(array('error' => $message), JSON_UNESCAPED_UNICODE);
        exit();
    }
}
?>