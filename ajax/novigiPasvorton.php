<?php
include "../util.php";
$retadreso=isset($_GET["retadreso"])?$_GET["retadreso"]:"";
$aktivigo=isset($_GET["aktivigo"])?$_GET["aktivigo"]:"";
$pasvorto=isset($_GET["pasvorto"])?$_GET["pasvorto"]:"";

// on verifie si on a bien un et un seul compte avec cet adresse et cette clef d'activation
$query = "select count(*) as combien from personoj where retadreso=? and aktivigo=?";
$stmt = $bdd->prepare($query);
$stmt->execute([$retadreso, $aktivigo]);
$result = $stmt;
$retadreso_en_base = $result->fetch()["combien"];
if ($retadreso_en_base!=1) {
	$respondo["type"]="netrovebla_konto";
	$respondo["mesagxo"]="Impossible de trouver votre compte, l'adresse utilisée pour accéder à cette page semble erronée, contactez les administrateurs.";
	echo json_encode($respondo);
	exit();
}

// on fait une mise à jour du mot de passe
updatePasvorton($retadreso,$pasvorto);

$respondo["mesagxo"] = "ok";
echo json_encode($respondo);
?>