<?php
include "lingvo.inc.php";
require("db.inc.php");
$teksto=addslashes($_POST['teksto']);
$stud_id=$_POST['stud_id'];
$persono_id=$_SESSION['persono_id'];
$pagxo=$_POST['pagxo'];
malfermidatumbazon();
if ($teksto!=""){
	$demando = "INSERT INTO komentoj (studanto,korektanto,dato,teksto) VALUES ('$stud_id','$persono_id',CURDATE(),'$teksto')";
	mysql_select_db( "ikurso");
	$result = mysql_query($demando) or die (  "INSERT : Invalid query :".$demando);
}
header("Location:".$pagxo."");
?>         