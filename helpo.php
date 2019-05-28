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

				<p class="parto">Sur ce site, vous avez accès à deux cours différents&nbsp;:</p>
				<ul class="klarigo">
					<li>le <a href="fr/cge/lec01.php">cours en dix leçons</a>&nbsp;: cours pour débutants sous forme de pages web</li>
					<li><a href="fr/gerda/cxap01.php">Gerda malaperis</a>, cours de perfectionnement basé sur un petit roman en 25&nbsp;chapitres.</li>
				</ul>
				<p>Ces cours s’utilisent en auto-apprentissage mais cela ne signifie pas que vous serez seul durant votre étude. 
				Vous pouvez être aidé par un correcteur qui corrigera vos exercices et pourra répondre à vos questions. 
				Les échanges avec le correcteur se font par courriel.</p> 		

				<p class="parto">Pour suivre le cours, la première étape consiste à <b>créer un compte</b> sur la page d’accueil en cliquant sur le bouton bleu CRÉER UN COMPTE. Après avoir rempli les différents champs demandés, vous recevrez un courriel de confirmation qui nous permettra de nous assurer que votre adresse est correcte. Vous devrez cliquer sur le lien donné dans ce courriel afin de finaliser votre inscription.</p>
				<p>Vous pourrez alors commencer le cours que vous souhaitez suivre. À la fin de la première leçon, vous serez invité à envoyer les réponses aux exercices et à demander un correcteur.</p>
				
				<div class="video-container">
					<iframe width="853" height="480" src="https://www.youtube.com/embed/geK1LfWVt9Y" allowfullscreen></iframe>
				</div>


			</section>
					
			<?php 
				} 
				if ($section=="kurso") { 
			?>

			<h1>Comment suivre le cours ?</h1>
			
			<section id="faq" class="scrollspy">
				<p class="parto">Le cours est constitué de différentes pages. Il peut s’agir d’explications grammaticales ou culturelles, de vocabulaire, d’exercices sous la forme de phrases à traduire ou à rédiger ou bien de QCM (questionnaire à choix multiple). Une large place est donnée aux <b>exercices de mise en pratique</b>, aux <b>QCM</b>, aux <b>tests</b> afin que vous puissiez pas à pas évaluer vos progrès. Le cours peut être utilisé par des <b>débutants en mode autodidacte</b>, cependant nous vous conseillons de demander l’aide d’un tuteur qui corrigera vos exercices, sera disponible pour répondre à vos questions et vous suivra tout au long de votre apprentissage.</p>
				<p>En bas de chaque page, un bouton bleu TERMINÉ vous permettra d’indiquer votre progression. Sur le sommaire, les titres des pages terminées seront barrées.</p>
				<p class="parto">Dans certains exercices, chaque réponse que vous indiquez apparaîtra soulignée en vert lorsqu’elle est correcte. Une réponse qui n’est pas soulignée en vert ne veut pas dire qu’elle soit incorrecte, mais simplement que le système n’a pas pu l’analyser. Votre correcteur pourra alors vous donner des explications sur vos réponses.</p>
				<p>Dans le cas des QCM, il est nécessaire de réussir correctement l’ensemble du QCM pour atteindre le bouton TERMINÉ.</p>
				<p class="parto">Lorsque vous cliquez sur le bouton TERMINÉ en bas d’une page d’exercices, vos réponses sont enregistrées sur le serveur. Vous pouvez donc quitter le cours puis revenir plus tard sans perdre votre travail. À la fin de chaque leçon, la page <em>Épilogue et envoi des exercices</em> récapitule l’ensemble des réponses que vous avez données aux exercices de la leçon.<br>
					Vous pourrez ainsi relire vos réponses avant de les transmettre. Si vous le souhaitez, il vous est possible à ce moment de modifier vos réponses en revenant à la page d’exercices correspondante. Vous pouvez également ajouter un commentaire terminé à votre correcteur. Cliquez ensuite sur le bouton <b>ENVOYER À MON CORRECTEUR</b>.<br>Remarque : si vous n’avez pas encore demandé de correcteur, le bouton qui apparaît est alors intitulé DEMANDER UN CORRECTEUR.</p>
			</section>


			<h3>Quelques conseils pour atteindre vos objectifs&nbsp;:</h3>
			<ul class="klarigo">
				<li><b>Travaillez régulièrement</b>. Nous conseillons de faire <b>une leçon par semaine au minimum</b>. Chaque leçon est composée de plusieurs sections, que vous pouvez étudier à votre rythme. Il est préférable d’étudier 15&nbsp;minutes par jour que 2&nbsp;heures une fois par semaine. Vous pouvez donc répartir l’étude d’une leçon sur plusieurs sessions, en fonction du temps dont vous disposez.</li>
				<li><div class="float-right w25"><img class="responsive-img" src="<?=$vojo?>bildoj/notes.jpg" /></div>N’hésitez pas à <b>prendre des notes</b>, à recopier les mots de vocabulaire et les utiliser dans de nouvelles phrases. Notez les points qui vous paraissent importants et les questions que vous souhaitez poser à votre correcteur en fin de leçon.</li>
				<li><b>Apprenez le vocabulaire</b> du cours régulièrement, l’idéal étant de pouvoir le réviser tous les jours. Un outil d’apprentissage du vocabulaire est intégré dans ce cours pour vous en faciliter l’apprentissage. Quelques minutes par jour suffiront pour bien l’assimiler.</li>
				<li><div class="float-right w25"><img class="responsive-img" src="<?=$vojo?>bildoj/babili.png" /></div><b>Mettez en pratique</b> la langue dès que vous le pouvez&nbsp;: vous pouvez par exemple écrire quelques phrases en espéranto en commentaire lors de l’envoi de vos exercices. Essayez de parler en espéranto, même si c’est à votre reflet dans le miroir ou à votre chien*.</li>
			</ul>
			
			<p class="renvoi">* si vous avez un canari ou un poisson rouge, ça marche aussi&nbsp;!


			<?php 
				}
				if ($section=="kajposte") { 
			?>

			<h1>Que faire après le cours&nbsp;?</h1>
			<section id="kajposte" class="scrollspy">
				<p>Vous avez terminé le <em>Cours en dix leçons</em> ou le cours <em>Gerda malaperis</em> et vous vous demandez peut-être comment approfondir vos connaissances ou mettre en pratique ce que vous avez appris. Voici quelques suggestions qui vous permettront d’aller plus loin.</p> 
				
				<h2>Continuer d’apprendre</h2>
				
				<p class="parto">Si vous avez terminé le cours en dix leçons, nous vous recommandons de suivre le cours <a href="https://ikurso.esperanto-france.org/fr/gerda/index.php"><em>Gerda malaperis</em></a>. Ce cours est basé sur un roman de Claude Piron spécifiquement destiné à vous apprendre progressivement à maîtriser l’espéranto parlé à partir d’une histoire captivante.<p>
					
				<p class="parto">Pour améliorer votre <b>expression orale</b>, vous pouvez vous inscrire au cours <a href="https://edukado.net/ekparolu/prezento">Ekparolu!</a> qui vous permettra de converser par Skype avec un tuteur. Nous vous recommandons de suivre ce cours lorsque vous aurez terminé le cours <em>Gerda malaperis</em>.</p>  
				
				<p class="parto"><a href="http://bertilow.com/pmeg/">Plena Manlibro de Esperanto</a> est une <b>grammaire</b> complète de l’espéranto (en espéranto)</p>
				
				<p class="parto"><a href="https://babadum.com/">Babadum</a> vous permettra d’<b>apprendre 1500 mots</b> de manière ludique.</p>				
				<p class="parto">La <a href="http://www.eventoj.hu/steb/">Scienca kaj Teknika Esperanto-Biblioteko</a> donne accès à de nombreux <b>dictionnaires et lexiques</b> d’espéranto spécialisés dans différents domaines scientifiques et techniques.</p>

				<h2>Lire en espéranto</h2>
				
				<p class="parto">Dès que vous aurez terminé le premier cours, vous pourrez commencer à <b>lire des livres en espéranto</b>. Nous en avons sélectionné quelques-uns dans notre page <a href="<?php echo $vojo;?>butiko.php">Boutique</a>. Voir aussi tous les livres présentés dans la lettre mensuelle Espéranto-Aktiv dans la rubrique <a href="https://esperanto-france.org/lu-vu-entendu">Lu, vu, entendu</a>.</p>
				
				<p class="parto">Participez à <a href="https://www.interia.pl/">Sumoo</a>, le jeu où vous «lutterez» en lisant des livres en espéranto.</p>
				<p class="parto">Visitez les <b>bibliothèques en ligne</b>, dans lesquelles vous trouverez un certain nombre de livres électroniques téléchargeables gratuitement&nbsp;</p>
				<ul class="sublisto">
					<li>La page <a href="https://esperanto.org.uk/eldonoj/piron/">Verkoj de Claude Piron</a> présente les livres de Claude Piron, dont certains sont accessibles pour les débutants (voir la rubrique <em>Facila lingvaĵo</em>)&nbsp;;</li>
					<li>Vous pourrez relire en espéranto de nombreux classiques sur le site <a href="http://i-espero.info/elsutaro/esperantaj-libroj">eLibrejo</a>.</li>
					<li><a href="http://www.esperanto.es:8080/jspui/handle/11013/1">Bitoteko</a> est la bibliothèque de la fédération espagnole d'espéranto. Vous pourrez y télécharger un grand nombre de livres en espéranto.</li>
					<li>Vous pourrez également télécharger des livres en espéranto sur <a href="http://esperantofre.com/edu/libroje.htm">les pages d'Enrique</a>, <!--la Librejo de Cindy Moon McKee,--> la page <a href="http://esperanto.us/">Elŝutu Senpage</a> de esperanto.us ou encore sur le groupe Facebook <a href="https://www.facebook.com/groups/librejo/files/">Librejo</a>.</li>
					<li>La page <a href="http://www.esperanto.net/literaturo/novel/index.html">Originalaj noveloj, novelaroj kaj rakontoj en Esperanto</a> présente une liste de 380 livres écrits originellement en espéranto ainsi que leurs auteurs.</li>
				</ul>
					
				<p class="parto">Citons aussi <strong>quelques romans faciles à lire</strong> et <strong>accessibles gratuitement</strong> en ligne&nbsp;: 
				<a href="http://www.u-matthias.de/verko/fajron.htm">Fajron sentas mi interne</a> de Ulrich Matthias, <a href="http://literaturo.org/HARLOW-Don/Esperanto/Kursoj/Verda_Koro/leciono_01.html">La verda koro</a> de Julio Baghy, <a href="http://www.esperanto.net/literaturo/novel/novlibr/dankamik.pdf">Dankon, Amiko</a> de Claude Piron, 
				
				<p class="parto">De nombreux <b>magazines</b> sont disponibles en espéranto. Aleks vous présente ici un petit tour du monde des magazines en espéranto&nbsp;:<br>
					<span class="eta">(vous pouvez activer les sous-titres en français)</span>
				</p>
				<p><iframe width="560" height="315" src="https://www.youtube.com/embed/yVjtft16rNo?rel=0"
frameborder="0" allowfullscreen></iframe></p>

				<p class="parto"><a href="http://bitarkivo.org/doku.php/hejmo">BitArkivo</a> permet de lire en ligne plus des magazines en espéranto du monde entier.</p>
				
			<div class="float-right w30"><a href="https://esperanto-france.org/le-monde-de-l-esperanto">
					<img class="responsive-img" src="https://esperanto-france.org/local/cache-vignettes/L142xH200/arton792-aa561.jpg?1502203504" /></a>
			</div>
			<p class="parto">Parmi les très nombreuses revues, les plus connues sont celles des associations internationales&nbsp;: 
				la revue <a href="https://uea.org/revuoj/esperanto"><i>Esperanto</i></a>, éditée par l’association mondiale d’espéranto, 
				tout à fait abordable par les nouveaux apprenants de la langue.<br> 
				Dans le même esprit, citons également <a href="https://heroldodeesperanto.com/"><i>Heroldo de Esperanto</i></a> et <a href="http://esperanto-ondo.ru/"><i>La Ondo de Esperanto</i></a>.</p>
				<p>Certains magazines s’adressent tout particulièrement aux débutants en proposant des textes rédigés dans un style «&nbsp;facile&nbsp;», voire «&nbsp; très facile&nbsp;». C’est le cas de <a href="http://tejo.org/fr/revuo-kontakto/"><i>Kontakto</i></a>. </p>
				<p class="parto">Vous pouvez également lire directement en ligne la revue <a href="https://esperanto-france.org/le-monde-de-l-esperanto">Le Monde de l’espéranto</a>, éditée par Espéranto-France.</p>

				<p class="parto">Sans oublier <a href="https://eo.wikipedia.org/wiki/Vikipedio:%C4%88efpa%C4%9Do">Vikipedio</a>, la version en espéranto de Wikipédia.</p>
				<div class="card-panel blue lighten-5">
					<p><strong>Voir aussi :</strong> <a href="<?php echo $vojo;?>fr/cge/lec09.php?section=7">Les revues en espéranto</a> (leçon 9 du <em>Cours en 10 leçons</em>).</p>
				</div>

				<h2>Voyager, rencontrer d’autres espérantophones</h2>
				
				<div class="float-right w30"><a href="https://esperanto-france.org/le-monde-de-l-esperanto"><img class="responsive-img" src="<?=$vojo?>bildoj/pasporta-servo-2017.jpg" /></a></div><p class="parto">Avec le <a href="https://www.pasportaservo.org/">Pasporta Servo</a>, <b>voyagez</b> dans le monde entier en étant hébergé chez des espérantophones, ou partez à la rencontre d’espérantophones du monde entier en les hébergeant chez vous.</p>
				
				<p class="parto">Les congrès et rencontres sont également des occasions pour rencontrer d’autres espérantophones. Ces rencontres peuvent alterner
					conférences, groupes de travail, concerts, ateliers divers, tourisme, etc. Pour en savoir plus, voir la rubrique <a href="https://esperanto-france.org/congres">Congrès</a> sur le site d’Espéranto-France.</p>

				<p class="parto"><strong>Cafés</strong>, <strong>maison des associations</strong>, <strong>stands</strong> sont des lieux de rencontre où l’on peut parler espéranto&nbsp;:</p>
				<ul class="sublisto">
					<li>À Paris, des cercles de discussion ont lieu au siège d’<a href="https://esperanto.paris/">Espéranto Paris-Île-de-France</a> et à celui de <a href="http://www.sat-amikaro.org/article2145.html">SAT-Amikaro</a></li>
					<li>À Lyon, faites un tour au <a href="http://www.kotopo.net/">KoToPo</a> (Espace culturel international)</li>
				</ul>
				<p>Les clubs organisent souvent, en plus des cours ou stages, des cercles de conversation sur un thème ou un repas commun. 
					Voyez par exemple ce que propose le <a href="http://esperantostrasbourg.free.fr/sorties.html">club de Strasbourg</a>.</p>
				<p class="parto">Espéranto-France invite régulièrement des espérantophones étrangers pour des <strong>tournées de conférences</strong> dans les clubs locaux. 
					Cela peut être pour vous l’occasion de découvrir des cultures différentes et de faire de nouvelles connaissances. 
					Pour en savoir plus, voir la rubrique <a href="https://esperanto-france.org/conferences">Conférences</a> sur le site d’Espéranto-France.</p>
				
				<p class="parto">Retrouvez la liste des <b>rencontres d’espéranto</b> en France et à l’étranger, des événements organisés près de chez vous
					dans notre <a href="https://esperanto-france.org/calendrier">calendrier</a> et tous les mois dans la 
					<a href="https://esperanto-france.org/esperanto-aktiv">lettre d’informations Esperanto Aktiv</a>.</p>
				
				<h2>Correspondre avec des espérantophones du monde entier</h2>
				
				<p class="parto">Voici une sélection de sites permettant de <strong>trouver des correspondants</strong>&nbsp;:</p>

				<div class="float-right w25"><img class="responsive-img" src="<?=$vojo?>bildoj/bildkarto.png" /></div>
				<ul class="sublisto">
					<li><a href="http://adresaro.org/">Koresponda Servo Universala</a></li>
					<li><a href="https://adresaro.org/">Tutmonda Esperanto-adresaro</a> permet de trouver des correspondants </li>
					<li>le <a href="https://edukado.net/komunumo/korespondaservo">korespondaservo</a> de <em>Edukado.net</em>.</li>
					<li>et aussi <a href="https://bildkarto.weebly.com/">Esperanto-Poŝtkruciĝo</a>, un service d’échange de cartes postales avec les espérantophones du monde entier.</li>
				</ul>
				
				<h2>Communiquer, s’informer, échanger grâce aux réseaux sociaux</h2>
				
				<p class="parto">Vous pouvez <b>discuter</b> avec d’autres espérantophones, grâce à des applications comme <a href="https://amikumu.com/fr/">Amikumu</a>, ou encore <a href="https://telegramo.org/">Telegram</a>. Il existe sur Telegram différents groupes en espéranto, dont vous trouverez la liste sur <a href="https://telegramo.org/">telegramo.org</a>. Vous pourrez également discuter en français ou en espéranto dans le groupe <a href="https://t.me/joinchat/BnEs0z8UBiqWLftwyd_5wA">français – Esperanto</a>.</p>
				
				<div class="float-right w15"><img class="responsive-img" src="<?=$vojo?>bildoj/hellotalk.gif" /></div><p class="parto">Certaines applications permettant les <b>échanges linguistiques</b> en diverses langues proposent aussi l’espéranto. C’est le cas par exemple de <a href="https://www.hellolingo.com/">Hellolingo</a>, de <a href="https://www.hellotalk.com/">HelloTalk</a>.<br>
				L’espéranto fait aussi partie des langues praticables sur <a href="https://hinative.com/fr-FR">HiNative</a>, qui rassemble une communauté d’étudiants de langues diverses et permet de poser des questions à des locuteurs parlant couramment la langue que vous apprenez.</p> 
				
				<p class="parto">Vous pouvez également suivre les espérantophones actifs sur <a href="https://twitter.com/search?f=users&vertical=default&q=Esperanto&src=typd">Twitter</a>, suivre le <a href="https://www.facebook.com/groups/51339664932">groupe Facebook d’Esperanto-France</a>. Pensez aussi à utiliser le hashtag #Esperanto !</p>
				
				<p class="parto">Il existe sur Facebook de <strong>nombreux groupes en espéranto</strong>&nbsp;: <a href="https://www.facebook.com/groups/esperanto.grupo/">Esperanto Grupo</a>, <a href="https://www.facebook.com/groups/konsultejo">Lingva konsultejo</a>, <a href="https://www.facebook.com/groups/51339664932/">Espéranto-France</a>, <a href="https://www.facebook.com/groups/agadejo/">Agadejo</a>, etc.</p>
				
				<p class="parto"><a href="https://www.reddit.com/r/Esperanto/">Reddit en espéranto</a> vous donnera des liens vers de nombreux sites Internet en espéranto.</p>

				<h2>Écouter de la musique ou simplement écouter parler en espéranto</h2>
								
				<p class="parto">Écoutez toute la <b>musique</b> du catalogue de Vinilkosmo, la plus grande maison d’édition de musique en espéranto, en vous abonnant au <a href="https://esperanto-france.org/esperanto-aktiv-78-decouverte">club Vinilkosmo</a>.</p>
				<p class="parto">Sur le site <a href="https://list.ly/list/3MD-esperanto-music">Listly</a> vous pourrez voir des extraits de concerts en espéranto.</p>
				
				<div class="float-right w25"><img class="responsive-img" src="<?=$vojo?>bildoj/radio-pola.png" /><br><img class="responsive-img" src="<?=$vojo?>bildoj/radio-varsovia-vento.jpg" /><br><img class="responsive-img" src="<?=$vojo?>bildoj/radio-muzaiko.jpg" /><br><img class="responsive-img" src="<?=$vojo?>bildoj/radio-cxina.png" /><br><img class="responsive-img" src="<?=$vojo?>bildoj/radio-australio.png" /><br><img class="responsive-img" src="<?=$vojo?>bildoj/radio-rio.png" /><br><img class="responsive-img" src="<?=$vojo?>bildoj/radio-vatikana.png" /><br><img class="responsive-img" src="<?=$vojo?>bildoj/radio-malagasio.png" /></div>
				<p class="parto">Écoutez la <b>radio</b> ou des <b>podcasts</b> en espéranto&nbsp;:</p>
					<ul class="sublisto">
						<li><a href="http://esperantaretradio.blogspot.de/">Esperanta Retradio</a> présente un court reportage quotidien avec retranscription&nbsp;;</li>
						<li><a href="http://muzaiko.info/">Muzaiko</a> est une radio en ligne qui diffuse en continu (essentiellement des musiques et des rediffusions)&nbsp;;</li>
						<li><a href="https://www.podkasto.net/">Varsovia Vento</a> relate les événements récents en «Espérantie»&nbsp;;</li>
						<li><a href="https://kern.punkto.info/">Kern.punkto.net</a> traite des sujets relatifs à la technologie, la culture ou la société&nbsp;;</li>
						<li><a href="http://melburno.org.au/3ZZZradio/">3ZZZ</a> est une émission hebdomadaire d’une heure diffusée depuis Melbourne. Lecture d’articles de différentes revues en espéranto&nbsp;;</li>
						<li><a href="http://pola-retradio.org/" data-href="http://pola-retradio.org/">Pola Retradio</a> présente tous les jours une émission en espéranto, axée sur la culture et les nouvelles en Pologne&nbsp;;</li>
						<li><a href="http://esperanto.cri.cn/">Chinese International Radio</a></li>
					</ul>
				<p class="parto">Vous pourrez écouter sur <a href="http://novajhoj.weebly.com/">STUDIO</a> une sélection d’<strong>émissions de radios en espéranto</strong>.</p>

				<p class="parto">Citons aussi quelques <strong>émissions en français sur l’espéranto</strong>&nbsp;:</p>
					<ul class="sublisto">
						<li><a href="http://www.esperanto-midipyrenees.org/download/cat.php?val=43_emissions+radio" target="_blank">Esperanto-Magazino</a> est une émission radio hebdomadaire d’une heure présentée par Espéranto Midi-Pyrénées.</li>	
						<li><a href="https://media.radio-libertaire.org/">Radio Espéranto</a> est présentée tous les vendredis à 17h30 sur Radio Libertaire</a>. l’émission est en partie en espéranto et en partie en français.</li>
					</ul>
					 
				<p class="parto">Vous pouvez également écouter la radio sur votre téléphone Android grâce à l’application <a href="https://play.google.com/store/apps/details?id=dk.nordfalk.esperanto.radio">Esperanto-radio Muzaiko</a>.
				
				<div class="card-panel blue lighten-5">
					<p><strong>Voir aussi :</strong> <a href="<?php echo $vojo;?>fr/cge/lec04.php?section=13">La chanson espérantophone</a> (leçon 4 du <em>Cours en 10 leçons</em>).</p>
				</div>

				<h2>Jouer en espéranto</h2>

				<div class="float-right w15"><img class="responsive-img" src="<?=$vojo?>bildoj/samopiniuloj.png" /></div>
				<p class="parto">Par exemple au <a href="https://skrablo.ikso.net/">Scrabble</a> ;</p>
				<p class="parto">ou à <a href="https://esperanto-france.org/esperanto-aktiv-70-decouverte">Samopiniuloj</a>, un jeu qui vous permettra d’enrichir votre vocabulaire.</p>
				<p class="parto">Le jeu <a href="https://edukado.net/ensaluti?reen=ludoj/risko/montri">Risko</a>, proposé par <i>Edukado.net</i> vous permettra de tester vos connaissances sur l’espéranto, son histoire et sa culture, à raison de 3 nouvelles questions chaque jour.</p>
				<div class="row">
					<p class="col s3 offset-s5"><img class="responsive-img" src="<?=$vojo?>bildoj/ludo-risko.png" /></p>
				</div>
				
				<h2>Regarder des vidéos en espéranto</h2>
				
				<p class="parto">Vous trouverez  en ligne des <strong>vidéos</strong> variées en espéranto, par exemple la chaîne YouTube <a href="https://www.youtube.com/playlist?list=PLKoNPO1uy9rpdZCtXFEDaIroKT4LcGqjc">Easy Esperanto Talk Videos</a> qui présente des vidéos en espéranto faciles à comprendre, ou <a href="https://www.youtube.com/user/Evildela">Evildela</a>, un espérantophone australien qui publie régulièrement des vidéos en espéranto, ou encore <a href="https://www.youtube.com/channel/UCAFUQWc8ykcRCOES3NvvcfQ/featured">Language Stuff</a>, la chaîne d’un Américain qui présente son apprentissage de l’espéranto.</p>
				<p class="parto">Retrouvez toutes les chaînes actives en espéranto dans ce document&nbsp;: <a href="https://docs.google.com/document/d/1OCtT3Mjob-LNUrDfaZqzb8j2BDPAqTBeqC3TFY3lIa0/edit">(Preskaŭ) Kompleta Listo de AKTIVAJ Esperantaj Jutubistoj</a>.</p>
				<p class="parto">Sur son blog <a href="http://esperantretfilmoj.blogspot.fr/">ESPERANTAJ RETFILMOJ</a>, Jacques Baratié présente régulièrement 
				une sélection de vidéos en espéranto ou sur l’espéranto, classées selon les sujets les plus divers.</p>
				<p class="parto"><a href="http://novajhoj.weebly.com/">STUDIO</a>, déjà cité, présente également une <strong>sélection de vidéos</strong> ainsi que des <strong>magazines en espéranto</strong>.</p>
				<div class="float-right w15"><img src="<?php echo $vojo;?>bildoj/senlime.jpg" class="responsive-img"></div>
				<p class="parto"><a href="http://www.senlime.be/Kino/Kin_Fr.htm">Senlime</a> aborde différents aspects du cinéma en espéranto&nbsp;: histoire, films en espéranto ou dans lesquels l’espéranto apparaît, sous-titrage, etc.</p>  
				<p class="parto"><strong>Documentaires :</strong></p>
				<ul class="sublisto">
					<li><a href="https://esperanto-france.org/Esperanto-de-Dominique-Gautier"><em>Espéranto</em></a>&nbsp;: disponible en DVD, ce documentaire de Dominique Gautier, présente un panorama de l’espéranto tel qu’il peut se pratiquer actuellement, au travers d’entretiens d’espérantophones de toutes les régions du monde et de reportages tournés lors de différentes rencontres internationales.</li>
					<li><a href="http://esperantodocumentary.com/en/about-the-film.html"><em>The Universal Language</em></a>, de Sam Green, retrace l’histoire de l’espéranto. Ce documentaire peut être téléchargé ou visionné en ligne, soit en anglais soit en espéranto.</li>
				</ul>
				<p><strong>Voir aussi :</strong> l’article <a href="https://fr.wikipedia.org/wiki/Cin%C3%A9ma_esp%C3%A9rantophone">Cinéma espérantophone</a>, sur Wikipédia</p>

				<h2>Pour en savoir plus…</h2>
					
				<div class="float-right"><img class="responsive-img" src="https://esperanto-france.org/local/cache-vignettes/L200xH200/arton791-5356a.jpg?1501599220"></div><p class="parto">Pour en savoir plus sur l’espéranto, nous vous recommandons la lecture des rubriques <em>Culture</em>, <em>Apprendre</em> et <em>Pratiquer</em> sur le <a href="https://esperanto-france.org/">site d’Espéranto France</a>.</p>

				<p class="parto">Pour recevoir tous les mois des idées sur la façon dont vous pourrez <b>pratiquer l’espéranto</b>, sur les événements près de chez vous ou à l’autre bout du monde, nous vous conseillons de <b>vous abonner</b> à la <a href="https://esperanto-france.org/lettre-d-informations-esperanto-aktiv">lettre d’informations Esperanto-Aktiv</a>.</p>
				
				<p class="parto">Vous pouvez également commander des <a href="https://esperanto-france.org/calendriers">petits calendriers</a> pour <b>faire connaître l’espéranto autour de vous</b>.
				</p>

				<div class="card-panel blue lighten-5">
					<p><strong>Vous avez aimé ce cours proposé par Espéranto-France&nbsp;?</strong> Pour <strong>nous aider et soutenir notre association</strong>, 
						nous vous proposons de rejoindre l’association en 
						<a href="https://esperanto-france.org/adherer-a-esperanto-france">adhérant Espéranto-France</a>. </p>
				</div>
				
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
				if ($section=="kielhelpi") { 
			?>

			<h1>Comment nous aider ?</h1>
			
			<section id="kielhelpi" class="scrollspy">
			
				<p>Nos activités, ponctuelles ou permanentes, sont essentiellement assurées par des bénévoles, au siège comme partout en France. 
					Les tâches sont variées et peuvent correspondre à des centres d’intérêt très différents. 
					Vous aussi, vous pouvez participer&nbsp;! Il suffit de nous contacter sur la page <a href="reago.php">contact</a>.</p>
				
				<h2>Adhérer à l'association</h2>

				<p class="parto">Si les cours sont gratuits, c'est avant tout cas nous avons des membres qui payent une cotisation et qui nous permettent de réaliser un grand nombre d'activités. En adhérant, vous soutenez une association qui fait connaître l'espéranto lors de différents salons, en diffusant des brochures d'information, qui aide à son enseignement (par ce cours, mais aussi en éditant des manuels d'apprentissage), et qui participe à sa diffusion grâce à l'organisation de congrès, en soutenant des projets culturels, en éditant des livres etc.</p>
				<p>Si vous souhaitez rejoindre nos membres, vous pouvez adhérer en ligne à l'adresse <a href="https://esperanto-france.org/adherer">https://esperanto-france.org/adherer</a>.</p>

				<h2>Correction des cours internet</h2>
				
				<p class="parto">Les correcteurs des cours sont des bénévoles. Certains suivent 1, 2 ou 3 élèves, d’autres s’occupent de plusieurs dizaines d’élèves.
				Quel que soit le temps que vous voulez y consacrer, vous pourrez aider. Un grand nombre de correcteurs ont commencé après 
				avoir fini le cours <em>Gerda Malaperis</em>. Il est important d’avoir un bon relationnel, de la patience et de la curiosité.</p>
				<p>Si vous souhaitez nous aider en tant que correcteur, vous pouvez nous contacter à l’adresse <a href="mailto:ikurso@esperanto-france.org">ikurso@esperanto-france.org</a> ou via le <a href="reago.php">formulaire de contact</a>.</p>
				<p>Il vous faudra dans un premier temps créer un compte<span class="eo">*</span> comme le font les élèves, puis nous indiquer l’identifiant que vous avez choisi afin que nous puissions vous donner les droits de correcteur. En vous reconnectant sur votre compte, vous trouverez l’interface des correcteurs qui vous permettra de choisir le nombre d’élèves que vous souhaitez corriger et les gérer.</p>
				<p>Il n’y a pas de contrainte d’engagement en tant que correcteur ; il est juste nécessaire, si vous souhaitez arrêter de corriger, de mettre votre nombre d’élèves à zéro et de prévenir les administrateurs qui trouveront d’autres correcteurs à vos élèves en cours.</p>
				<p><span class="eo">*</span> Si vous avez déjà un compte parce que vous avez été élève sur ce site, vous n’avez pas besoin d’en créer un nouveau.</p>
	
				<h2>Développements informatiques</h2>
	
				<p class="parto">Les mots PHP, html, css, MySQL vous sont familiers&nbsp;? Nous recherchons toujours de l’aide pour améliorer les cours internet. 
					Nous avons un grand nombre d’idées de fonctionnalités à mettre en place et malheureusement pas assez de temps pour tout faire.</p>
					<p>Le code source du site se trouve sur <a href="https://github.com/axel584/ikurso">github.com/axel584/ikurso</a>. Dans la rubrique «issues», nous avons listé des idées d’améliorations ou de corrections à mettre en place. Pour nous aider, vous pouvez commencer par regarder les «issues» qui ont été labellisées <a href="https://github.com/axel584/ikurso/issues?q=is%3Aopen+is%3Aissue+label%3AFacile">facile</a>. 
	
				<h2>Traduction</h2>
				<p class="parto">Il existe beaucoup de projets qui consistent à traduire des documents du français à l’espéranto et nous recherchons des gens pour nous aider. Vous ne serez pas seul, mais il est indispensable d'avoir de bonnes bases et beaucoup de patience.</p>
	
				<h2>Esperanto-aktiv’</h2>
			
				<p class="parto">L’association Espéranto-France envoie tous les mois une lettre d’information mensuelle en français qui s’appelle Esperanto-Aktiv’. 
				Pour cette lettre, nous avons besoin de 3 profils différents :</p>
				<ul class="sublisto">
					<li><em>Article «découverte»</em> : vous rédigerez un article tous les mois (ou une fois de temps en temps) sur un sujet donné. 
					Ou bien les questions d’une interview. Nous avons besoin de gens curieux qui sont capables de rédiger facilement en français.</li>
					<li><em>Calendrier</em> : vous rassemblez des informations trouvées à droite à gauche sur différents sites Internet. 
					Un travail simple, mais répétitif pour lequel nous avons besoin de quelqu’un de rigoureux.</li>
					<li><em>Le livre du mois</em> : vous rédigerez un article en français sur un livre en espéranto que vous aurez lu. 
					Nous recherchons des passionnés de lecture (en espéranto).</li>
				</ul>

				<h2>Bénévole au siège pour faire des colis</h2>
				<p class="parto">Le siège de l’association d’Espéranto-France, au 4 bis rue de la Cerisaie à Paris (métro Bastille), est un lieu où se retrouvent plusieurs bénévoles qui viennent 2 à 3 jours chaque semaine pour faire des colis, saisir les cotisations, répondre au courrier. Pas besoin d’être un expert en espéranto pour pouvoir donner un coup de main, et pourtant, sans les bénévoles du siège, l’association ne fonctionnerait pas.</p>

				<h2>Stocker du matériel</h2>
				<p class="parto">Le local de l’association est petit, or l’association édite des livres, des bandes dessinées, des dictionnaires, des manuels... qui prennent beaucoup de place dans nos locaux. Si vous disposez d’un peu de place (1 ou 2 mètres carrés pourraient suffire), cela nous ferait gagner de la place de stockage et nous permettrait de lancer de nouveaux projets d’édition.</p>

				<h2>Correspondant local de relation avec la presse</h2>
				<p class="parto">Si vous êtes impliqué dans une association locale, il y a fort à parier que vous organisez différents événements. Que ce soit l’assemblée générale, des cours d’espéranto, des conférences d’étrangers, etc. Et pour faire connaître ces événements, vous avez peut-être l’habitude de contacter les journaux locaux. Dans ce cas, vous pouvez devenir correspondant local de relation presse. Didier Loison - Didier Loison, notre vice-président, rassemble les articles parus dans la presse nationale ou locale et échange différents conseils pour améliorer les contacts avec les journalistes. Il arrive qu’un correspondant local d’Espéranto-France soit à l’origine d’un communiqué de presse qui peut être envoyé à l’échelle nationale. Pour devenir correspondant local, contactez Didier : <a mailto="didier.loison@free.fr">didier.loison@free.fr</a></p>

				<h2>Membre du conseil d’administration</h2>
				<p class="parto">Notre association se réunit physiquement tous les trois mois pour prendre les décisions nécessaires au fonctionnement et au développement de l’association. C’est à l’occasion de ces réunions du conseil d’administration que l’on choisit les projets qui seront mis en place et que l’on discute des initiatives à soutenir. Prendre part au conseil d’administration, c’est participer activement à l’association. Nos membres du CA sont répartis aux quatre coins de la France et permettent de garder un lien avec le terrain et d’être au courant des différents projets qui peuvent être proposés.</p>
				<p>Si vous souhaitez vous porter candidat, vous pouvez contacter le bureau de l’association à l’adresse : <a href="estraro@esperanto-france.org">estraro@esperanto-france.org</a></p>

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
								<li><a href="helpo.php?section=kielhelpi">Comment nous aider ?</a></li>
							</ul>
						</div>
					</li>
				</ul>
			</div>
		</aside>
	</div>
<?php include "pagxpiedo.inc.php"; ?>
