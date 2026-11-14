-- Gerda malaperis, section 5 (textes de « Lasu min paroli plu ») : lecteurs audio des chapitres 21, 23 et 24.
-- Les enregistrements (audio/lasumin21a, 21b, 23b, 24a, 24b.mp3) sont sur le serveur depuis le 2026-10-08,
-- mais ces trois sections n'avaient pas de lecteur. Même encadré que les autres chapitres, au-dessus de chaque texte.
-- Pas d'enregistrement pour le premier texte du chapitre 23 (23a). Peut être rejoué (sections déjà équipées ignorées).
SET NAMES utf8mb4;

-- chapitre 21
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id
SET le.enhavo = REPLACE(REPLACE(le.enhavo, '<a id="unua" class="scrollspy"></a>', CONCAT('<a id="unua" class="scrollspy"></a>', '\n\t\t\t<fieldset class="sono">\n\t\t\t\t<legend>Aŭskultu tiun rakonton:</legend>\n\t\t\t\t<p>\n\t\t\t\t\t<audio id="audioPlayer" controls="controls" type="audio/mpeg">\n\t\t\t\t\t\t<source type="audio/mp3" src="audio/lasumin21a.mp3" />\n\t\t\t\t\t</audio>\n\t\t\t\t</p>\n\t\t\t</fieldset>')), '<a id="dua" class="scrollspy"></a>', CONCAT('<a id="dua" class="scrollspy"></a>', '\n\t\t\t<fieldset class="sono">\n\t\t\t\t<legend>Aŭskultu tiun rakonton:</legend>\n\t\t\t\t<p>\n\t\t\t\t\t<audio id="audioPlayer" controls="controls" type="audio/mpeg">\n\t\t\t\t\t\t<source type="audio/mp3" src="audio/lasumin21b.mp3" />\n\t\t\t\t\t</audio>\n\t\t\t\t</p>\n\t\t\t</fieldset>'))
WHERE l.kurso = 'GR' AND l.numero = 21 AND le.ordo = 5 AND le.enhavo NOT LIKE '%<audio%';

-- chapitre 23
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id
SET le.enhavo = REPLACE(le.enhavo, '<a id="dua" class="scrollspy"></a>', CONCAT('<a id="dua" class="scrollspy"></a>', '\n\t\t\t<fieldset class="sono">\n\t\t\t\t<legend>Aŭskultu tiun rakonton:</legend>\n\t\t\t\t<p>\n\t\t\t\t\t<audio id="audioPlayer" controls="controls" type="audio/mpeg">\n\t\t\t\t\t\t<source type="audio/mp3" src="audio/lasumin23b.mp3" />\n\t\t\t\t\t</audio>\n\t\t\t\t</p>\n\t\t\t</fieldset>'))
WHERE l.kurso = 'GR' AND l.numero = 23 AND le.ordo = 5 AND le.enhavo NOT LIKE '%<audio%';

-- chapitre 24
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id
SET le.enhavo = REPLACE(REPLACE(le.enhavo, '<a id="unua" class="scrollspy"></a>', CONCAT('<a id="unua" class="scrollspy"></a>', '\n\t\t\t<fieldset class="sono">\n\t\t\t\t<legend>Aŭskultu tiun rakonton:</legend>\n\t\t\t\t<p>\n\t\t\t\t\t<audio id="audioPlayer" controls="controls" type="audio/mpeg">\n\t\t\t\t\t\t<source type="audio/mp3" src="audio/lasumin24a.mp3" />\n\t\t\t\t\t</audio>\n\t\t\t\t</p>\n\t\t\t</fieldset>')), '<a id="dua" class="scrollspy"></a>', CONCAT('<a id="dua" class="scrollspy"></a>', '\n\t\t\t<fieldset class="sono">\n\t\t\t\t<legend>Aŭskultu tiun rakonton:</legend>\n\t\t\t\t<p>\n\t\t\t\t\t<audio id="audioPlayer" controls="controls" type="audio/mpeg">\n\t\t\t\t\t\t<source type="audio/mp3" src="audio/lasumin24b.mp3" />\n\t\t\t\t\t</audio>\n\t\t\t\t</p>\n\t\t\t</fieldset>'))
WHERE l.kurso = 'GR' AND l.numero = 24 AND le.ordo = 5 AND le.enhavo NOT LIKE '%<audio%';
