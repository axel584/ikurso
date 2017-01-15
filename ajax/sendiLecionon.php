<?php
include "../util.php";
$persono_id=isset($_SESSION["persono_id"])?$_SESSION["persono_id"]:"";
$lecionero_id=isset($_GET["lecionero_id"])?$_GET["lecionero_id"]:"";
$kurso=isset($_GET["kurso"])?$_GET["kurso"]:"";
$leciono=isset($_GET["leciono"])?$_GET["leciono"]:"";
$commentaire_pour_correcteur=isset($_GET["commentaire_pour_correcteur"])?$_GET["commentaire_pour_correcteur"]:"";

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


// envoyer la leçon au correcteur
// on enregistre ses réponses dans la table 
$fonto="<html><head><title>Cours d'Espéranto : leçon ".$leciono."</title>\n";
$fonto.="<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\"\n>";
$fonto.="<style>body{font-family:\"Courier New\", Courier, sans-serif;font-size:small}</style>\n";
$fonto.="</head><body>";

$query = "select demando,respondo from respondoj join lecioneroj on lecioneroj.id=respondoj.lecionero_id join lecionoj on lecioneroj.leciono_id=lecionoj.id where persono_id=".$persono_id." and numero=".$leciono." and kurso='".$kurso."' order by kodo";
$result = $bdd->query($query);
$nbReponse = 0;
while ($row=$result->fetch()) {
	$nbReponse = $nbReponse + 1;
	$fonto .= "<p>".$row["demando"]."<br>\n";
	$fonto .= "<span style=\"color:blue\">".$row["respondo"]."</span></p>\n";
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
	$requete = $bdd->prepare('insert into personoj_lecionoj(dato,persono_id,leciono_id) values (now(),:persono_id,:leciono_id)');
	$requete->execute(array('persono_id'=>$persono_id,'leciono_id'=>$leciono_id));
}

// on récupère des infos de l'élève :
$studanto = apartigiPersonon($persono_id);

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

$resultat = mailViaSmtp($korektantaretadreso.",".$studanto["enirnomo"]." <".$studanto["retadreso"].">",$studanto["retadreso"],$subjekto,stripslashes($fonto));

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
$respondo["url"] = $prefixeKurso."konfirmo.php?kazo=2&lec=".$leciono;
$respondo["mesagxo"] = "ok";
echo json_encode($respondo);
?>