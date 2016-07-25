<?php
include "../util.php";
$lecionero_id=isset($_GET["lecionero_id"])?$_GET["lecionero_id"]:"";
$kurso=isset($_GET["kurso"])?$_GET["kurso"]:"";
$leciono=isset($_GET["leciono"])?$_GET["leciono"]:"";

// on indique les résultats en dur en fonction de la leçon
$QCM[1]=array(13,'2','2','3','2','3','4','1','4','4','1','2','3','2'); // 1ère leçon
$QCM[2]=array(9,'3','3','1','3','2','3','2','1','3'); // 2ème leçon

$bonaj=0;
$eraroj_en_qcm = array();
$respondoj = array();
foreach(array_keys($_GET) as $key) {
	if (substr($key, 0, 4)=="900_"){
		$respondoj[$key]=$_GET[$key];
		// la variable $ subjekto contient le numéro de la leçon et on récupère ainsi de la variable $lec01 ou $lec02 la valeur attendue
		$indice_reponse_attendue=$QCM[$leciono][(integer)(substr($key,4,2))];
		// on récupère du POST la réponse de l'élève
		$indice_reponse_eleve=$_GET[$key]; 
		if ($indice_reponse_attendue==$indice_reponse_eleve){
			$bonaj++;
   		} else {
   			$eraroj_en_qcm[]=substr($key, 4, 2);
   		}
	}
}


// on trouve la leçon suivante et on récupère son url : 
// bon, pour le moment, il n'y a que des QCM dans DLEK
if ($kurso=="CG") {
	$prefixeKurso = "fr/cge/";
} 
if ($kurso=="KE") {
	$prefixeKurso = "fr/gerda/";
} 

if ($bonaj==$QCM[$leciono][0]) {
	// on a eu les bonnes réponses, on va à la section suivante
	$query="SELECT lecioneroj.titolo,ordo,lecionoj.retpagxo FROM lecioneroj,lecionoj WHERE lecioneroj.leciono_id=lecionoj.id and lecionoj.numero=".$leciono." and lecionoj.kurso='".$kurso."' and lecioneroj.id>".$lecionero_id." order by ordo ASC";
	echo $query;
	$result = $bdd->query($query);
	$row = $result->fetch();
	if ($row!=false) {
		$respondo["url"] = $prefixeKurso.$row['retpagxo'].'?section='.$row['ordo']."&erarkodo=21";
		$respondo["mesagxo"] = "ok";
		echo json_encode($respondo);
		exit();
	} else {
		$respondo["mesagxo"] = "aucune url suivante";
		echo json_encode($respondo);
		exit();
	}
} else { // toutes les réponses n'ont pas été donnée correctement
	$respondo["mesagxo"] = "ko";
	$respondo["eraroj"]=$eraroj_en_qcm;
}

echo json_encode($respondo);

?>