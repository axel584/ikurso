<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once __DIR__ . '/api/SessionAuth.php';
SessionAuth::configure();
session_start();    

include_once("db.inc.php");
include_once("webui.inc.php");
require('vendor/autoload.php');



// on récupère l'adresse de la page appelée (et on retire les paramètres au besoin)
// attention, c'est aussi appelé dans "pagxkapo.inc.php"
$url=isset($_SERVER['REQUEST_URI'])?strtok($_SERVER['REQUEST_URI'],'?'):"";

// renvoie $pagxo si c'est une page locale simple (ex: "administri.php?celpersono_id=5"), sinon $defaut
function pagxoLokalaSekura($pagxo,$defaut) {
	return preg_match('/^[A-Za-z0-9_\-]+\.php(\?[A-Za-z0-9_=&%.\-]*)?$/',(string)$pagxo) ? $pagxo : $defaut;
}

// tiu funkcio kontrolas, cxu adreso validas kaj ekzistas
function checkEmail($email)
{
	if ($email=="") {
		return FALSE;
	}
     if (!preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{1,}\.[a-z]{2,5}$#", $email)) {return FALSE;}
     list($Username, $Domain) = explode("@",$email);
     if(getmxrr($Domain, $MXHost)) {return TRUE;}
     else {
        if(fsockopen($Domain, 25, $errno, $errstr, 30)) {return TRUE;}
        else {return FALSE;}
     }
     return (TRUE);
}

function startsWith ($string, $startString) 
{ 
    $len = strlen($startString); 
    return (substr($string, 0, $len) === $startString); 
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

// \xc2\xa0

function konvX($buff) {
	$utf8 = array(
			"Ĉ" => "Cx",	"Ĝ" => "Gx",	"Ĥ" => "Hx",
			"Ĵ" => "Jx",	"Ŝ" => "Sx",	"Ŭ" => "Ux",
			"ĉ" => "cx",	"ĝ" => "gx",	"ĥ" => "hx",
			"ĵ" => "jx",	"ŝ" => "sx",	"ŭ" => "ux",
			"\xcc\x82" => "x" , "\xcc\x86" => "x"
		);
	foreach($utf8 as $key => $val) {
		$buff=mb_ereg_replace($key,$val,$buff);
	}
	return($buff);
}

function normaligita($respondo) {
	// la réponse peut arriver échappée par htmlspecialchars() : depuis PHP 8.1, l'apostrophe devient &#039; (#1084)
	$respondo = html_entity_decode((string)$respondo, ENT_QUOTES | ENT_HTML5, "UTF-8");
	$normaligita = strtolower(konvX($respondo));
	$trans = array("." => "", "," => "", "'" => "","!" => "","?" => "",":" => "",";" => "","-"=>"",json_decode('"\u2008"')=>' '); // liste des caractères à supprimer pour la comparaison
	// l'utilisation de json_decode('"\u2008"') est pratique pour convertir des caractères esotérique depuis l'unicode (2008 est un espace de ponctuation...)
	// variantes typographiques (tirets de dialogue, apostrophe courbe, guillemets, espaces insécables des claviers Mac)
	$trans += array("–" => "", "—" => "", "’" => "", "…" => "", "«" => "", "»" => "", "“" => "", "”" => "", "\u{00A0}" => " ", "\u{202F}" => " ");
	// parenthèses : « Tom estas (eble) la plej… » vaut « Tom estas eble la plej… » (#708)
	$trans += array("(" => "", ")" => "");
	$normaligita = trim(strtr($normaligita, $trans));
	$normaligita = preg_replace("/\s+/", " ", $normaligita); // replace un nombre d'espace supérieur à 1 par un espace simple
	return $normaligita;
}

function kontroliRespondon($lernantaRespondo,$bonaRespondo) {
	if (strpos($bonaRespondo,"|")!==false) {
		return kontroliRespondon($lernantaRespondo,substr($bonaRespondo, 0,strpos($bonaRespondo, "|"))) || kontroliRespondon($lernantaRespondo,substr($bonaRespondo, strpos($bonaRespondo, "|")+1));
	} else {
		$normaligita_lernantaRespondo=normaligita($lernantaRespondo);
		$normaligita_bonaRespondo=normaligita($bonaRespondo);
		if ($normaligita_lernantaRespondo=="" || $normaligita_bonaRespondo=="") {
			return false;
		}
		// on compare sans les espaces : ponctuation collée au mot suivant (« biskvitoj.Kiuj »), nombres en un
		// ou plusieurs mots (dekses / dek ses), « D-ro » (#708)
		return str_replace(" ", "", $normaligita_lernantaRespondo)==str_replace(" ", "", $normaligita_bonaRespondo);
	}
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
		$kiom_lernantoj = $row3 ? $row3["kiom_lernantoj"] : 0; // ligne créée juste au-dessus avec 0
		echo "\t<td>";
		if ($row2['kiom'] > $kiom_lernantoj) {
			echo "<span style=\"color:red\">".$kiom_lernantoj."</span>";
		}else {echo $kiom_lernantoj;}
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

// $malaboniLigilo : lien de désinscription des mails non sollicités (#920), ajouté en en-tête
// pour que la messagerie affiche son propre bouton « se désabonner » (RFC 8058)
function mailViaSES($retadreso,$objekto,$contentsHtml,$malaboniLigilo="") {
    global $hostSmtpSES,$portSmtpSES,$userSES,$passwordSES;
    $mail = new PHPMailer(true);
    $mail->CharSet = 'UTF-8';
    
    try {
        // Toujours utiliser SMTP
        $mail->isSMTP();
        $mail->Host       = $hostSmtpSES;
        $mail->Port       = $portSmtpSES;


		// Détection automatique de l'environnement
		$isMailHog = (strpos($hostSmtpSES, 'localhost') !== false || 
						strpos($hostSmtpSES, 'mailhog') !== false ||
						$portSmtpSES == 1025);
		
		if ($isMailHog) {
			// Configuration MailHog
			$mail->SMTPAuth = false;
			$mail->SMTPSecure = false;
		} else {	
			$mail->SMTPAuth   = true;
			$mail->Username   = $userSES;
			$mail->Password   = $passwordSES;
			$mail->SMTPSecure = 'tls';
		}	
        
        $mail->setFrom("ikurso@esperanto-france.org", "Ikurso");
        
		foreach(explode(",",$retadreso) as $destinataire) {
			$dest = trim($destinataire);
			if ($dest=="") continue;
			if (!checkEmail($dest)) {
				error_log("mailViaSES: adresse destinataire invalide ignorée: $dest");
				continue;
			}
			$mail->addAddress($dest);
		}
        
        $mail->isHTML(true);
        $mail->Subject = $objekto;
        $mail->Body = $contentsHtml;
        if ($malaboniLigilo!="") {
            $mail->addCustomHeader("List-Unsubscribe", "<".$malaboniLigilo.">");
            $mail->addCustomHeader("List-Unsubscribe-Post", "List-Unsubscribe=One-Click");
        }
        
        $mail->send();
        return 1;
        
    } catch (Exception $e) {
        echo "Erreur d'envoi: {$mail->ErrorInfo}", PHP_EOL;
        return 0;
    }
}

function mailViaSmtp($retadreso,$from,$objekto,$contentsHtml) {
	global $hostSmtp,$portSmtp;
	global $hostSmtpSES,$portSmtpSES,$userSES,$passwordSES,$useSmtp;
	$mail = new PHPMailer(true);
	$mail->CharSet = 'UTF-8';
	try {
    // Specify the SMTP settings.
    if ($useSmtp) {
		$mail->isSMTP();
	}
    $mail->setFrom($from);
    $mail->Host       = $hostSmtp;
    $mail->Port       = $portSmtp;
    $mail->SMTPAuth   = false;

	// Specify the message recipients.
	foreach(explode(",",$retadreso) as $destinataire) {
		$dest = trim($destinataire);
		if ($dest=="") continue;
		if (!checkEmail($dest)) {
			error_log("mailViaSmtp: adresse destinataire invalide ignorée: $dest");
			continue;
		}
		$mail->addAddress($dest);
	}
    // You can also add CC, BCC, and additional To recipients here.

    // Specify the content of the message.
    $mail->isHTML(true);
    $mail->Subject    = $objekto;
    $mail->Body       = $contentsHtml;
    $mail->Send();
    return 1;
} catch (phpmailerException $e) {
    echo "An error occurred. {$e->errorMessage()}", PHP_EOL; //Catch errors from PHPMailer.
} catch (Exception $e) {
    echo "Email not sent. {$mail->ErrorInfo}", PHP_EOL; //Catch errors from Amazon SES.
}
}

?>
