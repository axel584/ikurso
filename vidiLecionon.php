<?php
include "util.php";
$pagxtitolo="Détails leçon";
$korpo="informoj";
$persono_id=$_SESSION["persono_id"];
if ($persono_id=="") {header("Location:index.php?erarkodo=8");}
$persono = apartigiPersonon($persono_id);
$kurso=isset($_GET["kurso"])?$_GET["kurso"]:"";
$leciono=isset($_GET["numleciono"])?$_GET["numleciono"]:"";
$studanto_id=isset($_GET["studanto"])?$_GET["studanto"]:"";
if ($studanto_id==""){header("Location:miajlernantoj.php?erarkodo=23");}
$studanto = apartigiPersonon($studanto_id);
include "pagxkapo.inc.php";
?>

	<div class="row">
		<article class="col s12 m9 l6 offset-m1 offset-l1">
			<h1>Détails de la leçon de <?=$studanto["enirnomo"]?></h1>

<?php


$query = "select demando,respondo from respondoj join lecioneroj on lecioneroj.id=respondoj.lecionero_id join lecionoj on lecioneroj.leciono_id=lecionoj.id where persono_id=".$studanto_id." and numero=".$leciono." and kurso='".$kurso."' order by kodo";
$result = $bdd->query($query);
$nbReponse = 0;
while ($row=$result->fetch()) {
	$nbReponse = $nbReponse + 1;
	echo "<p>".$row["demando"]."<br>\n";
	echo "<span style=\"color:blue\">".$row["respondo"]."</span></p>\n";
}
// TODO : ajouter le commentaire de l'élève qui devra être stocké en base


?>


	</article>

		
		<aside class="col s12 m10 l3 offset-m1 push-l1">


			<ul class="collapsible" data-collapsible="expandable">

			<li>
				<div class="collapsible-header active"><i class="material-icons">toc</i>Leçons de l'élève</div>

<?php

$query = "SELECT numero,kurso,titolo  FROM `personoj_lecionoj` join lecionoj on lecionoj.id=personoj_lecionoj.leciono_id WHERE `persono_id` = ".$studanto_id." order by kurso,numero";
$result = $bdd->query($query);
while ($row=$result->fetch()) {
	$nbReponse = $nbReponse + 1;
	echo "<div class='collapsible-header'><a href='vidiLecionon.php?kurso=".$row["kurso"]."&numleciono=".$row["numero"]."&studanto=".$studanto_id."'>".$row["titolo"]."</a></div>\n";
}
?>
				
			</li>
		</ul>	


		</aside>

	</div>
	
<?php include "pagxpiedo.inc.php";?>