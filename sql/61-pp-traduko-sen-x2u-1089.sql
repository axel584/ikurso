-- Paŝoj al plena posedo, 18.5 : « Traduku la antaŭlastan alineon de la legaĵo en vian nacian lingvon ».
-- La réponse est en français : pas de méthode « x » (sinon « deux » ou « aux » deviennent « deŭ » ou « aŭ ») (#1089).
SET NAMES utf8mb4;
UPDATE ekzercoj SET x2u = 0 WHERE id = 209 AND komando LIKE 'Traduku la antaŭlastan alineon%';
