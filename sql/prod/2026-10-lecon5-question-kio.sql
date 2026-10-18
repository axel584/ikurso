-- Mise en prod : leçon 5.6, exercice 1 (corrélatifs en KI-), question 2, issue #961 :
-- « Simeono kaj Fatima estas {miaj amikoj}. » → « Kio estas Simeono kaj Fatima? » était ratée par la moitié
-- des élèves (kiuj… ou kies…). Elle est remplacée par « Fatima estas {komputilisto}. » → « Kio estas Fatima? »,
-- où kio (demander ce qu'est quelqu'un : son métier) est sans ambiguïté.
-- L'ancienne question est masquée et remplacée sous le même numéro ; les réponses déjà envoyées
-- par les élèves restent liées à elle.
-- Reprend sql/12-lecon5-question-kio.sql. Aucun fichier PHP à déployer : le script peut être joué à tout moment.
--
-- La table ekzerceroj est en MyISAM (pas de transaction) : faire d'abord une sauvegarde :
--   mysqldump -u <login> -p <base> ekzerceroj > ~/avant-lecon5-question-kio-$(date +%F).sql
-- puis :
--   mysql -u <login> -p <base> < 2026-10-lecon5-question-kio.sql
--
-- Le script s'arrête à la première erreur et peut être rejoué sans risque.
SET NAMES utf8mb4;

-- 0. Contrôle : la question 104 doit être la question 2 de l'exercice 20 (section 5.6 du cours CG).
-- Sinon la sous-requête renvoie 2 lignes et le script s'arrête.
SELECT IF((SELECT count(*) FROM ekzerceroj e JOIN ekzercoj z ON z.id = e.ekzerco_id
           JOIN lecioneroj le ON le.id = z.lecionero_id JOIN lecionoj l ON l.id = le.leciono_id
           WHERE e.id = 104 AND e.ekzerco_id = 20 AND e.kodo = 'ekz05_02' AND e.numero = 2
             AND l.kurso = 'CG' AND l.numero = 5 AND le.ordo = 6) = 1
          AND (SELECT count(*) FROM ekzerceroj WHERE kodo = 'ekz05_25' AND ekzerco_id <> 20) = 0,
          'contrôle OK', (SELECT 1 UNION SELECT 2)) AS controle;

UPDATE ekzerceroj SET forigita = 1 WHERE id = 104 AND ekzerco_id = 20 AND kodo = 'ekz05_02';

INSERT INTO ekzerceroj (ekzerco_id, kodo, numero, demando, respondmodelo, respondo, normaligita, bildo, forigita, korektebla)
  SELECT 20, 'ekz05_25', 2, 'Fatima estas {komputilisto}.', NULL,
    'Kio estas Fatima?',
    'kio estas fatima|kio fatima estas',
    '', 0, 0
  FROM DUAL WHERE NOT EXISTS (SELECT 1 FROM ekzerceroj WHERE ekzerco_id = 20 AND kodo = 'ekz05_25');

-- Résumé attendu : ekz05_02 masquée, ekz05_25 active, toutes deux numéro 2.
SELECT id, kodo, numero, forigita, demando, normaligita FROM ekzerceroj WHERE ekzerco_id = 20 AND numero = 2;
