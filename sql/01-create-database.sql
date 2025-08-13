/*!40101 SET NAMES utf8mb4 */;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";

CREATE TABLE ekzerceroj (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ekzerco_id` int(11) NOT NULL,
  `kodo` varchar(10) NOT NULL,
  `numero` int(11) NOT NULL,
  `demando` text NOT NULL,
  `respondmodelo` TEXT,
  `respondo` text,
  `normaligita` text,
  `bildo` varchar(64) NOT NULL,
  `forigita` tinyint(1) NOT NULL DEFAULT '0',
  `korektebla` tinyint(1) NOT NULL DEFAULT '0',
  `poentoj` INT(11),
  PRIMARY KEY (id)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE ekzercoj (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `komando` text NOT NULL,
  `lecionero_id` int(11) NOT NULL,
  `komando_detalo` text,
  `ekzemplo` text,
  `typo` enum('traduko-1','traduko-2','traduko-3','verkado-1','verkado-2','verkado-3','verkado-4','verkado-5','verkado-6','stelo-1','stelo-2','truoj-1','truoj-2','kompletigu','ordigu','elektu') NOT NULL,
  `x2u` tinyint(1) NOT NULL,
  `korektebla` tinyint(1) NOT NULL,
  PRIMARY KEY (id)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE `eventoj` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `persono_id` int(11) NOT NULL,
  `komenco` date NOT NULL,
  `fino` date DEFAULT NULL,
  `tipo` enum('France','Europe','Ailleurs','Événements mondiaux') NOT NULL,
  `priskribo` text NOT NULL,
  `lando` varchar(100) NOT NULL,
  `departemento` int(11) DEFAULT NULL,
  `url` text NOT NULL,
  `mail` text NOT NULL,
  PRIMARY KEY (id)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE komentoj (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `studanto` int(11) NOT NULL DEFAULT '0',
  `korektanto` int(11) NOT NULL DEFAULT '0',
  `dato` date NOT NULL DEFAULT '0000-00-00',
  `teksto` text,
  PRIMARY KEY (id)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE korektebla_kurso (
  `korektanto` int(11) NOT NULL DEFAULT '0',
  `kurso` char(2) CHARACTER SET latin1 NOT NULL DEFAULT '',
  `kiom_lernantoj` int(11) NOT NULL DEFAULT '3'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE kursoj (
  `id` int(11) NOT NULL,
  `kodo` char(2) CHARACTER SET latin1 NOT NULL DEFAULT '',
  `nomo` varchar(64)NOT NULL DEFAULT '',
  PRIMARY KEY (id)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE landoj (
  `id` int(11) NOT NULL,
  `kodo` varchar(2) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `nomo` varchar(64) CHARACTER SET utf8 NOT NULL DEFAULT '',
  PRIMARY KEY (id)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


CREATE TABLE `lecioneroj` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `leciono_id` int(11) DEFAULT NULL,
  `titolo` text,
  `tipo` enum('VORTARO','QCM','TEKSTO','EKZERCARO') DEFAULT NULL,
  `enhavo` text,
  `ordo` int(11) DEFAULT NULL,
  `unua` tinyint(1) NOT NULL DEFAULT '0',
  `lasta` tinyint(1) NOT NULL DEFAULT '0',
  `dauxro` int(11) DEFAULT NULL,
  `android` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (id)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE lecionoj (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `numero` int(11) NOT NULL DEFAULT '0',
  `titolo` varchar(64) CHARACTER SET utf8 DEFAULT NULL,
  `retpagxo` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `kurso` varchar(2) CHARACTER SET utf8 NOT NULL DEFAULT '0',
  `unua` tinyint(1) NOT NULL DEFAULT '0',
  `lasta` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (id)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


CREATE TABLE legitajxoj (
    id INT PRIMARY KEY AUTO_INCREMENT,
    
    -- Clés étrangères vers les tables principales
    persono_id INT(11) NOT NULL,
    teksto_id VARCHAR(64) NOT NULL,
    
    -- Horodatage de la session de lecture
    komenc_timestamp DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    fin_timestamp DATETIME NULL,
    
    -- Temps passé à la lecture (en secondes)
    legad_tempo INT NULL COMMENT 'Temps de lecture en secondes',
    
    -- Évaluation et commentaires
    noto TINYINT NULL COMMENT 'Note de 1 à 5',
    komentaro TEXT NULL COMMENT 'Commentaires libres de l\'utilisateur',
    
    -- Métadonnées
    kreita_je DATETIME DEFAULT CURRENT_TIMESTAMP,
    modifita_je DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    
    -- Contraintes (temporairement désactivées pour diagnostic)
    -- FOREIGN KEY (persono_id) REFERENCES personoj(id) ON DELETE CASCADE,
    -- FOREIGN KEY (teksto_id) REFERENCES tekstoj(id) ON DELETE CASCADE,
    
    -- Index pour optimiser les requêtes
    INDEX idx_persono_teksto (persono_id, teksto_id),
    INDEX idx_komenc_timestamp (komenc_timestamp),
    INDEX idx_noto (noto),
    
    -- Contrainte d'unicité si on veut éviter les doublons
    UNIQUE KEY unique_persono_teksto_session (persono_id, teksto_id, komenc_timestamp)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE monatoj (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kodo` varchar(2) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `nomo` varchar(64) CHARACTER SET utf8 NOT NULL DEFAULT '',
  PRIMARY KEY (id)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


CREATE TABLE nuna_kurso (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ekdato` date NOT NULL DEFAULT '0000-00-00',
  `findato` date DEFAULT NULL,
  `stato` enum('N','K','F','H') CHARACTER SET latin1 NOT NULL DEFAULT 'N',
  `lastdato` date NOT NULL DEFAULT '0000-00-00',
  `korektanto` int(11) NOT NULL DEFAULT '0',
  `pasintakorektanto` int(11) DEFAULT NULL,
  `studanto` int(11) NOT NULL DEFAULT '0',
  `nunleciono` int(11) DEFAULT NULL,
  `kurso` char(2) CHARACTER SET latin1 DEFAULT NULL,
  PRIMARY KEY (id)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE personoj (
  `id` int(11) NOT NULL AUTO_INCREMENT,
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
  `pasvorto_md5` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `saviezvous` int NOT NULL DEFAULT '0',
  PRIMARY KEY (id)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci PACK_KEYS=0;

CREATE TABLE personoj_lecioneroj (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ekdato` TIMESTAMP NULL,
  `dato` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `persono_id` int(11) NOT NULL,
  `lecionero_id` int(11) NOT NULL,
  `poentoj` int(11) DEFAULT '0',
  PRIMARY KEY (id)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE personoj_lecionoj (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dato` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `persono_id` int(11) NOT NULL,
  `leciono_id` int(11) NOT NULL,
  `komentario` text,
  `enkonduko` text,
  `konkludo` text,
  `korektita` TINYINT(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (id)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE personoj_vortoj (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `persono_id` int(11) NOT NULL,
  `vorto_id` int(11) NOT NULL,
  `nombrilo` int(11) NOT NULL,
  `venontaFojo` datetime NOT NULL,
  `lastfojo` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (id)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE personoj_vortoj_respondoj (
  `persono_id` int(11) NOT NULL,
  `vorto_id` int(11) NOT NULL,
  `dato` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `bona` tinyint(1) NOT NULL,
  `respondo` varchar(128) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE protokolo (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `persono_id` int(11) DEFAULT NULL,
  `horo` datetime DEFAULT NULL,
  `ip` varchar(32) CHARACTER SET latin1 DEFAULT NULL,
  `kategorio` varchar(32) CHARACTER SET latin1 DEFAULT NULL,
  `teksto` text CHARACTER SET utf8,
  PRIMARY KEY (id)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE rajtoj (
  `id` int(11) NOT NULL,
  `kodo` char(3) CHARACTER SET latin1 NOT NULL DEFAULT '',
  `nomo` varchar(64) CHARACTER SET latin1 NOT NULL DEFAULT '',
  PRIMARY KEY (id)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


CREATE TABLE respondoj (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dato` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `persono_id` int(11) NOT NULL,
  `lecionero_id` int(11),
  `ekzercero_id` int(11) DEFAULT NULL,
  `kodo` varchar(40) DEFAULT NULL,
  `komando` text,
  `demando` text,
  `respondo` text,
  `normaligita` text,
  `forigita` tinyint(1) NOT NULL DEFAULT '0',
  `gxusta` tinyint(1) DEFAULT NULL,
  `korekto` TEXT NULL,
  PRIMARY KEY (id)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE takso_leciono (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dato` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `persono_id` int(11) NOT NULL,
  `leciono_id` int(11) NOT NULL,
  `intereso` int(11) NOT NULL,
  `malfacileco` int(11) NOT NULL,
  `komento` text NOT NULL,
  PRIMARY KEY (id)
) ENGINE = InnoDB CHARSET=utf8_unicode_ci;

CREATE TABLE tekstoj (
  `id` VARCHAR(64) NOT NULL , 
  `ekdato` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `titolo` VARCHAR(1024) NOT NULL , 
  `auxtoro` VARCHAR(128) NOT NULL , 
  `fonto` VARCHAR(1024) NULL , 
  `sono` VARCHAR(1024) NULL,
  `leganto` VARCHAR(1024) NULL,
  `nivelo` INT NULL , 
  `vortoj` INT NULL , 
  `kolekto` VARCHAR(64) NULL , 
  `etikedoj` VARCHAR(1024) NULL, 
  `enhavo` MEDIUMTEXT NULL,
  `aktiva` TINYINT NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

ALTER TABLE `tekstoj`
  ADD PRIMARY KEY (`id`);

CREATE TABLE vortoj (
  `id` int(11) NOT NULL AUTO_INCREMENT, 
  `eo` varchar(128) NOT NULL,
  `fr` varchar(128) NOT NULL,
  `tipo` enum('adj','adv','conjonction','expression','interjection','nom','nombre','phrase','pronom','préfixe','préposition','verbe') DEFAULT NULL,
  `lecionero_id` int(11) NOT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


ALTER TABLE personoj
  ADD UNIQUE KEY `enirnomo` (`enirnomo`);

ALTER TABLE personoj_lecioneroj
  ADD KEY `persono_index` (`persono_id`);

ALTER TABLE personoj_vortoj
  ADD KEY `persono_index` (`persono_id`),
  ADD KEY `vorto_index` (`vorto_id`);

ALTER TABLE personoj_vortoj_respondoj
  ADD KEY `vorto_index` (`vorto_id`);

ALTER TABLE protokolo
  ADD KEY `ip` (`ip`),
  ADD KEY `kategorio` (`kategorio`);
