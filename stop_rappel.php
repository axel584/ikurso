<?php
// Ancien lien des mails de rappel (stop_rappel.php?id=…), sans signature (#920).
// Les nouveaux mails pointent vers malaboni.php avec un lien signé. Les anciens liens, déjà dans
// les boîtes de réception, restent acceptés jusqu'à la date ci-dessous, puis ne désinscrivent plus personne.
include "config.php";
require_once "api/AgordojAPI.php";

const FINO_MALNOVAJ_LIGILOJ = "2026-12-01";

$id = isset($_REQUEST["id"]) ? (string)$_REQUEST["id"] : "";
if (ctype_digit($id) && date("Y-m-d") < FINO_MALNOVAJ_LIGILOJ) {
	header("Location: ".AgordojAPI::malaboniLigilo((int)$id, "RAPPEL"));
} else {
	header("Location: ".rtrim($urlracine, "/")."/malaboni.php");
}
exit;
