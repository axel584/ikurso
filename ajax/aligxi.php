<?php

include "../util.php";
$retadreso=isset($_POST['retadreso'])?$_POST['retadreso']:"";
$identigilo=isset($_POST['identigilo'])?$_POST['identigilo']:"";
$pasvorto=isset($_POST['pasvorto'])?stripslashes($_POST['pasvorto']):"";

//echo addslashes($pasvorto);
//echo "::";
//echo md5($pasvorto);

// on force l'adresse email en minuscule
$retadreso=strtolower($retadreso);

$respondo = array();

if ($identigilo=="") {
	$respondo["type"]="identigilo";
	$respondo["mesagxo"]="Merci de choisir un identifiant";
	echo json_encode($respondo);
	exit();
}

if (strpos($identigilo, "@") !== false) {
	$respondo["type"]="identigilo";
	$respondo["mesagxo"]="Merci de choisir un identifiant qui ne soit pas un e-mail car il serait visible par les autres élèves";
	echo json_encode($respondo);
	exit();
}


if ($pasvorto=="") {
	$respondo["type"]="pasvorto";
	$respondo["mesagxo"]="Merci de choisir un mot de passe";
	echo json_encode($respondo);
	exit();
}

// on vérifie si l'adresse email est correcte (regexp)
if (!checkEmail($retadreso)) {
	$respondo["type"]="retadreso";
	$respondo["mesagxo"]="Votre adresse e-mail semble erronée, merci de vérifier";
	echo json_encode($respondo);
	exit();
}

// on vérifie si l'adresse est déjà utilisée
$query = "select count(*) as combien from personoj where retadreso=?";
$stmt = $bdd->prepare($query);
$stmt->execute([$retadreso]);
$result = $stmt;
$retadreso_en_base = $result->fetch()["combien"];
if ($retadreso_en_base>0) {
	$respondo["type"]="retadreso_jam_ekzistas";
	$respondo["mesagxo"]="Un compte existe déjà avec cette adresse e-mail";
	echo json_encode($respondo);
	exit();
}

// on vérifie si l'identifiant est déjà utilisé
$query = "select count(*) as combien from personoj where enirnomo=?";
$stmt = $bdd->prepare($query);
$stmt->execute([$identigilo]);
$result = $stmt;
$enirnomo_en_base = $result->fetch()["combien"];
if ($enirnomo_en_base>0) {
	$respondo["type"]="identigilo";
	$respondo["mesagxo"]="Un compte existe déjà avec cet identifiant";
	echo json_encode($respondo);
	exit();
}

// Ici, tous les paramètres sont bons

// clef de hachage unique à envoyer par mail et mettre en base
$aktivigo = md5(uniqid(rand(), true));
// un invité qui s'inscrit garde ses réponses et sa progression : sa ligne devient le compte (#1092)
require_once __DIR__."/../api/GastoAPI.php";
$gasto_id = isset($_SESSION["gasto_id"]) ? (int)$_SESSION["gasto_id"] : 0;
if ($gasto_id > 0 && (new GastoAPI($bdd))->konverti($gasto_id,$identigilo,$pasvorto,$retadreso,$aktivigo)) {
	$persono_id = $gasto_id;
} else {
	$persono_id = kreiPersonon($identigilo,$pasvorto,$retadreso,$aktivigo);
}
unset($_SESSION["gasto_id"]);


// on envoit le lien
$lien = $urlracine."aktivigi.php?retadreso=".urlencode($retadreso)."&aktivigo=".urlencode($aktivigo);
// charge le fichier html
$filename = "../mails/aktivigi.html";
$fd = fopen($filename, "r");
$contents = fread($fd, filesize ($filename));
fclose($fd);
$contents=str_replace("##LIEN_ACTIVATION##",$lien,$contents);
// envoyer le mail eleve pour l'inviter a attendre un correcteur.
//mailViaSmtp($retadreso,"ikurso@esperanto-france.org","Activation de votre compte pour apprendre gratuitement l'espéranto",$contents);
mailViaSES($retadreso,"Activation de votre compte pour apprendre gratuitement l'espéranto",$contents);
protokolo($persono_id,"ACTIVATION COMPTE",$retadreso." a reçu une clef d'activation");

$respondo["mesagxo"] = "ok";
$respondo["gasto"] = ($persono_id === $gasto_id); // pour la mesure d'audience (#1094)
echo json_encode($respondo);
?>
