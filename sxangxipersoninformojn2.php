<?
include "util.php";
$pagxtitolo=$lgv_sxangipersoninformojn;
$persono_id=$_SESSION["persono_id"];

$form_sekso=$_POST["sekso"];
$form_familinomo=$_POST["familinomo"];
$form_personnomo=$_POST["personnomo"];
$form_retadreso=$_POST["retadreso"];
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
$form_stopInfo=$_POST["stopInfo"];
if ($form_stopInfo=='on') {$form_stopInfo='J';} else {$form_stopInfo='N';}
$teksto="";

if ($persono_id=="") {header("Location:index.php?erarkodo=4");} else {
	if ($persono->get_sekso()!=$form_sekso) {
		$teksto.="sekso: malnova:".$persono->get_sekso()." - nova : ".$form_sekso."\n";
		$persono->set_sekso($form_sekso);
	}
	if ($persono->get_familinomo()!=$form_familinomo) {
		$teksto.="familinomo : malnova:".$persono->get_familinomo()." - nova : ".$form_familinomo."\n";
		$persono->set_familinomo($form_familinomo);
	}
	if ($persono->get_personnomo()!=$form_personnomo) {
		$teksto.="personnomo : malnova:".$persono->get_personnomo()." - nova : ".$form_personnomo."\n";
		$persono->set_personnomo($form_personnomo);
	}
	if ($persono->get_adreso1()!=$form_adreso1) {
		$teksto.="adreso1 : malnova:".$persono->get_adreso1()." - nova : ".$form_adreso1."\n";
		$persono->set_adreso1($form_adreso1);
	}			
	if ($persono->get_adreso2()!=$form_adreso2) {
		$teksto.="adreso2 : malnova:".$persono->get_adreso2()." - nova : ".$form_adreso2."\n";
		$persono->set_adreso2($form_adreso2);
	}				
	if ($persono->get_posxtkodo()!=$form_posxtkodo) {
		$teksto.="posxtkodo : malnova:".$persono->get_posxtkodo()." - nova : ".$form_posxtkodo."\n";
		$persono->set_posxtkodo($form_posxtkodo);
	}				
	if ($persono->get_urbo()!=$form_urbo) {
		$teksto.="urbo : malnova:".$persono->get_urbo()." - nova : ".$form_urbo."\n";
		$persono->set_urbo($form_urbo);
	}				
	if ($persono->lando->get_kodo()!=$form_lando) {
		$teksto.="lando : malnova:".$persono->lando->get_kodo()." - nova : ".$form_lando."\n";
		$lando = new landoj;
		$lando->load_by_kodo($form_lando,$persono->lingvo->get_kodo());
		$persono->set_lando($lando);
	}
	if ($persono->get_naskigxdato()!=$form_naskigxdato_jaro."-".$form_naskigxdato_monato."-".$form_naskigxdato_tago) {
		$teksto.="naskigxdato : malnova:".$persono->get_naskigxdato()." - nova : ".$form_naskigxdato_jaro."-".$form_naskigxdato_monato."-".$form_naskigxdato_tago."\n";
		$persono->set_naskigxdato($form_naskigxdato_jaro."-".$form_naskigxdato_monato."-".$form_naskigxdato_tago);
	}
	if ($persono->get_kialo()!=$form_kialo) {
		$teksto.="kialo : malnova:".$persono->get_kialo()." - nova : ".$form_kialo."\n";
		$persono->set_kialo($form_kialo);
	}
	if ($persono->get_sistemo()!=$form_sistemo) {
		$teksto.="sistemo: malnova:".$persono->get_sistemo()." - nova : ".$form_sistemo."\n";
		$persono->set_sistemo($form_sistemo);
	}
	if ($persono->get_stopInfo()!=$form_stopInfo) {
		$teksto.="stopInfo: malnova:".$persono->get_stopInfo()." - nova : ".$form_stopInfo."\n";
		$persono->set_stopInfo($form_stopInfo);
	}
	$persono->store();	
	if ($teksto!=""){
		$protokolo = new protokolo;
		$protokolo->set_persono_id($persono_id);
		$protokolo->set_kategorio("UPDATE PERSO");
		$protokolo->set_teksto($teksto);
		$protokolo->store();
	}
  //modifiPersonon($persono_id,$sekso,$familinomo,$personnomo,$adreso1,$adreso2,$posxtkodo,$urbo,$lando,$naskigxdato_tago,$naskigxdato_monato,$naskigxdato_jaro,$kialo,$maksimumo,$kurso);
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