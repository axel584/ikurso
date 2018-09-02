 <?php
//include_once $vojo."util.php";
if (!isset($vojo)) { $vojo="";}
// attention, cette variable est également calculé dans util.php
$url=isset($_SERVER['REQUEST_URI'])?strtok($_SERVER['REQUEST_URI'],'?'):"";
$pagxo=explode("/", $_SERVER["SCRIPT_NAME"]);
$subjekto=$pagxo[count($pagxo)-1];
$erarkodo = isset($_GET['erarkodo']) ? $_GET['erarkodo'] : "";
$aktivigo = isset($_GET['aktivigo']) ? $_GET['aktivigo'] : "";
$retadreso = isset($_GET['retadreso']) ? $_GET['retadreso'] : "";
$persono_id = isset($_SESSION["persono_id"]) ? $_SESSION["persono_id"] : "";
if ($persono_id) {$persono = apartigiPersonon($persono_id);} else { $persono = array("enirnomo"=>"","familinomo"=>"","personnomo"=>"","retadreso"=>"","rajtoj"=>"");}
?>
<!DOCTYPE html>
  <html lang="fr">
    <head>
    <title>Ikurso - Cours d'espéranto gratuit en ligne</title>
		<!--Import Google Icon Font-->
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link href='https://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,600,600italic,700italic,700' rel='stylesheet' type='text/css'>
		<link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">		
		<link href="https://fonts.googleapis.com/css?family=Nothing+You+Could+Do" rel="stylesheet">
		
		<!--Import materialize.css-->
		 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">

		<!--Player audio-->
		<link rel="stylesheet" type="text/css" href="<?php echo $vojo;?>soundmanager2/css/mp3-player-button.css" />
		<script src="<?php echo $vojo;?>soundmanager2/script/soundmanager2.js"></script>
		<script async type="text/javascript" src="<?php echo $vojo;?>soundmanager2/script/mp3-player-button.js"></script>
		<script>
		soundManager.setup({
		  // required: path to directory containing SM2 SWF files
		  url: '<?php echo $vojo;?>soundmanager2/swf/'
		});
		</script>
		<script type="text/javascript" src="<?php echo $vojo;?>xAlUtf8.js"></script>	
		<link type="text/css" rel="stylesheet" href="<?php echo $vojo;?>style/ikurso.css"  media="all"/>
		<link type="text/css" rel="stylesheet" href="<?php echo $vojo;?>style/impression.css"  media="print"/>

		<!--Let browser know website is optimized for mobile-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />

		<!-- Application-specific meta tags -->
		<meta name="application-name" content="iKurso" /> 
		<meta name="msapplication-TileColor" content="#554E47" /> 
		<meta name="msapplication-TileImage" content="" />
		<meta name="msapplication-square150x150logo" content="<?php echo $vojo;?>bildoj/logo150.png" />
		<meta name="msapplication-square310x310logo" content="<?php echo $vojo;?>bildoj/largelogo.png" />
		<meta name="msapplication-square70x70logo" content="<?php echo $vojo;?>bildoj/tinylogo.png" />
		<meta name="msapplication-wide310x150logo" content="<?php echo $vojo;?>bildoj/widelogo.png" />
		<!-- icone iOs -->
		<link href="<?php echo $vojo;?>bildoj/touch-icon-60.png" rel="apple-touch-icon" />
		<link href="<?php echo $vojo;?>bildoj/touch-icon-76.png" rel="apple-touch-icon" sizes="76x76" />
		<link href="<?php echo $vojo;?>bildoj/touch-icon-120.png" rel="apple-touch-icon" sizes="120x120" />
		<link href="<?php echo $vojo;?>bildoj/touch-icon-152.png" rel="apple-touch-icon" sizes="152x152" />
		<link href="<?php echo $vojo;?>bildoj/touch-icon-180.png" rel="apple-touch-icon" sizes="180x180" />
		<!-- chrome -->
		<link href="<?php echo $vojo;?>bildoj/icon-hires.png" rel="icon" sizes="192x192" />
		<link href="<?php echo $vojo;?>bildoj/icon-normal.png" rel="icon" sizes="128x128" />

		<!-- infos pour facebook -->
		<meta property="og:url" content="https://ikurso.esperanto-france.org" />
		<meta property="og:title" content="iKurso" />
		<meta property="og:description" content="Ici, vous pourrez découvrir ce qu’est la langue internationale Espéranto et l’apprendre en suivant nos cours, à votre rythme. Pour mieux vous aider, l’association Espéranto-France vous propose un service de correction gratuit." />
		<meta property="og:site_name" content="iKurso" />
		<meta property="og:image" content="https://ikurso.esperanto-france.org/bildoj/ikurso-home.jpg" />
		<meta property="fb:app_id" content="150250432081223" />
		<meta property="og:locale" content="fr_FR" />
    </head>

    <body class="<?php echo $korpo;?>">	
<!-- google Analytics -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-1302916-3', 'auto');
  ga('send', 'pageview');

</script>
	    
		<!-- menus déroulants -->
		<ul id="menu_cours" class="dropdown-content">
			<li><a href="<?php echo $vojo;?>fr/cge/intro.php" class="primaire-texte moyen">Cours en 10 leçons</a></li>
			<li><a href="<?php echo $vojo;?>fr/gerda/index.php" class="primaire-texte moyen">Gerda malaperis</a></li>
			<li class="divider"></li>
			<li><a href="<?php echo $vojo;?>fr/elsxutoj.php" class="primaire-texte moyen">Téléchargements</a></li>
		</ul>
		<ul id="menu_aide" class="dropdown-content">
			<li><a href="<?php echo $vojo;?>helpo.php?section=enskribo" class="primaire-texte moyen">Comment s’inscrire&nbsp;?</a></li>
			<li><a href="<?php echo $vojo;?>helpo.php?section=kurso" class="primaire-texte moyen">Comment suivre le cours&nbsp;?</a></li>
			<li><a href="<?php echo $vojo;?>helpo.php?section=kajposte" class="primaire-texte moyen">Que faire après le cours&nbsp;?</a></li>
			<li><a href="<?php echo $vojo;?>helpo.php?section=kielskribi" class="primaire-texte moyen">Comment écrire en espéranto&nbsp;?</a></li>
			<li class="divider"></li>
			<li><a href="<?php echo $vojo;?>kiujniestas.php" class="primaire-texte moyen">Qui sommes-nous&nbsp;?</a></li>
			<li><a href="<?php echo $vojo;?>helpo.php?section=kielhelpi" class="primaire-texte moyen">Comment nous aider&nbsp;?</a></li>
			<li><a href="<?php echo $vojo;?>reago.php" class="primaire-texte moyen">Nous contacter</a></li>
		</ul>

		<!-- fenêtre modale connexion -->
		<div id="konektigxi" class="modal">
			<div class="modal-content">
				<h4 class="primaire-texte texte-moyen">Connexion</h4>
				<div id="konektigxi_parto1">
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
				<div id="konektigxi_parto2" class="hide">
					<p class="chapo">Le message a bien été renvoyé !</p>
					<p>Pour activer votre compte, veuillez cliquer sur le lien se trouvant dans le message électronique que nous venons de vous envoyer.<br>
				Si vous ne le trouvez pas, vérifiez s’il n’est pas dans votre courrier indésirable.<br>
				Dernière possibilité, il est possible que vous ayez fait une erreur en tapant votre adresse e-mail, vous pouvez <a href="<?php echo $vojo;?>reago.php">contacter un administrateur</a> qui vérifiera votre inscription.</p>
				</div>
				<p class="noto hide-on-small-only">Pour toute question relative à votre inscription, vous pouvez <a href="<?php echo $vojo;?>reago.php">contacter un administrateur</a></p> 
			</div>
			<div class="modal-footer">
				<div id="footer-konektigxi1">
					<a id="connection_button" class=" modal-action waves-effect waves-light btn-flat primaire-texte">SE CONNECTER</a><a id="aperigi_novigi_pasvorton_button" class=" modal-action waves-effect waves-light btn-flat primaire-texte">Identifiant ou mot de passe oublié</a><a id="sendi_denove_aktivigilo_button" class=" modal-action hide waves-effect waves-light btn-flat primaire-texte">RENVOYER LE COURRIEL D'ACTIVATION</a>
				</div>
				<div id="footer-konektigxi2" class="hide">
					<a id="fermi_konektigxi_button" class="modal-action modal-close waves-effect waves-light btn primaire">Fermer</a>
				</div>
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
				    	<p id="helpo-retadreso" class="helpilo hide-on-input-message">Nous enverrons un message à cette adresse pour valider votre inscription.</p>
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
				Si vous n’avez rien reçu, vous pouvez <a href="<?php echo $vojo;?>reago.php">contacter un administrateur</a>.</p>

				</div>
			</div>
			<div class="modal-footer">
				<div id="footer-creer-compte">
					<a id="inscription_button" class="modal-action waves-effect waves-light btn-flat primaire-texte">CRÉER UN COMPTE</a>
				</div>
				<div id="footer-renvoyer-activation" class="hide">
					<a id="fermer_button" class="modal-action modal-close waves-effect waves-light btn primaire">Fermer</a>
					<!--a id="inscription2_button" class="modal-action waves-effect waves-light btn-flat primaire-texte">Renvoyer le courriel d’activation</a-->
				</div>
			</div>
		</div>	

		<!-- fenêtre modale tuto inscription -->
		<div id="tuto-inscription" class="modal">
			<div class="modal-content">
				<h4 class="primaire-texte texte-moyen">Comment créer un compte</h4>
				<div class="video-container">
					<iframe width="853" height="480" src="https://www.youtube.com/embed/geK1LfWVt9Y" allowfullscreen></iframe>
				</div>
			</div>
			<div id="tuto-footer" class="modal-footer">
				<a id="fermi_tuto_button" class="modal-action modal-close waves-effect waves-light-blue btn-flat primaire-texte">Fermer</a>
			</div>
		</div>

		<!-- fenêtre modale réinitialisation mot de passe -->
		<div id="novigi_pasvorton" class="modal">
			<div class="modal-content">
				<h4 class="primaire-texte">Réinitialiser son mot de passe, choisissez un nouveau mot de passe :</h4>
				<div id="novigi_pasvorton_parto1">
				<form>
					<div class="input-field">
						<input id="novigi_pasvorton_aktivigo" type="hidden" name="aktivigo" value="<?=$aktivigo?>"/>
						<input id="novigi_pasvorton_retadreso" type="hidden" name="retadreso" value="<?=$retadreso?>"/>
						<input id="novigi_pasvorton_pasvorto" type="password" class="validate">
						<label for="novigi_pasvorton_pasvorto">Nouveau mot de passe</label>
					</div>
				</form>
				</div>
				<div id="novigi_pasvorton_parto2" class="hide">
				<p class="chapo">Mot de passe modifié !</p>
					<p>Votre mot de passe a bien été réinitialisé.<br>
					Nous vous conseillons de vous reconnecter avec votre nouveau mot de passe pour permettre à votre navigateur de le mémoriser pour vous.</p>
				</div>
			</div>
			<div id="novigi_pasvorton_footer1" class="modal-footer">
				<a id="novigi_pasvorton_sendi_button" class=" modal-action waves-effect waves-light-blue btn-flat primaire-texte">RÉINITIALISER SON MOT DE PASSE</a>
			</div>
			<div id="novigi_pasvorton_footer2" class="modal-footer hide">
				<a id="novigi_pasvorton_fermi_button" class="modal-action modal-close waves-effect waves-light-blue btn-flat primaire-texte">Fermer</a>
			</div>
		</div>

		<!-- fenêtre modale pour envoie de nouveau mot de passe -->
		<div id="sendi_novan_pasvorton" class="modal">
			<div class="modal-content">
				<h4 class="primaire-texte">J'ai oublié mon mot de passe, je rentre mon adresse email pour avoir un nouveau mot de passe</h4>
				<div id="sendi_novan_pasvorton_parto1">
				<form>
					<div class="input-field">
						<input id="sendi_novan_pasvorton_retadreso" type="email" class="validate">
						<label for="sendi_novan_pasvorton_retadreso">Adresse email</label>
					</div>
				</form>
				</div>
				<div id="sendi_novan_pasvorton_parto2" class="hide">
				<p class="chapo">Un email a été envoyé !</p>
					<p>Pour pouvoir vous connecter de nouveau, veuillez cliquer sur le lien se trouvant dans le message électronique que nous venons de vous envoyer.<br>
					Ce lien vous permettra de choisir un nouveau mot de passe.<br>
				Si vous ne le trouvez pas, vérifiez s’il n’est pas dans votre courrier indésirable.<br>
				Si vous n’avez rien reçu, vous pouvez <a href="<?php echo $vojo;?>reago.php">contacter un administrateur</a>.</p>
				</div>
			</div>
			<div id="sendi_novan_pasvorton_footer1" class="modal-footer">
				<a id="sendi_novan_pasvorton_button" class=" modal-action waves-effect waves-light-blue btn-flat primaire-texte">RÉINITIALISER SON MOT DE PASSE</a>
			</div>
			<div id="sendi_novan_pasvorton_footer2" class="modal-footer hide">
				<a id="fermi_novan_pasvorton_button" class=" modal-action modal-close waves-effect waves-light-blue btn-flat primaire-texte">Fermer</a>
			</div>
		</div>			

		<!-- fenêtre modale menu utilisateur -->
		<ul id="uzantomenuo" class="dropdown-content">
			<li class="uzanto"><?php echo "<b>".$persono['enirnomo']."</b><br>".$persono['personnomo']." ".$persono['familinomo']."<br><em>".$persono['retadreso']."</em>";?></li>
			<li class="divider"></li>
			<li><a href="<?php echo $vojo;?>personinformoj.php" class="primaire-texte moyen">Mes données personnelles</a></li>
			<li><a href="<?php echo $vojo;?>eliri.php" class="primaire-texte moyen">Déconnexion</a></li>
		</ul>

		<div class="navbar-fixed">	
			<nav class="primaire">
				<div class="nav-wrapper">
					<a href="<?php echo $vojo;?>index.php" class="brand-logo" id="logo">iKurso</a>
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
						<li><a href="#!" class="btn-floating btn-large waves-effect waves-light primaire clair dropdown-button" data-activates="uzantomenuo"><i class="large material-icons">perm_identity</i></a></li>
<?php						
}
?>

					</ul>
					<ul class="right hide-on-med-and-down">
						<li><a href="<?php echo $vojo;?>kionova.php">QUOI DE NEUF ?</a></li>
						<li><a class="dropdown-button" href="#!" data-activates="menu_cours">COURS EN LIGNE<i class="material-icons right">arrow_drop_down</i></a></li>
						<li><a href="<?php echo $vojo;?>butiko.php">BOUTIQUE</a></li>
						<li><a class="dropdown-button" href="#!" data-activates="menu_aide">INFORMATIONS PRATIQUES<i class="material-icons right">arrow_drop_down</i></a></li>
					</ul>
				</div>
			</nav>
		</div>
		<!-- hamburger menu -->
		<div class="side-nav" id="nav-mobile">
			<ul>
				<li class="entete">COURS EN LIGNE</li>
				<li class="retrait"><a href="<?php echo $vojo;?>fr/cge/intro.php">Cours en 10 leçons</a></li>
				<li class="retrait"><a href="<?php echo $vojo;?>fr/gerda/index.php">Gerda malaperis</a></li>
				<li class="divider"></li>
				<li class="retrait"><a href="<?php echo $vojo;?>helpo.php?temo=elsxutoj">Téléchargements</a></li>
				<li class="divider"></li>
				<li class="entete">INFORMATIONS PRATIQUES</li>
				<li class="retrait"><a href="<?php echo $vojo;?>helpo.php?section=enskribo">Comment s’inscrire&nbsp;?</a></li>
				<li class="retrait"><a href="<?php echo $vojo;?>helpo.php?section=kurso">Comment suivre le cours&nbsp;?</a></li>
				<li class="retrait"><a href="<?php echo $vojo;?>helpo.php?section=kajposte">Que faire après le cours&nbsp;?</a></li>
				<li class="retrait"><a href="<?php echo $vojo;?>helpo.php?section=kielskribi">Comment écrire en espéranto&nbsp;?</a></li>
				<li class="divider"></li>
				<li class="retrait"><a href="<?php echo $vojo;?>kiujniestas.php">Qui sommes-nous&nbsp;?</a></li>
				<li class="retrait"><a href="<?php echo $vojo;?>helpo.php?section=kielhelpi">Comment nous aider&nbsp;?</a></li>
				<li class="retrait"><a href="<?php echo $vojo;?>reago.php">Nous contacter</a></li>
				<li class="divider"></li>
				<li><a href="<?php echo $vojo;?>kionova.php">Quoi de neuf&nbsp;?</a></li>
				<li class="divider"></li>
				<li><a href="<?php echo $vojo;?>butiko.php">Boutique</a></li>
			</ul>
		</div>

	<main>
	<form id="chefa_form"> <!-- on englobe chaque page d'un formulaire principal -->