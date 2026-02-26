<?php
include_once 'Db.inc.php';
  class mesagxoj extends Db {
    var $id;
    var $de;
    var $al;
    var $teksto;
    function get_id() {
      return $this->id;
    }

    function set_id($id) {
      $this->id = $id;
    }

    function get_de() {
      return $this->de;
    }

    function set_de($de) {
      $this->de = $de;
    }

    function get_al() {
      return $this->al;
    }

    function set_al($al) {
      $this->al = $al;
    }

    function get_teksto() {
      return $this->teksto;
    }

    function set_teksto($teksto) {
      $this->teksto = $teksto;
    }

    function store() {
      if($this->get_id() > 0) {
        return $this->update();
      }
      return $this->insert();
    }

    function insert() {
      $sql = sprintf("insert into mesagxoj (de,al,teksto) values ('%s','%s','%s')",addslashes($this->get_de()),addslashes($this->get_al()),addslashes($this->get_teksto()));
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
      $sql = sprintf("update mesagxoj set de = '%s',al = '%s',teksto = '%s' where id = '%s'",addslashes($this->get_de()),addslashes($this->get_al()),addslashes($this->get_teksto()),$this->get_id());
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
      $sql = sprintf("delete from mesagxoj where id = '%s'",
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
      $sql = sprintf("select id,de,al,teksto from mesagxoj where id = '%s'",$id);
      $dbh = $this->get_dbh();
      $qid = $dbh->query($sql);
      if(!$qid) {
        $this->set_errno($dbh->errno);
        $this->set_errstr($dbh->error);
        return 0;
      }
      $row = $qid->fetch_array();
      $this->set_id($row[0]);
      $this->set_de(stripslashes($row[1]));
      $this->set_al(stripslashes($row[2]));
      $this->set_teksto(stripslashes($row[3]));
      $qid->free();
      return 1;
    }

    function get_all_objects() {
      $recs;
      $dbh = $this->get_dbh();
      $qid = $dbh->query('select id,de,al,teksto from mesagxoj');
      if(!$qid) {
        $this->set_errno($dbh->errno);
        $this->set_errstr($dbh->error);
        return $recs;
      }
      while($row = $qid->fetch_array()) {
        $obj = new mesagxoj;
        $obj->set_id($row[0]);
        $obj->set_de($row[1]);
        $obj->set_al($row[2]);
        $obj->set_teksto($row[3]);
        $recs[] = $obj;
      }
      $qid->free();
      return $recs;
    }

  }

?>
