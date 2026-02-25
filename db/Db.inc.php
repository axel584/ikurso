<?php
/**
 * Db.inc.php — Classe de base pour les classes DAO legacy dans db/*.inc.php
 *
 * Fournit l'accès au handle de connexion base de données ainsi que le
 * suivi des codes d'erreur, compatibles avec l'API mysql_* (native PHP 5.6
 * ou shim MySQLi via mysql_compat.php sur PHP 7.0+).
 */
class Db {

    private $_dbh    = null;
    private $_errno  = 0;
    private $_errstr = '';

    /**
     * Retourne le handle de connexion DB :
     * - PHP 7.0+ : l'objet MySQLi créé par mysql_compat.php / malfermiDatumbazon()
     * - PHP 5.6  : null → les fonctions mysql_* natives utilisent la connexion par défaut
     */
    function get_dbh() {
        if ($this->_dbh !== null) {
            return $this->_dbh;
        }
        // Connexion MySQLi globale établie par malfermiDatumbazon() (PHP 7.0+)
        // Sur PHP 5.6, cette clé n'existe pas → retourne null (connexion mysql par défaut)
        return $GLOBALS['_mysql_compat_link'] ?? null;
    }

    function set_dbh($dbh) {
        $this->_dbh = $dbh;
    }

    function get_errno()         { return $this->_errno; }
    function set_errno($errno)   { $this->_errno = $errno; }

    function get_errstr()        { return $this->_errstr; }
    function set_errstr($errstr) { $this->_errstr = $errstr; }
}
