<?php
include "util.php";
$pagxtitolo="Envoi de message";
$korpo="informoj";
$persono_id=isset($_SESSION["persono_id"])?$_SESSION["persono_id"]:"";
$erarkodo=isset($_GET["erarkodo"])?$_GET["erarkodo"]:"";
$q=isset($_GET["q"])?$_GET["q"]:"";
if ($persono_id!="") {
	$persono = apartigiPersonon($persono_id);
	$_SESSION['sendinto'] = $persono["retadreso"];
} else {
	$persono = array(
		"rajtoj"=>"",
		"retadreso"=>""
		);
}
include "pagxkapo.inc.php";
?>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<script>
   function onSubmit(token) {
     document.getElementById("reago").submit();
   }
 </script>
<style>
	#demando-ujo .select-wrapper {display: block; margin-right: 0;}
	#demando-ujo .dropdown-content {width: 100% !important; left: 0 !important;}
</style>
<div class="row">
	<article class="col s12 m10 l7 offset-m1 offset-l2">
		<section id="leciono-kapo">
			<h1>Nous contacter</h1>
		</section>

		<p>Ce formulaire vous permet d'envoyer un message aux administrateurs du cours.
			Il ne doit être utilisé que pour des questions concernant les cours d'espéranto ou ce site.</p>
			
		<p>Avant de poser votre question&nbsp;: n’hésitez pas à lire les <a href="<?php echo $vojo ?>helpo.php">pages d'aide</a>.
		<?php if (($persono["rajtoj"]=="K")||($persono["rajtoj"]=="A")) {	?>
			et le <a href="<?php echo $vojo ?>gvidilo.php">Guide du correcteur</a>.
		<?php } ?>
		
		Votre réponse y figure peut-être déjà&nbsp;!
		</p>
		<?php
		// si on revient d'un envoi en erreur, on réaffiche directement le formulaire
		$autreTemo = ($erarkodo!="" || isset($_SESSION["temo"]) || isset($_SESSION["komento"]));
		?>
		<div class="row">
		<div class="input-field col s12" id="demando-ujo">
			<select id="demando">
				<option value="" disabled<?php if (!$autreTemo) echo " selected"; ?>>Choisissez une question</option>
				<option value="aktivigo">Je n'ai pas reçu mon message d'activation de compte</option>
				<option value="korektanto">Comment faire pour avoir un correcteur précis&nbsp;?</option>
				<option value="pasvorto">J'ai oublié mon mot de passe</option>
				<option value="problemo">J'ai constaté un problème technique sur le site</option>
				<option value="autre"<?php if ($autreTemo) echo " selected"; ?>>Autre sujet</option>
			</select>
			<label for="demando">Pourquoi souhaitez-vous nous contacter&nbsp;?</label>
		</div>
		</div>

		<section class="card respondo" id="respondo-aktivigo" style="display:none">
			<div class="card-content">
				<p>Le message peut mettre environ 20 minutes à arriver et il peut arriver dans la boîte de spam.
				Si au bout de 20 minutes, vous n'avez toujours rien reçu, vous pouvez essayer de vous connecter sur le site&nbsp;:
				un message vous indiquera alors que ce compte n'est pas activé et vous aurez la possibilité de renvoyer le message d'activation.</p>
			</div>
		</section>

		<section class="card respondo" id="respondo-korektanto" style="display:none">
			<div class="card-content">
				<p>Les correcteurs sont attribués en priorité aux élèves du même département.
				Si vous souhaitez un correcteur précis, il vous suffit d'indiquer votre adresse (au moins le pays et le code postal),
				et vous devriez recevoir votre correcteur à la fin de la première leçon.</p>
			</div>
		</section>

		<section class="card respondo" id="respondo-pasvorto" style="display:none">
			<div class="card-content">
				<p>Sur le site, vous avez normalement un bouton «&nbsp;Connexion&nbsp;» en haut à droite (si vous avez un bouton gris, c'est que vous êtes déjà connecté).
				En cliquant sur le bouton «&nbsp;Connexion&nbsp;», une fenêtre apparaîtra et vous y verrez un bouton «&nbsp;Identifiant ou mot de passe oublié&nbsp;».</p>
			</div>
		</section>

		<section class="card respondo" id="respondo-problemo" style="display:none">
			<div class="card-content">
				<p>Choisissez «&nbsp;Autre sujet&nbsp;» pour nous écrire et indiquez-nous le maximum d'informations&nbsp;:
				page sur laquelle vous avez constaté le problème, message d'erreur qui s'affiche, comportement constaté et comportement attendu,
				navigateur utilisé, si cela se produit sur un ordinateur, une tablette ou un téléphone…</p>
				<p>Afin de corriger le problème, la première chose que l'on fait est d'essayer de le reproduire.</p>
			</div>
		</section>

		<section class="card respondo" id="respondo-autre"<?php if (!$autreTemo) echo ' style="display:none"'; ?>>

			<form method="post" action="reago2.php" id="reago">
				<div class="card-title primaire-texte texte-moyen">Votre message</div>
				<div class="card-content">
					<div class="row">
						<div class="input-field col s12">
							<input id="sendinto" name="sendinto" type="email" class="validate" value="<?php if (isset($_SESSION['sendinto'])) {echo $_SESSION['sendinto'];} ?>" required="" aria-required="true">
							<label for="sendinto">Votre adresse courriel</label>
							<span id="sendinto_helper" class="helper-text" data-error="veuillez indiquer une adresse correcte" data-success=""></span>
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
					<div class = "g-recaptcha" data-sitekey = "<?php echo htmlspecialchars(isset($RECAPTCHA_SITEKEY) ? $RECAPTCHA_SITEKEY : ''); ?>"></div>
					<input class="btn waves-effect waves-light blue" type="submit" value="envoyer">
					<input class="btn-flat waves-effect waves-light blue-text" type="reset" value="effacer">
				</div>
				<input type="hidden" name="reagopagxo" value="<?php echo $q?>">
			</form>
		</section>
	</article>
</div>
<script>
document.getElementById("demando").addEventListener("change", function () {
	var respondoj = document.querySelectorAll(".respondo");
	for (var i = 0; i < respondoj.length; i++) {
		respondoj[i].style.display = (respondoj[i].id == "respondo-" + this.value) ? "" : "none";
	}
});
</script>
<?php include "pagxpiedo.inc.php" ?>
