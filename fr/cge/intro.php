<?php
$subjekto="intro.php";
$temo=isset($_GET["temo"])?$_GET["temo"]:"intro";
$gxisdatigDato="2016-07-01";
include "dlekkapo.inc.php"
?>
<div class="row">
	<article class="col s12 m10 l7 offset-m1 offset-l2">
		<section id="leciono-kapo">
			<h1>Cours en 10 leçons</h1>
		</section>
		
		<section id="leciono-enhavo">

			<h2>Préambule</h2>
			
			<p>Ce cours pour débutants a déjà une longue histoire. Il s’agit à l’origine d’un cours par correspondance pour anglophones, adapté par la suite au français puis au courrier électronique par la société québécoise d’espéranto (ESK). Nous vous en présentons aujourd’hui une version web, revue et corrigée intégralement, mais qui conserve le contenu et les choix pédagogiques de ses prédécesseurs.</p>  		
			<p>À l’heure du multimédia et de l’hypertexte, ce cours peut paraître bien spartiate, bien linéaire et un brin rébarbatif. En réalité il n’en est rien et l’expérience a montré que ce cours est réellement efficace pour donner une bonne base de la langue, comme peuvent en témoigner de nombreux anciens de ce cours.</p>
			<p> Quand vous aurez terminé le cours vous pourrez déjà comprendre des textes simples et parler un peu de vous. L’étape suivante sera alors de suivre le cours <a href="<?php echo $vojo;?>fr/gerda/index.php">Gerda malaperis</a> qui vous permettra d’assimiler les connaissances acquises et vous ouvrira la porte à une utilisation active de la langue.</p>

			<h2>Comment suivre ce cours</h2>
			
			<p>Ce cours de compose de 10 leçons alternant explications sur le fonctionnement de la langue, vocabulaire et exercices de mise en pratique. Le cours peut être utilisé par des débutants en mode autodidacte, cependant nous vous conseillons de demander l’aide d’un tuteur qui corrigera vos exercices, sera disponible pour répondre à vos questions et vous suivra tout au long de votre apprentissage.</p>
				<p>Si vous souhaitez bénéficier de ce service, vous devez au préalable créer un compte sur ce site en indiquant au minimum une adresse électronique valide car les échanges avec votre correcteur se feront par courriel. En aucun cas, nous ne pourrons assurer de correction autrement que par ce moyen. Il est donc exclu de recourir à l’envoi de courrier postal pour le suivi de ce cours.</p>
			
			<p>Lorsque vous aurez créé votre compte, il vous suffira de commencer le cours et d’effectuer les exercices de la leçon 1. Un correcteur vous sera alors attribué en fonction des places disponibles.</p>
			
			<p>Nous attirons votre attention sur le fait que la gratuité de ce cours ne veut pas dire qu’il ne coûte rien : le suivi des élèves demande du temps et de l’attention de la part des correcteurs. Aussi nous demandons aux élèves qui s’inscrivent de s’engager à suivre réellement régulièrement le cours et à prévenir leur correcteur en cas de retard ou d’empêchement à poursuivre le cours.</p>
			
			<h2>Note au sujet de la typographie</h3>
			
			<p>Vous trouverez dans la <a href="<?php echo $vojo;?>helpo.php">page d’aide</a> des informations utiles sur la façon d’utiliser les lettres accentuées.</p>
			
			<p>Dans les exercices, il suffit de taper la lettre suivie d’un <strong>x</strong> par exemple&nbsp;: cx, sx, ux… pour obtenir automatiquement la lettre accentuée correspondante. 			
							
			<h2>Consultation hors ligne</h3>
					
			<p>Vous pouvez télécharger une version du cours au format PDF pour consultation hors ligne&nbsp;:<br><a href="<?php echo $vojo;?>doc/DLEK.pdf">Cours en dix leçons</a> (PDF - 476Ko)</li></p>

			<div class="row">
				<div class="col s12">
					<div class="card-panel blue lighten-5">
						<h5 class="center">Je veux apprendre l’espéranto&nbsp;!</h5>
						<div class="row">
							<div class="col s12 m6">
								<p>En créant un compte, vous pourrez suivre nos cours, voir votre progression<br>et demander l’aide d’un correcteur.<br>C’est gratuit !</p>
								<p><a href="#aligxi" class="btn waves-effect waves-light blue modal-trigger" data-activates="aligxi">créer un compte</a></p>
							</div>
							<div class="col s12 m6">
								<p>J’ai déjà un compte : je commence le cours tout de suite !<br>
								<a href="<?php echo $vojo;?>fr/cge/lec01.php?section=1" class="btn-flat small blue-text"><i class="material-icons right">arrow_right</i>Leçon 1</a>
								</p>
							</div>
						</div>
						<p class="noto">Note&nbsp;: vous pouvez également suivre ce cours sans être inscrit sur ce site, mais dans ce cas vous ne pourrez pas bénéficier du suivi et de la correction des exercices.</p>
					</div>
				</div>
			</div>

		</section>

	</article>
	
</div>

<? include "dlekpiedo.inc.php"; ?>
