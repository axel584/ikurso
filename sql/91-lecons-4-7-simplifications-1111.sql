-- Cours élémentaire, leçons 4 à 7 : formulations simplifiées (#1111), propositions d'un correcteur.
-- 4.1 Poser des questions ; 4.3 et 4.4 « sons complexes » au lieu de « diphtongues » ; consigne des
-- exercices de traduction 4.11 et 8.4 ; 6.13, 6.14 et 6.15 (remarque sur al, ĝis, el) : « le n » ;
-- 7.1 Fabriquer de nouveaux mots facilement, « Au début du mot », « Pour parler d'une action » ;
-- titres de 7.2 et 7.3 « À la fin du mot » ; 7.3 « Et les autres ? » ; 7.7 « l'adjectif formé à partir du nombre ».
-- REGEXP_REPLACE : le HTML en base contient des retours à la ligne. Le script peut être rejoué sans risque
-- (les textes remplacés n'existent plus après le premier passage).
-- Sauvegarde avant de le jouer en prod :
--   mysqldump -u <login> -p <base> lecioneroj ekzercoj > ~/avant-lecons-4-7-1111.sql
SET NAMES utf8mb4;

-- 4.1 Poser des questions
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id
SET le.titolo = 'Poser des questions',
    le.enhavo = REGEXP_REPLACE(le.enhavo,
        'sur les <b>questions et réponses</b> correspondant à une\\s+affirmation donnée\\.',
        'sur les <b>questions et réponses</b>.')
WHERE l.kurso = 'CG' AND l.numero = 4 AND le.ordo = 1;

-- 4.3 renvoi vers la section suivante
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id
SET le.enhavo = REPLACE(le.enhavo, 'voir la section suivante sur les diphtongues.', 'voir la section suivante sur les sons complexes.')
WHERE l.kurso = 'CG' AND l.numero = 4 AND le.ordo = 3;

-- 4.4 Les sons complexes
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id
SET le.titolo = 'Les sons complexes',
    le.enhavo = REGEXP_REPLACE(REGEXP_REPLACE(REPLACE(le.enhavo,
        'Une diphtongue, elle, ne compte que pour une syllabe', 'Un son complexe, lui, ne compte que pour une syllabe'),
        'forment un seul son\\s+complexe qu’on appelle traditionnellement diphtongue\\.',
        'forment un seul son complexe.'),
        '<b>ne sont pas</b>\\s+des diphtongues, mais',
        '<b>ne sont pas</b> des sons complexes, mais')
WHERE l.kurso = 'CG' AND l.numero = 4 AND le.ordo = 4;

-- 4.11 (et 8.4, même consigne) : « Cet exercice vous permet de vérifier… »
UPDATE ekzercoj SET komando_detalo = REPLACE(komando_detalo, 'Cet exercice permet de vérifier', 'Cet exercice vous permet de vérifier')
WHERE id IN (17, 34) AND komando_detalo LIKE 'Cet exercice permet de vérifier%';

-- 6.13 Complément d'objet indirect
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id
SET le.enhavo = REPLACE(le.enhavo,
        'introduit par une préposition et dans ce cas il ne prend pas la terminaison de l’accusatif.',
        'introduit par une préposition et il ne prend pas le «&nbsp;n&nbsp;».')
WHERE l.kurso = 'CG' AND l.numero = 6 AND le.ordo = 13;

-- 6.14 L'accusatif peut remplacer certaines prépositions
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id
SET le.enhavo = REGEXP_REPLACE(le.enhavo,
        'Notez que cette «disparition» de la préposition et son remplacement par\\s+l’accusatif est possible également pour certains compléments d’objet\\s+indirects s’il n’y a pas de risque de confusion avec un complément\\s+d’objet direct\\.',
        'Notez que le remplacement de la préposition par l’accusatif «&nbsp;n&nbsp;» est possible également dans les cas suivants&nbsp;:')
WHERE l.kurso = 'CG' AND l.numero = 6 AND le.ordo = 14;

-- 6.15 (exercice 5) : remarque sur al, ĝis, el
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id
SET le.enhavo = REGEXP_REPLACE(REGEXP_REPLACE(le.enhavo,
        'Cette affinité de l’accusatif avec l’idée de but d’un mouvement explique\\s+pourquoi il ne faut jamais utiliser l’accusatif après les prépositions',
        'Il ne faut jamais utiliser l’accusatif «&nbsp;n&nbsp;» après les prépositions'),
        'qui serait un\\s+pléonasme\\.</p>',
        'qui serait un pléonasme, une redite.</p>')
WHERE l.kurso = 'CG' AND l.numero = 6 AND le.ordo = 15;

-- 7.1 Fabriquer de nouveaux mots facilement
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id
SET le.titolo = 'Fabriquer de nouveaux mots facilement',
    le.enhavo = REPLACE(REPLACE(REGEXP_REPLACE(le.enhavo,
        'Dans la deuxième leçon nous avons dit qu’il était facile d’élargir\\s+le vocabulaire de l’espéranto à l’aide d’affixes \\(préfixes et\\s+suffixes\\)\\. Voici maintenant les affixes les plus courants, répartis\\s+sur trois pages, avec des exemples qui illustrent leur application\\.\\s+Contentez-vous de constater avec quelle facilité l’on construit de\\s+nouveaux mots tout en réduisant la masse du vocabulaire à apprendre\\s+par cœur\\. Un petit questionnaire',
        'Dans la deuxième leçon nous avons dit qu’il était facile d’élargir le vocabulaire de l’espéranto, par exemple en ajoutant «&nbsp;<b>in</b>&nbsp;» à la fin d’un mot pour le mettre au féminin. C’est comme un jeu de construction. C’est facile, et on économise de la mémoire&nbsp;!
		Un petit questionnaire'),
        '<p class="parto">Les préfixes</p>', '<p class="parto">Au début du mot</p>'),
        '<p class="parto">Trois suffixes pour parler d’une action</p>', '<p class="parto">Pour parler d’une action</p>')
WHERE l.kurso = 'CG' AND l.numero = 7 AND le.ordo = 1;

-- 7.2 et 7.3 : titres
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id
SET le.titolo = 'À la fin du mot : personnes, objets et lieux'
WHERE l.kurso = 'CG' AND l.numero = 7 AND le.ordo = 2;

-- 7.3 : titre et encadré « Et les autres ? »
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id
SET le.titolo = 'À la fin du mot : qualités, taille et possibilité',
    le.enhavo = REGEXP_REPLACE(REPLACE(REPLACE(le.enhavo,
        '<b>Et les autres affixes&nbsp;?</b>', '<b>Et les autres&nbsp;?</b>'),
        'encore d’autres préfixes et suffixes, moins', 'encore d’autres petits mots à combiner, moins'),
        'essayez de le découper en radical et affixes&nbsp;:',
        'essayez de le découper&nbsp;:')
WHERE l.kurso = 'CG' AND l.numero = 7 AND le.ordo = 3;

-- 7.7 Expression de l'heure
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id
SET le.enhavo = REGEXP_REPLACE(le.enhavo,
        'Remarquez bien qu’on utilise la forme ordinale du numéral \\(la dua',
        'Remarquez bien qu’on utilise l’adjectif formé à partir du nombre (la dua')
WHERE l.kurso = 'CG' AND l.numero = 7 AND le.ordo = 7;

-- Contrôle : plus aucun des anciens textes (doit renvoyer 0)
SELECT COUNT(*) AS restantaj FROM lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id
WHERE l.kurso = 'CG' AND l.numero BETWEEN 4 AND 7 AND (le.enhavo LIKE '%diphtongue%' OR le.enhavo LIKE '%affinité de l’accusatif%'
   OR le.enhavo LIKE '%disparition» de la préposition%' OR le.enhavo LIKE '%Contentez-vous%' OR le.enhavo LIKE '%forme ordinale du numéral%'
   OR le.enhavo LIKE '%autres affixes%' OR le.enhavo LIKE '%terminaison de l’accusatif.%' OR le.enhavo LIKE '%affirmation donnée%');
