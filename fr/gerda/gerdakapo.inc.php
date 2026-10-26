<?php
$kurso="GR";
$korpo="gerda";
$pagxo=explode("/", $_SERVER["SCRIPT_NAME"]);
$subjekto=$pagxo[count($pagxo)-1];
if ($subjekto!="korekti.php") {
	$vojo="../../";
	include_once $vojo."util.php";
	include_once ($vojo."db.inc.php");
	include_once ($vojo."webui.inc.php");
}
$persono_id=isset($_SESSION["persono_id"])?$_SESSION["persono_id"]:"";
$erarkodo=isset($_GET["erarkodo"])?$_GET["erarkodo"]:"";
malfermiDatumbazon();
if ($persono_id) {
	$persono = apartigiPersonon($persono_id);
}
// on récupère les réponses précédentes que l'on va mettre dans la variable memorkurso
// if (isset($leciono)&&isset($persono_id)) {
// 	$memorkurso = getRegistritajnRespondojn('GR',$leciono,$persono_id);
// }

$url=$_SERVER["REQUEST_URI"];
$pagxo=explode("/", $_SERVER["SCRIPT_NAME"]);
$subjekto=$pagxo[count($pagxo)-1];

if ($subjekto=="korekti.php") {
	$parto="ek";
} else {
	if (substr($subjekto,0,5)=="index") {
		$parto="index";
		$numcxap="00";
		$cxapitro="";
	} else if (substr($subjekto,0,8)=="konsiloj") {
		$parto="konsiloj";
		$numcxap="00";
		$cxapitro="";
	} else if (substr($subjekto,0,6)=="vlist"){
		$parto="vlist";
		$numcxap="00";
		$cxapitro="";
	} else {
		$numcxap=substr($subjekto,4,2);
		$cxapitro=substr($subjekto,0,6);
		if (substr($subjekto,0,4)=="lasu") {
			$parto="lasu";
		} else {
			$parto=substr($subjekto,6,2);
			if ($parto==".p") {$parto="";}
		}
	}
}
$varcxap=$cxapitro.".php";
$query="select * from lecionoj where kurso='$kurso' and retpagxo='$varcxap'";
$result = $bdd->query($query) or die(print_r($bdd->errorInfo()));
if ($row=$result->fetch()){
	$titolo=$row["titolo"];
	$nunleciono=$row["numero"];
} else {
	$titolo="";
	$nunleciono="";
}
if ($parto=="index") 
	{$titolo="un roman pour apprendre";}
else 
	{
		if (isset($aligxilo)) {
			$_SESSION['aligxilo']=$aligxilo;
		}
	}

($subjekto=="cxap01ek.php")?($jamaligxi="ne"):($jamaligxi="jes");


// titre et description pour les moteurs de recherche (#1076)
require_once __DIR__."/../../api/SeoAPI.php";
if ($parto=="lasu") {
	$pagxtitolo = "Lasu min paroli plu : textes faciles en espéranto".($titolo!="" ? " – ".$titolo : "");
	$pagxpriskribo = "Lasu min paroli plu, de Claude Piron : de courts textes faciles en espéranto pour continuer à progresser après le cours débutant.";
} else if ($subjekto=="vocabula.php") {
	$pagxtitolo = "Lexique espéranto-français de Gerda malaperis";
	$pagxpriskribo = "Le lexique de Gerda malaperis, roman de Claude Piron : les mots espéranto du roman avec leur traduction en français.";
} else if ($nunleciono!=="") {
	$kanonaSekcio = (isset($section) && ctype_digit((string)$section)) ? (int)$section : 1;
	$sekcioTitolo = (new SeoAPI($bdd))->sekcioTitolo("GR", (int)$nunleciono, $kanonaSekcio);
	$pagxtitolo = ($sekcioTitolo ? $sekcioTitolo." – " : "")."Gerda malaperis, ".html_entity_decode($titolo, ENT_QUOTES, "UTF-8");
	$pagxpriskribo = "Gerda malaperis, roman de Claude Piron pour apprendre l’espéranto en lisant : ".html_entity_decode($titolo, ENT_QUOTES, "UTF-8")
		.($sekcioTitolo ? ", ".$sekcioTitolo : "").". Cours gratuit, avec un correcteur bénévole si vous le souhaitez.";
} else {
	$pagxtitolo = "Gerda malaperis : un roman pour apprendre l’espéranto";
	$pagxpriskribo = "Gerda malaperis, roman de Claude Piron en 25 chapitres, pour progresser en espéranto après le cours débutant. Cours gratuit, avec un correcteur bénévole si vous le souhaitez.";
}

include $vojo."pagxkapo.inc.php";
// pagxkapo.inc.php ne connaît que la personne connectée : les pages de cours montrent aussi le travail de l'invité (#1092)
require_once __DIR__."/../../api/GastoAPI.php";
$persono_id = GastoAPI::lernantoId();
/* 
 * recuperation des variables du formulaire si on vient d'une page d'exercice
 */
if ($parto=="ek") {
	//echo "recuperation des donnees de session";
	if (isset($_SESSION["memorkurso"])) {
		$memorkurso=$_SESSION["memorkurso"];
	}
} else {
	//echo "sauvegarde dans memorkurso<br>";
	if (isset($memorkurso)) {
		$_SESSION['memorkurso']=$memorkurso;
		foreach($_POST as $key => $value) {
				$memorkurso[$key]=$value;
				//echo "key=".$key." val=".$value."<br>";
		}
	}
}

?>
<script type="text/javascript" src="../../xAlUtf8.js"></script>
<?php 
if (isset($leciono)) {
	getListoLecionoj('GR',$leciono);
}
montriGastoAvizon();
?>
