<?php
// JWTAuth.php - Utilitaire pour l'authentification JWT

class JWTAuth {
    
    public static function validateJWT($jwt = null) {
        global $motDePasse;
        
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
        
        // Vérifier la signature
        $validSignature = self::base64url_encode(hash_hmac('sha256', $header . '.' . $payload, $motDePasse, true));
        
        if ($signature !== $validSignature) {
            return false;
        }
        
        // Décoder le payload
        $decodedPayload = json_decode(self::base64url_decode($payload), true);
        
        if (!$decodedPayload || !isset($decodedPayload['persono_id'])) {
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
        if (isset($_COOKIE['access_token'])) {
            return $_COOKIE['access_token'];
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
        return base64_decode(str_pad(strtr($data, '-_', '+/'), strlen($data) % 4, '=', STR_PAD_RIGHT));
    }
}
?>