<?php
// api.php - Point d'entrée principal de l'API

// Inclusion du fichier de configuration
require_once 'config.php';

// Mode debug (à désactiver en production)
define('DEBUG_MODE', true);

// Headers CORS et JSON (lecture seule)
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, PUT, PATCH, OPTIONS, DELETE');
header('Access-Control-Allow-Headers: Content-Type, Authorization');

// Gestion des requêtes OPTIONS (preflight)
if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(200);
    exit();
}

// Inclusion des classes API
require_once 'api/TekstojAPI.php';
require_once 'api/AuthentificationAPI.php';
require_once 'api/LegitajxojAPI.php';
require_once 'api/LegotajxojAPI.php';
require_once 'api/KontaktoAPI.php';
require_once 'api/PersonojAPI.php';
require_once 'api/KursojAPI.php';
require_once 'api/LecionojAPI.php';
require_once 'api/LecionerojAPI.php';
require_once 'api/EkzercojAPI.php';
require_once 'api/EkzerceroiAPI.php';

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
    } elseif ($segments[0] === 'legitajxoj') {
        // API sessions de lecture
        $api = new LegitajxojAPI();
        $api->handleRequest();
    } elseif ($segments[0] === 'legotajxoj') {
        // API legotajxoj (marque-pages)
        $api = new LegotajxojAPI();
        $api->handleRequest();
    } elseif ($segments[0] === 'kontakto') {
        // API formulaire de contact
        $api = new KontaktoAPI();
        $api->handleRequest();
    } elseif ($segments[0] === 'personoj') {
        // API gestion des comptes utilisateurs
        $api = new PersonojAPI();
        $api->handleRequest();
    } elseif ($segments[0] === 'kursoj') {
        // API gestion des cours
        $api = new KursojAPI();
        $api->handleRequest();
    } elseif ($segments[0] === 'lecionoj') {
        // API gestion des leçons
        $api = new LecionojAPI();
        $api->handleRequest();
    } elseif ($segments[0] === 'lecioneroj') {
        // API gestion des sections de leçons
        $api = new LecionerojAPI();
        $api->handleRequest();
    } elseif ($segments[0] === 'ekzercoj') {
        // API gestion des exercices
        $api = new EkzercojAPI();
        $api->handleRequest();
    } elseif ($segments[0] === 'ekzerceroj') {
        // API gestion des sous-exercices
        $api = new EkzerceroiAPI();
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