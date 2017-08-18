<?php
$vojo="../";
include "../util.php";
$subjekto="intro.php";
$korpo="informoj";
$section=isset($_GET["temo"])?$_GET["temo"]:"";
if ($section==""){$section="eo";}
$pagxtitolo="Introduction";
include "../pagxkapo.inc.php";
?>

	<div class="row">
		<article class="col s12 m10 l7 offset-m1 offset-l2">
			<?php if ($section=="eo") {
			?>
			<section id="eo">
				<h2>L’espéranto, qu’est-ce que c’est&nbsp;?</h2>
				<div class="row">
					<img src="<?php echo $vojo;?>bildoj/unua-libro.jpg" class="responsive-img col s12 m4 right">
					<p>L’espéranto, la Langue Internationale, est une langue destinée à faciliter la communication entre des personnes de différentes cultures. Son auteur, le docteur L. L. Zamenhof (1859-1917) publia sa «&nbsp;Lingvo Internacia&nbsp;» en 1887 sous le pseudonyme de «&nbsp;Docteur Esperanto&nbsp;». On estime que l’espéranto est maintenant parlé par au moins deux millions de personnes dans plus de 100 pays. Il y a des milliers de livres et plus de 100 revues différentes paraissent régulièrement. Mais qu’est-ce qui en fait une langue plus internationale que le français, l’anglais ou le russe&nbsp;?</p>
					<p>L’espéranto est une langue construite (le terme «&nbsp;artificiel&nbsp;» est plutôt impropre), particulièrement destinée à un usage international&nbsp;/ interculturel, afin que ceux qui l’utilisent puissent dialoguer sur un pied d’égalité, dans la mesure où aucun n’utilise sa langue natale. Avec les langues nationales, un individu normal n’est pas capable de s’exprimer aussi bien dans une langue étrangère que celui dont c’est la langue maternelle, à moins d’être expert. Alors que grâce à sa construction simple, logique et régulière, chacun peut apprendre l’espéranto très rapidement.</p>
				</div>

				<h3>Une langue vivante</h3>
				<div class="row">
					<div >
						<img src="<?php echo $vojo;?>bildoj/vivanta-lingvo.jpg" class="responsive-img col s12 m5">
					<p>L’espéranto s’utilise comme n’importe quelle autre langue. Néanmoins, il est plus facile à apprendre qu’une langue nationale. Même ceux qui n’arrivent pas à se souvenir d’un mot dans une langue qu’ils ont étudiée plusieurs années à l’école ou à l’université n’auront besoin que de quelques mois d’étude intensive pour parler couramment l’espéranto. L’espéranto est aussi plus utile qu’une langue nationale si votre but en apprenant une langue est de connaître des gens un peu partout dans le monde, puisque presque tout le monde l’a appris pour cette même raison.</p>
						<p>L’espéranto n’existe que depuis une centaine d’années&nbsp;; il est donc la plus moderne des langues vivantes. Introduit d’abord en Europe, l’espéranto sert aujourd’hui aux échanges à l’échelle mondiale. En plus, il constitue une préparation idéale à l’étude d’une seconde langue en général et vous fait mieux apprécier le sens exact des mots de votre propre langue.</p>
					</div>
				</div>
			</section>

			<?php 
			} // fin section eo
			if ($section=="kursoj"||$section=="enskribo") {
			?>

			<section id="enskribo">
				<h2>Comment s’inscrire aux cours</h2>

				<p>Sur ce site, vous avez accès à deux cours différents&nbsp;:</p>
				<ul class="klarigo">
					<li>le <a href="#dlek">cours en dix leçons</a>&nbsp;: cours pour débutants sous forme de pages web</li>
					<li><a href="#gerda">Gerda malaperis</a>, cours de perfectionnement basé sur un petit roman en 25&nbsp;chapitres. Il peut être suivi aisément après le cours en dix leçons.</li>
				</ul>

				<p class="parto">Ces cours s’utilisent en auto-apprentissage mais cela ne signifie pas que vous serez seul durant votre étude. 
				Vous pouvez être aidé par un correcteur qui vous suivra tout au long de votre apprentissage, qui corrigera vos exercices et pourra répondre à vos questions. 
				Les échanges avec le correcteur se font par courriel.</p> 		

				<p>Si vous souhaitez bénéficier de ce service, vous devez au préalable vous inscrire en indiquant au minimum une adresse électronique valide car les échanges entre l’élève et le correcteur se font par courriel. En aucun cas, nous ne pourrons assurer de correction autrement que par ce moyen. Il est donc exclu de recourir à l’envoi de courrier postal pour le suivi de ce cours.</p>
							
				<h3 id="dlek">Cours en dix leçons (DLEK: Dek Leciona Kurso)</h3>
				
				<p>Ce est basé sur le <em>Cours Gratuit par Correspondance en 10 leçons</em> de l’ESK (Societé québécoise d’espéranto / Esperanto-Societo Kebekia) qui lui-même est tiré d’un cours par correspondance très populaire en Angleterre. 
				Ce cours présente les bases de l’espéranto sous forme de pages alternant explications sur la langue (vocabulaire, grammaire…) et exercices. 
				À la fin de chaque leçon un formulaire vous permet d’envoyer vos exercices à votre tuteur (si vous vous êtes inscrit à notre service de correction).</p>
				<p>Quand vous aurez terminé les dix leçons, vous recevrez une attestation de fin de cours.</p>
				<p>L’inscription au service de correction se fait à la fin de la première leçon. Pour pouvoir bénéficier de ce service, vous devez au préalable créer un compte sur ce site.</p> 	

			<?php if ($persono_id=="") { ?>
				<div class="row">
					<div class="col s12">
						<div class="card-panel blue lighten-5">
							<!-- N'a pas encore de compte -->
								<h5 class="center">Je veux apprendre l’espéranto&nbsp;!</h5>
								<div class="row">
									<p class="center">En créant un compte, vous pourrez suivre nos cours, voir votre progression<br>et demander l’aide d’un correcteur.<br>C’est gratuit !</p>
									<p class="center"><a href="#aligxi" class="btn waves-effect waves-light blue modal-trigger" data-activates="aligxi">créer un compte</a>&nbsp;<a href="#tuto-inscription" class="modal-trigger tooltipped" data-position="top" data-delay="50" data-tooltip="voir la vidéo de présentation" data-activates="tuto-inscription"><i class="material-icons blue-text">help_outline</i></a></p>
								<p class="noto">NOTE&nbsp;: vous pouvez également suivre ce cours sans être inscrit sur ce site, mais dans ce cas vous ne pourrez pas bénéficier du suivi et de la correction des exercices.<br><a href="<?php echo $vojo;?>fr/cge/lec01.php?section=1" class="btn-flat small blue-text"><i class="material-icons right">arrow_right</i>Aller à la leçon 1</a></p>
								</div>
						</div>
					</div>
				</div>
			<!-- A déjà un compte -->
			<?php } elseif ($persono['rajtoj']=="P") {
			?>
				<!-- N'est pas déjà inscrit à un cours -->
				<div class="row">
					<div class="col s12">
						<div class="card-panel blue lighten-5">
							<h5 class="center">Je commence le cours tout de suite !</h5>
							<div class="row">
								<p><span class="noto">Je lis attentivement chaque page de la leçon, je fais les exercices et je pourrai m’inscrire au service de correction à la fin de la première leçon. Mes exercices seront automatiquement envoyé à mon correcteur quand les administrateurs du cours m'en auront attribué un.</span>
								<p><a href="<?php echo $vojo;?>fr/cge/lec01.php?section=1" class="btn-flat small blue-text"><i class="material-icons right">arrow_right</i>Aller à la leçon 1</a></p>
								</p>
							</div>		
						</div>
					</div>
				</div>
			<?php } ?>
			
				<h3 id="gerda">Gerda malaperis</h3>
				<p>Ce cours s’adresse à ceux qui connaissent déjà les bases de l’espéranto comme, par exemple, ceux qui ont suivi au moins le Cours en dix leçons.</a></p>
				<p><strong>Gerda malaperis</strong> est un roman de Claude Piron spécifiquement destiné à vous apprendre progressivement à maîtriser l’espéranto parlé à partir d’une histoire captivante.</p>
				<p>Le cours comporte est divisé en 25&nbsp;chapitres, chacun constitué d’un extrait du roman, d’une série de questions et d’un ou plusieurs exercices. En complément du cours, nous vous proposons de lire les récits du recueil <em>Lasu min paroli plu!</em>, du même auteur.</p>
				<p>Si vous avez décidé de suivre le cours, il vous est conseillé de demander l’assistance d’un tuteur, mais ce n’est pas obligatoire. 
					Celui-ci corrigera vos exercices et répondra succinctement à vos questions que le cours pourrait susciter.</p>
					
				<p>L’inscription au service de correction pour <strong>Gerda malaperis</strong> se fait à la fin du premier chapitre. Pour pouvoir bénéficier de ce service, vous devez au préalable créer un compte sur ce site.</p> 	

				<p class="row"><a href="<?php echo $vojo;?>fr/gerda/index.php" class="btn-flat small blue-text right col right"><i class="material-icons right">arrow_right</i>Aller au premier chapitre</a></p>

			</section>						

			<?php 
			} // fin section enskribo
			?>

		<section id="leciono-fino">
			<div class="ligoj">
				<?php if ($section=="eo") { ?>
					<a></a>
					<a href="<?php echo $vojo;?>fr/intro.php?temo=enskribo" class="btn-flat small blue-text">Les cours&nbsp;: comment s’inscrire<i class="material-icons right">arrow_right</i></a>
				<?php } ?>
			</div>
		</section>

		</article>
	</div>
<?php include "../pagxpiedo.inc.php"; ?>
