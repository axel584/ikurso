<?php
include "../util.php";
$ekzercero_id=isset($_GET["ekzercero"])?$_GET["ekzercero"]:"";
$studanto=isset($_GET["studanto"])?$_GET["studanto"]:"";
$lernantaRespondo=isset($_GET["respondo"])?htmlspecialchars($_GET["respondo"]):"";


if ($lernantaRespondo=="") {
	echo json_encode(null);
	exit;
}

$query="SELECT respondo,normaligita FROM ekzerceroj where id='".$ekzercero_id."'";
$result = $bdd->query($query);
$row = $result->fetch();
$bonaRespondo = $row["normaligita"];




if (kontroliRespondon($lernantaRespondo,$bonaRespondo)) {
	$respondo["mesagxo"] = "ok";
	$gxusta=1;	 
} else {
	$respondo["mesagxo"] = "ko";
	$gxusta=0;
}


// on mémorise en base :
// on vérifie si l'élève a déjà en base une réponse
$result = $bdd->query("select count(*) as combien from respondoj where persono_id=".$studanto." and ekzercero_id='".$ekzercero_id."'");
$nbReponseEnBase = $result->fetch()["combien"];
if ($nbReponseEnBase==0) {
   	$requete = $bdd->prepare('insert into respondoj(persono_id,dato,ekzercero_id,respondo,normaligita,gxusta) values (:persono_id,now(),:ekzercero_id,:respondo,:normaligita,:gxusta)');
   	$requete->execute(array('persono_id'=>$studanto,'ekzercero_id'=>$ekzercero_id,'respondo'=>$lernantaRespondo,'normaligita'=>normaligita($lernantaRespondo),'gxusta'=>$gxusta));
} else {
	$requete = $bdd->prepare('update respondoj set respondo=:respondo,normaligita=:normaligita,gxusta=:gxusta where persono_id=:persono_id and ekzercero_id=:ekzercero_id');
	$requete->execute(array('persono_id'=>$studanto,'ekzercero_id'=>$ekzercero_id,'respondo'=>$lernantaRespondo,'normaligita'=>normaligita($lernantaRespondo),'gxusta'=>$gxusta));
}

echo json_encode($respondo);


// TODO il faudrait enregistrer la réponse de l'élève dès qu'on sort du champ, mais on ne pourra faire ça que quand on sera passé définitivement aux "id" pour les questions, plutôt qu'aux kodo

?>

