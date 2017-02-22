<?php
$temo="monato";
include "stat.inc.php";
function stat_monatoj() {
	global $bdd;
	$moisactuel = date("Ym");
	// le dernier jour est le jour "0" du mois suivant (mois +1) ou 31 pour décembre (décembre + 1 n'a pas de sens)
	if (date("m")==12) {
		$dernierJour=31;
	} else {
		$dernierJour = date("d",mktime(0,0,0,date("m")+1,0,date("Y")));
	}
	?>
	<table class="stat">
	<thead><tr>
	<td class='vide'>&nbsp;</td>
	<td class='col1' colspan='5'>Ont commencé ce mois</td>
	<td class='col1' colspan='2'>Ont terminé ce mois</td>
	</tr></thead>
	<thead><tr>
	<td class='vide'>&nbsp;</td>
	<td class='col1'>total</td>
	<td class='col1'>sont actuellement en cours</td>
	<td class='col1'>ont abandonné</td>
	<td class='col1'>ont fini</td>
	<td class='col1'>nb jours pour finir</td>


	<td class='col1'>Ont abandonné ce mois-ci</td>
	<td class='col1'>Ont fini le cours ce mois-ci</td>
	</tr>
	</thead>
	
	<?php

	// initialisation des totaux
	$sumekis=0;
	$sumhaltis=0;
	$sumfinis=0;
	//initialise la variable stat:
	$anneeEnCours = date('Y');
	for ($annee=2002;$annee<=$anneeEnCours;$annee++) {
		for ($mois=1;$mois<=12;$mois++) {
			$ClefDate = ($mois<10)?$annee."0".$mois:$annee.$mois;
			$stat[$ClefDate]=array("ekis"=>0,"finis"=>0,"haltis"=>0,"monat-haltis"=>0,"monat-finis"=>0,"nb-jours"=>0);
		}
	}

	// laux monatoj
	$demando = "select nuna_kurso.id as id, nuna_kurso.stato as stato, MONTH(nuna_kurso.ekdato) as ekmonato, YEAR(nuna_kurso.ekdato) as ekjaro, MONTH(nuna_kurso.findato) as finmonato,YEAR(nuna_kurso.findato) as finjaro,DATEDIFF(nuna_kurso.findato,nuna_kurso.ekdato) as nbjours from nuna_kurso, personoj where nuna_kurso.studanto=personoj.id order by ekjaro,ekmonato";
	$result = $bdd->query($demando) or die(print_r($bdd->errorInfo()));

	while($row = $result->fetch()) {
		// on fait les variables $ekdato à partir du mois et de l'année, ainsi avril 2010 devient : 201004
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
				$stat[$ekdato]["nb-jours"]+=$row["nbjours"];
			}
		}
	}
        $demando = "select * from monatoj ";
        $result = $bdd->query($demando) or die(print_r($bdd->errorInfo()));
        while ($row=$result->fetch()) {
          $nomo_monatoj[$row["kodo"]]=$row["nomo"];
        }
	krsort($stat);
	foreach($stat as $key => $value) {
		// on "cache" les mois qui n'ont aucune valeur non nulles
		if ($value["ekis"]==0 && $value["haltis"]==0 &&$value["finis"]==0 ){
			continue;
		}
		echo "<tr>\n";
		//ereg("([0-9]{4})([0-9]{2})", $key,$trancxita);
		$mois = substr($key,4,2);
		$annee = substr($key,0,4);
		// affiche le mois contenu dans nomo_monatoj et l'ann?

		echo "<td class='col1'>".$nomo_monatoj[$mois]." ".$annee."</td>\n";
					
		// affiche ceux qui ont commence                
		echo "<td>&nbsp;".$value["ekis"];
		// echo " (F : ".$value["monat-finis"].")/(H : ".$value["monat-haltis"].")";
		if ($key==$moisactuel) {
			// evaluation de la valeur sur le dernier jour (regle de 3 par rapport ?a valeur du jour, le dernier jour et le jour d'aujourd'hui)
			$estimation = round(($value["ekis"]*$dernierJour)/date("j"));
			echo "&nbsp;(".$estimation.")";
		}			
		echo "</td>\n";
		// affiche ceux qui sont actuellement en cours (total inscrit du mois - haltis et finis)
		$encours = $value["ekis"]-$value["monat-haltis"]-$value["monat-finis"];
		echo "<td>&nbsp;".$encours;
		echo "</td>";
		// affiche ceux qui ont abandonné mais commencé ce mois ci (monat-haltis)
		echo "<td>&nbsp;".$value["monat-haltis"];
		echo "</td>";
		// affiche ceux qui ont fini mais commencé ce mois ci (monat-finis)
		//$pourcentageFinisCxiMonate="(".round(100*$value["monat-finis"]/$value["ekis"]).")";
		if ($value["ekis"]==0||$value["monat-finis"]==0) {
			$pourcentageFinisCxiMonate="";
		} else {
			$pourcentageFinisCxiMonate="(".round(100*$value["monat-finis"]/$value["ekis"])."%)";
		}
		echo "<td>&nbsp;".$value["monat-finis"]."&nbsp;".$pourcentageFinisCxiMonate;
		echo "</td>";
		// affiche le nombre jours moyens pour arriver à ce résultat :
		if (($value["nb-jours"]==0)or($value["monat-finis"]==0)) {
			$nbmoyen="&nbsp;";
		} else {
			$nbmoyen=round($value["nb-jours"]/$value["monat-finis"]);
		}
		
		echo "<td>&nbsp;".$nbmoyen;
		echo "</td>";
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
	echo "<td>Total</td>\n";
	echo "<td>".$sumekis."</td>\n";
	echo "<td>".$sumhaltis;
	if ($sumekis>0) echo "&nbsp;&nbsp;&nbsp;(".round(100*$sumhaltis/$sumekis,2)."%)";
	echo "</td>\n";
	echo "<td>".$sumfinis;
	if ($sumekis>0) echo "&nbsp;&nbsp;&nbsp;(".round(100*$sumfinis/$sumekis,2)."%)";
	echo "</td>\n</tr>\n</tfoot>\n</table>\n";

}
?>
			<h2>Répartition par mois :</h2>
			<p>Entre parenthèses figure une estimation pour le mois en cours</p>
			<?php stat_monatoj(); ?>		
		</div>
	</div>
<?php include "pagxpiedo.inc.php";?>        
