<?php
include "../util.php";
$pattern=isset($_GET["pattern"])?$_GET["pattern"]:"";
$kurso=isset($_GET["kurso"])?$_GET["kurso"]:"";
$nivelo=isset($_GET["nivelo"])?$_GET["nivelo"]:"";
// niveau de l'élève connecté ou de l'invité sur chaque mot (#391)
require_once "../api/GastoAPI.php";
vortlisto(GastoAPI::lernantoId(),$kurso,$pattern,$nivelo);
?>