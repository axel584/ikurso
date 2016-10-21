<?php
include "../util.php";
$retadreso=isset($_GET["retadreso"])?$_GET["retadreso"]:"";

// interdire le cas où il y a plusieurs adresses emails
$query = "select count(*) as combien from personoj where retadreso='".$retadreso."'";
$result = $bdd->query($query);
$retadreso_en_base = $result->fetch()["combien"];
if ($retadreso_en_base>1) {
	$respondo["type"]="pluraj_retadresoj";
	$respondo["mesagxo"]="Vous avez plusieurs comptes avec cette adresse e-mail, contactez les administrateurs pour supprimer les comptes inutiles.";
	echo json_encode($respondo);
	exit();
} elseif ($retadreso_en_base==0) {
	$respondo["type"]="neniu_retadreso";
	$respondo["mesagxo"]="Aucun compte n'a été trouvé avec cette adresse e-mail, essayez une autre adresse ou contactez les administrateurs pour retrouver votre compte à partir d'autres informations que vous nous avez fourni.";
	echo json_encode($respondo);
	exit();
}

// on récupère la valeur de "aktivigo" qui avait été envoyé pour l'activation de l'adresse email
$query = "select aktivigo,enirnomo from personoj where retadreso='".$retadreso."'";
$result = $bdd->query($query);
$row = $result->fetch();
$aktivigo = $row["aktivigo"];
$enirnomo = $row["enirnomo"];
// si aktivigo est null, on en créer un et on le met dans la base
if ($aktivigo==null) {
	$aktivigo = md5(uniqid(rand(), true));
	updateAktivigo($retadreso,$aktivigo);
}
// on envoit un email avec le lien contenant l'adresse email et le lien d'activation
$lien = $urlracine."index.php?novigiPasvorton=ok&retadreso=".$retadreso."&aktivigo=".$aktivigo;
$filename = "../mails/novigiPasvorton.html";
$fd = fopen($filename, "r");
$contents = fread($fd, filesize ($filename));
fclose($fd);
$contents=str_replace("##LIEN##",$lien,$contents);
$contents=str_replace("##ENIRNOMO##",$enirnomo,$contents);
$mesagxkapo="MIME-Version: 1.0\n";
$mesagxkapo.="Content-type:text/html;charset=utf-8\n";			
$mesagxkapo.="From: ikurso <ikurso@esperanto-france.org>\n";
$mesagxkapo.="Return-Path: <ikurso@esperanto-france.org>\n";
$mesagxkapo.="Date: ".date("D, j M Y H:i:s").chr(13);
// envoyer le mail eleve pour l'inviter a attendre un correcteur.
$objekto="Votre mot de passe sur les cours d'espéranto Ikurso";
mail($retadreso,$objekto,$contents,$mesagxkapo);
protokolo(0,"réinitialisation du mot de passe",$retadreso." a reçu une mail pour changer son mot de passe");

$respondo["mesagxo"] = "ok";
echo json_encode($respondo);
?>