<?php
/* 
 * phpMyVisites : website statistics and audience measurements
 * Copyright (C) 2002 - 2006
 * http://www.phpmyvisites.net/ 
 * phpMyVisites is free software (license GNU/GPL)
 * Authors : phpMyVisites team
*/

// $Id: FormDbConfig.class.php 107 2006-10-02 09:40:54Z matthieu_ $


require_once INCLUDE_PATH . "/core/forms/Form.class.php";

class FormDbConfig extends Form
{
	function FormDbConfig( &$template )
	{
		parent::Form( $template );
	}
	
	function process()
	{	
		$cst = array(
			'DB_LOGIN',
			'DB_PASSWORD',
			'DB_HOST',
			'DB_NAME',
			'DB_TABLES_PREFIX',
			);

		foreach($cst as $name)
		{
			if(defined( $name ))
				$values[$name] = constant($name);
			elseif($name=='DB_TABLES_PREFIX')
				$values[$name] = 'phpmv_';
			else
				$values[$name] = '';
		}
		$formElements = array(
			array('text', 'form_dblogin', $GLOBALS['lang']['install_loginmysql'], 'value='.$values['DB_LOGIN']),
			array('password', 'form_dbpassword', $GLOBALS['lang']['install_mdpmysql'], 'value='.!empty($values['DB_PASSWORD'])?md5($values['DB_PASSWORD']):''),
			array('text', 'form_dbhost', $GLOBALS['lang']['install_serveurmysql'], 'value='.$values['DB_HOST']),
			array('text', 'form_dbname', $GLOBALS['lang']['install_basemysql'], 'value='.$values['DB_NAME']),
			array('text', 'form_dbprefix', $GLOBALS['lang']['install_prefixetable'], 'value='.$values['DB_TABLES_PREFIX']),
		);
		
		$this->addElements( $formElements , $GLOBALS['lang']['generique_general'] );
				
	
		$formRules = array(
			array('form_dblogin', sprintf($GLOBALS['lang']['admin_required'], $GLOBALS['lang']['install_loginmysql']), 'required'),
			array('form_dbhost', sprintf($GLOBALS['lang']['admin_required'], $GLOBALS['lang']['install_serveurmysql']), 'required'),
			array('form_dbname', sprintf($GLOBALS['lang']['admin_required'], $GLOBALS['lang']['install_basemysql']), 'required'),
			array('form_dbprefix', sprintf($GLOBALS['lang']['admin_required'], $GLOBALS['lang']['install_prefixetable']), 'required'),
		);
		
		$this->addRules( $formRules );
		
		return parent::process('install_database_setup');
	}
	
	function postProcess()
	{		
		$configPhpFileContent = array(
			'db_login' => $this->getElementValue('form_dblogin'),
			'db_password' => $this->getElementValue('form_dbpassword'),
			'db_host' => $this->getElementValue('form_dbhost'),
			'db_name' => $this->getElementValue('form_dbname'),
			'db_tables_prefix' => $this->getElementValue('form_dbprefix'),
		);
		
		$db =& Db::getInstance();
		
		// Verify if there is change on password
		if ( defined('DB_PASSWORD') 
			&& $configPhpFileContent['db_password'] == md5(DB_PASSWORD)) {
			$configPhpFileContent['db_password'] = DB_PASSWORD;
		}

		// try to connect with new values
		$db->host = $configPhpFileContent['db_host'];
		$db->login = $configPhpFileContent['db_login'];
		$db->password = $configPhpFileContent['db_password'];
		$db->name = $configPhpFileContent['db_name'];
		$db->init();
		
		if($db->isReady())
		{
			$c =& PmvConfig::getInstance();
			$c->update( $configPhpFileContent );

			$c->write();
			
			$GLOBALS['header_error_message_tpl'] = '';
						
			$this->tpl->assign('db_connect_ok', true);
		}
		else
		{
			$this->display();
		}
	}
}
?>