<?php
$numcxap=$_GET["lec"];
$leciono=$_GET["lec"];
$kazo=$_GET["kazo"];
$persono_id=isset($_SESSION["persono_id"])?$_SESSION["persono_id"]:"";
$korpo="informo";
include "dlekkapo.inc.php";
if ($persono_id=="") {
	// si la personne n'a pas de session, on la renvoie vers la page d'accueil pour éviter les spams sur le formulaire
	header("Location:index.php?erarkodo=8"); exit;
}
?>
<div class="row">
	<article class="col s12 m10 l6 offset-m1 offset-l3">
		<section id="leciono-enketo">
			<div class="card-panel blue">
				<?php 
					if ($kazo==1){ // a déjà un correcteur
				?>
					<p class="white-text">Votre devoir a été envoyé par courriel à votre correcteur. Vous allez en recevoir une copie par message.</p>
				<?php
				}
				elseif ($kazo==2) { // n'a pas encore de correcteur
				?>
					<p class="white-text">Votre devoir a été enregistré et sera envoyé à votre correcteur dès que possible.<br>
					Une copie du message vous sera alors adressée.</p>
				<?php
				}
				?>
	        </div>
		    
			<h2>Évaluez-nous&nbsp;!</h2>
			<p>Pour nous permettre d'améliorer notre cours, merci de prendre quelques secondes pour nous faire un retour sur la leçon que vous venez d'envoyer. Cette évaluation est destinée aux administrateurs du cours et ne sera pas lue par votre correcteur.</p>
			<form method="post" action="<?php echo $vojo;?>fr/taksoLeciono.php">
				<input type='hidden' name="kurso" value='CG'/>
				<input type='hidden' name="leciono" value='<?=$leciono?>'/>
				<div class="tasko enketo">
					<?php taksoDemandoj(); ?>
					<div class="input-field col s12">
						<textarea name="komento" class="materialize-textarea"></textarea>
						<label for="komento">Laissez un commentaire (optionnel) sur la leçon&nbsp;:</label>
					</div>
					<p><button class="btn waves-effect waves-light blue right" type="submit" name="action">Envoyer mon appréciation</button></p>
				</div>
			</form>
		</section>
	</article>
</div>
<?php include "dlekpiedo.inc.php"; ?>