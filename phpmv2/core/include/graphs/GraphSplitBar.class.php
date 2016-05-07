<?php
/* 
 * phpMyVisites : website statistics and audience measurements
 * Copyright (C) 2002 - 2006
 * http://www.phpmyvisites.net/ 
 * phpMyVisites is free software (license GNU/GPL)
 * Authors : phpMyVisites team
*/

// $Id: GraphSplitBar.class.php 29 2006-08-18 07:35:21Z matthieu_ $


require_once INCLUDE_PATH . "/libs/artichow/BarPlot.class.php";
require_once INCLUDE_PATH . "/core/include/graphs/PmvGraph.class.php";

class GraphSplitBar extends PmvGraph
{
	function GraphSplitBar( $width = 600, $height = 250, $showLabelBar2 = true)
	{
		parent::PmvGraph($width, $height);	
		$this->showLabelBar2 = $showLabelBar2;
	}
	
	function setData( $a_data )
	{
		$this->x = $a_data['axis'];
		$this->y1 = $a_data['data1']['data'];
		$this->y1Legend = $a_data['data1']['legend'];
		if(isset($a_data['data2']['data']))
		{
			$this->y2 = $a_data['data2']['data'];
			$this->y2Legend = $a_data['data2']['legend'];
		}
		$this->title = $a_data['title'];
	}
	
	function process()
	{
				
		parent::process();
		
		$this->setPmvTitle( $this->graph );
		$this->setPmvBackgroundGradient( $this->graph );
		

		/**
		 * group (bar + line)
		 */
		$group = new PlotGroup();
		
		$this->setPmvGroupProperties( $group );
		$group->axis->bottom->setLabelText($this->x);
		
		// Add a bar plot
		$plot = new BarPlot($this->y1, 1);
		
		$this->setPmvBarShadowProperties( $plot );
		
		$this->setPmvLabelProperties( $plot, $this->y1 );
		$this->setPmvBarGradient( $plot );
		$this->setPmvBarSize( $plot );
		
		if(!$this->showLabelBar2 && strlen($this->y1[0]) > 2)
		{
			$plot->label->setInterval(2);
		}
		$group->legend->add($plot, $this->y1Legend, LEGEND_BACKGROUND);
		$group->add($plot);
		
		if(isset($this->y2))
		{
			// Add a second bar plot		
			$plot = new BarPlot($this->y2, 1);
			
			if($this->showLabelBar2)
			{
				$this->setPmvLabelProperties( $plot, $this->y2 );
				$plot->label->move(-5, 4);
				$plot->move(-5, 0);
			}
			else
			{
				$plot->move(-2, 0);
			}
			$this->setPmvBackgroundGradient( $plot );
			$this->setPmvBarBorderProperties( $plot );		
			$plot->setBarGradient(
				new LinearGradient(
					new Color(126, 126, 176),
					new Color(158, 158, 222),
					0
				)
			);
			$this->setPmvBarSize( $plot );
			$group->legend->add($plot, $this->y2Legend, LEGEND_BACKGROUND);
			$group->add($plot);
		}	
		$group->legend->setTextFont($this->font9);
		$this->graph->add($group);
		$this->graph->draw();
	}
	
	function display()
	{
		$this->draw();
	}
}
?>