<?php
include_once "../../util.php";
$kurso="3N";
$korpo="3n";
$vojo="../../";
include_once ("../../fr.inc.php");
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

// on récupère les réponses précédentes que l'on va mettre dans la variable memorkurso
if (isset($leciono)&&isset($persono_id)) {
	$memorkurso = getRegistritajnRespondojn('3N',$leciono,$persono_id);
}

/*
 * rappel pour les élèves non identifiés.
*/
function atentigo() {
	echo "<p class='eo eta'>Pour obtenir une lettre accentuée, il suffit de taper la lettre suivie d’un <b>x</b>&nbsp;:&nbsp;";
	echo "en tapant <b>cx</b>, <b>sx</b>, <b>ux</b>... vous obtiendrez <b>ĉ</b>, <b>ŝ</b>, <b>ŭ</b>...</p>\n";
}
function ekzerco($x2u, $nbLig, $cols6="N",$nbvortoj=0) {
	global $demandoj, $memorkurso, $persono_id, $numcxap;
	//
	// x2u = sistemo uzata en la ekzerco. Se true, ni uzas la auxtomatan anstatauxigon de x per cxapelo
	// nbLig = nombro da linioj por cxiuj respondo. Se = 1, ni uzas <input>, ne pli da, ni uzas <textarea>
	// cols6 : Se "J", la demandoj estas aranĝitaj en du kolumnoj. Se ne, en nur unu kolumno.
	//
	if ($persono_id=="") {
		$idenfication=False;
	} else {
		$idenfication =True;
	}
	if ($cols6!="J") {
		echo "<div class=\"row\">";
	}
	foreach ($demandoj as $k => $v) {
		if ($cols6=="J") {
			echo "<div class=\"col s6\">";
		}
		echo "<p class='col s12 demando'>".$k.". ".$v."</p>\n";
		echo "<input type='hidden' name=\"dem_ekz".$numcxap."_".sprintf('%02d', $k)."\" value=\"".$k." ".$v."\">";

		if ($nbLig==1) {
			echo "<div class='input-field col s12'><input name=\"res_ekz".$numcxap."_".sprintf('%02d', $k)."\"";
			// si on n'est pas identifié et que ce n'est pas la première leçon, on empeche de remplir les exercices si on n'est pas connecté
			if ($idenfication==False && $numcxap<>"01") {
				echo " READONLY onClick='window.alert(\"Identifiez-vous en haut à droite pour pouvoir remplir les exercices\");'";
			}
			if ($x2u) {
				echo " onkeyup='xAlUtf8(this)'";
			}
			echo " value=\"";
			$var="res_ekz".$numcxap."_".sprintf('%02d', $k);
			if (isset($memorkurso[$var])){
				echo htmlspecialchars(stripslashes($memorkurso[$var]));
			}
			echo "\"></div>";
		}
		else
		{
			if ($nbvortoj!=0) {
				$dataVortoj = "data-vortoj='".$nbvortoj."'";
			}
			echo "<div class='input-field col s12'><textarea id=\"res_ekz".$numcxap."_".sprintf('%02d', $k)."\" ".$dataVortoj." class='materialize-textarea' rows='".$nbLig."' name=\"res_ekz".$numcxap."_".sprintf('%02d', $k)."\"";
			if ($idenfication==False) {
				echo " READONLY onClick='window.alert(\"Identifiez-vous en haut à droite pour pouvoir remplir les exercices\");'";
			}
			if ($x2u) {
				echo " onkeyup='xAlUtf8(this)' ";
			}
			echo ">";
			$var="res_ekz".$numcxap."_".sprintf('%02d', $k);
			if (isset($memorkurso[$var])){
				echo htmlspecialchars(stripslashes($memorkurso[$var]));
			}
			echo "</textarea><label for=\"res_ekz".$numcxap."_".sprintf('%02d', $k)."\"></div>";

		}
		if ($cols6=="J") {
			echo "</div>";
		}
	}
	if ($cols6!="J") {
		echo "</div>";
	}

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
($subjekto=="leciono01.php")?($jamaligxi="ne"):($jamaligxi="jes");

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

$pagxtitolo="Cours d’espéranto de 3ème niveau"; 

include $vojo."pagxkapo.inc.php";
?>
<script type="text/javascript" src="../../xAlUtf8.js"></script>	
<?php 
if (isset($leciono)) {
	getListoLecionoj('3N',$leciono);
}
?>

