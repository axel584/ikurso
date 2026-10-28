-- #967 : mots employés dans les exercices du cours en 10 leçons mais absents du lexique.
-- « povi » (traduire « pouvoir » dans l'exercice 4 de la leçon 8), vu pour la première fois dans le texte de la section 6.9 ;
-- « kara » (« Mia kara fraŭlin’ ! »), section 9.1.
-- Peut être rejoué sans risque.
SET NAMES utf8mb4;
INSERT INTO vortoj (eo, fr, tipo, lecionero_id)
SELECT 'povi', 'pouvoir, être capable de', 'verbe', 58 FROM DUAL
WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'povi' AND lecionero_id = 58);
INSERT INTO vortoj (eo, fr, tipo, lecionero_id)
SELECT 'kara', 'cher, chère', 'adj', 82 FROM DUAL
WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'kara' AND lecionero_id = 82);
