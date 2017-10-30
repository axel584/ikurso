<?php
//include_once("Db.inc.php");
  class protokolo extends Db {
    var $id;
    var $persono_id;
    var $horo;
    var $ip;
    var $kategorio;
    var $teksto;
    var $lingvo;
    function get_id() {
      return $this->id;
    }

    function set_id($id) {
      $this->id = $id;
    }

    function get_persono_id() {
      return $this->persono_id;
    }

    function set_persono_id($persono_id) {
      $this->persono_id = $persono_id;
    }

    function get_horo() {
      return $this->horo;
    }

    function set_horo($horo) {
      $this->horo = $horo;
    }

    function get_ip() {
      return $this->ip;
    }

    function set_ip($ip) {
      $this->ip = $ip;
    }

    function get_kategorio() {
      return $this->kategorio;
    }

    function set_kategorio($kategorio) {
      $this->kategorio = $kategorio;
    }

    function get_teksto() {
      return $this->teksto;
    }

    function set_teksto($teksto) {
      $this->teksto = $teksto;
    }

    function get_lingvo() {
      return $this->lingvo;
    }

    function set_lingvo($lingvo) {
      $this->lingvo = $lingvo;
    }

    function store() {
      if($this->get_id() > 0) {
        return $this->update();
      }
      return $this->insert();
    }

    function insert() {
      $sql = sprintf("insert into protokolo (persono_id,horo,ip,kategorio,teksto,lingvo) values ('%s',now(),'%s','%s','%s','%s')",addslashes($this->get_persono_id()),$_SERVER['REMOTE_ADDR'],addslashes($this->get_kategorio()),addslashes($this->get_teksto()),addslashes($this->get_lingvo()));
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
      $sql = sprintf("update protokolo set persono_id = '%s',horo = now(),ip = '%s',kategorio = '%s',teksto = '%s',lingvo = '%s' where id = '%s'",addslashes($this->get_persono_id()),$_SERVER['REMOTE_ADDR'],addslashes($this->get_kategorio()),addslashes($this->get_teksto()),addslashes($this->get_lingvo()),$this->get_id());
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
      $sql = sprintf("delete from protokolo where id = '%s'",
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
      $sql = sprintf("select id,persono_id,horo,ip,kategorio,teksto,lingvo from protokolo where id = '%s'",$id);
      $qid = mysql_query($sql,$this->get_dbh());
      if(0==$qid) {
        $this->set_errno(mysql_errno());
        $this->set_errstr(mysql_error());
        return 0;
      }
      $row = mysql_fetch_array($qid);
      $this->set_id($row[0]);
      $this->set_persono_id(stripslashes($row[1]));
      $this->set_horo(stripslashes($row[2]));
      $this->set_ip(stripslashes($row[3]));
      $this->set_kategorio(stripslashes($row[4]));
      $this->set_teksto(stripslashes($row[5]));
      $this->set_lingvo(stripslashes($row[6]));
      mysql_free_result($qid);
      return 1;
    }

    function get_all_objects() {
      $recs;
      $qid = mysql_query('select id,persono_id,horo,ip,kategorio,teksto,lingvo from protokolo',$this->get_dbh());
      if(0==$qid) {
        $this->set_errno(mysql_errno());
        $this->set_errstr(mysql_error());
        return $recs;
      }
      while($row = mysql_fetch_array($qid)) {
        $obj = new protokolo;
        $obj->set_id($row[0]);
        $obj->set_persono_id($row[1]);
        $obj->set_horo($row[2]);
        $obj->set_ip($row[3]);
        $obj->set_kategorio($row[4]);
        $obj->set_teksto($row[5]);
        $obj->set_lingvo($row[6]);
        $recs[] = $obj;
      }
      mysql_free_result($qid);
      return $recs;
    }

  }

?>
