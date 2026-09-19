<?php
include "util.php";
$persono_id=isset($_SESSION["persono_id"])?(int)$_SESSION["persono_id"]:0;
if ($persono_id==0) {header("Location:index.php?erarkodo=8"); exit;}
$persono = apartigiPersonon($persono_id);
if (!$persono || ($persono["rajtoj"]!='A' && $persono["rajtoj"]!='K')) {header("Location:index.php?erarkodo=4"); exit;}
$teksto=isset($_POST['teksto'])?$_POST['teksto']:"";
$stud_id=isset($_POST['stud_id'])?(int)$_POST['stud_id']:0;
$pagxo=pagxoLokalaSekura(isset($_POST['pagxo'])?$_POST['pagxo']:"","miajlernantoj.php");

$rajtaAlAldoni = ($persono["rajtoj"]=='A');
if (!$rajtaAlAldoni) {
	// un correcteur ne peut ajouter une note que sur un de ses élèves
	$stmt = $bdd->prepare("select count(*) as combien from nuna_kurso where studanto=? and korektanto=?");
	$stmt->execute(array($stud_id,$persono_id));
	$rajtaAlAldoni = $stmt->fetch()["combien"]>0;
}

if ($teksto!="" && $rajtaAlAldoni){
	$stmt = $bdd->prepare("INSERT INTO komentoj (studanto,korektanto,dato,teksto) VALUES (?,?,CURDATE(),?)");
	$stmt->execute(array($stud_id,$persono_id,$teksto));
}
header("Location:".$pagxo);
exit;
?>
