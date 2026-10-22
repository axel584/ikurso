-- #920 : préférences d'envoi des mails non sollicités (rappels, « Le saviez-vous »).
-- Une ligne par personne et par réglage, toujours présente : rajto = 1 si la personne reçoit le mail.
-- Les rappels reprennent personoj.stop_rappel ; « Le saviez-vous » est accepté par tout le monde au départ.
-- Espéranto Aktiv n'est pas stocké ici : l'abonnement est lu dans Sympa.
-- Peut être rejoué sans risque (les lignes existantes ne sont pas modifiées).
SET NAMES utf8mb4;

CREATE TABLE IF NOT EXISTS `personoj_agordoj` (
  `persono_id` int(11) NOT NULL,
  `agordo` varchar(20) NOT NULL,
  `rajto` tinyint(1) NOT NULL DEFAULT 1,
  `dato` datetime NOT NULL,
  PRIMARY KEY (`persono_id`, `agordo`),
  KEY `agordo_rajto` (`agordo`, `rajto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT IGNORE INTO personoj_agordoj (persono_id, agordo, rajto, dato)
SELECT id, 'RAPPEL', IF(stop_rappel = 'J', 0, 1), NOW() FROM personoj;

INSERT IGNORE INTO personoj_agordoj (persono_id, agordo, rajto, dato)
SELECT id, 'SAVIEZVOUS', 1, NOW() FROM personoj;
