<?php
include "util.php";
$pagxtitolo="G&eacute;rer les utilisateurs";
$persono_id=isset($_SESSION["persono_id"])?$_SESSION["persono_id"]:"";
$celpersono_id=isset($_REQUEST["celpersono_id"])?$_REQUEST["celpersono_id"]:"";
if ($persono_id=="") {header("Location:index.php?erarkodo=8");}
$persono = apartigiPersonon($persono_id);
if ($celpersono_id!="") {$celpersono = apartigiPersonon($celpersono_id);}
else {
	// on créer un tableau $celpersono vide pour afficher le formulaire "vide" (pour faire des recherches ou un ajout)
	$celpersono = array(
    	'id' => '',
    	'sekso' => '',
    	'kurso' => '',
    	'ekdato' => '',
    	'retadreso' => '',
    	'enirnomo' => '',
    	'pasvorto' => '',
    	'rajtoj' => '',
    	'naskigxdato' => '',
    	'stop_info' => '',
    	'familinomo' => '',
    	'personnomo' => '',
    	'adreso1' => '',
    	'adreso2' => '',
    	'posxtkodo' => '',
    	'urbo' => '',
    	'lando' => '',
    	'kialo' => '',
    	'sistemo' => ''
    	);
}
if ($rajto!='A' && $rajto!='I'){header("Location:index.php?erarkodo=4");}
$kategorio=isset($_GET["kategorio"])?$_GET["kategorio"]:"P";

/***********************************************
 * fonctions d'affichage des menus déroulants
 ***********************************************/

// construction de la liste déroulante des droits
// avec sélection par défaut des droits de l'individu donné
function listi_rajtojn ($rajtoj) {
	echo "<select name=\"rajtoj\">";
	echo "<option value=\"\">&nbsp;</option>";
	$listo = konstruiListon("rajtoj","kodo","nomo"," where lingvo='fr' order by nomo");	     
	foreach ($listo as $listero) {
		echo "<option value='".$listero['valuo']."'";
		if ($listero['valuo']==$rajtoj) { echo " selected";}
		echo ">";
		echo $listero["vidigito"]."</option>";
	} 
	echo "</select>";
}

// construction de la liste déroulante des droits
// avec sélection par défaut du pays donné
function listi_landojn ($lando) {
	global $aliavidigito, $defaultCharset;
	echo "<select name=\"lando\">";
	echo "<option value=\"\">&nbsp;</option>";
	$listo = konstruiListon("landoj","kodo","nomo"," where lingvo='fr' order by nomo");	     
	foreach ($listo as $listero) {
		echo "<option value='".$listero['valuo']."'";
		if ($listero['valuo']==$lando) { echo " selected";}
		echo ">";
		echo $listero["vidigito"]."</option>";
	} 

	// on ajoute un dernier choix fourre-tout à la liste
	echo "<option value=\"-- pays --\"";
	if ($lando==$aliavidigito) { echo "selected";}
	echo " >".$aliavidigito."</option>";
	echo "</select>";

 }

// construction de la liste déroulante des droits
// avec sélection par défaut du cours donné
function listi_kursojn ($kurso) {
	global $aliavidigito;
	echo "<select name=\"kurso\">";
	echo "<option value=\"\">&nbsp;</option>";
	$listo = konstruiListon("kursoj","kodo","nomo"," where lingvo='fr' order by nomo");	     
	foreach ($listo as $listero) {
		echo "<option value='".$listero['valuo']."'";
		if ($listero['valuo']==$kurso) { echo " selected";}
		echo ">";
		echo $listero["vidigito"]."</option>";
	} 
	
	// on ajoute un dernier choix fourre-tout �a liste
	echo "<option value=\"-- cours --\"";
	if ($kurso==$aliavidigito) { echo "selected";}
	echo " >".$aliavidigito."</option>";
	echo "</select>";
}

// construction de la liste déroulante des droits
// avec sélection par défaut du mois pour une date donnée

function afixsi_naskigxdaton ($dato) {
	global $aliavidigito;
	//ereg("([0-9]{4})-([0-9]{1,2})-([0-9]{1,2})", $dato,$nskdt);
	$nskdt = explode("-",$dato);
	if (count($nskdt)==1) {$nskdt = array("00","00","0000");}
	echo "<input type=\"text\" name=\"naskigxdato_tago\" size=\"3\" maxlength=\"2\" value=\"";
	if ($nskdt[2]!="00") {echo $nskdt[2];}
	echo "\">";
	$monato = $nskdt[2];
	echo "&nbsp;<select name=\"naskigxdato_monato\">";
	echo "<option value=\"\">&nbsp;</option>";
	$listo = konstruiListon("monatoj","kodo","nomo"," where lingvo='fr' order by nomo");	     
	if ($nskdt[1]!="00") {$monato=$nskdt[1];}
	else $monato="";
	$listo = konstruiListon("monatoj", "kodo", "nomo"," where lingvo='fr'");
	foreach ($listo as $listero) {
		echo "<option value='".$listero['valuo']."'";
		if ($listero['valuo']==$monato) { echo " selected";}
		echo ">";
		echo $listero["vidigito"]."</option>";
	} 
	
	echo "</select>&nbsp;";
	
	echo "<input type=\"text\" name=\"naskigxdato_jaro\" size=\"5\"  maxlength=\"4\" value=\"";
	if ($nskdt[0]!="0000") echo $nskdt[0];
	echo "\">";
}

function listi_Korektantoj_laux_kurso($studanto_id,$kurso) {
	global $bdd;
	echo "<select name=\"korektanto_id\">";
	$trovita_korektanto="ne";
	// repère la dliste du nombre d'élèves qu'un correcteur accepte de corriger. (ex. : correcteur 1 : 8 élèves)
	$demando =  "select personoj.id,personoj.enirnomo,sum(kiom_lernantoj) as kiom from personoj,korektebla_kurso where personoj.id=korektebla_kurso.korektanto and personoj.lingvo='fr' and korektebla_kurso.kurso='".$kurso."' group by enirnomo";
	echo "sql : ".$demando."<br>\n";
	$result = $bdd->query($demando) or die(print_r($bdd->errorInfo()));
	while($row = $result->fetch()) {
		$lernanteblecoj[$row["id"]] = $row["kiom"];	
		$nomoj[$row["id"]] = $row["enirnomo"];
	}
	
	//repère la liste du nombre d'élèves que les correcteurs ont des (ex. : correcteur 1 : 6 élèves)
	$demando="select personoj.id,enirnomo,count(*) as kiom  from personoj,nuna_kurso where personoj.id=nuna_kurso.korektanto and personoj.lingvo='fr' and (nuna_kurso.stato='K' or nuna_kurso.stato='N') and nuna_kurso.kurso='".$kurso."' group by enirnomo";
	$result = $bdd->query($demando) or die(print_r($bdd->errorInfo()));
	while($row = $result->fetch()) {
		$kiom_lernantoj[$row["id"]] = $row["kiom"];	
		$nomoj[$row["id"]] = $row["enirnomo"];
	}
	
	// calcul les pourcentages du remplissage des élèves : ex: correcteur 1 : 75% (6/8)
	foreach($lernanteblecoj as $sxlosilo => $valuo) { 
		//echo "id : ".$sxlosilo.": enirnomo : ".$nomoj[$sxlosilo].":  deja : ".$kiom_lernantoj[$sxlosilo]." sur ".$valuo."<br>\n";
		if (!isset($kiom_lernantoj[$sxlosilo])){
			$kiom_lernantoj[$sxlosilo]=0;
		}
		if ($valuo==""){
			$valuo=0;
		}
		if (($valuo!=0) || ($kiom_lernantoj[$sxlosilo]!=0)) {
			$procentajxo[$sxlosilo]=($valuo==0) ? 100 : floor(100*$kiom_lernantoj[$sxlosilo]/$valuo);
			//echo "id : ".$sxlosilo.": enirnomo : ".$nomoj[$sxlosilo].":  deja : ".$kiom_lernantoj[$sxlosilo]." sur ".$valuo." : ".$procentajxo[$sxlosilo]."<br>\n";
		}
	}
	
	asort($procentajxo);
	
	//recherche si l'élève en cours a un correcteur et le rajoute à sa liste si besoin
	$demando = "select korektanto from nuna_kurso where studanto='".$studanto_id."'";
	$result = $bdd->query($demando) or die(print_r($bdd->errorInfo()));
	$korektanto_id = $result->fetch()["korektanto"];


	// mi ordigas la tabulon kaj skribi gxin
	/*ksort($tabulo);
	reset($tabulo);*/
	if ($trovita_korektanto=="ne") { echo "<option value=\"\">=>Pas de correcteur</option>";}
	foreach($procentajxo as $key => $value) { 
		echo "<option value='".$key."'";
		// si le correcteur de l'élève est celui que l'on traite, le mettre en "selected"
		if ($korektanto_id==$key) { echo "selected";}
		echo  ">".$nomoj[$key]."(".$kiom_lernantoj[$key]."/".$lernanteblecoj[$key].") ".$procentajxo[$key]."% </option>\n";
	}
	echo "</select>";

}

function listi_korektantoj() {
	global $bdd;
	$demando = "select personoj.id,personoj.enirnomo from personoj where personoj.rajtoj='K' and personoj.lingvo='fr' order by enirnomo";
	$result = $bdd->query($demando) or die(print_r($bdd->errorInfo()));
	while($row = $result->fetch()) {
		// je ne comprends pas ce que foutais cette ligne en dessous ?
		//echo stripslashes($row['kialo'])."<br>";
		echo "<option value=\"".$row['id']."\">";
		echo $row['enirnomo'];
		echo "</option>\n";
	}
}

function listi_L_laux_S($studanto_id) {
	global $bdd;
	$i=0;
	$demando =  "select personoj.kurso as kurso,nuna_kurso.nunleciono as leciono,nuna_kurso.stato as stato,nuna_kurso.ekdato as ekdato,nuna_kurso.lastdato as lastdato,nuna_kurso.findato as findato from nuna_kurso,personoj where nuna_kurso.studanto=personoj.id and personoj.rajtoj='S' and personoj.lingvo='fr' and nuna_kurso.studanto='$studanto_id';";
	$result = $bdd->query($demando) or die(print_r($bdd->errorInfo()));
	while($row = $result->fetch()) {
		// affiche le nom du cours pour cet élève
		$demando2="select nomo  from kursoj where kodo='".$row["kurso"]."' and lingvo='fr'";
		$result2 = mysql_query($demando2) or die (  "INSERT : malbona demando :".$demando2);
		$result2 = $bdd->query($demando2) or die(print_r($bdd->errorInfo()));
		while($row2 = $result2->fetch()) {
			echo $row["stato"]."-".$row2["nomo"]."<br>";
		}
		// affiche le nom de la leçon pour cet &lève
		$demando2="select titolo from lecionoj where numero='".$row["leciono"]."' and kurso='".$row["kurso"]."' and lingvo='fr'";
		$result2 = $bdd->query($demando2) or die(print_r($bdd->errorInfo()));
		while($row2 = $result2->fetch()) {
			echo $row2["titolo"];
		}
                if ($row["stato"]=="N") {
                   echo "(".$row["ekdato"].")";
                } elseif ($row["stato"]=="K") {
                   echo "(".$row["lastdato"].")";
                } else {
                   echo "(".$row["findato"].")";
                }
		$i++;
	}
	if ($i==0) { echo "Pas de leçon en cours";}

}

// tiu funkcio konstruas la liston de cxiuj studantoj laux korektanto
function listi_S_laux_K($korektanto_id) {
	global $bdd,$idnoto;
	$i=0;
	// studantoj 
	$demando =  "select personoj.id as id,personoj.enirnomo as enirnomo,personoj.familinomo as familinomo,personoj.personnomo as personnomo,personoj.retadreso as retadreso,personoj.adreso1 as adreso1,personoj.adreso2 as adreso2,personoj.lando as lando,personoj.posxtkodo as posxtkodo,personoj.urbo as urbo,personoj.kialo as kialo,personoj.kurso as kurso, personoj.naskigxdato as naskigxdato, nuna_kurso.nunleciono,nuna_kurso.lastdato as lastdato,(TO_DAYS(NOW()) - TO_DAYS(nuna_kurso.lastdato)) as numtagoj1,nuna_kurso.ekdato,(TO_DAYS(NOW()) - TO_DAYS(nuna_kurso.ekdato)) as numtagoj2, personoj.noto as noto from nuna_kurso,personoj where nuna_kurso.studanto=personoj.id and personoj.rajtoj='S' and personoj.lingvo='fr' and (nuna_kurso.stato='N' or nuna_kurso.stato='K') and nuna_kurso.korektanto='$korektanto_id';";
	$result = $bdd->query($demando) or die(print_r($bdd->errorInfo()));
	while($row = $result->fetch()) {
		echo "<div class='lernantoj'>";
		echo "<div class='nomo'>";
		echo "<div style=\"height:35px;\"><img align='middle' src=\"bildoj/";
		if ($row["kurso"]=="KE") {echo "ikurso-ikono.gif\"";}
		if ($row["kurso"]=="CG") {echo "cge-ikono.gif\"";}
		if ($row["kurso"]=="GR") {echo "gerda-ikono.gif\"";}
		echo "\">";
		// emmanuelle (30.12.2005) : ajout lien vers la fiche de l'élève
		echo "\n<b><a href=\"administri.php?celpersono_id=".$row['id']."\">";
		echo $row['enirnomo'];
		echo "</a></b> (";
		echo $row['personnomo']." ".$row['familinomo'].") - ";
		echo "<a href=\"mailto:".$row['retadreso']."\">".$row["retadreso"]."</a>\n";
		echo "</div></div>";

		// colonne 1: coordonnees 
		echo "<div class='lernanto gauche' style='border:solid #888;border-width:0 1px 1px 0;margin-right:10px;'>";
		//ereg("([0-9]{4})-([0-9]{1,2})-([0-9]{1,2})", $row["naskigxdato"],$nskdt);
		$nskdt=explode("-", $row["naskigxdato"]);
		echo $nskdt[2]."/".$nskdt[1]."/".$nskdt[0]."<br>";
		echo $row["adreso1"]."<br>";
		echo $row["adreso2"]."<br>";
		echo $row["posxtkodo"]." ";
		echo $row["urbo"]." (".$row["lando"].")";
		echo "</div><div class='lernanto' style='padding-left:10px;'>";
		// cours suivi
		$demando2="select kursoj.nomo as kursnomo from kursoj where kursoj.kodo='".$row['kurso']."' and kursoj.lingvo='fr'"; 
		$result2 = $bdd->query($demando2) or die(print_r($bdd->errorInfo()));
		$row2 = $result2->fetch();
		echo "<em>cours suivi : </em><b>".$row2["kursnomo"]."</b><br>";	
		echo "<em>inscription le : </em>\n";
		//ereg("([0-9]{4})-([0-9]{1,2})-([0-9]{1,2})", $row["ekdato"],$ekdt);
		$ekdt = explode('-',$row["ekdato"]);
		echo $ekdt[2]."/".$ekdt[1]."/".$ekdt[0]."<br>\n";
		// derniere lecon (si une derniere lecon est en cours) :
		$demando3="select lecionoj.titolo, lecionoj.numero from lecionoj where lecionoj.kurso='".$row["kurso"]."' and lecionoj.lingvo='fr' and lecionoj.numero='".$row['nunleciono']."'";
		$result3 = $bdd->query($demando3) or die(print_r($bdd->errorInfo()));
		$row3 = $result3->fetch();
		echo "<em>dernière leçon : </em>".$row3['titolo']." ";
		if ($row["lastdato"]==0) {
			echo "--/--/--\n";
		}
		else{
			//ereg("([0-9]{4})-([0-9]{1,2})-([0-9]{1,2})", $row["lastdato"],$lstdt);
			$lstdt = explode('-',$row["lastdato"]);
			echo $lstdt[2]."/".$lstdt[1]."/".$lstdt[0]."<br>\n";
		}


		// colonne 3: commentaires
		echo "</div><div class='lernanto' clear='both'>";
		echo "<em>commentaire de l’élève :</em> ";
		echo stripslashes($row['kialo'])."<br>";

		echo "<em>commentaires du correcteur :</em><br>";
		$demando4 = "select * from komentoj where komentoj.studanto='".$row["id"]."'";
		$result4 = $bdd->query($demando4) or die(print_r($bdd->errorInfo()));
		while ($row4 = $result4->fetch()){
			$demando5 = "select enirnomo from personoj where personoj.id='".$row4['korektanto']."'";
			$result5 = $bdd->query($demando5) or die(print_r($bdd->errorInfo()));
			$row5 = $result5->fetch();
			echo " <em>de ".$row5['enirnomo']." le ".$row4['dato']."</em> :\n";
			echo " ".$row4['teksto']."\n";
			echo "</span>\n";
		}
		echo "</div></div>";
		$i++;
	}
	if ($i==0) { 
			echo "<p>Aucun élève</p>";
	}
}

//tiu funkcio konstruas la liston de Personoj 'P'
function listi_P() {
	global $bdd;
	$demando =  "select id,enirnomo,personnomo,familinomo from personoj where rajtoj='P' and lingvo='fr'";
	$result = $bdd->query($demando) or die(print_r($bdd->errorInfo()));
	while($row = $result->fetch()) {
		echo "<option value=\"".$row["id"]."\">".$row["enirnomo"]." (".$row["personnomo"]." ".$row["familinomo"].")</option>";
	}
}

//tiu funkcio konstruas la liston de Personoj 'S0' (kiu ne komencis lerni)
function listi_S0() {
	global $bdd;
	$demando =  "select personoj.id as id,personoj.enirnomo as enirnomo,personoj.personnomo as personnomo,personoj.familinomo as familinomo,nuna_kurso.ekdato as ekdato from nuna_kurso,personoj where nuna_kurso.studanto=personoj.id and personoj.rajtoj='S' and personoj.lingvo='fr' and nuna_kurso.stato='N' order by ekdato asc;";
	$result = $bdd->query($demando) or die(print_r($bdd->errorInfo()));
	while($row = $result->fetch()) {
		echo "<option value=\"".$row["id"]."\">";
		if ($row["id"]< 4125) {echo $row["enirnomo"]." (".$row["personnomo"]." ".$row["familinomo"];}
		else {echo $row["enirnomo"]." (".$row["personnomo"]." ".$row["familinomo"];}
		echo ")</option>";
	}
}

//tiu funkcio konstruas la liston de Personoj 'S1'
function listi_S1() {
	global $bdd;
	$demando =  "select personoj.id as id,personoj.enirnomo as enirnomo,lecionoj.titolo as titolo from nuna_kurso,personoj,lecionoj where nuna_kurso.studanto=personoj.id and personoj.rajtoj='S' and personoj.lingvo='fr' and nuna_kurso.nunleciono=lecionoj.id and nuna_kurso.stato='K' and nuna_kurso.nunleciono=1;";
	$result = $bdd->query($demando) or die(print_r($bdd->errorInfo()));
	while($row = $result->fetch()) {
		echo "<option value=\"".$row["id"]."\">";
		if ($row["id"]< 4125) {echo $row["enirnomo"]." (".$row["titolo"];}
		else {echo $row["enirnomo"]." (".$row["titolo"];}
		echo ")</option>";
	}
}

//tiu funkcio konstruas la liston de Personoj 'S2'
function listi_S2() {
	global $bdd;
	$demando =  "select personoj.id as id,personoj.enirnomo as enirnomo,lecionoj.titolo as titolo from nuna_kurso,personoj,lecionoj where nuna_kurso.studanto=personoj.id and personoj.rajtoj='S' and personoj.lingvo='fr' and nuna_kurso.nunleciono=lecionoj.id and nuna_kurso.stato='K' and nuna_kurso.nunleciono=2;";
	$result = mysql_query($demando) or die (  "INSERT : malbona demando :".$demando);
	while($row = $result->fetch()) {
		echo "<option value=\"".$row["id"]."\">";
		if ($row["id"]< 4125) {echo $row["enirnomo"]." (".$row["titolo"];}
		else {echo $row["enirnomo"]." (".$row["titolo"];}
		echo ")</option>";
	}
}

//tiu funkcio konstruas la liston de Personoj 'S'
function listi_S() {
	global $bdd;
	$demando =  "select personoj.id as id,personoj.enirnomo as enirnomo,nuna_kurso.kurso as kurso,nuna_kurso.nunleciono as nunleciono from nuna_kurso,personoj where nuna_kurso.studanto=personoj.id and personoj.rajtoj='S' and personoj.lingvo='fr' and nuna_kurso.stato='K' order by nunleciono asc;";
	$result = $bdd->query($demando) or die(print_r($bdd->errorInfo()));
        while($row = $result->fetch()) {
                $demando2 = "select * from lecionoj where numero='".$row["nunleciono"]."' and kurso='".$row["kurso"]."' and lingvo='fr'";
				$result2 = $bdd->query($demando2) or die(print_r($bdd->errorInfo()));
                $row2=$result2->fetch();
		echo "<option value=\"".$row["id"]."\">";
		if ($row["id"]< 4125) {echo $row["enirnomo"]."(".$row2["titolo"];}
		else {echo $row["enirnomo"]."(".$row2["titolo"];}
		echo ")</option>";
	}
}

//tiu funkcio konstruas la liston de Personoj 'H'
function listi_H() {
	global $bdd;
	$demando =  "select personoj.id as id,personoj.enirnomo as enirnomo,nuna_kurso.stato as stato,nuna_kurso.findato as findato from nuna_kurso,personoj where nuna_kurso.studanto=personoj.id and nuna_kurso.stato='H' and personoj.lingvo='fr' order by findato desc";
	$result = $bdd->query($demando) or die(print_r($bdd->errorInfo()));
	while($row = $result->fetch()) {
		echo "<option value=\"".$row["id"]."\">";
		echo $row["enirnomo"]." (abandonné le ".$row["findato"];
		echo ")</option>";
	}
}

//tiu funkcio konstruas la liston de Personoj 'F'
function listi_F() {
	global $bdd;
	$demando =  "select personoj.id as id,personoj.enirnomo as enirnomo,nuna_kurso.findato as findato,nuna_kurso.stato as stato from nuna_kurso,personoj where nuna_kurso.studanto=personoj.id and nuna_kurso.stato='F' and personoj.lingvo='fr' order by nuna_kurso.findato desc";
	$result = $bdd->query($demando) or die(print_r($bdd->errorInfo()));
	while($row = $result->fetch()) {
		echo "<option value=\"".$row["id"]."\">";
		if ($row["id"]< 4125) {echo $row["enirnomo"]." (fini le  ".$row["findato"];}
		else {echo $row["enirnomo"]." (fini le ".$row["findato"];}
		echo ")</option>";
	}
}

//tiu funkcio konstruas la liston de Personoj 'K'
function listi_K() {
	// deprecated => voir listi_korektantoj()
}

//tiu funkcio konstruas la liston de Personoj 'A'
function listi_A() {
	global $bdd;
	$demando =  "select personoj.id,personoj.enirnomo,personoj.maksimumo from personoj where personoj.rajtoj='A' and personoj.lingvo='fr'";
	$result = $bdd->query($demando) or die(print_r($bdd->errorInfo()));
	while($row = $result->fetch()) {
		// por cxiuj, mi trovas, kiom da lernantoj ili havas (cxu 0, cxu pli ?)
		// kaj kalkulas la percentajxo dependante de la maksimumo da lernantoj kiun ili bonvolas
		$demando2="select distinct count(*) as studantoj from nuna_kurso where korektanto=".$row["id"]." and (stato='N' or stato='K')";
		$result2 = $bdd->query($demando2) or die(print_r($bdd->errorInfo()));
		while($row2 = $result2->fetch()) {
			if ($row["maksimumo"]==0) {
				$percentajxo=0;
			} else {
				$percentajxo=floor(100*$row2["studantoj"]/$row["maksimumo"]);
			}
			// per tio, mi plenigas tabulon laux la percentajxo * 100 + id (por havi unika numero de indekso)
			$tabulo[($percentajxo*100)+$row["id"]]="<option value=\"".$row["id"]."\">".$row["enirnomo"]." (".$row2["studantoj"]."/".$row["maksimumo"]." : ".$percentajxo."%)</option>";
		}
	}
	// mi ordigas la tabulon kaj skribi gxin
	ksort($tabulo);
	reset($tabulo);
	foreach($tabulo as $ligno) { echo $ligno;}
}

//tiu funkcio konstruas la liston de Personoj 'I'
function listi_I() {
	global $bdd;
	$demando =  "select id,enirnomo from personoj where rajtoj='I' and lingvo='fr'";
	$result = $bdd->query($demando) or die(print_r($bdd->errorInfo()));
	while($row =  $result->fetch()) {
		echo "<option value=\"".$row["id"]."\">".$row["enirnomo"]."</option>";
	}
}

function listi_kursojn_de_iu_studanto($studanto_id) {
	global $bdd;
 $demando="select nuna_kurso.id,korektanto,nunleciono,nuna_kurso.kurso,nuna_kurso.lastdato,nuna_kurso.stato, personoj.enirnomo as korektanto_enirnomo,personoj.id as korektanto_id,kursoj.nomo as kursoj_nomo,lecionoj.titolo as lecionoj_titolo from ikurso.nuna_kurso  join personoj on personoj.id=nuna_kurso.korektanto join kursoj on kursoj.kodo=nuna_kurso.kurso and kursoj.lingvo='fr' left join lecionoj on lecionoj.numero=nuna_kurso.nunleciono and lecionoj.kurso=nuna_kurso.kurso and lecionoj.lingvo='fr' where studanto=".$studanto_id." order by lastdato";
 	$result = $bdd->query($demando) or die(print_r($bdd->errorInfo()));
 	return $result;
}

include "adminkapo.inc.php";
?>
		<div id="adminejo">
			<ul id="tabnav">
				<li <?php if ($kategorio=="P"){echo "class='aktiva'";}?>><a href="administri.php?kategorio=P">Attendent un correcteur</a></li>
				<li <?php if ($kategorio=="S0"){echo "class='aktiva'";}?>><a href="administri.php?kategorio=S0">Ont reçu un correcteur</a></li>
				<li <?php if ($kategorio=="S"){echo "class='aktiva'";}?>><a href="administri.php?kategorio=S">Autres élèves</a></li>
				<li <?php if ($kategorio=="H"){echo "class='aktiva'";}?>><a href="administri.php?kategorio=H">Ont abandonné</a></li>
				<li <?php if ($kategorio=="F"){echo "class='aktiva'";}?>><a href="administri.php?kategorio=F">Ont fini le cours</a></li>
				<li <?php if ($kategorio=="K"){echo "class='aktiva'";}?>><a href="administri.php?kategorio=K">Correcteurs</a></li>
				<li <?php if ($kategorio=="A"){echo "class='aktiva'";}?>><a href="administri.php?kategorio=A">Administrateurs</a></li>
				<li <?php if ($kategorio=="I"){echo "class='aktiva'";}?>><a href="administri.php?kategorio=I">Informateurs</a></li>
			</ul>
			<div id="kadro">
				<?php if (isset($erarkodo) && $erarkodo=="9") echo "<div class='atentigo'><p class='eraro'>Cet élève a déjà un correcteur.</p></div>"; ?>
				<?php if (isset($erarkodo) && $erarkodo=="11") echo "<div class='atentigo'><p class='eraro'>Choisissez un correcteur avant de sauvegarder.</p></div>"; ?>
			
			<div id="adminG">

			<!-- page d'administration -->
				<form name="administri" method="post" action="<?=$vojo?>administri.php?kategorio=<?=$kategorio?>">
				<input type="hidden" name="kategorio" value="<?=$kategorio?>">
			<?php if ($kategorio!='') echo "<select id=\"celpersono\" name=\"celpersono_id\" size=\"30\" onChange=\"document.administri.submit();\">";
					switch ($kategorio) {
						case 'P' : listi_P();
						break;
						case 'S0' :listi_S0();
						break;
						case 'S' : listi_S();
						break;
						case 'H' : listi_H();
						break;
						case 'F' : listi_F();
						break;
						case 'K' : listi_korektantoj();
						break;
						case 'A' : listi_A();
						break;
						case 'I' : listi_I();
						break;
					}
					if ($kategorio!='') echo "</select>";
			?>
				</form>
			</div>
			<div id="adminD">
				<form name="administri2" method="post" action="administri2.php">
				<p>Fiche n° <?=$celpersono["id"];?></p>
<?php if (isset($_GET['validi'])) { ?>
				<p >La fiche a été correctement mise à jour</p>
<?php } ?>

				<div class="encadre">
					<table class="perso">
						<tr>
							<td nowrap>
								<input type="hidden" name="celpersono_id" value="<?php echo $celpersono["id"]; ?>">
								<div align="right" nowrap>H.
								<input type="radio" name="sekso" value="M" <?php if ($celpersono["sekso"]=='M') echo "checked"; ?>>
								F.
								<input type="radio" name="sekso" value="I" <?php if ($celpersono["sekso"]=='I') echo "checked"; ?>>
								</div>
							</td>
							<td class="col1">Nom :</td>
							<td nowrap><input type="text" name="familinomo" size="25" value="<?php echo $celpersono["familinomo"]; ?>"></td>
							<td class="col1">Prénom :</td>
							<td nowrap><input type="text" name="personnomo" size="25" value="<?php echo $celpersono["personnomo"]; ?>"></td>
						</tr>
						<tr>
							<td colspan="2" class="col1">Adresse :</td>
							<td nowrap><input type="text" name="adreso1" size="25" value="<?php echo $celpersono["adreso1"]; ?>"></td>
							<td class="col1">Adresse (suite) :</td>
							<td nowrap><input type="text" name="adreso2" size="25" value="<?php echo $celpersono["adreso2"]; ?>"></td>	
						</tr>
						<tr>
							<td colspan="2" class="col1">Code Postal :</td>
							<td><input type="text" name="posxtkodo" value="<?php echo $celpersono["posxtkodo"]; ?>"></td>
							<td class="col1">Ville :</td>
							<td><input type="text" name="urbo" size="25" value="<?php echo $celpersono["urbo"]; ?>"></td>
						</tr>
						<tr>
							<td colspan="2" class="col1">Identifiant <i>(*)</i>: </td>
							<td nowrap><input type="text" name="celenirnomo" value="<?php echo $celpersono["enirnomo"]; ?>"></td>
							<td class="col1">Mot de passe <i>(*)</i>: </td>
							<td nowrap><input type="text" name="pasvorto" value="<?php echo $celpersono["pasvorto"]; ?>"></td>
						</tr>
						<tr>
							<td colspan="2" class="col1">Droits :</td>
							<td nowrap>
								<?php listi_rajtojn($celpersono["rajtoj"], "fr");?>
							</td>
							<td nowrap class="col1">Langue :</td>
							<td nowrap><?php simplaVorto("nomo","lingvoj"," where kodo='fr'"); ?></td>
						</tr>
						<tr>
							<td nowrap colspan="2" class="col1">Pays :</td>
							<td nowrap>
								<?php listi_landojn ($celpersono["lando"], "fr");?>
							</td>
							<td nowrap class="col1">Adresse électronique <i>(*)</i>:</td>
							<td nowrap><input type="text" name="retadreso" size="25" value="<?php echo $celpersono["retadreso"]; ?>"></td>
						</tr>
						<tr>
							<td colspan="2" class="col1">Préférence pour les messages :</td>
							<td nowrap>
								<input type="radio" name="sistemo" value="U" <?php if ($celpersono["sistemo"]=='U'){echo "checked";}?>>&nbsp;lettres accentuées <br>
								<input type="radio" name="sistemo" value="X" <?php if ($celpersono["sistemo"]=='X'){echo "checked";}?>>&nbsp;système en X
							</td>
							<td class="col1">stop-mailing :</td>
							<td><input type="checkbox" name="stopInfo" <?php if ($celpersono["stop_info"]=="J") {echo "checked";}?>>
							</td>
						</tr>
						<tr>
							<td nowrap colspan="2" class="col1">Date de naissance :</td>
							<td nowrap>
								<?php afixsi_naskigxdaton ($celpersono["naskigxdato"], "fr"); ?>
							</td>
							<td nowrap class="col1">Dernier cours choisi :</td>
							<td nowrap>
								<?php listi_kursojn ($celpersono["kurso"], "fr");?>
							</td>
						</tr>
						<tr>
							<td nowrap colspan="2" class="col1">Inscription : </td>
							<td nowrap>
								<?php //ereg("([0-9]{4})-([0-9]{1,2})-([0-9]{1,2})", $celpersono["ekdato"],$ekdt);
									$ekdt = explode("-",$celpersono["ekdato"]);
									if (count($ekdt)==3) { // on affiche la date que si on arrive à la découper en 3 (jours, mois, année)
										echo $ekdt[2]." ";
										simplaVorto("nomo","monatoj"," where kodo='".$ekdt[1]."' and lingvo='fr'");
										echo " ".$ekdt[0];
									}
								?>
							</td>
							<td class="col1">Dernière connexion :</td>
								<?php
									if ($celpersono["enirnomo"]==""){
										$lastdato="";
									} else {
										$teksto = addslashes($celpersono["enirnomo"]." eniris"); // on protege les noms qui contiennent des apostrophes
										$demando = "select DATE_FORMAT(horo,'%d %b %Y %T') as horo from protokolo where kategorio='ENIRO' and teksto='$teksto' order by horo DESC";
										$result = $bdd->query($demando) or die(print_r($bdd->errorInfo()));
										$row=$result->fetch();
										$lastdato=$row["horo"];
									}
								?>
							<td><?php echo $lastdato; ?></td>
						</tr>
						<tr>
							<td nowrap colspan="2" class="col1" valign="top">
								Commentaire de l'&eacute;l&egrave;ve :
							</td>
							<td colspan="3"  valign="top">
								<textarea name="kialo" cols="90" rows="6"><?php echo stripslashes($celpersono['kialo'])?></textarea>
							</td>
						</tr>
					</table>
			
							<?php if ($persono["rajtoj"]=='A') { ?>
							<table class="perso">
								<tr>
									<td valign="middle">
										<?php if ($celpersono_id=="") { ?>
											<a href="javascript:document.administri2.action='sercxi.php';document.administri2.submit();">
											<img src="bildoj/find.png"></a>
										<?php } else { 
											$_SESSION["admin_id"]=$_SESSION["persono_id"];
										?>
											<a href="javascript:window.location.href='eniri.php?enirnomo=<?=$celpersono['enirnomo'];?>&pasvorto=<?=$celpersono['pasvorto'];?>';">
											<img src="bildoj/kdmconfig.png" border="0"></a>
										<?php } ?>
									</td>
									<?php if ($celpersono_id!="") { ?>
									<td valign="middle">
										<a href="javascript:document.administri2.submit();">
										<img src="bildoj/filesaveas.png" border="0"></a>
									</td>
									<?php } ?>
									<td valign="middle">
										<a href="javascript:document.administri2.action='delete.php';document.administri2.submit();">
										<img src="bildoj/trashcan_full.png"></a>
									</td>
								</tr>
							</table>
							<?php } ?>
						</div>
					
					<?php
					// liste des cours déjà suivis
					// ne liste rien pour l'écran vide ou pour les correcteurs/administrateurs
					if (($celpersono_id!="") && (($celpersono["rajtoj"]=='S')||($celpersono["rajtoj"]=='P'))) {
							$nuna_kursoj = listi_kursojn_de_iu_studanto($celpersono_id);
					?>
							<div class="kadro">
							<table class="perso" cellpadding="2">
								<thead>
								<tr>
									<td>&nbsp;</td>
									<td>Son correcteur :</td>
									<td>Cours :</td>
									<td>Dernière Leçon reçue :</td>
								</tr>
								<thead>
								<tbody>
									<?php $havasKurson = 0;
										$havasSekvitanKurson = 0;
										// en théorie, il n'y en a qu'un seul dont le correcteur est modifiable 
										// (celui qui est N ou K ou H)
										// on affiche les infos pour chaque cours.
										while ($nuna_kurso = $nuna_kursoj->fetch()) {
											if ($celpersono["kurso"]==$nuna_kurso['kurso']) {
												// modif Emmanuelle - 26.12.2006
												// si l'élève a déjà suivi un cours (terminé ou abandonné
												// on ne considère pas qu'il est inscrit le cours de façon
												// à pouvoir lui attribuer un nouveau correcteur
												if ($nuna_kurso['stato']!='H' && $nuna_kurso['stato']!='F') {
													$havasKurson=1;
												}
											}
											?>
										<tr>
										<?php // le cours demandé est un cours actuellement suivi
										if (($celpersono["kurso"]==$nuna_kurso['kurso'])
											&& (($nuna_kurso['stato']=='N') ||($nuna_kurso['stato']=='K'))) {
													$havasSekvitanKurson++;
												
										
										// emmanuelle (11.08.2007) : permettre de changer le correcteur d'un élève qui a été remis en attente 
										if ($celpersono["rajtoj"]=='P') { ?>
										<td>
											<a href="javascript:document.administri2.action='administriNunanKurson.php';document.administri2.submit();">
											<img src="bildoj/filesaveas.png"  align="middle"></a></td>
										<td><?php listi_Korektantoj_laux_kurso($celpersono_id,$nuna_kurso['kurso']); ?></td>
									<?php } else { ?>
										<td><img src="bildoj/1rightarrow.png" align="middle"></td>
										<td><strong><a href="administri.php?celpersono_id=<?=$nuna_kurso['korektanto_id']?>">
										<?=$nuna_kurso['korektanto_enirnomo'] ?></a></strong></td>
									<?php } ?>
									</a></strong></td>
									<td><?=$nuna_kurso['kursoj_nomo'] ?></td>
									<td>
									<?php if ($nuna_kurso['lecionoj_titolo']=="") { echo "Pas de leçon en cours";}
										else {
											echo $nuna_kurso['lecionoj_titolo'];
											$lastdato=$nuna_kurso['lastdato'];
											//ereg("([0-9]{4})-([0-9]{1,2})-([0-9]{1,2})", $lastdato,$lstdt);
											$lstdt=explode("-", $lastdato);
											echo " (".$lstdt[2].".".$lstdt[1].".".$lstdt[0].")";
										}
									?>
									</td>
			
									<?php } else { // ceci n'est pas un cours actuellement suivi ?>
									<td>&nbsp;</td>
									<td><strong><a href="administri.php?celpersono_id=<?=$nuna_kurso['korektanto_id']?>">
									<?=$nuna_kurso['korektanto_enirnomo'] ?></a></strong></td>
									<td><?=$nuna_kurso['kursoj_nomo'] ?></td>
									<td>
										<?php if ($nuna_kurso['lecionoj_titolo']=="") { echo "Pas de leçon en cours";} 
											else {
												echo $nuna_kurso['lecionoj_titolo'];
												$lastdato=$nuna_kurso['lastdato'];
												//ereg("([0-9]{4})-([0-9]{1,2})-([0-9]{1,2})", $lastdato,$lstdt);
												$lstdt=explode("-", $lastdato);
												echo " (".$lstdt[2].".".$lstdt[1].".".$lstdt[0].")";
											}
										?>
									</td>
								<?php } ?>
							</tr>
							<?php }
								// on ne propose d'affecter un correcteur que sous 2 conditions :
								// - il n'a pas déjà suivi le cours en question
								// - il n'a pas déjà un cours qu'il suit actuellement
								if (($havasKurson==0) && ($havasSekvitanKurson==0)) {
									// aucun cours suivi : c'est un élève a qui on doit affecter un correcteur ?>
								<tr>
									<td>
										<a href="javascript:document.administri2.action='administriNunanKurson.php';document.administri2.submit();">
										<img src="bildoj/filesaveas.png"  align="middle"></a></td>
									<td><?php listi_Korektantoj_laux_kurso($celpersono["id"],$celpersono["kurso"]); ?></td>
									<td>
									<?php $kurso = $celpersono["kurso"];
										simplaVorto("nomo","kursoj"," where kodo='$kurso' and lingvo='fr' "); ?>
								</td>
								<td>Pas de leçon en cours</td>
							</tr>
						<?php } ?>
						</tbody>
						</table>
						</div>
						<?php } // fin de la liste des cours suivis ?>
						
						<div class="encadre">
							<table class="perso">
								<tr>
							<?php if ($persono["rajtoj"]=='A') { ?>
									<td>
							<p class="klarigo">Commentaires du correcteur :</p>
						</form>
							<?php								
								// notoj aldoneblaj per la korektanto
								$demando5 = "select * from komentoj where komentoj.studanto='".$celpersono["id"]."'";
								$result5 = $bdd->query($demando5) or die(print_r($bdd->errorInfo()));
								while ($row5 = $result5->fetch()){
									$demando6 = "select enirnomo from personoj where personoj.id='".$row5['korektanto']."'";
									$result6 = $bdd->query($demando6) or die(print_r($bdd->errorInfo()));
									$row6 = $result6->fetch();
									$pagxo="administri.php?celpersono_id=".$celpersono["id"];
									echo "<a href='forigiNoton.php?noto_id=".$row5['id']."&stud_id=".$celpersono['id']."&stud_nomo=".$celpersono['enirnomo']."&pagxo=".$pagxo."'>";
									echo "<img src=\"forum/templates/subSilver/images/icon_delete.gif\" alt=\"Supprimer ce commentaire\" title=\"Supprimer ce commentaire\" align=\"middle\"></a>";
									echo " <span class='klarigo'>de ".$row6['enirnomo']." le ".$row5['dato']."</span> :\n";
									echo " ".$row5["teksto"]."\n";
									echo "<br>\n";
								}	
								echo "<form name='aldoniNoton' method='post' action='aldoniNoton.php'>\n";
								echo "<input type='hidden' name='stud_id' value='".$celpersono["id"]."'>\n";
								$pagxo="administri.php?celpersono_id=".$celpersono["id"];
								echo "<input type='hidden' name='pagxo' value='$pagxo'>\n";
								echo "<input type='text' name='teksto' size='50' value='** vous pouvez ajouter un commentaire ici **' onFocus='this.value=\"\"'>";
								echo "&nbsp;&nbsp;<input type='image' src='bildoj/filesaveas.png' align='middle' onClick='this.form.submit();'>";
								echo "</form>";	
							?>
							</td>
							<?php } ?>
						</tr>
						</table>
					</div>
					
					<?php // liste les élèves uniquement pour les correcteurs et les administrateurs
					if (($celpersono["rajtoj"]=='A') ||($celpersono["rajtoj"]=='K')) { ?>
						<h1>Ses élèves :</h1>
						<p>Nb max. d’élèves pour chaque cours :</p>
						<p>
							<?php // mettre ici le nombre d'élèves voulu par cours. 
							$demando = sprintf("SELECT kursoj.nomo as kurso,kiom_lernantoj as kiom FROM korektebla_kurso,kursoj WHERE korektebla_kurso.kurso=kursoj.kodo and kursoj.lingvo='fr' and korektebla_kurso.korektanto=%s",$celpersono["id"]);
							$result = $bdd->query($demando) or die(print_r($bdd->errorInfo()));
							while($row = $result->fetch()) {
								echo "<span class='klarigo'>".$row["kurso"]."</span> : ";
								echo "<span class='datumo'>".$row["kiom"]."</span>&nbsp;&nbsp;&nbsp;&nbsp;";
							}
							?>
						</p>
									
						<?php listi_S_laux_K($celpersono_id); ?>
						<?php } ?>

					<!-- fino de la administra parto -->
				</div>
<?php include "pagxpiedo.inc.php"; ?>
