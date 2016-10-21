<?php
include "../util.php";
$retadreso=isset($_GET['retadreso'])?$_GET['retadreso']:"";
$identigilo=isset($_GET['identigilo'])?$_GET['identigilo']:"";
$pasvorto=isset($_GET['pasvorto'])?$_GET['pasvorto']:"";

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
$query = "select count(*) as combien from personoj where retadreso='".$retadreso."'";
$result = $bdd->query($query);
$retadreso_en_base = $result->fetch()["combien"];
if ($retadreso_en_base>0) {
	$respondo["type"]="retadreso_jam_ekzistas";
	$respondo["mesagxo"]="Un compte existe déjà avec cette adresse e-mail";
	echo json_encode($respondo);
	exit();
}

// on vérifie si l'identifiant est déjà utilisé 
$query = "select count(*) as combien from personoj where enirnomo='".$identigilo."'";
$result = $bdd->query($query);
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
$persono_id = kreiPersonon($identigilo,$pasvorto,$retadreso,$aktivigo);


// on envoit le lien
$lien = $urlracine."aktivigi.php?retadreso=".$retadreso."&aktivigo=".$aktivigo;
$filename = "../mails/aktivigi.html";
$fd = fopen($filename, "r");
$contents = fread($fd, filesize ($filename));
fclose($fd);
$contents=str_replace("##LIEN_ACTIVATION##",$lien,$contents);
$mesagxkapo="MIME-Version: 1.0\n";
$mesagxkapo.="Content-type:text/html;charset=utf-8\n";			
$mesagxkapo.="From: ikurso <ikurso@esperanto-france.org>\n";
$mesagxkapo.="Return-Path: <ikurso@esperanto-france.org>\n";
$mesagxkapo.="Date: ".date("D, j M Y H:i:s").chr(13);
// envoyer le mail eleve pour l'inviter a attendre un correcteur.
$objekto="Activation de votre compte pour apprendre gratuitement l'espéranto";
mail($retadreso,$objekto,$contents,$mesagxkapo);
protokolo($persono_id,"ACTIVATION COMPTE",$retadreso." a reçu une clef d'activation");

$respondo["mesagxo"] = "ok";
echo json_encode($respondo);
?>