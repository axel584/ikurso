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

// Inclusion de la classe TekstojAPI
require_once 'api/TekstojAPI.php';

// Initialisation et traitement de la requête
$api = new TekstojAPI();
$api->handleRequest();
?>