-- #1087 : contenu des sections du cours CG dans lecioneroj.enhavo, extrait de fr/cge/ par sql/eltiri-enhavon.php.
-- La section est retrouvée par cours, numéro de leçon et ordre : le script vaut pour la prod et peut être rejoué.
-- lecioneroj est en MyISAM (pas de transaction) : en prod, sauvegarder d'abord la table.
SET NAMES utf8mb4;

-- leçon 1, section 1
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<p>Avant que vous ne commenciez cette première leçon, nous vous invitons à lire le <a href="fr/cge/intro.php?temo=intro">
			préambule</a>, qui vous donnera toutes les informations utiles sur la manière de suivre ce cours.</p>
		
			<p class="parto">En espéranto les mots s’écrivent phonétiquement, c’est-à-dire qu’ils
			s’écrivent comme ils se prononcent (et <i>vice versa</i>).</p>

			<div class="card-panel blue lighten-5 center">
				Souvenez-vous bien de cette règle sans exception&nbsp;: <b>une lettre = un son</b>.
			</div>

			<p class="parto">L’<b>alphabet</b> espéranto comporte 28 lettres&nbsp;:</p>
			<div class="container row">
					<p class="col s12 row" style="font-size: 1.5em"><span class="col s1">&nbsp;A&nbsp;</span><span class="col s1">&nbsp;B&nbsp;</span><span class="col s1">&nbsp;C&nbsp;</span><span class="col s1">&nbsp;Ĉ&nbsp;</span><span class="col s1">&nbsp;D&nbsp;</span><span class="col s1">&nbsp;E&nbsp;</span><span class="col s1">&nbsp;F</span></p>
					<p class="col s12 row" style="font-size: 1.5em"><span class="col s1">&nbsp;G&nbsp;</span><span class="col s1">&nbsp;Ĝ&nbsp;</span><span class="col s1">&nbsp;H&nbsp;</span><span class="col s1">&nbsp;Ĥ&nbsp;</span><span class="col s1">&nbsp;I&nbsp;</span><span class="col s1">&nbsp;J&nbsp;</span><span class="col s1">&nbsp;Ĵ</span></p>
					<p class="col s12 row" style="font-size: 1.5em"><span class="col s1">&nbsp;K&nbsp;</span><span class="col s1">&nbsp;L&nbsp;</span><span class="col s1">&nbsp;M&nbsp;</span><span class="col s1">&nbsp;N&nbsp;</span><span class="col s1">&nbsp;O&nbsp;</span><span class="col s1">&nbsp;P&nbsp;</span><span class="col s1">&nbsp;R</span></p>
					<p class="col s12 row" style="font-size: 1.5em"><span class="col s1">&nbsp;S&nbsp;</span><span class="col s1">&nbsp;Ŝ&nbsp;</span><span class="col s1">&nbsp;T&nbsp;</span><span class="col s1">&nbsp;U&nbsp;</span><span class="col s1">&nbsp;Ŭ&nbsp;</span><span class="col s1">&nbsp;V&nbsp;</span><span class="col s1">&nbsp;Z</span></p>
			</div>
			
			<p>
			Les lettres <b>q</b>, <b>w</b>, <b>x</b> et <b>y</b> n’existent pas en
			espéranto mais on y trouve six lettres qui n’existent pas en français&nbsp;:
			<span class="eo">ĉ</span>, <span class="eo">ĝ</span>, <span class="eo">ĥ</span>, <span class="eo">ĵ</span>, <span class="eo">ŝ</span>, <span class="eo">ŭ</span> (à remarquer qu’elles ont toutes un accent circonflexe sauf le <span class="eo">ŭ</span> dont
			l’accent est en fait un demi-cercle).</p>

			<p>Les lettres suivantes ont une prononciation différente de celle du
			français&nbsp;:</p>
			<div class="vortlisto row">
				<div class="col s12 m6">
					<p><span class="eo">c</span>&nbsp;: ts (tsar)</p>
					<p><span class="eo">ĉ</span>&nbsp;: tch (Tchèque)</p>
					<p><span class="eo">e</span>&nbsp;: entre é et è</p>
					<p><span class="eo">g</span>&nbsp;: g (gant)</p>
					<p><span class="eo">ĝ</span>&nbsp;: dj (Djibouti)</p>
					<p><span class="eo">h</span>&nbsp;: h (have en anglais)</p>
					<p><span class="eo">ĥ</span>&nbsp;: hr (Juan en espagnol)</p>
					<p><span class="eo">j</span>&nbsp;: y (yogourt)</p>
				</div>
				<div class="col s12 m6">
					<p><span class="eo">ĵ</span>&nbsp;: j (journal)</p>
					<p><span class="eo">o</span>&nbsp;: o (bol)</p>
					<p><span class="eo">r</span>&nbsp;: de préférence roulé (espagnol)</p>
					<p><span class="eo">s</span>&nbsp;: ss (santé, suisse)</p>
					<p><span class="eo">ŝ</span>&nbsp;: ch (chaud)</p>
					<p><span class="eo">u</span>&nbsp;: ou (tout)</p>
					<p><span class="eo">ŭ</span>&nbsp;: w (wapiti), ou bref (oui, waouh&nbsp;!)</p>
				</div>
			</div>

			<p>Les autres lettres de l’espéranto (<span class="eo">a</span>, <span class="eo">b</span>, <span class="eo">d</span>, 
				<span class="eo">f</span>, <span class="eo">i</span>, <span class="eo">k</span>, <span class="eo">l</span>, 
				<span class="eo">m</span>, <span class="eo">n</span>, <span class="eo">p</span>, <span class="eo">t</span>, 
				<span class="eo">v</span>, <span class="eo">z</span>) se prononcent comme en français. 
			<p>Chaque voyelle, <span class="eo">a</span>, <span class="eo">e</span>, <span class="eo">i</span>, 
				<span class="eo">o</span>, <span class="eo">u</span>, forme
			avec les consonnes voisines une syllabe séparée. Par contre, <span class="eo">j</span> et
			<span class="eo">ŭ</span>, qui sont parfois appelées <i>semi-voyelles</i>, sont des
			consonnes normales en espéranto, et font donc partie de la syllabe définie
			par une voyelle voisine. Vous trouverez des exemples plus tard dans les
			leçons à venir et nous reviendrons plus en détail sur la prononciation dans
			la quatrième leçon.</p>
			
						<p class="parto">Quand on a besoin d’épeler un mot en espéranto on ne dit pas <i>a</i>,
			<i>bé</i>, <i>cé</i>,… <i>ache</i>,… <i>zèd</i> comme en français mais
			<span class="eo">a</span>, <span class="eo">bo</span>, <span class="eo">co</span>, <span class="eo">do</span>, <span class="eo">e</span>, etc., c’est-à-dire que le nom des voyelles correspond à leur son et que le nom des consonnes se
			forme en leur ajoutant la terminaison <span class="eo">-o</span>.</p>
	
			<p>Exemples :</p>
			<div class="container">
				<p><span class="eo">griza</span>&nbsp;: go, ro, i, zo, a</p>
				<p><span class="eo">ruĝa</span>&nbsp;: ro, u, ĝo, a</p>
			</div>
	
			<p class="rimarko"><strong>REMARQUE</strong> : 
				Il n’y a que très peu de racines en espéranto qui ont une consonne
				double. Un exemple est <span class="eo">Finno</span> (finnois). Comme chaque lettre se
				prononce, on dit <span class="eo"><u>fin</u>-no</span>. Certains mots composés peuvent avoir
				une consonne double, par exemple <span class="eo">Pollando</span> (Pologne) de <span class="eo">Polo</span>,
				<span class="eo">lando</span>, et on prononce <span class="eo">Pol-<u>lan</u>-do</span>.
			</p>'
  WHERE l.kurso = 'CG' AND l.numero = 1 AND le.ordo = 1;

-- leçon 1, section 2
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<p class="parto">Les <b>noms communs</b> et les <b>noms propres</b> assimilés finissent
			toujours par <b>-o</b>.</p>
			<p class="parto">Les <b>verbes à l’infinitif</b> finissent toujours par <b>-i</b>.</p>
			<p class="parto">Les <b>adjectifs</b> finissent toujours par <b>-a</b> et se placent
			généralement avant le nom qu’ils qualifient.</p>
			<p>Exemples&nbsp;:</p>
			
			<div class="row">
				<p class="col s6"><span class="eo">a<u>mi</u>ko</span>&nbsp;: un ami</p>
				<p class="col s6"><span class="eo">a<u>mi</u>ka</span>&nbsp;: amical(e)</p>
				<p class="col s6"><span class="eo"><u>no</u>va a<u>mi</u>ko</span>&nbsp;: un nouvel ami</p>
				<p class="col s6"><span class="eo"><u>es</u>ti</span>&nbsp;: être</p>
				<p class="col s6"><span class="eo"><u>sa</u>na <u>kna</u>bo</span>&nbsp;: un garçon en bonne santé</p>
			</div>
			
			<p class="rimarko"><strong>REMARQUE</strong>&nbsp;: Dans cet exemple, nous avons utilisé le soulignement pour indiquer que
			l’avant-dernière syllabe porte l’accent tonique, c’est-à-dire qu’on la
			prononce plus fort que les autres syllabes. En français, l’accent tonique
			est sur la dernière syllabe, aussi, pour prononcer correctement
			<span class="eo">a<u>mi</u>ko</span>, il vous suffit de prononcer d’abord le mot français
			<span class="eo">a<u>mi</u></span> puis de lui ajouter <span class="eo">ko</span>. Entraînez-vous avec les mots de
			vocabulaire de la page suivante.</p>
			

			<fieldset class="vortoj">
				<legend>VOCABULAIRE</legend>
				<div>
					
					<p class="eo eta">Ces mots seront automatiquement ajoutés à votre vocabulaire à réviser lorsque vous aurez terminé d''étudier cette section. Le nombre de mots à réviser sera indiqué sur le bouton affiché au-dessus du sommaire.</p>
					
				</div>
				<div class="vortlisto row">
					<p class="col s12 m4"><span class="eo">amiko</span>&nbsp;: un ami</p>
					<p class="col s12 m4"><span class="eo">nova</span>&nbsp;: nouveau</p>
					<p class="col s12 m4"><span class="eo">esti</span>&nbsp;: être</p>
					<p class="col s12 m4"><span class="eo">amika</span>&nbsp;: amical(e)</p>
					<p class="col s12 m8"><span class="eo">sana</span>&nbsp;: sain, en bonne santé</p>
				</div>
			</fieldset>'
  WHERE l.kurso = 'CG' AND l.numero = 1 AND le.ordo = 2;

-- leçon 1, section 3
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<p class="eo eta">Ces mots seront automatiquement ajoutés à votre vocabulaire à réviser lorsque vous aurez terminé d''étudier cette section.</p>
			
			<fieldset class="vortoj">
				<legend>MOTS À RETENIR</legend>
				<div class="vortlisto row">
					<div class="col s12 m6 l4">
						<p><a href="fr/son/vortoj/viro.mp3" class="sm2_button"></a> <span class="eo">viro</span>&nbsp;: homme (mâle)</p>
						<p><a href="fr/son/vortoj/virino.mp3" class="sm2_button"></a> <span class="eo">virino</span>&nbsp;: femme</p>
						<p><a href="fr/son/vortoj/patro.mp3" class="sm2_button"></a> <span class="eo">patro</span>&nbsp;: père</p>
						<p><a href="fr/son/vortoj/patrino.mp3" class="sm2_button"></a> <span class="eo">patrino</span>&nbsp;: mère</p>
						<p><a href="fr/son/vortoj/filo.mp3" class="sm2_button"></a> <span class="eo">filo</span>&nbsp;: fils</p>
						<p><a href="fr/son/vortoj/filino.mp3" class="sm2_button"></a> <span class="eo">filino</span>&nbsp;: fille</p>
						<p><a href="fr/son/vortoj/frato.mp3" class="sm2_button"></a> <span class="eo">frato</span>&nbsp;: frère</p>
						<p><a href="fr/son/vortoj/fratino.mp3" class="sm2_button"></a> <span class="eo">fratino</span>&nbsp;: sœur</p>
						<p><a href="fr/son/vortoj/studento.mp3" class="sm2_button"></a> <span class="eo">studento</span>&nbsp;: étudiant</p>
						<p><a href="fr/son/vortoj/instruisto.mp3" class="sm2_button"></a> <span class="eo">instruisto</span>&nbsp;: instituteur, institutrice</p>
						<p><a href="fr/son/vortoj/knabo.mp3" class="sm2_button"></a> <span class="eo">knabo</span>&nbsp;: garçon</p>
					</div>
					<div class="col s12 m6 l4">
						<p><a href="fr/son/vortoj/pano.mp3" class="sm2_button"></a> <span class="eo">pano</span>&nbsp;: pain</p>
						<p><a href="fr/son/vortoj/kafo.mp3" class="sm2_button"></a> <span class="eo">kafo</span>&nbsp;: café</p>
						<p><a href="fr/son/vortoj/kuko.mp3" class="sm2_button"></a> <span class="eo">kuko</span>&nbsp;: gâteau</p>
						<p><a href="fr/son/vortoj/lakto.mp3" class="sm2_button"></a> <span class="eo">lakto</span>&nbsp;: lait</p>
						<p><a href="fr/son/vortoj/sukero.mp3" class="sm2_button"></a> <span class="eo">sukero</span>&nbsp;: sucre</p>
						<p><a href="fr/son/vortoj/teo.mp3" class="sm2_button"></a> <span class="eo">teo</span>&nbsp;: thé</p>
						<p><a href="fr/son/vortoj/urbo.mp3" class="sm2_button"></a> <span class="eo">urbo</span>&nbsp;: ville</p>
						<p><a href="fr/son/vortoj/lando.mp3" class="sm2_button"></a> <span class="eo">lando</span>&nbsp;: pays</p>					
						<p><a href="fr/son/vortoj/francujo-francio.mp3" class="sm2_button"></a> <span class="eo">Francujo/Francio<sup>[1]</sup></span>&nbsp;: France</p>
					</div>
					<div class="col s12 m6 l4">
						<p><a href="fr/son/vortoj/bela.mp3" class="sm2_button"></a> <span class="eo">bela</span>&nbsp;: beau</p>
						<p><a href="fr/son/vortoj/bona.mp3" class="sm2_button"></a> <span class="eo">bona</span>&nbsp;: bon</p>
						<p><a href="fr/son/vortoj/facila.mp3" class="sm2_button"></a> <span class="eo">facila</span>&nbsp;: facile</p>
						<p><a href="fr/son/vortoj/granda.mp3" class="sm2_button"></a> <span class="eo">granda</span>&nbsp;: grand</p>
						<p><a href="fr/son/vortoj/seka.mp3" class="sm2_button"></a> <span class="eo">seka</span>&nbsp;: sec</p>
						<p><a href="fr/son/vortoj/varma.mp3" class="sm2_button"></a> <span class="eo">varma</span>&nbsp;: chaud</p>
						<p><a href="fr/son/vortoj/kiu.mp3" class="sm2_button"></a> <span class="eo">kiu</span>&nbsp;: qui, quel</p>					
						<p><a href="fr/son/vortoj/kaj.mp3" class="sm2_button"></a> <span class="eo">kaj</span>&nbsp;: et</p>
						<p><a href="fr/son/vortoj/jen.mp3" class="sm2_button"></a> <span class="eo">jen</span>&nbsp;: voici</p>
						<p><a href="fr/son/vortoj/cxiam.mp3" class="sm2_button"></a> <span class="eo">ĉiam</span>&nbsp;: toujours</p>					
						<p><a href="fr/son/vortoj/en.mp3" class="sm2_button"></a> <span class="eo">en</span>&nbsp;: dans, en</p>
					</div>
				</div>
			</fieldset>
				<div class="notoj">
				<p><span class="eo">[1]</span> Historiquement, les noms de pays étaient construits à partir du nom des habitants, auquel on ajoutait le suffixe -<b>ujo</b> qui désigne le contenant. Ainsi, à partir de <span class="eo">Franco</span> (Français), on construisait <span class="eo">Francujo</span> (France). Par la suite, certains espérantistes ont remarqué qu’un grand nombre de personnes originaires d’un pays n’habitent plus ce pays. Certains Français habitent ailleurs qu’en France, et la France accueille des personnes de tous les pays du monde. Pour cette raison, un nouveau suffixe a vu le jour&nbsp;: -<b>io</b>. Les deux formes cohabitent pour de nombreux pays&nbsp;: <span class="eo">Francujo/Francio</span>, <span class="eo">Belgujo/Belgio</span>…</p></div>'
  WHERE l.kurso = 'CG' AND l.numero = 1 AND le.ordo = 3;

-- leçon 1, section 4
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<p class="parto">Les <strong>pronoms personnels</strong> sont :</p>
			<div class="vortlisto row">
				<div class="col s12 m6">
					<p><span class="eo">mi</span>&nbsp;: je</p>
					<p><span class="eo">vi</span>&nbsp;: tu</p>
					<p><span class="eo">li</span>&nbsp;: il (personne)</p>
					<p><span class="eo">ŝi</span>&nbsp;: elle (personne)</p>
					<p><span class="eo">ĝi</span>&nbsp;: il ou elle (non-personne)</p>
				</div>
				<div class="col s12 m6">
					<p><span class="eo">ni</span>&nbsp;: nous</p>
					<p><span class="eo">vi</span>&nbsp;: vous</p>
					<p><span class="eo">ili</span>&nbsp;: ils ou elles</p>
					<p><span class="eo">oni</span>&nbsp;: on</p>
				</div>
			</div>
			<p>Écouter comment prononcer les pronoms&nbsp;: <a href="fr/son/vortoj/pronomoj.mp3" class="sm2_button"></a></p>

			<p class="rimarko"><strong>REMARQUES</strong> : </p>
			<p>• On emploie <span class="eo">li</span> pour les personnes de sexe masculin et <span class="eo">ŝi</span> pour
			celles de sexe féminin. On utilise <span class="eo">ĝi</span> pour les choses, 
			les animaux ou les bébés. </p>
			<p>• Au pluriel, <span class="eo">ili</span> s’applique aux personnes des deux sexes et aux non-personnes pareillement. Pour les animaux familiers, on peut aussi utiliser <span class="eo">li</span> ou <span class="eo">ŝi</span></p>
				
			<a id="temps"class="scrollspy"></a>
			
			<p class="parto">Au <b>présent</b>, les verbes remplacent leur terminaison <b>-i</b> par 
			<b>-as</b> à toutes les personnes.</p>

			<div class="vortlisto row">
				<div class="col s12 m6">
					<p><span class="eo">mi estas</span>&nbsp;: je suis</p>
					<p><span class="eo">li estas</span>&nbsp;: il est</p>
					<p><span class="eo">ŝi estas</span>&nbsp;: elle est</p>
					<p><span class="eo">ĝi estas</span>&nbsp;: il/elle est</p>
				</div>
				<div class="col s12 m6">
					<p><span class="eo">ni estas</span>&nbsp;: nous sommes</p>
					<p><span class="eo">vi estas</span>&nbsp;: tu es, vous êtes</p>
					<p><span class="eo">ili estas</span>&nbsp;: ils ou elles sont</p>
				</div>
			</div>

			<p class="rimarko"><strong>REMARQUE</strong> : 
			N’oubliez pas l’accent tonique sur l’avant-dernière syllabe et
			prononcez bien toutes les lettres, y compris le <b>s</b> final&nbsp;: <span class="eo">estas</span> rime
			avec le mot français <em>tasse</em> et non pas <em>tas</em>.</p>			
			
			<p class="parto">Au <b>futur</b>, la terminaison sera <b>-os</b>, alors qu’au <b>passé</b>, elle 
			sera <b>-is</b>. Nous nous contenterons de ces trois temps pour le moment.</p>
			
			<div class="vortlisto row">
				<div class="col s12 m6">
					<p><span class="eo">mi estis</span>&nbsp;: j’étais, j''ai été, je fus</p>
					<p><span class="eo">mi estos</span>&nbsp;: je serai</p>
				</div>
			</div>
				
			<p class="rimarko"><strong>REMARQUE</strong> :</p>
			<p>Prononcez : <span class="eo">mi-<u>ès</u>-tass</span>, 
			<span class="eo">mi-<u>ès</u>-tiss</span>, <span class="eo">mi-<u>ès</u>-toss</span>.
			</p>
			
			<p class="parto">On marque le <b>pluriel</b> en ajoutant un <b>-j</b> à la fin des noms et des
			adjectifs qui s’y rapportent.</p>
			
			<a id="articles" class="scrollspy"></a>
			
			<p class="parto">Les <b>articles indéfinis</b> (un, une, des) et <b>partitifs</b> 
			(du, de la, des) n’existent pas en espéranto.</p>

			<div class="vortlisto row">
				<div class="col s12 m6">
					<p><span class="eo">biskvito</span>&nbsp;: un biscuit</p>
					<p><span class="eo">biskvitoj</span>&nbsp;: des biscuits</p>
				</div>
				<div class="col s12 m6">
					<p><span class="eo">pano</span>&nbsp;: du pain</p>
					<p><span class="eo">sukero</span>&nbsp;: du sucre</p>
				</div>
			</div>

			<p class="parto">Les <b>articles définis</b> (le, la, les, l’) sont traduits par un seul mot&nbsp;: <b>la</b>.</p>
			<div class="vortlisto row">
				<div class="col s12 m6">
					<p><span class="eo">la biskvito</span>&nbsp;: le biscuit</p>
					<p><span class="eo">la bonaj biskvitoj</span>&nbsp;: les bons biscuits</p>
				</div>
								<div class="col s12 m4">
					<p><span class="eo">la amiko</span>&nbsp;: l’ami</p>
					<p><span class="eo">la amikoj</span>&nbsp;: les amis</p>
				</div>
			</div>
					
			<p class="parto">Les <b>adjectifs possessifs</b> sont formés simplement en ajoutant la
			terminaison <b>-a</b> au pronom personnel. Quand ils sont employés sans
			être suivis par un nom, ils ont la fonction de nos pronoms possessifs.</p>
				
			<div class="vortlisto row">
				<div class="col s12 m4">
					<p><span class="eo">mi</span>&nbsp;: je</p>
					<p><span class="eo">vi</span>&nbsp;: tu, vous</p>
					<p><span class="eo">ŝi</span>&nbsp;: elle</p>
					<p><span class="eo">li</span>&nbsp;: il</p>
					<p><span class="eo">ĝi</span>&nbsp;: il, elle (non-personne)</p>
					<p><span class="eo">ni</span>&nbsp;: nous</p>
					<p><span class="eo">ili</span>&nbsp;: ils, elles</p>
				</div>
				<div class="col s12 m4">
					<p><span class="eo">mia</span>&nbsp;: mon, ma</p>
					<p><span class="eo">via</span>&nbsp;: ton, ta, votre</p>
					<p><span class="eo">ŝia</span>&nbsp;: son, sa (à elle)</p>
					<p><span class="eo">lia</span>&nbsp;: son, sa (à lui)</p>
					<p><span class="eo">ĝia</span>&nbsp;: son, sa</p>
					<p><span class="eo">nia</span>&nbsp;: notre</p>
					<p><span class="eo">ilia</span>&nbsp;: leur</p>
				</div>
				<div class="col s12 m4">
					<p><span class="eo">miaj</span>&nbsp;: mes</p>
					<p><span class="eo">viaj</span>&nbsp;: tes, vos</p>
					<p><span class="eo">ŝiaj</span>&nbsp;: ses (à elle)</p>
					<p><span class="eo">liaj</span>&nbsp;: ses (à lui)</p>
					<p><span class="eo">ĝiaj</span>&nbsp;: ses</p>
					<p><span class="eo">niaj</span>&nbsp;: nos</p>
					<p><span class="eo">iliaj</span>&nbsp;: leurs</p>
				</div>
			</div>
					
			<p class="rimarko"><strong>REMARQUE</strong> :
			Dans les mots <span class="eo">mia</span>, <span class="eo">via</span>, etc. 
			la lettre <strong>i</strong> conserve sa fonction de
			voyelle et fait syllabe&nbsp;: <span class="eo"><u>mi</u>-a</span>, <span class="eo"><u>vi</u>-a</span>, 
			<span class="eo">i-<u>li</u>-a</span>, …<br>
			Ne prononcez donc pas <span class="eo">mia</span> comme dans <em>amiable</em> mais comme dans 
			<em>un ami à moi</em>. </p>'
  WHERE l.kurso = 'CG' AND l.numero = 1 AND le.ordo = 4;

-- leçon 1, section 5
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<p class="noprint"><em>Pour entendre ces phrases, cliquez sur le bouton à gauche de la phrase.</em></p>
			
			<div class="vortlisto row">
				<p class="col s12 m6"><a href="fr/son/frazoj/l01-1.mp3" class="sm2_button"></a>
				<span class="eo">Viaj filoj estas niaj amikoj.</span></p>
				<p class="col s11 offset-s1 m6">Vos fils sont nos amis.</p>
				<p class="col s12 m6"><a href="fr/son/frazoj/l01-2.mp3" class="sm2_button"></a>
					<span class="eo">Iliaj kafoj estos varmaj.</span></p>
				<p class="col s11 offset-s1 m6">Leurs cafés seront chauds.</p>
				<p class="col s12 m6"><a href="fr/son/frazoj/l01-3.mp3" class="sm2_button"></a>
					<span class="eo">La knaboj estas grandaj.</span></p>
				<p class="col s11 offset-s1 m6">Les garçons sont grands.</p>
				<p class="col s12 m6"><a href="fr/son/frazoj/l01-4.mp3" class="sm2_button"></a>
					<span class="eo">Ŝia pano estis seka.</span></p>
				<p class="col s11 offset-s1 m6">Son pain (à elle) était sec.</p>
				<p class="col s12 m6"><a href="fr/son/frazoj/l01-5.mp3" class="sm2_button"></a>
					<span class="eo">Vi estas lia filo.</span></p>
				<p class="col s11 offset-s1 m6">Tu es son fils (à lui).</p>
				<p class="col s12 m6"><a href="fr/son/frazoj/l01-6.mp3" class="sm2_button"></a>
					<span class="eo">La instruisto estas sana.</span></p>
				<p class="col s11 offset-s1 m6">L''instituteur est en bonne santé.</p>
				<p class="col s12 m6"><a href="fr/son/frazoj/l01-7.mp3" class="sm2_button"></a>
					<span class="eo">Via amiko estas bela.</span></p>
				<p class="col s11 offset-s1 m6">Ton ami est beau.</p>
				<p class="col s12 m6"><a href="fr/son/frazoj/l01-8.mp3" class="sm2_button"></a>
					<span class="eo">La kuko estis lia.</span></p>
				<p class="col s11 offset-s1 m6">Le gâteau était à lui (était le sien)</p>
			</div>
	
			<p class="rimarko"><strong>REMARQUE</strong> :  
			Dans ces exemples les terminaisons <b>-aj</b> et <b>-oj</b> se prononcent
			<span class="eo">aï</span> et <span class="eo">oï</span>,
			comme dans <em>ail</em> et <em>Tolstoï</em> : <span class="eo"><u>vi</u>-aï
			<u>fi</u>-loï</span>, <span class="eo"><u>ka</u>-foï</span>, 
			<span class="eo">a-<u>mi</u>-koï</span>, etc.
			</p>'
  WHERE l.kurso = 'CG' AND l.numero = 1 AND le.ordo = 5;

-- leçon 1, section 6
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<div class="row noprint">
					<div class="col s12">
						<div class="card-panel blue lighten-5">
						<!-- Pas connecté (visiteur ou invité, #1092) : $persono_id contient aussi l''id d''un invité, on regarde la session -->
						<!--se nekonektita-->
							<p>Vous pouvez faire les exercices dès maintenant, sans compte&nbsp;: vos réponses sont corrigées automatiquement quand c’est possible et gardées dans ce navigateur.</p>
							<div class="row">
								<div class="col s12 m5">
									<p><b>J''ai déjà un compte&nbsp;:</b></p>
									<p>Je me connecte&nbsp;: ce que j’ai fait sans compte est ajouté à mon compte.</p>
									<p><a href="#konektigxi" class="btn waves-effect waves-light waves-light blue modal-trigger" data-target="konektigxi">CONNEXION</a></p>
								</div>
								<div class="col s12 m7">
									<p><b>Je n’ai pas encore de compte&nbsp;:</b></p>
									<p>En créant un compte, vous gardez vos réponses et votre progression sur tous vos appareils, et un correcteur vous aide tout au long du cours.<br>C’est gratuit&nbsp;!</p>
								<p class="center"><a href="#aligxi" class="btn waves-effect waves-light blue modal-trigger" data-target="aligxi">créer un compte</a></p>
								</div>
							</div>
							<p class="noto">Note&nbsp;: sans compte, vous ne bénéficiez pas du suivi d’un correcteur, et vos réponses ne sont gardées que dans ce navigateur.</p>
							<!-- A déjà un compte -->
							<!--alie-->
								<p>Pour bénéficier de notre service de correction, il vous suffit de compléter les exercices. Cliquez ensuite sur le bouton <b>ENREGISTRER MES RÉPONSES</b>.</p>
								<p>Lorsque vous aurez terminé la leçon, vous pourrez demander l’aide d’un correcteur à la fin de la section <b>Épilogue et envoi des exercices</b>. Les exercices seront automatiquement envoyés à votre correcteur quand les administrateurs du cours vous en auront attribué un.</p>
							<!--/se-->
						</div>
					</div>
				</div>

				<p class="parto">Ce premier exercice consiste à traduire quelques phrases simples en espéranto. 
					Ce type d’exercice permet de contrôler si vous avez bien assimilé le vocabulaire et les points grammaticaux vus dans la leçon.
					Lorsque vous traduisez une phrase, vous devez traduire le sens de cette phrase, et non pas les mots un par un&nbsp;:
					une langue n’est pas le calque d’une autre langue.
					Par exemple, vous avez vu que <span class="eo">sana</span> signifie «en bonne santé&nbsp;»&nbsp;: 
					ici, un seul mot en espéranto permet de traduire une expression de 3 mots en français.
				</p>
				
			##EKZERCO:1##'
  WHERE l.kurso = 'CG' AND l.numero = 1 AND le.ordo = 6;

-- leçon 1, section 7
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<p class="parto">Voici quelques expressions pour entamer et finir une discussion. Ces expressions sont à apprendre par cœur dans un premier temps, vous verrez un peu plus tard dans les leçons pourquoi elles se construisent ainsi.</p>
		<fieldset class="vortoj">
			<div class="vortlisto nocol">
				<div class="row">
					<p class="col s6 m4"><a href="fr/son/vortoj/saluton.mp3" class="sm2_button"></a>
						<span class="eo">Saluton!</span></p>
						<p class="col s6 m8">Salut&nbsp;!, Bonjour&nbsp;!</p>
					<p class="col s6 m4"><a href="fr/son/vortoj/bonan-tagon.mp3" class="sm2_button"></a>
						<span class="eo">Bonan tagon!</span></p><p class="col s6 m8">Bonjour&nbsp;!</p>
				</div>
				<div class="row">
					<p class="col s6 m4"><a href="fr/son/vortoj/bonan-matenon.mp3" class="sm2_button"></a>
						<span class="eo">Bonan matenon!</span></p><p class="col s6 m8">Bonjour&nbsp;! (le matin)</p>
					<p class="col s6 m4"><a href="fr/son/vortoj/bonan-vesperon.mp3" class="sm2_button"></a>
						<span class="eo">Bonan vesperon!</span></p><p class="col s6 m8">Bonsoir&nbsp;!</p>
				</div>
				<div class="row">
					<p class="col s6 m4"><a href="fr/son/vortoj/bonan-nokton.mp3" class="sm2_button"></a>
						<span class="eo">Bonan nokton!</span></p><p class="col s6 m8">Bonne nuit&nbsp;!</p>
					<p class="col s6 m4"><a href="fr/son/vortoj/mi-logxas-en.mp3" class="sm2_button"></a>
						<span class="eo">Mi loĝas en…</p><p class="col s6 m8">J’habite à…</p>
				</div>
				<div class="row">
					<p class="col s6 m4"><a href="fr/son/vortoj/mi-sxatas.mp3" class="sm2_button"></a>
						<span class="eo">Mi ŝatas…</span></p><p class="col s6 m8">J’aime… / J''apprécie…</p>
					<p class="col s6 m4"><a href="fr/son/vortoj/dankon.mp3" class="sm2_button"></a>
						<span class="eo">Dankon!</span></p><p class="col s6 m8">Merci&nbsp;!</p>
				</div>
				<div class="row">
					<p class="col s6 m4"><a href="fr/son/vortoj/gxis-revido.mp3" class="sm2_button"></a>
						<span class="eo">Ĝis revido!</span></p><p class="col s6 m8">Au revoir&nbsp;!</p>
					<p class="col s6 m4"><a href="fr/son/vortoj/adiaux.mp3" class="sm2_button"></a>
						<span class="eo">Adiaŭ!</span></p><p class="col s6 m8">Adieu&nbsp;!</p>
				</div>
				<div class="row">
					<p class="col s6 m4"><a href="fr/son/vortoj/bonvolu.mp3" class="sm2_button"></a>
						<span class="eo">Bonvolu…</span></p><p class="col s6 m8">Veuillez… / … s’il vous plaît</p>
					<p class="col s6 m4"><a href="fr/son/vortoj/bonvolu-eniri.mp3" class="sm2_button"></a>
						<span class="eo">Bonvolu eniri.</span></p><p class="col s6 m8">Veuillez entrer. / Entrez, s’il vous plaît.</p>
				</div>
			</div>
		</fieldset>'
  WHERE l.kurso = 'CG' AND l.numero = 1 AND le.ordo = 7;

-- leçon 1, section 8
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<div class="neprintu">
				<p class="parto">En vous aidant des expressions que l’on vient de voir et d’un peu de bon sens, essayez d''attribuer à chacune des personnes de la vidéo son nom, son domicile et sa profession.</p>
				<p>Ne vous attendez pas à comprendre <b>tout</b>, essayez juste de comprendre ce qui vous permettra de répondre au questionnaire. N’hésitez pas à regarder la vidéo plusieurs fois. Au besoin, prenez des notes sur du papier, l’exercice sera d’autant plus utile si vous essayez de répondre sérieusement aux questions. Si vous vous trompez, prenez un peu de temps pour vérifier dans la vidéo la bonne réponse avant d''essayer de donner une autre réponse.</p>
				<p>
				<p>Pour vous aider à mieux comprendre, vous trouverez à la fin de cette page une liste de quelques mots nouveaux.</p>
				<iframe width="560" height="315" src="https://www.youtube.com/embed/pTQEn0-fuQc" frameborder="0" allowfullscreen></iframe>
				</p>


				##QCM:[{"question":"En kiu filmo estas Aleks?","propositions":["filmo 1","filmo 2","filmo 3","filmo 4","filmo 5"],"indices":["","",""],"reponse":2},{"question":"En kiu filmo estas Joanne?","propositions":["filmo 1","filmo 2","filmo 3","filmo 4","filmo 5"],"indices":["","",""],"reponse":1},{"question":"En kiu filmo estas Tran Hoan?","propositions":["filmo 1","filmo 2","filmo 3","filmo 4","filmo 5"],"indices":["","",""],"reponse":4},{"question":"Kiu loĝas en Brazilo?","propositions":["Aleks","Allan","Anna Maria","Joanne","Tran Hoan"],"indices":["","",""],"reponse":2},{"question":"Kiu loĝas en Pollando?","propositions":["Aleks","Allan","Anna Maria","Joanne","Tran Hoan"],"indices":["","",""],"reponse":3},{"question":"Kiu loĝas en Vjetnamio?","propositions":["Aleks","Allan","Anna Maria","Joanne","Tran Hoan"],"indices":["","",""],"reponse":5},{"question":"Kiu estas desegnisto?","propositions":["Aleks","Allan","Anna Maria","Joanne","Tran Hoan"],"indices":["","",""],"reponse":4},{"question":"Kiu estas psikologo?","propositions":["Aleks","Allan","Anna Maria","Joanne","Tran Hoan"],"indices":["","",""],"reponse":3},{"question":"Kiu estas studento?","propositions":["Aleks","Allan","Anna Maria","Joanne","Tran Hoan"],"indices":["","",""],"reponse":2},{"question":"Kie loĝas la instruisto?","propositions":["en Aŭstralio","en Brazilo","en Francujo","en Pollando","en Vjetnamio"],"indices":["","",""],"reponse":3}]##			</div>
			<div class="onlyprint">
				<p class="parto">Cet exercice est basé sur la compréhension d’une vidéo. Si vous souhaitez faire cet exercice, 
					veuillez vous reporter au site internet, à la page https://ikurso.fr/fr/cge/lec01.php?section=8
				</p>
			</div>
			<p>Quelques mots nouveaux utilisés dans cet exercice&nbsp;:</p>
			<div class="vortlisto row">
				<div class="col s12 m4">
					<p><span class="eo">Aŭstralio</span>&nbsp;: Australie</p>
					<p><span class="eo">Brazilo</span>&nbsp;: Brésil</p>
				</div>
				<div class="col s12 m4">
					<p><span class="eo">Vjetnamujo/Vjetnamio</span>&nbsp;: Vietnam</p>
					<p><span class="eo">Pollando</span>&nbsp;: Pologne</p>
				</div>
				<div class="col s12 m4">
					<p><span class="eo">profesio</span>&nbsp;: métier, profession</p>
					<p><span class="eo">desegnisto</span>&nbsp;: dessinateur, dessinatrice</p>
					<p><span class="eo">psikologo</span>&nbsp;: psychologue</p>
				</div>
			</div>'
  WHERE l.kurso = 'CG' AND l.numero = 1 AND le.ordo = 8;

-- leçon 1, section 9
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<p class="parto">Dans l’exercice précédent, vous avez vu comment interroger sur l’identité d’une personne ou d’une chose. On utilise pour cela le mot interrogatif <b>kiu</b>&nbsp;:</p>
			<div class="vortlisto row">
				<p class="col s12 m6"><a href="fr/son/frazoj/kiu-logxas-en-brazilo.mp3" class="sm2_button"></a>
					<span class="eo"><b>Kiu</b> loĝas en Brazilo?</span></p><p class="col s11 m6 offset-s1"><b>Qui</b> habite au Brésil&nbsp;?</p>
				<p class="col s12 m6"><a href="fr/son/frazoj/en-kiu-filmo.mp3" class="sm2_button"></a>
				<span class="eo">En <b>kiu</b> filmo estas Aleks?</span></p><p class="col s11 m5 offset-s1">Dans <b>quel</b> film est Aleks&nbsp;?</p>
			</div>
			
			<p>On traduit généralement <b>kiu</b> par <em>qui</em>, <em>quel(le)</em>, <em>lequel</em> ou <em>laquelle</em>. </p>
				
			<p>Voici quelques autres exemples :</p>
			<div class="row">
				<p class="col s12 m6"><a href="fr/son/frazoj/kiu-estas-la-nova-instruisto.mp3" class="sm2_button"></a><span class="eo"><b>Kiu</b> estas la nova instruisto?<br>&emsp;&emsp;– Estas Marko. Estas mia patro.</span></p><p class="col s11 m6 offset-s1">Qui est le nouvel instituteur&nbsp;?<br>– C’est Marko. C''est mon père.</p>
			</div>
			<div class="row">
				<p class="col s12 m6"><a href="fr/son/frazoj/en-kiu-urbo-logxas-anna-maria.mp3" class="sm2_button"></a><span class="eo">En <b>kiu</b> urbo loĝas Anna Maria?<br>&emsp;&emsp;– Ŝi loĝas en Vroclavo.</span></p><p class="col s11 m6 offset-s1">Dans <b>quelle</b> ville habite Anna Maria&nbsp;?<br>– Elle habite à Wrocław.</p>
			</div>
			<div class="row">
				<p class="col s12 m6"><a href="fr/son/frazoj/parizo-varsovio-kaj-romo.mp3" class="sm2_button"></a><span class="eo">Parizo, Varsovio kaj Romo estas urboj. <b>Kiu</b> estas en Pollando?</span></p><p class="col s11 m6 offset-s1">Paris, Varsovie et Rome sont des villes. <b>Laquelle</b> est en Pologne&nbsp;?</p>
			</div>
			
			<p class="parto"><b>Kiu</b> se met au pluriel (<b>kiuj</b>) si l’on interroge sur plusieurs personnes ou plusieurs choses. Par exemple&nbsp;:</p>
			
			<div class="row">
				<p class="col s12 m6"><a href="fr/son/frazoj/jen-kukoj.mp3" class="sm2_button"></a><span class="eo">Jen kukoj. <b>Kiuj</b> estas bonaj?</span></p><p class="col s11 m6 offset-s1">Voici des gâteaux. <b>Lesquels</b> sont bons&nbsp;?</p>
			</div>
			<div class="row">
				<p class="col s12 m6"><a href="fr/son/frazoj/kiuj-estas-viaj-instruistoj.mp3" class="sm2_button"></a><span class="eo"><b>Kiuj</b> estas viaj instruistoj?<br>&emsp;&emsp;– Marko kaj Petro.</span></p><p class="col s11 m6 offset-s1"><b>Qui</b> sont tes professeurs&nbsp;?<br>– Marko et Petro.</p>
			</div>

			<p class="parto">Dans l’exercice précédent, vous avez également vu comment poser une question pour interroger sur le lieu&nbsp;:</p>
			<div class="vortlisto row">
				<p class="col s12 m6"><a href="fr/son/frazoj/kie-logxas-la-instruisto.mp3" class="sm2_button"></a><span class="eo"><b>Kie</b> loĝas la instruisto?</span></p><p class="col s11 m6 offset-s1"><b>Où</b> habite le professeur&nbsp;?</p>
			</div>
			
			<p>Voici d’autres exemples de questions commençant par <b>kie</b>&nbsp;:</p>
			<div class="row">
				<p class="col s12 m6"><a href="fr/son/frazoj/kie-studas-allan.mp3" class="sm2_button"></a><span class="eo"><b>Kie</b> studas Allan?</span></p><p class="col s11 m6 offset-s1"><b>Où</b> étudie Allan&nbsp;?</p>
			</div>
			<div class="row">
				<p class="col s12 m6"><a href="fr/son/frazoj/kie-estas-chaumont.mp3" class="sm2_button"></a><span class="eo"><b>Kie</b> estas la urbo Chaumont?<br>&emsp;&emsp;– Ĝi estas en Francujo.</span></p><p class="col s11 m6 offset-s1"><b>Où</b> est la ville de Chaumont&nbsp;?<br>– Elle est en France.</p>
			</div>'
  WHERE l.kurso = 'CG' AND l.numero = 1 AND le.ordo = 9;

-- leçon 1, section 10
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##EKZERCO:2##
			##EKZERCO:3##'
  WHERE l.kurso = 'CG' AND l.numero = 1 AND le.ordo = 10;

-- leçon 1, section 11
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<p class="parto">À votre tour&nbsp;! En vous aidant du vocabulaire déjà vu et de la vidéo de l’exercice précédent, essayez de vous présenter à votre correcteur en quelques mots. N’oubliez pas les formules de politesse pour dire bonjour et au revoir. Si vous ne savez pas comment dire en espéranto votre profession, ce sera l’occasion de demander à votre correcteur. Vous devriez être capable de rédiger 4 ou 5 phrases en espéranto.</p>
			<p>Cet exercice ne vous permettra pas uniquement de vérifier que vous avez assimilé le nouveau vocabulaire, mais également de faire connaissance avec le correcteur qui vous sera attribué et qui corrigera vos exercices tout au long de ce cours.</p>
			<p>Aucune utilisation commerciale ne sera faite des informations que vous transmettrez.

			##EKZERCO:4##

						<p class="parto">Voici un peu de vocabulaire qui peut vous aider. Vous n’avez pas besoin de retenir tous ces mots dès maintenant. Ils ne seront utiles que pour cet exercice.</p>
			<div class="vortlisto row">
				<div class="col s12 m6">
					<p><b>Profession</b></p>
					<p><a href="fr/son/vortoj/emerito.mp3" class="sm2_button"></a> <span class="eo">emerito</span>&nbsp;: retraité</p>
					<p><a href="fr/son/vortoj/funkciulo.mp3" class="sm2_button"></a> <span class="eo">funkciulo</span>&nbsp;: fonctionnaire</p>
					<p><a href="fr/son/vortoj/jxurnalisto.mp3" class="sm2_button"></a> <span class="eo">ĵurnalisto</span>&nbsp;: journaliste</p>
					<p><a href="fr/son/vortoj/laboristo.mp3" class="sm2_button"></a> <span class="eo">laboristo</span>&nbsp;: ouvrier, ouvrière</p>
					<p><a href="fr/son/vortoj/komputilisto.mp3" class="sm2_button"></a> <span class="eo">komputilisto</span>&nbsp;: informaticien, informaticienne</p>
					<p><a href="fr/son/vortoj/oficisto.mp3" class="sm2_button"></a> <span class="eo">oficisto</span>&nbsp;: employé, employée</p>
					<p><a href="fr/son/vortoj/senlaborulo.mp3" class="sm2_button"></a> <span class="eo">senlaborulo</span>&nbsp;: chômeur</p>
					<p><b>Pays</b></p>
					<p><a href="fr/son/vortoj/afriko.mp3" class="sm2_button"></a> <span class="eo">Afriko</span>&nbsp;: Afrique</p>
					<p><a href="fr/son/vortoj/belgio.mp3" class="sm2_button"></a> <span class="eo">Belgio</span>&nbsp;: Belgique</p>
					<p><a href="fr/son/vortoj/euxropo.mp3" class="sm2_button"></a> <span class="eo">Eŭropo</span>&nbsp;: Europe</p>
				</div>
				<div class="col s12 m6">
					<p><a href="fr/son/vortoj/francujo.mp3" class="sm2_button"></a> <span class="eo">Francujo</span>&nbsp;: France</p>
					<p><a href="fr/son/vortoj/kanado.mp3" class="sm2_button"></a> <span class="eo">Kanado</span>&nbsp;: Canada</p>
					<p><a href="fr/son/vortoj/parizo.mp3" class="sm2_button"></a> <span class="eo">Parizo</span>&nbsp;: Paris</p>
					<p><a href="fr/son/vortoj/svislando.mp3" class="sm2_button"></a> <span class="eo">Svislando</span>&nbsp;: Suisse</p>
					<p><b>Adjectifs</b></p>
					<p><a href="fr/son/vortoj/donacema.mp3" class="sm2_button"></a> <span class="eo">donacema</span>&nbsp;: généreux</p>
					<p><a href="fr/son/vortoj/felicxa.mp3" class="sm2_button"></a> <span class="eo">feliĉa</span>&nbsp;: heureux</p>
					<p><a href="fr/son/vortoj/juna.mp3" class="sm2_button"></a> <span class="eo">juna</span>&nbsp;: jeune</p>
					<p><a href="fr/son/vortoj/maljuna.mp3" class="sm2_button"></a> <span class="eo">maljuna</span>&nbsp;: vieux</p>
					<p><a href="fr/son/vortoj/scivolema.mp3" class="sm2_button"></a> <span class="eo">scivolema</span>&nbsp;: curieux, qui aime apprendre</p>
					<p><a href="fr/son/vortoj/sportema.mp3" class="sm2_button"></a> <span class="eo">sportema</span>&nbsp;: sportif, qui aime le sport</p>
					<p><a href="fr/son/vortoj/vojagxema.mp3" class="sm2_button"></a> <span class="eo">vojaĝema</span>&nbsp;: voyageur, qui aime voyager</p>
				</div>
				<div class="col s12">
					<br><p><b>Expression utile</b></p>
					<p><a href="fr/son/frazoj/kiel-oni-diras.mp3" class="sm2_button"></a><span class="eo">Kiel oni diras … en Esperanto?</span>&nbsp;: Comment dit-on … en espéranto&nbsp;?</p>
			</div>'
  WHERE l.kurso = 'CG' AND l.numero = 1 AND le.ordo = 11;

-- leçon 1, section 12
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<div class="neprintu">
				<p>
				Dans l’exercice suivant, sélectionnez la réponse exacte en 
				cliquant sur le bouton associé. Attention&nbsp;! L’exercice est très facile (il 
				suffit d’avoir compris le cours), mais ne tentez pas de répondre au hasard, car il 
				y a tout de même 67 108 864 réponses possibles…
				</p>
				##QCM:[{"question":"Combien de syllabes y a-t-il dans «viaj kukoj»&nbsp;?","propositions":["3","4","5","6"],"indices":["","",""],"reponse":2},{"question":"Quelle est la place de l’accent tonique&nbsp;?","propositions":["sur la dernière voyelle","sur l’avant-dernière syllabe","sur la dernière syllabe","sur la première voyelle"],"indices":["","",""],"reponse":2},{"question":"Comment se prononce la lettre «ĝ»&nbsp;?","propositions":["comme le «g» de ''Alger''","comme le «g» de ''Lagos''","comme le «dj» de ''Djibouti''","aucun de ceux-ci"],"indices":["","",""],"reponse":3},{"question":"Comment écrit-on en espéranto le son «ch» du mot français «chat»&nbsp;?","propositions":["ch","ŝ","ce son n’existe pas en espéranto","sch"],"reponse":2},{"question":"Comment écrit-on le son «u» qui apparaît dans «tutu» en français&nbsp;?","propositions":["u","y","il n''existe pas en espéranto","&uuml;"],"reponse":3},{"question":"Quel est le pronom de 3<sup>e</sup> personne féminin singulier&nbsp;?","propositions":["mi","ili","ĝi","ŝi"],"reponse":4},{"question":"Quelle est la terminaison caractéristique de l''infinitif&nbsp;?","propositions":["-i","-is","-ar","-j"],"reponse":1},{"question":"Quelle est la terminaison caractéristique de l’adjectif&nbsp;?","propositions":["-as","-o","-j","-a"],"reponse":4},{"question":"Quelle est la terminaison caractéristique du passé&nbsp;?","propositions":["-i","-j","-a","-is"],"reponse":4},{"question":"Quelle est la terminaison caractéristique du nom&nbsp;?","propositions":["-o","-os","cela dépend du genre","-a"],"reponse":1},{"question":"Comment dit-on «du thé chaud»&nbsp;?","propositions":["la varmo tea","varma teo","varmo teo","la varma teo"],"reponse":2},{"question":"Comment dit-on «de bons garçons»&nbsp;?","propositions":["bona knaboj","la bonaj knaboj","bonaj knaboj","bonoj knaboj"],"reponse":3},{"question":"Comment dit-on «mes fils»&nbsp;?","propositions":["mia filioj","miaj filoj","miaj filioj","mia filoj"],"reponse":2}]##			</div>
			<div class="onlyprint">
				<p>Cette section contient un QCM à faire en ligne sur la page https://ikurso.fr/fr/cge/lec01.php?section=12</p>
			</div>'
  WHERE l.kurso = 'CG' AND l.numero = 1 AND le.ordo = 12;

-- leçon 1, section 13
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<p>Nous espérons que ce premier contact avec
			l’espéranto vous a plu. Vous n’avez peut-être pas tout assimilé mais cela
			viendra petit à petit. Vous pouvez déjà remarquer avec l’exercice
			précédent que vous êtes capable d’exprimer en espéranto des phrases
			simples dont vous maîtrisez parfaitement la grammaire. 
			</p>
			<p>
			Un tel résultat ne pourrait pas être obtenu aussi rapidement s’il
			s’agissait d’apprendre une autre langue&nbsp;! Pensez que
			potentiellement vous savez déjà conjuguer le verbe <i>esti</i> au présent,
			passé et futur de toutes les personnes, que vous connaissez les
			adjectifs possessifs et le pluriel. Avec les mots du
			vocabulaire vous pouvez déjà assembler un tas de phrases suivant les
			modèles&nbsp;:</p>
			<p class="eo container">
			      (la/mia/via...) -a -o estas -a.<br>
			      (la/mia/via...) -a -o estas -a -o.
			</p>
			<p>Donc à bientôt pour la prochaine leçon&nbsp;!</p>

			<div class="card-panel blue lighten-5">
				<p>L’inscription n’est indispensable que si vous désirez faire appel à un correcteur. Cette inscription est gratuite.<!--se nekonektita--> Si vous avez fait les exercices sans compte, ils seront repris dans votre compte quand vous le créerez ou quand vous vous connecterez.<!--/se--></p>
				<p>Votre correcteur est là pour répondre à vos questions sur la langue espéranto, mais aussi sur l''utilisation que l’on peut faire de l’espéranto. N’hésitez pas à vous présenter et faire connaissance. En cas d’absence, n’oubliez pas d’en avertir votre correcteur&nbsp;!</p>
				<p>Bon apprentissage&nbsp;!</p>	
			</div>
		
		<div class=''card-panel blue-grey lighten-5 konsilo''><p><i class=''material-icons left''>lightbulb_outline</i><strong>Conseil&nbsp;:</strong> ce n’est ni un sprint ni un marathon. Pour retenir durablement, mieux vaut étudier 15&nbsp;minutes chaque jour que 2&nbsp;heures une fois par semaine. Choisissez un moment de la journée (au petit déjeuner, dans les transports…) et tenez-vous-y&nbsp;: l’habitude fera le reste. <a href=''helpo.php?section=kurso#konsiloj''>Nos conseils pour apprendre</a></p></div>
##RESUMO##'
  WHERE l.kurso = 'CG' AND l.numero = 1 AND le.ordo = 13;

-- leçon 2, section 1
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<p class="parto">Pour introduire cette leçon, nous vous proposons un petit test. Il vous permettra de réviser ce que vous avez vu dans la leçon 1 et de découvrir un peu de vocabulaire de la leçon 2.</p>
		<div class="onlyprint">
			<p>Cet exercice est un QCM à faire en ligne sur la page https://ikurso.fr/fr/cge/lec02.php</p>
		</div>
		<div class="noprint">
			<p>Retrouvez le texte qui convient à l''image (attention, quelques mots sont à deviner… et seront expliqués dans la leçon 2. Soyez attentif et imaginatif&nbsp;!</p>

		##QCM_BILDOJ:[{"bildo":"fr/cge/bildoj/img-02-01.jpg","url":"http://monde.ccdmd.qc.ca/recherche/?demande=collection&str=Denis%20Chabot","auteur":"Denis Chabot","propositions":["La kafo estas varma","La cafeo estas varma","La kafo estas ĉauda"],"indices":["","attention, la lettre c se prononce ts",""],"reponse":1},{"bildo":"fr/cge/bildoj/img-02-02.jpg","url":"http://monde.ccdmd.qc.ca/recherche/?demande=collection&str=Denis%20Chabot","auteur":"Denis Chabot","propositions":["La biskivtoj estas en pano","La panoj estas en korbo","La paneoj estas sekaj"],"indices":["","",""],"reponse":2},{"bildo":"fr/cge/bildoj/img-02-03.jpg","url":"http://monde.ccdmd.qc.ca/recherche/?demande=collection&str=Katherine%20Lissitsa","auteur":"Katherine Lissitsa","propositions":[" La filo estas kun birdoj","Patro estas kun birdoj","La knabino estas kun birdoj"],"indices":["","",""],"reponse":3},{"bildo":"fr/cge/bildoj/img-02-04.jpg","url":"http://monde.ccdmd.qc.ca/recherche/?demande=collection&str=Denis%20Chabot","auteur":"Denis Chabot","propositions":["La knabo lernas","La patro estas instruisto","La knabo estas sana kaj bona filo"],"indices":["","",""],"reponse":1},{"bildo":"fr/cge/bildoj/img-02-05.jpg","url":"http://monde.ccdmd.qc.ca/recherche/?demande=collection&str=Marcel+Labont%E9","auteur":"Marcel Labonté","propositions":["Bela filo estas mia instruisto","Bela virino estas ilia instruistino","Instruisto estas mia"],"indices":["","",""],"reponse":2}]##		</div>'
  WHERE l.kurso = 'CG' AND l.numero = 2 AND le.ordo = 1;

-- leçon 2, section 2
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<p class="parto">Les <b>noms</b> désignant des êtres vivants sexués peuvent prendre la
		marque du <b>féminin</b>. Pour ce faire on remplace la terminaison
		<b>-o</b> du nom par la terminaison <b>-ino</b> ou, dit autrement, on
		intercale le suffixe <b>-in</b> entre la terminaison et ce qui la précède.</p>
		
		<div class="vortlisto row">
			<p class="col s6"><a href="fr/son/vortoj/viro.mp3" class="sm2_button"></a> <span class="eo">viro</span>&nbsp;: homme (mâle)</p>
			<p class="col s6"><a href="fr/son/vortoj/virino.mp3" class="sm2_button"></a> <span class="eo">vir<b>in</b>o</span>&nbsp;: femme</p>
			<p class="col s6"><a href="fr/son/vortoj/amiko.mp3" class="sm2_button"></a> <span class="eo">amiko</span>&nbsp;: ami</p>
			<p class="col s6"><a href="fr/son/vortoj/amikino.mp3" class="sm2_button"></a> <span class="eo">amik<b>in</b>o</span>&nbsp;: amie</p>
			<p class="col s6"><a href="fr/son/vortoj/filo.mp3" class="sm2_button"></a> <span class="eo">filo</span>&nbsp;: fils</p>
			<p class="col s6"><a href="fr/son/vortoj/filino.mp3" class="sm2_button"></a> <span class="eo">fil<b>in</b>o</span>&nbsp;: fille</p>
		</div>
		
		<p>Lors de la première leçon nous avons vu qu’en espéranto les adjectifs
		s’accordent en nombre avec les noms auxquels ils se rapportent. Par contre, ils ne s’accordent jamais en genre.
		</p>
		<div class="vortlisto row">
			<p class="col s12"><a href="fr/son/vortoj/la-grandaj-viroj.mp3" class="sm2_button"></a> <span class="eo">la grandaj viroj</span>&nbsp;: les grands hommes</p>
			<p class="col s12"><a href="fr/son/vortoj/la-grandaj-virinoj.mp3" class="sm2_button"></a> <span class="eo">la grandaj virinoj</span>&nbsp;: les grandes femmes</p>
		</div>
		
		<fieldset class="vortoj">
			<legend>VOCABULAIRE À RETENIR</legend>
			<div class="noprint">
				
				<p class="eo eta">Ces mots seront automatiquement ajoutés à votre vocabulaire à réviser lorsque vous aurez terminé d''étudier cette section. Le nombre de mots à réviser sera indiqué sur le bouton affiché au-dessus du sommaire.</p>
				
			</div>
			<div class="vortlisto row">
				<p class="col s12 m4"><a href="fr/son/vortoj/virino.mp3" class="sm2_button"></a> <span class="eo">virino</span> : femme</p>
				<p class="col s12 m4"><a href="fr/son/vortoj/amikino.mp3" class="sm2_button"></a> <span class="eo">amikino</span> : amie</p>
				<p class="col s12 m4"><a href="fr/son/vortoj/filino.mp3" class="sm2_button"></a> <span class="eo">filino</span> : fille</p>
			</div>
		</fieldset>'
  WHERE l.kurso = 'CG' AND l.numero = 2 AND le.ordo = 2;

-- leçon 2, section 3
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<p class="parto">Vous avez sûrement déjà entendu parler du complément d’objet direct (ou C.O.D.). Par exemple, dans la phrase&nbsp;:<br>
			&emsp;<b>Elle lit un livre.</b><br>
			si vous posez la question <em>Elle lit <u>quoi</u>&nbsp;?</em>, la réponse est <em>un livre</em>. Ici, <em>un livre</em> est le <b>complément d’objet direct</b>, c’est <b><u>l’objet sur lequel s’applique l’action</u></b>.</p>
			<p>De la même façon, dans la phrase&nbsp;:<br>
			&emsp;<b>Je conduis la voiture de mon père.</b><br>
			<em>la voiture de mon père</em> est le complément d’objet direct. <em>Je conduis <u>quoi</u>&nbsp;? La voiture de mon père</em>.
		</p>
		
		<p class="parto">En espéranto, on utilise la terminaison <b>n</b> pour indiquer le complément d’objet direct&nbsp;: on ajoute alors ce <b>n</b> à la fin des noms, des adjectifs et des pronoms. Par exemple&nbsp;:</p>
			
		<div class="vortlisto row">
			<p class="col s6">
				<a href="fr/son/frazoj/l02-1.mp3" class="sm2_button"></a>
				<span class="eo">Mi sukeras la varma<b>n</b> kafo<b>n</b>.</span></p>
			<p class="col s6">Je sucre le café chaud.</p>
		</div>
		
		<p class="rimarko"><strong>REMARQUE :</strong> 
		Prononcez bien le <b>n</b> final&nbsp;:	<span class="eo">belan</span> rime avec <em>Anne</em> et <span class="eo">libron</span> avec <em>tonne</em>.</p>
		
		<p>Au pluriel, la terminaison <b>n</b> se place après la terminaison <b>j</b> du pluriel&nbsp;: </p>
		<div class="vortlisto row">
			<p class="col s6">
				<a href="fr/son/frazoj/l02-2.mp3" class="sm2_button"></a>
				<span class="eo">Ni sukeras la varmaj<b>n</b> kafoj<b>n</b>.</span></p>
			<p class="col s6">Nous sucrons les cafés chauds.</p>
		</div>

		<p class="parto">En français, il n’y a pas de terminaison pour marquer le complément d’objet direct. C’est l’ordre des mots qui indique le complément d’objet direct, l’ordre normal de la phrase étant SUJET – VERBE – COMPLÉMENT.</p>
		<p> En espéranto, l’ordre des mots est plus libre, et la terminaison <b>n</b> permet alors d’identifier le complément d’objet direct.</p>
		
		<p class="rimarko">C’est le même principe que dans des langues telles que l’allemand, le polonais, le russe ou le latin, pour n’en citer que quelques-unes.</p>
		<p>On parle alors d’<b>accusatif</b>.</p>
		
		<p class="parto">Voici un exemple montrant la souplesse qu’apporte l’utilisation de l’accusatif pour indiquer le complément d’objet direct&nbsp;:</p>
		<div class="row">
			<p class="col s12"><span class="eo">mi vidas li<b>n</b> = li<b>n</b> mi vidas</span>&nbsp;: je le vois</p>
			<p class="col s11 offset-s1">je vois <em>quoi</em>&nbsp;? <em>lui</em> = C.O.D. marqué ici par l’accusatif (-<b>n</b>)</p>
		</div>
		<div class="row">
			<p class="col s12"><span class="eo">mi<b>n</b> li vidas = li vidas mi<b>n</b></span>&nbsp;: il me voit</p>
			<p class="col s11 offset-s1">il voit <em>quoi (ou qui)</em>&nbsp;? <em>me (=moi)</em> = C.O.D. marqué ici par l’accusatif (-<b>n</b>)</p>
		</div>
		
		<p>Vous aurez sûrement remarqué dans ce dernier exemple que le pronom <em>je</em> prend une autre forme lorsqu’il est complément d’objet direct et devient <em>me</em>. Donc même en français, on trouve pour les pronoms des formes différentes selon qu’on les emploie comme sujet ou comme complément d’objet direct. En espéranto, cette forme est régulière&nbsp;: pour les pronoms, comme pour les noms, on ajoute simplement la terminaison <b>n</b> et donc <span class="eo">li</span> devient <span class="eo">li<b>n</b></span> et <span class="eo">mi</span> devient <span class="eo">mi<b>n</b></span>.</p>
		
		<p class="parto"><strong>ATTENTION</strong> : Le verbe <i>être</i> n’a jamais de complément d’objet direct, donc on
		n’utilise pas l’accusatif. On dit donc par exemple&nbsp;:</p>
		<div class="row">
			<p class="col s12"><span class="eo">Mi estas vir<u>o</u>.</span></p>
			<p class="col s12"><span class="eo">Li estas instruist<u>o</u>.</span></p>
		</div>
		
		<p>En effet, le verbe être est un verbe d’état&nbsp;: il «relie», il «décrit» ce qui vient ensuite. Ce qui vient ensuite n’est pas le résultat d’une action comme <em>lire</em> ou <em>conduire</em>, il se contente de décrire ce qui <em>est</em>. Un verbe d’état n’a pas/ne peut pas avoir de complément d’objet direct.</p>
		<p><span class="eo">Li estas instruisto.</span> équivaut à : <span class="eo">Li</span> = <span class="eo">instruisto</span>.</p>
		
		<p>Dans cette phrase, <span class="eo">li</span> est le <b>sujet</b> et <span class="eo">instruisto</span> est l’<b>attribut du sujet</b>.</p>

		<p class="parto">Il existe un petit groupe de verbes d’état, après lesquels on ne met donc pas l’accusatif, par exemple <span class="eo">esti</span> (être), <span class="eo">resti</span> (rester), <span class="eo">ŝajni</span> (sembler), <span class="eo">aspekti</span> (paraître).</p>
		
		<p>Exemples&nbsp;:</p>
		<div class="row">
			<p class="col s12 m6"><span class="eo">La vetero ŝajnas bela.</span>&nbsp;: Le temps semble beau.</p>
			<p class="col s11 offset-s1 m6">→ verbe d’<b>état</b> : ŝajni</p>
			<p class="col s12 m6"><span class="eo">Ŝi aspektas granda.</span>&nbsp;: Elle paraît grande.</p>
			<p class="col s11 offset-s1 m6">→ verbe d’<b>état</b> : aspekti</p>
		</div>

		<p>Notez bien la différence entre&nbsp;:</p>
		<div class="row">
			<p class="col s12 m6"><span class="eo">Ili estas najbaroj.</span>&nbsp;: Ils sont voisins.</p>
			<p class="col s11 offset-s1 m6">→ verbe d’<b>état</b> : esti</p>
		</div>
		<p>et :</p>
		<div class="row">
			<p class="col s12"><span class="eo">Li rigardas la najbaro<b>n</b>.</span>&nbsp;: Il regarde le voisin.</p>
			<p class="col s11 offset-s1">→ verbe d’<b>action</b>&nbsp;: rigardi, donc ici <span class="eo">najbaro</span> est C.O.D. et on le met à l’accusatif.</p>
		</div>
		
		<div class="noprint">
			<h2>C’est à vous&nbsp;!</h2>
			<p class="parto">Pour chaque phrase, indiquez à quel endroit vous mettriez l’accusatif si vous deviez la traduire en espéranto&nbsp;:</p>
			
			##QCM:[{"question":"Il mange du poisson.","propositions":["il","du poisson","il n’y a pas besoin d’accusatif"],"indices":["","",""],"reponse":2},{"question":"Les enfants apprennent leurs leçons.","propositions":["les enfants","leurs leçons","il n’y a pas besoin d’accusatif"],"indices":["","",""],"reponse":2},{"question":"Mon frère est informaticien.","propositions":["mon frère","informaticien","il n’y a pas besoin d’accusatif"],"indices":["","",""],"reponse":3},{"question":"Mes parents mangent les restes d’hier soir.","propositions":["mes parents","les restes","les restes d’hier soir","il n’y a pas besoin d’accusatif"],"indices":["",",","",""],"reponse":3},{"question":"Il promène le chien.","propositions":["il","le chien","il n’y a pas besoin d’accusatif"],"indices":["","",""],"reponse":2},{"question":"Il se promène le matin.","propositions":["il","le matin","il n’y a pas besoin d’accusatif"],"indices":["","",""],"reponse":3}]##		</div>'
  WHERE l.kurso = 'CG' AND l.numero = 2 AND le.ordo = 3;

-- leçon 2, section 4
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<p class="parto">Il existe d’autres compléments, tels que les compléments de temps, de lieu, de manière, etc. Ils sont généralement introduits par une préposition. Dans la première leçon, vous avez déjà vu la préposition <span class="eo">en</span>, qui sert à introduire un complément de lieu.</p>
		<p>Exemples :</p>
		<div class="vortlisto row">
			<p class="col s6"><a href="fr/son/frazoj/aleks-logxas.mp3" class="sm2_button"></a> <span class="eo">Aleks loĝas <b>en</b> Francujo.</span></p>
			<p class="col s6">Alex habite en France.</p>
			<p class="col s6"><a href="fr/son/frazoj/estas-sukero.mp3" class="sm2_button"></a> <span class="eo">Estas sukero <b>en</b> via kafo.</span></p><p class="col s6">Il y a du sucre dans ton café.</p>
		</div>
		
		<p class="rimarko">Notez que <span class="eo">estas</span>, employé sans sujet en début de phrase, comme dans l’exemple précédent, se traduit généralement par <em>il y a</em>. Nous aurons l’occasion d’y revenir dans une autre leçon.</p>
		<p class="parto">Voici quelques autres prépositions permettant d’introduire un complément de lieu&nbsp;:</p>
		
		<table class="retrait striped bordered">
			<tr><td class="eo">antaŭ</td><td>avant, devant</td></tr>
			<tr><td class="eo">sub</td><td>sous, en-dessous de</td></tr>
			<tr><td class="eo">sur</td><td>sur, au-dessus de (avec contact)</td></tr>
			<tr><td class="eo">super</td><td>au-dessus de, par-dessus (sans contact)</td></tr>
		</table>

		<table class="framed centered">
			<tr>
				<td>
					<img class="responsive-img" src="fr/cge/bildoj/birdo-antaux-benko.jpg" alt="L''oiseau est devant le banc">
					<span class="eo">La birdo estas <b>antaŭ</b> la benko.</span>
				</td>
				<td>
					<img class="responsive-img" src="fr/cge/bildoj/birdo-sub-benko.jpg" alt="L''oiseau est sous le banc">
					<span class="eo">La birdo estas <b>sub</b> la benko.</span>
				</td>
			</tr>
			<tr>
				<td>
					<img class="responsive-img" src="fr/cge/bildoj/birdo-sur-benko.jpg" alt="L''oiseau est sur le banc">
					<span class="eo">La birdo estas <b>sur</b> la benko.</span>
				</td>
				<td>
					<img class="responsive-img" src="fr/cge/bildoj/birdo-super-benko.jpg" alt="L''oiseau est au dessus du banc">
					<span class="eo">La birdo estas <b>super</b> la benko.</span>
				</td>
			</tr>
		</table>

		<p>Exemples :</p>
		<div class="vortlisto row">
			<p class="col s6"><a href="fr/son/frazoj/la-pano-estas-sur.mp3" class="sm2_button"></a> <span class="eo">La pano estas <b>sur</b> la tablo.</span></p>
			<p class="col s6">Le pain est sur la table.</p>
			<p class="col s6"><a href="fr/son/frazoj/la-kato-dormas.mp3" class="sm2_button"></a> <span class="eo">La kato dormas <b>sub</b> la tablo.</span></p>
			<p class="col s6">Le chat dort sous la table.</p>
			<p class="col s6"><a href="fr/son/frazoj/ni-vidas-la-sunon.mp3" class="sm2_button"></a> <span class="eo">Ni vidas la sunon <b>super</b> la arboj.</span></p>
			<p class="col s6">Nous voyons le soleil par-dessus les arbres.</p>
			<p class="col s6"><a href="fr/son/frazoj/estas-floroj.mp3" class="sm2_button"></a> <span class="eo">Estas floroj <b>antaŭ</b> la domo.</span></p>
			<p class="col s6">Il y a des fleurs devant la maison.</p>
		</div>'
  WHERE l.kurso = 'CG' AND l.numero = 2 AND le.ordo = 4;

-- leçon 2, section 5
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<div class="row">
			<p class="col s6 m3 center-align"><img class="responsive-img" src="fr/cge/bildoj/birdo-maro.jpg" alt="Une mouette vole au dessus de la mer"><br>-1-</p>
			<p class="col s6 m3 center-align"><img class="responsive-img" src="fr/cge/bildoj/bicikloj-domo.jpg" alt="Des vélos sont posés contre le mur de la maison"><br>-2-</p>
			<p class="col s6 m3 center-align"><img class="responsive-img" src="fr/cge/bildoj/promeni-pluvo.jpg" alt="Trois personnes se promènent avec un parapluie"><br>-3-</span></p>
			<p class="col s6 m3 center-align"><img class="responsive-img" src="fr/cge/bildoj/libroj-tablo.jpg" alt="Une table avec des piles de livres posées dessus."><br>-4-</p>
		</div>
		
			##EKZERCO:5##		
		<fieldset class="vortoj">
			<legend>VOCABULAIRE À RETENIR</legend>
			<div>
				
				<p class="eo eta">Ces mots seront automatiquement ajoutés à votre vocabulaire à réviser lorsque vous aurez terminé cette section. Le nombre de mots à réviser sera indiqué sur le bouton affiché au-dessus du sommaire.</p>
				
			</div>
			<div class="vortlisto row">
				<p class="col s6"><a href="fr/son/vortoj/akvo.mp3" class="sm2_button"></a><span class="eo">akvo</span> : eau</p>
				<p class="col s6"><a href="fr/son/vortoj/arbo.mp3" class="sm2_button"></a><span class="eo">arbo</span> : arbre</p>
				<p class="col s6"><a href="fr/son/vortoj/biciklo.mp3" class="sm2_button"></a><span class="eo">biciklo</span> : vélo</p>
				<p class="col s6"><a href="fr/son/vortoj/birdo.mp3" class="sm2_button"></a><span class="eo">birdo</span> : oiseau</p>
				<p class="col s6"><a href="fr/son/vortoj/domo.mp3" class="sm2_button"></a><span class="eo">domo</span> : maison</p>
				<p class="col s6"><a href="fr/son/vortoj/floro.mp3" class="sm2_button"></a><span class="eo">floro</span> : fleur</p>
				<p class="col s6"><a href="fr/son/vortoj/libro.mp3" class="sm2_button"></a><span class="eo">libro</span> : livre</p>
				<p class="col s6"><a href="fr/son/vortoj/pluvo.mp3" class="sm2_button"></a><span class="eo">pluvo</span> : pluie</p>
				<p class="col s6"><a href="fr/son/vortoj/suno.mp3" class="sm2_button"></a><span class="eo">suno</span> : soleil</p>
				<p class="col s6"><a href="fr/son/vortoj/tablo.mp3" class="sm2_button"></a><span class="eo">tablo</span> : table</p>
				<p class="col s6"><a href="fr/son/vortoj/vidi.mp3" class="sm2_button"></a><span class="eo">vidi</span> : voir</p>
				<p class="col s6"><a href="fr/son/vortoj/promeni.mp3" class="sm2_button"></a><span class="eo">promeni</span> : se promener</p>
				<p class="col s12 m6"><a href="fr/son/vortoj/flugi.mp3" class="sm2_button"></a><span class="eo">flugi</span> : voler (oiseau, avion, etc.)</p>
			</div>
		</fieldset>'
  WHERE l.kurso = 'CG' AND l.numero = 2 AND le.ordo = 5;

-- leçon 2, section 6
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<p class="parto">Le suffixe <b>-in</b> vous a déjà permis d’augmenter votre vocabulaire en
		doublant le nombre d’êtres vivants sexués que vous êtes capable de nommer.
		Quand vous saurez dire <em>cheval</em>, <em>bélier</em>, <em>souris mâle</em>,
		<em>acteur</em>, etc. vous saurez également dire <em>jument</em>,
		<em>brebis</em>, <em>souris femelle</em>, <em>actrice</em>, etc. </p>
		
		<p class="parto">Le préfixe <b>mal-</b> fera de même en vous permettant de connaître le
		contraire des mots auxquels il s’accole. Quand vous aurez assimilé
		<em>aimer</em>, <em>beau</em>, <em>gauche</em>, <em>vrai</em>, etc. vous saurez
		dire aussi <em>détester</em>, <em>laid</em>, <em>droite</em>, <em>faux</em>, etc.</p>

		<div class="vortlisto row">
			<p class="col s6"><a href="fr/son/vortoj/amiko.mp3" class="sm2_button"></a> <span class="eo">amiko</span>&nbsp;: ami</p>
			<p class="col s6"><a href="fr/son/vortoj/malamiko.mp3" class="sm2_button"></a> <span class="eo">malamiko</span>&nbsp;: ennemi</p>
			<p class="col s6"><a href="fr/son/vortoj/bela.mp3" class="sm2_button"></a> <span class="eo">bela</span>&nbsp;: beau, belle</p>
			<p class="col s6"><a href="fr/son/vortoj/malbela.mp3" class="sm2_button"></a> <span class="eo">malbela</span>&nbsp;: laid(e)</p>
			<p class="col s6"><a href="fr/son/vortoj/nova.mp3" class="sm2_button"></a> <span class="eo">nova</span>&nbsp;: nouveau, nouvelle</p>
			<p class="col s6"><a href="fr/son/vortoj/malnova.mp3" class="sm2_button"></a> <span class="eo">malnova</span>&nbsp;: ancien(ne), vieux, vieille</p>
		</div>
	
		<fieldset class="vortoj">
			<legend>VOCABULAIRE À RETENIR</legend>
			<div>
				
				<p class="eo eta">Ces mots seront automatiquement ajoutés à votre vocabulaire à réviser lorsque vous aurez terminé d''étudier cette section. Le nombre de mots à réviser sera indiqué sur le bouton affiché au-dessus du sommaire.</p>
				
			</div>
			<div class="vortlisto row">
				<p class="col s12 m6"><a href="fr/son/vortoj/malamiko.mp3" class="sm2_button"></a> <span class="eo">malamiko</span> : ennemi</p>
				<p class="col s12 m6"><a href="fr/son/vortoj/malbela.mp3" class="sm2_button"></a> <span class="eo">malbela</span> : laid(e)</p>
				<p class="col s12 m6"><a href="fr/son/vortoj/malnova.mp3" class="sm2_button"></a> <span class="eo">malnova</span> : ancien(ne), vieux, vieille</p>
			</div>
		</fieldset>'
  WHERE l.kurso = 'CG' AND l.numero = 2 AND le.ordo = 6;

-- leçon 2, section 7
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<p class="parto">Pour mettre une phrase à la <b>forme négative</b> il suffit d’ajouter le mot
		<b>ne</b> avant le verbe.</p>
		
		<div class="row">
			<p class="col s6"><a href="fr/son/frazoj/l02-3.mp3" class="sm2_button"></a>
				<span class="eo">Mi <b>ne</b> sukeras la kafon.</span></p>
			<p class="col s6">Je <b>ne</b> sucre <b>pas</b> le café.</p>
		</div>

		<p class="rimarko"><strong>REMARQUE</strong>&nbsp;: 
		Prononcez bien <span class="eo">ne</span> entre <em>né</em> et <em>nè</em>.
		</p>
		
		<p class="parto">D''autres mots peuvent aussi être utilisés pour donner un sens négatif à la phrase. En voici quelques-uns&nbsp;:</p>
		
		<div class="vortlisto row">
			<p class="col s6 m3"><span class="eo">neniam</span>&nbsp;: jamais</p>
			<p class="col s6 m3"><span class="eo">neniu</span>&nbsp;: personne</p>
			<p class="col s6 m3"><span class="eo">nenio</span>&nbsp;: rien</p>
			<p class="col s6 m3"><span class="eo">nenie</span>&nbsp;: nulle part</p>
			<hr>
			<p class="col s12 m6"><a href="fr/son/frazoj/mi-neniam-sukeras.mp3" class="sm2_button"></a> <span class="eo">Mi <b>neniam</b> sukeras mian kafon.</span></p><p class="col s11 m6 offset-s1">Je <b>ne</b> sucre <b>jamais</b> mon café.</p>
			<p class="col s12 m6"><a href="fr/son/frazoj/kiu-venis.mp3" class="sm2_button"></a> <span class="eo">Kiu venis? – <b>Neniu</b> venis.</span></p><p class="col s11 m6 offset-s1">Qui est venu ? – <b>Personne</b> n’est venu.</p>
			<p class="col s12 m6"><a href="fr/son/frazoj/kio-estas-en-la-taso.mp3" class="sm2_button"></a> <span class="eo">Kio estas en la taso? – Estas <b>nenio</b>.</span></p><p class="col s11 m6 offset-s1">Qu’y-a-t-il dans la tasse ? – Il n’y a <b>rien</b>.</p>
			<p class="col s12 m6"><a href="fr/son/frazoj/kie-estas-la-kato.mp3" class="sm2_button"></a> <span class="eo">Kie estas la kato? Mi vidas ĝin <b>nenie</b>!</span></p><p class="col s11 m6 offset-s1">Où est le chat ? Je ne le vois <b>nulle part</b>&nbsp;!</p>
		</div>

		<p>Dans les exemples précédents, vous pouvez remarquer que les mots se répondant ont la même terminaison&nbsp;:<br/>
			<span class="eo">ki<u>u</u></span> (qui) / <span class="eo">neni<u>u</u></span> (personne)<br/>
			<span class="eo">ki<u>o</u></span> (quoi, que) / <span class="eo">neni<u>o</u></span> (rien)<br/>
			<span class="eo">ki<u>e</u></span> (où) / <span class="eo">neni<u>e</u></span> (nulle part)
		</p>
		<p>Vous pouvez aussi remarquer que les mots qui ont la même fonction ont le même préfixe : interrogatif <span class="eo">ki-</span> et négatif  <span class="eo">neni-</span>. Vous commencez à avoir l''habitude avec l''espéranto, ce n''est évidemment pas un hasard…</p>

		<h3>Vos premiers corrélatifs</h3>
		<p>Ces petits mots,<span class="eo">kiu</span>, <span class="eo">kie</span>, <span class="eo">neniam</span>, etc. font partie d’un groupe spécifique en espéranto&nbsp;: les <strong>corrélatifs</strong>, ou <span class="eo">tabel-vortoj</span> (de <span class="eo">tabelo</span>&nbsp;: tableau, et <span class="eo">vortoj</span>&nbsp;: mots) car on peut les ranger de manière logique dans un tableau. Ce tableau contient en tout 45 mots&nbsp;; mais pas d''inquiétude, nous vous les présenterons au fur et à mesure des leçons. Vous découvrirez alors comment leur construction sans exception facilite leur apprentissage.
		</p>
		<div class="korelativoj">
			<table class="highlight">
				<thead>
					<tr>
						<th></th>
						<th>Individu<br /><span class="eo">-u</span></th>
						<th>Chose<br /><span class="eo">-o</span></th>
						<th>Lieu<br /><span class="eo">-e</span></th>
						<th>Temps<br /><span class="eo">-am</span></th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th>Interrogatif<br /><span class="eo">ki-</span></th>
						<td><span class="eo">kiu</span><br />qui&nbsp;? quel(le)&nbsp;?<br />lequel, laquelle&nbsp;?</td>
						<td><span class="eo">kio</span><br />que&nbsp;? quoi&nbsp;?</td>
						<td><span class="eo">kie</span><br />où&nbsp;?</td>
						<td><span class="eo">kiam</span><br />quand&nbsp;?</td>
					</tr>
					<tr>
						<th>Négatif<br /><span class="eo">neni-</span></th>
						<td><span class="eo">neniu</span><br />personne, nul, aucun</td>
						<td><span class="eo">nenio</span><br />rien</td>
						<td><span class="eo">nenie</span><br />nulle part</td>
						<td><span class="eo">neniam</span><br />jamais</td>
					</tr>
				</tbody>
			</table>
		</div>
		<p>
			Vous remarquerez que de par leur construction régulière, vous venez par la même occasion d’apprendre à poser un nouveau type de question grâce à <span class="eo">kiam</span>&nbsp;!
		</p>'
  WHERE l.kurso = 'CG' AND l.numero = 2 AND le.ordo = 7;

-- leçon 2, section 8
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<p class="parto">Voici maintenant un peu de vocabulaire.</p>
		
		<p class="eo eta">Ces mots seront automatiquement ajoutés à votre vocabulaire à réviser lorsque vous aurez terminé d''étudier cette section.</p>
		

		<fieldset class="vortoj">
			<div class="vortlisto row">
				<div class="col s12 m4">
					<p><a href="fr/son/vortoj/ami.mp3" class="sm2_button"></a> <span class="eo">ami</span>&nbsp;: aimer</p>
					<p><a href="fr/son/vortoj/fari.mp3" class="sm2_button"></a> <span class="eo">fari</span>&nbsp;: faire</p>
					<p><a href="fr/son/vortoj/forgesi.mp3" class="sm2_button"></a> <span class="eo">forgesi</span>&nbsp;: oublier</p>
					<p><a href="fr/son/vortoj/havi.mp3" class="sm2_button"></a> <span class="eo">havi</span>&nbsp;: avoir</p>
					<p><a href="fr/son/vortoj/kapti.mp3" class="sm2_button"></a> <span class="eo">kapti</span>&nbsp;: attraper</p>
					<p><a href="fr/son/vortoj/lavi.mp3" class="sm2_button"></a> <span class="eo">lavi</span>&nbsp;: laver</p>
					<p><a href="fr/son/vortoj/porti.mp3" class="sm2_button"></a> <span class="eo">porti</span>&nbsp;: porter</p>
					<p><a href="fr/son/vortoj/peti.mp3" class="sm2_button"></a> <span class="eo">peti</span>&nbsp;: demander</p>
				</div>
				<div class="col s12 m4">
					<p><a href="fr/son/vortoj/skribi.mp3" class="sm2_button"></a> <span class="eo">skribi</span>&nbsp;: écrire</p>
					<p><a href="fr/son/vortoj/sukeri.mp3" class="sm2_button"></a> <span class="eo">sukeri</span>&nbsp;: sucrer</p>
					<p><a href="fr/son/vortoj/trinki.mp3" class="sm2_button"></a> <span class="eo">trinki</span>&nbsp;: boire</p>
					<p><a href="fr/son/vortoj/renkonti.mp3" class="sm2_button"></a> <span class="eo">renkonti</span>&nbsp;: rencontrer</p>
					<p><a href="fr/son/vortoj/vendi.mp3" class="sm2_button"></a> <span class="eo">vendi</span>&nbsp;: vendre</p>
					<p><a href="fr/son/vortoj/amo.mp3" class="sm2_button"></a> <span class="eo">amo</span>&nbsp;: amour</p>
					<p><a href="fr/son/vortoj/kato.mp3" class="sm2_button"></a> <span class="eo">kato</span>&nbsp;: chat</p>
				</div>
				<div class="col s12 m4">
					
					<p><a href="fr/son/vortoj/butiko.mp3" class="sm2_button"></a> <span class="eo">butiko</span>&nbsp;: boutique</p>
					<p><a href="fr/son/vortoj/insekto.mp3" class="sm2_button"></a> <span class="eo">insekto</span>&nbsp;: insecte</p>
					<p><a href="fr/son/vortoj/limonado.mp3" class="sm2_button"></a> <span class="eo">limonado</span>&nbsp;: limonade</p>
					<p><a href="fr/son/vortoj/papero.mp3" class="sm2_button"></a> <span class="eo">papero</span>&nbsp;: papier</p>
					<p><a href="fr/son/vortoj/plumo.mp3" class="sm2_button"></a> <span class="eo">plumo</span>&nbsp;: plume</p>
					<p><a href="fr/son/vortoj/taso.mp3" class="sm2_button"></a> <span class="eo">taso</span>&nbsp;: tasse</p>
					<p><a href="fr/son/vortoj/pura.mp3" class="sm2_button"></a> <span class="eo">pura</span>&nbsp;: propre</p>
				</div>
			</div>
		</fieldset>

		<p class="rimarko"><strong>REMARQUE</strong> : 
		N’oubliez pas que vous connaissez aussi les féminins et les contraires
		des mots appris, quand ils sont possibles. Lisez les mots à haute voix
		en vous reportant aux indications de prononciation de la première
		leçon.</p>
		
		<p class="parto">Notez que tous les verbes se conjuguent exactement comme le verbe
		<span class="eo">esti</span> en changeant le <b>-i</b> final pour <b>-as</b> au présent,
		<b>-is</b> au passé et <b>-os</b> au futur. Ces trois temps simples nous
		suffiront pour le moment.</p>
		
		<p class="parto">Dans l’exemple suivant, vous remarquerez que certains petits mots employés en français ne se retrouvent pas en espéranto. Ils sont écrits ici entre crochets.</p>
			<div class="vortlisto row">
				<p class="col s12"><a href="fr/son/frazoj/mi-forgesis-trinki-akvon.mp3" class="sm2_button"></a> <span class="eo">Mi forgesis trinki akvon.</span>&nbsp;: J’ai oublié [de] boire [de l’] eau.</p>
			</div>'
  WHERE l.kurso = 'CG' AND l.numero = 2 AND le.ordo = 8;

-- leçon 2, section 9
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<p class="parto">Voici à nouveau un exercice de traduction. Comme vous l’avez vu dans la leçon précédente,
				ce type d’exercice permet de contrôler si vous avez bien assimilé le vocabulaire et les points grammaticaux vus dans la leçon.
				Avant de commencer à écrire votre réponse, réfléchissez bien au sens de la phrase et évitez de faire du mot à mot. 
				Rappelez-vous&nbsp;: une langue n’est pas le calque d’une autre langue&nbsp;!</p>
			</p>
			##EKZERCO:6##'
  WHERE l.kurso = 'CG' AND l.numero = 2 AND le.ordo = 9;

-- leçon 2, section 10
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##EKZERCO:7##'
  WHERE l.kurso = 'CG' AND l.numero = 2 AND le.ordo = 10;

-- leçon 2, section 11
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##EKZERCO:8##'
  WHERE l.kurso = 'CG' AND l.numero = 2 AND le.ordo = 11;

-- leçon 2, section 12
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<p class="parto">Voici quelques expressions pour demander à quelqu’un comment il va. Apprenez-les par cœur dans un premier temps. Nous les reverrons par la suite.</p>
		
		<p class="eo eta">Ces mots seront automatiquement ajoutés à votre vocabulaire à réviser lorsque vous aurez terminé d''étudier cette section.</p>
		

		<fieldset class="vortoj">
			<legend>EXPRESSIONS À RETENIR</legend>
			<div class="vortlisto row">
				<p class="col s6"><a href="fr/son/frazoj/kiel-vi-fartas.mp3" class="sm2_button"></a> <span class="eo">Kiel vi fartas?</span></p><p class="col s6">Comment allez-vous&nbsp;?</p>
				<p class="col s5 offset-s1"><a href="fr/son/frazoj/bone-kaj-vi.mp3" class="sm2_button"></a> <span class="eo">– Bone. Kaj vi?</span></p><p class="col s6">– Bien. Et vous&nbsp;?</p>
				<p class="col s5 offset-s1"><a href="fr/son/vortoj/bonege.mp3" class="sm2_button"></a> <span class="eo">– Bonege.</span></p><p class="col s6">– Parfaitement bien.</p>
				<p class="col s5 offset-s1"><a href="fr/son/frazoj/suficxe-bone.mp3" class="sm2_button"></a> <span class="eo">– Sufiĉe bone.</span></p><p class="col s6">– Assez bien. (ça va)</p>
				<p class="col s5 offset-s1"><a href="fr/son/frazoj/ne-trop-bone.mp3" class="sm2_button"></a> <span class="eo">– Ne tro bone.</span></p><p class="col s6">– Pas trop bien.</p>
			</div>
		</fieldset>
		
		<p class="parto"><b>Kiel? Tiel!</b></p>
		
		<p>Comme dans l’exemple ci-dessus, <b>kiel</b> permet d’interroger sur la manière d’être ou la manière de faire quelque chose. Vous vous souvenez peut-être que dans la leçon précédente (<a href="fr/cge/lec01.php?section=11">section 1.11</a>), nous vous avions présenté cette phrase pour demander comment dire un certain mot en espéranto&nbsp;:<br><span class="eo">Kiel oni diras … en Esperanto?<span>&nbsp;: Comment dit-on … en espéranto&nbsp;?</p>
		
		<p>À une question commençant par <b>kiel</b> on peut répondre par exemple en utilisant <b>tiel</b>.

		<p><b>Kiel</b> peut aussi être utilisé dans une comparaison.</p>
		
		<p>Exemples :</p>
		<div class="vortlisto row">
			<p class="col s6"><a href="fr/son/frazoj/kiel-vi-faras.mp3" class="sm2_button"></a> <span class="eo">Kiel vi faras?</span></p><p class="col s6">Comment faites-vous&nbsp;?</p>
			<p class="col s6"><a href="fr/son/frazoj/tiel.mp3" class="sm2_button"></a> <span class="eo">– Tiel!</span></p><p class="col s6">– Comme ça&nbsp;!</p>
			<p class="col s6"><a href="fr/son/frazoj/tiel-estas.mp3" class="sm2_button"></a> <span class="eo">Tiel estas.</span></p><p class="col s6">C’est ainsi.</p>
			<p class="col s6"><a href="fr/son/frazoj/sxi-skribas.mp3" class="sm2_button"></a> <span class="eo">Ŝi skribas kiel mia patrino.</span></p><p class="col s6">Elle écrit comme ma mère.</p>
		</div>

		<h3>Vous reprendrez bien un peu de corrélatifs ?</h3>
		<p>
			Vous avez peut-être reconnu la forme particulière de <span class="eo">kiel</span>. C’est effectivement une nouvelle famille de corrélatif, pour les questions de manière. Il se trouve que <span class="eo">tiel</span> est également un corrélatif, qui vous introduit le type démonstratif.
		</p>
		<div class="korelativoj">
			<table class="highlight">
				<thead>
					<tr>
						<th></th>
						<th>Individualité<br /><span class="eo">-U</span></th>
						<th>Chose<br /><span class="eo">-O</span></th>
						<th>Lieu<br /><span class="eo">-E</span></th>
						<th>Temps<br /><span class="eo">-AM</span></th>
						<th>Manière<br /><span class="eo">-EL</span></th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th>Interrogatif<br /><span class="eo">KI-</span></th>
						<td><span class="eo">kiu</span><br />qui&nbsp;? quel(le)&nbsp;?<br />lequel, laquelle&nbsp;?</td>
						<td><span class="eo">kio</span><br />que&nbsp;? quoi&nbsp;?</td>
						<td><span class="eo">kie</span><br />où&nbsp;?</td>
						<td><span class="eo">kiam</span><br />quand&nbsp;?</td>
						<td><span class="eo">kiel</span><br />comme, comment&nbsp;?</td>
					</tr>
					<tr>
						<th>Négatif<br /><span class="eo">NENI-</span></th>
						<td><span class="eo">neniu</span><br />personne, nul, aucun</td>
						<td><span class="eo">nenio</span><br />rien</td>
						<td><span class="eo">nenie</span><br />nulle part</td>
						<td><span class="eo">neniam</span><br />jamais</td>
						<td><span class="eo">neniel</span><br />d’aucune manière</td>
					</tr>
					<tr>
						<th>Démonstratif<br /><span class="eo">TI-</span></th>
						<td><span class="eo">tiu</span><br />ce, cet,<br />celui-là, celle-là</td>
						<td><span class="eo">tio</span><br />cela</td>
						<td><span class="eo">tie</span><br />là, là-bas</td>
						<td><span class="eo">tiam</span><br />alors</td>
						<td><span class="eo">tiel</span><br />ainsi</td>
	
					</tr>
				</tbody>
			</table>
		</div>
		<p>
			Petit à petit, ce tableau se remplit et les conversations deviennent de plus en plus riches !
		</p>'
  WHERE l.kurso = 'CG' AND l.numero = 2 AND le.ordo = 12;

-- leçon 2, section 13
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<div class="onlyprint">
		<p>Cette section contient un QCM à faire en ligne sur la page</p>
		<p>https://ikurso.fr/fr/cge/lec02.php?section=13</p>
	</div>
	<div class="noprint">
		<p>Voici un petit exercice de révision. Sélectionnez la réponse exacte en 
		cliquant sur le bouton associé. Si vous ne savez pas quelle réponse donner à une question, n’hésitez pas à relire le cours&nbsp;: toutes les réponses s’y trouvent&nbsp;!</p>
	
	
	
		##QCM:[{"question":"Que signifient respectivement ''mala'', ''malbona'', ''malsana''&nbsp;?","propositions":["mal, mauvais, malade","mauvais, mauvais, malade","contraire, mauvais, malade"],"indices":["","",""],"reponse":3},{"question":"Que signifie ''malbelaj virinoj''&nbsp;?","propositions":["des hommes laids","de belles femmes","des femmes laides"],"indices":["","",""],"reponse":3},{"question":"Quel est le féminin pluriel de ''mia granda amiko''&nbsp;?","propositions":["miaj grandaj amikinoj","mia granda amikinoj","miaj grandinaj amikinoj"],"indices":["","",""],"reponse":1},{"question":"Traduisez ''la boutique est vieille''","propositions":["la butiko estas malbela","la butiko estas malnovan","la butiko estas malnova"],"indices":["","",""],"reponse":3},{"question":"Traduisez ''je ne bois pas d’eau'':","propositions":["mi maltrinkas akvon","mi ne trinkas akvon","mi trinkas ne akvon"],"indices":["","",""],"reponse":2},{"question":"Traduisez ''j’ai oublié la limonade'' :","propositions":["mi petis limonadon","mi havas forgesi la limonadon","mi forgesis la limonadon"],"indices":["","",""],"reponse":3},{"question":"Quel est le complément d’objet direct dans ''mon frère boira de l’eau lundi''&nbsp;?","propositions":["mon frère","de l’eau","lundi"],"indices":["","",""],"reponse":2},{"question":"Quel est le complément d’objet direct dans ''que boira mon frère lundi''&nbsp;?","propositions":["que","mon frère","lundi"],"indices":["","",""],"reponse":1},{"question":"Quelle est la fonction de ''médecin'' dans ''tu seras médecin''&nbsp;?","propositions":["sujet","complément d’objet direct","attribut du sujet"],"indices":["","",""],"reponse":3}]##	</div>'
  WHERE l.kurso = 'CG' AND l.numero = 2 AND le.ordo = 13;

-- leçon 2, section 14
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<p>Résumons-nous.</p>
		<p>Vous avez maintenant appris à former le féminin de tout nom
		d’être vivant et le contraire de tout mot (nom, adjectif, verbe, etc.) pour
		peu que ceux-ci aient un sens. Vous avez constaté que tous les verbes se
		conjuguent comme le verbe <span class="eo">esti</span> que vous connaissiez déjà, et vous
		avez appris la structure <b>-a -o -as -an -on</b> qui vous permet
		d’exprimer l’action d’un sujet sur quelque chose ou quelqu’un d’autre. Pas
		mal, non&nbsp;?
		</p>
		<p>Vous pouvez maintenant envoyer vos exercices à votre correcteur&nbsp;!
		</p>

		
	<div class=''card-panel blue-grey lighten-5 konsilo''><p><i class=''material-icons left''>lightbulb_outline</i><strong>Conseil&nbsp;:</strong> révisez votre vocabulaire quelques minutes par jour. Les mots des leçons sont ajoutés automatiquement à la <a href=''memoriVortojn.php''>révision du vocabulaire</a>, qui vous les repropose au bon moment, à des intervalles de plus en plus longs. <a href=''helpo.php?section=kurso#konsiloj''>Nos conseils pour apprendre</a></p></div>
##RESUMO##'
  WHERE l.kurso = 'CG' AND l.numero = 2 AND le.ordo = 14;

-- leçon 3, section 1
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<p class="parto">Nous avons vu pas mal de choses dans la 2<sup>e</sup> leçon. Voici un tableau qui
				résume une structure de phrase très courante&nbsp;:</p>
				<div class="container">
					<table class="bordered">
						<tr>
							<td>Sujet<br>Adjectif Nom</td>
							<td>Verbe</td>
							<td>Complément d’objet direct<br>Adjectif Nom</td>
						</tr>
						<tr class="eo">
							<td>____-a   ____-o<br>____-aj  ____-oj</td>
							<td>____-is<br>____-as<br>____-os</td>
							<td>____-an   ____-on<br>____-ajn  ____-ojn</td>
						</tr>
						<tr><td>Mia patro</td><td>lavas</td><td>mian fraton.</td></tr>
						<tr><td>Niaj fratinoj</td><td>vidis</td><td>viajn instruistojn.</td></tr>
					</table>
				</div>
			<p class="parto">
			Comme les fonctions de sujet, verbe et complément d’objet sont marquées
			sans ambiguïté par la terminaison, on peut fort bien les intervertir sans
			changer le sens de la phrase. Cette relative liberté de l’ordre des mots
			permet de mettre en valeur certains groupes de mots ou de clarifier le
			sens. Toutefois, dans ce cours, nous nous contenterons le plus souvent de
			l’ordre que nous utilisons le plus souvent en français&nbsp;: sujet, verbe, compléments.
			</p>
			
			<div class="row container">
				<div class="col s6">
					<p><span class="eo">La knabino vidis <b>min</b></span>.</p>
					<p><span class="eo"><b>Min</b> vidis la knabino.</span></p>
					<p><span class="eo"><b>Min</b> la knabino vidis.</span></p>
					<p><span class="eo">…</span></p>
				</div>
				<div class="col s6">= La fille m’a vu.</div>
			</div>

			<p>
			Dans la section suivante, nous vous proposons, à titre d’exercice, deux autres exemples illustrant la façon dont
			on peut modifier l’ordre des mots.</p>
	
		<fieldset class="vortoj">
			<legend>VOCABULAIRE À RETENIR</legend>
			<div>
				
				<p class="eo eta">Ces mots seront automatiquement ajoutés à votre vocabulaire à réviser lorsque vous aurez terminé d''étudier cette section.</p>
				
			</div>
			<div class="vortlisto row">
				<p class="col s12 m4"><a href="fr/son/vortoj/knabino.mp3" class="sm2_button"></a><span class="eo">knabino</span> : fille</p>
				<p class="col s12 m4"><a href="fr/son/vortoj/patrino.mp3" class="sm2_button"></a><span class="eo">patrino</span> : mère</p>
				<p class="col s12 m4"><a href="fr/son/vortoj/fratino.mp3" class="sm2_button"></a><span class="eo">fratino</span> : sœur</p>
			</div>
		</fieldset>'
  WHERE l.kurso = 'CG' AND l.numero = 3 AND le.ordo = 1;

-- leçon 3, section 2
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##EKZERCO:9##'
  WHERE l.kurso = 'CG' AND l.numero = 3 AND le.ordo = 2;

-- leçon 3, section 3
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<p class="parto">Voici maintenant un peu de vocabulaire.</p>
		
		<p >Ces mots seront automatiquement ajoutés à votre vocabulaire à réviser lorsque vous aurez terminé d''étudier cette section.</p>
		
	
		<fieldset class="vortoj">
			<div class="vortlisto row">
				<div class="col s12 m6">
					<h2>Noms</h2>
					<p><span class="eo"><a href="fr/son/vortoj/horo.mp3" class="sm2_button"></a>horo</span>&nbsp;: heure</p>
					<p><span class="eo"><a href="fr/son/vortoj/jaro.mp3" class="sm2_button"></a>jaro<sup>[1]</sup></span>&nbsp;: année</p>
					<p><span class="eo"><a href="fr/son/vortoj/mateno.mp3" class="sm2_button"></a>mateno</span>&nbsp;: matin</p>
					<p><span class="eo"><a href="fr/son/vortoj/minuto.mp3" class="sm2_button"></a>minuto</span>&nbsp;: minute</p>
					<p><span class="eo"><a href="fr/son/vortoj/semajno.mp3" class="sm2_button"></a>semajno</span>&nbsp;: semaine</p>
					<p><span class="eo"><a href="fr/son/vortoj/nokto.mp3" class="sm2_button"></a>nokto</span>&nbsp;: nuit</p>
					<p><span class="eo"><a href="fr/son/vortoj/tago.mp3" class="sm2_button"></a>tago</span>&nbsp;: jour</p>
					<p><span class="eo"><a href="fr/son/vortoj/vespero.mp3" class="sm2_button"></a>vespero</span>&nbsp;: soir, soirée</p>
				</div>
				<div class="col s12 m6">
					<h2>Adjectifs</h2>
					<p><span class="eo"><a href="fr/son/vortoj/blanka.mp3" class="sm2_button"></a>blanka</span>&nbsp;: blanc</p>
					<p><span class="eo"><a href="fr/son/vortoj/blua.mp3" class="sm2_button"></a>blua</span>&nbsp;: bleu</p>
					<p><span class="eo"><a href="fr/son/vortoj/bruna.mp3" class="sm2_button"></a>bruna</span>&nbsp;: brun (marron)</p>
					<p><span class="eo"><a href="fr/son/vortoj/flava.mp3" class="sm2_button"></a>flava</span>&nbsp;: jaune</p>
					<p><span class="eo"><a href="fr/son/vortoj/griza.mp3" class="sm2_button"></a>griza</span>&nbsp;: gris</p>
					<p><span class="eo"><a href="fr/son/vortoj/nigra.mp3" class="sm2_button"></a>nigra</span>&nbsp;: noir</p>
					<p><span class="eo"><a href="fr/son/vortoj/rugxa.mp3" class="sm2_button"></a>ruĝa</span>&nbsp;: rouge</p>
					<p><span class="eo"><a href="fr/son/vortoj/verda.mp3" class="sm2_button"></a>verda</span>&nbsp;: vert</p>
				</div>
				<div class="col s12 m6">
					<h2>Verbes</h2>
					<p><span class="eo"><a href="fr/son/vortoj/atendi.mp3" class="sm2_button"></a>atendi</span>&nbsp;: attendre</p>
					<p><span class="eo"><a href="fr/son/vortoj/demandi.mp3" class="sm2_button"></a>demandi <sup>[2]</sup></span>&nbsp;: demander</p>
					<p><span class="eo"><a href="fr/son/vortoj/fumi.mp3" class="sm2_button"></a>fumi</span>&nbsp;: fumer</p>
					<p><span class="eo"><a href="fr/son/vortoj/kuri.mp3" class="sm2_button"></a>kuri</span>&nbsp;: courir</p>
					<p><span class="eo"><a href="fr/son/vortoj/peti.mp3" class="sm2_button"></a>peti <sup>[3]</sup></span>&nbsp;: demander</p>
					<p><span class="eo"><a href="fr/son/vortoj/promeni.mp3" class="sm2_button"></a>promeni</span>&nbsp;: se promener</p>
					<p><span class="eo"><a href="fr/son/vortoj/respondi.mp3" class="sm2_button"></a>respondi</span>&nbsp;: répondre</p>
					<p><span class="eo"><a href="fr/son/vortoj/soifi.mp3" class="sm2_button"></a>soifi <sup>[4]</sup></span>&nbsp;: avoir soif</p>
					<p><span class="eo"><a href="fr/son/vortoj/vivi.mp3" class="sm2_button"></a>vivi</span>&nbsp;: vivre</p>
				</div>
				<div class="col s12 m6">
					<h2>Adverbe</h2>
					<p><span class="eo"><a href="fr/son/vortoj/nur.mp3" class="sm2_button"></a>nur</span>&nbsp;: seulement</p>
				</div>
			</div>
		</fieldset>
				
		<div class="notoj">
			<p><span class="eo">[1]</span> Rappelez-vous que le <em><span class="eo">j</span></em> est prononcé comme le <em>y</em> dans yoghourt.</p>
			<p><span class="eo">[2]</span> <em><span class="eo">demandi</span></em> : poser une question.</p>
			<p><span class="eo">[3]</span> <em><span class="eo">peti</span></em> : demander pour obtenir quelque chose.</p>
			<p><span class="eo">[4]</span> <em><span class="eo">soifi</span></em> : bien prononcer le <em>o</em> et le <em>i</em> séparément (<span class="eo">so-<u>i</u>-fi</span>).</p>
		</div>'
  WHERE l.kurso = 'CG' AND l.numero = 3 AND le.ordo = 3;

-- leçon 3, section 4
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<p>
		Expression d’une certaine «sagesse populaire» – ce qui n’est pas synonyme
		de vérité absolue –, les proverbes sont surtout de minuscules poèmes avec
		leurs rimes, leurs rythmes et l’originalité de leur syntaxe. Nous en
		introduisons quelques-uns à chaque leçon pour vous familiariser avec leurs
		sonorités.
		</p>
		
		<p><i>Cliquez sur le bouton <a class="sm2_button disabled"></a>pour écouter la phrase&nbsp;: </a></i></p>
		<p><a href="fr/son/frazoj/pv3.mp3" class="sm2_button"></a> <span class="eo">Akvo kura – akvo pura</span><br>
		&emsp;&emsp;De l’eau courante (<i>qui court</i>) [c’est] de l’eau pure (<i>propre</i>)</p>'
  WHERE l.kurso = 'CG' AND l.numero = 3 AND le.ordo = 4;

-- leçon 3, section 5
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<p class="parto">
		Les <b>adverbes</b> jouent un peu le même rôle que les adjectifs, mais au
		lieu de préciser les idées exprimées par des noms, ils précisent les idées
		exprimées par des verbes, des adjectifs, d’autres adverbes ou même des
		phrases entières.  Le plus souvent, ils expriment la manière, la cause, le
		temps ou le lieu.
		</p>
		<p>
		En espéranto, les adverbes se terminent généralement par <b>-e</b> (et c’est
		toujours le cas lorsqu’il s’agit d’un adverbe dérivé d’un autre mot). 
		</p>
		<p>
		Avec cette terminaison vous connaissez maintenant la totalité des
		terminaisons qui marquent la catégorie du mot. L’idée fondamentale exprimée
		par la racine d’un mot peut être utilisée de différentes façons grâce à un
		simple changement de terminaison :
		</p>
	
		<div class="vortlisto row">
			<p class="col s6"><span class="eo">sana</span> = sain, en bonne santé</p>
			<p class="col s6"><span class="eo">Li estas sana.</span></p>
			<p class="col s6"><span class="eo">sano</span> = santé</p>
			<p class="col s6"><span class="eo">Li havas bonan sanon.</span></p>
			<p class="col s6"><span class="eo">sani</span> = être en bonne santé</p>
			<p class="col s6"><span class="eo">Li sanas.</span></p>
			<p class="col s6"><span class="eo">sane</span> = sainement</p>
			<p class="col s6"><span class="eo">Li sane vivas</span> (ou : <span class="ekz">li vivas sane</span>).</p>
		</div>
		
		<p class="parto">
		En général l’adverbe précède le mot qu’il précise. Toutefois, quand
		l’adverbe est employé comme complément d’une phrase, il est fréquent qu’il prenne la
		place usuelle des compléments, après le verbe.
		</p>

		<div class="vortlisto row">
			<p class="col s12">Exemples :
			<p class="col s12 m5"><a href="fr/son/frazoj/insektoj-vivas-nokte.mp3" class="sm2_button"></a> <span class="eo">Insektoj vivas <b>nokte</b>.</span></p>
			<p class="col s12 m7">Les insectes vivent <b>la nuit</b>.</p>
			<p class="col s12 m5"><a href="fr/son/frazoj/li-malbone-skribis.mp3" class="sm2_button"></a> <span class="eo"> Li <b>malbone</b> skribis.</span></p>
			<p class="col s12 m7">Il a <b>mal</b> écrit.</p>
			<p class="col s12 m5"><a href="fr/son/frazoj/sxi-seke-respondis.mp3" class="sm2_button"></a><span class="eo"> Ŝi <b>seke</b> respondis.</span></p>
			<p class="col s12 m7">Elle a répondu <b>sèchement</b>.</p>
			<p class="col s12 m5"><a href="fr/son/frazoj/ni-renkontos-lin-promene.mp3" class="sm2_button"></a> <span class="eo">Ni renkontos lin <b>promene</b>.</span></p>
			<p class="col s12 m7">Nous le rencontrerons <b>lors de la promenade</b>.</p>
			<p class="col s12 m5"><a href="fr/son/frazoj/ni-iros-bicikle.mp3" class="sm2_button"></a> <span class="eo">Ni iros <b>bicikle</b>.</span></p>
			<p class="col s12 m7">Nous irons <b>en vélo</b>.</p>			
		</div>
		
		<fieldset class="vortoj">
			<legend>VOCABULAIRE À RETENIR</legend>
			<div>
				
				<p class="eo eta">Ces mots seront automatiquement ajoutés à votre vocabulaire à réviser lorsque vous aurez terminé d''étudier cette section.</p>
				
			</div>
			<div class="vortlisto row">
				<p class="col s12 m6"><a href="fr/son/vortoj/sano.mp3" class="sm2_button"></a><span class="eo">sano</span> : santé</p>
				<p class="col s12 m6"><a href="fr/son/vortoj/sane.mp3" class="sm2_button"></a><span class="eo">sane</span> : sainement</p>
				<p class="col s12 m6"><a href="fr/son/vortoj/sani.mp3" class="sm2_button"></a><span class="eo">sani</span> : être en bonne santé</p>
			</div>
		</fieldset>'
  WHERE l.kurso = 'CG' AND l.numero = 3 AND le.ordo = 5;

-- leçon 3, section 6
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<p class="parto">
		En espéranto, chaque voyelle (<em>a</em>, <em>e</em>, <em>i</em>, <em>o</em>,
		<em>u</em>) forme une syllabe. Le mot espéranto <span class="eo">sane</span> a donc deux
		syllabes (<em>sa-ne</em>).  Alors qu’en français, le <em>-e</em> final est
		généralement muet (comme, par exemple, dans <em>père</em>), il n’existe rien
		de tel en espéranto.
		</p>
		<p>
		Dans <span class="eo">soifi</span> il y a trois syllabes (<span class="eo">so-i-fi</span>), alors que le
		français <em>soif</em> ne contient qu’une syllabe.
		</p>'
  WHERE l.kurso = 'CG' AND l.numero = 3 AND le.ordo = 6;

-- leçon 3, section 7
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##EKZERCO:10##'
  WHERE l.kurso = 'CG' AND l.numero = 3 AND le.ordo = 7;

-- leçon 3, section 8
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<p class="parto">Les <b>nombres cardinaux</b> n’ont pas de terminaison spéciale et ils restent
		invariables.
		</p>
		<p>
			<audio controls="controls">Votre navigateur ne supporte pas la lecture du fichier audio.
				<source src="fr/son/nombroj.mp3" type="audio/mp3">
			</audio>
		</p>
		
		<fieldset class="vortoj">
			<div class="vortlisto row">
				<div class="col s6 m3">
					<p>0 : <span class="eo">nul</span></p>
					<p>1 : <span class="eo">unu</span></p>
					<p>2 : <span class="eo">du</span></p>
					<p>3 : <span class="eo">tri</span></p>
					<p>4 : <span class="eo">kvar</span></p>
					<p>5 : <span class="eo">kvin</span></p>
					<p>6 : <span class="eo">ses</span></p>
					<p>7 : <span class="eo">sep</span></p>
					<p>8 : <span class="eo">ok</span></p>
					<p>9 : <span class="eo">naŭ</span></p>
				</div>
				<div class="col s6 m3">
					<p>10 : <span class="eo">dek</span></p>
					<p>11 : <span class="eo">dek unu</span></p>
					<p>12 : <span class="eo">dek du</span></p>
					<p>13 : <span class="eo">dek tri</span></p>
					<p>14 : <span class="eo">dek kvar</span></p>
					<p>15 : <span class="eo">dek kvin</span></p>
					<p></p>
					<p>20 : <span class="eo">dudek</span></p>
					<p>21 : <span class="eo">dudek unu</span></p>
					<p>22 : <span class="eo">dudek du</span></p>
					<p>23 : <span class="eo">dudek tri</span></p>
				</div>
				<div class="col s6 m3">
					<p>30 : <span class="eo">tridek</span></p>
					<p>31 : <span class="eo">tridek unu</span></p>
					<p>32 : <span class="eo">tridek du</span></p>
					<p></p>
					<p>40 : <span class="eo">kvardek</span></p>
					<p>50 : <span class="eo">kvindek</span></p>
					<p>60 : <span class="eo">sesdek</span></p>
					<p>70 : <span class="eo">sepdek</span></p>
					<p>80 : <span class="eo">okdek</span></p>
					<p>90 : <span class="eo">naŭdek</span></p>
					<p>99 : <span class="eo">naŭdek naŭ</span></p>
				</div>
				<div class="col s6 m3">
					<p>100 : <span class="eo">cent</span></p>
					<p>200 : <span class="eo">ducent</span></p>
					<p>300 : <span class="eo">tricent</span></p>
					<p></p>
					<p>1000 : <span class="eo">mil</span></p>
					<p></p>
					<p>2000 : <span class="eo">du mil</span></p>
					<p>3000 : <span class="eo">tri mil</span></p>
				</div>
			</div>
		</fieldset>
		
		<div class="vortlisto row">
			<p class="col s12 l6">749 : <span class="eo">sepcent kvardek naŭ</span></p>
			<p class="col s12 l6">1&nbsp;998 : <span class="eo">mil naŭcent naŭdek ok</span></p>
			<p class="col s12 l6">1&nbsp;515 : <span class="eo">mil kvincent dek kvin</span></p>
			<p class="col s12 l6">2&nbsp;051 : <span class="eo">du mil kvindek unu</span></p>
			<p class="col s12">52&nbsp;354 : <span class="eo">kvindek du mil tricent kvindek kvar</span></p>
			<p class="col s12">76&nbsp;240 : <span class="eo">sepdek ses mil ducent kvardek</span></p>
		</div>

		<p class="rimarko"><strong>REMARQUES</strong> : </p>
		<ul class="klarigo">
			<li>Le <b>a</b> de <span class="eo">naŭ</span> se prononce comme «ow» anglais dans «cow», «how», «now»,
		ou encore «au» en allemand, espagnol, italien...</li>
			<li>Le mot <span class="eo">dek</span> utilisé pour le chiffre des dizaines se colle au nombre qui le multiplie. Par exemple on écrit en un seul mot <span class="eo">dudek</span> (= 20, c’est-à-dire 2 fois 10) ou <span class="eo">sesdek</span> (= 60, c’est-à-dire 6 fois 10).</li>
			<li>De la même manière, le mot <span class="eo">cent</span> utilisé pour le chiffre des centaines se colle au nombre qui le multiplie. Par exemple on écrit en un seul mot <span class="eo">tricent</span> (= 300, c’est-à-dire 3 fois 100).</li>
		</ul>
		
		<a id="ordinaux" class="scrollspy"></a>
		<p class="parto">Les <b>nombres ordinaux</b> se forment par adjonction de la terminaison
		<em>-a</em> d’adjectif aux nombres cardinaux. Comme tous les adjectifs, ils
		peuvent prendre la marque du pluriel <b>-j</b> et celle du complément <b>-n</b>.
		</p>

		<fieldset class="vortoj">
			<div class="vortlisto row">
				<div class="col s12 m4">
					<p><span class="eo">unua</span>&nbsp;: premier</p>
					<p><span class="eo">dua</span>&nbsp;: deuxième</p>
					<p><span class="eo">tria</span>&nbsp;: troisième</p>
					<p><span class="eo">kvara</span>&nbsp;: quatrième</p>
				</div>
				<div class="col s12 m4">
					<p><span class="eo">dudeka</span>&nbsp;: 20<sup>e</sup></p>
					<p><span class="eo">sepdek-unua</span>&nbsp;: 71<sup>e</sup></p>
					<p><span class="eo">centa</span>&nbsp;: 100<sup>e</sup></p>
					<p><span class="eo">dek-kvara</span>&nbsp;: 14<sup>e</sup></p>
				</div>
				<div class="col s12 m4">
					<p><span class="eo">unue</span>&nbsp;: premièrement</p>
					<p><span class="eo">due</span>&nbsp;: deuxièmement</p>
					<p><span class="eo">trie</span>&nbsp;: troisièmement</p>
					<p><span class="eo">dek-kvare</span>&nbsp;: quatorzièmement</p>
				</div>
			</div>
		</fieldset>

		<p class="rimarko"><strong>REMARQUES</strong> : </p>
		<ul class="klarigo">
			<li>Dans les nombres ordinaux, on sépare généralement les mots par des tirets.</li>
</
			<li>On peut aussi utiliser les chiffres pour écrire les nombres ordinaux. On fait alors généralement suivre les chiffres de <b>-a</b>. Par exemple&nbsp;: <span class="eo">1-a</span>, <span class="eo">20-a</span>, <span class="eo">71-a</span>.</li>
		</ul>
			
		<p class="parto">Pour poser une question et demander <em>combien de…</em>, on utilise l’interrogatif <b>kiom da</b>.</p>

		<p>Exemples :</p>
		<div class="row vortlisto">
			<p class="col s12 m6"><a href="fr/son/frazoj/la-unuaj-knaboj.mp3" class="sm2_button"></a>
				<span class="eo">La <b>unuaj</b> knaboj venas.</span></p>
			<p class="col s12 m6">Les <b>premiers</b> garçons arrivent.</p>

			<p class="col s12 m6"><a href="fr/son/frazoj/kiom-da-plumoj.mp3" class="sm2_button"></a>
				<span class="eo"><b>Kiom da</b> plumoj vi petis?<br>&emsp;&emsp;– Mi petis ses plumojn.</span></p>			
			<p class="col s12 m6"><b>Combien de</b> plumes as-tu demandées&nbsp;?<br>– J’ai demandé six plumes.</p>
			
			<p class="col s12 m6"><a href="fr/son/frazoj/kiom-da-sandvicxoj.mp3" class="sm2_button"></a>
				<span class="eo"><b>Kiom da</b> sandviĉoj vi jam manĝis?<br>&emsp;&emsp;– Ni jam manĝis tri.</span></p>
			<p class="col s12 m6"><b>Combien de</b> sandwichs avez-vous déjà mangés&nbsp;?<br>– Nous [en] avons déjà mangé trois.</p>
			
			<p class="col s12 m6"><a href="fr/son/frazoj/kiom-da-infanoj.mp3" class="sm2_button"></a>
				<span class="eo"><b>Kiom da</b> infanoj estos?<br>&emsp;&emsp;– Estos dek du infanoj.</span></p>
			<p class="col s12 m6"><b>Combien</b> y aura-t-il <b>d’</b>enfants&nbsp;?<br>– Il y aura douze enfants.</p>
		</div>
		
		<p class="rimarko"><strong>REMARQUE</strong> : N’employez <b>jamais</b> l’accusatif après <span class="eo">kiom da</span>.</p>

		<h3>De nouveaux corrélatifs</h3>
		<p>
			Dans la leçon précédente, nous vous avions présenté le début du tableau des corrélatifs, dans lequel nous avions rangé quelques corrélatifs commençant par KI- (interrogatifs) et NENI- (négatifs). Nous pouvons le compléter avec <span class="eo">kiom</span>, le corrélatif interrogatif de quantité, et ainsi ajouter la colonne des corrélatifs terminés par <span class="eo"><b>-om</b></span>&nbsp;:
		</p>
		<div class="korelativoj">
			<table class="highlight">
				<thead>
					<tr>
						<th> </th>
						<th>Individu<br /><span class="eo">-u</span></th>
						<th>Chose<br /><span class="eo">-o</span></th>
						<th>Lieu<br /><span class="eo">-e</span></th>
						<th>Temps<br /><span class="eo">-am</span></th>
						<th>Manière<br /><span class="eo">-el</span></th>
						<th>Quantité<br /><span class="eo">-om</span></th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th>Interrogatif<br /><span class="eo">ki-</span></th>
						<td><span class="eo">kiu</span><br />qui&nbsp;? quel(le)&nbsp;?<br />lequel, laquelle&nbsp;?</td>
						<td><span class="eo">kio</span><br />que&nbsp;? quoi&nbsp;?</td>
						<td><span class="eo">kie</span><br />où&nbsp;?</td>
						<td><span class="eo">kiam</span><br />quand&nbsp;?</td>
						<td><span class="eo">kiel</span><br />comme, comment&nbsp;?</td>
						<td><span class="eo">kiom</span><br />combien&nbsp;?</td>
					</tr>
					<tr>
						<th>Négatif<br /><span class="eo">neni-</span></th>
						<td><span class="eo">neniu</span><br />personne, nul, aucun</td>
						<td><span class="eo">nenio</span><br />rien</td>
						<td><span class="eo">nenie</span><br />nulle&nbsp;part</td>
						<td><span class="eo">neniam</span><br />jamais</td>
						<td><span class="eo">neniel</span><br />d’aucune manière</td>
						<td><span class="eo">neniom</span><br />rien du tout, aucune quantité</td>
					</tr>
				</tbody>
			</table>
		</div>'
  WHERE l.kurso = 'CG' AND l.numero = 3 AND le.ordo = 8;

-- leçon 3, section 9
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##EKZERCO:11##'
  WHERE l.kurso = 'CG' AND l.numero = 3 AND le.ordo = 9;

-- leçon 3, section 10
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<p class="parto">Nous avons vu de nombreux exemples de <b>verbes transitifs</b> :
		<span class="eo">vidi</span>, <span class="eo">trinki</span>, <span class="eo">skribi</span>...
		<p>Il s''agit des verbes qui s''utilisent avec un complément d''objet :</p>

			<div class="container">
				<p><span class="eo">Mi vidas <b>mian patron</b>.</span>&nbsp;: Je vois mon père.</p>
				<p><span class="eo">Mia patro trinkas <b>kafon</b>.</span>&nbsp;: Mon père boit du café.</p>
				<p><span class="eo">Vi skribas <b>libron</b>.</span>&nbsp;: Tu écris un livre.</p>
			</div>

		</p>
		<p class="parto">
		En revanche, on appelle <b>verbe intransitif</b> un verbe qui n’exprime pas une action
		venant d’un sujet vers un complément d’objet&nbsp;; parfois un tel verbe décrit
		simplement l’état du sujet. Ex.: <em>vivi</em>, <em>promeni</em>, <em>kuri</em>,
		<em>esti</em>, <em>sani</em>...
		</p>
		<p>
		Quand un verbe intransitif est suivi d’un adjectif ou d’un nom, ce dernier
		n’est pas un complément d’objet direct mais un attribut qui décrit le
		sujet ou une éphitète détachée (2<sup>e</sup> exemple ci-dessous). La terminaison <b>-n</b> de l’accusatif <b>n’est donc jamais
		employée</b> dans ce cas.
		</p>
		<div class="container">
			<p><span class="eo">Li estas sana.</span>&nbsp;: Il est en bonne santé.</p>
			<p><span class="eo">Li promenas soifa.</span>&nbsp;: Il se promène assoiffé.</p>
			<p><span class="eo">Li estas instruisto.</span>&nbsp;: Il est instituteur.</p>
			<p><span class="eo">Ŝia frato estas bela knabo.</span>&nbsp;: Son frère est (un) beau garçon.</p>
		</div>

		<p>À noter que certains verbes intransitifs n’ont pas de sujet du tout. Par exemple :</p>
			<div class="container">
				<p><span class="eo">Pluvas.</span>&nbsp;: Il pleut.</p>
				<p><span class="eo">Sunas.</span>&nbsp;: Il fait beau, il y a du soleil.</p>
			</div>

			<p>Leur équivalent en français utilise le sujet <b>il</b> qui ne se traduit pas en espéranto.</p>'
  WHERE l.kurso = 'CG' AND l.numero = 3 AND le.ordo = 10;

-- leçon 3, section 11
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##EKZERCO:12##'
  WHERE l.kurso = 'CG' AND l.numero = 3 AND le.ordo = 11;

-- leçon 3, section 12
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<p class="parto"><b>Kio</b> permet de demander ce qu’est quelque chose. On peut aussi l’utiliser pour interroger ce qu’est une personne, par exemple ce qu’elle fait dans la vie, quelle est sa position sociale, etc. Il se traduit souvent par <em>que, quoi</em>.</p>
		</p>
		<p>Le pronom <b>tio</b> permet de reprendre ce qui est désigné dans la question. Il se traduit souvent par <em>ce</em>, <em>c’</em> (comme dans <em>c’est</em>), <em>cela</em>, <em>ça</em>.</p>
		
		<p><b>REMARQUE</b> : Si vous souhaitez interroger l’identité de la personne, savoir quel est son nom, vous utilisez le pronom interrogatif <b>kiu</b> que vous avez déjà vu dans la leçon&nbsp;1.</p>

		<p>Exemples :</p>
		<div class="row">
			<p class="col s5 m3"><img class="responsive-img" src="fr/cge/bildoj/img-02-01.jpg" alt="une tasse de café chaud"></p>
			<p class="col s7 m9"><span class="eo"><b>Kio</b> estas tio?<br>– <b>Tio</b> estas kafo.</span></p>
		</div>
		<div class="row">
			<p class="col s5 m3"><img class="responsive-img" src="fr/cge/bildoj/img-02-02.jpg" alt="un panier rempli de baguettes de pain"></p>
			<p class="col s7 m9"><span class="eo">Kaj <b>tio</b>?<br>– <b>Tio</b> estas pano.</span></p>
		</div>
		<div class="row">
			<p class="col s5 m3"><img class="responsive-img" src="fr/cge/bildoj/allan.jpg" alt="Allan, étudiant brésilien."></p>
			<div class="col s6 m9 row">
				<p class="col s12 m6"><span class="eo"><b>Kio</b> estas la viro?<br>– Li estas studento.<br>– Li estas Brazilano.</span></p> 
				<p class="col s12 m6"><span class="eo"><b>Kiu</b> estas la viro?<br>– Li estas Allan.</span></p> 
			</div>
		</div>
		
		<p class="parto">Lorsque <b>kio</b> est complément d’objet direct, il prend la terminaison <b>n</b> de l’accusatif.</p>
		<p>Exemple :</p>
		<div class="row">
			<p class="col s6 m4 offset-m1"><span class="eo">Kio<b>n</b> vi vidas?</span></p><p class="col s6 m7">Que vois-tu&nbsp;?</p>
			<p class="col s6 m4 offset-m1"><span class="eo">– Mi vidas birdo<b>n</b>.</span></p><p class="col s6 m7">– Je vois un oiseau.</p>
		</div>
		
		<p class="parto">Comme <b>kio</b> se réfère à quelque chose d’indéfini, il ne prend <b>jamais</b> la marque du pluriel.
		<br />De même, <b>kio</b> n’est jamais suivi par un nom en -o.</p>
		<p>Exemples :</p>
		<div class="row">
			<p class="col s6 m4 offset-m1"><span class="eo">Ki<b>o</b> estas tio?</span></p><p class="col s6 m7">Qu’est ce que c’est&nbsp;?</p>
			<p class="col s6 m4 offset-m1"><span class="eo">Ki<b>u</b> libr<b>o</b> estas via?</span></p><p class="col s6 m7">Quel livre est le tien&nbsp;?</p>
		</div>

		<h3>Plus aucun corrélatif ne vous échappe&nbsp;!</h3>
		<p>
		Vous avez maintenant l’habitude de ce tableau&nbsp;: nous pouvons y ajouter la ligne des démonstratifs, les corrélatifs commençant par <span class="eo"><b>TI</b>-</span>, tel que <span class="eo">tio</span>, que vous venez de voir. Complétons alors ce tableau&nbsp;:
		</p>
		<div class="korelativoj">
			<table class="highlight">
				<thead>
					<tr>
						<th> </th>
						<th>Individualité<br /><span class="eo">-U</span></th>
						<th>Chose<br /><span class="eo">-O</span></th>
						<th>Lieu<br /><span class="eo">-E</span></th>
						<th>Temps<br /><span class="eo">-AM</span></th>
						<th>Manière<br /><span class="eo">-EL</span></th>
						<th>Quantité<br /><span class="eo">-OM</span></th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th>Interrogatif<br /><span class="eo">KI-</span></th>
						<td><span class="eo">kiu</span><br />qui&nbsp;? quel(le)&nbsp;?<br />lequel, laquelle&nbsp;?</td>
						<td><span class="eo">kio</span><br />que&nbsp;? quoi&nbsp;?</td>
						<td><span class="eo">kie</span><br />où&nbsp;?</td>
						<td><span class="eo">kiam</span><br />quand&nbsp;?</td>
						<td><span class="eo">kiel</span><br />comme, comment&nbsp;?</td>
						<td><span class="eo">kiom</span><br />combien&nbsp;?</td>
					</tr>
					<tr>
						<th>Négatif<br /><span class="eo">NENI-</span></th>
						<td><span class="eo">neniu</span><br />personne, nul, aucun</td>
						<td><span class="eo">nenio</span><br />rien</td>
						<td><span class="eo">nenie</span><br />nulle&nbsp;part</td>
						<td><span class="eo">neniam</span><br />jamais</td>
						<td><span class="eo">neniel</span><br />d’aucune manière</td>
						<td><span class="eo">neniom</span><br />rien du tout, aucune quantité</td>
					</tr>
					<tr>
						<th>Démonstratif<br /><span class="eo">TI-</span></th>
						<td><span class="eo">tiu</span><br />ce, cet,<br />celui-là, celle-là</td>
						<td><span class="eo">tio</span><br />cela</td>
						<td><span class="eo">tie</span><br />là, là-bas</td>
						<td><span class="eo">tiam</span><br />alors</td>
						<td><span class="eo">tiel</span><br />ainsi</td>
						<td><span class="eo">tiom</span><br />tant, autant</td>
					</tr>
				</tbody>
			</table>'
  WHERE l.kurso = 'CG' AND l.numero = 3 AND le.ordo = 12;

-- leçon 3, section 13
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<div class="row">
			<p class="col s6 m3 center-align"><img class="responsive-img" src="fr/cge/bildoj/prof.jpg" alt="Un professeur devant un tableau présente la leçon."><br>-1-</p>	
			<p class="col s6 m3 center-align"><img class="responsive-img" src="fr/cge/bildoj/varsovio.jpg" alt="Une carte de la Pologne avec la ville de Varsovie"><br>-2-</p>
			<p class="col s6 m3 center-align"><img class="responsive-img" src="fr/cge/bildoj/insekto.jpg" alt="Une personne prend une photo d''un insecte"><br>-3-</span></p>
			<p class="col s6 m3 center-align"><img class="responsive-img" src="fr/cge/bildoj/zamenhof.jpg" alt="Une photo en noir et blanc du créateur de l''espéranto : Louis Lazare Zamenhof"><br>-4-</p>
		</div>
		
			##EKZERCO:13##		
		<p>Crédits photos :</p>
		<p class="creditphoto">1. Carte de le Pologne. <a href="https://commons.wikimedia.org/wiki/File%3ARelief_Map_of_Poland.png">By derivative work Виктор_В [CC BY-SA 3.0 (http://creativecommons.org/licenses/by-sa/3.0)], via Wikimedia Commons</a></p>
		<p class="creditphoto">2. <a href="https://commons.wikimedia.org/wiki/File%3ATeaching.png">By uploaded by Xiaphias (USDA Forestry Service website) [Public domain], via Wikimedia Commons</a></p>
		<p class="creditphoto">3. <em>E. Richard, 2016</em></p>
		<p class="creditphoto">4. L. L. Zamenhof <a href="https://commons.wikimedia.org/wiki/File%3A1908-kl-t-zamenhof.jpg">[Public domain], via Wikimedia Commons</a></p>'
  WHERE l.kurso = 'CG' AND l.numero = 3 AND le.ordo = 13;

-- leçon 3, section 14
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<p>Résumons-nous.</p>
			<p>Vous avez maintenant appris à former toutes sortes de
			compléments grâce à la forme d’adverbe en <b>-e</b>. De plus, vous savez
			compter de 1 à 999 999 et pour cela il ne vous a fallu apprendre que...
			12 mots nouveaux. Qui dit mieux&nbsp;?
			</p>
		<div class=''card-panel blue-grey lighten-5 konsilo''><p><i class=''material-icons left''>lightbulb_outline</i><strong>Conseil&nbsp;:</strong> variez les façons de travailler&nbsp;: lisez les phrases à voix haute, réécrivez les mots à la main, faites-vous un tableau des terminaisons… Et pour un mot qui ne veut pas rentrer, cherchez un moyen mnémotechnique. <a href=''helpo.php?section=kurso#konsiloj''>Nos conseils pour apprendre</a></p></div>
##RESUMO##'
  WHERE l.kurso = 'CG' AND l.numero = 3 AND le.ordo = 14;

-- leçon 4, section 1
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<p class="parto">Vous avez déjà vu plusieurs façons de poser des questions&nbsp;:</p>
			<div class="row vortlisto">
				<p class="col s12"><span class="eo"><b>Kiu</b> loĝas en Brazilo?</span>&nbsp;: <b>Qui</b> habite au Brésil&nbsp;?</p>
				<p class="col s12"><span class="eo"><b>Kie</b> estas la kato?</span>&nbsp;: <b>Où</b> est le chat&nbsp;?</p>
				<p class="col s12"><span class="eo"><b>Kiel</b> vi fartas?</span>&nbsp;: <b>Comment</b> allez-vous&nbsp;? / <b>Comment</b> vas-tu&nbsp;?</p>
			</div>
				
			<p class="parto">Jetons maintenant un coup d’œil sur les <b>questions et réponses</b> correspondant à une
			affirmation donnée.</p>
			<div class="row vortlisto">
				<p class="col s2">Énoncé :</p>
				<p class="col s10"><span class="eo">La pano estas bruna.</span> = Le pain est brun.</p>
				<p class="col s2">Question :</p>
				<p class="col s10"><span class="eo"><b>Ĉu</b> la pano estas bruna?</span> = Est-ce que le pain est brun ? (le pain est-il brun ?)</p>
				<p class="col s2">Réponse :</p>
				<p class="col s10"><span class="eo"><b>Jes</b>, la pano estas bruna.</span> = Oui, le pain est brun.</p>
				<p class="col s10 offset-s2">_________   ou   ___________ </p>
				<p class="col s10 offset-s2"><span class="eo"><b>Ne</b>, la pano ne estas bruna, sed (ĝi estas) blanka.</span> = Non, le pain n’est pas brun mais (il est) blanc.</p>
			</div>
			<div class="row vortlisto">
				<p class="col s2">Énoncé :</p>
				<p class="col s10"><span class="eo">Iu venis.</span> = Quelqu’un est venu.</p>
				<p class="col s2">Question :</p>
				<p class="col s10"><span class="eo"><b>Ĉu</b> iu venis?</span> = <b>Est-ce que</b> quelqu’un est venu&nbsp;?</p>
				<p class="col s2">Réponse :</p>
				<p class="col s10"><span class="eo"><b>Jes</b>, mia frato venis.</span> = <b>Oui</b>, mon frère est venu.</p>
				<p class="col s10 offset-s2">_________   ou   ___________ </p>
				<p class="col s10 offset-s2"><span class="eo"><b>Ne</b>, neniu venis.</span> = <b>Non</b>, personne n’est venu.</p>
			</div>
				
			<p>
			Vous aurez remarqué que <span class="eo">ne</span> sert aussi bien en début de phrase que devant
			le verbe. <span class="eo">Jes</span> signifie <i>oui</i> et <span class="eo">sed</span> signifie <i>mais</i>.
			</p>
			<p class="parto">Toute question est construite à partir d’une affirmation. On forme la
			question en plaçant devant l’énoncé le mot interrogatif <span class="eo">ĉu</span> (est-ce
			que ?). Remarquez qu’en espéranto (tout comme en français quand on emploie
			<i>est-ce que ?</i>), on ne modifie pas l’ordre des mots.  On place donc
			simplement le mot <span class="eo">ĉu</span> au début de la phrase.
			</p>
			<div class="row vortlisto">
				<p class="col s4">Question :</p>
				<p class="col s8">Est-ce que les garçons vendront le gâteau ?</p>
				<p class="col s4">Affirmation sous-jacente :</p>
				<p class="col s8">Les garçons vendront le gâteau.<br><span class="eo">La knaboj vendos la kukon.</span></p>
				<p class="col s4">Question en espéranto :</p>
				<p class="col s8"><span class="eo">Ĉu la knaboj vendos la kukon?</span></p>
			</div>
			<p>
			Fonctionnent de cette façon toutes les questions auxquelles on doit
			répondre par <i>oui</i> ou par <i>non</i> (questions «fermées»).
			</p>'
  WHERE l.kurso = 'CG' AND l.numero = 4 AND le.ordo = 1;

-- leçon 4, section 2
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##EKZERCO:14##'
  WHERE l.kurso = 'CG' AND l.numero = 4 AND le.ordo = 2;

-- leçon 4, section 3
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<p class="parto">Dans la première leçon, vous avez vu que l’alphabet de l’espéranto comporte 28 lettres, et que la prononciation de l’espéranto est phonétique. </p>
			
			<p class="parto">Vous allez maintenant faire un exercice de prononciation. Lisez les mots suivants à voix haute en faisant attention à l’accent tonique (indiqué par un soulignement). Votre prononciation s’améliorera petit à petit.</p>
			<p>Les syllabes accentuées sont soulignées et, comme d’habitude, le petit bouton à gauche vous indique la présence d’échantillons sonores associés. Cet exercice est avant tout un exercice de prononciation, aussi il n’est pas nécessaire de chercher à retenir tous ces mots.
			</p>
			<div class="row">
				<p class="col s6"><a href="fr/son/s1-01.mp3" class="sm2_button"></a><b>a</b> (a comme dans <i>patte</i>)</p>
				<p class="col s2 eo"><u>blan</u>ka</p>
				<p class="col s2 eo"><u>sa</u>na</p>
				<p class="col s2 eo"><u>gran</u>da</p>
			</div>
			<div class="row">
				<p class="col s6"><a href="fr/son/s1-02.mp3" class="sm2_button"></a><b>e</b> (è comme dans <i>sec</i>)</p>
				<p class="col s2 eo"><u>be</u>la</p>
				<p class="col s2 eo"><u>ple</u>na</p>
				<p class="col s2 eo"><u>ver</u>da</p>
			</div>
			<div class="row">
				<p class="col s6"><a href="fr/son/s1-03.mp3" class="sm2_button"></a><b>i</b> (i comme dans <i>fini</i>)</p>
				<p class="col s2 eo"><u>vi</u>vi</p>
				<p class="col s2 eo"><u>a</u>mi</p>
				<p class="col s2 eo"><u>trin</u>ki</p>
			</div>
			<div class="row">
				<p class="col s6"><a href="fr/son/s1-04.mp3" class="sm2_button"></a><b>o</b> (o comme dans <i>botte</i>)</p>
				<p class="col s2 eo"><u>o</u>vo</p>
				<p class="col s2 eo"><u>do</u>mo</p>
				<p class="col s2 eo"><u>ki</u>o</p>
			</div>
			<div class="row">
				<p class="col s6"><a href="fr/son/s1-05.mp3" class="sm2_button"></a><b>u</b> (ou comme dans <i>sou</i>)</p>
				<p class="col s2 eo"><u>u</u>nu</p>
				<p class="col s2 eo"><u>plu</u>mo</p>
				<p class="col s2 eo"><u>su</u>no</p>
			</div>
	
			<p class="rimarko"><strong>REMARQUE</strong> : 
			Les voyelles <i>o</i> et <i>e</i> peuvent être prononcées plus ou 
			moins ouvertes du moment qu’il n’y a pas de confusion possible avec les voyelles proches.</p>

			<p class="parto">Les consonnes se prononcent comme en français, sauf :</p>
	
			<div class="row">
				<p class="col s1"><a href="fr/son/s2-01.mp3" class="sm2_button"></a></p>
				<p class="col s5"><b>c</b> (ts comme dans <i>tsigane</i>)</p>
				<p class="col s2 eo">ci<u>ga</u>no</p><p class="col s2 eo"><u>dan</u>ci</p><p class="col s2 eo">bi<u>ci</u>klo</p>
			</div>
			<div class="row">
				<p class="col s1"><a href="fr/son/s2-02.mp3" class="sm2_button"></a></p>
				<p class="col s5"><b>ĉ</b> (tch comme dans <i>tchèque</i>)</p>
				<p class="col s2 eo"><u>ĉe</u>ĥo</p><p class="col s2 eo"><u>ĉam</u>bro</p><p class="col s2 eo">ĉoko<u>la</u>do</p>
			</div>
			<div class="row">
				<p class="col s1"><a href="fr/son/s2-03.mp3" class="sm2_button"></a></p>
				<p class="col s5"><b>g</b> (g comme dans <i>gare</i>)</p>
				<p class="col s2 eo"><u>la</u>go</p><p class="col s2 eo">gus<u>tu</u>mi</p><p class="col s2 eo">geogra<u>fi</u>o</p>
			</div>
			<div class="row">
				<p class="col s1"><a href="fr/son/s2-04.mp3" class="sm2_button"></a></p>
				<p class="col s5"><b>ĝ</b> (dj comme dans <i>Abidjan</i>)</p>
				<p class="col s2 eo"><u>lo</u>ĝi</p><p class="col s2 eo"><u>se</u>ĝo</p><p class="col s2 eo"><u>man</u>ĝi</p>
			</div>
			<div class="row">
				<p class="col s1"><a href="fr/son/s2-05.mp3" class="sm2_button"></a></p>
				<p class="col s5"><b>h</b> (h expiré [note 1])</p>
				<p class="col s2 eo"><u>ha</u>vi</p><p class="col s2 eo"><u>ho</u>ro</p><p class="col s2 eo">lip<u>ha</u>ro</p>
			</div>
			<div class="row">
				<p class="col s1"><a href="fr/son/s2-06.mp3" class="sm2_button"></a></p>
				<p class="col s5"><b>ĥ</b> (hr [note 2])</p>
				<p class="col s2 eo"><u>e</u>ĥo</p><p class="col s2 eo"><u>ĥo</u>ro</p><p class="col s2 eo">ĥe<u>mi</u>o</p>
			</div>
			<div class="row">
				<p class="col s1"><a href="fr/son/s2-07.mp3" class="sm2_button"></a></p>
				<p class="col s5"><b>j</b> (y comme dans <i>yogourt</i>)</p>
				<p class="col s2 eo"><u>jes</u></p><p class="col s2 eo"><u>ja</u>ro</p><p class="col s2 eo"><u>ju</u>na</p>
			</div>
			<div class="row">
				<p class="col s1"><a href="fr/son/s2-08.mp3" class="sm2_button"></a></p>
				<p class="col s5"><b>ĵ</b> (j comme dans <i>journal</i>)</p>
				<p class="col s2 eo">ĵur<u>na</u>lo</p><p class="col s2 eo">ĵa<u>lu</u>za</p><p class="col s2 eo">tea<u>tra</u>ĵo</p>
			</div>
			<div class="row">
				<p class="col s1"><a href="fr/son/s2-09.mp3" class="sm2_button"></a></p>
				<p class="col s5"><b>r</b> (roulé [note 3])</p>
				<p class="col s2 eo">te<u>a</u>tro</p><p class="col s2 eo"><u>ku</u>ri</p><p class="col s2 eo">ri<u>gar</u>di</p>
			</div>
			<div class="row">
				<p class="col s1"><a href="fr/son/s2-10.mp3" class="sm2_button"></a></p>
				<p class="col s5"><b>ŝ</b> (ch comme dans <i>chemise</i>)</p>
				<p class="col s2 eo"><u>ŝa</u>ti</p><p class="col s2 eo"><u>po</u>ŝo</p><p class="col s2 eo"><u>fu</u>ŝa</p>
			</div>
			
			<p class="rimarko"><strong>REMARQUE</strong> : 
			Concernant <span class="eo">ŭ</span>, voir la section suivante sur les diphtongues.</p>
			
			<p class="rimarko"><strong>NOTES</strong> : </p>
			<ol>
			<li><span class="eo">h</span> est <b>toujours</b> expiré comme dans <i>hand</i>,
			  <i>hair</i> anglais ou <i>haben</i>, <i>Haus</i> de l’allemand.</li>
			<li> <span class="eo">ĥ</span> est une sorte de <i>h</i> plus fortement expiré ou de
			  <i>r</i> français fortement grasseyé. Il est proche du <i>ach-laut</i>
			  allemand et des sons qui lui correspondent dans beaucoup d’autres langues
			  (<i>jota</i> espagnole, <i>x</i> russe, <i>h</i> finnois, <i>khi</i>
			  grec, <i>kha</i> arabe, <i>khaf</i> hébreu…). Ce son n’existe pas en
			  français mais il s’entend souvent dans des exclamations ou dans des
			  imitations de l’allemand <i>Ach !</i>, <i>Achtung !</i>, etc.</li>
			<li> <span class="eo">r</span> est de préférence roulé comme en espagnol, italien, grec, etc.
			  Si vous ne pouvez pas produire ce son, un <i>r</i> français peut convenir à
			  condition de le distinguer clairement du <i>h</i> et du <i>ĥ</i>.</li>
			</ol>'
  WHERE l.kurso = 'CG' AND l.numero = 4 AND le.ordo = 3;

-- leçon 4, section 4
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<p class="parto">
			Les combinaisons suivantes de voyelles (<b>a</b>, <b>e</b>, <b>o</b>,
			<b>u</b>) et de semi-voyelle <b>j</b> ou <b>ŭ</b> forment un seul son
			complexe qu’on appelle traditionnellement diphtongue. Cependant, si la
			semi-voyelle est suivie par une voyelle, elle appartient à la syllabe
			suivante où elle reprend son rôle de consonne.
			</p>
				
			<div class="row">
				<p class="col s1"><a href="fr/son/s3-01.mp3" class="sm2_button"></a></p>
				<p class="col s5"><b>aj</b> (comme dans <i>ail</i>, <i>aïe</i>)</p>
				<p class="col s2 eo">kaj</p>
				<p class="col s2 eo">se<u>maj</u>no</p>
				<p class="col s2 eo"><u>ma</u>jo</p>
			</div>
			<div class="row">
				<p class="col s1"><a href="fr/son/s3-02.mp3" class="sm2_button"></a></p>
				<p class="col s5"><b>oj</b> (comme dans <i>Tolstoï</i>)</p>
				<p class="col s2 eo"><u>kna</u>boj</p>
				<p class="col s2 eo"><u>koj</u>no</p>
				<p class="col s2 eo">vo<u>ja</u>ĝi</p>
			</div>
			<div class="row">
				<p class="col s1"><a href="fr/son/s3-03.mp3" class="sm2_button"></a></p>
				<p class="col s5"><b>ej</b> (comme dans <i>soleil</i>)</p>
				<p class="col s2 eo">plej</p>
				<p class="col s2 eo"><u>mej</u>lo</p>
				<p class="col s2 eo">ler<u>ne</u>jo</p>
			</div>
			<div class="row">
				<p class="col s1"><a href="fr/son/s3-04.mp3" class="sm2_button"></a></p>
				<p class="col s5"><b>uj</b> (comme dans <i>grenouille</i>)</p>
				<p class="col s2 eo">tuj</p>
				<p class="col s2 eo"><u>ki</u>uj</p>
				<p class="col s2 eo">mo<u>nu</u>jo</p>
			</div>
			<div class="row">
				<p class="col s1"><a href="fr/son/s3-05.mp3" class="sm2_button"></a></p>
				<p class="col s5"><b>aŭ</b> (comme l’anglais <i>now</i>)</p>
				<p class="col s2 eo">naŭ</p>
				<p class="col s2 eo"><u>an</u>taŭ</p>
				<p class="col s2 eo">an<u>ta</u>ŭe</p>
			</div>
			<div class="row">
				<p class="col s1"><a href="fr/son/s3-06.mp3" class="sm2_button"></a></p>
				<p class="col s5"><b>eŭ</b> (è + w anglais)</p>
				<p class="col s2 eo">Eŭ<u>ro</u>po</p>
				<p class="col s2 eo">neŭ<u>tra</u>la</p>
				<p class="col s2 eo">Eŭ<u>kli</u>do</p>
			</div>

			<p class="rimarko"><strong>REMARQUE</strong> : 
			Les combinaisons <span class="eo">ai</span>, <span class="eo">au</span>, <span class="eo">oi</span>, <span class="eo">ou</span>, <span class="eo">ii</span>,
			<span class="eo">iu</span> etc. – qui ne sont pas rares en espéranto – <b>ne sont pas</b>
			des diphtongues, mais bel et bien deux voyelles juxtaposées, formant donc
			deux syllabes&nbsp;:</p>
			<p>
			<a href="fr/son/s3-07.mp3" class="sm2_button"></a> <span class="eo">balai</span> (ba-<u>la</u>-i), <span class="eo">balau</span> (ba-<u>la</u>-u), <span class="eo">neniigi</span> (ne-ni-<u>i</u>-gi), <span class="eo">neniu</span> (ne-<u>ni</u>-u), etc.
			</p>'
  WHERE l.kurso = 'CG' AND l.numero = 4 AND le.ordo = 4;

-- leçon 4, section 5
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<p class="parto">Voici une liste de mots qui représentent les différents sons de l’espéranto. 
			Lisez-les à voix haute en faisant attention à l’accent tonique (indiqué par un soulignement). Votre prononciation s’améliorera petit à petit. 
			</p>
			
			<p class="eo eta"><b>NOTE </b>: Les mots précédés de <span class="marque">•</span> seront automatiquement ajoutés à votre vocabulaire à réviser lorsque vous aurez terminé d''étudier cette section.</p>
			
			
			<fieldset class="vortoj">
				<div class="vortlisto row">
					<div class="col s12 m6">
						<p><a href="fr/son/vortoj/acxeti.mp3" class="sm2_button"></a><span class="marque">•</span> <span class="eo">a<u>ĉe</u>ti</span>&nbsp;: acheter</p>
						<p><a href="fr/son/vortoj/anglujo.mp3" class="sm2_button"></a><span class="marque">•</span> <span class="eo">An<u>glu</u>jo / An<u>gli</u>o</span>&nbsp;: Angleterre</p>
						<p><a href="fr/son/vortoj/anonco.mp3" class="sm2_button"></a>&nbsp;&nbsp;<span class="eo">a<u>non</u>co</span>&nbsp;: annonce</p>
						<p><a href="fr/son/vortoj/antaux.mp3" class="sm2_button"></a>&nbsp;&nbsp;<span class="eo"><u>an</u>taŭ</span>&nbsp;: avant</p>
						<p><a href="fr/son/vortoj/biciklo.mp3" class="sm2_button"></a><span class="marque">•</span> <span class="eo">bi<u>ci</u>klo</span>&nbsp;: bicyclette</p>
						<p><a href="fr/son/vortoj/bildo.mp3" class="sm2_button"></a><span class="marque">•</span> <span class="eo"><u>bil</u>do</span>&nbsp;: image</p>
						<p><a href="fr/son/vortoj/cxambro.mp3" class="sm2_button"></a><span class="marque">•</span> <span class="eo"><u>ĉam</u>bro</span>&nbsp;: pièce</p>
						<p><a href="fr/son/vortoj/cxinio.mp3" class="sm2_button"></a><span class="marque">•</span> <span class="eo">Ĉi<u>ni</u>o</span>&nbsp;: Chine</p>
						<p><a href="fr/son/vortoj/cxokolado.mp3" class="sm2_button"></a><span class="marque">•</span> <span class="eo">ĉoko<u>la</u>do</span>&nbsp;: chocolat</p>
						<p><a href="fr/son/vortoj/danco.mp3" class="sm2_button"></a><span class="marque">•</span> <span class="eo"><u>dan</u>co</span>&nbsp;: danse</p>
						<p><a href="fr/son/vortoj/deziri.mp3" class="sm2_button"></a><span class="marque">•</span> <span class="eo">de<u>zi</u>ri</span>&nbsp;: désirer</p>
						<p><a href="fr/son/vortoj/domo.mp3" class="sm2_button"></a><span class="marque">•</span> <span class="eo"><u>do</u>mo</span>&nbsp;: maison</p>
						<p><a href="fr/son/vortoj/edzo.mp3" class="sm2_button"></a><span class="marque">•</span> <span class="eo"><u>ed</u>zo</span>&nbsp;: époux</p>
						<p><a href="fr/son/vortoj/edzino.mp3" class="sm2_button"></a><span class="marque">•</span> <span class="eo">ed<u>zi</u>no</span>&nbsp;: épouse</p>
						<p><a href="fr/son/vortoj/el.mp3" class="sm2_button"></a><span class="marque">•</span> <span class="eo">el</span>&nbsp;: hors de</p>
						<p><a href="fr/son/vortoj/esperantisto.mp3" class="sm2_button"></a><span class="marque">•</span> <span class="eo">esperan<u>tis</u>to</span>&nbsp;: espérantiste</p>
						<p><a href="fr/son/vortoj/ehxo.mp3" class="sm2_button"></a>&nbsp;&nbsp;<span class="eo"><u>e</u>ĥo</span>&nbsp;: écho</p>
						<p><a href="fr/son/vortoj/euxropo.mp3" class="sm2_button"></a><span class="marque">•</span> <span class="eo">Eŭ<u>ro</u>po</span>&nbsp;: Europe</p>
						<p><a href="fr/son/vortoj/euxklido.mp3" class="sm2_button"></a>&nbsp;&nbsp;<span class="eo">Eŭ<u>kli</u>do</span>&nbsp;: Euclide</p>
						<p><a href="fr/son/vortoj/geografio.mp3" class="sm2_button"></a>&nbsp;&nbsp;<span class="eo">geogra<u>fi</u>o</span>&nbsp;: géographie</p>
						<p><a href="fr/son/vortoj/gustumi.mp3" class="sm2_button"></a><span class="marque">•</span> <span class="eo">gus<u>tu</u>mi</span>&nbsp;: goûter</p>
						<p><a href="fr/son/vortoj/gxardeno.mp3" class="sm2_button"></a><span class="marque">•</span> <span class="eo">ĝar<u>de</u>no</span>&nbsp;: jardin</p>
						<p><a href="fr/son/vortoj/gxojo.mp3" class="sm2_button"></a><span class="marque">•</span> <span class="eo"><u>ĝo</u>jo</span>&nbsp;: joie</p>
						<p><a href="fr/son/vortoj/hxoro.mp3" class="sm2_button"></a>&nbsp;&nbsp;<span class="eo"><u>ĥo</u>ro</span>&nbsp;: chœur</p>
						<p><a href="fr/son/vortoj/infano.mp3" class="sm2_button"></a><span class="marque">•</span> <span class="eo">in<u>fa</u>no</span>&nbsp;: enfant</p>
						<p><a href="fr/son/vortoj/interreto.mp3" class="sm2_button"></a><span class="marque">•</span> <span class="eo">inter<u>re</u>to</span>&nbsp;: internet</p>
						<p><a href="fr/son/vortoj/iu.mp3" class="sm2_button"></a><span class="marque">•</span> <span class="eo">iu</span>&nbsp;: quelqu’un</p>
						<p><a href="fr/son/vortoj/jahxto.mp3" class="sm2_button"></a>&nbsp;&nbsp;<span class="eo"><u>jaĥ</u>to</span>&nbsp;: yacht</p>
					</div>
					<div class="col s12 m6">
						<p><a href="fr/son/vortoj/jam.mp3" class="sm2_button"></a><span class="marque">•</span> <span class="eo">jam</span>&nbsp;: déjà</p>
						<p><a href="fr/son/vortoj/jxaluza.mp3" class="sm2_button"></a><span class="marque">•</span> <span class="eo">ĵa<u>lu</u>za</span>&nbsp;: jaloux</p>
						<p><a href="fr/son/vortoj/jxauxdo.mp3" class="sm2_button"></a><span class="marque">•</span> <span class="eo"><u>ĵaŭ</u>do</span>&nbsp;: jeudi</p>
						<p><a href="fr/son/vortoj/jxurnalo.mp3" class="sm2_button"></a><span class="marque">•</span> <span class="eo">ĵur<u>na</u>lo</span>&nbsp;: journal</p>
						<p><a href="fr/son/vortoj/kaj.mp3" class="sm2_button"></a><span class="marque">•</span> <span class="eo">kaj</span>&nbsp;: et</p>
						<p><a href="fr/son/vortoj/kio.mp3" class="sm2_button"></a><span class="marque">•</span> <span class="eo"><u>ki</u>o</span>&nbsp;: quoi</p>
						<p><a href="fr/son/vortoj/kolekti.mp3" class="sm2_button"></a><span class="marque">•</span> <span class="eo">ko<u>lek</u>ti</span>&nbsp;: collectionner, rassembler</p>
						<p><a href="fr/son/vortoj/komputilo.mp3" class="sm2_button"></a><span class="marque">•</span> <span class="eo">kompu<u>ti</u>lo</span>&nbsp;: ordinateur</p>
						<p><a href="fr/son/vortoj/lando.mp3" class="sm2_button"></a><span class="marque">•</span> <span class="eo"><u>lan</u>do</span>&nbsp;: pays</p>
						<p><a href="fr/son/vortoj/leciono.mp3" class="sm2_button"></a><span class="marque">•</span> <span class="eo">leci<u>o</u>no</span>&nbsp;: leçon</p>
						<p><a href="fr/son/vortoj/lernejo.mp3" class="sm2_button"></a><span class="marque">•</span> <span class="eo">ler<u>ne</u>jo</span>&nbsp;: école</p>
						<p><a href="fr/son/vortoj/libro.mp3" class="sm2_button"></a><span class="marque">•</span> <span class="eo"><u>li</u>bro</span>&nbsp;: livre</p>
						<p><a href="fr/son/vortoj/logxi.mp3" class="sm2_button"></a><span class="marque">•</span> <span class="eo"><u>lo</u>ĝi</span>&nbsp;: habiter</p>
						<p><a href="fr/son/vortoj/majo.mp3" class="sm2_button"></a>&nbsp;&nbsp;<span class="eo"><u>ma</u>jo</span>&nbsp;: mai</p>
						<p><a href="fr/son/vortoj/mangxi.mp3" class="sm2_button"></a><span class="marque">•</span> <span class="eo"><u>man</u>ĝi</span>&nbsp;: manger</p>
						<p><a href="fr/son/vortoj/mejlo.mp3" class="sm2_button"></a>&nbsp;&nbsp;<span class="eo"><u>mej</u>lo</span>&nbsp;: mille (1,8 km)</p>
						<p><a href="fr/son/vortoj/muro.mp3" class="sm2_button"></a>&nbsp;&nbsp;<span class="eo"><u>mu</u>ro</span>&nbsp;: mur</p>
						<p><a href="fr/son/vortoj/monujo.mp3" class="sm2_button"></a>&nbsp;&nbsp;<span class="eo">mo<u>nu</u>jo</span>&nbsp;: porte-monnaie</p>
						<p><a href="fr/son/vortoj/neuxtrala.mp3" class="sm2_button"></a><span class="marque">•</span> <span class="eo">neŭ<u>tra</u>la</span>&nbsp;: neutre</p>
						<p><a href="fr/son/vortoj/ovo.mp3" class="sm2_button"></a><span class="marque">•</span> <span class="eo"><u>o</u>vo</span>&nbsp;: œuf</p>
						<p><a href="fr/son/vortoj/plej.mp3" class="sm2_button"></a><span class="marque">•</span> <span class="eo">plej</span>&nbsp;: plus (superlatif)</p>
						<p><a href="fr/son/vortoj/retmesagxo.mp3" class="sm2_button"></a><span class="marque">•</span> <span class="eo">retme<u>sa</u>ĝo</span>&nbsp;: courriel, e-mail</p>
						<p><a href="fr/son/vortoj/sageto.mp3" class="sm2_button"></a>&nbsp;&nbsp;<span class="eo">sa<u>ge</u>to</span>&nbsp;: fléchette</p>
						<p><a href="fr/son/vortoj/sandvicxo.mp3" class="sm2_button"></a><span class="marque">•</span> <span class="eo">sand<u>vi</u>ĉo</span>&nbsp;: sandwich</p>
						<p><a href="fr/son/vortoj/sporto.mp3" class="sm2_button"></a><span class="marque">•</span> <span class="eo"><u>spor</u>to</span>&nbsp;: sport</p>
						<p><a href="fr/son/vortoj/sxuo.mp3" class="sm2_button"></a><span class="marque">•</span> <span class="eo"><u>ŝu</u>o</span>&nbsp;: chaussure</p>
						<p><a href="fr/son/vortoj/teatrajxo.mp3" class="sm2_button"></a>&nbsp;&nbsp;<span class="eo">tea<u>tra</u>ĵo</span>&nbsp;: pièce de théâtre</p>
						<p><a href="fr/son/vortoj/veni.mp3" class="sm2_button"></a><span class="marque">•</span> <span class="eo"><u>ve</u>ni</span>&nbsp;: venir</p>
						<p><a href="fr/son/vortoj/vojagxi.mp3" class="sm2_button"></a><span class="marque">•</span> <span class="eo">vo<u>ja</u>ĝi</span>&nbsp;: voyager</p>
					</div>
				</div>
			</fieldset>'
  WHERE l.kurso = 'CG' AND l.numero = 4 AND le.ordo = 5;

-- leçon 4, section 6
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<p class="parto">Dans la leçon 2, vous avez vu quelques compléments introduits par des prépositions&nbsp;: <span class="eo">antaŭ</span> (avant, devant), <span class="eo">sub</span> (sous, en-dessous de), <span class="eo">sur</span> (sur, au-dessus de), <span class="eo">super</span> (au-dessus de, par-dessus).</p>
		<p>Voici quelques autres prépositions&nbsp;:</p>
		
		<table class="retrait striped bordered">
			<tr><td class="eo">apud</td><td> - près de, à côté (indique la proximité)</td></tr>
			<tr><td class="eo">ĉe</td><td>- chez, auprès de, tout près de (indique la proximité immédiate)</td></tr>
			<tr><td class="eo">al</td><td>- à, vers (indique le but d’un mouvement ou le bénéficiaire d’une action)</td></tr>
			<tr><td class="eo">de</td><td>indique la possession ou la provenance.</td></tr>
			<tr><td class="eo">el</td><td>indique le mouvement hors d’un lieu, l’origine ou la matière.</td></tr>
		</table>

		<p>Exemples :</p>
		<div class="vortlisto row">
			<p class="col s6"><a href="fr/son/frazoj/prep-01.mp3" class="sm2_button"></a><span class="eo">La butiko estas <b>apud</b> la lernejo.</span></p>
			<p class="col s6">La boutique est à côté de l’école.</p>
			<p class="col s6"><a href="fr/son/frazoj/prep-02.mp3" class="sm2_button"></a><span class="eo">La tablo estas <b>ĉe</b> la muro.</span></p>
			<p class="col s6">La table est tout près du mur, contre le mur.</p>
			<p class="col s6"><a href="fr/son/frazoj/prep-03.mp3" class="sm2_button"></a><span class="eo">Estas biciklo <b>ĉe</b> la domo.</span></p>
			<p class="col s6">Il y a un vélo contre la maison.</p>
			<p class="col s6"><a href="fr/son/frazoj/prep-04.mp3" class="sm2_button"></a><span class="eo">Mia frato iras <b>al</b> Anglio.</span></p>
			<p class="col s6">Mon frère va en Angleterre.</p>
			<p class="col s6"><a href="fr/son/frazoj/prep-05.mp3" class="sm2_button"></a><span class="eo">Ŝi respondis <b>al</b> mi.</span></p>
			<p class="col s6">Elle m’a répondu.</p>
			<p class="col s6"><a href="fr/son/frazoj/prep-06.mp3" class="sm2_button"></a><span class="eo">Mia amiko venas <b>de</b> Pollando.</span></p>
			<p class="col s6">Mon ami vient de Pologne.</p>
			<p class="col s6"><a href="fr/son/frazoj/prep-07.mp3" class="sm2_button"></a><span class="eo">La filo <b>de</b> mia frato manĝas ovon <b>el</b> ĉokolado</span>.</p>
			<p class="col s6">Le fils de mon frère mange un œuf en chocolat.</p>
			<p class="col s6"><a href="fr/son/frazoj/prep-08.mp3" class="sm2_button"></a><span class="eo">Li kuras <b>el</b> la lernejo.</span></p>
			<p class="col s6">Il court hors de l’école, il sort en courant de l’école.</p>
		</div>
		
		
		<fieldset class="vortoj">
			<legend>Retenez bien ces quatre petits mots très fréquents&nbsp;:</legend>
			<ul class="klarigo">
				<li><strong>al</strong> indique le but d’un mouvement (<span class="eo">ŝi kuras al la lernejo</span>) ou le bénéficiaire de l’action (<span class="eo">li respondis al mi</span>).</li>
				<li><strong>de</strong> indique la possession (<span class="eo">la filo de mia frato</span>) ou la provenance (<span class="eo">li venas de la lernejo</span>).</li>
				<li><strong>el</strong> indique le mouvement hors d’un lieu (<span class="eo">li kuras el la lernejo</span>&nbsp;: il court hors de l’école, il sort en courant de l’école), l’origine (<span class="eo">teatraĵo el via lando</span>) ou la matière (<span class="eo">ovo el ĉokolado</span>&nbsp;: un œuf en chocolat).</li>
				<li><strong>kaj</strong> = et</li>
			</ul>
		</fieldset>'
  WHERE l.kurso = 'CG' AND l.numero = 4 AND le.ordo = 6;

-- leçon 4, section 7
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<div class="row">
			<p class="col s6 m3 center-align"><img class="responsive-img" src="fr/cge/bildoj/al-la-lernejo.jpg"><br>-4-</p>
			<p class="col s6 m3 center-align"><img class="responsive-img" src="fr/cge/bildoj/apud-la-fenestro.jpg"><br>-5-</span></p>
			<p class="col s6 m3 center-align"><img class="responsive-img" src="fr/cge/bildoj/cxokoladaj-insektoj.jpg"><br>-6-</p>
			<p class="col s6 m3 center-align"><img class="responsive-img" src="fr/cge/bildoj/paperoj-cxe-la-muro.jpg"><br>-7-</p>
		</div>
		
			##EKZERCO:15##		
		<p>Crédits photos :</p>
		<p class="creditphoto">1. <em>Enfants en route pour l’école</em>. <a href="http://monde.ccdmd.qc.ca/ressource/?id=93435">Youri Thomas</a></p>
		<p class="creditphoto">2, 3, 4. iKurso/ E. Richard</p>'
  WHERE l.kurso = 'CG' AND l.numero = 4 AND le.ordo = 7;

-- leçon 4, section 8
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<p class="parto">Vous avez vu dans la leçon précédente quelques mots de vocabulaire se rapportant à la date&nbsp;: </p>
			<div class="vortlisto row">
				<p class="col s6 m4"><a href="fr/son/vortoj/semajno.mp3" class="sm2_button"></a><span class="eo">semajno</span>&nbsp;: semaine</p>
				<p class="col s6 m4"><a href="fr/son/vortoj/tago.mp3" class="sm2_button"></a><span class="eo">tago</span>&nbsp;: jour</p>
				<p class="col s6 m4"><a href="fr/son/vortoj/jaro.mp3" class="sm2_button"></a><span class="eo">jaro</span>&nbsp;: année</p>
			</div>
			
			<p>Vous avez également appris comment dire les nombres, et vous savez donc déjà dire par exemple en quelle année nous sommes.</p>
			<p>Nous allons maintenant voir comment dire la date complète en espéranto. Cela vous permettra aussi de faire une petite révision des nombres&nbsp;!</p>
				
			
			<p class="eta">Les mots présentés ici seront automatiquement ajoutés à votre vocabulaire à réviser lorsque vous aurez terminé d''étudier cette section.</p>
			
			
			<fieldset class="vortoj">
				<div class="vortlisto row">
					<p class="col s12"><a href="fr/son/vortoj/dato.mp3" class="sm2_button"></a><span class="eo">dato</span>&nbsp;: date</p>
					<p class="col s6 m4"><a href="fr/son/vortoj/hodiaux.mp3" class="sm2_button"></a><span class="eo">hodiaŭ</span>&nbsp;: aujourd’hui</p>
					<p class="col s6 m4"><a href="fr/son/vortoj/morgaux.mp3" class="sm2_button"></a><span class="eo">morgaŭ</span>&nbsp;: demain</p>
					<p class="col s6 m4"><a href="fr/son/vortoj/hieraux.mp3" class="sm2_button"></a><span class="eo">hieraŭ</span>&nbsp;: hier</p>
				</div>
				<br>
				<p>Les jours de la semaine&nbsp;: <a href="fr/son/vortoj/tagoj-de-la-semajno.mp3" class="sm2_button"></a><span class="eo">la tagoj de la semajno</span></p>
				<div class="vortlisto row">
					<div class="col s6">
						<p><a href="fr/son/vortoj/lundo.mp3" class="sm2_button"></a><span class="eo">lundo</span>&nbsp;: lundi</p>
						<p><a href="fr/son/vortoj/mardo.mp3" class="sm2_button"></a><span class="eo">mardo</span>&nbsp;: mardi</p>
						<p><a href="fr/son/vortoj/merkredo.mp3" class="sm2_button"></a><span class="eo">merkredo</span>&nbsp;: mercredi</p>
						<p><a href="fr/son/vortoj/jxauxdo.mp3" class="sm2_button"></a><span class="eo">ĵaŭdo</span>&nbsp;: jeudi</p>
					</div>
					<div class="col s6">
						<p><a href="fr/son/vortoj/vendredo.mp3" class="sm2_button"></a><span class="eo">vendredo</span>&nbsp;: vendredi</p>
						<p><a href="fr/son/vortoj/sabato.mp3" class="sm2_button"></a><span class="eo">sabato</span>&nbsp;: samedi</p>
						<p><a href="fr/son/vortoj/dimancxo.mp3" class="sm2_button"></a><span class="eo">dimanĉo</span>&nbsp;: dimanche</p>
					</div>
				</div>
				<br>
				<p>Les mois de l’année&nbsp;: <a href="fr/son/vortoj/monatoj-de-la-jaro.mp3" class="sm2_button"></a><span class="eo">la monatoj de la jaro</span></p>
				<div class="vortlisto row">
					<div class="col s6">
						<p><a href="fr/son/vortoj/januaro.mp3" class="sm2_button"></a><span class="eo">januaro</span>&nbsp;: janvier</p>
						<p><a href="fr/son/vortoj/februaro.mp3" class="sm2_button"></a><span class="eo">februaro</span>&nbsp;: février</p>
						<p><a href="fr/son/vortoj/marto.mp3" class="sm2_button"></a><span class="eo">marto</span>&nbsp;: mars</p>
						<p><a href="fr/son/vortoj/aprilo.mp3" class="sm2_button"></a><span class="eo">aprilo</span>&nbsp;: avril</p>
						<p><a href="fr/son/vortoj/majo.mp3" class="sm2_button"></a><span class="eo">majo</span>&nbsp;: mai</p>
						<p><a href="fr/son/vortoj/junio.mp3" class="sm2_button"></a><span class="eo">junio</span>&nbsp;: juin</p>
					</div>
					<div class="col s6">
						<p><a href="fr/son/vortoj/julio.mp3" class="sm2_button"></a><span class="eo">julio</span>&nbsp;: juillet</p>
						<p><a href="fr/son/vortoj/auxgusto.mp3" class="sm2_button"></a><span class="eo">aŭgusto</span>&nbsp;: août</p>
						<p><a href="fr/son/vortoj/septembro.mp3" class="sm2_button"></a><span class="eo">septembro</span>&nbsp;: septembre</p>
						<p><a href="fr/son/vortoj/oktobro.mp3" class="sm2_button"></a><span class="eo">oktobro</span>&nbsp;: octobre</p>
						<p><a href="fr/son/vortoj/novembro.mp3" class="sm2_button"></a><span class="eo">novembro</span>&nbsp;: novembre</p>
						<p><a href="fr/son/vortoj/decembro.mp3" class="sm2_button"></a><span class="eo">decembro</span>&nbsp;: décembre</p>
					</div>
				</div>
			</fieldset>
			
			<p class="parto">Exemples :</p>
			<div class="vortlisto row">
				<p class="col s12"><a href="fr/son/frazoj/dato-01.mp3" class="sm2_button"></a><span class="eo">Hodiaŭ estas lundo la dua de aŭgusto.</span>&nbsp;: Aujourd’hui nous sommes le lundi 2 août.</p>
				<p class="col s12"><a href="fr/son/frazoj/dato-02.mp3" class="sm2_button"></a><span class="eo">Morgaŭ estos mardo la tria de aŭgusto.</span>&nbsp;: Demain nous serons le mardi 3 août.</p>
				<p class="col s12"><a href="fr/son/frazoj/dato-03.mp3" class="sm2_button"></a><span class="eo">Hieraŭ estis dimanĉo la unua de aŭgusto.</span>&nbsp;: Hier c’était dimanche 1<sup>er</sup> août.</p>
				<p class="col s12"><a href="fr/son/frazoj/dato-04.mp3" class="sm2_button"></a><span class="eo">En januaro estas tridek unu tagoj.</span>&nbsp;: En janvier il y a 31 jours.</p>
				<p class="col s12"><a href="fr/son/frazoj/dato-05.mp3" class="sm2_button"></a><span class="eo">La unua de Majo estas la Tago de la Laboro.</span>&nbsp;: Le premier mai est la Fête du Travail (littéralement "le Jour du Travail").</p>
			</div>
			
			<p class="parto">Lorsqu’on indique une date précise, on emploie souvent la terminaison <b>n</b> de l’accusatif. Vous verrez par la suite que l’accusatif est employé pour certains compléments, et pas uniquement pour le complément direct.</p>
							
			<div class="vortlisto row">
				<p class="col s12"><a href="fr/son/frazoj/dato-06.mp3" class="sm2_button"></a><span class="eo">Ili venos la deka<b>n</b> de aprilo.</span>&nbsp;: Ils viendront le 10 avril.</p>
				<p class="col s12"><a href="fr/son/frazoj/dato-07.mp3" class="sm2_button"></a><span class="eo">La dua<b>n</b> de julio, mi edziĝos.</span>&nbsp;: Le 2 juillet, je me marierai.</p>
				<p class="col s12"><a href="fr/son/frazoj/dato-08.mp3" class="sm2_button"></a><span class="eo">Parizo, la 15-a<b>n</b> de decembro 2018</span>&nbsp;: Paris, le 15 décembre 2018 (par exemple au début d’une lettre)</p>
			</div>
				
			<p class="parto">On peut utiliser également la forme adverbiale pour les jours et les mois.</p>
			<div class="vortlisto row">
				<p class="col s12"><a href="fr/son/frazoj/dato-09.mp3" class="sm2_button"></a><span class="eo">Dimanĉ<b>e</b> mi ne laboras.</span>&nbsp;: Je ne travaille pas le dimanche.</p>
			</div>
			
			<div class="card-panel blue lighten-5">Cela fait beaucoup de nouvelles choses à mémoriser, mais ne vous tracassez pas trop. Prenez un peu de temps pour assimiler tout ça et n’hésitez pas à revenir relire cette page dans quelques jours. N’oubliez pas de pratiquer régulièrement, par exemple en indiquant la date du jour à votre correcteur quand vous lui enverrez vos prochains exercices.</div>
			
		</section>'
  WHERE l.kurso = 'CG' AND l.numero = 4 AND le.ordo = 8;

-- leçon 4, section 9
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##EKZERCO:16##'
  WHERE l.kurso = 'CG' AND l.numero = 4 AND le.ordo = 9;

-- leçon 4, section 10
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<p class="parto">Les <b>noms propres</b> se terminent en principe par <b>-o</b> comme les noms
			communs, mais ils peuvent aussi parfois garder leur forme et leur
			orthographe d’origine (par exemple <i>Shakespeare</i> ou <span class="eo">Ŝekspiro</span>).
			Par ailleurs, les prénoms de femme en <b>-a</b> sont assez fréquents.</p>
			<p>Lisez les phrases suivantes qui forment de petits récits. Les
			comprenez-vous ?</p>
			<p>Vous noterez que <span class="eo">Simeono</span>, <span class="eo">Petro</span> et <span class="eo">Fatima</span> sont des noms propres de personnes. </p>
			<div class="vortlisto">
				<p>Simeono estas la edzo de Fatima. Li amas ŝin. Li, la edzino kaj la infanoj loĝas en Eŭropo, en granda domo.</p>
				<p>Fatima deziras aĉeti novajn ŝuojn al la infanoj.</p>
				<p>Petro, la filo de Fatima, ŝatas gitari. Maria, lia juna fratino, preferas promeni bicikle.</p>
				<p>Simeono atendas en la butiko. Li jam havas du ovojn, sed li deziras aĉeti sandviĉon. Li manĝos ilin vespere.</p>
			</div>
			<p>Dans l’exercice page suivante, vous allez maintenant traduire ces phrases en français.</p>'
  WHERE l.kurso = 'CG' AND l.numero = 4 AND le.ordo = 10;

-- leçon 4, section 11
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##EKZERCO:17##'
  WHERE l.kurso = 'CG' AND l.numero = 4 AND le.ordo = 11;

-- leçon 4, section 12
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##EKZERCO:18##	
			##EKZERCO:19##'
  WHERE l.kurso = 'CG' AND l.numero = 4 AND le.ordo = 12;

-- leçon 4, section 13
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<div class="row">
			<div class="col s12 m6">
				<p class="parto">L’espéranto est chanté depuis sa naissance, puisque Louis Lazare Zamenhof avait déjà écrit les paroles d’un hymne, <i>La Espero</i>, souvent entonné lors des grandes rencontres espérantistes.</p>
			</div>
			<div class="col s10 offset-s1 m6 noprint">
				<div class="video-container">
				<iframe width="560" height="315" src="https://www.youtube.com/embed/shNsmyrNN2g" frameborder="0" allowfullscreen></iframe>
				</div>
			</div>
			<div class="col s12 onlyprint">
				Vous pouvez écouter <i>La Espero</i> sur https://youtu.be/shNsmyrNN2g
			</div>
		</div>

		<div class="row">
			<div class="col s12">
				<p class="parto">Tous les styles musicaux sont aujourd’hui représentés dans la culture espérantophone. Certaines chansons sont des adaptations des langues nationales, d’autres des productions originales en espéranto. La gamme s’étend du hiphop de la Pafklik’ au reggae de Jonny M, en passant par le rock-pop de Kore, et de l’électro d’Inicialoj dc au répertoire de Brassens par Jacques Yvart, en passant par la bossa nova de Flávio Fonseca… pour n’en citer que quelques-uns.</p>
			</div>
			
			<div class="col s12 m9">
				<p>Certains artistes sont autoproduits, mais les associations nationales servent souvent de maisons de production. Les premiers labels apparus sont issus des éditeurs de livres LF-Koop en Suisse et Edistudio en Italie. Aujourd’hui, le label <a href="https://www.vinilkosmo-mp3.com/fr/">Vinilkosmo</a> propose, près de Toulouse, l’un des principaux studios d’enregistrement des artistes espérantophones.</p>
			</div>
			<div class="col s6 m3 offset-s4 noprint">
				<a href="https://www.vinilkosmo-mp3.com/fr/"><img src="fr/cge/bildoj/vinilkosmo.gif" class="responsive-img" alt="Vinilkosmo"></a>
			</div>

		</div>

		<div class="row">
			<div class="col s12">
				<p class="parto">Parmi les chanteurs de l’Espérantie, présentons-en quelques-uns, de différents horizons&nbsp;:</p>
				<ul>
					<li><i class="material-icons tiny contraste-texte-A">star</i> <b>JoMo</b>, un chanteur français éclectique, connu pour ses adaptations, comme <em>La Bamba</em> (<em>La Bambo</em>), et ses productions originales dans différents styles (rock, folk, traditionnel).</li>
					<li><i class="material-icons tiny contraste-texte-A">star</i> <b>Ĵomart kaj Nataŝa</b>, un duo kazakh installé en Suède, aux chansons à texte originales.</li>
					<li><i class="material-icons tiny contraste-texte-A">star</i> <b>Kajto</b>, un groupe frison de musique populaire, aux paroles faciles à comprendre, qu’il est bon de reprendre en cœur ou en canon.</li>
					<li><i class="material-icons tiny contraste-texte-A">star</i> <b>Amplifiki</b>, <b>Persone</b>, <b>Martin & la Talpoj</b> : trois groupes de rock-pop issus les uns des autres.</li>
				</ul>
			</div>
			<div class="col s12 m7">
				<p><i class="material-icons tiny contraste-texte-A">star</i> <b>Gijom</b>, un artiste de chanson, dont le répertoire, original et adapté du français, est en partie disponible gratuitement sur son site internet.</p>
				<p><i class="material-icons tiny contraste-texte-A">star</i> Enfin, deux chansons faciles, pour commencer la navigation sur YouTube&nbsp;: <i>Jen</i> des Argentins <b>La Porkoj</b> et <i>Bluaj fragoj</i> du groupe brésilien <b>Merlin</b>.</p>
			</div>
			<div class="col s8 m5 offset-s2 noprint">
				<video class="responsive-video" controls>
					<source src="fr/cge/bildoj/jen.mp4" type="video/mp4">
				</video>
			</div>
			<div class="col s12 onlyprint">
				Vous pourrez écouter cette chanson en allant sur la page<br />https://ikurso.fr/fr/cge/lec04.php?section=13
			</div>		
		</div>

		<div class="row">
			<div class="col s12">
				<p class="parto">Pour en savoir plus, rendez-vous sur la Toile&nbsp;:</p>
				<ul>
					<li><a href="https://fr.wikipedia.org/wiki/Musique_esp%C3%A9rantophone">https://fr.wikipedia.org/wiki/Musique_espérantophone</a></li>
					<li><a href="https://eo.wikipedia.org/wiki/Esperanto-muziko">https://eo.wikipedia.org/wiki/Esperanto-muziko</a></li>
					<li><a href="https://eo.wikipedia.org/wiki/Esperanto-muzikalbumoj">https://eo.wikipedia.org/wiki/Esperanto-muzikalbumoj</a></li>
				</ul>
			</div>
		</div>

		<div class="row">
			<div class="col s12">
				<p class="parto">Et pour découvrir l’espéranto en musique :</p>
				<ul>
					<li>à la radio&nbsp;: <a href="http://muzaiko.info/">muzaiko.info</a></li>
					<li>en albums&nbsp;: <a href="https://www.vinilkosmo-mp3.com/fr/">vinilkosmo.com</a></li>
					<li>dans notre boutique en ligne&nbsp;: <a href="https://butiko-esperanto-france.org/">https://butiko-esperanto-france.org/</a></li>
				</ul>
			</div>
		</div>'
  WHERE l.kurso = 'CG' AND l.numero = 4 AND le.ordo = 13;

-- leçon 4, section 14
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<p>
			La prononciation ne devrait plus avoir le moindre secret pour vous
			désormais. Toutefois n’hésitez pas à interroger votre correcteur s’il
			vous reste un doute. Par ailleurs, vous voyez que malgré un vocabulaire
			encore limité vous êtes déjà capable de faire de vraies phrases et de
			comprendre un petit récit. 
			</p>
		<div class=''card-panel blue-grey lighten-5 konsilo''><p><i class=''material-icons left''>lightbulb_outline</i><strong>Conseil&nbsp;:</strong> testez-vous plutôt que de relire. Cachez la traduction et essayez de retrouver le mot, refaites un exercice sans regarder vos réponses&nbsp;: chercher dans sa mémoire, même en se trompant, fixe bien mieux les connaissances que relire la leçon. <a href=''helpo.php?section=kurso#konsiloj''>Nos conseils pour apprendre</a></p></div>
##RESUMO##'
  WHERE l.kurso = 'CG' AND l.numero = 4 AND le.ordo = 14;

-- leçon 5, section 1
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<p class="parto">Un petit récapitulatif des expressions que nous avons déjà vues et quelques nouvelles expressions.</p>
		<div class="vortlisto">
			<div class="row">
				<p class="col s6 m3 eo"><a href="fr/son/vortoj/saluton.mp3" class="sm2_button"></a>Saluton!</p><p class="col s6 m3">Salut&nbsp;!</p>
				<p class="col s6 m3 eo"><a href="fr/son/vortoj/bonan-tagon.mp3" class="sm2_button"></a>Bonan tagon!</p><p class="col s6 m3">Bonjour&nbsp;!</p>
				<p class="col s6 m3 eo"><a href="fr/son/vortoj/bonan-matenon.mp3" class="sm2_button"></a>Bonan matenon!</p><p class="col s6 m3">Bonjour&nbsp;! (le matin)</p>
				<p class="col s6 m3 eo"><a href="fr/son/vortoj/bonan-vesperon.mp3" class="sm2_button"></a>Bonan vesperon!</p><p class="col s6 m3">Bonsoir&nbsp;!</p>
				<p class="col s6 m3 eo"><a href="fr/son/vortoj/bonan-nokton.mp3" class="sm2_button"></a>Bonan nokton!</p><p class="col s6 m3">Bonne nuit&nbsp;!</p>
			</div><div class="row">
				<p class="col s6 m3 eo"><a href="fr/son/vortoj/gxis-revido.mp3" class="sm2_button"></a>Ĝis revido!</p><p class="col s6 m3">Au revoir&nbsp;!</p>
				<p class="col s6 m3 eo"><a href="fr/son/vortoj/adiaux.mp3" class="sm2_button"></a>Adiaŭ!</p><p class="col s6 m3">Adieu&nbsp;!</p>
			</div>
		</div>
		<p></p>

			<div class="vortlisto">
				<div class="row">
					<p class="col s6"><a href="fr/son/frazoj/kiel-vi-fartas.mp3" class="sm2_button"></a> <span class="eo">Kiel vi fartas?</span></p><p class="col s6">Comment allez-vous&nbsp;?</p>
					<p class="col s5 offset-s1"><a href="fr/son/frazoj/bone-kaj-vi.mp3" class="sm2_button"></a> <span class="eo">– Bone. Kaj vi?</span></p><p class="col s6">– Bien. Et vous&nbsp;?</p>
					<p class="col s5 offset-s1"><a href="fr/son/vortoj/bonege.mp3" class="sm2_button"></a> <span class="eo">– Bonege.</span></p><p class="col s6">– Parfaitement bien.</p>
					<p class="col s5 offset-s1"><a href="fr/son/frazoj/suficxe-bone.mp3" class="sm2_button"></a> <span class="eo">– Sufiĉe bone.</span></p><p class="col s6">– Assez bien. (ça va)</p>
					<p class="col s5 offset-s1"><a href="fr/son/frazoj/ne-trop-bone.mp3" class="sm2_button"></a> <span class="eo">– Ne tro bone.</span></p><p class="col s6">– Pas trop bien.</p>
				</div>
			</div>

		<fieldset class="vortoj">
			<legend>EXPRESSIONS À RETENIR</legend>
			
			<p class="eo eta">Les expressions suivantes seront automatiquement ajoutées à votre vocabulaire à réviser lorsque vous aurez terminé d''étudier cette section.</p>
			
			<div class="vortlisto row">
				<p class="col s6"><a href="fr/son/vortoj/bonan-apetiton.mp3" class="sm2_button"></a><span class="eo">Bonan apetiton!</span></p><p class="col s6">Bon appétit&nbsp;!</p>
				<p class="col s6"><a href="fr/son/vortoj/je-via-sano.mp3" class="sm2_button"></a><span class="eo">Je via sano!</span></p><p class="col s6">À votre santé&nbsp;!</p>
				<p class="col s6"><a href="fr/son/vortoj/same-al-vi.mp3" class="sm2_button"></a><span class="eo">Same al vi!</span></p><p class="col s6">Pareillement&nbsp;!</p>
				<p class="col s6"><a href="fr/son/vortoj/dankon.mp3" class="sm2_button"></a><span class="eo">Dankon!</span></p><p class="col s6">Merci&nbsp;!</p>
				<p class="col s6"><a href="fr/son/vortoj/ne-dankinde.mp3" class="sm2_button"></a><span class="eo">Ne dankinde!</span></p><p class="col s6">Pas de quoi&nbsp;!&nbsp;/&nbsp;de rien&nbsp;!</p>
			</div>
		</fieldset>

		<p>
		Si deux personnes arrivent à parler d’elles-mêmes pendant cinq
		minutes chacune, elles peuvent donc facilement entretenir une
		conversation de dix minutes ! À la fin de ce cours en 10 leçons,
		vous devriez être capable de faire un petit discours sur vous-même en
		espéranto, en vous aidant éventuellement d’un résumé en français.
		</p>

		<p>Voyons l’exemple de Robert Lebrun :</p>
		<div class="vortlisto">
			<p><a class="player-audio" href="fr/son/l05.mp3" class="sm2_button"></a></p>
			<p>Saluton !<br>
			Mia nomo estas Roberto Bruno. Mi loĝas en Kanado. Mi komencis
			lerni Esperanton antaŭ kvar semajnoj. Ĝi estas tre facila lingvo.
			Mi loĝas en domo kun mia edzino kaj niaj infanoj. Ni havas unu
			filon kaj du filinojn. Mi ŝatas foti. En la interreto mi interŝanĝas
			miajn fotojn kun esperantistoj en aliaj landoj.</p>
		</div>

		<p class="noto">
			<b>NOTE</b> : <span class="eo">antaŭ kvar semajnoj</span> = il y a 4 semaines (littéralement «&nbsp;avant 4 semaines&nbsp;»)</p>
			

		<fieldset class="vortoj">
			<legend>MOTS À RETENIR</legend>
			
			<p class="eo eta">Les mots suivants seront automatiquement ajoutés à votre vocabulaire à réviser lorsque vous aurez terminé d''étudier cette section.</p>
			
			<div class="vortlisto row">
				<p class="col s12 m6"><a href="fr/son/vortoj/nomo.mp3" class="sm2_button"></a><span class="eo">nomo</span>&nbsp;: nom</p>
				<p class="col s12 m6"><a href="fr/son/vortoj/foti.mp3" class="sm2_button"></a><span class="eo">foti</span>&nbsp;: photographier</p>
				<p class="col s12 m6"><a href="fr/son/vortoj/foto.mp3" class="sm2_button"></a><span class="eo">foto</span>&nbsp;: photo</p>
				<p class="col s12 m6"><a href="fr/son/vortoj/lingvo.mp3" class="sm2_button"></a><span class="eo">lingvo</span>&nbsp;: langue (que l’on parle)</p>
				<p class="col s12 m6"><a href="fr/son/vortoj/komenci.mp3" class="sm2_button"></a><span class="eo">komenci</span>&nbsp;: commencer (quelque chose)</p>
				<p class="col s12 m6"><a href="fr/son/vortoj/intersxangxi.mp3" class="sm2_button"></a><span class="eo">interŝanĝi</span>&nbsp;: échanger</p>
				<p class="col s12 m6"><a href="fr/son/vortoj/sxati.mp3" class="sm2_button"></a><span class="eo">ŝati</span>&nbsp;: aimer, apprécier</p>
				<p class="col s12 m6"><a href="fr/son/vortoj/lerni.mp3" class="sm2_button"></a><span class="eo">lerni</span>&nbsp;: apprendre</p>
				<p class="col s12 m6"><a href="fr/son/vortoj/kun.mp3" class="sm2_button"></a><span class="eo">kun</span>&nbsp;: avec</p>
			</div>
		</fieldset>

		<p><span class="eo">loĝi, domo, edzo, infano, interreto, lando</span>&nbsp;: se reporter au vocabulaire de la <a href="fr/cge/lec04.php">leçon précédente</a>
		</p>
		</p>'
  WHERE l.kurso = 'CG' AND l.numero = 5 AND le.ordo = 1;

-- leçon 5, section 2
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<p class="parto">
		Dans les leçons précédentes, vous avez pu découvrir une partie des <b>corrélatifs</b>. 
		Ce sont de petits mots liés entre eux à la fois par le sens et par la forme. 
		Ils illustrent  l’intérêt de construire les mots de façon systématique.
		</p>
		<p>
		Chaque corrélatif est formé de deux éléments, présentés dans le schéma ci-dessous : un élément de la <b>première colonne</b> (<span class="eo"><b>ki</b></span>, <span class="eo"><b>ti</b></span>, <span class="eo"><b>i</b></span>, <span class="eo"><b>ĉi</b></span>, <span class="eo"><b>neni</b></span>) suivi d''un élément de la <b>seconde colonne</b> (<span class="eo"><b>o</b></span>, <span class="eo"><b>a</b></span>, <span class="eo"><b>u</b></span>, <span class="eo"><b>es</b></span>, <span class="eo"><b>om</b></span>, <span class="eo"><b>am</b></span>, <span class="eo"><b>al</b></span>, <span class="eo"><b>el</b></span>, <span class="eo"><b>e</b></span>).</p>
		<p>Par exemple, si nous associons l’élément <span class="eo"><b>ki-</b></span>, qui permet notamment de poser une question, à l''élément <span class="eo"><b>-al</b></span>, qui exprime la cause, on obtient le corrélatif <span class="eo">kial</span>, qui signifie <em>pourquoi</em>.</p>

		<div class="skemo-rulumebla"><img src="fr/cge/bildoj/korelativoj.svg" class="responsive-img" alt="Schéma des corrélatifs, à gauche nous avons la liste des 5 préfixes : KI/TI/I/ĈI/NENI et à droite la liste des 9 suffixes : O/A/U/ES/OM/AM/AL/EL/E. En combinant un préfixe et un suffixe, on peut former 45 corrélatifs différents"></div>
		<p class="hide-on-med-and-up center-align"><small>(faites défiler le schéma vers la droite)</small></p>
		
		<p>Voici quelques corrélatifs déjà rencontrés dans les leçons précédentes&nbsp;:</p>
		<div class="row vortlisto">
			<p class="col s12"><span class="eo">kiu</span>&nbsp;: qui, quel, lequel, laquelle (suivi d’un nom)</p>
			<p class="col s12"><span class="eo">neniu</span>&nbsp;: personne, aucun (si suivi d’un nom)</p>
			<p class="col s12"><span class="eo">iu</span>&nbsp;: quelqu’un, un certain</p>
			<p class="col s4"><span class="eo">kio</span>&nbsp;: quoi</p>
			<p class="col s8"><span class="eo">nenio</span>&nbsp;: rien</p>
			<p class="col s4"><span class="eo">kie</span>&nbsp;: où</p>
			<p class="col s8"><span class="eo">nenie</span>&nbsp;: nulle part</p>
			<p class="col s4"><span class="eo">kiam</span>&nbsp;: quand</p>
			<p class="col s4"><span class="eo">neniam</span>&nbsp;: jamais</p>
			<p class="col s4"><span class="eo">ĉiam</span>&nbsp;: toujours</p>
			<p class="col s4"><span class="eo">kiel</span>&nbsp;: comment, comme</p>
			<p class="col s8"><span class="eo">tiel</span>&nbsp;: ainsi, comme ça</p>
			<p class="col s12"><span class="eo">kiom</span>&nbsp;: combien</p>
		</div>
		
		<p class="parto">Voici quelques autres exemples de corrélatifs&nbsp;</p>

		<table class="bordered">
			<tr>
				<td width="15%"><b>Corrélatif</b></td>
				<td width="20%"><b>Composition</b></td>
				<td width="65%"><b>Signification</b></td>
			</tr><tr>
				<td><b>ĉiu</b></td>
				<td><span class="eo">ĉi-</span> + <span class="eo">-u</span></td>
				<td><em>totalité</em> + <em>individu</em><br>tout individu, «chaque, chacun(e)»</td>
			</tr><tr>
				<td><b>kie</b></td>
				<td><span class="eo">ki-</span> + <span class="eo">-e</span></td>
				<td><em>interrogatif / relatif</em> + <em>lieu</em><br/>où</td>
			</tr><tr>
				<td><b>tial</b></td>
				<td><span class="eo">ti-</span> + <span class="eo">-al</span></td>
				<td><em>démonstratif</em> + <em>cause</em><br/>c’est pourquoi, pour cette raison</td>
			</tr><tr>
				<td><b>iam</b></td>
				<td><span class="eo">i-</span> + <span class="eo">-am</span></td>
				<td><em>indéfini</em> + <em>moment</em><br/>un jour, à un moment</td>
			</tr><tr>
				<td><b>neniom</b></td>
				<td><span class="eo">neni-</span> + <span class="eo">-om</span></td>
				<td><em>négatif</em> + <em>quantité</em><br/>rien du tout, aucune quantité</td>
			</tr>
			</tr><tr>
				<td><b>kiu</b></td>
				<td><span class="eo">ki-</span> + <span class="eo">-u</span></td>
				<td><em>interrogatif / relatif</em> + <em>individu</em><br/>quel(le), lequel, laquelle, qui</td>
			</tr>
		</table>

		<p class="parto">Les corrélatifs se terminant par <b>-u</b> accompagnent souvent un nom&nbsp;:</p>
		<div class="row">
			<p class="col s6"><span class="eo"><b>Kiun</b> frukton vi volas?</span></p><p class="col s6"><b>Quel</b> fruit veux-tu&nbsp;?</p>
			<p class="col s6"><span class="eo">Mi volas <b>tiun</b> frukton.</span></p><p class="col s6">Je veux <b>ce</b> fruit.</p>
			<p class="col s6"><span class="eo">Mi volas <b>neniun</b> frukton.</span></p><p class="col s6">Je ne veux <b>aucun</b> fruit.</p>
			<p class="col s6"><span class="eo"><b>Kiun</b> amikon vi renkontis?</span></p><p class="col s6"><b>Quel</b> ami avez-vous rencontré&nbsp;?</p>
		</div>

		<p>Cependant, le nom peut parfois être sous-entendu si le contexte est clair&nbsp;:</p>
		<div class="row">
			<p class="col s6"><span class="eo">Jen fruktoj: <b>kiun</b> (frukton) vi volas?</span></p>
			<p class="col s6">Voici des fruits&nbsp;: <b>lequel</b> veux-tu&nbsp;? </p>
			<p class="col s6"><span class="eo">– Mi volas <b>tiun</b> (frukton).</span></p>
			<p class="col s6">– Je veux <b>celui-là</b>.</p>
			<p class="col s6"><span class="eo">– Mi volas <b>neniun</b> (frukton).</span></p>
			<p class="col s6">– Je n[’en] veux <b>aucun</b>.</p>
			<p class="col s6"><span class="eo">Jen la frukto, <b>kiun</b> vi volis.</span></p>
			<p class="col s6">Voici le fruit <b>que</b> tu voulais.</p>
		</div>
		
		<p>Employé seul, un corrélatif en <b>-u</b> est très souvent un <b>pronom</b> qui désigne une personne. Les corrélatifs en <b>-u</b> prennent le pluriel <b>-j</b> et l''accusatif <b>-n</b> comme les adjectifs&nbsp;: <span class="eo">ĉiuj</span>, <span class="eo">tiujn</span>…</p>
		<div class="row">
			<p class="col s6"><span class="eo"><b>Kiu</b> venis?</span></p><p class="col s6"><b>Qui</b> est venu&nbsp;?</p>
			<p class="col s6"><span class="eo">– <b>Iu</b>.</span></p><p class="col s6">– <b>Quelqu’un</b>.</p>
			<p class="col s6"><span class="eo">– <b>Neniu</b>.</span></p><p class="col s6">– <b>Personne</b>.</p>
			<p class="col s6"><span class="eo">– <b>Ĉiuj</b>.</span></p><p class="col s6">– <b>Tous</b>.</p>
		</div>
		
		<p class="parto">Les corrélatifs en <b>-es</b> marquent la possession. Ils équivalent à <span class="eo">de</span> + le corrélatif en <b>-u</b> correspondant&nbsp;:</p>
		<div class="row">
			<p class="col s3"><span class="eo">kies (= de kiu, de kiuj)</span></p><p class="col s9">de qui, à qui, dont, duquel</p>
			<p class="col s3"><span class="eo">ties (= de tiu)</span></p><p class="col s9">de celui-là, à celui-là</p>
			<p class="col s3"><span class="eo">ies (= de iu)</span></p><p class="col s9">de quelqu’un, à quelqu’un</p>
			<p class="col s3"><span class="eo">ĉies (= de ĉiu)</span></p><p class="col s9">de chacun, de tout le monde, à tout le monde</p>
			<p class="col s3"><span class="eo">nenies (= de neniu)</span></p><p class="col s9">de personne, à personne</p>
		</div>
		
		<p>Exemples&nbsp;:</p>
		<div class="row">
			<p class="col s6"><span class="eo"><b>Kies</b> amiko vi estas?</span></p><p class="col s6"><b>De qui</b> es-tu l’ami&nbsp;?</p>
			<p class="col s6"><span class="eo">Mi estas <b>ĉies</b> amiko.</span></p><p class="col s6">Je suis l’ami <b>de tous</b> (de chacun).</p>
			<p class="col s6"><span class="eo">La viro, <b>kies</b> amikon mi vidis.</span></p><p class="col s6">L’homme <b>dont</b> j’ai vu l’ami.</p>
			<p class="col s6"><span class="eo">La viro, <b>kun kies</b> amiko ni trinkis.</span></p><p class="col s6">L’homme <b>avec</b> l’ami <b>duquel</b> nous avons bu.</p>
		</div>
		
		<p class="parto">Les corrélatifs en <b>-om</b> (quantité) sont souvent suivis par la préposition <span class="eo">da</span>&nbsp;:</p>
		<div class="row">
			<p class="col s6"><span class="eo"><b>Kiom da</b> biskvitoj vi deziras?</span></p><p class="col s6"><b>Combien de</b> biscuits veux-tu&nbsp;?</p>
			<p class="col s6"><span class="eo">Mi deziras <b>neniom</b>.</span></p><p class="col s6">Je n’en veux <b>aucun</b>.</p>
			
			<p class="col s6"><span class="eo">Mi jam manĝis <b>tiom da</b> biskitoj!</span></p><p class="col s6">J’ai déjà mangé <b>tellement de</b> biscuits&nbsp;!</p>
		</div>

		<h3>Et notre tableau des corrélatifs, alors&nbsp;?</h3>
		<p>
			Nous pouvons compléter notre désormais familier tableau des corrélatifs. Pas d’inquiétude, nous allons poursuivre leur apprentissage progressivement, mais vous pouvez maintenant conserver cette page comme pense-bête&nbsp;!
		</p>
		<p>
			En espéranto, on les appelle d’ailleurs <span class="eo">tabelvortoj</span>, les «&nbsp;mots du tableau&nbsp;». Pour aller plus loin, vous trouverez d’autres exemples sur la page <a href="https://fr.wikiversity.org/wiki/Esp%C3%A9ranto/Vocabulaire/Corr%C3%A9latifs" target="_blank" rel="noopener">Corrélatifs</a> de Wikiversité.
		</p>
		<div class="korelativoj noprint">
			<table class="highlight">
				<thead>
					<tr>
						<th> </th>
						<th>Individu<br /><span class="eo">-u</span></th>
						<th>Possession<br /><span class="eo">-es</span></th>
						<th>Chose<br /><span class="eo">-o</span></th>
						<th>Qualité<br /><span class="eo">-a</span></th>
						<th>Lieu (on y est)<br /><span class="eo">-e</span></th>
						<th>Direction (on y va)<br /><span class="eo">-en</span></th>
						<th>Temps<br /><span class="eo">-am</span></th>
						<th>Manière<br /><span class="eo">-el</span></th>
						<th>Cause<br /><span class="eo">-al</span></th>
						<th>Quantité<br /><span class="eo">-om</span></th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th>Interrogatif<br /><span class="eo">ki-</span></th>
						<td><span class="eo">kiu</span><br />qui&nbsp;? quel(le)&nbsp;?<br />lequel, laquelle&nbsp;?</td>
						<td><span class="eo">kies</span><br />de qui&nbsp;?, à qui&nbsp;?, dont</td>
						<td><span class="eo">kio</span><br />que&nbsp;? quoi&nbsp;?</td>
						<td><span class="eo">kia</span><br />quelle sorte de&nbsp;?</td>
						<td><span class="eo">kie</span><br />où&nbsp;?</td>
						<td><span class="eo">kien</span><br />où&nbsp;? (vers quel lieu)</td>
						<td><span class="eo">kiam</span><br />quand&nbsp;?</td>
						<td><span class="eo">kiel</span><br />comme, comment&nbsp;?</td>
						<td><span class="eo">kial</span><br />pourquoi&nbsp;?</td>
						<td><span class="eo">kiom</span><br />combien&nbsp;?</td>
					</tr>
					<tr>
						<th>Indéfini<br /><span class="eo">i-</span></th>
						<td><span class="eo">iu</span><br />quelqu’un,<br />un(e) certain(e)</td>
						<td><span class="eo">ies</span><br />de quelqu’un</td>
						<td><span class="eo">io</span><br />quelque chose</td>
						<td><span class="eo">ia</span><br />une sorte de</td>
						<td><span class="eo">ie</span><br />quelque part</td>
						<td><span class="eo">ien</span><br />(vers) quelque part</td>
						<td><span class="eo">iam</span><br />un jour</td>
						<td><span class="eo">iel</span><br />d’une certaine manière</td>
						<td><span class="eo">ial</span><br />pour une certaine raison</td>
						<td><span class="eo">iom</span><br />un peu</td>
					</tr>
					<tr>
						<th>Négatif<br /><span class="eo">neni-</span></th>
						<td><span class="eo">neniu</span><br />personne, nul, aucun</td>
						<td><span class="eo">nenies</span><br />de personne</td>
						<td><span class="eo">nenio</span><br />rien</td>
						<td><span class="eo">nenia</span><br />aucune sorte de</td>
						<td><span class="eo">nenie</span><br />nulle part</td>
						<td><span class="eo">nenien</span><br />(vers) nulle part</td>
						<td><span class="eo">neniam</span><br />jamais</td>
						<td><span class="eo">neniel</span><br />d’aucune manière</td>
						<td><span class="eo">nenial</span><br />pour aucune raison</td>
						<td><span class="eo">neniom</span><br />rien du tout, aucune quantité</td>
					</tr>
					<tr>
						<th>Démonstratif<br /><span class="eo">ti-</span></th>
						<td><span class="eo">tiu</span><br />ce, cet,<br />celui-là, celle-là</td>
						<td><span class="eo">ties</span><br />de celui-là</td>
						<td><span class="eo">tio</span><br />cela</td>
						<td><span class="eo">tia</span><br />tel, telle,<br />cette sorte de</td>
						<td><span class="eo">tie</span><br />là, là-bas</td>
						<td><span class="eo">tien</span><br />(vers) là-bas</td>
						<td><span class="eo">tiam</span><br />alors</td>
						<td><span class="eo">tiel</span><br />ainsi</td>
						<td><span class="eo">tial</span><br />aussi, pour cette raison</td>
						<td><span class="eo">tiom</span><br />tant, autant</td>
					</tr>
					<tr>
						<th>Totalité<br /><span class="eo">ĉi-</span></th>
						<td><span class="eo">ĉiu</span><br />chacun(e),<br />chaque</td>
						<td><span class="eo">ĉies</span><br />de tous</td>
						<td><span class="eo">ĉio</span><br />tout</td>
						<td><span class="eo">ĉia</span><br />toute sorte de</td>
						<td><span class="eo">ĉie</span><br />partout</td>
						<td><span class="eo">ĉien</span><br />(vers) partout / dans toutes les directions</td>
						<td><span class="eo">ĉiam</span><br />toujours</td>
						<td><span class="eo">ĉiel</span><br />de toute manière</td>
						<td><span class="eo">ĉial</span><br />pour toute raison</td>
						<td><span class="eo">ĉiom</span><br />le tout</td>
					</tr>
				</tbody>
			</table>
		</div>
		<p class="noto">Les corrélatifs de lieu en <span class="eo">-e</span> prennent la terminaison <span class="eo">-n</span> de l’accusatif pour indiquer la direction (<span class="eo">Kie vi estas?</span> Où es-tu&nbsp;? – <span class="eo">Kien vi iras?</span> Où vas-tu&nbsp;?). Vous verrez cela en détail dans la <a href="fr/cge/lec06.php?section=16">leçon 6</a>.</p>
		<div class="korelativoj onlyprint">
			<table class="highlight">
				<thead>
					<tr>
						<th> </th>
						<th>Individu<br /><span class="eo">-u</span></th>
						<th>Possession<br /><span class="eo">-es</span></th>
						<th>Chose<br /><span class="eo">-o</span></th>
						<th>Qualité<br /><span class="eo">-a</span></th>
						<th>Lieu (on y est)<br /><span class="eo">-e</span></th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th>Interrogatif<br /><span class="eo">ki-</span></th>
						<td><span class="eo">kiu</span><br />qui&nbsp;? quel(le)&nbsp;?<br />lequel, laquelle&nbsp;?</td>
						<td><span class="eo">kies</span><br />de qui&nbsp;?, à qui&nbsp;?, dont</td>
						<td><span class="eo">kio</span><br />que&nbsp;? quoi&nbsp;?</td>
						<td><span class="eo">kia</span><br />quelle sorte de&nbsp;?</td>
						<td><span class="eo">kie</span><br />où&nbsp;?</td>
					</tr>
					<tr>
						<th>Indéfini<br /><span class="eo">i-</span></th>
						<td><span class="eo">iu</span><br />quelqu’un,<br />un(e) certain(e)</td>
						<td><span class="eo">ies</span><br />de quelqu’un</td>
						<td><span class="eo">io</span><br />quelque chose</td>
						<td><span class="eo">ia</span><br />une certaine sorte de, quelque</td>
						<td><span class="eo">ie</span><br />quelque part</td>
					</tr>
					<tr>
						<th>Négatif<br /><span class="eo">neni-</span></th>
						<td><span class="eo">neniu</span><br />personne, nul, aucun</td>
						<td><span class="eo">nenies</span><br />de personne</td>
						<td><span class="eo">nenio</span><br />rien</td>
						<td><span class="eo">nenia</span><br />aucune sorte de</td>
						<td><span class="eo">nenie</span><br />nulle part</td>
					</tr>
					<tr>
						<th>Démonstratif<br /><span class="eo">ti-</span></th>
						<td><span class="eo">tiu</span><br />ce, cet,<br />celui-là, celle-là</td>
						<td><span class="eo">ties</span><br />de celui-là, de celle-là</td>
						<td><span class="eo">tio</span><br />cela</td>
						<td><span class="eo">tia</span><br />tel, telle,<br />cette sorte de</td>
						<td><span class="eo">tie</span><br />là, là-bas</td>
					</tr>
					<tr>
						<th>Totalité<br /><span class="eo">ĉi-</span></th>
						<td><span class="eo">ĉiu</span><br />chacun(e),<br />chaque</td>
						<td><span class="eo">ĉies</span><br />de chacun, de tous</td>
						<td><span class="eo">ĉio</span><br />tout</td>
						<td><span class="eo">ĉia</span><br />toute sorte de</td>
						<td><span class="eo">ĉie</span><br />partout</td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="korelativoj onlyprint">
			<table class="highlight">
				<thead>
					<tr>
						<th> </th>
						<th>Direction (on y va)<br /><span class="eo">-en</span></th>
						<th>Temps<br /><span class="eo">-am</span></th>
						<th>Manière<br /><span class="eo">-el</span></th>
						<th>Cause<br /><span class="eo">-al</span></th>
						<th>Quantité<br /><span class="eo">-om</span></th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th>Interrogatif<br /><span class="eo">ki-</span></th>
						<td><span class="eo">kien</span><br />où&nbsp;? (vers quel lieu)</td>
						<td><span class="eo">kiam</span><br />quand&nbsp;?</td>
						<td><span class="eo">kiel</span><br />comme, comment&nbsp;?</td>
						<td><span class="eo">kial</span><br />pourquoi&nbsp;?</td>
						<td><span class="eo">kiom</span><br />combien&nbsp;?</td>
					</tr>
					<tr>
						<th>Indéfini<br /><span class="eo">i-</span></th>
						<td><span class="eo">ien</span><br />(vers) quelque part</td>
						<td><span class="eo">iam</span><br />un jour, à un moment (quelconque)</td>
						<td><span class="eo">iel</span><br />d’une certaine manière</td>
						<td><span class="eo">ial</span><br />pour une certaine raison</td>
						<td><span class="eo">iom</span><br />un peu, une certaine quantité</td>
					</tr>
					<tr>
						<th>Négatif<br /><span class="eo">neni-</span></th>
						<td><span class="eo">nenien</span><br />(vers) nulle part</td>
						<td><span class="eo">neniam</span><br />jamais</td>
						<td><span class="eo">neniel</span><br />d’aucune manière</td>
						<td><span class="eo">nenial</span><br />pour aucune raison</td>
						<td><span class="eo">neniom</span><br />rien du tout, aucune quantité</td>
					</tr>
					<tr>
						<th>Démonstratif<br /><span class="eo">ti-</span></th>
						<td><span class="eo">tien</span><br />(vers) là-bas</td>
						<td><span class="eo">tiam</span><br />alors</td>
						<td><span class="eo">tiel</span><br />ainsi, de cette manière, si (tellement)</td>
						<td><span class="eo">tial</span><br />c''est pourquoi, pour cette raison</td>
						<td><span class="eo">tiom</span><br />tant, autant, tellement</td>
					</tr>
					<tr>
						<th>Totalité<br /><span class="eo">ĉi-</span></th>
						<td><span class="eo">ĉien</span><br />(vers) partout, dans toutes les directions</td>
						<td><span class="eo">ĉiam</span><br />toujours</td>
						<td><span class="eo">ĉiel</span><br />de toutes les manières</td>
						<td><span class="eo">ĉial</span><br />pour toutes les raisons</td>
						<td><span class="eo">ĉiom</span><br />tout (la totalité), toute la quantité</td>
					</tr>
				</tbody>
			</table>
		</div>'
  WHERE l.kurso = 'CG' AND l.numero = 5 AND le.ordo = 2;

-- leçon 5, section 3
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<p>
		Après toute cette théorie, un peu de pratique ne vous fera pas de mal.
		Regardez les mots de la liste qui suit. Décomposez chaque corrélatif,
		recherchez son sens d’après les explications du paragraphe précédent
		et comparez-le avec celui qui est donné ici.
		</p>
		<div class="vortlisto row">
			<p class="col s2"><span class="eo">tio</span></p><p class="col s10">cette chose, cela, ce</p>
			<p class="col s2"><span class="eo">kio?</span></p><p class="col s10">quelle chose&nbsp;? quoi&nbsp;?</p>
			<p class="col s2"><span class="eo">iam</span></p><p class="col s10">à un (certain) moment, un jour, (il était) une fois</p>
			<p class="col s2"><span class="eo">nenie</span></p><p class="col s10">nulle part</p>
			<p class="col s2"><span class="eo">kiel?</span></p><p class="col s10">comment&nbsp;? de quelle manière&nbsp;? (<em>réponses possibles</em>&nbsp;: bien, élégamment…)</p>
			<p class="col s2"><span class="eo">kiam?</span></p><p class="col s10">quand&nbsp;? à quel moment&nbsp;? (<em>réponses possibles</em>&nbsp;: cet après-midi, le soir…)</p>
			<p class="col s2"><span class="eo">kie?</span></p><p class="col s10">où&nbsp;? en quel lieu&nbsp;? (<em>réponses possibles</em>&nbsp;: tout près, au Canada…)</p>
			<p class="col s2"><span class="eo">kial?</span></p><p class="col s10">pourquoi&nbsp;? pour quelle raison&nbsp;? (<em>réponse possible</em>&nbsp;: parce que…)</p>
			<p class="col s2"><span class="eo">kiom?</span></p><p class="col s10">combien&nbsp;? quelle quantité&nbsp;? (<em>réponses possibles</em>&nbsp;: un peu, beaucoup…)</p>
			<p class="col s2"><span class="eo">ĉiam</span></p><p class="col s10">toujours</p>
			<p class="col s2"><span class="eo">tiel</span></p><p class="col s10">ainsi, de cette façon</p>
			<p class="col s2"><span class="eo">ie</span></p><p class="col s10">quelque part</p>
		</div>
		
		<p class="rimarko"><strong>REMARQUES :</strong> </p>
		<ol>
			<li>Faites bien attention à l’accent tonique des corrélatifs&nbsp;: 
			<span class="eo">ne-<u>ni</u>-e</span>, <span class="eo"><u>ki</u>-u</span>, <span class="eo"><u>ti</u>-al</span>, <span class="eo"><u>i</u>-om</span>, <span class="eo">ne-<u>ni</u>-es</span>.</li>
			<li>Les corrélatifs en <b>KI-</b> servent à former des phrases interrogatives 
			(qui&nbsp;?, où&nbsp;?, quand&nbsp;?, comment&nbsp;?) et des propositions relatives.</li>
		</ol>'
  WHERE l.kurso = 'CG' AND l.numero = 5 AND le.ordo = 3;

-- leçon 5, section 4
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<p class="parto">
		Les corrélatifs terminés par <b>-a</b> et <b>-u</b> prennent la forme de l’accusatif
		<b>-n</b> et du pluriel <b>-j</b>. Les corrélatifs en <b>-o</b> (<span class="eo">kio</span>,
		etc.) et en <b>-e</b> prennent le <b>-n</b> de l’accusatif mais jamais le <b>-j</b> du
		pluriel. Tous les autres sont invariables.
		</p>
		<div class="row">
			<p class="col s12"><span class="eo">Kun <b>kiaj</b> fruktoj vi faris tiun bonan kukon?</span>&nbsp;: Avec <b>quelles sortes de</b> fruits as-tu fait ce bon gâteau ?</p>
			<p class="col s12"><span class="eo">Mi <b>neniam</b> manĝis tiajn kukojn.</span>&nbsp;: Je <b>n</b>’ai <b>jamais</b> mangé de tels gâteaux.</p>
			<p class="col s12"><span class="eo"><b>Kiujn</b> vi renkontis?</span>&nbsp;: <b>Qui</b> (plur.) as-tu rencontré&nbsp;? <b>Lesquels</b> as-tu rencontrés&nbsp;?</p>
			<p class="col s12"><span class="eo">Mi vidis la kukon, <b>kiun</b> vi faris.</span>&nbsp;: J’ai vu le gâteau <b>que</b> tu as fait.</p>
			<p class="col s12"><span class="eo"><b>Kion</b> vi volas?</span>&nbsp;: <b>Que</b> veux-tu&nbsp;?</p>
		</div>'
  WHERE l.kurso = 'CG' AND l.numero = 5 AND le.ordo = 4;

-- leçon 5, section 5
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<p><a href="fr/son/frazoj/pv5.mp3" class="sm2_button"></a> <span class="eo">En ĉiu malbono estas iom da bono.</span>&nbsp;: Dans tout mal il y a un peu de bien.</p>
		

		<fieldset class="vortoj">
			<legend>À RETENIR</legend>
			
			<p class="eo eta">Ce mot sera automatiquement ajouté à votre vocabulaire à réviser lorsque vous aurez terminé d''étudier cette section.</p>
			
			<div class="vortlisto row">
				<p class="col s12"><a href="fr/son/vortoj/malbono.mp3" class="sm2_button"></a><span class="eo">malbono</span>&nbsp;: le mal, du mal</p>
			</div>
		</fieldset>'
  WHERE l.kurso = 'CG' AND l.numero = 5 AND le.ordo = 5;

-- leçon 5, section 6
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##EKZERCO:20##
			##EKZERCO:21##
		<fieldset class="vortoj">
			<legend>MOTS À RETENIR</legend>
			
			<p class="eo eta">Les mots suivants seront automatiquement ajoutés à votre vocabulaire à réviser lorsque vous aurez terminé d''étudier cette section.</p>
			
			<div class="vortlisto row">
				<p class="col s12 m6"><a href="fr/son/vortoj/malseka.mp3" class="sm2_button"></a><span class="eo">malseka</span>&nbsp;: mouillé</p>
				<p class="col s12 m6"><a href="fr/son/vortoj/krajono.mp3" class="sm2_button"></a><span class="eo">krajono</span>&nbsp;: crayon</p>
				<p class="col s12 m6"><a href="fr/son/vortoj/vespere.mp3" class="sm2_button"></a><span class="eo">vespere</span>&nbsp;: le soir, au soir</p>
				<p class="col s12 m6"><a href="fr/son/vortoj/bicikle.mp3" class="sm2_button"></a><span class="eo">bicikle</span>&nbsp;: à vélo</p>
			</div>
		</fieldset>'
  WHERE l.kurso = 'CG' AND l.numero = 5 AND le.ordo = 6;

-- leçon 5, section 7
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<div class="row">
			<div class="col s12">
				<p class="parto">Vous qui apprenez l’espéranto, vous aurez certainement assez tôt envie de lire ou d’écrire pour mettre en pratique votre apprentissage.</p>
				<p>Pour assouvir votre soif de lecture, vous allez avoir un certain choix, car la littérature en espéranto se compose d’œuvres au style varié et s’est constituée de nombreux ouvrages au fil des ans.</p>
				<p>En effet, le <strong>premier roman original en espéranto</strong> apparut en 1907, sous la plume d’Henri Valienne et s’intitule <em>Kastelo de Prelongo</em>. Auparavant, les publications provenaient soit des traductions, soit de poésies.</p>
			</div>
		</div>
		<div class="row">
			<div class="col s9">
				<p>Citons d’abord quelques œuvres très connues à découvrir ou redécouvrir en espéranto&nbsp;: <em>Le Seigneur des anneaux</em>, <em>Don Quichotte</em>, <em>Le Petit Prince</em>, <em>Hamlet</em>… Vous apprécierez alors les traductions de qualités qui seront un moyen indéniable de progresser et d’approfondir votre vocabulaire.</p>
				<p>Et puis il existe la littérature originale, loin d’être négligeable, car il se trouve dans le monde de l’espéranto quelques auteurs connus, reconnus et prolifiques&nbsp;: William Auld, Marjorie Boulton, Trevor Steel… Leurs livres sont devenus des classiques, voire des incontournables.</p>
				<p class="parto">Un autre fait est à noter, certains livres sont parus en espéranto et ont ensuite été traduits vers des langues nationales, comme <em>Kroata milita noktlibro</em>, de Spomenka Ŝtimec (<em>Journal de nuit</em>) ou <em>Kumeŭaŭa, la filo de la ĝangalo</em> de Tibor Sekelj (<em>Kumewawa, le fils de la jungle</em>).</p>
				<div class="row noprint">
					<div class="col s6">
						<img src="fr/cge/bildoj/mastro-ringoj.png" class="responsive-img" alt="La Majstro de l'' ringoj" />
					</div>
					<div class="col s4">
						<img src="fr/cge/bildoj/eta-princo.jpg" class="responsive-img" alt="La Eta Princo" />
					</div>
				</div>
			</div>
			<div class="col s3 noprint">
				<img src="fr/cge/bildoj/don-quichotte.jpg" class="responsive-img" alt="Don Quichotte" />
			</div>
		</div>
		<div class="row">
			<div class="col s8 m9">
				<p>La <strong>bande-dessinée</strong> (d’accord, pour certains, ce n’est pas de la «&nbsp;littérature&nbsp;») mais nous ne pouvons pas ne pas l’évoquer&nbsp;: que diriez-vous de lire <em>Tintin au Tibet</em>, <em>Astérix et Cléopâtre</em> ou <em>Petit Spirou</em> en espéranto&nbsp;?</p>
				<p>L’espéranto, grâce à la littérature, prend tout son sens&nbsp;: les <strong>œuvres originales</strong> participent à l’enrichissement du patrimoine culturel et les <strong>œuvres traduites</strong> ouvrent des accès entre les cultures.</p>
				<p class="parto">Êtes-vous prêt à partir à la découverte des <a href="http://katalogo.uea.org/katalogo.php?inf=8587">sagas islandaises</a>&nbsp;? À partager le <a href="http://katalogo.uea.org/katalogo.php?inf=8943">récit d’une famille hollandaise hanté par la colonisation</a>&nbsp;? À en apprendre plus sur <a href="http://katalogo.uea.org/katalogo.php?inf=7813">le père de la langue maltaise</a>&nbsp;? Ou souhaitez-vous vous plonger dans un <a href="http://katalogo.uea.org/index.php?inf=6111">recueil de nouvelles coréennes</a>&nbsp;?<p>
				<p>Vous êtes chanceux de pouvoir lire ces livres, car ils ne sont pas édités en français&nbsp;!</p>
			</div>
			<div class="col s4 m3 noprint">
				<img src="fr/cge/bildoj/La_templo_de_l_suno.jpg" class="responsive-img" alt="La Eta Princo" />
			</div>
		</div>
		<div class="row">
			<div class="s12">
				<p><strong>Quelques liens utiles pour prolonger votre découverte&nbsp;:</strong></p>
				<ul>
					<li><a href="https://fr.wikipedia.org/wiki/Littérature_espérantophone">l’article de wikipédia sur la littérature espérantophone</a></li>
					<li><a href="https://butiko-esperanto-france.org">la librairie d’Espéranto-France</a></li>
				</ul>
				<p><strong>Livres électroniques</strong>&nbsp;:</p>
				<ul>
					<li><a href="http://esperanto-ondo.ru/Libroj/Libroj.php">esperanto-ondo.ru/Libroj/Libroj.php</a></li>
					<li><a href="http://www.bitlibroj.com/originalaesperantoliteraturo/originalaprozoesperanto.html">www.bitlibroj.com/originalaesperantoliteraturo/originalaprozoesperanto.html</a></li>
					<li><a href="http://www.librejo.com/index.html">www.librejo.com</a></li>
				</ul>
			</div>
		</div>'
  WHERE l.kurso = 'CG' AND l.numero = 5 AND le.ordo = 7;

-- leçon 5, section 8
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<div class=''card-panel blue-grey lighten-5 konsilo''><p><i class=''material-icons left''>lightbulb_outline</i><strong>Conseil&nbsp;:</strong> profitez de la logique de l’espéranto. Inutile d’apprendre les 45 corrélatifs par cœur&nbsp;: retenez les cinq débuts (<span class=''eo''>ki-, ti-, i-, ĉi-, neni-</span>) et les neuf fins, et vous saurez les reconstruire. <a href=''helpo.php?section=kurso#konsiloj''>Nos conseils pour apprendre</a></p></div>
##RESUMO##'
  WHERE l.kurso = 'CG' AND l.numero = 5 AND le.ordo = 8;

-- leçon 6, section 1
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<p>Faisons une petite révision des terminaisons vues jusqu’à maintenant&nbsp;:</p>
		
		<div class="row">
			<p class="col s4">Sujet<br/>Adjectif Nom</p>
			<p class="col s2">Adverbe</p>
			<p class="col s2">Verbe</p>
			<p class="col s4">Complément d’objet direct<br>Adjectif Nom</p>
		</div>
		<div class="row">
			<p class="col s4">____-a   ____-o<br>____-aj   ____-oj</p>
			<p class="col s2">____-e</p>
			<p class="col s2">____-is<br>____-as<br>____-os</p>
			<p class="col s4">____-an   ____-on<br>____-ajn  ____-ojn</p>
		</div>
		<div class="row">
			<p class="col s4 eo">Mia patro</p>
			<p class="col s2 eo">bone</p>
			<p class="col s2 eo">lavas</p>
			<p class="col s4 eo">mian fraton.</p>
		</div>
		<div class="row">
			<p class="col s4 eo">Niaj fratinoj</p>
			<p class="col s2 eo">ĝoje</p>
			<p class="col s2 eo">vidis</p>
			<p class="col s4 eo">viajn instruistojn.</p>
		</div>'
  WHERE l.kurso = 'CG' AND l.numero = 6 AND le.ordo = 1;

-- leçon 6, section 2
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<p>
		Nous avons vu que, pour transformer une phrase en question, il suffit
		de placer le mot <span class="eo">ĉu</span> (est-ce que ?) au début de la phrase. La réponse
		attendue est alors <span class="eo">jes</span> ou <span class="eo">ne</span>&nbsp;:
		</p>
		<div class="vortlisto row">
			<p class="col s6">La knabino manĝis.</p><p class="col s6">– <b>Ĉu</b> la knabino manĝis?</p>
			<p class="col s6">La knabino ne manĝis.</p><p class="col s6">– <b>Ĉu</b> la knabino ne manĝis?</p>
		</div>
		
		<p class="parto">Les mots interrogatifs en <b>ki-</b> permettent de poser des questions sur
		des morceaux spécifiques de la phrase sans utiliser le mot <span class="eo">ĉu</span>&nbsp;:
		</p>
		<div class="vortlisto row">
			<p class="col s12">La knabino trinkas varman ĉokoladon matene.</p>
			<p class="col s6">– <b>Kion</b> trinkas la knabino matene?</p><p class="col s6">– <b>Varman ĉokoladon.</b></p>
			<p class="col s6">– <b>Kiu</b> trinkas ĉokoladon?</p><p class="col s6">– <b>La knabino.</b></p>
			<p class="col s6">– <b>Kian</b> ĉokoladon ŝi trinkas?</p><p class="col s6">– <b>Varman.</b></p>
			<p class="col s6">– <b>Kiam</b> ŝi trinkas ĉokoladon?</p><p class="col s6">– <b>Matene.</b></p>
		</div>
		
		<fieldset class="vortoj">
			<legend>À RETENIR</legend>
			
			<p class="eo eta">Ce mot sera automatiquement ajouté à votre vocabulaire à réviser lorsque vous aurez terminé d''étudier cette section.</p>
			
			<div class="vortlisto row">
				<p class="col s12"><span class="eo">matene</span>&nbsp;: le matin, au matin</p>
			</div>
		</fieldset>'
  WHERE l.kurso = 'CG' AND l.numero = 6 AND le.ordo = 2;

-- leçon 6, section 3
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<p class="parto">
		La lettre <b>c</b> se prononce comme <em>ts</em> tout
		comme beaucoup de Québécois prononcent le <em>t</em> devant <em>u</em> et <em>i</em> (<em>tsu</em>
		pour <em>tu</em>, <em>tsire</em> pour <em>tire</em>). Ainsi&nbsp;:
		</p>
		
		<div class="vortlisto">
			<div class="row">
				<p class="col s3"><a href="fr/son/vortoj/danco.mp3" class="sm2_button"></a><span class="eo">danco</span></p>
				<p class="col s3"><a href="fr/son/vortoj/leciono.mp3" class="sm2_button"></a><span class="eo">leciono</span></p>
				<p class="col s3"><a href="fr/son/vortoj/biciklo.mp3" class="sm2_button"></a><span class="eo">biciklo</span></p>
				<p class="col s3"><a href="fr/son/vortoj/scienco.mp3" class="sm2_button"></a><span class="eo">scienco</span></p>
				<p class="col s3">(<u>dan</u>-tso)</p>
				<p class="col s3">(lè-tsi-<u>o</u>-no)</p>
				<p class="col s3">(bi-<u>tsi</u>-klo)</p>
				<p class="col s3">(stsi-<u>èn</u>-tso)</p>
			</div>
		</div>
		<p class="parto">N’oubliez pas l’accent tonique&nbsp;: toujours sur l’avant-dernière syllabe.
		Notez aussi que <b>h</b> est toujours prononcé&nbsp;:</p>
		<div class="vortlisto">
			<div class="row">
				<p class="col s3"><a href="fr/son/vortoj/havi.mp3" class="sm2_button"></a><span class="eo"><u>ha</u>vi</span></p>
				<p class="col s3"><a href="fr/son/vortoj/helpi.mp3" class="sm2_button"></a><span class="eo"><u>hel</u>pi</span></p>
				<p class="col s3"><a href="fr/son/vortoj/lipharoj.mp3" class="sm2_button"></a><span class="eo">lip<u>ha</u>roj</span></p>
				<p class="col s3"><a href="fr/son/vortoj/heroa.mp3" class="sm2_button"></a><span class="eo">he<u>ro</u>a</span></p>
				<p class="col s3">(avoir)</p>
				<p class="col s3">(aider)</p>
				<p class="col s3">(moustache)</p>
				<p class="col s3">(héroique)</p>
			</div>
		</div>

		<fieldset class="vortoj">
			<legend>MOTS À RETENIR</legend>
			
			<p class="eo eta">Ces mots seront automatiquement ajoutés à votre vocabulaire à réviser lorsque vous aurez terminé d''étudier cette section.</p>
			
			<div class="vortlisto row">
				<p class="col s12 m6"><a href="fr/son/vortoj/scienco.mp3" class="sm2_button"></a><span class="eo">scienco</span>&nbsp;: science</p>
				<p class="col s12 m6"><a href="fr/son/vortoj/helpi.mp3" class="sm2_button"></a><span class="eo">helpi</span>&nbsp;: aider</p>
			</div>
		</fieldset>'
  WHERE l.kurso = 'CG' AND l.numero = 6 AND le.ordo = 3;

-- leçon 6, section 4
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<p>Voici un petit exercice pour vous remettre en mémoire ce que vous avez appris à 
		la leçon précédente.</p>
		
			##EKZERCO:22##'
  WHERE l.kurso = 'CG' AND l.numero = 6 AND le.ordo = 4;

-- leçon 6, section 5
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<p>À distinguer :</p>
		<div class="vortlisto row">
			<p class="col s6"><span class="eo">nova</span>&nbsp;: nouveau</p><p class="col s6"><span class="eo">malnova</span>&nbsp;: ancien, périmé</p>
			<p class="col s6"><span class="eo">juna</span>&nbsp;: jeune</p><p class="col s6"><span class="eo">maljuna</span>&nbsp;: vieux, âgé</p>
		</div>
		
		<p><span class="eo">maljuna amiko</span>&nbsp;: un vieil ami (= un ami âgé)</p>
		<p><span class="eo">malnova amiko</span>&nbsp;: un vieil ami (= un ami de longue date)</p>
		
		<p class="parto"><b>Proverbe</b></p>
		<p><a href="fr/son/frazoj/pv6.mp3" class="sm2_button"></a><span class="eo">Bona estas domo nova kaj amiko malnova.</span></p>'
  WHERE l.kurso = 'CG' AND l.numero = 6 AND le.ordo = 5;

-- leçon 6, section 6
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<p class="parto">
		Dans les leçons précédentes, vous avez vu quelques prépositions. Voici maintenant une liste plus complète des prépositions les plus fréquemment employées en espéranto.</p>
		<table class="retrait striped bordered">
			<tr><td class="eo">al</td><td>- à, vers (indique le but d’un mouvement ou le bénéficiaire d’une action)</td></tr>
			<tr><td class="eo">ĉe</td><td>- chez, auprès de, tout près de</td></tr>
			<tr><td class="eo">de</td><td>- de, à partir de, depuis (temps, lieu)</td></tr>
			<tr><td class="eo">dum</td><td>- durant, pendant (est également conjonction et signifie «pendant que», «tandis que»)</td></tr>
			<tr><td class="eo">en</td><td>- dans, en, à l’intérieur de</td></tr>
			<tr><td class="eo">ĝis</td><td>- jusqu’à (est également conjonction et signifie alors «jusqu’à ce que»)</td></tr>
			<tr><td class="eo">por</td><td>- pour, à l’intention de</td></tr>
			<tr><td class="eo">pro</td><td>- en raison de, à cause de («pour», «par», «de»,…)</td></tr>
			<tr><td class="eo">sub</td><td>- sous, en-dessous de</td></tr>
			<tr><td class="eo">sur</td><td>- sur, au-dessus de (en touchant l’objet)</td></tr>
			<tr><td class="eo">anstataŭ</td><td>- au lieu de, à la place de</td></tr>
			<tr><td class="eo">antaŭ</td><td>- avant, devant</td></tr>
			<tr><td class="eo">apud</td><td>- près de, à côté de</td></tr>
			<tr><td class="eo">da</td><td>- de (indique la quantité)</td></tr>
			<tr><td class="eo">ekster</td><td>- hors de, en dehors de</td></tr>
			<tr><td class="eo">el</td><td>- de (indique l’origine), hors de (mouvement)</td></tr>
			<tr><td class="eo">inter</td><td>- parmi, entre</td></tr>
			<tr><td class="eo">kun</td><td>- avec (indique l’accompagnement)</td></tr>
			<tr><td class="eo">per</td><td>- par, au moyen de, avec (instrument)</td></tr>
			<tr><td class="eo">post</td><td>- après</td></tr>
			<tr><td class="eo">pri</td><td>- au sujet de, à propos de</td></tr>
			<tr><td class="eo">sen</td><td>- sans</td></tr>
			<tr><td class="eo">super</td><td>- au-dessus de</td></tr>
			<tr><td class="eo">tra</td><td>- à travers, au travers de</td></tr>
		</table>'
  WHERE l.kurso = 'CG' AND l.numero = 6 AND le.ordo = 6;

-- leçon 6, section 7
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<div class="row">
			<p class="col s6 m3 center-align"><img class="responsive-img" src="fr/cge/bildoj/mangxi-dum-vojagxo.jpg"><br>-9-</p>
			<p class="col s6 m3 center-align"><img class="responsive-img" src="fr/cge/bildoj/hotelo-por-insektoj.jpg"><br>-10-</p>
			<p class="col s6 m3 center-align"><img class="responsive-img" src="fr/cge/bildoj/sabla-kastelo.jpg"><br>-11-</p>
			<p class="col s6 m3 center-align"><img class="responsive-img" src="fr/cge/bildoj/kato-en-shranko.jpg"><br>-12-</p>
			<p class="col s6 m3 center-align"><img class="responsive-img" src="fr/cge/bildoj/sur-la-pinto.jpg"><br>-13-</p>
			<p class="col s6 m3 center-align"><img class="responsive-img" src="fr/cge/bildoj/cxapelo-cxe-dorso.jpg"><br>-14-</p>
			<p class="col s6 m3 center-align"><img class="responsive-img" src="fr/cge/bildoj/floroj-inter-rokoj.jpg"><br>-15-</span></p>
			<p class="col s6 m3 center-align"><img class="responsive-img" src="fr/cge/bildoj/libroj-esperanto.jpg"><br>-16-</span></p>
		</div>
		
			##EKZERCO:23##
		<p>Crédits photos :</p>
		<p class="creditphoto">11. Diego Delso, <a href="http://delso.photo/">delso.photo</a>, License CC-BY-SA</p>
		<p class="creditphoto">Autres photos : iKurso/ E. Richard</p>

		<fieldset class="vortoj">
			<legend>VOCABULAIRE À RETENIR</legend>
			<div>
				
				<p class="eo eta">Ces mots seront automatiquement ajoutés à votre vocabulaire à réviser lorsque vous aurez terminé cette section. Le nombre de mots à réviser sera indiqué sur le bouton affiché au-dessus du sommaire.</p>
				
			</div>
			<div class="vortlisto row">
				<p class="col s6"><a href="fr/son/vortoj/kastelo.mp3" class="sm2_button"></a><span class="eo">kastelo</span> : château</p>
				<p class="col s6"><a href="fr/son/vortoj/cxapelo.mp3" class="sm2_button"></a><span class="eo">ĉapelo</span> : chapeau</p>
				<p class="col s6"><a href="fr/son/vortoj/dorso.mp3" class="sm2_button"></a><span class="eo">dorso</span> : dos</p>
				<p class="col s6"><a href="fr/son/vortoj/vojagxo.mp3" class="sm2_button"></a><span class="eo">vojaĝo</span> : voyage</p>
			</div>
		</fieldset>'
  WHERE l.kurso = 'CG' AND l.numero = 6 AND le.ordo = 7;

-- leçon 6, section 8
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<p class="parto">Voici un premier récit. Lisez-le en faisant attention à l’usage des prépositions. Dans la section suivante, nous vous présenterons en second récit, puis vous aurez un exercice avec des questions sur ces deux récits.</p>
		<p><b>Vojaĝo al Montrealo por la Esperanto-kongreso</b></p>
		<p>
			<audio controls="controls">Votre navigateur ne supporte pas la lecture du fichier audio.
				<source src="fr/son/l06.mp3" type="audio/mp3">
			</audio>
		</p>
		<p>
			  Mi estas membro de junulara esperantista klubo kaj mi partoprenis en
			  la Esperanto-kongreso, kiu okazis en Montrealo. Dum preskaŭ tri horoj
			  ni vojaĝis de Kebeko en nia aŭtobuseto kaj ne haltis, ĝis ni alvenis
			  al Montrealo. Tie ni ankaŭ vizitis esperantistajn amikojn. Por la
			  tagmanĝo ni manĝis sandviĉojn, kiuj estis sub la seĝoj, sur kiuj
			  ni sidis dum la vojaĝo.
			</p>

		<fieldset class="vortoj">
			<legend>MOTS À RETENIR</legend>
			
			<p class="eo eta">Ces mots seront automatiquement ajoutés à votre vocabulaire à réviser lorsque vous aurez terminé d''étudier cette section.</p>
			
			<div class="vortlisto row">
				<p class="col s12 m6"><a href="fr/son/vortoj/junularo.mp3" class="sm2_button"></a><span class="eo">junularo</span>&nbsp;: jeunesse</p>		
				<p class="col s12 m6"><a href="fr/son/vortoj/partopreni-en.mp3" class="sm2_button"></a><span class="eo">partopreni en</span>&nbsp;: participer à</p>
				<p class="col s12 m6"><a href="fr/son/vortoj/okazi.mp3" class="sm2_button"></a><span class="eo">okazi</span>&nbsp;: avoir lieu</p>
				<p class="col s12 m6"><a href="fr/son/vortoj/kebeko.mp3" class="sm2_button"></a><span class="eo">Kebeko</span>&nbsp;: Québec (la ville)</p>
				<p class="col s12 m6"><a href="fr/son/vortoj/auxtobuseto.mp3" class="sm2_button"></a><span class="eo">(aŭto)buseto</span>&nbsp;: minibus</p>
				<p class="col s12 m6"><a href="fr/son/vortoj/halti.mp3" class="sm2_button"></a><span class="eo">halti</span>&nbsp;: s’arrêter</p>
				<p class="col s12 m6"><a href="fr/son/vortoj/alveni-al.mp3" class="sm2_button"></a><span class="eo">alveni al</span>&nbsp;: arriver à (ou dans)</p>
				<p class="col s12 m6"><a href="fr/son/vortoj/ankaux.mp3" class="sm2_button"></a><span class="eo">ankaŭ</span>&nbsp;: aussi</p>
				<p class="col s12 m6"><a href="fr/son/vortoj/viziti.mp3" class="sm2_button"></a><span class="eo">viziti</span>&nbsp;: visiter</p>
				<p class="col s12 m6"><a href="fr/son/vortoj/segxo.mp3" class="sm2_button"></a><span class="eo">seĝo</span>&nbsp;: siège</p>
				<p class="col s12"><a href="fr/son/vortoj/tagmangxo.mp3" class="sm2_button"></a><span class="eo">tagmanĝo</span>&nbsp;: repas du midi (France : déjeuner, Canada : dîner)</p>
			</div>
		</fieldset>

		<p>
		Si vous rencontrez un terme inconnu qui n’est pas expliqué dans les
		listes de vocabulaire, ou si vous avez un doute,
		reportez-vous au <a href="fr/cge/vocabula.php">lexique général du cours</a>.
		</p>'
  WHERE l.kurso = 'CG' AND l.numero = 6 AND le.ordo = 8;

-- leçon 6, section 9
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<p><b>Vizito en zoologia ĝardeno</b></p>
		<p>
		  Kun miaj fratoj mi veturis per aŭto al la zoo (<i>zoologia ĝardeno</i>). Ĝi estas
		  ekster la urbo Granby (Kebekio*). Ni admiris tie multajn bestojn el
		  ĉiuj kontinentoj. Al mia frato tre plaĉis la ursoj apud la enirejo.
		  Inter la kaĝoj de la brunaj kaj blankaj ursoj estas la kaĝo de la
		  nigra urso el okcidenta Kanado. La blanka urso el la Arkto estis ofte
		  en la akvo. Por mi la grandaj simioj estis tre interesaj. Sen tiaj
		  bestoj zoo ne povas esti kompleta.
		</p>

		<p>* <span class="eo">Kebekio</span>&nbsp;: état du Québec</p>
		
		<fieldset class="vortoj">
			<legend>MOTS À RETENIR</legend>
			
			<p class="eo eta">Ces mots seront automatiquement ajoutés à votre vocabulaire à réviser lorsque vous aurez terminé d''étudier cette section.</p>
			
			<div class="vortlisto row">
				<p class="col s12 m6"><a href="fr/son/vortoj/veturi.mp3" class="sm2_button"></a><span class="eo">veturi</span>&nbsp;: aller<sup>[1]</sup></p>
				<p class="col s12 m6"><a href="fr/son/vortoj/urbo.mp3" class="sm2_button"></a><span class="eo">urbo</span>&nbsp;: ville</p>
				
				<p class="col s12 m6"><a href="fr/son/vortoj/admiri.mp3" class="sm2_button"></a><span class="eo">admiri</span>&nbsp;: admirer</p>
				<p class="col s12 m6"><a href="fr/son/vortoj/besto.mp3" class="sm2_button"></a><span class="eo">besto</span>&nbsp;: bête, animal</p>
				<p class="col s12 m6"><a href="fr/son/vortoj/multaj.mp3" class="sm2_button"></a><span class="eo">multaj</span>&nbsp;: beaucoup de, de nombreux</p>
				<p class="col s12 m6"><a href="fr/son/vortoj/kontinento.mp3" class="sm2_button"></a><span class="eo">kontinento</span>&nbsp;: continent</p>
				<p class="col s12 m6"><a href="fr/son/vortoj/placxi-al.mp3" class="sm2_button"></a><span class="eo">plaĉi al</span>&nbsp;: plaire à</p>
				<p class="col s12 m6"><a href="fr/son/vortoj/urso.mp3" class="sm2_button"></a><span class="eo">urso</span>&nbsp;: ours</p>
				<p class="col s12 m6"><a href="fr/son/vortoj/enirejo.mp3" class="sm2_button"></a><span class="eo">enirejo</span>&nbsp;: entrée</p>
				<p class="col s12 m6"><a href="fr/son/vortoj/kagxo.mp3" class="sm2_button"></a><span class="eo">kaĝo</span>&nbsp;: cage</p>
				<p class="col s12 m6"><a href="fr/son/vortoj/arkto.mp3" class="sm2_button"></a><span class="eo">Arkto</span>&nbsp;: Arctique</p>
				<p class="col s12 m6"><a href="fr/son/vortoj/ofte.mp3" class="sm2_button"></a><span class="eo">ofte</span>&nbsp;: souvent</p>
				<p class="col s12 m6"><a href="fr/son/vortoj/simio.mp3" class="sm2_button"></a><span class="eo">simio</span>&nbsp;: singe</p>
				<p class="col s12 m6"><a href="fr/son/vortoj/interesa.mp3" class="sm2_button"></a><span class="eo">interesa</span>&nbsp;: intéressant</p>
				<p class="col s12 m6"><a href="fr/son/vortoj/kompleta.mp3" class="sm2_button"></a><span class="eo">kompleta</span>&nbsp;: complet</p>
				<p class="col s12 m6"><a href="fr/son/vortoj/povi.mp3" class="sm2_button"></a><span class="eo">povi</span>&nbsp;: pouvoir, être capable de</p>
			</div>
			<p><small>[1]</small> par un moyen de locomotion quelconque</p>
		</fieldset>'
  WHERE l.kurso = 'CG' AND l.numero = 6 AND le.ordo = 9;

-- leçon 6, section 10
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<p class="parto">Dans cet exercice, vous devrez répondre à des questions sur les deux textes des pages précédentes. Voici de nouveau ces deux textes.</p>
		<p><b>Vojaĝo al Montrealo por la Esperanto-kongreso</b></p>
		<p>Mi estas membro de junulara esperantista klubo kaj mi partoprenis en
			  la Esperanto-kongreso, kiu okazis en Montrealo. Dum preskaŭ tri horoj
			  ni vojaĝis de Kebeko en nia aŭtobuseto kaj ne haltis, ĝis ni alvenis
			  al Montrealo. Tie ni ankaŭ vizitis esperantistajn amikojn. Por la
			  tagmanĝo ni manĝis sandviĉojn, kiuj estis sub la seĝoj, sur kiuj
			  ni sidis dum la vojaĝo.</p>
		<p><b>Vizito en zoologia ĝardeno</b></p>
		<p>
		  Kun miaj fratoj mi veturis per aŭto al la zoo (<i>zoologia ĝardeno</i>). ĝi estas
		  ekster la urbo Granby (Kebekio*). Ni admiris tie multajn bestojn el
		  ĉiuj kontinentoj. Al mia frato tre plaĉis la ursoj apud la enirejo.
		  Inter la kaĝoj de la brunaj kaj blankaj ursoj estas la kaĝo de la
		  nigra urso el okcidenta Kanado. La blanka urso el la Arkto estis ofte
		  en la akvo. Por mi la grandaj simioj estis tre interesaj. Sen tiaj
		  bestoj zoo ne povas esti kompleta.
		</p>

			##EKZERCO:24##		
		<fieldset class="vortoj">
			<legend>MOTS À RETENIR</legend>
			
			<p class="eo eta">Ces mots seront automatiquement ajoutés à votre vocabulaire à réviser lorsque vous aurez terminé d''étudier cette section.</p>
			
			<div class="vortlisto row">
				<p class="col s12 m6"><a href="fr/son/vortoj/membro.mp3" class="sm2_button"></a><span class="eo">membro</span>&nbsp;: membre, adhérent</p>
				<p class="col s12 m6"><a href="fr/son/vortoj/klubo.mp3" class="sm2_button"></a><span class="eo">klubo</span>&nbsp;: club</p>
			</div>
		</fieldset>'
  WHERE l.kurso = 'CG' AND l.numero = 6 AND le.ordo = 10;

-- leçon 6, section 11
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<p class="parto">On emploie tout simplement le verbe <span class="eo">esti</span> et, en général, on met le sujet
		après le verbe&nbsp;</p>
		
		<div class="row">
			<p class="col s5"><span class="eo">Estas pano en la butiko.</span></p><p class="col s7">Il y a du pain dans la boutique.</p>
			<p class="col s5"><span class="eo">Estas urso en la kaĝo.</span></p><p class="col s7">Un ours est dans la cage. Il y a un ours dans la cage.</p>
		</div>'
  WHERE l.kurso = 'CG' AND l.numero = 6 AND le.ordo = 11;

-- leçon 6, section 12
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##EKZERCO:25##'
  WHERE l.kurso = 'CG' AND l.numero = 6 AND le.ordo = 12;

-- leçon 6, section 13
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<p class="parto">
		Nous avons vu dans la deuxième leçon la façon d’indiquer le complément d’objet <i>direct</i> par la terminaison <b>-n</b>&nbsp;:<br>
		<span class="eo">Birdo kaptas insekto<b>n</b></span>. Cette forme s’appelle l’accusatif. </p>
		
		<p class="parto">Lorsqu’une phrase contient deux compléments d’objet, l’un des deux doit être un complément <i>indirect</i>. </p>
		<p>Par exemple :</p>
		<p><span class="eo">Mi aĉetas ŝuojn al la infanoj.</span>&nbsp;: J’achète des chaussures aux enfants.</p>

		<div class="row">
			<p class="col s6">Le complément d’objet direct :</p><p class="col s4"><span class="eo">ŝuojn</span></p>
			<p class="col s6">Le complément d’objet indirect :</p><p class="col s4"><span class="eo">al la infanoj</span></p>
		</div>

		<p>Généralement le complément indirect est introduit par une préposition et dans ce cas il ne prend pas la terminaison de l’accusatif.</p>'
  WHERE l.kurso = 'CG' AND l.numero = 6 AND le.ordo = 13;

-- leçon 6, section 14
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<p class="parto">
		L’espéranto se veut clair et concis. Aussi pouvez-vous remplacer, dans
		certains cas, une préposition par la forme de l’accusatif – pour
		indiquer le but du mouvement, le temps, la mesure ou le prix.
		</p>
		<p>Exemples :</p>
		<div class="vortlisto row">
			<p class="col s6"><span class="eo">Mi veturas al Montrealo.</span><br><i>ou</i>
			<br><span class="eo">Mi veturas Montrealon.</span></p>
			<p class="col s6">Je vais à Montréal.</p>
		</div>
		<div class="vortlisto row">
			<p class="col s6"><span class="eo">Mi vojaĝis dum unu semajno.</span><br><i>ou</i>
				<br><span class="eo">Mi vojaĝis unu semajnon.</span></p>
			<p class="col s6">J’ai voyagé [pendant] une semaine.</p>
		</div>
		<p class="parto">
		Notez que cette «disparition» de la préposition et son remplacement par
		l’accusatif est possible également pour certains compléments d’objet
		indirects s’il n’y a pas de risque de confusion avec un complément
		d’objet direct.
		</p>
		
		<div class="vortlisto row">
			<p class="col s6"><span class="eo">Ŝi multe helpis al mi.</span><br><i>ou</i>
			<br><span class="eo">Ŝi multe helpis min.</span></p>
			<p class="col s6">Elle m’a beaucoup aidé.</p>
		</div>
		<div class="vortlisto row">
			<p class="col s6"><span class="eo">Mi demandos al li pri tio.</span><br><i>ou</i>
			<br><span class="eo">Mi demandos lin pri tio.</span><br><i>ou</i>
			<br><span class="eo">Mi demandos tion al li.</span></p>
			<p class="col s6">Je lui demanderai cela, je l’interrogerai à ce sujet.</p>
		</div>'
  WHERE l.kurso = 'CG' AND l.numero = 6 AND le.ordo = 14;

-- leçon 6, section 15
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##EKZERCO:26##		
		<div class="vortlisto row">
			<p class="col s12"><span class="eo">la cetero</span>&nbsp;: le reste</p>
			<p class="col s12"><span class="eo">ferii</span>&nbsp;: passer ses vacances</p>
			<p class="col s12"><span class="eo">zorgi (pri)</span>&nbsp;: prendre soin (de), s’occuper (de)</p>
		</div>

		<p>* <span class="eo">je</span> = à, à propos de, en rapport avec, etc.</p>
		<p>
		Il s’agit d’une préposition «joker» dont le sens est indéterminé, ce qui
		veut dire qu’elle est utilisée lorsque aucune autre préposition ne
		convient.</p>

		<p>Exemples : </p>
		<div class="vortlisto row">
			<p class="col s12 m6"><span class="eo">Li kredas je Dio.</span> = Il croit en Dieu.</p>
			<p class="col s12 m6"><span class="eo">Je via sano!</span> = À votre santé&nbsp;!</p>
		</div>
		
		<p class="parto">On peut parfois utiliser <b>deux prépositions</b> à la suite l’une de l’autre
		pour nuancer le sens. </p>
		<p>Exemple : </p>
		<div class="vortlisto row">
			<p class="col s12"><span class="eo">La kato saltis <i>de sur</i> la tablo.</span> = Le chat a sauté de dessus la table.</p>
		</div>

		<p>
		Si une de ces prépositions est <span class="eo">al</span> – qui indique le but d’un mouvement
		– on aura plutôt recours à l’accusatif pour la remplacer.
		</p>
		<p>Exemples :</p>
		<div class="vortlisto row">
			<p class="col s12"><span class="eo">Ŝi iris <i>al en</i> la domo.</span> = <span class="eo">Ŝi iris en la domo<b>n</b>.</span></p>
			<p class="col s12"><span class="eo">La kato kuris <i>al sub</i> la tablo.</span> = <span class="eo">La kato kuris sub la tablo<b>n</b>.</span></p>
		</div>

		<p class="rimarko"><strong>REMARQUE</strong> : </p>
		<p>Cette affinité de l’accusatif avec l’idée de but d’un mouvement explique
		pourquoi il ne faut jamais utiliser l’accusatif après les prépositions
		qui indiquent déjà une direction ou un mouvement, comme <span class="eo">al</span>, <span class="eo">ĝis</span>
		ou <span class="eo">el</span>.</p>
		<p>Ainsi, l’on dira : <span class="eo">Ni veturas al Montrealo.</span> ou <span class="eo">Ni veturas
		Montrealon.</span> mais jamais <span class="eo">Ni veturas al Montrealon.</span> qui serait un
		pléonasme.</p>'
  WHERE l.kurso = 'CG' AND l.numero = 6 AND le.ordo = 15;

-- leçon 6, section 16
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<p class="parto">
		La question correspondant à ce complément de lieu avec mouvement sera
		naturellement <span class="eo">kien?</span>, c’est-à-dire <span class="eo">kie?</span> avec la terminaison
		d’accusatif. Tous les adverbes de lieu ont cette possibilité de montrer le but d’un mouvement en prenant la terminaison d’accusatif.
		</p>
		<p>Exemple :</p>
		<div class="vortlisto row">
			<p class="col s6"><span class="eo">Kien vi veturis?</span></p><p class="col s6">Où êtes-vous allés ?</p>
			<p class="col s5 offset-s1"><span class="eo">– Montrealon.</span></p><p class="col s6">à Montréal (<i>but du mouvement</i>)</p>
			<p class="col s5 offset-s1"><span class="eo">– ien.</span></p><p class="col s6">quelque part (<i>but du mouvement</i>)</p>
			<p class="col s5 offset-s1"><span class="eo">– nenien.</span></p><p class="col s6">nulle part (<i>but du mouvement</i>)</p>
			<p class="col s5 offset-s1"><span class="eo">– ĝardenen.</span></p><p class="col s6">au jardin (<i>but du mouvement</i>)</p>

			<p class="col s6"><span class="eo">Kie vi estas?</span></p><p class="col s6">Où êtes-vous ?</p>
			<p class="col s11 offset-s1"><span class="eo">– en Montrealo.</span></p>
			<p class="col s11 offset-s1"><span class="eo">– ie.</span></p>
			<p class="col s11 offset-s1"><span class="eo">– nenie.</span></p>
			<p class="col s5 offset-s1"><span class="eo">– ĝardene.</span></p>
		</div>
		<p>Cette opposition <span class="eo">kie</span>/<span class="eo">kien</span> vous rappellera peut-être</p>
		<p><i>dónde / a dónde</i> en espagnol</p>
		<p><i>ubi / quo</i> en latin</p>
		<p><i>wo / wohin</i> en allemand</p>
		<p><i>gde / kuda</i> en russe</p>'
  WHERE l.kurso = 'CG' AND l.numero = 6 AND le.ordo = 16;

-- leçon 6, section 17
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<p>Récapitulation des différents emplois de l’accusatif&nbsp;:</p>
		<p>1. complément d’objet direct, </p>
		<p>2. remplacement d’une préposition seule, </p>
		<p>3. remplacement de <em>al</em> dans une combinaison de deux prépositions, </p>
		<p>4. adverbe indiquant le mouvement vers un lieu.</p>

			##EKZERCO:27##'
  WHERE l.kurso = 'CG' AND l.numero = 6 AND le.ordo = 17;

-- leçon 6, section 18
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<p>
			Ouf&nbsp;! Cette leçon était bien longue. Toutefois elle consiste
			essentiellement en un approfondissement de notions déjà connues et
			elle n’a pas dû vous poser de problèmes insurmontables.
			</p>
			<p>
			Maintenant que nous avons entamé la deuxième moitié de ce cours, il
			n’est pas inutile de jeter un regard en arrière pour voir le chemin
			parcouru. Depuis combien de temps avez-vous commencé l’étude de ce
			cours&nbsp;? N’est-ce pas surprenant de voir tout ce que vous êtes déjà
			capable de comprendre et de dire&nbsp;? Évidemment vous n’avez pas
			nécessairement assimilé tout le vocabulaire que nous vous avons
			présenté mais vous sentez bien qu’à chaque leçon vous faites un grand
			pas en avant.
			</p>
	
<div class=''card-panel blue-grey lighten-5 konsilo''><p><i class=''material-icons left''>lightbulb_outline</i><strong>Conseil&nbsp;:</strong> n’ayez pas peur des erreurs. Une réponse fausse suivie de sa correction se retient souvent mieux qu’une réponse juste du premier coup&nbsp;: envoyez vos exercices sans attendre d’être sûr de vous. <a href=''helpo.php?section=kurso#konsiloj''>Nos conseils pour apprendre</a></p></div>
##RESUMO##'
  WHERE l.kurso = 'CG' AND l.numero = 6 AND le.ordo = 18;

-- leçon 7, section 1
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<p>
		Dans la deuxième leçon nous avons dit qu’il était facile d’élargir
		le vocabulaire de l’espéranto à l’aide d’affixes (préfixes et
		suffixes). Voici maintenant les affixes les plus courants, répartis
		sur trois pages, avec des exemples qui illustrent leur application.
		Contentez-vous de constater avec quelle facilité l’on construit de
		nouveaux mots tout en réduisant la masse du vocabulaire à apprendre
		par cœur. Un petit questionnaire à la fin de chaque page vous
		permettra de vérifier que vous avez compris.
		</p>

		
		<p class="eo eta"><b>NOTE </b>: Les mots précédés de <span class="marque">•</span> seront automatiquement ajoutés à votre vocabulaire à réviser lorsque vous aurez terminé d''étudier cette section.</p>
		

		<p class="parto">Les préfixes</p>

		<p><b>MAL</b> : <i>contraire, inverse</i></p>
		<div class="row">
			<p class="col s12"><span class="eo">amiko</span>&nbsp;: ami&emsp;→&emsp;<span class="eo">malamiko</span>&nbsp;: ennemi</p>
			<p class="col s12"><span class="marque">•</span> <span class="eo">fermi</span>&nbsp;: fermer&emsp;→&emsp;<span class="marque">•</span> <span class="eo">malfermi</span>&nbsp;: ouvrir</p>
			<p class="col s12"><span class="marque">•</span> <span class="eo">la malo</span>&nbsp;: le contraire</p>
		</div>

		<p><b>RE</b> : <i>répétition, retour en arrière</i></p>
		<div class="row">
			<p class="col s12"><span class="eo">fari</span>&nbsp;: faire&emsp;→&emsp; <span class="marque">•</span> <span class="eo">refari</span>&nbsp;: refaire</p>
			<p class="col s12"><span class="eo">veni</span>&nbsp;: venir&emsp;→&emsp; <span class="marque">•</span> <span class="eo">reveni</span>&nbsp;: revenir</p>
			<p class="col s12"><span class="marque">•</span> <span class="eo">ree</span>&nbsp;: de nouveau</p>
			<p class="col s12"><span class="eo">ĝis revido!</span>&nbsp;: au revoir !</p>
		</div>

		<p><b>EK</b> : <i>soudaineté d’une action commençante</i></p>
		<div class="row">
			<p class="col s12"><span class="marque">•</span>  <span class="eo">dormi</span>&nbsp;: dormir&emsp;→&emsp;<span class="marque">•</span>  <span class="eo">ekdormi</span>&nbsp;: s’endormir</p>
			<p class="col s12"><span class="marque">•</span>  <span class="eo">pluvi</span>&nbsp;: pleuvoir&emsp;→&emsp;<span class="marque">•</span>  <span class="eo">ekpluvi</span>&nbsp;: commencer à pleuvoir</p>
			<p class="col s12"><span class="marque">•</span>  <span class="eo">ek!</span>&nbsp;: allez !, en avant !, allons-y !, en route !</p>
		</div>

		<p><b>DIS</b> : <i>dispersion</i></p>
		<div class="row">
			<p class="col s12"><span class="marque">•</span>  <span class="eo">doni</span>&nbsp;: donner&emsp;→&emsp;<span class="marque">•</span>  <span class="eo">disdoni</span>&nbsp;: distribuer</p>
			<p class="col s12"><span class="marque">•</span>  <span class="eo">semi</span>&nbsp;: semer&emsp;→&emsp;<span class="marque">•</span>  <span class="eo">dissemi</span>&nbsp;: disséminer</p>
		</div>

		<p><b>GE</b> : <i>réunion des deux sexes</i></p>
		<div class="row">
			<p class="col s12"><span class="eo">patro</span>&nbsp;: père&emsp;→&emsp;<span class="marque">•</span> <span class="eo">gepatroj</span>&nbsp;: parents</p>
			<p class="col s12"><span class="marque">•</span> <span class="eo">sinjoro</span>&nbsp;: monsieur&emsp;→&emsp;<span class="marque">•</span> <span class="eo">gesinjoroj</span>&nbsp;: mesdames et messieurs</p>
			<p class="col s12"><span class="marque">•</span> <span class="eo">gea</span>&nbsp;: mixte</p>
		</div>

		<p class="parto">Trois suffixes pour parler d’une action</p>

		<p><b>IG</b> : <i>faire (devant un infinitif), rendre tel ou tel</i></p>
		<div class="row">
			<p class="col s12"><span class="eo">pura</span>&nbsp;: propre&emsp;→&emsp;<span class="eo"><span class="marque">•</span> purigi</span>&nbsp;: nettoyer (rendre propre)</p>
			<p class="col s12"><span class="eo"><span class="marque">•</span> morti</span>&nbsp;: mourir&emsp;→&emsp;<span class="eo"><span class="marque">•</span> mortigi</span>&nbsp;: tuer (faire mourir)</p>
			<p class="col s12"><span class="eo"><span class="marque">•</span> scii</span>&nbsp;: savoir&emsp;→&emsp;<span class="eo"><span class="marque">•</span> sciigi</span>&nbsp;: faire savoir, informer</p>
			<p class="col s12"><span class="eo">igi</span>&nbsp;: rendre (tel), faire (faire)</p>
		</div>

		<p><b>IĜ</b> : <i>devenir tel ou tel</i></p>
		<div class="row">
			<p class="col s12"><span class="eo"><span class="marque">•</span> sidi</span>&nbsp;: être assis&emsp;→&emsp;<span class="eo"><span class="marque">•</span> sidiĝi</span>&nbsp;: s’asseoir</p>
			<p class="col s12"><span class="eo">ruĝa</span>&nbsp;: rouge&emsp;→&emsp;<span class="eo"><span class="marque">•</span> ruĝiĝi</span>&nbsp;: rougir</p>
			<p class="col s12"><span class="eo"><span class="marque">•</span> iĝi</span>&nbsp;: devenir</p>
		</div>

		<p><b>AD</b> : <i>action qui dure ou se réitère</i></p>
		<div class="row">
			<p class="col s12"><span class="eo"><span class="marque">•</span> paroli</span>&nbsp;: parler&emsp;→&emsp;<span class="eo"><span class="marque">•</span> parolado</span>&nbsp;: discours</p>
			<p class="col s12"><span class="eo"><span class="marque">•</span> rigardi</span>&nbsp;: regarder&emsp;→&emsp;<span class="eo"><span class="marque">•</span> rigardadi</span>&nbsp;: contempler</p>
			<p class="col s12"><span class="eo"><span class="marque">•</span> kanti</span>&nbsp;: chanter&emsp;→&emsp;<span class="eo"><span class="marque">•</span> kantado</span>&nbsp;: action de chanter</p>
			<p class="col s12"><span class="eo"><span class="marque">•</span> ade</span>&nbsp;: sans arrêt</p>
		</div>

		<p class="parto">Vérifiez que vous avez compris&nbsp;:</p>
		##QCM:[{"question":"Que signifie <span class=''eo''>malbona</span>&nbsp;?","propositions":["très bon","mauvais","meilleur","bon de nouveau"],"reponse":2},{"question":"Que signifie <span class=''eo''>relegi</span> (<span class=''eo''>legi</span>&nbsp;= lire)&nbsp;?","propositions":["commencer à lire","lire mal","relire","lire sans arrêt"],"reponse":3},{"question":"Que signifie <span class=''eo''>ekkrii</span> (<span class=''eo''>krii</span>&nbsp;= crier)&nbsp;?","propositions":["s’écrier, pousser soudain un cri","crier de nouveau","crier sans arrêt","faire crier"],"reponse":1},{"question":"Que signifie <span class=''eo''>gefratoj</span> (<span class=''eo''>frato</span>&nbsp;= frère)&nbsp;?","propositions":["les frères","les sœurs","frères et sœurs","les amis"],"reponse":3},{"question":"Que signifie <span class=''eo''>disĵeti</span> (<span class=''eo''>ĵeti</span>&nbsp;= jeter, lancer)&nbsp;?","propositions":["jeter de nouveau","éparpiller, jeter de tous côtés","ne pas jeter","commencer à jeter"],"reponse":2},{"question":"Comment dit-on «&nbsp;agrandir, rendre plus grand&nbsp;» (<span class=''eo''>granda</span>&nbsp;= grand)&nbsp;?","propositions":["<span class=''eo''>grandiĝi</span>","<span class=''eo''>grandado</span>","<span class=''eo''>malgrandigi</span>","<span class=''eo''>grandigi</span>"],"reponse":4},{"question":"Que signifie <span class=''eo''>La pordo malfermiĝas.</span>&nbsp;?","propositions":["La porte s’ouvre.","On ferme la porte.","La porte ouvre quelqu’un.","La porte reste fermée."],"reponse":1},{"question":"Que signifie <span class=''eo''>dancado</span> (<span class=''eo''>danci</span>&nbsp;= danser)&nbsp;?","propositions":["danser de nouveau","commencer à danser","la danse, le fait de danser","faire danser"],"reponse":3}]##'
  WHERE l.kurso = 'CG' AND l.numero = 7 AND le.ordo = 1;

-- leçon 7, section 2
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<p>
		Continuons avec les suffixes. Ceux de cette page servent à désigner
		des personnes, des objets et des lieux.
		</p>

		
		<p class="eo eta"><b>NOTE </b>: Les mots précédés de <span class="marque">•</span> seront automatiquement ajoutés à votre vocabulaire à réviser lorsque vous aurez terminé d''étudier cette section.</p>
		

		<p class="parto">Les personnes</p>

		<p><b>IST</b> : <i>profession, activité habituelle</i>, pour un homme comme pour une femme</p>
		<div class="row">
			<p class="col s12"><span class="eo"><span class="marque">•</span> instrui</span>&nbsp;: enseigner&emsp;→&emsp;<span class="eo">instruisto</span>&nbsp;: enseignant, enseignante</p>
			<p class="col s12"><span class="eo">piano</span>&nbsp;: piano&emsp;→&emsp;<span class="eo"><span class="marque">•</span> pianisto</span>&nbsp;: pianiste</p>
			<p class="col s12"><span class="eo">esperantisto</span>&nbsp;: espérantiste</p>
		</div>

		<p><b>IN</b> : <i>sexe féminin</i></p>
		<div class="row">
			<p class="col s12"><span class="eo"><span class="marque">•</span> onklo</span>&nbsp;: oncle&emsp;→&emsp;<span class="eo"><span class="marque">•</span> onklino</span>&nbsp;: tante</p>
			<p class="col s12"><span class="eo"><span class="marque">•</span> ŝafo</span>&nbsp;: mouton&emsp;→&emsp;<span class="eo"><span class="marque">•</span> ŝafino</span>&nbsp;: brebis</p>
			<p class="col s12"><span class="eo"><span class="marque">•</span> ina</span>&nbsp;: féminin</p>
		</div>

		<p><b>UL</b> : <i>individu caractérisé par…</i></p>
		<div class="row">
			<p class="col s12"><span class="eo"><span class="marque">•</span> sankta</span>&nbsp;: saint&emsp;→&emsp;<span class="eo"><span class="marque">•</span> sanktulo</span>&nbsp;: un saint</p>
			<p class="col s12"><span class="eo">kontraŭ</span>&nbsp;: contre&emsp;→&emsp;<span class="eo">kontraŭulo</span>&nbsp;: un adversaire, un opposant</p>
			<p class="col s12"><span class="eo"><span class="marque">•</span> stulta</span>&nbsp;: stupide&emsp;→&emsp;<span class="eo"><span class="marque">•</span> stultulo</span>&nbsp;: un sot</p>
			<p class="col s12"><span class="eo"><span class="marque">•</span> kunulino</span>&nbsp;: compagne</p>
		</div>

		<p><b>AN</b> : <i>membre d’une collectivité, adhérent</i></p>
		<div class="row">
			<p class="col s12"><span class="eo"><span class="marque">•</span> Kanado</span>&nbsp;: Canada&emsp;→&emsp;<span class="eo"><span class="marque">•</span> kanadano</span>&nbsp;: Canadien</p>
			<p class="col s12"><span class="eo"><span class="marque">•</span> Kristo</span>&nbsp;: Christ&emsp;→&emsp;<span class="eo"><span class="marque">•</span> kristano</span>&nbsp;: chrétien</p>
			<p class="col s12"><span class="eo">rotariano</span>&nbsp;: rotarien (membre du Rotary)</p>
		</div>

		<p class="parto">Les objets et les lieux</p>

		<p><b>IL</b> : <i>outil, instrument</i></p>
		<div class="row">
			<p class="col s12"><span class="eo"><span class="marque">•</span> ŝlosi</span>&nbsp;: fermer à clef&emsp;→&emsp;<span class="eo"><span class="marque">•</span> ŝlosilo</span>&nbsp;: clef</p>
			<p class="col s12"><span class="eo"><span class="marque">•</span> razi</span>&nbsp;: raser&emsp;→&emsp;<span class="eo"><span class="marque">•</span> razilo</span>&nbsp;: rasoir</p>
			<p class="col s12"><span class="eo">sidi</span>&nbsp;: être assis&emsp;→&emsp;<span class="eo">sidilo</span>&nbsp;: siège</p>
			<p class="col s12"><span class="eo">komputi</span>&nbsp;: calculer&emsp;→&emsp;<span class="eo">komputilo</span>&nbsp;: ordinateur (vu en leçon 4)</p>
			<p class="col s12"><span class="eo"><span class="marque">•</span> ilo</span>&nbsp;: instrument</p>
		</div>

		<p><b>EJ</b> : <i>lieu caractéristique de l’action ou de l’objet concerné</i></p>
		<div class="row">
			<p class="col s12"><span class="eo">lerni</span>&nbsp;: apprendre&emsp;→&emsp;<span class="eo">lernejo</span>&nbsp;: école</p>
			<p class="col s12"><span class="eo">dormi</span>&nbsp;: dormir&emsp;→&emsp;<span class="eo"><span class="marque">•</span> dormejo</span>&nbsp;: dortoir</p>
			<p class="col s12"><span class="eo"><span class="marque">•</span> tombo</span>&nbsp;: tombe&emsp;→&emsp;<span class="eo"><span class="marque">•</span> tombejo</span>&nbsp;: cimetière</p>
			<p class="col s12"><span class="eo"><span class="marque">•</span> ejo</span>&nbsp;: local, salle</p>
		</div>

		<p><b>AĴ</b> : <i>chose concrète caractérisée par l’idée exprimée dans le radical</i></p>
		<div class="row">
			<p class="col s12"><span class="eo"><span class="marque">•</span> sendi</span>&nbsp;: envoyer&emsp;→&emsp;<span class="eo"><span class="marque">•</span> sendaĵo</span>&nbsp;: envoi (chose envoyée)</p>
			<p class="col s12"><span class="eo"><span class="marque">•</span> bovo</span>&nbsp;: bœuf&emsp;→&emsp;<span class="eo"><span class="marque">•</span> bovaĵo</span>&nbsp;: viande de bœuf</p>
			<p class="col s12"><span class="eo"><span class="marque">•</span> reala</span>&nbsp;: réel&emsp;→&emsp;<span class="eo"><span class="marque">•</span> realaĵo</span>&nbsp;: réalité, chose réelle</p>
		</div>

		<p><b>AR</b> : <i>collection de, ensemble de</i></p>
		<div class="row">
			<p class="col s12"><span class="eo"><span class="marque">•</span> vorto</span>&nbsp;: mot&emsp;→&emsp;<span class="eo"><span class="marque">•</span> vortaro</span>&nbsp;: dictionnaire</p>
			<p class="col s12"><span class="eo"><span class="marque">•</span> ŝafo</span>&nbsp;: mouton&emsp;→&emsp;<span class="eo"><span class="marque">•</span> ŝafaro</span>&nbsp;: troupeau de moutons</p>
			<p class="col s12"><span class="eo">arbo</span>&nbsp;: arbre&emsp;→&emsp;<span class="eo"><span class="marque">•</span> arbaro</span>&nbsp;: forêt</p>
			<p class="col s12"><span class="eo"><span class="marque">•</span> membraro</span>&nbsp;: les membres (d’une association)</p>
		</div>

		<p class="parto">Vérifiez que vous avez compris&nbsp;:</p>
		##QCM:[{"question":"Que signifie <span class=''eo''>kuiristo</span> (<span class=''eo''>kuiri</span>&nbsp;= cuisiner)&nbsp;?","propositions":["la cuisine (la pièce)","un cuisinier","un ustensile de cuisine","un plat cuisiné"],"reponse":2},{"question":"Que signifie <span class=''eo''>amikino</span>&nbsp;?","propositions":["une amie","l’amitié","un groupe d’amis","un ennemi"],"reponse":1},{"question":"Que signifie <span class=''eo''>riĉulo</span> (<span class=''eo''>riĉa</span>&nbsp;= riche)&nbsp;?","propositions":["la richesse","s’enrichir","une personne riche","très riche"],"reponse":3},{"question":"Que signifie <span class=''eo''>parizano</span> (<span class=''eo''>Parizo</span>&nbsp;= Paris)&nbsp;?","propositions":["une rue de Paris","un Parisien","la région parisienne","un guide de Paris"],"reponse":2},{"question":"Que signifie <span class=''eo''>tranĉilo</span> (<span class=''eo''>tranĉi</span>&nbsp;= couper)&nbsp;?","propositions":["une boucherie","un morceau coupé","un boucher","un couteau"],"reponse":4},{"question":"Comment dit-on «&nbsp;une boulangerie&nbsp;» (<span class=''eo''>baki</span>&nbsp;= cuire au four)&nbsp;?","propositions":["<span class=''eo''>bakisto</span>","<span class=''eo''>bakejo</span>","<span class=''eo''>bakilo</span>","<span class=''eo''>bakaĵo</span>"],"reponse":2},{"question":"Que signifie <span class=''eo''>trinkaĵo</span> (<span class=''eo''>trinki</span>&nbsp;= boire)&nbsp;?","propositions":["un buveur","un bar","une boisson","un verre"],"reponse":3},{"question":"Que signifie <span class=''eo''>homaro</span> (<span class=''eo''>homo</span>&nbsp;= être humain)&nbsp;?","propositions":["l’humanité","un homme","un petit homme","l’humour"],"reponse":1}]##'
  WHERE l.kurso = 'CG' AND l.numero = 7 AND le.ordo = 2;

-- leçon 7, section 3
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<p>
		Voici les derniers suffixes de cette leçon. Ils expriment une
		qualité, une taille, une tendance ou une possibilité.
		</p>

		
		<p class="eo eta"><b>NOTE </b>: Les mots précédés de <span class="marque">•</span> seront automatiquement ajoutés à votre vocabulaire à réviser lorsque vous aurez terminé d''étudier cette section.</p>
		

		<p class="parto">Les qualités et la taille</p>

		<p><b>EC</b> : <i>l’état, la qualité abstraite correspondant à l’idée exprimée dans la racine</i></p>
		<div class="row">
			<p class="col s12"><span class="eo">viro</span>&nbsp;: homme&emsp;→&emsp;<span class="eo"><span class="marque">•</span> vireco</span>&nbsp;: virilité</p>
			<p class="col s12"><span class="eo">verda</span>&nbsp;: vert&emsp;→&emsp;<span class="eo"><span class="marque">•</span> verdeco</span>&nbsp;: verdeur</p>
			<p class="col s12"><span class="eo">infano</span>&nbsp;: enfant&emsp;→&emsp;<span class="eo"><span class="marque">•</span> infaneco</span>&nbsp;: enfance</p>
		</div>

		<p><b>ET</b> : <i>diminutif</i></p>
		<div class="row">
			<p class="col s12"><span class="eo">bela</span>&nbsp;: beau&emsp;→&emsp;<span class="eo"><span class="marque">•</span> beleta</span>&nbsp;: joli</p>
			<p class="col s12"><span class="eo">varma</span>&nbsp;: chaud&emsp;→&emsp;<span class="eo"><span class="marque">•</span> varmeta</span>&nbsp;: tiède</p>
			<p class="col s12"><span class="eo">eta</span>&nbsp;: petit&emsp;→&emsp;<span class="eo"><span class="marque">•</span> iomete</span>&nbsp;: un petit peu</p>
		</div>

		<p><b>EG</b> : <i>augmentatif</i></p>
		<div class="row">
			<p class="col s12"><span class="eo"><span class="marque">•</span> vento</span>&nbsp;: vent&emsp;→&emsp;<span class="eo"><span class="marque">•</span> ventego</span>&nbsp;: tempête</p>
			<p class="col s12"><span class="eo"><span class="marque">•</span> ridi</span>&nbsp;: rire&emsp;→&emsp;<span class="eo"><span class="marque">•</span> ridegi</span>&nbsp;: se tordre (de rire)</p>
			<p class="col s12"><span class="eo"><span class="marque">•</span> ege</span>&nbsp;: extrêmement</p>
		</div>

		<p><b>UM</b> : <i>suffixe au sens indéterminé&nbsp;: chaque mot formé avec <b>-um-</b> s’apprend à part</i></p>
		<div class="row">
			<p class="col s12"><span class="eo"><span class="marque">•</span> kolo</span>&nbsp;: cou&emsp;→&emsp;<span class="eo"><span class="marque">•</span> kolumo</span>&nbsp;: col (de chemise)</p>
			<p class="col s12"><span class="eo"><span class="marque">•</span> plena</span>&nbsp;: plein&emsp;→&emsp;<span class="eo"><span class="marque">•</span> plenumi</span>&nbsp;: accomplir</p>
			<p class="col s12"><span class="eo"><span class="marque">•</span> umilo</span>&nbsp;: gadget</p>
		</div>

		<p class="parto">La tendance et la possibilité</p>

		<p><b>EM</b> : <i>le penchant, la tendance</i></p>
		<div class="row">
			<p class="col s12"><span class="eo"><span class="marque">•</span> ŝpari</span>&nbsp;: économiser&emsp;→&emsp;<span class="eo"><span class="marque">•</span> ŝparema</span>&nbsp;: économe</p>
			<p class="col s12"><span class="eo"><span class="marque">•</span> babili</span>&nbsp;: bavarder&emsp;→&emsp;<span class="eo"><span class="marque">•</span> babilema</span>&nbsp;: bavard</p>
			<p class="col s12"><span class="eo"><span class="marque">•</span> emi</span>&nbsp;: avoir tendance à</p>
		</div>

		<p><b>EBL</b> : <i>la possibilité passive («&nbsp;qui peut être…&nbsp;»)</i></p>
		<div class="row">
			<p class="col s12"><span class="eo">vidi</span>&nbsp;: voir&emsp;→&emsp;<span class="eo"><span class="marque">•</span> videbla</span>&nbsp;: visible</p>
			<p class="col s12"><span class="eo"><span class="marque">•</span> kredi</span>&nbsp;: croire&emsp;→&emsp;<span class="eo"><span class="marque">•</span> nekredebla</span>&nbsp;: incroyable</p>
			<p class="col s12"><span class="eo"><span class="marque">•</span> ebla</span>&nbsp;: possible</p>
			<p class="col s12"><span class="eo"><span class="marque">•</span> eble</span>&nbsp;: peut-être</p>
		</div>

		<p><b>IND</b> : <i>qui mérite d’être…, digne de…</i></p>
		<div class="row">
			<p class="col s12"><span class="eo">admiri</span>&nbsp;: admirer&emsp;→&emsp;<span class="eo"><span class="marque">•</span> admirinda</span>&nbsp;: admirable</p>
			<p class="col s12"><span class="eo">laŭdi</span>&nbsp;: louer&emsp;→&emsp;<span class="eo">laŭdinda</span>&nbsp;: louable</p>
		</div>

		<div class="card-panel blue lighten-5">
			<p><b>Et les autres affixes&nbsp;?</b></p>
			<p>L’espéranto possède encore d’autres préfixes et suffixes, moins
			fréquents. Inutile de les apprendre maintenant&nbsp;: vous en
			découvrirez plusieurs dans le cours <i>Gerda malaperis</i>, et les
			autres au fil de vos lectures. Lorsque vous rencontrerez un mot
			inconnu, essayez de le découper en radical et affixes&nbsp;: vous
			serez souvent surpris de le comprendre sans dictionnaire.</p>
		</div>

		<p class="parto">Vérifiez que vous avez compris&nbsp;:</p>
		##QCM:[{"question":"Que signifie <span class=''eo''>boneco</span>&nbsp;?","propositions":["très bon","la bonté","plutôt bon","mauvais"],"reponse":2},{"question":"Que signifie <span class=''eo''>dometo</span> (<span class=''eo''>domo</span>&nbsp;= maison)&nbsp;?","propositions":["une maisonnette","une grande maison","un quartier","un maçon"],"reponse":1},{"question":"Que signifie <span class=''eo''>varmega</span> (<span class=''eo''>varma</span>&nbsp;= chaud)&nbsp;?","propositions":["tiède","la chaleur","brûlant, très chaud","réchauffer"],"reponse":3},{"question":"Que signifie <span class=''eo''>laborema</span> (<span class=''eo''>labori</span>&nbsp;= travailler)&nbsp;?","propositions":["un atelier","qui peut être travaillé","un travailleur salarié","qui aime travailler, travailleur"],"reponse":4},{"question":"Que signifie <span class=''eo''>manĝebla</span> (<span class=''eo''>manĝi</span>&nbsp;= manger)&nbsp;?","propositions":["comestible, qui peut être mangé","gourmand","un repas","qui mérite d’être mangé"],"reponse":1},{"question":"Que signifie <span class=''eo''>vidinda</span> (<span class=''eo''>vidi</span>&nbsp;= voir)&nbsp;?","propositions":["visible","qui vaut la peine d’être vu","qui aime regarder","la vue"],"reponse":2},{"question":"Le suffixe <span class=''eo''>-um-</span>…","propositions":["indique toujours un outil","indique toujours un lieu","n’a pas de sens précis&nbsp;: chaque mot s’apprend à part","indique toujours une personne"],"reponse":3}]##'
  WHERE l.kurso = 'CG' AND l.numero = 7 AND le.ordo = 3;

-- leçon 7, section 4
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<p>
		L’espéranto est fascinant, n’est-ce pas ? Voici l’occasion de mettre à
		l’épreuve vos connaissances. Essayez de traduire en français les mots
		suivants construits à partir des affixes que nous venons de voir.
		Parfois vous comprendrez le sens en espéranto sans toutefois pouvoir
		trouver l’équivalent français exact&nbsp;: donnez alors votre propre
		explication.
		</p>
			##EKZERCO:28##'
  WHERE l.kurso = 'CG' AND l.numero = 7 AND le.ordo = 4;

-- leçon 7, section 5
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<p>Vous trouverez aussi qu’il est amusant de créer ses propres mots espéranto à partir des radicaux&nbsp;:</p>
			##EKZERCO:29##'
  WHERE l.kurso = 'CG' AND l.numero = 7 AND le.ordo = 5;

-- leçon 7, section 6
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<p><a href="fr/son/frazoj/se-junulo-ne-lernis.mp3" class="sm2_button"></a>
		Se junulo ne lernis, maljunulo ne scias.
		</p>
		<p><a href="fr/son/frazoj/juneco-ne-scias.mp3" class="sm2_button"></a>
		Juneco ne scias, maljuneco ne povas.
		</p>
		<p><a href="fr/son/frazoj/estro-ne-malsatas.mp3" class="sm2_button"></a>
		Estro ne malsatas.
		</p>
		
		<div class="vortlisto row">
			<p class="col s6"><span class="eo">se</span>&nbsp;: si (condition)</p>
			<p class="col s6"><span class="eo">sata</span>&nbsp;: rassasié, repu</p>
			<p class="col s6"><span class="eo">malsati</span>&nbsp;: avoir faim, souffrir de la faim</p>
		</div>
		<p class="parto">
		L’interprétation des proverbes est assez délicate car on y emploie des
		métaphores, une syntaxe et un rythme très particuliers.</p>
		<p>Par exemple,
		dans <span class="eo">juneco ne scias…</span>, on personnifie la jeunesse et la
		vieillesse.</p>
		<p>Dans <span class="eo">se junulo ne lernis…</span>, au delà du sens immédiat un
		peu obscur (si un jeune n’a pas appris, un vieillard ne sait pas) il
		faut comprendre que le jeune et le vieillard sont une seule et même
		personne : ce que l’on n’apprend pas étant jeune, on ne le saura
		jamais.</p>
		<p>Quant à <span class="eo">estro ne malsatas</span>, on ne sait pas s’il faut
		l’interpréter comme une simple constatation (un chef n’a pas faim),
		comme une revendication de chef (un chef n’a pas à souffrir de la
		faim), ou comme le sourd reproche d’un peuple affamé à ses chefs qui
		ne se privent de rien. Les proverbes sont de très courts poèmes aux
		multiples résonances.
		</p>'
  WHERE l.kurso = 'CG' AND l.numero = 7 AND le.ordo = 6;

-- leçon 7, section 7
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<p class="parto">
		Il y a deux questions fondamentales : «&nbsp;quelle heure est-il&nbsp;?&nbsp;» et
		«&nbsp;à quelle heure…&nbsp;?&nbsp;».
		</p>
		<div class="vortlisto row">
			<p class="col s12"><a href="fr/son/frazoj/kioma-horo-estas.mp3" class="sm2_button"></a>
				<span class="eo"><b>Kioma horo estas?</b></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Quelle heure est-il ?</p>
			<div class="col s12 row">
				<p class="col s4 m3"><img src="fr/cge/bildoj/2h.png" class="responsive-img" alt="estas la dua"></p>
				<p class="col s8 m9"><br><a href="fr/son/frazoj/estas-la-dua.mp3" class="sm2_button"></a><span class="eo">– Estas la dua.</span><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;– Il est deux heures.</p>
			</div>
			<div class="col s12 row">
				<p class="col s4 m3"><img src="fr/cge/bildoj/2h10.png" class="responsive-img" alt="estas la dua"></p>
				<p class="col s8 m9"><br><a href="fr/son/frazoj/estas-la-dua-kaj-dek.mp3" class="sm2_button"></a><span class="eo">– Estas la dua kaj dek.</span><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;– Il est deux heures dix.</p>
			</div>
			<div class="col s12 row">
				<p class="col s4 m3"><img src="fr/cge/bildoj/1h50.png" class="responsive-img" alt="estas la dua"></p>
				<p class="col s8 m9"><br><a href="fr/son/frazoj/estas-dek-antau-la-dua.mp3" class="sm2_button"></a><span class="eo">– Estas dek antaŭ la dua.</span><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;– Il est deux heures moins dix.</p>
			</div>
		</div>
		
		<p class="rimarko"><strong>REMARQUE</strong> : 
		  <span class="eo">La dua kaj dek</span> et <span class="eo">dek antaŭ la dua</span> sont des formes
		  raccourcies de
		  <span class="eo">la dua horo kaj dek minutoj</span> et 
		  <span class="eo">dek minutoj antaŭ la dua horo</span>.
		</p>
		
		<div class="vortlisto row">
			<p class="col s12 m6">
				<a href="fr/son/frazoj/je-kioma-horo-sxi-venis.mp3" class="sm2_button"></a>
				<span class="eo"><b>Je kioma horo</b> ŝi venis?</span></p><p class="col s12 m6">&nbsp;&nbsp;&nbsp;À quelle heure est-elle venue&nbsp;? </p>
			<p class="col s12 m6">
				<a href="fr/son/frazoj/sxi-venis-je-la-dua.mp3" class="sm2_button"></a>
				<span class="eo">– Ŝi venis je la dua.</span></p><p class="col s12 m6">&nbsp;&nbsp;&nbsp;– Elle est venue à deux heures.</p>
			<p class="col s12 m6">
				<a href="fr/son/frazoj/sxi-venis-je-la-dua-kaj-dek.mp3" class="sm2_button"></a>
				<span class="eo">– Ŝi venis je la dua kaj dek.</span></p><p class="col s12 m6">etc.</p>
			<p class="col s12">
				<a href="fr/son/frazoj/sxi-venis-je-dek-antau-la-dua.mp3" class="sm2_button"></a>
				<span class="eo">– Ŝi venis je dek antaŭ la dua.</span></p>
		</div>
		<p>
		Remarquez bien qu’on utilise la forme ordinale du numéral (la dua, la
		tria, la dek-unua…). On étend même cette forme à l’adverbe <span class="eo">kiom</span> qui
		devient ainsi l’adjectif <span class="eo">kioma</span> (<i>combien-ième</i>).
		</p>
		<p>
		Vous pouvez dire l’heure avec un nombre entre 1h et 24h, mais vous
		pouvez aussi vous limiter à 1h-12h avec un adverbe qui précise le
		moment de la journée&nbsp;:
		</p>
		<div class="vortlisto row">
			<p class="col s12 m6"><a href="fr/son/vortoj/nun.mp3" class="sm2_button"></a><span class="eo">nun</span>&nbsp;: maintenant</p>
			<p class="col s12 m6"><a href="fr/son/vortoj/nokte.mp3" class="sm2_button"></a><span class="eo">nokte</span>&nbsp;: de la nuit</p>
			<p class="col s12 m6"><a href="fr/son/vortoj/matene.mp3" class="sm2_button"></a><span class="eo">matene</span>&nbsp;: du matin</p>
			<p class="col s12 m6"><a href="fr/son/vortoj/vespere.mp3" class="sm2_button"></a><span class="eo">vespere</span>&nbsp;: du soir</p>
			<p class="col s12"><a href="fr/son/vortoj/antautagmeze.mp3" class="sm2_button"></a><span class="eo">antaŭtagmeze</span>&nbsp;: du matin (mot-à-mot&nbsp;: <i>de l’avant-midi</i>)</p>
			<p class="col s12"><a href="fr/son/vortoj/posttagmeze.mp3" class="sm2_button"></a><span class="eo">posttagmeze</span>&nbsp;: de l’après-midi</p>
		</div>
		
		<p>Exemples :</p>
		<div class="row">
			<p class="col s12"><a href="fr/son/frazoj/sxi-dancis-gxis.mp3" class="sm2_button"></a><span class="eo">Ŝi dancis ĝis la dua nokte</span> (aŭ : <span class="eo">matene</span>).</p>
			<p class="col s11 offset-s1">= Elle a dansé jusqu’à deux heures du matin.</p>
			<p class="col s12"><a href="fr/son/frazoj/mi-ofte-mangxas.mp3" class="sm2_button"></a><span class="eo">Mi ofte tagmanĝas je la unua posttagmeze.</span></p>
			<p class="col s11 offset-s1">= Je déjeune souvent à une heure de l’après-midi.</p>
			<p class="col s12"><a href="fr/son/frazoj/mi-iras-labori.mp3" class="sm2_button"></a><span class="eo">Mi iras labori je la sepa matene kaj revenas je la oka vespere.</span></p>
			<p class="col s11 offset-s1">= Je pars travailler à 7h du matin et je reviens à 8h du soir.</p>
		</div>

		<p>Enfin notez quelques cas particuliers :</p>
		<div class="vortlisto row">
			<div class="col s12 row">
				<p class="col s4 m3"><img src="fr/cge/bildoj/2h15.png" class="responsive-img" alt="estas la dua kaj kvarono"></p>
				<p class="col s8 m9"><br><span class="eo">la dua kaj kvarono</span> = <span class="eo">la dua kaj dek kvin</span></p>
			</div>
			<div class="col s12 row">
				<p class="col s4 m3"><img src="fr/cge/bildoj/2h30.png" class="responsive-img" alt="estas la dua kaj duono"></p>
				<p class="col s8 m9"><span class="eo"><br>la dua kaj duono</span> = <span class="eo">la dua kaj tridek</span></p>
			</div>
			<div class="col s12 row">
				<p class="col s4 m3"><img src="fr/cge/bildoj/2h45.png" class="responsive-img" alt="estas kvarono antau la tria"></p>
				<p class="col s8 m9"><span class="eo"><br>kvarono antaŭ la tria</span> = <span class="eo">la dua kaj kvardek kvin</span></p>
			</div>
			<p class="s12"><span class="eo">je la kioma…?</span> = <span class="eo">je kioma horo…?</span></p>
			<p class="s12"><span class="eo">la kioma estas?</span> = <span class="eo">kioma horo estas?</span></p>
			<p class="s12"><span class="eo">tagmezo</span> = midi (<i>milieu du jour</i>)</p>
			<p class="s12"><span class="eo">noktomezo</span> = minuit (<i>milieu de la nuit</i>)</p>
		</div>'
  WHERE l.kurso = 'CG' AND l.numero = 7 AND le.ordo = 7;

-- leçon 7, section 8
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##EKZERCO:30##
		<br>
		<div class="row">
			<p class="col s6 m3 center-align"><img class="responsive-img" src="fr/cge/bildoj/9h45.jpg"><br>-1-</p>
			<p class="col s6 m3 center-align"><img class="responsive-img" src="fr/cge/bildoj/6h00.jpg"><br>-2-</p>
			<p class="col s6 m3 center-align"><img class="responsive-img" src="fr/cge/bildoj/3h30.jpg"><br>-3-</span></p>
			<p class="col s6 m3 center-align"><img class="responsive-img" src="fr/cge/bildoj/17h58.jpg"><br>-4-</p>
		</div>

			##EKZERCO:31##'
  WHERE l.kurso = 'CG' AND l.numero = 7 AND le.ordo = 8;

-- leçon 7, section 9
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<p class="parto">Voici un tableau récapitulatif du vocabulaire que vous avez vu dans cette leçon.</p>
		
		<p class="eo eta">Ces mots ont été automatiquement ajoutés à votre vocabulaire à réviser.</p>
		

			<fieldset class="vortoj">
				<div class="vortlisto row">
					<div class="col s12 m6">
						<p><a href="fr/son/vortoj/doni.mp3" class="sm2_button"></a><span class="eo">doni</span>&nbsp;: donner<br>
						   <a href="fr/son/vortoj/disdoni.mp3" class="sm2_button"></a><span class="eo">disdoni</span>&nbsp;: distribuer</p>
						<p><a href="fr/son/vortoj/semi.mp3" class="sm2_button"></a><span class="eo">semi</span>&nbsp;: semer<br>
						   <a href="fr/son/vortoj/dissemi.mp3" class="sm2_button"></a><span class="eo">dissemi</span>&nbsp;: disséminer</p>
						<p><a href="fr/son/vortoj/dormi.mp3" class="sm2_button"></a><span class="eo">dormi</span>&nbsp;: dormir<br>
						   <a href="fr/son/vortoj/ekdormi.mp3" class="sm2_button"></a><span class="eo">ekdormi</span>&nbsp;: s’endormir</p>
						<p><a href="fr/son/vortoj/pluvi.mp3" class="sm2_button"></a><span class="eo">pluvi</span>&nbsp;: pleuvoir<br>
						   <a href="fr/son/vortoj/ekpluvi.mp3" class="sm2_button"></a><span class="eo">ekpluvi</span>&nbsp;: commencer à pleuvoir</p>
						<p><a href="fr/son/vortoj/ek.mp3" class="sm2_button"></a><span class="eo">ek!</span>&nbsp;: allez&nbsp;!, en avant&nbsp;!, allons-y&nbsp;!, en route&nbsp;!</p>
						<p><a href="fr/son/vortoj/gepatroj.mp3" class="sm2_button"></a><span class="eo">gepatroj</span>&nbsp;: parents</p>
						<p><a href="fr/son/vortoj/sinjoro.mp3" class="sm2_button"></a><span class="eo">sinjoro</span>&nbsp;: monsieur<br>
						   <a href="fr/son/vortoj/gesinjoroj.mp3" class="sm2_button"></a><span class="eo">gesinjoroj</span>&nbsp;: mesdames et messieurs</p>
						<p><a href="fr/son/vortoj/gea.mp3" class="sm2_button"></a><span class="eo">gea</span>&nbsp;: mixte</p>
						<p><a href="fr/son/vortoj/fermi.mp3" class="sm2_button"></a><span class="eo">fermi</span>&nbsp;: fermer<br>
						   <a href="fr/son/vortoj/malfermi.mp3" class="sm2_button"></a><span class="eo">malfermi</span>&nbsp;: ouvrir</p>
						<p><a href="fr/son/vortoj/la-malo.mp3" class="sm2_button"></a><span class="eo">la malo</span>&nbsp;: le contraire</p>
						<p><a href="fr/son/vortoj/paroli.mp3" class="sm2_button"></a><span class="eo">paroli</span>&nbsp;: parler<br>
						   <a href="fr/son/vortoj/parolado.mp3" class="sm2_button"></a><span class="eo">parolado</span>&nbsp;: discours</p>
						<p><a href="fr/son/vortoj/rigardi.mp3" class="sm2_button"></a><span class="eo">rigardi</span>&nbsp;: regarder<br>
						   <a href="fr/son/vortoj/rigardadi.mp3" class="sm2_button"></a><span class="eo">rigardadi</span>&nbsp;: contempler</p>
						<p><a href="fr/son/vortoj/kanti.mp3" class="sm2_button"></a><span class="eo">kanti</span>&nbsp;: chanter<br>
						   <a href="fr/son/vortoj/kantado.mp3" class="sm2_button"></a><span class="eo">kantado</span>&nbsp;: action de chanter</p>
						<p><a href="fr/son/vortoj/ade.mp3" class="sm2_button"></a><span class="eo">ade</span>&nbsp;: sans arrêt</p>
						<p><a href="fr/son/vortoj/sendi.mp3" class="sm2_button"></a><span class="eo">sendi</span>&nbsp;: envoyer<br>
						   <a href="fr/son/vortoj/sendajxo.mp3" class="sm2_button"></a><span class="eo">sendaĵo</span>&nbsp;: envoi (chose envoyée)</p>
						<p><a href="fr/son/vortoj/bovo.mp3" class="sm2_button"></a><span class="eo">bovo</span>&nbsp;: bœuf<br>
						   <a href="fr/son/vortoj/bovajxo.mp3" class="sm2_button"></a><span class="eo">bovaĵo</span>&nbsp;: viande de bœuf</p>
						<p><a href="fr/son/vortoj/reala.mp3" class="sm2_button"></a><span class="eo">reala</span>&nbsp;: réel<br>
						   <a href="fr/son/vortoj/realajxo.mp3" class="sm2_button"></a><span class="eo">realaĵo</span>&nbsp;: réalité, chose réelle</p>
						<p><a href="fr/son/vortoj/kanado.mp3" class="sm2_button"></a><span class="eo">Kanado</span>&nbsp;: Canada<br>
						   <a href="fr/son/vortoj/kanadano.mp3" class="sm2_button"></a><span class="eo">kanadano</span>&nbsp;: Canadien</p>
						<p><a href="fr/son/vortoj/kristo.mp3" class="sm2_button"></a><span class="eo">Kristo</span>&nbsp;: Christ<br>
						   <a href="fr/son/vortoj/kristano.mp3" class="sm2_button"></a><span class="eo">kristano</span>&nbsp;: chrétien</p>
						<p><a href="fr/son/vortoj/vorto.mp3" class="sm2_button"></a><span class="eo">vorto</span>&nbsp;: mot<br>
						   <a href="fr/son/vortoj/vortaro.mp3" class="sm2_button"></a><span class="eo">vortaro</span>&nbsp;: dictionnaire</p>
						<p><a href="fr/son/vortoj/sxafo.mp3" class="sm2_button"></a><span class="eo">ŝafo</span>&nbsp;: mouton<br>
						   <a href="fr/son/vortoj/sxafaro.mp3" class="sm2_button"></a><span class="eo">ŝafaro</span>&nbsp;: troupeau de moutons</p>
						<p><a href="fr/son/vortoj/membraro.mp3" class="sm2_button"></a><span class="eo">membraro</span>&nbsp;: les membres (d’une association)</p>
						<p><a href="fr/son/vortoj/ebla.mp3" class="sm2_button"></a><span class="eo">ebla</span>&nbsp;: possible<br>
						   <a href="fr/son/vortoj/eble.mp3" class="sm2_button"></a><span class="eo">eble</span>&nbsp;: peut-être</p>
						<p><a href="fr/son/vortoj/vireco.mp3" class="sm2_button"></a><span class="eo">vireco</span>&nbsp;: virilité</p>
						<p><a href="fr/son/vortoj/verdeco.mp3" class="sm2_button"></a><span class="eo">verdeco</span>&nbsp;: verdeur</p>
						<p><a href="fr/son/vortoj/infaneco.mp3" class="sm2_button"></a><span class="eo">infaneco</span>&nbsp;: enfance</p>
						<p><a href="fr/son/vortoj/vento.mp3" class="sm2_button"></a><span class="eo">vento</span>&nbsp;: vent<br>
						   <a href="fr/son/vortoj/ventego.mp3" class="sm2_button"></a><span class="eo">ventego</span>&nbsp;: tempête</p>
						<p><a href="fr/son/vortoj/ridi.mp3" class="sm2_button"></a><span class="eo">ridi</span>&nbsp;: rire<br>
						   <a href="fr/son/vortoj/ridegi.mp3" class="sm2_button"></a><span class="eo">ridegi</span>&nbsp;: se tordre (de rire)</p>
						<p><a href="fr/son/vortoj/ege.mp3" class="sm2_button"></a><span class="eo">ege</span>&nbsp;: extrêmement</p>
						<p><a href="fr/son/vortoj/tombo.mp3" class="sm2_button"></a><span class="eo">tombo</span>&nbsp;: tombe<br>
						   <a href="fr/son/vortoj/tombejo.mp3" class="sm2_button"></a><span class="eo">tombejo</span>&nbsp;: cimetière</p>
						<p><a href="fr/son/vortoj/ejo.mp3" class="sm2_button"></a><span class="eo">ejo</span>&nbsp;: local, salle</p>
						<p><a href="fr/son/vortoj/sxpari.mp3" class="sm2_button"></a><span class="eo">ŝpari</span>&nbsp;: économiser<br>
						   <a href="fr/son/vortoj/sxparema.mp3" class="sm2_button"></a><span class="eo">ŝparema</span>&nbsp;: économe</p>
					</div>
					<div class="col s12 m6">
						<p><a href="fr/son/vortoj/babili.mp3" class="sm2_button"></a><span class="eo">babili</span>&nbsp;: bavarder<br>
						   <a href="fr/son/vortoj/babilema.mp3" class="sm2_button"></a><span class="eo">babilema</span>&nbsp;: bavard</p>
						<p><a href="fr/son/vortoj/emi.mp3" class="sm2_button"></a><span class="eo">emi</span>&nbsp;: avoir tendance à</p>
						<p><a href="fr/son/vortoj/beleta.mp3" class="sm2_button"></a><span class="eo">beleta</span>&nbsp;: joli</p>
						<p><a href="fr/son/vortoj/varmeta.mp3" class="sm2_button"></a><span class="eo">varmeta</span>&nbsp;: tiède</p>
						<p><a href="fr/son/vortoj/iomete.mp3" class="sm2_button"></a><span class="eo">iomete</span>&nbsp;: un petit peu</p>
						<p><a href="fr/son/vortoj/purigi.mp3" class="sm2_button"></a><span class="eo">purigi</span>&nbsp;: nettoyer (rendre propre)</p>
						<p><a href="fr/son/vortoj/morti.mp3" class="sm2_button"></a><span class="eo">morti</span>&nbsp;: mourir<br>
						   <a href="fr/son/vortoj/mortigi.mp3" class="sm2_button"></a><span class="eo">mortigi</span>&nbsp;: tuer (faire mourir)</p>
						<p><a href="fr/son/vortoj/scii.mp3" class="sm2_button"></a><span class="eo">scii</span>&nbsp;: savoir<br>
						   <a href="fr/son/vortoj/sciigi.mp3" class="sm2_button"></a><span class="eo">sciigi</span>&nbsp;: faire savoir, informer</p>
						<p><a href="fr/son/vortoj/sidi.mp3" class="sm2_button"></a><span class="eo">sidi</span>&nbsp;: être assis<br>
						   <a href="fr/son/vortoj/sidigxi.mp3" class="sm2_button"></a><span class="eo">sidiĝi</span>&nbsp;: s’asseoir<br>
						   <a href="fr/son/vortoj/sidilo.mp3" class="sm2_button"></a><span class="eo">sidilo</span>&nbsp;: siège</p>
						<p><a href="fr/son/vortoj/rugxigxi.mp3" class="sm2_button"></a><span class="eo">ruĝiĝi</span>&nbsp;: rougir</p>
						<p><a href="fr/son/vortoj/igxi.mp3" class="sm2_button"></a><span class="eo">iĝi</span>&nbsp;: devenir</p>
						<p><a href="fr/son/vortoj/sxlosi.mp3" class="sm2_button"></a><span class="eo">ŝlosi</span>&nbsp;: fermer à clef<br>
						   <a href="fr/son/vortoj/sxlosilo.mp3" class="sm2_button"></a><span class="eo">ŝlosilo</span>&nbsp;: clef</p>
						<p><a href="fr/son/vortoj/razi.mp3" class="sm2_button"></a><span class="eo">razi</span>&nbsp;: raser<br>
						   <a href="fr/son/vortoj/razilo.mp3" class="sm2_button"></a><span class="eo">razilo</span>&nbsp;: rasoir</p>
						<p><a href="fr/son/vortoj/ilo.mp3" class="sm2_button"></a><span class="eo">ilo</span>&nbsp;: instrument</p>
						<p><a href="fr/son/vortoj/onklo.mp3" class="sm2_button"></a><span class="eo">onklo</span>&nbsp;: oncle<br>
						   <a href="fr/son/vortoj/onklino.mp3" class="sm2_button"></a><span class="eo">onklino</span>&nbsp;: tante</p>
						<p><a href="fr/son/vortoj/sxafino.mp3" class="sm2_button"></a><span class="eo">ŝafino</span>&nbsp;: brebis</p>
						<p><a href="fr/son/vortoj/ina.mp3" class="sm2_button"></a><span class="eo">ina</span>&nbsp;: féminin</p>
						<p><a href="fr/son/vortoj/admiri.mp3" class="sm2_button"></a><span class="eo">admiri</span>&nbsp;: admirer<br>
						   <a href="fr/son/vortoj/admirinda.mp3" class="sm2_button"></a><span class="eo">admirinda</span>&nbsp;: admirable</p>
						<p><a href="fr/son/vortoj/instrui.mp3" class="sm2_button"></a><span class="eo">instrui</span>&nbsp;: enseigner<br>
							<a href="fr/son/vortoj/instruisto.mp3" class="sm2_button"></a><span class="eo">instruisto</span>&nbsp;: enseignant, enseignante</p>
						<p><a href="fr/son/vortoj/duonhoro.mp3" class="sm2_button"></a><span class="eo">duonhoro</span>&nbsp;: demi-heure</p>
						<p><a href="fr/son/vortoj/sankta.mp3" class="sm2_button"></a><span class="eo">sankta</span>&nbsp;: saint<br>
						   <a href="fr/son/vortoj/sanktulo.mp3" class="sm2_button"></a><span class="eo">sanktulo</span>&nbsp;: un saint</p>
						<p><a href="fr/son/vortoj/stulta.mp3" class="sm2_button"></a><span class="eo">stulta</span>&nbsp;: stupide<br>
						   <a href="fr/son/vortoj/stultulo.mp3" class="sm2_button"></a><span class="eo">stultulo</span>&nbsp;: un sot</p>
						<p><a href="fr/son/vortoj/kunulino.mp3" class="sm2_button"></a><span class="eo">kunulino</span>&nbsp;: compagne</p>
						<p><a href="fr/son/vortoj/kolo.mp3" class="sm2_button"></a><span class="eo">kolo</span>&nbsp;: cou<br>
						   <a href="fr/son/vortoj/kolumo.mp3" class="sm2_button"></a><span class="eo">kolumo</span>&nbsp;: col (de chemise)</p>
						<p><a href="fr/son/vortoj/plena.mp3" class="sm2_button"></a><span class="eo">plena</span>&nbsp;: plein<br>
						   <a href="fr/son/vortoj/plenumi.mp3" class="sm2_button"></a><span class="eo">plenumi</span>&nbsp;: accomplir</p>
						<p><a href="fr/son/vortoj/umilo.mp3" class="sm2_button"></a><span class="eo">umilo</span>&nbsp;: gadget</p>
					</div>
				</div>
			</fieldset>'
  WHERE l.kurso = 'CG' AND l.numero = 7 AND le.ordo = 9;

-- leçon 7, section 10
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<p>
			Dans cette leçon vous avez fait connaissance avec l’une des
			caractéristiques les plus originales de l’espéranto&#160;: la dérivation.
			Avec la pratique l’utilisation des préfixes et suffixes vous paraîtra
			tellement naturelle que vous n’y ferez même plus attention.
			</p>

		<div class=''card-panel blue-grey lighten-5 konsilo''><p><i class=''material-icons left''>lightbulb_outline</i><strong>Conseil&nbsp;:</strong> apprenez les mots en phrases. <span class=''eo''>Mi trinkas kafon</span> se retient mieux que «&nbsp;<span class=''eo''>trinki</span>&nbsp;: boire&nbsp;». Inventez une phrase avec chaque nouveau mot, si possible sur votre propre vie, par exemple avec les mots que vous venez de créer grâce aux suffixes. <a href=''helpo.php?section=kurso#konsiloj''>Nos conseils pour apprendre</a></p></div>
##RESUMO##'
  WHERE l.kurso = 'CG' AND l.numero = 7 AND le.ordo = 10;

-- leçon 8, section 1
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<p class="parto">
			Maintenant, il ne nous reste que quelques terminaisons grammaticales à
			apprendre avant de pouvoir lire couramment en espéranto. Nous avons vu
			que les verbes se terminent en <b>-as</b> (présent), <b>-is</b> (passé), 
			<b>-os</b> (futur). Il y a aussi&nbsp;:
			</p>
			<div class="row vortlisto">
				<p class="col s4">le <b>conditionnel</b> :</p>
				<p class="col s1"><b>-us</b></p>
				<p class="col s7"><span class="eo">Se mi est<b>us</b> riĉa, mi vojaĝ<b>us</b> multe.</span></p>
				<p class="col s7 offset-s5">= Si j’étais riche, je voyagerais beaucoup.</p>
			</div>
			<div class="row">
				<p class="col s12">et</p>
			</div>
			<div class="row vortlisto">
				<p class="col s4">l’<b>impératif-subjonctif</b> :</p>
				<p class="col s1"><b>-u</b></p>
				<p class="col s7"><span class="eo">Ferm<b>u</b> la pordon kaj sidiĝ<b>u</b>!</span></p>
				<p class="col s7 offset-s5">= Ferme la porte et assieds-toi !</p>
				<p class="col s7 offset-s5"><span class="eo">Li ferm<b>u</b> la pordon kaj sidiĝ<b>u</b>!</span></p>
				<p class="col s7 offset-s5">= Qu’il ferme la porte et qu’il s’asseye !</p>
				<p class="col s7 offset-s5"><span class="eo">Mi volas, ke vi ven<b>u</b>.</span></p>
				<p class="col s7 offset-s5">= Je veux que tu viennes.</p>
			</div>
	
			<p class="rimarko"><strong>REMARQUE</strong> : 
			Remarquez que, contrairement au français :</p>
			<p><b>1.</b> Le conditionnel s’applique aux deux propositions de la phrase et pas seulement à la dernière.</p>
			<p><b>2.</b> Le conditionnel ne s’utilise pas pour montrer le futur dans le passé.</p>
			<div class="row">
				<p class="col s11 offset-s1">Je crois qu’il viendra. : <span class="eo">Mi kredas, ke li venos.</span></p>
				<p class="col s11 offset-s1">Je croyais qu’il viendrait. :  <span class="eo">Mi kredis, ke li ven<b>os</b>.</span></p>
			</div>'
  WHERE l.kurso = 'CG' AND l.numero = 8 AND le.ordo = 1;

-- leçon 8, section 2
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<a id="participes" class="scrollspy"></a>

			<p class="parto">Enfin, il reste les <b>participes</b> (mots qui s’emploient comme verbes, adjectifs, adverbes ou noms)&nbsp;:
			</p>
	
			<div class="row vortlisto">
				<p class="col s12"><b>Ce qui fait l’action</b> (participes «actifs»)</p>
				<div class="col s12 row">
					<p class="col s3 m2 l2">action en cours&nbsp;:<br>
					<b>-ant</b></p>
					<p class="col s9 m7 l6"><span class="eo">Ŝi estas leg<b>ant</b>a.</span><br>= Elle est lisant (en train de lire).</p>
					<p class="col s9 offset-s3 m3 l4"><img src="fr/cge/bildoj/leganta.jpg" class="responsive-img" alt="Ŝi estas leganta."></p>
				</div>
				<div class="col s12 row">
					<p class="col s3 m2 l2">action terminée&nbsp;:<br>
						<b>-int</b></p>
					<p class="col s9 m7 l6"><span class="eo">Ŝi estas leg<b>int</b>a.</span>
						<br>= Elle est ayant lu (elle a lu, elle a fini de lire).</p>
					<p class="col s9 offset-s3 m3 l4"><img src="fr/cge/bildoj/leginta.jpg" class="responsive-img" alt="Ŝi estas leginta."><br></p>
				</div>
				<div class="col s12 row">
					<p class="col s3 m2 l2">action à venir&nbsp;:<br>
						<b>-ont</b></p>
					<p class="col s9 m7 l6"><span class="eo">Ŝi estas leg<b>ont</b>a.</span><br>= Elle est devant lire (sur le point de lire).<br>
					<p class="col s9 offset-s3 m3 l4"><img src="fr/cge/bildoj/legonta.jpg" class="responsive-img" alt="Ŝi estas legonta.">
					</p>
				</div>
			</div>
			<div class="row vortlisto">
				<p class="col s12"><b>Ce qui subit l’action</b> (participes «passifs»)</p>
				<div class="col s12 row">
					<p class="col s3 m2 l2">action en cours&nbsp;:<br>
						<b>-at</b></p>
					<p class="col s9 m7 l6"><span class="eo">La libro estas leg<b>at</b>a.</span><br>= Le livre est en train d’être lu.</p>
					<p class="col s9 offset-s3 m3 l4"><img src="fr/cge/bildoj/legata.jpg" class="responsive-img" alt="La libro estas legata.">
					</p>
				</div>
				<div class="col s12 row">
					<p class="col s3 m2 l2">action terminée&nbsp;:<br>
						<b>-it</b></p>
					<p class="col s9 m7 l6"><span class="eo">La libro estas leg<b>it</b>a.</span>
						<br>= Le livre a été lu.</p>
						<p class="col s9 offset-s3 m3 l4"><img src="fr/cge/bildoj/legita.jpg" class="responsive-img" alt="La libro estas legita."></p>
				</div>
				<div class="col s12 row">
					<p class="col s3 m2 l2">action à venir&nbsp;:<br>
						<b>-ot</b></p>
					<p class="col s9 m7 l6"><span class="eo">La libro estas leg<b>ot</b>a.</span><br>= Le livre va être lu (à lire).</p>
					<p class="col s9 offset-s3 m3 l4"><img src="fr/cge/bildoj/legota.jpg" class="responsive-img" alt="La libro estas legota.">
					</p>
				</div>
			</div>
			
			<p class="parto">Ces participes peuvent prendre la terminaison du pluriel. Par exemple : </p>
			<div class="row">
				<p class="col s12"><span class="eo">Ili estas legantaj.</span>&nbsp;: Ils sont en train de lire.</p>
				<p class="col s12"><span class="eo">Ili estas legintaj.</span>&nbsp;: Ils ont lu.</p>
				<p class="col s12"><span class="eo">La libroj estas legataj.</span>&nbsp;: Les livres sont lus (= en train d’être lus).</p>
			</div>

			<p class="parto">En résumé :</p>
			<div class="row">
				<p class="col s12 l6"><span class="eo">leg<b>ant</b>a</span> = <span class="eo">kiu legas</span> = qui lit, lisant</p>
				<p class="col s12 l6"><span class="eo">leg<b>ant</b>aj</span> = <span class="eo">kiuj legas</span> = qui lisent, lisant</p>
			</div>
			<div class="row">
				<p class="col s12 l6"><span class="eo">leg<b>int</b>a</span> = <span class="eo">kiu legis</span> = qui a lu, ayant lu</p>
				<p class="col s12 l6"><span class="eo">leg<b>int</b>aj</span> = <span class="eo">kiuj legis</span> = qui ont lu, ayant lu</p>
			</div>
			<div class="row">
				<p class="col s12 l6"><span class="eo">leg<b>ont</b>a</span> = <span class="eo">kiu legos</span> = qui lira</p>
				<p class="col s12 l6"><span class="eo">leg<b>ont</b>aj</span> = <span class="eo">kiuj legos</span> = qui liront</p>
			</div>
			<div class="row">
				<p class="col s12 l6"><span class="eo">leg<b>at</b>a</span> = <span class="eo">kiun oni legas</span> = qu’on lit</p>
				<p class="col s12 l6"><span class="eo">leg<b>at</b>aj</span> = <span class="eo">kiujn oni legas</span> = qu’on lit</p>
			</div>
			<div class="row">
				<p class="col s12 l6"><span class="eo">leg<b>it</b>a</span> = <span class="eo">kiun oni legis</span> = qu’on a lu, lu</p>
				<p class="col s12 l6"><span class="eo">leg<b>it</b>aj</span> = <span class="eo">kiujn oni legis</span> = qu’on a lus, lus</p>
			</div>
			<div class="row">
				<p class="col s12 l6"><span class="eo">leg<b>ot</b>a</span> = <span class="eo">kiun oni legos</span> = qu’on lira</p>
				<p class="col s12 l6"><span class="eo">leg<b>ot</b>aj</span> = <span class="eo">kiujn oni legos</span> = qu’on lira</p>
			</div>
	
			<p class="rimarko"><strong>REMARQUES</strong> : </p>
			<ol>
				<li>En français on dit «la porte est fermée» sans distinguer si l’on est en train de fermer la porte 
				(<span class="eo">la pordo estas ferm<b>at</b>a</span>)
				ou si la porte est en position fermée (<span class="eo">la pordo estas ferm<b>it</b>a</span>).
				</li>
				<li>Les mots «actif» et «passif» ne désignent pas ici la voix active ou passive de la phrase,
				comme en grammaire française&nbsp;: ils indiquent si le mot désigne ce qui fait l’action ou ce qui la subit.
				Par exemple, dans la phrase suivante, <span class="eo">legata</span> (participe passif) est employé dans une phrase 
				à la voix active&nbsp;: <span class="eo">Mi prenis la leg<b>at</b>an libron.</span>
				= J’ai pris le livre qu’on est en train de lire.<br></li>
				<li>La voyelle indique le moment de l’action&nbsp;: <span class="eo">a</span> en cours, 
				<span class="eo">i</span> terminée, <span class="eo">o</span> à venir. 
				Ce moment est fixé par rapport au verbe principal, et non par rapport au présent.</li>
				<li>En combinant le verbe <span class="eo">esti</span> et les 6 formes de participes, 
				on obtient de nombreuses formes composées. L’espéranto préfère cependant les formes simples 
				(<span class="eo">ŝi legis</span> plutôt que <span class="eo">ŝi estis leginta</span>) 
				et n’utilise les formes composées que lorsque ces dernières apportent une précision indispensable.</li>
			</ol>
			
			<p class="parto">Les participes peuvent prendre la forme des adjectifs (terminaison en
			<b>-a</b>), des adverbes (<b>-e</b>), ou des noms (<b>-o</b>). Les participes utilisés comme noms peuvent aussi se mettre au féminin.</p>
			<p class="parto">Leur utilisation permet beaucoup de précision, de souplesse et de concision. 
			Bien que nous ne puissions pas vous indiquer ici toute la gamme des applications, nous vous invitons à saisir le sens des participes dans 
			les exemples suivants&nbsp;:</p>
			<div class="row vortlisto">
				<p class="col s12 eo">La leg<b>ant</b>o havas bonan voĉon, sed la antaŭa leg<b>int</b>o havis pli bonan.</p>
				<p class="col s11 offset-s1">= Le lecteur a une bonne voix, mais le lecteur précédent en avait une meilleure.</p>
				<p class="col s12 eo">La leg<b>ant</b>ino havas bonan voĉon, sed la antaŭa leg<b>int</b>ino havis pli bonan.</p>
				<p class="col s11 offset-s1">= La lectrice a une bonne voix, mais la lectrice précédente en avait une meilleure.</p>
				<p class="col s12 eo">Mi opinias tamen, ke la leg<b>ont</b>o havos la plej bonan voĉon el ĉiuj.</p>
				<p class="col s11 offset-s1">= Je suis d’avis, toutefois, que le lecteur à venir aura la meilleure voix de tous.</p>
				<p class="col s12 eo">Mi opinias tamen, ke la leg<b>ont</b>ino havos la plej bonan voĉon el ĉiuj.</p>
				<p class="col s11 offset-s1">= Je suis d’avis, toutefois, que la lectrice à venir aura la meilleure voix de toutes.</p>
				<p class="col s12 eo">Leg<b>ant</b>e ni lernas.</p>
				<p class="col s11 offset-s1">= Nous apprenons en lisant.</p>
				<p class="col s12 eo">Manĝ<b>ont</b>e la pomon, li / ŝi ekvidis la vermon.</p>
				<p class="col s11 offset-s1">= Sur le point de manger la pomme, il / elle aperçut le ver.</p>
				<p class="col s12 eo">La konstru<b>at</b>a domo.</p>
				<p class="col s11 offset-s1">= La maison en train d’être construite.</p>
				<p class="col s12 eo">La skrib<b>ot</b>a letero.</p>
				<p class="col s11 offset-s1">= La lettre à écrire, c.-à-d. devant être écrite.</p>
				<p class="col s12 eo">La ferm<b>it</b>a pordo.</p>
				<p class="col s11 offset-s1">= La porte fermée, c.-à-d. qui a été fermée.</p>
			</div>

			<fieldset class="vortoj">
				<legend>VOCABULAIRE À RETENIR</legend>
				<div>
					
					<p class="eo eta">Ces mots seront automatiquement ajoutés à votre vocabulaire à réviser lorsque vous aurez terminé d’étudier cette section. Le nombre de mots à réviser sera indiqué sur le bouton affiché au-dessus du sommaire.</p>
					
				</div>
				<div class="vortlisto row">
					<p class="col s12 m4"><a href="fr/son/vortoj/vocxo.mp3" class="sm2_button"></a><span class="eo">voĉo</span> : voix</p>
					<p class="col s12 m4"><a href="fr/son/vortoj/pordo.mp3" class="sm2_button"></a><span class="eo">pordo</span> : porte</p>
					<p class="col s12 m4"><a href="fr/son/vortoj/vermo.mp3" class="sm2_button"></a><span class="eo">vermo</span> : ver</p>
					<p class="col s12 m4"><a href="fr/son/vortoj/letero.mp3" class="sm2_button"></a><span class="eo">letero</span> : lettre (courrier)</p>
					<p class="col s12 m4"><a href="fr/son/vortoj/honori.mp3" class="sm2_button"></a><span class="eo">honori</span> : honorer</p>
					<p class="col s12 m4"><a href="fr/son/vortoj/diablo.mp3" class="sm2_button"></a><span class="eo">diablo</span> : diable</p>
					<p class="col s12 m4"><a href="fr/son/vortoj/adori.mp3" class="sm2_button"></a><span class="eo">adori</span> : adorer</p>
				</div>
			</fieldset>'
  WHERE l.kurso = 'CG' AND l.numero = 8 AND le.ordo = 2;

-- leçon 8, section 3
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<p><a href="fr/son/frazoj/vivanton-ni-malhonoras.mp3" class="sm2_button"></a> <span class="eo">Vivanton ni malhonoras, mortinton ni adoras.</span></p>
			<p>
			<a href="fr/son/frazoj/dancu-diabloj.mp3" class="sm2_button"></a> <span class="eo">Dancu diabloj, sed ne en mia arbaro.</span></p>

			<div class="vortlisto row">
				<p class="col s6 m4"><a href="fr/son/vortoj/honori.mp3" class="sm2_button"></a><span class="eo">honori</span>&nbsp;: honorer</p>
				<p class="col s6 m4"><a href="fr/son/vortoj/diablo.mp3" class="sm2_button"></a><span class="eo">diablo</span>&nbsp;: diable</p>
				<p class="col s6 m4"><a href="fr/son/vortoj/adori.mp3" class="sm2_button"></a><span class="eo">adori</span>&nbsp;: adorer</p>
			</div>
			
			<p class="parto">Dans le premier proverbe, on souligne qu’on juge différemment une personne morte ou vivante, on la déshonore de son vivant, mais on la vénère quand elle est morte. Dans le deuxième proverbe, le diable personnifie les problèmes qui peuvent arriver et ceux-ci ne sont pas considérés comme graves s’ils ne sont pas chez soi.</p>'
  WHERE l.kurso = 'CG' AND l.numero = 8 AND le.ordo = 3;

-- leçon 8, section 4
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##EKZERCO:32##'
  WHERE l.kurso = 'CG' AND l.numero = 8 AND le.ordo = 4;

-- leçon 8, section 5
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##EKZERCO:33##'
  WHERE l.kurso = 'CG' AND l.numero = 8 AND le.ordo = 5;

-- leçon 8, section 6
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<p>
			Vous pouvez désormais lire des textes faciles. Traduisez le texte suivant en français. Le vocabulaire nouveau se trouve à la
			fin de l’exercice.
			</p>
			<input type="hidden" name="013_cxap08.3" value="3. Veuillez traduire en français les anecdotes suivantes.">
			
			##EKZERCO:34##
			<fieldset class="vortoj">
				<legend>VOCABULAIRE À RETENIR</legend>
				<div>
					
					<p class="eo eta">Ces mots seront automatiquement ajoutés à votre vocabulaire à réviser lorsque vous aurez terminé d’étudier cette section. Le nombre de mots à réviser sera indiqué sur le bouton affiché au-dessus du sommaire.</p>
					
				</div>
				<div class="vortlisto row">
					<p class="col s12 m6"><span class="eo">forlasi</span>&nbsp;: quitter, abandonner</p>
					<p class="col s12 m6"><a href="fr/son/vortoj/tramo.mp3" class="sm2_button"></a><span class="eo">tramo</span>&nbsp;: tramway</p>
					<p class="col s12 m6"><a href="fr/son/vortoj/okulo.mp3" class="sm2_button"></a><span class="eo">okulo</span>&nbsp;: œil</p>
					<p class="col s12 m6"><a href="fr/son/vortoj/stari.mp3" class="sm2_button"></a><span class="eo">stari</span>&nbsp;: être debout</p>
					<p class="col s12 m6"><a href="fr/son/vortoj/laca.mp3" class="sm2_button"></a><span class="eo">laca</span>&nbsp;: fatigué</p>
					<p class="col s12 m6"><a href="fr/son/vortoj/placxi.mp3" class="sm2_button"></a><span class="eo">plaĉi</span>&nbsp;: plaire</p>
				</div>
			</fieldset>'
  WHERE l.kurso = 'CG' AND l.numero = 8 AND le.ordo = 6;

-- leçon 8, section 7
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<p class="parto">Dans la <a href="fr/cge/lec01.php?section=4">première leçon</a>, vous avez vu les pronoms personnels. Pour mémoire, en voici de nouveau la liste.</p>
			<div class="vortlisto row">
				<div class="col s12 m6">
					<p><span class="eo">mi</span>&nbsp;: je</p>
					<p><span class="eo">vi</span>&nbsp;: tu (ou <span class="eo">ci</span>, peu usité)</p>
					<p><span class="eo">li</span>&nbsp;: il (personne)</p>
					<p><span class="eo">ŝi</span>&nbsp;: elle (personne)</p>
					<p><span class="eo">ĝi</span>&nbsp;: il ou elle (non-personne)</p>
				</div>
				<div class="col s12 m6">
					<p><span class="eo">ni</span>&nbsp;: nous</p>
					<p><span class="eo">vi</span>&nbsp;: vous</p>
					<p><span class="eo">ili</span>&nbsp;: ils ou elles</p>
					<p><span class="eo">oni</span>&nbsp;: on</p>
				</div>
			</div>
			 <p>Vous avez vu également comment on construit les adjectifs possessifs à partir des pronoms en ajoutant la terminaison -<b>a</b>&nbsp;:</p>
			<div class="row">
				<p class="col s12"><a href="fr/son/frazoj/li-mangxas-mian-kukon.mp3" class="sm2_button"></a><span class="eo">Li manĝas mi<b>an</b> kukon.</span>&nbsp;: Il mange mon gâteau.</p>
				<p class="col s12"><a href="fr/son/frazoj/mi-sxatas-sxiajn-kukojn.mp3" class="sm2_button"></a><span class="eo">Mi ŝatas ŝi<b>ajn</b> kukojn.</span>&nbsp;: J’aime ses gâteaux.</p>
				<p class="col s12"><a href="fr/son/frazoj/ni-ludas-kun-iliaj-infanoj.mp3" class="sm2_button"></a><span class="eo">Ni ludas kun ili<b>aj</b> infanoj.</span>&nbsp;: Nous jouons avec leurs enfants.</p>
			</div>

			<p class="parto">Considérez maintenant la phrase suivante&nbsp;:</p>
			
			<div class="row">
				<div class="col s7 m8 l9">
					<p><b>Mario joue avec son chien.</b></p>
					<p>Dans cette phrase, <b>son</b> peut se rapporter à lui-même (c’est son propre chien) ou à quelqu’un d’autre (c’est par exemple le chien de son frère ou sa grand-mère).</p>
					<p>En espéranto, on utilise dans ce cas des pronoms différents pour indiquer si <b>son</b> se rapporte à lui-même, ou à quelqu’un d’autre.</p>
			<p>On différencie donc trois cas&nbsp;:</p>
					
				</div>
				<div class="col s5 m4 l3 noprint">
					<img class="responsive-img" alt="Mario ludas kun hundo" src="fr/cge/bildoj/li-ludas-kun-hundo.jpg"><br><span class="creditphoto">photo : <a href="https://stocksnap.io/author/41003">Marvin Meyer</a></span>
				</div>
			</div>
			
			<fieldset>
				<div class="row">
					<div class="col s12">
						<p><a href="fr/son/frazoj/mario-ludas-kun-sia.mp3" class="sm2_button"></a><span class="eo">Mario ludas kun <b>sia</b> hundo.</span><br>= Mario joue avec son propre chien.</p>
						<p><a href="fr/son/frazoj/mario-ludas-kun-lia.mp3" class="sm2_button"></a><span class="eo">Mario ludas kun <b>lia</b> hundo.</span><br> = Mario joue avec le chien d’une personne de sexe masculin.</p>
						<p><a href="fr/son/frazoj/mario-ludas-kun-sxia.mp3" class="sm2_button"></a><span class="eo">Mario ludas kun <b>ŝia</b> hundo.</span><br>= Mario joue avec le chien d’une personne de sexe féminin.</p>
					</div>
				</div>
			</fieldset>
			
			<p>Autre exemple&nbsp;:</p>

			<div class="row">
				<p class="col s12"><a href="fr/son/frazoj/sxi-kisis-sian.mp3" class="sm2_button"></a><span class="eo">Ŝi kisis sian edzon.</span> =&nbsp;Elle a embrassé son (propre) mari.</p>
				<p class="col s12"><a href="fr/son/frazoj/sxi-kisis-sxian.mp3" class="sm2_button"></a><span class="eo">Ŝi kisis ŝian edzon.</span> =&nbsp;Elle a embrassé son mari (le mari d’une autre femme).</p>
			</div>

			<p class="parto">De la même façon, on différencie&nbsp;:</p>
			<div class="row">
				<p class="col s12"><a href="fr/son/frazoj/johano-lavis-sin.mp3" class="sm2_button"></a><span class="eo">Johano lavis <b>sin</b>.</span> = Jean s’est lavé.</span></p>
				<p class="col s12"><a href="fr/son/frazoj/johano-lavis-lin.mp3" class="sm2_button"></a><span class="eo">Johano lavis <b>lin</b>.</span> = Jean l’a lavé. (il a lavé une autre personne, de sexe masculin)</span></p>
				<p class="col s12"><a href="fr/son/frazoj/johano-lavis-sxin.mp3" class="sm2_button"></a><span class="eo">Johano lavis <b>ŝin</b>.</span> = Jean l’a lavée (il a lavé une autre personne, de sexe féminin)</span></p>
			</div>
			
			<p>Autre exemple&nbsp;:</p>
			
			<div class="row">
				<p class="col s12"><span class="eo">Sofia diris al <b>si</b> …</span> = Sophie s’est dit … (à elle-même)</p>
				<p class="col s12"><span class="eo">Sofia diris al <b>li</b> …</span> = Sophie lui a dit … (à une autre personne de sexe masculin)</p>
				<p class="col s12"><span class="eo">Sofia diris al <b>ŝi</b> …</span> = Sophie lui a dit … (à une autre personne de sexe féminin)</p>
			</div>
			
			<fieldset class="memoru">
				<legend>À RETENIR</legend>
				<div class="regulo row">
					<p><b>Si</b> est le <b>pronom réfléchi</b> de la 3<sup>e</sup> personne, du singulier ou du
					pluriel. <b>Sia</b> est l’adjectif possessif correspondant.</p>
					<p><b>Si</b> et <b>sia</b> se rapportent toujours au sujet du verbe. </p>
				</div>
			</fieldset>
		
			<p class="parto">Notez bien que comme <b>si</b> et <b>sia</b> se rapportent toujours au sujet, ils ne peuvent pas faire partie du sujet.</p>
			<p>Exemples :<br>
			<div class="row">
				<p class="col s12"><a href="fr/son/frazoj/mario-kaj-lia-hundo.mp3" class="sm2_button"></a><span class="eo"><b>Mario kaj <u>lia</u> hundo</b> ludas en la parko.</span>&nbsp;: dans cette phrase, le sujet est <b>Mario kaj lia hundo</b> => pas de réfléchi dans ce cas.</p>
				<p class="col s12"><a href="fr/son/frazoj/mario-ludas-en-la-parko.mp3" class="sm2_button"></a><span class="eo">Mario ludas en la parko <b>kun <u>sia</u> hundo</b>.</span>&nbsp;: dans cette phrase, le sujet est <b>Mario</b>, et ici <b>kun sia hundo</b> est complément => on emploie le réfléchi.</p>
			</div>'
  WHERE l.kurso = 'CG' AND l.numero = 8 AND le.ordo = 7;

-- leçon 8, section 8
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##EKZERCO:35##'
  WHERE l.kurso = 'CG' AND l.numero = 8 AND le.ordo = 8;

-- leçon 8, section 9
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##EKZERCO:36##		
			<div class="vortlisto row">
				<p class="col s12 m6"><span class="eo">ambaŭ</span>&nbsp;: tous deux</p>
				<p class="col s12 m6"><span class="eo">aŭto-veturado</span>&nbsp;: trajet en voiture</p>
				<p class="col s12 m6"><span class="eo">azeno</span>&nbsp;: âne</p>
				<p class="col s12 m6"><span class="eo">fungo</span>&nbsp;: champignon</p>
				<p class="col s12 m6"><span class="eo">manĝebla (manĝ-ebl-a)</span>&nbsp;: comestible (qu’on peut manger)</p>
				<p class="col s12 m6"><span class="eo">foriri (for-iri)</span>&nbsp;: partir</p>
				<p class="col s12 m6"><span class="eo">hejme</span>&nbsp;: à la maison</p>
				<p class="col s12 m6"><span class="eo">jam</span>&nbsp;: déjà</p>
				<p class="col s12 m6"><span class="eo">kafejo</span>&nbsp;: café (restaurant)</p>
				<p class="col s12 m6"><span class="eo">konflikto</span>&nbsp;: conflit</p>
				<p class="col s12 m6"><span class="eo">surtuto</span>&nbsp;: pardessus</p>
				<p class="col s12 m6"><span class="eo">moke</span>&nbsp;: par moquerie</p>
				<p class="col s12 m6"><span class="eo">obstine</span>&nbsp;: avec obstination</p>
				<p class="col s12 m6"><span class="eo">parenco</span>&nbsp;: parent (personne de la même famille)</p>
				<p class="col s12 m6"><span class="eo">preter-pasi</span>&nbsp;: dépasser, passer (devant)…</p>
				<p class="col s12 m6"><span class="eo">silenti</span>&nbsp;: garder le silence</p>
			</div>'
  WHERE l.kurso = 'CG' AND l.numero = 8 AND le.ordo = 9;

-- leçon 8, section 10
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<p>
			Lisez régulièrement le texte suivant à haute voix en ayant soin
			d’appliquer l’accent tonique sur l’avant-dernière syllabe comme il se
			doit.
			</p>
			
			<div class="vortlisto">
				<p><a href="fr/son/frazoj/accent_tonique.m4a" class="sm2_button"></a>&nbsp;
				La lingvo Esperanto estis kreita de Doktoro Zamenhof, por ke la homoj de
				la diversaj nacioj povu interŝanĝi siajn ideojn sen malfacilaĵo.
				Esperanto volas, ke sur la tuta mondo ĉiu povu esprimi tion, kion li aŭ
				ŝi pensas per lingvo facila por ĉiuj popoloj, lernebla en kelkaj
				semajnoj. Simpla, fleksebla, belsona, vere internacia en siaj elementoj,
				la lingvo Esperanto prezentas al la mondo la solan praktikan solvon de
				lingvo internacia, ĉar, facila por homoj kleraj, Esperanto estas
				preskaŭ sen peno komprenata ankaŭ de la personoj nemulte instruitaj.
				Mil faktoj atestas la grandan meriton de la internacia lingvo Esperanto.
				</p>
				<p><i>(adapté du Nouveau cours rationnel et complet d’Espéranto - SAT-Amikaro, Paris)</i></p>
			</div>
			
		<p class="rimarko"><strong>REMARQUE</strong> : </p>
		<p>Surveillez attentivement la lettre <b>R</b> qui doit être roulée comme
			en italien et la lettre <b>H</b> qui est toujours expirée comme dans les mots
			anglais <i>hand</i>, <i>hair</i>, <i>have</i>.</p>'
  WHERE l.kurso = 'CG' AND l.numero = 8 AND le.ordo = 10;

-- leçon 8, section 11
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<p>
			Dans cette leçon nous avons achevé l’étude de la conjugaison. Vous
			connaissez donc dès à présent toutes les formes verbales possibles. Et
			enfin, bonne nouvelle&nbsp;!, il ne vous reste plus qu’une autre leçon avant
			de passer le petit examen qui constitue la 10<sup>e</sup> leçon. Ensuite, on vous
			décernera une attestation de cours.
			</p>

		<div class=''card-panel blue-grey lighten-5 konsilo''><p><i class=''material-icons left''>lightbulb_outline</i><strong>Conseil&nbsp;:</strong> dormez dessus. Le sommeil consolide ce que vous avez appris dans la journée&nbsp;: un quart d’heure de révision le soir, puis une vérification rapide le lendemain matin, c’est très efficace. <a href=''helpo.php?section=kurso#konsiloj''>Nos conseils pour apprendre</a></p></div>
##RESUMO##'
  WHERE l.kurso = 'CG' AND l.numero = 8 AND le.ordo = 11;

-- leçon 9, section 1
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<p class="parto">
			Une des meilleures façons d’apprendre une langue, c’est en la chantant.
			Vous n’aurez sûrement pas de difficulté à reconnaître la mélodie de
			<i>Frère Jacques</i> dans le texte suivant&nbsp;:
			</p>

			<p>
			     Frato Jako, frato Jako,<br/>
			     Levu vin, levu vin.<br/>
			     Jen la sonorilo, jen la sonorilo;<br/>
			     Bim bam bom, bim bam bom.<br/>
			</p>
			<p>
			     Frato Jako, frato Jako,<br/>
			     Lavu vin, lavu vin.<br/>
			     Metu vian veston, metu vian veston;<br/>
			     Bim bam bom, bim bam bom.<br/>
			</p>
			<p>
			     Frato Jako, frato Jako,<br/>
			     Kuru do, kuru do<br/>
			     Tuj al la lernejo, tuj al la lernejo;<br/>
			     Bim bam bom, bim bam bom.<br/>
			</p>

			<fieldset class="vortoj">
				<legend>VOCABULAIRE À RETENIR</legend>
				<div>
					
					<p class="eo eta">Ces mots seront automatiquement ajoutés à votre vocabulaire à réviser lorsque vous aurez terminé d''étudier cette section. Le nombre de mots à réviser sera indiqué sur le bouton affiché au-dessus du sommaire.</p>
					
				</div>
				<div class="vortlisto row">
					<p class="col s6 m4"><a href="fr/son/vortoj/jen-2.mp3" class="sm2_button"></a><span class="eo">jen</span>&nbsp;: voici, voilà</p>
					<p class="col s6 m4"><a href="fr/son/vortoj/sonorilo.mp3" class="sm2_button"></a><span class="eo">sonorilo</span>&nbsp;: cloche</p>
					<p class="col s6 m4"><a href="fr/son/vortoj/do.mp3" class="sm2_button"></a><span class="eo">do</span>&nbsp;: donc</p>
					<p class="col s6 m4"><a href="fr/son/vortoj/tuj.mp3" class="sm2_button"></a><span class="eo">tuj</span>&nbsp;: tout de suite</p>
					<p class="col s6 m4"><a href="fr/son/vortoj/vesto.mp3" class="sm2_button"></a><span class="eo">vesto</span>&nbsp;: vêtement</p>
				</div>
			</fieldset>

			<p class="parto">
			Une autre version de <i>Frère Jacques</i> est celle élaborée par un groupe
			de musiciens et chanteurs espérantistes du Brésil&nbsp;:
			</p>
			
			<p>
			     Bonan tagon! Bonan tagon!<br/>
			     Mi deziras al vi!<br/>
			     Havu bonan tagon! Havu bonan tagon,<br/>
			     Vi kaj la famili’!<br/>
			</p>
			<p>
			     Nun sidiĝu ! Nun sidiĝu,<br/>
			     Mia kara fraŭlin’!<br/>
			     Diru nun belsone: ĉu vi fartas bone?<br/>
			     Belulin’, kisu min!<br/>
			</p>
			<p>
			     Ĝis revido! Ĝis revido,<br/>
			     Mia kara fraŭlin’!<br/>
			     Ĝis alia fojo! Estos granda ĝojo<br/>
			     Vidi vin, kisi vin!<br/>
			</p>
			
			<fieldset class="vortoj">
				<legend>VOCABULAIRE À RETENIR</legend>
				<div>
					
					<p class="eo eta">Ces mots seront automatiquement ajoutés à votre vocabulaire à réviser lorsque vous aurez terminé d''étudier cette section. Le nombre de mots à réviser sera indiqué sur le bouton affiché au-dessus du sommaire.</p>
					
				</div>
				<div class="vortlisto row">
					<p class="col s6 m6"><a href="fr/son/vortoj/belsone.mp3" class="sm2_button"></a><span class="eo">belsone</span>&nbsp;: d’un beau son</p>
					<p class="col s6 m6"><a href="fr/son/vortoj/farti.mp3" class="sm2_button"></a><span class="eo">farti</span>&nbsp;: se porter</p>
					<p class="col s6 m6"><a href="fr/son/vortoj/gxojo.mp3" class="sm2_button"></a><span class="eo">ĝojo</span>&nbsp;: joie</p>
					<p class="col s6 m6"><a href="fr/son/vortoj/gxis-revido.mp3" class="sm2_button"></a><span class="eo">ĝis revido</span>&nbsp;: au revoir</p>
					<p class="col s6 m6"><a href="fr/son/vortoj/frauxlo.mp3" class="sm2_button"></a><span class="eo">fraŭlo</span>&nbsp;: homme célibataire</p>
					<p class="col s6 m6"><a href="fr/son/vortoj/frauxlino.mp3" class="sm2_button"></a><span class="eo">fraŭlino</span>&nbsp;: demoiselle</p>
					<p class="col s6 m6"><a href="fr/son/vortoj/kara.mp3" class="sm2_button"></a><span class="eo">kara</span>&nbsp;: cher, chère</p>
				</div>
			</fieldset>'
  WHERE l.kurso = 'CG' AND l.numero = 9 AND le.ordo = 1;

-- leçon 9, section 2
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<p class="parto">
			Vous avez remarqué l’élision du <b>-o</b> final dans certains mots
			(famili’, fraŭlin’), ce qui se fait couramment en poésie avec la
			terminaison des noms et le <b>a</b> de l’article <b>la</b>&nbsp;:
			</p>
			<p><a href="fr/son/frazoj/esperanto-estas-la-espero.mp3" class="sm2_button"></a><span class="eo">Esperanto estas la espero de l’ mond’.</span></p>
			
			<p class="parto">L’élision ne change pas la place de l’accent tonique :</p>
			<p><span class="eo">fraŭ-<u>li</u>-no</span> devient <span class="eo">fraŭ-<u>lin’</u></span></p>'
  WHERE l.kurso = 'CG' AND l.numero = 9 AND le.ordo = 2;

-- leçon 9, section 3
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<p class="parto">
			Dans la 3<sup>e</sup> leçon, nous avons parlé des <b>adverbes</b> et nous avons
			expliqué que ceux qui sont dérivés d’autres mots se terminent par
			<b>-e</b>. Mais beaucoup d’adverbes ne sont pas des dérivés et appartiennent
			au groupe des mots dits primaires. Voici quelques adverbes se terminant
			en <b>-aŭ</b> parmi les plus usités en espéranto.
			</p>
			
			
			<p class="eo eta">Les adverbes présentés ci-dessous seront automatiquement ajoutés à votre vocabulaire à réviser lorsque vous aurez terminé d''étudier cette section. Le nombre de mots à réviser sera indiqué sur le bouton affiché au-dessus du sommaire.</p>
			

			<div class="row">
				<p class="col s12"><a href="fr/son/vortoj/almenaux.mp3" class="sm2_button"></a><b>almenaŭ</b> : au moins</p>
				<p class="col s11 offset-s1"><span class="eo">Donu al mi <b>almenaŭ</b> du minutojn.</span></p>
				<p class="col s12"><a href="fr/son/vortoj/ankaux.mp3" class="sm2_button"></a><b>ankaŭ</b> : aussi, également (précède le mot sur lequel on insiste)</p>
				<p class="col s11 offset-s1"><span class="eo"><b>Ankaŭ</b> Johano lavas sin.</span> Jean aussi se lave. (Il n’y a pas que les autres qui se lavent&nbsp;: lui aussi se lave.)</p>
				<p class="col s11 offset-s1"><span class="eo">Johano <b>ankaŭ</b> lavas sin.</span> Jean se lave aussi. (Il fait plusieurs choses, par exemple se peigne, se rase, etc. Et il se lave aussi.)</p>
				<p class="col s11 offset-s1"><span class="eo">Johano lavas <b>ankaŭ</b> sin.</span> Jean se lave aussi. (Jean ne lave pas seulement d’autres personnes, mais il se lave lui-même aussi.)</p>
				<p class="col s12"><a href="fr/son/vortoj/ankoraux.mp3" class="sm2_button"></a><b>ankoraŭ</b> : encore</p>
				<p class="col s11 offset-s1"><span class="eo">Mi <b>ankoraŭ</b> ne vidis lin. Ĉu li ankoraŭ estas tie?</span> (Je ne l’ai pas encore vu. Est-ce qu’il est encore ici&nbsp;?)</p>
				<p class="col s12"><a href="fr/son/vortoj/apenaux.mp3" class="sm2_button"></a><b>apenaŭ</b> : à peine</p>
				<p class="col s11 offset-s1"><span class="eo">Li dormis <b>apenaŭ</b> kvin minutojn.</span></p>
				<p class="col s12"><a href="fr/son/vortoj/baldaux.mp3" class="sm2_button"></a><b>baldaŭ</b> : bientôt</p>
				<p class="col s11 offset-s1"><span class="eo">Venu <b>baldaŭ</b>, mi petas.</span></p>
				<p class="col s12"><a href="fr/son/vortoj/hieraux.mp3" class="sm2_button"></a><b>hieraŭ</b> : hier (<b>antaŭhieraŭ</b>&nbsp;: avant-hier)</p>
				<p class="col s11 offset-s1"><span class="eo">Mi renkontis lin <b>hieraŭ</b> (antaŭhieraŭ).</span></p>
				<p class="col s12"><a href="fr/son/vortoj/hodiaux.mp3" class="sm2_button"></a><b>hodiaŭ</b> : aujourd’hui</p>
				<p class="col s11 offset-s1"><span class="eo"><b>Hodiaŭ</b> estas bela tago.</span></p>
				<p class="col s12"><a href="fr/son/vortoj/morgaux.mp3" class="sm2_button"></a><b>morgaŭ</b> : demain</p>
				<p class="col s11 offset-s1"><span class="eo">Kial plenumi</span> (accomplir) <span class="eo"><b>morgaŭ</b> tion, kion oni povas fari hodiaŭ?</span></p>
				<p class="col s12"><a href="fr/son/vortoj/preskaux.mp3" class="sm2_button"></a><b>preskaŭ</b> : presque</p>
				<p class="col s11 offset-s1"><span class="eo">Li <b>preskaŭ</b> falis.</span></p>
			</div>'
  WHERE l.kurso = 'CG' AND l.numero = 9 AND le.ordo = 3;

-- leçon 9, section 4
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##EKZERCO:320##
			<fieldset class="vortoj">
				<legend>VOCABULAIRE À RETENIR</legend>
				<div>
					
					<p class="eo eta">Ces mots seront automatiquement ajoutés à votre vocabulaire à réviser lorsque vous aurez terminé d''étudier cette section. Le nombre de mots à réviser sera indiqué sur le bouton affiché au-dessus du sommaire.</p>
					
				</div>
				<div class="vortlisto row">
					<p class="col s12 m6"><span class="eo">gvidi</span>&nbsp;: guider, diriger</p>
					<p class="col s12 m6"><span class="eo">Brazilo</span>&nbsp;: Brésil</p>
					<p class="col s12 m6"><span class="eo">Braziljo</span>&nbsp;: Brasilia</p>
					<p class="col s12 m6"><span class="eo">senti</span>&nbsp;: sentir, ressentir</p>
					<p class="col s12 m6"><span class="eo">kresko</span>&nbsp;: croissance, accroissement</p>
				</div>
			</fieldset>'
  WHERE l.kurso = 'CG' AND l.numero = 9 AND le.ordo = 4;

-- leçon 9, section 5
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<p class="parto">Voici cinq autres mots très fréquents terminés par <b>-aŭ</b>&nbsp;:</p>
		
			
			<p class="eo eta">Ces mots seront automatiquement ajoutés à votre vocabulaire à réviser lorsque vous aurez terminé d''étudier cette section. Le nombre de mots à réviser sera indiqué sur le bouton affiché au-dessus du sommaire.</p>
			

			<div class="row">
				<p class="col s12"><a href="fr/son/vortoj/ambaux.mp3" class="sm2_button"></a><b>ambaŭ</b> : tous les deux (adjectif ou pronom numéral)</p>
				<p class="col s11 offset-s1"><span class="eo">Ili <b>ambaŭ</b> estas en la ĝardeno.</span></p>
				<p class="col s12"><a href="fr/son/vortoj/anstataux.mp3" class="sm2_button"></a><b>anstataŭ</b> : au lieu de (prép.)</p>
				<p class="col s11 offset-s1"><span class="eo">Ŝi dormis <b>anstataŭ</b> legi.</span></p>
				<p class="col s12"><a href="fr/son/vortoj/antaux.mp3" class="sm2_button"></a><b>antaŭ</b> : avant, devant (prép.)</p>
				<p class="col s11 offset-s1"><span class="eo"><b>Antaŭ</b> ĉio oni devas peti informojn.<br>La monumento staras <b>antaŭ</b> la muzeo.</span></p>
				<p class="col s12"><a href="fr/son/vortoj/cxirkaux.mp3" class="sm2_button"></a><b>ĉirkaŭ</b> : autour de, environ (prép.)</p>
				<p class="col s11 offset-s1"><span class="eo">Ili vojaĝis <b>ĉirkaŭ</b> la terglobo.<br/>Venu <b>ĉirkaŭ</b> la dua (horo).</span></p>
				<p class="col s12"><a href="fr/son/vortoj/kontraux.mp3" class="sm2_button"></a><b>kontraŭ</b> : contre (prép.) </p>
				<p class="col s11 offset-s1"><span class="eo">Ni batalas <b>kontraŭ</b> la inflacio.<br/><b>Kontraŭ</b> doloro helpas bonhumoro.</span></p>
			</div>

			<p class="rimarko"><strong>REMARQUE</strong> : 
			Pour tous ces mots en <b>aŭ</b> vous devez faire
			très attention à placer correctement l’accent tonique. Les
			francophones ont souvent la mauvaise habitude de prononcer
			<b>tchir-<u>ka</u>-ou</b> alors que <b>kaŭ</b> ne forme qu’une seule syllabe. La
			prononciation exacte est donc :</p>
			
			<div class="row">
				<p class="col s2"><a href="fr/son/vortoj/cxirkaux.mp3" class="sm2_button"></a><span class="eo">ĉirkaŭ</span></p><p class="col s10">(<u>tchir</u>-kaw)</p>
				<p class="col s2"><a href="fr/son/vortoj/morgaux.mp3" class="sm2_button"></a><span class="eo">morgaŭ</span></p><p class="col s10">(<u>mor</u>-gaw)</p>
				<p class="col s2"><a href="fr/son/vortoj/hieraux.mp3" class="sm2_button"></a><span class="eo">hieraŭ</span></p><p class="col s10">(hi-<u>è</u>-raw)</p>
				<p class="col s2"><a href="fr/son/vortoj/hodiaux.mp3" class="sm2_button"></a><span class="eo">hodiaŭ</span></p><p class="col s10">(ho-<u>di</u>-aw)</p>
			</div>'
  WHERE l.kurso = 'CG' AND l.numero = 9 AND le.ordo = 5;

-- leçon 9, section 6
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##EKZERCO:321##'
  WHERE l.kurso = 'CG' AND l.numero = 9 AND le.ordo = 6;

-- leçon 9, section 7
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<p class="parto">Parmi les mots invariables fréquemment employés, on trouve aussi&nbsp;:</p>
		
			<div class="row">
				<p class="col s12"><b>ĉi</b> : indique la proximité </p>
				<p class="col s5 offset-s1"><a href="fr/son/vortoj/cxi-tio.mp3" class="sm2_button"></a><span class="eo">ĉi tio</span> ou <span class="eo">tio ĉi</span>&nbsp;: cette chose-ci</p>
				<p class="col s6"><a href="fr/son/vortoj/cxi-tie.mp3" class="sm2_button"></a><span class="eo">ĉi tie</span> ou <span class="eo">tie ĉi</span>&nbsp;: ici</p>
				<p class="col s11 offset-s1"><a href="fr/son/vortoj/cxio-cxi.mp3" class="sm2_button"></a><span class="eo">ĉi ĉio</span> ou <span class="eo">ĉio ĉi</span>&nbsp;: tout ceci</p>
				<p class="col s11 offset-s1"><a href="fr/son/vortoj/tiu-knabo.mp3" class="sm2_button"></a><span class="eo">tiu knabo</span>&nbsp;: ce garçon(-là)</p>
				<p class="col s11 offset-s1"><a href="fr/son/vortoj/tiu-cxi-cxi-tiu-knabo.mp3" class="sm2_button"></a><span class="eo">tiu ĉi knabo, ĉi tiu knabo</span>&nbsp;: ce garçon-ci</p>
				<p class="col s11 offset-s1"><a href="fr/son/vortoj/cxi-matene.mp3" class="sm2_button"></a><span class="eo">ĉi-matene</span>&nbsp;: ce matin</p>
				<p class="col s11 offset-s1"><a href="fr/son/vortoj/cxi-foje.mp3" class="sm2_button"></a><span class="eo">ĉi-foje</span>&nbsp;: cette fois-ci</p>
				<p class="col s12"><b>ajn</b> : exprime l’indétermination généralisée</p>
				<p class="col s5 offset-s1"><a href="fr/son/vortoj/iu-ajn.mp3" class="sm2_button"></a><span class="eo">iu ajn</span>&nbsp;: n’importe qui</p>
				<p class="col s6"><a href="fr/son/vortoj/io-ajn.mp3" class="sm2_button"></a><span class="eo">io ajn</span>&nbsp;: n’importe quoi</p>
				<p class="col s5 offset-s1"><a href="fr/son/vortoj/ie-ajn.mp3" class="sm2_button"></a><span class="eo">ie ajn</span>&nbsp;: n’importe où</p>
				<p class="col s6"><a href="fr/son/vortoj/iam-ajn.mp3" class="sm2_button"></a><span class="eo">iam ajn</span>&nbsp;: n’importe quand</p>
				<p class="col s11 offset-s1"><a href="fr/son/vortoj/iru-ien.mp3" class="sm2_button"></a><span class="eo">iru ien!</span>&nbsp;: allez (allez-vous en) quelque part&nbsp;!</p>
				<p class="col s11 offset-s1"><a href="fr/son/vortoj/iru-ien-ajn.mp3" class="sm2_button"></a><span class="eo">iru ien ajn!</span>&nbsp;: allez-vous en n’importe où&nbsp;!</p>
				<p class="col s11 offset-s1"><a href="fr/son/vortoj/iru-kien-vi-volas.mp3" class="sm2_button"></a><span class="eo">iru, kien vi volas!</span>&nbsp;: allez où vous voulez&nbsp;!</p>
				<p class="col s11 offset-s1"><a href="fr/son/vortoj/iru-kien-ajn-vi-volas.mp3" class="sm2_button"></a><span class="eo">iru, kien ajn vi volas!</span>&nbsp;: allez (n’importe où) où vous voulez&nbsp;!</p>
			</div>'
  WHERE l.kurso = 'CG' AND l.numero = 9 AND le.ordo = 7;

-- leçon 9, section 8
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##EKZERCO:322##
			<p class="noto">NOTE : <span class="eo">Ŝerbruko</span>&nbsp;: Sherbrooke (ville du Québec)</p>

			<fieldset class="vortoj">
				<legend>VOCABULAIRE À RETENIR</legend>
				<div>
					
					<p class="eo eta">Ces mots seront automatiquement ajoutés à votre vocabulaire à réviser lorsque vous aurez terminé d''étudier cette section. Le nombre de mots à réviser sera indiqué sur le bouton affiché au-dessus du sommaire.</p>
					
				</div>
				<div class="vortlisto row">
					<p class="col s12 m6"><span class="eo">samideano</span>&nbsp;: partisan (ici : espérantiste)</p>
					<p class="col s12 m6"><span class="eo">gastigi</span>&nbsp;: recevoir (des invités), offrir l’hospitalité</p>
					<p class="col s12 m6"><span class="eo">kutima</span>&nbsp;: habituel</p>
					<p class="col s12 m6"><span class="eo">Usono</span>&nbsp;: États-Unis</p>
					<p class="col s12 m6"><span class="eo">plie</span>&nbsp;: de plus</p>
					<p class="col s12 m6"><span class="eo">aranĝo</span>&nbsp;: manifestation</p>
				</div>
			</fieldset>'
  WHERE l.kurso = 'CG' AND l.numero = 9 AND le.ordo = 8;

-- leçon 9, section 9
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<div class="row">
				<p class="col s12"><a href="fr/son/frazoj/kiam-kato-promenas.mp3" class="sm2_button"></a><span class="eo">Kiam kato promenas, la musoj festenas.</span></p>
				<p class="col s11 offset-s1">Quand le chat n’est pas là, les souris dansent. (<i>festoient</i>)</p>
				<p class="col s12"><a href="fr/son/frazoj/kion-oni-volas.mp3" class="sm2_button"></a><span class="eo">Kion oni volas, tion oni povas.</span></p>
				<p class="col s11 offset-s1">Quand on veut, on peut. (<i>ce qu’on veut, on le peut</i>)</p>
				<p class="col s12"><a href="fr/son/frazoj/kia-patro-tia-filo.mp3" class="sm2_button"></a><span class="eo">Kia patro, tia filo.</span></p>
				<p class="col s11 offset-s1">Tel père, tel fils.</p>
				<p class="col s12"><a href="fr/son/frazoj/amiko-de-amiko.mp3" class="sm2_button"></a><span class="eo">Amiko de amiko estas ankaŭ amiko.</span></p>
				<p class="col s11 offset-s1">L’ami de mon ami est mon ami. (<i>un ami d’ami est aussi un ami</i>)</p>
				<p class="col s12"><a href="fr/son/frazoj/se-mi-scius.mp3" class="sm2_button"></a><span class="eo">Se mi scius, kie mi falos, mi tien metus tapiŝon.</span> (= <i>tapis</i>)</p>
				<p class="col s11 offset-s1"><i>Devinez vous-même…</i></p>
			</div>

			<fieldset class="vortoj">
				<legend>VOCABULAIRE À RETENIR</legend>
				<div>
					
					<p class="eo eta">Ces mots seront automatiquement ajoutés à votre vocabulaire à réviser lorsque vous aurez terminé d''étudier cette section. Le nombre de mots à réviser sera indiqué sur le bouton affiché au-dessus du sommaire.</p>
					
				</div>
				<div class="vortlisto row">
					<p class="col s12 m6"><a href="fr/son/vortoj/muso.mp3" class="sm2_button"></a><span class="eo">muso</span>&nbsp;: souris</p>
					<p class="col s12 m6"><a href="fr/son/vortoj/tapisxo.mp3" class="sm2_button"></a><span class="eo">tapiŝo</span>&nbsp;: tapis</p>
					<p class="col s12 m6"><a href="fr/son/vortoj/fali.mp3" class="sm2_button"></a><span class="eo">fali</span>&nbsp;: tomber</p>
					<p class="col s12 m6"><a href="fr/son/vortoj/festeni.mp3" class="sm2_button"></a><span class="eo">festeni</span>&nbsp;: festoyer</p>
				</div>
			</fieldset>'
  WHERE l.kurso = 'CG' AND l.numero = 9 AND le.ordo = 9;

-- leçon 9, section 10
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<div class="float-right w30 noprint">
				<a href="https://fr.wikipedia.org/wiki/La_Esperantisto">
					<img class="responsive-img" src="fr/cge/bildoj/la-esperantisto.jpg"></a>
			</div>
			<p class="parto">Les premières revues en espéranto datent du XIX<sup>e</sup> siècle avec <a href="https://fr.wikipedia.org/wiki/La_Esperantisto"><em>La Esperantisto</em></a>. De nos jours, 
			on en trouve provenant des quatre coins du monde, sur des sujets divers et variés, comme vous le verrez.
			</p>

			<p class="parto">Les revues plus connues sont celles des associations internationales&nbsp;: 
				<a href="https://uea.org/revuoj/esperanto"><i>Esperanto</i></a>, éditée par l’association mondiale d’espéranto, 
				tout à fait convenable pour de nouveaux apprenants de la langue, 
				et dont les sujets ne s’adressent pas qu’aux jeunes.<br> 
				Dans le même esprit, citons également <a href="http://esperanto-ondo.ru/"><i>La Ondo de Esperanto</i></a>.</p>
				<p>Certains magazines s’adressent tout particulièrement aux débutants en proposant des textes rédigés dans un style facile. C’est le cas de <a href="https://www.tejo.org/fr/revuo-kontakto/"><i>Kontakto</i></a> ou de <a href="http://www.ipernity.com/doc/stano.marcek/album/670161"><i>Juna Amiko</i></a>. Il est possible de télécharger les anciens numéro de <i>Juna amiko</i> sur <a href="http://www.eventoj.hu/juna-amiko/">http://www.eventoj.hu/juna-amiko/</a>.</p>
			<p class="parto">Aleks vous présente ici un petit tour du monde des magazines en espéranto&nbsp;:<br>
					<span class="eta">(vous pouvez activer les sous-titres en français)</span>
				</p>
			<p class="noprint"><iframe width="560" height="315" src="https://www.youtube.com/embed/yVjtft16rNo?rel=0"
frameborder="0" allowfullscreen></iframe></p>
			<p class="onlyprint">Dans cette vidéo, Aleks présente des revues en espéranto du monde entier&nbsp;<br /><a href="https://www.youtube.com/watch?v=yVjtft16rNo">https://www.youtube.com/watch?v=yVjtft16rNo</a></p>
				<p>Vous pouvez également lire directement en ligne la revue <a href="https://esperanto-france.org/le-monde-de-l-esperanto">Le Monde de l’espéranto</a>, revue bilingue éditée par Espéranto-France.</p>
			<div class="row noprint">
				<p class="col s3"><a href="https://uea.org/revuoj/esperanto"><img class="responsive-img" src="fr/cge/bildoj/revuo-Esperanto.jpg"></a></p>
				<p class="col s3"><a href="http://kontakto.tejo.org/"><img class="responsive-img" src="fr/cge/bildoj/revuo-Kontakto.jpg"></a></p>
				<p class="col s3"><a href="http://esperanto-ondo.ru/"><img class="responsive-img" src="fr/cge/bildoj/revuo-ondo-de-esperanto.jpg"></a></p>
				<p class="col s3"><a href="http://www.beletraalmanako.com/"><img class="responsive-img" src="fr/cge/bildoj/revuo-beletra-almanako.jpg"></a></p>
			</div>
			<div class="row">
				<div class="col s9">
					<p>Les médias ne sont pas en manquent, en Espérantie&nbsp;: nombreux sont les livres, 
						albums de musique, applications pour téléphones, sites internet, qui se développent chaque année. 
						Pour s’y retrouver, des revues dédiées, comme <a href="http://www.beletraalmanako.com/"><i>Beletra Almanako</i></a> 
						ou <i>Literatura Foiro</i>, publient des critiques et des interviews.</p>
					<p>Sur le site <a href="http://bitarkivo.org/doku.php">BitArkivo</a>, vous pourrez lire en ligne des magazines en espéranto du monde entier.</p>
					<p class="parto">L’espéranto permet un accès à une culture mondiale avec un filtre moins important que les médias traditionnels. 
						Cela permet ainsi à des revues comme <a href="https://osiek.org/lagazeto/"><i>La Gazeto</i></a> de parler de l’histoire mondiale, 
						à <i>Sennaciulo</i> de débattre des problèmes politiques actuels&nbsp;; <i>Etnismo</i> traite des questions éthniques, 
						et la revue <a href="http://www.monato.be/"><i>Monato</i></a> possède des correspondants dans de très nombreux pays, 
						qui rapportent des évènements marquants d’un point de vue local. 
						Des revues évoquent également les religions&nbsp;: l’espéranto est à l’aise avec le bouddhisme, le catholicisme, 
						l’islam, l’ōmoto, etc.</p>
					<p class="parto">Une part non négligeable des revues sont les organes d’information des associations nationales d’espéranto, qui font le point, 
						parfois avec des articles bilingues, sur les rencontres qui ont lieu entre espérantophones, les lieux intéressants à visiter 
						dans le pays, ou même le continent&nbsp;: <a href="https://www.esperanto-afriko.org/"><i>Esperanto en Afriko</i></a> et <a href="http://www.esperantoazia.net/index.php?mid=bulteno"><i>Esperanto en Azio</i></a> par exemple. </p>
					<p>Certaines, comme la revue française <i>Espéranto-Info</i>, s’adressent directement à des personnes ne parlant pas l’espéranto, 
						pour leur présenter les divers aspects de l’Espérantie et quelques mots croisés et phrases de base.</p>
				</div>
				<div class="col s3 noprint">
					
					<a href="http://www.monato.net/"><img class="responsive-img" src="fr/cge/bildoj/revuo-monato.jpg"></a>
					<a href="http://esperantoinfo.info/"><img class="responsive-img" src="fr/cge/bildoj/revuo-esperanto-info.jpg"></a>
				</div>
			</div>
			<p class="parto">Pour finir, n’oublions pas que l’espéranto permet de traiter également de sujets techniques, et pour cela les associations 
				spécialisées (en science, médecine, enseignement, etc.) éditent des revues pour mettre en valeur les dernières avancées. 
				Par exemple&nbsp;: <a href="https://eo.wikipedia.org/wiki/Hungara_Fervojista_Mondo"><i>Hungara Fervojista Mondo</i></a> (cheminots hongrois),
				<a href="http://interrev.com/mir/index.php/mir"><i>Medicina Internacia Revuo</i></a> ou encore 
				<a href="https://scienca-revuo.info/"><i>Scienca Revuo</i></a> pour n’en citer que quelques-unes. 
			</p>	
			<p class="parto">Page suivante, nous vous invitons à lire un extrait d’article, que vous traduirez à titre exercice.</p>
			
			<div class="card-panel blue lighten-5">
				<div class="float-right w30 noprint">
					<a href="https://esperanto-france.org/le-monde-de-l-esperanto">
						<img class="responsive-img" src="fr/cge/bildoj/revuo-LME.jpg"></a>
				</div>
				<p>Et pour découvrir quelques revues en espéranto, nous vous recommandons&nbsp;:</p>
				<p><a href="https://esperanto-france.org/le-monde-de-l-esperanto"><i>Le Monde de l’Espéranto</i></a>, la revue d’Espéranto-France, accessible en ligne&nbsp;; et d’autres revues dans notre <a href="https://butiko-esperanto-france.org">boutique en ligne</a>.
				</p>
				<p>Pour en savoir plus&nbsp;:</p>
				<ul>
					<li><a href="https://fr.wikipedia.org/wiki/Espérantie#Médias">https://fr.wikipedia.org/wiki/Espérantie#Médias</a></li>
					<li><a href="https://fr.wikipedia.org/wiki/Liste_des_périodiques_en_espéranto">https://fr.wikipedia.org/wiki/Liste_des_périodiques_en_espéranto</a></li>
					<li><a href="https://eo.wikipedia.org/wiki/Esperanto-gazeto">https://eo.wikipedia.org/wiki/Esperanto-gazeto</a></li>
				</ul>
			</div>'
  WHERE l.kurso = 'CG' AND l.numero = 9 AND le.ordo = 10;

-- leçon 9, section 11
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##EKZERCO:37##
			<fieldset class="vortoj">
				<legend>VOCABULAIRE À RETENIR</legend>
				<div>
					
					<p class="eo eta">Ces mots seront automatiquement ajoutés à votre vocabulaire à réviser lorsque vous aurez terminé d''étudier cette section. Le nombre de mots à réviser sera indiqué sur le bouton affiché au-dessus du sommaire.</p>
					
				</div>
				<div class="vortlisto row">
					<p class="col s12 m6"><span class="eo">asocio</span>&nbsp;: association</p>
					<p class="col s12 m6"><span class="eo">najbaro</span>&nbsp;: voisin</p>
					<p class="col s12 m6"><span class="eo">rubriko</span>&nbsp;: rubrique</p>
					<p class="col s12 m6"><span class="eo">numero</span>&nbsp;: numéro (d’une revue)</p>
					<p class="col s12 m6"><span class="eo">bulteno</span>&nbsp;: bulletin</p>
					<p class="col s12 m6"><span class="eo">organizi</span>&nbsp;: organiser</p>
					<p class="col s12 m6"><span class="eo">vidpunkto</span>&nbsp;: point de vue</p>
					<p class="col s12 m6"><span class="eo">Pasko</span>&nbsp;: Pâques</p>
					<p class="col s12 m6"><span class="eo">tradicio</span>&nbsp;: tradition</p>
					<p class="col s12 m6"><span class="eo">supozi</span>&nbsp;: supposer</p>
					<p class="col s12 m6"><span class="eo">Flandro</span>&nbsp;: Flandres </p>
					<p class="col s12 m6"><span class="eo">Nederlando</span>&nbsp;: Pays-Bas</p>
				</div>
			</fieldset>'
  WHERE l.kurso = 'CG' AND l.numero = 9 AND le.ordo = 11;

-- leçon 9, section 12
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<p>
			Vous venez de franchir la dernière étape de votre apprentissage. La dixième et dernière leçon consiste en un examen qui va vous permettre d''évaluer l''ensemble de vos connaissances. Les questions sont faciles, il n''y a pas de piège. Vous connaissez déjà toutes les réponses, cet examen a pour seul objectif de vous en convaincre.
			</p>
			
			<p>
			Que de chemin parcouru depuis le début de ce cours&nbsp;! Nous espérons que vous aurez pris autant plaisir à le suivre que nous en avons pris à l''élaborer. Mais ce cours n''est pas statique, il évolue en fonction de vos retours. N''hésitez pas à nous contacter si vous avez des remarques, des suggestions ou des envies que nous pourrons réaliser pour les générations futures d''élèves.
			</p>
			
			<p>
			Faites connaître ce cours autour de vous, c''est la meilleure façon qu''il continue à vivre.
			</p>
		
		<div class=''card-panel blue-grey lighten-5 konsilo''><p><i class=''material-icons left''>lightbulb_outline</i><strong>Conseil&nbsp;:</strong> expliquez à quelqu’un ce que vous avez appris. Raconter à un proche comment fonctionnent les corrélatifs ou l’accusatif oblige à mettre ses idées au clair, et montre tout de suite ce qu’on n’a pas encore bien compris. <a href=''helpo.php?section=kurso#konsiloj''>Nos conseils pour apprendre</a></p></div>
##RESUMO##'
  WHERE l.kurso = 'CG' AND l.numero = 9 AND le.ordo = 12;

-- leçon 10, section 1
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<p>
			Vous voilà rendu à la 10<sup>e</sup> et dernière leçon de votre cours. Elle
			consistera en un test de niveau&nbsp;A1 qui nous permettra d’évaluer vos connaissances de l’espéranto écrit. Votre tuteur le corrigera comme
			d’habitude et vous recevrez un <i>atestilo</i> (attestation de fin de cours).
			</p>
			<p>Ce test est entièrement en espéranto. Il comprend une introduction expliquant le déroulement du test et les notes à obtenir, et trois parties&nbsp;: </p>
			<ul class="klarigo">
				<li>Une partie de compréhension orale (<i>Aŭda komprenado</i>) d’une durée de 20 minutes. Notée sur 25 points.</li>
				<li>Une partie de compréhension écrite (<i>Skriba komprenado</i>) d’une durée de 30 minutes. Notée sur 25 points.</li>
				<li>Une partie production écrite (<i>Skriba produktado</i>) d’une durée de 30 minutes. Notée sur 25 points.</li>
			</ul>
			<p>Il convient donc d’avoir environ <b>une heure trente</b> de temps disponible devant vous pour pouvoir lire les explications et effectuer cet examen. Nous vous déconseillons de le faire en plusieurs fois (même si cela est techniquement possible), car cela fausserait le résultat.</p>
			<p>L’usage du dictionnaire est interdit (que ce soit en ligne ou papier). Rechercher des informations dans le reste du cours est également interdit. Bien sûr, nous ne pouvons pas techniquement vous empêcher de le faire, mais la fiabilité de la note que vous obtiendrez dépendra de votre respect des consignes. De la même façon, les enregistrements audio sont conçus pour n’être écoutés que deux fois. Veuillez d’abord lire les questions, écoutez une première fois, répondez aux questions dont vous connaissez la réponse, puis écoutez une deuxième fois afin de trouver les réponses qui vous manquent et vérifier vos réponses déjà écrites. En respectant les consignes, vous vous assurerez d’une meilleure estimation de votre niveau.
			</p>
			<p>Il est possible que vous ne connaissiez pas la réponse à certaines questions, que vous ne connaissiez pas certains mots ou que vous ne compreniez pas certains mots dans les enregistrements. Cela est tout à fait normal et il ne faut pas hésiter à passer certaines questions pour y revenir plus tard. Pour réussir l’examen, vous devez obtenir 50&nbsp;% des points sur l’ensemble des parties et au moins 5&nbsp;points dans chacune des parties.<br/>Pour la partie de compréhension orale, nous vous conseillons de lire une première fois les questions avant de lancer l’enregistrement audio.<br/>Vous pouvez bien sûr vous munir d’une feuille de papier brouillon pour prendre des notes pendant l’enregistrement.
			</p>'
  WHERE l.kurso = 'CG' AND l.numero = 10 AND le.ordo = 1;

-- leçon 10, section 2
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<table><thead><tr><th>Naturo de la ekzamen-partoj</th><th>Daŭro</th><th>Noto</th></tr></thead>
	<tbody>
		<tr><td><b>Aŭda komprenado</b>:<br/>Respondo al demandaro pri tri aŭ kvar tre mallongaj dokumentoj registritaj, kiuj temas pri ĉiutagaj situacioj. (du aŭskultoj)<br/>Maksimuma daŭro de la aŭskultotaj dokumentoj: 3 minutoj</td>
		<td>Proksimume 20&nbsp;minutoj </td><td>/25</td></tr>
<tr><td><b>Skriba komprenado</b>:<br/>Respondo al demandaro pri tri aŭ kvar skribaj dokumentoj kiuj temas pri ĉiutagaj situacioj.</td>
		<td>30&nbsp;minutoj </td><td>/25</td></tr>
	<tr><td><b>Skriba produktado</b> :<br/>Ekzamen-objekto el du partoj:<br/>- Kompletigu slipon, formularon, dialogon…<br/>- Redaktu per simplaj frazoj poŝtkarton, mesaĝon, tekston… pri temoj de ĉiutaga vivo.</td>
		<td>30 minutoj </td><td>/25</td></tr>
	<tr><td><b>Sumo</b>:</td><td>1&nbsp;horo kaj 30&nbsp;minutoj </td><td>/75</td></tr>		
</tbody>
</table>

<p>Sukcesa sojlo por akiri diplomon: 37,5/75<br/>
Minimuma noto bezonata por ĉiu ekzamen-parto: 5/25<br/>
Daŭro de la tuta testo: 1&nbsp;horo kaj 20&nbsp;minutoj  </p>'
  WHERE l.kurso = 'CG' AND l.numero = 10 AND le.ordo = 2;

-- leçon 10, section 3
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<h3>Unua ekzerco</h3>
		<p class="parto">Vi aŭdos dufoje dokumenton. Vi havos paŭzon de tridek sekundoj inter la du aŭskultoj kaj alian de tridek sekundoj por kontroli viajn respondojn. Unue legu la demandojn.</p>
					<fieldset class="sono">
				<legend>Aŭskultu tiun rakonton:</legend>
				<p>
					<audio id="audioPlayer" controls="controls" type="audio/mpeg">
						<source type="audio/mp3" src="fr/cge/sonoj/A1-Final-1.mp3"/>
					</audio>
				</p>
			</fieldset>

		##EKZERCO:286##		<h3>Dua ekzerco</h3>
		<p class="parto">Vi aŭdos dufoje dokumenton. Vi havos paŭzon de tridek sekundoj inter la du aŭskultoj kaj alian de tridek sekundoj por kontroli viajn respondojn. Unue legu la demandojn.</p>
				<fieldset class="sono">
				<legend>Aŭskultu tiun rakonton:</legend>
				<p>
					<audio id="audioPlayer" controls="controls" type="audio/mpeg">
						<source type="audio/mp3" src="fr/cge/sonoj/A1-Final-2.mp3"/>
					</audio>
				</p>
			</fieldset>		
		##EKZERCO:287##		<h3>Tria ekzerco</h3>
		<p class="parto">Vi aŭdos dufoje dokumenton. Vi havos paŭzon de tridek sekundoj inter la du aŭskultoj kaj alian de tridek sekundoj por kontroli viajn respondojn. Unue legu la demandojn.</p>
				<fieldset class="sono">
				<legend>Aŭskultu tiun rakonton:</legend>
				<p>
					<audio id="audioPlayer" controls="controls" type="audio/mpeg">
						<source type="audio/mp3" src="fr/cge/sonoj/A1-Final-3.mp3"/>
					</audio>
				</p>
			</fieldset>		
		##EKZERCO:288##		<h3>Kvara ekzerco</h3>
		<p class="parto">Vi aŭdos dufoje dokumenton. Vi havos paŭzon de tridek sekundoj inter la du aŭskultoj kaj alian de tridek sekundoj por kontroli viajn respondojn. Unue legu la demandojn.</p>
				<fieldset class="sono">
				<legend>Aŭskultu tiun rakonton:</legend>
				<p>
					<audio id="audioPlayer" controls="controls" type="audio/mpeg">
						<source type="audio/mp3" src="fr/cge/sonoj/A1-Final-4.mp3"/>
					</audio>
				</p>
			</fieldset>		
		##EKZERCO:289##'
  WHERE l.kurso = 'CG' AND l.numero = 10 AND le.ordo = 3;

-- leçon 10, section 4
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<p>Maksimumo de akireblaj poentoj en tiu parto: 25 poentoj</p>
		<h3>Unua ekzerco</h3>
		<div class="row">
			<p class="col s12 center-align">
				<img class="responsive-img" src="fr/cge/bildoj/posxtkarto.jpg" alt="Carte postale : Saluton Maria, Kiel vi fartas ? Mi estas en Ĉinio kun Petro, la vetero estas bela tie. Hieraŭ ni iris en restoracion. Morgaŭ, mi vidos mian bofratinon Xin. Mi reiros al Francio post unu semajno. Mi esperas, ke ĉio estas bona por vi. Ĝis baldaŭ, Julia"/>
			</p>
		</div>
		##EKZERCO:290##		<h3>Dua ekzerco</h3>
		<div class="row">
			<p class="col s12 center-align">
				<img class="responsive-img" src="fr/cge/bildoj/annonce-chat-noir.jpg" alt="Mi estas sinjoro Dupon, mi serĉas mian katidon, Filu. Ĝi estas malgranda kaj nigra. Ĝi havas bluajn okulojn kaj ĝi havas blankan piedon. Ĝi foriris mardon sed ne revenis... Bonvolu, se vi vidos ĝin, kontakti min telefone je 0605203480. Dankon."/>
			</p>
		</div>
		##EKZERCO:291##		<h3>Tria ekzerco</h3>
		<div class="row">
			<p class="col s12 center-align">
				<img class="responsive-img" src="fr/cge/bildoj/mesagxo.jpg" alt="Gesinjoroj, Via filino Lea ne multe parolas dum la lecionoj, mi ŝatus renkonti vin por vidi kun vi, ĉu ŝi deziras helpon. Mi proponas al vi rendevuon ĵaŭdon la kvaran de decembro, je la dek oka horo. Mi petas, kontaktu min telefone al 0630950644. Dankon, Sinjoro Giraud"/>
			</p>
		</div>
		##EKZERCO:292##		<h3>Kvara ekzerco</h3>
		<div class="row">
			<p class="col s12 center-align">
				<img class="responsive-img" src="fr/cge/bildoj/logx-anoncoj.jpg" alt="1a anonco : Granda domo, kvin ĉambroj kaj granda ĝardeno. En arbaro. Prezo : 250 000 eŭroj. 2a anonco : Malgranda domo, du ĉambroj, malgranda ĝardeno en la urbo. Prezo : 120 000 eŭroj. 3a anonco : Apartamento, tri ĉambroj, urbocentro. Trankvila loko. Prezo : 140 eŭroj. 4a anonco : Domo, unu ĉambro, antaŭ la urbodomo. Malgranda ĝardeno. Prezo : 80 000 eŭroj."/>
			</p>
		</div>			
		##EKZERCO:293##'
  WHERE l.kurso = 'CG' AND l.numero = 10 AND le.ordo = 4;

-- leçon 10, section 5
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<p>Maksimumo de akireblaj poentoj en tiu parto: 25 poentoj</p>
		<h3>Unua ekzerco</h3>	
		##EKZERCO:294##		<h3>Dua ekzerco</h3>
		##EKZERCO:295##'
  WHERE l.kurso = 'CG' AND l.numero = 10 AND le.ordo = 5;

-- leçon 10, section 6
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<p>Bravo&nbsp;! Vous avez terminé, il ne vous reste qu’à envoyer vos réponses à votre correcteur. Une fois que celui-ci aura corrigé vos réponses, vous pourrez consulter votre attestation de réussite dans votre espace personnel.</p>
		
		<p>Afin de continuer votre apprentissage, vous pouvez suivre le cours <i>Gerda Malaperis</i>, basé sur une histoire policière, ce cours vous permettra d’enrichir votre vocabulaire et de consolider vos connaissances de la langue.</p>
		
		<p>Bonne continuation dans le monde de l’espéranto&nbsp;!</p>
		
		<div class=''card-panel blue-grey lighten-5 konsilo''><p><i class=''material-icons left''>lightbulb_outline</i><strong>Conseil&nbsp;:</strong> lisez des textes faciles, et beaucoup. Lire des textes un peu en dessous de son niveau fait progresser presque sans effort. Le site <a href=''https://nilegu.esperanto-france.org/'' target=''_blank'' rel=''noopener''>Ni legu</a> a été conçu pour cela&nbsp;: des textes de différents niveaux, avec un enregistrement audio et un dictionnaire intégré. Ensuite, le cours <a href=''fr/gerda/''>Gerda malaperis</a> vous fait lire tout un roman, chapitre après chapitre, avec des explications et des exercices. <a href=''helpo.php?section=kurso#konsiloj''>Nos conseils pour apprendre</a></p></div>
##RESUMO##'
  WHERE l.kurso = 'CG' AND l.numero = 10 AND le.ordo = 6;
