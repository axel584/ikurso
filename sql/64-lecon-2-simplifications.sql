-- Cours élémentaire, leçon 2 : simplifications proposées par un correcteur (Alain), relues par Emmanuelle avant la prod.
-- Moins de jargon grammatical et de précisions inutiles. REGEXP_REPLACE : le HTML en base contient des retours à la ligne.
SET NAMES utf8mb4;

-- 2.2 Le féminin des noms
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id
SET le.titolo = 'Le féminin des noms : <i>-in</i>',
    le.enhavo = REGEXP_REPLACE(REGEXP_REPLACE(le.enhavo,
        ' ou, dit autrement, on\\s+intercale le suffixe <b>-in</b> entre la terminaison et ce qui la précède\\.', '.'),
        's’accordent en nombre avec les noms auxquels ils se rapportent\\. Par contre, ils ne s’accordent jamais en genre\\.',
        'se mettent au pluriel si les noms auxquels ils se rapportent sont au pluriel. Par contre, ils ne se mettent pas au féminin.')
WHERE l.kurso = 'CG' AND l.numero = 2 AND le.ordo = 2;

-- 2.3 Le complément d’objet direct : deux paragraphes en moins
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id
SET le.enhavo = REGEXP_REPLACE(REGEXP_REPLACE(le.enhavo,
        '<p>Vous aurez sûrement remarqué dans ce dernier exemple.*?</p>\\s*', ''),
        '<p>Dans cette phrase, <span class="eo">li</span> est le <b>sujet</b>.*?</p>\\s*', '')
WHERE l.kurso = 'CG' AND l.numero = 2 AND le.ordo = 3;

-- 2.4 Autres compléments
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id
SET le.enhavo = REGEXP_REPLACE(le.enhavo,
        ' Ils sont généralement introduits par une préposition\\. Dans la première leçon, vous avez déjà vu la préposition <span class="eo">en</span>, qui sert à introduire un complément de lieu\\.', '')
WHERE l.kurso = 'CG' AND l.numero = 2 AND le.ordo = 4;

-- 2.6 mal-
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id
SET le.titolo = '<i>mal-</i>',
    le.enhavo = REPLACE(REPLACE(le.enhavo,
        'Le suffixe <b>-in</b> vous a déjà permis', '<b>-in</b> vous a déjà permis'),
        'Le préfixe <b>mal-</b> fera de même', '<b>mal-</b> fera de même')
WHERE l.kurso = 'CG' AND l.numero = 2 AND le.ordo = 6;

-- 2.7 Forme négative
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id
SET le.enhavo = REPLACE(le.enhavo, 'ont la même fonction ont le même préfixe', 'ont la même fonction commencent pareil')
WHERE l.kurso = 'CG' AND l.numero = 2 AND le.ordo = 7;

-- 2.9 Exercice 2
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id
SET le.enhavo = REGEXP_REPLACE(le.enhavo, 'ce type d’exercice permet de contrôler si', 'ce type d’exercice vous permet de vérifier si')
WHERE l.kurso = 'CG' AND l.numero = 2 AND le.ordo = 9;

-- 2.10 Exercice 3 : consigne plus courte
UPDATE ekzercoj e JOIN lecioneroj le ON le.id = e.lecionero_id JOIN lecionoj l ON l.id = le.leciono_id
SET e.komando = 'Remplacez la portion de phrase entre { } par : li, ŝi, ĝi ou ili.', e.komando_detalo = NULL
WHERE l.kurso = 'CG' AND l.numero = 2 AND le.ordo = 10
  AND e.komando = 'Remplacez la portion de phrase entre { } par le pronom personnel approprié.';
