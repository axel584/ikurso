<?php
// api.php - Point d'entrée principal de l'API

// Inclusion du fichier de configuration
require_once 'config.php';

// Mode debug (à désactiver en production)
define('DEBUG_MODE', true);

// Headers CORS et JSON (lecture seule)
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, PUT, PATCH, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type, Authorization');

// Gestion des requêtes OPTIONS (preflight)
if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(200);
    exit();
}

// Inclusion des classes API
require_once 'api/TekstojAPI.php';
require_once 'api/AuthentificationAPI.php';

// Déterminer quelle API utiliser basé sur le path
$path = isset($_GET['path']) ? $_GET['path'] : '';
$segments = array_filter(explode('/', $path));

if (!empty($segments)) {
    if ($segments[0] === 'auth') {
        // API d'authentification
        $api = new AuthentificationAPI();
        $api->handleRequest();
    } elseif ($segments[0] === 'tekstoj') {
        // API tekstoj (existante)
        $api = new TekstojAPI();
        $api->handleRequest();
    } else {
        // Endpoint non trouvé
        http_response_code(404);
        echo json_encode(array("error" => "Endpoint non trouvé"), JSON_UNESCAPED_UNICODE);
    }
} else {
    // Aucun endpoint spécifié
    http_response_code(404);
    echo json_encode(array("error" => "Endpoint requis"), JSON_UNESCAPED_UNICODE);
}
?>