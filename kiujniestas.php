<?php
include "util.php";
$pagxtitolo="Qui sommes-nous";
$korpo="hejmo";
malfermiDatumbazon();
$persono_id = isset($_SESSION["persono_id"]) ? $_SESSION["persono_id"] : "";
$erarkodo = isset($_GET['erarkodo']) ? $_GET['erarkodo'] : "";
if ($persono_id) {
	$persono = apartigiPersonon($persono_id);
}
include "pagxkapo.inc.php";
?>
<div class="row">
	<article class="col s12 m10 l7 offset-m1 offset-l2">
		<h1>Qui sommes-nous ?</h1>
		<div class="row">
			<div class="col s12 m9">
			<p>Ce site de cours d’espéranto <em>iKurso</em> est hébergé par l’association <a href="https://esperanto-france.org">Espéranto-France</a>. Cette association de loi de 1901 a pour objectif de faire connaître et enseigner l’espéranto. </p>
			</div>
			<div class="col s12 m3">
				<img src="<?php echo $vojo;?>bildoj/logo-UFE.png" class="responsive-img">
			</div>
		</div>
		<div class="row">
			<div class="col s12">
				<p>L’association Espéranto-France édite des <a href="https://esperanto-france.org/methodes-et-dictionnaires">dictionnaires et des méthodes d’apprentissage de l’espéranto</a> ainsi que <a href="https://esperanto-france.org/boutique">différents livres</a> en espéranto comme <a href="https://esperanto-france.org/le-petit-prince-esperanto"><em>Le Petit Prince</em></a>.</p>
				<p>L’association publie une revue trimestrielle, <a href="https://esperanto-france.org/le-monde-de-l-esperanto"><em>Le Monde de l’espéranto</em></a>.</p>
			</div>
		</div>
		<div class="row">
			<div class="col s12 m3">
				<p><img src="<?php echo $vojo;?>bildoj/LME584.jpg" class="responsive-img"></p>
			</div>
			<div class="col s12 m9">
				<p>Il est possible d’adhérer à l’association afin de soutenir son action, mais l’adhésion à l’association n’a aucun caractère obligatoire pour pouvoir profiter du service de correction. Il est également possible de s’investir humainement dans l’association, par exemple en postulant au conseil d’administration de l’association qui vote les projets qui seront réalisés.</p>
			</div>
		</div>

		<div class="row">
			<div class="col s12">
				<p>Les cours en ligne sont corrigés par une équipe de bénévoles et sont donc totalement gratuits. Certains des bénévoles ont appris l’espéranto grâce aux cours en ligne, mais il n’y a aucune obligation pour les élèves de devenir bénévoles à la suite du cours. Il convient donc aux élèves de respecter le travail des correcteurs et de les tenir informés des éventuels retards à l’envoi des leçons.</p>
			</div>
		</div>

		<div class="row">
			<div class="col s12">
				<p>Le <em>Cours en 10 leçons</em> est un cours d’espéranto du domaine public. Les photos accompagnant le cours viennent de banques d’images à diffusion pédagogique.</p>
			</div>
		</div>

		<div class="row">
			<div class="col s12 m9">
				<p>Le cours <em>Gerda Malaperis</em> a été écrit par <a href="http://claudepiron.free.fr/">Claude Piron</a>. Sa diffusion est autorisée dans le cadre d’une utilisation non commerciale. Les dessins d’illustration appartiennent à <a href="http://lernu.net">lernu.net</a> qui nous a gentiment autorisés à les publier pour illustrer le cours. Les enregistrements des textes de <em>Gerda Malaperis</em> sont autorisés à diffusion dans un cadre non commercial.</p>
			</div>
			<div class="col s12 m3">
				<img src="<?php echo $vojo;?>bildoj/gerda-kovrilo.jpg" class="responsive-img">
			</div>
		</div>
	</article>
</div>
<?php include "pagxpiedo.inc.php";?>
