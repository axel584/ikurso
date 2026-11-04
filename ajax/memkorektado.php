<?php
include "../util.php";
require_once __DIR__."/../api/GastoAPI.php";
require_once __DIR__."/../api/EkzercadoAPI.php";
$ekzercero_id=isset($_GET["ekzercero"])?(int)$_GET["ekzercero"]:0;
$lernantaRespondo=isset($_GET["respondo"])?(string)$_GET["respondo"]:"";
$korekteblaEkzerco=isset($_GET["korekteblaEkzerco"])?$_GET["korekteblaEkzerco"]=="true":false;

if ($lernantaRespondo=="") {
	echo json_encode(null);
	exit;
}
// la réponse est enregistrée pour l'élève connecté ou pour l'invité, créé à sa première réponse (#1092),
// jamais pour un identifiant reçu dans l'URL
$studanto=(new GastoAPI($bdd))->akiriLernantoId();

// enregistrement et correction communs avec l'API de l'application (#1088)
$gxusta=(new EkzercadoAPI($bdd))->registri((int)$studanto, $ekzercero_id, $lernantaRespondo, $korekteblaEkzerco);
echo json_encode($gxusta===null ? null : array("mesagxo" => $gxusta ? "ok" : "ko"));
