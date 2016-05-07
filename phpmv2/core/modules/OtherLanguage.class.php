<?php
/* 
 * phpMyVisites : website statistics and audience measurements
 * Copyright (C) 2002 - 2006
 * http://www.phpmyvisites.net/ 
 * phpMyVisites is free software (license GNU/GPL)
 * Authors : phpMyVisites team
*/

// $Id: OtherLanguage.class.php 29 2006-08-18 07:35:21Z matthieu_ $


class OtherLanguage extends Module
{
	
	var $viewTemplate = "common/other_language.tpl";
	
	function OtherLanguage()
	{
		parent::Module();
	}
	
	function showAll()
	{
		if (!$this->isCached())
		{
			$ctrl =& ApplicationController::getInstance();
			$o_lang = $ctrl->getLang();
			
			$this->tpl->assign("link_doc", array( HREF_DOC_OPEN, HREF_DOC_CLOSE));
			$this->tpl->assign("translators_array", $o_lang->getArrayTranslators());
		}
		$this->display();
	}
}
?>