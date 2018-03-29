<?php
$numcxap=$_GET["lec"];
$leciono=$_GET["lec"];
$kazo=$_GET["kazo"];
$persono_id=isset($_SESSION["persono_id"])?$_SESSION["persono_id"]:"";
$korpo="informo";
// si la personne n'a pas de session, on la renvoie vers la page d'accueil pour éviter les spams sur le formulaire
if ($persono_id=="") {header("Location:index.php?erarkodo=8");}
include "gerdakapo.inc.php";
?>
<!-- ATTENTION VERRUE DE PROGRAMMATION -->
<!--Comme on "ouvre" le formulaire dans l'en-tête, on est obligé de le fermer ici -->
</form>
<div class="row">
	<article class="col s12 m10 l6 offset-m1 offset-l3">
		<section id="leciono-enketo">
			<div class="card-panel blue">
				<?php 
					if ($kazo==1){
				?>
					<p class="white-text">Votre devoir a été envoyé par courriel à votre correcteur. Vous allez recevoir une copie par message.</p>
				<?php
				}
				elseif ($kazo==3) {
				// le devoir n'a pas pu etre envoye pour des raisons techniques. Il est sauvegarde et sera envoye plus tard	
				?>
				<p class="white-text">Votre devoir a été enregistré et sera envoyé à votre correcteur dès que possible. Une copie du message
				vous sera alors adressée.</p>
				<?php
				}
				else {
				?>
				<p class="white-text">Nous avons enregistré vos exercices. Ils seront envoyés à votre correcteur, dès que nous vous en aurons 
				attribué un. Vous recevrez alors ses coordonnées par message électronique.</p>
				<p class="white-text">Votre correcteur recevra alors vos exercices par messagerie électronique et vous recevrez une copie de ce message.</p>
				<?php
				}
				?>    
			</div>
			<h2>Évaluez-nous !</h2>
			<p>Pour nous permettre d'améliorer notre cours, merci de prendre quelques secondes pour nous faire un retour sur la leçon que vous venez d'envoyer. Cette évaluation est destinée aux administrateurs du cours et ne sera pas lue par votre correcteur.</p>
			
			<form method="post" action="<?php echo $vojo;?>fr/taksoLeciono.php">
				<input type='hidden' name="kurso" value='GR'/>
				<input type='hidden' name="leciono" value='<?=$leciono?>'/>
				<div class="tasko enketo">
					<p>Notez l'intérêt que vous avez eu à effectuer la leçon : de 1 (très ennuyeux) à 5 (très amusant) </p>
					<div class="rating">
						<p><input name="intereso" type="range" value="3" min="1" max="5" step="1"></p>
					</div>
	
					<p>Notez la difficulté que vous avez eue à effectuer la leçon : de 1 (très facile) à 5 (très compliqué) </p>
					<div class="rating">
						<p><input name="malfacileco" type="range" min="1" max="5" step="1"></p>
					</div>
					<div class="input-field col s12">
						<textarea name="komento" class="materialize-textarea"></textarea>
						<label for="komento">Laissez un commentaire (optionnel) sur la leçon :</label>
					</div>
					<p><button class="btn waves-effect waves-light blue right" type="submit" name="action">Envoyer mon appréciation</button></p>
				</div>
			</form>
		</section>
	</article>
</div>

<?php include "gerdapiedo.inc.php"; ?>