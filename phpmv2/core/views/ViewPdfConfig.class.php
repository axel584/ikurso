<?php
/* 
 * phpMyVisites : website statistics and audience measurements
 * Copyright (C) 2002 - 2006
 * http://www.phpmyvisites.net/ 
 * phpMyVisites is free software (license GNU/GPL)
 * Authors : phpMyVisites team
*/

// $Id: ViewPdfConfig.class.php 59 2006-08-26 05:37:04Z matthieu_ $


require_once INCLUDE_PATH."/core/include/AdminModule.class.php";
require_once INCLUDE_PATH."/core/forms/FormPdfConfig.class.php";
require_once INCLUDE_PATH . "/core/include/SiteConfigDb.class.php";
require_once INCLUDE_PATH . "/core/include/PdfConfigDb.class.php";

class ViewPdfConfig extends AdminModule
{
    var $viewTemplate = "admin/pdf_config.tpl";
    
	function ViewPdfConfig()
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
					$form = new FormPdfConfig( $this->tpl, $siteAdmin );
			
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
					
					$idPdf = $this->needAPdf( $siteAdmin );
					
					if($idPdf)
					{
						$form = new FormPdfConfig( $this->tpl, $siteAdmin, $idPdf );
						
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
					$idPdf = $this->needAPdf( $siteAdmin );
					
					if($idPdf)
					{
						
						$confirmed = $this->needConfirmation( 'newsletter', $idPdf );
						
						if($confirmed)
						{	
							$confPdf = new PdfConfigDb($siteAdmin);
							$confPdf->deletePdf( $idPdf );
							$confPdf->savePdf ();
							$this->setMessage( );
						}
					}
				}
			break;
		}
		
		$this->site->generateFiles();
	}
	
	function needAPdf( $idSite)
	{
		return 1;
	   /*
		$idPdf = getRequestVar('idPdf', false, 'int');
		
		if(!$idPdf)
		{
			
			$pdfDb = new PdfConfigDb($idSite);
			
			$this->tpl->assign( 'pdf_available', $pdfDb->getListPdf());
			$this->tpl->template = "admin/pdf_selection.tpl";
			
			$ret =  false;
		}
		else
		{
			$ret = $idPdf;
		}
		return $ret;
		*/
	}
}
?>