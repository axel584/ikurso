<?php
include "../util.php";
$identigilo=isset($_POST['identigilo'])?$_POST['identigilo']:"";
$pasvorto=isset($_POST['pasvorto'])?stripslashes($_POST['pasvorto']):"";

// echo $pasvorto;
// echo "::";
// echo md5($pasvorto);

$respondo = array();

$query = "select id,aktivigita,pasvorto_md5 from personoj where enirnomo=?";
$stmt = $bdd->prepare($query);
$stmt->execute([$identigilo]);
$result = $stmt;
if (!$row = $result->fetch()) { // aucune ligne retournée
	$respondo["mesagxo"]="Identifiant introuvable, cliquez sur le bouton CRÉER UN COMPTE";
	$respondo["type"]="identigilo";
}
else {
	if ($row["aktivigita"]==0) { 
		$respondo["mesagxo"] = "Ce compte n'est pas validé, merci de cliquer sur le lien reçu par email.";
		$respondo["type"]="ne_aktivigita";
	} else {
		if (md5($pasvorto)!=$row["pasvorto_md5"]) {
			$respondo["mesagxo"] = "Mot de passe incorrect";
			$respondo["type"]="pasvorto";
		} else {
			$respondo["mesagxo"] = "ok";
			// on memorise l'id en session :
			$_SESSION["persono_id"]=$row["id"];
			// on loggue tout ça :
			protokolo($row["id"],"ENIRO","$identigilo eniris");
			updateLastEniro($row["id"]);
			// trouver l'url où l'on doit atterir
			$respondo["url"]=getRedirectionParDroits($row["id"]);
		}
	}

}

echo json_encode($respondo);
?>