<?php
include ("../jpgraph.php");
include ("../jpgraph_bar.php");

$datay1=array(12,0,8,19,7,17,6);
$datay2=array(3,10,5,2,7,5,25);

// Create the graph. 
$graph = new Graph(460,400);	
$graph->SetScale("textlin");
$graph->Set90AndMargin(30,30,50,90);

$graph->title->Set("Test of rotated acc bar ");

// Create a bar pot
$bplot = new BarPlot($datay1);
$bplot->SetFillColor("orange");
$bplot->SetLegend("2001");

$bplot2 = new BarPlot($datay2);
$bplot2->SetFillColor("red");
$bplot2->SetLegend('2002');

$bplot3 = new BarPlot($datay2);
$bplot3->SetFillColor("blue");
$bplot3->SetLegend("2003");

$bplot4 = new BarPlot($datay2);
$bplot4->SetFillColor("lightblue");
$bplot4->SetLegend("2006\n(Prel quality)");

$bplot5 = new BarPlot($datay2);
$bplot5->SetLegend("2005");
$bplot5->SetFillColor("green@0.7:0.7");

$bplot6 = new BarPlot($datay2);
$bplot6->SetLegend("2006");
$bplot6->SetFillColor("cyan");

$accbplot = new AccBarPlot(array($bplot,$bplot2,$bplot3,$bplot4,$bplot5,$bplot6));
$graph->Add($accbplot);

$graph->SetClipping();

// Setup legend
$graph->legend->SetAbsPos(10,390,'left','bottom');
$graph->legend->SetColumns(3);
$graph->legend->SetFont(FF_FONT1,FS_NORMAL,16);


$graph->Stroke();

?>
