<?php
include "../util.php";
$persono_id=isset($_SESSION["persono_id"])?$_SESSION["persono_id"]:"";
$persono = apartigiPersonon($persono_id);
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
$query = "select count(*) as combien from respondoj join lecioneroj on lecioneroj.id=respondoj.lecionero_id join lecionoj on lecioneroj.leciono_id=lecionoj.id where persono_id=".$persono_id." and numero=".$leciono." and kurso='".$kurso."'";
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

$query = "select demando,respondo from respondoj join lecioneroj on lecioneroj.id=respondoj.lecionero_id join lecionoj on lecioneroj.leciono_id=lecionoj.id where persono_id=".$persono_id." and numero=".$leciono." and kurso='".$kurso."' order by kodo";
$result = $bdd->query($query);
while ($row=$result->fetch()) {
	$fonto .= "<p>".$row["demando"]."<br>\n";
	$fonto .= "<span style=\"color:blue\">".$row["respondo"]."</span></p>\n";
}
$fonto .= "<p>Commentaire de l'élève :<br>\n";
$fonto .= "<span style=\"color:blue\">".$commentaire_pour_correcteur."</span></p>\n";
$fonto.="</body></html>";
$fonto.="</body></html>";

$query = "insert into eraraj_lecionoj (persono_id,enirnomo,dato,subjekto,fonto,leciono,kurso) values ('".$persono_id."','".$persono["enirnomo"]."',now(),'".$sujetMail."','".addslashes($fonto)."','".$leciono."','".$kurso."')";
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

// Renvoyer la page qui permet d'évaluer la leçon
// on trouve la leçon suivante et on récupère son url :
$respondo["url"] = $prefixeKurso."konfirmo.php?kazo=2&lec=".$leciono;
$respondo["mesagxo"] = "ok";
echo json_encode($respondo);
?>