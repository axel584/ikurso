<?php
include_once 'Db.inc.php';
include_once("lingvoj.inc.php");
include_once("landoj.inc.php");
include_once("rajtoj.inc.php");
  class personoj extends Db {
    var $id;
    var $ekdato;
    var $sekso;
    var $familinomo;
    var $personnomo;
    var $enirnomo;
    var $pasvorto;
    var $adreso1;
    var $adreso2;
    var $posxtkodo;
    var $urbo;
    var $lando;
    var $retadreso;
    var $naskigxdato;
    var $lingvo;
    var $rajtoj;
    var $kialo;
    var $noto;
    var $maksimumo;
    var $kurso;
    var $videbla;
    var $sistemo;
    var $stopInfo;
    
    function __construct() {
    	$this->lingvo=new lingvoj;
    	$this->lando=new landoj;
    	$this->rajtoj=new rajtoj;
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

    function get_sekso() {
      return $this->sekso;
    }

    function set_sekso($sekso) {
      $this->sekso = $sekso;
    }

    function get_familinomo() {
      return $this->familinomo;
    }

    function set_familinomo($familinomo) {
      $this->familinomo = $familinomo;
    }

    function get_personnomo() {
      return $this->personnomo;
    }

    function set_personnomo($personnomo) {
      $this->personnomo = $personnomo;
    }

    function get_enirnomo() {
      return $this->enirnomo;
    }

    function set_enirnomo($enirnomo) {
      $this->enirnomo = $enirnomo;
    }

    function get_etoiles_pasvorto() {
      $longueur = strlen($this->pasvorto);
      for ($i=0;$i<$longueur;$i++) 
      	$etoiles_pasvorto .= "*" ;
      return $etoiles_pasvorto;
    }

    function get_pasvorto() {
      return $this->pasvorto;
    }

    function set_pasvorto($pasvorto) {
      $this->pasvorto = $pasvorto;
    }

    function get_adreso1() {
      return $this->adreso1;
    }

    function set_adreso1($adreso1) {
      $this->adreso1 = $adreso1;
    }

    function get_adreso2() {
      return $this->adreso2;
    }

    function set_adreso2($adreso2) {
      $this->adreso2 = $adreso2;
    }

    function get_posxtkodo() {
      return $this->posxtkodo;
    }

    function set_posxtkodo($posxtkodo) {
      $this->posxtkodo = $posxtkodo;
    }

    function get_urbo() {
      return $this->urbo;
    }

    function set_urbo($urbo) {
      $this->urbo = $urbo;
    }

    function get_lando() {
      return $this->lando;
    }

    function set_lando($lando) {
      $this->lando = $lando;
    }

    function get_retadreso() {
      return $this->retadreso;
    }

    function set_retadreso($retadreso) {
      $this->retadreso = $retadreso;
    }

    function get_naskigxdato() {
      return $this->naskigxdato;
    }

    function set_naskigxdato($naskigxdato) {
      $this->naskigxdato = $naskigxdato;
    }

    function get_lingvo() {
      return $this->lingvo;
    }

    function set_lingvo($lingvo) {
      $this->lingvo = $lingvo;
    }
    
    function get_rajtoj() {
      return $this->rajtoj;
    }

    function set_rajtoj($rajtoj) {
      $this->rajtoj = $rajtoj;
    }

    function get_kialo() {
      return $this->kialo;
    }

    function set_kialo($kialo) {
      $this->kialo = $kialo;
    }

    function get_noto() {
      return $this->noto;
    }

    function set_noto($noto) {
      $this->noto = $noto;
    }

    function get_maksimumo() {
      return $this->maksimumo;
    }

    function set_maksimumo($maksimumo) {
      $this->maksimumo = $maksimumo;
    }

    function get_kurso() {
      return $this->kurso;
    }

    function set_kurso($kurso) {
      $this->kurso = $kurso;
    }

    function get_videbla() {
      return $this->videbla;
    }

    function set_videbla($videbla) {
      $this->videbla = $videbla;
    }
    function get_sistemo() {
      return $this->sistemo;
    }

    function set_sistemo($sistemo) {
      $this->sistemo = $sistemo;
    }
    function get_stopInfo() {
      return $this->stopInfo;
    }
    function set_stopInfo($stopInfo) {
      $this->stopInfo = $stopInfo;
    }

   
    function sort_enirnomo($a,$b) {
    	$al = strtolower($a->enirnomo);
        	$bl = strtolower($b->enirnomo);
        	if ($al == $bl) return 0;
        	return ($al > $bl) ? +1 : -1;
   }

    function store() {
      if($this->get_id() > 0) {
        return $this->update();
      }
      return $this->insert();
    }

    function insert() {
      $sql = sprintf("insert into personoj (ekdato,sekso,familinomo,personnomo,enirnomo,pasvorto,adreso1,adreso2,posxtkodo,urbo,lando,retadreso,naskigxdato,lingvo,rajtoj,kialo,noto,maksimumo,kurso,videbla,sistemo,stop_info) values ('%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s')",addslashes($this->get_ekdato()),addslashes($this->get_sekso()),addslashes($this->get_familinomo()),addslashes($this->get_personnomo()),addslashes($this->get_enirnomo()),addslashes($this->get_pasvorto()),addslashes($this->get_adreso1()),addslashes($this->get_adreso2()),addslashes($this->get_posxtkodo()),addslashes($this->get_urbo()),addslashes($this->lando->get_kodo()),addslashes($this->get_retadreso()),addslashes($this->get_naskigxdato()),addslashes($this->lingvo->get_kodo()),addslashes($this->rajtoj->get_kodo()),addslashes($this->get_kialo()),addslashes($this->get_noto()),addslashes($this->get_maksimumo()),addslashes($this->get_kurso()),addslashes($this->get_videbla()),addslashes($this->get_sistemo()),addslashes($this->get_stopInfo()));
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
      $sql = sprintf("update personoj set ekdato = '%s',sekso = '%s',familinomo = '%s',personnomo = '%s',enirnomo = '%s',pasvorto = '%s',adreso1 = '%s',adreso2 = '%s',posxtkodo = '%s',urbo = '%s',lando = '%s',retadreso = '%s',naskigxdato = '%s',lingvo = '%s',rajtoj = '%s',kialo = '%s',noto = '%s',maksimumo = '%s',kurso = '%s',videbla = '%s', sistemo = '%s', stop_info = '%s' where id = '%s'",addslashes($this->get_ekdato()),addslashes($this->get_sekso()),addslashes($this->get_familinomo()),addslashes($this->get_personnomo()),addslashes($this->get_enirnomo()),addslashes($this->get_pasvorto()),addslashes($this->get_adreso1()),addslashes($this->get_adreso2()),addslashes($this->get_posxtkodo()),addslashes($this->get_urbo()),addslashes($this->lando->get_kodo()),addslashes($this->get_retadreso()),addslashes($this->get_naskigxdato()),addslashes($this->lingvo->get_kodo()),addslashes($this->rajtoj->get_kodo()),addslashes($this->get_kialo()),addslashes($this->get_noto()),addslashes($this->get_maksimumo()),addslashes($this->get_kurso()),addslashes($this->get_videbla()),addslashes($this->get_sistemo()),addslashes($this->get_stopInfo()),$this->get_id());
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
      $sql = sprintf("delete from personoj where id = '%s'",
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
      $sql = sprintf("select id,ekdato,sekso,familinomo,personnomo,enirnomo,pasvorto,adreso1,adreso2,posxtkodo,urbo,lando,retadreso,naskigxdato,lingvo,rajtoj,kialo,noto,maksimumo,kurso,videbla,sistemo,stop_info from personoj where id = '%s'",$id);
      $qid = mysql_query($sql,$this->get_dbh());
      if(0==$qid) {
        $this->set_errno(mysql_errno());
        $this->set_errstr(mysql_error());
        return 0;
      }
      $row = mysql_fetch_array($qid);
      $this->set_id($row[0]);
      $this->set_ekdato(stripslashes($row[1]));
      $this->set_sekso(stripslashes($row[2]));
      $this->set_familinomo(stripslashes($row[3]));
      $this->set_personnomo(stripslashes($row[4]));
      $this->set_enirnomo(stripslashes($row[5]));
      $this->set_pasvorto(stripslashes($row[6]));
      $this->set_adreso1(stripslashes($row[7]));
      $this->set_adreso2(stripslashes($row[8]));
      $this->set_posxtkodo(stripslashes($row[9]));
      $this->set_urbo(stripslashes($row[10]));
      $this->set_retadreso(stripslashes($row[12]));
      $this->set_naskigxdato(stripslashes($row[13]));
      $this->set_kialo(stripslashes($row[16]));
      $this->set_noto(stripslashes($row[17]));
      $this->set_maksimumo(stripslashes($row[18]));
      $this->set_kurso(stripslashes($row[19]));
      $this->set_videbla(stripslashes($row[20]));
      $this->set_sistemo(stripslashes($row[21]));
      $this->set_stopInfo(stripslashes($row[22]));

	  	$this->lingvo->load_by_kodo($row[14]);
		$this->lando->load_by_kodo($row[11],$this->lingvo->get_kodo());
		$this->rajtoj->load_by_kodo($row[15],$this->lingvo->get_kodo());

      mysql_free_result($qid);
      return 1;
    }

    function load_by_rajto($rajto,$lingvo) {
      $recs;
      $sql = sprintf("select id,ekdato,sekso,familinomo,personnomo,enirnomo,pasvorto,adreso1,adreso2,posxtkodo,urbo,lando,retadreso,naskigxdato,lingvo,rajtoj,kialo,noto,maksimumo,kurso,videbla,sistemo,stop_info from personoj where rajtoj='%s' and lingvo='%s'",$rajto,$lingvo);
      $qid = mysql_query($sql,$this->get_dbh());
      if(0==$qid) {
        $this->set_errno(mysql_errno());
        $this->set_errstr(mysql_error());
        return $recs;
      }
      while($row = mysql_fetch_array($qid)) {
        $obj = new personoj;
        $obj->set_id($row[0]);
        $obj->set_ekdato($row[1]);
        $obj->set_sekso($row[2]);
        $obj->set_familinomo($row[3]);
        $obj->set_personnomo($row[4]);
        $obj->set_enirnomo($row[5]);
        $obj->set_pasvorto($row[6]);
        $obj->set_adreso1($row[7]);
        $obj->set_adreso2($row[8]);
        $obj->set_posxtkodo($row[9]);
        $obj->set_urbo($row[10]);
        $obj->set_retadreso($row[12]);
        $obj->set_naskigxdato($row[13]);
        $obj->set_kialo($row[16]);
        $obj->set_noto($row[17]);
        $obj->set_maksimumo($row[18]);
        $obj->set_kurso($row[19]);
        $obj->set_videbla($row[20]);
        $obj->set_sistemo($row[21]);
        $obj->set_stopInfo($row[22]);
        
        $obj->lingvo->load_by_kodo($row[14]);
        //charge le pays en fonction de la langue
        $obj->lando->load_by_kodo($row[11],$obj->lingvo->get_kodo());
        //charge les droits en fonction de la langue
        $obj->rajtoj->load_by_kodo($row[15],$obj->lingvo->get_kodo());
        $recs[] = $obj;
      }
      mysql_free_result($qid);
      return $recs;
    }

function find($parametre) {
        $sql = "select id,ekdato,sekso,familinomo,personnomo,enirnomo,pasvorto,adreso1,adreso2,posxtkodo,urbo,lando,retadreso,naskigxdato,lingvo,rajtoj,kialo,noto,maksimumo,kurso,videbla,sistemo,stop_info from personoj";
        if ($parametre !="") {
		    	$sql = $sql . " where " . $parametre;
        }
        $qid = mysql_query($sql,$this->get_dbh());
        if(0==$qid) {
        $this->set_errno(mysql_errno());
        $this->set_errstr(mysql_error());
        return $recs;
      }
 	while($row = mysql_fetch_array($qid)) {

	   $obj = new personoj;
        $obj->set_id($row[0]);
        $obj->set_ekdato($row[1]);
        $obj->set_sekso($row[2]);
        $obj->set_familinomo($row[3]);
        $obj->set_personnomo($row[4]);
        $obj->set_enirnomo($row[5]);
        $obj->set_pasvorto($row[6]);
        $obj->set_adreso1($row[7]);
        $obj->set_adreso2($row[8]);
        $obj->set_posxtkodo($row[9]);
        $obj->set_urbo($row[10]);
        $obj->set_retadreso($row[12]);
        $obj->set_naskigxdato($row[13]);
        $obj->set_kialo($row[16]);
        $obj->set_noto($row[17]);
        $obj->set_maksimumo($row[18]);
        $obj->set_kurso($row[19]);
        $obj->set_videbla($row[20]);
        $obj->set_sistemo($row[21]);
        $obj->set_stopInfo($row[22]);

        $obj->lingvo->load_by_kodo($row[14]);
        //charge le pays en fonction de la langue
        $obj->lando->load_by_kodo($row[11],$obj->lingvo->get_kodo());
        //charge les droits en fonction de la langue
        $obj->rajtoj->load_by_kodo($row[15],$obj->lingvo->get_kodo());
       $recs[] = $obj;
      }
      mysql_free_result($qid);
      return $recs;
    }

    function get_all_objects() {
      $recs;
      $qid = mysql_query('select id,ekdato,sekso,familinomo,personnomo,enirnomo,pasvorto,adreso1,adreso2,posxtkodo,urbo,lando,retadreso,naskigxdato,lingvo,rajtoj,kialo,noto,maksimumo,kurso,videbla,sistemo,stop_info from personoj',$this->get_dbh());
      if(0==$qid) {
        $this->set_errno(mysql_errno());
        $this->set_errstr(mysql_error());
        return $recs;
      }
      while($row = mysql_fetch_array($qid)) {
        $obj = new personoj;
        $obj->set_id($row[0]);
        $obj->set_ekdato($row[1]);
        $obj->set_sekso($row[2]);
        $obj->set_familinomo($row[3]);
        $obj->set_personnomo($row[4]);
        $obj->set_enirnomo($row[5]);
        $obj->set_pasvorto($row[6]);
        $obj->set_adreso1($row[7]);
        $obj->set_adreso2($row[8]);
        $obj->set_posxtkodo($row[9]);
        $obj->set_urbo($row[10]);
        $obj->set_retadreso($row[12]);
        $obj->set_naskigxdato($row[13]);
        $obj->set_kialo($row[16]);
        $obj->set_noto($row[17]);
        $obj->set_maksimumo($row[18]);
        $obj->set_kurso($row[19]);
        $obj->set_videbla($row[20]);
        $obj->set_sistemo($row[21]);
        $obj->set_stopInfo($row[22]);

        $obj->lingvo->load_by_kodo($row[14]);
        //charge le pays en fonction de la langue
        $obj->lando->load_by_kodo($row[11],$obj->lingvo->get_kodo());
        //charge les droits en fonction de la langue
        $obj->rajtoj->load_by_kodo($row[15],$obj->lingvo->get_kodo());
        $recs[] = $obj;
      }
      mysql_free_result($qid);
      return $recs;
    }

  }

?>
