-- Pour passer en V1 :

-- supprime les lignes "non française"
delete from personoj where lingvo!='fr';

ALTER TABLE demandaro CONVERT TO CHARACTER SET utf8;
ALTER TABLE eraraj_lecionoj CONVERT TO CHARACTER SET utf8;

-- suppression des tables mw_
DROP TABLE `mw_archive`, `mw_categorylinks`, `mw_groups`, `mw_hitcounter`, `mw_image`, `mw_imagelinks`, `mw_interwiki`, `mw_ipblocks`, `mw_logging`, `mw_math`, `mw_objectcache`, `mw_oldimage`, `mw_page`, `mw_pagelinks`, `mw_querycache`, `mw_recentchanges`, `mw_revision`, `mw_searchindex`, `mw_site_stats`, `mw_text`, `mw_user`, `mw_user_groups`, `mw_user_rights`, `mw_validate`, `mw_watchlist`;
-- suppression des tables wikipedias :
DROP TABLE `wikiarchive`, `wikicategorylinks`, `wikiexternallinks`, `wikihitcounter`, `wikiimage`, `wikiimagelinks`, `wikiinterwiki`, `wikiipblocks`, `wikijob`, `wikilogging`, `wikimath`, `wikiobjectcache`, `wikioldimage`, `wikipage`, `wikipagelinks`, `wikiquerycache`, `wikirecentchanges`, `wikirevision`, `wikisearchindex`, `wikisite_stats`, `wikitemplatelinks`, `wikitext`, `wikitrackbacks`, `wikitranscache`, `wikiuser`, `wikiuser_groups`, `wikiuser_newtalk`, `wikivalidate`, `wikiwatchlist`;

ALTER TABLE  `protokolo` CHANGE  `teksto`  `teksto` TEXT CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL


-- Pour passer en V2 :
delete from kursoj where lingvo<>'FR';
delete from landoj where lingvo<>'FR';
delete from lecionoj where lingvo<>'FR';
delete from monatoj where lingvo<>'FR';
delete from personoj where lingvo<>'FR';
delete from protokolo where lingvo<>'FR';
delete from rajtoj where lingvo<>'FR';

ALTER TABLE kursoj DROP lingvo;
ALTER TABLE landoj DROP lingvo;
ALTER TABLE lecionoj DROP lingvo;
ALTER TABLE monatoj DROP lingvo;
ALTER TABLE protokolo DROP lingvo;
ALTER TABLE rajtoj DROP lingvo;
ALTER TABLE personoj CHANGE `ekdato` `ekdato` DATE NOT NULL;
ALTER TABLE personoj CHANGE `naskigxdato` `naskigxdato` DATE DEFAULT NULL;
Drop table lingvoj;


-- pour passer en V3
update `personoj` set naskigxdato=NULL where id in (10,1683,1681,147,92,96,731,116,117,222,121,122,124,156,189,171,190,236,239,277,289,290,469,307,311,314,317,329,330,342,361,375,395,397,402,411,416,432,435,443,505,453,467,471,472,486,1326,526,516,520,523,527,533,547,549,564,578,2213,592,591,609,619,625,633,639,642,650,662,667,679,716,717,735,747,760,771,777,788,794,804,806,831,833,836,841,846,864,858,859,865,870,873,875,876,879,881,894,923,941,1141,960,963,1140,968,983,987,988,990,999,1011,1020,1025,1037,1040,1052,1054,1060,1061,1138,6939,1137,1096,1101,1103,1105,1113,1114,1120,1123,1124,1129,1134,1135,1145,1146,1147,1148,1149,1155,1156,1157,1167,1168,1169,1175,1176,1179,1180,1199,1187,1189,1192,1202,2786,1213,1220,1232,1251,1256,1259,1263,1264,1283,1293,1301,1302,1303,1307,1309,1314,1320,1329,1332,1351,1353,1354,1367,1394,1422,1447,1451,1460,1463,1471,1482,1494,1525,1519,1547,1566,1568,2628,2631,1579,1585,1586,1593,1594,1601,1612,1623,1644,1640,1657,1662,1690,1774,1687,1688,1694,1700,1720,1722,1729,1750,1783,1794,1801,1809,1813,1822,1831,1838,1857,1868,1871,1877,1884,1889,1892,1893,1894,1896,1897,1901,1902,2157,1915,1923,1924,1932,1939,1994,1947,1948,1950,1978,1979,1988,5288,2129,2010,2018,2028,2038,2040,2041,2062,2067,2077,2081,2100,2102,2137,2154,2155,2196,2206,2220,2231,2234,2237,2239,2242,2256,2258,2269,2272,2295,2304,2315,2333,2340,2344,2347,2350,2355,2370,2371,2402,5840,2426,2433,2434,2445,2447,5722,2694,2489,2501,2507,2511,2519,2523,2743,2744,2531,2534,2536,2539,2558,2565,2568,2600,2598,2601,2606,2613,2624,2658,2671,2693,2714,2717,2729,2733,2945,2747,2748,2751,2753,2754,2760,2766,2777,2792,2798,2826,2831,2834,3606,2842,2843,2856,2857,2859,2867,2870,2871,2878,2879,2883,2884,2887,2888,2890,2911,2913,2915,2928,2941,2954,2962,2978,2979,2987,2990,2991,2995,2996,2997,2998,3002,3003,3005,3006,3019,3008,3011,3014,3022,3025,3036,3052,3053,3056,3065,3071,3074,3076,3079,3087,3089,3099,3101,3106,3109,3110,3115,3113,3114,3120,3131,3133,3142,3149,3157,3176,3177,3224,3184,3190,3194,3200,3202,3206,3210,3213,3556,3239,3240,3244,3255,3258,3286,3298,3290,3292,3313,3300,3304,3317,3318,3323,3325,3328,3403,3337,3339,3346,3347,3356,3367,3369,3374,3376,3383,3387,3389,3406,3407,3412,3414,3416,3420,3428,3436,3447,3450,3454,3459,3469,3471,3476,3481,3483,3494,3493,3495,3502,3504,3508,3512,3518,3524,3526,3527,3529,3530,3533,3542,3612,3554,3567,3577,3589,3619,3608,3613,3621,3623,3624,3629,3650,3656,3672,3913,3680,3687,3692,3697,3701,3700,3735,3714,3736,3723,3729,3730,3731,3737,3745,3746,3748,3750,3756,3759,3762,3766,3772,3791,3796,3870,3872,3806,3812,3814,3817,3821,3832,3839,3845,3855,3859,3861,3862,3863,3865,3873,3882,3883,3884,3908,3888,4137,3903,3904,3905,3907,3909,3910,3914,3919,3930,3933,3937,3953,3955,3965,3967,3973,3974,3981,3982,3991,3992,3994,3996,4000,4002,4003,4004,4010,4018,4022,4023,4025,4029,4033,4034,4036,4037,4040,4052,4047,4064,4071,4072,4078,4075,4083,4087,4089,4096,4101,4103,4109,4111,4119,4154,4764,4147,4150,4153,4160,4161,4172,4174,4182,4186,4191,4193,4211,4213,4216,4219,4225,4232,4239,4240,4242,4243,4244,4245,4248,4250,4255,4270,4272,4282,4296,4298,4315,4308,4310,4312,4318,4324,4327,4337,4338,4339,4346,4351,4352,4360,4366,4368,4370,4371,4372,4383,4385,4421,4386,4388,4401,4407,4413,4417,4427,4429,6515,4439,4449,4452,4456,4458,4460,4468,4482,4483,4496,4504,4520,4527,4529,4530,4536,4539,4540,4541,4551,4553,5233,4554,4556,4557,4560,4797,4587,4590,4593,4604,4609,4623,4630,4631,4634,4638,4639,4646,4647,4652,4657,4658,4656,4661,4665,4672,4681,4684,4687,4693,4697,4704,4718,4722,4733,4737,4741,4747,4765,4767,4768,4770,4781,6180,4786,4790,4805,4806,4810,4812,4814,4816,4828,4831,4834,4839,4843,4845,4846,4850,4851,4853,4855,4858,4860,4863,4864,4865,4866,4869,4870,4873,4885,4879,4880,4883,4889,4904,4918,4953,4993,4995,4996,4997,5000,5001,5003,5010,5016,5017,5019,5020,5022,5023,5030,5034,5039,5040,5048,5051,5056,5062,5064,5071,5074,5078,5079,5084,5085,5089,5099,5102,5103,5109,5113,5117,5118,5129,5131,5146,5133,5135,5144,5152,5169,5173,6600,5183,5186,5187,5190,5247,5192,5193,5194,5198,5200,5202,5208,5209,6594,5210,5214,5216,5219,5220,5224,5228,5238,5292,5244,5246,5251,5255,5259,5263,5269,5272,5283,5279,5280,5289,5550,5298,5314,5315,5322,5335,5324,5325,5327,5333,5340,5341,5343,5347,5360,5362,5367,5371,5378,5389,5391,5392,5409,5412,5415,5416,5423,5424,5425,5428,5431,5445,5447,5455,5458,5461,5465,5473,5475,5478,5484,5486,5493,5492,5497,5498,5499,5514,5516,5528,5529,5534,5545,5566,5549,5551,6750,6751,5554,5570,5563,5578,5581,5584,5587,5588,5589,5591,5592,5593,5595,5596,5601,5602,5603,5605,5614,5616,5617,5625,5626,5634,5635,5636,5637,5639,5643,5654,5656,5660,5664,5665,5667,5672,5674,5675,5677,5686,5692,5694,5703,5706,5711,5712,5718,5733,5730,5731,5737,5740,5744,5745,5746,5747,5751,5752,5769,5755,5765,5767,5770,5778,5780,5782,5783,5791,5792,5793,5798,5810,5807,5815,5817,5819,5821,5827,5830,5835,5843,5849,5851,5852,5860,5864,5867,5870,5876,5879,5881,5884,5886,5888,5890,5895,5896,5897,5900,5904,5909,5910,5914,5919,5920,5924,5947,5948,5951,5952,5954,5956,5959,5960,5961,5962,5963,5966,5967,5968,5970,5971,5977,5980,5987,5989,6507,5994,5999,6000,6002,6003,6004,6014,6021,6022,6042,6047,6057,6059,6060,6063,6065,6071,6077,6088,6078,6080,6085,6092,6096,6108,6112,6113,6116,6118,6121,6126,6130,6131,6142,6148,6151,6152,6156,6158,6160,6167,6168,6170,6176,6185,6189,6191,6194,6179,6205,6206,6207,6208,6220,6221,6227,6232,6237,6240,6243,6245,6390,6250,6252,6260,6270,6271,6274,6276,6282,6285,6290,6294,6296,6302,6303,6304,6312,6316,6320,6340,6333,6335,6337,6339,6345,6348,6350,6351,6354,6358,6363,6364,6366,6375,6383,6384,6388,6393,6397,6401,6403,6404,6405,6407,6411,6413,6414,6417,6420,6422,6429,6434,6435,6439,6447,6448,6453,6454,6458,6461,6463,6470,6472,6484,6486,6487,6490,6494,6493,6496,6556,6498,6503,6504,6511,6523,6525,6529,6533,6543,6545,6547,6548,6550,6553,6566,6570,6574,6571,6573,6579,6583,6592,6607,6616,6621,6631,6643,6660,6661,6662,6663,6664,6669,6674,6675,6679,6681,6684,6696,6698,6699,6704,6707,6714,6715,6716,6717,6718,6720,6721,6722,6723,6724,6727,6730,6732,6739,6742,6743,6757,6759,6763,6768,6774,7419,6781,6783,6790,6791,6798,6799,6805,6806,6808,6811,6815,6816,6817,6823,6826,6828,6831,6834,6836,6841,6844,6845,6846,6849,6850,6858,6859,6862,6868,6869,6879,6884,6889,6894,6897,6900,6918,6905,6910,6915,6922,6929,6930,6941,6942,6944,6946,6958,6951,6955,6978,6980,6983,6985,6986,6988,6991,7001,7002,7006,7008,7009,7015,7019,7020,7023,7032,7034,7035,7036,7040,7041,7046,7047,7048,7070,7074,7076,7078,7080,7082,7084,7090,7094,7098,7102,7106,7107,7112,7113,7114,7122,7125,7138,7144,7153,7157,7162,7163,7164,7166,7167,7171,7172,7175,7177,7179,7190,7197,7200,7198,7203,7209,7210,7216,7220,7221,7223,7226,7228,7230,7233,7236,7239,7240,7243,7245,7246,7251,7252,7254,7256,7296,7297,7260,7265,7266,7274,7282,7283,7285,7288,7289,7294,7295,7298,7301,7302,7312,7316,7317,7322,7326,7327,7331,7336,7339,7340,7344,7350,7351,7356,7371,7373,7374,7377,7378,7379,7383,7384,7386,7389,7393,7394,7400,7429,7430,7432,7433,7434,7439,7442,7449,7453,7457,7459,7460,7471,7473,7475,7476,7481,7482,7487,7488,7491,7494,7499,7500,7509,7511,7513,7518,7522,7523,7524,7526,7530,7539,7541,7544,7549,7554,7558,7556,7560,7561,7563,7564,7566,7572,7576,7580,7583,7584,7589,7590,7595,7596,7598,7599,7601,7608,7611,7614,7627,7629,7630,7634,7639,7641,7643,7648,7651,7652,7653,7659,7663,7693,7673,7683,7687,7691,7692,7694,7696,7698,7701,7702,7706,7721,7724,7725,7730,7732,7748,7752,7756,7765);
ALTER TABLE  `personoj` ADD  `lasteniro` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP AFTER  `ekdato` ;
ALTER TABLE personoj DROP lingvo;
ALTER TABLE personoj DROP sistemo;

-- pour passer en V4
ALTER TABLE  `personoj` ADD  `stop_rappel` ENUM(  'J',  'N' ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT  'N';
CREATE TABLE takso_leciono ( 
`id` INT NOT NULL AUTO_INCREMENT , 
`dato` TIMESTAMP NOT NULL,
`persono_id` int(11) NOT NULL,
`leciono_id` int(11) NOT NULL,
`intereso` INT NOT NULL , 
`malfacileco` INT NOT NULL , 
`komento` TEXT NOT NULL , 
PRIMARY KEY (`id`)) ENGINE = InnoDB CHARSET=utf8 COLLATE utf8_general_ci;

-- pour passer en V5
ALTER TABLE  `lecionoj` ADD  `unua` BOOL NOT NULL DEFAULT  '0',
ADD  `lasta` BOOL NOT NULL DEFAULT  '0';
update lecionoj set unua=1 where numero=1;
update lecionoj set lasta=1 where numero=10 and kurso='CG';
update lecionoj set lasta=1 where numero=25 and kurso='GR';
DROP TABLE  IF EXISTS lecioneroj;
CREATE TABLE `lecioneroj` ( `id` INT AUTO_INCREMENT , `leciono_id` INT , `titolo` TEXT , `tipo` ENUM('VORTARO','QCM','TEKSTO','EKZERCARO') NULL , `enhavo` TEXT NULL , `ordo` INT, PRIMARY KEY (`id`),`unua` BOOL NOT NULL DEFAULT  '0',`lasta` BOOL NOT NULL DEFAULT  '0') ENGINE = InnoDB CHARSET=utf8 COLLATE utf8_general_ci;
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '59', 'Indications sur la prononciation', 'TEKSTO', '1',1,0);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '59', 'Les terminaisons usuelles', 'TEKSTO', '2',0,0);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '59', 'Vocabulaire', 'VORTARO', '3',0,0);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '59', 'Un peu de grammaire...', 'TEKSTO', '4',0,0);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '59', 'Exemples de phrases', 'TEKSTO', '5',0,0);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '59', 'Exercices', 'EKZERCARO', '6',0,0);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '59', 'QCM', 'QCM', '7',0,0);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '59', 'épilogue', 'TEKSTO', '8',0,1);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '60', 'Le féminin des noms : suffixe <i>-in</i>', 'TEKSTO', '1',1,0);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '60', 'Terminaison <i>-n</i> du complément d’objet direct', 'TEKSTO', '2',0,0);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '60', 'Autres compléments', 'TEKSTO', '3',0,0);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '60', 'Préfixe <i>mal-</i>', 'TEKSTO', '4',0,0);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '60', 'Forme négative', 'TEKSTO', '5',0,0);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '60', 'Vocabulaire', 'VORTARO', '6',0,0);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '60', 'Exercices - deuxième leçon, 1<sup>ère</sup> partie', 'EKZERCARO', '7',0,0);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '60', 'Exercices - deuxième leçon, 2<sup>ème</sup> partie', 'EKZERCARO', '8',0,0);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '60', 'Exercices - deuxième leçon, 3<sup>ème</sup> partie', 'EKZERCARO', '9',0,0);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '60', 'QCM', 'QCM', '10',0,0);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '60', 'Épilogue', 'TEKSTO', '11',0,1);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '61', 'Ordre des mots', 'TEKSTO', '1',1,0);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '61', 'Exercices - troisième leçon, 1<sup>ère</sup> partie', 'EKZERCARO', '2',0,0);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '61', 'Vocabulaire', 'VORTARO', '3',0,0);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '61', 'Proverbe', 'TEKSTO', '4',0,0);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '61', 'Adverbes en <i>-e</i>', 'TEKSTO', '5',0,0);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '61', 'Formation des syllabes', 'TEKSTO', '6',0,0);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '61', 'Exercices - troisième leçon, 2<sup>ème</sup> partie', 'EKZERCARO', '7',0,0);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '61', 'Les nombres cardinaux', 'TEKSTO', '8',0,0);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '61', 'Exercices - troisième leçon, 3<sup>ème</sup> partie', 'EKZERCARO', '9',0,0);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '61', 'Verbes intransitifs et transitifs', 'TEKSTO', '10',0,0);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '61', 'Exercices - troisième leçon, 4<sup>ème</sup> partie', 'EKZERCARO', '11',0,0);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '61', 'Épilogue', 'TEKSTO', '12',0,1);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '62', 'La forme interrogative', 'TEKSTO', '1',1,0);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '62', 'Exercices - quatrième leçon, 1<sup>ère</sup> partie', 'EKZERCARO', '2',0,0);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '62', 'L’alphabet (rappel)', 'TEKSTO', '3',0,0);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '62', 'Les voyelles', 'TEKSTO', '4',0,0);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '62', 'Les consonnes', 'TEKSTO', '5',0,0);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '62', 'Les diphtongues', 'TEKSTO', '6',0,0);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '62', 'Vocabulaire', 'VORTARO', '7',0,0);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '62', 'Récit', 'TEKSTO', '8',0,0);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '62', 'Pratique du vocabulaire - quatrième leçon, 2ème partie', 'EKZERCARO', '9',0,0);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '62', 'Exercices - quatrième leçon, 3ème partie', 'EKZERCARO', '10',0,0);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '62', 'Épilogue', 'TEKSTO', '11',0,1);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '63', 'Éléments pour converser', 'TEKSTO', '1',1,0);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '63', 'Les corrélatifs', 'TEKSTO', '2',0,0);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '63', 'Un peu de pratique', 'TEKSTO', '3',0,0);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '63', 'La flexion des corrélatifs', 'TEKSTO', '4',0,0);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '63', 'Proverbe', 'TEKSTO', '5',0,0);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '63', 'Exercices - cinquième leçon', 'EKZERCARO', '6',0,0);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '63', 'Épilogue', 'TEKSTO', '7',0,1);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '67', 'Révision des terminaisons', 'TEKSTO', '1',1,0);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '67', 'Comment poser des questions', 'TEKSTO', '2',0,0);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '67', 'Rappel sur la prononciation', 'TEKSTO', '3',0,0);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '67', 'Révision des corrélatifs', 'EKZERCARO', '4',0,0);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '67', 'Proverbe', 'TEKSTO', '5',0,0);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '67', 'Les prépositions', 'TEKSTO', '6',0,0);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '67', 'Premier récit et vocabulaire', 'TEKSTO', '7',0,0);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '67', 'Prépositions (suite)', 'TEKSTO', '8',0,0);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '67', 'Second récit et vocabulaire', 'TEKSTO', '9',0,0);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '67', 'Exercices - sixième leçon, 2<sup>ème</sup> partie', 'EKZERCARO', '10',0,0);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '67', 'Traduction de "il y a"', 'TEKSTO', '11',0,0);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '67', 'Exercices - sixième leçon, 3<sup>ème</sup> partie', 'EKZERCARO', '12',0,0);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '67', 'Complément d’objet indirect', 'TEKSTO', '13',0,0);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '67', 'L’accusatif peut remplacer certaines prépositions', 'TEKSTO', '14',0,0);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '67', 'Exercices - sixième leçon, 4<sup>ème</sup> partie', 'EKZERCARO', '15',0,0);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '67', 'Adverbes de lieu indiquant le mouvement', 'TEKSTO', '16',0,0);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '67', 'Exercices - sixième leçon, 5<sup>ème</sup> partie', 'EKZERCARO', '17',0,0);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '67', 'Épilogue', 'TEKSTO', '18',0,1);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '68', 'Préfixes', 'TEKSTO', '1',1,0);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '68', 'Suffixes', 'TEKSTO', '2',0,0);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '68', 'Exercices - septième leçon', 'TEKSTO', '3',0,0);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '68', 'Proverbes', 'TEKSTO', '4',0,0);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '68', 'Expression de l’heure', 'TEKSTO', '5',0,0);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '68', 'Épilogue', 'TEKSTO', '6',0,1);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '69', 'Le reste de la conjugaison...', 'TEKSTO', '1',1,0);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '69', 'Proverbes', 'TEKSTO', '2',0,0);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '69', 'Exercices - huitième leçon, 1<sup>ère</sup> partie', 'EKZERCARO', '3',0,0);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '69', 'Exercices - huitième leçon, 2<sup>ème</sup> partie', 'EKZERCARO', '4',0,0);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '69', 'Pronom personnel et adjectif possessif réfléchis', 'TEKSTO', '5',0,0);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '69', 'Exercices - huitième leçon, 3<sup>ème</sup> partie', 'EKZERCARO', '6',0,0);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '69', 'Retour sur l’accent tonique', 'TEKSTO', '7',0,0);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '69', 'Épilogue', 'TEKSTO', '8',0,1);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '70', 'Un air connu...', 'TEKSTO', '1',1,0);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '70', 'L’élision', 'TEKSTO', '2',0,0);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '70', 'Quelques adverbes primaires en <i>-aŭ</i>', 'TEKSTO', '3',0,0);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '70', 'Divers mots en <i>-aŭ</i>', 'TEKSTO', '4',0,0);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '70', 'Autres mots invariables', 'TEKSTO', '5',0,0);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '70', 'Proverbes', 'TEKSTO', '6',0,0);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '70', 'Des extraits de la presse espérantiste', 'TEKSTO', '7',0,0);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '70', 'Exercices - neuvième leçon', 'EKZERCARO', '8',0,1);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '71', 'Examen', 'EKZERCARO', '1',1,1);
-- table qui permet d'indiquer la progression d'un élève
CREATE TABLE personoj_lecioneroj ( 
`id` INT NOT NULL AUTO_INCREMENT , 
`dato` TIMESTAMP NOT NULL,
`persono_id` int(11) NOT NULL,
`lecionero_id` int(11) NOT NULL,
PRIMARY KEY (`id`)) ENGINE = InnoDB CHARSET=utf8 COLLATE utf8_general_ci;
-- modification pour gérer la validation d'une inscription
ALTER TABLE personoj ADD COLUMN `aktivigo` varchar(40) DEFAULT NULL;
ALTER TABLE personoj ADD COLUMN `aktivigita` BOOL NOT NULL DEFAULT  '0';
ALTER TABLE personoj ADD COLUMN `pasvorto_md5` varchar(40) DEFAULT NULL;
update personoj set pasvorto_md5=MD5(pasvorto);
update personoj set aktivigita='1'; -- pour rendre "actif" tous les comptes déjà existant
delete from landoj where id=77;
insert into landoj (kodo,nomo) values ('TR','Turquie'); 
-- ajout des sections pour Gerda Malaperis
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '64', 'Rakonto', 'TEKSTO', '1',1,0);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '64', 'Klarigoj', 'TEKSTO', '2',0,0);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '64', 'Vortlisto', 'VORTARO', '3',0,0);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '64', 'Ezercoj', 'EKZERCARO', '4',0,0);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '64', 'Lasu min…', 'TEKSTO', '5',0,1);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '65', 'Rakonto', 'TEKSTO', '1',1,0);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '65', 'Klarigoj', 'TEKSTO', '2',0,0);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '65', 'Vortlisto', 'VORTARO', '3',0,0);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '65', 'Ezercoj', 'EKZERCARO', '4',0,0);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '65', 'Lasu min…', 'TEKSTO', '5',0,1);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '66', 'Rakonto', 'TEKSTO', '1',1,0);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '66', 'Klarigoj', 'TEKSTO', '2',0,0);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '66', 'Vortlisto', 'VORTARO', '3',0,0);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '66', 'Ezercoj', 'EKZERCARO', '4',0,0);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '66', 'Lasu min…', 'TEKSTO', '5',0,1);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '72', 'Rakonto', 'TEKSTO', '1',1,0);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '72', 'Klarigoj', 'TEKSTO', '2',0,0);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '72', 'Vortlisto', 'VORTARO', '3',0,0);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '72', 'Ezercoj', 'EKZERCARO', '4',0,0);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '72', 'Lasu min…', 'TEKSTO', '5',0,1);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '73', 'Rakonto', 'TEKSTO', '1',1,0);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '73', 'Klarigoj', 'TEKSTO', '2',0,0);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '73', 'Vortlisto', 'VORTARO', '3',0,0);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '73', 'Ezercoj', 'EKZERCARO', '4',0,0);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '73', 'Lasu min…', 'TEKSTO', '5',0,1);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '74', 'Rakonto', 'TEKSTO', '1',1,0);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '74', 'Klarigoj', 'TEKSTO', '2',0,0);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '74', 'Vortlisto', 'VORTARO', '3',0,0);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '74', 'Ezercoj', 'EKZERCARO', '4',0,0);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '74', 'Lasu min…', 'TEKSTO', '5',0,1);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '75', 'Rakonto', 'TEKSTO', '1',1,0);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '75', 'Klarigoj', 'TEKSTO', '2',0,0);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '75', 'Vortlisto', 'VORTARO', '3',0,0);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '75', 'Ezercoj', 'EKZERCARO', '4',0,0);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '75', 'Lasu min…', 'TEKSTO', '5',0,1);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '76', 'Rakonto', 'TEKSTO', '1',1,0);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '76', 'Klarigoj', 'TEKSTO', '2',0,0);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '76', 'Vortlisto', 'VORTARO', '3',0,0);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '76', 'Ezercoj', 'EKZERCARO', '4',0,0);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '76', 'Lasu min…', 'TEKSTO', '5',0,1);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '77', 'Rakonto', 'TEKSTO', '1',1,0);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '77', 'Klarigoj', 'TEKSTO', '2',0,0);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '77', 'Vortlisto', 'VORTARO', '3',0,0);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '77', 'Ezercoj', 'EKZERCARO', '4',0,0);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '77', 'Lasu min…', 'TEKSTO', '5',0,1);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '78', 'Rakonto', 'TEKSTO', '1',1,0);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '78', 'Klarigoj', 'TEKSTO', '2',0,0);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '78', 'Vortlisto', 'VORTARO', '3',0,0);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '78', 'Ezercoj', 'EKZERCARO', '4',0,0);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '78', 'Lasu min…', 'TEKSTO', '5',0,1);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '79', 'Rakonto', 'TEKSTO', '1',1,0);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '79', 'Klarigoj', 'TEKSTO', '2',0,0);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '79', 'Vortlisto', 'VORTARO', '3',0,0);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '79', 'Ezercoj', 'EKZERCARO', '4',0,0);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '79', 'Lasu min…', 'TEKSTO', '5',0,1);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '80', 'Rakonto', 'TEKSTO', '1',1,0);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '80', 'Klarigoj', 'TEKSTO', '2',0,0);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '80', 'Vortlisto', 'VORTARO', '3',0,0);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '80', 'Ezercoj', 'EKZERCARO', '4',0,0);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '80', 'Lasu min…', 'TEKSTO', '5',0,1);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '81', 'Rakonto', 'TEKSTO', '1',1,0);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '81', 'Klarigoj', 'TEKSTO', '2',0,0);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '81', 'Vortlisto', 'VORTARO', '3',0,0);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '81', 'Ezercoj', 'EKZERCARO', '4',0,0);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '81', 'Lasu min…', 'TEKSTO', '5',0,1);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '82', 'Rakonto', 'TEKSTO', '1',1,0);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '82', 'Klarigoj', 'TEKSTO', '2',0,0);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '82', 'Vortlisto', 'VORTARO', '3',0,0);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '82', 'Ezercoj', 'EKZERCARO', '4',0,0);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '82', 'Lasu min…', 'TEKSTO', '5',0,1);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '83', 'Rakonto', 'TEKSTO', '1',1,0);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '83', 'Klarigoj', 'TEKSTO', '2',0,0);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '83', 'Vortlisto', 'VORTARO', '3',0,0);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '83', 'Ezercoj', 'EKZERCARO', '4',0,0);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '83', 'Lasu min…', 'TEKSTO', '5',0,1);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '84', 'Rakonto', 'TEKSTO', '1',1,0);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '84', 'Klarigoj', 'TEKSTO', '2',0,0);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '84', 'Vortlisto', 'VORTARO', '3',0,0);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '84', 'Ezercoj', 'EKZERCARO', '4',0,0);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '84', 'Lasu min…', 'TEKSTO', '5',0,1);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '85', 'Rakonto', 'TEKSTO', '1',1,0);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '85', 'Klarigoj', 'TEKSTO', '2',0,0);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '85', 'Vortlisto', 'VORTARO', '3',0,0);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '85', 'Ezercoj', 'EKZERCARO', '4',0,0);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '85', 'Lasu min…', 'TEKSTO', '5',0,1);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '86', 'Rakonto', 'TEKSTO', '1',1,0);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '86', 'Klarigoj', 'TEKSTO', '2',0,0);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '86', 'Vortlisto', 'VORTARO', '3',0,0);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '86', 'Ezercoj', 'EKZERCARO', '4',0,0);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '86', 'Lasu min…', 'TEKSTO', '5',0,1);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '87', 'Rakonto', 'TEKSTO', '1',1,0);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '87', 'Klarigoj', 'TEKSTO', '2',0,0);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '87', 'Vortlisto', 'VORTARO', '3',0,0);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '87', 'Ezercoj', 'EKZERCARO', '4',0,0);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '87', 'Lasu min…', 'TEKSTO', '5',0,1);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '88', 'Rakonto', 'TEKSTO', '1',1,0);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '88', 'Klarigoj', 'TEKSTO', '2',0,0);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '88', 'Vortlisto', 'VORTARO', '3',0,0);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '88', 'Ezercoj', 'EKZERCARO', '4',0,0);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '88', 'Lasu min…', 'TEKSTO', '5',0,1);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '89', 'Rakonto', 'TEKSTO', '1',1,0);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '89', 'Klarigoj', 'TEKSTO', '2',0,0);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '89', 'Vortlisto', 'VORTARO', '3',0,0);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '89', 'Ezercoj', 'EKZERCARO', '4',0,0);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '89', 'Lasu min…', 'TEKSTO', '5',0,1);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '90', 'Rakonto', 'TEKSTO', '1',1,0);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '90', 'Klarigoj', 'TEKSTO', '2',0,0);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '90', 'Vortlisto', 'VORTARO', '3',0,0);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '90', 'Ezercoj', 'EKZERCARO', '4',0,0);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '90', 'Lasu min…', 'TEKSTO', '5',0,1);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '91', 'Rakonto', 'TEKSTO', '1',1,0);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '91', 'Klarigoj', 'TEKSTO', '2',0,0);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '91', 'Vortlisto', 'VORTARO', '3',0,0);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '91', 'Ezercoj', 'EKZERCARO', '4',0,0);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '91', 'Lasu min…', 'TEKSTO', '5',0,1);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '92', 'Rakonto', 'TEKSTO', '1',1,0);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '92', 'Klarigoj', 'TEKSTO', '2',0,0);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '92', 'Vortlisto', 'VORTARO', '3',0,0);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '92', 'Ezercoj', 'EKZERCARO', '4',0,0);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '92', 'Lasu min…', 'TEKSTO', '5',0,1);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '93', 'Rakonto', 'TEKSTO', '1',1,0);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '93', 'Klarigoj', 'TEKSTO', '2',0,0);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '93', 'Vortlisto', 'VORTARO', '3',0,0);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '93', 'Ezercoj', 'EKZERCARO', '4',0,0);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '93', 'Lasu min…', 'TEKSTO', '5',0,1);
-- table pour les réponses des élèves
DROP TABLE IF EXISTS respondoj ;
CREATE TABLE respondoj ( 
`id` INT NOT NULL AUTO_INCREMENT , 
`dato` TIMESTAMP NOT NULL,
`persono_id` int(11) NOT NULL,
`lecionero_id` int(11) NOT NULL,
`kodo` varchar(40),
`demando` TEXT,
`respondo` TEXT,
PRIMARY KEY (`id`)) ENGINE = InnoDB CHARSET=utf8 COLLATE utf8_general_ci;
-- modification pour avoir des utilisateurs sans cours choisi :
ALTER TABLE `personoj` CHANGE `kurso` `kurso` VARCHAR(2) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT '';

-- correction dans la table des leçons --
UPDATE lecioneroj SET titolo = 'Épilogue' WHERE id= 8;
UPDATE lecioneroj SET titolo = 'Exercice 1' WHERE id=15;
UPDATE lecioneroj SET titolo = 'Exercice 2' WHERE id=16;
UPDATE lecioneroj SET titolo = 'Exercice 3' WHERE id=17;
UPDATE lecioneroj SET titolo = 'Exercice 1' WHERE id=21;
UPDATE lecioneroj SET titolo = 'Exercice 2' WHERE id=26;
UPDATE lecioneroj SET titolo = 'Exercice 3' WHERE id=28;
UPDATE lecioneroj SET titolo = 'Exercice 4' WHERE id=30;
UPDATE lecioneroj SET titolo = 'Exercice 1' WHERE id=33;
UPDATE lecioneroj SET titolo = 'Exercice 2 : pratique du vocabulaire' WHERE id=40;
UPDATE lecioneroj SET titolo = 'Exercices 3 et 4' WHERE id=41;
UPDATE lecioneroj SET titolo = 'Exercices 1 et 2' WHERE id=48;
UPDATE lecioneroj SET titolo = 'Second récit et vocabulaire' WHERE id=58;
UPDATE lecioneroj SET titolo = 'Exercice 2' WHERE id=61;
UPDATE lecioneroj SET titolo = 'Exercice 3' WHERE id=64;
UPDATE lecioneroj SET titolo = 'Exercice 4' WHERE id=66;
UPDATE lecioneroj SET titolo = 'Exercices' WHERE id=70;
UPDATE lecioneroj SET titolo = 'Exercice 1' WHERE id=76;
UPDATE lecioneroj SET titolo = 'Exercice 2' WHERE id=77;
UPDATE lecioneroj SET titolo = 'Exercice 3' WHERE id=79;
UPDATE lecioneroj SET titolo = 'Exercice' WHERE id=89;

-- correction dans la table de leçons pour Gerda (exercices) --
UPDATE `lecioneroj` SET `titolo` = 'Ekzercoj' WHERE `id` = 94;
UPDATE `lecioneroj` SET `titolo` = 'Ekzercoj' WHERE `id` = 99;
UPDATE `lecioneroj` SET `titolo` = 'Ekzercoj' WHERE `id` = 104;
UPDATE `lecioneroj` SET `titolo` = 'Ekzercoj' WHERE `id` = 109;
UPDATE `lecioneroj` SET `titolo` = 'Ekzercoj' WHERE `id` = 114;
UPDATE `lecioneroj` SET `titolo` = 'Ekzercoj' WHERE `id` = 119; 
UPDATE `lecioneroj` SET `titolo` = 'Ekzercoj' WHERE `id` = 184; 
UPDATE `lecioneroj` SET `titolo` = 'Ekzercoj' WHERE `id` = 189; 
UPDATE `lecioneroj` SET `titolo` = 'Ekzercoj' WHERE `id` = 194; 
UPDATE `lecioneroj` SET `titolo` = 'Ekzercoj' WHERE `id` = 199;
UPDATE `lecioneroj` SET `titolo` = 'Ekzercoj' WHERE `id` = 204; 
UPDATE `lecioneroj` SET `titolo` = 'Ekzercoj' WHERE `id` = 209; 
UPDATE `lecioneroj` SET `titolo` = 'Ekzercoj' WHERE `id` = 214;

-- Passage en V6
update `lecioneroj` set tipo='EKZERCARO' where leciono_id=68 and ordo='3';
CREATE TABLE personoj_lecionoj ( 
`id` INT NOT NULL AUTO_INCREMENT , 
`dato` TIMESTAMP NOT NULL,
`persono_id` int(11) NOT NULL,
`leciono_id` int(11) NOT NULL,
PRIMARY KEY (`id`)) ENGINE = InnoDB CHARSET=utf8 COLLATE utf8_general_ci;

-- passage en V7
UPDATE `lecioneroj` SET lasta=0 WHERE `leciono_id` = 71 and ordo=1;
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '71', 'Bravo !', 'TEKSTO', '2',0,1);
-- correction Epilogue leçon 9
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `enhavo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '70', 'Épilogue', 'TEKSTO', NULL, '9', '0', '1');
UPDATE `lecioneroj` SET `lasta` = '0' WHERE `lecioneroj`.`id` = 89;

-- passage en V8
-- correction de la section "expression de l'heure" qui contient un exercice :
UPDATE `lecioneroj` SET `tipo` = 'EKZERCARO' WHERE `id` = 72;
-- décalage de toutes les sections de la leçon 2 pour y intégrer le QCM récapitulatif :
update `lecioneroj` set ordo=id-7 WHERE leciono_id=60;
update `lecioneroj` set unua=0 WHERE id=9;
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '60', 'Récapitulatif de la leçon 1', 'QCM', '1',1,0);	
-- décalage des section de la leçon 1 pour intégrer les premières phrases de discution :
update `lecioneroj` set ordo=id+1 WHERE leciono_id=59 and id>=7;
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '59', 'Mes premiers mots', 'VORTARO', '7',0,0);	
-- séparation en deux parties de la page sur l'heure
update `lecioneroj` set ordo=7 WHERE id=73;
update `lecioneroj` set tipo='TEKSTO' WHERE id=72;
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '68', 'Exercices', 'EKZERCARO', '6',0,0);
-- décalage pour insérer les phrases de disctuion pour la deuxième leçon:
update `lecioneroj` set ordo=12 WHERE id=18;
update `lecioneroj` set ordo=13 WHERE id=19;
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '60', 'Comment ça va ?', 'VORTARO', '11',0,0);
update `lecioneroj` set ordo=11 WHERE id=30;

-- passage en V9
update `lecioneroj` set ordo=10 WHERE id=7;
update `lecioneroj` set ordo=11 WHERE id=8;
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '59', 'Qui est qui ?', 'QCM', '8',0,0);
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '59', 'Je me présente', 'EKZERCARO', '9',0,0);
update `lecioneroj` set titolo='Ekzercoj' WHERE titolo= 'Ezercoj';
update respondoj set kodo='ekz01_18' where lecionero_id=6 and kodo='ekz01_16';
update respondoj set kodo='ekz01_17' where lecionero_id=6 and kodo='ekz01_15';
update respondoj set kodo='ekz01_16' where lecionero_id=6 and kodo='ekz01_14';
update respondoj set kodo='ekz01_15' where lecionero_id=6 and kodo='ekz01_13';	
update respondoj set kodo='ekz01_14' where lecionero_id=6 and kodo='ekz01_12';
-- oublie de l'islande comme pays :
INSERT INTO  `landoj` (`id` ,`kodo` ,`nomo`) VALUES (NULL ,  'IS',  'Islande');
-- 3ème niveau :
INSERT INTO `kursoj` (`id`, `kodo`, `nomo`) VALUES (NULL, '3N', 'Cours de 3ème niveau');
INSERT INTO `lecionoj` (`id`, `numero`, `titolo`, `retpagxo`, `kurso`, `unua`, `lasta`) VALUES (NULL, '1', 'Prezentu vin', 'leciono01.php', '3N', '1', '0'); -- 129
INSERT INTO `lecionoj` (`id`, `numero`, `titolo`, `retpagxo`, `kurso`, `unua`, `lasta`) VALUES (NULL, '2', 'Estingi fajron', 'leciono02.php', '3N', '0', '0');
INSERT INTO `lecionoj` (`id`, `numero`, `titolo`, `retpagxo`, `kurso`, `unua`, `lasta`) VALUES (NULL, '3', 'Mia plej ŝatata filmo', 'leciono03.php', '3N', '0', '0');
INSERT INTO `lecionoj` (`id`, `numero`, `titolo`, `retpagxo`, `kurso`, `unua`, `lasta`) VALUES (NULL, '4', 'Kio okazos ?', 'leciono04.php', '3N', '0', '0');
-- 1ere lecon
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `enhavo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '129', 'Prezentu vin', 'EKZERCARO', NULL, '1', '1', '0');
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `enhavo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '129', 'Envoi des exercices', 'TEKSTO', NULL, '2', '0', '1');
-- 2eme lecon
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `enhavo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '130', 'Estingi fajron per sonoj - Vocabulaire', 'VORTARO', NULL, '1', '1', '0');
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `enhavo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '130', 'Question - 1ère partie', 'QCM', NULL, '2', '0', '0');
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `enhavo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '130', 'Questions - 2ème partie', 'QCM', NULL, '3', '0', '0');
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `enhavo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '130', 'Questions - 3ème partie', 'QCM', NULL, '4', '0', '0');
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `enhavo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '130', 'Questions - 4ème partie', 'EKZERCARO', NULL, '5', '0', '0');
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `enhavo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '130', 'Envoi des exercices', 'TEKSTO', NULL, '6', '0', '1');
-- 3eme lecon
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `enhavo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '131', 'Mia plej ŝatata filmo', 'EKZERCARO', NULL, '1', '0', '1');
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `enhavo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '131', 'Divenu alies filmojn', 'TEKSTO', NULL, '2', '0', '0');
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `enhavo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '131', 'Envoi des exercices', 'TEKSTO', NULL, '3', '0', '1');
-- 4ème leçon
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `enhavo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '132', 'Kio ozazos ?', 'EKZERCARO', NULL, '1', '1', '0');
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `enhavo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '132', 'Solvo', 'EKZERCARO', NULL, '2', '0', '0');
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `enhavo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '132', 'Envoi des exercices', 'TEKSTO', NULL, '3', '0', '1');
-- ajout partie à la fin de chaque chapitre Gerda pour l'envoi des exercices
UPDATE `lecioneroj` SET `lasta` = '0' WHERE `lecioneroj`.`id` = 95;
UPDATE `lecioneroj` SET `lasta` = '0' WHERE `lecioneroj`.`id` = 100;
UPDATE `lecioneroj` SET `lasta` = '0' WHERE `lecioneroj`.`id` = 105;
UPDATE `lecioneroj` SET `lasta` = '0' WHERE `lecioneroj`.`id` = 110;
UPDATE `lecioneroj` SET `lasta` = '0' WHERE `lecioneroj`.`id` = 115;
UPDATE `lecioneroj` SET `lasta` = '0' WHERE `lecioneroj`.`id` = 120;
UPDATE `lecioneroj` SET `lasta` = '0' WHERE `lecioneroj`.`id` = 125;
UPDATE `lecioneroj` SET `lasta` = '0' WHERE `lecioneroj`.`id` = 130;
UPDATE `lecioneroj` SET `lasta` = '0' WHERE `lecioneroj`.`id` = 135;
UPDATE `lecioneroj` SET `lasta` = '0' WHERE `lecioneroj`.`id` = 140;
UPDATE `lecioneroj` SET `lasta` = '0' WHERE `lecioneroj`.`id` = 145;
UPDATE `lecioneroj` SET `lasta` = '0' WHERE `lecioneroj`.`id` = 150;
UPDATE `lecioneroj` SET `lasta` = '0' WHERE `lecioneroj`.`id` = 155;
UPDATE `lecioneroj` SET `lasta` = '0' WHERE `lecioneroj`.`id` = 160;
UPDATE `lecioneroj` SET `lasta` = '0' WHERE `lecioneroj`.`id` = 165;
UPDATE `lecioneroj` SET `lasta` = '0' WHERE `lecioneroj`.`id` = 170;
UPDATE `lecioneroj` SET `lasta` = '0' WHERE `lecioneroj`.`id` = 175;
UPDATE `lecioneroj` SET `lasta` = '0' WHERE `lecioneroj`.`id` = 180;
UPDATE `lecioneroj` SET `lasta` = '0' WHERE `lecioneroj`.`id` = 185;
UPDATE `lecioneroj` SET `lasta` = '0' WHERE `lecioneroj`.`id` = 190;
UPDATE `lecioneroj` SET `lasta` = '0' WHERE `lecioneroj`.`id` = 195;
UPDATE `lecioneroj` SET `lasta` = '0' WHERE `lecioneroj`.`id` = 200;
UPDATE `lecioneroj` SET `lasta` = '0' WHERE `lecioneroj`.`id` = 205;
UPDATE `lecioneroj` SET `lasta` = '0' WHERE `lecioneroj`.`id` = 210;
UPDATE `lecioneroj` SET `lasta` = '0' WHERE `lecioneroj`.`id` = 215;
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `enhavo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '64', 'Sendi la ekzercojn', 'TEKSTO', NULL, '6', '0', '1');
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `enhavo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '65', 'Sendi la ekzercojn', 'TEKSTO', NULL, '6', '0', '1');
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `enhavo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '66', 'Sendi la ekzercojn', 'TEKSTO', NULL, '6', '0', '1');
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `enhavo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '67', 'Sendi la ekzercojn', 'TEKSTO', NULL, '6', '0', '1');
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `enhavo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '68', 'Sendi la ekzercojn', 'TEKSTO', NULL, '6', '0', '1');
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `enhavo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '69', 'Sendi la ekzercojn', 'TEKSTO', NULL, '6', '0', '1');
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `enhavo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '70', 'Sendi la ekzercojn', 'TEKSTO', NULL, '6', '0', '1');
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `enhavo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '71', 'Sendi la ekzercojn', 'TEKSTO', NULL, '6', '0', '1');
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `enhavo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '72', 'Sendi la ekzercojn', 'TEKSTO', NULL, '6', '0', '1');
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `enhavo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '73', 'Sendi la ekzercojn', 'TEKSTO', NULL, '6', '0', '1');
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `enhavo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '74', 'Sendi la ekzercojn', 'TEKSTO', NULL, '6', '0', '1');
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `enhavo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '75', 'Sendi la ekzercojn', 'TEKSTO', NULL, '6', '0', '1');
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `enhavo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '76', 'Sendi la ekzercojn', 'TEKSTO', NULL, '6', '0', '1');
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `enhavo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '77', 'Sendi la ekzercojn', 'TEKSTO', NULL, '6', '0', '1');
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `enhavo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '78', 'Sendi la ekzercojn', 'TEKSTO', NULL, '6', '0', '1');
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `enhavo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '79', 'Sendi la ekzercojn', 'TEKSTO', NULL, '6', '0', '1');
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `enhavo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '80', 'Sendi la ekzercojn', 'TEKSTO', NULL, '6', '0', '1');
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `enhavo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '81', 'Sendi la ekzercojn', 'TEKSTO', NULL, '6', '0', '1');
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `enhavo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '82', 'Sendi la ekzercojn', 'TEKSTO', NULL, '6', '0', '1');
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `enhavo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '83', 'Sendi la ekzercojn', 'TEKSTO', NULL, '6', '0', '1');
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `enhavo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '84', 'Sendi la ekzercojn', 'TEKSTO', NULL, '6', '0', '1');
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `enhavo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '69', 'Sendi la ekzercojn', 'TEKSTO', NULL, '6', '0', '1');
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `enhavo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '85', 'Sendi la ekzercojn', 'TEKSTO', NULL, '6', '0', '1');
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `enhavo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '86', 'Sendi la ekzercojn', 'TEKSTO', NULL, '6', '0', '1');
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `enhavo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '87', 'Sendi la ekzercojn', 'TEKSTO', NULL, '6', '0', '1');
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `enhavo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '88', 'Sendi la ekzercojn', 'TEKSTO', NULL, '6', '0', '1');
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `enhavo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '89', 'Sendi la ekzercojn', 'TEKSTO', NULL, '6', '0', '1');
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `enhavo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '90', 'Sendi la ekzercojn', 'TEKSTO', NULL, '6', '0', '1');
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `enhavo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '91', 'Sendi la ekzercojn', 'TEKSTO', NULL, '6', '0', '1');
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `enhavo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '92', 'Sendi la ekzercojn', 'TEKSTO', NULL, '6', '0', '1');
INSERT INTO `lecioneroj` (`id`, `leciono_id`, `titolo`, `tipo`, `enhavo`, `ordo`, `unua`, `lasta`) VALUES (NULL, '93', 'Sendi la ekzercojn', 'TEKSTO', NULL, '6', '0', '1');
--- modification du nom de l'épilogues pour les leçons de DLEK
UPDATE `lecioneroj` SET `titolo` = 'Épilogue et envoi des exercices' WHERE `lecioneroj`.`id` = 8;
UPDATE `lecioneroj` SET `titolo` = 'Épilogue et envoi des exercices' WHERE `lecioneroj`.`id` = 19;
UPDATE `lecioneroj` SET `titolo` = 'Épilogue et envoi des exercices' WHERE `lecioneroj`.`id` = 31;
UPDATE `lecioneroj` SET `titolo` = 'Épilogue et envoi des exercices' WHERE `lecioneroj`.`id` = 42;
UPDATE `lecioneroj` SET `titolo` = 'Épilogue et envoi des exercices' WHERE `lecioneroj`.`id` = 49;
UPDATE `lecioneroj` SET `titolo` = 'Épilogue et envoi des exercices' WHERE `lecioneroj`.`id` = 67;
UPDATE `lecioneroj` SET `titolo` = 'Épilogue et envoi des exercices' WHERE `lecioneroj`.`id` = 73;
UPDATE `lecioneroj` SET `titolo` = 'Épilogue et envoi des exercices' WHERE `lecioneroj`.`id` = 81;
UPDATE `lecioneroj` SET `titolo` = 'Épilogue et envoi des exercices' WHERE `lecioneroj`.`id` = 217;
UPDATE `lecioneroj` SET `titolo` = 'Envoi des exercices' WHERE `lecioneroj`.`id` = 216;
--- autres corrections dans les intertitres des leçons de DLEK
UPDATE `lecioneroj` SET `titolo` = 'Exercice 1' WHERE `lecioneroj`.`id` = 59;
UPDATE `lecioneroj` SET `titolo` = 'Questions - 2<sup>e</sup> partie' WHERE `lecioneroj`.`id` = 229;
UPDATE `lecioneroj` SET `titolo` = 'Questions - 3<sup>e</sup> partie' WHERE `lecioneroj`.`id` = 230;
UPDATE `lecioneroj` SET `titolo` = 'Questions - 4<sup>e</sup> partie' WHERE `lecioneroj`.`id` = 231;
--- correction lignes ajoutée à tort 
DELETE FROM `lecioneroj` WHERE `lecioneroj`.`id` = 306;
DELETE FROM `lecioneroj` WHERE `lecioneroj`.`id` = 307;
DELETE FROM `lecioneroj` WHERE `lecioneroj`.`id` = 323;
DELETE FROM `lecioneroj` WHERE `lecioneroj`.`id` = 308;
DELETE FROM `lecioneroj` WHERE `lecioneroj`.`id` = 309;
-- Axel peut prendre 5 élèves du cours 3ème niveau
INSERT INTO `korektebla_kurso` (`korektanto`, `kurso`, `kiom_lernantoj`) VALUES ('12', '3N', '5');

-- On ajoute quelques réponses pour l'exercice sur les films :
INSERT INTO `respondoj` (`id`, `dato`, `persono_id`, `lecionero_id`, `kodo`, `demando`, `respondo`) VALUES (NULL, CURRENT_TIMESTAMP, '10', '232', 'ekz03_01', '1 Mia plej ŝatata filmo temas pri :', 'Dum la dua mondmilito en Francio, iu familio de kamparanoj akceptas orfean kvin-jaran knabineton, kies gepatroj estis mortitaj dum bombatako. La filo de la familio, 11-jaraĝa knabo, kaj tiu knabino amikiĝas kaj ofte ludas kune. Post enteriĝo de la hundo de la knabineto, ili komencas ludi strangan ludon: iom post iom kreas etan tombejon, kie ili enteriĝas insektojn kaj etajn bestojn. La muziko de tiu filmo, ludata per gitaro, iĝis tre fama.');
INSERT INTO `respondoj` (`id`, `dato`, `persono_id`, `lecionero_id`, `kodo`, `demando`, `respondo`) VALUES (NULL, CURRENT_TIMESTAMP, '10', '232', 'ekz03_02', '2 Mia plej ŝatata filmo nomiĝas :', 'Jeux interdits');

INSERT INTO `respondoj` (`id`, `dato`, `persono_id`, `lecionero_id`, `kodo`, `demando`, `respondo`) VALUES (NULL, CURRENT_TIMESTAMP, '518', '232', 'ekz03_01', '1 Mia plej ŝatata filmo temas pri :', 'Tiu filmo, farita de fama angla komediogrupo, estas komika kaj satira filmo, kiu rakontas la vivon de iu ulo, kiu naskiĝis en la sama tago kiel Jesuo. Ni tiam vidas lin kiam li estas plenkreskulo. Li aliĝas al iu terorista grupo, kiu agas kontraŭ la Romanioj. Iun tagon, por eskapi la Romaniojn, li agas kiel li estus iu religiano, kaj li prelegas antaŭ multaj homoj. La homamaso kredas, ke li estas la Mesio, kaj tio okazos diversajn amuzajn scenojn. En la fino de la filmo, ni vidas lin, alkroĉita ĉe granda kruĉo, samtempe kiel kelkaj rabistoj, kaj tiam, ĉiuj komencas kanti kaj fajfi kantojn, kiu diras ke "oni ĉiam rigardu la bonan flankon de la vivo".');
INSERT INTO `respondoj` (`id`, `dato`, `persono_id`, `lecionero_id`, `kodo`, `demando`, `respondo`) VALUES (NULL, CURRENT_TIMESTAMP, '518', '232', 'ekz03_02', '2 Mia plej ŝatata filmo nomiĝas :', 'La vie de Brian');

-- passage en V10
CREATE TABLE `vortoj` ( `id` INT NOT NULL AUTO_INCREMENT , `eo` VARCHAR(128) NOT NULL , `fr` VARCHAR(128) NOT NULL , `leciono_id` INT NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB  CHARSET=utf8 COLLATE utf8_general_ci;
CREATE TABLE `personoj_vortoj` ( `id` INT NOT NULL AUTO_INCREMENT , `persono_id` INT NOT NULL , `vorto_id` INT NOT NULL , `nombrilo` INT NOT NULL , `venontaFojo` DATETIME NOT NULL ,PRIMARY KEY (`id`)) ENGINE = InnoDB  CHARSET=utf8 COLLATE utf8_general_ci;