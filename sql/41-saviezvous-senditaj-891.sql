-- #891 : « Le saviez-vous » envoyés à chaque élève, mémorisés sous forme de liste JSON
-- ([{"numero":3,"dato":"2026-10-23"}, …]) au lieu du seul compteur personoj.saviezvous.
-- Reprise : un compteur à N veut dire que les messages 1 à N ont été envoyés, à une date inconnue (null).
-- Il n'existe que 23 messages : un compteur plus grand est ramené à 23.
-- Le compteur saviezvous reste tenu à jour tant qu'un retour arrière est possible.
-- MariaDB 10.1 n'a pas de fonctions JSON : la liste est construite par découpage d'une chaîne.
-- Peut être rejoué sans risque (seules les listes encore vides sont remplies).
SET NAMES utf8mb4;

ALTER TABLE personoj ADD COLUMN IF NOT EXISTS `saviezvous_senditaj` text NULL AFTER `saviezvous`;

UPDATE personoj
SET saviezvous_senditaj = CONCAT('[', REPLACE(SUBSTRING_INDEX('{"numero":1,"dato":null}|{"numero":2,"dato":null}|{"numero":3,"dato":null}|{"numero":4,"dato":null}|{"numero":5,"dato":null}|{"numero":6,"dato":null}|{"numero":7,"dato":null}|{"numero":8,"dato":null}|{"numero":9,"dato":null}|{"numero":10,"dato":null}|{"numero":11,"dato":null}|{"numero":12,"dato":null}|{"numero":13,"dato":null}|{"numero":14,"dato":null}|{"numero":15,"dato":null}|{"numero":16,"dato":null}|{"numero":17,"dato":null}|{"numero":18,"dato":null}|{"numero":19,"dato":null}|{"numero":20,"dato":null}|{"numero":21,"dato":null}|{"numero":22,"dato":null}|{"numero":23,"dato":null}', '|', LEAST(saviezvous, 23)), '|', ','), ']')
WHERE saviezvous_senditaj IS NULL OR saviezvous_senditaj = '';
