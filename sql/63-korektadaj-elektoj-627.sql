-- Choix du mode de correction à la fin de la première leçon d'un cours (#627) : un correcteur bénévole,
-- le même correcteur qu'au cours précédent, un correcteur que l'élève connaît, pas de correcteur, ou la correction par IA.
-- Une ligne par élève et par cours. elekto : volontulo, sama, konato, sen, ia.
-- teksto : ce que l'élève a tapé pour « un correcteur que je connais » (prénom, identifiant ou adresse e-mail).
-- atendas = 1 : correcteur connu pas encore retrouvé, un administrateur fait le lien (administri.php).
SET NAMES utf8mb4;

CREATE TABLE IF NOT EXISTS `korektadaj_elektoj` (
  `persono_id` int(11) NOT NULL,
  `kurso` varchar(10) NOT NULL,
  `elekto` varchar(10) NOT NULL,
  `teksto` varchar(255) DEFAULT NULL,
  `atendas` tinyint(1) NOT NULL DEFAULT 0,
  `dato` datetime NOT NULL,
  PRIMARY KEY (`persono_id`, `kurso`),
  KEY `atendas` (`atendas`),
  KEY `dato` (`dato`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
