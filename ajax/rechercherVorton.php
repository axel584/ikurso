<?php
include "../util.php";
$pattern=isset($_GET["pattern"])?$_GET["pattern"]:"";
$kurso=isset($_GET["kurso"])?$_GET["kurso"]:"";
vortlisto("",$kurso,$pattern);;
?>