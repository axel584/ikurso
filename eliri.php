<?php
$admin_id=isset($_SESSION["admin_id"])?$_SESSION["admin_id"]:"";
if ($admin_id!=""){
	$_SESSION["persono_id"]=$_SESSION["admin_id"];
	$_SESSION["admin_id"]="";
	header( "Location:administri.php");
}
else {
	session_start();
	session_unset();
	session_destroy();
	header( "Location:index.php");
}
?>