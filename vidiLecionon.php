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
// si la personne qui regarde la page n'est ni correcteur, ni administrateur, on affiche les infos sur ses leçons
if ($rajto!='A' && $rajto!='I'&& $rajto!='K'){
	$studanto_id=$persono_id;
}
if ($studanto_id==""){header("Location:miajlernantoj.php?erarkodo=23");}
$studanto = apartigiPersonon($studanto_id);
include "pagxkapo.inc.php";

// on recupere les informations sur la leçon (intro et conclusion)
$query = "SELECT personoj_lecionoj.leciono_id,komentario,enkonduko,konkludo  FROM personoj_lecionoj join lecionoj on lecionoj.id=personoj_lecionoj.leciono_id where persono_id= ".$studanto_id." and numero=".$leciono;
$result = $bdd->query($query);
$row=$result->fetch();
$komentario = $row["komentario"];
$enkonduko = $row["enkonduko"];
$konkludo = $row["konkludo"];
$leciono_id = $row["leciono_id"];

// chemin pour accéder aux leçons à partir des sommaires (en haut et celui à droite)
	if ($kurso=='CG') {
		$chemin = 'fr/cge/';
	} else if ($kurso=='GR') {
		$chemin = 'fr/gerda/';
	} else if ($kurso=='3N') {
		$chemin = 'fr/3n/';
	}

if ($rajto=='S') { getListoLecionoj($kurso,$leciono,$chemin); }

?>

	<div class="row">
		<article class="col s12 m9 l6 offset-m1 offset-l1">
<?php 
if ($rajto=='S') { echo "<h1>Correction de la leçon</h1>"; }
else { echo "<h1>Leçon de ".$studanto["enirnomo"]."</h1>"; }
if ($enkonduko) {
	echo "<div class='card green lighten-4 card-content'>";
	echo $enkonduko;
	echo "</div>";
}

$query = "select ekzercoj.id,ekzercoj.komando from ekzercoj join lecioneroj on lecioneroj.id=ekzercoj.lecionero_id join lecionoj on lecionoj.id=lecioneroj.leciono_id where kurso='".$kurso."' and numero='".$leciono."'";
$result = $bdd->query($query);
while ($row=$result->fetch()) {
	echo "<p class=\"parto\">";
	echo "<strong>EXERCICE : </strong>".$row["komando"];
	echo "</p>";
	$ekzerco_id = $row["id"];
	$query2 = "select ekzerceroj.numero,ekzerceroj.demando,respondoj.respondo,respondoj.gxusta,respondoj.korekto from ekzerceroj left join respondoj on ekzerceroj.id=respondoj.ekzercero_id where persono_id=".$studanto_id." and ekzerceroj.ekzerco_id='".$ekzerco_id."' order by ekzerceroj.kodo";
	$result2 = $bdd->query($query2);
	while ($row2=$result2->fetch()) {
		echo "<p>".$row2["numero"].". ".$row2["demando"]."<br>\n";
		if ($row2["gxusta"]==1) {
			echo "<span style=\"color:green\">".$row2["respondo"]."</span></p>\n";
			if ($row2['korekto']) { echo "<div class='card green lighten-4 card-content'>".$row2['korekto']."</div>";}			
		} else {
			echo "<span style=\"color:blue\">".$row2["respondo"]."</span></p>\n";
			if ($row2['korekto']) { echo "<div class='card green lighten-4 card-content'>".$row2['korekto']."</div>";}
		}
}
	
}

// on affiche le commentaire de l'élève qui est stocké en base
$query = "SELECT komentario  FROM personoj_lecionoj join lecionoj on lecionoj.id=personoj_lecionoj.leciono_id where persono_id= ".$studanto_id." and numero=".$leciono." and kurso='".$kurso."'";
$result = $bdd->query($query);
$row=$result->fetch();
echo "<h3>Commentaire de l'élève</h3>";
echo $row["komentario"];


if ($konkludo) {
	echo "<div class='card green lighten-4 card-content'>";
	echo $konkludo;
	echo "</div>";
}

// on ajoute un bouton pour renvoyer la leçon

if ($rajto=='A' || $rajto=='I'|| $rajto=='K'){
?>

	<section id="leciono-fino">
			<div id="marko" class="right-align">

				<p>
				<a id="korektiLecionon_button" class="waves-effect waves-light btn tooltipped light-blue darken-1" href="korektiLecionon.php?numleciono=<?=$leciono?>&kurso=<?=$kurso?>&studanto=<?=$studanto_id?>" data-kurso="<?=$kurso?>" data-leciono="<?=$leciono?>" data-studanto="<?=$studanto_id?>" data-position="top" data-delay="50" data-tooltip="Corriger cette leçon en ligne">Corriger cette leçon en ligne</a>
				</p>
				<p>
				<a id="resendiLecionon_button" class="waves-effect waves-light btn tooltipped light-blue darken-1 " data-kurso="<?=$kurso?>" data-leciono="<?=$leciono?>" data-studanto="<?=$studanto_id?>" data-position="top" data-delay="50" data-tooltip="Renvoyer cette leçon par mail">Renvoyer cette leçon par mail</a>
			</p>
			<p>
      			<label>
      				<input type="checkbox" class="filled-in" id="expediteur_ikurso" name="expediteur_ikurso" />
	  				<span>Avec ikurso@esperanto-france.org comme expéditeur</span>
	  			</label>
    			</p>
			</div>

		</section>
<?php
}
?>		
		
	</article>

		
		<aside class="col s12 m10 l3 offset-m1 push-l1">
<?php
if ($rajto=='A' || $rajto=='I'|| $rajto=='K'){
?>	
			<ul class="collapsible" data-collapsible="expandable">

			<li class="active">
				<div class="collapsible-header"><i class="material-icons">toc</i>Leçons de l'élève</div>

<?php

$query = "SELECT numero,kurso,titolo  FROM `personoj_lecionoj` join lecionoj on lecionoj.id=personoj_lecionoj.leciono_id WHERE `persono_id` = ".$studanto_id." order by kurso,numero";
$result = $bdd->query($query);
while ($row=$result->fetch()) {
	echo "<div class='collapsible-header'><a href='vidiLecionon.php?kurso=".$row["kurso"]."&numleciono=".$row["numero"]."&studanto=".$studanto_id."'>".$row["titolo"]."</a></div>\n";
}
?>
				
			</li>
		</ul>	
<?php 
} else {
	echo '<ul class="collapsible" data-collapsible="expandable">';
	getEnhavtabelo($kurso,$leciono,$chemin); 
	echo '</ul>';
}
?>
		</aside>

	</div>
	
<?php include "pagxpiedo.inc.php";?>