-- Leçon 8 du cours élémentaire (CG) : deux blagues sexistes remplacées (issue #936).
-- - 8.6, exercice 34, n° 19 : le juge et l'accusé qui fuit « sa femme » → le rêve de quitter son travail
--   (conditionnel : « Se mi estus riĉa, mi forlasus… », vu en 8.1).
-- - 8.9, exercice 36, n° 30 : l'épouse qui parle de son « futur mari » → le champignon comestible
--   (impératif : « manĝu ĝin », vu en 8.1).
-- Les nouvelles blagues n'utilisent que du vocabulaire déjà vu, sauf forlasi et fungo, ajoutés aux listes
-- de vocabulaire (manĝebla se construit avec -ebl-, vu en leçon 7).
-- Le texte affiché vient de fr/cge/lec08.php et de la base ; ce script met la base en accord.
--
-- Les anciennes questions sont masquées et remplacées sous le même numéro : les réponses déjà envoyées
-- par les élèves restent liées à elles.
-- Les mises à jour portent sur l'id ET l'ancienne valeur : le script vaut pour la prod (mêmes id)
-- et peut être rejoué sans risque.
-- Tables en MyISAM (pas de transaction) : en prod, sauvegarder d'abord :
--   mysqldump -u <login> -p <base> ekzerceroj vortoj lecioneroj > ~/avant-lecon8-blagues-$(date +%F).sql
SET NAMES utf8mb4;

-- 1. Les deux questions.
UPDATE ekzerceroj SET forigita = 1 WHERE id = 207 AND ekzerco_id = 34 AND kodo = 'ekz08_19';
UPDATE ekzerceroj SET forigita = 1 WHERE id = 218 AND ekzerco_id = 36 AND kodo = 'ekz08_30';

INSERT INTO ekzerceroj (ekzerco_id, kodo, numero, demando, respondmodelo, respondo, normaligita, bildo, forigita, korektebla)
  SELECT 34, 'ekz08_33', 19,
    '– Se mi estus riĉa, mi forlasus mian laboron por fari mian plej grandan deziron.<br/>– Kaj kio estas via plej granda deziro?<br/>– Forlasi mian laboron!',
    NULL,
    '– Si j’étais riche, je quitterais mon travail pour réaliser mon plus grand désir.<br/>– Et quel est ton plus grand désir&nbsp;?<br/>– Quitter mon travail&nbsp;!',
    'si jétais riche je quitterais mon travail pour réaliser mon plus grand désir et quel est ton plus grand désir quitter mon travail',
    '', 0, 0
  FROM DUAL WHERE NOT EXISTS (SELECT 1 FROM ekzerceroj WHERE ekzerco_id = 34 AND kodo = 'ekz08_33');

INSERT INTO ekzerceroj (ekzerco_id, kodo, numero, demando, respondmodelo, respondo, normaligita, bildo, forigita, korektebla)
  SELECT 36, 'ekz08_34', 30,
    '– Kiel oni povas scii, ĉu fungo estas manĝebla?<br/>– Tre facile: manĝu ĝin vespere. Se vi vivos morgaŭ matene, ĝi estis manĝebla!',
    NULL,
    '– Comment peut-on savoir si un champignon est comestible&nbsp;?<br/>– C’est très facile&nbsp;: mange-le le soir. Si tu es encore en vie le lendemain matin, c’est qu’il était comestible&nbsp;!',
    'comment peuton savoir si un champignon est comestible cest très facile mangele le soir si tu es encore en vie le lendemain matin cest quil était comestible',
    '', 0, 0
  FROM DUAL WHERE NOT EXISTS (SELECT 1 FROM ekzerceroj WHERE ekzerco_id = 36 AND kodo = 'ekz08_34');

-- 2. Mots à réviser de la section 8.6 (lecionero 77) : les mots de l'ancienne blague ne sont plus
-- proposés aux nouveaux élèves (ceux qui les révisent déjà les gardent), forlasi est ajouté.
UPDATE vortoj SET lecionero_id = 0 WHERE lecionero_id = 77 AND id IN (389, 390, 391, 392)
  AND eo IN ('juĝisto', 'aserti', 'akuzato', 'forkuri');
INSERT INTO vortoj (eo, fr, tipo, lecionero_id)
  SELECT 'forlasi', 'quitter, abandonner', 'verbe', 77
  FROM DUAL WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'forlasi' AND lecionero_id = 77);

-- 3. Copies des pages 8.6 et 8.9 utilisées par le redaktilo.
UPDATE lecioneroj SET enhavo = REGEXP_REPLACE(enhavo,
    '<p class="col s12 m6"><span class="eo">(juĝisto|aserti|akuzato|forkuri|opinii)</span>[^<]*</p>\\s*', '')
  WHERE id = 77;
UPDATE lecioneroj SET enhavo = REPLACE(enhavo,
    '<p class="col s12 m6"><span class="eo">tramo</span>',
    '<p class="col s12 m6"><span class="eo">forlasi</span>&nbsp;: quitter, abandonner</p>\n\t\t\t\t\t<p class="col s12 m6"><span class="eo">tramo</span>')
  WHERE id = 77 AND enhavo NOT LIKE '%<span class="eo">forlasi</span>%';
UPDATE lecioneroj SET enhavo = REGEXP_REPLACE(enhavo,
    '<p class="col s12 m6"><span class="eo">(daŭre|estonta|inciti)</span>.*?</p>\\s*', '')
  WHERE id = 79;
UPDATE lecioneroj SET enhavo = REPLACE(enhavo,
    '<p class="col s12 m6"><span class="eo">foriri (for-iri)</span>',
    '<p class="col s12 m6"><span class="eo">fungo</span>&nbsp;: champignon</p> <p class="col s12 m6"><span class="eo">manĝebla (manĝ-ebl-a)</span>&nbsp;: comestible (qu’on peut manger)</p> <p class="col s12 m6"><span class="eo">foriri (for-iri)</span>')
  WHERE id = 79 AND enhavo NOT LIKE '%<span class="eo">fungo</span>%';

-- Résumé attendu : 207 et 218 masquées, ekz08_33 et ekz08_34 actives sous les numéros 19 et 30.
SELECT id, ekzerco_id, kodo, numero, forigita FROM ekzerceroj WHERE (ekzerco_id = 34 AND numero = 19) OR (ekzerco_id = 36 AND numero = 30);
