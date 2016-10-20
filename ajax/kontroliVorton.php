<?php
include "../util.php";
$vorto_id=isset($_GET["vorto_id"])?$_GET["vorto_id"]:"";
$persono_id=isset($_GET["persono_id"])?$_GET["persono_id"]:"";
$lernantaRespondo=isset($_GET["respondo"])?$_GET["respondo"]:"";

function getInterval($nombrilo) {
	if ($nombrilo==1) {
		return 1;
	} elseif ($nombrilo==2) {
		return 6;
	} else {
		return 2*(getInterval($nombrilo-1));
	}
}

$query="SELECT eo FROM vortoj where id='".$vorto_id."'";
$result = $bdd->query($query);
$bonaRespondo = $result->fetch()["eo"];

if ($lernantaRespondo==$bonaRespondo) {
	// on a une bonne réponse, on incrémente le nombre de bonne réponse dans la table personoj_vortoj et on calcule la prochaine etape
	$query="SELECT id,nombrilo,venontaFojo FROM personoj_vortoj where vorto_id='".$vorto_id."' and persono_id='".$persono_id."'";
	$result = $bdd->query($query);
	$row = $result->fetch();
	$query2 = "update personoj_vortoj set nombrilo=nombrilo+1, venontaFojo=DATE_ADD(venontaFojo,INTERVAL ".getInterval($row["nombrilo"]+1)." DAY) where vorto_id='".$vorto_id."' and persono_id='".$persono_id."'";
	$bdd->exec($query2);
	$respondo["mesagxo"] = "ok";
	echo json_encode($respondo);
	exit();
} else {
	echo "ERREUR : pas la bonne réponse";
}
?>
