<?php
$temo="lando";
include "stat.inc.php";
function stat_landoj() {
	global $bdd;
	echo "<table class=\"stat\">\n<tbody>\n";

	// laux landoj
	$demando = "select personoj.lando as lando from personoj,nuna_kurso where personoj.id=nuna_kurso.studanto and (personoj.rajtoj='P' or personoj.rajtoj='S') and (nuna_kurso.stato='N' or nuna_kurso.stato='K') ";
	$result = $bdd->query($demando) or die(print_r($bdd->errorInfo()));

	while($row = $result->fetch()) {
		if ($row["lando"]==null || $row["lando"]=="XX" || $row["lando"]=="--") {
			$code_pays = "XX";
		} else {
			$code_pays = $row["lando"];
		}
		if (isset($stat[$code_pays])) {
			$stat[$code_pays]++;	
		} else {
			$stat[$code_pays]=1;
		}
        
    }	
    $demando = "select * from landoj";
    $result = $bdd->query($demando) or die(print_r($bdd->errorInfo()));
    while ($row=$result->fetch()) {
        $nomo_landoj[$row["kodo"]]=$row["nomo"];
    }
	ksort($stat);
	foreach($stat as $key => $value) {
		// si on n'est pas capable de connaitre le nom du pays dont le code est passé, on laisse tomber !
		if (!isset($nomo_landoj[$key])) {
			$nomo = "Inconnu";
		} else {
			$nomo = $nomo_landoj[$key];
		}
		echo "<tr>\n";
       	echo "<td  class='col1'>&nbsp;".$nomo."&nbsp;</td>\n<td align='right'>&nbsp;".$value."&nbsp;</td>\n";
        echo "</tr>\n";
	}
        echo "</tbody>\n</table>\n";

}
?>
			<h2><?php echo "Répartition par pays :";?></h2>
			<?php stat_landoj(); ?>
<?php include "pagxpiedo.inc.php";?>