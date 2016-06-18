<?php 
include "gerdakapo.inc.php"; 
?>
<div class="klarigo">
<?php
	if (($temo=="intro")) {
?>
	<h2 id="antauxsciigo">Présentation</h2>

		<p>
		Ce cours s’adresse aux étudiants de l’espéranto qui connaissent déjà
		les bases de la langue -- notamment la prononciation -- comme, par
		exemple, ceux qui ont suivi au moins le <a href="../cge/index.php">
		Cours gratuit d’espéranto</a>
		ou le <a href="http://ikurso.net">Kurso de Esperanto</a>.<br>
		<i>Gerda malaperis</i> est un roman de Claude
		Piron spécifiquement destiné à vous apprendre progressivement à
		maîtriser l’espéranto parlé à partir d’une histoire captivante.</p>

		<p>
		Le texte des leçons est totalement en espéranto, ainsi que les
		exercices et les explications. En cas de difficulté vous pourrez
		cependant avoir recours au lexique qui contient la totalité du
		vocabulaire de chaque leçon avec des explications complémentaires
		en français, ce qui rend ce cours accessible également aux débutants
		qui ont quelque expérience de l’apprentissage des langues.</p>

		<p>
		Nous tenons à remercier Claude Piron pour son aimable autorisation,
		ainsi que tous ceux qui ont rendu ce travail possible en assurant la
		saisie informatique et la mise à disposition du matériel sur le
		réseau. Nous nous sommes contentés de transformer les textes au format
		Web et d’en améliorer la présentation quand cela était possible ou
		nécessaire.</p>

		<h3 id="kiel">Comment utiliser le cours ?</h3>

		<p>
		Le cours comporte 25 chapitres. Chaque chapitre est constitué d’un
		extrait du roman, d’une série de questions et de un ou plusieurs
		exercices. La quantité de matière varie d’une leçon à l’autre, mais en
		moyenne une ou deux heures suffisent pour en appréhender le contenu.
		Il vous appartient de régler votre rythme selon le temps disponible et
		vos facultés d’assimilation : au minimum une leçon par semaine et au
		maximum trois ou quatre par semaine.</p>

		<p>
		Si vous avez décidé de suivre le cours, il vous est conseillé de
		demander l’assistance d’un tuteur, c’est-à-dire d’une personne
		capable de corriger vos exercices et de répondre succinctement aux
		questions que le cours pourrait susciter. Pour cela il suffit de vous
		inscrire à l’issue de votre première leçon. Dans ce cas vous prendrez
		garde de ne jamais envoyer une leçon à corriger avant d’avoir reçu la
		correction de la leçon précédente. </p>
			
		<p>
		Chaque leçon se présente comme une page Web sans excès de fioritures
		multimédia. Les exercices sont des champs de formulaires que vous
		remplissez. À la fin de la leçon vous pouvez envoyer vos exercices
		au tuteur en cliquant simplement sur un bouton. Les leçons peuvent
		être sauvegardées sur votre disque local et consultées hors ligne.
		</p>

		<p>
		Enfin, vous avez le droit d’utiliser ce cours Web sans aucune aide
		extérieure si vous le désirez.</p>
		
		<p>
		Par ailleurs, en complément du cours, il vous est conseillé de lire à la fin
		de chaque leçon le récit correspondant du recueil <a
		href="lasu00.php"><i>Lasu min paroli
		plu !</i></a> du même auteur.</p>
		
		<!--<h3>Consultation hors ligne</h3>
		<p>Si vous voulez installer les leçons sur votre disque vous pouvez
		télécharger une version du cours pour consultation hors ligne.
		Tous les fichiers du cours (pages web avec les illustrations et les bandes sonores) sont 
		regroupés dans une seule archive au format zip.</p>
		<p>Pour utiliser cette archive, il suffit de la télécharger et la décompresser dans un répertoire de
		votre disque dur. Pour consulter ces pages, vous pouvez commencer par la page <i>index.htm</i>.</p>
		<p><a href="http://ikurso.esperanto-jeunes.org/doc/gerda.zip">Télécharger tout le cours <i>Gerda malaperis</i></a>.</p>
		-->

<?php
} elseif ($temo=="enskribi") {
?>
		<h2 id="registro">Inscription</h2>

		<p>
		Vous trouverez le formulaire d’inscription à la fin de la première
		leçon. Remplissez-le soigneusement <i><b>après avoir effectué les
		exercices de la leçon</b></i>. Nous ne vous demandons aucune
		information confidentielle mais seulement le strict minimum pour vous
		joindre (adresse électronique) et pour vous situer (ville, âge, zone
		géographique). Votre adresse électronique ne sera divulguée à aucun tiers
		sans votre consentement et nous ne vous enverrons aucun message 
		publicitaire (spam). Une réponse vous parviendra sous 7 jours au maximum.</p>

		<p><strong>Attention !</strong></p>

		<p class="retrait">
		Le fait que ce cours soit gratuit pour vous ne signifie pas
		qu’il ne coûte rien à personne. Il coûte beaucoup de leur temps libre
		à nos tuteurs. Aussi, en contrepartie, nous attendons des élèves
		un minimum de <b>motivation</b>, de <b>sérieux</b> et
		d’<b>assiduité</b>. Tout élève qui sans accord préalable ne nous
		envoie plus son travail pendant plus d’une semaine sera
		automatiquement désinscrit.</ul>
		
		<p>Nous vous demanderons donc de vous engager sur les points suivants:</p>

		<ol>
			<li><b>Motivation</b> : Vous entreprenez ce cours avec le
			désir sincère d’apprendre les bases de l’espéranto, quelle que soit
			votre motivation ultime (simple curiosité, attrait pour le mouvement
			espérantiste, intérêt pour les langues, envie d’épater votre concierge
			ou de dialoguer avec les extra-terrestres, etc.).</li>
			<li><b>Sérieux</b> : Sauf impossibilité majeure vous avez la ferme
			intention de terminer le cours. Vous disposez du temps et
			des outils nécessaires (accès Internet...) pour ce faire.</li>
			<li><b>Assiduité</b> : Vous enverrez au moins une leçon par semaine,
			sauf accord préalable avec votre tuteur pour une période définie.</li>
			<li><b>Rythme du tuteur</b> : Vous respecterez le rythme de correction
			du tuteur et ne lui enverrez pas de nouvelle leçon avant d’avoir reçu
			la correction des leçons précédentes.</li>
		</ol>
<!-- <?php } elseif ($temo=="atentigo") {
?>
		<h3>Affichage des leçons</h3>

		<p>Dans tous les textes de ce cours, nous avons choisi de présenter
		les textes en espéranto avec les lettres accentuées.</p>
		
		<h3>Utilisation du cours hors ligne</h3>
		
-->
<?php } elseif ($temo=="prononco") {
?>
		<h3>Généralités sur la prononciation</h3>
		
			<p>
			Ce bref exposé est destiné à ceux qui veulent commencer l’étude de
			l’espéranto directement avec le cours <em>Gerda malaperis</em>. Ils
			trouveront ici résumé tout ce qu’il faut savoir sur la prononciation de
			l’espéranto. Si cette introduction vous paraît trop technique n’hésitez
			pas à demander des éclaircissements à votre tuteur. Par ailleurs la
			prononciation est indiquée dans les "listes de vocabulaire" des
			premières leçons.</p>
		
			<p>L’<strong>alphabet</strong> espéranto comporte 28 lettres :</p>
      	<p><img alt="alphabet" src="http://ikurso.esperanto-jeunes.org/bildoj/alfabeto.gif"></p>
			<p>
			Les lettres "q", "w", "x" et "y" n’existent pas en espéranto mais on y
			trouve six lettres qui n’existent pas en français:</p>

			<p>Si les caractères accentués de l’espéranto ne s’affichent pas correctement sur votre écran, Vous
			pouvez utiliser la notation en -X : cette convention consiste à placer un <em>x</em> juste après le caractère qui doit être accentué, 
			en remplacement de l’accent.<br>
			Pour cela, il vous suffit de cliquer sur le bouton "sx" en haut à gauche de l’écran.<br>
			Vous trouverez dans la <a href="../../helpo.php">page d’aide</a> des informations utiles sur la
			façon d’utiliser les lettres accentuées.
			</p>
			<p>Dans les exercices, il suffit de taper la lettre suivie d’un x
			par exemple : cx, sx, ux... pour obtenir automatiquement la lettre accentuée correspondante.
			<p>
			<table>
				<tr><td>cx = </td><td><img alt="ĉ" src="cx.gif" align="top"></td></tr>
				<tr><td>gx = </td><td><img alt="ĝ" src="gx.gif" align="top"></td></tr>
				<tr><td>hx = </td><td><img alt="ĥ" src="hx.gif" align="top"></td></tr>
				<tr><td>jx = </td><td><img alt="ĵ" src="jx.gif" align="top"></td></tr>
				<tr><td>sx = </td><td><img alt="ŝ" src="sx.gif" align="top"></td></tr>
				<tr><td>ux = </td><td><img alt="ŭ" src="ux.gif" align="top"></td></tr>
			</table>
			</p>
			<p>Les <b>principes de la prononciation</b> sont très simples et sans exception :</p>
			<p>
				<ol>
					<li>un son (phonème) unique pour chaque lettre et réciproquement</li>
					<li>une syllabe pour chaque voyelle et réciproquement</li>
					<li>l’accent tonique est sur l’avant-dernière syllabe</li>
				</ol>
				<div class="rim">
				<p>La syllabe qui porte l’accent tonique est prononcée avec plus de
				force que les autres syllabes du mot. On dit que cette syllabe est
				«tonique», ou encore «accentuée» (aucun rapport avec l’accent sur les
				lettres ĉ, ĝ etc.). En français l’accent tonique porte sur la dernière
				syllabe du mot : si vous comparez le mot français "ami" et le mot
				espéranto <em>amiko</em>, vous verrez que dans les deux langues l’accent
				tonique porte sur la syllabe <strong>mi</strong>. Pour prononcer correctement le
				mot <em>amiko</em> dites le mot français "ami" puis ajoutez la syllabe
				<em>ko</em> : a<strong>mi</strong>ko.
				</p></div>

			<p>a) <b>Voyelles</b> (les syllabes accentuées sont écrites en lettres majuscules):</p>
			<p>
			<table class='retrait'>
				<tr>
					<td width='30' class="ekz"><a href="../son/s1-01.au"><img src="../pix/icon20.gif"></a></td>
				   <td width='200' class="fr">a  (a comme dans "patte")</td>
				   <td width='50' class="ekz"><strong>blan</strong>ka</td>
				   <td width='50' class="ekz"><strong>sa</strong>na</td>
				   <td width='50' class="ekz"><strong>gran</strong>da</td>
				</tr>
				<tr>
					<td class="ekz"><a href="../son/s1-02.au"><img src="../pix/icon20.gif"></a></td>
					<td class="fr">e  (è comme dans "sec")</td>
					<td class="ekz"><strong>bel</strong>a</td>
					<td class="ekz"><strong>ple</strong>na</td>
					<td class="ekz"><strong>ver</strong>da</td>
				</tr>
				<tr>
					<td class="ekz"><a href="../son/s1-03.au"><img src="../pix/icon20.gif"></a></td>
					<td class="fr">i  (i comme dans "fini")</td>
					<td class="ekz"><strong>vi</strong>vi</td>
					<td class="ekz"><strong>a</strong>mi</td>
					<td class="ekz"><strong>trink</strong>ki</td>
				</tr>
				<tr>
					<td class="ekz"><a href="../son/s1-04.au"><img src="../pix/icon20.gif"></a></td>
					<td class="fr">o  (o comme dans "botte")</td>
					<td class="ekz"><strong>o</strong>vo</td>
					<td class="ekz"><strong>do</strong>mo</td>
					<td class="ekz"><strong>ki</strong>o</td>
				</tr>
				<tr>
					<td class="ekz"><a href="../son/s1-05.au"><img src="../pix/icon20.gif"></a></td>
					<td class="fr">u  (ou comme dans "sou")</td>
					<td class="ekz"><strong>u</strong>nu</td>
					<td class="ekz"><strong>plu</strong>mo</td>
					<td class="ekz"><strong>su</strong>no</td>
				</tr>
				</table>
			</p>
			<div class="rim">
			<p><b>Remarques :</b></p>
			<p>
			<ol>
				<li>Le "e" et le "o" sont des voyelles «moyennes», plus ou moins ouvertes
				selon les locuteurs et le contexte. Les "è" et "o" ouverts du français
				en sont une bonne approximation.</p>
			<p>
			<li>Les voyelles ont une durée «moyenne», sensiblement équivalente à
			celle des voyelles brèves du français. Cependant il est très courant
			d’allonger sensiblement une voyelle lorsqu’elle termine une syllabe
			accentuée : le "e" de <strong>ple</strong>na est souvent prononcé plus long que celui de
			<strong>ver</strong>da.</p>
			<p>
			<li>Il n’y a pas de voyelle nasale en espéranto. La première syllabe de
			<strong>gran</strong>da" rime en français avec "Anne", pas avec "an"; <strong>ka</strong>fon" rime avec
			"téléphone", pas avec "carafon", etc.</p>
			<p>
			<li>Toutes les voyelles forment syllabe, même "i" et "u" accolés à une
			autre voyelle. Il faut donc prononcer "kio" : <strong>ki</strong>-o (deux syllabes),
			"foiro" : fo-<strong>i</strong>-ro (trois syllabes), "lui" : <strong>lu</strong>-i.</p>
			</ol>
			</div>
			</p>
			<p>b) <b>Consonnes</b> : elles ont le même son qu’en français, sauf :</p>
			<p>
			<table class='retrait'>
				<tr>
				   <td width="20" class="ekz">c</td>
				   <td width="5" class="ekz">:  </td>
				   <td width="200" class="fr">ts comme dans "tsigane", jamais comme dans "ceci" ou "cocon"</td>
				</tr>
				<tr>
				   <td class="ekz">ĉ</td>
				   <td class="ekz">:</td>
					<td class="fr">tch comme dans "tchèque"</td>
				</tr>
				<tr>
					<td class="ekz">ĝ</td>
					<td class="ekz">:</td>
					<td class="fr">dj comme dans "Abidjan"</td>
				</tr>
				<tr>
				   <td class="ekz">h
				   <td class="ekz">:</td>
				   <td class="fr">h expiré comme en anglais (have) ou en allemand (Haus) (jamais muet)</td>
				</tr>
				<tr>
				   <td class="ekz">ĥ</td>
				   <td class="ekz">:</td>
				   <td class="fr">son similaire au "j" espagnol (jota) ou au "ch" dur allemand (Achtung)</td>
				</tr>
				<tr>
				   <td class="ekz">j</td>
				   <td class="ekz">:</td>
				   <td class="fr">y comme dans "yogourt"</td>
				</tr>
				<tr>
				   <td class="ekz">ĵ</td>
				   <td class="ekz">:</td>
				   <td class="fr">j comme dans "journal"</td>
				</tr>
				<tr>
				   <td class="ekz">r</td>
				   <td class="ekz">:</td>
				   <td class="fr">de préférence roulé comme en espagnol ou en italien</td>
				</tr>
				<tr>
				   <td class="ekz">ŝ</td>
				   <td class="ekz">:</td>
				   <td class="fr">ch comme dans "chemise"</td>
				</tr>
				<tr>
				   <td class="ekz">ŭ</td>
				   <td class="ekz">:</td>
				   <td class="fr">w comme dans "wallon", "ou" comme dans "oui", "w" anglais</td>
				</tr>
			</table>
			</p>

			<p>Noter également :</p>
			<p>
			<table class="retrait">
				<tr>
					<td width="20" class="ekz">g</td>
				   <td width="5" class="ekz">:</td>
				   <td width="200" class="fr">g comme dans "gare", jamais comme dans "gel"</td>
				</tr>
				<tr>	  
					<td class="ekz">l</td>
				   <td class="ekz">:</td>
				   <td class="fr">l comme dans "lilas", jamais comme dans "paille"</td>
				</tr>
				<tr>	  
					<td class="ekz">m</td>
				   <td class="ekz">:</td>
				   <td class="fr">ne nasalise jamais la voyelle précédente</td>
				</tr>
				<tr>	  
					<td class="ekz">n</td>
				   <td class="ekz">:</td>
				   <td class="fr">ne nasalise jamais la voyelle précédente</td>
				</tr>
				<tr>	  
					<td class="ekz">s</td>
				   <td class="ekz">:</td>
				   <td class="fr">s comme dans "son", "visse", jamais comme dans "vise"</td>
				</tr>
				<tr>	  
					<td class="ekz">t</td>
				   <td class="ekz">:</td>
				   <td class="fr">t comme dans "totem", jamais comme dans "ration"</td>
				</tr>
				<tr>	  
					<td class="ekz">z</td>
				   <td class="ekz">:</td>
				   <td class="fr">z comme dans "zèbre", jamais comme dans "pizza"</td>
				</tr>
			</table>
			</p>
			<p>Lisez à voix haute :</p>
			<p>
			<table class="retrait">
				<tr>
					<td class="ekz" width="30"><a href="../son/s2-01.au"><img src="../pix/icon20.gif"></a></td>
					<td class="ekz" width="100">ci<strong>ga</strong>no</td>
					<td class="ekz" width="100"><strong>dan</strong>ci</td>
					<td class="ekz" width="100">bi<strong>ci</strong>klo</td>
				</tr>
				<tr>
					<td class="ekz"><a href="../son/s2-02.au"><img src="../pix/icon20.gif"></a></td>
					<td class="ekz"><strong>ĉe</strong>ĥo</td>
					<td class="ekz"><strong>ĉam</strong>bro</td>
					<td class="ekz">ĉoko<strong>la</strong>do</td>
				</tr>
				<tr>
					<td class="ekz"><a href="../son/s2-03.au"><img src="../pix/icon20.gif"></a></td>
					<td class="ekz"><strong>la</strong>go</td>
					<td class="ekz">gus<strong>tu</strong>mi</td>
					<td class="ekz">geogra<strong>fi</strong>o</td>
				</tr>
				<tr>
					<td class="ekz"><a href="../son/s2-04.au"><img src="../pix/icon20.gif"></a></td>
					<td class="ekz"><strong>lo</strong>ĝi</td>
					<td class="ekz"><strong>se</strong>ĝo</td>
					<td class="ekz"><strong>man</strong>ĝi</td>
				</tr>
				<tr>
					<td class="ekz"><a href="../son/s2-05.au"><img src="../pix/icon20.gif"></a></td>
					<td class="ekz"><strong>ha</strong>vi</td>
					<td class="ekz"><strong>ho</strong>ro</td>
					<td class="ekz">lip<strong>ha</strong>ro</td>
				</tr>
				<tr>
					<td class="ekz"><a href="../son/s2-06.au"><img src="../pix/icon20.gif"></a></td>
					<td class="ekz"><strong>e</strong>ĥo</td>
					<td class="ekz"><strong>ĥo</strong>ro</td>
					<td class="ekz">ĥe<strong>mi</strong>o</td>
				</tr>
				<tr>
					<td class="ekz"><a href="../son/s2-07.au"><img src="../pix/icon20.gif"></a></td>
					<td class="ekz"><strong>jes</strong></td>
					<td class="ekz"><strong>ja</strong>ro</td>
					<td class="ekz"><strong>ju</strong>na</td>
				</tr>
				<tr>
					<td class="ekz"><a href="../son/s2-08.au"><img src="../pix/icon20.gif"></a></td>
					<td class="ekz">ĵur<strong>na</strong>lo</td>
					<td class="ekz">ĵa<strong>lu</strong>za</td>
					<td class="ekz">tea<strong>tra</strong>ĵo</td>
				</tr>
				<tr>
					<td class="ekz"><a href="../son/s2-09.au"><img src="../pix/icon20.gif"></a></td>
					<td class="ekz">te<strong>a</strong>tro</td>
					<td class="ekz"><strong>ku</strong>ri</td>
					<td class="ekz">ri<strong>gar</strong>di</td>
				</tr>
				<tr>
					<td class="ekz"><a href="../son/s2-10.au"><img src="../pix/icon20.gif"></a></td>
					<td class="ekz"><strong>ŝa</strong>ti</td>
					<td class="ekz"><strong>po</strong>ŝo</td>
					<td class="ekz"><strong>fu</strong>ŝa</td>
				</tr>
			</table>
			</p>
			<p>
			<div class="rim">
				<p><b>Remarques :</b></p>
				<p>
				<ol>
				<li>Il n’y a que très peu de racines en espéranto qui aient une consonne
				double. Un exemple est "Finno", un Finlandais. Comme chaque lettre se
				prononce, on dit <strong>fin</strong>-no. Certains mots composés peuvent avoir une
				consonne double, par exemple "Pollando", Pologne, de "Polo" + "lando",
				et on prononce Pol-<strong>lan</strong>-do.</li>

				<li>Les consonnes sont peu influencées par le contexte. Les consonnes
				sonores en finale ne s’assourdissent pas, pas plus qu’au contact d’une
				consonne sourde : "abstrakta" se prononce ab<strong>strak</strong>ta plutôt que
				ap<strong>strak</strong>ta. Les sourdes ne deviennent pas sonores : dans "kapitalismo"
				le "s" ne se prononce pas comme un "z".</li>
				</ol>
			</div>
		
			<p>c) <b>Diphtongues</b>:</p>
			<p>
			   Les consonnes <em>j</em> et <em>ŭ</em> sont appelées semi-voyelles du fait de leur
			   proximité avec les voyelles <em>i</em> et <em>u</em>. Les combinaisons suivantes de
			   voyelles (a, e, o, u) et de semi-voyelle <em>j</em> ou <em>ŭ</em> forment un
			   son complexe qu’on appelle traditionnellement «diphtongue». 
			</p>
			<p>
			<table class="retrait">
				<tr>
					<td class="ekz" width="30"><a href="../son/s3-01.au"><img src="../pix/icon20.gif"></a></td>
					<td class="fr" width="120">aj (comme dans "ail", "aïe")</td>
					<td class="ekz" width="100"><strong>kaj</strong></td>
					<td class="ekz" width="100">se<strong>maj</strong>no</td>
					<td class="ekz" width="100"><strong>ma</strong>jo</td>
					<td class="ekz" width="100"><strong>ka</strong>jo</td>
				</tr>
				<tr>
					<td class="ekz"><a href="../son/s3-02.au"><img src="../pix/icon20.gif"></a></td>
					<td class="fr">oj  (comme dans "Tolstoï")</td>
					<td class="ekz"><strong>kna</strong>boj</td>
					<td class="ekz"><strong>koj</strong>no</td>
					<td class="ekz">vo<strong>ja</strong>ĝi</td>
					<td class="ekz"><strong>ĝo</strong>jo</td>
				</tr>
				<tr>
					<td class="ekz"><a href="../son/s3-03.au"><img src="../pix/icon20.gif"></a></td>
					<td class="fr">ej (comme dans "soleil")</td>
					<td class="ekz"><strong>plej</strong></td>
					<td class="ekz"><strong>mej</strong>lo</td>
					<td class="ekz">ler<strong>ne</strong>jo</td>
					<td class="ekz">ven<strong>de</strong>jo</td>
				</tr>
				<tr>
					<td class="ekz"><a href="../son/s3-04.au"><img src="../pix/icon20.gif"></a></td>
					<td class="fr">uj  (comme dans "grenouille")</td>
					<td class="ekz"><strong>tuj</strong></td>
					<td class="ekz"><strong>ki</strong>uj</td>
					<td class="ekz">mo<strong>nu</strong>jo</td>
					<td class="ekz">an<strong>glu</strong>jo</td>
				</tr>
				<tr>
					<td class="ekz"><a href="../son/s3-05.au"><img src="../pix/icon20.gif"></a></td>
					<td class="fr">aŭ (anglais "now")</td>
					<td class="ekz"><strong>naŭ</strong></td>
					<td class="ekz"><strong>an</strong>taŭ</td>
					<td class="ekz">an<strong>ta</strong>ŭe</td>
					<td class="ekz">aŭ<strong>tu</strong>no</td>
				</tr>
				<tr>
					<td class="ekz"><a href="../son/s3-06.au"><img src="../pix/icon20.gif"></a></td>
					<td class="fr"><strong>eŭ</strong> (espagnol "Europa")</td>
					<td class="ekz">eŭ<strong>ro</strong>po</td>
					<td class="ekz">neŭ<strong>tra</strong>la</td>
					<td class="ekz"> </td>
				</tr>
			</table>
			</p>
			
			<div class="rim">
			<p><b>Remarques :</b></p>
				<p>
				<ol>
				<li>Dans les exemples ci-dessus, là où la semi-voyelle est suivie par une
				voyelle (deux dernières colonnes), on considère généralement qu’elle
				appartient à la syllabe suivante où elle reprend son rôle de consonne.
				Il n’y a donc pas diphtongue au sens phonétique du terme.</li></ol>
				</p>
			</div>
			<p>
			<ol>
				<li>La réalisation exacte des diphtongues peut varier selon les
				locuteurs. Certains auront tendance à conserver une prononciation
				consonantique de la semi-voyelle, surtout s’il s’agit de "j", alors que
				d’autres la prononcent comme une voyelle très brève plus ou moins fondue
				avec le premier élément. Par exemple pour la diphtongue "aj", on peut
				aussi bien se baser sur la prononciation de l’anglais "my", ou de
				l’allemand "mein", que sur celle du français "maille", de l’espagnol
				"hay" ou du russe "raï".</li>

			<li>Les autres combinaisons de voyelle et de semi-voyelle sont
			extrêmement rares. La combinaison "oŭ" se trouve dans quelques mots. La
			combinaison "ij" se trouve dans des noms propres russes translittérés
			(ex. Ĉajkovskij).</p>

			<li>Les combinaisons "ai", "au", "oi", "ou", "ii", "iu" etc. -- qui ne sont
			pas rares en espéranto -- <b>ne sont pas</b> des diphtongues, mais bel et
			bien deux voyelles juxtaposées, formant donc deux syllabes : <br>
			<a href="../son/s3-07.au"><img src="../pix/icon20.gif"></a>
			balai (ba-<strong>la</strong>-i), balau (ba-<strong>la</strong>-u), 
			neniigi (ne-ni-<strong>i</strong>-gi), neniu (ne-<strong>ni</strong>-u) etc.</p>
			</ol>
			</p>

<?php } elseif ($temo=="enhavo") {
?>
		<h2 id="enhavo">Table des matières du cours</h2>

		<p>Les débutants sont invités à consulter d’abord le
		<a href="index.php?temo=prononco">guide de prononciation</a>.</p>
		
		<p>Chaque leçon se compose de plusieurs parties :</p>
		<ul class="sommaire">
			<li>Rakonto : présente un chapitre du livre</li>
			<li>Klarigo : présente quelques points de grammaire</li>
			<li>Vorlisto : présente les nouveaux mots utilisés dans le chapitre</li>
			<li>Ekzercoj : exercices à envoyer au tuteur pour correction</li>
			<li>Lasu min... : chapitre correspondant du livre "Lasu min paroli pli".</li>
		</ul>
		<p>En parallèlle, nous vous conseillons de lire les récits de 
		<a href="../lasu00.php"><i>Lasu min paroli plu!</i></a></p>
		 
		<h3>Chapitres de <em>Gerda malaperis</em></h3>
		<ul class="sommaire cadre">
			<li><a href="cxap01.php">Premier chapitre</a>
			<li><a href="cxap02.php">Deuxième chapitre</a>
			<li><a href="cxap03.php">Troisième chapitre</a>
			<li><a href="cxap04.php">Quatrième chapitre</a>
			<li><a href="cxap05.php">Cinquième chapitre</a>
			<li><a href="cxap06.php">Sixième chapitre</a>
			<li><a href="cxap07.php">Septième chapitre</a>
			<li><a href="cxap08.php">Huitième chapitre</a>
			<li><a href="cxap09.php">Neuvième chapitre</a> 
			<li><a href="cxap10.php">Dixième chapitre</a>
			<li><a href="cxap11.php">Onzième chapitre</a>
			<li><a href="cxap12.php">Douzième chapitre</a>
			<li><a href="cxap13.php">Treizième chapitre</a> 
			<li><a href="cxap14.php">Quatorzième chapitre</a>
			<li><a href="cxap15.php">Quinzième chapitre</a>
			<li><a href="cxap16.php">Seizième chapitre</a>
			<li><a href="cxap17.php">Dix-septième chapitre</a>
			<li><a href="cxap18.php">Dix-huitième chapitre</a>
			<li><a href="cxap19.php">Dix-neuvième chapitre</a>
			<li><a href="cxap20.php">Vingtième chapitre</a> 
			<li><a href="cxap21.php">Vingt-et-unième chapitre</a>
			<li><a href="cxap22.php">Vingt-deuxième chapitre</a>
			<li><a href="cxap23.php">Vingt-troisième chapitre</a> 
			<li><a href="cxap24.php">Vingt-quatrième chapitre</a> 
			<li><a href="cxap25.php">Vingt-cinquième chapitre</a> 
		</ul>
		<h3>Et pour finir :</h3>

		<ul class="sommaire cadre">
		  <li><a href="konsiloj.php">Konsiloj al la kursfinintoj</a></li>
		</ul>
<?php } ?>
</div>
<?php include "gerdapiedo.inc.php" ?>