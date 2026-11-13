-- Cours élémentaire, leçon 3 : simplifications proposées par un correcteur (comme sql/64 et sql/65 pour les leçons 2 et 1).
-- Moins de jargon grammatical : « nombres cardinaux / ordinaux » et « verbes transitifs / intransitifs » disparaissent
-- des pages 3.8 et 3.10, définition des adverbes raccourcie en 3.5.
-- REGEXP_REPLACE : le HTML en base contient des retours à la ligne et des tabulations (\\s+).
SET NAMES utf8mb4;

-- 3.1 Ordre des mots
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id
SET le.enhavo = REPLACE(le.enhavo, 'Nous avons vu pas mal de choses dans la 2<sup>e</sup> leçon.', 'Nous avons déjà vu beaucoup de choses dans la 2<sup>e</sup> leçon.')
WHERE l.kurso = 'CG' AND l.numero = 3 AND le.ordo = 1;

-- 3.5 Adverbes en -e
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id
SET le.enhavo = REGEXP_REPLACE(REGEXP_REPLACE(le.enhavo,
        'Les <b>adverbes</b> jouent un peu le même rôle(?s).*?temps ou le lieu\\.',
        'Les <b>adverbes</b> expriment la manière, la cause, le temps ou le lieu.'),
        'Avec cette terminaison vous connaissez maintenant la totalité des(?s).*?simple changement de terminaison :',
        'En changeant la terminaison d’un mot, on change sa catégorie&nbsp;:')
WHERE l.kurso = 'CG' AND l.numero = 3 AND le.ordo = 5;

-- 3.8 Les nombres (au lieu de « Les nombres cardinaux »)
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id
SET le.titolo = 'Les nombres',
    le.enhavo = REPLACE(REGEXP_REPLACE(REGEXP_REPLACE(REGEXP_REPLACE(REGEXP_REPLACE(REGEXP_REPLACE(REPLACE(le.enhavo,
        -- les nombres de 1 à 100 : une remarque de plus
        '(= 300, c’est-à-dire 3 fois 100).</li>',
        '(= 300, c’est-à-dire 3 fois 100).</li>\n\t\t\t<li>Pour compter de 1 à 100, il faut savoir 22 mots en français. Il n’en faut que 11 en espéranto.</li>'),
        'Les <b>nombres cardinaux</b> n’ont pas de terminaison spéciale et ils restent\\s+invariables\\.',
        'Les mots pour les <b>nombres</b> n’ont pas de terminaison spéciale et ils restent invariables.'),
        'Les <b>nombres ordinaux</b> se forment par adjonction de la terminaison\\s+<em>-a</em> d’adjectif aux nombres cardinaux\\.',
        'En ajoutant la terminaison <em>-a</em> à un nombre, on obtient un adjectif.'),
        -- la ligne « </ » égarée entre les deux remarques s’affichait telle quelle
        '<li>Dans les nombres ordinaux, on sépare généralement les mots par des tirets\\.</li>\\s*</\\s*',
        '<li>Notez bien&nbsp;: <span class="eo">sepdek unu</span> mais <span class="eo">sepdek-unua</span>. Le tiret montre que <em>-a</em> s’applique aux deux mots <span class="eo">sepdek</span> et <span class="eo">unu</span>.</li>\n\t\t\t'),
        'On peut aussi utiliser les chiffres pour écrire les nombres ordinaux\\. On fait alors généralement suivre les chiffres de <b>-a</b>\\.',
        'On peut aussi utiliser les chiffres. On fait alors suivre les chiffres de <b>-a</b>.'),
        '<span class="eo">71-a</span>\\.</li>',
        '<span class="eo">71-a</span> (premier, vingtième, soixante et onzième).</li>'),
        -- indice du petit QCM (sql/71) sans « ordinaux »
        'les ordinaux prennent la terminaison -a des adjectifs : unua.', 'on ajoute la terminaison -a des adjectifs : unua.')
WHERE l.kurso = 'CG' AND l.numero = 3 AND le.ordo = 8;

-- 3.10 Verbes et compléments (au lieu de « Verbes intransitifs et transitifs »)
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id
SET le.titolo = 'Verbes et compléments',
    le.enhavo = REGEXP_REPLACE(REGEXP_REPLACE(REGEXP_REPLACE(REPLACE(le.enhavo,
        'À noter que certains verbes intransitifs n’ont pas de sujet du tout.', 'À noter que certains verbes n’ont pas de sujet du tout.'),
        -- paragraphe imbriqué <p><p>…</p><div>…</div></p> remis à plat
        '<p class="parto">Nous avons vu de nombreux exemples de <b>verbes transitifs</b>(?s).*?<p>Il s''agit des verbes qui s''utilisent avec un complément d''objet :</p>(.*?</div>)\\s*</p>',
        '<p class="parto">Nous avons vu de nombreux exemples de verbes qui peuvent s’utiliser avec un complément d’objet&nbsp;:</p>\\1'),
        'En revanche, on appelle <b>verbe intransitif</b> un verbe(?s).*?<em>sani</em>\\.\\.\\.',
        'Certains verbes ne sont pas suivis par un complément d’objet. Ex.&nbsp;: <em>vivi</em>, <em>promeni</em>, <em>kuri</em>, <em>esti</em>, <em>sani</em>…'),
        'Quand un verbe intransitif est suivi d’un adjectif ou d’un nom(?s).*?</b> dans ce cas\\.',
        'Dans ce cas, quand le verbe est suivi d’un adjectif ou d’un nom, ce dernier n’est pas un complément d’objet direct. La terminaison <b>-n</b> de l’accusatif <b>n’est alors jamais employée</b>.')
WHERE l.kurso = 'CG' AND l.numero = 3 AND le.ordo = 10;
