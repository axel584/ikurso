<?php
include_once "../../util.php";
$kurso="CG";
$korpo="dlek";
$vojo="../../";
include_once ("../../db.inc.php");
include_once ("../../webui.inc.php");
$persono_id=isset($_SESSION["persono_id"])?$_SESSION["persono_id"]:"";
$erarkodo=isset($_GET["erarkodo"])?$_GET["erarkodo"]:"";
$noto=isset($_GET["noto"])?$_GET["noto"]:"";
$temo=isset($_GET["temo"])?$_GET["temo"]:"";
// si on a mis les réponses en session lors d'une précédente tentative, on les récupère
$memorkurso=isset($_SESSION["memorkurso"])?$_SESSION["memorkurso"]:array(); 
malfermiDatumbazon();
if ($persono_id) {
	$persono = apartigiPersonon($persono_id);
}

$pagxo=explode("/", $_SERVER['SCRIPT_NAME']);
$subjekto=$pagxo[count($pagxo)-1];
$query="select * from lecionoj where kurso='$kurso' and retpagxo='$subjekto'";
$result = $bdd->query($query) or die(print_r($bdd->errorInfo()));
if ($result->rowCount()!="0"){
	$row=$result->fetch();
	$titolo=$row["titolo"];
	$nunleciono=$row["numero"];
} else {
	$titolo="";
	$nunleciono="";
}
($subjekto=="lec01.php")?($jamaligxi="ne"):($jamaligxi="jes");

if (substr($subjekto,0,5)=="intro") {
	$parto="intro";
	$numcxap="00";
} else {
	$numcxap=substr($subjekto,3,2);
	$lec=substr($subjekto,0,3);
	$parto=substr($subjekto,4,2);
	if ($parto==".p") {$parto="";}
}
if ($parto!="intro") 
	{
		// ER 05.10.2015 : correction pour passage en PHP 5.4
		//session_register("aligxilo");
		// on met en session l'aligxilo
		if (isset($aligxilo)) {
			$_SESSION['aligxilo']=$aligxilo;
		}
	}

// titre et description pour les moteurs de recherche (#1076)
require_once __DIR__."/../../api/SeoAPI.php";
if ($nunleciono!=="") {
	$kanonaSekcio = (isset($section) && ctype_digit((string)$section)) ? (int)$section : 1;
	$sekcioTitolo = (new SeoAPI($bdd))->sekcioTitolo("CG", (int)$nunleciono, $kanonaSekcio);
	$pagxtitolo = ($sekcioTitolo ? $sekcioTitolo." – " : "")."Leçon ".$nunleciono." du cours d’espéranto";
	$pagxpriskribo = "Leçon ".$nunleciono." du cours d’espéranto gratuit pour débutants".($sekcioTitolo ? " : ".$sekcioTitolo : "")
		.". Exercices corrigés automatiquement et, si vous le souhaitez, un correcteur bénévole.";
} else {
	$pagxtitolo = "Cours d’espéranto gratuit pour débutants en 10 leçons";
	$pagxpriskribo = "Apprenez l’espéranto gratuitement en 10 leçons, à votre rythme : exercices corrigés automatiquement et, si vous le souhaitez, un correcteur bénévole.";
}

include $vojo."pagxkapo.inc.php";
// pagxkapo.inc.php ne connaît que la personne connectée : les pages de cours montrent aussi le travail de l'invité (#1092)
require_once __DIR__."/../../api/GastoAPI.php";
$persono_id = GastoAPI::lernantoId();
?>
<script type="text/javascript" src="../../xAlUtf8.js"></script>	
<?php 
if (isset($leciono)) {
	getListoLecionoj('CG',$leciono);
}
montriGastoAvizon();
?>

