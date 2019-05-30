<?php
include "util.php";
$persono_id=$_SESSION["persono_id"];
$form_sekso=isset($_POST["sekso"])?$_POST["sekso"]:"";
$form_familinomo=$_POST["familinomo"];
$form_personnomo=$_POST["personnomo"];
$form_adreso1=$_POST["adreso1"];
$form_adreso2=$_POST["adreso2"];
$form_posxtkodo=$_POST["posxtkodo"];
$form_urbo=$_POST["urbo"];
$form_lando=$_POST["lando"];
$form_naskigxdato=$_POST["naskigxdato"];
$form_stopInfo=isset($_POST["stopInfo"])?"J":"N";
$form_stopRappel=isset($_POST["stopRappel"])?"J":"N";
$teksto="";

$nomDesMois = array("Janvier"=>'01',"Février"=>'02',"Mars"=>'03',"Avril"=>'04',"Mai"=>'05',"Juin"=>'06',"Juillet"=>'07',"Août"=>'08',"Septembre"=>'09',"Octobre"=>'10',"Novembre"=>'11',"Décembre"=>'12');

$elementsNaskigxdato = explode("-",$form_naskigxdato);
if (count($elementsNaskigxdato)==3) {
	$form_naskigxdato_tago = $elementsNaskigxdato[2];
	$form_naskigxdato_monato = $elementsNaskigxdato[1];
	$form_naskigxdato_jaro = $elementsNaskigxdato[0];
} else {
	$form_naskigxdato_tago="";
	$form_naskigxdato_monato="";
	$form_naskigxdato_jaro="";
}

if ($persono_id=="") {header("Location:index.php?erarkodo=4");} else {
	// on verifie les différences pour enregistrer dans le protokolo les changements
	if ($persono['sekso']!=$form_sekso) {
		$teksto.="sekso: malnova:".$persono['sekso']." - nova : ".$form_sekso."\n";
	}
	if ($persono['familinomo']!=$form_familinomo) {
		$teksto.="familinomo : malnova:".$persono['familinomo']." - nova : ".$form_familinomo."\n";
	}
	if ($persono['personnomo']!=$form_personnomo) {
		$teksto.="personnomo : malnova:".$persono['personnomo']." - nova : ".$form_personnomo."\n";
	}
	if ($persono['adreso1']!=$form_adreso1) {
		$teksto.="adreso1 : malnova:".$persono['adreso1']." - nova : ".$form_adreso1."\n";
	}			
	if ($persono['adreso2']!=$form_adreso2) {
		$teksto.="adreso2 : malnova:".$persono['adreso2']." - nova : ".$form_adreso2."\n";
	}				
	if ($persono['posxtkodo']!=$form_posxtkodo) {
		$teksto.="posxtkodo : malnova:".$persono['posxtkodo']." - nova : ".$form_posxtkodo."\n";
	}				
	if ($persono['urbo']!=$form_urbo) {
		$teksto.="urbo : malnova:".$persono['urbo']." - nova : ".$form_urbo."\n";
	}				
	if ($persono['lando']!=$form_lando) {
		$teksto.="lando : malnova:".$persono['lando']." - nova : ".$form_lando."\n";
	}
	if ($persono['naskigxdato']!=$form_naskigxdato) {
		$teksto.="naskigxdato : malnova:".$persono['naskigxdato']." - nova : ".$form_naskigxdato."\n";
	}
	if ($persono['stop_info']!=$form_stopInfo) {
		$teksto.="stopInfo: malnova:".$persono['stop_info']." - nova : ".$form_stopInfo."\n";
	}
	if ($persono['stop_rappel']!=$form_stopRappel) {
		$teksto.="stopRappel: malnova:".$persono['stop_rappel']." - nova : ".$form_stopRappel."\n";
	}
	if ($teksto!=""){
		protokolo($persono_id,"UPDATE PERSO",$teksto);
	}
  modifiPersonon($persono_id,$form_sekso,$form_familinomo,$form_personnomo,$form_adreso1,$form_adreso2,$form_posxtkodo,$form_urbo,$form_lando,$form_naskigxdato_tago,$form_naskigxdato_monato,$form_naskigxdato_jaro,$form_stopInfo,$form_stopRappel);
  header("Location:personinformoj.php?erarkodo=20"); // l'erarkodo à 20 permet d'afficher un toast pour confirmer l'enregistrement des données
  
}
?>          
