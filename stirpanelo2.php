<?php
include "util.php";
$pagxtitolo="stirpanelo";
$korpo="hejmo";
if (isset($celpersono_id)) {$celpersono = apartigiPersonon($celpersono_id);}
include "pagxkapo.inc.php";
?>

	<div class="row">
		<div class="col s12">
			<ul class="stirpanelo tabs">
				<li class="tab col s3"><a class="active" href="#stirpanelo">Carnet de bord</a></li>
				<li class="tab col s3"><a href="#korektantoj">Correcteurs</a></li>
				<li class="tab col s3"><a href="#lecionoj">Leçons</a></li>
			</ul>
		</div>
	</div>
	      
	<div id="stirpanelo" class="row">
		<div class="col s12">
			<h1>Carnet de bord</h1>
			<div class="card-panel blue lighten-5 row">
				<p class="col s6 m3"><span class="label">Début : </span><input id="debut" name="debut" type="date" value="" class="datepicker" /></p>
				<p class="col s6 m3"><span class="label">Fin : </span><input id="fin" name="fin" type="date" value="" class="datepicker" /></p>
				<p class="col s6 m3"><span class="label">Type : </span><input type="text" name="type" value="" /></p>
				<p class="col s6 m3"><span class="label">Utilisateur : </span><input type='text' name='persono_id' value="" /></p>
				<p class="col s12"><a href="" class="btn waves-effect waves-light blue right">Afficher</a></p>
			</div>
		
			<div class="col s12">
				<h2>Résultats de la requête :</h2>
				<table class="striped">
					<th><td>Date</td><td>Personne</td><td>Type</td><td>Message</td></th>
					<tr><td>&nbsp;</td><td>14/07/2017</td><td>584</td><td>Envoi RAPPEL</td><td>Envoi d'un message de rappel après 6 jours</td></tr>
					<tr><td>&nbsp;</td><td>14/07/2017</td><td>584</td><td>Envoi RAPPEL</td><td>Envoi d'un message de rappel après 6 jours</td></tr>
					<tr><td>&nbsp;</td><td>14/07/2017</td><td>584</td><td>Envoi RAPPEL</td><td>Envoi d'un message de rappel après 6 jours</td></tr>
					<tr><td>&nbsp;</td><td>14/07/2017</td><td>584</td><td>Envoi RAPPEL</td><td>Envoi d'un message de rappel après 6 jours</td></tr>
					<tr><td>&nbsp;</td><td>14/07/2017</td><td>584</td><td>Envoi RAPPEL</td><td>Envoi d'un message de rappel après 6 jours</td></tr>
					<tr><td>&nbsp;</td><td>14/07/2017</td><td>584</td><td>Envoi RAPPEL</td><td>Envoi d'un message de rappel après 6 jours</td></tr>
				</table>
			</div>
		</div>
	</div>
	
	<div id="korektantoj" class="row">
		<div class="col s12">
			<h1>Correcteur</h1>
			<div class="card-panel blue lighten-5 row">
				<p class="col s4">option</p>
				<p class="col s4">option</p>
				<p class="col s4">etc</p>
				<p class="col s12"><a href="" class="btn waves-effect waves-light blue">Afficher</a></p>
			</div>
			<div class="col s12">
				<h2>Résultats de la requête :</h2>
			</div>
		</div>
	</div>

	<div id="lecionoj" class="row">
		<div class="col s12">
			<h1>Leçons</h1>
			<div class="card-panel blue lighten-5 row">
				<p class="col s4">option</p>
				<p class="col s4">option</p>
				<p class="col s4">etc</p>
				<p class="col s12"><a href="" class="btn waves-effect waves-light blue">Afficher</a></p>
			</div>
			<div class="col s12">
			</div>
		</div>
	</div>
			
</div>
<?php include "pagxpiedo.inc.php"; ?>