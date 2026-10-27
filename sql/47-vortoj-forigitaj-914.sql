-- #914 : l'élève peut retirer un mot de sa révision du vocabulaire (poubelle dans le lexique et dans le
-- récapitulatif des erreurs de la révision), puis l'y remettre. Un mot retiré garde son compteur.
-- Un mot pas encore vu peut aussi être retiré : sa ligne est créée avec forigita = 1 et n'est plus ajoutée.
-- Peut être rejoué sans risque.
ALTER TABLE personoj_vortoj ADD COLUMN IF NOT EXISTS `forigita` tinyint(1) NOT NULL DEFAULT '0';
