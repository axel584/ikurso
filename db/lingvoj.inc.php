<?php
include_once 'Db.inc.php';
  class lingvoj extends Db {
    var $id;
    var $kodo;
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
      $sql = sprintf("insert into lingvoj (kodo,nomo) values ('%s','%s')",addslashes($this->get_kodo()),addslashes($this->get_nomo()));
      $qid = mysql_query($sql,$this->get_dbh());
      if(0==$qid) {
        $this->set_errno(mysql_errno());
        $this->set_errstr(mysql_error());
        return 0;
      }
      $this->set_id(mysql_insert_id());
      return 1;
    }

    function update() {
      $sql = sprintf("update lingvoj set kodo = '%s',nomo = '%s' where id = '%s'",addslashes($this->get_kodo()),addslashes($this->get_nomo()),$this->get_id());
      $qid = mysql_query($sql,$this->get_dbh());
      if(0==$qid) {
        $this->set_errno(mysql_errno());
        $this->set_errstr(mysql_error());
        return 0;
      }
      $this->set_id(mysql_insert_id());
      return 1;
    }

    function delete() {
      $sql = sprintf("delete from lingvoj where id = '%s'",
                     addslashes($this->get_id()));
      $qid = mysql_query($sql,$this->get_dbh());
      if(TRUE!=$qid) {
        $this->set_errno(mysql_errno());
        $this->set_errstr(mysql_error());
        return 0;
      }
      return 1;
    }

    function load_by_id($id) {
      $sql = sprintf("select id,kodo,nomo from lingvoj where id = '%s'",$id);
      $qid = mysql_query($sql,$this->get_dbh());
      if(0==$qid) {
        $this->set_errno(mysql_errno());
        $this->set_errstr(mysql_error());
        return 0;
      }
      $row = mysql_fetch_array($qid);
      $this->set_id($row[0]);
      $this->set_kodo(stripslashes($row[1]));
      $this->set_nomo(stripslashes($row[2]));
      mysql_free_result($qid);
      return 1;
    }
    
     function load_by_kodo($kodo) {
      $sql = sprintf("select id,kodo,nomo from lingvoj where kodo = '%s'",$kodo);
      $qid = mysql_query($sql,$this->get_dbh());
      if(0==$qid) {
        $this->set_errno(mysql_errno());
        $this->set_errstr(mysql_error());
        return 0;
      }
      $row = mysql_fetch_array($qid);
      $this->set_id($row[0]);
      $this->set_kodo(stripslashes($row[1]));
      $this->set_nomo(stripslashes($row[2]));
      mysql_free_result($qid);
      return 1;
    }

    function get_all_objects() {
      $recs;
      $qid = mysql_query('select id,kodo,nomo from lingvoj',$this->get_dbh());
      if(0==$qid) {
        $this->set_errno(mysql_errno());
        $this->set_errstr(mysql_error());
        return $recs;
      }
      while($row = mysql_fetch_array($qid)) {
        $obj = new lingvoj;
        $obj->set_id($row[0]);
        $obj->set_kodo($row[1]);
        $obj->set_nomo($row[2]);
        $recs[] = $obj;
      }
      mysql_free_result($qid);
      return $recs;
    }

  }

?>
