<?php
include "lingvo.inc.php";
require("db.inc.php");
session_start();
$teksto=isset($_POST['teksto'])?addslashes($_POST['teksto']):"";
$stud_id=isset($_POST['stud_id'])?$_POST['stud_id']:0;
$persono_id=isset($_SESSION['persono_id'])?$_SESSION['persono_id']:0;
$pagxo=isset($_POST['pagxo'])?$_POST['pagxo']:0;
malfermidatumbazon();
if ($teksto!=""){
	$demando = "INSERT INTO komentoj (studanto,korektanto,dato,teksto) VALUES ('$stud_id','$persono_id',CURDATE(),'$teksto')";
	$bdd->exec($demando) or die(print_r($bdd->errorInfo()));
}
header("Location:".$pagxo."");
?>         