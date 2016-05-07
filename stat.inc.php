<?
include "util.php";
$lingvo="FR";
$vojo="";
include_once ("fr.inc.php");
include_once ("db.inc.php");
include_once ("webui.inc.php");
$pagxtitolo=$lgv_statistiko;
$persono_id = $_SESSION["persono_id"];
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
header("Last-Modified: ".gmdate("D,d M Y H:i:s")." GMT");
header("Cache-Control: no-store,no-cache, must-revalidate"); // HTTP/1.1
header("Pragma: no-cache"); // HTTP/1.0
include "pagxkapo.inc.php";
?>
		<div id="enhavo">
			<ul id="tabnav">
				<li <? if ($temo=="kategorio") {echo " class='aktiva'";}?>><a href="statLauxKategorio.php"><?=$lgv_lauxKategorio?></a></li>
				<li <? if ($temo=="monato") {echo " class='aktiva'";}?>><a href="statLauxMonato.php"><?=$lgv_lauxMonato?></a></li>
				<li <? if ($temo=="lando") {echo " class='aktiva'";}?>><a href="statLauxLando.php"><?=$lgv_lauxLando?></a></li>
				<li <? if ($temo=="kurso") {echo " class='aktiva'";}?>><a href="statLauxKurso.php"><?=$lgv_lauxKurso?></a></li>
			</ul>
			<div id="kadro">
