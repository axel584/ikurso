<?php
include "util.php";
$pagxtitolo="stirpanelo";
$korpo="hejmo";
if (isset($celpersono_id)) {$celpersono = apartigiPersonon($celpersono_id);}
include "pagxkapo.inc.php";
?>

<div class="row">
	<aside class="col s12 m3">
		<ul class="collection">
			<li class="collection-item active"><div>Carnet de bord<a href="#!" class="secondary-content"></a></div></li>
			<li class="collection-item"><div>Correcteurs<a href="#!" class="secondary-content"></a></div></li>
			<li class="collection-item"><div>Leçons<a href="#!" class="secondary-content"></a></div></li>
		</ul>
	</aside>

	<article class="col s12 m9">
		<h1>Carnet de bord</h1>
		<div class="card-panel blue lighten-5 row">
			<p class="col s6 m3"><span class="label">Début : </span><input id="debut" name="debut" type="date" value="" class="datepicker" /></p>
			<p class="col s6 m3"><span class="label">Fin : </span><input id="fin" name="fin" type="date" value="" class="datepicker" /></p>
			<p class="col s6 m3"><span class="label">Type : </span><input type="text" name="type" value="" /></p>
			<p class="col s6 m3"><span class="label">Utilisateur : </span><input type='text' name='persono_id' value="" /></p>
			<p class="col s12"><a href="" class="btn waves-effect waves-light blue right">Afficher</a></p>
		</div>

		<table class="striped">
			<th><td>Date</td><td>Personne</td><td>Type</td><td>Message</td></th>
			<tr><td>&nbsp;</td><td>14/07/2017</td><td>584</td><td>Envoi RAPPEL</td><td>Envoi d'un message de rappel après 6 jours</td></tr>
			<tr><td>&nbsp;</td><td>14/07/2017</td><td>584</td><td>Envoi RAPPEL</td><td>Envoi d'un message de rappel après 6 jours</td></tr>
			<tr><td>&nbsp;</td><td>14/07/2017</td><td>584</td><td>Envoi RAPPEL</td><td>Envoi d'un message de rappel après 6 jours</td></tr>
			<tr><td>&nbsp;</td><td>14/07/2017</td><td>584</td><td>Envoi RAPPEL</td><td>Envoi d'un message de rappel après 6 jours</td></tr>
			<tr><td>&nbsp;</td><td>14/07/2017</td><td>584</td><td>Envoi RAPPEL</td><td>Envoi d'un message de rappel après 6 jours</td></tr>
			<tr><td>&nbsp;</td><td>14/07/2017</td><td>584</td><td>Envoi RAPPEL</td><td>Envoi d'un message de rappel après 6 jours</td></tr>
		</table>
	</article>

			
</div>
<?php include "pagxpiedo.inc.php"; ?>