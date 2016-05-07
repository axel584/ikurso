<?php
/* 
 * phpMyVisites : website statistics and audience measurements
 * Copyright (C) 2002 - 2006
 * http://www.phpmyvisites.net/ 
 * phpMyVisites is free software (license GNU/GPL)
 * Authors : phpMyVisites team
*/

// $Id: AdminModule.class.php 29 2006-08-18 07:35:21Z matthieu_ $

require_once INCLUDE_PATH."/core/include/DataModel.class.php";
require_once INCLUDE_PATH."/core/include/Site.class.php";
require_once INCLUDE_PATH."/core/include/Archive.class.php";

class AdminModule extends Module
{
	var $partName;
	
	//the datamodel
	var $data;
	
	
	/**
	 * ViewModule constructor
	 * @param $name string the partName
	 * @param $o_data object , datas to render
	 * 
	 * @return void
	 */
	function AdminModule($name = "", $o_data = null)
	{
		$this->partName = $name;
		$this->data =& $o_data;
	
		parent::Module();
	}
	
	
	/**
	 * initialize module with request datas
	 * 
	 * @param object request
	 * @return void
	 */
	function init(&$request)
	{
	    parent::init($request);
		$this->tpl->caching = 0;
		
		if(isset($this->site))
		{
			$this->site->generateFiles();
		}

	    // set mod to view because of specific elements in this case (period_selection.tpl)
		$this->tpl->assign('mod', 'admin');

	}

	/**
	 * Main job method overided in each view plugin
	 * this method should take care of obtaining and processing datas
	 * 
	 * @return void
	 */
	function process()
	{
		echo('please override me...');
	}
	
	
	/**
	 * default display method for all views
	 * 
	 * @return void
	 */
	function showAll()
	{	
		$this->process();		
		
		$this->display();
	}

	function needASiteAdminSelected()
	{
		$idSite = $this->request->getAdminSite();
		
		if( !$idSite )
		{
			//print("Select a site");
			$this->tpl->template = "admin/site_selection.tpl";
			
			return false;
		}
		else
		{
			//print("Site selected");
			return $idSite;
		}
	}
	
	function needConfirmation( $type, $idDependOnType)
	{	
		$confirmed = $this->request->getConfirmedState();
		
		if($confirmed == 1)
		{
			return true;
		}
		else
		{
			switch($type)
			{
				case 'site':
					$o_site = new Site($idDependOnType);
					
					$subStr = sprintf( 
										$GLOBALS['lang']['generique_siteno'],
										'<b>"'.$o_site->getName().'"</b>'
										);
				
				break;
				
				case 'newsletter':
					
					$subStr = sprintf( 
										$GLOBALS['lang']['generique_newsletterno'],
										'<b>"'.$this->site->getNewsletterName($idDependOnType ).'"</b>'
										);
				
				
				break;
				
				case 'partner':
					$subStr = sprintf( 
										$GLOBALS['lang']['generique_partnerno'],
										'<b>"'.$this->site->getPartnerNameFromId( $idDependOnType ).'"</b>'
										);
				break;
				
				case 'user':
					$subStr = sprintf( 
										$GLOBALS['lang']['generique_user'],
										'<b>"'. $idDependOnType.'"</b>'
										);
				break;
					
			}
			$this->tpl->assign( 'message', 
							sprintf( 
								$GLOBALS['lang']['admin_deleteconfirm'],
								$subStr
									)
								);
			$this->tpl->assign("confirmation", $type); // flag smarty
			
			$this->tpl->template = "admin/ask_confirmation.tpl";
			
			return false;
		}
	}
	
	function setMessage(  )
	{
		$this->tpl->template = "admin/message.tpl";
		$this->tpl->assign("message", $GLOBALS['lang']['generique_done']);
	}
}
?>
