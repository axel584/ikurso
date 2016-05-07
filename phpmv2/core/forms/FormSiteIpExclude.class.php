<?php
/* 
 * phpMyVisites : website statistics and audience measurements
 * Copyright (C) 2002 - 2006
 * http://www.phpmyvisites.net/ 
 * phpMyVisites is free software (license GNU/GPL)
 * Authors : phpMyVisites team
*/

// $Id: FormSiteIpExclude.class.php 29 2006-08-18 07:35:21Z matthieu_ $



require_once INCLUDE_PATH . "/core/forms/Form.class.php";
require_once INCLUDE_PATH . "/core/include/SiteConfigDb.class.php";

class FormSiteIpExclude extends Form
{
	
	var $a_ips;
	
	function FormSiteIpExclude( &$template, $siteAdmin )
	{
		parent::Form( $template );
		
		$this->siteAdmin = $siteAdmin;
		
		$o_site = new Site( $siteAdmin );
		
		$this->a_ips = $o_site->getIpArray();
	}
	
	function process()
	{	
		
		// general input
		$formElements = array();
		
		for($i = 0; $i < NB_IPS_RANGE_AVAILABLE; $i++)
		{
			$formElements[] = array('text', 'form_ipa'.$i, '', 'value="'.long2ip(@$this->a_ips[$i][0]).'"');
			$formElements[] = array('text', 'form_ipb'.$i, '', 'value="'.long2ip(@$this->a_ips[$i][1]).'"');
		}
		$this->addElements( $formElements , 'General');

		// validation rules
		$formRules = array(
			array('__ALL__',
				sprintf($GLOBALS['lang']['admin_error_ip'], IP_EXAMPLE), 
				'checkCorrectIp'),
		);
		$this->addRules( $formRules );
		
		// launche process
		return parent::process( 'admin_ip_exclude_title' );
	}
	
	function postProcess()
	{
		$ipFinal = array();
		for($i = 0; $i < NB_IPS_RANGE_AVAILABLE; $i++)
		{
			$ipa = ip2long($this->getSubmitValue('form_ipa'.$i));
			$ipb = ip2long($this->getSubmitValue('form_ipb'.$i));
			
			if($ipa != 0 || $ipb != 0)
				$ipFinal[] = array( $ipa, $ipb, $this->siteAdmin );
				
		}

		$ipFinal = array_reverse( $ipFinal, true);
		
		$confSite = new SiteConfigDb();
		$confSite->modIpExclude( $ipFinal, $this->siteAdmin );
		
	}
}
?>