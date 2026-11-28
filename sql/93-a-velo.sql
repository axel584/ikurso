-- Cours élémentaire, leçon 3 : « à vélo » au lieu de « en vélo » (bicikle), remarque d'un correcteur bêta-testeur.
--  - section 3.5 « Adverbes en -e » (lecioneroj 24) : exemple « Ni iros bicikle. » ;
--  - vocabulaire à réviser (vortoj 208, section 48) : traduction de bicikle.
-- Sauvegarder d'abord :
--   mysqldump -u <login> -p <base> lecioneroj --where="id = 24" > ~/avant-a-velo-lecioneroj.sql
--   mysqldump -u <login> -p <base> vortoj --where="id = 208" > ~/avant-a-velo-vortoj.sql
-- Le script peut être rejoué sans risque.
SET NAMES utf8mb4;

UPDATE lecioneroj SET enhavo = REPLACE(enhavo, 'Nous irons <b>en vélo</b>.', 'Nous irons <b>à vélo</b>.')
 WHERE id = 24;

UPDATE vortoj SET fr = 'à vélo' WHERE id = 208 AND eo = 'bicikle' AND fr = 'en vélo';

SELECT id, (enhavo LIKE '%Nous irons <b>à vélo</b>.%') AS korektita FROM lecioneroj WHERE id = 24;
SELECT id, eo, fr FROM vortoj WHERE id = 208;
