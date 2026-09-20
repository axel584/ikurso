<?php
// JWTAuth.php - Utilitaire pour l'authentification JWT (HS256)

class JWTAuth {

    // Durée de vie du jeton et du cookie : 30 jours.
    // À réduire (1 h) quand la session en cookie remplacera le jeton côté nilegu.
    const TTL = 2592000;

    const COOKIE_NAME = 'access_token';

    // Secret de signature : $JWT_SECRET de config.php.
    // Repli temporaire sur $motDePasse (mot de passe de la base) tant que $JWT_SECRET n'est pas défini.
    private static function secret() {
        global $JWT_SECRET, $motDePasse;
        if (!empty($JWT_SECRET)) {
            return $JWT_SECRET;
        }
        error_log('JWTAuth: $JWT_SECRET absent de config.php, repli sur $motDePasse (à corriger)');
        return $motDePasse;
    }

    // Génère un jeton pour un utilisateur (ligne de la table personoj)
    public static function generate($user) {
        $now = time();
        $header = array('alg' => 'HS256', 'typ' => 'JWT');
        $payload = array(
            'persono_id' => $user['id'],
            'enirnomo' => $user['enirnomo'],
            'rajto' => $user['rajtoj'],
            'iat' => $now,
            'exp' => $now + self::TTL
        );
        $body = self::base64url_encode(json_encode($header)) . '.' . self::base64url_encode(json_encode($payload));
        $signature = self::base64url_encode(hash_hmac('sha256', $body, self::secret(), true));
        return $body . '.' . $signature;
    }

    // Dépose le cookie d'authentification (HttpOnly, Secure, SameSite=Lax)
    public static function setCookie($jwt) {
        self::sendCookie($jwt, time() + self::TTL);
    }

    // Supprime le cookie (mêmes domaine et chemin que ceux utilisés pour le poser)
    public static function clearCookie() {
        self::sendCookie('', time() - 3600);
    }

    private static function sendCookie($value, $expire) {
        global $cookieDomain;
        $domain = isset($cookieDomain) ? $cookieDomain : '';
        if (PHP_VERSION_ID >= 70300) {
            setcookie(self::COOKIE_NAME, $value, array(
                'expires' => $expire,
                'path' => '/',
                'domain' => $domain,
                'secure' => true,
                'httponly' => true,
                'samesite' => 'Lax'
            ));
        } else {
            // avant PHP 7.3 : SameSite s'ajoute au chemin
            setcookie(self::COOKIE_NAME, $value, $expire, '/; samesite=Lax', $domain, true, true);
        }
    }

    public static function validateJWT($jwt = null) {
        // Si aucun JWT fourni, essayer de le récupérer depuis les cookies ou headers
        if (!$jwt) {
            $jwt = self::getJWTFromRequest();
        }

        if (!$jwt) {
            return false;
        }

        // Diviser le JWT en ses parties
        $parts = explode('.', $jwt);
        if (count($parts) !== 3) {
            return false;
        }

        list($header, $payload, $signature) = $parts;

        // Seul HS256 est accepté
        $decodedHeader = json_decode(self::base64url_decode($header), true);
        if (!is_array($decodedHeader) || !isset($decodedHeader['alg']) || $decodedHeader['alg'] !== 'HS256') {
            return false;
        }

        // Vérifier la signature (comparaison à temps constant)
        $validSignature = self::base64url_encode(hash_hmac('sha256', $header . '.' . $payload, self::secret(), true));
        if (!hash_equals($validSignature, $signature)) {
            return false;
        }

        // Décoder le payload
        $decodedPayload = json_decode(self::base64url_decode($payload), true);

        if (!is_array($decodedPayload) || !isset($decodedPayload['persono_id'])) {
            return false;
        }

        // Un jeton sans expiration, ou expiré, est refusé
        if (!isset($decodedPayload['exp']) || !is_numeric($decodedPayload['exp']) || $decodedPayload['exp'] < time()) {
            return false;
        }

        return $decodedPayload;
    }

    public static function getPersonoIdFromJWT($jwt = null) {
        $payload = self::validateJWT($jwt);
        return $payload ? $payload['persono_id'] : null;
    }

    private static function getJWTFromRequest() {
        // 1. Essayer depuis les cookies
        if (isset($_COOKIE[self::COOKIE_NAME])) {
            return $_COOKIE[self::COOKIE_NAME];
        }

        // 2. Essayer depuis l'header Authorization Bearer
        $authHeader = self::getAuthorizationHeader();
        if ($authHeader && preg_match('/Bearer\s+(\S+)/', $authHeader, $matches)) {
            return $matches[1];
        }

        return null;
    }

    private static function getAuthorizationHeader() {
        if (isset($_SERVER['Authorization'])) {
            return trim($_SERVER["Authorization"]);
        } else if (isset($_SERVER['HTTP_AUTHORIZATION'])) {
            return trim($_SERVER["HTTP_AUTHORIZATION"]);
        } else if (function_exists('apache_request_headers')) {
            $requestHeaders = apache_request_headers();
            if (isset($requestHeaders['Authorization'])) {
                return trim($requestHeaders['Authorization']);
            }
        }
        return null;
    }

    private static function base64url_encode($data) {
        return rtrim(strtr(base64_encode($data), '+/', '-_'), '=');
    }

    private static function base64url_decode($data) {
        return base64_decode(strtr($data, '-_', '+/') . str_repeat('=', (4 - strlen($data) % 4) % 4));
    }
}
?>
