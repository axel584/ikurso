<?php
include_once 'Db.inc.php';
  class ferioj extends Db {
    var $id;
    var $persono;
    var $ekdato;
    var $findato;
    function get_id() {
      return $this->id;
    }

    function set_id($id) {
      $this->id = $id;
    }

    function get_persono() {
      return $this->persono;
    }

    function set_persono($persono) {
      $this->persono = $persono;
    }

    function get_ekdato() {
      return $this->ekdato;
    }

    function set_ekdato($ekdato) {
      $this->ekdato = $ekdato;
    }

    function get_findato() {
      return $this->findato;
    }

    function set_findato($findato) {
      $this->findato = $findato;
    }

    function store() {
      if($this->get_id() > 0) {
        return $this->update();
      }
      return $this->insert();
    }

    function insert() {
      $sql = sprintf("insert into ferioj (persono,ekdato,findato) values ('%s','%s','%s')",addslashes($this->get_persono()),addslashes($this->get_ekdato()),addslashes($this->get_findato()));
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
      $sql = sprintf("update ferioj set persono = '%s',ekdato = '%s',findato = '%s' where id = '%s'",addslashes($this->get_persono()),addslashes($this->get_ekdato()),addslashes($this->get_findato()),$this->get_id());
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
      $sql = sprintf("delete from ferioj where id = '%s'",
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
      $sql = sprintf("select id,persono,ekdato,findato from ferioj where id = '%s'",$id);
      $dbh = $this->get_dbh();
      $qid = $dbh->query($sql);
      if(!$qid) {
        $this->set_errno($dbh->errno);
        $this->set_errstr($dbh->error);
        return 0;
      }
      $row = $qid->fetch_array();
      $this->set_id($row[0]);
      $this->set_persono(stripslashes($row[1]));
      $this->set_ekdato(stripslashes($row[2]));
      $this->set_findato(stripslashes($row[3]));
      $qid->free();
      return 1;
    }

    function get_all_objects() {
      $recs;
      $dbh = $this->get_dbh();
      $qid = $dbh->query('select id,persono,ekdato,findato from ferioj');
      if(!$qid) {
        $this->set_errno($dbh->errno);
        $this->set_errstr($dbh->error);
        return $recs;
      }
      while($row = $qid->fetch_array()) {
        $obj = new ferioj;
        $obj->set_id($row[0]);
        $obj->set_persono($row[1]);
        $obj->set_ekdato($row[2]);
        $obj->set_findato($row[3]);
        $recs[] = $obj;
      }
      $qid->free();
      return $recs;
    }

  }

?>
