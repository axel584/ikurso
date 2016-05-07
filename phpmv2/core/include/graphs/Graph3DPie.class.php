<?php
/* 
 * phpMyVisites : website statistics and audience measurements
 * Copyright (C) 2002 - 2006
 * http://www.phpmyvisites.net/ 
 * phpMyVisites is free software (license GNU/GPL)
 * Authors : phpMyVisites team
*/

// $Id: Graph3DPie.class.php 29 2006-08-18 07:35:21Z matthieu_ $


require_once INCLUDE_PATH . "/libs/artichow/Pie.class.php";
require_once INCLUDE_PATH . "/core/include/graphs/PmvGraph.class.php";

class Graph3DPie extends PmvGraph
{
	function Graph3DPie( $width, $height, $set3D = true)
	{
		parent::PmvGraph($width, $height	);	
		$this->set3D = $set3D;
	}
	
	function setData( $a_data )
	{
		$this->x = $a_data['axis'];
		$this->y = $a_data['data'];
		$this->title = $a_data['title'];
		
		$sum = array_sum($this->y);
		foreach($this->x as $key => $value)
		{
			$this->x[$key] = $value . " (". round($this->y[$key] * 100 / $sum) ."%)";
		}
	}
	
	function process()
	{
		parent::process();
		$this->graph->setAntiAliasing(false);
		$this->setPmvTitle( $this->graph );
		
		$this->plot = new Pie($this->y);
		$this->setPmvBackgroundGradient($this->graph);
		$this->plot->setCenter(0.3, 0.5);
		$this->plot->legend->setAlign(LEGEND_RIGHT);
		
		if($this->set3D)
		{	
			$this->plot->setSize(0.55, 0.7);
			$this->plot->set3D(25);
			$this->plot->setAbsSize(240, 155);
			if($this->width > 400)
			{
				$this->plot->setCenter(0.25, 0.5);
				$this->plot->legend->setPosition( 2, 0.45 );
			}
			else
			{
				$this->plot->legend->setPosition( 1.6, 0.45 );
			}
		}
		else
		{			
			$this->plot->legend->setPosition(1.6, 0.15	);
			$this->plot->setAbsSize(220, 220);
			$this->plot->setCenter(0.35, 0.55);
		}
		
		$this->plot->setBorder(new Black);//Color(96, 115, 165));
		$this->plot->setLabelPosition(10);
		$this->plot->label->setPadding(2, 2, 2, 2);
		$this->plot->label->setFont($this->font9);
		$this->plot->setLegend( $this->x );
		$this->plot->legend->setTextFont($this->font10);
	}
	
	function display()
	{
		$this->graph->add($this->plot);
		$this->draw();
	}
}
?>