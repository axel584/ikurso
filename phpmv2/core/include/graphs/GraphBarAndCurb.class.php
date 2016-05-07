<?php
/* 
 * phpMyVisites : website statistics and audience measurements
 * Copyright (C) 2002 - 2006
 * http://www.phpmyvisites.net/ 
 * phpMyVisites is free software (license GNU/GPL)
 * Authors : phpMyVisites team
*/

// $Id: GraphBarAndCurb.class.php 80 2006-09-14 14:49:54Z matthieu_ $


require_once INCLUDE_PATH . "/libs/artichow/BarPlot.class.php";
require_once INCLUDE_PATH . "/libs/artichow/LinePlot.class.php";
require_once INCLUDE_PATH . "/core/include/graphs/PmvGraph.class.php";

class GraphBarAndCurb extends PmvGraph
{
	function GraphBarAndCurb( $width, $height, $showAllLabels = true)
	{
		parent::PmvGraph($width, $height);
		$this->showLabelBar2 = $showAllLabels;
	}

	function setData( $a_data )
	{
		$this->x = $a_data['axis'];
		$this->y1 = $a_data['data1']['data'];
		$this->y2 = $a_data['data2']['data'];
		$this->y1Legend = $a_data['data1']['legend'];
		$this->y2Legend = $a_data['data2']['legend'];
		$this->title = $a_data['title'];
		
		if(isset($a_data['interval']))
		{
			$this->interval = $a_data['interval'];
		}
		/*if($this->interval)
		{
			foreach($this->x as $key => $value)
			{
				$n[$key] = substr($value, 0, 6);
			}
			$this->x = $n;
		}*/
	}

	function process()
	{
		parent::process();
		
		$this->setPmvTitle( $this->graph );
		$this->setPmvBackgroundGradient($this->graph);
		

		/**
		 * group (bar + line)
		 */
		$group = new PlotGroup();
		
		$this->setPmvGroupProperties( $group );

		$group->axis->right->setColor(new Red);
		$group->axis->right->label->setFont(new Font2);


		/**
		 * line
		 */
		$plot = new LinePlot($this->y2, LINEPLOT_MIDDLE);

		$plot->setColor(new Red);
		$plot->setThickness(1);
		$plot->setYAxis(PLOT_RIGHT);

		$group->legend->add($plot, $this->y2Legend, LEGEND_MARK);
		$group->add($plot);


		/**
		 * vertical bar
		 */
		$plot = new BarPlot($this->y1);

		$plot->grid->setType( LINE_DASHED );

		$this->setPmvPadding( $plot );
		$this->setPmvBackgroundGradient( $plot );
		$this->setPmvBarBorderProperties( $plot );
		$this->setPmvBarShadowProperties( $plot );
		$this->setPmvLabelProperties( $plot, $this->y1 );
		$this->setPmvBarGradient( $plot );
		$this->setPmvBarSize( $plot );
		
		//$plot->xAxis->setColor( new Color(  50, 97, 243) );
		//$plot->yAxis->setColor( new Color(  50, 97, 243) );
		//$plot->xAxis->label->setFont($this->font20);

		$group->axis->bottom->setLabelText($this->x);
		$group->axis->bottom->setPadding(0,0,100,0);
	
		
		// display one axis label on two because too long for Mar 04 Apr 04 etc.
		if(isset($this->interval))
		{
			$group->axis->bottom->label->setInterval(2);
		}
		
		$group->legend->add($plot, $this->y1Legend, LEGEND_BACKGROUND);
		$group->add($plot);
		

		/**
		 * add group to graph
		 */
		
		$this->graph->add($group);
	}

	function display()
	{
		$this->draw();
	}
}
?>