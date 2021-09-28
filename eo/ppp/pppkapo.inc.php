<?php
include_once "../../util.php";
$kurso="PP";
$korpo="pasxo";
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
} else {
	header("Location:../../index.php?erarkodo=8");
}
// vérifie les injections de XSS
if (isset($section) && !is_numeric($section)) {
	header("Location:../../index.php?erarkodo=24");
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
($subjekto=="pasxo01.php")?($jamaligxi="ne"):($jamaligxi="jes");

if (substr($subjekto,0,13)=="antauxklarigo") {
	$parto="antauxklarigo";
	$numcxap="00";
} else {
	$numcxap=substr($subjekto,3,2);
	$lec=substr($subjekto,0,3);
	$parto=substr($subjekto,4,2);
	if ($parto==".p") {$parto="";}
}
if ($parto!="antauxklarigo") 
	{
		// ER 05.10.2015 : correction pour passage en PHP 5.4
		//session_register("aligxilo");
		// on met en session l'aligxilo
		if (isset($aligxilo)) {
			$_SESSION['aligxilo']=$aligxilo;
		}
	}

$pagxtitolo="pa&#349;oj al plena posedo"; 

include $vojo."pagxkapo.inc.php";
?>
<script type="text/javascript" src="../../xAlUtf8.js"></script>	
<?php 
if (isset($leciono)) {
	getListoLecionoj('PP',$leciono);
}
?>

