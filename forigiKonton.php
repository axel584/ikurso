<?php
include "util.php";
require_once "api/KontoAPI.php";
$pagxtitolo="Suppression du compte";
$korpo="informoj";
$persono_id = isset($_SESSION["persono_id"]) ? (int)$_SESSION["persono_id"] : 0;
if ($persono_id == 0) {header("Location:index.php?erarkodo=8"); exit;}
$persono = apartigiPersonon($persono_id);
$konto = new KontoAPI($bdd);
$malgxustaPasvorto = false;

if (KontoAPI::rajtasForigi($persono) && $_SERVER["REQUEST_METHOD"] === "POST") {
	$pasvorto = isset($_POST["pasvorto"]) ? (string)$_POST["pasvorto"] : "";
	if ($konto->pasvortoGxustas($persono_id, $pasvorto)) {
		$konto->forigi($persono_id);
		require_once "api/SessionAuth.php";
		require_once "api/JWTAuth.php";
		SessionAuth::logout();
		JWTAuth::clearCookie();
		header("Location:index.php?erarkodo=26"); exit;
	}
	$malgxustaPasvorto = true;
}

header("Cache-Control: no-cache, must-revalidate");
include "pagxkapo.inc.php";
?>
	<div class="row">
		<article class="col s12 m10 l7 offset-m1 offset-l2">
			<h1>Supprimer mon compte</h1>
<?php if (!KontoAPI::rajtasForigi($persono)) { ?>
			<p>Votre compte est un compte de correcteur ou d’administrateur. Pour le supprimer, contactez les administrateurs du cours, qui confieront vos élèves à un autre correcteur.</p>
			<p><a class="btn waves-effect waves-light blue" href="personinformoj.php">Retour</a></p>
<?php } else { ?>
			<p>La suppression efface définitivement votre compte, vos informations personnelles, vos réponses aux exercices, vos corrections et votre progression dans les cours. Elle ne peut pas être annulée.</p>
			<p>Si vous pensez reprendre un jour les cours, <a href="eksportiDatumojn.php">exportez d’abord vos données</a>&nbsp;: avec ce fichier, nous pourrons restaurer votre compte.</p>
			<p>L’abonnement à la lettre <i>Espéranto-Aktiv</i> n’est pas concerné&nbsp;: vous pouvez vous désabonner depuis la page de <a href="sxangxipersoninformojn.php">modification des données personnelles</a> avant de supprimer votre compte.</p>
			<form method="post" action="forigiKonton.php">
				<div class="row">
					<div class="input-field col s12 m6">
						<input id="pasvorto" name="pasvorto" type="password" required autocomplete="current-password">
						<label for="pasvorto">Votre mot de passe, pour confirmer</label>
<?php if ($malgxustaPasvorto) { ?>
						<span class="helper-text red-text">Mot de passe incorrect.</span>
<?php } ?>
					</div>
				</div>
				<a class="btn-flat waves-effect" href="personinformoj.php">Annuler</a>
				<button class="btn waves-effect waves-light red" type="submit">Supprimer définitivement mon compte</button>
			</form>
<?php } ?>
		</article>
	</div>
<?php include "pagxpiedo.inc.php";?>
