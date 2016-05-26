<?php
include "lingvo.inc.php";
require("db.inc.php");
malfermidatumbazon();
// cxu la studanto havas jam komencita kurso ?
$query = "select * from nuna_kurso where studanto=$studanto and (stato='K' or stato='N')";
mysql_select_db("ikurso");
$result = mysql_query($query) or die ( "INSERT : Invalid query :".$query);
if (mysql_num_rows($result)>0) {
        header("Location:administri.php?erarkodo=9");
} else {
        // update nuna_kurso
        $query = "update personoj set rajtoj='S' where id=$studanto";
        mysql_select_db( "ikurso");
        $result = mysql_query($query) or die ( "INSERT : Invalid query :".$query);
        $query = "INSERT INTO nuna_kurso (ekdato,korektanto,studanto) VALUES (CURDATE(),'$korektanto','$studanto')";
        $result = mysql_query($query) or die ( "INSERT : Invalid query :".$query);
        // trovi informojn pri studanto kaj korektanto
        $studantinformoj = apartigiPersonon($studanto);
        $korektantinformoj = apartigiPersonon($korektanto);
        // sendi mesagxon al la nova studanto
        $filename = "/home/ikurso/public_html/mails/doniStuFR.html";
        $fd = fopen($filename, "r");
        $contents = fread($fd, filesize ($filename));
        fclose($fd);
        $contents=str_replace("##KPERSONNOMO##",$korektantinformoj["personnomo"],$contents);
        $contents=str_replace("##KRETADRESO##",$korektantinformoj["retadreso"],$contents);
        $contents=str_replace("##SENIRNOMO##",$studantinformoj["enirnomo"],$contents);
        $mesagxkapo="MIME-Version: 1.0".chr(13).chr(10);
        $mesagxkapo.="Content-type: text/html;charset=utf-8".chr(13).chr(10);
        $mesagxkapo.="From: ikurso <ikurso@esperanto-jeunes.org".chr(13).chr(10);
        $mesagxkapo.="Date: ".date("D, j M Y H:i:s").chr(13).chr(10);
        mail($studantinformoj["retadreso"],"Votre correcteur I-kurso",$contents,$mesagxkapo);
        // sendi mesagxon al la korektanto
        $filename = "/home/ikurso/public_html/mails/doniKorFR.html";
        $fd = fopen($filename, "r");
        $contents = fread($fd, filesize ($filename));
        fclose($fd);
        $contents=str_replace("##SENIRNOMO##",$studantinformoj["enirnomo"],$contents);
        $contents=str_replace("##SURBO##",$studantinformoj["urbo"],$contents);
        $contents=str_replace("##SNASKIGXDATO##",$studantinformoj["naskigxdato"],$contents);
        $mesagxkapo="MIME-Version: 1.0".chr(13).chr(10);
        $mesagxkapo.="Content-type: text/html;charset=utf-8".chr(13).chr(10);
        $mesagxkapo.="From: ikurso <ikurso@esperanto-jeunes.org".chr(13).chr(10);
        $mesagxkapo.="Date: ".date("D, j M Y H:i:s").chr(13).chr(10);
        mail($korektantinformoj["retadreso"],"Nouvel élève sur I-kurso",$contents,$mesagxkapo);
        header("Location:administri.php");
}
?>
