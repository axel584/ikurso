<?php
// ATTENTION CE FICHIER EST UTILISE POUR L'INTERFACE DES CORRECTEURS !!!!!!!!!!!!!!!!!!!!
// ---------------------------------------------------------------------------------------
//include_once $vojo."util.php";
if (!isset($vojo)) { $vojo="";}
// attention, cette variable est également calculé dans utilf.php
$url=isset($_SERVER['REQUEST_URI'])?strtok($_SERVER['REQUEST_URI'],'?'):"";
$pagxo=explode("/", $_SERVER["SCRIPT_NAME"]);
$subjekto=$pagxo[count($pagxo)-1];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<title>ikurso: <?php echo $pagxtitolo;?>/<?php echo $subjekto;?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="ikurso, cours, esperanto, cours d'esperanto, esperanto-jeunes" />
<link href="http://esperanto-jeunes.org/favicon.ico" type="image/ico" rel="icon" />
<link type="text/css" rel="stylesheet" href="<?php echo $vojo;?>style/bleu.css" title="bleu" />

</head>
<body>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-1302916-3', 'auto');
  ga('send', 'pageview');

</script>
<?php if ($persono_id!="") { ?>
	<div id="menuo">
		<table>
			<tr><td class="unua">
					<h1><?php echo $enirnomo;?></h1>
					<p><a href="<?php echo $vojo."eliri.php"?>">Fermer la session</a></p>
				</td>
				<td>
					<h2>Personnel</h2>
					<p><a href="<?php echo $vojo."personinformoj.php";?>">Donn&eacute;es personnelles</a></p>
				</td>
			<?php if ($rajto=="K" || $rajto=="A"){ ?>
				<td>
					<h2>Correcteur</h2>
					<p><a href="<?php echo $vojo."statLauxKategorio.php";?>">Statistiques</a></p>
					<p><a href="<?php echo $vojo."gvidilo.php";?>">Guide du correcteur</a></p>
					<p><a href="<?php echo $vojo."korektado.php";?>">Corrigé type</a></p>
					<p><a href="<?php echo $vojo."miajlernantoj.php";?>">Mes &eacute;l&egrave;ves</a></p>
				</td>
			<?php } ?>
			<?php if ($rajto=="I"){ ?>
				<td class="elemento">
					<h2>Administrateur</h2>
					<p><a href="<?php echo $vojo."statLauxKategorio.php";?>">Statistiques</a></p>
					<p><a href="<?php echo $vojo."stirpanelo.php";?>">G&eacute;rer les utilisateurs</a></p>
				</td>
			<?php } ?>
			<?php if ($rajto=="A"){ ?>
				<td class="elemento">
					<h2>Administrateur</h2>
					<p><a href="<?php echo $vojo."stirpanelo.php";?>">Panneau de contr&ocirc;le</a></p>
					<p><a href="<?php echo $vojo."administri.php";?>">G&eacute;rer les utilisateurs</a></p>
				</td>
			<?php } ?>
			</tr>
		</table>
	</div>
<?php } ?>
<!-- 
*
* page = menu lateral + onglets (facultatifs) + contenu 
*
-->
<div id="pagxo">
	<div id="subpagxo">
		<div id="pagxmenuo">
			<?php 
			//
			// pour un correcteur : afficher la table avec le nombre d'eleves
			//
			if (($rajto=="K")||($rajto=="A")) {
				echo "<h2><a href=\"sxangxiNBlernantoj.php\">Mes &eacute;l&egrave;ves</a></h2>";
			?>
			<table title="cliquez ici pour modifier le nombre de vos &eacute;l&egrave;ves">
				<thead>
					<tr><td colspan="3"><a href="sxangxiNBlernantoj.php">
					Modifier le nombre de mes &eacute;l&egrave;ves ?</a></td></tr>
					<tr>
						<td>cours</td>
						<td>&eacute;l&egrave;ves<br/>en cours</td>
						<td>nombre<br/>maximum</td>
					</tr>
				</thead>
				<tbody>
				<?php kalkuliStudantojn(); ?>
				</tbody>
			</table>
			<?php } ?>
			<?php if ($persono_id=="") {
			//
			// menu si l'utilisateur n'est pas connecte
			//
			?>
				<h2>Déjà inscrit ?</h2>
				<ul class="niv0">
					<form name="eniro" action="<?php echo $vojo; ?>eniri.php" method="post">
					<p class="klarigo dekstre">Identifiant : 
					<input type="text" name="enirnomo" size="12">&nbsp;</p>
					<p class="klarigo dekstre">Mot de passe :
					<input type="password" name="pasvorto" size="12">&nbsp;</p>
					<p class="dekstre"><input class="bouton" type="submit" name="Submit" value="&nbsp;&nbsp;Entrer&nbsp;&nbsp;">&nbsp;</p>
					</form>
					<li class="ligo">
						<a href="#" title="Cliquez ici pour retrouver votre identifiant ou votre mot de passe" onClick="window.open('<?php echo $vojo;?>pasvortoforgesita.php','','resizable=no,scrollbars=no,location=no,top=100,left=100,width=400,height=150');" >
						Mot de passe oubli&eacute;</a>
					</li>
					<li class="lasta">
						<a href="<?php echo $vojo; ?>/fr/intro.php?temo=enskribo">Comment s&rsquo;inscrire ?</a>
					</li>
				</ul>
			<?php } ?>
			<h2>Cours</h2>
			<ul class="niv1">
				<li><a href="<?php echo $vojo; ?>fr/cge/intro.php?temo=intro">Cours en dix leçons</a></li>
				<li><a href="<?php echo $vojo;?>fr/gerda/index.php">Gerda malaperis</a></li>
				<li><a href="<?php echo $vojo;?>fr/gerda/lasu00.php">Lasu min paroli plu!</a></li>					 
				<li><a href="<?php echo $vojo;?>eo/ppp/antauxklarigo.php">Paŝoj al Plena Posedo</a></li>					 
				<li class="lasta"><a href="<?php echo $vojo;?>fr/elsxutoj.php">Téléchargements</a></li>					 
			</ul>

		</div> <!-- pagxmenuo -->
		<div class="stylenavbar">
		</div>	
	
		<h1><?php echo $pagxtitolo;?></h1>
		<!-- decommenter ceci pour afficher un message en cas de travaux sur le site
		<div style="border:2px solid red;background:white">
		<p class="eraro">
		Samedi 16 juin 2007</p>
		<p class="eraro">Ce site est en travaux. Tant que ce message est affiché, veuillez de ne pas envoyer vos exercices. Merci de revenir dans quelques heures.
		</p>
		</div>
		-->

	
