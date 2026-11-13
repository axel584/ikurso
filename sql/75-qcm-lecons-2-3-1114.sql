-- #1114 : cours élémentaire, un petit QCM facultatif avec indices à la fin des pages 2.6 (mal-), 3.1 (ordre des mots),
-- 3.5 (adverbes en -e) et 3.10 (verbes et compléments) : avec sql/69 et sql/71, chaque page de grammaire des leçons 1 à 3
-- a son QCM. Enregistrements de fr/son/vortoj (maljuna, sane). Script rejouable : pas de second QCM sur une page.
SET NAMES utf8mb4;

UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id
SET le.enhavo = CONCAT(le.enhavo, '
<p><b>Petit test&nbsp;:</b> vérifiez que vous avez bien compris (facultatif).</p>
##QCM:[{"question": "Écoutez&nbsp;: que veut dire ce mot&nbsp;? <a href=''fr/son/vortoj/maljuna.mp3'' class=''sm2_button''></a>", "propositions": ["jeune", "vieux", "très jeune"], "indices": ["« jeune » se dit juna ; mal- donne le contraire.", "", "mal- ne renforce pas le mot, il donne son contraire."], "reponse": 2}, {"question": "Quel est le contraire de <span class=''eo''>varma</span> (chaud)&nbsp;?", "propositions": ["malvarma", "ne varma", "varmo"], "indices": ["", "« ne varma » veut dire « pas chaud » ; le vrai contraire se forme avec mal-.", "varmo, c’est « la chaleur » (-o : nom)."], "reponse": 1}, {"question": "Que veut dire <span class=''eo''>malfacila</span>&nbsp;?", "propositions": ["facile", "difficile", "très facile"], "indices": ["« facile » se dit facila ; mal- donne le contraire.", "", "mal- ne renforce pas le mot, il donne son contraire."], "reponse": 2}]##')
WHERE l.kurso = 'CG' AND l.numero = 2 AND le.ordo = 6 AND le.enhavo NOT LIKE '%##QCM%';

UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id
SET le.enhavo = CONCAT(le.enhavo, '
<p><b>Petit test&nbsp;:</b> vérifiez que vous avez bien compris (facultatif).</p>
##QCM:[{"question": "<span class=''eo''>Mian fraton vidis la knabino.</span> Qui a vu qui&nbsp;?", "propositions": ["La fille a vu mon frère.", "Mon frère a vu la fille."], "indices": ["", "fraton porte le -n : c’est lui qu’on voit, quelle que soit sa place dans la phrase."], "reponse": 1}, {"question": "Quelle phrase a le même sens que <span class=''eo''>La patro lavas la knabon.</span>&nbsp;?", "propositions": ["La knabo lavas la patron.", "La knabon lavas la patro.", "La patron lavas la knabo."], "indices": ["ici le -n est sur patron : c’est le garçon qui lave le père.", "", "ici le -n est sur patron : c’est le garçon qui lave le père."], "reponse": 2}, {"question": "Dans <span class=''eo''>Kafon trinkas mia patrino.</span>, quel est le sujet&nbsp;?", "propositions": ["kafon", "mia patrino", "trinkas"], "indices": ["kafon porte le -n : c’est le complément d’objet.", "", "trinkas est le verbe (-as)."], "reponse": 2}]##')
WHERE l.kurso = 'CG' AND l.numero = 3 AND le.ordo = 1 AND le.enhavo NOT LIKE '%##QCM%';

UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id
SET le.enhavo = CONCAT(le.enhavo, '
<p><b>Petit test&nbsp;:</b> vérifiez que vous avez bien compris (facultatif).</p>
##QCM:[{"question": "Écoutez&nbsp;: qu’est-ce que ce mot&nbsp;? <a href=''fr/son/vortoj/sane.mp3'' class=''sm2_button''></a>", "propositions": ["un nom", "un adjectif", "un adverbe"], "indices": ["le nom se termine par -o (sano).", "l’adjectif se termine par -a (sana).", ""], "reponse": 3}, {"question": "Complétez&nbsp;: <span class=''eo''>Li ___ skribis.</span> (Il a bien écrit.)", "propositions": ["bona", "bone", "bono"], "indices": ["bona est un adjectif, il précise un nom (bona kafo).", "", "bono est un nom (le bien)."], "reponse": 2}, {"question": "Dans <span class=''eo''>Mi skribas malbone.</span>, que veut dire <span class=''eo''>malbone</span>&nbsp;?", "propositions": ["mauvais", "mal (de façon mauvaise)", "le mal"], "indices": ["« mauvais » se dit malbona (-a : adjectif).", "", "« le mal » se dit malbono (-o : nom)."], "reponse": 2}]##')
WHERE l.kurso = 'CG' AND l.numero = 3 AND le.ordo = 5 AND le.enhavo NOT LIKE '%##QCM%';

UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id
SET le.enhavo = CONCAT(le.enhavo, '
<p><b>Petit test&nbsp;:</b> vérifiez que vous avez bien compris (facultatif).</p>
##QCM:[{"question": "Complétez&nbsp;: <span class=''eo''>Li estas ___.</span> (Il est instituteur.)", "propositions": ["instruisto", "instruiston"], "indices": ["", "après esti, il n’y a pas de complément d’objet, donc pas de -n."], "reponse": 1}, {"question": "Complétez&nbsp;: <span class=''eo''>Mi trinkas ___.</span> (Je bois du thé.)", "propositions": ["teo", "teon"], "indices": ["on boit quelque chose : ce complément d’objet prend le -n.", ""], "reponse": 2}, {"question": "Que veut dire <span class=''eo''>Pluvas.</span>&nbsp;?", "propositions": ["Il pleut.", "la pluie", "il a plu"], "indices": ["", "« la pluie » se dirait pluvo (-o : nom).", "-as indique le présent ; « il a plu » se dirait pluvis."], "reponse": 1}]##')
WHERE l.kurso = 'CG' AND l.numero = 3 AND le.ordo = 10 AND le.enhavo NOT LIKE '%##QCM%';
