-- Gerda malaperis : quatre exercices en paragraphes découpés en une phrase par question (issue #1056),
-- pour passer aux nouveaux types, sur une seule ligne, au lieu de recopier tout le paragraphe.
-- - 8.4 (67) : [min/sin]… → menus (elektlisto), n° 11-12 → 11-16.
-- - 8.4 (68) : [ŝi*/si*] (choisir le pronom et compléter sa terminaison) → menus avec les formes complètes
--   (ŝi, ŝin, ŝia, ŝian, si, sin, sia, sian…), n° 13-15 → 17-22.
-- - 10.4 (72) : [*] → champs (plenigu), n° 7-14 → 7-28.
-- - 11.4 (74) : ___ (ig ou iĝ) → menus [ig/iĝ], n° 8-11 → 8-22.
-- Une phrase sans trou reste avec la phrase suivante, pour garder le contexte.
-- Les réponses attendues ne changent pas ; les variantes déjà acceptées le restent (diskutado/diskuto, observadas/observas).
-- Corrections d'énoncés en 10.4 : « koridoro[*] » → « koridor* » (n° 10), « kien ŝi[*] foriĝis » → « kien * foriĝis » (n° 25) :
-- le corrigé attendait « o » et « ŝi » dans ces trous.
-- Ce sont les derniers exercices de leur section : aucune autre question n'est renumérotée.
-- Les anciennes questions sont masquées : les réponses déjà envoyées restent liées à elles.
-- Le script vaut pour la prod (mêmes id) et peut être rejoué sans risque. Nécessite sql/21.
-- Tables en MyISAM (pas de transaction) : en prod, sauvegarder d'abord ekzercoj et ekzerceroj.
SET NAMES utf8mb4;

-- 1. Nouvelles questions
INSERT INTO ekzerceroj (ekzerco_id, kodo, numero, demando, respondmodelo, respondo, normaligita, bildo, forigita, korektebla)
  SELECT * FROM (
    SELECT 67 AS ekzerco_id, 'gr08_11' AS kodo, 11 AS numero, 'Mi konas [min/sin].' AS demando, NULL AS respondmodelo, 'Mi konas <b>min</b>.' AS respondo, 'mi konas min' AS normaligita, '' AS bildo, 0 AS forigita, 0 AS korektebla
    UNION ALL SELECT 67, 'gr08_12', 12, 'Mi do ne volas vidi [min/sin] en la spegulo.', NULL, 'Mi do ne volas vidi <b>min</b> en la spegulo.', 'mi do ne volas vidi min en la spegulo', '', 0, 0
    UNION ALL SELECT 67, 'gr08_13', 13, 'Tom estas pli bela ol mi, kaj mi ofte vidas lin rigardi [lin/sin] en la spegulo.', NULL, 'Tom estas pli bela ol mi, kaj mi ofte vidas lin rigardi <b>sin</b> en la spegulo.', 'tom estas pli bela ol mi kaj mi ofte vidas lin rigardi sin en la spegulo', '', 0, 0
    UNION ALL SELECT 67, 'gr08_14', 14, 'Kiam li turnas [lin/sin] al mi, mi plene vidas [sian/lian] belan aspekton.', NULL, 'Kiam li turnas <b>sin</b> al mi, mi plene vidas <b>lian</b> belan aspekton.', 'kiam li turnas sin al mi mi plene vidas lian belan aspekton', '', 0, 0
    UNION ALL SELECT 67, 'gr08_15', 15, 'Ĉu vi volas piediri reen al [via/sia] ĉambro?', NULL, 'Ĉu vi volas piediri reen al <b>via</b> ĉambro?', 'cxu vi volas piediri reen al via cxambro', '', 0, 0
    UNION ALL SELECT 67, 'gr08_16', 16, 'Vi promenos longe, sed ne timu, ke [viaj/siaj] kruroj tro laboros kaj perdos [ilian/sian] tutan forton.', NULL, 'Vi promenos longe, sed ne timu, ke <b>viaj</b> kruroj tro laboros kaj perdos <b>sian</b> tutan forton.', 'vi promenos longe sed ne timu ke viaj kruroj tro laboros kaj perdos sian tutan forton', '', 0, 0
  ) AS novaj
  WHERE NOT EXISTS (SELECT 1 FROM ekzerceroj WHERE ekzerco_id = 67 AND kodo = 'gr08_11');

INSERT INTO ekzerceroj (ekzerco_id, kodo, numero, demando, respondmodelo, respondo, normaligita, bildo, forigita, korektebla)
  SELECT * FROM (
    SELECT 68 AS ekzerco_id, 'gr08_17' AS kodo, 17 AS numero, 'Ĉu vi havas informojn pri Linda? Ŝi kuŝis en [ŝi/ŝin/ŝia/ŝian/si/sin/sia/sian] ĉambro kaj ne sentis [ŝi/ŝin/ŝia/ŝian/si/sin/sia/sian] tre bone.' AS demando, NULL AS respondmodelo, 'Ĉu vi havas informojn pri Linda? Ŝi kuŝis en <b>sia</b> ĉambro kaj ne sentis <b>sin</b> tre bone.' AS respondo, 'cxu vi havas informojn pri linda sxi kusxis en sia cxambro kaj ne sentis sin tre bone' AS normaligita, '' AS bildo, 0 AS forigita, 0 AS korektebla
    UNION ALL SELECT 68, 'gr08_18', 18, 'Tom iris al [ŝi/ŝin/ŝia/ŝian/si/sin/sia/sian] kun [li/lin/lia/lian/si/sin/sia/sian] kuracisto, sed ŝi ne rigardis tiun kuraciston serioza.', NULL, 'Tom iris al <b>ŝi</b> kun <b>sia</b> kuracisto, sed ŝi ne rigardis tiun kuraciston serioza.', 'tom iris al sxi kun sia kuracisto sed sxi ne rigardis tiun kuraciston serioza', '', 0, 0
    UNION ALL SELECT 68, 'gr08_19', 19, 'Ŝi preferis [ŝi/ŝin/ŝia/ŝian/si/sin/sia/sian] kuraciston; ŝi vere ne amas [li/lin/lia/lian/si/sin/sia/sian].', NULL, 'Ŝi preferis <b>sian</b> kuraciston; ŝi vere ne amas <b>lian</b>.', 'sxi preferis sian kuraciston sxi vere ne amas lian', '', 0, 0
    UNION ALL SELECT 68, 'gr08_20', 20, 'Li do forsendis [li/lin/lia/lian/si/sin/sia/sian] kaj vokis [ŝi/ŝin/ŝia/ŝian/si/sin/sia/sian].', NULL, 'Li do forsendis <b>sian</b> kaj vokis <b>ŝian</b>.', 'li do forsendis sian kaj vokis sxian', '', 0, 0
    UNION ALL SELECT 68, 'gr08_21', 21, 'Strange, kiam ŝi vidis [li/lin/lia/lian/si/sin/sia/sian] kuraciston, ŝi sentis [ŝi/ŝin/ŝia/ŝian/si/sin/sia/sian] malbone, sed tuj kiam ŝi vidis [ŝi/ŝin/ŝia/ŝian/si/sin/sia/sian] kuraciston alveni, ŝi jam sentis [ŝi/ŝin/ŝia/ŝian/si/sin/sia/sian] pli bone.', NULL, 'Strange, kiam ŝi vidis <b>lian</b> kuraciston, ŝi sentis <b>sin</b> malbone, sed tuj kiam ŝi vidis <b>sian</b> kuraciston alveni, ŝi jam sentis <b>sin</b> pli bone.', 'strange kiam sxi vidis lian kuraciston sxi sentis sin malbone sed tuj kiam sxi vidis sian kuraciston alveni sxi jam sentis sin pli bone', '', 0, 0
    UNION ALL SELECT 68, 'gr08_22', 22, 'Oni [oni/onin/onia/onian/si/sin/sia/sian] demandas, ĉu ŝi ametas [li/lin/lia/lian/ŝi/ŝin/ŝia/ŝian/si/sin/sia/sian] kuraciston.', NULL, 'Oni <b>sin</b> demandas, ĉu ŝi ametas <b>sian</b> kuraciston.', 'oni sin demandas cxu sxi ametas sian kuraciston', '', 0, 0
  ) AS novaj
  WHERE NOT EXISTS (SELECT 1 FROM ekzerceroj WHERE ekzerco_id = 68 AND kodo = 'gr08_17');

INSERT INTO ekzerceroj (ekzerco_id, kodo, numero, demando, respondmodelo, respondo, normaligita, bildo, forigita, korektebla)
  SELECT * FROM (
    SELECT 72 AS ekzerco_id, 'gr10_07' AS kodo, 7 AS numero, 'Tom * Linda estas student*.' AS demando, NULL AS respondmodelo, 'Tom <b>kaj</b> Linda estas student<b>oj</b>.' AS respondo, 'tom kaj linda estas studentoj' AS normaligita, '' AS bildo, 0 AS forigita, 0 AS korektebla
    UNION ALL SELECT 72, 'gr10_08', 8, 'En universitat* restoraci* ili observas blond* junul*, kiu agas plej strange:', NULL, 'En universitat<b>a</b> restoraci<b>o</b> ili observas blond<b>an</b> junul<b>on</b>, kiu agas plej strange:', 'en universitata restoracio ili observas blondan junulon kiu agas plej strange', '', 0, 0
    UNION ALL SELECT 72, 'gr10_09', 9, 'dum li parolas * knabino, li kaŝ* metas io* en ŝi* kafotaso*.', NULL, 'dum li parolas <b>al</b> knabino, li kaŝ<b>e</b> metas io<b>n</b> en ŝi<b>an</b> kafotaso<b>n</b>.', 'dum li parolas al knabino li kasxe metas ion en sxian kafotason', '', 0, 0
    UNION ALL SELECT 72, 'gr10_10', 10, 'Eble estis drogo, ĉar tuj post ki* ŝi ekstaras kaj forlasas la restoracio*, * la koridor* ŝi jam perdas la konscion.', NULL, 'Eble estis drogo, ĉar tuj post ki<b>am</b> ŝi ekstaras kaj forlasas la restoracio<b>n</b>, <b>en</b> la koridor<b>o</b> ŝi jam perdas la konscion.', 'eble estis drogo cxar tuj post kiam sxi ekstaras kaj forlasas la restoracion en la koridoro sxi jam perdas la konscion', '', 0, 0
    UNION ALL SELECT 72, 'gr10_11', 11, 'Intertemp*, Bob sid*is ĉe Tom kaj Linda.', NULL, 'Intertemp<b>e</b>, Bob sid<b>iĝ</b>is ĉe Tom kaj Linda.', 'intertempe bob sidigxis cxe tom kaj linda', '', 0, 0
    UNION ALL SELECT 72, 'gr10_12', 12, 'Li povas rakont* al ili, ki* estas la knabino: ŝi estas Gerda, nova instruist* pri kriptaĵoscienco (*novaj sekretaj lingvoj).', NULL, 'Li povas rakont<b>i</b> al ili, ki<b>u</b> estas la knabino: ŝi estas Gerda, nova instruist<b>ino</b> pri kriptaĵoscienco (<b>mal</b>novaj sekretaj lingvoj).', 'li povas rakonti al ili kiu estas la knabino sxi estas gerda nova instruistino pri kriptajxoscienco (malnovaj sekretaj lingvoj)', '', 0, 0
    UNION ALL SELECT 72, 'gr10_13', 13, 'Ronga, la profesoro pri lingvistiko, volis, ke ŝi ven* al la universitato * instru* kaj labor* kun li.', NULL, 'Ronga, la profesoro pri lingvistiko, volis, ke ŝi ven<b>u</b> al la universitato <b>por</b> instru<b>i</b> kaj labor<b>i</b> kun li.', 'ronga la profesoro pri lingvistiko volis ke sxi venu al la universitato por instrui kaj labori kun li', '', 0, 0
    UNION ALL SELECT 72, 'gr10_14', 14, 'Kiam ili aŭdas ŝi* falbruon el la koridor*, Bob kaj Tom rapidas por helpi ŝi*.', NULL, 'Kiam ili aŭdas ŝi<b>an</b> falbruon el la koridor<b>o</b>, Bob kaj Tom rapidas por helpi ŝi<b>n</b>.', 'kiam ili auxdas sxian falbruon el la koridoro bob kaj tom rapidas por helpi sxin', '', 0, 0
    UNION ALL SELECT 72, 'gr10_15', 15, 'Bob metas ŝin bone, tiel * ŝi kuŝu komforte, kaj Tom ir* vok* flegistinon.', NULL, 'Bob metas ŝin bone, tiel <b>ke</b> ŝi kuŝu komforte, kaj Tom ir<b>as</b> vok<b>i</b> flegistinon.', 'bob metas sxin bone tiel ke sxi kusxu komforte kaj tom iras voki flegistinon', '', 0, 0
    UNION ALL SELECT 72, 'gr10_16', 16, 'Tiu flegistino, dika, grasa kaj parolema, nur post long* diskut* kun Tom, konsciiĝas * tio, ke la afero urĝas.', NULL, 'Tiu flegistino, dika, grasa kaj parolema, nur post long<b>a</b> diskut<b>ado</b> kun Tom, konsciiĝas <b>pri</b> tio, ke la afero urĝas.', 'tiu flegistino dika grasa kaj parolema nur post longa diskutado kun tom konsciigxas pri tio ke la afero urgxas|tiu flegistino dika grasa kaj parolema nur post longa diskuto kun tom konsciigxas pri tio ke la afero urgxas', '', 0, 0
    UNION ALL SELECT 72, 'gr10_17', 17, 'Se ŝi est* pli zorgema, ŝi * rapidus kaj eble ne okazus jeno:', NULL, 'Se ŝi est<b>us</b> pli zorgema, ŝi <b>pli</b> rapidus kaj eble ne okazus jeno:', 'se sxi estus pli zorgema sxi pli rapidus kaj eble ne okazus jeno', '', 0, 0
    UNION ALL SELECT 72, 'gr10_18', 18, 'Kiam Tom fine *venas kun la flegistino, Gerda estas for, kaj Bob sidas ĉe la koridor* mur*, bat*a surkape.', NULL, 'Kiam Tom fine <b>al</b>venas kun la flegistino, Gerda estas for, kaj Bob sidas ĉe la koridor<b>a</b> mur<b>o</b>, bat<b>it</b>a surkape.', 'kiam tom fine alvenas kun la flegistino gerda estas for kaj bob sidas cxe la koridora muro batita surkape', '', 0, 0
    UNION ALL SELECT 72, 'gr10_19', 19, 'Kion *tempe faras Linda?', NULL, 'Kion <b>dum</b>tempe faras Linda?', 'kion dumtempe faras linda', '', 0, 0
    UNION ALL SELECT 72, 'gr10_20', 20, 'Ŝi pli kaj pli *trankvil*as, lasite sola * la universitata restoracio kun la blond* strang*.', NULL, 'Ŝi pli kaj pli <b>mal</b>trankvil<b>iĝ</b>as, lasite sola <b>en</b> la universitata restoracio kun la blond<b>a</b> strang<b>ulo</b>.', 'sxi pli kaj pli maltrankviligxas lasite sola en la universitata restoracio kun la blonda strangulo', '', 0, 0
    UNION ALL SELECT 72, 'gr10_21', 21, 'Ŝi observ* lin, kaj kiam li eliras tra la pordo alurb*, ŝi sekvas li*.', NULL, 'Ŝi observ<b>adas</b> lin, kaj kiam li eliras tra la pordo alurb<b>en</b>, ŝi sekvas li<b>n</b>.', 'sxi observadas lin kaj kiam li eliras tra la pordo alurben sxi sekvas lin|sxi observas lin kaj kiam li eliras tra la pordo alurben sxi sekvas lin', '', 0, 0
    UNION ALL SELECT 72, 'gr10_22', 22, 'Linda estas junulino iom tim*, certe belega.', NULL, 'Linda estas junulino iom tim<b>ema</b>, certe belega.', 'linda estas junulino iom timema certe belega', '', 0, 0
    UNION ALL SELECT 72, 'gr10_23', 23, 'Tom am*as ŝin; li havas okulojn nur * ŝi.', NULL, 'Tom am<b>eg</b>as ŝin; li havas okulojn nur <b>por</b> ŝi.', 'tom amegas sxin li havas okulojn nur por sxi', '', 0, 0
    UNION ALL SELECT 72, 'gr10_24', 24, 'Li zorgas pri ŝi. Ĉu ŝi trov* en danĝero?', NULL, 'Li zorgas pri ŝi. Ĉu ŝi trov<b>iĝas</b> en danĝero?', 'li zorgas pri sxi cxu sxi trovigxas en dangxero', '', 0, 0
    UNION ALL SELECT 72, 'gr10_25', 25, 'Ki*, fakte, ŝi iros?', NULL, 'Ki<b>en</b>, fakte, ŝi iros?', 'kien fakte sxi iros', '', 0, 0
    UNION ALL SELECT 72, 'gr10_26', 26, 'Kaj Gerda, kien * foriĝis?', NULL, 'Kaj Gerda, kien <b>ŝi</b> foriĝis?', 'kaj gerda kien sxi forigxis', '', 0, 0
    UNION ALL SELECT 72, 'gr10_27', 27, 'Ki* okaz* kun ŝi?', NULL, 'Ki<b>o</b> okaz<b>is</b> kun ŝi?', 'kio okazis kun sxi', '', 0, 0
    UNION ALL SELECT 72, 'gr10_28', 28, 'La afero * pli kaj pli mistera!', NULL, 'La afero <b>iĝas</b> pli kaj pli mistera!', 'la afero igxas pli kaj pli mistera', '', 0, 0
  ) AS novaj
  WHERE NOT EXISTS (SELECT 1 FROM ekzerceroj WHERE ekzerco_id = 72 AND kodo = 'gr10_07');

INSERT INTO ekzerceroj (ekzerco_id, kodo, numero, demando, respondmodelo, respondo, normaligita, bildo, forigita, korektebla)
  SELECT * FROM (
    SELECT 74 AS ekzerco_id, 'gr11_08' AS kodo, 8 AS numero, 'Mi volis aspekti pli bele ol normale. Mi [ig/iĝ]is min pli bela antaŭ la promenado.' AS demando, NULL AS respondmodelo, 'Mi volis aspekti pli bele ol normale. Mi <b>ig</b>is min pli bela antaŭ la promenado.' AS respondo, 'mi volis aspekti pli bele ol normale mi igis min pli bela antaux la promenado' AS normaligita, '' AS bildo, 0 AS forigita, 0 AS korektebla
    UNION ALL SELECT 74, 'gr11_09', 9, 'Antaŭ la promenado, mi [ig/iĝ]is pli bela.', NULL, 'Antaŭ la promenado, mi <b>iĝ</b>is pli bela.', 'antaux la promenado mi igxis pli bela', '', 0, 0
    UNION ALL SELECT 74, 'gr11_10', 10, 'Penjo ridis pri mi, ĉar mi plibel[ig/iĝ]is min.', NULL, 'Penjo ridis pri mi, ĉar mi plibel<b>ig</b>is min.', 'penjo ridis pri mi cxar mi plibeligis min', '', 0, 0
    UNION ALL SELECT 74, 'gr11_11', 11, 'Ni veturis en la urbon. Vetur[ig/iĝ]is nin Penjo.', NULL, 'Ni veturis en la urbon. Vetur<b>ig</b>is nin Penjo.', 'ni veturis en la urbon veturigis nin penjo', '', 0, 0
    UNION ALL SELECT 74, 'gr11_12', 12, 'Ŝi [ig/iĝ]is mia amikino tuj post mia unua tago en la laborejo.', NULL, 'Ŝi <b>iĝ</b>is mia amikino tuj post mia unua tago en la laborejo.', 'sxi igxis mia amikino tuj post mia unua tago en la laborejo', '', 0, 0
    UNION ALL SELECT 74, 'gr11_13', 13, 'Antaŭ la forveturo ŝi trovis min en mia ĉambro, kie mi plibel[ig/iĝ]is.', NULL, 'Antaŭ la forveturo ŝi trovis min en mia ĉambro, kie mi plibel<b>iĝ</b>is.', 'antaux la forveturo sxi trovis min en mia cxambro kie mi plibeligxis', '', 0, 0
    UNION ALL SELECT 74, 'gr11_14', 14, 'La urbo trov[ig/iĝ]as tro malproksime de nia laborejo por iri piede.', NULL, 'La urbo trov<b>iĝ</b>as tro malproksime de nia laborejo por iri piede.', 'la urbo trovigxas tro malproksime de nia laborejo por iri piede', '', 0, 0
    UNION ALL SELECT 74, 'gr11_15', 15, 'Penjo ne havas aŭton, sed ŝi sukcesis hav[ig/iĝ]i al si la aŭton de Bob.', NULL, 'Penjo ne havas aŭton, sed ŝi sukcesis hav<b>ig</b>i al si la aŭton de Bob.', 'penjo ne havas auxton sed sxi sukcesis havigi al si la auxton de bob', '', 0, 0
    UNION ALL SELECT 74, 'gr11_16', 16, 'Post longa promenado en la urbo ni volis eksidi en trinkejo. Tuj post kiam ni sid[ig/iĝ]is ĉe tablo, iu ulo turnis sin.', NULL, 'Post longa promenado en la urbo ni volis eksidi en trinkejo. Tuj post kiam ni sid<b>iĝ</b>is ĉe tablo, iu ulo turnis sin.', 'post longa promenado en la urbo ni volis eksidi en trinkejo tuj post kiam ni sidigxis cxe tablo iu ulo turnis sin', '', 0, 0
    UNION ALL SELECT 74, 'gr11_17', 17, 'Li turn[ig/iĝ]is al ni kaj ekrigardis nin.', NULL, 'Li turn<b>iĝ</b>is al ni kaj ekrigardis nin.', 'li turnigxis al ni kaj ekrigardis nin', '', 0, 0
    UNION ALL SELECT 74, 'gr11_18', 18, 'Ni eksentis nin malbonaj. Lia rigardado malbonsent[ig/iĝ]is nin.', NULL, 'Ni eksentis nin malbonaj. Lia rigardado malbonsent<b>ig</b>is nin.', 'ni eksentis nin malbonaj lia rigardado malbonsentigis nin', '', 0, 0
    UNION ALL SELECT 74, 'gr11_19', 19, 'Ni devis agi. Ni ne plu restis sidaj, ni restar[ig/iĝ]is, tiel dev[ig/iĝ]ante lin forturni sin.', NULL, 'Ni devis agi. Ni ne plu restis sidaj, ni restar<b>iĝ</b>is, tiel dev<b>ig</b>ante lin forturni sin.', 'ni devis agi ni ne plu restis sidaj ni restarigxis tiel devigante lin forturni sin', '', 0, 0
    UNION ALL SELECT 74, 'gr11_20', 20, 'Li komprenis, ke li ĝenis nin ade rigardante al ni. Ni kompren[ig/iĝ]is al li, ke rigardado povas esti maldiskreta.', NULL, 'Li komprenis, ke li ĝenis nin ade rigardante al ni. Ni kompren<b>ig</b>is al li, ke rigardado povas esti maldiskreta.', 'li komprenis ke li gxenis nin ade rigardante al ni ni komprenigis al li ke rigardado povas esti maldiskreta', '', 0, 0
    UNION ALL SELECT 74, 'gr11_21', 21, 'Mi lernas multon en la urbo. Ĝi lern[ig/iĝ]as min pri la vivo.', NULL, 'Mi lernas multon en la urbo. Ĝi lern<b>ig</b>as min pri la vivo.', 'mi lernas multon en la urbo gxi lernigas min pri la vivo', '', 0, 0
    UNION ALL SELECT 74, 'gr11_22', 22, 'Multhoma kunvivado lern[ig/iĝ]as kvazaŭ aŭtomate en la urbo.', NULL, 'Multhoma kunvivado lern<b>iĝ</b>as kvazaŭ aŭtomate en la urbo.', 'multhoma kunvivado lernigxas kvazaux auxtomate en la urbo', '', 0, 0
  ) AS novaj
  WHERE NOT EXISTS (SELECT 1 FROM ekzerceroj WHERE ekzerco_id = 74 AND kodo = 'gr11_08');

-- 2. Anciennes questions masquées (seulement si les nouvelles sont là)
UPDATE ekzerceroj SET forigita = 1 WHERE id IN (392, 393) AND ekzerco_id = 67
  AND EXISTS (SELECT 1 FROM (SELECT kodo FROM ekzerceroj WHERE ekzerco_id = 67 AND kodo = 'gr08_11') AS t);
UPDATE ekzerceroj SET forigita = 1 WHERE id IN (394, 395, 396) AND ekzerco_id = 68
  AND EXISTS (SELECT 1 FROM (SELECT kodo FROM ekzerceroj WHERE ekzerco_id = 68 AND kodo = 'gr08_17') AS t);
UPDATE ekzerceroj SET forigita = 1 WHERE id IN (419, 420, 421, 422, 423, 424, 425, 426) AND ekzerco_id = 72
  AND EXISTS (SELECT 1 FROM (SELECT kodo FROM ekzerceroj WHERE ekzerco_id = 72 AND kodo = 'gr10_07') AS t);
UPDATE ekzerceroj SET forigita = 1 WHERE id IN (434, 435, 436, 437) AND ekzerco_id = 74
  AND EXISTS (SELECT 1 FROM (SELECT kodo FROM ekzerceroj WHERE ekzerco_id = 74 AND kodo = 'gr11_08') AS t);

-- 3. Types et consignes (l'aide à la saisie cx → ĉ ne sert qu'aux champs)
UPDATE ekzercoj SET typo = 'elektlisto', x2u = 0, komando = 'Elektu la ĝustan vorton.' WHERE id = 67 AND typo = 'stelo-2';
UPDATE ekzercoj SET typo = 'elektlisto', x2u = 0, komando = 'Elektu la ĝustan pronomon kun la ĝusta finaĵo.' WHERE id = 68 AND typo = 'stelo-2';
UPDATE ekzercoj SET typo = 'plenigu', komando = 'Plenigu ĉiun truon per la ĝusta vorto aŭ vortero.' WHERE id = 72 AND typo = 'stelo-2';
UPDATE ekzercoj SET typo = 'elektlisto', x2u = 0, komando = 'Elektu la ĝustan formon: <b>iĝ</b> aŭ <b>ig</b>.' WHERE id = 74 AND typo = 'stelo-2';

-- Résumé attendu : 67 → 6 questions, 68 → 6, 72 → 22, 74 → 15.
SELECT id, typo, x2u, komando FROM ekzercoj WHERE id IN (67, 68, 72, 74);
SELECT ekzerco_id, SUM(forigita = 0) AS videblaj, SUM(forigita = 1) AS kasxitaj, MIN(IF(forigita = 0, numero, NULL)) AS de, MAX(IF(forigita = 0, numero, NULL)) AS al
  FROM ekzerceroj WHERE ekzerco_id IN (67, 68, 72, 74) GROUP BY ekzerco_id;
