<?php
// Cors.php - Gestion centralisée des en-têtes CORS de l'API

class Cors {

    // Origines autorisées à appeler l'API depuis un navigateur.
    // Surchargeable avec $corsOrigins (tableau) dans config.php.
    public static function allowedOrigins() {
        global $corsOrigins;
        if (isset($corsOrigins) && is_array($corsOrigins)) {
            return $corsOrigins;
        }
        $origins = array(
            'https://ikurso.esperanto-france.org',
            'https://nilegu.esperanto-france.org'
        );
        if (getenv('APP_ENV') === 'development') {
            $origins[] = 'http://localhost:8080';
            $origins[] = 'http://localhost:3000';
        }
        return $origins;
    }

    public static function apply($methods = 'GET, POST, PUT, PATCH, OPTIONS, DELETE', $headers = 'Content-Type, Authorization') {
        header('Vary: Origin');
        $origin = isset($_SERVER['HTTP_ORIGIN']) ? $_SERVER['HTTP_ORIGIN'] : '';
        if ($origin !== '' && in_array($origin, self::allowedOrigins(), true)) {
            header('Access-Control-Allow-Origin: ' . $origin);
        }
        header('Access-Control-Allow-Methods: ' . $methods);
        header('Access-Control-Allow-Headers: ' . $headers);
    }
}
?>
