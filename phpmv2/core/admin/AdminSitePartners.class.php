<?php
/* 
 * phpMyVisites : website statistics and audience measurements
 * Copyright (C) 2002 - 2006
 * http://www.phpmyvisites.net/ 
 * phpMyVisites is free software (license GNU/GPL)
 * Authors : phpMyVisites team
*/

// $Id: AdminSitePartners.class.php 59 2006-08-26 05:37:04Z matthieu_ $


require_once INCLUDE_PATH."/core/include/AdminModule.class.php";
require_once INCLUDE_PATH."/core/forms/FormSitePartner.class.php";
require_once INCLUDE_PATH . "/core/include/SiteConfigDb.class.php";	

class AdminSitePartners extends AdminModule
{
    var $viewTemplate = "admin/site_partner.tpl";
    
	function AdminSitePartners()
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
					$form = new FormSitePartner( $this->tpl, $siteAdmin );
			
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
					$idPartner = $this->needAPartner( $siteAdmin );
					
					if($idPartner)
					{
						$form = new FormSitePartner( $this->tpl, $siteAdmin, $idPartner );
						
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
					$idPartner = $this->needAPartner( $siteAdmin );
					
					if($idPartner)
					{
						$confirmed = $this->needConfirmation( 'partner', $idPartner );
						
						if($confirmed)
						{
							$confSite = new SiteConfigDb();
							$confSite->delPartner( $idPartner );
							
							$this->setMessage( );
						}
					}
				}
			break;
			
		}
		$this->site->generateFiles();
	}
	
	function needAPartner( $idSite)
	{
	
		$idPartner = $this->request->getAdminPartner();
		
		if( !$idPartner )
		{
			$o_site = new Site( $idSite);
			
			$this->tpl->assign( 'partners_available', $o_site->getPartnerSite() );
			$this->tpl->template = "admin/partner_selection.tpl";
			
			return false;
		}
		else
		{
			return $idPartner;
		}
	}
}
?>