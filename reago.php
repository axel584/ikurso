<?php
include "util.php";
$pagxtitolo="Envoi de message";
$korpo="informoj";
$persono_id=isset($_SESSION["persono_id"])?$_SESSION["persono_id"]:"";
$erarkodo=isset($_GET["erarkodo"])?$_GET["erarkodo"]:"";
$q=isset($_GET["q"])?$_GET["q"]:"";
if ($persono_id!="") {
	$persono = apartigiPersonon($persono_id);
} else {
	$persono = array(
		"rajtoj"=>"",
		"retadreso"=>""
		);
}
include "pagxkapo.inc.php";
?>
</form>
<div class="row">
	<article class="col s12 m10 l7 offset-m1 offset-l2">
		<section id="leciono-kapo">
			<h1>Nous contacter</h1>
		</section>

		<p>Ce formulaire vous permet d'envoyer un message aux administrateurs du cours.
			Il ne doit être utilisé que pour des questions concernant les cours d'espéranto ou ce site.</p>
			
		<p>Avant de poser votre question&nbsp;: n’hésitez pas à lire les <a href="<?php echo $vojo ?>helpo.php">pages d'aide</a>.
		<?php if (($persono["rajtoj"]=="K")||($persono["rajtoj"]=="A")) {	?>
			et le <a href="<?php echo $vojo ?>helppagxo.php">Guide du correcteur</a>.
		<?php } ?>
		
		Votre réponse y figure peut-être déjà&nbsp;!
		</p>
		<section class="card">

			<form method="post" action="reago2.php">
				<div class="card-title primaire-texte texte-moyen">Votre message</div>
				<form method="post" action="reago2.php">
				<div class="card-content">
					<div class="row">
						<div class="input-field col s12">
							<input id="sendinto" name="sendinto" type="email" class="validate" value="<?php if (isset($_SESSION['sendinto'])) {echo $_SESSION['sendinto'];} ?>" required="" aria-required="true">
							<label for="sendinto" data-error="veuillez indiquer une adresse correcte" >Votre adresse courriel</label>
						</div>
	
					    <div class="input-field col s12">
							<input id="temo" name="temo" type="text" class="validate" required="" aria-required="true" value="<?php if (isset($_SESSION["temo"])) {echo $_SESSION["temo"];}?>">
							<label for="temo">Sujet de votre message</label>
					    </div>
	
						<div class="input-field col s12">
							<textarea id="komento" name="komento" class="materialize-textarea"></textarea>
							<label for="komento"><?php if (isset($_SESSION["komento"])) {echo $_SESSION["komento"];} else echo "Votre commentaire, question, remarque…"; ?></label>
						</div>
					</div>
				</div>

				<div class="card-action">
					<input class="btn waves-effect waves-light blue" type="submit" value="envoyer">
					<input class="btn-flat waves-effect waves-light blue-text" type="reset" value="effacer">
				</div>
				
				<input type="hidden" name="lastpagxo" value="<?php echo $_POST['lastpagxo'];?>"></p>
				<input type="hidden" name="reagopagxo" value="<?php echo $q?>">
			</form>
		</section>
	</article>
</div>
<?php include "pagxpiedo.inc.php" ?>
