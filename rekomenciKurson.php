<?php
include "util.php";
require_once "api/KontoAPI.php";
$pagxtitolo="Recommencer un cours";
$korpo="informoj";
$persono_id = isset($_SESSION["persono_id"]) ? (int)$_SESSION["persono_id"] : 0;
if ($persono_id == 0) {header("Location:index.php?erarkodo=8"); exit;}
$konto = new KontoAPI($bdd);
$kursoj = $konto->kursojKunProgreso($persono_id);
$eraro = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
	$kurso = isset($_POST["kurso"]) ? (string)$_POST["kurso"] : "";
	$pasvorto = isset($_POST["pasvorto"]) ? (string)$_POST["pasvorto"] : "";
	if (!array_key_exists($kurso, $kursoj)) {
		$eraro = "Choisissez le cours à recommencer.";
	} elseif (!isset($_POST["konfirmo"])) {
		$eraro = "Cochez la case pour confirmer que vous voulez tout effacer.";
	} elseif (!$konto->pasvortoGxustas($persono_id, $pasvorto)) {
		$eraro = "Mot de passe incorrect.";
	} else {
		$konto->forigiProgreson($persono_id, $kurso);
		header("Location:personinformoj.php?erarkodo=27"); exit;
	}
}

header("Cache-Control: no-cache, must-revalidate");
include "pagxkapo.inc.php";
?>
	<div class="row">
		<article class="col s12 m10 l7 offset-m1 offset-l2">
			<h1>Recommencer un cours depuis le début</h1>
<?php if (count($kursoj) == 0) { ?>
			<p>Vous n’avez encore aucune progression enregistrée dans un cours.</p>
			<p><a class="btn waves-effect waves-light blue" href="personinformoj.php">Retour</a></p>
<?php } else { ?>
			<div class="card-panel red lighten-4">
				<p><b>À utiliser uniquement si vous voulez reprendre un cours à zéro.</b></p>
				<p>Cette action efface définitivement, pour le cours choisi, toutes vos réponses aux exercices, leurs corrections, les leçons envoyées à votre correcteur, les pages marquées comme terminées, vos évaluations des leçons et votre progression dans la révision du vocabulaire. <b>Elle est irréversible.</b></p>
			</div>
			<p>Votre compte, vos autres cours et votre correcteur sont conservés. Pensez à <a href="eksportiDatumojn.php">exporter vos données</a> si vous voulez garder une trace de vos réponses.</p>
			<form method="post" action="rekomenciKurson.php">
				<div class="row">
					<div class="col s12">
<?php foreach ($kursoj as $kodo => $nomo) { ?>
						<p><label>
							<input name="kurso" type="radio" value="<?php echo htmlspecialchars($kodo, ENT_QUOTES, 'UTF-8');?>"<?php if (count($kursoj) == 1) {echo " checked";}?>>
							<span><?php echo htmlspecialchars($nomo, ENT_QUOTES, 'UTF-8');?></span>
						</label></p>
<?php } ?>
					</div>
					<div class="col s12">
						<p><label>
							<input name="konfirmo" type="checkbox" value="1">
							<span>Je comprends que toutes mes réponses et ma progression dans ce cours seront effacées définitivement.</span>
						</label></p>
					</div>
					<div class="input-field col s12 m6">
						<input id="pasvorto" name="pasvorto" type="password" required autocomplete="current-password">
						<label for="pasvorto">Votre mot de passe, pour confirmer</label>
					</div>
				</div>
<?php if ($eraro != "") { ?>
				<p class="red-text"><?php echo $eraro;?></p>
<?php } ?>
				<a class="btn-flat waves-effect" href="personinformoj.php">Annuler</a>
				<button class="btn waves-effect waves-light red" type="submit">Effacer ma progression et recommencer</button>
			</form>
<?php } ?>
		</article>
	</div>
<?php include "pagxpiedo.inc.php";?>
