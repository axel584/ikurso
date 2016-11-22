<?php
include "util.php";
$pagxtitolo="Panneau de contr&ocirc;le";
if ($persono_id=="") {header("Location:index.php?erarkodo=8");}
if ($rajto!='A'){header("Location:index.php?erarkodo=4");}
$parto=isset($_GET["parto"])?$_GET["parto"]:"";
if ($parto=="") {$parto=1;}

function listi_korektantoj() {
	global $bdd;
	$demando = "select distinct retadreso from personoj,korektebla_kurso where (personoj.rajtoj='K' or personoj.rajtoj='A') and personoj.id = korektebla_kurso.korektanto and korektebla_kurso.kiom_lernantoj>0";
	$result = $bdd->query($demando) or die(print_r($bdd->errorInfo()));
        echo "<textarea rows=10 cols=45>";
        echo $result->fetch()["retadreso"];
        while ($row=$result->fetch()) {
          echo ", ".$row["retadreso"];
        }
        echo "</textarea>";
}

function listi_lernantoj() {
	global $bdd;
	$demando = "select personoj.retadreso from personoj,nuna_kurso where personoj.rajtoj='S' and nuna_kurso.stato='K' and nuna_kurso.studanto=personoj.id";
	$result = $bdd->query($demando) or die(print_r($bdd->errorInfo()));
        echo "<textarea rows=10 cols=45>";
        echo $result->fetch()["retadreso"];
        while ($row=$result->fetch()) {
          echo ", ".$row["retadreso"];
        }
        echo "</textarea>";
}

function listi_eniro($nb) {
	global $bdd;
        $demando = "select * from protokolo where kategorio='ENIRO' order by horo DESC";
		$result = $bdd->query($demando) or die(print_r($bdd->errorInfo()));
        echo "<table class='voca'>\n<thead>\n<tr>\n<td>Kiam ?</td>\n<td>Kiu ?</td>\n</tr></thead>\n<tbody>\n";
        $jam_eniri=array();
        $i=0;
        while ($row=$result->fetch()) {
          if (!(in_array($row["persono_id"],$jam_eniri))) {
             $i++;
             $jam_eniri[]=$row["persono_id"];
             echo "<tr><td class='col1'>";
             echo $row["horo"];
             echo "</td><td width='180'>";
             echo "<a href=\"administri.php?celpersono_id=".$row["persono_id"]."\">";
             echo $row["teksto"];
             echo "</a>";
             echo "</tr>";
          }
          if($i>$nb) break;
        }
        echo "</tbody></table>";
}

function listi_malfruajLernantoj($nb) {
	global $bdd;
	$demando = "select nuna_kurso.ekdato as ekdato,nuna_kurso.id as id,nuna_kurso.studanto as studanto,nuna_kurso.korektanto as korektanto from nuna_kurso,personoj where nuna_kurso.studanto=personoj.id and stato='N'";
	$result = $bdd->query($demando) or die(print_r($bdd->errorInfo()));
	echo "<table class='prezento'><thead><tr><td>Dato</td><td>Studanto</td><td>Korektanto</td></tr></thead><tbody>";
	while ($row=$result->fetch()) {
		$stat[$row["id"]]=$row["ekdato"];
		$stat_stu[$row["id"]]=$row["studanto"];
		$stat_kor[$row["id"]]=$row["korektanto"];
	}
	$demando = "select nuna_kurso.lastdato as lastdato,nuna_kurso.id as id,nuna_kurso.studanto as studanto,nuna_kurso.korektanto as korektanto from nuna_kurso,personoj where nuna_kurso.studanto=personoj.id and stato='K'";
	$result = $bdd->query($demando) or die(print_r($bdd->errorInfo()));
	while ($row=$result->fetch()) {
		$stat[$row["id"]]=$row["lastdato"];
		$stat_stu[$row["id"]]=$row["studanto"];
		$stat_kor[$row["id"]]=$row["korektanto"];
	}
	$demando = "select id,enirnomo from personoj";
	$result = $bdd->query($demando) or die(print_r($bdd->errorInfo()));
	while ($row=$result->fetch()) {
		$enirnomo[$row["id"]]=$row["enirnomo"];
	}
	asort($stat);
	$i=0;
	foreach($stat as $key => $value) {
		$i++;
		echo "<tr><td class='col1'>";
		echo $value;
		echo "</td><td>";
		echo "<a href=\"administri.php?celpersono_id=".$stat_stu[$key]."\">";
		echo $enirnomo[$stat_stu[$key]];
		echo "</a>";
		echo "</td><td>";
		echo "<a href=\"administri.php?celpersono_id=".$stat_kor[$key]."\">";
		echo $enirnomo[$stat_kor[$key]];
		echo "</a>";
		echo "</td></tr>";           
		if ($i>$nb) break;
	}
	echo "</tbody></table>";
}

function listi_malfruajKorektantoj($nb) {
	global $bdd;
	$demando = "select personoj.id,enirnomo,sum(kiom_lernantoj) as kiom from personoj,korektebla_kurso where rajtoj='K' and personoj.id=korektebla_kurso.korektanto group by korektanto";
	$result = $bdd->query($demando) or die(print_r($bdd->errorInfo()));
	while ($row=$result->fetch()) {
		if ($row["kiom"]>0) {
			$nomo_korektantoj[$row["id"]]=$row["enirnomo"];
			$cxiuj[$row["enirnomo"]]=$row["id"];
		}
	}
	$demando = "select id,persono_id from protokolo where kategorio='ENIRO' and to_days(now())-to_days(horo) <".$nb." order by horo DESC";
	$result = $bdd->query($demando) or die(print_r($bdd->errorInfo()));
	while ($row=$result->fetch()) {
		$enirintoj[]=$row["persono_id"];
	}
	$malfruantoj = array_diff($cxiuj,$enirintoj);
	echo "<table class='prezento'><tbody>";
	foreach ($malfruantoj as $iu) {
		echo "<tr><td>";
		echo "<a href=\"administri.php?celpersono_id=".$iu."\">";
		echo $nomo_korektantoj[$iu];
		echo "</a>";
		echo "</td></tr>"; 
	}
	echo "</tbody></table>"; 
}

function listi_plejBonajKorektantoj() {
	global $bdd;
	$demando = "select * from personoj where (rajtoj='K' or rajtoj='A')";
	$result = $bdd->query($demando) or die(print_r($bdd->errorInfo()));
	echo "<table class='prezento'><thead><tr><td>Kiu ?</td>";
	echo "<td width='50'>Ont abandonné</td><td width='50'>A fini</td><td width='50'>% réussite</td></tr></thead><tbody>";
	while ($row=$result->fetch()) {
		$nomo_korektantoj[$row["id"]]=$row["enirnomo"];
		$demando2 = "select count(*) as sumo from nuna_kurso where korektanto=".$row["id"]." and stato='F'";
		$result2 = $bdd->query($demando2) or die(print_r($bdd->errorInfo()));
		$row2=$result2->fetch();
		$listo_f[$row["id"]]=$row2["sumo"];

		$demando2 = "select count(*) as sumo from nuna_kurso where korektanto=".$row["id"]." and stato='H'";
		$result2 = $bdd->query($demando2) or die(print_r($bdd->errorInfo()));
		$row2=$result2->fetch();
		$listo_h[$row["id"]]=$row2["sumo"];
        	if ($listo_h[$row["id"]]+$listo_f[$row["id"]]>0) { 
        		$listo_boneco[$row["id"]]=round($listo_f[$row["id"]]*100/($listo_h[$row["id"]]+$listo_f[$row["id"]]));
        	} else {
        		$listo_boneco[$row["id"]]=0;
        	}		
	}
	
	arsort($listo_boneco,SORT_NUMERIC);
	foreach ($listo_boneco as $id=>$valuo) {
		// n'affiche que les correcteurs qui ont au moins un élève abandonné ou un élève fini
		if (($listo_h[$id]!=0) || ($listo_f[$id]!=0)) {
			echo "<tr><td class='col1'>";
			echo "<a href=\"administri.php?celpersono_id=".$id."\">";
			echo $nomo_korektantoj[$id];
			echo "</a>";
			echo "</td>";
			echo "<td>".$listo_h[$id]."</td>";
			echo "<td>".$listo_f[$id]."</td>";
			echo "<td>".$valuo."%</td>";
			echo "</tr>"; 
		}
	}
	echo "</tbody></table>"; 
}

function listi_plejBonajKorektantojLauxMonato($mois,$annee) {
	global $bdd;
	$demando = "select * from personoj where (rajtoj='K' or rajtoj='A')";
	$result = $bdd->query($demando) or die(print_r($bdd->errorInfo()));
	echo "<table class='prezento'><thead><tr><td>Kiu ?</td>";
	echo "<td width='50'>A abandonné</td><td width='50'>A fini</td><td width='50'>% réussite</td></tr></thead><tbody>";
	while ($row=$result->fetch()) {
		$nomo_korektantoj[$row["id"]]=$row["enirnomo"];
		$demando2 = "select count(*) as sumo from nuna_kurso where korektanto=".$row["id"]." and stato='F' and findato like '".$annee."-".$mois."%'";
		$result2 = $bdd->query($demando2) or die(print_r($bdd->errorInfo()));
		$row2=$result2->fetch();
		$listo_f[$row["id"]]=$row2["sumo"];

		$demando2 = "select count(*) as sumo from nuna_kurso where korektanto=".$row["id"]." and stato='H' and findato like '".$annee."-".$mois."%'";
		$result2 = $bdd->query($demando2) or die(print_r($bdd->errorInfo()));
		$row2=$result2->fetch();
		$listo_h[$row["id"]]=$row2["sumo"];
        	if ($listo_h[$row["id"]]+$listo_f[$row["id"]]>0) { 
        		$listo_boneco[$row["id"]]=round($listo_f[$row["id"]]*100/($listo_h[$row["id"]]+$listo_f[$row["id"]]));
        	} else {
        		$listo_boneco[$row["id"]]=0;
        	}		
	}
	
	arsort($listo_boneco,SORT_NUMERIC);
	foreach ($listo_boneco as $id=>$valuo) {
		// n'affiche que les correcteurs qui ont au moins un élève abandonné ou un élève fini
		if (($listo_h[$id]!=0) || ($listo_f[$id]!=0)) {
			echo "<tr><td class='col1'>";
			echo "<a href=\"administri.php?celpersono_id=".$id."\">";
			echo $nomo_korektantoj[$id];
			echo "</a>";
			echo "</td>";
			echo "<td>".$listo_h[$id]."</td>";
			echo "<td>".$listo_f[$id]."</td>";
			echo "<td>".$valuo."%</td>";
			echo "</tr>"; 
		}
	}
	echo "</tbody></table>"; 
}

function listi_erarajMesagxoj() {
	global $bdd;
		$demando = "select * from eraraj_mesagxoj";
		$result = $bdd->query($demando) or die(print_r($bdd->errorInfo()));
		
		echo "<table class='voca'>\n<thead>\n<tr>\n<td>dato</td>\n<td>sendinto</td>\n<td>objekto</td>\n</tr>\n</thead>\n<tbody>";
		$i=0;
		while ($row=$result->fetch()) {
			$i++;
			echo "<tr>\n<td nowrap>";
			echo $row["dato"]."</td>\n<td nowrap>";
			echo $row["enirnomo"]."</td>\n<td nowrap>";
			echo $row["objekto"]."</td></tr>\n";
			if ($i>$nb) break;
		}
		echo "</tbody></table>";
}

include "pagxkapo-old.inc.php";
?>
		<div id="enhavo">
		<ul id="tabnav">
			<li <?php if ($parto=="1") {echo " class='aktiva'";}?>><a href="stirpanelo.php?parto=1">Derniers connect&eacute;s</a></li>
			<li <?php if ($parto=="2") {echo " class='aktiva'";}?>><a href="stirpanelo.php?parto=2">Liste mails</a></li>
			<li <?php if ($parto=="3") {echo " class='aktiva'";}?>><a href="stirpanelo.php?parto=3">Classement correcteurs</a></li>
			<li <?php if ($parto=="4") {echo " class='aktiva'";}?>><a href="stirpanelo.php?parto=4">en retard</a></li>
			<li <?php if ($parto=="5") {echo " class='aktiva'";}?>><a href="stirpanelo.php?parto=5">Maintenance</a></li>
		</ul>
		<div id="kadro">
			<?php if ($parto=="1") { ?>
				<table class="perso">
					<tr>
						<td width="48%">
							<h2>derniers connectés</h2>
							<?php listi_eniro(25); ?>
						</td>
						<td width="48%">
							<h2>Carnet de bord :</h2>
							<?php listi_protokolo(500); ?>
					</td></tr>
				</table>
			<?php } ?>
			<?php if ($parto=="2") { ?>
				<table class="perso">
					<tr>
						<td width="48%">
							<h2>Liste e-mail correcteurs :</h2>
							<?php listi_korektantoj(); ?>
						</td><td width="48%">
							<h2>Liste e-mail des élèves :</h2>
							<?php listi_lernantoj(); ?>
						</td>
					</tr>
				</table>
			<?php } ?>

			<?php if ($parto=="3") { ?>
				<table border="0"><tr><td>
				<h2>R&eacute;sultats :</h2>
				<?php listi_plejBonajKorektantoj(); ?>	
				</td><td valign="top">
				<?php 
		        $demando = "select * from monatoj";
				$result = $bdd->query($demando) or die(print_r($bdd->errorInfo()));
				while ($row=$result->fetch()) {
					$nomo_monatoj[$row["kodo"]]=$row["nomo"];
				}
				$mktime = mktime(date('H'), date('i'), date('s'), date('m')-1, date('d'), date('Y')); // 
				$mois = date("m",$mktime);
				$annee = date("Y",$mktime);
				echo "<h2>R&eacute;sultats pour ".$nomo_monatoj[$mois].":</h2>";
				listi_plejBonajKorektantojLauxMonato($mois,$annee); 
				?>	
				</td></tr></table>
			<?php } 
			if ($parto=="4") { ?>
				<table class="perso">
					<tr>
						<td width="48%">
							<h2>les 50 élèves les plus retard :</h2>
							<?php listi_malfruajLernantoj(50); ?>
						</td>
						<td width="48%">
							<h2>Correcteurs non connecté depuis 30 jours :</h2>
							<?php listi_malfruajKorektantoj(30); ?>	
						</td>
					</tr>
				</table>
			<?php } ?>
			<?php
			if ($parto=="5") { ?>
			<h2>Messages en attente</h2>
			<p>Cette page est en cours de développement. Elle contiendra notamment un outil qui permettra de 
			réenvoyer des messages qui n'auraient pas pu être envoyés pour des raisons techniques</p>
			<p>Les messages ci-dessous n'ont pas pu être envoyés.</p>
			<?php listi_erarajMesagxoj(); ?>
			<?php } ?>
		</div>
<?php include "pagxpiedo-old.inc.php"?>                    