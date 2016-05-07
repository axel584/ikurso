<?
include "lingvo.inc.php";
include "db.inc.php";
include "webui.inc.php";
include_once("db/personoj.inc.php");
include_once("db/korektebla_kurso.inc.php");
include_once("db/nuna_kurso.inc.php");
include_once("db/kursoj.inc.php");

$obj_personoj = new personoj;
$personoj = $obj_personoj->get_all_objects();

$list_korekteur = array();
$list_deja_faite = array();

for ($i=0;$i<count($personoj);$i++) {
	if (($personoj[$i]->rajtoj->get_kodo()=="K") && ($personoj[$i]->lingvo->get_kodo()=="FR")) {
		array_push($list_korekteur,$personoj[$i]->get_id());
	}
}

$obj_korektebla_kurso = new korektebla_kurso;
$korekteblaj_kursoj = $obj_korektebla_kurso->get_all_objects();
for ($i=0;$i<count($korekteblaj_kursoj);$i++) {
//	echo "korekteur : ".$korekteblaj_kursoj[$i]->get_korektanto()."<br>";
	array_push($list_deja_faite,$korekteblaj_kursoj[$i]->get_korektanto());
}
//echo "<br>liste de correcteur";
//print_r($list_korekteur);

//echo "<br>liste de ceux qui l'ont déjà fait";
//print_r($list_deja_faite);
$resultat = array_unique($list_deja_faite);
//echo "<br>liste unique";
//print_r($resultat);
$resultat2=array_diff($list_korekteur,$resultat);
//echo "<br>différence";
//print_r($resultat2);

foreach($resultat2 as $k) {
//	echo "id : ".$k."<br>";
	$obj_personoj->load_by_id($k);
	echo "N'a pas mis à jour ses élèves : ".$obj_personoj->get_enirnomo().":".$obj_personoj->get_retadreso()."<br>";
//	echo $k."n'a pas mis à jour ses élèves : ".$obj_personoj->rajtoj->get_nomo()."<br>";
}


?>