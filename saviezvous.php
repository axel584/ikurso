<?php
// « Le saviez-vous ? » : liste des messages, ceux déjà reçus par mail peuvent être relus (#891).
include "util.php";
require_once __DIR__ . "/api/SaviezvousAPI.php";
$pagxtitolo="Le saviez-vous ?";
$korpo="informoj";
$persono_id=isset($_SESSION["persono_id"])?$_SESSION["persono_id"]:"";
if ($persono_id=="") {header("Location:index.php?erarkodo=8"); exit;}
$persono = apartigiPersonon($persono_id);

$saviezvous = new SaviezvousAPI($bdd);
// numéro => date de réception, null pour les envois d'avant le 22/10/2026 (date inconnue, voir sql/41) :
// tester avec array_key_exists(), pas isset(). Les administrateurs peuvent tout lire.
$ricevitaj = array();
foreach ($saviezvous->senditaj((int)$persono_id) as $sendita) {
	$ricevitaj[(int)$sendita["numero"]] = $sendita["dato"];
}
$cxiujVideblaj = ($persono["rajtoj"]=="A");
$numero = isset($_GET["numero"]) && ctype_digit((string)$_GET["numero"]) ? (int)$_GET["numero"] : null;
$korpoMesagxo = null;
if ($numero !== null && ($cxiujVideblaj || array_key_exists($numero, $ricevitaj))) {
	$korpoMesagxo = $saviezvous->korpo($numero);
	if ($korpoMesagxo !== null) {
		$korpoMesagxo = SaviezvousAPI::personigi($korpoMesagxo, (int)$persono_id, $urlracine);
	}
}

include "pagxkapo.inc.php";
?>

<div class="row">
	<article class="col s12 m10 l7 offset-m1 offset-l2">
		<section id="saviezvous">
<?php if ($korpoMesagxo !== null) { ?>
			<p><a href="saviezvous.php" class="primaire-texte"><i class="material-icons tiny">arrow_back</i> Tous les « Le saviez-vous ? »</a></p>
			<p class="saviezvous-dato">N° <?php echo $numero; ?><?php if (isset($ricevitaj[$numero])) { echo ", reçu le ".htmlspecialchars(date("d/m/Y", strtotime($ricevitaj[$numero])), ENT_QUOTES, "UTF-8"); } ?></p>
			<div class="card-panel white saviezvous-mesagxo">
				<?php echo $korpoMesagxo; // fichiers du site (mails/), pas une saisie ?>
			</div>
<?php } else { ?>
			<h1>Le saviez-vous ?</h1>
<?php if ($numero !== null) { ?>
			<p class="saviezvous-dato">Ce message n’est pas encore disponible pour vous.</p>
<?php } ?>
			<p>Après chaque journée de travail sur le cours, vous recevez par mail une anecdote sur l’espéranto. Retrouvez ici celles que vous avez déjà reçues&nbsp;; les autres arriveront au fil de votre apprentissage.</p>
			<ul class="collection saviezvous-listo">
<?php foreach ($saviezvous->listo() as $mesagxo) {
	$n = (int)$mesagxo["numero"];
	if ($cxiujVideblaj || array_key_exists($n, $ricevitaj)) { ?>
				<li class="collection-item ricevita"><a href="saviezvous.php?numero=<?php echo $n; ?>"><span class="numero"><?php echo $n; ?>.</span> <?php echo htmlspecialchars($mesagxo["titolo"], ENT_QUOTES, "UTF-8"); ?></a></li>
<?php } else { ?>
				<li class="collection-item nericevita"><span class="numero"><?php echo $n; ?>.</span> <span class="stato">pas encore reçu</span></li>
<?php }
} ?>
			</ul>
<?php } ?>
		</section>
	</article>
</div>

<?php include "pagxpiedo.inc.php";?>
