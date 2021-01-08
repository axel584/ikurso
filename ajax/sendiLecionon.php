<?php
include "../util.php";
$persono_id=isset($_SESSION["persono_id"])?$_SESSION["persono_id"]:"";
$lecionero_id=isset($_GET["lecionero_id"])?$_GET["lecionero_id"]:"";
$kurso=isset($_GET["kurso"])?$_GET["kurso"]:"";
$leciono=isset($_GET["leciono"])?$_GET["leciono"]:"";
$commentaire_pour_correcteur=isset($_GET["commentaire_pour_correcteur"])?$_GET["commentaire_pour_correcteur"]:"";

// Attention, beaucoup de code en commun avec resendiLecionon.php

if ($persono_id=="") { // personne non connecté, on ressort
	$respondo["type"]="session";
	$respondo["mesagxo"]="Session expirée";
	echo json_encode($respondo);
	exit();
}


// vérifier si l'élève a déjà un correcteur pour ce cours :
$query = "select * from nuna_kurso join personoj on personoj.id=nuna_kurso.korektanto where nuna_kurso.kurso='".$kurso."' and studanto=".$persono_id;
$result = $bdd->query($query);
$row = $result->fetch();
if (!$row) {
	$respondo["type"]="korektanto";
	$respondo["mesagxo"]="Pas de correcteur";
	echo json_encode($respondo);
	exit();
} else {
	// on prends les infos du correcteur dont on pourra avoir besoin
	$korektantaretadreso = $row["retadreso"];
}


// on récupère des infos de l'élève :
$studanto = apartigiPersonon($persono_id);

// envoyer la leçon au correcteur
// on enregistre ses réponses dans la table 
$fonto="<html><head><title>Cours d'Espéranto : leçon ".$leciono."</title>\n";
$fonto.="<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\"\n>";
$fonto.="<style>body{font-family:\"Courier New\", Courier, sans-serif;font-size:small}</style>\n";
$fonto.="</head><body>";

// on ajoute dans le mail l'adresse email de l'élève :
$fonto .= "<p>Sendu vian korekton al : ".$studanto["retadreso"]."<br>\n";

// Attention, code commun avec petiKorektanton.php et resendiLecionon.php

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

// vérifier si l'élève a bien rempli "au moins une réponse"

if ($nbReponse==0) {
	$respondo["type"]="NeniuRespondo";
	$respondo["mesagxo"]="Aucune réponse";
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
	$requete = $bdd->prepare('insert into personoj_lecionoj(dato,persono_id,leciono_id,komentario) values (now(),:persono_id,:leciono_id,:komentario)');
	$requete->execute(array('persono_id'=>$persono_id,'leciono_id'=>$leciono_id,'komentario'=>$commentaire_pour_correcteur));
}

// on récupère des infos sur le cours :
// on récupère quelques infos sur le cours :
if ($kurso=="CG") {
	$prefixeKurso = "fr/cge/";
	$subjekto = "lec".sprintf('%02d', $leciono)." de ".$persono["enirnomo"];
} 
if ($kurso=="GR") {
	$prefixeKurso = "fr/gerda/";
	$subjekto = "gerda cxap".sprintf('%02d', $leciono)." de ".$persono["enirnomo"];
} 
if ($kurso=="3N") {
	$prefixeKurso = "fr/3n/";
	$subjekto = "leciono ".sprintf('%02d', $leciono)." de ".$persono["enirnomo"];
}

// envoi au correcteur + copie à l'élève
mailViaSmtp($korektantaretadreso,$studanto["retadreso"],$subjekto,stripslashes($fonto));
mailViaSES($studanto["retadreso"],"Copie de ".$subjekto,stripslashes($fonto));

// sendi atentigon pro problemo pri sendado de retmesaghoj
$filename = "../mails/novaleciono.html";
$fd = fopen($filename, "r");
$contents = fread($fd, filesize ($filename));
fclose($fd);
$url = $urlracine."vidiLecionon.php?numleciono=".$leciono."&kurso=".$kurso."&studanto=".$persono_id;
$contents=str_replace("##URL##",$url,$contents);
mailViaSES($korektantaretadreso,"Nouvelle leçon de ".$persono["enirnomo"],$contents);


// gxisdatigi liajn datumojn en nuna_kurso
$query = "update nuna_kurso set nunleciono=".$leciono.",stato='K',lastdato=CURDATE() where studanto=".$persono_id." and kurso='".$kurso."'";
$bdd->exec($query);

// indiquer que la dernière section a été faite
$query ="select count(*) as combien from personoj_lecioneroj where persono_id=".$persono_id." and lecionero_id=".$lecionero_id;
$result = $bdd->query($query);
$combien = $result->fetch()["combien"];
// on enregistre si il n'y avait rien en base
if ($combien==0) {
	$requete = $bdd->prepare('insert into personoj_lecioneroj(dato,persono_id,lecionero_id) values (now(),:persono_id,:lecionero_id)');
	$requete->execute(array('persono_id'=>$persono_id,'lecionero_id'=>$lecionero_id));
}


// passer à la page d'évaluation de la leçon
// le kazo 1 correspond au cas où on a déjà un correcteur
$respondo["url"] = $prefixeKurso."konfirmo.php?kazo=1&lec=".$leciono;
$respondo["mesagxo"] = "ok";
echo json_encode($respondo);
?>