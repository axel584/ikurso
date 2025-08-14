<?php
// PersonojAPI.php - Classe pour gérer l'API des comptes utilisateurs

class PersonojAPI {
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
        
        if (empty($segments) || $segments[0] !== 'personoj') {
            $this->sendError(404, "Endpoint non trouvé");
            return;
        }
        
        $resource = $segments[0]; // 'personoj'
        $id = isset($segments[1]) ? $segments[1] : null;
        
        switch ($method) {
            case 'GET':
                if ($id) {
                    $this->getPersono($id);
                } else {
                    $this->getPersonoj();
                }
                break;
            
            case 'POST':
                $this->createPersono();
                break;
            
            case 'PATCH':
                if ($id) {
                    $this->updatePersono($id);
                } else {
                    $this->sendError(400, "ID utilisateur requis pour la modification");
                }
                break;
            
            case 'DELETE':
                if ($id) {
                    $this->deletePersono($id);
                } else {
                    $this->sendError(400, "ID utilisateur requis pour la suppression");
                }
                break;
            
            default:
                $this->sendError(405, "Méthode non autorisée");
                break;
        }
    }
    
    private function getPersonoj() {
        // Vérifier l'authentification et les droits administrateur
        if (!$this->requireAdminAuth()) {
            return;
        }
        
        // Paramètres de pagination
        $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
        $limit = isset($_GET['limit']) ? (int)$_GET['limit'] : 20;
        $search = isset($_GET['search']) ? trim($_GET['search']) : '';
        $rajtoj_filter = isset($_GET['rajtoj']) ? $_GET['rajtoj'] : '';
        
        // Validation des paramètres
        $page = max(1, $page);
        $limit = min(100, max(1, $limit)); // Limite entre 1 et 100
        $offset = ($page - 1) * $limit;
        
        try {
            // Construction de la requête de base
            $where_conditions = [];
            $params = [];
            
            // Filtre de recherche
            if (!empty($search)) {
                $where_conditions[] = "(enirnomo LIKE ? OR personnomo LIKE ? OR familinomo LIKE ? OR retadreso LIKE ?)";
                $search_param = '%' . $search . '%';
                $params = array_merge($params, [$search_param, $search_param, $search_param, $search_param]);
            }
            
            // Filtre par droits
            if (!empty($rajtoj_filter) && in_array($rajtoj_filter, ['P', 'S', 'K', 'A', 'I'])) {
                $where_conditions[] = "rajtoj = ?";
                $params[] = $rajtoj_filter;
            }
            
            $where_clause = !empty($where_conditions) ? 'WHERE ' . implode(' AND ', $where_conditions) : '';
            
            // Requête pour compter le total
            $count_sql = "SELECT COUNT(*) as total FROM personoj $where_clause";
            $count_stmt = $this->conn->prepare($count_sql);
            $count_stmt->execute($params);
            $total_count = $count_stmt->fetch(PDO::FETCH_ASSOC)['total'];
            
            // Requête principale (sans pasvorto_md5 pour la sécurité)
            $sql = "SELECT 
                        id, ekdato, lasteniro, sekso, familinomo, personnomo, enirnomo,
                        adreso1, adreso2, posxtkodo, urbo, lando, latitudo, longitudo,
                        retadreso, naskigxdato, rajtoj, kialo, noto, maksimumo, kurso,
                        videbla, stop_info, stop_rappel, aktivigo, aktivigita, saviezvous
                    FROM personoj 
                    $where_clause 
                    ORDER BY id DESC 
                    LIMIT $limit OFFSET $offset";
                    
            $stmt = $this->conn->prepare($sql);
            $stmt->execute($params);
            $personoj = $stmt->fetchAll(PDO::FETCH_ASSOC);
            
            // Traitement des données pour l'affichage
            foreach ($personoj as &$persono) {
                // Conversion des booléens
                $persono['aktivigita'] = (bool)$persono['aktivigita'];
                
                // Conversion des énumérations en format lisible
                $persono['rajtoj_label'] = $this->getRajtoLabel($persono['rajtoj']);
                $persono['videbla'] = $persono['videbla'] === 'J';
                $persono['stop_info'] = $persono['stop_info'] === 'J';
                $persono['stop_rappel'] = $persono['stop_rappel'] === 'J';
                
                // Formatage des dates
                if ($persono['naskigxdato']) {
                    $persono['naskigxdato'] = date('Y-m-d', strtotime($persono['naskigxdato']));
                }
                $persono['ekdato'] = date('Y-m-d', strtotime($persono['ekdato']));
                $persono['lasteniro'] = date('Y-m-d H:i:s', strtotime($persono['lasteniro']));
                
                // Conversion des types numériques
                $persono['id'] = (int)$persono['id'];
                $persono['maksimumo'] = (int)$persono['maksimumo'];
                $persono['saviezvous'] = (int)$persono['saviezvous'];
                
                if ($persono['latitudo'] !== null) {
                    $persono['latitudo'] = (float)$persono['latitudo'];
                }
                if ($persono['longitudo'] !== null) {
                    $persono['longitudo'] = (float)$persono['longitudo'];
                }
            }
            
            // Calcul des métadonnées de pagination
            $total_pages = ceil($total_count / $limit);
            $has_next = $page < $total_pages;
            $has_previous = $page > 1;
            
            $response = [
                'data' => $personoj,
                'pagination' => [
                    'page' => $page,
                    'limit' => $limit,
                    'total_count' => (int)$total_count,
                    'total_pages' => $total_pages,
                    'has_next' => $has_next,
                    'has_previous' => $has_previous
                ],
                'filters' => [
                    'search' => $search,
                    'rajtoj' => $rajtoj_filter
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
    
    private function getPersono($id) {
        // Vérifier l'authentification et les droits
        if (!$this->requireAuthForPersono($id)) {
            return;
        }
        
        // Validation de l'ID
        $id = (int)$id;
        if ($id <= 0) {
            $this->sendError(400, "ID utilisateur invalide");
            return;
        }
        
        try {
            // Requête pour récupérer l'utilisateur (sans pasvorto_md5 pour la sécurité)
            $sql = "SELECT 
                        id, ekdato, lasteniro, sekso, familinomo, personnomo, enirnomo,
                        adreso1, adreso2, posxtkodo, urbo, lando, latitudo, longitudo,
                        retadreso, naskigxdato, rajtoj, kialo, noto, maksimumo, kurso,
                        videbla, stop_info, stop_rappel, aktivigo, aktivigita, saviezvous
                    FROM personoj 
                    WHERE id = ?";
                    
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([$id]);
            $persono = $stmt->fetch(PDO::FETCH_ASSOC);
            
            if (!$persono) {
                $this->sendError(404, "Utilisateur non trouvé");
                return;
            }
            
            // Traitement des données pour l'affichage (même logique que getPersonoj)
            // Conversion des booléens
            $persono['aktivigita'] = (bool)$persono['aktivigita'];
            
            // Conversion des énumérations en format lisible
            $persono['rajtoj_label'] = $this->getRajtoLabel($persono['rajtoj']);
            $persono['videbla'] = $persono['videbla'] === 'J';
            $persono['stop_info'] = $persono['stop_info'] === 'J';
            $persono['stop_rappel'] = $persono['stop_rappel'] === 'J';
            
            // Formatage des dates
            if ($persono['naskigxdato']) {
                $persono['naskigxdato'] = date('Y-m-d', strtotime($persono['naskigxdato']));
            }
            $persono['ekdato'] = date('Y-m-d', strtotime($persono['ekdato']));
            $persono['lasteniro'] = date('Y-m-d H:i:s', strtotime($persono['lasteniro']));
            
            // Conversion des types numériques
            $persono['id'] = (int)$persono['id'];
            $persono['maksimumo'] = (int)$persono['maksimumo'];
            $persono['saviezvous'] = (int)$persono['saviezvous'];
            
            if ($persono['latitudo'] !== null) {
                $persono['latitudo'] = (float)$persono['latitudo'];
            }
            if ($persono['longitudo'] !== null) {
                $persono['longitudo'] = (float)$persono['longitudo'];
            }
            
            $response = [
                'data' => $persono
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
    
    private function createPersono() {
        // Créer un nouvel utilisateur
        // TODO: Implémenter la logique
        $this->sendError(501, "Méthode non implémentée");
    }
    
    private function updatePersono($id) {
        // Modifier un utilisateur existant
        // TODO: Implémenter la logique
        $this->sendError(501, "Méthode non implémentée");
    }
    
    private function deletePersono($id) {
        // Supprimer un utilisateur
        // TODO: Implémenter la logique
        $this->sendError(501, "Méthode non implémentée");
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
    
    private function getRajtoLabel($rajto) {
        $labels = [
            'P' => 'Nouveau (non inscrit)',
            'S' => 'Étudiant',
            'K' => 'Correcteur',
            'A' => 'Administrateur',
            'I' => 'Inactif'
        ];
        
        return isset($labels[$rajto]) ? $labels[$rajto] : 'Inconnu';
    }
    
    private function requireAuthForPersono($requested_id) {
        require_once __DIR__ . '/JWTAuth.php';
        
        // Valider le JWT et récupérer l'utilisateur
        $payload = JWTAuth::validateJWT();
        if (!$payload) {
            $this->sendError(401, "Authentification requise");
            return false;
        }
        
        $persono_id = $payload['persono_id'];
        
        try {
            // Vérifier les informations de l'utilisateur en base
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
            
            // Si l'utilisateur est administrateur, il peut accéder à tous les profils
            if ($user["rajtoj"] === 'A') {
                return true;
            }
            
            // Sinon, l'utilisateur ne peut accéder qu'à ses propres informations
            if ((int)$persono_id === (int)$requested_id) {
                return true;
            }
            
            // Accès refusé
            $this->sendError(403, "Accès non autorisé à ces informations");
            return false;
            
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