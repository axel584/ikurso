<?php
include "../util.php";
require_once __DIR__ . "/../api/SendadoAPI.php";
$persono_id=isset($_SESSION["persono_id"])?$_SESSION["persono_id"]:"";
$lecionero_id=isset($_GET["lecionero_id"])?(int)$_GET["lecionero_id"]:0;
$ekdato=isset($_GET['ekdato'])&&is_numeric($_GET['ekdato'])?(int)$_GET['ekdato']:null;
$kurso=isset($_GET["kurso"])?$_GET["kurso"]:"";
$leciono=isset($_GET["leciono"])?(int)$_GET["leciono"]:0;
$commentaire_pour_correcteur=isset($_GET["commentaire_pour_correcteur"])?(string)$_GET["commentaire_pour_correcteur"]:"";
// mode de correction choisi à la fin de la première leçon (#627) ; absent : le choix déjà fait pour ce cours
$elekto=isset($_GET["korektada_elekto"])&&$_GET["korektada_elekto"]!==""?(string)$_GET["korektada_elekto"]:null;
$teksto=isset($_GET["konata_korektanto"])?(string)$_GET["konata_korektanto"]:"";

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
$rezulto=(new SendadoAPI($bdd, $urlracine))->sendi((int)$persono_id, $kurso, $leciono, $lecionero_id, $commentaire_pour_correcteur, $ekdato, $elekto, $teksto);
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
if ($rezulto=="konato_malplena" || $rezulto=="nevalida_elekto") {
	$respondo["mesagxo"] = $rezulto=="konato_malplena"
		? "Indiquez le prénom, l'identifiant ou l'adresse e-mail du correcteur que vous connaissez."
		: "Choisissez un mode de correction.";
	$respondo["type"] = "elekto";
	echo json_encode($respondo);
	exit();
}
// Renvoyer la page qui permet d'évaluer la leçon ; kazo : 1 envoyée au correcteur, 2 correcteur attribué,
// 4 correction automatique, 5 sans correcteur, 6 correcteur connu à retrouver (#627)
$kazoj = array("sendita" => 1, "korektanto_atribuita" => 2, "sendita_ia" => 4, "sen_korektanto" => 5, "atendas_korektanton" => 6);
$respondo["url"] = SendadoAPI::KURSOJ[$kurso]."konfirmo.php?kazo=".(isset($kazoj[$rezulto]) ? $kazoj[$rezulto] : 2)."&lec=".$leciono;
$respondo["mesagxo"] = "ok";
echo json_encode($respondo);
