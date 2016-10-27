<?php
include "util.php";
malfermidatumbazon();
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
$result = $bdd->exec($demando);
// trace protokolo
$teksto="lernanto=".$nomo." (".$studanto_id.")";
protokolo($persono_id,"REPRENIS LERNANTON",$teksto);
// cxu la studanto havas jam komencitan kurson ?
$query = "select * from nuna_kurso where id=$idnunaKurso";
$result = $bdd->query($query);
$row = $result->fetch();
if ($row["kurso"]!="") {
	$nunleciono=$row["nunleciono"];
	$kurso=$row["kurso"];
	if (($nunleciono!=NULL) and ($kurso=='GR'||$kurso=='CG')){
		($kurso=="GR")?($subjekto="gerda%"):($subjekto="lec%");
		$query2 = "select * from eraraj_lecionoj where persono_id=$studanto_id and subjekto like '$subjekto'";
		
		$result2 = $bdd->query($query2);
		while($row2 = $result2->fetch()) {
			$subjekto=$row2["subjekto"]." (".$studanto['enirnomo'].")";
			$fonto=$row2["fonto"];
			$korektantaretadreso=$korektanto["retadreso"];
			$mesagxkapo="MIME-Version: 1.0\n";
			$mesagxkapo.="Content-type: text/html;charset=utf-8\n";
			$mesagxkapo.="From: ".$studanto["enirnomo"]." <".$studanto["retadreso"].">\n";
			$mesagxkapo.="Cc: ".$studanto["enirnomo"]." <".$studanto["retadreso"].">\n";
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