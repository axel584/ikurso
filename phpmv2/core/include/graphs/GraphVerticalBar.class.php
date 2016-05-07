<?php
/* 
 * phpMyVisites : website statistics and audience measurements
 * Copyright (C) 2002 - 2006
 * http://www.phpmyvisites.net/ 
 * phpMyVisites is free software (license GNU/GPL)
 * Authors : phpMyVisites team
*/

// $Id: GraphVerticalBar.class.php 29 2006-08-18 07:35:21Z matthieu_ $


require_once INCLUDE_PATH . "/libs/artichow/BarPlot.class.php";
require_once INCLUDE_PATH . "/core/include/graphs/PmvGraph.class.php";

class GraphVerticalBar extends PmvGraph
{
	function GraphVerticalBar( $width, $height)
	{
		parent::PmvGraph($width, $height);	
	}
	
	function setData( $a_data )
	{
		$this->x = $a_data['axis'];
		$this->y = $a_data['data'];
		$this->title = $a_data['title'];
	}
	
	function process()
	{
		parent::process();
		
		$this->plot = new BarPlot($this->y);
		
		$this->plot->grid->setType( LINE_DASHED );
		
		$this->setPmvPadding($this->plot);		
		$this->setPmvTitle( $this->plot );
		$this->setPmvBackgroundGradient($this->plot);
		$this->setPmvBarShadowProperties( $this->plot );
		$this->setPmvLabelProperties( $this->plot, $this->y );
		$this->setPmvBarBorderProperties( $this->plot );
		$this->setPmvBarSize( $this->plot );		
		$this->setPmvBarGradient( $this->plot );
		
		$this->plot->xAxis->setColor( new Color(  50, 97, 243) );
		$this->plot->yAxis->setColor( new Color(  50, 97, 243) );
		$this->plot->xAxis->label->setFont($this->font8);
		
		$this->plot->xAxis->setLabelText($this->x);
	}
	
	function display()
	{
		$this->graph->add($this->plot);
		$this->draw();
	}
}
?>