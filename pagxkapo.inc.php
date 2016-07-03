 <?php
//include_once $vojo."util.php";
if (!isset($vojo)) { $vojo="";}
// attention, cette variable est également calculé dans util.php
$url=isset($_SERVER['REQUEST_URI'])?strtok($_SERVER['REQUEST_URI'],'?'):"";
$pagxo=explode("/", $_SERVER["SCRIPT_NAME"]);
$subjekto=$pagxo[count($pagxo)-1];
$erarkodo = isset($_GET['erarkodo']) ? $_GET['erarkodo'] : "";
$persono_id = isset($_SESSION["persono_id"]) ? $_SESSION["persono_id"] : "";
?>
<!DOCTYPE html>
  <html lang="fr">
    <head>
		<!--Import Google Icon Font-->
		<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link href='https://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,600,600italic,700italic,700' rel='stylesheet' type='text/css'>
		<link href="https://fonts.googleapis.com/css?family=Nothing+You+Could+Do" rel="stylesheet">
		
		<!--Import materialize.css-->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">
		<link type="text/css" rel="stylesheet" href="<?php echo $vojo;?>style/ikurso.css"  media="screen"/>
		
		<!--Let browser know website is optimized for mobile-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
    </head>

    <body class="<?php echo $korpo;?>">	
	    
		<!-- menus déroulants -->
		<ul id="menu_cours" class="dropdown-content">
			<li><a href="<?php echo $vojo;?>fr/cge/intro.php" class="primaire-texte moyen">Cours en 10 leçons</a></li>
			<li><a href="<?php echo $vojo;?>fr/gerda/index.php" class="primaire-texte moyen">Gerda malaperis</a></li>
			<li class="divider"></li>
			<li><a href="<?php echo $vojo;?>helpo.php?temo=elsxutoj" class="primaire-texte moyen">Téléchargements</a></li>
		</ul>
		<ul id="menu_aide" class="dropdown-content">
			<li><a href="<?php echo $vojo;?>fr/intro.php?temo=enskribo" class="primaire-texte moyen">Comment s'inscrire</a></li>
			<li><a href="<?php echo $vojo;?>helpo.php" class="primaire-texte moyen">Foire aux questions</a></li>
			<li><a href="<?php echo $vojo;?>helpo.php?temo=iloj" class="primaire-texte moyen">Paramétrer son clavier</a></li>
		</ul>

		<!-- fenêtre modale connexion -->
		<div id="konektigxi" class="modal">
			<div class="modal-content">
				<h4 class="primaire-texte texte-moyen">Connexion</h4>
				<form>
				    <div class="input-field">
				      <input id="eniri_identigilo" type="text" class="validate" required="" aria-required="true">
				      <label for="eniri_identigilo">identifiant</label>
				    </div>
					<div class="input-field">
						<input id="eniri_pasvorto" type="password" class="validate">
						<label for="eniri_pasvorto">mot de passe</label>
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<a id="connection_button" class=" modal-action waves-effect waves-light btn-flat primaire-texte">SE CONNECTER</a>
			</div>
		</div>

		<!-- fenêtre modale inscription -->
		<div id="aligxi" class="modal">
			<div class="modal-content">
				<h4 class="primaire-texte texte-moyen">Inscription</h4>
				<div id="parto1">
					<form>
					    <div class="input-field">
							<input id="aligxi_retadreso"  type="email" class="validate" required="" aria-required="true">
							<label for="aligxi_retadreso" data-error="veuillez indiquer une adresse correcte" >Adresse courriel</label>
				    	<p id="helpo-retadreso" class="helpilo">Nous enverrons un message à cette adresse pour valider votre inscription.</p>
						</div>
					    <div class="input-field">
							<input id="aligxi_identigilo" type="text" class="validate" required="" aria-required="true">
							<label for="aligxi_identigilo">Identifiant</label>
							<p id="helpo-identigilo" class="helpilo">Vous l’utiliserez pour vous connecter au site.</p>
					    </div>
						<div class="input-field">
							<input id="aligxi_pasvorto" type="password" class="validate">
							<label for="aligxi_pasvorto">Mot de passe</label>
						</div>
					</form>
				</div>
				<div id="parto2" class="hide">
					<p class="chapo">Vous y êtes presque !</p>
					<p>Pour activer votre compte, veuillez cliquer sur le lien se trouvant dans le message électronique que nous venons de vous envoyer.<br>
				Si vous ne le trouvez pas, vérifiez s’il n’est pas dans votre courrier indésirable.<br>
				Si vous n’avez rien reçu, vous pouvez demander de réenvoyer le message.</p>

				</div>
			</div>
			<div class="modal-footer">
				<div id="footer-creer-compte">
					<a id="inscription_button" class="modal-action waves-effect waves-light btn-flat primaire-texte">CRÉER UN COMPTE</a>
				</div>
				<div id="footer-renvoyer-activation" class="hide">
					<a id="fermer_button" class="modal-action modal-close waves-effect waves-light btn primaire">Fermer</a>
					<a id="inscription2_button" class="modal-action waves-effect waves-light btn-flat primaire-texte">Renvoyer le courriel d’activation</a>
				</div>
			</div>
		</div>	

		<!-- fenêtre modale réinitialisation mot de passe -->
		<div id="novigi_pasvorton" class="modal">
			<div class="modal-content">
				<h4 class="primaire-texte">Réinitialiser son mot de passe</h4>
				<form>
					<div class="input-field">
						<input id="pasvorto" type="password" class="validate">
						<label for="pasvorto">Nouveau mot de passe</label>
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<a id="inscription_button" class=" modal-action waves-effect waves-light-blue btn-flat primaire-texte">RÉINITIALISER SON MOT DE PASSE</a>
			</div>
		</div>	

		<!-- fenêtre modale menu utilisateur -->
		<div  id="uzantomenuo" class="dropdown-content">
			<header class="uzanto blue">
				<p class="uzantnomo">#</p>
				<p class="retadreso">#</p>
			</header>
			<ul class="collection">
				<li><a href="<?php echo $vojo;?>personinformoj" class="primaire-texte moyen">Mes données personnelles</a></li>
				<li><a href="<?php echo $vojo;?>eliri.php" class="primaire-texte moyen">Déconnexion</a></li>
			</ul>
			</span>
		</div>

		<div class="navbar-fixed">	
			<nav class="primaire">
				<div class="nav-wrapper">
					<a href="<?php echo $vojo;?>index.php" class="brand-logo" id="logo">iKurso</a>
					<!-- hamburger menu -->
					<div class="side-nav" id="nav-mobile">
						<ul>
							<!-- <li><a href="#">L’espéranto</a></li> -->
							<li class="divider"></li>
							<li>COURS EN LIGNE</li>
							<ul>
								<li><a href="<?php echo $vojo;?>fr/cge/intro.php">Cours en 10 leçons</a></li>
								<li><a href="<?php echo $vojo;?>fr/gerda/index.php">Gerda malaperis</a></li>
								<li class="divider"></li>
								<li><a href="<?php echo $vojo;?>helpo.php?temo=elsxutoj">Téléchargements</a></li>
							</ul>
							<li class="divider"></li>
							<li>INFORMATIONS PRATIQUES</li>
							<ul>
								<li><a href="<?php echo $vojo;?>fr/intro.php?temo=enskribo">Comment s'inscrire</a></li>
								<li><a href="<?php echo $vojo;?>helpo.php">Foire aux questions</a></li>
								<li><a href="<?php echo $vojo;?>helpo.php?temo=iloj">Paramétrer son clavier</a></li>
							</ul>
						</ul>
					</div>
					<a href="#!" data-activates="nav-mobile" class="button-collapse top-nav full hide-on-large-only"><i class="material-icons">menu</i></a>
					<ul class="right">

						<!-- si utilisateur pas connecté -->
<?php 
if ($persono_id=="") {
?>						
						<li><a href="#konektigxi" class="btn waves-effect waves-light primaire clair modal-trigger" data-activates="konektigxi">CONNEXION</a></li>
<?php 
} else {						
?>
						<!-- si utilisateur connecté -->
						<li><a href="#!" class="btn-floating btn-large waves-effect waves-light primaire clair dropdown-button" data-activates="uzantomenuo"><i class="large material-icons">perm_identity</i>
<?php						
}
?>
</a></li>
					</ul>
					<ul class="right hide-on-med-and-down">
						<!--<li><a href="#">L’ESPÉRANTO</a></li>-->
						<li><a class="dropdown-button" href="#!" data-activates="menu_cours">COURS EN LIGNE<i class="material-icons right">arrow_drop_down</i></a></li>
						<li><a class="dropdown-button" href="#!" data-activates="menu_aide">INFORMATIONS PRATIQUES<i class="material-icons right">arrow_drop_down</i></a></li>
					</ul>
				</div>
			</nav>
		</div>
	<main>
	<form id="chefa_form"> <!-- on englobe chaque page d'un formulaire principal -->