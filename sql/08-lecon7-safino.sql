-- Leçon 7 du cours élémentaire (CG), page 7.2 : l'exemple du suffixe -in- devient ŝafo → ŝafino
-- (mouton → brebis) au lieu de koko → kokino (coq → poule). En espéranto, koko ne désigne pas
-- forcément un mâle, alors qu'en français « coq » est toujours un mâle (remarque d'Emmanuelle).
-- À jouer après 04-lecon7-affixes-frequents.sql. Peut être rejoué sans risque.
SET NAMES utf8mb4;

-- Vocabulaire à réviser : koko et kokino ne sont plus rattachés à la page (gardés pour les élèves
-- qui les révisent déjà) ; ŝafino est ajouté (ŝafo y est déjà, avec ŝafaro).
UPDATE vortoj SET lecionero_id = 0 WHERE lecionero_id = 69 AND eo IN ('koko', 'kokino');
INSERT INTO vortoj (eo, fr, tipo, lecionero_id)
  SELECT 'ŝafino', 'brebis', 'nom', 69 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'ŝafino' AND lecionero_id = 69);

-- Copie du texte de la page 7.2 utilisée par le redaktilo.
UPDATE lecioneroj SET enhavo = REPLACE(enhavo,
  '<span class="eo"><span class="marque">•</span> koko</span>&nbsp;: coq&emsp;→&emsp;<span class="eo"><span class="marque">•</span> kokino</span>&nbsp;: poule</p>',
  '<span class="eo"><span class="marque">•</span> ŝafo</span>&nbsp;: mouton&emsp;→&emsp;<span class="eo"><span class="marque">•</span> ŝafino</span>&nbsp;: brebis</p>')
WHERE id = 69;
