<?php
include "util.php";
$pagxtitolo="Kurso de Esperanto";
$korpo="aligxilo";
$gxisdatigDato="2016-06-27";
$erarkodo = isset($_GET['erarkodo']) ? $_GET['erarkodo'] : "";
$aligxi = isset($_GET['aligxi']) ? $_GET['aligxi'] : "";
if (isset($celpersono_id)) {$celpersono = apartigiPersonon($celpersono_id);}
include "pagxkapo.inc.php";
?>
	<main>
		<header class="row">
			<h1 class="col s11 m10 l9 offset-s1 offset-m2 offset-l3">Inscription</h1>
		</header>
	<div id="parto1_kurso">
			<div class="row">
			    <div class="input-field col s11 m5 l4 offset-s1 offset-m2 offset-l3">
					<input id="aligxi_kurso_retadreso" type="email" class="validate" />
					<label for="aligxi_kurso_retadreso" data-error="veuillez indiquer une adresse correcte" data-success="">Adresse courriel</label>
			    </div>
			    <div id="helpo-retadreso" class="helpilo col s11 m5 l4 offset-s1">
				    <p> class="helper-text"Nous enverrons un message à cette adresse pour valider votre inscription.</p>
			    </div>
			</div>
			<div class="row">
			    <div class="input-field col s11 m5 l4 offset-s1 offset-m2 offset-l3">
					<input id="aligxi_kurso_identigilo" type="text" class="validate" />
					<label for="aligxi_kurso_identigilo">Identifiant</label>
			    </div>
			    <div id="helpo-identigilo" class="helpilo col s11 m5 l4 offset-s1">
				    <p>Choisissez le nom qui vous plaît. Vous l’utiliserez pour vous connecter au site.</p>
			    </div>
			</div>
			<div class="row">
			    <div class="input-field col s11 m5 l4 offset-s1 offset-m2 offset-l3">
					<input id="aligxi_kurso_pasvorto" type="password" class="validate" />
					<label for="aligxi_kurso_pasvorto">Mot de passe</label>
				</div>
			</div>
			<div class="row">
			    <div class="input-field col s11 m5 l4 offset-s1 offset-m2 offset-l3">
					<a id="inscription_kurso_button" href="#!" class="btn waves-effect waves-light blue right">Créer mon compte</a>
			    </div>
			</div>
	</div>
	<div class="row hide" id="parto2_kurso">
		<div class="col s11 m10 l9 offset-s1 offset-m2 offset-l3">
			    	<p class="chapo">Vous y êtes presque !</p> 
					<p>Pour activer votre compte, veuillez cliquer sur le lien se trouvant dans le message électronique que nous venons de vous envoyer.<br> 
				Si vous ne le trouvez pas, vérifiez s’il n’est pas dans votre courrier indésirable.<br> 
				Si vous n’avez rien reçu, vous pouvez <a href="reago.php">contacter un administrateur</a>.</p>
		</div>
	</div>		
		<!-- on ne gere pas le cas où ils sont déjà inscrit car s'ils sont déjà inscrit, ils ne suivent pas le cours par le logiciel et n'arrivent jamais sur cette page -->
		<!--div class="row">
			<div class="col s11 m5 l4 offset-s1 offset-m2 offset-l3">
				<p>Déjà inscrit ? <a href="#konektigxi" class="btn-flat waves-effect waves-light blue-text modal-trigger" data-target="konektigxi">CONNEXION</a></p>
			</div>
		</div-->

	</main>	
		
<?php include "pagxpiedo.inc.php"; ?>
