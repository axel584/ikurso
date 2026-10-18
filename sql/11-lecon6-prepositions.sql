-- Leçon 6, exercice des prépositions avec images (CG 6.7), issue #965 :
-- la correction automatique acceptait ĉe pour la question 12 (le chat est derrière la porte : malantaŭ)
-- et malantaŭ pour la question 14 (le chapeau est dans le dos : ĉe), alors que la consigne demande
-- d'utiliser chaque préposition une seule fois. On ne garde que la réponse du corrigé.
-- Les réponses déjà enregistrées gardent leur note (gxusta n'est pas recalculé).
-- Peut être rejoué sans risque.
SET NAMES utf8mb4;

UPDATE ekzerceroj SET normaligita = 'la kato estas malantaux la pordo|malantaux'
WHERE id = 138 AND kodo = 'ekz06_12';

UPDATE ekzerceroj SET normaligita = 'sxi portas cxapelon cxe la dorso|cxe'
WHERE id = 140 AND kodo = 'ekz06_14';

-- Résumé attendu : une seule préposition acceptée par question.
SELECT id, kodo, normaligita FROM ekzerceroj WHERE id IN (138, 140);
