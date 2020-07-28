<?php
//error_reporting(1);
//session_start();
$vojo="../";
include $vojo."util.php";
include_once ($vojo."fr.inc.php");
include_once ($vojo."db.inc.php");
include_once ($vojo."webui.inc.php");
//ER 05.10.2015 : correction pour passage en PHP 5.4
//session_register("memorkurso");
if (isset($memorkurso)) {
	$_SESSION['memorkurso']=$memorkurso;
}

$persono_id=isset($_SESSION["persono_id"])?$_SESSION["persono_id"]:"";
if ($persono_id!="") {
	$persono = apartigiPersonon($persono_id);
	$enirnomo = $persono["enirnomo"];
}

function PorInformistoj() {
	global $persono_id, $lingvo, $verdakrabo, $enirnomo, $naskigxdato_tago, $naskigxdato_monato, $naskigxdato_jaro, $sekso, $personnomo, 
	$retadreso, $familinomo, $adreso1, $adreso2, $urbo, $lando, $posxtkodo, $kurso, $kialo,$bdd;
		$demando="select retadreso from personoj where rajtoj='I'";
		$result = $bdd->query($demando);
		$row=$result->fetch();
		$informistoj=$row["retadreso"];
		while ($row=$result->fetch()) {
		   $informistoj=$informistoj.",".$row["retadreso"];
		}
		if ($verdakrabo=="on"){
			$filename = "../mails/verdakraboFR.html";
			/* ajout dans le fichier des inscriptions VerdaKrabo
			$fic_VK="../doc/AInscrireVerdaKrabo.txt";
			$ficVK = fopen($fic_VK, "a+");
			fwrite($ficVK,$personnomo." ".$familinommo." ".$retadreso."\n");
			fclose($ficVK);
			 */
		} else { 
			$filename = "../mails/novalernantoFR.html";
		}
		$fd = fopen($filename, "r");
		$contents = fread($fd, filesize ($filename));
		fclose($fd);
		$contents=str_replace("##ENIRNOMO##",$enirnomo,$contents);
		$contents=str_replace("##NASKIGXDATO##",$naskigxdato_tago.".".$naskigxdato_monato.".".$naskigxdato_jaro,$contents);
		$contents=str_replace("##SEKSO##",$sekso,$contents);
		$contents=str_replace("##PERSONNOMO##",$personnomo,$contents);
		$contents=str_replace("##FAMILINOMO##",stripslashes($familinomo),$contents);
		$contents=str_replace("##SRETADRESO##",$retadreso,$contents);
		$contents=str_replace("##ADRESO1##",stripslashes($adreso1),$contents);
		$contents=str_replace("##ADRESO2##",stripslashes($adreso2),$contents);
		$contents=str_replace("##LANDO##",stripslashes($lando),$contents);
		$contents=str_replace("##POSXTKODO##",$posxtkodo,$contents);
		$contents=str_replace("##URBO##",stripslashes($urbo),$contents);
		$contents=str_replace("##RETADRESO##",$retadreso,$contents);
		$contents=str_replace("##SRETADRESO##",$retadreso,$contents);
		if ($kurso=="CG"){$contents=str_replace("##KURSO##","Cours en dix le&ccedil;ons",$contents);}
		if ($kurso=="KE"){$contents=str_replace("##KURSO##","I-kurso",$contents);}
		if ($kurso=="GR"){$contents=str_replace("##KURSO##","Gerda malaperis",$contents);}			
		$contents=str_replace("##KOMENTO##",stripslashes(nl2br($kialo)),$contents);
		// envoyer le mail eleve pour l'inviter a attendre un correcteur.
		if ($verdakrabo=="on"){$objekto="Un de plus chez le Crabe Vert";}
		else {$objekto="Nouvel élève sur I-kurso";}
		//mailViaSmtp($informistoj,"ikurso@esperanto-france.org",$objekto,$contents);
		mailViaSES($informistoj,$objekto,$contents);
		protokolo($persono_id,"VERDA KRABO","$retadreso : $verdakrabo");
}

$subjekto=isset($_POST["010_subjekto"])?$_POST["010_subjekto"]:"";
$adreso=isset($_POST["010_adreso"])?$_POST["010_adreso"]:"";
$titolo=isset($_POST["010_titolo"])?$_POST["010_titolo"]:"";
$kurso=isset($_POST["kurso"])?$_POST["kurso"]:"";
$numcxap=isset($_POST["numcxap"])?$_POST["numcxap"]:"";
$nunleciono=isset($_POST["nunleciono"])?$_POST["nunleciono"]:"";
$jamaligxi=isset($_POST["jamaligxi"])?$_POST["jamaligxi"]:"";
$ktrl_enirnomo=isset($_POST["ktrl_enirnomo"])?$_POST["ktrl_enirnomo"]:"";
$ktrl_pasvorto=isset($_POST["ktrl_pasvorto"])?$_POST["ktrl_pasvorto"]:"";
$nova_enirnomo=isset($_POST["nova_enirnomo"])?$_POST["nova_enirnomo"]:"";
$nova_pasvorto=isset($_POST["nova_pasvorto"])?$_POST["nova_pasvorto"]:"";
$pasvorto2=isset($_POST["pasvorto2"])?$_POST["pasvorto2"]:"";
$retadreso=isset($_POST["retadreso"])?$_POST["retadreso"]:"";
$adreso1=addslashes($_POST["adreso1"]);
$adreso2=addslashes($_POST["adreso2"]);
$familinomo=addslashes($_POST["familinomo"]);
$personnomo=isset($_POST["personnomo"])?$_POST["personnomo"]:"";
$sekso=isset($_POST["sekso"])?$_POST["sekso"]:"";
$posxtkodo=isset($_POST["posxtkodo"])?$_POST["posxtkodo"]:"";
$urbo=addslashes($_POST["urbo"]);
$lando=isset($_POST["lando"])?$_POST["lando"]:"";
$naskigxdato_tago=isset($_POST["naskigxdato_tago"])?$_POST["naskigxdato_tago"]:"";
$naskigxdato_monato=isset($_POST["naskigxdato_monato"])?$_POST["naskigxdato_monato"]:"";
$naskigxdato_jaro=isset($_POST["naskigxdato_jaro"])?$_POST["naskigxdato_jaro"]:"";
$kialo=addslashes($_POST["kialo"]);
$verdakrabo=isset($_POST["verdakrabo"])?$_POST["verdakrabo"]:"";
// Emmanuelle (30.10.2006) : ajout information pour ceux qui ne veulent pas divulguer leurs donnees personnelles
$stopInfo=isset($_POST["stopInfo"])?$_POST["stopInfo"]:"";

//echo "ktrl_enirnomo=".$ktrl_enirnomo." pasvorto=".$ktrl_pasvorto."<br>";

$lec01=array(13,'2','2','3','2','3','4','1','4','4','1','2','3','2');
$lec02=array(9,'3','3','1','3','2','3','2','1','3');
if (isset(${substr($subjekto,0,5)})){
	$bonaj=0;
	$eraroj_en_qcm = array();
}
$fonto="<html><head><title>".$_POST["010_adreso"]."</title>\n";
$fonto.="<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\"\n>";
$fonto.="<style>body{font-family:\"Courier New\", Courier, sans-serif;font-size:small}</style>\n";
$fonto.="</head><body>";
$fonto.="<em>".$_POST["010_adreso"]."</em><br>\n";

// enregistrer les reponses en sessions "aligxilo"
foreach($_POST as $key => $value) {
	if (substr($key, 0, 3)=="012") { 
		$memorkurso[$key]=$value;
		$fonto.="<p style=\"color:green;border-bottom:1px dashed green;\">".$value."</p>\n";
	}
	if (substr($key, 0, 3)=="013") { 
		$memorkurso[$key]=$value;
		$fonto.="<p style=\"color:green;border-bottom:1px dashed green;\">".$value."</p><p>\n";
	}
	elseif (substr($key, 0, 3)=="dem") { 
		$memorkurso[$key]=$value;
		$fonto.="<p>".$value."<br>\n";
	}
	elseif (substr($key, 0, 3)=="res") { 
		$memorkurso[$key]=$value;
		$fonto.="<span style=\"color:blue\">".$value."</span></p>\n";
	}
	elseif (substr($key, 0, 2)=="dd") { 
		$memorkurso[$key]=$value;
		$fonto.="<span style=\"color:blue\">".$value."</span>";
		if ((substr($value,strlen($value)-1,1))==".") {$fonto.="</p><p>\n";}
	}
	elseif (substr($key, 0, 2)=="rr") { 
		$memorkurso[$key]=$value;
		$fonto.="<span style=\"color:blue\"><b>".$value."</b></span>";
	}
	elseif (substr($key, 0, 3)=="900") { 
		if ((substr($key, 4, 3)=="dmd")){
			$memorkurso[$key]=$value;
			$fonto.="<p>".$value."<br>\n";
		}
		elseif (substr($key, 4, 4)!="resp"){
			$memorkurso["900_".substr($key,4,2)]=$_POST["900_".substr($key,4,2)];
			$tabrep=explode("/", $_POST["900_resp_".substr($key, 4, 2)]);
			// la variable $ subjekto contient le numéro de la leçon et on récupère ainsi de la variable $lec01 ou $lec02 la valeur attendue
			$indice_reponse_attendue=${substr($subjekto,0,5)}[(integer)(substr($key,4,2))];
			// on récupère du POST la réponse de l'élève
			$indice_reponse_eleve=$_POST["900_".substr($key, 4, 2)]; 
			// si l'élève n'a pas donné de réponse, l'indice de sa réponse contient "on" (pourquoi ?)
			if ($indice_reponse_eleve!="on") {
				$fonto.=" <span style=\"color:blue\">".$tabrep[$indice_reponse_eleve-1]."</span>";
				
			} 
			if ($indice_reponse_attendue==$indice_reponse_eleve){
				$bonaj++;
      		} else {
      			$eraroj_en_qcm[]=substr($key, 4, 2);
      			$fonto.="<br>Non. La bonne r&eacute;ponse est : ".$tabrep[$indice_reponse_attendue-1]."";
      		}
      	$fonto.="</p>\n";
		}
   }
}

if (isset($bonaj)){
	$fonto.="<br> Resultat du QCM : ".$bonaj."/".${substr($subjekto,0,5)}[0]."<br>";
}
$fonto.="<br><br><span style=\"color:green;border-bottom:1px dashed green;\">Commentaire :</span><br>";
if ($kialo!=""){
	$fonto.="<span style='color:blue'>".stripslashes(nl2br($kialo))."</span><br>";
	$memorkurso["kialo"]=$kialo;
	$aligxilo["kialo"]=$kialo;
}
$fonto.="</body></html>";

// si deja identifie : rien a verifier sur l'eleve
if ($jamaligxi=="jes") {
	/*
   $persono_id = $_SESSION["persono_id"];
   if (($persono_id=="0")||($persono_id=="")) {
			protokolo(0,"ERARO","provis eniri : $ktrl_enirnomo - $ktrl_pasvorto");
			session_register("aligxilo");
			header( "Location:".$_POST["010_adreso"]."?erarkodo=1");
			exit(0);
   } else {
      $persono = apartigiPersonon($persono_id);
    */
	if ($persono_id==""){
		// TODO : on ne devrait jamais passé par là, non ?
		// si deja inscrit:
      $enirnomo = $ktrl_enirnomo;
      $pasvorto = $ktrl_pasvorto;
		$query="select * from personoj where enirnomo='$enirnomo'";
		mysql_select_db("ikurso");
		$result = mysql_query($query) or die ("INSERT : Invalid query :".$query);
		if (mysql_num_rows($result) =="1") {
			$row=mysql_fetch_array($result);
			$persono_id=$row["id"];
			if ($row["pasvorto"]!=$pasvorto) {
				// ER 05.10.2015 : correction pour passage en PHP 5.4
				//session_register("aligxilo");
				$_SESSION['aligxilo']=$aligxilo;
				$_SESSION['memorkurso']=$memorkurso;
				header("Location:".$_POST["010_adreso"]."?erarkodo=1");
				exit(0);
			} 
			else { 
				$persono = apartigiPersonon($persono_id);
				$_SESSION["persono_id"]=$persono_id;
			}
		}
	}
   // si premiere lecon : envoi mail a l'eleve
	if (($kurso=='GR') and ($subjekto=="cxap01.php")){
		$subjekto=$_POST["010_subjekto"];
		$retadreso=$persono["retadreso"];
		$familinomo=$persono["familinomo"];
		$personnomo=$persono["personnomo"];
		$sekso=$persono["sekso"];
		$adreso1=$persono["adreso1"];
		$adreso2=$persono["adreso2"];
		$posxtkodo=$persono["posxtkodo"];
		$urbo=$persono["urbo"];
		$lando=$persono["lando"];
		$naskigxdato_tago=$persono["naskigxdato_tago"];
		$naskigxdato_monato=$personoT["naskigxdato_monato"];
		$naskigxdato_jaro=$persono["naskigxdato_jaro"];
		$kialo=$persono["kialo"];
		$filename = "../mails/aligxi".$kurso."FR.html";
		// si le fichier n'existe pas, met le nom du fichier sans le cours
		if (!file_exists($filename)) { $filename = "../mails/aligxiFR.html"; }
		$fd = fopen($filename, "r");
		$contents = fread($fd, filesize ($filename));
		fclose($fd);
		$contents=str_replace("##STUDANTO_ID##",$enirnomo,$contents);
		$contents=str_replace("##PASVORTO##",$pasvorto,$contents);		
		$mesagxkapo="MIME-Version: 1.0\n";
		//$fonto=konvX($fonto);
		$mesagxkapo.="Content-type:text/html;charset=utf-8\n";			
		$mesagxkapo.="From: ikurso <ikurso@esperanto-france.org>\n";
		$mesagxkapo.="Return-Path: <ikurso@esperanto-france.org>\n";
		$mesagxkapo.="Date: ".date("D, j M Y H:i:s").chr(13);
		// envoyer mail eleve pour l'inciter a attendre un correcteur
		if (!mailViaSES($persono["retadreso"],"Bienvenue au cours Gerda malaperis",$contents)) {
			protokolo($persono_id,"ERARO","mesagxo ne sendita por : ".$enirnomo." cxe : ".$persono["retadreso"]);
		}
		// mail aux informateurs si nouvel eleve Gerda
		PorInformistoj();
	}
} else {
   // si n'est pas encore inscrit :
   // enregistrer les reponses en session "aligxilo"
   $enirnomo=$nova_enirnomo;
   $pasvorto=$nova_pasvorto;

   $aligxilo["enirnomo"]=$enirnomo;
   $aligxilo["pasvorto"]=$pasvorto;
   $aligxilo["pasvorto2"]=$pasvorto2;
   $aligxilo["retadreso"]=$retadreso;
   $aligxilo["adreso1"]=$adreso1;
   $aligxilo["adreso2"]=$adreso2;
   $aligxilo["familinomo"]=$familinomo;
   $aligxilo["personnomo"]=$personnomo;
   $aligxilo["sekso"]=$sekso;
   $aligxilo["posxtkodo"]=$posxtkodo;
   $aligxilo["urbo"]=$urbo;
   $aligxilo["lando"]=$lando;
   $aligxilo["naskigxdato_tago"]=$naskigxdato_tago;
   $aligxilo["naskigxdato_monato"]=$naskigxdato_monato;
   $aligxilo["naskigxdato_jaro"]=$naskigxdato_jaro;
   $aligxilo["kurso"]=$kurso;
   $aligxilo["kialo"]=$kialo;
	if ($pasvorto!=$pasvorto2) {
		// ER 05.10.2015 : correction pour passage en PHP 5.4
		//session_register("aligxilo");
		$_SESSION['aligxilo']=$aligxilo;
		$_SESSION['memorkurso']=$memorkurso;
		header("Location:".$_POST["010_adreso"]."?erarkodo=3");
		exit(0);
	} elseif (($retadreso=="") || ($enirnomo=="") || ($pasvorto=="")) {
		// ER 05.10.2015 : correction pour passage en PHP 5.4
		//session_register("aligxilo");
		$_SESSION['aligxilo']=$aligxilo;
		$_SESSION['memorkurso']=$memorkurso;
		header("Location:".$_POST["010_adreso"]."?erarkodo=2");
		exit(0);
	} elseif ((checkEmail($retadreso))==FALSE) {
		// ER 05.10.2015 : correction pour passage en PHP 5.4
		//session_register("aligxilo");
		$_SESSION['aligxilo']=$aligxilo;
		$_SESSION['memorkurso']=$memorkurso;
		header("Location:".$_POST["010_adreso"]."?erarkodo=6");
		exit(0);
	}
	else {
		$query="select * from personoj where enirnomo='$enirnomo'";
		$result = $bdd->query($query);
		$row=$result->fetch();
		if (isset($row["id"])) {
			$persono_id=$row["id"];
			if (($row["pasvorto"]!=$pasvorto)||($row["retadreso"]!=$retadreso)){
				// ER 05.10.2015 : correction pour passage en PHP 5.4
				//session_register("aligxilo");
				$_SESSION['aligxilo']=$aligxilo;
				$_SESSION['memorkurso']=$memorkurso;
				header("Location:".$_POST["010_adreso"]."?erarkodo=7");
				exit(0);
			} 
			else {
				$persono = apartigiPersonon($persono_id);
				$_SESSION["persono_id"]=$persono_id;
			}
		}
		else {
			// nouvel eleve : verifier que le QCM pour la 1ere lecon du DLEK
			if (($kurso=='CG') and ($subjekto=="lec01.php"))
			{	
				if ($bonaj!=${substr($subjekto,0,5)}[0]){
					$noto=$bonaj."/".${substr($subjekto,0,5)}[0];
					// ER 05.10.2015 : correction pour passage en PHP 5.4
					//session_register("aligxilo");
					$_SESSION['aligxilo']=$aligxilo;
					$_SESSION['memorkurso']=$memorkurso;
					header("Location:".$_POST["010_adreso"]."?erarkodo=13&noto=$noto&eraroj=".addslashes(urlencode(serialize($eraroj_en_qcm))));
					exit(0);
				}
			}
			$persono_id = kreiPersonon($enirnomo,$pasvorto,$retadreso,"FR");
			$_SESSION["persono_id"]=$persono_id; // on connecte automatiquement la personne qui vient de créer son compte
			//phpbb_create_user($persono_id,$enirnomo,$pasvorto,$retadreso,$lingvo,$urbo);
			malfermidatumbazon();
			$filename = "../mails/aligxi".$kurso."FR.html";
			// si le fichier n'existe pas, mets le nom du fichier sans le cours
			if (!file_exists($filename)) { $filename = "../mails/aligxiFR.html"; }
			$fd = fopen($filename, "r");
			$contents = fread($fd, filesize ($filename));
			fclose($fd);
			$contents=str_replace("##STUDANTO_ID##",$enirnomo,$contents);
			$contents=str_replace("##PASVORTO##",$pasvorto,$contents);		
			// envoyer le mail eleve pour l'inviter a attendre un correcteur.
			if (!mailViaSES($retadreso,"Bienvenue sur I-kurso",$contents)) {
				protokolo($persono_id,"ERARO","mesagxo ne sendita por : ".$enirnomo." cxe : ".$retadreso);
				$protokolo = new protokolo;
				$protokolo->set_persono_id($nova_persono_id);
				$protokolo->set_kategorio("ERARO");
				$protokolo->set_teksto("mesagxo ne sendita por : ".$enirnomo." cxe : ".$retadreso);
				$protokolo->store();
			} 
			// envoi mail aux informateurs
			PorInformistoj();
		}
	}
	modifiPersonon($persono_id,$sekso,$familinomo,$personnomo,$adreso1,$adreso2,$posxtkodo,$urbo,$lando,$naskigxdato_tago,$naskigxdato_monato,$naskigxdato_jaro,addslashes($kialo),"0",$kurso,"U",$stopInfo);
}
// regarder si l'eleve a deja un correcteur pour ce cours
// sauf pour le ikurso (c'est inutile)
if ($kurso!="KE") {
	$query="select * from nuna_kurso where studanto=$persono_id and (stato='K' or stato='N') and kurso='$kurso'";
	
	$result = $bdd->query($query);
	$row = $result->fetch();
	if (isset($row["korektanto"])) {
		$korektanto_id = $row["korektanto"];
		$query2="select retadreso from personoj where id=".$korektanto_id;
		$result2 = $bdd->query($query2);
		$row2 = $result2->fetch();
		$korektantaretadreso=$row2["retadreso"];
		($kurso=="GR")?($objekto="gerda ".substr($subjekto,0,6)):($objekto=substr($subjekto,0,5));
		$objekto.=" de ".$persono['enirnomo'];
		mailViaSmtp($korektantaretadreso,$persono["retadreso"],$objekto,stripslashes($fonto));
		$query = "update nuna_kurso set nunleciono=".$nunleciono.",stato='K',lastdato=CURDATE() where studanto=".$persono_id." and (stato='N' or stato='K') and kurso='$kurso'";
		$result=$bdd->exec($query);
		
		$kazo=1; // A déjà un correcteur
		protokolo($persono_id,"TASKO SENDITA","$objekto");
	} else {
		// TODO : voir par où passe un élève qui n'a pas de correcteur.... 
		// l'eleve n'a pas encore de correcteur
		// stocker la lecon dans eraraj_lecionoj
		// et mettre a jour l'etat dans personoj pour mettre l'eleve en attente de correcteur	
		$kazo=2; // n'a pas encore de correcteur
		($kurso=="GR")?($objekto="gerda ".substr($subjekto,0,6)):($objekto=substr($subjekto,0,5));
		$query2 = "update personoj set rajtoj='P',kurso='$kurso' where id=".$persono_id;
		$result = $bdd->exec($query2);
		($kurso=="GR")?($objekto="gerda ".substr($subjekto,0,6)):($objekto=substr($subjekto,0,5));
		$objekto.=" de ".$persono["enirnomo"];
		protokolo($persono_id,"TASKO SALVITA","$objekto");
	}
	// TODO : pourquoi on fait des "unset" ?
	foreach($_POST as $key => $value) {
		unset($memorkurso[$key]);
	}
	unset ($aligxilo["kialo"]);
}
if ($kurso=="KE"){ 
	header("Location:../atendiKorektanton");
	exit(0);
}
if ($kurso=="GR") {
	header("Location:gerda/konfirmo.php?lec=".$numcxap."&kazo=".$kazo);
} else {
	header("Location:cge/konfirmo.php?lec=".$numcxap."&kazo=".$kazo);
}
?>
