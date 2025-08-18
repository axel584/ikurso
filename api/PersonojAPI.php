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
        // Cette route est publique - pas besoin d'authentification
        
        // Récupération des données POST
        $input = json_decode(file_get_contents('php://input'), true);
        if (!$input) {
            $input = $_POST;
        }
        
        $enirnomo = isset($input['enirnomo']) ? trim($input['enirnomo']) : "";
        $retadreso = isset($input['retadreso']) ? trim($input['retadreso']) : "";
        $pasvorto = isset($input['pasvorto']) ? $input['pasvorto'] : "";
        
        // Force l'adresse email en minuscule
        $retadreso = strtolower($retadreso);
        
        // Validation des champs obligatoires
        if ($enirnomo == "") {
            $this->sendError(400, "L'identifiant est requis");
            return;
        }
        
        if (strpos($enirnomo, "@") !== false) {
            $this->sendError(400, "L'identifiant ne peut pas être un e-mail car il sera visible par les autres élèves");
            return;
        }
        
        if ($pasvorto == "") {
            $this->sendError(400, "Le mot de passe est requis");
            return;
        }
        
        // Validation de l'adresse email
        if (!$this->checkEmail($retadreso)) {
            $this->sendError(400, "L'adresse e-mail semble erronée");
            return;
        }
        
        try {
            // Vérification si l'adresse email est déjà utilisée
            $query = "SELECT COUNT(*) as combien FROM personoj WHERE retadreso = ?";
            $stmt = $this->conn->prepare($query);
            $stmt->execute([$retadreso]);
            $retadreso_en_base = $stmt->fetch()["combien"];
            
            if ($retadreso_en_base > 0) {
                $this->sendError(409, "Un compte existe déjà avec cette adresse e-mail");
                return;
            }
            
            // Vérification si l'identifiant est déjà utilisé
            $query = "SELECT COUNT(*) as combien FROM personoj WHERE enirnomo = ?";
            $stmt = $this->conn->prepare($query);
            $stmt->execute([$enirnomo]);
            $enirnomo_en_base = $stmt->fetch()["combien"];
            
            if ($enirnomo_en_base > 0) {
                $this->sendError(409, "Un compte existe déjà avec cet identifiant");
                return;
            }
            
            // Génération de la clé d'activation
            $aktivigo = md5(uniqid(rand(), true));
            
            // Création de l'utilisateur
            $persono_id = $this->kreiPersonon($enirnomo, $pasvorto, $retadreso, $aktivigo);
            
            if (!$persono_id) {
                $this->sendError(500, "Erreur lors de la création du compte");
                return;
            }
            
            // Réponse de succès
            $response = [
                'message' => 'Compte créé avec succès',
                'data' => [
                    'id' => $persono_id,
                    'enirnomo' => $enirnomo,
                    'retadreso' => $retadreso,
                    'aktivigo' => $aktivigo,
                    'aktivigita' => false
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
    
    private function updatePersono($id) {
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
        
        // Récupération des données PATCH
        $input = json_decode(file_get_contents('php://input'), true);
        if (!$input) {
            $this->sendError(400, "Données JSON invalides");
            return;
        }
        
        try {
            // Vérifier que l'utilisateur existe
            $stmt = $this->conn->prepare("SELECT id, retadreso, enirnomo FROM personoj WHERE id = ?");
            $stmt->execute([$id]);
            $existing_user = $stmt->fetch(PDO::FETCH_ASSOC);
            
            if (!$existing_user) {
                $this->sendError(404, "Utilisateur non trouvé");
                return;
            }
            
            // Champs modifiables
            $allowed_fields = [
                'sekso', 'familinomo', 'personnomo', 'enirnomo', 'adreso1', 'adreso2', 
                'posxtkodo', 'urbo', 'lando', 'latitudo', 'longitudo', 'retadreso', 
                'naskigxdato', 'kialo', 'noto', 'maksimumo', 'kurso', 'videbla', 
                'stop_info', 'stop_rappel', 'saviezvous', 'pasvorto'
            ];
            
            // Champs réservés aux administrateurs
            $admin_only_fields = ['rajtoj', 'aktivigita', 'aktivigo'];
            
            $update_fields = [];
            $update_values = [];
            
            // Vérifier les droits de l'utilisateur connecté
            require_once __DIR__ . '/JWTAuth.php';
            $payload = JWTAuth::validateJWT();
            $current_user_id = $payload['persono_id'];
            
            $stmt = $this->conn->prepare("SELECT rajtoj FROM personoj WHERE id = ?");
            $stmt->execute([$current_user_id]);
            $current_user = $stmt->fetch(PDO::FETCH_ASSOC);
            $is_admin = ($current_user['rajtoj'] === 'A');
            
            // Traitement des champs
            foreach ($input as $field => $value) {
                // Vérifier si le champ est autorisé
                if (in_array($field, $admin_only_fields)) {
                    if (!$is_admin) {
                        $this->sendError(403, "Seuls les administrateurs peuvent modifier le champ: $field");
                        return;
                    }
                } elseif (!in_array($field, $allowed_fields)) {
                    $this->sendError(400, "Champ non modifiable: $field");
                    return;
                }
                
                // Validations spécifiques
                if ($field === 'retadreso') {
                    $value = strtolower(trim($value));
                    if (!$this->checkEmail($value)) {
                        $this->sendError(400, "Adresse e-mail invalide");
                        return;
                    }
                    
                    // Vérifier l'unicité de l'email (sauf pour l'utilisateur actuel)
                    $stmt = $this->conn->prepare("SELECT COUNT(*) as combien FROM personoj WHERE retadreso = ? AND id != ?");
                    $stmt->execute([$value, $id]);
                    if ($stmt->fetch()["combien"] > 0) {
                        $this->sendError(409, "Cette adresse e-mail est déjà utilisée");
                        return;
                    }
                }
                
                if ($field === 'enirnomo') {
                    $value = trim($value);
                    if (empty($value)) {
                        $this->sendError(400, "L'identifiant ne peut pas être vide");
                        return;
                    }
                    if (strpos($value, "@") !== false) {
                        $this->sendError(400, "L'identifiant ne peut pas contenir le symbole @");
                        return;
                    }
                    
                    // Vérifier l'unicité de l'identifiant (sauf pour l'utilisateur actuel)
                    $stmt = $this->conn->prepare("SELECT COUNT(*) as combien FROM personoj WHERE enirnomo = ? AND id != ?");
                    $stmt->execute([$value, $id]);
                    if ($stmt->fetch()["combien"] > 0) {
                        $this->sendError(409, "Cet identifiant est déjà utilisé");
                        return;
                    }
                }
                
                if ($field === 'pasvorto') {
                    if (empty($value)) {
                        $this->sendError(400, "Le mot de passe ne peut pas être vide");
                        return;
                    }
                    // Chiffrer le mot de passe en MD5
                    $update_fields[] = "pasvorto_md5 = ?";
                    $update_values[] = md5($value);
                    continue;
                }
                
                if ($field === 'naskigxdato') {
                    if (!empty($value) && !preg_match('/^\d{4}-\d{2}-\d{2}$/', $value)) {
                        $this->sendError(400, "Format de date invalide (YYYY-MM-DD attendu)");
                        return;
                    }
                }
                
                if ($field === 'sekso') {
                    if ($value !== null && $value !== '' && !in_array($value, ['M', 'I'])) {
                        $this->sendError(400, "Sexe invalide (M ou I attendu, ou null)");
                        return;
                    }
                    // Si la valeur est vide, la convertir en null
                    if ($value === '') {
                        $value = null;
                    }
                }
                
                if (in_array($field, ['videbla', 'stop_info', 'stop_rappel'])) {
                    $value = $value ? 'J' : 'N';
                }
                
                if ($field === 'rajtoj') {
                    if (!in_array($value, ['P', 'S', 'K', 'A', 'I'])) {
                        $this->sendError(400, "Droits invalides");
                        return;
                    }
                }
                
                if ($field === 'aktivigita') {
                    $value = $value ? 1 : 0;
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
            $sql = "UPDATE personoj SET " . implode(', ', $update_fields) . " WHERE id = ?";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute($update_values);
            
            // Récupérer les données mises à jour
            $stmt = $this->conn->prepare("SELECT 
                        id, ekdato, lasteniro, sekso, familinomo, personnomo, enirnomo,
                        adreso1, adreso2, posxtkodo, urbo, lando, latitudo, longitudo,
                        retadreso, naskigxdato, rajtoj, kialo, noto, maksimumo, kurso,
                        videbla, stop_info, stop_rappel, aktivigo, aktivigita, saviezvous
                    FROM personoj WHERE id = ?");
            $stmt->execute([$id]);
            $updated_user = $stmt->fetch(PDO::FETCH_ASSOC);
            
            // Traitement des données pour l'affichage (même logique que getPersono)
            $updated_user['aktivigita'] = (bool)$updated_user['aktivigita'];
            $updated_user['rajtoj_label'] = $this->getRajtoLabel($updated_user['rajtoj']);
            $updated_user['videbla'] = $updated_user['videbla'] === 'J';
            $updated_user['stop_info'] = $updated_user['stop_info'] === 'J';
            $updated_user['stop_rappel'] = $updated_user['stop_rappel'] === 'J';
            
            if ($updated_user['naskigxdato']) {
                $updated_user['naskigxdato'] = date('Y-m-d', strtotime($updated_user['naskigxdato']));
            }
            $updated_user['ekdato'] = date('Y-m-d', strtotime($updated_user['ekdato']));
            $updated_user['lasteniro'] = date('Y-m-d H:i:s', strtotime($updated_user['lasteniro']));
            
            $updated_user['id'] = (int)$updated_user['id'];
            $updated_user['maksimumo'] = (int)$updated_user['maksimumo'];
            $updated_user['saviezvous'] = (int)$updated_user['saviezvous'];
            
            if ($updated_user['latitudo'] !== null) {
                $updated_user['latitudo'] = (float)$updated_user['latitudo'];
            }
            if ($updated_user['longitudo'] !== null) {
                $updated_user['longitudo'] = (float)$updated_user['longitudo'];
            }
            
            $response = [
                'message' => 'Utilisateur modifié avec succès',
                'data' => $updated_user
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
    
    private function deletePersono($id) {
        require_once __DIR__ . '/JWTAuth.php';
        
        // Valider le JWT et récupérer l'utilisateur connecté
        $payload = JWTAuth::validateJWT();
        if (!$payload) {
            $this->sendError(401, "Authentification requise");
            return;
        }
        
        $current_user_id = $payload['persono_id'];
        
        // Validation de l'ID
        $id = (int)$id;
        if ($id <= 0) {
            $this->sendError(400, "ID utilisateur invalide");
            return;
        }
        
        try {
            // Récupérer les informations de l'utilisateur connecté
            $stmt = $this->conn->prepare("SELECT rajtoj, aktivigita FROM personoj WHERE id = ?");
            $stmt->execute([$current_user_id]);
            $current_user = $stmt->fetch(PDO::FETCH_ASSOC);
            
            if (!$current_user) {
                $this->sendError(401, "Utilisateur connecté non trouvé");
                return;
            }
            
            if ($current_user["aktivigita"] == 0) {
                $this->sendError(403, "Compte non activé");
                return;
            }
            
            $is_admin = ($current_user["rajtoj"] === 'A');
            $is_owner = ((int)$current_user_id === (int)$id);
            
            // Vérification des droits : soit propriétaire, soit administrateur
            if (!$is_owner && !$is_admin) {
                $this->sendError(403, "Vous ne pouvez supprimer que votre propre compte ou être administrateur");
                return;
            }
            
            // Si c'est un administrateur, vérifier qu'il ne supprime pas sa propre ligne
            if ($is_admin && $is_owner) {
                $this->sendError(403, "Un administrateur ne peut pas supprimer son propre compte");
                return;
            }
            
            // Vérifier que l'utilisateur à supprimer existe
            $stmt = $this->conn->prepare("SELECT id, enirnomo, retadreso FROM personoj WHERE id = ?");
            $stmt->execute([$id]);
            $user_to_delete = $stmt->fetch(PDO::FETCH_ASSOC);
            
            if (!$user_to_delete) {
                $this->sendError(404, "Utilisateur non trouvé");
                return;
            }
            
            // Commencer une transaction pour s'assurer de la cohérence
            $this->conn->beginTransaction();
            
            try {
                // Supprimer les données associées à l'utilisateur
                // TODO: Selon les besoins métiers, on pourrait également supprimer ou anonymiser :
                // - Les réponses aux exercices (table respondoj)
                // - Les inscriptions aux cours (table nuna_kurso)
                // - Les relations de correction (table korektebla_kurso)
                // - Le vocabulaire personnel (table personoj_vortoj)
                // Pour l'instant, on fait juste la suppression de base
                
                // Supprimer l'utilisateur de la table principale
                $stmt = $this->conn->prepare("DELETE FROM personoj WHERE id = ?");
                $stmt->execute([$id]);
                
                // Vérifier que la suppression a bien eu lieu
                if ($stmt->rowCount() === 0) {
                    throw new Exception("Aucune ligne supprimée");
                }
                
                // Valider la transaction
                $this->conn->commit();
                
                $response = [
                    'message' => 'Utilisateur supprimé avec succès',
                    'data' => [
                        'id' => (int)$id,
                        'enirnomo' => $user_to_delete['enirnomo'],
                        'retadreso' => $user_to_delete['retadreso']
                    ]
                ];
                
                $this->sendResponse(200, $response);
                
            } catch (Exception $e) {
                // Annuler la transaction en cas d'erreur
                $this->conn->rollBack();
                
                if (DEBUG_MODE) {
                    $this->sendError(500, "Erreur lors de la suppression: " . $e->getMessage());
                } else {
                    $this->sendError(500, "Erreur lors de la suppression de l'utilisateur");
                }
            }
            
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
    
    private function checkEmail($email) {
        if ($email == "") {
            return false;
        }
        if (!preg_match("#^[a-z0-9._+-]+@[a-z0-9._-]{1,}\.[a-z]{2,5}$#", $email)) {
            return false;
        }
        list($Username, $Domain) = explode("@", $email);
        if (getmxrr($Domain, $MXHost)) {
            return true;
        } else {
            if (fsockopen($Domain, 25, $errno, $errstr, 30)) {
                return true;
            } else {
                return false;
            }
        }
        return true;
    }
    
    private function kreiPersonon($enirnomo, $pasvorto, $retadreso, $aktivigo) {
        $md5 = md5($pasvorto);
        $query = "INSERT INTO personoj (enirnomo, pasvorto_md5, retadreso, aktivigo, aktivigita, ekdato) VALUES (?, ?, ?, ?, 0, NOW())";
        $stmt = $this->conn->prepare($query);
        $stmt->execute([$enirnomo, $md5, $retadreso, $aktivigo]);
        return $this->conn->lastInsertId();
    }
}
?>