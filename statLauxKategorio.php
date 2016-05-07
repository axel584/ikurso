<?
$temo="kategorio";
include "stat.inc.php";

function stat_rajtoj() {
	global $lingvo,$lgv,$lgv_studantoj,$lgv_korekt,$lgv_sumo,$lgv_maksimumo,$lgv_liberajLokoj;

	//$sumo = mysql_num_rows($result);

	$obj_kursoj = new kursoj;
	$kursoj = $obj_kursoj->get_all_objects($lgv);
	$stat['Total']['PlaceDisponible']=0; // disponeblaj lokoj
	$stat['Total']['Korektantoj']=0; // kiom da korektantoj
	$stat['Total']['NbLernantoj']=0; // kiom da lernantoj
	$stat['Total']['PlaceRestante']=0; // disponeblaj lokoj

	// elektas la datumbazon
	mysql_select_db("ikurso");
	// kiom da lernantoj ?
	$demando = "SELECT nuna_kurso.kurso as kurso, count( nuna_kurso.kurso) as kiom FROM nuna_kurso, personoj WHERE (stato = 'K' or stato='N') and  nuna_kurso.studanto = personoj.id and personoj.lingvo = '".$lingvo."' GROUP BY nuna_kurso.kurso ";

	$result = mysql_query($demando) or die (  "SELECT : malbona demando :".$demando.":".mysql_error());

	while ($row=mysql_fetch_array($result)) {
		$stat[$row["kurso"]]['NbLernantoj']=$row["kiom"];
		$stat['Total']['NbLernantoj']+=$row["kiom"]; // kiom da lernantoj
	}

	// kiom da disponeblaj lokoj ?
	$demando = "SELECT korektebla_kurso.kurso as kurso, sum( korektebla_kurso.kiom_lernantoj ) as kiom,count( korektebla_kurso.kiom_lernantoj ) as kiomKorektantoj FROM korektebla_kurso, personoj where korektebla_kurso.korektanto = personoj.id and korektebla_kurso.kiom_lernantoj>0 and personoj.lingvo = '".$lingvo."' GROUP BY korektebla_kurso.kurso";
	
	$result = mysql_query($demando) or die (  "SELECT : malbona demando :".$demando.":".mysql_error());

	while ($row=mysql_fetch_array($result)) {
		$stat[$row["kurso"]]['PlaceDisponible']=$row["kiom"];
		$stat[$row["kurso"]]['Korektantoj']=$row["kiomKorektantoj"];
		$stat['Total']['PlaceDisponible']+=$row["kiom"]; // kiom da lernantoj
		$stat[$row["kurso"]]['PlaceRestante']=$stat[$row["kurso"]]['PlaceDisponible']-$stat[$row["kurso"]]['NbLernantoj'];
	}

	// kiom da korektantoj entute ?
	$demando = "select distinct personoj.id from personoj,korektebla_kurso where (rajtoj='K' or rajtoj='A') and lingvo='".$lingvo."' and personoj.id=korektebla_kurso.korektanto and korektebla_kurso.kiom_lernantoj>0 order by personoj.id";
	$result = mysql_query($demando) or die (  "SELECT : malbona demando :".$demando.":".mysql_error());
	$stat['Total']['Korektantoj'] = mysql_num_rows($result);

	// faire la meme chose pour le nombre de place choisies par les correcteurs 
	// et un truc different pour la somme (des correcteurs, des eleves)
	// quand on calcule les correcteurs, on en profite pour mettre le nombre de place disponible
	// la somme des eleves doit etre calculee la somme des corecteurs doit etree trouvee par requete

	$stat['Total']['PlaceRestante']=$stat['Total']['PlaceDisponible']-$stat['Total']['NbLernantoj'];
	echo "<table class=\"stat\">\n<thead>\n<tr>\n";
	echo "<td class='vide'>&nbsp;</td>\n";
	echo "<td>&nbsp;".$lgv_studantoj."&nbsp;</td>\n";
	echo "<td>&nbsp;&nbsp;".$lgv_korekt."&nbsp;&nbsp;</td>\n";
	echo "<td>&nbsp;".$lgv_maksimumo."&nbsp;</td>\n";
	echo "<td>&nbsp;".$lgv_liberajLokoj."</td>\n";
	echo "</tr>\n</thead>\n";
	echo "<tbody>\n";
	
	for ($k=0;$k<count($kursoj);$k++) {
		echo "<tr>\n";
		echo "<td class='col1'>".$kursoj[$k]->get_nomo()."</td>\n";
		echo "<td>".$stat[$kursoj[$k]->get_kodo()]['NbLernantoj']."</td>\n";
		echo "<td>".$stat[$kursoj[$k]->get_kodo()]['Korektantoj']."</td>\n";
		echo "<td>".$stat[$kursoj[$k]->get_kodo()]['PlaceDisponible']."</td>\n";
		echo "<td>".$stat[$kursoj[$k]->get_kodo()]['PlaceRestante']."</td>\n";
		echo "</tr>\n";
	}
	echo "</tbody>\n<tfoot>\n";
	echo "<tr>\n";
	echo "<td class='col1'>".$lgv_sumo."</td>";
	echo "<td>".$stat['Total']['NbLernantoj']."</td>";
	echo "<td>".$stat['Total']['Korektantoj']."</td>";
	echo "<td>".$stat['Total']['PlaceDisponible']."</td>";
	echo "<td>".$stat['Total']['PlaceRestante']."</td>";
	echo "</tr>\n</tfoot>\n</table>\n";
}

function stat_seksoj() {
	global $lingvo,$lgv,$lgv_vira,$lgv_virina;
	echo "<table class=\"stat\">\n<thead>\n<tr>\n";
	echo "<td>&nbsp;".$lgv_vira."&nbsp;</td>\n";
	echo "<td>&nbsp;".$lgv_virina."&nbsp;</td>\n";
	echo "<td>???</td>\n</tr>\n</thead>\n";
	echo "<tbody>\n<tr>\n";

	// elektas la datumbazon
	mysql_select_db("ikurso");

	// kiom da viroj ?
	$demando = "select * from personoj where (rajtoj='P' or rajtoj='S') and sekso='M' and personoj.lingvo='".$lingvo."'";
	$result = mysql_query($demando) or die (  "SELECT : malbona demando :".$demando.":".mysql_error());
	$sumo = mysql_num_rows($result);
	echo "<td>".$sumo."</td>\n";

	// kiom da virinoj ?
	$demando = "select * from personoj where (rajtoj='P' or rajtoj='S') and sekso='I' and personoj.lingvo='".$lingvo."'";
	$result = mysql_query($demando) or die (  "SELECT : malbona demando :".$demando.":".mysql_error());
	$sumo = mysql_num_rows($result);
	echo "<td>".$sumo."</td>\n";

	// kiom da ??? sekso ?
	$demando = "select * from personoj where (rajtoj='P' or rajtoj='S') and (sekso<>'M' and sekso<>'I') and personoj.lingvo='".$lingvo."'";
	$result = mysql_query($demando) or die (  "SELECT : malbona demando :".$demando.":".mysql_error());
	$sumo = mysql_num_rows($result);
	echo "<td>".$sumo."</td>\n";

	echo "</tr>\n</tbody>\n</table>\n";

}
?>
			<h2><? echo $lgv_laux.$lgv_lauxKategorio." :";?></h2>
			<p><?=$lgv_lauxKategorioNoto;?></p>
			<? stat_rajtoj(); ?>
			<h2><? echo $lgv_laux.$lgv_lauxSekso." :";?></h2>
			<p>tableau</p>
			<? stat_seksoj(); ?>
		</div>
<?include "pagxpiedo.inc.php";?>