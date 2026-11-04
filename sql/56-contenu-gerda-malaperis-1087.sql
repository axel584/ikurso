-- #1087 : contenu des sections du cours GR dans lecioneroj.enhavo, extrait de fr/gerda/ par sql/eltiri-enhavon.php.
-- La section est retrouvée par cours, numéro de leçon et ordre : le script vaut pour la prod et peut être rejoué.
-- lecioneroj est en MyISAM (pas de transaction) : en prod, sauvegarder d'abord la table.
SET NAMES utf8mb4;

-- leçon 1, section 1
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<fieldset class="sono">
				<legend>Aŭskultu tiun rakonton:</legend>
				<p>
					<audio id="audioPlayer" controls="controls" type="audio/mpeg">
						<source type="audio/mp3" src="fr/gerda/son/gerda/gerda01.mp3" />
					</audio>
				</p>
			</fieldset>
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
					<img src="fr/gerda/bildoj/gerda01-2.gif" class="responsive-img">
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
					<img src="fr/gerda/bildoj/gerda01-1.gif" class="responsive-img">
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
					<img src="fr/gerda/bildoj/gerda01-3.gif" class="responsive-img">
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
					<img src="fr/gerda/bildoj/gerda01-4.gif" class="responsive-img">
				</div>
			</div>'
  WHERE l.kurso = 'GR' AND l.numero = 1 AND le.ordo = 1;

-- leçon 1, section 2
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<section class="klarigo">
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
				<p>Ce mode n''est pas utilisé dans la leçon mais il est habituel de citer les verbes à 
				l''infinitif dans les dictionnaires. Nous suivons cette habitude dans la liste ci-dessus.
				</p>
				<p><span class="eo">sid<b>i</b></span> : être assis → <span class="eo">li sidas</span> : il est assis</p>
			
				<h4><b>-u</b> : <i>verbe, impératif</i></h4>
				<p><span class="eo">vi sidas</span> : tu es assis → <span class="eo">sid<b>u</b>!</span> : assieds-toi (mot-à-mot «sois assis»)</p>
				<p><span class="eo">venu!</span> : viens !, venez ! → <span class="eo">ne ven<b>u</b>!</span> : ne viens pas !, ne venez pas!</p>
				<p><span class="eo">iru!</span> : va !, allez ! → <span class="eo">li ir<b>u</b>!</span> : qu''il aille !</p>
			
				<h4><b>mal-</b> : <i>opposé, contraire</i></h4>
				<p><span class="eo">alta</span> : haut → <span class="eo"><b>mal</b>alta</span> : bas</p>
				<p><span class="eo">multe</span> : beaucoup → <span class="eo"><b>mal</b>multe</span> : peu, pas beaucoup</p>
				<p><span class="eo">vero</span> : vérité → <span class="eo"><b>mal</b>vero</span> : mensonge</p>
			
				<h4><b>-in-</b> : <i>femelle</i></h4>
				<p><span class="eo">knabo</span> : garçon → <span class="eo">knab<b>in</b>o</span> : fille</p>
				
				<h3>Exemples d''utilisation de <i>kiu</i> :</h3>
				<p><span class="eo"><b>kiu</b> estas Linda?</span> : qui est Linda&nbsp;?</p>
				<p><span class="eo"><b>kiu</b> scias?</span> : qui sait&nbsp;?</p>
				<p><span class="eo"><b>kiu</b> estas tiu knabo?</span> : qui est ce garçon&nbsp;?</p>
			
				<p><span class="eo"><b>kiu</b> knabo laboras?</span> : quel garçon travaille&nbsp;?</p>
				<p><span class="eo">al <b>kiu</b> knabino li iras?</span> : vers quelle fille va-t-il&nbsp;?</p>
				<p><span class="eo">en <b>kiu</b> universitato la knabino laboras?</span> : 
				dans quelle université la fille travaille-t-elle&nbsp;?</p>
				<p><span class="eo">la viro, <b>kiu</b> rigardas</span> : l''homme qui regarde</p>
				<p><span class="eo">la universitato, en <b>kiu</b> mi laboras</span> : l''université dans laquelle je travaille</p>
				<p><span class="eo">la knabo, al <b>kiu</b> vi rigardas</span> : le garçon que tu regardes</p>
			</section>'
  WHERE l.kurso = 'GR' AND l.numero = 1 AND le.ordo = 2;

-- leçon 1, section 3
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<p class="parto">Dans ce premier chapitre nous vous indiquons la prononciation des mots
			pour que vous rappeliez bien les quelques difficultés de prononciation
			de l''espéranto pour un francophone&nbsp;:</p>
			<ul class="klarigo">
				<li>le <b>s</b> se prononce toujours <i>ss</i> jamais comme <i>z</i></li>
				<li>le <b>s</b> se prononce toujours même en fin de mot</li>
				<li>le <b>n</b> ne nasalise jamais la voyelle précédente</li>
				<li>le <b>h</b> est toujours expiré</li>
				<li>le <b>r</b> est roulé (mais si vous n''y arrivez pas ce n''est pas grave)</li>
				<li>l''accent tonique est sur l''avant-dernière syllabe</li>
				<li>une syllabe pour chaque voyelle (même i devant une autre voyelle)</li>
			</ul>
			</p>
			<p>
			Dans la prononciation figurée nous séparons les syllabes par des
			tirets, la syllabe accentuée apparaissant en gras. Prononcez chaque
			syllabe ainsi figurée comme s''il s''agissait d''un mot français où les
			<i>e</i> sont toujours muets.
			</p>

			
			<p class="eo eta">Ces mots seront automatiquement ajoutés à votre vocabulaire à réviser lorsque vous aurez terminé d''étudier cette section.</p>
			
			<div class="vortlisto row">
				<div class="col s12 m6">
					<p><span class="eo">al</span> : à, vers <span class="eta">[<i>al</i>]</span></p>
					<p><span class="eo">alta</span> : grand(e), haut(e) <span class="eta">[<i><b>al</b>-ta</i>]</span></p>
					<p><span class="eo">angulo</span> : coin, angle  <span class="eta">[<i>anne-<b>gou</b>-lo</i>]</span></p>
					<p><span class="eo">bela</span> : beau, belle <span class="eta">[<i><b>bè</b>-la</i>]</span></p>
					<p><span class="eo">blonda</span> : blond(e) <span class="eta">[<i><b>blonne</b>-da</i>]</span></p>
					<p><span class="eo">demandi</span> : interroger, demander</p>
					<p class="sekva"><span class="eo">demandas</span> <span class="eta">(<i>présent de <b>demandi</b></i>)</span>&nbsp;: (je, il, elle) demande, (tu) demandes, (nous) demandons, (vous) demandez, (ils, elles) demandent <span class="eta">[<i>dè-<b>manne</b>-dasse</i>]</span>&nbsp;;
						(j'')interroge, (je) questionne…</p>
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
						(je) suis, (tu) es, (il, elle) est, (nous) sommes, (vous) êtes, (ils, elles) sont, c''est</p>
					<p class="sekva tab"><span class="eo">vi estas bela</span> : tu es beau (belle)</p>
					<p class="sekva tab"><span class="eo">estas fakto</span> / <span class="eo">tio estas fakto</span>&nbsp;: c''est un fait</p>
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
					<p class="sekva tab"><span class="eo">kio okazas?</span> : qu''arrive-t-il&nbsp;?</p>
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
					<p class="sekva tab"><span class="eo">kio okazas al vi?</span> : qu''est-ce qui t''arrive&nbsp;?</p>
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
				</div>'
  WHERE l.kurso = 'GR' AND l.numero = 1 AND le.ordo = 3;

-- leçon 1, section 4
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<p class="parto">Indications pour les exercices :</p>
			<p><b>Questionnaire (Demandoj) :</b> 
			Il s''agit de répondre en utilisant l''une des réponses
			suggérées. Toutes les réponses sont grammaticalement correctes
			(quoique parfois loufoques) mais une seule correspond au récit.
			La réponse doit consister en une (ou plusieurs!) phrase(s) complète(s).
			</p>
			
			<p><b>Exercices (Ekzercoj) :</b>
			Il s''agit de réassembler une phrase en utilisant les morceaux
			de mot épars qui vous sont proposés. C''est plus facile que ça
			n''en a l''air au premier abord. 
			</p>

			##EKZERCO:49##
			##EKZERCO:50##
			##EKZERCO:51##'
  WHERE l.kurso = 'GR' AND l.numero = 1 AND le.ordo = 4;

-- leçon 1, section 5
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<div class="row">
				<div class="col s12">
					<div class="card-panel blue lighten-5">
						Grâce à ce que vous avez appris dans cette leçon, vous devriez sans problème pouvoir comprendre le texte suivant. L''histoire n''est pas liée à celle de <i>Gerda malaperis</i>, mais elle vous permettra de découvrir d''autres constructions de mots.<br/>
						Vous pouvez retrouver ce texte sur la plateforme de lecture <a target="_new" href="https://nilegu.esperanto-france.org/teksto/lasumin01">Ni legu</a>. Un dictionnaire intégré vous aidera en cas d''hésitation sur un mot.
					</div>
				</div>
			</div>
					<fieldset class="sono">
				<legend>Aŭskultu tiun rakonton:</legend>
				<p>
					<audio id="audioPlayer" controls="controls" type="audio/mpeg">
						<source type="audio/mp3" src="audio/lasumin01.mp3" />
					</audio>
				</p>
			</fieldset>
			<h3>Izabela</h3>
			<p>Izabela rigardas al la granda spegulo. La knabino en
			la granda spegulo rigardas al Izabela. Izabela scias, kiu
			estas la knabino en la spegulo. Tiu enspegula knabino estas
			juna, malgranda kaj ne bela. Estas Izabela.</p>
		
			<p>«La mondo ne estas bela» diras Izabela al la
			spegulo. «Mi ne estas bela, mi ne estas granda, mi estas
			juna, tro juna. Nenio okazas al mi. En la tuta mondo ne
			estas knabo, kiu venas al mi kaj diras al mi “saluton” kaj
			sidas kun mi. En la tuta mondo ne estas juna viro, kiu venas
			al mi kaj rigardas al mi kaj diras: “Kara Izabela, vi estas
			juna kaj bela, sed vi laboras tro multe. Ne laboru nun. Venu
			kun mi. Ne demandu, kiu mi estas, kio mi estas. Mi estas nur
			juna viro, kiu rigardas al vi kaj diras : Vi estas tute
			sola. Venu kun mi. Kun mi la mondo estas bela kaj granda.”
			Sed ne venas tiu knabo, kaj en la tuta mondo nenio okazas.
			Nenio okazas al mi, nenio nova okazas, nenio speciala
			okazas. Nur laboro, laboro, laboro… Estas tro.»</p>
			
			<p>«Mi sidas tute sola. Mi rigardas al vi, spegulo. Kaj
			en la spegulo estas nur Izabela, la plej malbela knabino en
			la tuta mondo. Vere la nuna mondo ne estas bela.»</p>'
  WHERE l.kurso = 'GR' AND l.numero = 1 AND le.ordo = 5;

-- leçon 1, section 6
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##RESUMO##'
  WHERE l.kurso = 'GR' AND l.numero = 1 AND le.ordo = 6;

-- leçon 2, section 1
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<fieldset class="sono">
				<legend>Aŭskultu tiun rakonton:</legend>
				<p>
					<audio id="audioPlayer" controls="controls" type="audio/mpeg">
						<source type="audio/mp3" src="fr/gerda/son/gerda/gerda02.mp3" />
					</audio>
				</p>
			</fieldset>
			<h3>Kio okazas?</h3>
			<div class="row dialogo">
				<div class="col s12 m8">
					<p><b>Linda:</b> Tom!</p>
					<p><b>Tom:</b> Kio okazas al vi? Vi estas pala! Bela, sed pala.</p>
					<p><b>Linda:</b> Tom! Ne rigardu!</p>
					<p><b>Tom:</b>	Kio okazas?</p>
					<p><b>Linda:</b> Strange! Okazas io stranga, io tre stranga. Tiu ulo, tiu nova
					studento… Ne, ne, mi petas vin, ne rigardu. Estu diskreta.</p>
					<p><b>Tom:</b> Diable! Diru al mi. Kio estas tiu mistero?</p>
					<p><b>Linda:</b> Lia mano agas strange. Rigardu, se vi volas, sed plej diskrete.
					Turnu vin iomete, eble, sed tute nature. Li ne vidu, ke vi rigardas al li.</p>
					<p><b>Tom:</b> Vi pravas. Io stranga okazas. Dum ŝi ne rigardas al li – ŝi
					nun rigardas al la granda spegulo – lia mano iom post iom, tre tre
					malrapide, proksimiĝas al ŝia taso…</p>
					<p><b>Linda:</b> Estas io en lia mano…</p>
					<p><b>Tom:</b> Mi ne vidas. Li estas tro malproksima. Diable! Tiu alta forta
					knabo nun staras inter ili kaj mi. Mi ne plu vidas.</p>
				</div>
				<div class="col s12 m4">
					<img src="fr/gerda/bildoj/gerda02-1.gif" class="responsive-img">
				</div>
			</div>
			<div class="row dialogo">
				<div class="col s12 m8">
                                    <p><b>Linda:</b> Sed <i>mi</i> vidas. Mi vidas bone. Mi vidas tre bone. Mi vidas tute bone. Ej!</p>
					<p><b>Tom:</b> Kio okazas?</p>
					<p><b>Linda:</b> Ŝi rigardas al li nun, kaj lia mano haltas.</p>
					<p><b>Tom:</b> Kaj kio plu? Diru al mi!</p>
					<p><b>Linda:</b> Nun li parolas al ŝi. Li montras al la pordo.</p>
					<p><b>Tom:</b> Eble li volas, ke ŝi rigardu al alia direkto, ke ŝi ne plu rigardu al li.</p>
					<p><b>Linda:</b> Prave, tute prave. Jen ŝi rigardas al la pordo. Li plu parolas
					kaj parolas. Dum ŝi ne rigardas al lia direkto, lia mano plu
					proksimiĝas al la taso. Ej!</p>
					<p><b>Tom:</b> Kio? Kio okazas?</p>
					<p><b>Linda:</b> Lia mano revenas, tute diskrete, kvazaŭ tute nature.</p>
					<p><b>Tom:</b> Ĉu estas io en lia mano?</p>
					<p><b>Linda:</b> Nenio plu. Sed tute certe nun estas io en ŝia taso.</p>
				</div>
				<div class="col s12 m4">
					<img src="fr/gerda/bildoj/gerda02-2.gif" class="responsive-img">
				</div>
			</div>'
  WHERE l.kurso = 'GR' AND l.numero = 2 AND le.ordo = 1;

-- leçon 2, section 2
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<section class="klarigo">
				<h4>-iĝ- : <i>devenir, …</i></h4>
				<p><span class="eo">proksima</span> : proche → <span class="eo">ili proksimiĝas</span> : ils se rapprochent</p>
				<p><span class="eo">stara</span> : debout → <span class="eo">li stariĝas</span> : il se lève</p>
				<p><span class="eo">viro</span> : homme, mâle → <span class="eo">la knabo viriĝas</span> : le garçon est en train de devenir un homme</p>
				<p><span class="eo">rapida</span> : vite, rapide → <span class="eo">rapidiĝo</span> : accélération</p>
	
				<h4>re- : <i>répétition, retour</i></h4>
				<p><span class="eo">ŝi vidas</span> : elle voit → <span class="eo">ŝi revidas</span> : elle revoit</p>
				<p><span class="eo">vi venas</span> : vous venez → <span class="eo">vi revenas</span> : vous revenez</p>
				<p><span class="eo">li fortiĝas</span> : il devient fort → <span class="eo">li refortiĝas</span> : il retrouve ses forces</p>
				<p><span class="eo">bela</span> : belle → <span class="eo">ŝi rebeliĝas</span> : elle redevient belle&nbsp;/ <span class="eo">rebeliĝo</span> : le fait de retrouver sa beauté</p>
				
				<h4>-ulo : <i>une personne</i></h4>
				<p><span class="eo">juna</span> : jeune → <span class="eo">junulo</span> : un jeune</p>
				<p><span class="eo">forta</span> : fort → <span class="eo">fortulo</span> : un homme fort</p>
				<p><span class="eo">stranga</span> : bizarre → <span class="eo">strangulo</span> : un type bizarre, un original</p>
	
				<h4>-n : <i>complément d''object direct d''un verbe</i></h4>
				<p><span class="eo">li vidas vin, li vin vidas, vin li vidas, vidas li vin, vidas vin li,
				</span> : il te voit</p>
				<p><span class="eo">vi vidas lin, vi lin vidas, lin vi vidas, vidas vi lin, vidas lin vi
				</span> : tu le vois</p>
				<p><span class="eo">mi petas vin</span> : je te demande (de faire quelque chose), je te prie</p>
	
				<p class="parto">
				Notez l''emploi de <b>estas</b> dans le sens de <em>il y a</em>&nbsp;:</p>
				<p><span class="eo">estas io en lia mano</span> : il y a quelque chose dans sa main</p>
				<p><span class="eo">estas nenio en lia mano</span> : il n''y a rien dans sa main, 
				il n''a rien dans la main</p>
	
				<p class="parto">
				Notez l''emploi de la forme d''adverbe en <b>-e</b> dans les cas suivants :</p>
				<p><span class="eo">estas prave</span> : c''est exact</p>
				<p><span class="eo">prave!</span> : exact !</p>
				<p><span class="eo">strange!</span> : bizarre !</p>
	
				<p class="parto">Faites attention à la différence de sens entre
				<b>ĉu</b> (interrogation) et <b>se</b> (condition)&nbsp;:</p>
				<p><span class="eo">mi ne vidas, ĉu estas io inter mi kaj vi</span> : 
					je ne vois pas s''il y a quelque chose entre vous et moi.
					(Y a-t-il quelque chose ? Je ne vois pas.)</p>
				<p><span class="eo">mi ne vidas, se estas io inter mi kaj vi.</span> : 
					s''il y a quelque chose entre moi et vous, alors je ne vois pas.
					(Cette chose m''empêche de voir.)</p>
			</section>'
  WHERE l.kurso = 'GR' AND l.numero = 2 AND le.ordo = 2;

-- leçon 2, section 3
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<p class="parto">
			Dans ce chapitre nous ne vous indiquons la prononciation figurée que
			des mots qui pourraient présenter une difficulté. La lettre <b>ŭ</b> fait
			son apparition dans la diphtongue <b>aŭ</b> qu''il faut prononcer en une
			seule syllabe comme un <b>a</b> suivi d''un <b>o</b> ou d''un <b>ou</b> brefs. Vous
			verrez également apparaître <b>ĉ</b> [<i>tch</i>] et <b>ĝ</b> [<i>dj</i>].
			
			<p class="eo eta">Ces mots seront automatiquement ajoutés à votre vocabulaire à réviser lorsque vous aurez terminé d''étudier cette section.</p>
			
			<div class="vortlisto row">
				<div class="col s12 l6">
					<p><span class="eo">agi</span> : agir</p>
					<p><span class="eo">alia</span> : autre <span class="eta">[<i>a-<b>li</b>-a</i>]</span></p>
					<p><span class="eo">alparoli</span> : adresser la parole à</p>
					<p><span class="eo">bona</span> : bon(ne)</p>
					<p class="sekva"><span class="eo">bone</span> : bien</p>
					<p><span class="eo">certa</span> : certain(e) <span class="eta">[<i><b>tsèr</b>-ta</i>]</span></p>
					<p class="sekva"><span class="eo">certe</span> : certainement</p>
					<p><span class="eo">ĉu</span> : est-ce que…, si (indique l''interrogation) <span class="eta">[<i><b>tchou</b></i>]</span></p>
					<p class="sekva tab"><span class="eo">li venas</span> : il vient</p>
					<p class="sekva tab">→ <span class="eo">ĉu li venas?</span> : vient-il&nbsp;?</p>
					<p class="sekva tab"><span class="eo">vi scias</span> : tu sais</p>
					<p class="sekva tab">→ <span class="eo">ĉu vi scias</span> : est-ce que tu sais&nbsp;?</p>
					<p class="sekva tab"><span class="eo">ĉu li sidas?</span> : est-il assis ?</p>
					<p class="sekva tab">→ <span class="eo">mi ne scias, ĉu li sidas</span> : je ne sais pas s''il est assis</p>
					<p><span class="eo">diable!</span> : diable !, diantre ! <span class="eta">[<i>di-<b>a</b>-blè (trois syllabes&nbsp;!)</i>]</span></p>
					<p class="sekva"><span class="eo">diablo</span> : diable</p>
					<p><span class="eo">direkto</span> : direction</p>
					<p><span class="eo">diskreta</span> : discret, discrète</p>
					<p class="sekva"><span class="eo">diskrete</span> : discrètement, avec discrétion</p>
					<p><span class="eo">dum</span> : durant, pendant, pendant que</p>
					<p><span class="eo">ej!</span> : hé là !</p>
					<p><span class="eo">forta</span> : fort(e)</p>
					<p><span class="eo">halti</span> : s''arrêter <span class="eta">[<i>(h expiré)</i>]</span></p>
					<p><span class="eo">iĝi</span> : devenir <span class="eta">[iĝas: <i><b>i</b>-djasse</i>]</span></p>
					<p><span class="eo">ili</span> : ils</p>
					<p><span class="eo">inter</span> : entre, parmi</p>
					<p><span class="eo">io</span> : quelque chose <span class="eta">[<i>(deux syllabes&nbsp;!)</i>]</span></p>
					<p class="sekva"><span class="eo">io mistera</span> : quelque chose de mystérieux</p>
					<p><span class="eo">iom</span> : un peu <span class="eta">[<i>(deux syllabes&nbsp;!)</i>]</span></p>
					<p class="sekva"><span class="eo">iom post iom</span> : petit à petit, peu à peu</p>
					<p><span class="eo">iomete</span> : un petit peu</p>
					<p><span class="eo">junulo</span> : = jun- + -ulo</p>
					<p><span class="eo">ke</span> : que (exemple: je sais que…, il dit que…)</p>
					<p><span class="eo">kvazaŭ</span> : quasi-, comme si <span class="eta">[<i><b>kva</b>-zaou (ou bref)</i>]</span></p>
					<p><span class="eo">lia</span> : son, sa (à lui)</p>
					<p><span class="eo">mano</span> : main</p>
					<p><span class="eo">mistera</span> : mystérieux, mystérieuse</p>
					<p class="sekva"><span class="eo">mistere</span> : mystérieusement</p>
					<p class="sekva"><span class="eo">mistero</span> : mystère</p>
				</div>
				<div class="col s12 l6">
					<p><span class="eo">montri</span> : montrer, désigner</p>
					<p><span class="eo">natura</span> : naturel(le)</p>
					<p class="sekva"><span class="eo">nature</span> : naturellement</p>
					<p class="sekva"><span class="eo">naturo</span> : nature</p>
					<p><span class="eo">ne plu</span> : plus maintenant, ne… plus</p>
					<p><span class="eo">pala</span> : pâle</p>
					<p><span class="eo">paroli</span> : parler</p>
					<p><span class="eo">peti</span> : demander (de faire quelque chose)&nbsp;; prier (de faire quelque chose)</p>
					<p class="sekva"><span class="eta">ne pas confondre avec <span class="eo">demandi</span> (poser une question). 
					On utilise <span class="eo">mi petas</span> pour dire «s''il vous / te plaît»</span></p>
					<p><span class="eo">plu</span> : plus, plus longtemps, plus loin</p>
					<p><span class="eo">pordo</span> : porte</p>
					<p><span class="eo">post</span> : après</p>
					<p><span class="eo">pravi</span> : avoir raison, être correct</p>
					<p class="sekva"><span class="eo">prava</span> : correct(e) (opinion, comportement, etc.)</p>
					<p class="sekva"><span class="eo">malpravi</span> : avoir tort, être faux</p>
					<p class="sekva"><span class="eo">malprava</span> : faux, erroné</p>
					<p><span class="eo">proksima</span> : proche</p>
					<p class="sekva"><span class="eo">malproksima</span> : éloigné(e)</p>
					<p class="sekva"><span class="eo">proksimiĝi</span> = <span class="eo">proksim</span>- + -<span class="eo">iĝ</span>- + -<span class="eo">i</span> : s''approcher</p>
					<p><span class="eo">rapida</span> : rapide, vif, vive</p>
					<p class="sekva"><span class="eo">malrapida</span> : lent</p>
					<p><span class="eo">reveni</span> = <span class="eo">re</span>- + <span class="eo">veni</span> : revenir</p>
					<p><span class="eo">se</span> : si (indique une condition)</p>
					<p><span class="eo">stari</span> : se tenir debout, être debout</p>
					<p><span class="eo">stranga</span> : bizarre <span class="eta">[<i><b>stranne</b>-ga</i>]</span></p>
					<p><span class="eo">strange</span> : bizarrement</p>
					<p class="sekva tab"><span class="eo">li rigardas al mi strange</span> : il me regarde bizarrement</p>
					<p class="sekva tab"><span class="eo">(estas) strange!</span> : (c''est) bizarre&nbsp;!</p>
					<p class="sekva tab"><span class="eo">strangulo</span> = <span class="eo">strang</span>– + –<span class="eo">ulo</span></p>
					<p><span class="eo">ŝi</span> : elle <span class="eta">[<i><b>chi</b></i>]</span></p>
					<p class="sekva"><span class="eo">ŝia</span> : son, sa (à elle) <span class="eta">[<i><b>chi</b>-a</i>]</span></p>
					<p><span class="eo">taso</span> : tasse</p>
					<p><span class="eo">tre</span> : très</p>
					<p><span class="eo">turni</span> : tourner</p>
					<p><span class="eo">ulo</span> : type, individu</p>
					<p><span class="eo">vidi</span> : voir</p>
					<p><span class="eo">vin</span> = <span class="eo">vi</span> + -<span class="eo">n</span> <span class="eta">[<i><b>vine</b></i>]</span></p>
					<p><span class="eo">voli</span> : vouloir</p>
				</div>
			</div>'
  WHERE l.kurso = 'GR' AND l.numero = 2 AND le.ordo = 3;

-- leçon 2, section 4
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##EKZERCO:52##
			##EKZERCO:53##'
  WHERE l.kurso = 'GR' AND l.numero = 2 AND le.ordo = 4;

-- leçon 2, section 5
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<div class="row">
				<div class="col s12">
					<div class="card-panel blue lighten-5">
						Grâce à ce que vous avez appris dans cette leçon, vous devriez sans problème pouvoir comprendre le texte suivant. L''histoire n''est pas liée à celle de <i>Gerda malaperis!</i>, mais elle vous permettra de découvrir d''autres constructions de mots.
					</div>
				</div>
			</div>

					<fieldset class="sono">
				<legend>Aŭskultu tiun rakonton:</legend>
				<p>
					<audio id="audioPlayer" controls="controls" type="audio/mpeg">
						<source type="audio/mp3" src="audio/lasumin02.mp3" />
					</audio>
				</p>
			</fieldset>
			<h3>Stranga strangulo</h3>

			<p>Tiu ulo estas stranga. Ĉu vi vidas lin? Tiu granda
			viro, vere forta, kiu staras proksime al la spegulo,
			kun io en la mano. Li ne plu estas tre juna, sed li ne
			estas maljuna. Ĉu vi vidas lin? Ĉu vi vidas lin nun?
			</p>
			<p>Turnu vin iomete. Jen. Nun vi certe vidas lin, ĉu ne?</p>
			<p>Nu, tiu stranga ulo parolas tute sola. Dum vi rigardas
			lin, li haltas, sed se vi ne rigardas, li reparolas. Li
			iras rapide al la pordo, staras proksime al tiu alia
			ulo, kiu sidas en la angulo kun bela knabino, staras
			proksime al ŝi, tute proksime al ŝi, fakte. Li
			rigardas ŝin, sed ne parolas al ŝi. Estas io en lia
			mano, sed mi ne scias, kio. Poste li revenas al la
			pordo, staras inter la pordo kaj la alta spegulo, kaj
			nenio okazas.</p>
			<p>Nun li malrapide proksimiĝas al la spegulo, parolas al
			la spegulo, dum juna virino sidas tute proksime. Sed li
			ne parolas al ŝi, li parolas al la spegulo! Strange,
			ĉu ne? Vere stranga ulo!</p>
			<p>Nun, jen li malrapide revenas al alia angulo. Io estas
			tute ne-natura en lia rigardo.</p>
			<p>Ĉu vi scias, kiu estas tiu viro? Li estas forta kaj
			alta, sed pala, tro pala, multe tro pala. Li estas
			ne-nature pala. Vera strangulo!</p>
			<p>Ĉu mi demandu al li, kiu li estas? Diable! Mi ne plu
			vidas lin. Knabo kaj knabino staras inter li kaj mi.
			Ĉu vi vidas lin nun? Mi ne. Mi ne plu vidas lin. Ho
			jes, jen mi lin revidas. Fakte, li nun staras iom
			malproksime. Rigardu! Jen, nun li iras tre malrapide
			al la pordo. Vere, li agas plej strange. Mi demandas
			min…</p>
			<p>Kio estas en lia mano? Ĉu vi vidas? Ha, jen li
			reproksimiĝas. Mi bone vidas nun. Nun mi vidas, kio
			estas en lia mano. Estas taso. Estas nur taso. Rigardu,
			li agas vere strange! Li parolas al la taso. Li iras
			al tiu juna studentino, kiu sidas en la angulo, haltas,
			staras proksime al ŝi, sed ne parolas al ŝi. Li
			parolas nur al la taso. Li agas vere strange, vere tre
			strange, vere tro strange. Nun mi ne plu vidas lin.</p>
			<p>Ho jes! Se mi turnas min iomete, mi revidas lin.
			Stranga ulo. Mi vere demandas al mi, kiu li estas. Li
			certe ne estas nova studento. Li estas tro maljuna.</p>'
  WHERE l.kurso = 'GR' AND l.numero = 2 AND le.ordo = 5;

-- leçon 2, section 6
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##RESUMO##'
  WHERE l.kurso = 'GR' AND l.numero = 2 AND le.ordo = 6;

-- leçon 3, section 1
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<fieldset class="sono">
				<legend>Aŭskultu tiun rakonton:</legend>
				<p>
					<audio id="audioPlayer" controls="controls" type="audio/mpeg">
						<source type="audio/mp3" src="fr/gerda/son/gerda/gerda03.mp3" />
					</audio>
				</p>
			</fieldset>
			<h3>Amdeklaro</h3>
			<div class="row dialogo">
				<div class="col s12 m8">
					<p><b>Bob:</b> Diable! Kio okazas? Vi aspektas kiel spionoj. Ĉu mi povas sidi
					kun vi?</p>
					<p><b>Linda:</b> Saluton, Bob.</p>
					<p><b>Tom:</b> Bonan tagon, Bob.</p>
					<p><b>Bob:</b> Bonan tagon, Linda. Bonan tagon, Tom. Pardonu, ke mi ne salutis
					vin tuj.</p>
					<p><b>Linda:</b> Ne gravas. Nun vi salutis, kaj ni pardonas vin.</p>
					<p><b>Bob:</b> Ĉu vi permesas, ke mi sidu ĉe via tablo?</p>
					<p><b>Linda:</b> Kompreneble, vi sidu kun ni.</p>
					<p><b>Bob:</b> Mi tamen ne volas esti maldiskreta. Eble Tom parolas pri amo
					kaj preferas esti sola kun vi.</p>
					<p><b>Tom:</b> Mi ne parolis pri amo.</p>
					<p><b>Linda:</b> Li nur diris, ke mi estas la plej bela virino en la tuta mondo.</p>
					<p><b>Bob:</b> Li pravas. Tio ne estas amdeklaro, tio estas simpla fakto.</p>
					<p><b>Tom:</b> Prave. Simpla fakto.</p>
					<p><b>Bob:</b> Nu, certe, Linda estas tre bela, sed ne tio gravas nun.</p>
					<p><b>Linda:</b> Ne gravas, ĉu? Ne gravas, ke mi estas bela, ĉu? Jen bela deklaro!</p>
					<p><b>Bob:</b> Pardonu min. Mi volas diri, ke io estas pli grava.</p>
				</div>
				<div class="col s12 m4">
					<img src="fr/gerda/bildoj/gerda03-1.gif" class="responsive-img">
				</div>
			</div>
			<div class="row dialogo">
				<div class="col s12 m8">
					<p><b>Tom:</b> Kio? Pri kio vi parolas? Kio estas pli grava?</p>
					<p><b>Bob:</b> Vi ne vidis min, dum mi proksimiĝis al vi, sed mi vin
					rigardis.</p>
					<p><b>Linda:</b> Mi ne komprenas, pri kio vi parolas.</p>
					<p><b>Bob:</b> Mi parolas pri via vizaĝo.</p>
					<p><b>Linda:</b> Kio pri mia vizaĝo? Ĉu ĝi ne estas bela?</p>
					<p><b>Bob:</b> Ho jes, ĝi estas bela, ĝi estas la plej bela en la mondo.
					Sed ĝi estis mistera!</p>
					<p><b>Linda:</b> Mistera? Ĉu mia vizaĝo estis mistera?</p>
					<p><b>Bob:</b> Jes. Via vizaĝo estis mistera. Fakte, viaj vizaĝoj estis
					misteraj. Mistera vizaĝo de spionino ĉe mistera vizaĝo de spiono.
					Vi aspektis strange. Vi aspektis mistere. Mi bone rigardis vin, dum mi
					proksimiĝis al vi, kaj estis mistera esprimo sur via vizaĝo, Linda,
					kaj ankaŭ sur via, Tom. Kiel mi jam diris, vi aspektis kiel spionoj.</p>
				</div>
				<div class="col s12 m4">
					<img src="fr/gerda/bildoj/gerda03-2.gif">
				</div>
			</div>'
  WHERE l.kurso = 'GR' AND l.numero = 3 AND le.ordo = 1;

-- leçon 3, section 2
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<section class="klarigo">
			<h4>-j : <i>pluriel</i></h4>
			<p><span class="eo">viro</span> : (un) homme → <span class="eo">viroj</span> : (des) hommes</p>
			<p><span class="eo">virino</span> : (une) femme → <span class="eo">virinoj</span> : (des) femmes</p>
			<p><span class="eo">juna viro</span> : (un) jeune homme → <span class="eo">junaj viroj</span> : (des) jeunes hommes</p>
			<p><span class="eo">bela tago</span> : (une) belle journée → <span class="eo">belaj tagoj</span> : (de) belles journées</p>
			<p><span class="eo">mi scias</span> : je sais → <span class="eo">scio</span> : savoir (n.), connaissance</p>
			
			<h4>-i : <i>infinitif</i></h4>
			<p><span class="eo">kompreni estas pardoni</span> : comprendre c''est pardonner</p>

			<p><span class="eo">mi salutas lin</span> : je le salue<br>
				<span class="eo">mi volas saluti lin</span> : je veux le saluer</p>

			<p><span class="eo">li komprenas</span> : il comprend<br>
				<span class="eo">li povas kompreni</span> : il peut comprendre<br>
				<span class="eo">la povo kompreni</span> : la capacité de comprendre</p>
			
			<h4>-is : <i>verbe, temps passé</i></h4>
			<p><span class="eo">mi estis</span> : j''étais, je fus, j''ai été</p>
			<p><span class="eo">li venis</span> : il est venu, il vint, il venait</p>
			<p><span class="eo">ŝi amis vin</span> : elle t''a aimé, elle t''aima, elle t''aimait</p>
			
			<h4>-a (avec un pronom personnel)</h4>
			<p>Ajoutée à la base d''un pronom personnel (<span class="eo">mi</span>, <span class="eo">vi</span>, <span class="eo">li</span>, <span class="eo">ŝi</span>, <span class="eo">ĝi</span>, <span class="eo">ni</span>, <span class="eo">ili</span>), 
			la terminaison -<b>a</b> sert à former des adjectifs possessifs.</p>
			
			<h4>-ebl- : <i>possibilité</i></h4>
			<p><span class="eo">kompreni</span> : comprendre → <span class="eo">komprenebla</span> : compréhensible</p>
			<p><span class="eo">vidi</span> : voir → <span class="eo">videbla</span> : visible&nbsp;/ <span class="eo">nevidebla</span> : invisible</p>
			<p><span class="eo">ami</span> : aimer → <span class="eo">amebla</span> : aimable, qui peut être aimé</p>
		
			<h4>mal- : <i>utilisé pour obtenir le contraire, l''antonyme.</i></h4>
			<p><span class="eo">ami</span> : aimer → <span class="eo">ne ami</span> : ne pas aimer / <span class="eo">malami</span> : haïr</p>
			<p><span class="eo">forta</span> : fort → <span class="eo">ne forta/neforta</span> : pas fort / <span class="eo">malforta</span> : faible</p>
		
			<p><span class="eo">tio ne gravas</span> : ça n''a pas d''importance<br>
				<span class="eo">ne tio gravas</span> : ce n''est pas cela qui importe</p>
			<p><span class="eo">li aspektas kiel studento</span> : il a l''air d''un étudiant</p>
			<p><span class="eo">ŝi aspektas june</span> : elle paraît jeune<br>
				<span class="eta">(On utilise aussi <span class=''eo''>ŝi aspektas juna</span>, 
				ce que certains puristes désapprouvent.)</span></p>
		</section>'
  WHERE l.kurso = 'GR' AND l.numero = 3 AND le.ordo = 2;

-- leçon 3, section 3
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<p class="parto">À partir de cette leçon nous ne vous indiquerons plus la prononciation 
		figurée sauf exception.</p>
			
			<p class="eo eta">Ces mots seront automatiquement ajoutés à votre vocabulaire à réviser lorsque vous aurez terminé d''étudier cette section.</p>
			
			<div class="vortlisto row">
				<div class="col s12 l6">
					<p><span class="eo">amdeklaro</span> = <span class="eo">am</span>- + <span class="eo">deklaro</span><br>= deklaro de amo = deklaro pri amo</p>
					<p><span class="eo">ami</span> : aimer</p>
					<p class="sekva"><span class="eo">amo</span> : amour</p>
					<p><span class="eo">ankaŭ</span> : aussi <span class="eta">[<i><b>anne</b>-kaou (ou bref)</i>]</span></p>
					<p><span class="eo">aspekti</span> : ressembler (à)</p>
					<p class="sekva"><span class="eo">aspekto</span> : aspect, apparence, ressemblance</p>
					<p><span class="eo">bonan tagon</span> : bonjour</p>
					<p><span class="eo">ĉe</span> : à (comme dans «à la table»), à côté, près de</p>
					<p><span class="eo">de</span> : de (possession)</p>
					<p><span class="eo">deklari</span> : déclarer</p>
					<p class="sekva"><span class="eo">deklaro</span> : déclaration</p>
					<p><span class="eo">esprimi</span> : exprimer</p>
					<p class="sekva"><span class="eo">esprimo</span> : expression</p>
					<p><span class="eo">grava</span> : important(e)</p>
					<p class="sekva"><span class="eo">gravi</span> : avoir de l''importance</p>
					<p><span class="eo">ĝi</span> : il, elle (pour les non-personnes : objets, animaux, abstractions…)</p>
					<p class="sekva"><span class="eo">ĝia</span> : son, sa (à lui,neutre)</p>
					<p><span class="eo">jam</span> : déjà</p>
					<p><span class="eo">kiel</span> : comme, à (comme dans «ressembler à»)&nbsp;; comment</p>
					<p><span class="eo">kompreni</span> : comprendre</p>
					<p class="sekva"><span class="eo">kompreneble</span> : naturellement, bien entendu</p>
					<p><span class="eo">mia</span> : mon, ma</p>
				</div>
				<div class="col s12 l6">
					<p><span class="eo">ne gravas</span> : ça n''a pas d''importance, peu importe</p>
					<p><span class="eo">ni</span> : nous</p>
					<p class="sekva"><span class="eo">nia</span> : notre</p>
					<p><span class="eo">pardoni</span> : pardonner</p>
					<p><span class="eo">permesi</span> : permettre</p>
					<p><span class="eo">pli</span> : plus (en plus grande quantité)</p>
					<p><span class="eo">povi</span> : pouvoir, être capable de</p>
					<p><span class="eo">preferi</span> : préférer</p>
					<p><span class="eo">pri</span> : à propos de</p>
					<p><span class="eo">saluti</span> : saluer</p>
					<p class="sekva"><span class="eo tab">salutis</span> : <i>voir <b>-is</b> dans la partie <i>klarigoj</i></i></p>
					<p><span class="eo">simpla</span> : simple</p>
					<p><span class="eo">spiono</span> : espion</p>
					<p><span class="eo">sur</span> : sur</p>
					<p><span class="eo">tablo</span> : table</p>
					<p><span class="eo">tago</span> : jour</p>
					<p><span class="eo">tamen</span> : néanmoins, toutefois, quand même, cependant</p>
					<p><span class="eo">tio</span> : cela, ça, cette chose-là, ce</p>
					<p class="sekva"><span class="eo">tio estas simpla</span> /  <span class="eo">estas simple</span>&nbsp;: c''est simple</p>
					<p><span class="eo">tuj</span> : immédiatement, sur le champ</p>
					<p><span class="eo">via</span> : votre</p>
					<p><span class="eo">vizaĝo</span> : face, visage</p>
				</div>
			</div>'
  WHERE l.kurso = 'GR' AND l.numero = 3 AND le.ordo = 3;

-- leçon 3, section 4
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##EKZERCO:54##
			##EKZERCO:55##'
  WHERE l.kurso = 'GR' AND l.numero = 3 AND le.ordo = 4;

-- leçon 3, section 5
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<div class="row">
				<div class="col s12">
					<div class="card-panel blue lighten-5">
						Grâce à ce que vous avez appris dans cette leçon, vous devriez sans problème pouvoir comprendre le texte suivant. L''histoire n''est pas liée à celle de <i>Gerda malaperis</i>, mais elle vous permettra de découvrir d''autres constructions de mots.
					</div>
				</div>
			</div>

					<fieldset class="sono">
				<legend>Aŭskultu tiun rakonton:</legend>
				<p>
					<audio id="audioPlayer" controls="controls" type="audio/mpeg">
						<source type="audio/mp3" src="audio/lasumin03.mp3" />
					</audio>
				</p>
			</fieldset>
			<h3>Amdeklaro</h3>
			<p>Izabela, pardonu min, sed mia deklaro estas plej grava. Permesu, ke mi
			parolu al vi. Permesu, ke mi rigardu al vi, al via bela, serioza
			vizaĝo.</p>
			
			<p>Mi min demandas, ĉu vi povas kompreni min. Eble ne. Eble vi ne povas.
			Okazas io stranga en mi. Io tute nekomprenebla. Vi estas tro bela. Tio
			estas la grava fakto, la sola vere grava fakto en la mondo.</p>
			
			<p>Mi rigardis al via tro bela vizaĝo, kaj io nekomprenebla okazis en
			mi. Io nekomprenebla okazis al mi. Mi ne plu komprenas min. Mi ne plu
			estas mi. Mi rigardis vin, mi simple rigardis vin, kaj mi ne plu estas
			la juna malserioza knabo, kiu mi estis.</p>
			
			<p>Mi estis knabo, kaj nun estas viro. Mi estis malforta, kaj mia forto
			nun estas nekompreneble granda. Mi estas kvazaŭ tute nova. Mi estis
			sola en la mondo. Nun mi povas esti kun vi. Se vi volas, kompreneble.</p>
			
			<p>Mi volas proksimiĝi al vi. Mi volas esti kun vi. Mi volas paroli al
			vi pri la belo de la tago, pri la bono de la naturo, pri la grando de
			la mondo. Mi volas paroli al vi pri viaj belaj manoj, pri via bela
			vizaĝo.</p>
			
			<p>Mi scias, ke vi estas mistera. Virinoj al mi aspektas mistere. Mi
			volas ke vi, mistera virino, rigardu al mi, amu min. Mi volas sidi ĉe
			via tablo, mi volas paroli kun vi dum la tuta tago, dum multaj kaj
			multaj tutaj tagoj. Mi scias, ke mi ne esprimas min bone. Pardonu min,
			mi petas. Mi estas certa, ke vi komprenas min. Sed eble ne. Eble vi ne
			povas kompreni. Mi volas, ke vi komprenu min, sed eble vi ne povas. Mi
			petas vin, montru al mi, ke vi komprenas. Montru al mi, ke vi
			permesas, ke mi parolu plu. Diru al mi, ke vi permesas, ke mi deklaru
			plu, kiel forte mi amas vin. Certe vi permesas, ĉu ne?</p>
			
			<p>Ho Izabela, permesu, ke mia mano proksimiĝu al via mano, ke mia mano
			iomete haltu sur via mano. Ĉu ne? Ĉu vi ne volas? Ĉu vi
			malpermesas? Ĉu mi estas nepardonebla? Ĉu mi agis nepardoneble?
			Mi agis nur nature.</p>
			
			<p>Mi parolas serioze. Ĉu mi estis malprava? Ĉu vi ne pardonas min?
			Tamen, Izabela, mi nur amas. Ĉu vi ne volas, ke mi amu vin? Ĉu vi
			ne povas min ami? Ĉu vi ne volas min ami? Ĉu vi ne volas min?</p>
			
			<p>Permesu tamen, ke mi vin rigardu. Mi parolas plej serioze. Vi ne
			komprenas, ke mi amas vin, ĉu? Ĉu eble vi ne scias, ke vi estas
			bela, tre bela, tre tre bela, fakte?</p>
			
			<p>Se vi ne volas, ke mi amu vin tute, se vi preferas, ke mi ne amu vin,
			eble vi tamen permesas, ke mi amu vin iomete. Nur iomete, Izabela, mi
			petas. Se vi ne permesas, ke mi amu vin multe, mi petas vin, permesu,
			ke mi amu vin iomete.</p>
			
			<p>Amo estas la plej alta vero en la mondo. Kio estas pli bela? Kio
			estas pli granda? Kio estas pli forta? Nenio.</p>
			
			<p>Mi povas plej serioze deklari al vi, ke nenio estas pli bela, nenio
			estas pli alta, nenio estas pli forta. Mi povas ankaŭ diri: nenio
			estas pli natura. Tio estas la plej certa vero en la tuta mondo.</p>
			
			<p>Mi amas vin, Izabela. Mi vin amas forte. Mi amas vin pli kaj pli.</p>
			
			<p>Mi petas vin, pardonu al mi, sed se vi povas, ankaŭ vi amu min. Ĉu
			vi scias, kiel simpla estas amo? Kiel simpla kaj bona? Nenio estas
			pli simpla. Nenio estas pli bona.</p>
			
			<p>Mi amas vin, Izabela. Pardonu, se mi parolas iom strange. Sed mia amo
			estas tro forta, tro grava. Ne gravas, se vi ne komprenas. La sola,
			simpla fakto estas, ke mi amas vin. Kaj ke tio estas bona.</p>'
  WHERE l.kurso = 'GR' AND l.numero = 3 AND le.ordo = 5;

-- leçon 3, section 6
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##RESUMO##'
  WHERE l.kurso = 'GR' AND l.numero = 3 AND le.ordo = 6;

-- leçon 4, section 1
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<fieldset class="sono">
				<legend>Aŭskultu tiun rakonton:</legend>
				<p>
					<audio id="audioPlayer" controls="controls" type="audio/mpeg">
						<source type="audio/mp3" src="fr/gerda/son/gerda/gerda04.mp3" />
					</audio>
				</p>
			</fieldset>
			<h3>Kio estas tiu Gerda?</h3>
			<div class="row dialogo">
				<div class="col s12 m8">
					<p><b>Bob:</b> Diru al mi sincere, pri kio vi parolis.</p>
					<p><b>Tom:</b> Ni parolis pri tiu ulo.</p>
					<p><b>Bob:</b> Kiu ulo?</p>
					<p><b>Tom:</b> Tiu viro ĉe la angulo. Tiu juna viro.</p>
					<p><b>Bob:</b> Pri kiu vi parolas? Ĉu pri tiu blondulo, kiu sidas kun Gerda?</p>
					<p><b>Linda:</b> Gerda! Vi do scias, ke ŝia nomo estas Gerda! Vi do konas ŝin!</p>
					<p><b>Bob:</b> Nu, mi ne vere konas ŝin. Mi scias, kiu ŝi estas. Tio estas
					alia afero.</p>
					<p><b>Linda:</b> Kiu do ŝi estas?</p>
					<p><b>Bob:</b> Sed vi ne respondis al mi. Vi ne respondis al mia demando. Ĉu
					vere pri tiu blonda junulo vi parolis?</p>
					<p><b>Tom:</b> Jes. Pri li.</p>
					<p><b>Bob:</b> Mi ne konas lin. Mi neniam vidis lin antaŭe.</p>
					<p><b>Linda:</b> Sed, diru al mi, kiu estas tiu Gerda?</p>
					<p><b>Bob:</b> Ŝi venis por instrui. Temas pri io mistera, fakte.
					Kriptaĵoscienco.</p>
					<p><b>Linda:</b> Kio? Kiel vi diris? Krip-ta-ĵo-sci-en-co, ĉu?  Kio estas tio?</p>
					<p><b>Bob:</b> Ĉu vere vi ne scias, kio estas kriptaĵoscienco? Oni diras
					ankaŭ "kriptografio".</p>
					<p><b>Linda:</b> Ne. Mi ne scias. Mi tute ne scias. ĉu vi scias, Tom?</p>
					<p><b>Tom:</b> Ĉu tio ne estas la arto kompreni, pri kio temas sekreta
					mesaĝo?</p>
					<p><b>Bob:</b> Prave. Jen ŝia fako. Fakte, ŝia fako estas la malnovaj sekretaj lingvoj.</p>
				</div>
				<div class="col s12 m4">
					<img src="fr/gerda/bildoj/gerda04-1.gif" class="responsive-img">
				</div>
			</div>
			<div class="row dialogo">
				<div class="col s12 m8">
					<p><b>Tom:</b> Mi ne komprenas. Kiu, en universitato, volas lerni pri la
					malnovaj sekretaj lingvoj?</p>
					<p><b>Bob:</b> Ankaŭ mi ne tute komprenas. Estis ideo de Ronga, la profesoro
					pri lingvistiko. Li konsideras, ke sekretaj lingvoj estas aspekto de la
					arto komuniki, kaj ke ili do rilatas al lingvistiko.</p>
					<p><b>Linda:</b> Eble jes. Eble li pravas. Kaj tamen tiu ideo estas iom stranga,
					ĉu vi ne konsentas?</p>
					<p><b>Bob:</b> Jes. Ĝi aspektis strange ankaŭ al mi, kiam oni parolis pri
					ĝi.</p>
					<p><b>Linda:</b> Eble Ronga, la lingvistika profesoro, nur deziris, ke bela
					virino kunlaboru kun li. ĉu ne estas bona ideo kunlabori kun bela
					knabino, kiam tio estas ebla?</p>
					<p><b>Tom:</b> Mi jam diris al vi, ke ŝi ne estas bela. Nur vi estas bela.</p>
					<p><b>Bob:</b> Mi ne konsentas. Estas fakto, ke Linda estas tre bela, ke ŝi
					estas la plej bela knabino en la mondo. Sed ankaŭ Gerda estas bela,
					iom malpli bela, sed tamen bela; ĉu vi konsentas?</p>
					<p><b>Tom:</b>	Tute ne. Por vi, eble. Sed por mi ne. Por mi, nur Linda
					ekzistas kiel bela virino.</p>
					<p><b>Bob:</b>	Ĉu vi volas diri, ke por vi Linda estas la sola bela virino en
					la tuta mondo?</p>
					<p><b>Tom:</b> Jes, por mi, Linda estas la sola bela virino en la tuta mondo.</p>
					<p><b>Bob:</b> Diable! Vi verŝajne amas ŝin.</p>
				</div>
				<div class="col s12 m4">
					<img src="fr/gerda/bildoj/gerda04-2.gif" class="responsive-img">
				</div>
			</div>'
  WHERE l.kurso = 'GR' AND l.numero = 4 AND le.ordo = 1;

-- leçon 4, section 2
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<section class="klarigo">
				<h4>-aĵo : <i>quelque chose de concret ayant la qualité de…</i></h4>
				<p><span class="eo">nova</span> : nouveau → <span class="eo">nov<b>aĵo</b></span> : une nouvelle, nouveauté</p>
				<p><span class="eo">okazi</span> : arriver, se passer, survenir → <span class="eo">okaz<b>aĵo</b></span> : événement</p>
				<p><span class="eo">arto</span> : art  → <span class="eo"> art<b>aĵo</b></span> : objet d''art</p>
				<p>kriptaĵo= kripta afero, io kripta</p>
				<p>kriptaĵoscienco = scienco pri kriptaĵoj</p>
			</section>'
  WHERE l.kurso = 'GR' AND l.numero = 4 AND le.ordo = 2;

-- leçon 4, section 3
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<p class="eo eta">Ces mots seront automatiquement ajoutés à votre vocabulaire à réviser lorsque vous aurez terminé d''étudier cette section.</p>
			
			<div class="vortlisto row">
				<div class="col s12 l6">
					<p><span class="eo">afero</span> : affaire, sujet, chose</p>
					<p><span class="eo">aĵo</span> : chose, objet (synonyme de <span class="eo">afero</span>, mais plus concret) <span class="eta">[<i><b>a</b>-jo</i>]</span></p>
					<p><span class="eo">antaŭ</span> : avant, en avant de, devant (prép.) <span class="eta">[<i><b>anne</b>-taou</i>]</span></p>
					<p class="sekva"><span class="eo">antaŭe</span> : avant, auparavant (adv.) <span class="eta">[<i>anne-<b>ta</b>-ouè</i>]</span></p>
					<p><span class="eo">arto</span> : art</p>
					<p><span class="eo">deziri</span> : désirer</p>
					<p><span class="eo">do</span> : donc</p>
					<p><span class="eo">ekzisti</span> : exister</p>
					<p><span class="eo">fako</span> : spécialité, discipline, département (sens propre&nbsp;: compartiment, case)</p>
					<p><span class="eo">ideo</span> : idée</p>
					<p><span class="eo">instrui</span> : enseigner</p>
					<p><span class="eo">kiam</span> : quand</p>
					<p><span class="eo">komuniki</span> : communiquer</p>
					<p><span class="eo">koni</span> : connaître</p>
					<p><span class="eo">konsideri</span> : considérer</p>
					<p><span class="eo">konsenti</span> : consentir, être en accord</p>
					<p><span class="eo">kripta</span> : secret, volontairement inintelligible</p>
					<p><span class="eo">kriptografio</span> : cryptographie</p>
					<p><span class="eo">lerni</span> : apprendre</p>
				</div>
				<div class="col s12 l6">
					<p><span class="eo">lingvo</span> : langue</p>
					<p><span class="eo">lingvistiko</span> : linguistique</p>
					<p><span class="eo">malpli</span> : moins</p>
					<p><span class="eo">mesaĝo</span> : message</p>
					<p><span class="eo">neniam</span> : jamais</p>
					<p><span class="eo">nomo</span> : nom</p>
					<p><span class="eo">oni</span> : on</p>
					<p><span class="eo">por</span> : pour, dans le but de</p>
					<p><span class="eo">profesoro</span> : professeur</p>
					<p><span class="eo">respondi</span> : répondre</p>
					<p><span class="eo">rilati</span> : avoir un rapport, une relation avec</p>
					<p class="sekva"><span class="eo">rilato</span> : rapport, lien, relation</p>
					<p><span class="eo">scienco</span> : science</p>
					<p><span class="eo">sekreta</span> : secret (adj.), secrète</p>
					<p class="sekva"><span class="eo">sekreto</span> : secret (nom)</p>
					<p><span class="eo">temas pri</span> : (il) s''agit de</p>
					<p class="sekva"><span class="eo">temas pri vi</span> : il s''agit de vous</p>
					<p class="sekva"><span class="eo">la mesaĝo temas pri vi</span> : le message parle de vous</p>
					<p><span class="eo">temo</span> : sujet, thème</p>
					<p><span class="eo">voli diri</span> : vouloir dire, signifier</p>
					<p><span class="eo">ne tute</span> : pas tout à fait</p>
					<p class="sekva"><span class="eo">tute ne</span> : pas du tout</p>
				</div>
			</div>'
  WHERE l.kurso = 'GR' AND l.numero = 4 AND le.ordo = 3;

-- leçon 4, section 4
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##EKZERCO:56##
			##EKZERCO:57##'
  WHERE l.kurso = 'GR' AND l.numero = 4 AND le.ordo = 4;

-- leçon 4, section 5
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<fieldset class="sono">
				<legend>Aŭskultu tiun rakonton:</legend>
				<p>
					<audio id="audioPlayer" controls="controls" type="audio/mpeg">
						<source type="audio/mp3" src="audio/lasumin04.mp3" />
					</audio>
				</p>
			</fieldset>
			<h3>Lingvistiko</h3>
			<p>Mi deziras, ke vi komprenu, ke lingvistiko estas scienco inter multaj
			aliaj sciencoj. Lingvistiko estas mia fako. Oni do prave povas diri,
			ke mi estas fakulo pri lingvistiko. Lingvistiko estas mia specialaĵo,
			se vi volas.</p>
			
			<p>Sed la fakto, ke mi lernis multe pri lingvoj kaj pri lingvistiko, la
			fakto, ke mi estis studento pri tiu fako, ne permesas al vi diri, ke
			mi scias multe pri la aliaj sciencoj. Multaj sciencaj aferoj estas por
			mi misteraj, en fakoj, kiuj ne estas la mia.</p>
			
			<p>Nu, ni ne parolu pri tio. Ni ne parolu pri tiuj aliaj sciencoj. Ni
			parolu nur pri mia fako, nome lingvistiko. Lingvistiko estas la
			scienco pri lingvo. Pri lingvoj, se vi preferas. Lingvistiko, t.e. (=
			tio estas) lingvoscienco... jes, oni povas diri ankaŭ
			«lingvoscienco»..., estas la scienco pri tio, kiel ni esprimas nin
			lingve. Mi demandas, kaj vi respondas. Kiel ? Ĉu mane ? Ne. Ni ne
			demandas kaj respondas mane. Por demandi kaj respondi, ne niaj manoj
			agas, ni tute ne agas, fakte, ni parolas.</p>
			
			<p>Eble oni povas diri, ke paroli jam estas agi. Ke parolo estas ago. Sed
			tamen, se oni povas konsideri, ke paroli estas agi, parolo tamen ne
			estas mana ago, parolo estas lingva ago.</p>
			
			<p>Kiam do ni demandas kaj respondas, ni parolas, t.e. ni agas lingve.
			Kiam ni komunikas parole, ni rilatas lingve inter ni. Nia interrilato
			estas lingva. Niaj komunikoj estas lingvaj. Lingvo ekzistas por
			komuniki, por ke ni rilatu inter ni, por ke ni povu diri al aliulo,
			kio okazas, kio okazis, ĉu ni konsentas kun li, ĉu ni ne konsentas,
			ĉu ni deziras, ke li agu por ni. Lingvo ekzistas por lerni kaj por
			instrui. Se ideo venas al vi, eble vi deziras ĝin komuniki. Nu, por
			tio lingvo ekzistas. Por tio multaj lingvoj ekzistas. Por tio ni
			lernas ilin. Por rilati inter ni, ne nur mane, sed ankaŭ parole.</p>'
  WHERE l.kurso = 'GR' AND l.numero = 4 AND le.ordo = 5;

-- leçon 4, section 6
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##RESUMO##'
  WHERE l.kurso = 'GR' AND l.numero = 4 AND le.ordo = 6;

-- leçon 5, section 1
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<fieldset class="sono">
				<legend>Aŭskultu tiun rakonton:</legend>
				<p>
					<audio id="audioPlayer" controls="controls" type="audio/mpeg">
						<source type="audio/mp3" src="fr/gerda/son/gerda/gerda05.mp3" />
					</audio>
				</p>
			</fieldset>
			<h3>Iu mistera substanco</h3>
			<div class="row dialogo">
				<div class="col s12 m8">
					<p><b>Bob:</b> Nu, vi ankoraŭ ne diris al mi, kio okazis, dum vi spione
					rigardis tiun paron.</p>
					<p><b>Linda:</b> Okazis io vere stranga.</p>
					<p><b>Tom:</b> Vere stranga, fakte. En la mano de tiu junulo estis io.</p>
					<p><b>Bob:</b> Kio?</p>
					<p><b>Linda:</b> Ni ne povis vidi.  Io tre eta. Malgranda afero. Afereto.</p>
					<p><b>Tom:</b> Kaj dum ŝi ne rigardis, lia mano alproksimiĝis al ŝia taso.</p>
					<p><b>Linda:</b> Kaj kiam ŝi ekrigardis lin, lia mano ekhaltis.</p>
					<p><b>Tom:</b> Tiam li montris ion al ŝi. Evidente, li deziris forturni ŝian
					atenton.</p>
					<p><b>Linda:</b> Kaj li sukcesis. Li plene sukcesis. Ŝi rigardis al la pordo.
					Kaj dum ŝi rigardis for, lia mano subite estis super ŝia taso, dum
					unu sekundo, ne pli, kaj tute nature revenis. Malplena.</p>
					<p><b>Bob:</b> Ĉu ĝi estis plena antaŭe?</p>
					<p><b>Tom:</b> Ne plena. Kompreneble, ĝi ne estis plena. Sed estis io en ĝi,
					kaj post kiam ĝi estis dum sekundo super la taso de Gerda, estis plu
					nenio en ĝi.</p>
					<p><b>Linda:</b> Certe estas iu mistera substanco.</p>
					<p><b>Tom:</b> Iu drogo.</p>
					<p><b>Bob:</b> Kiel vi povas scii, ke ne estis tute simple peco da sukero?</p>
					<p><b>Linda:</b> Li ne agus tiel kaŝe, se estus nur sukero.</p>
					<p><b>Tom:</b> Cetere, ĉi tie ne estas peca sukero. Estas nur pulvora sukero,
					en sukerujoj.</p>
				</div>
				<div class="col s12 m4">
					<img src="fr/gerda/bildoj/gerda05-1.gif" class="responsive-img">
				</div>
			</div>
			
			<div class="row dialogo">
				<div class="col s12 m8">
					<p><b>Bob:</b> Eble li havis sukerpecon en la poŝo kaj…</p>
					<p><b>Tom:</b> Ĉu vi ofte promenas kun sukerpecoj en via poŝo?</p>
					<p><b>Bob:</b> Vi pravas. Tiu ideo estas absurda. Tamen…</p>
					<p><b>Linda:</b> Rigardu! Jen ŝi ekstaras, kaj ekiras for.</p>
					<p><b>Bob:</b> Ŝi ŝajnas tute normala. Verŝajne vi imagis ion draman, dum
					temas pri tute simpla, tute natura okazaĵo.</p>
				</div>
				<div class="col s12 m4">
					<img src="fr/gerda/bildoj/gerda05-2.gif" class="responsive-img">
				</div>
			</div>'
  WHERE l.kurso = 'GR' AND l.numero = 5 AND le.ordo = 1;

-- leçon 5, section 2
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<section class="klarigo">
				<h4>-us : <i>forme conditionnelle du verbe</i></h4>
				<p><span class="eo">se mi konus lin, mi irus</span> : si je le connaissais, j''irais</p>
				<p><span class="eo">mi dezirus demandi vin</span> : je désirerais vous demander</p>
		
				<h4>-n : <i>terminaison du complément d''object direct</i></h4>
				<p><span class="eo">mi konas tiu<b>n</b> juna<b>n</b> viro<b>n</b></span> : je connais ce jeune homme</p>
				<p><span class="eo">tiun juna<b>n</b> viro<b>n</b> mi konas</span> : je connais ce jeune homme</p>
				<p><span class="eo">tiun juna<b>n</b> viro<b>n</b> konas mi</span> : je connais ce jeune homme</p>
				<p><span class="eo">tiu juna viro konas mi<b>n</b></span> : ce jeune homme me connaît</p>
				<p><span class="eo">tiu juna viro mi<b>n</b> konas</span> : ce jeune homme me connaît</p>
				<p><span class="eo">mi<b>n</b> konas tiu juna viro</span> : ce jeune homme me connaît</p>

				<p><span class="eo">kiu vidis li<b>n</b>?</span> : qui l''a vu ?</p>
				<p><span class="eo">kiu<b>n</b> vidis li?</span> : qui a-t-il vu ?</p>

				<p><span class="eo">la viro, kiu<b>n</b> rigardis la knabino</span> : l''homme que la fillette regardait</p>
				<p><span class="eo">la viro, kiu rigardis la knabino<b>n</b></span> : l''homme qui regardait la fillette</p>
		
				<h4>ek- : <i>indique le commencement, le début avec soudaineté</i></h4>
				<p><span class="eo">iri</span> : aller → <span class="eo">ekiri</span> : se mettre en marche</p>
				<p><span class="eo">sidi</span> : être assis → <span class="eo">eksidi</span> : s''asseoir</p>
				<p><span class="eo">ek!</span> : en route !, allons-y !</p>
			
				<h4>-et- : <i>indique une diminution, une réduction</i></h4>
				<p><span class="eo">virino</span> : femme → <span class="eo">virineto</span> : petite femme</p>
				<p><span class="eo">bela</span> : beau (belle) → <span class="eo">beleta</span> : mignon(ne)</p>
				<p><span class="eo">mi komprenas</span> : je comprends → <span class="eo">mi komprenetas</span> : je comprends plus ou moins, je pense comprendre</p>
		
				<h4>for- : <i>indique l''éloignement</i></h4>
				<p><span class="eo">iri</span> : aller → <span class="eo">foriri</span> : s''en aller</p>
				<p><span class="eo">esti</span> : être → <span class="eo">foresti</span> : être absent<br><span class="eo">foresto</span> : absence</p>
			
				<h4>-ujo : <i>indique le contenant</i></h4>
				<p><span class="eo">sukero</span> : sucre → <span class="eo">sukerujo</span> : sucrier</p>

				<h4>ĉi : <i>indique la proximité</i></h4>
				<p><span class="eo">tiu ĉi viro estas juna</span> : cet homme-ci est jeune</p>
				<p><span class="eo">tio ĉi estas nekomprenebla</span> : ceci est incompréhensible</p>
			</section>'
  WHERE l.kurso = 'GR' AND l.numero = 5 AND le.ordo = 2;

-- leçon 5, section 3
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<p class="eo eta">Ces mots seront automatiquement ajoutés à votre vocabulaire à réviser lorsque vous aurez terminé d''étudier cette section.</p>
			
			<div class="vortlisto row">
				<div class="col s12 l6">
					<p><span class="eo">afero</span> : affaire, sujet, chose</p>
					<p><span class="eo">absurda</span> : absurde</p>
					<p><span class="eo">ankoraŭ</span> : encore</p>
					<p class="sekva"><span class="eo">ankoraŭ ne</span> : pas encore</p>
					<p><span class="eo">atenti</span> : prêter attention, être attentif</p>
					<p><span class="eo">atento</span> : attention</p>
					<p><span class="eo">cetere</span> : d''ailleurs, du reste</p>
					<p><span class="eo">ĉi</span> : (indique la proximité)</p>
					<p class="sekva tab"><span class="eo">ĉi tie</span> : ici-même</p>
					<p class="sekva tab"><span class="eo">ĉi tio</span> : ceci (cette chose-ci)</p>
					<p class="sekva tab"><span class="eo">ĉi tiu</span> : ceci, celui-ci, celle-ci, ce… -ci</p>
					<p><span class="eo">da</span> : de (après une expression de quantité)</p>
					<p><span class="eo">dramo</span> : drame</p>
					<p><span class="eo">drogo</span> : drogue</p>
					<p><span class="eo">evidenta</span> : évident(e)</p>
					<p><span class="eo">eta</span> : petit(e)</p>
					<p><span class="eo">for</span> : loin, au loin</p>
					<p><span class="eo">havi</span> : avoir</p>
					<p><span class="eo">imagi</span> : imaginer</p>
					<p class="sekva"><span class="eo">imago</span> : imagination</p>
					<p><span class="eo">iu</span> : quelque, quelqu''un</p>
					<p><span class="eo">kaŝe</span> : en cachette</p>
					<p class="sekva"><span class="eo">kaŝi</span> : cacher, dissimuler</p>
					<p><span class="eo">normala</span> : normal(e)
				</div>
				<div class="col s12 l6">
					<p><span class="eo">ofta</span> : fréquent(e)</p>
					<p class="sekva"><span class="eo">ofte</span> : souvent, fréquemment</p>
					<p><span class="eo">paro</span> : couple, paire</p>
					<p><span class="eo">peco</span> : morceau, bout, pincée</p>
					<p><span class="eo">plena</span> : plein(e)</p>
					<p class="sekva"><span class="eo">plene</span> : pleinement, complètement, entièrement</p>
					<p><span class="eo">poŝo</span> : poche</p>
					<p><span class="eo">promeni</span> : se promener</p>
					<p><span class="eo">sekundo</span> : seconde (de temps)</p>
					<p><span class="eo">subita</span> : soudain(e)</p>
					<p class="sekva"><span class="eo">subite</span> : soudainement</p>
					<p><span class="eo">substanco</span> : substance</p>
					<p><span class="eo">sukcesi</span> : réussir, avoir du succès</p>
					<p><span class="eo">sukero</span> : sucre</p>
					<p><span class="eo">super</span> : sur, au-dessus</p>
					<p><span class="eo">ŝajni</span> : sembler, avoir l''air</p>
					<p><span class="eo">tiam</span> : alors, à cet instant</p>
					<p><span class="eo">tie</span> : là, là-bas</p>
					<p><span class="eo">tie ĉi</span> = ĉi tie</p>
					<p><span class="eo">tio ĉi</span> = ĉi tio</p>
					<p><span class="eo">tiu ĉi</span> = ĉi tiu</p>
					<p><span class="eo">tiel</span> : ainsi, de cette façon</p>'
  WHERE l.kurso = 'GR' AND l.numero = 5 AND le.ordo = 3;

-- leçon 5, section 4
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##EKZERCO:58##
			##EKZERCO:59##'
  WHERE l.kurso = 'GR' AND l.numero = 5 AND le.ordo = 4;

-- leçon 5, section 5
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<fieldset class="sono">
				<legend>Aŭskultu tiun rakonton:</legend>
				<p>
					<audio id="audioPlayer" controls="controls" type="audio/mpeg">
						<source type="audio/mp3" src="audio/lasumin05.mp3" />
					</audio>
				</p>
			</fieldset>
			<h3>Ĉu vere vi ne volas labori?</h3>
			<p>Rigardu, la sukerujo estas malplena<a href=''#notoj''>[1]</a>. Se iu dezirus sukeron, li ne
			povus havi ĝin. Vi iras promeni kun Izabela, vi parolas kun ŝi dum
			la tuta tago pri arto kaj scienco, eble, sed eble ankaŭ pri malpli
			belaj aferoj — la diablo scias, pri kio vi parolas, kiam vi promenas
			kun ŝi — kaj dume la sukerujoj staras tute malplenaj sur la tabloj.</p>
			
			<p>Vi tute ne atentas vian laboron. Ŝajnas, ke nur Izabela gravas por
			vi. Mi konsentas, ke ŝi estas tre bela junulino. Sed tamen vi agas
			malprave. Se subite iu dezirus sukeron, ĉe kiu li ekhavus ĝin?</p>
			
			<p>Nur imagu! Se Profesoro Zuzu venus kaj vidus, ke la sukerujoj estas
			malplenaj... Mi ne povas imagi — pli bone: mi preferas ne imagi —
			kio okazus, se li tion vidus. Vi scias, ke havi multe da sukero tre
			gravas por li. Vere mi ne komprenas vin.</p>
			
			<p>Vi ne estas serioza. Vi ne laboras serioze. Kiam vi ne promenas, vi
			sidas en angulo kaj atentas nenion, nur Izabelan. Ofte mi demandas
			min, ĉu vi estas normala. Se via imago malpli laborus, certe pli
			laborus viaj manoj. Vi povus tamen atenti, ĉu la sukerujoj estas
			plenaj.</p>
			
			<p>Se mi ne estus kun vi, se mi ne atentus la simplajn aferojn de la
			labortago<a href=''#notoj''>[2]</a>, nenio okazus normale. Vi permesas al vi iri promeni, vi
			iras kaŝi vin en la naturo kun via belulino<a href=''#notoj''>[3]</a>, kaj vi tute ne
			konsideras, ke vi estas en la universitato por labori mane, ne por
			deklari vian amon dum tuta tago, ne por rigardi vin en la spegulo por
			vidi, ĉu vi ne ŝajnas tro malbela por Izabela, ne por komuniki al
			ŝi la belajn esprimojn de via juna, drama imago, sed por labori.</p>
			
			<p>Atenti la sukerujojn estas via laboro, ne mia. Se mi permesus al mi
			agi kiel vi... Ne. Mi tion ne povas imagi. Mi estas serioza, mi ne
			iras promeni, mi ne iras kaŝe sidi dum la labortago kun bela fortulo<a href=''#notoj''>[4]</a>.</p>
			
			<p>Mi ne plu estas tiel juna, kiel vi, sed tamen... Se vi nur scius, kiel
			ofte viroj min petas... La viroj, kiuj konas min, konsideras ke...
			hehe<a href=''#notoj''>[5]</a>... Nu, viroj estas viroj, ĉu ne ? Sed mi neniam konsentas. Mi
			neniam diras «jes». Mi neniam jesas al ili. Ami la virojn ne estas mia
			specialaĵo. Ne por atenti la virojn la universitato petas min veni,
			nur por labori. Ne havu strangajn ideojn pri mi. Mi atentas vin, juna
			viro, nur rilate al via laboro. Ke la sukerujoj estas malplenaj, tio
			gravas por mi. Sed ke vi parolas bele kaj havas ne malbelan vizaĝon,
			tio al mi tute ne gravas. Vi povus plibeliĝi<a href=''#notoj''>[6]</a> de tago al tago, mi ne
			atentus vian plibeliĝon, mi atentus vian laboron kaj rigardus —
			inter-alie — ĉu la sukerujoj estas plenaj, ĉu ili estas malplenaj.
			Kaj se ili ne estas tute plenaj, permesu, ke mi tion diru al vi.</p>
			
			<p>Se mi revidus vin reiri promeni kun Izabela dum la labortago kaj ne
			atenti vian laboron, mi turnus min<a href=''#notoj''>[7]</a> al Profesoro Zuzu kaj dirus la
			aferon al li. Ne gravas al vi, ĉu vere? Ĉu vere tion vi respondis?
			Diable! Bela respondo! Nu, bone! Se vi preferas agi neserioze, se
			vi preferas ne labori, la dramo okazu. Al mi tute ne gravas. Mi diras
			tion por vi, ne por mi.</p>
			
			<p>Ĉu vi imagas, ke povus gravi por mi, ke vi ne laboras normale, ke vi
			malkonsentas labori? Tute ne gravas. Mi estas bona kun vi kaj
			komunikas al vi miajn ideojn. Sed se vi ne volas konsideri ilin
			serioze, tio estas via afero.</p>
			
			<p>Ĉu laboro pri sukerujoj estas tro malalta por vi? Ĉu vi imagas, ke
			vi estas en la universitato kiel studento? Kiel profesoro, eble? Ne,
			ne, kara mia. Vi estas simpla laborulo. Estas tro multe da ideoj en
			via imago, kaj tro malmulte da laborforto<a href=''#notoj''>[8]</a> en viaj manoj. Ne.
			Laborforton vi havas. Mi volis diri: tro malmulte da laborvolo<a href=''#notoj''>[9]</a>.</p>
			
			<p>Tro ofte mi vidas vin promeni kun la manoj en la poŝoj. Ĉu vi estus
			tiel malforta, ke vi ne plu povus labori nun? Vi eble ne estas tre
			granda, sed vi ne ŝajnas malforta. Ĉu vi jam laboris tro multe?
			Diable! Mi ne povas kompreni vin.</p>
			
			<p>Kiam mi estis juna, mi ne konis knabojn, kiuj laboris tiel malmulte,
			kiel vi. Knaboj, kiuj ne laboris, ĉe ni ne ekzistis. Mi ne diras, ke
			vi estas malbona knabo. Mi konsideras nur, ke vi agas absurde. Mi
			konsentas, ke Izabela kaj vi estas bela paro. Sed… Eble vi
			konsideras, ke mi parolas tro multe pri aferoj, kiuj ne rilatas al mi.
			Pardonu, sed tamen permesu, ke mi komuniku al vi miajn ideojn. Rilatoj
			estas pli bonaj, se tiuj, kiuj laboras kune, estas sinceraj, ĉu ne?
			Kaj vidi junan viron kiel vi, plenan de forto, promeni tuttage<a href=''#notoj''>[10]</a> kun
			knabino, dum li povus multe labori, kaj dum la sukerujoj estas
			malplenaj, nu, tio estas tro.</p>
			
			<a id="notoj"></a>
			<p class="rimarko"><strong>NOTOJ</strong> : 
		
			<ol>
				<li><span class="eo">Mal-plen-a</span> : ne plena ; en ĝi estas nenio.</li>
				<li><span class="eo">Labor-tag-o</span> : tago, dum kiu oni laboras.</li>
				<li><span class="eo">Bel-ul-in-o</span> : bela virino, bela knabino.</li>
				<li><span class="eo">Fort-ul-o</span> : forta viro, forta persono.</li>
				<li><span class="eo">Hehe</span>: pli malpli kiel ho! (Se vi ne komprenas «hehe», tute ne
		    	gravas).</li>
				<li><span class="eo">Pli-bel-iĝ-i</span> : iĝi pli bela.</li>
				<li><span class="eo">Mi turnus min al</span>: mi irus paroli al.</li>
				<li><span class="eo">Labor-fort-o</span> : forto por labori.</li>
				<li><span class="eo">Labor-vol-o</span> : volo labori, deziro labori.</li>
				<li><span class="eo">Tut-tag-e</span> : dum la tuta tago.</li>
			</ol>'
  WHERE l.kurso = 'GR' AND l.numero = 5 AND le.ordo = 5;

-- leçon 5, section 6
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##RESUMO##'
  WHERE l.kurso = 'GR' AND l.numero = 5 AND le.ordo = 6;

-- leçon 6, section 1
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<fieldset class="sono">
				<legend>Aŭskultu tiun rakonton:</legend>
				<p>
					<audio id="audioPlayer" controls="controls" type="audio/mpeg">
						<source type="audio/mp3" src="fr/gerda/son/gerda/gerda06.mp3" />
					</audio>
				</p>
			</fieldset>
			<h3>Gerda falas en la koridoro</h3>
			<div class="row dialogo">
				<div class="col s12 m8">
					<p><b>Tom:</b> Ĉu vi aŭdis? Kio estis tio?</p>
					<p><b>Bob:</b> Jes, mi aŭdis. Mi aŭdis ion.</p>
					<p><b>Linda:</b> Ankaŭ mi aŭdis strangan bruon, kvazaŭ iu falus en la
					koridoro.</p>
					<p><b>Bob:</b> Kvazaŭ <i>ŝi</i> falus.</p>
					<p><b>Tom:</b> Mi havis la saman penson kiel vi. Ankaŭ mi pensis tion.
					Ankaŭ mi pensis: jen Gerda falas en la koridoro.</p>
					<p><b>Linda:</b> Ĉu ni iru vidi?</p>
					<p><b>Tom:</b> Kompreneble. Ni iru tuj.</p>
					<p><b>Bob:</b> Mi iru kun Tom, sed vi restu ĉi tie, Linda. Observu tiun
					junulon, kun kiu Gerda parolis, kaj kiu eble metis drogon en ŝian
					kafon.</p>
					<p><b>Linda:</b> Ĉu vi ambaŭ foriras kaj mi restu tute sola? Mi iom timas.</p>
					<p><b>Bob:</b> Ni ne havas la tempon diskuti. Ni devas iri vidi tuj. Restu
					trankvile ĉi tie. Vi nenion riskas. Venu, Tom, ni ne perdu tempon.</p>
				</div>
				<div class="col s12 m4">
					<img src="fr/gerda/bildoj/gerda06-1.gif" class="responsive-img">
				</div>
			</div>'
  WHERE l.kurso = 'GR' AND l.numero = 6 AND le.ordo = 1;

-- leçon 6, section 2
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<section class="klarigo">
				<h4>Terminaison du complément d''object direct (pour montrer la destination d’une mouvement)</h4>
				<p class="parto">Certaines prépositions de lieu peuvent indiquer le lieu où se passe l’action (le sujet réalise l’action dans ce lieu) ou le lieu vers lequel il y un mouvement (le sujet se déplace vers ce lieu ou déplace quelque chose vers ce lieu).</p>
				<p>C’est le cas des prépositions <span class="eo">en</span>, <span class="eo">sur</span> et <span class="eo">sub</span>. 
				
				<p>Exemples :</p>
				<div class="row">
					<p class="col s12"><span class="eo">la taso falis <b>sur</b> la tabl<b>o</b></span> : la tasse est tombée sur la table</p>
					<p class="col s11 offset-s1"><i>la tasse, qui était déjà sur la table tomba (tout en restant sur la table)</i></p>
					<p class="col s12"><span class="eo">la taso falis <b>sur</b> la tabl<b>on</b></span> : la tasse est tombée sur la table</p>
					<p class="col s11 offset-s1"><i>la tasse n’était pas sur la table avant de tomber</i></p>
					<p class="col s12"><span class="eo">li promenis <b>en</b> la ĝarden<b>o</b></span> : il se promenait dans le jardin</p>
					<p class="col s11 offset-s1"><i>il est resté dans le jardin pendant sa promenade</i></p>
					<p class="col s12"><span class="eo">li promenis <b>en</b> la ĝarden<b>on</b></span> : il alla se promener dans le jardin</p>
					<p class="col s11 offset-s1"><i>il n’était pas dans le jardin, il y est allé en se promenant</i></p>
				</div>
				
				<p class="parto"><b>Note :</b> On n’utilise jamais l’accusatif après les prépositions <span class="eo">al</span>, <span class="eo">ĝis</span>,<span class="eo">el</span> et <span class="eo">de</span> car ces prépositions portent en elles-mêmes le sens du mouvement vers ou depuis un lieu.</p>
					<p>Exemples : </p>
					<p><span class="eo">mi iras <b>al</b> Pariz<b>o</b></span> : je vais à Paris</p>
					<p><span class="eo">mi restas <b>ĝis</b> la fin<b>o</b></span> : je reste jusqu’à la fin</p>
					<p><span class="eo">mi venas <b>el</b> la panvendej<b>o</b></span> : je viens de la boulangerie</p>
					<p><span class="eo">mi spektas tiun filmon <b>de</b> la komenc<b>o</b></span> : je regarde ce film depuis le début</p>

				<h4>Différences entre les différents modes (-as, -u, -us)</h4>
				<p class="parto">Notez bien les différences de sens entre les différents modes (-as, -u, -us)
				dans les phrases interrogatives ci-dessous&nbsp;:</p>

				<div class="row">
					<p class="col s12"><span class="eo">ĉu li rest<b>as</b>?</span>&nbsp;: est-ce qu''il reste&nbsp;?</p>
					<p class="col s12"><span class="eo">ĉu li rest<b>u</b>?</span>&nbsp;: est-ce qu''il doit rester ?&nbsp;; faut-il qu''il reste&nbsp;?</p>
					<p class="col s12"><span class="eo">ĉu li rest<b>us</b>?</span>&nbsp;: est-ce qu''il resterait (si…)&nbsp;?</p>

					<p class="col s12"><span class="eo">kion mi dir<b>as</b></span>&nbsp;: que dis-je&nbsp;?</p>
					<p class="col s12"><span class="eo">kion mi dir<b>u</b></span>&nbsp;: que dois-je dire&nbsp;?&nbsp;; que dire&nbsp;?</p>
					<p class="col s12"><span class="eo">kion mi dir<b>us</b></span>&nbsp;: que dirais-je (si…)&nbsp;?</p>
				</div>
			</section>'
  WHERE l.kurso = 'GR' AND l.numero = 6 AND le.ordo = 2;

-- leçon 6, section 3
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<p class="eo eta">Ces mots seront automatiquement ajoutés à votre vocabulaire à réviser lorsque vous aurez terminé d''étudier cette section.</p>
			
			<div class="vortlisto row">
				<div class="col s12 l6">
					<p><span class="eo">ambaŭ</span> : tous deux, tous les deux, l''un et l''autre</p>
					<p><span class="eo">aŭdi</span> : entendre</p>
					<p><span class="eo">bruo</span> : bruit</p>
					<p><span class="eo">decidi</span> : décider<br>
						<span class="eo">decido</span> : décision</p>
					<p><span class="eo">devi</span> : devoir (verbe)<br>
							<span class="eo">vi devas</span> : tu dois, vous devez</p>
					<p><span class="eo">devo</span> : devoir (nom)</p>
					<p><span class="eo">diskuti</span> : discuter<br>
						<span class="eo">diskuto</span> : discussion</p>
					<p><span class="eo">fali</span> : tomber<br>
						<span class="eo">falo</span> : chute</p>
					<p><span class="eo">kafo</span> : café</p>
				</div>
				<div class="col s12 l6">
					<p><span class="eo">koridoro</span> : couloir, corridor</p>
					<p><span class="eo">meti</span> : mettre, poser, placer</p>
					<p><span class="eo">observi</span> : observer</p>
					<p><span class="eo">pensi</span> : penser</p>
					<p><span class="eo">perdi</span> : perdre</p>
					<p><span class="eo">resti</span> : rester</p>
					<p><span class="eo">riski</span> : risquer</p>
					<p><span class="eo">sama</span> : le même, la même, identique, pareil(le)</p>
					<p><span class="eo">tempo</span> : temps</p>
					<p><span class="eo">timi</span> : craindre, avoir peur</p>
					<p><span class="eo">trankvila</span> : tranquille, calme</p>
				</div>
			</div>'
  WHERE l.kurso = 'GR' AND l.numero = 6 AND le.ordo = 3;

-- leçon 6, section 4
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##EKZERCO:60##
			##EKZERCO:61##'
  WHERE l.kurso = 'GR' AND l.numero = 6 AND le.ordo = 4;

-- leçon 6, section 5
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<fieldset class="sono">
				<legend>Aŭskultu tiun rakonton:</legend>
				<p>
					<audio id="audioPlayer" controls="controls" type="audio/mpeg">
						<source type="audio/mp3" src="audio/lasumin06.mp3" />
					</audio>
				</p>
			</fieldset>
			<h3>La ulo, kiu ne plu pensas</h3>
			<p>Pri kio mi pensas, li demandis. Ĉu vi aŭdis lin? Kiel strangaj tiuj
			uloj estas! Kvazaŭ mi scius, pri kio mi pensas. Ĉu mi vere pensis
			ion? Ĉu oni devas pensi dum la tuta tempo? Tio ne ŝajnas al mi
			prava.</p>
			
			<p>Mi perdis la forton pensi antaŭ multe da tempo. Kiam mi estis juna,
			fakte. Mi foriris por promeni en la naturo. La naturo estis bela. Mia
			povo pensi forfalis dum tiu promeno. Kaj nun, mi estas «la ulo, kiu ne
			pensas».</p>
			
			<p>Verdire (ver-dire), mi ne estas la sola. Ankaŭ aliaj viroj kaj
			virinoj, ankaŭ aliaj knaboj kaj knabinoj preferas ne pensi. Ankaŭ
			multaj universitataj profesoroj neniam pensas. Ili ŝajnas pensi, sed
			ne pensas vere. Ili agas, kvazaŭ ili pensus. Nur agas kvazaŭ ; ĉu
			vi komprenas?</p>
			
			<p>Mi scias. Antaŭ iom da tempo, ankaŭ mi instruis en universitato. Sed
			mi ne volis forperdi mian forton en absurdan agon, kiel pensi. Estas
			tro riske. Imagu! Se mi perdus miajn ideojn! Mi verŝajne havas
			ideojn. Mi ne scias tute certe — mi neniam rigardas ilin — sed plej
			verŝajne ideojn mi havas.</p>
			
			<p>Se jes, miaj ideoj restas trankvilaj en iu anguleto en mi. Mi timas
			perdi ilin kaj do neniam iras ilin vidi. Fakte, mi ne scias, ĉu ili
			ekzistas. Verŝajne ili restas solaj en iu anguleto de mi. Solaj kaj
			trankvilaj. Ili ne timu mian venon. Mi ne riskas veni.</p>
			
			<p>Ĉu vi aŭdis pri Kartezio<a href=''#notoj''>[1]</a>? 
			Li estis granda profesoro antaŭ multe
			da tempo. Li diris: «Mi pensas, do mi estas». Mi diras malsame: «Mi ne
			pensas, tamen mi estas. Mi ne pensas, tamen mi ekzistas». Mi scias, ke
			mi ekzistas. Pri mia ekzisto mi estas tute certa. «Kiel vi povas tion
			scii, se vi ne pensas?» vi eble demandas vin. Nu, karuloj, mi scias,
			ke mi ekzistas: mi aŭdas. Mi aŭdas, do mi estas. Mi aŭdas, do mi
			ekzistas.</p>
			
			<p>«Ĉu esti, ĉu ne esti, jen la demando», diris alia grandulo. Nu, por
			mi, tio ne estas demando. Mi estas, kaj tio estas bela fakto por mi.
			Eble mi estas stranga, sed mi amas mian ekziston. La fakto, ke mi
			ekzistas, estas por mi — eble ne por vi! — bela fakto. Antaŭ la
			demando «ĉu esti, ĉu ne esti», mi tute ne timas. Mi respondas simple
			«esti», kaj restas tute trankvila.</p>
			
			<p>«Mi aŭdas, do mi ekzistas», mi diris. Jes, mi aŭdas. Mi aŭdas tre
			bone. Mi havas tre bonan aŭdpovon. Fakte, mi aŭdis vin diri ion ne
			tre belan pri mi. Haha! Vi pensis, ke mi ne aŭdas, ĉu ne? Sed mi
			aŭdas plej bone. Vi povas diri ion tre malforte, kvazaŭ vi tute
			perdus la forton paroli. Tamen mi aŭdas vin. Mia aŭdo estas tre
			bona. Tro bona, eble. Ofte okazas, ke mi aŭdas aferojn, kiujn mi
			devus ne aŭdi. Jes, mi aŭdas vere tre bone.</p>
			
			<p>Same pri mia vidpovo: mi ankaŭ vidas tre bone. Nur mia penspovo ne
			estas bona kiel miaj aŭdo kaj vido. Mi malamas pensi. Mi ne havas la
			tempon pensi. Mi havas tempon por neseriozaj aferoj, ne havas tempon
			por seriozaj, ĉu vi komprenas?</p>
			
			<p>Se mi metas mian forton en tiun laboron — pensi estas labori, ĉu ne? 
			— mi perdas ĝin. Mi tute ne deziras perdi mian forton. Estas bone
			esti forta<a href=''#notoj''>[2]</a>.</p>
			
			<p>Verdire, ŝajni forta estas ankoraŭ pli bone, en la nuna mondo,
			ŝajnas al mi. Plej ofte gravas la aspekto. Se vi ŝajnas forta, oni
			timas vin, kvazaŭ vi estus forta. Se vi estas forta, sed ŝajnas
			malforta, oni ne konsideras vin serioze. Nur se la aliaj vidas, ke,
			kun via malforta aspekto, vi tamen estas vere forta, nur tiam ili
			konsideras vin serioze.</p>
			
			<p>Ĉu vi aŭdis min? Mi diris, ke mia forto estas grava por mi. Mi do ne
			volas perdi ĝin, kaj mi do malkonsentas pensi. La aliaj pensu pri
			tiel gravaj demandoj kiel «ĉu esti, ĉu ne esti», «ĉu mi pensas, kaj
			do ekzistas? ĉu mi ne pensas, kaj do ne ekzistas?». Ne mi. Mi ne
			deziras diskuti pri tiuj demandoj. Mi povas observi min multatempe, mi
			neniam vidas deziron pripensi pri la demando de mia ekzisto. Sed mi
			bone komprenas, ke vi eble havas aliajn dezirojn. Eble vi deziras
			pridiskuti la demandon, ĉu vi ekzistas. Diskutu ĝin do, sed ne kun
			mi.</p>
			
			<p>Pensu vi, se vi volas. Pensu, fakte, kion vi volas. Ne gravas al mi,
			ĉu vi pensas, ĉu vi ne pensas, ĉu vi pensas prave, ĉu vi pensas
			malprave. Tute ne gravas al mi. Viaj pensoj povas fali unu post la
			alia sur la tablon, vi povas meti ilin en vian tason da kafo, vi povas
			kaŝi ilin en sukerujon, tute ne gravas al mi. Se viaj pensoj faras
			grandan bruon dum-fale, ne gravas al mi. Se ili ne falas sur la
			tablon, kaj bruon tute ne faras, kaj restas trankvile en via poŝo,
			same ne gravas al mi. Nur unu peton mi havas: permesu al mi ne pensi.
			Kaj post tiu deklaro, permesu, ke mi salutu vin. Bonan tagon! Ne
			pensu tro! Kaj la forto restu kun vi!</p>
			
			<a id="notoj"></a>
			<p class="rimarko"><strong>NOTOJ</strong> : 
			<ol>
				<li><span class="eo">Kartezio</span> = Descartes.</li>
				<li>En Esperanto, oni diras: estas —e —i, —i estas —e, estas —e,
				ke … Same kiel oni diras: <i>natura ago</i>, sed <i>nature agi</i>,
				same oni diras <i>la ago estas natura</i>, sed <i>agi estas
				nature</i></li>
			</ol>'
  WHERE l.kurso = 'GR' AND l.numero = 6 AND le.ordo = 5;

-- leçon 6, section 6
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##RESUMO##'
  WHERE l.kurso = 'GR' AND l.numero = 6 AND le.ordo = 6;

-- leçon 7, section 1
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<fieldset class="sono">
				<legend>Aŭskultu tiun rakonton:</legend>
				<p>
					<audio id="audioPlayer" controls="controls" type="audio/mpeg">
						<source type="audio/mp3" src="fr/gerda/son/gerda/gerda07.mp3" />
					</audio>
				</p>
			</fieldset>
			<h3>En la koridoro</h3>
			<div class="row dialogo">
				<div class="col s12 m8">
					<p><i>(En la koridoro)</i></p>
					<p><b>Tom:</b> Jen ŝi estas. Ni pravis. Ŝi apenaŭ havis la tempon alveni
					ĝis la angulo, jam ŝi falis. Videble, ŝi estas nekonscia. Ŝi perdis
					la konscion kaj falis.</p>
					<p><b>Bob:</b> Ĉu ŝi ankoraŭ vivas?</p>
					<p><b>Tom:</b> Jes. Ne timu. Ŝi perdis la konscion, sed ŝi ne perdis la
					vivon. La koro batas. Ĝi batas malforte, sed tamen batas. Ŝi do
					vivas. Eble ŝi apenaŭ vivas, sed ŝi vivas.</p>
					<p><b>Bob:</b> Kion ni faru?</p>
					<p><b>Tom:</b> Ŝajnas, ke ŝi dormas.</p>
				</div>
				<div class="col s12 m4">
					<img src="fr/gerda/bildoj/gerda07-1.gif" class="responsive-img">
				</div>
			</div>
			<div class="row dialogo">
				<div class="col s12">
					<p><b>Tom:</b> Ni devas informi la aŭtoritatojn. Tuj. Mi iros. Ili eble
					decidos voki doktoron, kuraciston, kaj almenaŭ tuj sendos flegistinon.
					Certe estas flegistino en ĉi tiu universitato, ĉu ne?</p>
					<p><b>Bob:</b> Verŝajne, sed mi ne scias certe. Mi estas ĉi tie apenaŭ unu
					semajnon.</p>
					<p><b>Tom:</b> Nu, mi tuj iros informi ilin. Restu ĉi tie kun ŝi. Sed ni
					unue metu ŝin pli bone, ke ŝi kuŝu komforte, kun la piedoj pli altaj
					ol la kapo.</p>
					<p><b>Bob:</b> Ĉu vere? Ĉu vere vi volas, ke ŝi kuŝu kun la piedoj pli
					altaj ol la kapo? Tio ne estas komforta.</p>
					<p><b>Tom:</b> Tamen, kiam iu perdis la konscion, tio estas la ĝusta pozicio,
					se mi bone memoras, kion oni instruis al mi.</p>
				</div>
			</div>'
  WHERE l.kurso = 'GR' AND l.numero = 7 AND le.ordo = 1;

-- leçon 7, section 2
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<section class="klarigo">
				<h4>-os : <i>forme future du verbe</i></h4>
				<p><span class="eo">mi estos</span> : je serai</p>
				<p><span class="eo">ĉu vi venos?</span> : viendras-tu ?</p>
				<p><span class="eo">ili komprenos</span> : ils comprendront</p>

			<h4>-isto : <i>indique la profession, l''occupation habituelle</i></h4>
				<p><span class="eo">instrui</span> : enseigner → <span class="eo">instruisto</span> : enseignant</p>
				<p><span class="eo">labori</span> : travailler → <span class="eo">laboristo</span> : travailleur</p>
	
				<p class="noto"><b>NOTE</b> : Au pluriel, la terminaison <em>-n</em> est ajoutée à la terminaison <em>-j</em> :</p>
				<p><span class="eo">mi konas belajn knabinojn</span> : je connais des belles filles</p>
				<p><span class="eo">grandajn manojn li havas</span> : il a des grandes mains</p>
				<p><span class="eo">la viroj, kiujn ŝi amas</span> : les hommes qu''elle aime</p>
				<p><span class="eo">la viroj, kiuj ŝin amas</span> : les hommes qui l''aiment</p>
			
				<h4><i>Autres utilisations de la terminaison</i> -n</h4>
			
				<p class="parto">En plus de montrer le complément d''objet direct, la terminaison <em>-n</em>
				sert aussi à montrer le mouvement (complément de lieu avec mouvement).
				Toutefois si le mouvement est déjà implicitement indiqué par la
				préposition qui introduit le complément (par exemple grâce à une
				préposition <b>al</b> ou <b>ĝis</b>) alors la terminaison <b>-n</b> ferait double
				emploi et on ne l''utilise pas.</p>
	
				<p><span class="eo">li iris en la ĝardenon</span> : il est entré dans le jardin</p>
				<p><span class="eo">li iris al la ĝardeno</span> : il est allé jusqu''au jardin</p>
		
				<p><span class="eo">li foriras Parizon</span> : il part à Paris</p>
				<p><span class="eo">li foriras al Parizo</span> : il part à Paris</p>

				<p class="parto">La terminaison <b>-n</b> n''est pas utilisée uniquement pour indiquer le
				complément d''objet direct, ou la direction d''un mouvement, mais aussi
				dans l''expression du moment, de la durée, de la mesure, de la valeur,
				quand il n''y a pas de préposition&nbsp;:</p>
	
				<p><span class="eo">mi restis la tutan semajnon</span> : je suis resté toute la semaine</p>
				<p>Dans ce cas la terminaison <b>-n</b> remplace la préposition qui est alors
				sous-entendue&nbsp;; ainsi, si vous utilisez une préposition, vous ne devez
				pas utiliser la terminaison <b>-n</b>, et vous pouvez dans ce cas exprimer la
				même idée avec la phrase&nbsp;:</p>
	
				<p><span class="eo">mi restis dum la tuta semajno</span> : je suis resté durant toute la semaine</p>
				<p><span class="eo">li venis la postan tagon</span> : il est venu le jour d''après</p>
				<p><span class="eo">ĝi estas unu metron alta</span> : cela est haut d''un mètre</p>
			</section>'
  WHERE l.kurso = 'GR' AND l.numero = 7 AND le.ordo = 2;

-- leçon 7, section 3
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<p class="eo eta">Ces mots seront automatiquement ajoutés à votre vocabulaire à réviser lorsque vous aurez terminé d''étudier cette section.</p>
			
			<div class="vortlisto row">
				<div class="col s12 l6">
					<p><span class="eo">ambaŭ</span> : tous deux, tous les deux, l''un et l''autre</p>
					<p><span class="eo">almenaŭ</span> : au moins, du moins</p>
					<p><span class="eo">apenaŭ</span> : à peine</p>
					<p><span class="eo">aŭtoritato</span> : autorité</p>
					<p><span class="eo">bati</span> : battre, frapper</p>
					<p><span class="eo">doktoro</span> : docteur</p>
					<p><span class="eo">dormi</span> : dormir</p>
					<p><span class="eo">fari</span> : faire</p>
					<p><span class="eo">flegi</span> : soigner</p>
					<p class="sekva"><span class="eo">flegisto</span> : infirmier</p>
					<p class="sekva"><span class="eo">flegistino</span> : infirmière</p>
					<p><span class="eo">ĝis</span> : jusqu''à</p>
					<p><span class="eo">ĝusta</span> : correct(e), exact(e)</p>
					<p><span class="eo">informi</span> : informer</p>
					<p class="sekva"><span class="eo">informo</span> : information</p>
					<p><span class="eo">kapo</span> : tête</p>
					<p><span class="eo">komforta</span> : confortable</p>
					<p><span class="eo">konscia</span> : conscient(e)</p>
					<p class="sekva"><span class="eo">konscii</span> : être conscient, avoir conscience</p>
					<p class="sekva"><span class="eo">konscio</span> : conscience</p>
				</div>
				<div class="col s12 l6">
					<p><span class="eo">koro</span> : cœur</p>
					<p><span class="eo">kuraci</span> : soigner, guérir</p>
					<p class="sekva"><span class="eo">kuracisto</span> : médecin</p>
					<p><span class="eo">kuŝi</span> : être couché, être étendu, reposer (gésir)</p>
					<p><span class="eo">memori</span> : se souvenir, se rappeler</p>
					<p><span class="eo">ol</span> : que (dans une comparaison)</p>
					<p><span class="eo">opinii</span> : être d''avis, penser, croire</p>
					<p class="sekva"><span class="eo">opinio</span> : opinion, avis</p>
					<p><span class="eo">piedo</span> : pied</p>
					<p><span class="eo">pozicio</span> : position</p>
					<p><span class="eo">semajno</span> : semaine</p>
					<p><span class="eo">sendi</span> : envoyer, expédier</p>
					<p><span class="eo">unu</span> : un(e)</p>
					<p class="sekva"><span class="eo">unua</span> : premier, première</p>
					<p class="sekva"><span class="eo">unue</span> : premièrement, d''abord</p>
					<p><span class="eo">vivi</span> : vivre</p>
					<p><span class="eo">voki</span> : appeler</p>
				</div>
			</div>'
  WHERE l.kurso = 'GR' AND l.numero = 7 AND le.ordo = 3;

-- leçon 7, section 4
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##EKZERCO:62##
			##EKZERCO:63##
			##EKZERCO:64##'
  WHERE l.kurso = 'GR' AND l.numero = 7 AND le.ordo = 4;

-- leçon 7, section 5
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<fieldset class="sono">
				<legend>Aŭskultu tiun rakonton:</legend>
				<p>
					<audio id="audioPlayer" controls="controls" type="audio/mpeg">
						<source type="audio/mp3" src="audio/lasumin07.mp3" />
					</audio>
				</p>
			</fieldset>		
			<h3>Oni venis el alia mondo</h3>
			
			<p>La unua afero estas informi ilin. Jes, mi devos unue informi la
			aŭtoritatojn. Mi konas min: mi jam nun timas tiun devon, kaj mi timos
			ĝin multe pli, poste, kiam la tago venos kaj mi devos iri al ili, kaj
			diri: «Jen kio okazis, jen kio certe okazos».</p>
			
			<p>Ili opinios, ke mi ne diras la veron. Tute certe ili rigardos min
			malverulo. Ankaŭ kiam mi montros la... la «aĵon»
			<a href=''#notoj''>[1]</a>, ili ne konsentos pri la vero de miaj diroj. Ili rigardos ĝin kaj ili ne
			komprenos. Ili diros, ke temas pri io tre stranga kaj nekomprenebla,
			sed ili ne opinios, ke mi diras la veron. Aŭ ĉu eble tamen...?</p>
			
			<p>Ili eble vokos fakulojn, specialistojn. Mia koro batos! Mi jam povas
			imagi tion: kiel rapide mia koro batos, kiam mi staros antaŭ ili kaj
			devos diri, kio okazis, kiel kaj de kiu (diable!) mi ekhavis tiun
			neimageblan aĵon.</p>
			
			<p>Kion oni povas fari por superi la timon? Kion faras la aliaj, kiam
			granda forta timo envenas en ilian koron? Mi scias pri tiuj
			aŭtoritatoj<a href=''#notoj''>[2]</a>. Ili deziros tutforte, ke mi malpravu. Ili multe
			preferus, ke mi malpravu. Ofte la aŭtoritatoj tute ne deziras aŭdi
			la veron. Ili konsentas kompreni ĝin, nur se la vero estas normala.
			Kiam la faktoj estas strangaj, kiam okazis io ne normala, io pli
			malpli supernatura, tiam ili preferas scii nenion.</p>
			
			<p>Ankaŭ mi preferus dormi trankvile kaj vivi trankvilan vivon. Ne mi
			petis... eee<a href=''#notoj''>[3]</a>... «tiujn» veni. Ne mi deziris aŭdi iliajn timofarajn
			parolojn. Ĉu vi opinias, ke mi amas dramojn ? Tute ne.</p>
			
			<p>Kaj tamen, kion fari? Mi faros mian devon. Mi iros. Kaj mi devos iri
			sola. La afero, kompreneble, estas plej sekreta. Se almenaŭ mi povus
			paroli pri ĝi kun iu! Sed sekreto estas sekreto. Kaj kun… tiuj…
			tiuj uloj... eee... tiuj estaĵoj, la risko estus tro granda.</p>
			
			<p>La simpla fakto pensi, ke mi staros tie, antaŭ la aŭtoritatoj, jam
			faras, ke mi timas. Mi grave antaŭtimas tiun tagon. Ili sin demandos,
			ĉu mia kapo laboras normale. Ili diros, ke miaj ideoj estas absurdaj.
			Mi respondos, ke ne temas pri ideoj, sed pri faktoj, simplaj faktoj,
			pri kiuj mi preferus neniam paroli.</p>
			
			<p>Tiam mi diros: «Estaĵoj alimondaj<a href=''#notoj''>[4]</a> venis al mi. 
			Jen. Ili petis min
			montri al vi jenan aferon, por ke vi certiĝu, ke mi diras la veron
			kaj ke ververe ili petis min veni por diri al vi, kion ili volas, ke
			mi diru». Kaj mi montros la... la aĵon... kaj ili ne scios, kion
			pensi. Sed ili certe devos diri unu al la alia, ke tiu... tiu aĵo...
			ne povus esti niamonda (nenio sama povas ekzisti en nia mondo; oni do
			ĝin faris alimonde; alimonduloj do ekzistas kaj venis al mi).</p>
			
			<p>Ili demandos kaj demandos. Mi respondos, ke mi scias nenion, ke la
			afero same misteras al mi, kiel al ili, kaj ke mi preferus ne havi la
			devon ilin informi. Mi respondos plu, ke estis mia devo veni, tiel ke
			mi venis, malbonvole, eble, sed tamen venis. Se ili ne volas aŭdi
			tion, kion mi devas diri, estas ilia afero. Ili iru al la diablo, se
			ili preferas.</p>
			
			<p>Mi venis por fari mian devon. Tio estas la ĝusta faro, ĉu ne? Kio
			estas pli ĝusta ol tio? Kio estus pli prava ol informi la superulojn?
			Ankaŭ mi preferus sidi kun la kapo en imago kaj la piedoj sur la
			tablo, se vi vidas, kion mi volas diri, sed ne gravas mia prefero, ĉu?
			Gravas multe pli, ke iu informu la aŭtoritatojn pri tiu grava,
			stranga, drama afero. Kion fari, se tiu «iu» nur povas esti mi?
			Sincere, mi preferus, ke iu alia iru.</p>
			
			<p>Unu eble konsentos iomete aŭdi min, sed ne la aliaj, ne la plimulto.
			Nu, estas ilia afero. Ne, mi diras malveron al mi. Ne estas nur ilia
			afero. Estas ankaŭ mia afero. Estas mia devo. Kiam mi ekpensas pri
			tio, kio okazos al la tuta mondo, se oni faros nenion, kiel mi ektimas! 
                        Mi preferus resti trankvile ĉi tie ol devi informi ilin.</p>
			
			<p>La vero ofte ŝajnas pli absurda ol imagaĵoj. Estas vere, ke la
			aŭtoritatoj estos en malkomforta pozicio. Sed ne mi decidis, ke ili
			havos superan, aŭtoritatan pozicion. Ili decidis mem. Ili mem tion
			deziris.</p>
			
			<p>Jes, karaj granduloj, vi deziris iĝi superaj aŭtoritatoj. Vi deziris
			la Povon, la povon super ni simpluloj. Nun, vi havas ĝin. Agu do! Vi
			devos komuniki la informon al la tuta mondo, tiel ke la tuta mondo
			sciu, sed tamen ne tro timu. Ĉu tio estas ebla? Mi timas, ke ne. Mi
			timas, ke oni ne povas fari, ke la mondo ne timu. Sed kion fari? Ĉu
			fari nenion, ĝis la dramo okazos? Ne. Neeble. Vi certe faros vian
			devon. Mi estas kore kun vi.</p>
		
			<a id="notoj"></a>
			<p class="rimarko"><strong>NOTOJ</strong> : 
			<ol>
				<li><span class="eo">Aĵo</span> : afero.</li>
				<li><span class="eo">Mi scias pri tiuj aŭtoritatoj</span> : mi scias, kiel agas tiuj aŭtoritatoj; 
				mi scias, kiel ili reagas al okazaĵoj; mi konas tiujn aŭtoritatojn.</li>
				<li>La viro, kiu parolas, ne scias, kiel esprimi la penson; li do diras “eee”; 
				en aliaj lingvoj oni diras “hm”, “aaa”, “er”, “euh”, “nu”, “oh” …</li>
				<li>Alimondaj (= alia-mond-aj)</li>
			</ol>'
  WHERE l.kurso = 'GR' AND l.numero = 7 AND le.ordo = 5;

-- leçon 7, section 6
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##RESUMO##'
  WHERE l.kurso = 'GR' AND l.numero = 7 AND le.ordo = 6;

-- leçon 8, section 1
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<fieldset class="sono">
				<legend>Aŭskultu tiun rakonton:</legend>
				<p>
					<audio id="audioPlayer" controls="controls" type="audio/mpeg">
						<source type="audio/mp3" src="fr/gerda/son/gerda/gerda08.mp3" />
					</audio>
				</p>
			</fieldset>
			<h3>Linda ne scias, kion fari</h3>
			<div class="row dialogo">
				<div class="col s12 m8">
					<p>En la universitata memserva restoracio, Linda sidas kaj pensas.
					Ŝi pensas ne tre trankvile. Fakte, ŝiaj pensoj iĝas pli kaj pli
					maltrankvilaj.</p>
					<p>Ŝi observas la junan viron, kiu metis ion en la kafon de
					Gerda.</p>
					<p>Ŝi pli kaj pli maltrankviliĝas.</p>
					<p>Tom kaj Bob estas for jam longe. Ili ne revenas. Ĉu do vere
					okazis io al Gerda? Sed kio okazis? Ĉu io grava?</p>
					<p>Linda observas la junulon kaj pensas:</p>
					<p>“Kion mi faros, se li ekstaros kaj foriros?</p>
					<p>“Ĉu mi sekvos lin? Ĉu mi sekvu lin?</p>
					<p>“Kion mi faru, se li iros eksteren? Ĉu mi sekvu lin eksteren?
					Ĉu mi sekvu lin ekstere? Mi ne scias, kion mi faru. Mi ne scias, kion
					mi faros. Mi ne scias, ĉu mi sekvos lin aŭ ne.</p>
					<p>“Kaj se li foriros en aŭto? Ĉu ankaŭ mi sekvu lin aŭte?</p>
					<p>“Jam estas vespero. Baldaŭ venos nokto. Jes. Baldaŭ
					noktiĝos. Ĉu mi sekvu lin nokte?</p>
					<p>”Kaj eĉ se li ne iros eksteren de la universitato, eĉ se li
					restos ĉi tie, ĉu mi sekvu lin?</p>
					<p>
					“Se li eliros tra tiu ĉi pordo, li iros en la koridoron al iu
					ĉambro. Ĉu mi sekvu lin en la koridoron? Ĉu mi sekvu lin en la
					koridoro? Ĉu mi sekvu lin en la ĉambron, en kiun li eniros? Ne.
					Neeble. Mi atendos en la koridoro. Sed se nenio okazos? Se li restos
					longe plu en la ĉambro?</p>
				</div>
				<div class="col s12 m4">
					<img src="fr/gerda/bildoj/gerda08-1.gif" class="responsive-img">
				</div>
			</div>
			<div class="row dialogo">
				<div class="col s12 m8">
					<p>“Kaj se li eliros tra tiu pordo, li iros eksteren, verŝajne al
					la urbo. Ĉu mi sekvu lin al la urbo? Ĉu mi sekvu lin en la urbon?
					Ĉu mi sekvu lin en la urbo?</p>
					<p>“Se li iros piede, eble li vidos min, verŝajne li vidos min.
					Li suspektos, ke mi lin sekvas. Li turnos sin al mi. Mi ektimos. Mi
					paliĝos. Aŭ mia vizaĝo iĝos ruĝa kiel tomato. Jes, mi konas min. Mi
					paliĝos kaj tuj poste ruĝiĝos. Ĉiaokaze, mi maltrankviliĝos. Jam
					nun mi maltrankviliĝas.</p>
					<p>“Se li iros per buso, li eĉ pli certe vidos, ke mi sekvas lin,
					ĉar ni devos kune atendi ĉe la haltejo.”</p>
					<p>Linda ne sukcesas decidi, kion ŝi faru.</p>
					<p>Ŝi timas. Ŝia koro batas rapide. Ŝi volus, ke Tom kaj Bob
					estu kun ŝi, ke ili helpu ŝin, ke ili helpu ŝin decidi. Ŝi estas
					tute sola. Ŝi sentas, ke ŝia koro rapidiĝas, sed ŝi ne scias, kion
					fari.</p>
					<p>Kaj jen, antaŭ ol ŝi povis decidi, antaŭ ol ŝi sukcesis
					retrankviliĝi, jen la juna viro ekstaras. Li rigardas al la koridora
					pordo. Ĉu tien li iros? Li rigardas al la pordo, tra kiu oni eliras al
					la urbo. Ĉu tien? Jes, tien li iras.</p>
					<p>Kaj Linda aŭtomate ekstaras kaj ekpaŝas al la sama pordo. Ne
					ŝi decidis. Ŝajnas, ke ŝia korpo decidis mem. Ŝajnas, ke ŝiaj
					kruroj agas mem. Nu, ĉiaokaze, jen Linda sekvas lin. Al kiu mistera
					destino?</p>
				</div>
				<div class="col s12 m4">
					<img src="fr/gerda/bildoj/gerda08-2.gif" class="responsive-img">
				</div>
			</div>'
  WHERE l.kurso = 'GR' AND l.numero = 8 AND le.ordo = 1;

-- leçon 8, section 2
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<section class="klarigo">
		    	<h4>-ejo : <i>indique l''emplacement, le lieu (souvent collectif)</i></h4>
				<p><span class="eo">dormi</span> : dormir → <span class="eo">dormejo</span> : «dortoir» («chambre» se dit <span class="eo">dormoĉambro</span>)</p>
				<p><span class="eo">lerni</span> : apprendre → <span class="eo">lernejo</span> : école</p>

		    	<h4><i>Accusatif de direction</i></h4>
				<p><span class="eo">li aŭtas en la urbo</span> : il se déplace en voiture dans la ville<br>
					<span class="eo">li aŭtas en la urbon</span> : il se rend, en voiture, en ville</p>
				<p><span class="eo">li aŭtas tie</span> : il se déplace en voiture là-bas<br>
					<span class="eo">li aŭtas tien</span> : il se rend en voiture là-bas</p>
	
		    	<h4>si : <i>Pronom réfléchi</i></h4>
				<p><span class="eo">ŝi mem diris ĝin</span> : elle le dit elle-même<br>
					<span class="eo">ŝi diris ĝin al si</span> : elle se le dit (mot-à-mot : elle le dit à soi)</p>
				<p><span class="eo">li diris ĝin al si</span> : il se le dit<br>
					<span class="eo">li diris ĝin al ŝi</span> : il le lui dit à elle)</p>
	
				<p><span class="eo">ili komprenos tion mem</span> : ils comprendront cela d''eux-mêmes<br>
					<span class="eo">ili komprenos sin</span> : ils se comprendront<br>
					<span class="eo">ili komprenos unu la alian</span> : ils se comprendront l''un l''autre<br>
					<span class="eo">ili komprenos ilin</span> : ils les comprendront</p>
	
				<p><span class="eo">li servas lin</span> : il le sert<br>
					<span class="eo">li servas sin</span> : il se sert</p>
	
				<p><span class="eo">li amis ŝian flegistinon</span> : il aimait son infirmière à elle<br>
					<span class="eo">li amis lian flegistinon</span> : il aimait l''infirmière d''un autre<br>
					<span class="eo">li amis sian flegistinon</span> : il aimait son infirmière (sa propre infirmière)</p>
					
				<h4><i>j''irai en voiture là-bas</i></h4>
	
				<p><span class="eo">mi tien iros aŭte</span> : j''irai là-bas «automobilement»</p>
				<p><span class="eo">mi tien iros per aŭto</span> : j''irai là-bas au moyen d''une voiture</p>
				<p><span class="eo">mi tien iros en aŭto</span> : j''irai là-bas dans une voiture</p>
				<p><span class="eo">mi tien aŭtos</span> : j''«automobilerai» là-bas</p>
			</section>'
  WHERE l.kurso = 'GR' AND l.numero = 8 AND le.ordo = 2;

-- leçon 8, section 3
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<p class="eo eta">Ces mots seront automatiquement ajoutés à votre vocabulaire à réviser lorsque vous aurez terminé d''étudier cette section.</p>
			
			<div class="vortlisto row">
				<div class="col s12 l6">
					<p><span class="eo">atendi</span> : attendre</p>
					<p><span class="eo">aŭ</span> : ou</p>
					<p><span class="eo">aŭto</span> : voiture, automobile <span class="eta">[<i><b>aou</b>-to</i>]</span></p>
					<p><span class="eo">aŭtomato</span> : automate</p>
					<p><span class="eo">baldaŭ</span> : bientôt</p>
					<p><span class="eo">buso</span> : car, bus, autocar</p>
					<p><span class="eo">ĉambro</span> : chambre, pièce dans une maison ou un bâtiment</p>
					<p class="sekva tab"><span class="eo">dormoĉambro</span> : chambre à coucher</p>
					<p class="sekva tab"><span class="eo">manĝoĉambro</span> : salle à manger</p>
					<p><span class="eo">ĉar</span> : parce que</p>
					<p><span class="eo">ĉiaokaze</span> : dans tous les cas, en tout cas</p>
					<p><span class="eo">destino</span> : destin, destinée</p>
					<p><span class="eo">eĉ</span> : même, et en plus</p>
					<p class="sekva tab"><span class="eo">li promenas senhalte, eĉ nokte</span> : il se promène sans cesse, même la nuit</p>
					<p><span class="eo">ekster</span> : hors de, à l''extérieur de (préposition)</p>
					<p class="sekva"><span class="eo">ekstere</span> : dehors, à l''extérieur (adverbe, lieu)</p>
					<p class="sekva"><span class="eo">eksteren</span> : vers le dehors, vers l''extérieur (adverbe, direction)</p>
					<p><span class="eo">el</span> : hors de, de</p>
					<p><span class="eo">helpi</span> : aider</p>
					<p><span class="eo">korpo</span> : corps</p>
					<p><span class="eo">kruro</span> : jambe</p>
				</div>
				<div class="col s12 l6">
					<p><span class="eo">longa</span> : long(ue)</p>
					<p><span class="eo">mem</span> : soi-même</p>
					<p class="sekva"><span class="eo">mi mem, vi mem</span> : moi-même, toi-même</p>
					<p class="sekva">→ <span class="eo">memserva restoracio</span> : cafétéria, restaurant self-service</p>
					<p><span class="eo">nokto</span> : nuit</p>
					<p><span class="eo">paŝi</span> : marcher</p>
					<p class="sekva"><span class="eo">paŝo</span> : pas (nom)</p>
					<p><span class="eo">per</span> : par, à l''aide de (instrument, moyen de transport...)</p>
					<p><span class="eo">ruĝa</span> : rouge</p>
					<p><span class="eo">sekvi</span> : suivre</p>
					<p><span class="eo">senti</span> : ressentir, sentir, éprouver</p>
					<p><span class="eo">servi</span> : servir</p>
					<p><span class="eo">si</span> : se, soi, lui, elle, eux (pronom réfléchi 3<sup>e</sup> personne)</p>
					<p><span class="eo">suspekti</span> : suspecter</p>
					<p><span class="eo">tien</span> : vers là, vers là-bas</p>
					<p class="sekva">iru tien!</span> : allez là-bas !</p>
					<p class="sekva">venu ĉi tien!</span> : venez ici !</p>
					<p><span class="eo">tomato</span> : tomate</p>
					<p><span class="eo">tra</span> : à travers</p>
					<p><span class="eo">urbo</span> : ville</p>
					<p><span class="eo">vespero</span> : soir</p>	
				</div>
			</div>'
  WHERE l.kurso = 'GR' AND l.numero = 8 AND le.ordo = 3;

-- leçon 8, section 4
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##EKZERCO:65##
			##EKZERCO:66##
			##EKZERCO:67##				
			##EKZERCO:68##'
  WHERE l.kurso = 'GR' AND l.numero = 8 AND le.ordo = 4;

-- leçon 8, section 5
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<fieldset class="sono">
				<legend>Aŭskultu tiun rakonton:</legend>
				<p>
					<audio id="audioPlayer" controls="controls" type="audio/mpeg">
						<source type="audio/mp3" src="audio/lasumin08.mp3" />
					</audio>
				</p>
			</fieldset>
			<h3>Iru kiel vi volas</h3>
			<p>Oni nomas tiun restoracion «memserva restoracio», ĉar en ĝi oni
			servas sin mem. Ne estas ulo, kiu venas al via tablo kun via tomato
			aŭ kafo. Vi devas servi vin mem.</p>
			
			<p>Ĉu vi ne volas iri al memserva restoracio? Vi preferas, ke oni servu
			vin. Nu, bone. Kiel vi volas. Ĉiaokaze, mi ne iros kun vi. Vi devos
			iri sola. Mi devas resti ĉi tie. Mi laboros en mia ĉambro.</p>
			
			<p>Kion? Ĉu vi timas perdiĝi? Ne timu. Miaopinie, vi ne riskas
			perdiĝi. Estas tre simple iri tien. Nur sekvu tion, kion Tom diris al
			vi. Tiel vi ne perdiĝos.</p>
			
			<p>Se vi ne volas iri al memserva restoracio, iru do al alia restoracio.
			Ne gravas al mi. Same pri tio, ĉu vi iru buse, aŭte aŭ piede. Busi
			eble estas pli bone ol piediri, almenaŭ rilate al la piedoj, sed la
			buson vi devas atendi. Okazas, ke oni atendas longe. Aŭto estas pli
			rapida ol buso, kaj vi povas foriri per ĝi, kiam vi volas, sed ĉu vi
			havas aŭton?</p>
			
			<p>Vi baldaŭ havos aŭton, ĉu? Nu, bone, sed «baldaŭ» ne estas «nun».
			Se vi deziras iri al la urbo nun, tre gravas, ĉu vi havas aŭton nun.
			Ke vi havos ĝin baldaŭ, tio estas grava iurilate, mi konsentas, sed
			tio ne helpas vin nun, eĉ iomete, por iri al la urbo, ĉu? Por aŭti
			ĝis la urbo, oni devas havi aŭton.</p>
			
			<p>Sed fakte vi povas iri tien promene. Piediri estas bone por la koro.
			Kaj ankaŭ por la kapo, cetere. Kiam venas nokto, la urbo iĝas tiel
			bela! Kiam oni subite ekvidas la tutan urbon de malproksime, kaj
			noktiĝas, oni ekhavas senton pri io mistera, io ekstermonda, eĉ
			supermonda.</p>
			
			<p>Ne estas tro longe ĝis la urbo. Kompreneble, vi ne estos tie tuj, vi
			devos tamen promeni iom da tempo. Sed ne estas tro longe. Ne timu, ke
			viaj kruroj tro laboros kaj perdos sian tutan forton.</p>
			
			<p>Sed mi deziris diskuti kun vi ankaŭ pri io tute alia. Ĉu vi havas
			informojn pri Ana? Ŝi kuŝis en sia ĉambro kaj ne sentis sin tre
			bone. Tom iris al ŝi kun sia kuracisto, sed ŝi ne rigardas tiun
			kuraciston serioza, ŝi preferas sian kuraciston, ŝi vere ne amas
			lian. Li do forsendis sian kuraciston kaj vokis ŝian. Strange, kiam
			ŝi vidis lian kuraciston, ŝi sentis sin malbone, sed tuj kiam ŝi
			vidis sian kuraciston eniri en ŝian ĉambron
			<a href=''#notoj''>[1]</a>, ŝi jam sentis sin pli bone.</p>
			
			<p>Oni sin demandas, pri kio vere temas, ĉu ne? Ho, ĉu vi jam foriras?
			Do, bonan vesperon, kaj ankaŭ bonan nokton! Ĝis revido! Ni
			revidos nin baldaŭ, verŝajne. Do, ĝis!</p>
			
			<a id="notoj"></a>
			<p class="rimarko"><strong>NOTOJ</strong> : 
			<ol>
				<li><span class="eo">Ŝi vidis sian kuraciston</span> : kiu vidis? — ŝi. La kuraciston de
				kiu? — de ŝi (de tiu, kiu vidis).<br>
				<span class="eo">Eniri en ŝian ĉambron</span> : kiu eniris? — ne ŝi, sed la kuracisto. 
				En la ĉambron de kiu? — ne de la kuracisto (ne de tiu, kiu eniris), sed
				de ŝi. Se vi dirus: «Ŝi vidis la kuraciston eniri en sian ĉambron»,
				tio volus diri, ke ŝi vidis la kuraciston eniri en la ĉambron de la kuracisto.</li>
			</ol>'
  WHERE l.kurso = 'GR' AND l.numero = 8 AND le.ordo = 5;

-- leçon 8, section 6
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##RESUMO##'
  WHERE l.kurso = 'GR' AND l.numero = 8 AND le.ordo = 6;

-- leçon 9, section 1
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<fieldset class="sono">
				<legend>Aŭskultu tiun rakonton:</legend>
				<p>
					<audio id="audioPlayer" controls="controls" type="audio/mpeg">
						<source type="audio/mp3" src="fr/gerda/son/gerda/gerda09.mp3" />
					</audio>
				</p>
			</fieldset>			<h3>Gerda malaperis</h3>
			<div class="row dialogo">
				<div class="col s12 m8">
					<p>"Ŝi kuŝas meze de la koridoro! Venu, venu tuj. Certe la afero
					urĝas," diras Tom.</p>
					<p>Li rigardas la flegistinon: ŝi estas dika, grasa virino kun
					bluaj okuloj, ruĝaj haroj, kaj tre ronda vizaĝo. Jam kelkajn minutojn
					li provas diri, kio okazis, sed ŝajnas, ke tiu flegistino ne rapide
					komprenas. La vorto "urĝa" ŝajnas ne ekzisti en ŝia vortaro.</p>
					<p>"Kuŝas, ĉu? Meze de la koridoro, ĉu vere?" ŝi diras.</p>
					<p>Videble, la flegistino apenaŭ povas kredi.</p>
					<p>"Kial, diable, ŝi kuŝus meze de la koridoro?" ŝi demandas.</p>
					<p>"Mi petas, venu urĝe. Mi ne scias, kial ŝi kuŝas tie. Mi nur
					diras, kion mi vidis. Ni trovis ŝin tie. Eble ŝi estis malsana.  Mi
					ne scias. Ŝi svenis, ŝi perdis la konscion. Nun certe oni devas urĝe
					okupiĝi pri ŝi."</p>
					<p>"Stranga afero!"</p>
					<p>"Nu, mi ne estas fakulo. Vi jes. Okupiĝi pri malsanaj homoj
					estas via fako, ĉu ne? Venu tuj. Urĝas!"</p>
					<p>"Nu, nu, nu, nu. Kial, diable, ŝi svenis en la koridoro?
					Stranga ideo! Oni neniam svenas tie."</p>
					<p>"Ĉu vere? Kie do oni svenas en ĉi tiu universitato? Pardonu
					min, sed mi ne konas la tradiciojn. Mi estas novulo. Apenaŭ unu
					semajnon mi estas ĉi tie."</p>
					<p>"Juna viro, en ĉi tiu universitato, oni svenas en la
					klasĉambroj, oni svenas en la restoracio, oni svenas en la
					dorm-ĉambroj, oni svenas en la banĉambroj, eble eĉ oni povus sveni
					en iu administra oficejo. Sed pri sveno koridora mi neniam aŭdis.
					Stranga epoko! Stranga generacio! Oni faras ion ajn niaepoke."</p>
					<p>"Vi parolas, parolas, paroladas, kaj dume tiu kompatinda
					knabino kuŝas en koridoro, kaj neniu zorgas pri ŝi!"</p>
					<p>"Nu, nu, ne maltrankviliĝu, juna viro, ne havu zorgojn. Ni tuj
					rapidos tien, kaj mi tuj prizorgos ŝin."</p>
					<p>Kaj ili kune rapidas al la loko, kie Tom lasis sian amikon kun
					Gerda.</p>
					<p>Sed jen subite Tom haltas.</p>
				</div>
				<div class="col s12 m4">
					<img src="fr/gerda/bildoj/gerda09-1.gif" class="responsive-img">
				</div>
			</div>

			<div class="row dialogo">
				<div class="col s12 m8">
					<p>"Kio okazas? Kial vi ekhaltis?" demandas la flegistino.</p>
					<p>"Ŝi estis ĉi tie, kaj ne plu estas, sed…"</p>
					<p>"Sed estas iu alia, kaj <i>li</i> estas senkonscia, ŝajnas al mi. Ĉu vi konas lin?"</p>
					<p>"Jes, estas mia amiko Bob. Kio okazis al li?"</p>
					<p>La flegistino iras al Bob, kiu falsidas<a href=''#notoj''>[1]</a> ĉe la koridora muro.
					Ŝi tuŝas lian kapon.</p>
					<p>"Batita! Oni batis la kapon al li!"</p>
					<p>"Diable! Bob, Bob! Respondu! Ĉu vi aŭdas min? Diru, mi petas! Kio okazis?”</p>
					<p>Sed Bob ne respondas, kaj Tom iĝas pli kaj pli maltrankvila.</p>
				</div>
				<div class="col s12 m4">
					<img src="fr/gerda/bildoj/gerda09-2.gif" class="responsive-img">
				</div>
			</div>


			<a id="notoj"></a>
			<p class="rimarko"><strong>NOTOJ</strong> : 
			<ol>
				<li><span class="eo">Fal-sid-i</span> : sidi, ĉar oni falis.</li>
			</ol>'
  WHERE l.kurso = 'GR' AND l.numero = 9 AND le.ordo = 1;

-- leçon 9, section 2
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<section class="klarigo">
				<h4>-ita : <i>ce qui a subi l''action (action terminée)</i></h4>
				<p><span class="eo">fari</span> : faire → <span class="eo">farita : </span>(qui a été) fait(e)</p>
				<p><span class="eo">vidi</span> : voir → <span class="eo">vidita</span> : (qui a été) vu(e)</p>
				<p><span class="eo">perdita peco</span> : une pièce perdue</p>
				<p><span class="eo">ni estas informitaj</span> : nous sommes informé(e)s = nous avons été informé(e)s</p>
	
				<h4>-ad-: <i>indique une action particulièrement prolongée ou répétée</i></h4>
				<p><span class="eo">paroli</span> : parler<span class="eo"> → paroladi</span> : faire un discours, parler longtemps</p>
				<p><span class="eo">la penso</span> : la pensée → <span class="eo">la pensado</span> : la réflexion (cogitation)</p>
				<p><span class="eo">memoro</span> : mémoire → <span class="eo">memorado</span> : remémoration, le fait de se rappeler</p>
	
				<p><span class="eo">la respondo estis longa</span> : la réponse était longue</p>
				<p><span class="eo">la respondado estis longa</span> : le temps de réponse était long, la réponse était longue à venir</p>
	
				<p><span class="eo">li rigardis</span> : il regardait</p> 
				<p><span class="eo">li ekrigardis</span> : il regarda</p> 
				<p><span class="eo">li rigardadis</span> : il contemplait</p>
	
				<h4>-ar- : <i>indique le regroupement, la collectivité</i></h4>
	
				<p><span class="eo">vorto</span> : mot → <span class="eo">vortaro</span> : dictionnaire, vocabulaire</p>
				<p><span class="eo">homo</span> : être humain → <span class="eo">homaro</span> : humanité</p>
				<p><span class="eo">la studentaro</span> : le corps étudiant (d''une université)</p>
				<p><span class="eo">la kuracistaro</span> : le corps médical, tous les médecins (des environs)</p>
	
				<h4>-inda : <i>indique la valeur, le mérite</i></h4>
	
				<p><span class="eo">ami</span> : aimer → <span class="eo">aminda</span> : aimable</p>
				<p><span class="eo">vidi</span> : voir → <span class="eo">vidinda</span> : à voir, méritant d''être vu(e)</p>
				<p><span class="eo">havi</span> : avoir → <span class="eo">havinda</span> : à avoir</p>
	
				<h4>-inda / -ebla : <i>(différences de sens)</i></h4>
	
				<p><span class="eo">havinda</span> : à avoir</p>
				<p><span class="eo">havebla</span> : que l''on peut avoir, disponible</p>
				<p><span class="eo">aminda</span> : qui mérite d''être aimé</p>
				<p><span class="eo">amebla</span> : que l''on peut aimer</p>
	
				<h4>sen- : <i>sans, indique la privation</i></h4>
	
				<p><span class="eo">senkora</span> : sans cœur</p>
				<p><span class="eo">senforta</span> : sans force</p>
				<p><span class="eo">senhelpa</span> : sans aide</p>
				<p><span class="eo">senkompate</span> : sans pitié</p>
	
				<h4>ajn</h4>
				<p><span class="eo">kien ajn vi iros, mi sekvos vin</span> : où que tu ailles, je te suivrai</p>
				<p><span class="eo">mi faros kion ajn vi diros</span> : je ferai tout ce que tu me diras</p>
				<p><span class="eo">li diras ion ajn</span> : il dit n''importe quoi</p>
				<p><span class="eo">iru ien ajn</span> : va n''importe où ; va où tu veux</p>
			</section>'
  WHERE l.kurso = 'GR' AND l.numero = 9 AND le.ordo = 2;

-- leçon 9, section 3
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<p class="eo eta">Ces mots seront automatiquement ajoutés à votre vocabulaire à réviser lorsque vous aurez terminé d''étudier cette section.</p>
			
			<div class="vortlisto row">
				<div class="col s12 l6">
					<p><span class="eo">administra</span> : administratif, administrative</p>
					<p class="sekva"><span class="eo">administri</span> : administrer</p>
					<p><span class="eo">ajn</span> : n''importe qu-… </p>
					<p class="sekva"><span class="eo">iu ajn</span> : n''importe qui, n''importe quel</p>
					<p class="sekva"><span class="eo">io ajn</span> : n''importe quoi</p>
					<p class="sekva"><span class="eo">kiu ajn</span> : quiconque, n''importe quel… qui</p>
					<p class="sekva"><span class="eo">kiun ajn</span> : qui que ce soit que, n''importe quel… que</p>
					<p><span class="eo">amiko</span> : ami</p>
					<p><span class="eo">bani</span> : baigner</p>
					<p class="sekva"><span class="eo">bani sin</span> : se baigner</p>
					<p><span class="eo">blua</span> : bleu(e)</p>
					<p><span class="eo">dika</span> : épais(se)</p>
					<p><span class="eo">epoko</span> : époque, âge</p>
					<p><span class="eo">generacio</span> : génération</p>
					<p><span class="eo">grasa</span> : gros(se), gras(se)</p>
					<p><span class="eo">haro</span> : cheveu</p>
					<p><span class="eo">homo</span> : être humain, homme</p>
					<p><span class="eo">kelkaj</span> : quelques, peu de</p>
					<p><span class="eo">kial</span> : pourquoi</p>
					<p><span class="eo">kie</span> : où</p>
					<p class="sekva tab"><span class="eo">kie ajn</span> : n''importe où que, partout où, en quelque endroit que ce soit que</p>
					<p class="sekva tab"><span class="eo">kie ajn vi estas</span> : où que tu sois, partout où tu es</p>
					<p><span class="eo">klaso</span> : classe</p>
					<p><span class="eo">kompati</span> : avoir pitié, compatir</p>
					<p class="sekva"><span class="eo">kompatinda</span> : digne de pitié, à plaindre</p>
					<p><span class="eo">kredi</span> : croire</p>
					<p><span class="eo">lasi</span> : laisser</p>
				</div>
				<div class="col s12 l6">
					<p><span class="eo">loko</span> : endroit, lieu</p>
					<p><span class="eo">mezo</span> : milieu</p>
					<p class="sekva"><span class="eo">meze de</span> : au milieu de</p>
					<p><span class="eo">minuto</span> : minute (temps)</p>
					<p><span class="eo">muro</span> : mur</p>
					<p><span class="eo">neniu</span> : personne; aucun</p>
					<p><span class="eo">ofico</span> : fonction, emploi</p>
					<p><span class="eo">oficejo</span> (= <span class="eo">ofic</span>- + -<span class="eo">ejo</span>) : bureau, office</p>
					<p><span class="eo">okulo</span> : œil</p>
					<p><span class="eo">okupi</span> : occuper</p>
					<p><span class="eo">okupiĝi pri</span> : s''occuper de</p>
					<p class="sekva"><span class="eo">okupi sin pri</span> = <span class="eo">okupiĝi pri</span></p>
					<p><span class="eo">provi</span> : essayer</p>
					<p><span class="eo">rondo</span> : rond (nom), cercle</p>
					<p class="sekva"><span class="eo">ronda</span> : rond(e), circulaire</p>
					<p><span class="eo">sana</span> : en bonne santé</p>
					<p><span class="eo">sen</span> : sans</p>
					<p><span class="eo">sveni</span> : s''évanouir</p>
					<p><span class="eo">tradicio</span> : tradition</p>
					<p><span class="eo">trovi</span> : trouver</p>
					<p><span class="eo">tuŝi</span> : toucher</p>
					<p><span class="eo">urĝa</span> : urgent(e)</p>
					<p><span class="eo">vorto</span> : mot</p>
					<p class="sekva"><span class="eo">vortaro</span> : dictionnaire</p>
					<p><span class="eo">zorgi</span> : se faire du souci&nbsp;; s''occuper de, prendre soin de </p>
					<p class="sekva"><span class="eo">zorgo</span> : souci, inquiétude; attention, sollicitude</p>
				</div>
			</div>'
  WHERE l.kurso = 'GR' AND l.numero = 9 AND le.ordo = 3;

-- leçon 9, section 4
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##EKZERCO:69##
			##EKZERCO:70##'
  WHERE l.kurso = 'GR' AND l.numero = 9 AND le.ordo = 4;

-- leçon 9, section 5
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<fieldset class="sono">
				<legend>Aŭskultu tiun rakonton:</legend>
				<p>
					<audio id="audioPlayer" controls="controls" type="audio/mpeg">
						<source type="audio/mp3" src="audio/lasumin09.mp3" />
					</audio>
				</p>
			</fieldset>
			<h3>Zorgi pri zorgado</h3>
			
			<p>Kion kredi? Ĉu liajn okulojn? Ĉu liajn vortojn? Liaj vortoj
			alvokas kompaton. Li montras sin kompatinda. Li diras ion ajn, por ke
			oni kompatu lin. Sed la okuloj! Oni povas sin demandi, ĉu ili ne
			estas pli kredindaj ol la vortoj, kiujn li eldiras. Kaj ili ne
			esprimas la samon. Tiuj pale bluaj okuloj estas strange senesprimaj.
			Ĉu ne strange, ke ili restas tiel senesprimaj, dum li parolas tiel
			bele, por ke ni kompatu lin?</p>
			
			<p>«Multo estas dirita, sed nenio farita», li diras. «Multe da parolado,
			malmulte da agado», li plu diras. Sed, ĝuste, ĉu, kiam li tion
			diras, li ne parolas pri si? «Rigardu, kiel maldika mi estas», li
			diras, «jen kiel agas la zorgoj al mia kompatinda korpo. Mia sano iom
			post iom forsvenas. Vidu: miaj haroj forfalas. Baldaŭ mi estos tute
			senhara. Aŭ restos nur kelkaj haroj sur mia kapo. De tago al tago mi
			pli kaj pli senhariĝas. Baldaŭ mi estos tute malsana, ĉar tiu
			senhalta zorgado agas tre malbone al mia sano, tiel ke mia bela hararo iom post iom malgrandiĝas, iom post iom forperdiĝas.</p>
			
			<p>«La kuracisto diris al mi: «Se vi volas, ke mi kuracu vin, kaj vi
			resaniĝu, tiu zorgado devas halti. Sen tio, sen via kunlaboro, la
			plej bona kuracisto ne povas sukcesi. Mi trovas vin helpinda. Mi
			deziras kuraci vin, mi deziras nenion alian, ol ke vi plene resaniĝu,
			sed vi devas helpi min. Por min helpi, vi devas labori super<a href=''#notoj''>[1]</a> viaj
			zorgoj. Zorgado nur povas malhelpi mian laboron. Via malsano rilatas
			nur al via troa zorgado. Ankaŭ via maldikiĝo. Ne temas pri alia grava
			malsano. Ne temas pri tiu serioza malsano, pri kiu vi pensadas la
			tutan tempon. Ne. Kelkaj malsanoj estas tre seriozaj. Ne via. Temas
			nur pri tio, ke vi tro zorgas. Kiam via troa okupiĝado pri tiuj
			zorgoj haltos, via sano revenos. Sed mi estas senpova rilate al via
			trozorgado. Nur vi povas helpi vin kaj kuraci vin tiurilate»».</p>
			
			<p>«Jen kion la kuracisto diris al mi. «Vivu senzorge», li diris, «kaj vi
			resaniĝos». Kaj, kredu min, li estas tre bona kuracisto. Li scias,
			pri kio li parolas. Do, kiam li petas min ne plu zorgi, mi devas ne
			plu zorgi, se mi volas retrovi mian sanon, se mi volas, ke la falado
			de miaj haroj finfine haltu. Sed vivi senzorge ne estas simple. Mi
			provis ne plu zorgi, mi provis kaj provadis. Sed kion ajn mi faras, mi
			malsukcesas. Kiel ajn mi provas ne zorgi, zorgoj revenadas. Kaj mi eĉ
			pli kaj pli zorgas pri mia malsukcesa provado ne zorgi: mi ne sukcesas
			ne plu zorgi, kaj tiu penso, ke mi tro zorgas, ĉar mi ne povas ne
			zorgi, tro okupas min. La penso fariĝi senharulo estas timinda, ĉu
			ne? Kaj tion mi pensas la tutan tagon. Kion fari, diable, kion fari?»</p>
			
			<p>Jen kiel li parolas. Li tute certe deziras, ke ni lin kompatu. Li
			certe pensas: «Se ili kompatos min, ili faros la aferojn por mi, kaj
			mi povos trankvile dormi, dum ili faras mian laboron». Tion diras liaj
			okuloj.</p>
			
			<p>Estas vere, ke, antaŭe, lia korpo estis tiel grasa, ke ĝi estis tute
			ronda, kaj nun li sengrasiĝis. Ankaŭ estas fakto, ke lia hararo,
			tiel dika antaŭe, tre maldikiĝis. Sed dum liaj vortoj parolas pri
			malsano, zorgado, senhariĝo, malgrasiĝo, liaj pale bluaj okuloj ne
			elvokas<a href=''#notoj''>[2]</a> kompatindan vivon. Ili esprimas la ideon «Mi estas pli
			forta ol vi. Mia korpo eble estas maldika kaj malforta, pli malforta
			ol la viaj, sed mi pli fortas pense. Mi havis la bonan ideon agi tiel,
			ke vi kompatu min. Kaj nun vi kredas min malsana, kaj vi faros la
			tutan laboron por mi. Tiel mi povos senzorge dormi, kaj regrasiĝi
			trankvile».</p>
		
			<a id="notoj"></a>
			<p class="rimarko"><strong>NOTOJ</strong> : 
			<ol>
				<li><span class="eo">Labori super io</span> : labori pri io.</li>
				<li><span class="eo">Elvoki</span> : fari, ke pensoj venas pri...</li>
			</ol>'
  WHERE l.kurso = 'GR' AND l.numero = 9 AND le.ordo = 5;

-- leçon 9, section 6
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##RESUMO##'
  WHERE l.kurso = 'GR' AND l.numero = 9 AND le.ordo = 6;

-- leçon 10, section 1
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<fieldset class="sono">
				<legend>Aŭskultu tiun rakonton:</legend>
				<p>
					<audio id="audioPlayer" controls="controls" type="audio/mpeg">
						<source type="audio/mp3" src="fr/gerda/son/gerda/gerda10.mp3" />
					</audio>
				</p>
			</fieldset>			<h3>Nefidinda flegistino</h3>
			<div class="row dialogo">
				<div class="col s12 m8">
					<p>Fakte, Tom ne estas ema fidi la flegistinon. Kial? Ĉu vi
					scias, kara amiko, vi kiu sekvas ĉi tiun aventuron ekde la unua vorto?
					ĉu vi scias, kial Tom ne emas fidi la flegistinon?</p>
					<p>Ne. Certe vi ne scias. Ankaŭ mi ne scias. Sed fakto restas
					fakto, eĉ se ni ne komprenas ĝin. Kaj la fakto estas, ke Tom ne emas
					ŝin kredi.</p>
					<p>Tom estas agema knabo, eĉ iom aventurema, kaj eble tiu tro
					parolema flegistino ne ŝajnas al li kredinda. Eble li opinias, ke tiu
					flegistino tro emas paroli, kaj do ne estas fidinda. Aŭ ĉu temas pri
					io alia?</p>
					<p>Tom ege ŝatas sian amikon Bob. Li ŝategas lin. Li lin amas,
					fakte. Bob kaj li amikiĝis antaŭ longe en la urbego, kie ili vivis
					tiutempe – ili dumtempe eĉ iradis al la sama lernejo – sed poste Tom
					devis iri al malsama urbo, kaj ili ne plu vidis sin reciproke.  Kiam,
					antaŭ kelkaj tagoj, ili retrovis unu la alian en la sama universitato,
					ambaŭ ege dankis la destinon.</p>
					<p>Ili treege ŝatas la tiean bonegan vivon. Ili ŝategas ĝin.
					Ambaŭ estas agemaj, laboremaj knaboj, kun speciala ŝato al la iom
					timemaj studentinoj. Eble ĉar timema junulino estas malpli timinda ol
					ino neniam ema timi, ol sen-tim-ulino. Ĉu vi komprenas?</p>
				</div>
				<div class="col s12 m4">
					<img src="fr/gerda/bildoj/gerda10-1.gif" class="responsive-img">
				</div>
			</div>

			<div class="row dialogo">
				<div class="col s12 m8">
					<p>Sed nun Tom malŝatas la aventuron. Li sin demandas, kial li
					sentas tiun flegistinon nefidinda. Li preferus silenteman,
					grav-aspektan sinjorinon. Tiu ĉi ne aspektas tre zorgeme, kaj li ne
					trovas ŝin atentema pri liaj demandoj. Verdire, li opinias ŝin ema
					fuŝi sian laboron. Li timas, ke ŝi ofte agas fuŝe. Fuŝemaj homoj
					ekzistas en la mondo. Kial tiu tro parolema flegistino ne estus unu el
					ili? Ĉu li mispaŝis, kiam li turnis sin al ŝi? Sed al kiu alia li
					povus sin turni? Ŝi estis la sola flegistino, kiu troviĝis<a href=''#notoj''>[1]</a> en la
					universitato. Aŭ ĉu li mispensas<a href=''#notoj''>[2]</a>?</p>
					<p>Kaj nun li sentas sin ema zorgi pri Linda. Ĉu tiu belega
					knabino ne troviĝas en danĝero? Li amas ŝin, li eĉ amegas ŝin, pli
					kaj pli, kaj la ideo, ke danĝeraj homoj povus fari ion al ŝi, apenaŭ
					estas travivebla. La vivo ne estas facila, kaj ŝajnas nun, ke la tuta
					afero iĝas pli kaj pli malŝatinda.</p>
					<div class="col s12 m4">
						<img src="fr/gerda/bildoj/gerda10-2.gif" class="responsive-img">
					</div>
				</div>
			</div>
		

			<a id="notoj"></a>
			<p class="rimarko"><strong>NOTOJ</strong> : 
			<ol>
				<li><span class="eo">Trov-iĝ-i</span> : esti (en iu loko).</li>
				<li><span class="eo">Mis-pens-i</span> : pensi malprave.</li>
			</ol>'
  WHERE l.kurso = 'GR' AND l.numero = 10 AND le.ordo = 1;

-- leçon 10, section 2
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<section class="klarigo">
		
				<h4>-eg- : <i>augmente le caract&egrave;re, la qualité</i></h4>
		
				<p><span class="eo">bona</span> : bon(ne) → <span class="eo">bonega</span> : excellent(e)</p>
				<p><span class="eo">bela</span> : beau (belle) → <span class="eo">belega</span> : splendide</p>
				<p><span class="eo">urbo</span> : ville → <span class="eo">urbego</span> : grande ville</p>
				<p><span class="eo">labori</span> : travailler →
				<span class="eo">laboregi</span> : travailler énormément</p>
		
				<h4>-em- : <i>indique le penchant, la tendance, la disposition</i></h4>
		
				<p><span class="eo">paroli</span> : parler → <span class="eo">parolema</span> : bavard(e)</p>
				<p><span class="eo">agi</span> : agir → <span class="eo">agema</span> : actif, active ; entreprenant(e)</p>
				<p><span class="eo">timi</span> : craindre → <span class="eo">timema</span> : craintif,(-ive) ; timide</p>
		
		
				<h4>mis- : <i>indique l''erreur, la maladresse</i></h4>
		
				<p><span class="eo">kompreni</span> : comprendre → <span class="eo">miskompreni</span> : mal comprendre</p>
				<p><span class="eo">paŝo</span> : (un) pas → <span class="eo">mispaŝo</span> : un faux pas</p>
			</section>'
  WHERE l.kurso = 'GR' AND l.numero = 10 AND le.ordo = 2;

-- leçon 10, section 3
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<p class="eo eta">Ces mots seront automatiquement ajoutés à votre vocabulaire à réviser lorsque vous aurez terminé d''étudier cette section.</p>
			
			<div class="vortlisto row">
				<div class="col s12 l6">
					<p><span class="eo">aventuro</span> : aventure</p>
					<p><span class="eo">danĝero</span> : danger</p>
					<p><span class="eo">danki</span> : remercier</p>
					<p><span class="eo">ege</span> : extrêmement</p>
					<p><span class="eo">emi</span> : incliner à</p>
					<p class="sekva"><span class="eo">ema</span> : ayant tendance à</p>
					<p><span class="eo">facila</span> : facile</p>
				</div>
				<div class="col s12 l6">
					<p><span class="eo">fidi</span> : faire confiance</p>
					<p><span class="eo">fuŝi</span> : faire rater, gâcher, bousiller</p>
					<p><span class="eo">reciproke</span> : réciproquement, mutuellement</p>
					<p><span class="eo">silenti</span> : être silencieux</p>
					<p class="sekva"><span class="eo">silento</span> : silence</p>
					<p><span class="eo">sinjoro</span> : monsieur</p>
					<p><span class="eo">ŝati</span> : apprécier, aimer</p>
				</div>
			</div>'
  WHERE l.kurso = 'GR' AND l.numero = 10 AND le.ordo = 3;

-- leçon 10, section 4
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##EKZERCO:71##		
			##EKZERCO:72##'
  WHERE l.kurso = 'GR' AND l.numero = 10 AND le.ordo = 4;

-- leçon 10, section 5
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<fieldset class="sono">
				<legend>Aŭskultu tiun rakonton:</legend>
				<p>
					<audio id="audioPlayer" controls="controls" type="audio/mpeg">
						<source type="audio/mp3" src="audio/lasumin10.mp3" />
					</audio>
				</p>
			</fieldset>
			<h3>La fortegulo</h3>
			
			<p>Johano estas viro fortega. Tiu altega, dikega fortegulo ŝatas
			laboregi. Li havas tre grandan forton, forton grandegan, oni povas
			diri, kaj se li ne faras ion per sia fortego, li ne ŝatas sin mem. Li
			do laboregas en la urbego. Tagon post tago li iras al sia laborloko,
			kiun li tre ŝatas, kaj tie seriozege laboregas.</p>
			<p>
			Li ŝatus ŝati la vivon. Multrilate oni povas diri, ke li jam
			ŝategas ĝin, sed...</p>
			<p>La vivo estus belega por li, se li ne havus strangan malsanon. Li
			malsanas en la kapo, kaj tio estas malbona. Vi vin demandas, pri kio
			mi parolas, ĉu ne? Nu, jen lia malsano: li timas, li ege timas, li
			timegas tion, kio estas eta.</p>
			<p>
			Se li promenas en la urbo kaj jen, plej normale, aliras lin vireto por
			ion demandi, la koro de Johano emas bati rapidege, li paliĝas, li
			sentas sin malbone, kaj grandega timo ekokupas lin. Li normale ŝatas
			knabinojn, sed se knabino aspektas tro malgranda, tro malforta, nia
			grandegulo emas timi ŝin. Ĉu vi imagas? Li neniam iras al urbeto,
			ĉar li sentas sin bone nur en urbegoj kun multegaj homoj, kiuj rapide
			iras tien kaj tien ĉi. Kaj se vi servas lin per kafo en malgranda
			taseto, lia kapo emas turniĝi, li sentas sin malkomforta ĉe la koro,
			li iĝas palega, kaj devas superi nekredeble fortan emon forrapidi el
			la loko, kie li troviĝas.</p>
			<p>
			Strange, ĉu ne? Kaj ĉu vi scias, kial? Mi parolis pri tio kun
			amiko lia. Tiu diris al mi, ke Johano fakte estas tre sentema pri sia
			troa forto. Li ne havas fidemon al si mem. Li opinias sin nefidinda.
			Kiam li estis knabeto kaj iris al la lernejo, li jam estis nenormale
			forta. Li batis la etulojn por senti sin supera. Li ŝatis povi
			deklari: «Mi estas ege forta. Mi estas la plej forta. Mi estas la plej
			forta el la lernejo. Mi estas la plej forta el la tuta urbego». Kaj
			por montri al si kaj al la aliaj, kiel forta li estas, li ekbatis
			ilin, kaj ilin batadis kaj bategis, ĝis ili falis kaj petegis:
			«Kompaton!» Tiam li sentis sin grava, granda, multopova.</p>
			<p>
			Iutage, li batis knabeton tiel senkompate, ke estis neeble tiun
			resanigi: la etulo restos nenormala dum la tuta vivo. Ekde tiu tago
			Johano timegas sian forton. Ĝi povas mis-agi. Ĝi povas agi fuŝe.
			Viretoj iĝis por li timindaj. Same kiel la plej etaj aferetoj. Ĉu la
			vivo ne estas stranga?</p>'
  WHERE l.kurso = 'GR' AND l.numero = 10 AND le.ordo = 5;

-- leçon 10, section 6
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##RESUMO##'
  WHERE l.kurso = 'GR' AND l.numero = 10 AND le.ordo = 6;

-- leçon 11, section 1
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<fieldset class="sono">
				<legend>Aŭskultu tiun rakonton:</legend>
				<p>
					<audio id="audioPlayer" controls="controls" type="audio/mpeg">
						<source type="audio/mp3" src="fr/gerda/son/gerda/gerda11.mp3" />
					</audio>
				</p>
			</fieldset>
			<h3>Linda havas ideon</h3>
			<div class="row dialogo">
				<div class="col s12 m8">
					<p>Linda ekhavis ideon. Ŝi aliris la junan blondan viron, dum li
					proksimiĝis al sia aŭto, kaj alparolis lin:</p>
					<p>"Sinjoro, ĉu vi bonvolus helpi al mi?"</p>
					<p>Li turnis sin al ŝi kun vizaĝo ŝajne ne tre kontenta, kaj
					ŝin rigardis dum longa senvorta minuto.</p>
					<p>"Kiel mi povus vin helpi?" li fine demandis, kaj li tuj
					aldonis: "Bonvolu pardoni min, se mi respondas nee, sed al mi tempo
					vere mankas. Mi devas urĝe veturi al la urbo."</p>
					<p>"Ĝuste tiel vi povas min helpi. Mia aŭto paneas. Io estas
					fuŝita en ĝi. Mi ne sukcesas ĝin irigi…"</p>
					<p>"Pardonu min, sed mi ne sukcesus rebonigi la aferon, eĉ kun
					plej granda bonvolo. Pri mekaniko mi scias nenion. Mi ĉiam miras vidi,
					ke veturiloj entute funkcias. Kiam mi vidas motoron, ĉiam mirigas min,
					ke tia ŝajne senorda aranĝo de pecoj kaj objektoj igas aŭton iri.
					Mi…"</p>
					<p>"Mi ne petas vin ripari mian veturilon, vi min miskomprenis.
					Mi demandas nur, ĉu vi bonvolus akcepti min en via aŭto ĝis la
					urbo."</p>
					<p>La ideo de Linda estis jena: sekvi lin estus danĝere, sed se
					li veturos aŭte, mi petos lin akcepti, ke mi veturu kun li, kaj dum la
					veturado mi igos lin paroli. Mi diskrete faros ŝajne banalajn
					demandojn, kaj paroligos lin. Tiel mi scios kiel eble plej multe pri
					li.</p>
					<p>"Nu, bone," li fine konsentas. "Konsentite, venu." Kaj li
					malfermas la pordon de la aŭto por ŝi.</p>
				</div>
				<div class="col s12 m4">
					<img src="fr/gerda/bildoj/gerda11-1.gif" class="responsive-img">
				</div>
			</div>

			<div class="row dialogo">
				<div class="col s12 m8">
					<p>"Dankon, vi vere estas tre afabla. Tio ege helpas min. Mi plej
					sincere dankas."</p>
					<p>"Ne dankinde," li respondas, iom seke. Kaj li ekirigas la
					motoron.</p>
					<p>"Mi ne ŝatas la ideon, ke mi devos venigi ripariston,
					mekanikiston," ŝi diras. "Mi tute ne ŝatas aŭtojn, fakte. Mi havas
					veturilon, ĉar estas tre oportune, sed mi ne ŝatas aŭtojn."</p>
					<p>La alta junulo nur silentas.</p>
					<p>"Ne estas facile igi lin diri ion," pensas Linda, iom zorge,
					sin demandante, ĉu estis saĝe enmiksi sin en tiun aventuron. ŝi
					forte deziras lin paroligi, sed samtempe timas malkontentigi lin.
					Neniam estas facile trovi plene kontentigan manieron agi.</p>
					<p>"Ĉu ĝenas vin, se mi parolas?" ŝi demandas, "vi eble estas
					silentema."</p>
					<p>"Mi havas zorgojn," li respondas.</p>
					<p>"Mi ne volas ĝeni vin. Estas jam tiel bonkore, ke vi min
					veturigas. Mi vere sentas grandegan dankemon al vi."</p>
					<p>"Ne dankinde," li ripetas, kaj silentas plu, pripensema.</p>
				</div>
				<div class="col s12 m4">
					<img src="fr/gerda/bildoj/gerda11-2.gif" class="responsive-img">
				</div>
			</div>'
  WHERE l.kurso = 'GR' AND l.numero = 11 AND le.ordo = 1;

-- leçon 11, section 2
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<section class="klarigo">
	
				<h4>-ante : <i>en faisant l''action (au moment où elle a lieu)</i></h4>
		
				<p><span class="eo">laborante, li silentas</span> : il reste silencieux en travaillant</p>
				<p><span class="eo">ni diskutis promenante</span> : nous discutions en nous promenant</p>
				<p><span class="eo">vi lernis la lingvon parolante ĝin</span> : vous avez appris la langue en la parlant</p>
				
				<div class="card-panel blue lighten-5">
					<p><span class="eo">-ante</span> correspond au gérondif français («en + participe présent»). 
						Il indique une action qui se déroule en même temps que celle du verbe principal, 
						que celui-ci soit au présent ou pas.</p>
					<p>Ce qui fait l''action en <span class="eo">-ante</span> est le sujet du verbe principal&nbsp;: 
						dans <span class="eo">Ni diskutis promenante</span>, ce sont «nous» qui nous promenons.</p>
					<p>Le participe garde la construction de son verbe&nbsp;: 
						<span class="eo">aroli la lingvo<strong>n</strong></span> → <span class="eo">parolante ĝi<strong>n</strong></span>.
				</div>
		
				<h4>-ig- : <i>rendre, faire devenir</i></h4>
		
				<p><span class="eo">granda</span> : grand(e) → <span class="eo">grandigi</span> : agrandir</p>
				<p><span class="eo">(pli) forta</span> : (plus) fort(e) → <span class="eo">(pli)fortigi</span> : renforcer</p>
				<p><span class="eo">facila</span> : facile → <span class="eo">faciligi</span> : faciliter</p>
				<p><span class="eo">scii</span> : savoir → <span class="eo">sciigi</span> : informer ou faire savoir</p>
				<p><span class="eo">stari</span> : se tenir debout → <span class="eo">starigi</span> : lever; mettre debout</p>
				<p><span class="eo">kontenta</span> : content(e) → <span class="eo">kontentiga</span> : satisfaisant(e)</p>
				<p><span class="eo">maltrankvila</span> : troublé(e) ; angoissé(e) → 
				<span class="eo">maltrankviliga</span> : troublant(e) ; angoissant(e)</p>
		
				<h4>-ilo : <i>instrument, outil</i></h4>
		
				<p><span class="eo">labori</span> : travailler → <span class="eo">laborilo</span> : outil de travail</p>
				<p><span class="eo">dormi</span> : dormir → <span class="eo">dormigi</span> : faire dormir → <span class="eo">dormigilo</span> : somnifère</p>
				<p><span class="eo">veturi</span> : aller (autrement qu''à pied) → <span class="eo">veturilo</span> : véhicule</p>
		
				<p><span class="eo">mia aŭto paneas, ĝi ekpaneis hieraŭ</span> : mon auto est en panne, elle est tombée en panne hier</p>
			</section>'
  WHERE l.kurso = 'GR' AND l.numero = 11 AND le.ordo = 2;

-- leçon 11, section 3
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<p class="eo eta">Ces mots seront automatiquement ajoutés à votre vocabulaire à réviser lorsque vous aurez terminé d''étudier cette section.</p>
			
			<div class="vortlisto row">
				<div class="col s12 l6">
					<p><span class="eo">afabla</span> : affable, gentil(le)</p>
					<p><span class="eo">akcepti</span> : accepter</p>
					<p><span class="eo">aldoni</span> : ajouter</p>
					<p><span class="eo">aranĝi</span> : arranger, combiner, agencer</p>
					<p class="sekva"><span class="eo">aranĝo</span> : combinaison, arrangement</p>
					<p><span class="eo">banala</span> : banal(e)</p>
					<p><span class="eo">bonvoli</span> : bien vouloir</p>
					<p><span class="eo">ĉiam</span> : toujours</p>
					<p><span class="eo">dankon</span> : merci</p>
					<p><span class="eo">ne dankinde</span> : pas de quoi</p>
					<p><span class="eo">entute</span> : en tout, au total</p>
					<p class="sekva"><span class="eo">ni rigardu, ĉu la aŭto entute funkcias</span> : 
						regardons si au total la voiture fonctionne</p>
					<p><span class="eo">fermi</span> : fermer</p>
					<p class="sekva"><span class="eo">→ malfermi</span> : ouvrir</p>
					<p><span class="eo">fini</span> : finir</p>
					<p><span class="eo">funkcii</span> : fonctionner, marcher</p>
					<p><span class="eo">ĝeni</span> : gêner, inconforter</p>
					<p><span class="eo">igi</span> : rendre, causer, entraîner (quelqu''un à faire quelque chose quelque chose à 
						se faire d''une certaine façon), faire (faire)</p>
					<p><span class="eo">kiel eble plej</span> : autant que possible</p>
					<p><span class="eo">konsentite</span> : OK, d''accord</p>
				</div>
				<div class="col s12 l6">
					<p><span class="eo">kontenta</span> : content(e), satisfait(e)</p>
					<p><span class="eo">maniero</span> : manière</p>
					<p><span class="eo">manki</span> : manquer de</p>
					<p><span class="eo">mekaniko</span> : mécanique, mécanisme</p>
					<p><span class="eo">miksi</span> : mélanger</p>
					<p><span class="eo">miri</span> : s''étonner</p>
					<p><span class="eo">motoro</span> : moteur</p>
					<p><span class="eo">objekto</span> : objet, chose</p>
					<p><span class="eo">oportuna</span> : pratique, adéquat</p>
					<p><span class="eo">ordo</span> : ordre</p>
					<p><span class="eo">panei</span> : être en panne</p>
					<p class="sekva"><span class="eo">paneo</span> : panne</p>
					<p><span class="eo">ripari</span> : réparer</p>
					<p><span class="eo">ripeti</span> : répéter</p>
					<p><span class="eo">saĝa</span> : sage</p>
					<p><span class="eo">seka</span> : sec</p>
					<p><span class="eo">tia</span> : tel(le), telle sorte de</p>
					<p><span class="eo">troviĝi</span> : se trouver</p>
					<p><span class="eo">turni sin al</span> : s''adresser à, parler à, demander à, contacter</p>
					<p><span class="eo">veturi</span> : aller (en utilisant un véhicule)</p>
				</div>
			</div>'
  WHERE l.kurso = 'GR' AND l.numero = 11 AND le.ordo = 3;

-- leçon 11, section 4
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##EKZERCO:73##		
			##EKZERCO:74##'
  WHERE l.kurso = 'GR' AND l.numero = 11 AND le.ordo = 4;

-- leçon 11, section 5
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<fieldset class="sono">
				<legend>Aŭskultu tiun rakonton:</legend>
				<p>
					<audio id="audioPlayer" controls="controls" type="audio/mpeg">
						<source type="audio/mp3" src="audio/lasumin11.mp3" />
					</audio>
				</p>
			</fieldset>
			<h3>Malkontentas la mekanikisto</h3>
			
			<p>Mi miras, ke li ne dankis min. Estis tamen granda servo, kiun mi faris
			al li. Mi helpis, ĉu ne? Mi nenion misfaris, mi nenion fuŝis, mi
			nenion malbonigis. Nur okazis tio, ke mi malsukcesis.</p>
			<p>
			Kion vi volas? Mi ne povas fari mirindaĵojn. Mi estas homo, sinjoro,
			simpla homo, kiu perlaboras la vivon<a href=''#notoj''>[1]</a> laborante per siaj manoj. Kaj
			per sia kapo. Jes, la kapo, ĉar oni devas kompreni, kio misfunkcias.
			Nu, mi komprenis. Li tute fuŝis sian motoron. Ne mirige, kun tia
			maniero ekrapidi, kaj subite ekmalrapidi, kaj ree eĉ pli subite
			rerapidi. Tiuj motoroj estas malfortaj.</p>
			<p>
			Li do ne diru, ke mi ne helpis, ĉar mi helpis. Aŭ almenaŭ mi
			provis. Se motoro estas tute fuŝita, ĝi ne estas riparebla tujtuj.
			Ĉiam la sama afero: ili ne povas atendi. Sed li ne diris eĉ etan,
			eĉ apenaŭ aŭdeblan «dankon!». Li eĉ ne danketis. 
			Senkora homo! 
			Vere ne helpinda.</p>
			<p>
			Kion ajn oni faras, li ne dankas. Eĉ misparolante, eĉ fuŝe, li
			povus esprimi sian dankon, eĉ per la mano, eĉ per la kapo. Kiel ajn
			li volas. Per la piedoj eĉ, se li preferas. Aŭ per la haroj. Kiel
			ajn li deziras. Nur li danku.</p>
			<p>
			Konsentite, la afero ne estas finita, la servo ne estas finfarita. Sed
			la mesaĝo estas dirita: «Vi fuŝis vian aŭton, sinjoro, mi faros
			tion, kio eblas, ne pli, ĉar mi estas nur homo».</p>
			<p>
			Mi ne speciale volas, ke li longe paroladu. Mi ne deziras, ke li
			dankadu min dum tagoj kaj tagoj, ke li esprimadu siajn dankojn ĉiam
			kaj ĉiam, ĝis mia vivo estos finita. Nur kelkaj dankvortoj, kaj mi
			estus kontenta. Tamen ne estas malfacile. Ekzistas homoj, kiuj
			dankegas vin, ĉar tute malgranda servo estas al ili farita. Eta
			helpo, kaj jen venas longa danka deklarado. Kvazaŭ dank'' al vi<a href=''#notoj''>[2]</A> ili
			vivus plu, eĉ se vi faris nenion, aŭ almenaŭ nenion gravan.</p>
			<p>
			Sed tiu ĉi simple ne dankis. Eĉ ne unu vorto. Mi ne havis la tempon
			rigardi, kio okazas al li, jam la pordo estis fermita, jam li estis
			for. Tiel foriri sendanke... ĉu vi imagas? Mi ne ŝatas tian
			manieron agi. Kvazaŭ la aliaj ne ekzistus, kvazaŭ ni ne indus
			kelkajn vortojn de danko. Vere, li estas malbonmaniera homo.</p>
			<p>
			Lia motoro estas fuŝita. Kion li faris per tiu aŭto, mi iom povas
			imagi. Tute ne estas nature, ke la motoro tiamaniere fuŝiĝis, se li
			agis normale. Ofte oni sin demandas, kion la homoj faras per siaj
			veturiloj. Nu, mi faris, kion mi povis. Mi longe rigardadis la
			motoron, provis ĉu tion, ĉu tion ĉi, ĉu tion alian, rebonigis
			kelkajn aferetojn, kiuj misfunkciis, remetis unu novan pecon. La tutan
			farindan laboron mi faris.</p>
			<p>
			Sed superhomaĵojn mi ne povas fari. Se li fuŝis sian motoron tiel
			grave, kion mi faru? Ĉiam estas la sama afero. Ili aŭtas kiel
			malsaĝuloj, kvazaŭ ili tute perdis la kapon<a href=''#notoj''>[3]</a>, jes kiel senkapaj
			knabegoj ili irigas sian veturilon, kaj poste ili miras, ke post
			kelkaj tagoj ĝi ankoraŭ ne estas riparita.</p>
			<p>
			Tiuj motoroj ne estas tre serioze faritaj. Almenaŭ oni estu afabla
			kun ili. Se ne, ili facile fuŝiĝas.</p>
			<p>
			Nu, se mi devas remeti tutan novan motoron, ne mirinde, ke li kelktage
			atendu. Mi parolis tute afable al li, ne eldiris eĉ plej etan
			malbelan vorton, kaj tamen mi povus, se konsideri tian nekredeblan
			manieron fuŝi belan novan veturileton.</p>
			<p>
			Ne mi faris, ke lia aŭto ne plu funkcias. Sed mi laboris super ĝi,
			restis longan tempon en la laborejo ĉe tiu fuŝita motoro. Sed ĉar
			la aŭto ne estas jam plene riparita, tiu sinjoro senigas min de la
			simpla, unuvorta danko, kiun mi devus aŭdi.</p>
			<p>
			Por tiaj homoj ni laboras! La vivo vere ne estas facila. Kontentigi
			la homojn niaepoke ne plu eblas. Mi tion diras al vi, sinjoro, ĉar
			almenaŭ vi ŝajnas komprenema. Tia agmaniero tute senigas min de la
			emo labori.</p>
					
			<a id="notoj"></a>
			<p class="rimarko"><strong>NOTOJ</strong> : 
			<ol>
				<li><span class="eo">Perlabori la vivon</span> : ekhavi, per sia laboro, tion, kion oni devas
				havi por vivi.</li>
				<li><span class="eo">Dank'' al vi, danke al vi</span> : pro via dankinda helpo.</li>
				<li><span class="eo">Perdi la kapon</span> : ekmispensi, ekpensi fuŝe, perdi la povon ĝuste pensi.</li>
			</ol>'
  WHERE l.kurso = 'GR' AND l.numero = 11 AND le.ordo = 5;

-- leçon 11, section 6
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##RESUMO##'
  WHERE l.kurso = 'GR' AND l.numero = 11 AND le.ordo = 6;

-- leçon 12, section 1
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<fieldset class="sono">
				<legend>Aŭskultu tiun rakonton:</legend>
				<p>
					<audio id="audioPlayer" controls="controls" type="audio/mpeg">
						<source type="audio/mp3" src="fr/gerda/son/gerda/gerda12.mp3" />
					</audio>
				</p>
			</fieldset>
			<h3>Bob ege soifas</h3>
			<div class="row dialogo">
				<div class="col s12 m8">
					<p>Bob duone malfermas la okulojn, ilin refermas, ilin malfermetas
					denove, ilin refermas, ĝemas, kaj finfine malfermas ilin tute larĝe.</p>
					<p>"Donu al mi ion por trinki," li diras.</p>
					<p>"Trinki? Kion vi deziras trinki?" demandas Tom.</p>
					<p>"Ion ajn. Brandon. Donu al mi glason da brando."</p>
					<p>"Kiel vi sentas vin?" diras fraŭlino Marta, la flegistino.</p>
					<p>"La kapo doloras," Bob respondas ĝeme. "Mi petas vin, bonvolu
					doni al mi ion por trinki."</p>
					<p>"Ĉu vi bonvolas iri," Tom petas la flegistinon, "kaj alporti
					al li glason da brando?"</p>
				</div>
				<div class="col s12 m4">
					<img src="fr/gerda/bildoj/gerda12-1.gif" class="responsive-img">
				</div>
			</div>

			<div class="row dialogo">
				<div class="col s12 m8">
					<p>La flegistino iom hezitas, sed fine kapjesas.</p>
					<p>"Ĉu mi ankaŭ voku la policon?" ŝi diras. "Li ja ricevis
					baton, baton sufiĉe fortan, por ke li iĝu senkonscia. Laŭ mia
					opinio, tio pravigas, ke oni venigu la policon. Ĉu vi ne konsentas?"</p>
					<p>"Ankaŭ akvon," diras Bob, antaŭ ol Tom trovas la tempon
					respondi al Marta. "Mi tre soifas. Mi trinkos brandon plezure, sed unue
					mi trinku akvon. Bonvolu alporti al mi tre grandan glason da akvo kaj
					iom grandan glason da brando."</p>
					<p>"Jes. Estus saĝe voki la policon," Tom respondas al la
					flegistino.</p>
					<p>"Se vi ne alportos al mi ion por trinki, mi iros mem," diras
					Bob. "Mi tre soifas. Vi ne povas imagi, kiom soifa mi min sentas.  Mi
					tuj iros trinki akvon. Kaj poste mi iros aĉeti brandon. Ĉu oni povas
					ricevi brandon en la memserva restoracio?"</p>
					<p>"Ne, tute ne," Marta respondas, "sed mi havas brandon en mia
					ĉambro. Mi alportos ĝin al vi. Aŭ venu mem, se vi povas. Ĉu vi
					povas stariĝi?"</p>
					<p>"Mi povas," diras Bob, tre malrapide stariĝante kun la helpo
					de Tom kaj de la flegistino, "kvankam dolore."</p>
					<p>Ili iras al ŝia ĉambro.</p>
					<p>"Trinku tiom da akvo, kiom vi deziras, " ŝi diras. "Kaj poste
					mi donos brandon al vi. Eksidu sur tiun seĝon, ĝi estas tre komforta,
					vi vidos."</p>
					<p>Bob sidiĝas sur la seĝon, iom ĝemas, kaj ricevas grandan
					glason da akvo kun videble grandega plezuro. "Doloras al mi la kapo,"
					li diras.</p>
					<p>"Diru," petas Tom, "kio okazis. Ĉu finfine vi klarigos al ni?
					Ni estas ege scivolaj."</p>
					<p>Bob pripensas iomete, trinkas iom da akvo, metas la manon al la
					kapo kun dolora esprimo survizaĝe, kaj fine respondas:</p>
					<p>"Mi ne povus klarigi. Nenio estas klara. Mi estis tie apud
					Gerda. Mi aŭdis nenion, mi aŭdis neniun bruon. Kaj subite ĉio
					eksplodis en mia kapo kaj mi mortis."</p>
				</div>
				<div class="col s12 m4">
					<img src="fr/gerda/bildoj/gerda12-2.gif" class="responsive-img">
				</div>
			</div>'
  WHERE l.kurso = 'GR' AND l.numero = 12 AND le.ordo = 1;

-- leçon 12, section 2
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<section class="klarigo">
	
				<h4>al- : <i>approche, direction vers</i></h4>
		
				<p><span class="eo">veni</span> : venir → <span class="eo">alveni</span> : arriver</p>
				<p><span class="eo">iri</span> : aller → <span class="eo">aliri</span> : s''approcher</p>
				<p><span class="eo">porti</span> : porter → <span class="eo">alporti</span> : apporter</p>
				<p><span class="eo">paroli</span> : parler → <span class="eo">alparoli</span> : s''adresser</p>
		
				<p><span class="eo">kapjesi = kap + jes + i</span> : faire oui de la tête 
				(«tête» + «oui» + fin de verbe)</p>
				
				<p><span class="eo">scivola = sci + vol + a</span> : curieux, curieuse 
				(«savoir» + «vouloir» + fin d''adjectif = «qui veut savoir»)</p>
		
				<p><span class="eo">klarigi = klar + ig + i</span> : expliquer 
				(«clair» + «rendre» + fin de verbe = «rendre clair»)</p>
		
				<p><span class="eo">survizaĝe = sur + vizaĝ + e</span> : sur son visage  
				(«sur» + «visage» + fin d''adverbe = <span class="eo">sur (la, lia, ŝia) vizaĝo</span>)</p>
		
				<h4>-a → -e </h4>
		
				<p><span class="eo">facila laboro</span> : un travail facile</p>
				<p><span class="eo">facile labori</span> : travailler facilement</p>
				<p><span class="eo">la laboro estas facila</span> : le travail est facile</p>
				<p><span class="eo">labori estas facile</span> : travailler est facile</p>
				<p><span class="eo">estas facile labori</span> : c''est facile de travailler</p>
				<p><span class="eo">estas bone lerni la lingvon</span> : c''est bien d''apprendre la langue</p>
				<p><span class="eo">ripari la aŭton estas dezirinde</span> : il est souhaitable de réparer la voiture</p>
				<p><span class="eo">riparado de la aŭto estas dezirinda</span> : la réparation de la voiture est souhaitable</p>
		
				<p><span class="eo">tiu demando estas nediskreta</span> : cette question est indiscrète</p>
				<p><span class="eo">tion demandi estas nediskrete</span> : il est indiscret de demander cela</p>
		
				<p><span class="eo">estis klare, ke la laboron faros li</span> :  il était clair que c''est lui qui ferait le travail</p>
				<p><span class="eo">estis klara decido, ke la laboron faros li</span> : la décision qu''il ferait le travail était claire&nbsp;; 
				il était clairement décidé qu''il ferait le travail</p>
		
				<p><span class="eo">estus bone, se vi povus veni</span> : ce serait bien si tu pouvais venir</p>
				<p><span class="eo">estus bona afero, se vi povus veni</span> : ce serait une bonne chose si tu pouvais venir</p>
		
				<h4>ja</h4>
				<p><b>ja</b> introduit souvent une explication à ce qui a été affirmé précédemment, mais cette particule sert aussi à mettre en avant un point particulier&nbsp;:</p>
		
				<p><span class="eo">mi ne povas ĝin porti, ĝi ja estas tro granda</span> : je ne peux pas le porter, c''est trop gros</p>
		
				<p><span class="eo">li certe venos, li ja tre deziras vidi vin </span> : il viendra sûrement, car il a très envie de te voir</p>
		
				<p><span class="eo">vi ja scias …</span> : tu sais sûrement … ; assurément, tu sais …</p>
		
				<p><span class="eo">ĉu li ne venos? - jes ja!</span> : viendra-t-il ?  - oh oui, assurément</p>
			</section>'
  WHERE l.kurso = 'GR' AND l.numero = 12 AND le.ordo = 2;

-- leçon 12, section 3
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<p class="eo eta">Ces mots seront automatiquement ajoutés à votre vocabulaire à réviser lorsque vous aurez terminé d''étudier cette section.</p>
			
			<div class="vortlisto row">
				<div class="col s12 l6">
					<p><span class="eo">aĉeti</span> : acheter</p>
					<p><span class="eo">akvo</span> : eau</p>
					<p><span class="eo">apud</span> : à côté, près de</p>
					<p><span class="eo">brando</span> : eau-de-vie, alcool</p>
					<p><span class="eo">ĉio</span> : tout, toute chose</p>
					<p><span class="eo">denove</span> : à nouveau</p>
					<p><span class="eo">doloro</span> : douleur</p>
					<p><span class="eo">doni</span> : donner</p>
					<p><span class="eo">duone</span> : (à) demi</p>
					<p><span class="eo">eksplodi</span> : exploser</p>
					<p><span class="eo">fraŭlino</span> : Mademoiselle</p>
					<p><span class="eo">glaso</span> : verre</p>
					<p><span class="eo">ĝemi</span> : gémir, geindre</p>
					<p><span class="eo">heziti</span> : hésiter</p>
					<p><span class="eo">ja</span> : certes, bien, assurément</p>
					<p><span class="eo">kiom</span> : combien, quelle quantité</p>
				</div>
				<div class="col s12 l6">
					<p><span class="eo">klara</span> : clair(e), simple</p>
					<p><span class="eo">kvankam</span> : bien que, quoique</p>
					<p><span class="eo">larĝa</span> : large</p>
					<p><span class="eo">laŭ</span> : selon, suivant; le long de</p>
					<p><span class="eo">morti</span> : mourir</p>
					<p><span class="eo">plezuro</span> : plaisir</p>
					<p><span class="eo">polico</span> : police</p>
					<p><span class="eo">porti</span> : porter</p>
					<p><span class="eo">pripensi</span> : réfléchir à, considérer, envisager</p>
					<p><span class="eo">ricevi</span> : recevoir</p>
					<p><span class="eo">seĝo</span> : chaise</p>
					<p><span class="eo">soifi</span> : avoir soif</p>
					<p class="sekva"><span class="eo">soifo</span> : soif</p>
					<p><span class="eo">sufiĉa</span> : suffisant(e)</p>
					<p><span class="eo">tiom</span> : tant (de), autant</p>
					<p><span class="eo">trinki</span> : boire</p>
				</div>'
  WHERE l.kurso = 'GR' AND l.numero = 12 AND le.ordo = 3;

-- leçon 12, section 4
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##EKZERCO:75##		
			##EKZERCO:76##'
  WHERE l.kurso = 'GR' AND l.numero = 12 AND le.ordo = 4;

-- leçon 12, section 5
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<h3>Jen vi ree trinkas!</h3>
			
			<p>Sufiĉas! Nekredeble! Jam denove vi ektrinkas! Ne, amiketo, vi jam
			trinkis sufiĉe. Tro estas tro. Kial vi ĉiam devas troigi? La
			kuracisto diris: «Ne permesu, ke li ricevu tiom da glasoj. Unu jam
			estas multe por li. Aŭ ĉu vi volas, ke li fariĝu tute malsana? Se
			li plu soifas, akvon li trinku. Akvo estas bonega por la sano.»</p>
			<p>
			Kaj jen vi denove aĉetis brandon! Kion vi diris? Vi soifas, ĉu?
			Ho jes, vi soifas. Via soifo estas senfina. Via soifo estas ĉiama.</p>
			<p>
			Vere mi ne komprenas vin. Vi ne plu estas knabeto. Vi eĉ ne plu estas
			knabego. Vi estas viro, alta, forta, granda viro.</p>
			<p>
			Se almenaŭ vi ricevus plezuron el via trinkado! Sed pripensu iomete.
			Ĉu brando plezurigas vin? Eĉ ne. Fakte, ĝi eĉ ne sensoifigas vin.
			Vi tion diris al mi, ĉu ne? Laŭ vi mem, ĝi ne forsvenigas vian
			soifegon. Laŭ viaj diroj, tiel estas: post kiam vi trinkis glason, vi
			deziras denove trinki, vi tuj resentas la deziregon brandi.</p>
			<p>
			Viaj malsaĝaj diroj dolorigas al mi la koron. Kiam vi diras, ke ĉar
			vi estas tre grandkorpa, via brandotrinkego ne faras malbonon, kiel mi
			povus kredi vin? Mi havas okulojn kaj vidas. Kiam vi diras, ke korpa
			laborado tuj eligas el vi la troon da brando, ke laborante kun plena
			forto vi tuj elkorpigas la malsanigajn substancojn, permesu al mi
			esprimi mian plenan malkonsenton.</p>
			<p>
			Jes ja, vi estas granda, eĉ grandega. Jes ja, via korpo estas alta
			kaj larĝa. Vi estas forta kaj dika. Pli ol sufiĉe dika, verdire. Mi
			eĉ diru simple: tro dika, multe tro dika, ĉar la brando dikigas vin
			sen vin serioze fortigi.</p>
			<p>
			Kiam mi ekvidis vin la unuan tagon — ĉu vi memoras? — mi vin
			ekamis, ĝuste ĉar vi aspektis tiel bele. Fortegulo vi estis
			tiutempe. Jen bela viro, mi diris al mi, larĝa kaj forta. Tiutempe vi
			ne estis dika. Sed vi havis fortan korpon, belan vizaĝon, kun amika,
			plezuriga esprimo, kaj mi enamiĝis tuj. Mi ne imagis tiuepoke, ke vi
			fuŝos ĉion ĉi per brandemo, ke vi fuŝos vin mem, ke vi fuŝos nian
			kunan vivon, manke de volo. Mi ne imagis, ke vivi apud vi estos ĉiama
			doloro, ke mi vivos, ne apud fortulo, kiu helpos min, sed apud
			senvolulo, kiu fuŝos mian vivon.</p>
			<p>
			Ho! Mi konas viajn ĉiamajn rediraĵojn! Laŭ via opinio, mi estas
			senkora. Laŭ via sento, mi estas nekomprenema. Laŭ viaj paroloj, mi
			estas aŭtoritatema. Mi ŝatas Povon, laŭ vi. Mi deziras esti supera
			al vi, laŭ via pensmaniero, kaj mi volas ĉiam diradi al vi, kion vi
			faru. Tiel vi sentas nian rilaton, ĉu ne? Laŭ vi, mia sola deziro
			en la vivo estas superforti vin.</p>
			<p>
			Ne, amiketo; tiel ne estas. Mi tiom ŝatis, kiam mi sentis vin supera
			al mi. Ĝuste tio igis min vin ami: via maniero ĉiam superi la
			malfacilaĵojn de la vivo. Kio ajn okazis, la ĝusta decido estis
			klara por vi. Kio ajn okazis, vi ĉiam estis la plej forta, la plej
			saĝa, la plej supera.</p>
			<p>
			Kvankam ni travivis malfacilajn tagojn — ĉu vi memoras? — en la
			unua tempo de nia kunvivado, tamen ĉiam vi sukcesis elturni vin. Kiom
			ŝatinda estis la vivo apud vi tiuepoke! Kiom plezuriga!</p>
			<p>
			Ŝajnis, ke vi havas povon super la okazaĵoj, super la vivo. Povon vi
			havis, ĉar vi havis volon. Sed kio restas el via volo nun? Kio
			postrestas el via volforto, el via povo voli, kaj per tiu simpla volo
			aliigi la tutan vivon? Kie ĝi postrestis? Kien ĝi forsvenis? Kio
			okazis al ĝi? Kion vi faris el ĝi? Vi iras aĉeti brandon. Vi
			sidas apud glaso da brando. Vi rigardas ĝin. Vi rigardadas ĝin. Vi
			rigardegas ĝin. Kaj vi ne plu povas malkonsenti. Vi ne plu trovas en
			vi la volon kapnei<a href=''#notoj''>[1]</a> al ĝi. Kial vi fuŝis nian vivon, kara? Kara,
			kara mia, eta mia karulo, koro mia, vivo mia, kial vi fuŝis ĉion
			inter ni?</p>
			<p>
			Kial vi permesis al tiu brando ricevi la Povon? Ĝi estas nia
			superulo nun! Decidas ĝi, kion ni faru. Kaj ni povas nur sekvi ĝian
			volon. Vi aĉetas ĝin, kaj tiu aĉetaĵo direktas la vivon ĉi tie.
			Aĉetadi brandon denove kaj denove, dum la akvo estas tiel bona ĉe
			ni, kia malsaĝa maniero vivi!</p>
			<p>
			Mi scias, ke vi ektrinkis brandon, kiam okazis tiuj timigaj
			malfacilaĵoj ĉe via laboro. Ne estis facile por vi. Ne estis klare,
			kion fari. Viaj labordonantoj ne volis, ke vi malkaŝe diru la veron.
			Ili timegis, ke la homoj ekstere scios la veron, ke oni klarigos al la
			tuta urbo, kion ili faris, ke la tuta urbo parolos pri ilia misfaro,
			pri tiu gravega fuŝo, pri tiu gravega misdirektado de la aferoj. Kaj
			ili elsendis vin for. Ili forsendis vin eksteren, timante, ke la
			polico intervenos.</p>
			<p>
			Forsendita! Senoficigita! Kaj sen eblo respondi, sen eblo rebati,
			sen eblo pravigi vin, klarigi, kion vi faris, kaj kial. Vi retrovis
			vin senlabora. Esti senlaborulo nuntempe ne estas facila vivo. Neniam
			estis, cetere. Vivo de senlaborulo ne estas facile akceptebla. Brando
			akceptigis ĝin pli facile al vi, ĉu ne? Aŭ almenaŭ tion vi
			imagis. Kun kiom da malpravo!</p>
			<p>
			Ĉar kvankam vi aĉetis pli kaj pli da brando, via vivo ne faciliĝis.
			Male. Estas pli malfacile trovi laboron, kiam oni montriĝas
			brandoplena. Kaj kvankam mi amis vin, kaj komprenis vian zorgadon, mi
			ne povis akcepti tion. Ĉiaokaze ne la fakton, ke vi iris ĉiam denove
			aĉeti brandon, kaj ke nia aĉetpovo pli kaj pli mallarĝiĝis.</p>
			<p>
			Kvankam vi ne trinkis tro multe en la unuaj tagoj, tamen mi ne
			akceptis. Mi timis, ke post la epoko kun unu duonglaso vespere venos
			epoko kun duonglaso posttagmeze, kaj poste epoko kun plenaj glasoj
			dumtage kaj ĉe noktiĝo, kaj tiel plu, kaj tiel plu.</p>
			<p>
			Kaj evidentiĝis finfine, ke mi pravis, ĉu ne?</p>
			<p>
			Kvankam mi konsentas, ke mi eble ne sufiĉe komprenis viajn zorgojn de
			senlaborulo, tamen, ĉu oni povas diri, ke se mi agus alimaniere
			rilate al vi, vi ne trinkus tiun diablan brandon? Kvankam eble estas
			iom da vero en tio, tamen tiu pensmaniero ŝajnas al mi neĝusta. Kiom
			ofte mi pensis: «Jen estas la fina glaso. Post ĉi tiu li ne plu
			trinkos brandon!» Sed tiom ofte la faktoj montris min malprava.</p>
			<p>
			Kaj nun, kion fari? Ĉu vi povus tion diri al mi? Kiel eligi vin el
			tiu diabla emo? Kiel resanigi vin, kaj samokaze rebonigi nian
			kompatindan, fuŝitan kunekziston?</p>
			<p>
			Se vi scius, kiom mi malamas tiun brandon! Kara, kara, se almenaŭ vi
			komprenus min! Mi vin amas. Mi vin amegas. Ankoraŭ plu. Eĉ se de
			tempo al tempo mi diras la malon, mia koro ankoraŭ batas amege por
			vi.</p>
			<p>
			Sed kiom ĝi doloras! Kiom doloras vidi vin fordoni vian vivon al
			brando! Karulo! Karulo mia! Ĉu vere vi ne povas forigi el vi tiun
			diablan emon? Ĉu vi ne povus reekprovi, eĉ se nur kompate al mi?</p>
			<p>
			Ekzistas malsanulejoj, kie oni kuracas brandemon, mi aŭdis. Oni tie
			akceptus vin. Mi petegas vin, konsentu iri al tia malsanulejo! Mi
			faros ion ajn, por ke vi akceptu tiun ideon. Mi laboros ankoraŭ pli
			multe ol nun, se ne estos eble alimaniere.</p>
			<p>
			Aŭ almenaŭ konsentu, ke venu vin kuraci faka kuracisto. Ekzistas
			kuracistoj, kiuj specialiĝis pri brandotrinkemo, oni diris al mi.
			Eble se ni rigardos la aferon malsano, eble estos por vi pli facile
			seniĝi de ĝi. Akceptu. Mi petegas vin, karulo, akceptu almenaŭ
			diskuti kun fakulo. Vi ne imagas, kian plezuregon tio donus al mi. Kaj
			kiel kontentega vi mem sentus vin! Vi sentus, ke vi refariĝas viro.
			Vi sentus reviviĝon, reviriĝon, refortiĝon. Vi refariĝus la
			fortega bonulo, kiu tiel ame iun belan tagon ekrilatis kun mi.</p>
			<p>
			Vi tion faros, ĉu ne? Jes, mi vidas en viaj okuloj, ke vi pli kaj
			pli konsentas. Mi vokos la kuracan fakulon. Li venos kaj resanigos
			vin. Kaj vi refariĝos vera viro. Kaj ni reamos ege ege bele unu la
			alian.</p>
			
			<a id="notoj"></a>
			<p class="rimarko"><strong>NOTOJ</strong> : 
			<ol>
				<li><span class="eo">Kapnei</span> (kap-ne-i) : diri «ne» per la kapo; montri per la kapo, 
				ke oni malkonsentas.</li>
			</ol>'
  WHERE l.kurso = 'GR' AND l.numero = 12 AND le.ordo = 5;

-- leçon 12, section 6
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##RESUMO##'
  WHERE l.kurso = 'GR' AND l.numero = 12 AND le.ordo = 6;

-- leçon 13, section 1
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<fieldset class="sono">
				<legend>Aŭskultu tiun rakonton:</legend>
				<p>
					<audio id="audioPlayer" controls="controls" type="audio/mpeg">
						<source type="audio/mp3" src="fr/gerda/son/gerda/gerda13.mp3" />
					</audio>
				</p>
			</fieldset>
			<h3>Kara spionino!</h3>
			<div class="row dialogo">
				<div class="col s12 m8">
					<p>La vojo ŝajnas longa, kiam oni silentas la tutan tempon.
					Linda estas parolema; krome, ŝi deziras ricevi informojn pri sia
					stranga kunulo; ŝi do tute ne ŝatas tiun longan silentadon. Kial ne
					provi denove? Ŝi decidas, ke ŝi rekomencos paroli. Se li ne ŝatos,
					nu, li esprimos sian malŝaton, kaj ili plu veturos senvorte, kaj la
					vojo plu ŝajnos longega.
					<p>"Vi diris…," ŝi komencas, ne sciante, kiel ŝi finos, sed
					feliĉe ideo tuj venas: "Vi diris, ke vi havas zorgojn. Nu, ofte oni
					sentas sin pli bone, kiam oni esprimas siajn zorgojn al iu."</p>
					<p>"Vi estas scivolema, ĉu ne? Nu, mi ne volas esti malafabla kun
					tiel bela knabino, kiel vi. Pardonu, se mi ne montras min pli
					amikiĝema. Sed miajn zorgojn mi ne povas klarigi."</p>
					<p>"Ĉu vi estas certa? Oni ofte imagas, ke afero estas neebla,
					ĉar oni ne scias, kiel komenci, sed..."</p>
					<p>"Ne. Kiom koncernas min, ne estas tiel. Mi ne povas rakonti pri
					miaj zorgoj, ĉar ili koncernas personojn, pri kiuj mi ne rajtas
					paroli. Oni devas esti diskreta, ĉu ne? Ĉu vi ŝatus, ke viaj amikoj
					rakontu ĉion pri vi al nekonato?"</p>
					<p>"Kompreneble ne. Mi bone komprenas vin. Fakte, mi ne estas
					speciale scivola. Mi komencis diri tion nur, ĉar mi trovis la silenton
					peza kaj la vojon pli kaj pli longa. Sed mi tute ne volus maldiskreti."</p>
					<p>"Estas fakto, ke oni kutime interparolas, kiam oni veturas
					kune. Mi verŝajne ne estis tre ĝentila, lasante tiun silenton daŭri
					kaj daŭri pli kaj pli peze por vi. Mi eĉ ne rimarkis, ke silento
					estiĝas kaj daŭras. Mi estis absorbita de miaj pensoj, de miaj
					zorgoj, kaj ankaŭ de la vojo. Oni devas atenti la vojon, kiam oni
					ŝoforas, ĉu ne? Strange, kvankam vi estas tre bela kaj sidas tuj apud
					mi, plej proksime al mi, mi tamen forgesis pri vi. Nur ekzistis por mi
					la vojo en miaj okuloj, kaj la zorgoj en mia kapo."</p>
					<p>"Ĉe mi okazis la malo. Mi daŭre pensis pri vi. Mi rimarkis,
					ke vi ne aspektas tre ĝoje. Vi ŝajnis malfeliĉa. Mi min demandis,
					ĉu mi povus helpi. Vi ja tre afable konsentis min veturigi. Mi sentas
					min danka. Mi volus redoni al vi similan servon. Mi opiniis, ke se mi
					helpas vin vortigi vian malĝojon, tio eble senpezigos vin, kaj mi
					estos kontenta agi helpe.  Eble estas stulte, sed mi ĉiam deziras
					feliĉigi la homojn.”</p>
				</div>
				<div class="col s12 m4">
					<img src="fr/gerda/bildoj/gerda13-1.gif" class="responsive-img">
				</div>
			</div>

			<div class="row dialogo">
				<div class="col s12 m8">
					<p>"Vere, vi estas tre bonkora. Mi ege bedaŭras, ke mi ne povas
					jesi al via propono. Sed, kiel mi jam diris, miaj zorgoj koncernas
					aferojn, pri kiuj mi ne rajtas rakonti. Nu, jen ni alvenas. Kie vi
					deziras, ke mi lasu vin?”</p>
					<p>"Kien precize vi iras? Kie vi haltos? Kie vi lasos la aŭton?
					Vi povus lasi min tie. Estos plej facile por vi."</p>
					<p>"Ĉiam scivola, ĉu ne? Vi ŝatus scii, kien mi iras," li diras
					ridante, dum Linda sentas sin ruĝiĝi, ĉar similan rimarkon ŝi tute
					ne atendis. Dum momento, ŝi ne scias, kiel respondi. Ŝi sentas sin
					stulta.</p>
					<p>"Tute ne," ŝi fine diras, malvere. "Kien vi iras, tio tute ne
					interesas min. Mi proponis tion nur, ĉar tio ŝajnis plej facila. Sed
					se ĝenas vin, ke mi scios, vi povas lasi min ie ajn en la centro.
					Ekzemple ĉe la Internacia Hotelo, aŭ ĉe la Granda Teatro.
					Ĉiaokaze, mi treege dankas vin kaj mi facile trovos mian vojon. Jen.
					Tie ĉi estas perfekte. Koran dankon, kaj ĝis revido, kara sinjoro."</p>
					<p>"Ĝis revido, kara spionino!"</p>
					<p>La aŭto forveturas, kaj Linda ne povas forturni la okulojn de
					ĝi. Kara spionino, vere! Kion li volis diri? Ĉu li suspektus? Nia
					kompatinda Linda ne scias, kion pensi.</p>
				</div>
				<div class="col s12 m4">
					<img src="fr/gerda/bildoj/gerda13-2.gif" class="responsive-img">
				</div>
			</div>'
  WHERE l.kurso = 'GR' AND l.numero = 13 AND le.ordo = 1;

-- leçon 13, section 2
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<section class="klarigo">
	
				<h4>koncerne … -n</h4>
			
				<p><span class="eo">koncerne vian proponon</span> : pour ce qui est de votre proposition</p>
				<p><span class="eo">kiom koncernas min</span> : pour autant que je sois concerné</p>
			</section>'
  WHERE l.kurso = 'GR' AND l.numero = 13 AND le.ordo = 2;

-- leçon 13, section 3
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<p class="eo eta">Ces mots seront automatiquement ajoutés à votre vocabulaire à réviser lorsque vous aurez terminé d''étudier cette section.</p>
			
			<div class="vortlisto row">
				<div class="col s12 l6">
					<p><span class="eo">absorbi</span> : absorber</p>
					<p><span class="eo">bedaŭri</span> : regretter</p>
					<p><span class="eo">centro</span> : centre</p>
					<p><span class="eo">daŭri</span> : durer</p>
					<p><span class="eo">daŭrigi</span> : continuer (quelque chose)</p>
					<p><span class="eo">ekzemplo</span> : exemple</p>
					<p><span class="eo">feliĉa</span> : heureux, -euse</p>
					<p class="sekva"><span class="eo">feliĉe</span> : heureusement</p>
					<p><span class="eo">forgesi</span> : oublier</p>
					<p><span class="eo">ĝentila</span> : poli(e), courtois</p>
					<p><span class="eo">ĝojo</span> : joie, bonheur</p>
					<p class="sekva"><span class="eo">ĝoja</span> : joyeux, -euse, content(e)</p>
					<p><span class="eo">hotelo</span> : hôtel</p>
					<p><span class="eo">ie</span> : quelque part</p>
					<p><span class="eo">interesi</span> : intéresser</p>
					<p class="sekva"><span class="eo">interesa</span> : intéressant(e)</p>
					<p><span class="eo">internacia</span> : international(e)</p>
					<p><span class="eo">komenci</span> : commencer</p>
					<p><span class="eo">konato</span> : connaissance</p>
					<p><span class="eo">koncerni</span> : concerner</p>
					<p class="sekva"><span class="eo">koncerne …-n</span> : concernant</p>
					<p><span class="eo">krome</span> : de plus, en outre</p>
					<p><span class="eo">kutimi</span> : avoir l''habitude de, avoir coutume</p>
				</div>
				<div class="col s12 l6">
					<p class="sekva"><span class="eo">kutimo</span> : habitude, coutume</p>
					<p><span class="eo">momento</span> : moment</p>
					<p><span class="eo">nacio</span> : nation</p>
					<p class="sekva"><span class="eo">nacia</span> : national(e)</p>
					<p><span class="eo">nekonato</span> : (un) inconnu</p>
					<p><span class="eo">perfekta</span> : parfait(e)</p>
					<p><span class="eo">persono</span> : personne</p>
					<p><span class="eo">peza</span> : lourd, pesant</p>
					<p><span class="eo">preciza</span> : précis(e)</p>
					<p><span class="eo">proponi</span> : suggérer, proposer&nbsp;; offrir</p>
					<p><span class="eo">rajti</span> : avoir le droit de</p>
					<p class="sekva"><span class="eo">rajto</span> : (le) droit (de faire quelque chose)</p>
					<p><span class="eo">rakonti</span> : raconter</p>
					<p><span class="eo">ridi</span> : rire</p>
					<p><span class="eo">rideti</span> : sourire</p>
					<p><span class="eo">rimarki</span> : remarquer, noter</p>
					<p><span class="eo">simila</span> : similaire</p>
					<p><span class="eo">stulta</span> : stupide, idiot(e), imbécile</p>
					<p><span class="eo">ŝofori</span> : conduire</p>
					<p><span class="eo">ŝoforo</span> : conducteur, chauffeur</p>
					<p><span class="eo">teatro</span> : théâtre</p>
					<p><span class="eo">vojo</span> : voie, route, chemin</p>
				</div>
			</div>'
  WHERE l.kurso = 'GR' AND l.numero = 13 AND le.ordo = 3;

-- leçon 13, section 4
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##EKZERCO:77##		
			##EKZERCO:78##'
  WHERE l.kurso = 'GR' AND l.numero = 13 AND le.ordo = 4;

-- leçon 13, section 5
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<fieldset class="sono">
				<legend>Aŭskultu tiun rakonton:</legend>
				<p>
					<audio id="audioPlayer" controls="controls" type="audio/mpeg">
						<source type="audio/mp3" src="audio/lasumin13.mp3" />
					</audio>
				</p>
			</fieldset>
			<h3>Revenis amo, feliĉu ni!</h3>
			
			<p>Mi devas rakonti al vi. Mi estas tiel feliĉa! Mi retrovis ŝin! Mi
			revidis ŝin! Kiun? Karletan, kompreneble. Evidente mi parolas pri
			Karleta. Pri kiu mi parolus? Ĉu ekzistas alia virino en la mondo?
			Jes, mi revidis ŝin.</p>
			<p>
			Ŝi sidis ĉe tablo en trinkejo, sola, antaŭ taso da kafo. Mi soifis,
			kaj eniris la trinkejon. Mi tuj rimarkis ŝin. Ŝi aspektis kiel
			persono, kiu atendas iun. Mi min demandis, ĉu mi iru al ŝi, ĉu mi
			iru sidi ĉe la apuda tablo, aŭ ĉu ĉe pli malproksima. Mi decidis
			iri iom pli malproksimen. Mi trovis bonan lokon, de kie mi povis
			facile observi ŝin.</p>
			<p>
				Mi volis komence observi ŝian vizaĝon, provi ekscii, laŭ ŝia
				esprimo, ĉu ŝi feliĉas aŭ ne. Krome, mi deziris ne aliri ŝin tuj,
				ĉar ŝajnis al mi, ke estas pli saĝe lasi mian koron trankviliĝi
				antaŭ ol ekrilati kun ŝi.</p>
			<p>
			Ĉu vi memoras tiun tagon, tiun dolorigan tagon, kiam ŝi forlasis min?
			Antaŭ longe tio okazis. Ŝi malkontentis pri mi, pri io, kion mi
			fuŝe faris. Kaj, malsaĝe, mi malkonsentis pardonpeti pri mia fuŝo.
			Kiel malsaĝa mi estis! Ŝi pravis, kaj mi ne. Se tiuepoke mi sincere
			dirus: «Jes, mi mispaŝis. Bonvolu pardoni min. Mi estas fuŝulo. Mi
			riparos la aferon.”, ŝi certe plu restus kun mi, ĉar ŝi trovis min
			plej aminda. Sed mi malsaĝe volis, ke ŝi konsideru min prava.</p>
			<p>
			Ŝi tiam opiniis, ke vivo kun mi ne estos ebla, se mi devas senmanke
			senti min prava, eĉ kiam mi fuŝe agis kaj estas evidente malprava.
			Jes, tiam ŝi foriris, lasante min sola, malĝojige sola. Mi sentis
			min forgesita, forlasita.</p>
			<p>
			Kiom mi bedaŭris mian malsaĝan reagon! Sed mia bedaŭro ne helpis.
			Simpla bedaŭro neniam helpas, ĉu?</p>
			<p>
			La vivo iĝis seninteresa por mi. Mi laboris laŭkutime. La ekzisto
			estis daŭro, ne vivo. Mi eĉ min demandis, ĉu estas iu ajn intereso
			en daŭrigo de tiu vivo. Se vivo estas senĝoja, senplezura, kial
			daŭrigi ĝin? La ideo min mortigi envenis en mian kapon, kaj restadis
			en ĝi dum kelka tempo. Mi hezitis: ĉu plu vivi, aŭ ĉu morti tuj?
			Kio estas preferinda, kiam la vivo perdis ĉian intereson?</p>
			<p>
			Se paroli sincere, mi diru, ke mi timas la morton. Nur ĉar mi ĝin
			timas, mi forlasis la ideon min mortigi. Mi do daŭrigis mian
			malfeliĉan ekziston.</p>
			<p>
			Kaj jen Karleta trovis alian viron, kaj enamiĝis al li. Mi konis lin.
			Li nomiĝas Jozefo. Malseriozulo. Fuŝulo. La ideo, ke ŝi emas
			kunvivi kun simila ulo, dum mi ekzistas, estis... nu... mi ne trovas
			vortojn por esprimi, kion mi sentis. Mi ne povis porti tiun pezon. Mia
			koro estis peza. Pli kaj pli peza.</p>
			<p>
			Tamen, mia vivo… ne, vivo ne estas ĝusta vorto, tiel vivi ne estas
			vivi, mi diru: mia ekzistado… tamen, do, mia ekzistado estis
			seninteresa. Mi provis forgesi ŝin, sed ne povis. Amikoj proponis al
			mi promenojn, veturadojn, agadojn, teatrovidon, diskutojn,
			kuntrinkadon. Ili estis tre afablaj. Sed nenio interesis min.</p>
			<p>
			Mi eĉ pensis pri tio, ĉu mi mortigu Jozefon. Mian morton mi timas —
			mi pensis — ne la morton de aliuloj! Ĉu vi trovas min timige
			malŝatinda? Pardonu, mi nur sinceras pli ol kutime. Jes, komence mi
			havis tiun ideon. Meti finon al<a href=''#notoj''>[1]</a> mia doloro mortigante mian
			malamikon.</p>
			<p>
			Mi malamis lin. Kaj en malamo kuŝas nekredebla forto. Ĉu vi jam
			sentis tion? Eble vi neniam malamis. Videble, vi estas plej bonkora
			homo.</p>
			<p>
			Mi tamen forlasis la ideon meti finon al la vivo de Jozefo (eble ĉar
			mi timas la policon!). Mi provis revidi Karletan, sed Jozefo forlasis
			la urbon, kaj Karleta sekvis lin for. Ŝi trovis alian laboron, ie,
			kaj mi plu restis same sola.</p>
			<p>
			Komence mi pensis: “Ŝi ne rajtas fari tion al mi. Ŝi ne havas tiun
			rajton. Ŝi devas vivi kun akceptinda viro, saĝa, bonkora, juna.
			Unuvorte, kun viro kiel mi. Ne kun fuŝulo kiel Jozefo.”</p>
			<p>
			Sed poste mia pensmaniero aliiĝis. Kion similaj pensoj ja povus
			alporti al mi? Nenion helpan, nur bedaŭron. Fakte, mi ne pensis
			prave, ĉu? Ŝi ja rajtas fari el sia vivo, kion ŝi volas. Kaj mi ne
			havas rajton devigi ŝin min ami. Ŝi rajtas forlasi min, se mi agas
			malsaĝe. Neniam ni kunigis niajn vivojn antaŭ iu urba aŭ alia
			aŭtoritato. Mi do havis neniun rajton super ŝi. Tiuj kaj similaj
			konsideroj helpis min forlasi mian ne-sanan pensovojon, kaj aliri
			vojon pli bonan.</p>
			<p>
			Mi atendis ion ajn, sed ne tiun trinkejan revidon. Kara Karleta! Dum
			ŝi sidis tie en la angulo, ŝi estis ankoraŭ pli bela, ol kiam mi
			komence konatiĝis kun ŝi. Sed ŝi aspektis malĝoje.</p>
			<p>
			Okazis io eĉ pli neatendita ol la fakto, ke mi revidis ŝin: subite,
			ŝi turnis la okulojn al mi, min vidis, kaj ekstaris. Ŝi ekpaŝis en
			mia direkto, ne tre rapide, tiel ke mi havis sufiĉe da tempo por min
			demandi, kion ŝi diros.</p>
			<p>
			Min tuŝis timo. Mi kvazaŭ antaŭsentis, ke doloriga bato falos sur
			min. Mi timis, ke ŝiaj unuaj vortoj estigos eksplodon de doloraj
			sentoj en mia kompatinda koro.</p>
			<p>
			Sed tute male. Apenaŭ mi povis kredi miajn okulojn: jen ŝi sidis
			apud mi kaj ekparolis kun larĝa rideto. Ho, tiu rideto! Similan
			rideton mi neniam vidis. Neniam en mia vivo mi sentis min tiel
			kortuŝita. Tiu rideto estis mesaĝisto pri baldaŭaj feliĉoj.</p>
			<p>
			“Kara Petro!” ŝi diris. “Kiel mi ĝojas vin revidi! Se vi scius,
			kiel feliĉa mi estas! Oni diris al mi, ke vi forlasis la urbon, kaj
			jen mi retrovas vin. Ĉu vi ankoraŭ min malamas?”</p>
			<p>
			Imagu tion! Ŝi opiniis, ke mi malamas ŝin. Eble mi iomete ŝin
			malamis, kiam ŝi forlasis min, sed tamen… Mi repensis pri miaj
			mortig-ideoj; ili koncernis min, kaj poste Jozefon, sed ŝin neniam.</p>
			<p>
			“Mi neniam malamis vin”, mi respondis, “nur Jozefon.”</p>
			<p>
			Kaj tiam ŝi rakontis pri Jozefo. Liaj proponoj tute ne estis
			seriozaj. Tuj kiam li alvenis en tiun alian urbon, li faris similajn
			proponojn al alia virino, kaj forlasis Karletan. Estis tre dolore al
			ŝi, ĉar ŝi imagis, ke li estos la viro en ŝia vivo. Sed iom post
			iom ŝi retrovis sian kortrankvilon. Pli kaj pli ŝi rememoris nian
			antaŭan amrilaton kiel vere feliĉigan.</p>
			<p>
			Ŝi do deziris rerilati kun mi. Sed iu malsaĝulo fuŝ-informis ŝin
			dirante, ke mi foriris, ke mi forlasis mian laboron, kaj trovis alian
			malproksime. Li intermiksis mian nomon kun tiu de aliulo, ĉar niaj
			nomoj intersimilas.</p>
			<p>
			Mi klarigis al ŝi la vojon, kiun miaj pensoj kaj sentoj iris dum tiu
			longa tempo malproksime de ŝi. Krome, mi diris, kiom mi nun konscias
			mian malsaĝecon. Mi diris, kiom mi bedaŭras, ke mi lasis tro altan
			opinion pri mi mem fuŝi belegan amon.</p>
			<p>
			Tiumomente ni komencis ridi unu kun la alia. Kiom ni ridis! Ni ne
			vere scias, kial. Nur, ĉar estis tiel bone retroviĝi kune, kaj
			rimarki, ke ni tuj povas tiel forte reami unu la alian.</p>
			<p>
			Ni parolis pri ĉio kaj nenio, ĉiam ridante. Ni rakontis niajn vivojn
			unu al la alia. Ni estis ĝojaj, neimageble ĝojaj. Mi metis mian
			manon sur ŝian manon, proksimigis mian kapon al ŝia kapo. Niaj koroj
			batis aŭdeble, aŭ apenaŭ malpli ol aŭdeble. Ni sentis kuniĝon. Ni
			forlasis la kafejon, promenis en la urbo, ĉiam ride diskutante, ĉiam
			kun ĝojplenaj vizaĝoj. Ni iris al mia ĉambro. Ni…</p>
			<p>
			Nu, nu, nu, nu. Ĉu vi scias, kio estas feliĉo? Vere, amiko, se vi
			povus imagi…</p>

			<a id="notoj"></a>
			<p class="rimarko"><strong>NOTOJ</strong> : 
			<ol>
				<li><span class="eo">Meti finon al <em>x</em></span> : fari, ke x finiĝu; igi, ke <em>x</em> ne plu ekzistu.</li>
			</ol>'
  WHERE l.kurso = 'GR' AND l.numero = 13 AND le.ordo = 5;

-- leçon 13, section 6
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##RESUMO##'
  WHERE l.kurso = 'GR' AND l.numero = 13 AND le.ordo = 6;

-- leçon 14, section 1
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<fieldset class="sono">
				<legend>Aŭskultu tiun rakonton:</legend>
				<p>
					<audio id="audioPlayer" controls="controls" type="audio/mpeg">
						<source type="audio/mp3" src="fr/gerda/son/gerda/gerda14.mp3" />
					</audio>
				</p>
			</fieldset>
			<h3>En forlasita domo</h3>
			<div class="row dialogo">
				<div class="col s12 m8">
					<p>"Kie diable mi troviĝas?" diris al si Gerda, kiam ŝi
					vekiĝis. Ŝi kuŝis sur lito – sur malkomforta, tro mallarĝa lito –
					en ĉambro nekonata, en domo nekonata.</p>
					<p>Mankis al ŝi forto, kaj ŝia tuta korpo iom doloris; ŝi estis
					laca, kvazaŭ ŝi estus laborinta multajn horojn sinsekve en la kampoj,
					kvazaŭ ŝi estus movinta pezajn rokojn kaj ŝtonojn dum multaj kaj
					multaj tagoj, sen eĉ horo da dormo, kvazaŭ ŝi estus marŝinta dum
					multaj kaj multaj semajnoj sur malfacila monta vojeto.  Unuvorte, ŝi
					estis lacega, kaj ŝajnis al ŝi, ke ĉiuj muskoloj de ŝia korpo
					plendas pri troa laboro, nehome peza, nehome malfacila, nehome laciga.</p>
					<p>Kaj tamen ŝi sciis, ke ŝi faris neniun korpan laboron; ŝi
					sentis sin malĝoja; ŝiaj okuloj malsekiĝis; ŝi ploris.</p>
					<p>Ne estis multe da lumo en la ĉambro. Kvankam ŝi sentis sin
					tiel laca, tiel senforta, scivolo pri la situacio tamen superis ŝian
					deziron plu kuŝi. Ŝi sekigis siajn okulojn kaj ellitiĝis. Ŝi iris
					al la eta fenestro, esperante malfermi la dikajn fenestrokovrilojn,
					kiuj malhelpis la envenon de lumo. Ŝi ankaŭ esperis, ke ŝi vidos la
					sunon. Krome, estis tre varme en la ĉambro, kaj estus saĝe malfermi
					la fenestron por enlasi iom da pura aero. Sed ŝi ne sukcesis. Io
					malhelpis, ke tiu malnova fenestro moviĝu.</p>
					<p>Ŝi iris al la pordo; ĝi estis ŝlosita, kaj ŝlosilo nenie
					videblis.</p>
					<p>La ĉambro estis malbela, ne tre pura. Apud la muro staris
					tablo kaj seĝo. Ŝi sidiĝis sur la seĝon, metis la brakojn sur la
					tablon, la kapon en la manojn, kaj ploris. "Enŝlosita mi estas," ŝi
					pensis. "Oni enŝlosis min!"</p>
					<p>Antaŭe ŝi ne multe pensis pri la plezuro esti libera. Liberi
					estis io perfekte natura: ŝi iris, kien ŝi deziris, sen iu ajn
					malhelpo, kaj tiu libereco ŝajnis rajto evidenta. Kaj nun oni
					malliberigis ŝin malantaŭ ŝlosita pordo. Ŝi, kiu tiom ŝatis ĝoji,
					ridi, kanti, kiu tiom ŝatis ludi kaj promeni sub la suno, nun ne plu
					trovis en si la humuron, kiu tiom ofte helpis ŝin en la malfacilaj
					horoj de la vivo. Ŝi ne povis vidi la eksteran sunon, kaj same en ŝia
					koro ne plu lumis la kutima suno de ĝojo.</p>
				</div>
				<div class="col s12 m4">
					<img src="fr/gerda/bildoj/gerda14-1.gif" class="responsive-img">
				</div>
			</div>

			<div class="row dialogo">
				<div class="col s12 m8">
					<p>Kaj jen subite ŝi reagis: ŝi iris al la pordo kaj ĝin batis
					kun plej granda forto; ŝi faris timigan bruon, sed nenio okazis. Ŝi
					vokis pli kaj pli laŭte, kriis, kriegis, samtempe piedbatante la
					pordon, sed venis neniu respondo, neniu reago. Senespera, ŝi revenis
					al la lito kaj rekuŝiĝis, pli laca ol iam ajn. Dum multaj horoj ŝi
					restis tiel, kuŝe, kaj fine, tro laca, ŝi ekdormis.</p>
					<p>Vekis ŝin infana voĉo; ĝi venis el iu alia ĉambro, en la
					sama domo, tute certe; ĝi diris: "Neniam diru nek al via patro nek al
					via patrino, ke ni venis en la forlasitan domon. Estas malpermesite
					ludi ĉi tie. Se ili scius…" Alia voĉeto respondis: "Mi neniam
					diros. Nek al mia patro, nek al mia patrino. Ne havu zorgojn. Neniam
					oni scios, ke ni venis ludi ĉi tie."</p>
					<p>Gerda diris: "Infanoj, ĉu vi aŭdas min?" ŝia koro batis
					espere.</p>
					<p>"Iu parolis," sonis unu el la infanvoĉoj, sed aŭdeble la
					knabo ne parolis al Gerda, nur al sia kunulo. "Ĉu vi aŭdis?"</p>
					<p>"Estis kvazaŭ voĉo de virino," diris la alia.</p>
					<p>"Infanoj, venu, helpu min, mi estas mallibera, oni ŝlosis la
					pordon, mi estas enŝlosita, venu, mi petas, mi petegas, liberigu min,"
					Gerda plu petegis. Sed la reago de la infanoj estis plej senkuraĝiga.</p>
					<p>"Venu!" kriis unu. "Estas fantomo!"</p>
					<p>"Vi pravas," la dua respondis, "oni ĉiam rakontis pri fantomo
					en ĉi tiu forlasita domo. Fantomino, oni diris, kaj la voĉo estis
					ina. Ni rapide forkuru!"</p>
					<p>"Mi timas," ankoraŭ diris la unua, dum la bruoj klarigis al
					Gerda, ke la du knaboj forkuras kaj lasas ŝin sola, sola, sola…</p>
				</div>
				<div class="col s12 m4">
					<img src="fr/gerda/bildoj/gerda14-2.gif" class="responsive-img">
				</div>
			</div>'
  WHERE l.kurso = 'GR' AND l.numero = 14 AND le.ordo = 1;

-- leçon 14, section 2
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<section class="klarigo">
	
				<h4>-ata : <i>ce qui subit l''action, pendant qu''elle a lieu</i></h4>
			
				<p><span class="eo">konata</span> : (qui est) connu(e)</p>
				<p><span class="eo">rigardata</span> : que l''on regarde</p>
				<p><span class="eo">la manĝata birdo</span> : l''oiseau qu''on est en train de manger</p>
			
				<h4>-inta : <i>ce qui a fait l''action (action terminée)</i></h4>
		
				<p><span class="eo">aminta</span> : ayant aimé</p>
				<p><span class="eo">laborinta</span> : ayant travaillé</p>
				<p><span class="eo">la manĝinta birdo</span> : l''oiseau qui a mangé (qui a fini de manger)</p>

				<div class="card-panel blue lighten-5">
					<p><strong>Actif ou passif&nbsp;?</strong></p>
					<ul>
						<li>Participes <strong>actifs</strong> (<span class="eo">-anta</span>, <span class="eo">-inta</span>, <span class="eo">-onta</span>) : le nom qualifié <strong>fait</strong> l''action.<br />
						Exemple : <span class="eo">la manĝanta birdo</span> = l''oiseau qui est en train de manger</li>
						<li>Participes <strong>passifs</strong> (<span class="eo">-ata</span>, <span class="eo">-ita</span>, <span class="eo">-ota</span>) : le nom qualifié <strong>subit</strong> l''action.<br />
						Exemple : <span class="eo">la manĝata birdo</span> = l''oiseau qu''on est en train de manger</li>
					</ul>
					<p>Un participe actif ou passif ne veut pas dire que la phrase est à la voix active ou passive.<br />
						Par exemple, <span class="eo">konata</span> (participe passif) peut être employé 
						dans une phrase à la voix active&nbsp;:
					<span class="eo">mi aĉetis konatan libron</span> = j''ai acheté un livre connu.
						(Le livre «subit» l''action de connaître).
					<p>La voyelle indique le moment de l''action par rapport au verbe principal&nbsp;: <b>a</b> en cours, <b>i</b> terminée, <b>o</b> à venir.
					Dans l''exemple précédent, <span class="eo">konata</span> («(qui est) connu») a un sens présent, même si le français le traduit par un participe passé.</p>
				</div>
		
				<h4>-eco : <i>nom abstrait de la qualité</i></h4>
		
				<p><span class="eo">libera</span> : libre → <span class="eo">libereco</span> : liberté</p>
				<p><span class="eo">viro</span> : homme (mâle) → <span class="eo">vireco</span> : virilité</p>
				<p><span class="eo">unu</span> : un → <span class="eo">unueco</span> : unité</p>
		
				<h4>-iĝ- :<i>action, indication, de devenir</i></h4>
		
				<p><span class="eo">mi vekas lin</span> : je le réveille → <span class="eo">li vekiĝas</span> : il se réveille</p>
				<p><span class="eo">mi movas ĝin</span> : je le déplace → <span class="eo">ĝi moviĝas</span> : ça se déplace</p>
				<p><span class="eo">li komencas la rakonton</span> : il commence l''histoire</p>
				<p><span class="eo">la rakonto komenciĝas</span> : l''histoire commence</p>
		
				<p><span class="eo">ellitiĝi = iĝi el lito</span> : se lever (litt. «devenir hors du lit»)</p>
		
				<h4>-ata → -ita : (<i>comparé à</i> -as / -is)</h4>
		
				<p><span class="eo">farata laboro</span> : un travail en cours</p>
				<p><span class="eo">farita laboro</span> : un travail terminé</p>
				<p>[comparer <span class="eo">mi faras la laboron</span> : je fais le travail ; <span class="eo">mi faris la laboron</span> : j''ai fait ce travail]</p>
		
				<p><span class="eo">vekata amiko</span> : un ami que j''essaie de réveiller ; un ami que l''on réveille</p>
				<p><span class="eo">vekita amiko</span> : un ami que l''on a réveillé, et qui est éveillé</p>
		
				<h4>-ega /-iga : -ega <i>(augmentation)</i>, -iga <i>(causalité)</i></h4>
		
				<p><span class="eo">lacega</span> : épuisé(e) ; terriblement fatigué(e)</p>
				<p><span class="eo">laciga</span> : fatigant(e) («causant de la fatigue»)</p>
				<p><span class="eo">kuraĝega</span> : extrêmement courageux (courageuse) ; téméraire ; intrépide</p>
				<p><span class="eo">kuraĝiga</span> : encourageant(e)</p>
		
				<p><span class="eo">fenestrokovrilo</span> : volet = «un instrument/outil qui sert à» (<span class="eo">ilo</span>) «couvrir» (<span class="eo">kovr-</span>)&nbsp;; «une fenêtre» (<span class="eo">fenestro</span>)</p>
			</section>'
  WHERE l.kurso = 'GR' AND l.numero = 14 AND le.ordo = 2;

-- leçon 14, section 3
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<p class="eo eta">Ces mots seront automatiquement ajoutés à votre vocabulaire à réviser lorsque vous aurez terminé d''étudier cette section.</p>
			
			<div class="vortlisto row">
				<div class="col s12 l6">
					<p><span class="eo">aero</span> : air</p>
					<p><span class="eo">brako</span> : bras</p>
					<p><span class="eo">domo</span> : maison</p>
					<p><span class="eo">du</span> : deux</p>
					<p><span class="eo">esperi</span> : espérer</p>
					<p><span class="eo">fantomo</span> : fantôme</p>
					<p><span class="eo">fenestro</span> : fenêtre</p>
					<p><span class="eo">fenestrokovrilo</span> : volet</p>
					<p><span class="eo">horo</span> : heure</p>
					<p><span class="eo">humuro</span> : humour</p>
					<p><span class="eo">iam</span> : une fois, un jour</p>
					<p><span class="eo">infano</span> : enfant</p>
					<p><span class="eo">kampo</span> : champ</p>
					<p><span class="eo">kanti</span> : chanter</p>
					<p><span class="eo">kontraŭ</span> : contre</p>
					<p><span class="eo">kovri</span> : couvrir</p>
					<p><span class="eo">krii</span> : crier, appeler</p>
					<p><span class="eo">kuri</span> : courir</p>
					<p><span class="eo">kuraĝo</span> : courage</p>
					<p class="sekva"><span class="eo">kuraĝa</span> : courageux, -euse</p>
					<p><span class="eo">laca</span> : fatigué(e)</p>
					<p><span class="eo">laŭta</span> : haute (voix), fort (bruit, cri), bruyante (conversation) </p>
					<p><span class="eo">libera</span> : libre</p>
					<p><span class="eo">lito</span> : lit</p>
				</div>
				<div class="col s12 l6">
					<p><span class="eo">ludi</span> : jouer</p>
					<p><span class="eo">lumo</span> : lumière (la ou une)</p>
					<p><span class="eo">malantaŭ</span> = <span class="eo">mal</span>- + <span class="eo">antaŭ</span> : derrière</p>
					<p><span class="eo">marŝi</span> : marcher</p>
					<p><span class="eo">monto</span> : montagne</p>
					<p><span class="eo">movi</span> : déplacer (quelque chose)</p>
					<p><span class="eo">muskolo</span> : muscle</p>
					<p><span class="eo">nek… nek…</span> : ni… ni…</p>
					<p><span class="eo">nenie</span> : nulle part</p>
					<p><span class="eo">patro</span> : père</p>
					<p class="sekva"><span class="eo">patrino</span> : mère</p>
					<p><span class="eo">plendi</span> : se plaindre</p>
					<p><span class="eo">plori</span> : pleurer</p>
					<p><span class="eo">pura</span> : propre&nbsp;; pur(e)</p>
					<p><span class="eo">roko</span> : roc, rocher</p>
					<p><span class="eo">sinsekve</span> : consécutivement</p>
					<p><span class="eo">situacio</span> : situation</p>
					<p><span class="eo">soni</span> : faire du bruit, sonner</p>
					<p><span class="eo">suno</span> : soleil</p>
					<p><span class="eo">ŝlosi</span> : fermer (à clé)</p>
					<p><span class="eo">ŝlosilo</span> : clé</p>
					<p><span class="eo">ŝtono</span> : pierre</p>
					<p><span class="eo">varma</span> : chaud(e)</p>
					<p><span class="eo">veki</span> : réveiller (quelqu''un)</p>
					<p><span class="eo">voĉo</span> : voix</p>
				</div>
			</div>'
  WHERE l.kurso = 'GR' AND l.numero = 14 AND le.ordo = 3;

-- leçon 14, section 4
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##EKZERCO:79##
			##EKZERCO:80##'
  WHERE l.kurso = 'GR' AND l.numero = 14 AND le.ordo = 4;

-- leçon 14, section 5
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<div class="row">
				<div class="col s12">
					<div class="card-panel blue lighten-5">
						En tiu ĉapitro, estas du malsamaj rakontoj de <i>Lasu min paroli plu !</i>.<br>
						<a href="#unua">Silentu, enaj voĉoj!</a><br>
						<a href="#dua">Timiga diro</a>
					</div>
				</div>
			</div>

			<a id="unua" class="scrollspy"></a>
						<fieldset class="sono">
				<legend>Aŭskultu tiun rakonton:</legend>
				<p>
					<audio id="audioPlayer" controls="controls" type="audio/mpeg">
						<source type="audio/mp3" src="audio/lasumin14a.mp3" />
					</audio>
				</p>
			</fieldset>			<h3>Silentu, enaj voĉoj!</h3>
			
			<p>Mi kuŝis en la lito, en mia kara, bone varma lito. La suno jam estis
			iom alta kaj ĝia lumo bele plenigis la ĉambron. La apenaŭ fermita
			fenestro enlasis malvarmetan aeron. Mi pensis: nun estas tempo
			ellitiĝi. Sed mi sentis min tiel bone en la lito! «Ĉu vere», mi
			diris al mi, «Ĉu vere mi devas ellitiĝi tuj?» Ena voĉo respondis,
			tute mallaŭte: "«Ne. Ĝoju pri la ŝatinda kuŝa pozicio, pri la
			feliĉiga enlita situacio, restu iom pli longe. Nenio ja urĝas».</p>
			<p>
			Mi tre kontentis pri tiu senvoĉa voĉo, kiu tiel amike parolis al mi,
			en mi. Sed mi apenaŭ decidis fordoni min al la feliĉo sekvi la
			amindan proponon de tiu en-kora voĉeto, jen alia ena voĉo ekparolis
			en mia kapo, silente, kvankam kvazaŭ aŭdeble.</p>
			<p>
			Ĝi diris: «Vi devas ellitiĝi. Vi ne rajtas agi malkuraĝe. Laboro
			atendas vin. Kaj vi ne povas fari ĝin enlite. Vi devas kuri el via
			domo al via oficejo. Kuraĝon, amiko, el la lito elmovu vin. Kaj vi
			sentos la feliĉon de la homo, kiu faris sian devon, kvankam liaj plej
			malaltaj emoj provis irigi lin al alia direkto, al la malsaĝa direkto
			de vivo tro facila, al la facila direkto de malkuraĝo».</p>
			<p>
			Estis ĝene aŭdi du voĉojn. Kiam oni aŭdas du malsamajn voĉojn,
			kiuj diras malsamajn aferojn, eĉ se ne tre laŭte, ĉio
			intermiksiĝas, kaj ne estas facile sekvi la interparolon, ĉu?</p>
			<p>
			Esperante eligi min el ilia interbatado, mi turnis min en la lito, kaj
			provis endormiĝi.</p>
			<p>
			Sed la ĝena afero, koncerne provojn endormiĝi, estas, ke ili ne
			estas facilaj. Mi ne scias, ĉu mi estas normala, sed ĉe mi provado
			endormiĝi neniam sukcesas. Kiam mi enlitiĝas, nokte, mi endormiĝas,
			sed neniam ĉar mi provis. Nur ĉar mi enlitiĝis kaj estis laca, kaj
			pensis pri nenio plu. Mi devis fari nenion por dormi. Dormo venis mem.</p>
			<p>
			Kiam mi provas kaj provadas, ripetante al mi: «Nun mi provu dormi, nun
			mi pensu pri nenio, nun mi dormu», mi restas maldorma la tutan tempon,
			kaj mi pli kaj pli sentas lacecon, sed bedaŭrinde ne dormigan
			lacecon.</p>
			<p>
			Min do turninte kaj returninte kaj rereturninte en la lito, mi povis
			nur diri al mi, ke mi ne sukcesas trovi la deziratan dormemon. Kaj jen
			ena voĉeto denove alparolis min:</p>
			<p>
			«Vi ne deziras dormi», ĝi diris — kaj ĝi sonis, kvazaŭ ĝi min
			malŝatus — «vi ne deziras dormi. Vi jam dormis sufiĉe. Vi tute ne
			estas laca. Vi nur deziras malkuraĝe resti en la lito por la plezuro
			senti, ke vi faras nenion, dum ekstere la plimulto el la homoj laboras
			kaj laciĝas laborante».</p>
			<p>
			La voĉo pravis. Mi ne deziris dormi. Eble iom dormeti, jes ja, sed
			sufiĉe maldorme, se vi komprenas min, por senti la plezuron kuŝi en
			bona varma lito, en ĉambro sunluma, farante nenion, nur lasante la
			pensojn kaj imagaĵojn sekvi unu la alian, duone konscia, ke tio estas
			libereco.</p>
			<p>
			«La grandeco de la homo kuŝas en libereco», mia patro kutimis diri.</p>
			<p>
			Nu, mia patro estis bona homo. Lia bonkoreco estis konata kaj
			priparolata de la tuta urbeto, kie ni vivis dum mia infaneco. Kaj lia
			ĉiama praveco ne estis malpli konata. Mia patro ŝatis prikanti la
			bonecon de la homa libereco. Li instruis al ni ami liberecon.</p>
			<p>
			Ĉion ĉi mi respondis al la ena voĉeto, kiu provis ellitigi min.
			«Dum mi kuŝas en la lito kaj nenion faras», mi diris al ĝi, «mi
			estas libera, kaj mia patro instruis al mi alt-konsideri liberecon».</p>
			<p>
			Sed — la diablo eble scias kial, mi ne — tiu voĉeto ne estis facile
			kontentigebla. «Vi vekiĝis antaŭ du horoj», ĝi diris. «La suna
			lumo, enirante tra la fenestro en la dormoĉambron, vekis vin jam
			antaŭ du horoj. Jam du horojn vi kuŝas, farante nenion. Senkuraĝulo! 
			Mallaborema knabo! Vi estas viro, sed vi agas infane. Estas
			priplorinde vidi vin. Vi min senesperigas. Por multegaj homoj, vivo
			estas laboro, kaj vi emas nur ludi kaj kanti, kaj lasi la aliajn
			laboradi por via komforto».</p>
			<p>
			Sed feliĉe la alia voĉeto intervenis: «Kial vi lasas tiun elparoli
			similajn vortojn stultajn, kaj, krome, malĝojigajn?» ĝi rimarkigis
			al mi. «Silentigu ĝin. Tiu voĉo ne estas aŭdinda. Ĝi malŝatas
			liberecon, ĝi do malŝatas vian patron, kiu tiom ŝatis liberecon.
			Ĉu oni ne instruis al vi, ke oni devas ami siajn patron kaj patrinon?
			Ami ilin, memori pri ili? Pensu pri la tempo, kiam vi estis tute
			malgranda, eta-eta infaneto, kaj kuŝis en la brakoj de via patrino.
			Ĉu ŝi vekis vin, se vi dormis? Tute ne. Ŝi agis precize por ke vi
			ne vekiĝu, sed dormu plu trankvile. Ĉu vi memoras, kiel feliĉe
			estis, kiam vi libertempis sur la montoj, promenis en la kamparo,
			ludis kun aliaj infanoj en la montodomo, vivis en tiu pura montara
			aero, kuris sur la rokoj, kantis tute laŭte...? Ĉu iu kriis al vi,
			ke tio estas malbona vivo? Ĉu via patro aŭ via patrino aŭ iu alia
			kriis al vi, ke vi iru labori? Vi vivis libere tiutempe. Kaj libereco
			estas feliĉiga».</p>
			<p>
			Sed la alia voĉo rebatis: «Kiel malsincere vi parolas! Tio, kion vi
			diras, okazadis nur dum la libertempo. Vi forgesas, kiel estis, kiam
			vi iris al la lernejo. Via patrino vekis vin tiam. Kaj, vole nevole,
			vi ellitiĝis por iri al la lernejo, ofte por kuri al la lernejo, ĉar
			normale marŝi ne sufiĉis por alveni ĝustatempe, ĉar jam tiuepoke
			vi estis senkuraĝulo ema resti tro longe en la lito».</p>
			<p>
			Vere, tiuj du voĉoj estis ĝenaj. Ambaŭ voĉoj ĝenis, kvankam,
			verdire, unu pli ol la alia. Mi ne sciis, kion fari, por silentigi
			ilin. Ekdormi estus bona maniero eliĝi el la ĝena situacio, sed,
			kiel mi jam diris, mi ne sukcesis. Mi do fine ellitiĝis. La penso pri
			taso da bona varma kafo antaŭplezurigis min.</p>
			<p>
			Mi iris al la fenestro, rigardis tra ĝi al la suno, al la kampoj, al
			la montoj, kiuj staris malproksime, altaj kaj belaj. La naturo
			montriĝis tiel ŝatinda, ke mi sentis emon laŭte kanti dankokanton
			pri ĝi, aŭ krii al ĝi mian ĝojon vivi en la kamparo, ne en
			homplena urbego.</p>
			<p>
			Mi rigardis, kioma horo estas, kun iom da antaŭtimo, ke eble mi ne
			sufiĉe atentis la horon, dum mi kuŝis enlite kaj lasis la pensojn
			sendirekte promenadi. Mi subite min demandis, ĉu mi havos la tempon
			trinki la varman kafon, al kiu mi nun soifis, aŭ ĉu mi devos kuri
			kiel stultulo por alveni ĝustatempe al la oficejo. Jes, kun
			antaŭtimo mi ekrigardis la horon kaj vidis, ke — diable! — la tempo
			forkuris pli rapide ol mi imagis. Mi nun devos ĉion fari kun ega
			rapideco, forgesi pri la bona varma kafo, kaj tuj kuri el la domo por
			alveni al la oficejo en tempo plej mallonga.</p>
			<p>
			Sed subite mi ekmemoris. «Kio okazas al mi?» mi laŭte kriis. «Oni ne
			laboras ĉi-tage! La oficejo estas fermita. Nun estas sabato<a href=''#notoj''>[1]</a>!»</p>
		
			<a id="notoj"></a>
			<p class="rimarko"><strong>NOTOJ</strong> : 
			<ol>
				<li><span class="eo">Sabato</span> : la tagoj de la semajno estas: lundo, mardo, merkredo,
				ĵaŭdo, vendredo, sabato kaj dimanĉo. Dimanĉo estas kutime senlabora
				tago. Krome, en multaj lokoj, oficistoj ne laboras sabate.</li>
			</ol>

			<a id="dua" class="scrollspy"></a>
						<fieldset class="sono">
				<legend>Aŭskultu tiun rakonton:</legend>
				<p>
					<audio id="audioPlayer" controls="controls" type="audio/mpeg">
						<source type="audio/mp3" src="audio/lasumin14b.mp3" />
					</audio>
				</p>
			</fieldset>			<h3>Timiga diro</h3>
			
			<p>Estis priplorinda travivaĵo. Vi scias, ke mi decidis diri al miaj
			infanoj, ke mi foriros. Kiam mi decidis, mi tute ne imagis, ke estos
			tiel malfacile. Fakte, en la momento, kiam mi volis iri paroli al ili,
			mi konsciiĝis, ke mi ne povas. Jen venis la horo iri al iliaj
			ĉambroj por informi ilin, kaj mi sentis min tiel malbone, ke mi
			ekploretis. Mia tuta kuraĝo estis for.</p>
			<p>
			Komprenu min. Ĉu eblas al homo normalkora aliri siajn infanojn kaj
			diri: «Mi havas novaĵon por vi. Baldaŭ mi foriros. Baldaŭ via patro
			forlasos ĉi tiun domon por ĉiam...» Kiel oni povas tion diri al
			infanoj, kiujn oni amas ?</p>
			<p>
			Kaj tamen mi devis. La afero estis decidita. Mi devis ĝin fari. Ne
			estis alia vojo, ĉu ? Mi provis plikuraĝigi min, trovi en mi fortojn
			novajn, per volpovo havigi al mi la forton superi miajn sentojn de
			timo kaj malespero, por fari mian devon.</p>
			<p>
			Ne estis facile. Sed mi havis la senton, ke iom post iom la dezirata
			forto envenas en min.</p>
			<p>
			Mi komence parolos al la knabino, mi decidis. Ŝi estis en sia
			ĉambro, farante iun laboron por la lernejo. Ŝi rigardis min per
			miroplenaj okuloj. Tute certe ŝi sentis, ke io estas nenormala.
			Neniam mi havas tian esprimon, kiam mi iras diri ion al ŝi.</p>
			<p>
			La tuta situacio iĝis min plejpleje zorga. Tamen mi ne povis eligi
			min el ĝi nun. Mi aliris ŝin. «Klara», mi diris, «mi... mi devas
			informi vin pri io... Malĝojiga novaĵo, tre malĝojiga».</p>
			<p>
			Ŝia vizaĝo aliiĝis: mira antaŭ unu momento, ĝi nun fariĝis
			zorga. Mi ne scias, ĉu ŝi atendis ion similan, aŭ ĉu miaj vortoj
			estis tute neatenditaj por ŝi. Ŝia vizaĝo ekesprimis maltrankvilan
			atenton.</p>
			<p>
			«Vi scias... Certe vi rimarkis, ke via patrino kaj mi... nu... nia
			rilatado ne estas bona. Ni... Kiel diri ?... Ni ne plu sukcesas rilati
			ame. Ni... Estas malfacile por unu vivi kun la alia, tagon post tago,
			horon post horo, minuton post minuto. Via patrino estas tre bona
			patrino, helpema, bonkora, klarpensa. Iumaniere mi plu amas ŝin. Sed
			kunvivi en la sama domo ne plu estas eble. Ni decidis, ke mi
			foriros... Ne timu, mi revenos vidi vin, ludi kun vi, paroli kun vi.
			Kiel eble plej ofte. Sed mi vivos en alia domo».</p>
			<p>
			Ŝi rigardis min. Mi sentis min senkorulo seniganta hometon de la plej
			ŝatata havaĵo.</p>
			<p>
			«Se vi kaj patrino tion decidis...» Ŝi komencis, kaj estis io tre
			malĝoja en ŝia voĉo. Mi rimarkis, ke ŝi emas plori, sed kun granda
			malfacilo sukcesas superi la ploremon. Ŝi aldonis nur: «Nu, estas
			tiel». Kaj post ekrigardo al mi, en kiu nek malamo, nek timo vidiĝis,
			sed nur malfeliĉo, ŝi el sia ĉambro eliris, kaj tuj poste el la
			domo.</p>
			<p>
			Mi sentis min laca, ege laca. Kaj mi faris nur duonon de la devo! Mi
			serĉis Alanon, la knabon. Mi pli antaŭtimis ĉi tiun intervidon,
			ĉar Alano estas pli juna kaj pli sentema. Ankaŭ pli malkaŝema, pli
			ema sin esprimi.</p>
			<p>
			Kiam mi aliris lin, li ludis per siaj etaj aŭtoj. Alano havas
			specialan ŝaton al tiuj malgrandaj veturiloj. Li oftege ludas per
			ili. Li okazigas al ili plej neimageblajn aventurojn.</p>
			<p>
			Mi decidis fini la dolorigan momenton kiel eble plej tuje. «Mi venas
			sciigi ion tre gravan al vi», mi diris per voĉo plej serioza. La
			veturiletoj tuj haltis, kaj Alano direktis al mi siajn belajn bluajn
			okulojn, tiom plenajn de trankvila amo, ke mia koro ekdoloris. Li
			havas al mi grandegan amon. Mi estas por li la Patro kun granda P<a href=''#notoj2''>[1]</a>.
			Patro estas, liapense, plej aminda fortulo: ulo kuraĝega, havanta la
			povon ĉiam ĉion superforti.</p>
			<p>
			Kaj nun mi batfaligos tiun manieron min vidi. Miaj vortoj estos bato,
			post kiu nenio plu restos el la imago pri mi. Jes ja, tiu maniero min
			vidi estas pure imaga, ĝi ne estas ĝusta. Mi estas fakte nur simpla
			homo, kun fortoj kaj malfortoj, ne la grandegulo, kiun la knabo
			imagas. Sed ĉu estas bone, ke per unu bato, per unu timiga bato, mi
			faru, ke tiu imagata, sed amata fortulo, subite perdu la ekziston ? Ĉu
			li ne estas tro malforta por supervivi tian baton ? Ĉu post tiu falo
			li povos restariĝi ? Kaj tamen mi devis paroli.</p>
			<p>
			Ree, mi kunigis la tuton de miaj troveblaj fortoj, kaj ekparolis:
			«Alano, mi baldaŭ foriros. Mi ne plu vivos kun vi ĉi tie. Mi ne plu
			vivos ĉi-dome».<br>
			La knabo min rigardis kun hezita esprimo.</p>
			<p>
			Kaj li ekridis.</p>
			<p>
			Mi atendis ion ajn, sed ne tion. Li ne akceptis min serioze! Por li,
			patro estas tiel klara, evidenta, neforigebla duono de amata paro, ke
			tiu duono ne povus serioze foriri, lasante la alian duonon sola. Por
			li, evidente, paro estas tuto, paro estas unuo, ne du aĵoj, kiujn
			eblas malkunigi. Ke mi foriru, tio estas tute simple neebla. Tiu diro
			de la patro povis esti nur luda.</p>
			<p>
			Tamen mi devis komprenigi al li la veron. Baldaŭ mi ne plu estos en
			la domo. Baldaŭ mi havos mian vivon aliloke, for de lia patrino, de
			Klara, de li.</p>
			<p>
			«Alano», mi rekomencis, kaj mi provis igi mian voĉon kiel eble plej
			senrida. «Alano, mi ne ridas, ĉi tio ne estas ludo. Mi komprenas, ke
			vi ne kredis min tuj, ĉar vi tutforte esperas, ke mi ne diris la
			veron. Sed estas vere, Alano, mi foriros. Vi restos ĉi tie kun
			patrino kaj Klara. Kaj mi ne plu vivos kun vi. Mi...»</p>
			<p>
			Li sentis nun, ke ĉi tio ne estas imaga rakonto, ke mi diras la puran
			veron. Sed li ne povis akcepti ĝin. Li rigardis min. Li subite ege
			paliĝis. Li iĝis tiel eta, tiel malforta, tiel senhelpa, ke mi
			sentis, kvazaŭ la tuta ĉambro turniĝus, kaj mi apenaŭ ne svenis.</p>
			<p>
			«Mi mortigis lin», mi pensis, kaj tiu penso, kiom ajn neakceptebla,
			restadis dolore en mia kapo. «Mi mortigis lian koron, lian ĝojon,
			eble lian povon ami kaj feliĉi. Mi estas la mortigisto de mia knabo».
			En unu minuto, ĉio fariĝis nekredeble malvarma en mi.</p>
			<p>
			Alano ekkriis. Li elmetis siajn etajn brakojn, siajn etajn manojn,
			batis min kun fortega, longa, nehoma krio, kaj post kelkaj ekbatoj al
			mi, forkuris ploregante.</p>
			<p>
			Mi staris tie, senpensa, sensenta. Mi ne imagis, ke eblas porti tian
			pezon de malfeliĉo. Mi sentis min la plej malaminda dolorigisto en la
			mondo. Mi pensis pri Diana, la virino, kun kiu mi deziris kunvivi. Por
			Diana mi deziris forlasi tiujn du belegajn, sanegajn infanojn kaj
			ilian patrinon. Sanegajn ? Jes, ĝis nun. Sed ĉu ili povos resti same
			sanaj post tia videble preskaŭ mortiga bato ?</p>
			<p>
			Ĉu mi perdis la saĝon, mi demandis al mi. Ĉu Diana povas doni al mi
			veran feliĉon ? Aŭ ĉu por feliĉo nur imagita mi nun malfaras unubate
			feliĉon malrapide, iom post iom kunmetitan ?</p>
			<p>
			Mi ne plu sciis, kiu mi estas, kion mi faru, kien direktiĝas mia
			vivovojo. «Ĉu vere tion mi volas ?» mi demandis al mi. Sed de nenie
			venis respondo.</p>			
			
			<a id="notoj2"></a>
			<p class="rimarko"><strong>NOTOJ</strong> : 
			<ol>
				<li><span class="eo">diru</span> : «po».</li>
			</ol>'
  WHERE l.kurso = 'GR' AND l.numero = 14 AND le.ordo = 5;

-- leçon 14, section 6
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##RESUMO##'
  WHERE l.kurso = 'GR' AND l.numero = 14 AND le.ordo = 6;

-- leçon 15, section 1
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<fieldset class="sono">
				<legend>Aŭskultu tiun rakonton:</legend>
				<p>
					<audio id="audioPlayer" controls="controls" type="audio/mpeg">
						<source type="audio/mp3" src="fr/gerda/son/gerda/gerda15.mp3" />
					</audio>
				</p>
			</fieldset>
			<h3>Preciza raporto</h3>
			<div class="row dialogo">
				<div class="col s12 m8">
					<p>"Bonan matenon, ho plej bela, ĉu vi bone dormis?"</p>
					<p>"Bonan matenon, Tom. Mi ne dormis tre multe. Kaj vi, ĉu vi
					dormis kontentige?"</p>
					<p>"Perfekte, kara, perfekte. Sed diru do al via plej fidinda
					amiko, kial vi ne sufiĉe dormis."</p>
					<p>"Ĉu ne estas klare al vi? Mi tro pensis. Mi pensadis dum la tuta nokto
					pri ĉio, kio okazis hieraŭ."</p>
					<p>"Estas fakto, ke mi ne revidis vin hieraŭ, post kiam mi eliris
					kun Bob por okupiĝi pri Gerda. Ni lasis vin en la memserva restoracio
					kun la tasko observi la blondulon. Kiam mi revenis, vi estis for. Kien
					vi iris? Ĉu vi faros al mi precizan raporton?"</p>
					<p>"Kun plezuro, sed ankaŭ vi raportos al mi poste, ĉu ne? Nu,
					mi veturis al la urbocentro kun tiu junulo. Mi rakontis al li, ke io
					fuŝa okazis al mia aŭto, kaj mi petis lin min veturigi. Li hezitis,
					sed fine decidis jese. Mi deziris lin paroligi, por ekscii pri li kiel
					eble plej multe, sed mi ne sukcesis. Ni diris unu al la alia nur tre
					banalajn aferojn."</p>
					<p>"Ĉu vi almenaŭ scias, kien li iris en la urbo, laŭ kiuj
					stratoj, al kiu domo?"</p>
					<p>"Atendu. Mi rakontos ĉion. Por ke mia peto ŝajnu natura, mi
					petis lin lasi min en la centro. Li lasis min ĉe la dekstra flanko de
					la Granda Teatro, kaj li veturis plu. Mi ne sciis, kion fari. Mi
					promenis en la urbo, pensante, ke mia ideo ne estis tiel bona: mi
					eksciis nenion pri li, kaj troviĝis sen aŭto en la mezo de la urbo.
					Fakte, mi sentis min iom stulta. Mi promenis de strato al strato,
					provante elpensi planon, kaj jen subite mi vidas lin eliri el la
					poŝtoficejo. Mi estis nekredeble bonŝanca. Imagu! Se mi estus
					troviĝinta naz-al-naze kun li ĝuste kiam li eliris el la
					poŝt-oficejo...! Sed mi vidis lin sufiĉe frue por min kaŝi."</p>
				</div>
				<div class="col s12 m4">
					<img src="fr/gerda/bildoj/gerda15-1.gif" class="responsive-img">
				</div>
			</div>

			<div class="row dialogo">
				<div class="col s12 m8">
					<p>"Feliĉe, ke vi vidis lin sufiĉe frue!"</p>
					<p>"Kiel mi diris: mi estis bonŝanca, mi vidis lin ĝustatempe.
					Nu, li iris piede, kaj mi decidis lin sekvi. Ĉu vi konas tiun grandan
					magazenon, kiu vendas kvardek malsamajn specojn de pano kaj ĉiaspecajn
					ĉokoladojn kaj aliajn dolĉaĵojn? Sur la maldekstra flanko de la
					strato, kiu iras al la ĉefa Sportocentro. Estas granda vendejo de
					mebloj apude. Nu, ne gravas, ĉu vi konas aŭ ne. Li eniris tiun
					panejon, aŭ tiun dolĉaĵvendejon, aŭ tiun… nu… tiun pan- kaj
					dolĉaĵvendejon, kaj eliris post minuto portante paperan sakon, kiu
					aspektis plenplena. Ŝajnis, ke li aĉetis la tutan magazenon. Mi devas
					diri, ke ili vendas tre bonajn aĵojn en tiu ejo.  Mi, kiu tiom ŝatas
					ĉokoladon kaj dolĉaĵojn, ofte irus tien kaj aĉetus multon, se mi ne
					timus dikiĝi. Nu… e… kion mi rakontis?"</p>
					<p>"Vi raportis pri via spiona sekvado, sed vi devojiĝis de la
					ĉefa vojo de via raporto al flankaj konsideroj pri pano kaj ĉokolado.
					Fakte, ĉu vi deziras iom pli da pano? Kion vi trinkas ĉi-matene?
					Teon, mi vidas. Ĉu vi ŝatus, ke mi replenigu vian tason?"</p>
					<p>"Jes, dankon. Mi trinkos plezure plian tason da teo. Dankon,
					Tom, kara. Nu, do…"</p>
				</div>
				<div class="col s12 m4">
					<img src="fr/gerda/bildoj/gerda15-2.gif" class="responsive-img">
				</div>
			</div>'
  WHERE l.kurso = 'GR' AND l.numero = 15 AND le.ordo = 1;

-- leçon 15, section 2
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<section class="klarigo">
	
				<p><span class="eo">bonŝanca</span> : chanceux, -euse</p>
		
				<p><span class="eo">devojiĝi (de + <span class="eo">voj</span> + <span class="eo">iĝi</span>)</span> : dévier ; s''écarter ; dériver</p>
			</section>'
  WHERE l.kurso = 'GR' AND l.numero = 15 AND le.ordo = 2;

-- leçon 15, section 3
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<p class="eo eta">Ces mots seront automatiquement ajoutés à votre vocabulaire à réviser lorsque vous aurez terminé d''étudier cette section.</p>
			
			<div class="vortlisto row">
				<div class="col s12 l6">
					<p><span class="eo">cent</span> : cent</p>
					<p><span class="eo">ĉefa</span> : principal(e), chef</p>
					<p><span class="eo">ĉokolado</span> : chocolat</p>
					<p><span class="eo">dek</span> : dix</p>
					<p class="sekva"><span class="eo">dek kvar</span> : quatorze</p>
					<p><span class="eo">dekstra</span> : droit(e) (côté) </p>
					<p class="sekva">→ <span class="eo">maldekstra</span> : gauche (côté)</p>
					<p><span class="eo">dolĉa</span> : doux&nbsp;; sucré</p>
					<p><span class="eo">flanko</span> : côté</p>
					<p><span class="eo">frue</span> : tôt, de bonne heure</p>
					<p><span class="eo">hieraŭ</span> : hier</p>
					<p><span class="eo">kvar</span> : quatre</p>
					<p><span class="eo">kvardek</span> : quarante</p>
					<p class="sekva"><span class="eo">kvardek kvar</span> : quarante-quatre</p>
					<p><span class="eo">magazeno</span> : magasin, boutique</p>
					<p><span class="eo">mateno</span> : matin</p>
					<p><span class="eo">meblo</span> : meuble</p>
				</div>
				<div class="col s12 l6">
					<p><span class="eo">nazo</span> : nez</p>
					<p><span class="eo">pano</span> : pain</p>
					<p><span class="eo">papero</span> : papier</p>
					<p><span class="eo">plani</span> : établir un plan, projeter de</p>
					<p class="sekva"><span class="eo">plano</span> : plan</p>
					<p><span class="eo">plenplena</span> : complètement plein, rempli</p>
					<p><span class="eo">poŝto</span> : poste (administration de distribution du courrier), courrier</p>
					<p><span class="eo">raporti</span> : rapporter, annoncer</p>
					<p><span class="eo">sako</span> : sac</p>
					<p><span class="eo">speco</span> : sorte, espèce, genre</p>
					<p><span class="eo">sporto</span> : sport</p>
					<p><span class="eo">strato</span> : rue</p>
					<p><span class="eo">ŝanco</span> : chance</p>
					<p><span class="eo">tasko</span> : tâche, besogne, devoir (scolaire)</p>
					<p><span class="eo">teo</span> : thé</p>
					<p><span class="eo">vendi</span> : vendre</p>
				</div>
			</div>'
  WHERE l.kurso = 'GR' AND l.numero = 15 AND le.ordo = 3;

-- leçon 15, section 4
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##EKZERCO:81##
			##EKZERCO:82##'
  WHERE l.kurso = 'GR' AND l.numero = 15 AND le.ordo = 4;

-- leçon 15, section 5
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<div class="row">
				<div class="col s12">
					<div class="card-panel blue lighten-5">
						En tiu ĉapitro, estas du malsamaj rakontoj de <i>Lasu min paroli plu !</i>.<br>
						<a href="#unua">Mistero en papervendejo</a><br>
						<a href="#dua">Du raportoj pri vendado</a>
					</div>
				</div>
			</div>

			<a id="unua" class="scrollspy"></a>
						<fieldset class="sono">
				<legend>Aŭskultu tiun rakonton:</legend>
				<p>
					<audio id="audioPlayer" controls="controls" type="audio/mpeg">
						<source type="audio/mp3" src="audio/lasumin15a.mp3" />
					</audio>
				</p>
			</fieldset>			<h3>Mistero en papervendejo</h3>
			
			<p>Kiam mi vidis Ivon hieraŭ, li ne nur alportis tre bonajn ĉokoladajn
			dolĉaĵojn, sed krome li raportis al mi pri la strangaj okazaĵoj en
			la papervendejo de Ĉefa Strato. Mi tre fidas lian raporton. Li sciis
			multon, ĉar li laboris kiel vendisto en tiu paperejo kelktempe kaj li
			plu havas amikajn rilatojn kun la homoj tieaj.</p>
			<p>
			Li diris, ke laŭ la aranĝo de la mebloj en la magazeno, la ideoj de
			la polico ne povas esti pravaj. Laŭ Ivo, la plano, kiun oni ne plu
			retrovis jam frue la matenon post la okazaĵoj — tiu gravega papero,
			kiu tiel nekompreneble perdiĝis — ne kuŝis sur la meblo, kie ĝi
			estis laŭ la polico, aŭ ĝi ankoraŭ estus tie la sekvantan matenon.
			Se ĝi ne plu troveblis sur tiu meblo — la meblo maldekstre staranta
			— frumatene la sekvantan tagon, oni suspektu unu el la vendistoj, ne
			la personon, kiu venis aĉeti la papersakojn, kaj kiun la polico
			suspektas.</p>
			<p>
			Laŭ Ivo, tiu persono ne povis iri apud la meblon, kie la plano
			laŭdire troviĝis. La vendistoj tuj rimarkus lin kaj suspektus ion
			nenaturan, ĉar tiu meblo, kiu staras flanke, sur la maldekstra
			flanko, fakte, ne estas alirebla al la homoj, kiuj venas en la
			magazenon nur por aĉeti ion. La polico do ne volas diri la veron.</p>
			<p>
			Tiu grava plano, kiu, laŭ la polico, kuŝis sur la maldekstraflanka
			meblo, venis per speciala poŝt-alporto tuj antaŭ la fermhoro. Oni
			metis ĝin sur la poŝtaĵojn, kiuj alvenis pli frue, kaj tie plu
			kuŝis. Nu, kompreneble, Ivo konas tiun meblon, kiel la tutan
			magazenon. Li diris, ke estas vere, ke oni ĉiam metas la alvenintajn
			poŝtaĵojn sur tiun meblon, ĝis la koncerna persono havas tempon
			okupiĝi pri ili. Neniam estas facile trovi momenton por la poŝtaĵoj,
			en tiu magazeno, ĉar la personoj, kiuj tie laboras, ne estas sufiĉe
			multaj rilate al la laboro, kiu devas esti farata.</p>
			<p>
			La demando, kiun mi starigas al mi, estas: kial diable oni sendis tiel
			gravan planon per la poŝto? Tiuj, kiuj sendis ĝin, certe sciis, ke
			spionoj interesiĝos pri ĝi. La spionoj povus havi kunlaboranton en
			la poŝtejo, en la paperejo aŭ aliloke. Tiuj, kiuj sendis la planon,
			agis plej malserioze. La afero estas tiom pli nekomprenebla, ĉar oni
			sciis, ke tiu plano interesas same la dekstrulojn kiel la
			maldekstrulojn. Tiu papero havis — oni diras al ni — internacian
			gravecon. Kaj oni sendas ĝin poŝte al papermagazeno! Konsentite, en
			la papervendejo, nekonate, kaŝe troviĝas unu el la ĉefaj
			kunlaborantoj de la Sekreta Servo, sed tamen!</p>
			<p>
			Stranga maniero agi, ĉu ne?</p>
			<p>
			Nu, kiel mi diris al vi, Ivo tute malkonsentas kun la policaj ideoj
			ĉi-rilate. Tiutage, li iris aĉeti panon en la panejo, kiu staras tuj
			apud la papervendejo, kaj li tie troviĝis, kiam la suspektato
			envenis, kaj ankaŭ kiam tiu foriris kaj eniris la apudan magazenon
			por aĉeti siajn papersakojn.</p>
			<p>
			La polico opiniis tre grava la trovon de eta-etaj panpecetoj en la
			papervendejo, ĉe la maldekstra flanko, apud la meblo, pri kiu oni
			tiom parolas. Kiam ĝi eltrovis, ke la suspektato iris aĉeti panon
			tuj antaŭe, ĝi ege kontentis, kvazaŭ tiu malkovro donus respondon
			al la multaj demandoj, kiujn oni povas starigi al si en tiu stranga
			afero. Kial tiom da bruo pri tio? La suspektato neniam neis, ke li
			iris de la panejo al la papermagazeno.</p>
			<p>
			Ivo estis en tiu panvendejo kaj diskutis kun la vendistino. Li
			diskutadis longe, ĉar li havas al ŝi amkomenceton kaj plezure
			longigis sian restadon apud ŝi. Tiu kompatinda homo, kiu poste
			aĉetis la papersakojn, do estis en la panejo, sed lia ĉeesto tie ne
			sufiĉas por povi diri, ke li faris ion malbonan poste en la apuda
			magazeno, ĉu? Kiu povas diri, ke unu el la vendistoj ne havis pecon
			da pano en la paperejo?</p>
			<p>
			Ivo bone rigardis la personon, kiun la polico poste eksuspektis. Iu,
			kiu volas fari ion suspektindan, ne agas tiamaniere, li diris.</p>
			<p>
			Kion? Ĉu vi ne sciis, ke Ivo ametas la junan panvendistinon? Nu, tio
			estas fakto. Ili iris kune trinki teon en «La dolĉa vivo». Ĉu vi
			konas? Estas tiu tetrinkejo, kie ili havas kvardek kvar specojn de
			teo. Ĝi troviĝas dekstre de la Ĉefa Poŝtoficejo. Li sidis tie kun
			sia panvendistino, kiam la suspektato envenis la tetrinkejon, portante
			la papersakojn, kiujn li aĉetis antaŭ kelkaj minutoj. Estis la horo,
			kiam ĉiuj magazenoj fermiĝas. Kaj oni suspektas tiun viron ĝuste
			ĉar neniu plu venis en la papervendejon inter lia foriro kaj la
			momento, kiam oni fermis la magazenon.</p>
			<p>
			Nu, mi ne diras, ke Ivo tute ne povus miskompreni la faktojn. Sed
			miaopinie li estas plej fidinda homo. Mi kredas lin multe pli ol la
			policon.</p>
			<p>
			Fakte, la plej stranga afero, en lia raporto al mi, estas, ke, en kiu
			ajn magazeno aŭ trinkejo li troviĝas, tuj post li envenas la
			suspektata persono. Kvazaŭ tiu sekvus lin. Mirige, ĉu ne? Tamen,
			Ivo ne estas aventurulo, kiu enmiksus sin en spionajn agadojn. Mi
			demandos lin, kion li opinias pri tiu fakto, ke la papersakulo tiom
			sekvis lin. Mi ne rimarkis la aferon, kiam li raportis al mi tiujn
			okazaĵojn hieraŭ. Nur rakontante al vi, mi ektrovis tion miriga.</p>
			<p>
			Alian informon mi devos ricevi de li. Mi devos demandi lin, kie li
			aĉetas tiujn dolĉaĵojn, kiujn li hieraŭ alportis. Estas speco de
			ĉokoladhava sukeraĵo, tre dolĉa, kion mi ege ŝatas, kaj mi ŝatus
			scii, kie oni ilin vendas. Mi bedaŭras, ke restas neniu plu. Mi jam
			finis la tutan saketon, tiom bonaj mi ilin trovis. Jes, bedaŭrinde,
			nenio postrestas el ili. Se vi provus ilin, vi trovus ilin bonegaj.</p>
			<p>
			Eble ne, fakte, ĉar niaj preferoj tiom malsamas. Estas stranga speco
			de ĉokolada dolĉaĵo. Ion similan mi neniam ricevis aŭ aĉetis
			antaŭe. Ne estas tro da ĉokolado, sed certe multe da sukero, tiel ke
			ĝi estas dolĉega. Jes, bonegaj dolĉaj aĵetoj tiuj sukeraĵoj
			estas.</p>
			<p>
			Kiel diable Ivo faras por trovi tiajn nekutimajn, sed bonegajn,
			aferojn? Vere, li estas karulo, eĉ se liaj okuloj rigardas
			malsamflanken, kaj se lia nazo estas ridinde mallonga. Vi samopinias
			kun mi, ĉu ne, Johana?</p>
			
			<a id="dua" class="scrollspy"></a>
						<fieldset class="sono">
				<legend>Aŭskultu tiun rakonton:</legend>
				<p>
					<audio id="audioPlayer" controls="controls" type="audio/mpeg">
						<source type="audio/mp3" src="audio/lasumin15b.mp3" />
					</audio>
				</p>
			</fieldset>			<h3>Du raportoj pri vendado</h3>
		
			<p>Sinjoroj, mi bedaŭrinde devas diri, ke la raporto pri la vendado de
			dolĉaĵoj tute ne estas fidinda. La funkciulo, kiu faris ĝin, estis
			tro memfida. Li konsideris fakte nur unu specon de dolĉaĵoj —
			tiujn, kiuj enhavas ĉokoladon — kaj li imagis, ke li povas esprimi
			ĝustajn opiniojn deirante nur de la informoj, kiujn li havigis al si
			pri tiuj.</p>
		
			<p>Estas vere, ke ĉokolado estas unu el la ĉefaj aĵoj, kiuj eniras en
			la faradon de dolĉaĵoj. Aŭ almenaŭ, oni povas diri, ke ĉokolado
			estas grava enmetaĵo — en dolĉaĵojn — se oni konsideras la
			demandon tutnacie. La afero montriĝas malsama, se oni konsideras nur
			unu urbon, kelkajn urbojn, la tutan nacion, kelkajn naciojn aŭ la
			tutan mondon. Inter tiu, tiu ĉi kaj tiu alia urbo, oni povas rimarki
			seriozajn malsimilecojn en la maniero kunmeti la dolĉaĵojn. Mi do
			petas vin ne forgesi, ke, en ĉi tiu diskuto, ni restas sur la
			tutnacia kampo. La situacio tute certe malsamus ankoraŭ pli, se ni
			rigardus ĝin internacie.</p>
		
			<p>Kvankam do — se ni konsideras la tutan nacion — ni devas konsenti
			pri la ĉefa loko, kiun okupas la ĉokoladhavaj dolĉaĵoj inter la
			tuto de la dolĉaĵoj, tamen ni ne povas akcepti raporton, kiu diras
			eĉ ne unu vorton pri, ekzemple, dolĉaĵoj faritaj el pura sukero kun
			iu aŭ alia aldonaĵo neĉokolada.</p>
		
			<p>La aferoj ne estas tiel simplaj, kiel ilin klarigas ĉi tiu raporto,
			kaj se ni deziras scii, kiel la situacio vere estas, ni devas proponi
			al iu alia, al iu pli fidinda, la taskon raporti pri la tutnacia
			dolĉaĵvendado.</p>
		
			<p>Kaj nun, se neniu petas la parolon rilate al ĉi tiu demando...
			ŝajnas, ke ne... neniu mano altiĝas... se neniu deziras esprimi sian
			opinion pri la dolĉaĵdemando, mi proponas, ke ni ekdiskutu la duan
			raporton, tiun pri la vendado de pano.</p>
		
			<p>Ankaŭ sur tiu kampo ne estas tiel facile ricevi la deziratajn
			informojn. Mi ne parolas pri tia flanka demando kiel la fakto, ke la
			peto de la panfaraj laboristoj pri mallongigo de la nokta labortempo
			ricevis jesan respondon. Mi konsideras tiun demandon flanka. Kaj mi ne
			priparolos ĝin, kvankam ni nun scias, ke estas rilato inter tiu
			decido kaj la malaltiĝo rimarkita ĉi-urbe en la vendado de la plej
			kutimaj specoj de pano. Evidentiĝis, ke la horo, ekde kiu la pano
			estas aĉetebla, frumatene, havas pli grandan gravecon ol oni antaŭe
			imagis.</p>
		
			<p>Mi do diris, ke mi ne parolos nun pri la kampo de laborrilatoj. Mi
			volas komence tuŝi nur la monan aspekton de la demando. Kaj
			ĉi-rilate mi povas diri nur unu aferon, nome, ke la situacio estas
			plej serioza.</p>
		
			<p>Vi povas fidi min, sinjoroj, ĉar mi konsideris tiun raporton tre
			atente, kaj tre zorgiga ĝi estas. Vi certe konatiĝis kun la
			informoj, kiujn enhavas la raporto pri panvendado, kaj vi verŝajne
			samopinias kiel mi, ĉu ne? Tiu raporto estas ege interesa, sed tute
			ne trankviliga. Kiu ajn portas en sia koro la interesojn de la nacio
			sentos la saman zorgemon. Jen estas serioza situacio, pri kiu estas
			urĝe okupiĝi.</p>
		
			<p>La panistoj plendas, ke ili ne ricevas sufiĉe da mono por la vendata
			pano, almenaŭ kiom koncernas la plej ofte vendatan specon, sed kion
			ni povus fari sen endanĝerigi la tutan nacian vivon?</p>
		
			<p>Ni ne trovis manieron kunordigi la malsamajn emojn de la koncernatoj,
			kaj ni troviĝas en sakstrato<A HREF="#notoj">[1]</A>, en sen-elira situacio. La etaj
			panvendistoj petas ion, la ĉiovendejoj<A HREF="#notoj">[2]</A> kaj aliaj grandegaj
			magazenoj volas ion alian, tiuj, kiuj aĉetas la panon havas ankoraŭ
			alian deziron, kaj kiam la panfaraj laboristoj intervenis dirante, ke
			neniu el miaj proponoj estas kontentiga por ili, mi troviĝis subite
			kun tia kapdoloro, ke mi tute simple ne plu povis pensi.</p>
		
			<p>Mi, kiu ĉiam ŝategis panon, jam plurajn tagojn vivas sen tuŝi eĉ
			unu panpecon. Kaj la nura sono de la vorto «pano» agas al mi
			malsanige.</p>
		
			<p>Trovi respondon al tiuj demandoj estas pli ol oni povas peti de mi
			sola. Mi do kunvokis vin al ĉi tiu kunsido, por ke ni diskutu plej
			serioze la demandon. Mi esperas, ke dank'' al via helpo, estos eble
			surpaperigi proponojn, kiujn la tuta nacio povos akcepti. Nur unu
			afero estas certa, nome, ke se iuj enpoŝigos pli da mono ol antaŭe,
			sekve de niaj decidoj, tiuj estos nek vi, nek mi.</p>
		
			<p>Kaj nun, se vi permesas, sinjoroj, mi trinkos iom da akvo.</p>
		
			<a id="notoj"></a>
			<p class="rimarko"><strong>NOTOJ</strong> : 
			<ol>
				<li><span class="eo">Sakstrato</span> : strato sen elirejo (kiel sako, el kiu io povas eliri
				nur tra la loko, tra kiu ĝi eniris).</li>
				<li><span class="eo">Ĉiovendejo</span> : vendejo, en kiu oni vendas multajn malsamspecajn
				aferojn (ekzemple : manĝaĵon, vestaĵojn, librojn, televidilojn...)</li>
			</ol>'
  WHERE l.kurso = 'GR' AND l.numero = 15 AND le.ordo = 5;

-- leçon 15, section 6
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##RESUMO##'
  WHERE l.kurso = 'GR' AND l.numero = 15 AND le.ordo = 6;

-- leçon 16, section 1
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<fieldset class="sono">
				<legend>Aŭskultu tiun rakonton:</legend>
				<p>
					<audio id="audioPlayer" controls="controls" type="audio/mpeg">
						<source type="audio/mp3" src="fr/gerda/son/gerda/gerda16.mp3" />
					</audio>
				</p>
			</fieldset>
			<h3>Eble li ne estas via blondulo</h3>
			<div class="row dialogo">
				<div class="col s12 m8">
					<p>"Kie mi estis en mia raporto? Ha jes! Mi memoras. Li eliris el
					tiu vendejo kun papera sako ŝajne plena je dolĉaĵoj."</p>
					<p>"Eble estis ĉefe pano."</p>
					<p>"Prave, eble pano. Ĉiaokaze, jen mi ekvidis lian aŭton, kiu
					staris flanke de la strato. Mi pensis: nun li forveturos aŭte, kaj mi
					ne plu povos sekvi lin. Sed ne. Li nur iris porti tiun sakon al la
					aŭto, ĝin metis en ĝin, reŝlosis la aŭtopordon, kaj plu piediris.
					Nur tiam mi havis la ideon noti la numeron de lia aŭta numerplato. Mi
					do eksekvis lin plu. Li paŝis sur la dekstra flanko de la strato, kaj
					mi sekvis iom malproksime sur la maldekstra flanko."</p>
					<p>"Ĉu li rimarkis, ke vi lin sekvas?"</p>
					<p>"Certe ne. Subite, li eniris restoracion. Mi hezitis: ĉu
					ankaŭ mi eniru? Aŭ ĉu mi tro riskos, ke li vidos kaj rekonos min?
					Unuflanke, mi deziris spioni lin. Aliflanke, la risko, ke li rekonos
					min, estis reala, kaj min ĝenis. Dum mi staris tie hezitante, eniris
					la restoracion grupo da soldatoj, eble ok aŭ naŭ, junaj viroj, kiuj
					militservis, videble. Dum ili eniris kaj la pordo estis malfermita, mi
					vidis, ke la restoracio estas granda kaj plena je homoj. Mi sekvis la
					ok aŭ naŭ soldatojn kaj trovis sidlokon ne tre videblan de la loko,
					kie mia blondulo ĵus eksidis."</p>
					<p>"Li do estas <i>via</i> blondulo, ĉu?"</p>
					<p>"Ne parolu malsaĝe. Vi perfekte scias, kion mi volas diri.
					Estis turka aŭ pseŭdoturka restoracio, kun stranga muziko kaj
					strangaj vestaĵoj. La kelneroj estis vestitaj per t.n. (=tiel nomataj)
					naciaj vestoj multkoloraj. Mi manĝis bonegan supon, sed poste ion, pri
					kio mi ankoraŭ nun min demandas, ĉu estis pecoj el hundo aŭ kato.
					Certe ne estis kokidaĵo, sed krom tio mi havas neniun certecon. Ankaŭ
					la salato estis tre bona, sed la kuko estis treege dolĉa, tro dolĉa
					por mi, kaj same la turka kafo; ĝi estis nekredeble plena je sukero,
					kaj mi manĝis tiom da kafpulvoro, kiom mi trinkis da kafo."</p>
					<p>"Mi miras pri la grava loko, kiun konsideroj pri manĝo kaj
					trinko okupas en via spionraporto. Mi atendis aventurojn, sed venas
					ĉefe menuoj."</p>
				</div>
				<div class="col s12 m4">
					<img src="fr/gerda/bildoj/gerda16-1.gif" class="responsive-img">
				</div>
			</div>

			<div class="row dialogo">
				<div class="col s12 m8">
					<p>"Ne ridu pri mi, aŭ mi ne daŭrigos la rakonton. Okazis io.
					Du el la soldatoj estis furiozaj, ĉar la kelnero ne volis porti al ili
					bieron. Ili faris bruegon, kriegis, kriaĉis, la aliaj provis ilin
					silentigi, kaj finfine speco de milito komenciĝis inter ili. Ili
					ekbatis unu la alian kun rimarkinda forto. Subite, jen unu telero
					flugis tra la aero, poste du, tri, kvar, kvin aliaj teleroj, unu taso
					eĉ flugis ĝis la plafono..."</p>
					<p>"Kia ĝojo! Kia plezuro! Kiajn perfektajn amikojn vi trovis!"</p>
					<p>"Ĉefe, kia bruo! Ŝajnis, ke ili rompas mil glasojn samtempe,
					dum cent viroj kune kriaĉas, kaj dek muzikistoj provas kune superi la
					bruon de la telera milito."</p>
					<p>"Tre bela atmosfero, ĉu ne? Mi gratulas vin. Estis kuraĝe
					resti tie."</p>
					<p>"Jes. Kia vivo! Cetere, mi estas kuraĝa, ĉu vi neniam
					rimarkis?"</p>
					<p>"Mi ne konas vin sufiĉe, sed via kuraĝo ne mirigas min.
					Bela, kuraĝa, riskema, aventurema, bonkora: vi estas la perfekta
					virino. Sed pri via perfekteco ni havos aliajn okazojn paroli. Kio
					okazis post la telera, glasa kaj turkakafa milito?"</p>
					<p>"Mi rimarkis tre bedaŭrindan aferon, nome, ke la blondulo ne
					plu troviĝas en la restoracio. Li certe foriris, dum mi tiom
					interesiĝis pri la intersoldata milito. Mi vere bedaŭras mian mankon
					de observemo. Sed kion fari? Bedaŭri ne helpas. Mi fuŝis mian taskon.
					Mi provos ne fuŝi ĝin alian fojon."</p>
					<p>"Nu, prave, estas tre bedaŭrinda afero. Eĉ se nur ĉar ĝi
					montras, ke vi tamen ne estas plene perfekta. Sed mi almenaŭ ĝojas
					pri unu afero: vi fakte ne tiom interesiĝis pri <i>via</i> blondulo. Do
					eble vi pravas, eble li ne estas <i>via</i> blondulo, eble vi tamen preferas
					vian karan brunharan amikon Tom."</p>
					<p>"Eble, eble. Sed ĉu vi vere scias, kial mi forturnis miajn
					okulojn de tiu blondulo, kvankam mi antaŭe decidis plej multe
					informiĝi pri li?"</p>
					<p>"Nu, verŝajne ĉar…"</p>
					<p>"Ĉar unu el tiuj junaj soldatoj estis tiel bela viro!"</p>
				</div>
				<div class="col s12 m4">
					<img src="fr/gerda/bildoj/gerda16-2.gif" class="responsive-img">
				</div>
			</div>'
  WHERE l.kurso = 'GR' AND l.numero = 16 AND le.ordo = 1;

-- leçon 16, section 2
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<section class="klarigo">
	
				<h4>-aĉ-: <i>donne une nuance de mépris</i></h4>
		
				<p><span class="eo">domo</span> : maison → <span class="eo">domaĉo</span> : taudis</p>
				<p><span class="eo">hundo</span> : chien → <span class="eo">hundaĉo</span> : cabot</p>
				<p><span class="eo">ridi</span> : rire → <span class="eo">ridaĉi</span> : ricaner</p>
		
				<h4>-ido : <i>progéniture des animaux</i></h4>
		
				<p><span class="eo">koko</span> : coq → <span class="eo">kokido</span> : poulet →
				<span class="eo">kokidaĵo</span> : viande de poulet (<span class="eo">kokino</span> : poule)</p>
				<p><span class="eo">porko</span> : porc → <span class="eo">porkido</span> : porcelet 
				(<span class="eo">porkaĵo</span> : du porc, <span class="eo">porkino</span> : truie&nbsp;; <span class="eo">virporko</span> : verrat)</p>
				<p><span class="eo">bovo</span> : bœuf → <span class="eo">bovido</span> : veau 
				→ <span class="eo">bovidaĵo</span> : du veau&nbsp;; <span class="eo">bovaĵo</span> : 
				bœuf (la viande)&nbsp;; <span class="eo">bovino</span> : vache&nbsp;; <span class="eo">virbovo</span> : taureau</p>
				<p><span class="eo">ĉevalo</span> : cheval → <span class="eo">ĉevalido</span> : poulain&nbsp;; <span class="eo">ĉevalino</span> : jument&nbsp;; <span class="eo">virĉevalo</span> : étalon</p>
		
				<p><span class="eo">mil naŭcent naŭdek du</span> : 1992</p>
				<p><span class="eo">dek du mil</span> : 12 000</p>
				<p><span class="eo">kvincent kvindek kvin</span> : 555</p>
		
				<h4>kiu (<i>identité</i>) / kia (<i>qualité</i>)</h4>
		
				<p><span class="eo">Kiu li estas? - Jozefo</span> : Qui est-il? - Joseph.</p>
				<p><span class="eo">Kia li estas? - Bonkora</span> : Quel genre d''homme est-il? - Un bon cœur.</p>
				<p><span class="eo">Kio li estas? - Raportisto</span> : Qu''est-il? - Un reporter.</p>
		
				<p><span class="eo">Kiun libron vi legas? - Gerda malaperis.</span> : Quel livre lis-tu ? - Gerda malaperis.</p>
				<p><span class="eo">Kian libron vi legas? - Lernolibron.</span> : Quelle sorte de livre lis-tu ? - Un manuel.</p>
		
				<p>Notez que <span class="eo">okazo</span> s''utilise dans trois sens : (1) événement&nbsp;; (2) cas&nbsp;; (3) occasion, opportunité</p>
				
				<h4>Kelkaj vortoj pri la lingvo</h4>
				
				<p class="parto">Nun vi devas lerni kelkajn novajn vortojn. La unua vorto verŝajne ne
				estas por vi nova; ĝi estas la vorto <span class="eo">ESPERANTO</span>. Se vi tion ne jam
				sciis, nun mi informas vin: Esperanto estas la nomo de tiu ĉi lingvo, kiun vi nun lernas.</p>
				<p>Ne ridu tro pri tiu klarigo! En kelkaj lingvoj Esperanto ja havas
				alian nomon. Ekzemple, en la lingvo, kiun parolas pli da homoj ol iun
				alian lingvon en la mondo, Esperanton oni nomas <em>shi4 jie4 yu3</em>. Ĉu
				vi tion jam sciis? Mi gratulas! Aŭ ĉu eble tiu granda lingvo estas via lingvo?</p>
				<p>
				La aliaj vortoj, kiujn mi volas nun klarigi, estas vortoj, kiuj helpos nin paroli pri la lingvo.
				
				<p class="parto">Ekzistas en Esperanto kvar grandaj vortklasoj (vortospecoj):</p>
				<p><b>Substantivoj (o-vortoj)</b>, kiuj montras aĵojn: tabl<b>o</b>, knabin<b>o</b>, spegul<b>o</b>, liber<b>o</b>, am<b>o</b>, …</p>
				<p><b>Adjektivoj (a-vortoj)</b>, kiuj montras ecojn: bel<b>a</b>, jun<b>a</b>, grand<b>a</b>, student<b>a</b>, kaŝ<b>a</b>,… </p>
				<p><b>Verboj</b> (kun finaĵoj <b>-i</b>, <b>-is</b>, <b>-as</b>, <b>-os</b>, <b>-u</b>, <b>-us</b>), kiuj montras agojn aŭ situaciojn: est<b>i</b>, sci<b></b>i, rigard<b>i</b>, proksimig<b>i</b>, amikiĝ<b>i</b>, …</p>
				<p><b>Adverboj (e-vortoj)</b>, kiuj montras manierojn: tut<b>e</b>, komprenebl<b>e</b>, verŝajn<b>e</b>, fakt<b></b>e, kaŝ<b>e</b>, … </p>
				<p class="parto">Aliaj vortklasoj, pri kiuj ni volos paroli, estas:</p>
				<p><b>Prepozicioj</b>, kiuj montras rilatojn: de, al, kun, pri, da, …</p>
				<p><b>Pronomoj</b>, kiuj resendas al substantivoj: mi, ni, vi, li, ŝi, ĝi, ili, si, oni.</p>
				<p><b>Artikolo</b>, kiu montras konatecon: la.</p>
				
				<h4>Diferenco inter <b>kia</b> kaj <b>kiel</b></h4>
				
				<p>Nun ni povas klarigi, kiel <b>kia</b> kaj <b>kiel</b> estas malsamaj.</p>
				
				<p>Per <span class="eo">kia</span> oni demandas pri eco, do pri adjektivo (a-vorto).</p>
				<p>Per <span class="eo">kiel</span> oni demandas pri maniero, do pri adverbo (e-vorto).</p>
				<p class="eo"><b>Kia</b> estas via amiko? - Li estas bel<b>a</b>.</p>
				<p class="eo"><b>Kiel</b> vi manĝas? - Mi manĝas malrapid<b>e</b>.</p>
				<p class="eo">Ŝia vizaĝo subite iĝis ruĝ<b>a</b>.</p>
				<p class="eo"><b>Kia</b> ĝi iĝis? - Ĝi iĝis ruĝ<b>a</b>.</p>
				<p class="eo"><b>Kiel</b> ĝi iĝis ruĝa? - Subit<b>e</b>.</p>

			</section>'
  WHERE l.kurso = 'GR' AND l.numero = 16 AND le.ordo = 2;

-- leçon 16, section 3
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<p class="eo eta">Ces mots seront automatiquement ajoutés à votre vocabulaire à réviser lorsque vous aurez terminé d''étudier cette section.</p>
			
			<div class="vortlisto row">
				<div class="col s12 l6">
					<p><span class="eo">aĉa</span> : méprisable, piètre, vil</p>
					<p><span class="eo">alifoje</span> = <span class="eo">ali</span>- + -<span class="eo">foj</span>- + -<span class="eo">e</span></p>
					<p><span class="eo">aliflanke</span> = <span class="eo">ali</span>- + -<span class="eo">flank</span>- + -<span class="eo">e</span></p>
					<p><span class="eo">atmosfero</span> : atmosphère</p>
					<p><span class="eo">bonkora</span> : qui a bon cœur, charitable</p>
					<p><span class="eo">bruna</span> : marron</p>
					<p><span class="eo">biero</span> : bière</p>
					<p><span class="eo">finfine</span> : finalement, en fin de compte</p>
					<p><span class="eo">flugi</span> : voler</p>
					<p><span class="eo">fojo</span> : fois, occasion</p>
					<p class="sekva tab"><span class="eo">tri fojojn</span> : trois fois</p>
					<p class="sekva tab"><span class="eo">unufoje</span> : une fois</p>
					<p><span class="eo">furioza</span> : furieux, -euse</p>
					<p><span class="eo">gratuli</span> : féliciter</p>
					<p><span class="eo">grupo</span> : groupe</p>
					<p><span class="eo">hundo</span> : chien</p>
					<p><span class="eo">je</span> : préposition indéfinie</p>
					<p><span class="eo">ĵus</span> : à l''instant, justement</p>
					<p><span class="eo">kato</span> : chat</p>
					<p><span class="eo">kelnero</span> : serveur, garçon de café</p>
					<p><span class="eo">kia</span> : quel, quelle sorte de</p>
					<p><span class="eo">koko</span> : coq</p>
					<p><span class="eo">koloro</span> : couleur</p>
					<p><span class="eo">krom</span> : sauf, hormis, excepté</p>
					<p><span class="eo">kuko</span> : gâteau</p>
				</div>
				<div class="col s12 l6">
					<p><span class="eo">kune</span> : ensemble</p>
					<p><span class="eo">kvin</span> : cinq</p>
					<p><span class="eo">manĝi</span> : manger</p>
					<p><span class="eo">menuo</span> : menu</p>
					<p><span class="eo">mil</span> : mille</p>
					<p><span class="eo">milito</span> : guerre</p>
					<p><span class="eo">militservo</span> : service militaire</p>
					<p><span class="eo">muziko</span> : musique</p>
					<p><span class="eo">naŭ</span> : neuf</p>
					<p><span class="eo">noti</span> : noter, prendre note</p>
					<p><span class="eo">numero</span> : numéro (d''une maison, d''un ticket, dans une série, etc.)</p>
					<p><span class="eo">ok</span> : huit</p>
					<p><span class="eo">plafono</span> : plafond</p>
					<p><span class="eo">plato</span> : plaque</p>
					<p><span class="eo">pseŭdo-</span> : pseudo-   [<i><b>psèou</b>-do (ou bref)</i>]</p>
					<p><span class="eo">reala</span> : vrai(e), réel(le), véritable</p>
					<p><span class="eo">rompi</span> : rompre, briser, casser</p>
					<p><span class="eo">salato</span> : salade</p>
					<p><span class="eo">soldato</span> : soldat</p>
					<p><span class="eo">supo</span> : soupe</p>
					<p><span class="eo">telero</span> : assiette</p>
					<p><span class="eo">tri</span> : trois</p>
					<p><span class="eo">turka</span> : turc, turque</p>
					<p><span class="eo">vesti</span> : vêtir, habiller, revêtir</p>
				</div>
			</div>'
  WHERE l.kurso = 'GR' AND l.numero = 16 AND le.ordo = 3;

-- leçon 16, section 4
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##EKZERCO:83##
			##EKZERCO:84##'
  WHERE l.kurso = 'GR' AND l.numero = 16 AND le.ordo = 4;

-- leçon 16, section 5
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<div class="row">
				<div class="col s12">
					<div class="card-panel blue lighten-5">
						En tiu ĉapitro, estas du malsamaj rakontoj de <i>Lasu min paroli plu !</i>.<br>
						<a href="#unua">La vesperfuŝulo</a><br>
						<a href="#dua">Ĉu malĝojon memori aŭ imagi feliĉon?</a>
					</div>
				</div>
			</div>

			<a id="unua" class="scrollspy"></a>
			<h3>La vesperfuŝulo</h3>
			
			<p>Mi furiozas. Refoje<a href=''#notoj''>[1]</a>, Dudi fuŝis la tutan atmosferon en la grupo.</p>
			<p>
			Ni estas grupo de bonaj amikoj, kaj ni kune vespermanĝis tute
			trankvile. Mi eble devas diri, ke la vespermanĝo estas mia preferata
			manĝo. Nek ĉe matenmanĝo, nek ĉe tagmanĝo mi sentas min tiel
			bone, kiel ĉe vespermanĝo. Vespere, almenaŭ en amika domo aŭ en
			bona restoracio, oni sentas specialan atmosferon, kiun mi tre ŝatas.
			Ĉefe kiam ni troviĝas grupe. Grupo da kunmanĝantaj amikoj estas por
			mi feliĉiga realaĵo.</p>
			<p>
			Ni retroviĝas en tiu grupo de tempo al tempo. Temas pri grupo de
			amikoj, kiuj faris kune la militservon. Ni tre ŝatas retrovi unu la
			alian. Niaj vivoj estas tre malsimilaj, ĉar ni havas tre malsamajn
			okupojn. Ronaldo estas laboristo<a href=''#notoj''>[2]</a>, Johano vendisto en meblomagazeno,
			Tom kuracisto, Andreo policisto, Leo direktas grandan paperfarejon,
			Ken havas malgravan seninteresan oficon en la urba administrejo, kaj
			Petro de longeta tempo nun estas senlaborulo. Vi do vidas, ke ni havas
			plezuron diskuti, ĉar niaj travivaĵoj tute ne intersimilas.</p>
			<p>
			Sed la demando ĉiam estas: kiel malhelpi, ke Dudi fuŝu nian
			vesperon. Dudi estas ĝenema. Li trovas sian plezuron en situacioj, en
			kiuj liaj kunuloj malplezuras. Kaj li estigas tiajn situaciojn.</p>
			<p>
			Tamen, li estis dekomence unu el nia grupo. Ni ne povas peti lin ne
			veni. Kion fari?</p>
			<p>
			Ĉi-foje li rekomencis. Komence, ni estis kontentaj, ĉar ni opiniis,
			ke li ne venos. Li venis malfrue, kaj jam furiozis, ke ni komencis sen
			atendi lin. Kiam ni diris, ke ni ĉiam komencas ĝustahore, li
			furiozis. «Mi malfruas, ĉar mi devis labori ĝis malfrue», li diris,
			«kaj vi eĉ ne povis atendi min duonhoreton!» Fakte, li malfruis
			preskaŭ plenan horon.</p>
			<p>
			Poste, li plendis pri la menuo. Li ne ĉeestis en la kunveno — antaŭ
			kelkaj semajnoj — kiam ni interkonsentis pri tio, kion ni manĝos. Mi
			bedaŭras, sed ni decidis unuvoĉe pri la manĝaĵoj. Ni ĉiam provas,
			kiel eble plej bone, ne enmeti manĝaĵon, kiun unu el ni ne ŝatas.
			Sed se, je la momento, kiam ni decidas, unu el la grupo ne aŭdigas
			sin — ekzemple ĉar li forestas, kiel Dudi tiun fojon — ni tamen ne
			povas plene forigi la riskon, ke sur la tablon venos manĝaĵo, kiun
			la koncernato ne ŝatas.</p>
			<p>
			Dudi do plendis pri la menuo. Kutime, li tre ŝatas supon. Sed
			ĉi-foje, kiam li apenaŭ ekmanĝetis iom da supo, jam li komencis
			brue esprimi sian malkontenton. «Mi ne nomas tion ĉi supo», li diris
			tiel laŭte, ke la tuta restoracio aŭdis lin, kvankam nia grupo sidis
			en alia manĝoĉambro, ne en la restoracio mem. Ĝena situacio, ĉu ne?</p>
			<p>
			Estas muzikistoj en la restoracio, kaj, kompreneble, eĉ en nia
			speciala manĝoĉambro ni aŭdis ilin, ĉar tamen ne estis dika ŝtona
			muro inter la ĉefa ejo kaj ni. Nu, la muziko estis tro laŭta kaj tro
			rapida por s-ro <a href=''#notoj''>[3]</a> Dudi. Foje, tuj kiam li aŭdis, ke muzikaĵo ĵus
			finiĝis, li ekstaris, kun furioza esprimo, iris en la restoracion kun
			la irmaniero de gravulo aŭtoritatplena, kaj ekkriis per la aĉa voĉo
			de ulo malbonmaniera: «Gratulon pri la malbela bruo, sinjoroj
			muzikistoj. Kion vi ĵus aŭdigis, tion mi ne nomas muziko, sed bruo.
			Bonvolu meti finon al tiu bruado. Mia kapo doloras dank'' al vi!»</p>
			<p>
			Li kriis tiel malbele, ke li timigis hundon, kiu troviĝis tie kun
			maljuna paro, kaj la hundo respondis al li similvoĉe, tiel ke la tuta
			restoracio ekridis. Kompreneble, tio igis lin eĉ pli furioza. Li
			revenis al nia manĝoĉambro brufermante la pordon plej malĝentile.</p>
			<p>
			Diable! Kia homo! Li igis la atmosferon pli kaj pli peza.</p>
			<p>
			Poste li plendis al la kelnero, ke lia telero ne estas pura. Tion li
			imagis. Lia telero estis perfekte pura. Sed ne eblas diskuti kun li.
			Kiam li decidis, ke jen estas malpura telero, vi povas rigardegi per
			plej larĝaj okuloj, provante trovi eĉ etan peceton da malpuraĵo,
			kvankam ĉio estas plej pura, li tamen montros al vi neekzistantajn
			malpurajn lokojn.</p>
			<p>
			Kaj jen li eligis el sia poŝo pecon de paperaĉo, sur kiu li komencis
			noti siajn plendojn! Por ke ni diskutu la malbonajn flankojn de tiu
			vespero dum nia sekvanta kunsido, li diris. Ĉu vi imagas?</p>
			<p>
			Nu, mi ne povas raporti ĉion al vi. Li trovis la salaton nemanĝeble
			dolĉa, kaj la kukon nemanĝeble maldolĉa, li rompis sian glason
			faligante ĝin furioze, ĉar, laŭ li, la trinkaĵo estis netrinkebla.
			Li parolaĉis al tiu kompatinda kelnero tiel malbele, ke nia tuta
			grupo malkontentis, kaj kelkaj vizaĝoj ruĝiĝis. Sed ni ne sukcesis
			silentigi lin. Apenaŭ oni ne elirigis lin el la restoracio.</p>
			<p>
			Li multe plendis al ni, tute malsaĝe, pri ĉio, kion li ricevis, kaj,
			cetere, pri la tuta loko. «Kiam ni estis kune soldatoj», li diris, «ni
			manĝis pli bone. Kiam ni estis soldatoj, ni ricevadis trinkeblan
			bieron. Kiam ni estis soldatoj, la teleroj ne estis malpuraj. Kiam ni
			estis soldatoj, la kukoj estis kontentige dolĉaj. Kiam ni estis
			soldatoj, la homoj rilatis amike kun ni, dum ĉi tie la kelneroj
			aliras nin malĝentile. Kiam ni estis soldatoj, ni ne devis aŭdi tian
			bruaĉan muzikon. Kiam ni estis soldatoj, ni havis dolĉan vivon».</p>
			<p>
			Kompreneble, ĉio, kion li diris pri nia kuna militservo, estis tute
			nevera. Mi ne scias, ĉu li estis malsincera, aŭ ĉu iu speco de
			forgesemo misaranĝis liajn memorojn, forigante la malbonajn faktojn
			kaj troigante la belajn, sed tio, kion li diris, tute ne esprimas la
			veron. Nia soldata vivo tute ne estis ĝojiga. Estis por multaj el ni
			vere doloraj momentoj en tiu militservo. La daŭra amikeco inter niaj
			samgrupuloj devenas verŝajne de la fakto, ke ni kune travivis multajn
			aĉajn situaciojn, kiuj igis nin pli proksimaj unuj al la aliaj.</p>
			<p>
			Estas plej bedaŭrinde, ke Dudi agis, kiel li faris. Nia bela kuna
			vespero, pri kiu la tuta grupo nur antaŭĝojis, estis fuŝita. Nu, mi
			ne troigu. Ni tamen multe ridis, ni kune kantis fine de la vespero, ni
			rakontis unu al la aliaj ĉiaspecajn aventurojn aŭ travivaĵojn, ni
			estis kontentaj reparoli pri tiu aŭ tiu aspekto de nia militservo. Mi
			do ĝojas, ke mi iris. Sed la vespero estus tiom pli bela sen Dudi!</p>
			<p>
			Ni demandas nin, kiamaniere ni povos fari, ke li ne plu venu al niaj
			kunaj vespermanĝoj. Ni ne plu povas allasi lin. Li vere tro grave
			ĝenas. Ne estis facile komprenigi al la kelneroj kaj al la
			muzikistoj, ke la opinioj de tiu knabaĉo estas liaj opinioj, ne niaj,
			ne tiuj de la tuta grupo.</p>
			<p>
			Estos ĝene reiri al la sama restoracio, kie la kelneroj kaj
			muzikistoj certe memoros la agmanieron de nia kunulo Dudi. Tre
			bedaŭrinda afero. Estas mirige, ĉu ne?, kiel unu sola homo povas
			fuŝi bonan atmosferon por tuta grupo, fuŝi vespermanĝan kunvenon,
			kiu, sen li, estus perfekte amika kaj feliĉiga. Nu, tiel estas.
			Plendi tute ne helpas. Ni esperu, ke simila fuŝo ne reokazos, kiam ni
			refoje aranĝos kunvenon de la grupo.</p>
			
			<a id="notoj"></a>
			<p class="rimarko"><strong>NOTOJ</strong> : 
			<ol>
				<li><span class="eo">Refoje</span> : plian fojon, novan fojon, rean fojon.</li>
				<li><span class="eo">Laboristo</span> : homo perlaboranta sian vivon per laboro ĉefe mana,
				korpa, aŭ mekanika, kiun li faras ne por si mem, sed por la 
				labordonanto, de kiu li pro tio ricevas monon.</li>
				<li><span class="eo">s-ro</span> : sinjoro.</li>
			</ol>

			<a id="dua" class="scrollspy"></a>
			<h3>Ĉu malĝojon memori aŭ imagi feliĉon?</h3>
			
			<p>Ho jes, mi memoras la militon. Sed mi preferas ne paroli pri ĝi. Nur
			tiu, kiu mem travivis militon, scias, pri kio temas. Kaj kredu min, ne
			temas pri ridigaĵo.</p>
			
			<p>Kiam domoj estas rompataj, kampoj fuŝataj, kaj grupoj da soldatoj
			iradas en la stratoj, kun, en la okuloj, miksaĵo el timo kaj malamo,
			la tuta atmosfero de la vivo fariĝas plej aĉa. Krome, oni apenaŭ
			trovas ion por manĝi. Oni manĝaĉas ion ajn. Mi aŭdis pri homoj,
			kiuj manĝis kataĵon, manke de io pli bona. Nur por vivi, ĉu vi
			komprenas?, nur por pluvivi.</p>
			
			<p>Rigardi malplenan teleron, kaj aŭdi la infanojn plore peti
			nehaveblajn manĝaĵojn, enkorpigi al si supon, kiu estas pli akvo ol
			io alia, vesti sin per malnovaj vestrestaĵoj, kunmetitaj pli malpli
			sukcese..., sincere mi ne ŝatis tiun vivon, kaj mi forte esperas, ke
			miaj infanoj neniam travivos ion similan.</p>
			
			<p>Eĉ la malĝojaj okuloj de nia hundo igis nin plej malfeliĉaj, ĉar
			kion ni povis fari? Se la homoj ne havis sufiĉe por manĝi, kiel ni
			povus plenigi la teleron de nia kara, amata, sed kompatinda hundo?</p>
			
			<p>Kia malaminda vivo! Mi neniam komprenos — kiaj ajn la interesoj de
			la nacio — ke homoj povas decidi ek-estigi militon. Kiom ajn alte ili
			staras en la direktado de la nacio. kiom ajn klare ili povas vidi la
			internaciajn rilatojn, aŭ la tutmondan situacion, tamen...</p>
			
			<p>Mi scias, ke la aferoj ne estas tiel simplaj, kiel ili aspektas en
			interparolo kun kafeja kelnero. Sed tiu decido ŝajnas al mi tiel
			grava, ke mi ne komprenas, kiel homo kuraĝas fari ĝin. Mi persone ne
			estus sufiĉe maltima, eĉ se mi havus la devon direktadi de plej alte
			la aferojn de miaj samnaciuloj.</p>
			
			<p>Decidi, ke oni ekmilitos, kia decidaĉo! Sendi la junulojn al morto
			jam estas aĉa decido, sed sendi ilin al mortigo — sendi ilin mortigi
			aliajn junulojn, kaj ankaŭ homojn nejunajn — ŝajnas al mi eĉ pli
			neakcepteble. Scii, ke oni estigos doloron en miloj kaj miloj da
			homoj, ke miloj kaj miloj da homoj maldormos dum noktoj kaj noktoj,
			ĉar ili estos tro malfeliĉaj aŭ tro zorgoplenaj por trovi la
			trankvilon, sen kiu oni ne povas ekdormi. Vere, mi ne povus.</p>
			
			<p>Sed, se vi permesas, ni parolu pri io alia. Estas multaj ĝojigaj
			aspektoj en la vivo. Kial ne paroli pri io ridiga, aŭ feliĉveka?
			Milito estas tiel brunaĉa, senkolora temo. Aŭ eble vi preferus diri:
			koloraĉa.</p>
			
			<p>Ĉi-foje, mi preferus, ke ni pensu pri la beleco de la kampoj, la
			plezuro promeni surmonte aŭ la afabla vizaĝo de la kelnerino, kiu
			servis al ni tiel bonan kukon en la kafejo, kie ni estis posttagmeze.
			Milito alportas al la homoj nenion, krom doloro kaj malfacilaĵoj.
			Ĉio fariĝas malsimpla dum milito.</p>
			
			<p>Jes, ni parolu pri io alia. Ni lasu nian imagon ekflugi alten en la
			aero, estigi mondon de beleco kaj rido, de amo kaj feliĉo. Ĉu
			gravas, se tiu mondo ne ekzistas? Ne; ĉu? Gravas, ke ni estigu en
			ni iun atmosferon, por ĝojigi nin kaj forgesigi al ni la
			malamindaĵojn de l'' milito.</p>
			
			<p>Laŭ mia opinio, estas saĝe fojfoje tiel ekflugi image. Lasi la
			imagon funkcii mem, lasi penson venigi penson, imagaĵon sekvi
			imagaĵon, nur por la plezuro forgesi la mondon, en kiu ni vivas, kaj
			ĝiajn dolorajn aspektojn. Ĉu vi trovas, ke tio estas forkuri for de
			la realeco? Laŭ vi ne estas tre bone, fidi al sia imago kaj prikanti
			enpense belecojn nerealajn, ĉu? Vi malpravas, laŭ mia sento.
			Elpensi aliajn mondojn, en kiuj la vivo estus pli feliĉa kaj la homoj
			pli bonkoraj unuj al la aliaj, tio ne estas la samo, kiel intermiksi
			en sia pensado tiujn imagitajn mondojn kun la vivo ĉi-ekzista. Eble,
			se oni farus tion multfoje, tio estus malsaĝa. Sed kelkfoje, kiam
			venas okazo, kial ne?</p>
			
			<p>Kaj eĉ se tio estas forkuri el la realeco, forflugi en imagitan
			mondon, ĉar la reala ŝajnas al ni tro aĉa, kial tion ne fari
			fojfoje? Se tion farante ni retrovas forton kaj kuraĝon, por aliri
			sentime la verajn demandojn de la realo, kial sin forturni de ĝi?</p>
			
			<p>Evidente, la situacio estus tute malsama, se temus pri kutimo tiel
			forta, ke oni ne plu povus pensi realece. Sed se ni ne perdas nian
			bonan rilaton kun la realo, miaopinie, ni povas sendanĝere nin
			fordoni al tiu ludo.</p>
			
			<p>Homoj ne sufiĉe ludas, niaepoke, laŭ mia maniero rigardi la vivon.
			Por mi, ludo estas tre grava, ĉu ne por vi? Ludo alportas ĝojon kaj
			ridon, dum ĉiama seriozeco estigas ian mankon de vivo en la homo.</p>
			
			<p>Mi ne volas diri, ke oni aliru siajn taskojn kaj devojn malserioze, ne
			zorgante pri tio, ĉu tio, kion oni faras, estos vere kontentiga aŭ
			ne. Ne diru, ke mi proponas al la homoj iĝi grandaj fuŝemuloj. Tute
			ne.</p>
			
			<p>Nur tion mi diras, ke aliri la realon iom lude, ride, aŭ almenaŭ
			ridete, estas pli feliĉige por ni mem kaj por la aliaj ol ĉiam
			komenci taskon kun plendo kaj ĝememo. Ĉu vi konsentas?</p>
			
			<p>Ne? Kiel strange! Sed, se vi vere malkonsentas, kial do vi ridetas?
			Vi eĉ ridas! Tamen la demando estas serioza. Kaj se vi malkonsentas,
			via opinio povas nur esti, ke seriozajn demandojn oni priparolu
			senride.</p>'
  WHERE l.kurso = 'GR' AND l.numero = 16 AND le.ordo = 5;

-- leçon 16, section 6
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##RESUMO##'
  WHERE l.kurso = 'GR' AND l.numero = 16 AND le.ordo = 6;

-- leçon 17, section 1
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<fieldset class="sono">
				<legend>Aŭskultu tiun rakonton:</legend>
				<p>
					<audio id="audioPlayer" controls="controls" type="audio/mpeg">
						<source type="audio/mp3" src="fr/gerda/son/gerda/gerda17.mp3" />
					</audio>
				</p>
			</fieldset>
			<h3>Mi solvos la problemon</h3>
			<div class="row dialogo">
				<div class="col s12 m8">
					<p>"Sed kial, kial, kial?" diris la policano preskaŭ krie al sia
					edzino, kiu estis lia plej helpema kunlaboranto. "Diru al mi kial, kaj
					mi solvos la problemon. Oni ne kaptas homon por la simpla plezuro
					travivi aventuron! Ŝi ne estas riĉa. Ne kun la espero ricevi monon
					ili ŝin kaptis. Ŝi ĉiam vivis plej trankvilan, honestan vivon. Do,
					ne ĉar ŝi enmiksis sin en iun kriman agadon ili ŝin kaptis. Pro kio
					do? Por kio?"</p>
					<p>"Ŝi instruas, vi diris al mi. Kion do ŝi instruas? Kio estas
					ŝia fako?"</p>
					<p>"Ŝi instruas historion, sed ŝi estas specialisto pri la
					sekretaj lingvoj de la dek-sepa kaj dek-oka jarcentoj."</p>
					<p>"Pro tio verŝajne ŝi malaperis, sed ni ne trovos la motivon
					uzante nur nian imagon. Ni prefere uzu la faktojn. Ni provu kunmeti
					ilin, rekunmeti la sinsekvon de la okazaĵoj. Kiel la afero
					komenciĝis?"</p>
					<p>"Ni ne scias multon. Mi raportu jene. Du gestudentoj -- Tom kaj
					Linda -- rimarkis, ke alta blondulo metas ion en la tason de Gerda. Ili
					rimarkis pro lia kaŝa, ŝtela maniero agi. Iom poste, Gerda eliras el
					la memserva restoracio tra la pordo koridora.  Tuj poste aŭdiĝas
					bruo, kvazaŭ iu falus. Bob, kiu aliĝis al Tom kaj Linda intertempe,
					eliras kune kun Tom. Ili trovas Gerdan en la koridoro: ŝi kuŝas
					senkonscia. Tom foriras serĉe al helpo, dum Bob gardas la junan
					profesorinon. Kiam Tom revenas kun la flegistino, Gerda malaperis, sed
					ĉi-foje Bob estas senkonscia, batita al-kape.  Intertempe la blondulo
					eliris tra la alia pordo de la memserva restoracio, kaj sekvis Linda.
					Ŝi sukcesas kunveturi en lia aŭto, sed ne sukcesas igi lin diri ion
					helpan. Tamen ŝi notas la numeron, markon kaj tipon de la aŭto..."</p>
				</div>
				<div class="col s12 m4">
					<img src="fr/gerda/bildoj/gerda17-1.gif" class="responsive-img">
				</div>
			</div>

			<div class="row dialogo">
				<div class="col s12 m8">
					<p>"Ĉu la aŭto estis lia? Ĉu ne estis ŝtelita veturilo?"</p>
					<p>"Ne. Verŝajne li ne suspektis, ke iu suspektos ion. Kiam ŝi
					petis, ke li veturigu ŝin, tio al li ne plaĉis, sed li verŝajne
					opiniis, ke estos eĉ pli suspekte malakcepti ŝin."</p>
					<p>"Vi do scias, kiu li estas, ĉu ne?"</p>
					<p>"Jes, ni kontrolis. Estas la frato de fraŭlino Marta, unu el
					la universitataj flegistinoj, tiu, kiun Tom venigis."</p>
					<p>"Interese! Plej interese! La gefratoj eble kunlaboras en iu
					malhonesta agado. Kion ili respondas al via demandado pri tiuj strangaj
					okazaĵoj?"</p>
					<p>"La flegistino nur rediras la samon, kiel Tom. Kaj la blondulon
					ni ankoraŭ ne pridemandis."</p>
					<p>"Kial?"</p>
					<p>"Por ke li ne suspektu, ke ni suspektas lin. Li estas nia sola
					ŝanco retrovi Gerdan. Bedaŭrinde, en la lastaj tagoj, li vivas plej
					normalan vivon, iris al neniu speciala loko, faris nenion atentindan.
					Eble li ludis sian rolon kaj ĝin finis. La aliaj -- tiuj, kiuj
					forkuris kun Gerda, kiam Bob, kiu gardis ŝin, estis senkonsciigita --
					certe estas la gravuloj. Ili devas ekzisti, ĉar nek la alta blondulo,
					nek lia fratino Marta povis forporti Gerdan. Se evidentiĝos, ke la
					tasko de la blondulo estis nur faligi ian dormigan substancon en la
					trinkaĵon de Gerda, ni lin pridemandos. Ni ĝis nun esperis, ke li
					kondukos nin al la malaperinta belulino. Sed pli kaj pli ŝajnas, ke
					tio ne okazos.</p>
				</div>
				<div class="col s12 m4">
					<img src="fr/gerda/bildoj/gerda17-2.gif" class="responsive-img">
				</div>
			</div>'
  WHERE l.kurso = 'GR' AND l.numero = 17 AND le.ordo = 1;

-- leçon 17, section 2
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<section class="klarigo">
	
				<h4>-ano : <i>membre d''un groupe ; habitant</i></h4>
		
				<p><span class="eo">urbo</span> : ville → <span class="eo">urbano</span> : citadin</p>
				<p><span class="eo">Parizo</span> : Paris → <span class="eo">parizano</span> : parisien</p>
				<p><span class="eo">polico</span> : police → <span class="eo">policano</span> : membre des forces de police&nbsp;;
				<span class="eo">policisto</span> : policier</p>
				<p><span class="eo">lando</span> : pays → <span class="eo">samlandano</span> : compatriote</p>
		
				<h4>ge : <i>des deux sexes sans distinction</i></h4>
		
				<p><span class="eo">frato</span> : frère → <span class="eo">gefratoj</span> : frères et sœurs</p>
				<p><span class="eo">patro</span> : père → <span class="eo">gepatroj</span> : parents</p>
				<p><span class="eo">sinjoro X</span> (ikso) : M. X → <span class="eo">gesinjoroj X</span> : M. et Mme X</p>
		
				<h4><i>épouser, se marier</i></h4>
		
				<p><span class="eo">Jozefo edziĝis</span> : Joseph s''est marié (litt. «est devenu mari»)</p>
				<p><span class="eo">Marta edziniĝis</span> : Martha s''est mariée (litt. «est devenue épouse»)</p>
				<p><span class="eo">Jozefo kaj Marta geedziĝis</span> : Joseph et Martha se sont mariés (litt. «sont devenus mari et femme»)</p>
				
				<h4>Ankoraŭ kelkaj vortoj pri la lingvo</h4>
				
				<p>Jen ankoraŭ kelkaj vortoj, kiujn ni uzos por paroli pri la lingvo.</p>
				
				<p class="parto">Grupon de vortoj kun verbo en la centro oni nomas <b>frazo</b>. Jen ekzemplo: <span class="eo">Linda rigardas la blondulon.</span></p>
				
				<p class="parto">Frazo normale havas subjekton. La <b>subjekto</b> estas tio, kio faras la
				agadon de la verbo. En tiu ĉi frazo <span class="eo">Linda</span> estas la subjekto.</p>
				
				<p class="parto">Frazo ofte havas objekton. La <b>objekto</b> estas tio, al kio la agado de la
				verbo estas farata. En ĉi tiu frazo la objekto estas <span class="eo">la blondulon</span>.</p>
				
				<p class="parto">Oni montras la objekton aŭ per prepozicio (<span class="eo">Linda rigardas al la
				blondulo</span>) aŭ per la finaĵo <b>-n</b>. Tiun finaĵon <b>-n</b> oni nomas
				<b>akuzativo</b>. Kiel vi jam lernis, oni uzas akuzativon ne nur por montri la objekton en frazo, sed ankaŭ por aliaj aferoj.</p>
				
				<p class="parto">Jam en la oka ĉapitro vi lernis pri la pronomo <b>si</b>.</p>
				<p>La pronomo <b>si</b> estas la <b>refleksiva pronomo</b> de Esperanto. Esprimoj uzantaj ĝin estas <b>refleksivoj</b>.</p>
				<p>Kiel vi jam scias, <em>si</em> resendas al la subjekto.</p>
				<p>Ekzemple: <span class="eo">Linda vidas sin.</span> signifas: <span class="eo">Linda vidas Lindan.</span></p>
				
				<p class="parto">Oni devas scii, ke <b>si</b> resendas al la plej proksima subjekto. Normale
				tio estas la subjekto de la plej malgranda frazo (aŭ <em>subfrazo</em>), en kiu ĝi aperas. Do en la frazo: 
				<span class="eo">Tom scias, ke Linda vidas sin.</span></p>
				<p><span class="eo">si</span> resendas al <span class="eo">Linda</span> 
				(la subjekto de <span class="eo">vidas</span>), ne al <span class="eo">Tom</span> (la
				subjekto de <span class="eo">scias</span>).</p>
				<p>Pro tio, <em>si</em> neniam povas esti mem la subjekto aŭ parto de la
				subjekto de iu verbo. Ekzemple, jena frazo estus tute neebla, se oni
				enmetus la vorton <em>sia</em>:</p>
				<p><span class="eo">Linda pensas, ke ___ opinio estas prava.</span></p>
				<p>En tiu frazo <span class="eo">sia</span> devus resendi al la subjekto de <span class="eo">estas</span>, kiu
				estas… <span class="eo">sia opinio</span>. Neeble!
				</p>
				<p>En ĉi tiu ĉapitro estas pli malfacila ekzerco pri refleksivoj.</p>
				
				<h4>per, por, pri, pro</h4>
				<p>Nun vi scias kvar vortojn, kiuj aspektas simile: 
				<span class="eo">per</span>, <span class="eo">por</span>, <span class="eo">pri</span>, <span class="eo">pro</span>.</li>
				<ul>
					<li><b>per</b> montras <b>ilon</b>: <span class="eo">Mi venis per aŭto.</span></li>
					<li><b>por</b> montras <b>celon</b>: <span class="eo">Mi aĉetis kafon por vi (por trinki).</span> (<span class="eo">celo</span> = tio, kion oni volas havi aŭ fari.)</li>
					<li><b>pri</b> montras <b>temon</b>: <span class="eo">Mi parolis/lernis pri historio.</span></li>
					<li><b>pro</b> montras <b>kialon</b>: <span class="eo">Ŝi ŝatas lin pro liaj blondaj haroj.</span></li>
				</ul>

			</section>'
  WHERE l.kurso = 'GR' AND l.numero = 17 AND le.ordo = 2;

-- leçon 17, section 3
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<p class="eo eta">Ces mots seront automatiquement ajoutés à votre vocabulaire à réviser lorsque vous aurez terminé d''étudier cette section.</p>
			
			<div class="vortlisto row">
				<div class="col s12 l6">
					<p><span class="eo">aperi</span> : apparaître</p>
					<p class="sekva">→ <span class="eo">malaperi</span> : disparaître</p>
					<p><span class="eo">aliĝi</span> : = <span class="eo">al</span>- + -<span class="eo">iĝi</span>s : se joindre, adhérer</p>
					<p><span class="eo">dek-sepa</span> : dix-septième</p>
					<p><span class="eo">dua</span> : second, deuxième</p>
					<p><span class="eo">edzo</span> : époux</p>
					<p class="sekva"><span class="eo">edzino</span> : épouse</p>
					<p><span class="eo">frato</span> : frère</p>
					<p class="sekva"><span class="eo">fratino</span> : sœur</p>
					<p><span class="eo">gardi</span> : garder</p>
					<p class="sekva"><span class="eo">sin gardi</span> : prendre garde, surveiller, être prudent</p>
					<p class="sekva"><span class="eo">singarda</span> : prudent</p>
					<p><span class="eo">historio</span> : histoire</p>
					<p><span class="eo">honesta</span> : honnête</p>
					<p><span class="eo">ia</span> : un certain, une espèce de</p>
					<p><span class="eo">jaro</span> : année</p>
					<p><span class="eo">jarcento</span> : siècle</p>
					<p><span class="eo">kapti</span> : capturer</p>
					<p><span class="eo">konduki</span> : conduire</p>
					<p><span class="eo">kontroli</span> : vérifier, contrôler</p>
					<p><span class="eo">krimo</span> : crime</p>
					<p><span class="eo">kvara</span> : quatrième</p>
				</div>
				<div class="col s12 l6">
					<p><span class="eo">lasta</span> : dernier</p>
					<p><span class="eo">marko</span> : marque (tous les sens)</p>
					<p><span class="eo">mono</span> : argent</p>
					<p><span class="eo">motivo</span> : motif, mobile</p>
					<p><span class="eo">plaĉi</span> : plaire, être apprécié</p>
					<p><span class="eo">preskaŭ</span> : presque</p>
					<p><span class="eo">pro</span> : à cause de, pour</p>
					<p><span class="eo">problemo</span> : problème</p>
					<p><span class="eo">riĉa</span> : riche</p>
					<p><span class="eo">rolo</span> : rôle</p>
					<p><span class="eo">sep</span> : sept</p>
					<p><span class="eo">serĉi</span> : chercher</p>
					<p><span class="eo">solvi</span> : résoudre</p>
					<p><span class="eo">suko</span> : jus</p>
					<p><span class="eo">ŝteli</span> : voler, dérober</p>
					<p class="sekva"><span class="eo">ŝtele</span> : par vol&nbsp;; à la dérobée, furtivement</p>
					<p><span class="eo">tipo</span> : type, modèle</p>
					<p><span class="eo">tria</span> : troisième</p>
					<p><span class="eo">uzi</span> : utiliser</p>
				</div>
			</div>'
  WHERE l.kurso = 'GR' AND l.numero = 17 AND le.ordo = 3;

-- leçon 17, section 4
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##EKZERCO:85##
			##EKZERCO:86##
			##EKZERCO:87##'
  WHERE l.kurso = 'GR' AND l.numero = 17 AND le.ordo = 4;

-- leçon 17, section 5
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<div class="row">
				<div class="col s12">
					<div class="card-panel blue lighten-5">
						En tiu ĉapitro, estas du malsamaj rakontoj de <i>Lasu min paroli plu !</i>.<br>
						<a href="#unua">Edzokaptaj inoj</a><br>
						<a href="#dua">Instruista amo</a>
					</div>
				</div>
			</div>
			
			<a id="unua" class="scrollspy"></a>
			<h3>Edzokaptaj inoj</h3>
		
			<p>Jes, kiam, antaŭ kelkaj jaroj, li diris al mi, ke mi estas la plej
			bela knabino, kiun li iam ajn vidis, mi preskaŭ enamiĝis. Neniam
			viro parolis pri mia beleco similvorte. Neniam viro, simple parolante,
			direktis tiajn kortuŝajn okulojn al mi.</p>
		
			<p>Sed post iom da tempo mi konsciiĝis, ke li ne vere amas min, kaj ke
			mi neniam povos lin ami, eĉ se nur pro lia mono. Kaj nun ni eksciis,
			ke li volas edziĝi al Aneta!</p>
		
			<p>Ĉu vi komprenas, kial li volas edziĝi al ŝi? Ŝi havas plaĉan
			vizaĝon, iamaniere, sed ŝi ne estas bela. Li estas tre riĉa.
			Verŝajne ŝin interesas lia mono. Nu, se li volas esti malsaĝa, tio
			estas lia problemo.</p>
			
			<p>Lia fratino edziniĝis al riĉulo, kaj tio estas multe pli
			sendanĝera. Se la edzo havas tiom da mono, kiom la edzino, almenaŭ
			ambaŭ havas dekomence certecon, ke la alia ne serĉas en geedziĝo
			eblecon riĉe vivi.</p>
			
			<p>Multaj knabinoj jam provis edziniĝe ŝteli la monon de Rikardo. Se vi
			scius, kiom da edzkaptemaj inoj li jam devis forsendi! Sed ĉiam
			revenas novaj, kaj ĉi tiu sukcesis. Ĉi-foje, li estas kaptita.
			Finita, la libereco. Li falis en ŝian kaptilon. Antaŭe li estis tre
			singarda<A HREF="#notoj">[1]</A>. Li bone gardis sin je ĉiu provo lin faligi en la
			kaptilon. Sed la lasta ino — kiel do ŝi nomiĝas? mi forgesis... ha
			jes! Aneta! — Aneta, la lasta el longa aro, perfekte ludis sian
			rolon. La lastan fojon, li preskaŭ kaptiĝis, kio montras, ke eble li
			fariĝis malpli singarda.</p>
			
			<p>Tiun lastan fojon, pri kiu mi parolas... eble mi devus diri «la
			antaŭlastan fojon», se vi konsideras, ke la vera lasta fojo estas ĉi
			tiu fojo, kun tiu Aneta... nu, negrave... tiun lastan fojon, mi diris,
			la kaptemulino estis tute senmona. La plej senhava, plej malriĉa
			knabino el la tuta urbo. Sed ŝi estis bela. Granda, sportema, sentima<A HREF="#notoj">[2]</A>, 
			sed sentema<A HREF="#notoj">[2]</A> — almenaŭ laŭŝajne — ŝi montris sin tiel
			aminda, ke li preskaŭ ekamis ŝin je la unua rigardo. La afero
			daŭris pli ol unu jaron. Ho jes, dum pli ol unu jaro ili vidadis unu
			la alian kvazaŭ sen interrompo.</p>
			
			<p>Ekzistas tia tipo de virino, kiu tre nature plaĉas. Ŝi estas tia.
			Tamen, ŝi sukcesis plaĉi al li ne nur pro sia natura amindeco, sed,
			krom tio, ankaŭ pro io alia. Pro volo. Pro decido. Ŝi volis lian
			monon, ŝi decidis, ke ŝi havos ĝin, kaj do — samokaze — lin. Kaj
			ŝi agis tute laŭplane, bone pripensante unu paŝon post la alia, por
			realigi sian deziron. Ŝi neniam mispaŝis.</p>
			
			<p>Ŝi serĉis pri li ĉiaspecajn informojn, kaj ŝi uzis siajn sciojn
			por plejproksimiĝi al li, kaj al lia koro. Ekzemple, kiam ŝi
			eksciis, ke li estas tre kantema, kaj eĉ estas ano de iu gea
			kantogrupo, ŝi tuj decidis aniĝi al tiu grupo. Alian fojon, oni
			diris al ŝi, ke li ĵus eliĝis el la militservo. Nu, ŝi serĉis la
			plej etajn informojn pri li, kaj sukcesis aranĝi la aferojn
			tiamaniere, ke ŝi estu la unua persono, kiu troviĝos sur lia vojo,
			kiam li alvenos en la urbon.</p>
			
			<p>Kaj ne nur ŝi agis. Ankaŭ ŝiaj gepatroj trovis pseŭdomotivon por
			esti foje akceptitaj de lia patro. Ŝi kvazaŭ ŝtele eniris en lian
			mondon por ŝteli lian amon, kaj la tutan riĉon, kiu iras kun ĝi, ĉe
			tia multmona homo. Ŝi uzis plej plene sian imagon por elpensi plej
			malsamajn manierojn enŝteliĝi<A HREF="#notoj">[3]</A> en lian vivon, kaj plaĉi al li. Sed
			eble ŝi trouzis ilin. Eble li suspektis ŝian planon kaj la ne plene
			honestajn motivojn, kiuj kuŝis malantaŭ ŝiaj tro oftaj aperoj ĉe
			lia flanko.</p>
			
			<p>Subite, liaj amikoj rimarkis, ke li fariĝas pli kaj pli malvarma en
			siaj rilatoj kun ŝi. Oni sentis, ke la speco de espero kaj amemo, kiu
			ĵus batigis lian koron, nun iom post iom malaperas, lasante la lokon
			al iu malŝato... ne, ne vere malŝato, kiel diri? Mi serĉas la
			ĝustan vorton, sed ne trovas ĝin, kiel ofte okazas al mi... do, ne
			estis malŝato, sed iu sento proksima al ĝi, iom simila... ha: jen
			mi trovis la vorton: neŝato. Neplaĉo. Li ne malamis ŝin,
			kompreneble, ankaŭ ne malŝatis ŝin, sed, tute simple, ŝi ne plu
			plaĉis al li. La sentoj, kiujn ŝi antaŭe estigis en li, simple
			malaperis. Mi gratulis lin. Li tiel ĵus eligis sin el serioza risko,
			el la risko edziĝi al monserĉa aventurulino, kiu ne indis, ke li
			kunigu sian vivon al la ŝia.</p>
			
			<p>Sed jen novan fojon simila situacio ĵus aperis. Pro tiu Aneta, jen
			lia koro ĵus rekomencis batadi pli vive, jen reaperis la konata
			miksaĵo el espero kaj, se ne amo mem, almenaŭ deziro ami, kaj nun,
			jen ni ekscias, ke li decidis fariĝi sia edzo.</p>
			
			<p>Eble tamen Aneta ne kaptis lin por lia mono. Finfine, mi ne konas la
			tutan historion. Kio ebligus al mi diri tion? Vi pravas. Se sincere
			paroli, mi ne rajtas tion diri pri ŝi. Mi preskaŭ ne konas ŝin. Pro
			kio do mi esprimis al vi tiujn malŝatajn ideojn, kiujn mi havis pri
			Aneta? Kial mi lasis mian imagon kapti min, koncerne ŝiajn motivojn?
			Mi ne estas honesta. Sed pro kio do? Ĉu pro deziro haltigi la
			geedziĝon? Ĉu tion mi deziras? Ĉu mi finfine rigardu la veron
			vizaĝ-al-vizaĝe? Kaj kiu estas tiu vero, se ne ke iĝi la edzino
			de Rikardo deziras plej forte mi?</p>
			
			<a id="notoj"></a>
			<p class="rimarko"><strong>NOTOJ</strong> : 
			<ol>
				<li><span class="eo">Singarda</span> : atentema kaj pripensema, por ne ricevi malbonaĵon aŭ
				malfeliĉon, aŭ por ne meti sin en realan aŭ imagitan danĝeron; 
				malema agi subite kaj senpense; neriskema.</li>
				<li><span class="eo">Sen-tim-a, sent-em-a.</span></li>
				<li><span class="eo">Enŝteliĝi</span> : eniri ŝtele, t.e. zorgante resti nerimarkita, kvazaŭ por 
				ŝteli</li>
			</ol>
			
			<a id="dua" class="scrollspy"></a>
			<h3>Instruista amo</h3>
			
			<p>Ne estas facile ami kun dudek kvin geknaboj. Ne rigardu min tiel mire,
			mi diras la veron. Mi volas diri, ke kiam oni estas instruisto, amas
			junulinon, kaj havas kun si klason de dudek kvin geknaboj, kiuj sekvas
			sian instruiston, kien ajn li iras, amrilatoj fariĝas malfacilaj.</p>
			<p>
			La domego, kie ni estis, dum tiu sur-monta semajno, estis malnova
			hotelo, kiun oni rearanĝis por infangrupoj. Estis en ĝi granda
			manĝejo por la grupaj manĝoj, kaj ankaŭ pli malgranda, pli plaĉa
			trinkejo, kie oni povis aĉeti kafon, sukon, ĉokoladon, teon kaj
			aliajn trinkaĵojn.</p>
			<p>
			Tie ŝi laboris. Kiam mi eniris la trinkejon, en la unua tago, kaj mi
			ekvidis ŝin, mia koro misbatis. Kaj mi samtempe iĝis certa, ke
			ankaŭ ŝia koro faris unu misbaton. Mi rigardis ŝin, ŝi rigardis
			min, ni ridetis.</p>
			<p>
			Ne daŭris pli ol unu sekundon tiu unua rigardo, sed mi sentis,
			kvazaŭ mi aliiĝus al nova homo. Neniam mi vidis iun tiel amindan,
			tiel feliĉige amvekan.</p>
			<p>
			La infanoj brue envenis post mi. Nu, vi scias, kiaj estas infanoj. Ili
			movis la seĝojn. Ili kriis. Ili vokis de unu angulo al alia plej
			laŭte. Unu paŝis sur la piedon de kunulo, kaj ĉi-lasta ekkriis,
			kvazaŭ oni ĵus provus mortigi lin. Nu, vi konas tian situacion.</p>
			<p>
			«Kiu ŝtelis mian monon?» iu kriis furioze. «Mia monujo malaperis!»</p>
			<p>
			«Ĝi falis el via poŝo», «Tie, ĉe la seĝpiedo», «Serĉu antaŭ ol
			suspekti!» samtempe kriis plej malsamaj voĉoj, dum sonis pliaj
			respondoj, al kiuj plene mankis ĝentileco.</p>
			<p>
			Sed mi nenion aŭdis. Mi nur povis rigardi ŝin. Post tiu unua
			rigardo, kiun mi antaŭe priparolis, mi direktis la okulojn aliloken
			dum unu sekundo, sed ne pli. Mia rigardo tuj revenis al ŝi kaj ne plu
			forlasis ŝin. Kvazaŭ iu supernatura forto min devigus ne movi la
			okulojn.</p>
			<p>
			Ankaŭ ŝi min rigardis plu, kun la sama feliĉplena rideto. Stranga,
			nekutima, silenta ĝojo ekokupis mian tutan estaĵon. Tute trankvile.
			Mia koro ne plu misbatis, sed ĝi ne batis kiel antaŭe. Ĝi estis
			kvazaŭ plena je suno, je bela, varma, plaĉa sed samtempe trankvila
			sunlumo.</p>
			<p>
			Dume, interinfana milito komenciĝis. «Mi vidis vin, vi provis ŝteli
			mian monujon», kriis iu knabino.</p>
			<p>
			«Ne gravas, vi jam estas tro riĉa», ride rebatis knabo.</p>
			<p>
			«Ĉi tiu estas mia seĝo, ne sidu sur ĝi», plendis tria infano.</p>
			<p>
			«Kiu faligis mian glason?» furiozis kvara.</p>
			<p>
			Objektoj komencis traflugi la aeron. La bruoj devus tuŝi mian
			atenton, konsciigi min, ke aŭdeblas vortaĉoj, ke okazas
			neallasindaj<a href=''#notoj2''>[1]</a> batoj, ke ploroj kaj plendoj kaj ridoj resonas tro
			brue de unu muro al alia.</p>
			<p>
			Sed mi kvazaŭ ne ĉeestis. Mia atento estis for. Ĝi ne direktiĝis
			al la infana milito, nur al tiuj bluaj okuloj, al tiu mirinda nazo, al
			tiuj brunaj haroj, tiel perfekte aranĝitaj.</p>
			<p>
			Kaj, pro nekomprenebla motivo, ankaŭ ŝiaj okuloj estis turnitaj nur
			al mi. Al mia tro dika nazo, al miaj senordaj haroj, al mia nespeciale
			bela vizaĝo.</p>
			<p>
			«Ne sidu ĉi tie», laŭtis knaba voĉo.</p>
			<p>
			«Mi rajtas sidi kie ajn mi volas», respondis alia.</p>
			<p>
			«Se vi sidiĝos sur ĉi tiun seĝon, vi tion bedaŭros», parolis tria,
			malamike.</p>
			<p>
			«Vi ne rajtas malpermesi al li sidi sur tiu seĝo», knabino kriis.</p>
			<p>
			Mil interkriadoj sonis samtempe. Mil objektoj, ŝajne, kune bruis en la
			trinkejo. Sed mi aŭdis nenion. Aŭ, pli ĝuste, mi aŭdetis ian
			kvazaŭ tre malproksiman bruon, kiu ne sukcesis kapti mian atenton.
			Mian atenton ja plene okupis la superbela vizaĝo de virino
			sensimila.</p>
			<p>
			Kaj jen ŝi ekridis.</p>
			<p>
			Mi rigardis ŝin eĉ pli, mire. Sed ŝi tro ridis por povi parole
			respondi al mia silenta demando.</p>
			<p>
			Ŝia mano montris al la ejo, al la nekredeblaj militspecaj agadoj,
			kiuj okazis en ĝi, al seĝoj kuŝantaj, al rompita taso, al kruroj,
			kapoj, brakoj, manoj moviĝantaj ĉiadirekte, dum vortaĉoj kaj
			militkrioj ĉie<a href=''#notoj2''>[2]</a> sonadis.</p>
			<p>
			Nur tiam mi ekkonsciis. «Geknaboj!» mi kriis. «Sufiĉas!»</p>
			<p>
			Neniam mi komprenis, kial mi havas aŭtoritaton. Sed aŭtoritaton mi
			havas. Naturan aŭtoritaton. Ĉu eble pro io en la voĉo? Mi ja ne
			estas alta fortegulo, kiel kelkaj viroj, kiujn infanoj rigardas kun ia
			timo, kaj sekve kun forta motivo ne riski malkontentigon. Ne. Mi estas
			ne pli ol mezalta kaj mezforta, kaj tute ne havas timigan aspekton.</p>
			<p>
			Sed la infanoj, al kiuj mi instruas, neniam faras ion, kion mi
			malpermesas. Sufiĉas, ke mi diru «atentu!», kaj la bruo haltas,
			envenas silento, dum la geknaboj nin rigardas atente kaj atende,
			atendante, fakte, ke mi precizigu miajn dezirojn. Eĉ, ofte, mi diras
			nenion. Nura rigardo, nura vizaĝesprimo, nura movo de la mano, kaj
			tuj ili trankviliĝas.</p>
			<p>
			Ĉi-foje, mia natura aŭtoritato ree agis. Apenaŭ mi devis aldoni
			kelkajn vortojn por precizigi, ke mi volas, ke ili restarigu la
			falintajn tablon kaj seĝojn, haltigu la batojn, remetu ordon kaj
			trankvilon en tiu plaĉa trinkejo. Post dek minutoj, ĉio estis ree en
			ordo, kaj ili interparolis trankvile, kvazaŭ neniu malamikeco iam ajn
			aperis inter ili.</p>
			<p>
			«Gratulon, sinjoro!» diris la plej bela voĉo, kiun mi iam ajn aŭdis.
			«Kiam mi ekvidis la malordon, mi imagis, ke ne eblos restarigi
			bonordon antaŭ ol noktiĝos».</p>
			<p>
			Nenio estis pli dolĉa al mia koro, ol ŝiaj gratulvortoj. Tiel
			komenciĝis inter ni plej feliĉa amrilato.</p>
			<p>
			Sed, kredu min, ne estas facile ami kun dudek kvin geknaboj. Mi ne
			povis forlasi la dormejon nokte, se unu el ili ne dormis. Tiu ja vekis
			kelkajn aliajn, kaj post dek minutoj la dormejo fariĝis brua ludejo.
			Iun tagon — estis ŝia libertago — ŝi konsentis veni promeni kun mi.
			Sed ankaŭ kunmarŝis la dudek kvin karuletoj, kio tamen mallarĝigis
			la eblecojn de plaĉa para interparolado.</p>
			<p>
			Kiam mi estis libera, kaj mia kunlaboranto<A HREF="#notoj2">[3]</A> ilin gardis, ŝi
			laboris en la trinkejo. Se mi tien iris, plej ofte ankaŭ kelkaj el
			miaj klasanoj venis. Kaj kiam ŝi interrompis la laboron, mi ne
			estis libera, sed devis okupiĝi pri la dudek-kvino. Mia helpanto<A HREF="#notoj2">[3]</A>
			ĉeestis nur dumtage, je precizaj horoj.</p>
			<p>
			Tamen, iom post iom, mi sukcesis trovi solvojn al la problemoj, kaj
			vidi ŝin ne tro malofte. Mi rakontis ĉion pri mi, pri mia vivo, pri
			miaj deziroj, pri mia amo, kiu certe daŭros ĝismorte, kaj ŝi same
			rakontis ĉion pri si. Ŝi estis ridema, kantema, sed ankaŭ laborema
			kaj plej fidinda homo, kun koro plena je ĝojo, kaj feliĉiga rideto.</p>
			<p>
			Post kiam mi revenis hejmen, certe plaĉis la foresto de la infanoj,
			sed mia soleco pezis al mi. Feliĉe, la urbo, kie mi instruas, ne
			estas tro malproksima. Kiel eble plej ofte mi reiris al la montara
			malnova hotelo, kaj nia amo de fojo al fojo grandiĝis. Nek ŝi nek mi
			plu havas gepatrojn kaj gefratojn, kaj nia geedziĝo estis plej
			simpla, kun nur kelkaj geamikoj. Almenaŭ laŭplane. Ĉar kiam eksonis
			la geedziĝa marŝmuziko kaj ni turnis nin por brak-en-brake eliri,
			silente, ridete kaj korbate larĝ-okulis al ni dudek-kvino da
			geamiketoj.</p>
		
			<a id="notoj2"></a>
			<p class="rimarko"><strong>NOTOJ</strong> : 
			<ol>
				<li><span class="eo">Al-lasi</span> : lasi alveni, lasi enveni, kaj do permesi, lasi okazi, akcepti.</li>
				<li><span class="eo">Ĉie</span> : en la tuta loko.</li>
				<li><span class="eo">-anto</span> : persono, kiu ...-as, -anta homo.</li>
			</ol>'
  WHERE l.kurso = 'GR' AND l.numero = 17 AND le.ordo = 5;

-- leçon 17, section 6
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##RESUMO##'
  WHERE l.kurso = 'GR' AND l.numero = 17 AND le.ordo = 6;

-- leçon 18, section 1
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<fieldset class="sono">
				<legend>Aŭskultu tiun rakonton:</legend>
				<p>
					<audio id="audioPlayer" controls="controls" type="audio/mpeg">
						<source type="audio/mp3" src="fr/gerda/son/gerda/gerda18.mp3" />
					</audio>
				</p>
			</fieldset>
			<h3>Kompatu vian filinon!</h3>
			<div class="row dialogo">
				<div class="col s12 m8">
					<p>"Via situacio ne plaĉas al vi, ĉu? Vi dezirus ŝanĝi ĝin,
					ĉu ne? Nu, estas facile ŝanĝi vian situacion.</p>
					<p>"Vi ŝatus manĝi ion, ĉu ne? Pecon da pano vi deziras, tute
					certe. Aŭ ĉu frukton? Jen, rigardu, mi havas pomon kaj oranĝon por
					vi. Kiel belaj ili estas! Plenaj je suko, evidente. Se vi estus
					konsentinta labori por ni, vi jam estus plene sata. Kaj jen io alia:
					kuko. Ĉu ne bonega, belega, manĝinda kuko? Ĵus bakita, ankoraŭ varma.
					Tuŝu, sentu mem, kiel plaĉe varmeta ĝi estas. Vi malsatas
					nur pro via stulteco. Se vi estus saĝa, vi konsentus fari la etan
					laboron, kiun mi petas de vi, kaj vi tuj ricevus la manĝaĵojn. Mi
					bedaŭras, ke vi estas tiel obstina. Estas bedaŭrinde, vidi tiel belan
					knabinon suferi pro malsato. Mi sincere bedaŭras vian obstinecon. Nur
					eta "jes", kaj ĉio ĉi estos via."</p>
					<p>Li ŝajnigas sin afabla, sed estas io tre aĉa en lia vizaĝa
					esprimo. Gerda sentas sin pli kaj pli malforta. Estas varme en ĉi tiu
					ĉambraĉo, kio ne estas facile elportebla. Krome, ŝi malsatas, kaj la
					vido de tiu pomo kaj de tiu oranĝo estas vere suferiga. Kaj tamen ŝia
					devo estas diri "ne".</p>
					<p>"Ĉu vi legis la dokumenton, ĉu vi komprenis ĝin?" li
					aldonas, kvazaŭ espere.</p>
					<p>Kompreneble ŝi legis: ŝi estis scivola. Almenaŭ ŝi bezonis
					scii, kial oni ŝin kaptis kaj senigis je libereco. Tial ŝi legis.
					Estis malfacile kompreni, komence, sed iom post iom ŝia memoro plene
					revenis, ŝi rememoris la principojn de tiu sekreta lingvo, kaj ŝi
					sukcesis kompreni ĉion; ŝi havis nenion alian por fari. Dum multaj
					horoj ŝi estis sola kun tiu dokumento, kiun ili lasis al ŝi. Sed ŝi
					decidis neniam respondi al ili; ŝi ja antaŭ longe promesis al
					Profesoro Kosadi, ke pri tio ŝi ĉiam silentos. Neniam ŝi ŝanĝos
					sian decidon.</p>
					<p>"Ĉu vi legis la dokumenton?" sonas duan fojon la aĉa voĉo.</p>
					<p>Ŝi plu silentas, kaj li eliras, furioza. Li eliras kun la
					pano, la pomo, la oranĝo kaj la kuko. Feliĉe, ke almenaŭ ili lasis
					al ŝi akvon, varmaĉan akvon, jes ja, apenaŭ trinkeblan, certe,
					preskaŭ ne sensoifigan, prave, sed tamen akvo. Malsaton eblas pli
					malpli elporti, sed soifon ne.</p>
				</div>
				<div class="col s12 m4">
					<img src="fr/gerda/bildoj/gerda18-1.gif" class="responsive-img">
				</div>
			</div>

			<div class="row dialogo">
				<div class="col s12 m8">
					<p>Minutoj pasas. Multaj minutoj. Unu horo, du horoj, ĉu tri
					horoj? Ĉu multaj horoj? Kiel scii? Ne estas horloĝo sur la muro, kaj
					ili prenis ŝian brakhorloĝon. La lumo apenaŭ ŝanĝiĝas en la
					ĉambro, pro la nemoveblaj fenestro-kovriloj. Ĉu estas frue, ĉu estas
					malfrue, ŝi tute ne povas scii. Tago, nokto, mateno, vespero ĉi tie
					estas samaj. Sunlumo neniam envenas.</p>
					<p>Kaj jen la aĉulo revenas, kun radio-kaj-kased-aparato. Li
					enmetas kasedon, kaj irigas la aparaton. Eta, plenda plorema voĉeto
					aŭdiĝas, kaj ŝiras la koron de Gerda:</p>
					<p>"Patrino, patrineto mia, mi petegas vin. Faru, kion ili volas.
					Ili kaptis min. Mi ne scias, kie mi estas. Estas terure. Mi timas. Mi
					tiom deziras reiri hejmen. Mi petegas vin, faru tion, kion ili deziras.
					Se ne, ili faros malbonon al mi. Ili ne diris, kion. Ili ne volas diri.
					Sed mi scias, mi sentas, ke estos terure. Kompatu min, kara, kara
					patrino. Kompatu vian filinon. Mi timegas. Rapidu, ke plej frue
					ili liberigu min. Ili ne volas, ke mi parolu pli longe, sed mi havas
					paperon kaj plumon, kaj mi tuj skribos leteron al vi. Mi nur petegas:
					obeu ilin!"</p>
					<p>"Jen la letero," li kriaĉas, kaj post ridaĉo li aldonas:</p>
					<p>"Nu, tio verŝajne sufiĉos. Mi revenos post iom da tempo. Mi
					estas certa, ke vi iĝos saĝa, finfine. Kaj jen. Prenu ĉi tion, ĝi
					helpos vin pensadi." Kaj tion dirante, li ĵetas al ŝi belegan pomon.
					Gerda sentas sin, kvazaŭ Eva ĉe l'' serpento.</p>
				</div>
				<div class="col s12 m4">
					<img src="fr/gerda/bildoj/gerda18-2.gif" class="responsive-img">
				</div>
			</div>'
  WHERE l.kurso = 'GR' AND l.numero = 18 AND le.ordo = 1;

-- leçon 18, section 2
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<section class="klarigo">
	
				<p><span class="eo">senigi iun je io</span> : priver quelqu''un de quelque chose (senigi = igi sen)</p>
		
				<h4><i>il y a + temps</i> = antaŭ</h4>
		
				<p><span class="eo">li laboris ĉi tie antaŭ du jaroj</span> : il travaillait ici il y a deux ans</p>
				<p><span class="eo">ŝi alvenis antaŭ unu horo</span> : elle est arrivée il y a une heure</p>
				<p><span class="eo">antaŭ kelkaj minutoj</span> : il y a quelques minutes</p>
		
				<h4>dans (<i>quand il réfère à un moment du futur</i>) = post</h4>
		
				<p><span class="eo">li revenos post du tagoj</span> : il reviendra dans deux jours</p>
				<p><span class="eo">mi estos kun vi post du minutoj</span> : je serai avec toi dans deux minutes, je suis à toi dans deux minutes</p>
				
				<h4>signifi</h4>
				
				<p>Ĉu vi scias, kion signifas <b>signifas</b>? Se ne, jen klarigo:</p>
				<p><b>Signifi</b> estas <b>doni ideon</b>, <b>esti komprenata en certa maniero</b>.</p>
				<p><b>Signifo</b> estas la ideo donata aŭ komunikata. Oni povas paroli pri la
				signifo de vorto (<span class="eo">Perdi</span> signifas <span class="eo">ekmalhavi</span>, ekzemple) aŭ de io
				alia (Ruĝa lumo povas signifi <span class="eo">Haltu!</span>).</p>
	
			</section>'
  WHERE l.kurso = 'GR' AND l.numero = 18 AND le.ordo = 2;

-- leçon 18, section 3
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<p class="eo eta">Ces mots seront automatiquement ajoutés à votre vocabulaire à réviser lorsque vous aurez terminé d''étudier cette section.</p>
			
			<div class="vortlisto row">
				<div class="col s12 l6">
					<p><span class="eo">antaŭ longe</span> : il y a longtemps</p>
					<p><span class="eo">aparato</span> : appareil</p>
					<p><span class="eo">baki</span> : cuire dans un four</p>
					<p><span class="eo">bezoni</span> : avoir besoin</p>
					<p><span class="eo">brakhorloĝo</span> : montre(-bracelet)</p>
					<p><span class="eo">dokumento</span> : document</p>
					<p><span class="eo">elporti</span> : supporter, endurer</p>
					<p><span class="eo">filo</span> : fils</p>
					<p class="sekva"><span class="eo">filino</span> : fille</p>
					<p><span class="eo">frukto</span> : fruit</p>
					<p><span class="eo">hejmo</span> : maison, domicile (chez soi)</p>
					<p class="sekva"><span class="eo">hejme</span> : à la maison</p>
					<p class="sekva"><span class="eo">hejmen</span> : à la maison (en y allant)</p>
					<p><span class="eo">horloĝo</span> : horloge</p>
					<p><span class="eo">ĵeti</span> : jeter</p>
					<p><span class="eo">kasedo</span> : cassette</p>
					<p><span class="eo">legi</span> : lire</p>
					<p><span class="eo">letero</span> : lettre</p>
					<p><span class="eo">obei</span> : obéir</p>
					<p><span class="eo">obstina</span> : obstiné</p>
					<p><span class="eo">oranĝo</span> : orange</p>
				</div>
				<div class="col s12 l6">
					<p><span class="eo">pasi</span> : passer (quelque part), s''écouler</p>
					<p class="sekva tab"><span class="eo">li pasas sur la strato</span> : il passe dans la rue</p>
					<p class="sekva tab"><span class="eo">kiom da tempo pasis!</span>&nbsp;: comme le temps a passé !</p>
					<p><span class="eo">pasigi</span> : faire passer, passer (du temps)</p>
					<p class="sekva tab"><span class="eo">kiom da tempo mi pasigis ĉe ŝi?</span>&nbsp;: combien de temps ai-je passé chez elle&nbsp;?</p>
					<p><span class="eo">plumo</span> : stylo, plume</p>
					<p><span class="eo">pomo</span> : pomme</p>
					<p><span class="eo">preni</span> : prendre</p>
					<p><span class="eo">principo</span> : principe</p>
					<p><span class="eo">promesi</span> : promettre</p>
					<p><span class="eo">radio</span> : radio</p>
					<p><span class="eo">sata</span> : rassasié</p>
					<p class="sekva"><span class="eo">malsata</span> : affamé, qui a faim</p>
					<p class="sekva"><span class="eo">malsati</span> : être affamé, avoir faim</p>
					<p><span class="eo">serpento</span> : serpent</p>
					<p><span class="eo">skribi</span> : écrire</p>
					<p><span class="eo">suferi</span> : souffrir</p>
					<p><span class="eo">ŝanĝi</span> : changer (quelque chose)</p>
					<p class="sekva"><span class="eo">ŝanĝiĝi</span> : changer (devenir différent)</p>
					<p><span class="eo">ŝiri</span> : déchirer, arracher</p>
					<p><span class="eo">terura</span> : terrible, horrible</p>
					<p><span class="eo">tial</span> : c''est pourquoi, à cause de cela</p>
				</div>
			</div>'
  WHERE l.kurso = 'GR' AND l.numero = 18 AND le.ordo = 3;

-- leçon 18, section 4
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##EKZERCO:88##
			<p>Por la sekvanta ekzerco vi devos parigi la vortojn kaj la signifojn.</p>
			<b>Centro</b> kaj <b>mezo</b> estas bona paro, ĉar <b>centro</b> signifas <b>mezon</b> (ne precize, sed preskaŭ).</p>

			##EKZERCO:89##'
  WHERE l.kurso = 'GR' AND l.numero = 18 AND le.ordo = 4;

-- leçon 18, section 5
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<div class="row">
				<div class="col s12">
					<div class="card-panel blue lighten-5">
						En tiu ĉapitro, estas du malsamaj rakontoj de <i>Lasu min paroli plu !</i>.<br>
						<a href="#unua">La letersoifa patrino</a><br>
						<a href="#dua">Mi atendas gravan leteron</a>
					</div>
				</div>
			</div>
			
			<a id="unua" class="scrollspy"></a>
						<fieldset class="sono">
				<legend>Aŭskultu tiun rakonton:</legend>
				<p>
					<audio id="audioPlayer" controls="controls" type="audio/mpeg">
						<source type="audio/mp3" src="audio/lasumin18a.mp3" />
					</audio>
				</p>
			</fieldset>			<h3>La letersoifa patrino</h3>
			
			<p>Ĉiam estas ege malfacile komenci leteron. Tuj kiam mi havas plumon
			enmane, miaj ideoj malaperas kun nekredebla rapideco, kaj mi trovas
			min kun plumo en la mano kaj kun kapo malplena.</p>
			<p>
			Kiam mi estis infano, kiom da fojoj mi sentis min «malbona filo», nur
			pro tio, ke mi neniam skribis leteron al miaj gepatroj, dum mi estis
			for! Mi ricevadis leterojn plenajn je la dika skribo de mia patrino.
			La skribo estis dika, ĉar ŝi ĉiam fuŝis siajn plumojn. Mia patrino
			ja estis forta kampara virino kun fortaj manoj, kiuj rompas ĉion,
			kion ili tuŝas. Krome, tiuepoke, la plumoj estis aĉe faritaj, kaj
			fuŝiĝis multe pli rapide ol nun.</p>
			<p>
			Kion mi diris? Ha jes, mi ricevis longajn leterojn de mia patrino kaj
			preskaŭ ne kuraĝis ilin eklegi, tiom mi timis. Mi timis, ĉar mia
			patrino parolis pri sia sufero. Kaj rakontis kun granda precizeco, ke
			ŝi suferas pro mi.</p>
			<p>
			Jen kian patrinon mi havis. Tiu larĝkorpa, dik-mana, fortabraka
			kampulino, kiu rompaĉis meblon nur tuŝetante ĝin — mi preskaŭ
			diris: nur rigardante ĝin — tiu virino, fortiĝinta pro jaroj kaj
			jaroj da kampa laboro, tiu forta virino suferis, laŭ siaj leteroj,
			pro eta mi.</p>
			<p>
			Mi ne scias kial, ŝi ne elportis mian poŝtan silenton. Ŝi rompis du
			aŭ tri plumojn, verŝajne ŝiris nevole la paperon, kiun ŝi provis
			preni el la skribmeblo, sed fine sukcesis skribi dikaplume sian
			opinion pri mi:</p>
			<p>
			«Kara filo». Neniam ŝi uzis mian nomon, verŝajne pro deziro estigi
			ian malproksimecon inter ŝi kaj mi, aŭ sentigi sian aŭtoritaton.</p>
			<p>
			«Kara filo», ŝi skribis. «Jam pasis du semajnoj ekde la tago, kiam vi
			forlasis la hejmon por iri al via monta libertempo, kaj eĉ ne unufoje
			vi pensis pri via kompatinda patrino, kiu suferas pro manko de letero
			de vi. Vi ŝiras mian koron. Ĉu vi ne amas vian patrinon, kiu tiom
			laboras por vi kaj por viaj fratetoj?</p>
			<p>
			«Mi zorgas, zorgas, zorgas. Mi min demandas, ĉu vi malsatas aŭ
			soifas, ĉu vi manĝas sate fruktojn. Ĉi tie la pomoj komencas
			apereti. La hejmo estas tiel malplena, kiam vi forestas, ke vi povus
			almenaŭ skribi letereton al via amanta kaj suferanta patrino. Via
			patro ne estas apud mi nun, li laboras en la kampoj, sed mi scias, ke
			li plene konsentas kun mi.</p>
			<p>
			«Li neniam sukcesas legi viajn leterojn, pro tiu via maniero skribaĉi
			nelegeble, sed mi laŭtlegas al li kaj tio lin feliĉigas. Aŭ pli
			ĝuste mi voĉlegus al li, se mi havus ion por legi, ian skribaĵon de
			vi, eĉ mallongan.</p>
			<p>
			«Ĉu vi forgesis vian promeson? Vi promesis skribi, kiam vi foriris.
			Mi estas certa, ke vi havas sufiĉe da mono. Ĉu la poŝtoficejo estas
			malproksima? Nu, tamen, granda knabo kiel vi ne lasas tiajn etajn
			malfacilaĵojn haltigi lin.</p>
			<p>
			«Vi ne forĵetas vian monon en malsaĝajn aĉetojn, ĉu? Vi ne
			ĵetadas ĝin senpripense al la vendistoj de ĉokolado kaj dolĉaĵoj,
			espereble. Pensu, kiom multe oni devas labori por ricevi iom da mono.
			Ne. Certe ne temas pri manko de mono. Eble vi estas laca pro tiuj
			longaj marŝoj sur etaj malfacilaj montvojoj. Sed ĉu tro laca por
			skribeti hejmen? Vi ne estas malsana, ĉu? Ne. Se vi malsanus, vi
			skribus hejmen, eĉ se nur por ke mi faru vian preferatan kukon kaj
			ĝin sendu al vi.</p>
			<p>
			«Mi timas la veron. La vero estas, ke vi ne sufiĉe amas vian
			patrinon. Ho! Kiom tiu penso suferigas min! Kiel neelporteble estas
			konscii pri la neamo de filo!</p>
			<p>
			«Sed verŝajne vi tamen ametas min. La prava klarigo de via malvolo
			skribi eble estas, ke vi estas mallaborema. Atentu pri tio, filo mia.
			Gardu vin de mallaboremo. Ĝi estas la komenco de multaj malbonoj en
			la vivo. Sed ne forgesu, ke mi bezonas leteron de vi, kiom mi bezonas
			aeron. Se vi ne skribos, mi mortos...»</p>
			<p>
			Kaj tiel plu, kaj tiel plu. Ŝi povis plenigi tiom da papero, kiom
			troveblis hejme, per sia dika skribo, ripetante la samajn aferojn kun
			la sama drameco, kiun mi tute ne povis preni serioze.</p>
			<p>
			«Faru tion», «Ne faru tion», «Mi suferas pro vi», tiuj tri ideoj
			kovris la tuton de ŝia leterfarado.</p>
			<p>
			Kara patrino! Kiel drame ŝi skribis! Mi suspektas, ke tiu
			suferpatrina rolo ege plaĉis al ŝi, eĉ se ŝi ne plene tion
			konsciis. Jen ŝi havis okazon paroli pri sia morto, pri sia sufero,
			pri mia malboneco, kun io drama en la vortoj, kaj en tiuj momentoj ŝi
			certe sentis sin reale grava.</p>
			<p>
			Kaj tio ĉefmankis al tiu kara persono. Senti sin grava. Ŝi estis
			bonkora, dolĉa patrino, nekredeble laborema, kun la povo elporti la
			plej aĉajn aspektojn de la kampara vivo sen perdi sian rideton, sen
			forĵeti eĉ momente la silentan enan ĝojon, kiu sunradiis sur ŝia
			vizaĝo.</p>
			<p>
			Sed de tempo al tempo ŝi bezonis plendi. Ŝi bezonis momente forĵeti
			la rolon de la ĉiam feliĉa laboranta kampulino, de la ĉiam rideta
			patrino, de la edzino perfekta. Ŝiaj leteroj estis ĝusta okazo por
			tio. Ili ebligis al ŝi malplenigi sian koron de la multegaj
			neesprimitaj zorgoj, de la mil faktoj maltrankviligaj en tiu
			malriĉula vivo, terure sendolĉa. Ŝi ne priskribis tiujn priokupojn.
			Sed la plendan senton ŝi esprimis, kaj la malfeliĉon, pri kiu ŝi ne
			havis tempon konscii dumtage. Kaj tio faris bonon al ŝi, tute certe.</p>
			<p>
			Vidu, kiel elturniĝema mi estas. Jen mi sukcesis certigi al mi, ke mi
			agis saĝe kaj bonfile ne skribante al mia patrino. Se ja mi skribus,
			ŝi ne havus tiun — por si sanigan — okazon plorletere plendi.</p>
			<p>
			Stranga estas la homa koro, ĉiam ema pravigi sin!</p>
			<p>
			Kaj tamen, kiu diros, ke ne troviĝas iom da pravo en tiu ĵus
			esprimita ideo? Nu, eble ĝi estas iom prava. Sed pri unu alia afero
			mi estas certa, nome, ke mia konscia deziro neniam estis agi bonfile,
			kiam mi lasis la tempon pasi kaj tagojn sekvi tagojn sen unu vorto
			skribita de mi.</p>
			<p>
			Mi ludis, mi ĝojis, mi kantis, mi promenis, mi marŝis, mi vivis
			libertempan vivon, kaj mi tute simple forgesis pri la hejmo, kaj pri
			miaj zorgoplenaj gepatroj. Ne. Rilate al leterskribado, mi ne estis
			bona filo. Neniam rompis plumon pro troskribo mi.</p>
		
			<a id="dua" class="scrollspy"></a>
						<fieldset class="sono">
				<legend>Aŭskultu tiun rakonton:</legend>
				<p>
					<audio id="audioPlayer" controls="controls" type="audio/mpeg">
						<source type="audio/mp3" src="audio/lasumin18b.mp3" />
					</audio>
				</p>
			</fieldset>			<h3>Mi atendas gravan leteron</h3>
				
			<p>Kioma horo estas? Preskaŭ la dua kaj kvin minutoj. Aŭ, se vi
			preferas — ja uzeblas ambaŭ dirmanieroj — kvin minutoj post la dua.
			Nu, nu, kiel rapide la tempo pasas!</p>
		
			<p>Mi ne vidis la leterportiston. Ĉu li jam pasis? Preskaŭ ĉiam mi
			vidas lin. Kutime li pasas tuj post la dua.</p>
		
			<p>Hoho! «Kutime li pasas post la dua», tiu esprimo ne estas tre klara.
			Oni povus pensi, ke mi volas diri: «tiu ĉi leterportisto pasas tuj
			post la dua leterportisto». Nu, ĉu vere oni povus miskompreni
			tiamaniere? Verŝajne ne. Kial estus tri leterportistoj pasantaj
			samstrate? Por ke nova leterportisto povu pasi post alia
			leterportisto, kiu mem estus nomata «dua leterportisto», devus pasi
			tri leterportistoj entute, ĉu ne?</p>
			
			<p>Verŝajne do vi komprenis, ke temas pri la horo. Mi volis diri:
			«Kutime li pasas tuj post la dua horo».</p>
			
			<p>Nu, mi iru vidi, ĉu li alportis ion al mi. Mi ja atendas gravan
			leteron, kaj ĝi ankoraŭ ne alvenis. Mi ne ŝatas atendi, atendi,
			atendadi ion, kio ne okazas. Kaj jam de kelkaj tagoj mi atendas la
			alvenon de tiu letero.</p>
			
			<p>Ne. Estas nenio. Aŭ li jam pasis, kaj estis nenio por mi, aŭ li
			ankoraŭ ne pasis. Plej verŝajne li ankoraŭ ne pasis.</p>
			
			<p>Eble li malfruas ĉi-foje. Li preskaŭ neniam malfruas, li kutime
			pasas ĝustatempe. Tamen malfruo povas fojfoje okazi.</p>
			
			<p>Sed rigardu! Laŭ la murhorloĝo estas nur kvarono<A HREF="#notoj">[1]</A> antaŭ la dua.
			La unua kaj kvardek kvin minutoj. La unua kaj tri kvaronhoroj. Ĉu
			eble la murhorloĝo funkcias bone, dum mia brakhorloĝo estas 
			fuŝita?</p>
			
			<p>Ne! Mi misvidis. Mi misprenis<A HREF="#notoj">[2]</A> la sekundan montrilon por la minuta.
			Sur mia brakhorloĝo, la sekunda montrilo estas tro dika, ĝi tro
			similas minutan, kaj mi neniam vere alkutimiĝis al tiu dika montrilo,
			kiu montras nur la sekundojn. Mi ofte mislegas la horon pro tiu tro
			dika sekundmontrilo.</p>
			
			<p>Koncerne la murhorloĝon, estas pli simple, ĉar ĝi estas tre malnova
			kaj ne havas montrilon por la sekundoj. Tiel ne estas risko fuŝlegi
			la horon.</p>
			
			<p>Kiel kutime, mi parolas senhalte kaj dume la tempo pasas. Nun estas
			dek minutoj antaŭ la dua. Tio estas la unua kvindek. La unua horo kaj
			kvindek minutoj kaj dek sekundoj. Nu, ni ne konsideru la sekundojn.
			Sekundoj tute ne gravas. Estas do la unua kaj kvindek minutoj. La
			dektria kvindek, se vi bezonas precizigi, ke nun estas posttagmeze.
			Dek minutoj antaŭ la dekkvara. Ĉar, se la unua posttagmeze estas la
			dektria, tiam la dua posttagmeze estas la dekkvara.</p>
			
			<p>Mi neniam kutimiĝis al tiu maniero esprimi la horon. Eĉ dum mia
			militservo, kvankam mi soldatis en unuo specialigita pri komunikado,
			kaj ni devis uzi tiun teruran dudekkvarhoran dirmanieron. Mi neniam
			sukcesis plene lerni ĝin. Nu, mi povas uzi ĝin, sed ĉiam kun
			sekundo da hezito. Ĝi neniam iĝis reale natura por mi.</p>
			
			<p>Nu, nu, leterportisto, kion vi faras? Ĉu vi venas aŭ ne? Mi volas
			legi tiun leteron, scii, ĉu mi povos labori en tiu radiomagazeno. Mi
			estas fakulo pri radio. Mi eklernis dum la militservo, kaj poste plu
			interesiĝis pri radio, sekvis instruadon pri radio en vespera
			lernejo, iĝis radiofakulo.</p>
			
			<p>Amiko Bip diris al mi, ke tiu laboro en la radiomagazeno estus
			perfekta por mi, kaj mi la ĝusta homo por tiu laboro. Kial la
			direktisto de la magazeno ne respondis tuj? Kial tiuj uloj, tiuj
			ĉefoj, neniam respondas tuj? Kial ili ne respondis parole, tuj post
			la intervido, ĉu ili akceptas min aŭ ne? Kial ili diris: «vi estos
			informita perletere»? Kial, en tiuj situacioj, ili ĉiam alprenas
			senmovan vizaĝon?</p>
			
			<p>Verŝajne por ke oni ne sciu, ĉu oni kontentigis ilin aŭ ne.
			Verŝajne por ke oni daŭre sin demandu, ĉu oni havas ŝancojn aŭ ne
			ricevi la petitan laboron. Sed kial agi tiamaniere? Ĉu vi 
			komprenas?</p>
			
			<p>Estas strange, ke mi diras «vi», dum mi parolas al neniu. Se iu
			ĉeestus ĉi tie, li trovus min ridinda. Eble mi estas strangulo. Mi
			parolas tute sola, mi parolas al la muroj, al la tablo, al la seĝoj,
			kaj mi uzas la vorton «vi»! Fakte, ne al la muroj, ne al la mebloj mi
			parolas. Kaj ne estas ĝuste diri, ke mi parolas al neniu. Mi parolas
			al iu, sed tiu «iu» ne ekzistas. Almenaŭ li ne ekzistas ekster mi. Mi
			simple parolas al mi mem.</p>
			
			<p>Kaj kial do mi ne rajtus paroli al mi laŭte? Mi estas en mia hejmo.
			Kaj hejme mi estas la plej supera aŭtoritato. Mi ĝenas neniun. Neniu
			— bedaŭrinde — kunvivas kun mi en mia hejmo. Mi estas sola.</p>
			
			<p>Kiam oni vivas sola, estas normale plenigi la malplenon per la sono de
			sia voĉo. Ne estas plaĉe vivi sola. Mi neniam kutimiĝos al tia
			vivo. Soleco ne estas bona por la homo.</p>
			
			<p>Tial mi tiom atendas la leterportiston. Se oni ricevas leterojn, oni
			sentas sin malpli sola.</p>
			
			<p>Jam kvin minutoj post la dua nun. La dekkvara kaj kvin. Kion ili faras
			en la poŝtejo?</p>
			
			<p>Mi forte esperas, ke tiu radiomagazeno akceptos min. Labori tage, nur
			dumtage, kia ĝojo! Mia nuna nokta laboro ne plaĉas al mi. Kaj mi
			ricevus iom pli da mono ol nun. Estas plaĉe perlabori sufiĉe da mono
			por aĉeti ĉiaspecajn aferojn, kiujn oni ne bezonas.</p>
			
			<p>Aĉeti ion bezonatan ne estas plezuro. Oni ja bezonas vivi. Sed aĉeti
			ion senbezone, nur ĉar oni havas la monon kaj deziras aĉeti la
			aferon, tio estas la dolĉa vivo.</p>
			
			<p>Mi ne iĝos riĉega, eĉ se ili akceptos min en tiun radiovendejon,
			sed iom pli riĉa ol nun.</p>
			
			<p>Nun estas kvarono post la dua. Mi rigardas tra tiu fenestro jam tutan
			duonhoron nun. Kaj tiu leterportisto ankoraŭ ne vidigis eĉ peceton
			de sia nazo. Kio okazas al li?</p>
			
			<p>Mi ne longe elportos. Mi bezonas tiun leteron. Mi ne volas resti hejme
			la tutan posttagmezon. Mi bezonas promeni, marŝi, movi min, fari ion.
			Ne resti hejme malantaŭ fenestro, dum horoj kaj horoj pasas, kaj ne
			pasas la leterportisto.</p>
			
			<p>Kaj se li pasos kaj ne havos mian leteron? Se la radioriparejo plu
			atendigas min? Ĉu mi elportos? Diable! Mi ne kutimas elporti tiajn
			situaciojn, kaj mi ne sentas min tre forta.</p>
			
			<p>Mi petas vin, leterportisto, kara juna bona aminda leterportisto,
			venu, kaj donu al mi tiun respondon, tiun jesan respondon.</p>
			
			<p>Kaj se la respondo venos, kaj estos nea? Oj, oj, oj! Kia terura
			vivo! Tion eĉ malpli mi elportos.</p>
			
			<p>Mi tro esperas. Tio estas la malbona flanko de mia nuna situacio. Mi
			devus igi min esperi malpli. Tiel mi ne riskus defali de tro altaj
			esperoj. Sed kiel fari por malgrandigi sian esperon? Ĉu vi scias?
			Ĉu iu scias ĉi tie? Kompreneble ne. Ĉi tie estas ja neniu...</p>
		
			<a id="notoj"></a>
			<p class="rimarko"><strong>NOTOJ</strong> : 
			<ol>
				<li><span class="eo">Kvarono</span> : 1/4</li>
				<li><span class="eo">Preni X por Y, mispreni X por Y </span> : pensi, ke estas Y, dum fakte estas X.</li>
			</ol>'
  WHERE l.kurso = 'GR' AND l.numero = 18 AND le.ordo = 5;

-- leçon 18, section 6
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##RESUMO##'
  WHERE l.kurso = 'GR' AND l.numero = 18 AND le.ordo = 6;

-- leçon 19, section 1
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<fieldset class="sono">
				<legend>Aŭskultu tiun rakonton:</legend>
				<p>
					<audio id="audioPlayer" controls="controls" type="audio/mpeg">
						<source type="audio/mp3" src="fr/gerda/son/gerda/gerda19.mp3" />
					</audio>
				</p>
			</fieldset>
			<h3>Mi parolas plej serioze</h3>
			<div class="row dialogo">
				<div class="col s12 m8">
					<p><b>Petro</b>: Eble ni forkuris tro rapide. Ĉu vere fantomoj ekzistas?"
					<p><b>Ralf</b>:	Ĉu vi volas raporti pri la voĉo al viaj gepatroj? Se jes, vi
					ne plu estas mia amiko. Se ili scios, ke ni ludis en la malpermesita
					domaĉo, vi…</p>
					<p><b>Petro</b>: Ne. Mi tute ne volas diri al la gepatroj, ke ni ludis tie. Tio
					estas nia sekreto. Mi nur v…</p>
					<p><b>Ralf</b>:	Jes. Sekreto kunigas la amikojn. Se vi gardos la sekreton, vi
					restos mia amiko. Sed se vi malkaŝos ĝin al granduloj, mi… mi…
					mi suferigos vin, mi igos vin plori tiel grave, ke neniam plu en via
					tuta vivo vi forgesos tiun tagon. Kredu min, en via tuta vivo, tio
					estos la lasta fojo, kiam vi rompis promeson. Kio? Ĉu tio igas vin
					ridi?</p>
					<p><b>Petro</b>: Mi ne ridas, mi nur v…</p>
					<p><b>Ralf</b>:	Ankaŭ mi ne ridas. Mi parolas plej serioze. Oni ne ridas pri
					veraj danĝeroj, ĉu? Kaj se vi…</p>
					<p><b>Petro</b>: Sed mi tute ne volas diri ion al la gepatroj. Mi nur…</p>
					<p><b>Ralf</b>:	Kaj se vi rakontos ĝin en la lernejo, ne estos pli bone por
					vi. Mi plorigos vin tute same. Mi malpurigos viajn vestojn, kaj via
					patrino krios furioze kiam vi revenos hejmen. Mi kuŝigos vin en akvo
					kaj sidos sur via kapo. Mi kaptos vin per mia speciala kaptilo kaj
					veturigos vin en la montaron kaj forlasos vin tie, kaj vi estos tute
					sola kaj perdita, kaj vi ploros. Vi…</p>
				</div>
				<div class="col s12 m4">
					<img src="fr/gerda/bildoj/gerda19-1.gif" class="responsive-img">
				</div>
			</div>

			<div class="row dialogo">
				<div class="col s12 m8">
					<p><b>Petro</b>: Vi eĉ ne scias ŝofori. Mi ne kredas je via kaptilo.  Kaj
					cetere, mi nur…</p>
					<p><b>Ralf</b>:	Jes, mi scias ŝofori.</p>
					<p><b>Petro</b>: Vi ne rajtas ŝofori ĉar vi estas tro juna. Kaj vi ne havas
					aŭton.</p>
					<p><b>Ralf</b>:	Mi ne zorgas pri tio, ĉu mi rajtas aŭ ne. Se mi farus nur
					tion, kion mi rajtas fari, mi farus nenion. Mi ŝtelos iun veturilon,
					jes, mi ŝtelos veturilon de iu instruisto en la lernejo kaj veturigos
					vin sur monton kaj lasos vin tie kaj vi ploros. Se vi parolos al iu el
					niaj samklasanoj aŭ samlernejanoj, la tuta lernejo ekscios pri la
					virino el la malnova domaĉo, kaj poste la gepatroj…</p>
					<p><b>Petro</b>: Vi diris "virino", do vi ne kredas, ke estas fantomo. Vi do
					konsentas, ke…</p>
					<p><b>Ralf</b>:	Kompreneble mi ne kredas je fantomoj. La virino, kiun ni
					aŭdis, estas virino, kiun mi kaptis kaj gardas tie. Mi planas igi ŝin
					mia servistino: ŝi faros ĉion, kion mi volos. Kaj se vi parolos pri
					ŝi… Nu, mi ne volas paroli pri tio, kio okazos al vi, ĉar vi tro
					timus…
				</div>
				<div class="col s12 m4">
					<img src="fr/gerda/bildoj/gerda19-2.gif" class="responsive-img">
				</div>
			</div>'
  WHERE l.kurso = 'GR' AND l.numero = 19 AND le.ordo = 1;

-- leçon 19, section 2
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<section class="klarigo">
				<p>Il n''y a pas de nouveau point de grammaire pour ce chapitre. 
				Vous devriez pouvoir tout comprendre sans trop de difficultés.</p>
			</section>'
  WHERE l.kurso = 'GR' AND l.numero = 19 AND le.ordo = 2;

-- leçon 19, section 3
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<section class="klarigo">
			<p>Tous les mots ou racines de mot du chapitre 19 sont déjà connus. Vous devriez pouvoir les comprendre sans trop de difficultés.
			</p>
		</section>'
  WHERE l.kurso = 'GR' AND l.numero = 19 AND le.ordo = 3;

-- leçon 19, section 4
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##EKZERCO:90##		
			##EKZERCO:91##'
  WHERE l.kurso = 'GR' AND l.numero = 19 AND le.ordo = 4;

-- leçon 19, section 5
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<fieldset class="sono">
				<legend>Aŭskultu tiun rakonton:</legend>
				<p>
					<audio id="audioPlayer" controls="controls" type="audio/mpeg">
						<source type="audio/mp3" src="audio/lasumin19.mp3" />
					</audio>
				</p>
			</fieldset>
			<h3>Dormu trankvile!</h3>
			
			<p>Bonan matenon, kara amiko, ĉiam absorbata en la lernado de la lingvo
			tutmonda!</p>
			<p>
			Vi demandas, kion ni faros ĉi-foje, ĉu ne? Ĉu vi vere deziras fari
			ion? Kial do? Ĉu ne plaĉas al vi resti farante nenion dum kelka
			tempo?</p>
			<p>
			Nu, se vi volas labori, laboru. Se vi volas enkapigi al vi vortojn,
			enkapigu. Se vi volas relegi jam legitajn rakontojn, relegu. Mi ne
			malhelpos vin. Mi ne ĝenos vin. Mi ne volas vin senkuraĝigi.</p>
			<p>
			Nur permesu, ke mi dormu trankvile. Mi decidis, ke ĉi tiu tago ne
			estos labortago por mi. Mi deklaras ĝin libertago.</p>
			<p>
			Ĉu vere vi sentas vin tre malfeliĉa, se unu tago pasas kaj vi ne
			ricevis vian kutiman legaĵon en la nova lingvo? Kia stranga reago!</p>
			<p>
			Bonvolu do pardoni min, se ĉi tiu legaĵo estas tro mallonga por via
			leg- kaj lernsoifo<a href=''#notoj''>[1]</a>. Mi kredas vin trovema, kaj fidas je via trovemo.
			Se vi volas labori, vi trovos laboron por fari. Kiu serĉas, tiu
			trovas. Serĉu do. Sed ne serĉu ĉe mi, ĉar mi ne deziras skribi
			nun. Mi deziras dormi, havigi al mi duan bonan matenmanĝon (mi jam
			manĝis unu, sed mi ŝategas matenmanĝojn!), iri promeni kun mia
			hundo tra la kamparo, ludi iom da muziko, fari ion ajn, kio plaĉos al
			mi, sed ne elpensi por vi malsaĝajn rakontojn, kiujn vi legos kvazaŭ
			soife pro nekomprenebla lernemo, kiu, ŝajne, allasas al vi eĉ ne unu
			tagon da nenifaro<a href=''#notoj''>[2]</a>.</p>
			<p>
			Laboru do kuraĝe, lernu multajn vortojn, legu longajn rakontojn, kaj
			lasu min pasigi tagon tute senzorgan.</p>
			<p>
			Cetere, se vi volas fari kiel mi, ne hezitu. Mi atendas nenion de
			vi, ĉi-foje. Vian decidon — kredu min — mi perfekte komprenos.</p>
			<p>
			Mi dankas pro via komprenemo, kaj salutas vin plej sincere.</p>
			<p>
			Ĝis la revido!</p>
			
			<a id="notoj"></a>
			<p class="rimarko"><strong>NOTOJ</strong> : 
			<ol>
				<li><span class="eo">Leg- kaj lernsoifo</span> : necesas kompreni «legsoifo kaj lernsoifo»,
				t.e. granda deziro legi kaj lerni. 
				<li><span class="eo">Nenifaro</span> = neni(o)-faro, faro de nenio.</li>
			</ol>'
  WHERE l.kurso = 'GR' AND l.numero = 19 AND le.ordo = 5;

-- leçon 19, section 6
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##RESUMO##'
  WHERE l.kurso = 'GR' AND l.numero = 19 AND le.ordo = 6;

-- leçon 20, section 1
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<fieldset class="sono">
				<legend>Aŭskultu tiun rakonton:</legend>
				<p>
					<audio id="audioPlayer" controls="controls" type="audio/mpeg">
						<source type="audio/mp3" src="fr/gerda/son/gerda/gerda20.mp3" />
					</audio>
				</p>
			</fieldset>
			<h3>Polico!</h3>
			<div class="row dialogo">
				<div class="col s12 m8">
					<p>Paŝoj. Oni paŝas sur la strato. Gerda aŭskultas atente; ŝi
					antaŭsentas, ke io grava baldaŭ okazos. Bruo de multaj homoj. Ili
					venas. Ili ŝajnas multaj, laŭ la bruo: ĉu nun oni venos grupe por
					ŝin suferigi? Ŝlosiloj. Bruo de ŝlosiloj trans la pordo. Iu enmetas
					ŝlosilon en la seruron. Ŝi scias, ke ne estas ŝia kutima vizitanto.
					Li ne agas tiel. Li enmetas tre rapide la ŝlosilon, ĝin turnas,
					eniras. Ne ĉi tiu. Li provas unu fojon. Ne sukcesas. Plia bruo de
					ŝlosiloj. Alian fojon li provas, sen pli da sukceso. Li provas ree kaj
					ree per diversaj ŝlosiloj. Aŭdeblas, ke li ne konas la seruron.  Kiam
					li enmetis ŝlosilon, li tenas ĝin laŭ diversaj direktoj, kvazaŭ li
					ludus per ĝi, verŝajne ĉar li esploras nekonatan seruron.</p>
					<p>Kaj jen li fine sukcesas! Li eniras.</p>
					<p>"Polico!" li diras, kaj Gerda devas superi fortan emon salti al
					li por lin kisi. Estas alta viro, maldika, kun nigraj haroj kaj verdaj
					okuloj, kiu sin tenas tre digne.</p>
					<p>Post li venas aliaj homoj, multe pli junaj. Ŝi jam vidis tiujn
					vizaĝojn. Studentoj ili estas. Ilia sinteno estas tute malsama:
					senstreĉa.</p>
					<p>"Tiuj gejunuloj multe helpis min," la policano klarigas. "Ni ne
					estas sufiĉe multaj en la polico por ĉion fari, kaj ilia helpo estis
					tre bonvena." Kaj li prezentas ilin: Tom, Bob, Linda. Kiam ŝi aŭdis
					la paŝojn, Gerda imagis, ke venas sep, ok, eble naŭ homoj, sed
					almenaŭ ses; fakte, ili estas nur kvar.</p>
					<p>"Mia filino…?" ŝi demandas, kaj ŝi apenaŭ povas eligi la
					du vortojn, tiom ŝi timas la respondon.</p>
					<p>"Savita: ŝi nun estas en via hejmo, kun via edzo. Viaj
					kaptintoj estas amatoroj, kiuj agis fuŝe. La etulino estis ĉe la
					onklino de tiu f-ino (=fraŭlino) Marta, la universitata flegistino.
					Ni facile trovis ŝin. Ŝi tre ĝojis revidi la patron, kaj la hejmon,
					kompreneble."</p>
					<p>"Ho, mi dankas, mi dankegas vin. Via diro ŝanĝas mian tutan
					vivon. Sed diru: kiel vi alvenis ĉi tien? Kiel vi malkovris, ke ili
					tenas min enŝlosita en ĉi tiu domaĉo?"</p>
					<p>"Du knaboj rakontis pri voĉo en ĉi tiu malnova, forlasita
					domo. Dank'' al ili… Sed nun rakontu <i>vi</i>. Kion viaj kaptintoj celas?
					Kio estas ilia celo? Kial vin teni mallibera?"</p>
					<p>"Ili volas, ke mi traduku malnovan dokumenton. Mi malkonsentis.
					Tiam ili opiniis, ke perforte ili sukcesos. Ili preskaŭ sukcesis. Per
					malsato, unue, kaj poste per la mesaĝo de mia filino.  La malsato ne
					estis facile elportebla, kredu min, sed la mesaĝo sur-kaseda…! Fakte
					mi terure malsatas nun. Mi petas, ĉu iu el vi bonvolus iri aĉeti
					manĝaĵon por mi? Io ajn estos bonvena."</p>
					<p>Linda foriras por aĉeti manĝaĵojn.</p>
					<p>"Vi rakontos al mi, ĉion, senmanke," ŝi diras al la du knaboj
					elirante.</p>
				</div>
				<div class="col s12 m4">
					<img src="fr/gerda/bildoj/gerda20-1.gif" class="responsive-img">
				</div>
			</div>

			<div class="row dialogo">
				<div class="col s12 m8">
					<p>Gerda raportas pri la dokumento; ŝi tenas ĝin enmane kaj
					tradukas, vorton post vorto; krome, ŝi donas ĉiujn necesajn
					klarigojn.</p>
					<p>La policano kapjesas komprene.  Gerda klarigas al li ankoraŭ
					pli pri la kondiĉoj de sia mallibereco.  Kaj jen la policano havas
					ideon.</p>
					<p>"Bob, ĉu vi konsentus kaŝi vin sub la lito, se iu envenus?"</p>
					<p>"Kial?"</p>
					<p>"Mi havas planon. Mi ŝatus, ke ni ĉiuj foriru, krom vi kaj
					Gerda, kaj ke ŝi diru al la kaptinto, ke ŝi konsentas klarigi al li,
					kio estas skribita sur tiu papero, mi volas diri: sur tiu malnova
					dokumento. Ili tiam agos laŭ la dokumento, kaj ni kaptos ilin tiom pli
					facile. Sed tamen, ni ne rajtas riski, ke Gerda suferu. Kiu scias?
					Kiam ŝi ne plu estos necesa por ili, ili povus… Nu, vi komprenas.
					Vi restos ĉi tie, kaj kiam vi aŭdos paŝojn proksimiĝi, vi kaŝos
					vin sub la lito, kaj bone atentos ĉion, kio okazas. Gerda diris, ke
					ĉiam venas nur unu persono, unu viro, maldika ulo, ne tre forta.
					Fortulo kiel vi tuj superos lin, se necese."</p>
					<p>Bob konsentas, kvankam, se diri la veron, kun iom duba esprimo.</p>
				</div>
				<div class="col s12 m4">
					<img src="fr/gerda/bildoj/gerda20-2.gif" class="responsive-img">
				</div>
			</div>'
  WHERE l.kurso = 'GR' AND l.numero = 20 AND le.ordo = 1;

-- leçon 20, section 2
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<section class="klarigo">
	
				<h4>-anto : <i>une personne qui … (au présent, au moment où l''on parle)</i></h4>
		
				<p><span class="eo">legi</span> : lire → <span class="eo">leganto</span> : lecteur</p>
				<p><span class="eo">aŭskulti</span> : écouter → <span class="eo">aŭskultanto</span> : auditeur</p>
		
				<h4>-into : <i>une personne qui a … (au passé, action terminée)</i></h4>
				
				<p><span class="eo">kapti</span> : capturer → <span class="eo">kaptinto</span> : ravisseur : une personne qui a capturé quelqu''un</p>
				<p><span class="eo">savi</span> : sauver → <span class="eo">savinto</span> : sauveur (après le sauvetage)</p>
			</section>'
  WHERE l.kurso = 'GR' AND l.numero = 20 AND le.ordo = 2;

-- leçon 20, section 3
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<p class="eo eta">Ces mots seront automatiquement ajoutés à votre vocabulaire à réviser lorsque vous aurez terminé d''étudier cette section.</p>
			
			<div class="vortlisto row">
				<div class="col s12 l6">
					<p><span class="eo">amatoro</span> : amateur</p>
					<p><span class="eo">aŭskulti</span> : écouter</p>
					<p><span class="eo">bonvena</span> : bienvenu(e)</p>
					<p><span class="eo">celo</span> : but, objectif</p>
					<p><span class="eo">ĉiu</span> : tout, chaque&nbsp;; tout le monde</p>
					<p><span class="eo">digna</span> : digne, vénérable</p>
					<p><span class="eo">diversa</span> : varié(e), divers(e)</p>
					<p><span class="eo">dubi</span> : douter, avoir des doutes</p>
					<p><span class="eo">emo</span> : penchant, goût, inclination</p>
					<p><span class="eo">esplori</span> : examiner, étudier</p>
					<p class="sekva"><span class="eo">esploro</span> : recherche, investigation</p>
					<p><span class="eo">kisi</span> : embrasser</p>
					<p><span class="eo">kondiĉo</span> : condition</p>
					<p><span class="eo">kovri</span> : couvrir</p>
					<p><span class="eo">malkovri</span> : découvrir (tous les sens)</p>
					<p><span class="eo">necesa</span> : nécessaire</p>
				</div>
				<div class="col s12 l6">
					<p><span class="eo">nigra</span> : noir(e)</p>
					<p><span class="eo">onklo</span> : oncle</p>
					<p class="sekva"><span class="eo">onklino</span> : tante</p>
					<p><span class="eo">prezenti</span> : présenter, introduire</p>
					<p><span class="eo">salti</span> : sauter</p>
					<p><span class="eo">savi</span> : sauver</p>
					<p><span class="eo">seruro</span> : serrure</p>
					<p><span class="eo">ses</span> : six</p>
					<p><span class="eo">streĉi</span> : tendre, serrer</p>
					<p><span class="eo">sub</span> : sous</p>
					<p><span class="eo">teni</span> : tenir</p>
					<p class="sekva"><span class="eo">sin teni</span> : se tenir, se comporter</p>
					<p class="sekva"><span class="eo">sinteno</span> : attitude, comportement</p>
					<p><span class="eo">traduki</span> : traduire</p>
					<p><span class="eo">trans</span> : au-delà de, par-delà, par-dessus</p>
					<p><span class="eo">verda</span> : vert(e)</p>
					<p><span class="eo">viziti</span> : visiter</p>
				</div>
			</div>'
  WHERE l.kurso = 'GR' AND l.numero = 20 AND le.ordo = 3;

-- leçon 20, section 4
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##EKZERCO:92##
			##EKZERCO:93##'
  WHERE l.kurso = 'GR' AND l.numero = 20 AND le.ordo = 4;

-- leçon 20, section 5
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<div class="row">
				<div class="col s12">
					<div class="card-panel blue lighten-5">
						En tiu ĉapitro, estas du malsamaj rakontoj de <i>Lasu min paroli plu!</i>.<br>
						<a href="#unua">La fakulo-instruisto venis de malproksime</a><br>
						<a href="#dua">Troa scivolo kondukas morten</a>
					</div>
				</div>
			</div>
			<a id="unua" class="scrollspy"></a>
			<h3>La fakulo-instruisto venis de malproksime</h3>
						<fieldset class="sono">
				<legend>Aŭskultu tiun rakonton:</legend>
				<p>
					<audio id="audioPlayer" controls="controls" type="audio/mpeg">
						<source type="audio/mp3" src="audio/lasumin20a.mp3" />
					</audio>
				</p>
			</fieldset>			
			<p>Komence, rigardu atente la aparaton. Ion similan vi neniam vidis, ĉu? 
			Uzu do la tutan tempon necesan por bone rigardi ĝin.</p>
			<p>
			Vi vidas, ĉu ne, ke ĝi havas tenilon, nigran tenilon. Vidu, mi
			prenas la tenilon per la maldekstra mano. Tiel.</p>
			<p>
			Do, bone, mi prenis ĝin. Mi tenas ĝin forte, ĉar la aparato estas
			peza. Nun, mi forprenas la fermoplaton. Ĉu vi ne scias, kio
			fermoplato estas? Nu, nomu ĝin «kovrilo», se vi preferas. Se mi bone
			komprenis, en via lingvo oni uzas ambaŭ vortojn. Ne gravas la vorto;
			gravas, ke vi malfermu la aparaton, kaj por tio necesas komence
			forpreni la kovrilon — aŭ fermoplaton — kiu kovras ĝin. Jen.</p>
			<p>
			Nun mi metas la fermoplaton sur la tablon. Vi povas meti ĝin ien ajn.
			La ĉefa afero estas, ke ĝi troviĝu en loko, kie ĝi ne riskas ĝeni
			viajn movojn.</p>
			<p>
			Refoje mi petas vin rigardi. Estas pluraj aferoj, kiuj elstaras. Krome
			estas ĉi tiuj montriloj, iom similaj al horloĝaj montriloj. Ili tre
			gravas, ĉar ili sciigos al vi, ĉu la streĉo estas sufiĉa aŭ ne.
			Bone. Ĉu vi rigardis sufiĉe? Atentu mian manon nun.</p>
			<p>
			Nun per la dekstra mano mi faras ĉi tiun movon. Rigardu bone, kion mi
			faras. Ĉu vi vidis? Rigardu atente la rondan aĵeton, kiu elstaras
			ĉi tie, sur la dekstra flanko. Mi parolas pri ĉi tiu ruĝa ronda
			afereto.</p>
			<p>
			Jen. Vi prenas ĝin kaj forte turnas ĝin dekstren, t.e. laŭ la sama
			direkto kiel horloĝmontriloj. Vi sentos, ke io streĉiĝas en la
			aparato. Se vi streĉis sufiĉe, la plej malalta montrilo moviĝas.
			Ĝi devas halti sub numero 10. Bone. Ne uzu tro da forto, vi ne
			deziras, ke io ene rompiĝu, ĉu? Turnu tute trankvile, kaj ĉio bone
			funkcios.</p>
			<p>
			Pardonu, se mi ne klarigas pli bone, sed oni sendis min al ĉi tiu
			faka lernejo antaŭ ol mi havis la tempon bone lerni vian lingvon. Via
			lingvo estas tre malfacila por mi, kiu venas de malproksime, de la
			alia flanko de la mondo. Mi do ne konas la nomojn de tiuj pecoj kaj
			aĵoj.</p>
			<p>
			Nu, ĉi tie estas io, kio iom similas malgrandan teleron, ĉu ne? Mi
			celas<A HREF="#notoj">[1]</A> ĉi tiun rondan platon. Mi forprenas ĝin. Kutime, vi ne
			bezonus ĝin forpreni. Mi forprenas ĝin nur, por ke vi rigardu, kiel
			ĝi estas metita.</p>
			<p>
			Venu apud min. Tenu ĝin. Pasigu ĝin de unu al alia. Ĉu vi rimarkas,
			kiel peza ĝi estas? Oni ne imagus, ĉu?, ke tia telereto estas tiel
			peza. Nu, ĝia pezo devenas de tio, ke ĝi estas farita el speciala
			substanco, tute nekutima.</p>
			<p>
			Ĝuste sur tiun telereton vi metos la verdan pulvoron. Kiam la pulvoro
			metiĝas sur la telereton, jen ĉi-flanke elsaltas verda afereto. Ĝi
			estas verda, por ke vi memoru, ke ĝi rilatas al la pulvoro, kiu
			ankaŭ estas verda, aŭ iom verda, blue verda aŭ verde blua, se vi
			volas esti pli precizemaj.</p>
			<p>
			Nun vi prenu la verdan aĵeton, kiu ĵus elsaltis kaj nun elstaras.
			Rigardu, kiel mi faras. Vi devas ĝin movi tiudirekte. Via celo estas,
			ke ĝi alvenu ĝis ĉi tiu loko, ĝis la fino de sia irejo. Vi sentos,
			ke ĝi ne estas obeema afero. Ĝi ne obeas vian deziron irigi ĝin
			tiudirekte, konduki ĝin laŭ la tuta vojo ĝis ĉi tie. Ĉi-foje, vi
			vere devas uzi vian forton. Vi devas obeigi ĝin. Ne kredu, ke ĝi
			estas obstina. Ĝi estas iom obstina — ĝi volas resti surloke — sed
			vi devas esti pli obstina ol ĝi. Se vi metos sufiĉe da forto en vian
			movon, ĝi konsentos moviĝi. Ne timu; ĝi ne rompiĝos. Sed vi vere
			devos streĉi vian forton ĉi-cele, aŭ la aĵeto ne moviĝos. Kaj ĝi
			devas moviĝi kaj alveni ĝis la loko tie, por ke la pulvoro eniru la
			aparaton.</p>
			<p>
			Jen, ĉu vi vidis? Ĉu unu el vi volas veni ĉi tien kaj refari tute
			trankvile antaŭ siaj kunuloj la movojn, kiujn mi faris? Ili ne estas
			malfacilaj. Sed estas bone antaŭeniri nur malrapide. Se vi bone
			lernis la unuajn movojn, vi neniam misfaros ilin. Ni do haltos iomete
			por refari ilin. Kiu venos?</p>
			<p>
			Nu, nu, unu kuraĝulon, mi petas! Ne estu timemaj. Se vi volas lerni
			iun fakon, vi devas agi. Labori. Dankon, Ibrahim. Vi estas kuraĝa.
			Faru nur la kelkajn movojn, kiujn mi faris. Kaj diru laŭte, kion vi
			faras.</p>
			<p>
			Tio helpas la memoron. Kaj, krome, tio instruos al mi vian lingvon,
			ĉar vere mi bedaŭras, ke mi ne konas la fakvortojn, kaj povas paroli
			nur pri «aĵoj», «aferoj» aŭ «pecoj», dum certe ĉiu el tiuj havas
			sian ĝustan nomon ankaŭ vialingve.</p>
			<p>
			Nun, Ibrahim, komencu. Mi remetas la fermoplaton — aŭ kovrilon —
			por ke vi komencu vere de la komenco. Kaj diru laŭte, klare, ĉion,
			kion vi faras.</p>
		
			<a id="notoj"></a>
			<p class="rimarko"><strong>NOTOJ</strong> : 
			<ol>
				<li><span class="eo">Mi celas</span> : mi volas diri..., mi parolas pri...</li>
			</ol>
		
			<a id="dua" class="scrollspy"></a>
			<h3>Troa scivolo kondukas morten</h3>
	
						<fieldset class="sono">
				<legend>Aŭskultu tiun rakonton:</legend>
				<p>
					<audio id="audioPlayer" controls="controls" type="audio/mpeg">
						<source type="audio/mp3" src="audio/lasumin20b.mp3" />
					</audio>
				</p>
			</fieldset>			<p>Aŭskultu, mi tamen ŝatus scii, kion vi celas finfine. Kio estas via
			celo? Vi staris trans la pordo, kaj vi aŭskultis, ĉu ne? Vi
			subaŭskultis<a href=''#notoj2''>[1]</a>, kiel oni diras. Mi ne dubas, ke interesas vin scii,
			kiu estas kun mi, kaj pri kio ni parolas. Sed en ĉi tiu laboro, en
			kiu vi kun-agas kun mi, via sinteno estas neallasebla. Iom da digno,
			mi petas.</p>
			<p>
			Oni subdiris<a href=''#notoj2''>[2]</a> al mi, ke vi transiris al niaj malamikoj. Mi tion ne
			volis kredi. Kiam vi ĝojsaltis vidante min reveni, mi kredis je vi.
			Kiam vi kisis min kvazaŭ amoplene, mi kredis je vi. Kaj ĉu vi
			memoras tiun fojon, kiam vi ploris kaj ploris, ĉar mi ĵus tenis min
			iom malafable? Mi estis laca kaj ĵus agis malĝentile. Pro laceco
			oni kelkfoje agas, kiel oni devus ne agi. Aŭ pro troa zorgado. Nu, mi
			agis malbone kaj mia sinteno ne estis pravigebla. Kaj vi ploris. Jes,
			tiun tagon, kiam vi ploris, mi kredis je vi.</p>
			<p>
			Sed nun, jam la trian fojon mi trovas vin subaŭskultanta ĉe la pordo
			de mia oficejo. Mi bezonas koni vian celon. Kion do vi celas? Vi tion
			neniam faris antaŭe. Ne temas do pri simpla persona scivolemo. Se vi
			estus nature scivolema, mi estus rimarkinta tion jam delonge. Ne.
			Ĉiam mi ŝatis vian diskretan sintenon. Kiuj ajn la kondiĉoj, en
			kiuj mi igis vin labori, vi tenis vin plej diskrete.</p>
			<p>
			Kaj nun, subite, ĝuste en tempo, kiam diversaj raportaĉoj alvenas al
			mi koncerne vin, kiam oni provas subkomprenigi al mi, ke eble mi devus
			dubi vian honestecon, jen vi komencas subaŭskulti. Vi tamen
			subskribis<a href=''#notoj2''>[3]</a> promeson ĉiam gardi la interesojn de ĉi tiu oficejo.
			Vi scias, ke ni havas malamikojn, kiuj serĉas ĉiaspecajn informojn
			pri niaj esploroj, kaj kiuj sufiĉe riĉas por havigi multe da mono al
			tiu, kiu transdonus al ili interesajn sciojn pri ni. Ĉu al ili vi
			transiris? Ĉu vi forlasis nin, kvankam vi skribe promesis kaj mem
			subskribis vian promeson? Kvankam vi — laŭ via diro — amas min?</p>
			<p>
			Via onklo Johano foje alvenis senbrue por viziti nin kaj diris al mi,
			ke li vidis vin rigardi tra la seruro de mia oficejo. Kia sinteno!
			Alian fojon, kiam mia fratino, pasante tra nia urbo, ankaŭ venis nin
			viziti, vi eksaltis en la koridoro, kiam ŝi subite ekaperis apud vi.
			Ŝi ne vidis, kion vi faras, sed ŝi raportis al mi la aferon, ĉar
			ŝi tre miris pri via reago al ŝia alveno. Ŝi tre precize rimarkis
			vian salteton. Vi eksaltetis, kiel oni faras, kiam io tute neatendita
			— kaj malplaĉa, aŭ danĝera — subite prezentiĝas. Mirige, ĉu ne?</p>
			<p>
			En mia raporto al niaj ĉefoj, mi prezentis la tutan situacion. Mi
			montris, kiel danĝera ĝi estas por ni. Mi proponis diversajn
			agadojn, kiuj, miaopinie, ebligus savi preskaŭ ĉion. Ni devos
			streĉi niajn fortojn, sed ni havas multajn ŝancojn sukcesi, se ni
			agos tuj. Tamen unu kondiĉo gravegas: sekreteco. Sekreteco estas
			plene necesa ĉi-afere, se ni volas, ke niaj fortostreĉoj ebligu al
			ni realigi nian celon.</p>
			<p>
			Sed ĉio ŝanĝiĝis pro via subaŭskultado. Mi ne dubas, ke vi eksciis
			nenion gravan ĉi-foje. Kiom ajn vi streĉis vian aŭskultpovon, vi ne
			povis plene aŭdi, kaj — ĉefe — vi ne povis kompreni, kio diriĝas
			trans tiu pordo. Fakte, via celo ne estas realigebla, ĉar mankas al
			vi tro da informoj.</p>
			<p>
			Mi travivis multajn aventurojn en la vivo. Mi elportis malfacilaĵojn,
			danĝeron, malfeliĉon, kun ĉiam sekaj okuloj. Sed nun mi emus plori
			kiel knabeto.</p>
			<p>
			Mi sentas ploremon, ĉar mi fidis al virino, kaj ŝi montris sin ne
			plu inda je mia fido. Mi sentas ploremon, ĉar la virino, kiun mi
			fidis, estis mia amatino, kaj ŝia apud-esto min per ĝojo plenigis.
			Kunlabori kun ŝi estis mia feliĉo. Scii, ke en ĉiu risko, jen ŝi
			estas apud mi, kaj min subtenas, tio iom post iom iĝis la devenejo de
			mia forto.</p>
			<p>
			Kaj nun, iom post iom, mi komprenetis, ke ŝi ne estas fidinda, ke ŝi
			transiris al la malamika flanko, kaj ke mi devas gardi min.</p>
			<p>
			Jes, mi apenaŭ povas min deteni de plorado, ĉar mi ankoraŭ amas
			ŝin. Mi ankoraŭ amas vin, Klara, sed eble ne por longe. Via
			malveremo tuŝas min tro suferige. Ĝi alsaltas min, kaj mi sentas, ke
			danĝera furiozeco min pli kaj pli kaptas. Ne. Ne moviĝu! Restu ĉi
			tie. Apud mi.</p>
			<p>
			Vi ĉiam deziris apud-esti, ĉu ne? Via sola celo, kiam vi ekvidis
			min unuafoje, estis tutvive proksimi al mi. Tiel vi vin esprimis.
			Tutvive!</p>
			<p>
			Ĉu vi sciis jam dekomence, ke iun tagon vi vendos miajn sekretojn?
			Aŭ ĉu ili sukcesis kapti vin en siajn dubajn agadojn nur poste? Ĉu
			vi estis sincera komence, kaj transiris al ili? Aŭ ĉu neniam okazis
			transiro, ĉar jam de la unua tago vi konis vian celon: enŝteliĝi ĉi
			tien kiel oficistino, labori perfekte, iom post iom havigi al vi la
			plenan fidon de la ĉefo, laŭcele agi por ke li enamiĝu, ŝajnigi
			amon al li, kaj uzi tiun belegan situacion por transdonadi informojn?
			Kiel serpento vi envenis nian esplorcentron, kiel serpento deziranta
			mortigi, sed atenta, ke oni ne vidu ĝin...</p>
			<p>
			Antaŭe mi diris, ke komence vi sen ia dubo amis min. Nun mi pli kaj
			pli dubas tiun opinion. Nun pli kaj pli la tuta afero prezentiĝas
			klare al miaj okuloj. En mian koron vi eniĝis kiel ŝtelisto en
			domon, por kapti...</p>
			<p>
			Kaj mi lasis vin agi! Mi enlasis vin en mian hejmon, en mian
			oficejon, en miajn brakojn, en mian koron! Kaj vi ŝajnigis vin
			feliĉa! Vi perfekte ludis vian rolaĉon, ho jes! Vi ne agis amatore.
			Vi ne reale feliĉis — oni ne povas serioze feliĉi, kiam oni vivas
			en malvero — sed vi ŝajnigis feliĉon, vi ludis la rolon de
			feliĉulino plensukcese, por ke en la kaptilon mi falu.</p>
			<p>
			Nun stariĝas la demando: kio okazu al vi? Vi scias tro multe, ĉu ne?
			Estus danĝere lasi vin vivi. Kaj ĉiaokaze, vi tiom suferigis min,
			ke vi ne plu indas vivi. Haha! Vi timas, ĉu ne? Vi timegas,
			videble. Nu, vi ricevas nur la naturajn sekvojn de viaj decidoj. Ĉu
			vi ne antaŭvidis mian sintenon? Ĉu vi ne opiniis, ke mi tamen pli
			fortas ol vi? Ĉu vi pensis, ke ĉar mi amas vin, mi ellasos vin
			plezure, eĉ se mi malkovros vian rolaĉon? Vi ludis, kaj perdis la
			ludon. Bedaŭru, se helpas vin bedaŭri. Vi certe bedaŭros malpli ol
			mi. Vi bedaŭros nur, ke vi ne plene realigis vian celon. Mi bedaŭros
			amon perditan, fuŝitan de malverema ulino.</p>
			<p>
			Kaj ĉu vi scias, kio aldonas kroman suferon? Ke vi agis tiel
			infanece. Subaŭskulti ĉe pordo! Ĉu viaj ĉefoj ne instruis al vi
			pli nuntagajn manierojn ricevi informojn ? Oni nuntempe faras tiel
			perfektajn aparatojn, tute tute malgrandajn, por senfine subaŭskulti,
			multe pli bone ol tra pordoj. Tro memfida vi estis. Vi ne imagis, ke
			mi povus suspekti. Kaj vi iĝis nesingarda. Bedaŭrinde por vi. Nun
			via bela kara vivo alvenas al sia fino. Kaj ne kredu — eĉ se mi
			ridaĉas — ke tio ĝojigas min. Mi ne ŝatas ridaĉi. Mi ŝatus havi
			koron plenan je amo, kaj larĝan rideton survizaĝe. Sed vi devigas
			min. Vi komprenas la ludon, ĉu ne? Vi sufiĉe longe ludis ĝin.</p>
			<p>
			Nu, bone, sufiĉas. Nun mi tuj komunikos la novaĵon al miaj
			kunlaborantoj. Vi ne mortos tuj. Ni unue devos eligi el vi ĉiujn
			viajn sciojn. Estas milito, ĉu ne?, suba milito, milito, kiu okazas
			sub la videblaĵoj, sed tamen milito, terura milito.</p>
			<p>
			Kial, diable, vi eniris tiun militon? Ĉu vi ne povis simple honeste
			labori, kiel ĉiu alia? Ĉu la destino tiel malamas min, ke ĝi
			alportis en mian vivon kiel malamikon la solan virinon, kiun mi
			sincere amis? Sufiĉe! Ne ploru! Agi mi devas. Mi agu tuj.</p>
			<p>
			Kaj vi... Provu kunstreĉi ĉiujn viajn fortojn, por almenaŭ morti
			digne.</p>
			
			<a id="notoj2"></a>
			<p class="rimarko"><strong>NOTOJ</strong> : 
			<ol>
				<li><span class="eo">Subaŭskulti</span> : kaŝe aŭskulti; aŭskulti ion, 
				kion oni devus ne aŭskulti.</li>
				<li><span class="eo">Subdiris</span> : komprenigi aŭ sciigi ion al iu, ne dirante ĝin tute klare.</li>
				<li><span class="eo">Subskribi</span> : skribi sian nomon fine de letero aŭ dokumento.</li>
			</ol>'
  WHERE l.kurso = 'GR' AND l.numero = 20 AND le.ordo = 5;

-- leçon 20, section 6
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##RESUMO##'
  WHERE l.kurso = 'GR' AND l.numero = 20 AND le.ordo = 6;

-- leçon 21, section 1
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<fieldset class="sono">
				<legend>Aŭskultu tiun rakonton:</legend>
				<p>
					<audio id="audioPlayer" controls="controls" type="audio/mpeg">
						<source type="audio/mp3" src="fr/gerda/son/gerda/gerda21.mp3" />
					</audio>
				</p>
			</fieldset>
			<h3>La sekreta societo</h3>
			<div class="row dialogo">
				<div class="col s12 m8">
					<p>Gerda sentas sin pli bone. Ŝi ĵus finis manĝi. Foriris
					Linda, Tom kaj la policano. Ŝi parolas kun Bob, tre mallaŭte. Ili ja
					devas atenti, ĉu iu proksimiĝas aŭ ne. Feliĉe, eĉ sen speciale
					aŭskulti, ŝi ĉiam bone aŭdis, sufiĉe frue, kiam la aĉulo venas.
					Bob plaĉas al ŝi. Li estas granda kaj forta, kun esprimo de bonkora,
					sindonema hundo.</p>
					<p>Ili parolas pri siaj vivoj, pri la lastaj okazaĵoj. Kiam ŝi
					parolas pri sia edzo, lia vizaĝo ŝanĝiĝas, alprenas iom malĝojan
					esprimon. Ĉu li enamiĝus al ŝi?</p>
					<p>Kaj jen aŭdiĝas paŝoj. Bob saltas sub la liton, provas
					rapide trovi ne tro malkomfortan pozicion sub la lito. "Ne brui," li
					diras al si, "plej grave, plej necese estas ne brui!"</p>
					<p>Envenas la gardanto, la aĉa malgrasulo, kiu, per siaj vortoj
					pri manĝo, tiom suferigis Gerdan. Sed ĉi-foje ŝi povos kontentigi
					lin. Kia plezuro!</p>
					<p>"Mi konsentas," krias Gerda, kiam la maldika aĉulo malfermas
					la pordon. "Mi akceptas vian proponon. Mi ne plu elportas. Mi tradukos
					vian aĉan paperon. Liberigu mian filinon, kaj donu al mi manĝi, mi
					petas."</p>
					<p>"Jen," simple diras la maldikuleto, kaj li elprenas el sako
					panon, kolbason, kukon, fruktojn, ĉokoladon, kaj eĉ botelon da lakto.
					Gerda manĝas silente; ŝi povus manĝi eĉ pli, kvankam ŝi ĵus iom
					manĝis. Bob, aŭdante la manĝobruon, pli kaj pli malsatas, sed kion
					li povus fari?</p>
					<p>"Nu, bonvolu klarigi al mi, kio estas skribita sur tiu malnova
					papero," la vizitanto diras.</p>
					<p>Kaj Gerda klarigas. Ŝi rakontas, ke temas pri la trezoro de la
					Lumoserĉantoj. La Lumoserĉantoj estis sekreta societo, kiu naskiĝis
					en la dek-kvina jarcento kaj daŭris, jen forta, jen malforta, laŭ la
					epokoj, ĝis la mezo de la dek-oka jarcento. Ĝi havis membrojn en tre
					multaj landoj, en popoloj plej malsamaj.  Katolikoj, protestantoj,
					ortodoksuloj, judoj, islamanoj, budhanoj kaj aliaj estis membroj de tiu
					internacia aŭ supernacia societo. Ilia celo estis sekrete labori por
					la unuigo de la mondo, de la popoloj, por la harmoniigo de la religioj,
					kaj por ke la malsamaj tradicioj interkompreniĝu. Ili estis morala kaj
					filozofia elito. Ili estis elpensintaj sekretan lingvon, kiu ebligis al
					ili komuniki, el kiu ajn lando aŭ popolo ili estis. La ŝtatoj, kiam
					ili malkovris la ekziston de la Lumoserĉantoj, ektimis tiujn homojn,
					miskomprenis iliajn celojn, kaj ilin persekutis. Inter la
					Lumoserĉantoj, tre riĉaj homoj troviĝis. Tial, laŭ diversaj
					malnovaj dokumentoj, ilia trezoro estas multvalora. Tiu ĉi papero
					estas fotokopio de dokumento, kiu tre precize indikas, kie oni kaŝis
					la trezoron.</p>
					<p>Gerda klarigas, tradukas, kaj la viro notas ĉiun detalon sur
					etan notlibron. Kiam ŝi finis, li diras:</p>
					<p>"Dankon. Nun ni havas, kion ni deziris. Mi foriras. Mi lasas
					vin tie ĉi. Ni decidos poste, kion ni faros el vi. Adiaŭ, belulino,
					adiaŭ."</p>
					<p>Nur post kiam la pordo fermiĝis kaj la bruo de la paŝoj
					forsvenis, aŭdiĝas de sub la lito voĉo, kiu diras:</p>
					<p>"Ĉu vi lasis al mi iom de tiu kuko?"</p>
				</div>
				<div class="col s12 m4">
					<img src="fr/gerda/bildoj/gerda21-1.gif" class="responsive-img">
				</div>
			</div>'
  WHERE l.kurso = 'GR' AND l.numero = 21 AND le.ordo = 1;

-- leçon 21, section 2
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<section class="klarigo">
				<p>Il n''y a pas de nouveau point de grammaire pour ce chapitre. 
				Vous devriez pouvoir tout comprendre sans trop de difficultés.</p>
			</section>'
  WHERE l.kurso = 'GR' AND l.numero = 21 AND le.ordo = 2;

-- leçon 21, section 3
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<p class="eo eta">Ces mots seront automatiquement ajoutés à votre vocabulaire à réviser lorsque vous aurez terminé d''étudier cette section.</p>
			
			<div class="vortlisto row">
				<div class="col s12 l6">
					<p><span class="eo">adiaŭ</span> : adieu ! <span class="eta">[<i>a-<b>di</b>-aou</i>]</span></p>
					<p><span class="eo">alpreni</span> : prendre</p>
					<p><span class="eo">aresti</span> : arrêter</p>
					<p><span class="eo">bando</span> : bande, gang</p>
					<p><span class="eo">bileto</span> : billet, ticket</p>
					<p><span class="eo">botelo</span> : bouteille</p>
					<p><span class="eo">Budho</span> : Bouddha</p>
					<p><span class="eo">detalo</span> : détail</p>
					<p><span class="eo">difini</span> : définir, déterminer</p>
					<p><span class="eo">elito</span> : élite</p>
					<p><span class="eo">enamiĝi</span> : tomber amoureux (<span class="eo">en</span> + <span class="eo">am</span> + <span class="eo">iĝi</span>)</p>
					<p><span class="eo">filozofio</span> : philosophie</p>
					<p><span class="eo">firma</span> : ferme, qui tient bien</p>
					<p><span class="eo">flughaveno</span> : aéroport</p>
					<p><span class="eo">foto</span> : photo</p>
					<p><span class="eo">harmonio</span> : harmonie</p>
					<p><span class="eo">haveno</span> : port</p>
					<p><span class="eo">indiki</span> : indiquer</p>
					<p><span class="eo">insulo</span> : île</p>
					<p><span class="eo">islamo</span> : Islam</p>
					<p><span class="eo">jen… jen…</span> : tantôt… tantôt…, des fois… des fois…</p>
					<p><span class="eo">judo</span> : juif (nom)</p>
					<p><span class="eo">katoliko</span> : catholique (nom)</p>
					<p><span class="eo">kaverno</span> : caverne</p>
				</div>
				<div class="col s12 l6">
					<p><span class="eo">kolbaso</span> : saucisse, saucisson</p>
					<p><span class="eo">konstante</span> : constamment</p>
					<p><span class="eo">kopio</span> : copie</p>
					<p><span class="eo">lakto</span> : lait</p>
					<p><span class="eo">lando</span> : pays</p>
					<p><span class="eo">libro</span> : livre</p>
					<p><span class="eo">lui</span> : louer, prendre en location</p>
					<p><span class="eo">membro</span> : membre</p>
					<p><span class="eo">morala</span> : moral(e) </p>
					<p><span class="eo">naski</span> : mettre au monde, enfanter</p>
					<p class="sekva"><span class="eo">naskiĝi</span> : naître</p>
					<p><span class="eo">ortodoksa</span> : orthodoxe (adj.)</p>
					<p><span class="eo">persekuti</span> : persécuter</p>
					<p><span class="eo">popolo</span> : peuple</p>
					<p><span class="eo">protestanto</span> : protestant (nom)</p>
					<p><span class="eo">regiono</span> : région</p>
					<p><span class="eo">religio</span> : religion</p>
					<p><span class="eo">signalo</span> : signal</p>
					<p><span class="eo">sindonema</span> : dévoué(e) (= <span class="eo">ema doni sin</span>)</p>
					<p><span class="eo">societo</span> : association, société</p>
					<p><span class="eo">ŝtato</span> : état (peuple ou pays organisé politiquement)</p>
					<p><span class="eo">trezoro</span> : trésor</p>
					<p><span class="eo">valori</span> : valoir, avoir une (certaine) valeur</p>
					<p class="sekva"><span class="eo">valoro</span> : valeur</p>
				</div>
			</div>'
  WHERE l.kurso = 'GR' AND l.numero = 21 AND le.ordo = 3;

-- leçon 21, section 4
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##EKZERCO:94##
			##EKZERCO:95##'
  WHERE l.kurso = 'GR' AND l.numero = 21 AND le.ordo = 4;

-- leçon 21, section 5
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<div class="row">
				<div class="col s12">
					<div class="card-panel blue lighten-5">
						En tiu ĉapitro, estas du malsamaj rakontoj de <i>Lasu min paroli plu !</i>.<br>
						<a href="#unua">Ho bela naskiĝurbo!</a><br>
						<a href="#dua">Adiaŭ lando amata!</a>
					</div>
				</div>
			</div>

			<a id="unua" class="scrollspy"></a>
			<h3>Ho bela naskiĝurbo!</h3>
		
			<p>Rigardu! Ĉi tie mi naskiĝis. Ĉu ne bela loko? Mi dubas, ĉu
			ekzistas io simila aliloke en la mondo. Ĉu la montoj ne estas
			nekredeble belaj? Ĉu vi konas pli mirindan vidaĵon? Rigardu la
			urbeton, kun ĝiaj malnovaj domoj kaj ĝiaj mallarĝaj stratoj, kiuj
			turniĝas serpente, ĉu vi ie ajn vidis ion similan? Rigardu tiujn
			malnovajn ŝtonmurojn. Ne ofte oni ankoraŭ vidas tiel perfektan
			urbomuregon. La tuta urbo estas plena je trezoroj multjarcentaj. Mi
			dubas, ĉu ilia valoro estas konata. Sed certe ĝi estas tre alta.</p>
			
			<p>La urbodomo<a href="#notoj">[1]</a> estas mirinda artaĵo. Vi certe jam vidis fotojn de
			ĝi, ĉu ne? Multaj venas al ĉi tiu urbeto nur por rigardi la
			urbodomon kaj foti ĝin. Se vi havas bonan fotoaparaton, ni iros tien,
			kaj mi indikos al vi, de kiu angulo ĝi aspektas plej bele.</p>
			
			<p>Fakte, multaj el tiuj mallarĝaj stratoj ne estas tre puraj, sed tio
			ne ĝenos vin, ĉu?</p>
			
			<p>Mia frato volas fari libron pri nia naskiĝurbo. Li ankoraŭ vivas ĉi
			tie. Mi foriris antaŭ longe, tuj post kiam niaj gepatroj mortis kaj
			oni vendis la magazenon. Sed mia frato restis plu.</p>
			
			<p>Ĉu vi sentas la harmonion de ĉi tiu loko? Bedaŭrinde, la suno
			ankoraŭ ne montriĝis, ĉar la lumo nun ne estas tute kontentiga por
			foti.</p>
			
			<p>Via fratino foje venis ĉi tien, ĉu ne? Ŝi venis kun iu muzika
			societo, se mi bone memoras. Mi tre ŝatas vian fratinon, vian plej
			junan fratinon, almenaŭ. La alian mi ne konas. Sed via plej juna
			fratino estas tre kara al mi. Ŝi estas tiel dolĉa! Dolĉa, harmonia
			vizaĝo, kaj belega voĉo. Ne mirige, ke ŝi ludas muzikon. Estas
			bedaŭrinde, ke ŝi estas tiel... kiel diri?... ne timema, sed...
			ne-sinmontrema. Ŝi parolas tiel mallaŭte, ke oni sentas, kvazaŭ ŝi
			timus, ke oni rimarkos ŝian ĉeeston. Kial bela knabino kiel ŝi
			timas, se oni rigardas ŝin?</p>
			
			<p>Via fratino lernis muzikon eksterlande, ĉu ne? Mi ne memoras, en kiu
			lando. Kaj ŝi iris al multaj diversaj landoj dank'' al sia muziko.
			Devas esti plaĉe, kaj interese, iri de lando al lando kun
			muzikistaro. Sed eble tiu ĉiama translokiĝo estas laciga.</p>
			
			<p>Nun, se vi havas ankoraŭ tempon, mi kondukos vin al la alia flanko de
			la urbo. Multaj malnovaj domoj estas vidindaj tiuflanke. Ĉi-flanke
			estas bone por havi plenan ideon pri la urbo, ĉar ni troviĝas
			sufiĉe alte por havi bonan rigardon al la tuto. Sed estas malpli da
			vidindaĵoj ĉi-flanke. La plej vidindaj aferoj troviĝas trans tiu
			larĝa strato, kiun vi vidas dekstre. Tie ja komenciĝas la malnova
			urbo.</p>
			
			<p>Ĉu vi scias, ke oni daŭre esploras serĉe al malnovaĵoj ĉi-urbe?
			Sub la monteto, sur kiu ni staras, oni trovis multajn valorajn
			objektojn.</p>
			
			<p>La historiistoj ne interkonsentas inter si pri diversaj aspektoj de la
			urba historio. Sed oni malkovris postrestaĵojn el muroj kaj domoj ĉi
			tie ene de la monteto. Oni eĉ trovis meblojn, laborilojn kaj
			diversajn objektojn, ekzemple pecojn de boteloj, tie ĉi, precize sub
			la loko, kie ni nun staras.</p>
			
			<p>Oni kredas, ke dum persekutoj, homoj venis vivi ĉi tie sube. Antaŭ
			kelkaj jarcentoj, la ŝtato persekutis multajn pro ilia religio. Se la
			afero interesas vin, mi donos al vi libron pri tiu persekutado.
			Teruraj aferoj okazis. Homa vivo ne plu havis valoron por la tiuepokaj
			aŭtoritatoj. Ili mortigis kaj suferigis homojn sen eĉ plej eta
			kortuŝo. La popolo terure suferis.</p>
			
			<p>Nu, tiel estas la vivo, ĉu ne? Ekzistas personoj, kiuj bedaŭras la
			malnovan tempon, la pasintajn epokojn. Mi ne. La vivo estas pli bona
			nun, almenaŭ por ni ĉi tie, ĉar ni scias, ke en la resto de la
			mondo homa persono ne ĉiam estas konsiderata kiel la valora estaĵo,
			kiu ĝi estas, aŭ devus esti, laŭ mia opinio.</p>
			
			<p>Ĉu vi sufiĉe rigardis la vidaĵon? Bone. Ni do povas iri al la alia
			flanko, kie ni povos vidi de proksime tiujn malnovajn domojn. Venu. Mi
			kondukos vin. Mi estas certa, ke tiu malnova urbo ege plaĉos al vi.</p>
			
			<a id="notoj"></a>
			<p class="rimarko"><strong>NOTOJ</strong> : 
			<ol>
				<li><span class="eo">Urbodomo</span> : domo, kie troviĝas la ĉefaj urb-administraj oficejoj.</li>
			</ol>

			<a id="dua" class="scrollspy"></a>
			<h3>Adiaŭ lando amata!</h3>
		
			<p>Adiaŭ, lando de mia naskiĝo! Mi forveturas. Mi ne plu manĝos viajn
			sensimilajn kolbasojn. Ne plu okazos, ke mi forgesos la zorgojn,
			perdante iom post iom la konscion pro via tro forta brando, kaj pro
			viaj troaj trinkotradicioj.</p>
		
			<p>Mi ne plu legos viajn librojn multvalorajn. Mi ne plu baniĝos en via
			kolora sed harmonia atmosfero. Mi ne plu sentos la dolĉecon de via
			religia vivo, ĉeestanta en ĉiu urbo, en ĉiu kampo, en ĉiu domo, en
			ĉiu plej malgrava, forperdita anguleto de la lando. Mi ne plu aŭdos
			la kriojn de viaj vendistoj, la plendojn de la aĉetantoj, la
			diskutojn pri la vera valoro de tio kaj tio ĉi. Mi ne plu vizitos la
			kunvenojn de la kantosocieto, kaj via muziko ne plu aŭdeblos, kiam mi
			promenos de strato al strato en la granda novmonda urbego, kien mi nun
			veturos kaj kie mi sentos min perdita, plia senvalora numero en mondo
			de senvaloraj numeroj.</p>
			
			<p>Adiaŭ, lando de mia juneco! Ĉi tie mi naskiĝis, ĉi tie mi vivis
			infanecon, ĉi tie mi ekkonis mian unuan amon, ĉi tie mi suferis.</p>
			
			<p>Ĉu mi suferas nun? Strange, mi ne povas respondi. Mi scias, ke mi
			forflugas al nehoma mondo, al lando timiga, kie mono valoras pli ol
			sentoj, scioj pli ol amo, kaj laboro pli ol ludo. Ili tie altvalorigas
			pensadon, ne kantadon, amiko diris al mi, kaj li sciis, ĉar li tie
			estis studento. Mi scias, kion mi forlasas. Mi ne scias, kio atendas
			min, tie transe.</p>
			
			<p>Lastfoje mi rigardas vin, mia popolo! Homoj surstrataj, miaj
			samlandanoj, mi rigardas vin nun per novaj okuloj. Kiel kolore vi
			estas vestitaj, kiel ĝoje vi alparolas unu la alian, kiel vive vi
			ĉiuj aspektas! En tiu lando de laktotrinkantoj, kie mi baldaŭ
			ekvivos, ĉio estas senkolora, kaj la bruoj pli esprimas furiozon ol
			feliĉon, laŭ tio, kion mi aŭdis.</p>
			
			<p>Ŝtelistoj multas ĉi tie, sed ankaŭ tie, ĉu ne?, kvankam laŭdire
			ili ne agas same. Tie estas instruitaj ŝtelistoj, kiuj vizitadas la
			lernejojn dum longaj jaroj kaj scias funkciigi sian kapon. Ĉe ni,
			ŝtelisto agas ŝance, per rapida faro tute simpla, ĝenerale
			sukcesas, fojfoje kaptiĝas, nu, ĉiuj ridas, neniam estas dramo. Nur
			momento en la vivo. Kaj ĉiuj komprenas malriĉecon. Tie ŝtelistoj
			havas planojn. Ili planas siajn agadojn. Ili eĉ grupiĝas multhome
			kaj kunordigas la laboron. Imagu al vi! Tie transe, ŝtelistoj nomas
			sian okupon «laboro»! Kia stranga maniero aranĝi sian vivon! Se
			ŝteli estas labori, kial ne simple honeste labori?</p>
			
			<p>Adiaŭ, ŝtelistoj mialandaj! Kaj adiaŭ ankaŭ al vi, ŝtelema
			ŝtato! Vi tro malsatas je la mono de l'' landanoj. Oni diris, ke tie
			almenaŭ la ŝtato estas honesta, aŭ preskaŭ honesta. Ni diru:
			«sufiĉe honesta». Almenaŭ, laŭ miaj informoj, ŝajnas, ke la ĉefa
			celo de la ŝtatfunkciuloj tie estas io alia ol plenigi siajn poŝojn
			per la ŝtatana mono. Ne ĉe ni. Adiaŭ ŝtatoficistoj diverstipaj,
			altaj kaj malaltaj, junaj kaj maljunaj! Mi lasas vin al via tutlanda
			ŝtelplanado kaj al via subtabla enmanigo de tiom kaj tiom da riĉo,
			kiu devus servi al la feliĉo de l'' popolo, ne al tio, ke vi
			pligrasiĝu.</p>
			
			<p>Adiaŭ, patrolanda kamparo! Mi naskiĝis ĉe vi, ho kampoj
			maldolĉaj, kaj mi scias, pro kio vi maldolĉas. Min naskis vi,
			kamparanoj, kaj mi vidis vian suferon, vian nelacigeblan laboradon,
			sed ankaŭ vian nemortigeblan povon estigi ridon kaj kantadi ĉe plej
			aĉaj vivkondiĉoj.</p>
			
			<p>Adiaŭ, fantomoj, kiujn la montoj naskas ĉi-lande! Oni ne kredas je
			vi tie, kien mi iras. Oni kredas je scienco kaj je «esploroj plene
			dokumentitaj». Kaj vi, fantomoj, ridas super la sciencaj esploroj,
			kiuj neniam kaptas vin. Kaj pro vi, «ili» ne komprenas nin. Kiel tiuj
			homoj povus kompreni popolon, kiu meze de scienca laboro, sentas, ke
			fantomo ĉeestas, kaj rimarkas ridete, ke li kredas pli je l'' fantomo
			ol je l'' laboro farata? Jes, mi adiaŭas vin, fantomoj, kiuj teruris
			mian infanecon, kaj tro emis min sekvi ien ajn. Mi forfuĝas al
			senfantoma lando, kaj vivos fine vivon liberan je via ĝena ĉiama
			enmiksiĝo.</p>
			
			<p>Adiaŭ, naskiĝlando mia! Neniu iam ajn, ie ajn, sukcesis kopii viajn
			artojn, viajn tradiciojn, vian atmosferon. Nenie troveblas same pura
			aero, same manĝindaj fruktoj, same veraj amikoj. Vi estas sensimila
			lando, la plej ŝatinda lando en la mondo, la lando de mia naskiĝo.</p>
			
			<p>Kaj tamen mi feliĉe forveturas.</p>
			
			<p>Min persekutis via polico. Min ĝenis via ĉiama bezono kontroli, kion
			mi faras, kion mi diras, kiu min vizitas, kiun mi vizitas, kaj tiom da
			aliaj detaloj pri mia vivo. Vi tro zorgas pri viaj ŝtatanoj. Vi tro
			okupiĝas pri la landanaro. Kaj via celo, ho ŝtato, ne estas, ke ni
			vivu feliĉe, sed ke vi direktadu ĉiun kaj ĉion ĉi-lande.</p>
			
			<p>Kiel liber-ama homo povus elporti tian situacion? Kiel oni povas havi
			dignecon en tiaj kondiĉoj? Ĉu vi ne komprenis, kiom digneco valoras
			por homo, kiom ĝi necesas, kiom ni bezonas ĝin?</p>
			
			<p>Adiaŭ, naskiĝlanda polico, scivolema, kontrolema, komfort-ama polico!
			Mi forflugas por ĉiam. Multo mankos al mi. Mankos la koloroj, la
			muziko, la kantoj. Mankos mialingvaj libroj, kiujn mi ne povos tie
			fore ricevi. Mankos la vizaĝoj, la voĉoj, la ridoj.</p>
			
			<p>Sed al mi almenaŭ, ho ŝtata polico, certe ne mankos vi.</p>'
  WHERE l.kurso = 'GR' AND l.numero = 21 AND le.ordo = 5;

-- leçon 21, section 6
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##RESUMO##'
  WHERE l.kurso = 'GR' AND l.numero = 21 AND le.ordo = 6;

-- leçon 22, section 1
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<fieldset class="sono">
				<legend>Aŭskultu tiun rakonton:</legend>
				<p>
					<audio id="audioPlayer" controls="controls" type="audio/mpeg">
						<source type="audio/mp3" src="fr/gerda/son/gerda/gerda22.mp3" />
					</audio>
				</p>
			</fieldset>
			<h3>En la kaverno</h3>
			<div class="row dialogo">
				<div class="col s12 m8">
					<p>Baldaŭ venis la policanoj, por ilin liberigi. Gerda reiris
					hejmen, al siaj filino kaj edzo. Sed Bob rapidis al la flughaveno. Li
					volis ĉeesti kun Linda kaj Tom, kiam la policano arestos la kaptintojn
					de Gerda.</p>
					<p>Estis sufiĉe multekosta vojaĝo, sed la familio de Gerda –
					riĉa familio – pagis por ili la bileton, tiel esprimante sian
					dankemon.</p>
					<p>Ĉar la policano kaj la gejunuloj sciis pli frue ol la
					ŝtelistoj, kie troviĝas la trezoro, ili havis multe da tempo por
					prepari sin. Ili ne dubis, ke la aliaj venos kiel eble plej baldaŭ,
					kaj ke la tuta bando venos. Kutime tiaj homoj ne fidas sin reciproke,
					kaj volas kune ĉeesti por certiĝi, ke neniu kaŝos por si parton de
					la trovaĵo.</p>
					<p>La loko indikita troviĝis ĉe la piedo de monto, en kaverno,
					kie, videble, neniu paŝis jam de jaroj.</p>
					<p>"Feliĉe, ke ili ne kaŝis tiun trezoron trans la maro,
					ekzemple sur insulo, kien nur per ŝipo oni povas iri. Se estis vere
					internacia societo, kiel Gerda diris, tio estis ebla, ĉu ne?" Tiel
					parolis Linda.</p>
					<p>"Vi pravas," diris Tom. "Mi tute ne ŝatus vojaĝi ŝipe. La
					maro ĉiam igas min malsana. Mi ŝatas rigardi la maron, resti ĉe la
					maro, libertempi apud la maro, sed ne vojaĝi per ŝipo sur ĝi: ŝipoj
					konstante dancas sur la maro, kaj ilia danco tute ne plaĉas al mi.
					Feliĉe, ke hodiaŭ oni povas iri preskaŭ ien ajn aviadile.  Aviadiloj
					preskaŭ tute ne dancas. Sed eĉ aviadiloj nur duone plaĉas al mi.
					Plej multe mi preferas, kiam mi veturas sur tero, sur bona firma tero.
					Mi bezonas sub mi ion pli firman ol akvo aŭ aero. Plej plaĉe estas
					promeni piede sur bona tera vojo. Mi…"</p>
					<p>Sed Linda interrompis lian paroladon, iom strangan en tiuj
					kondiĉoj, en kiuj ili troviĝis:</p>
					<p>"Kiam alvenos la trezor-serĉantoj, laŭ via opinio?" ŝi
					demandis la policanon.</p>
					<p>"Morgaŭ, tute certe. Ili ne povus alveni hodiaŭ, ĉar ne plu
					estis aviadilo post la nia, kaj aŭte ili bezonus la tutan nokton.
					Verŝajne Bob flugos en la sama aviadilo."</p>
					<p>La temperaturo estis plaĉa, kaj bela la vetero. Ili starigis
					sian tendon en la proksimeco, tamen bone prizorgante, ke ĝi ne estu
					videbla por alvenantoj. La sola maniero, laŭ kiu la trezorserĉantoj
					povus alveni antaŭ la morgaŭa tago, estus, ke ili flugu per malgranda
					aviadilo, speciale luita. Sed lui specialan aviadilon kostas tiel
					multe, ke plej verŝajne ili ne uzos tiun rimedon.</p>
					<p>La sekvantan matenon, niaj amikoj vekiĝis frue. Tuj la
					policano kaj la gestudentoj aranĝis, ke ĉiu el ili, unu post la alia,
					gardostaros en loko, de kie eblas facile observi la solan vojon — aŭ
					pli ĝuste vojaĉon – laŭ kiu oni povas proksimiĝi al la kaverno,
					kaj ke ĉiu havos en la kaverno sian difinitan kaŝejon.</p>
					<p>Post tri horoj da atendado, io fine okazis. Linda, kiu
					gardostaris en la iom alta observejo, faris la deciditan signalon, kaj
					rapide kuris de supre al siaj kunuloj.</p>
					<p>"Aŭto alvenas!" ŝi kriis.</p>
					<p>En tiu ege soleca regiono, kiu povus veni aŭte per tiu tera
					vojaĉo, se ne la trezorserĉantoj? La tri atendantoj sin kaŝis, ĉiu
					en sia difinita loko, malantaŭ rokoj, da kiuj oportune troviĝis multe
					en la kaverno.</p>
				</div>
				<div class="col s12 m4">
					<img src="fr/gerda/bildoj/gerda22-1.gif" class="responsive-img">
				</div>
			</div>'
  WHERE l.kurso = 'GR' AND l.numero = 22 AND le.ordo = 1;

-- leçon 22, section 2
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<section class="klarigo">
				<h4>-eca : <i>relatif à, qui a l''apparence, certaines des caractéristiques</i></h4>
				<p><span class="eo">infano</span> : enfant → <span class="eo">infaneca</span> : infantile</p>
				<p><span class="eo">sola</span> : seul → <span class="eo">soleca</span> : solitaire</p>
				<p><span class="eo">ruĝa</span> : rouge → <span class="eo">ruĝeca</span> : rougeaud, rougeâtre</p>
			</section>'
  WHERE l.kurso = 'GR' AND l.numero = 22 AND le.ordo = 2;

-- leçon 22, section 3
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<p class="eo eta">Ces mots seront automatiquement ajoutés à votre vocabulaire à réviser lorsque vous aurez terminé d''étudier cette section.</p>
			
			<div class="vortlisto row">
				<div class="col s12 l6">
					<p><span class="eo">aviadi</span> : voler (en avion)</p>
					<p class="sekva"><span class="eo">aviadilo</span> : avion</p>
					<p><span class="eo">danci</span> : danser</p>
					<p><span class="eo">familio</span> : famille</p>
					<p><span class="eo">gardostari</span> : monter la garde</p>
					<p><span class="eo">hodiaŭ</span> : aujourd''hui</p>
					<p><span class="eo">kosti</span> : coûter</p>
					<p><span class="eo">maro</span> : mer</p>
					<p><span class="eo">morgaŭ</span> : demain</p>
					<p><span class="eo">multekosta</span> : cher, chère</p>
					<p><span class="eo">pagi</span> : payer</p>
					<p><span class="eo">parto</span> : partie</p>
				</div>
				<div class="col s12 l6">
					<p><span class="eo">prepari</span> : préparer</p>
					<p><span class="eo">rimedo</span> : moyen, ressource, remède</p>
					<p><span class="eo">supre</span> : en-haut</p>
					<p class="sekva">→ <span class="eo">malsupre</span> : en-bas</p>
					<p class="sekva">→ <span class="eo">supren</span> : vers le haut (direction)</p>
					<p class="sekva">→ <span class="eo">malsupren</span> : vers le bas (direction)</p>
					<p><span class="eo">ŝipo</span> : bateau</p>
					<p><span class="eo">temperaturo</span> : température</p>
					<p><span class="eo">tendo</span> : tente</p>
					<p><span class="eo">tero</span> : terre, sol</p>
					<p><span class="eo">vetero</span> : temps (météo)</p>
					<p><span class="eo">vojaĝi</span> : voyager</p>
				</div>
			</div>'
  WHERE l.kurso = 'GR' AND l.numero = 22 AND le.ordo = 3;

-- leçon 22, section 4
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##EKZERCO:96##					
			##EKZERCO:97##'
  WHERE l.kurso = 'GR' AND l.numero = 22 AND le.ordo = 4;

-- leçon 22, section 5
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<div class="row">
				<div class="col s12">
					<div class="card-panel blue lighten-5">
						En tiu ĉapitro, estas du malsamaj rakontoj de <i>Lasu min paroli plu !</i>.<br>
						<a href="#unua">Ek al fora insulo!</a><br>
						<a href="#dua">Skribas malliberulo</a>
					</div>
				</div>
			</div>

			<a id="unua" class="scrollspy"></a>
						<fieldset class="sono">
				<legend>Aŭskultu tiun rakonton:</legend>
				<p>
					<audio id="audioPlayer" controls="controls" type="audio/mpeg">
						<source type="audio/mp3" src="audio/lasumin22a.mp3" />
					</audio>
				</p>
			</fieldset>			<h3>Ek al fora insulo!</h3>
		
			<p>Mi saltas pro ĝojo, mi dancas pro ĝojo, mi eksplodas per rido pro
			ĝojo. Estas aranĝite: mi forvojaĝos. Hieraŭ jam mi ricevis
			antaŭan sciigon, ke verŝajne mia espero realiĝos. La ĉefoj bezonis
			iun, sed mi timis, ke ili preferos Petron. Petro estas pli ŝatata,
			ĝenerale, en la oficejo. Li estas pli laborema ol mi, tio estas
			fakto. Sed ili bezonis lin por alia tasko, pli malfacila ol ĉi tiu.</p>
			
			<p>Mia tasko estos sufiĉe simpla. Nur mi estu tre firma en la diskutoj,
			ili diris. Esti firma ne prezentas problemon al mi, feliĉe. Mia
			firmeco estas konata de la tuta oficistaro kaj de niaj aŭtoritatoj.
			Kiam mi decidis diri «ne», mi diras «ne», kiom ajn oni provas ŝanĝi
			mian pozicion. Mi firme tenas mian pozicion. Tial ili fidas min
			ĉi-okaze. Ili scias, ke mi agos laŭ iliaj interesoj. Oni fojfoje
			plendas pri mia obstineco. Nu, ĉi-foje ĝi servos al bona celo. Oni
			ne sukcesos min movi. Kaj tian homon ili deziris sendi, homon, kiun
			oni ne movos de la pozicio, kiun li promesis teni.</p>
			
			<p>Mi do forvojaĝos. Unue aviadile. Poste ŝipe. Mi antaŭĝojas ŝipi.
			Al aviadiloj mi ne havas specialan ŝaton. Mi ne malŝatas flugi
			aviadile; mi tre ŝatas vojaĝi, do kial mi plendus, se miaj ĉefoj
			sendas min malproksimen aviadile? Sed ŝipon mi antaŭĝojas. Mi
			neniam ŝipis sur vera granda maro. Oni diris al mi, ke tio estas tre
			malstreĉa. Kaj oni povas movi sin. Ĝuste tio min ĝenas en
			aviadiloj. Estas tre malmulte da ebleco por moviĝi. Kaj verdire mi
			estas tre moviĝema. Se mi ne povas movi miajn krurojn, iom promeni,
			iri de loko al loko, mi perdas la kapon. Mi, pri kiu oni tiel ofte
			diras, ke «mi havas la kapon sur la ĝusta loko»! Prave, se almenaŭ
			oni permesas al mi moviĝi.</p>
			
			<p>Do ne gravas, ke mi devos uzi aviadilon dum parto de la vojaĝo. Sed
			mi iras al insulo, kien oni ne povas flugi, tial ili pagas al mi, ne
			nur la aviadilan vojaĝon, sed ankaŭ la ŝipan. Blua maro senfina!
			La plaĉa dancado de la ŝipo! Afablaj kunuloj, kiuj ridetas la tutan
			tempon, ĉar ili sentas sin feliĉaj, ke ili vojaĝas de insulo al
			insulo. Ha, la sento de senfina libereco!</p>
			
			<p>Kaj la penso, ke tiuj aliaj vojaĝantoj certe pagis multe da mono por
			ŝipi en la insularon, dum mi iras por mia laboro, por eĉ ne
			malfacila laboro, nur ĉar bonŝance mi scias la bezonatan lingvon,
			kaj ĉar mi estas konata kiel firma persono, tiu penso — ke la aliaj
			pagas mem, kaj mi ne — estas plej plezuriga.</p>
			
			<p>Hodiaŭ mi ricevis la biletojn. Aviadila bileto estas tute banala. Mi
			jam havis kelkajn en mia vivo. Sed ŝipbileton mi neniam tenis en miaj
			manoj, kaj la tuŝo de ĝi naskas en mi plej plaĉan plezuron.
			
			<p>Kompreneble, la amikoj tuj rimarkis mian ĝojon, kaj ne hezitis ĝin
			alsalti. «Vi prikantas la bele bluan maron kaj la riĉajn
			kunŝipulojn», ili diris, «kaj kiam vi troviĝos surloke, la maro
			estos brune verdaĉa, aŭ nigraĉa, la moviĝo de la ŝipo igos vin
			malsana, kaj la riĉaj vojaĝantoj estos nur bando da aventuruloj, kiuj
			konstante ĝenos vin».</p>
			
			<p>Mi multe ridis aŭskultante ilin. Ili ne povis agi alimaniere. Ĉiu el
			ili ŝatus okupi mian lokon, kaj per siaj senkuraĝigaj vortoj ili
			esprimis tiun senton, ke tro bonŝanca estas mi. Sed ili ankaŭ ŝatas
			min, ili estas bonaj amikoj, kaj ili amike ridis pri mia troa imagado.
			«La realo estos alia», ili ripetis. Nu, bone, eĉ se ĝi estos alia,
			mi akceptos ĝin. Mi ne timas ŝipmalsanon aŭ verdaĉan multemovan
			maron. Mi eĉ ne timas aventuremajn kunvojaĝantojn.</p>
			
			<p>Mi deziris iri al tiu insulo, mi subkomprenigis al miaj ĉefoj, ke mi
			estas la ĝusta persono tiurilate, mi agis laŭcele, uzante la
			ĝustajn rimedojn, mi trovis solvon al ĉiuj problemoj — aŭ
			pseŭdoproblemoj — kaj respondon al ĉiu demando, mi agis laŭ mia
			obstina, firma maniero, kiel kutime, kaj mi sukcesis venigi ilin al la
			dezirata decido.</p>
			
			<p>Granda vojaĝo baldaŭ komenciĝos. Morgaŭ mi devos vizitadi la
			ĉefajn magazenojn de la urbo, ĉar multon ankoraŭ necesas aĉeti.
			Ĉiam mankas aferoj, kiam oni preparas grandan vojaĝon al malproksima
			loko.</p>
			
			<p>Ne estas facile decidi pri la vestoj. Kelkfoje la vetero estas
			malvarma tie, sed ĝenerale ĝi estas bela kaj plaĉa. Ĉu preni
			serioze la opiniojn, ke necesas antaŭvidi malvarman veteron kaj
			kunpreni vestojn laŭ tiu ebleco? Aŭ ĉu ili sennecese aldonos pezon
			al la jam sufiĉa pezo de la aferoj, kiujn mi kunportos?</p>
			
			<p>Oni diris, ke kelkaj kavernoj estas vizitindaj, ĉar la naturo en ili
			alprenis plej strangan aspekton, vere vidindan. Ne ekzistas io simila
			aliloke. Eble do estus saĝe kunpreni varmajn vestojn. Kavernoj ĉiam
			estas malsekaj kaj malvarmaj. Se krome la vetero ne montriĝos plej
			bela...</p>
			
			<p>Jes, la preparado de vojaĝo ne estas ĉiurilate facila, sed tamen ĝi
			estas interesa. Ĉar oni jam antaŭvojaĝas en-image.</p>
			
			<p>Multekostajn aferojn mi ne kunprenos. Oni devas konsideri la riskon de
			ŝtelo aŭ perdo. Mi ne ŝatas multekostajn aferojn. Kaj eble mi povos
			aĉeti tie, surloke. Mi devos informiĝi pri la vivkostoj tieaj. Eble
			varmaj vestoj ne kostas multe kaj facile aĉeteblas. Se jes, tio
			solvus la problemon.</p>
			
			<p>Estas ankaŭ montoj, kiujn oni vizitu. Supre de monto, ĝenerale, la
			temperaturo estas malalta. Sed ĉu mi iros supren? Ĉu valoros la
			laciĝon? Oni facile laciĝas marŝante supren en montaro. Eble oni
			povas veturi ĝis la supro de la plej belaj montoj. Sed eĉ veture,
			oni malvarmiĝas. Nu, mi vidos. Se estas tro multekoste por aĉeti
			varmajn vestojn, mi ne aĉetos ilin.</p>
			
			<p>La Oficejo pagas al mi la vojaĝon, ĝi pagas la restadon en tre bona
			hotelo, ĝi pagas kelkajn aliajn hotelajn tranoktadojn en tiu aŭ alia
			lando survoje, mi tamen ne povus atendi, ke ĝi krome pagos miajn
			vestojn! Se mi bezonos varmajn vestojn por iri al la montosuproj, kaj
			trovos ilin tro multekostaj, mi decidos pri io alia. Mi ne iros al la
			montosuproj kaj trovos aliajn vidindaĵojn. Ili ne mankas, oni diris
			al mi.</p>
			
			<p>Mi skribos al mia familio. Ankaŭ pri tio mi antaŭĝojas. Mi ŝategas
			skribi por rakonti miajn aventurojn. Tiam mi sentas min en tre
			proksima rilato kun ĉiuj familianoj. Estas feliĉo havi grandan
			familion. Multaj ne samopinias, sed al mi tio plaĉas. Mi skribos al
			miaj gepatroj, al la gefratoj, kompreneble, sed ankaŭ al onkloj kaj
			onklinoj, kaj al iliaj gefiloj, kaj, krom ili, al la amikoj. Mi
			pasigos multajn noktojn leterskribante. Mi scias, ke ĉiu tre ĝojos
			ricevi novaĵojn de mi.</p>
			
			<p>Multaj personoj trovus stranga mian deziron pasigi la vesperojn kaj
			noktojn en hotelĉambro, skribante leteron post letero al tuta aro da
			familianoj, kaj al la tuta amikaro, dum mi povus viziti la dancejojn,
			ludejojn, teatrojn aŭ aliajn lokojn. La diablo eble scias, kiom da
			ejoj ekzistas nur por kapti la monon de la eksterlandanoj. Vojaĝantoj
			ofte estas monperdemaj. Eble ili estas riĉaj kaj vojaĝas per sia
			mono. Sed mi vojaĝos en tute aliaj kondiĉoj, ĉar nur per la mono de
			la Oficejo. Do mi ne iros danci kun nekonataj lokanoj, aŭ rigardi
			solece teatraĵon. Mi restos enhotele kaj skribos al miaj cent
			familianoj.</p>
			
			<p>Kia vivo! Kia feliĉo! Kia plezuro! Mi apenaŭ eltenas la streĉon
			atendi ĝis venos la Tago de la Granda Forveturo. Oni diris, ke estas
			kelkaj malsanoj tie, pri kiuj oni devas sin gardi. Nu, mi informiĝos.
			Mia familia kuracisto certe povos diri al mi, ĉu iu aŭ alia faro
			estas deviga, aŭ eĉ simple farinda, kiel rimedo antaŭgardi la
			sanon. Mi forte deziras ne malsaniĝi tie. Mi ne ŝatus restadi longe
			en malsanulejo fore de la tuta familio kaj amikaro. Mi kompreneble
			amikiĝus kun lokanoj, se mi devus longe resti tie, sed se tio ne
			estas necesa, mi preferas ne.</p>
			
			<p>Diable! Kiel rapide la tempo pasas! Jam estas preskaŭ la kvina kaj
			duono. Tereza baldaŭ alvenos, kaj mi ankoraŭ nenion preparis. Kaj mi
			promesis al ŝi pomkukon kaj mian specialan fruktosukan trinkaĵon.
			Ek, al la laboro! Mi povas pensi pri mia vojaĝo ankaŭ preparante la
			manĝon.</p>
			
			<a id="dua" class="scrollspy"></a>
						<fieldset class="sono">
				<legend>Aŭskultu tiun rakonton:</legend>
				<p>
					<audio id="audioPlayer" controls="controls" type="audio/mpeg">
						<source type="audio/mp3" src="audio/lasumin22b.mp3" />
					</audio>
				</p>
			</fieldset>			<h3>Skribas malliberulo</h3>
		
			<p>Kara Amikino,</p>
		
			<p>Mi ne konas vin, sed vi permesos, ĉu ne?, ke mi nomu vin amikino. Mi
			ne scias, kiel danki vin. Via letero estas por mi tiel neatendita
			belaĵo, ke mi ne trovas vortojn por esprimi, kion mi sentas. Ĝi
			estis korvarmiga. Kaj mi starigas al mi multajn demandojn: Kiel vi
			eksciis pri mi? Kiu pri mi parolis al vi? Kiel eblas, ke vi havis
			tiun ideon ekrilati kun mi letere? Kiu ajn intervenis por rilatigi
			vin kun mi, mi tiun plej sincere dankas.</p>
			
			<p>Jes, kiel vi diras en via letero — kaj mi gratulas vin pro via
			realeca imagpovo — vivo en malliberejo ne estas facila. Tiuj, kiuj
			estas plene liberaj, ne konas la valoron de libereco. Libereco similas
			al sano. Oni ekkonscias ĝian havindecon nur post kiam oni perdis
			ĝin. Ĉu vi konas la komencon de «Sinjoro Tadeo» de Mickiewicz<a href="#notoj">[1]</a>?</p>
			
			<p class="citajxo">
			Litvo<a href="#notoj">[2]</A>! Patrujo<a href="#notoj">[3]</A> mia, simila al sano,<br>
			Vian grandan valoron ekkonas litvano<br>
			Vin perdinte...</p>
		
			<p>Nu, tion saman mi povas diri pri libereco. </p>
		
			<p>Pri manĝoj kaj similaj aferoj mi ne tro povus plendi. Ni ne estas en
			granda, riĉula hotelo, kompreneble, sed tiuj aspektoj de nia vivo
			estas akcepteblaj. Kio apenaŭ estas eltenebla<A HREF="#notoj">[4]</A>, tio estas la manko
			de libereco. Ne povi eliri. Ne povi viziti magazenojn. Neniam povi
			decidi pri siaj movoj. Ne promeni en naturo. Ne vidi domojn, urbon,
			kampojn. Scii, ke antaŭ longe ne estos libertempo, ne estos ebleco
			vojaĝi al maro aŭ montoj. Tio estas... kiel mi povus diri? Ne
			ekzistas vorto por klarigi tion... tio estas subiga. Subfaliga. Ĉu vi
			komprenas?</p>
			
			<p>La alia terura afero, por viroj, en la malliberejoj de ĉi tiu lando,
			estas la manko de virinoj. Vi ne imagas, kiom mankas virinoj al ni. Ne
			nur por para amo aŭ por plezuro korpa. Sed nur vidi virinon, aŭdi
			inan voĉon, rigardi la belecon kaj dolĉecon de ina persono! Tiu
			neebleco estas terura manko por ni.</p>
			
			<p>Estas ĉi tie kelkaj junuloj kun bela vizaĝo kaj korpo maldika. Se vi
			scius, kiel oni rigardas ilin! Kaj ne temas nur pri rigardoj,
			kompreneble. Ĉu vi trovas min aĉa, ĉar mi priparolas tiajn aferojn? 
			Pardonu min. Ili estas parto de nia realo ĉi tie, kaj la afero
			estas perfekte komprenebla en mondo, kie virinoj tute forestas.</p>
			
			<p>La fakto, ke la propono interŝanĝi leterojn kun kompatinda
			malliberulo venis de virino, igis la aferon eĉ pli kor-altiga al mi.
			Ĉu vi komprenas mian esprimon? «Kor-altiga»: per tio, mi volas diri,
			ke mi sentas, kvazaŭ mia koro estus pli bela, pli granda, pli sana,
			nu, pli alta, tio estas, en pli bona pozicio.</p>
			
			<p>Jes, la ideo, ke iu nekonata virino pensas pri mi, deziras skribi al
			mi, eĉ sciante, ke mi malbonagis, tio estas plaĉe varmiga al mia
			koro. Se vi scius, kiel sola mi estas!</p>
			
			<p>Amikojn oni trovas mem, ĉu ne?, kaj ili estas grava parto de la
			vivo. Oni decidas mem, ke kun tiu aŭ alia persono oni ekrilatos
			amike. Sed ĉi tie estas neniu amiko, neniu persono estas kun ni, ĉar
			ni decidis esti kune. Tio estas terura. Eĉ la anoj de la bando, kiuj
			estis arestitaj kun mi, tute ne estas amikoj. Nur kunlaborantoj. Aĉaj
			kunkrimuloj, fakte.</p>
			
			<p>Ĉu eble ni iĝos geamikoj? Mi tion esperas. Sed eble tio estas troa.
			Mi ne rajtas esperi tion. Kiel vi amikus al mi, kiu mem metis min
			ekster la normalan vivon?</p>
			
			<p>Pardonu min, se mi diras al vi aferojn, kiuj ne plaĉas. Mi sentas min
			ĝenata. Mi ne scias, kion skribi, kaj mi estas tiel kontenta skribi,
			pensi pri vi, imagi vin. Ĉu vi bonvolos sendi al mi foton de vi? Vi
			igas min malpli sola. Vi venas aldoni al la ĉi-tiea nenormala,
			soldateca atmosfero ion virinecan, kion ĝi vere bezonas.</p>
			
			<p>Nun mi devas halti. Mi tre streĉe atendas vian respondon.</p>
			
			<p>Via sincera amiko malliberulo,</p>
			
			<p>Paŭlo</p>
		
			<a id="notoj"></a>
			<p class="rimarko"><strong>NOTOJ</strong> : 
			<ol>
				<li>Fama verkisto. Prononcu : Mickjeviĉ.</li>
				<li><span class="eo">Litvo</span> : unu el la du ĉefaj partoj de malnova Pollando.</li>
				<li><span class="eo">Patrujo</span> : patrolando.</li>
				<li><span class="eo">Elteni</span> : elporti.</li>
			</ol>'
  WHERE l.kurso = 'GR' AND l.numero = 22 AND le.ordo = 5;

-- leçon 22, section 6
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##RESUMO##'
  WHERE l.kurso = 'GR' AND l.numero = 22 AND le.ordo = 6;

-- leçon 23, section 1
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<fieldset class="sono">
				<legend>Aŭskultu tiun rakonton:</legend>
				<p>
					<audio id="audioPlayer" controls="controls" type="audio/mpeg">
						<source type="audio/mp3" src="fr/gerda/son/gerda/gerda23.mp3" />
					</audio>
				</p>
			</fieldset>
			<h3>La trezoro en kofro</h3>
			<div class="row dialogo">
				<div class="col s12 m8">
					<p>Post duonhoro, iu envenis. Estis Bob!</p>
					<p>"Kie sin kaŝas la Lumserĉantoj?" li kriis, "ĉu en la
					mallumo?"</p>
					<p>La aliaj sin montris.</p>
					<p>"Rekaŝu vin, ili tuj alvenos," li diris.</p>
					<p>"Kiel vi faris por antaŭi ilin?"</p>
					<p>"Dank'' al Gerda: ŝi telefone aranĝis, ke veturilo atendu min
					ĉe la flughaveno, kaj ke ŝoforo min veturigu ĉi tien. Ŝi estas riĉa,
					kaj mono solvas multajn problemojn; ŝi donis tre precizajn
					indikojn por ebligi al la ŝoforo trovi la lokon, kaj jen mi estas.
					Sed niaj trezorserĉantoj tuj alvenos. Ili flugis en la sama aviadilo,
					kiel mi, kaj kiam la ŝoforo min trovis, mi vidis ilin iri al oficejo,
					kie oni luas aŭtojn."</p>
					<p>Tom kuris supren al la observejo. Post kelkaj minutoj, la aliaj
					aŭdis lian signalon.</p>
					<p>Envenis la kavernon flegistino Marta, ŝia frato la alta
					blondulo, la malgrasulo, kiu rilatis kun Gerda, kiam ŝi estis
					mallibera, kaj du aliaj viroj.</p>
					<p>"Profesoro Ronga!" mire diris al si la tri gestudentoj, kaj tuj
					poste ili aldonis: "Kaj Profesoro Fergus!"</p>
					<p>La unua instruis lingvistikon, la dua anglan literaturon.</p>
					<p>Laŭ la malnova dokumento, la trezoro troviĝis en kofro metita
					en kavo aranĝita en la rokoj, kaj la ŝtonoj, kiuj ĝin kovris kaj
					kaŝis, kuŝis laŭ preciza desegno. Fakte, la ĝusta loko estis
					indikita per signoj tiel multaj, kvankam diskretaj, ke la pasado de l''
					jarcentoj ne povu forpreni ĉiujn. Pro tiuj precizaj indikoj, la ĝusta
					loko iĝis rapide trovita. La grupo forprenis la kaŝantajn ŝtonojn.
					Montriĝis, ke la kavo estis plenigita per korko kaj diversaj aliaj
					substancoj, kies celo verŝajne estis protekti la kofron kontraŭ
					malsekeco.</p>
					<p>La kofro, kiun ili eltiris, ne estis tre granda, nek speciale
					bela aŭ valora. Ĝi estis ŝlosita. Per siaj iloj, ili ĝin malfermis.</p>
				</div>
				<div class="col s12 m4">
					<img src="fr/gerda/bildoj/gerda23-1.gif" class="responsive-img">
				</div>
			</div>'
  WHERE l.kurso = 'GR' AND l.numero = 23 AND le.ordo = 1;

-- leçon 23, section 2
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<section class="klarigo">
				<h4>Participoj</h4>
				<p><b>-int-</b>, <b>-it-</b>, <b>-ont-</b>, <b>-ot-</b> estas nomataj <b>PARTICIPOJ</b>, kaj tiuj
				finaĵoj estas la <b>PARTICIPAJ FINAĴOJ</b>.</p>
				
				<p>La participoj kun <b>-nt-</b> estas la <b>SUBJEKTAJ PARTICIPOJ</b>; ili rilatas al
					la subjekto de la participigita verbo. Oni nomas ilin ankaŭ <b>AKTIVAJ PARTICIPOJ</b>.</p>
				<p>La participoj kun nur <b>-t-</b> estas la <b>OBJEKTAJ PARTICIPOJ</b>; ili rilatas
					al la objekto de la participigita verbo. Oni nomas ilin ankaŭ <b>PASIVAJ PARTICIPOJ</b>.</p>

				<p>La vortoj kun <b>-int-</b> kaj <b>-it-</b> rilatas al la estinteco (al tio, kio okazis aŭ estis antaŭe).</p>
				
				<p>Ekzistas ankaŭ finaĵoj <b>-ont-</b> kaj <sb>-ot-</b> por la estonteco (tio, kio	okazos aŭ estos poste).</p>
				
				<p>En <a href="fr/gerda/cxap09.php?section=2">ĉapitro 9</a> vi lernis pri la finaĵo <b>-it-</b>. (<span class="eo">La kapo de Bob estis <b>batita</b>.</span>)</p>
				<p>En <a href="fr/gerda/cxap11.php?section=2">ĉapitro 11</a> vi lernis pri la finaĵo <b>-ant-</b>. (<span class="eo">Linda pensas, sin <b>demandante</b>, ĉu…</span>)</p>
				<p>Poste, en <a href="fr/gerda/cxap14.php?section=2">ĉapitro 14</a>, aperas la finaĵoj <span class="eo">-at-</span> 
				kaj <b>-int-</b>. (<span class="eo">Ĉambro <b>nekonata</b>. Kvazaŭ ŝi estus <b>laborinta</b>.</span>)</p>
				<p>La vortoj kun <b>-ant-</b> kaj <b>-at-</b> rilatas al la nuno, 
				al la estanteco (al tio, kio okazas aŭ estas nun).</p>
				
				<div class="container">
					<table class="bordered">
						<tr>
							<td></td><td>SUBJEKTA</td><td>OBJEKTA</td>
						</tr>
						<tr>
							<td>ANTAŬE</td><td>-int-</td><td>-it</td>
						</tr>
						<tr>
							<td>NUN</td><td>-ant-</td><td>-at-</td>
						</tr>
						<tr>
							<td>POSTE</td><td>-ont-</td><td>-ot-</td>
						</tr>
					</table>
				</div>
	
				<p>Jen kelkaj ekzemploj:</p>
				<p class="tab"><span class="eo">La polico serĉas malaperintan virinon [virinon, kiu malaperis].</span></p>
				<p class="tab"><span class="eo">La virino estas enŝlosita en forlasita domo [domo, kiun oni forlasis].</span></p>
				<p class="tab"><span class="eo">Linda rigardas la kriegantajn soldatojn [soldatojn, kiuj kriegas].</span></p>
				<p class="tab"><span class="eo">Ŝi iomete timas pro la ĵetataj teleroj [teleroj, kiujn oni ĵetas].</span></p>
				<p class="tab"><span class="eo">Ĉu vi streĉe atendas la venontan ĉapitron [ĉapitron, kiu venos]?</span></p>
				<p class="tab"><span class="eo">Kion trovas la kaptotaj krimuloj [krimuloj, kiujn oni kaptos]?</span></p>
	
				<p class="parto">Se la ĉefa parolo estas nuna (supre estas <b>serĉas</b>, <b>estas</b>, <b>rigardas</b>,…), oni povas "traduki" la participojn jene:
				</p>
				<div class="row">
					<p class="col s6 l3">x-inta</p><p class="col s6 l3">→ kiu x-is</p>
					<p class="col s6 l3">x-ita</p><p class="col s6 l3">→ kiun oni x-is</p>
					<p class="col s6 l3">x-anta</p><p class="col s6 l3">→ kiu x-as</p>
					<p class="col s6 l3">x-ata</p><p class="col s6 l3">→ kiun oni x-as</p>
					<p class="col s6 l3">x-onta</p><p class="col s6 l3">→ kiu x-os</p>
					<p class="col s6 l3">x-ota</p><p class="col s6 l3">→ kiun oni x-os</p>
				</div>
				<p class="parto">Tamen, se la ĉefa parolo ne estas nuna, oni normale ne povas tiel
				simple "traduki". Ekzemple:</p>
				<p class="tab"><span class="eo">Hieraŭ matene Bob pensis pri la farota laboro.</span></p>
				<p class="tab">Sed eble li faris la laboron hieraŭ vespere. Se hodiaŭ oni dirus,
				ke hieraŭ matene Bob pensis pri la laboro, kiun oni faros, tio
				signifus, ke eĉ hodiaŭ la laboro ankoraŭ ne estas farita. Pli ĝusta
				"traduko" estas do: Hieraŭ matene Bob pensis pri la laboro, kiu estis
				objekto de posta faro.</p>
				<p class="tab"><span class="eo">Morgaŭ vespere Bob rigardos la faritan laboron.</span>
				<p class="tab">Sed eble li faros la laboron morgaŭ vespere. Se hodiaŭ oni dirus,
				ke morgaŭ vespere Bob rigardos la laboron, kiun oni faris, tio
				signifus, ke jam hodiaŭ la laboro estas farita. Pli ĝusta "traduko"
				estas do: Morgaŭ vespere Bob rigardos la laboron, kiu estos objekto de
				antaŭa faro.</p>
	
				<p>Ĉu tiu klarigo estas komprenebla? Se ne, tio ne tro gravas, ĉar la
				realo estas multe pli simpla ol mia klarigo. Kompreneble oni normale ne
				tradukas participojn; oni komprenas ilin sentraduke. <span class="eo">Manĝonta</span>
				signifas kvazaŭ <span class="eo">malsata</span>; <span class="eo">manĝanta</span> 
				signifas kvazaŭ <span class="eo">ĉe-tabla</span>;
				<span class="eo">manĝinta</span> signifas kvazaŭ <span class="eo">sata</span>.</p>
		
				<p>Provu la sekvantan ekzercon, en kiu oni devas reskribi uzante participon!</p>
	
			</section>'
  WHERE l.kurso = 'GR' AND l.numero = 23 AND le.ordo = 2;

-- leçon 23, section 3
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<p class="eo eta">Ces mots seront automatiquement ajoutés à votre vocabulaire à réviser lorsque vous aurez terminé d''étudier cette section.</p>
			
			<div class="vortlisto row">
				<div class="col s12 l6">
					<p><span class="eo">angla</span> : anglais</p>
					<p><span class="eo">desegni</span> : dessiner, tracer</p>
					<p class="sekva"><span class="eo">desegno</span> : dessin, tracé</p>
					<p><span class="eo">ilo</span> : instrument, outil, ustensile</p>
					<p><span class="eo">kavo</span> : cavité, trou</p>
					<p><span class="eo">kies</span> : à qui ? dont, de qui, duquel, de laquelle, desquel(le)s</p>
					<p><span class="eo">kofro</span> : coffre, malle</p>
				</div>
				<div class="col s12 l6">
					<p><span class="eo">kontraŭ</span> : contre</p>
					<p><span class="eo">korko</span> : liège, bouchon (bouteille)</p>
					<p><span class="eo">literaturo</span> : littérature</p>
					<p><span class="eo">protekti</span> : protéger</p>
					<p><span class="eo">signo</span> : signe</p>
					<p><span class="eo">telefono</span> : téléphone</p>
					<p><span class="eo">tiri</span> : tirer</p>
				</div>
			</div>'
  WHERE l.kurso = 'GR' AND l.numero = 23 AND le.ordo = 3;

-- leçon 23, section 4
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##EKZERCO:98##

			##EKZERCO:99##'
  WHERE l.kurso = 'GR' AND l.numero = 23 AND le.ordo = 4;

-- leçon 23, section 5
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<div class="row">
				<div class="col s12">
					<div class="card-panel blue lighten-5">
						En tiu ĉapitro, estas du malsamaj rakontoj de <i>Lasu min paroli plu !</i>.<br>
						<a href="#unua">Sekreta servo</a><br>
						<a href="#dua">Ameriko, jen mi venas!</a>
					</div>
				</div>
			</div>

			<a id="unua" class="scrollspy"></a>
			<h3>Sekreta servo</h3>
			
			<p>Kial diable mi entiriĝis<a href="#notoj">[1]</a> en tiun aferon? Mi ne estis sufiĉe
			singarda. Oni neniam gardas sin sufiĉe kontraŭ tiuj danĝeraj
			decidoj. Fakte, mi eĉ ne rimarkis, ke mi ion decidas. Tiuepoke, mi
			estis simpla soldato. Ĉar miaj gepatroj multege vojaĝis kaj
			konstante translokiĝis de unu lando al alia, mi lernis diversajn
			lingvojn. Tute senkonscie, fakte. Knabeto lernas rapide, eĉ se nur
			ludante kun aliaj infanoj, kiam li vivas portempe<a href="#notoj">[2]</a> en lando, kies
			lingvon li neniam lernis antaŭe. Li eĉ ne bezonas iradi al la
			lernejo por kutimiĝi al tute nova maniero esprimi sin. Se li
			allernejas, estas pli bone, sed lerneja instruado ne vere necesas por
			lerni lingvon. Se oni estas ankoraŭ tre juna kaj vivas en la koncerna
			lando. Konstante oni devas uzi la lingvon, ree kaj ree aperas novaj
			okazoj ĝin uzi, en novaj kondiĉoj, tiel ke ĉiuj vortoj kaj ĉio
			alia enkapiĝas eĉ sen plej eta fortostreĉo.</p>
			
			<p>Tial mi vere bone scipovis kelkajn lingvojn. Ankaŭ lingvojn ne tre
			konatajn nialande. Kaj kiam miaj diablaj ĉefoj tion eksciis — oni
			neniam estas tro diskreta; se mi estus imaginta la sekvojn, mi estus
			silentinta pri miaj lingvoscioj — jes, kiam miaj ĉefoj tion eksciis,
			ili proponis al mi oficejan laboron: traduki dokumentojn, aŭ almenaŭ
			tiujn legi, kaj mallonge klarigi al ili, pri kio temas en tiuj
			paperoj.</p>
			
			<p>Nu, mi ne speciale ŝatis la soldatan vivon, «la dolĉan vivon», kiel
			ni tiutempe kromnomis<a href="#notoj">[3]</a> ĝin. Porti pezan sakon marŝante tuttage sur
			sunvarmega vojo, aŭ kuŝi sur akveca tero ludante militon, ne estas
			por mi la plej tipa tipo de vivo feliĉa. Kaj mi aŭdis, ke la
			bonŝanculoj, kiuj militservas oficeje, ricevas multe pli bonajn
			manĝojn ol tiuj, kiuj fortigas sian korpon kaj lernas la arton ne
			pensi en ĉiutagaj kampaj soldatludoj.</p>
			
			<p>Mi ŝatas bone manĝi. Tio estas unu el miaj multaj malfortaĵoj.
			Krome, miaj muskoloj pli rapide laciĝas ol mia kapo, kaj mi estis
			tiel lacega fine de tiuj liber-aeraj soldattagoj, ke mi sentis,
			kvazaŭ mi apenaŭ vivus plu. Eĉ signi per okulo estis tro lacige por
			mi en tiuj vesperoj.</p>
			
			<p>Mi rakontas ĉion ĉi por klarigi al vi, kial mi tiel facile
			entiriĝis en la Centron kun granda C. Mi kompreneble petas vian
			protekton, ĉar... Ne. Pri tio pli poste. Min altiris tien la scio, ke
			mi ne plu lacigos mian korpon ĝismorte rolante kiel serpento aŭ
			hundo, aŭ kiel pezeg-portanto, en lokoj maldolĉaj. Miaj kruroj kaj
			piedoj ne estas speciale belaj — ili eĉ estas vere malbelaj, se
			paroli sincere — sed mi ŝatas ilin, ĉar ili ĉiam servis min amike,
			kaj la «dolĉa vivo» de simpla soldato pli kaj pli eluzis<a href="#notoj">[4]</a> ilin,
			tiel ke mi sentis min iĝanta iom pli malalta ĉiutage.</p>
			
			<p>Cetere, mia tuta korpo eluziĝis. Mi jam ne havis multe da graso
			antaŭ ol komenci, sed tiu malmulto perdiĝis en la unuaj semajnoj.
			Oni provis kredigi al mi, ke per tia konstanta funkciado je sia plej
			alta povo mia korpo fariĝos ĉiurilate fortega, sanega kaj multopova
			— «Vi estas Davidoj, mi faros Goljatoj el vi», diris unu el niaj
			suferigistoj, forgesante, kun la tipa senkapa funkciado de la
			militistaro, ke el tiuj du karuloj, Goljato montriĝis la perdinto —
			sed mi havis fortajn dubojn pri miaj ŝancoj sukcesi. Laŭ ilia
			agmaniero, eĉ se ilia celo sincere estis nin fortigi, ŝajnis al mi,
			ke la ŝancoj perdi la vivon kaj la malmultan saĝon, kiun ni junuloj
			havis, estis multe pli grandaj ol la ŝancoj realigi ilian celon: fari
			supervirojn el ni.</p>
			
			<p>Kompare kun tiu Goljatigo, sidi en komforta oficejo tradukante paperon
			post papero ŝajnis al mi celo plej dezirinda. Kiam oni faris al mi
			tiucelan proponon, mi ne forĵetis ĝin. Kiel mi ĵus diris, mi ne
			estas superhomo, kaj en similaj kondiĉoj por nee respondi necesus
			superhoman forton.</p>
			
			<p>Mi neniam estis speciale sindonema. Mi ĉiam celis pli protekti mian
			sanon kaj kontentigi mian emon bone vivi ol doni min al la Patrolando.
			Tute ne estis certe, cetere, ke mi estos malpli patrolandama en
			oficejo ol en la kampoj kaj montoj.</p>
			
			<p>Mi do alvenis en la Centron. Mi tute ne sciis, pri kio temas. Oni igis
			min promesi, ke mi plene gardos la sekretojn pri ĉio, kion mi vidos,
			aŭdos, tuŝos aŭ iamaniere sentos tie, kaj ĉar tiuj realistoj ne
			kredas je simpla promesado, tuj kiam mi promesis, ili klarigis al mi,
			kiel rapide mi malaperus<a href="#notoj">[5]</a> el ĉi tiu vivo — tiel diskrete, ke eĉ
			la polico ne starigos al si demandojn — se ŝance mi ion dirus pri la
			Centro kaj tio, kion ĝi faras.</p>
			
			<p>Traduki per si mem ne estas tia agado, kia portas vin al plejsupro de
			feliĉo, sed almenaŭ la dokumentoj estis interesaj. Mi ĉiam multe
			interesiĝis pri ĉio, kio okazas sur la Tero, kaj tiuj raportoj aŭ
			aliaj skribaĵoj min interesis. Ni tradukis plej strangajn paperojn,
			fojfoje eĉ leterojn senditajn de soldatfamilio el «malamika» lando al
			militservanto, do plenaj je informoj pri la vivo en la devenloko, kaj
			kaptitaj la-diablo-scias-kiel.</p>
			
			<p>Sed poste... Ne. Mi ne povas rakonti. Mi bezonas protekton, pli bonan
			protekton kontraŭ ili. Ili estas tiel danĝeraj. Aŭ ĉu tion mi
			imagas? Ne. Ili estas grandpovaj. Ili estas kvazaŭ ŝtato en la
			ŝtato. La malnova timo plu kuŝas malsupre en mia koro. Kaj tamen mi
			devus rakonti. Se ne por via plezuro, almenaŭ por la sano de mia kapo
			kaj de mia korpo, laca plu porti ĉion ĉi neniam parolante pri ĝi.
			Ĉu gardi sekretojn tutvive estas eble al ne-superhomo? Ĉiam gardi
			multe da gravegaj sekretoj estas konstanta streĉo, kaj tiu streĉo
			estas malpli kaj malpli elportebla. Eĉ kiam la sekretoj estas
			ridindaj.</p>
			
			<p>Kaj mult-aspekte, la vivo en la Centro estis ridiga. Aŭ ridinda. Tiuj
			homoj prenis sin tiel serioze! La ideo partopreni en kaŝa, subtera,
			subsupraĵa milito tutmonda naskis en ili senton pri graveco, kiu
			fojfoje perdigis al ili la kapon.</p>
			
			<p>Krome, ni tie vivis en konstanta streĉiĝo. Kaj ridi montriĝis bona
			rimedo por gardi nin kontraŭ la danĝeraj sekvoj de tiu ĉiam streĉa
			atmosfero.</p>
			
			<p>Foje... Se vi scius... Vi ridegos, kiam vi ekscios. Foje, unu el tiuj
			spion-ĉefoj — li nomiĝis Alb...</p>
			
			<p>Ho! Kio okazas al mi? Tra la fenestro, iu ekĵetis... mi svenas, mi
			svenas... Kapo turniĝas. Rigardu: en la koron ĝi eniĝis, ĝi
			teniĝas tute firme... tiu afereto... Mortiga substanco... Kial vi
			malfermis la fenestron? Kial vi igis min stari apud ĝi? Ĉu vi...?
			Haaaaa!</p>
		
			<a id="notoj"></a>
			<p class="rimarko"><strong>NOTOJ</strong> : 
			<ol>
				<li>En-tir-iĝ-i.<br>
				<li><span class="eo">Portempe</span> : por iu tempo, dum iu tempo, dum iu daŭro.</li>
				<li><span class="eo">Krom-nomi</span> : doni kroman, anstataŭan nomon.</li>
				<li><span class="eo">Eluzi</span> : malbonigi aŭ malgrandigi per longa uzado.</li>
				<li>En la originalo : malaperos (preseraro). Ne temas pri futuro en
				pasinteco, sed pri vera kondicionalo (vidu la postan "se mi dirus").</li>
			</ol>
			
			<a id="dua" class="scrollspy"></a>
			<h3>Ameriko, jen mi venas!</h3>
		
			<p>- Kiam vi forveturos?</p>
		
			<p>- Venontan<a href="#notoj2">[1]</a> semajnon.</p>
			
			<p>- Aviadile, ĉu ne?</p>
			
			<p>- Jes, aviadile. Neniu plu vojaĝas al Usono<a href="#notoj2">[2]</a> ŝipe en nia epoko.
			Flugi estas tiel pli rapide!</p>
			
			<p>- Ĉu vi devas prepari ankoraŭ multon?</p>
			
			<p>- Ne, ĉio jam estas preparita. Mi havas ĉiujn dokumentojn. Mi devas
			ankoraŭ solvi la demandon pri mono, tio restas mia sola problemo nun.</p>
			
			<p>- Kial estas problemo?</p>
			
			<p>- Mi agis stulte. Mi ne okupiĝis pri tiu afero sufiĉe frue kaj nun
			la dolaro<a href="#notoj2">[3]</a> altiĝas de tago al tago.</p>
			
			<p>- Vi do devus rapidi aĉeti viajn dolarojn.</p>
			
			<p>- Jes, sed mi aŭdis, ke nun la dolaro estas tro forta, kaj ke la
			usonaj aŭtoritatoj volas ĝin malaltigi.</p>
			
			<p>- Kial? Ili estis malkontentaj, kiam la dolaro estis malforta,
			kvazaŭ tio volus diri, ke la valoro de la tuta lando, de la tuta
			popolo, malaltiĝis. Ĉu vere nun ili estas malĝojaj pri tio, ke la
			dolaro fariĝis plivalora?</p>
			
			<p>- Jes, ĉar ili ne povas vendi tiel facile siajn produktojn<a HREF="#notoj2">[4]</a>
			eksterlande.</p>
			
			<p>- Prave. La valoro de la produktoj, kiuj venas de Usono, nun iĝis pli
			alta por homoj, kiuj ne perlaboras dolarojn.</p>
			
			<p>- Ĝuste. Ĉio usona nun fariĝis pli multekosta por eksterlandanoj,
			kaj pro tio Usono vendas malpli, kaj sekve suferas. Estis jam sufiĉe
			grava senlaboreco tie. Nun, se ili vendos malpli al aliaj landoj, eble
			la senlaboruloj iĝos eĉ pli multaj, kaj tion ili timas.</p>
			
			<p>- Sincere, mi dubas pri tio. Vendi eksterlande ne tiom gravas al tiel
			granda lando. La landanaro jam aĉetas preskaŭ ĉion, kion oni
			produktas tie. La eksteraj vendoj prezentas per si nur malgrandan
			parton de la tuto.</p>
			
			<p>- Ĉu tiel estas? Se jes, mi devus ne konsideri tiun eblan malaltiĝon
			de la dolaro.</p>
			
			<p>- Mi ne volas interveni en vian decidon. Estas iu risko en ambaŭ
			eblecoj. Ĉu vi jam estis en Usono antaŭe?</p>
			
			<p>- Ne. Ĉu vi?</p>
			
			<p>- Jes, mi estis tie. Fakte, mi laboris tie, kiam mi estis juna, kaj mi
			tien reveturis antaŭ du jaroj. Ĉiuj tie plendis pri la situacio, kaj
			mi facile kredas, ke por malriĉulo, ekzemple por homo senlabora, la
			vivo devas esti tre zorgiga tie. Sed tamen, dum mi travojaĝis la
			landon, mia konstanta sento estis, ke tio estas unu el la plej riĉaj
			landoj en la mondo.</p>
			
			<p>- Ĉu vere?</p>
			
			<p>- Jes. Ekzemple, vi ne povus imagi, kiom oni donas al vi por manĝi en
			restoracioj. Tiom pli ol en Eŭropo, por simila kosto.</p>
			
			<p>- Sed ĉu la manĝaĵoj estas same plaĉaj, kiel ĉe ni?</p>
			
			<p>- Ne. Estas pli bone ĉe ni tiurilate. Ĉefe, en nia lando, la manĝoj
			estas pli malsamaj. Vi povas facile ricevi ĉiutage ion malsaman en
			restoracioj. Sed eble mi ne rajtas tiel paroli pri Usono. Mia kono de
			tiu grandega lando estas tiel supraĵa!</p>
			
			<p>- Tamen, tio, kion vi diras, estas tre interesa. Mi antaŭĝojas
			viziti tiun landon, pri kiu oni aŭdas tiom da malsamaj opinioj.</p>
			
			<p>- Nu, mi esperas, ke vi solvos vian dolarproblemon kontentige. Ĝis
			revido, kaj bonan vojaĝon!</p>
		
			<a id="notoj2"></a>
			<p class="rimarko"><strong>NOTOJ</strong> : 
			<ol>
				<li><span class="eo">Venonta</span> : kiu venos, kiu sekvos, kiu okazos post la nuna tempo
				(venanta = kiu venas; veninta = kiu venis).</li>
				<li><span class="eo">Usono</span> : la lando inter Kanado kaj Meksikio (kun Alasko kaj Havajo);
				la nomo devenas de <i><b>U</b>nited <b>S</b>tates of <b>N</b>orth America.</i></li>
				<li><span class="eo">Dolaro</span> : mon-unuo en Usono, Aŭstralio, Kanado kaj kelkaj aliaj landoj.</li>
				<li><span class="eo">Produkti</span> : fari aŭ estigi aĵojn (produktojn), ĉefe kun la celo
				ilin vendi aŭ havigi al iu, kiu ilin uzos.</li>
			</ol>'
  WHERE l.kurso = 'GR' AND l.numero = 23 AND le.ordo = 5;

-- leçon 23, section 6
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##RESUMO##'
  WHERE l.kurso = 'GR' AND l.numero = 23 AND le.ordo = 6;

-- leçon 24, section 1
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<fieldset class="sono">
				<legend>Aŭskultu tiun rakonton:</legend>
				<p>
					<audio id="audioPlayer" controls="controls" type="audio/mpeg">
						<source type="audio/mp3" src="fr/gerda/son/gerda/gerda24.mp3" />
					</audio>
				</p>
			</fieldset>
			<h3>La trezoro de la Lumo</h3>
			<div class="row dialogo">
				<div class="col s12 m8">
					<p>"Nur papero!" kriis Ronga.</p>
					<p>"Ankaŭ estas libro!" diris Marta, sed jam Ronga laŭtlegis:
					<i>"Tie ĉi kuŝas la Trezoro de la Lumo. Pro la daŭra
					persekutado, la Sankta kaj Sekreta Frataro de la Lumo-Serĉantoj
					baldaŭ ĉesos ekzisti. Sed ĝia Spirito plu vivos. Iun tagon, homoj
					retrovos la Sanktajn Principojn kaj rekomencos ilin apliki. Por ili
					estas ĉi tie kaŝita la Trezoro de la Lumo.</i></p>
					<p><i>"Ĝi estas skribita en la Speciala Lingvo de la Frataro, sed
					certe homoj troviĝos, kiuj ĝin povos kompreni. La Trezoro konsistas
					el la arto praktike apliki kaj defendi la Veron, la Justecon, la
					Dignecon, la Respekton al ĉiu homo, la Interkomprenon, la Honestecon,
					la Amon, la Kompatemon kaj la Konon de si mem kaj de sia ĝusta loko.</i></p>
					<p><i>"Por la Frataro, la Spiritaj Valoroj estas la plej altaj. Tial
					ĝia Trezoro estas pure Spirita.</i></p>
					<p><i>"Al vi, homo, kiu trovis ĝin, trans multaj aŭ malmultaj
					tagoj, semajnoj, monatoj, jaroj, jardekoj aŭ jarcentoj, Saluton kaj
					Fratecon!"</i></p>
					<p>
								* * *
					</p>
					<p>Ili sidis en komfortaj brakseĝoj en la hejmo de Gerda.</p>
					<p>"Kio okazis poste?" ĉi-lasta demandis.</p>
					<p>"Ni malkaŝis nin, kaj mi ilin arestis," diris la policano.
					"La loka polico estis antaŭe informita, kaj enŝlosis ilin."</p>
					<p>"Ĉu vi scias, kiel komenciĝis la afero?" scivolis Tom.</p>
					<p>"Proksimume. Kiam Marta estis flegistino en la hospitalo, ŝi
					ĉeestis kirurgian operacion de historiisto, Prof. (=Profesoro) Kosadi.
					Kiam ĉi-lasta estis duone dormanta, duone vekiĝanta, li parolis
					nekonscie pri la trezoro de la Lumoserĉantoj. Li diris, ke temas pri
					malnova societo, elita, tre riĉa, pri kies trezoro li eksciis hazarde
					legante en la Vatikana Biblioteko."</p>
					<p>"Jes," daŭrigis Gerda. "Tiun parton de la afero mi konas. Li
					faris historian esploron en la Biblioteko Vatikana. Inter la paĝoj de
					malnova libro, li trovis dokumenton en la sekreta lingvo de la
					Lumoserĉantoj. Li antaŭe kelktempe interesiĝis pri tiu sekreta
					societo internacia, kaj iom komprenis ĝian sekretan lingvon. Li
					komprenis, ke tiu papero indikas, kie troviĝas la trezoro de la
					Lumoserĉantoj, sed mem ne povis traduki ĉiujn detalajn indikojn. Li
					ricevis la permeson fotokopii la dokumenton. Foje, kiam ni
					renkontiĝis, li parolis pri tio al mi. Li diris, ke eble homoj provos
					trovi tiun trezoron, ĉar pli kaj pli multaj personoj interesiĝas pri
					la malnovaj sekretaj societoj. Li sciis, ke mi estas la sola persono en
					la mondo, kiu vere ĝisfunde studis tiujn malnovajn sekretajn lingvojn,
					kaj li petis min solene promesi, ke mi neniam kunlaboros kun homoj
					serĉantaj la trezoron pro materia intereso."</p>
					<p>"Kion li volis, ke oni faru pri ĝi?" Linda demandis.</p>
					<p>"Ke ĝi transiru al iu muzeo aŭ ŝtata institucio."</p>
					<p>Tom intervenis:</p>
					<p>"Kiel Marta ricevis la fotokopion?"</p>
					<p>"Tion ŝi mem klarigis al mi," respondis la policano: "ŝi
					konstatis, ke la substanco uzita antaŭ la operacio por dormigi la
					profesoron estas unu el tiuj, kiujn oni kelkfoje uzas por t.n. (= tiel
					nomata) narkoanalizo. Post la operacio, kiam la profesoro kuŝis en sia
					ĉambro – li havis privatan ĉambron kaj do estis sola – ŝi injektis
					al li tiun substancon, kaj pridemandis lin. Sub la influo de la
					koncerna substanco, oni dormas, sed dormante aŭdas kaj respondas
					demandojn, ĝenerale dirante la veron. Li do dorme respondis al ŝi.
					Per tiu metodo ŝi eksciis pri tio, ke nur unu persono en la mondo,
					nome Gerda, komprenas tiun sekretan lingvon, kaj pri multaj aliaj
					aferoj."</p>
				</div>
				<div class="col s12 m4">
					<img src="fr/gerda/bildoj/gerda24-1.gif" class="responsive-img">
				</div>
			</div>'
  WHERE l.kurso = 'GR' AND l.numero = 24 AND le.ordo = 1;

-- leçon 24, section 2
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<section class="klarigo">

				<p class="parto">
				En la antaŭa ĉapitro vi lernis pri ĉiuj ses participoj en
				Esperanto, sed ni uzis ilin nur kiel adjektivojn. Adjektivon oni povas
				uzi aŭ apud substantivo (<span class="eo">Ŝi vidas blondan viron.</span>), aŭ kun iuj
				verboj, ekzemple <b>esti</b> (<span class="eo">La viro estas blonda</span>). Ankaŭ participajn
				adjektivojn oni povas uzi en tiuj du manieroj:
		
		   		<p class="tab"><span class="eo">Mi vizitas la enŝlositan virinon.</span></p>
				<p class="tab"><span class="eo">La virino estas enŝlosita.</span></p>
				
				<h3>Participaj adjektivoj</h3>
	
				<p>La participaj adjektivoj havas la saman signifon en ambaŭ situacioj.</p>
				<p>Oni povas montri la subjekton de objekta (pasiva) participo per la
				prepozicio <b>de</b>:</p>
	
		   		<p class="tab"><span class="eo">Mi vizitas la virinon enŝlositan de la blondulo.</span></p>
		   		<p class="tab"><span class="eo">La virino estas enŝlosita de la blondulo.</span></p>
	
	
		   		<p>Tiuj frazoj signifas preskaŭ same kiel:</p>
			   	<p class="tab"><span class="eo">Mi vizitis la virinon, kiun la blondulo enŝlosis.</span></p>
			   	<p class="tab"><span class="eo">La blondulo enŝlosis la virinon.</span></p>
	 
	 			<p>Tiuj lastaj frazoj estas tamen pli simplaj kaj pro tio pli bonaj.</p>
				<p>Eblas uzi ankaŭ subjektan (aktivan) participon post la verbo <b>esti</b>:</p>
	
			   	<p class="tab"><span class="eo">La blondulo estas enŝlosinta la virinon.</span></p>
	
				<p>Tiaj "kunmetitaj verbotempoj" estas tamen tre maloftaj. Preskaŭ ĉiam
				sufiĉas simple:
				</p>
	
			   	<p class="tab"><span class="eo">La blondulo enŝlosis la virinon.</span></p>
			   	
			   	<h3>Participaj substantivoj</h3>
	
				<p>Participoj uziĝas ne nur adjektive, sed ankaŭ adverbe kaj
				substantive. Ni konsideru unue ilian substantivan uzadon.
				</p>
				<p>Participaj substantivoj havas kompreneble la finaĵon <b>-o</b>:
				malaperinto, krieganto, kaptoto. Oni devas memori, ke participa
				substantivo ĉiam signifas personon, aŭ ulon. <span class="eo">Malaperinto</span> estas do
				<span class="eo">malaperinta ulo</span>, <span class="eo">krieganto</span> estas 
				<span class="eo">krieganta ulo</span>, kaj <span class="eo">kaptoto</span>
				estas <span class="eo">kaptota ulo</span>. Se oni volas paroli pri aĵo, oni povas uzi
				kroman finaĵon <b>-aĵ-</b>. </p>
				<p><span class="eo">Donitaĵo</span> estas ekzemple aĵo donita, io donita.</p>

			   	<h3>Participaj adverboj</h3>
				<p>
				Participaj adverboj havas la finaĵon <b>-e</b>: enirante, forironte,
				vidinte. Pri participaj adverboj oni devas memori, ke ili ĉiam
				rilatas al la subjekto de la frazo. Ekzemple, la frazo:
				</p>
	
			   	<p class="tab"><span class="eo">Bob vidis Lindan enirante la restoracion.</span></p>
	
				<p>Devas signifi:</p>
	
			   	<p class="tab"><span class="eo">Bob vidis Lindan, dum li (Bob) eniris la restoracion.</span></p>
	
				<p>Jen aliaj ekzemploj:</p>
	
			   	<p class="tab"><span class="eo">Forironte Bob turnis sin al la pordo.</span> (Bob turnis sin al la pordo por foriri.)
			   	<p class="tab"><span class="eo"> Vidinte Lindan Bob iris al ŝia tablo.</span>
					(Post kiam li vidis Lindan, Bob iris al ŝia tablo.)</p>
	
				<p class="parto">Kompreneble oni povas uzi ankaŭ objektajn (pasivajn) participajn
				adverbojn:
				</p>
	
			   	<p class="tab"><span class="eo">Bob forlasis la restoracion ne vidite de Linda.</span></p>
			   	<p class="tab"><span class="eo">Observate de la studentoj li ne kuraĝis foriri.</span></p>
			   	<p class="tab"><span class="eo">Kaptote de la malamiko li decidis sin mortigi.</span></p>
	
				<p class="parto">
				En skriba Esperanto oni ofte uzas tiajn frazojn kun participaj
				adverboj, sed en parolata Esperanto ili ne estas tiom uzataj. Oni
				preferas paroli per simplaj mallongaj frazoj.
				</p>
			</section>'
  WHERE l.kurso = 'GR' AND l.numero = 24 AND le.ordo = 2;

-- leçon 24, section 3
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<p class="eo eta">Ces mots seront automatiquement ajoutés à votre vocabulaire à réviser lorsque vous aurez terminé d''étudier cette section.</p>
			
			<div class="vortlisto row">
				<div class="col s12 l6">
					<p><span class="eo">apliki</span> : appliquer (sur quelque chose ou à quelque chose)</p>
					<p><span class="eo">biblioteko</span> : bibliothèque</p>
					<p><span class="eo">ĉesi</span> : cesser, s''arrêter de faire quelque chose</p>
					<p><span class="eo">defendi</span> : défendre, protéger</p>
					<p><span class="eo">fundo</span> : fond </p>
					<p><span class="eo">ĝenerala</span> : général(e)</p>
					<p><span class="eo">ĝisfunde</span> : parfaitement, totalement (litt.: jusqu''au fond)</p>
					<p><span class="eo">hazardo</span> : hasard</p>
					<p class="sekva"><span class="eo">hazarde</span> : par hasard</p>
					<p><span class="eo">hospitalo</span> : hôpital</p>
					<p><span class="eo">influo</span> : influence</p>
					<p><span class="eo">injekti</span> : injecter</p>
					<p><span class="eo">institucio</span> : institution</p>
					<p><span class="eo">justa</span> : juste, équitable</p>
					<p><span class="eo">kirurgio</span> : chirurgie (science, pratique)</p>
					<p><span class="eo">koncerna</span> : concerné(e)</p>
					<p><span class="eo">konsisti</span> : consister (en), se composer (de)</p>
					<p><span class="eo">konstati</span> : constater (que)</p>
				</div>
				<div class="col s12 l6">
					<p><span class="eo">materio</span> : matière</p>
					<p><span class="eo">metodo</span> : méthode</p>
					<p><span class="eo">monato</span> : mois</p>
					<p><span class="eo">muzeo</span> : musée</p>
					<p><span class="eo">narkoanalizo</span> : narco-analyse</p>
					<p><span class="eo">operacio</span> : operation</p>
					<p><span class="eo">paĝo</span> : page</p>
					<p><span class="eo">praktiko</span> : pratique</p>
					<p><span class="eo">privata</span> : privé(e)</p>
					<p><span class="eo">proksimume</span> : approximativement</p>
					<p><span class="eo">renkonti</span> : rencontrer (quelqu''un)</p>
					<p class="sekva"><span class="eo">renkontiĝi</span> : se rencontrer, se réunir</p>
					<p><span class="eo">respekti</span> : respecter</p>
					<p><span class="eo">sankta</span> : saint(e), sacré(e)</p>
					<p><span class="eo">solena</span> : solennel(le)</p>
					<p><span class="eo">spirito</span> : esprit</p>
					<p><span class="eo">studi</span> : étudier</p>
					<p><span class="eo">Vatikano</span> : Vatican</p>
				</div>
			</div>'
  WHERE l.kurso = 'GR' AND l.numero = 24 AND le.ordo = 3;

-- leçon 24, section 4
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##EKZERCO:100##	
	
			##EKZERCO:101##'
  WHERE l.kurso = 'GR' AND l.numero = 24 AND le.ordo = 4;

-- leçon 24, section 5
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<div class="row">
				<div class="col s12">
					<div class="card-panel blue lighten-5">
						En tiu ĉapitro, estas du malsamaj rakontoj de <i>Lasu min paroli plu!</i>.<br>
						<a href="#unua">Literaturo amindas, sed tamen...</a><br>
						<a href="#dua">La ĝojoj de petveturado</a>
					</div>
				</div>
			</div>

			<a id="unua" class="scrollspy"></a>
			<h3>Literaturo amindas, sed tamen...</h3>
		
			<p>La terura afero, koncerne Eduardon, estas, ke nur literaturo interesas
			lin. Ĉu vi tion konstatis? Nur pri literaturo li okupiĝas
			ĝisfunde. Mi konstatis tion ankoraŭ hieraŭ, kaj mi ne dubas, ke mi
			rekonstatos ĝin morgaŭ.</p>
			
			<p>Kiam mi renkontis lin hieraŭ, lia edzino ĵus rakontis al mi pri tiu
			grava problemo koncerne la koston de la domo, kiun ili farigas en la
			apudurba kamparo. Ŝi ĵus parolis al mi tre precize pri la monaj
			malfacilaĵoj, kiujn ili renkontis. Multaspekta afero, kiun mi
			plejparte forgesis. Vi certe jam konstatis, ke mi neniam sentas min
			hejme, kiam oni prezentas al mi pri-monajn konsiderojn, speciale se
			parolas la edzino de Eduardo, ĉar ŝi emas miksi la faktojn. Ne estis
			facile sekvi ŝiajn klarigojn.</p>
			
			<p>Tamen, unu aferon mi perfekte komprenis, nome, ke por ili la situacio
			fariĝas de tago al tago pli serioza. La ŝtata institucio, kiu
			promesis al ili monon — kontraŭ repago nur post jaroj, je tre
			kontentigaj kondiĉoj — pro mi-ne-scias-kio subite ekdecidis pri
			novaj kondiĉoj, tiel streĉaj, ke ili ne plu povos akcepti. Krome, la
			onklino, kiu antaŭ longe promesis, ke kiam ŝi mortos, ŝia tuta
			riĉo — grandega, laŭdire — estos por ili, lastminute preferis tute
			malsaman aranĝon kaj decidis doni preskaŭ ĉion al hospitaloj,
			muzeoj, bibliotekoj kaj similaj institucioj, tiel ke nun, kiam ŝi
			mortis, ŝia riĉego transiras al nefamilianoj, kaj Eduardo
			retroviĝas senigita ankaŭ je tiu espero solvi la monproblemon.</p>
			
			<p>Sed vi konstatos, se vi renkontos lin, ke tio ne ŝajnas tuŝi lin.
			Ĉiu alia persono, en similaj kondiĉoj, havus gravajn zorgojn. Ne li.
			Li paroladis al mi dum proksimume du horoj pri nova libro, kiu ĵus
			aperis, kaj pri nova plano prezenti en proksimume dumilpaĝa libro la
			tutan leteraron de iu literatura grandulo, al mi perfekte nekonata.</p>
			
			<p>Ĉu vi komprenas tian sintenon? Rimarku, ke tiu sinteno ebligas al li
			forkuri de la malplaĉa realo, protekti sin kontraŭ doloraj zorgoj,
			ne studi la fundon de l'' problemo. Li tuŝos la fundon de malriĉeco
			antaŭ ol konstati, ke mon-problemo stariĝas. Oni ĉesas
			maltrankviliĝi, kiam oni forflugas en nerealecajn konsiderojn pri
			nerealaĵoj. Kia metodo! Bona por li, verŝajne, sed ne por la
			edzino. Ŝi portas la tutan pezon de la materiaj zorgoj, de kiuj
			forkuras la literaturama edzo. Ĉu vi trovas tion ĵusta? Mi ne.</p>
			
			<p>Aliflanke, tia li estas de naskiĝo, tia li certe restos ĝismorte. Mi
			dubas, ĉu li povus fariĝi iom pli praktika, post tiom da jaroj da
			flugado en la alta spirita aero.</p>
			
			<p>«Mi respektas viajn ideojn», li foje diris al mi, «mi respektas viajn
			sintenojn kaj preferojn, respektu do miajn. Vi estas materi-ama, mi
			amas studadon kaj esploradon kaj literaturajn ĝojigaĵojn. Vi ĉesis
			interesiĝi pri libroj tuj, kiam vi eliris el la lernejo. Mi ĉesis
			okupiĝi pri sporto tiuepoke. Vi estas fortmuskola kaj korpe
			bonfunkcianta, sed kun malplena kapo. Mi fariĝis sengrasa maldikulo,
			mi tuj laciĝas, kiam mi faras ian braklaboron, kaj, kvankam mi estas
			malpeza, mi eĉ ne havas la rapidmovecon de tia ulo, kiel vi, sed mia
			kapo plenas je belaĵoj, kaj ili donas sunan koloron al mia vivo, eĉ
			en tempoj de malfacileco».</p>
			
			<p>Nu, bone. Li bele parolas. Eduardo ĉiam estis senĉesa parolanto. Li
			jam montriĝis la plej belvorta el niaj samklasanoj, kiam ni kune
			lernejis. Sed mi ne ĉesas pensi pri lia kompatinda edzino, kies koron
			manĝetadas zorgoj pri l'' morgaŭo.</p>
			
			<p>«Kie ni trovos monon?» ŝi ripete demandas al si. «De kie diable mono
			venos? La muroj de nia domo jam komencas malrapide altiĝi, sed ni
			neniam sukcesos pagi ĝin. Kaj mi tiom antaŭĝojis je la ideo vivi en
			nia familia domo! Havi hejmon en sia domo, kia bela celo! Sed ni ne
			realigos ĝin. Oni forprenos la domon de ni kaj ĝin vendos, ĉar ni
			ne povos pagi. Aŭ polico venos, arestos nin, kaj oni ĵetos nin en
			malliberejon!»</p>
			
			<p>Ŝi troigas, evidente. Sed tamen! Imagu al vi! Ŝi timas retroviĝi
			en malliberejo, kaj li, dume, revas nur pri literaturo kaj dumilpaĝaj
			libroj! Ĉu ilia para vivo sukcesos supervivi tian streĉiĝon, tian
			kontraŭecon en la manieroj pensi? Vere, ilia situacio min	maltrankviligas.</p>
			
			<p>Mi konstatis, ke ŝi multe maldikiĝis, kaj ke ŝia vizaĝo alprenis
			aĉan koloron, nesanan. Tiel ŝatinda virineto! Mia koro ŝiriĝis,
			kiam mi vidis ŝin tiel senhelpa.
			</p>

			<a id="dua" class="scrollspy"></a>
			<h3>La ĝojoj de petveturado</h3>
		
			<p>Ĉu estas vi, Johana? Kio okazis? Kial vi ne revenis hejmen? Kial
			vi telefonas tiel malfrue?</p>
			<p>...</p>
			
			<p>Kion? Kiun vi renkontis? Mi ne komprenas. Parolu pli klare, kara,
			bonvolu. Kio okazis al via voĉo? Mi apenaŭ rekonas ĝin.</p>
			<p>...</p>
			
			<p>En la hospitalo, ĉu? Vi estas en hospitalo! Mi timas. Diru al mi,
			kio okazis. Kion vi faras en hospitalo?</p>
			<p>...</p>
			
			<p>Kion vi ĵus diris pri aŭto? Mi fakte tre malbone aŭdas vin. La
			aŭto estas fuŝita? Kies aŭto? Ĉu mia aŭto? Johana! Kion vi
			faris?</p>
			<p>...</p>
			
			<p>Malfeliĉa hazardo, malfeliĉa hazardo! Kiajn vortojn vi uzas!
			Ŝajnas al mi, ke vi ne ŝoforis tre atente.</p>
			<p>...</p>
			
			<p>Kion? Ne vi ŝoforis! Sed mi ĉiam diris al vi, ke mi akceptas, ke vi
			uzu mian aŭton, sed ne ke iu alia ol vi ŝoforu!</p>
			<p>...</p>
			
			<p>Vi mem ne povis! Bela rimarko! Kaj kial diable vi ne povis ŝofori,
			dum vi lernis direkti aŭton jam antaŭ pluraj jaroj? Ne, Johana.
			Vere, mi ne komprenas vin.</p>
			<p>...</p>
			
			<p>Brando! Vi trinkis tiom da brando, ke vi ne plu klare vidis! Ĉu
			tion vi ĵus diris al mi? Kial do vi trinkis tiom da brando? Ili
			trinkigis vin, ĉu? Sed kiuj estas tiuj «ili»?</p>
			<p>...</p>
			
			<p>Vi ne scias! Vi ne konas ilin! Pli kaj pli bele! Vi renkontis
			ulojn, kaj trinkis kun ili tiom da brando, ke vi ne plu povis direkti
			mian aŭton, kaj vi nun telefonas el hospitalo. Vere, mi ne scias,
			kion pensi. Kion vi ĵus diris? Mortis, ĉu? Kiu mortis?</p>
			<p>...</p>
			
			<p>Li ankoraŭ ne tute mortis, sed estas nun mortanta? Ĉio ĉi estas
			neimageble serioza. Kiu troviĝis tie, kaj mortis, aŭ mortas?</p>
			<p>...</p>
			
			<p>La aŭto surveturis lin! Johana! Mi perdas la kapon! Vi parolas
			tiel trankvile! Kion? Ha jes, ili donis trankviligan substancon al
			vi. Jes, mi scias, kuracistoj estas tiaj. Tuj, kiam okazis io drama,
			nuntempe, ili havigas al oni trankviligilon. Tial vi parolas tiel
			strange. Sed kia terura okazaĵo! Vere, mia kapo turniĝas. Rediru al
			mi — ĉar mi nenion komprenas — kiu ŝoforis, kiam la aŭto
			surveturis tiun kompatindan sinjoron?</p>
			<p>...</p>
			
			<p>Kion vi diris? La ĉefo de la polico direktis mian aŭtomobilon?</p>
			<p>...</p>
			
			<p>Ne li? La ĉefo de la polico ne estis la homo en la aŭto, sed la
			homo, sur kiu la veturilo pasis? Kion? Ĉu la mortanto estas la
			policĉefo? Ho, Johana, ne estas vere, ĉu? Ne, ne! Filino mia,
			kion diable vi faris?</p>
			<p>...</p>
			
			<p>Ne vi faris! Sed kiu, kiu do? Kiu ŝoforis? Provu paroli pli klare,
			mi malbone aŭdas.</p>
			<p>...</p>
			
			<p>Nekonato! Sed kiel vi renkontis tiun nekonaton? Kion? Li petveturis
			? Ha jes, kompreneble, li petveturis! Mi tion imagas perfekte. Li
			staris apud la vojo signante al pasantaj aŭtoj, ke li deziras veturon.
			Kaj vi, simplulino, akceptis lin kaj ...</p>
			<p>...</p>
			
			<p>Bela! Li estis tre bela! Jen belega respondo! Johana, ĉu vere vi
			estas sesjara knabino? Tion oni kredus, aŭdante vin. Bela! Mi
			parolos al vi pri beleco kiam vi hejmenvenos! Vi aŭdos min, tion mi
			promesas al vi.</p>
			<p>...</p>
			
			<p>Kaj poste vi haltis por enaŭtigi alian. Kaj tiu havis botelon da...
			kion vi diras? Biero, ne brando, biero, ĉu? Ha jes! Komence biero.
			Kaj poste vi trovis brandon! Kie? La sama, ĉu? Tiu dua
			petveturanto diris, ke li havas ankaŭ brandon, kaj vi... nekredeble!
			Ĉu vi trinkis en la aŭto?</p>
			<p>...</p>
			
			<p>Ha, feliĉe vi havis la ideon halti por trinki. Kion vi...? Tion mi
			povas imagi, ke la naturo estis tre bela tiuloke. Ho jes, mi facile
			prezentas al mi enkape la vidaĵon: vi en bela naturo kun du beluloj,
			kaj... Kion vi diris?</p>
			<p>...</p>
			
			<p>Nur unu estis bela! Jes, kompreneble. La alia estis nur la
			homo-kun-biero-kaj-brando. Sed poste, kio okazis?</p>
			<p>...</p>
			
			<p>Kompreneble, vi sentis vin necerta pri vi! Kiel povus esti alie, post
			tiom da trinkado? Kaj do vi petis tiun alian ŝofori. Sed verŝajne
			ankaŭ tiu trinkis tro multe, kaj... Terure! Rakontu do precize, kio
			okazis, dum li direktis la aŭton.</p>
			<p>...</p>
			
			<p>Jes. En kiun urbeton vi eniris? Mi ne komprenis la nomon.</p>
			<p>...</p>
			
			<p>Ha jes, mi vidas, jes, tie. Kaj tuj post la unuaj domoj estas tiu vojo
			dekstre, kaj...</p>
			<p>...</p>
			
			<p>Kion? Li veturis en la nazon de alia aŭto, kiu alvenis, kaj li
			sukcesis samtempe surveturi piediranton! Kaj tiu estis la policĉefo
			! Johana, Johana, mia filino, kiel eblas!</p>
			<p>...</p>
			
			<p>Kion? Ĉu vi diris, ke viaj du petveturantoj sukcesis forkuri, antaŭ
			ol la polico alvenis? Kaj ĉu vere neniu ilin haltigis? Ĉu oni ne
			kaptis ilin? Neniu rimarkis! Sed ili estis krimuloj! Almenaŭ tiu,
			kiu ŝoforis!</p>
			<p>...</p>
			
			<p>Sed vi mem, kial vi nenion diris al la homoj tie? Jes, kompreneble,
			vi estis kelkmomente nekonscia, kaj dum tiu momento ili perdigis sin.
			Sed... sed... se tiuj du malaperis, tiam la polico neniam kredos, ke
			ili entute ekzistas! Ĉu iu ilin vidis?</p>
			<p>...</p>
			
			<p>Ne, kompreneble. Neniu vidis ion ajn. Ĉio okazis tro rapide. Tiuj du
			junulaĉoj malaperis for, kaj restis sur la strato vi, plena je
			brando, mortanta policĉefo, kaj du rompaĉitaj, pecigitaj aŭtoj. Kaj
			sur la aŭto, el kiu oni vidis vin eliri, kiam vi rekonsciiĝis,
			troviĝas mia numerplato!</p>
			<p>...</p>
			
			<p>Se almenaŭ vi ne estus mia filino, mi povus diri, ke oni ŝtelis mian
			aŭton, sed kun vi en ĝi...</p>
			<p>...</p>
			
			<p>Silentu, mi petas, Johana. Nenion diru plu. Kaj agu tuj. Jen mia koro
			reagas strange. Mi sentas doloron. Mi petas vin, telefonu al
			kuracisto, ke li venu tujtuj al mi. Mi... Mi timas, ke nevole, jes ja,
			tute certe nevole, sed tamen... mi timas, ke vi mortigis du homojn!
			Ne plu estas aero ĉi... ĉi tie. M... mi ne p... ne plu po... povas
			paro... </p>'
  WHERE l.kurso = 'GR' AND l.numero = 24 AND le.ordo = 5;

-- leçon 24, section 6
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##RESUMO##'
  WHERE l.kurso = 'GR' AND l.numero = 24 AND le.ordo = 6;

-- leçon 25, section 1
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<fieldset class="sono">
				<legend>Aŭskultu tiun rakonton:</legend>
				<p>
					<audio id="audioPlayer" controls="controls" type="audio/mpeg">
						<source type="audio/mp3" src="fr/gerda/son/gerda/gerda25.mp3" />
					</audio>
				</p>
			</fieldset>
			<h3>Tiom da riskoj kaj zorgoj</h3>
			<div class="row dialogo">
				<div class="col s12 m8">
					<p>"Sed vi ne respondis pri la fotokopio!"
					</p>
					<p>"Ho, pardonu. La profesoro havis ĝin en sia paperujo. Li
					fartis tre malbone post la operacio. Marta simple prenis la dokumenton
					el lia paperujo, dum li dormis; ŝi ja sciis, ke li ne vivos longe. Li
					fartis malbone. Lia sanstato ne lasis multe da espero. Fakte, li
					baldaŭ mortis post tio. Neniu do zorgis pri la malaperinta papero."</p>
					<p>"Kiel Ronga enmiksiĝis en la aranĝon?"</p>
					<p>"Li estis la amanto de Marta, kaj ŝi rakontis al li. Li vivas
					tiamaniere, ke li daŭre bezonas multe da mono. Li organizis la aferon.
					Estas li kaj kolego Fergus, kiuj forportis Gerdan, post kiam ili batis
					Bob senkonscia. La oficejo de Fergus estas tute proksima.  Tien ili
					portis ŝin, kaj tie ili atendis, ĝis la vojo estis libera kaj ili
					povis veturigi ŝin al la forlasita domo."</p>
					<p>Gerda parolis:</p>
					<p>"La frato de Marta plurfoje vizitis min, antaŭ kelkaj monatoj.
					Li provis igi min traduki por li la dokumenton. Sed kiam mi demandis,
					de kie li ricevis ĝin, li hezitis, iom paliĝis, ne respondis tuj, kaj
					mi komprenis, ke li ne agis honeste. Mi memoris la vortojn de Prof.
					Kosadi, kaj malakceptis kunlabori. Sed li revenis unufoje, dufoje,
					trifoje. Mi ĉiufoje rifuzis. Kiam mi poste ricevis inviton instrui pri
					malnovaj sekretaj lingvoj en la kadro de kurso de Prof. Ronga, mi tute
					ne imagis, ke estas rilato inter Ronga kaj la junulo, kiu tiel ofte
					venis al mia hejmo insisti, por ke mi traduku la paperon pri l'' trezoro."</p>
					<p>"Jes," diris Tom. "Pro via plurfoja rifuzo ili elpensis tiun
					planon. Kapti vin kaj perforte devigi vin traduki la tekston."</p>
					<p>"Tiom da riskoj kaj zorgoj por nenio!" komentis Gerda. "Kia
					malsaĝeco! Kia stulteco!"</p>
					<p>"Jes. Amatoroj," diris la policano malestime. "Ili agis amatore
					ekde la komenco. Pro tio ni tiel facile ilin kaptis. Sed pri tiu
					amatoreco vi danku Dion, Gerda. Pro tiu amatoreco ni povis liberigi
					vin, kaj vi plu vivas. Neamatoroj en simila situacio ne hezitus: vin
					uzinte, ili vin mortigus."</p>
					<p>"Ĉu vere?"</p>
					<p>"Jes. Vi sciis tro multe. Estus tro danĝere lasi vin vivi.
					Sincere, vi povas danki Dion, ke nur amatoroj planis kaj realigis tiun
					aferon."</p>
					<p>Gerda silentis, pensema.</p>
					<p>"Terure!" ŝi fine diris. "Ĉiaokaze, mi plej sincere dankas
					vin, ĉiun el vi. Vi agis mirinde. Vi savis min kaj mian filinon. Sed,
					Bob, kion vi opinias pri la tuta afero? Vi ankoraŭ diris nenion."</p>
					<p>Bob rigardis ŝin, kun iom stranga esprimo.</p>
					<p>"Mi plezure trinkus glason da brando," li diris. Kaj li restis
					malĝojeta, dum ĉiuj aliaj ekridis.</p>
				</div>
				<div class="col s12 m4">
					<img src="fr/gerda/bildoj/gerda25-1.gif" class="responsive-img">
				</div>
			</div>'
  WHERE l.kurso = 'GR' AND l.numero = 25 AND le.ordo = 1;

-- leçon 25, section 2
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<section class="klarigo">
				<p>Il n''y a pas de nouveau point de grammaire pour ce chapitre. 
				Vous devriez pouvoir tout comprendre sans trop de difficultés.</p>
			</section>'
  WHERE l.kurso = 'GR' AND l.numero = 25 AND le.ordo = 2;

-- leçon 25, section 3
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<p class="eo eta">Ces mots seront automatiquement ajoutés à votre vocabulaire à réviser lorsque vous aurez terminé d''étudier cette section.</p>
			
			<div class="vortlisto row">
				<div class="col s12 l6">
					<p><span class="eo">Dio</span> : Dieu</p>
					<p><span class="eo">estimi</span> : estimer</p>
					<p><span class="eo">farti</span> : se porter (bien ou mal)</p>
					<p><span class="eo">insisti</span> : insister</p>
					<p><span class="eo">inviti</span> : inviter</p>
					<p><span class="eo">kadro</span> : cadre, structure</p>
					<p><span class="eo">kolego</span> : collègue</p>
					<p><span class="eo">komenti</span> : commenter</p>
				</div>
				<div class="col s12 l6">
					<p><span class="eo">kurso</span> : cours (d''un professeur)</p>
					<p><span class="eo">organizi</span> : organiser</p>
					<p><span class="eo">paperujo</span> : malette, cartable</p>
					<p><span class="eo">pluraj</span> : plusieurs</p>
					<p><span class="eo">rifuzi</span> : refuser</p>
					<p><span class="eo">stato</span> : état, condition, manière d''être, position</p>
					<p><span class="eo">teksto</span> : texte</p>
				</div>
			</div>'
  WHERE l.kurso = 'GR' AND l.numero = 25 AND le.ordo = 3;

-- leçon 25, section 4
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<h3>Nova mistero!</h3>
	
			<p>KARA KAJ ESTIMATA LEGINTO,</p>
			<p>
			Vi legis ĉi tiun aventuron ĝis la fino. Sendube vi estas kontenta, ke
			ĉio finiĝis bone. Sed ĉu vi rimarkis, ke en la rakonto grava
			kontraŭdiro troviĝas? Alivorte, en unu loko la aŭtoro diras ion, kaj
			en alia li diras la kontraŭon. Vi ne rimarkis, ĉu vere?  Bedaŭrinde!
			Nun vi devos relegi la tutan tekston por trovi, pri kio temas. Legu
			atente, kaj se post unu legado vi ne trovis, relegu duan fojon, trian
			fojon, ktp. Certe vi fine trovos. Kaj se ne, nu, la vortoj kaj
			esprimmanieroj de Esperanto pli bone metiĝos en vian kapeton…
			</p>
			##EKZERCO:102##	
			<h3>Demandoj, sed ne ekzercoj</h3>
	
			##EKZERCO:103##'
  WHERE l.kurso = 'GR' AND l.numero = 25 AND le.ordo = 4;

-- leçon 25, section 5
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<h3>La tri plendoj de s-ro Kursano</h3>
		
			<p>Sinjoro policano, mi havas plendon. Tri plendojn, fakte. Ĉu vi
			bonvolas noti?</p>
			
			<p>Mi esperas, ke vi povos fari ion, ĉar mia digno malbonfartas, kaj mi
			esperas, ke dank'' al via interveno, ĝi refartos bone. Pri kio mi
			plendas? Pri multo, sinjoro policano, mi plendas pri multo.
			Multrilate oni malbonagis kontraŭ mi.</p>
			
			<p>Unue mi plendas pri provo ŝteli de mi monon. Due pri persekutado. Kaj
			trie... atendu... lasu min pripensi momenteton, estis ankaŭ io alia,
			sed ŝajnas, ke mi forgesis. Ha jes, kompreneble! Pri malvera
			promeso. Malhonesta promeso, se vi preferas.</p>
			
			<p>Oni diris al mi, ke, se mi pagos la kurson, mi finfine scios esprimi
			min en tiu lingvo, kaj mi konstatas, ke mi ne scias. Tio estas
			malhonesta, ĉu ne? Oni invitis min elpoŝigi mian monon, kaj kion mi
			ricevis? Ian komencan kaj malprecizan ideon pri la lingvo. Oni agis
			nejuste al mi. Mi ne ricevis ion samvaloran kiel la mono, kiun mi
			pagis. Tial mi petas vin skribi mian plendon, mian unuan: provo ŝteli
			monon de mi.</p>
			
			<p>Dua plendo: oni min persekutis. Kiel oni persekutis min, vi volas scii?
			Ĉefe la instruanto min persekutis, sed fojfoje ankaŭ la
			kunlernantoj. Imagu tion: esti persekutata de siaj samklasanoj!
			Nekredeble, ĉu? Tamen tio okazis. Mi diras la veron. Mi estas homo
			sincera, kaj tial ne elportas malhonestaĵojn, kaj malhonestaĵojn mi
			konstante travivis dum la daŭro de tiu kurso. Ili persekutis min
			dirante, ke mia maniero min esprimi en la tutmonda lingvo ne estas
			ĝusta. Konstante mankis iu N, ili diris; mi uzis la vortfinaĵon A
			kiam devus esti E, ili diris, ktp ktp ( = kaj tiel plu). Ĉiufoje mi
			aŭdis similajn rimarkojn, malestimajn. Ĉu mi povus allasi, ke oni
			min malrespektu tiamaniere? Ne, sinjoro policano. Mi povas akcepti
			multon malplaĉan, sed malrespekton mi firme rifuzas.</p>
			
			<p>Kiam homo ne rajtas paroli tute simple sen ricevi de ĉiuj flankoj
			rimarkojn pri tio, ke li sin esprimas fuŝe, kiel nomi tion, se ne
			persekutado? Konstante oni alsaltis min, ĉar mi diris IGI kaj ne
			IĜI, aŭ DE kaj ne DA. Estis organizita milito kontraŭ mia sento pri
			memdigno, kontraŭ mia memvaloro. Oni konstante provadis malaltigi min
			kaj estigi en mi sentojn de malplivaloro. Ĉu ni ne vivas en libera
			lando, kie, laŭtradicie, la digneco de homa persono estas respektata?
			Mi kuraĝe rifuzis lasi ilin subigi min, sed ili insistis. Plurfoje
			mi konstatis, ke ili trovas plezuron en la fakto diri al mi, ke mi
			fuŝlernis. Estas faka vorto, kiu difinas tiun sintenon, sed mi
			momente forgesis ĝin. Mia memoro ne fartas tre bone post tiu laciga
			lingvokurso.</p>
			
			<p>Kaj, trie, mi prezentas plendon pri malvera promeso. Oni promesis al
			mi, ke mi lernos facilan lingvon en plaĉa atmosfero. Fakte la lingvo
			estas tre malfacila, kaj la atmosfero... nu, plej bone eĉ ne paroli
			pri ĝi. Mi opiniis, ke oni uzos seriozan lernolibron, kie ĉio estas
			bonorde prezentita kaj klare difinita. Fakte, oni uzis neinteresan
			rakonton, pri kiu mi nenion komprenis, verŝajne ĉar nenio estis
			kompreninda. Ili eĉ ne sukcesis uzi ĉiufoje tekston kun sama
			longeco. Kelkfoje, la teksto, kiun ni legis kaj studis, havis malpli
			ol unu paĝon, alifoje ĝi estis dupaĝa. Estis suferige, por mia
			digneco de mezjuna viro, devi sekvi la knabecajn rakontojn. kiujn tiu
			kurso proponis al ni. Jam antaŭ longe mi forlasis la infanetan
			lernejon kaj nur persono, kies kapo fuŝe funkcias, povis imagi, ke
			tia rakontaĉo kontentigos normalan kursanaron.</p>
			
			<p>Cetere, kiom koncernas la normalecon de miaj samkursanoj... nu, ankaŭ
			ĉi-rilate estas preferinde silenti. Jen, sinjoro policano. Ĉu vi
			notis ĉion? Ĉi tio estas mia plendo. Mi insistas, por ke vi
			transsendu ĝin al la superaj aŭtoritatoj. Mi deziras, ke oni
			rejustigu la situacion, ke oni repagu al mi mian monon, kaj ke oni
			informu ĉiujn personojn, ke la lernado estos tute malsama ol ili
			atendas.</p>
			
			<p>Saluton, sinjoro policano. Fartu bone. Estas tempo, ke mi foriru. Kaj
			bonvole ne plendu, se mi brufermas la pordon. Mia furiozo devas
			esprimiĝi iamaniere, ĉu kun, ĉu sen N ĉe la vortofino. Ĝis la
			revido! Aŭ, pli bone eĉ, adiaŭ!
			</p>'
  WHERE l.kurso = 'GR' AND l.numero = 25 AND le.ordo = 5;

-- leçon 25, section 6
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##RESUMO##'
  WHERE l.kurso = 'GR' AND l.numero = 25 AND le.ordo = 6;

-- leçon 26, section 1
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<table><thead><tr><th>Naturo de la ekzamen-partoj</th><th>Daŭro</th><th>Noto</th></tr></thead>
	<tbody>
		<tr><td><b>Aŭda komprenado</b>:<br/>Respondo al komprenado-demandaroj pri tri aŭ kvar mallongaj dokumentoj registritaj kiuj temas pri ĉiutagaj situacioj. (du aŭskultoj)<br/>Maksimuma daŭro de la aŭskultotaj dokumentoj: 5 minutoj</td>
		<td>Proksimume 25&nbsp;minutoj </td><td>/25</td></tr>
<tr><td><b>Skriba komprenado</b>:<br/>Respondo al komprenado-demandaroj pri tri aŭ kvar mallongaj dokumentoj skribitaj kiuj temas pri ĉiutagaj situacioj.</td>
		<td>30&nbsp;minutoj </td><td>/25</td></tr>
	<tr><td><b>Skriba produktado</b>:<br/>Redaktado de du skribaj produktadoj (amika letero aŭ mesaĝo) <br/>- Priskribu eventon aŭ personajn spertojn<br/>- Skribu por inviti, danki, pardonpeti, demandi, informi, gratuli…
</td>
		<td>45 minutoj </td><td>/25</td></tr>
	<tr><td><b>Sumo</b>:</td><td>1&nbsp;horo kaj 30&nbsp;minutoj </td><td>/75</td></tr>		
</tbody>
</table>

<p>Sukcesa sojlo por akiri diplomon: 37,5/75<br/>
Minimuma noto bezonata por ĉiu ekzamen-parto: 5/25<br/>
Daŭro de la tuta testo: 1&nbsp;horo kaj 40&nbsp;minutoj  </p>'
  WHERE l.kurso = 'GR' AND l.numero = 26 AND le.ordo = 1;

-- leçon 26, section 2
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<h3>Unua ekzerco</h3>
		<p class="parto">Vi aŭdos dufoje dokumenton. Vi havos paŭzon de tridek sekundoj inter la du aŭskultoj kaj alian de tridek sekundoj por kontroli viajn respondojn. Unue legu la demandojn.</p>
					<fieldset class="sono">
				<legend>Aŭskultu tiun rakonton:</legend>
				<p>
					<audio id="audioPlayer" controls="controls" type="audio/mpeg">
						<source type="audio/mp3" src="fr/cge/sonoj/A2-Final-1.mp3"/>
					</audio>
				</p>
			</fieldset>

		##EKZERCO:296##		<h3>Dua ekzerco</h3>
		<p class="parto">Vi aŭdos dufoje dokumenton. Vi havos paŭzon de tridek sekundoj inter la du aŭskultoj kaj alian de tridek sekundoj por kontroli viajn respondojn. Unue legu la demandojn.</p>
				<fieldset class="sono">
				<legend>Aŭskultu tiun rakonton:</legend>
				<p>
					<audio id="audioPlayer" controls="controls" type="audio/mpeg">
						<source type="audio/mp3" src="fr/cge/sonoj/A2-Final-2.mp3"/>
					</audio>
				</p>
			</fieldset>		
		##EKZERCO:297##		<h3>Tria ekzerco</h3>
		<p class="parto">Vi aŭdos dufoje dokumenton. Vi havos paŭzon de tridek sekundoj inter la du aŭskultoj kaj alian de tridek sekundoj por kontroli viajn respondojn. Unue legu la demandojn.</p>
				<fieldset class="sono">
				<legend>Aŭskultu tiun rakonton:</legend>
				<p>
					<audio id="audioPlayer" controls="controls" type="audio/mpeg">
						<source type="audio/mp3" src="fr/cge/sonoj/A2-Final-3.mp3"/>
					</audio>
				</p>
			</fieldset>		
		##EKZERCO:298##'
  WHERE l.kurso = 'GR' AND l.numero = 26 AND le.ordo = 2;

-- leçon 26, section 3
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<p>Maksimumo de akireblaj poentoj en tiu parto: 25 poentoj</p>
		<h3>Unua ekzerco</h3>
		<div class="row">
			<p class="col s4 m2 center-align"><img class="responsive-img" src="fr/gerda/bildoj/icone-place-assise.jpg"/><br>-A-</p>
			<p class="col s4 m2 center-align"><img class="responsive-img" src="fr/gerda/bildoj/icone-interdit-manger.jpg"/><br>-B-</p>
			<p class="col s4 m2 center-align"><img class="responsive-img" src="fr/gerda/bildoj/icone-animaux-interdits.jpg"/><br>-C-</p>
			<p class="col s4 m2 center-align"><img class="responsive-img" src="fr/gerda/bildoj/icone-telephone-ok.jpg"/><br>-D-</p>
			<p class="col s4 m2 center-align"><img class="responsive-img" src="fr/gerda/bildoj/icone-musique-interdite.jpg"/><br>-E-</p>
			<p class="col s4 m2 center-align"><img class="responsive-img" src="fr/gerda/bildoj/icone-interdit-parler.jpg"/><br>-F-</p>
		</div>
		##EKZERCO:299##		<h3>Dua ekzerco</h3>
		<div class="row">
			<p>Vi ricevas ĉi tion per via komputilo de via franca amikino.</p>
			<p class="col s12 center-align"><img class="responsive-img" src="fr/gerda/bildoj/msg-sarah.jpg"/></p>
		</div>
		##EKZERCO:300##		<h3>Tria ekzerco</h3>
		<div class="row">
			<p class="col s12 center-align">
				<img class="responsive-img" src="fr/gerda/bildoj/sms.jpg"/>
			</p>
		</div>
		##EKZERCO:301##		<h3>Kvara ekzerco</h3>
			<p>Viaj najbaroj invitas vin vespermanĝi. Vi iras al dolĉaĵvendejo, por aĉeti la deserton, kiun vi alportos. 
			Legu la enhavon de tiuj kukoj kaj skribu la numeron de la kuko, kiu taŭgas al ĉiu homo en la familio.</p>
			<p>La patro havas ovalergion. La patrino ŝategas ĉokoladon. La filino ŝatas fruktojn sed ne lakton. La filo ŝatas sukerkukojn. La avo ŝategas kafajn desertojn. La avino amas laktokukojn sen vanilo.</p>
		<div class="row">
			<p class="col s3"><img class="responsive-img" src="fr/gerda/bildoj/tavolkuko.jpg"/></p>
			<p class="col s3">1<br>tavolkuko<br>(ovoj • sukero • faruno • butero)</p>
			<p class="col s3"><img class="responsive-img" src="fr/gerda/bildoj/fragotorteto.jpg"/></p>
			<p class="col s3">2<br>fragotorteto<br>(ovoj • faruno • butero • fragoj)</p>
		</div>
		<div class="row">
			<p class="col s3"><img class="responsive-img" src="fr/gerda/bildoj/shaumajho.jpg"/></p>
			<p class="col s3">3<br>ĉokolada ŝaŭmaĵo<br>(ovoj • butero • ĉokolado)</p>
			<p class="col s3"><img class="responsive-img" src="fr/gerda/bildoj/kremkuketo.jpg"/></p>
			<p class="col s3">4<br>kafa kremkuketo<br>(ovoj • faruno • butero • kafo)</p>
		</div>
		<div class="row">
			<p class="col s3"><img class="responsive-img" src="fr/gerda/bildoj/laktorizo.jpg"/></p>
			<p class="col s3">5<br>laktorizo<br>(rizo • lakto • sukero • vanilo)</p>
			<p class="col s3"><img class="responsive-img" src="fr/gerda/bildoj/cherizflano.jpg"/></p>
			<p class="col s3">6<br>ĉerizflano<br>(ovoj • faruno • lakto • ĉerizoj)</p>
		</div>
		##EKZERCO:304##'
  WHERE l.kurso = 'GR' AND l.numero = 26 AND le.ordo = 3;

-- leçon 26, section 4
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<p>Maksimumo de akireblaj poentoj en tiu parto: 25 poentoj</p>
		<h3>Unua ekzerco</h3>
		##EKZERCO:302##		<h3>Dua ekzerco</h3>
		<div class="row">
			<p class="col s12 center-align"><img class="responsive-img" src="fr/gerda/bildoj/letero-Filipo.jpg"/></p>
		</div>
		##EKZERCO:303##'
  WHERE l.kurso = 'GR' AND l.numero = 26 AND le.ordo = 4;

-- leçon 26, section 6
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##RESUMO##'
  WHERE l.kurso = 'GR' AND l.numero = 26 AND le.ordo = 6;
