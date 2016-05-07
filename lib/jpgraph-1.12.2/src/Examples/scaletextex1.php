<?php
include ("../jpgraph.php");
include ("../jpgraph_line.php");

$datay1 = array(4,26,12,18,8,22);
$texts = array('Text 1','Text 2','Text 3',);

// Setup the graph
$graph = new Graph(300,200);
$graph->SetMarginColor('white');
$graph->SetScale("linlin");
$graph->SetMargin(30,20,40,20);
$graph->SetFrame(true,'white');

$graph->title->Set("Adding texts in plots");
$graph->title->SetFont(FF_VERDANA,FS_BOLD,12);

$graph->xgrid->Show();
$graph->xgrid->SetColor('gray@0.5');
$graph->ygrid->SetColor('gray@0.5');

$graph->legend->SetColor('navy');
$graph->legend->SetFillColor('lightgray:1.5');
$graph->legend->SetLineWeight(1);
$graph->legend->SetColumns(2);
$graph->legend->SetFont(FF_VERDANA,FS_NORMAL,8);
$graph->legend->SetShadow('gray@0.4',4);
$graph->legend->SetAbsPos(15,30,'right','top');


// Create the line plot with both X and Y coordinates
$i=0;
$p = new LinePlot($datay1);
$p->SetColor('teal');
$p->SetWeight(2);
$p->SetLegend(2000);
$graph->Add($p);

// Add the texts
$n = count($texts);
for($i=0; $i<$n; ++$i ) {
    $txt[$i] = new Text($texts[$i]);
    $txt[$i]->SetScalePos($i,$datay1[$i]+2);
    $txt[$i]->SetBox('yellow');
    $txt[$i]->SetAlign('left','bottom');
    $graph->Add($txt[$i]);
}

// Output line
$graph->Stroke();

?>


