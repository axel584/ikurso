<?php
include "util.php";
$pagxtitolo="Modifier le nombre d’élèves";
if ($persono_id=="") {header("Location:index.php?erarkodo=8");}
$persono = apartigiPersonon($persono_id);
if (($rajto!='A')&&($rajto!='K')) {header("Location:index.php?erarkodo=4");}
$farite=isset($_GET["farite"])?$_GET["farite"]:"";

function NbStudantojn() {
	global $persono_id,$bdd;
	$demando1="select nomo,kodo from kursoj";
	$result1 = $bdd->query($demando1);
	while($row1 = $result1->fetch()) {
		echo "<tr>\n";
		echo "\n<td class='col1'>".$row1["nomo"]."</td>\n";
		$demando2="select count(*) as kiom from nuna_kurso,personoj where nuna_kurso.korektanto='".$persono_id."' and nuna_kurso.kurso='".$row1["kodo"]."' and personoj.id=nuna_kurso.studanto and (nuna_kurso.stato='K' or nuna_kurso.stato='N')";
		$result2 = $bdd->query($demando2);
		$row2 = $result2->fetch();
		echo "\t<td>".$row2['kiom']."</td>\n";
		$demando3="select * from korektebla_kurso where korektanto='".$persono_id."' and kurso='".$row1['kodo']."'";
		$result3 = $bdd->query($demando3);
		$row3 = $result3->fetch();
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
				<li><a href="miajlernantoj.php">élèves en cours</a></li>
				<li><a href="miajlernantoj.php?eksaj=jes">Anciens élèves</a></li>
				<li class="aktiva"><a href="sxangxiNBlernantoj.php">Modifier le nombre d’élèves</a></li>
		</ul>
		<div id="kadro">
				<p>Indiquez, pour chaque cours, le nombre maximum d’élèves que vous souhaitez suivre :</p>
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
						<?php NbStudantojn(); ?>
					</tbody>
					</table>
			
					<p><input class="bouton" type="reset" value="Annuler" onClick="window.close()">
					&nbsp;&nbsp;&nbsp;<input class="bouton" type="submit" value="Valider"></p>
				</form>
			<?php if ($farite=="jes") { ?>
				<div class='atentigo sukceso'><p class="eraro">Vos donn&eacute;es ont &eacute;t&eacute; mises &agrave; jour.</p></div>
			<?php } ?>
			</div>
		</div>
<?php include "pagxpiedo.inc.php";?>