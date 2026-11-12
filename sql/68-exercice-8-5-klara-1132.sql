-- Cours élémentaire, leçon 8, section 8.5 « Exercice 2 » réécrite (#1132) : les 8 traductions de phrases longues
-- (74 % de réponses marquées fausses, 6,5 % des élèves abandonnaient le cours sur cette page) sont remplacées par :
-- A. « Le message à Klara » : un message à trous, un verbe par phrase à mettre à la bonne forme
--    (-as, -is, -os, -us, -u), corrigé automatiquement ;
-- B. une production libre (trois conseils avec -u pour bien apprendre l'espéranto), corrigée par le correcteur.
-- Idée tirée des méthodes de FLE (message pour demander un service, conseils), texte original.
-- L'ancien exercice reste en base, ses questions masquées (forigita = 1) : les réponses déjà envoyées restent
-- visibles dans les leçons corrigées. Script rejouable : rien n'est ajouté deux fois.
-- Exercices suivants de la leçon renumérotés (8.6 → Exercice 4, 8.8 → 5, 8.9 → 6).
SET NAMES utf8mb4;

SET @le = (SELECT le.id FROM lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id
           WHERE l.kurso = 'CG' AND l.numero = 8 AND le.ordo = 5);
SET @malnova = (SELECT id FROM ekzercoj WHERE lecionero_id = @le AND typo = 'traduko-1'
                AND komando = 'Traduisez en espéranto en utilisant la terminaison verbale appropriée.');

-- A. Le message à Klara (corrigé automatiquement)
SET @a_nova = (SELECT COUNT(*) = 0 FROM ekzercoj WHERE lecionero_id = @le AND typo = 'plenigu');
INSERT INTO ekzercoj (komando, lecionero_id, komando_detalo, ekzemplo, typo, x2u, korektebla)
SELECT 'Vous partez une semaine et votre amie Klara va garder votre maison. Complétez votre message&nbsp;: mettez le verbe entre parenthèses à la bonne forme (<b>-as</b>, <b>-is</b>, <b>-os</b>, <b>-us</b> ou <b>-u</b>).',
       @le, '<span class="eo">Kara Klara,</span>', 'Mi ______ (ŝati) mian katon.<br/>→ Mi ŝatas mian katon.', 'plenigu', 1, 1
FROM DUAL WHERE @a_nova = 1;
SET @a = (SELECT id FROM ekzercoj WHERE lecionero_id = @le AND typo = 'plenigu');
INSERT INTO ekzerceroj (ekzerco_id, numero, demando, respondmodelo, respondo, normaligita, forigita, korektebla)
SELECT @a, 1, 'Dankon! Hieraŭ mi * (aĉeti) panon kaj lakton por vi.', NULL, 'Dankon! Hieraŭ mi aĉetis (aĉeti) panon kaj lakton por vi.', 'dankon hieraux mi acxetis acxeti panon kaj lakton por vi', 0, 0 FROM DUAL WHERE @a_nova = 1;
INSERT INTO ekzerceroj (ekzerco_id, numero, demando, respondmodelo, respondo, normaligita, forigita, korektebla)
SELECT @a, 2, 'Morgaŭ mi * (vojaĝi) al Parizo.', NULL, 'Morgaŭ mi vojaĝos (vojaĝi) al Parizo.', 'morgaux mi vojagxos vojagxi al parizo|morgaux mi vojagxas vojagxi al parizo', 0, 0 FROM DUAL WHERE @a_nova = 1;
INSERT INTO ekzerceroj (ekzerco_id, numero, demando, respondmodelo, respondo, normaligita, forigita, korektebla)
SELECT @a, 3, 'Mi * (reveni) dimanĉon vespere.', NULL, 'Mi revenos (reveni) dimanĉon vespere.', 'mi revenos reveni dimancxon vespere', 0, 0 FROM DUAL WHERE @a_nova = 1;
INSERT INTO ekzerceroj (ekzerco_id, numero, demando, respondmodelo, respondo, normaligita, forigita, korektebla)
SELECT @a, 4, 'La ŝlosilo * (esti) sub la floro, apud la pordo.', NULL, 'La ŝlosilo estas (esti) sub la floro, apud la pordo.', 'la sxlosilo estas esti sub la floro apud la pordo', 0, 0 FROM DUAL WHERE @a_nova = 1;
INSERT INTO ekzerceroj (ekzerco_id, numero, demando, respondmodelo, respondo, normaligita, forigita, korektebla)
SELECT @a, 5, '* (doni) lakton al la kato matene kaj vespere.', NULL, 'Donu (doni) lakton al la kato matene kaj vespere.', 'donu doni lakton al la kato matene kaj vespere', 0, 0 FROM DUAL WHERE @a_nova = 1;
INSERT INTO ekzerceroj (ekzerco_id, numero, demando, respondmodelo, respondo, normaligita, forigita, korektebla)
SELECT @a, 6, 'Ne * (forgesi) ŝlosi la pordon!', NULL, 'Ne forgesu (forgesi) ŝlosi la pordon!', 'ne forgesu forgesi sxlosi la pordon', 0, 0 FROM DUAL WHERE @a_nova = 1;
INSERT INTO ekzerceroj (ekzerco_id, numero, demando, respondmodelo, respondo, normaligita, forigita, korektebla)
SELECT @a, 7, 'Mi volas, ke la kato ne * (dormi) sur mia lito.', NULL, 'Mi volas, ke la kato ne dormu (dormi) sur mia lito.', 'mi volas ke la kato ne dormu dormi sur mia lito', 0, 0 FROM DUAL WHERE @a_nova = 1;
INSERT INTO ekzerceroj (ekzerco_id, numero, demando, respondmodelo, respondo, normaligita, forigita, korektebla)
SELECT @a, 8, 'Se mi ne devus vojaĝi, mi * (resti) hejme kun vi.', NULL, 'Se mi ne devus vojaĝi, mi restus (resti) hejme kun vi.', 'se mi ne devus vojagxi mi restus resti hejme kun vi', 0, 0 FROM DUAL WHERE @a_nova = 1;
INSERT INTO ekzerceroj (ekzerco_id, numero, demando, respondmodelo, respondo, normaligita, forigita, korektebla)
SELECT @a, 9, 'Kiam mi revenos, ni * (trinki) kafon en la ĝardeno.', NULL, 'Kiam mi revenos, ni trinkos (trinki) kafon en la ĝardeno.', 'kiam mi revenos ni trinkos trinki kafon en la gxardeno', 0, 0 FROM DUAL WHERE @a_nova = 1;

-- B. À vous ! (production libre, corrigée par le correcteur)
SET @b_nova = (SELECT COUNT(*) = 0 FROM ekzercoj WHERE lecionero_id = @le AND typo = 'verkado-2');
INSERT INTO ekzercoj (komando, lecionero_id, komando_detalo, ekzemplo, typo, x2u, korektebla)
SELECT 'À vous&nbsp;! Une amie commence l’espéranto. Écrivez en espéranto&nbsp;; votre correcteur corrigera votre réponse.',
       @le, '', '', 'verkado-2', 1, 0
FROM DUAL WHERE @b_nova = 1;
SET @b = (SELECT id FROM ekzercoj WHERE lecionero_id = @le AND typo = 'verkado-2');
INSERT INTO ekzerceroj (ekzerco_id, numero, demando, respondmodelo, respondo, normaligita, forigita, korektebla)
SELECT @b, 1, 'Donnez-lui trois conseils pour bien apprendre (avec la terminaison <b>-u</b>). Par exemple&nbsp;: <span class="eo">Lernu novajn vortojn ĉiun tagon.</span>', NULL,
       'Legu kaj skribu multe. Parolu kun aliaj esperantistoj. Ne forgesu ripeti la vortojn!', NULL, 0, 0
FROM DUAL WHERE @b_nova = 1;

-- la page affiche les deux nouveaux exercices ; l'ancien est masqué
UPDATE lecioneroj SET enhavo = CONCAT('##EKZERCO:', @a, '##\n##EKZERCO:', @b, '##') WHERE id = @le AND @a IS NOT NULL AND @b IS NOT NULL;
UPDATE ekzerceroj SET forigita = 1 WHERE ekzerco_id = @malnova AND @a IS NOT NULL AND @b IS NOT NULL;
-- temps estimé de la section (l'ancien exercice : 40 minutes ; temps médian mesuré : 21 minutes)
UPDATE lecioneroj SET dauxro = 15 WHERE id = @le AND @a IS NOT NULL AND @b IS NOT NULL;

-- la section 8.5 contient maintenant deux exercices : renumérotation des exercices suivants de la leçon 8
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id
SET le.titolo = CASE le.ordo WHEN 5 THEN 'Exercices 2 et 3' WHEN 6 THEN 'Exercice 4' WHEN 8 THEN 'Exercice 5' WHEN 9 THEN 'Exercice 6' END
WHERE l.kurso = 'CG' AND l.numero = 8
  AND ((le.ordo = 5 AND le.titolo = 'Exercice 2') OR (le.ordo = 6 AND le.titolo = 'Exercice 3')
    OR (le.ordo = 8 AND le.titolo = 'Exercice 4') OR (le.ordo = 9 AND le.titolo = 'Exercice 5'));
