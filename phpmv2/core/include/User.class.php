<?php
/* 
 * phpMyVisites : website statistics and audience measurements
 * Copyright (C) 2002 - 2006
 * http://www.phpmyvisites.net/ 
 * phpMyVisites is free software (license GNU/GPL)
 * Authors : phpMyVisites team
*/

// $Id: User.class.php 54 2006-08-22 06:02:38Z matthieu_ $

require_once INCLUDE_PATH . "/core/include/Cookie.class.php";

class User
{	
	var $cookie;
	var $viewPermission;
	var $adminPermission;
	var $suPermission;
	var $login;
	var $password;
	
	var $infoUser;
	
	function User( )
	{
		$this->alias = 'Anonymous';
		$this->login = 'anonymous';

		$this->cookie = new Cookie( COOKIE_NAME_SESSION );
		$this->cookie->setExpire( 3600 );
		$this->viewPermission = array();
		$this->adminPermission = array();
		$this->suPermission = false;
		$this->rssHash = false;
		$this->rssHashUrl = false;
	}
	
	/**
     * Singleton
     */
    function &getInstance()
    {
        static $instance;
        if (!isset($instance)){
            $c = __CLASS__;
            $instance = new $c();
        }
		return $instance;
        
    }
	
	function getInfo( $login )
	{
		$r = query("SELECT *
						FROM ".T_USERS."
						WHERE login = '".$login."'");
		return mysql_fetch_assoc($r);			
	}
	
	function getAlias()
	{
		return $this->alias;
	}
	
	function getLogin()
	{
		return $this->login;
	}
	
	function isCorrect( $login, $password)
	{
		$db =& Db::getInstance();
		$toReturn = false;
		$conf =& PmvConfig::getInstance();
		$suLogin = $conf->content['su_login'];
		$suPassword = $conf->content['su_password'];
		
		//print($login . " and $password");
		if($login === $suLogin && $password === $suPassword	)
		{
			$this->suPermission = true;
			$toReturn =  true;
		}
		elseif( $login === 'anonymous')
		{
			$toReturn = true;
		}
		elseif( !empty($login) && !empty($password))
		{
			if($db->isReady())
			{
				// select password for the login
				$r = query("SELECT password
							FROM ".T_USERS."
							WHERE login = '".$login."'");
				if(mysql_num_rows( $r ) > 0)
				{
					while( $rr = mysql_fetch_array($r) )
					{
						if($rr['password'] === $password)
						{
							$toReturn = true;
							break;
						}
					}
				}
			}
		}
		
		if($toReturn)
		{
			$this->setLoginAndPassword($login, $password );
		}
		return $toReturn;
	}
	
	function setLoginAndPassword($login, $password)
	{
		$this->login = $login;
		$this->password = $password;
		$this->cookie->setVar('login',$login);
		$this->cookie->setVar('password',$password);
		$this->cookie->save();		
	}
	
	function getRssHash()
	{
		if($this->suPermission)
		{
			return md5( SU_LOGIN . SU_PASSWORD );
		}
		else
		{
			return $this->rssHash;
		}
	}
	
	function loadPermissions()
	{
		if(!$this->suPermission)
		{
			if($this->rssHashUrl)
			{
				if($this->rssHashUrl == md5( SU_LOGIN . SU_PASSWORD ))
				{
					$this->suPermission = true;
					return;
				}
				
				$fieldName = 'rss_hash';
				$fieldValue = $this->rssHashUrl;
				
			}
			else
			{
				$fieldName = 'login';
				$fieldValue = $this->login;
			}
			$db =& Db::getInstance();
			if( $db->isReady()
					&& $db->areAllTablesInstalled())
			{
				// load viewPersmissions and adminPermissions for each site
				$r = query("SELECT *
							FROM (".T_USERS." as u LEFT JOIN
										".T_USERS_LINK_GROUPS." USING (login))
											LEFT JOIN
												".T_GROUPS." USING ( idgroups )
							WHERE u.$fieldName = '".$fieldValue."'
										");
				while( $rr = mysql_fetch_assoc($r))
				{
					if($rr['view'] == '1')
						$this->viewPermission[$rr['idsite']] = true;
					
					if($rr['admin'] == '1')
						$this->adminPermission[$rr['idsite']] = true;
				}
				
				$r = query("SELECT alias, rss_hash 
							FROM ".T_USERS."
							WHERE login = '".$this->login."'
							LIMIT 1");
				
				$r = mysql_fetch_assoc($r);
				$this->alias = $r['alias'];
				$this->rssHash = $r['rss_hash'];
			}
		}
		else
		{
			$this->alias = $GLOBALS['lang']['admin_admin'];
		}
	}
	
	function setRssHash( $hash )
	{
		$this->rssHashUrl = $hash;
		$this->loadPermissions();
	}
	
	
    
    function NoSitePermission()
    {
    	return $this->getSiteAllowed() == -1;
    }
    
	function getSiteAllowed()
	{
		$o_request =& Request::getInstance();
		$siteId = $o_request->getSiteId();
		
		if($this->suPermission
			|| isset($this->viewPermission[$siteId]) 
			|| isset($this->adminPermission[$siteId]))
		{
			return $siteId;
		}
		foreach($this->adminPermission as $key => $v)
		{
			return $key;
		}
		foreach($this->viewPermission as $key => $v)
		{
			return $key;
		}
		return -1;
	}
	
	function isAuthorized( $moduleName )
	{
		$request =& Request::getInstance();
		if( in_array(	$request->getModuleNameFromUrl(), 
						array( 'view_rss', 'view_pdf')
				)
		)
		{
			$this->setRssHash( $request->getRssHash()  );
		}
		
		if( in_array( $moduleName, array('login', 'logout', 'view_rss'))) 
		{
			return true;
		}
		
		$needViewRight = array(
					'contacts',
					'index',
					'other_language',
					);
		$tryLogin = $this->cookie->getVar('login');
		$tryPassword = $this->cookie->getVar('password');
		
		if(empty($tryLogin))
		{
			$tryLogin = 'anonymous';
		}
		
		if($this->isCorrect( $tryLogin, $tryPassword ))
		{
			$this->loadPermissions();
			$o_request =& Request::getInstance();
			$siteId    = $this->getSiteAllowed();
			
			// no permission at all
			if( $siteId == -1 ) 
			{
				return false;
			}
			$o_request->setSiteId($siteId);
			$siteAdmin = $o_request->getAdminSite();
			
			if( // other (install, general admin)
				$this->suPermission
			||
				// view (+ contacts, other_langage, etc.)
				((in_array( $moduleName, $needViewRight) || substr($moduleName, 0, 5) == 'view_')
					&& isset($this->viewPermission[ $siteId ]))
			||
				// admin
				(substr($moduleName, 0, 11) == 'admin_site_'
					&& 
						// have permission
						( 
							isset($this->adminPermission[ $siteAdmin ])
							|| 
							// site not selected yet BUT i know I have some admin 
							// permission on one site
							(!$siteAdmin && sizeof($this->adminPermission) > 0)
						)
				)
			||
				// asked for admin_index and we're sure he has at least one admin permission
				($moduleName === 'admin_index' && sizeof($this->adminPermission) > 0)
			)
			{
				return true;
			}
		}
		return false;
	}
	
	function isSiteAllowedView( $id )
	{
		return $this->suPermission || isset($this->viewPermission[$id]);
	}

	function isSiteAllowedAdmin( $id )
	{
		return $this->suPermission || isset($this->adminPermission[$id]);
	}
	
	function getAllUsers()
	{
		$return = array();
		$r = query("SELECT login, alias
					FROM ".T_USERS);
		while($rr = mysql_fetch_assoc($r))
		{
			if($rr['login'] != 'anonymous')
				$return[$rr['login']] = $rr['alias'];
		}
		return $return;
	}
}
?>