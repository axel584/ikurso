<?php
include "util.php";
$korpo="reago";
$pagxtitolo="Envoi de message";
if (checkEmail($_POST['sendinto'])) {
	if ($_POST["nobot"]) {
		// le champ "nobot" est rempli, c'est qu'un robot a rempli automatiquement tous les champs
		protokolo(0,"SPAM",$_POST["komento"]);
		header("Location:reago.php?erarkodo=25");
	}
	if ($_POST["komento"]) {
		$demando="select retadreso from personoj where (rajtoj='A')";
		$result = $bdd->query($demando) or die(print_r($bdd->errorInfo()));
		$row=$result->fetch(); // on recupère le 1er admin
		$informistoj=$row["retadreso"];
		while ($row=$result->fetch()) { // on récupère les suivants
		   $informistoj=$informistoj.",".$row["retadreso"];
		}
		$informistoj.=",".$_POST['sendinto'];
		$contents="<html><head><title>ikurso-reago : ".stripSlashes($_POST['temo'])."</title>\n";
		$contents.="<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\"\n>";
		$contents.="<style>body{font-family:\"Courier New\", Courier, sans-serif;font-size:small}</style>\n";
		$contents.="</head><body>";
		$contents.="<p style=\"color:green;border-bottom:1px dashed green;\">Message de ".$_POST['sendinto'];
		if ($_POST["reagopagxo"]) {$contents.=" depuis la page «".$_POST["reagopagxo"]."»";}
		$contents.= " :</p>\n";
		$contents.="<p>".stripslashes(nl2br($_POST['komento']))."</p>";
		$objekto="ikurso-reago : ".stripSlashes($_POST['temo']);
		mailViaSES($informistoj,$objekto,$contents);
		// on affiche l'entete
		include "pagxkapo.inc.php";
		?>
		<div class="row">
		<article class="col s12 m10 l7 offset-m1 offset-l2">
			<section class="card">
				<div class="card-title primaire-texte texte-moyen">Votre message</div>
				<div class="card-content">
					<div class="row">	
						<div class="input-field col s12">
							Votre adresse &eacute;lectronique :</td>
							<input name="sendinto" size="50" value="<?php echo $_POST['sendinto'];?>">
						</div>
						<div class="input-field col s12">
							Sujet de votre message : 
							<input name="temo" size="50" value="<?php echo stripSlashes($_POST['temo']);?>">
						</div>
						<div class="input-field col s12">
							Commentaires / Komentoj / Comments  :
							<textarea name="komento" class="materialize-textarea"><?php echo stripSlashes($_POST['komento']);?></textarea>
						</div>
						<div class='atentigo sukceso'><p class="eraro">Votre message a &eacute;t&eacute; envoy&eacute; aux administrateurs du cours.</p></div>
					</div>	
				</div>
			</section>
		</article>	
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