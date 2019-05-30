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
		
		<h2 id="asocio" class="scrollspy">L’ association Espéranto-France</h2>
		<div class="row">
			<div class="col s12 m9">
				<p class="parto">Ce site de cours d’espéranto <em>iKurso</em> est hébergé par l’association <a href="https://esperanto-france.org">Espéranto-France</a>. Cette association de loi de 1901 a pour objectif de faire connaître et enseigner l’espéranto. </p>
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
		
		<h2 id="kursoj" class="scrollspy">Les cours en ligne</h2>
		<div class="row">
			<div class="col s12">
				<p class="parto">Les cours en ligne sont corrigés par une équipe de bénévoles et sont donc totalement gratuits. Certains des bénévoles ont appris l’espéranto grâce aux cours en ligne, mais il n’y a aucune obligation pour les élèves de devenir bénévoles à la suite du cours. Il convient donc aux élèves de respecter le travail des correcteurs et de les tenir informés des éventuels retards à l’envoi des leçons.</p>
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
		
		<h2 id="datumoj" class="scrollspy">Protection des données personnelles</h2>
		<div class="row">
			<div class="col s12">
				<p class="parto">Pour s’inscrire et bénéficier du service de correction, l’utilisateur doit indiquer une adresse courriel valide, qui sera utilisée par le correcteur pour le suivi du cours et la correction des exercices. L’utilisateur peut indiquer également ses noms et prénoms, sa date de naissance et son adresse postale. Ces informations sont facultatives et peuvent à tout moment être modifiées par l’utilisateur.</p>
				<p>Ces données peuvent être utilisées par l’association pour inviter les élèves à participer à des événements organisés par Espéranto-France ou par des associations d’espéranto, leur proposer de rejoindre l'association, ou acheter des produits de la boutique. Elles peuvent également être utilisées pour informer les élèves, via la lettre d'information <a href="https://esperanto-france.org/esperanto-aktiv">Esperanto Aktiv’</a>. Enfin, les données peuvent aussi être transmises à d'autres associations d'espéranto pour informer les élèves des activités de ces associations. En aucun cas, les données récoltées ne seront revendues à des tiers.</p>
				<p>L’utilisateur dispose d'un droit de modification de ses informations personnelles via son <a href="<?php echo $vojo;?>personinformoj.php">espace personnel</a> et de suppression en utilisant le <a href="<?php echo $vojo;?>reago.php">formulaire de contact</a>, accessible depuis toutes les pages.</p>
			</div>
		</div>
	</article>
	<aside class="col s12 m10 l3 offset-m1">
		<div class="pinned">
			<ul class="collapsible">
				<li class="active">
					<div class="collapsible-header active">
						<i class="material-icons">toc</i>Sommaire
					</div>
					<div class="collapsible-body">
						<ul id="enhavtabelo" class="collection">
							<li><a href="#asocio">L’association Espéranto-France</a></li>
							<li><a href="#kursoj">Les cours en ligne</a></li>
							<li><a href="#datumoj">Protection des données personnelles</a></li>
						</ul>
					</div>
				</li>
			</ul>
		</div>
	</aside>
</div>
<?php include "pagxpiedo.inc.php";?>
