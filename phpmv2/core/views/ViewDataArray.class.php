<?php
/* 
 * phpMyVisites : website statistics and audience measurements
 * Copyright (C) 2002 - 2006
 * http://www.phpmyvisites.net/ 
 * phpMyVisites is free software (license GNU/GPL)
 * Authors : phpMyVisites team
*/

// $Id: ViewDataArray.class.php 29 2006-08-18 07:35:21Z matthieu_ $


require_once INCLUDE_PATH."/core/include/ViewModule.class.php";

class ViewDataArray extends ViewModule
{
    var $a_lang;
    
    var $a_idToIdForSort;
    
    var $a_toRemoveFromMethodNameToGetId;
    
    var $a_allLimitArrayData;
    
    
	function ViewDataArray( $o_data = null )
	{
	   
		parent::ViewModule( "", $o_data );
		
	}
	
	function init($request, $tpl = null)
	{
	    parent::init($request, $tpl);
		
		$this->a_lang = array(
			'refererssearchengines' => 'affluents_moteurs',
			'refererssearchenginesinterest' => 'affluents_moteurs',
			'refererskeywords' => 'affluents_motscles',
			'refererskeywordsinterest' => 'affluents_motscles',
			'refererssites' => 'affluents_sitesinternet',
			'refererssitesinterest' => 'affluents_sitesinternet',
			'refererspartners' => 'affluents_partenaires',
			'refererspartnersinterest' => 'affluents_partenaires',
			'referersnewsletters' => 'affluents_newsletters',
			'referersnewslettersinterest' => 'affluents_newsletters',
			'refererspartners' => 'affluents_partenaires',
			'refererspartnersinterest' => 'affluents_partenaires',
			'referersnewsletters' => 'affluents_newsletters',
			'referersnewslettersinterest' => 'affluents_newsletters',
			'refererstypeinterest' => 'affluents_type',
			
			'settingsconfig' => 'configurations_configurations',
			'settingsos' => 'configurations_os',
			'settingsosinterest' => 'configurations_os',
			'settingsbrowserstype' => 'configurations_navigateursbytype',
			'settingsbrowsers' => 'configurations_navigateurs',
			'settingsbrowsersinterest' => 'configurations_navigateurs',
			'settingsplugins' => 'configurations_plugins',
			'settingsresolutions' => 'configurations_resolutions',
			'settingsresolutionsinterest' => 'configurations_resolutions',
			'settingsnormalwidescreen' => 'configurations_rapport',
			
			'sourcecountries' => 'provenance_recappays',
			'sourcecontinentcountries' => 'provenance_continent',
			'sourcecountriesinterest' => 'provenance_recappays',
			'sourceproviders' => 'provenance_provider',
			
			);
			
		$this->a_idToIdForSort = array(
			'os' => 'int',
			'browsers' => 'int',
			'resolutions' => 'int',
			'countries' => 'int',
			'searchengines' => 'searchengine', 
			'keywords' => 'keyword',
			'sites' => 'site',
			'partners' => 'partner',
			'newsletters' => 'newsletter',
			'type' => 'type'
			);
			
		$this->a_toRemoveFromMethodNameToGetId = array(
			'interest',
			'settings',
			'referers',
			'source'
			);
			
		// for those non specified, take default value (10)
		$this->a_allLimitArrayData = array(
				'settingsconfig' => 3,
				'refererskeywords' => 15,
			);

	    
	}
	
	function showAll( $methodToUse = null,  $return = false, $externalCall = false)
	{
	     if ($externalCall)
		 {
			 $oldModule = $this->request->getModuleName();
			 $this->request->setModuleName('view_data_array');
	     }
	       
	       
		// case call from ajax, no parameters set
		if(is_null($methodToUse)) 
		{
			$methodToUse = $this->request->getMethodName();
		}
		
		$this->request->method_name = $methodToUse;

		
		$idToAssign = $methodToUse;
		$idDetailsAsked = $this->request->getIdDetails();
		
		if($methodToUse == 'sourcecontinentcountries')
		{
			$idDetailsContinentAsked = $this->request->getContinentZoom();
			if($idDetailsContinentAsked)
			{
				$parameters[] = $idDetailsContinentAsked;
				$this->a_lang['sourcecontinentcountries'] = 'provenance_recappays';
				$this->tpl->assign("continent_asked", $idDetailsContinentAsked);
			}
		}
		
		// asked for a detail subtable in referers
		if($idDetailsAsked)
		{
			$parameters[] = $idDetailsAsked;
			//print("Asked id : $idDetailsAsked");
			$this->viewTemplate =  "common/data_array_details.tpl";
			$nameTemplateVariable = "zoom";

		}
		// asked for classic data table, or interest table
		else
		{
			// generic name of smarty var is data
			$nameTemplateVariable = "data";
			
			// if asked for a referer table
			if(substr_count( $methodToUse, 'interest') > 0)
			{
				$this->viewTemplate = "common/data_array_interest.tpl";
				$idToAssign = str_replace($this->a_toRemoveFromMethodNameToGetId, '', $methodToUse);
		
			}
			// asked for a classic table
			else
			{				
				$this->viewTemplate = "common/data_array.tpl";
			}
		}


		// get offset (0 by default)
		$offset = $this->request->getOffset();
		$parameters[] = $offset;
		
		// nb element max
		if(isset($this->a_allLimitArrayData[$idToAssign]))
		{
			$dataLimit = $this->a_allLimitArrayData[$idToAssign];
			
		}
		else
		{
			$dataLimit = NB_ELEMENTS_TO_DISPLAY;
		}
		
		$parameters[] = $dataLimit;
		
	
		$methodsToCall = array(
			$methodToUse => $parameters, // get main data from DataModel method
		);
		// empty when defaut GET value used (empty) in getRequestVar for method_name
		
		// case we have interest in method to use, remove interest 
		// from method name to get getDistinct type method name

		if(!empty($methodToUse)) 
		{
			$methodToUseDistinct = str_replace('interest', '', $methodToUse)  . "distinct";
			// if get distinct method exists, when necessary (when there can be many elements)
			if(method_exists( $this->data , 'get'.$methodToUseDistinct))
			{
				// we don't specify id details because its saved during the main process
				// then the distinct value is simply read
				$methodsToCall[$methodToUseDistinct] = array();
			}
			else
			{
				print("<br>Method <b>get$methodToUseDistinct</b> does not exist !");
			}
			//printDebug($methodsToCall);
			$a_value = $this->getDataMethod( $methodsToCall , true );
		}

		// case there is a nb_elements, when there can be several pages
		if(isset($a_value[$methodToUseDistinct]))
		{
			$this->tpl->assign( "nb_elements", $a_value[$methodToUseDistinct]);
		}
				
		// set smarty variable containing data
		$this->tpl->assign( $nameTemplateVariable, $a_value[$methodToUse]);
		$this->tpl->assign( "offset", $offset);
		$this->tpl->assign( "id", $idToAssign);
		$this->tpl->assign( "id_details", $idDetailsAsked);
		
		// case id for interest setted
		if(isset($this->a_idToIdForSort[$idToAssign]))
		{
			$this->tpl->assign( "id_sort", $this->a_idToIdForSort[$idToAssign]);
		}
		
		
		$this->tpl->assign('path', array(
						// generic 
						'theme' 					=> DIR_IMG_THEMES,
						
						// source
						'sourcecountries' 			=> DIR_IMG_COUNTRIES_FLAGS,
						'countries' 				=> DIR_IMG_COUNTRIES_FLAGS,
						'sourcecontinentcountries' 	=> DIR_IMG_COUNTRIES_FLAGS,
						
						// referers
						'refererssearchengines' 	=> DIR_IMG_SEARCH_ENGINES,
						'refererskeywordsdetails' 	=> DIR_IMG_SEARCH_ENGINES,
						'searchengines' 			=> DIR_IMG_SEARCH_ENGINES,
						
						// settings
						'settingsos' 				=> DIR_IMG_OS,
						'os' 						=> DIR_IMG_OS,
						'settingsbrowsers' 			=> DIR_IMG_BROWSERS,
						'browsers' 					=> DIR_IMG_BROWSERS,
						'settingsplugins' 			=> DIR_IMG_PLUGINS,
						'plugins' 					=> DIR_IMG_PLUGINS,
						'settingsnormalwidescreen' 	=> DIR_IMG_SCREENS,
						'normalwidescreen' 			=> DIR_IMG_SCREENS,
						)
					);
		
		$this->tpl->assign("data_limit", $dataLimit);
		
		// for details
		if(strpos($methodToUse, 'details') === false)
		{
			$this->tpl->assign( "headline", $GLOBALS['lang'][$this->a_lang[$methodToUse]] );
		}
		if ($return)
		{
			return $this->fetch($this->viewTemplate, $this->request, $methodToUse);
		}
		else 
		{
			$this->tpl->setTemplate($this->viewTemplate);
			$this->display(); 
			return true;
		}
	}
}
?>