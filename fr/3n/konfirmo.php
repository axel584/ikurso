<?php
$numcxap=$_GET["lec"];
$leciono=$_GET["lec"];
$kazo=$_GET["kazo"];
$korpo="informo";
include "kapo.inc.php";
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
					<p class="white-text">Votre devoir a été envoyé par courriel à votre correcteur. Vous allez en recevoir une copie par message.</p>
				<?php
				}
				elseif ($kazo==2) {
				// le devoir n'a pas pu etre envoye pour des raisons techniques. Il est sauvegarde et sera envoye plus tard	
				?>
					<p class="white-text">Votre devoir a été enregistré et sera envoyé à votre correcteur dès que possible.<br>
					Une copie du message vous sera alors adressée.</p>
				<?
				}
				else {
				?>
					<p class="white-text">Nous avons enregistré vos exercices. Ils seront envoyés à votre correcteur, 
						dès que nous vous en aurons attribué un. Vous recevrez alors ses coordonnées par message électronique.</p>
					<p class="white-text">Votre correcteur recevra alors vos exercices par messagerie électronique et vous recevrez une copie de ce message.</p>
				<?php
				}
				?>         
	        </div>
		    
			<h2>Évaluez-nous !</h2>
			<p>Pour nous permettre d’améliorer notre cours, merci de prendre quelques secondes pour nous faire un retour sur la leçon que vous venez d'envoyer. Cette évaluation est destinée aux administrateurs du cours et ne sera pas lue par votre correcteur.</p>
			<form method="post" action="<?php echo $vojo;?>fr/taksoLeciono.php">
				<input type='hidden' name="kurso" value='3N'/>
				<input type='hidden' name="leciono" value='<?=$leciono?>'/>
				<div class="tasko enketo">
					<p>Notez l’intérêt que vous avez eu à effectuer la leçon&nbsp;: de 1 (très ennuyeux) à 5 (très amusant) </p>
					<div class="row">
						<div class="rating col s12 m6 l6">
							<p class="range-field"><input id="range_intereso" name="intereso" type="range" value="3" min="1" max="5" step="1"></p>
						</div>
						<div class="rating col s12 m6 l6">
							<p id="libelle_intereso"></p>
						</div>
					</div>
					<p>Notez la difficulté que vous avez eue à effectuer la leçon&nbsp;: de 1 (très facile) à 5 (très compliqué) </p>
					<div class="row">
						<div class="rating col s12 m6 l6">
							<p class="range-field"><input id="range_malfacileco"  name="malfacileco" type="range" min="1" max="5" step="1"></p>
						</div>
						<div class="rating col s12 m6 l6">
							<p id="libelle_malfacileco"></p>
						</div>
					</div>
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
<?php include "piedo.inc.php"; ?>