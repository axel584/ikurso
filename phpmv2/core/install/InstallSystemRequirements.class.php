<?php
/* 
 * phpMyVisites : website statistics and audience measurements
 * Copyright (C) 2002 - 2006
 * http://www.phpmyvisites.net/ 
 * phpMyVisites is free software (license GNU/GPL)
 * Authors : phpMyVisites team
*/

// $Id: InstallSystemRequirements.class.php 29 2006-08-18 07:35:21Z matthieu_ $


require_once INCLUDE_PATH."/core/include/InstallModule.class.php";

class InstallSystemRequirements extends InstallModule
{
    var $viewTemplate = "install/system_requirements.tpl";
	
	var $stepNumber = 2;
    
	function InstallSystemRequirements()
	{
		parent::InstallModule();
	}

	function process()
	{
		$infos = getSystemInformation( $this->tpl );
		$this->tpl->assign("server", $infos);	
		
		$error = false;
		
		foreach($infos['dirs'] as $value)
		{
			if(!$value) $error = true;
		}
	
		$this->tpl->assign("show_next_step", !$error);
		$this->tpl->assign("display_information", false);
	}
}
?>