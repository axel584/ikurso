<?php
// ReturnUrl.php - Validation des adresses de retour après connexion (connexion unique ikurso / nilegu)

require_once __DIR__ . '/Cors.php';

class ReturnUrl {

    // Durée de validité d'une adresse de retour mémorisée en session : 15 minutes
    const TTL = 900;

    // Renvoie l'URL si elle est absolue et pointe vers une origine autorisée (Cors::allowedOrigins()),
    // sinon null. Évite la redirection ouverte.
    public static function validate($url) {
        if (!is_string($url) || $url === '' || strlen($url) > 2000) {
            return null;
        }
        // espaces, caractères de contrôle et antislash interdits (injection d'en-tête, contournements)
        if (preg_match('/[\x00-\x20\x7f\\\\]/', $url)) {
            return null;
        }
        $parts = parse_url($url);
        if ($parts === false || !isset($parts['scheme']) || !isset($parts['host'])) {
            return null;
        }
        if (isset($parts['user']) || isset($parts['pass'])) {
            return null;
        }
        $origin = strtolower($parts['scheme']) . '://' . strtolower($parts['host']) . (isset($parts['port']) ? ':' . $parts['port'] : '');
        $allowed = array_map('strtolower', Cors::allowedOrigins());
        if (!in_array($origin, $allowed, true)) {
            return null;
        }
        return $url;
    }

    // Mémorise l'adresse de retour en session (elle sera utilisée à la prochaine connexion)
    public static function remember($url) {
        $_SESSION['retour'] = array('url' => $url, 'expire' => time() + self::TTL);
    }

    // Récupère (et oublie) l'adresse de retour mémorisée si elle est encore valide, sinon null
    public static function consume() {
        if (!isset($_SESSION['retour']) || !is_array($_SESSION['retour'])) {
            return null;
        }
        $retour = $_SESSION['retour'];
        unset($_SESSION['retour']);
        if (!isset($retour['url']) || !isset($retour['expire']) || $retour['expire'] < time()) {
            return null;
        }
        return self::validate($retour['url']);
    }
}
?>
