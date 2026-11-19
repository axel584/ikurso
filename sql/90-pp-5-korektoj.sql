-- Paŝoj al plena posedo, leçon 5, exercice sur le texte (ekzerco 132) : corrigé type des réponses 7 et 13,
-- proposé par une correctrice.
--  - q7 : « unu la aliajn » (plus de deux personnes au congrès) au lieu de « unu la alian ».
--  - q13 : la réponse reprend aussi l'idée du texte (la littérature d'alors reflète la psychologie
--    du jeune « peuple » espérantiste, tourné vers la réconciliation des peuples).
-- Seul le texte affiché change (normaligita vide : ces réponses ne sont pas corrigées automatiquement).
-- La table ekzerceroj est en MyISAM : sauvegarder d'abord
--   mysqldump -u <login> -p <base> ekzerceroj --where="id IN (1144,1150)" > ~/avant-pp-5-korektoj.sql
-- Le script peut être rejoué sans risque.
SET NAMES utf8mb4;

UPDATE ekzerceroj SET respondo = 'Ĉar homoj el la tuta Eŭropo komprenis unu la aliajn kaj interparolis kvazaŭ bone konatoj; multaj parolis Esperanton la unuan fojon kaj miris pri ĝia facileco kaj flueco.'
 WHERE id = 1144 AND ekzerco_id = 132 AND numero = 7 AND respondo LIKE 'Ĉar homoj el la tuta Eŭropo komprenis unu la alian %';

UPDATE ekzerceroj SET respondo = 'Ĝi estis simpla kaj ripetema, kiel ĉiu komenca literaturo, kaj respegulis la psikologion de la frua esperantista gento, kiu celis la reamikiĝon de la popoloj.'
 WHERE id = 1150 AND ekzerco_id = 132 AND numero = 13 AND respondo LIKE 'Ĝi estis simpla kaj ripetema, kiel la komencaj literaturo%';

SELECT id, numero, respondo FROM ekzerceroj WHERE id IN (1144, 1150);
