<?php
/* 
 * phpMyVisites : website statistics and audience measurements
 * Copyright (C) 2002 - 2006
 * http://www.phpmyvisites.net/ 
 * phpMyVisites is free software (license GNU/GPL)
 * Authors : phpMyVisites team
*/

// $Id: ArchivePeriod.class.php 102 2006-10-01 16:28:30Z matthieu_ $


/**
 * Used for misc periods, weeks, months, and years
 * Can archive a period using the DAYS of the period, or the MONTHS,
 * depending on the var periodType value
 */
class ArchivePeriod extends Archive
{
	
	var $subPeriodValues = array();
	var $archiveDay;
	
	function ArchivePeriod($site, $s_date, $s_date2, $typePeriod)
	{
		parent::Archive($site);
		$this->setPeriodType($typePeriod);
		$this->date = $this->offsetDate(new Date($s_date));
		$this->date2 = $this->offsetDate(new Date($s_date2));
	}
	
	function setDate($s_date)
	{
		$this->reset();
		$this->getPeriodDatesLimit($s_date);
		
		if($this->date->isPeriodFinished($this->periodType))
		{
			$this->state = DB_ARCHIVES_DONE;
		}
		else
		{
			$this->state = DB_ARCHIVES_TEMP;
		}
		
		
		$this->setLiteralDate();
	}
	
	function reset()
	{
		
		$this->date = null;
		$this->toRecord = null;
		$this->idArchives = null; 
		$this->state = null;
		
		$this->date2 = null;
		$this->subPeriodValues = null;
	}
	
	/**
	 * If period isn't archived, then it assign var state, var archiveSubPeriod,
	 * and each subperiod values in subPeriodValues array 
	 * If period is already archived, true
	 * 
	 * @return bool 
	 */
	function isArchived()
	{		
		$r = query("SELECT idarchives 
					FROM ".T_ARCHIVES."
			 		WHERE idsite = ".$this->site->getId()."
					AND date1 = '".$this->date->get()."'
					AND date2 = '".$this->date2->get()."'
					AND period = ".$this->periodType."
					AND done <> ".DB_ARCHIVES_FAIL
			);

		// not archived
		if(mysql_num_rows($r) == 0)
		{
			// if YEAR, we use Months for processing
			if( $this->periodType ===  DB_ARCHIVES_PERIOD_YEAR)
			{
				$this->archiveSubPeriod = new ArchiveMonth($this->site);
				$a_subPeriod = getDayOfMonthBetween($this->date->get(), $this->date2->get());
			}
			// in the other cases, we use Days for processing
			else
			{
				$this->archiveSubPeriod = new ArchiveDay($this->site);
				$a_subPeriod = getDaysBetween($this->date->get(), $this->date2->get());
				printDebug("Not archive... launch computation for ");
				printDebug($a_subPeriod);
			}
			
			
			foreach($a_subPeriod as $subPeriod)
			{
				// printDebug("<br>avant set date : ".$this->archiveSubPeriod->date->get());
				$this->archiveSubPeriod->setDate($subPeriod);
				//printDebug("<br>apres set date : devrait etre $subPeriod et est ".$this->archiveSubPeriod->date->get());
								
				// if any of the days in period is temp, then the whole period is set to temp
				if($this->archiveSubPeriod->state === DB_ARCHIVES_TEMP)
				{
					$this->state = DB_ARCHIVES_TEMP;
				}
				
				// store in ->subPeriodValues[] days to compute and select * for each day
				$l = $this->archiveSubPeriod->getArchived();
				
				// if subperiod is the day, stocke KEY = DATE
				// else if period, stock KEY = IDARCHIVES
				// needed for computing nb_uniq_vis
				if($this->periodType ===  DB_ARCHIVES_PERIOD_YEAR)
				{
					$key = $l['idarchives'];
				}
				else
				{
					$key = $subPeriod;
				}
				
				$this->subPeriodValues[$key] = $l; 
			}
			//printDebug("OK we have all datas<br>");
			//printDebug($this->subPeriodValues);
			
			return false;
		}
		// if the period date, date2 is known, means ever archived, it's ok
		// because the period is only computed ONCE for each couple (date, date2)
		else
		{
			printDebug("<u>Period known ! Don't archive</u><br>");
			$l = mysql_fetch_assoc($r);
			
			$this->idArchives = $l['idarchives'];
			return true;
		}
	}
	
	/**
	 * returns 'select *' for current period
	 * 
	 * @return array SELECT * FROM archives [...]
	 */
	function getArchived()
	{
		if(!$this->isArchived())
		{
			printDebug("Compute new period...");
			$this->compute();
		}
		else
		{ 
			printDebug("period already computed...");
		}
		$r = query("SELECT * 
					FROM ".T_ARCHIVES."
					WHERE idarchives = ".$this->idArchives ."
					ORDER BY idarchives DESC
					LIMIT 1"
		);
		
		return mysql_fetch_assoc($r);
	}

		
	/**
	 * Computes datas for all subPeriodValues values 
	 * and saves it in a new row in the database table archives
	 * 
	 * @return void
	 */
	function compute()
	{			
		if(CURRENT_PERIOD_SIMPLE_ARCHIVE && $this->state === DB_ARCHIVES_TEMP)
		{
			$this->toRecord['simple'] = 1;
		}
		else
		{
			$this->toRecord['simple'] = 0;
		}
		// date in the IN(...) SQL field for unique visitors
		$inIdArchives = '';
		$this->toRecord['vis_pag_grp'] = array();
		
		// init 
		$toInitInt = $this->intValuesToSum;
		$toInitArray = array_merge($this->arrayOneDimToSum, 
									$this->arrayPmvSumToSum, 
									$this->arrayIntToSum);
		foreach($toInitInt as $value)
		{
			$this->toRecord[$value] = 0;
		}
		foreach($toInitArray as $value)
		{
			$this->toRecord[$value] = array();
		}
		
		
		// for each subPeriod, sum all values
		foreach($this->subPeriodValues as $idArchives => $subPeriodValues)
		{			
			
			foreach($this->intValuesToSum as $name)
			{
				$this->toRecord[$name] += $subPeriodValues[$name];
			}
			
			// case we don't want a SIMPLE archiving 
			if($this->toRecord['simple'] == 0)
			{
				//printDebug("Sum2 : <br>");
				foreach ($this->arrayOneDimToSum as $name) 
				{
					if(!isset($subPeriodValues[$name]))
					{
						$subPeriodValues[$name] = compress(serialize(array()), $subPeriodValues['compressed']);
					}
					$this->toRecord[$name] = 
							getArrayOneDimVeryVeryVerySpecialSum($this->toRecord[$name], 
								unserialize(uncompress($subPeriodValues[$name], $subPeriodValues['compressed'])), "sum");
	
				}
				
				//printDebug("Sum3 : <br>");
				foreach($this->arrayPmvSumToSum as $name)
				{
					if(!isset($subPeriodValues[$name]))
					{
						$subPeriodValues[$name] = compress(serialize(array()), $subPeriodValues['compressed']);
					}
	
						$this->toRecord[$name] = 
							getArrayOneDimVeryVeryVerySpecialSum($this->toRecord[$name], 
									unserialize(uncompress($subPeriodValues[$name], $subPeriodValues['compressed'])), "sumArray");
				}
				
				//printDebug("Sum4 : <br>");
				foreach($this->arrayIntToSum as $name)
				{
					if(!isset($subPeriodValues[$name]))
					{
						$subPeriodValues[$name] = compress(serialize(array()), $subPeriodValues['compressed']);
					}
	
					$this->toRecord[$name] = 
						getArrayOneDimVeryVeryVerySpecialSum($this->toRecord[$name], 
								unserialize(uncompress($subPeriodValues[$name], $subPeriodValues['compressed'])), "sumArray");
				}
				
				//printDebug("<h1>Sum5  $idArchives: </h1><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>");
				//printDebug("table to add");
				//printDebug(unserialize($subPeriodValues['vis_pag_grp']));
				if(!is_string($subPeriodValues['vis_pag_grp']))
					$subPeriodValues['vis_pag_grp'] = compress(serialize(array()), $subPeriodValues['compressed']);
					
				$this->toRecord['vis_pag_grp'] = getPagGrpArrayMultiDimSum($this->toRecord['vis_pag_grp'],
													unserialize(uncompress($subPeriodValues['vis_pag_grp'], $subPeriodValues['compressed'])));
			}

			$inIdArchives .= "'".$idArchives."', ";
		}
		
		//printDebug($this->toRecord['vis_pag_grp']); 
		//exit;
		/*
		 * Sorting arrays
		 */
		
		$this->sortAndLimitToRecord();
		
		$inIdArchives = substr($inIdArchives, 0, strlen($inIdArchives) - 2);
				
		// if year, look for info averaging month archives
		if($this->periodType === DB_ARCHIVES_PERIOD_YEAR)
		{
			$r = query("SELECT sum(nb_uniq_vis) as nb_uniq_vis, max(nb_max_pag) as nb_max_pag
					FROM ".T_ARCHIVES."
					WHERE idarchives IN (".$inIdArchives.")"
					);
					
			// unique visitors returning sum on the period
			$nb_uniq_vis_returning = query("SELECT sum(nb_uniq_vis_returning) as nb_uniq_vis_returning
											FROM ".T_ARCHIVES."
											WHERE idarchives IN (".$inIdArchives.")"
											);
			// returning visitors
			$returning = query("SELECT nb_vis_returning as s, idarchives as pseudodate, 
									nb_pag_returning as sp, date1 as pseudodate2
						FROM ".T_ARCHIVES."
						WHERE idsite = ".$this->site->getId()."
						AND idarchives IN (".$inIdArchives.")
						GROUP BY pseudodate
						");
			
		}
		// but for other periods, look directly into logs tables
		// CAREFUL : WONT WORK FOR PERIOD OLDER THAN 1 MONTH !!
		else
		{
			$r = query("SELECT count(distinct idcookie) as nb_uniq_vis, max(total_pages) as nb_max_pag
				FROM ".T_VISIT."
				WHERE idsite = ".$this->site->getId()."
				AND server_date IN (".$inIdArchives.")"
				);
				
			
			// unique visitors returning sum on the period
			$nb_uniq_vis_returning = query("SELECT count(distinct idcookie) as nb_uniq_vis_returning	
											FROM ".T_VISIT."
											WHERE idsite = ".$this->site->getId()."
											AND server_date IN (".$inIdArchives.")
											AND returning = 1
				 							GROUP BY returning"
											);

			// returning visitors
			$returning = query("SELECT count(*) as s, server_date as pseudodate, 
										sum(total_pages) as sp
						FROM ".T_VISIT."
						WHERE idsite = ".$this->site->getId()."
						AND server_date IN (".$inIdArchives.")
						AND returning = 1
						GROUP BY pseudodate"); 
			
			// for each returning visit, how many time did they return?			
			$f1 = query("SELECT count(*) as s
						FROM ".T_VISIT."
						WHERE idsite = ".$this->site->getId()."
						AND server_date IN (".$inIdArchives.")
						GROUP BY idcookie");	
			$res = array();					
			while($fx = mysql_fetch_assoc($f1))
			{
				@$res[(int)$fx['s']]++;
			}
			ksort($res);		
			$this->toRecord['vis_nb_vis'] = $res;
			
		}	
		$nb_uniq_vis_returning = mysql_fetch_assoc($nb_uniq_vis_returning);
		$this->toRecord['nb_uniq_vis_returning'] = $nb_uniq_vis_returning['nb_uniq_vis_returning'];	
			
		$l = mysql_fetch_assoc($r);
		$this->toRecord['nb_uniq_vis'] = $l['nb_uniq_vis'];
		$this->toRecord['nb_max_pag']  = $l['nb_max_pag'];
		
		// visits per period, new vs returning, and pages hits
		$returningTotal = 0;
		$returningPag = 0;
		$this->toRecord['vis_period'] = array();
		while($l2 = mysql_fetch_assoc($returning))
		{
			$visitsTotal = $this->subPeriodValues[$l2['pseudodate']]['nb_vis'];
			$pagesTotal =  $this->subPeriodValues[$l2['pseudodate']]['nb_pag'];
			$returningVisits = $l2['s'];
			
			$returningPag += $l2['sp'];
			
			$returningTotal += $returningVisits;
			
			$this->toRecord['vis_period'][isset($l2['pseudodate2'])?$l2['pseudodate2']:$l2['pseudodate']] = array(
						ARRAY_INDEX_RETURNING_COUNT => (int)$returningVisits,
						ARRAY_INDEX_NEW_COUNT => $visitsTotal - $returningVisits,
						ARRAY_INDEX_PAGES_COUNT => (int)$pagesTotal
						);
		}
		ksort($this->toRecord['vis_period']);
		// number of returning visits
		$this->toRecord['nb_vis_returning'] = $returningTotal;
		$this->toRecord['nb_pag_returning'] = $returningPag;
			
		//printDebug("TO RECORD<br>");
		//printDebug($this->toRecord);
				
		/*
		 * init
		 */
		 
		$this->initDb();
		
		/*
		 * final save, close your eyes and prey 
		 */
		 $this->saveDb();
		 
		 /**
		  * delete all visit/month records
		  */
		  
		$this->deleteOldRecords();
	}
	
	// TODO protéger le champ pmv_sum des mots clés	
	function deleteOldRecords()
	{
		parent::deleteOldRecords();
		
		// delete records in VISIT that are useless 
		// (means when week AND month using these records are archived)
		if(
			($this->periodType === DB_ARCHIVES_PERIOD_MONTH
				|| $this->periodType === DB_ARCHIVES_PERIOD_WEEK)
			&& $this->state !== DB_ARCHIVES_TEMP)
		{
			// select all weeks and months begin and end
			$r = query("SELECT date1, date2, idsite, period, idarchives
						FROM ".T_ARCHIVES."
						WHERE done = ".DB_ARCHIVES_DONE."
							AND (period = ".DB_ARCHIVES_PERIOD_WEEK."
								OR period = ".DB_ARCHIVES_PERIOD_MONTH."
								)
						"); 
			while($l = mysql_fetch_assoc($r))
			{
				// stock all dates between these two in an array
				$dateBetween = getDaysBetween( $l['date1'], $l['date2']);
				
				//print($l['idarchives'] ."<br>");
				//print( $l['date1'].",". $l['date2']." id=:". $l['idsite']." period=:". $l['period']." "	);
				//print_r($dateBetween); print("<br> which is ".sizeof($dateBetween)." elements <br><br>");
				
				if(isset($flag[$l['idsite']][$l['period']][$l['date1']]))
				{
					$c = $flag[$l['idsite']][$l['period']][$l['date1']];
					if(sizeof($c) < sizeof($dateBetween)
						&& sizeof($dateBetween) >= 7)
					{
						$flag[$l['idsite']][$l['period']][$l['date1']] = $dateBetween;
					}
				}
				else
				{
					$flag[$l['idsite']][$l['period']][$l['date1']] = $dateBetween;
				}
			}
			//exit;
			
			foreach($flag as $idsite => $a_idsite)
			{
				foreach($a_idsite as $period => $a_period)
				{
					foreach($a_period as $a_date)
					{
						foreach($a_date as $d)
						{
							if(!isset($toCheck[$idsite][$d]))
							{
								$toCheck[$idsite][$d] = 1;
							}
							else
							{
								$toCheck[$idsite][$d]++;
							}
						}
					}
				}
			}
			//print("<pre>Apres sommes des dates <br>");
			//print_r($toCheck);
			
			$deleted = 0;
			foreach($toCheck as $idsite => $a_date)
			{
				foreach($a_date as $date => $hits)
				{
					// for the days who have 2 hits (mean that weeks and month that contain 
					// this day are archived)
					// delete these day records!
					if($hits > 1)
					{
						$r = query("DELETE
									FROM ".T_VISIT."
									WHERE server_date = '".$date."'
										AND idsite = $idsite
										");
						$deleted+=mysql_affected_rows();
					}
				}
			}
			//print("rows deleted = $deleted");
			if(time()%3==0)
			{
				$r = query("OPTIMIZE TABLE ".T_VISIT);
			}
		}
	}	
}
?>