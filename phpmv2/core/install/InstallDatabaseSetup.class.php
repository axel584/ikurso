<?php
/* 
 * phpMyVisites : website statistics and audience measurements
 * Copyright (C) 2002 - 2006
 * http://www.phpmyvisites.net/ 
 * phpMyVisites is free software (license GNU/GPL)
 * Authors : phpMyVisites team
*/

// $Id: InstallDatabaseSetup.class.php 29 2006-08-18 07:35:21Z matthieu_ $


require_once INCLUDE_PATH."/core/include/InstallModule.class.php";
require_once INCLUDE_PATH."/core/forms/FormDbConfig.class.php";

class InstallDatabaseSetup extends InstallModule
{
    var $viewTemplate = "install/database_setup.tpl";
	
	var $stepNumber = 3;
    
	function InstallDatabaseSetup()
	{
		parent::InstallModule();
	}

	function process()
	{
		
		$next_step = false;
		
		$form = new FormDbConfig( $this->tpl );

		$done = $form->process();
				
		if($done && empty($GLOBALS['header_error_message_tpl']))
		{
			$next_step = true;
		}
		
		$this->tpl->assign("show_next_step", $next_step);
	}
}
?>