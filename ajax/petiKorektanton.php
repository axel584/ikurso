<?php
include "../util.php";
$persono_id=isset($_SESSION["persono_id"])?$_SESSION["persono_id"]:"";
$persono = apartigiPersonon($persono_id);
$lecionero_id=isset($_GET["lecionero_id"])?$_GET["lecionero_id"]:"";
$ekdato=isset($_GET['ekdato'])?$_GET['ekdato']:"";
$kurso=isset($_GET["kurso"])?$_GET["kurso"]:"";
$leciono=isset($_GET["leciono"])?$_GET["leciono"]:"";
$commentaire_pour_correcteur=isset($_GET["commentaire_pour_correcteur"])?$_GET["commentaire_pour_correcteur"]:"";

if ($persono_id=="") { // personne non connecté, on ressort
	$respondo["type"]="session";
	$respondo["mesagxo"]="Session expirée";
	echo json_encode($respondo);
	exit();
}

// si le compte n'est pas activé, on le renvoit
$query = "select aktivigita from personoj where id=".$persono_id;
$result = $bdd->query($query);
$aktivigita = $result->fetch()["aktivigita"];
if($aktivigita==0) {
	$respondo["mesagxo"] = "compteNonActif";
	echo json_encode($respondo);
	exit();
}

// on vérifie si l'élève a fait un exercice
$query = "select count(*) as combien from respondoj join ekzerceroj on ekzerceroj.id = respondoj.ekzercero_id join ekzercoj on ekzercoj.id=ekzerceroj.ekzerco_id join lecioneroj on lecioneroj.id=ekzercoj.lecionero_id join lecionoj on lecioneroj.leciono_id=lecionoj.id where persono_id=".$persono_id." and lecionoj.numero=".$leciono." and kurso='".$kurso."'";
$result = $bdd->query($query);
$nbResponses = $result->fetch()["combien"];
if ($nbResponses==0) {
	$respondo["mesagxo"] = "aucunExercice";
	echo json_encode($respondo);
	exit();	
}

// on mémorise la leçon 
// on récupère l'id de la leçon à partir du $lecionero_id
$query ="select leciono_id from lecioneroj where id=".$lecionero_id;
$result = $bdd->query($query);
$leciono_id = $result->fetch()["leciono_id"];
$query ="select count(*) as combien from personoj_lecionoj where persono_id=".$persono_id." and leciono_id=".$leciono_id;
$result = $bdd->query($query);
$combien = $result->fetch()["combien"];
// on enregistre si il n'y avait rien en base
if ($combien==0) {
	$requete = $bdd->prepare('insert into personoj_lecionoj(dato,persono_id,leciono_id) values (now(),:persono_id,:leciono_id)');
	$requete->execute(array('persono_id'=>$persono_id,'leciono_id'=>$leciono_id));
}

// on récupère quelques infos sur le cours :
if ($kurso=="CG") {
	$prefixeKurso = "fr/cge/";
	$sujetMail = "lec".sprintf('%02d', $leciono)." de ".$persono["enirnomo"];
} 
if ($kurso=="GR") {
	$prefixeKurso = "fr/gerda/";
	$sujetMail = "gerda cxap".sprintf('%02d', $leciono)." de ".$persono["enirnomo"];
} 
if ($kurso=="3N") {
	$prefixeKurso = "fr/3n/";
	$sujetMail = "leciono ".sprintf('%02d', $leciono)." de ".$persono["enirnomo"];
} 


// on met le champ "kurso" de l'élève a la bonne valeur et son champ "rajtoj" à P
$query = "update personoj set kurso='".$kurso."',rajtoj='P' where id=".$persono_id;
$bdd->exec($query);

// on enregistre ses réponses dans la table 
$fonto="<html><head><title>Cours d'Espéranto : leçon ".$leciono."</title>\n";
$fonto.="<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\"\n>";
$fonto.="<style>body{font-family:\"Courier New\", Courier, sans-serif;font-size:small}</style>\n";
$fonto.="</head><body>";

// Attention, code commun avec sendiLecionon.php

$query = "select ekzercoj.komando,ekzerceroj.demando,respondoj.respondo,gxusta from respondoj  join ekzerceroj on ekzerceroj.id=respondoj.ekzercero_id join ekzercoj on ekzercoj.id=ekzerceroj.ekzerco_id join lecioneroj on lecioneroj.id=ekzercoj.lecionero_id  join lecionoj on lecioneroj.leciono_id=lecionoj.id  where persono_id=".$persono_id." and lecionoj.numero=".$leciono." and kurso='".$kurso."' order by ekzerceroj.numero";
$result = $bdd->query($query);
$nbReponse = 0;
$lastKomando = "";
while ($row=$result->fetch()) {
	$nbReponse = $nbReponse + 1;
	// si on n'a jamais mis cette consigne, on l'affiche ici :
	if ($row["komando"]!=$lastKomando) {
		$lastKomando=$row["komando"];
		$fonto .= "<h5>".$lastKomando."</h5>\n";
	}	
	$fonto .= "<p>".$row["demando"]."<br>\n";
	if ($row["gxusta"]==1) {
		$fonto .= "<span style=\"color:green\">".$row["respondo"]."</span></p>\n";
	} else {
		$fonto .= "<span style=\"color:blue\">".$row["respondo"]."</span></p>\n";
	}
}
$fonto .= "<p>Commentaire de l'élève :<br>\n";
$fonto .= "<span style=\"color:blue\">".$commentaire_pour_correcteur."</span></p>\n";
$fonto.="</body></html>";
$fonto.="</body></html>";



// on sauvegarde en base la première leçon, mais ce n'est pas vraiment nécessaire
// TODO : à supprimer les deux lignes suivantes
$query = "insert into eraraj_lecionoj (persono_id,enirnomo,dato,subjekto,fonto,leciono,kurso) values ('".$persono_id."','".$persono["enirnomo"]."',now(),'".$sujetMail."','".addslashes($fonto)."','".$leciono."','".$kurso."')";
$bdd->exec($query);


// indiquer que la dernière section a été faite
$query ="select count(*) as combien from personoj_lecioneroj where persono_id=".$persono_id." and lecionero_id=".$lecionero_id;
$result = $bdd->query($query);
$combien = $result->fetch()["combien"];
// on enregistre si il n'y avait rien en base
if ($combien==0) {
	$requete = $bdd->prepare('insert into personoj_lecioneroj(dato,persono_id,lecionero_id,ekdato) values (now(),:persono_id,:lecionero_id,FROM_UNIXTIME(:ekdato))');
	$requete->execute(array('persono_id'=>$persono_id,'lecionero_id'=>$lecionero_id,'ekdato'=>$ekdato));
}

// Trouve le correcteur idéal :
$plejTaugaKorektanto = troviPlejTauganKorektanton($persono_id,$kurso);
$korektanto = apartigiPersonon($plejTaugaKorektanto);

// Envoyer le mail pour informer du correcteur à l'élève
$query = "update personoj set rajtoj='S' where id=".$persono_id; // cxiukaze igas lin studanto.
$result = $bdd->exec($query);
		
$query = "INSERT INTO nuna_kurso (ekdato,lastdato,korektanto,studanto,kurso,nunleciono) VALUES (NOW(),NOW(),".$plejTaugaKorektanto.",".$persono_id.",'".$kurso."',1)";
$result = $bdd->exec($query);

// sendi mesagxon al la nova studanto
$filename = "../mails/doniStu".$kurso."FR.html";
// si le fichier n'existe pas, mets le nom du fichier sans le cours
if (!file_exists($filename)) { $filename = "mails/doniStuFR.html"; }

$fd = fopen($filename, "r");
$contents = fread($fd, filesize ($filename));
fclose($fd);
$studAdreso=$persono["retadreso"];
$contents=str_replace("##KPERSONNOMO##",$korektanto["personnomo"],$contents);
$contents=str_replace("##KRETADRESO##",$korektanto["retadreso"],$contents);
$contents=str_replace("##SENIRNOMO##",$persono["enirnomo"],$contents);
mailViaSES($studAdreso,"Votre correcteur I-kurso",$contents);
		
// sendi mesagxon al la korektanto
$filename = "../mails/doniKor".$kurso."FR.html";
// si le fichier n'existe pas, mets le nom du fichier sans le cours
if (!file_exists($filename)) { $filename = "../mails/doniKorFR.html"; }
$fd = fopen($filename, "r");
$contents = fread($fd, filesize ($filename));
fclose($fd);
$korAdreso=$korektanto["retadreso"];
$contents=str_replace("##SENIRNOMO##",$persono["enirnomo"],$contents);
$contents=str_replace("##SID##",$persono["id"],$contents);
$contents=str_replace("##SURBO##",$persono["urbo"]." (".$persono["lando"].")",$contents);
$contents=str_replace("##SRETADRESO##",$persono["retadreso"],$contents);
$contents=str_replace("##SNASKIGXDATO##",$persono["naskigxdato"],$contents);
$contents=str_replace("##KNOMO##",$korektanto["enirnomo"],$contents);
mailViaSES($korAdreso,"Nouvel élève sur I-kurso",$contents);

// envoyer la leçon au correcteur
mailViaSmtp($korAdreso.",".$persono["enirnomo"]." <".$persono["retadreso"].">",$persono["retadreso"],$sujetMail,stripslashes($fonto));

// on loggue dans le protokolo au cas où
protokolo($persono["id"],"ATTRIBUTION AUTOMATIQUE","l'élève a reçu ".$korektanto["enirnomo"]." comme correcteur");

// Renvoyer la page qui permet d'évaluer la leçon
// on trouve la leçon suivante et on récupère son url :
$respondo["url"] = $prefixeKurso."konfirmo.php?kazo=2&lec=".$leciono;
$respondo["mesagxo"] = "ok";
echo json_encode($respondo);
?>