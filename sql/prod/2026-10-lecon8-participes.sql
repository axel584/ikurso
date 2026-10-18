-- Mise en prod : leçon 8 du cours élémentaire (CG), la page 8.1 est coupée en deux, « Conditionnel et impératif »
-- puis « Les participes » (nouvelle section 8.2), sans changer le texte, sauf
-- « participes de la voix active / passive » qui devient « participes actifs / passifs ». Les sections suivantes sont décalées.
-- Reprend sql/14-lecon8-participes.sql.
--
-- À jouer au moment où l'on déploie fr/cge/lec08.php, fr/cge/temaro.php et kionova.php.
--
-- Les tables sont en MyISAM (pas de transaction) : faire d'abord une sauvegarde,
-- qui permet de revenir en arrière en la rejouant :
--   mysqldump -u <login> -p <base> lecioneroj vortoj personoj_lecioneroj > ~/avant-lecon8-$(date +%F).sql
-- puis :
--   mysql -u <login> -p <base> < 2026-10-lecon8-participes.sql
--
-- Le script s'arrête à la première erreur et peut être rejoué sans risque.
SET NAMES utf8mb4;

-- 0. Contrôle : la section 74 doit être la section 8.1 du cours CG et contenir l'ancre des participes,
-- sauf si le script a déjà été joué. Sinon la sous-requête renvoie 2 lignes et le script s'arrête.
SELECT IF((SELECT count(*) FROM lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id
           WHERE le.id = 74 AND l.kurso = 'CG' AND l.numero = 8 AND le.ordo = 1
             AND (le.enhavo LIKE '%<a id="participes"%'
                  OR EXISTS (SELECT 1 FROM lecioneroj x WHERE x.leciono_id = le.leciono_id AND x.titolo = 'Les participes'))) = 1,
          'contrôle OK', (SELECT 1 UNION SELECT 2)) AS controle;

SET @leciono = (SELECT leciono_id FROM lecioneroj WHERE id = 74);
SET @ankro = '<a id="participes" class="scrollspy"></a>';

-- 1. Sections : la page « Les participes » s'insère en 8.2, les sections suivantes sont décalées.
UPDATE lecioneroj SET ordo = ordo + 1 WHERE leciono_id = @leciono AND ordo >= 2
  AND NOT EXISTS (SELECT 1 FROM (SELECT titolo FROM lecioneroj WHERE leciono_id = @leciono) AS t WHERE t.titolo = 'Les participes');

-- 2. Nouvelle page : la seconde moitié du texte de l'ancienne page 8.1 (copie utilisée par le redaktilo),
-- avec « participes actifs / passifs ».
INSERT INTO lecioneroj (leciono_id, titolo, tipo, enhavo, ordo, unua, lasta, dauxro)
  SELECT @leciono, 'Les participes', 'TEKSTO', SUBSTRING(enhavo, LOCATE(@ankro, enhavo)), 2, 0, 0, 17
  FROM lecioneroj WHERE id = 74 AND LOCATE(@ankro, enhavo) > 0
    AND NOT EXISTS (SELECT 1 FROM lecioneroj WHERE leciono_id = @leciono AND titolo = 'Les participes');
SET @participes = (SELECT id FROM lecioneroj WHERE leciono_id = @leciono AND titolo = 'Les participes');
UPDATE lecioneroj SET enhavo = REPLACE(REPLACE(enhavo,
    '<b>Participes de la voix active</b>', '<b>Participes actifs</b>'),
    '<b>Participes de la voix passive</b>', '<b>Participes passifs</b>')
  WHERE id = @participes AND enhavo LIKE '%Participes de la voix%';

-- 3. L'ancienne page 8.1 ne garde que le conditionnel et l'impératif.
UPDATE lecioneroj SET titolo = 'Conditionnel et impératif', dauxro = 8,
    enhavo = SUBSTRING(enhavo, 1, LOCATE(@ankro, enhavo) - 1)
  WHERE id = 74 AND LOCATE(@ankro, enhavo) > 0 AND @participes IS NOT NULL;

-- 4. Le vocabulaire à retenir est affiché en bas de la page des participes : il est ajouté aux révisions
-- quand on termine cette page.
UPDATE vortoj SET lecionero_id = @participes
  WHERE lecionero_id = 74 AND eo IN ('voĉo', 'pordo', 'vermo', 'letero', 'honori', 'diablo', 'adori');

-- 5. Progression : les élèves qui ont déjà fait l'ancienne page 8.1 gardent la nouvelle page comme faite
-- (sinon un avertissement « section non terminée » leur apparaîtrait).
INSERT INTO personoj_lecioneroj (ekdato, dato, persono_id, lecionero_id)
  SELECT pl.ekdato, pl.dato, pl.persono_id, @participes FROM personoj_lecioneroj pl
  WHERE pl.lecionero_id = 74
    AND NOT EXISTS (SELECT 1 FROM personoj_lecioneroj x WHERE x.persono_id = pl.persono_id AND x.lecionero_id = @participes);

-- Résumé attendu : 11 sections, « Conditionnel et impératif » en 1 et « Les participes » en 2,
-- les 7 mots rattachés à la page des participes, autant d'élèves ayant terminé les pages 1 et 2.
SELECT ordo, titolo, dauxro, LOCATE(@ankro, enhavo) AS ankro, LENGTH(enhavo) AS longueur
  FROM lecioneroj WHERE leciono_id = @leciono ORDER BY ordo;
SELECT lecionero_id, count(*) AS mots FROM vortoj WHERE lecionero_id IN (74, @participes) GROUP BY lecionero_id;
SELECT lecionero_id, count(*) AS eleves FROM personoj_lecioneroj WHERE lecionero_id IN (74, @participes) GROUP BY lecionero_id;
