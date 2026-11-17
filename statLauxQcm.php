<?php
// Statistiques : questions des QCM des pages, de la plus difficile à la plus facile (part de premiers essais faux),
// d'après les clics enregistrés par api/QcmAPI.php (site et application, anonymes). La mauvaise proposition la plus
// choisie indique où ajouter ou améliorer un indice (champ « indices » du QCM).
$temo="qcm";
include "stat.inc.php";
require_once "api/QcmAPI.php";
$minimumo = isset($_GET["min"]) ? max(1, min(1000, (int)$_GET["min"])) : 10;
$demandoj = (new QcmAPI($bdd))->malfacilaj($minimumo);

function qcmTeksto(string $html): string {
	return htmlspecialchars(trim(html_entity_decode(strip_tags($html), ENT_QUOTES, "UTF-8")), ENT_QUOTES, "UTF-8");
}
?>
		<h2>Questions des QCM les plus difficiles</h2>
		<p>Une question compte à partir de <?php echo $minimumo; ?> premiers essais
			(<a target="_self" href="statLauxQcm.php?min=1">toutes</a>,
			<a target="_self" href="statLauxQcm.php?min=10">10</a>,
			<a target="_self" href="statLauxQcm.php?min=30">30</a>).
			Clics sur le site et dans l’application, sans les élèves ; une question modifiée dans la page repart de zéro.</p>
		<?php if (!$demandoj) { ?>
		<p>Pas encore assez de réponses.</p>
		<?php } else { ?>
		<div class="stat-rulumebla">
		<table class="striped stat qcm-stat">
			<thead>
				<tr><th>Page</th><th>Question</th><th>Bonne réponse</th><th>Mauvaise réponse la plus choisie</th>
					<th class="right-align">1<sup>ers</sup> essais</th><th class="right-align">Faux au 1<sup>er</sup> essai</th></tr>
			</thead>
			<tbody>
			<?php foreach ($demandoj as $d) {
				$malgxusta = "";
				if ($d["malgxustaj"]) {
					$propono = array_key_first($d["malgxustaj"]);
					$malgxusta = (isset($d["propositions"][$propono - 1]) ? qcmTeksto($d["propositions"][$propono - 1]) : "?")
						." <span class=\"grey-text\">(".$d["malgxustaj"][$propono]." fois)</span>";
				}
				$teksto = $d["teksto"] !== "" ? qcmTeksto($d["teksto"]) : "<img src=\"".htmlspecialchars($d["bildo"], ENT_QUOTES, "UTF-8")."\" alt=\"\" class=\"qcm-stat-bildo\">"; ?>
				<tr>
					<td><a href="<?php echo htmlspecialchars($d["url"], ENT_QUOTES, "UTF-8"); ?>" title="<?php echo htmlspecialchars($d["titolo"], ENT_QUOTES, "UTF-8"); ?>"><?php
						echo htmlspecialchars($d["kurso"], ENT_QUOTES, "UTF-8")." ".$d["leciono"].".".$d["sekcio"]; ?></a> – Q<?php echo $d["demando"]; ?></td>
					<td><?php echo $teksto; ?></td>
					<td><?php echo qcmTeksto($d["propositions"][$d["reponse"] - 1] ?? ""); ?></td>
					<td><?php echo $malgxusta; ?></td>
					<td class="right-align"><?php echo $d["unuaj"]; ?></td>
					<td class="right-align"><?php echo procento($d["eraroj"], $d["unuaj"]); ?></td>
				</tr>
			<?php } ?>
			</tbody>
		</table>
		</div>
		<?php } ?>
	</article>
</div>
<?php include "pagxpiedo.inc.php";?>
