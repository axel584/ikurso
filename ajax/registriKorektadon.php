<?php
include "../util.php";
$persono_id=isset($_SESSION["persono_id"])?$_SESSION["persono_id"]:"";
$kurso=isset($_GET["kurso"])?$_GET["kurso"]:"";
$leciono=isset($_GET["leciono"])?$_GET["leciono"]:"";
$studanto_id=isset($_GET["studanto_id"])?$_GET["studanto_id"]:"";
$leciono_id=isset($_GET["leciono_id"])?$_GET["leciono_id"]:"";
$neSendiRetmesagxon=isset($_GET["pas_envoi_email"])?True:False;
if ($persono_id=="") { // personne non connecté, on ressort
	$respondo["type"]="session";
	$respondo["mesagxo"]="Session expirée";
	echo json_encode($respondo);
	exit();
}

$korektado = array();

foreach(array_keys($_GET) as $key) {
	if (startsWith($key,"bonaRespondo")) {
		$respondo_id = substr($key, 12);
		if (!array_key_exists($respondo_id,$korektado)) {
			$korektado[$respondo_id] = array();
		}
		$korektado[$respondo_id]['bonaRespondo']=$_GET[$key]=="on"?true:false;
	} else if (startsWith($key,"korekto")) {
		$respondo_id = substr($key, 7);
		if (!array_key_exists($respondo_id,$korektado)) {
			$korektado[$respondo_id] = array();
		}
		$korektado[$respondo_id]['korekto']=$_GET[$key];
	}
}

foreach(array_keys($korektado) as $respondo_id) {
	
	if (array_key_exists('bonaRespondo',$korektado[$respondo_id])) {
		$bonaRespondo = $korektado[$respondo_id]['bonaRespondo'];
	} else {
		$bonaRespondo = false;
	}
	if (!$bonaRespondo) { $bonaRespondo = 0;}
	$korekto = $korektado[$respondo_id]['korekto'];
	$requete = $bdd->prepare('update respondoj set gxusta=:bonaRespondo,korekto=:korekto where id=:respondo_id');
	$requete->execute(array('bonaRespondo'=>$bonaRespondo,'korekto'=>$korekto,'respondo_id'=>$respondo_id));
}

// sauvegarde de l'introduction/conclusion sur la leçon de l'élève
$requete = $bdd->prepare('update personoj_lecionoj set enkonduko=:enkonduko,konkludo=:konkludo,korektita=1 where persono_id=:persono_id and leciono_id=:leciono_id');
$requete->execute(array('enkonduko'=>$_GET['enkonduko'],'konkludo'=>$_GET['konkludo'],'persono_id'=>$studanto_id,'leciono_id'=>$leciono_id));

// envoyer le mail pour prévenir l'élève
if (!$neSendiRetmesagxon) {
	// on récupère son adresse email : 
	$result = $bdd->query("select retadreso from personoj where id=".$studanto_id);
	$retadresoStudanto = $result->fetch()["retadreso"];
	$filename = "../mails/novakorektado.html";

	$fd = fopen($filename, "r");
	$contents = fread($fd, filesize ($filename));
	fclose($fd);
	mailViaSES($retadresoStudanto,"Votre leçon a été corrigée",$contents);
}
// TODO : reconstruire l'url de retour à partir du nom de l'élève, sa leçon et son cours

$respondo["mesagxo"] = "ok";
$respondo["url"] = "vidiLecionon.php?kurso=".$kurso."&numleciono=".$leciono."&studanto=".$studanto_id;
echo json_encode($respondo);

?>