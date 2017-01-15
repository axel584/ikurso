<?php
session_start();
ini_set('session.gc_maxlifetime', 86400);
ini_set('session.cookie_lifetime', 86400);
include_once("db.inc.php");
include_once("webui.inc.php");
include 'Mail.php';
include('Mail/mime.php');
//include_once("forum/includes/forum.lib.php");
// on récupère l'adresse de la page appelée (et on retire les paramètres au besoin)
// attention, c'est aussi appelé dans "pagxkapo.inc.php"
$url=isset($_SERVER['REQUEST_URI'])?strtok($_SERVER['REQUEST_URI'],'?'):"";

// tiu funkcio kontrolas, cxu adreso validas kaj ekzistas
function checkEmail($email)
{
	if ($email=="") {
		return FALSE;
	}
     if (!preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $email)) {return FALSE;}
     list($Username, $Domain) = explode("@",$email);
     if(getmxrr($Domain, $MXHost)) {return TRUE;}
     else {
        if(fsockopen($Domain, 25, $errno, $errstr, 30)) {return TRUE;}
        else {return FALSE;}
     }
     return (TRUE);
}


function konvU($buff) {
	$utf8 = array(
			"&#264;" => "\u0108",	"&#284;" => "\u011c",	"&#292;" => "\u0124",
			"&#308;" => "\u0134",	"&#348;" => "\u015c",	"&#364;" => "\u016c",
			"&#265;" => "\u0109",	"&#285;" => "\u011d",	"&#293;" => "\u0125",
			"&#309;" => "\u0135",	"&#349;" => "\u015d",	"&#365;" => "\u016d"
		);
	foreach($utf8 as $key => $val) {
		$buff=str_replace($key,$val,$buff);
	}
	return($buff);
}

function konvX($buff) {
	$utf8 = array(
			"Ĉ" => "Cx",	"Ĝ" => "Gx",	"Ĥ" => "Hx",
			"Ĵ" => "Jx",	"Ŝ" => "Sx",	"Ŭ" => "Ux",
			"ĉ" => "cx",	"ĝ" => "gx",	"ĥ" => "hx",
			"ĵ" => "jx",	"ŝ" => "sx",	"ŭ" => "ux"
		);
	foreach($utf8 as $key => $val) {
		$buff=mb_ereg_replace($key,$val,$buff);
	}
	return($buff);
}

/*
 * conversion en utf8 (si page en utf8)
*/
function al_utf8($var) {
	global $defaultCharset;
	if ($defaultCharset=="utf-8") $var = utf8_encode($var);
	return $var;
}
function el_utf8($var) {
	global $defaultCharset;
	if ($defaultCharset=="utf-8") $var = utf8_decode($var);
	return $var;
}


function kalkuliStudantojn() {
	global $persono_id,$bdd;
	$demando1="select nomo,kodo from kursoj";
	$result1 = $bdd->query($demando1) or die(print_r($bdd->errorInfo()));
	while($row1 = $result1->fetch()) {
		echo "<tr>\n";
		echo "\t<td class='col1'>".$row1["nomo"]."</td>\n";
		$demando2="select count(*) as kiom from nuna_kurso,personoj where nuna_kurso.korektanto='".$persono_id."' and nuna_kurso.kurso='".$row1["kodo"]."' and personoj.id=nuna_kurso.studanto and (nuna_kurso.stato='K' or nuna_kurso.stato='N')";
		$result2 = $bdd->query($demando2) or die(print_r($bdd->errorInfo()));
		$row2 = $result2->fetch();
		echo "\t<td>".$row2['kiom']."</td>\n";
		$demando3="select * from korektebla_kurso where korektanto='".$persono_id."' and kurso='".$row1['kodo']."'";
		$result3 = $bdd->query($demando3) or die(print_r($bdd->errorInfo()));
		$row3 = $result3->fetch();
		// si on n'a pas de lignes dans korektabla_kurso, on va en creer une
		if (!$row3){
			$demando3="INSERT INTO korektebla_kurso (korektanto,kurso,kiom_lernantoj) VALUES ('$persono_id','".$row1["kodo"]."',0)";
			$bdd->exec($demando3) or die(print_r($bdd->errorInfo()));
		}
		echo "\t<td>";
		if ($row2['kiom'] > $row3["kiom_lernantoj"]) {
			echo "<span style=\"color:red\">".$row3["kiom_lernantoj"]."</span>";
		}else {echo $row3["kiom_lernantoj"];}
		echo "</td>\n";
		echo "\t</tr>\n";
	}
}
malfermiDatumbazon();
$persono_id = isset($_SESSION["persono_id"]) ? $_SESSION["persono_id"] : "";
if ($persono_id=="") {
	$rajto="V";		// vizitanto
	$enirnomo="";
}
else {
	$persono  = apartigiPersonon($persono_id);
	$rajto=$persono["rajtoj"];
	$enirnomo=$persono["enirnomo"];
}

function mailViaSmtp($retadreso,$from,$objekto,$contentsHtml) {
	global $hostSmtp,$portSmtp;
	$headers = array (
	  'Content-Type' => "text/html; charset=UTF-8",
	  'html_charset'  => 'UTF-8',
  	  'head_charset'  => 'UTF-8',
	  'From' => "ikurso@esperanto-france.org",
	  'Reply-to' => $from,
	  'To' => $retadreso,
	  'Subject' => mb_encode_mimeheader($objekto,"UTF-8"));


		$smtpParams = array (
	  'host' => $hostSmtp,
	  'port' => $portSmtp,
	  'auth' => false
	);

	 // Create an SMTP client.
	$mail = Mail::factory('smtp', $smtpParams);

	// Send the email.

		$mime = new Mail_mime("\n");

        // Setting the body of the email
        $mime->setHTMLBody($contentsHtml);
        $headers = $mime->headers($headers);

	$result = $mail->send($retadreso, $headers, $mime->get());
	return $result;
}

?>
