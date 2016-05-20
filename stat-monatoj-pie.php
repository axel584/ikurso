<?php
include "util.php";
include "lib/jpgraph.php";
include "lib/jpgraph_pie.php";
malfermiDatumbazon();

$idMonato = $_REQUEST["idMonato"];
$nomoMonato = $_REQUEST["nomoMonato"];

function unhtmlentities ($string){
   $trans_tbl = get_html_translation_table (HTML_ENTITIES);
   $trans_tbl = array_flip ($trans_tbl);
   return strtr ($string, $trans_tbl);
}

	// elektas la datumbazon
	mysql_select_db("ikurso");

	$jaro = substr($_REQUEST["idMonato"],0,4);
	$monato = substr($_REQUEST["idMonato"],4,2);
	
	$k=0;
	$f=0;
	$h=0;
	$n=0;
	$ke=0;
	$cg=0;
	$gr=0;
	
	$demando = "select * from nuna_kurso where MONTH(ekdato)='".$monato."' and YEAR(ekdato)='".$jaro."'";
	$result = mysql_query($demando) or die (  "SELECT : malbona demando :".$demando.":".mysql_error());
	while($row = mysql_fetch_array($result)) {
		if ($row[stato]=='K') { $k++;}
		if ($row[stato]=='H') { $h++;}
		if ($row[stato]=='F') { $f++;}
		if ($row[stato]=='N') { $n++;}
		if ($row[kurso]=='CG') { $cg++;}
		if ($row[kurso]=='KE') { $ke++;}
		if ($row[kurso]=='GR') { $gr++;}
	}

// A new pie graph
$graph = new PieGraph(500,200,"auto");
$graph->SetShadow();

// Title setup

	
$graph->title->Set("Détail - ".$nomoMonato." ".$jaro);
$graph->title->SetFont(FF_FONT1,FS_BOLD);	

// Setup the pie plot
$data = array($cg,$ke,$gr);
$p1 = new PiePlot($data);

// Adjust size and position of plot
$p1->SetSize(0.35);
$p1->SetCenter(0.75,0.52);
$lbl = array("Cours web ($cg)","Logiciel ($ke)","Gerda ($gr)");
$p1->SetLabels($lbl);
$p1->SetTheme("sand");
//$p1->SetLegends(array("Cours web","Logiciel","Gerda"));

// Setup slice labels and move them into the plot
$p1->value->SetFont(FF_FONT1,FS_BOLD);
//$p1->value->SetColor("darkred");
$p1->value->SetColor("black");
$p1->SetLabelPos(0.65);

// Explode all slices
$p1->ExplodeAll(10);

// Add drop shadow
$p1->SetShadow();

// Finally add the plot
$graph->Add($p1);

// Setup the pie plot
$data2 = array($n,$k,$f,$h);
$p2 = new PiePlot($data2);

// Adjust size and position of plot
$p2->SetSize(0.35);
$p2->SetCenter(0.25,0.52);
$lbl2 = array("Inscrit ($n)","En cours ($k)","Fini ($f)","Abandon ($h)");
$p2->SetLabels($lbl2);
//$p2->SetLegends(array("Pas encore commencé","En cours","Fini","Abandon"));

// Setup slice labels and move them into the plot
$p2->value->SetFont(FF_FONT1,FS_BOLD);
//$p2->value->SetColor("darkred");
$p2->value->SetColor("black");
$p2->SetLabelPos(0.65);

// Explode all slices
$p2->ExplodeAll(10);

// Add drop shadow
$p2->SetShadow();

$graph->Add($p2);

// ... and stroke it
$graph->Stroke();
?>