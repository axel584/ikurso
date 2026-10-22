<?php
// Désinscription d'un mail non sollicité en un clic, sans connexion (#920).
// Le lien du mail est signé (AgordojAPI::sxlosilo) : on ne peut pas désinscrire quelqu'un d'autre.
// Accepte aussi le POST « List-Unsubscribe=One-Click » envoyé par les messageries (RFC 8058).
include "util.php";
require_once "api/AgordojAPI.php";

$id = isset($_REQUEST["id"]) ? (string)$_REQUEST["id"] : "";
$agordo = isset($_REQUEST["agordo"]) ? (string)$_REQUEST["agordo"] : "";
$sxlosilo = isset($_REQUEST["sxlosilo"]) ? (string)$_REQUEST["sxlosilo"] : "";
$valida = ctype_digit($id) && AgordojAPI::kontroliSxlosilon((int)$id, $agordo, $sxlosilo);
$celpersono = $valida ? apartigiPersonon((int)$id) : null;
$agordojAPI = new AgordojAPI($bdd);

// bouton « se désabonner » de la messagerie : pas de page à afficher
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["List-Unsubscribe"])) {
	if ($celpersono && $agordojAPI->sxangxi((int)$id, $agordo, false)) {
		protokolo((int)$id, "MALABONO", $celpersono["enirnomo"]." ne reçoit plus ".$agordo." (bouton de la messagerie)");
	}
	http_response_code($celpersono ? 200 : 400);
	exit;
}

$reaboni = $_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["reaboni"]);
if ($celpersono) {
	if ($agordojAPI->sxangxi((int)$id, $agordo, $reaboni)) {
		protokolo((int)$id, "MALABONO", $celpersono["enirnomo"].($reaboni ? " reçoit de nouveau " : " ne reçoit plus ").$agordo." (lien du mail)");
	}
}

$pagxtitolo = "Préférences d’envoi des mails";
$korpo = "informoj";
include "pagxkapo.inc.php";
?>

	<div class="row">
		<article class="col s12 m9 l6 offset-m1 offset-l1">
			<h1>Préférences d’envoi des mails</h1>
<?php if (!$celpersono) { ?>
			<p>Ce lien n’est pas valide : il a peut-être été coupé par votre messagerie.</p>
			<p>Vous pouvez choisir les mails que vous recevez dans vos <a href="personinformoj.php">données personnelles</a> une fois connecté, ou nous écrire en répondant simplement au mail reçu.</p>
<?php } elseif ($reaboni) { ?>
			<p>C’est noté : vous recevrez de nouveau <?php echo htmlspecialchars(AgordojAPI::AGORDOJ[$agordo], ENT_QUOTES, "UTF-8"); ?>.</p>
<?php } else { ?>
			<p>C’est noté : vous ne recevrez plus <?php echo htmlspecialchars(AgordojAPI::AGORDOJ[$agordo], ENT_QUOTES, "UTF-8"); ?>.</p>
			<form method="post" action="malaboni.php">
				<input type="hidden" name="id" value="<?php echo (int)$id; ?>">
				<input type="hidden" name="agordo" value="<?php echo htmlspecialchars($agordo, ENT_QUOTES, "UTF-8"); ?>">
				<input type="hidden" name="sxlosilo" value="<?php echo htmlspecialchars($sxlosilo, ENT_QUOTES, "UTF-8"); ?>">
				<button type="submit" name="reaboni" value="1" class="btn waves-effect waves-light">Finalement, je souhaite continuer à les recevoir</button>
			</form>
<?php } ?>
<?php if ($celpersono) { ?>
			<p>Vous pouvez choisir les autres mails que vous recevez dans vos <a href="personinformoj.php">données personnelles</a>.</p>
<?php } ?>
		</article>
	</div>

<?php include "pagxpiedo.inc.php";?>
