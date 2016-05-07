<?php
/*=======================================================================
// File:	JPGRAPH_GRADIENT.PHP
// Description:	Create a color gradient
// Created: 	2003-02-01
// Author:	Johan Persson (johanp@aditus.nu)
// Ver:		$Id: jpgraph_gradient.php,v 1.1 2003/02/02 03:55:07 aditus Exp $
//
// License:	This code is released under QPL
// Copyright (C) 2003 Johan Persson
//========================================================================
*/

  
//===================================================
// CLASS Gradient
// Description: Handles gradient fills. This is to be
// considered a "friend" class of Class Image.
//===================================================
class Gradient {
    var $img=null;
//---------------
// CONSTRUCTOR
    function Gradient(&$img) {
	$this->img = $img;
    }

//---------------
// PUBLIC METHODS	
    // Produce a gradient filled rectangle with a smooth transition between
    // two colors.
    // ($xl,$yt) 	Top left corner
    // ($xr,$yb)	Bottom right
    // $from_color	Starting color in gradient
    // $to_color	End color in the gradient
    // $style		Which way is the gradient oriented?
    function FilledRectangle($xl,$yt,$xr,$yb,$from_color,$to_color,$style=1) {
	switch( $style ) {	
	    case 1:  // HORIZONTAL
		$steps = abs($xr-$xl);
		$delta = $xr>=$xl ? 1 : -1;
		$this->GetColArray($from_color,$to_color,$steps,$colors);
		for( $i=0, $x=$xl; $i<$steps; ++$i ) {
		    $this->img->current_color = $colors[$i];
		    $this->img->Line($x,$yt,$x,$yb);
		    $x += $delta;
		}
		break;

	    case 2: // VERTICAL
		$steps = abs($yb-$yt);
		$delta = $yb>=$yt ? 1 : -1;
		$this->GetColArray($from_color,$to_color,$steps,$colors);
		for($i=0,$y=$yt; $i<$steps; ++$i) {
		    $this->img->current_color = $colors[$i];
		    $this->img->Line($xl,$y,$xr,$y);
		    $y += $delta;
		}
		break;

	    case 3: // VERTICAL FROM MIDDLE
		$steps = abs($yb-$yt)/2;
		$delta = $yb>=$yt ? 1 : -1;
		$this->GetColArray($from_color,$to_color,$steps,$colors);
		for($y=$yt, $i=0; $i < $steps;  ++$i) {
		    $this->img->current_color = $colors[$i];
		    $this->img->Line($xl,$y,$xr,$y);
		    $y += $delta;
		}
		--$i;
		for($j=0; $j < $steps; ++$j, --$i) {
		    $this->img->current_color = $colors[$i];
		    $this->img->Line($xl,$y,$xr,$y);
		    $y += $delta;
		}
		$this->img->Line($xl,$y,$xr,$y);
		break;

	    case 4: // HORIZONTAL FROM MIDDLE
		$steps = abs($xr-$xl)/2;
		$delta = $xr>=$xl ? 1 : -1;
		$this->GetColArray($from_color,$to_color,$steps,$colors);
		for($x=$xl, $i=0; $i<$steps; ++$i) {
		    $this->img->current_color = $colors[$i];
		    $this->img->Line($x,$yb,$x,$yt);
		    $x += $delta;
		}
		--$i;
		for($j=0; $j<$steps; ++$j, --$i) {
		    $this->img->current_color = $colors[$i];
		    $this->img->Line($x,$yb,$x,$yt);
		    $x += $delta;
		}
		$this->img->Line($x,$yb,$x,$yt);		
		break;

	    case 6: // HORIZONTAL WIDER MIDDLE
		$steps = abs($xr-$xl)/3;
		$delta = $xr>=$xl ? 1 : -1;
		$this->GetColArray($from_color,$to_color,$steps,$colors);
		for($x=$xl, $i=0; $i < $steps; ++$i) {
		    $this->img->current_color = $colors[$i];
		    $this->img->Line($x,$yb,$x,$yt);
		    $x += $delta;
		}
		--$i;
		$this->img->current_color = $colors[$i];
		for($j=0; $j< $steps; ++$j) {
		    $this->img->Line($x,$yb,$x,$yt);
		    $x += $delta;
		}
		
		for($j=0; $j<$steps; ++$j, --$i) {
		    $this->img->current_color = $colors[$i];				
		    $this->img->Line($x,$yb,$x,$yt);	
		    $x += $delta;
		}				
		break;
	    

	    case 8:  // LEFT REFLECTION
		$steps1 = round(0.3*abs($xr-$xl));
		$delta = $xr>=$xl ? 1 : -1;		

		$this->GetColArray($from_color.':1.3',$to_color,$steps1,$colors);
		for($x=$xl, $i=0; $i < $steps1; ++$i) {
		    $this->img->current_color = $colors[$i];
		    $this->img->Line($x,$yb,$x,$yt);
		    $x += $delta;
		}
		$steps2 = max(1,round(0.08*abs($xr-$xl)));
		$this->img->SetColor($to_color);
		for($j=0; $j< $steps2; ++$j) {
		    $this->img->Line($x,$yb,$x,$yt);
		    $x += $delta;
		}
		$steps = abs($xr-$xl)-$steps1-$steps2;
		$this->GetColArray($to_color,$from_color,$steps,$colors);   
		for($i=0; $i < $steps; ++$i) {
		    $this->img->current_color = $colors[$i];
		    $this->img->Line($x,$yb,$x,$yt);
		    $x += $delta;
		}
		break;

	    case 9:  // RIGHT REFLECTION
		$steps1 = round(0.7*abs($xr-$xl));
		$delta = $xr>=$xl ? 1 : -1;		

		$this->GetColArray($from_color,$to_color,$steps1,$colors);
		for($x=$xl, $i=0; $i < $steps1; ++$i) {
		    $this->img->current_color = $colors[$i];
		    $this->img->Line($x,$yb,$x,$yt);
		    $x += $delta;
		}
		$steps2 = max(1,round(0.08*abs($xr-$xl)));
		$this->img->SetColor($to_color);
		for($j=0; $j< $steps2; ++$j) {
		    $this->img->Line($x,$yb,$x,$yt);
		    $x += $delta;
		}
		$steps = abs($xr-$xl)-$steps1-$steps2;
		$this->GetColArray($to_color,$from_color.':1.3',$steps,$colors);   
		for($i=0; $i < $steps; ++$i) {
		    $this->img->current_color = $colors[$i];
		    $this->img->Line($x,$yb,$x,$yt);
		    $x += $delta;
		}
		break;



	    case 7: // VERTICAL WIDER MIDDLE
		$steps = abs($yb-$yt)/3;
		$delta = $yb>=$yt? 1 : -1;
		$this->GetColArray($from_color,$to_color,$steps,$colors);
		for($y=$yt, $i=0; $i<$steps;  ++$i) {
		    $this->img->current_color = $colors[$i];
		    $this->img->Line($xl,$y,$xr,$y);
		    $y += $delta;
		}
		--$i;
		$this->img->current_color = $colors[$i];
		for($j=0; $j< $steps; ++$j) {
		    $this->img->Line($xl,$y,$xr,$y);
		    $y += $delta;
		}
		for($j=0; $j<$steps; ++$j, --$i) {
		    $this->img->current_color = $colors[$i];				
		    $this->img->Line($xl,$y,$xr,$y);
		    $y += $delta;
		}				
		break;

	    case 5: // Rectangle
		$steps = floor(min(($yb-$yt)+1,($xr-$xl)+1)/2);	
		$this->GetColArray($from_color,$to_color,$steps,$colors);
		$dx = ($xr-$xl)/2;
		$dy = ($yb-$yt)/2;
		$x=$xl;$y=$yt;$x2=$xr;$y2=$yb;
		for($x=$xl, $i=0; $x<$xl+$dx && $y<$yt+$dy ; ++$x, ++$y, --$x2, --$y2, ++$i) {
		    assert($i<count($colors));
		    $this->img->current_color = $colors[$i];			
		    $this->img->Rectangle($x,$y,$x2,$y2);
		}
		$this->img->Line($x,$y,$x2,$y2);
		break;

	    default:
		die("JpGraph Error: Unknown gradient style (=$style).");
		break;
	}
    }

//---------------
// PRIVATE METHODS	
    // Add to the image color map the necessary colors to do the transition
    // between the two colors using $numcolors intermediate colors
    function GetColArray($from_color,$to_color,$arr_size,&$colors,$numcols=100) {
	if( $arr_size==0 ) return;
	// If color is given as text get it's corresponding r,g,b values
	$from_color = $this->img->rgb->Color($from_color);
	$to_color = $this->img->rgb->Color($to_color);
		
	$rdelta=($to_color[0]-$from_color[0])/$numcols;
	$gdelta=($to_color[1]-$from_color[1])/$numcols;
	$bdelta=($to_color[2]-$from_color[2])/$numcols;
	$colorsperstep	= $numcols/$arr_size;
	$prevcolnum	= -1;
	for ($i=0; $i<$arr_size; ++$i) {
	    $colnum	= floor($colorsperstep*$i);
	    if ( $colnum == $prevcolnum ) 
		$colors[$i]	= $colidx;
	    else {
		$r = floor($from_color[0] + $colnum*$rdelta);
		$g = floor($from_color[1] + $colnum*$gdelta);
		$b = floor($from_color[2] + $colnum*$bdelta);
		$colidx = $this->img->rgb->Allocate(sprintf("#%02x%02x%02x",$r,$g,$b));
		$colors[$i]	= $colidx;
	    }
	    $prevcolnum = $colnum;
	}
    }	
} // Class

?>
