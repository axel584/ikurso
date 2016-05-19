<?
include "util.php";
include_once ("db.inc.php");
include_once ("lingvo.inc.php");
include_once ("forum/includes/forum.lib.php");
include_once("db/protokolo.inc.php");
function checkEmail($email)
{
     if(eregi("^[a-zA-Z0-9_]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$]", $email)) {return FALSE;}
     list($Username, $Domain) = split("@",$email);
     if(getmxrr($Domain, $MXHost)) {return TRUE;}
     else {
        if(fsockopen($Domain, 25, $errno, $errstr, 30)) {return TRUE;}
        else {return FALSE;}
     }
     return (TRUE);
}
malfermidatumbazon();
$enirnomo=$aligxilo["enirnomo"]=$_POST["nova_enirnomo"];
$pasvorto=$aligxilo["pasvorto"]=$_POST["nova_pasvorto"];
$retadreso=$aligxilo["retadreso"]=$_POST["nova_retadreso"];
// par defaut, l'utilisateur est inscrit avec le systeme d'envoi de message en Unicode
// ce n'est qu'en modifiant ses donnees personnelles par la suite qu'il pourra changer
$sistemo="U";
$adreso1=$aligxilo["adreso1"]=addslashes($_POST["adreso1"]);
$adreso2=$aligxilo["adreso2"]=addslashes($_POST["adreso2"]);
$familinomo=$aligxilo["familinomo"]=addslashes($_POST["familinomo"]);
$personnomo=$aligxilo["personnomo"]=addslashes($_POST["personnomo"]);
$sekso=$aligxilo["sekso"]=$_POST["sekso"];
$posxtkodo=$aligxilo["posxtkodo"]=$_POST["posxtkodo"];
$urbo=$aligxilo["urbo"]=addslashes($_POST["urbo"]);
$lando=$aligxilo["lando"]=$_POST["lando"];
$naskigxdato_tago=$aligxilo["naskigxdato_tago"]=$_POST["naskigxdato_tago"];
$naskigxdato_monato=$aligxilo["naskigxdato_monato"]=$_POST["naskigxdato_monato"];
$naskigxdato_jaro=$aligxilo["naskigxdato_jaro"]=$_POST["naskigxdato_jaro"];
$kurso=$aligxilo["kurso"]=$_POST["kurso"];
$kialo=$aligxilo["kialo"]=addslashes($_POST["kialo"]);
$verdakrabo=$aligxilo["verdakrabo"]=$_POST["verdakrabo"];
$stopInfo=$aligxilo["stopInfo"]=$_POST["stopInfo"];
if ($stopInfo=='on') {$stopInfo='J';} else {$stopInfo='N';}
$retadreso=$aligxilo["retadreso"]=$_POST["retadreso"];
$pasvorto2=$aligxilo["pasvorto2"]=$_POST["pasvorto2"];
if ($pasvorto!=$pasvorto2) {
	// ER 05.10.2015 : correction pour passage en PHP 5.4
	//session_register("aligxilo");
	$_SESSION['aligxilo'] = $aligxilo;
	header("Location:aligxi.php?erarkodo=3");
} elseif (($retadreso=="") || ($enirnomo=="") || ($pasvorto=="")) {
	// ER 05.10.2015 : correction pour passage en PHP 5.4
	//session_register("aligxilo");
	$_SESSION['aligxilo'] = $aligxilo;
	header("Location:aligxi.php?erarkodo=2");
} elseif ((checkEmail($retadreso))==FALSE) {
	// ER 05.10.2015 : correction pour passage en PHP 5.4
	//session_register("aligxilo");
	$_SESSION['aligxilo'] = $aligxilo;
	header("Location:aligxi.php?erarkodo=6");
	exit(0);
}
	else {
	$query .="select * from personoj where enirnomo='$enirnomo'";
	mysql_select_db("ikurso");
	$result = mysql_query($query) or die ("INSERT : Invalid query :".$query);
	if (mysql_num_rows($result) =="1") {
		$row=mysql_fetch_array($result);
		if ($retadreso==$row["retadreso"]) { // une inscription existe deja avec le meme identifiant et le meme email
			// alors on se connecte avec l'identifiant et le mot de passe envoye
			header("Location:eniri.php?enirnomo=".$enirnomo."&pasvorto=".$pasvorto);
		} else {
			// session_register("aligxilo");
			header("Location:aligxi.php?erarkodo=7");
		}
	} else {
		$filename = "mails/aligxi".$kurso.$lingvo.".html";
		// si le fichier n'existe pas, mets le nom du fichier sans le cours
		if (!file_exists($filename)) { $filename = "mails/aligxi".$lingvo.".html"; }
			$fd = fopen($filename, "r");
			$contents = fread($fd, filesize ($filename));
			fclose($fd);
			// forigu ##MENUO## en la ret-mesagxo (gxi aperos sur la ret-pagxo)
			$contents=str_replace("##MENUO##","",$contents);
			$contents=str_replace("##STUDANTO_ID##",$enirnomo,$contents);
			$contents=str_replace("##PASVORTO##",$pasvorto,$contents);		
			$mesagxkapo="MIME-Version: 1.0\n";
			$mesagxkapo.="Content-type: text/html; charset=utf-8\n";
			$mesagxkapo.="From: Ikurso <ikurso@esperanto-jeunes.org>\n";
			$mesagxkapo.="Date: ".date("D, j M Y H:i:s")."\n";
			$mesagxkapo.=" \n";
			// creer l'eleve :
			$nova_persono_id = kreiPersonon($enirnomo,$pasvorto,$retadreso,$lingvo);
			// envoyer le mail eleve pour l'inviter a attendre un correcteur.
			if (!mail($retadreso,"Bienvenue sur I-kurso",$contents,$mesagxkapo)) {
				$protokolo = new protokolo;
				$protokolo->set_persono_id($nova_persono_id);
				$protokolo->set_kategorio("ERARO");
				$protokolo->set_teksto("mesagxo ne sendita por : ".$enirnomo." cxe : ".$retadreso);
				$protokolo->store();
			} 
			$_SESSION["persono_id"]=$persono_id;
			
			$demando="select retadreso from personoj where rajtoj='I' and lingvo='$lingvo'";
			$result = mysql_query($demando) or die ("INSERT : Invalid query :".$query);
			$row=mysql_fetch_array($result);
			$informistoj=$row["retadreso"];
			while ($row=mysql_fetch_array($result)) {
				$informistoj=$informistoj.",".$row["retadreso"];
			}
			if ($retadreso=="richard.emmanuelle@wanadoo.fr") {$informistoj="richard.emmanuelle@wanadoo.fr";}
			if ($verdakrabo=="on"){$filename = "mails/verdakrabo".$lingvo.".html";}
			else {$filename = "mails/novalernanto".$lingvo.".html";}
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
			if ($kurso=="CG"){$contents=str_replace("##KURSO##","Cours en dix le&ccedil;ons",$contents);}
			if ($kurso=="KE"){$contents=str_replace("##KURSO##","I-kurso",$contents);}
			if ($kurso=="GR"){$contents=str_replace("##KURSO##","Gerda malaperis",$contents);}
			$contents=str_replace("##KOMENTO##",stripslashes($kialo),$contents);
			$mesagxkapo="MIME-Version: 1.0\n";
			$mesagxkapo.="Content-type: text/html; charset=utf-8\n";
			$mesagxkapo.="From: Ikurso <ikurso@esperanto-jeunes.org>\n";
			$mesagxkapo.="Date: ".date("D, j M Y H:i:s").chr(13);
			$mesagxkapo.=" \n";
			// envoyer le mail aux informateurs
			if ($verdakrabo=="on"){
				$subjekto="Un de plus chez le Crabe Vert";
			}
			else {$subjekto="Nouvel élève sur I-kurso";}
			//$teksto=iconv('iso-8859-1', 'utf-8', $contents);
			$teksto=$contents;
			mail($informistoj,$subjekto,$teksto,$mesagxkapo);
			
			protokolo($nova_persono_id,"VERDA KRABO","$retadreso : $verdakrabo");
			//setcookie("persono_id",$nova_persono_id);
			//modifiPersonon($nova_persono_id,$sekso,$familinomo,$personnomo,$adreso1,$adreso2,$posxtkodo,$urbo,$lando,$naskigxdato_tago,$naskigxdato_monato,$naskigxdato_jaro,addslashes($kialo),"0",$kurso,$sistemo);
			modifiPersonon($nova_persono_id,$sekso,$familinomo,$personnomo,$adreso1,$adreso2,$posxtkodo,$urbo,$lando,$naskigxdato_tago,$naskigxdato_monato,$naskigxdato_jaro,addslashes($kialo),"0",$kurso,"U",$stopInfo);
			phpbb_create_user($nova_persono_id,$enirnomo,$pasvorto,$retadreso,$lingvo,$urbo);
			$_SESSION["persono_id"]=$nova_persono_id;
			header("Location:atendiKorektanton.php");
	}
}
function kreiForumPersonon($enirnomo,$pasvorto,$retadreso,$lingvo) {
}
?>               
