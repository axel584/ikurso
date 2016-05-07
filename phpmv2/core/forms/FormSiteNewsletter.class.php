<?php
/* 
 * phpMyVisites : website statistics and audience measurements
 * Copyright (C) 2002 - 2006
 * http://www.phpmyvisites.net/ 
 * phpMyVisites is free software (license GNU/GPL)
 * Authors : phpMyVisites team
*/

// $Id: FormSiteNewsletter.class.php 29 2006-08-18 07:35:21Z matthieu_ $



require_once INCLUDE_PATH . "/core/forms/Form.class.php";
require_once INCLUDE_PATH . "/core/include/SiteConfigDb.class.php";

class FormSiteNewsletter extends Form
{
	
	var $newsletterName = '';
	var $newsletterId = -1;
	
	function FormSiteNewsletter( &$template, $siteAdmin, $newsletterId = null )
	{
		parent::Form( $template );
		
		$this->siteAdmin = $siteAdmin;
		
		// case modify a newsletter		
		if(!is_null($newsletterId))
		{
			$o_site = new Site($siteAdmin);
			$this->newsletterId = $newsletterId;
			$this->newsletterName = $o_site->getNewsletterName($newsletterId);
		}
	}
	
	function process()
	{			
		// general input
		$formElements = array(
			array('text', 'form_name', $GLOBALS['lang']['admin_name'], 'value="'.$this->newsletterName.'"'),
			array('hidden', 'form_id', $this->newsletterId )
		);
		
		$this->addElements( $formElements );

		// launche process
		return parent::process('admin_newsletter_title');
		
	}
	
	function postProcess()
	{
		$confSite = new SiteConfigDb();
		
		// add a new nl
		if($this->newsletterId == -1)
		{
			$confSite->addNewsletter( 
										$this->getSubmitValue( 'form_name'),
										$this->siteAdmin 
								);
		}
		// mod an existing one
		else
		{
			$confSite->setNewsletterName( 	
										$this->getSubmitValue( 'form_name'), 
										$this->getSubmitValue( 'form_id') 
									);
		}
		
	}
}
?>