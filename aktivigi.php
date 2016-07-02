 <?php
include "util.php";
$retadreso=isset($_GET['retadreso'])?$_GET['retadreso']:"";
$aktivigo=isset($_GET['aktivigo'])?$_GET['aktivigo']:"";

// on vérifie si l'adresse est déjà utilisée
$query = "select * from personoj where retadreso='".$retadreso."'";
$result = $bdd->query($query);
$row = $result->fetch();
if (!$row) {
	header( "Location:index.php?erarkodo=17"); // aucun compte avec cette adresse email
} else {
	if ($aktivigo!=$row["aktivigo"]) {
		header( "Location:index.php?erarkodo=18"); // mauvaise clef d'activation
	} else {
		// on active le compte
		$query = "update personoj set aktivigita=1 where retadreso=".$retadreso;
		$bdd->exec($query);
		// on enregistre dans le compte rendu
		protokolo($row["id"],"COMPTE ACTIF",$row["enirnomo"]." a correctement activé son compte");
		// on met l'identifiant en session :
		$_SESSION["persono_id"]=$row["id"];
		header( "Location:personinformoj.php?aktivigo=ok");
	}
}


?>