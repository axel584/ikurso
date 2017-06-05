SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";

CREATE TABLE ekzerceroj (
  `id` int(11) NOT NULL,
  `ekzerco_id` int(11) NOT NULL,
  `kodo` varchar(10) NOT NULL,
  `numero` int(11) NOT NULL,
  `demando` text NOT NULL,
  `respondo` text NOT NULL,
  `bildo` varchar(64) NOT NULL,
  `forigita` tinyint(1) NOT NULL DEFAULT '0',
  `korektebla` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE ekzercoj (
  `id` int(11) NOT NULL,
  `komando` text NOT NULL,
  `lecionero_id` int(11) NOT NULL,
  `komando_detalo` text NOT NULL,
  `ekzemplo` int(11) NOT NULL,
  `typo` enum('traduko') NOT NULL,
  `x2u` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE eraraj_lecionoj (
  `id` int(11) NOT NULL,
  `persono_id` int(11) DEFAULT NULL,
  `enirnomo` varchar(32) DEFAULT NULL,
  `dato` date DEFAULT NULL,
  `videbla` enum('J','N') DEFAULT 'J',
  `subjekto` varchar(128) DEFAULT NULL,
  `fonto` mediumtext,
  `leciono` int(11) DEFAULT NULL,
  `kurso` varchar(2) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE komentoj (
  `id` int(11) NOT NULL,
  `studanto` int(11) NOT NULL DEFAULT '0',
  `korektanto` int(11) NOT NULL DEFAULT '0',
  `dato` date NOT NULL DEFAULT '0000-00-00',
  `teksto` text CHARACTER SET utf8
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE korektebla_kurso (
  `korektanto` int(11) NOT NULL DEFAULT '0',
  `kurso` char(2) CHARACTER SET latin1 NOT NULL DEFAULT '',
  `kiom_lernantoj` int(11) NOT NULL DEFAULT '3'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE kursoj (
  `id` int(11) NOT NULL,
  `kodo` char(2) CHARACTER SET latin1 NOT NULL DEFAULT '',
  `nomo` varchar(64) CHARACTER SET latin1 NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO kursoj (id, kodo, nomo) VALUES(1, 'KE', 'Logiciel "Kurso de Esperanto"');
INSERT INTO kursoj (id, kodo, nomo) VALUES(6, 'CG', 'DLEK : Cours en 10 le&#231;ons');
INSERT INTO kursoj (id, kodo, nomo) VALUES(7, 'GR', 'Gerda Malaperis');
INSERT INTO kursoj (id, kodo, nomo) VALUES(10, '3N', 'Cours de 3ème niveau');

CREATE TABLE landoj (
  `id` int(11) NOT NULL,
  `kodo` varchar(2) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `nomo` varchar(64) CHARACTER SET utf8 NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO landoj (id, kodo, nomo) VALUES(1, 'FR', 'France');
INSERT INTO landoj (id, kodo, nomo) VALUES(3, 'BE', 'Belgique');
INSERT INTO landoj (id, kodo, nomo) VALUES(4, 'DE', 'Allemagne');
INSERT INTO landoj (id, kodo, nomo) VALUES(6, 'SP', 'Espagne');
INSERT INTO landoj (id, kodo, nomo) VALUES(7, 'CA', 'Canada');
INSERT INTO landoj (id, kodo, nomo) VALUES(11, 'CH', 'Suisse');
INSERT INTO landoj (id, kodo, nomo) VALUES(12, 'US', 'USA');
INSERT INTO landoj (id, kodo, nomo) VALUES(13, 'IT', 'Italie');
INSERT INTO landoj (id, kodo, nomo) VALUES(14, 'MX', 'Mexique');
INSERT INTO landoj (id, kodo, nomo) VALUES(15, 'BR', 'Br&eacute;sil');
INSERT INTO landoj (id, kodo, nomo) VALUES(16, 'LU', 'Luxembourg');
INSERT INTO landoj (id, kodo, nomo) VALUES(17, 'PL', 'Pologne');
INSERT INTO landoj (id, kodo, nomo) VALUES(18, 'IN', 'Indes');
INSERT INTO landoj (id, kodo, nomo) VALUES(19, 'XX', '__Autre__');
INSERT INTO landoj (id, kodo, nomo) VALUES(38, 'DO', 'R&eacute;publique Dominicaine');
INSERT INTO landoj (id, kodo, nomo) VALUES(39, 'CR', 'Costa Rica');
INSERT INTO landoj (id, kodo, nomo) VALUES(40, 'DZ', 'Alg&eacute;rie');
INSERT INTO landoj (id, kodo, nomo) VALUES(41, 'TN', 'Tunisie');
INSERT INTO landoj (id, kodo, nomo) VALUES(42, 'DK', 'Danemark');
INSERT INTO landoj (id, kodo, nomo) VALUES(43, 'PT', 'Portugal');
INSERT INTO landoj (id, kodo, nomo) VALUES(44, 'AO', 'Angola');
INSERT INTO landoj (id, kodo, nomo) VALUES(362, 'NZ', 'Nouvelle-Z&eacute;lande');
INSERT INTO landoj (id, kodo, nomo) VALUES(46, 'TZ', 'Tanzanie');
INSERT INTO landoj (id, kodo, nomo) VALUES(47, 'SN', 'S&eacute;n&eacute;gal');
INSERT INTO landoj (id, kodo, nomo) VALUES(60, 'JP', 'Japon');
INSERT INTO landoj (id, kodo, nomo) VALUES(61, 'GB', 'Grande Bretagne');
INSERT INTO landoj (id, kodo, nomo) VALUES(74, 'MA', 'Maroc');
INSERT INTO landoj (id, kodo, nomo) VALUES(75, 'ML', 'Mali');
INSERT INTO landoj (id, kodo, nomo) VALUES(76, 'BJ', 'B&eacute;nin');
INSERT INTO landoj (id, kodo, nomo) VALUES(372, 'TR', 'Turquie');
INSERT INTO landoj (id, kodo, nomo) VALUES(78, 'CI', 'C&ocirc;te d\'Ivoire');
INSERT INTO landoj (id, kodo, nomo) VALUES(79, 'HU', 'Hongrie');
INSERT INTO landoj (id, kodo, nomo) VALUES(80, 'BG', 'Bulgarie');
INSERT INTO landoj (id, kodo, nomo) VALUES(81, 'CD', 'Congo (R&eacute;p.D&eacute;m.)');
INSERT INTO landoj (id, kodo, nomo) VALUES(82, 'HT', 'Ha&iuml;ti');
INSERT INTO landoj (id, kodo, nomo) VALUES(83, 'IL', 'Isra&euml;l');
INSERT INTO landoj (id, kodo, nomo) VALUES(84, 'TG', 'Togo');
INSERT INTO landoj (id, kodo, nomo) VALUES(93, 'TW', 'Ta&iuml;wan');
INSERT INTO landoj (id, kodo, nomo) VALUES(94, 'KM', 'Comores');
INSERT INTO landoj (id, kodo, nomo) VALUES(96, 'RW', 'Rwanda');
INSERT INTO landoj (id, kodo, nomo) VALUES(98, 'BI', 'Burundi');
INSERT INTO landoj (id, kodo, nomo) VALUES(100, 'NL', 'Pays-Bas');
INSERT INTO landoj (id, kodo, nomo) VALUES(102, 'VN', 'Vietnam');
INSERT INTO landoj (id, kodo, nomo) VALUES(104, 'AD', 'Andorre');
INSERT INTO landoj (id, kodo, nomo) VALUES(106, 'MG', 'Madagascar');
INSERT INTO landoj (id, kodo, nomo) VALUES(108, 'BF', 'Burkina-Faso');
INSERT INTO landoj (id, kodo, nomo) VALUES(110, 'RO', 'Roumanie');
INSERT INTO landoj (id, kodo, nomo) VALUES(112, 'EE', 'Estonie');
INSERT INTO landoj (id, kodo, nomo) VALUES(114, 'CN', 'Chine');
INSERT INTO landoj (id, kodo, nomo) VALUES(353, 'GT', 'Guatemala');
INSERT INTO landoj (id, kodo, nomo) VALUES(354, 'CZ', 'R&eacute;publique Tch&egrave;que');
INSERT INTO landoj (id, kodo, nomo) VALUES(355, 'TD', 'Tchad');
INSERT INTO landoj (id, kodo, nomo) VALUES(356, 'KW', 'Kowe&iuml;t');
INSERT INTO landoj (id, kodo, nomo) VALUES(357, 'GN', 'R&eacute;p. de Guin&eacute;e');
INSERT INTO landoj (id, kodo, nomo) VALUES(358, 'NE', 'Niger');
INSERT INTO landoj (id, kodo, nomo) VALUES(359, 'RU', 'Russie');
INSERT INTO landoj (id, kodo, nomo) VALUES(360, 'CF', 'R&eacute;p. Centrafricaine');
INSERT INTO landoj (id, kodo, nomo) VALUES(361, 'GH', 'Ghana');
INSERT INTO landoj (id, kodo, nomo) VALUES(363, 'CM', 'Cameroun');
INSERT INTO landoj (id, kodo, nomo) VALUES(364, 'CG', 'Congo (Brazzaville)');
INSERT INTO landoj (id, kodo, nomo) VALUES(365, 'NC', 'Nouvelle-Cal&eacute;donie');
INSERT INTO landoj (id, kodo, nomo) VALUES(366, 'PF', 'Polyn&eacute;sie fran&ccedil;aise');
INSERT INTO landoj (id, kodo, nomo) VALUES(367, 'GA', 'Gabon');
INSERT INTO landoj (id, kodo, nomo) VALUES(368, 'VE', 'V&eacute;n&eacute;zuela');
INSERT INTO landoj (id, kodo, nomo) VALUES(369, 'PE', 'P&eacute;rou');
INSERT INTO landoj (id, kodo, nomo) VALUES(370, 'IR', 'Iran');
INSERT INTO landoj (id, kodo, nomo) VALUES(371, 'MU', 'Maurice');
INSERT INTO landoj (id, kodo, nomo) VALUES(373, 'IS', 'Islande');

CREATE TABLE lecioneroj (
  `id` int(11) NOT NULL,
  `leciono_id` int(11) DEFAULT NULL,
  `titolo` text,
  `tipo` enum('VORTARO','QCM','TEKSTO','EKZERCARO') DEFAULT NULL,
  `enhavo` text,
  `ordo` int(11) DEFAULT NULL,
  `unua` tinyint(1) NOT NULL DEFAULT '0',
  `lasta` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(1, 59, 'Indications sur la prononciation', 'TEKSTO', NULL, 1, 1, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(2, 59, 'Les terminaisons usuelles', 'TEKSTO', NULL, 2, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(3, 59, 'Vocabulaire', 'VORTARO', NULL, 3, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(4, 59, 'Un peu de grammaire...', 'TEKSTO', NULL, 4, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(5, 59, 'Exemples de phrases', 'TEKSTO', NULL, 5, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(6, 59, 'Exercice 1', 'EKZERCARO', NULL, 6, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(7, 59, 'QCM', 'QCM', NULL, 12, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(8, 59, 'Épilogue et envoi des exercices', 'TEKSTO', NULL, 13, 0, 1);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(9, 60, 'Le féminin des noms : suffixe <i>-in</i>', 'TEKSTO', NULL, 2, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(10, 60, 'Terminaison <i>-n</i> du complément d’objet direct', 'TEKSTO', NULL, 3, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(11, 60, 'Autres compléments', 'TEKSTO', NULL, 4, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(12, 60, 'Préfixe <i>mal-</i>', 'TEKSTO', NULL, 6, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(13, 60, 'Forme négative', 'TEKSTO', NULL, 7, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(14, 60, 'Vocabulaire', 'VORTARO', NULL, 8, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(15, 60, 'Exercice 2', 'EKZERCARO', NULL, 9, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(16, 60, 'Exercice 3', 'EKZERCARO', NULL, 10, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(17, 60, 'Exercice 4', 'EKZERCARO', NULL, 11, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(18, 60, 'QCM', 'QCM', NULL, 13, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(19, 60, 'Épilogue et envoi des exercices', 'TEKSTO', NULL, 14, 0, 1);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(20, 61, 'Ordre des mots', 'TEKSTO', NULL, 1, 1, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(21, 61, 'Exercice 1', 'EKZERCARO', NULL, 2, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(22, 61, 'Vocabulaire', 'VORTARO', NULL, 3, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(23, 61, 'Proverbe', 'TEKSTO', NULL, 4, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(24, 61, 'Adverbes en <i>-e</i>', 'TEKSTO', NULL, 5, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(25, 61, 'Formation des syllabes', 'TEKSTO', NULL, 6, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(26, 61, 'Exercice 2', 'EKZERCARO', NULL, 7, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(27, 61, 'Les nombres cardinaux', 'TEKSTO', NULL, 8, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(28, 61, 'Exercice 3', 'EKZERCARO', NULL, 9, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(29, 61, 'Verbes intransitifs et transitifs', 'TEKSTO', NULL, 10, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(30, 61, 'Exercice 4', 'EKZERCARO', NULL, 11, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(31, 61, 'Épilogue et envoi des exercices', 'TEKSTO', NULL, 14, 0, 1);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(32, 62, 'La forme interrogative', 'TEKSTO', NULL, 1, 1, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(33, 62, 'Exercice 1', 'EKZERCARO', NULL, 2, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(34, 62, 'L’alphabet (rappel)', 'TEKSTO', NULL, 3, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(37, 62, 'Les diphtongues', 'TEKSTO', NULL, 4, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(38, 62, 'Vocabulaire', 'VORTARO', NULL, 5, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(39, 62, 'Récit', 'TEKSTO', NULL, 10, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(40, 62, 'Exercice 4 : pratique du vocabulaire', 'EKZERCARO', NULL, 11, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(41, 62, 'Exercices 5 et 6', 'EKZERCARO', NULL, 12, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(42, 62, 'Épilogue et envoi des exercices', 'TEKSTO', NULL, 14, 0, 1);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(43, 63, 'Éléments pour converser', 'TEKSTO', NULL, 1, 1, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(44, 63, 'Les corrélatifs', 'TEKSTO', NULL, 2, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(45, 63, 'Un peu de pratique', 'TEKSTO', NULL, 3, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(46, 63, 'La flexion des corrélatifs', 'TEKSTO', NULL, 4, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(47, 63, 'Proverbe', 'TEKSTO', NULL, 5, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(48, 63, 'Exercices 1 et 2', 'EKZERCARO', NULL, 6, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(49, 63, 'Épilogue et envoi des exercices', 'TEKSTO', NULL, 7, 0, 1);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(50, 67, 'Révision des terminaisons', 'TEKSTO', NULL, 1, 1, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(51, 67, 'Comment poser des questions', 'TEKSTO', NULL, 2, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(52, 67, 'Rappel sur la prononciation', 'TEKSTO', NULL, 3, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(53, 67, 'Révision des corrélatifs', 'EKZERCARO', NULL, 4, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(54, 67, 'Proverbe', 'TEKSTO', NULL, 5, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(55, 67, 'Les prépositions', 'TEKSTO', NULL, 6, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(56, 67, 'Premier récit et vocabulaire', 'TEKSTO', NULL, 8, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(57, 67, 'Exercice 1', 'EKZERCARO', NULL, 7, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(58, 67, 'Second récit et vocabulaire', 'TEKSTO', NULL, 9, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(59, 67, 'Exercice 2', 'EKZERCARO', NULL, 10, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(60, 67, 'Traduction de "il y a"', 'TEKSTO', NULL, 11, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(61, 67, 'Exercice 3', 'EKZERCARO', NULL, 12, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(62, 67, 'Complément d’objet indirect', 'TEKSTO', NULL, 13, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(63, 67, 'L’accusatif peut remplacer certaines prépositions', 'TEKSTO', NULL, 14, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(64, 67, 'Exercice 4', 'EKZERCARO', NULL, 15, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(65, 67, 'Adverbes de lieu indiquant le mouvement', 'TEKSTO', NULL, 16, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(66, 67, 'Exercice 5', 'EKZERCARO', NULL, 17, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(67, 67, 'Épilogue et envoi des exercices', 'TEKSTO', NULL, 18, 0, 1);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(68, 68, 'Préfixes', 'TEKSTO', NULL, 1, 1, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(69, 68, 'Suffixes', 'TEKSTO', NULL, 2, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(70, 68, 'Exercices', 'EKZERCARO', NULL, 3, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(71, 68, 'Proverbes', 'TEKSTO', NULL, 4, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(72, 68, 'Expression de l’heure', 'TEKSTO', NULL, 5, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(73, 68, 'Épilogue et envoi des exercices', 'TEKSTO', NULL, 8, 0, 1);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(74, 69, 'Le reste de la conjugaison...', 'TEKSTO', NULL, 1, 1, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(75, 69, 'Proverbes', 'TEKSTO', NULL, 2, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(76, 69, 'Exercice 1', 'EKZERCARO', NULL, 3, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(77, 69, 'Exercice 2', 'EKZERCARO', NULL, 4, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(78, 69, 'Pronom personnel et adjectif possessif réfléchis', 'TEKSTO', NULL, 5, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(79, 69, 'Exercice 3', 'EKZERCARO', NULL, 6, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(80, 69, 'Retour sur l’accent tonique', 'TEKSTO', NULL, 7, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(81, 69, 'Épilogue et envoi des exercices', 'TEKSTO', NULL, 8, 0, 1);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(82, 70, 'Un air connu...', 'TEKSTO', NULL, 1, 1, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(83, 70, 'L’élision', 'TEKSTO', NULL, 2, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(84, 70, 'Quelques adverbes primaires en <i>-aŭ</i>', 'TEKSTO', NULL, 3, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(85, 70, 'Divers mots en <i>-aŭ</i>', 'TEKSTO', NULL, 4, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(86, 70, 'Autres mots invariables', 'TEKSTO', NULL, 5, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(87, 70, 'Proverbes', 'TEKSTO', NULL, 6, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(88, 70, 'Des extraits de la presse espérantiste', 'TEKSTO', NULL, 7, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(89, 70, 'Exercice', 'EKZERCARO', NULL, 8, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(90, 71, 'Examen', 'EKZERCARO', NULL, 1, 1, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(91, 64, 'Rakonto', 'TEKSTO', NULL, 1, 1, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(92, 64, 'Klarigoj', 'TEKSTO', NULL, 2, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(93, 64, 'Vortlisto', 'VORTARO', NULL, 3, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(94, 64, 'Ekzercoj', 'EKZERCARO', NULL, 4, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(95, 64, 'Lasu min…', 'TEKSTO', NULL, 5, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(96, 65, 'Rakonto', 'TEKSTO', NULL, 1, 1, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(97, 65, 'Klarigoj', 'TEKSTO', NULL, 2, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(98, 65, 'Vortlisto', 'VORTARO', NULL, 3, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(99, 65, 'Ekzercoj', 'EKZERCARO', NULL, 4, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(100, 65, 'Lasu min…', 'TEKSTO', NULL, 5, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(101, 66, 'Rakonto', 'TEKSTO', NULL, 1, 1, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(102, 66, 'Klarigoj', 'TEKSTO', NULL, 2, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(103, 66, 'Vortlisto', 'VORTARO', NULL, 3, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(104, 66, 'Ekzercoj', 'EKZERCARO', NULL, 4, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(105, 66, 'Lasu min…', 'TEKSTO', NULL, 5, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(106, 72, 'Rakonto', 'TEKSTO', NULL, 1, 1, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(107, 72, 'Klarigoj', 'TEKSTO', NULL, 2, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(108, 72, 'Vortlisto', 'VORTARO', NULL, 3, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(109, 72, 'Ekzercoj', 'EKZERCARO', NULL, 4, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(110, 72, 'Lasu min…', 'TEKSTO', NULL, 5, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(111, 73, 'Rakonto', 'TEKSTO', NULL, 1, 1, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(112, 73, 'Klarigoj', 'TEKSTO', NULL, 2, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(113, 73, 'Vortlisto', 'VORTARO', NULL, 3, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(114, 73, 'Ekzercoj', 'EKZERCARO', NULL, 4, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(115, 73, 'Lasu min…', 'TEKSTO', NULL, 5, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(116, 74, 'Rakonto', 'TEKSTO', NULL, 1, 1, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(117, 74, 'Klarigoj', 'TEKSTO', NULL, 2, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(118, 74, 'Vortlisto', 'VORTARO', NULL, 3, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(119, 74, 'Ekzercoj', 'EKZERCARO', NULL, 4, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(120, 74, 'Lasu min…', 'TEKSTO', NULL, 5, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(121, 75, 'Rakonto', 'TEKSTO', NULL, 1, 1, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(122, 75, 'Klarigoj', 'TEKSTO', NULL, 2, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(123, 75, 'Vortlisto', 'VORTARO', NULL, 3, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(124, 75, 'Ekzercoj', 'EKZERCARO', NULL, 4, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(125, 75, 'Lasu min…', 'TEKSTO', NULL, 5, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(126, 76, 'Rakonto', 'TEKSTO', NULL, 1, 1, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(127, 76, 'Klarigoj', 'TEKSTO', NULL, 2, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(128, 76, 'Vortlisto', 'VORTARO', NULL, 3, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(129, 76, 'Ekzercoj', 'EKZERCARO', NULL, 4, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(130, 76, 'Lasu min…', 'TEKSTO', NULL, 5, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(131, 77, 'Rakonto', 'TEKSTO', NULL, 1, 1, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(132, 77, 'Klarigoj', 'TEKSTO', NULL, 2, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(133, 77, 'Vortlisto', 'VORTARO', NULL, 3, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(134, 77, 'Ekzercoj', 'EKZERCARO', NULL, 4, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(135, 77, 'Lasu min…', 'TEKSTO', NULL, 5, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(136, 78, 'Rakonto', 'TEKSTO', NULL, 1, 1, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(137, 78, 'Klarigoj', 'TEKSTO', NULL, 2, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(138, 78, 'Vortlisto', 'VORTARO', NULL, 3, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(139, 78, 'Ekzercoj', 'EKZERCARO', NULL, 4, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(140, 78, 'Lasu min…', 'TEKSTO', NULL, 5, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(141, 79, 'Rakonto', 'TEKSTO', NULL, 1, 1, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(142, 79, 'Klarigoj', 'TEKSTO', NULL, 2, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(143, 79, 'Vortlisto', 'VORTARO', NULL, 3, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(144, 79, 'Ekzercoj', 'EKZERCARO', NULL, 4, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(145, 79, 'Lasu min…', 'TEKSTO', NULL, 5, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(146, 80, 'Rakonto', 'TEKSTO', NULL, 1, 1, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(147, 80, 'Klarigoj', 'TEKSTO', NULL, 2, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(148, 80, 'Vortlisto', 'VORTARO', NULL, 3, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(149, 80, 'Ekzercoj', 'EKZERCARO', NULL, 4, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(150, 80, 'Lasu min…', 'TEKSTO', NULL, 5, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(151, 81, 'Rakonto', 'TEKSTO', NULL, 1, 1, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(152, 81, 'Klarigoj', 'TEKSTO', NULL, 2, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(153, 81, 'Vortlisto', 'VORTARO', NULL, 3, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(154, 81, 'Ekzercoj', 'EKZERCARO', NULL, 4, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(155, 81, 'Lasu min…', 'TEKSTO', NULL, 5, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(156, 82, 'Rakonto', 'TEKSTO', NULL, 1, 1, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(157, 82, 'Klarigoj', 'TEKSTO', NULL, 2, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(158, 82, 'Vortlisto', 'VORTARO', NULL, 3, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(159, 82, 'Ekzercoj', 'EKZERCARO', NULL, 4, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(160, 82, 'Lasu min…', 'TEKSTO', NULL, 5, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(161, 83, 'Rakonto', 'TEKSTO', NULL, 1, 1, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(162, 83, 'Klarigoj', 'TEKSTO', NULL, 2, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(163, 83, 'Vortlisto', 'VORTARO', NULL, 3, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(164, 83, 'Ekzercoj', 'EKZERCARO', NULL, 4, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(165, 83, 'Lasu min…', 'TEKSTO', NULL, 5, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(166, 84, 'Rakonto', 'TEKSTO', NULL, 1, 1, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(167, 84, 'Klarigoj', 'TEKSTO', NULL, 2, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(168, 84, 'Vortlisto', 'VORTARO', NULL, 3, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(169, 84, 'Ekzercoj', 'EKZERCARO', NULL, 4, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(170, 84, 'Lasu min…', 'TEKSTO', NULL, 5, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(171, 85, 'Rakonto', 'TEKSTO', NULL, 1, 1, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(172, 85, 'Klarigoj', 'TEKSTO', NULL, 2, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(173, 85, 'Vortlisto', 'VORTARO', NULL, 3, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(174, 85, 'Ekzercoj', 'EKZERCARO', NULL, 4, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(175, 85, 'Lasu min…', 'TEKSTO', NULL, 5, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(176, 86, 'Rakonto', 'TEKSTO', NULL, 1, 1, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(177, 86, 'Klarigoj', 'TEKSTO', NULL, 2, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(178, 86, 'Vortlisto', 'VORTARO', NULL, 3, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(179, 86, 'Ekzercoj', 'EKZERCARO', NULL, 4, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(180, 86, 'Lasu min…', 'TEKSTO', NULL, 5, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(181, 87, 'Rakonto', 'TEKSTO', NULL, 1, 1, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(182, 87, 'Klarigoj', 'TEKSTO', NULL, 2, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(183, 87, 'Vortlisto', 'VORTARO', NULL, 3, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(184, 87, 'Ekzercoj', 'EKZERCARO', NULL, 4, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(185, 87, 'Lasu min…', 'TEKSTO', NULL, 5, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(186, 88, 'Rakonto', 'TEKSTO', NULL, 1, 1, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(187, 88, 'Klarigoj', 'TEKSTO', NULL, 2, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(188, 88, 'Vortlisto', 'VORTARO', NULL, 3, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(189, 88, 'Ekzercoj', 'EKZERCARO', NULL, 4, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(190, 88, 'Lasu min…', 'TEKSTO', NULL, 5, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(191, 89, 'Rakonto', 'TEKSTO', NULL, 1, 1, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(192, 89, 'Klarigoj', 'TEKSTO', NULL, 2, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(193, 89, 'Vortlisto', 'VORTARO', NULL, 3, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(194, 89, 'Ekzercoj', 'EKZERCARO', NULL, 4, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(195, 89, 'Lasu min…', 'TEKSTO', NULL, 5, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(196, 90, 'Rakonto', 'TEKSTO', NULL, 1, 1, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(197, 90, 'Klarigoj', 'TEKSTO', NULL, 2, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(198, 90, 'Vortlisto', 'VORTARO', NULL, 3, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(199, 90, 'Ekzercoj', 'EKZERCARO', NULL, 4, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(200, 90, 'Lasu min…', 'TEKSTO', NULL, 5, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(201, 91, 'Rakonto', 'TEKSTO', NULL, 1, 1, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(202, 91, 'Klarigoj', 'TEKSTO', NULL, 2, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(203, 91, 'Vortlisto', 'VORTARO', NULL, 3, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(204, 91, 'Ekzercoj', 'EKZERCARO', NULL, 4, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(205, 91, 'Lasu min…', 'TEKSTO', NULL, 5, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(206, 92, 'Rakonto', 'TEKSTO', NULL, 1, 1, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(207, 92, 'Klarigoj', 'TEKSTO', NULL, 2, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(208, 92, 'Vortlisto', 'VORTARO', NULL, 3, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(209, 92, 'Ekzercoj', 'EKZERCARO', NULL, 4, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(210, 92, 'Lasu min…', 'TEKSTO', NULL, 5, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(211, 93, 'Rakonto', 'TEKSTO', NULL, 1, 1, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(212, 93, 'Klarigoj', 'TEKSTO', NULL, 2, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(213, 93, 'Vortlisto', 'VORTARO', NULL, 3, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(214, 93, 'Ekzercoj', 'EKZERCARO', NULL, 4, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(215, 93, 'Lasu min…', 'TEKSTO', NULL, 5, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(216, 71, 'Envoi des exercices', 'TEKSTO', NULL, 2, 0, 1);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(217, 70, 'Épilogue et envoi des exercices', 'TEKSTO', NULL, 9, 0, 1);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(218, 60, 'Récapitulatif de la leçon 1', 'QCM', NULL, 1, 1, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(219, 59, 'Mes premiers mots', 'VORTARO', NULL, 7, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(220, 68, 'Exercices', 'EKZERCARO', NULL, 6, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(221, 60, 'Comment ça va ?', 'VORTARO', NULL, 12, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(222, 64, 'Sendi la ekzercojn', 'TEKSTO', NULL, 6, 0, 1);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(223, 65, 'Sendi la ekzercojn', 'TEKSTO', NULL, 6, 0, 1);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(224, 66, 'Sendi la ekzercojn', 'TEKSTO', NULL, 6, 0, 1);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(230, 72, 'Sendi la ekzercojn', 'TEKSTO', NULL, 6, 0, 1);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(231, 73, 'Sendi la ekzercojn', 'TEKSTO', NULL, 6, 0, 1);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(232, 74, 'Sendi la ekzercojn', 'TEKSTO', NULL, 6, 0, 1);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(233, 75, 'Sendi la ekzercojn', 'TEKSTO', NULL, 6, 0, 1);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(234, 76, 'Sendi la ekzercojn', 'TEKSTO', NULL, 6, 0, 1);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(235, 77, 'Sendi la ekzercojn', 'TEKSTO', NULL, 6, 0, 1);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(236, 78, 'Sendi la ekzercojn', 'TEKSTO', NULL, 6, 0, 1);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(237, 79, 'Sendi la ekzercojn', 'TEKSTO', NULL, 6, 0, 1);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(238, 80, 'Sendi la ekzercojn', 'TEKSTO', NULL, 6, 0, 1);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(239, 81, 'Sendi la ekzercojn', 'TEKSTO', NULL, 6, 0, 1);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(240, 82, 'Sendi la ekzercojn', 'TEKSTO', NULL, 6, 0, 1);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(241, 83, 'Sendi la ekzercojn', 'TEKSTO', NULL, 6, 0, 1);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(242, 84, 'Sendi la ekzercojn', 'TEKSTO', NULL, 6, 0, 1);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(244, 85, 'Sendi la ekzercojn', 'TEKSTO', NULL, 6, 0, 1);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(245, 86, 'Sendi la ekzercojn', 'TEKSTO', NULL, 6, 0, 1);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(246, 87, 'Sendi la ekzercojn', 'TEKSTO', NULL, 6, 0, 1);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(247, 88, 'Sendi la ekzercojn', 'TEKSTO', NULL, 6, 0, 1);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(248, 89, 'Sendi la ekzercojn', 'TEKSTO', NULL, 6, 0, 1);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(249, 90, 'Sendi la ekzercojn', 'TEKSTO', NULL, 6, 0, 1);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(250, 91, 'Sendi la ekzercojn', 'TEKSTO', NULL, 6, 0, 1);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(251, 92, 'Sendi la ekzercojn', 'TEKSTO', NULL, 6, 0, 1);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(252, 93, 'Sendi la ekzercojn', 'TEKSTO', NULL, 6, 0, 1);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(253, 59, 'Qui est qui ?', 'QCM', NULL, 8, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(254, 59, 'Je me présente', 'EKZERCARO', NULL, 11, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(255, 129, 'Prezentu vin', 'EKZERCARO', NULL, 1, 1, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(256, 129, 'Envoi de l\'exercice', 'TEKSTO', NULL, 2, 0, 1);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(257, 130, 'Estingi fajron per sonoj - Vocabulaire', 'VORTARO', NULL, 1, 1, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(258, 130, 'Question - 1ère partie', 'QCM', NULL, 2, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(259, 130, 'Questions - 2ème partie', 'QCM', NULL, 3, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(260, 130, 'Questions - 3ème partie', 'QCM', NULL, 4, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(261, 130, 'Questions - 4ème partie', 'EKZERCARO', NULL, 5, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(262, 130, 'Envoi des exercices', 'TEKSTO', NULL, 6, 0, 1);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(263, 131, 'Mia plej ŝatata filmo', 'EKZERCARO', NULL, 1, 0, 1);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(264, 131, 'Divenu alies filmojn', 'TEKSTO', NULL, 2, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(265, 131, 'Envoi des exercices', 'TEKSTO', NULL, 3, 0, 1);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(266, 132, 'Kio okazos ?', 'EKZERCARO', NULL, 1, 1, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(267, 132, 'Solvo', 'EKZERCARO', NULL, 2, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(268, 132, 'Envoi des exercices', 'TEKSTO', NULL, 3, 0, 1);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(269, 59, 'Premières questions', 'TEKSTO', NULL, 9, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(270, 59, 'Exercices 2 et 3', 'EKZERCARO', NULL, 10, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(271, 62, 'La date', 'TEKSTO', NULL, 8, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(272, 62, 'Exercice 3 : la date', 'EKZERCARO', NULL, 9, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(273, 62, 'La chanson espérantophone', 'TEKSTO', NULL, 13, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(274, 61, 'Qu\'est-ce que c\'est ?', 'TEKSTO', NULL, 12, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(275, 61, 'Exercice 5', 'EKZERCARO', NULL, 13, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(276, 60, 'Exercice 1', 'EKZERCARO', NULL, 5, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(277, 62, 'Encore des compléments', 'TEKSTO', NULL, 6, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(278, 62, 'Exercice 2', 'EKZERCARO', NULL, 7, 0, 0);
INSERT INTO lecioneroj (id, leciono_id, titolo, tipo, enhavo, ordo, unua, lasta) VALUES(279, 68, 'Vocabulaire', 'TEKSTO', NULL, 7, 0, 0);

CREATE TABLE lecionoj (
  `id` int(11) NOT NULL,
  `numero` int(11) NOT NULL DEFAULT '0',
  `titolo` varchar(64) CHARACTER SET utf8 DEFAULT NULL,
  `retpagxo` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `kurso` varchar(2) CHARACTER SET utf8 NOT NULL DEFAULT '0',
  `unua` tinyint(1) NOT NULL DEFAULT '0',
  `lasta` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO lecionoj (id, numero, titolo, retpagxo, kurso, unua, lasta) VALUES(1, 1, 'Leciono 1 - Pa&#285;o 12', NULL, 'KE', 1, 0);
INSERT INTO lecionoj (id, numero, titolo, retpagxo, kurso, unua, lasta) VALUES(2, 2, 'Leciono 2 - Pa&#285;o 11', NULL, 'KE', 0, 0);
INSERT INTO lecionoj (id, numero, titolo, retpagxo, kurso, unua, lasta) VALUES(3, 3, 'Leciono 3 - Pa&#285;o 9', NULL, 'KE', 0, 0);
INSERT INTO lecionoj (id, numero, titolo, retpagxo, kurso, unua, lasta) VALUES(4, 4, 'Leciono 4 - Pa&#285;o 11', NULL, 'KE', 0, 0);
INSERT INTO lecionoj (id, numero, titolo, retpagxo, kurso, unua, lasta) VALUES(5, 5, 'Leciono 4 - Pa&#285;o 12', NULL, 'KE', 0, 0);
INSERT INTO lecionoj (id, numero, titolo, retpagxo, kurso, unua, lasta) VALUES(6, 6, 'Leciono 5 - Pa&#285;o 13', NULL, 'KE', 0, 0);
INSERT INTO lecionoj (id, numero, titolo, retpagxo, kurso, unua, lasta) VALUES(7, 7, 'Leciono 6 - Pa&#285;o 14', NULL, 'KE', 0, 0);
INSERT INTO lecionoj (id, numero, titolo, retpagxo, kurso, unua, lasta) VALUES(8, 8, 'Leciono 7 - Pa&#285;o 4', NULL, 'KE', 0, 0);
INSERT INTO lecionoj (id, numero, titolo, retpagxo, kurso, unua, lasta) VALUES(9, 9, 'Leciono 7 - Pa&#285;o 8', NULL, 'KE', 0, 0);
INSERT INTO lecionoj (id, numero, titolo, retpagxo, kurso, unua, lasta) VALUES(10, 10, 'Leciono 7 - Pa&#285;o 15', NULL, 'KE', 0, 0);
INSERT INTO lecionoj (id, numero, titolo, retpagxo, kurso, unua, lasta) VALUES(11, 11, 'Leciono 8 - Pa&#285;o 13', NULL, 'KE', 0, 0);
INSERT INTO lecionoj (id, numero, titolo, retpagxo, kurso, unua, lasta) VALUES(12, 12, 'Leciono 9 - Pa&#285;o 8', NULL, 'KE', 0, 0);
INSERT INTO lecionoj (id, numero, titolo, retpagxo, kurso, unua, lasta) VALUES(13, 13, 'Leciono 9 - Pa&#285;o 12', NULL, 'KE', 0, 0);
INSERT INTO lecionoj (id, numero, titolo, retpagxo, kurso, unua, lasta) VALUES(14, 14, 'Leciono 10 - Pa&#285;o 8', NULL, 'KE', 0, 0);
INSERT INTO lecionoj (id, numero, titolo, retpagxo, kurso, unua, lasta) VALUES(15, 15, 'Leciono 10 - Pa&#285;o 12', NULL, 'KE', 0, 0);
INSERT INTO lecionoj (id, numero, titolo, retpagxo, kurso, unua, lasta) VALUES(16, 16, 'Leciono 10 - Pa&#285;o 13', NULL, 'KE', 0, 0);
INSERT INTO lecionoj (id, numero, titolo, retpagxo, kurso, unua, lasta) VALUES(17, 17, 'Leciono 11 - Pa&#285;o 11', NULL, 'KE', 0, 0);
INSERT INTO lecionoj (id, numero, titolo, retpagxo, kurso, unua, lasta) VALUES(18, 18, 'Leciono 12 - Pa&#285;o 10', NULL, 'KE', 0, 0);
INSERT INTO lecionoj (id, numero, titolo, retpagxo, kurso, unua, lasta) VALUES(59, 1, 'Premi&egrave;re le&ccedil;on', 'lec01.php', 'CG', 1, 0);
INSERT INTO lecionoj (id, numero, titolo, retpagxo, kurso, unua, lasta) VALUES(60, 2, 'Deuxi&egrave;me le&ccedil;on', 'lec02.php', 'CG', 0, 0);
INSERT INTO lecionoj (id, numero, titolo, retpagxo, kurso, unua, lasta) VALUES(61, 3, 'Troisi&egrave;me le&ccedil;on', 'lec03.php', 'CG', 0, 0);
INSERT INTO lecionoj (id, numero, titolo, retpagxo, kurso, unua, lasta) VALUES(62, 4, 'Quatri&egrave;me le&ccedil;on', 'lec04.php', 'CG', 0, 0);
INSERT INTO lecionoj (id, numero, titolo, retpagxo, kurso, unua, lasta) VALUES(63, 5, 'Cinqui&egrave;me le&ccedil;on', 'lec05.php', 'CG', 0, 0);
INSERT INTO lecionoj (id, numero, titolo, retpagxo, kurso, unua, lasta) VALUES(64, 1, '1 : Unua &#265;apitro', 'cxap01.php', 'GR', 1, 0);
INSERT INTO lecionoj (id, numero, titolo, retpagxo, kurso, unua, lasta) VALUES(65, 2, '2 : Dua &#265;apitro', 'cxap02.php', 'GR', 0, 0);
INSERT INTO lecionoj (id, numero, titolo, retpagxo, kurso, unua, lasta) VALUES(66, 3, '3 : Tria &#265;apitro', 'cxap03.php', 'GR', 0, 0);
INSERT INTO lecionoj (id, numero, titolo, retpagxo, kurso, unua, lasta) VALUES(67, 6, 'Sixi&egrave;me le&ccedil;on', 'lec06.php', 'CG', 0, 0);
INSERT INTO lecionoj (id, numero, titolo, retpagxo, kurso, unua, lasta) VALUES(68, 7, 'Septi&egrave;me le&ccedil;on', 'lec07.php', 'CG', 0, 0);
INSERT INTO lecionoj (id, numero, titolo, retpagxo, kurso, unua, lasta) VALUES(69, 8, 'Huiti&egrave;me le&ccedil;on', 'lec08.php', 'CG', 0, 0);
INSERT INTO lecionoj (id, numero, titolo, retpagxo, kurso, unua, lasta) VALUES(70, 9, 'Neuvi&egrave;me le&ccedil;on', 'lec09.php', 'CG', 0, 0);
INSERT INTO lecionoj (id, numero, titolo, retpagxo, kurso, unua, lasta) VALUES(71, 10, 'Dixi&egrave;me le&ccedil;on', 'lec10.php', 'CG', 0, 1);
INSERT INTO lecionoj (id, numero, titolo, retpagxo, kurso, unua, lasta) VALUES(72, 4, '4 : Kvara &#265;apitro', 'cxap04.php', 'GR', 0, 0);
INSERT INTO lecionoj (id, numero, titolo, retpagxo, kurso, unua, lasta) VALUES(73, 5, '5 : Kvina &#265;apitro', 'cxap05.php', 'GR', 0, 0);
INSERT INTO lecionoj (id, numero, titolo, retpagxo, kurso, unua, lasta) VALUES(74, 6, '6 : Sesa &#265;apitro', 'cxap06.php', 'GR', 0, 0);
INSERT INTO lecionoj (id, numero, titolo, retpagxo, kurso, unua, lasta) VALUES(75, 7, '7 : Sepa &#265;apitro', 'cxap07.php', 'GR', 0, 0);
INSERT INTO lecionoj (id, numero, titolo, retpagxo, kurso, unua, lasta) VALUES(76, 8, '8 : Oka &#265;apitro', 'cxap08.php', 'GR', 0, 0);
INSERT INTO lecionoj (id, numero, titolo, retpagxo, kurso, unua, lasta) VALUES(77, 9, '9 : Na&#365;a &#265;apitro', 'cxap09.php', 'GR', 0, 0);
INSERT INTO lecionoj (id, numero, titolo, retpagxo, kurso, unua, lasta) VALUES(78, 10, '10 : Deka &#265;apitro', 'cxap10.php', 'GR', 0, 0);
INSERT INTO lecionoj (id, numero, titolo, retpagxo, kurso, unua, lasta) VALUES(79, 11, '11 : Dek-Unua &#265;apitro', 'cxap11.php', 'GR', 0, 0);
INSERT INTO lecionoj (id, numero, titolo, retpagxo, kurso, unua, lasta) VALUES(80, 12, '12 : Dek-Dua &#265;apitro', 'cxap12.php', 'GR', 0, 0);
INSERT INTO lecionoj (id, numero, titolo, retpagxo, kurso, unua, lasta) VALUES(81, 13, '13 : Dek-Tria &#265;apitro', 'cxap13.php', 'GR', 0, 0);
INSERT INTO lecionoj (id, numero, titolo, retpagxo, kurso, unua, lasta) VALUES(82, 14, '14 : Dek-Kvara &#265;apitro', 'cxap14.php', 'GR', 0, 0);
INSERT INTO lecionoj (id, numero, titolo, retpagxo, kurso, unua, lasta) VALUES(83, 15, '15 : Dek-Kvina &#265;apitro', 'cxap15.php', 'GR', 0, 0);
INSERT INTO lecionoj (id, numero, titolo, retpagxo, kurso, unua, lasta) VALUES(84, 16, '16 : Dek-Sesa &#265;apitro', 'cxap16.php', 'GR', 0, 0);
INSERT INTO lecionoj (id, numero, titolo, retpagxo, kurso, unua, lasta) VALUES(85, 17, '17 : Dek-Sepa &#265;apitro', 'cxap17.php', 'GR', 0, 0);
INSERT INTO lecionoj (id, numero, titolo, retpagxo, kurso, unua, lasta) VALUES(86, 18, '18 : Dek-Oka &#265;apitro', 'cxap18.php', 'GR', 0, 0);
INSERT INTO lecionoj (id, numero, titolo, retpagxo, kurso, unua, lasta) VALUES(87, 19, '19 : Dek-Na&#365;a &#265;apitro', 'cxap19.php', 'GR', 0, 0);
INSERT INTO lecionoj (id, numero, titolo, retpagxo, kurso, unua, lasta) VALUES(88, 20, '20 : Dudeka &#265;apitro', 'cxap20.php', 'GR', 0, 0);
INSERT INTO lecionoj (id, numero, titolo, retpagxo, kurso, unua, lasta) VALUES(89, 21, '21 : Dudek-Unua &#265;apitro', 'cxap21.php', 'GR', 0, 0);
INSERT INTO lecionoj (id, numero, titolo, retpagxo, kurso, unua, lasta) VALUES(90, 22, '22 : Dudek-Dua &#265;apitro', 'cxap22.php', 'GR', 0, 0);
INSERT INTO lecionoj (id, numero, titolo, retpagxo, kurso, unua, lasta) VALUES(91, 23, '23 : Dudek-Tria &#265;apitro', 'cxap23.php', 'GR', 0, 0);
INSERT INTO lecionoj (id, numero, titolo, retpagxo, kurso, unua, lasta) VALUES(92, 24, '24 : Dudek-Kvara &#265;apitro', 'cxap24.php', 'GR', 0, 0);
INSERT INTO lecionoj (id, numero, titolo, retpagxo, kurso, unua, lasta) VALUES(93, 25, '25 : Dudek-Kvina &#265;apitro', 'cxap25.php', 'GR', 0, 1);
INSERT INTO lecionoj (id, numero, titolo, retpagxo, kurso, unua, lasta) VALUES(129, 1, 'Prezentu vin', 'leciono01.php', '3N', 1, 0);
INSERT INTO lecionoj (id, numero, titolo, retpagxo, kurso, unua, lasta) VALUES(130, 2, 'Estingi fajron', 'leciono02.php', '3N', 0, 0);
INSERT INTO lecionoj (id, numero, titolo, retpagxo, kurso, unua, lasta) VALUES(131, 3, 'Mia plej ŝatata filmo', 'leciono03.php', '3N', 0, 0);
INSERT INTO lecionoj (id, numero, titolo, retpagxo, kurso, unua, lasta) VALUES(132, 4, 'Kio okazos ?', 'leciono04.php', '3N', 0, 0);

CREATE TABLE monatoj (
  `id` int(11) NOT NULL,
  `kodo` varchar(2) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `nomo` varchar(64) CHARACTER SET utf8 NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO monatoj (id, kodo, nomo) VALUES(38, '01', 'Janvier');
INSERT INTO monatoj (id, kodo, nomo) VALUES(39, '02', 'F&eacute;vrier');
INSERT INTO monatoj (id, kodo, nomo) VALUES(40, '03', 'Mars');
INSERT INTO monatoj (id, kodo, nomo) VALUES(41, '04', 'Avril');
INSERT INTO monatoj (id, kodo, nomo) VALUES(42, '05', 'Mai');
INSERT INTO monatoj (id, kodo, nomo) VALUES(43, '06', 'Juin');
INSERT INTO monatoj (id, kodo, nomo) VALUES(44, '07', 'Juillet');
INSERT INTO monatoj (id, kodo, nomo) VALUES(45, '08', 'Ao&ucirc;t');
INSERT INTO monatoj (id, kodo, nomo) VALUES(46, '09', 'Septembre');
INSERT INTO monatoj (id, kodo, nomo) VALUES(47, '10', 'Octobre');
INSERT INTO monatoj (id, kodo, nomo) VALUES(48, '11', 'Novembre');
INSERT INTO monatoj (id, kodo, nomo) VALUES(49, '12', 'D&eacute;cembre');

CREATE TABLE nuna_kurso (
  `id` int(11) NOT NULL,
  `ekdato` date NOT NULL DEFAULT '0000-00-00',
  `findato` date DEFAULT NULL,
  `stato` enum('N','K','F','H') CHARACTER SET latin1 NOT NULL DEFAULT 'N',
  `lastdato` date NOT NULL DEFAULT '0000-00-00',
  `korektanto` int(11) NOT NULL DEFAULT '0',
  `pasintakorektanto` int(11) DEFAULT NULL,
  `studanto` int(11) NOT NULL DEFAULT '0',
  `nunleciono` int(11) DEFAULT NULL,
  `kurso` char(2) CHARACTER SET latin1 DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE personoj (
  `id` int(11) NOT NULL,
  `ekdato` date NOT NULL,
  `lasteniro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `sekso` char(1) CHARACTER SET utf8 DEFAULT NULL,
  `familinomo` varchar(32) CHARACTER SET utf8 DEFAULT NULL,
  `personnomo` varchar(32) CHARACTER SET utf8 DEFAULT NULL,
  `enirnomo` varchar(32) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `adreso1` varchar(128) CHARACTER SET utf8 DEFAULT NULL,
  `adreso2` varchar(128) CHARACTER SET utf8 DEFAULT NULL,
  `posxtkodo` varchar(6) CHARACTER SET utf8 DEFAULT NULL,
  `urbo` varchar(32) CHARACTER SET utf8 DEFAULT NULL,
  `lando` varchar(2) CHARACTER SET utf8 DEFAULT NULL,
  `latitudo` float(8,6) DEFAULT NULL,
  `longitudo` float(8,6) DEFAULT NULL,
  `retadreso` varchar(128) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `naskigxdato` date DEFAULT NULL,
  `rajtoj` enum('P','S','K','A','I') CHARACTER SET utf8 NOT NULL DEFAULT 'P',
  `kialo` text CHARACTER SET utf8,
  `noto` text CHARACTER SET utf8,
  `maksimumo` int(11) NOT NULL DEFAULT '0',
  `kurso` varchar(2) CHARACTER SET utf8 DEFAULT '',
  `videbla` enum('J','N') CHARACTER SET utf8 NOT NULL DEFAULT 'J',
  `stop_info` enum('J','N') CHARACTER SET utf8 NOT NULL DEFAULT 'N',
  `stop_rappel` enum('J','N') CHARACTER SET utf8 NOT NULL DEFAULT 'N',
  `aktivigo` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `aktivigita` tinyint(1) NOT NULL DEFAULT '0',
  `pasvorto_md5` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci PACK_KEYS=0;

CREATE TABLE personoj_lecioneroj (
  `id` int(11) NOT NULL,
  `dato` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `persono_id` int(11) NOT NULL,
  `lecionero_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE personoj_lecionoj (
  `id` int(11) NOT NULL,
  `dato` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `persono_id` int(11) NOT NULL,
  `leciono_id` int(11) NOT NULL,
  `komentario` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE personoj_vortoj (
  `id` int(11) NOT NULL,
  `persono_id` int(11) NOT NULL,
  `vorto_id` int(11) NOT NULL,
  `nombrilo` int(11) NOT NULL,
  `venontaFojo` datetime NOT NULL,
  `lastfojo` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE personoj_vortoj_respondoj (
  `persono_id` int(11) NOT NULL,
  `vorto_id` int(11) NOT NULL,
  `dato` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `bona` tinyint(1) NOT NULL,
  `respondo` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE protokolo (
  `id` int(11) NOT NULL,
  `persono_id` int(11) DEFAULT NULL,
  `horo` datetime DEFAULT NULL,
  `ip` varchar(32) CHARACTER SET latin1 DEFAULT NULL,
  `kategorio` varchar(32) CHARACTER SET latin1 DEFAULT NULL,
  `teksto` text CHARACTER SET utf8
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE rajtoj (
  `id` int(11) NOT NULL,
  `kodo` char(3) CHARACTER SET latin1 NOT NULL DEFAULT '',
  `nomo` varchar(64) CHARACTER SET latin1 NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO rajtoj (id, kodo, nomo) VALUES(1, 'P', '1. Attend un correcteur');
INSERT INTO rajtoj (id, kodo, nomo) VALUES(2, 'S', '2. &Eacute;l&egrave;ve');
INSERT INTO rajtoj (id, kodo, nomo) VALUES(3, 'K', '3. Correcteur');
INSERT INTO rajtoj (id, kodo, nomo) VALUES(4, 'A', '4. Administrateur');
INSERT INTO rajtoj (id, kodo, nomo) VALUES(5, 'I', '5. Informateur');

CREATE TABLE respondoj (
  `id` int(11) NOT NULL,
  `dato` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `persono_id` int(11) NOT NULL,
  `lecionero_id` int(11) NOT NULL,
  `kodo` varchar(40) DEFAULT NULL,
  `komando` text NOT NULL,
  `demando` text,
  `respondo` text,
  `normaligita` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE takso_leciono (
  `id` int(11) NOT NULL,
  `dato` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `persono_id` int(11) NOT NULL,
  `leciono_id` int(11) NOT NULL,
  `intereso` int(11) NOT NULL,
  `malfacileco` int(11) NOT NULL,
  `komento` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE vortoj (
  `id` int(11) NOT NULL,
  `eo` varchar(128) NOT NULL,
  `fr` varchar(128) NOT NULL,
  `tipo` enum('adj','adv','conjonction','expression','interjection','nom','nombre','phrase','pronom','préfixe','préposition','verbe') DEFAULT NULL,
  `lecionero_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1, 'amiko', 'ami', 'nom', 2);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(2, 'amika', 'amical', 'adj', 2);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(3, 'esti', 'être', 'verbe', 2);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(4, 'nova', 'nouveau', 'adj', 2);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(5, 'sana', 'sain, en bonne santé', 'adj', 2);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(6, 'biskvito', 'biscuit', 'nom', 3);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(7, 'filo', 'fils', 'nom', 3);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(8, 'Francujo|Francio', 'France', 'nom', 3);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(9, 'frato', 'frère', 'nom', 3);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(10, 'instruisto', 'instituteur', 'nom', 3);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(11, 'knabo', 'garçon', 'nom', 3);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(12, 'kafo', 'café', 'nom', 3);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(13, 'kuko', 'gâteau', 'nom', 3);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(14, 'lakto', 'lait', 'nom', 3);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(15, 'lando', 'pays', 'nom', 3);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(16, 'patro', 'père', 'nom', 3);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(17, 'pano', 'pain', 'nom', 3);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(18, 'studento', 'étudiant', 'nom', 3);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(19, 'sukero', 'sucre', 'nom', 3);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(20, 'teo', 'thé', 'nom', 3);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(21, 'urbo', 'ville', 'nom', 3);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(22, 'viro', 'homme', 'nom', 3);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(23, 'bela', 'beau, belle', 'adj', 3);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(24, 'bona', 'bon, bonne', 'adj', 3);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(25, 'ĉiam', 'toujours', 'adj', 3);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(26, 'en', 'dans, en', 'adj', 3);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(27, 'facila', 'facile', 'adj', 3);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(28, 'granda', 'grand, grande', 'adj', 3);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(29, 'kiu', 'qui, quel', 'adj', 3);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(30, 'nova', 'nouveau, nouvelle', 'adj', 3);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(31, 'seka', 'sec, sèche', 'adj', 3);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(32, 'varma', 'chaud, chaude', 'adj', 3);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(33, 'kaj', 'et', 'conjonction', 3);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(34, 'saluton', 'salut, bonjour', 'phrase', 254);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(35, 'bonan tagon', 'bonjour', 'phrase', 254);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(36, 'bonan vesperon', 'bonsoir', 'phrase', 254);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(37, 'bonan nokton', 'bonne nuit', 'phrase', 254);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(38, 'mi loĝas en', 'j\'habite à', 'phrase', 254);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(39, 'mi ŝatas ...|mi amas ...', 'j\'aime ..., j\'apprécie ...', 'phrase', 254);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(40, 'ĝis revido', 'au revoir', 'phrase', 254);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(41, 'adiaŭ', 'adieu', 'phrase', 254);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(42, 'bonvolu ...|mi petas', '... s\'il vous plaît ...', 'phrase', 254);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(43, 'virino', 'femme', 'nom', 9);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(44, 'amikino', 'amie', 'nom', 9);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(45, 'filino|knabino', 'fille', 'nom', 9);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(46, 'malamiko', 'ennemi', 'nom', 12);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(47, 'malbela', 'laid, laide', 'adj', 12);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(48, 'malnova|maljuna', 'ancien, ancienne, vieux, vieille', 'adj', 12);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(49, 'ami|ŝati', 'aimer', 'verbe', 14);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(50, 'fari', 'faire', 'verbe', 14);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(51, 'forgesi', 'oublier', 'verbe', 14);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(52, 'havi', 'avoir', 'verbe', 14);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(53, 'kapti', 'attraper', 'verbe', 14);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(54, 'lavi', 'laver', 'verbe', 14);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(55, 'porti', 'porter', 'verbe', 14);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(56, 'peti|demandi', 'demander', 'verbe', 14);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(57, 'renkonti', 'rencontrer', 'verbe', 14);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(58, 'skribi', 'écrire', 'verbe', 14);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(59, 'sukeri', 'sucrer', 'verbe', 14);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(60, 'trinki', 'boire', 'verbe', 14);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(61, 'vendi', 'vendre', 'verbe', 14);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(62, 'vidi', 'voir', 'verbe', 276);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(63, 'akvo', 'eau', 'nom', 276);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(64, 'amo', 'amour', 'nom', 14);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(65, 'birdo', 'oiseau', 'nom', 276);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(66, 'butiko', 'boutique', 'nom', 14);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(67, 'insekto', 'insecte', 'nom', 14);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(68, 'limonado', 'limonade', 'nom', 14);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(69, 'papero', 'papier', 'nom', 14);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(70, 'plumo', 'plume', 'nom', 14);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(71, 'taso', 'tasse', 'nom', 14);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(72, 'pura', 'propre', 'adj', 14);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(73, 'kiel vi fartas ?|kiel vi fartas?', 'comment allez-vous ?', 'phrase', 221);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(74, 'bone', 'bien', 'adv', 221);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(75, 'bonege', 'très bien', 'adv', 221);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(76, 'sufiĉe', 'assez', 'adv', 221);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(77, 'knabino|filino', 'fille', 'nom', 20);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(78, 'patrino', 'mère', 'nom', 20);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(79, 'fratino', 'soeur', 'nom', 20);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(80, 'horo', 'heure', 'nom', 22);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(81, 'jaro', 'année', 'nom', 22);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(82, 'mateno', 'matin', 'nom', 22);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(83, 'minuto', 'minute', 'nom', 22);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(84, 'semajno', 'semaine', 'nom', 22);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(85, 'nokto', 'nuit', 'nom', 22);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(86, 'tago', 'jour', 'nom', 22);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(87, 'vespero', 'soir, soirée', 'nom', 22);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(88, 'atendi', 'attendre', 'verbe', 22);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(89, 'demandi', 'demander, poser une question', 'verbe', 22);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(90, 'fumi', 'fumer', 'verbe', 22);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(91, 'kuri', 'courir', 'verbe', 22);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(93, 'promeni', 'se promener', 'verbe', 276);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(94, 'respondi', 'répondre', 'verbe', 22);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(95, 'soifi', 'avoir soif', 'verbe', 22);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(96, 'vivi', 'vivre', 'verbe', 22);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(97, 'blanka', 'blanc', 'adj', 22);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(98, 'blua', 'bleu', 'adj', 22);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(99, 'bruna', 'brun, marron', 'adj', 22);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(100, 'flava', 'jaune', 'adj', 22);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(101, 'griza', 'gris', 'adj', 22);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(102, 'nigra', 'noir', 'adj', 22);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(103, 'ruĝa', 'rouge', 'adj', 22);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(104, 'verda', 'vert', 'adj', 22);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(105, 'sano', 'santé', 'nom', 24);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(106, 'sane', 'sainement', 'adv', 24);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(107, 'sani|esti sana', 'être en bonne santé', 'verbe', 24);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(108, 'unu', 'un, 1', 'nombre', 27);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(109, 'du', 'deux, 2', 'nombre', 27);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(110, 'tri', 'trois, 3', 'nombre', 27);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(111, 'kvar', 'quatre, 4', 'nombre', 27);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(112, 'kvin', 'cinq, 5', 'nombre', 27);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(113, 'ses', 'six, 6', 'nombre', 27);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(114, 'sep', 'sept', 'nombre', 27);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(115, 'ok', 'huit, 8', 'nombre', 27);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(116, 'naŭ', 'neuf, 9', 'nombre', 27);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(117, 'dek', 'dix, 10', 'nombre', 27);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(118, 'dek unu|dekunu', 'onze, 11', 'nombre', 27);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(119, 'dek du|dekdu', 'douze, 12', 'nombre', 27);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(120, 'dek tri|dektri', 'treize, 13', 'nombre', 27);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(121, 'dek kvar|dekkvar', 'quatorze, 14', 'nombre', 27);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(122, 'dudek', 'vingt, 20', 'nombre', 27);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(123, 'dudek unu|dudekunu', 'vingt-et-un, 21', 'nombre', 27);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(124, 'tridek', 'trente', 'nombre', 27);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(125, 'tridek unu|tridekunu', 'trente et un, 31', 'nombre', 27);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(126, 'tridek du|tridekdu', 'trente-deux, 32', 'nombre', 27);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(127, 'kvardek', 'quarante, 40', 'nombre', 27);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(128, 'kvindek', 'cinquante, 50', 'nombre', 27);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(129, 'sesdek', 'soixante, 60', 'nombre', 27);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(130, 'sepdek', 'soixante-dix, setptante, 70', 'nombre', 27);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(131, 'okdek', 'quatre-vingt, octante, 80', 'nombre', 27);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(132, 'naŭdek', 'quatre-vingt-dix, nonante, 90', 'nombre', 27);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(133, 'cent', 'cent, 100', 'nombre', 27);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(134, 'ducent', 'deux cents, 200', 'nombre', 27);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(135, 'tricent', 'trois cents, 300', 'nombre', 27);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(136, 'mil', 'mille', 'nombre', 27);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(137, 'unua', 'premier', 'adj', 27);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(138, 'dua', 'deuxième', 'adj', 27);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(139, 'tria', 'troisième', 'adj', 27);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(140, 'kvara', 'quatrième', 'adj', 27);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(141, 'dudeka', 'vingtième, 20e', 'adj', 27);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(142, 'sepdek-unua|sepdekunua', 'soixante et onzième, 71e', 'adj', 27);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(143, 'centa', 'centième, 100e', 'adj', 27);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(144, 'dek-kvara', 'quatorzième, 14e', 'adj', 27);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(145, 'unue', 'premièrement', 'adv', 27);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(146, 'due', 'deuxièmement', 'adv', 27);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(147, 'trie', 'troisièmement', 'adv', 27);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(148, 'dek-kvare|dekkvare', 'quatorzièmement', 'adv', 27);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(149, 'aĉeti', 'acheter', 'verbe', 38);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(150, 'al', 'vers, à', 'préposition', 38);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(151, 'Anglujo|Anglio', 'Angleterre', 'nom', 38);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(152, 'biciklo', 'bicyclette', 'nom', 38);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(153, 'bildkarto|poŝtkarto', 'carte postale', 'nom', 38);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(154, 'bildo', 'image', 'nom', 38);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(155, 'ĉambro', 'pièce (d\'une maison)', 'nom', 38);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(156, 'Ĉinio', 'Chine', 'nom', 38);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(157, 'ĉokolado', 'chocolat', 'nom', 38);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(158, 'danco', 'danse', 'nom', 38);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(159, 'de', 'de', 'préposition', 38);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(160, 'deziri', 'désirer', 'verbe', 38);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(161, 'domo', 'maison', 'nom', 276);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(162, 'edzo|geedzoj', 'époux', 'nom', 38);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(163, 'edzino', 'épouse', 'nom', 38);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(164, 'el|ekster', 'hors de', 'préposition', 38);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(165, 'esperantisto', 'espérantiste', 'nom', 38);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(166, 'en', 'dans', 'préposition', 38);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(167, 'Eŭropo', 'Europe', 'nom', 38);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(168, 'gustumi', 'goûter', 'verbe', 38);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(169, 'ĝojo', 'joie', 'nom', 38);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(170, 'infano', 'enfant', 'nom', 38);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(171, 'jam', 'déjà', 'adv', 38);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(172, 'ĵaluza', 'jaloux', 'adj', 38);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(173, 'ĵaŭdo', 'jeudi', 'nom', 38);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(174, 'ĵurnalo', 'journal', 'nom', 38);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(175, 'kaj', 'et', 'conjonction', 38);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(176, 'kio', 'quoi', 'pronom', 38);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(177, 'kolekti', 'rassembler', 'verbe', 38);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(178, 'vojaĝi', 'voyager', 'verbe', 38);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(179, 'leciono', 'leçon', 'nom', 38);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(180, 'lernejo', 'école', 'nom', 38);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(181, 'libro', 'livre', 'nom', 276);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(182, 'loĝi', 'habiter', 'verbe', 38);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(183, 'manĝi', 'manger', 'verbe', 38);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(184, 'neŭtrala', 'neutre', 'adj', 38);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(185, 'ovo', 'œuf', 'nom', 38);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(186, 'plej', 'plus (superlatif)', 'adv', 38);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(187, 'poŝtmarko', 'timbre-poste', 'nom', 38);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(188, 'sandviĉo', 'sandwich', 'nom', 38);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(189, 'sporto', 'sport', 'nom', 38);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(190, 'ŝuo', 'chaussure', 'nom', 38);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(191, 'veni', 'venir', 'verbe', 38);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(192, 'bonan apetiton', 'bon appétit', 'phrase', 43);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(193, 'je via sano', 'à votre santé, à la vôtre', 'phrase', 43);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(194, 'same al vi', 'pareillement', 'phrase', 43);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(195, 'dankon', 'merci', 'phrase', 43);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(196, 'ne dankinde', 'pas de quoi', 'phrase', 43);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(197, 'interŝanĝi', 'échanger', 'verbe', 43);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(198, 'nomo', 'nom', 'nom', 43);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(199, 'komenci', 'commencer', 'verbe', 43);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(200, 'lerni', 'apprendre', 'verbe', 43);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(201, 'lingvo', 'langue', 'nom', 43);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(202, 'kun', 'avec', 'préposition', 43);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(203, 'ŝati', 'aimer, apprécier', 'verbe', 43);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(204, 'malbono', 'mal', 'nom', 47);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(205, 'malseka', 'mouillé, mouillée', 'adj', 48);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(206, 'krajono|skribilo', 'crayon', 'nom', 48);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(207, 'vespere', 'le soir, au soir', 'adv', 48);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(208, 'bicikle', 'en vélo', 'adv', 48);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(209, 'matene', 'le matin, au matin', 'adv', 51);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(210, 'scienco', 'science', 'nom', 52);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(211, 'helpi', 'aider', 'verbe', 52);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(212, 'junularo', 'jeunesse', 'nom', 56);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(213, 'partopreni en|partopreni', 'participer à', 'verbe', 56);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(214, 'okazi', 'avoir lieu', 'verbe', 56);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(215, 'Kebeko', 'Québec', 'nom', 56);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(216, 'buseto', 'minibus', 'nom', 56);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(217, 'halti', 's’arrêter', 'verbe', 56);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(218, 'alveni al', 'arriver à , arriver dans', 'verbe', 56);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(219, 'ankaŭ', 'aussi', 'adv', 56);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(220, 'viziti', 'visiter', 'verbe', 56);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(221, 'tagmanĝo', 'repas du midi, déjeuner, dîner', 'nom', 56);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(222, 'seĝo|sidilo', 'siège', 'nom', 56);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(223, 'veturi|iri', 'aller', 'verbe', 58);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(224, 'admiri', 'admirer', 'verbe', 58);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(225, 'besto', 'bête, animal', 'nom', 58);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(226, 'multaj', 'beaucoup de, de nombreux', 'adj', 58);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(227, 'kontinento', 'continent', 'nom', 58);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(228, 'plaĉi al', 'plaire à', 'verbe', 58);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(229, 'urso', 'ours', 'nom', 58);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(230, 'enirejo', 'entrée', 'nom', 58);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(231, 'kaĝo', 'cage', 'nom', 58);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(232, 'Arkto', 'Arctique', 'nom', 58);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(233, 'ofte', 'souvent', 'adv', 58);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(234, 'simio', 'singe', 'nom', 58);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(235, 'interesa', 'intéressant', 'adj', 58);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(236, 'kompleta', 'complet, complète', 'adj', 58);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(237, 'membro', 'membre, adhérent', 'nom', 59);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(238, 'klubo', 'club', 'nom', 59);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(239, 'bofilo', 'beau-fils, gendre', 'nom', 68);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(240, 'bofratino', 'belle-soeur', 'nom', 68);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(241, 'doni', 'donner', 'verbe', 68);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(242, 'disdoni', 'distribuer', 'verbe', 68);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(243, 'semi', 'semer', 'verbe', 68);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(244, 'dissemi', 'disséminer', 'verbe', 68);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(245, 'dormi', 'dormir', 'verbe', 68);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(246, 'ekdormi', 's\'endormir', 'verbe', 68);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(247, 'pluvi', 'pleuvoir', 'verbe', 68);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(248, 'ekpluvi', 'se mettre à pleuvoir', 'verbe', 68);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(249, 'ek!', 'allez !, allons-y !, en route !, en avant !', 'adv', 68);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(250, 'prezidanto', 'président', 'nom', 68);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(251, 'eksprezidanto', 'ex-président', 'nom', 68);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(252, 'edziĝi', 'se marier', 'verbe', 68);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(253, 'eksedziĝi', 'divorcer', 'verbe', 68);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(254, 'eksiĝi', 'démissionner', 'verbe', 68);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(255, 'komercisto', 'commerçant', 'nom', 68);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(256, 'gepatroj', 'les parents', 'nom', 68);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(257, 'sinjoro', 'monsieur', 'nom', 68);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(258, 'gesinjoroj', 'mesdames et messieurs', 'nom', 68);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(259, 'gea', 'mixte', 'adj', 68);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(260, 'fermi', 'fermer', 'verbe', 68);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(261, 'malfermi', 'ouvrir', 'verbe', 68);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(262, 'malo', 'contraire', 'nom', 68);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(263, 'kompreni', 'comprendre', 'verbe', 68);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(264, 'miskompreni', 'comprendre de travers', 'verbe', 68);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(265, 'paŝo', 'pas', 'nom', 68);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(266, 'nepo', 'petit-fils', 'nom', 68);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(267, 'pranepo', 'arrière-petit-fils', 'nom', 68);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(268, 'avo', 'grand-père', 'nom', 68);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(269, 'praavo', 'arrière-grand-père', 'nom', 68);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(270, 'arbaro', 'forêt', 'nom', 68);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(271, 'refari', 'refaire', 'verbe', 68);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(272, 'reveni', 'revenir', 'verbe', 68);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(273, 'ree', 'de nouveau', 'adv', 68);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(274, 'paroli', 'parler', 'verbe', 69);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(275, 'parolado', 'discours', 'nom', 69);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(276, 'rigardi', 'regarder', 'verbe', 69);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(277, 'rigardadi', 'contempler', 'verbe', 69);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(278, 'kanti', 'chanter', 'verbe', 69);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(279, 'kantado', 'chant', 'nom', 69);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(280, 'ade', 'sans arrêt', 'adv', 69);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(281, 'sendi', 'envoyer', 'verbe', 69);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(282, 'sendaĵo', 'envoi', 'nom', 69);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(283, 'bovo', 'bœuf', 'nom', 69);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(284, 'bovaĵo', 'viande de bœuf', 'nom', 69);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(285, 'reala', 'réel, réelle', 'adj', 69);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(286, 'realaĵo', 'réalité', 'nom', 69);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(287, 'Kanado', 'Canada', 'nom', 69);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(288, 'kanadano', 'Canadien', 'nom', 69);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(289, 'Kristo', 'Christ', 'nom', 69);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(290, 'kristano', 'chrétien', 'nom', 69);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(291, 'vorto', 'mot', 'nom', 69);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(292, 'vortaro', 'dictionnaire', 'nom', 69);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(293, 'ŝafo', 'mouton', 'nom', 69);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(294, 'ŝafaro', 'troupeau de moutons', 'nom', 69);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(295, 'membraro', 'les membres', 'nom', 69);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(296, 'paĉjo', 'papa', 'nom', 69);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(297, 'videbla', 'visible', 'adj', 69);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(298, 'kredi', 'croire', 'verbe', 69);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(299, 'nekredebla', 'incroyable', 'adj', 69);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(300, 'ebla', 'possible', 'adj', 69);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(301, 'eble', 'peut-être', 'adv', 69);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(302, 'vireco', 'virilité', 'nom', 69);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(303, 'verdeco', 'verdeur', 'nom', 69);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(304, 'infaneco', 'enfance', 'nom', 69);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(305, 'vento', 'vent', 'nom', 69);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(306, 'ventego', 'tempête', 'nom', 69);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(307, 'ridi', 'rire', 'verbe', 69);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(308, 'ridegi', 'se tordre de rire', 'verbe', 69);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(309, 'ege', 'extrêmement', 'adv', 69);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(310, 'dormejo', 'dortoir', 'nom', 69);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(311, 'tombo', 'tombe', 'nom', 69);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(312, 'tombejo', 'cimetière', 'nom', 69);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(313, 'ejo', 'local, salle', 'nom', 69);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(314, 'ŝpari', 'économiser', 'verbe', 69);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(315, 'ŝparema', 'économe', 'adj', 69);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(316, 'babili', 'bavarder', 'verbe', 69);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(317, 'babilema', 'bavard', 'adj', 69);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(318, 'emi', 'avoir tendance à', 'verbe', 69);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(319, 'legi', 'lire', 'verbe', 69);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(320, 'legenda', 'qu\'il faut lire', 'adj', 69);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(321, 'farenda', 'qu\'il faut faire', 'adj', 69);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(322, 'salo', 'sel', 'nom', 69);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(323, 'salero', 'grain de sel', 'nom', 69);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(324, 'mono', 'argent', 'nom', 69);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(325, 'monero', 'pièce, pièce de monnaie', 'nom', 69);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(326, 'urbestro', 'maire', 'nom', 69);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(327, 'estri', 'diriger', 'verbe', 69);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(328, 'estro', 'chef', 'nom', 69);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(329, 'beleta', 'joli', 'adj', 69);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(330, 'varmeta', 'tiède', 'adj', 69);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(331, 'eta|malgranda', 'petit', 'adj', 69);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(332, 'iomete', 'un peu, un petit peu', 'adv', 69);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(333, 'katido', 'chaton', 'nom', 69);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(334, 'reĝo', 'roi', 'nom', 69);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(335, 'reĝido', 'prince', 'nom', 69);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(336, 'purigi', 'nettoyer', 'verbe', 69);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(337, 'morti', 'mourir', 'verbe', 69);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(338, 'mortigi', 'tuer', 'verbe', 69);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(339, 'scii', 'savoir', 'verbe', 69);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(340, 'sciigi', 'faire savoir, informer', 'verbe', 69);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(341, 'sidi', 'être assis', 'verbe', 69);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(342, 'sidiĝi', 's\'asseoir', 'verbe', 69);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(343, 'ruĝiĝi', 'rougir', 'verbe', 69);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(344, 'iĝi', 'devenir', 'verbe', 69);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(345, 'ŝlosi', 'fermer à clé', 'verbe', 69);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(346, 'ŝlosilo', 'clé, clef', 'nom', 69);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(347, 'razi', 'raser', 'verbe', 69);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(348, 'razilo', 'rasoir', 'nom', 69);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(349, 'ilo', 'instrument', 'nom', 69);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(350, 'onklo', 'oncle', 'nom', 69);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(351, 'onklino', 'tante', 'nom', 69);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(352, 'koko', 'coq', 'nom', 69);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(353, 'kokino', 'poule', 'nom', 69);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(354, 'ina', 'féminin', 'adj', 69);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(355, 'admirinda', 'admirable', 'adj', 69);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(356, 'cigaredo', 'cigarette', 'nom', 69);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(357, 'glavo', 'épée', 'nom', 69);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(358, 'instrui', 'enseigner', 'verbe', 69);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(359, 'pianisto', 'pianiste', 'nom', 69);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(360, 'panjo', 'maman', 'nom', 69);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(361, 'duobla', 'double', 'adj', 69);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(362, 'multobligi', 'multiplier, reproduire', 'verbe', 69);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(363, 'kvarono', 'quart', 'nom', 69);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(364, 'duonhoro', 'demi-heure', 'nom', 69);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(365, 'triope', 'à trois', 'adv', 69);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(366, 'unuopa', 'individuel', 'adj', 69);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(367, 'ope', 'en groupe, à plusieurs', 'adv', 69);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(368, 'supo', 'soupe', 'nom', 69);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(369, 'monujo', 'porte-monnaie', 'nom', 38);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(370, 'ujo', 'récipient', 'nom', 69);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(371, 'sankta', 'saint', 'adj', 69);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(372, 'sanktulo', 'un saint', 'nom', 69);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(373, 'stulta', 'stupide', 'adj', 69);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(374, 'stultulo', 'sot', 'nom', 69);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(375, 'kunulino', 'compagne', 'nom', 69);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(376, 'aĉulo', 'salopard', 'nom', 69);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(377, 'kolo', 'cou', 'nom', 69);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(378, 'kolumo', 'col', 'nom', 69);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(379, 'plena', 'plein', 'adj', 69);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(380, 'plenumi', 'accomplir', 'verbe', 69);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(381, 'umilo', 'gadget', 'nom', 69);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(382, 'voĉo', 'voix', 'nom', 74);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(383, 'pordo', 'porte', 'nom', 74);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(384, 'vermo', 'ver', 'nom', 74);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(385, 'letero', 'lettre', 'nom', 74);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(386, 'honori', 'honorer', 'verbe', 74);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(387, 'diablo', 'diable', 'nom', 74);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(388, 'adori', 'adorer', 'verbe', 74);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(389, 'juĝisto', 'juge', 'nom', 77);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(390, 'aserti', 'affirmer, prétendre', 'verbe', 77);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(391, 'akuzato', 'l\'accusé', 'nom', 77);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(392, 'forkuri', 'se sauver', 'verbe', 77);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(393, 'tramo', 'tramway', 'nom', 77);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(394, 'okulo', 'oeil', 'nom', 77);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(395, 'stari', 'être debout', 'verbe', 77);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(396, 'laca', 'fatigué', 'adj', 77);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(397, 'plaĉi', 'plaire', 'verbe', 77);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(398, 'jen', 'voici, voilà', 'adv', 82);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(399, 'sonorilo', 'cloche', 'nom', 82);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(400, 'vesto', 'vêtement', 'nom', 82);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(401, 'tuj', 'tout de suite', 'adv', 82);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(402, 'do', 'donc', 'conjonction', 82);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(403, 'belsone', 'd\'un beau son', 'adv', 82);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(404, 'farti', 'se porter', 'verbe', 82);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(405, 'fraŭlo', 'célibataire, homme célibataire', 'nom', 82);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(406, 'fraŭlino', 'demoiselle', 'nom', 82);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(407, 'almenaŭ', 'au moins', 'adv', 84);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(408, 'ankaŭ', 'aussi, également', 'adv', 84);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(409, 'ankoraŭ', 'encore', 'adv', 84);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(410, 'apenaŭ', 'à peine', 'adv', 84);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(411, 'baldaŭ', 'bientôt', 'adv', 84);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(412, 'hieraŭ', 'hier', 'adv', 84);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(413, 'hodiaŭ', 'aujourd\'hui', 'adv', 84);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(414, 'morgaŭ', 'demain', 'adv', 84);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(415, 'preskaŭ', 'presque', 'adv', 84);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(416, 'ambaŭ', 'les deux, tous les deux', 'adv', 85);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(417, 'anstataŭ', 'au lieu de', 'préposition', 85);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(418, 'antaŭ', 'avant, devant', 'préposition', 276);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(419, 'ĉirkaŭ', 'autour de, environ', 'préposition', 85);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(420, 'kontraŭ', 'contre', 'préposition', 85);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(421, 'muso', 'souris', 'nom', 87);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(422, 'tapiŝo', 'tapis', 'nom', 87);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(423, 'fali', 'tomber', 'verbe', 87);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(424, 'festeni', 'festoyer', 'nom', 87);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(425, 'gvidi', 'guider, diriger', 'verbe', 89);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(426, 'Brazilo', 'Brésil', 'nom', 89);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(427, 'Brazilio', 'Brasilia', 'nom', 89);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(428, 'senti', 'sentir, ressentir', 'verbe', 89);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(429, 'kresko', 'croissance, accroissement', 'nom', 89);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(430, 'samideano', 'partisan, espérantiste', 'nom', 89);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(431, 'gastigi', 'recevoir, offrir l\'hospitalité', 'verbe', 89);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(432, 'kutima', 'habituel', 'adj', 89);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(433, 'Usono', 'États-Unis', 'nom', 89);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(434, 'plie', 'de plus', 'adv', 89);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(435, 'aranĝo', 'manifestation', 'nom', 89);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(436, 'asocio', 'association', 'nom', 89);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(437, 'najbaro', 'voisin', 'nom', 89);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(438, 'rubriko', 'rubrique', 'nom', 89);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(439, 'numero', 'numéro', 'nom', 89);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(440, 'bulteno', 'bulletin', 'nom', 89);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(441, 'organizi', 'organiser', 'verbe', 89);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(442, 'vidpunkto', 'point de vue', 'nom', 89);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(443, 'Pasko', 'Pâques', 'nom', 89);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(444, 'tradicio', 'tradition', 'nom', 89);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(445, 'supozi', 'supposer', 'verbe', 89);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(446, 'Flandro', 'Flandres', 'nom', 89);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(447, 'Nederlando', 'Pays-Bas', 'nom', 89);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(448, 'al', 'à, vers', 'préposition', 93);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(449, 'alta', 'haut(e)', 'adj', 93);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(450, 'angulo', 'coin, angle', 'nom', 93);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(451, 'bela', 'beau, belle', 'adj', 93);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(452, 'blonda', 'blond(e)', 'adj', 93);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(453, 'demandi', 'interroger, demander', 'verbe', 93);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(454, 'demando', 'question', 'nom', 93);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(455, 'diri', 'dire', 'verbe', 93);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(456, 'ebla', 'possible', 'adj', 93);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(457, 'eble', 'peut-être, possiblement', 'adv', 93);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(458, 'estas fakto', 'c\'est un fait', 'expression', 93);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(459, 'fakte', 'en fait', 'adv', 93);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(460, 'fakto', 'fait', 'nom', 93);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(461, 'granda', 'grand(e)', 'adj', 93);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(462, 'iri', 'aller', 'verbe', 93);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(463, 'jen', 'voici', 'adv', 93);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(464, 'juna', 'jeune', 'adj', 93);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(465, 'kaj', 'et', 'conjonction', 93);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(466, 'kara', 'cher, chère', 'adj', 93);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(467, 'kio', 'quoi, que', 'pronom', 93);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(468, 'okazi', 'arriver, se passer, avoir lieu', 'verbe', 93);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(469, 'kio okazas?', 'qu\'arrive-t-il ?, que se passe-t-il ?', 'phrase', 93);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(470, 'al kio vi rigardas?|kion vi rigardas?', 'que regardes-tu ?', 'phrase', 93);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(471, 'kiu', 'qui', 'pronom', 93);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(472, 'knabino', 'fille, jeune fille', 'nom', 93);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(473, 'knabo', 'garçon, jeune homme', 'nom', 93);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(474, 'kun', 'avec', 'préposition', 93);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(475, 'labori', 'travailler', 'verbe', 93);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(476, 'mondo', 'monde', 'nom', 93);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(477, 'multaj', 'plusieurs', 'adj', 93);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(478, 'multe', 'beaucoup', 'adv', 93);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(479, 'nenio', 'rien', 'pronom', 93);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(480, 'nenio speciala', 'rien de spécial', 'expression', 93);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(481, 'nova', 'neuf, neuve', 'adj', 93);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(482, 'nu', 'allons, bien, eh bien… ', 'adv', 93);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(483, 'nun', 'maintenant', 'adv', 93);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(484, 'nur', 'seulement', 'adv', 93);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(485, 'plej', 'le plus, la plus', 'adv', 93);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(486, 'restoracio', 'restaurant', 'nom', 93);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(487, 'rigardi', 'regarder', 'verbe', 93);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(488, 'scii', 'savoir', 'verbe', 93);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(489, 'serioza', 'sérieux, sérieuse', 'adj', 93);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(490, 'sidi', 'être assis(e)', 'verbe', 93);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(491, 'sincera', 'sincère', 'adj', 93);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(492, 'sola', 'seul(e)', 'adj', 93);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(493, 'speciala', 'spécial(e)', 'adj', 93);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(494, 'spegulo', 'miroir', 'nom', 93);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(495, 'studento', 'étudiant', 'nom', 93);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(496, 'tiu', 'celui-là, ce(tte) …-là', 'adj', 93);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(497, 'tro', 'trop', 'adv', 93);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(498, 'tuta', 'entier, entière, tout(e) le(la)/un(e)', 'adj', 93);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(499, 'tute', 'entièrement, totalement', 'adv', 93);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(500, 'universitata', 'universitaire', 'adj', 93);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(501, 'universitato', 'université', 'nom', 93);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(502, 'veni', 'venir', 'verbe', 93);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(503, 'vera', 'vrai(e)', 'adj', 93);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(504, 'vere', 'vraiment', 'adv', 93);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(505, 'verŝajna', 'probable', 'adj', 93);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(506, 'verŝajne', 'probablement', 'adv', 93);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(507, 'virino', 'femme', 'nom', 93);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(508, 'viro', 'homme, mâle', 'nom', 93);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(509, 'agi', 'agir', 'verbe', 98);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(510, 'alia', 'autre', 'adj', 98);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(511, 'alparoli', 'adresser la parole à', 'verbe', 98);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(512, 'bona', 'bon,  bonne', 'adj', 98);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(513, 'bone', 'bien', 'adv', 98);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(514, 'certa', 'certain(e)', 'adj', 98);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(515, 'certe', 'certainement', 'adv', 98);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(516, 'ĉu', 'est-ce que…, si (indique l\'interrogation)', 'pronom', 98);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(517, 'veni', 'venir', 'verbe', 98);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(518, 'scii', 'savoir', 'verbe', 98);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(519, 'diable !', 'diable !, diantre !', 'adv', 98);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(520, 'diablo', 'diable', 'nom', 98);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(521, 'direkto', 'direction', 'nom', 98);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(522, 'diskreta', 'discret, discrète', 'adj', 98);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(523, 'diskrete', 'discrètement, avec discrétion', 'adv', 98);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(524, 'dum', 'durant, pendant, pendant que', 'préposition', 98);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(525, 'ej !', 'hé là !', 'interjection', 98);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(526, 'forta', 'fort(e)', 'adj', 98);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(527, 'halti', 's\'arrêter', 'verbe', 98);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(528, 'iĝi', 'devenir', 'verbe', 98);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(529, 'inter', 'entre, parmi', 'préposition', 98);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(530, 'io', 'quelque chose', 'nom', 98);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(531, 'iom', 'un peu', 'adv', 98);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(532, 'iom post iom', 'petit à petit, peu à peu', 'expression', 98);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(533, 'iomete', 'un petit peu', 'adv', 98);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(534, 'junulo', 'jeune', 'nom', 98);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(535, 'ke', 'que (exemple: je sais que…, il dit que…)', 'conjonction', 98);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(536, 'kvazaŭ', 'quasi-, comme si', 'adv', 98);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(537, 'mano', 'main', 'nom', 98);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(538, 'mistera', 'mystérieux, mystérieuse', 'adj', 98);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(539, 'mistere', 'mystérieusement', 'adv', 98);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(540, 'mistero', 'mystère', 'nom', 98);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(541, 'montri', 'montrer, désigner', 'verbe', 98);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(542, 'natura', 'naturel(le)', 'adj', 98);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(543, 'nature', 'naturellement', 'adv', 98);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(544, 'naturo', 'nature', 'nom', 98);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(545, 'ne plu', 'plus maintenant, ne… plus', 'expression', 98);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(546, 'pala', 'pâle', 'adj', 98);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(547, 'paroli', 'parler', 'verbe', 98);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(548, 'peti', 'demander (de faire quelque chose) ; prier (de faire quelque chose)', 'verbe', 98);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(549, 'plu', 'plus, plus longtemps, plus loin', 'adv', 98);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(550, 'pordo', 'porte', 'nom', 98);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(551, 'post', 'après', 'préposition', 98);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(552, 'pravi', 'avoir raison, être correct', 'verbe', 98);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(553, 'prava', 'correct(e) (opinion, comportement, etc.)', 'adj', 98);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(554, 'malpravi', 'avoir tort, être faux', 'verbe', 98);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(555, 'malprava|malĝusta', 'faux, erroné', 'adj', 98);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(556, 'proksima', 'proche', 'adj', 98);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(557, 'malproksima|fora', 'éloigné(e)', 'adj', 98);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(558, 'proksimiĝi', 's\'approcher', 'verbe', 98);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(559, 'rapida', 'rapide, vif, vive', 'adj', 98);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(560, 'malrapida', 'lent', 'adj', 98);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(561, 'reveni', 'revenir', 'verbe', 98);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(562, 'se', 'si (indique une condition)', 'conjonction', 98);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(563, 'stari', 'se tenir debout, être debout', 'verbe', 98);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(564, 'stranga', 'bizarre', 'adj', 98);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(565, 'strange', 'bizarrement', 'adv', 98);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(566, 'taso', 'tasse', 'nom', 98);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(567, 'tre', 'très', 'adv', 98);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(568, 'turni', 'tourner', 'verbe', 98);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(569, 'ulo', 'type, individu', 'nom', 98);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(570, 'vidi', 'voir', 'verbe', 98);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(571, 'voli', 'vouloir', 'verbe', 98);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(572, 'amdeklaro', 'déclaration d\'amour', 'nom', 103);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(573, 'ami', 'aimer', 'verbe', 103);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(574, 'amo', 'amour', 'nom', 103);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(575, 'ankaŭ', 'aussi', 'adv', 103);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(576, 'aspekti', 'ressembler (à)', 'verbe', 103);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(577, 'aspekto', 'aspect, apparence, ressemblance', 'nom', 103);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(578, 'bonan tagon', 'bonjour', 'expression', 103);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(579, 'ĉe', 'à (comme dans «à la table»), à côté, près de', 'préposition', 103);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(580, 'deklari', 'déclarer', 'verbe', 103);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(581, 'deklaro', 'déclaration', 'nom', 103);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(582, 'esprimi', 'exprimer', 'verbe', 103);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(583, 'esprimo', 'expression', 'nom', 103);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(584, 'grava', 'important(e)', 'adj', 103);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(585, 'gravi', 'avoir de l\'importance', 'verbe', 103);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(586, 'jam', 'déjà', 'adv', 103);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(587, 'kiel', 'comme, à (comme dans «ressembler à») ; comment', 'conjonction', 103);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(588, 'kompreni', 'comprendre', 'verbe', 103);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(589, 'kompreneble', 'naturellement, bien entendu', 'adv', 103);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(590, 'ne gravas', 'ça n\'a pas d\'importance, peu importe', 'expression', 103);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(591, 'pardoni', 'pardonner', 'verbe', 103);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(592, 'permesi', 'permettre', 'verbe', 103);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(593, 'pli', 'plus (en plus grande quantité)', 'adv', 103);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(594, 'povi', 'pouvoir, être capable de', 'verbe', 103);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(595, 'preferi', 'préférer', 'verbe', 103);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(596, 'pri', 'à propos de', 'préposition', 103);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(597, 'saluti', 'saluer', 'verbe', 103);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(598, 'simpla', 'simple', 'adj', 103);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(599, 'spiono', 'espion', 'nom', 103);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(600, 'sur', 'sur', 'préposition', 103);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(601, 'tablo', 'table', 'nom', 103);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(602, 'tago', 'jour', 'nom', 103);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(603, 'tamen', 'néanmoins, toutefois, quand même, cependant', 'adv', 103);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(604, 'tio estas simpla', 'c\'est simple', 'expression', 103);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(605, 'tuj', 'immédiatement, sur le champ', 'adv', 103);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(606, 'vizaĝo', 'face, visage', 'nom', 103);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(607, 'afero', 'affaire, sujet, chose', 'nom', 108);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(608, 'aĵo', 'chose, objet (synonyme de afero, mais plus concret)', 'nom', 108);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(609, 'antaŭ', 'avant, en avant de, devant', 'préposition', 108);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(610, 'antaŭe', 'avant, auparavant ', 'adv', 108);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(611, 'arto', 'art', 'nom', 108);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(612, 'deziri', 'désirer', 'verbe', 108);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(613, 'do', 'donc', 'conjonction', 108);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(614, 'ekzisti', 'exister', 'verbe', 108);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(615, 'fako', 'spécialité, discipline, département (sens propre : compartiment, case)', 'nom', 108);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(616, 'ideo', 'idée', 'nom', 108);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(617, 'instrui', 'enseigner', 'verbe', 108);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(618, 'kiam', 'quand', 'conjonction', 108);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(619, 'komuniki', 'communiquer', 'verbe', 108);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(620, 'koni', 'connaître', 'verbe', 108);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(621, 'konsideri', 'considérer', 'verbe', 108);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(622, 'konsenti', 'consentir, être en accord', 'verbe', 108);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(623, 'kripta', 'secret, volontairement inintelligible', 'adj', 108);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(624, 'kriptografio', 'cryptographie', 'nom', 108);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(625, 'lerni', 'apprendre', 'verbe', 108);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(626, 'lingvo', 'langue', 'nom', 108);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(627, 'lingvistiko', 'linguistique', 'nom', 108);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(628, 'malpli', 'moins', 'adv', 108);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(629, 'mesaĝo', 'message', 'nom', 108);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(630, 'neniam', 'jamais', 'adv', 108);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(631, 'nomo', 'nom', 'nom', 108);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(632, 'por', 'pour, dans le but de', 'préposition', 108);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(633, 'profesoro', 'professeur', 'nom', 108);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(634, 'respondi', 'répondre', 'verbe', 108);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(635, 'rilati', 'avoir un rapport, une relation avec', 'verbe', 108);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(636, 'rilato', 'rapport, lien, relation', 'nom', 108);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(637, 'scienco', 'science', 'nom', 108);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(638, 'sekreta', 'secret, secrète', 'adj', 108);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(639, 'sekreto', 'secret', 'nom', 108);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(640, 'temas pri', '(il) s\'agit de', 'expression', 108);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(641, 'temo', 'sujet, thème', 'nom', 108);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(642, 'voli diri', 'vouloir dire, signifier', 'expression', 108);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(643, 'ne tute', 'pas tout à fait', 'expression', 108);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(644, 'tute ne', 'pas du tout', 'expression', 108);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(645, 'afero', 'affaire, sujet, chose', 'nom', 113);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(646, 'absurda', 'absurde', 'adj', 113);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(647, 'ankoraŭ', 'encore', 'adv', 113);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(648, 'ankoraŭ ne', 'pas encore', 'expression', 113);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(649, 'atenti', 'prêter attention, être attentif', 'verbe', 113);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(650, 'atento', 'attention', 'nom', 113);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(651, 'cetere', 'd\'ailleurs, du reste', 'adv', 113);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(652, 'ĉi', '(indique la proximité)', 'adv', 113);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(653, 'ĉi tie', 'ici-même', 'adv', 113);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(654, 'ĉi tio', 'ceci (cette chose-ci)', 'pronom', 113);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(655, 'ĉi tiu', 'ceci, celui-ci, celle-ci, ce… -ci', 'adj', 113);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(656, 'da', 'de (après une expression de quantité)', 'préposition', 113);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(657, 'dramo', 'drame', 'nom', 113);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(658, 'drogo', 'drogue', 'nom', 113);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(659, 'evidenta', 'évident(e)', 'adj', 113);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(660, 'eta|malgranda', 'petit(e)', 'adj', 113);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(661, 'for', 'loin, au loin', 'préposition', 113);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(662, 'havi', 'avoir', 'verbe', 113);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(663, 'imagi', 'imaginer', 'verbe', 113);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(664, 'imago', 'imagination', 'nom', 113);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(665, 'iu', 'quelque, quelqu\'un', 'pronom', 113);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(666, 'kaŝe', 'en cachette', 'adv', 113);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(667, 'kaŝi', 'cacher, dissimuler', 'verbe', 113);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(668, 'normala', 'normal(e)', 'adj', 113);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(669, 'ofta', 'fréquent(e)', 'adj', 113);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(670, 'ofte', 'souvent, fréquemment', 'adv', 113);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(671, 'paro', 'couple, paire', 'nom', 113);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(672, 'peco', 'morceau, bout, pincée', 'nom', 113);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(673, 'plena', 'plein(e)', 'adj', 113);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(674, 'plene', 'pleinement, complètement, entièrement', 'adv', 113);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(675, 'poŝo', 'poche', 'nom', 113);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(676, 'promeni', 'se promener', 'verbe', 113);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(677, 'sekundo', 'seconde (de temps)', 'nom', 113);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(678, 'subita', 'soudain(e)', 'adj', 113);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(679, 'subite', 'soudainement', 'adv', 113);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(680, 'substanco', 'substance', 'nom', 113);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(681, 'sukcesi', 'réussir, avoir du succès', 'verbe', 113);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(682, 'sukero', 'sucre', 'nom', 113);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(683, 'super', 'sur, au-dessus', 'préposition', 113);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(684, 'ŝajni', 'sembler, avoir l\'air', 'verbe', 113);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(685, 'tiam', 'alors, à cet instant', 'adv', 113);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(686, 'tie', 'là, là-bas', 'adv', 113);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(687, 'tiel', 'ainsi, de cette façon', 'adv', 113);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(688, 'ambaŭ', 'tous deux, tous les deux, l\'un et l\'autre', 'adv', 118);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(689, 'aŭdi', 'entendre', 'verbe', 118);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(690, 'bruo', 'bruit', 'nom', 118);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(691, 'decidi', 'décider', 'verbe', 118);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(692, 'decido', 'décision', 'nom', 118);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(693, 'devi', 'devoir', 'verbe', 118);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(694, 'devo', 'devoir', 'nom', 118);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(695, 'diskuti', 'discuter', 'verbe', 118);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(696, 'diskuto', 'discussion', 'nom', 118);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(697, 'fali', 'tomber', 'verbe', 118);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(698, 'falo', 'chute', 'nom', 118);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(699, 'kafo', 'café', 'nom', 118);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(700, 'koridoro', 'couloir, corridor', 'nom', 118);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(701, 'meti', 'mettre, poser, placer', 'verbe', 118);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(702, 'observi', 'observer', 'verbe', 118);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(703, 'pensi', 'penser', 'verbe', 118);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(704, 'perdi', 'perdre', 'verbe', 118);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(705, 'resti', 'rester', 'verbe', 118);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(706, 'riski', 'risquer', 'verbe', 118);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(707, 'sama', 'le même, la même, identique, pareil(le)', 'adj', 118);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(708, 'tempo', 'temps', 'nom', 118);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(709, 'timi', 'craindre, avoir peur', 'verbe', 118);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(710, 'trankvila', 'tranquille, calme', 'adj', 118);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(711, 'almenaŭ', 'au moins, du moins', 'adv', 123);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(712, 'apenaŭ', 'à peine', 'adv', 123);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(713, 'aŭtoritato', 'autorité', 'nom', 123);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(714, 'bati', 'battre, frapper', 'verbe', 123);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(715, 'doktoro', 'docteur', 'nom', 123);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(716, 'dormi', 'dormir', 'verbe', 123);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(717, 'fari', 'faire', 'verbe', 123);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(718, 'flegi', 'soigner', 'verbe', 123);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(719, 'flegisto', 'infirmier', 'nom', 123);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(720, 'flegistino', 'infirmière', 'nom', 123);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(721, 'ĝis', 'jusqu\'à', 'préposition', 123);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(722, 'ĝusta|prava', 'correct(e), exact(e)', 'adj', 123);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(723, 'informi', 'informer', 'verbe', 123);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(724, 'informo', 'information', 'nom', 123);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(725, 'kapo', 'tête', 'nom', 123);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(726, 'komforta', 'confortable', 'adj', 123);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(727, 'konscia', 'conscient(e)', 'adj', 123);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(728, 'konscii', 'être conscient, avoir conscience', 'verbe', 123);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(729, 'konscio', 'conscience', 'nom', 123);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(730, 'koro', 'cœur', 'nom', 123);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(731, 'kuraci', 'guérir', 'verbe', 123);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(732, 'kuracisto', 'médecin', 'nom', 123);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(733, 'kuŝi', 'être couché, être étendu, reposer (gésir)', 'verbe', 123);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(734, 'memori', 'se souvenir, se rappeler', 'verbe', 123);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(735, 'ol', 'que (dans une comparaison)', 'conjonction', 123);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(736, 'opinii', 'être d\'avis, penser, croire', 'verbe', 123);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(737, 'opinio', 'opinion, avis', 'nom', 123);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(738, 'piedo', 'pied', 'nom', 123);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(739, 'pozicio', 'position', 'nom', 123);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(740, 'semajno', 'semaine', 'nom', 123);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(741, 'sendi', 'envoyer, expédier', 'verbe', 123);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(742, 'unua', 'premier, première', 'adj', 123);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(743, 'unue', 'premièrement, d\'abord', 'adv', 123);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(744, 'vivi', 'vivre', 'verbe', 123);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(745, 'voki', 'appeler', 'verbe', 123);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(746, 'atendi', 'attendre', 'verbe', 128);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(747, 'aŭ', 'ou', 'conjonction', 128);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(748, 'aŭto', 'voiture, automobile', 'nom', 128);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(749, 'aŭtomato', 'automate', 'nom', 128);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(750, 'baldaŭ', 'bientôt', 'adv', 128);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(751, 'buso', 'car, bus, autocar', 'nom', 128);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(752, 'ĉambro', 'chambre, pièce dans une maison ou un bâtiment', 'nom', 128);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(753, 'dormoĉambro', 'chambre à coucher', 'nom', 128);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(754, 'manĝoĉambro', 'salle à manger', 'nom', 128);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(755, 'ĉar', 'parce que', 'conjonction', 128);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(756, 'ĉiaokaze', 'dans tous les cas, en tout cas', 'adv', 128);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(757, 'destino', 'destin, destinée', 'nom', 128);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(758, 'eĉ', 'même, et en plus', 'adv', 128);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(759, 'ekster', 'hors de, à l\'extérieur de', 'préposition', 128);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(760, 'ekstere', 'dehors, à l\'extérieur', 'adv', 128);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(761, 'eksteren', 'vers le dehors, vers l\'extérieur', 'adv', 128);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(762, 'el', 'hors de, de', 'préposition', 128);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(763, 'helpi', 'aider', 'verbe', 128);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(764, 'korpo', 'corps', 'nom', 128);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(765, 'kruro', 'jambe', 'nom', 128);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(766, 'longa', 'long(ue)', 'adj', 128);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(767, 'mem', 'soi-même', 'pronom', 128);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(768, 'nokto', 'nuit', 'nom', 128);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(769, 'paŝi|marŝi', 'marcher', 'verbe', 128);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(770, 'paŝo', 'pas', 'nom', 128);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(771, 'per', 'par, à l\'aide de (instrument, moyen de transport...)', 'préposition', 128);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(772, 'ruĝa', 'rouge', 'adj', 128);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(773, 'sekvi', 'suivre', 'verbe', 128);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(774, 'senti', 'ressentir, sentir, éprouver', 'verbe', 128);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(775, 'servi', 'servir', 'verbe', 128);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(776, 'suspekti', 'suspecter', 'verbe', 128);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(777, 'tien', 'vers là, vers là-bas', 'adv', 128);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(778, 'iru tien !', 'allez là-bas !', 'expression', 128);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(779, 'venu ĉi tien !', 'venez ici !', 'expression', 128);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(780, 'tomato', 'tomate', 'nom', 128);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(781, 'tra', 'à travers', 'préposition', 128);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(782, 'urbo', 'ville', 'nom', 128);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(783, 'vespero', 'soir', 'nom', 128);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(784, 'administra', 'administratif, administrative', 'adj', 133);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(785, 'administri', 'administrer', 'verbe', 133);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(786, 'ajn', 'n\'importe qu-…', 'pronom', 133);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(787, 'iu ajn', 'n\'importe qui, n\'importe quel', 'pronom', 133);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(788, 'io ajn', 'n\'importe quoi', 'pronom', 133);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(789, 'kiu ajn', 'quiconque, n\'importe quel… qui', 'pronom', 133);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(790, 'kiun ajn', 'qui que ce soit que, n\'importe quel… que', 'pronom', 133);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(791, 'amiko', 'ami', 'nom', 133);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(792, 'bani', 'baigner', 'verbe', 133);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(793, 'bani sin', 'se baigner', 'verbe', 133);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(794, 'blua', 'bleu(e)', 'adj', 133);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(795, 'dika', 'épais(se)', 'adj', 133);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(796, 'epoko', 'époque, âge', 'nom', 133);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(797, 'generacio', 'génération', 'nom', 133);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(798, 'grasa|dika', 'gros(se), gras(se)', 'adj', 133);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(799, 'haro', 'cheveu', 'nom', 133);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(800, 'homo', 'être humain, homme', 'nom', 133);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(801, 'kelkaj', 'quelques, peu de', 'adj', 133);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(802, 'kial', 'pourquoi', 'pronom', 133);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(803, 'kie', 'où', 'pronom', 133);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(804, 'kie ajn|ie ajn', 'n\'importe où que, partout où, en quelque endroit que ce soit que', 'pronom', 133);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(805, 'kie ajn vi estas', 'où que tu sois, partout où tu es', 'expression', 133);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(806, 'klaso', 'classe', 'nom', 133);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(807, 'kompati', 'avoir pitié, compatir', 'verbe', 133);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(808, 'kompatinda', 'digne de pitié, à plaindre', 'adj', 133);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(809, 'kredi', 'croire', 'verbe', 133);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(810, 'lasi', 'laisser', 'verbe', 133);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(811, 'loko', 'endroit, lieu', 'nom', 133);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(812, 'mezo', 'milieu', 'nom', 133);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(813, 'meze de', 'au milieu de', 'préposition', 133);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(814, 'minuto', 'minute (temps)', 'nom', 133);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(815, 'muro', 'mur', 'nom', 133);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(816, 'neniu', 'personne ; aucun', 'pronom', 133);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(817, 'ofico|funkcio', 'fonction, emploi', 'nom', 133);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(818, 'oficejo', 'bureau, office', 'nom', 133);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(819, 'okulo', 'œil', 'nom', 133);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(820, 'okupi', 'occuper', 'verbe', 133);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(821, 'okupiĝi pri', 's\'occuper de', 'verbe', 133);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(822, 'provi', 'essayer', 'verbe', 133);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(823, 'rondo', 'rond, cercle', 'nom', 133);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(824, 'ronda', 'rond(e), circulaire', 'adj', 133);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(825, 'sana', 'en bonne santé', 'adj', 133);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(826, 'sen', 'sans', 'préposition', 133);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(827, 'sveni', 's\'évanouir', 'verbe', 133);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(828, 'tradicio', 'tradition', 'nom', 133);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(829, 'trovi', 'trouver', 'verbe', 133);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(830, 'tuŝi', 'toucher', 'verbe', 133);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(831, 'urĝa', 'urgent(e)', 'adj', 133);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(832, 'vorto', 'mot', 'nom', 133);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(833, 'vortaro', 'dictionnaire', 'nom', 133);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(834, 'zorgi', 'se faire du souci ; s\'occuper de, prendre soin de', 'verbe', 133);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(835, 'zorgo', 'souci, inquiétude ; attention, sollicitude', 'nom', 133);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(836, 'aventuro', 'aventure', 'nom', 138);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(837, 'danĝero', 'danger', 'nom', 138);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(838, 'danki', 'remercier', 'verbe', 138);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(839, 'ege', 'extrêmement', 'adv', 138);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(840, 'emi', 'incliner à', 'verbe', 138);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(841, 'ema', 'ayant tendance à', 'adj', 138);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(842, 'facila', 'facile', 'adj', 138);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(843, 'fidi', 'faire confiance', 'verbe', 138);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(844, 'fuŝi', 'faire rater, gâcher, bousiller', 'verbe', 138);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(845, 'reciproke', 'réciproquement, mutuellement', 'adv', 138);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(846, 'silenti', 'être silencieux', 'verbe', 138);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(847, 'silento', 'silence', 'nom', 138);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(848, 'sinjoro', 'monsieur', 'nom', 138);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(849, 'ŝati', 'apprécier, aimer', 'verbe', 138);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(850, 'afabla', 'affable, gentil(le)', 'adj', 143);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(851, 'akcepti', 'accepter', 'verbe', 143);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(852, 'aldoni', 'ajouter', 'verbe', 143);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(853, 'aranĝi', 'arranger, combiner, agencer', 'verbe', 143);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(854, 'aranĝo', 'combinaison, arrangement', 'nom', 143);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(855, 'banala', 'banal(e)', 'adj', 143);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(856, 'bonvoli', 'bien vouloir', 'verbe', 143);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(857, 'ĉiam', 'toujours', 'adv', 143);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(858, 'dankon', 'merci', 'adv', 143);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(859, 'ne dankinde', 'pas de quoi', 'expression', 143);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(860, 'entute', 'en tout, au total', 'adv', 143);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(861, 'fermi', 'fermer', 'verbe', 143);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(862, 'malfermi', 'ouvrir', 'verbe', 143);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(863, 'fini', 'finir', 'verbe', 143);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(864, 'funkcii', 'fonctionner, marcher', 'verbe', 143);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(865, 'ĝeni', 'gêner, inconforter', 'verbe', 143);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(866, 'kiel eble plej', 'autant que possible', 'expression', 143);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(867, 'konsentite', 'OK, d\'accord', 'adv', 143);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(868, 'kontenta', 'content(e), satisfait(e)', 'adj', 143);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(869, 'maniero', 'manière', 'nom', 143);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(870, 'manki', 'manquer de', 'verbe', 143);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(871, 'mekaniko', 'mécanique, mécanisme', 'nom', 143);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(872, 'miksi', 'mélanger', 'verbe', 143);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(873, 'miri', 's\'étonner', 'verbe', 143);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(874, 'motoro', 'moteur', 'nom', 143);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(875, 'objekto', 'objet, chose', 'nom', 143);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(876, 'oportuna', 'pratique, adéquat', 'adj', 143);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(877, 'ordo', 'ordre', 'nom', 143);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(878, 'panei', 'être en panne', 'verbe', 143);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(879, 'paneo', 'panne', 'nom', 143);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(880, 'ripari', 'réparer', 'verbe', 143);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(881, 'ripeti', 'répéter', 'verbe', 143);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(882, 'saĝa', 'sage', 'adj', 143);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(883, 'seka', 'sec', 'adj', 143);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(884, 'tia', 'tel(le), telle sorte de', 'adj', 143);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(885, 'troviĝi', 'se trouver', 'verbe', 143);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(886, 'turni sin al', 's\'adresser à, parler à, demander à, contacter', 'verbe', 143);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(887, 'veturi', 'aller (en utilisant un véhicule)', 'verbe', 143);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(888, 'aĉeti', 'acheter', 'verbe', 148);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(889, 'akvo', 'eau', 'nom', 148);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(890, 'apud|ĉe', 'à côté, près de', 'préposition', 148);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(891, 'brando', 'eau-de-vie, alcool', 'nom', 148);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(892, 'ĉio', 'tout, toute chose', 'nom', 148);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(893, 'denove', 'à nouveau', 'adv', 148);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(894, 'doloro', 'douleur', 'nom', 148);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(895, 'doni', 'donner', 'verbe', 148);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(896, 'duone', '(à) demi', 'adv', 148);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(897, 'eksplodi', 'exploser', 'verbe', 148);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(898, 'fraŭlino', 'Mademoiselle', 'nom', 148);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(899, 'glaso', 'verre', 'nom', 148);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(900, 'ĝemi', 'gémir, geindre', 'verbe', 148);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(901, 'heziti', 'hésiter', 'verbe', 148);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(902, 'ja|kompreneble', 'certes, bien, assurément', 'adj', 148);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(903, 'kiom', 'combien, quelle quantité', 'pronom', 148);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(904, 'klara', 'clair(e), simple', 'adj', 148);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(905, 'kvankam', 'bien que, quoique', 'adv', 148);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(906, 'larĝa', 'large', 'adj', 148);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(907, 'laŭ', 'selon, suivant ; le long de', 'préposition', 148);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(908, 'morti', 'mourir', 'verbe', 148);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(909, 'plezuro', 'plaisir', 'nom', 148);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(910, 'polico', 'police', 'nom', 148);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(911, 'porti', 'porter', 'verbe', 148);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(912, 'pripensi', 'réfléchir à, considérer, envisager', 'verbe', 148);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(913, 'ricevi', 'recevoir', 'verbe', 148);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(914, 'seĝo', 'chaise', 'nom', 148);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(915, 'soifi', 'avoir soif', 'verbe', 148);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(916, 'soifo', 'soif', 'nom', 148);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(917, 'sufiĉa', 'suffisant(e)', 'adj', 148);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(918, 'tiom', 'tant (de), autant', 'pronom', 148);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(919, 'trinki', 'boire', 'verbe', 148);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(920, 'absorbi', 'absorber', 'verbe', 153);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(921, 'bedaŭri', 'regretter', 'verbe', 153);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(922, 'centro', 'centre', 'nom', 153);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(923, 'daŭri', 'durer', 'verbe', 153);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(924, 'daŭrigi', 'continuer (quelque chose)', 'verbe', 153);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(925, 'ekzemplo', 'exemple', 'nom', 153);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(926, 'feliĉa', 'heureux, heureuse', 'adj', 153);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(927, 'feliĉe', 'heureusement', 'adv', 153);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(928, 'forgesi', 'oublier', 'verbe', 153);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(929, 'ĝentila', 'poli(e), courtois', 'adj', 153);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(930, 'ĝojo|feliĉo', 'joie, bonheur', 'nom', 153);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(931, 'ĝoja', 'joyeux, joyeuse, content(e)', 'adj', 153);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(932, 'hotelo', 'hôtel', 'nom', 153);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(933, 'ie', 'quelque part', 'pronom', 153);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(934, 'interesi', 'intéresser', 'verbe', 153);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(935, 'interesa', 'intéressant(e)', 'adj', 153);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(936, 'internacia', 'international(e)', 'adj', 153);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(937, 'komenci', 'commencer', 'verbe', 153);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(938, 'konato', 'connaissance', 'nom', 153);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(939, 'koncerni', 'concerner', 'verbe', 153);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(940, 'koncerne', 'concernant', 'adv', 153);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(941, 'krome', 'de plus, en outre', 'adv', 153);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(942, 'kutimi', 'avoir l\'habitude de, avoir coutume', 'verbe', 153);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(943, 'kutimo', 'habitude, coutume', 'nom', 153);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(944, 'momento', 'moment', 'nom', 153);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(945, 'nacio', 'nation', 'nom', 153);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(946, 'nacia', 'national(e)', 'adj', 153);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(947, 'nekonato', '(un) inconnu', 'nom', 153);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(948, 'perfekta', 'parfait(e)', 'adj', 153);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(949, 'persono', 'personne', 'nom', 153);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(950, 'peza', 'lourd, pesant', 'adj', 153);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(951, 'preciza', 'précis(e)', 'adj', 153);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(952, 'proponi', 'suggérer, proposer ; offrir', 'verbe', 153);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(953, 'rajti', 'avoir le droit de', 'verbe', 153);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(954, 'rajto', '(le) droit (de faire quelque chose)', 'nom', 153);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(955, 'rakonti', 'raconter', 'verbe', 153);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(956, 'ridi', 'rire', 'verbe', 153);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(957, 'rideti', 'sourire', 'verbe', 153);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(958, 'rimarki', 'remarquer, noter', 'verbe', 153);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(959, 'simila', 'similaire', 'adj', 153);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(960, 'stulta', 'stupide, idiot(e), imbécile', 'adj', 153);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(961, 'ŝofori|konduki', 'conduire', 'verbe', 153);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(962, 'ŝoforo', 'conducteur, chauffeur', 'nom', 153);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(963, 'teatro', 'théâtre', 'nom', 153);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(964, 'vojo', 'voie, route, chemin', 'nom', 153);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(965, 'aero', 'air', 'nom', 158);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(966, 'brako', 'bras', 'nom', 158);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(967, 'domo', 'maison', 'nom', 158);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(968, 'du', 'deux', 'nombre', 158);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(969, 'esperi', 'espérer', 'verbe', 158);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(970, 'fantomo', 'fantôme', 'nom', 158);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(971, 'fenestro', 'fenêtre', 'nom', 158);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(972, 'fenestrokovrilo', 'volet', 'nom', 158);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(973, 'horo', 'heure', 'nom', 158);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(974, 'humuro', 'humour', 'nom', 158);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(975, 'iam', 'une fois, un jour', 'pronom', 158);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(976, 'infano', 'enfant', 'nom', 158);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(977, 'kampo', 'champ', 'nom', 158);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(978, 'kanti', 'chanter', 'verbe', 158);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(979, 'kontraŭ', 'contre', 'préposition', 158);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(980, 'kovri', 'couvrir', 'verbe', 158);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(981, 'krii', 'crier, appeler', 'verbe', 158);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(982, 'kuri', 'courir', 'verbe', 158);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(983, 'kuraĝo', 'courage', 'nom', 158);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(984, 'kuraĝa', 'courageux, -euse', 'adj', 158);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(985, 'laca', 'fatigué(e)', 'adj', 158);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(986, 'laŭta', 'haute (voix), fort (bruit, cri), bruyante (conversation)', 'adj', 158);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(987, 'libera', 'libre', 'adj', 158);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(988, 'lito', 'lit', 'nom', 158);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(989, 'ludi', 'jouer', 'verbe', 158);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(990, 'lumo', 'lumière (la ou une)', 'nom', 158);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(991, 'malantaŭ', 'derrière', 'préposition', 158);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(992, 'marŝi|paŝi', 'marcher', 'verbe', 158);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(993, 'monto', 'montagne', 'nom', 158);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(994, 'movi', 'déplacer (quelque chose)', 'verbe', 158);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(995, 'muskolo', 'muscle', 'nom', 158);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(996, 'nek', 'ni', 'adv', 158);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(997, 'nenie', 'nulle part', 'adv', 158);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(998, 'patro', 'père', 'nom', 158);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(999, 'patrino', 'mère', 'nom', 158);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1000, 'plendi', 'se plaindre', 'verbe', 158);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1001, 'plori', 'pleurer', 'verbe', 158);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1002, 'pura', 'propre ; pur(e)', 'adj', 158);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1003, 'roko', 'roc, rocher', 'nom', 158);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1004, 'sinsekve', 'consécutivement', 'adv', 158);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1005, 'situacio', 'situation', 'nom', 158);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1006, 'soni|brui', 'faire du bruit, sonner', 'verbe', 158);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1007, 'suno', 'soleil', 'nom', 158);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1008, 'ŝlosi', 'fermer (à clé)', 'verbe', 158);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1009, 'ŝlosilo', 'clé', 'nom', 158);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1010, 'ŝtono', 'pierre', 'nom', 158);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1011, 'varma', 'chaud(e)', 'adj', 158);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1012, 'veki', 'réveiller (quelqu\'un)', 'verbe', 158);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1013, 'voĉo', 'voix', 'nom', 158);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1014, 'cent', 'cent', 'nombre', 163);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1015, 'ĉefa', 'principal(e), chef', 'adj', 163);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1016, 'ĉokolado', 'chocolat', 'nom', 163);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1017, 'dek', 'dix', 'nombre', 163);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1018, 'dek kvar', 'quatorze', 'nombre', 163);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1019, 'dekstra', 'droit(e) (côté)', 'adj', 163);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1020, 'maldekstra', 'gauche (côté)', 'adj', 163);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1021, 'dolĉa', 'doux ; sucré', 'adj', 163);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1022, 'flanko', 'côté', 'nom', 163);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1023, 'frue', 'tôt, de bonne heure', 'adv', 163);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1024, 'hieraŭ', 'hier', 'adv', 163);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1025, 'kvar', 'quatre', 'nombre', 163);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1026, 'kvardek', 'quarante', 'nombre', 163);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1027, 'kvardek kvar', 'quarante-quatre', 'nombre', 163);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1028, 'magazeno|butiko', 'magasin, boutique', 'nom', 163);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1029, 'mateno', 'matin', 'nom', 163);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1030, 'meblo', 'meuble', 'nom', 163);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1031, 'nazo', 'nez', 'nom', 163);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1032, 'pano', 'pain', 'nom', 163);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1033, 'papero', 'papier', 'nom', 163);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1034, 'plani', 'établir un plan, projeter de', 'verbe', 163);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1035, 'plano', 'plan', 'nom', 163);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1036, 'plenplena', 'complètement plein, rempli', 'adj', 163);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1037, 'poŝto', 'poste (administration de distribution du courrier), courrier', 'nom', 163);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1038, 'raporti', 'rapporter, annoncer', 'verbe', 163);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1039, 'sako', 'sac', 'nom', 163);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1040, 'speco', 'sorte, espèce, genre', 'nom', 163);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1041, 'sporto', 'sport', 'nom', 163);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1042, 'strato', 'rue', 'nom', 163);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1043, 'ŝanco', 'chance', 'nom', 163);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1044, 'tasko', 'tâche, besogne, devoir (scolaire)', 'nom', 163);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1045, 'teo', 'thé', 'nom', 163);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1046, 'vendi', 'vendre', 'verbe', 163);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1047, 'aĉa', 'méprisable, piètre, vil', 'adj', 168);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1048, 'atmosfero', 'atmosphère', 'nom', 168);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1049, 'bonkora', 'qui a bon cœur, charitable', 'adj', 168);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1050, 'bruna', 'marron', 'adj', 168);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1051, 'biero', 'bière', 'nom', 168);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1052, 'finfine', 'finalement, en fin de compte', 'adv', 168);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1053, 'flugi|aviadi', 'voler (oiseau, avion, ...)', 'verbe', 168);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1054, 'fojo', 'fois, occasion', 'nom', 168);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1055, 'tri fojojn', 'trois fois', 'nombre', 168);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1056, 'unufoje', 'une fois', 'nombre', 168);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1057, 'furioza', 'furieux, -euse', 'adj', 168);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1058, 'gratuli', 'féliciter', 'verbe', 168);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1059, 'grupo', 'groupe', 'nom', 168);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1060, 'hundo', 'chien', 'nom', 168);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1061, 'je', 'préposition indéfinie', 'préposition', 168);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1062, 'ĵus', 'à l\'instant, justement', 'préposition', 168);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1063, 'kato', 'chat', 'nom', 168);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1064, 'kelnero', 'serveur, garçon de café', 'nom', 168);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1065, 'kia', 'quel, quelle sorte de', 'adj', 168);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1066, 'koko', 'coq', 'nom', 168);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1067, 'koloro', 'couleur', 'nom', 168);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1068, 'krom', 'sauf, hormis, excepté', 'préposition', 168);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1069, 'kuko', 'gâteau', 'nom', 168);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1070, 'kune', 'ensemble', 'adv', 168);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1071, 'kvin', 'cinq', 'nombre', 168);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1072, 'manĝi', 'manger', 'verbe', 168);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1073, 'menuo', 'menu', 'nom', 168);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1074, 'mil', 'mille', 'nombre', 168);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1075, 'milito', 'guerre', 'nom', 168);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1076, 'militservo', 'service militaire', 'nom', 168);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1077, 'muziko', 'musique', 'nom', 168);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1078, 'noti', 'noter, prendre note', 'verbe', 168);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1079, 'numero', 'numéro (d\'une maison, d\'un ticket, dans une série, etc.)', 'nom', 168);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1080, 'plafono', 'plafond', 'nom', 168);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1081, 'plato', 'plaque', 'nom', 168);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1082, 'pseŭdo-', 'pseudo-', 'préfixe', 168);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1083, 'reala', 'vrai(e), réel(le), véritable', 'adj', 168);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1084, 'rompi', 'rompre, briser, casser', 'verbe', 168);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1085, 'salato', 'salade', 'nom', 168);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1086, 'soldato', 'soldat', 'nom', 168);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1087, 'supo', 'soupe', 'nom', 168);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1088, 'telero', 'assiette', 'nom', 168);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1089, 'turka', 'turc, turque', 'adj', 168);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1090, 'vesti', 'vêtir, habiller, revêtir', 'verbe', 168);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1091, 'aperi', 'apparaître', 'verbe', 173);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1092, 'malaperi', 'disparaître', 'verbe', 173);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1093, 'aliĝi', 'se joindre, adhérer', 'verbe', 173);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1094, 'dek-sepa', 'dix-septième', 'adj', 173);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1095, 'dua', 'second, deuxième', 'adj', 173);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1096, 'edzo|geedzoj', 'époux', 'nom', 173);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1097, 'edzino', 'épouse', 'nom', 173);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1098, 'frato', 'frère', 'nom', 173);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1099, 'fratino', 'sœur', 'nom', 173);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1100, 'gardi', 'garder', 'verbe', 173);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1101, 'sin gardi', 'prendre garde, surveiller, être prudent', 'verbe', 173);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1102, 'singarda', 'prudent', 'adj', 173);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1103, 'historio', 'histoire', 'nom', 173);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1104, 'honesta', 'honnête', 'adj', 173);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1105, 'ia', 'un certain, une espèce de', 'adj', 173);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1106, 'jaro', 'année', 'nom', 173);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1107, 'jarcento', 'siècle', 'nom', 173);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1108, 'kapti', 'capturer', 'verbe', 173);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1109, 'konduki|ŝofori', 'conduire', 'verbe', 173);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1110, 'kontroli', 'vérifier, contrôler', 'verbe', 173);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1111, 'krimo', 'crime', 'nom', 173);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1112, 'kvara', 'quatrième', 'adj', 173);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1113, 'lasta', 'dernier', 'adj', 173);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1114, 'marko', 'marque (tous les sens)', 'nom', 173);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1115, 'mono', 'argent', 'nom', 173);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1116, 'motivo', 'motif, mobile', 'nom', 173);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1117, 'plaĉi', 'plaire, être apprécié', 'verbe', 173);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1118, 'preskaŭ', 'presque', 'adv', 173);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1119, 'pro', 'à cause de, pour', 'préposition', 173);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1120, 'problemo', 'problème', 'nom', 173);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1121, 'riĉa', 'riche', 'adj', 173);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1122, 'rolo', 'rôle', 'nom', 173);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1123, 'sep', 'sept', 'nombre', 173);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1124, 'serĉi', 'chercher', 'verbe', 173);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1125, 'solvi', 'résoudre', 'verbe', 173);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1126, 'suko', 'jus', 'nom', 173);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1127, 'ŝteli', 'voler, dérober', 'verbe', 173);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1128, 'ŝtele', 'par vol ; à la dérobée, furtivement', 'adv', 173);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1129, 'tipo', 'type, modèle', 'nom', 173);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1130, 'tria', 'troisième', 'adj', 173);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1131, 'uzi', 'utiliser', 'verbe', 173);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1132, 'antaŭ longe', 'il y a longtemps', 'adv', 178);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1133, 'aparato', 'appareil', 'nom', 178);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1134, 'baki', 'cuire dans un four', 'verbe', 178);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1135, 'bezoni', 'avoir besoin', 'verbe', 178);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1136, 'brakhorloĝo', 'montre(-bracelet)', 'nom', 178);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1137, 'dokumento', 'document', 'nom', 178);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1138, 'elporti', 'supporter, endurer', 'verbe', 178);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1139, 'filo', 'fils', 'nom', 178);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1140, 'filino', 'fille', 'nom', 178);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1141, 'frukto', 'fruit', 'nom', 178);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1142, 'hejmo', 'maison, domicile (chez soi)', 'nom', 178);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1143, 'hejme', 'à la maison', 'adv', 178);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1144, 'hejmen', 'à la maison (en y allant)', 'adv', 178);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1145, 'horloĝo', 'horloge', 'nom', 178);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1146, 'ĵeti', 'jeter', 'verbe', 178);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1147, 'kasedo', 'cassette', 'nom', 178);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1148, 'legi', 'lire', 'verbe', 178);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1149, 'letero', 'lettre', 'nom', 178);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1150, 'obei', 'obéir', 'verbe', 178);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1151, 'obstina', 'obstiné', 'adj', 178);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1152, 'oranĝo', 'orange', 'nom', 178);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1153, 'pasi', 'passer (quelque part), s\'écouler', 'verbe', 178);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1154, 'li pasas sur la strato', 'il passe dans la rue', 'phrase', 178);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1155, 'kiom da tempo pasis!', 'comme le temps a passé !', 'phrase', 178);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1156, 'pasigi', 'faire passer, passer (du temps)', 'verbe', 178);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1157, 'kiom da tempo mi pasigis ĉe ŝi?', 'combien de temps ai-je passé chez elle ?', 'phrase', 178);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1158, 'plumo', 'stylo, plume', 'nom', 178);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1159, 'pomo', 'pomme', 'nom', 178);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1160, 'preni', 'prendre', 'verbe', 178);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1161, 'principo', 'principe', 'nom', 178);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1162, 'promesi', 'promettre', 'verbe', 178);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1163, 'radio', 'radio', 'nom', 178);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1164, 'sata', 'rassasié', 'adj', 178);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1165, 'malsata', 'affamé, qui a faim', 'adj', 178);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1166, 'malsati', 'être affamé, avoir faim', 'verbe', 178);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1167, 'serpento', 'serpent', 'nom', 178);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1168, 'skribi', 'écrire', 'verbe', 178);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1169, 'suferi', 'souffrir', 'verbe', 178);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1170, 'ŝanĝi', 'changer (quelque chose)', 'verbe', 178);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1171, 'ŝanĝiĝi', 'changer (devenir différent)', 'verbe', 178);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1172, 'ŝiri', 'déchirer, arracher', 'verbe', 178);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1173, 'terura', 'terrible, horrible', 'adj', 178);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1174, 'tial', 'c\'est pourquoi, à cause de cela', 'adj', 178);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1175, 'amatoro', 'amateur', 'nom', 188);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1176, 'aŭskulti', 'écouter', 'verbe', 188);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1177, 'bonvena', 'bienvenu(e)', 'adj', 188);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1178, 'celo', 'but, objectif', 'nom', 188);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1179, 'ĉiu', 'tout, chaque ; tout le monde', 'adj', 188);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1180, 'digna', 'digne, vénérable', 'adj', 188);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1181, 'diversa', 'varié(e), divers(e)', 'adj', 188);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1182, 'dubi', 'douter, avoir des doutes', 'verbe', 188);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1183, 'emo', 'penchant, goût, inclination', 'nom', 188);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1184, 'esplori', 'examiner, étudier', 'verbe', 188);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1185, 'esploro', 'recherche, investigation', 'nom', 188);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1186, 'kisi', 'embrasser', 'verbe', 188);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1187, 'kondiĉo', 'condition', 'nom', 188);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1188, 'kovri', 'couvrir', 'verbe', 188);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1189, 'malkovri', 'découvrir (tous les sens)', 'verbe', 188);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1190, 'necesa', 'nécessaire', 'adj', 188);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1191, 'nigra', 'noir(e)', 'adj', 188);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1192, 'onklo', 'oncle', 'nom', 188);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1193, 'onklino', 'tante', 'nom', 188);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1194, 'prezenti', 'présenter, introduire', 'verbe', 188);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1195, 'salti', 'sauter', 'verbe', 188);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1196, 'savi', 'sauver', 'verbe', 188);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1197, 'seruro', 'serrure', 'nom', 188);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1198, 'ses', 'six', 'nombre', 188);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1199, 'streĉi', 'tendre, serrer', 'verbe', 188);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1200, 'sub', 'sous', 'préposition', 188);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1201, 'teni', 'tenir', 'verbe', 188);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1202, 'sin teni', 'se tenir, se comporter', 'verbe', 188);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1203, 'sinteno', 'attitude, comportement', 'nom', 188);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1204, 'traduki', 'traduire', 'verbe', 188);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1205, 'trans', 'au-delà de, par-delà, par-dessus', 'préposition', 188);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1206, 'verda', 'vert(e)', 'adj', 188);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1207, 'viziti', 'visiter', 'verbe', 188);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1208, 'adiaŭ', 'adieu', 'phrase', 193);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1209, 'alpreni|preni', 'prendre', 'verbe', 193);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1210, 'aresti', 'arrêter', 'verbe', 193);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1211, 'bando', 'bande, gang', 'nom', 193);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1212, 'bileto', 'billet, ticket', 'nom', 193);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1213, 'botelo', 'bouteille', 'nom', 193);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1214, 'Budho', 'Bouddha', 'nom', 193);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1215, 'detalo', 'détail', 'nom', 193);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1216, 'difini', 'définir, déterminer', 'verbe', 193);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1217, 'elito', 'élite', 'nom', 193);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1218, 'enamiĝi', 'tomber amoureux', 'verbe', 193);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1219, 'filozofio', 'philosophie', 'nom', 193);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1220, 'firma', 'ferme, qui tient bien', 'adj', 193);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1221, 'flughaveno', 'aéroport', 'nom', 193);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1222, 'foto', 'photo', 'nom', 193);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1223, 'harmonio', 'harmonie', 'nom', 193);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1224, 'haveno', 'port', 'nom', 193);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1225, 'indiki', 'indiquer', 'verbe', 193);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1226, 'insulo', 'île', 'nom', 193);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1227, 'islamo', 'Islam', 'nom', 193);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1228, 'jen... jen...', 'tantôt… tantôt…, des fois… des fois…', 'adv', 193);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1229, 'judo', 'juif', 'nom', 193);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1230, 'katoliko', 'catholique', 'nom', 193);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1231, 'kaverno', 'caverne', 'nom', 193);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1232, 'kolbaso', 'saucisse, saucisson', 'nom', 193);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1233, 'konstante', 'constamment', 'adv', 193);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1234, 'kopio', 'copie', 'nom', 193);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1235, 'lakto', 'lait', 'nom', 193);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1236, 'lando', 'pays', 'nom', 193);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1237, 'libro', 'livre', 'nom', 193);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1238, 'lui', 'louer, prendre en location', 'verbe', 193);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1239, 'membro', 'membre', 'nom', 193);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1240, 'morala', 'moral(e)', 'adj', 193);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1241, 'naski', 'mettre au monde, enfanter', 'verbe', 193);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1242, 'naskiĝi', 'naître', 'verbe', 193);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1243, 'ortodoksa', 'orthodoxe', 'adj', 193);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1244, 'persekuti', 'persécuter', 'verbe', 193);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1245, 'popolo', 'peuple', 'nom', 193);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1246, 'protestanto', 'protestant', 'nom', 193);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1247, 'regiono', 'région', 'nom', 193);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1248, 'religio', 'religion', 'nom', 193);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1249, 'signalo', 'signal', 'nom', 193);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1250, 'sindonema', 'dévoué(e)', 'adj', 193);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1251, 'societo', 'association, société', 'nom', 193);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1252, 'ŝtato', 'état (peuple ou pays organisé politiquement)', 'nom', 193);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1253, 'trezoro', 'trésor', 'nom', 193);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1254, 'valori', 'valoir, avoir une (certaine) valeur', 'verbe', 193);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1255, 'valoro', 'valeur', 'nom', 193);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1256, 'aviadi|flugi', 'voler (en avion)', 'verbe', 198);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1257, 'aviadilo', 'avion', 'nom', 198);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1258, 'danci', 'danser', 'verbe', 198);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1259, 'familio', 'famille', 'nom', 198);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1260, 'gardostari', 'monter la garde', 'verbe', 198);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1261, 'hodiaŭ', 'aujourd\'hui', 'adv', 198);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1262, 'kosti', 'coûter', 'verbe', 198);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1263, 'maro', 'mer', 'nom', 198);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1264, 'morgaŭ', 'demain', 'adv', 198);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1265, 'multekosta', 'cher, chère', 'adj', 198);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1266, 'pagi', 'payer', 'verbe', 198);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1267, 'parto', 'partie', 'nom', 198);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1268, 'prepari', 'préparer', 'verbe', 198);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1269, 'rimedo', 'moyen, ressource, remède', 'nom', 198);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1270, 'supre', 'en-haut', 'préposition', 198);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1271, 'malsupre', 'en-bas', 'préposition', 198);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1272, 'supren', 'vers le haut (direction)', 'préposition', 198);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1273, 'malsupren', 'vers le bas (direction)', 'préposition', 198);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1274, 'ŝipo', 'bateau', 'nom', 198);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1275, 'temperaturo', 'température', 'nom', 198);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1276, 'tendo', 'tente', 'nom', 198);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1277, 'tero', 'terre, sol', 'nom', 198);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1278, 'vetero', 'temps (météo)', 'nom', 198);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1279, 'vojaĝi', 'voyager', 'verbe', 198);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1280, 'angla', 'anglais', 'adj', 203);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1281, 'desegni', 'dessiner, tracer', 'verbe', 203);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1282, 'desegno', 'dessin, tracé', 'nom', 203);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1283, 'ilo', 'instrument, outil, ustensile', 'nom', 203);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1284, 'kavo', 'cavité, trou', 'nom', 203);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1285, 'kies', 'à qui ? dont, de qui, duquel, de laquelle, desquel(le)s', 'adv', 203);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1286, 'kofro', 'coffre, malle', 'nom', 203);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1287, 'kontraŭ', 'contre', 'préposition', 203);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1288, 'korko', 'liège, bouchon (bouteille)', 'nom', 203);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1289, 'literaturo', 'littérature', 'nom', 203);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1290, 'protekti', 'protéger', 'verbe', 203);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1291, 'signo', 'signe', 'nom', 203);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1292, 'telefono', 'téléphone', 'nom', 203);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1293, 'tiri', 'tirer', 'verbe', 203);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1294, 'apliki', 'appliquer (sur quelque chose ou à quelque chose)', 'verbe', 208);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1295, 'biblioteko', 'bibliothèque', 'nom', 208);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1296, 'ĉesi', 'cesser, s\'arrêter de faire quelque chose', 'verbe', 208);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1297, 'defendi|protekti', 'défendre, protéger', 'verbe', 208);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1298, 'fundo', 'fond', 'nom', 208);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1299, 'ĝenerala', 'général(e)', 'adj', 208);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1300, 'ĝisfunde', 'parfaitement, totalement (litt.: jusqu\'au fond)', 'adv', 208);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1301, 'hazardo', 'hasard', 'nom', 208);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1302, 'hazarde', 'par hasard', 'adv', 208);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1303, 'hospitalo', 'hôpital', 'nom', 208);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1304, 'influo', 'influence', 'nom', 208);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1305, 'injekti', 'injecter', 'verbe', 208);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1306, 'institucio', 'institution', 'nom', 208);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1307, 'justa', 'juste, équitable', 'adj', 208);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1308, 'kirurgio', 'chirurgie (science, pratique)', 'nom', 208);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1309, 'koncerna', 'concerné(e)', 'adj', 208);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1310, 'konsisti', 'consister (en), se composer (de)', 'verbe', 208);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1311, 'konstati', 'constater (que)', 'verbe', 208);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1312, 'materio', 'matière', 'nom', 208);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1313, 'metodo', 'méthode', 'nom', 208);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1314, 'monato', 'mois', 'nom', 208);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1315, 'muzeo', 'musée', 'nom', 208);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1316, 'narkoanalizo', 'narco-analyse', 'nom', 208);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1317, 'operacio', 'operation', 'nom', 208);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1318, 'paĝo', 'page', 'nom', 208);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1319, 'praktiko', 'pratique', 'nom', 208);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1320, 'privata', 'privé(e)', 'adj', 208);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1321, 'proksimume', 'approximativement', 'adv', 208);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1322, 'renkonti', 'rencontrer (quelqu\'un)', 'verbe', 208);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1323, 'renkontiĝi', 'se rencontrer, se réunir', 'verbe', 208);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1324, 'respekti', 'respecter', 'verbe', 208);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1325, 'sankta', 'saint(e), sacré(e)', 'adj', 208);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1326, 'solena', 'solennel(le)', 'adj', 208);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1327, 'spirito', 'esprit', 'nom', 208);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1328, 'studi', 'étudier', 'verbe', 208);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1329, 'Vatikano', 'Vatican', 'nom', 208);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1330, 'Dio', 'Dieu', 'nom', 213);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1331, 'estimi', 'estimer', 'verbe', 213);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1332, 'farti', 'se porter (bien ou mal)', 'verbe', 213);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1333, 'insisti', 'insister', 'verbe', 213);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1334, 'inviti', 'inviter', 'verbe', 213);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1335, 'kadro', 'cadre, structure', 'nom', 213);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1336, 'kolego', 'collègue', 'nom', 213);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1337, 'komenti', 'commenter', 'verbe', 213);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1338, 'kurso', 'cours (d\'un professeur)', 'nom', 213);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1339, 'organizi', 'organiser', 'verbe', 213);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1340, 'paperujo', 'malette, cartable', 'nom', 213);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1341, 'pluraj', 'plusieurs', 'adj', 213);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1342, 'rifuzi', 'refuser', 'verbe', 213);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1343, 'stato', 'état, condition, manière d\'être, position', 'nom', 213);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1344, 'teksto', 'texte', 'nom', 213);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1345, 'kie', 'où', 'pronom', 3);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1346, 'jen', 'voici', 'adv', 3);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1347, 'kiel', 'comment, comme', 'pronom', 221);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1348, 'tiel', 'ainsi, comme ça', 'adv', 221);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1349, 'dato', 'date', 'nom', 271);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1350, 'hodiaŭ', 'aujourd\'hui', 'adv', 271);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1351, 'morgaŭ', 'demain', 'adv', 271);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1352, 'hieraŭ', 'hier', 'adv', 271);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1353, 'lundo', 'lundi', 'nom', 271);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1354, 'mardo', 'mardi', 'nom', 271);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1355, 'merkredo', 'mercredi', 'nom', 271);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1356, 'ĵaŭdo', 'jeudi', 'nom', 271);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1357, 'vendredo', 'vendredi', 'nom', 271);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1358, 'sabato', 'samedi', 'nom', 271);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1359, 'dimanĉo', 'dimanche', 'nom', 271);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1360, 'januaro', 'janvier', 'nom', 271);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1361, 'februaro', 'février', 'nom', 271);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1362, 'marto', 'mars', 'nom', 271);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1363, 'aprilo', 'avril', 'nom', 271);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1364, 'majo', 'mai', 'nom', 271);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1365, 'junio', 'juin', 'nom', 271);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1366, 'julio', 'juillet', 'nom', 271);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1367, 'aŭgusto', 'août', 'nom', 271);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1368, 'septembro', 'septembre', 'nom', 271);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1369, 'oktobro', 'octobre', 'nom', 271);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1370, 'novembro', 'novembre', 'nom', 271);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1371, 'decembro', 'décembre', 'nom', 271);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1372, 'iu', 'quelqu\'un', 'pronom', 38);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1373, 'kio', 'quoi, que', 'pronom', 274);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1374, 'tio', 'ce, cela, ça', 'pronom', 274);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1375, 'kiom da', 'combien de', 'pronom', 27);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1376, 'neniam', 'jamais', 'adv', 13);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1377, 'nenio', 'rien', 'pronom', 13);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1378, 'nenie', 'nulle part', 'adv', 13);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1379, 'neniu', 'personne', 'pronom', 13);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1380, 'kato', 'chat', 'nom', 276);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1381, 'ĉiu', 'chaque, chacun', 'adj', 44);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1382, 'tiu', 'ce, cet(te)', 'adj', 44);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1383, 'kial', 'pourquoi', 'adj', 44);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1384, 'tie', 'ici, là', 'adv', 44);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1385, 'tiam', 'à ce moment là, alors', 'adj', 44);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1386, 'iam', 'à un moment, un jour, une fois', 'adj', 44);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1387, 'neniom', 'aucun', 'adj', 44);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1388, 'kies', 'de qui, à qui, dont, duquel', 'adj', 44);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1389, 'ties', 'de celui-là, à celui-là', 'adj', 44);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1390, 'nenies', 'de personne', 'adj', 44);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1391, 'ĉies', 'de chacun, de tout le monde', 'adj', 44);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1392, 'sub', 'sous, en-dessous de', 'préposition', 276);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1393, 'sur', 'sur', 'préposition', 276);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1394, 'super', 'au-dessus de, par-dessus', 'préposition', 276);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1395, 'floro', 'fleur', 'nom', 276);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1396, 'suno', 'soleil', 'nom', 276);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1397, 'tablo', 'table', 'nom', 276);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1398, 'arbo', 'arbre', 'nom', 276);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1399, 'biciklo', 'vélo', 'nom', 276);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1400, 'flugi|aviadi', 'voler (oiseau, avion, ...)', 'verbe', 276);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1401, 'pluvo', 'pluie', 'nom', 276);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1402, 'ĝardeno', 'jardin', 'nom', 38);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1403, 'kastelo', 'château', 'nom', 57);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1404, 'marŝi|paŝi', 'marcher', 'verbe', 57);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1405, 'ĉapelo', 'chapeau', 'nom', 57);
INSERT INTO vortoj (id, eo, fr, tipo, lecionero_id) VALUES(1406, 'vojo', 'chemin, route', 'nom', 57);


ALTER TABLE ekzerceroj
  ADD PRIMARY KEY (`id`);

ALTER TABLE ekzercoj
  ADD PRIMARY KEY (`id`);

ALTER TABLE eraraj_lecionoj
  ADD PRIMARY KEY (`id`);

ALTER TABLE komentoj
  ADD PRIMARY KEY (`id`);

ALTER TABLE korektebla_kurso
  ADD KEY `korektanto` (`korektanto`,`kurso`);

ALTER TABLE kursoj
  ADD PRIMARY KEY (`id`);

ALTER TABLE landoj
  ADD PRIMARY KEY (`id`);

ALTER TABLE lecioneroj
  ADD PRIMARY KEY (`id`);

ALTER TABLE lecionoj
  ADD PRIMARY KEY (`id`);

ALTER TABLE monatoj
  ADD PRIMARY KEY (`id`);

ALTER TABLE nuna_kurso
  ADD PRIMARY KEY (`id`);

ALTER TABLE personoj
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `enirnomo` (`enirnomo`);

ALTER TABLE personoj_lecioneroj
  ADD PRIMARY KEY (`id`),
  ADD KEY `persono_index` (`persono_id`);

ALTER TABLE personoj_lecionoj
  ADD PRIMARY KEY (`id`);

ALTER TABLE personoj_vortoj
  ADD PRIMARY KEY (`id`),
  ADD KEY `persono_index` (`persono_id`),
  ADD KEY `vorto_index` (`vorto_id`);

ALTER TABLE personoj_vortoj_respondoj
  ADD KEY `vorto_index` (`vorto_id`);

ALTER TABLE protokolo
  ADD PRIMARY KEY (`id`),
  ADD KEY `ip` (`ip`),
  ADD KEY `kategorio` (`kategorio`);

ALTER TABLE rajtoj
  ADD PRIMARY KEY (`id`);

ALTER TABLE respondoj
  ADD PRIMARY KEY (`id`);

ALTER TABLE takso_leciono
  ADD PRIMARY KEY (`id`);

ALTER TABLE vortoj
  ADD PRIMARY KEY (`id`);


ALTER TABLE ekzerceroj
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
ALTER TABLE ekzercoj
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
ALTER TABLE eraraj_lecionoj
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6338;
ALTER TABLE komentoj
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13006;
ALTER TABLE kursoj
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
ALTER TABLE landoj
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=376;
ALTER TABLE lecioneroj
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=280;
ALTER TABLE lecionoj
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=133;
ALTER TABLE monatoj
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
ALTER TABLE nuna_kurso
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8149;
ALTER TABLE personoj
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9093;
ALTER TABLE personoj_lecioneroj
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17219;
ALTER TABLE personoj_lecionoj
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1676;
ALTER TABLE personoj_vortoj
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66657;
ALTER TABLE protokolo
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=170278;
ALTER TABLE rajtoj
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
ALTER TABLE respondoj
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41451;
ALTER TABLE takso_leciono
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1680;
ALTER TABLE vortoj
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1407;