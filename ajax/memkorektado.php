<?php
include "../util.php";
$ekzercero=isset($_GET["ekzercero"])?$_GET["ekzercero"]:"";
$studanto=isset($_GET["studanto"])?$_GET["studanto"]:"";
$lernantaRespondo=isset($_GET["respondo"])?$_GET["respondo"]:"";

$query="SELECT respondo,normaligita FROM ekzerceroj where id='".$ekzercero."'";
$result = $bdd->query($query);
$row = $result->fetch();
$bonaRespondo = $row["normaligita"];



function kontroliRespondon($lernantaRespondo,$bonaRespondo) {
	// attention, il ne faut pas utiliser != mais !==
	if (strpos($bonaRespondo,"|")!==false) {
		return kontroliVorton($lernantaRespondo,substr($bonaRespondo, 0,strpos($bonaRespondo, "|"))) || kontroliVorton($lernantaRespondo,substr($bonaRespondo, strpos($bonaRespondo, "|")+1));
	} else {
		$trans = array("." => "", "," => "", "'" => "","!" => "","?" => ""); // liste des caractères à supprimer pour la comparaison
		$bonaRespondo = trim(strtr($bonaRespondo, $trans));
		$lernantaRespondo = trim(strtr($lernantaRespondo,$trans));
		return strtolower(konvX($lernantaRespondo))==strtolower(konvX($bonaRespondo));	
	}
}

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

