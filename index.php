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
	protokolo($persono["id"],"ENIRO",$persono["enirnomo"]." eniris");
	updateLastEniro($persono_id);
	redirigeParDroits($persono);
}
include "pagxkapo.inc.php";
?>
		<section id="enkonduko">
			<div class="row">
				<div class="col s12 m5 l6">
					<img src="<?=$vojo?>bildoj/robin-2012.jpg" alt="© Robin Guinin" class="responsive-img">
					<p class="creditphoto primaire-texte">dessin : Robin Guinin, <a href="https://www.facebook.com/robin.guinin/">www.facebook.com/robin.guinin/</a></p>
				</div>
				<div class="col s12 m7 l5">
					<!--[if lt IE 9]>
					<h2>ATTENTION</h2>
					<p>Vous utilisez un navigateur non compatible avec ce site. Veuillez <a href='http://browsehappy.com'>mettre à jour votre navigateur</a> ou contacter votre administrateur réseau pour améliorer votre navigation.</p>
					<![endif]-->
					<h2>Bienvenue sur <span class="ikurso">iKurso</span></h2>
					<p>Ici, vous pourrez découvrir ce qu’est la <b>langue internationale Espéranto</b>.<br> 
						Vous pourrez également l’apprendre en suivant nos cours, à votre rythme.<br>
						Pour mieux vous aider, l’association Espéranto-France vous propose un <b>service de correction gratuit</b>. Pour en bénéficier, il suffit de vous inscrire.</p>
						<p class="center"><a href="#aligxi" class="btn waves-effect waves-light blue modal-trigger" data-activates="aligxi">créer un compte</a>&nbsp;<a href="#tuto-inscription" class="modal-trigger tooltipped" data-position="top" data-delay="50" data-tooltip="voir la vidéo de présentation" data-activates="tuto-inscription"><i class="material-icons blue-text">help_outline</i></a></p>
						<p class="center"><a href="#prezento" class="btn-flat small">L’espéranto, qu’est-ce que c’est ?<i class="material-icons right">arrow_drop_down</i></a></p>
				</div>
			</div>
		</section>
		<section id="niaj_kursoj">
			<h2>Nos cours en ligne</h2>
			
			<div class="container">
				<div class="row">
					<div class="col s12 m5 offset-m1">
						<h5>Cours en 10 leçons</h5>
						<p>Cours d’espéranto pour débutants. À suivre avec l’aide d'un correcteur ou en totale autonomie.</p>
						<p><a href="<?=$vojo?>fr/cge/lec01.php" class="btn waves-effect waves-light blue">voir le cours</a></p>
					</div>
						
					<div class="col s12 m5 offset-m1">
						<h5>Gerda malaperis</h5>
						<p>Pour ceux qui connaissent déjà les bases de l’espéranto, par exemple après le cours en 10 leçons. </p>
						<p><a href="<?=$vojo?>fr/gerda/cxap01.php" class="btn waves-effect waves-light blue">voir le cours</a></p>
					</div>
						
				</div>
			</div>
		</section>

		<section id="atestadoj">
			<div class="row">
				<div class="col s12 m8 offset-m2">
					<h5>Ils ont suivi nos cours :</h5>
					<div class="card-panel blue lighten-5">
						<div class="slider">
							  <ul class="slides">
								<li class="row">
									<p class="col s12">Le cours en 10 leçons d’iKurso est parfait pour commencer l’apprentissage de l’espéranto.<br>Comptez sur vos tuteurs pour vous aider à progresser rapidement&nbsp;!</p>
									<div class="circle responsive-img col s4 m3 l2 offset-s4 offset-m5 offset-l5 center-align">
										<img src="<?=$vojo?>fr/cge/bildoj/lernantoj/Gwen.jpg" class="circle responsive-img" alt="" />
									</div>
									<br>
									<span class="eta col s4 m2 offset-s4 offset-m5 center-align"><em>Gwen</em></span>
								</li>
								<li class="row">
									<p class="col s12">Excellente application pour découvrir la langue internationale et pour commencer à se l’approprier. Des cours bien structurés, des exercices rapidement corrigés en font une très bonne méthode que je recommande.</p>
									<div class="circle responsive-img col s4 m3 l2 offset-s4 offset-m5 offset-l5 center-align">
										<img src="<?=$vojo?>fr/cge/bildoj/lernantoj/Ishtima.jpg" class="circle responsive-img" alt="" />
									</div>
									<br>
									<span class="eta col s4 m2 offset-s4 offset-m5 center-align"><em>Ishtima</em></span>
								</li>
								<li class="row">
									<p class="col s12">Dès le début, on travaille sur des textes ; on travaille des phrases complètes. Le vocabulaire appris, en contexte, est plus facilement mémorisé grâce à l’image mentale que l’on se fait du contenu du texte. On assigne à chaque apprenant un correcteur-motivateur bénévole et intéressé pour l’encourager à la régularité, veiller sur l’augmentation graduelle de la difficulté tout en soutenant la motivation. </p>
									<div class="circle responsive-img col s4 m3 l2 offset-s4 offset-m5 offset-l5 center-align">
										<img src="<?=$vojo?>fr/cge/bildoj/lernantoj/Philippe-D.jpg" class="circle responsive-img" alt="" />
									</div>
									<br>
									<span class="eta col s4 m2 offset-s4 offset-m5 center-align"><em>Philippe</em></span>
								</li>
								<li class="row">
									<p class="col s12">Les cours sont clairs et équilibrent parfaitement grammaire, vocabulaire et exercices. Très vite on se sent à l’aise en espéranto. De plus nos tuteurs, dévoués, corrigent au mieux nos exercices, en prenant soin de notre bonne compréhension. Je recommande&nbsp;!</p>
									<div class="circle responsive-img col s4 m3 l2 offset-s4 offset-m5 offset-l5 center-align">
										<img src="<?=$vojo?>fr/cge/bildoj/lernantoj/Nathael.jpg" class="circle responsive-img" alt="Photo de Nathael" />
									</div>
									<br>
									<span class="eta col s4 m2 offset-s4 offset-m5 center-align"><em>Natha&euml;l</em></span>
								</li>
								<li class="row">
									<p class="col s12">Ikurso est un site exceptionnel. Sans doute parce que l’espéranto est également une langue exceptionnelle. Le cours <em>Gerda malaperis</em> est particulièrement bien structuré et complet.</p>
									<div class="circle responsive-img col s4 m3 l2 offset-s4 offset-m5 offset-l5 center-align">
										<img src="<?=$vojo?>fr/cge/bildoj/lernantoj/Marko.jpg" class="circle responsive-img" alt="" />
									</div>
									<br>
									<span class="eta col s4 m2 offset-s4 offset-m5 center-align"><em>Marko</em></span>
								</li>
								<li class="row">
									<p class="col s12">IKurso permet de très rapidement progresser en espéranto. Le fait d'avoir un-e correcteur-trice qui nous suit tour au long des leçons est vraiment un plus.</p>
									<span class="eta col s4 m2 offset-s4 offset-m5 center-align"><em>Jean-Baptiste</em></span>
								</li>
							 </ul>
						</div>					
					</div>
				</div>
			</div>
		</section>

		<section id="aliaj_kursoj">
			<h2>Autres cours</h2>
			
			<div class="container">
				<div class="row">
					<div class="col s12 m3 offset-m1">
						<h5>Kurso de Esperanto</h5>
						<p>Logiciel multimédia pour Windows, Linux et Mac OSX</p>
						<p>En 12 leçons vous apprendrez les bases de l’espéranto.<br><a href="http://www.kurso.com.br/" class="btn-flat small"><i class="material-icons right">arrow_right</i>télécharger le logiciel</a></p>
					</div>
				
					<div class="col s12 m3 offset-m1">
						<h5>lernu.net</h5>
						<p>Autre site, traduit dans plus de 20 langues.<br>
						Pour ceux qui veulent découvrir l’espéranto, l’apprendre ou le pratiquer.</p>
						<p class="container"><img class="responsive-img" src="<?=$vojo?>bildoj/lernu.png" alt="logo du site lernu.net"></p>
						<p><a href="http://www.lernu.net" class="btn-flat small"><i class="material-icons right">arrow_right</i>aller sur lernu.net</a></p>
					</div>

					<div class="col s12 m3 offset-m1">
						<h5>duolingo</h5>
						<p>Cours ludique pour débutants.<br>
						N’existe pour l’instant qu’en anglais et en espagnol. (Nous attendons avec impatience une version pour les francophones.)</p>
						<p class="container"><img class="responsive-img" src="<?=$vojo?>bildoj/duolingo.jpg" alt="logo du site duolingo.com"></p>
						<p><a href="https://en.duolingo.com/course/eo/en/Learn-Esperanto-Online" class="btn-flat small"><i class="material-icons right">arrow_right</i>aller sur duolingo</a></p>
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
					<img src="<?php echo $vojo;?>bildoj/unua-libro.jpg" class="responsive-img" alt="Premier livre en esperanto en 1887">
				</div>
			</div>

			<div class="row">
				<div class="col s12 m10 offset-m1">
					<h2>Une langue vivante</h2>
				</div>
			</div>
			<div class="row">
				<div class="col s12 m4 offset-m1">
					<img src="<?php echo $vojo;?>bildoj/vivanta-lingvo.jpg" class="responsive-img" alt="l'espéranto est une langue vivante">
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
							<p><a href="#aligxi" class="btn waves-effect waves-light blue modal-trigger" data-activates="aligxi">créer un compte</a>&nbsp;<a href="#tuto-inscription" class="modal-trigger tooltipped" data-position="top" data-delay="50" data-tooltip="voir la vidéo de présentation" data-activates="tuto-inscription"><i class="material-icons blue-text">help_outline</i></a></p>
						</div>
					</div>
				</div>
			</div>
		</section>

<?php include "pagxpiedo.inc.php";?>
