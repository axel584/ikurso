<?php
/* 
 * phpMyVisites : website statistics and audience measurements
 * Copyright (C) 2002 - 2006
 * http://www.phpmyvisites.net/ 
 * phpMyVisites is free software (license GNU/GPL)
 * Authors : phpMyVisites team
*/

// $Id: AdminSiteCookieExclude.class.php 29 2006-08-18 07:35:21Z matthieu_ $


require_once INCLUDE_PATH."/core/include/AdminModule.class.php";

class AdminSiteCookieExclude extends AdminModule
{
    var $viewTemplate = "admin/site_cookie_exclude.tpl";
    
	function AdminSiteCookieExclude()
	{
		parent::AdminModule();
		
	}

	function process()
	{
		$siteAdmin = $this->needASiteAdminSelected();
		
		if($siteAdmin)
		{
			$choice = $this->request->getConfirmedState();
			
			$cookieSet = false;
			
			// is the cookie already set or not?
			if(isset($_COOKIE[COOKIE_NAME_NO_STAT.$siteAdmin]))
			{
				$cookieSet = true;
			}
			
			if($choice == 1)
			{
				$ck = new Cookie(COOKIE_NAME_NO_STAT.$siteAdmin);
				if($cookieSet)
				{
					$ck->delete();
				}
				else
				{
					$ck->save();
				}
				$this->setMessage();
			}
			else
			{
				if($cookieSet)
				{
					$this->tpl->assign("cookie_no_stat", true);
				}
				else
				{
					$this->tpl->assign("cookie_no_stat", false);
				}
			}
		}
	}
}
?>