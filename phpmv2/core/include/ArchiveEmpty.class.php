<?php
/* 
 * phpMyVisites : website statistics and audience measurements
 * Copyright (C) 2002 - 2006
 * http://www.phpmyvisites.net/ 
 * phpMyVisites is free software (license GNU/GPL)
 * Authors : phpMyVisites team
*/

// $Id: ArchiveEmpty.class.php 29 2006-08-18 07:35:21Z matthieu_ $

class ArchiveEmpty extends Archive
{
	function ArchiveEmpty($site, $s_date, $type)
	{
		parent::Archive($site);		
		$this->setPeriodType($type);
		$this->date = new Date($s_date);
	}
	
	function getArchived()
	{
		return array(
			'idarchives' => 0,
			'nb_vis' => 0,
			'nb_uniq_pag' => 0,
			'nb_max_pag' => 0,
			'vis_pag_grp' => serialize(array()),
			'nb_direct' => 0,
			'nb_search_engine' => 0,
			'nb_site' => 0,
			'nb_partner' => 0,
			'nb_pag' => 0,
			'nb_newsletter' => 0,
			'nb_vis_1pag' => 0,
			'sum_vis_lth' => 0
			);
	}
}
?>