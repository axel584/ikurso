<?php
include "util.php";
$pagxtitolo="Détails leçon";
$korpo="informoj";
$kurso=isset($_GET["kurso"])?$_GET["kurso"]:"CG";
$leciono=isset($_GET["numleciono"])?$_GET["numleciono"]:"1";
// si la personne qui regarde la page n'est ni correcteur, ni administrateur, on affiche les infos sur ses leçons
if ($rajto!='A' && $rajto!='I' && $rajto!='K'){header("Location:index.php?erarkodo=4");}

include "pagxkapo.inc.php";

$query = "select titolo from lecionoj where  numero=".$leciono." and kurso='".$kurso."'";
$result = $bdd->query($query);
$row=$result->fetch();
$titolo = $row["titolo"];

?>

	<div class="row">
		<article class="col s12 m9 l6 offset-m1 offset-l1 korektado">
			<h1>Corrigé-type</h1>
			<h2><?=$titolo?></h2>

<?php

//$query = "select kodo,demando,komando,count(*) as combien,max(dato) from respondoj join lecioneroj on lecioneroj.id=respondoj.lecionero_id join lecionoj on lecioneroj.leciono_id=lecionoj.id where numero=".$leciono." and kurso='".$kurso."' group by komando,kodo, demando order by kodo,max(dato) desc";
$query = "select ekzercoj.id,komando from ekzercoj join lecioneroj on lecioneroj.id=ekzercoj.lecionero_id join lecionoj on lecioneroj.leciono_id=lecionoj.id where lecionoj.numero=".$leciono." and kurso='".$kurso."'";
$result = $bdd->query($query);
$nbReponse = 0;
$kodoj = array();
$komando="";
while ($row=$result->fetch()) {
	print "<fieldset class='ekzerco'>";
	print "<legend>".$row['komando']."</legend>";
	//echo "<p>".$row["demando"]."<br>\n";
	//echo "<span style=\"color:blue\">".$row["combien"]."</span></p>\n";
	$query2 = "select numero,demando,respondo from ekzerceroj where ekzerco_id=".$row["id"]." order by numero";
	$result2 = $bdd->query($query2);
	while ($row2=$result2->fetch()) {
		echo "<p>".$row2["numero"].".&nbsp;".$row2["demando"]."<br>\n";
		echo "<span style=\"color:blue\">".$row2["respondo"]."</span></p>";
	}
	print "</fieldset>";
}


?>

	</article>

		
		<aside class="col s12 m10 l3 offset-m1 push-l1">

			<ul class="collapsible" data-collapsible="expandable">

			<li class="active">
				<div class="collapsible-header">DLEK</div>
				<div class='collapsible-header'>
					<ul class="collection">

<?php

$query = "SELECT numero,kurso,titolo  FROM `lecionoj` WHERE kurso='CG' order by numero";
$result = $bdd->query($query);
while ($row=$result->fetch()) {
	$nbReponse = $nbReponse + 1;
	echo "<li><a href='korektado.php?kurso=CG&numleciono=".$row["numero"]."'>".$row["titolo"]."</a></li>\n";
}
?>
					</ul>
				</div>
				<div class="collapsible-header active">Gerda Malaperis</div>
				<div class='collapsible-header'>
					<ul class="collection">

<?php

$query = "SELECT numero,kurso,titolo  FROM `lecionoj` WHERE kurso='GR' order by numero";
$result = $bdd->query($query);
while ($row=$result->fetch()) {
	$nbReponse = $nbReponse + 1;
	echo "<li><a href='korektado.php?kurso=GR&numleciono=".$row["numero"]."'>".$row["titolo"]."</a></li>\n";
}
?>	
					</ul>
				</div>
				<div class="collapsible-header active">Paŝoj al Plena Posedo</div>
				<div class='collapsible-header'>
					<ul class="collection">

<?php

$query = "SELECT numero,kurso,titolo  FROM `lecionoj` WHERE kurso='PP' order by numero";
$result = $bdd->query($query);
while ($row=$result->fetch()) {
	$nbReponse = $nbReponse + 1;
	echo "<li><a href='korektado.php?kurso=PP&numleciono=".$row["numero"]."'>".$row["titolo"]."</a></li>\n";
}
?>	
					</ul>
				</div>				
			</li>
		</ul>	


		</aside>

	</div>
	
<?php include "pagxpiedo.inc.php";?>