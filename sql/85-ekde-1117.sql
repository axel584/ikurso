-- #1117 : ekde (à partir de, depuis), présent dans au moins quatre des six listes de mots fréquents et absent du cours élémentaire.
-- 6.6 « Les prépositions » (lecionero 55) : ajouté à la liste, entre da et ekster, et au vocabulaire à réviser.
-- 7.7 « Expression de l'heure » (lecionero 72) : exemple Mi laboras ekde la oka ĝis la kvina, avec sa prononciation
-- (fr/son/frazoj/mi-laboras-ekde.mp3).
-- Prononciation de ekde : Lingua Libre, Lepticed7, CC BY-SA 4.0. Script rejouable.
SET NAMES utf8mb4;
UPDATE lecioneroj SET enhavo = REPLACE(enhavo, '\t\t\t<tr><td class="eo">da</td><td>- de (indique la quantité)</td></tr>\n', '\t\t\t<tr><td class="eo">da</td><td>- de (indique la quantité)</td></tr>\n\t\t\t<tr><td class="eo">ekde</td><td>- à partir de, depuis (point de départ dans le temps&nbsp;: <span class="eo">ekde lundo</span>, <span class="eo">ekde la oka</span>)&nbsp;; plus précis que <span class="eo">de</span>, qui indique aussi l’origine ou la provenance</td></tr>\n')
WHERE id = 55 AND enhavo NOT LIKE '%\t\t\t<tr><td class="eo">ekde</td><td>- à partir de, depuis (point de départ dans le temps&nbsp;: <span class="eo">ekde lundo</span>, <span class="eo">ekde la oka</span>)&nbsp;; plus précis que <span class="eo">de</span>, qui indique aussi l’origine ou la provenance</td></tr>\n%';
UPDATE lecioneroj SET enhavo = REPLACE(enhavo, '\t\t\t<p class="col s11 offset-s1">= Je pars travailler à 7h du matin et je reviens à 8h du soir.</p>\n', '\t\t\t<p class="col s11 offset-s1">= Je pars travailler à 7h du matin et je reviens à 8h du soir.</p>\n\t\t\t<p class="col s12"><a href="fr/son/frazoj/mi-laboras-ekde.mp3" class="sm2_button"></a><span class="eo">Mi laboras ekde la oka ĝis la kvina.</span></p>\n\t\t\t<p class="col s11 offset-s1">= Je travaille de huit heures à cinq heures.</p>\n')
WHERE id = 72 AND enhavo NOT LIKE '%\t\t\t<p class="col s12"><a href="fr/son/frazoj/mi-laboras-ekde.mp3" class="sm2\\_button"></a><span class="eo">Mi laboras ekde la oka ĝis la kvina.</span></p>\n\t\t\t<p class="col s11 offset-s1">= Je travaille de huit heures à cinq heures.</p>\n%';
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'ekde', 'à partir de, depuis', 'préposition', 55 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'ekde' AND lecionero_id = 55);
