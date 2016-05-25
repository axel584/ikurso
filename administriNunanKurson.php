<?php
function debug($s) {
	//{echo $s;}
}
include "util.php";
$kurso=$_REQUEST["kurso"];
$lingvo="FR";
$pagxtitolo="Donn&eacute;es personnelles";
$persono_id=$_SESSION["persono_id"];
if ($persono_id=="") {header("Location:index.php?erarkodo=8");}
$persono = apartigiPersonon($persono_id);
$celpersono_id=$_REQUEST["celpersono_id"];
if ($celpersono_id!="") { $celpersono = apartigiPersonon($celpersono_id);}
if ($persono["rajtoj"]!='A'){header("Location:index.php?erarkodo=4");}
$parto=isset($_GET["parto"])?$_GET["parto"]:"";
if ($parto=="") {$parto=1;}
$korektanto_id=$_POST["korektanto_id"];

// doni korektanton
debug ("korektanto_id=".$korektanto_id."<br>");
debug ("cours choisi kurso=".$kurso."<br>");
if ($korektanto_id=="") {
	header("Location:administri.php?celpersono_id=$celpersono_id&erarkodo=11");
	exit;
}

// cxu la studanto havas jam komencitan kurson ?
// ER: prise en compte de la derniere lecon envoyee
debug ("chercher s'il a déjà un cours commencé<br>");
$nunleciono=NULL;
$query = "select * from nuna_kurso where studanto=$celpersono_id and kurso='$kurso' and (stato='K' or stato='N')";
$result = $bdd->query($query) or die(print_r($bdd->errorInfo()));
$row=$result->fetch();
if ($row['korektanto']!="") {
	$nunleciono=$row["nunleciono"];
	if ($row["korektanto"]!=$korektanto_id) { 
		debug ("c'est un autre : il s'agit d'un changement de correcteur");
		//echo "cas 1 : changement de correcteur<br>";
		// la malnova korektanto malsamas la novan elektitan korektanton.
		// jam havas korektanton : sxangxi la korektanton
		$query = "update nuna_kurso set korektanto=$korektanto_id where studanto=$celpersono_id";
		$result = $bdd->exec($query);
		
		// trovi informojn pri studanto kaj korektanto
		$studantinformoj = apartigiPersonon($celpersono_id);
		$korektantinformoj = apartigiPersonon($korektanto_id);
		// sendi mesagxon al la nova studanto
		$filename = "mails/redoniStu".$kurso."FR.html";
		// si le fichier n'existe pas, mets le nom du fichier sans le cours
		if (!file_exists($filename)) { $filename = "mails/redoniStuFR.html"; }
		$fd = fopen($filename, "r");
		$contents = fread($fd, filesize ($filename));
		fclose($fd);
		$contents=str_replace("##KPERSONNOMO##",$korektantinformoj["personnomo"],$contents);
		$contents=str_replace("##KRETADRESO##",$korektantinformoj["retadreso"],$contents);
		$contents=str_replace("##SENIRNOMO##",$studantinformoj["enirnomo"],$contents);
		$mesagxkapo="MIME-Version: 1.0\n";
		$mesagxkapo.="Content-type: text/html;charset=utf-8\n";
		$mesagxkapo.="From: Ikurso <cours-esperanto@esperanto-jeunes.org>\n";
		$mesagxkapo.="Bcc: <kopiokurso@esperanto-jeunes.org>\n";
		$mesagxkapo.="Date: ".date("D, j M Y H:i:s").chr(13);
		$mesagxkapo.=" \n";
		mail($studantinformoj["retadreso"],"Votre correcteur I-kurso",$contents,$mesagxkapo);

		// sendi mesagxon al la korektanto
		$filename = "mails/redoniKor".$kurso."FR.html";
		// si le fichier n'existe pas, mets le nom du fichier sans le cours
		if (!file_exists($filename)) { $filename = "mails/redoniKorFR.html"; }
		$fd = fopen($filename, "r");
		$contents = fread($fd, filesize ($filename));
		fclose($fd);
		$contents=str_replace("##SENIRNOMO##",$studantinformoj["enirnomo"],$contents);
		$contents=str_replace("##SLANDO##",$studantinformoj["lando"],$contents);
		$contents=str_replace("##SPOSXTKODO##",$studantinformoj["posxtkodo"],$contents);
		$contents=str_replace("##SURBO##",$studantinformoj["urbo"],$contents);
		$contents=str_replace("##SRETADRESO##",$studantinformoj["retadreso"],$contents);
		$contents=str_replace("##SNASKIGXDATO##",$studantinformoj["naskigxdato"],$contents);
		$mesagxkapo="MIME-Version: 1.0\n";
		$mesagxkapo.="Content-type: text/html;charset=utf-8\n";
		$mesagxkapo.="From: Ikurso <cours-esperanto@esperanto-jeunes.org>\n";
		$mesagxkapo.="Bcc: <kopiokurso@esperanto-jeunes.org>\n";
		$mesagxkapo.="Date: ".date("D, j M Y H:i:s").chr(13);
		$mesagxkapo.=" \n";
		mail($korektantinformoj["retadreso"],"Nouvel élève sur I-kurso",$contents,$mesagxkapo);

	}
} else {
	//echo "cas 2 : n'a jamais eu de correcteur<br>";
	// neniam havis korektanton
	if ($korektanto_id!="") { 
		// li volas korektanton
		// update nuna_kurso
		$query = "update personoj set rajtoj='S' where id=$celpersono_id"; // cxiukaze igas lin studanto.
		$result = $bdd->exec($query);
		
		$query = "INSERT INTO nuna_kurso (ekdato,lastdato,korektanto,studanto,kurso) VALUES (NOW(),NOW(),".$korektanto_id.",".$celpersono_id.",'".$kurso."')";
		$result = $bdd->exec($query);

		// trovi informojn pri studanto kaj korektanto
		$studantinformoj = apartigiPersonon($celpersono_id);	
		$korektantinformoj = apartigiPersonon($korektanto_id);
		// sendi mesagxon al la nova studanto
		$filename = "mails/doniStu".$kurso."FR.html";
		// si le fichier n'existe pas, mets le nom du fichier sans le cours
		if (!file_exists($filename)) { $filename = "mails/doniStuFR.html"; }
		
		$fd = fopen($filename, "r");
		$contents = fread($fd, filesize ($filename));
		fclose($fd);
		$studAdreso=$studantinformoj["retadreso"];
		$contents=str_replace("##KPERSONNOMO##",$korektantinformoj["personnomo"],$contents);
		$contents=str_replace("##KRETADRESO##",$korektantinformoj["retadreso"],$contents);
		$contents=str_replace("##SENIRNOMO##",$studantinformoj["enirnomo"],$contents);
		$mesagxkapo="MIME-Version: 1.0\n";
		$mesagxkapo.="Content-type: text/html;charset=utf-8\n";
		$mesagxkapo.="From: ikurso <ikurso@esperanto-jeunes.org>\n";
		$mesagxkapo.="Bcc: <kopiokurso@esperanto-jeunes.org>\n";
		$mesagxkapo.="Date: ".date("D, j M Y H:i:s").chr(13);
		$mesagxkapo.=" \n";

		debug ("envoyer le mail à l'éléve (désactivé pour le test)");
		mail($studAdreso,"Votre correcteur I-kurso",$contents,$mesagxkapo);
		
		// sendi mesagxon al la korektanto
		$filename = "mails/doniKor".$kurso."FR.html";
		// si le fichier n'existe pas, mets le nom du fichier sans le cours
		if (!file_exists($filename)) { $filename = "mails/doniKorFR.html"; }
		$fd = fopen($filename, "r");
		$contents = fread($fd, filesize ($filename));
		fclose($fd);
		$korAdreso=$korektantinformoj["retadreso"];
		$contents=str_replace("##SENIRNOMO##",$studantinformoj["enirnomo"],$contents);
		$contents=str_replace("##SURBO##",$studantinformoj["urbo"]." (".$studantinformoj["lando"].")",$contents);
		$contents=str_replace("##SRETADRESO##",$studantinformoj["retadreso"],$contents);
		$contents=str_replace("##SNASKIGXDATO##",$studantinformoj["naskigxdato"],$contents);
		$contents=str_replace("##KNOMO##",$korektantinformoj["enirnomo"],$contents);
		$contents=str_replace("##KPASVORTO##",$korektantinformoj["pasvorto"],$contents);
		$mesagxkapo="MIME-Version: 1.0\n";
		$mesagxkapo.="Content-type: text/html;charset=utf-8\n";
		$mesagxkapo.="From: ikurso <cours-esperanto@esperanto-jeunes.org>\n";
		$mesagxkapo.="Bcc: <kopiokurso@esperanto-jeunes.org>\n";
		$mesagxkapo.="Date: ".date("D, j M Y H:i:s").chr(13);
		$mesagxkapo.=" \n";
		mail($korAdreso,"Nouvel élève sur I-kurso",$contents,$mesagxkapo);

	}
}
// se la lernanto jam faris taskojn de Gerda aux DLEK
// preni liajn taskojn el eraraj_lecionoj kaj sendi ilin al lia nova korektanto
if (($nunleciono==NULL) and ($kurso=='GR'||$kurso=='CG')){
	debug ("l'élève a déjà fait une leçon : il faut lui envoyer");
	($kurso=="GR")?($subjekto="gerda%"):($subjekto="lec%");
	$query = "select * from eraraj_lecionoj where persono_id=$celpersono_id and subjekto like '$subjekto'";
	
	$result = $bdd->query($query) or die ( "SELECT : Invalid query :".$query);
	while($row = $result->fetch()) {
		$subjekto=$row["subjekto"];
		$fonto=$row["fonto"];
		$korektantaretadreso=$korektantinformoj["retadreso"];
		$mesagxkapo="MIME-Version: 1.0\n";
		$mesagxkapo.="Content-type: text/html;charset=utf-8\n";
		$mesagxkapo.="From: ikurso <cours-esperanto@esperanto-jeunes.org>\n";
		$mesagxkapo.="Reply-To: ".$celpersono["enirnomo"]." <".$celpersono["retadreso"].">\n";
		$mesagxkapo.="Cc: ".$celpersono["enirnomo"]." <".$celpersono["retadreso"].">\n";
		$mesagxkapo.="Bcc: <kopiokurso@esperanto-jeunes.org>\n";
		$mesagxkapo.="Date: ".date("D, j M Y H:i:s").chr(13);
		mail($korektantaretadreso,$subjekto,stripslashes($fonto),$mesagxkapo);
		// gxisdatigi liajn datumojn en nuna_kurso
		if (substr($subjekto, 0, 5)=="gerda"){$nunleciono=substr($subjekto,10,2);}
		else if (substr($subjekto, 0, 3)=="lec"){$nunleciono=substr($subjekto,3,2);}
		else {$nunleciono=1;}
		$query = "update nuna_kurso set nunleciono=$nunleciono,stato='K',lastdato=CURDATE() where studanto=$celpersono_id and (stato='N' or stato='K') and kurso='$kurso'";
		$bdd->exec($query);
	}
}
header("Location:administri.php?celpersono_id=$celpersono_id&validi=jes");

?>
