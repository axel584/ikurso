<?php
// kapo por indiki ke la pagxaro estas laux UTF-8
header ("Content-Type: text/html; charset=utf-8");

// Vikio WikiPlam 
// Informoj pri la koncepto Vikio: http://c2.com/cgi/wiki
// Franclingva origina versio farita de Pierre Lamelin Kopirajto 2002
// plam (220@chez.com - http://forum-scpo.com/wiki | http://p220.free.fr/wiki)
// Libera kopio (vidu franclingve http://artlibre.org/licence/lal.html)
// Dankon al BohwaZ (http://bohwaz.lautre.net) pro ideoj kaj simpatio  
// Necesas PHP kun mysql-datumbazo

// Esperanto traduko kaj adapto de franclingva vikio WikiPlam 
// farita de Zav' - Xavier Godivier Zav(che)esperanto-panorama.net


/* ########################## Konfiguracio de WIKIPLAM #################### */
// Kompletigu kaj sxangxu se necesas:
$host="localhost";	// La MySql-servilo ("localhost" au "sql.free.fr"...)
$user="jefo";	// uzantnomo por konekti al MySql
$pass="polavuk";		// pasvorto por konekti al MySql
$database="ikurso";	// nomo de la datumbazo
$tablewiki="vikio";	// Nomo kiun vi volas donis al la tabelo en la datumbazo

$pagewiki="index.php";	// Nomo de tiu dosiero (ne forgesu shanghi ghin se necesas)
$lienlogo="http://www.esperanto-jeunes.org/bildoj/jefo.gif";	// Adreso de bild-logo supre de la pagho
// Listo de paghoj kiujn vi deziras ke ili estu neshangheblaj: 
$pagesoff = array("VikiListo","AlfabetaListo"); 
// (aldonu komojn inter la paghoj)


/* ######################################################################### */


/* La parametroj $skin["supre"] kaj $skin["malsupre"] estas ankau modifeblaj se  */
/* ili konservas la 4 parametrojn skribitajn majuskle (vidu chi-sube).   */

/* --------------------- Komenco de skin (supre) --------------------- */
/* Noto: "supre" entenas 3 parametrojn: #MEM, #TITOLO et #FRAZO */

$skin["supre"]="<!DOCTYPE html PUBLIC \"-//W3C//DTD HTML 4.01 Transitional//EN\">

<html>
<head><title>JEFO-Vikio: #TITOLO</title>
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">
<style type=\"text/css\"><!--
table       {border: thin solid black;}
td          {padding: 12pt;}
body,td,a   {font-family: arial,sans-serif;}
a           {color: #000088; text-decoration: underline;}
a:hover     {color: red; text-decoration: none;}
//-->
</style></head>

<body bgcolor=\"#FFFFFF\">
     <center>
     <font size=\"+2\"><b>#FRAZO <font color='red'>#TITOLO</font></b></font>
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     <a href=\"#MEM\"><img src=\"$lienlogo\" alt=\"Akceptejo\" title=\"Akceptejo\" border=0 height=\"68\" width=\"86\" align=\"middle\" ></a>
     <table width=\"95%\" bgcolor=\"#EEEEEE\">
     <tr>
      <td>
      <p>";

/* --------------------- Fino de la skin (supre) --------------------- */


/* ---------------------- Komenco de la skin (malsupre) ---------------------- */
/* Noto: "malsupre" entenas 2 parametrojn: #FORM (DEVIGA) kaj #MEM */

$skin["malsupre"]="
    #FORM
    <font size=\"-1\">Revenu al <a href=\"#MEM?VikiHejmo\"><font color=\"red\">VikiHejmo</font></a> |
    <a href=\"#MEM?VikiListo\">VikiListo</a> de la pa&#285;oj |
    <a href=\"#MEM?AlfabetaListo\">AlfabetaListo</a> de la pa&#285;oj |
    TTT-ejo de <a href=\"http://www.esperanto-jeunes.org/\">JEFO/Esperanto-Jeunes</a> |
    <a href=\"http://www.esperanto-panorama.net/\">Esperanto-Panorama</a>.</font>
      </td>
     </tr>
    </table>
    </center>
</body>
</html>";

/* ----------------------- Fino de la skin (malsupre) ----------------------- */


/* ---------------------- Komenco de la funkcioj ---------------------- */

function crea_table() {
global $database,$tablewiki;
$ins="CREATE TABLE $tablewiki (name VARCHAR (255) not null , text TEXT , date VARCHAR (12) , ip VARCHAR (255) , PRIMARY KEY (name))";
$result = mysql_query($ins);
Return $result;
}


function madate($date) {
$date="20".substr($date,0,2)."/".substr($date,2,2)."/".substr($date,4,2)." ".substr($date,6,2).":".substr($date,8,2).":".substr($date,10,2);
return $date;
}


function dans_tablo($elem,$array_t) { 
for ($i=0; $i < count($array_t); $i++) { 
// Malebligas la provojn de redakto per uzo de URL (Modifo de JFT) 
  if (strtolower($array_t[$i]) == strtolower($elem)) { return true; }
    } 
return false; 
}


function getlongip() {
if (getenv(HTTP_X_FORWARDED_FOR))
        { $ipe=getenv(HTTP_X_FORWARDED_FOR); } 
   else { $ipe=getenv(REMOTE_ADDR); } 
return gethostbyaddr($ipe);
}


function mysql_table_exists($table,$db){ 
$tables=mysql_list_tables($db); 
while (list($temp)=mysql_fetch_array($tables)) { 
                if ($temp == $table) { return 1; }
                } 
return 0; 
}


function affichewikiliste($alfabete) {
global $tablewiki;


if ($alfabete == 0){
	$list = "'''Listo de cxiuj pagxoj laux lastaj sxangxoj:'''\n\n";
	$list .= "Vi povas ankaux vidi la liston alfabete en AlfabetaListo.\n\n";
	$ins = "SELECT name, date, ip FROM $tablewiki ORDER BY date DESC";
}
else{
	$list = "'''Listo de cxiuj pagxoj alfabete:'''\n\n";
	$list .= "Vi povas ankaux vidi la liston laux lastaj sxangxoj en VikiListo.\n\n";
	$ins = "SELECT name, date, ip FROM $tablewiki ORDER BY name";
}

$TableRep=mysql_query($ins);
if ($TableRep>0) { 
    while (list($name, $date, $ip) = mysql_fetch_row ($TableRep)) {
        $list .= $name." ..... ".madate($date)." ..... ".$ip."\n";
        }
    $count = mysql_num_rows($TableRep);
    $list .= "\nTuta Vikio: '''".$count." pa&#285;oj'''";
    } else {
    $list = "Erreur de lecture MySql";
    }
echo format_html($list);
}


function affichewiki($name) {
global $editmode,$pagewiki,$tablewiki;
$ins = "SELECT * FROM $tablewiki where (name='$name')";
$TableRep=mysql_query($ins);
if ($TableRep > 0) {
        $text = @mysql_result($TableRep, 0, "text");  // La @ evitas afishadon de eraro se la pagho malplenas
        $text = stripslashes($text);
        } else {
        $text = "Eraro de legado MySql";
        }
if ($text == "") {
        $text = "Redaktu la tekston de $name per alklako al la butono [Redaktu la tekston]";
        }
if ($editmode != "edit") {      // Afishas $text normale por la modoj "normal" kaj "done"
	if ($name == "AlfabetaListo") { // Atentu pri la specifa kazo AlfabetaListo
		affichewikiliste(1);
        } else {	
        	if ($name == "VikiListo") {     // Atentu pri la specifa kazo VikiListo
	        	affichewikiliste(0);
		} else {
        		echo format_html($text);
            	  }
          }
} else {             // Afishas $text en ghia redakto-skatolo por redakti
          echo "
            <form method=\"post\" action=\"".$pagewiki."\">
            <input type=\"hidden\" name=\"editmode\" value=\"done\">
            <input type=\"hidden\" name=\"name\" value=\"".$name."\">
            <textarea rows=18 cols=70 name=\"text\" style=\"width:100%\"
             wrap=virtual>".$text."</textarea><br>
            <input type=\"submit\" value=\"Registru\"><input name=\"r\" type=\"reset\" value=\"Nuligu\">
            </form>
        <a href=\"".$pagewiki."?KielRedakti\">KielRedakti</a> : klarigoj pri kiel redakti";
        }
	
}


function postwiki($name,$text) {
global $pagewiki,$tablewiki;
$date = date("ymdHis");                 // dato por la registrado en MySql
$ddate = date("Y M d - H:i");           // date por la "tag" <d> kiun oni afishas
$text = str_replace("<d>", $ddate, $text);
$ip = getlongip();
$text = htmlspecialchars(addslashes($text));
$ins = "REPLACE INTO $tablewiki (name,text,date,ip) VALUES ('$name','$text','$date','$ip')";
$res = mysql_query($ins);
}


function affichehaut() {                // anstatauas la parametrojn MAJUSKLE
global $name,$skin,$editmode,$pagewiki;
$skin["supre"] = @ereg_replace("#TITOLO", $name, $skin["supre"]);
$skin["supre"] = @ereg_replace("#MEM", $pagewiki, $skin["supre"]);
if ($editmode == "") {
      echo @ereg_replace("#FRAZO", "JEFO-Vikio:", $skin["supre"]);
      } elseif ($editmode == "edit") {
      echo @ereg_replace("#FRAZO", "Redakto de", $skin["supre"]);
      } else {
      echo @ereg_replace("#FRAZO", "Dankon pro via redakto de", $skin["supre"]);
      }
}


function affichebas() {                 // Anstatauas la parametrojn MAJUSKLE
global $name,$skin,$editmode,$pagewiki,$pagesoff;
if ($editmode == "edit") {              // Modo de redakto: nenio por afishi malsupre
      $rempl="
       <p><hr noshade size=1>";
      } else {
      if ((dans_tablo($name,$pagesoff)) == true) {  // Aliaj modoj: por ne modifendaj paghoj
                $rempl="<p><hr noshade size=1>Ne modifebla pa&#285;o<p>\n";
                } else {                          // Aliaj modoj: default-modo.
                $rempl="
       <p><hr noshade size=1>
       <form method=\"post\" action=\"#MEM\">
       <input type=\"submit\" value=\"Redaktu la tekston\">
       <input type=\"hidden\" name=\"name\" value=\"".$name."\">
       <input type=\"hidden\" name=\"editmode\" value=\"edit\">
       </form>"; }
       }
$skin["malsupre"] = @ereg_replace("#FORM",$rempl,$skin["malsupre"]);
echo @ereg_replace("#MEM",$pagewiki,$skin["malsupre"]);
}


function format_html($text) {           // Afishas $text lau Viki-karakterizoj
global $pagewiki;
$text = @ereg_replace("RRR(('?[^\n'])*)RRR", "<font color='red'>\\1</font>", $text);
$text = @ereg_replace("'''(('?[^\n'])*)'''", "<b>\\1</b>", $text);
$text = @ereg_replace("''(('?[^\n'])*)''", "<i>\\1</i>", $text);
$text = @ereg_replace("([[:space:];<>'\(]|^)(([A-Z][a-zᣩ髫𐯴�+){2,})([[:space:].,!?&<>\)]|$)",
                     "\\1<a href=\"".$pagewiki."?\\2\">\\2</a>\\4", $text);
$text = @eregi_replace("([[:space:];<>\(]|^)([[:alnum:]]+)://([^[:space:]]*)([[:alnum:]#?/=])([[:space:].,&<>\)]|$)",
                      "\\1<a href=\"\\2://\\3\\4\" target=\"_blank\">\\2://\\3\\4</a>\\5", $text);
$text = @eregi_replace("([_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)+)",
                      "<a href=\"mailto:\\1\">\\1</a>", $text);
$text = @ereg_replace("\[http://([^[:space:]]*)([[:alnum:]#?/&=])\]",
                     "<img src=\"http://\\1\\2\" alt=\"http://\\1\\2\">", $text);
$text = @ereg_replace("%%(([A-Z][a-zᣩ髫𐯴�+){2,})%%", "\\1", $text);
$text = @ereg_replace("\n[ ]+([[:print:]ᣩ髫𐯴�+)", "\n<tt>&nbsp;&nbsp;\\1</tt>", $text);
$text = @ereg_replace("\n\*[ ]+([[:print:]ᣩ髫𐯴�+)", "<ul><li>\\1</li></ul>", $text);
$text = @ereg_replace("\n---(-)*", "<hr noshade size=1>", $text);
$text = @ereg_replace("\n", "<br>\n", $text);

// traktado de la supersignoj:
$text = str_replace("cx","&#265;", $text);   $text = str_replace("gx","&#285;", $text);
$text = str_replace("hx","&#293;", $text);   $text = str_replace("jx","&#309;", $text);
$text = str_replace("sx","&#349;", $text);   $text = str_replace("ux","&#365;", $text);
$text = str_replace("Cx","&#264;", $text);   $text = str_replace("Gx","&#284;", $text);
$text = str_replace("Hx","&#292;", $text);   $text = str_replace("Jx","&#308;", $text);
$text = str_replace("Sx","&#348;", $text);   $text = str_replace("Ux","&#364;", $text);
//Sxangxas "u+X" al "u+x" per uzo de la askia numero de x por ke gxi ne estu shanghebla poste:
$text = str_replace("uX","u&#120;", $text);

return $text;
}

/* --------------------- Fino de la funkcioj --------------------- */


/* ----------------------- Komenco de la chefa kodo ----------------------- */


if ($name == "")       $name = $argv[0];        // Prenas la nomon de la pagho en la URL: vorto post "?"
if ($name == "")       $name = "VikiHejmo";

$conx = mysql_connect($host,$user,$pass);       // Konekto al la datumbazo SQL
if ($conx) {
      mysql_select_db($database,$conx);
      if (mysql_table_exists("$tablewiki",$database) > 0) {    // Kontrolo de ekzisto de $tablewiki
              if ($editmode != "done") {
                    affichehaut();
                    affichewiki($name);
                    affichebas();
                    } else {
                    postwiki($name,$text);
                    affichehaut();
                    affichewiki($name);
                    affichebas(); 
                    }
              } else {                          // Kreado de la tabelo $tablewiki se ghi ne ekzistas
                    $rep=crea_table();
                    if ($rep>0) {echo 'La MySql-tabelo $tablewiki estas nun kreita, via vikio pretos post reshargho.';} 
                    else {echo "Eraro: la kreado de la MySql-tabelo $tablewiki neeblas.";}
                    }
      mysql_close($conx);
      } else {
      echo "Neebla konekto. Kontrolu la servilon/uzantnomon/pasvorton por la konekto al MySql en la PHP-kodo.";
      }

/* ------------------------ Fino ------------------------ */

?>