<?php
/* 
 * phpMyVisites : website statistics and audience measurements
 * Copyright (C) 2002 - 2006
 * http://www.phpmyvisites.net/ 
 * phpMyVisites is free software (license GNU/GPL)
 * Authors : phpMyVisites team
*/

// $Id: ViewSettings.class.php 29 2006-08-18 07:35:21Z matthieu_ $


require_once INCLUDE_PATH."/core/include/ViewModule.class.php";
require_once INCLUDE_PATH."/core/views/ViewDataArray.class.php";

/**
 * View class 
 * displays all settings datas (Browsers, OS, plugins, etc...)
 * 
 */
class ViewSettings extends ViewModule
{
    var $viewTemplate = "common/viewsettings_all.tpl";
    
    
	function ViewSettings( )
	{
		parent::ViewModule( "settings");
	}
	
	function process()
	{
		$o_mod = new ViewDataArray( null );
		$o_mod->init( $this->request);//, $this->tpl);
		$a_dataToLoad = array(
				'config' 				=> 'settingsconfig',
				'os' 					=> 'settingsos',
				'osinterest' 			=> 'settingsosinterest',
				'browserstype' 			=> 'settingsbrowserstype',
				'browsers' 				=> 'settingsbrowsers',
				'browsersinterest' 		=> 'settingsbrowsersinterest',
				'plugins' 				=> 'settingsplugins',
				'resolutions' 			=> 'settingsresolutions',
				'resolutionsinterest' 	=> 'settingsresolutionsinterest',
				'normalwidescreen' 		=> 'settingsnormalwidescreen',
			);
			
		foreach($a_dataToLoad as $key => $value)
		{
			$this->tpl->assign( $key, $o_mod->showAll( $value , true , true));
		}
	    $ctrl =& ApplicationController::getInstance();
		$o_request =& $ctrl->getRequest();
		$o_request->setModuleName( 'view_settings' );
		
	}
}
?>