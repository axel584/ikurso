<?php
include_once 'Db.inc.php';
  class lecionoj extends Db {
    var $id;
    var $lingvo;
    var $numero;
    var $titolo;
    var $kurso;
    function get_id() {
      return $this->id;
    }

    function set_id($id) {
      $this->id = $id;
    }

    function get_lingvo() {
      return $this->lingvo;
    }

    function set_lingvo($lingvo) {
      $this->lingvo = $lingvo;
    }

    function get_numero() {
      return $this->numero;
    }

    function set_numero($numero) {
      $this->numero = $numero;
    }

    function get_titolo() {
      return $this->titolo;
    }

    function set_titolo($titolo) {
      $this->titolo = $titolo;
    }

    function get_kurso() {
      return $this->kurso;
    }

    function set_kurso($kurso) {
      $this->kurso = $kurso;
    }

    function store() {
      if($this->get_id() > 0) {
        return $this->update();
      }
      return $this->insert();
    }

    function insert() {
      $sql = sprintf("insert into lecionoj (lingvo,numero,titolo,kurso) values ('%s','%s','%s','%s')",addslashes($this->get_lingvo()),addslashes($this->get_numero()),addslashes($this->get_titolo()),addslashes($this->get_kurso()));
      $dbh = $this->get_dbh();
      $qid = $dbh->query($sql);
      if(!$qid) {
        $this->set_errno($dbh->errno);
        $this->set_errstr($dbh->error);
        return 0;
      }
      $this->set_id($dbh->insert_id);
      return 1;
    }

    function update() {
      $sql = sprintf("update lecionoj set lingvo = '%s',numero = '%s',titolo = '%s',kurso = '%s' where id = '%s'",addslashes($this->get_lingvo()),addslashes($this->get_numero()),addslashes($this->get_titolo()),addslashes($this->get_kurso()),$this->get_id());
      $dbh = $this->get_dbh();
      $qid = $dbh->query($sql);
      if(!$qid) {
        $this->set_errno($dbh->errno);
        $this->set_errstr($dbh->error);
        return 0;
      }
      $this->set_id($dbh->insert_id);
      return 1;
    }

    function delete() {
      $sql = sprintf("delete from lecionoj where id = '%s'",
                     addslashes($this->get_id()));
      $dbh = $this->get_dbh();
      $qid = $dbh->query($sql);
      if(!$qid) {
        $this->set_errno($dbh->errno);
        $this->set_errstr($dbh->error);
        return 0;
      }
      return 1;
    }

    function load_by_id($id) {
      $sql = sprintf("select id,lingvo,numero,titolo,kurso from lecionoj where id = '%s'",$id);
      $dbh = $this->get_dbh();
      $qid = $dbh->query($sql);
      if(!$qid) {
        $this->set_errno($dbh->errno);
        $this->set_errstr($dbh->error);
        return 0;
      }
      $row = $qid->fetch_array();
      $this->set_id($row[0]);
      $this->set_lingvo(stripslashes($row[1]));
      $this->set_numero(stripslashes($row[2]));
      $this->set_titolo(stripslashes($row[3]));
      $this->set_kurso(stripslashes($row[4]));
      $qid->free();
      return 1;
    }

    function load_by_numero($numero,$kurso,$lingvo) {
      $sql = sprintf("select id,lingvo,numero,titolo,kurso from lecionoj where numero = '%s' and kurso = '%s' and lingvo ='%s'",$numero,$kurso,$lingvo);
      $dbh = $this->get_dbh();
      $qid = $dbh->query($sql);
      if(!$qid) {
        $this->set_errno($dbh->errno);
        $this->set_errstr($dbh->error);
        return 0;
      }
      $row = $qid->fetch_array();
      $this->set_id($row[0]);
      $this->set_lingvo(stripslashes($row[1]));
      $this->set_numero(stripslashes($row[2]));
      $this->set_titolo(stripslashes($row[3]));
      $this->set_kurso(stripslashes($row[4]));
      $qid->free();
      return 1;
    }

    function get_all_objects() {
      $recs;
      $dbh = $this->get_dbh();
      $qid = $dbh->query('select id,lingvo,numero,titolo,kurso from lecionoj');
      if(!$qid) {
        $this->set_errno($dbh->errno);
        $this->set_errstr($dbh->error);
        return $recs;
      }
      while($row = $qid->fetch_array()) {
        $obj = new lecionoj;
        $obj->set_id($row[0]);
        $obj->set_lingvo($row[1]);
        $obj->set_numero($row[2]);
        $obj->set_titolo($row[3]);
        $obj->set_kurso($row[4]);
        $recs[] = $obj;
      }
      $qid->free();
      return $recs;
    }

  }

?>
