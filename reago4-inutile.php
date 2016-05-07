<?
include "util.php";
$pagxtitolo="Envoi de message";
header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
header("Pragma: no-cache"); // HTTP/1.0
include "pagxkapo.inc.php";

// tiu funkcio kontrolas, cxu adreso validas kaj ekzistas
function checkEmail($email)
{
	if (eregi("^[a-zA-Z0-9_]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$]", $email)) {return FALSE;}
	list($Username, $Domain) = split("@",$email);
	if(getmxrr($Domain, $MXHost)) {return TRUE;}
	else {
	  if(fsockopen($Domain, 25, $errno, $errstr, 30)) {return TRUE;}
	  else {return FALSE;}
     }
}

$mesagxkapo="MIME-Version: 1.0\n";
$mesagxkapo.="Content-type:text/html;charset=utf-8\n";			
$mesagxkapo.="From: Ikurso <ikurso@esperanto-jeunes.org>\n";
echo "sendinto=".$_POST['sendinto']."<br>";
if (checkEmail($_POST['sendinto'])) {
	$mesagxkapo.="Cc: <".$_POST['sendinto'].">\n";
} else {
	session_register("reago");
	$reago["sendinto"]="";
	$reago["komento"]=$_POST['komento'];
	$reago["subjekto"]=$_POST['subjekto'];
	header("Location:reago3.php?erarkodo=15");
}
$mesagxkapo.="Date: ".date("D, j M Y H:i:s ").chr(13);
$demando="select retadreso from personoj where (rajtoj='A') and lingvo='FR'";
mysql_select_db("ikurso");
$result = mysql_query($demando) or die ("SELECT : Invalid query :".$demando);
$row=mysql_fetch_array($result);
$informistoj=$row["retadreso"];
while ($row=mysql_fetch_array($result)) {
   $informistoj=$informistoj.",".$row["retadreso"];
}
if ($_POST['sendinto']=="richard.emmanuelle@wanadoo.fr") {$informistoj="richard.emmanuelle@wanadoo.fr";}
if ($_POST['sendinto']=="emmanuelle@esperanto-jeunes.org") {$informistoj="emmanuelle@esperanto-jeunes.org";}
$informistoj="emmanuelle@esperanto-jeunes.org";
$contents="<html><head><title>ttt-reago : ".stripSlashes($_POST['subjekto'])."</title>\n";
$contents.="<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\"\n>";
$contents.="<style>body{font-family:\"Courier New\", Courier, sans-serif;font-size:small}</style>\n";
$contents.="</head><body>";
$contents.="<p style=\"color:green;border-bottom:1px dashed green;\">Message de ".$_POST['sendinto']." :</p>\n";
$contents.="<p>".stripslashes(nl2br($_POST['komento']))."</p>";
$objekto="ttt-reago : ".stripSlashes($_POST['subjekto']);
mail($informistoj,$objekto,$contents,$mesagxkapo);

?>
		<div id="enhavo">
			<ul id="tabnav"></ul>
			<div id="kadro">
				<div class="klarigo">
					<h2>Votre message</h2>
					<form method="post" action="reago2.php">
					<p>Ce formulaire vous permet d'envoyer un message aux administrateurs du cours.</p>
					<table class="perso">
						<tr>
							<td class="col1">Votre adresse &eacute;lectronique :</td>
							<td><input name="sendinto" size="50" value="<?echo $_POST['sendinto'];?>"></td>
						</tr>
						<tr>
							<td class="col1">Sujet de votre message : </td>
							<td><input name="subjekto" size="50" value="<?echo stripSlashes($_POST['subjekto']);?>"></td>
						</tr>
					</table>
					<table class="perso">
						<tr><td class="col1">&nbsp;&nbsp;Commentaires / Komentoj / Comments  :</td></tr>
					</table>
						<textarea name="komento" rows="8" cols="70"><?echo stripSlashes($_POST['komento']);?></textarea></td></tr>
					</form>
					<p class="eraro">Votre message a &eacute;t&eacute; envoy&eacute; aux administrateurs du cours.</p>
				</div>
			</div>
		</div>
<? 	
	unset ($reago["sendinto"]);
	unset ($reago["komento"]);
	unset ($reago["subjekto"]);
?>
<? include "pagxpiedo.inc.php" ?>
