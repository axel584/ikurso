<?php
include "../db.inc.php";
include "../util.php";
require_once "../api/StatistikojAPI.php";
require_once "../api/AgordojAPI.php";
require_once "../api/SaviezvousAPI.php";
malfermidatumbazon();

function dauxroTeksto(int $sekundoj): string {
	$minutoj = (int)round($sekundoj / 60);
	return $minutoj < 60 ? $minutoj." min" : intdiv($minutoj, 60)." h ".sprintf("%02d", $minutoj % 60);
}

function laboroHtml(array $linioj): string {
	if (!$linioj) {
		return "<p>Aucune page validée hier.</p>";
	}
	$pagxoj = array_sum(array_column($linioj, "pagxoj"));
	$sekundoj = array_sum(array_column($linioj, "sekundoj"));
	$lernantoj = count(array_unique(array_column($linioj, "enirnomo")));
	$listo = "";
	$lecionoj = 0;
	foreach ($linioj as $linio) {
		$finitaj = $linio["finitaj"] ? explode(",", $linio["finitaj"]) : array();
		$lecionoj += count($finitaj);
		$listo .= "<li>".htmlspecialchars($linio["enirnomo"], ENT_QUOTES, "UTF-8")." (".htmlspecialchars($linio["kurso"], ENT_QUOTES, "UTF-8").") : "
			.$linio["pagxoj"]." page(s), ".dauxroTeksto((int)$linio["sekundoj"])
			.($finitaj ? ", leçon(s) ".implode(", ", $finitaj)." terminée(s)" : "")."</li>";
	}
	return "<p>".$lernantoj." élève(s) ont validé ".$pagxoj." page(s) et terminé ".$lecionoj." leçon(s), pour ".dauxroTeksto($sekundoj)." de travail.</p><ul>".$listo."</ul>";
}

function vortojHtml(array $vortoj): string {
	if ($vortoj["respondoj"] == 0) {
		return "<p>Aucune révision hier.</p>";
	}
	$elcento = round(100 * $vortoj["bonaj"] / $vortoj["respondoj"]);
	return "<p>".$vortoj["lernantoj"]." élève(s) ont révisé ".$vortoj["respondoj"]." mot(s), avec ".$elcento." % de bonnes réponses.</p>";
}

function jamFinisKurson($studanto) {
	global $bdd;
	$stmt = $bdd->prepare("SELECT stato FROM `nuna_kurso` WHERE studanto=? order by lastdato desc");
	$stmt->execute([$studanto]);
	$result = $stmt;
	$row = $result->fetch();
	if ($row) {
		return $row["stato"]=="F" || $row["stato"]=="H";
	} else {
		return false;
	}
}


// Relance des comptes pas activés, au moins 24 heures après l'inscription, une seule fois (#639)
require_once "../api/AktivigoAPI.php";
$aktivigoAPI = new AktivigoAPI($bdd);
foreach ($aktivigoAPI->rememorigendaj() as $persono_id) {
	echo $persono_id.":rappel d'activation\n";
	$aktivigoAPI->sendiAktivigilon($persono_id, "aktivigiRememorigo.html", "Activez votre compte pour commencer à apprendre l'espéranto", "rememorigo", AktivigoAPI::REMEMORIGO);
}

// Premier rappel au bout de 6 jours
$query = "select personoj.id,personoj.enirnomo,personoj.personnomo,personoj.familinomo,retadreso, CAST(max(personoj_lecioneroj.dato) as date) as lasteniro from personoj join personoj_agordoj on personoj_agordoj.persono_id=personoj.id and personoj_agordoj.agordo='RAPPEL' and personoj_agordoj.rajto=1 join personoj_lecioneroj on personoj_lecioneroj.persono_id=personoj.id group by id,enirnomo,personnomo,familinomo,retadreso having lasteniro=DATE_SUB(CURDATE(), INTERVAL 6 DAY)";
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
	$malaboni = AgordojAPI::malaboniLigilo((int)$row["id"], "RAPPEL");
	$contents=str_replace("##MALABONI##",$malaboni,$contents);

	$prochaine_lecon = "<a href='".$urlracine.redirigeSectionParUtilisateur($row["id"])."'>Continuer le cours</a>";
	$contents=str_replace("##LIEN_COURS##",$prochaine_lecon,$contents);

	// ajout d'un commentaire pour les correcteurs
	$stmt2 = $bdd->prepare("insert into komentoj (studanto, korektanto,dato,teksto) values (?,10,NOW(),'Envoi relance 6ème jour')");
	$stmt2->execute([$row["id"]]);

	// envoie de l'email
	//mailViaSmtp($row["retadreso"],"ikurso@esperanto-france.org","Cours d'espéranto",$contents);
	mailViaSES($row["retadreso"],"Cours d'espéranto",$contents,$malaboni);
}
// Deuxième rappel au bout de 10 jours
$query = "select personoj.id,personoj.enirnomo,personoj.personnomo,personoj.familinomo,retadreso, CAST(max(personoj_lecioneroj.dato) as date) as lasteniro from personoj join personoj_agordoj on personoj_agordoj.persono_id=personoj.id and personoj_agordoj.agordo='RAPPEL' and personoj_agordoj.rajto=1 join personoj_lecioneroj on personoj_lecioneroj.persono_id=personoj.id group by id,enirnomo,personnomo,familinomo,retadreso having lasteniro=DATE_SUB(CURDATE(), INTERVAL 10 DAY)";
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
	$malaboni = AgordojAPI::malaboniLigilo((int)$row["id"], "RAPPEL");
	$contents=str_replace("##MALABONI##",$malaboni,$contents);

	$prochaine_lecon = "<a href='".$urlracine.redirigeSectionParUtilisateur($row["id"])."'>Continuer le cours</a>";
	$contents=str_replace("##LIEN_COURS##",$prochaine_lecon,$contents);

	// ajout d'un commentaire pour les correcteurs
	$stmt2 = $bdd->prepare("insert into komentoj (studanto, korektanto,dato,teksto) values (?,10,NOW(),'Envoi relance 10ème jour')");
	$stmt2->execute([$row["id"]]);

		// envoie de l'email
	//mailViaSmtp($row["retadreso"],"ikurso@esperanto-france.org","Cours d'espéranto",$contents);
	mailViaSES($row["retadreso"],"Cours d'espéranto",$contents,$malaboni);
 }
// on selectionne tous les élèves qui n'ont pas envoyé de leçon depuis un an :
$query = "SELECT korektanto,studanto,kurso FROM nuna_kurso WHERE lastdato<DATE_SUB(NOW(),INTERVAL 1 YEAR) and stato<>'H' and stato<>'F'";
$result = $bdd->query($query);
while($row = $result->fetch()) {
	$korektanto = $row["korektanto"];
	$studanto = $row["studanto"];
	$kurso = $row["kurso"];
	// on diminue de 1 le nombre d'élèves du correcteur pour ce cours 
	$stmt = $bdd->prepare("select kiom_lernantoj from korektebla_kurso where korektanto=? and kurso=?");
	$stmt->execute([$korektanto, $kurso]);
	$kiom = $stmt->fetch()["kiom_lernantoj"];
	if ($kiom>0) { // on diminue uniquement si le nombre d'élèves voulu est supérieur à 0
		$nouveau_nombre_eleves = $kiom - 1;
		$stmt = $bdd->prepare("update korektebla_kurso set kiom_lernantoj=? where korektanto=? and kurso=?");
		$stmt->execute([$nouveau_nombre_eleves, $korektanto, $kurso]);
	}
	$stmt = $bdd->prepare("update nuna_kurso set stato='H',findato=now() where studanto=? and kurso=? and stato<>'H' and stato<>'F'");
	$stmt->execute([$studanto, $kurso]);
	protokolo($studanto,"SUPPRESSON AUTOMATIQUE","suppression de l'élève et diminution du nb d'élèves pour ".$korektanto);

}

// Statistiques quotidiennes pour les administrateurs
$filename = "../mails/statAdmin.html";
$fd = fopen($filename, "r");
$contents = fread($fd, filesize ($filename));
fclose($fd);
// personnalisation (requetes) :
$query="SELECT count(*) as kiom FROM personoj where ekdato= DATE_SUB(CONCAT(CURDATE(), ' 00:00:00'), INTERVAL 1 DAY) and rajtoj<>'G'";
$kiom = $bdd->query($query)->fetch()["kiom"];
$contents=str_replace("##ALIGXIS##",$kiom,$contents);
// invités (#1092) : visiteurs qui ont commencé le cours sans compte et ne se sont pas encore inscrits
$query="SELECT count(*) as kiom FROM personoj where ekdato= DATE_SUB(CONCAT(CURDATE(), ' 00:00:00'), INTERVAL 1 DAY) and rajtoj='G'";
$kiom = $bdd->query($query)->fetch()["kiom"];
$contents=str_replace("##GASTOJ##",$kiom,$contents);
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
$statistikoj = new StatistikojAPI($bdd);
$contents=str_replace("##LABORO##",laboroHtml($statistikoj->laboroHieraux()),$contents);
$contents=str_replace("##VORTOJ##",vortojHtml($statistikoj->vortojHieraux()),$contents);
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


// le saviez vous : le prochain message pas encore envoyé, mémorisé dans la liste JSON de l'élève (#891)
$saviezvousAPI = new SaviezvousAPI($bdd);
$query="select distinct personoj_lecioneroj.persono_id,enirnomo,retadreso,saviezvous_senditaj from personoj_lecioneroj  join personoj on personoj.id=personoj_lecioneroj.persono_id join personoj_agordoj on personoj_agordoj.persono_id=personoj.id and personoj_agordoj.agordo='SAVIEZVOUS' and personoj_agordoj.rajto=1 WHERE date(personoj_lecioneroj.dato)=DATE_SUB(CURDATE(), INTERVAL 1 DAY)";
$result = $bdd->query($query);
while($row = $result->fetch()) {
	$studanto = $row["retadreso"];
	$persono_id = (int)$row["persono_id"];
	$numero = $saviezvousAPI->sekva(SaviezvousAPI::malkodi($row["saviezvous_senditaj"]));
	echo ":".$persono_id."&saviezvous".$numero;
	if ($numero!==null) {
		list($contentsTitre, $contents) = $saviezvousAPI->enhavo($numero);
		$contents = SaviezvousAPI::personigi($contents, $persono_id, $urlracine);
		// lien de désinscription sous l'anecdote (#920)
		$malaboni = AgordojAPI::malaboniLigilo($persono_id, "SAVIEZVOUS");
		$contents = str_replace("</table>", "</table>\n\t<p style=\"padding:1em 0;font-family:'PT Sans',Arial,sans-serif;font-size:0.8rem;color:#554E47;\">Vous recevez ce message parce que vous avez travaillé hier sur ikurso. Si vous ne souhaitez plus recevoir ces anecdotes, il vous suffit de cliquer sur <a href='".$malaboni."'>« Ne plus recevoir Le saviez-vous »</a>.</p>", $contents);
		if (mailViaSES($studanto,"Le Saviez-vous : ".$contentsTitre,$contents,$malaboni)) {
			$saviezvousAPI->registri($persono_id, $numero);
		}
	}
}

?>