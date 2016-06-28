<?php
include "../util.php";
$identigilo=isset($_GET['identigilo'])?$_GET['identigilo']:"";
$pasvorto=isset($_GET['pasvorto'])?$_GET['pasvorto']:"";

$respondo = array();

$query = "select aktivigita,pasvorto_md5 from personoj where enirnomo='".$identigilo."'";
$result = $bdd->query($query);
if (!$row = $result->fetch()) { // aucune ligne retournée
	$respondo["mesagxo"]="Identifiant introuvable, cliquez sur le bouton <Créer un compte>";
}
else {
	if ($row["aktivigita"]==0) { 
		$respondo["mesagxo"] = "Ce compte n'est pas validé, merci de cliquer sur le lien reçu par email.";
	} else {
		if (md5($pasvorto)!=$row["pasvorto_md5"]) {
			$respondo["mesagxo"] = "Mot de passe incorrect";
		} else {
			$respondo["mesagxo"] = "ok";
			// trouver l'url où l'on doit atterir
			$respondo["url"]="http://google.com";
		}
	}

}

echo json_encode($respondo);
?>