<?php
require("db.inc.php");
malfermidatumbazon();
$leciono=$_POST["leciono"];
$nunleciono=$_POST["nunleciono"];
$rezultoj=explode("-", $leciono);

//sxangxi lastan lecionon por iu lernanto
$query="select stato,nunleciono from nuna_kurso where id=".$rezultoj[0];
$result = $bdd->query($query) or die(print_r($bdd->errorInfo()));
$row = $result->fetch();
// se la nunleciono sxangxis (rezultoj 2), ni devus updati la datumbazon
if ($rezultoj[1]!='F' and $rezultoj[1]!='H' and $rezultoj[1]!='N' and $rezultoj[1]!=$row["nunleciono"]) {
	$query = "update nuna_kurso set nunleciono=".$rezultoj[1].",stato='K',lastdato=CURDATE() where id=".$rezultoj[0]." and (stato='N' or stato='K')";
	$result = $bdd->exec($query);
}
// se la nova stato estas F(inita), sed la malnova ne estis F, ni updatas ! :-)
if ($rezultoj[1]=='F' and $row["stato"]!='F') {
	$query = "update nuna_kurso set stato='F',findato=CURDATE(),lastdato=CURDATE() where id=".$rezultoj[0]." and (stato='N' or stato='K')";
	$result = $bdd->exec($query);
	// tiam ni sendas retmesagxon al la informistoj
	$filename = "mails/finiInfFR.html";
	if (file_exists($filename)) { 
		$fd = fopen($filename, "r");
		$contents = fread($fd, filesize ($filename));
		fclose($fd);
		$mesagxkapo="MIME-Version: 1.0\n";
		$mesagxkapo.="Content-type: text/html;charset=utf-8\n";
		$mesagxkapo.="From: Ikurso <ikurso@esperanto-jeunes.org>\n";
		$mesagxkapo.="Date: ".date("D, j M Y H:i:s").chr(13);
		//prenu la liston de cxiuj informistoj (kiu uzas la tauxgan lingvon)
		$demando="select retadreso from personoj where rajtoj='I' and lingvo='fr'";
		$result = $bdd->query($demando) or die(print_r($bdd->errorInfo()));
		$row=$result->fetch();
		$informistoj=$row["retadreso"]; 
		// on a mis à jour cette ligne pour que le bezouille releve les mails des eleves qui ont fini
		while ($row=$result->fetch()) {
		      $informistoj=$informistoj.",".$row["retadreso"];
		}
	}
	//prenu cxiujn informojn pri la studanto.
	$demando="select * from personoj,nuna_kurso where nuna_kurso.id=".$rezultoj[0]." and personoj.id=nuna_kurso.studanto and lingvo='FR'";
	$result = $bdd->query($demando) or die(print_r($bdd->errorInfo()));
	$row=$result->fetch();
	$contents=str_replace("##ENIRNOMO##",$row["enirnomo"],$contents);
	$contents=str_replace("##NASKIGXDATO##",$row["naskigxdato"],$contents);
	$contents=str_replace("##PERSONNOMO##",$row["personnomo"],$contents);
	$contents=str_replace("##FAMILINOMO##",$row["familinomo"],$contents);
	$contents=str_replace("##SEKSO##",$row["sekso"],$contents);
	$contents=str_replace("##RETADRESO##",$row["retadreso"],$contents);
	$contents=str_replace("##ADRESO1##",$row["adreso1"],$contents);
	$contents=str_replace("##ADRESO2##",$row["adreso2"],$contents);
	$contents=str_replace("##LANDO##",$row["lando"],$contents);
	$contents=str_replace("##POSXTKODO##",$row["posxtkodo"],$contents);
	$contents=str_replace("##URBO##",$row["urbo"],$contents);
	//prenu nomon de lia kurso :
	$demando="select kursoj.nomo from kursoj,nuna_kurso where kursoj.kodo=nuna_kurso.kurso and nuna_kurso.id=".$rezultoj[0]." and kursoj.lingvo='FR'";
	$result = $bdd->query($demando) or die(print_r($bdd->errorInfo()));
	$row=$result->fetch();
	$contents=str_replace("##KURSO##",$row["nomo"],$contents);
	//prenu nomon de lia korektanto
	$demando="select personoj.enirnomo from personoj,nuna_kurso where personoj.id=nuna_kurso.korektanto and nuna_kurso.id=".$rezultoj[0];
	$result = $bdd->query($demando) or die(print_r($bdd->errorInfo()));
	$row=$result->fetch();
	$contents=str_replace("##KOREKTANTO##",$row["enirnomo"],$contents);
	
	// envoyer le mail aux informateurs
	//$informistoj="emmanuelle@esperanto-jeunes.org";
	mail($informistoj,"un esperantiste de plus !",$contents,$mesagxkapo);
}
// se la nova stato estas H(altita), sed la malnova ne estis H, ni updatas ! :-)
if ($rezultoj[1]=='H' and $row["stato"]!='H') {
	$query = "update nuna_kurso set stato='H',findato=CURDATE(),lastdato=CURDATE() where id=".$rezultoj[0]." and (stato='N' or stato='K')";
	$result = $bdd->exec($query);
}
header("Location:miajlernantoj.php");
?>                    