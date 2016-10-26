<?php
include "../db.inc.php";
include "../util.php";
malfermidatumbazon();

// Premier rappel au bout de 6 jours
$query = "SELECT personoj.id,enirnomo,retadreso,personnomo,familinomo,nuna_kurso.kurso,nuna_kurso.nunleciono,lastdato,nuna_kurso.korektanto FROM nuna_kurso,personoj where nuna_kurso.studanto=personoj.id and nuna_kurso.stato='K' and lastdato=DATE_SUB(CURDATE(), INTERVAL 6 DAY) and stop_rappel='N' and nuna_kurso.kurso<>'KE'";
$result = $bdd->query($query);
 while($row = $result->fetch()) {
 	protokolo($row["id"],"ENVOIE RAPPEL","Envoie d'un message de rappel après 6 jours");
 	// on filtre pour ne pas envoyer de messages aux élèves qui ont envoyé leur dernière leçon
 	if (($row['kurso']=='CG') && ($row['nunleciono']=='10')) {
 		continue;
 	}
 	if (($row['kurso']=='GR') && ($row['nunleciono']=='25')) {
 		continue;
 	}
 	$nomo = isset($row["personnomo"])?$row["personnomo"]:$row["enirnomo"];
    echo $row["id"].":".$row["retadreso"]; 

    // chargement du fichier email
    $filename = "../mails/rappel.html";
    $fd = fopen($filename, "r");
	$contents = fread($fd, filesize ($filename));
	fclose($fd);
	// personnalisation :
	$contents=str_replace("##ID##",$row["id"],$contents);
	$contents=str_replace("##NOM##",$nomo,$contents);
	$contents=str_replace("##RETADRESO_CORRECTEUR##",getSimplaVorto('retadreso','personoj',"where id='".$row['korektanto']."'"),$contents);

	if ($row["kurso"]=="KE") {
		$contents=str_replace("##LIEN_COURS##","",$contents);
	} else {
		$prochaine_lecon = "<a href='".$urlracine.getPrefixeCours($row["kurso"]).getUrlVenontaLeciono($row["kurso"],$row["nunleciono"])."'>Continuer le cours</a>";
		$contents=str_replace("##LIEN_COURS##",$prochaine_lecon,$contents);
	}
	// envoie de l'email
	$mesagxkapo="MIME-Version: 1.0\n";
	$mesagxkapo.="Content-type:text/html;charset=utf-8\n";			
	$mesagxkapo.="From: ikurso <ikurso@esperanto-france.org>\n";
	$mesagxkapo.="Return-Path: <ikurso@esperanto-france.org>\n";
	$mesagxkapo.="Date: ".date("D, j M Y H:i:s").chr(13);
	mail($row["retadreso"],"Cours d'espéranto",$contents,$mesagxkapo);
}
// Deuxième rappel au bout de 10 jours
$query = "SELECT personoj.id,enirnomo,retadreso,personnomo,familinomo,nuna_kurso.kurso,nuna_kurso.nunleciono,lastdato,nuna_kurso.korektanto FROM nuna_kurso,personoj where nuna_kurso.studanto=personoj.id and nuna_kurso.stato='K' and lastdato=DATE_SUB(CURDATE(), INTERVAL 10 DAY) and stop_rappel='N' and nuna_kurso.kurso<>'KE'";
$result = $bdd->query($query);
 while($row = $result->fetch()) {
 	 	protokolo($row["id"],"ENVOIE RAPPEL","Envoie d'un message de rappel après 10 jours");
 	// on filtre pour ne pas envoyer de messages aux élèves qui ont envoyé leur dernière leçon
 	if (($row['kurso']=='CG') && ($row['nunleciono']=='10')) {
 		continue;
 	}
 	if (($row['kurso']=='GR') && ($row['nunleciono']=='25')) {
 		continue;
 	}
 	 $nomo = isset($row["personnomo"])?$row["personnomo"]:$row["enirnomo"];
    echo $row["id"].":".$row["retadreso"]; 

    // chargement du fichier email
    $filename = "../mails/rappel2.html";
    $fd = fopen($filename, "r");
	$contents = fread($fd, filesize ($filename));
	fclose($fd);
	// personnalisation :
	$contents=str_replace("##ID##",$row["id"],$contents);
	$contents=str_replace("##NOM##",$nomo,$contents);

	if ($row["kurso"]=="KE") {
		$contents=str_replace("##LIEN_COURS##","",$contents);
	} else {
		$prochaine_lecon = "<a href='".$urlracine.getPrefixeCours($row["kurso"]).getUrlVenontaLeciono($row["kurso"],$row["nunleciono"])."'>Continuer le cours</a>";
		$contents=str_replace("##LIEN_COURS##",$prochaine_lecon,$contents);
	}
		// envoie de l'email
	$mesagxkapo="MIME-Version: 1.0\n";
	$mesagxkapo.="Content-type:text/html;charset=utf-8\n";			
	$mesagxkapo.="From: ikurso <ikurso@esperanto-france.org>\n";
	$mesagxkapo.="Return-Path: <ikurso@esperanto-france.org>\n";
	$mesagxkapo.="Date: ".date("D, j M Y H:i:s").chr(13);
	mail($row["retadreso"],"Cours d'espéranto",$contents,$mesagxkapo);
 }
// on selectionne tous les élèves qui n'ont pas envoyé de leçon depuis un an :
$query = "SELECT korektanto,studanto,kurso FROM nuna_kurso WHERE lastdato<DATE_SUB(NOW(),INTERVAL 1 YEAR) and stato='K'";
$result = $bdd->query($query);
while($row = $result->fetch()) {
	$korektanto = $row["korektanto"];
	$studanto = $row["studanto"];
	$kurso = $row["kurso"];
	// on diminue de 1 le nombre d'élèves du correcteur pour ce cours 
	$query = "select kiom_lernantoj from korektebla_kurso where korektanto='".$korektanto."' and kurso='".$kurso."'";
	$kiom = $bdd->query($query)->fetch()["kiom_lernantoj"];
	if ($kiom>0) { // on diminue uniquement si le nombre d'élèves voulu est supérieur à 0
		$nouveau_nombre_eleves = $kiom - 1;
		$query = "update korektebla_kurso set kiom_lernantoj='".$nouveau_nombre_eleves."' where korektanto='".$korektanto."' and kurso='".$kurso."'";
		$bdd->exec($query);
	}
	$query = "update nuna_kurso set stato='H',findato=now() where studanto='".$studanto."' and kurso='".$kurso."' and stato='K'";
	$bdd->exec($query);
	protokolo($studanto,"SUPPRESSON AUTOMATIQUE","suppression de l'élève et diminution du nb d'élèves pour ".$korektanto);

}
?>