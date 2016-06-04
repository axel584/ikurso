<?php
include "util.php";
$pagxtitolo="Envoi de message";
include "pagxkapo.inc.php";


$mesagxkapo="MIME-Version: 1.0\n";
$mesagxkapo.="Content-type:text/html;charset=utf-8\n";			
$mesagxkapo.="From: Ikurso <ikurso@esperanto-jeunes.org>\n";
if (checkEmail($_POST['sendinto'])) {
	if ($_POST["komento"]) {
		$mesagxkapo.="Cc: <".$_POST['sendinto'].">\n";
		$mesagxkapo.="Date: ".date("D, j M Y H:i:s ").chr(13);
		$demando="select retadreso from personoj where (rajtoj='A')";
		$result = $bdd->query($demando) or die(print_r($bdd->errorInfo()));
		$row=$result->fetch(); // on recupère le 1er admin
		$informistoj=$row["retadreso"];
		while ($row=$result->fetch()) { // on récupère les suivants
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
								<td><input name="sendinto" size="50" value="<?php echo $_POST['sendinto'];?>"></td>
							</tr>
							<tr>
								<td class="col1">Sujet de votre message : </td>
								<td><input name="temo" size="50" value="<?php echo stripSlashes($_POST['temo']);?>"></td>
							</tr>
						</table>
						<table class="perso">
							<tr><td class="col1">&nbsp;&nbsp;Commentaires / Komentoj / Comments  :</td></tr>
						</table>
							<textarea name="komento" rows="8" cols="70"><?php echo stripSlashes($_POST['komento']);?></textarea></td></tr>
						</form>
						<div class='atentigo sukceso'><p class="eraro">Votre message a &eacute;t&eacute; envoy&eacute; aux administrateurs du cours.</p></div>
					</div>
				</div>
			</div>
		<?php 	
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