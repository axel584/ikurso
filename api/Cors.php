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
            header('Access-Control-Allow-Credentials: true');
        }
        header('Access-Control-Allow-Methods: ' . $methods);
        header('Access-Control-Allow-Headers: ' . $headers);
    }

    // Protection CSRF des requêtes qui modifient des données (le cookie de session est envoyé
    // automatiquement par le navigateur). À appeler après les en-têtes CORS.
    public static function rejectForbiddenOrigin() {
        $method = $_SERVER['REQUEST_METHOD'];
        if ($method === 'GET' || $method === 'HEAD' || $method === 'OPTIONS') {
            return;
        }
        $allowed = self::allowedOrigins();
        $origin = isset($_SERVER['HTTP_ORIGIN']) ? $_SERVER['HTTP_ORIGIN'] : '';
        if ($origin !== '') {
            if (in_array($origin, $allowed, true)) {
                return;
            }
        } else {
            // Sans en-tête Origin : client non navigateur (script, curl) autorisé seulement s'il
            // n'envoie pas de cookie d'authentification ; sinon le Referer doit être autorisé.
            $hasAuthCookie = isset($_COOKIE[session_name()]) || isset($_COOKIE['access_token']);
            if (!$hasAuthCookie) {
                return;
            }
            $referer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '';
            $parts = parse_url($referer);
            if (isset($parts['scheme']) && isset($parts['host'])) {
                $refOrigin = $parts['scheme'] . '://' . $parts['host'] . (isset($parts['port']) ? ':' . $parts['port'] : '');
                if (in_array($refOrigin, $allowed, true)) {
                    return;
                }
            }
        }
        http_response_code(403);
        echo json_encode(array('error' => 'Origine non autorisée'));
        exit;
    }
}
?>
