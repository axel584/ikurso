<?php
/* 
 * phpMyVisites : website statistics and audience measurements
 * Copyright (C) 2002 - 2006
 * http://www.phpmyvisites.net/ 
 * phpMyVisites is free software (license GNU/GPL)
 * Authors : phpMyVisites team
*/

// $Id: AdminServerInfo.class.php 29 2006-08-18 07:35:21Z matthieu_ $



require_once INCLUDE_PATH."/core/include/AdminModule.class.php";

class AdminServerInfo extends AdminModule
{
    var $viewTemplate = "admin/server_info.tpl";
    
	function AdminServerInfo()
	{
		parent::AdminModule();
	}

	
	function process()
	{	
				
		$infos = getSystemInformation( $this->tpl );
		
		$this->tpl->assign("server", $infos);	
		$this->tpl->assign("display_information", true);		
	}
}
?>