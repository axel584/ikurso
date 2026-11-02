<?php
$temo="lando";
include "stat.inc.php";
$landoj = $statistikojAPI->landoj();
$entute = array_sum(array_column($landoj, "kiom"));
?>
		<h2>Élèves en cours par pays</h2>
		<p>Élèves qui n’ont pas encore commencé ou qui sont en cours, selon le pays indiqué à l’inscription.</p>
		<table class="striped stat">
			<thead>
				<tr><th>Pays</th><th class="right-align">Élèves</th><th class="right-align">%</th></tr>
			</thead>
			<tbody>
			<?php foreach ($landoj as $lando) { ?>
				<tr>
					<td><?php echo htmlspecialchars($lando["nomo"], ENT_QUOTES, "UTF-8"); ?></td>
					<td class="right-align"><?php echo (int)$lando["kiom"]; ?></td>
					<td class="right-align"><?php echo procento((int)$lando["kiom"], $entute); ?></td>
				</tr>
			<?php } ?>
			</tbody>
			<tfoot>
				<tr><th>Total</th><th class="right-align"><?php echo $entute; ?></th><th></th></tr>
			</tfoot>
		</table>
	</article>
</div>
<?php include "pagxpiedo.inc.php";?>
