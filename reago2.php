<?
include "util.php";
$pagxtitolo="Envoi de message";
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
if (checkEmail($_POST['sendinto'])) {
	if ($_POST["komento"]) {
		$mesagxkapo.="Cc: <".$_POST['sendinto'].">\n";
		$mesagxkapo.="Date: ".date("D, j M Y H:i:s ").chr(13);
		$demando="select retadreso from personoj where (rajtoj='A') and lingvo='FR'";
		mysql_select_db("ikurso");
		$result = mysql_query($demando) or die ("SELECT : Invalid query :".$demando);
		$row=mysql_fetch_array($result);
		$informistoj=$row["retadreso"];
		while ($row=mysql_fetch_array($result)) {
		   $informistoj=$informistoj.",".$row["retadreso"];
		}
		//$informistoj="emmanuelle@esperanto-jeunes.org";
		$contents="<html><head><title>ikurso-reago : ".stripSlashes($_POST['temo'])."</title>\n";
		$contents.="<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\"\n>";
		$contents.="<style>body{font-family:\"Courier New\", Courier, sans-serif;font-size:small}</style>\n";
		$contents.="</head><body>";
		$contents.="<p style=\"color:green;border-bottom:1px dashed green;\">Message de ".$_POST['sendinto'];
		if ($_POST["reagopagxo"]) {$contents.=" depuis la page «".$_POST["reagopagxo"]."»";}
		$contents.= " :</p>\n";
		$contents.="<p>".stripslashes(nl2br($_POST['komento']))."</p>";
		$objekto="ikurso-reago : ".stripSlashes($_POST['temo']);
		mail($informistoj,$objekto,$contents,$mesagxkapo);
		
		?>
			<div id="enhavo">
				<ul id="tabnav"></ul>
				<div id="kadro">
					<div class="klarigo">
						<h2>Votre message</h2>
						<form method="post" action="reago2.php">
						<table class="perso">
							<tr>
								<td class="col1">Votre adresse &eacute;lectronique :</td>
								<td><input name="sendinto" size="50" value="<?echo $_POST['sendinto'];?>"></td>
							</tr>
							<tr>
								<td class="col1">Sujet de votre message : </td>
								<td><input name="temo" size="50" value="<?echo stripSlashes($_POST['temo']);?>"></td>
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
			unset ($_SESSION["sendinto"]);
			unset ($_SESSION["komento"]);
			unset ($_SESSION["temo"]);
			include "pagxpiedo.inc.php";
	} else {
		//session_register("reago"); // fonction inutile ?
		$_SESSION["sendinto"]=$_POST['sendinto'];
		$_SESSION["temo"]=$_POST['temo'];
		header("Location:reago.php?erarkodo=16");
	}	
} else {
	//session_register("reago"); // fonction inutile ?
	$_SESSION["sendinto"]="";
	$_SESSION["komento"]=$_POST['komento'];
	$_SESSION["temo"]=$_POST['temo'];
	header("Location:reago.php?erarkodo=15");
}
?>