<?php 
$titolo="1 (unu)";
$leciono = 1;
$section=isset($_GET["section"])?htmlspecialchars($_GET["section"]):"1";
if (!is_numeric($section)) {
	if ($persono_id=="") {header("Location:../../index.php?erarkodo=24");}
}
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

			<h3>En universitata restoracio</h3>
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
			<section class="klarigo">
				<h3>Rappel sur les terminaisons</h3>
			
				<h4><b>-o</b> : <i>nom</i></h4>
				<p><span class="eo">vera</span> : vrai → <span class="eo">la vero</span> : la vérité</p>
				<p><span class="eo">bela</span> : beau → <span class="eo">belo</span> : beauté</p>
				<p><span class="eo">ebla</span> : possible → <span class="eo">eblo</span> : possibilité</p>
				<p><span class="eo">li demandas</span> : il demande → <span class="eo">demando</span> : une question</p>
				<p><span class="eo">mi scias</span> : je sais → <span class="eo">scio</span> : savoir (n.), connaissance</p>
			
				<h4><b>-a</b> : <i>adjectif</i></h4>
				<p><span class="eo">viro</span> : homme → <span class="eo">vir<b>a</b></span> : masculin</p>
				<p><span class="eo">angulo</span> : angle → <span class="eo">angul<b>a</b></span> : angulaire</p>
			
				<h4><b>-e</b> : <i>adverbe</i></h4>
				<p><span class="eo">bela</span> : joli → <span class="eo">bel<b>e</b></span> : joliment</p>
				<p><span class="eo">knabino</span> : (jeune) fille → <span class="eo">knabin<b>e</b></span> : comme une fille</p>
				<p><span class="eo">vi demandas</span> : vous demandez, tu demandes → <span class="eo">demand<b>e</b></span> : de façon interrogative</p>
			
				<h4><b>-as</b> : <i>verbe, temps présent</i></h4>
				<p><span class="eo">serioza</span> : sérieux → <span class="eo">mi serioz<b>as</b></span> : je suis sérieux</p>
				<p><span class="eo">kunsido (kun + sido)</span> : une rencontre (littéralement : «une assis-avec», «un assis-ensemble»)</p>
				<p><span class="eo">vi kunsid<b>as</b></span> : tu prends part à une réunion</p>
				
				<h4><b>-i</b> : <i>verbe, infinitif</i></h4>
				<p>Ce mode n'est pas utilisé dans la leçon mais il est habituel de citer les verbes à 
				l'infinitif dans les dictionnaires. Nous suivons cette habitude dans la liste ci-dessus.
				</p>
				<p><span class="eo">sid<b>i</b></span> : être assis → <span class="eo">li sidas</span> : il est assis</p>
			
				<h4><b>-u</b> : <i>verbe, impératif</i></h4>
				<p><span class="eo">vi sidas</span> : tu es assis → <span class="eo">sid<b>u</b>!</span> : assieds-toi (mot-à-mot «sois assis»)</p>
				<p><span class="eo">venu!</span> : viens !, venez ! → <span class="eo">ne ven<b>u</b>!</span> : ne viens pas !, ne venez pas!</p>
				<p><span class="eo">iru!</span> : va !, allez ! → <span class="eo">li ir<b>u</b>!</span> : qu'il aille !</p>
			
				<h4><b>mal-</b> : <i>opposé, contraire</i></h4>
				<p><span class="eo">alta</span> : haut → <span class="eo"><b>mal</b>alta</span> : bas</p>
				<p><span class="eo">multe</span> : beaucoup → <span class="eo"><b>mal</b>multe</span> : peu, pas beaucoup</p>
				<p><span class="eo">vero</span> : vérité → <span class="eo"><b>mal</b>vero</span> : mensonge</p>
			
				<h4><b>-in-</b> : <i>femelle</i></h4>
				<p><span class="eo">knabo</span> : garçon → <span class="eo">knab<b>in</b>o</span> : fille</p>
				
				<h3>Exemples d'utilisation de <i>kiu</i> :</h3>
				<p><span class="eo"><b>kiu</b> estas Linda?</span> : qui est Linda&nbsp;?</p>
				<p><span class="eo"><b>kiu</b> scias?</span> : qui sait&nbsp;?</p>
				<p><span class="eo"><b>kiu</b> estas tiu knabo?</span> : qui est ce garçon&nbsp;?</p>
			
				<p><span class="eo"><b>kiu</b> knabo laboras?</span> : quel garçon travaille&nbsp;?</p>
				<p><span class="eo">al <b>kiu</b> knabino li iras?</span> : vers quelle fille va-t-il&nbsp;?</p>
				<p><span class="eo">en <b>kiu</b> universitato la knabino laboras?</span> : 
				dans quelle université la fille travaille-t-elle&nbsp;?</p>
				<p><span class="eo">la viro, <b>kiu</b> rigardas</span> : l'homme qui regarde</p>
				<p><span class="eo">la universitato, en <b>kiu</b> mi laboras</span> : l'université dans laquelle je travaille</p>
				<p><span class="eo">la knabo, al <b>kiu</b> vi rigardas</span> : le garçon que tu regardes</p>
			</section>
			
		<?php 
		} // fin section 2
		if ($section=="3") {
		?>
			<p class="parto">Dans ce premier chapitre nous vous indiquons la prononciation des mots
			pour que vous rappeliez bien les quelques difficultés de prononciation
			de l'espéranto pour un francophone&nbsp;:</p>
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

			<?php if ($persono) { ?>
			<p class="eo eta">Ces mots seront automatiquement ajoutés à votre vocabulaire à réviser lorsque vous aurez terminé d'étudier cette section.</p>
			<?php } ?>
			<div class="vortlisto row">
				<div class="col s12 m6">
					<p><span class="eo">al</span> : à, vers <span class="eta">[<i>al</i>]</span></p>
					<p><span class="eo">alta</span> : grand(e), haut(e) <span class="eta">[<i><b>al</b>-ta</i>]</span></p>
					<p><span class="eo">angulo</span> : coin, angle  <span class="eta">[<i>anne-<b>gou</b>-lo</i>]</span></p>
					<p><span class="eo">bela</span> : beau, belle <span class="eta">[<i><b>bè</b>-la</i>]</span></p>
					<p><span class="eo">blonda</span> : blond(e) <span class="eta">[<i><b>blonne</b>-da</i>]</span></p>
					<p><span class="eo">demandi</span> : interroger, demander</p>
					<p class="sekva"><span class="eo">demandas</span> <span class="eta">(<i>présent de <b>demandi</b></i>)</span>&nbsp;: (je, il, elle) demande, (tu) demandes, (nous) demandons, (vous) demandez, (ils, elles) demandent <span class="eta">[<i>dè-<b>manne</b>-dasse</i>]</span>&nbsp;;
						(j')interroge, (je) questionne…</p>
					<p class="sekva"><span class="eo">demando</span> : question  <span class="eta">[<i>dè-<b>manne</b>-do</i>]</span></p>
					<p><span class="eo">diri</span> : dire</p>
					<p class="sekva"><span class="eo">diras</span> <span class="eta">(<i>présent de <b>diri</b></i>)</span>&nbsp;:
						(je, tu) dis, (il, elle) dit, (nous) disons, (vous) dites, (ils, elles) disent <span class="eta">[<i><b>di</b>-rasse (r roulé)</i>]</span></p>
					<p class="sekva"><span class="eo">diru</span> : <i>voir ci-après <b>-u</b></i></p>
					<p><span class="eo">ebla</span> : possible <span class="eta">[<i><b>è</b>-bla</i>]</span></p>
					<p class="sekva"><span class="eo">eble</span> : possiblement, peut-être  <span class="eta">[<i><b>è</b>-blè</i>]</span></p>
					<p><span class="eo">en</span> : en, dans  <span class="eta">[<i>ène</i>]</span></p>
					<p><span class="eo">esti</span> : être</p>
					<p class="sekva"><span class="eo">estas</span> <span class="eta">(<i>présent de <b>esti</b></i> [<i><b>ès</b>-tasse</i>])</span>&nbsp;:
						(je) suis, (tu) es, (il, elle) est, (nous) sommes, (vous) êtes, (ils, elles) sont, c'est</p>
					<p class="sekva tab"><span class="eo">vi estas bela</span> : tu es beau (belle)</p>
					<p class="sekva tab"><span class="eo">estas fakto</span> / <span class="eo">tio estas fakto</span>&nbsp;: c'est un fait</p>
					<p><span class="eo">fakte</span> : en fait <span class="eta">[<i><b>fak</b>-tè</i>]</span></p>
					<p class="sekva"><span class="eo">fakto</span> : fait (n.) <span class="eta">[<i><b>fak</b>-to</i>]</span></p>
					<p><span class="eo">granda</span> : grand(e), parfois : gros(se)  <span class="eta">[<i><b>granne</b>-da</i>]</span></p>
					<p><span class="eo">ho</span> : oh! <span class="eta">[<i><b>hho</b> (h expiré)</i>]</span></p>
					<p><span class="eo">iri</span> : aller</p>
					<p class="sekva"><span class="eo">iras</span> <span class="eta">(<i>présent de <b>iri</b></i>)</span>&nbsp;: (je) vais, (tu) vas, (il, elle) va, (nous) allons, (vous) allez, (ils, elles) vont <span class="eta">[<i><b>i</b>-rasse (r roulé)</i>]</span></p>
					<p><span class="eo">jen</span> : voici <span class="eta">[<i><b>yène</b></i>]</span></p>
					<p class="sekva tab"><span class="eo">jen (estas) Linda</span> : voici Linda</p>
					<p><span class="eo">jes</span> : oui  <span class="eta">[<i><b>yesse</b></i>]</span></p>
					<p><span class="eo">juna</span> : jeune  <span class="eta">[<i><b>you</b>-na</i>]</span></p>
					<p><span class="eo">kaj</span> : et <span class="eta">[<i>kaï</i>]</span></p>
					<p><span class="eo">kara</span> : cher, chère <span class="eta">[<i><b>ka</b>-ra (r roulé)</i>]</span></p>
					<p class="sekva tab"><span class="eo">Tom, kara!</span> : cher Tom&nbsp;!, ce cher Tom&nbsp;!</p>
					<p><span class="eo">kio</span> : quoi, que <span class="eta">[<i><b>ki</b>-o (deux syllabes&nbsp;!)</i>]</span></p>
					<p class="sekva tab"><span class="eo">kio okazas?</span> : qu'arrive-t-il&nbsp;?</p>
					<p class="sekva tab"><span class="eo">al kio vi rigardas?</span> : que regardes-tu&nbsp;? (mot-à-mot à «Quoi tu regardes»)</p>
					<p><span class="eo">kiu</span> : qui  <span class="eta">[<i><b>ki</b>-ou (deux syllabes !)</i>]</span></p>
					<p><span class="eo">knabino</span> : fille, jeune fille  <span class="eta">[<i>kna-<b>bi</b>-no</i>]</span></p>
					<p class="sekva"><span class="eo">knabo</span> : garçon, jeune homme  <span class="eta">[<i><b>kna</b>-bo</i>]</span></p>
					<p><span class="eo">kun</span> : avec  <span class="eta">[<i>koune</i>]</span></p>
					<p><span class="eo">la</span> : le, la, les <span class="eta">[<i>la</i>]</span></p>
					<p><span class="eo">labori</span> : travailler</p>
					<p class="sekva"><span class="eo">laboras</span> <span class="eta">(<i>présent de <b>labori</b></i>)</span>&nbsp;: (je) travaille, (tu) travailles,… <span class="eta">[<i>la-<b>bo</b>-rasse</i>]</span></p>
					<p><span class="eo">li</span> : il, lui <span class="eta">[<i>li</i>]</span></p>
					<p><span class="eo">mal-</span> : <i>voir ci-après</i></p>
					<p><span class="eo">mi</span> : je, me, moi <span class="eta">[<i>mi</i>]</span></p>
					<p><span class="eo">mondo</span> : monde <span class="eta">[<i><b>monne</b>-do</i>]</span></p>
					<p><span class="eo">multaj</span> : beaucoup de, de nombreux  <span class="eta">[<i><b>moul</b>-taï</i>]</span></p>
					<p class="sekva"><span class="eo">multe</span> : beaucoup  <span class="eta">[<i><b>moul</b>-tè</i>]
					<p class="sekva tab"><span class="eo">vi laboras tro multe</span> : tu travailles trop, (mot-à-mot «trop beaucoup»)</p>
				</div>
				<div class="col s12 m6">
					<p><span class="eo">ne</span> : non, ne… pas  <span class="eta">[<i>nè</i>]</span></p>
					<p class="sekva tab"><span class="eo">ne, mi ne scias</span> : non, je ne sais pas</p>
					<p><span class="eo">nenio</span> : rien  <span class="eta">[<i>nè-<b>ni</b>-o (trois syllabes&nbsp;!)</i>]</span></p>
					<p class="sekva">	<span class="eo">nenio speciala</span> : rien de spécial</p>
					<p><span class="eo">nova</span> : neuf, neuve <span class="eta">[<i><b>no</b>-va</i>]</span></p>
					<p><span class="eo">nu</span> : allons, bien, eh bien… <span class="eta">[<i>nou</i>]</span></p>
					<p class="sekva"><span class="eo">nu, venu kun mi</span> : bien, viens avec moi</p>
					<p><span class="eo">nun</span> : maintenant <span class="eta">[<i>noune</i>]</span></p>
					<p><span class="eo">nur</span> : seulement <span class="eta">[<i>nour (r roulé)</i>]</span></p>
					<p class="sekva tab"><span class="eo">nur vi laboras multe</span> : toi seul travailles beaucoup</p>
					<p class="sekva tab"><span class="eo">li rigardas nur al vi</span> : il ne regarde que toi (mot-à-mot «seulement à toi»)</p>
					<p><span class="eo">okazi</span> : arriver, se passer, avoir lieu</p>
					<p class="sekva"><span class="eo">okazas</span> <span class="eta">(<i>présent de <b>okazi</b></i>)</span>&nbsp;: (il) arrive <span class="eta">[<i>o-<b>ka</b>-zasse</i>]</span></p>
					<p class="sekva tab"><span class="eo">kio okazas?</span> : que se passe-t-il</p>
					<p class="sekva tab"><span class="eo">kio okazas al vi?</span> : qu'est-ce qui t'arrive&nbsp;?</p>
					<p><span class="eo">plej</span> : le plus, la plus <span class="eta">[<i>plèï</i>]</span></p>
					<p><span class="eo">restoracio</span> : restaurant <span class="eta">[<i>rès-to-ra-<b>tsi</b>-o (r roulés)</i>]</span></p>
					<p><span class="eo">rigardi</span> : regarder</p>
					<p class="sekva"><span class="eo">rigardas</span> <span class="eta">(<i>présent de <b>rigardi</b></i>)</span>&nbsp;: (je) regarde, (tu) regardes,… <span class="eta">[<i>ri-<b>gar</b>-dasse (r roulés)</i>]</span></p>
					<p class="sekva"><span class="eo">rigardu</span> : <i>voir ci-après <b>-u</b></i></p>
					<p><span class="eo">saluton</span> : salut&nbsp;! <span class="eta">[<i>sa-<b>lou</b>-tonne</i>]</span></p>
					<p><span class="eo">scii</span> : savoir</p>
					<p class="sekva"><span class="eo">scias</span> <span class="eta">(<i>présent de <b>scii</b></i>)</span>&nbsp;: (je) sais, (tu) sais,… <span class="eta">[<i><b>stsi</b>-asse</i>]</span></p>
					<p><span class="eo">sed</span> : mais <span class="eta">[<i>sèd</i>]</span></p>
					<p><span class="eo">serioza</span> : sérieux, sérieuse <span class="eta">[<i>sè-ri-<b>o</b>-za (r roulé)</i>]</span></p>
					<p><span class="eo">sidi</span> : être assis(e)</p>
					<p class="sekva"><span class="eo">sidas</span> <span class="eta">(<i>présent de <b>sidi</b></i>)</span>&nbsp;: (je) suis assis(e), (tu) es assis(e)… <span class="eta">[<i><b>si</b>-dasse</i>]</span></p>
					<p><span class="eo">sincera</span> : sincère <span class="eta">[<i>sine-<b>tsè</b>-ra (r roulé)</i>]</span></p>
					<p><span class="eo">sola</span> : seul, seule <span class="eta">[<i><b>so</b>-la</i>]</span></p>
					<p><span class="eo">speciala</span> : spécial(e)  <span class="eta">[<i>spè-tsi-<b>a</b>-la</i>]</span></p>
					<p><span class="eo">spegulo</span> : miroir <span class="eta">[<i>spè-<b>gou</b>-lo</i>]</span></p>
					<p><span class="eo">studento</span> : étudiant <span class="eta">[<i>stou-<b>dène</b>-to</i>]</span></p>
					<p><span class="eo">tiu</span> : celui-là, ce(tte) …-là  <span class="eta">[<i><b>ti</b>-ou (deux syllabes !)</i>]</span></p>
					<p class="sekva tab"><span class="eo">kiu estas tiu?</span> : qui est celui-là ?, qui est-ce ?</p>
					<p><span class="eo">tro</span> : trop <span class="eta">[<i>(r roulé)</i>]</span></p>
					<p><span class="eo">tuta</span> : entier, entière, tout(e) le(la)/un(e)  <span class="eta">[<i><b>tou</b>-ta</i>]</span></p>
					<p class="sekva tab"><span class="eo">en la tuta restoracio</span> : dans tout le restaurant</p>
					<p class="sekva tab"><span class="eo">en la tuta mondo</span> : dans le monde entier</p>
					<p class="sekva tab"><span class="eo">tute</span> : entièrement, totalement <span class="eta">[<i><b>tou</b>-tè</i>]</span></p>
					<p class="sekva tab"><span class="eo">mi estas tute nova studento</span> : je suis un tout nouvel étudiant</p>
					<p><span class="eo">universitata</span> : universitaire (adj.) <span class="eta">[<i>ou-ni-vèr-si-<b>ta</b>-ta (r roulé)</i>]</span></p>
					<p class="sekva"><span class="eo">universitato</span> : université  <span class="eta">[<i>ou-ni-vèr-si-<b>ta</b>-to (r roulé)</i>]</span></p>
					<p><span class="eo">veni</span> : venir</p>
					<p class="sekva"><span class="eo">venas</span> <span class="eta">(<i>présent de <b>veni</b></i>)</span>&nbsp;: (je) viens, (tu) viens… <span class="eta">[<i><b>vè</b>-nasse</i>]</span></p>
					<p class="sekva"><span class="eo">venu</span> : <i>voir ci-après <b>-u</b></i></p>
					<p><span class="eo">vera</span> : vrai(e) <span class="eta">[<i><b>vè</b>-ra (r roulé)</i>]</span></p>
					<p class="sekva"><span class="eo">vere</span> : vraiment  <span class="eta">[<i><b>vè</b>-rè (r roulé)</i>]</span></p>
					<p><span class="eo">verŝajna</span> : probable <span class="eta">[<i>vèr-<b>chaï</b>-na (r roulé)</i>]</span></p>
					<p class="sekva"><span class="eo">verŝajne</span> : probablement <span class="eta">[<i>vèr-<b>chaï</b>-nè (r roulé)</i>]</span></p>
					<p><span class="eo">vi</span> : tu, toi, vous (2<sup>e</sup> personne sing. et pluriel)  <span class="eta">[<i>vi</i>]</span></p>
					<p><span class="eo">virino</span> : femme  <span class="eta">[<i>vi-<b>ri</b>-no (r roulé)</i>]</span></p>
					<p class="sekva"><span class="eo">viro</span> : homme, mâle  <span class="eta">[<i><b>vi</b>-ro (r roulé)</i>]</span></p>
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
			La réponse doit consister en une (ou plusieurs!) phrase(s) complète(s).
			</p>
			
			<p><b>Exercices (Ekzercoj) :</b>
			Il s'agit de réassembler une phrase en utilisant les morceaux
			de mot épars qui vous sont proposés. C'est plus facile que ça
			n'en a l'air au premier abord. 
			</p>

			<?php 
				getEkzercon(49,$persono_id);
			?>

			<?php 
				getEkzercon(50,$persono_id);
			?>

			<?php 
				getEkzercon(51,$persono_id);
			?>

		<?php 
		} // fin section 4
		if ($section=="5") {
		?>
			<div class="row">
				<div class="col s12">
					<div class="card-panel blue lighten-5">
						Grâce à ce que vous avez appris dans cette leçon, vous devriez sans problème pouvoir comprendre le texte suivant. L'histoire n'est pas liée à celle de <i>Gerda malaperis</i>, mais elle vous permettra de découvrir d'autres constructions de mots.
					</div>
				</div>
			</div>
		<?php
			//include "lasusono.inc.php";
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
			okazas. Nur laboro, laboro, laboro… Estas tro.»</p>
			
			<p>«Mi sidas tute sola. Mi rigardas al vi, spegulo. Kaj
			en la spegulo estas nur Izabela, la plej malbela knabino en
			la tuta mondo. Vere la nuna mondo ne estas bela.»</p>
			
		<?php 
		} // fin section 5
		if ($section=="6") {
			recapitulatif_lecon_avant_envoi('GR',$leciono,$persono_id);
		} // fin section 6
		?>
		</section>
		
		<section id="leciono-fino">
			<div id="marko" class="right-align">
				<?php getBoutonFinSection('GR',$leciono,$section,$persono_id); ?>
				<a id="farita" class="btn-floating btn-large light-blue darken-1 hide"><i class="material-icons">done_all</i></a>
			</div>
			<div class="ligoj">
				<?php getLecioneroAntauxa('GR',$leciono,$section); ?>
				<?php getLecioneroVenonta('GR',$leciono,$section); ?>
			</div>
		</section>
		
	</article>
	
	<?php include "gerdaflanko.inc.php"; ?>

</div>

<?php include "gerdapiedo.inc.php"; ?>