<?php
/* 
 * phpMyVisites : website statistics and audience measurements
 * Copyright (C) 2002 - 2006
 * http://www.phpmyvisites.net/ 
 * phpMyVisites is free software (license GNU/GPL)
 * Authors : phpMyVisites team
*/

// $Id: DataModel.class.php 103 2006-10-01 17:32:08Z matthieu_ $


$GLOBALS['sorting_index'] = 'sum';
$GLOBALS['sorting_order'] = 'desc';

require_once INCLUDE_PATH."/core/include/Archive.class.php";
require_once INCLUDE_PATH."/core/include/ArchiveEmpty.class.php";
require_once INCLUDE_PATH."/core/include/ArchiveDay.class.php";
require_once INCLUDE_PATH."/core/include/ArchivePeriod.class.php";
require_once INCLUDE_PATH."/core/include/ArchiveWeek.class.php";
require_once INCLUDE_PATH."/core/include/ArchiveMonth.class.php";
require_once INCLUDE_PATH."/core/include/ArchiveYear.class.php";
require_once INCLUDE_PATH . "/core/include/ArchiveTable.class.php";

class DataModel
{
	//object ArchiveX
	var $archive;
	
	var $langFile;
	
	var $content;
	
	var $objects;
	
	var $infoSerialized;
	
	var $idDetailsSaved; // store ID for compute nb of subelements for a data like search engines, keywords...
	var $sizeDetailsSaved;
	
	function DataModel( & $o_archive, & $o_request)
	{
		$this->archive = $o_archive;

		$this->infoSerialized = $this->archive->getArchived();
		
		/*
		print("<br>apres compresseion " . strlen($this->infoSerialized['vis_pag_grp']));
		print("avant compresseion " . strlen(uncompress($this->infoSerialized['vis_pag_grp'],1)));
		print("<br>apres base 64 compresseion " . strlen(base64_encode($this->infoSerialized['vis_pag_grp'])));
		*/
		if(isset($this->infoSerialized['simple']) && $this->infoSerialized['simple'] == 1)
		{
			if(!isset($GLOBALS['header_message_tpl'])) $GLOBALS['header_message_tpl'] = '';
			
			if(!isset($GLOBALS['header_simple_message']))
			{
				$GLOBALS['header_message_tpl'] .= "<br>This is a simple archiving. ONLY some statistics are available for this archive, because the period asked in the statistics is not finished yet. <br />You can turn 'Simple Archive' Off in the file /config.inc.php by setting  CURRENT_XXXX_SIMPLE_ARCHIVE to false.<br/>";
				$GLOBALS['header_simple_message'] = true;
			}
		}
		$this->request = $o_request;
		
		$this->arraySumInfo = array(
				'int'           => $this->getContent('nb_vis'),
				'pag'           => $this->getContent('nb_pag'),
				'exit'          => $this->getContent('nb_vis'),
				'entry'         => $this->getContent('nb_vis'), 
				'sumtime'       => $this->getContent('nb_pag'),
				'singlepage'    => $this->getContent('nb_vis'),
				'keyword'       => $this->getReferersNbSearchEngines(),
				'searchengine'  => $this->getReferersNbSearchEngines(),
				'site'          => $this->getReferersNbSites(),
				'partner'       => $this->getReferersNbPartners(),
				'newsletter'    => $this->getReferersNbNewsletters(),
				'type'    		=> $this->getReferersTypeDistinct()
				);
	}
	
	function getContent($name, $offset = 0, $nbElementsToDisplay = -1)
	{
		// case for example nb_uniq_vis_returning after rc2, prior version didn't have
		if(!isset($this->infoSerialized[$name])) return 0;
		
		$indexName = $name."-".$offset."-".$nbElementsToDisplay;		
		if(!isset($this->content[$indexName]))
		{
			//printDebug($this->infoSerialized);
		//print("content : ".$this->infoSerialized[$name]);
			if(!is_numeric($this->infoSerialized[$name]) 
					&& $name!='date1' 
					&& $name != 'date2'
					&& isset($this->arraySumInfo)
					)
			{
				$array = array();
				//printTime('before unserialize', true);
				if(!is_null($this->infoSerialized[$name]))
				{
					if(isset($this->infoSerialized['compressed'])
						&& $this->infoSerialized['compressed'] == 1)
					{
						$array = unserialize(gzuncompress($this->infoSerialized[$name]));
					}
					else
					{
						$array = unserialize($this->infoSerialized[$name]);
					}
					
					if(substr($name, 0, 4) === 'int_')
					{
						$array = $this->getArrayInterestNamed($array);
					}
				}
			
				// case subdetail, record number of subdetails for an element
				if($name == 'vis_search_engine'
				|| $name == 'vis_keyword'
				|| $name == 'vis_site'
				|| $name == 'vis_partner')
				{
					if(is_array($array))
					{
						foreach($array as $key => $infoA)
						{
							if($key == $this->idDetailsSaved[$name])
							{	
								$this->sizeDetailsSaved[$name] = sizeof($infoA)-1;
							}		
						}
					}
				}
				
				//printTime('before offset', true);
				$this->content[$indexName] = getArrayOffsetLimit(
														$array, 
														$offset, 
														$nbElementsToDisplay,
														$name,
														null,
														$this->arraySumInfo
														);
			}
			else
			{
				$this->content[$indexName] = $this->infoSerialized[$name];
			}
		}
		return $this->content[$indexName];
	}
	
	
	function getVisitsFrequencyNewReturningGraph()
	{
		$all =  $this->getContent('vis_period');

		switch($this->archive->periodType)
		{
				
			case DB_ARCHIVES_PERIOD_WEEK:
				$typeDateDisplay = 2;
				$typeDateDisplayGraph = 8;
				
			break;
				
			case DB_ARCHIVES_PERIOD_MONTH:
				$typeDateDisplay = 2;
				$typeDateDisplayGraph = 8;
				
			break;
				
			case DB_ARCHIVES_PERIOD_YEAR:
				$typeDateDisplay = 5;
				$typeDateDisplayGraph = 10;
			break;
		}
		
		$new = $returning = $axis = array();
		ksort($all);
		foreach($all as $date => $info)
		{
			$new[]       = $info[ARRAY_INDEX_NEW_COUNT];
			$returning[] = $info[ARRAY_INDEX_RETURNING_COUNT];
			switch($this->archive->periodType)
			{
				case DB_ARCHIVES_PERIOD_DAY:
					$dateD = sprintf( $GLOBALS['lang']['generique_tempsheure'], $date) ;
				break;
				
				case DB_ARCHIVES_PERIOD_WEEK:
					$dateD = getDateDisplay($typeDateDisplayGraph, new Date($date));
				break;
				
				case DB_ARCHIVES_PERIOD_MONTH:
					$dateDD = new Date($date);
					$dateD = $dateDD->getDay();
				break;
				
				case DB_ARCHIVES_PERIOD_YEAR:
					$dateDD = new Date($date);
					$dateD = $GLOBALS['lang']['moistab_graph'][$dateDD->getMonth()];
					
				break;
			}
			$axis[] = $dateD;
		}
		
		return array(
				'data1' => array(
					'data'     => $new,
					'legend'   => $GLOBALS['lang']['frequence_nouvellesvisites']
					),
				'data2' => array(
					'data'     => $returning,
					'legend'   => $GLOBALS['lang']['frequence_visitesconnues']
					),
				'axis'  => $axis,						
				'title' => $GLOBALS['lang']['frequence_nouveauxconnus']
				);
	}
	
	function getVisitsFrequencyStatistics()
	{
	    $ret = array();
	    
		if($this->getContent('nb_vis') != 0)
		{
			$nbVisitNew = $this->getContent('nb_vis') - $this->getContent('nb_vis_returning');
			$nbPagNew = $this->getContent('nb_pag') - $this->getContent('nb_pag_returning');
			$totalTimeNew = $this->getContent('sum_vis_lth') - $this->getContent('sum_vis_lth_returning');
			$nbOnePagVis = $this->getContent('nb_vis_1pag') - $this->getContent('nb_vis_1pag_returning');
			
			$nb_vis                  = $this->getContent('nb_vis');
			$nb_uniq_vis             = $this->getContent('nb_uniq_vis');
			$nb_pag                  = $this->getContent('nb_pag');
			$nb_vis_returning		 = $this->getContent('nb_vis_returning');
			$nb_uniq_vis_returning   = $this->getContent('nb_uniq_vis_returning');
			$nb_pag_returning        = $this->getContent('nb_pag_returning');
			$sum_vis_lth_returning   = $this->getContent('sum_vis_lth_returning');
			$nb_vis_1pag_returning   = $this->getContent('nb_vis_1pag_returning');
			
			
			$ret = array();
			$ret['nb_uniq_vis_returning']	 = $nb_uniq_vis_returning;
			$ret['nb_uniq_vis_new']          = $nb_uniq_vis - $nb_uniq_vis_returning;
			$ret['returning_rate']           = 100 * $this->_secureDiv($nb_uniq_vis_returning , $nb_uniq_vis);
			$ret['nb_vis_per_uniq_vis']      = $this->_secureDiv($nb_vis,$nb_uniq_vis);
			$ret['nb_vis_returning_percent'] = 100 * $this->_secureDiv($nb_vis_returning , $nb_vis);
			$ret['nb_vis_new_percent']       = 100 * $this->_secureDiv($nbVisitNew ,$nb_vis );
			
			$ret['nb_vis_returning']         = $nb_vis_returning;
			$ret['nb_vis_new']               = $nbVisitNew;
			$ret['nb_pag_returning']         = $nb_pag_returning;
			$ret['nb_pag_new']               = $nbPagNew;
			
			$ret['nb_pag_returning_percent'] = 100 * $this->_secureDiv($nb_pag_returning ,$nb_pag );
			$ret['nb_pag_new_percent']       = 100 * $this->_secureDiv($nbPagNew ,$nb_pag);
			
			$ret['nb_pag_per_vis_returning'] = $this->_secureDiv($nb_pag_returning, $nb_vis_returning );
			$ret['time_per_vis_returning']   = $this->_secureDiv($sum_vis_lth_returning, $nb_vis_returning);
            $ret['time_per_pag_returning']   = $this->_secureDiv($sum_vis_lth_returning, $nb_pag_returning);
            $ret['one_page_rate_returning']  = 100 * $this->_secureDiv($nb_vis_1pag_returning,$nb_vis_returning);
            
			$ret['nb_pag_per_vis_new']       = $this->_secureDiv($nbPagNew, $nbVisitNew);
			$ret['one_page_rate_new']        = 100 * $this->_secureDiv($nbOnePagVis,$nbVisitNew);
			$ret['time_per_vis_new']         = $this->_secureDiv($totalTimeNew, $nbVisitNew);
			
			$ret['time_per_pag_new']         = $this->_secureDiv($totalTimeNew, $nbPagNew);
			
		}
		return $ret;
	}
			
	
	/**
	 * Visits
	 */

	function getVisitsStatistics()
	{
	    $ret = array();
	    
		if($this->getContent('nb_vis') != 0
			&& $this->getContent('nb_pag') != 0 )
		{
		    $nb_vis                  = $this->getContent('nb_vis');
			$nb_uniq_vis             = $this->getContent('nb_uniq_vis');
			$nb_pag                  = $this->getContent('nb_pag');
			$nb_vis_1pag             = $this->getContent('nb_vis_1pag');
			$sum_vis_lth             = $this->getContent('sum_vis_lth');
			
			$nbPagPerVisSig          = $this->_secureDiv($nb_pag - $nb_vis_1pag, $nb_vis - $nb_vis_1pag);

			$ret['nb_vis']               = $nb_vis;
			$ret['nb_uniq_vis']          = $nb_uniq_vis;
			$ret['nb_pag']               = $nb_pag;
			$ret['nb_pag_per_vis_sig']   = $nbPagPerVisSig;
			$ret['nb_pag_per_vis']      = $this->_secureDiv($nb_pag, $nb_uniq_vis);
			$ret['time_per_vis']         = $this->_secureDiv($sum_vis_lth, $nb_vis);
			$ret['time_per_pag']         = $this->_secureDiv($sum_vis_lth, $nb_pag);
			$ret['one_page_rate']        = 100 * $this->_secureDiv($nb_vis_1pag, $nb_vis);
			
		
			// for period != day
			if($this->getContent('period') != 1)
			{
				// number of days in the period
				$nbDaysInPeriod = getNumberOfDaysBetween(	$this->getContent("date1"),
															$this->getContent("date2")
												);
				
				// average visits per day in the period
				$ret['average_visits_per_day'] = $this->_secureDiv($nb_vis, $nbDaysInPeriod);
			}
		}
		return $ret;
	}
	

	function getSites()
	{
		if(!isset($this->siteInfo))
		{
			$site = new Site(1);
			$siteInfo = $site->getAllowedSites( 'view' );
			$return=array();
			foreach($siteInfo as $id => $info)
			{
				$return[] = new Site( $id );// $info['idsite'] );
			}
			//pegrint_r($return);
			$this->siteInfo = $return;
		}
		else
		{
			$return = $this->siteInfo;
		}
		return $return;
	}
		
	function getSitesArchives()
	{
		$siteInfo = $this->getSites();
		foreach($siteInfo as $id => $o_site)
		{
			$id = $o_site->getId();
			$p = $this->getArchive($o_site, $this->archive->date->get(), $this->request->getPeriod() );
			$allArchive[] = new DataModel( $p , $this->request);
		}	
		return $allArchive;
	}
	
	function getSitesSummaryStatisticsGraph()
	{
		$allSiteArchive =  $this->getSites();
		
		$i = 1;
		foreach($allSiteArchive as $id => $infoSite)
		{
			if($i < 4)
			{
				$allArchive = $this->getLastArchives( 15, 0, DATE_GRAPH, $infoSite);
				
				$data = array();
				$axis = array();
				
				$allArchive = array_reverse($allArchive, true);
				foreach($allArchive as $date => $o_archive)
				{
					$o_data = new DataModel($o_archive, $this->request);
					$data[] = $o_data->getContent('nb_vis');
					$axis[] = $date;
				} 
				
				$return['data'.$i++] = array(
					'data' => $data,
					'legend' => $infoSite->getName()
					);
			}
		}
		
		$return['axis'] = $axis;
		$return['title'] = $GLOBALS['lang']['visites_grapghrecap'];
		return $return;

	}
	
	function getSitesSummaryStatistics()
	{
		$allSiteArchive =  $this->getSitesArchives();

		foreach($allSiteArchive as $value)
		{
			$siteInfo =  $value->archive->site->a_info;
			
			$toSum['nb_vis'][] = $value->getContent('nb_vis');
			$toSum['nb_pag'][] = $value->getContent('nb_pag');
			$toSum['nb_uniq_vis'][] = $value->getContent('nb_uniq_vis');
			$toSum['sum_vis_lth'][] = $value->getContent('sum_vis_lth');
			$toSum['nb_vis_1pag'][] = $value->getContent('nb_vis_1pag');
			
			@$nbPagPerVisSig = $value->getContent('nb_pag') 
								/ ($value->getContent('nb_vis') - $value->getContent('nb_vis_1pag'));
			$return[] = array(
				'id'                => $value->archive->site->getId(),
				'site_name'         => $siteInfo['name'],
				'nb_vis'            => $value->getContent('nb_vis'),
				'nb_uniq_vis'       => $value->getContent('nb_uniq_vis'),
				'nb_pag'            => $value->getContent('nb_pag'),
				'nb_pag_per_vis_sig'=> $nbPagPerVisSig,
				'nb_pag_per_vis'    => $this->_secureDiv($value->getContent('nb_pag') ,$value->getContent('nb_uniq_vis')),
				'time_per_vis'      => $this->_secureDiv($value->getContent('sum_vis_lth') ,$value->getContent('nb_vis')),
				'time_per_pag'      => $this->_secureDiv($value->getContent('sum_vis_lth') , $value->getContent('nb_pag')),
				'one_page_rate'     => 100 * $this->_secureDiv($value->getContent('nb_vis_1pag'), $value->getContent('nb_vis'))
				);
//				print($value->getContent('sum_vis_lth')." ,".$value->getContent('nb_vis')."<br>");
		}
		
		foreach($toSum as $id => $value)
		{
			$totalSum[$id] = array_sum($value);
		}
		
		$returnTotal = array(
			'nb_vis'         => $totalSum['nb_vis'],
			'nb_pag'         => $totalSum['nb_pag'],
			'nb_pag_per_vis' => $this->_secureDiv($totalSum['nb_pag'] , $totalSum['nb_uniq_vis']) ,
			'time_per_vis'   => $this->_secureDiv($totalSum['sum_vis_lth'] ,$totalSum['nb_vis']) ,
			'one_page_rate'  => 100 * $this->_secureDiv($totalSum['nb_vis_1pag'] ,$totalSum['nb_vis'] )
			);
		
		$GLOBALS['sorting_index'] = 'nb_vis';
		uasort($return, "sortingDataInfo");
		//printdebug($return);

		return array(
			'sites_info' => $return,
			'total' => $returnTotal
			);
	}
	
	function getVisitsPeriodSummaries($nbPeriodToDisplay = 8, $dateTextType = DATE_NORMAL)
	{
		$archives = $this->getLastArchives($nbPeriodToDisplay, 0, $dateTextType);		
		
		$visitsToday = $this->getContent('nb_vis');
		$pagesToday = $this->getContent('nb_pag');

		foreach($archives as $dateToDisplay => $archive)
		{
			$info = $archive->getArchived();
			$visitsPercent = $this->getDiffPercent($visitsToday, $info['nb_vis']);
			$pagesPercent = $this->getDiffPercent($pagesToday, $info['nb_pag']);
			
			$return[] = array(
				'date'          => $dateToDisplay,
				'visits'        => $info['nb_vis'],
				'visits_percent'=> $visitsPercent,
				'pages'         => $info['nb_pag'],
				'pages_percent' => $pagesPercent
				);	
		}
		return array_reverse($return);
	}
	function getVisitsAllPeriodSummaryGraph()
	{
		if($this->archive->periodType === DB_ARCHIVES_PERIOD_YEAR)
		{
			$this->archive->periodType = DB_ARCHIVES_PERIOD_MONTH;
			$periodNb = 18;
		}
		else
		{
			if($this->archive->periodType == DB_ARCHIVES_PERIOD_MONTH)
			{
				$periodNb = sizeof( getDayOfMonthBetween( $this->archive->date->get(),
														  $this->archive->date2->get()));
				
				// case partial period, set entire month' days to see, even if they are zero
				if($periodNb < 28)
				{
					$periodNb = 28;
				}
			}
			else
			{
				$periodNb = 20;
			}
				
			// inverse for months and weeks because we take newer date
			// but for days max date is date asked
			if($this->archive->periodType == DB_ARCHIVES_PERIOD_MONTH
				|| $this->archive->periodType == DB_ARCHIVES_PERIOD_WEEK)
			{
				$this->archive->date = new Date($this->archive->date2->get());
			}
			$this->archive->periodType = DB_ARCHIVES_PERIOD_DAY;
		}
		
		// inverse period date because month now goes 
		// until date2 which is newer (idem for year using months)
		//print($this->archive->date->get());exit;
		//$this->archive->date = new Date($this->archive->date2->get());
		//var_dump($this->archive->date);
		return $this->getVisitsPeriodSummariesGraph( $periodNb , DATE_GRAPH_LONG_AXIS );
	}
	
	function getVisitsPeriodSummariesGraph($nbPeriodToDisplay = 8, $longAxisBecauseAllPeriod = DATE_GRAPH)
	{
		$info = $this->getVisitsPeriodSummaries($nbPeriodToDisplay, $longAxisBecauseAllPeriod);
		
		foreach($info as $info)
		{
			$visits[] = $info['visits']; 
			$pages[] = $info['pages'];
			$axis[] = $info['date'];
		}
		return array(
				'data1' => array(
					'data'     => $visits,
					'legend'   => $GLOBALS['lang']['visites_visites']
					),
				'data2' => array(
					'data'     => $pages,
					'legend'   => $GLOBALS['lang']['visites_pagesvues']
					),
				'axis'  => $axis,						
				'title' => $GLOBALS['lang']['visites_recap']
				);
	}
	function getVisitsTimeGraph( $name, $legend)
	{
		$data = $this->getContent($name);
		for($i = 0; $i < 24; $i++)
		{
			if(!isset($data[$i]))
			{
				$data[$i] = 0;
			}
		}
		ksort($data);
		return array(
				'data'  => $data,
				'axis'  => array_keys($data),
				'title' => $GLOBALS['lang'][$legend]
				);
	}
	function getVisitsServerTimeGraph()
	{
		return $this->getVisitsTimeGraph( 'vis_st', 'visites_graphheureserveurimg');
	}
	function getVisitsLocalTimeGraph()
	{
		return $this->getVisitsTimeGraph( 'vis_lt', 'visites_graphheurelocalimg');
	}
	
	function getVisitsTimeVisitsGraph()
	{
		$GLOBALS['timeGap'][0][1] = "30";
		$GLOBALS['timeGap'][1][0] = "30";
		$GLOBALS['timeGap'][1][1] = "60";
		$data = array_values($this->getContent('vis_lth'));

		foreach($data as $id => $value)
		{
			$axis[] = sprintf( ($id == 0 || $id == 1)
								? $GLOBALS['lang']['visites_sec']
								: $GLOBALS['lang']['visites_min'] , 
									$GLOBALS['timeGap'][$id][0].
											"-". $GLOBALS['timeGap'][$id][1] );
		}
		
		return array(
				'data' => $data,
				'axis' => $axis,
				'title' => $GLOBALS['lang']['visites_graphtempsvisitesimg']
				);
	}
	function getPagesByVisitGraph()
	{
		//$GLOBALS['timeGap'][0][1] = "30";
		//$GLOBALS['timeGap'][1][0] = "30";
		//$GLOBALS['timeGap'][1][1] = "60";
		$data = array_values($this->getContent('vis_nb_pag'));

		$axis=array();
		foreach($data as $id => $value)
		{
			$axis[] = ($id == 0) 
						? $GLOBALS['lang']['visites_unepage']
						: (($GLOBALS['pagesGap'][$id][0] != @$GLOBALS['pagesGap'][$id][1])
							? sprintf( $GLOBALS['lang']['visites_pages'], 
									$GLOBALS['pagesGap'][$id][0].
											"-". @$GLOBALS['pagesGap'][$id][1] )
							: sprintf( $GLOBALS['lang']['visites_pages'], $GLOBALS['pagesGap'][$id][1] )
							)
							;
		}
		
		return array(
				'data' => $data,
				'axis' => $axis,
				'title' => $GLOBALS['lang']['pagesvues_graphnbvisitespageimg']
				);
	}	
	
	function getVisitsFrequencyVisitsByVisitor()
	{
		$data = $this->getContent('vis_nb_vis')	;
		$maxLabel = 5;
		$s = sizeof($data);
		$maxEntries = $s > $maxLabel ? $maxLabel : $s;
		
		for($i = 1; $i <= $maxEntries; $i++)
		{
			$axis[$i-1] = ($i==1) 
							? $GLOBALS['lang']['frequence_visit']
							:  sprintf($GLOBALS['lang']['frequence_visits'], $i);
			if($i==$maxEntries)
			{
				$data2[$i-1] = array_sum( array_splice( $data, $maxEntries - 1 , $s) );
				$axis[$i-1] = '+' . $axis[ $i -1 ];
			}
			else
			{
				$data2[$i-1] = @$data[$i];
			}
		}
		
				
		return array(
				'data' => $data2,
				'axis' => $axis,
				'title' => $GLOBALS['lang']['frequence_vispervis']
				);
	}
	
	function getSourceContinentCountriesDistinct( )
	{
		return $this->sizeDetailsSaved['continentcountries'];
	}
	/**
	 * returns continent hits if no continent specified, or details of country per continent 
	 */
	
	// -1 is default because of the need of all info for map of the world computing 
	function getSourceContinentCountries($cont='', $offset = 0, $nbElementsToDisplay = -1)
	{
		$sum = array(
			$GLOBALS['lang']['eur'] => 0, 
			$GLOBALS['lang']['asi'] => 0,
			$GLOBALS['lang']['ams'] => 0, 
			$GLOBALS['lang']['amn'] => 0,
			$GLOBALS['lang']['afr'] => 0,
			$GLOBALS['lang']['oce'] => 0,
			$GLOBALS['lang']['domaines']['xx'] => 0
		);
		
		// case continent global summary, we need all countries
		
		$a = $this->getSourceCountries(0,-1);
		
		$t = sizeof($a);
		reset($a);
		
		for($i = 0; $i < $t; $i++)
		{
			//print("i $i ");			

			$key = key($a);
			
			//print("k : $key ");
			
			$value =& $a[$key];
			$continent = $GLOBALS['countryList'][substr($value['img'], 0, strpos($value['img'], '.'))][0];

			$value['continent'] = $continent;	
			
			if($continent == 'unk')
			{
				$continentLang = $GLOBALS['lang']['domaines']['xx'];
			}
			else
			{
				$continentLang = $GLOBALS['lang'][$continent];
			} 
				
			if(!empty($cont))
			{
				if($continent != $cont)
				{
				//print("conteinnt : $continent != $cont");
					unset($a[$key]);
				}
				else
				{
					next($a);
				}	
			}
			else
			{
				$sum[$continentLang] += $value['sum'];		
				next($a);
			}
		}
		
		if(!empty($cont))
		{
			$this->sizeDetailsSaved['continentcountries'] = sizeof($a);
			$toReturn = getArrayOffsetLimit($a, $offset, $nbElementsToDisplay);
			

			return $toReturn;
		}
		
		$this->sizeDetailsSaved['continentcountries'] = sizeof($sum);
		arsort($sum);
		$toReturn = $this->getContinentId(
						$this->getArraySum($sum)
						);
						
//		printDebug($toReturn);
		return $toReturn;
	}
	
	function getContinentId($a)
	{
		$return = array();
		$continentReversed = @array_flip($GLOBALS['lang']);
		
		foreach($a as $key => $value)
		{
			if(isset($continentReversed[$value['data']])) // case not "Unknown"
			{
				$value['continent'] = $continentReversed[$value['data']];
				$return[] = $value;
			}
		}
		return $return;
	}
	
	function getFollowUpZoom($category='')
	{
		return $this->getPagesDetailsZoomAll($category, array('entry', 'exit', 'singlepage'));
	}
	
	function getPagesZoom($category='')
	{
		return $this->getPagesDetailsZoomAll($category, array('sum', 'sumtime'));
	}
	
	function getPagesDetailsZoomSorted($category, $idToUseForPagesInfoToCompute)
	{
		$return = $this->getPagesDetailsZoomAll($category, array($idToUseForPagesInfoToCompute));
		
		return $return;
	}
	
	function getPageGroupIdToName($return)
	{
		$type = array(
			'page',
			'category',
			'file'
			);
		foreach($return as $data)
		{
			$toLoad[$data['type']][] = $data['data'];
		}
		
		$s = sizeof($return);
		reset($return);
		for($i = 0; $i < $s ; $i ++)
		{
			
			$data =& $return[key($return)];
			
			if($data['type'] == 'page' || $data['type'] == 'category' || $data['type'] == 'file')  
			{
				$data['data'] = $this->objects[$data['type']]->getName($data['data']);
			}
			
			next($return);
		}
		return $return;
	}
	
	function getPagesDetailsZoomAll($category, $a_infoAsked = array())
	{
		printTime('begin zoom all');
		$info = $this->getPagesDetailsZoom($category);

		if($info)
		{
			printTime('end of pages details2');
			
			if(in_array('sumtime', $a_infoAsked))
			{
				$sortedEntry = $this->getPageGroupIdToName(
										getArrayOffsetLimit($info[1], 
															0, 
															-1, 
															'a_sumtime_sort', 
															'sum', 
															$this->arraySumInfo)
						);
						
//						var_dump($sortedEntry);
				$return['sumtime'] = array(
												$info[0],
												$sortedEntry,
												$info[2]
												);
			}
			printTime('after sumtime compute');
			if(in_array('singlepage', $a_infoAsked))
			{
				$toto = getArrayOffsetLimit($info[1], 0, -1, 'a_singlepage_sort', 'singlepage', $this->arraySumInfo);
	
				$sortedEntry = $this->getPageGroupIdToName($toto
						
						);
						
				$return['singlepage'] = array(
												$info[0],
												$sortedEntry,
												$info[2]
												);
												
	//											printdebug($info[1]);
			}
			printTime('after singlepage compute');
			if(in_array('entry', $a_infoAsked))
			{
				$sortedEntry = $this->getPageGroupIdToName(
						getArrayOffsetLimit($info[1], 0, -1, 'a_entry_sort', 'entry', $this->arraySumInfo)
						);
						
				$return['entry'] = array(
												$info[0],
												$sortedEntry,
												$info[2]
												);
			}
			
			printTime('after entry compute');
			if(in_array('exit', $a_infoAsked))
			{
				//printDebug($sortedEntry);exit;
				$sortedExit = $this->getPageGroupIdToName(
						getArrayOffsetLimit($info[1], 0, -1, 'a_exit_sort', 'exit', $this->arraySumInfo)
						);
				$return['exit'] = array(
												$info[0],
												$sortedExit,
												$info[2]
												);
			}
			
			printTime('after exit compute');
			if(in_array('sum', $a_infoAsked))
			{
				$toto = getArrayOffsetLimit($info[1], 0, -1, 'a_pag_sort', 'sum', $this->arraySumInfo);
				$sortedHits = $this->getPageGroupIdToName( $toto);
				$return['sum'] = array(
												$info[0],
												$sortedHits,
												$info[2]
												);
			}
			
			printTime('end zoom all');
			return $return;
		}
	}
	
	function getPagesDetailsZoom($categoryAsked = '')
	{		
		$this->objects['category'] = new ArchiveTable('category');
		$this->objects['page'] = new ArchiveTable('page');
		$this->objects['file'] = new ArchiveTable('file');
		$this->objects['vars_name'] = new ArchiveTable('vars_name');
		$this->objects['vars_value'] = new ArchiveTable('vars_value');
		$nbVis = $this->getContent('nb_vis');
//		printDebug($all); exit;
		
		if($this->archive->periodType === DB_ARCHIVES_PERIOD_DAY)
		{
			$nbLast = 15;
		}
		else
		{
			$nbLast = 3;
		}
		$archives = $this->getLastArchives($nbLast, 1, DATE_NORMAL);		
	
		printTime('beg 1 of pages details');
		$i=0;
		
		// load "pure" pages array
		foreach($archives as $dateToDisplay => $archive)
		{
			printTime('foreach'.++$i.' of pages details');
			$o_data = new DataModel( $archive , $this->request);
			$displayInfo[] = $dateToDisplay;
			
			printTime('before uz'.$i.' of pages details');
			
			if( STORE_PAG_ARRAY_IN_FILE )
			{
				$file = INCLUDE_PATH . "/datas/archives/". $o_data->infoSerialized['idarchives'].".dat";
				if( !is_readable($file))
				{
					saveConfigFile($file, unserialize($o_data->infoSerialized['vis_pag_grp']) , 'visPagGrp');
				}
				
				if(is_readable($file))
				{
					require_once $file;
					$array = $visPagGrp;
				}
			}
			else
			{
				$visPagGrp = array();
				if(!is_null($o_data->infoSerialized['vis_pag_grp']))
				{
					$visPagGrp = $o_data->getContent('vis_pag_grp');
				}
			} 
			//var_dump($visPagGrp);exit;
			$a_all[] = $visPagGrp; 
			
			printTime('after uz'.$i.' of pages details');
			$headerInfo[] = array(
			'nb_pag' => $o_data->getContent('nb_pag'),
			'nb_uniq_pag' => $o_data->getContent('nb_uniq_pag'),
			'nb_max_pag' => $o_data->getContent('nb_max_pag')
			);
			//printDebug($headerInfo);
		}

		printTime('beg 2 of pages details');
		foreach($a_all as $j => $all)
		{
			if(empty($categoryAsked))
			{
				$a_infosDay[$j] = $all;
				$level = 0;
			}
			else
			{
				$categoryAsked = (string)$categoryAsked;
				//print("Zoom cate '$categoryAsked' <br>");
				//print($categoryAsked[2]);
				$detailsCategory = explode(">", $categoryAsked);
				//printDebug($detailsCategory);
				$level = sizeof($detailsCategory);
				
				//print("level : $level <br>");
				
				$array = $this->getPagesDetailsZoomArrayLevel($all, $level, $detailsCategory);
				
				$a_infosDay[$j] = $array;
			}
		}
		printTime('mid of pages details');
		
		// list asked category
		if($level != 0) $categoryAsked .= '>';
//		var_dump($categoryAsked);
//		var_dump($a_infosDay[0]);
		
		$return = array();
		if(is_array($a_infosDay[0]))
		{
			//var_dump($a_infosDay[0]);
			foreach($a_infosDay[0] as $currentId => $info)
			{
				// page or file or category, but not total
				if($currentId != 'p_pmv_sum' 
				&& $currentId != 'f_pmv_sum'
				)
				{
					$id = '';
					$parentId = '';
					$data ='';
					$sum = 0;
					$sumN1 = 0;
					$sumN2 = 0;
					$percentN1 = 0;
					$percentN2 = 0;
					$type = '';
					$entry = 0;
					$sumtime = 0;
					$exit = 0;
					$singlepage = 0;
					$a_vars = array();
									
					// category
					if(substr($currentId, 0, 1) === 'c')
					{
						$type = 'category';
						
						$entry = @$info['p_pmv_sum'][ARRAY_INDEX_ENTRYPAGE];
						$exit = @$info['p_pmv_sum'][ARRAY_INDEX_EXITPAGE];
						$sum = @$info['p_pmv_sum'][ARRAY_INDEX_COUNT] 
								+ @$info['f_pmv_sum'][ARRAY_INDEX_COUNT];
						$sumtime = @$info['p_pmv_sum'][ARRAY_INDEX_TIME_TOTAL];
						$singlepage = @$info['p_pmv_sum'][ARRAY_INDEX_PAGES_VISIT_ONEPAGE];
						
						$allInfoInGroup = $this->getPagesDetailsZoomArrayLevel($a_infosDay[0], 1, array($currentId));
						//var_dump($allInfoInGroup);exit;
						//$a_vars = $this->getVarIdToName($a_infosDay[0]['p_pmv_sum'][ARRAY_INDEX_VARS]);
						$a_vars = $this->getVarIdToName( @$allInfoInGroup['p_pmv_sum'][ARRAY_INDEX_VARS]);
						
						//var_dump($a_vars);
						if(isset($a_infosDay[1][$currentId]['p_pmv_sum'][ARRAY_INDEX_COUNT]))
						{
							$sumN1 = $a_infosDay[1][$currentId]['p_pmv_sum'][ARRAY_INDEX_COUNT]
								+ @$a_infosDay[1][$currentId]['f_pmv_sum'][ARRAY_INDEX_COUNT];
						}
						
						$percentN1 = $this->getDiffPercent($sum, $sumN1);
						
						if(isset($a_infosDay[2][$currentId]['p_pmv_sum'][ARRAY_INDEX_COUNT]))
						{
							$sumN2 = $a_infosDay[2][$currentId]['p_pmv_sum'][ARRAY_INDEX_COUNT]
								+ @$a_infosDay[2][$currentId]['f_pmv_sum'][ARRAY_INDEX_COUNT];
						}
						$percentN2 = $this->getDiffPercent($sum, $sumN2);
						
						$id = $categoryAsked . $currentId;
						if($level != 0) 
						{
							$parentId = substr(
									$categoryAsked,
									 0,
									  strlen($categoryAsked) -1 
									  );
						}
						else
						{
							$parentId = "root";
						}
						$data = @$info[ARRAY_INDEX_IDCATEGORY];
						
						//if($data != -1)
						//	$toLoad['category'][] = $data;
	
					}
					// pages
					else if(substr($currentId, 0, 1) === 'p')
					{
						//print("pages = ".$currentId);
						$type = 'page';
						
						//printDebug($info);
						if(!isset($info[ARRAY_INDEX_COUNT]))
						{
							$info[ARRAY_INDEX_COUNT] = 0;
						}
						$sum = @$info[ARRAY_INDEX_COUNT];
						$entry = @$info[ARRAY_INDEX_ENTRYPAGE];
						$exit = @$info[ARRAY_INDEX_EXITPAGE];
						$sumtime = @$info[ARRAY_INDEX_TIME_TOTAL];
						$singlepage = @$info[ARRAY_INDEX_PAGES_VISIT_ONEPAGE];
						
						if(isset($info[ARRAY_INDEX_VARS]))
							$a_vars = $this->getVarIdToName($info[ARRAY_INDEX_VARS]);

						// Period-1
						if(isset($a_infosDay[1][$currentId][ARRAY_INDEX_COUNT]))
						{
							$sumN1 = $a_infosDay[1][$currentId][ARRAY_INDEX_COUNT];
						}
						$percentN1 = $this->getDiffPercent($sum, $sumN1);
						
						// Period -2
						if(isset($a_infosDay[2][$currentId][ARRAY_INDEX_COUNT]))
						{
							$sumN2 = $a_infosDay[2][$currentId][ARRAY_INDEX_COUNT];
						}
						$percentN2 = $this->getDiffPercent($sum, $sumN2);
						
						// Name
						if(!isset($info[ARRAY_INDEX_IDPAGE]))
						{
							//print("Problem, please report this error message :");
							//var_dump($info);
							$data = -1;
						}
						else
						{
							$data = $info[ARRAY_INDEX_IDPAGE];
						}
						//print("$data : ".$sumtime . "<br>");
						
						
					}
					// file
					else if(substr($currentId, 0, 1) === 'f')
					{
						$type = 'file';
						$sum = $info[ARRAY_INDEX_COUNT];		
					
						// Period-1
						//print("idfile=$currentId<br>");
						if(isset($a_infosDay[1][$currentId][ARRAY_INDEX_COUNT]))
						{
							$sumN1 = $a_infosDay[1][$currentId][ARRAY_INDEX_COUNT];
						}
						$percentN1 = $this->getDiffPercent($sum, $sumN1);
						
						// Period -2
						if(isset($a_infosDay[2][$currentId][ARRAY_INDEX_COUNT]))
						{
							$sumN2 = $a_infosDay[2][$currentId][ARRAY_INDEX_COUNT];
						}
						$percentN2 = $this->getDiffPercent($sum, $sumN2);
						
						// Name
						$data = $info[ARRAY_INDEX_IDPAGE];
						
					}
					else
					{
						// this is related to the ARRAY_INDEX_IDCATEGORY
						//print("Whats that? Report it to phpmyvisites forums: ");
						//print($currentId);
					}
					
					
					if(!empty($data)
					&& !empty($type)
					&& $sum > 0
					)
					{
						$return[] = array(
							'type' => $type,
							'sum' => $sum,
							'sumn1' => $sumN1,
							'sumn2' => $sumN2,
							'percentn1' => $percentN1,
							'percentn2' => $percentN2,
							'data' => $data,
							'id' => $id,
							'parentid' => $parentId,
							'entry' => $entry,
							'exit' => $exit,
							'sumtime' => $sumtime,
							'avgtime' => round($sumtime / $sum),
							'exitrate' => 100 *  $exit / $sum,
							'singlepage' => $singlepage,
							'vars' => $a_vars
							);
					}
				}
			}
			printTime('end of pages details');
			$GLOBALS['sorting_index'] = 'sum';
	
			uasort($return, "sortingDataInfo");
			return array(
				$displayInfo,
				$return,
				$headerInfo
				);
		}
		
		return false;
		
	}
	
	// returns from the whole array $all the $detailsCategory info for the level $level
	function getPagesDetailsZoomArrayLevel(&$all, $level, $a_detailsCategory)
	{
		$array = $all;
	//	var_dump($array);
		for($i = 0; $i < $level ; $i++)
		{
			$arrayZoomed = array();
			
			// find category to detail
			if(is_array($array))
			{
				foreach($array as $id => $info)
				{
					if($id == $a_detailsCategory[$i])
					{
						$arrayZoomed = $info;
						break;
					}
				}
				$array = $arrayZoomed;
			}
		}
		return $array;
	}
	
	// returns the variables array with nameId and valueId replaced by real name and value
	function getVarIdToName($a)
	{
		$a_vars=array();
		if(is_array($a))
		{
			// browse variables name => array( Narray => (count, value), ...)
			foreach($a as $vNameId => $a_vValuesId)
			{
				$varName = $this->objects['vars_name']->getName($vNameId);
				
				// browse each of the Narray => (count, value)
				foreach($a_vValuesId as $a_idVarContent)
				{
					$a_vars[$varName][(string)$this->objects['vars_value']->getName($a_idVarContent[ARRAY_INDEX_VAR_VALUE])] = (int)$a_idVarContent[ARRAY_INDEX_VAR_COUNT] ;
				}
			}
		}
		return $a_vars;
	}

	function getSourceContinentInterest()
	{
		return $this->getContent('int_continent');			
	}

	function getSourceCountriesDistinct()
	{
		return $this->getDistinct('country');
	}
	
	function getSourceProvidersDistinct()
	{
		return $this->getDistinct('provider');
	}
	
	function getSourceCountriesGraph()
	{
		$all = $this->getSourceCountries(0, -1);
		
		foreach($all as $id => $info)
		{
			if($id < 5)
			{
				$data[] = (int)$info['sum'];
				$axis[] = $info['data'];
			
			}
			else
			{
				@$data[5] += $info['sum'];
				$axis[5] = $GLOBALS['lang']['generique_divers'];
			}
		}
			
		
		return array(
				'data' => $data,
				'axis' => $axis,
				'title' => $GLOBALS['lang']['provenance_pays']
				);
	}
	function getSourceCountries($offset = 0, $nbElementsToDisplay = NB_ELEMENTS_TO_DISPLAY)
	{
		return $this->getCountriesImg(
					$this->getArraySum(
						$this->getContent('vis_country', $offset, $nbElementsToDisplay)
			)
		);		
	}
	function getCountriesImg($a)
	{
		$return = array();
		
		if(is_array($a))
		{
			foreach($a as $id => $value)
			{
				$value['img'] = $value['data'] . ".png";
				
				// flags not in the package !
				if(!file_exists(DIR_IMG_COUNTRIES_FLAGS . "/". $value['img']))
					$value['img'] = 'xx.png';
				
					$value['data'] = $GLOBALS['lang']['domaines'][$value['data']];
				$return[$id] = $value;
			}
		}
		return $return;
	}
	
	function getSourceCountriesInterest($offset = 0, $nbElementsToDisplay = NB_ELEMENTS_TO_DISPLAY)
	{
		return $this->getCountriesImg(
					$this->getContent('int_country', $offset, $nbElementsToDisplay)
					);
	}
	
	function getSourceProviders($offset = 0, $nbElementsToDisplay = NB_ELEMENTS_TO_DISPLAY)
	{
		return $this->getProvidersNameAndUrl(
					$this->getArraySum(
						$this->getArrayIdToName(
							$this->getContent('vis_provider', $offset, $nbElementsToDisplay), 
							'provider'
							)
						)
				);
	}
	
	
	/**
	 * Settings
	 */
	
	function getSettingsConfig($offset = 0, $nbElementsToDisplay = NB_ELEMENTS_TO_DISPLAY)
	{
		$return = $this->getArraySum(
					$this->getArrayIdToName($this->getContent('vis_config', $offset, $nbElementsToDisplay), 'config')
					);		
		foreach($return as $key => $value)
		{
			$value['data'] = $this->getConfigName($value['data']);
			$return[$key] = $value;
		}
		return $return;
	}
	
	/*
	function getSettingsConfigInterest($offset = 0, $nbElementsToDisplay = NB_ELEMENTS_TO_DISPLAY)
	{
		$a = $this->getArrayIdToName($this->getContent('int_config', $offset, $nbElementsToDisplay), 'config');
		foreach($a as $key => $value)
		{
			$return[$this->getConfigName($key)] = $value;
		}
		return $this->getArrayInterestNamed($return);
	}
	*/
	function getSettingsOsDistinct()
	{
		return $this->getDistinct('os');
	}
	
	function getSettingsOs($offset = 0, $nbElementsToDisplay = NB_ELEMENTS_TO_DISPLAY)
	{
		return $this->getOsNameAndImage(
					$this->getArraySum($this->getContent('vis_os', $offset, $nbElementsToDisplay)
					)
				);
	}
	
	
	function getSettingsOsInterest($offset = 0, $nbElementsToDisplay = NB_ELEMENTS_TO_DISPLAY)
	{
		return $this->getOsNameAndImage(
					$this->getContent('int_os', $offset, $nbElementsToDisplay)
				);
	}
	
	function getSettingsBrowsersDistinct()
	{
		return $this->getDistinct('browser');
	}
	
	function getSettingsBrowsers($offset = 0, $nbElementsToDisplay = NB_ELEMENTS_TO_DISPLAY)
	{
		return $this->getBrowsersNameAndImage(
					$this->getArraySum($this->getContent('vis_browser', $offset, $nbElementsToDisplay)
					)
				);
	}
	
	function getSettingsBrowsersGraph()
	{
		$all = $this->getSettingsBrowsers(0, -1);
		
		foreach($all as $id => $info)
		{
			if($id < 5)
			{
				$data[] = (int)$info['sum'];
				$axis[] = ucfirst($GLOBALS['browsers_graph'][substr($info['img'], 0, strpos($info['img'], '.'))])
										. substr($info['data'], -strlen($info['data']) + strrpos($info['data'], ' '));
			
			}
			else
			{
				@$data[5] += $info['sum'];
				$axis[5] = $GLOBALS['lang']['generique_divers'];
			}
		}
			
		
		return array(
				'data' => $data,
				'axis' => $axis,
				'title' => $GLOBALS['lang']['configurations_navigateurs']
				);
	}
		
	function getSettingsOsGraph()
	{
		$all = $this->getSettingsOs(0, -1);
		
		foreach($all as $id => $info)
		{
			if($id < 5)
			{
				$data[] = (int)$info['sum'];
				$axis[] = ucfirst($GLOBALS['osNameToIdForGraph'][substr($info['img'], 0, strpos($info['img'], '.'))]);
			
			}
			else
			{
				@$data[5] += $info['sum'];
				$axis[5] = $GLOBALS['lang']['generique_divers'];
			}
		}
			
		
		return array(
				'data' => $data,
				'axis' => $axis,
				'title' => $GLOBALS['lang']['configurations_os']
				);
	}
	
			
	function getSettingsBrowsersTypeGraph()
	{
		$all = $this->getSettingsBrowsersType();
		
		foreach($all as $id => $info)
		{
			$data[] = (int)$info['sum'];
			$axis[] = $info['data'];
		}
			
		return array(
				'data' => $data,
				'axis' => $axis,
				'title' => $GLOBALS['lang']['configurations_navigateursbytype']
				);
	}
	function getSettingsPluginsGraph()
	{
		$all = $this->getSettingsPlugins();
		
		foreach($all as $id => $info)
		{
			$data[] = (int)$info['sum'];
			$axis[] = $info['data'];
		}
			
		return array(
				'data' => $data,
				'axis' => $axis,
				'title' => $GLOBALS['lang']['configurations_plugins']
				);
	}
	
	function getSettingsResolutionsGraph()
	{
		$all = $this->getSettingsResolutions(0, -1);
		
		foreach($all as $id => $info)
		{
			if($id < 5)
			{
				$data[] = (int)$info['sum'];
				$axis[] = $info['data'];
			
			}
			else
			{
				@$data[5] += $info['sum'];
				$axis[5] = $GLOBALS['lang']['generique_divers'];
			}
		}
			
		
		return array(
				'data' => $data,
				'axis' => $axis,
				'title' => $GLOBALS['lang']['configurations_resolutions']
				);
	}
	
	function getSettingsBrowsersInterest($offset = 0, $nbElementsToDisplay = NB_ELEMENTS_TO_DISPLAY)
	{
		return $this->getBrowsersNameAndImage(
					$this->getContent('int_browser', $offset, $nbElementsToDisplay)
				);
	}
	
	function getSettingsConfigDistinct()
	{
		return $this->getDistinct( 'config' );
	}
	
	function getSettingsBrowsersType()
	{
		$return = $this->getArraySum($this->getContent('vis_browser_type'));
		

		foreach($return as $key => $value)
		{
			$value['data'] = $GLOBALS['browsers_type_display'][$value['data']];
			$return[$key] = $value;
		}
		return $return;
	}
	
	function getSettingsResolutions($offset = 0, $nbElementsToDisplay = NB_ELEMENTS_TO_DISPLAY)
	{
		return $this->getArraySum(
					$this->getArrayIdToName(
						$this->getContent('vis_resolution', $offset, $nbElementsToDisplay), 'resolution')
						);
	}
	
	function getSettingsResolutionsDistinct()
	{
		return $this->getDistinct( 'resolution' );
	}
	
	function getSettingsResolutionsInterest($offset = 0, $nbElementsToDisplay = NB_ELEMENTS_TO_DISPLAY)
	{
		return $this->getArrayIdToName(
						$this->getContent('int_resolution', $offset, $nbElementsToDisplay)
						,'resolution'
		);
	}
	
	function getSettingsNormalWidescreen()
	{
		$return = array();
		$normal = $wide = $dual = 0;
		$a = $this->getSettingsResolutions(0, -1);
		foreach($a as $value)
		{
			$str = $value['data'];
			$operande = intval(substr($str, 0, strpos($str, 'x')));
			$terme    = intval(substr($str, strpos($str, 'x') + 1));
			$ratio = $this->_secureDiv($operande, $terme);
			
			if($ratio < 1.4)
			{
				$normal += $value['sum'];
			}
			else if($ratio < 2)
			{
				$wide += $value['sum'];
			}
			else
			{
				$dual += $value['sum'];
			}
		}
		
		if($dual!=0) $return['dual'] = $dual;
		if($wide!=0) $return['wide'] = $wide;
		if($normal!=0) $return['normal'] = $normal;

		arsort($return);
		return $this->getScreensNameAndImage(
					$this->getArraySum($return)
				);
	}
	
	function getSettingsNormalWidescreenDistinct()
	{
		return 3;
	}
	
	
	function getSettingsPlugins()
	{
		return $this->getPluginsNameAndImg(
					$this->getArraySum(
						$this->getContent('vis_plugin')
					)
				);		
	}
	
	
	function getSettingsPluginsDistinct()
	{
		return $this->getDistinct( 'plugin' );
	}
	
	/**
	 * Referers
	 */
	/*
	function getReferersGraphSummary()
	{
	}*/
	
	function getDistinct($name, $name2 = null)
	{
		if(isset($name2))
		{
			switch($name)
			{
				case 'continent':
					$t = sizeof($this->getSourceContinentCountries( $name2, 0, -1));
				break;
			}			
			
		}
		else
		{
			$t = sizeof($this->getContent('vis_'.$name));
		}
		return $t;
	}
	
	
	/*
	 * numbers
	 */
	function getReferersSearchEnginesDetailsDistinct(  )
	{
		return $this->sizeDetailsSaved['vis_search_engine'];
	}
	
	function getReferersPartnersDetailsDistinct(  )
	{
		return $this->sizeDetailsSaved['vis_partner'];
	}
	function getReferersKeywordsDetailsDistinct(  )
	{
		return $this->sizeDetailsSaved['vis_keyword'];
	}
	function getReferersSitesDetailsDistinct(  )
	{
		return $this->sizeDetailsSaved['vis_site'];
	}
	function getReferersKeywordsDistinct( )
	{
		return $this->getDistinct( 'keyword');
	}
	function getReferersNewslettersDistinct()
	{
		return $this->getDistinct( 'newsletter');
	}
	function getSettingsBrowsersTypeDistinct()
	{
		return 4;
	}
	function getReferersSearchEnginesDistinct( )
	{
		return $this->getDistinct( 'search_engine');
	}
	function getReferersPartnersDistinct()
	{
		return $this->getDistinct( 'partner');
	}
	function getReferersSitesDistinct( )
	{
		return $this->getDistinct( 'site');
	}
	
	function getReferersNbSearchEngines()
	{
		return $this->getContent('nb_search_engine');
	}
	function getReferersNbSites()
	{
		return $this->getContent('nb_site');
	}
	function getReferersNbDirect()
	{
		return $this->getContent('nb_direct');
	}
	function getReferersNbPartners()
	{
		return $this->getContent('nb_partner');
	}

	function getReferersNbNewsletters()
	{
		return $this->getContent('nb_newsletter');
	}
	
	function getReferersSummaryGraph()
	{
		$data = array(
			$GLOBALS['lang']['affluents_moteursimg'] => $this->getReferersNbSearchEngines(),
			$GLOBALS['lang']['affluents_sitesimg'] => $this->getReferersNbSites(),
			$GLOBALS['lang']['affluents_newslettersimg'] => $this->getReferersNbNewsletters(),
			$GLOBALS['lang']['affluents_partenairesimg'] => $this->getReferersNbPartners(),
			$GLOBALS['lang']['affluents_directimg'] => $this->getReferersNbDirect(),		
		);
		
		arsort($data);
		
		foreach($data as $label => $value)
		{
			if($value != 0)
			{
				$return['data'][] = $value;
				$return['axis'][] = $label;
			}
		}
		$return['title'] = $GLOBALS['lang']['affluents_referrersimg'];

		return $return;
	}
	/*
	 * arrays
	 */
	function getReferersSearchEngines($offset = 0, $nbElementsToDisplay = NB_ELEMENTS_TO_DISPLAY)
	{
		return $this->getSearchEnginesUrlAndImg(
					$this->getArrayPmvSum(
						$this->getArrayIdToName(
							$this->getContent('vis_search_engine', $offset, $nbElementsToDisplay)
							, 'search_engine'),
						$this->getReferersNbSearchEngines()
						)
				//	)
					)
				;		
	}
	
	function getReferersSearchEnginesInterest($offset = 0, $nbElementsToDisplay = NB_ELEMENTS_TO_DISPLAY)
	{
		return $this->getSearchEnginesUrlAndImg(
						$this->getArrayIdToName(
							$this->getContent('int_search_engine', 
											$offset, 
											$nbElementsToDisplay), 
										'search_engine')
			);
	}
	
	
	function getReferersSearchEnginesDetails($id, $offset = 0, $nbElementsToDisplay = NB_ELEMENTS_TO_DISPLAY)
	{
		$this->idDetailsSaved['vis_search_engine'] = $id;
		//printTime('before', true);
		$test =	$this->getContent('vis_search_engine');
		//printTime('after1', true);
		$return = 	$this->getArrayDetail( $test,				$id, 
						'keyword',
						$offset,
						$nbElementsToDisplay
					);	
	//	printTime('after2', true);
		return $return;
	}
	
	function getReferersKeywords($offset = 0, $nbElementsToDisplay = NB_ELEMENTS_TO_DISPLAY)
	{
		return $this->getKeywordDecode(
					$this->getArrayPmvSum(
						$this->getArrayIdToName(
							$this->getContent('vis_keyword', $offset, $nbElementsToDisplay), 
							'keyword'),
						$this->getReferersNbSearchEngines()
						)
					);
	}
	
	function getReferersKeywordsInterest($offset = 0, $nbElementsToDisplay = NB_ELEMENTS_TO_DISPLAY)
	{
		return $this->getKeywordDecode(
						$this->getArrayIdToName(
							$this->getContent('int_keyword', $offset, $nbElementsToDisplay), 'keyword')
				);
	}
	
	function getReferersKeywordsDetails($id, $offset = 0, $nbElementsToDisplay = NB_ELEMENTS_TO_DISPLAY)
	{
		
		$this->idDetailsSaved['vis_keyword'] = $id;
		return $this->getSearchEnginesUrlAndImg(
					$this->getArrayDetail(
						$this->getContent('vis_keyword'), 
						$id, 
						'search_engine',
						$offset,
						$nbElementsToDisplay
					)
				);
	}
	
	function getReferersSites($offset = 0, $nbElementsToDisplay = NB_ELEMENTS_TO_DISPLAY)
	{
		return $this->getArrayPmvSum(
					$this->getArrayIdToName(
						$this->getContent('vis_site', $offset, $nbElementsToDisplay), 
						'site'),
					$this->getReferersNbSites()
				);
	}

	function getReferersSitesInterest($offset = 0, $nbElementsToDisplay = NB_ELEMENTS_TO_DISPLAY)
	{
		return	$this->getArrayIdToName(
						$this->getContent('int_site', $offset, $nbElementsToDisplay), 'site');
	}
	
	function getReferersSitesDetails($id, $offset = 0, $nbElementsToDisplay = NB_ELEMENTS_TO_DISPLAY)
	{
		$this->idDetailsSaved['vis_site'] = $id;
		$a = $this->getArrayDetail(
						$this->getContent('vis_site'), 
						$id, 
						'site',
						$offset,
						$nbElementsToDisplay
						);
		return $this->getSitesDetailsUrl(
					$a
				);
	}
	function getSitesDetailsUrl( &$a )
	{
		foreach($a as $key => $value)
		{
			$value['url'] = $value['data'];
			$a[$key] = $value;
		}
		return $a;
	}
	
	
	function getReferersPartners($offset = 0, $nbElementsToDisplay = NB_ELEMENTS_TO_DISPLAY)
	{
		return $this->getArrayPmvSum(
					$this->getArrayIdToName($this->getContent('vis_partner', $offset, $nbElementsToDisplay), 
					'partner_name'),
					$this->getReferersNbPartners()
				);		
	}
	function getReferersPartnersInterest($offset = 0, $nbElementsToDisplay = NB_ELEMENTS_TO_DISPLAY)
	{
		return 	$this->getArrayIdToName(
					$this->getContent('int_partner', $offset, $nbElementsToDisplay), 
					'partner_name');
	}	
	function getReferersPartnersDetails($id, $offset = 0, $nbElementsToDisplay = NB_ELEMENTS_TO_DISPLAY)
	{
		
		$this->idDetailsSaved['vis_partner'] = $id;
		return $this->getSitesDetailsUrl(
					$this->getArrayDetail(
						$this->getContent('vis_partner'), 
						$id, 
						'partner_url',
						$offset,
						$nbElementsToDisplay
					)
				);
	}
	
	function getReferersNewsletters($offset = 0, $nbElementsToDisplay = NB_ELEMENTS_TO_DISPLAY)
	{
		$return = array();
		$nlInfo = $this->getContent('vis_newsletter', $offset, $nbElementsToDisplay);
		$nlName = new ArchiveTable( 'newsletter' );	
		$totalNl = $this->getReferersNewslettersDistinct();
		$totalNlHits = $this->getReferersNbNewsletters();
		
		if($totalNl != 0)
		{
			foreach($nlInfo as $key => $hits)
			{
				// compatibility < beta3
				if(is_array($hits)) $hits=1;
				$return[] = array(
					'data' => $nlName->getName( $key ),
					'sum' => $hits,
					'percent' => round(100 * $hits / $totalNlHits,3)
					);
			}
		}		
		return $return;	
	}
	
	
	function getReferersNewslettersInterest($offset = 0, $nbElementsToDisplay = NB_ELEMENTS_TO_DISPLAY)
	{
		return 	$this->getArrayIdToName(
							$this->getContent('int_newsletter', $offset, $nbElementsToDisplay), 'newsletter');
	}	
	
	function getReferersTypeDistinct()
	{
		return 7;//sizeof($this->getReferersTypeInterest());
	}
	
	function getReferersTypeInterest()
	{
		$a = $this->getContent('int_referer_type');
		//var_dump($a);exit;
		$return2 = array();
		$convert = array(
				REF_TYPE_SEARCH_ENGINE => 'affluents_moteurs',
				REF_TYPE_SITE =>'affluents_sitesinternet',
				REF_TYPE_PARTNER =>'affluents_partenaires',
				REF_TYPE_NEWSLETTER =>'affluents_newsletters',
				REF_TYPE_DIRECT_ENTRY =>'affluents_entreedirecte'
		);
		foreach($a as $key => $value)
		{
			if(sizeof($value) != 0)
			{
				$value['data'] = $GLOBALS['lang'][$convert[$key]];
				$return2[] = $value; 
			}
		}
		return $return2;
	}

	function addPercent( $nb, $total)
	{
	    $calc = 100 * $this->_secureDiv($nb, $total);
		return "<strong> $nb </strong> <small>(". round($calc) . "%)</small>";
	}
	
	function getReferersNumbers()
	{
	    $ret = array();
	    
		if($this->getContent('nb_vis') != 0)
		{
			$a = array(
					'visits'           => $this->getContent('nb_vis'),
					'searchengines'    => $this->getReferersNbSearchEngines(),
					'keywords'         => $this->getReferersKeywordsDistinct(),
					'sites'            => $this->getReferersNbSites(),
					'distinctsites'    => $this->getReferersSitesDistinct(),
					'partners'         => $this->getReferersNbPartners(),
					'newsletters'      => $this->getReferersNbNewsletters(),
					'direct'           => $this->getReferersNbDirect(),

					);
					
			foreach($a as $key => $value)
			{
				if($key != 'distinctsites' && $key != 'keywords')
				{
					$a2[$key] = $this->addPercent( $value, $this->getContent('nb_vis'));
				}
			}
			
			$ret =  array_merge($a, $a2);
		}
		return $ret;
	}
	/*
	 * Process functions
	 */
	function getArrayDetail($a, $id, $table, $offset = 0, $nbElementsToDisplay = NB_ELEMENTS_TO_DISPLAY)
	{
		$return = array();
		foreach($a as $key => $value)
		{
			if($key == $id)
			{
//				printTime('1', true);
				$sum = $value['pmv_sum'];
				unset($value['pmv_sum']);
				$a2 = $this->getArrayIdToName(
							getArrayOffsetLimit($value, $offset, $nbElementsToDisplay), 
					$table
					);
			//	printDebug($a2);
	
	//			printTime('2', true);
				foreach($a2 as $name => $hits)
				{
					if($table === 'keyword')
					{
						$name = urldecode($name);
					}
					$return[] = array(
						'data' => $name,
						'sum' => $hits,
						'percent' => 100 * $this->_secureDiv($hits, $sum)
						);
				}
		//		printTime('3', true);
				break;
			}
		}
//		printTime('4', true);
		//printDebug($return);
		usort($return, "sortingDataInfo");
//		printTime('5', true);
		return $return;
	}
	function getArrayIdToName($a, $table)
	{
		$return = array();
		if(is_array($a) && sizeof($a) != 0)
		{
			if(!isset($this->objects[$table]))
			{
				$this->objects[$table] = new ArchiveTable($table);
			}
			$this->objects[$table]->loadName(array_keys($a));
			
			foreach($a as $id => $value)
			{
				// case when all table with details for each key
				if(is_array($value))
				{
					$value['id'] = $id;
				}
				// else we only have hits number, don't do anything
				$name = $this->objects[$table]->getName($id);
				
				//printDebug("id ".$id);
				//printDebug("name ".$name);
				//printDebug("value ".$value);
				
				// héhé... :-D
				if(is_array($value))
				{
					$value['data'] = $name;
				}
				$return[$name] = $value;
			}
		}
		return $return;
	}
	
	function getArraySum($a, $max = 0)
	{
		if($max === 0) 
		{
			$max = $this->getContent('nb_vis');
		}
		
		$return = array();
		
		if($max == 0) return $return;
		
		foreach($a as $key => $value)
		{
			if($value != 0)
			{
				$return[] = array(
				'sum' =>$value,
				'percent' => 100 * $this->_secureDiv($value, $max),
				'data' => $key
				);
			}
		}
		
		return $return;
	}
	
	function getArrayPmvSum($a, $max = 0)
	{
		if($max === 0) 
		{
			$max = $this->getContent('nb_vis');
		}
		$return = array();
		foreach($a as $key => $value)
		{
			$return[] = array(
			'sum' =>$value['pmv_sum'],
			'percent' => 100 * $this->_secureDiv($value['pmv_sum'] , $max),
			'data' => $key,
			'id' => $value['id']
			);
		}
//		print("sort here<br>");
				
		$GLOBALS['sorting_index'] = 'sum';
		$GLOBALS['sorting_order'] = 'desc';
		usort($return, "sortingDataInfo");
		
		return $return;
	}
	
	
	function getInterestValues($s, $sumpage, $onepage, $sumtime, $data)
	{
		// pages per visit
		$pv = $this->_secureDiv($sumpage ,$s); 
		
		// pages per significativ visit 
		if($s != $onepage)
		{
			$psv = $this->_secureDiv(($sumpage - $onepage) , ($s - $onepage));
		}
		else
		{
			$psv = 0;
		}
		// 1 page visit rate
		$opr =  $this->_secureDiv($onepage ,$s);
		// time spent per visit
		$vl = round( $this->_secureDiv($sumtime , $s ));
		/*
		printDebug("<br>hits $s<br>");
		printDebug("pages per visit $pv<br>" );
		printDebug("pages per significativ visit $psv<br>" );
		printDebug("1 page visit rate $opr<br>" );
		printDebug("time spent per visit $vl<br>" );	
		*/
		return array( 
						'sum' => $s,
						'page_per_visit' => $pv, 
						'page_per_visit_significant' => $psv, 
						'one_page_rate' => $opr * 100, 
						'time_per_visit' => strftime("%H:%M:%S", $vl+82800),
						'data' => $data
		);	
	}
	
	function getArrayInterestNamed($a)
	{
		$return = array();
		
		if(is_array($a))
		{
			foreach($a as $key => $value)
			{
				if(is_array($value) && sizeof($value) == 4)
				{
					$return[$key] = $this->getInterestValues(
										$value[0],
										$value[1], 
										$value[2], 
										$value[3],
										$key
								);
				}
			}
		}		
		return $return;
	}
	
	function getKeywordDecode($return)
	{
		$return2 = array();
		foreach($return as $value)
		{
			$value['data'] = urldecode($value['data']);
			$return2[] = $value;
		}
		return $return2;
	}	
	
	function getBrowserName($str)
	{
		return ucwords(
						$GLOBALS['browsers_reverse'][
												substr($str, 0, strpos($str, ';'))
													]); 
	}
	
	function getBrowserVersion($str)
	{
		return substr($str, strpos($str, ';') + 1);
	}
	
	function getConfigName($str)
	{
		$os = substr($str, 0, strpos($str, ';'));
		
		$browser = substr(substr($str, strlen($os)+1), 0, 
		strrpos(substr($str, strlen($os)+1), ';'));
		
		$resolution = substr($str, strrpos($str, ';') + 1);
		$str = $GLOBALS['osIdToName'][$os];
		$str .= " / ";
		$str .= ucwords($GLOBALS['browsers_reverse'][$browser]);
		$str .= " / "; 
		$str .= $resolution;
		return $str;
	}
		
	function getProvidersNameAndUrl($return)
	{	
		foreach($return as $key => $value)
		{
			if($value['data'] === 'Ip')
			{
				$value['url'] = "http://www.phpmyvisites.us/";
				$value['data'] = "Ip";
			}
			else
			{
				$value['url'] = "http://www.".$value['data']."/";
				$value['data'] = ucfirst(substr($value['data'], 0, strpos($value['data'], '.')));
			}
			$return[$key] = $value;
		}
		return $return;
	}
	

	function getPluginsNameAndImg($return)
	{
		foreach($return as $key => $value)
		{
			$value['img'] = substr($value['data'], 0, 3) . ".png";
			$value['data'] = ucwords($value['data']);
			$return[$key] = $value;
		}
		return $return;
	}
	function getOsNameAndImage($return)
	{	
		foreach($return as $key => $value)
		{
			$value['img'] = $value['data'] . ".png";
			$value['data'] = $GLOBALS['osIdToName'][$value['data']];
			$return[$key] = $value;
		}
		return $return;
	}

	function getSearchEnginesUrlAndImg($return)
	{
		foreach($GLOBALS['searchEngines'] as $url => $value)
		{
			$searchEnginesReversed[$value[0]] = $url;
		}
		
		$return2 = array();
		foreach($return as $value)
		{
			$value['url'] = @$searchEnginesReversed[$value['data']];
			
			$img = $value['url'];
			$imgUrlP = DIR_IMG_SEARCH_ENGINES . "/" .  $img  . ".png";
			
			$value['img'] = is_file( $imgUrlP ) 
							? $img . ".png"
							: 'xx.gif';

			$value['url'] = 'http://' . $value['url'];				
							
			$return2[] = $value;
		}
		return $return2;
	}

	function getBrowsersNameAndImage($return)
	{		
		foreach($return as $key => $value)
		{
			$prefix = substr($value['data'], 0, strpos($value['data'], ';'));
			if($prefix != 'unk')
			{
				$value['img'] = $prefix. ".png";
			}
			else
			{
				$value['img'] = 'unk.gif';
			}
			$value['data'] = $this->getBrowserName($value['data']) ." ".$this->getBrowserVersion($value['data']);
			$return[$key] = $value;
		}
		return $return;
	}
	
	function getScreensNameAndImage($return)
	{		
		foreach($return as $key => $value)
		{
			$value['img'] = $value['data'] . ".png";
			switch($value['data'])
			{
				case 'dual':
					$txt = $GLOBALS['lang']['configurations_double'];
				break;
				case 'wide':
					$txt = $GLOBALS['lang']['configurations_large'];
				break;
				case 'normal':
					$txt = $GLOBALS['lang']['configurations_normal'];
				break;
			}
			$value['data'] = $txt;
			$return[$key] = $value;
		}
		return $return;
	}
	// nb1 = base
	// nb2 / nb1 ?
	function getDiffPercent($nb1, $nb2)
	{
		if($nb2 == 0)
		{
			return "+ 1000%";
		}
		if($nb2 <= $nb1)
		{
			$percent = ($nb1/$nb2) * 100 - 100;
			$percent>PERCENT_MAX?$percent=PERCENT_MAX:'';
			
			$str = "+";
		}
		else
		{
			$percent = (( $nb2 - $nb1) / $nb2) * 100;
			$percent>PERCENT_MAX?$percent=PERCENT_MAX:'';
			
			$str = "-";
		}
		return $str . " " .round($percent)."%";
	}

	function getLastArchives($n, $boolOnlyGetPeriodNMinus=0, $dateTextType = DATE_NORMAL, $o_site = false)
	{
		//var_dump($this->archive->date->get());
		
		$date = new Date( $this->archive->date->get() );
		//var_dump($date->get());
		if($o_site)
		{
			$o_siteToUse = $o_site;
		}
		else
		{
			$o_siteToUse = $this->archive->site;
		}
		
		$toArchive = array();
		switch($this->archive->periodType)
		{
			case DB_ARCHIVES_PERIOD_DAY:
				$ts = $date->getTimestamp() + 86400;
				while(sizeof($toArchive) < $n)
				{
					$toArchive[] = getDateFromTimestamp( $ts -= 86400);
				}
				$typeDateDisplay = 2;
				$typeDateDisplayGraph = 8;
				$typeDateDisplayGraphLongAxis = 13;
				
				// only take N - x, only for page views comparisons
				if($boolOnlyGetPeriodNMinus===1)
				{
					$date0 = $toArchive[0];
					$date1 = $toArchive[7];
					$date2 = $toArchive[14];
					unset($toArchive);
					$toArchive[] = $date0;
					$toArchive[] = $date1;
					$toArchive[] = $date2;
					$typeDateDisplay = 7;
					//print("date1 $date1 date2 $date2 ");
				}
			break;
				
			case DB_ARCHIVES_PERIOD_WEEK:
				$ts = $date->getTimestamp();
				$ts += 86400*7;
				while(sizeof($toArchive) < $n)
				{
					$toArchive[] = getDateFromTimestamp( $ts-=86400*7);
				}
				$typeDateDisplay = 6;
				$typeDateDisplayGraph = 6;
				$typeDateDisplayGraphLongAxis = 13;

			break;
				
			case DB_ARCHIVES_PERIOD_MONTH:
				$s_date1 = getDateFromTimestamp(
									mktime(23, 59, 59, 
									$date->getMonth() - $n % 12, 
									15, 
									$date->getYear() - floor($n/12))
				);
				$s_date2 = $date->get();
				
				$toArchive = array_reverse(getDayOfMonthBetween($s_date1, $s_date2));
				
				$typeDateDisplay = 5;
				$typeDateDisplayGraph = 10;
				$typeDateDisplayGraphLongAxis = 10;
				
			break;
				
			case DB_ARCHIVES_PERIOD_YEAR:
				for($i = 0; $i < $n; $i++)
				{
					$a = $date->getYear()-$i;
					$toArchive[] = $a."-01-01";
				}
				
				$typeDateDisplay = 11;
				$typeDateDisplayGraph = 12;
			break;
		}
		
		//var_dump($this->archive->date->get());
		
		$return = array();
		foreach($toArchive as $dateToArchive)
		{
			//print("boucle :");
			
			// if day, and IF current date asked is today, then take current archive
			if(
				   $dateToArchive == $this->archive->date->get() 
				&& $this->archive->periodType === DB_ARCHIVES_PERIOD_DAY
				&& $o_siteToUse->getId() === $this->archive->site->getId()
			)
			{
				$a = $this->archive; // erreur possible ici ?
			}
			else
			{
				$a = $this->getArchive(	$o_siteToUse,
										$dateToArchive, 
										$this->archive->periodType
										);						
			}
			
			if($dateTextType == DATE_GRAPH)
			{
				$dateToDisplay = getDateDisplay($typeDateDisplayGraph, new Date($dateToArchive));

				$dateComputed  = getDateDisplay($typeDateDisplayGraph, $a->date);
			}
			else if($dateTextType == DATE_NORMAL)
			{
				$dateToDisplay = getDateDisplay($typeDateDisplay, new Date($dateToArchive));
				$dateComputed  = getDateDisplay($typeDateDisplay, $a->date);
			}
			else if($dateTextType == DATE_GRAPH_LONG_AXIS)
			{
				$dateToDisplay = getDateDisplay($typeDateDisplayGraphLongAxis, new Date($dateToArchive));
				$dateComputed  = getDateDisplay($typeDateDisplayGraphLongAxis, $a->date);
			}
			
			if($this->archive->periodType === DB_ARCHIVES_PERIOD_WEEK)
			{
				$firstDayOfWeek = new Date(getFirstDayOfWeek(new Date($dateToArchive)));
				$minDay = $o_siteToUse->getMinDay();
				if($firstDayOfWeek->getTimestamp() >= $minDay->getTimestamp())
				{
					$dateToDisplay = getDateDisplay($typeDateDisplay, 
									$firstDayOfWeek
									);
				}
			}
			
			if($dateComputed == $dateToDisplay)
			{
//				print("$dateToDisplay is correctly computed ($dateComputed)<br>");
				$return[$dateComputed] = $a;
			
			}
			else
			{
//				print("$dateToDisplay is not correctly computed ($dateComputed) ==> empty archive<br>");
				$return[$dateToDisplay] = 
					$this->getEmptyArchive(	$o_siteToUse,
											$dateToArchive, 
											$this->archive->periodType
											);
			}
		}
		//print("\n\n");exit;
		return $return;
	}
	
	function getVisitsSummaryRss()
	{
		
		
		return array(
			'site' => '');
	}
	
	function getArchive($site, $s_date, $type)
	{
		switch($type)
		{
			case DB_ARCHIVES_PERIOD_DAY:
			$p = new ArchiveDay($site, $s_date);
			break;
			
			case DB_ARCHIVES_PERIOD_MONTH:
			$p = new ArchiveMonth($site, $s_date); 
			break;
			
			case DB_ARCHIVES_PERIOD_WEEK:
			$p = new ArchiveWeek($site, $s_date);
			break;
			
			case DB_ARCHIVES_PERIOD_YEAR:
			$p = new ArchiveYear($site, $s_date);
			break;
		}
		return $p;
	}
	
	function getEmptyArchive($site, $s_date, $type)
	{
		return new ArchiveEmpty($site, $s_date, $type);
	}
	
	function _secureDiv($operande, $terme)
	{
	    if ( is_numeric($operande) && is_numeric($terme) && intval($terme) != 0)
		{ 
			return $operande / $terme;
		}   
		return 0;
	}
}
