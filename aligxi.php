<?php
include "util.php";
$pagxtitolo="Kurso de Esperanto";
$korpo="aligxilo";
$gxisdatigDato="2016-06-27";
$erarkodo = isset($_GET['erarkodo']) ? $_GET['erarkodo'] : "";
if (isset($celpersono_id)) {$celpersono = apartigiPersonon($celpersono_id);}
include "pagxkapo.inc.php";
?>

	<main>
		<header class="row">
			<h1 class="col s11 m10 l9 offset-s1 offset-m2 offset-l3">Inscription</h1>
		</header>
		<form>
			<div class="row">
			    <div class="input-field col s11 m5 l4 offset-s1 offset-m2 offset-l3">
					<input id="retadreso" type="email" class="validate" />
					<label for="retadreso" data-error="veuillez indiquer une adresse correcte" data-success="">Adresse courriel</label>
			    </div>
			    <div id="helpo-retadreso" class="helpilo col s11 m5 l4 offset-s1">
				    <p>Nous enverrons un message à cette adresse pour valider votre inscription.</p>
			    </div>
			</div>
			<div class="row">
			    <div class="input-field col s11 m5 l4 offset-s1 offset-m2 offset-l3">
					<input id="identigilo" type="text" class="validate" />
					<label for="identigilo">Identifiant</label>
			    </div>
			    <div id="helpo-identigilo" class="helpilo col s11 m5 l4 offset-s1">
				    <p>Choisissez le nom qui vous plaît. Vous l’utiliserez pour vous connecter au site.</p>
			    </div>
			</div>
			<div class="row">
			    <div class="input-field col s11 m5 l4 offset-s1 offset-m2 offset-l3">
					<input id="pasvorto" type="password" class="validate" />
					<label for="pasvorto">Mot de passe</label>
				</div>
			</div>
			<div class="row">
			    <div class="input-field col s11 m5 l4 offset-s1 offset-m2 offset-l3">
					<a href="#!" class="btn waves-effect waves-light blue right">Créer mon compte</a>
			    </div>
			</div>
		</form>
		<div class="row">
			<div class="col s11 m5 l4 offset-s1 offset-m2 offset-l3">
				<p>Déjà inscrit ? <a href="#konektigxi" class="btn-flat waves-effect waves-light blue-text modal-trigger" data-activates="konektigxi">CONNEXION</a></p>
			</div>
		</div>

	</main>	
		
<?php include "pagxpiedo.inc.php"; ?>
