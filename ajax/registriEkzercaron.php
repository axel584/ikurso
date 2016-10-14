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
$aucuneReponse = true;
$uneReponseManquante = false;
foreach(array_keys($_GET) as $key) {

	if (strncmp($key,"res_",4)==0) {
		$kodo = substr($key,4);
		$lernantajRespondoj[$kodo]=$_GET[$key];
		// si on a une réponse manquante, on peut mettre la variable correspondante à "true"
		if ($_GET[$key]=="") {
			// reponse manquante
			$uneReponseManquante=true;
		} else {
		// si on a une réponse, on peut mettre la variable "aucune réponse" à "false"
			$aucuneReponse = false;
		}

	}
	if (strncmp($key,"dem_",4)==0) {
		$kodo = substr($key,4);
		$lernantajDemandoj[$kodo]=$_GET[$key];
	}
}

// on enregistre en base le résultat s'il aucune réponse ne s'y trouve, sinon on fait une mise à jour
foreach(array_keys($lernantajDemandoj) as $kodo) {
		if ($lernantajRespondoj[$kodo]=="") {
			continue; // on n'enregistre pas les réponses vides
		}
		$result = $bdd->query("select count(*) as combien from respondoj where persono_id=".$persono_id." and kodo='".$kodo."' and lecionero_id=".$lecionero_id);
		$nbReponseEnBase = $result->fetch()["combien"];
		if ($nbReponseEnBase==0) {
	    	$requete = $bdd->prepare('insert into respondoj(persono_id,dato,kodo,demando,respondo,lecionero_id) values (:persono_id,now(),:kodo,:demando,:respondo,:lecionero_id)');
    		$requete->execute(array('persono_id'=>$persono_id,'kodo'=>$kodo,'demando'=>$lernantajDemandoj[$kodo],'respondo'=>$lernantajRespondoj[$kodo],'lecionero_id'=>$lecionero_id));
    	} else {
    		$requete = $bdd->prepare('update respondoj set respondo=:respondo where persono_id=:persono_id and kodo=:kodo and lecionero_id=:lecionero_id');
    		$requete->execute(array('persono_id'=>$persono_id,'kodo'=>$kodo,'respondo'=>$lernantajRespondoj[$kodo],'lecionero_id'=>$lecionero_id));
    	}
}

// si on n'a aucune réponse, on renvoit un message

if ($aucuneReponse) {
	$respondo["type"]="pas fini";
	$respondo["mesagxo"]="Merci de remplir vos réponses pour pouvoir les enregistrer";
	echo json_encode($respondo);
	exit();
}

if ($uneReponseManquante) {
	$respondo["type"]="pas fini";
	$respondo["mesagxo"]="Vos réponses ont bien été enregistrées, n'oubliez pas de tout répondre avant l'envoi à votre correcteur";
	echo json_encode($respondo);
	exit();
}

// a partir d'ici, on a fini toute la leçon

// on indique dans la table personoj_lecioneroj que la leçon a été faite :
// on commence par vérifier si y'en a pas déjà une ligne
$result = $bdd->query("select count(*) as combien from personoj_lecioneroj where persono_id=".$persono_id." and lecionero_id=".$lecionero_id);
$nbReponseEnBase = $result->fetch()["combien"];
if ($nbReponseEnBase==0) {
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
if ($kurso=="3N") {
	$prefixeKurso = "fr/3n/";
} 




// On recherche la section suivante à cette section, donc on va rechercher la valeur du "ordo" pour la section en cours :
$query = "select ordo from lecioneroj where id=".$lecionero_id;
$result = $bdd->query($query);
$row = $result->fetch();
$ordo = $row["ordo"];
// on va ensuite prendre la section qui est dans la même leçon et dont le numéro "ordo" est strictement supérieur 
$query="SELECT lecioneroj.titolo,ordo,lecionoj.retpagxo FROM lecioneroj,lecionoj WHERE lecioneroj.leciono_id=lecionoj.id and lecionoj.numero=".$leciono." and lecionoj.kurso='".$kurso."' and lecioneroj.ordo>".$ordo." order by ordo ASC";
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