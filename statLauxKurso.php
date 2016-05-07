<?
$temo="kurso";
include "stat.inc.php";

function stat_lecionoj() {
	global $lingvo,$lgv,$lgv_nomoLeciono,$lgv_haltis,$lgv_lernante,$lgv_sumo,$lgv_neKomencis,$lgv_finis;

	mysql_select_db( "ikurso");

	// laux landoj
	$demando = "select nuna_kurso.kurso as kurso,nuna_kurso.nunleciono as numleciono,nuna_kurso.stato as stato from nuna_kurso,personoj where personoj.id=nuna_kurso.studanto and personoj.lingvo='".$lingvo."'";
	$result = mysql_query($demando) or die (  "SELECT : malbona demando :".$demando.":".mysql_error());
	while($row = mysql_fetch_array($result)) {
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
			$stat[$row["kurso"]]["T"]++;
		} elseif ($row["stato"]=="K") {
			$stat[$row["kurso"]][$row["numleciono"]]["K"]++;
			$stat[$row["kurso"]]["T"]++;
			$stat[$row["kurso"]]["TK"]++;
		}
	}
	$demando = "select * from lecionoj where lingvo='".$lgv."'";
	$result = mysql_query($demando) or die (  "SELECT : malbona demando :".$demando.":".mysql_error());
	while ($row=mysql_fetch_array($result)) {
		$nomo_lecionoj[$row["kurso"]][$row["numero"]]=$row["titolo"];
	}
        $demando = "select * from kursoj where lingvo='".$lgv."'";
	$result = mysql_query($demando) or die (  "SELECT : malbona demando :".$demando.":".mysql_error());
	while ($row=mysql_fetch_array($result)) {
		$nomo_kursoj[$row["kodo"]]=$row["nomo"];
	}
        
	ksort($stat);
	$numkurso = 0;
	foreach($stat as $key1 => $value1) {
		// nur 2 kursoj sur cxiuj lignioj
		if ((($numkurso%2)==0)&&($numkurso!=0)) { echo "</tr>\n<tr>";}
		$numkurso++;
		// komenco de la kurso
		echo "<h3>".$nomo_kursoj[$key1]."</h3>";
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
			if (($key2!="N") && ($key2!="F") && ($key2!="") && ($key2!="H") && ($key2!="T") && ($key2!="TK")) {
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
			<h2><? echo $lgv_laux.$lgv_lauxKurso." :";?></h2>
			<p><?= $lgv_lauxLecionoNoto;?></p>
			<? stat_lecionoj(); ?>
<? include "pagxpiedo.inc.php" ?>