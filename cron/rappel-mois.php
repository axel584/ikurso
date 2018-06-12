<?php
include "../db.inc.php";
include "../util.php";
malfermidatumbazon();

// Premier rappel le 5 du mois
$query = "SELECT distinct personoj.id,enirnomo,retadreso,personnomo,familinomo,nuna_kurso.korektanto FROM nuna_kurso,personoj where nuna_kurso.korektanto=personoj.id and nuna_kurso.stato='K' and lastdato<DATE_SUB(CURDATE(), INTERVAL 30 DAY) order by korektanto";
$result = $bdd->query($query);
 while($row = $result->fetch()) {
 	protokolo($row["id"],"ENVOIE RAPPEL","Envoie d'un message de rappel au correcteur");
 	$retadreso_correcteur = $row["retadreso"];
 	$personnomo_correcteur = $row["personnomo"];
 	$query2 = "SELECT personoj.id,enirnomo,retadreso,personnomo,familinomo,nuna_kurso.korektanto,nuna_kurso.lastdato FROM nuna_kurso,personoj where nuna_kurso.studanto=personoj.id and nuna_kurso.stato='K' and lastdato<DATE_SUB(CURDATE(), INTERVAL 30 DAY) and korektanto=".$row["korektanto"];
 	$result2 = $bdd->query($query2);
 	$eleves = "";
 	echo "<br/>-----------------------------------------------------------------<br/>";
 	while($row2 = $result2->fetch()) {
 		$eleves .= $row2["enirnomo"]." (<a href='mailto:".$row2["retadreso"]."'>".$row2["retadreso"].")</a><br/>";
 	}
    echo $row["id"].":".$row["retadreso"].":"; 
    if ($eleves=="") {
    	continue;
    }

    // chargement du fichier email
    $filename = "../mails/rappel-correcteur.html";
    $fd = fopen($filename, "r");
	$contents = fread($fd, filesize ($filename));
	fclose($fd);
	// personnalisation :
	$contents=str_replace("##ID##",$row["id"],$contents);
	$contents=str_replace("##NOM##",$personnomo_correcteur,$contents);
	$contents=str_replace("##ELEVES##",$eleves,$contents);
	echo $contents;
	echo "<br/>-----------------------------------------------------------------<br/>";
	// envoie de l'email
	mailViaSES($retadreso_correcteur,"Cours d'espéranto : des élèves en retard !",$contents);
}
?>