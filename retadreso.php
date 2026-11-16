<?php
// Changement d'adresse e-mail par l'élève (#1107) : formulaire, renvoi ou annulation de la demande,
// validation par le lien reçu à la nouvelle adresse (sans être connecté), et validation ou annulation
// par un administrateur depuis la fiche de l'élève. La logique est dans api/RetadresoAPI.php.
include "util.php";
require_once "api/RetadresoAPI.php";
require_once "api/KontoAPI.php";
require_once "api/GastoAPI.php";
$pagxtitolo = "Changer d'adresse e-mail";
$korpo = "informoj";
$retadresoAPI = new RetadresoAPI($bdd);
$h = function ($t) { return htmlspecialchars((string)$t, ENT_QUOTES, "UTF-8"); };

// lien de validation : pas besoin d'être connecté (le lien peut être ouvert sur un autre appareil)
if (isset($_GET["sxlosilo"])) {
	$rezulto = $retadresoAPI->validiPerSxlosilo((string)$_GET["sxlosilo"]);
	$validita = is_int($rezulto) ? apartigiPersonon($rezulto) : null;
	header("Cache-Control: no-cache, must-revalidate");
	include "pagxkapo.inc.php";
	?>
	<div class="row">
		<article class="col s12 m10 l7 offset-m1 offset-l2">
			<h1>Changement d’adresse e-mail</h1>
<?php if ($validita) { ?>
			<p class="retadreso-validita">C’est fait&nbsp;: l’adresse de votre compte est maintenant <b><?php echo $h($validita["retadreso"]); ?></b>. Les messages du cours arriveront désormais à cette adresse, et c’est avec elle que vous pouvez vous connecter.</p>
<?php } else { ?>
			<p class="retadreso-eraro red-text"><?php echo $h($rezulto); ?></p>
<?php } ?>
			<p><a class="btn waves-effect waves-light blue" href="<?php echo isset($_SESSION["persono_id"]) ? "personinformoj.php" : "index.php"; ?>">Continuer</a></p>
		</article>
	</div>
<?php
	include "pagxpiedo.inc.php";
	exit;
}

$persono_id = isset($_SESSION["persono_id"]) ? (int)$_SESSION["persono_id"] : 0;
if ($persono_id == 0) {header("Location:index.php?erarkodo=8"); exit;}
$persono = apartigiPersonon($persono_id);
$ago = isset($_POST["ago"]) ? (string)$_POST["ago"] : "";

// administrateur, depuis la fiche de l'élève
if ($persono["rajtoj"] === "A" && isset($_POST["celpersono_id"])) {
	$celpersono_id = (int)$_POST["celpersono_id"];
	$rezulto = "";
	if ($ago === "validi") {
		$rezulto = $retadresoAPI->validi($celpersono_id, "un administrateur (".$persono["enirnomo"].")");
	} elseif ($ago === "nuligi") {
		$retadresoAPI->nuligi($celpersono_id, "un administrateur (".$persono["enirnomo"].")");
	}
	header("Location:administri.php?celpersono_id=".$celpersono_id."&retadreso=".($rezulto === "" ? $ago : "eraro")); exit;
}

if ($persono["rajtoj"] === GastoAPI::RAJTO) {header("Location:index.php"); exit;}

$eraro = "";
$nova = "";
if ($_SERVER["REQUEST_METHOD"] === "POST") {
	if ($ago === "resendi") {
		$retadresoAPI->resendi($persono_id);
		header("Location:personinformoj.php?retadreso=resendita"); exit;
	} elseif ($ago === "nuligi") {
		$retadresoAPI->nuligi($persono_id);
		header("Location:personinformoj.php?retadreso=nuligita"); exit;
	} elseif ($ago === "peti") {
		$nova = isset($_POST["nova"]) ? (string)$_POST["nova"] : "";
		$pasvorto = isset($_POST["pasvorto"]) ? (string)$_POST["pasvorto"] : "";
		if (!(new KontoAPI($bdd))->pasvortoGxustas($persono_id, $pasvorto)) {
			$eraro = "Mot de passe incorrect.";
		} else {
			$eraro = $retadresoAPI->peti($persono_id, $nova);
			if ($eraro === "") {
				header("Location:personinformoj.php?retadreso=petita"); exit;
			}
		}
	}
}

header("Cache-Control: no-cache, must-revalidate");
include "pagxkapo.inc.php";
?>
	<div class="row">
		<article class="col s12 m10 l7 offset-m1 offset-l2">
			<h1>Changer d’adresse e-mail</h1>
			<p>Adresse actuelle&nbsp;: <b><?php echo $h($persono["retadreso"]); ?></b></p>
			<p>Nous enverrons un lien de confirmation à la nouvelle adresse. Votre compte garde l’adresse actuelle tant que vous n’avez pas cliqué sur ce lien&nbsp;; un message prévient aussi l’adresse actuelle de la demande.</p>
			<form method="post" action="retadreso.php">
				<input type="hidden" name="ago" value="peti">
				<div class="row">
					<div class="input-field col s12 m8">
						<input id="nova" name="nova" type="email" required autocomplete="email" value="<?php echo $h($nova); ?>">
						<label for="nova"<?php echo $nova !== "" ? " class='active'" : ""; ?>>Nouvelle adresse e-mail</label>
					</div>
					<div class="input-field col s12 m8">
						<input id="pasvorto" name="pasvorto" type="password" required autocomplete="current-password">
						<label for="pasvorto">Votre mot de passe, pour confirmer</label>
					</div>
				</div>
<?php if ($eraro !== "") { ?>
				<p class="retadreso-eraro red-text"><?php echo $h($eraro); ?></p>
<?php } ?>
				<a class="btn-flat waves-effect" href="personinformoj.php">Annuler</a>
				<button class="btn waves-effect waves-light blue" type="submit">Envoyer le lien de confirmation</button>
			</form>
		</article>
	</div>
<?php include "pagxpiedo.inc.php";?>
