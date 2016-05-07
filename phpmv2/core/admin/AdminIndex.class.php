<?php
/* 
 * phpMyVisites : website statistics and audience measurements
 * Copyright (C) 2002 - 2006
 * http://www.phpmyvisites.net/ 
 * phpMyVisites is free software (license GNU/GPL)
 * Authors : phpMyVisites team
*/

// $Id: AdminIndex.class.php 29 2006-08-18 07:35:21Z matthieu_ $



require_once INCLUDE_PATH."/core/include/AdminModule.class.php";

class AdminIndex extends AdminModule
{
    var $viewTemplate = "admin/index.tpl";
    
	function AdminGeneralConfig()
	{
		parent::AdminModule();
	}

	
	function process()
	{				
	}
}
?>