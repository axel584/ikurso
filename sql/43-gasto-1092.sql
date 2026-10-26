-- #1092 : mode invité. Un visiteur sans compte qui fait les exercices reçoit une ligne personoj
-- de droit G (gasto), sans e-mail ni mot de passe, qui devient son compte s'il s'inscrit.
-- Peut être rejoué sans risque.
ALTER TABLE personoj MODIFY `rajtoj` enum('P','S','K','A','I','G') CHARACTER SET utf8 NOT NULL DEFAULT 'P';

INSERT IGNORE INTO `rajtoj` (`id`, `kodo`, `nomo`) VALUES (6, 'G', '6. Invité (sans compte)');
