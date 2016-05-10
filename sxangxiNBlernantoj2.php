<?php
include "util.php";
malfermidatumbazon();
$persono_id=$_SESSION["persono_id"];
$teksto="kiom_lernantoj:";
foreach ($_POST as $kurso => $kiom){
	$demando = "update korektebla_kurso set kiom_lernantoj='".$kiom."' where korektanto='".$persono_id."' and kurso='".$kurso."'";
	mysql_select_db( "ikurso");
	$result = mysql_query($demando) or die (  "INSERT : Invalid query :".$demando);
	$teksto.=$kurso."=".$kiom." ";
}
protokolo($persono_id,"UPDATE PERSO",$teksto);
header("Location:sxangxiNBlernantoj.php?farite=jes");
?>                    