<?php
/* 
 * phpMyVisites : website statistics and audience measurements
 * Copyright (C) 2002 - 2006
 * http://www.phpmyvisites.net/ 
 * phpMyVisites is free software (license GNU/GPL)
 * Authors : phpMyVisites team
*/

// $Id: InstallCreateTables.class.php 29 2006-08-18 07:35:21Z matthieu_ $


require_once INCLUDE_PATH."/core/include/InstallModule.class.php";

class InstallCreateTables extends InstallModule
{
    var $viewTemplate = "install/create_tables.tpl";
	
	var $stepNumber = 4;
    
	function InstallCreateTables()
	{
		parent::InstallModule();
	}

	function process()
	{
		
		$next_step = false;
		
		$db =& Db::getInstance();
		$tablesInstalled = $db->getAllInstalledTables();
		
		// some tables are already in the database
		// offer clean install
		if(sizeof($tablesInstalled) > 0)
		{
//			print("tables déjà présentes");
			
			if($this->request->getTablesClean() == 1)
			{
				// asked for clean all tables!
				$db->eraseExistingTables();
				$thereIsNoTable = true;
			}
			else
			{
				// ask for clean all table or reuse
				$this->tpl->assign("offer_clean_install", true);
			}
		}
		else
		{
			$thereIsNoTable = true;
		}
		
		if(isset($thereIsNoTable))
		{
			$db->createAllTables();
			$db->setVersion( PHPMV_VERSION );
			$next_step =true;
			$this->tpl->assign("tables_success", true);
		}
		
		$this->tpl->assign("show_next_step", $next_step);
	}
}
?>