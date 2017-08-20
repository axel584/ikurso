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
			<h1>Comment s’inscrire ?</h1>
			
			<section id="faq" class="scrollspy">

					
				<p>Sur ce site, vous avez accès à deux cours différents&nbsp;:</p>
				<ul class="klarigo">
					<li>le <a href="fr/cge/lec01.php">cours en dix leçons</a>&nbsp;: cours pour débutants sous forme de pages web</li>
					<li><a href="fr/gerda/cxap01.php">Gerda malaperis</a>, cours de perfectionnement basé sur un petit roman en 25&nbsp;chapitres.</li>
				</ul>
				<p>Ces cours s’utilisent en auto-apprentissage mais cela ne signifie pas que vous serez seul durant votre étude. 
				Vous pouvez être aidé par un correcteur qui corrigera vos exercices et pourra répondre à vos questions. 
				Les échanges avec le correcteur se font par courriel.</p> 		

				<p>Pour suivre le cours, la première étape consiste à créer un compte sur la page d’accueil en cliquant sur le bouton bleu CRÉER UN COMPTE. Après avoir rempli les différents champs demandés, vous recevrez un courriel de confirmation qui nous permettra de nous assurer que votre adresse est correcte. Vous devrez cliquer sur le lien donné dans ce courriel afin de finaliser votre inscription.</p>
				<p>Vous pourrez alors commencer le cours que vous souhaitez suivre. À la fin de la première leçon, vous serez invité à envoyer les réponses aux exercices et à demander un correcteur.</p>

			</section>
					
			<?php 
				} 
				if ($section=="kurso") { 
			?>

			<h1>Comment suivre le cours ?</h1>
			
			<section id="faq" class="scrollspy">
				<p>Le cours est constitué de différentes pages. Il peut s’agir dexplications grammaticales ou culturelles, de vocabulaire, d’exercices sous la forme de phrases à traduire ou à rédiger ou bien de QCM (Questionnaire à choix multiple).</p>
				<p>En bas de chaque page, un bouton bleu TERMINÉ vous permettra d’indiquer votre progression. Sur le sommaire, les titres des pages terminées seront barrées.</p>
				<p>Dans le cas des QCM, il est nécessaire de réussir correctement l’ensemble du QCM pour atteindre le bouton TERMINÉ.</p>
				<p>Pour les exercices de traduction ou de rédaction, les réponses vous seront envoyées par message électronique directement à l’adresse que vous avez utilisée lors de l’inscription.</p>
			</section>

			<?php 
				}
				if ($section=="kajposte") { 
			?>

			<h1>Que faire après le cours&nbsp;?</h1>
			<section id="kajposte" class="scrollspy">
				<p>Vous avez terminé le cours en dix leçons ou le cours <em>Gerda malaperis</em> et vous vous demandez peut-être comment approfondir vos connaissance ou mettre en pratique ce que vous avez appris. Voici quelques suggestions qui vous permettront d’aller plus loin.</p> 
				
				<h2>Continuer d’apprendre</h2>
				
				<p class="parto">Si vous avez terminé le cours en dix leçons, nous vous recommandons de suivre le cours <a href="http://ikurso.esperanto-france.org/fr/gerda/index.php"><em>Gerda malaperis</em></a>. Ce cours est basé sur un roman de Claude Piron spécifiquement destiné à vous apprendre progressivement à maîtriser l’espéranto parlé à partir d’une histoire captivante.<p>
					
				<p class="parto">Pour améliorer votre <b>expression orale</b>, vous pouvez vous inscrire au cours <a href="http://edukado.net/ekparolu/prezento">Ekparolu!</a> qui vous permettra de converser par Skype avec un tuteur. Nous vous recommandons de suivre ce cours lorsque cours lorsque vous aurez terminé le cours <em>Gerda malaperis</em>.</p>  
				
				<p class="parto"><a href="https://web.archive.org/web/20160314174609/http://bertilow.com/pmeg/">Plena Manlibro de Esperanto</a> est une <b>grammaire</b> complète de l’espéranto (en espéranto)</p>
				
				<p class="parto"><a href="https://babadum.com/">Babadum</a> vous permettra d’<b>apprendre 1500 mots</b> de manière ludique.</p>				
				
				<p class="parto">La <a href="http://www.eventoj.hu/steb/">Scienca kaj Teknika Esperanto-Biblioteko</a> donne accès à de nombreux <b>dictionnaires et lexiques</b> d'espéranto spécialisés dans différents domaines scientifiques et techniques.</p>

				<h2>Lire en espéranto</h2>
				
				<p class="parto">Dès que vous aurez terminé le premier cours, vous pourrez commencer à <b>lire des livres en espéranto</b>. Nous en avons sélectionné quelques-uns dans notre page <a href="<?php echo $vojo;?>butiko.html">Boutique</a>.</p>
				
				<p class="parto">Participez à <a href="http://www.esperanto-sumoo.strefa.pl/">Sumoo</a>, le jeu où vous «lutterez» en lisant des livres en espéranto.</p>
				
				<p class="parto">Visitez les <b>bibliothèques en ligne</b>, dans lesquelles vous trouverez un certain nombre de livres électroniques téléchargeables gratuitement&nbsp;</p>
				<ul class="sublisto">
					<li>La page <a href="http://esperanto.org.uk/eldonoj/piron/">Verkoj de Claude Piron</a> présente les livres de Claude Piron, dont certains sont accessibles pour les débutants (voir la rubrique <em>Facila lingvaĵo</em>)&nbsp;;</li>
					<li>Vous pourrez relire en espéranto de nombreux classiques sur le site <a href="http://i-espero.info/elsutaro/esperantaj-libroj">eLibrejo</a>.</li>
					<li><a href="http://www.esperanto.es:8080/jspui/handle/11013/1">Bitoteko</a> est la bibliothèque de la fédération espagnole d'espéranto. Vous pourrez y télécharger un grand nombre de livres en espéranto.</li>
					<li>Vous pourrez également télécharger des livres en espéranto sur <a href="http://esperantofre.com/edu/libroje.htm">les pages d'Enrique</a>, la <a href="https://cindymckee.com/p11/">Librejo de Cindy Moon McKee</a>, la page <a href="http://esperanto.us/">Elŝutu Senpage</a> de esperanto.us ou encore sur le groupe Facebook <a href="https://www.facebook.com/groups/librejo/files/">Librejo</a>.</li>
					<li>La page <a href="http://www.esperanto.net/literaturo/novel/index.html">Originalaj noveloj, novelaroj kaj rakontoj en Esperanto</a> présente une liste de 380 livres écrits originellement en espéranto ainsi que leurs auteurs.</li>
				</ul>
					
				<p class="parto">Citons aussi quelques romans faciles à lire et accessibles gratuitement en ligne&nbsp;: 
				<a href="http://www.u-matthias.de/verko/fajron.htm">Fajron sentas mi interne</a> de Ulrich Matthias, <a href="http://literaturo.org/HARLOW-Don/Esperanto/Kursoj/Verda_Koro/leciono_01.html">La verda koro</a> de Julio Baghy, <a href="http://www.esperanto.net/literaturo/novel/novlibr/dankamik.pdf">Dankon, Amiko</a> de Claude Piron, 
				
				<p class="parto">De nombreux <b>magazines</b> sont disponibles en espéranto. Aleks vous présente ici un petit tour du monde des magazines en espéranto&nbsp;:<br>
					<span class="eta">(vous pouvez activer les sous-titres en français)</span>
				</p>
				<p><iframe width="560" height="315" src="https://www.youtube.com/embed/yVjtft16rNo?rel=0"
frameborder="0" allowfullscreen></iframe></p>

				<p class"=parto"><a href="http://bitarkivo.org/gazetoj/">BitArkivo</a> permet de lire en ligne plus de 2000&nbsp;magazines en espéranto du monde entier.</p>
				
				<p class="parto">Vous pouvez également lire la revue <em>Le Monde de l’espéranto</em>, directement en ligne&nbsp;: <a href="https://esperanto-france.org/le-monde-de-l-esperanto">http://esperanto-france.org/le-monde-de-l-esperanto</a>.</p>

				<p class="parto">Sans oublier <a href="https://eo.wikipedia.org/wiki/Vikipedio:%C4%88efpa%C4%9Do">Vikipedio</a>, la version en espéranto de Wikipédia.</p>

				<h2>Voyager, rencontrer d’autres espérantophones</h2>
				
				<div class="float-right w30"><a href="http://esperanto-france.org/le-monde-de-l-esperanto"><img class="responsive-img" src="<?=$vojo?>bildoj/pasporta-servo-2017.jpg" /></a></div><p class="parto">Avec le <a href="http://pasportaservo.org/">Pasporta Servo</a>, <b>voyagez</b> dans le monde entier en étant hébergé chez des espérantophones, ou partez à la rencontre d’espérantophones du monde entier en les hébergeant chez vous.</p>
				
				<p class="parto">Retrouvez la liste des <b>rencontres d’espéranto</b> en France et à l’étranger dans notre <a href="http://esperanto-france.org/calendrier">calendrier</a> et tous les mois dans la <a href="http://esperanto-france.org/lettre-d-informations-esperanto-aktiv">lettre d’informations Esperanto Aktiv</a>.</p>
				
				<h2>Communiquer, s’informer, échanger grâce aux réseaux sociaux</h2>
				
				<p class="parto">Vous pouvez <b>discuter</b> avec d’autres espérantophones, grâce à des applications comme <a href="https://amikumu.com/fr/">Amikumu</a>, ou encore <a href="https://telegramo.org/">Telegram</a>. Il existe sur Telegram différent groupes en espéranto, dont vous trouverez la liste sur <a href="https://www.telegramo.org/">telegramo.org</a>. Vous pourrez également discuter en français ou en espéranto dans le groupe <a href="https://t.me/joinchat/BnEs0z8UBiqWLftwyd_5wA">français – Esperanto</a>). </p>
				
				<p class="parto">Certaines applications permettant les échanges linguistiques diverses langues proposent aussi l’espéranto. C’est le cas par exemple de <a href="https://www.hellolingo.com/">Hellolingo</a>, de <a href="https://www.hellotalk.com/">HelloTalk</a>.<br>
				L’espéranto fait aussi partie des langues praticables sur <a href="https://hinative.com/fr-FR">HiNative</a>, qui rassemble une communauté d’étudiants de langues diverses et permet de poser des questions à des locuteurs parlant couramment la langue que vous apprenez.</p> 
				
				<p class="parto">Vous pouvez également suivre les espérantophones actifs sur <a href="https://twitter.com/search?f=users&vertical=default&q=Esperanto&src=typd">Twitter</a>, suivre le <a href="https://www.facebook.com/groups/51339664932">groupe Facebook d’Esperanto-France</a>. Pensez aussi à utiliser le hashtag #Esperanto !</p>
				
				<p class="parto">Il existe sur Facebook de nombreux groupes en espéranto : <a href="https://www.facebook.com/groups/esperanto.grupo/">Esperanto Grupo</a>, <a href="https://www.facebook.com/groups/konsultejo">Lingva konsultejo</a>, <a href="https://www.facebook.com/groups/51339664932/">Espéranto France</a>, <a href="https://www.facebook.com/groups/agadejo/">Agadejo</a>, etc.</p>
				
				<p class="parto"><a href="https://www.reddit.com/r/Esperanto/">Reddit en espéranto</a> vous donnera des liens vers de nombreux sites Internet en espéranto.</p>

				<h2>Écouter de la musique ou simplement écouter parler en espéranto</h2>
								
				<p class="parto">Écoutez toute la <b>musique</b> du catalogue de Vinilkosmo, la plus grande maison d’édition de musique en espéranto, en vous abonnant au <a href="http://esperanto-france.org/esperanto-aktiv-78-decouverte">club Vinilkosmo</a>.<br>Sur le site <a href="http://list.ly/list/3MD-esperanto-music">Listly</a> vous pourrez voir des extraits de concerts en espéranto.</p>
				
				<p class="parto">Écoutez la <b>radio</b> ou des <b>podcasts</b> en espéranto&nbsp;:
					<ul class="sublisto">
						<li><a href="http://esperantaretradio.blogspot.de/">Esperanta Retradio</a> présente un court reportage quotidien avec retranscription&nbsp;;</li>
						<li><a href="http://muzaiko.info/">Muzaiko</a> est une radio en ligne qui diffuse en continu (essentiellement des musiques et des rediffusions)&nbsp;;</li>
						<li><a href="http://www.podkasto.net/">Varsovia Vento</a> relate les événements récents en «Espérantie»&nbsp;;</li>
						<li><a href="http://kern.punkto.info/">Kern.punkto.net</a> traite des sujets relatifs à la technologie, la culture ou la société&nbsp;;</li>
						<li><a href="http://melburno.org.au/3ZZZradio/">3ZZZ</a> est une émission hebdomadaire d’une heure diffusée depuis Melbourne. Lecture d’articles de différentes revues en espéranto&nbsp;;</li>
						<li><a href="http://pola-retradio.org/" data-href="http://pola-retradio.org/">Pola Retradio</a> présente tous les jours une émission en espéranto, axée sur la culture et les nouvelles en Pologne&nbsp;;</li>
						<li><a href="http://esperanto.cri.cn/">Chinese International Radio</a></li>
					</ul>
				</p>
				<p class="parto">Citons aussi quelques émissions en français sur l’espéranto&nbsp;:</p>
					<ul class="sublisto">
						<li><a href="http://www.esperanto-midipyrenees.org/download/cat.php?val=43_emissions+radio" target="_blank">Esperanto-Magazino</a> est une émission radio hebdomadaire d’une heure présentée par Espéranto Midi-Pyrénnées.</li>	
						<li><a href="http://media.radio-libertaire.org/">Radio Espéranto</a> est présentée tous les vendredis à 17h30 sur Radio Libertaire</a>. l’émission est en partie en espéranto et en partie en français.</li>
					</ul>
					 
				<p class="parto">Vous pouvez également écouter la radio sur votre téléphone Android grâce à l’application <a href="https://play.google.com/store/apps/details?id=dk.nordfalk.esperanto.radio">Esperanto-Radio</a>.
				
				<h2>Jouer en espéranto</h2>

				<p class="parto">Par exemple au <a href="http://skrablo.ikso.net/">Scrabble</a> ;</p>
				<p class="parto">ou à <a href="https://samopiniuloj.esperanto-jeunes.org">Samopiniuloj</a>, un jeu qui vous permettra d’enrichir votre vocabulaire.</p>
				
				<h2>Regarder des vidéos en espéranto</h2>
				
				<p class="parto">Vous trouverez  en ligne des <b>vidéos</b> variées en espéranto, par exemple la chaîne YouTube <a href="Easy Esperanto Talk Videos">Easy Esperanto Talk Videos</a> qui présente des vidéos en espéranto faciles à comprendre, ou <a href="https://www.youtube.com/user/Evildela">Evildela</a>, un espérantophone australien qui publie régulièrement des vidéos en espéranto, ou encore <a href="https://www.youtube.com/channel/UCAFUQWc8ykcRCOES3NvvcfQ/featured">Language Stuff</a>, la chaîne d’un Américain qui présente son apprentissage de l’espéranto.</p>
				<p class="parto">Retrouvez toutes les chaînes actives en espéranto dans ce document&nbsp;: <a href="https://docs.google.com/document/d/1OCtT3Mjob-LNUrDfaZqzb8j2BDPAqTBeqC3TFY3lIa0/edit">(Preskaŭ) Kompleta Listo de AKTIVAJ Esperantaj Jutubistoj</a>.</p>
				<p class="parto"><a href="http://novajhoj.weebly.com/">STUDIO</a> présente une sélection d’émissions de radios, de vidéos ainsi que des magazines en espéranto.</p>
				
				<h2>Pour en savoir plus…</h2>
					
				<div class="float-right w30"><a href="http://esperanto-france.org/le-monde-de-l-esperanto"><img class="responsive-img" src="http://esperanto-france.org/local/cache-vignettes/L142xH200/arton792-aa561.jpg?1502203504" /></a></div><p class="parto">Pour en savoir plus sur l’espéranto, nous vous recommandons la lecture des rubriques <em>Culture</em>, <em>Apprendre</em> et <em>Pratiquer</em> sur le <b><a href="https://esperanto-france.org/">site d’Espéranto France</a></b></a>.<br>Vous pouvez également lire la revue <em>Le Monde de l’espéranto</em>, directement en ligne&nbsp;: <a href="https://esperanto-france.org/le-monde-de-l-esperanto">http://esperanto-france.org/le-monde-de-l-esperanto</a>.</p>

				<p class="parto">Pour recevoir tous les mois des idées sur la façon dont vous pourrez <b>pratiquer l’espéranto</b>, sur les événements près de chez vous ou à l’autre bout du monde, nous vous conseillons de <b>vous abonner</b> à la <a href="http://esperanto-france.org/lettre-d-informations-esperanto-aktiv">lettre d’informations Esperanto-Aktiv</a>.</p>
				
				<div class="float-right"><img class="responsive-img" src="https://esperanto-france.org/local/cache-vignettes/L200xH200/arton791-5356a.jpg?1501599220"></div>
<p class="parto">Vous pouvez également commander des <a href="https://esperanto-france.org/calendriers">petits calendriers</a> pour <b>faire connaître l’espéranto autour de vous</b>.
				</p>

				<p class="parto">Et si vous souhaitez <b>soutenir notre association</b>, nous vous proposons de rejoindre l’association en <a href="http://esperanto-france.org/adherer">adhérant Espéranto-France</a>. </p>
				
				<hr><p>Cette sélection est grandement inspirée de l’article <a href="https://medium.com/@Vanege/que-faire-en-esp%C3%A9ranto-o%C3%B9-utiliser-lesp%C3%A9ranto-sur-internet-b8ed5dba6986">Que faire en Espéranto&nbsp;?</a>, de @Vanege que vous pourrez retrouver sur <a href="https://medium.com/@Vanege">Medium</a>.<br><img src="<?=$vojo?>bildoj/vanege-eta.png" /></p>
			</section>

			<?php 
				}
				if ($section=="kielskribi") { 
			?>
			<h1>Comment écrire en espéranto&nbsp;?</h1>
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
				<p>Si vous souhaitez nous aider en tant que correcteur, vous pouvez nous contacter à l’adresse <a href="mailto:ikurso@esperanto-france.org">ikurso@esperanto-france.org</a> ou via le <a href="reago.php">formulaire de contact</a>.</p>
				<p>Il vous faudra dans un premier temps créer un compte comme le font les élèves, puis nous indiquer l’identifiant que vous avez choisi afin que nous puissions vous donner les droits de correcteur. En vous reconnectant sur votre compte, vous trouverez l’interface des correcteurs qui vous permettra de choisir le nombre d’élèves que vous souhaitez corriger et les gérer.</p>
				<p>Il n’y a pas de contrainte d’engagement en tant que correcteur ; il est juste nécessaire, si vous souhaitez arrêter de corriger, de mettre votre nombre d’élèves à zéro et de prévenir les administrateurs qui trouveront d’autres correcteurs à vos élèves en cours.</p>
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
								<li><a href="helpo.php?section=enskribo">Comment s’inscrire ?</a></li>
								<li><a href="helpo.php?section=kurso">Comment suivre le cours ?</a></li>
								<li><a href="helpo.php?section=kajposte">Que faire après le cours ?</a></li>
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
