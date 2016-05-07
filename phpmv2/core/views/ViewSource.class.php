<?php
/* 
 * phpMyVisites : website statistics and audience measurements
 * Copyright (C) 2002 - 2006
 * http://www.phpmyvisites.net/ 
 * phpMyVisites is free software (license GNU/GPL)
 * Authors : phpMyVisites team
*/

// $Id: ViewSource.class.php 29 2006-08-18 07:35:21Z matthieu_ $


require_once INCLUDE_PATH."/core/include/ViewModule.class.php";
require_once INCLUDE_PATH."/core/views/ViewDataArray.class.php";

class ViewSource extends ViewModule
{
    var $viewTemplate = "common/viewsource_all.tpl";
    
	function ViewSource()
	{
		parent::ViewModule( "source" );
	}
	
	function process()
	{
		// HTML area coords
		$this->HTMLAreaLocation = array(
			'amn' => "255,38,234,81,166,151,94,208,54,189,34,86,2,101,17,28,219,17,253,35",
			'ams' => "124,187,90,215,138,353,163,351,158,319,215,244,140,207,147,197,121,189",
			'eur' => "306,69,315,117,342,160,341,165,283,172,281,163,243,169,244,113,226,99,226,88,237,88,252,103,306,70,306,69",
			'afr' => "238,174,286,163,325,174,343,212,367,210,350,285,297,302,280,275,277,242,269,227,240,229,225,200,245,171",
			'oce' => "458,278,501,253,517,256,520,229,558,256,572,317,567,342,549,354,459,303,459,277",
			'asi' => "301,66,308,116,347,157,327,171,342,210,377,198,411,229,423,208,447,252,480,259,518,252,518,236,481,221,493,181,515,161,511,117,529,119,559,20,388,31,302,64"
		);
		
		$this->tpl->assign('url_continent', $this->request->getUrl());
		
		if($continentAsked = $this->request->getContinentZoom())
		{
			$this->tpl->assign("map", 'continent');
			$this->tpl->assign('continent_asked', $continentAsked);
			$sumContinent = $this->getDataMethod( 
						array( "continentcountries" => array())
						);
		}
		else
		{
			$this->tpl->assign('map', 'world');
			$this->tpl->assign('html_area_location', $this->HTMLAreaLocation); 
			$sumContinent = $this->getDataMethod(
								array(
										"continentcountries" => array()
									)
								);
		}

		//assign('dir_img_countries_flags', DIR_IMG_COUNTRIES_FLAGS);
		$this->tpl->assign('path_maps', DIR_IMG_MAPS);
		
		
		$o_mod = new ViewDataArray( $this->data);
		$o_mod->init($this->request);//, $this->tpl);
		
		$a_dataToLoad = array(
				"countries" => "sourcecountries", 
				"countriesinterest" => "sourcecountriesinterest", 
				"providers" => "sourceproviders", 
				"continentcountries" => "sourcecontinentcountries", 
			);
			
		foreach($a_dataToLoad as $key => $value)
		{
			$this->tpl->assign( $key, $o_mod->showAll( $value , true , true));
		}
		$this->request->setModuleName('view_source');
		
		$methodsToLoad = array(
			"countriesdistinct" => array()
		);
		$this->getDataMethod( $methodsToLoad );
	}
	

}
?>