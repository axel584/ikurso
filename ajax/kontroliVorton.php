<?php
include "../util.php";
$vorto_id=isset($_GET["vorto_id"])?$_GET["vorto_id"]:"";
$persono_id=isset($_GET["persono_id"])?$_GET["persono_id"]:"";
if ($persono_id=="") {
	$respondo["mesagxo"] = "ko";
	$respondo["eraroj"]="Identifiant de l'élève absent. Ça sent le piratage de bac à sable.";
	echo json_encode($respondo);
	exit();
}

$lernantaRespondo=isset($_GET["respondo"])?htmlspecialchars($_GET["respondo"],ENT_QUOTES):"";
$lernantaRespondo = mb_ereg_replace('\xc2\xa0',' ',$lernantaRespondo); // pour retirer les espaces insécables (#774)

// echo '[Memory:'.memory_get_usage().'@'.__FILE__.':'.__LINE__.']';

function getInterval($nombrilo) {
	if ($nombrilo==1) {
		return 1;
	} elseif ($nombrilo==2) {
		return 6;
	} else {
		return 2*(getInterval($nombrilo-1));
	}
}

$query="SELECT fr,eo FROM vortoj where id='".$vorto_id."'";
$result = $bdd->query($query);
$row = $result->fetch();
$bonaRespondo = $row["eo"];
$francaVorto = $row["fr"];

// TODO a remplacer par la version kontroliRespondon dans la page utils.php
function kontroliVorton($lernantaRespondo,$bonaRespondo) {
	// attention, il ne faut pas utiliser != mais !==
	if (strpos($bonaRespondo,"|")!==false) {
		return kontroliVorton($lernantaRespondo,substr($bonaRespondo, 0,strpos($bonaRespondo, "|"))) || kontroliVorton($lernantaRespondo,substr($bonaRespondo, strpos($bonaRespondo, "|")+1));
	} else {
		$trans = array("." => "", "," => "", "'" => "","!" => "","?" => "","-" => "","_" => ""); // liste des caractères à supprimer pour la comparaison
		$bonaRespondo = trim(strtr($bonaRespondo, $trans));
		$lernantaRespondo = trim(strtr($lernantaRespondo,$trans));
		// echo "bona respondo : ".strtolower(konvX($bonaRespondo))."<br/>";
		// echo "lernanta respondo : ".strtolower(konvX($lernantaRespondo))."<br/>";
		return strtolower(konvX($lernantaRespondo))==strtolower(konvX($bonaRespondo));	
	}
}

function memoriRespondon($persono_id,$vorto_id,$bona,$respondo) {
	global $bdd;
	$query = "insert into personoj_vortoj_respondoj(persono_id,vorto_id,dato,bona,respondo) values('".$persono_id."','".$vorto_id."',NOW(),".$bona.",'".$respondo."');";
	$bdd->exec($query);
}

if (kontroliVorton($lernantaRespondo,$bonaRespondo)) { // on compare sans se soucier de la case
	// on a une bonne réponse, on incrémente le nombre de bonne réponse dans la table personoj_vortoj et on calcule la prochaine etape
	$query="SELECT nombrilo FROM personoj_vortoj where vorto_id='".$vorto_id."' and persono_id='".$persono_id."'";
	$result = $bdd->query($query);
	$nombrilo = $result->fetch()["nombrilo"];
	if (is_null($nombrilo)) {
		$respondo["mesagxo"] = "ko";
		$respondo["eraroj"]="Ce mot n'est pas dans votre liste des mots à réviser. Si vous voyez ce message d'erreur, contactez les administrateurs. Si vous jouez avec les appels ajax, arrêtez ça. C'est déjà pénible de faire une application qui fonctionne correctement, c'est pas pour en plus gérer les cas de figure où des hackers de bac à sable s'amusent à faire les cons.";
		echo json_encode($respondo);
		exit();
	}
	$query2 = "update personoj_vortoj set nombrilo=nombrilo+1, venontaFojo=DATE_ADD(NOW(),INTERVAL ".getInterval($nombrilo)." DAY),lastfojo=now() where vorto_id='".$vorto_id."' and persono_id='".$persono_id."'";
	$bdd->exec($query2);
	memoriRespondon($persono_id,$vorto_id,"TRUE",$lernantaRespondo);
	$respondo["mesagxo"] = "ok";
	echo json_encode($respondo);
	exit();
} else {
	// on a une mauvaise réponse, on met à 1 le "nombrilo" pour ce mot et on ne change pas la date de la prochaine révision pour qu'on le révise le plus tôt possible :
	$query = "update personoj_vortoj set nombrilo=1, lastfojo=now() where vorto_id='".$vorto_id."' and persono_id='".$persono_id."'";
	$bdd->exec($query);
	// on stocke dans le protokolo les erreurs pour pouvoir aider au besoin
	//protokolo($persono_id,"MEMORILO","Pour : ".$francaVorto." l'élève a traduit : ".$lernantaRespondo." au lieu de ".$bonaRespondo);
	$respondo["mesagxo"] = "ko";
	// si on a plusieurs possibilités, on n'explique que la première à l'élève :
	if (strpos($bonaRespondo,"|")!==false) {
		$bonaRespondo = substr($bonaRespondo, 0,strpos($bonaRespondo, "|"));
	}
	$respondo["eraroj"]="La bonne réponse était&nbsp;<b>".$bonaRespondo."</b>";
	if ($lernantaRespondo=="") {
		$respondo["recapitulatif"]="<b>".$francaVorto."</b>&nbsp;se dit&nbsp;<b>".$bonaRespondo."</b>";
	} else {
		$respondo["recapitulatif"]="<b>".$francaVorto."</b>&nbsp;se dit&nbsp;<b>".$bonaRespondo."</b> (et pas&nbsp;<strike>".$lernantaRespondo."</strike>)";
		memoriRespondon($persono_id,$vorto_id,"FALSE",$lernantaRespondo);
	}
	echo json_encode($respondo);
	exit();
}
?>

