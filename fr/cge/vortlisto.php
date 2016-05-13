<?php 
$gxisdatigDato="2009/10/01";
$vojo="../../";
include "../../util.php";
$subjekto="vortlisto.php";
$pagxtitolo="Lexique";
$metodo=$_GET["metodo"];
if ($metodo=="") {$metodo="U";}
include "../../pagxkapo.inc.php";
?>
		<div id="enhavo">
			<ul id="tabnav">
				<li><a href="<?=$vojo;?>aligxi.php">Inscription</a></li>
				<li class="aktiva"><a href="vortlisto.php">Lexique</a></li>
			</ul>
	
			<div id="kadro">
				<div class="klarigo">
<?php include "vortlisto.inc.php"; ?>
				</div>
			</div>
		</div>
<?php include "../../pagxpiedo.inc.php"; ?>