<?php
// version du script d'inscription spécifique au cours "Kurso de Esperanto"
// la différence avec le script normal, c'est qu'il indique en base dans la table personoj.kurso la valeur "KE"
include "../util.php";
$retadreso=isset($_GET['retadreso'])?$_GET['retadreso']:"";
$identigilo=isset($_GET['identigilo'])?$_GET['identigilo']:"";
$pasvorto=isset($_GET['pasvorto'])?$_GET['pasvorto']:"";

// on force l'adresse email en minuscule
$retadreso=strtolower($retadreso);

$respondo = array();

if ($identigilo=="") {
	$respondo["type"]="identigilo";
	$respondo["mesagxo"]="Merci de choisir un identifiant";
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
$persono_id = kreiPersononKurso($identigilo,$pasvorto,$retadreso,$aktivigo);


// on envoit le lien
$lien = $urlracine."aktivigi.php?retadreso=".$retadreso."&aktivigo=".$aktivigo;
$filename = "../mails/aktivigi.html";
$fd = fopen($filename, "r");
$contents = fread($fd, filesize ($filename));
fclose($fd);
$contents=str_replace("##LIEN_ACTIVATION##",$lien,$contents);
// envoyer le mail eleve pour l'inviter a attendre un correcteur.
$objekto="Activation de votre compte pour apprendre gratuitement l'espéranto";
mailViaSmtp($retadreso,"ikurso@esperanto-france.org",$objekto,$contents);
protokolo($persono_id,"ACTIVATION COMPTE",$retadreso." a reçu une clef d'activation");

$respondo["mesagxo"] = "ok";
echo json_encode($respondo);
?>