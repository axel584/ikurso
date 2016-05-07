<?php
/* 
 * phpMyVisites : website statistics and audience measurements
 * Copyright (C) 2002 - 2006
 * http://www.phpmyvisites.net/ 
 * phpMyVisites is free software (license GNU/GPL)
 * Authors : phpMyVisites team
*/

// $Id: UserConfigDb.class.php 29 2006-08-18 07:35:21Z matthieu_ $

/**
 * deals with sites in the database
 */
class UserConfigDb
{
	function UserConfigDb()
	{
	}
	
	function addUser( $a_info )
	{
		//var_dump($a_info);

		$a_info['rss_hash'] = md5( $a_info['login'] . time() );
		$a_info['date_registered'] = time();
		insertLine( T_USERS, array_keys($a_info), array_values($a_info) );
	}
	
	function modUser( $a_info )
	{
		//var_dump($a_info);
		
		updateLine( T_USERS, $a_info, 'login');
	}
	
	function delUser( $login )
	{
	    $r = query("DELETE 
	    FROM ".T_USERS."
	    WHERE login = '$login'
	    ");
	
	    $r = query("DELETE
	    FROM ". T_USERS_LINK_GROUPS ."
	    WHERE login = '$login'
	    ");
	}
	
	function setSiteGroups( $idSite, $idGroup, $loginValidated)
	{
		// delete all permissions!
		foreach($loginValidated as $login)
		{
			if(!($idGroup == 1 && $login == 'anonymous'))
			{
				$r = query("DELETE FROM ".T_USERS_LINK_GROUPS."
					WHERE idsite = $idSite
					AND login = '".$login."'");
			}
		}

		// case we set new permissions for logins
		// if no permission asked, do nothing because we already deleted all permissions
		if($idGroup != 'no_permission')
		{
			foreach($loginValidated as $login)
			{
				if(!($idGroup == 1 && $login == 'anonymous'))
				{
					// set permission to "idGroup" for all login for the current site
					$r = query("INSERT INTO ".T_USERS_LINK_GROUPS."
								(idsite, idgroups, login)
								VALUES
								($idSite, $idGroup, '$login')");
				}
			}
		}
	}
	function getUserByGroup( $idGroup, $idSite )
	{
		// no permission user
		if($idGroup == 'no_permission')
		{
			$allUser = array();
			$r = query("SELECT login, alias, email, send_mail
						FROM  ".T_USERS);
			while($rr=mysql_fetch_assoc($r))
			{
				$allUser[$rr['login']] = $rr;
			}
			
			// select users with a right on this site
			$r = query("SELECT login
						FROM ".T_USERS_LINK_GROUPS."
						WHERE idsite = $idSite
						");
			while($rr = mysql_fetch_assoc($r))
			{
				// remove the user with right element in all user array
				// we keep only user with no right on this site
				unset($allUser[$rr['login']]);
			}
			return $allUser;
		}
		else
		{
			// select users with a right on this site
			$return = array();
			$r = query("SELECT u.login, alias, email, send_mail
						FROM ".T_USERS_LINK_GROUPS." as l, ".T_USERS." as u
						WHERE idgroups = $idGroup
						AND idsite = $idSite
						AND l.login = u.login");
			while($rr = mysql_fetch_assoc($r))
			{
				$return[] = $rr;
			}
			return $return;
		}
	}
	function getGroups()
	{
		$return = array();
		$r = query("SELECT idgroups, name
					FROM ".T_GROUPS);
		while($rr = mysql_fetch_assoc($r))
		{
			$return[$rr['idgroups']] = $rr['name'];
		}
		return $return;
	}
}
?>