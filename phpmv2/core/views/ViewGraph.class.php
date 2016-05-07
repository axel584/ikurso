<?php
/* 
 * phpMyVisites : website statistics and audience measurements
 * Copyright (C) 2002 - 2006
 * http://www.phpmyvisites.net/ 
 * phpMyVisites is free software (license GNU/GPL)
 * Authors : phpMyVisites team
*/

// $Id: ViewGraph.class.php 39 2006-08-20 18:02:29Z cmil $


require_once INCLUDE_PATH."/core/include/ViewModule.class.php";

class ViewGraph extends ViewModule
{
	var $graph;
	var $graph_type;
	var $graph_data;
	
	function ViewGraph()
	{
		$this->width = 0;
		$this->height = 0;
		$this->showLabelBar2 = true;
	}

    /**
     * module initialization tasks
     *
     * @param object $request
     * @param object $tpl Template instance
     * 
     * @return void
     */
    function init(&$request, $tpl = null, $o_archive = null, $p_graphType = null, $p_graphdata = null) {
	    ViewModule::init($request, $tpl, $o_archive);

		if ($p_graphType == null) {
		    $this->graph_type = Request::getGraphType();
	    }
	    else {
		    $this->graph_type = $p_graphType;
	    }
	    if ($p_graphdata == null) {
		    $this->graph_data = Request::getGraphData();
	    }
	    else {
		    $this->graph_data = $p_graphdata;
	    }
    }
		
	function graphFactory()
	{
		/*		
		(1) barres verticales + courbe
		(2) barres verticales simples
		(3) camembert 3D 
		(4) camembert 2D à plat
		(5) barres verticales splittées en 2 valeurs
		(6) graphique a barres verticales avec plusieurs profondeurs
		*/
		
		$graphAsked = $this->graph_type; //Request::getGraphType();
		switch($graphAsked)
		{
			case 1:
				require_once INCLUDE_PATH."/core/include/graphs/GraphBarAndCurb.class.php";
				$graph = new GraphBarAndCurb($this->width == 0 ? 580 : $this->width, 
										$this->height == 0 ? 250 : $this->height,
										$this->showLabelBar2
										);
			break;
			
			case 2:
				require_once INCLUDE_PATH."/core/include/graphs/GraphVerticalBar.class.php";
				$graph = new GraphVerticalBar($this->width == 0 ? 500 : $this->width, 
										$this->height == 0 ? 230 : $this->height
										);
			break;
			
			case 3:
				require_once INCLUDE_PATH."/core/include/graphs/Graph3DPie.class.php";
				$graph = new Graph3DPie($this->width == 0 ? 400 : $this->width, 
										$this->height == 0 ? 250 : $this->height
										);
			break;
			
			case 4:
				require_once INCLUDE_PATH."/core/include/graphs/Graph3DPie.class.php";
				$graph = new Graph3DPie($this->width == 0 ? 400 : $this->width, 
										280,
										false
										);
			break;
			
			case 5:
				require_once INCLUDE_PATH."/core/include/graphs/GraphSplitBar.class.php";
				$graph = new GraphSplitBar($this->width == 0 ? 600 : $this->width, 
										$this->height == 0 ? 250 : $this->height,
										$this->showLabelBar2);
			break;
			
			default:
				exit();
			break;
		}
		return $graph;
	}
	
	function moduleDataFactory()
	{
		$dataAsked = $this->graph_data; // Request::getGraphData();
		switch($dataAsked)
		{
			/**
			 * Visits
			 */
			case 'visits_period_summaries':
				$data = $this->data->getVisitsPeriodSummariesGraph();
				
				if($this->data->archive->periodType == DB_ARCHIVES_PERIOD_WEEK)
				{
					$data['interval'] = true;
				}
				else
				{
					$data['interval'] = false;
				}
			break;
			case 'visits_server_time':
				$data = $this->data->getVisitsServerTimeGraph();
			break;
			case 'visits_local_time':
				$data = $this->data->getVisitsLocalTimeGraph();
			break;
			case 'visits_time':
				$data = $this->data->getVisitsTimeVisitsGraph();
			break;
			
			case 'visits_all_period_summary':
				$data = $this->data->getVisitsAllPeriodSummaryGraph();
				$data['title'] = $GLOBALS['lang']['visites_longterm_statd'];
				$this->width = 680;
				if($this->data->archive->periodType==DB_ARCHIVES_PERIOD_MONTH)
				{
					$data['title'] = $GLOBALS['lang']['visites_longterm_statm'];
					$data['interval'] = true;
					$this->width += 100;
				}
			break;
			
			/**
			 * Pages
			 */
			case 'pages_by_visit':
				$this->width = 640;
				$data = $this->data->getPagesByVisitGraph();
			break;
			
			/**
			 * Frequency
			 */
			case 'visits_by_visitor':
				$data = $this->data->getVisitsFrequencyVisitsByVisitor();
			break;
			
			case 'frequency_new_vs_returning':
				$data = $this->data->getVisitsFrequencyNewReturningGraph();

				if($this->data->archive->periodType == DB_ARCHIVES_PERIOD_MONTH
					|| $this->data->archive->periodType == DB_ARCHIVES_PERIOD_DAY)
				{
					$this->showLabelBar2 = false;
				}
				else
				{
					$this->showLabelBar2 = true;
				}
			break;
			/**
			 * Source
			 */
			case 'source_countries':
				$data = $this->data->getSourceCountriesGraph();
			break;
			
			/**
			 * Settings
			 */
			case 'settings_browsers':
				$data = $this->data->getSettingsBrowsersGraph();
			break;
			case 'settings_os':
				$data = $this->data->getSettingsOsGraph();
			break;
			case 'settings_browsers_type':
				$this->width = 500;
				$data = $this->data->getSettingsBrowsersTypeGraph();
			break;
			case 'settings_resolutions':
				$data = $this->data->getSettingsResolutionsGraph();
			break;
			case 'settings_plugins':
				$data = $this->data->getSettingsPluginsGraph();
			break;
			
			/**
			 * Referers
			 */
			case 'referers_summary':
				$data = $this->data->getReferersSummaryGraph();
			break;
			
			/**
			 * Sites summary
			 */
			case 'sites_summary':
				$data = $this->data->getSitesSummaryStatisticsGraph();
			break;
		}
		return $data;
	}
	
	function process()
	{
		$data = $this->moduleDataFactory();
		$this->graph = $this->graphFactory();
		$this->graph->setData( $data );
		$this->graph->process();
	}
	function showAll()
	{		
		$this->process();
		$this->graph->display();
	}
}
?>
