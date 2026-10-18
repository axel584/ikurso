<?php
include "util.php";
require_once "api/EksportoAPI.php";
$persono_id = isset($_SESSION["persono_id"]) ? (int)$_SESSION["persono_id"] : 0;
if ($persono_id == 0) {header("Location:index.php?erarkodo=8"); exit;}

$eksporto = (new EksportoAPI($bdd))->eksporti($persono_id);
$enirnomo = preg_replace('/[^A-Za-z0-9_-]/', '_', $eksporto["tabeloj"]["personoj"]["linioj"][0]["enirnomo"] ?? "eksporto");

header("Content-Type: application/json; charset=utf-8");
header("Content-Disposition: attachment; filename=\"ikurso-".$enirnomo."-".date("Y-m-d").".json\"");
header("Cache-Control: no-store");
echo json_encode($eksporto, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_INVALID_UTF8_SUBSTITUTE);
