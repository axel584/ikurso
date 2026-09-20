<?php
include "../util.php";
include "../config.php";

$identigilo=isset($_POST['identigilo'])?$_POST['identigilo']:"";
$pasvorto=isset($_POST['pasvorto'])?stripslashes($_POST['pasvorto']):"";

// echo $pasvorto;
// echo "::";
// echo md5($pasvorto);

$respondo = array();

$stmt = $bdd->prepare("select id,aktivigita,pasvorto_md5,enirnomo,rajtoj from personoj where enirnomo=?");
$stmt->execute(array($identigilo));
if (!$row = $stmt->fetch()) { // aucune ligne retournée
	$respondo["mesagxo"]="Identifiant introuvable, cliquez sur le bouton S'INSCRIRE GRATUITEMENT";
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
			// on memorise l'id en session (nouvel identifiant de session : anti fixation) :
			session_regenerate_id(true);
			$_SESSION["persono_id"]=$row["id"];
			// on loggue tout ça :
			protokolo($row["id"],"ENIRO","$identigilo eniris");
			updateLastEniro($row["id"]);
			// trouver l'url où l'on doit atterir
			$respondo["url"]=getRedirectionParDroits($row["id"]);
			// connexion unique : retour vers le site qui a demandé la connexion (nilegu)
			require_once __DIR__ . '/../api/ReturnUrl.php';
			$retour = ReturnUrl::consume();
			if ($retour !== null) {
				$respondo["url"]=$retour;
			}
		}
	}

}

// jwt : uniquement si l'authentification a réussi
if ($respondo["mesagxo"]=="ok") {
	require_once __DIR__ . '/../api/JWTAuth.php';
	$jwt = JWTAuth::generate($row);
	$respondo["access_token"]=$jwt;
	JWTAuth::setCookie($jwt);
}

echo json_encode($respondo);
?>