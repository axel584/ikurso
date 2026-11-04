<?php
include "../util.php";
require_once __DIR__ . "/../api/SendadoAPI.php";
$persono_id=isset($_SESSION["persono_id"])?$_SESSION["persono_id"]:"";
$lecionero_id=isset($_GET["lecionero_id"])?(int)$_GET["lecionero_id"]:0;
$ekdato=isset($_GET['ekdato'])&&is_numeric($_GET['ekdato'])?(int)$_GET['ekdato']:null;
$kurso=isset($_GET["kurso"])?$_GET["kurso"]:"";
$leciono=isset($_GET["leciono"])?(int)$_GET["leciono"]:0;
$commentaire_pour_correcteur=isset($_GET["commentaire_pour_correcteur"])?(string)$_GET["commentaire_pour_correcteur"]:"";

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

// attribution du correcteur et envoi, communs avec l'API de l'application (#1088)
$rezulto=(new SendadoAPI($bdd, $urlracine))->petiKorektanton((int)$persono_id, $kurso, $leciono, $lecionero_id, $commentaire_pour_correcteur, $ekdato);
if ($rezulto=="ne_aktivigita") {
	$respondo["mesagxo"] = "compteNonActif";
	echo json_encode($respondo);
	exit();
}
if ($rezulto=="neniu_respondo") {
	$respondo["mesagxo"] = "aucunExercice";
	echo json_encode($respondo);
	exit();
}
// Renvoyer la page qui permet d'évaluer la leçon
$respondo["url"] = SendadoAPI::KURSOJ[$kurso]."konfirmo.php?kazo=2&lec=".$leciono;
$respondo["mesagxo"] = "ok";
echo json_encode($respondo);
