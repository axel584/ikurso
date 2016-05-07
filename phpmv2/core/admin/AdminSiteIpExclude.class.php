<?php
/* 
 * phpMyVisites : website statistics and audience measurements
 * Copyright (C) 2002 - 2006
 * http://www.phpmyvisites.net/ 
 * phpMyVisites is free software (license GNU/GPL)
 * Authors : phpMyVisites team
*/

// $Id: AdminSiteIpExclude.class.php 29 2006-08-18 07:35:21Z matthieu_ $


require_once INCLUDE_PATH."/core/include/AdminModule.class.php";
require_once INCLUDE_PATH."/core/forms/FormSiteIpExclude.class.php";

class AdminSiteIpExclude extends AdminModule
{
    var $viewTemplate = "admin/site_ip_exclude.tpl";
    
	function AdminSiteIpExclude()
	{
		parent::AdminModule();
		
	}

	function process()
	{
		$siteAdmin = $this->needASiteAdminSelected();
		
		if($siteAdmin)
		{
			$form = new FormSiteIpExclude( $this->tpl, $siteAdmin );
	
			$done = $form->process();
						
			if($done)
			{
				$this->setMessage( );
			}
		}
		$this->site->generateFiles();
	}
}
?>