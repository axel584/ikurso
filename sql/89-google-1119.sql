-- Inscription et connexion avec un compte Google (#119), voir api/GoogleAPI.php.
-- google_id : identifiant stable du compte Google (« sub » du jeton), qui ne change pas avec l'adresse Gmail.
-- enirnomo_elektota : 1 tant que l'élève inscrit par Google n'a pas choisi son identifiant ; enirnomo vaut
--   alors un identifiant provisoire (google_…) et l'écran de choix (elektiIdentigilon.php) s'affiche à la connexion.
-- Script rejouable.
SET NAMES utf8mb4;

SET @kolumno := (SELECT COUNT(*) FROM information_schema.COLUMNS
    WHERE TABLE_SCHEMA = DATABASE() AND TABLE_NAME = 'personoj' AND COLUMN_NAME = 'google_id');
SET @sql := IF(@kolumno = 0,
    'ALTER TABLE personoj ADD COLUMN google_id VARCHAR(64) CHARACTER SET ascii NULL DEFAULT NULL, ADD UNIQUE KEY google_id (google_id)',
    'SELECT 1');
PREPARE ordono FROM @sql;
EXECUTE ordono;
DEALLOCATE PREPARE ordono;

SET @kolumno := (SELECT COUNT(*) FROM information_schema.COLUMNS
    WHERE TABLE_SCHEMA = DATABASE() AND TABLE_NAME = 'personoj' AND COLUMN_NAME = 'enirnomo_elektota');
SET @sql := IF(@kolumno = 0,
    'ALTER TABLE personoj ADD COLUMN enirnomo_elektota TINYINT(1) NOT NULL DEFAULT 0',
    'SELECT 1');
PREPARE ordono FROM @sql;
EXECUTE ordono;
DEALLOCATE PREPARE ordono;
