<?php
include_once "../../util.php";
$kurso="CG";
$korpo="dlek";
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


/*
echo "memorkurso<br>";
$memorkurso=$_SESSION["memorkurso"];
	foreach($memorkurso as $key => $value) {
		echo "key=".$key." val=".$value."<br>";
	}
*/
/*
 * rappel pour les élèves non identifiés.
*/
function atentigo() {
	echo "<p class='eo rimarko'>Pour obtenir une lettre accentuée, il suffit de taper la lettre suivie d’un <em>x</em>&nbsp;:";
	echo "en tapant cx, sx, ux... vous obtiendrez ĉ, ŝ, ŭ...</p>\n";
}
function ekzerco($sist, $nbLig) {
	global $demandoj, $memorkurso, $persono_id, $numcxap;
	//
	// sist = sistemo uzata en la ekzerco. Se =U, ni uzas la auxtomatan anstatauxigon de x per cxapelo
	// nbLig = nombro da linioj por cxiuj respondo. Se = 1, ni uzas <input>, ne pli da, ni uzas <textarea>
	//
	if ($persono_id=="") {
		$idenfication=False;
	} else {
		$idenfication =True;
	}
	foreach ($demandoj as $k => $v) {
		echo "\t<p>".$k.". ".$v."</p>\n";
		echo "\t<p><input type='hidden' name=\"dem_ekz".$numcxap."_".$k."\" value=\"".$k." ".$v."\">\n";
		
		if ($nbLig==1) {
			echo "\t<input type='text' size='65' name=\"res_ekz".$numcxap."_".$k."\"";
			// si on n'est pas identifié et que ce n'est pas la première leçon, on empeche de remplir les exercices si on n'est pas connecté
			if ($idenfication==False && $numcxap<>"01") {
				echo " READONLY onClick='window.alert(\"Identifiez vous en haut à droite pour pouvoir remplir les exercices\");'";
			}
			echo " onkeyup='xAlUtf8(this)' ";
			echo "value=\"";
			$var="res_ekz".$numcxap."_".$k;
			if (isset($memorkurso[$var])){
				echo stripslashes($memorkurso[$var]);
			}
			echo "\">";
		}
		else
		{
			echo "\t<textarea cols='65' rows='".$nbLig."' name=\"res_ekz".$numcxap."_".$k."\"";
			if ($idenfication==False) {
				echo " READONLY onClick='window.alert(\"Identifiez vous en haut à droite pour pouvoir remplir les exercices\");'";
			}
			echo " onkeyup='xAlUtf8(this)' ";
			echo ">";
			$var="res_ekz".$numcxap."_".$k;
			if (isset($memorkurso[$var])){
				echo stripslashes($memorkurso[$var]);
			}
			echo "</textarea>";
		}
		echo "</p>\n";
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

$pagxtitolo="Cours d’espéranto en dix leçons"; 

include $vojo."pagxkapo.inc.php";
?>
	   
		<header id="superrigardo">
			<p>Cours d'espéranto en dix leçons :</p>
			<ul id="lecionoj">
				<li id="lec01" class="farita"><a href="lec01.php">1</a></li>
				<li id="lec02" class="farita"><a href="lec02.php">2</a></li>
				<li id="lec03" class="farita"><a href="lec03.php">3</a></li>
				<li id="lec04" class="farita"><a href="lec04.php">4</a></li>
				<li id="lec05" class="farita"><a href="lec05.php">5</a></li>
				<li id="lec06" class="nuna"><a href="lec06.php">6</a></li>
				<li id="lec07" class="nova"><a href="lec07.php">7</a></li>
				<li id="lec08" class="nova"><a href="lec08.php">8</a></li>
				<li id="lec09" class="nova"><a href="lec09.php">9</a></li>
				<li id="lec10" class="nova"><a href="lec10.php">10</a></li>
				<li id="lexique" class="nova"><a href="vocabula.php">lexique</a></li>
			</div>
		</header>