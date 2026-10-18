-- Leçon 7 du cours élémentaire (CG) : seuls les affixes les plus fréquents restent,
-- répartis sur 3 pages avec un QCM chacune (issues #689 et #353, #1049 fermée).
-- Le contenu affiché vient de fr/cge/lec07.php ; ce script met la base en accord.
-- Peut être rejoué sans risque : les insertions et le décalage des sections ne se font qu'une fois.
-- En local, il est joué automatiquement à la création de la base (docker-entrypoint-initdb.d).
SET NAMES utf8mb4;

-- 1. Sections : une page d'affixes en plus, les sections suivantes sont décalées.
UPDATE lecioneroj SET ordo = ordo + 1 WHERE leciono_id = 68 AND ordo >= 3
  AND NOT EXISTS (SELECT 1 FROM (SELECT titolo FROM lecioneroj WHERE leciono_id = 68) AS t WHERE t.titolo = 'Suffixes : qualités, taille et possibilité');
UPDATE lecioneroj SET titolo = 'Préfixes et suffixes d’action', dauxro = 12, enhavo = '<p>
		Dans la deuxième leçon nous avons dit qu’il était facile d’élargir
		le vocabulaire de l’espéranto à l’aide d’affixes (préfixes et
		suffixes). Voici maintenant les affixes les plus courants, répartis
		sur trois pages, avec des exemples qui illustrent leur application.
		Contentez-vous de constater avec quelle facilité l’on construit de
		nouveaux mots tout en réduisant la masse du vocabulaire à apprendre
		par cœur. Un petit questionnaire à la fin de chaque page vous
		permettra de vérifier que vous avez compris.
		</p>

		<p class="eo eta"><b>NOTE </b>: Les mots précédés de <span class="marque">•</span> seront automatiquement ajoutés à votre vocabulaire à réviser lorsque vous aurez terminé d\'étudier cette section.</p>

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

		<?php
' WHERE id = 68;
UPDATE lecioneroj SET titolo = 'Suffixes : personnes, objets et lieux', dauxro = 12, enhavo = '<p>
		Continuons avec les suffixes. Ceux de cette page servent à désigner
		des personnes, des objets et des lieux.
		</p>

		<p class="eo eta"><b>NOTE </b>: Les mots précédés de <span class="marque">•</span> seront automatiquement ajoutés à votre vocabulaire à réviser lorsque vous aurez terminé d\'étudier cette section.</p>

		<p class="parto">Les personnes</p>

		<p><b>IST</b> : <i>profession, activité habituelle</i></p>
		<div class="row">
			<p class="col s12"><span class="eo"><span class="marque">•</span> instrui</span>&nbsp;: enseigner&emsp;→&emsp;<span class="eo">instruisto</span>&nbsp;: enseignant</p>
			<p class="col s12"><span class="eo">piano</span>&nbsp;: piano&emsp;→&emsp;<span class="eo"><span class="marque">•</span> pianisto</span>&nbsp;: pianiste</p>
			<p class="col s12"><span class="eo">esperantisto</span>&nbsp;: espérantiste</p>
		</div>

		<p><b>IN</b> : <i>sexe féminin</i></p>
		<div class="row">
			<p class="col s12"><span class="eo"><span class="marque">•</span> onklo</span>&nbsp;: oncle&emsp;→&emsp;<span class="eo"><span class="marque">•</span> onklino</span>&nbsp;: tante</p>
			<p class="col s12"><span class="eo"><span class="marque">•</span> koko</span>&nbsp;: coq&emsp;→&emsp;<span class="eo"><span class="marque">•</span> kokino</span>&nbsp;: poule</p>
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

		<?php
' WHERE id = 69;
INSERT INTO lecioneroj (leciono_id, titolo, tipo, enhavo, ordo, unua, lasta, dauxro)
  SELECT 68, 'Suffixes : qualités, taille et possibilité', 'TEKSTO', '<p>
		Voici les derniers suffixes de cette leçon. Ils expriment une
		qualité, une taille, une tendance ou une possibilité.
		</p>

		<p class="eo eta"><b>NOTE </b>: Les mots précédés de <span class="marque">•</span> seront automatiquement ajoutés à votre vocabulaire à réviser lorsque vous aurez terminé d\'étudier cette section.</p>

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

		<?php
', 3, 0, 0, 12
  FROM DUAL WHERE NOT EXISTS (SELECT 1 FROM lecioneroj WHERE leciono_id = 68 AND titolo = 'Suffixes : qualités, taille et possibilité');
SET @lecionero3 = (SELECT id FROM lecioneroj WHERE leciono_id = 68 AND titolo = 'Suffixes : qualités, taille et possibilité');

-- 2. Vocabulaire à réviser : chaque mot suit la page où il est maintenant présenté.
UPDATE vortoj SET lecionero_id = 68 WHERE lecionero_id = 69 AND eo IN ('paroli', 'parolado', 'rigardi', 'rigardadi', 'kanti', 'kantado', 'ade', 'purigi', 'morti', 'mortigi', 'scii', 'sciigi', 'sidi', 'sidiĝi', 'ruĝiĝi', 'iĝi');
UPDATE vortoj SET lecionero_id = 69 WHERE lecionero_id = 68 AND eo = 'arbaro';
UPDATE vortoj SET lecionero_id = @lecionero3 WHERE lecionero_id = 69 AND eo IN ('videbla', 'kredi', 'nekredebla', 'ebla', 'eble', 'vireco', 'verdeco', 'infaneco', 'vento', 'ventego', 'ridi', 'ridegi', 'ege', 'ŝpari', 'ŝparema', 'babili', 'babilema', 'emi', 'beleta', 'varmeta', 'eta|malgranda', 'iomete|iom', 'admirinda', 'kolo', 'kolumo', 'plena', 'plenumi', 'umilo');
UPDATE vortoj SET lecionero_id = 72 WHERE lecionero_id = 69 AND eo IN ('kvarono', 'duonhoro');
-- Mots des affixes retirés : rattachés à aucune section (lecionero_id = 0) plutôt que supprimés,
-- pour que les élèves qui les ont déjà dans leurs révisions les gardent.
UPDATE vortoj SET lecionero_id = 0 WHERE lecionero_id = 68 AND eo IN ('bofilo', 'bofratino', 'prezidanto', 'eksprezidanto', 'edziĝi', 'eksedziĝi', 'eksiĝi', 'komercisto', 'kompreni', 'miskompreni', 'paŝo', 'nepo', 'pranepo', 'avo', 'praavo');
UPDATE vortoj SET lecionero_id = 0 WHERE lecionero_id = 69 AND eo IN ('paĉjo', 'legi', 'legenda', 'farenda', 'salo', 'salero', 'mono', 'monero', 'urbestro', 'estri', 'estro', 'katido', 'reĝo', 'reĝido|princo', 'cigaredo', 'glavo', 'panjo', 'duobla', 'multobligi', 'triope', 'unuopa', 'ope', 'supo', 'ujo', 'aĉulo');

-- 3. Exercices 1 et 2 : les questions qui utilisent un affixe retiré sont masquées (forigita)
-- et remplacées sous le même numéro ; les anciennes réponses des élèves restent liées aux anciennes questions.
UPDATE ekzerceroj SET forigita = 1 WHERE ekzerco_id = 28 AND kodo IN ('ekz07_01', 'ekz07_02', 'ekz07_03');
UPDATE ekzerceroj SET forigita = 1 WHERE ekzerco_id = 29 AND kodo IN ('ekz07_07', 'ekz07_09', 'ekz07_11', 'ekz07_14', 'ekz07_16');
INSERT INTO ekzerceroj (ekzerco_id, kodo, numero, demando, respondmodelo, respondo, normaligita, bildo, forigita, korektebla)
SELECT * FROM (
  SELECT 28 AS ekzerco_id, 'ekz07_27' AS kodo, 1 AS numero, '("edzo" = époux) : edzino, edziĝi, geedzoj, reedziĝi' AS demando, NULL AS respondmodelo, 'épouse, se marier, mari et femme, se remarier' AS respondo, 'épouse se marier mari et femme se remarier|épouse se marier couple se remarier|épouse épouser mari et femme se remarier|épouse épouser couple se remarier' AS normaligita, '' AS bildo, 0 AS forigita, 0 AS korektebla
  UNION ALL
  SELECT 28, 'ekz07_28', 2, '("viro" = homme) : virino, vireto, vireco, vira', NULL, 'femme, petit homme, virilité, masculin', 'femme petit homme virilité masculin|femme bonhomme virilité masculin', '', 0, 0
  UNION ALL
  SELECT 28, 'ekz07_29', 3, '("bovo" = bœuf) : bovino, bovaro, bovejo, bovaĵo', NULL, 'vache, troupeau de bovins, étable, viande de bœuf', 'vache troupeau de bovins étable viande de boeuf|vache troupeau de bovins étable viande de bœuf|vache troupeau étable viande de boeuf|vache troupeau étable viande de bœuf|vache troupeau de vaches étable viande de boeuf|vache troupeau de vaches étable viande de bœuf', '', 0, 0
  UNION ALL
  SELECT 29, 'ekz07_30', 7, 'vieillir («maljuna» = vieux)&nbsp;:', NULL, 'maljuniĝi', 'maljunigxi', '', 0, 0
  UNION ALL
  SELECT 29, 'ekz07_31', 9, 'un ordinateur («komputi» = calculer)&nbsp;:', NULL, 'komputilo', 'komputilo', '', 0, 0
  UNION ALL
  SELECT 29, 'ekz07_32', 11, 'réchauffer («varma» = chaud)&nbsp;:', NULL, 'varmigi', 'varmigi|revarmigi', '', 0, 0
  UNION ALL
  SELECT 29, 'ekz07_33', 14, 'une Parisienne («Parizo» = Paris)&nbsp;:', NULL, 'parizanino', 'parizanino', '', 0, 0
  UNION ALL
  SELECT 29, 'ekz07_34', 16, 'un vendeur («vendi» = vendre)&nbsp;:', NULL, 'vendisto', 'vendisto', '', 0, 0
) AS novaj
WHERE NOT EXISTS (SELECT 1 FROM ekzerceroj WHERE ekzerco_id = 28 AND kodo = 'ekz07_27');
