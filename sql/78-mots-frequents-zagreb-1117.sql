-- #1117 : cours élémentaire, mots fréquents de la méthode de Zagreb et de la Metodo 11 absents du cours, 1er lot (17 mots).
-- Chaque mot est placé à côté de mots du même thème : 2.8 (acheter, boissons), 3.3 (moments du jour, couleurs),
-- 4.5 (ol à côté de plej), leçon 7 (avec l'affixe de la section : peza → malpeza, koni → ekkoni, saĝa → saĝulo,
-- certa → certeco, dika → dikega, uzi → uzebla), 8.2 (voix, bruit). Ajout dans les pages (lecioneroj.enhavo)
-- et dans le vocabulaire à réviser (vortoj). Script rejouable.
SET NAMES utf8mb4;

-- 2.8
UPDATE lecioneroj SET enhavo = REPLACE(enhavo, '<span class="eo">kapti</span>&nbsp;: attraper</p>', '<span class="eo">kapti</span>&nbsp;: attraper</p>\n\t\t\t\t\t<p><a href="fr/son/vortoj/kosti.mp3" class="sm2_button"></a> <span class="eo">kosti</span>&nbsp;: coûter</p>')
WHERE id = 14 AND enhavo NOT LIKE '%<p><a href="fr/son/vortoj/kosti.mp3" class="sm2_button"></a> <span class="eo">kosti</span>&nbsp;: coûter</p>%';

-- 2.8
UPDATE lecioneroj SET enhavo = REPLACE(enhavo, '<span class="eo">lavi</span>&nbsp;: laver</p>', '<span class="eo">lavi</span>&nbsp;: laver</p>\n\t\t\t\t\t<p><a href="fr/son/vortoj/pagi.mp3" class="sm2_button"></a> <span class="eo">pagi</span>&nbsp;: payer</p>')
WHERE id = 14 AND enhavo NOT LIKE '%<p><a href="fr/son/vortoj/pagi.mp3" class="sm2_button"></a> <span class="eo">pagi</span>&nbsp;: payer</p>%';

-- 2.8
UPDATE lecioneroj SET enhavo = REPLACE(enhavo, '<span class="eo">butiko</span>&nbsp;: boutique</p>', '<span class="eo">butiko</span>&nbsp;: boutique</p>\n\t\t\t\t\t<p><a href="fr/son/vortoj/glaso.mp3" class="sm2_button"></a> <span class="eo">glaso</span>&nbsp;: verre (à boire)</p>')
WHERE id = 14 AND enhavo NOT LIKE '%<p><a href="fr/son/vortoj/glaso.mp3" class="sm2_button"></a> <span class="eo">glaso</span>&nbsp;: verre (à boire)</p>%';

-- 2.8
UPDATE lecioneroj SET enhavo = REPLACE(enhavo, '<span class="eo">taso</span>&nbsp;: tasse</p>', '<span class="eo">taso</span>&nbsp;: tasse</p>\n\t\t\t\t\t<p><a href="fr/son/vortoj/vino.mp3" class="sm2_button"></a> <span class="eo">vino</span>&nbsp;: vin</p>')
WHERE id = 14 AND enhavo NOT LIKE '%<p><a href="fr/son/vortoj/vino.mp3" class="sm2_button"></a> <span class="eo">vino</span>&nbsp;: vin</p>%';

-- 2.8
UPDATE lecioneroj SET enhavo = REPLACE(enhavo, '<span class="eo">pura</span>&nbsp;: propre</p>', '<span class="eo">pura</span>&nbsp;: propre</p>\n\t\t\t\t\t<p><a href="fr/son/vortoj/dolcxa.mp3" class="sm2_button"></a> <span class="eo">dolĉa</span>&nbsp;: doux, sucré</p>')
WHERE id = 14 AND enhavo NOT LIKE '%<p><a href="fr/son/vortoj/dolcxa.mp3" class="sm2_button"></a> <span class="eo">dolĉa</span>&nbsp;: doux, sucré</p>%';

-- 3.3
UPDATE lecioneroj SET enhavo = REPLACE(enhavo, 'vespero</span>&nbsp;: soir, soirée</p>', 'vespero</span>&nbsp;: soir, soirée</p>\n\t\t\t\t\t<p><span class="eo"><a href="fr/son/vortoj/koloro.mp3" class="sm2_button"></a>koloro</span>&nbsp;: couleur</p>')
WHERE id = 22 AND enhavo NOT LIKE '%<p><span class="eo"><a href="fr/son/vortoj/koloro.mp3" class="sm2_button"></a>koloro</span>&nbsp;: couleur</p>%';

-- 3.3
UPDATE lecioneroj SET enhavo = REPLACE(enhavo, 'verda</span>&nbsp;: vert</p>', 'verda</span>&nbsp;: vert</p>\n\t\t\t\t\t<p><span class="eo"><a href="fr/son/vortoj/frua.mp3" class="sm2_button"></a>frua</span>&nbsp;: tôt, précoce (contraire&nbsp;: <span class="eo">malfrua</span>, tardif)</p>')
WHERE id = 22 AND enhavo NOT LIKE '%<p><span class="eo"><a href="fr/son/vortoj/frua.mp3" class="sm2_button"></a>frua</span>&nbsp;: tôt, précoce (contraire&nbsp;: <span class="eo">malfrua</span>, tardif)</p>%';

-- 4.5
UPDATE lecioneroj SET enhavo = REPLACE(enhavo, '<span class="eo">plej</span>&nbsp;: plus (superlatif)</p>', '<span class="eo">plej</span>&nbsp;: plus (superlatif)</p>\n\t\t\t\t\t\t<p><a href="fr/son/vortoj/ol.mp3" class="sm2_button"></a><span class="marque">•</span> <span class="eo">ol</span>&nbsp;: que (dans une comparaison&nbsp;: <span class="eo">pli granda ol</span>, plus grand que)</p>')
WHERE id = 38 AND enhavo NOT LIKE '%<p><a href="fr/son/vortoj/ol.mp3" class="sm2_button"></a><span class="marque">•</span> <span class="eo">ol</span>&nbsp;: que (dans une comparaison&nbsp;: <span class="eo">pli granda ol</span>, plus grand que)</p>%';

-- 7.1
UPDATE lecioneroj SET enhavo = REPLACE(enhavo, '<span class="eo">malfermi</span>&nbsp;: ouvrir</p>', '<span class="eo">malfermi</span>&nbsp;: ouvrir</p>\n\t\t\t<p class="col s12"><span class="marque">•</span> <span class="eo">peza</span>&nbsp;: lourd&emsp;→&emsp;<span class="eo">malpeza</span>&nbsp;: léger</p>')
WHERE id = 68 AND enhavo NOT LIKE '%<p class="col s12"><span class="marque">•</span> <span class="eo">peza</span>&nbsp;: lourd&emsp;→&emsp;<span class="eo">malpeza</span>&nbsp;: léger</p>%';

-- 7.1
UPDATE lecioneroj SET enhavo = REPLACE(enhavo, '<span class="eo">ekpluvi</span>&nbsp;: commencer à pleuvoir</p>', '<span class="eo">ekpluvi</span>&nbsp;: commencer à pleuvoir</p>\n\t\t\t<p class="col s12"><span class="marque">•</span> <span class="eo">koni</span>&nbsp;: connaître&emsp;→&emsp;<span class="eo">ekkoni</span>&nbsp;: faire la connaissance de</p>')
WHERE id = 68 AND enhavo NOT LIKE '%<p class="col s12"><span class="marque">•</span> <span class="eo">koni</span>&nbsp;: connaître&emsp;→&emsp;<span class="eo">ekkoni</span>&nbsp;: faire la connaissance de</p>%';

-- 7.2
UPDATE lecioneroj SET enhavo = REPLACE(enhavo, '<span class="eo"><span class="marque">•</span> stultulo</span>&nbsp;: un sot</p>', '<span class="eo"><span class="marque">•</span> stultulo</span>&nbsp;: un sot</p>\n\t\t\t<p class="col s12"><span class="eo"><span class="marque">•</span> saĝa</span>&nbsp;: sage&emsp;→&emsp;<span class="eo">saĝulo</span>&nbsp;: un sage</p>')
WHERE id = 69 AND enhavo NOT LIKE '%<p class="col s12"><span class="eo"><span class="marque">•</span> saĝa</span>&nbsp;: sage&emsp;→&emsp;<span class="eo">saĝulo</span>&nbsp;: un sage</p>%';

-- 7.3
UPDATE lecioneroj SET enhavo = REPLACE(enhavo, '<span class="eo"><span class="marque">•</span> infaneco</span>&nbsp;: enfance</p>', '<span class="eo"><span class="marque">•</span> infaneco</span>&nbsp;: enfance</p>\n\t\t\t<p class="col s12"><span class="eo"><span class="marque">•</span> certa</span>&nbsp;: certain&emsp;→&emsp;<span class="eo">certeco</span>&nbsp;: certitude</p>')
WHERE id = 470 AND enhavo NOT LIKE '%<p class="col s12"><span class="eo"><span class="marque">•</span> certa</span>&nbsp;: certain&emsp;→&emsp;<span class="eo">certeco</span>&nbsp;: certitude</p>%';

-- 7.3
UPDATE lecioneroj SET enhavo = REPLACE(enhavo, '<span class="eo"><span class="marque">•</span> ventego</span>&nbsp;: tempête</p>', '<span class="eo"><span class="marque">•</span> ventego</span>&nbsp;: tempête</p>\n\t\t\t<p class="col s12"><span class="eo"><span class="marque">•</span> dika</span>&nbsp;: gros, épais&emsp;→&emsp;<span class="eo">dikega</span>&nbsp;: énorme</p>')
WHERE id = 470 AND enhavo NOT LIKE '%<p class="col s12"><span class="eo"><span class="marque">•</span> dika</span>&nbsp;: gros, épais&emsp;→&emsp;<span class="eo">dikega</span>&nbsp;: énorme</p>%';

-- 7.3
UPDATE lecioneroj SET enhavo = REPLACE(enhavo, '<span class="eo"><span class="marque">•</span> nekredebla</span>&nbsp;: incroyable</p>', '<span class="eo"><span class="marque">•</span> nekredebla</span>&nbsp;: incroyable</p>\n\t\t\t<p class="col s12"><span class="eo"><span class="marque">•</span> uzi</span>&nbsp;: utiliser&emsp;→&emsp;<span class="eo">uzebla</span>&nbsp;: utilisable</p>')
WHERE id = 470 AND enhavo NOT LIKE '%<p class="col s12"><span class="eo"><span class="marque">•</span> uzi</span>&nbsp;: utiliser&emsp;→&emsp;<span class="eo">uzebla</span>&nbsp;: utilisable</p>%';

-- 8.2
UPDATE lecioneroj SET enhavo = REPLACE(enhavo, '<span class="eo">adori</span> : adorer</p>', '<span class="eo">adori</span> : adorer</p>\n\t\t\t\t\t<p class="col s12 m4"><a href="fr/son/vortoj/lauxta.mp3" class="sm2_button"></a><span class="eo">laŭta</span> : fort (son, voix)</p>\n\t\t\t\t\t<p class="col s12 m4"><a href="fr/son/vortoj/bruo.mp3" class="sm2_button"></a><span class="eo">bruo</span> : bruit</p>\n\t\t\t\t\t<p class="col s12 m4"><a href="fr/son/vortoj/agi.mp3" class="sm2_button"></a><span class="eo">agi</span> : agir</p>')
WHERE id = 472 AND enhavo NOT LIKE '%<p class="col s12 m4"><a href="fr/son/vortoj/lauxta.mp3" class="sm2_button"></a><span class="eo">laŭta</span> : fort (son, voix)</p>\n\t\t\t\t\t<p class="col s12 m4"><a href="fr/son/vortoj/bruo.mp3" class="sm2_button"></a><span class="eo">bruo</span> : bruit</p>\n\t\t\t\t\t<p class="col s12 m4"><a href="fr/son/vortoj/agi.mp3" class="sm2_button"></a><span class="eo">agi</span> : agir</p>%';

-- vocabulaire à réviser
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'kosti', 'coûter', 'verbe', 14 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'kosti' AND lecionero_id = 14);
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'pagi', 'payer', 'verbe', 14 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'pagi' AND lecionero_id = 14);
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'glaso', 'verre (à boire)', 'nom', 14 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'glaso' AND lecionero_id = 14);
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'vino', 'vin', 'nom', 14 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'vino' AND lecionero_id = 14);
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'dolĉa', 'doux, sucré', 'adj', 14 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'dolĉa' AND lecionero_id = 14);
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'koloro', 'couleur', 'nom', 22 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'koloro' AND lecionero_id = 22);
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'frua', 'tôt, précoce', 'adj', 22 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'frua' AND lecionero_id = 22);
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'ol', 'que (comparaison)', 'conjonction', 38 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'ol' AND lecionero_id = 38);
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'peza', 'lourd', 'adj', 68 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'peza' AND lecionero_id = 68);
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'koni', 'connaître', 'verbe', 68 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'koni' AND lecionero_id = 68);
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'saĝa', 'sage', 'adj', 69 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'saĝa' AND lecionero_id = 69);
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'certa', 'certain', 'adj', 470 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'certa' AND lecionero_id = 470);
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'dika', 'gros, épais', 'adj', 470 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'dika' AND lecionero_id = 470);
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'uzi', 'utiliser', 'verbe', 470 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'uzi' AND lecionero_id = 470);
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'laŭta', 'fort (son, voix)', 'adj', 472 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'laŭta' AND lecionero_id = 472);
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'bruo', 'bruit', 'nom', 472 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'bruo' AND lecionero_id = 472);
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'agi', 'agir', 'verbe', 472 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'agi' AND lecionero_id = 472);
