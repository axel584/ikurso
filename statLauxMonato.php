<?
$temo="monato";
include "stat.inc.php";
function stat_monatoj() {
	global $lingvo,$lgv,$lgv_sumo,$lgv_haltis,$lgv_finis,$lgv_studantoj;
	$moisactuel = date("Ym");
	// le dernier jour est le jour "0" du mois suivant (mois +1) ou 31 pour décembre (décembre + 1 n'a pas de sens)
	if (date("m")==12) {
		$dernierJour=31;
	} else {
		$dernierJour = date("d",mktime(0,0,0,date("m")+1,0,date("Y")));
	}
	echo "<table class=\"stat\">\n<thead>\n<tr>\n";
	echo "<td class='vide'>&nbsp;</td>\n";
	echo "<td class='vide'>&nbsp;</td>\n";
	echo "<td class='col1'>".$lgv_studantoj;
	?>
	<a href="#" onClick="window.open('stat-monatoj.php?filtre=K','','resizable=no,scrollbars=no,location=no,top=100,left=100,width=620,height=520');">
	<img border="0" height="14" width="14" src="bildoj/grafiko.png">
	</a></td>
	<?
	echo "<td class='col1'>".$lgv_haltis;
		?>
	<a href="#" onClick="window.open('stat-monatoj.php?filtre=H','','resizable=no,scrollbars=no,location=no,top=100,left=100,width=620,height=520');">
	<img border="0" height="14" width="14" src="bildoj/grafiko.png">
	</a></td>
	<?
	echo "<td class='col1'>".$lgv_finis;
		?>
	<a href="#" onClick="window.open('stat-monatoj.php?filtre=F','','resizable=no,scrollbars=no,location=no,top=100,left=100,width=620,height=520');">
	<img border="0" height="14" width="14" src="bildoj/grafiko.png">
	</a></td></tr>
	</thead>
	
	<?
	mysql_select_db( "ikurso");

	// laux monatoj
	$demando = "select nuna_kurso.id as id, nuna_kurso.stato as stato, MONTH(nuna_kurso.ekdato) as ekmonato, YEAR(nuna_kurso.ekdato) as ekjaro, MONTH(nuna_kurso.findato) as finmonato,YEAR(nuna_kurso.findato) as finjaro from nuna_kurso, personoj where nuna_kurso.studanto=personoj.id and personoj.lingvo='".$lingvo."'";
	$result = mysql_query($demando) or die (  "SELECT : malbona demando :".$demando.":".mysql_error());
	while($row = mysql_fetch_array($result)) {
		if ($row["ekmonato"]<10) {
			$ekdato = $row["ekjaro"]."0".$row["ekmonato"];
		} else {
			$ekdato = $row["ekjaro"].$row["ekmonato"];
		}
		$stat[$ekdato]["ekis"]++;
		$sumekis++;
		if ($row["finmonato"]!=null) {
			if ($row["finmonato"]<10) {
				$findato = $row["finjaro"]."0".$row["finmonato"];
			} else {
				$findato = $row["finjaro"].$row["finmonato"];
			}
			if ($row["stato"]=="H") {
				$stat[$findato]["haltis"]++;
				$stat[$ekdato]["monat-haltis"]++; // ceux qui ont arret?n ayant commenc?e mois ci
				$sumhaltis++;
			} elseif ($row["stato"]=="F") {
				$stat[$findato]["finis"]++;
				$stat[$ekdato]["monat-finis"]++;  // ceux qui ont fini en ayant commenc?e mois ci.
				$sumfinis++;
			}
		}
	}
        $demando = "select * from monatoj where lingvo='".$lgv."'";
        $result = mysql_query($demando) or die (  "SELECT : malbona demando :".$demando.":".mysql_error());
        while ($row=mysql_fetch_array($result)) {
          $nomo_monatoj[$row["kodo"]]=$row["nomo"];
        }
	krsort($stat);
	foreach($stat as $key => $value) {
		echo "<tr>\n";
		ereg("([0-9]{4})([0-9]{2})", $key,$trancxita);
		// affiche le mois contenu dans nomo_monatoj et l'ann?
		echo "<td class='col1'>".$nomo_monatoj[$trancxita[2]]." ".$trancxita[1]."</td>\n";
		echo "<td><a href='#' onClick=\"window.open('stat-monatoj-pie.php?idMonato=".$trancxita[1].$trancxita[2]."&nomoMonato=".$nomo_monatoj[$trancxita[2]]."','','resizable=no,scrollbars=no,location=no,top=150,left=150,width=520,height=220');\">
			<img border='0' height='14' width='14' src='bildoj/grafiko.png'></a></td>\n";
					
		// affiche ceux qui ont commence                
		echo "<td>&nbsp;".$value["ekis"];
		// echo " (F : ".$value["monat-finis"].")/(H : ".$value["monat-haltis"].")";
		if ($key==$moisactuel) {
			// evaluation de la valeur sur le dernier jour (regle de 3 par rapport ?a valeur du jour, le dernier jour et le jour d'aujourd'hui)
			$estimation = round(($value["ekis"]*$dernierJour)/date("j"));
			echo "&nbsp;(".$estimation.")";
		}			
		echo "</td>\n";
		// affiche ceux qui ont abandonne                
		echo "<td>&nbsp;".$value["haltis"];
		if ($key==$moisactuel) {
			// evaluation de la valeur sur le dernier jour (regle de 3 par rapport ?a valeur du jour, le dernier jour et le jour d'aujourd'hui)
			$estimation = round(($value["haltis"]*$dernierJour)/date("j"));
			echo "&nbsp;(".$estimation.")";
		}
		echo "</td>\n";
		// affiche ceux qui ont finis
		echo "<td>&nbsp;".$value["finis"];
		if ($key==$moisactuel) {
			$estimation = round(($value["finis"]*$dernierJour)/date("j"));
			echo "&nbsp;(".$estimation.")";
		}
		echo "</td>\n</tr>\n</tbody>\n";
	}
	
	//sumo
	echo "<tfoot>\n<tr>\n";
	echo "<td>".$lgv_sumo."</td>\n";
	echo "<td>&nbsp;</td>";
	echo "<td>".$sumekis."</td>\n";
	echo "<td>".$sumhaltis;
	if ($sumekis>0) echo "&nbsp;&nbsp;&nbsp;(".round(100*$sumhaltis/$sumekis,2)."%)";
	echo "</td>\n";
	echo "<td>".$sumfinis;
	if ($sumekis>0) echo "&nbsp;&nbsp;&nbsp;(".round(100*$sumfinis/$sumekis,2)."%)";
	echo "</td>\n</tr>\n</tfoot>\n</table>\n";

}
?>
			<h2><? echo $lgv_laux.$lgv_lauxMonato." :";?> 
			<a href="#" onClick="window.open('stat-monatoj.php','','resizable=no,scrollbars=no,location=no,top=100,left=100,width=620,height=520');">
			<img src="bildoj/grafiko.png"></a></h2>
			<p><?=$lgv_klarigo_lauxMonato?></p>
			<? stat_monatoj(); ?>		
		</div>
	</div>
<?include "pagxpiedo.inc.php";?>        
