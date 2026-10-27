<?php
// Retire un mot de la révision du vocabulaire de l'élève (ou de l'invité), ou l'y remet (#914).
// POST vorto_id, forigi (1 : retirer, 0 : remettre). Réponse JSON {"mesagxo":"ok"|"ko"}.
include "../util.php";
require_once __DIR__."/../api/GastoAPI.php";
require_once __DIR__."/../api/VortojAPI.php";
header("Content-Type: application/json");
$persono_id = (int)GastoAPI::lernantoId();
$vorto_id = isset($_POST["vorto_id"]) ? (int)$_POST["vorto_id"] : 0;
$forigi = isset($_POST["forigi"]) && $_POST["forigi"] === "1";
if ($_SERVER["REQUEST_METHOD"] != "POST" || $persono_id <= 0 || $vorto_id <= 0) {
	http_response_code(400);
	echo json_encode(array("mesagxo" => "ko"));
	exit;
}
$vortojAPI = new VortojAPI($bdd);
echo json_encode(array("mesagxo" => $vortojAPI->forigi($persono_id, $vorto_id, $forigi) ? "ok" : "ko"));
