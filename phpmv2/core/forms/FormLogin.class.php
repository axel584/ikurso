<?php
/* 
 * phpMyVisites : website statistics and audience measurements
 * Copyright (C) 2002 - 2006
 * http://www.phpmyvisites.net/ 
 * phpMyVisites is free software (license GNU/GPL)
 * Authors : phpMyVisites team
*/

// $Id: FormLogin.class.php 29 2006-08-18 07:35:21Z matthieu_ $


require_once INCLUDE_PATH . "/core/forms/Form.class.php";

class FormLogin extends Form
{	
	function FormLogin( &$template )
	{
		$action = Request::getCurrentCompletePath() . "/index.php?mod=login";
		parent::Form( $template,  $action);
	}
	
	function process()
	{			
		$urlToGoAfter = str_replace('mod=login',
									'',
									Request::getCurrentCompleteUrl()
								);

		// general input
		$formElements = array(
			array('text', 'form_login', $GLOBALS['lang']['login_login']),
			array('password', 'form_password', $GLOBALS['lang']['login_password']),
			array('hidden', 'form_url', $urlToGoAfter),
		);
		$this->addElements( $formElements );
		
		// validation rules
		$formRules = array(
			array('form_login', sprintf($GLOBALS['lang']['admin_required'], $GLOBALS['lang']['login_login']), 'required'),
			array('form_password', sprintf($GLOBALS['lang']['admin_required'], $GLOBALS['lang']['login_password']), 'required'),
		);
		$this->addRules( $formRules );
	
		// launche process
		return parent::process();
	}
	
	function postProcess()
	{
		$login = $this->getSubmitValue('form_login');
	

		$password = md5($this->getSubmitValue('form_password'));
		$url = $this->getSubmitValue('form_url');
		
		$me = new User();
		
		if($me->isCorrect($login, $password))
		{
			$me->loadPermissions();
			if( $me->NoSitePermission() )
			{
				header("Location: ".Request::getCurrentCompletePath()."/index.php?mod=login&error_login=2");
				exit;
			}
			header("Location: $url");
			exit;
		}
		else
		{
			header("Location: ".Request::getCurrentCompletePath()."/index.php?mod=login&error_login=1");
			exit;
		}
	}
}
?>