<?php
include "util.php";
$pagxtitolo="Détails leçon";
$korpo="informoj";
$kurso=isset($_GET["kurso"])?$_GET["kurso"]:"CG";
$leciono=isset($_GET["numleciono"])?$_GET["numleciono"]:"1";
include "pagxkapo.inc.php";



$query = "select titolo from lecionoj where  numero=".$leciono." and kurso='".$kurso."'";
$result = $bdd->query($query);
$row=$result->fetch();
$titolo = $row["titolo"];

?>

	<div class="row">
		<article class="col s12 m9 l6 offset-m1 offset-l1">
			<h1><?=$titolo?></h1>

<?php

//$query = "select kodo,demando,komando,count(*) as combien,max(dato) from respondoj join lecioneroj on lecioneroj.id=respondoj.lecionero_id join lecionoj on lecioneroj.leciono_id=lecionoj.id where numero=".$leciono." and kurso='".$kurso."' group by komando,kodo, demando order by kodo,max(dato) desc";
$query = "select ekzercoj.id,komando from ekzercoj join lecioneroj on lecioneroj.id=ekzercoj.lecionero_id join lecionoj on lecioneroj.leciono_id=lecionoj.id where lecionoj.numero=".$leciono." and kurso='".$kurso."'";
$result = $bdd->query($query);
$nbReponse = 0;
$kodoj = array();
$komando="";
while ($row=$result->fetch()) {
	print "<h3>".$row['komando']."</h3>";
	//echo "<p>".$row["demando"]."<br>\n";
	//echo "<span style=\"color:blue\">".$row["combien"]."</span></p>\n";
	$query2 = "select numero,demando,respondo from ekzerceroj where ekzerco_id=".$row["id"]." order by numero";
	$result2 = $bdd->query($query2);
	while ($row2=$result2->fetch()) {
		echo "<p>".$row2["numero"].".&nbsp;".$row2["demando"]."<br>\n";
		echo "<span style=\"color:blue\">".$row2["respondo"]."</span></p><br/>";
	}
}


?>

	</article>

		
		<aside class="col s12 m10 l3 offset-m1 push-l1">


			<ul class="collapsible" data-collapsible="expandable">

			<li>
				<div class="collapsible-header active"><i class="material-icons">toc</i>DLEK</div>

<?php

$query = "SELECT numero,kurso,titolo  FROM `lecionoj` WHERE kurso='CG' order by numero";
$result = $bdd->query($query);
while ($row=$result->fetch()) {
	$nbReponse = $nbReponse + 1;
	echo "<div class='collapsible-header'><a href='korektado.php?kurso=CG&numleciono=".$row["numero"]."'>".$row["titolo"]."</a></div>\n";
}
?>
				<div class="collapsible-header active"><i class="material-icons">toc</i>Gerda Malaperis</div>

<?php

$query = "SELECT numero,kurso,titolo  FROM `lecionoj` WHERE kurso='GR' order by numero";
$result = $bdd->query($query);
while ($row=$result->fetch()) {
	$nbReponse = $nbReponse + 1;
	echo "<div class='collapsible-header'><a href='korektado.php?kurso=GR&numleciono=".$row["numero"]."'>".$row["titolo"]."</a></div>\n";
}
?>	

			</li>
		</ul>	


		</aside>

	</div>
	
<?php include "pagxpiedo.inc.php";?>