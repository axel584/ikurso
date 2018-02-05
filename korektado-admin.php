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
//$query = "select kodo,demando,count(*) as combien,max(dato) from respondoj join lecioneroj on lecioneroj.id=respondoj.lecionero_id join lecionoj on lecioneroj.leciono_id=lecionoj.id where numero=".$leciono." and kurso='".$kurso."' group by kodo, demando order by kodo,max(dato) desc";
$query = "select ekzerceroj.id,ekzerceroj.numero,demando from ekzerceroj join ekzercoj on ekzercoj.id=ekzerceroj.ekzerco_id join lecioneroj on lecioneroj.id=ekzercoj.lecionero_id  join lecionoj on lecioneroj.leciono_id=lecionoj.id  where lecionoj.numero=".$leciono." and kurso='".$kurso."'"; 
$result = $bdd->query($query);
$komando="";
while ($row=$result->fetch()) {
	// if ($row["komando"]!=$komando) {
	// 	$komando=$row["komando"];
	// 	print "<h3>".$komando."</h3>";
	// }
	$ekzerceroj_id= $row["id"];
	echo "<p>".$row["numero"]." ".$row["demando"]."<br>\n";
	// on va chercher la bonne réponse en base :
	$query2="SELECT respondo,normaligita FROM ekzerceroj where id='".$ekzerceroj_id."'";
	$result2 = $bdd->query($query2);
	$row2 = $result2->fetch();
	$bonaRespondo = $row2["normaligita"];
	$query2 = "select count(*) as combien from respondoj where ekzercero_id='".$ekzerceroj_id."'";
	$result2 = $bdd->query($query2);
	$nbTotalReponse = $result2->fetch()["combien"];
	$query2 = "select normaligita,count(*) as combien from respondoj where ekzercero_id='".$ekzerceroj_id."' group by normaligita order by count(*) desc";
	$result2 = $bdd->query($query2);
	while ($row2=$result2->fetch()) {
		$taux = number_format(100*$row2["combien"]/$nbTotalReponse,2);
		if ($taux<1.0) {
			break;
		}
		echo "<span style=\"color:blue\">".$row2["normaligita"]." (".$taux." %)</span></p><br/>";
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
	echo "<div class='collapsible-header'><a href='korektado-admin.php?kurso=CG&numleciono=".$row["numero"]."'>".$row["titolo"]."</a></div>\n";
}
?>
				<div class="collapsible-header active"><i class="material-icons">toc</i>Gerda Malaperis</div>

<?php

$query = "SELECT numero,kurso,titolo  FROM `lecionoj` WHERE kurso='GR' order by numero";
$result = $bdd->query($query);
while ($row=$result->fetch()) {
	$nbReponse = $nbReponse + 1;
	echo "<div class='collapsible-header'><a href='korektado-admin.php?kurso=GR&numleciono=".$row["numero"]."'>".$row["titolo"]."</a></div>\n";
}
?>	

			</li>
		</ul>	


		</aside>

	</div>
	
<?php include "pagxpiedo.inc.php";?>