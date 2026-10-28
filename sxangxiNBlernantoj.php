<?php
include "util.php";
require_once "api/LernantojAPI.php";
$pagxtitolo="Modifier le nombre d’élèves";
$korpo="miajlernantoj";
$persono_id=isset($_SESSION["persono_id"])?(int)$_SESSION["persono_id"]:0;
if ($persono_id==0) {header("Location:index.php?erarkodo=8"); exit;}
$persono = apartigiPersonon($persono_id);
if (!$persono || ($persono["rajtoj"]!='A' && $persono["rajtoj"]!='K')) {header("Location:index.php?erarkodo=4"); exit;}
$farite=isset($_GET["farite"])?$_GET["farite"]:"";

$lernantojAPI = new LernantojAPI($bdd);
$kursoj = $lernantojAPI->korekteblajKursoj($persono_id);
include "pagxkapo.inc.php";
?>
<div class="row">
	<article class="col s12 m10 l6 offset-m1 offset-l1">
		<h1>Modifier le nombre d’élèves</h1>

		<?php if ($farite=="jes") { ?>
			<p class="card-panel green lighten-4">Vos données ont été mises à jour.</p>
		<?php } ?>

		<?php if (!$kursoj) { ?>
			<p>Vous n’êtes inscrit comme correcteur d’aucun cours. Pour corriger un cours, <a href="reago.php">contactez les administrateurs</a>.</p>
		<?php } else { ?>
			<p class="parto">Indiquez, pour chaque cours, le nombre maximum d’élèves que vous souhaitez suivre.
				Indiquez 0 pour ne plus recevoir de nouveaux élèves dans ce cours&nbsp;: vous garderez ceux que vous suivez déjà.</p>

			<form method="post" action="sxangxiNBlernantoj2.php" class="nblernantoj">
				<table class="striped">
					<thead>
						<tr>
							<th>Cours</th>
							<th class="center-align">Élèves en cours</th>
							<th class="center-align">Nombre maximum</th>
						</tr>
					</thead>
					<tbody>
					<?php foreach ($kursoj as $kurso) {
						$kodo = htmlspecialchars($kurso["kodo"], ENT_QUOTES, "UTF-8"); ?>
						<tr>
							<td><label for="kiom_<?php echo $kodo; ?>"><?php echo htmlspecialchars($kurso["nomo"], ENT_QUOTES, "UTF-8"); ?></label></td>
							<td class="center-align"><?php echo (int)$kurso["nunaj"]; ?></td>
							<td class="center-align">
								<input type="number" min="0" step="1" required id="kiom_<?php echo $kodo; ?>" name="<?php echo $kodo; ?>" value="<?php echo (int)$kurso["kiom_lernantoj"]; ?>">
							</td>
						</tr>
					<?php } ?>
					</tbody>
				</table>

				<p>
					<button type="submit" class="btn waves-effect waves-light primaire"><i class="material-icons left">check</i>Valider</button>
					<a href="miajlernantoj.php" class="btn-flat waves-effect">Retour à mes élèves</a>
				</p>
			</form>

			<p class="noto">Le nombre que vous indiquez est un maximum, rarement atteint&nbsp;: les nouveaux élèves sont répartis entre
				tous les correcteurs disponibles (voir le <a href="gvidilo.php#combien">Guide du correcteur</a>).
				Pour corriger un autre cours, <a href="reago.php">contactez les administrateurs</a>.</p>
		<?php } ?>
	</article>
</div>
<?php include "pagxpiedo.inc.php";?>
