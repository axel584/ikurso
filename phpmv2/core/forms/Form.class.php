<?php
/* 
 * phpMyVisites : website statistics and audience measurements
 * Copyright (C) 2002 - 2006
 * http://www.phpmyvisites.net/ 
 * phpMyVisites is free software (license GNU/GPL)
 * Authors : phpMyVisites team
*/

// $Id: Form.class.php 79 2006-09-14 14:07:54Z matthieu_ $

require_once INCLUDE_PATH . "/libs/Html/QuickForm.php";
require_once INCLUDE_PATH . "/libs/Html/QuickForm/Renderer/ArraySmarty.php";

class Form extends HTML_QuickForm
{
	var $a_formElements = array();
	var $tpl; // reference to template object
	
	
	function Form( &$template, $action = null )
	{
		if(is_null($action))
		{
			$action =  Request::getCurrentUrl();
		}
		
		parent::HTML_QuickForm('form_phpmv', 'POST', $action);
	
		$this->tpl =& $template;
		
		$this->init();	

	}
	
	
	function init()
	{
		$this->applyFilter('__ALL__','trim'); 

		$this->registerRule( 'checkCorrectIp', "function", 'checkCorrectIp'); 
		$this->registerRule( 'compareField', "function", 'compareField'); 
		$this->registerRule( 'complexPassword', "function", "checkPasswordComplexity");
		$this->registerRule( 'checkCorrectUrl', "function", "checkCorrectUrl");
	}
	
	function getRuleCheckUrl( $inputName )
	{
		return array($inputName, 
					sprintf($GLOBALS['lang']['admin_error_url'], URL_SITE_EXAMPLE), 
					'checkCorrectUrl');
	}
	
	function getSubmitValue( $name )
	{
		return addslashes(parent::getSubmitValue( $name ));
	}
	function getElementList()
	{
		$listElements=array();
		foreach($this->a_formElements as $title =>  $a_parameters)
		{
			foreach($a_parameters as $parameters)
			{
				if($parameters[1] != 'headertext' 
					&& $parameters[1] != 'submit')
				{					
					// case radio : there are two labels but only record once, unique name
					if( !isset($listElements[$title]) 
					|| !in_array($parameters[1], $listElements[$title]))
					{
						$listElements[$title][] = $parameters[1];
					}
				}
			}
		}
		return $listElements;
	}
	
	function addElements( $a_formElements, $sectionTitle = '' )
	{
		
		foreach($a_formElements as $parameters)
		{
			call_user_func_array(array(&$this , "addElement"), $parameters );
		}
		
		$this->a_formElements = 
					array_merge(
							$this->a_formElements, 
							array( 
								$sectionTitle =>  $a_formElements
								)
						);
	}
	
	function addRules( $a_formRules)
	{
		foreach($a_formRules as $parameters)
		{
			call_user_func_array(array(&$this , "addRule"), $parameters );
		}
		
	}
	
	function process( $indexLang = null)
	{
		if(!is_null($indexLang))
		{
			$this->addElement('header', 'headertext', $GLOBALS['lang'][$indexLang]);			
		}
		$this->addElement('submit', 'submit', $GLOBALS['lang']['install_valider']);
		$this->addElement('submit', 'back', $GLOBALS['lang']['admin_retour']);
		
		if($this->getSubmitValue('back') === $GLOBALS['lang']['admin_retour'])
		{
			Request::redirectToModule('admin_index');
		}
		else if ($this->validate() ) 
		{
			$this->postProcess();
			return true;
		}
		else
		{
			$this->display();
			return false;
		}
	}
	
	function display()
	{
		// Create the renderer object	
		$renderer =& new HTML_QuickForm_Renderer_ArraySmarty($this->tpl);
		
		// build the HTML for the form
		$this->accept($renderer);
		
		// assign array with form data
		$this->tpl->assign('form_data', $renderer->toArray());
		
		$this->tpl->assign('list_elements', $this->getElementList());
		
		//echo "<pre>";var_dump($renderer->toArray());echo "</pre>";
	}
	
	function setChecked( $nameRadio, $valueRadio )
	{
		foreach( $this->_elements as $key => $value)
		{
			if($value->_attributes['name'] == $nameRadio 
				&& $value->_attributes['value'] == $valueRadio
				)
			{
				$this->_elements[$key]->_attributes['checked'] = 'checked';
			}
		}
	}
	
	function setSelected( $nameSelect, $valueToSelect)
	{
		foreach( $this->_elements as $key => $value)
		{
			if($value->_attributes['name'] == $nameSelect )
			{
				//print("VARIABLE");
				//var_dump($value);
				foreach($value->_options as $keyOptions => $options)
				{
					/*
					 * 0 => 
					    array
					      'text' => 'Arabic' (length=6)
					      'attr' => 
					        array
					          'value' => 'ar-utf-8.php' (length=12)
					  1 => 
					    array
					      'text' => 'Bulgarian' (length=9)
					      'attr' => 
					        array
					          'value' => 'bg-utf-8.php' (length=12)
					 */
					if( $options['attr']['value'] == $valueToSelect)
					{
						$this->_elements[$key]->_options[$keyOptions]['attr']['selected'] = 'selected';
					}
				}
			}
		}
	}
}
?>