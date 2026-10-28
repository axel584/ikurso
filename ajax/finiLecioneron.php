<?php
include "../util.php";
require_once __DIR__."/../api/GastoAPI.php";
$leciono=isset($_GET['leciono'])?$_GET['leciono']:"";
$lecionero_id=isset($_GET['lecionero_id'])?$_GET['lecionero_id']:"";
$ekdato=isset($_GET['ekdato'])?$_GET['ekdato']:"";
$kurso=isset($_GET['kurso'])?$_GET['kurso']:"";

if ($lecionero_id=="") { // id de la section introuvable
	$respondo["type"]="lecionero";
	$respondo["mesagxo"]="Problème d'identifiant, contactez les administrateurs";
	echo json_encode($respondo);
	exit();
}

// élève connecté, ou invité créé à sa première action (#1092)
$persono_id=(new GastoAPI($bdd))->akiriLernantoId();

// on mémorise la section
// on vérifie si il y a déjà un enregistrement en base :
$query ="select count(*) as combien from personoj_lecioneroj where persono_id=? and lecionero_id=?";
$stmt = $bdd->prepare($query);
$stmt->execute([$persono_id, $lecionero_id]);
$result = $stmt;
$combien = $result->fetch()["combien"];
// on enregistre si il n'y avait rien en base
if ($combien==0) {
	$requete = $bdd->prepare('insert into personoj_lecioneroj(dato,persono_id,lecionero_id,ekdato) values (now(),:persono_id,:lecionero_id,FROM_UNIXTIME(:ekdato))');
	$requete->execute(array('persono_id'=>$persono_id,'lecionero_id'=>$lecionero_id,'ekdato'=>$ekdato));
}

// on ajoute les mots étudiés dans cette section au vocabulaire à apprendre :
// et on invitera l'élève à les réviser sur la page suivante (#634)
$novajVortoj = aldoniNovajnVortojnEnMemorilo($persono_id);
if ($novajVortoj>0) {
	$_SESSION["novajVortoj"] = $novajVortoj;
}


// on trouve la leçon suivante et on récupère son url :
if ($kurso=="CG") {
	$prefixeKurso = "fr/cge/";
} 
if ($kurso=="GR") {
	$prefixeKurso = "fr/gerda/";
} 
if ($kurso=="PP") {
	$prefixeKurso = "eo/ppp/";
} 

// On recherche la section suivante à cette section, donc on va rechercher la valeur du "ordo" pour la section en cours :
$query = "select ordo from lecioneroj where id=?";
$stmt = $bdd->prepare($query);
$stmt->execute([$lecionero_id]);
$result = $stmt;
$row = $result->fetch();
$ordo = $row["ordo"];
// prochaine section pas encore terminée de la leçon, sinon la section suivante (#751)
require_once __DIR__."/../api/ProgresoAPI.php";
$row = (new ProgresoAPI($bdd))->sekvaSekcio((int)$persono_id, $kurso, (int)$leciono, (int)$ordo);
if ($row!==null) {
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