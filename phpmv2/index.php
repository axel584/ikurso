<?php
/* 
 * phpMyVisites : website statistics and audience measurements
 * Copyright (C) 2002 - 2006
 * http://www.phpmyvisites.net/ 
 * phpMyVisites is free software (license GNU/GPL)
 * Authors : phpMyVisites team
*/

// $Id: index.php 29 2006-08-18 07:35:21Z matthieu_ $

define('INCLUDE_PATH', '.');
define('PROFILING', false ); // valid for XDEBUG 1.x // XDEBUG 2.x generates .out to be analysed with KcacheGrind or WinCacheGrind
@set_time_limit(0);
@error_reporting(E_ALL);

if(PROFILING)
{
	xdebug_start_profiling();
}

require_once INCLUDE_PATH . '/core/include/PmvConfig.class.php';
require_once INCLUDE_PATH . '/core/include/ApplicationController.php';

ApplicationController::init();

if(	Request::moduleIsNotAStrangeModule() )
	printTime('EOF', true);

if(PROFILING)
{
	xdebug_dump_function_profile(1);
}
?>
