<?php
/**
 * mysql_compat.php — Couche de compatibilité PHP 7.0 pour les fonctions mysql_*
 *
 * Sur PHP 5.6, les fonctions mysql_* existent nativement : ce fichier est sans effet.
 * Sur PHP 7.0+, mysql_* a été supprimé. Ce fichier redéfinit ces fonctions via MySQLi
 * afin que le code legacy continue de fonctionner sans modification.
 *
 * Usage : inclure ce fichier au tout début de db.inc.php (avant toute utilisation de mysql_*).
 */

if (!function_exists('mysql_connect')) {

    // Constantes MYSQL_* (supprimées avec l'extension mysql en PHP 7.0)
    if (!defined('MYSQL_BOTH'))  define('MYSQL_BOTH',  3);
    if (!defined('MYSQL_ASSOC')) define('MYSQL_ASSOC', 1);
    if (!defined('MYSQL_NUM'))   define('MYSQL_NUM',   2);

    /**
     * Retourne le lien MySQLi à utiliser (le lien fourni ou le lien global par défaut).
     */
    function _mysql_get_link($link = null) {
        if ($link instanceof mysqli) {
            return $link;
        }
        return $GLOBALS['_mysql_compat_link'] ?? null;
    }

    function mysql_connect($host = null, $user = null, $pass = null, $new_link = false) {
        global $urlDb, $login, $motDePasse;
        $host = $host ?? $urlDb ?? 'localhost';
        $user = $user ?? $login ?? 'root';
        $pass = $pass ?? $motDePasse ?? '';

        $conn = new mysqli($host, $user, $pass);
        if ($conn->connect_errno) {
            return false;
        }
        $conn->set_charset('utf8');
        $GLOBALS['_mysql_compat_link'] = $conn;
        return $conn;
    }

    function mysql_select_db($database, $link = null) {
        $link = _mysql_get_link($link);
        if (!$link) {
            return false;
        }
        return $link->select_db($database);
    }

    function mysql_query($sql, $link = null) {
        $link = _mysql_get_link($link);
        if (!$link) {
            return false;
        }
        $result = $link->query($sql);
        if ($result === false) {
            $GLOBALS['_mysql_errno'] = $link->errno;
            $GLOBALS['_mysql_error'] = $link->error;
        } else {
            $GLOBALS['_mysql_errno'] = 0;
            $GLOBALS['_mysql_error'] = '';
        }
        return $result;
    }

    function mysql_fetch_array($result, $type = MYSQL_BOTH) {
        if (!$result) {
            return false;
        }
        if ($type === MYSQL_ASSOC) {
            $mode = MYSQLI_ASSOC;
        } elseif ($type === MYSQL_NUM) {
            $mode = MYSQLI_NUM;
        } else {
            $mode = MYSQLI_BOTH;
        }
        return $result->fetch_array($mode);
    }

    function mysql_fetch_assoc($result) {
        return $result ? $result->fetch_assoc() : false;
    }

    function mysql_fetch_row($result) {
        return $result ? $result->fetch_row() : false;
    }

    function mysql_fetch_object($result) {
        return $result ? $result->fetch_object() : false;
    }

    function mysql_num_rows($result) {
        return $result ? $result->num_rows : 0;
    }

    function mysql_free_result($result) {
        if ($result instanceof mysqli_result) {
            $result->free();
        }
        return true;
    }

    function mysql_insert_id($link = null) {
        $link = _mysql_get_link($link);
        return $link ? (int)$link->insert_id : 0;
    }

    function mysql_affected_rows($link = null) {
        $link = _mysql_get_link($link);
        return $link ? $link->affected_rows : 0;
    }

    function mysql_error($link = null) {
        $link = _mysql_get_link($link);
        if ($link) {
            return $link->error;
        }
        return $GLOBALS['_mysql_error'] ?? '';
    }

    function mysql_errno($link = null) {
        $link = _mysql_get_link($link);
        if ($link) {
            return $link->errno;
        }
        return $GLOBALS['_mysql_errno'] ?? 0;
    }

    function mysql_real_escape_string($str, $link = null) {
        $link = _mysql_get_link($link);
        if ($link) {
            return $link->real_escape_string($str);
        }
        return addslashes($str);
    }

    function mysql_escape_string($str) {
        return mysql_real_escape_string($str);
    }

    function mysql_close($link = null) {
        $link = _mysql_get_link($link);
        if ($link) {
            $link->close();
            $GLOBALS['_mysql_compat_link'] = null;
        }
        return true;
    }

    function mysql_ping($link = null) {
        $link = _mysql_get_link($link);
        return $link ? $link->ping() : false;
    }

    function mysql_get_server_info($link = null) {
        $link = _mysql_get_link($link);
        return $link ? $link->server_info : '';
    }

    // Utilisé par l'ancienne bibliothèque PDF
    function mysql_sid($link = null) {
        $link = _mysql_get_link($link);
        return $link ? $link->thread_id : 0;
    }

} // end if (!function_exists('mysql_connect'))

// Stub pour set_magic_quotes_runtime() et get_magic_quotes_runtime() supprimés en PHP 7.0
if (!function_exists('set_magic_quotes_runtime')) {
    function set_magic_quotes_runtime($value) {
        // No-op : magic_quotes_runtime a été supprimé en PHP 5.4 / PHP 7.0
        return true;
    }
}
if (!function_exists('get_magic_quotes_runtime')) {
    function get_magic_quotes_runtime() {
        return false;
    }
}

// Stub pour ereg() / eregi() supprimés en PHP 7.0
if (!function_exists('ereg')) {
    function ereg($pattern, $string, &$regs = null) {
        $result = preg_match('/' . addcslashes($pattern, '/') . '/', $string, $matches);
        if ($regs !== null) {
            $regs = $result ? $matches : [];
        }
        return $result ? strlen($matches[0]) : false;
    }
}
if (!function_exists('eregi')) {
    function eregi($pattern, $string, &$regs = null) {
        $result = preg_match('/' . addcslashes($pattern, '/') . '/i', $string, $matches);
        if ($regs !== null) {
            $regs = $result ? $matches : [];
        }
        return $result ? strlen($matches[0]) : false;
    }
}
