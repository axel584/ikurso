<?php
include "util.php";
$pagxtitolo="Détails leçon";
$korpo="informoj";
$kurso=isset($_GET["kurso"])?$_GET["kurso"]:"CG";
$leciono=isset($_GET["numleciono"])?$_GET["numleciono"]:"1";
if ($rajto!='A' && $rajto!='I' && $rajto!='K'){header("Location:index.php?erarkodo=4"); exit;}
include "pagxkapo.inc.php";



$result = $bdd->prepare("select titolo from lecionoj where numero=? and kurso=?");
$result->execute(array($leciono,$kurso));
$row=$result->fetch();
$titolo = $row["titolo"];

?>

	<div class="row">
		<article class="col s12 m9 l6 offset-m1 offset-l1 korektado">
			<h1>Réponses des élèves</h1>
			<h2><?=$titolo?></h2>

<?php
$query = "select ekzerceroj.id,ekzerceroj.numero,demando from ekzerceroj join ekzercoj on ekzercoj.id=ekzerceroj.ekzerco_id join lecioneroj on lecioneroj.id=ekzercoj.lecionero_id  join lecionoj on lecioneroj.leciono_id=lecionoj.id  where lecionoj.numero=? and kurso=? order by ekzerceroj.numero"; 
$result = $bdd->prepare($query);
$result->execute(array($leciono,$kurso));
$komando="";
while ($row=$result->fetch()) {
	$ekzerceroj_id= $row["id"];
	echo "<p>".$row["numero"].". ".$row["demando"]."<br>\n";
	// on va chercher la bonne réponse en base :
	$result2 = $bdd->prepare("SELECT respondo,normaligita FROM ekzerceroj where id=?");
	$result2->execute(array($ekzerceroj_id));
	$row2 = $result2->fetch();
	$bonaRespondo = $row2["normaligita"];
	$result2 = $bdd->prepare("select count(*) as combien from respondoj where ekzercero_id=?");
	$result2->execute(array($ekzerceroj_id));
	$nbTotalReponse = $result2->fetch()["combien"];
	$result2 = $bdd->prepare("select normaligita,count(*) as combien from respondoj where ekzercero_id=? group by normaligita order by count(*) desc");
	$result2->execute(array($ekzerceroj_id));
	while ($row2=$result2->fetch()) {
		$taux = number_format(100*$row2["combien"]/$nbTotalReponse,2);
		if ($taux<1.0) {
			break;
		}
		$lernantaRespondo=$row2["normaligita"];
		if (kontroliRespondon($lernantaRespondo,$bonaRespondo)) {
			echo "<p><span style=\"color:green\">".$row2["normaligita"]." (".$taux." %)</span></p>";
		} else {
			echo "<p><span style=\"color:blue\">".$row2["normaligita"]." (".$taux." %)</span></p>";
		}
	}
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
	echo "<li><a href='korektado-admin.php?kurso=CG&numleciono=".$row["numero"]."'>".$row["titolo"]."</a></li>\n";
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
	echo "<li><a href='korektado-admin.php?kurso=GR&numleciono=".$row["numero"]."'>".$row["titolo"]."</a></li>\n";
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
	echo "<li><a href='korektado-admin.php?kurso=PP&numleciono=".$row["numero"]."'>".$row["titolo"]."</a></li>\n";
}
?>	
					</ul>
				</div>


			</li>
		</ul>	


		</aside>

	</div>
	
<?php include "pagxpiedo.inc.php";?>