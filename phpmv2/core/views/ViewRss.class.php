<?php
/* 
 * phpMyVisites : website statistics and audience measurements
 * Copyright (C) 2002 - 2006
 * http://www.phpmyvisites.net/ 
 * phpMyVisites is free software (license GNU/GPL)
 * Authors : phpMyVisites team
*/

// $Id: ViewRss.class.php 77 2006-09-14 10:31:19Z matthieu_ $

require_once INCLUDE_PATH."/core/include/ViewModule.class.php";
require_once INCLUDE_PATH."/core/include/PmvConfig.class.php";
require_once INCLUDE_PATH."/libs/Cache/Lite.php";
require_once INCLUDE_PATH."/core/views/ViewVisitsRss.class.php";
require_once INCLUDE_PATH."/libs/Xml/Serializer.php";

class ViewRss extends ViewModule
{
	function ViewRss(  )
	{
		parent::ViewModule( '' );
	}
	
	function showAll()
	{	
		
		$allSiteArchive =  DataModel::getSites();
		$uniqCacheId = md5(serialize($allSiteArchive).date("Y-m-d").serialize($_GET)) . '.rss';

		// Set a few options
		$options = array(
		    'cacheDir' => DIR_CACHE_RSS,
		    'lifeTime' => CACHE_RSS_LIFETIME
		);
		
		
		// Create a Cache_Lite object
		$Cache_Lite = new Cache_Lite($options);
		
		if(time() % 500 === 0)
		{
			$Cache_Lite->clean();
		}
		
		// Test if thereis a valide cache for this id
		if (SMARTY_DEBUG 
			|| (!$allData = $Cache_Lite->get($uniqCacheId)) 
			) 
		{
			
			$dataTmp = $this->data;
			
			$o_config =& PmvConfig::getInstance();
			
			$allItems = array();
			
			foreach($allSiteArchive as $id => $infoSite)
			{
				$allArchives = $dataTmp->getLastArchives(NB_DAYS_FOR_RSS_ITEMS, 0, DATE_NORMAL, $infoSite);

				$i = 0;
				foreach($allArchives as $date => $o_archive)
				{
					//var_dump($date);
					$this->request->setDate( $o_archive->date->get() );
					$this->request->setModuleName( 'view_visits_rss' );
					
					$o_mod = new ViewVisitsRss($infoSite);
					$o_mod->init($this->request, $this->tpl, $o_archive);
										
					//var_dump($o_mod->data->archive->date->get());
					$rssContent = $o_mod->showAll( true );
					
					$dateRss = date("r", time() - 100 * $i++ - 10 * $id);
					$item['pubDate'] = $dateRss;
				    
					$url =  PHPMV_URL . "/?site=".$infoSite->getId()."&mod=view_visits&date=".$o_archive->date->get();
				    $item['guid'] = $url;//"http://www.phpmyvisites.us/".md5($dateRss);
					$item['link'] = $url;
					
				    $item['title'] = vsprintf($GLOBALS['lang']['rss_titre'], array($infoSite->getName(), $date));
					
					$rssContent = $item['title'] . $rssContent;
					$item['author'] = "phpmyvisites@gmail.com (phpMyVisites)";
					$item['date_ts'] = time() - 10 * $id ;
					$item['description'] = $rssContent;
					$item['date_ts'] = $o_archive->date->getTimestamp();
		
					$allItems[] = $item;
					$urls[] = $url;
				}
			}
			$GLOBALS['sorting_index'] = 'date_ts';
			uasort($allItems, "sortingDataInfo");
			
			$channel['title'] = "phpMyVisites stats by RSS";
			$channel['link'] = "http://www.phpmyvisites.us";
			$channel['description'] = "Enjoy phpmyvisites power ! :)";
			$channel['pubDate'] = date("r");
			$channel['generator'] = "phpMyVisites";
			$channel['language'] = $GLOBALS['lang']['lang_iso'];
			$channel['lastBuildDate'] = date("r");
			
			foreach($allItems as $chan)
			{
				unset($chan['date_ts']);
				$channel[] = $chan;
			}
			$rss = array('channel' => $channel);
			
			
			// An array of serializer options
			$serializer_options = array (
			    'addDecl' => TRUE,
			    'encoding' => 'UTF-8',
			    'indent' => '  ',
			    'rootName' => 'rss',
			    'defaultTagName' => 'item',
			    'rootAttributes' => array ( 'version' => '2.0'),
			);
			
			$Serializer = &new XML_Serializer($serializer_options);
			// Serialize the data structure
			
			$Serializer->setOption("keyAttribute", "rdf:about");
			
			$status = $Serializer->serialize($rss);
			
			$allData =  $Serializer->getSerializedData();
		
			$Cache_Lite->save($allData);
		
		}
		
		$this->displayRss($allData);
	}
	
	function displayRss(&$data)
	{
		// Display the XML document
		header('Content-type: text/xml');
		print($data);
		exit;
	}
}
?>
