<?php
$numcxap=$_GET["lec"];
$leciono=$_GET["lec"];
$kazo=$_GET["kazo"];
$persono_id=isset($_SESSION["persono_id"])?$_SESSION["persono_id"]:"";
$korpo="informo";
// si la personne n'a pas de session, on la renvoie vers la page d'accueil pour éviter les spams sur le formulaire
if ($persono_id=="") {header("Location:index.php?erarkodo=8");}
include "pppkapo.inc.php";
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
					<p class="white-text">Viajn ekzercojn sendis al via korektanto. Vi ricevos kopion al via retadreso.</p>
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
			<h2>Taksu la kvaliton de tiu kurso !</h2>
			<p>Por plibonigi tiun kurson, vi povas plenigi tiun formularon (franclingve aù esperante) por priskribi kion indos plibonigi. Tiujn informojn ricevos NUR la administrantoj kaj NE via korektanto..</p>
			
			<form method="post" action="<?php echo $vojo;?>eo/taksoLeciono.php">
				<input type='hidden' name="kurso" value='PP'/>
				<input type='hidden' name="leciono" value='<?=$leciono?>'/>
				<div class="tasko enketo">
					<p>Taksu la plezuron de tiu leciono : de 1 (tedega) al 5 (amuzega) </p>
					<div class="rating">
						<p><input name="intereso" type="range" value="3" min="1" max="5" step="1"></p>
					</div>
	
					<p>Taksu la facilecon de tiu leciono : de 1 (facilega) al 5 (malfacilega) </p>
					<div class="rating">
						<p><input name="malfacileco" type="range" min="1" max="5" step="1"></p>
					</div>
					<div class="input-field col s12">
						<textarea name="komento" class="materialize-textarea"></textarea>
						<label for="komento">(ne devigata) Lasu mesaĝon :</label>
					</div>
					<p><button class="btn waves-effect waves-light blue right" type="submit" name="action">Sendi mian takson</button></p>
				</div>
			</form>
		</section>
	</article>
</div>

<?php include "ppppiedo.inc.php"; ?>