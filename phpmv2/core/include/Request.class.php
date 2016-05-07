<?php
/* 
 * phpMyVisites : website statistics and audience measurements
 * Copyright (C) 2002 - 2006
 * http://www.phpmyvisites.net/ 
 * phpMyVisites is free software (license GNU/GPL)
 * Authors : phpMyVisites team
*/

// $Id: Request.class.php 63 2006-08-26 08:42:05Z cmil $
require_once INCLUDE_PATH . "/core/include/common.functions.php";

class Request
{
	var $site;
	var $date;
	var $period;
	var $mod;
	
	
	var $idToUse;// pages details, foolow up, etc.
	
	var $idDetails; // details for referers zoom
	var $methodName; // used for all data arrays
	var $offset; //offset for referers
	
	function Request()
	{
		$this->loadModuleName();
		$this->loadSiteId();
		
		$this->loadDate();
		$this->loadPeriod();
		$this->loadActionName();
		
		$this->loadIdDetails();
		$this->loadMethodName();
		
		$this->loadOffset();
		
		
		$this->loadCategoryAsked();
		$this->loadIdToUse();
		
		$this->loadAdminSite();
		$this->loadAdminNewsletter();
		$this->loadAdminUser();
		$this->loadAdminPartner();
		
		$this->loadContinentZoom();
		
		$pagesPercentLimit = 50;
		$keywordPercentLimit = $searchEnginePercentLimit = $sitePercentLimit =  
										$partnerPercentLimit =  $newsletterPercentLimit = 100;
		$defaultOrder = 'sum.desc';
		$nolimit = 0;
		$this->sorting_percent_limit_and_population_index = array(
			// parameter name => array( percent default limit value, all sums array index for this parameter, default sort)
			'a_int_sort' 		=> array( 100 , 				'int', 	$defaultOrder),
			'a_pag_sort' 		=> array( $pagesPercentLimit, 	'pag',	$defaultOrder),
			'a_entry_sort'	 	=> array( $pagesPercentLimit, 	'entry','entry.desc'),
			'a_exit_sort'		=> array( $pagesPercentLimit, 	'exit',	'exit.desc'),
			'a_singlepage_sort'	=> array( $pagesPercentLimit, 	'singlepage',	'singlepage.desc'),
			'a_sumtime_sort'	=> array( $pagesPercentLimit, 	'sumtime',	'sumtime.desc'),
			'a_keyword_sort' 	=> array( $keywordPercentLimit, 'keyword',	$defaultOrder),
			'a_searchengine_sort' => array( $searchEnginePercentLimit, 'searchengine', $defaultOrder),
			'a_site_sort' 		=> array( $sitePercentLimit, 'site', $defaultOrder),
			'a_partner_sort' 	=> array( $partnerPercentLimit, 'partner', $defaultOrder),
			'a_newsletter_sort' => array( $newsletterPercentLimit, 'newsletter', $defaultOrder),
			'a_type_sort' 		=> array( $nolimit, 'type', $defaultOrder), // referer type
		);
		// ==> see $this->arraySumInfo in DataModel
		
		foreach($this->sorting_percent_limit_and_population_index as $name => $info)
		{
			$this->loadArraySort($name, $info[2]);
		}
				
		// lang other => mod = otherlanguage
		if($this->getLang() === 'other')
		{
			$this->mod = 'other_language';
		}
		
		// if asked for mod=view_
		if(	$this->mod == 'view_sites_summary' 
			&& $this->getSiteId() != -1)
		{
			$this->mod = 'view_visits';
		}
		
		if($this->getSiteId() === -1 
			&& Request::isCurrentModuleAViewModule()
			&& $this->mod != 'view_pdf'
			&& $this->mod != 'view_rss' 
			)
		{
			$this->mod = 'view_sites_summary';
			$this->site = 1;
			$this->site_index = -1;
		} 
		elseif($this->getSiteId() === -1) 
		{
			$this->site = 1;
			$this->site_index = -1;
		}
		$this->crontabAllowed = false;
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
	
	function isPhpmvLogModule()
	{
		// quick hack...
		return isset($GLOBALS['currentModuleIsLogModule']) && $GLOBALS['currentModuleIsLogModule']; 
	}
	function setCrontabAllowed()
	{
		$this->crontabAllowed = true;
	}
	function isCrontabAllowed()
	{
		return $this->crontabAllowed;
	}
    function getErrorLogin()
	{
		return getRequestVar( 'error_login', 0, 'int');
	}
	function getConfirmedState()
	{
		return getRequestVar( 'confirmed', 0, 'int');
	}
    
	function getArrayInfoSort($allSumInfo)
	{
		foreach($this->sorting_percent_limit_and_population_index as $param => $info)
		{
			$sorted[$info[1]] = $this->getArraySort($param, $allSumInfo[$info[1]]);
		}
		return $sorted;
	}
	
	function getArraySort($name, $totalPopulation)
	{
		$sort = $this->$name;
		
		$sort = explode('.', $sort);
		$sorting_index = $sort[0];
		$sorting_order = $sort[1];
		$sorting_detail = isset($sort[2])?$sort[2]:'';
		$sorting_limit = isset($sort[3]) ? $sort[3] : (ALL_POPULATION ? 0 : $totalPopulation);
		
		//print("$name : total= $totalPopulation <br>");
		if(!isset($sort[4]))
		{
			$sorting_percent_limit = (ALL_POPULATION ? 0 : $this->sorting_percent_limit_and_population_index[$name][0]);
		}
		else
		{
			$sorting_percent_limit = $sort[4];
		}

		
		$a = array(
			0 => $sorting_index . "." . $sorting_order,
			1 => $sorting_index,
			2 => $sorting_order,
			3 => $sorting_detail,
			4 => $sorting_limit . "." . $sorting_percent_limit,
			5 => $sorting_limit,
			6 => $sorting_percent_limit,
			7 => $totalPopulation . "." . $this->sorting_percent_limit_and_population_index[$name][0],
			8 => $totalPopulation,
			9 => $this->sorting_percent_limit_and_population_index[$name][0],
			
			);

		return $a;
	}
	
	function loadCategoryAsked()
	{
		$this->c_id_zoom = getRequestVar('c_id_zoom', '', 'string');
	}
	function getCategoryAsked()
	{
		return $this->c_id_zoom;
	}
	
	function moduleIsNotAStrangeModule()
	{
		if(@$_REQUEST['mod'] != 'view_pages_details'
			&& @$_REQUEST['mod'] != 'view_visits_rss'
			&& @$_REQUEST['mod'] != 'view_data_array'
			&& @$_REQUEST['mod'] != 'view_graph')
		{
			return true;
		}
		
		return false;
	}
	
	function isCategoryZoom()
	{
		return empty($this->c_id_zoom)?
					false:
					true;
	}
	
	function getHostUrl()
	{
		return (SECURE_SERVER_HTTPS?"https":"http")."://".$_SERVER['HTTP_HOST'];
	}
	
	function getScriptName()
	{
		$phpmv_url_chemin = '';
		if(isset($_SERVER['PATH_INFO']) && !empty($_SERVER['PATH_INFO'])) 
		{ 
			$phpmv_url_chemin = $_SERVER['PATH_INFO'];
		} 
		else if(isset($_SERVER['REQUEST_URI']) && !empty($_SERVER['REQUEST_URI']) ) 
		{
			if( ($pos = strpos($_SERVER['REQUEST_URI'], "?")) !== false ) 
			{
				$phpmv_url_chemin = substr($_SERVER['REQUEST_URI'], 0, $pos);
			} 
			else 
			{
				$phpmv_url_chemin = $_SERVER['REQUEST_URI'];
			}
		} 
		
		if(empty($phpmv_url_chemin))
		{
			$phpmv_url_chemin = $_SERVER['SCRIPT_NAME'];
		}
		return $phpmv_url_chemin;
	}
	
	function getCurrentCompletePath()
	{
		
		$phpmv_url_chemin= Request::getHostUrl() . Request::getScriptName();
		return substr($phpmv_url_chemin, 0, strrpos($phpmv_url_chemin, '/'));
	}
	
	function getPhpmvRoot()
	{
		$root = "http://" . $_SERVER['HTTP_HOST'] .
										rtrim(dirname($_SERVER['PHP_SELF']), '/\\') .
										"/";
		return $root;
	}
	
	function getCurrentCompleteUrl()
	{
		return Request::getCurrentCompletePath() . "/" . Request::getCurrentUrl();
	}
	
	function getCurrentUrl()
	{
		$toUse = Request::getScriptName();
		$return = substr($toUse, 1 -  strlen($toUse) + strrpos($toUse, "/"));
		
		if(isset($_SERVER['QUERY_STRING'])
			&& !empty($_SERVER['QUERY_STRING']))
		{
			$return .= "?".$_SERVER['QUERY_STRING'];
		}
		
		// not '//' in url
		if($return == '/')
		{
			$return = '';
		}
		else
		{
			// case servers that give path/page for return instead of page only! too bad
			if(ereg('/', $return))
			{
				$return = substr( $return, strrpos($return, "/")+1);
			}
		}
		//print($return);
		//exit;
		return $return;
	}
	/**
	 * 
	 * @param string|array $a_paramExclude
	 * 
	 * @return string
	 */
	function getUrl($a_paramExclude = '')
	{
		if(!is_array($a_paramExclude))
		{
			$a_paramExclude = array ( $a_paramExclude);
		}
		
		// var_dump($a_paramExclude);
		// print"<br>\n";
		
		$param = array(
			'site',
			'date',
			'period',
			'mod',
			);
		
		// special case for pages details, we conserve the sort vars but not the mod vars
		if($a_paramExclude[0] == 'mod_sort_means_details')
		{
			$param[] = 'a_pag_sort';
			$param[] = 'a_entry_sort';
			$param[] = 'a_exit_sort';
			$param[] = 'a_sumtime_sort';
			$param[] = 'a_singlepage_sort';
		}
		
		
		// remove mod from url
		if($a_paramExclude[0] == 'mod_sort_means_details')
		{
			unset($param[array_search('mod', $param)]);
		}
		
		// add info relative to offset / details for ajax
		if($a_paramExclude[0] == 'offset' || $a_paramExclude[0] == 'a_int_sort')
		{
			$param[] = 'method_name';
			$param[] = 'id_details';
		}
		
		if($a_paramExclude[0] == 'offset')
		{
			$param[] = 'a_keyword_sort';
			$param[] = 'a_searchengine_sort';
			$param[] = 'a_site_sort'; 
			$param[] = 'a_partner_sort';
			$param[] = 'a_newsletter_sort';
			$param[] = 'a_int_sort';
			$param[] = 'a_type_sort';
		}
		$url = 'index.php?';

		$arr = array();
		foreach($param as $value)
		{
			if(!in_array($value, $a_paramExclude) 
				&& isset($this->$value)
				&& !empty($this->$value))
			{
                if (($value == 'site') && (isset($this->site_index)))
                {
    				$arr[] = 'site=' . $this->site_index;
				}
				else
				{
					$arr[] = $value . '=' . $this->$value;
				}
			}
		}
		$url .= implode('&amp;', $arr);
		
		// print "url = $url<br>\n";

		// return substr($url, 0, strlen($url) - 5);
		return $url;
	}
	
	function isInterest()
	{
		return (getRequestVar('a_int_sort', 'defaultvalue', 'string') !== 'defaultvalue');
	}
	
	function loadArraySort($name, $defaultSort)
	{
		$this->$name = getRequestVar($name, $defaultSort, 'string');
	}
		
	function loadActionName()
	{
		$this->action = getRequestVar('action', DEFAULT_ACTION, 'string');
	}
	
	function getModuleName()
	{
		return $this->mod;
	}
	
	function getModuleNameFromUrl()
	{
		return getRequestVar('mod', DEFAULT_MODULE, 'string');
	}
	
	function loadModuleName()
	{
		$this->mod = getRequestVar('mod', DEFAULT_MODULE, 'string');
	}
	
	function getActionName()
	{
	    return $this->action;
	}	

	function loadPeriod()
	{
		$p = getRequestVar('period', 1, 'int');
		
		if($p < 1 || $p > 4)
		{
			$p = 1;
		}
		$this->period = $p;
	}
	
	function getLang()
	{
		return  getRequestVar('lang', 'unknown', 'string');
		
	}
	
	function getRssHash()
	{
		return  getRequestVar('rss_hash', 'xxx', 'string');
	}
	
	function setDate( $s_date)
	{
		$this->date = $s_date;
	}
	
	function setModuleName( $s_module )
	{
		$this->mod = $s_module;
	}
	
	function loadDate()
	{
		$this->date = getRequestVar('date', getDateFromTimestamp(time()- (DEFAULT_DAY_TODAY ? 0 : 86400)), 'string');
	}
	
	function loadIdDetails()
	{
		$id = getRequestVar('id_details', false, 'int');
		if($id < 0) $id=false;
		$this->id_details = $id;
	}
	
	function getIdDetails()
	{
		return $this->id_details;
	}
	
	function loadMethodName()
	{
		$this->method_name = getRequestVar('method_name', '', 'string');
	}
	
	function getMethodName()
	{
		return $this->method_name;
	}
	
	function getOffset()
	{
		return $this->offset;
	}
	
	// for pages detail
	function loadOffset()
	{
		$this->offset = getRequestVar('offset', '0', 'int');
	}
	
	function loadAdminSite()
	{
		$this->adminSite = getRequestVar('adminsite', false, 'int');
	}
	
	function loadAdminNewsletter()
	{
		$this->adminNewsletter = getRequestVar('adminnewsletter', false, 'int');
	}
	function loadAdminUser()
	{
		$this->adminUser = getRequestVar('adminuser', false, 'string');
	}
	
	function loadAdminPartner()
	{
		$this->adminPartner = getRequestVar('adminpartner', false, 'int');
	}
	
	function getAdminSite()
	{
		return $this->adminSite;
	}
	
	function getAdminNewsletter()
	{
		return $this->adminNewsletter;
	}
	function getAdminUser()
	{
		return $this->adminUser;
	}
	function getAdminPartner()
	{
		return $this->adminPartner;
	}
	
	function getIdToUse()
	{
		return $this->idToUse;
	}
	
	// for pages detail
	function loadIdToUse()
	{
		$this->idToUse = getRequestVar('idtouse', 'sum', 'string');
	}
	
	function redirectToModule( $name )
	{
		$url = Request::getPhpmvRoot() . "index.php?mod=".$name;
				
		if(Request::getCurrentCompleteUrl() != $url)
		{
			header("Location: $url");
			exit;
		}
	}
	
	function loadSiteId()
	{
		if($this->getModuleName() == 'list_logos')
			return true;
			
		$site = getRequestVar('site', Site::getFirstSiteAvailable(), 'int');
		
		$db =& Db::getInstance();
		
		if($db->isReady()
			&& $db->areAllTablesInstalled()
			&& !Request::isCurrentModuleAnInstallModule() )
		{
			// check site asked is ok
			if($site != -1)
			{
				$r = query("SELECT idsite 
						FROM ".T_SITE);
				
				$idSite = array();		
				while($l = mysql_fetch_assoc($r))
				{
					$idSite[] = $l['idsite'];
				}
				
				if(sizeof($idSite) == 0)
				{
					$GLOBALS['header_error_message_tpl'] = $GLOBALS['lang']['generique_aucune_site_bdd'];
					Request::redirectToModule( 'admin_site_general&action=add');
					
					$site = false;
				}
				elseif( !in_array( $site, $idSite) )
				{
					$site = 0;
				}
			}
		}
		
		$this->site = (int)$site;
	}
	
	function isCurrentModuleAnInstallModule()
	{
		return substr(Request::getModuleNameFromUrl(), 0, 8) === 'install_';
	}
	function isCurrentModuleAGraphModule()
	{
		return substr(Request::getModuleNameFromUrl(), 0, 10) === 'view_graph';
	}
	
	function isCurrentModuleAViewModule()
	{
		return substr(Request::getModuleNameFromUrl(), 0, 4) === 'view';
	}
	
	function getTablesClean()
	{
		return getRequestVar('clean', 0, 'int');
	}
	
	function getGraphType()
	{
		return getRequestVar('graph_type', null, 'int');
	}
	function getGraphData()
	{
		return getRequestVar('graph_data', null, 'string');
	}
	
	function getPeriod()
	{
		return $this->period;
	}
	function setSiteId($siteId)
	{
		$this->site = $siteId;
	}
	function getSiteId( $askedForExistingSite = true )
	{
		// case we asked for the real index asked, including site=-1 which means sites summary
		// so when asked for site for the SELECT HTML site generation
		if(!$askedForExistingSite 
			&& isset($this->site_index))
		{
			return $this->site_index;
		}
		return $this->site;
	}	
			
	function getDate()
	{
		return $this->date;
	}
	
	function offsetDate($o_minDay)
	{
		$date = Archive::offsetDate(new Date($this->date), $o_minDay);
		$this->date = $date->get();
	}
	
	function getContinentZoom()
	{
		return $this->id_details_continent;
	}
	
	function loadContinentZoom()
	{
		$a_continent = array('eur', 'amn', 'ams', 'afr', 'oce', 'asi');
		$c = getRequestVar('id_details_continent', false, 'string');
		
		if( !in_array($c, $a_continent))
		{
			$this->id_details_continent = false;
		}
		else
		{
			$this->id_details_continent = $c;
		}
	}
}
?>