<?php
$temo="kurso";
include "stat.inc.php";

function increment($valeur) {
	if (!isset($valeur)) {
		$valeur=1;
	} else {
		$valeur++;
	}
}

function stat_lecionoj() {
	global $lgv,$lgv_nomoLeciono,$lgv_haltis,$lgv_lernante,$lgv_sumo,$lgv_neKomencis,$lgv_finis,$bdd;
	// initialisation de la variable $stat et $nomo_kurso/$nomo_leciono
	$demando = "select kodo,nomo from kursoj";
	$result = $bdd->query($demando) or die(print_r($bdd->errorInfo()));
	while($row = $result->fetch()) {
		$stat[$row["kodo"]]=array(); 
		$stat[$row["kodo"]]["N"]=0; // pas encore commencé
		$stat[$row["kodo"]]["K"]=0; // en cours
		$stat[$row["kodo"]]["F"]=0; // ont fini
		$stat[$row["kodo"]]["H"]=0; // ont abandonné
		$stat[$row["kodo"]]["TK"]=0; // total en cours
		$stat[$row["kodo"]]["T"]=0; // total
		$nomo_kursoj[$row["kodo"]]=$row["nomo"];
		// on initialise ensuite chaque lecon
		$demando2 = "select numero,titolo from lecionoj where kurso='".$row["kodo"]."'";
		$result2 = $bdd->query($demando2) or die(print_r($bdd->errorInfo()));
		while($row2 = $result2->fetch()) {
			$stat[$row["kodo"]][$row2["numero"]]=array();
			$stat[$row["kodo"]][$row2["numero"]]["H"]=0;
			$stat[$row["kodo"]][$row2["numero"]]["K"]=0;
			$nomo_lecionoj[$row["kodo"]][$row2["numero"]]=$row2["titolo"];
		}

	}
	// faire une boucle sur les leçons de chaque cours


	// laux landoj
	$demando = "select nuna_kurso.kurso as kurso,nuna_kurso.nunleciono as numleciono,nuna_kurso.stato as stato from nuna_kurso,personoj where personoj.id=nuna_kurso.studanto ";
	$result = $bdd->query($demando) or die(print_r($bdd->errorInfo()));
	while($row = $result->fetch()) {
		if ($row["stato"]=="N") {
				$stat[$row["kurso"]]["N"]++;
				$stat[$row["kurso"]]["T"]++;
				$stat[$row["kurso"]]["TK"]++;
		} elseif ($row["stato"]=="F") {
				$stat[$row["kurso"]]["F"]++;
				$stat[$row["kurso"]]["T"]++;
		} elseif ($row["stato"]=="H") {
			if ($row["numleciono"]==null) { 
			   		$stat[$row["kurso"]]["H"]++; 
			} else {
			   	$stat[$row["kurso"]][$row["numleciono"]]["H"]++;
			}
			if (!isset($stat[$row["kurso"]]["T"])) {
				$stat[$row["kurso"]]["T"]=1;
			} else {
				$stat[$row["kurso"]]["T"]++;
			}
			
		} elseif ($row["stato"]=="K") {
				$stat[$row["kurso"]][$row["numleciono"]]["K"]++;
				$stat[$row["kurso"]]["T"]++;
				$stat[$row["kurso"]]["TK"]++;
		}
	}
	$demando = "select * from lecionoj ";
	$result = $bdd->query($demando) or die(print_r($bdd->errorInfo()));
	while ($row=$result->fetch()) {
		$nomo_lecionoj[$row["kurso"]][$row["numero"]]=$row["titolo"];
	}
        $demando = "select * from kursoj ";
	$result = $bdd->query($demando) or die(print_r($bdd->errorInfo()));
	while ($row=$result->fetch()) {
		$nomo_kursoj[$row["kodo"]]=$row["nomo"];
	}
        
	ksort($stat);
	$numkurso = 0;
	foreach($stat as $key1 => $value1) { // on balaye chaque cours
		// nur 2 kursoj sur cxiuj lignioj
		if ((($numkurso%2)==0)&&($numkurso!=0)) { echo "</tr>\n<tr>";}
		$numkurso++;
		// komenco de la kurso
		echo "<h3>".$nomo_kursoj[$key1]."</h3>";
		//print_r($value1);
		echo "<table class=\"stat\">\n<thead>\n<tr>\n";

		// titoloj 
		echo "<td class='col1'>".$lgv_nomoLeciono."</td>\n";
		echo "<td>".$lgv_lernante."</td>\n";
		echo "<td>%</td>\n";
		echo "<td>".$lgv_haltis."</td>\n";
		echo "<td>%</td>\n";
		echo "</tr>\n</thead>\n";	

		// unua : ne ekis la kurson		
		echo "<tbody>\n<tr>\n";
		echo "<td class='col1'>&nbsp;".$lgv_neKomencis."</td>\n";
		echo "<td>&nbsp;".$value1["N"]."</td>\n";
		echo "<td class='dekstre'>&nbsp;";
		if ($value1["TK"]>0) {
		   echo round(100*$value1["N"]/$value1["TK"],2); 
		} else { 
		   echo "NV"; 
		}
		echo "</td>\n";
		echo "<td>&nbsp;".$value1["H"]."</td>\n";
		echo "<td>&nbsp;";
		if ($value1["T"]>0) {
		   echo round(100*$value1["H"]/$value1["T"],2); 
		} else { 
		   echo "NV"; 
		}
		echo "</td>\n</tr>\n";
	
		// aliaj : valuoj
		ksort($value1);
		foreach($value1 as $key2 => $value2) {
			if (($key2!="N") && ($key2!="F") && ($key2!="") && ($key2!="H") && ($key2!="K") && ($key2!="T") && ($key2!="TK")) {
				echo "<tr>\n";

				echo "<td class='col1'>&nbsp;".$nomo_lecionoj[$key1][$key2]."</td>";
				echo "<td>&nbsp;".$value2["K"]."</td>";
				echo "<td class='dekstre'>&nbsp;"; 
				if ($value1["TK"]>0) { echo round(100*($value2["K"]/$value1["TK"]),2);}
				else { echo "NV"; }
				echo "</td>\n";
				echo "<td>&nbsp;".$value2["H"]."</td>";
				echo "<td class='dekstre'>&nbsp;"; 
				if ($value1["T"]>0) {
					if ($value2["H"]>0){echo round(100*($value2['H']/$value1['T']),2);}
				}
				else { echo "NV"; }
				echo "</td>\n</tr>\n";
			}
		}
		
		// antauxlasta : finis la kurson
		echo "<tr>\n<td>";
		echo "&nbsp;".$lgv_finis."</td>\n";
		echo "<td colspan='3'>&nbsp;".$value1["F"]."</td>\n";
		echo "<td>&nbsp;"; 
		if ($value1["T"]>0) { echo round(100*($value1["F"]/$value1["T"]),2);}
			else { echo "NV"; }
		echo "</td>\n</tr>\n</tbody>\n";

		// lasta : cxiuj
		echo "<tfoot>\n<tr>\n<td>\n";
		echo $lgv_sumo."</td>\n";
		echo "<td colspan=\"4\">&nbsp;".$value1["T"]."</td>\n</tr>\n</tfoot>\n";
		echo "</table>\n";
	}
}

?>
			<h2><?php echo $lgv_laux.$lgv_lauxKurso." :";?></h2>
			<p><?= $lgv_lauxLecionoNoto;?></p>
			<?php stat_lecionoj(); ?>
<?php include "pagxpiedo.inc.php" ?>