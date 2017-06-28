<?php
include "../util.php";
$persono_id=isset($_SESSION["persono_id"])?$_SESSION["persono_id"]:"";
$id=isset($_GET["id"])?$_GET["id"]:"";


if ($id=="") {
	$respondo["mesagxo"]="ko";
	$respondo["eraroj"]="Evenement à supprimer inconnu";
	echo json_encode($respondo);
	exit();
}

if ($persono_id=="") {
	$respondo["mesagxo"]="ko";
	$respondo["eraroj"]="Merci de vous connecter pour supprimer un événement";
	echo json_encode($respondo);
	exit();
}

$requete = $bdd->prepare('update eventoj set forigita=:persono_id where id=:id');
$requete->execute(array('id'=>$id,'persono_id'=>$persono_id));

$respondo["mesagxo"] = "ok";
echo json_encode($respondo);
exit();
?>