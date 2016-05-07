<?php
/* 
 * phpMyVisites : website statistics and audience measurements
 * Copyright (C) 2002 - 2006
 * http://www.phpmyvisites.net/ 
 * phpMyVisites is free software (license GNU/GPL)
 * Authors : phpMyVisites team
*/

// $Id: FormSiteUrls.class.php 29 2006-08-18 07:35:21Z matthieu_ $



require_once INCLUDE_PATH . "/core/forms/Form.class.php";
require_once INCLUDE_PATH . "/core/include/SiteConfigDb.class.php";

class FormSiteUrls extends Form
{
	var $a_urls;
	
	function FormSiteUrls( &$template, $siteAdmin )
	{
		parent::Form( $template );
		
		$this->siteAdmin = $siteAdmin;
		
		$o_site = new Site( $siteAdmin );
		
		$this->a_urls = $o_site->getUrls();
		
	}
	
	function process()
	{			
		// general input
		$formElements = array();
		
		for($i = 0; $i < NB_URLS_ALIAS_AVAILABLE; $i++)
		{
			$formElements[] = array('text', 
									'form_url'.$i, 
									sprintf($GLOBALS['lang']['admin_url_n'], $i), 
									'value="'. @$this->a_urls[$i] .'"');
			$formRules[] = $this->getRuleCheckUrl( 'form_url'.$i );
		}
		$this->addElements( $formElements );

		$this->addRules( $formRules );
		
		// launche process
		return parent::process( 'admin_alias_title');
	}
	
	function postProcess()
	{
		
		for($i = 0; $i < NB_URLS_ALIAS_AVAILABLE; $i++)
		{
			$a_urls[] = array( $this->siteAdmin, databaseEscape($this->getSubmitValue('form_url'.$i)));	
		}
		
		$confSite = new SiteConfigDb();
		$confSite->setUrls( $a_urls, $this->siteAdmin );
		
	}
}
?>