-- Paŝoj al plena posedo : correction automatique de 8 exercices aux réponses convergentes (issue #1083).
-- Réponses attendues proposées d'après les réponses des élèves en prod, validées par Emmanuelle.
-- - 17.4 (200), 20.4 (217), 24.4 (241) : les choix deviennent des menus (elektlisto) ; la réponse est la phrase complète.
-- - 16.4 (194), 17.4 (199), 22.4 (230), 28.4 (270), 30.4 (282) : réponse en un mot, la consigne demande « skribu nur la vorton ».
-- Quand plusieurs réponses sont justes, elles sont toutes acceptées (séparées par |).
-- Corrections d'énoncés : 217 n° 19 et 21 (ŜIA/SIA, ŜIAJ/SIAJ), 217 n° 20 (konsciencriproĉoj), 199 n° 24 et 28 (deux définitions réunies).
-- Le script vaut pour la prod (mêmes id) et peut être rejoué sans risque. Nécessite sql/21.
SET NAMES utf8mb4;


-- 1. 17.4 (200) : forstreku la malkorektan → menus
UPDATE ekzerceroj SET demando = '[ĈIU/ĈIA] lernanto devas studi la participojn.' WHERE id = 1675 AND ekzerco_id = 200 AND demando = '(ĈIU, ĈIA) lernanto devas studi la participojn.';
UPDATE ekzerceroj SET normaligita = 'ĉiu lernanto devas studi la participojn' WHERE id = 1675 AND ekzerco_id = 200 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET demando = 'Tio forigas [ĈIUN/ĈIAN] dubon pri la estonteco de la lingvo.' WHERE id = 1676 AND ekzerco_id = 200 AND demando = 'Tio forigas (ĈIUN, ĈIAN) dubon pri la estonteco de la lingvo.';
UPDATE ekzerceroj SET normaligita = 'tio forigas ĉian dubon pri la estonteco de la lingvo|tio forigas ĉiun dubon pri la estonteco de la lingvo' WHERE id = 1676 AND ekzerco_id = 200 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET demando = 'Lia klarigo forigis [ĈIUJN/ĈIAJN] miajn dubojn pri lia konduto.' WHERE id = 1677 AND ekzerco_id = 200 AND demando = 'Lia klarigo forigis (ĈIUJN, ĈIAJN) miajn dubojn pri lia konduto.';
UPDATE ekzerceroj SET normaligita = 'lia klarigo forigis ĉiujn miajn dubojn pri lia konduto' WHERE id = 1677 AND ekzerco_id = 200 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET demando = 'Ni ekskursos en [ĈIU/ĈIA] vetero.' WHERE id = 1678 AND ekzerco_id = 200 AND demando = 'Ni ekskursos en (ĈIU, ĈIA) vetero.';
UPDATE ekzerceroj SET normaligita = 'ni ekskursos en ĉia vetero' WHERE id = 1678 AND ekzerco_id = 200 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET demando = 'Ke Esperanto plene funkcias, devus esti evidenta al [ĈIU/ĈIA] plej elementa inteligenteco.' WHERE id = 1679 AND ekzerco_id = 200 AND demando = 'Ke Esperanto plene funkcias, devus esti evidenta al (ĈIU, ĈIA) plej elementa inteligenteco.';
UPDATE ekzerceroj SET normaligita = 'ke esperanto plene funkcias devus esti evidenta al ĉiu plej elementa inteligenteco|ke esperanto plene funkcias devus esti evidenta al ĉia plej elementa inteligenteco' WHERE id = 1679 AND ekzerco_id = 200 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET demando = 'Ili ellernis en la daŭro [DE/DA] iaj kelke [DE/DA] semajnoj.' WHERE id = 1680 AND ekzerco_id = 200 AND demando = 'Ili ellernis en la daŭro (DE, DA) iaj kelke (DE, DA) semajnoj.';
UPDATE ekzerceroj SET normaligita = 'ili ellernis en la daŭro de iaj kelke da semajnoj' WHERE id = 1680 AND ekzerco_id = 200 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET demando = 'Esperanto [EVOLUAS/EVOLUIGAS] laŭ la natura kaj rekta vojo.' WHERE id = 1681 AND ekzerco_id = 200 AND demando = 'Esperanto (EVOLUAS, EVOLUIGAS) laŭ la natura kaj rekta vojo.';
UPDATE ekzerceroj SET normaligita = 'esperanto evoluas laŭ la natura kaj rekta vojo' WHERE id = 1681 AND ekzerco_id = 200 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET demando = 'Ni ferias surborde de [NIGRA MARO/LA NIGRA MARO].' WHERE id = 1682 AND ekzerco_id = 200 AND demando = 'Ni ferias surborde de (NIGRA MARO, LA NIGRA MARO).';
UPDATE ekzerceroj SET normaligita = 'ni ferias surborde de la nigra maro' WHERE id = 1682 AND ekzerco_id = 200 AND COALESCE(normaligita, '') = '';
UPDATE ekzercoj SET komando = 'Elektu ĉiukaze la korektan vorton:' WHERE id = 200 AND komando = 'El la vortoj inter krampoj, forstreku ĉiukaze la malkorektan:';
UPDATE ekzercoj SET typo = 'elektlisto', x2u = 0, korektebla = 1 WHERE id = 200 AND typo = 'verkado-1';

-- 2. 20.4 (217) : choix entre parenthèses → menus, avec les coquilles corrigées
UPDATE ekzerceroj SET demando = 'Ĉiu el vi ricevos [LIAN/VIAN/SIAN] monon.' WHERE id = 1770 AND ekzerco_id = 217 AND demando = 'Ĉiu el vi ricevos (LIAN, VIAN, SIAN) monon.';
UPDATE ekzerceroj SET normaligita = 'ĉiu el vi ricevos sian monon' WHERE id = 1770 AND ekzerco_id = 217 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET demando = 'Neniu el ni evitos [NIAN/SIAN/LIAN] sorton.' WHERE id = 1771 AND ekzerco_id = 217 AND demando = 'Neniu el ni evitos (NIAN, SIAN, LIAN) sorton.';
UPDATE ekzerceroj SET normaligita = 'neniu el ni evitos sian sorton' WHERE id = 1771 AND ekzerco_id = 217 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET demando = 'Karlo kaj [LIA/SIA] frato ne povas iri al la konferenco.' WHERE id = 1772 AND ekzerco_id = 217 AND demando = 'Karlo kaj (LIA, SIA) frato ne povas iri al la konferenco.';
UPDATE ekzerceroj SET normaligita = 'karlo kaj lia frato ne povas iri al la konferenco' WHERE id = 1772 AND ekzerco_id = 217 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET demando = 'Skłodowska kaj [ŜIA/SIA] edzo eltrovis radiumon.' WHERE id = 1773 AND ekzerco_id = 217 AND demando = 'Skłodowska kaj (SIA, SIA) edzo eltrovis radiumon.';
UPDATE ekzerceroj SET normaligita = 'skłodowska kaj ŝia edzo eltrovis radiumon' WHERE id = 1773 AND ekzerco_id = 217 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET demando = 'Li volis sin liberigi de la konsciencriproĉoj [LIN/SIN] turmentantaj.' WHERE id = 1774 AND ekzerco_id = 217 AND demando = 'Li volis sin liberigi de la konsciencriprocoj (LIN, SIN) turmentantaj.';
UPDATE ekzerceroj SET normaligita = 'li volis sin liberigi de la konsciencriproĉoj lin turmentantaj' WHERE id = 1774 AND ekzerco_id = 217 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET demando = 'Ŝi tre amas la kanton kantatan de [ŜIAJ/SIAJ] infanoj.' WHERE id = 1775 AND ekzerco_id = 217 AND demando = 'Ŝi tre amas la kanton kantatan de (SIAJ, SIAJ) infanoj.';
UPDATE ekzerceroj SET normaligita = 'ŝi tre amas la kanton kantatan de siaj infanoj' WHERE id = 1775 AND ekzerco_id = 217 AND COALESCE(normaligita, '') = '';
UPDATE ekzercoj SET komando = 'En la subaj propozicioj elektu ĉiufoje la ĝustan vorton:' WHERE id = 217 AND komando = 'En la subaj propozicioj elektu ĉiufoje la ĝustan vorton el tiuj inter krampoj:';
UPDATE ekzercoj SET typo = 'elektlisto', x2u = 0, korektebla = 1 WHERE id = 217 AND typo = 'verkado-1';

-- 3. 24.4 (241) : PLI aŭ PLU → menus
UPDATE ekzerceroj SET demando = 'Iru [PLI/PLU] rapide!' WHERE id = 1949 AND ekzerco_id = 241 AND demando = 'Iru _______ rapide!';
UPDATE ekzerceroj SET normaligita = 'iru pli rapide' WHERE id = 1949 AND ekzerco_id = 241 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET demando = 'Mi postulus nenion [PLI/PLU] krom ke oni montru al mi estimon.' WHERE id = 1950 AND ekzerco_id = 241 AND demando = 'Mi postulus nenion ________ krom ke oni montru al mi estimon.';
UPDATE ekzerceroj SET normaligita = 'mi postulus nenion plu krom ke oni montru al mi estimon|mi postulus nenion pli krom ke oni montru al mi estimon' WHERE id = 1950 AND ekzerco_id = 241 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET demando = 'Danĝere estas lin lasi [PLI/PLU] en tia libereco.' WHERE id = 1951 AND ekzerco_id = 241 AND demando = 'Danĝere estas lin lasi _______ en tia libereco.';
UPDATE ekzerceroj SET normaligita = 'danĝere estas lin lasi plu en tia libereco' WHERE id = 1951 AND ekzerco_id = 241 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET demando = 'Li ne vivos [PLI/PLU] ol unu tagon.' WHERE id = 1952 AND ekzerco_id = 241 AND demando = 'Li ne vivos _________ol unu tagon.';
UPDATE ekzerceroj SET normaligita = 'li ne vivos pli ol unu tagon' WHERE id = 1952 AND ekzerco_id = 241 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET demando = 'Mi ne povas iri unu paŝon [PLI/PLU].' WHERE id = 1953 AND ekzerco_id = 241 AND demando = 'Mi ne povas iri unu paŝon __________.  ';
UPDATE ekzerceroj SET normaligita = 'mi ne povas iri unu paŝon plu' WHERE id = 1953 AND ekzerco_id = 241 AND COALESCE(normaligita, '') = '';
UPDATE ekzercoj SET typo = 'elektlisto', x2u = 0, korektebla = 1 WHERE id = 241 AND typo = 'verkado-1';

-- 4. Réponse en un mot : 16.4 (194), 22.4 (230), 17.4 (199), 28.4 (270), 30.4 (282)
UPDATE ekzerceroj SET demando = 'akcepti' WHERE id = 1669 AND ekzerco_id = 199 AND demando = 'akcepti; ne plu teni';
UPDATE ekzerceroj SET demando = 'ne plu teni' WHERE id = 1673 AND ekzerco_id = 199 AND demando = '';
UPDATE ekzerceroj SET normaligita = 'advokato' WHERE id = 1625 AND ekzerco_id = 194 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET normaligita = 'formiko' WHERE id = 1626 AND ekzerco_id = 194 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET normaligita = 'kelnero|kelnerino' WHERE id = 1627 AND ekzerco_id = 194 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET normaligita = 'katalogo|listo|registro|indekso' WHERE id = 1628 AND ekzerco_id = 194 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET normaligita = 'klifo|klifoj' WHERE id = 1629 AND ekzerco_id = 194 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET normaligita = 'brilianto' WHERE id = 1630 AND ekzerco_id = 194 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET normaligita = 'palpebro|palpebroj' WHERE id = 1631 AND ekzerco_id = 194 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET normaligita = 'kuracilo|medikamento|medicinaĵo' WHERE id = 1632 AND ekzerco_id = 194 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET normaligita = 'marko|etikedo|emblemo' WHERE id = 1633 AND ekzerco_id = 194 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET normaligita = 'koverto' WHERE id = 1634 AND ekzerco_id = 194 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET normaligita = 'kurento|elektra kurento|elektrofluo' WHERE id = 1886 AND ekzerco_id = 230 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET normaligita = 'mansardo' WHERE id = 1887 AND ekzerco_id = 230 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET normaligita = 'korno' WHERE id = 1888 AND ekzerco_id = 230 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET normaligita = 'sklavo' WHERE id = 1889 AND ekzerco_id = 230 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET normaligita = 'avizo|anonco|komuniko|sciigo' WHERE id = 1890 AND ekzerco_id = 230 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET normaligita = 'kravato' WHERE id = 1891 AND ekzerco_id = 230 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET normaligita = 'epidemio' WHERE id = 1892 AND ekzerco_id = 230 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET normaligita = 'permesilo|rajtigilo|atestilo|licenco' WHERE id = 1893 AND ekzerco_id = 230 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET normaligita = 'sarkasmo' WHERE id = 1894 AND ekzerco_id = 230 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET normaligita = 'osto' WHERE id = 1895 AND ekzerco_id = 230 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET normaligita = 'postlasi' WHERE id = 1666 AND ekzerco_id = 199 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET normaligita = 'ellasi|preterlasi' WHERE id = 1667 AND ekzerco_id = 199 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET normaligita = 'forlasi' WHERE id = 1668 AND ekzerco_id = 199 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET normaligita = 'allasi' WHERE id = 1669 AND ekzerco_id = 199 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET normaligita = 'translasi' WHERE id = 1670 AND ekzerco_id = 199 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET normaligita = 'tralasi' WHERE id = 1671 AND ekzerco_id = 199 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET normaligita = 'preterlasi' WHERE id = 1672 AND ekzerco_id = 199 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET normaligita = 'delasi' WHERE id = 1673 AND ekzerco_id = 199 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET normaligita = 'enlasi' WHERE id = 1674 AND ekzerco_id = 199 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET normaligita = 'ŝika' WHERE id = 2143 AND ekzerco_id = 270 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET normaligita = 'konfirmigi' WHERE id = 2144 AND ekzerco_id = 270 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET normaligita = 'petola' WHERE id = 2145 AND ekzerco_id = 270 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET normaligita = 'stumpa' WHERE id = 2146 AND ekzerco_id = 270 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET normaligita = 'konduti' WHERE id = 2147 AND ekzerco_id = 270 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET normaligita = 'importo' WHERE id = 2148 AND ekzerco_id = 270 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET normaligita = 'obstina' WHERE id = 2149 AND ekzerco_id = 270 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET normaligita = 'fekundo' WHERE id = 2150 AND ekzerco_id = 270 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET normaligita = 'stuki' WHERE id = 2222 AND ekzerco_id = 282 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET normaligita = 'kota' WHERE id = 2223 AND ekzerco_id = 282 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET normaligita = 'luli' WHERE id = 2224 AND ekzerco_id = 282 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET normaligita = 'moduli' WHERE id = 2225 AND ekzerco_id = 282 AND COALESCE(normaligita, '') = '';
UPDATE ekzercoj SET komando = 'Kiel nomiĝas (skribu nur la vorton):' WHERE id = 194 AND komando = 'Kiel nomiĝas:';
UPDATE ekzercoj SET komando = 'Kiel nomiĝas (skribu nur la vorton):' WHERE id = 230 AND komando = 'Kiel nomiĝas:';
UPDATE ekzercoj SET komando = 'Por ĉiu difino, elektu la ĝustan vorton el la sekvanta listo (skribu nur la vorton):' WHERE id = 199 AND komando = 'Por ĉiu difino, elektu la ĝustan vorton el la sekvanta listo:';
UPDATE ekzercoj SET komando = 'En ĉiu suba grupo de vortoj, unu el la vortoj ne akordas kun la ceteraj. Trovu la nekonforman vorton ĉiukaze (skribu nur la vorton).' WHERE id IN (270, 282) AND komando = 'En ĉiu suba grupo de vortoj, unu el la vortoj ne akordas kun la ceteraj. Trovu la nekonforman vorton ĉiukaze.';
UPDATE ekzercoj SET korektebla = 1 WHERE id = 194 AND korektebla = 0;
UPDATE ekzercoj SET korektebla = 1 WHERE id = 230 AND korektebla = 0;
UPDATE ekzercoj SET korektebla = 1 WHERE id = 199 AND korektebla = 0;
UPDATE ekzercoj SET korektebla = 1 WHERE id = 270 AND korektebla = 0;
UPDATE ekzercoj SET korektebla = 1 WHERE id = 282 AND korektebla = 0;

-- Résumé attendu : 8 exercices corrigés automatiquement, 60 questions avec une réponse attendue.
SELECT id, typo, korektebla, x2u, komando FROM ekzercoj WHERE id IN (194, 199, 200, 217, 230, 241, 270, 282);
SELECT ekzerco_id, COUNT(*) AS demandoj, SUM(COALESCE(normaligita, '') <> '') AS kun_respondo FROM ekzerceroj
  WHERE ekzerco_id IN (194, 199, 200, 217, 230, 241, 270, 282) AND forigita = 0 GROUP BY ekzerco_id;
