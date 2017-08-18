<?php
$subjekto="intro.php";
$leciono = 0;
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
			
			<p class="parto">Voici un <b>cours en 10 leçons</b> pour vous initier à l’espéranto. Le défi est que, à la fin de ce parcours, vous puissiez faire des phrases simples, comprendre de courts textes ou conversations, voire de correspondre avec des étrangers espérantistes&nbsp;! Pas moins&nbsp;!</p>
			<p>À l’origine, il s’agissait d’un cours par correspondance pour anglophones, adapté par la suite au français puis au courrier électronique par la société québécoise d’espéranto (ESK). La version mise en ligne en 2016 est une proposition revue, mais qui a gardé l’esprit de départ&nbsp;: simplicité et efficacité. Et ce en mettant à profit les connaissances pédagogiques nouvelles et les évolutions du web&nbsp;!</p>
			<p class="parto">L’étape suivante sera alors de suivre le cours <a href="<?php echo $vojo;?>fr/gerda/index.php">Gerda malaperis</a> qui vous permettra d’assimiler les connaissances acquises et vous ouvrira la porte à une utilisation active de la langue. Ou encore (et même en parallèle) ce sera de rencontrer les espérantistes de votre département, votre ville ou votre région… Rien de tel que l’échange humain tout de même pour avancer&nbsp;!</p>
				
			<p>Pour connaître les adresses des associations ou clubs proches de chez vous, rendez-vous sur le <a href="http://esperanto-france.org/">site d’Espéranto-France</a> puis sélectionnez votre département sous la carte dans la section <b>L’espéranto près de chez vous</b>.</p>

			<h2>Comment suivre ce cours</h2>
			
			<p class="parto">Ce cours se compose de 10 leçons alternant du son, des textes, des images, des vidéos. Les leçons sont une alternance d’explications sur le fonctionnement de la langue, des apports de vocabulaire et de points grammaticaux. Une large place est donnée aux exercices de mise en pratique, aux QCM, aux tests afin que vous puissiez pas à pas évaluer vos progrès. Le cours peut être utilisé par des débutants en mode autodidacte, cependant nous vous conseillons de demander l’aide d’un tuteur qui corrigera vos exercices, sera disponible pour répondre à vos questions et vous suivra tout au long de votre apprentissage.</p>
			
			<p>Lorsque vous aurez créé votre compte, il vous suffira de commencer le cours et d’effectuer les exercices de la leçon 1. Un correcteur vous sera alors attribué en fonction des places disponibles.</p>
			
			<h3>Pour demander l’aide d’un correcteur :</h3>
			
			<ol>
				<li>Créez un compte sur ce site en indiquant au minimum une adresse électronique valide permettant les échanges entre vous et le correcteur.</li>
				<li>Commencez la première leçon et faites les exercices demandés. À la fin de la leçon, transmettez-les en cliquant sur le bouton DEMANDER UN CORRECTEUR.</li>
				<li>Un correcteur vous sera attribué à partir de ce moment en fonction des places disponibles. Un délai de réponse de quelques jours est possible à l’issue de ce premier envoi (les correcteurs ne suivent qu’un nombre restreint d’élèves pour une meilleure qualité des échanges).</li>
				<li>Attendez d’avoir reçu la première correction pour poursuivre votre apprentissage&nbsp;: c’est important, car le correcteur vous donnera des informations et consignes qui pourront vous éviter bien des erreurs. Ceci ne doit pas vous empêcher de lire les cours suivants avant ce retour de correction et de déjà préparer les exercices.</li>
			</ol>
			
			<h3>Quelques conseils pour atteindre vos objectifs :</h3>
			<ul class="klarigo">
				<li>Travaillez régulièrement. Nous conseillons de faire une leçon par semaine au minimum. Chaque leçon est composée de plusieurs sections, que vous pouvez étudier à votre rythme. Il est préférable d’étudier 15 minutes par jour que 2 heures une fois par semaine.</li>
				<li>N’hésitez pas à prendre des notes, recopier les mots de vocabulaire et les utiliser dans de nouvelles phrases. Notez les points qui vous paraissent importants et les questions que vous souhaitez poser à votre correcteur en fin de leçon.</li>
				<li>Apprenez le vocabulaire du cours régulièrement, l’idéal étant de pouvoir le réviser tous les jours. Un outil d’apprentissage du vocabulaire est intégré dans ce cours pour vous en faciliter l’apprentissage. Quelques minutes par jour suffiront pour bien l’assimiler.</li>
				<li>Mettez en pratique la langue dès que vous le pouvez&nbsp;: vous pouvez par exemple écrire quelques phrases en espéranto en commentaire lors de l’envoi de vos exercices. Essayez de parler en espéranto, même si c’est à votre reflet dans le miroir ou à votre chien*.</li>
			</ul>
			
			<p class="renvoi">* si vous avez un canari ou un poisson rouge, ça marche aussi !
			
			<h2>Note au sujet de la typographie</h2>
			
			<p>Vous trouverez dans la <a href="<?php echo $vojo;?>helpo.php">page d’aide</a> des informations utiles sur la façon d’utiliser les lettres accentuées.</p>
			
			<p>Dans les exercices, il suffit de taper la lettre suivie d’un <strong>x</strong> par exemple&nbsp;: cx, sx, ux… pour obtenir automatiquement la lettre accentuée correspondante.</p> 			
							
			<h2>Consultation hors ligne</h2>
					
			<p>Vous pouvez télécharger une version du cours au format PDF pour consultation hors ligne&nbsp;:<br><a href="<?php echo $vojo;?>doc/DLEK.pdf">Cours en dix leçons</a> (PDF - 476Ko)</p>

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

		</section>

	</article>
	
</div>

<?php include "dlekpiedo.inc.php"; ?>
