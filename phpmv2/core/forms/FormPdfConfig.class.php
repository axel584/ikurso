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
require_once INCLUDE_PATH . "/core/include/Cookie.class.php";
require_once INCLUDE_PATH . "/core/include/PdfConfigDb.class.php";

class FormPdfConfig extends Form
{
	
	var $pdfName = '';
	var $pdfParam = '';
	var $pdfId = -1;
	
	function FormPdfConfig( &$template, $siteAdmin, $pdfId = null )
	{
		parent::Form( $template );
		
		$this->siteAdmin = $siteAdmin;
		$confpdf = new PdfConfigDb($siteAdmin);
		$this->tpl->assign(	'choix_pdf', $confpdf->getChoixPdf());
		$this->tpl->assign(	'default_pdf', $confpdf->getDefaultPdf());
		$this->tpl->assign(	'siteAdmin', $siteAdmin);
		$this->tpl->assign(	'pdfId', $pdfId);
		

		// case modify a newsletter		
		if(!is_null($pdfId))
		{
			
			$o_pdf = $confpdf->getPdf($pdfId);
			$setDefault = getRequestVar("default", "false", "string");
			if ($setDefault == "true") {
				$o_pdf->pdfParam = $confpdf->getDefaultPdf();
			}
			
			$this->pdfId = $pdfId;
			$this->pdfName = $o_pdf->pdfName;
			$this->pdfParam = $o_pdf->pdfParam;
			$this->tpl->assign(	'pdf', $o_pdf);
		}
	}
	
	function process()
	{			
		// general input
		$formElements = array(
			array('text', 'form_name', $GLOBALS['lang']['admin_name'], 'value="'.$this->pdfName.'"'),
			//array('checkbox', 'form_send_mail', null, $GLOBALS['lang']['install_non'], 'no'),
			array('hidden', 'form_id', $this->pdfId ),
			array('hidden', 'form_site_admin', $this->siteAdmin )
		);
		
		$this->addElements( $formElements );

		// launche process
		return parent::process('admin_newsletter_title');
		
	}
	
	function postProcess()
	{
		$idSite = $this->getSubmitValue( 'form_site_admin');
		$confPdf = new PdfConfigDb($idSite);
		
		
		$listChoix = $confPdf->getChoixPdf();
		$param = array();
		foreach ($listChoix as $key => $info) {
			$selCh =  $this->getSubmitValue($key);
			$selInt = "false";
			$selAll = "false";
			if ($selCh == 1) {
			//print ("$key : $selCh<br>");
				if (! isset($info["PAG"])) {
					if ($info["INT"] == "true") {
						if ($this->getSubmitValue($key."I") == 1) {
							$selInt = "true";
						}
					}
					if ($info["ALL"] == "true") {
						if ($this->getSubmitValue($key."A") == 1) {
							$selAll = "true";
						}
					}
				}
				$param[$key] = array ($selInt, $selAll);
			}
		}
		/*
		foreach ($param as $key => $info) {
			print ("Select : ".$key." : int : ".$info[0]." all : ".$info[1]."<br>");
		}
		*/
		// add a new nl
		if($this->pdfId == -1)
		{
			$confPdf->addPdf($this->getSubmitValue( 'form_name'),
							$param 
								);
		}
		// mod an existing one
		else
		{
			$confPdf->updatePdf($this->getSubmitValue( 'form_id'),
								$this->getSubmitValue( 'form_name'), 
								$param
									);
		}
		$confPdf->savePdf ();
	}
}
?>