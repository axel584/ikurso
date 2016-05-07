<?php
  class Db {
    var $host     = 'localhost';
    var $database = 'ikurso';
    var $username = 'jefo';
    var $password = 'polavuk';
    var $dbh;
    var $errno;
    var $errstr;

    function get_dbh() {
      $this->dbh = mysql_pconnect($this->host,$this->username,$this->password);
      mysql_select_db($this->database);
      return $this->dbh;
    }

    function get_errno() {
      return $this->errno;
    }

    function set_errno($errno) {
      $this->errno = $errno;
    }

    function get_errstr() {
      return $this->errstr;
    }

    function set_errstr($errstr) {
      $this->errstr = $errstr;
    }
  }
?>
