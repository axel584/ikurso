<?php
// Choix de l'identifiant après l'inscription avec un compte Google (#119) : Google ne fournit pas d'identifiant,
// le compte en a un provisoire (google_…) tant que l'élève n'a pas choisi le sien. Cette page s'affiche à chaque
// connexion par Google d'ici là. La logique est dans api/GoogleAPI.php.
include "util.php";
require_once "api/GoogleAPI.php";
require_once "api/JWTAuth.php";
$pagxtitolo = "Choisir votre identifiant";
$korpo = "informoj";
$h = function ($t) { return htmlspecialchars((string)$t, ENT_QUOTES, "UTF-8"); };

$persono_id = isset($_SESSION["persono_id"]) ? (int)$_SESSION["persono_id"] : 0;
if ($persono_id == 0) {header("Location:index.php?erarkodo=8"); exit;}
$google = new GoogleAPI($bdd);
if (!$google->elektota($persono_id)) {header("Location:personinformoj.php"); exit;}

$eraro = "";
$enirnomo = "";
if ($_SERVER["REQUEST_METHOD"] === "POST") {
	$enirnomo = isset($_POST["enirnomo"]) ? (string)$_POST["enirnomo"] : "";
	$eraro = (string)$google->elekti($persono_id, $enirnomo);
	if ($eraro === "") {
		// le cookie JWT porte l'identifiant
		JWTAuth::setCookie(JWTAuth::generate(apartigiPersonon($persono_id)));
		header("Location:personinformoj.php?aktivigo=ok"); exit;
	}
} else {
	$enirnomo = $google->proponi($persono_id);
}

header("Cache-Control: no-cache, must-revalidate");
include "pagxkapo.inc.php";
?>
	<div class="row">
		<article class="col s12 m10 l7 offset-m1 offset-l2">
			<h1>Bienvenue&nbsp;!</h1>
			<p>Votre compte est créé avec votre compte Google. Il ne reste qu’à choisir votre identifiant&nbsp;: c’est le nom que verront votre correcteur et les autres élèves. Pour vous connecter ensuite, il suffira de cliquer à nouveau sur «&nbsp;Continuer avec Google&nbsp;».</p>
			<form method="post" action="elektiIdentigilon.php" id="elekti-identigilon">
				<div class="input-field">
					<input id="enirnomo" name="enirnomo" type="text" maxlength="32" required value="<?php echo $h($enirnomo); ?>" class="<?php echo $eraro !== "" ? "invalid" : ""; ?>">
					<label for="enirnomo" class="active">Identifiant</label>
<?php if ($eraro !== "") { ?>
					<span class="helper-text red-text identigilo-eraro"><?php echo $h($eraro); ?></span>
<?php } ?>
				</div>
				<button type="submit" class="btn waves-effect waves-light blue">Valider</button>
			</form>
		</article>
	</div>
<?php include "pagxpiedo.inc.php"; ?>
