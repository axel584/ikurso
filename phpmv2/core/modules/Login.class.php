<?php
/* 
 * phpMyVisites : website statistics and audience measurements
 * Copyright (C) 2002 - 2006
 * http://www.phpmyvisites.net/ 
 * phpMyVisites is free software (license GNU/GPL)
 * Authors : phpMyVisites team
*/

// $Id: Login.class.php 29 2006-08-18 07:35:21Z matthieu_ $


require_once INCLUDE_PATH."/core/forms/FormLogin.class.php";

class Login extends Module
{
	var $viewTemplate = '';
	
	function Login()
	{
		parent::Module();
	}
	
	function showAll()
	{
		$form = new FormLogin( $this->tpl );
		$done = $form->process();
		
		$this->tpl->assign("error_login", $this->request->getErrorLogin());
		$this->display();
	}
	
	
	function init($request)
	{
	    parent::init($request);
	    // if tpl is not allocated (which is the case for graphs)
	    // and if the login fails, there would be an error here trying to set a template with smarty not constructed
	    // so we simply display an error message and exit
	    if(!is_a( $this->tpl, "TemplateEngine"))
	    {
	    	print("Error while authentificate, and TemplateEngine not constructed. <br>Exiting...<br>");
	    	exit;
	    }
		$this->tpl->caching = 0;
		$this->tpl->setMainTemplate( "common/login.tpl");
	}
}
?>