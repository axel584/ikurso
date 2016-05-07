<?php
/* 
 * phpMyVisites : website statistics and audience measurements
 * Copyright (C) 2002 - 2006
 * http://www.phpmyvisites.net/ 
 * phpMyVisites is free software (license GNU/GPL)
 * Authors : phpMyVisites team
*/

// $Id: FormSitePartner.class.php 76 2006-09-14 07:08:51Z matthieu_ $



require_once INCLUDE_PATH . "/core/forms/Form.class.php";
require_once INCLUDE_PATH . "/core/include/SiteConfigDb.class.php";

class FormSitePartner extends Form
{
	
	var $partnerName = '';
	var $partnerId = -1;
	
	function FormSitePartner( &$template, $siteAdmin, $partnerId = null )
	{
		parent::Form( $template );
		
		$this->siteAdmin = $siteAdmin;
		
		// case modify a newsletter		
		if(!is_null($partnerId))
		{
			$o_site = new Site($siteAdmin);
			$this->partnerId = $partnerId;
			$this->partnerName = $o_site->getPartnerNameFromId($partnerId);
			$this->partnerUrls = $o_site->getPartnerUrlsId( $partnerId);
		}
	}
	
	function process()
	{	
		
		// general input
		$formElements = array(
			array('text', 'form_name', $GLOBALS['lang']['admin_name'], 'value="'.@$this->partnerName.'"'),
			array('hidden', 'form_id', $this->partnerId )
		);
		
		$this->addElements( $formElements, $GLOBALS['lang']['generique_general'] );
		
		for($i = 0; $i < NB_URLS_ALIAS_AVAILABLE; $i++)
		{
			$formElements2[] = array('text', 
									'form_url'.$i, 
									sprintf($GLOBALS['lang']['admin_url_n'], $i), 
									'value="'. @$this->partnerUrls[$i] .'"');
									
			$formRules[] = $this->getRuleCheckUrl( 'form_url'.$i );
		}
		
		$this->addElements( $formElements2, $GLOBALS['lang']['admin_url_aliases'] );
		
		$this->addRules( $formRules );
		// launche process
		return parent::process( 'admin_partner_title' );
		
	}
	
	function postProcess()
	{
		$confSite = new SiteConfigDb();
		
		$a_urls = array();
		
		for($i = 0; $i < NB_URLS_ALIAS_AVAILABLE; $i++)
		{
			$url = $this->getSubmitValue('form_url'.$i);
			if(!empty($url)) $a_urls[] = $url;
		}
		
		// add a new nl
		if($this->partnerId == -1)
		{
			$confSite->addPartner( 
										$this->getSubmitValue( 'form_name'),
										$a_urls,
										$this->siteAdmin 
								);
		}
		// mod an existing one
		else
		{
			if(!isset($a_urls) || sizeof($a_urls) == 0)
			{
				$a_urls = array();
			}
			$confSite->setPartner( 	
										$this->getSubmitValue( 'form_name'), 
										$a_urls,
										$this->getSubmitValue( 'form_id')
									);
		}
		
	}
}
?>