-- #1117 : cours élémentaire, mots fréquents de la méthode de Zagreb et de la Metodo 11 absents du cours, 2e lot (39 mots).
-- Pages de lecture et d'exercice photo (2.5, 6.7, 6.8, 6.9, 8.6, 9.9, 9.11) : encadré « D'autres mots utiles » sous la liste
-- du texte, avec des mots du même thème. Pages de grammaire : lasta et manki en 3.8 (ordinaux, kiom da), mots de politesse
-- et de présentation en 5.1, krom, laŭ, trans dans la liste des prépositions de 6.6, mem en 8.7, eĉ, nek, kvankam, kvazaŭ,
-- ju… des en 9.7. Ajout dans les pages (lecioneroj.enhavo) et dans le vocabulaire à réviser (vortoj). Script rejouable.
SET NAMES utf8mb4;

-- 2.5
UPDATE lecioneroj SET enhavo = REPLACE(enhavo, '<p class="col s12 m6"><a href="fr/son/vortoj/flugi.mp3" class="sm2_button"></a><span class="eo">flugi</span> : voler (oiseau, avion, etc.)</p>\n\t\t\t</div>', '<p class="col s12 m6"><a href="fr/son/vortoj/flugi.mp3" class="sm2_button"></a><span class="eo">flugi</span> : voler (oiseau, avion, etc.)</p>\n\t\t\t</div>\n\t\t\t<p class="eta"><b>D’autres mots utiles</b>&nbsp;:</p>\n\t\t\t<div class="vortlisto row">\n\t\t\t\t<p class="col s6"><a href="fr/son/vortoj/lumo.mp3" class="sm2_button"></a><span class="eo">lumo</span> : lumière</p>\n\t\t\t</div>')
WHERE id = 276 AND enhavo NOT LIKE '%<p class="eta"><b>D’autres mots utiles</b>&nbsp;:</p>\n\t\t\t<div class="vortlisto row">\n\t\t\t\t<p class="col s6"><a href="fr/son/vortoj/lumo.mp3" class="sm2_button"></a><span class="eo">lumo</span> : lumière</p>\n\t\t\t</div>%';

-- 6.7
UPDATE lecioneroj SET enhavo = REPLACE(enhavo, '<p class="col s6"><a href="fr/son/vortoj/vojagxo.mp3" class="sm2_button"></a><span class="eo">vojaĝo</span> : voyage</p>\n\t\t\t</div>', '<p class="col s6"><a href="fr/son/vortoj/vojagxo.mp3" class="sm2_button"></a><span class="eo">vojaĝo</span> : voyage</p>\n\t\t\t</div>\n\t\t\t<p class="eta"><b>D’autres mots utiles</b>&nbsp;:</p>\n\t\t\t<div class="vortlisto row">\n\t\t\t\t<p class="col s6"><a href="fr/son/vortoj/salti.mp3" class="sm2_button"></a><span class="eo">salti</span> : sauter</p>\n\t\t\t\t<p class="col s6"><a href="fr/son/vortoj/placo.mp3" class="sm2_button"></a><span class="eo">placo</span> : place (d’une ville)</p>\n\t\t\t</div>')
WHERE id = 57 AND enhavo NOT LIKE '%<p class="eta"><b>D’autres mots utiles</b>&nbsp;:</p>\n\t\t\t<div class="vortlisto row">\n\t\t\t\t<p class="col s6"><a href="fr/son/vortoj/salti.mp3" class="sm2_button"></a><span class="eo">salti</span> : sauter</p>\n\t\t\t\t<p class="col s6"><a href="fr/son/vortoj/placo.mp3" class="sm2_button"></a><span class="eo">placo</span> : place (d’une ville)</p>\n\t\t\t</div>%';

-- 6.8
UPDATE lecioneroj SET enhavo = REPLACE(enhavo, '<p class="col s12"><a href="fr/son/vortoj/tagmangxo.mp3" class="sm2_button"></a><span class="eo">tagmanĝo</span>&nbsp;: repas du midi (France : déjeuner, Canada : dîner)</p>\n\t\t\t</div>', '<p class="col s12"><a href="fr/son/vortoj/tagmangxo.mp3" class="sm2_button"></a><span class="eo">tagmanĝo</span>&nbsp;: repas du midi (France : déjeuner, Canada : dîner)</p>\n\t\t\t</div>\n\t\t\t<p class="eta"><b>D’autres mots utiles</b>&nbsp;:</p>\n\t\t\t<div class="vortlisto row">\n\t\t\t\t<p class="col s12 m6"><a href="fr/son/vortoj/vagono.mp3" class="sm2_button"></a><span class="eo">vagono</span>&nbsp;: wagon, voiture (de train)</p>\n\t\t\t\t<p class="col s12 m6"><a href="fr/son/vortoj/rapida.mp3" class="sm2_button"></a><span class="eo">rapida</span>&nbsp;: rapide</p>\n\t\t\t\t<p class="col s12 m6"><a href="fr/son/vortoj/movi.mp3" class="sm2_button"></a><span class="eo">movi</span>&nbsp;: bouger, déplacer</p>\n\t\t\t\t<p class="col s12 m6"><a href="fr/son/vortoj/preta.mp3" class="sm2_button"></a><span class="eo">preta</span>&nbsp;: prêt</p>\n\t\t\t</div>')
WHERE id = 56 AND enhavo NOT LIKE '%<p class="eta"><b>D’autres mots utiles</b>&nbsp;:</p>\n\t\t\t<div class="vortlisto row">\n\t\t\t\t<p class="col s12 m6"><a href="fr/son/vortoj/vagono.mp3" class="sm2_button"></a><span class="eo">vagono</span>&nbsp;: wagon, voiture (de train)</p>\n\t\t\t\t<p class="col s12 m6"><a href="fr/son/vortoj/rapida.mp3" class="sm2_button"></a><span class="eo">rapida</span>&nbsp;: rapide</p>\n\t\t\t\t<p class="col s12 m6"><a href="fr/son/vortoj/movi.mp3" class="sm2_button"></a><span class="eo">movi</span>&nbsp;: bouger, déplacer</p>\n\t\t\t\t<p class="col s12 m6"><a href="fr/son/vortoj/preta.mp3" class="sm2_button"></a><span class="eo">preta</span>&nbsp;: prêt</p>\n\t\t\t</div>%';

-- 6.9
UPDATE lecioneroj SET enhavo = REPLACE(enhavo, '<p class="col s12 m6"><a href="fr/son/vortoj/povi.mp3" class="sm2_button"></a><span class="eo">povi</span>&nbsp;: pouvoir, être capable de</p>\n\t\t\t</div>', '<p class="col s12 m6"><a href="fr/son/vortoj/povi.mp3" class="sm2_button"></a><span class="eo">povi</span>&nbsp;: pouvoir, être capable de</p>\n\t\t\t</div>\n\t\t\t<p class="eta"><b>D’autres mots utiles</b>&nbsp;:</p>\n\t\t\t<div class="vortlisto row">\n\t\t\t\t<p class="col s12 m6"><a href="fr/son/vortoj/monto.mp3" class="sm2_button"></a><span class="eo">monto</span>&nbsp;: montagne</p>\n\t\t\t\t<p class="col s12 m6"><a href="fr/son/vortoj/montri.mp3" class="sm2_button"></a><span class="eo">montri</span>&nbsp;: montrer</p>\n\t\t\t\t<p class="col s12 m6"><a href="fr/son/vortoj/agrabla.mp3" class="sm2_button"></a><span class="eo">agrabla</span>&nbsp;: agréable</p>\n\t\t\t</div>')
WHERE id = 58 AND enhavo NOT LIKE '%<p class="eta"><b>D’autres mots utiles</b>&nbsp;:</p>\n\t\t\t<div class="vortlisto row">\n\t\t\t\t<p class="col s12 m6"><a href="fr/son/vortoj/monto.mp3" class="sm2_button"></a><span class="eo">monto</span>&nbsp;: montagne</p>\n\t\t\t\t<p class="col s12 m6"><a href="fr/son/vortoj/montri.mp3" class="sm2_button"></a><span class="eo">montri</span>&nbsp;: montrer</p>\n\t\t\t\t<p class="col s12 m6"><a href="fr/son/vortoj/agrabla.mp3" class="sm2_button"></a><span class="eo">agrabla</span>&nbsp;: agréable</p>\n\t\t\t</div>%';

-- 8.6
UPDATE lecioneroj SET enhavo = REPLACE(enhavo, '<p class="col s12 m6"><a href="fr/son/vortoj/placxi.mp3" class="sm2_button"></a><span class="eo">plaĉi</span>&nbsp;: plaire</p>\n\t\t\t\t</div>', '<p class="col s12 m6"><a href="fr/son/vortoj/placxi.mp3" class="sm2_button"></a><span class="eo">plaĉi</span>&nbsp;: plaire</p>\n\t\t\t\t</div>\n\t\t\t\t<p class="eta"><b>D’autres mots utiles</b>&nbsp;:</p>\n\t\t\t\t<div class="vortlisto row">\n\t\t\t\t\t<p class="col s12 m6"><a href="fr/son/vortoj/kapo.mp3" class="sm2_button"></a><span class="eo">kapo</span>&nbsp;: tête</p>\n\t\t\t\t\t<p class="col s12 m6"><a href="fr/son/vortoj/busxo.mp3" class="sm2_button"></a><span class="eo">buŝo</span>&nbsp;: bouche</p>\n\t\t\t\t\t<p class="col s12 m6"><a href="fr/son/vortoj/orelo.mp3" class="sm2_button"></a><span class="eo">orelo</span>&nbsp;: oreille</p>\n\t\t\t\t\t<p class="col s12 m6"><a href="fr/son/vortoj/dolori.mp3" class="sm2_button"></a><span class="eo">dolori</span>&nbsp;: faire mal (<span class="eo">la kapo doloras</span>, la tête fait mal)</p>\n\t\t\t\t\t<p class="col s12 m6"><a href="fr/son/vortoj/koleri.mp3" class="sm2_button"></a><span class="eo">koleri</span>&nbsp;: être en colère</p>\n\t\t\t\t\t<p class="col s12 m6"><a href="fr/son/vortoj/plori.mp3" class="sm2_button"></a><span class="eo">plori</span>&nbsp;: pleurer</p>\n\t\t\t\t\t<p class="col s12 m6"><a href="fr/son/vortoj/timi.mp3" class="sm2_button"></a><span class="eo">timi</span>&nbsp;: avoir peur, craindre</p>\n\t\t\t\t\t<p class="col s12 m6"><a href="fr/son/vortoj/gxeni.mp3" class="sm2_button"></a><span class="eo">ĝeni</span>&nbsp;: gêner, déranger</p>\n\t\t\t\t</div>')
WHERE id = 77 AND enhavo NOT LIKE '%<p class="eta"><b>D’autres mots utiles</b>&nbsp;:</p>\n\t\t\t\t<div class="vortlisto row">\n\t\t\t\t\t<p class="col s12 m6"><a href="fr/son/vortoj/kapo.mp3" class="sm2_button"></a><span class="eo">kapo</span>&nbsp;: tête</p>\n\t\t\t\t\t<p class="col s12 m6"><a href="fr/son/vortoj/busxo.mp3" class="sm2_button"></a><span class="eo">buŝo</span>&nbsp;: bouche</p>\n\t\t\t\t\t<p class="col s12 m6"><a href="fr/son/vortoj/orelo.mp3" class="sm2_button"></a><span class="eo">orelo</span>&nbsp;: oreille</p>\n\t\t\t\t\t<p class="col s12 m6"><a href="fr/son/vortoj/dolori.mp3" class="sm2_button"></a><span class="eo">dolori</span>&nbsp;: faire mal (<span class="eo">la kapo doloras</span>, la tête fait mal)</p>\n\t\t\t\t\t<p class="col s12 m6"><a href="fr/son/vortoj/koleri.mp3" class="sm2_button"></a><span class="eo">koleri</span>&nbsp;: être en colère</p>\n\t\t\t\t\t<p class="col s12 m6"><a href="fr/son/vortoj/plori.mp3" class="sm2_button"></a><span class="eo">plori</span>&nbsp;: pleurer</p>\n\t\t\t\t\t<p class="col s12 m6"><a href="fr/son/vortoj/timi.mp3" class="sm2_button"></a><span class="eo">timi</span>&nbsp;: avoir peur, craindre</p>\n\t\t\t\t\t<p class="col s12 m6"><a href="fr/son/vortoj/gxeni.mp3" class="sm2_button"></a><span class="eo">ĝeni</span>&nbsp;: gêner, déranger</p>\n\t\t\t\t</div>%';

-- 9.9
UPDATE lecioneroj SET enhavo = REPLACE(enhavo, '<p class="col s12 m6"><a href="fr/son/vortoj/festeni.mp3" class="sm2_button"></a><span class="eo">festeni</span>&nbsp;: festoyer</p>\n\t\t\t\t</div>', '<p class="col s12 m6"><a href="fr/son/vortoj/festeni.mp3" class="sm2_button"></a><span class="eo">festeni</span>&nbsp;: festoyer</p>\n\t\t\t\t</div>\n\t\t\t\t<p class="eta"><b>D’autres mots utiles</b>&nbsp;:</p>\n\t\t\t\t<div class="vortlisto row">\n\t\t\t\t\t<p class="col s12 m6"><a href="fr/son/vortoj/sercxi.mp3" class="sm2_button"></a><span class="eo">serĉi</span>&nbsp;: chercher</p>\n\t\t\t\t</div>')
WHERE id = 87 AND enhavo NOT LIKE '%<p class="eta"><b>D’autres mots utiles</b>&nbsp;:</p>\n\t\t\t\t<div class="vortlisto row">\n\t\t\t\t\t<p class="col s12 m6"><a href="fr/son/vortoj/sercxi.mp3" class="sm2_button"></a><span class="eo">serĉi</span>&nbsp;: chercher</p>\n\t\t\t\t</div>%';

-- 9.11
UPDATE lecioneroj SET enhavo = REPLACE(enhavo, '<p class="col s12 m6"><span class="eo">Nederlando</span>&nbsp;: Pays-Bas</p>\n\t\t\t\t</div>', '<p class="col s12 m6"><span class="eo">Nederlando</span>&nbsp;: Pays-Bas</p>\n\t\t\t\t</div>\n\t\t\t\t<p class="eta"><b>D’autres mots utiles</b>&nbsp;:</p>\n\t\t\t\t<div class="vortlisto row">\n\t\t\t\t\t<p class="col s12 m6"><a href="fr/son/vortoj/decidi.mp3" class="sm2_button"></a><span class="eo">decidi</span>&nbsp;: décider</p>\n\t\t\t\t\t<p class="col s12 m6"><a href="fr/son/vortoj/cxefo.mp3" class="sm2_button"></a><span class="eo">ĉefo</span>&nbsp;: chef</p>\n\t\t\t\t\t<p class="col s12 m6"><a href="fr/son/vortoj/afero.mp3" class="sm2_button"></a><span class="eo">afero</span>&nbsp;: affaire, chose</p>\n\t\t\t\t</div>')
WHERE id = 89 AND enhavo NOT LIKE '%<p class="eta"><b>D’autres mots utiles</b>&nbsp;:</p>\n\t\t\t\t<div class="vortlisto row">\n\t\t\t\t\t<p class="col s12 m6"><a href="fr/son/vortoj/decidi.mp3" class="sm2_button"></a><span class="eo">decidi</span>&nbsp;: décider</p>\n\t\t\t\t\t<p class="col s12 m6"><a href="fr/son/vortoj/cxefo.mp3" class="sm2_button"></a><span class="eo">ĉefo</span>&nbsp;: chef</p>\n\t\t\t\t\t<p class="col s12 m6"><a href="fr/son/vortoj/afero.mp3" class="sm2_button"></a><span class="eo">afero</span>&nbsp;: affaire, chose</p>\n\t\t\t\t</div>%';

-- 3.8
UPDATE lecioneroj SET enhavo = REPLACE(enhavo, 'Par exemple&nbsp;: <span class="eo">1-a</span>, <span class="eo">20-a</span>, <span class="eo">71-a</span> (premier, vingtième, soixante et onzième).</li>', 'Par exemple&nbsp;: <span class="eo">1-a</span>, <span class="eo">20-a</span>, <span class="eo">71-a</span> (premier, vingtième, soixante et onzième).</li>\n\t\t\t<li>Pour dire «&nbsp;dernier&nbsp;», on emploie <a href="fr/son/vortoj/lasta.mp3" class="sm2_button"></a><span class="eo">lasta</span>&nbsp;: <span class="eo">la unua kaj la lasta tago</span>, le premier et le dernier jour.</li>')
WHERE id = 27 AND enhavo NOT LIKE '%<li>Pour dire «&nbsp;dernier&nbsp;», on emploie <a href="fr/son/vortoj/lasta.mp3" class="sm2_button"></a><span class="eo">lasta</span>&nbsp;: <span class="eo">la unua kaj la lasta tago</span>, le premier et le dernier jour.</li>%';

-- 3.8
UPDATE lecioneroj SET enhavo = REPLACE(enhavo, '<p class="col s12 m6"><b>Combien</b> y aura-t-il <b>d’</b>enfants&nbsp;?<br>– Il y aura douze enfants.</p>', '<p class="col s12 m6"><b>Combien</b> y aura-t-il <b>d’</b>enfants&nbsp;?<br>– Il y aura douze enfants.</p>\n\n\t\t\t<p class="col s12 m6">\n\t\t\t\t<span class="eo"><b>Kiom da</b> plumoj mankas?<br>&emsp;&emsp;– Mankas du plumoj.</span></p>\n\t\t\t<p class="col s12 m6"><b>Combien de</b> plumes manque-t-il&nbsp;?<br>– Il manque deux plumes. (<a href="fr/son/vortoj/manki.mp3" class="sm2_button"></a><span class="eo">manki</span>&nbsp;: manquer)</p>')
WHERE id = 27 AND enhavo NOT LIKE '%<p class="col s12 m6">\n\t\t\t\t<span class="eo"><b>Kiom da</b> plumoj mankas?<br>&emsp;&emsp;– Mankas du plumoj.</span></p>\n\t\t\t<p class="col s12 m6"><b>Combien de</b> plumes manque-t-il&nbsp;?<br>– Il manque deux plumes. (<a href="fr/son/vortoj/manki.mp3" class="sm2_button"></a><span class="eo">manki</span>&nbsp;: manquer)</p>%';

-- 5.1
UPDATE lecioneroj SET enhavo = REPLACE(enhavo, '<span class="eo">lerni</span>&nbsp;: apprendre</p>', '<span class="eo">lerni</span>&nbsp;: apprendre</p>\n\t\t\t\t<p class="col s12 m6"><a href="fr/son/vortoj/provi.mp3" class="sm2_button"></a><span class="eo">provi</span>&nbsp;: essayer</p>\n\t\t\t\t<p class="col s12 m6"><a href="fr/son/vortoj/voki.mp3" class="sm2_button"></a><span class="eo">voki</span>&nbsp;: appeler</p>\n\t\t\t\t<p class="col s12 m6"><a href="fr/son/vortoj/pardoni.mp3" class="sm2_button"></a><span class="eo">pardoni</span>&nbsp;: pardonner (<span class="eo">Pardonu!</span> Pardon&nbsp;!)</p>\n\t\t\t\t<p class="col s12 m6"><a href="fr/son/vortoj/konsenti.mp3" class="sm2_button"></a><span class="eo">konsenti</span>&nbsp;: être d’accord (<span class="eo">Mi konsentas.</span> Je suis d’accord.)</p>\n\t\t\t\t<p class="col s12 m6"><a href="fr/son/vortoj/gxusta.mp3" class="sm2_button"></a><span class="eo">ĝusta</span>&nbsp;: juste, exact (<span class="eo">Ĝuste!</span> Exactement&nbsp;!)</p>\n\t\t\t\t<p class="col s12 m6"><a href="fr/son/vortoj/sukceso.mp3" class="sm2_button"></a><span class="eo">sukceso</span>&nbsp;: succès, réussite (<span class="eo">Sukceson!</span> Bonne chance&nbsp;!)</p>')
WHERE id = 43 AND enhavo NOT LIKE '%<p class="col s12 m6"><a href="fr/son/vortoj/provi.mp3" class="sm2_button"></a><span class="eo">provi</span>&nbsp;: essayer</p>\n\t\t\t\t<p class="col s12 m6"><a href="fr/son/vortoj/voki.mp3" class="sm2_button"></a><span class="eo">voki</span>&nbsp;: appeler</p>\n\t\t\t\t<p class="col s12 m6"><a href="fr/son/vortoj/pardoni.mp3" class="sm2_button"></a><span class="eo">pardoni</span>&nbsp;: pardonner (<span class="eo">Pardonu!</span> Pardon&nbsp;!)</p>\n\t\t\t\t<p class="col s12 m6"><a href="fr/son/vortoj/konsenti.mp3" class="sm2_button"></a><span class="eo">konsenti</span>&nbsp;: être d’accord (<span class="eo">Mi konsentas.</span> Je suis d’accord.)</p>\n\t\t\t\t<p class="col s12 m6"><a href="fr/son/vortoj/gxusta.mp3" class="sm2_button"></a><span class="eo">ĝusta</span>&nbsp;: juste, exact (<span class="eo">Ĝuste!</span> Exactement&nbsp;!)</p>\n\t\t\t\t<p class="col s12 m6"><a href="fr/son/vortoj/sukceso.mp3" class="sm2_button"></a><span class="eo">sukceso</span>&nbsp;: succès, réussite (<span class="eo">Sukceson!</span> Bonne chance&nbsp;!)</p>%';

-- 6.6
UPDATE lecioneroj SET enhavo = REPLACE(enhavo, '<tr><td class="eo">inter</td><td>- parmi, entre</td></tr>', '<tr><td class="eo">inter</td><td>- parmi, entre</td></tr>\n\t\t\t<tr><td class="eo">krom</td><td>- sauf, excepté, en plus de</td></tr>')
WHERE id = 55 AND enhavo NOT LIKE '%<tr><td class="eo">krom</td><td>- sauf, excepté, en plus de</td></tr>%';

-- 6.6
UPDATE lecioneroj SET enhavo = REPLACE(enhavo, '<tr><td class="eo">kun</td><td>- avec (indique l’accompagnement)</td></tr>', '<tr><td class="eo">kun</td><td>- avec (indique l’accompagnement)</td></tr>\n\t\t\t<tr><td class="eo">laŭ</td><td>- selon, d’après, le long de</td></tr>')
WHERE id = 55 AND enhavo NOT LIKE '%<tr><td class="eo">laŭ</td><td>- selon, d’après, le long de</td></tr>%';

-- 6.6
UPDATE lecioneroj SET enhavo = REPLACE(enhavo, '<tr><td class="eo">tra</td><td>- à travers, au travers de</td></tr>', '<tr><td class="eo">tra</td><td>- à travers, au travers de</td></tr>\n\t\t\t<tr><td class="eo">trans</td><td>- de l’autre côté de, au-delà de</td></tr>')
WHERE id = 55 AND enhavo NOT LIKE '%<tr><td class="eo">trans</td><td>- de l’autre côté de, au-delà de</td></tr>%';

-- 8.7
UPDATE lecioneroj SET enhavo = CONCAT(enhavo, '\n\n\t\t\t<p class="parto">Pour insister, on ajoute <a href="fr/son/vortoj/mem.mp3" class="sm2_button"></a><b>mem</b> (même, en personne) après le pronom ou le nom&nbsp;:</p>\n\t\t\t<div class="row">\n\t\t\t\t<p class="col s12"><span class="eo">Mi <b>mem</b> faris la kukon.</span>&nbsp;: J’ai fait le gâteau moi-même.</p>\n\t\t\t\t<p class="col s12"><span class="eo">Johano lavis sin <b>mem</b>.</span>&nbsp;: Jean s’est lavé lui-même.</p>\n\t\t\t</div>')
WHERE id = 78 AND enhavo NOT LIKE '%<p class="parto">Pour insister, on ajoute <a href="fr/son/vortoj/mem.mp3" class="sm2_button"></a><b>mem</b> (même, en personne) après le pronom ou le nom&nbsp;:</p>\n\t\t\t<div class="row">\n\t\t\t\t<p class="col s12"><span class="eo">Mi <b>mem</b> faris la kukon.</span>&nbsp;: J’ai fait le gâteau moi-même.</p>\n\t\t\t\t<p class="col s12"><span class="eo">Johano lavis sin <b>mem</b>.</span>&nbsp;: Jean s’est lavé lui-même.</p>\n\t\t\t</div>%';

-- 9.7
UPDATE lecioneroj SET enhavo = CONCAT(enhavo, '\n\n\t\t\t<p class="parto">Voici encore quelques mots invariables très fréquents&nbsp;:</p>\n\t\t\t<div class="row">\n\t\t\t\t<p class="col s12"><a href="fr/son/vortoj/ecx.mp3" class="sm2_button"></a><span class="eo">eĉ</span>&nbsp;: même (jusqu’à)<br>&emsp;<span class="eo">Eĉ infano komprenas tion.</span>&nbsp;: Même un enfant comprend cela.</p>\n\t\t\t\t<p class="col s12"><a href="fr/son/vortoj/nek.mp3" class="sm2_button"></a><span class="eo">nek … nek</span>&nbsp;: ni … ni<br>&emsp;<span class="eo">Mi havas nek hundon nek katon.</span>&nbsp;: Je n’ai ni chien ni chat.</p>\n\t\t\t\t<p class="col s12"><a href="fr/son/vortoj/kvankam.mp3" class="sm2_button"></a><span class="eo">kvankam</span>&nbsp;: bien que, quoique<br>&emsp;<span class="eo">Kvankam pluvas, ni promenas.</span>&nbsp;: Bien qu’il pleuve, nous nous promenons.</p>\n\t\t\t\t<p class="col s12"><a href="fr/son/vortoj/kvazaux.mp3" class="sm2_button"></a><span class="eo">kvazaŭ</span>&nbsp;: comme si, comme<br>&emsp;<span class="eo">Ŝi kantas kvazaŭ birdo.</span>&nbsp;: Elle chante comme un oiseau.</p>\n\t\t\t\t<p class="col s12"><a href="fr/son/vortoj/ju-pli-des-pli.mp3" class="sm2_button"></a><span class="eo">ju pli … des pli</span>&nbsp;: plus … plus<br>&emsp;<span class="eo">Ju pli mi lernas, des pli mi scias.</span>&nbsp;: Plus j’apprends, plus je sais.</p>\n\t\t\t</div>')
WHERE id = 86 AND enhavo NOT LIKE '%<p class="parto">Voici encore quelques mots invariables très fréquents&nbsp;:</p>\n\t\t\t<div class="row">\n\t\t\t\t<p class="col s12"><a href="fr/son/vortoj/ecx.mp3" class="sm2_button"></a><span class="eo">eĉ</span>&nbsp;: même (jusqu’à)<br>&emsp;<span class="eo">Eĉ infano komprenas tion.</span>&nbsp;: Même un enfant comprend cela.</p>\n\t\t\t\t<p class="col s12"><a href="fr/son/vortoj/nek.mp3" class="sm2_button"></a><span class="eo">nek … nek</span>&nbsp;: ni … ni<br>&emsp;<span class="eo">Mi havas nek hundon nek katon.</span>&nbsp;: Je n’ai ni chien ni chat.</p>\n\t\t\t\t<p class="col s12"><a href="fr/son/vortoj/kvankam.mp3" class="sm2_button"></a><span class="eo">kvankam</span>&nbsp;: bien que, quoique<br>&emsp;<span class="eo">Kvankam pluvas, ni promenas.</span>&nbsp;: Bien qu’il pleuve, nous nous promenons.</p>\n\t\t\t\t<p class="col s12"><a href="fr/son/vortoj/kvazaux.mp3" class="sm2_button"></a><span class="eo">kvazaŭ</span>&nbsp;: comme si, comme<br>&emsp;<span class="eo">Ŝi kantas kvazaŭ birdo.</span>&nbsp;: Elle chante comme un oiseau.</p>\n\t\t\t\t<p class="col s12"><a href="fr/son/vortoj/ju-pli-des-pli.mp3" class="sm2_button"></a><span class="eo">ju pli … des pli</span>&nbsp;: plus … plus<br>&emsp;<span class="eo">Ju pli mi lernas, des pli mi scias.</span>&nbsp;: Plus j’apprends, plus je sais.</p>\n\t\t\t</div>%';

-- vocabulaire à réviser
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'lumo', 'lumière', 'nom', 276 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'lumo' AND lecionero_id = 276);
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'salti', 'sauter', 'verbe', 57 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'salti' AND lecionero_id = 57);
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'placo', 'place (d’une ville)', 'nom', 57 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'placo' AND lecionero_id = 57);
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'vagono', 'wagon, voiture (de train)', 'nom', 56 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'vagono' AND lecionero_id = 56);
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'rapida', 'rapide', 'adj', 56 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'rapida' AND lecionero_id = 56);
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'movi', 'bouger, déplacer', 'verbe', 56 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'movi' AND lecionero_id = 56);
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'preta', 'prêt', 'adj', 56 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'preta' AND lecionero_id = 56);
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'monto', 'montagne', 'nom', 58 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'monto' AND lecionero_id = 58);
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'montri', 'montrer', 'verbe', 58 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'montri' AND lecionero_id = 58);
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'agrabla', 'agréable', 'adj', 58 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'agrabla' AND lecionero_id = 58);
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'kapo', 'tête', 'nom', 77 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'kapo' AND lecionero_id = 77);
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'buŝo', 'bouche', 'nom', 77 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'buŝo' AND lecionero_id = 77);
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'orelo', 'oreille', 'nom', 77 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'orelo' AND lecionero_id = 77);
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'dolori', 'faire mal', 'verbe', 77 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'dolori' AND lecionero_id = 77);
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'koleri', 'être en colère', 'verbe', 77 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'koleri' AND lecionero_id = 77);
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'plori', 'pleurer', 'verbe', 77 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'plori' AND lecionero_id = 77);
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'timi', 'avoir peur, craindre', 'verbe', 77 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'timi' AND lecionero_id = 77);
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'ĝeni', 'gêner, déranger', 'verbe', 77 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'ĝeni' AND lecionero_id = 77);
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'serĉi', 'chercher', 'verbe', 87 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'serĉi' AND lecionero_id = 87);
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'decidi', 'décider', 'verbe', 89 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'decidi' AND lecionero_id = 89);
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'ĉefo', 'chef', 'nom', 89 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'ĉefo' AND lecionero_id = 89);
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'afero', 'affaire, chose', 'nom', 89 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'afero' AND lecionero_id = 89);
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'lasta', 'dernier', 'adj', 27 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'lasta' AND lecionero_id = 27);
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'manki', 'manquer (mankas : il manque)', 'verbe', 27 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'manki' AND lecionero_id = 27);
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'provi', 'essayer', 'verbe', 43 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'provi' AND lecionero_id = 43);
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'voki', 'appeler', 'verbe', 43 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'voki' AND lecionero_id = 43);
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'pardoni', 'pardonner', 'verbe', 43 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'pardoni' AND lecionero_id = 43);
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'konsenti', 'être d’accord', 'verbe', 43 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'konsenti' AND lecionero_id = 43);
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'ĝusta', 'juste, exact', 'adj', 43 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'ĝusta' AND lecionero_id = 43);
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'sukceso', 'succès, réussite', 'nom', 43 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'sukceso' AND lecionero_id = 43);
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'krom', 'sauf, excepté, en plus de', 'préposition', 55 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'krom' AND lecionero_id = 55);
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'laŭ', 'selon, d’après, le long de', 'préposition', 55 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'laŭ' AND lecionero_id = 55);
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'trans', 'de l’autre côté de, au-delà de', 'préposition', 55 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'trans' AND lecionero_id = 55);
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'mem', 'même, soi-même (après un nom ou un pronom)', 'adv', 78 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'mem' AND lecionero_id = 78);
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'eĉ', 'même (jusqu’à)', 'adv', 86 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'eĉ' AND lecionero_id = 86);
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'nek … nek|nek nek|nek', 'ni … ni', 'conjonction', 86 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'nek … nek|nek nek|nek' AND lecionero_id = 86);
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'kvankam', 'bien que, quoique', 'conjonction', 86 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'kvankam' AND lecionero_id = 86);
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'kvazaŭ', 'comme si, comme', 'conjonction', 86 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'kvazaŭ' AND lecionero_id = 86);
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'ju pli … des pli|ju pli des pli|ju … des', 'plus … plus', 'adv', 86 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'ju pli … des pli|ju pli des pli|ju … des' AND lecionero_id = 86);
