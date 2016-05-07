<?php
/* 
 * phpMyVisites : website statistics and audience measurements
 * Copyright (C) 2002 - 2006
 * http://www.phpmyvisites.net/ 
 * phpMyVisites is free software (license GNU/GPL)
 * Authors : phpMyVisites team
*/

// $Id: ListLogos.class.php 29 2006-08-18 07:35:21Z matthieu_ $


class ListLogos extends Module
{
	var $viewTemplate = "common/list_logos.tpl";
	
	function ListLogos()
	{
		parent::Module();
	}
	
	function showAll()
	{
		$this->tpl->setMainTemplate('common/list_logos.tpl');
		$this->tpl->assign("content", getDisplayLogosListing());
		$this->display();
	}
}
?>