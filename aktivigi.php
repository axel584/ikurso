<?php
include "util.php";
$retadreso=isset($_GET['retadreso'])?$_GET['retadreso']:"";
$aktivigo=isset($_GET['aktivigo'])?$_GET['aktivigo']:"";

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
		protokolo($row["id"],"COMPTE ACTIF",$row["enirnomo"]." a correctement activé son compte");
		// on met l'identifiant en session :
		$_SESSION["persono_id"]=$row["id"];
		header( "Location:personinformoj.php?aktivigo=ok");
	}
}
exit;
?>
