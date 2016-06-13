<?php
include_once "../../util.php";
$kurso="CG";
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

include "../../pagxkapo.inc.php";
?>
<script type="text/javascript" src="../../xAlUtf8.js"></script>
		<div id="enhavo">
			<ul id="tabnav">
				<li <?php if ($temo=="intro") {echo " class='aktiva'";} ?>><a href="intro.php?temo=intro">Pr&eacute;ambule</a></li>
				<!-- suppression de la page sommaire : n'apporte rien de plus que les onglets
				et de plus contient les cours zippés qui ne sont plus à jour
				<li <?php if ($temo=="temaro") {echo " class='aktiva'";} ?>><a href="intro.php?temo=temaro">Sommaire</a></li>
				-->
				<li <?php if ($numcxap=="01") {echo " class='aktiva'";} ?>><a href="lec01.php">&nbsp;1&nbsp;</a></li>
				<li <?php if ($numcxap=="02") {echo " class='aktiva'";} ?>><a href="lec02.php">&nbsp;2&nbsp;</a></li>
				<li <?php if ($numcxap=="03") {echo " class='aktiva'";} ?>><a href="lec03.php">&nbsp;3&nbsp;</a></li>
				<li <?php if ($numcxap=="04") {echo " class='aktiva'";} ?>><a href="lec04.php">&nbsp;4&nbsp;</a></li>
				<li <?php if ($numcxap=="05") {echo " class='aktiva'";} ?>><a href="lec05.php">&nbsp;5&nbsp;</a></li>
				<li <?php if ($numcxap=="06") {echo " class='aktiva'";} ?>><a href="lec06.php">&nbsp;6&nbsp;</a></li>
				<li <?php if ($numcxap=="07") {echo " class='aktiva'";} ?>><a href="lec07.php">&nbsp;7&nbsp;</a></li>
				<li <?php if ($numcxap=="08") {echo " class='aktiva'";} ?>><a href="lec08.php">&nbsp;8&nbsp;</a></li>
				<li <?php if ($numcxap=="09") {echo " class='aktiva'";} ?>><a href="lec09.php">&nbsp;9&nbsp;</a></li>
				<li <?php if ($numcxap=="10") {echo " class='aktiva'";} ?>><a href="lec10.php">&nbsp;10&nbsp;</a></li>
				<li <?php if ($temo=="listo") {echo " class='aktiva'";} ?>><a href="vocabula.php">&nbsp;Lexique&nbsp;</a></li>
				<li <?php if ($temo=="enhavo") {echo " class='aktiva'";} ?>><a href="enhavo.php">&nbsp;Index&nbsp;</a></li>
			<?php
  
		   // ligo al la aliaj partoj de la kursoj
		   // echo "<li class='dekstre'><a href='helpo.php'>Helpo</a></li>\n";
			?>
			</ul>
			<div id="kadro">
				<h2><?=$titolo;?></h2>
				<?php			
				if ($erarkodo=="1") {echo "<div class='atentigo'><p class='eraro'>Le mot de passe ou l’identifiant est erroné</p></div>";}
				if ($erarkodo=="2") {echo "<div class='atentigo'><p class='eraro'>Vous n’avez pas rempli toutes les données obligatoires du formulaire d’inscription</p></div>";}
				if ($erarkodo=="3") {echo "<div class='atentigo'><p class='eraro'>Vous avez tapé deux mots de passe différents</p></div>";}
				if ($erarkodo=="6") {echo "<div class='atentigo'><p class='eraro'>Adresse électronique invalide</p></div>";}
				if ($erarkodo=="7") {echo "<div class='atentigo'><p class='eraro'>Cet identifiant existe déjà. Veuillez en choisir un autre, merci</p></div>";}
				if ($erarkodo=="8") {echo "<div class='atentigo'><p class='eraro'>Votre session a expiré, veuillez vous identifier.</p></div>";}
				if ($erarkodo=="13") {echo "<div class='atentigo'><p class='eraro'>$noto : Le résultat du QCM n’est pas suffisant. Veuillez recommencer.</p></div>";} 
				
				if (($temo!="intro") && ($numcxap!="01")) {
				?>
				<!--div class="reklamo" id="spiru">
				<img src="http://esperanto-jeunes.org/couvertures/61518.mini.jpg" alt="Couverture" height="200" align="right"/>
				<font size="+1"> Les cours sont donnés <b>gratuitement</b> par l'association Espéranto-France.<br/></font><br/>
				Soutenez l'association en commandant <i>La templo de l'suno</i> (62 pages) au prix de 12,50 euros et 3,50 euros de frais de port pour la France.<br/>
				Le paiement s'effectue par Paypal qui vous garantit une transaction sécurisée. En cliquant sur le bouton <b>Acheter</b>, vous serez redirigé sur le site Paypal qui vous demandera vos coordonnées bancaires.<br/>
				Pour commander d'un autre pays, vous pouvez contacter l'association qui vous indiquera le montant des frais de port pour votre pays : <a href="mailto:info@esperanto-france.org">info@esperanto-france.org</a><br/>
				Vous pouvez également venir l'acheter à la boutique d'Espéranto-France : 4bis rue de la Cerisaie, 75004 Paris (métro Bastille). Vous économiserez ainsi les frais de port. Consultez nos horaires d'ouverture sur <a href="http://esperanto-france.org//contacts-association">http://esperanto-france.org//contacts-association</a>
				<br/>
				<br/>
				
				<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
				<input type="hidden" name="cmd" value="_xclick">
				<input type="hidden" name="business" value="paypal@esperanto-france.org">
				<input type="hidden" name="lc" value="FR">
				<input type="hidden" name="item_name" value="TINTIN-cge">
				<input type="hidden" name="amount" value="12.50">
				<input type="hidden" name="currency_code" value="EUR">
				<input type="hidden" name="shipping" value="3.50">
				<input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynowCC_LG.gif:NonHostedGuest">
				<input type="image" src="https://www.paypal.com/fr_FR/FR/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - la solution de paiement en ligne la plus simple et la plus sécurisée !">
				<img alt="" border="0" src="https://www.paypal.com/fr_FR/i/scr/pixel.gif" width="1" height="1">
				</form>
				</div-->
				<?php } ?>
				
					<a name="<?=$subjekto?>"></a>
					<form method="post" action="../korekti.php">
					<input type="hidden" name="path" value="./">
				<?php
					echo "<input type=\"hidden\" name=\"010_subjekto\" value=\"".$subjekto."\">\n";
					echo "<input type=\"hidden\" name=\"010_adreso\" value=\"$url\">\n";
					echo "<input type=\"hidden\" name=\"nunleciono\" value=$nunleciono>\n";
					echo "<input type=\"hidden\" name=\"kurso\" value=\"$kurso\">\n";
					echo "<input type=\"hidden\" name=\"numcxap\" value=\"$numcxap\">\n";
				?>
