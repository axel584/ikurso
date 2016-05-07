<?php 
include ("../jpgraph.php"); 
include ("../jpgraph_line.php"); 
include ("../jpgraph_bar.php"); 

$ydata = array(2,3,4,5,6,7,8,9,10,11); 
$ydata2 = array(1,2,3,4,5,6,7,8,9,10); 
$targ = array("http://","http://","http://","http://","http://","http://","http://","http://","http://","http://");
$alt = array(1,2,3,4,5,6,7,8,9,10); 

// Create the graph. 
$graph = new Graph(300,200,"auto");     
$graph->SetScale("textlin"); 
$graph->img->SetMargin(40,20,30,40); 
$graph->title->Set("CSIM example with bar and line"); 
$graph->title->SetFont(FF_FONT1,FS_BOLD);

// Setup axis titles
$graph->xaxis->title->Set("X-title"); 
$graph->yaxis->title->Set("Y-title"); 

// Create the linear plot 
$lineplot=new LinePlot($ydata); 
$lineplot->mark->SetType(MARK_FILLEDCIRCLE);
$lineplot->mark->SetWidth(5);
$lineplot->mark->SetColor('black');
$lineplot->mark->SetFillColor('red');
$lineplot->SetCSIMTargets($targ,$alt);

// Create line plot
$barplot=new barPlot($ydata2); 
$barplot->SetCSIMTargets($targ,$alt);

// Add the plots to the graph 
$graph->Add($lineplot); 
$graph->Add($barplot); 

// Display the graph with the image map. 
// We store the image file in the current directory. 
// This let's us use the image in the <img> tag
// that gets send back to the browser.
// By using 'auto' as the file name the image file will
// get the same name as this PHP script but with the correct
// image postfix.
$graph->Stroke('auto');

// Now echo back the correct tags to the browser. This will
// cause the browser to re-load the previously stored image.
echo $graph->GetHTMLImageMap("myimagemap");
echo "<img src=\"".GenImgName()."\" ISMAP USEMAP=\"#myimagemap\" border=0>";

?> 


