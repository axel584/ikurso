<?
if ($_SESSION["admin_id"]!=""){
	$_SESSION["persono_id"]=$_SESSION["admin_id"];
	$_SESSION["admin_id"]="";
	header( "Location:administri.php");
}
else {
	session_unset();
//	session_destroy();
	header( "Location:index.php");
}
?>