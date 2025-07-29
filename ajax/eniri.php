<?php
include "../util.php";
include "../config.php";
$identigilo=isset($_POST['identigilo'])?$_POST['identigilo']:"";
$pasvorto=isset($_POST['pasvorto'])?stripslashes($_POST['pasvorto']):"";

// echo $pasvorto;
// echo "::";
// echo md5($pasvorto);

$respondo = array();

$query = "select id,aktivigita,pasvorto_md5,enirnomo,rajtoj from personoj where enirnomo='".$identigilo."'";
$result = $bdd->query($query);
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

// jwt 
// Header de token JWT
$header = array(
    "alg" => "HS256",
    "typ" => "JWT"
);

// Payload ou corps du token
$payload = array(
    "enirnomo" => $row["enirnomo"],
    "retadreso" => $row["retadreso"],
    "persono_id" => $row["id"],
	"rajto" => $row["rajtoj"],
	"personnomo" => $row["persononomo"],
	"familinomo" => $row["familinomo"]
);

// Encodez le header et le payload en JSON et en Base64URL
$encodedHeader = base64url_encode(json_encode($header));
$encodedPayload = base64url_encode(json_encode($payload));

// Concaténez la chaîne encodée Base64URL de l'en-tête, un point (.), et la chaîne encodée Base64URL des informations pour créer la partie corps du jeton.
$jwtBody = $encodedHeader . "." . $encodedPayload;

// Calcul de la signature en hachant la chaîne corps avec la clé secrète (idem que la base de données) et l'algorithme de hachage approprié.
$signature = hash_hmac('sha256', $jwtBody, $motDePasse, true);

// Encodez la signature en Base64URL
$encodedSignature = base64url_encode($signature);

// Concaténez la chaîne corps du jeton, un point (.), et la signature encodée Base64URL pour créer le jeton JWT final.
$jwt = $jwtBody . "." . $encodedSignature;

// On stocke le jeton JWT en session
//$_SESSION["access_token"]=$jwt;
$respondo["access_token"]=$jwt;
setcookie("access_token", $jwt, [
	'expires'=>time()+(86400*365),// valable un an
	'path' => '/',
    'domain' => '.esperanto-france.org', // Note le point au début
    'secure' => true
]); 

echo json_encode($respondo);
?>