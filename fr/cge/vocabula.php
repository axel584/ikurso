<?php 
$leciono=99;
$subjekto="vocabula.php";
$temo="listo";
$pagxtitolo="Lexique";
$metodo=isset($_GET["metodo"])?$_GET["metodo"]:"U";
include "dlekkapo.inc.php";
?>
<div class="row">
	<article class="col s12 m9 offset-m1">
		<section id="leciono-enhavo">
		<h2>Lexique</h2>
	<?php include "vortlisto.inc.php"; ?>
	</article>
<?php include "dlekpiedo.inc.php"; ?>
