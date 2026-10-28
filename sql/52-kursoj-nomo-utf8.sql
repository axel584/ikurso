-- Nom du cours « Paŝoj al plena posedo » : en prod la colonne kursoj.nomo était en latin1, qui ne peut pas contenir « ŝ »,
-- d'où « Pasxoj al plena posedo ». La colonne passe en utf8, comme dans sql/01 (les noms déjà enregistrés, « leçons »
-- compris, sont convertis par MariaDB), puis le nom est corrigé. kursoj.kodo reste en latin1 (jointures avec les autres tables).
-- Peut être rejoué sans risque.
SET NAMES utf8mb4;
ALTER TABLE kursoj MODIFY nomo varchar(64) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '';
UPDATE kursoj SET nomo = 'Paŝoj al plena posedo' WHERE kodo = 'PP';
