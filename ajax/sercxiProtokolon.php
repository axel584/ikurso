<?php
include "../util.php";
$debut=isset($_GET["debut"])?$_GET["debut"]:"";
$fin=isset($_GET["fin"])?$_GET["fin"]:"";
$persono=isset($_GET["persono"])?$_GET["persono"]:"";
$type=isset($_GET["type"])?$_GET["type"]:"";


listi_protokolo(50,$debut,$fin,$persono,$type);

?>