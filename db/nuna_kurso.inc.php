<?php
include_once 'Db.inc.php';
include_once("kursoj.inc.php");
include_once("personoj.inc.php");
include_once("lecionoj.inc.php");
  class nuna_kurso extends Db {
    var $id;
    var $ekdato;
    var $findato;
    var $stato;
    var $lastdato;
    var $korektanto;
    var $pasintakorektanto;
    var $studanto;
    var $nunleciono;
    var $kurso;

	function __construct() {
		$this->korektanto=new personoj;
		$this->studanto=new personoj;
		$this->kurso=new kursoj;
		$this->nunleciono=new lecionoj;
	}

    function get_id() {
      return $this->id;
    }

    function set_id($id) {
      $this->id = $id;
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

    function get_stato() {
      return $this->stato;
    }

    function set_stato($stato) {
      $this->stato = $stato;
    }

    function get_lastdato() {
      return $this->lastdato;
    }

    function set_lastdato($lastdato) {
      $this->lastdato = $lastdato;
    }

    function get_korektanto() {
      return $this->korektanto;
    }

    function set_korektanto($korektanto) {
      $this->korektanto = $korektanto;
    }

    function get_pasintakorektanto() {
      return $this->pasintakorektanto;
    }

    function set_pasintakorektanto($pasintakorektanto) {
      $this->pasintakorektanto = $pasintakorektanto;
    }

    function get_studanto() {
      return $this->studanto;
    }

    function set_studanto($studanto) {
      $this->studanto = $studanto;
    }

    function get_nunleciono() {
      return $this->nunleciono;
    }

    function set_nunleciono($nunleciono) {
      $this->nunleciono = $nunleciono;
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
      $sql = sprintf("insert into nuna_kurso (ekdato,findato,stato,lastdato,korektanto,pasintakorektanto,studanto,nunleciono,kurso) values ('%s','%s','%s','%s','%s','%s','%s','%s','%s')",addslashes($this->get_ekdato()),addslashes($this->get_findato()),addslashes($this->get_stato()),addslashes($this->get_lastdato()),addslashes($this->korektanto->get_id()),addslashes($this->get_pasintakorektanto()),addslashes($this->studanto->get_id()),addslashes($this->nunleciono->get_id()),addslashes($this->kurso->get_kodo()));
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
      $sql = sprintf("update nuna_kurso set ekdato = '%s',findato = '%s',stato = '%s',lastdato = '%s',korektanto = '%s',pasintakorektanto = '%s',studanto = '%s',nunleciono = '%s',kurso = '%s' where id = '%s'",addslashes($this->get_ekdato()),addslashes($this->get_findato()),addslashes($this->get_stato()),addslashes($this->get_lastdato()),addslashes($this->korektanto->get_id()),addslashes($this->get_pasintakorektanto()),addslashes($this->studanto->get_id()),addslashes($this->nunleciono->get_id()),addslashes($this->kurso->get_kodo()),$this->get_id());
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
      $sql = sprintf("delete from nuna_kurso where id = '%s'",
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
      $sql = sprintf("select id,ekdato,findato,stato,lastdato,korektanto,pasintakorektanto,studanto,nunleciono,kurso from nuna_kurso where id = '%s'",$id);
      $dbh = $this->get_dbh();
      $qid = $dbh->query($sql);
      if(!$qid) {
        $this->set_errno($dbh->errno);
        $this->set_errstr($dbh->error);
        return 0;
      }
      $row = $qid->fetch_array();
      $this->set_id($row[0]);
      $this->set_ekdato(stripslashes($row[1]));
      $this->set_findato(stripslashes($row[2]));
      $this->set_stato(stripslashes($row[3]));
      $this->set_lastdato(stripslashes($row[4]));
      $this->set_pasintakorektanto(stripslashes($row[6]));

		//chargement des objets
	  	$this->studanto->load_by_id($row[7]);
		$this->korektanto->load_by_id($row[5]);
		//charge le cours en fonction de la langue de l'�l�ve
		$this->kurso->load_by_kodo($row[9],$obj->studanto->lingvo->get_kodo());
		$this->nunleciono->load_by_numero($row[8],$obj->studanto->lingvo->get_kodo());

      $qid->free();
      return 1;
    }

    function load_by_kurso($kurso,$lingvo) {
      $recs;
      $sql = sprintf("select nuna_kurso.id,nuna_kurso.ekdato,nuna_kurso.findato,nuna_kurso.stato,nuna_kurso.lastdato,nuna_kurso.korektanto,nuna_kurso.pasintakorektanto,nuna_kurso.studanto,nuna_kurso.nunleciono,nuna_kurso.kurso from nuna_kurso,personoj where nuna_kurso.kurso='%s' and nuna_kurso.studanto=personoj.id and personoj.lingvo='%s'",$kurso,$lingvo);
      $dbh = $this->get_dbh();
      $qid = $dbh->query($sql);
      if(!$qid) {
        $this->set_errno($dbh->errno);
        $this->set_errstr($dbh->error);
        return $recs;
      }
      while($row = $qid->fetch_array()) {
        $obj = new nuna_kurso;
        $obj->set_id($row[0]);
        $obj->set_ekdato($row[1]);
        $obj->set_findato($row[2]);
        $obj->set_stato($row[3]);
        $obj->set_lastdato($row[4]);
        $obj->set_pasintakorektanto($row[6]);

		//chargement des objets
	  	$obj->studanto->load_by_id($row[7]);
		$obj->korektanto->load_by_id($row[5]);
		//charge le cours en fonction de la langue de l'�l�ve
		$obj->kurso->load_by_kodo($row[9],$obj->studanto->lingvo->get_kodo());
		$obj->nunleciono->load_by_numero($row[8],$row[9],$obj->studanto->lingvo->get_kodo(),$obj->studanto->lingvo->get_kodo());

        $recs[] = $obj;
      }
      $qid->free();
      return $recs;
    }

      function load_by_korektanto_kaj_kurso($korektanto,$kurso) {
      $recs;
      $sql = sprintf("select nuna_kurso.id,nuna_kurso.ekdato,nuna_kurso.findato,nuna_kurso.stato,nuna_kurso.lastdato,nuna_kurso.korektanto,nuna_kurso.pasintakorektanto,nuna_kurso.studanto,nuna_kurso.nunleciono,kurso from nuna_kurso where korektanto='%s' and kurso='%s'",$korektanto,$kurso);
      $dbh = $this->get_dbh();
      $qid = $dbh->query($sql);
      if(!$qid) {
        $this->set_errno($dbh->errno);
        $this->set_errstr($dbh->error);
        return $recs;
      }
      while($row = $qid->fetch_array()) {
        $obj = new nuna_kurso;
        $obj->set_id($row[0]);
        $obj->set_ekdato($row[1]);
        $obj->set_findato($row[2]);
        $obj->set_stato($row[3]);
        $obj->set_lastdato($row[4]);
        $obj->set_pasintakorektanto($row[6]);

		//chargement des objets
	  	$obj->studanto->load_by_id($row[7]);
		$obj->korektanto->load_by_id($row[5]);
		//charge le cours en fonction de la langue de l'�l�ve
		$obj->kurso->load_by_kodo($row[9],$obj->studanto->lingvo->get_kodo());
		$obj->nunleciono->load_by_numero($row[8],$obj->studanto->lingvo->get_kodo());

        $recs[] = $obj;
      }
      $qid->free();
      return $recs;
    }

    function find_one($parametre) {
   	$obj = new nuna_kurso;
   	$objs=$obj->find($parametre);
   	if (count($objs)>0) {
   		 $this->set_id($objs[0]->get_id());
	      	$this->set_ekdato($objs[0]->get_ekdato());
	      	$this->set_findato($objs[0]->get_findato());
	      	$this->set_stato($objs[0]->get_stato());
	      	$this->set_lastdato($objs[0]->get_lastdato());
	      	$this->set_korektanto($objs[0]->get_korektanto());
	      	$this->set_pasintakorektanto($objs[0]->get_pasintakorektanto());
	      	$this->set_studanto($objs[0]->get_studanto());
	      	$this->set_nunleciono($objs[0]->get_nunleciono());
	      	$this->set_kurso($objs[0]->get_kurso());

			//chargement des objets
			$this->studanto->load_by_id($objs[0]->studanto->get_id());
			$this->korektanto->load_by_id($objs[0]->korektanto->get_id());
			//charge le cours en fonction de la langue de l'�l�ve
			$this->kurso->load_by_kodo($objs[0]->kurso->get_kodo,$objs[0]->studanto->lingvo->get_kodo());
			$this->nunleciono->load_by_numero($objs[0]->nunleciono->get_numero(),$objs[0]->kurso->get_kodo(),$objs[0]->studanto->lingvo->get_kodo());
	}
   }

    function find($parametre) {
        $sql = "select id,ekdato,findato,stato,lastdato,korektanto,pasintakorektanto,studanto,nunleciono,kurso from nuna_kurso where 1=1";
        foreach($parametre as $cle => $valeur) {
    	$sql = $sql . " and ".$cle."='".$valeur."'";
        }
        $dbh = $this->get_dbh();
        $qid = $dbh->query($sql);
        if(!$qid) {
        $this->set_errno($dbh->errno);
        $this->set_errstr($dbh->error);
        return $recs;
      }
      while($row = $qid->fetch_array()) {
        $obj = new nuna_kurso;
        $obj->set_id($row[0]);
        $obj->set_ekdato($row[1]);
        $obj->set_findato($row[2]);
        $obj->set_stato($row[3]);
        $obj->set_lastdato($row[4]);
        $obj->set_pasintakorektanto($row[6]);

		//chargement des objets
	  	$obj->studanto->load_by_id($row[7]);
		$testeleve = new personoj;
		$testeleve->load_by_id($row[7]);
		$obj->korektanto->load_by_id($row[5]);
		//charge le cours en fonction de la langue de l'�l�ve
		$obj->kurso->load_by_kodo($row[9],$obj->studanto->lingvo->get_kodo());
		$obj->nunleciono->load_by_numero($row[8],$row[9],$obj->studanto->lingvo->get_kodo());

        $recs[] = $obj;
      }
      $qid->free();
      return $recs;
    }

     function load_by_studanto_kaj_kurso($studanto,$kurso) {
	 $this->find_one(array("studanto"=>$studanto,"kurso"=>$kurso));
/*      $sql = sprintf("select nuna_kurso.id,nuna_kurso.ekdato,nuna_kurso.findato,nuna_kurso.stato,nuna_kurso.lastdato,nuna_kurso.korektanto,nuna_kurso.pasintakorektanto,nuna_kurso.studanto,nuna_kurso.nunleciono,kurso from nuna_kurso where studanto='%s' and kurso='%s'",$studanto,$kurso);
      $dbh = $this->get_dbh();
      $qid = $dbh->query($sql);
      if(!$qid) {
        $this->set_errno($dbh->errno);
        $this->set_errstr($dbh->error);
        return 0;
      }
      $row = $qid->fetch_array();
      $this->set_id($row[0]);
      $this->set_ekdato(stripslashes($row[1]));
      $this->set_findato(stripslashes($row[2]));
      $this->set_stato(stripslashes($row[3]));
      $this->set_lastdato(stripslashes($row[4]));
      $this->set_korektanto(stripslashes($row[5]));
      $this->set_pasintakorektanto(stripslashes($row[6]));
      $this->set_studanto(stripslashes($row[7]));
      $this->set_nunleciono(stripslashes($row[8]));
      $this->set_kurso(stripslashes($row[9]));
      $qid->free();*/
      return 1;
    }


    function get_all_objects() {
      $recs;
      $dbh = $this->get_dbh();
      $qid = $dbh->query('select id,ekdato,findato,stato,lastdato,korektanto,pasintakorektanto,studanto,nunleciono,kurso from nuna_kurso');
      if(!$qid) {
        $this->set_errno($dbh->errno);
        $this->set_errstr($dbh->error);
        return $recs;
      }
      while($row = $qid->fetch_array()) {
        $obj = new nuna_kurso;
        $obj->set_id($row[0]);
        $obj->set_ekdato($row[1]);
        $obj->set_findato($row[2]);
        $obj->set_stato($row[3]);
        $obj->set_lastdato($row[4]);
        $obj->set_korektanto($row[5]);
        $obj->set_pasintakorektanto($row[6]);
        $obj->set_studanto($row[7]);
        $obj->set_nunleciono($row[8]);
        $obj->set_kurso($row[9]);
        $recs[] = $obj;
      }
      $qid->free();
      return $recs;
    }

  }

?>