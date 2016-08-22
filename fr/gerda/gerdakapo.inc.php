<?php
$kurso="GR";
$korpo="gerda";
$pagxo=explode("/", $_SERVER["SCRIPT_NAME"]);
$subjekto=$pagxo[count($pagxo)-1];
if ($subjekto!="korekti.php") {
	$vojo="../../";
	include $vojo."util.php";
	include_once ($vojo."fr.inc.php");
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
if (isset($leciono)&&isset($persono_id)) {
	$memorkurso = getRegistritajnRespondojn('GR',$leciono,$persono_id);
}

// tiu funkcio konstruas la liston de la tekstoj "lasu min..."
function konstruiLasuMenuon() {
	$tlasu = array (
		"01" => " 1. Izabela",
		"02" => " 2. Stranga strangulo",
		"03" => " 3. Amdeklaro",
		"04" => " 4. Lingvistiko",
		"05" => " 5. Ĉu vere vi ne volas labori?",
		"06" => " 6. La ulo, kiu ne plu pensas",
		"07" => " 7. Oni venis el alia mondo",
		"08" => " 8. Iru kiel vi volas",
		"09" => " 9. Zorgi pri zorgado",
		"10" => "10. La fortegulo",
		"11" => "11. Malkontentas la mekanikisto",
		"12" => "12. Jen vi ree trinkas!",
		"13" => "13. Revenis amo, feliĉu ni!",
		"14" => "14a. Silentu, enaj voĉoj",
		"14b" => "14b. Timiga diro",
		"15" => "15a. Mistero en papervendejo",
		"15b" => "15b. Du raportoj pri vendado",
		"16" => "16a. La vesperfuŝulo",
		"16b" => "16b. Ĉu malĝojon memori, aŭ imagi feliĉon ?",
		"17" => "17a. Edzokaptaj inoj",
		"17b" => "17b. Instruista amo",
		"18" => "18a. La letersoifa patrino",
		"18b" => "18b. Mi atendas gravan leteron",
		"19" => "19. Dormu trankvile!",
		"20" => "20a. La fakulo-instruisto venis de malproksime",
		"20b" => "20b. Troa scivolo kondukas morten",
		"21" => "21a. Ho, bela naskiĝurbo!",
		"21b" => "21b. Adiaŭ, lando amata!",
		"22" => "22a. Ek al fora insulo!",
		"22b" => "22b. Skribas malliberulo",
		"23" => "23a. Sekreta servo",
		"23b" => "23b. Ameriko, jen mi venas",
		"24" => "24a. Literaturo amindas, sed tamen...",
		"24b" => "24b. La ĝojoj de petveturado",
		"25" => "25. La tri plendoj de S-ro Kursano"
	); 
}
/*
 * rappel pour les élèves non identifiés
*/
function atentigo() {
	echo "<p class='eo rimarko'>Por akiri supersignon vi uzu la x-stilon, ekzemple sx iĝos ŝ</p>\n";
}


function ekzerco($x2u, $nbLig) {
	global $demandoj, $memorkurso, $persono_id, $numcxap;
	//
	// x2u = sistemo uzata en la ekzerco. Se true, ni uzas la auxtomatan anstatauxigon de x per cxapelo
	// nbLig = nombro da linioj por cxiuj respondo. Se = 1, ni uzas <input>, ne pli da, ni uzas <textarea>
	//
	if ($persono_id=="") {
		$idenfication=False;
	} else {
		$idenfication =True;
	}
	echo "<div class=\"row\">";
	foreach ($demandoj as $k => $v) {
		echo "<p class='col s12 demando'>".$k.". ".$v."</p>\n";
		echo "<input type='hidden' name=\"dem_ekz".$numcxap."_".sprintf('%02d', $k)."\" value=\"".$k." ".$v."\">";

		if ($nbLig==1) {
			echo "<div class=\"input-field col s12\"><input name=\"res_ekz".$numcxap."_".sprintf('%02d', $k)."\"";
			// si on n'est pas identifié et que ce n'est pas la première leçon, on empeche de remplir les exercices si on n'est pas connecté
			if ($idenfication==False && $numcxap<>"01") {
				echo " READONLY onClick='window.alert(\"Identifiez vous en haut à droite pour pouvoir remplir les exercices\");'";
			}
			if ($x2u) {
				echo " onkeyup='xAlUtf8(this)' ";
			}
			echo "value=\"";
			$var="res_ekz".$numcxap."_".sprintf('%02d', $k);
			if (isset($memorkurso[$var])){
				echo htmlspecialchars(stripslashes($memorkurso[$var]));
			}
			echo "\"></div>";
		}
		else
		{
			echo "<div class=\"input-field col s12\"><textarea class='materialize-textarea' rows='".$nbLig."' name=\"res_ekz".$numcxap."_".sprintf('%02d', $k)."\"";
			if ($idenfication==False) {
				echo " READONLY onClick='window.alert(\"Identifiez vous en haut à droite pour pouvoir remplir les exercices\");'";
			}
			if ($x2u) {
				echo " onkeyup='xAlUtf8(this)' ";
			}
			echo ">";
			$var="res_ekz".$numcxap."_".sprintf('%02d', $k);
			if (isset($memorkurso[$var])){
				echo htmlspecialchars(stripslashes($memorkurso[$var]));
			}
			echo "</textarea></div>";
		}
		echo "</p>\n";
	}
	echo "</div>";

}



function elektEkzerco() {
	global $demandoj, $memorkurso, $numcxap;
	foreach ($demandoj as $k => $v) {
		echo "<input type=\"hidden\" name=\"dem".$numcxap."_".$k.".0\" value=\"".$k.". ".$v."\">\n";
		$n=1;$text="";
		echo "<p>".$k.". ";
		for ($i=0 ; $i<strlen($v) ; $i++) {
			if ($v[$i]=="[") {
				echo $text;
				echo "<input type=\"hidden\" name=\"dd".$numcxap."_".$k."_".$n."\" value=\"".$text."\">";
				echo "<div class=\"input-field\"><select name=\"rr".$numcxap."_".$k."_".$n."\">";
				echo "<option label=\"  ?  \">  ?  </option><option label=";
				$text="";
			} elseif ($v[$i]=="]") {
				echo "\"".$text."\">".$text."</option></select></div>";
				$text="";
			} elseif ($v[$i]=="/") {
				echo "\"".$text."\">".$text."</option><option label=";
				$text="";
			} else {
				$text.=$v[$i];
			}
			$n++;
		}
		echo "<input type=\"hidden\" name=\"dd".$numcxap."_".$k."_".$n."\" value=\"".$text."\">";
		echo $text."</p>";
	}
}

function plenigEkzerco($sist) {
	global $demandoj, $memorkurso, $numcxap;
	foreach ($demandoj as $k => $v) {
		$n=1;$text="";
		echo "<p><div class='input-field'></div>".$k.". ";
		for ($i=0 ; $i<strlen($v) ; $i++) {
			if ($v[$i]=="[") {
				echo $text;
				echo "<input type=\"hidden\" name=\"dd".$numcxap."_".$k."_".$n."\" value=\"".$text."\">";
				echo "<div class=\"input-field\"><input name=\"rr".$numcxap."_".$k."_".$n."\" value=\"";
				$var="rr".$numcxap."_".$k."_".$n;
				if (isset($memorkurso[$var])){
					echo stripslashes($memorkurso[$var]);
				}
				echo"\" size=\"";
				$text="";
			} elseif ($v[$i]=="]") {
				echo $text."\"";
				echo " onkeyup='xAlUtf8(this)' ";
				echo "></div>";
				$text="";
			} else {
				$text.=$v[$i];
			}
			$n++;
		}
		echo "<input type=\"hidden\" name=\"dd".$numcxap."_".$k."_".$n."\" value=\"".$text."\">";
		echo $text."</p>\n";
	}
}

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


if ($parto=="lasu") {
	$pagxtitolo="Lasu min paroli plu - ".$titolo;
} else { 
	$pagxtitolo="Gerda malaperis - ".$titolo; 
}

include $vojo."pagxkapo.inc.php";
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
?>
