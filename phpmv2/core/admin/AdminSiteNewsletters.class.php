<?php
/* 
 * phpMyVisites : website statistics and audience measurements
 * Copyright (C) 2002 - 2006
 * http://www.phpmyvisites.net/ 
 * phpMyVisites is free software (license GNU/GPL)
 * Authors : phpMyVisites team
*/

// $Id: AdminSiteNewsletters.class.php 59 2006-08-26 05:37:04Z matthieu_ $


require_once INCLUDE_PATH."/core/include/AdminModule.class.php";
require_once INCLUDE_PATH."/core/forms/FormSiteNewsletter.class.php";
require_once INCLUDE_PATH . "/core/include/SiteConfigDb.class.php";

class AdminSiteNewsletters extends AdminModule
{
    var $viewTemplate = "admin/site_newsletter.tpl";
    
	function AdminSiteNewsletters()
	{
		parent::AdminModule();
	}

	function process()
	{				
		switch( $this->request->getActionName() )
		{
			case 'add':
				$siteAdmin = $this->needASiteAdminSelected();
				
				if($siteAdmin)
				{
					$form = new FormSiteNewsletter( $this->tpl, $siteAdmin );
			
					$done = $form->process();
						
					if($done)
					{
						$this->setMessage( );
					}
				}
			break;
			
			case 'mod':
				$siteAdmin = $this->needASiteAdminSelected();
				
				if($siteAdmin)
				{
					$idNewsletter = $this->needANewsletter( $siteAdmin );
					
					if($idNewsletter)
					{
						$form = new FormSiteNewsletter( $this->tpl, $siteAdmin, $idNewsletter );
						
						$done = $form->process();
						
						if($done)
						{
							$this->setMessage( );
						}
					}
					
				}
				// else needASiteAdminSelected display the site selection form
			break;
			
			case 'del':
				$siteAdmin = $this->needASiteAdminSelected();
				
				if($siteAdmin)
				{
					$idNewsletter = $this->needANewsletter( $siteAdmin );
					
					if($idNewsletter)
					{
						
						$confirmed = $this->needConfirmation( 'newsletter', $idNewsletter );
						
						if($confirmed)
						{	
							$confSite = new SiteConfigDb();
							$confSite->delNewsletter( $idNewsletter );
							
							$this->setMessage( );
						}
					}
				}
			break;
		}
		
		$this->site->generateFiles();
	}
	
	function needANewsletter( $idSite)
	{
	
		$idNewsletter = $this->request->getAdminNewsletter();
		
		if( !$idNewsletter )
		{
			$o_site = new Site( $idSite);
			
			
			$this->tpl->assign( 'newsletters_available', $o_site->getNewslettersSite() );
			$this->tpl->template = "admin/newsletter_selection.tpl";
			
			return false;
		}
		else
		{
			return $idNewsletter;
		}
	}
}
?>