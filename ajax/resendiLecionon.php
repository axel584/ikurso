<?php
include "../util.php";
$persono_id=isset($_GET["studanto_id"])?$_GET["studanto_id"]:"";
$lecionero_id=isset($_GET["lecionero_id"])?$_GET["lecionero_id"]:"";
$kurso=isset($_GET["kurso"])?$_GET["kurso"]:"";
$leciono=isset($_GET["leciono"])?$_GET["leciono"]:"";
$expediteurIkurso = isset($_GET["expediteur_ikurso"])?$_GET["expediteur_ikurso"]:"";

// Attention, beaucoup de code en commun avec sendiLecionon.php

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

// on récupère le commentaire qui se trouve en base :
$query ="select id from lecionoj where kurso='".$kurso."' and numero='".$leciono."'";
$result = $bdd->query($query);
$leciono_id = $result->fetch()["id"];
$query = "select komentario from personoj_lecionoj where persono_id='".$persono_id."' and leciono_id='".$leciono_id."'";
$result = $bdd->query($query);
$commentaire_pour_correcteur = $result->fetch()["komentario"];

// envoyer la leçon au correcteur
// on enregistre ses réponses dans la table 
$fonto="<html><head><title>Cours d'Espéranto : leçon ".$leciono."</title>\n";
$fonto.="<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\"\n>";
$fonto.="<style>body{font-family:\"Courier New\", Courier, sans-serif;font-size:small}</style>\n";
$fonto.="</head><body>";

// on ajoute dans le mail l'adresse email de l'élève :
$fonto .= "<p>Sendu vian korekton al : ".$studanto["retadreso"]."<br>\n";

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

//echo $fonto;

// vérifier si l'élève a bien rempli "au moins une réponse"

if ($nbReponse==0) {
	$respondo["type"]="NeniuRespondo";
	$respondo["mesagxo"]="Aucune réponse";
	echo json_encode($respondo);
	exit();	
}

// on récupère des infos sur le cours :
// on récupère quelques infos sur le cours :
if ($kurso=="CG") {
	$prefixeKurso = "fr/cge/";
	$subjekto = "lec".sprintf('%02d', $leciono)." de ".$studanto["enirnomo"];
} 
if ($kurso=="GR") {
	$prefixeKurso = "fr/gerda/";
	$subjekto = "gerda cxap".sprintf('%02d', $leciono)." de ".$studanto["enirnomo"];
} 
if ($kurso=="3N") {
	$prefixeKurso = "fr/3n/";
	$subjekto = "leciono ".sprintf('%02d', $leciono)." de ".$studanto["enirnomo"];
}

// si le correcteur a coché la case, on envoit la leçon par Amazon SES
if ($expediteurIkurso=="true") {
	mailViaSES($korektantaretadreso,$subjekto,stripslashes($fonto));
} else {
	mailViaSmtp($korektantaretadreso,$studanto["retadreso"],$subjekto,stripslashes($fonto));
}

// passer à la page d'évaluation de la leçon
$respondo["mesagxo"] = "ok";
echo json_encode($respondo);
?>