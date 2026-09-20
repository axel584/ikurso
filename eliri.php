<?php
$admin_id=isset($_SESSION["admin_id"])?$_SESSION["admin_id"]:"";
if ($admin_id!=""){
	$_SESSION["persono_id"]=$_SESSION["admin_id"];
	$_SESSION["admin_id"]="";
	header( "Location:administri.php"); exit;
}
else {
	session_start();
	session_unset();
	session_destroy();
	require_once __DIR__ . '/config.php';
	require_once __DIR__ . '/api/JWTAuth.php';
	JWTAuth::clearCookie(); // supprime le cookie avec les mêmes domaine et chemin que ceux utilisés à sa création
	header( "Location:index.php"); exit;
}
?>