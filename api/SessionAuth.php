<?php
// SessionAuth.php - Session PHP partagée entre les pages historiques et l'API

class SessionAuth {

    // Durée de vie de la session : 24 h
    const LIFETIME = 86400;

    private static function isHttps() {
        return (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off')
            || (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && strtolower($_SERVER['HTTP_X_FORWARDED_PROTO']) === 'https');
    }

    // Paramètres du cookie de session, à appeler avant tout session_start().
    // Cookie propre à l'hôte (pas de Domain), HttpOnly, SameSite=Lax, Secure en HTTPS.
    public static function configure() {
        if (session_status() === PHP_SESSION_ACTIVE) {
            return;
        }
        ini_set('session.gc_maxlifetime', self::LIFETIME);
        ini_set('session.use_strict_mode', 1);
        ini_set('session.use_only_cookies', 1);
        $secure = self::isHttps();
        if (PHP_VERSION_ID >= 70300) {
            session_set_cookie_params(array(
                'lifetime' => self::LIFETIME,
                'path' => '/',
                'domain' => '',
                'secure' => $secure,
                'httponly' => true,
                'samesite' => 'Lax'
            ));
        } else {
            // avant PHP 7.3 : SameSite s'ajoute au chemin
            session_set_cookie_params(self::LIFETIME, '/; samesite=Lax', '', $secure, true);
        }
    }

    // Démarre la session ; renvoie true si c'est nous qui l'avons démarrée
    private static function open() {
        if (session_status() === PHP_SESSION_ACTIVE) {
            return false;
        }
        self::configure();
        session_start();
        return true;
    }

    // Identifiant de la personne connectée par session, ou null.
    // Lecture seule : le verrou de session est relâché aussitôt (appels parallèles).
    public static function currentPersonoId() {
        if (session_status() !== PHP_SESSION_ACTIVE && !isset($_COOKIE[session_name()])) {
            return null;
        }
        $started = self::open();
        $id = (isset($_SESSION['persono_id']) && $_SESSION['persono_id'] !== '') ? $_SESSION['persono_id'] : null;
        if ($started) {
            session_write_close();
        }
        return $id;
    }

    // Connecte la personne : nouvel identifiant de session (anti fixation de session)
    public static function login($persono_id) {
        $hadSessionCookie = isset($_COOKIE[session_name()]);
        $started = self::open();
        if ($hadSessionCookie) {
            session_regenerate_id(true);
        }
        $_SESSION['persono_id'] = $persono_id;
        if ($started) {
            session_write_close();
        }
    }

    // Déconnecte : détruit la session et supprime son cookie
    public static function logout() {
        if (session_status() !== PHP_SESSION_ACTIVE && !isset($_COOKIE[session_name()])) {
            return;
        }
        self::open();
        $_SESSION = array();
        $p = session_get_cookie_params();
        setcookie(session_name(), '', time() - 3600, $p['path'], $p['domain'], $p['secure'], $p['httponly']);
        session_destroy();
    }
}
?>
