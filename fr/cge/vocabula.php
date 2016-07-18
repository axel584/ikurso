<?php 
$gxisdatigDato="2006-06-16";
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
	
	<aside class="col s12 m2">
		<p>Téléchargez ce lexique au format PDF&nbsp;:<br> 
		<a href="http://ikurso.esperanto-jeunes.org/doc/LexiqueDLEK-Ikurso.pdf">
		<img src="http://ikurso.esperanto-jeunes.org/bildoj/pdf-dist.png" alt="Lexique - 55 Ko" 
		title="Lexique - 55 Ko" align="bottom" border="0"></a></p>
	</aside>

</div>
<?php include "dlekpiedo.inc.php"; ?>
