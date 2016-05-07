<?php
/* 
 * phpMyVisites : website statistics and audience measurements
 * Copyright (C) 2002 - 2006
 * http://www.phpmyvisites.net/ 
 * phpMyVisites is free software (license GNU/GPL)
 * Authors : phpMyVisites team
*/

// $Id: Date.class.php 29 2006-08-18 07:35:21Z matthieu_ $


/**
 * Class generic used for all date in the format YYYY-MM-DD
 */
class Date {
	
	/**
	 * @var array 
	 */
	var $info;
		
	/**
	 * Constructor 
	 * 
	 * @param string $s_date
	 */
	function Date($s_date)
	{
		$s_date = $this->getValidDate($s_date);
		$this->loadInfo($s_date);		
	}	
	
	function getValidDate($s_date)
	{
		if( strlen($s_date) === 10
			&& ($e = explode('-', $s_date)) 
			&& sizeof($e) === 3
			&& strlen($e[0]) === 4
			&& is_numeric($e[0])
			&& strlen($e[1]) === 2
			&& is_numeric($e[1])
			&& strlen($e[2]) === 2
			&& is_numeric($e[2])
		)
		{
			return $s_date;
		}
		else
		{
			return getDateFromTimestamp(time());
		}
	} 
	
	function loadInfo($s_date)
	{
		$this->date = $s_date;
		$this->info = $this->getInfo();
	}
	/**
	 * returns date info array
	 * 
	 * @access private
	 * @return array
	 */
	function getInfo()
	{
		$d = explode('-', $this->date);
		$timestamp = mktime(23,59,59, $d[1], $d[2], $d[0]);
		$week = date("W", $timestamp);
		$weekDayNumber = date("w", $timestamp);
		return array('year'=>$d[0], 'month'=>$d[1], 'day'=>$d[2], 'timestamp'=>$timestamp, 'week'=>$week,
				'weekDayNumber'=>$weekDayNumber);
	}

	function setTimestamp($ts)
	{
		$this->loadInfo(getDateFromTimestamp($ts));
	}
	
	function setDate($s_date)
	{
		$this->loadInfo($s_date);
	}
	
	function getWeekDayNumber()
	{
		return $this->info['weekDayNumber'];
	}
	
	/**
	 * returns date YYYY-MM-DD
	 * 
	 * @return string 
	 */
	function get()
	{
		return $this->info['year']."-".$this->info['month']."-".$this->info['day'];
	}	
	
	/**
	 * returns timestamp
	 * 
	 * @return string 
	 */
	function getTimestamp()
	{
		return $this->info['timestamp'];
	}

	/**
	 * returns day
	 * 
	 * @return string
	 */
	function getDay()
	{
		return $this->info['day'];
	}	
	
	/**
	 * returns month
	 * 
	 * @return string
	 */
	function getMonth()
	{
		return $this->info['month'];
	}
	
	/**
	 * returns year
	 * 
	 * @return string
	 */
	function getYear()
	{
		return $this->info['year'];
	}
	
	/**
	 * returns ISO-8601 week number of year, weeks starting on Monday
	 * 
	 * @return string
	 */
	function getWeek()
	{
		return $this->info['week'];
	}
	
	/**
	 * returns true if the period of the object calling this method is finished
	 * 
	 * @param int $period
	 * 
	 * @return bool
	 */
	function isPeriodFinished($period)
	{
		if($period === DB_ARCHIVES_PERIOD_DAY)
		{
			return $this->isDayFinished();
		}
		else if($period === DB_ARCHIVES_PERIOD_MONTH)
		{
			return $this->isMonthFinished();
		}
		else
		{
			print("Period asked in isPeriodFinished UNKNOWN<br>");
			return true;
		}
	}
	
	/**
	 * returns true if day of period is older than today
	 * 
	 * @access private
	 * @return bool
	 */
	function isDayFinished()
	{
		if($this->getTimestamp() < time())
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	
	/**
	* returns true if month of period is older than current month
	* 
	* @access private
	* @return bool
	*/
	function isMonthFinished()
	{
		if($this->getYear() == date("Y") && $this->getMonth() >= date("m"))
		{
			return false;
		}
		else
		{
			return true;
		}
	}
	 /**
	 * Adds x days to date  
	 * Works with daylight saving time
	 */
	 function addDays($nbDaysToAdd)
	 {
	   $this->setTimestamp(mktime(23, 59, 59, $this->info['month'] , $this->info['day'] + $nbDaysToAdd, $this->info['year']));
	 }
}
?>