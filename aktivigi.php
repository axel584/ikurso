<?php
include "util.php";
$retadreso=isset($_GET['retadreso'])?$_GET['retadreso']:"";
$aktivigo=isset($_GET['aktivigo'])?$_GET['aktivigo']:"";
// d'où vient le lien : relance automatique (#639) ou fiche d'administration (#878)
$fontoj = array("rememorigo" => " (lien du rappel)", "administranto" => " (lien renvoyé par un administrateur)");
$fonto = isset($_GET['fonto']) && isset($fontoj[$_GET['fonto']]) ? $fontoj[$_GET['fonto']] : "";

// on vérifie si l'adresse est déjà utilisée
$stmt = $bdd->prepare("select * from personoj where retadreso=?");
$stmt->execute(array($retadreso));
$row = $stmt->fetch();
if (!$row) {
	header( "Location:index.php?erarkodo=19"); // aucun compte avec cette adresse email
} else {
	if ($aktivigo==="" || !hash_equals((string)$row["aktivigo"], (string)$aktivigo)) {
		header( "Location:index.php?erarkodo=18"); // mauvaise clef d'activation
	} else {
		// on active le compte
		$stmt = $bdd->prepare("update personoj set aktivigita=1 where id=?");
		$stmt->execute(array($row["id"]));
		// on enregistre dans le compte rendu
		protokolo($row["id"],"COMPTE ACTIF",$row["enirnomo"]." a correctement activé son compte".$fonto);
		// on met l'identifiant en session :
		$_SESSION["persono_id"]=$row["id"];
		// ce qui a été fait sans compte entre l'inscription et l'activation (#1092)
		require_once __DIR__."/api/GastoAPI.php";
		(new GastoAPI($bdd))->transdoniAlKonto((int)$row["id"]);
		header( "Location:personinformoj.php?aktivigo=ok");
	}
}
exit;
?>
