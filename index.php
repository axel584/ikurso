<?php
include "util.php";
$pagxtitolo="Bienvenue sur le site d’iKurso !";
$korpo="hejmo";
$gxisdatigDato="2016-01-21";
malfermiDatumbazon();
$persono_id = isset($_SESSION["persono_id"]) ? $_SESSION["persono_id"] : "";
$erarkodo = isset($_GET['erarkodo']) ? $_GET['erarkodo'] : "";
if ($persono_id) {
	$persono = apartigiPersonon($persono_id);
	//$forum_sid = $_SESSION["phpbb2mysql_sid"];
	//if (!$forum_sid) {
		// TODO : mettre ici la fonction qui se connecte au forum...
		//phpbb_login($persono_id);
	//}
	// on redirige les personnes utilisé suivants certaines règles :
	redirigeParDroits($persono);
}
include "pagxkapo.inc.php";
?>
	<main>
		<section id="enkonduko">
			<div class="row">
				<div class="col s12 m5 l6">
					<img src="<?=$vojo?>bildoj/robin-2012.jpg" alt="© Robin Guinin" class="responsive-img">
				</div>
				<div class="col s12 m7 l5">
					<h2>Bienvenue sur <span>iKurso</span></h2>
					<p>Ici, vous pourrez découvrir ce qu’est la langue internationale Espéranto.<br> 
						Vous pourrez également l’apprendre en suivant nos cours, à votre rythme.<br>
						Pour mieux vous aider, l’association Espéranto-France vous propose un service de correction gratuit. Pour en bénéficier, il suffit de vous inscrire.</p>
						<p class="center"><a href="aligxi.php" class="btn waves-effect waves-light blue">créer un compte</a></p>
						<p class="center"><a href="#prezento" class="btn-flat small">en savoir plus<i class="material-icons right">arrow_drop_down</i></a></p>
				</div>
			</div>
		</section>
		
		<section id="niaj_kursoj">
			<h2>Nos cours en ligne</h2>
			
			<div class="container">
				<div class="row">
					<div class="col s12 m4 l4">
						<h5>Cours en 10 leçons</h5>
						<p>Cours d’espéranto pour débutants. À suivre avec l’aide d'un correcteur ou en totale autonomie.</p>
						<p><a href="#" class="btn waves-effect waves-light blue">voir le cours</a></p>
					</div>
						
					<div class="col s12 m4 l4">
						<h5>Gerda malaperis</h5>
						<p>Pour ceux qui connaissent déjà les bases de l’espéranto, par exemple après le cours en 10 leçons. </p>
						<p><a href="#" class="btn waves-effect waves-light blue">voir le cours</a></p>
					</div>
						
					<div class="col s12 m4 l4">
						<h5>Lasu min paroli plu</h5>
						<p>Recueil de textes à lire en parallèle du cours Gerda malaperis. Permet de revoir les notions abordées dans le cours.</p>
						<p><a href="#" class="btn waves-effect waves-light blue">voir le cours</a></p>
					</div>
				</div>
			</div>
		</section>

		<section id="aliaj_kursoj">
			<h2>Autres cours</h2>
			
			<div class="container">
				<div class="row">
					<div class="col s12 m6 l6">
						<h5>Kurso de Esperanto</h5>
						<p>Logiciel multimédia pour Windows, Linux et Mac OSX.<br>
						En 12 leçons vous apprendrez les bases de l’espéranto.</p>
						<p><a href="#" class="btn-flat small">en savoir plus</a></p>
					</div>
				
					<div class="col s12 m6 l6">
						<h5>lernu.net</h5>
						<p>Autre site, traduit dans plus de 20 langues.<br>
						Pour ceux qui veulent découvrir l’espéranto, l’apprendre ou le pratiquer.</p>
						<p><a href="http://www.lernu.net" class="btn-flat small">aller sur lernu.net</a></p>
					</div>
				</div>
			</div>
		</section>
		
		<section id="prezento" class="scrollspy">
			<div class="row">
				<div class="col s12 m10 offset-m1">
					<h2>L’espéranto, qu’est-ce que c’est ?</h2>
				</div>
			</div>
			<div class="row">
				<div class="col s12 m8 offset-m1">
					<p>L’espéranto, la Langue Internationale, est une langue destinée à faciliter la communication entre des personnes de différentes cultures. Son auteur, le docteur L. L. Zamenhof (1859-1917) publia sa « Lingvo Internacia » en 1887 sous le pseudonyme de « Docteur Esperanto ». On estime que l’espéranto est maintenant parlé par au moins deux millions de personnes dans plus de 100 pays. Il y a des milliers de livres et plus de 100 revues différentes paraissent régulièrement. Mais qu’est-ce qui en fait une langue plus internationale que le français, l’anglais ou le russe ?</p>
					<p>L’espéranto est une langue construite (le terme « artificiel » est plutôt impropre), particulièrement destinée à un usage international / interculturel, afin que ceux qui l’utilisent puissent dialoguer sur un pied d’égalité, dans la mesure où aucun n’utilise sa langue natale. Avec les langues nationales, un individu normal n’est pas capable de s’exprimer aussi bien dans une langue étrangère que celui dont c’est la langue maternelle, à moins d’être expert. Alors que grâce à sa construction simple, logique et régulière, chacun peut apprendre l’espéranto très rapidement.</p>
				</div>
				<div class="col s12 m2">
					<img src="<?php echo $vojo;?>bildoj/unua-libro.jpg" class="responsive-img">
				</div>
			</div>

			<div class="row">
				<div class="col s12 m10 offset-m1">
					<h2>Une langue vivante</h2>
				</div>
			</div>
			<div class="row">
				<div class="col s12 m4 offset-m1">
					<img src="<?php echo $vojo;?>bildoj/vivanta-lingvo.jpg" class="responsive-img">
				</div>
				<div class="col s12 m6">
					<p>L’espéranto s’utilise comme n’importe quelle autre langue. Néanmoins, il est plus facile à apprendre qu’une langue nationale. Même ceux qui n’arrivent pas à se souvenir d’un mot dans une langue qu’ils ont étudiée plusieurs années à l’école ou à l’université n’auront besoin que de quelques mois d’étude intensive pour parler couramment l’espéranto. L’espéranto est aussi plus utile qu’une langue nationale si votre but en apprenant une langue est de connaître des gens un peu partout dans le monde, puisque presque tout le monde l’a appris pour cette même raison.</p>
				</div>
			</div>
			<div class="row">
				<div class="col s12 m10 offset-m1">
					<p>L’espéranto n’existe que depuis une centaine d’années ; il est donc la plus moderne des langues vivantes. Introduit d’abord en Europe, l’espéranto sert aujourd’hui aux échanges à l’échelle mondiale. En plus, il constitue une préparation idéale à l’étude d’une seconde langue en général et vous fait mieux apprécier le sens exact des mots de votre propre langue.</p>
				</div>
			</div>
		</section>
		
		<section id="konkludo">
			<div class="container">
				<div class="row">
					<div class="col s12">
						<div class="card-panel blue lighten-5 center">
							<h5>Je veux apprendre l’espéranto&nbsp;!</h5>
							<p>En créant un compte, vous pourrez suivre nos cours, voir votre progression<br>et demander l’aide d’un correcteur.<br>C’est gratuit !</p>
							<p><a href="aligxi.php" class="btn waves-effect waves-light blue">créer un compte</a></p>
						</div>
					</div>
				</div>
			</div>
		</section>

	</main>
	
<?php include "pagxpiedo.inc.php";?>
