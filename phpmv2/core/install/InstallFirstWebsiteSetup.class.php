<?php
/* 
 * phpMyVisites : website statistics and audience measurements
 * Copyright (C) 2002 - 2006
 * http://www.phpmyvisites.net/ 
 * phpMyVisites is free software (license GNU/GPL)
 * Authors : phpMyVisites team
*/

// $Id: InstallFirstWebsiteSetup.class.php 29 2006-08-18 07:35:21Z matthieu_ $


require_once INCLUDE_PATH."/core/include/InstallModule.class.php";
require_once INCLUDE_PATH."/core/forms/FormSiteGeneral.class.php";

class InstallFirstWebsiteSetup extends InstallModule
{
    var $viewTemplate = "install/first_website_setup.tpl";
	
	var $stepNumber = 7;
    
	function InstallFirstWebsiteSetup()
	{
		parent::InstallModule();
	}

	function process()
	{
		
		$next_step = false;
		
		$totalSites = Site::getTotalSites();
		if($totalSites > 0)
		{		
			Request::redirectToModule('install_display_javascript_code');	
		}
		
		
		$form = new FormSiteGeneral( $this->tpl, null, Request::getCurrentUrl() . "&action=add");
	
		$done = $form->process();
				
		if($done)
		{
			$this->tpl->assign("img_phpmv", getCountImgHtml( $form->getSubmitValue('form_url'), $form->getSubmitValue('form_name')));
		
			$next_step = true;
		}
		
		$this->tpl->assign("show_next_step", $next_step);
	}
}
?>