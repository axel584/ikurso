 <?php
include "util.php";
$pagxtitolo="Données personnelles";
$korpo="informoj";
$persono_id=$_SESSION["persono_id"];
if ($persono_id=="") {header("Location:index.php?erarkodo=8");}
$persono = apartigiPersonon($persono_id);
include "pagxkapo.inc.php";
?>



	<div class="row">
		<article class="col s12 m9 l6 offset-m1 offset-l1">
			<h1>Statistiques</h1>
			<section id="enhavo">

			<div class="col l6">
				<h2>Tableau d'honneur</h2>
				<ul class="tabs">
        			<li class="tab col s3"><a href="#tableauHonneurSemaine">Par semaine</a></li>
        			<li class="tab col s3"><a href="#tableauHonneurMois">Par mois</a></li>
        			<li class="tab col s3"><a href="#tableauHonneurAn">Par an</a></li>
      			</ul>

      			<div id="tableauHonneurSemaine">
      			<?php listi_tableauHonneur("semajno",$persono_id);?>
      			</div>
      			<div id="tableauHonneurMois">
      			<?php listi_tableauHonneur("monato",$persono_id);?>
      			</div>
      			<div id="tableauHonneurAn">
      			<?php listi_tableauHonneur("jaro",$persono_id);?>
      			</div>
			</div>


			</section>
		</article>
		
		<aside class="col s12 m10 l4 offset-m1 offset-l1">


			<ul class="collapsible" data-collapsible="expandable">

			<li>
				<div class="collapsible-header"><a href="personinformoj.php">Outil de révision du vocabulaire</a></div>
				<div class="collapsible-header"><a href="personinformoj.php">Données personnelles</a></div>
			</li>
		</ul>	


		</aside>

	</div>
	
<?php include "pagxpiedo.inc.php";?>		