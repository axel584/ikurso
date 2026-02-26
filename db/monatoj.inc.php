<?php
include_once 'Db.inc.php';
  class monatoj extends Db {
    var $id;
    var $kodo;
    var $lingvo;
    var $nomo;
    function get_id() {
      return $this->id;
    }

    function set_id($id) {
      $this->id = $id;
    }

    function get_kodo() {
      return $this->kodo;
    }

    function set_kodo($kodo) {
      $this->kodo = $kodo;
    }

    function get_lingvo() {
      return $this->lingvo;
    }

    function set_lingvo($lingvo) {
      $this->lingvo = $lingvo;
    }

    function get_nomo() {
      return $this->nomo;
    }

    function set_nomo($nomo) {
      $this->nomo = $nomo;
    }

    function store() {
      if($this->get_id() > 0) {
        return $this->update();
      }
      return $this->insert();
    }

    function insert() {
      $sql = sprintf("insert into monatoj (kodo,lingvo,nomo) values ('%s','%s','%s')",addslashes($this->get_kodo()),addslashes($this->get_lingvo()),addslashes($this->get_nomo()));
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
      $sql = sprintf("update monatoj set kodo = '%s',lingvo = '%s',nomo = '%s' where id = '%s'",addslashes($this->get_kodo()),addslashes($this->get_lingvo()),addslashes($this->get_nomo()),$this->get_id());
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
      $sql = sprintf("delete from monatoj where id = '%s'",
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
      $sql = sprintf("select id,kodo,lingvo,nomo from monatoj where id = '%s'",$id);
      $dbh = $this->get_dbh();
      $qid = $dbh->query($sql);
      if(!$qid) {
        $this->set_errno($dbh->errno);
        $this->set_errstr($dbh->error);
        return 0;
      }
      $row = $qid->fetch_array();
      $this->set_id($row[0]);
      $this->set_kodo(stripslashes($row[1]));
      $this->set_lingvo(stripslashes($row[2]));
      $this->set_nomo(stripslashes($row[3]));
      $qid->free();
      return 1;
    }

    function get_all_objects() {
      $recs;
      $dbh = $this->get_dbh();
      $qid = $dbh->query('select id,kodo,lingvo,nomo from monatoj');
      if(!$qid) {
        $this->set_errno($dbh->errno);
        $this->set_errstr($dbh->error);
        return $recs;
      }
      while($row = $qid->fetch_array()) {
        $obj = new monatoj;
        $obj->set_id($row[0]);
        $obj->set_kodo($row[1]);
        $obj->set_lingvo($row[2]);
        $obj->set_nomo($row[3]);
        $recs[] = $obj;
      }
      $qid->free();
      return $recs;
    }

  }

?>
