-- #1117 : cours élémentaire, vocabulaire à réviser aligné sur l'encadré « Vocabulaire à retenir » des pages.
-- 6.7 (lecionero 57) : la page montre dorso et vojaĝo, la révision proposait marŝi|paŝi et vojo (déjà appris en 8.x et 9.x).
-- Les lignes sont modifiées sur place : les élèves qui ont fini 6.7 révisent désormais dorso et vojaĝo.
-- 9.9 (lecionero 87) : festeni est dans l'encadré mais son mot de révision n'était rattaché à aucune page.
-- Script rejouable.
SET NAMES utf8mb4;
UPDATE vortoj SET eo = 'dorso', fr = 'dos', tipo = 'nom'
WHERE lecionero_id = 57 AND eo = 'marŝi|paŝi'
  AND NOT EXISTS (SELECT 1 FROM (SELECT eo FROM vortoj WHERE lecionero_id = 57) v WHERE v.eo = 'dorso');
UPDATE vortoj SET eo = 'vojaĝo', fr = 'voyage', tipo = 'nom'
WHERE lecionero_id = 57 AND eo = 'vojo'
  AND NOT EXISTS (SELECT 1 FROM (SELECT eo FROM vortoj WHERE lecionero_id = 57) v WHERE v.eo = 'vojaĝo');
UPDATE vortoj SET lecionero_id = 87
WHERE eo = 'festeni' AND lecionero_id = 0
  AND NOT EXISTS (SELECT 1 FROM (SELECT eo FROM vortoj WHERE lecionero_id = 87) v WHERE v.eo = 'festeni');
