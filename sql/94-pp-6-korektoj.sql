-- Paŝoj al plena posedo, leçon 6, « Gramatikaj Ekzercoj » (section 313) : corrigés types proposés par une correctrice.
-- Exercice sur les participes (ekzerco 140, corrigé par le correcteur : seul le texte affiché change) :
--  - q18 : « La venonta tago estos tutplene okupata. » au lieu de « … tre plena de okupoj. » ;
--  - q24 : « … regis la ĉeestantojn. » au lieu de « … regis la ĉeestantajn personojn. » ;
--  - q25 : « La urbestraro bonvenigos la kunvenintajn delegitojn. » au lieu de
--          « La delegitajn kaj jam kunvenintajn personojn bonvenigos la urbestraro. ».
-- Exercice sur les corrélatifs (ekzerco 141, corrigé automatiquement) :
--  - q32 : « kian » n'est plus accepté : « tian impertinentulon, kia li (estas) », kia est attribut du verbe
--    sous-entendu, au nominatif. Retiré du corrigé affiché et des réponses acceptées (normaligita).
-- La table ekzerceroj est en MyISAM : sauvegarder d'abord
--   mysqldump -u <login> -p <base> ekzerceroj --where="id IN (1209,1215,1216,1223)" > ~/avant-pp-6-korektoj.sql
-- Le script peut être rejoué sans risque.
SET NAMES utf8mb4;

UPDATE ekzerceroj SET respondo = 'La venonta tago estos tutplene okupata.'
 WHERE id = 1209 AND ekzerco_id = 140 AND numero = 18 AND respondo = 'La venonta tago estos tre plena de okupoj.';

UPDATE ekzerceroj SET respondo = 'La kreita embaraso tute regis la ĉeestantojn.'
 WHERE id = 1215 AND ekzerco_id = 140 AND numero = 24 AND respondo = 'La kreita embaraso tute regis la ĉeestantajn personojn.';

UPDATE ekzerceroj SET respondo = 'La urbestraro bonvenigos la kunvenintajn delegitojn.'
 WHERE id = 1216 AND ekzerco_id = 140 AND numero = 25 AND respondo = 'La delegitajn kaj jam kunvenintajn personojn bonvenigos la urbestraro.';

UPDATE ekzerceroj
   SET respondo = 'Mi malofte renkontis <b>tian</b> impertinentulon, <b>kia</b> li.<br/>aŭ: Mi malofte renkontis <b>tiel</b> impertinentulon, <b>kiel</b> li.',
       normaligita = 'mi malofte renkontis tian impertinentulon kia li|mi malofte renkontis tiel impertinentulon kiel li'
 WHERE id = 1223 AND ekzerco_id = 141 AND numero = 32
   AND normaligita = 'mi malofte renkontis tian impertinentulon kia li|mi malofte renkontis tian impertinentulon kian li|mi malofte renkontis tiel impertinentulon kiel li';

SELECT id, numero, respondo, normaligita FROM ekzerceroj WHERE id IN (1209, 1215, 1216, 1223);
