<?php
include "../util.php";
require_once __DIR__."/../api/GastoAPI.php";
require_once __DIR__."/../api/VortojAPI.php";
$vorto_id=isset($_GET["vorto_id"])?(int)$_GET["vorto_id"]:0;
// élève connecté ou invité (#1092)
$persono_id=GastoAPI::lernantoId();
if ($persono_id=="") {
	$respondo["mesagxo"] = "ko";
	$respondo["eraroj"]="Identifiant de l'élève absent.";
	echo json_encode($respondo);
	exit();
}

// correction et mise à jour de la révision, communes avec l'API de l'application (#1088)
$rezulto=(new VortojAPI($bdd))->kontroli((int)$persono_id, $vorto_id, isset($_GET["respondo"])?(string)$_GET["respondo"]:"");
if ($rezulto===null) {
	$respondo["mesagxo"] = "ko";
	$respondo["eraroj"]="Ce mot n'est pas dans votre liste des mots à réviser. Si vous voyez ce message d'erreur, contactez les administrateurs.";
	echo json_encode($respondo);
	exit();
}
// prononciation du mot, jouée après la réponse (#712)
$sono = $rezulto["sono"];
$respondo["sono"] = $sono ? rtrim($urlracine, "/")."/".$sono : null;
if ($rezulto["gxusta"]) {
	$respondo["mesagxo"] = "ok";
	echo json_encode($respondo);
	exit();
}
$respondo["mesagxo"] = "ko";
// si on a plusieurs possibilités, on n'explique que la première à l'élève
$bonaRespondo = $rezulto["bona_respondo"];
$respondo["eraroj"]="La bonne réponse était&nbsp;<b>".$bonaRespondo."</b>";
// bonne réponse en vert, réponse de l'élève en rouge (#682)
$respondo["recapitulatif"]="<b>".$rezulto["fr"]."</b>&nbsp;se dit&nbsp;<b class='bona'>".$bonaRespondo."</b>".($sono ? sonoLigilo($sono) : "");
if ($rezulto["respondo"]!=="") {
	$respondo["recapitulatif"].=" (et pas&nbsp;<strike class='malbona'>".$rezulto["respondo"]."</strike>)";
}
echo json_encode($respondo);
