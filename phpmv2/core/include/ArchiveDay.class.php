<?php
/* 
 * phpMyVisites : website statistics and audience measurements
 * Copyright (C) 2002 - 2006
 * http://www.phpmyvisites.net/ 
 * phpMyVisites is free software (license GNU/GPL)
 * Authors : phpMyVisites team
*/

// $Id: ArchiveDay.class.php 107 2006-10-02 09:40:54Z matthieu_ $

require_once INCLUDE_PATH."/core/include/ArchiveCategory.class.php";
require_once INCLUDE_PATH."/core/include/ArchiveTable.class.php";

/**
 * Class that manages Day archives
 * Used by Archive and used for a simple day archiving
 */
class ArchiveDay extends Archive
{
	/**
	 * @var array objectName => objectValue
	 */
	var $objects;

	/**
	 * constructor
	 * 
	 * @param object $site
	 * @param string $s_date
	 */
	function ArchiveDay($site, $s_date = '')
	{
		parent::Archive($site);
		
		/*print($s_date);
		print("<pre>");
		debug_print_backtrace();
		print("</pre>");
		*/
		$this->setPeriodType(DB_ARCHIVES_PERIOD_DAY);
		
		if(!empty($s_date))
		{
			$this->setDate($s_date);
		}
		
		$this->objects['provider'] = new ArchiveTable('provider');
		
		$this->objects['treeCategory'] = new ArchiveCategory($this->site->getId());
		
		$a_archiveTable = array(
		'provider', 'config', 'resolution', 'vars_name', 'vars_value', 'page', 'file', 'category',
		'search_engine', 'keyword', 'site', 'newsletter', 'partner_name', 'partner_url'
		);
		foreach($a_archiveTable as $name)
		{
			$this->objects[$name] = new ArchiveTable($name);
		}
		
	}
	
	/**
	 * set dates to the object, after reseting the datas to the previous date. 
	 * It also sets the date2 value to current time + 10 min.
	 * Used during the check of archives state, to know if we need to compute again.
	 * 
	 * @param string $s_date
	 * 
	 * @return void
	 */
	function setDate($s_date)
	{
		/*
		 * reset info of the current object
		 */
		$this->reset();
		
		/*
		 * set the date
		 */
		$this->date = $this->offsetDate(new Date($s_date));
		
		if($this->date->isPeriodFinished($this->periodType))
		{
			$this->state = DB_ARCHIVES_DONE;
		}
		else
		{
			$this->state = DB_ARCHIVES_TEMP;
		}
		
		/*
		 * set a date2 only for compatibility with parent::initDb and updateDb
		 */
		// add 15s to keep the same archive for graphics
		$this->date2 = new Str(time() + TIME_BEFORE_NEW_DAY_ARCHIVE + SECURE_TIME_BEFORE_NEW_ARCHIVE); 
		
		
		$this->setLiteralDate();
	}
	
	
	/**
	 * resets current date info
	 * It doesn't reset the objects values because by changing the date, 
	 * we do not want to compute objects values again! 
	 * 
	 * @return void
	 */
	function reset()
	{		
		$this->date = null;
		$this->toRecord = null;
		$this->idArchives = null; 
		$this->state = null;
		$this->archiveOk = null;
	}	
	
	/**
	 * verify if the current day is archived, and if the archive is not too old
	 * 
	 * @return bool
	 */
	function isArchived()
	{
		// case days, be careful to parrallel archiving
		if($this->periodType == DB_ARCHIVES_PERIOD_DAY)
		{			
			$r = query("SELECT idarchives, date2
					FROM ".T_ARCHIVES ."
					WHERE idsite = ".$this->site->getId() ."
						AND date1 = '".$this->date->get()."'
						AND done = ". DB_ARCHIVES_FAIL ."
						AND period = ".$this->periodType."
					ORDER BY idarchives DESC
					LIMIT 1"
					);
			if(mysql_num_rows($r) > 0)
			{
				$l = mysql_fetch_assoc($r);

				$dateToWait =  $l['date2'] + TIME_TO_WAIT_FOR_PARALLEL_ARCHIVE;
				$delta = time() + TIME_BEFORE_NEW_DAY_ARCHIVE + SECURE_TIME_BEFORE_NEW_ARCHIVE - $dateToWait;
				if($delta < 0 )
				{
					print("There is currently an archiving which is being processed (idarchives = ".$l['idarchives']."). Please wait a few minutes (". -$delta ." seconds), and try again (we have to wait for the archive to be totally computed!");
					print("<hr><a href='http://www.phpmyvisites.us/documentation/Concurrent_archiving'>Help in english</a></br><a href='http://www.phpmyvisites.net/documentation/Archivages_concurrents'>Help in french (aide en français)</a>");
					exit;
				}
			}
		}
		//print(" OK pas de temps idsite = ".$this->site->getId() ." AND date1 = '".$this->date->get()."'<br>");
		$r = query("SELECT idarchives, date2" .
				" FROM ".T_ARCHIVES .
				" WHERE idsite = ".$this->site->getId() .
				" AND date1 = '".$this->date->get()."'" .
				" AND done = ". $this->state .
				" AND period = ".$this->periodType.
				" ORDER BY idarchives DESC
				  LIMIT 1"
				);
		if(mysql_num_rows($r) > 0)
		{
			$l = mysql_fetch_assoc($r);
			
			// check if we again archive if temp archived yet
			if($this->state === DB_ARCHIVES_TEMP && $l['date2'] < time())
			{
				
				if(!isset($GLOBALS['header_message_tpl_out']))
				{
					$GLOBALS['header_message_tpl'] .= "Temporary Archive is now out of date, archive again. <br />";
				}
				$GLOBALS['header_message_tpl_out'] = true;
				
				return false;
			}
			else if($this->state === DB_ARCHIVES_TEMP)
			{
				if(!isset($GLOBALS['header_message_tpl_temp']))
				{
					$GLOBALS['header_message_tpl'] .= "Temporary archive is less than ".round((TIME_BEFORE_NEW_DAY_ARCHIVE + SECURE_TIME_BEFORE_NEW_ARCHIVE) / 60)."min, it's ok !";
				}
				$GLOBALS['header_message_tpl_temp'] = true;
			}
			else
			{
				//printDebug("<u>Day ".$this->date->get()." archived definitely, it's ok !</u><br>");
			}
			$this->idArchives = $l['idarchives'];
			return true;
		}
		else
		{
			$GLOBALS['header_message_tpl'] .= "Day not archived yet...<br>";
			return false;
		}
	}
	
	/**
	 * compute all current day information, from the logs
	 * Complex processus, and beatiful arithmetic
	 */
	function compute()
	{
		// simpler archive for current period because else it's too long to compute, 
		// and too heavy for server
		if(CURRENT_DAY_SIMPLE_ARCHIVE 
				&& $this->state == DB_ARCHIVES_TEMP)
		{
			
			$this->toRecord['simple'] = 1;
		}
		else
		{
			$this->toRecord['simple'] = 0;
		}

		if(!isset($GLOBALS['header_message_tpl_archiving']))
		{
			$GLOBALS['header_message_tpl'] .= "<strong>Archiving ".$this->date->get()."...</strong><br>";
		}
		$GLOBALS['header_message_tpl_archiving'] = true;
		
		$siteUrls = $this->site->getUrls();
		$siteInfo = $this->site->getInfo();
		
		/*
		 * init
		 */
		 
		$this->initDb();
		
		/*
		 * global info
		 */
		 
		 // first we delete all visits that have a number of pages views > MAX_PAGES_NB_NOT_TO_BE_A_WEB_CRAWLER
		if(version_compare(getMysqlVersion(), '4.0') != -1)
		{
			$r = query("DELETE 
							FROM ".T_LINK_VP.", ".T_LINK_VPV."
							USING ".T_VISIT."
								LEFT JOIN ".T_LINK_VP."
								USING ( idvisit )
								LEFT JOIN ".T_LINK_VPV."
								USING ( idlink_vp )
							WHERE ".T_VISIT.".server_date = '".$this->date->get()."'
						 		AND ".T_VISIT.".idsite = ".$this->site->getId()."
								AND ".T_VISIT.".total_pages > ". MAX_PAGES_NB_NOT_TO_BE_A_WEB_CRAWLER
							);
		}
		$r = query("DELETE FROM ".T_VISIT."
					WHERE total_pages > ". MAX_PAGES_NB_NOT_TO_BE_A_WEB_CRAWLER ."
						AND server_date = '".$this->date->get()."'
				 		AND idsite = ".$this->site->getId() 
			);
		
					
		$r = query("SELECT count(distinct idcookie) as nb_uniq_vis, count(*) as nb_vis, 
							 sum(total_pages) as nb_pag, max(total_pages) as nb_max_pag, 
							 sum(total_time) as sum_vis_lth,
							 sum(case total_pages when 1 then 1 else 0 end) as nb_vis_1pag 
					FROM ".T_VISIT."
					WHERE server_date = '".$this->date->get()."'
						AND idsite = ".$this->site->getId()."
					GROUP BY server_date
				 ");
		if(mysql_num_rows($r) == 0)
		{
			$this->toRecord['nb_vis'] = 0;
			$this->toRecord['nb_uniq_vis'] = 0;
			
			$this->saveDb();
			return true;
		}
			
		$r = mysql_fetch_assoc($r);
		//printDebug($r);	
		
		foreach($r as $key => $value)
		{
			$this->toRecord[$key] = $value;
		}
		
		$r = query("SELECT count(distinct l.idpage) as nb_uniq_pag " .
				" FROM ".T_VISIT." as v 
					LEFT JOIN ".T_LINK_VP." as l USING (idvisit)" .
				" WHERE v.server_date = '".$this->date->get()."'" .
				" AND v.idsite = ".$this->site->getId()." " .
				" LIMIT 1");
		$r = mysql_fetch_assoc($r);
		//printDebug($r);	
		$this->toRecord['nb_uniq_pag'] = $r['nb_uniq_pag'];

		/*
		 * returning visitors
		 */
		 $r = query("SELECT count(distinct idcookie) as nb_uniq_vis_returning ".$GLOBALS['test']."
				 	FROM ".T_VISIT."
				 	WHERE server_date = '".$this->date->get()."'
				 	AND idsite = ".$this->site->getId()."
				 	AND returning = 1
				 	GROUP BY returning"
					);
		$l = mysql_fetch_assoc($r);
		
		$this->toRecord['nb_vis_returning'] = $l['s'];
		$this->toRecord['nb_uniq_vis_returning'] = $l['nb_uniq_vis_returning'];
		$this->toRecord['nb_pag_returning'] = $l['sumpage'];
		$this->toRecord['nb_vis_1pag_returning'] = $l['onepage'];
		$this->toRecord['sum_vis_lth_returning'] = $l['sumtime'];

		/*
		printDebug("<br>returning visitor ". $this->toRecord['nb_vis_returning']);		
		printDebug("<br>pag  returning ". $this->toRecord['nb_pag_returning']);		
		printDebug("<br>vis a 1 page returning ". $this->toRecord['nb_vis_1pag_returning']);		
		printDebug("<br>sum vis returnoing ". $this->toRecord['sum_vis_lth_returning']);
		//exit;
		*/
		/**
		 * number of visits per visitor
		 */
		$r = query("SELECT count(*) as s
						FROM ".T_VISIT."
						WHERE idsite = ".$this->site->getId()."
						AND server_date = '".$this->date->get()."'
						GROUP BY idcookie");
		$res = array();
		while($fx = mysql_fetch_assoc($r))
		{
			@$this->toRecord['vis_nb_vis'][(int)$fx['s']]++;
		}
		ksort($this->toRecord['vis_nb_vis']);
		
		/*
		 * server time
		 */
		$r = query("SELECT HOUR(server_time) as h " .$GLOBALS['test'].
				" FROM ".T_VISIT.
				" WHERE server_date = '".$this->date->get()."'" .
				" AND idsite = ".$this->site->getId()." " .
				" GROUP BY h");
		
		while($l = mysql_fetch_assoc($r))
		{
			//printDebug("<hr>server ".$l['h']."h<br>");
			$this->toRecord['vis_st'][$l['h']] = $l['s'];	
			$this->toRecord['pag_st'][$l['h']] = $l['sumpage'];	
			$this->toRecord['int_st'][$l['h']] = array($l['s'],  $l['sumpage'], $l['onepage'], $l['sumtime']); 
		}
		ksort($this->toRecord['vis_st']);
		ksort($this->toRecord['pag_st']);		
		
		/*
		 * local time
		 */
		$r = query("SELECT HOUR(local_time) as h, sum(returning) as returning " .$GLOBALS['test'].
				" FROM ".T_VISIT.
				" WHERE server_date = '".$this->date->get()."'" .
				" AND idsite = ".$this->site->getId()." " .
				" GROUP BY h");
		
		while($l = mysql_fetch_assoc($r))
		{
			$this->toRecord['vis_lt'][$l['h']] = (int)$l['s'];	
			$this->toRecord['pag_lt'][$l['h']] = (int)$l['sumpage'];	
			$this->toRecord['int_lt'][$l['h']] = array($l['s'],  $l['sumpage'], $l['onepage'], $l['sumtime']);
			
			// returning
			$this->toRecord['vis_period'][$l['h']] = array(
						ARRAY_INDEX_PAGES_COUNT  => $l['sumpage'],
						ARRAY_INDEX_RETURNING_COUNT => $l['returning'],
						ARRAY_INDEX_NEW_COUNT => $l['s'] - $l['returning']
						);
		}
		for($i = 0; $i < 24; $i++)
		{
			if(!isset($this->toRecord['vis_period'][$i]))
			{
				$this->toRecord['vis_period'][$i] = array(
						ARRAY_INDEX_PAGES_COUNT  => 0,
						ARRAY_INDEX_RETURNING_COUNT => 0,
						ARRAY_INDEX_NEW_COUNT => 0
						);
			}
		}
		ksort($this->toRecord['vis_lt']);		
		ksort($this->toRecord['pag_lt']);

		
		/*
		 * visit length
		 */

		foreach($GLOBALS['timeGap'] as $value)
		{
			$min = $value[0] * 60;
			$max = $value[1] * 60;
			$r = query("SELECT count(*) as s " .
					" FROM ".T_VISIT. 
					" WHERE total_time >= ".$min." " .
					" AND total_time <= ".$max."" .
					" AND server_date = '".$this->date->get()."'" .
					" AND idsite = ".$this->site->getId()
					);
			$l = mysql_fetch_assoc($r);
			$this->toRecord['vis_lth'][] = $l['s'];
		}
		
		/*
		 * visit per page number
		 */

		foreach($GLOBALS['pagesGap'] as $value)
		{
			$min = $value[0];
			$max = isset($value[1])?$value[1]:'10000';
			
			$r = query("SELECT count(*) as s " .
					" FROM ".T_VISIT. 
					" WHERE total_pages >= ".$min." " .
					" AND total_pages <= ".$max."" .
					" AND server_date = '".$this->date->get()."'" .
					" AND idsite = ".$this->site->getId()." "
					);
			$l = mysql_fetch_assoc($r);
			$this->toRecord['vis_nb_pag'][] = $l['s'];
		}

		if($this->toRecord['simple'] == 1)
		{	
			$this->saveDb();
			return true;
		}
		/*
		 * country
		 */
		$r = query("SELECT country as c " .$GLOBALS['test'].
				" FROM ".T_VISIT. 
				" WHERE server_date = '".$this->date->get()."'" .
				" AND idsite = ".$this->site->getId()." " .
				" GROUP BY c" 
				);
		

		while($l = mysql_fetch_assoc($r))
		{
			$this->toRecord['vis_country'][$l['c']] = $l['s'];
			$this->toRecord['int_country'][$l['c']] = array($l['s'],  $l['sumpage'], $l['onepage'], $l['sumtime']);
		}
		

		/*
		 * continent
		 */
		$r = query("SELECT continent as c " .$GLOBALS['test'].
				" FROM ".T_VISIT. 
				" WHERE server_date = '".$this->date->get()."'" .
				" AND idsite = ".$this->site->getId()." " .
				" GROUP BY c" 
				);
		
		while($l = mysql_fetch_assoc($r))
		{
			$this->toRecord['vis_continent'][$l['c']] = $l['s'];
			$this->toRecord['int_continent'][$l['c']] = array($l['s'],  $l['sumpage'], $l['onepage'], $l['sumtime']);
		}
		
		
		/*
		 * provider
		 */
		$r = query("SELECT hostname_ext as h " .$GLOBALS['test']. // else
				" FROM ".T_VISIT. 
				" WHERE server_date = '".$this->date->get()."'" .
				" AND idsite = ".$this->site->getId()." " .
				" GROUP BY h" );
				
		while($l = mysql_fetch_assoc($r))
		{
			$key = $this->objects['provider']->getId($l['h']);
			$this->toRecord['vis_provider'][$key] = $l['s'];
		}
		
		
		/*
		 * config (os+browser+resolution)
		 */
		$r = query("SELECT CONCAT(os, ';', browser_name, ';', resolution) as c " .$GLOBALS['test'].
				" FROM ".T_VISIT. 
				" WHERE  server_date = '".$this->date->get()."'" .
				" AND idsite = ".$this->site->getId()." " .
				" GROUP BY c");

		while($l = mysql_fetch_assoc($r))
		{
			$key = $this->objects['config']->getId($l['c']);
			$this->toRecord['vis_config'][$key] = $l['s'];	
		}
		
		
		/*
		 * os
		 */
		$r = query("SELECT os as o " .$GLOBALS['test'].
				" FROM ".T_VISIT. 
				" WHERE server_date = '".$this->date->get()."'" .
				" AND idsite = ".$this->site->getId()." " .
				" GROUP BY o");
		
		while($l = mysql_fetch_assoc($r))
		{
			$this->toRecord['vis_os'][$l['o']] = $l['s'];	
			$this->toRecord['int_os'][$l['o']] = array($l['s'],  $l['sumpage'], $l['onepage'], $l['sumtime']);
		}
		
		/*
		 * browser
		 */
		$r = query("SELECT CONCAT(browser_name, ';', browser_version) as b " .$GLOBALS['test'].
				" FROM ".T_VISIT. 
				" WHERE server_date = '".$this->date->get()."'" .
				" AND idsite = ".$this->site->getId()." " .
				" GROUP BY b");
		while($l = mysql_fetch_assoc($r))
		{
			$this->toRecord['vis_browser'][$l['b']] = $l['s'];	
			$this->toRecord['int_browser'][$l['b']] = array($l['s'],  $l['sumpage'], $l['onepage'], $l['sumtime']);
		}
		
		/*
		 * browser families
		 */
		$this->toRecord['vis_browser_type'] = array(
					'ie'=>0,
					'gecko'=>0,
					'khtml'=>0,
					'opera'=>0
					);
		
		foreach($this->toRecord['vis_browser'] as $key => $value)
		{
			foreach($GLOBALS['browserFamilies'] as $familyName => $a_browsers)
			{
				if(in_array(substr($key, 0, 2), $a_browsers))
				{
					$this->toRecord['vis_browser_type'][$familyName] += $value;				
				}
			}
		}
	
		/*
		 * resolution
		 */
		$r = query("SELECT resolution as r " .$GLOBALS['test'].
				" FROM ".T_VISIT. 
				" WHERE server_date = '".$this->date->get()."'" .
				" AND idsite = ".$this->site->getId()." " .
				" GROUP BY r" 
				);

		while($l = mysql_fetch_assoc($r))
		{
			if(strlen($l['r']) > 5)
			{
				$key = $this->objects['resolution']->getId($l['r']);
				$this->toRecord['vis_resolution'][$key] = $l['s'];	
				$this->toRecord['int_resolution'][$key] = array($l['s'],  $l['sumpage'], $l['onepage'], $l['sumtime']);
			}
		}
		
		/*
		 * plugins
		 */
		$r = query("SELECT  sum(case pdf when 1 then 1 else 0 end) as pdf, 
							sum(case flash when 1 then 1 else 0 end) as flash, 
				 			sum(case java when 1 then 1 else 0 end) as java, 
							sum(case director when 1 then 1 else 0 end) as director,
				 			sum(case quicktime when 1 then 1 else 0 end) as quicktime, 
							sum(case realplayer when 1 then 1 else 0 end) as realplayer,
							sum(case windowsmedia when 1 then 1 else 0 end) as windowsmedia
				 FROM ".T_VISIT."
				 WHERE server_date = '".$this->date->get()."'
				 AND idsite = ".$this->site->getId());
		
		$this->toRecord['vis_plugin'] = mysql_fetch_assoc($r);
		
		/*
		 * vis_pag_grp
		 */	 
		$this->computeGroupPageInfo();
		
		/*
		 * referer
		 */
		$this->computeReferer();

		/*
		 * Sort and limit huge arrays
		 */
		$this->sortAndLimitToRecord();
		
		/*
		 * final save, close your eyes and prey 
		 */
		 $this->saveDb();
		 
		 /*
		  * delete link_vp link_vpv and path records for this day
		  */
		 
		 $this->deleteOldRecords();
		 
		 return true;
	}
	
	function deleteOldRecords()
	{
		parent::deleteOldRecords( );
		
		if($this->date->get() != getDateFromTimestamp( time() ))
		{
			if(version_compare(getMysqlVersion(), '4.0') != -1)
			{
				$r = query("DELETE 
							FROM ".T_LINK_VP.", ".T_LINK_VPV."
							USING ".T_VISIT."
								LEFT JOIN ".T_LINK_VP."
								USING ( idvisit )
								LEFT JOIN ".T_LINK_VPV."
								USING ( idlink_vp )
							WHERE ".T_VISIT.".server_date = '".$this->date->get()."'
						 		AND ".T_VISIT.".idsite = ".$this->site->getId()."
						 ");
			}
		
			// mysql < 4.0
			else
			{				
				// delete link_vp records
				print("Your mysql version is less than 4.0, so this process will be very long 
				(a big feature is not implemented in your 3.23 version). 
				<br>You should use mysql 4.0 or mysql 4.1!<br>
				<br>Vous devriez utiliser mysql 4.0 ou supérieure pour plus de performances 
				(une fonctionnalité très importante est manquante à votre version 3.23<br>");
				
				// select all link_vp id
				$r = query("SELECT idlink_vp
							FROM ".T_VISIT."
								LEFT JOIN ".T_LINK_VP."
								USING ( idvisit )
							WHERE ".T_VISIT.".server_date = '".$this->date->get()."'
						 		AND ".T_VISIT.".idsite = ".$this->site->getId()."
						 		");
				
				while($l = mysql_fetch_row($r))
				{
					if(!empty($l[0]))
						$r2 = query("DELETE FROM ".T_LINK_VP."
								WHERE idlink_vp = ".$l[0]);
				}
				
			}
			
			$r3 = query("OPTIMIZE TABLE ".T_LINK_VP.", ".T_LINK_VPV);
		}					
	}
	
	
	/**
	 * Computes all info relative to pages, groups, and files
	 * Arrays computed contain sum by group (and subgroups), for pages and files
	 */
	function computeGroupPageInfo()
	{
		/*
		 * pages and hierarchy
		 */
		// removed in 2.2
		 $r = query("SELECT sum(total_time_page_ref) as s, idpage_ref" .
				" FROM ".T_VISIT." as v LEFT JOIN ".T_LINK_VP." as l USING (idvisit) " .
				" WHERE v.server_date = '".$this->date->get()."'" .
				" AND v.idsite = ".$this->site->getId()."
				GROUP BY idpage_ref"
		);
		while($l = mysql_fetch_assoc($r))
		{
			if($l['idpage_ref'] != 0)
			{
				$vis_pag_grp[$l['idpage_ref']] = array(
						ARRAY_INDEX_TIME_TOTAL => $l['s']
					);
			}	
		}
		
		$r = query("SELECT count(*) as s, p.name as name, p.idpage as idpage,  " .
				" COALESCE(c.idcategory,0) as idcategory, COALESCE(c.level, 1) as level, " .
				" COALESCE(c.idparent,0) as idparent, COALESCE(c.name,0) as namecategory,
				  total_time_page_ref, idpage_ref" .
				" FROM (((".T_VISIT." as v LEFT JOIN ".T_LINK_VP." as l USING (idvisit)) " .
				"	LEFT JOIN ".T_PAGE." as p USING (idpage))" .
				"		LEFT JOIN ".T_CATEGORY." as c USING (idcategory))" .
				" WHERE v.server_date = '".$this->date->get()."'" .
				" AND v.idsite = ".$this->site->getId()." " .
				" GROUP BY p.idpage");

		while($l = mysql_fetch_assoc($r))
		{
			// pages names beginning by PREFIX_FILES are files, else there are normal pages
			if(substr($l['name'], 0, 5) === PREFIX_FILES)
			{
				$type = ARRAY_TYPE_FILE;
				$l['name'] = substr($l['name'], 5);
			}
			else
			{
				$type = ARRAY_TYPE_PAGE;
			}
			
			if(!isset($vis_pag_grp[$l['idpage']]))
			{
				$vis_pag_grp[$l['idpage']] = array(
						ARRAY_INDEX_TIME_TOTAL => DEFAULT_TIME_PAGE
					);

			}
			$vis_pag_grp[$l['idpage']] = 
					array(
						ARRAY_INDEX_COUNT => $l['s'],
						ARRAY_INDEX_PAGE_NAME => databaseEscape($l['name']),
						ARRAY_INDEX_IDPAGE => $l['idpage'],
						ARRAY_INDEX_IDCATEGORY => $l['idcategory'],
						ARRAY_INDEX_LEVEL => $l['level'],
						ARRAY_INDEX_IDPARENT => $l['idparent'],
						ARRAY_INDEX_TYPE => $type,
						)
					+ $vis_pag_grp[$l['idpage']]
				;
		
		}
		
		//exit;
		/*
		 * variables and their values
		 */
		$r = query("SELECT count(*) as s, l.idpage as idpage, vv.name as vars_name, 
							IF( varchar_value IS NULL, int_value,varchar_value) as vars_value
				 FROM (((".T_VISIT." as v INNER JOIN ".T_LINK_VP." as l USING (idvisit)) 
					INNER JOIN ".T_LINK_VPV." as ll USING (idlink_vp))
						INNER JOIN ".T_VARS." as vv USING (idvars))
				 WHERE v.server_date = '".$this->date->get()."'
				 AND v.idsite = ".$this->site->getId()." 
				 GROUP BY l.idpage, ll.idvars"
				 );

		while($l = mysql_fetch_assoc($r))
		{
			$vis_pag_grp[$l['idpage']][ARRAY_INDEX_VARS][$l['vars_name']][] = array( 
									ARRAY_INDEX_VAR_COUNT => $l['s'],
									ARRAY_INDEX_VAR_VALUE => $l['vars_value']
									);
		}
		
		/*
		 * entry pages
		 */
		$r = query("SELECT count(*) as s, entry_idpage as c, sum(case total_pages when 1 then 1 else 0 end) as t
				FROM ".T_VISIT."
				WHERE server_date = '".$this->date->get()."'
				AND idsite = ".$this->site->getId()." 
				GROUP BY c");

		while($l = mysql_fetch_assoc($r))
		{
			
			// pages that are only but always "one visit page"
			if($l['t'] > 0)
			{
				$vis_pag_grp[$l['c']][ARRAY_INDEX_PAGES_VISIT_ONEPAGE] = $l['t'];
			}	
			
			$vis_pag_grp[$l['c']][ARRAY_INDEX_ENTRYPAGE] = $l['s'];	
		}
		
		
		/*
		 * exit pages
		 */
		$r = query("SELECT count(*) as s, exit_idpage as c
				FROM ".T_VISIT."
				WHERE server_date = '".$this->date->get()."'
				AND idsite = ".$this->site->getId()." 
				GROUP BY c");

		while($l = mysql_fetch_assoc($r))
		{
			$vis_pag_grp[$l['c']][ARRAY_INDEX_EXITPAGE] = $l['s'];	
		}
			 
		 
		$a_AllpageInfo = $vis_pag_grp;
		
		// sort array ording idLebel ASC
		uasort($a_AllpageInfo, "sortingAllPageInfo");
		
		
		$res=array();
		$res2=array();
		
		foreach($a_AllpageInfo as $key => $a_pageInfo)
		{
			if(!isset($a_pageInfo[ARRAY_INDEX_TYPE]))
			{
				printDebug('<b>There was a problem during archiving...</b>');
				//var_dump($a_pageInfo);
				//var_dump($key);
				//printDebug($a_pageInfo);
				continue;
			}
			// pages
			if(!isset($a_pageInfo[ARRAY_INDEX_TYPE]) 
				|| $a_pageInfo[ARRAY_INDEX_TYPE] === ARRAY_TYPE_PAGE)
			{
				$key = 'p'.$key;
			}
			// files
			else if($a_pageInfo[ARRAY_INDEX_TYPE] === ARRAY_TYPE_FILE)
			{
				$key = 'f'.$key;
			}
			else
			{
				echo "prob";exit;
			}
			
			$a = array($key => $a_pageInfo);
			
			if(isset($a_pageInfo[ARRAY_INDEX_IDCATEGORY]) && $a_pageInfo[ARRAY_INDEX_IDCATEGORY] != 0)
			{
				$res2 = $this->objects['treeCategory']->getTreeCompleted($a_pageInfo[ARRAY_INDEX_IDCATEGORY], $a);
			}
			else
			{
				$res2 = $a;
			}
			
			// merge recursively this page tree with global tree
			$res = array_merge_recursive($res, $res2);
		}	
		if(DEBUG)
		{
			$t = strlen(serialize($res))/1000;
		}
		
		/*
		 * convert page & category id from visit base to archive base
		 * sum for groups, subgroups, etc. of values of
		 * - hits
		 * - entry point
		 * - exit point
		 * - length
		 * - hits for each group varname-varvalue
		 * - [...]
		 */ 
		$this->walkAndSumArray($res);
		if(DEBUG)
		{
			$t = strlen(serialize($res))/1000;
		}
		$this->toRecord['vis_pag_grp'] = $res;
	}
	
	/**
	 * Recursively go through the array of pages/groups/files and sum all values, arrays
	 * 
	 * @param array $array passed by reference
	 * 
	 * @return array array('file' => array_values, 'page' => array_values)
	 */
	function walkAndSumArray(&$array)
	{
		$t = sizeof($array);
		for($i = 0; $i <$t; $i++)
		{
			$a_value =& $array[key($array)];
			
			if(is_array($a_value) && sizeof($a_value) > 0)
			{
				
				// if array is a category recursively calls the function that sums all values
				if(substr(key($array), 0, 1) === 'c')
				{
					$to_sum[] = $this->walkAndSumArray($a_value);
					
					// idcategory base logs To idcategory base archives
					$a_value[ARRAY_INDEX_IDCATEGORY] = 
						$this->objects['category']->getId(
							$this->objects['treeCategory']->getName(substr(key($array), 1))
								);
					
				}
				// else it's a page or a file and we have to sum all these values and return them
				else
				{
					if(!isset($a_value[ARRAY_INDEX_TYPE]) 
						|| $a_value[ARRAY_INDEX_TYPE] === ARRAY_TYPE_PAGE)
					{
						$type = 'page';
					}
					else if($a_value[ARRAY_INDEX_TYPE] === ARRAY_TYPE_FILE)
					{
						$type = 'file';
					}
					// this should not happen
					else
					{
						print("NO TYPE ! Not normal; report it to phpmyvisites forums = ");
						var_dump($a_value);
						//printDebug($a_value);
						$type = 'page';
						//exit();
					}
					
					
					// why this could not be set?
					// for files dude!
					if(isset($a_value[ARRAY_INDEX_PAGE_NAME]))
					{
						// idpage base 1 (logs) to idpage base 2 (archive)
						$a_value[ARRAY_INDEX_IDPAGE] = 
								$this->objects[$type]->getId(@$a_value[ARRAY_INDEX_PAGE_NAME]);
						unset($a_value[ARRAY_INDEX_PAGE_NAME]);
					}
					
					//var_dump($a_value);
					
					$a_value_to_save = array();
					
					//modular variables (see array in javascript code for use)
					if(isset($a_value[ARRAY_INDEX_VARS]) && is_array($a_value[ARRAY_INDEX_VARS]))
					{
						foreach($a_value[ARRAY_INDEX_VARS] as $var_name => $a_vars_value)
						{
							$a_values_to_save = array();
							
							// foreach variable, for each different value
							foreach($a_vars_value as $a_values)
							{
								// base1 (logs) to base2 (archives) for variables values
								$idValue = $this->objects['vars_value']->getId($a_values[ARRAY_INDEX_VAR_VALUE]);
								$a_values_to_save[$idValue] = array(
									ARRAY_INDEX_VAR_COUNT => $a_values[ARRAY_INDEX_VAR_COUNT],
									ARRAY_INDEX_VAR_VALUE => $idValue
									);
							}
							// vars_name base 1 (logs) to id vars_name base 2 (archive)
							$a_value_to_save[$this->objects['vars_name']->getId($var_name)] = 
									$a_values_to_save;
						}
					}
					$a_value[ARRAY_INDEX_VARS] = $a_value_to_save;
	
					// add to the array to sum for the 'pmv_sum'
					$to_sum[][$type] = $a_value;
				}
			}
			next($array);
		}

		// init returned array
		$res['page'] = $res['file'] = array(
				ARRAY_INDEX_COUNT => 0,
				ARRAY_INDEX_TIME_TOTAL => 0,
				ARRAY_INDEX_ENTRYPAGE => 0,
				ARRAY_INDEX_EXITPAGE => 0,
				ARRAY_INDEX_PAGES_VISIT_ONEPAGE => 0,
				ARRAY_INDEX_VARS => array()
				);
		
		//printDebug("dernier noeud, on somme<br>");
		
		// sums all values in $to_sum
		foreach($to_sum as $a_info)
		{
			foreach($a_info as $typePage => $a_page_info)
			{
				$res[$typePage] = $this->sumArray($res[$typePage], $a_page_info);
			}
		}
 
		// pages sum
		$array['p_pmv_sum'] = $res['page'];
		
		// files sum
		$array['f_pmv_sum'] = $res['file'];
 
		$toReturn = array(
					'page' => $res['page'],
					'file' => $res['file'], 
					);
				
		//var_dump($toReturn);	
		return $toReturn;
	}
	
	/**
	 * Computes the arrays sum, considering the very special of arrays to sum
	 * 
	 *  @param array $return array1 containing the previous sum
	 *  @param array $a array2 to sum to array1
	 *  
	 *  @return array two arrays sumed
	 */
	function sumArray($return, $a)
	{
		$a_vars_res = array();
		
		// sum variables values, in the case when it's not a file (no variables for a file)
		if(isset($a[ARRAY_INDEX_VARS]) && is_array($a[ARRAY_INDEX_VARS]))
		{
			// compute vars_sum
			foreach($a[ARRAY_INDEX_VARS] as $var_name => $a_vars_value)
			{
				//printDebug("VAR2HERE : ");
				//printDebug($a_vars_value);
				//printDebug(" + ");
				//printDebug($return[ARRAY_INDEX_VARS]);
				//printDebug("<br>");
				
				foreach($a_vars_value as $key => $a_vars_values)
				{
					//print($a[ARRAY_INDEX_IDCATEGORY]. ", ".$key. ":: ");
					@$return[ARRAY_INDEX_VARS][$var_name][$key][ARRAY_INDEX_VAR_VALUE] = 
								$a_vars_values[ARRAY_INDEX_VAR_VALUE];

					@$return[ARRAY_INDEX_VARS][$var_name][$key][ARRAY_INDEX_VAR_COUNT] = 
								$a_vars_values[ARRAY_INDEX_VAR_COUNT] 
								+ $return[ARRAY_INDEX_VARS][$var_name][$key][ARRAY_INDEX_VAR_COUNT];
				}
			}
			//printDebug("AFTERSUM");
			//printDebug($return);
		}

		return array( 
				ARRAY_INDEX_COUNT => (int)($return[ARRAY_INDEX_COUNT] +  $a[ARRAY_INDEX_COUNT]),
				
				ARRAY_INDEX_IDCATEGORY => @$a[ARRAY_INDEX_IDCATEGORY],
				
				// ARRAY_INDEX_LEVEL => $a[ARRAY_INDEX_LEVEL],
				// ARRAY_INDEX_IDPARENT => $a[ARRAY_INDEX_IDPARENT],
				
				ARRAY_INDEX_TIME_TOTAL => 
							@$return[ARRAY_INDEX_TIME_TOTAL] + @$a[ARRAY_INDEX_TIME_TOTAL],
				
				ARRAY_INDEX_PAGES_VISIT_ONEPAGE => 
							$return[ARRAY_INDEX_PAGES_VISIT_ONEPAGE] + @$a[ARRAY_INDEX_PAGES_VISIT_ONEPAGE],
				
				ARRAY_INDEX_ENTRYPAGE => 
							$return[ARRAY_INDEX_ENTRYPAGE] + @$a[ARRAY_INDEX_ENTRYPAGE],
				
				ARRAY_INDEX_EXITPAGE => 
							$return[ARRAY_INDEX_EXITPAGE] +  @$a[ARRAY_INDEX_EXITPAGE],
				
				ARRAY_INDEX_VARS => $return[ARRAY_INDEX_VARS]
			);					
	}
	

	/**
	 * computes sum of the array a_values and the new values to add
	 * 
	 * @param array $a_values Contains current values
	 * @param int $s Hits
	 * @param int $sumpage Number of pages views
	 * @param int $onepage Number of one page visit
	 * @param int $sumtime Total time spent on all the $s visits
	 * 
	 * @return array $a_values array $a_values with new values sumed
	 */
	function getInterestValuesSum($a_values, $s, $sumpage, $onepage, $sumtime)
	{
		// init
		if(!isset($a_values[0])) $a_values[0] = 0;
		if(!isset($a_values[1])) $a_values[1] = 0;
		if(!isset($a_values[2])) $a_values[2] = 0;
		if(!isset($a_values[3])) $a_values[3] = 0;
		
		$a_values[0] += $s;
		$a_values[1] += $sumpage;
		$a_values[2] += $onepage;
		$a_values[3] += $sumtime;
		
		return $a_values;
	}
	
	/**
	 * Computes all info relative to referer
	 * Detects for each different referer URL (or each entry page, when no referer URLs), the name (and keyword),
	 * the domain, the precise page, the partner, the newsletter
	 * 
	 * Saves in var toRecord all precomputed values. Isn't that great ?
	 */
	function computeReferer()
	{
		// Init
		$hits = 0;
		
		$vis_listing = array(
			'vis_search_engine',
			'vis_keyword',
			'vis_newsletter',
			'vis_partner',
			'vis_site'
			);
		foreach($vis_listing as $value) $this->toRecord[$value] = array();
		
		$resDirect =0;
		
		$int_sum = array();
		$int_sum['search_engine'] = array();
		$int_sum['keyword'] = array();
		$int_sum['site'] = array();
		$int_sum['partner_name'] = array();
		$int_sum['newsletter'] = array();
		$int_sum['type'][REF_TYPE_DIRECT_ENTRY] = array();
		$int_sum['type'][REF_TYPE_NEWSLETTER] = array();
		$int_sum['type'][REF_TYPE_PARTNER] = array();
		$int_sum['type'][REF_TYPE_SEARCH_ENGINE] = array();
		$int_sum['type'][REF_TYPE_SITE] = array();
		
		
		// query that selects all distinct referer URLs
		$r = query("SELECT count(*) as s, referer as r" .$GLOBALS['test'].
				" FROM ".T_VISIT. 
				" WHERE server_date= '".$this->date->get()."' " .
				" AND idsite = ".$this->site->getId()." " .
				" AND referer IS NOT NULL" .
				" GROUP BY r
					");
					
		while($l = mysql_fetch_assoc($r))
		{
			// different types :
			// - partner identified as it is
			// - search engines that give keywords
			// - direct access, url belongs to the site
			// - other misc websites 
			
			$hits = $l['s'];
			
			$refererUrl = $l['r'];
			
			// now... lets go in identifying !
			// and don't go back it's so important !
			$refererUrlParse = parse_url($refererUrl);
			
			// if referer exists (and not 'blockedReferer' or other)
			if(isset($refererUrlParse['host']))
			{
				$refererHost = $refererUrlParse['host'];
				$refererSH = $refererUrlParse['scheme'].'://'.$refererUrlParse['host'];
				//printDebug("<b>".$refererHost." </b> ");
				
				/*
				 * search engine
				 */
				if(array_key_exists($refererHost, $GLOBALS['searchEngines']))
				{
					
					// which search engine ?
					$sname = $GLOBALS['searchEngines'][$refererHost][0];
					$vname = $GLOBALS['searchEngines'][$refererHost][1];
					
					// id base logs to id base archives
					$ids = $this->objects['search_engine']->getId($sname);
					
					// init
					if(!isset($this->toRecord['vis_search_engine'][$ids]))
					{
						$this->toRecord['vis_search_engine'][$ids]['pmv_sum'] = 0; 
						$int_sum['search_engine'][$ids] = array();
					}
					
					$this->toRecord['vis_search_engine'][$ids]['pmv_sum'] += $hits;
					
					// interest for current engine
					$int_sum['search_engine'][$ids] = $this->getInterestValuesSum($int_sum['search_engine'][$ids], 
															$l['s'], $l['sumpage'], $l['onepage'], $l['sumtime']);
															
					// interest for the type search_engine
					$int_sum['type'][REF_TYPE_SEARCH_ENGINE] = 
								$this->getInterestValuesSum($int_sum['type'][REF_TYPE_SEARCH_ENGINE], 
															$l['s'], $l['sumpage'], $l['onepage'], $l['sumtime']);
															
					// if there is a query, there may be a keyword...
					if(isset($refererUrlParse['query']))
					{
						/*
						 *  keyword ?
						 */
						
						$query = $refererUrlParse['query'];
						
						// for google image take the prev variable 
						// and take the q var in this variable once urldecoded
						
						// but sometimes we have images.google.fr/search which is exactly like www.google.fr/search....
						if(ereg("^images.google.",$refererHost))
						{
							//print("befo = ".$query);
							$query = getUrlParamValue($query, "prev");
							
							// case images.google.com/search we replace in the host images by www
							if($query === false )
							{
								$refererHost = str_replace( "images","www",$refererHost);
								$vname = $GLOBALS['searchEngines'][$refererHost][1];
							}
							else
							{
								$query = urldecode($query);
								// we want the query from "/images?q=+logo+designs&start=360&ndsp=20&svnum=10&hl=en&lr=&sa=N"
								$query = substr($query, strpos( $query, "?") + 1);
								// getUrlParam need htmlentitied
								$query = htmlentities($query);
								//print("<br> after = ".$query);
							}
						}
						
						// search for keywords now &vname=keyword
						$key = strtolower(getUrlParamValue($query, $vname));
						
						// for search engines that don't use utf-8
						if((function_exists('iconv')) && (isset($GLOBALS['searchEngines'][$refererHost][2])))
						{
							$charset = trim($GLOBALS['searchEngines'][$refererHost][2]);
							if(!empty($charset)) {
								$key = urlencode(@iconv($charset, 'utf-8//TRANSLIT', urldecode($key)));
							}
						}
						
						//print($refererUrlParse['query'].",". $vname." : ".$key."<br>");
						
						// base logs => base archives
						$idk = $this->objects['keyword']->getId($key);
						
						/*
						 * init
						 */
						if(!isset($this->toRecord['vis_search_engine'][$ids][$idk]))
						{
							$this->toRecord['vis_search_engine'][$ids][$idk] = 0;
						}
						if(!isset($this->toRecord['vis_keyword'][$idk][$ids]))
						{
							$this->toRecord['vis_keyword'][$idk][$ids] = 0;
							$int_sum['keyword'][$idk] = array();
						}
						if(!isset($this->toRecord['vis_keyword'][$idk]['pmv_sum']))
						{
							$this->toRecord['vis_keyword'][$idk]['pmv_sum'] = 0;
						}
						
						
						$this->toRecord['vis_search_engine'][$ids][$idk] += $hits;
						
						$this->toRecord['vis_keyword'][$idk][$ids] += $hits;
						$this->toRecord['vis_keyword'][$idk]['pmv_sum'] += $hits;
						
						$int_sum['keyword'][$idk] = $this->getInterestValuesSum($int_sum['keyword'][$idk], 
															$l['s'], $l['sumpage'], $l['onepage'], $l['sumtime']);
					}
				}
				/*
				 * direct entry
				 */
				else if($this->site->isUrlIn($refererUrl))
				{
					//printDebug("<br>directentry<br>");
					$resDirect += $hits;
					// interest for the type 'direct_entry'
					$int_sum['type'][REF_TYPE_DIRECT_ENTRY] =  
									$this->getInterestValuesSum($int_sum['type'][REF_TYPE_DIRECT_ENTRY], 
															$l['s'], $l['sumpage'], $l['onepage'], $l['sumtime']);
				}
				/*
				 * site partner
				 */
				else if($this->site->isPartner($refererUrl))
				{
					//printDebug("<br>partner<br>");
					
					// comments are not necessary here, code is so clear :-D
					$url = array_search( $refererHost,  $this->site->getPartnerUrlsFlat());
					$pname = $this->site->getPartnerName();
					
					$idp = $this->objects['partner_name']->getId($pname);
					$idpu = $this->objects['partner_url']->getId($refererUrl);
					
					// init
					if(!isset($this->toRecord['vis_partner'][$idp]['pmv_sum']))
					{
						$this->toRecord['vis_partner'][$idp]['pmv_sum'] = 0;
						$int_sum['partner_name'][$idp] = array();
					}
					
					$this->toRecord['vis_partner'][$idp][$idpu] = $hits;
					$this->toRecord['vis_partner'][$idp]['pmv_sum']  += $hits;
					
					//printDebug($this->toRecord['vis_partner']);
					
					$int_sum['partner_name'][$idp] = $this->getInterestValuesSum($int_sum['partner_name'][$idp], 
															$l['s'], $l['sumpage'], $l['onepage'], $l['sumtime']);
					$int_sum['type'][REF_TYPE_PARTNER] =
								$this->getInterestValuesSum($int_sum['type'][REF_TYPE_PARTNER], 
															$l['s'], $l['sumpage'], $l['onepage'], $l['sumtime']);
				}
				/*
				 * other site
				 */
				else
				{
					//printDebug(" misc site | ");
					
					$idmsh = $this->objects['site']->getId($refererHost);
					$idms = $this->objects['site']->getId($refererUrl);
					
					// init
					if(!isset($this->toRecord['vis_site'][$idmsh]['pmv_sum']))
					{
						$this->toRecord['vis_site'][$idmsh]['pmv_sum'] = 0;
						$int_sum['site'][$idmsh] = array();
					}
					
					$this->toRecord['vis_site'][$idmsh]['pmv_sum'] += $hits;
					$this->toRecord['vis_site'][$idmsh][$idms] = $hits;
					
					$int_sum['site'][$idmsh] = $this->getInterestValuesSum($int_sum['site'][$idmsh], 
															$l['s'], $l['sumpage'], $l['onepage'], $l['sumtime']);
					$int_sum['type'][REF_TYPE_SITE] =
								$this->getInterestValuesSum($int_sum['type'][REF_TYPE_SITE], 
															$l['s'], $l['sumpage'], $l['onepage'], $l['sumtime']);
				}
			}
			else
			{
				// direct entry
				$resDirect += $hits;
				
				//printDebug("<br>directentry<br>");
				
				$int_sum['type'][REF_TYPE_DIRECT_ENTRY] =  
							$this->getInterestValuesSum($int_sum['type'][REF_TYPE_DIRECT_ENTRY], 
															$l['s'], $l['sumpage'], $l['onepage'], $l['sumtime']);
			}
		}		
		
		// query that selects entry pages, when there are no referer URls
		// it allows detection of partners, newsletters and direct entries
		$r = query("SELECT count(distinct idvisit) as sp, pu.idpage_url as p, 
							pu.url as u" .$GLOBALS['test'].
				" FROM ".T_VISIT. " as v, ".T_PAGE_URL." as pu 
				  WHERE v.entry_idpageurl = pu.idpage_url 
				  AND v.server_date= '".$this->date->get()."' 
				 AND v.idsite = ".$this->site->getId()." 
				 AND v.referer IS NULL
				 GROUP by entry_idpageurl
					");

		while($l = mysql_fetch_assoc($r))
		{
			// different types :
			// - partner identified by ID in URL
			// - newsletter identified by ID in URL 
			// - direct entries
			$hits = $l['sp'];
			$idPageEntry = $l['p']; // useless
			
			// url parsing can fail when for example its value is "/translate... etc."
			// we count it as a direct entry
			$urlParse = @parse_url($l['u']);
			
			// if referer exists (and not blockedReferer or other)
			if(isset($urlParse['query']))
			{
				//printDebug($l['p']." ");
				$urlQuery = $urlParse['query'];	
				
//				print($urlQuery); exit;
				/*
				 * partner
				 */
				if($pid = getUrlParamValue($urlQuery, PARAM_URL_PARTNER))
				{
					
					//printDebug("<br><b>PID $pid detected !</b>");
					//printDebug("<br>partner</br>");
					
					$pname = $this->site->getPartnerNameFromId($pid);
					
					$idp = $this->objects['partner_name']->getId($pname);
										
					// init
					if(!isset($this->toRecord['vis_partner'][$idp]['pmv_sum']))
					{
						$this->toRecord['vis_partner'][$idp]['pmv_sum'] = 0;
						$int_sum['partner_name'][$idp] = array();
					}
					
					$this->toRecord['vis_partner'][$idp]['pmv_sum']  += $hits;
					
					//printDebug($this->toRecord['vis_partner']);
					
					$int_sum['partner_name'][$idp] = $this->getInterestValuesSum($int_sum['partner_name'][$idp], 
															$l['s'], $l['sumpage'], $l['onepage'], $l['sumtime']);
					$int_sum['type'][REF_TYPE_PARTNER] = 
								$this->getInterestValuesSum($int_sum['type'][REF_TYPE_PARTNER], 
															$l['s'], $l['sumpage'], $l['onepage'], $l['sumtime']);
				}
				
				/*
				 * newsletter
				 */
				else if($nid = getUrlParamValue($urlQuery, PARAM_URL_NEWSLETTER))
				{
					//print("NID to searc = $nid");
					$nname = $this->site->getNewsletterName($nid);
					
					// if newsletter exists
					if(!$nname)
					{
						print("Newsletter name not found! Maybe it's an empty name in phpmv_newsletter ? (for id = $nid)");
						exit;
					}
					else 
					{
			//			print("<br><b>NID $nid detected !</b>");
			//			print("<br>newsletter</br>");
					
						$idn = $this->objects['newsletter']->getId($nname);
						
						// init
						if(!isset($this->toRecord['vis_newsletter'][$idn]))
						{
							$this->toRecord['vis_newsletter'][$idn] = 0;
							$int_sum['newsletter'][$idn] = array();
						}
						
						$this->toRecord['vis_newsletter'][$idn] += $hits;
						
						//printDebug($this->toRecord['vis_newsletter']);
						
						$int_sum['newsletter'][$idn] = $this->getInterestValuesSum($int_sum['newsletter'][$idn], 
																$l['s'], $l['sumpage'], $l['onepage'], $l['sumtime']);
						$int_sum['type'][REF_TYPE_NEWSLETTER] =  
									$this->getInterestValuesSum($int_sum['type'][REF_TYPE_NEWSLETTER], 
																$l['s'], $l['sumpage'], $l['onepage'], $l['sumtime']);
					}
				}
				/*
				 * direct access
				 */
				else
				{
					$resDirect += $hits;

					$int_sum['type'][REF_TYPE_DIRECT_ENTRY] =  
								$this->getInterestValuesSum($int_sum['type'][REF_TYPE_DIRECT_ENTRY], 
															$l['s'], $l['sumpage'], $l['onepage'], $l['sumtime']);
				}
			}
			else
			{
				$resDirect += $hits;

				$int_sum['type'][REF_TYPE_DIRECT_ENTRY] =  
								$this->getInterestValuesSum($int_sum['type'][REF_TYPE_DIRECT_ENTRY], 
															$l['s'], $l['sumpage'], $l['onepage'], $l['sumtime']);
			}
			
		}
		

		/*
		 * developed interest average
		 */
		 
		// database-interest-field-name => interestsum-array-keyname
		
		$int_sum_to_avg = array(
		'int_search_engine' => 'search_engine',
		'int_keyword' => 'keyword',
		'int_site' => 'site',
		'int_partner' => 'partner_name',
		'int_newsletter' => 'newsletter',
		'int_referer_type' => 'type'
		);
		
		foreach($int_sum_to_avg as $int_name => $value)
		{
			uasort($int_sum[$value], "sortingInterest");
			$this->toRecord[$int_name] = $int_sum[$value];
		}

		/*
		 * sum by referer type
		 */
		
		$nbSearchEngine = 0;
		foreach($this->toRecord['vis_search_engine'] as $key => $value)
		{
			$nbSearchEngine += $value['pmv_sum'];
		}

		$nbSite = 0;
		foreach($this->toRecord['vis_site'] as $key => $value)
		{
			$nbSite += $value['pmv_sum'];
		}
		$nbUniqSite = sizeof($this->toRecord['vis_site']);
		$nbNewsletter = array_sum($this->toRecord['vis_newsletter']);
		
		$nbPartner = 0;
		foreach($this->toRecord['vis_partner'] as $key => $value)
		{
			$nbPartner += $value['pmv_sum'];
		}
		
		$this->toRecord['nb_direct'] = $resDirect;
		$this->toRecord['nb_search_engine'] = $nbSearchEngine;
		$this->toRecord['nb_site'] = $nbSite;
		$this->toRecord['nb_newsletter'] = $nbNewsletter;
		$this->toRecord['nb_partner'] = $nbPartner;
			
		/*printDebug("<br><br><b>Access types </b><br> Direct : $nbDirect <br>Search engines : $nbSearchEngine " .
				"<br> By site : $nbSite <br> Unique sites : $nbUniqSite <br>" .
				"Partner : $nbPartner <br> Newsletter : $nbNewsletter <br>");
		*/


		foreach($vis_listing as $value)
		{
			if($value != 'vis_newsletter')
			{
				
				if(is_array($this->toRecord[$value]))
				{
					foreach($this->toRecord[$value] as $key2 => $value2)
					{
						if(is_array($this->toRecord[$value][$key2]))
						{
							arsort($this->toRecord[$value][$key2]);
						}
						$this->toRecord[$value][$key2] = getArrayOffsetLimit(
													$this->toRecord[$value][$key2], 
													0, 
													MAX_DISTINCT_DETAILS_ELEMENTS
												);
					}
				}
				else
				{
					arsort($this->toRecord[$value]);
				}
			}
		}
	}

	/**
	 * returns "select *" of the day var date, after being computed if necessary
	 */
	function getArchived()
	{
		//printDebug("<h1>".$this->date->get()."</h1>");
		
		if(empty($this->archiveOk))
		{
			if(empty($this->idArchives) && !$this->isArchived())
			{

				$this->compute();
			}
		}
		
		$this->archiveOk = true;
		//print("here once ".$this->date->get());
		
		$r = query("SELECT * " .
				" FROM ".T_ARCHIVES.
				" WHERE idarchives = ". $this->idArchives .
				" LIMIT 1"
				);
		
		if(mysql_num_rows($r) == 0)
		{
			trigger_error("Error during the archiving process for the date ".$this->date->get().
							" (period = ".$this->periodType .") for the site ". $this->site->getName() ." (id = ".$this->site->getId() .")",
							E_USER_ERROR);
		
		}
		$allValues = mysql_fetch_assoc($r);
		
		$end = sizeof($allValues);
		reset($allValues);
		for($i = 0; $i < $end ; $i ++)
		{
			$data =& $allValues[key($allValues)];
			
			if(is_null($data))
			{
				$data = compress(serialize( array() ), $allValues['compressed']);
			}
			
			next($allValues);
		}
		
		return $allValues;
	}
}
?>