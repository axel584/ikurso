<?php
include "util.php";
$pagxtitolo="Quoi de neuf ?";
$korpo="hejmo";
malfermiDatumbazon();
include "pagxkapo.inc.php";
?>

<div class="row">
	<article class="col s12 m10 l7 offset-m1 offset-l2">
		<section id="kionova">
			<h1>Quoi de neuf dans le site ?</h1>
			<ul class="collection with-header">
				<li class="collection-header">version 17. Septembre 2017</li>
				<li class="collection-item">
					<p>Mise à jour des explications sur les claviers en espéranto dans la page <a href="<?php echo $vojo;?>helpo.php?section=kielskribi">Comment écrire en espéranto ?</a>.</p>
					<p>Création d’une page <a href="<?php echo $vojo;?>helpo.php?section=kajposte">Que faire après le cours&nbsp;?</a> pour présenter différentes façon de pratiquer l’espéranto.</p>
					<p>Enrichissement des explications dans les pages <a href="<?php echo $vojo;?>helpo.php?section=enskribo">Comment s’inscrire&nbsp;?</a> et <a href="<?php echo $vojo;?>helpo.php?section=kurso">Comment suivre le cours&nbsp;?</a>.</p>
					<p>Amélioration de la mise en page dans la <a href="<?php echo $vojo;?>fr/cge/lec08.php?section=1">leçon 8</a>.</p>
					<p>Ajout d’une section sur les revues en espéranto dans la <a href="<?php echo $vojo;?>fr/cge/lec09.php?section=7">leçon 9</a> du Cours en dix leçons</p>
					<p>Création de l'adresse <a href="https://ikurso.fr">ikurso.fr</a> pour accéder directement au site</p>
					<p>Corrections diverses de bugs et coquilles…</p>
				</li>			
				<li class="collection-header">version 16. Juillet 2017</li>
				<li class="collection-item">
					<p>Ajout de la correction automatique pour les élèves, avec les réponses soulignées en vert si elles sont bonnes.</p>
					<p>Ajout de la correction automatique pour les correcteurs, avec les bonnes réponses en vert.</p>
					<p>Affichage des associations locales dans la page <a href="<?php echo $vojo;?>personinformoj.php">Mes données personnelles</a>.</p>
					<p>Correction dans la feuille de style pour imprimer les pages (meilleure gestion des images).</p>
					<p>Sauvegarde automatique des réponses des élèves (afin que rien ne soit perdu s’il change de page).</p>
					<p>Ajout d’un lien plus explicite dans le message d’activation du compte.</p>
					<p>Corrections diverses de bugs et coquilles…</p>
				</li>			
				<li class="collection-header">version 15. Mai 2017</li>
				<li class="collection-item">
					<p>Ajout d’explications dans les exercices pour écrire les lettres accentuées à partir de la méthode <em>x</em>.</p>
					<p>Ajout d’explications sur le COD dans la <a href="<?php echo $vojo;?>fr/cge/lec02.php?section=3">leçon 2 du cours en 10 leçons</a>. (merci Patrice&nbsp;!)</p>
					<p>Ajout des durées moyennes pour étudier chaque section du cours en 10 leçons.</p>
					<p>Ajout de légendes dans les statistiques des élèves.</p>
					<p>Simplification de la page de gestion pour les correcteurs.</p>
					<p>Correction d’un bug qui empêchait l’affichage de la date de naissance dans les données personnelles.</p>
					<p>Ébauche d’un corrigé type pour les correcteurs (à continuer).</p>
					<p>Amélioration de la rubrique <a href="helpo.php">Informations Pratiques</a></p>
					<p>Corrections diverses de bugs et coquilles…</p>
				</li>				
				<li class="collection-header">version 14. Avril 2017</li>
				<li class="collection-item">
					<p>Correction dans les points de grammaire des chapitres <a href="<?php echo $vojo;?>fr/gerda/cxap23.php?section=2">23</a> et <a href="<?php echo $vojo;?>fr/gerda/cxap24.php?section=2">24</a> de <em>Gerda malaperis</em>.</p>
					<p>Ajout d’un <a href="<?php echo $vojo;?>fr/gerda/temaro.php">index grammatical</a> au cours <em>Gerda malaperis</em>.</p>
					<p>Ajout d’illustrations et d’un exercice dans la <a href="<?php echo $vojo;?>fr/cge/lec07.php?section=5">leçon 7</a> pour apprendre l'heure.</p>
					<p>Ajout d’illustrations et d’explications sur les participes dans la <a href="<?php echo $vojo;?>fr/cge/lec08.php?section=1">leçon 8</a>.</p>
					<p>Ajout d'un outil pour que les correcteurs puissent recevoir de nouveau une leçon qu’ils n'auraient pas reçue.</p>
					<p>Utilisation d’un autre serveur de messagerie pour contrer les problèmes de non-réception des messages d’activation.</p>
					<p>Corrections diverses de bugs et coquilles…</p>
				</li>				
				<li class="collection-header">version 13. Mars 2017</li>
				<li class="collection-item">
					<p>Possibilité d'imprimer les leçons.</p>
					<p>Ajout d’outils statistiques.</p>
					<p>Ajout de l’énoncé des questions dans le message envoyé aux correcteurs.</p>
					<p>Ajout d'une page pour les correcteurs afin de consulter les exercices de leurs élèves (pour répondre temporairement aux problèmes de mails qui n'arrivent pas à leur destinataire).</p>
					<p>Corrections diverses, principalement dans le vocabulaire de l’outil de révision grâce aux remarques des élèves (merci Alain !)</p>
				</li>
				<li class="collection-header">version 12. Janvier 2017</li>
				<li class="collection-item">
					<p>Certaines prépositions sont abordées dans les premières leçons (Cours en 10 leçons) : <em>en</em> dans la <a href="<?php echo $vojo;?>fr/cge/lec01.php?section=1">section 1.7</a>, <em>antaŭ</em>, <em>sub</em>, <em>sur</em>, <em>super</em> dans la <a href="<?php echo $vojo;?>fr/cge/lec02.php?section=4">section 2.4</a>, <em>apud</em>, <em>ĉe</em>, <em>al</em>, <em>de</em>, <em>el</em> dans la <a href="<?php echo $vojo;?>fr/cge/lec04.php?section=6">section 4.6</a></p>
					<p>Des exercices pour pratiquer les prépositions ont été ajoutés dans la <a href="<?php echo $vojo;?>fr/cge/lec02.php?section=5">leçon 2</a>, la <a href="<?php echo $vojo;?>fr/cge/lec04.php?section=7">leçon 4</a> et la <a href="<?php echo $vojo;?>fr/cge/lec06.php?section=7">leçon 6</a>.</p>
					<p>Correction de coquilles dans les listes de vocabulaire et correction de bugs dans l’outil d’apprentissage du vocabulaire, notamment pour la prise en compte de la ponctuation et des lettres accentuées.</p>
					<p>Correction de problèmes posés pour l’envoi des courriels vers certaines adresses (dont @orange, @wanadoo et @yahoo)</p>
					<p>Possibilité de publier son attestation de fin de cours sur Facebook.</p>
				</li>
				<li class="collection-header">version 11. Novembre 2016</li>
				<li class="collection-item">
					<p>Certains corrélatifs sont maintenant abordés dans les 4 premières leçons (Cours en 10 leçons) : <em>kie</em> et <em>kie</em> dans la <a href="<?php echo $vojo;?>fr/cge/lec01.php?section=9">section 1.9</a>, <em>kiel</em> et <em>tiel</em> dans la <a href="<?php echo $vojo;?>fr/cge/lec02.php?section=11">section 2.11</a>, <em>kiom</em> dans la <a href="<?php echo $vojo;?>fr/cge/lec03.php?section=8">section 3.8</a> et <em>kio</em> et <em>tio</em> dans la <a href="<?php echo $vojo;?>fr/cge/lec03.php?section=12">section 3.12</a>.</p> 
						<p>Des exercices pour pratiquer ont été ajoutés dans la <a href="<?php echo $vojo;?>fr/cge/lec01.php?section=10">leçon 1</a> et la <a href="<?php echo $vojo;?>fr/cge/lec03.php?section=13">leçon 3</a>.</p>
					<p>Ajout d’une section sur <a href="<?php echo $vojo;?>fr/cge/lec04.php?section=9">la date</a> dans la leçon 4, avec un exercice de mise en pratique, ainsi qu’une section sur <a href="<?php echo $vojo;?>fr/cge/lec04.php?section=13">la musique espérantophone</a> (Cours en 10 leçons).</p>
					<p>Mise en place de l’outil d’<a href="<?php echo $vojo;?>memoriVortojn.php">apprentissage du vocabulaire</a> dans le cours <em>Gerda malaperis</em>.</p>
					<p>Ajout d’un outil de recherche dans le <a href="<?php echo $vojo;?>fr/cge/vocabula.php">lexique du Cours en 10 leçons</a>.</p>
					<p>Création de la page <a href="<?php echo $vojo;?>kionova.php">QUOI DE NEUF ?</a></p>
					<p>Corrections diverses</p>
				</li>
				<li class="collection-header">version 10. Octobre 2016</li>
				<li class="collection-item">
					<p>Création d’un outil d’<a href="<?php echo $vojo;?>memoriVortojn.php">apprentissage du vocabulaire</a> dans le Cours en 10 leçons.</p>
					<p>Création d’une page <a href="<?php echo $vojo;?>butiko.php">BOUTIQUE</a></p>
					<p>Ajout d‘un lien vers la page Facebook d’Espéranto-France</p>
					<p>Ajout de témoignages sur la page d‘accueil</p>
					<p>Corrections diverses</p>
				</li>
				<li class="collection-header">version 9. Octobre 2016</li>
				<li class="collection-item">
					<p>Enregistrement des réponses aux exercices pour faciliter l’étude d’une leçon en plusieurs fois</p>
					<p>Amélioration de la page <a href="<?php echo $vojo;?>personinformoj.php">Données personnelles</a>&nbsp;: ajout d‘un bouton pour aller directement à la page à étudier</p>
					<p>Ajout d’une page à la fin de chaque chapitre de <em>Gerda malaperis</em> pour l’envoi des exercices</p>
					<p>Amélioration de la page d’<a href="<?php echo $vojo;?>fr/cge/intro.php">introduction du Cours en 10 leçons</a></p>
					<p>Corrections diverses</p>
				</li>
				<li class="collection-header">version 8. Septembre 2016</li>
				<li class="collection-item">
					<p>Ajout d’un récapitulatif des exercices à la fin de chaque leçon (Cours en 10 leçons)</p>
					<p>Permette aux utilisateurs non inscrit d’accéder aux cours</p>
					<p>Amélioration de la présentation des corrélatifs dans la <a href="<?php echo $vojo;?>fr/cge/lec05.php?section=2">leçon 5</a> (Cours en 10 leçons)</p>
					<p>Envoi de messages de rappels aux élèves non connectés depuis un mois</p>
					<p>Ajout d’une section de vocabulaire avec des phrases clés de conversation courante dans la<a href="<?php echo $vojo;?>fr/cge/lec02.php?section=11"> leçon 2</a> (Cours en 10 leçons)</p>
					<p>Nouvelle présentation pour les QCM (Cours en 10 leçons). Amélioration de l’affichage des QCM sur tablette</p>
					<p>Corrections diverses</p>
				</li>

			</ul>
		</section>
	</article>
</div>

<?php include "pagxpiedo.inc.php";?>
