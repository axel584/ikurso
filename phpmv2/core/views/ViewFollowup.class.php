<?php
/* 
 * phpMyVisites : website statistics and audience measurements
 * Copyright (C) 2002 - 2006
 * http://www.phpmyvisites.net/ 
 * phpMyVisites is free software (license GNU/GPL)
 * Authors : phpMyVisites team
*/

// $Id: ViewFollowup.class.php 29 2006-08-18 07:35:21Z matthieu_ $


require_once INCLUDE_PATH."/core/include/ViewModule.class.php";

class ViewFollowup extends ViewModule
{
    var $viewTemplate = "common/viewfollowup_all.tpl";
    
	function ViewFollowup()
	{
		parent::ViewModule("followup");
	}
	
	function process()
	{
		$this->tpl->assign('level', 0);
				
		$methods = array(
			"zoom" => array('')
		);
		
		$this->getDataMethod( $methods );
	}	
}
?>