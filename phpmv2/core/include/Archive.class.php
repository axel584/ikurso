<?php
/* 
 * phpMyVisites : website statistics and audience measurements
 * Copyright (C) 2002 - 2006
 * http://www.phpmyvisites.net/ 
 * phpMyVisites is free software (license GNU/GPL)
 * Authors : phpMyVisites team
*/

// $Id: Archive.class.php 102 2006-10-01 16:28:30Z matthieu_ $


$GLOBALS['test'] = ", sum(case total_pages when 1 then 1 else 0 end) as onepage," .
				" sum(total_pages) as sumpage, count(*) as s, sum(total_time) as sumtime";

require_once INCLUDE_PATH."/core/include/Date.class.php";
require_once INCLUDE_PATH."/core/include/Str.class.php";
require_once INCLUDE_PATH."/core/include/Archive.functions.php";
require_once INCLUDE_PATH."/core/include/functions.php";

/**
 * Base class used by other ArchiveClass to assign some standard attributes
 * 
 */
class Archive
{
 	/**
 	 * @var object Site
 	 */	
	var $site;
	
	/**
	 * @var array fieldName => fieldValue to save in database
	 */
	var $toRecord; // array 'field_name' => value to record
	
	/**
	 * @var int Current idarchives of the archive process
	 */
	var $idArchives; 
	
	/**
	 * @var int State of the current archive process (Must be DB_ARCHIVES_*)
	 */
	var $state; // DB_x
	
	/**
	 * @var object Date
	 */
	var $date;
	var $date2;
	
	/**
	 * @var int Type of the current archive period (Must be DB_ARCHIVES_PERIOD_*)
	 */
	var $periodType;
	
	
	// int value
	/**
	 * @var array integer arrays to sum conserving keys array( 3, 4, 6 ); 
	 */
	var $intValuesToSum;
	
	// key => int value
	var $arrayOneDimToSum;
	
	// key => array('pmv_sum' => X, 'iddetail1' => Y, 'iddetail2' => Z);
	var $arrayPmvSumToSum;
	
	var $arrayIntToSum;
	var $archiveOk; // flag to known if finished, used when using current archive twice
	
	/**
	 * @var string literal date corresponding to $this->date
	 */
	var $literalDate;
	
	/**
	 * @param object $site
	 */
	function Archive($site)
	{
		$this->site = $site;
		$this->state = DB_ARCHIVES_DONE;
		$this->toRecord = array();
		
		$this->archiveOk = false;
		
		$this->intValuesToSum = array(
		'nb_vis', 'nb_pag', 'nb_uniq_pag', 'nb_vis_1pag', 'sum_vis_lth',
		'nb_direct', 'nb_search_engine', 'nb_site', 'nb_newsletter', 'nb_partner',
		'nb_vis_returning', 'nb_pag_returning', 'nb_vis_1pag_returning', 'sum_vis_lth_returning'
		);
		
		// key => int value
		$this->arrayOneDimToSum = array(
		'vis_st', 'vis_lt', 'pag_st', 'pag_lt', 'vis_lth', 'vis_nb_pag', 
		'vis_country', 'vis_continent', 'vis_provider', 'vis_config', 'vis_os', 'vis_browser', 'vis_browser_type',
		'vis_resolution', 'vis_plugin', 
		'vis_newsletter',
		'vis_nb_vis'
		);
		
		// key => array('pmv_sum' => X, 'iddetail1' => Y, 'iddetail2' => Z);
		$this->arrayPmvSumToSum = array(
		'vis_search_engine', 'vis_keyword', 'vis_site', 'vis_partner'
		);
		
		$this->arrayIntToSum = array(
		'int_lt', 'int_st', 'int_referer_type', 'int_search_engine', 'int_keyword', 'int_site', 'int_partner',
		'int_newsletter', 'int_country', 'int_continent', 'int_os', 'int_browser', 'int_resolution'
		);

	}	
	
	/**
	 * Update database, set var state 
	 */
	function updateDbState()
	{
		updateLine(
			T_ARCHIVES, 
			array( 'done' => $this->state, 'idarchives' => $this->idArchives), 
			'idarchives');
	}
	
	/**
	 * saves var toRecord values in the database, serializing arrays
	 */
	function saveDb()
	{
		if( 
			// day + simple day archive, means array empty, do NOT compress
		//	($this->periodType === DB_ARCHIVES_PERIOD_DAY && !CURRENT_DAY_SIMPLE_ARCHIVE) 
		//	|| 
		//	($this->periodType !== DB_ARCHIVES_PERIOD_DAY && !CURRENT_PERIOD_SIMPLE_ARCHIVE)
			COMPRESS_DB_DATA 
			&& function_exists('gzcompress'))
		{
			$this->toRecord['compressed'] = 1;
		}
		else
		{
			$this->toRecord['compressed'] = 0;
		}
		/*
		print("<pre>");
		var_dump($this->toRecord);
		print("<br><br><br>");
		*/
		
		foreach($this->toRecord as $fieldName => $a_value)
		{
			if(is_array($a_value))
			{
				$a_value = databaseEscape(compress(serialize($a_value), $this->toRecord['compressed']));	
			}
			//print("<br>update $fieldName data = ".strlen(serialize($a_value)));
			
			updateLine(
				T_ARCHIVES, 
				array( $fieldName => $a_value, 'idarchives' => $this->idArchives), 
				'idarchives');
		}
		
		$this->updateDbState();
	}
	
	/**
	 * set periodType
	 * 
	 * @param int $type
	 */
	function setPeriodType($type)
	{
		$this->periodType = $type;
		
	}
	
	function getLiteralDate()
	{
		return $this->literalDate;
	}
	function setLiteralDate()
	{
		switch($this->periodType)
		{
			
			case DB_ARCHIVES_PERIOD_DAY:
				$typeDateDisplay = 1;
			break;
			
			case DB_ARCHIVES_PERIOD_WEEK:
				$typeDateDisplay = 6;				
			break;
				
			case DB_ARCHIVES_PERIOD_MONTH:
				$typeDateDisplay = 4;
				
			break;
				
			case DB_ARCHIVES_PERIOD_YEAR:
				$typeDateDisplay = 11;
			break;
		}
		
		$this->literalDate = getDateDisplay($typeDateDisplay, $this->date);
	}
	/**
	 * init the database, inserting a new row for the current archive process
	 * assigns var idArchives
	 * 
	 * @return true
	 */
	function initDb()
	{
		$r2 = query("INSERT INTO ".T_ARCHIVES." (idsite, done, period, date1, date2)" .
				" VALUES (".$this->site->getId().", " .
						" ". DB_ARCHIVES_FAIL."," .
						 $this->periodType .", ".
						" '".$this->date->get()."'," .
						" '".$this->date2->get()."')"
				);

		$this->idArchives = mysql_insert_id();
		return true;
	}
		
	function deleteOldRecords()
	{
		// delete failed archives
		// delete temp archives older than today
		// date2 <> yesterday because of monthly and weekly archive for months/week not finished yet
		// once on 10 calls
		if( time() % 10 == 0 )
		{
			$r = query("SELECT max(idarchives)
						FROM ".T_ARCHIVES
						);
			$r = mysql_fetch_row($r);
			
			// max id - 50 is the max id we want to delete, else it would be dangerous 
			$maxId = (int)$r[0] - 100;
			if($maxId > 1)
			{				
				// we delete only old tries for archived
				// because if someone asked for an archive 10min ago, we don't delete it!
				$query = "DELETE FROM ".T_ARCHIVES."
						WHERE (done = ".DB_ARCHIVES_FAIL."
							OR done = ".DB_ARCHIVES_TEMP.") 
							AND date1 <> '".date("Y-m-d")."'
							AND date2 <> '".date("Y-m-d")."'
							AND date2 <> '".date("Y-m-d", time()-86400)."' 
							AND idarchives < $maxId
						";
				$r = query($query);
				//print("deleted records= ".mysql_affected_rows() ."<br> $query <br>");
			}
		}
		if( time() % 30 == 0)
		{
			$r = query("OPTIMIZE TABLE ".T_ARCHIVES);
			$r = query("OPTIMIZE TABLE ".T_VISIT);
		}

		// delete doubled archives
		
		// delete for days
		// double archive is when concat(idsite, date1) is the same
		// for period = DB_DAYS and done = DONE
		//$this->deleteDoubleArchives(true);
		
		// delete for other period than days (week/month/year)
		// double archive is when concat(idsite, date1, date2) is the same
		// for period <> DB_DAYS and done = DONE
		$this->deleteDoubleArchives(false);		
	}
	
	function deleteDoubleArchives( $dayPeriod )
	{
		if($dayPeriod)
		{
			$concatSQL = 'CONCAT( idsite , period,  date1)';
			$periodTest = '='; 
		}
		else
		{
			$concatSQL = 'CONCAT( idsite , period,  date1, date2)';
			$periodTest = '<>'; 
			
		}
		$r = query("SELECT count(*) as c, idsite, date1, date2, $concatSQL as ac
					FROM ".T_ARCHIVES."
					WHERE period ".$periodTest." ".DB_ARCHIVES_PERIOD_DAY."
						AND done = ".DB_ARCHIVES_DONE."
					GROUP BY ac
					HAVING c > 1"
			);
		while($l = mysql_fetch_assoc($r))
		{
			//print($l['c'] . ": ". $l['idsite']." for date " . $l['date1']."<>".$l['date2']." ( ".$l['ac'].")<br>");
			
			$concatToLookFor = $l['ac'];
			// for the date select the archives to keep
			$r2 = query("SELECT idarchives as id
						FROM ".T_ARCHIVES."
						WHERE $concatSQL = '".$concatToLookFor."'
							AND done = ".DB_ARCHIVES_DONE."
						ORDER BY idarchives DESC
						LIMIT 1");
			$l2 = mysql_fetch_assoc($r2);
			$idToKeep = $l2['id'];
			
			$query = "DELETE 
						FROM  ".T_ARCHIVES."
						WHERE $concatSQL = '".$concatToLookFor."'
							AND idarchives <> $idToKeep
							AND done = ".DB_ARCHIVES_DONE."
						";
			$r3 = query($query);
		}
	}
	/**
	 * offset the date, considering the date of the first log record for the current site
	 * and considering today date. It gives a date which is between these 2 dates.
	 * 
	 * @param object $o_date
	 */
	function offsetDate($o_date, $minDay = null)
	{
		$o_dateR = new Date($o_date->get());
		if(is_null($minDay)) 
			$minDay = $this->site->getMinDay();
		
		// Manage with future
		if($o_date->getTimestamp() > time())
		{
			$o_dateR = new Date(getDateFromTimestamp(time()));
		}
		
				
		// manage with past
		if($o_date->getTimestamp() <  $minDay->getTimestamp())
		{
			$o_dateR = $minDay;
		}
		return $o_dateR;
	}
	
	/**
	 * Returns limit of the period periodType containing $s_date
	 * Works with weeks, month, years, and misc periods (in this case, minDate is the first day where there are logs)
	 * 
	 * @param string $s_date 
	 */
	function getPeriodDatesLimit($s_date)
	{
		// objects
		$date = new Date($s_date);
		$minDate = $this->site->getMinDay();
		
		$date = $this->offsetDate($date);
		
		//print("MinDate is ".$minDate->get()."<br>Date asked is $s_date<br>Date after Offset is ".$date->get()."<br>");
		
		switch ($this->periodType) 
		{
			
			case DB_ARCHIVES_PERIOD_MONTH:
				// detect min day for the month
				// if the minimum date month is different, we surely take the whole month 
				if($minDate->getMonth() == $date->getMonth() 
					&& $minDate->getYear() == $date->getYear())
				{
					$minDateForSure = $minDate->get();
				}
				else
				{
					$minDateForSure = $date->getYear()."-".$date->getMonth()."-01";
				}
				
				// detect max date for the month
				// if month asked is the current month then max day is today, else its the last day of the month
				if($date->getMonth() == date("m") && $date->getYear() == date("Y")) // >= because if month in future, take today
				{
					
					// if today is the first day of the month, don't say 
					// "yesterday is the last day of the month"
					// but "today is the only day of the month"
					if( date("j",time() ) == 1)
					{	
						$maxDateForSure = getDateFromTimestamp(time());
					}
					else
					{
						$maxDateForSure = getDateFromTimestamp(time()-86400);						
					}
				}
				else
				{
					$maxDateForSure = $date->getYear()."-".$date->getMonth()."-".date("t", $date->getTimestamp());
				}
				break;
			case DB_ARCHIVES_PERIOD_WEEK:
				
				$time = $date->getTimestamp();
				
				// detect beginning of the week
				while(date("W", $time-86400) == $date->getWeek()
				&& $time-86400 >= $minDate->getTimestamp()
				)
				{
					$time -= 86400;
				}
				
				$minDateForSure = getDateFromTimestamp($time);
				
				// end of week
				while(date("W", $time+86400) == $date->getWeek()
				&& $time+86400 <= time()
				)
				{
					$time += 86400;
				}
				$maxDateForSure = getDateFromTimestamp($time);
				
				break;
			case DB_ARCHIVES_PERIOD_MISC_PERIOD:
				$minDateForSure = $minDate->get();
				$maxDateForSure = $date->get();
				break;
				
			case DB_ARCHIVES_PERIOD_YEAR:
			
				// min is minDate if year common 
				if($date->getYear() == date("Y", $minDate->getYear()))
				{
					$minDateForSure = $minDate->get();
				}
				else
				{
					$minDateForSure = $date->getYear()."-01-01";
				}
				
				// max date is today if year is current year
				if($date->getYear() == date("Y"))
				{
					$maxDateForSure = getDateFromTimestamp(time());
	
				}
				else
				{
					$maxDateForSure = $date->getYear()."-12-31";
				}
				break;
				
				default:
				break;
		}
		
		$this->date = new Date($minDateForSure);
		$this->date2 = new Date($maxDateForSure);
		
		
		//print("max=$maxDateForSure <br> ".$this->date->get().",". $this->date2->get()."<br>");
		$this->date = $this->offsetDate($this->date);
		$this->date2 = $this->offsetDate($this->date2);
	}	
	
	
	function sortAndLimitToRecord()
	{
		$doNotSort = array('vis_st', 'vis_lt', 'pag_st', 'pag_lt', 'vis_lth', 'vis_nb_pag', 'vis_nb_vis');

		foreach ($this->arrayOneDimToSum as $name) 
		{
			if( !in_array($name, $doNotSort))
			{
				arsort($this->toRecord[$name]);
			}
			$this->toRecord[$name] = getArrayOffsetLimit($this->toRecord[$name], 0, MAX_DISTINCT_ELEMENTS);
		}
		
		foreach($this->arrayPmvSumToSum as $name)
		{
			uasort($this->toRecord[$name], "sortingPmv"); 
			$this->toRecord[$name] = getArrayOffsetLimit($this->toRecord[$name], 0, MAX_DISTINCT_ELEMENTS);
		}
		
		foreach($this->arrayIntToSum as $name)
		{
			uasort($this->toRecord[$name], "sortingInterest");
			$this->toRecord[$name] = getArrayOffsetLimit($this->toRecord[$name], 0, MAX_DISTINCT_INTEREST_ELEMENTS);
		}
		
	}
}


?>