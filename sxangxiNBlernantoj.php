<?
include "util.php";
$pagxtitolo=$lgv_sxangiNBlernantoj;
if ($persono_id=="") {header("Location:index.php?erarkodo=8");}
$persono = apartigiPersonon($persono_id);
if (($rajto!='A')&&($rajto!='K')) {header("Location:index.php?erarkodo=4");}
$farite=$_GET["farite"];

function NbStudantojn() {
	global $lingvo,$persono_id;
	mysql_select_db( "ikurso");
	$demando1="select nomo,kodo from kursoj where kursoj.lingvo='".$lingvo."'";
	$result1 = mysql_query($demando1) or die (  "SELECT : malbona demando :".$demando1);
	while($row1 = mysql_fetch_array($result1)) {
		echo "<tr>\n";
		echo "\n<td class='col1'>".$row1["nomo"]."</td>\n";
		$demando2="select count(*) as kiom from nuna_kurso,personoj where nuna_kurso.korektanto='".$persono_id."' and nuna_kurso.kurso='".$row1["kodo"]."' and personoj.id=nuna_kurso.studanto and (nuna_kurso.stato='K' or nuna_kurso.stato='N')";
		$result2 = mysql_query($demando2) or die (  "SELECT : malbona demando :".$demando2);
		$row2 = mysql_fetch_array($result2);
		echo "\t<td>".$row2['kiom']."</td>\n";
		$demando3="select * from korektebla_kurso where korektanto='".$persono_id."' and kurso='".$row1['kodo']."'";
		$result3 = mysql_query($demando3) or die ("SELECT : malbona demando :".$demando3);
		$row3 = mysql_fetch_array($result3);
		echo "\t<td>";
		echo "<input type=\"text\" name=\"".$row1['kodo']."\" value=\"".$row3['kiom_lernantoj']."\" size=\"5\">";
		echo "</td>\n";
		echo "</tr>\n";
	}
}
include "pagxkapo.inc.php";
?>
		<div id="enhavo">
			<ul id="tabnav">
				<li><a href="miajlernantoj.php"><?=$lgv_nunajLernantoj?></a></li>
				<li><a href="miajlernantoj.php?eksaj=jes"><?=$lgv_eksajLernantoj?></a></li>
				<li class="aktiva"><a href="sxangxiNBlernantoj.php"><?=$lgv_sxangiNBlernantoj?></a></li>
		</ul>
		<div id="kadro">
				<p><?=$lgv_sxangxiNBkomento?></p>
				<form name="NBlernantoj" method="post" action="sxangxiNBlernantoj2.php">
				<table class="prezento">
					<thead>
						<tr>
						<td>cours</td>
						<td>&eacute;l&egrave;ves<br>en cours</td>
						<td>nombre<br>maximum</td>
					</tr>
					</thead>
					<tbody>
					<tr>
						<? NbStudantojn(); ?>
					</tbody>
					</table>
			
					<p><input class="bouton" type="reset" value="<? echo $lgv_nesxangxu ?>" onClick="window.close()">
					&nbsp;&nbsp;&nbsp;<input class="bouton" type="submit" value="<? echo $lgv_ek; ?>"></p>
				</form>
			<? if ($farite=="jes") { ?>
				<p class="eraro">Vos donn&eacute;es ont &eacute;t&eacute; mises &agrave; jour</p>
			<? } ?>
			</div>
		</div>
<? include "pagxpiedo.inc.php";?>