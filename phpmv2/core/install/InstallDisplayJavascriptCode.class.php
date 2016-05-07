<?php
/* 
 * phpMyVisites : website statistics and audience measurements
 * Copyright (C) 2002 - 2006
 * http://www.phpmyvisites.net/ 
 * phpMyVisites is free software (license GNU/GPL)
 * Authors : phpMyVisites team
*/

// $Id: InstallDisplayJavascriptCode.class.php 29 2006-08-18 07:35:21Z matthieu_ $


require_once INCLUDE_PATH."/core/include/InstallModule.class.php";

class InstallDisplayJavascriptCode extends InstallModule
{
    var $viewTemplate = "install/display_javascript_code.tpl";
    
	var $stepNumber = 8;
	
	function InstallDisplayJavascriptCode()
	{
		parent::InstallModule();
	}

	function process()
	{
		$this->tpl->assign('js_code', getJavascriptCode( 1 ));		
		$this->tpl->assign("show_next_step", true);
	}
}
?>