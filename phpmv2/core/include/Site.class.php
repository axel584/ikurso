<?php
/* 
 * phpMyVisites : website statistics and audience measurements
 * Copyright (C) 2002 - 2006
 * http://www.phpmyvisites.net/ 
 * phpMyVisites is free software (license GNU/GPL)
 * Authors : phpMyVisites team
*/

// $Id: Site.class.php 107 2006-10-02 09:40:54Z matthieu_ $


require_once INCLUDE_PATH . "/core/include/Date.class.php";
require_once INCLUDE_PATH . "/core/include/functions.php";;
require_once INCLUDE_PATH . "/core/include/Request.class.php";
require_once INCLUDE_PATH . "/core/include/User.class.php";

/**
 * Class containing info relative to the site we're working on
 */
class Site
{
	/**
	 * @var int site id, in the table 'site'
	 */
	var $id;
	
	/**
	 * @var array Urls of the site registered in the database
	 */
	var $a_urls;
	
	/**
	 * @var array Misc info relative to the site, registered in the database
	 */
	var $a_info;
	
	/**
	 * @var string File name of the logo
	 */
	var $logo;
	
	/**
	 * @var array Array containing info about URLs parameters excluding
	 */
	var $a_params;
	
	/**
	 * @var array Array containing info about newsletters registered
	 */
	var $a_newsletters;
	
	/**
	* @var array Array containing info about partners_name URL=>Name
	*/
	var $a_partnerName;
	
	/**
	* @var array Array containing info about partners_id : Id=>Name
	*/
	var $a_partnerId;
		
	/**
	* @var array Array containing info about newsletters registered Name=>array(url1, url2), Name2=>...
	*/
	var $a_partnerUrls;
	
	/**
	* @var string Url of the partner found during the call of _isUrlInArray
	*/
	var $_partner_found_url;
	
	/**
	* @var object Date of the first day with log for this site
	*/
	var $minDay;
	
	var $a_info_all_sites;
	
	/**
	 * Constructor. Loads Urls and misc info about the site.
	 * 
	 * @param int $id
	 */
	function Site($id)
	{
		$this->id = $id;

		$a = $this->loadUrls();

		if(isset($a[$this->id]))
			$this->a_urls = $a[$this->id];
	
		//print("Site urls : "); printDebug($this->a_urls);
				
		$a = $this->loadInfo();
		$this->a_info_all_sites = $a;
		
		if(isset($a[$this->id]))
			$this->a_info = $a[$this->id];
		//print("Site info : "); printDebug($this->a_info);
		
	}
	
	function getSitesId()
	{
		$return = array();
		
		if(isset($this->a_info_all_sites))
		{
			foreach($this->a_info_all_sites as $value)
			{
				$return[] = $value['idsite'];
			}
		}
		return $return;
	}
	/**
	 * returns site id
	 */
	function getId()
	{
		return $this->id;
	}
	
	function getName()
	{
		return $this->a_info['name'];
	}
	/**
	 * returns array of params options
	 */
	function getParams()
	{
		return array('params_choice' => $this->a_info['params_choice'], 
					 'params_names' => $this->a_info['params_names']);
	}
	
	/**
	 * tests if the Url belongs to the array
	 * Also assigns the value to partner_found if found
	 * 
	 * @access private
	 * 
	 * @param string $refererUrl
	 * @param array $arrayUrls
	 * 
	 * @return bool
	 */
	function _isUrlInArray($refererUrl, $arrayUrls)
	{
		if(!empty($refererUrl))
		{
			$refererParse = parse_url($refererUrl);
			if(is_array($refererParse) 
				&& isset($refererParse['host']) 
				&& isset($refererParse['scheme'])
				&& is_array($arrayUrls)
				&& in_array($refererParse['scheme'].'://'.$refererParse['host'], $arrayUrls)
			)
			{
				$this->_partner_found_url = $refererParse['scheme'].'://'.$refererParse['host'];
				return true;
			}
		}
		return false;
	}
	
	/**
	 * return the Date object of the first day of logs for the site
	 */
	function getMinDay($type = 'object')
	{
		if(!isset($this->minDay))
		{
			$this->loadMinDay();
		}
		
		return ($type == 'object') 
							? $this->minDay
							: $this->minDay->get();
	}


	/**
	 * loads info about the first day of log
	 * 
	 * @return object
	 */
	function loadMinDay()
	{				
		
		$firstDate = getDateFromTimestamp(time());
		
		$db =& Db::getInstance();
		if(!$db->isReady()
			|| !$db->areAllTablesInstalled())
		{
			$this->minDay = new Date( $firstDate );
			return false;
		}
		
		$siteFirstDate = array();
		
		$fileAdress = INCLUDE_PATH."/config/site_first_date.php";
		
		if(is_file($fileAdress))
		{
			require $fileAdress;
		}

		if(!isset($siteFirstDate[$this->id]))
		{
			
			$r = query("SELECT date1
						FROM ".T_ARCHIVES."
						WHERE period = ".DB_ARCHIVES_PERIOD_DAY."
				  		AND idsite = ". $this->getId() ."
						ORDER BY idarchives ASC
						LIMIT 1
						");
							
			
			if(mysql_num_rows($r) === 0)
			{
				$r2 = query("SELECT server_date" .
				" FROM ".T_VISIT."
				  WHERE idsite = ". $this->getId() .
				" LIMIT 1"
				);

				if(mysql_num_rows($r2) === 0)
				{
					if(!isset($GLOBALS['sitePrinted'][$this->id]))
					{
						//print($GLOBALS['lang']['generique_aucune_visite_bdd'] . 
						//		"<br><b>Site: ".$this->getName()." (id=".$this->id.")</b><br><br>");
						$GLOBALS['sitePrinted'][$this->id] = true;
					}
				}
				else
				{
					$l = mysql_fetch_assoc($r2);
					$firstDate = $l['server_date'];
				}
			}
			else
			{
				$l = mysql_fetch_assoc($r);
				
				$firstDate = $l['date1'];
			}
			
			$o_firstDate = new Date($firstDate);
			
			if($o_firstDate->getTimestamp() > time())
			{
				$firstDate =  getDateFromTimestamp(time());
			}
			
			$siteFirstDate[$this->id] = $firstDate;
			
			// save new info in config file
			saveConfigFile($fileAdress, $siteFirstDate, 'siteFirstDate');
	
		}
		else
		{
			$firstDate = $siteFirstDate[$this->id];
		}
		
		$this->minDay = new Date($firstDate);
		return true;
	}
	
	/**
	 * tests if an url belongs to the site urls
	 * 
	 * @param string $refererUrl
	 * 
	 * @return bool
	 */
	function isUrlIn($refererUrl)
	{
		return $this->_isUrlInArray($refererUrl, $this->a_urls);
	}
	
	/**
	 * tests if the url is a partner url
	 * 
	 * @param string $refererUrl
	 * 
	 * @return bool
	 */
	function isPartner($refererUrl)
	{
		return $this->_isUrlInArray($refererUrl, $this->getPartnerUrlsFlat());
	}
	
	/**
	 * returns logo file name
	 * 
	 * @return string
	 */
	function getLogo()
	{
		return $this->a_info['logo'];
	}
	
	/**
	 * returns array of site urls
	 * 
	 * @return array
	 */
	function getUrls()
	{
		return $this->a_urls;
	}
	
	/**
	 * returns array of site info
	 * 
	 * @return array
	 */
	function getInfo()
	{
		return $this->a_info;
	}
	
	/**
	 * returns array of Partner urls group by partner host
	 * 
	 * @return array
	 */
	function getPartnerUrls()
	{
		if(!isset($this->a_partnerUrls))
		{
			$this->loadPartner();
		}
		return $this->a_partnerUrls;
	}
	
	/**
	 * returns array of partner urls, flat, without being grouped by hostname
	 * 
	 * @return array
	 */
	function getPartnerUrlsFlat()
	{
		if(!isset($this->a_partnerUrlsFlat))
		{
			$this->loadPartner();
		}
		return $this->a_partnerUrlsFlat;
	}
	
	/**
	 * returns partner name which has been detected previously with isPartner
	 *  
	 * @return string
	 */
	function getPartnerName()
	{
		if(!isset($this->a_partnerUrls))
		{
			$this->loadPartner();
		}
		return $this->a_partnerName[$this->_partner_found_url];
	}
	
	/**
	 * returns Name of the partner who has id = $id
	 * 
	 * @param int $id
	 * 
	 * @return string
	 */
	function getPartnerNameFromId($id)
	{
		if(!isset($this->a_partnerId))
		{
			$this->loadPartner();
		}
		return isset($this->a_partnerId[$id])
					? $this->a_partnerId[$id]
					: 'unknown partner';
	}
	
	function getPartnerUrlsId( $idPartner)
	{
		if(!isset($this->a_partnerUrlsId))
		{
			$this->loadPartner();
		}
		return $this->a_partnerUrlsId[$idPartner];
	}

	function getPartnerSite()
	{
		if(!isset($this->a_partnerSite))
		{
			$this->loadPartner();
		}
		return $this->a_partnerSite;
	}
	/**
	* returns Name of the newsletter who has id = $id
	* 
	* @param int $id
	* 
	* @return string
	*/
	function getNewsletterName($id)
	{
		if(!isset($this->a_newsletters))
		{
			$this->loadNewsletter();
		}
		return isset($this->a_newsletters[$id])?$this->a_newsletters[$id]:false;
	}
	
	function getNewsletters()
	{
		if(!isset($this->a_newsletters))
		{
			$this->loadNewsletter();
		}
		return $this->a_newsletters;
	}
	
	function getNewslettersSite()
	{
		if(!isset($this->a_newsletters))
		{
			$this->loadNewsletter();
		}
		return $this->a_newslettersSite;
	}
	
	/**
	 * loads all partners properties
	 */
	function loadPartner()
	{
		$r = query("SELECT pu.url as url, p.name as name, p.idsite_partner as id, p.idsite as idsite
					FROM ".T_SITE_PARTNER." as p 
						LEFT JOIN ".T_SITE_PARTNER_URL." as pu 
							USING (idsite_partner)
			"		
			//WHERE p.idsite = ".$this->id."
					);
		$p = array();
		$p2 = array();
		$p3 = array();
		$p4 = array();
		$p5 = array();
		$p6 = array();
		while($l = mysql_fetch_assoc($r))
		{
			$p[$l['name']][] = $l['url'];
			$p2[$l['url']] = $l['name'];
			$p3[] = $l['url'];
			
			$p4[$l['id']] = $l['name'];
			$p5[$l['id']][] = $l['url'];
			
			if($l['idsite'] == $this->id)
			{
				$p6[$l['id']] = $l['name'];
			}
			
		}
		$this->a_partnerUrls = $p;
		$this->a_partnerName = $p2;
		$this->a_partnerId = $p4;
		
		$this->a_partnerUrlsId = $p5;
		$this->a_partnerUrlsFlat = $p3;
		
		$this->a_partnerSite = $p6;
	}
	
	/**
	 * load all newsletters properties
	 */
	function loadNewsletter()
	{
		$r = query("SELECT name, idsite, idnewsletter as id
					FROM ".T_NEWSLETTER."
					WHERE idsite = ".$this->id."
					");
		$p = array();
		$p2 = array();
		while($l = mysql_fetch_assoc($r))
		{
			$p[$l['id']] = $l['name'];
			
			if($l['idsite'] == $this->id)
			{
				$p2[$l['id']] = $l['name'];
			}
		}
		$this->a_newsletters = $p;
		
		$this->a_newslettersSite = $p2;
		//printDebug($p);
		return true;
	}
	
	/**
	 * load site Urls
	 * 
	 * @return array site urls
	 */
	function loadUrls()
	{		
		if(!Request::isPhpmvLogModule())
		{
			$db =& Db::getInstance();
			if(!Request::isPhpmvLogModule())
			if( 
				Request::isCurrentModuleAnInstallModule() 
				|| Request::isPhpmvLogModule()
				|| !$db->isReady()
				|| !$db->areAllTablesInstalled() 
				)
			{ 
				return array();
			}
		}
		$siteUrls = array();
		
		$fileAdress = INCLUDE_PATH."/config/site_urls.php";
		if(is_file($fileAdress))
		{
			require $fileAdress;
			return $siteUrls;
		}
		else
		{
			$r = query("SELECT idsite, url 
						FROM ".T_SITE_URL."
						ORDER BY idsite_url "
				);
		
			if(mysql_num_rows($r)==0)
			{
				$GLOBALS['content_message_tpl'] = $GLOBALS['lang']['generique_aucune_site_bdd'];
				
				return;
			}
			else
			{
				while($l = mysql_fetch_assoc($r))
				{
					$siteUrls[$l['idsite']][] = $l['url'];
				}
				saveConfigFile($fileAdress, $siteUrls, 'siteUrls');
				return $siteUrls;
			}
		}
	}
	
	/**
	 * returns only allowed websites for admin/view
	 */
	function getAllowedSites( $type )
	{
		$return = array();
		$request =& Request::getInstance();
		$user =& User::getInstance();
		
		foreach($this->a_info_all_sites as $id => $a_info)
		{
			if( ($type == 'view' && $user->isSiteAllowedView( $id ))
				||
				($type == 'admin' && $user->isSiteAllowedAdmin( $id ))
				|| $request->isCrontabAllowed()
			)			
			{
				if(isset($a_info['name']))
				{
					$return[$id] = $a_info['name'];
				}
			}	
		}
		ksort($return);
		return $return; 
	}

	function generateFiles()
	{
		$this->loadInfo();
		$this->loadUrls();
		$this->loadMinDay();
		$f = INCLUDE_PATH . "/config/";
		
		@chmod( $f.'site_info.php', 0777);
		@chmod( $f.'site_urls.php', 0777);
		@chmod( $f.'site_first_date.php', 0777);
		
		unlink( $f.'site_info.php' );
		@unlink( $f.'site_first_date.php' );
		unlink( $f.'site_urls.php' );
		
		$this->loadInfo();
		$this->loadUrls();
		$this->loadMinDay();
	}
	
	
	function getIpArray()
	{
		return isset($this->a_info['ips'])
					? $this->a_info['ips']
					: array();
	}
	
	function getFirstSiteAvailable()
	{
		$db =& Db::getInstance();
		if($db->isReady()
			&& $db->areAllTablesInstalled() )
		{
			$r = query("SELECT idsite
						FROM ".T_SITE
					);
			if(mysql_num_rows($r) > 0)
			{
				if(DEFAULT_SITE == -1)
				{
				    return -1;
				}

				$l = mysql_fetch_row($r);
				$firstSiteAvailable = $l[0];
				do
				{
					if($l[0] == DEFAULT_SITE)
					{
					    return DEFAULT_SITE;
					}
				} while($l = mysql_fetch_row($r));
				return $firstSiteAvailable;
			}
		}
		return 1;
	}
	
	function getTotalSites()
	{
			$r = query("SELECT count(*)" .
					" FROM ".T_SITE
					);
			$l = mysql_fetch_row($r);
			return $l[0];
	}
	/**
	 * load site Info
	 * 
	 * @return array site info (name of logo.suffix, params_include_only, params_exclude)
	 */
	function loadInfo()
	{
		if(!Request::isPhpmvLogModule())
		{
			$db =& Db::getInstance();
			if(!$db->isReady()
				|| !$db->areAllTablesInstalled()
				|| Request::isCurrentModuleAnInstallModule()
				)
			{
				return array();
			}
		}	
		$siteInfo = array();
		
		$fileAdress = INCLUDE_PATH."/config/site_info.php";
		if(is_file($fileAdress))
		{
			require $fileAdress;
			return $siteInfo;
		}
		else
		{
			$r = query("SELECT idsite, name, logo, params_choice, params_names" .
					" FROM ".T_SITE
					);
			
			if(mysql_num_rows($r)==0)
			{
				$GLOBALS['content_message_tpl'] = $GLOBALS['lang']['generique_aucune_site_bdd'];
				return;
			}
			else
			{			
				while($l = mysql_fetch_assoc($r))
				{
					$siteInfo[$l['idsite']] = $l;
				}
				
				// ip to exclude
				
				// select excluded Ip2long
				$r2 = query("SELECT ip_min, ip_max, idsite " .
						" FROM ".T_IP_IGNORE
						);
				if(mysql_num_rows($r2)>0)
				{
					$i = 0;
					while($l2 = mysql_fetch_assoc($r2))
					{
						$siteInfo[$l2['idsite']]['ips'][] = array(
																	$l2['ip_min'],
																	$l2['ip_max']
																	);
					}
				}
				saveConfigFile($fileAdress, $siteInfo, 'siteInfo');
				return $siteInfo;
			}
		}
	}
}
?>