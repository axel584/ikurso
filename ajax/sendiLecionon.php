<?php
include "../util.php";
require_once __DIR__ . "/../api/SendadoAPI.php";
$persono_id=isset($_SESSION["persono_id"])?$_SESSION["persono_id"]:"";
$lecionero_id=isset($_GET["lecionero_id"])?(int)$_GET["lecionero_id"]:0;
$kurso=isset($_GET["kurso"])?$_GET["kurso"]:"";
$leciono=isset($_GET["leciono"])?(int)$_GET["leciono"]:0;
$commentaire_pour_correcteur=isset($_GET["commentaire_pour_correcteur"])?(string)$_GET["commentaire_pour_correcteur"]:"";
$ekdato=isset($_GET['ekdato'])&&is_numeric($_GET['ekdato'])?(int)$_GET['ekdato']:null;

if ($persono_id=="") { // personne non connecté, on ressort
	$respondo["type"]="session";
	$respondo["mesagxo"]="Session expirée";
	echo json_encode($respondo);
	exit();
}
if (!isset(SendadoAPI::KURSOJ[$kurso])) {
	$respondo["type"]="kurso";
	$respondo["mesagxo"]="Cours inconnu";
	echo json_encode($respondo);
	exit();
}

// envoi commun avec l'API de l'application (#1088)
$rezulto=(new SendadoAPI($bdd, $urlracine))->sendiAlKorektanto((int)$persono_id, $kurso, $leciono, $lecionero_id, $commentaire_pour_correcteur, $ekdato);
if ($rezulto=="neniu_korektanto") {
	$respondo["type"]="korektanto";
	$respondo["mesagxo"]="Pas de correcteur";
	echo json_encode($respondo);
	exit();
}
if ($rezulto=="neniu_respondo") {
	$respondo["type"]="NeniuRespondo";
	$respondo["mesagxo"]="Aucune réponse";
	echo json_encode($respondo);
	exit();
}
// passer à la page d'évaluation de la leçon ; le kazo 1 correspond au cas où on a déjà un correcteur
$respondo["url"] = SendadoAPI::KURSOJ[$kurso]."konfirmo.php?kazo=1&lec=".$leciono;
$respondo["mesagxo"] = "ok";
echo json_encode($respondo);
