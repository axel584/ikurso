 <?php
//include_once $vojo."util.php";
if (!isset($vojo)) { $vojo="";}
// attention, cette variable est également calculé dans util.php
$url=isset($_SERVER['REQUEST_URI'])?strtok($_SERVER['REQUEST_URI'],'?'):"";
$pagxo=explode("/", $_SERVER["SCRIPT_NAME"]);
$subjekto=$pagxo[count($pagxo)-1];
?>
<!DOCTYPE html>
  <html>
    <head>
		<!--Import Google Icon Font-->
		<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link href='https://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,600,600italic,700italic,700' rel='stylesheet' type='text/css'>
		<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400,700&subset=latin-ext" rel="stylesheet">		
		<link href="https://fonts.googleapis.com/css?family=Nothing+You+Could+Do" rel="stylesheet">
		
		<!--Import materialize.css-->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">
		<link type="text/css" rel="stylesheet" href="<?php echo $vojo;?>style/ikurso.css"  media="screen,projection"/>
		
		<!--Let browser know website is optimized for mobile-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
    </head>

    <body class="<?php echo $korpo;?>">		
	    
		<!-- menus déroulants -->
		<ul id="menu_cours" class="dropdown-content">
			<li><a href="#" class="blue-grey-text">Cours en 10 leçons</a></li>
			<li><a href="#" class="blue-grey-text">Gerda malaperis</a></li>
			<li><a href="#" class="blue-grey-text">Lasu min paroli plu</a></li>
			<li class="divider"></li>
			<li><a href="#" class="blue-grey-text">Téléchargements</a></li>
			<li class="divider"></li>
			<li><a href="#" class="blue-grey-text">Autres cours</a></li>
		</ul>
		<ul id="menu_aide" class="dropdown-content">
			<li><a href="#" class="blue-grey-text">Comment s'inscrire</a></li>
			<li><a href="#" class="blue-grey-text">Foire aux questions</a></li>
			<li><a href="#" class="blue-grey-text">Paramétrer son clavier</a></li>
		</ul>

		<!-- fenêtre modale connexion -->
		<div id="konektigxi" class="modal">
			<div class="modal-content">
				<h4 class="blue-grey-text">Connexion</h4>
				<form>
				    <div class="input-field">
				      <input id="identigilo" type="text" class="validate">
				      <label for="identigilo">identifiant</label>
				    </div>
					<div class="input-field">
						<input id="pasvorto" type="password" class="validate">
						<label for="pasvorto">mot de passe</label>
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<a href="#!" class=" modal-action modal-close waves-effect waves-light-blue btn-flat blue-grey-text">SE CONNECTER</a>
			</div>
		</div>

		<!-- fenêtre modale menu utilisateur -->
		<div  id="uzantomenuo" class="dropdown-content">
			<header class="uzanto blue">
				<p class="uzantnomo">#</p>
				<p class="retadreso">#</p>
			</header>
			<ul class="collection">
				<li><a href="#" class="blue-grey-text">Mes données personnelles</a></li>
				<li><a href="#" class="blue-grey-text">Mes cours</a></li>
				<li><a href="#" class="blue-grey-text">Déconnexion</a></li>
			</ul>
			</span>
		</div>

		<div class="navbar-fixed">	
			<nav role="navigation" class="blue-grey lighten-1">
				<div class="nav-wrapper">
					<a href="#" class="brand-logo" id="logo">iKurso</a>
					<!-- hamburger menu -->
					<div class="side-nav" id="nav-mobile">
						<ul>
							<li><a href="#">L’espéranto</a></li>
							<li class="divider"></li>
							<li><a href="#">COURS EN LIGNE</a></li>
							<ul>
								<li><a href="#">Cours en 10 leçons</a></li>
								<li><a href="#">Gerda malaperis</a></li>
								<li><a href="#">Lasu min paroli plu</a></li>
								<li class="divider"></li>
								<li><a href="#">Téléchargements</a></li>
								<li class="divider"></li>
								<li><a href="#">Autres cours</a></li>
							</ul>
							<li class="divider"></li>
							<li><a href="#">INFORMATIONS PRATIQUES</a></li>
							<ul>
								<li><a href="#">Comment s'inscrire</a></li>
								<li><a href="#">Foire aux questions</a></li>
								<li><a href="#">Paramétrer son clavier</a></li>
							</ul>
						</ul>
					</div>
					<a href="#!" data-activates="nav-mobile" class="button-collapse top-nav full hide-on-large-only"><i class="material-icons">menu</i></a>
					<ul class="right">
						<!-- si utilisateur pas connecté -->
						<li><a href="#konektigxi" class="btn waves-effect waves-light blue-grey lighten-3 modal-trigger" data-activates="konektigxi">CONNEXION</a></li>
						<!-- si utilisateur connecté -->
						<li class="hide"><a href="#!" class="btn-floating btn-large waves-effect waves-light blue-grey lighten-3 dropdown-button" data-activates="uzantomenuo"><i class="large material-icons">perm_identity</i>
</a></li>
					</ul>
					<ul class="right hide-on-med-and-down">
						<li><a href="#">L’ESPÉRANTO</a></li>
						<li><a class="dropdown-button" href="#!" data-activates="menu_cours">COURS EN LIGNE<i class="material-icons right">arrow_drop_down</i></a></li>
						<li><a class="dropdown-button" href="#!" data-activates="menu_aide">INFORMATIONS PRATIQUES<i class="material-icons right">arrow_drop_down</i></a></li>
					</ul>
				</div>
			</nav>
		</div>
