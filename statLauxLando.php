<?php
$temo="lando";
include "stat.inc.php";
function stat_landoj() {
	global $bdd;
	echo "<table class=\"stat\">\n<tbody>\n";

	// laux landoj
	$demando = "select personoj.lando as lando from personoj,nuna_kurso where personoj.id=nuna_kurso.studanto and (personoj.rajtoj='P' or personoj.rajtoj='S') and (nuna_kurso.stato='N' or nuna_kurso.stato='K') and personoj.lingvo='fr'";
	$result = $bdd->query($demando) or die(print_r($bdd->errorInfo()));

	while($row = $result->fetch()) {
		if (isset($stat[$row["lando"]])) {
			$stat[$row["lando"]]++;	
		} else {
			$stat[$row["lando"]]=1;
		}
        
    }	
    $demando = "select * from landoj where lingvo='fr'";
    $result = $bdd->query($demando) or die(print_r($bdd->errorInfo()));
    while ($row=$result->fetch()) {
        $nomo_landoj[$row["kodo"]]=$row["nomo"];
    }
	ksort($stat);
	foreach($stat as $key => $value) {
		// si on n'est pas capable de connaitre le nom du pays dont le code est passé, on laisse tomber !
		if (!isset($nomo_landoj[$key])) {
			continue;
		}
		echo "<tr>\n";
       	echo "<td  class='col1'>&nbsp;".$nomo_landoj[$key]."&nbsp;</td>\n<td align='right'>&nbsp;".$value."&nbsp;</td>\n";
        echo "</tr>\n";
	}
        echo "</tbody>\n</table>\n";

}
?>
			<h2><?php echo "Répartition par pays :";?></h2>
			<?php stat_landoj(); ?>
<?php include "pagxpiedo.inc.php";?>