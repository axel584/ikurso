<?php
include "util.php";
$persono_id=$_SESSION["persono_id"];
$form_sekso=$_POST["sekso"];
$form_familinomo=$_POST["familinomo"];
$form_personnomo=$_POST["personnomo"];
$form_sistemo=$_POST["sistemo"];
$form_adreso1=$_POST["adreso1"];
$form_adreso2=$_POST["adreso2"];
$form_posxtkodo=$_POST["posxtkodo"];
$form_urbo=$_POST["urbo"];
$form_lando=$_POST["lando"];
$form_naskigxdato_tago=$_POST["naskigxdato_tago"];
$form_naskigxdato_monato=$_POST["naskigxdato_monato"];
$form_naskigxdato_jaro=$_POST["naskigxdato_jaro"];
$form_kialo=$_POST["kialo"];
$form_stopInfo=isset($_POST["stopInfo"])?"J":"N";
$teksto="";

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
	if ($persono['naskigxdato']!=$form_naskigxdato_jaro."-".$form_naskigxdato_monato."-".$form_naskigxdato_tago) {
		$teksto.="naskigxdato : malnova:".$persono['naskigxdato']." - nova : ".$form_naskigxdato_jaro."-".$form_naskigxdato_monato."-".$form_naskigxdato_tago."\n";
	}
	if ($persono['kialo']!=$form_kialo) {
		$teksto.="kialo : malnova:".$persono['kialo']." - nova : ".$form_kialo."\n";
	}
	if ($persono['sistemo']!=$form_sistemo) {
		$teksto.="sistemo: malnova:".$persono['sistemo']." - nova : ".$form_sistemo."\n";
	}
	if ($persono['stop_info']!=$form_stopInfo) {
		$teksto.="stopInfo: malnova:".$persono['stop_info']." - nova : ".$form_stopInfo."\n";
	}
	if ($teksto!=""){
		protokolo($persono_id,"UPDATE PERSO",$teksto);
	}
  modifiPersonon($persono_id,$form_sekso,$form_familinomo,$form_personnomo,$form_adreso1,$form_adreso2,$form_posxtkodo,$form_urbo,$form_lando,$form_naskigxdato_tago,$form_naskigxdato_monato,$form_naskigxdato_jaro,$form_kialo,$form_sistemo,$form_stopInfo);
  switch ($rapidvojo) {
	case "1":
		header("Location:index.php");
		break;
    	case "2":
        	header("Location:aligxi.php");
	        break;
	case "3":
        	header("Location:atendiKorekanton.php");
        	break;
	case "4":
        	header("Location:personinformoj.php");
	        break;
    	case "5":
        	header("Location:studantojlisto.php");
        	break;
    	case "6":
        	header("Location:administri.php");
        	break;
	default:
		header("Location:personinformoj.php");
  }
}
?>          