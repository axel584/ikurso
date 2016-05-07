<?php
/* 
 * phpMyVisites : website statistics and audience measurements
 * Copyright (C) 2002 - 2006
 * http://www.phpmyvisites.net/ 
 * phpMyVisites is free software (license GNU/GPL)
 * Authors : phpMyVisites team
*/

// $Id: InstallModule.class.php 29 2006-08-18 07:35:21Z matthieu_ $


class InstallModule extends Module
{
	var $partName;
	
	function InstallModule()
	{		
		$list[] = "install_welcome";
		$list[] = "install_system_requirements";
		$list[] = "install_database_setup";
		$list[] = "install_create_tables";
		$list[] = "install_general_setup";
		$list[] = "install_create_config_file";
		$list[] = "install_first_website_setup";
		$list[] = "install_display_javascript_code";
		$list[] = "install_finish";
		
		$this->steps = $list;

		$this->stepTotal = sizeof($list);
		
		parent::Module();
	}
	
	function init($request)
	{
	    parent::init($request);
		$this->tpl->caching = 0;
		
	}
	
	/**
	 * default display method for all views
	 * 
	 * @return void
	 */
	function showAll()
	{	
		
		$this->process();
		
		$this->tpl->assign("step_number", $this->stepNumber);
		$this->tpl->setMainTemplate('install/structure.tpl');
		$this->tpl->assign( "steps", $this->steps);
		
		$done = round(($this->stepNumber - 1) * 100 / ($this->stepTotal-1));
	
		$this->tpl->assign("percent_done", $done);
		$this->tpl->assign("percent_to_do", 100 - $done);
		
		if($this->stepNumber < $this->stepTotal)
			$this->tpl->assign("next_module_name", $this->steps[$this->stepNumber] );
		
		$this->display();
	}

	
	function setMessage(  )
	{
		$this->tpl->template = "admin/message.tpl";
		$this->tpl->assign("message", $GLOBALS['lang']['generique_done']);
	}
}
?>
