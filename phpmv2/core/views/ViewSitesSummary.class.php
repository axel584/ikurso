<?php
/* 
 * phpMyVisites : website statistics and audience measurements
 * Copyright (C) 2002 - 2006
 * http://www.phpmyvisites.net/ 
 * phpMyVisites is free software (license GNU/GPL)
 * Authors : phpMyVisites team
*/

// $Id: ViewSitesSummary.class.php 29 2006-08-18 07:35:21Z matthieu_ $


require_once INCLUDE_PATH."/core/include/ViewModule.class.php";

class ViewSitesSummary extends ViewModule
{
    var $viewTemplate = "common/viewsitessummary_all.tpl";
    
	function ViewSitesSummary()
	{
		parent::ViewModule( "sitessummary" );
	}
	
	function process()
	{
		$methods = array(
			"statistics" => array(),
		);
		$this->getDataMethod( $methods );
	}	
}
?>