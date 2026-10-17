-- Mise en prod du vocabulaire plus moderne des leçons 4 et 5 du cours élémentaire (CG), issue #865.
-- Reprend sql/06-vocabulaire-moderne.sql.
--
-- À jouer au moment où l'on déploie fr/cge/lec04.php et fr/cge/lec05.php.
--
-- La table ekzerceroj est en MyISAM (pas de transaction) : faire d'abord une sauvegarde,
-- qui permet de revenir en arrière en la rejouant :
--   mysqldump -u <login> -p <base> vortoj ekzerceroj lecioneroj > ~/avant-vocabulaire-$(date +%F).sql
-- puis :
--   mysql -u <login> -p <base> < 2026-10-vocabulaire-moderne.sql
--
-- Le script s'arrête à la première erreur et peut être rejoué sans risque.
SET NAMES utf8mb4;

-- 0. Contrôle : les sections 38 et 43 doivent être les sections 4.5 et 5.1 du cours CG, et l'exercice 18
-- doit appartenir à la section 4.12. Sinon la sous-requête renvoie 2 lignes et le script s'arrête.
SELECT IF((SELECT count(*) FROM lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id
           WHERE l.kurso = 'CG' AND ((le.id = 38 AND l.numero = 4 AND le.ordo = 5) OR (le.id = 43 AND l.numero = 5 AND le.ordo = 1))) = 2
          AND (SELECT count(*) FROM ekzercoj z JOIN lecioneroj le ON le.id = z.lecionero_id JOIN lecionoj l ON l.id = le.leciono_id
               WHERE z.id = 18 AND l.kurso = 'CG' AND l.numero = 4 AND le.ordo = 12) = 1,
          'contrôle OK', (SELECT 1 UNION SELECT 2)) AS controle;

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

-- Résumé attendu : les anciens mots en section 0, les 4 nouveaux en sections 38 et 43,
-- ekz04_17 masquée et ekz04_33 active, et le texte de Robert sans « bildkarto ».
SELECT eo, lecionero_id FROM vortoj WHERE eo IN ('bildkarto|poŝtkarto', 'poŝtmarko', 'interreto', 'retmesaĝo|retletero', 'foti', 'foto') ORDER BY lecionero_id, eo;
SELECT kodo, forigita, demando FROM ekzerceroj WHERE ekzerco_id = 18 AND numero = 17;
SELECT (enhavo LIKE '%bildkarto%') AS texte_5_1_ancien FROM lecioneroj WHERE id = 43;
