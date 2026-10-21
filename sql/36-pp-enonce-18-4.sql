-- Paŝoj al plena posedo 18.4 (« Simpligita anatomio ») n°37 : coquilles « ad audiloj » pour « aŭ aŭdiloj », vérifiées sur l'édition papier.
-- Ne s'applique que si l'énoncé n'a pas changé ; peut être rejoué sans risque.
SET NAMES utf8mb4;

UPDATE ekzerceroj SET demando = 'kapfolioj, aŭ aŭdiloj' WHERE id = 1721 AND ekzerco_id = 208 AND demando IN ('kapfolioj, ad audiloj', 'kapfolioj, aŭ audiloj');

-- Vérification
SELECT id, numero, demando FROM ekzerceroj WHERE id = 1721;
