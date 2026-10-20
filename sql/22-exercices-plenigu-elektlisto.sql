-- Premiers exercices passés aux nouveaux types plenigu et elektlisto (issue #1056) :
-- l'élève complète ou choisit dans la phrase, au lieu de recopier toute la phrase.
-- - Cours élémentaire 6.17 (exercice 27) : les * deviennent des champs (plenigu).
-- - Gerda 2.4, 4.4, 5.4, 6.4, 7.4 (×2) et 8.4 (exercices 53, 57, 59, 61, 63, 64, 66) : les [a/b] deviennent des menus (elektlisto).
-- - Paŝoj 1.4 (exercice 107) : les (A/B) deviennent [A/B], puis des menus (elektlisto).
-- Les réponses attendues (phrases complètes) ne changent pas. Seules les consignes qui demandaient de recopier la phrase sont adaptées.
-- L'aide à la saisie des lettres accentuées est retirée des exercices à menus.
-- Le script vaut pour la prod (mêmes id) et peut être rejoué sans risque. Nécessite sql/21.
SET NAMES utf8mb4;

-- 1. Cours élémentaire 6.17
UPDATE ekzercoj SET typo = 'plenigu',
  komando = 'Complétez chaque phrase avec la terminaison de l’accusatif, ou laissez la case vide si le mot n’en a pas besoin.'
  WHERE id = 27 AND typo = 'stelo-1';

-- 2. Gerda : choix entre crochets
UPDATE ekzercoj SET typo = 'elektlisto', komando = 'Elektu la ĝustan vorton.'
  WHERE id IN (53, 57, 59, 61, 63, 64, 66) AND typo = 'stelo-1'
  AND komando = 'Elektu la ĝustan vorton kaj skribu la tutan frazon.';

-- 3. Paŝoj 1.4 : parenthèses → crochets
UPDATE ekzerceroj SET demando = REGEXP_REPLACE(demando, '\\(([^()/]+/[^()]+)\\)', '[\\1]')
  WHERE ekzerco_id = 107 AND forigita = 0 AND demando LIKE '%(%/%)%';
UPDATE ekzercoj SET typo = 'elektlisto', komando = 'En la sekvantaj frazoj, elektu la ĝustan vorton:'
  WHERE id = 107 AND typo = 'elektu';

-- 4. Les menus n'ont pas besoin de l'aide à la saisie des lettres accentuées (cx → ĉ).
UPDATE ekzercoj SET x2u = 0 WHERE id IN (53, 57, 59, 61, 63, 64, 66, 107) AND typo = 'elektlisto';

-- Résumé attendu : 9 exercices aux nouveaux types.
SELECT id, typo, x2u, komando FROM ekzercoj WHERE id IN (27, 53, 57, 59, 61, 63, 64, 66, 107);
SELECT id, demando FROM ekzerceroj WHERE ekzerco_id = 107 AND forigita = 0 ORDER BY numero;
