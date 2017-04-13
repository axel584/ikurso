 <?php
include "util.php";
$pagxtitolo="Données personnelles";
$korpo="informoj";
$persono_id=$_SESSION["persono_id"];
if ($persono_id=="") {header("Location:index.php?erarkodo=8");}
$persono = apartigiPersonon($persono_id);
$nbjours=isset($_GET['nbjours'])?$_GET['nbjours']:"12";
$nbeleves=isset($_GET['nbeleves'])?$_GET['nbeleves']:"5";
include "pagxkapo.inc.php";
?>

	<div class="row">
		<article class="col s12 m10 l7 offset-m1 offset-l1">
			<h1>Statistiques - vocabulaire</h1>
			<section id="enhavo_memorilo">

				<div class="row">
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
					<div class="col l6">
						<h2>Mot par force</h2>
						<div id="chart_div_mots_par_force"></div>
						<p>La force correspond au nombre de fois où vous avez correctement trouvé le mot consécutivement. Si vous vous trompez sur un mot, ce nombre retourne à zéro et le mot retourne dans la catégorie "à apprendre".</p>
						<p> Après 4 bonnes réponses successives, ce mot est rentrée dans votre mémoire à long terme.</p>
					</div>
				</div>
			</section>
			<h1>Statistiques - leçons</h1>
			<section id="enhavo_memorilo">
				<div class="row">
					<div class="col l12">
						<h2>Évolution</h2>
						<!--Nombre de jours : <input type="text" name="nbjours" value="15"> / 
						Nombre d'élèves : <input type="text" name="nbeleves" value="5">-->
						<div id="chart_div_evolution"></div>
					</div>
					<div class="col l6">
					<!-- que mettre ici ? -->
					<!-- On peut lister les sections qui n'ont pas été faite (mais pour lesquels il existe d'autres sections non faite après) -->
					<!-- on peut aussi faire un calendrier des jours où des sections ont été faite -->
					<!-- on peut aussi faire la liste des sections faites/non faites -->
					<?php //statEvolution($persono_id); ?>
					</div>
				</div>
			</section>
		</article>

		
		<aside class="col s12 m10 l3 offset-m1 push-l1">


			<ul class="collapsible" data-collapsible="expandable">

			<li>
				
				<div class="collapsible-header"><a href="personinformoj.php">Données personnelles</a></div>
				<div class="collapsible-header"><a href="memoriVortojn.php">Outil de révision du vocabulaire</a></div>
			</li>
		</ul>	


		</aside>

	</div>
	
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">

      // Load the Visualization API and the corechart package.
      google.charts.load('current', {'packages':['corechart','scatter']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.charts.setOnLoadCallback(drawMotParForceChart);
      google.charts.setOnLoadCallback(drawEvolutionChart);

      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.
      function drawMotParForceChart() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');
        data.addRows([
        	<?php statMotsParForce($persono_id); ?>
        ]);

        // Set chart options
 		var options = {
          title: 'Nombre de mots par force',
          pieSliceText : 'value',
          is3D: true,
        };

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('chart_div_mots_par_force'));
        chart.draw(data,options);
      }


      function drawEvolutionChart() {

     var data = google.visualization.arrayToDataTable([
     	<?php statEvolution($persono_id,$nbjours,$nbeleves); ?>
        ]);

        var options = {
          title: 'Pages de cours terminées',
          curveType: 'function',
          interpolateNulls: true,
          //width:1200,
          //height:400,
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('chart_div_evolution'));

        chart.draw(data, options);
      }

    </script>

<?php include "pagxpiedo.inc.php";?>		