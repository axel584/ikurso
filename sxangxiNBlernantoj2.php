<?php
include "util.php";
$persono_id=isset($_SESSION["persono_id"])?(int)$_SESSION["persono_id"]:0;
if ($persono_id==0) {header("Location:index.php?erarkodo=8"); exit;}
$persono = apartigiPersonon($persono_id);
if (!$persono || ($persono["rajtoj"]!='A' && $persono["rajtoj"]!='K')) {header("Location:index.php?erarkodo=4"); exit;}
if ($_SERVER["REQUEST_METHOD"]!="POST") {header("Location:sxangxiNBlernantoj.php"); exit;}

// le formulaire envoie un champ par cours : nom = code du cours, valeur = nombre d'élèves souhaité
$kursoj = $bdd->query("select kodo from kursoj")->fetchAll(PDO::FETCH_COLUMN);
$stmt = $bdd->prepare("update korektebla_kurso set kiom_lernantoj=? where korektanto=? and kurso=?");
$teksto="kiom_lernantoj:";
foreach ($_POST as $kurso => $kiom){
	if (!in_array($kurso, $kursoj, true) || !ctype_digit((string)$kiom)) {
		continue;
	}
	$stmt->execute(array((int)$kiom, $persono_id, $kurso));
	$teksto.=$kurso."=".(int)$kiom." ";
}
protokolo($persono_id,"UPDATE PERSO",$teksto);
header("Location:sxangxiNBlernantoj.php?farite=jes"); exit;
?>
