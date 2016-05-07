<?php
/* 
 * phpMyVisites : website statistics and audience measurements
 * Copyright (C) 2002 - 2006
 * http://www.phpmyvisites.net/ 
 * phpMyVisites is free software (license GNU/GPL)
 * Authors : phpMyVisites team
*/

// $Id: ArchiveYear.class.php 29 2006-08-18 07:35:21Z matthieu_ $


/**
 * Class that is used for the archiving of year period
 * It uses ArchiveMonth for the processing
 */
class ArchiveYear extends ArchivePeriod
{
	function ArchiveYear($site, $s_date)
	{	
		parent::Archive($site);
		
		$this->setPeriodType(DB_ARCHIVES_PERIOD_YEAR);
		
		$this->getPeriodDatesLimit($s_date);
	} 
}

?>