<?php
/* 
 * phpMyVisites : website statistics and audience measurements
 * Copyright (C) 2002 - 2006
 * http://www.phpmyvisites.net/ 
 * phpMyVisites is free software (license GNU/GPL)
 * Authors : phpMyVisites team
*/

// $Id: ViewFrequency.class.php 29 2006-08-18 07:35:21Z matthieu_ $


require_once INCLUDE_PATH."/core/include/ViewModule.class.php";

class ViewFrequency extends ViewModule
{
    var $viewTemplate = "common/viewfrequency_all.tpl";
    
	function ViewFrequency()
	{
		parent::ViewModule( "visits");
	}
	
	function process()
	{
		$methods = array(
		      "frequencystatistics" => array()
		);
		
		$this->getDataMethod( $methods );
	}
}
?>
