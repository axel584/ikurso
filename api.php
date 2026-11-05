<?php
// api.php - Point d'entrée principal de l'API

// Inclusion du fichier de configuration
require_once 'config.php';
// config.php ne définit pas toujours l'hôte : PHP 8.1 ne comprend plus « host= » vide comme localhost (#1084)
if (empty($urlDb)) { $urlDb = "localhost"; }

// Mode debug : uniquement en développement (APP_ENV=development dans docker-compose.yml)
define('DEBUG_MODE', getenv('APP_ENV') === 'development');

// Headers CORS (origines autorisées seulement, voir api/Cors.php) et JSON
require_once 'api/Cors.php';
header('Content-Type: application/json');
Cors::apply();

// Gestion des requêtes OPTIONS (preflight)
if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(200);
    exit();
}

// Protection CSRF : requêtes qui modifient des données, origine autorisée seulement
Cors::rejectForbiddenOrigin();

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
        // API d'authentification ; l'inscription envoie le mail d'activation par util.php, sans la session
        // du site (SessionAuth s'en occupe pour l'invité du site)
        if (isset($segments[1]) && $segments[1] === 'register') {
            define('IKURSO_SEN_SESIO', true);
            require_once 'util.php';
        }
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
    } elseif ($segments[0] === 'lernado') {
        // API de l'élève, pour l'application mobile (#1088) : util.php donne $bdd et les fonctions
        // de correction et d'envoi des mails, partagées avec les pages. Session seulement pour l'élève déjà connecté
        // au site : un cookie de session gardé par l'application ferait refuser ses appels suivants à auth/refresh
        // (protection CSRF)
        if (JWTAuth::getBearerToken() !== null || !isset($_COOKIE[session_name()])) {
            define('IKURSO_SEN_SESIO', true);
        }
        require_once 'util.php';
        require_once 'api/LernadoAPI.php';
        $api = new LernadoAPI($bdd, $urlracine);
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