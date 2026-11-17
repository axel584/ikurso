-- Réponses aux QCM des pages de cours, pour savoir quelles questions sont les plus difficiles.
-- Une ligne par clic sur une proposition (site et application), sans l'élève : statistiques anonymes.
-- demando : rang de la question dans le QCM de la page (1, 2…) ; propono : rang de la proposition choisie (1, 2…).
-- spuro : md5 de la question telle qu'elle était au moment de la réponse (texte, image, propositions, réponse
--   attendue) : une question corrigée dans la page repart de zéro dans les statistiques.
-- provo : 1 pour le premier essai sur la question, 2 pour le deuxième…
-- fonto : 'R' pour le site (retejo), 'A' pour l'application.
-- Script rejouable.
SET NAMES utf8mb4;
CREATE TABLE IF NOT EXISTS qcm_respondoj (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lecionero_id` int(11) NOT NULL,
  `demando` tinyint unsigned NOT NULL,
  `spuro` char(32) CHARACTER SET ascii NOT NULL,
  `propono` tinyint unsigned NOT NULL,
  `gxusta` tinyint(1) NOT NULL,
  `provo` tinyint unsigned NOT NULL,
  `fonto` char(1) CHARACTER SET ascii NOT NULL,
  `dato` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (id),
  KEY demando (lecionero_id, demando, spuro)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
