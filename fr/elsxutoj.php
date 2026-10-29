<?php
$vojo="../";
include "../util.php";
$subjekto="elsxutoj.php";
$korpo="informoj";
$pagxtitolo="Cours d’espéranto en PDF gratuit à télécharger";
$pagxpriskribo="Cours d’espéranto en 10 leçons en PDF à imprimer, avec son cahier d’exercices et son lexique, le Kurso de Esperanto en PDF, les textes audio de Gerda malaperis et un paquet Anki. Gratuit.";
include "../pagxkapo.inc.php";
?>

	<div class="row">
		<article class="col s12 m10 l7 offset-m1 offset-l2">
			<h1>Cours d’espéranto en PDF et documents à télécharger</h1>

			<p>Tous ces documents sont gratuits. Pour apprendre, nous vous conseillons plutôt la version en ligne des cours&nbsp;:
				elle est plus récente, avec des enregistrements audio, et un correcteur bénévole peut corriger vos exercices.</p>

			<h2>Cours et exercices en PDF à imprimer</h2>
			<p class="eta"><b>Note</b> : ces PDF correspondent à une version antérieure du cours. La progression et le contenu (textes et exercices) sont un peu différents de la version en ligne.</p>

			<h3>Cours d’espéranto en dix leçons</h3>
			<ul>
				<li><a href="<?php echo $vojo;?>doc/DLEK.pdf">Cours d’espéranto en dix leçons</a> (PDF, 53 pages, 476 Ko)&nbsp;:
					prononciation, grammaire et vocabulaire de base, leçon par leçon, avec des exemples traduits en français.</li>
				<li><a href="<?php echo $vojo;?>doc/DLEK-ekz.pdf">Cahier d’exercices du cours en dix leçons</a> (PDF, 23 pages, 223 Ko)&nbsp;:
					les exercices de chaque leçon, à imprimer et à remplir.</li>
				<li><a href="<?php echo $vojo;?>doc/LexiqueDLEK-Ikurso.pdf">Lexique du cours en dix leçons et du Kurso de Esperanto</a> (PDF, 8 pages, 55 Ko)&nbsp;:
					les mots nécessaires pour les exercices, en français et en espéranto, avec la leçon où ils apparaissent.</li>
			</ul>
			<p><a href="<?php echo $vojo;?>fr/cge/intro.php" class="btn waves-effect waves-light primaire">Suivre le cours en ligne</a></p>

			<h3>Kurso de Esperanto</h3>
			<ul>
				<li><a href="<?php echo $vojo;?>doc/ikurso.pdf">Kurso de Esperanto : cours et exercices</a> (PDF, 71 pages, 935 Ko)&nbsp;:
					les 12 leçons du logiciel Kurso de Esperanto, l’examen final, les corrigés des exercices et le tableau des corrélatifs.</li>
			</ul>
			<p>Le logiciel multimédia <a href="http://www.kurso.com.br/">Kurso de Esperanto</a> (Windows, Linux et Mac) est gratuit lui aussi.</p>

			<h2>Fichiers audio</h2>
			<ul>
				<li>Les textes de <a href="<?php echo $vojo;?>fr/gerda/son/gerda-malaperis.zip"><em>Gerda malaperis</em> en version audio (MP3)</a>&nbsp;:
					le roman lu chapitre par chapitre. Le cours <a href="<?php echo $vojo;?>fr/gerda/"><em>Gerda malaperis</em></a>, qui suit le cours en dix leçons, est en ligne.</li>
				<li>Les récits 2 à 7 de <a href="<?php echo $vojo;?>fr/gerda/son/lasu.zip"><em>Lasu min paroli plu</em> en version audio (MP3)</a>.</li>
			</ul>

			<h2>Liste de vocabulaire</h2>
			<ul>
				<li><a href="ikurso.apkg">Paquet pour le logiciel Anki</a> (apkg, 54 Ko)&nbsp;: le vocabulaire du cours en dix leçons.</li>
			</ul>

			<h2>Logiciels tiers</h2>
			<ul>
				<li><a href="http://nantes-esperanto.fr/logiciel-vortujo/">Vortujo</a> : développé par Christian Rivière, ce logiciel a pour but d’aider à la mémorisation du vocabulaire d’une langue étrangère. Fonctionne sous Windows.</li>
			</ul>
		</article>
	</div>

<?php include "../pagxpiedo.inc.php"; ?>
