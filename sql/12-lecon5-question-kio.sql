-- Leçon 5.6, exercice 1 (corrélatifs en KI-), question 2, issue #961 :
-- « Simeono kaj Fatima estas {miaj amikoj}. » → « Kio estas Simeono kaj Fatima? » était ratée par la moitié
-- des élèves (kiuj… ou kies…). Elle est remplacée par « Fatima estas {komputilisto}. » → « Kio estas Fatima? »,
-- où kio (demander ce qu'est quelqu'un : son métier) est sans ambiguïté.
-- L'ancienne question est masquée et remplacée sous le même numéro ; les réponses déjà envoyées
-- par les élèves restent liées à elle.
-- Peut être rejoué sans risque.
SET NAMES utf8mb4;

UPDATE ekzerceroj SET forigita = 1 WHERE id = 104 AND ekzerco_id = 20 AND kodo = 'ekz05_02';

INSERT INTO ekzerceroj (ekzerco_id, kodo, numero, demando, respondmodelo, respondo, normaligita, bildo, forigita, korektebla)
  SELECT 20, 'ekz05_25', 2, 'Fatima estas {komputilisto}.', NULL,
    'Kio estas Fatima?',
    'kio estas fatima|kio fatima estas',
    '', 0, 0
  FROM DUAL WHERE NOT EXISTS (SELECT 1 FROM ekzerceroj WHERE ekzerco_id = 20 AND kodo = 'ekz05_25');

-- Résumé attendu : ekz05_02 masquée, ekz05_25 active, toutes deux numéro 2.
SELECT id, kodo, numero, forigita, demando, normaligita FROM ekzerceroj WHERE ekzerco_id = 20 AND numero = 2;
