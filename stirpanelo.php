<?php
include "util.php";
$pagxtitolo="stirpanelo";
$korpo="hejmo";
if (isset($celpersono_id)) {$celpersono = apartigiPersonon($celpersono_id);}
include "pagxkapo.inc.php";
?>

<div class="row">
	<div class="col s12 m3">
		<ul class="collapsible">
			<li>
				<div class="collapsible-header"><i class="material-icons">keyboard_arrow_down</i>Carnet de bord</div>
				<div class="collapsible-body">
					<p><span class="label">Début : </span><input id="debut" name="debut" type="date" value="" class="datepicker" /></p>
					<p><span class="label">Fin : </span><input id="fin" name="fin" type="date" value="" class="datepicker" /></p>
					<p><span class="label">Type : </span><input type="text" name="type" value="" /></p>
					<p><span class="label">Utilisateur : </span><input type='text' name='persono_id' value="" /></p>
					<a href="" class="btn waves-effect waves-light blue">Afficher</a>
				</div>
			</li>
			<li>
				<div class="collapsible-header"><i class="material-icons">keyboard_arrow_down</i>Correcteurs</div>
				<div class="collapsible-body">
					<p>option</p>
					<p>etc.</p>
					<a href="" class="btn waves-effect waves-light blue">Afficher</a>
				</div>
			</li>
			<li>
				<div class="collapsible-header"><i class="material-icons">keyboard_arrow_down</i>Leçons</div>
				<div class="collapsible-body">
					<p>option</p>
					<p>etc.</p>
					<a href="" class="btn waves-effect waves-light blue">Afficher</a>
				</div>
			</li>
		</ul>
	</div>
	<div class="col s12 m9">
		<h1>Carnet de bord</h1>
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
<?php include "pagxpiedo.inc.php"; ?>