<?
// TODO : fichier a supprimer ?
include "db.inc.php";
include "webui.inc.php";
include "forum/includes/forum.lib.php";
include_once("db/personoj.inc.php");
include_once("db/korektebla_kurso.inc.php");
include_once("db/kursoj.inc.php");
include_once("db/landoj.inc.php");
include_once("db/nuna_kurso.inc.php");
include_once("db/protokolo.inc.php");
$url=$_SERVER['SCRIPT_URI'];

malfermiDatumbazon();
$persono_id=$_SESSION["persono_id"];
if ($persono_id=="") {
	$rajto="V";		// vizitanto
	$enirnomo="";
}
else {
	$persono=new personoj();
	$persono->load_by_id($persono_id);
	$rajto=$persono->rajtoj->get_kodo();
	$enirnomo=$persono->get_enirnomo();
}
include "lingvo.inc.php";

?>