<?php
/* 
 * phpMyVisites : website statistics and audience measurements
 * Copyright (C) 2002 - 2006
 * http://www.phpmyvisites.net/ 
 * phpMyVisites is free software (license GNU/GPL)
 * Authors : phpMyVisites team
*/

// $Id: SiteConfigDb.class.php 29 2006-08-18 07:35:21Z matthieu_ $

/**
 * deals with sites in the database
 */
class SiteConfigDb
{
	function SiteConfigDb()
	{
	}
	
	
	function checkInfo()
	{
		//var_dump($this->info['logo']);
		
		// check logo ok
		$f = INCLUDE_PATH."/images/logos/".$this->info['logo'];
		if( !file_exists( $f ))
		{
			trigger_error('Logo selected ('.INCLUDE_PATH."/images/logos/".$this->info['logo'].') does not exist!', E_USER_WARNING);
			$this->info['logo'] = 'pixel.gif';
		}
		
		$authParamsChoice = array( 'all', 'none', 'except', 'only' );
		
		// check params_choice is one of the 4 allowed 
		// (and so don't need to test in phpmyvisites.php)
		if( !in_array( $this->info['params_choice'], $authParamsChoice ))
		{
			$this->info['params_choice'] = 'all';
		}
	}
	
	function addSite( $a_info, $url )
	{
		//var_dump($a_info);
		$this->info = $a_info;
		
		$this->checkInfo();
		
		$idNewSite = insertLine( T_SITE, array_keys($this->info), array_values($this->info) );
		
		insertLine(T_SITE_URL, array('idsite', 'url'), array( $idNewSite, $url) );
	}
	
	function modSite( $a_info, $url )
	{
		//var_dump($a_info);
		$this->info = $a_info;
		
		$this->checkInfo();
		
		updateLine( T_SITE, $a_info, 'idsite');
		updateLine( T_SITE_URL, array( 'idsite' => $a_info['idsite'], 'url' => $url), 'idsite');
	}
	
	function delSite( $idSite )
	{
		$r = query("DELETE 
					FROM ".T_SITE."
					WHERE idsite = $idSite
					");
	}
	
	function modIpExclude( $a_ipValues, $idSite)
	{
		// delete old values
		$r = query("DELETE 
					FROM ".T_IP_IGNORE."
					WHERE idsite = ".$idSite
					);
		
		foreach($a_ipValues as $value)
		{
			insertLine( T_IP_IGNORE, array('ip_min', 'ip_max', 'idsite'), $value ); 
		}
	}

	function setNewsletterName( $name, $idNl)
	{
		$r = query("UPDATE ".T_NEWSLETTER."
					SET name = '$name'
					WHERE idnewsletter = $idNl
					");
	}
	
	function addNewsletter( $name, $idSite)
	{
		$r = query("INSERT 
					INTO ".T_NEWSLETTER."	(idsite, name) 
					VALUES ($idSite, '$name')
					");
	}
	
	function delNewsletter($idNewsletter )
	{
		$r = query("DELETE 
					FROM ".T_NEWSLETTER."
					WHERE idnewsletter = $idNewsletter
					");
	}
	function addPartner( $name, $a_urls, $idSite )
	{
		$r = query("INSERT INTO ".T_SITE_PARTNER." (idsite, name)
					VALUES ($idSite, '$name')
					");
		$this->setPartnerUrls( $a_urls, mysql_insert_id() );
	}
	function setPartnerUrls( $a_urls, $partnerId )
	{
		$r = query("DELETE FROM ".T_SITE_PARTNER_URL."
					WHERE idsite_partner = $partnerId
					");
		
		foreach($a_urls as $value)
		{
			insertLine( T_SITE_PARTNER_URL, array('idsite_partner', 'url'), array( $partnerId, $value) ); 
		}
	}
	function setPartner( $name, $a_urls, $idPartner)
	{
		$r = query("UPDATE ".T_SITE_PARTNER."
					SET name = '$name'
					WHERE idsite_partner = $idPartner
					");
		$this->setPartnerUrls( $a_urls, $idPartner );
	}
	function delPartner( $idPartner)
	{
		
		$r = query("DELETE 
					FROM ".T_SITE_PARTNER.", ".T_SITE_PARTNER_URL."
					USING ".T_SITE_PARTNER."
						LEFT JOIN ".T_SITE_PARTNER_URL."
						USING ( idsite_partner )
					WHERE ".T_SITE_PARTNER.".idsite_partner = $idPartner
					");
	}
	function setUrls( $a_urls, $idSite )
	{
		$r = query("DELETE FROM ".T_SITE_URL."
					WHERE idsite = $idSite");
		
		foreach($a_urls as $value)
		{
			insertLine( T_SITE_URL, array('idsite', 'url'), $value ); 
		}
	}
}
?>