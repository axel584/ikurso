<?php
include "util.php";
malfermidatumbazon();
mysql_select_db("ikurso");
$studanto_id=$_POST["studanto"];
$nomo=$_POST["enirnomo"];
$idnunaKurso=$_POST["idnunaKurso"];
$persono_id=$_SESSION["persono_id"];
if ($persono_id=="") {header("Location:index.php?erarkodo=8");}

$korektanto = apartigiPersonon($persono_id);
$studanto = apartigiPersonon($studanto_id);
if (($korektanto["rajtoj"]!='A')&&($korektanto["rajtoj"]!='K')) {header("Location:index.php?erarkodo=4");}

// sxangxi la staton de la lernanto al 'K'

$demando = "update nuna_kurso set stato='K' where id=".$idnunaKurso."";
$result = mysql_query($demando) or die ( "UPDATE : Invalid query :".$demando);
// trace protokolo
$teksto="lernanto=".$nomo." (".$studanto.")";
$protokolo = new protokolo;
$protokolo->set_persono_id($persono->get_id());
$protokolo->set_kategorio("REPRENIS LERNANTON");
$protokolo->set_teksto($teksto);
$protokolo->store();
// cxu la studanto havas jam komencitan kurson ?
$query = "select * from nuna_kurso where id=$idnunaKurso";
mysql_select_db("ikurso");
$result = mysql_query($query) or die ( "INSERT : Invalid query :".$query);
if (mysql_num_rows($result)>0) {
	$row = mysql_fetch_array($result);
	$nunleciono=$row["nunleciono"];
	$kurso=$row["kurso"];
	if (($nunleciono!=NULL) and ($kurso=='GR'||$kurso=='CG')){
		($kurso=="GR")?($subjekto="gerda%"):($subjekto="lec%");
		$query2 = "select * from eraraj_lecionoj where persono_id=$studanto_id and subjekto like '$subjekto'";
		mysql_select_db( "ikurso");
		$result2 = mysql_query($query2) or die ( "SELECT : Invalid query :".$query2);
		while($row2 = mysql_fetch_array($result2)) {
			$subjekto=$row2["subjekto"]." (".$studanto['enirnomo'].")";
			$fonto=$row2["fonto"];
			$korektantaretadreso=$korektanto["retadreso"];
			$mesagxkapo="MIME-Version: 1.0\n";
			$mesagxkapo.="Content-type: text/html;charset=utf-8\n";
			$mesagxkapo.="From: ".$studanto["enirnomo"]." <".$studanto["retadreso"].">\n";
			$mesagxkapo.="Cc: ".$studanto["enirnomo"]." <".$studanto["retadreso"].">\n";
			$mesagxkapo.="Bcc: kopiokurso@esperanto-jeunes.org\n";
			$mesagxkapo.="Date: ".date("D, j M Y H:i:s").chr(13);
			mail($korektantaretadreso,$subjekto,stripslashes($fonto),$mesagxkapo);
			// gxisdatigi liajn datumojn en nuna_kurso
			if (substr($subjekto, 0, 5)=="gerda"){$nunleciono=substr($subjekto,10,2);}
			else if (substr($subjekto, 0, 3)=="lec"){$nunleciono=substr($subjekto,3,2);}
			else {$nunleciono=1;}
			$query3 = "update nuna_kurso set nunleciono=$nunleciono,stato='K',lastdato=CURDATE() where studanto=$studanto_id and (stato='N' or stato='K') and kurso='$kurso'";
			mysql_select_db( "ikurso");
			$result3 = mysql_query($query3) or die ( "UPDATE : Invalid query :".$query3);
			// forigi la senditan lecionon el la tabelo nuna_kurso
			$query4 = "delete from eraraj_lecionoj where id='".$row2['id']."'";
			mysql_select_db( "ikurso");
			$result4 = mysql_query($query4);
		}
	}
}
header("Location:miajlernantoj.php");
?>                    