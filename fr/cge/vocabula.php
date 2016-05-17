<?php 
$gxisdatigDato="2006-06-16";
$subjekto="vocabula.php";
$temo="listo";
$pagxtitolo="Lexique";
$metodo=isset($_GET["metodo"])?$_GET["metodo"]:"U";
include "dlekkapo.inc.php";
?>
		<div class="klarigo">
<?php include "vortlisto.inc.php"; ?>
		</div>
<?php include "dlekpiedo.inc.php"; ?>
