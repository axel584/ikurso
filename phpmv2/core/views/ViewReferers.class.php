<?php
/* 
 * phpMyVisites : website statistics and audience measurements
 * Copyright (C) 2002 - 2006
 * http://www.phpmyvisites.net/ 
 * phpMyVisites is free software (license GNU/GPL)
 * Authors : phpMyVisites team
*/

// $Id: ViewReferers.class.php 29 2006-08-18 07:35:21Z matthieu_ $


require_once INCLUDE_PATH."/core/include/ViewModule.class.php";
require_once INCLUDE_PATH."/core/views/ViewDataArray.class.php";

class ViewReferers extends ViewModule
{
    var $viewTemplate = "common/viewreferers_all.tpl";
    
    /**
     * Constructor
     */
	function ViewReferers()
	{
		parent::ViewModule( "referers");
	}
	
	/**
	 * Data processing method
	 * only called if template is not cached
	 */
	function process()
	{
		$a_dataToLoad = array(
				
				// tables
				'searchengines' 		=> 'refererssearchengines',
				'searchenginesinterest' => 'refererssearchenginesinterest',
				'keywords'				=> 'refererskeywords',
				'keywordsinterest' 		=> 'refererskeywordsinterest',
				'sites' 				=> 'refererssites',
				'sitesinterest' 		=> 'refererssitesinterest',
				'partners' 				=> 'refererspartners',
				'partnersinterest'		=> 'refererspartnersinterest',
				'newsletters' 			=> 'referersnewsletters',
				'newslettersinterest' 	=> 'referersnewslettersinterest',
				'typeinterest' 			=> 'refererstypeinterest',
				
			);
			
				
		$o_mod = new ViewDataArray( null );
		$o_mod->init($this->request);//, $this->tpl);
		
		foreach($a_dataToLoad as $key => $value)
		{
			//printTime('before'.$key, true);
			$this->tpl->assign( $key, $o_mod->showAll( $value , true, true ));
		}

		$this->request->setModuleName('view_referers');
		
		$methodsToLoad = array(
			"numbers" => array()
		);
		$this->getDataMethod( $methodsToLoad );
	}
}
?>