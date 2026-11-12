-- Cours élémentaire, leçon 1 : termes de grammaire remplacés par des formulations simples (#1111),
-- propositions d'un correcteur pour les sections 1.2, 1.4 et le QCM 1.12.
-- REGEXP_REPLACE : le HTML en base contient des retours à la ligne.
SET NAMES utf8mb4;

-- 1.2 Les terminaisons usuelles
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id
SET le.enhavo = REGEXP_REPLACE(le.enhavo,
        'Les <b>noms communs</b> et les <b>noms propres</b> assimilés finissent\\s+toujours par <b>-o</b>\\.',
        'Les <b>noms</b> (ami, café, France, espoir) finissent toujours par <b>-o</b> (<span class="eo">amiko, kafo, Francio, espero</span>).')
WHERE l.kurso = 'CG' AND l.numero = 1 AND le.ordo = 2;

-- 1.4 Un peu de grammaire : articles et possessifs
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id
SET le.enhavo = REGEXP_REPLACE(REGEXP_REPLACE(REGEXP_REPLACE(le.enhavo,
        'Les <b>articles indéfinis</b> \\(un, une, des\\) et <b>partitifs</b>\\s+\\(du, de la, des\\) n’existent pas en espéranto\\.',
        '«&nbsp;un, une, des&nbsp;» et «&nbsp;du, de la, des&nbsp;» n’existent pas en espéranto. On ne les traduit pas.'),
        'Les <b>articles définis</b> \\(le, la, les, l’\\) sont traduits par un seul mot',
        '«&nbsp;le, la, les, l’&nbsp;» sont traduits par un seul mot'),
        'Les <b>adjectifs possessifs</b> sont formés simplement en ajoutant la\\s+terminaison <b>-a</b> au pronom personnel\\. Quand ils sont employés sans\\s+être suivis par un nom, ils ont la fonction de nos pronoms possessifs\\.',
        'En ajoutant <b>-a</b> à <span class="eo">mi</span> (je), on obtient <span class="eo">mia</span> (mon, ma).')
WHERE l.kurso = 'CG' AND l.numero = 1 AND le.ordo = 4;

-- 1.12 QCM : des questions sur la langue plutôt que sur la terminologie
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id
SET le.enhavo = REPLACE(REPLACE(REPLACE(REPLACE(REPLACE(le.enhavo,
        '"question":"Quel est le pronom de 3<sup>e</sup> personne féminin singulier&nbsp;?"', '"question":"Quel mot pour remplacer «fratino»&nbsp;?"'),
        '"question":"Quelle est la terminaison caractéristique de l''infinitif&nbsp;?"', '"question":"Les verbes à l’infinitif se terminent par la lettre…"'),
        '"question":"Quelle est la terminaison caractéristique de l’adjectif&nbsp;?"', '"question":"Les adjectifs se terminent par la lettre…"'),
        '"question":"Quelle est la terminaison caractéristique du passé&nbsp;?"', '"question":"Les verbes au passé se terminent par…"'),
        '"question":"Quelle est la terminaison caractéristique du nom&nbsp;?"', '"question":"Les noms se terminent par la lettre…"')
WHERE l.kurso = 'CG' AND l.numero = 1 AND le.ordo = 12;
