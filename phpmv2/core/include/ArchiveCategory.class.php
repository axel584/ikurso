<?php
/* 
 * phpMyVisites : website statistics and audience measurements
 * Copyright (C) 2002 - 2006
 * http://www.phpmyvisites.net/ 
 * phpMyVisites is free software (license GNU/GPL)
 * Authors : phpMyVisites team
*/

// $Id: ArchiveCategory.class.php 29 2006-08-18 07:35:21Z matthieu_ $



/**
 * Class used during pages/groups/files processing.
 * This class can give levels, Name, Ids, of pages from their Id (base logs)
 */
class ArchiveCategory
{
	/**
	 * @var array contains IdToName 
	 */
	var $content;
	
	/**
	 * Constructor
	 */
	function ArchiveCategory()
	{
	}

	function loadInfo()
	{
		if(!isset($this->content))
		{
			// select all categories today and their parent and level
			$r = query("SELECT idcategory, level, idparent, name " .
			" FROM ".T_CATEGORY
			);
			
			while($l = mysql_fetch_assoc($r))
			{
				$this->content[$l['idcategory']] = array( 
				0 => $l['idparent'], 
				1 => $l['level'], 
				2 => $l['name']
				);
			}
		}
	}
	/**
	 * returns name of idcategory $id in base logs
	 * 
	 * @param int $id
	 * 
	 * @return string name
	 */
	function getName($id)
	{
		$this->loadInfo();
		return $this->content[$id][2];
	}
	
	/**
	 * returns the array containing the a_toAdd array
	 * following the tree of idCategory
	 * 
	 * @param int $idCategory
	 * @param array $a_toAdd
	 * 
	 * @return array
	 */
	function getTreeCompleted($idCategory, $a_toAdd)
	{
		$this->loadInfo();
		
		//printDebug("getTreecompleter id: $idCategory arr: $a_toAdd");
		$currentLevel = $this->content[$idCategory][1]; // getLevel
		$currentId = $idCategory;
		
		
		while($currentId != 0)
		{
			//printDebug("currentId $currentId level $currentLevel <br>");
			//printDebug("id : $currentId level $currentLevel");
			$key = 'c'.$currentId;
			$a_toAdd = array( $key => $a_toAdd);
			//exit();
			$currentId = $this->content[$currentId][0];
			if($currentId != 0)
			{
				$currentLevel = $this->content[$currentId][1];
			}
			
		}
		return $a_toAdd;
	}
}

?>