-- Deuxième lot d'exercices passés au type plenigu (issue #1056) : l'élève complète un champ dans la phrase,
-- au lieu de recopier toute la phrase. Les blancs « ... », « [ … ] » et « ___ » deviennent des *.
-- - Cours élémentaire 2.5 (5), 4.7 (15), 6.7 (23) : prépositions.
-- - Cours élémentaire 8.4 (32) : participes (« ludanta infano », deux mots dans un seul champ) ; 8.8 (35) : sia / lia / ŝia.
-- - Gerda 9.4 (70), 16.4 (84) : mots en ki- ; Gerda 17.4 (86) : prépositions, plusieurs champs par phrase.
-- Les réponses attendues ne changent pas. Quand la phrase contient une indication entre parenthèses
-- (« (= bureau) », « (Elle a lu son propre livre) »…), elle fait désormais partie de la phrase reconstituée :
-- cette forme est ajoutée aux réponses acceptées.
-- Seules les consignes qui demandaient de recopier la phrase sont adaptées. L'aide à la saisie (cx → ĉ) reste.
-- Correction d'énoncé : 8.8 n° 25, « le fils sa voisine » → « le fils de sa voisine ».
-- Le script vaut pour la prod (mêmes id) et peut être rejoué sans risque. Nécessite sql/21.
SET NAMES utf8mb4;

-- 1. Les blancs deviennent des *
UPDATE ekzerceroj SET demando = REPLACE(demando, '...', '*')
  WHERE ekzerco_id = 5 AND forigita = 0 AND demando LIKE '%...%';
UPDATE ekzerceroj SET demando = REPLACE(demando, '[ … ]', '*')
  WHERE ekzerco_id IN (15, 23) AND forigita = 0 AND demando LIKE '%[ … ]%';
UPDATE ekzerceroj SET demando = REGEXP_REPLACE(demando, '_{3,}', '*')
  WHERE ekzerco_id IN (32, 35, 70, 84, 86) AND forigita = 0 AND demando LIKE '%\_\_\_%';
UPDATE ekzerceroj SET demando = REPLACE(demando, 'le fils sa voisine', 'le fils de sa voisine')
  WHERE id = 213 AND ekzerco_id = 35;

-- 2. Types et consignes
UPDATE ekzercoj SET typo = 'plenigu',
  komando = 'En vous aidant des images, complétez chaque phrase avec la préposition qui convient.'
  WHERE id = 5 AND typo = 'truoj-1';
UPDATE ekzercoj SET typo = 'plenigu', komando = 'Complétez chaque phrase avec la préposition qui convient.'
  WHERE id IN (15, 23) AND typo IN ('truoj-1', 'truoj-2');
UPDATE ekzercoj SET typo = 'plenigu' WHERE id IN (32, 35, 70) AND typo = 'stelo-2';
UPDATE ekzercoj SET typo = 'plenigu' WHERE id IN (84, 86) AND typo = 'verkado-1';

-- 3. Phrases avec une indication entre parenthèses : la phrase complète, indication comprise, est acceptée
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|mia skribotablo (= bureau) estas apud la fenestro') WHERE id = 75 AND ekzerco_id = 15 AND LOCATE('mia skribotablo (= bureau) estas apud la fenestro', normaligita) = 0;
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|li grimpis gxis la pinto (=le sommet)') WHERE id = 139 AND ekzerco_id = 23 AND LOCATE('li grimpis gxis la pinto (=le sommet)', normaligita) = 0;
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|la floroj kreskas (kreski=pousser) inter la rokoj') WHERE id = 141 AND ekzerco_id = 23 AND LOCATE('la floroj kreskas (kreski=pousser) inter la rokoj', normaligita) = 0;
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|maria legis sian libron (elle a lu son propre livre)') WHERE id = 209 AND ekzerco_id = 35 AND LOCATE('maria legis sian libron (elle a lu son propre livre)', normaligita) = 0;
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|maria legis lian libron (elle a lu le livre de son père)') WHERE id = 210 AND ekzerco_id = 35 AND LOCATE('maria legis lian libron (elle a lu le livre de son père)', normaligita) = 0;
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|maria legis sxian libron (elle a lu le livre de sa sœur)') WHERE id = 211 AND ekzerco_id = 35 AND LOCATE('maria legis sxian libron (elle a lu le livre de sa sœur)', normaligita) = 0;
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|petro atendas lian filon (il attend le fils de son ami)') WHERE id = 212 AND ekzerco_id = 35 AND LOCATE('petro atendas lian filon (il attend le fils de son ami)', normaligita) = 0;
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|petro atendas sxian filon (il attend le fils de sa voisine)') WHERE id = 213 AND ekzerco_id = 35 AND LOCATE('petro atendas sxian filon (il attend le fils de sa voisine)', normaligita) = 0;
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|petro atendas sian filon (il attend son propre fils)') WHERE id = 214 AND ekzerco_id = 35 AND LOCATE('petro atendas sian filon (il attend son propre fils)', normaligita) = 0;
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|mia patro dormos en sia lito (il dormira dans son propre lit)') WHERE id = 215 AND ekzerco_id = 35 AND LOCATE('mia patro dormos en sia lito (il dormira dans son propre lit)', normaligita) = 0;
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|anna skribis sian nomon sur sxia libro per lia skribilo (elle a écrit son propre nom sur le livre de son amie avec le stylo de son frère)') WHERE id = 216 AND ekzerco_id = 35 AND LOCATE('anna skribis sian nomon sur sxia libro per lia skribilo (elle a écrit son propre nom sur le livre de son amie avec le stylo de son frère)', normaligita) = 0;
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|sofia kaj sxia edzo promenas en la parko (sophie et son mari )') WHERE id = 217 AND ekzerco_id = 35 AND LOCATE('sofia kaj sxia edzo promenas en la parko (sophie et son mari )', normaligita) = 0;

-- Résumé attendu : 8 exercices en plenigu, 63 questions, toutes avec au moins un *.
SELECT id, typo, x2u, komando FROM ekzercoj WHERE id IN (5, 15, 23, 32, 35, 70, 84, 86);
SELECT ekzerco_id, COUNT(*) AS demandoj, SUM(demando LIKE '%*%') AS kun_stelo
  FROM ekzerceroj WHERE ekzerco_id IN (5, 15, 23, 32, 35, 70, 84, 86) AND forigita = 0 GROUP BY ekzerco_id;
