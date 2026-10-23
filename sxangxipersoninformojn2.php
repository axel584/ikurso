<?php
include "util.php";
$persono_id=isset($_SESSION["persono_id"])?$_SESSION["persono_id"]:"";
$form_sekso=isset($_POST["sekso"])?$_POST["sekso"]:"";
$form_familinomo=$_POST["familinomo"];
$form_personnomo=$_POST["personnomo"];
$form_adreso1=$_POST["adreso1"];
$form_adreso2=$_POST["adreso2"];
$form_posxtkodo=$_POST["posxtkodo"];
$form_urbo=$_POST["urbo"];
$form_lando=$_POST["lando"];
$form_naskigxdato=$_POST["naskigxdato"];
$form_rappel=isset($_POST["rappel"]);
$form_saviezvous=isset($_POST["saviezvous"]);
$form_aboneEsperantoAktiv=isset($_POST["aboneEsperantoAktiv"]);
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

if ($persono_id=="") {header("Location:index.php?erarkodo=4"); exit;} else {
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
	if ($teksto!=""){
		protokolo($persono_id,"UPDATE PERSO",$teksto);
	}
  // préférences d'envoi des mails (#920) ; modifiPersonon() garde stop_rappel à jour
  require_once "api/AgordojAPI.php";
  $agordojAPI = new AgordojAPI($bdd);
  foreach (array("RAPPEL" => $form_rappel, "SAVIEZVOUS" => $form_saviezvous) as $agordo => $rajto) {
    if ($agordojAPI->sxangxi((int)$persono_id, $agordo, $rajto)) {
      protokolo($persono_id,"MALABONO",$persono["enirnomo"].($rajto ? " reçoit de nouveau " : " ne reçoit plus ").$agordo." (données personnelles)");
    }
  }
  // stop_info n'est plus proposé (#920) : la valeur enregistrée est conservée
  modifiPersonon($persono_id,$form_sekso,$form_familinomo,$form_personnomo,$form_adreso1,$form_adreso2,$form_posxtkodo,$form_urbo,$form_lando,$form_naskigxdato_tago,$form_naskigxdato_monato,$form_naskigxdato_jaro,$persono['stop_info'],$form_rappel ? "N" : "J");

  require_once "api/SympaAPI.php";
  $persono_retadreso = apartigiPersonon($persono_id)['retadreso'];
  $sympa = new SympaAPI();
  if ($form_aboneEsperantoAktiv) {
    $sympa->subscribe($persono_retadreso, trim($form_personnomo." ".$form_familinomo));
  } else {
    $sympa->unsubscribe($persono_retadreso);
  }

  header("Location:personinformoj.php?erarkodo=20"); exit; // l'erarkodo à 20 permet d'afficher un toast pour confirmer l'enregistrement des données
  
}
?>          
