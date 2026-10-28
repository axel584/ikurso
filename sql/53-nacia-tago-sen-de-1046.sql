-- #1046 : CG leçon 4, exercice 9, n° 10 « Kiu estas la Nacia Tago en via lando? » : la date sans « de »
-- (« la dekkvara julio », « la 14-a julio ») est juste aussi (PMEG 23.9) mais n'était pas acceptée par la correction
-- automatique (1 réponse validée sur 19 en prod). Le nom du mois s'écrit en minuscules dans le corrigé type.
-- La comparaison ignore espaces et tirets : « dekkvara » vaut aussi pour « dek kvara », « dek-kvara », et « 14-a » pour « 14a ».
-- Peut être rejoué sans risque.
SET NAMES utf8mb4;

UPDATE ekzerceroj SET respondo = 'En mia lando, la Nacia Tago estas la dekkvara de julio.' WHERE id = 80 AND kodo = 'ekz04_10';

UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|en mia lando la nacia tago estas la dekkvara julio') WHERE id = 80 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|en mia lando la nacia tago estas la dekkvara julio|%';
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|en mia lando la nacia tago estas la 14-a julio') WHERE id = 80 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|en mia lando la nacia tago estas la 14-a julio|%';
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|la nacia tago en mia lando estas la dekkvara julio') WHERE id = 80 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|la nacia tago en mia lando estas la dekkvara julio|%';
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|la nacia tago en mia lando estas la 14-a julio') WHERE id = 80 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|la nacia tago en mia lando estas la 14-a julio|%';
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|la nacia tago en francujo estas la dekkvara julio') WHERE id = 80 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|la nacia tago en francujo estas la dekkvara julio|%';
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|la nacia tago en francujo estas la 14-a julio') WHERE id = 80 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|la nacia tago en francujo estas la 14-a julio|%';
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|en francujo la nacia tago estas la dekkvara julio') WHERE id = 80 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|en francujo la nacia tago estas la dekkvara julio|%';
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|en francujo la nacia tago estas la 14-a julio') WHERE id = 80 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|en francujo la nacia tago estas la 14-a julio|%';
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|la nacia tago en francio estas la dekkvara julio') WHERE id = 80 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|la nacia tago en francio estas la dekkvara julio|%';
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|la nacia tago en francio estas la 14-a julio') WHERE id = 80 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|la nacia tago en francio estas la 14-a julio|%';
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|la nacia tago estas la dekkvara julio en mia lando') WHERE id = 80 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|la nacia tago estas la dekkvara julio en mia lando|%';
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|la nacia tago estas la 14-a julio en mia lando') WHERE id = 80 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|la nacia tago estas la 14-a julio en mia lando|%';
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|la nacia tago estas la dekkvara julio') WHERE id = 80 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|la nacia tago estas la dekkvara julio|%';
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|la nacia tago estas la 14-a julio') WHERE id = 80 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|la nacia tago estas la 14-a julio|%';
