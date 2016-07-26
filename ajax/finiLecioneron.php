<?php
include "../util.php";
$persono_id=isset($_SESSION["persono_id"])?$_SESSION["persono_id"]:"";
$leciono=isset($_GET['leciono'])?$_GET['leciono']:"";
$lecionero_id=isset($_GET['lecionero_id'])?$_GET['lecionero_id']:"";
$kurso=isset($_GET['kurso'])?$_GET['kurso']:"";

if ($persono_id=="") { // personne non connecté, on ressort
	$respondo["type"]="session";
	$respondo["mesagxo"]="Session expirée";
	echo json_encode($respondo);
	exit();
}

if ($lecionero_id=="") { // id de la section introuvable
	$respondo["type"]="lecionero";
	$respondo["mesagxo"]="Problème d'identifiant, contactez les administrateurs";
	echo json_encode($respondo);
	exit();
}

// on mémorise la section
// on vérifie si il y a déjà un enregistrement en base :
$query ="select count(*) as combien from personoj_lecioneroj where persono_id=".$persono_id." and lecionero_id=".$lecionero_id;
$result = $bdd->query($query);
$combien = $result->fetch()["combien"];
// on enregistre si il n'y avait rien en base
if ($combien==0) {
	$requete = $bdd->prepare('insert into personoj_lecioneroj(dato,persono_id,lecionero_id) values (now(),:persono_id,:lecionero_id)');
	$requete->execute(array('persono_id'=>$persono_id,'lecionero_id'=>$lecionero_id));
}

// on trouve la leçon suivante et on récupère son url :
if ($kurso=="CG") {
	$prefixeKurso = "fr/cge/";
} 
if ($kurso=="GR") {
	$prefixeKurso = "fr/gerda/";
} 

$query="SELECT lecioneroj.titolo,ordo,lecionoj.retpagxo FROM lecioneroj,lecionoj WHERE lecioneroj.leciono_id=lecionoj.id and lecionoj.numero=".$leciono." and lecionoj.kurso='".$kurso."' and lecioneroj.id>".$lecionero_id." order by ordo ASC";
$result = $bdd->query($query);
$row = $result->fetch();
if ($row!=false) {
	$respondo["url"] = $prefixeKurso.$row['retpagxo'].'?section='.$row['ordo'];
	$respondo["mesagxo"] = "ok";
	echo json_encode($respondo);
	exit();
} else {
	$respondo["mesagxo"] = "aucune url suivante";
	echo json_encode($respondo);
	exit();
}


?>