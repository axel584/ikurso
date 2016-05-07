<?
//error_reporting(1);
$vojo="../";
$lingvo=$_SESSION["lingvo"];
if ($lingvo=="") {$lingvo="FR";}
include $vojo."util.php";
include_once ($vojo."fr.inc.php");
include_once ($vojo."db.inc.php");
include_once ($vojo."webui.inc.php");
//ER 05.10.2015 : correction pour passage en PHP 5.4
//session_register("memorkurso");
$_SESSION['memorkurso']=$memorkurso;
// tiu funkcio kontrolas, cxu adreso validas kaj ekzistas
function checkEmail($email)
{
	if(eregi("^[a-zA-Z0-9_]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$]", $email)) {return FALSE;}
			list($Username, $Domain) = split("@",$email);
		if(getmxrr($Domain, $MXHost)) {return TRUE;}
		else {
			if(fsockopen($Domain, 25, $errno, $errstr, 30)) {return TRUE;}
				else {return FALSE;}
		}
}
$persono_id=$_SESSION["persono_id"];
if ($persono_id!="") {
	$persono = apartigiPersonon($persono_id);
	$enirnomo = $persono["enirnomo"];
}

function PorInformistoj() {
	global $persono_id, $lingvo, $verdakrabo, $enirnomo, $naskigxdato_tago, $naskigxdato_monato, $naskigxdato_jaro, $sekso, $personnomo, 
	$retadreso, $familinomo, $adreso1, $adreso2, $urbo, $lando, $posxtkodo, $kurso, $kialo, $lgv_viaStudanto;
		$demando="select retadreso from personoj where rajtoj='I' and lingvo='$lingvo'";
		mysql_select_db("ikurso");
		$result = mysql_query($demando) or die ("INSERT : Invalid query :".$query);
		$row=mysql_fetch_array($result);
		$informistoj=$row["retadreso"];
		while ($row=mysql_fetch_array($result)) {
		   $informistoj=$informistoj.",".$row["retadreso"];
		}
		if ($retadreso=="richard.emmanuelle@wanadoo.fr") {$informistoj="emmanuelle@esperanto-jeunes.org";}
		if ($retadreso=="emmrichard@gmail.com") {$informistoj="emmanuelle@esperanto-jeunes.org";}
		if ($verdakrabo=="on"){
			$filename = "../mails/verdakrabo".$lingvo.".html";
			/* ajout dans le fichier des inscriptions VerdaKrabo
			$fic_VK="../doc/AInscrireVerdaKrabo.txt";
			$ficVK = fopen($fic_VK, "a+");
			fwrite($ficVK,$personnomo." ".$familinommo." ".$retadreso."\n");
			fclose($ficVK);
			 */
		} else { 
			$filename = "../mails/novalernanto".$lingvo.".html";
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
		$mesagxkapo="MIME-Version: 1.0\n";
		$mesagxkapo.="Content-type:text/html;charset=utf-8\n";			
		$mesagxkapo.="From: ikurso <ikurso@esperanto-jeunes.org>\n";
		$mesagxkapo.="Return-Path: <ikurso@esperanto-jeunes.org>\n";
		$mesagxkapo.="Date: ".date("D, j M Y H:i:s").chr(13);
		// envoyer le mail eleve pour l'inviter a attendre un correcteur.
		if ($verdakrabo=="on"){$objekto="Un de plus chez le Crabe Vert";}
		else {$objekto=$lgv_viaStudanto;}
		mail($informistoj,$objekto,$contents,$mesagxkapo);
		protokolo($persono_id,"VERDA KRABO","$retadreso : $verdakrabo");
}

$subjekto=$_POST["010_subjekto"];
$adreso=$_POST["010_adreso"];
$titolo=$_POST["010_titolo"];
$kurso=$_POST["kurso"];
$numcxap=$_POST["numcxap"];
$nunleciono=$_POST["nunleciono"];
$jamaligxi=$_POST["jamaligxi"];
$ktrl_enirnomo=$_POST["ktrl_enirnomo"];
$ktrl_pasvorto=$_POST["ktrl_pasvorto"];
$nova_enirnomo=$_POST["nova_enirnomo"];
$nova_pasvorto=$_POST["nova_pasvorto"];
$pasvorto2=$_POST["pasvorto2"];
$retadreso=$_POST["retadreso"];
$adreso1=addslashes($_POST["adreso1"]);
$adreso2=addslashes($_POST["adreso2"]);
$familinomo=addslashes($_POST["familinomo"]);
$personnomo=$_POST["personnomo"];
$sekso=$_POST["sekso"];
$posxtkodo=$_POST["posxtkodo"];
$urbo=addslashes($_POST["urbo"]);
$lando=$_POST["lando"];
$naskigxdato_tago=$_POST["naskigxdato_tago"];
$naskigxdato_monato=$_POST["naskigxdato_monato"];
$naskigxdato_jaro=$_POST["naskigxdato_jaro"];
$kialo=addslashes($_POST["kialo"]);
$verdakrabo=$_POST["verdakrabo"];
// Emmanuelle (30.10.2006) : ajout information pour ceux qui ne veulent pas divulguer leurs donnees personnelles
$stopInfo=$_POST["stopInfo"];

//echo "ktrl_enirnomo=".$ktrl_enirnomo." pasvorto=".$ktrl_pasvorto."<br>";

$lec01=array(13,'2','2','3','2','3','4','1','4','4','1','2','3','2');
$lec02=array(9,'3','3','1','3','2','3','2','1','3');
if (isset(${substr($subjekto,0,5)})){$bonaj=0;}
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
			$i=${substr($subjekto,0,5)}[(integer)(substr($key,4,2))];
			$j=$_POST["900_".substr($key, 4, 2)];
			$fonto.=" <span style=\"color:blue\">".$tabrep[$j-1]."</span>";
			if ($i==$j){
      		$bonaj++;
      	}
      	else{
      		$fonto.="<br>Non. La bonne r&eacute;ponse est : ".$tabrep[$i-1]."";
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
		$filename = "../mails/aligxi".$kurso.$lingvo.".html";
		// si le fichier n'existe pas, met le nom du fichier sans le cours
		if (!file_exists($filename)) { $filename = "../mails/aligxi".$lingvo.".html"; }
		$fd = fopen($filename, "r");
		$contents = fread($fd, filesize ($filename));
		fclose($fd);
		$contents=str_replace("##STUDANTO_ID##",$enirnomo,$contents);
		$contents=str_replace("##PASVORTO##",$pasvorto,$contents);		
		$mesagxkapo="MIME-Version: 1.0\n";
		$fonto=konvX($fonto);
		$mesagxkapo.="Content-type:text/html;charset=utf-8\n";			
		$mesagxkapo.="From: ikurso <ikurso@esperanto-jeunes.org>\n";
		$mesagxkapo.="Return-Path: <ikurso@esperanto-jeunes.org>\n";
		$mesagxkapo.="Date: ".date("D, j M Y H:i:s").chr(13);
		// envoyer mail eleve pour l'inciter a attendre un correcteur
		if (!mail($persono["retadreso"],$lgv_bonvenon_gerda,$contents,$mesagxkapo)) {
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
   $aligxilo["enirnomo"]=$ktrl_enirnomo;
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
		header("Location:".$_POST["010_adreso"]."?erarkodo=3");
		exit(0);
	} elseif (($retadreso=="") || ($enirnomo=="") || ($pasvorto=="")) {
		// ER 05.10.2015 : correction pour passage en PHP 5.4
		//session_register("aligxilo");
		$_SESSION['aligxilo']=$aligxilo;
		header("Location:".$_POST["010_adreso"]."?erarkodo=2");
		exit(0);
	} elseif ((checkEmail($retadreso))==FALSE) {
		// ER 05.10.2015 : correction pour passage en PHP 5.4
		//session_register("aligxilo");
		$_SESSION['aligxilo']=$aligxilo;
		header("Location:".$_POST["010_adreso"]."?erarkodo=6");
		exit(0);
	}
	else {
		$query="select * from personoj where enirnomo='$enirnomo'";
		mysql_select_db("ikurso");
		$result = mysql_query($query) or die ("INSERT : Invalid query :".$query);
		if (mysql_num_rows($result) =="1") {
			$row=mysql_fetch_array($result);
			$persono_id=$row["id"];
			if (($row["pasvorto"]!=$pasvorto)||($row["retadreso"]!=$retadreso)){
				// ER 05.10.2015 : correction pour passage en PHP 5.4
				//session_register("aligxilo");
				$_SESSION['aligxilo']=$aligxilo;
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
					header("Location:".$_POST["010_adreso"]."?erarkodo=13&noto=$noto");
					exit(0);
				}
			}
			$_SESSION["persono_id"]=$persono_id;
			$persono_id = kreiPersonon($enirnomo,$pasvorto,$retadreso,"FR");
			phpbb_create_user($persono_id,$enirnomo,$pasvorto,$retadreso,$lingvo,$urbo);
			malfermidatumbazon();
			$filename = "../mails/aligxi".$kurso.$lingvo.".html";
			// si le fichier n'existe pas, mets le nom du fichier sans le cours
			if (!file_exists($filename)) { $filename = "../mails/aligxi".$lingvo.".html"; }
			$fd = fopen($filename, "r");
			$contents = fread($fd, filesize ($filename));
			fclose($fd);
			$contents=str_replace("##STUDANTO_ID##",$enirnomo,$contents);
			$contents=str_replace("##PASVORTO##",$pasvorto,$contents);		
			$mesagxkapo="MIME-Version: 1.0\n";
			$fonto=konvX($fonto);
			$mesagxkapo.="Content-type:text/html;charset=utf-8\n";			
			$mesagxkapo.="From: ikurso <ikurso@esperanto-jeunes.org>\n";
			$mesagxkapo.="Return-Path: <ikurso@esperanto-jeunes.org>\n";
			$mesagxkapo.="Date: ".date("D, j M Y H:i:s").chr(13);
			// envoyer le mail eleve pour l'inviter a attendre un correcteur.
			if (!mail($retadreso,$lgv_bonvenon,$contents,$mesagxkapo)) {
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
	mysql_select_db("ikurso");
	$result = mysql_query($query) or die ("SELECT : Invalid query :".$query);
	if (mysql_num_rows($result) =="1") {
		$row=mysql_fetch_array($result);
		$korektanto_id = $row["korektanto"];
		$query2="select retadreso, sistemo from personoj where id=".$korektanto_id;
		mysql_select_db("ikurso");
		$result2 = mysql_query($query2) or die ("SELECT :".mysql_error().": in query :".$query2);
		$row2 = mysql_fetch_array($result2);
		$korektantaretadreso=$row2["retadreso"];
		$korektantsistemo=$row2["sistemo"];
		$mesagxkapo="MIME-Version: 1.0\n";
			// si l'eleve ou le correcteur utilise le système "X", on convertit les accents
			if (($korektantsistemo=="X") || ($persono["sistemo"]=="X")){
				$metodo="X";
				$fonto=konvX($fonto);
			}
		$mesagxkapo.="Content-type: text/html;charset=utf-8\n";
		$mesagxkapo.="From: ikurso <ikurso@esperanto-jeunes.org>\n";
		$mesagxkapo.="Return-Path: <ikurso@esperanto-jeunes.org>\n";
		$mesagxkapo.="Reply-To: ".$persono['enirnomo']." <".$persono['retadreso'].">\n";
		$mesagxkapo.="Cc: ".$persono['enirnomo']." <".$persono['retadreso'].">\n";
		$mesagxkapo.="Bcc: <kopiokurso@esperanto-jeunes.org>\n";
		$mesagxkapo.="Date: ".date("D, j M Y H:i:s").chr(13);
		($kurso=="GR")?($objekto="gerda ".substr($subjekto,0,6)):($objekto=substr($subjekto,0,5));
		$objekto.=" de ".$persono['enirnomo'];
		//echo "mesagxkapo=".$mesagxkapo." objekto=".$objekto."<br>";
		//echo "adresse correcteur=".$korektantaretadreso."<br>";
		/*
		if (!mail($korektantaretadreso,$objekto,stripslashes($fonto),$mesagxkapo)) {
			// mettre a jour les donnees dans nuna_kurso (numero et date de la derniere lecon)
			$query = "update nuna_kurso set nunleciono=".$nunleciono.",stato='K',lastdato=CURDATE() where studanto=".$persono_id." and (stato='N' or stato='K') and kurso='$kurso'";
			$result = mysql_query($query) or die ( "UPDATE : Invalid query :".$query);
			$kazo=1;
			protokolo($persono_id,"TASKO SENDITA","$objekto");
		}
		else
		{
			// sauvegarder les donnees du message pour un envoi ulterieur
			$query = "insert into eraraj_mesagxoj(persono_id,enirnomo,dato,kapo,objekto,fonto) values (".$persono_id.",'".$persono["enirnomo"]."',now(),'".$mesagxkapo."','".$objekto."','".addslashes($fonto)."')";
			$result = mysql_query($query) or die ("INSERT : Invalid query :".$query);
			$kazo=3;
			protokolo($persono_id,"ERARO","mesagxo ne sendita por : ".$enirnomo." cxe : ".$persono["retadreso"]);
 		}
 		*/
		mail($korektantaretadreso,$objekto,stripslashes($fonto),$mesagxkapo);
		$query = "update nuna_kurso set nunleciono=".$nunleciono.",stato='K',lastdato=CURDATE() where studanto=".$persono_id." and (stato='N' or stato='K') and kurso='$kurso'";
		$result = mysql_query($query) or die ( "UPDATE : Invalid query :".$query);
		$kazo=1;
		protokolo($persono_id,"TASKO SENDITA","$objekto");
	}
	else {
		// l'eleve n'a pas encore de correcteur
		// stocker la lecon dans eraraj_lecionoj
		// et mettre a jour l'etat dans personoj pour mettre l'eleve en attente de correcteur	
		($kurso=="GR")?($objekto="gerda ".substr($subjekto,0,6)):($objekto=substr($subjekto,0,5));
		$query = "insert into eraraj_lecionoj(persono_id,enirnomo,dato,subjekto,fonto) values (".$persono_id.",'".$persono["enirnomo"]."',now(),'".$objekto."','".addslashes($fonto)."')";
		mysql_select_db("ikurso");
		$result = mysql_query($query) or die ("INSERT : Invalid query :".$query);
		$query2 = "update personoj set rajtoj='P',kurso='$kurso' where id=".$persono_id;
		$result = mysql_query($query2) or die ( "UPDATE : Invalid query :".$query);
		$kazo=2;
		($kurso=="GR")?($objekto="gerda ".substr($subjekto,0,6)):($objekto=substr($subjekto,0,5));
		$objekto.=" de ".$persono["enirnomo"];
		protokolo($persono_id,"TASKO SALVITA","$objekto");
	}
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