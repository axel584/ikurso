-- Vocabulaire plus moderne dans le cours élémentaire (CG), issue #865 :
-- la carte postale et le timbre-poste laissent la place à internet, au courriel et à la photo.
-- Leçon 4.5 (liste de prononciation), 4.12 (question ekz04_17) et 5.1 (texte de Robert).
-- Le contenu affiché vient de fr/cge/lec04.php et fr/cge/lec05.php ; ce script met la base en accord.
-- Peut être rejoué sans risque.
SET NAMES utf8mb4;

-- 1. Vocabulaire à réviser. Les anciens mots sont rattachés à aucune section (lecionero_id = 0)
-- plutôt que supprimés, pour que les élèves qui les révisent déjà les gardent.
UPDATE vortoj SET lecionero_id = 0 WHERE lecionero_id = 38 AND eo IN ('bildkarto|poŝtkarto', 'poŝtmarko');
INSERT INTO vortoj (eo, fr, tipo, lecionero_id)
  SELECT * FROM (
    SELECT 'interreto' AS eo, 'internet' AS fr, 'nom' AS tipo, 38 AS lecionero_id
    UNION ALL SELECT 'retmesaĝo|retletero', 'courriel, e-mail', 'nom', 38
    UNION ALL SELECT 'foti', 'photographier', 'verbe', 43
    UNION ALL SELECT 'foto', 'photo', 'nom', 43
  ) AS novaj
  WHERE NOT EXISTS (SELECT 1 FROM vortoj v WHERE v.eo = novaj.eo AND v.lecionero_id = novaj.lecionero_id);

-- 2. Question 4.12 : les timbres deviennent des livres. L'ancienne question est masquée et remplacée
-- sous le même numéro ; les réponses déjà envoyées par les élèves restent liées à elle.
UPDATE ekzerceroj SET forigita = 1 WHERE ekzerco_id = 18 AND kodo = 'ekz04_17';
INSERT INTO ekzerceroj (ekzerco_id, kodo, numero, demando, respondmodelo, respondo, normaligita, bildo, forigita, korektebla)
  SELECT 18, 'ekz04_33', 17, 'Est-ce que ton père collectionne les livres de mon pays ?', NULL,
    'Ĉu via patro kolektas librojn de mia lando?',
    'cxu via patro kolektas la librojn de mia lando|cxu via patro kolektas la librojn el mia lando|cxu via patro kolektas librojn de mia lando|cxu via patro kolektas librojn el mia lando',
    '', 0, 0
  FROM DUAL WHERE NOT EXISTS (SELECT 1 FROM ekzerceroj WHERE ekzerco_id = 18 AND kodo = 'ekz04_33');

-- 3. Copie du texte de la page 5.1 utilisée par le redaktilo.
UPDATE lecioneroj SET enhavo =
  REPLACE(REPLACE(REPLACE(REPLACE(REPLACE(enhavo,
    'Mi kolektas poŝtmarkojn kaj bildkartojn kaj', 'Mi ŝatas foti. En la interreto mi interŝanĝas'),
    'ŝatas interŝanĝi ilin kun esperantistoj en aliaj landoj.', 'miajn fotojn kun esperantistoj en aliaj landoj.'),
    '<span class="eo">bildkarto</span>', '<span class="eo">foti</span>'),
    'carte postale (illustrée)</p>', 'photographier</p>\n\t\t\t\t<p class="col s12 m6"><span class="eo">foto</span> : photo</p>'),
    'kolekti, poŝtmarko, lando', 'interreto, lando')
WHERE id = 43 AND enhavo LIKE '%bildkarto%';
