-- Phrases libres au milieu d'un exercice corrigé automatiquement (Paŝoj leçons 1 et 2 : « Frazo kun la substantivo de… »,
-- « propozicio kun la adjektivo de… ») : sans corrigé type, elles ne sont plus corrigées automatiquement. Leurs réponses
-- déjà enregistrées comme fausses (gxusta = 0) redeviennent non corrigées (NULL), comme dans un exercice non corrigé.
-- Peut être rejoué sans risque.
UPDATE respondoj r
JOIN ekzerceroj ee ON ee.id = r.ekzercero_id
JOIN ekzercoj e ON e.id = ee.ekzerco_id
SET r.gxusta = NULL
WHERE r.gxusta = 0 AND e.korektebla = 1 AND (ee.normaligita IS NULL OR TRIM(ee.normaligita) = '');
