<?php
$kurso="GR";
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
if ($persono_id) {
	$persono = apartigiPersonon($persono_id);}
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
header("Last-Modified: ".gmdate("D,d M Y H:i:s")." GMT");
header("Cache-Control: no-store,no-cache, must-revalidate"); // HTTP/1.1
header("Pragma: no-cache"); // HTTP/1.0
malfermiDatumbazon();
$temo=isset($_GET["temo"])?$_GET["temo"]:"";
if ($temo=="") {$temo="intro";}

// tiu funkcio konstruas la liston de la tekstoj "lasu min..."
function konstruiLasuMenuon() {
	$tlasu = array (
		"01" => "  1.  Izabela",
		"02" => "  2.  Stranga strangulo",
		"03" => "  3.  Amdeklaro",
		"04" => "  4.  Lingvistiko",
		"05" => "  5.  Ĉu vere vi ne volas labori?",
		"06" => "  6.  La ulo, kiu ne plu pensas",
		"07" => "  7.  Oni venis el alia mondo",
		"08" => "  8.  Iru kiel vi volas",
		"09" => "  9.  Zorgi pri zorgado",
		"10" => "10.  La fortegulo",
		"11" => "11.  Malkontentas la mekanikisto",
		"12" => "12.  Jen vi ree trinkas!",
		"13" => "13.  Revenis amo, feliĉu ni!",
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
		"19" => "19.   Dormu trankvile!",
		"20" => "20a.  La fakulo-instruisto venis de malproksime",
		"20b" => "20b. Troa scivolo kondukas morten",
		"21" => "21a.  Ho, bela naskiĝurbo!",
		"21b" => "21b. Adiaŭ, lando amata!",
		"22" => "22a. Ek al fora insulo!",
		"22b" => "22b. Skribas malliberulo",
		"23" => "23a. Sekreta servo",
		"23b" => "23b. Ameriko, jen mi venas",
		"24" => "24a. Literaturo amindas, sed tamen...",
		"24b" => "24b. La ĝojoj de petveturado",
		"25" => "25.   La tri plendoj de S-ro Kursano"
	); 
}
/*
 * rappel pour les élèves non identifiés
*/
function atentigo() {
	echo "<p class='eo rimarko'>Por akiri supersignon vi uzu la x-stilon, ekzemple sx iĝos ŝ</p>\n";
}
function ekzerco($sist, $nbLig) {
	global $demandoj, $memorkurso, $persono_id, $numcxap;
	//
	// sist = sistemo uzata en la ekzerco. Se =U, ni uzas la auxtomatan anstatauxigon de x per cxapelo
	// nbLig = nombro da linioj por cxiuj respondo. Se = 1, ni uzas <input>, ne pli da, ni uzas <textarea>
	//
	foreach ($demandoj as $k => $v) {
		echo "\t<p>".$k.". ".$v."</p>\n";
		echo "\t<p><input type='hidden' name='dem_ekz".$k."' value='".$k." ".$v."'>\n";
		if ($nbLig==1) {
			echo "\t<input type='text' size='65' name='res_ekz".$numcxap."_".$k."'";
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
			echo "\t<textarea cols='65' rows='".$nbLig."' name='res_ekz".$numcxap."_".$k."'";
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
				echo "<select name=\"rr".$numcxap."_".$k."_".$n."\">";
				echo "<option label=\"  ?  \">  ?  </option><option label=";
				$text="";
			} elseif ($v[$i]=="]") {
				echo "\"".$text."\">".$text."</option></select>";
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
		echo "<p>".$k.". ";
		for ($i=0 ; $i<strlen($v) ; $i++) {
			if ($v[$i]=="[") {
				echo $text;
				echo "<input type=\"hidden\" name=\"dd".$numcxap."_".$k."_".$n."\" value=\"".$text."\">";
				echo "<input name=\"rr".$numcxap."_".$k."_".$n."\" value=\"";
				$var="rr".$numcxap."_".$k."_".$n;
				if (isset($memorkurso[$var])){
					echo stripslashes($memorkurso[$var]);
				}
				echo"\" size=\"";
				$text="";
			} elseif ($v[$i]=="]") {
				echo $text."\"";
				echo " onkeyup='xAlUtf8(this)' ";
				echo ">";
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
<script type="text/javascript">
function savData(lien) {
	document.mia_Formularo.action=lien;
	document.mia_Formularo.submit();
	this.href=lien;
}
</script>

		<div id="enhavo">
			<?php if ($parto=="ek") { ?>
				<form name="mia_Formularo" method="post" action="../korekti.php">
				<input type="hidden" name="path" value="./">
			<?php } ?>
			<ul id="tabnav">
			<?php 
				if (($parto=="index")||($parto=="konsiloj")) {
					// onglets pour la presentation et la table des matieres
					echo "<li";
					if ($temo=="intro") {echo " class='aktiva'";}
					echo "><a href='index.php?temo=intro'>Présentation</a></li>";
					echo "<li";
					if ($temo=="enskribi") {echo " class='aktiva'";}
					echo "><a href='index.php?temo=enskribi'>Inscription</a></li>";
					echo "<li";
					if ($temo=="atentigo") {echo " class='aktiva'";}
					echo "><a href='index.php?temo=atentigo'>Infos utiles</a></li>";
					echo "<li";
					if ($temo=="prononco") {echo " class='aktiva'";}
					echo "><a href='index.php?temo=prononco'>Prononciation</a></li>";
					echo "<li";
					if ($temo=="enhavo") {echo " class='aktiva'";}
					echo "><a href='index.php?temo=enhavo'>Table des matières</a></li>";
					echo "<li";
					if ($parto=="konsiloj") {echo " class='aktiva'";}
					echo "><a href='konsiloj.php'>...kaj poste</a></li>";
				}
				if (($parto!="index")&&($parto!="konsiloj")&&($parto!="vlist")&&($numcxap!="00")&&($numcxap!="99")) {
					if ($numcxap=="ir") {$numcxap=$_GET["lec"];}
					// ligo al la rakonto
					$ligo="cxap".$numcxap.".php";
				   if ($parto==""){
				   	echo "<li class='aktiva'><a href='".$ligo."'>";
				   } elseif ($parto=="ek") {
							echo "<li><a href='#' onClick=\"savData('".$ligo."');\">";
					} else {
				   	echo "<li><a href='".$ligo."'>";
				   }
					echo "Rakonto</a></li>\n";
					
					// ligo al la gramatikaj klarigoj
					$ligo="cxap".$numcxap."gr.php";
		
					if ($parto=="gr"){
						echo "<li class='aktiva'><a href='".$ligo."'>";
				   } elseif ($parto=="ek") {
							echo "<li><a href='#' onClick=\"savData('".$ligo."');\">";
					} else { 
						echo "<li><a href='".$ligo."'>";
					}
					echo "Klarigoj</a></li>\n";
					
					// ligo al la vortlisto de la cxapitro
					$ligo="cxap".$numcxap."vl.php";

					if ($parto=="vl") {
						echo "<li class='aktiva'><a href='".$ligo."'>";
				   } elseif ($parto=="ek") {
							echo "<li><a href='#' onClick=\"savData('".$ligo."');\">";
					} else {
						echo "<li><a href='".$ligo."'>";
					}
					echo "Vortlisto</a></li>\n";
					
					// ligo al la ekzercoj de la cxapitro
					if ($parto=="ek") {
						echo "<li class='aktiva'><a href='#";
					} else {
				   	echo "<li><a href='cxap".$numcxap."ek.php";
				   }
				   echo "'>Ekzercoj</a></li>\n";
				
				   // ligo al la respondaj cxapitroj de "lasu min paroli plu"
					$ligo="lasu".$numcxap.".php";

				   if ($parto=="lasu") {
				   	echo "<li class='aktiva'><a href='".$ligo."'>";
				   } elseif ($parto=="ek") {
						echo "<li><a href='#' onClick=\"savData('".$ligo."');\">";
				   } else {
				   	echo "<li><a href='".$ligo."'>";
					}
				   echo "Lasu min...</a></li>\n";
				}	

				// ligo al la antauxaj kaj postaj cxapitroj
				if ($numcxap < 25){
					$posta = $numcxap + 1;
					$postacxap = sprintf('cxap%02d', $posta);
					echo "<li class='dekstre'><a href='".$postacxap.".php'> ".$posta." </a></li>\n";	   
			   }
			   if ($numcxap !=0){
			   	$nuna=$numcxap+0;
					echo "<li class='dekstraktiva'><a href='".$subjekto."'> ".$nuna." </a></li>\n";	   
			   }
				if ($numcxap > 1){
					$antauxa = $numcxap - 1;
					$antauxacxap=sprintf('cxap%02d', $antauxa);
					echo "<li class='dekstre'><a href='".$antauxacxap.".php'> ".$antauxa." </a></li>\n";	   
			   }
			   echo "<li class='dekstre";
			   if ($parto=="index") {echo " aktiva";}
			   echo"'><a href='index.php'>Enhavo</a></li>\n";
			   
				?>
			</ul>
			<div id="kadro">
				<?php			
				if ($erarkodo=="1") {echo "<div class='atentigo'><p class='eraro'>Le mot de passe ou l’identifiant est erroné</p></div>";}
				if ($erarkodo=="2") {echo "<div class='atentigo'><p class='eraro'>Vous n’avez pas rempli toutes les données obligatoires du formulaire d’inscription.</p></div>";}
				if ($erarkodo=="3") {echo "<div class='atentigo'><p class='eraro'>Vous avez tapé deux mots de passe différents</p></div>";}
				if ($erarkodo=="6") {echo "<div class='atentigo'><p class='eraro'>Adresse électronique invalide</p></div>";}
				if ($erarkodo=="7") {echo "<div class='atentigo'><p class='eraro'>Cet identifiant existe déjà. Veuillez en choisir un autre, merci !</p></div>";}
				if ($erarkodo=="8") {echo "<div class='atentigo'><p class='eraro'>Votre session a expiré, veuillez vous identifier.</p></div>";}
				if ($erarkodo=="14") {echo "<div class='atentigo'><p class='eraro'>Merci pour votre retour.</p></div>";} 
				?>
				<?php if (($parto=="ek")&&($numcxap!="01")){
					// ce qui suit ne s'applique pas la première fois
				?>
						<?php if ($persono_id) { ?>
							<div class="encadre">
								<p class="rimarko">Vous êtes connecté(e) avec l’identifiant 
								<strong><?php echo $persono['enirnomo'];?></strong>. 
								Si vous souhaitez utiliser un autre compte pour envoyer vos exercices, 
								il faut d’abord vous 
								<a href="../../eliri.php">déconnecter.</a></p>
							</div>
						<?php } 
					atentigo();
					} ?>
				<?php
				echo "<input type=\"hidden\" name=\"010_subjekto\" value=\"".substr($subjekto,0,6)."\">\n";
				echo "<input type=\"hidden\" name=\"010_adreso\" value=\"".$url."\">\n";
				echo "<input type=\"hidden\" name=\"kurso\" value=\"".$kurso."\">\n";
				echo "<input type=\"hidden\" name=\"nunleciono\" value=\"".$nunleciono."\">\n";
				echo "<input type=\"hidden\" name=\"numcxap\" value=\"".$numcxap."\">\n";
				?>
