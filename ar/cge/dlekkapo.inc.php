<?
include_once "../../util.php";
$lingvo="FR";
$kurso="CG";
$vojo="../../";
include_once ("../../fr.inc.php");
include_once ("../../db.inc.php");
include_once ("../../webui.inc.php");
$persono_id=$_SESSION["persono_id"];
if ($persono_id) {
	$persono = apartigiPersonon($persono_id);}
malfermiDatumbazon();
/*
echo "memorkurso<br>";
$memorkurso=$_SESSION["memorkurso"];
	foreach($memorkurso as $key => $value) {
		echo "key=".$key." val=".$value."<br>";
	}
*/
/*
 * rappel pour les élèves non identifiés.
*/
function atentigo() {
	global $metodo;
	if ($metodo!="X") {
		echo "<p class='eo rimarko'>Pour obtenir une lettre accentuée, il suffit de taper la lettre suivie d’un <em>x</em>&nbsp;:";
		echo "en tapant cx, sx, ux... vous obtiendrez ĉ, ŝ, ŭ...</p>\n";
	}
}
function ekzerco($sist, $nbLig) {
	global $demandoj, $memorkurso, $persono_id, $numcxap, $metodo;
	//
	// sist = sistemo uzata en la ekzerco. Se =U, ni uzas la auxtomatan anstatauxigon de x per cxapelo
	// nbLig = nombro da linioj por cxiuj respondo. Se = 1, ni uzas <input>, ne pli da, ni uzas <textarea>
	//
	foreach ($demandoj as $k => $v) {
		echo "\t<p>".$k.". ".$v."</p>\n";
		echo "\t<p><input type='hidden' name=\"dem_ekz".$numcxap."_".$k."\" value=\"".$k." ".$v."\">\n";
		if ($nbLig==1) {
			echo "\t<input type='text' size='65' name=\"res_ekz".$numcxap."_".$k."\"";
			if (($sist=="U")&&($metodo=="U")) {
				echo " onkeyup='xAlUtf8(this)' ";
			} 
			echo "value=\"";
			$var="res_ekz".$numcxap."_".$k;
			if (isset($memorkurso[$var])){
				echo stripslashes($memorkurso[$var]);
			}
			echo "\">";
		}
		else
		{
			echo "\t<textarea cols='65' rows='".$nbLig."' name=\"res_ekz".$numcxap."_".$k."\"";
			if (($sist=="U")&&($metodo=="U")) {echo " onkeyup='xAlUtf8(this)' ";} 
			echo ">";
			$var="res_ekz".$numcxap."_".$k;
			if (isset($memorkurso[$var])){
				echo stripslashes($memorkurso[$var]);
			}
			echo "</textarea>";
		}
		echo "</p>\n";
	}
}

$url=$_SERVER['SCRIPT_URI'];
$pagxo=explode("/", $_SERVER['SCRIPT_NAME']);
$subjekto=$pagxo[count($pagxo)-1];
$query="select * from lecionoj where lingvo='$lingvo' and kurso='$kurso' and retpagxo='$subjekto'";
mysql_select_db("ikurso");
$result = mysql_query($query) or die ("SELECT : Invalid query :".$query);
if (mysql_num_rows($result)!="0"){
	$row=mysql_fetch_array($result);
	$titolo=$row["titolo"];
	$nunleciono=$row["numero"];
}
($subjekto=="lec01.php")?($jamaligxi="ne"):($jamaligxi="jes");

if (substr($subjekto,0,5)=="intro") {
	$parto="intro";
} else {
	$numcxap=substr($subjekto,3,2);
	$lec=substr($subjekto,0,3);
	$parto=substr($subjekto,4,2);
	if ($parto==".p") {$parto="";}
}

if ($parto!="intro") 
	{
		// ER 05.10.2015 : correction pour passage en PHP 5.4
		//session_register("aligxilo");
		$_SESSION['aligxilo']=$aligxilo;
	}

$pagxtitolo="Cours d’espéranto en dix leçons"; 

include "../pagxkapo.inc.php";
?>
<script type="text/javascript" src="../../xAlUtf8.js"></script>
		<div id="enhavo">
			<ul id="tabnav">
				<li <? if ($temo=="intro") {echo " class='aktiva'";} ?>><a href="intro.php?temo=intro">Pr&eacute;ambule</a></li>
				<!-- suppression de la page sommaire : n'apporte rien de plus que les onglets
				et de plus contient les cours zippés qui ne sont plus à jour
				<li <? if ($temo=="temaro") {echo " class='aktiva'";} ?>><a href="intro.php?temo=temaro">Sommaire</a></li>
				-->
				<li <? if ($numcxap=="01") {echo " class='aktiva'";} ?>><a href="lec01.php">&nbsp;1&nbsp;</a></li>
				<li <? if ($numcxap=="02") {echo " class='aktiva'";} ?>><a href="lec02.php">&nbsp;2&nbsp;</a></li>
				<li <? if ($numcxap=="03") {echo " class='aktiva'";} ?>><a href="lec03.php">&nbsp;3&nbsp;</a></li>
				<li <? if ($numcxap=="04") {echo " class='aktiva'";} ?>><a href="lec04.php">&nbsp;4&nbsp;</a></li>
				<li <? if ($numcxap=="05") {echo " class='aktiva'";} ?>><a href="lec05.php">&nbsp;5&nbsp;</a></li>
				<li <? if ($numcxap=="06") {echo " class='aktiva'";} ?>><a href="lec06.php">&nbsp;6&nbsp;</a></li>
				<li <? if ($numcxap=="07") {echo " class='aktiva'";} ?>><a href="lec07.php">&nbsp;7&nbsp;</a></li>
				<li <? if ($numcxap=="08") {echo " class='aktiva'";} ?>><a href="lec08.php">&nbsp;8&nbsp;</a></li>
				<li <? if ($numcxap=="09") {echo " class='aktiva'";} ?>><a href="lec09.php">&nbsp;9&nbsp;</a></li>
				<li <? if ($numcxap=="10") {echo " class='aktiva'";} ?>><a href="lec10.php">&nbsp;10&nbsp;</a></li>
				<li <? if ($temo=="listo") {echo " class='aktiva'";} ?>><a href="vocabula.php">&nbsp;Lexique&nbsp;</a></li>
				<li <? if ($temo=="enhavo") {echo " class='aktiva'";} ?>><a href="enhavo.php">&nbsp;Index&nbsp;</a></li>
			<?
  
		   // ligo al la aliaj partoj de la kursoj
		   // echo "<li class='dekstre'><a href='helpo.php'>Helpo</a></li>\n";
			?>
			</ul>
			<div id="kadro">
				<h2><?=$titolo;?></h2>
				<?			
				if ($erarkodo=="1") {echo "<span class=\"eraro\"><br>$lgv_eraro1</span>";}
				if ($erarkodo=="2") {echo "<span class=\"eraro\"><br>$lgv_eraro2</span>";}
				if ($erarkodo=="3") {echo "<span class=\"eraro\"><br>$lgv_eraro3</span>";}
				if ($erarkodo=="6") {echo "<span class=\"eraro\"><br>$lgv_eraro6</span>";}
				if ($erarkodo=="7") {echo "<span class=\"eraro\"><br>$lgv_eraro7</span>";}
				if ($erarkodo=="8") {echo "<span class=\"eraro\"><br>$lgv_eraro8</span>";}
				if ($erarkodo=="13") {echo "<span class=\"eraro\">$noto : $lgv_eraro13</span>";} 
				?>
					<a name="<?=$subjekto?>"></a>
					<form method="post" action="../korekti.php">
					<input type="hidden" name="path" value="./">
				<?
					echo "<input type=\"hidden\" name=\"010_subjekto\" value=\"".$subjekto."\">\n";
					echo "<input type=\"hidden\" name=\"010_adreso\" value=\"$url\">\n";
					echo "<input type=\"hidden\" name=\"nunleciono\" value=$nunleciono>\n";
					echo "<input type=\"hidden\" name=\"kurso\" value=\"$kurso\">\n";
					echo "<input type=\"hidden\" name=\"numcxap\" value=\"$numcxap\">\n";
				?>