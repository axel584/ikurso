-- Deux nouveaux types d'exercices (issue #1056), affichés sur une seule ligne :
-- - plenigu : chaque « * » de la question devient un champ de saisie dans la phrase ;
-- - elektlisto : chaque « [as/is/os] » de la question devient un menu déroulant.
-- La réponse enregistrée est la phrase complète. Aucun exercice n'est converti par ce script.
-- Peut être rejoué sans risque.
ALTER TABLE ekzercoj MODIFY typo enum('traduko-1','traduko-2','traduko-3','verkado-1','verkado-2','verkado-3','verkado-4','verkado-5','verkado-6','stelo-1','stelo-2','truoj-1','truoj-2','kompletigu','ordigu','elektu','plenigu','elektlisto') NOT NULL;
