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

	  <!--Import materialize.css-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">
      <link type="text/css" rel="stylesheet" href="<?php echo $vojo;?>style/ikurso.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    </head>

    <body>		
	    
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

		<div class="navbar-fixed">
			<nav role="navigation" class="blue-grey lighten-1">
				<div class="nav-wrapper">
					<a href="#" class="brand-logo" id="logo">iKurso</a>
					<ul class="side-nav" id="nav-mobile">
						<li><a href="#">L’ESPÉRANTO</a></li>
						<li><a href="#">COURS EN LIGNE</a></li>
						<li><a href="#">INFORMATIONS PRATIQUES</a></li>
						<li><a href="#">CONNEXION</a></li>
					</ul>
					<a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
					<ul class="right hide-on-med-and-down">
						<li><a href="#">L’ESPÉRANTO</a></li>
						<li><a class="dropdown-button " href="#!" data-activates="menu_cours">COURS EN LIGNE<i class="material-icons right">arrow_drop_down</i></a></li>
						<li><a class="dropdown-button" href="#!" data-activates="menu_aide">INFORMATIONS PRATIQUES<i class="material-icons right">arrow_drop_down</i></a></li>
						<li><a href="#" class="btn waves-effect waves-light blue-grey lighten-3">CONNEXION</a></li>
					</ul>
				</div>
			</nav>
		</div>