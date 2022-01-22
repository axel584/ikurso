<?php
$titolo="10 (dek)";
$leciono = 10;
$section=isset($_GET["section"])?htmlspecialchars($_GET["section"]):"1";
if (!is_numeric($section)) {
	if ($persono_id=="") {header("Location:../../index.php?erarkodo=24");}
}
include "dlekkapo.inc.php";
?>

<div class="row">
	<article class="col s12 m10 l7 offset-m1 offset-l1">
				
		<section id="leciono-enhavo">
		
		<?php 
		getTitoloLecionero('CG',10,$section);
		displayWarningSiLecioneroManquante($persono_id,'CG',$leciono,$section);

		if ($section=="1") {
		?>

			<p>
			Vous voilà rendu à la 10<sup>e</sup> et dernière leçon de votre cours. Elle
			consistera en un examen de niveau A1 qui nous permettra d’évaluer vos connaissances de l’espéranto écrit. Votre tuteur le corrigera comme
			d’habitude, et vous recevrez un <i>atestilo</i> (attestation de fin de cours).
			</p>
			<p>Cet examen est entièrement en espéranto, il est constitué d'une partie d'explication concernant les notes à obtenir et de 3 parties : <br/>
				- Une partie comprehension orale (<i>Parola komprenado</i>) d'une durée de 20 minutes. Noté sur 25 points.<br/>
				- Une partie comprehension écrite (<i>Skriba komprenado</i>) d'une durée de 30 minutes. Noté sur 25 points.<br/>
				- Une partie production écrite (<i>Skriba produktado</i>) d'une durée de 30 minutes. Noté sur 25 points.<br/>
				Avec la lecture des explications, il convient donc d'avoir environ une heure trente de temps disponible devant vous pour pouvoir effectuer cet examen. Nous vous déconseillons de le faire en plusieurs fois (même si cela est techniquement possible), car cela fausserait le résultat.
			</p>
			<p>L'usage du dictionnaire est interdit (que ce soit en ligne ou papier). Rechercher des informations dans le reste du cours est également interdit. Bien sûr, il n'y a pas de possibilité technique de vous en empêcher et la fiabilité de la note que vous obtiendrez dépendra de votre respect des consignes. De la même façon, les enregistrements audio sont fait pour être lancé une seule fois, vous entendrez le texte une première fois, suivi d'une pause de 30 secondes et d'une deuxième écoute (sans que vous ayez besoin de relancer la lecture). En respectant la consigne, vous vous assurerez d'une meilleure estimation de votre niveau.
			</p>
			<p>Il est possible que vous ne connaissez pas la réponse à certaines questions, que vous ne connaissez pas certains mots, que vous ne comprenez pas certains mots dans les enregistrements. Cela est tout à fait normal et il ne faut pas hésiter à passer certaines questions pour revenir dessus après. Pour réussir l'examen, vous devez obtenir 50% des points sur l'ensemble des parties et au moins 5 points dans chacune des parties.<br/>Pour la partie compréhension orale, nous vous conseillons de lire une première fois les questions avant de lancer l'enregistrement audio.<br/>Vous pouvez bien sûr vous munir d'une feuille de papier brouillon pour prendre des notes pendant l'enregistrement.
			</p>

		<?php 
		} 
		if ($section=="2") {
		?>

<table><thead><tr><th>Naturo de la ekzamen-partoj</th><th>Daŭro</th><th>Noto</th></tr></thead>
	<tbody>
		<tr><td><b>Parola komprenado</b> :<br/>Respondo al demandaro pri tri aŭ kvar tre mallongaj dokumentoj registritaj kiuj temas pri ĉiutagaj situacioj. (du aŭskultoj)<br/>Maksimuma daŭro de la aŭskultotaj dokumentoj : 3 minutoj</td>
		<td>Proksimume 20 minutoj </td><td>/25</td></tr>
<tr><td><b>Pkriba komprenado</b> :<br/>Respondo al demandaro pri tri aŭ kvar skribaj dokumentoj kiuj temas pri ĉiutagaj situacioj.</td>
		<td>30 minutoj </td><td>/25</td></tr>
	<tr><td><b>PSkriba produktado</b> :<br/>Ekzamen-objekto el du partoj :<br/>-  Kompletigu slipon, formularon, dialogon...<br/>-  Redaktu per simplaj frazoj poŝtkarton, mesaĝon, tekston… pri temoj de ĉiutaga vivo.</td>
		<td>30 minutoj </td><td>/25</td></tr>
	<tr><td><b>Sumo</b> :</td><td>1 horo kaj 30 minutoj </td><td>/75</td></tr>		
</tbody>
</table>

<p>Sukcesa sojlo por akiri diplomon : 37,5/75<br/>
Minimuma noto bezonata por ĉiu testo : 5/25<br/>
Daŭro de la tuta testo : 1 horo kaj 20 minutoj  </p>

		<?php 
		} 
		if ($section=="3") {
		?>
		<?php 
		} 
		if ($section=="4") {
		?>		
		<?php 
		} 
		if ($section=="5") {
		?>		
		<?php 
		} // fin section
		if ($section=="6") {
		?>
		
		<p>Bravo&nbsp;! Vous avez terminé, il ne vous reste qu'à envoyer vos réponses à votre correcteur. Une fois que celui ci aura corrigé vos réponses, vous pourrez consulter votre attestation de réussite dans votre espace personnel.</p>
		
		<p>Afin de continuer votre apprentissage, vous pouvez suivre le cours <i>Gerda Malaperis</i>, basé sur une histoire policière, ce cours vous permettra d'enrichir votre vocabulaire et de consolider vos connaissances de la langue.</p>
		
		<p>Bonne continuation dans le monde de l'espéranto&nbsp;!</p>
		
		<?php 
			recapitulatif_lecon_avant_envoi('CG',$leciono,$persono_id);
		} // fin derniere section
		?>	
		</section>

		<section id="leciono-fino">
			<div id="marko" class="right-align">
				<?php getBoutonFinSection('CG',$leciono,$section,$persono_id); ?>
				<a id="farita" class="btn-floating btn-large light-blue darken-1 hide"><i class="material-icons">done_all</i></a>
			</div>
			<div class="ligoj">
				<?php getLecioneroAntauxa('CG',$leciono,$section); ?>
				<?php getLecioneroVenonta('CG',$leciono,$section); ?>
			</div>
		</section>

	</article>
			
	<aside class="col s12 m10 l3 offset-m1 push-l1">
								
		<?php
			// lien vers la révision du vocabulaire
			getLigiloAlMemorilo($persono_id);
		?>

		<ul class="collapsible" data-collapsible="expandable">

			<?php 
			// On affiche le sommaire de la lecon
			getEnhavtabelo('CG',$leciono); 
			?>

		</ul>	
		
		<?php
		pubAndroid();
		pubFacebook();
		?>
				
	</aside>
</div>
<?php include "dlekpiedo.inc.php"; ?>
