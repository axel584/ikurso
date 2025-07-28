<?php
include "../util.php";
$persono_id=isset($_SESSION["persono_id"])?$_SESSION["persono_id"]:"";
$leciono=isset($_GET['leciono'])?$_GET['leciono']:"";
$lecionero_id=isset($_GET['lecionero_id'])?$_GET['lecionero_id']:"";
$ekdato=isset($_GET['ekdato'])?$_GET['ekdato']:"";
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
aldoniNovajnVortojnEnMemorilo($persono_id);


// on trouve la leçon suivante et on récupère son url :
if ($kurso=="CG") {
	$prefixeKurso = "fr/cge/";
} 
if ($kurso=="GR") {
	$prefixeKurso = "fr/gerda/";
} 
if ($kurso=="3N") {
	$prefixeKurso = "fr/3n/";
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
// on va ensuite prendre la section qui est dans la même leçon et dont le numéro "ordo" est strictement supérieur 
$query="SELECT lecioneroj.titolo,ordo,lecionoj.retpagxo FROM lecioneroj,lecionoj WHERE lecioneroj.leciono_id=lecionoj.id and lecionoj.numero=? and lecionoj.kurso=? and lecioneroj.ordo>? order by ordo ASC";
$stmt = $bdd->prepare($query);
$stmt->execute([$leciono, $kurso, $ordo]);
$result = $stmt;
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