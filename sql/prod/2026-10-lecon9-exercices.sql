-- Mise en prod : leçon 9 du cours élémentaire (CG), l'exercice 9.8, quatre articles de revue à traduire
-- (130 minutes annoncées), est découpé en quatre exercices d'un article, placés après la page qui prépare
-- à les lire : 9.4 (après les adverbes en -aŭ), 9.6, 9.8 et 9.11 (après la page sur les revues).
-- Reprend sql/15-lecon9-exercices.sql.
--
-- À jouer au moment où l'on déploie fr/cge/lec09.php, fr/cge/temaro.php, helpo.php et kionova.php.
--
-- Les tables sont en MyISAM (pas de transaction) : faire d'abord une sauvegarde,
-- qui permet de revenir en arrière en la rejouant :
--   mysqldump -u <login> -p <base> lecioneroj ekzercoj ekzerceroj vortoj personoj_lecioneroj > ~/avant-lecon9-$(date +%F).sql
-- puis :
--   mysql -u <login> -p <base> < 2026-10-lecon9-exercices.sql
--
-- Le script s'arrête à la première erreur et peut être rejoué sans risque.
SET NAMES utf8mb4;

-- 0. Contrôle : la section 89 doit être une section de la leçon 9 du cours CG, avec l'exercice 37 ;
-- les questions 221 à 224 doivent être dans l'exercice 37 ou déjà dans les exercices 320 à 322 ;
-- les identifiants 320 à 322 doivent être libres ou déjà utilisés par ce script.
-- Sinon la sous-requête renvoie 2 lignes et le script s'arrête.
SELECT IF((SELECT count(*) FROM lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id JOIN ekzercoj z ON z.lecionero_id = le.id
           WHERE le.id = 89 AND z.id = 37 AND l.kurso = 'CG' AND l.numero = 9) = 1
          AND (SELECT count(*) FROM ekzerceroj WHERE (id = 221 AND ekzerco_id IN (37, 320)) OR (id = 222 AND ekzerco_id IN (37, 321))
               OR (id = 223 AND ekzerco_id IN (37, 322)) OR (id = 224 AND ekzerco_id = 37)) = 4
          AND (SELECT count(*) FROM ekzercoj z LEFT JOIN lecioneroj le ON le.id = z.lecionero_id
               WHERE z.id IN (320, 321, 322) AND (le.leciono_id IS NULL OR le.leciono_id <> (SELECT leciono_id FROM lecioneroj WHERE id = 89))) = 0,
          'contrôle OK', (SELECT 1 UNION SELECT 2)) AS controle;

SET @leciono = (SELECT leciono_id FROM lecioneroj WHERE id = 89);

-- 1. Sections : les trois premiers articles deviennent les exercices 9.4, 9.6 et 9.8, placés après la page
-- qui prépare à les lire ; l'ancienne page 9.8 (id 89) devient l'exercice 9.11, avec le dernier article.
UPDATE lecioneroj SET ordo = CASE id WHEN 82 THEN 1 WHEN 83 THEN 2 WHEN 84 THEN 3 WHEN 85 THEN 5 WHEN 86 THEN 7
    WHEN 87 THEN 9 WHEN 88 THEN 10 WHEN 89 THEN 11 WHEN 217 THEN 12 END
  WHERE leciono_id = @leciono AND id IN (82, 83, 84, 85, 86, 87, 88, 89, 217);

INSERT INTO lecioneroj (leciono_id, titolo, tipo, enhavo, ordo, unua, lasta, dauxro)
  SELECT @leciono, 'Exercice 1', 'EKZERCARO', '			##EKZERCO:320##

			<fieldset class="vortoj">
				<legend>VOCABULAIRE À RETENIR</legend>
				<div class="vortlisto row">
					<p class="col s12 m6"><span class="eo">gvidi</span>&nbsp;: guider, diriger</p>
					<p class="col s12 m6"><span class="eo">Brazilo</span>&nbsp;: Brésil</p>
					<p class="col s12 m6"><span class="eo">Braziljo</span>&nbsp;: Brasilia</p>
					<p class="col s12 m6"><span class="eo">senti</span>&nbsp;: sentir, ressentir</p>
					<p class="col s12 m6"><span class="eo">kresko</span>&nbsp;: croissance, accroissement</p>
				</div>
			</fieldset>
', 4, 0, 0, 10
  FROM DUAL WHERE NOT EXISTS (SELECT 1 FROM lecioneroj WHERE leciono_id = @leciono AND titolo = 'Exercice 1');
INSERT INTO lecioneroj (leciono_id, titolo, tipo, enhavo, ordo, unua, lasta, dauxro)
  SELECT @leciono, 'Exercice 2', 'EKZERCARO', '			##EKZERCO:321##
', 6, 0, 0, 15
  FROM DUAL WHERE NOT EXISTS (SELECT 1 FROM lecioneroj WHERE leciono_id = @leciono AND titolo = 'Exercice 2');
INSERT INTO lecioneroj (leciono_id, titolo, tipo, enhavo, ordo, unua, lasta, dauxro)
  SELECT @leciono, 'Exercice 3', 'EKZERCARO', '			##EKZERCO:322##

			<p class="noto">NOTE : <span class="eo">Ŝerbruko</span>&nbsp;: Sherbrooke (ville du Québec)</p>

			<fieldset class="vortoj">
				<legend>VOCABULAIRE À RETENIR</legend>
				<div class="vortlisto row">
					<p class="col s12 m6"><span class="eo">samideano</span>&nbsp;: partisan (ici : espérantiste)</p>
					<p class="col s12 m6"><span class="eo">gastigi</span>&nbsp;: recevoir (des invités), offrir l’hospitalité</p>
					<p class="col s12 m6"><span class="eo">kutima</span>&nbsp;: habituel</p>
					<p class="col s12 m6"><span class="eo">Usono</span>&nbsp;: États-Unis</p>
					<p class="col s12 m6"><span class="eo">plie</span>&nbsp;: de plus</p>
					<p class="col s12 m6"><span class="eo">aranĝo</span>&nbsp;: manifestation</p>
				</div>
			</fieldset>
', 8, 0, 0, 15
  FROM DUAL WHERE NOT EXISTS (SELECT 1 FROM lecioneroj WHERE leciono_id = @leciono AND titolo = 'Exercice 3');
SET @ekz1 = (SELECT id FROM lecioneroj WHERE leciono_id = @leciono AND titolo = 'Exercice 1');
SET @ekz2 = (SELECT id FROM lecioneroj WHERE leciono_id = @leciono AND titolo = 'Exercice 2');
SET @ekz3 = (SELECT id FROM lecioneroj WHERE leciono_id = @leciono AND titolo = 'Exercice 3');

-- La durée annoncée passe de 130 minutes pour les 4 articles à 10-20 minutes par article.
UPDATE lecioneroj SET titolo = 'Exercice 4', dauxro = 20, enhavo = '	
			##EKZERCO:37##

			<fieldset class="vortoj">
				<legend>VOCABULAIRE À RETENIR</legend>
				<div class="vortlisto row">
					<p class="col s12 m6"><span class="eo">asocio</span>&nbsp;: association</p>
					<p class="col s12 m6"><span class="eo">najbaro</span>&nbsp;: voisin</p>
					<p class="col s12 m6"><span class="eo">rubriko</span>&nbsp;: rubrique</p>
					<p class="col s12 m6"><span class="eo">numero</span>&nbsp;: numéro (d’une revue)</p>
					<p class="col s12 m6"><span class="eo">bulteno</span>&nbsp;: bulletin</p>
					<p class="col s12 m6"><span class="eo">organizi</span>&nbsp;: organiser</p>
					<p class="col s12 m6"><span class="eo">vidpunkto</span>&nbsp;: point de vue</p>
					<p class="col s12 m6"><span class="eo">Pasko</span>&nbsp;: Pâques</p>
					<p class="col s12 m6"><span class="eo">tradicio</span>&nbsp;: tradition</p>
					<p class="col s12 m6"><span class="eo">supozi</span>&nbsp;: supposer</p>
					<p class="col s12 m6"><span class="eo">Flandro</span>&nbsp;: Flandres </p>
					<p class="col s12 m6"><span class="eo">Nederlando</span>&nbsp;: Pays-Bas</p>
				</div>
			</fieldset>
'
  WHERE id = 89;

-- 2. Exercices : un par article. Les identifiants sont fixés car fr/cge/lec09.php les appelle directement.
UPDATE ekzercoj SET komando = 'Traduisez cet article, puisé dans une revue en espéranto.' WHERE id = 37;
INSERT INTO ekzercoj (id, komando, lecionero_id, ekzemplo, komando_detalo, typo, x2u, korektebla)
  SELECT n.id, 'Traduisez cet article, puisé dans une revue en espéranto.', n.lecionero_id, z.ekzemplo, z.komando_detalo, z.typo, z.x2u, z.korektebla
  FROM (SELECT 320 AS id, @ekz1 AS lecionero_id UNION ALL SELECT 321, @ekz2 UNION ALL SELECT 322, @ekz3) AS n
  JOIN ekzercoj z ON z.id = 37
  WHERE NOT EXISTS (SELECT 1 FROM ekzercoj x WHERE x.id = n.id);

-- 3. Questions : les articles changent d'exercice mais restent les mêmes questions,
-- donc les traductions déjà envoyées par les élèves leur restent liées.
UPDATE ekzerceroj SET ekzerco_id = CASE id WHEN 221 THEN 320 WHEN 222 THEN 321 WHEN 223 THEN 322 END
  WHERE ekzerco_id = 37 AND id IN (221, 222, 223);

-- 4. Vocabulaire : chaque mot est rattaché à l'exercice dont l'article l'utilise.
UPDATE vortoj SET lecionero_id = @ekz1 WHERE lecionero_id = 89 AND eo IN ('gvidi', 'Brazilo', 'Braziljo', 'senti', 'kresko');
UPDATE vortoj SET lecionero_id = @ekz3 WHERE lecionero_id = 89 AND eo IN ('samideano', 'gastigi', 'kutima', 'Usono', 'plie', 'aranĝo');

-- 5. Progression : les élèves qui ont déjà fait l'ancienne page 9.8 gardent les nouveaux exercices comme faits.
INSERT INTO personoj_lecioneroj (ekdato, dato, persono_id, lecionero_id)
  SELECT pl.ekdato, pl.dato, pl.persono_id, n.id FROM personoj_lecioneroj pl
  JOIN (SELECT @ekz1 AS id UNION ALL SELECT @ekz2 UNION ALL SELECT @ekz3) AS n
  WHERE pl.lecionero_id = 89
    AND NOT EXISTS (SELECT 1 FROM personoj_lecioneroj x WHERE x.persono_id = pl.persono_id AND x.lecionero_id = n.id);

-- Résumé attendu : 12 sections, un exercice (et un article) en 9.4, 9.6, 9.8 et 9.11,
-- 5 + 0 + 6 + 12 mots, et autant d'élèves pour les 4 exercices.
SELECT le.ordo, le.titolo, le.dauxro, z.id AS ekzerco, (SELECT GROUP_CONCAT(e.id) FROM ekzerceroj e WHERE e.ekzerco_id = z.id) AS demandoj,
    (SELECT count(*) FROM vortoj v WHERE v.lecionero_id = le.id) AS mots,
    (SELECT count(*) FROM personoj_lecioneroj pl WHERE pl.lecionero_id = le.id) AS eleves
  FROM lecioneroj le LEFT JOIN ekzercoj z ON z.lecionero_id = le.id
  WHERE le.leciono_id = @leciono ORDER BY le.ordo;
