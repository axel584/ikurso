-- Mise en prod : cours élémentaire (DLEK), typographie des corrigés types, issue #1042.
-- Espaces en trop (6.12 q28, 6.15 q32, et l'espace avant le point-virgule en espéranto en 3.11 q17)
-- et point final manquant (6.10 q17), plus les corrections des pages copiées dans lecioneroj.enhavo.
-- Seul le texte affiché change : normaligita, qui sert à la
-- correction automatique, est inchangé.
-- Reprend sql/13-typographie-dlek.sql. Aucun fichier PHP lié : le script peut être joué à tout moment.
--
-- La table ekzerceroj est en MyISAM (pas de transaction) : faire d'abord une sauvegarde :
--   mysqldump -u <login> -p <base> ekzerceroj > ~/avant-typographie-dlek-$(date +%F).sql
-- puis :
--   mysql -u <login> -p <base> < 2026-10-typographie-dlek.sql
--
-- Le script s'arrête à la première erreur et peut être rejoué sans risque.
SET NAMES utf8mb4;

-- 0. Contrôle : les 4 questions doivent être celles attendues du cours CG.
-- Sinon la sous-requête renvoie 2 lignes et le script s'arrête.
SELECT IF((SELECT count(*) FROM ekzerceroj e JOIN ekzercoj z ON z.id = e.ekzerco_id
           JOIN lecioneroj le ON le.id = z.lecionero_id JOIN lecionoj l ON l.id = le.leciono_id
           WHERE l.kurso = 'CG' AND ((e.id = 64 AND e.kodo = 'ekz03_17') OR (e.id = 143 AND e.kodo = 'ekz06_17')
                                  OR (e.id = 154 AND e.kodo = 'ekz06_28') OR (e.id = 158 AND e.kodo = 'ekz06_32'))) = 4,
          'contrôle OK', (SELECT 1 UNION SELECT 2)) AS controle;

UPDATE ekzerceroj SET respondo = 'Dek ses horoj estas unu tago; ok horoj estas unu nokto.'
  WHERE id = 64 AND kodo = 'ekz03_17' AND respondo = 'Dek ses horoj estas unu tago ; ok horoj estas unu nokto.';
UPDATE ekzerceroj SET respondo = 'Mi estas membro de junulara esperantista klubo.'
  WHERE id = 143 AND kodo = 'ekz06_17' AND respondo = 'Mi estas membro de junulara esperantista klubo';
UPDATE ekzerceroj SET respondo = 'Dum ĉiu tagmanĝo infanoj estos antaŭ la kaĝo.'
  WHERE id = 154 AND kodo = 'ekz06_28' AND respondo = 'Dum ĉiu tagmanĝo infanoj estos antaŭ la kaĝo. ';
UPDATE ekzerceroj SET respondo = 'Faru vian aferon, Dio zorgos la ceteron.'
  WHERE id = 158 AND kodo = 'ekz06_32' AND respondo = 'Faru vian aferon, Dio zorgos la ceteron. ';

-- Copie des pages dans lecioneroj.enhavo (utilisée par le redaktilo) : mêmes corrections que dans
-- fr/cge/lec04.php, lec06.php, lec07.php et lec08.php. Sans effet si le texte est déjà corrigé.
UPDATE lecioneroj SET enhavo = REPLACE(enhavo, '<span class="eo">Li kredas je Dio</span>', '<span class="eo">Li kredas je Dio.</span>')
  WHERE id = 64 AND enhavo LIKE '%kredas je Dio</span>%';
UPDATE lecioneroj SET enhavo = REPLACE(REPLACE(enhavo, '<span class="eo">ĝis revido !</span>', '<span class="eo">ĝis revido!</span>'),
    '<span class="eo">ek !</span>', '<span class="eo">ek!</span>')
  WHERE id IN (68, 279) AND (enhavo LIKE '%revido !</span>%' OR enhavo LIKE '%>ek !</span>%');
UPDATE lecioneroj SET enhavo = REPLACE(enhavo, ' … </span> = Sophie', ' …</span> = Sophie')
  WHERE id = 78 AND enhavo LIKE '% … </span> = Sophie%';
UPDATE lecioneroj SET enhavo = REPLACE(REPLACE(REPLACE(enhavo,
    'la Tago de la Laboro</span>', 'la Tago de la Laboro.</span>'),
    '(littéralement "le Jour du Travail")</p>', '(littéralement "le Jour du Travail").</p>'),
    'mi edziĝos. </span>', 'mi edziĝos.</span>')
  WHERE id = 271 AND (enhavo LIKE '%Tago de la Laboro</span>%' OR enhavo LIKE '%mi edzi%os. </span>%');

-- Résumé attendu : les 4 corrigés sans espace en trop et terminés par un point, et les copies
-- des pages corrigées (toutes les colonnes à 0).
SELECT id, kodo, CONCAT('[', respondo, ']') AS respondo FROM ekzerceroj WHERE id IN (64, 143, 154, 158);
SELECT id, (enhavo LIKE '%kredas je Dio</span>%') + (enhavo LIKE '%revido !</span>%') + (enhavo LIKE '%>ek !</span>%')
  + (enhavo LIKE '% … </span> = Sophie%') + (enhavo LIKE '%Tago de la Laboro</span>%') + (enhavo LIKE '%mi edzi%os. </span>%') AS restes
  FROM lecioneroj WHERE id IN (64, 68, 78, 271, 279);
