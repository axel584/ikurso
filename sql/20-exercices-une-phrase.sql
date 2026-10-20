-- Cours élémentaire (CG) : une question par phrase dans trois exercices (issue #962),
-- pour que la correction automatique puisse reconnaître les bonnes réponses.
-- - 3.2 (exercice 9) : chaque question demandait deux réponses (« Qui a été lavé ? / Qui a lavé ? ») ;
--   elle devient deux questions, et l'exercice passe en correction automatique.
-- - 4.11 (exercice 17) : les paragraphes de 2 ou 3 phrases (n° 12, 14 et 16) sont découpés ;
--   le corrigé « Maria, sa sœur » devient « Maria, sa jeune sœur » (#1046).
-- - 6.17 (exercice 27) : le texte à compléter devient une question par phrase (la consigne est adaptée).
-- Les questions suivantes de la leçon sont renumérotées (+2 en leçon 3, +5 en leçon 4).
-- Les anciennes questions sont masquées : les réponses déjà envoyées par les élèves restent liées à elles.
-- Le script vaut pour la prod (mêmes id et codes) et peut être rejoué sans risque.
-- Tables en MyISAM (pas de transaction) : en prod, sauvegarder d'abord :
--   mysqldump -u <login> -p <base> ekzerceroj ekzercoj > ~/avant-exercices-une-phrase-$(date +%F).sql
SET NAMES utf8mb4;

-- 1. Leçon 3, exercice 3.2
UPDATE ekzerceroj SET numero = numero + 2 WHERE ekzerco_id IN (10, 11, 12, 13)
  AND NOT EXISTS (SELECT 1 FROM (SELECT kodo FROM ekzerceroj WHERE kodo = 'ekz03_24') AS t);
UPDATE ekzerceroj SET forigita = 1 WHERE id IN (48, 49) AND ekzerco_id = 9;
UPDATE ekzercoj SET korektebla = 1 WHERE id = 9;
INSERT INTO ekzerceroj (ekzerco_id, kodo, numero, demando, respondmodelo, respondo, normaligita, bildo, forigita, korektebla)
  SELECT * FROM (
    SELECT 9 AS ekzerco_id, 'ekz03_24' AS kodo, 1 AS numero, 'Mian fraton lavis mia patro.<br/>Qui a été lavé ?' AS demando, NULL AS respondmodelo,
      'Mon frère.' AS respondo, 'mon frère|mon frère a été lavé|mon frère a été lavé par mon père|cest mon frère' AS normaligita, '' AS bildo, 0 AS forigita, 0 AS korektebla
    UNION ALL SELECT 9, 'ekz03_25', 2, 'Mian fraton lavis mia patro.<br/>Qui a lavé ?', NULL,
      'Mon père.', 'mon père|mon père a lavé|mon père a lavé mon frère|cest mon père', '', 0, 0
    UNION ALL SELECT 9, 'ekz03_26', 3, 'Instruistojn viajn fratinoj niaj vidis.<br/>Qui a vu ?', NULL,
      'Nos sœurs.', 'nos sœurs|nos soeurs|nos sœurs ont vu|nos soeurs ont vu|nos sœurs ont vu vos instituteurs|nos soeurs ont vu vos instituteurs|cest nos sœurs|cest nos soeurs|ce sont nos sœurs|ce sont nos soeurs', '', 0, 0
    UNION ALL SELECT 9, 'ekz03_27', 4, 'Instruistojn viajn fratinoj niaj vidis.<br/>Qui a été vu ?', NULL,
      'Vos instituteurs.', 'vos instituteurs|vos institutrices|vos enseignants|vos professeurs|vos instituteurs ont été vus|vos institutrices ont été vues|ce sont vos instituteurs', '', 0, 0
  ) AS novaj
  WHERE NOT EXISTS (SELECT 1 FROM ekzerceroj WHERE kodo = 'ekz03_24');

-- 2. Leçon 4, exercice 4.11 : n° 12 → 12-14, n° 13 → 15, n° 14 → 16-17, n° 15 → 18, n° 16 → 19-21.
UPDATE ekzerceroj SET numero = numero + 5 WHERE ekzerco_id IN (18, 19)
  AND NOT EXISTS (SELECT 1 FROM (SELECT kodo FROM ekzerceroj WHERE kodo = 'ekz04_34') AS t);
UPDATE ekzerceroj SET numero = 15 WHERE id = 83 AND ekzerco_id = 17;
UPDATE ekzerceroj SET numero = 18 WHERE id = 85 AND ekzerco_id = 17;
UPDATE ekzerceroj SET forigita = 1 WHERE id IN (82, 895, 86) AND ekzerco_id = 17;
INSERT INTO ekzerceroj (ekzerco_id, kodo, numero, demando, respondmodelo, respondo, normaligita, bildo, forigita, korektebla)
  SELECT * FROM (
    SELECT 17 AS ekzerco_id, 'ekz04_34' AS kodo, 12 AS numero, 'Simeono estas la edzo de Fatima.' AS demando, NULL AS respondmodelo,
      'Simeono est le mari de Fatima.' AS respondo,
      'simeono est le mari de fatima|simeono est lépoux de fatima|simeon est le mari de fatima|simeon est lépoux de fatima|siméon est le mari de fatima|siméon est lépoux de fatima|simon est le mari de fatima|simon est lépoux de fatima' AS normaligita,
      '' AS bildo, 0 AS forigita, 0 AS korektebla
    UNION ALL SELECT 17, 'ekz04_35', 13, 'Li amas ŝin.', NULL,
      'Il l’aime.', 'il laime', '', 0, 0
    UNION ALL SELECT 17, 'ekz04_36', 14, 'Li, la edzino kaj la infanoj loĝas en Eŭropo, en granda domo.', NULL,
      'Lui, sa femme et les enfants habitent en Europe, dans une grande maison.',
      'lui la femme et les enfants habitent en europe dans une grande maison|lui sa femme et les enfants habitent en europe dans une grande maison|lui sa femme et ses enfants habitent en europe dans une grande maison|lui lépouse et les enfants habitent en europe dans une grande maison|lui son épouse et les enfants habitent en europe dans une grande maison|lui son épouse et ses enfants habitent en europe dans une grande maison|lui la femme et les enfants vivent en europe dans une grande maison|lui sa femme et les enfants vivent en europe dans une grande maison|lui sa femme et ses enfants vivent en europe dans une grande maison',
      '', 0, 0
    UNION ALL SELECT 17, 'ekz04_37', 16, 'Petro, la filo de Fatima, ŝatas gitari.', NULL,
      'Petro, le fils de Fatima, aime jouer de la guitare.',
      'petro le fils de fatima aime jouer de la guitare|pierre le fils de fatima aime jouer de la guitare|petro le fils de fatima aime la guitare|pierre le fils de fatima aime la guitare',
      '', 0, 0
    UNION ALL SELECT 17, 'ekz04_38', 17, 'Maria, lia juna fratino, preferas promeni bicikle.', NULL,
      'Maria, sa jeune sœur, préfère se promener à bicyclette.',
      'maria sa jeune sœur préfère se promener à bicyclette|maria sa jeune soeur préfère se promener à bicyclette|maria sa jeune sœur préfère se promener à vélo|maria sa jeune soeur préfère se promener à vélo|marie sa jeune sœur préfère se promener à bicyclette|marie sa jeune soeur préfère se promener à bicyclette|marie sa jeune sœur préfère se promener à vélo|marie sa jeune soeur préfère se promener à vélo|maria sa petite sœur préfère se promener à vélo|maria sa petite soeur préfère se promener à vélo|maria sa petite sœur préfère se promener à bicyclette|maria sa petite soeur préfère se promener à bicyclette',
      '', 0, 0
    UNION ALL SELECT 17, 'ekz04_39', 19, 'Simeono atendas en la butiko.', NULL,
      'Simeono attend dans la boutique.',
      'simeono attend dans la boutique|simeono attend dans le magasin|siméon attend dans la boutique|siméon attend dans le magasin|simon attend dans la boutique|simon attend dans le magasin|simeono attend à la boutique|simeono attend au magasin',
      '', 0, 0
    UNION ALL SELECT 17, 'ekz04_40', 20, 'Li jam havas du ovojn, sed li deziras aĉeti sandviĉon.', NULL,
      'Il a déjà deux œufs, mais il souhaite acheter un sandwich.',
      'il a déjà deux œufs mais il souhaite acheter un sandwich|il a déjà deux oeufs mais il souhaite acheter un sandwich|il a déjà deux œufs mais il désire acheter un sandwich|il a déjà deux oeufs mais il désire acheter un sandwich|il a déjà deux œufs mais il veut acheter un sandwich|il a déjà deux oeufs mais il veut acheter un sandwich',
      '', 0, 0
    UNION ALL SELECT 17, 'ekz04_41', 21, 'Li manĝos ilin vespere.', NULL,
      'Il les mangera ce soir.',
      'il les mangera ce soir|il les mangera le soir|il les mangera dans la soirée',
      '', 0, 0
  ) AS novaj
  WHERE NOT EXISTS (SELECT 1 FROM ekzerceroj WHERE kodo = 'ekz04_34');

-- 3. Leçon 6, exercice 6.17 : une question par phrase (n° 36 à 41, c'est le dernier exercice de la leçon).
UPDATE ekzerceroj SET forigita = 1 WHERE id = 162 AND ekzerco_id = 27;
UPDATE ekzercoj SET komando = 'Recopiez chaque phrase en remplaçant les * par la terminaison de l’accusatif ou par rien du tout selon le cas.'
  WHERE id = 27 AND komando = 'Recopiez le texte qui suit en remplaçant les * par la terminaison de l’accusatif ou par rien du tout selon le cas.';
INSERT INTO ekzerceroj (ekzerco_id, kodo, numero, demando, respondmodelo, respondo, normaligita, bildo, forigita, korektebla)
  SELECT * FROM (
    SELECT 27 AS ekzerco_id, 'ekz06_37' AS kodo, 36 AS numero, 'Mi* veturis al la zoologia* ĝardeno* kun Petro*.' AS demando, NULL AS respondmodelo,
      'Mi veturis al la zoologia ĝardeno kun Petro.' AS respondo, 'mi veturis al la zoologia ĝardeno kun petro' AS normaligita, '' AS bildo, 0 AS forigita, 0 AS korektebla
    UNION ALL SELECT 27, 'ekz06_38', 37, 'Li* tre deziris veturi tie*.', NULL,
      'Li tre deziris veturi tien.', 'li tre deziris veturi tien', '', 0, 0
    UNION ALL SELECT 27, 'ekz06_39', 38, 'En la zoo* li admiris ursoj* kaj simioj*.', NULL,
      'En la zoo li admiris ursojn kaj simiojn.', 'en la zoo li admiris ursojn kaj simiojn', '', 0, 0
    UNION ALL SELECT 27, 'ekz06_40', 39, 'Kiam la blanka urso vidis Petro*, ĝi kuris en la akvo*.', NULL,
      'Kiam la blanka urso vidis Petron, ĝi kuris en la akvon.', 'kiam la blanka urso vidis petron ĝi kuris en la akvon', '', 0, 0
    UNION ALL SELECT 27, 'ekz06_41', 40, 'Ni atendis kvin minutoj* por vidi, kio* la urso* faros poste, sed ĝi* ne iris el la akvo* kaj en la akvo* ĝi nenio* faris.', NULL,
      'Ni atendis kvin minutojn por vidi, kion la urso faros poste, sed ĝi ne iris el la akvo kaj en la akvo ĝi nenion faris.',
      'ni atendis kvin minutojn por vidi kion la urso faros poste sed ĝi ne iris el la akvo kaj en la akvo ĝi nenion faris', '', 0, 0
    UNION ALL SELECT 27, 'ekz06_42', 41, 'Ni revenis Montrealo* vespere*.', NULL,
      'Ni revenis Montrealon vespere.', 'ni revenis montrealon vespere', '', 0, 0
  ) AS novaj
  WHERE NOT EXISTS (SELECT 1 FROM ekzerceroj WHERE kodo = 'ekz06_37');

-- Résumé attendu : questions actives de 3.2, 4.11, 4.12 et 6.17.
SELECT ekzerco_id, numero, kodo, LEFT(demando, 60) FROM ekzerceroj
  WHERE ekzerco_id IN (9, 17, 18, 19, 27) AND forigita = 0 ORDER BY ekzerco_id, numero;
