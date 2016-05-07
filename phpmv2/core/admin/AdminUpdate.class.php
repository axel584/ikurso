<?php
/* 
 * phpMyVisites : website statistics and audience measurements
 * Copyright (C) 2002 - 2006
 * http://www.phpmyvisites.net/ 
 * phpMyVisites is free software (license GNU/GPL)
 * Authors : phpMyVisites team
*/

// $Id: AdminUpdate.class.php 78 2006-09-14 13:09:59Z matthieu_ $



require_once INCLUDE_PATH."/core/include/AdminModule.class.php";

class AdminUpdate extends AdminModule
{
    var $viewTemplate = "admin/update.tpl";
    
	function AdminUpdate()
	{
		parent::AdminModule();
	}

	
	function process()
	{	
		$dirUpdates = INCLUDE_PATH . "/core/include/updates/";
		$db =& Db::getInstance();
		$oldVersion = $db->getVersion();
		$infos = getSystemInformation( $this->tpl );
		
		if($dh = opendir( $dirUpdates ))
		{
			while(($file = readdir($dh)) !== false)
			{
				if($file != "update-currentversion.php" 
				&& preg_match("/^update-(.*)\.php$/", $file, $matches))
				{
					if(version_compare( $oldVersion, $matches[1] ) == -1)
					{
						require $dirUpdates . $matches[0];
					}
				}
			}
		}
		
		Db::setVersion( PHPMV_VERSION );
		
		$this->tpl->assign("a_versions",array("<b>".$oldVersion."</b>", "<b>".PHPMV_VERSION."</b>"));	
		$this->tpl->clear_all_cache();
	}
}
?>