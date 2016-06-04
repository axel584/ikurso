<?php
$temo="kategorio";
include "stat.inc.php";

function stat_rajtoj() {
	global $bdd;

	// On récupère la liste des cours et on initialise la variable stat
	$demando = "select * from kursoj";
	$kursoj = array();
	$result = $bdd->query($demando) or die(print_r($bdd->errorInfo()));
	while ($row=$result->fetch()) {
		$kursoj[$row['kodo']]=$row['nomo'];
		$stat[$row["kodo"]]=array();
		$stat[$row["kodo"]]['PlaceDisponible']=0;
		$stat[$row["kodo"]]['Korektantoj']=0;
		$stat[$row["kodo"]]['PlaceRestante']=0;
		$stat[$row["kodo"]]['NbLernantoj']=0;
	}

	$stat['Total']['PlaceDisponible']=0; // disponeblaj lokoj
	$stat['Total']['Korektantoj']=0; // kiom da korektantoj
	$stat['Total']['NbLernantoj']=0; // kiom da lernantoj
	$stat['Total']['PlaceRestante']=0; // disponeblaj lokoj

	// kiom da lernantoj ?
	$demando = "SELECT nuna_kurso.kurso as kurso, count( nuna_kurso.kurso) as kiom FROM nuna_kurso, personoj WHERE (stato = 'K' or stato='N') and  nuna_kurso.studanto = personoj.id GROUP BY nuna_kurso.kurso ";

	$result = $bdd->query($demando) or die(print_r($bdd->errorInfo()));

	while ($row=$result->fetch()) {
		$stat[$row["kurso"]]['NbLernantoj']=$row["kiom"];
		$stat['Total']['NbLernantoj']+=$row["kiom"]; // kiom da lernantoj
	}

	// kiom da disponeblaj lokoj ?
	$demando = "SELECT korektebla_kurso.kurso as kurso, sum( korektebla_kurso.kiom_lernantoj ) as kiom,count( korektebla_kurso.kiom_lernantoj ) as kiomKorektantoj FROM korektebla_kurso, personoj where korektebla_kurso.korektanto = personoj.id and korektebla_kurso.kiom_lernantoj>0 GROUP BY korektebla_kurso.kurso";
	
	$result = $bdd->query($demando) or die(print_r($bdd->errorInfo()));

	while ($row=$result->fetch()) {
		$stat[$row["kurso"]]['PlaceDisponible']=$row["kiom"];
		$stat[$row["kurso"]]['Korektantoj']=$row["kiomKorektantoj"];
		$stat['Total']['PlaceDisponible']+=$row["kiom"]; // kiom da lernantoj
		$stat[$row["kurso"]]['PlaceRestante']=$stat[$row["kurso"]]['PlaceDisponible']-$stat[$row["kurso"]]['NbLernantoj'];
	}

	// kiom da korektantoj entute ?
	$demando = "select count(distinct personoj.id) as combien from personoj,korektebla_kurso where (rajtoj='K' or rajtoj='A') and personoj.id=korektebla_kurso.korektanto and korektebla_kurso.kiom_lernantoj>0 order by personoj.id";
	$result = $bdd->query($demando) or die(print_r($bdd->errorInfo()));

	$stat['Total']['Korektantoj'] = $result->fetch()['combien'];

	// faire la meme chose pour le nombre de place choisies par les correcteurs 
	// et un truc different pour la somme (des correcteurs, des eleves)
	// quand on calcule les correcteurs, on en profite pour mettre le nombre de place disponible
	// la somme des eleves doit etre calculee la somme des corecteurs doit etree trouvee par requete

	$stat['Total']['PlaceRestante']=$stat['Total']['PlaceDisponible']-$stat['Total']['NbLernantoj'];
	echo "<table class=\"stat\">\n<thead>\n<tr>\n";
	echo "<td class='vide'>&nbsp;</td>\n";
	echo "<td>&nbsp;élèves&nbsp;</td>\n";
	echo "<td>&nbsp;&nbsp;Corr.&nbsp;&nbsp;</td>\n";
	echo "<td>&nbsp;Nb max.<br>&nbsp;élèves&nbsp;</td>\n";
	echo "<td>&nbsp;Places<br>&nbsp;restantes</td>\n";
	echo "</tr>\n</thead>\n";
	echo "<tbody>\n";
	
	foreach($kursoj as $k=>$v) {
		echo "<tr>\n";
		echo "<td class='col1'>".$v."</td>\n";
		echo "<td>".$stat[$k]['NbLernantoj']."</td>\n";
		echo "<td>".$stat[$k]['Korektantoj']."</td>\n";
		echo "<td>".$stat[$k]['PlaceDisponible']."</td>\n";
		echo "<td>".$stat[$k]['PlaceRestante']."</td>\n";
		echo "</tr>\n";
	}
	echo "</tbody>\n<tfoot>\n";
	echo "<tr>\n";
	echo "<td class='col1'>Total</td>";
	echo "<td>".$stat['Total']['NbLernantoj']."</td>";
	echo "<td>".$stat['Total']['Korektantoj']."</td>";
	echo "<td>".$stat['Total']['PlaceDisponible']."</td>";
	echo "<td>".$stat['Total']['PlaceRestante']."</td>";
	echo "</tr>\n</tfoot>\n</table>\n";
}

function stat_seksoj() {
	global $bdd;
	echo "<table class=\"stat\">\n<thead>\n<tr>\n";
	echo "<td>&nbsp;H.&nbsp;</td>\n";
	echo "<td>&nbsp;F.&nbsp;</td>\n";
	echo "<td>???</td>\n</tr>\n</thead>\n";
	echo "<tbody>\n<tr>\n";

	// kiom da viroj ?
	$demando = "select count(*) as combien from personoj where (rajtoj='P' or rajtoj='S') and sekso='M'";
	$result = $bdd->query($demando) or die(print_r($bdd->errorInfo()));
	$sumo = $result->fetch()['combien'];
	echo "<td>".$sumo."</td>\n";

	// kiom da virinoj ?
	$demando = "select count(*) as combien from personoj where (rajtoj='P' or rajtoj='S') and sekso='I'";
	$result = $bdd->query($demando) or die(print_r($bdd->errorInfo()));
	$sumo = $result->fetch()['combien'];
	echo "<td>".$sumo."</td>\n";

	// kiom da ??? sekso ?
	$demando = "select count(*) as combien from personoj where (rajtoj='P' or rajtoj='S') and (sekso<>'M' and sekso<>'I')";
	$result = $bdd->query($demando) or die(print_r($bdd->errorInfo()));
	$sumo = $result->fetch()['combien'];
	echo "<td>".$sumo."</td>\n";

	echo "</tr>\n</tbody>\n</table>\n";

}
?>
			<h2>Répartition par catégorie :</h2>
			<p>Le maximum d’élèves possible correspond à la somme du nombre d’élèves qu’est prêt à corriger chaque correcteur.</p>
			<?php stat_rajtoj(); ?>
			<h2>Répartition par sexe :</h2>
			<?php stat_seksoj(); ?>
		</div>
<?php include "pagxpiedo.inc.php";?>