<?php
$temo="kurso";
include "stat.inc.php";
$kursoj = $statistikojAPI->kursoj();

function kursoVico(string $nomo, int $enKurso, int $haltis, array $kurso): void {
	echo "<tr><td>".htmlspecialchars($nomo, ENT_QUOTES, "UTF-8")."</td>"
		."<td class=\"right-align\">".$enKurso."</td><td class=\"right-align\">".procento($enKurso, $kurso["enKurso"])."</td>"
		."<td class=\"right-align\">".$haltis."</td><td class=\"right-align\">".procento($haltis, $kurso["entute"])."</td></tr>\n";
}
?>
		<h2>Élèves par cours et par leçon</h2>
		<p>Le premier pourcentage est calculé sur les élèves en cours, le second sur l’ensemble des élèves du cours.</p>
		<?php if (!array_filter(array_column($kursoj, "entute"))) { ?>
		<p>Aucun élève pour le moment.</p>
		<?php }
		foreach ($kursoj as $kurso) {
			if ($kurso["entute"] == 0) continue; ?>
		<h3><?php echo htmlspecialchars($kurso["nomo"], ENT_QUOTES, "UTF-8"); ?></h3>
		<div class="stat-rulumebla">
		<table class="striped stat">
			<thead>
				<tr><th>Leçon</th><th class="right-align">En cours</th><th class="right-align">%</th>
					<th class="right-align">Ont abandonné</th><th class="right-align">%</th></tr>
			</thead>
			<tbody>
				<?php kursoVico("N’ont pas encore commencé", $kurso["N"], $kurso["H"], $kurso);
				foreach ($kurso["lecionoj"] as $leciono) {
					kursoVico(html_entity_decode(strip_tags($leciono["titolo"]), ENT_QUOTES, "UTF-8"), $leciono["K"], $leciono["H"], $kurso);
				} ?>
				<tr><td>Ont fini le cours</td><td class="right-align"><?php echo $kurso["F"]; ?></td><td></td><td></td>
					<td class="right-align"><?php echo procento($kurso["F"], $kurso["entute"]); ?></td></tr>
			</tbody>
			<tfoot>
				<tr><th>Total</th><th class="right-align"><?php echo $kurso["entute"]; ?></th><th></th><th></th><th></th></tr>
			</tfoot>
		</table>
		</div>
		<?php } ?>
	</article>
</div>
<?php include "pagxpiedo.inc.php";?>
