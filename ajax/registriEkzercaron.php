<?php
include "../util.php";
$persono_id=isset($_SESSION["persono_id"])?$_SESSION["persono_id"]:"";
$lecionero_id=isset($_GET["lecionero_id"])?$_GET["lecionero_id"]:"";
$kurso=isset($_GET["kurso"])?$_GET["kurso"]:"";
$leciono=isset($_GET["leciono"])?$_GET["leciono"]:"";
if ($persono_id=="") { // personne non connecté, on ressort
	$respondo["type"]="session";
	$respondo["mesagxo"]="Session expirée";
	echo json_encode($respondo);
	exit();
}

$lernantajDemandoj = array();
$lernantajRespondoj = array();
foreach(array_keys($_GET) as $key) {

	if (strncmp($key,"res_",4)==0) {
		$kodo = substr($key,4);
		$lernantajRespondoj[$kodo]=$_GET[$key];
	}
	if (strncmp($key,"dem_",4)==0) {
		$kodo = substr($key,4);
		$lernantajDemandoj[$kodo]=$_GET[$key];
	}
}



// on enregistre en base le résultat
foreach(array_keys($lernantajDemandoj) as $kodo) {
	    $requete = $bdd->prepare('insert into respondoj(persono_id,dato,kodo,demando,respondo,lecionero_id) values (:persono_id,now(),:kodo,:demando,:respondo,:lecionero_id)');
    	$requete->execute(array('persono_id'=>$persono_id,'kodo'=>$kodo,'demando'=>$lernantajDemandoj[$kodo],'respondo'=>$lernantajRespondoj[$kodo],'lecionero_id'=>$lecionero_id));
}
// on indique dans la table personoj_lecioneroj que la leçon a été faite :
$requete = $bdd->prepare('insert into personoj_lecioneroj(dato,persono_id,lecionero_id) values (now(),:persono_id,:lecionero_id)');
$requete->execute(array('persono_id'=>$persono_id,'lecionero_id'=>$lecionero_id));

// on trouve la leçon suivante et on récupère son url :
if ($kurso=="CG") {
	$prefixeKurso = "fr/cge/";
} 
if ($kurso=="KE") {
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