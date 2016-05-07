<?php
/* 
 * phpMyVisites : website statistics and audience measurements
 * Copyright (C) 2002 - 2006
 * http://www.phpmyvisites.net/ 
 * phpMyVisites is free software (license GNU/GPL)
 * Authors : phpMyVisites team
*/

// $Id: ViewPages.class.php 29 2006-08-18 07:35:21Z matthieu_ $


require_once INCLUDE_PATH."/core/include/ViewModule.class.php";

class ViewPages extends ViewModule
{
    var $viewTemplate = "common/viewpages_all.tpl";
        
	function ViewPages( )
	{
		parent::ViewModule( "pages");
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