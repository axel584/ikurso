<?php
/* 
 * phpMyVisites : website statistics and audience measurements
 * Copyright (C) 2002 - 2006
 * http://www.phpmyvisites.net/ 
 * phpMyVisites is free software (license GNU/GPL)
 * Authors : phpMyVisites team
*/

// $Id: ArchiveMonth.class.php 29 2006-08-18 07:35:21Z matthieu_ $


/**
 * Class that is used for the archiving of month periods
 * It uses ArchivePeriod which makes all computes based on day archives 
 * and It is used for ArchiveYear
 */
class ArchiveMonth extends ArchivePeriod
{
	/**
	 * Constructor
	 * 
	 * @param object $site
	 * @param string $s_date
	 */
	function ArchiveMonth($site, $s_date='')
	{
		//print("site ".$site->getName()." date $s_date <br>");
		
		parent::Archive($site);
		
		$this->setPeriodType(DB_ARCHIVES_PERIOD_MONTH);
		
		if(!empty($s_date))
		{
			$this->setDate($s_date);
		}
		
	}
}
?>