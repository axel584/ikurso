<?php
/* 
 * phpMyVisites : website statistics and audience measurements
 * Copyright (C) 2002 - 2006
 * http://www.phpmyvisites.net/ 
 * phpMyVisites is free software (license GNU/GPL)
 * Authors : phpMyVisites team
*/

// $Id: ViewVisits.class.php 29 2006-08-18 07:35:21Z matthieu_ $


require_once INCLUDE_PATH."/core/include/ViewModule.class.php";

class ViewVisits extends ViewModule
{
    var $viewTemplate = "common/viewvisits_all.tpl";
    
    
	function ViewVisits()
	{
		parent::ViewModule("visits");
	}
	
	function process()
	{
		// TEST GRAPHS	
		/*
		$data = $this->data->getSitesSummaryStatisticsGraph();
		printDebug($data);
		$n = 6;
		$m = 'a';
		$a = INCLUDE_PATH . "/datas/g".$n.$m.".php";
		saveConfigFile($a, $data , 'data');
		exit;
		*/
				
		$methods = array(
		"statistics" => array(),
		"periodsummaries" => array(8)
		);
		$this->getDataMethod( $methods );
	}
	
}
?>
