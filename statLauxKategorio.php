<?php
$temo="kategorio";
include "stat.inc.php";
$kategorioj = $statistikojAPI->kategorioj();
$seksoj = $statistikojAPI->seksoj();

function kategorioVico(array $vico, string $cxelo): void {
	echo "<tr><".$cxelo.">".htmlspecialchars($vico["nomo"], ENT_QUOTES, "UTF-8")."</".$cxelo.">";
	foreach (array("lernantoj", "korektantoj", "lokoj", "restantaj") as $kampo) {
		echo "<".$cxelo." class=\"right-align\">".(int)$vico[$kampo]."</".$cxelo.">";
	}
	echo "</tr>\n";
}
?>
		<h2>Élèves et correcteurs par cours</h2>
		<p>Le nombre maximum d’élèves est la somme des nombres d’élèves que chaque correcteur est prêt à suivre.</p>
		<table class="striped stat">
			<thead>
				<tr><th>Cours</th><th class="right-align">Élèves en cours</th><th class="right-align">Correcteurs</th>
					<th class="right-align">Nombre maximum d’élèves</th><th class="right-align">Places restantes</th></tr>
			</thead>
			<tbody>
			<?php foreach ($kategorioj["kursoj"] as $vico) { kategorioVico($vico, "td"); } ?>
			</tbody>
			<tfoot>
			<?php kategorioVico($kategorioj["sumo"], "th"); ?>
			</tfoot>
		</table>
		<p class="noto">Dans le total, un correcteur de plusieurs cours ne compte qu’une fois.</p>

		<h2>Élèves inscrits par sexe</h2>
		<?php $entute = array_sum($seksoj); ?>
		<table class="striped stat">
			<thead>
				<tr><th></th><th class="right-align">Élèves</th><th class="right-align">%</th></tr>
			</thead>
			<tbody>
			<?php foreach (array("viroj" => "Hommes", "virinoj" => "Femmes", "nekonataj" => "Non renseigné") as $kampo => $nomo) { ?>
				<tr><td><?php echo $nomo; ?></td><td class="right-align"><?php echo $seksoj[$kampo]; ?></td>
					<td class="right-align"><?php echo procento($seksoj[$kampo], $entute); ?></td></tr>
			<?php } ?>
			</tbody>
		</table>
	</article>
</div>
<?php include "pagxpiedo.inc.php";?>
