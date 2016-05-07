<?php
/* 
 * phpMyVisites : website statistics and audience measurements
 * Copyright (C) 2002 - 2006
 * http://www.phpmyvisites.net/ 
 * phpMyVisites is free software (license GNU/GPL)
 * Authors : phpMyVisites team
*/

// $Id: Logout.class.php 29 2006-08-18 07:35:21Z matthieu_ $

class Logout extends Module
{
	var $viewTemplate = '';
	
	function Logout()
	{
		parent::Module();
	}
	
	function showAll()
	{
	}
	
	function init($request)
	{
	    parent::init($request);
		
		$ck = new Cookie( COOKIE_NAME_SESSION );

		$ck->delete();
		
		Request::redirectToModule('index');
	}
}
?>