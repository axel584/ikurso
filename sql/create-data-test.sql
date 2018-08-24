-- creation d'un administrateur (administranto/test)
INSERT INTO `personoj` (`ekdato`, `enirnomo`, `retadreso`, `rajtoj`,  `aktivigita`, `pasvorto_md5`) VALUES (now(), 'administranto', 'administranto@mailinator.com', 'A', 1, md5('test'));

-- creation d'un correcteur pour le cours en 10 leçons qui accepte 3 élèves pour ce cours (korektanto/test)
INSERT INTO `personoj` (`ekdato`, `enirnomo`, `retadreso`, `rajtoj`,  `aktivigita`, `pasvorto_md5`) VALUES (now(), 'korektanto', 'korektanto@mailinator.com', 'K', 1, md5('test'));
SET @id_korektanto = LAST_INSERT_ID();
INSERT INTO `korektebla_kurso` (`korektanto`, `kurso`, `kiom_lernantoj`) VALUES (@id_korektanto, 'CG', 3);


