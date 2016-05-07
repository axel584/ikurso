<?php
/* 
 * phpMyVisites : website statistics and audience measurements
 * Copyright (C) 2002 - 2006
 * http://www.phpmyvisites.net/ 
 * phpMyVisites is free software (license GNU/GPL)
 * Authors : phpMyVisites team
*/

// $Id: FormSiteGeneral.class.php 29 2006-08-18 07:35:21Z matthieu_ $



require_once INCLUDE_PATH . "/core/forms/Form.class.php";
require_once INCLUDE_PATH . "/core/include/SiteConfigDb.class.php";

class FormSiteGeneral extends Form
{
	
	var $valueName = '';
	var $valueMainUrl = '';
	var $valueLogo = "41.png";
	var $valueRecordGet = 'all';
	var $valueVariableNames = '';
	var $site;
	
	function FormSiteGeneral( &$template, $siteAdmin = null, $action = null)
	{
		parent::Form( $template, $action );
		
		
		// site selected for mod, display site info in form input
		if( !is_null($siteAdmin))
		{
			$siteSelect = new Site($siteAdmin);
			
			$this->valueName = $siteSelect->getName();
			$urls = $siteSelect->getUrls();
			$this->valueMainUrl = $urls[0];
			
			$this->valueLogo = $siteSelect->getLogo();
			
			$params = $siteSelect->getParams();
			
			$this->valueRecordGet = $params['params_choice'];
			$this->valueVariableNames = $params['params_names'];
			
			$this->siteAdmin = $siteAdmin;
		}
	}
	
	function process()
	{		
		
		// general input
		$formElements = array(
			array('text', 'form_name', $GLOBALS['lang']['admin_site_name'], 'value="'.$this->valueName.'"'),
			array('text', 'form_url', $GLOBALS['lang']['admin_site_url'], 'value="'.$this->valueMainUrl.'"'),
			array('radio', 'form_logo', sprintf($GLOBALS['lang']['install_afficherlogo'], 
				'<img name="logo_phpmv" src="'.DIR_IMG_LOGOS.'/'. 
					(isset( $this->valueLogo) && $this->valueLogo!='pixel.gif' ? $this->valueLogo  : '1.png').
					'"/> '), $GLOBALS['lang']['install_oui'] . '<br><br> 
					<a href="#" onclick="javascript:popup();">-> '.$GLOBALS['lang']['install_logodispo'].'</a>'
					, 'yes'),
			array('radio', 'form_logo', null, $GLOBALS['lang']['install_non'], 'no'),
			array('hidden', 'form_logo_no', $this->valueLogo),
			
			);
		$this->addElements( $formElements , 'General');
		
		// optional input (relative to GET variable recording)
		$formElements = array(
			array('radio', 'form_params', $GLOBALS['lang']['admin_get_question'] ,  $GLOBALS['lang']['admin_get_a1'], 'all'),
			array('radio', 'form_params', null, $GLOBALS['lang']['admin_get_a2'] , 'none'),
			array('radio', 'form_params', null,  $GLOBALS['lang']['admin_get_a3'], 'only'),
			array('radio', 'form_params', null,  $GLOBALS['lang']['admin_get_a4'], 'except'),
			array('text', 'form_params_names', sprintf(  $GLOBALS['lang']['admin_get_list'], GET_LIST_EXAMPLE), 
							'value="'.$this->valueVariableNames.'"'),
		);
		$this->addElements( $formElements , $GLOBALS['lang']['install_utilisateursavances']);
		
		// set first radio checked for variables recording
		//$radio =& $this->getElement('form_params');
		//$radio->_attributes['checked'] = 'checked';
		$this->setChecked( 'form_params', $this->valueRecordGet );
		
		// set first radio checked for logo display
		$this->setChecked( 'form_logo', $this->valueLogo=='pixel.gif'?'no':'yes' );

		
		// validation rules
		$formRules = array(
			array('form_name', sprintf($GLOBALS['lang']['admin_required'], $GLOBALS['lang']['admin_site_name']), 'required'),
			array('form_url', sprintf($GLOBALS['lang']['admin_required'],  $GLOBALS['lang']['admin_site_url']), 'required'),
			$this->getRuleCheckUrl( 'form_url'),
			array('form_logo', sprintf($GLOBALS['lang']['admin_required'], $GLOBALS['lang']['admin_logo_question']), 'required'),
			array('form_params', sprintf($GLOBALS['lang']['admin_required'], $GLOBALS['lang']['admin_get_question']), 'required'),
		);
		$this->addRules( $formRules );
		
		// launche process
		return parent::process( 'admin_configetperso' );
	}
	
	function postProcess()
	{
		$confSite = new SiteConfigDb();
		
		$infoSite = array(	
			// db field name => new value
			'name' => $this->getSubmitValue('form_name'),
			'logo' => $this->getSubmitValue('form_logo')=='yes'
							? $this->getSubmitValue('form_logo_no') 
							: 'pixel.gif',
			'params_choice' => $this->getSubmitValue('form_params'),
		);
		
		$urlSite = $this->getSubmitValue('form_url');
		
		$params_names = $this->getSubmitValue('form_params_names');
		
		if(!empty($params_names))
		{
			$infoSite['params_names'] = $params_names;
		}
			
		$req =& Request::getInstance();
		switch( $req->getActionName() )
		{
			case 'add':
				$confSite->addSite( $infoSite, $urlSite );
			break;
			
			case 'mod':
				$infoSite['idsite'] = $this->siteAdmin;
				$confSite->modSite( $infoSite, $urlSite );
			
			break;
						
			default:
				trigger_error('Action not specified for Site configuration. Were you trying to add, modify, delete? Only YOU know that!', E_USER_ERROR);
			break;
		}
		
	}
}
?>