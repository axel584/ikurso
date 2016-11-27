<?php
include "util.php";
$pagxtitolo="Quoi de neuf ?";
$korpo="hejmo";
$gxisdatigDato="2016-01-21";
malfermiDatumbazon();
$persono_id = isset($_SESSION["persono_id"]) ? $_SESSION["persono_id"] : "";
$erarkodo = isset($_GET['erarkodo']) ? $_GET['erarkodo'] : "";
if ($persono_id) {
	$persono = apartigiPersonon($persono_id);
	protokolo($persono["id"],"ENIRO",$persono["enirnomo"]." eniris");
	updateLastEniro($persono_id);
	redirigeParDroits($persono);
}
include "pagxkapo.inc.php";
?>

<div class="row">
	<article class="col s12 m10 l7 offset-m1 offset-l2">
		<section id="kionova">
			<h1>Quoi de neuf dans le site ?</h1>
			<ul class="collection with-header">
				<li class="collection-header">version 11. Novembre 2016</li>
				<li class="collection-item">
					<p>Certains corrélatifs sont maintenant abordés dans les 4 premières leçons (Cours en 10 leçons). Des exercices pour pratiquer ont été ajoutés dans les leçons 1 et 3.</p>
					<p>Ajout d’une section sur la date dans la leçon 4, avec un exercice de mise en pratique, ainsi qu’une section sur la musique espérantophone (Cours en 10 leçons).</p>
					<p>Mise en place de l’outil d’apprentissage du vocabulaire dans le cours <em>Gerda malaperis</em>.</p>
					<p>Ajout d’un outil de recherche dans le lexique du Cours en 10 leçons</p>
					<p>Création de la page QUOI DE NEUF ?</p>
					<p>Corrections diverses</p>
				</li>
				<li class="collection-header">version 10. Octobre 2016</li>
				<li class="collection-item">
					<p>Création d’un outil d’apprentissage du vocabulaire dans le Cours en 10 leçons.</p>
					<p>Création d’une page BOUTIQUE</p>
					<p>Ajout d‘un lien vers la page Facebook d’Espéranto-France</p>
					<p>Ajout de témoignages sur la page d‘accueil</p>
					<p>Corrections diverses</p>
				</li>
				<li class="collection-header">version 9. Octobre 2016</li>
				<li class="collection-item">
					<p>Enregistrement des réponses aux exercices pour faciliter l’étude d’une leçon en plusieurs fois</p>
					<p>Amélioration de la page <em>Données personnelles</em> : ajout d‘un bouton pour aller directement à la page à étudier</p>
					<p>Ajout d’une page à la fin de chaque chapitre de <em>Gerda malaperis</em> pour l’envoi des exercices</p>
					<p>Amélioration de la page d’introduction du Cours en 10 leçons</p>
					<p>Corrections diverses</p>
				</li>
				<li class="collection-header">version 8. Septembre 2016</li>
				<li class="collection-item">
					<p>Ajout d’un récapitulatif des exercices à la fin de chaque leçon (Cours en 10 leçons)</p>
					<p>Permette aux utilisateurs non inscrit d’accéder aux cours</p>
					<p>Amélioration de la présentation des corrélatifs dans la leçon 5 (Cours en 10 leçons)</p>
					<p>Amélioration de l’affichage des QCM sur tablette</p>
					<p>Envoi de messages de rappels aux élèves non connectés depuis un mois</p>
					<p>Ajout d’une section de vocabulaire avec des phrases clés de conversation courante (Cours en 10 leçons)</p>
					<p>Nouvelle présentation pour les QCM (Cours en 10 leçons)</p>
					<p>Corrections diverses</p>
				</li>

			</ul>
		</section>
	</article>
</div>

<?php include "pagxpiedo.inc.php";?>
