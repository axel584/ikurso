-- Correction par IA (#1130) : compte du correcteur IA et file des leçons à corriger.
-- Le compte ne peut pas se connecter (mot de passe impossible), n'a pas d'adresse mail et n'est pas dans
-- korektebla_kurso : il n'est jamais attribué automatiquement, seulement à la demande (administration, puis choix de l'élève, #627).
-- Prénom « IA » : l'application affiche « Correcteur : IA ».
SET NAMES utf8mb4;

INSERT INTO personoj (ekdato, enirnomo, personnomo, familinomo, retadreso, rajtoj, aktivigita, pasvorto_md5)
SELECT NOW(), 'ia-korektanto', 'IA', '', '', 'K', 1, '!'
FROM DUAL WHERE NOT EXISTS (SELECT 1 FROM personoj WHERE enirnomo = 'ia-korektanto');

-- une ligne par leçon envoyée au correcteur IA ; stato : atendas (à corriger), farita (corrigée),
-- malsukcesis (échec après 3 essais ou cours non pris en charge : administrateurs prévenus, relance par
-- cron/ia_korektado.php --relancer), transdonita (un administrateur a attribué un autre correcteur), malplena (aucune réponse). kosto en dollars, essais ratés compris.
CREATE TABLE IF NOT EXISTS `ia_korektadoj` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `persono_id` int(11) NOT NULL,
  `leciono_id` int(11) NOT NULL,
  `stato` varchar(12) NOT NULL DEFAULT 'atendas',
  `provoj` int(11) NOT NULL DEFAULT 0,
  `modelo` varchar(100) DEFAULT NULL,
  `provizanto` varchar(100) DEFAULT NULL,
  `kosto` decimal(10,6) DEFAULT NULL,
  `tokens_eniro` int(11) DEFAULT NULL,
  `tokens_eliro` int(11) DEFAULT NULL,
  `sekundoj` decimal(6,1) DEFAULT NULL,
  `eraro` text,
  `kreita` datetime NOT NULL,
  `lasta_provo` datetime DEFAULT NULL,
  `farita` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `persono_leciono` (`persono_id`, `leciono_id`),
  KEY `stato` (`stato`),
  KEY `lasta_provo` (`lasta_provo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
