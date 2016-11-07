<?php
include "util.php";
$pagxtitolo="Boutique";
$korpo="hejmo";
if (isset($celpersono_id)) {$celpersono = apartigiPersonon($celpersono_id);}
include "pagxkapo.inc.php";
?>
	<div class="row">
		<div class="col s12 m2 l2">
			<h2>Carnet de bord</h2>
			<p>Début : </p>
			<p>Fin : </p>
			<p>type : </p>
			<p>Utilisateur : <input type='text' name='persono_id' size='4'/></p>
			<a href="" class="btn waves-effect waves-light blue">Afficher</a>
			<h2>Correcteurs</h2>
			option 
			etc.
			<p><a href="" class="btn waves-effect waves-light blue">Afficher</a></p>
			<h2>Leçons</h2>
			option 
			etc.
			<a href="" class="btn waves-effect waves-light blue">Afficher</a>
		</div>
		<div class="col s12 m10 l10">
		<h1>résultat de la requete</h1>
		<table class="striped">
		<th><td>Date</td><td>Personne</td><td>Type</td><td>Message</td></th>
		<tr><td>&nbsp;</td><td>14/07/2017</td><td>584</td><td>ENVOIE RAPPEL</td><td>Envoie d'un message de rappel après 6 jours</td></tr>
		<tr><td>&nbsp;</td><td>14/07/2017</td><td>584</td><td>ENVOIE RAPPEL</td><td>Envoie d'un message de rappel après 6 jours</td></tr>
		<tr><td>&nbsp;</td><td>14/07/2017</td><td>584</td><td>ENVOIE RAPPEL</td><td>Envoie d'un message de rappel après 6 jours</td></tr>
		<tr><td>&nbsp;</td><td>14/07/2017</td><td>584</td><td>ENVOIE RAPPEL</td><td>Envoie d'un message de rappel après 6 jours</td></tr>
		<tr><td>&nbsp;</td><td>14/07/2017</td><td>584</td><td>ENVOIE RAPPEL</td><td>Envoie d'un message de rappel après 6 jours</td></tr>
		<tr><td>&nbsp;</td><td>14/07/2017</td><td>584</td><td>ENVOIE RAPPEL</td><td>Envoie d'un message de rappel après 6 jours</td></tr>
		</table>
		</div>

		</div>
	</div>
<?php include "pagxpiedo.inc.php"; ?>