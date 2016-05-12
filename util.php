<?php
session_start();
$lingvo="FR";
ini_set('session.gc_maxlifetime', 86400);
ini_set('session.cookie_lifetime', 86400);
include_once("db.inc.php");
include_once("webui.inc.php");
include_once("forum/includes/forum.lib.php");
include_once("db/Db.inc.php");
include_once("db/personoj.inc.php");
include_once("db/korektebla_kurso.inc.php");
include_once("db/kursoj.inc.php");
include_once("db/landoj.inc.php");
include_once("db/nuna_kurso.inc.php");
include_once("db/protokolo.inc.php");
$url=$_SERVER['REQUEST_URI'];

// tiu funkcio konvertas la unikodan tekston al teksto en X-sistemo
function konvX($buff) {
	global $metodo;
	if ($metodo=="X") {
		$utf8 = array(
			"&#264;" => "Cx",	"&#284;" => "Gx",	"&#292;" => "Hx",
			"&#308;" => "Jx",	"&#348;" => "Sx",	"&#364;" => "Ux",
			"&#265;" => "cx",	"&#285;" => "gx",	"&#293;" => "hx",
			"&#309;" => "jx",	"&#349;" => "sx",	"&#365;" => "ux",
			"Ĉ" => "Cx",		"Ĝ" => "Gx",		"Ĥ" => "Hx",
			"Ĵ" => "Jx",		"Ŝ" => "Sx",		"Ŭ" => "Ux",
			"ĉ" => "cx",		"ĝ" => "gx",		"ĥ" => "hx",
			"ĵ" => "jx",		"ŝ" => "sx",		"ŭ" => "ux"
			);
		foreach($utf8 as $key => $val) {
		$buff=str_replace($key,$val,$buff);
		}
	}
	return($buff);
}
function konvU($buff) {
	$utf8 = array(
			"&#264;" => "\u0108",	"&#284;" => "\u011c",	"&#292;" => "\u0124",
			"&#308;" => "\u0134",	"&#348;" => "\u015c",	"&#364;" => "\u016c",
			"&#265;" => "\u0109",	"&#285;" => "\u011d",	"&#293;" => "\u0125",
			"&#309;" => "\u0135",	"&#349;" => "\u015d",	"&#365;" => "\u016d"
		);
	foreach($utf8 as $key => $val) {
	$buff=str_replace($key,$val,$buff);
	}
	return($buff);
}

/*
 * conversion en utf8 (si page en utf8)
*/
function al_utf8($var) {
	global $defaultCharset;
	if ($defaultCharset=="utf-8") $var = utf8_encode($var);
	return $var;
}
function el_utf8($var) {
	global $defaultCharset;
	if ($defaultCharset=="utf-8") $var = utf8_decode($var);
	return $var;
}


function kalkuliStudantojn() {
	global $lingvo,$persono_id;
	mysql_select_db("ikurso");
	$demando1="select nomo,kodo from kursoj where kursoj.lingvo='".$lingvo."'";
	$result1 = mysql_query($demando1) or die (  "SELECT : malbona demando :".$demando1);
	while($row1 = mysql_fetch_array($result1)) {
		echo "<tr>\n";
		echo "\t<td class='col1'>".$row1["nomo"]."</td>\n";
		$demando2="select count(*) as kiom from nuna_kurso,personoj where nuna_kurso.korektanto='".$persono_id."' and nuna_kurso.kurso='".$row1["kodo"]."' and personoj.id=nuna_kurso.studanto and (nuna_kurso.stato='K' or nuna_kurso.stato='N')";
		$result2 = mysql_query($demando2) or die (  "SELECT : malbona demando :".$demando2);
		$row2 = mysql_fetch_array($result2);
		echo "\t<td>".$row2['kiom']."</td>\n";
		$demando3="select * from korektebla_kurso where korektanto='".$persono_id."' and kurso='".$row1['kodo']."'";
		$result3 = mysql_query($demando3) or die ("SELECT : malbona demando :".$demando3);
		if (mysql_num_rows($result3)==0){
			$demando3="INSERT INTO korektebla_kurso (korektanto,kurso,kiom_lernantoj) VALUES ('$persono_id','".$row1["kodo"]."',0)";
			$result3 = mysql_query($demando3) or die ("INSERT : Invalid query :".$demando3);
			$demando3="select * from korektebla_kurso where korektanto='".$persono_id."' and kurso='".$row1['kodo']."'";
			$result3 = mysql_query($demando3) or die (  "SELECT : malbona demando :".$demando3);
		}
		$row3 = mysql_fetch_array($result3);
		echo "\t<td>";
		if ($row2['kiom'] > $row3["kiom_lernantoj"]) {
			echo "<span style=\"color:red\">".$row3["kiom_lernantoj"]."</span>";
		}else {echo $row3["kiom_lernantoj"];}
		echo "</td>\n";
		echo "\t</tr>\n";
	}
}
malfermiDatumbazon();
$persono_id = isset($_SESSION["persono_id"]) ? $_SESSION["persono_id"] : "";
if ($persono_id=="") {
	$rajto="V";		// vizitanto
	$enirnomo="";
	$lingvo="FR";
	$lgv="FR";
}
else {
	$persono=new personoj();
	$persono->load_by_id($persono_id);
	$rajto=$persono->rajtoj->get_kodo();
	$enirnomo=$persono->get_enirnomo();
	$lingvo=$persono->lingvo->get_kodo();
	$lgv=$lingvo;	// langue de l'interface = par defaut la langue des donnees
}
include "lingvo.inc.php";

?>
