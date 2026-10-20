-- Révision du vocabulaire : mots rares et expressions longues retirés.
-- Ce sont, avec ceux de sql/16-vocabulaire-revision.sql, les mots au taux d'erreur le plus élevé
-- d'avril à octobre 2026 (40 à 57 %), peu utiles à ce niveau. Les mots de base aussi souvent ratés
-- (tiu, ĉi tio, ĵaŭdo, sidiĝi, verŝajne…) sont gardés : leur difficulté est à travailler dans le cours.
-- eksiĝi et unuopa n'étaient déjà plus rattachés à aucune section.
--
-- Comme pour les retraits précédents, les mots ne sont rattachés à aucune section (lecionero_id = 0) :
-- ils ne sont plus proposés aux nouveaux élèves, ceux qui les révisent déjà les gardent.
-- Les mises à jour portent sur l'id ET le mot : le script vaut pour la prod (mêmes id) et peut être rejoué.
-- vortoj est en MyISAM (pas de transaction) : en prod, sauvegarder d'abord la table :
--   mysqldump -u <login> -p <base> vortoj > ~/avant-vocabulaire-retraits-$(date +%F).sql
SET NAMES utf8mb4;

UPDATE vortoj SET lecionero_id = 0 WHERE id = 424 AND eo = 'festeni';
UPDATE vortoj SET lecionero_id = 0 WHERE id = 308 AND eo = 'ridegi';
UPDATE vortoj SET lecionero_id = 0 WHERE id = 805 AND eo = 'kie ajn vi estas';
UPDATE vortoj SET lecionero_id = 0 WHERE id = 779 AND eo = 'venu ĉi tien !';
UPDATE vortoj SET lecionero_id = 0 WHERE id = 788 AND eo = 'io ajn';
UPDATE vortoj SET lecionero_id = 0 WHERE id = 821 AND eo = 'okupiĝi pri';
UPDATE vortoj SET lecionero_id = 0 WHERE id = 866 AND eo = 'kiel eble plej|kiom eble plej';
