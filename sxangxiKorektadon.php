<?php
// Changement de mode de correction depuis le profil (#627, #1130) : correction automatique (IA) ou correcteur bénévole,
// pour le cours en cours de l'élève. Formulaire de personinformoj.php.
include "util.php";
require_once __DIR__ . "/api/SendadoAPI.php";
$persono_id=isset($_SESSION["persono_id"])?(int)$_SESSION["persono_id"]:0;
if ($persono_id==0) {header("Location:index.php?erarkodo=8"); exit;}
if ($_SERVER["REQUEST_METHOD"]!=="POST") {header("Location:personinformoj.php"); exit;}
$kurso=isset($_POST["kurso"])?(string)$_POST["kurso"]:"";
$al=isset($_POST["al"])?(string)$_POST["al"]:"";
if (!isset(SendadoAPI::KURSOJ[$kurso]) || ($al!=="ia" && $al!=="volontulo")) {header("Location:personinformoj.php"); exit;}
$rezulto=(new SendadoAPI($bdd, $urlracine))->sxangxiKorektadon($persono_id, $kurso, $al==="ia");
header("Location:personinformoj.php?korektado=".urlencode($rezulto=="farita" ? $al : $rezulto)."#korektado");
exit;
