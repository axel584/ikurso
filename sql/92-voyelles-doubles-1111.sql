-- Cours élémentaire, leçon 4 : « voyelles doubles » au lieu de « sons complexes » (sql/91), proposé par la relectrice
-- (#1111) : « son complexe » laisse croire que c'est difficile. À jouer après sql/91. Peut être rejoué sans risque.
-- Sauvegarde avant de le jouer en prod :
--   mysqldump -u <login> -p <base> lecioneroj > ~/avant-voyelles-doubles.sql
SET NAMES utf8mb4;

-- 4.3 renvoi vers la section suivante
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id
SET le.enhavo = REPLACE(le.enhavo, 'voir la section suivante sur les sons complexes.', 'voir la section suivante sur les voyelles doubles.')
WHERE l.kurso = 'CG' AND l.numero = 4 AND le.ordo = 3;

-- 4.4 Les voyelles doubles
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id
SET le.titolo = 'Les voyelles doubles',
    le.enhavo = REPLACE(REPLACE(REPLACE(le.enhavo,
        'forment un seul son complexe.', 'forment une voyelle double, qui se prononce d’un seul son.'),
        '<b>ne sont pas</b> des sons complexes, mais', '<b>ne sont pas</b> des voyelles doubles, mais'),
        'Un son complexe, lui, ne compte que pour une syllabe', 'Une voyelle double, elle, ne compte que pour une syllabe')
WHERE l.kurso = 'CG' AND l.numero = 4 AND le.ordo = 4;

-- Contrôle (doit renvoyer 0)
SELECT COUNT(*) AS restantaj FROM lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id
WHERE l.kurso = 'CG' AND l.numero = 4 AND (le.enhavo LIKE '%complexe%' OR le.titolo LIKE '%complexe%');
