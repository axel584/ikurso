<?php
$temo="monato";
include "stat.inc.php";
$monatoj = $statistikojAPI->monatoj();
$monatnomoj = array("", "janvier", "février", "mars", "avril", "mai", "juin", "juillet", "août", "septembre", "octobre", "novembre", "décembre");
$nunaMonato = date("Ym");
// pour le mois en cours, estimation au dernier jour du mois (règle de trois sur les jours écoulés)
$takso = (int)date("t") / (int)date("j");
$sumo = array("ekis" => 0, "haltis" => 0, "finis" => 0);

function kunTakso(int $kiom, bool $nuna, float $takso): string {
	return $kiom.($nuna ? " <span class=\"grey-text\">(".round($kiom * $takso).")</span>" : "");
}

function kunProcento(int $kiom, int $entute): string {
	return $kiom.($kiom > 0 ? " <span class=\"grey-text\">(".procento($kiom, $entute).")</span>" : "");
}
?>
		<h2>Élèves par mois</h2>
		<p>Les premières colonnes suivent les élèves selon leur mois de début, les deux dernières comptent les abandons et les fins de cours du mois.
			Entre parenthèses, une estimation pour la fin du mois en cours.</p>
		<div class="stat-rulumebla">
		<table class="striped stat">
			<thead>
				<tr><th></th><th class="center-align" colspan="7">Ont commencé ce mois</th><th class="center-align" colspan="2">Pendant ce mois</th></tr>
				<tr><th>Mois</th><th class="right-align">Inscrits</th><th class="right-align">Ont validé leur inscription</th>
					<th class="right-align">Ont reçu un correcteur</th><th class="right-align">Sont en cours</th>
					<th class="right-align">Ont abandonné</th><th class="right-align">Ont fini</th><th class="right-align">Jours pour finir</th>
					<th class="right-align">Abandons</th><th class="right-align">Fins de cours</th></tr>
			</thead>
			<tbody>
			<?php foreach ($monatoj as $kodo => $m) {
				$nuna = $kodo == $nunaMonato;
				$sumo["ekis"] += $m["ekis"];
				$sumo["haltis"] += $m["haltis"];
				$sumo["finis"] += $m["finis"]; ?>
				<tr>
					<td><?php echo $monatnomoj[(int)substr($kodo, 4, 2)]."&nbsp;".substr($kodo, 0, 4); ?></td>
					<td class="right-align"><?php echo $m["aligxis"]; ?></td>
					<td class="right-align"><?php echo $m["aktivigita"]; ?></td>
					<td class="right-align"><?php echo kunTakso($m["ekis"], $nuna, $takso); ?></td>
					<td class="right-align"><?php echo $m["ekis"] - $m["monatHaltis"] - $m["monatFinis"]; ?></td>
					<td class="right-align"><?php echo $m["monatHaltis"]; ?></td>
					<td class="right-align"><?php echo kunProcento($m["monatFinis"], $m["ekis"]); ?></td>
					<td class="right-align"><?php if ($m["monatFinis"] > 0) echo round($m["tagoj"] / $m["monatFinis"]); ?></td>
					<td class="right-align"><?php echo kunTakso($m["haltis"], $nuna, $takso); ?></td>
					<td class="right-align"><?php echo kunTakso($m["finis"], $nuna, $takso); ?></td>
				</tr>
			<?php } ?>
			</tbody>
			<tfoot>
				<tr><th>Total</th><th></th><th></th><th class="right-align"><?php echo $sumo["ekis"]; ?></th><th></th><th></th><th></th><th></th>
					<th class="right-align"><?php echo kunProcento($sumo["haltis"], $sumo["ekis"]); ?></th>
					<th class="right-align"><?php echo kunProcento($sumo["finis"], $sumo["ekis"]); ?></th></tr>
			</tfoot>
		</table>
		</div>
	</article>
</div>
<?php include "pagxpiedo.inc.php";?>
