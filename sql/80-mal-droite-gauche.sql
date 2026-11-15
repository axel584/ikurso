-- Cours élémentaire, page 2.6 (mal-) : l'exemple inversait droite et gauche ; c'est « droite » (dekstra)
-- qui donne « gauche » (maldekstra) avec mal-. Signalé par Alain. Script rejouable.
SET NAMES utf8mb4;
UPDATE lecioneroj
SET enhavo = REPLACE(REPLACE(enhavo,
    '<em>aimer</em>, <em>beau</em>, <em>gauche</em>, <em>vrai</em>',
    '<em>aimer</em>, <em>beau</em>, <em>droite</em>, <em>vrai</em>'),
    '<em>détester</em>, <em>laid</em>, <em>droite</em>, <em>faux</em>',
    '<em>détester</em>, <em>laid</em>, <em>gauche</em>, <em>faux</em>')
WHERE id = 12 AND enhavo LIKE '%<em>beau</em>, <em>gauche</em>, <em>vrai</em>%';
