<?
echo "<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.01 Transitional//EN\">\n";
include "util.php";
$rajto=$_GET["rajto"];
$retadreso=$_GET["retadreso"];
?>
<html>
<head>
<title>ikurso</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link type="text/css" rel="stylesheet" href="style/bleu.css" title="helpo">

</head>
<body class="popup">
<div class="rakonto">
	<h3>Quel syst&egrave;me choisir pour l'envoi des messages ?</h3>
	<p>
	Nous vous proposons deux syst&egrave;mes pour l'envoi des exercices :</p>
		<p><strong>- lettres accentu&eacute;es :</strong>
		<? if (($rajto=="K")||($rajto=="A")) { ?>
		lorsque vos &eacute;l&egrave;ves vous enverront leurs devoirs, les messages contiendront les lettres
		accentu&eacute;es de l'esp&eacute;ranto.
		<? } else { ?>
		lorsque vous enverrez vos exercices &agrave; votre correcteur, les messages contiendront les lettres
		accentu&eacute;es de l'esp&eacute;rant. 
		<? } ?>
		C'est la m&eacute;thode que nous conseillons.</p>
		<p><strong>- syst&egrave;me en x :</strong>
		si le syst&egrave;me que vous utilisez ne vous permet pas de voir correctement les lettres accentu&eacute;es
		dans les messages, alors nous vous conseillons de choisir le syst&egrave;me en x.</p>

	<p><strong>Si vous ne savez pas quel syst&egrave;me choisir</strong>, nous vous proposons de faire un petit test : <br>
	<a href="#" onClick="window.open('tipohelpo2.php?retadreso=<?=$retadreso;?>','test','top=150,left=150,width=400,height=50');">
	cliquez ici pour recevoir un message de test</a>. 
	Lorsque vous l'aurez re&ccedil;u lisez
	bien les instructions contenues dans ce message pour terminer le test.</p>

	<h3>Remarques :</h3>
	<ul>
		<? if (($rajto=="K")||($rajto=="A")) { ?>
		<li>si vous avez choisi le syst&egrave;me des lettres accentu&eacute;es pour les exercices envoy&eacute;s 
		par vos &eacute;l&egrave;ves,
		mais qu'un de vos &eacute;l&egrave;ves pr&eacute;f&egrave;re la m&eacute;thode en -x : alors 
		les exercices qui seront envoy&eacute;s par cet
		&eacute;l&egrave;ve utiliseront ce dernier syst&egrave;me</li>
		<? } else { ?>
		<li>si vous avez choisi le syst&egrave;me des lettres accentu&eacute;es pour envoyer vos devoirs, mais que votre 
		correcteur pr&eacute;f&egrave;re la m&eacute;thode en -x : alors vos exercices seront envoy&eacute;s 
		avec ce dernier syst&egrave;me</li>
		<? } ?>
		<li>le syst&egrave;me choisi pour l'envoi des messages est ind&eacute;pendant de vos 
		pr&eacute;f&eacute;rences pour l'affichage &agrave; l'&eacute;cran. Vous pouvez donc visualiser les 
		pages internet avec les accents et choisir la m&eacute;thode en -x pour l'envoi des exercices. 
		Inversement, vous pouvez choisir la m&eacute;thode en -x pour l'affichage &agrave; l'&eacute;cran 
		mais choisir le syst&egrave;me avec les lettres accentu&eacute;es pour l'envoi des messages</li>
	</ul>
	
	<h3>Plus d'infos</h3>
	<p>Pour plus d'informations sur les diff&eacute;rents syst&egrave;mes d'affichage des accents et 
	sur la fa&ccedil;on de
	taper les lettres accentu&eacute;es, veuillez vous reporter &agrave; la
	<a href="#" onClick="window.opener.location.href='helpo.php';window.close();"> page d'aide</a>.
	</p>

	<p class="dektre">
		<input class="bouton" type="button" value="<? echo $lgv_fermi; ?>" onClick="window.close();">
	</p>
</div>
</body>
</html>