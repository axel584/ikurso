<?php
require("db.inc.php");
$teksto=$_POST['teksto'];
$stud_id=$_POST['stud_id'];
$persono_id=$_SESSION['persono_id'];
malfermidatumbazon();
if ($teksto!=""){
	$demando = "INSERT INTO komentoj (studanto,korektanto,dato,teksto) VALUES ('$stud_id','$persono_id',CURDATE(),'$teksto')";
	mysql_select_db( "ikurso");
	$result = mysql_query($demando) or die (  "INSERT : Invalid query :".$demando);
}
header("Location:miajlernantoj.php");
?>
                    