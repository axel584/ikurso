-- on vide les tables avant :
TRUNCATE personoj_lecioneroj;
TRUNCATE komentoj;
TRUNCATE korektebla_kurso;
TRUNCATE nuna_kurso;
TRUNCATE personoj;
TRUNCATE personoj_lecionoj;
TRUNCATE personoj_vortoj;
TRUNCATE personoj_vortoj_respondoj;
TRUNCATE protokolo;
TRUNCATE respondoj;

-- creation d'un administrateur (administranto/test)
INSERT INTO `personoj` (`ekdato`, `enirnomo`, `retadreso`, `rajtoj`,  `aktivigita`, `pasvorto_md5`) VALUES (now(), 'administranto', 'administranto@mailinator.com', 'A', 1, md5('test'));

-- creation d'un correcteur pour le cours en 10 leçons qui accepte 3 élèves pour ce cours (korektanto/test)
INSERT INTO `personoj` (`ekdato`, `enirnomo`, `retadreso`, `rajtoj`,  `aktivigita`, `pasvorto_md5`) VALUES (now(), 'korektanto1', 'korektanto1@mailinator.com', 'K', 1, md5('test'));
SET @id_korektanto_1 = LAST_INSERT_ID();
INSERT INTO `korektebla_kurso` (`korektanto`, `kurso`, `kiom_lernantoj`) VALUES (@id_korektanto_1, 'CG', 3);


-- creation d'un eleve qui s'est inscrit et qui a rempli sa première leçon du CGE (mais qui n'a pas encore de correcteur)
INSERT INTO `personoj` (`ekdato`, `enirnomo`, `retadreso`, `rajtoj`,  `aktivigita`, `pasvorto_md5`) VALUES (now(), 'lernanto1', 'lernanto1@mailinator.com', 'P', 1, md5('test'));
SET @id_lernanto_1 = LAST_INSERT_ID();
INSERT INTO `personoj_lecioneroj` (`persono_id`, `lecionero_id`, `poentoj`) VALUES (@id_lernanto_1, 1,0);
INSERT INTO `personoj_lecioneroj` (`persono_id`, `lecionero_id`, `poentoj`) VALUES (@id_lernanto_1, 2,0);
INSERT INTO `personoj_lecioneroj` (`persono_id`, `lecionero_id`, `poentoj`) VALUES (@id_lernanto_1, 3,0);
INSERT INTO `personoj_lecioneroj` (`persono_id`, `lecionero_id`, `poentoj`) VALUES (@id_lernanto_1, 4,0);
INSERT INTO `personoj_lecioneroj` (`persono_id`, `lecionero_id`, `poentoj`) VALUES (@id_lernanto_1, 5,0);
INSERT INTO `personoj_lecioneroj` (`persono_id`, `lecionero_id`, `poentoj`) VALUES (@id_lernanto_1, 6,0);

INSERT INTO `respondoj` (`persono_id`, `ekzercero_id`,`respondo`,`normaligita`,`gxusta`) VALUES (@id_lernanto_1, 1 ,'la teo estas varma','normaligita',1);
INSERT INTO `respondoj` (`persono_id`, `ekzercero_id`,`respondo`,`normaligita`,`gxusta`) VALUES (@id_lernanto_1, 2 ,'via biskvito estas seka','via biskvito estas seka',1);
INSERT INTO `respondoj` (`persono_id`, `ekzercero_id`,`respondo`,`normaligita`,`gxusta`) VALUES (@id_lernanto_1, 3 ,'via amiko estis bela','via amiko estis bela',1);
INSERT INTO `respondoj` (`persono_id`, `ekzercero_id`,`respondo`,`normaligita`,`gxusta`) VALUES (@id_lernanto_1, 3 ,'la novaj instruistoj estos grandaj','la novaj instruistoj estos grandaj',1);


