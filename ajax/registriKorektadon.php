<?php
include "../util.php";
require_once __DIR__ . "/../api/KorektadoAPI.php";
$persono_id=isset($_SESSION["persono_id"])?$_SESSION["persono_id"]:"";
$kurso=isset($_POST["kurso"])?$_POST["kurso"]:"";
$leciono=isset($_POST["leciono"])?(int)$_POST["leciono"]:0;
$studanto_id=isset($_POST["studanto_id"])?(int)$_POST["studanto_id"]:0;
$leciono_id=isset($_POST["leciono_id"])?(int)$_POST["leciono_id"]:0;
$neSendiRetmesagxon=isset($_POST["pas_envoi_email"])?True:False;
if ($persono_id=="") { // personne non connecté, on ressort
	$respondo["type"]="session";
	$respondo["mesagxo"]="Session expirée";
	echo json_encode($respondo);
	exit();
}
$korektanto = apartigiPersonon($persono_id);
if (!$korektanto || ($korektanto["rajtoj"]!='A' && $korektanto["rajtoj"]!='K')) { // seuls les correcteurs et admins peuvent corriger
	$respondo["type"]="droits";
	$respondo["mesagxo"]="Droits insuffisants";
	$respondo["url"]="index.php?erarkodo=4";
	echo json_encode($respondo);
	exit();
}

// champs du formulaire : bonaRespondoN (case cochée), korektoN (commentaire), notoN (points), N = respondoj.id ;
// un champ absent (question sans note ou sans commentaire) donne NULL en base
$korektado = array();
foreach(array_keys($_POST) as $key) {
	if (startsWith($key,"bonaRespondo")) {
		$korektado[substr($key, 12)]['gxusta']=$_POST[$key]=="on";
	} else if (startsWith($key,"korekto")) {
		$korektado[substr($key, 7)]['korekto']=$_POST[$key];
	} else if (startsWith($key,"noto")) {
		$korektado[substr($key, 4)]['noto']=$_POST[$key];
	}
}
foreach ($korektado as $respondo_id => $k) {
	$korektado[$respondo_id]['poentoj'] = isset($k['noto']) ? $k['noto'] : null;
}

(new KorektadoAPI($bdd, $urlracine))->registri($korektanto, $studanto_id, $kurso, $leciono, $leciono_id, $korektado,
	isset($_POST['enkonduko'])?$_POST['enkonduko']:null, isset($_POST['konkludo'])?$_POST['konkludo']:null, !$neSendiRetmesagxon);

$respondo["mesagxo"] = "ok";
$respondo["url"] = "vidiLecionon.php?kurso=".$kurso."&numleciono=".$leciono."&studanto=".$studanto_id;
echo json_encode($respondo);

?>
