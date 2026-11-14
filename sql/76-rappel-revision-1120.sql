-- #1120 : rappel par mail quand des mots de vocabulaire attendent d'être révisés depuis 3 jours (cron/rappel.php).
-- Nouveau réglage REVIZIO dans personoj_agordoj (#920), accepté par tout le monde au départ, comme « Le saviez-vous ».
-- Désinscription en un clic depuis le mail (malaboni.php) ou dans les données personnelles.
-- Peut être rejoué sans risque (les lignes existantes ne sont pas modifiées).
SET NAMES utf8mb4;

INSERT IGNORE INTO personoj_agordoj (persono_id, agordo, rajto, dato)
SELECT id, 'REVIZIO', 1, NOW() FROM personoj;
