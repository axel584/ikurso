<?php
include "../db.inc.php";
include "../util.php";
malfermidatumbazon();

function jamFinisKurson($studanto) {
	global $bdd;
	$query = "SELECT stato FROM `nuna_kurso` WHERE studanto='".$studanto."' order by lastdato desc";
	$result = $bdd->query($query);
	$row = $result->fetch();
	if ($row) {
		return $row["stato"]=="F" || $row["stato"]=="H";
	} else {
		return false;
	}
}


// Premier rappel au bout de 6 jours
$query = "select personoj.id,personoj.enirnomo,personoj.personnomo,personoj.familinomo,retadreso, CAST(max(personoj_lecioneroj.dato) as date) as lasteniro from personoj join personoj_lecioneroj on personoj_lecioneroj.persono_id=personoj.id where stop_rappel='N' group by id,enirnomo,personnomo,familinomo,retadreso having lasteniro=DATE_SUB(CURDATE(), INTERVAL 6 DAY)";
$result = $bdd->query($query);
 while($row = $result->fetch()) {
 	// on verifie si l'élève a pas déjà fini son cours :
 	if (jamFinisKurson($row["id"])) {
 		continue;
 	}
 	protokolo($row["id"],"ENVOIE RAPPEL","Envoie d'un message de rappel après 6 jours");
 	$nomo = isset($row["personnomo"])?$row["personnomo"]:$row["enirnomo"];
    echo $row["id"].":".$row["retadreso"].":".$urlracine.redirigeSectionParUtilisateur($row["id"]); 

    // chargement du fichier email
    $filename = "../mails/rappel.html";
    $fd = fopen($filename, "r");
	$contents = fread($fd, filesize ($filename));
	fclose($fd);
	// personnalisation :
	$contents=str_replace("##ID##",$row["id"],$contents);
	$contents=str_replace("##NOM##",$nomo,$contents);

	$prochaine_lecon = "<a href='".$urlracine.redirigeSectionParUtilisateur($row["id"])."'>Continuer le cours</a>";
	$contents=str_replace("##LIEN_COURS##",$prochaine_lecon,$contents);

	// ajout d'un commentaire pour les correcteurs
	$query2 = "insert into komentoj (studanto, korektanto,dato,teksto) values ('".$row["id"]."','10',NOW(),'Envoi relance 6ème jour')";
	$bdd->query($query2);

	// envoie de l'email
	//mailViaSmtp($row["retadreso"],"ikurso@esperanto-france.org","Cours d'espéranto",$contents);
	mailViaSES($row["retadreso"],"Cours d'espéranto",$contents);
}
// Deuxième rappel au bout de 10 jours
$query = "select personoj.id,personoj.enirnomo,personoj.personnomo,personoj.familinomo,retadreso, CAST(max(personoj_lecioneroj.dato) as date) as lasteniro from personoj join personoj_lecioneroj on personoj_lecioneroj.persono_id=personoj.id where stop_rappel='N' group by id,enirnomo,personnomo,familinomo,retadreso having lasteniro=DATE_SUB(CURDATE(), INTERVAL 10 DAY)";
$result = $bdd->query($query);
 while($row = $result->fetch()) {
 	// on verifie si l'élève a pas déjà fini son cours :
 	if (jamFinisKurson($row["id"])) {
 		continue;
 	}
 	protokolo($row["id"],"ENVOIE RAPPEL","Envoie d'un message de rappel après 10 jours");
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

	$prochaine_lecon = "<a href='".$urlracine.redirigeSectionParUtilisateur($row["id"])."'>Continuer le cours</a>";
	$contents=str_replace("##LIEN_COURS##",$prochaine_lecon,$contents);

	// ajout d'un commentaire pour les correcteurs
	$query2 = "insert into komentoj (studanto, korektanto,dato,teksto) values ('".$row["id"]."','10',NOW(),'Envoi relance 10ème jour')";
	$bdd->query($query2);

		// envoie de l'email
	//mailViaSmtp($row["retadreso"],"ikurso@esperanto-france.org","Cours d'espéranto",$contents);
	mailViaSES($row["retadreso"],"Cours d'espéranto",$contents);
 }
// on selectionne tous les élèves qui n'ont pas envoyé de leçon depuis un an :
$query = "SELECT korektanto,studanto,kurso FROM nuna_kurso WHERE lastdato<DATE_SUB(NOW(),INTERVAL 1 YEAR) and stato<>'H' and stato<>'F'";
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
	$query = "update nuna_kurso set stato='H',findato=now() where studanto='".$studanto."' and kurso='".$kurso."' and stato<>'H' and stato<>'F'";
	$bdd->exec($query);
	protokolo($studanto,"SUPPRESSON AUTOMATIQUE","suppression de l'élève et diminution du nb d'élèves pour ".$korektanto);

}

// Statistiques quotidiennes pour les administrateurs
$filename = "../mails/statAdmin.html";
$fd = fopen($filename, "r");
$contents = fread($fd, filesize ($filename));
fclose($fd);
// personnalisation (requetes) :
$query="SELECT count(*) as kiom FROM personoj where ekdato= DATE_SUB(CONCAT(CURDATE(), ' 00:00:00'), INTERVAL 1 DAY)";
$kiom = $bdd->query($query)->fetch()["kiom"];
$contents=str_replace("##ALIGXIS##",$kiom,$contents);
$query="SELECT count(*) as kiom FROM personoj where ekdato= DATE_SUB(CONCAT(CURDATE(), ' 00:00:00'), INTERVAL 1 DAY) and aktivigita is true";
$kiom = $bdd->query($query)->fetch()["kiom"];
$contents=str_replace("##AKTIVIGXIS##",$kiom,$contents);
$novaj_lernantoj = "<ul>";
$query="select k.enirnomo as korektanto,k.posxtkodo as korektanto_posxtkodo,s.enirnomo as studanto,s.posxtkodo as studanto_posxtkodo,nuna_kurso.kurso from nuna_kurso join personoj k on k.id=nuna_kurso.korektanto join personoj s on s.id=nuna_kurso.studanto where nuna_kurso.ekdato=DATE_SUB(CONCAT(CURDATE(), ' 00:00:00'), INTERVAL 1 DAY)";
$result = $bdd->query($query);
while($row = $result->fetch()) {
	$novaj_lernantoj .= "<li>".$row["studanto"]."(".$row["studanto_posxtkodo"].") ricevis ".$row["korektanto"]."(".$row["korektanto_posxtkodo"].") kiel korektanto por la kurso : ".$row["kurso"]."</li>";	
}
$novaj_lernantoj .= "</ul>";
$contents=str_replace("##NOVAJ_LERNANTOJ##",$novaj_lernantoj,$contents);
$rimarkoj="<ul>";
$query="SELECT enirnomo,retadreso,titolo,lecionoj.kurso,komento FROM `takso_leciono`  join personoj on personoj.id=takso_leciono.persono_id  join lecionoj on lecionoj.id=takso_leciono.leciono_id where date(dato)=DATE_SUB(CONCAT(CURDATE(), ' 00:00:00'), INTERVAL 1 DAY) and komento<>''";
$result = $bdd->query($query);
while($row = $result->fetch()) {
	$rimarkoj.="<li><a href='mailto:".$row["retadreso"]."'>".$row["enirnomo"]."</a> pri ".$row["titolo"]."(".$row["kurso"].") diris : ".$row["komento"]."</li>";
}
$rimarkoj .= "</ul>";
$contents=str_replace("##RIMARKOJ##",$rimarkoj,$contents);
echo $contents;
// liste des administrateurs :
$demando="select retadreso from personoj where (rajtoj='A')";
$result = $bdd->query($demando) or die(print_r($bdd->errorInfo()));
$row=$result->fetch(); // on recupère le 1er admin
$informistoj=$row["retadreso"];
while ($row=$result->fetch()) { // on récupère les suivants
   $informistoj=$informistoj.",".$row["retadreso"];
}
// envoie du mail :
mailViaSES($informistoj,"Ikurso : Statistiques quotidiennes",$contents);


// le saviez vous
$query="select distinct personoj_lecioneroj.persono_id,enirnomo,retadreso,saviezvous from personoj_lecioneroj  join personoj on personoj.id=personoj_lecioneroj.persono_id WHERE date(dato)=DATE_SUB(CURDATE(), INTERVAL 1 DAY)";
$result = $bdd->query($query);
while($row = $result->fetch()) {
	$numero = $row["saviezvous"];
	$studanto = $row["retadreso"];
	$persono_id = $row["persono_id"];
	$numero=$numero+1;
	$filename = "../mails/saviezvous".sprintf("%03d", $numero).".html";
	$filenameTitre = "../mails/saviezvous".sprintf("%03d", $numero).".txt";
	echo ":".$filename."&".$filenameTitre;;
	if (file_exists($filename) && file_exists($filenameTitre)) { 
		$fd = fopen($filename, "r");
		$contents = fread($fd, filesize ($filename));
		fclose($fd);
		$fd = fopen($filenameTitre, "r");
		$contentsTitre = fread($fd, filesize ($filenameTitre));
		fclose($fd);
		mailViaSES($studanto,"Le Saviez-vous : ".$contentsTitre,$contents);
		$query2 = "update personoj set saviezvous=saviezvous+1 where id=".$persono_id;
		$bdd->query($query2);
	}
}

?>