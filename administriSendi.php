<?php
// Fiche d'administration : renvoyer le lien d'activation ou envoyer un lien de mot de passe (#878).
// POST celpersono_id, ago (aktivigo | pasvorto). Réservé aux administrateurs.
include "util.php";
require_once __DIR__."/api/AktivigoAPI.php";
$persono_id=isset($_SESSION["persono_id"])?$_SESSION["persono_id"]:"";
if ($persono_id=="") {header("Location:index.php?erarkodo=8"); exit;}
$persono = apartigiPersonon($persono_id);
if (!$persono || $persono["rajtoj"]!='A' || $_SERVER["REQUEST_METHOD"]!="POST") {header("Location:index.php?erarkodo=4"); exit;}
$celpersono_id = isset($_POST["celpersono_id"]) ? (int)$_POST["celpersono_id"] : 0;
$ago = isset($_POST["ago"]) ? $_POST["ago"] : "";
$aktivigoAPI = new AktivigoAPI($bdd);
if ($ago=="aktivigo") {
	$sendita = $aktivigoAPI->sendiAktivigilon($celpersono_id, "aktivigi.html", "Nouvelle activation de votre compte pour apprendre gratuitement l'espéranto", "administranto", "RENVOIE ACTIVATION COMPTE");
	header("Location:administri.php?celpersono_id=".$celpersono_id.($sendita ? "&sendita=aktivigo" : "&erarkodo=sendi")); exit;
}
if ($ago=="pasvorto") {
	$eraro = $aktivigoAPI->sendiPasvortLigilon($celpersono_id);
	if ($eraro!=="") {
		$_SESSION["administri_eraro"] = $eraro;
		header("Location:administri.php?celpersono_id=".$celpersono_id."&erarkodo=sendi"); exit;
	}
	header("Location:administri.php?celpersono_id=".$celpersono_id."&sendita=pasvorto"); exit;
}
header("Location:administri.php?celpersono_id=".$celpersono_id); exit;
