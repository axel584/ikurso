<?php
include "../util.php";
$persono_id=isset($_SESSION["persono_id"])?$_SESSION["persono_id"]:"";
if ($persono_id=="") { // personne non connecté, on ressort
	$respondo["type"]="session";
	$respondo["mesagxo"]="Session expirée";
	echo json_encode($respondo);
	exit();
}

$demando = array();
$respondo = array();
foreach(array_keys($_GET) as $key) {

	if (strncmp($key,"res_",4)==0) {
		$kodo = substr($key,4);
		$respondo[$kodo]=$_GET[$key];
	}
	if (strncmp($key,"dem_",4)==0) {
		$kodo = substr($key,4);
		$demando[$kodo]=$_GET[$key];
	}
}



// on enregistre en base le résultat
foreach(array_keys($demando) as $kodo) {
	    $requete = $bdd->prepare('insert into respondoj(persono_id,dato,kodo,demando,respondo) values (:persono_id,now(),:kodo,:demando,:respondo)');
    	$requete->execute(array('persono_id'=>$persono_id,'kodo'=>$kodo,'demando'=>$demando[$kodo],'respondo'=>$respondo[$kodo]));
}





?>