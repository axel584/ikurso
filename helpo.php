<?php
include "util.php";
malfermidatumbazon();
$pagxtitolo="Aide et informations utiles";
$korpo="informoj";
$section=isset($_GET["section"])?$_GET["section"]:"";
if ($section==""){$section="enskribo";}
$persono_id=isset($_SESSION["persono_id"])?$_SESSION["persono_id"]:"";
if ($persono_id!="") {
	$persono = apartigiPersonon($persono_id);
	$videbla=$persono["videbla"];
	if (($videbla=="J")||($videbla=="")) {$temo="nova";}
	//echo "videbla=".$videbla."<br>";
} else {
	$videbla="N";
}

$demando = "update personoj set videbla='N' where id='".$persono_id."'";
$bdd->exec($demando);

include "pagxkapo.inc.php";
?>
	<div class="row">
		<article class="col s12 m10 l7 offset-m1 offset-l2">
			<?php 
			if ($section=="enskribo") { ?>		
			<h1>Comment s'inscrire ?</h1>
			
			<section id="faq" class="scrollspy">

					
				<p>Sur ce site, vous avez accès à deux cours différents&nbsp;:</p>
				<ul class="listo">
					<li>le <a href="fr/cge/lec01.php">cours en dix leçons</a>&nbsp;: cours pour débutants sous forme de pages web</li>
					<li><a href="fr/gerda/cxap01.php">Gerda malaperis</a>, cours de perfectionnement basé sur un petit roman en 25&nbsp;chapitres.</li>
				</ul>
				<p>Ces cours s’utilisent en auto-apprentissage mais cela ne signifie pas que vous serez seul durant votre étude. 
				Vous pouvez être aidé par un correcteur qui corrigera vos exercices et pourra répondre à vos questions. 
				Les échanges avec le correcteur se font par courriel.</p> 		

				<p>Pour suivre le cours, la première étape consiste à créer un compte sur la page d'accueil en cliquant sur le bouton bleu "Créer un compte". Après avoir rempli les différents champs demandés, vous recevrez un courriel de confirmation qui vous permettra de nous assurer que votre adresse est correcte.</p>


				
			</section>
					

			<?php 
				} 
				if ($section=="kurso") { 
			?>

			<h1>Comment suivre le cours ?</h1>
			
			<section id="faq" class="scrollspy">
				<p>Le cours est constitué de différentes pages. Il peut s'agir d'explications grammaticales ou culturelles, de vocabulaire, d'exercices sous la forme de phrases à traduire ou à rédiger ou bien de QCM (Questionnaire à choix multiple).</p>
				<p>En bas de chaque page, un bouton bleu "Terminé" vous permettra d'indiquer votre progression. Sur le sommaire, le titre des pages terminées sera barré.</p>
				<p>Dans le cas des QCM, il est nécessaire de réussir correctement l'ensemble du QCM pour atteindre le bouton "Terminé".</p>
				<p>Pour les exercices de traduction ou de rédaction, les réponses vous seront envoyés par messagerie directement à l'adresse que vous avez utilisé lors de l'inscription.</p>

			</section>
			<?php 
				}
				if ($section=="kielskribi") { 
			?>
			<h1>Comment écrire en espéranto ?</h1>
			<section id="akcentoj" class="scrollspy">

				<?php include "helpo_accents.inc.php" ?>
		
				<?php include "helpo_accents_mobile.inc.php" ?>
			</section>

			<?php 
				}
				if ($section=="korektanto") { 
			?>

			<h1>Comment devenir correcteur ?</h1>
			<section id="korektanto" class="scrollspy">
				<p>Si vous souhaitez nous aider en tant que correcteur, vous pouvez nous contacter à l'adresse <a href="mailto:ikurso@esperanto-france.org">ikurso@esperanto-france.org</a> ou via le <a href="reago.php">formulaire de contact</a>.</p>
				<p>Il vous faudra dans un premier temps créer un compte comme le font les élèves, puis de nous indiquer l'identifiant que vous avez choisi afin que l'on vous donne les droits de correcteurs. En vous reconnectant sur votre compte, vous trouverez l'interface des correcteurs qui vous permettra de choisir le nombre d'élèves que vous souhaitez corriger et les gérer.</p>
				<p>Il n'y a pas de contrainte d'engagement en tant que correcteur, il est juste nécessaire, si vous souhaitez arrêter de corriger, de mettre votre nombre d'élèves à zéro et de prévenir les administrateurs qui trouveront d'autres correcteurs à vos élèves en cours.</p>
			</section>

			<?php 
				}
			?>

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
								<li><a href="helpo.php?section=enskribo">Comment s'inscrire ?</a></li>
								<li><a href="helpo.php?section=kurso">Comment suivre le cours ?</a></li>
								<li><a href="helpo.php?section=kielskribi">Comment écrire en espéranto ?</a></li>
								<li><a href="helpo.php?section=korektanto">Comment devenir correcteur ?</a></li>
							</ul>
						</div>
					</li>
				</ul>
			</div>
		</aside>
	</div>
<?php include "pagxpiedo.inc.php"; ?>
