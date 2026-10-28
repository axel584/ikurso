<?php
// Un correcteur arrête ou remet les rappels automatiques d'un de ses élèves (#641).
include "util.php";
require_once "api/LernantojAPI.php";
require_once "api/AgordojAPI.php";
$persono_id=isset($_SESSION["persono_id"])?(int)$_SESSION["persono_id"]:0;
if ($persono_id==0) {header("Location:index.php?erarkodo=8"); exit;}
$persono = apartigiPersonon($persono_id);
if (!$persono || ($persono["rajtoj"]!='A' && $persono["rajtoj"]!='K')) {header("Location:index.php?erarkodo=4"); exit;}
if ($_SERVER["REQUEST_METHOD"]!="POST") {header("Location:miajlernantoj.php"); exit;}

$studanto=isset($_POST["studanto"])?(int)$_POST["studanto"]:0;
// un correcteur ne modifie que ses propres élèves
$lernantojAPI = new LernantojAPI($bdd);
if ($studanto==0 || ($persono["rajtoj"]!='A' && !$lernantojAPI->cxuSekvas($persono_id, $studanto))) {header("Location:index.php?erarkodo=4"); exit;}

$rajto=isset($_POST["rajto"]) && $_POST["rajto"]=="1";
$agordojAPI = new AgordojAPI($bdd);
if ($agordojAPI->sxangxi($studanto, "RAPPEL", $rajto)) {
	$lernanto = apartigiPersonon($studanto);
	protokolo($studanto, "MALABONO", $lernanto["enirnomo"].($rajto ? " reçoit de nouveau " : " ne reçoit plus ")."RAPPEL (correcteur ".$persono["enirnomo"].")");
}
header("Location:miajlernantoj.php?farite=jes");
exit;
