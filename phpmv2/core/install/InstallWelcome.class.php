<?php
/* 
 * phpMyVisites : website statistics and audience measurements
 * Copyright (C) 2002 - 2006
 * http://www.phpmyvisites.net/ 
 * phpMyVisites is free software (license GNU/GPL)
 * Authors : phpMyVisites team
*/

// $Id: InstallWelcome.class.php 29 2006-08-18 07:35:21Z matthieu_ $


require_once INCLUDE_PATH."/core/include/InstallModule.class.php";

class InstallWelcome extends InstallModule
{
    var $viewTemplate = "install/welcome.tpl";
    
	var $stepNumber = 1;
	
	function InstallWelcome()
	{
		parent::InstallModule();
	}

	function process()
	{
		if( ereg( '.free.fr/', Request::getCurrentCompleteUrl()) )
		{
			print("<h2>Attention ! Les utilisateurs de Free.fr doivent faire une opération très particulière pour faire fonctionner phpMyVisites, du fait des limitations techniques imposées par Free.fr.</h2>
			<p> Vous devez donc <u>OBLIGATOIREMENT</u> :</p>
			<ul><li>Créer un répertoire /include/ à la racine de votre site free</li>
			<li>Uploader dans ce nouveau répertoire vide <u>le contenu du répertoire /libs/ de phpmyvisites</u>, une fois phpmyvisites dézippé sur votre ordinateur</li>
			<li>Vous ne devez donc pas changer votre phpmyvisites que vous avez normalement déjà uploadé sur le serveur. Vous devez seulement réuploader les fichiers et répertoires contenus dans le répertoire /libs/ de phpmyvisites. Ces fichiers sont : PEAR.php, Cache/, QuickForm/, HTML/, XML/ (les autres sont facultatifs).</li>
			<li>A la fin de l'opération, vous devez donc avoir à la racine de votre site Free : <br>/include/PEAR.php<br> /include/XML/<br> /include/HTML/<br> etc.
			</ul>
			
			<p> En cas de problèmes consultez les forums de phpMyVisites mais surtout suivez scrupuleusement ces indications et tout se passera très bien !</p>
			
			
			<p><b>If you need these explanations in english, please ask in phpmyvisites forums</b></p>");
		}
		$this->tpl->assign("show_next_step", true);
	}
}
?>