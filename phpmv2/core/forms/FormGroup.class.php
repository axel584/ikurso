<?php
/* 
 * phpMyVisites : website statistics and audience measurements
 * Copyright (C) 2002 - 2006
 * http://www.phpmyvisites.net/ 
 * phpMyVisites is free software (license GNU/GPL)
 * Authors : phpMyVisites team
*/

// $Id: FormGroup.class.php 107 2006-10-02 09:40:54Z matthieu_ $



require_once INCLUDE_PATH . "/core/forms/Form.class.php";
require_once INCLUDE_PATH . "/core/include/SiteConfigDb.class.php";

class FormGroup extends Form
{
	
	var $valueName = '';
	var $valueMainUrl = '';
	var $valueLogo = 1;
	var $valueRecordGet = 'all';
	var $valueVariableNames = '';
	var $site;
	
	function FormGroup( &$template, $siteAdmin)
	{
		parent::Form( $template);
		$this->idSite = $siteAdmin;
	}
	
	function process()
	{
		/* 
		 * OLD VERSION 
		  	
		$this->user = new UserConfigDb();
		
		$groups = $this->user->getGroups();
		
		$groups['no_permission'] = "No permission";
		foreach($groups as $id => $name)
		{
			$usersInGroup = $this->user->getUserByGroup( $id, $this->idSite );
			
			$formElements = array();
			
			foreach($usersInGroup as $info)
			{
				
				// general input
				$formElements[] = array('checkbox',
										$info['login'],
										' ',
										$info['alias'] . " (login : ". $info['login'].")"
										// ". $info['email']
									);
			}
			
			$groupCopy = $groups;
			$groupCopy = array_merge( array( 0 => $GLOBALS['lang']['admin_move_select']), 
							$groupCopy);
			unset($groupCopy[$id]);
			
			$formElements[] = array('select',
									'group_to_move_to_'.$id,
									$GLOBALS['lang']['admin_move_group'],
									$groupCopy
								);
			
			$description = array();
			if($name == 'admin')
			{
				$description['name'] = $GLOBALS['lang']['admin_group_admin_n'];
				$description['description'] = $GLOBALS['lang']['admin_group_admin_d'];
			}
			elseif($name == 'view')
			{
				$description['name'] = $GLOBALS['lang']['admin_group_view_n'];
				$description['description'] = $GLOBALS['lang']['admin_group_view_d'];
			}
			else
			{
				$description['name'] = $GLOBALS['lang']['admin_group_noperm_n'];
				$description['description'] = $GLOBALS['lang']['admin_group_noperm_d'];
			}				
			$descriptionTxt = "<u>".$GLOBALS['lang']['generique_name']."</u> <b>$name</b> (".$description['name'] . ")<br><u>".$GLOBALS['lang']['generique_description'].
								"</u> " . $description['description']."<br>";	
			$this->addElements( $formElements , $descriptionTxt);
			
		}
		
		// launche process
		return parent::process( 'admin_group_title' );
		*/
		
		// New version
		$this->user = new UserConfigDb();
		$o_user =& User::getInstance();
		
		$groups = $this->user->getGroups();
		$users = $o_user->getAllUsers();
		$users['anonymous'] = "Anonymous";
		$userRight = array();

		foreach($users as $login => $name)
		{
			$userRight[$login] = array();
			if (empty($name)) {
				$userRight[$login][0] = $login;
			}
			else {
				$userRight[$login][0] = $name;
			}
			$userRight[$login][1] = "no_permission";
		}
		foreach($groups as $id => $name)
		{
			$usersInGroup = $this->user->getUserByGroup( $id, $this->idSite );
			foreach($usersInGroup as $info)
			{
				$userRight[$info['login']][1] = $id;
			}
		}
		$groups['no_permission'] = "No permission";
		
		$this->tpl->assign('id_site', $this->idSite);
		$this->tpl->assign('groups_available', $groups);
		$this->tpl->assign('users_available', $userRight);
		$this->tpl->assign('nb_users_available', count($userRight));
				
		// launche process
		return parent::process( 'admin_group_title' );
		// End new Version
		
	}
	
	function postProcess()
	{	
		/* 
		 * OLD VERSION 
		  	
		$submitValues = $this->getSubmitValues();
		$loginValidated = array();
		//var_dump($submitValues);
		
		foreach($submitValues as $name => $value)
		{
			// new group detected
			if(substr_count( $name, 'group_to_move_to_') > 0)
			{
				if($value !== '0')
				{
					//print_r($loginValidated);
					
					$this->user->setSiteGroups( $this->idSite, $value, $loginValidated);
					
					$loginValidated = array();
				}
			}
			else
			{
				$loginValidated[] = $name;
			}
		}
		$infoSite = array(	
			// db field name => new value
			'name' => $this->getSubmitValue('form_name'),
			'logo' => $this->getSubmitValue('form_logo'),
			'params_choice' => $this->getSubmitValue('form_params'),
		);
		
		$urlSite = $this->getSubmitValue('form_url');
		
		$params_names = $this->getSubmitValue('form_params_names');
		
		if(!empty($params_names))
		{
			$infoSite['params_names'] = $params_names;
		}
		*/
		
		// New version
		$this->idSite = $this->getSubmitValue("id_site");
		$nbUser = $this->getSubmitValue("nb_users_available");
		$loginValidatedByGroup = array();
		// Read info
		for ($i =1; $i <= $nbUser; $i++ ) {
			$idgroup = $this->getSubmitValue('right'.$i);
			$login = $this->getSubmitValue('name'.$i);
			if (! isset($loginValidatedByGroup[$idgroup])) {
				$loginValidatedByGroup[$idgroup] = array();
			}
			$loginValidatedByGroup[$idgroup][] = $login;
		}
		
		//var_dump($this->getSubmitValues());
		// Save data
		foreach($loginValidatedByGroup as $id => $loginValidated) 
		{
			$this->user->setSiteGroups( $this->idSite, $id, $loginValidated);
		}
			
	}
}
?>