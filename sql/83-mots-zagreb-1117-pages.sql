-- #1117 : cours élémentaire, 41 mots fréquents des leçons 1 à 10 de la méthode de Zagreb (Esperanto 12) qui
-- n'apparaissaient nulle part dans le cours : écrits dans les pages à côté de mots du même thème (vocabulaire de 1.3,
-- 2.8, 3.3, 4.5, conversation en 5.1, exemples en 3.5, 3.8, 5.2, 8.1 et 9.7, affixes de la leçon 7, encadrés
-- « D'autres mots utiles » de 6.8, 6.9, 8.6 et 9.11) et ajoutés au vocabulaire à réviser. Script rejouable.
SET NAMES utf8mb4;

-- 1.3
UPDATE lecioneroj SET enhavo = REPLACE(enhavo, '<p><a href="fr/son/vortoj/frato.mp3" class="sm2_button"></a> <span class="eo">frato</span>&nbsp;: frère</p>', '<p><a href="fr/son/vortoj/frato.mp3" class="sm2_button"></a> <span class="eo">frato</span>&nbsp;: frère</p>\n\t\t\t\t\t\t<p><a href="fr/son/vortoj/familio.mp3" class="sm2_button"></a> <span class="eo">familio</span>&nbsp;: famille</p>')
WHERE id = 3 AND enhavo NOT LIKE '%<p><a href="fr/son/vortoj/familio.mp3" class="sm2_button"></a> <span class="eo">familio</span>&nbsp;: famille</p>%';

-- 2.8
UPDATE lecioneroj SET enhavo = REPLACE(enhavo, '<span class="eo">pagi</span>&nbsp;: payer</p>', '<span class="eo">pagi</span>&nbsp;: payer</p>\n\t\t\t\t\t<p><a href="fr/son/vortoj/trovi.mp3" class="sm2_button"></a> <span class="eo">trovi</span>&nbsp;: trouver</p>')
WHERE id = 14 AND enhavo NOT LIKE '%<p><a href="fr/son/vortoj/trovi.mp3" class="sm2_button"></a> <span class="eo">trovi</span>&nbsp;: trouver</p>%';

-- 2.8
UPDATE lecioneroj SET enhavo = REPLACE(enhavo, '<span class="eo">glaso</span>&nbsp;: verre (à boire)</p>', '<span class="eo">glaso</span>&nbsp;: verre (à boire)</p>\n\t\t\t\t\t<p><a href="fr/son/vortoj/kelnero.mp3" class="sm2_button"></a> <span class="eo">kelnero</span>&nbsp;: serveur (au café)</p>\n\t\t\t\t\t<p><a href="fr/son/vortoj/dolaro.mp3" class="sm2_button"></a> <span class="eo">dolaro</span>&nbsp;: dollar</p>')
WHERE id = 14 AND enhavo NOT LIKE '%<p><a href="fr/son/vortoj/kelnero.mp3" class="sm2_button"></a> <span class="eo">kelnero</span>&nbsp;: serveur (au café)</p>\n\t\t\t\t\t<p><a href="fr/son/vortoj/dolaro.mp3" class="sm2_button"></a> <span class="eo">dolaro</span>&nbsp;: dollar</p>%';

-- 3.3
UPDATE lecioneroj SET enhavo = REPLACE(enhavo, 'minuto.mp3" class="sm2_button"></a>minuto</span>&nbsp;: minute</p>', 'minuto.mp3" class="sm2_button"></a>minuto</span>&nbsp;: minute</p>\n\t\t\t\t\t<p><span class="eo"><a href="fr/son/vortoj/momento.mp3" class="sm2_button"></a>momento</span>&nbsp;: moment</p>')
WHERE id = 22 AND enhavo NOT LIKE '%<p><span class="eo"><a href="fr/son/vortoj/momento.mp3" class="sm2_button"></a>momento</span>&nbsp;: moment</p>%';

-- 3.3
UPDATE lecioneroj SET enhavo = REPLACE(enhavo, 'demandi.mp3" class="sm2_button"></a>demandi <sup>[2]</sup></span>&nbsp;: demander</p>', 'demandi.mp3" class="sm2_button"></a>demandi <sup>[2]</sup></span>&nbsp;: demander</p>\n\t\t\t\t\t<p><span class="eo"><a href="fr/son/vortoj/fini.mp3" class="sm2_button"></a>fini</span>&nbsp;: finir</p>')
WHERE id = 22 AND enhavo NOT LIKE '%<p><span class="eo"><a href="fr/son/vortoj/fini.mp3" class="sm2_button"></a>fini</span>&nbsp;: finir</p>%';

-- 3.5
UPDATE lecioneroj SET enhavo = REPLACE(enhavo, '<p class="col s12 m7">Nous irons <b>en vélo</b>.</p>', '<p class="col s12 m7">Nous irons <b>en vélo</b>.</p>\n\t\t\t<p class="col s12 m5"><span class="eo"><b>Subite</b> ŝi kuris.</span></p>\n\t\t\t<p class="col s12 m7"><b>Soudain</b>, elle a couru. (<a href="fr/son/vortoj/subita.mp3" class="sm2_button"></a><span class="eo">subita</span>&nbsp;: soudain)</p>\n\t\t\t<p class="col s12 m5"><span class="eo"><b>Ekzemple</b>, la kafo kaj la teo estas varmaj.</span></p>\n\t\t\t<p class="col s12 m7"><b>Par exemple</b>, le café et le thé sont chauds. (<a href="fr/son/vortoj/ekzemplo.mp3" class="sm2_button"></a><span class="eo">ekzemplo</span>&nbsp;: exemple)</p>')
WHERE id = 24 AND enhavo NOT LIKE '%<p class="col s12 m5"><span class="eo"><b>Subite</b> ŝi kuris.</span></p>\n\t\t\t<p class="col s12 m7"><b>Soudain</b>, elle a couru. (<a href="fr/son/vortoj/subita.mp3" class="sm2_button"></a><span class="eo">subita</span>&nbsp;: soudain)</p>\n\t\t\t<p class="col s12 m5"><span class="eo"><b>Ekzemple</b>, la kafo kaj la teo estas varmaj.</span></p>\n\t\t\t<p class="col s12 m7"><b>Par exemple</b>, le café et le thé sont chauds. (<a href="fr/son/vortoj/ekzemplo.mp3" class="sm2_button"></a><span class="eo">ekzemplo</span>&nbsp;: exemple)</p>%';

-- 3.8
UPDATE lecioneroj SET enhavo = REPLACE(enhavo, '<span class="eo">la unua kaj la lasta tago</span>, le premier et le dernier jour.</li>', '<span class="eo">la unua kaj la lasta tago</span>, le premier et le dernier jour.</li>\n\t\t\t<li>Les ordinaux donnent l’<b>ordre</b> (<a href="fr/son/vortoj/ordo.mp3" class="sm2_button"></a><span class="eo">ordo</span>)&nbsp;: <span class="eo">la unua, la dua, la tria…</span></li>')
WHERE id = 27 AND enhavo NOT LIKE '%<li>Les ordinaux donnent l’<b>ordre</b> (<a href="fr/son/vortoj/ordo.mp3" class="sm2_button"></a><span class="eo">ordo</span>)&nbsp;: <span class="eo">la unua, la dua, la tria…</span></li>%';

-- 4.5
UPDATE lecioneroj SET enhavo = REPLACE(enhavo, '<span class="eo">mo<u>nu</u>jo</span>&nbsp;: porte-monnaie</p>', '<span class="eo">mo<u>nu</u>jo</span>&nbsp;: porte-monnaie</p>\n\t\t\t\t\t\t<p><a href="fr/son/vortoj/muziko.mp3" class="sm2_button"></a><span class="marque">•</span> <span class="eo">mu<u>zi</u>ko</span>&nbsp;: musique</p>')
WHERE id = 38 AND enhavo NOT LIKE '%<p><a href="fr/son/vortoj/muziko.mp3" class="sm2_button"></a><span class="marque">•</span> <span class="eo">mu<u>zi</u>ko</span>&nbsp;: musique</p>%';

-- 4.5
UPDATE lecioneroj SET enhavo = REPLACE(enhavo, '<span class="eo">retme<u>sa</u>ĝo</span>&nbsp;: courriel, e-mail</p>', '<span class="eo">retme<u>sa</u>ĝo</span>&nbsp;: courriel, e-mail</p>\n\t\t\t\t\t\t<p><a href="fr/son/vortoj/posxto.mp3" class="sm2_button"></a><span class="marque">•</span> <span class="eo"><u>poŝ</u>to</span>&nbsp;: poste, courrier</p>')
WHERE id = 38 AND enhavo NOT LIKE '%<p><a href="fr/son/vortoj/posxto.mp3" class="sm2_button"></a><span class="marque">•</span> <span class="eo"><u>poŝ</u>to</span>&nbsp;: poste, courrier</p>%';

-- 5.1
UPDATE lecioneroj SET enhavo = REPLACE(enhavo, '(<span class="eo">Sukceson!</span> Bonne chance&nbsp;!)</p>', '(<span class="eo">Sukceson!</span> Bonne chance&nbsp;!)</p>\n\t\t\t\t<p class="col s12 m6"><a href="fr/son/vortoj/bedauxri.mp3" class="sm2_button"></a><span class="eo">bedaŭri</span>&nbsp;: regretter (<span class="eo">Mi bedaŭras.</span> Je regrette, désolé.)</p>\n\t\t\t\t<p class="col s12 m6"><a href="fr/son/vortoj/memori.mp3" class="sm2_button"></a><span class="eo">memori</span>&nbsp;: se souvenir de (<span class="eo">Ĉu vi memoras?</span> Vous vous souvenez&nbsp;?)</p>\n\t\t\t\t<p class="col s12 m6"><a href="fr/son/vortoj/problemo.mp3" class="sm2_button"></a><span class="eo">problemo</span>&nbsp;: problème (<span class="eo">Ne estas problemo.</span> Pas de problème.)</p>\n\t\t\t\t<p class="col s12 m6"><a href="fr/son/vortoj/rajti.mp3" class="sm2_button"></a><span class="eo">rajti</span>&nbsp;: avoir le droit de (<span class="eo">Ĉu mi rajtas demandi?</span> Puis-je demander&nbsp;?)</p>\n\t\t\t\t<p class="col s12 m6"><a href="fr/son/vortoj/klara.mp3" class="sm2_button"></a><span class="eo">klara</span>&nbsp;: clair (<span class="eo">Ĉu estas klare?</span> C’est clair&nbsp;?)</p>')
WHERE id = 43 AND enhavo NOT LIKE '%<p class="col s12 m6"><a href="fr/son/vortoj/bedauxri.mp3" class="sm2_button"></a><span class="eo">bedaŭri</span>&nbsp;: regretter (<span class="eo">Mi bedaŭras.</span> Je regrette, désolé.)</p>\n\t\t\t\t<p class="col s12 m6"><a href="fr/son/vortoj/memori.mp3" class="sm2_button"></a><span class="eo">memori</span>&nbsp;: se souvenir de (<span class="eo">Ĉu vi memoras?</span> Vous vous souvenez&nbsp;?)</p>\n\t\t\t\t<p class="col s12 m6"><a href="fr/son/vortoj/problemo.mp3" class="sm2_button"></a><span class="eo">problemo</span>&nbsp;: problème (<span class="eo">Ne estas problemo.</span> Pas de problème.)</p>\n\t\t\t\t<p class="col s12 m6"><a href="fr/son/vortoj/rajti.mp3" class="sm2_button"></a><span class="eo">rajti</span>&nbsp;: avoir le droit de (<span class="eo">Ĉu mi rajtas demandi?</span> Puis-je demander&nbsp;?)</p>\n\t\t\t\t<p class="col s12 m6"><a href="fr/son/vortoj/klara.mp3" class="sm2_button"></a><span class="eo">klara</span>&nbsp;: clair (<span class="eo">Ĉu estas klare?</span> C’est clair&nbsp;?)</p>%';

-- 5.2
UPDATE lecioneroj SET enhavo = REPLACE(enhavo, '<p class="col s12"><span class="eo">kiom</span>&nbsp;: combien</p>', '<p class="col s12"><span class="eo">kiom</span>&nbsp;: combien</p>\n\t\t\t<p class="col s12"><a href="fr/son/vortoj/maniero.mp3" class="sm2_button"></a><span class="eo">maniero</span>&nbsp;: manière (<span class="eo">kiel</span>&nbsp;: de quelle manière)</p>')
WHERE id = 44 AND enhavo NOT LIKE '%<p class="col s12"><a href="fr/son/vortoj/maniero.mp3" class="sm2_button"></a><span class="eo">maniero</span>&nbsp;: manière (<span class="eo">kiel</span>&nbsp;: de quelle manière)</p>%';

-- 6.8
UPDATE lecioneroj SET enhavo = REPLACE(enhavo, '<p class="col s12 m6"><a href="fr/son/vortoj/preta.mp3" class="sm2_button"></a><span class="eo">preta</span>&nbsp;: prêt</p>', '<p class="col s12 m6"><a href="fr/son/vortoj/preta.mp3" class="sm2_button"></a><span class="eo">preta</span>&nbsp;: prêt</p>\n\t\t\t\t<p class="col s12 m6"><a href="fr/son/vortoj/ekskurso.mp3" class="sm2_button"></a><span class="eo">ekskurso</span>&nbsp;: excursion</p>\n\t\t\t\t<p class="col s12 m6"><a href="fr/son/vortoj/plano.mp3" class="sm2_button"></a><span class="eo">plano</span>&nbsp;: plan, projet</p>\n\t\t\t\t<p class="col s12 m6"><a href="fr/son/vortoj/sekvi.mp3" class="sm2_button"></a><span class="eo">sekvi</span>&nbsp;: suivre</p>')
WHERE id = 56 AND enhavo NOT LIKE '%<p class="col s12 m6"><a href="fr/son/vortoj/ekskurso.mp3" class="sm2_button"></a><span class="eo">ekskurso</span>&nbsp;: excursion</p>\n\t\t\t\t<p class="col s12 m6"><a href="fr/son/vortoj/plano.mp3" class="sm2_button"></a><span class="eo">plano</span>&nbsp;: plan, projet</p>\n\t\t\t\t<p class="col s12 m6"><a href="fr/son/vortoj/sekvi.mp3" class="sm2_button"></a><span class="eo">sekvi</span>&nbsp;: suivre</p>%';

-- 6.9
UPDATE lecioneroj SET enhavo = REPLACE(enhavo, '<p class="col s12 m6"><a href="fr/son/vortoj/agrabla.mp3" class="sm2_button"></a><span class="eo">agrabla</span>&nbsp;: agréable</p>', '<p class="col s12 m6"><a href="fr/son/vortoj/agrabla.mp3" class="sm2_button"></a><span class="eo">agrabla</span>&nbsp;: agréable</p>\n\t\t\t\t<p class="col s12 m6"><a href="fr/son/vortoj/alta.mp3" class="sm2_button"></a><span class="eo">alta</span>&nbsp;: haut</p>\n\t\t\t\t<p class="col s12 m6"><a href="fr/son/vortoj/proksima.mp3" class="sm2_button"></a><span class="eo">proksima</span>&nbsp;: proche</p>\n\t\t\t\t<p class="col s12 m6"><a href="fr/son/vortoj/sovagxa.mp3" class="sm2_button"></a><span class="eo">sovaĝa</span>&nbsp;: sauvage</p>\n\t\t\t\t<p class="col s12 m6"><a href="fr/son/vortoj/temperaturo.mp3" class="sm2_button"></a><span class="eo">temperaturo</span>&nbsp;: température</p>')
WHERE id = 58 AND enhavo NOT LIKE '%<p class="col s12 m6"><a href="fr/son/vortoj/alta.mp3" class="sm2_button"></a><span class="eo">alta</span>&nbsp;: haut</p>\n\t\t\t\t<p class="col s12 m6"><a href="fr/son/vortoj/proksima.mp3" class="sm2_button"></a><span class="eo">proksima</span>&nbsp;: proche</p>\n\t\t\t\t<p class="col s12 m6"><a href="fr/son/vortoj/sovagxa.mp3" class="sm2_button"></a><span class="eo">sovaĝa</span>&nbsp;: sauvage</p>\n\t\t\t\t<p class="col s12 m6"><a href="fr/son/vortoj/temperaturo.mp3" class="sm2_button"></a><span class="eo">temperaturo</span>&nbsp;: température</p>%';

-- 8.6
UPDATE lecioneroj SET enhavo = REPLACE(enhavo, '<p class="col s12 m6"><a href="fr/son/vortoj/gxeni.mp3" class="sm2_button"></a><span class="eo">ĝeni</span>&nbsp;: gêner, déranger</p>', '<p class="col s12 m6"><a href="fr/son/vortoj/gxeni.mp3" class="sm2_button"></a><span class="eo">ĝeni</span>&nbsp;: gêner, déranger</p>\n\t\t\t\t\t<p class="col s12 m6"><a href="fr/son/vortoj/mano.mp3" class="sm2_button"></a><span class="eo">mano</span>&nbsp;: main</p>\n\t\t\t\t\t<p class="col s12 m6"><a href="fr/son/vortoj/vizagxo.mp3" class="sm2_button"></a><span class="eo">vizaĝo</span>&nbsp;: visage</p>\n\t\t\t\t\t<p class="col s12 m6"><a href="fr/son/vortoj/forta.mp3" class="sm2_button"></a><span class="eo">forta</span>&nbsp;: fort</p>\n\t\t\t\t\t<p class="col s12 m6"><a href="fr/son/vortoj/terura.mp3" class="sm2_button"></a><span class="eo">terura</span>&nbsp;: terrible, affreux</p>\n\t\t\t\t\t<p class="col s12 m6"><a href="fr/son/vortoj/trankvila.mp3" class="sm2_button"></a><span class="eo">trankvila</span>&nbsp;: calme, tranquille</p>')
WHERE id = 77 AND enhavo NOT LIKE '%<p class="col s12 m6"><a href="fr/son/vortoj/mano.mp3" class="sm2_button"></a><span class="eo">mano</span>&nbsp;: main</p>\n\t\t\t\t\t<p class="col s12 m6"><a href="fr/son/vortoj/vizagxo.mp3" class="sm2_button"></a><span class="eo">vizaĝo</span>&nbsp;: visage</p>\n\t\t\t\t\t<p class="col s12 m6"><a href="fr/son/vortoj/forta.mp3" class="sm2_button"></a><span class="eo">forta</span>&nbsp;: fort</p>\n\t\t\t\t\t<p class="col s12 m6"><a href="fr/son/vortoj/terura.mp3" class="sm2_button"></a><span class="eo">terura</span>&nbsp;: terrible, affreux</p>\n\t\t\t\t\t<p class="col s12 m6"><a href="fr/son/vortoj/trankvila.mp3" class="sm2_button"></a><span class="eo">trankvila</span>&nbsp;: calme, tranquille</p>%';

-- 9.11
UPDATE lecioneroj SET enhavo = REPLACE(enhavo, '<p class="col s12 m6"><a href="fr/son/vortoj/afero.mp3" class="sm2_button"></a><span class="eo">afero</span>&nbsp;: affaire, chose</p>', '<p class="col s12 m6"><a href="fr/son/vortoj/afero.mp3" class="sm2_button"></a><span class="eo">afero</span>&nbsp;: affaire, chose</p>\n\t\t\t\t\t<p class="col s12 m6"><a href="fr/son/vortoj/rimarki.mp3" class="sm2_button"></a><span class="eo">rimarki</span>&nbsp;: remarquer</p>\n\t\t\t\t\t<p class="col s12 m6"><a href="fr/son/vortoj/sekreto.mp3" class="sm2_button"></a><span class="eo">sekreto</span>&nbsp;: secret</p>\n\t\t\t\t\t<p class="col s12 m6"><a href="fr/son/vortoj/raporti.mp3" class="sm2_button"></a><span class="eo">raporti</span>&nbsp;: faire un rapport, rendre compte</p>\n\t\t\t\t\t<p class="col s12 m6"><a href="fr/son/vortoj/rilati.mp3" class="sm2_button"></a><span class="eo">rilati</span>&nbsp;: concerner, avoir rapport à (<span class="eo">rilati al</span>)</p>\n\t\t\t\t\t<p class="col s12 m6"><a href="fr/son/vortoj/universala.mp3" class="sm2_button"></a><span class="eo">universala</span>&nbsp;: universel (<span class="eo">Universala Kongreso</span>)</p>')
WHERE id = 89 AND enhavo NOT LIKE '%<p class="col s12 m6"><a href="fr/son/vortoj/rimarki.mp3" class="sm2_button"></a><span class="eo">rimarki</span>&nbsp;: remarquer</p>\n\t\t\t\t\t<p class="col s12 m6"><a href="fr/son/vortoj/sekreto.mp3" class="sm2_button"></a><span class="eo">sekreto</span>&nbsp;: secret</p>\n\t\t\t\t\t<p class="col s12 m6"><a href="fr/son/vortoj/raporti.mp3" class="sm2_button"></a><span class="eo">raporti</span>&nbsp;: faire un rapport, rendre compte</p>\n\t\t\t\t\t<p class="col s12 m6"><a href="fr/son/vortoj/rilati.mp3" class="sm2_button"></a><span class="eo">rilati</span>&nbsp;: concerner, avoir rapport à (<span class="eo">rilati al</span>)</p>\n\t\t\t\t\t<p class="col s12 m6"><a href="fr/son/vortoj/universala.mp3" class="sm2_button"></a><span class="eo">universala</span>&nbsp;: universel (<span class="eo">Universala Kongreso</span>)</p>%';

-- 7.1
UPDATE lecioneroj SET enhavo = REPLACE(enhavo, '<span class="eo">malpeza</span>&nbsp;: léger</p>', '<span class="eo">malpeza</span>&nbsp;: léger</p>\n\t\t\t<p class="col s12"><span class="marque">•</span> <span class="eo">utila</span>&nbsp;: utile&emsp;→&emsp;<span class="eo">malutila</span>&nbsp;: nuisible</p>')
WHERE id = 68 AND enhavo NOT LIKE '%<p class="col s12"><span class="marque">•</span> <span class="eo">utila</span>&nbsp;: utile&emsp;→&emsp;<span class="eo">malutila</span>&nbsp;: nuisible</p>%';

-- 7.2
UPDATE lecioneroj SET enhavo = REPLACE(enhavo, '<span class="eo"><span class="marque">•</span> pianisto</span>&nbsp;: pianiste</p>', '<span class="eo"><span class="marque">•</span> pianisto</span>&nbsp;: pianiste</p>\n\t\t\t<p class="col s12"><span class="eo"><span class="marque">•</span> polico</span>&nbsp;: police&emsp;→&emsp;<span class="eo">policisto</span>&nbsp;: policier, policière</p>')
WHERE id = 69 AND enhavo NOT LIKE '%<p class="col s12"><span class="eo"><span class="marque">•</span> polico</span>&nbsp;: police&emsp;→&emsp;<span class="eo">policisto</span>&nbsp;: policier, policière</p>%';

-- 7.3
UPDATE lecioneroj SET enhavo = REPLACE(enhavo, '<span class="eo">certeco</span>&nbsp;: certitude</p>', '<span class="eo">certeco</span>&nbsp;: certitude</p>\n\t\t\t<p class="col s12"><span class="eo"><span class="marque">•</span> libera</span>&nbsp;: libre&emsp;→&emsp;<span class="eo">libereco</span>&nbsp;: liberté</p>')
WHERE id = 470 AND enhavo NOT LIKE '%<p class="col s12"><span class="eo"><span class="marque">•</span> libera</span>&nbsp;: libre&emsp;→&emsp;<span class="eo">libereco</span>&nbsp;: liberté</p>%';

-- 7.3
UPDATE lecioneroj SET enhavo = REPLACE(enhavo, '<span class="eo"><span class="marque">•</span> iomete</span>&nbsp;: un petit peu</p>', '<span class="eo"><span class="marque">•</span> iomete</span>&nbsp;: un petit peu</p>\n\t\t\t<p class="col s12"><span class="eo"><span class="marque">•</span> poŝo</span>&nbsp;: poche&emsp;→&emsp;<span class="eo">poŝeto</span>&nbsp;: pochette, petite poche</p>')
WHERE id = 470 AND enhavo NOT LIKE '%<p class="col s12"><span class="eo"><span class="marque">•</span> poŝo</span>&nbsp;: poche&emsp;→&emsp;<span class="eo">poŝeto</span>&nbsp;: pochette, petite poche</p>%';

-- 8.1
UPDATE lecioneroj SET enhavo = REPLACE(enhavo, '<p class="col s7 offset-s5">= Je veux que tu viennes.</p>', '<p class="col s7 offset-s5">= Je veux que tu viennes.</p>\n\t\t\t\t<p class="col s7 offset-s5"><span class="eo">Atent<b>u</b>!</span></p>\n\t\t\t\t<p class="col s7 offset-s5">= Attention&nbsp;! (<a href="fr/son/vortoj/atenti.mp3" class="sm2_button"></a><span class="eo">atenti</span>&nbsp;: faire attention)</p>\n\t\t\t\t<p class="col s7 offset-s5"><span class="eo">Estas necese, ke vi ven<b>u</b>.</span></p>\n\t\t\t\t<p class="col s7 offset-s5">= Il faut que tu viennes. (<a href="fr/son/vortoj/necesa.mp3" class="sm2_button"></a><span class="eo">necesa</span>&nbsp;: nécessaire)</p>')
WHERE id = 74 AND enhavo NOT LIKE '%<p class="col s7 offset-s5"><span class="eo">Atent<b>u</b>!</span></p>\n\t\t\t\t<p class="col s7 offset-s5">= Attention&nbsp;! (<a href="fr/son/vortoj/atenti.mp3" class="sm2_button"></a><span class="eo">atenti</span>&nbsp;: faire attention)</p>\n\t\t\t\t<p class="col s7 offset-s5"><span class="eo">Estas necese, ke vi ven<b>u</b>.</span></p>\n\t\t\t\t<p class="col s7 offset-s5">= Il faut que tu viennes. (<a href="fr/son/vortoj/necesa.mp3" class="sm2_button"></a><span class="eo">necesa</span>&nbsp;: nécessaire)</p>%';

-- 9.7
UPDATE lecioneroj SET enhavo = REPLACE(enhavo, '<span class="eo">Ju pli mi lernas, des pli mi scias.</span>&nbsp;: Plus j’apprends, plus je sais.</p>', '<span class="eo">Ju pli mi lernas, des pli mi scias.</span>&nbsp;: Plus j’apprends, plus je sais.</p>\n\t\t\t\t<p class="col s12"><a href="fr/son/vortoj/plu.mp3" class="sm2_button"></a><span class="eo">ne … plu</span>&nbsp;: ne … plus<br>&emsp;<span class="eo">Mi ne plu fumas.</span>&nbsp;: Je ne fume plus.</p>')
WHERE id = 86 AND enhavo NOT LIKE '%<p class="col s12"><a href="fr/son/vortoj/plu.mp3" class="sm2_button"></a><span class="eo">ne … plu</span>&nbsp;: ne … plus<br>&emsp;<span class="eo">Mi ne plu fumas.</span>&nbsp;: Je ne fume plus.</p>%';

-- vocabulaire à réviser
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'familio', 'famille', 'nom', 3 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'familio' AND lecionero_id = 3);
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'trovi', 'trouver', 'verbe', 14 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'trovi' AND lecionero_id = 14);
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'kelnero', 'serveur (au café)', 'nom', 14 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'kelnero' AND lecionero_id = 14);
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'dolaro', 'dollar', 'nom', 14 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'dolaro' AND lecionero_id = 14);
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'momento', 'moment', 'nom', 22 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'momento' AND lecionero_id = 22);
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'fini', 'finir', 'verbe', 22 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'fini' AND lecionero_id = 22);
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'subita', 'soudain, subit', 'adj', 24 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'subita' AND lecionero_id = 24);
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'ekzemplo', 'exemple', 'nom', 24 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'ekzemplo' AND lecionero_id = 24);
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'ordo', 'ordre', 'nom', 27 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'ordo' AND lecionero_id = 27);
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'muziko', 'musique', 'nom', 38 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'muziko' AND lecionero_id = 38);
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'poŝto', 'poste, courrier', 'nom', 38 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'poŝto' AND lecionero_id = 38);
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'bedaŭri', 'regretter', 'verbe', 43 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'bedaŭri' AND lecionero_id = 43);
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'memori', 'se souvenir de', 'verbe', 43 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'memori' AND lecionero_id = 43);
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'problemo', 'problème', 'nom', 43 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'problemo' AND lecionero_id = 43);
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'rajti', 'avoir le droit de', 'verbe', 43 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'rajti' AND lecionero_id = 43);
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'klara', 'clair', 'adj', 43 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'klara' AND lecionero_id = 43);
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'maniero', 'manière, façon', 'nom', 44 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'maniero' AND lecionero_id = 44);
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'ekskurso', 'excursion', 'nom', 56 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'ekskurso' AND lecionero_id = 56);
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'plano', 'plan, projet', 'nom', 56 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'plano' AND lecionero_id = 56);
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'sekvi', 'suivre', 'verbe', 56 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'sekvi' AND lecionero_id = 56);
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'alta', 'haut', 'adj', 58 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'alta' AND lecionero_id = 58);
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'proksima', 'proche', 'adj', 58 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'proksima' AND lecionero_id = 58);
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'sovaĝa', 'sauvage', 'adj', 58 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'sovaĝa' AND lecionero_id = 58);
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'temperaturo', 'température', 'nom', 58 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'temperaturo' AND lecionero_id = 58);
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'mano', 'main', 'nom', 77 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'mano' AND lecionero_id = 77);
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'vizaĝo', 'visage', 'nom', 77 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'vizaĝo' AND lecionero_id = 77);
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'forta', 'fort', 'adj', 77 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'forta' AND lecionero_id = 77);
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'terura', 'terrible, affreux', 'adj', 77 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'terura' AND lecionero_id = 77);
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'trankvila', 'calme, tranquille', 'adj', 77 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'trankvila' AND lecionero_id = 77);
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'rimarki', 'remarquer', 'verbe', 89 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'rimarki' AND lecionero_id = 89);
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'sekreto', 'secret', 'nom', 89 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'sekreto' AND lecionero_id = 89);
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'raporti', 'faire un rapport, rendre compte', 'verbe', 89 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'raporti' AND lecionero_id = 89);
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'rilati', 'concerner, avoir rapport à', 'verbe', 89 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'rilati' AND lecionero_id = 89);
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'universala', 'universel', 'adj', 89 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'universala' AND lecionero_id = 89);
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'utila', 'utile', 'adj', 68 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'utila' AND lecionero_id = 68);
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'polico', 'police', 'nom', 69 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'polico' AND lecionero_id = 69);
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'libera', 'libre', 'adj', 470 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'libera' AND lecionero_id = 470);
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'poŝo', 'poche', 'nom', 470 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'poŝo' AND lecionero_id = 470);
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'atenti', 'faire attention', 'verbe', 74 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'atenti' AND lecionero_id = 74);
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'necesa', 'nécessaire', 'adj', 74 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'necesa' AND lecionero_id = 74);
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'plu', 'encore, davantage (ne … plu : ne … plus)', 'adv', 86 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'plu' AND lecionero_id = 86);
