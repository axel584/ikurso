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
		getTitoloLecionero('GR',$leciono,$section);
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
					<p><b>Tom:</b> Tiu alta, blonda, juna viro…</p>
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
					<p><b>Linda:</b> Tom, kara! Kio okazas al vi? Eble vi laboras tro multe, kaj…</p>
					<p><b>Tom:</b> Nenio speciala okazas al mi. Kaj mi ne laboras tro multe.
					Fakte, mi laboras malmulte nun. La vera demando estas: kio okazas al vi, Linda? Nur vi estas vere bela.</p>
					<p><b>Linda:</b> Nu, nu…</p>
					<p><b>Tom:</b>	Estas fakto. Nur vi estas bela, Linda. Mi estas sincera. Venu kun mi!</p>
				</div>
				<div class="col s12 m4">
					<img src="bildoj/gerda01-3.gif" class="responsive-img">
				</div>
			</div>
			<div class="row dialogo">
				<div class="col s12 m8">
					<p><b>Linda:</b> Sed…</p>
					<p><b>Tom:</b> Venu. Al la granda spegulo. Rigardu. Jen estas Linda, la plej
					bela virino en la mondo, la plej bela virino en la tuta mondo.</p>
					<p><b>Linda:</b> Kaj jen estas Tom, la plej malserioza knabo en la tuta
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
			<h3>Rappel sur les terminaisons</h3>
			
			<h4><b>-o</b> : <i>nom</i></h4>
			<div class="row">
				<p class="col s6"><span class="eo">vera</span> : vrai</p><p class="col s6"><span class="eo">la vero</span> : la vérité</p>
				<p class="col s6"><span class="eo">bela</span> : beau</p><p class="col s6"><span class="eo">belo</span> : beauté</p>
				<p class="col s6"><span class="eo">ebla</span> : possible</p><p class="col s6"> <span class="eo">eblo</span> : possibilité</p>
				<p class="col s6"><span class="eo">li demandas</span> : il demande</p><p class="col s6"><span class="eo">demando</span> : une question</p>
				<p class="col s6"><span class="eo">mi scias</span> : je sais</p><p class="col s6"><span class="eo">scio</span> : savoir (n.), connaissance</p>
			</div>
			
			<h4><b>-a</b> : <i>adjectif</i></h4>
			<div class="row">
				<p class="col s6"><span class="eo">viro</span> : homme</p><p class="col s6"><span class="eo">vir<b>a</b></span> : masculin</p>
				<p class="col s6"><span class="eo">angulo</span> : angle</p><p class="col s6"><span class="eo">angul<b>a</b></span> : angulaire</p>
			</div>
			
			<h4><b>-e</b> : <i>adverbe</i></h4>
			<div class="row">
				<p class="col s6"><span class="eo">bela</span> : joli</p><p class="col s6"><span class="eo">bel<b>e</b></span> : joliment</p>
				<p class="col s6"><span class="eo">knabino</span> : (jeune) fille</p><p class="col s6"><span class="eo">knabin<b>e</b></span> : comme une fille</p>
				<p class="col s6"><span class="eo">vi demandas</span> : vous demandez, tu demandes</p><p class="col s6"><span class="eo">demand<b>e</b></span> : de façon interrogative</p>
			</div>
			
			<h4><b>-as</b> : <i>verbe, temps présent</i></h4>
			<div class="row">
				<p class="col s6"><span class="eo">serioza</span> : sérieux</p><p class="col s6"><span class="eo">mi serioz<b>as</b></span> : je suis sérieux</p>
				<p class="col s6"><span class="eo">kunsido (kun + sido)</span> : une rencontre (littéralement : «une assis-avec», «un assis-ensemble»)</p>
				<p class="col s6"><span class="eo">vi kunsid<b>as</b></span> : tu prends part à une réunion</p>
			</div>
				
			<h4><b>-i</b> : <i>verbe, infinitif</i></h4>
			<p>Ce mode n'est pas utilisé dans la leçon mais il est habituel de citer les verbes à 
			l'infinitif dans les dictionnaires. Nous suivons cette habitude dans la liste ci-dessus.
			</p>
			<div class="row">
				<p><p class="col s6"><span class="eo">sid<b>i</b></span> : être assis</p><p class="col s6"><span class="eo">li sidas</span> : il est assis</p>
			</div>
			
			<h4><b>-u</b> : <i>verbe, impératif</i></h4>
			<div class="row">
				<p class="col s6"><span class="eo">vi sidas</span> : tu es assis</p><p class="col s6"><span class="eo">sid<b>u</b>!</span> : assieds-toi (mot-à-mot «sois assis»)</p>
				<p class="col s6"><span class="eo">venu!</span> : viens !, venez !</p><p class="col s6"><span class="eo">ne ven<b>u</b>!</span> : ne viens pas !, ne venez pas!</p>
				<p class="col s6"><span class="eo">iru!</span> : va !, allez !</p><p class="col s6"><span class="eo">li ir<b>u</b>!</span> : qu'il aille !</p>
			</div>
			
			<h4><b>mal-</b> : <i>opposé, contraire</i></h4>
			<div class="row">
				<p class="col s6"><span class="eo">alta</span> : haut</p><p class="col s6"><span class="eo"><b>mal</b>alta</span> : bas</p>
				<p class="col s6"><span class="eo">multe</span> : beaucoup</p><p class="col s6"><span class="eo"><b>mal</b>multe</span> : peu, pas beaucoup</p>
				<p class="col s6"><span class="eo">vero</span> : vérité</p><p class="col s6"><span class="eo"><b>mal</b>vero</span> : mensonge</p>
			</div>
			
			<h4><b>-in-</b> : <i>femelle</i></h4>
			<div class="row">
				<p><p class="col s6"><span class="eo">knabo</span> : garçon</p><p class="col s6"><span class="eo">knab<b>in</b>o</span> : fille</p>
			</div>
			
			<h3>Exemples d'utilisation de <i>kiu</i> :</h3>
			<div class="row">
				<p class="col s12"><span class="eo"><b>kiu</b> estas Linda?</span> : qui est Linda ?</p>
				<p class="col s12"><span class="eo"><b>kiu</b> scias?</span> : qui sait ?</p>
				<p class="col s12"><span class="eo"><b>kiu</b> estas tiu knabo?</span> : qui est ce garçon ?</p>
			
				<p class="col s12"><span class="eo"><b>kiu</b> knabo laboras?</span> : quel garçon travaille ?</p>
				<p class="col s12"><span class="eo">al <b>kiu</b> knabino li iras?</span> : vers quelle fille va-t-il ?</p>
				<p class="col s12"><span class="eo">en <b>kiu</b> universitato la knabino laboras?</span> : 
				dans quelle université la fille travaille-t-elle?</p>
				<p class="col s12"><span class="eo">la viro, <b>kiu</b> rigardas</span> : l'homme qui regarde<br>
				<p class="col s12"><span class="eo">la universitato, en <b>kiu</b> mi laboras</span> : 
				l'université dans laquelle je travaille</p>
				<p class="col s12"><span class="eo">la knabo, al <b>kiu</b> vi rigardas</span> : le garçon que tu regardes</p>
				</p>
			</div>
			
		<?php 
		} // fin section 2
		if ($section=="3") {
		?>
			<p class="parto">Dans ce premier chapitre nous vous indiquons la prononciation des mots
			pour que vous rappeliez bien les quelques difficultés de prononciation
			de l'espéranto pour un français&nbsp;:</p>
			<ul class="klarigo">
				<li>le <b>s</b> se prononce toujours <i>ss</i> jamais comme <i>z</i></li>
				<li>le <b>s</b> se prononce toujours même en fin de mot</li>
				<li>le <b>n</b> ne nasalise jamais la voyelle précédente</li>
				<li>le <b>h</b> est toujours expiré</li>
				<li>le <b>r</b> est roulé (mais si vous n'y arrivez pas ce n'est pas grave)</li>
				<li>l'accent tonique est sur l'avant-dernière syllabe</li>
				<li>une syllabe pour chaque voyelle (même i devant une autre voyelle)</li>
			</ul>
			</p>
			<p>
			Dans la prononciation figurée nous séparons les syllabes par des
			tirets, la syllabe accentuée apparaissant en gras. Prononcez chaque
			syllabe ainsi figurée comme s'il s'agissait d'un mot français où les
			<i>e</i> sont toujours muets.
			</p>

			<div class="vortlisto row">
				<div class="col s12 m6">
					<p><span class="eo">al</span> : à, vers [<i>al</i>]</p>
					<p><span class="eo">alta</span> : grand(e), haut(e) [<i><b>al</b>-ta</i>]</p>
					<p><span class="eo">angulo</span> : coin, angle  [<i>anne-<b>gou</b>-lo</i>]</p>
					<p><span class="eo">bela</span> : beau, belle [<i><b>bè</b>-la</i>]</p>
					<p><span class="eo">blonda</span> : blond(e) [<i><b>blonne</b>-da</i>]</p>
					<p><span class="eo">demandas</span> : <i>présent de <b>demandi</b></i><br>
						(je, il, elle) demande, (tu) demandes, (nous) demandons,<br>
						(vous) demandez, (ils, elles) demandent [<i>dè-<b>manne</b>-dasse</i>]<br>
						(j')interroge, (je) questionne…</p>
					<p><span class="eo">demandi</span> : interroger, demander</p>
					<p><span class="eo">demando</span> : question  [<i>dè-<b>manne</b>-do</i>]</p>
					<p><span class="eo">diras</span> : <i>présent de <b>diri</b></i><br>
						(je, tu) dis, (il, elle) dit, (nous) disons, (vous) dites, (ils, elles) disent<br>
						[<i><b>di</b>-rasse (r roulé)</i>]</p>
					<p><span class="eo">diri</span> : direÒ</p>
					<p><span class="eo">diru</span> : <i>voir ci-après <b>-u</b></i></p>
					<p><span class="eo">ebla</span> : possible [<i><b>è</b>-bla</i>]</p>
					<p><span class="eo">eble</span> : possiblement, peut-être  [<i><b>è</b>-blè</i>]</p>
					<p><span class="eo">en</span> : en, dans  [<i>ène</i>]</p>
					<p><span class="eo">estas</span> : <i>présent de <b>esti</b></i> [<i><b>ès</b>-tasse</i>]<br>
							(je) suis, (tu) es, (il, elle) est, (nous) sommes, (vous) êtes, (ils, elles) sont; c'est<br>
							<span class='ekz'>vi estas bela</span> : tu es beau (belle)<br>
							<span class='ekz'>estas fakto</span> : c'est un fait</p>
					<p><span class="eo">esti</span> : être</p>
					<p><span class="eo">fakte</span> : en fait [<i><b>fak</b>-tè</i>]</p>
					<p><span class="eo">fakto</span> : fait (n.) [<i><b>fak</b>-to</i>]</p>
					<p><span class="eo">granda</span> : grand(e), parfois : gros(se)  [<i><b>granne</b>-da</i>]</p>
					<p><span class="eo">ho</span> : oh! [<i><b>hho</b> (h expiré)</i>]</p>
					<p><span class="eo">iras</span> : <i>présent de <b>iri</b></i><br>
							(je) vais, (tu) vas, (il, elle) va, (nous) allons, (vous) allez, (ils, elles) vont<br>
							[<i><b>i</b>-rasse (r roulé)</i>]</p>
					<p><span class="eo">iri</span> : aller</p>
					<p><span class="eo">jen</span> : voici [<i><b>yène</b></i>]<br>
							<span class='ekz'>jen (estas) Linda</span> : voici Linda</p>
					<p><span class="eo">jes</span> : oui  [<i><b>yesse</b></i>]</p>
					<p><span class="eo">juna</span> : jeune  [<i><b>you</b>-na</i>]</p>
					<p><span class="eo">kaj</span> : et [<i>kaï</i>]</p>
					<p><span class="eo">kara</span> : cher, chère [<i><b>ka</b>-ra (r roulé)</i>]<br>
							<span class='ekz'>Tom, kara!</span> : cher Tom !, ce cher Tom !</p>
					<p><span class="eo">kio</span> : quoi, que [<i><b>ki</b>-o (deux syllabes !)</i>]<br>
							<span class='ekz'>kio okazas?</span> : qu'arrive-t-il ?<br>
							<span class='ekz'>al kio vi rigardas?</span> : que regardes-tu ? (mot-à-mot à "Quoi tu regardes")</p>
					<p><span class="eo">kiu</span> : qui  [<i><b>ki</b>-ou (deux syllabes !)</i>]</p>
					<p><span class="eo">knabino</span> : fille, jeune fille  [<i>kna-<b>bi</b>-no</i>]</p>
					<p><span class="eo">knabo</span> : garçon, jeune homme  [<i><b>kna</b>-bo</i>]</p>
					<p><span class="eo">kun</span> : avec  [<i>koune</i>]</p>
					<p><span class="eo">la</span> : le, la, les [<i>la</i>]</p>
					<p><span class="eo">laboras</span> : <i>présent de <b>labori</b></i><br>
							(je) travaille, (tu) travailles,… [<i>la-<b>bo</b>-rasse</i>]</p>
					<p><span class="eo">labori</span> : travailler</p>
					<p><span class="eo">li</span> : il, lui [<i>li</i>]</p>
					<p><span class="eo">mal-</span> : <i>voir ci-après</i></p>
					<p><span class="eo">mi</span> : je, me, moi [<i>mi</i>]</p>
					<p><span class="eo">mondo</span> : monde [<i><b>monne</b>-do</i>]</p>
					<p><span class="eo">multaj</span> : plusieurs  [<i><b>moul</b>-taï</i>]</p>
					<p><span class="eo">multe</span> : beaucoup  [<i><b>moul</b>-tè</i>]<br>
							<span class='ekz'>vi laboras tro multe</span> : tu travailles trop, (mot-à-mot «trop beaucoup»)</p>
				</div>
				<div class="col s12 m6">
					<p><span class="eo">ne</span> : non, ne... pas  [<i>nè</i>]<br>
							<span class='ekz'>ne, mi ne scias</span> : non, je ne sais pas</p>
					<p><span class="eo">nenio</span> : rien  [<i>nè-<b>ni</b>-o (trois syllabes !)</i>]<br>
							<span class='ekz'>nenio speciala</span> : rien de spécial</p>
					<p><span class="eo">nova</span> : neuf, neuve  [<i><b>no</b>-va</i>]</p>
					<p><span class="eo">nu</span> : allons, bien, eh bien...  [<i>nou</i>]<br>
							<span class='ekz'>nu, venu kun mi</span> : bien, viens avec moi</p>
					<p><span class="eo">nun</span> : maintenant  [<i>noune</i>]</p>
					<p><span class="eo">nur</span> : seulement  [<i>nour (r roulé)</i>]<br>
							<span class='ekz'>nur vi laboras multe</span> : toi seul travailles beaucoup<br>
							<span class='ekz'>li rigardas nur al vi</span> : il ne regarde que toi (mot-à-mot «seulement à toi»)</p>
					<p><span class="eo">okazas</span> : <i>présent de <b>okazi</b></i><br>
							(il) arrive  [<i>o-<b>ka</b>-zasse</i>]<br>
							<span class='ekz'>kio okazas?</span> : que se passe-t-il<br>
							<span class='ekz'>kio okazas al vi?</span> : qu'est-ce qui t'arrive ?</p>
					<p><span class="eo">okazi</span> : arriver, se passer, avoir lieu</p>
					<p><span class="eo">plej</span> : le plus, la plus [<i>plèï</i>]</p>
					<p><span class="eo">restoracio</span> : restaurant [<i>rès-to-ra-<b>tsi</b>-o (r roulés)</i>]</p>
					<p><span class="eo">rigardas</span> : <i>présent de <b>rigardi</b></i><br>
							(je) regarde, (tu) regardes,… [<i>ri-<b>gar</b>-dasse (r roulés)</i>]</p>
					<p><span class="eo">rigardi</span> : regarder</p>
					<p><span class="eo">rigardu</span> : <i>voir ci-après <b>-u</b></i></p>
					<p><span class="eo">saluton</span> : salut ! [<i>sa-<b>lou</b>-tonne</i>]</p>
					<p><span class="eo">scias</span> : <i>présent de <b>scii</b></i><br>
							(je) sais, (tu) sais,… [<i><b>stsi</b>-asse</i>]</p>
					<p><span class="eo">scii</span> : savoir</p>
					<p><span class="eo">sed</span> : mais  [<i>sèd</i>]</p>
					<p><span class="eo">serioza</span> : sérieux, sérieuse  [<i>sè-ri-<b>o</b>-za (r roulé)</i>]</p>
					<p><span class="eo">sidas</span> : <i>présent de <b>sidi</b></i><br>
							(je) suis assis(e), (tu) es assis(e)… [<i><b>si</b>-dasse</i>]</p>
					<p><span class="eo">sidi</span> : être assis(e)</p>
					<p><span class="eo">sincera</span> : sincère [<i>sine-<b>tsè</b>-ra (r roulé)</i>]</p>
					<p><span class="eo">sola</span> : seul, seule [<i><b>so</b>-la</i>]</p>
					<p><span class="eo">speciala</span> : spécial(e)  [<i>spè-tsi-<b>a</b>-la</i>]</p>
					<p><span class="eo">spegulo</span> : miroir [<i>spè-<b>gou</b>-lo</i>]</p>
					<p><span class="eo">studento</span> : étudiant [<i>stou-<b>dène</b>-to</i>]</p>
					<p><span class="eo">tiu</span> : celui-là, ce(tte) …-là  [<i><b>ti</b>-ou (deux syllabes !)</i>]<br>
							<span class='ekz'>kiu estas tiu?</span> : qui est celui-là ?, qui est-ce ?</p>
					<p><span class="eo">tro</span> : trop [<i>(r roulé)</i>]</p>
					<p><span class="eo">tuta</span> : entier, entière, tout(e) le(la)/un(e)  [<i><b>tou</b>-ta</i>]<br>
							<span class='ekz'>en la tuta restoracio</span> : dans tout le restaurant<br>
							<span class='ekz'>en la tuta mondo</span> : dans le monde entier</p>
					<p><span class="eo">tute</span> : entièrement, totalement [<i><b>tou</b>-tè</i>]<br>
							<span class='ekz'>mi estas tute nova studento</span> : je suis un tout nouvel étudiant</p>
					<p><span class="eo">universitata</span> : universitaire (adj.) [<i>ou-ni-vèr-si-<b>ta</b>-ta (r roulé)</i>]</p>
					<p><span class="eo">universitato</span> : université  [<i>ou-ni-vèr-si-<b>ta</b>-to (r roulé)</i>]</p>
					<p><span class="eo">venas</span> : <i>présent de <b>veni</b></i><br>
							(je) viens, (tu) viens… [<i><b>vè</b>-nasse</i>]</p>
					<p><span class="eo">veni</span> : venir</p>
					<p><span class="eo">venu</span> : <i>voir ci-après <b>-u</b></i></p>
					<p><span class="eo">vera</span> : vrai(e) [<i><b>vè</b>-ra (r roulé)</i>]</p>
					<p><span class="eo">vere</span> : vraiment  [<i><b>vè</b>-rè (r roulé)</i>]</p>
					<p><span class="eo">verŝajna</span> : probable [<i>vèr-<b>chaï</b>-na (r roulé)</i>]</p>
					<p><span class="eo">verŝajne</span> : probablement [<i>vèr-<b>chaï</b>-nè (r roulé)</i>]</p>
					<p><span class="eo">vi</span> : tu, toi, vous (2<sup>e</sup> personne sing. et pluriel)  [<i>vi</i>]</p>
					<p><span class="eo">virino</span> : femme  [<i>vi-<b>ri</b>-no (r roulé)</i>]</p>
					<p><span class="eo">viro</span> : homme, mâle  [<i><b>vi</b>-ro (r roulé)</i>]</p>
				</div>

			<?php 
			} // fin section 3
			if ($section=="4") {
			?>
			<p class="parto">Indications pour les exercices :</p>
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

			<fieldset class="ekzerco">
				<legend><b>Demandoj.</b> </legend>
				<input type="hidden" name="013_cxap01.0" value="Demandoj">

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
			</fieldset>

			<fieldset class="ekzerco">
				<legend><b>Demandoj.</b> Formu frazojn.</legend>
				<input type="hidden" name="013_cxap01.1" value="1. Formu frazojn.">
				<p><em>{ -a al -as grand- ir- mi -o spegul- } ---> Mi iras al granda spegulo.</em></p>
				<p><em>{ -as -as est- kiu li mi ne sci- } ---> Mi ne scias, kiu li estas.</em></p>
				<p>-- Jen:</p>
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
			</fieldset>

			<fieldset class="ekzerco">
				<legend>Modifu la frazojn.</legend>
				
				<input type="hidden" name="013_cxap01.2" value="2. Modifu la frazojn.">
				<p><em>Vi laboras malmulte ---> Laboru multe !</em></p>
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
			</fieldset>

			<p id="formularo">La correction des exercices est réservée aux personnes qui 
			s'inscrivent officiellement. 
			Inversement l'inscription n'est indispensable que si vous désirez faire 
			appel à un correcteur. Une confirmation d'inscription vous parviendra par 
			courrier électronique dans les prochains jours. 
			Attendez de la recevoir avant de commencer la deuxième leçon. 
			</p>
			<p class="important">
			Important : si vous avez déjà suivi le <i>Cours en dix leçons</i> ou le <i>Kurso de Esperanto</i> et que
			vous êtes donc déjà inscrit au service de correction, merci d'utiliser l'identifiant que vous avez déjà et 
			ne pas vous réinscrire sous un nouveau nom. 
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
			<h3>Izabela</h3>
			<p>Izabela rigardas al la granda spegulo. La knabino en
			la granda spegulo rigardas al Izabela. Izabela scias, kiu
			estas la knabino en la spegulo. Tiu enspegula knabino estas
			juna, malgranda kaj ne bela. Estas Izabela.</p>
		
			<p>«La mondo ne estas bela» diras Izabela al la
			spegulo. «Mi ne estas bela, mi ne estas granda, mi estas
			juna, tro juna. Nenio okazas al mi. En la tuta mondo ne
			estas knabo, kiu venas al mi kaj diras al mi «saluton» kaj
			sidas kun mi. En la tuta mondo ne estas juna viro, kiu venas
			al mi kaj rigardas al mi kaj diras : «Kara Izabela, vi estas
			juna kaj bela, sed vi laboras tro multe. Ne laboru nun. Venu
			kun mi. Ne demandu, kiu mi estas, kio mi estas. Mi estas nur
			juna viro, kiu rigardas al vi kaj diras : «Vi estas tute
			sola. Venu kun mi. Kun mi la mondo estas bela kaj granda.»
			Sed ne venas tiu knabo, kaj en la tuta mondo nenio okazas.
			Nenio okazas al mi, nenio nova okazas, nenio speciala
			okazas. Nur laboro, laboro, laboro... Estas tro.»</p>
			
			<p>«Mi sidas tute sola. Mi rigardas al vi, spegulo. Kaj
			en la spegulo estas nur Izabela, la plej malbela knabino en
			la tuta mondo. Vere la nuna mondo ne estas bela.»</p>
		<?php 
		} // fin section 5
		?>

		</section>
		
		<section id="leciono-fino">
			<div id="marko" class="right-align">
				<?php getBoutonFinSection('GR',1,$section,$persono_id); ?>
				<a id="farita" class="btn-floating btn-large light-blue darken-1 hide"><i class="material-icons">done_all</i></a>
			</div>
			<div class="ligoj">
				<?php getLecioneroAntauxa('GR',$leciono,$section); ?>
				<?php getLecioneroVenonta('GR',$leciono,$section); ?>
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