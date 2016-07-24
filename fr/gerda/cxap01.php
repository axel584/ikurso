<?php 
$titolo="1 (unu)";
$leciono = 1;
$section=isset($_GET["section"])?$_GET["section"]:"1";
include "gerdakapo.inc.php";
?>
<div class="row">
	<article class="col s12 m10 l7 offset-m1 offset-l1">
		
		<section id="leciono-enhavo">
		<?php 
		getTitoloLecionero('GR',1,$section);
		?>
		<?php
		if ($section=="1") {
			include "gerdasono.inc.php";
		?>

			<h2>En universitata restoracio</h2>
			<div class="row dialogo">
				<div class="col s12 m8">
					<p>(En universitata restoracio)</p>
					<p><b>Tom:</b> Saluton, Linda.</p>		
					<p><b>Linda:</b> Saluton, Tom.</p>
					<p><b>Tom:</b> Diru al mi: kiu estas tiu?</p>
					<p><b>Linda:</b> Kiu?</p>
					<p><b>Tom:</b> Tiu alta, blonda, juna viro...</p>
					<p><b>Linda:</b> Kiu?</p>
				</div>
				<div class="col s12 m4">
					<img src="bildoj/gerda01-2.gif" class="responsive-img">
				</div>
			</div>
			<div class="row dialogo">
				<div class="col s12 m8">
					<p><b>Tom:</b> Tiu, kiu sidas en la angulo.</p>
					<p><b>Linda:</b> Ho, tiu!</p>
					<p><b>Tom:</b> Jes, tiu.</p>
					<p><b>Linda:</b> Mi ne scias. Mi ne scias, kiu li estas. Nova studento,verŝajne.</p>
					<p><b>Tom:</b> Li estas tute sola.</p>
					<p><b>Linda:</b> Ne. Rigardu. Bela knabino iras al li.</p>
					<p><b>Tom:</b> Ne bela. Juna, eble, sed ne bela. Nur vi estas bela, Linda.</p>
				</div>
				<div class="col s12 m4">
					<img src="bildoj/gerda01-1.gif" class="responsive-img">
				</div>
			</div>
			<div class="row dialogo">
				<div class="col s12 m8">
					<p><b>Linda:</b> Tom, kara! Kio okazas al vi? Eble vi laboras tro multe, kaj...</p>
					<p><b>Tom:</b> Nenio speciala okazas al mi. Kaj mi ne laboras tro multe.
					Fakte, mi laboras malmulte nun. La vera demando estas: kio okazas al vi, Linda? Nur vi estas vere bela.</p>
					<p><b>Linda:</b> Nu, nu...</p>
					<p><b>Tom:</b>	Estas fakto. Nur vi estas bela, Linda. Mi estas sincera. Venu kun mi!</p>
				</div>
				<div class="col s12 m4">
					<img src="bildoj/gerda01-3.gif" class="responsive-img">
				</div>
			</div>
			<div class="row dialogo">
				<div class="col s12 m8">
					<p><b>Linda:</b>	Sed...</p>
					<p><b>Tom:</b>	Venu. Al la granda spegulo. Rigardu. Jen estas Linda, la plej
					bela virino en la mondo, la plej bela virino en la tuta mondo.</p>
					<p><b>Linda:</b>	Kaj jen estas Tom, la plej malserioza knabo en la tuta
					universitato.</p>
				</div>
				<div class="col s12 m4">
					<img src="bildoj/gerda01-4.gif" class="responsive-img">
				</div>
			</div>
			
		<?php 
		} // fin section 1
		if ($section=="2") {
		?>
			<p class="parto"><b>-o</b> : <i>nom</i></p>
			<p><span class="ekz">vera</span> : vrai &rarr; <span class="ekz">la vero</span> : la v&eacute;rit&eacute;</p>
			<p><span class="ekz">bela</span> : beau &rarr; <span class="ekz">belo</span> : beaut&eacute;</p>
			<p><span class="ekz">ebla</span> : possible &rarr; <span class="ekz">eblo</span> : possibilit&eacute;</p>
			<p><span class="ekz">li demandas</span> : il demande &rarr; <span class="ekz">demando</span> : une question</p>
			<p><span class="ekz">mi scias</span> : je sais &rarr; <span class="ekz">scio</span> : savoir (n.), connaissance</p>
			
			<h3>-a : <i>adjectif</i></h3>
			<p><span class="ekz">viro</span> : homme &rarr; <span class="ekz">vira</span> : masculin</p>
			<p><span class="ekz">angulo</span> : angle &rarr; <span class="ekz">angula</span> : angulaire</p>
			
			<h3>-e : <i>adverbe</i></h3>
			<p><span class="ekz">bela</span> : joli &rarr; <span class="ekz">bele</span> : joliment</p>
			<p><span class="ekz">knabino</span> : (jeune) fille &rarr; <span class="ekz">knabine</span> : comme une fille</p>
			<p><span class="ekz">vi demandas</span> : vous demandez, tu demandes &rarr; 
			<span class="ekz">demande</span> : de fa&ccedil;on interrogative</p>
			
			<h3>-as : <i>verbe, temps pr&eacute;sent</i></h3>
			<p><span class="ekz">serioza</span> : s&eacute;rieux &rarr; 
			<span class="ekz">mi seriozas</span> : je suis s&eacute;rieux</p>
			<p><span class="ekz">kunsido (kun + sido)</span> : une rencontre (litt&eacute;ralement : "une assis-avec", "un assis-ensemble") &rarr;
			<p><span class="ekz">vi kunsidas</span> : tu prends part &agrave; une r&eacute;union</p>
			
			<h3>-i : <i>verbe, infinitif</i></h3>
			<p>Ce mode n'est pas utilis&eacute; dans la le&ccedil;on mais il est habituel de citer les verbes &agrave; 
			l'infinitif dans les dictionnaires. Nous suivons cette habitude dans la liste ci-dessus.
			</p>
			<p><span class="ekz">sidi</span> : &ecirc;tre assis &rarr; <span class="ekz">li sidas</span> : il est assis</p>
			
			<h3>-u : <i>verbe, imp&eacute;ratif</i></h3>
			<p><span class="ekz">vi sidas</span> : tu es assis &rarr; 
			<span class="ekz">sidu!</span> : assieds-toi (mot-&agrave;-mot "sois assis")</p>
			<p><span class="ekz">venu!</span> : viens !, venez ! &rarr; 
			<span class="ekz">ne venu!</span> : ne viens pas !, ne venez pas!</p>
			<p><span class="ekz">iru!</span> : va !, allez ! </p>
			<p><span class="ekz">li iru!</span> : qu'il aille !</p>
			
			<h3>mal- : <i>oppos&eacute;, contraire</i></h3>
			<p><span class="ekz">alta</span> : haut &rarr; <span class="ekz">malalta</span> : bas</p>
			<p><span class="ekz">multe</span> : beaucoup &rarr; <span class="ekz">malmulte</span> : peu, pas beaucoup</p>
			<p><span class="ekz">vero</span> : v&eacute;rit&eacute; &rarr; <span class="ekz">malvero</span> : mensonge</p>
			
			<h3>-in- : <i>femelle</i></h3>
			<p><span class="ekz">knabo</span> : gar&ccedil;on &rarr; <span class="ekz">knabino</span> : fille</p>
			
			<h3>Exemples d'utilisation de "kiu" :</h3>
			<p><span class="ekz">kiu estas Linda?</span> : qui est Linda ?</p>
			<p><span class="ekz">kiu scias?</span> : qui sait ?</p>
			<p><span class="ekz">kiu estas tiu knabo?</span> : qui est ce gar&ccedil;on ?</p>
			
			<p><span class="ekz">kiu knabo laboras?</span> : quel gar&ccedil;on travaille ?</p>
			<p><span class="ekz">al kiu knabino li iras?</span> : vers quelle fille va-t-il ?</p>
			<p><span class="ekz">en kiu universitato la knabino laboras?</span> : 
			dans quelle universit&eacute; la fille travaille-t-elle?</p>
			<p><span class="ekz">la viro, kiu rigardas</span> : l'homme qui regarde<br>
			<p><span class="ekz">la universitato, en kiu mi laboras</span> : 
			l'universit&eacute; dans laquelle je travaille</p>
			<p><span class="ekz">la knabo, al kiu vi rigardas</span> : le gar&ccedil;on que tu regardes</p>
			
			<?php 
			} // fin section 2
			if ($section=="3") {
			?>
			<p>
			Dans ce premier chapitre nous vous indiquons la prononciation des mots
			pour que vous rappeliez bien les quelques difficult&eacute;s de prononciation
			de l'esp&eacute;ranto pour un fran&ccedil;ais :
			</p>
			<p>
			<ul class="retrait">
				<li>le <span class="eo">s</span> se prononce toujours "ss" jamais comme "z"</li>
				<li>le <span class="eo">s</span> se prononce toujours m&ecirc;me en fin de mot</li>
				<li>le <span class="eo">n</span> ne nasalise jamais la voyelle pr&eacute;c&eacute;dente</li>
				<li>le <span class="eo">h</span> est toujours expir&eacute;</li>
				<li>le <span class="eo">r</span> est roul&eacute; (mais si vous n'y arrivez pas ce n'est pas grave)</li>
				<li>l'accent tonique est sur l'avant-derni&egrave;re syllabe</li>
				<li>une syllabe pour chaque voyelle (m&ecirc;me i devant une autre voyelle)</li>
			</ul>
			</p>
			<p>
			Dans la prononciation figur&eacute;e nous s&eacute;parons les syllabes par des
			tirets, la syllabe accentu&eacute;e apparaissant en gras. Prononcez chaque
			syllabe ainsi figur&eacute;e comme s'il s'agissait d'un mot fran&ccedil;ais o&ugrave; les
			"e" sont toujours muets.
			</p>
			<hr>
				<dl class="vortlisto">
				<dt>al</dt>
				<dd>	&agrave;, vers   [<i>al</i>]</dd>
				<dt>alta</dt>
				<dd>	grand(e), haut(e)   [<i><b>al</b>-ta</i>]</dd>
				<dt>angulo</dt>
				<dd>	coin, angle  [<i>anne-<b>gou</b>-lo</i>]</dd>
				<dt>bela</dt>
				<dd>	beau, belle  [<i><b>b&egrave;</b>-la</i>]</dd>
				<dt>blonda</dt>
				<dd>	blond(e)  [<i><b>blonne</b>-da</i>]</dd>
				<dt>demandas</dt>
				<dd><i>pr&eacute;sent de <b>demandi</b></i><br>
					(je, il, elle) demande, (tu) demandes, (nous) demandons,<br>
					(vous) demandez, (ils, elles) demandent [<i>d&egrave;-<b>manne</b>-dasse</i>]<br>
					(j')interroge, (je) questionne...</dd>
				<dt>demandi</dt>
				<dd>	interroger, demander</dd>
				<dt>demando</dt>
				<dd>	question  [<i>d&egrave;-<b>manne</b>-do</i>]</dd>
				<dt>diras</dt>
				<dd>	<i>pr&eacute;sent de <b>diri</b></i><br>
					(je, tu) dis, (il, elle) dit, (nous) disons, (vous) dites, (ils, elles) disent<br>
					[<i><b>di</b>-rasse (r roul&eacute;)</i>]</dd>
				<dt>diri</dt>
				<dd>	dire	</dd>
				<dt>diru</dt>
				<dd>	<i>voir ci-apr&egrave;s <b>-u</b></i></dd>
				<dt>ebla</dt>
				<dd>	possible  [<i><b>&egrave;</b>-bla</i>]</dd>
				<dt>eble</dt>
				<dd>	possiblement, peut-&ecirc;tre  [<i><b>&egrave;</b>-bl&egrave;</i>]</dd>
				<dt>en</dt>
				<dd>	en, dans  [<i>&egrave;ne</i>]</dd>
				<dt>estas</dt>
				<dd>	<i>pr&eacute;sent de <b>esti</b></i> [<i><b>&egrave;s</b>-tasse</i>]<br>
			
						(je) suis, (tu) es, (il, elle) est, (nous) sommes, (vous) &ecirc;tes, (ils, elles) sont; c'est<br>
						<span class='ekz'>vi estas bela</span> : tu es beau (belle)<br>
						<span class='ekz'>estas fakto</span> : c'est un fait</dd>
				<dt>esti</dt>
				<dd>	&ecirc;tre</dd>
				<dt>fakte</dt>
				<dd>	en fait  [<i><b>fak</b>-t&egrave;</i>]</dd>
				<dt>fakto</dt>
				<dd>	fait (n.)  [<i><b>fak</b>-to</i>]</dd>
				<dt>granda</dt>
				<dd>	grand(e), parfois : gros(se)  [<i><b>granne</b>-da</i>]</dd>
				<dt>ho</dt>
				<dd>	oh!  [<i><b>hho</b> (h expir&eacute;)</i>]</dd>
				<dt>iras</dt>
				<dd>	<i>pr&eacute;sent de <b>iri</b></i><br>
						(je) vais, (tu) vas, (il, elle) va, (nous) allons, (vous) allez, (ils, elles) vont<br>
						[<i><b>i</b>-rasse (r roul&eacute;)</i>]</dd>
				<dt>iri</dt>
				<dd>	aller</dd>
				<dt>jen</dt>
				<dd>	voici  [<i><b>y&egrave;ne</b></i>]<br>
						<span class='ekz'>jen (estas) Linda</span> : voici Linda</dd>
				<dt>jes</dt>
				<dd>	oui  [<i><b>yesse</b></i>]</dd>
				<dt>juna</dt>
				<dd>	jeune  [<i><b>you</b>-na</i>]</dd>
				<dt>kaj</dt>
				<dd>	et  [<i>ka&iuml;</i>]</dd>
				<dt>kara</dt>
				<dd>	cher, ch&egrave;re  [<i><b>ka</b>-ra (r roul&eacute;)</i>]<br>
						<span class='ekz'>Tom, kara!</span> : cher Tom !, ce cher Tom !</dd>
				<dt>kio</dt>
				<dd>	quoi, que  [<i><b>ki</b>-o (deux syllabes !)</i>]<br>
						<span class='ekz'>kio okazas?</span> : qu'arrive-t-il ?<br>
						<span class='ekz'>al kio vi rigardas?</span> : que regardes-tu ? (mot-&agrave;-mot &agrave; "Quoi tu regardes")</dd>
				<dt>kiu</dt>
				<dd>	qui  [<i><b>ki</b>-ou (deux syllabes !)</i>]</dd>
				<dt>knabino</dt>
				<dd>	fille, jeune fille  [<i>kna-<b>bi</b>-no</i>]</dd>
				<dt>knabo</dt>
				<dd>	gar&ccedil;on, jeune homme  [<i><b>kna</b>-bo</i>]</dd>
				<dt>kun</dt>
				<dd>	avec  [<i>koune</i>]</dd>
				<dt>la</dt>
				<dd>	le, la, les  [<i>la</i>]</dd>
				<dt>laboras</dt>
				<dd>	<i>pr&eacute;sent de <b>labori</b></i><br>
						(je) travaille, (tu) travailles,...  [<i>la-<b>bo</b>-rasse</i>]</dd>
				<dt>labori</dt>
				<dd>	travailler</dd>
				<dt>li</dt>
				<dd>	il, lui  [<i>li</i>]</dd>
				<dt>mal-</dt>
				<dd>	<i>voir ci-apr&egrave;s</i></dd>
				<dt>mi</dt>
				<dd>	je, me, moi  [<i>mi</i>]</dd>
				<dt>mondo</dt>
				<dd>	monde  [<i><b>monne</b>-do</i>]</dd>
				<dt>multaj</dt>
				<dd>	plusieurs  [<i><b>moul</b>-ta&iuml;</i>]</dd>
				<dt>multe</dt>
				<dd>	beaucoup  [<i><b>moul</b>-t&egrave;</i>]<br>
						<span class='ekz'>vi laboras tro multe</span> : tu travailles trop, (mot-&agrave;-mot "trop beaucoup")</dd>
				<dt>ne</dt>
				<dd>	non, ne... pas  [<i>n&egrave;</i>]<br>
						<span class='ekz'>ne, mi ne scias</span> : non, je ne sais pas</dd>
				<dt>nenio</dt>
				<dd>	rien  [<i>n&egrave;-<b>ni</b>-o (trois syllabes !)</i>]<br>
						<span class='ekz'>nenio speciala</span> : rien de sp&eacute;cial</dd>
				<dt>nova</dt>
				<dd>	neuf, neuve  [<i><b>no</b>-va</i>]</dd>
				<dt>nu</dt>
				<dd>	allons, bien, eh bien...  [<i>nou</i>]<br>
						<span class='ekz'>nu, venu kun mi</span> : bien, viens avec moi</dd>
				<dt>nun</dt>
				<dd>	maintenant  [<i>noune</i>]</dd>
				<dt>nur</dt>
				<dd>	seulement  [<i>nour (r roul&eacute;)</i>]<br>
						<span class='ekz'>nur vi laboras multe</span> : toi seul travailles beaucoup<br>
						<span class='ekz'>li rigardas nur al vi</span> : il ne regarde que toi (mot-&agrave;-mot "seulement &agrave; toi")</dd>
				<dt>okazas</dt>
				<dd>	<i>pr&eacute;sent de <b>okazi</b></i><br>
						(il) arrive  [<i>o-<b>ka</b>-zasse</i>]<br>
						<span class='ekz'>kio okazas?</span> : que se passe-t-il<br>
						<span class='ekz'>kio okazas al vi?</span> : qu'est-ce qui t'arrive ?</dd>
				<dt>okazi</dt>
				<dd>	arriver, se passer, avoir lieu</dd>
				<dt>plej</dt>
				<dd>	le plus, la plus  [<i>pl&egrave;&iuml;</i>]</dd>
				<dt>restoracio</dt>
				<dd>	restaurant  [<i>r&egrave;s-to-ra-<b>tsi</b>-o (r roul&eacute;s)</i>]</dd>
				<dt>rigardas</dt>
				<dd>	<i>pr&eacute;sent de <b>rigardi</b></i><br>
						(je) regarde, (tu) regardes,...  [<i>ri-<b>gar</b>-dasse (r roul&eacute;s)</i>]</dd>
				<dt>rigardi</dt>
				<dd>	regarder</dd>
				<dt>rigardu</dt>
				<dd>	<i>voir ci-apr&egrave;s <b>-u</b></i></dd>
				<dt>saluton</dt>
				<dd>	salut !  [<i>sa-<b>lou</b>-tonne</i>]</dd>
				<dt>scias</dt>
				<dd>	<i>pr&eacute;sent de <b>scii</b></i><br>
						(je) sais, (tu) sais,...  [<i><b>stsi</b>-asse</i>]</dd>
				<dt>scii</dt>
				<dd>	savoir</dd>
				<dt>sed</dt>
				<dd>	mais  [<i>s&egrave;d</i>]</dd>
				<dt>serioza</dt>
				<dd>	s&eacute;rieux, s&eacute;rieuse  [<i>s&egrave;-ri-<b>o</b>-za (r roul&eacute;)</i>]</dd>
				<dt>sidas</dt>
				<dd>	<i>pr&eacute;sent de <b>sidi</b></i><br>
						(je) suis assis(e), (tu) es assis(e)...  [<i><b>si</b>-dasse</i>]</dd>
				<dt>sidi</dt>
				<dd>	&ecirc;tre assis(e)</dd>
				<dt>sincera</dt>
				<dd>	sinc&egrave;re  [<i>sine-<b>ts&egrave;</b>-ra (r roul&eacute;)</i>]</dd>
				<dt>sola</dt>
				<dd>	seul, seule  [<i><b>so</b>-la</i>]</dd>
				<dt>speciala</dt>
				<dd>	sp&eacute;cial(e)  [<i>sp&egrave;-tsi-<b>a</b>-la</i>]</dd>
				<dt>spegulo</dt>
				<dd>	miroir  [<i>sp&egrave;-<b>gou</b>-lo</i>]</dd>
				<dt>studento</dt>
				<dd>	&eacute;tudiant  [<i>stou-<b>d&egrave;ne</b>-to</i>]</dd>
				<dt>tiu</dt>
				<dd>	celui-l&agrave;, ce(tte) ...-l&agrave;  [<i><b>ti</b>-ou (deux syllabes !)</i>]<br>
						<span class='ekz'>kiu estas tiu?</span> : qui est celui-l&agrave; ?, qui est-ce ?</dd>
				<dt>tro</dt>
				<dd>	trop  [<i>(r roul&eacute;)</i>]</dd>
				<dt>tuta</dt>
				<dd>	entier, enti&egrave;re, tout(e) le(la)/un(e)  [<i><b>tou</b>-ta</i>]<br>
						<span class='ekz'>en la tuta restoracio</span> : dans tout le restaurant<br>
						<span class='ekz'>en la tuta mondo</span> : dans le monde entier</dd>
				<dt>tute</dt>
				<dd>	enti&egrave;rement, totalement  [<i><b>tou</b>-t&egrave;</i>]<br>
						<span class='ekz'>mi estas tute nova studento</span> : je suis un tout nouvel &eacute;tudiant</dd>
				<dt>universitata</dt>
				<dd>	universitaire (adj.) [<i>ou-ni-v&egrave;r-si-<b>ta</b>-ta (r roul&eacute;)</i>]</dd>
				<dt>universitato</dt>
				<dd>	universit&eacute;  [<i>ou-ni-v&egrave;r-si-<b>ta</b>-to (r roul&eacute;)</i>]</dd>
				<dt>venas</dt>
				<dd>	<i>pr&eacute;sent de <b>veni</b></i><br>
						(je) viens, (tu) viens...  [<i><b>v&egrave;</b>-nasse</i>]</dd>
				<dt>veni</dt>
				<dd>	venir
				<dt>venu</dt>
				<dd>	<i>voir ci-apr&egrave;s <b>-u</b></i></dd>
				<dt>vera</dt>
				<dd>	vrai(e)  [<i><b>v&egrave;</b>-ra (r roul&eacute;)</i>]</dd>
				<dt>vere</dt>
				<dd>	vraiment  [<i><b>v&egrave;</b>-r&egrave; (r roul&eacute;)</i>]</dd>
				<dt>ver&#349;ajna</dt>
				<dd>	probable  [<i>v&egrave;r-<b>cha&iuml;</b>-na (r roul&eacute;)</i>]</dd>
				<dt>ver&#349;ajne</dt>
				<dd>	probablement  [<i>v&egrave;r-<b>cha&iuml;</b>-n&egrave; (r roul&eacute;)</i>]</dd>
				<dt>vi</dt>
				<dd>	tu, toi, vous (2&egrave;me personne sing. et pluriel)  [<i>vi</i>]</dd>
				<dt>virino</dt>
				<dd>	femme  [<i>vi-<b>ri</b>-no (r roul&eacute;)</i>]</dd>
				<dt>viro</dt>
				<dd>	homme, m&acirc;le  [<i><b>vi</b>-ro (r roul&eacute;)</i>]</dd>
			</dl>

			<?php 
			} // fin section 3
			if ($section=="4") {
			?>
			<h2>Indications pour les exercices :</h2>
			<p><b>Questionnaire (Demandoj) :</b> 
			Il s'agit de répondre en utilisant l'une des réponses
			suggérées. Toutes les réponses sont grammaticalement correctes
			(quoique parfois loufoques) mais une seule correspond au récit.
			La réponse doit consistee en une (ou plusieurs!) phrase(s) complète(s).
			</p>
			
			<p><b>Exercices (Ekzercoj) :</b>
			Il s'agit de réassembler une phrase en utilisant les morceaux
			de mot épars qui vous sont proposés. C'est plus facile que ça
			n'en a l'air au premier abord. 
			</p>

			<h3>Demandoj</h3>
			<input type="hidden" name="013_cxap01.0" value="Demandoj">

			<p>-- Diru al mi :</p>
			<div class="tasko">
			<?php $demandoj=array (
				1 => "Kiu sidas en la angulo? (Tom / Linda / blonda viro / juna knabino / maljuna viro)",
				2 => "Kiu iras al li? (Tom / Linda / blonda viro / juna knabino / maljuna viro)",
				3 => "Al kio iras Tom kaj Linda? (al la angulo / al granda spegulo / al la nova studento / al la blonda viro)",
				4 => "Kiu estas (eble) la plej bela virino en la mondo? (Tom / Linda / blonda viro / bela knabino / maljuna viro)",
				5 => "Kiu estas (eble) la plej malserioza knabo en la universitato? (Tom / Linda / blonda viro / bela knabino / maljuna viro)"
				);
				ekzerco(True, 1);
			?>
			</div>

			<h3>Ekzerco</h3>
			<p>Formu frazojn.<br>
			<input type="hidden" name="013_cxap01.1" value="1. Formu frazojn.">
			<em>
			{ -a al -as grand- ir- mi -o spegul- } ---> Mi iras al granda spegulo.<br>
			{ -as -as est- kiu li mi ne sci- } ---> Mi ne scias, kiu li estas.</em><br>
			-- Jen:</p>
			<div class="tasko">
			<?php $demandoj=array (
				6 => "{ al rigard- mi -u }",
				7 => "{ -a -as est- grand- li -o vir- }",
				8 => "{ -a -as en est- li -o restoraci- student- }",
				9 => "{ -a jen labor- nov- -o }",
				10 => "{ -a -as nenio nun okaz- special- }",
				11 => "{ -as bel- est- kio -o ? }",
				12 => "{ al -as -in- ir- knab- li -o }",
				13 => "{ -a -as est- mal- serioz- vi }"
				);
				ekzerco(True, 1);
			?>
			</div>

			<p>Modifu la frazojn.<br>
			<input type="hidden" name="013_cxap01.2" value="2. Modifu la frazojn.">
			<em>Vi laboras malmulte ---> Laboru multe !</em></p>
			<div class="tasko">
			<?php $demandoj=array (
				14 => "Vi laboras multe",
				15 => "Vi rigardas al mi malsincere", 
				16 => "Vi estas serioza",
				17 => "Vi laboras malserioze"
				);
				ekzerco(True, 1);
			?>
			</div>

				<p id="formularo">La correction des exercices est r&eacute;serv&eacute;e aux personnes qui 
				s'inscrivent officiellement. 
				Inversement l'inscription n'est indispensable que si vous d&eacute;sirez faire 
				appel &agrave; un correcteur. Une confirmation d'inscription vous parviendra par 
				courrier &eacute;lectronique dans les prochains jours. 
				Attendez de la recevoir avant de commencer la deuxi&egrave;me le&ccedil;on. 
				</p>
				<p class="important">
				Important : si vous avez déjà suivi le "Cours en dix leçons" ou le "Kurso de Esperanto" et que
				vous êtes donc déjà inscrit sur ce site, merci d'utiliser l'identifiant que vous avez déjà et 
				ne pas vous réinscrire sous un nouveau nom. Si vous avez oublié votre mot de passe, vous pouvez
				le retrouver en cliquant sur le lien "mot de passe oublié" ci-dessous.
				</p>
			<div class="aligxilo">
				<p>
				<input type="radio" name="jamaligxi" value="jes" checked> 
				<input type="hidden" name="010_subjekto" value="cxap01.php">
				J'ai déjà suivi un cours sur ce site. Mon identifiant/mot de passe est :</p>
				<p style="font-size:80%">(si vous souhaitez continuer avec le même correcteur, veuillez l'indiquer dans la zone de commentaires («Autres précisions»), au bas de cette page).</p>

				<table>
					<tr>
						<td>Identifiant  :</td>
						<td><input type="text" name="ktrl_enirnomo" onFocus="this.value='';document.mia_Formularo.jamaligxi[0].checked=true;"></td>
					</tr>
					<tr>
						<td>Mot de passe :</td>
						<td><input type="password" name="ktrl_pasvorto" value=""></td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td align="center"><input class="bouton" type="submit" name="Submit" value="Envoyer"></td>
					</tr>
					<tr>
						<td colspan="2">
							<p><a href="#formularo" onClick="window.open('../../pasvortoforgesita.php','','resizable=no,scrollbars=no,location=no,top=100,left=100,width=400,height=150');">
							<i>Mot de passe oubli&eacute; ? : Cliquez ici</i></a></p>
						</td>
					</tr>
				</table>

				<p>
					<input type="radio" name="jamaligxi" value="ne">
					Je ne suis pas encore inscrit sur ce site et je souhaite reçevoir l'aide d'un correcteur pour suivre ce cours, 
					je m'engage à envoyer au moins une leçon par semaine ou de 
					prévenir mon correcteur de tout retard éventuel.
				</p>
				<?php include "../../aligxi.inc.php"; ?>
			</div> <!-- aligxilo -->
			
			<?php 
			} // fin section 4
			if ($section=="5") {
			?>
			<h2>Izabela</h2>
			<p>Izabela rigardas al la granda spegulo. La knabino en
			la granda spegulo rigardas al Izabela. Izabela scias, kiu
			estas la knabino en la spegulo. Tiu enspegula knabino estas
			juna, malgranda kaj ne bela. Estas Izabela.</p>
		
			<p>&#171;La mondo ne estas bela&#187; diras Izabela al la
			spegulo. &#171;Mi ne estas bela, mi ne estas granda, mi estas
			juna, tro juna. Nenio okazas al mi. En la tuta mondo ne
			estas knabo, kiu venas al mi kaj diras al mi &#171;saluton&#187; kaj
			sidas kun mi. En la tuta mondo ne estas juna viro, kiu venas
			al mi kaj rigardas al mi kaj diras : &#171;Kara Izabela, vi estas
			juna kaj bela, sed vi laboras tro multe. Ne laboru nun. Venu
			kun mi. Ne demandu, kiu mi estas, kio mi estas. Mi estas nur
			juna viro, kiu rigardas al vi kaj diras : &#171;Vi estas tute
			sola. Venu kun mi. Kun mi la mondo estas bela kaj granda.&#187;
			Sed ne venas tiu knabo, kaj en la tuta mondo nenio okazas.
			Nenio okazas al mi, nenio nova okazas, nenio speciala
			okazas. Nur laboro, laboro, laboro... Estas tro.&#187;</p>
			
			<p>&#171;Mi sidas tute sola. Mi rigardas al vi, spegulo. Kaj
			en la spegulo estas nur Izabela, la plej malbela knabino en
			la tuta mondo. Vere la nuna mondo ne estas bela.&#187;</p>
			<?php 
			} // fin section 5
			?>

		</section>
		
		<section id="leciono-fino">
			<div id="marko" class="right-align">
				<?php getBoutonFinSection('CG',1,$section,$persono_id); ?>
				<a id="farita" class="btn-floating btn-large light-blue darken-1 hide"><i class="material-icons">done_all</i></a>
			</div>
			<div class="ligoj">
				<?php getLecioneroAntauxa('CG',$leciono,$section); ?>
				<?php getLecioneroVenonta('CG',$leciono,$section); ?>
			</div>
		</section>
		
	</article>
	
	<aside class="col s12 m10 l3 offset-m1 push-l1">
								
		<ul class="collapsible" data-collapsible="expandable">

			<?php 
			// On affiche le sommaire de la lecon
			getEnhavtabelo('GR',$leciono); 
			?>
		</ul>	
		
		<p>
			Elŝutu ĉiujn rakontojn (entute: 25) en unu dosiero:
			 <a href="./son/gerda_malaperis.zip">gerda_malaperis.zip</a>
		</p>
		
	</aside>
</div>

<?php include "gerdapiedo.inc.php"; ?>