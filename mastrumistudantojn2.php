<?
require("db.inc.php");
malfermidatumbazon();
mysql_select_db("ikurso");
for ($i=1;$i<=$maksimumo;$i++) {
// trancxas la senditan formularon en studanto-leciono (1-2)
        $nomo = "studanto".$i;
        ereg("(.*)-(.*)", ${$nomo},$rezultoj);
   // kio estis la nuna leciono antauxe ?
$query="select stato,nunleciono from nuna_kurso where id=".$rezultoj[1];
   $result = mysql_query($query) or die ( "INSERT : Invalid query :".$query);
   $row = mysql_fetch_array($result);
        // se la nunleciono sxangxis (rezultoj 2), ni devus updati la datumbazon
        if ($rezultoj[2]!='F' and $rezultoj[2]!='H' and $rezultoj[2]!='N' and $rezultoj[2]!=$row["nunleciono"]) {
                $query = "update nuna_kurso set nunleciono=".$rezultoj[2].",stato='K',lastdato=CURDATE() where id=".$rezultoj[1]." and (stato='N' or stato='K')";
                $result = mysql_query($query) or die ( "UPDATE : Invalid query :".$query);

        }
        // se la nova stato estas F(inita), sed la malnova ne estis F, ni updatas ! :-)
        if ($rezultoj[2]=='F' and $row["stato"]!='F') {
                $query = "update nuna_kurso set stato='F',findato=CURDATE(),lastdato=CURDATE() where id=".$rezultoj[1]." and (stato='N' or stato='K')";
                $result = mysql_query($query) or die ( "UPDATE : Invalid query :".$query);
                // tiam ni sendas retmesagxon al la informistoj
				$filename = "mails/finiInfFR.html";
				if (file_exists($filename)) { 
					$fd = fopen($filename, "r");
                	$contents = fread($fd, filesize ($filename));
                	fclose($fd);
                	$mesagxkapo="MIME-Version: 1.0\n";
                	$mesagxkapo.="Content-type: text/html;charset=utf-8\n";
                	$mesagxkapo.="From: Ikurso <ikurso@esperanto-france.org>\n";
                	$mesagxkapo.="Date: ".date("D, j M Y H:i:s").chr(13);
                	//prenu la liston de cxiuj informistoj 
                	$demando="select retadreso from personoj where rajtoj='I'";
                    $result = mysql_query($demando) or die ("INSERT : Invalid query :".$query);
                    $row=mysql_fetch_array($result);
                    $informistoj=$row["retadreso"];
                    while ($row=mysql_fetch_array($result)) {
                           $informistoj=$informistoj.",".$row["retadreso"];
                    }
                    //prenu cxiuj informoj pri la studanto.
                    $demando="select * from personoj,nuna_kurso where nuna_kurso.id=".$rezultoj[1]." and personoj.id=nuna_kurso.studanto";
                    $result = mysql_query($demando) or die ("INSERT : Invalid query :".$query);
                    $row=mysql_fetch_array($result);
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
                    if ($row["retadreso"]=="richard.emmanuelle@wanadoo.fr")
								{$informistoj="richard.emmanuelle@wanadoo.fr";}
                    //prenu nomon de lia kurso :
                    $demando="select kursoj.nomo from kursoj,nuna_kurso where kursoj.kodo=nuna_kurso.kurso and nuna_kurso.id=".$rezultoj[1]."";
                    $result = mysql_query($demando) or die ("INSERT : Invalid query :".$query);
                    $row=mysql_fetch_array($result);
                    $contents=str_replace("##KURSO##",$row["nomo"],$contents);
                    //prenu nomon de lia korektanto
                    $demando="select personoj.enirnomo from personoj,nuna_kurso where personoj.id=nuna_kurso.korektanto and nuna_kurso.id=".$rezultoj[1];
                    $result = mysql_query($demando) or die ("INSERT : Invalid query :".$query);
                    $row=mysql_fetch_array($result);
                    $contents=str_replace("##KOREKTANTO##",$row["enirnomo"],$contents);
                    // envoyer le mail aux informateurs
                    $teksto=iconv('iso-8859-1', 'utf-8', $contents);
							mail($informistoj,"un esperantiste de plus !",$teksto,$mesagxkapo);
				}
        }
        // se la nova stato estas H(altita), sed la malnova ne estis F, ni updatas ! :-)
        if ($rezultoj[2]=='H' and $row["stato"]!='H') {
                $query = "update nuna_kurso set stato='H',findato=CURDATE(),lastdato=CURDATE() where id=".$rezultoj[1]." and (stato='N' or stato='K')";
                $result = mysql_query($query) or die ( "UPDATE : Invalid query :".$query);
        }
}
header("Location:mastrumistudantojn.php?validi=jes");
?>
                    
