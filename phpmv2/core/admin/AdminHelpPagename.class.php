<?php
/* 
 * phpMyVisites : website statistics and audience measurements
 * Copyright (C) 2002 - 2006
 * http://www.phpmyvisites.net/ 
 * phpMyVisites is free software (license GNU/GPL)
 * Authors : phpMyVisites team
*/

// $Id: AdminSiteJavascriptCode.class.php 29 2006-08-18 07:35:21Z matthieu_ $


require_once INCLUDE_PATH."/core/include/AdminModule.class.php";

class AdminHelpPagename extends AdminModule
{
    var $viewTemplate = "admin/help_pagename.tpl";
    
	function AdminHelpPagename()
	{
		parent::AdminModule();		
	}

	function process()
	{
		$this->tpl->assign("PREFIX_FILES", PREFIX_FILES);
		$this->tpl->assign("PHPMV_URL", PHPMV_URL);
	}
}
?>