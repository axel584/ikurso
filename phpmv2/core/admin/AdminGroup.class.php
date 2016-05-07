<?php
/* 
 * phpMyVisites : website statistics and audience measurements
 * Copyright (C) 2002 - 2006
 * http://www.phpmyvisites.net/ 
 * phpMyVisites is free software (license GNU/GPL)
 * Authors : phpMyVisites team
*/

// $Id: AdminGroup.class.php 29 2006-08-18 07:35:21Z matthieu_ $


require_once INCLUDE_PATH."/core/include/AdminModule.class.php";
require_once INCLUDE_PATH."/core/forms/FormGroup.class.php";
require_once INCLUDE_PATH . "/core/include/UserConfigDb.class.php";	

class AdminGroup extends AdminModule
{
    var $viewTemplate = "admin/group.tpl";
    
	function AdminGroup()
	{
		parent::AdminModule();
	}

	function process()
	{				
		$siteAdmin = $this->needASiteAdminSelected();
		
		if($siteAdmin)
		{
			$form = new FormGroup( $this->tpl, $siteAdmin );
	
			$done = $form->process();
				
			if($done)
			{
				$this->setMessage( );
			}
		}
	}
}
?>