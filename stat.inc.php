<?php
include "util.php";
$vojo="";
include_once ("db.inc.php");
include_once ("webui.inc.php");
$pagxtitolo="Statistiques";
$persono_id = isset($_SESSION["persono_id"])?$_SESSION["persono_id"]:"";
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
header("Last-Modified: ".gmdate("D,d M Y H:i:s")." GMT");
header("Cache-Control: no-store,no-cache, must-revalidate"); // HTTP/1.1
header("Pragma: no-cache"); // HTTP/1.0
include "pagxkapo-old.inc.php";
?>
		<div id="enhavo">
			<ul id="tabnav">
				<li <?php if ($temo=="kategorio") {echo " class='aktiva'";}?>><a href="statLauxKategorio.php">par catégorie</a></li>
				<li <?php if ($temo=="monato") {echo " class='aktiva'";}?>><a href="statLauxMonato.php">par mois</a></li>
				<li <?php if ($temo=="lando") {echo " class='aktiva'";}?>><a href="statLauxLando.php">par pays</a></li>
				<li <?php if ($temo=="kurso") {echo " class='aktiva'";}?>><a href="statLauxKurso.php">par cours</a></li>
			</ul>
			<div id="kadro">
