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
			consistera en un examen de niveau&nbsp;A1 qui nous permettra d’évaluer vos connaissances de l’espéranto écrit. Votre tuteur le corrigera comme
			d’habitude et vous recevrez un <i>atestilo</i> (attestation de fin de cours).
			</p>
			<p>Cet examen est entièrement en espéranto. Il comprend une introduction expliquant le déroulement de l’examen et les notes à obtenir, et deux parties&nbsp;: </p>
			<ul class="klarigo">
				<li>Une partie de compréhension orale (<i>Parola komprenado</i>) d’une durée de 20 minutes. Notée sur 25 points.</li>
				<li>Une partie de compréhension écrite (<i>Skriba komprenado</i>) d’une durée de 30 minutes. Notée sur 25 points.</li>
				<li>Une partie production écrite (<i>Skriba produktado</i>) d'une durée de 30 minutes. Noté sur 25 points.</li>
			</ul>
			<p>Il convient donc d’avoir environ <b>une heure trente</b> de temps disponible devant vous pour pouvoir lire les explications et effectuer cet examen. Nous vous déconseillons de le faire en plusieurs fois (même si cela est techniquement possible), car cela fausserait le résultat.</p>
			<p>L’usage du dictionnaire est interdit (que ce soit en ligne ou papier). Rechercher des informations dans le reste du cours est également interdit. Bien sûr, nous ne pouvons pas techniquement vous empêcher de le faire, mais la fiabilité de la note que vous obtiendrez dépendra de votre respect des consignes. De la même façon, les enregistrements audio sont conçus pour être écoutés une seule fois. Vous entendrez le texte une première fois. Cela sera suivi d’une pause de 30&nbsp;secondes puis vous entendrez le texte une deuxième fois (sans que vous ayez besoin de relancer la lecture). En respectant les consignes, vous vous assurerez d’une meilleure estimation de votre niveau.
			</p>
			<p>Il est possible que vous ne connaissiez pas la réponse à certaines questions, que vous ne connaissiez pas certains mots ou que vous ne compreniez pas certains mots dans les enregistrements. Cela est tout à fait normal et il ne faut pas hésiter à passer certaines questions pour y revenir plus tard. Pour réussir l’examen, vous devez obtenir 50&nbsp;% des points sur l’ensemble des parties et au moins 5&nbsp;points dans chacune des parties.<br/>Pour la partie de compréhension orale, nous vous conseillons de lire une première fois les questions avant de lancer l’enregistrement audio.<br/>Vous pouvez bien sûr vous munir d’une feuille de papier brouillon pour prendre des notes pendant l’enregistrement.
			</p>

		<?php 
		} 
		if ($section=="2") {
		?>

<table><thead><tr><th>Naturo de la ekzamen-partoj</th><th>Daŭro</th><th>Noto</th></tr></thead>
	<tbody>
		<tr><td><b>Parola komprenado</b>:<br/>Respondo al demandaro pri tri aŭ kvar tre mallongaj dokumentoj registritaj, kiuj temas pri ĉiutagaj situacioj. (du aŭskultoj)<br/>Maksimuma daŭro de la aŭskultotaj dokumentoj: 3 minutoj</td>
		<td>Proksimume 20&nbsp;minutoj </td><td>/25</td></tr>
<tr><td><b>Pkriba komprenado</b>:<br/>Respondo al demandaro pri tri aŭ kvar skribaj dokumentoj kiuj temas pri ĉiutagaj situacioj.</td>
		<td>30&nbsp;minutoj </td><td>/25</td></tr>
	<tr><td><b>PSkriba produktado</b> :<br/>Ekzamen-objekto el du partoj:<br/>- Kompletigu slipon, formularon, dialogon…<br/>- Redaktu per simplaj frazoj poŝtkarton, mesaĝon, tekston… pri temoj de ĉiutaga vivo.</td>
		<td>30 minutoj </td><td>/25</td></tr>
	<tr><td><b>Sumo</b>:</td><td>1&nbsp;horo kaj 30&nbsp;minutoj </td><td>/75</td></tr>		
</tbody>
</table>

<p>Sukcesa sojlo por akiri diplomon: 37,5/75<br/>
Minimuma noto bezonata por ĉiu testo: 5/25<br/>
Daŭro de la tuta testo: 1&nbsp;horo kaj 20&nbsp;minutoj  </p>

		<?php 
		} 
		if ($section=="3") {
		?>
		<h3>Unua ekzerco</h3>
		<p class="parto">Vi aŭdos dufoje dokumenton. Vi havos paŭzon de tridek sekundoj inter la du aŭskultoj kaj alian de tridek sekundoj por kontroli viajn respondojn. Unue legu la demandojn.</p>
					<fieldset class="sono">
				<legend>Aŭskultu tiun rakonton:</legend>
				<p>
					<audio id="audioPlayer" controls="controls" type="audio/mpeg">
						<source type="audio/mp3" src="<?=$vojo?>fr/cge/sonoj/A1-Final-1.mp3"/>
					</audio>
				</p>
			</fieldset>

		<?php	
			getEkzercon(286,$persono_id);
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
		
		<p>Bravo&nbsp;! Vous avez terminé, il ne vous reste qu’à envoyer vos réponses à votre correcteur. Une fois que celui-ci aura corrigé vos réponses, vous pourrez consulter votre attestation de réussite dans votre espace personnel.</p>
		
		<p>Afin de continuer votre apprentissage, vous pouvez suivre le cours <i>Gerda Malaperis</i>, basé sur une histoire policière, ce cours vous permettra d’enrichir votre vocabulaire et de consolider vos connaissances de la langue.</p>
		
		<p>Bonne continuation dans le monde de l’espéranto&nbsp;!</p>
		
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
