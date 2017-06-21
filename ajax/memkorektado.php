<?php
include "../util.php";
$ekzercero=isset($_GET["ekzercero"])?$_GET["ekzercero"]:"";
$studanto=isset($_GET["studanto"])?$_GET["studanto"]:"";
$lernantaRespondo=isset($_GET["respondo"])?$_GET["respondo"]:"";

$query="SELECT respondo,normaligita FROM ekzerceroj where id='".$ekzercero."'";
$result = $bdd->query($query);
$row = $result->fetch();
$bonaRespondo = $row["normaligita"];

if (kontroliRespondon($lernantaRespondo,$bonaRespondo)) {
	$respondo["mesagxo"] = "ok";
	echo json_encode($respondo);
	exit(); 
} else {
	$respondo["mesagxo"] = "ko";
	echo json_encode($respondo);
	exit();
}

// TODO il faudrait enregistrer la réponse de l'élève dès qu'on sort du champ, mais on ne pourra faire ça que quand on sera passé définitivement aux "id" pour les questions, plutôt qu'aux kodo

?>

