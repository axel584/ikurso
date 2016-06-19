<?php
include "../util.php";
include "../config.php";
$query = "SELECT personoj.id,enirnomo,retadreso,personnomo,familinomo,nuna_kurso.kurso,nuna_kurso.nunleciono,lastdato,nuna_kurso.korektanto FROM nuna_kurso,personoj where nuna_kurso.studanto=personoj.id and nuna_kurso.stato='K' and lastdato=DATE_SUB(CURDATE(), INTERVAL 6 DAY) and stop_rappel='N'";
$result = $bdd->query($query);
 while($row = $result->fetch()) {
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
		$mesagxkapo.="From: ikurso <ikurso@esperanto-jeunes.org>\n";
		$mesagxkapo.="Return-Path: <ikurso@esperanto-jeunes.org>\n";
		$mesagxkapo.="Date: ".date("D, j M Y H:i:s").chr(13);
		mail($row["retadreso"],"Cours d'espéranto",$contents,$mesagxkapo);
     }
?>