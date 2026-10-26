-- #1093 : index pour les requêtes par élève et par question. Sans eux, chaque requête lit toute la table
-- et, en MyISAM, un UPDATE ou un DELETE la bloque pour tout le monde (370 ms sur respondoj, 2,3 s sur
-- personoj_vortoj_respondoj avec les volumes de prod). La création bloque les tables quelques secondes.
-- Peut être rejoué sans risque.
ALTER TABLE respondoj ADD INDEX IF NOT EXISTS persono_ekzercero (persono_id, ekzercero_id);
ALTER TABLE respondoj ADD INDEX IF NOT EXISTS ekzercero (ekzercero_id);
ALTER TABLE personoj_vortoj_respondoj ADD INDEX IF NOT EXISTS persono_index (persono_id);
