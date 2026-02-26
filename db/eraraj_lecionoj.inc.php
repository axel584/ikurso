<?php
include_once 'Db.inc.php';
  class eraraj_lecionoj extends Db {
    var $id;
    var $persono_id;
    var $enirnomo;
    var $dato;
    var $videbla;
    var $subjekto;
    var $fonto;
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

    function get_enirnomo() {
      return $this->enirnomo;
    }

    function set_enirnomo($enirnomo) {
      $this->enirnomo = $enirnomo;
    }

    function get_dato() {
      return $this->dato;
    }

    function set_dato($dato) {
      $this->dato = $dato;
    }

    function get_videbla() {
      return $this->videbla;
    }

    function set_videbla($videbla) {
      $this->videbla = $videbla;
    }

    function get_subjekto() {
      return $this->subjekto;
    }

    function set_subjekto($subjekto) {
      $this->subjekto = $subjekto;
    }

    function get_fonto() {
      return $this->fonto;
    }

    function set_fonto($fonto) {
      $this->fonto = $fonto;
    }

    function store() {
      if($this->get_id() > 0) {
        return $this->update();
      }
      return $this->insert();
    }

    function insert() {
      $sql = sprintf("insert into eraraj_lecionoj (persono_id,enirnomo,dato,videbla,subjekto,fonto) values ('%s','%s','%s','%s','%s','%s')",addslashes($this->get_persono_id()),addslashes($this->get_enirnomo()),addslashes($this->get_dato()),addslashes($this->get_videbla()),addslashes($this->get_subjekto()),addslashes($this->get_fonto()));
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
      $sql = sprintf("update eraraj_lecionoj set persono_id = '%s',enirnomo = '%s',dato = '%s',videbla = '%s',subjekto = '%s',fonto = '%s' where id = '%s'",addslashes($this->get_persono_id()),addslashes($this->get_enirnomo()),addslashes($this->get_dato()),addslashes($this->get_videbla()),addslashes($this->get_subjekto()),addslashes($this->get_fonto()),$this->get_id());
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
      $sql = sprintf("delete from eraraj_lecionoj where id = '%s'",
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
      $sql = sprintf("select id,persono_id,enirnomo,dato,videbla,subjekto,fonto from eraraj_lecionoj where id = '%s'",$id);
      $dbh = $this->get_dbh();
      $qid = $dbh->query($sql);
      if(!$qid) {
        $this->set_errno($dbh->errno);
        $this->set_errstr($dbh->error);
        return 0;
      }
      $row = $qid->fetch_array();
      $this->set_id($row[0]);
      $this->set_persono_id(stripslashes($row[1]));
      $this->set_enirnomo(stripslashes($row[2]));
      $this->set_dato(stripslashes($row[3]));
      $this->set_videbla(stripslashes($row[4]));
      $this->set_subjekto(stripslashes($row[5]));
      $this->set_fonto(stripslashes($row[6]));
      $qid->free();
      return 1;
    }

    function get_all_objects() {
      $recs;
      $dbh = $this->get_dbh();
      $qid = $dbh->query('select id,persono_id,enirnomo,dato,videbla,subjekto,fonto from eraraj_lecionoj');
      if(!$qid) {
        $this->set_errno($dbh->errno);
        $this->set_errstr($dbh->error);
        return $recs;
      }
      while($row = $qid->fetch_array()) {
        $obj = new eraraj_lecionoj;
        $obj->set_id($row[0]);
        $obj->set_persono_id($row[1]);
        $obj->set_enirnomo($row[2]);
        $obj->set_dato($row[3]);
        $obj->set_videbla($row[4]);
        $obj->set_subjekto($row[5]);
        $obj->set_fonto($row[6]);
        $recs[] = $obj;
      }
      $qid->free();
      return $recs;
    }

  }

?>
