-- Cours élémentaire (CG) : stéréotypes sexistes (issue #917).
-- 1. Des femmes n'étaient décrites que par leur apparence :
--    - 2.9 n° 9 : « les sœurs laides » → « les grandes sœurs » ;
--    - 2.10 n° 16 : « {Mia amikino} estas bela » (juste après « {La kuko} estas bela ») → « … estas sana » ;
--    - 2.11 n° 28 : « Mia fratino estas bela knabino » → « … bona knabino » ;
--    - 3.7 n° 6 : « La bela knabino malbone kuras » → « La sana knabino bone kuras ».
-- 2. Les tâches ménagères étaient réservées à la mère :
--    - 3.2 n° 1 : « Mian fraton lavis mia patrino » → « … mia patro » (comme l'exemple de la page 3.1) ;
--    - 4.2 n° 1 : « Lia patrino faras panon » → « Lia patro faras panon ».
-- 3. Les métiers en -isto s'appliquent aux hommes comme aux femmes : leur traduction donne les deux formes
--    (instituteur, institutrice…), dans le vocabulaire à réviser et dans les copies des pages.
-- Le texte affiché vient de fr/cge/lec01.php, lec03.php, lec06.php, lec07.php et de la base ;
-- ce script met la base en accord.
--
-- Les questions sont modifiées sur place : elles gardent leur sens grammatical (même mot à trouver),
-- les réponses déjà envoyées par les élèves restent valables.
-- Chaque mise à jour porte sur l'id ET l'ancienne valeur : le script vaut pour la prod (mêmes id)
-- et peut être rejoué sans risque.
-- Tables en MyISAM (pas de transaction) : en prod, sauvegarder d'abord :
--   mysqldump -u <login> -p <base> ekzerceroj vortoj lecioneroj > ~/avant-stereotypes-$(date +%F).sql
SET NAMES utf8mb4;

-- 1. Apparence
UPDATE ekzerceroj SET
    demando = 'La petite fille a rencontré les grandes sœurs.',
    respondo = 'La malgranda knabino renkontis la grandajn fratinojn.',
    normaligita = 'la malgranda knabino renkontis la grandajn fratinojn|la malgranda filino renkontis la grandajn fratinojn|la malgranda knabino renkontis la fratinojn grandajn|la malgranda filino renkontis la fratinojn grandajn'
  WHERE id = 28 AND kodo = 'ekz02_09' AND respondo LIKE '%malbelajn%';
UPDATE ekzerceroj SET
    demando = '{Mia amikino} estas sana.',
    respondo = '<b>Ŝi</b> estas sana.',
    normaligita = 'sxi estas sana|sxi'
  WHERE id = 35 AND kodo = 'ekz02_16' AND demando = '{Mia amikino} estas bela.';
UPDATE ekzerceroj SET
    demando = 'bona - esti - fratino - knabino - mia.',
    respondo = 'Mia fratino estas bona knabino.',
    normaligita = 'mia fratino estas bona knabino|mia fratino estis bona knabino|mia fratino estos bona knabino|bona knabino estas mia fratino|mia bona fratino estas knabino|la bona knabino estas mia fratino'
  WHERE id = 47 AND kodo = 'ekz02_28' AND demando = 'bela - esti - fratino - knabino - mia.';
UPDATE ekzerceroj SET
    demando = 'La fille en bonne santé court bien.',
    respondo = 'La sana knabino bone kuras.',
    normaligita = 'la sana knabino bone kuras|la sana knabino kuras bone|la sana filino bone kuras|la sana filino kuras bone'
  WHERE id = 53 AND kodo = 'ekz03_06' AND respondo = 'La bela knabino malbone kuras.';

-- 2. Tâches ménagères
UPDATE ekzerceroj SET
    demando = 'Mian fraton lavis mia patro.<br/>* Qui a été lavé ?<br/>* Qui a lavé ?',
    normaligita = 'mon frère mon père|mon frère a été lavé mon père a lavé|mon père a lavé mon frère| mon frère a été lavé par mon père'
  WHERE id = 48 AND kodo = 'ekz03_01' AND demando LIKE 'Mian fraton lavis mia patrino.%';
UPDATE ekzerceroj SET
    demando = 'Lia patro faras panon.',
    respondo = 'Ĉu lia patro faras panon?',
    normaligita = 'cxu lia patro faras panon'
  WHERE id = 71 AND kodo = 'ekz04_01' AND demando = 'Lia patrino faras panon.';

-- Copies des pages 3.1 (lecionero 20) et 6.1 (lecionero 50) utilisées par le redaktilo.
UPDATE lecioneroj SET enhavo = REPLACE(enhavo, '<td>Mia patrino</td><td>lavas</td>', '<td>Mia patro</td><td>lavas</td>')
  WHERE id = 20;
UPDATE lecioneroj SET enhavo = REPLACE(enhavo, '<p class="col s4 eo">Mia patrino</p>', '<p class="col s4 eo">Mia patro</p>')
  WHERE id = 50;

-- 3. Métiers : vocabulaire à réviser…
UPDATE vortoj SET fr = 'instituteur, institutrice' WHERE id = 10 AND eo = 'instruisto' AND fr = 'instituteur';

-- … et copies des pages 1.3 (3), 1.8 (253), 1.11 (254), 7.2 (69) et 7.9 (279).
UPDATE lecioneroj SET enhavo = REGEXP_REPLACE(enhavo, '(<span class="eo">instruisto</span>[^<:]*:\\s*)instituteur<', '\\1instituteur, institutrice<') WHERE id = 3;
UPDATE lecioneroj SET enhavo = REGEXP_REPLACE(enhavo, '(<span class="eo">desegnisto</span>[^<:]*:\\s*)dessinateur<', '\\1dessinateur, dessinatrice<') WHERE id = 253;
UPDATE lecioneroj SET enhavo = REGEXP_REPLACE(enhavo, '(<span class="eo">laboristo</span>[^<:]*:\\s*)ouvrier<', '\\1ouvrier, ouvrière<') WHERE id = 254;
UPDATE lecioneroj SET enhavo = REGEXP_REPLACE(enhavo, '(<span class="eo">komputilisto</span>[^<:]*:\\s*)informaticien<', '\\1informaticien, informaticienne<') WHERE id = 254;
UPDATE lecioneroj SET enhavo = REGEXP_REPLACE(enhavo, '(<span class="eo">oficisto</span>[^<:]*:\\s*)employé<', '\\1employé, employée<') WHERE id = 254;
UPDATE lecioneroj SET enhavo = REGEXP_REPLACE(enhavo, '(<span class="eo">instruisto</span>[^<:]*:\\s*)enseignant<', '\\1enseignant, enseignante<') WHERE id IN (69, 279);
UPDATE lecioneroj SET enhavo = REPLACE(enhavo, '<i>profession, activité habituelle</i></p>', '<i>profession, activité habituelle</i>, pour un homme comme pour une femme</p>')
  WHERE id = 69;

-- Résumé attendu : les six questions modifiées.
SELECT id, kodo, demando FROM ekzerceroj WHERE id IN (28, 35, 47, 48, 53, 71);
