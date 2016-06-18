<?php
$numcxap=$_GET["lec"];
$kazo=$_GET["kazo"];
include "gerdakapo.inc.php";
?>
		<div class="klarigo">
	<?php 
		if ($kazo==1){
	?>
<p>Votre devoir a été envoyé par courriel à votre correcteur. Vous allez recevoir une copie du message.</p>
	<?php
	}
		elseif ($kazo==3) {
		// le devoir n'a pas pu etre envoye pour des raisons techniques. Il est sauvegarde et sera envoye plus tard	
		?>
		<p>Votre devoir a été enregistré et sera envoyé à votre correcteur dès que possible. Une copie du message
		vous sera alors adressée.</p>
		<?php
		}
		else {
	?>
	<p>Nous avons enregistré vos exercices. Ils seront envoyés à votre correcteur, dès que nous vous en aurons 
	attribué un. Vous recevrez alors ses coordonnées par message électronique.</p>
	<p>Votre correcteur recevra alors vos exercices par messagerie électronique et vous recevrez une copie de ce message.</p>
	<?php
	}
	?>    
		<h2>Évaluez-nous !</h2>
	Pour nous permettre d'améliorer notre cours, merci de prendre quelques secondes pour nous faire un retour sur la leçon que vous venez d'envoyer. Cette évaluation est destinée aux administrateurs du cours et ne sera pas lue par votre correcteur.
	<form method="post" action="../taksoLeciono.php">
	<input type='hidden' name="kurso" value='GR'/>
	<input type='hidden' name="leciono" value='<?=$leciono?>'/>
	<div class="tasko enketo">
		<p>Notez l'intérêt que vous avez eu à effectuer la leçon : de 1 (très ennuyeux) à 5 (très amusant) </p>
			<div class="rating">
				<p>
  				<input name="intereso" id="intereso5" value="5" type="radio"><label for="intereso5">★</label>
				<input name="intereso" id="intereso4" value="4" type="radio"><label for="intereso4">★</label>
				<input name="intereso" id="intereso3" value="3" type="radio"><label for="intereso3">★</label>
				<input name="intereso" id="intereso2" value="2" type="radio"><label for="intereso2">★</label>
				<input name="intereso" id="intereso1" value="1" type="radio"><label for="intereso1">★</label>
				</p>
			</div>
		<p>Notez la difficulté que vous avez eue à effectuer la leçon : de 1 (très facile) à 5 (très compliqué) </p>
			<div class="rating">
				<p>
  				<input name="malfacileco" id="malfacileco5" value="5" type="radio"></a><label for="malfacileco5">★</label>
				<input name="malfacileco" id="malfacileco4" value="4" type="radio"></a><label for="malfacileco4">★</label>
				<input name="malfacileco" id="malfacileco3" value="3" type="radio"></a><label for="malfacileco3">★</label>
				<input name="malfacileco" id="malfacileco2" value="2" type="radio"></a><label for="malfacileco2">★</label>
				<input name="malfacileco" id="malfacileco1" value="1" type="radio"></a><label for="malfacileco1">★</label>
				</p>
			</div>
		<p>Laissez un commentaire (optionnel) sur la leçon : </p>
		<textarea name="komento" rows="8" cols= "80"></textarea>

		<p><input class="bouton" type="submit" value="Envoyer votre appréciation"></p>
	</div>
	</form>     
		</div> <!-- klarigo -->
<?php include "gerdapiedo.inc.php"; ?>