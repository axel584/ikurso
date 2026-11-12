<?php
// Correction par IA (#1130) : corrige les leçons envoyées au correcteur IA (table ia_korektadoj).
// À lancer chaque minute par cron ; un seul passage à la fois (verrou). Voir api/IaKorektadoAPI.php.
// php cron/ia_korektado.php --relancer : remet d'abord en attente les leçons en échec.
// Réglages dans config.php : $OPENROUTER_KEY, $IA_MODELO, $IA_TAGA_LIMO.
if (PHP_SAPI !== "cli") { // le dossier cron/ est servi par Apache : pas de lancement depuis le web
	http_response_code(403);
	exit;
}
chdir(__DIR__);
include "../db.inc.php";
include "../util.php";
require_once "../api/IaKorektadoAPI.php";

$seruro = fopen(sys_get_temp_dir()."/ikurso-ia-korektado.lock", "c");
if (!$seruro || !flock($seruro, LOCK_EX | LOCK_NB)) {
	exit(0); // passage précédent pas fini
}
$ia = IaKorektadoAPI::elAgordoj($bdd);
// --relancer : remet en attente les leçons en échec, après avoir corrigé la cause (crédit, modèle, clé…)
if (in_array("--relancer", isset($argv) ? $argv : array(), true)) {
	echo date("Y-m-d H:i:s")." ".$ia->relanci()." leçon(s) en échec remise(s) en attente\n";
}
foreach ($ia->traktiAtendantajn() as $linio) {
	echo date("Y-m-d H:i:s")." ".$linio."\n";
}
