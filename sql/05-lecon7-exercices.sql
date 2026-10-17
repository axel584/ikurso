-- Leçon 7 du cours élémentaire (CG) : la page « Exercices 1 et 2 » (environ 40 minutes)
-- est découpée en deux pages, et chaque question de l'exercice 1 ne porte plus que sur un mot.
-- À jouer après 04-lecon7-affixes-frequents.sql. Peut être rejoué sans risque.
SET NAMES utf8mb4;

-- 1. Sections : l'exercice 2 passe sur une nouvelle page 7.5, les sections suivantes sont décalées.
UPDATE lecioneroj SET ordo = ordo + 1 WHERE leciono_id = 68 AND ordo >= 5
  AND NOT EXISTS (SELECT 1 FROM (SELECT titolo FROM lecioneroj WHERE leciono_id = 68) AS t WHERE t.titolo = 'Exercice 2 : créer des mots');
UPDATE lecioneroj SET titolo = 'Exercice 1 : traduire en français', dauxro = 15, enhavo = '<p>
		L’espéranto est fascinant, n’est-ce pas ? Voici l’occasion de mettre à
		l’épreuve vos connaissances. Essayez de traduire en français les mots
		suivants construits à partir des affixes que nous venons de voir.
		Parfois vous comprendrez le sens en espéranto sans toutefois pouvoir
		trouver l’équivalent français exact&nbsp;: donnez alors votre propre
		explication.
		</p>

##EKZERCO:28##
' WHERE id = 70;
INSERT INTO lecioneroj (leciono_id, titolo, tipo, enhavo, ordo, unua, lasta, dauxro)
  SELECT 68, 'Exercice 2 : créer des mots', 'EKZERCARO', '<p>Vous trouverez aussi qu’il est amusant de créer ses propres mots espéranto à partir des radicaux&nbsp;:</p>

##EKZERCO:29##
', 5, 0, 0, 15
  FROM DUAL WHERE NOT EXISTS (SELECT 1 FROM lecioneroj WHERE leciono_id = 68 AND titolo = 'Exercice 2 : créer des mots');
SET @ekzerco2 = (SELECT id FROM lecioneroj WHERE leciono_id = 68 AND titolo = 'Exercice 2 : créer des mots');
UPDATE ekzercoj SET lecionero_id = @ekzerco2 WHERE id = 29;

-- 2. Exercice 1 : une question par mot. Les anciennes questions (plusieurs mots chacune) sont masquées ;
-- les réponses déjà envoyées par les élèves restent liées à elles.
UPDATE ekzerceroj SET forigita = 1 WHERE ekzerco_id = 28 AND kodo IN ('ekz07_27', 'ekz07_28', 'ekz07_29', 'ekz07_04', 'ekz07_05');
INSERT INTO ekzerceroj (ekzerco_id, kodo, numero, demando, respondmodelo, respondo, normaligita, bildo, forigita, korektebla)
SELECT * FROM (
  SELECT 28 AS ekzerco_id, 'ekz07_35' AS kodo, 1 AS numero, 'edzino («edzo» = époux)&nbsp;:' AS demando, NULL AS respondmodelo, 'épouse' AS respondo, 'épouse|une épouse|l\'épouse|femme|une femme|la femme|sa femme' AS normaligita, '' AS bildo, 0 AS forigita, 0 AS korektebla
  UNION ALL
  SELECT 28, 'ekz07_36', 2, 'edziĝi («edzo» = époux)&nbsp;:', NULL, 'se marier', 'se marier|épouser|marier', '', 0, 0
  UNION ALL
  SELECT 28, 'ekz07_37', 3, 'geedzoj («edzo» = époux)&nbsp;:', NULL, 'mari et femme', 'mari et femme|les époux|époux|époux et épouse|les mariés|couple|un couple|le couple|conjoints|les conjoints', '', 0, 0
  UNION ALL
  SELECT 28, 'ekz07_38', 4, 'reedziĝi («edzo» = époux)&nbsp;:', NULL, 'se remarier', 'se remarier|remarier', '', 0, 0
  UNION ALL
  SELECT 28, 'ekz07_39', 5, 'virino («viro» = homme)&nbsp;:', NULL, 'femme', 'femme|une femme|la femme', '', 0, 0
  UNION ALL
  SELECT 28, 'ekz07_40', 6, 'vireto («viro» = homme)&nbsp;:', NULL, 'petit homme', 'petit homme|un petit homme|bonhomme|un bonhomme', '', 0, 0
  UNION ALL
  SELECT 28, 'ekz07_41', 7, 'vireco («viro» = homme)&nbsp;:', NULL, 'virilité', 'virilité|la virilité|masculinité|la masculinité', '', 0, 0
  UNION ALL
  SELECT 28, 'ekz07_42', 8, 'vira («viro» = homme)&nbsp;:', NULL, 'masculin', 'masculin|viril|d\'homme', '', 0, 0
  UNION ALL
  SELECT 28, 'ekz07_43', 9, 'bovino («bovo» = bœuf)&nbsp;:', NULL, 'vache', 'vache|une vache|la vache', '', 0, 0
  UNION ALL
  SELECT 28, 'ekz07_44', 10, 'bovaro («bovo» = bœuf)&nbsp;:', NULL, 'troupeau de bovins', 'troupeau de bovins|troupeau de vaches|troupeau de bœufs|troupeau de boeufs|un troupeau de bovins|un troupeau de vaches|un troupeau de bœufs|un troupeau de boeufs|troupeau|un troupeau|bétail|le bétail', '', 0, 0
  UNION ALL
  SELECT 28, 'ekz07_45', 11, 'bovejo («bovo» = bœuf)&nbsp;:', NULL, 'étable', 'étable|une étable|l\'étable', '', 0, 0
  UNION ALL
  SELECT 28, 'ekz07_46', 12, 'bovaĵo («bovo» = bœuf)&nbsp;:', NULL, 'viande de bœuf', 'viande de bœuf|viande de boeuf|de la viande de bœuf|de la viande de boeuf|bœuf|boeuf|du bœuf|du boeuf', '', 0, 0
  UNION ALL
  SELECT 28, 'ekz07_47', 13, 'malvarma («varma» = chaud)&nbsp;:', NULL, 'froid', 'froid|froide', '', 0, 0
  UNION ALL
  SELECT 28, 'ekz07_48', 14, 'varmeco («varma» = chaud)&nbsp;:', NULL, 'chaleur', 'chaleur|la chaleur', '', 0, 0
  UNION ALL
  SELECT 28, 'ekz07_49', 15, 'varmeta («varma» = chaud)&nbsp;:', NULL, 'tiède', 'tiède', '', 0, 0
  UNION ALL
  SELECT 28, 'ekz07_50', 16, 'malvarmiĝi («varma» = chaud)&nbsp;:', NULL, 'se refroidir', 'se refroidir|refroidir|devenir froid|se rafraîchir|rafraîchir', '', 0, 0
  UNION ALL
  SELECT 28, 'ekz07_51', 17, 'ŝiparo («ŝipo» = bateau)&nbsp;:', NULL, 'flotte', 'flotte|une flotte|la flotte|flottille|une flottille', '', 0, 0
  UNION ALL
  SELECT 28, 'ekz07_52', 18, 'abelaro («abelo» = abeille)&nbsp;:', NULL, 'essaim', 'essaim|un essaim|l\'essaim', '', 0, 0
  UNION ALL
  SELECT 28, 'ekz07_53', 19, 'stelaro («stelo» = étoile)&nbsp;:', NULL, 'constellation', 'constellation|une constellation|la constellation', '', 0, 0
) AS novaj
WHERE NOT EXISTS (SELECT 1 FROM ekzerceroj WHERE ekzerco_id = 28 AND kodo = 'ekz07_35');

-- 3. Exercice 2 : numérotation de 1 à 13 sur sa propre page.
UPDATE ekzerceroj SET numero = CASE kodo
  WHEN 'ekz07_06' THEN 1
  WHEN 'ekz07_30' THEN 2
  WHEN 'ekz07_08' THEN 3
  WHEN 'ekz07_31' THEN 4
  WHEN 'ekz07_10' THEN 5
  WHEN 'ekz07_32' THEN 6
  WHEN 'ekz07_12' THEN 7
  WHEN 'ekz07_13' THEN 8
  WHEN 'ekz07_33' THEN 9
  WHEN 'ekz07_15' THEN 10
  WHEN 'ekz07_34' THEN 11
  WHEN 'ekz07_17' THEN 12
  WHEN 'ekz07_18' THEN 13
  END
WHERE ekzerco_id = 29 AND kodo IN ('ekz07_06', 'ekz07_30', 'ekz07_08', 'ekz07_31', 'ekz07_10', 'ekz07_32', 'ekz07_12', 'ekz07_13', 'ekz07_33', 'ekz07_15', 'ekz07_34', 'ekz07_17', 'ekz07_18');

-- 4. Progression : les élèves qui ont déjà fait l'ancienne page gardent les nouvelles pages comme faites
-- (sinon un avertissement « section non terminée » leur apparaîtrait).
INSERT INTO personoj_lecioneroj (ekdato, dato, persono_id, lecionero_id)
  SELECT pl.ekdato, pl.dato, pl.persono_id, @ekzerco2 FROM personoj_lecioneroj pl
  WHERE pl.lecionero_id = 70
    AND NOT EXISTS (SELECT 1 FROM personoj_lecioneroj x WHERE x.persono_id = pl.persono_id AND x.lecionero_id = @ekzerco2);
SET @suffixes3 = (SELECT id FROM lecioneroj WHERE leciono_id = 68 AND titolo = 'Suffixes : qualités, taille et possibilité');
INSERT INTO personoj_lecioneroj (ekdato, dato, persono_id, lecionero_id)
  SELECT pl.ekdato, pl.dato, pl.persono_id, @suffixes3 FROM personoj_lecioneroj pl
  WHERE pl.lecionero_id = 69
    AND NOT EXISTS (SELECT 1 FROM personoj_lecioneroj x WHERE x.persono_id = pl.persono_id AND x.lecionero_id = @suffixes3);
