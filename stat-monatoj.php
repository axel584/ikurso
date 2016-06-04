<?
include "util.php";
include "lib/jpgraph.php";
include "lib/jpgraph_line.php";
malfermiDatumbazon();

$cumul = ($_REQUEST["cumul"]==true);
$filtre = $_REQUEST["filtre"];

function unhtmlentities ($string){
   $trans_tbl = get_html_translation_table (HTML_ENTITIES);
   $trans_tbl = array_flip ($trans_tbl);
   return strtr ($string, $trans_tbl);
}

	// elektas la datumbazon
	mysql_select_db("ikurso");

	$demando = "select nuna_kurso.id as id, nuna_kurso.stato as stato, MONTH(nuna_kurso.ekdato) as ekmonato, YEAR(nuna_kurso.ekdato) as ekjaro, MONTH(nuna_kurso.findato) as finmonato,YEAR(nuna_kurso.findato) as finjaro from nuna_kurso, personoj where nuna_kurso.studanto=personoj.id";
	$result = mysql_query($demando) or die (  "SELECT : malbona demando :".$demando.":".mysql_error());
	while($row = mysql_fetch_array($result)) {
		if ($row["ekmonato"]<10) {
			$ekdato = $row["ekjaro"]."0".$row["ekmonato"];
		} else {
			$ekdato = $row["ekjaro"].$row["ekmonato"];
		}
		$stat[$ekdato]["ekis"]++;
		$sumekis++;
		if ($row["finmonato"]!=null) {
			if ($row["finmonato"]<10) {
				$findato = $row["finjaro"]."0".$row["finmonato"];
			} else {
				$findato = $row["finjaro"].$row["finmonato"];
			}
			if ($row["stato"]=="H") {
				$stat[$findato]["haltis"]++;
				$sumhaltis++;
			} elseif ($row["stato"]=="F") {
				$stat[$findato]["finis"]++;
				$sumfinis++;
			}
		}
	}
        $demando = "select * from monatoj";
        $result = mysql_query($demando) or die (  "SELECT : malbona demando :".$demando.":".mysql_error());
        while ($row=mysql_fetch_array($result)) {
          $nomo_monatoj[$row["kodo"]]=$row["nomo"];
        }
	ksort($stat);

foreach($stat as $key => $value) {
// pour ne pas afficher un mois donné, retiré les commentaire (le dernier mois par exemple)
//if ($key!="200308") { 
		ereg("([0-9]{4})([0-9]{2})", $key,$trancxita);
                // affiche le mois contenu dans nomo_monatoj et l'année
                //$datax[] = $nomo_monatoj[$trancxita[2]];
                $datax[] =  unhtmlentities($nomo_monatoj[$trancxita[2]]);
                $datayk[] = $value["ekis"];
                $datayh[] = $value["haltis"];
                $datayf[] = $value["finis"];
                $nblernantoj = $nblernantoj + $value["ekis"];
                $nblernantoj = $nblernantoj - $value["haltis"];
                $nblernantoj = $nblernantoj - $value["finis"];
	}


// Create the graph. These two calls are always required
$graph = new Graph(600, 500,"auto"); 
$graph->img->SetMargin(40,20,20,50); 
$graph->SetMarginColor('white');  
$graph->SetScale( "textlin");
$graph ->legend->Pos( 0.05,0.05,"left" ,"top");

// titolo
//$graph ->title->Set($lgv_lauxMonatoj);

$graph->yaxis->HideZeroLabel();
$graph->ygrid->Show(true,true);
$graph->xgrid->Show(true,false);

$graph->xaxis->SetTickLabels($datax);
$graph->xaxis->SetLabelAngle(90);

// Create the linear plot por la lernantoj kiu komencis
$lineplotk =new LinePlot($datayk);
$lineplotk->SetColor("blue");
$lineplotk->mark ->SetType(  MARK_STAR);
$lineplotk->SetLegend("Ont commence : ".$sumekis);
$lineplotk->value->SetFormat( "%d");
$lineplotk->value ->Show();

// Create the linear plot por la lernantoj kiu haltis
$lineploth =new LinePlot($datayh);
$lineploth->SetColor("red");
$lineploth->mark ->SetType( MARK_UTRIANGLE);
$lineploth->SetLegend("Ont abandonne : ".$sumhaltis);
$lineploth->value->SetFormat( "%d");
$lineploth->value ->Show();

// Create the linear plot por la lernantoj kiu finis
$lineplotf =new LinePlot($datayf);
$lineplotf->SetColor("green");
$lineplotf->mark ->SetType( MARK_SQUARE);
$lineplotf->SetLegend("Ont fini : ".$sumfinis);
$lineplotf->value->SetFormat( "%d");
$lineplotf->value ->Show();

// Add the plot to the graph
if ($filtre=='K' || $filtre=='') {
   $graph->Add( $lineplotk);
}
if ($filtre=='H' || $filtre=='') {
   $graph->Add( $lineploth);
}
if ($filtre=='F' || $filtre=='') {
   $graph->Add( $lineplotf);
}


// Display the graph
$graph->Stroke();
?>