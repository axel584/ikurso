-- Cours élémentaire (CG) : comme dans la leçon 7, les mots en espéranto des questions d'exercice
-- sont affichés en bleu (<span class="eo">) au lieu d'être entre guillemets droits.
-- Seules deux questions étaient concernées (2.9 n° 14 et 4.9 n° 10).
-- Ne dépend d'aucun déploiement de fichier : peut être joué en prod à tout moment, et rejoué sans risque.
SET NAMES utf8mb4;

UPDATE ekzerceroj SET demando = 'De l’eau froide ne lave pas (<span class="eo">ne lavas</span>) un petit garçon.'
WHERE ekzerco_id = 6 AND kodo = 'ekz02_14';
UPDATE ekzerceroj SET demando = 'Kiu estas la Nacia Tago en via lando? (<span class="eo">nacia</span> = national-e)'
WHERE ekzerco_id = 16 AND kodo = 'ekz04_10';
