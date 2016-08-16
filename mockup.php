<?php
include "util.php";
$pagxtitolo="Mes élèves";
$korpo="informoj";
$persono_id=$_SESSION["persono_id"];
if ($persono_id=="") {header("Location:index.php?erarkodo=8");}
$persono = apartigiPersonon($persono_id);
include "pagxkapo.inc.php";
?>

<div class="row">
	<article class="col s12 m10 l8 offset-m1 offset-l1">
		<h1>Mes élèves</h1>

		<ul class="collapsible popout" data-collapsible="accordion" id="eleves">
			<li>
				<div class="collapsible-header">
					<i class="material-icons">keyboard_arrow_down</i>
					<div class="row">
						<p class="col s6"><b>Julielalakto</b>(Julie Lelait)<br>
							<a href="mailto">julie.lelait@hotmail.fr</a>
						</p>
						<p class="col s1">DLEK</p>
						<p class="col s3">leçon 2<br>le 07/08/2016</p>
						<p class="col s1"><span class="badge green">6</span></p>
					</div>
				</div>
				<div class="collapsible-body blue lighten-5">
					<p>inscription le : 07/05/2016</p>
					<p><b>Commentaires de l'élève :</b></p>
					<p><i>le 07/05/2016</i> : je veux connaître l'espéranto</p>
					<p><b>Vos notes :</b></p>
					<p><em>le 07/05/2016</em> : envoi mot de bienvenue</p>
					<p><em>le 07/07/2016</em> : relance</p>
					<p><a class="btn-floating"><i class="material-icons">add</i></a></p>
					<div class="footer">
						<p style="text-align: right"><a class="btn waves-effect waves-light blue">A FINI</a>&nbsp;<a class="btn waves-effect waves-light blue">A ABANDONNÉ</a></p>
					</div>
				</div>
			</li>			 
			<li>
				<div class="collapsible-header">
					<i class="material-icons">keyboard_arrow_down</i>
					<div class="row">
						<p class="col s6"><b>mamita</b> (Violette RICAUX)<br>
							<a href="mailto">vio.ricaux@orange.fr</a></p>
						<p class="col s1">Gerda</p>
						<p class="col s3">9 : Naŭa ĉapitro<br>le 02/05/2016</p>
						<p class="col s1"><span class="badge green">FINI</span></p>
					</div>
				</div>
				<div class="collapsible-body blue lighten-5">
					<p>inscription le : 22/02/2016</p>
					<p><b>Commentaires de l'élève :</b></p>

					<p><b>Vos notes :</b></p>

					<p><a class="btn-floating"><i class="material-icons">add</i></a></p>
					<div class="footer">
						<p style="text-align: right"><a class="btn waves-effect waves-light blue">A FINI</a>&nbsp;<a class="btn waves-effect waves-light blue">A ABANDONNÉ</a></p>
					</div>
				</div>
			</li>			 
			<li>
				<div class="collapsible-header">
					<i class="material-icons">keyboard_arrow_down</i>
					<div class="row">
						<p class="col s6"><b>Estéban</b> (Estéban Sanchez-Adaime)<br>
							<a href="mailto">Quanteban@gmail.com</a></p>
						<p class="col s1">DLEK</p>
						<p class="col s3">leçon 5<br>le 01/05/2016</p>
						<p class="col s1"><span class="badge red">107</span></p>
					</div>
				</div>
				<div class="collapsible-body blue lighten-5">
					<p>inscription le : 13/03/2016</p>
					<p><b>Commentaire de l'élève :</b></p>
					<p>J'espère que se cours me permettrais passer un bon moment et de me réconcilier avec l'apprentissage des langues étrangères. Je l'ai découvert en cherchant une façon d'apprendre l'espéranto. J'ai de grand espoirs dans ces leçons.
					<p><b>Vos notes :</b></p>

					<p><a class="btn-floating"><i class="material-icons">add</i></a></p>
					<div class="footer">
						<p style="text-align: right"><a class="btn waves-effect waves-light blue">A FINI</a>&nbsp;<a class="btn waves-effect waves-light blue">A ABANDONNÉ</a></p>
					</div>
				</div>
			</li>			 
			<li>
				<div class="collapsible-header">
					<i class="material-icons">keyboard_arrow_down</i>
					<div class="row">
						<p class="col s6"><b>Estéban</b> (Estéban Sanchez-Adaime)<br>
							<a href="mailto">Quanteban@gmail.com</a></p>
						<p class="col s1">DLEK</p>
						<p class="col s3">leçon 5<br>le 01/05/2016</p>
						<p class="col s1"><span class="badge red">ABANDON</span></p>
					</div>
				</div>
				<div class="collapsible-body blue lighten-5">
					<p>inscription le : 13/03/2016</p>
					<p><b>Commentaire de l'élève :</b></p>
					<p>J'espère que se cours me permettrais passer un bon moment et de me réconcilier avec l'apprentissage des langues étrangères. Je l'ai découvert en cherchant une façon d'apprendre l'espéranto. J'ai de grand espoirs dans ces leçons.
					<p><b>Vos notes :</b></p>

					<p><a class="btn-floating"><i class="material-icons">add</i></a></p>
					<div class="footer">
						<p style="text-align: right"><a class="btn waves-effect waves-light blue">A FINI</a>&nbsp;<a class="btn waves-effect waves-light blue">A ABANDONNÉ</a></p>
					</div>
				</div>
			</li>			 
		</ul>
	</article>
	
	<aside class="col s12 m10 l2 offset-m1 push-l1">
		

	</aside>

</div>
	
<?php include "pagxpiedo.inc.php";?>
