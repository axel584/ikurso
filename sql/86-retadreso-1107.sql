-- #1107 : l'élève change lui-même son adresse e-mail. La nouvelle adresse reste en attente
-- (personoj.retadreso ne change pas) jusqu'au clic sur le lien envoyé à la nouvelle adresse.
-- nova_retadreso_sxlosilo : clé aléatoire du lien (64 caractères hexadécimaux), valable 7 jours à partir de nova_retadreso_dato.
-- Script rejouable.
SET NAMES utf8mb4;
ALTER TABLE personoj ADD COLUMN IF NOT EXISTS `nova_retadreso` varchar(128) CHARACTER SET utf8 NULL AFTER `retadreso`;
ALTER TABLE personoj ADD COLUMN IF NOT EXISTS `nova_retadreso_sxlosilo` char(64) CHARACTER SET ascii NULL AFTER `nova_retadreso`;
ALTER TABLE personoj ADD COLUMN IF NOT EXISTS `nova_retadreso_dato` datetime NULL AFTER `nova_retadreso_sxlosilo`;
CREATE INDEX IF NOT EXISTS nova_retadreso_sxlosilo ON personoj (nova_retadreso_sxlosilo);
