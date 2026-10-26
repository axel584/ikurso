-- #1096 : barres obliques inverses enregistrées devant les apostrophes et les guillemets (administri2.php passait
-- nom, prénom, adresse et commentaire dans addslashes() alors que les requêtes sont préparées, et en rajoutait à chaque
-- enregistrement ; anciennes inscriptions faites avant PHP 5.4, qui échappait les guillemets).
-- Toute suite de barres obliques inverses devant ' ou " est supprimée, ainsi que celles restées en fin de valeur tronquée.
-- Les autres barres obliques inverses (« s\c », commentaire qui parle de ce caractère) sont gardées. Peut être rejoué sans risque.
-- (MariaDB 10.1 : REGEXP_REPLACE ; dans les chaînes SQL, \\ représente une barre oblique inverse)
UPDATE personoj SET familinomo = REGEXP_REPLACE(REGEXP_REPLACE(familinomo, '\\\\+([\'"])', '\\1'), '\\\\+$', '') WHERE familinomo REGEXP '\\\\[\'"]|\\\\$';
UPDATE personoj SET personnomo = REGEXP_REPLACE(REGEXP_REPLACE(personnomo, '\\\\+([\'"])', '\\1'), '\\\\+$', '') WHERE personnomo REGEXP '\\\\[\'"]|\\\\$';
UPDATE personoj SET adreso1 = REGEXP_REPLACE(REGEXP_REPLACE(adreso1, '\\\\+([\'"])', '\\1'), '\\\\+$', '') WHERE adreso1 REGEXP '\\\\[\'"]|\\\\$';
UPDATE personoj SET adreso2 = REGEXP_REPLACE(REGEXP_REPLACE(adreso2, '\\\\+([\'"])', '\\1'), '\\\\+$', '') WHERE adreso2 REGEXP '\\\\[\'"]|\\\\$';
UPDATE personoj SET urbo = REGEXP_REPLACE(REGEXP_REPLACE(urbo, '\\\\+([\'"])', '\\1'), '\\\\+$', '') WHERE urbo REGEXP '\\\\[\'"]|\\\\$';
UPDATE personoj SET kialo = REGEXP_REPLACE(REGEXP_REPLACE(kialo, '\\\\+([\'"])', '\\1'), '\\\\+$', '') WHERE kialo REGEXP '\\\\[\'"]|\\\\$';
