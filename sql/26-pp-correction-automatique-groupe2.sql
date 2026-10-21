-- Paŝoj al plena posedo : correction automatique du groupe 2 de #1083 (14 exercices, 122 questions).
-- Réponses validées par Emmanuelle d'après les réponses des élèves en prod et les réponses cochées « juste » par les correcteurs.
-- - Mots à choisir dans une liste (141, 145, 146, 169, 174, 179, 193, 229, 237, 242, 251, 265) : un menu (elektlisto) par trou,
--   avec toute la liste de l'exercice ; la terminaison reste écrite dans la phrase. La réponse est la phrase complète.
-- - Enmetu LA (127, 128) : saisie libre de la phrase entière, comme avant.
-- Quand plusieurs réponses sont justes, elles sont toutes acceptées (séparées par |).
-- Corrections d'énoncés : 229 n° 15 (iia → ilia, trou manquant) et n° 19 (gandajn → grandajn), 251 n° 23 (6ambron → ĉambron) ;
-- 145 n° 15 et 20 : ajout de l'indication « est__ …__a » comme dans les autres questions.
-- Le script vaut pour la prod (mêmes id) et peut être rejoué sans risque. Nécessite sql/21.
SET NAMES utf8mb4;


-- 1. 4.4 (127) : enmetu LA, saisie libre de la phrase entière
UPDATE ekzerceroj SET normaligita = 'mi volas iri al gzdzin donu al mi bileton|mi volas iri al gzdzin donu al mi la bileton' WHERE id = 1107 AND ekzerco_id = 127 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET normaligita = 'mi ne povas iri al la koncerto cxar mi perdis la bileton|mi ne povas iri al koncerto cxar mi perdis la bileton' WHERE id = 1108 AND ekzerco_id = 127 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET normaligita = 'li venis al vilagxo kies nomon li ne sciis|li venis al la vilagxo kies nomon li ne sciis' WHERE id = 1109 AND ekzerco_id = 127 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET normaligita = 'la vilagxo en kiu li logxis estis kvieta kaj trankvila' WHERE id = 1110 AND ekzerco_id = 127 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET normaligita = 'la monon kiun la kasisto sxuldis al ni li ne volis transdoni' WHERE id = 1111 AND ekzerco_id = 127 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET normaligita = 'li tre bedauxris ke li ne povas helpi la petanton' WHERE id = 1112 AND ekzerco_id = 127 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET normaligita = 'amikojn li ne havis cxar nur malofte li forlasis la domon' WHERE id = 1113 AND ekzerco_id = 127 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET normaligita = 'donu al mi kapnajleton por ke mi alfiksu la afisxon|donu al mi kapnajleton por ke mi alfiksu afisxon' WHERE id = 1114 AND ekzerco_id = 127 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET normaligita = 'la filino alparolis la patron kiu staris en la stacidomo|filino alparolis la patron kiu staris en la stacidomo' WHERE id = 1115 AND ekzerco_id = 127 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET normaligita = 'laux la menuo estis haveblaj fisxo kaj viando' WHERE id = 1116 AND ekzerco_id = 127 AND COALESCE(normaligita, '') = '';
UPDATE ekzercoj SET komando = 'Kie la senco tion postulas, enmetu LA en la subajn propoziciojn (reskribu la tutan propozicion):' WHERE id = 127 AND komando = 'Kie la senco tion postulas, enmetu LA en la subajn propoziciojn:';
UPDATE ekzercoj SET korektebla = 1 WHERE id = 127 AND korektebla = 0;

-- 2. 4.4 (128) : enmetu LA, saisie libre de la phrase entière
UPDATE ekzerceroj SET normaligita = 'la suno brilis la cxielo estis blua' WHERE id = 1117 AND ekzerco_id = 128 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET normaligita = 'mi logxas en la cxefurbo de mia lando' WHERE id = 1118 AND ekzerco_id = 128 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET normaligita = 'gxi kusxis sur la fundo de la kesto' WHERE id = 1119 AND ekzerco_id = 128 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET normaligita = 'montru al mi la enhavon de via posxo' WHERE id = 1120 AND ekzerco_id = 128 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET normaligita = 'pri li mi konis nur la nomon kaj la adreson' WHERE id = 1121 AND ekzerco_id = 128 AND COALESCE(normaligita, '') = '';
UPDATE ekzercoj SET komando = 'Kie la senco tion postulas, enmetu LA en la subajn propoziciojn (reskribu la tutan propozicion):' WHERE id = 128 AND komando = 'Kie la senco tion postulas, enmetu LA en la subajn propoziciojn:';
UPDATE ekzercoj SET korektebla = 1 WHERE id = 128 AND korektebla = 0;

-- 3. 6.4 (141) : corrélatifs → menus
UPDATE ekzerceroj SET demando = '[Kie/Kiel/Kia/Kiam/Kiom] estos venintaj la delegitoj, nur [tie/tiel/tia/tiam/tiom] ni povos diskuti la aferon.' WHERE id = 1217 AND ekzerco_id = 141 AND demando = '_________ estos venintaj la delegitoj, nur _______ ni povos diskuti la aferon.';
UPDATE ekzerceroj SET normaligita = 'kiam estos venintaj la delegitoj nur tiam ni povos diskuti la aferon' WHERE id = 1217 AND ekzerco_id = 141 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET demando = '[Kie/Kiel/Kia/Kiam/Kiom] troviĝas abunda manĝaĵo, [tie/tiel/tia/tiam/tiom] mi volas starigi mian domon.' WHERE id = 1218 AND ekzerco_id = 141 AND demando = '_________troviĝas abunda manĝaĵo,_________ mi volas starigi mian domon.';
UPDATE ekzerceroj SET normaligita = 'kie trovigxas abunda mangxajxo tie mi volas starigi mian domon' WHERE id = 1218 AND ekzerco_id = 141 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET demando = '[Kie/Kiel/Kia/Kiam/Kiom] li venis, [tie/tiel/tia/tiam/tiom] li ankaŭ iros.' WHERE id = 1219 AND ekzerco_id = 141 AND demando = '________ li venis, ________ li ankaŭ iros.';
UPDATE ekzerceroj SET normaligita = 'kiel li venis tiel li ankaux iros' WHERE id = 1219 AND ekzerco_id = 141 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET demando = '[Kie/Kiel/Kia/Kiam/Kiom] li volas havi, [tie/tiel/tia/tiam/tiom] li ricevu.' WHERE id = 1220 AND ekzerco_id = 141 AND demando = '________ li volas havi, ________ li ricevu.';
UPDATE ekzerceroj SET normaligita = 'kiom li volas havi tiom li ricevu' WHERE id = 1220 AND ekzerco_id = 141 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET demando = '[Kie/Kiel/Kia/Kiam/Kiom] estas via laboro, [tie/tiel/tia/tiam/tiom] estas via valoro.' WHERE id = 1221 AND ekzerco_id = 141 AND demando = '_________ estas via laboro, ________ estas via valoro.';
UPDATE ekzerceroj SET normaligita = 'kia estas via laboro tia estas via valoro' WHERE id = 1221 AND ekzerco_id = 141 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET demando = '[Kie/Kiel/Kia/Kiam/Kiom] vi postulas, [tie/tiel/tia/tiam/tiom] ni ne povas doni.' WHERE id = 1222 AND ekzerco_id = 141 AND demando = '_________ vi postulas, _________ ni ne povas doni.';
UPDATE ekzerceroj SET normaligita = 'kiom vi postulas tiom ni ne povas doni' WHERE id = 1222 AND ekzerco_id = 141 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET demando = 'Mi malofte renkontis [tie/tiel/tia/tian/tiam/tiom] impertinentulon, [kie/kiel/kia/kian/kiam/kiom] li.' WHERE id = 1223 AND ekzerco_id = 141 AND demando = 'Mi malofte renkontis _________ impertinentulon, ______ li.';
UPDATE ekzerceroj SET normaligita = 'mi malofte renkontis tian impertinentulon kia li|mi malofte renkontis tian impertinentulon kian li|mi malofte renkontis tiel impertinentulon kiel li' WHERE id = 1223 AND ekzerco_id = 141 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET demando = 'Mi renkontis ŝin [tie/tiel/tia/tiam/tiom], [kie/kiel/kia/kiam/kiom] la ponto transiras la riveron.' WHERE id = 1224 AND ekzerco_id = 141 AND demando = 'Mi renkontis ŝin _________, _________ la ponto transiras la riveron.';
UPDATE ekzerceroj SET normaligita = 'mi renkontis sxin tie kie la ponto transiras la riveron' WHERE id = 1224 AND ekzerco_id = 141 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET demando = '[Tie/Tiel/Tia/Tiam/Tiom], [kie/kiel/kia/kiam/kiom] la horloĝo sonigis la kvaran horon, mi aŭdis lian paŝon sur la ŝtuparo.' WHERE id = 1225 AND ekzerco_id = 141 AND demando = '_________, _______ la horloĝo sonigis la kvaran horon, mi aŭdis lian paŝon sur la ŝtuparo.';
UPDATE ekzerceroj SET normaligita = 'tiam kiam la horlogxo sonigis la kvaran horon mi auxdis lian pasxon sur la sxtuparo' WHERE id = 1225 AND ekzerco_id = 141 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET demando = 'La ovacio ne estis [tie/tiel/tia/tiam/tiom] longedaŭra, [kie/kiel/kia/kiam/kiom] li meritis.' WHERE id = 1226 AND ekzerco_id = 141 AND demando = 'La ovacio ne estis ________ longedaŭra, _________ li meritis.';
UPDATE ekzerceroj SET normaligita = 'la ovacio ne estis tiel longedauxra kiel li meritis|la ovacio ne estis tiom longedauxra kiom li meritis' WHERE id = 1226 AND ekzerco_id = 141 AND COALESCE(normaligita, '') = '';
UPDATE ekzercoj SET komando = 'En ĉiu el la sekvantaj propozicioj, elektu korekte unu el la supraj korelativaj paroj:' WHERE id = 141 AND komando = 'En ĉiu el la sekvantaj propozicioj, enmetu korekte unu el la supraj korelativaj paroj:';
UPDATE ekzercoj SET typo = 'elektlisto', x2u = 0, korektebla = 1 WHERE id = 141 AND typo = 'verkado-1';

-- 4. 7.4 (145) : participes actifs → menus sur les terminaisons
UPDATE ekzerceroj SET demando = 'La instruisto pardonis la kulpulon, ĉar li jam pentis (= ĉar li est[as/is/os] pent[ant/int/ont]a).' WHERE id = 1250 AND ekzerco_id = 145 AND demando = 'La instruisto pardonis la kulpulon, ĉar li jam pentis (= ĉar li est_____ pent________a).';
UPDATE ekzerceroj SET normaligita = 'la instruisto pardonis la kulpulon cxar li jam pentis (= cxar li estis pentinta)' WHERE id = 1250 AND ekzerco_id = 145 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET demando = 'Oni ĵetis ŝnuron al la naĝanto, ĝuste kiam li ekdronis (est[as/is/os] dron[ant/int/ont]a).' WHERE id = 1251 AND ekzerco_id = 145 AND demando = 'Oni ĵetis ŝnuron al la naĝanto, ĝuste kiam li ekdronis (est______       dron____a).';
UPDATE ekzerceroj SET normaligita = 'oni jxetis sxnuron al la nagxanto gxuste kiam li ekdronis (estis dronanta)' WHERE id = 1251 AND ekzerco_id = 145 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET demando = 'Kiam mi kuris tiel rapide, mia koro ankoraŭ-ne-krevis-sed-poste-krevos (= mia koro est[as/is/os] krev[ant/int/ont]a).' WHERE id = 1252 AND ekzerco_id = 145 AND demando = 'Kiam mi kuris tiel rapide, mia koro ankoraŭ-ne-krevis-sed-poste-krevos.';
UPDATE ekzerceroj SET normaligita = 'kiam mi kuris tiel rapide mia koro ankorauxnekrevissedpostekrevos (= mia koro estis krevonta)' WHERE id = 1252 AND ekzerco_id = 145 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET demando = 'Hodiaŭ mi ankoraŭ-ne-iris-sed-poste-iros (est[as/is/os] ir[ant/int/ont]a) al la urbo.' WHERE id = 1253 AND ekzerco_id = 145 AND demando = 'Hodiaŭ mi ankoraŭ-ne-iris-sed-poste-iros (est_____ ir_____a) al la urbo.';
UPDATE ekzerceroj SET normaligita = 'hodiaux mi ankorauxneirissedposteiros (estas ironta) al la urbo' WHERE id = 1253 AND ekzerco_id = 145 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET demando = 'Li ne sukcesas kapti la ranon, kiam ĝi jam pli frue saltis (est[as/is/os] salt[ant/int/ont]a).' WHERE id = 1254 AND ekzerco_id = 145 AND demando = 'Li ne sukcesas kapti la ranon, kiam ĝi jam pli frue saltis (est_______ salt_____a).';
UPDATE ekzerceroj SET normaligita = 'li ne sukcesas kapti la ranon kiam gxi jam pli frue saltis (estas saltinta)|li ne sukcesas kapti la ranon kiam gxi jam pli frue saltis (estis saltinta)' WHERE id = 1254 AND ekzerco_id = 145 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET demando = 'Mi ĉiam ĉeestas, kiam li prelegas (est[as/is/os] preleg[ant/int/ont]a).' WHERE id = 1255 AND ekzerco_id = 145 AND demando = 'Mi ĉiam ĉeestas, kiam li prelegas (est______   preleg_____a).';
UPDATE ekzerceroj SET normaligita = 'mi cxiam cxeestas kiam li prelegas (estas preleganta)' WHERE id = 1255 AND ekzerco_id = 145 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET demando = 'Morgaŭ mi laboros (est[as/is/os] labor[ant/int/ont]a) la tutan tagon.' WHERE id = 1256 AND ekzerco_id = 145 AND demando = 'Morgaŭ mi laboros (est_______ labor______a) la tutan tagon.';
UPDATE ekzerceroj SET normaligita = 'morgaux mi laboros (estos laboranta) la tutan tagon' WHERE id = 1256 AND ekzerco_id = 145 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET demando = 'Li certe malhelpos min, kiam mi ankoraŭ-ne-parolis-sed-poste-parolos (= kiam mi est[as/is/os] parol[ant/int/ont]a).' WHERE id = 1257 AND ekzerco_id = 145 AND demando = 'Li certe malhelpos min, kiam mi ankoraŭ-ne-parolis-sed-poste-parolos.';
UPDATE ekzerceroj SET normaligita = 'li certe malhelpos min kiam mi ankorauxneparolissedposteparolos (= kiam mi estos parolonta)|li certe malhelpos min kiam mi ankorauxneparolissedposteparolos (= kiam mi estos parolanta)' WHERE id = 1257 AND ekzerco_id = 145 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET demando = 'Li ricevos ovacion, kiam li finos sian paroladon (est[as/is/os] parol[ant/int/ont]a).' WHERE id = 1258 AND ekzerco_id = 145 AND demando = 'Li ricevos ovacion, kiam li finos sian paroladon (est______ parol_____a).';
UPDATE ekzerceroj SET normaligita = 'li ricevos ovacion kiam li finos sian paroladon (estos parolinta)' WHERE id = 1258 AND ekzerco_id = 145 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET demando = 'Kiam mi jam pli frue solvis (est[as/is/os] solv[ant/int/ont]a) la misteron, la kulpulon mi facile trovis.' WHERE id = 1259 AND ekzerco_id = 145 AND demando = 'Kiam mi jam pli frue solvis (est_____ solv_____a) la misteron, la kulpulon mi facile trovis.';
UPDATE ekzerceroj SET normaligita = 'kiam mi jam pli frue solvis (estis solvinta) la misteron la kulpulon mi facile trovis' WHERE id = 1259 AND ekzerco_id = 145 AND COALESCE(normaligita, '') = '';
UPDATE ekzercoj SET komando = 'Studinte la suprajn ekzemplojn, elektu la ĝustajn finaĵojn por esprimi la samon per aktivaj adjektivoj participaj:' WHERE id = 145 AND komando = 'Studinte la suprajn ekzemplojn, reskribu la subajn propoziciojn, uzante aktivajn adjektivojn participajn:';
UPDATE ekzercoj SET typo = 'elektlisto', x2u = 0, korektebla = 1 WHERE id = 145 AND typo = 'verkado-1';

-- 5. 7.4 (146) : participes passifs → menus sur les terminaisons
UPDATE ekzerceroj SET demando = 'Mi retrovis lin, ĝuste kiam oni ankoraŭ ne forsendis (sed poste sendos) lin (li est[as/is/os] forsend[at/it/ot]a).' WHERE id = 1260 AND ekzerco_id = 146 AND demando = 'Mi retrovis lin, ĝuste kiam oni ankoraŭ ne forsendis (sed poste sendos) lin (li est_____ forsend_____a).';
UPDATE ekzerceroj SET normaligita = 'mi retrovis lin gxuste kiam oni ankoraux ne forsendis (sed poste sendos) lin (li estis forsendota)' WHERE id = 1260 AND ekzerco_id = 146 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET demando = 'Li ĉiam esploras la vagonon, kiam oni ankoraŭ ne plenigis (sed poste plenigos) ĝin (ĝi est[as/is/os] plenig[at/it/ot]a).' WHERE id = 1261 AND ekzerco_id = 146 AND demando = 'Li ĉiam esploras la vagonon, kiam oni ankoraŭ ne plenigis (sed poste plenigos) ĝin (ĝi est________ plenig______a).';
UPDATE ekzerceroj SET normaligita = 'li cxiam esploras la vagonon kiam oni ankoraux ne plenigis (sed poste plenigos) gxin (gxi estas plenigota)' WHERE id = 1261 AND ekzerco_id = 146 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET demando = 'Kiam mi alvenos, la tagordon oni ankoraŭ-ne-difinis-sed-poste-difinos (la tagordo est[as/is/os] difin[at/it/ot]a).' WHERE id = 1262 AND ekzerco_id = 146 AND demando = 'Kiam mi alvenos, la tagordon oni ankoraŭ-ne-difinis-sed-poste-difinos (la tagordo est_______ difin________a).';
UPDATE ekzerceroj SET normaligita = 'kiam mi alvenos la tagordon oni ankorauxnedifinissedpostedifinos (la tagordo estos difinota)' WHERE id = 1262 AND ekzerco_id = 146 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET demando = 'Medikamenton oni ne bezonas (medikamento ne est[as/is/os] bezon[at/it/ot]a), kiam oni estas sana.' WHERE id = 1263 AND ekzerco_id = 146 AND demando = 'Medikamenton oni ne bezonas (medikamento ne est_______ bezon______a),kiam oni estas sana.';
UPDATE ekzerceroj SET normaligita = 'medikamenton oni ne bezonas (medikamento ne estas bezonata) kiam oni estas sana' WHERE id = 1263 AND ekzerco_id = 146 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET demando = 'Kiam ajn li aperis, oni laŭdis lian bonkorecon (lia bonkoreco est[as/is/os] laŭd[at/it/ot]a).' WHERE id = 1264 AND ekzerco_id = 146 AND demando = 'Kiam ajn li aperis, oni laŭdis lian bonkorecon (lia bonkoreco est_____  laŭd______a).';
UPDATE ekzerceroj SET normaligita = 'kiam ajn li aperis oni lauxdis lian bonkorecon (lia bonkoreco estis lauxdata)' WHERE id = 1264 AND ekzerco_id = 146 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET demando = 'Kiam ajn li aperos, oni laŭdos lian bonkorecon (lia bonkoreco est[as/is/os] laŭd[at/it/ot]a).' WHERE id = 1265 AND ekzerco_id = 146 AND demando = 'Kiam ajn li aperos, oni laŭdos lian bonkorecon (lia bonkoreco est______ laŭd____a).';
UPDATE ekzerceroj SET normaligita = 'kiam ajn li aperos oni lauxdos lian bonkorecon (lia bonkoreco estos lauxdata)' WHERE id = 1265 AND ekzerco_id = 146 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET demando = 'Kiam vi ricevos mian leteron, oni certe jam pli frue retrovis vian monujon (via monujo certe est[as/is/os] retrov[at/it/ot]a).' WHERE id = 1266 AND ekzerco_id = 146 AND demando = 'Kiam vi ricevos mian leteron, oni certe jam pli frue retrovis vian monujon (via monujo certe est_______ retrov_______a).';
UPDATE ekzerceroj SET normaligita = 'kiam vi ricevos mian leteron oni certe jam pli frue retrovis vian monujon (via monujo certe estos retrovita)' WHERE id = 1266 AND ekzerco_id = 146 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET demando = 'Dum ni serĉis lin, oni jam pli frue dronigis lin (li est[as/is/os] dronig[at/it/ot]a).' WHERE id = 1267 AND ekzerco_id = 146 AND demando = 'Dum ni serĉis lin, oni jam pli frue dronigis lin (li est_____ dronig_____      a).';
UPDATE ekzerceroj SET normaligita = 'dum ni sercxis lin oni jam pli frue dronigis lin (li estis dronigita)' WHERE id = 1267 AND ekzerco_id = 146 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET demando = 'Kiam oni jam pli frue fermis la pordon (la pordo est[as/is/os] ferm[at/it/ot]a), la vizitantoj ne povas eniri.' WHERE id = 1268 AND ekzerco_id = 146 AND demando = 'Kiam oni jam pli frue fermis la pordon (la pordo est_____ ferm________a), la vizitantoj ne povas eniri.';
UPDATE ekzerceroj SET normaligita = 'kiam oni jam pli frue fermis la pordon (la pordo estas fermita) la vizitantoj ne povas eniri' WHERE id = 1268 AND ekzerco_id = 146 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET demando = 'Ĝuste kiam ni alvenis, oni esploris tiun demandon (tiu demando est[as/is/os] esplor[at/it/ot]a).' WHERE id = 1269 AND ekzerco_id = 146 AND demando = 'Ĝuste kiam ni alvenis, oni esploris tiun demandon (tiu demando est______ esplor_____a).';
UPDATE ekzerceroj SET normaligita = 'gxuste kiam ni alvenis oni esploris tiun demandon (tiu demando estis esplorata)' WHERE id = 1269 AND ekzerco_id = 146 AND COALESCE(normaligita, '') = '';
UPDATE ekzercoj SET komando = 'Studinte la suprajn ekzemplojn, elektu la ĝustajn finaĵojn por esprimi la samon per pasivaj adjektivoj participaj:' WHERE id = 146 AND komando = 'Studinte la suprajn ekzemplojn, reskribu la subajn propoziciojn, uzante pasivajn adjektivojn participajn:';
UPDATE ekzercoj SET typo = 'elektlisto', x2u = 0, korektebla = 1 WHERE id = 146 AND typo = 'verkado-1';

-- 6. 12.4 (169) : prépositions → menus
UPDATE ekzerceroj SET demando = '[Al/Anstataŭ/Antaŭ/Apud/Ĉirkaŭ/Da/De/Dum/Ekster/El] la tuta tago li laboris [al/anstataŭ/antaŭ/apud/ĉirkaŭ/da/de/dum/ekster/el] mi, tiel ke ni restis ĉiam kune.' WHERE id = 1422 AND ekzerco_id = 169 AND demando = '_________ la tuta tago li laboris _________ mi, tiel ke ni restis ĉiam kune.';
UPDATE ekzerceroj SET normaligita = 'dum la tuta tago li laboris apud mi tiel ke ni restis cxiam kune' WHERE id = 1422 AND ekzerco_id = 169 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET demando = '[Al/Anstataŭ/Antaŭ/Apud/Ĉirkaŭ/Da/De/Dum/Ekster/El] la tagmezo, tre proksimume, ni iris [al/anstataŭ/antaŭ/apud/ĉirkaŭ/da/de/dum/ekster/el] la domo kaj laboris [al/anstataŭ/antaŭ/apud/ĉirkaŭ/da/de/dum/ekster/el] pluraj horoj [al/anstataŭ/antaŭ/apud/ĉirkaŭ/da/de/dum/ekster/el] dome.' WHERE id = 1423 AND ekzerco_id = 169 AND demando = '___________ la tagmezo, tre proksimume, ni iris _________ la domo kaj laboris __________ pluraj horoj __________ dome.';
UPDATE ekzerceroj SET normaligita = 'cxirkaux la tagmezo tre proksimume ni iris el la domo kaj laboris dum pluraj horoj ekster dome' WHERE id = 1423 AND ekzerco_id = 169 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET demando = '[Al/Anstataŭ/Antaŭ/Apud/Ĉirkaŭ/Da/De/Dum/Ekster/El] la bovino mi ekhavis iom [al/anstataŭ/antaŭ/apud/ĉirkaŭ/da/de/dum/ekster/el] lakto, kaj mi trinkis tion [al/anstataŭ/antaŭ/apud/ĉirkaŭ/da/de/dum/ekster/el] akvo.' WHERE id = 1424 AND ekzerco_id = 169 AND demando = '___________ la bovino mi ekhavis iom ___________ lakto, kaj mi trinkis tion __________ akvo.';
UPDATE ekzerceroj SET normaligita = 'de la bovino mi ekhavis iom da lakto kaj mi trinkis tion anstataux akvo' WHERE id = 1424 AND ekzerco_id = 169 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET demando = 'Baldaŭ ni trovis nin [al/anstataŭ/antaŭ/apud/ĉirkaŭ/da/de/dum/ekster/el] danĝero, kaj ne plu timis la vojon [al/anstataŭ/antaŭ/apud/ĉirkaŭ/da/de/dum/ekster/el] ni.' WHERE id = 1425 AND ekzerco_id = 169 AND demando = 'Baldaŭ ni trovis nin __________ danĝero, kaj ne plu timis la vojon _________  ni.';
UPDATE ekzerceroj SET normaligita = 'baldaux ni trovis nin ekster dangxero kaj ne plu timis la vojon antaux ni|baldaux ni trovis nin ekster dangxero kaj ne plu timis la vojon cxirkaux ni' WHERE id = 1425 AND ekzerco_id = 169 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET demando = 'La steloj eklumis [al/anstataŭ/antaŭ/apud/ĉirkaŭ/da/de/dum/ekster/el] la klara ĉielo sen eĉ ombro [al/anstataŭ/antaŭ/apud/ĉirkaŭ/da/de/dum/ekster/el] nubo.' WHERE id = 1426 AND ekzerco_id = 169 AND demando = 'La steloj eklumis __________ la klara ĉielo sen eĉ ombro _________ nubo.';
UPDATE ekzerceroj SET normaligita = 'la steloj eklumis el la klara cxielo sen ecx ombro de nubo' WHERE id = 1426 AND ekzerco_id = 169 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET demando = '[Al/Anstataŭ/Antaŭ/Apud/Ĉirkaŭ/Da/De/Dum/Ekster/El] fojno li havis multe, kiun li amasigis [al/anstataŭ/antaŭ/apud/ĉirkaŭ/da/de/dum/ekster/el] la stalo.' WHERE id = 1427 AND ekzerco_id = 169 AND demando = '__________ fojno li havis multe, kiun li amasigis _________ la stalo.';
UPDATE ekzerceroj SET normaligita = 'da fojno li havis multe kiun li amasigis ekster la stalo|da fojno li havis multe kiun li amasigis antaux la stalo|da fojno li havis multe kiun li amasigis apud la stalo|da fojno li havis multe kiun li amasigis cxirkaux la stalo' WHERE id = 1427 AND ekzerco_id = 169 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET demando = 'Mi sopiras [al/anstataŭ/antaŭ/apud/ĉirkaŭ/da/de/dum/ekster/el] mia hejmo, kie zorgojn oni povas restigi [al/anstataŭ/antaŭ/apud/ĉirkaŭ/da/de/dum/ekster/el] la domo.' WHERE id = 1428 AND ekzerco_id = 169 AND demando = 'Mi sopiras __________ mia hejmo, kie zorgojn oni povas restigi __________ la domo.';
UPDATE ekzerceroj SET normaligita = 'mi sopiras al mia hejmo kie zorgojn oni povas restigi ekster la domo' WHERE id = 1428 AND ekzerco_id = 169 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET demando = 'La akuzito pledis [al/anstataŭ/antaŭ/apud/ĉirkaŭ/da/de/dum/ekster/el] la juĝistaro, dirante, ke alia devus stari tie [al/anstataŭ/antaŭ/apud/ĉirkaŭ/da/de/dum/ekster/el] li.' WHERE id = 1429 AND ekzerco_id = 169 AND demando = 'La akuzito pledis _________ la juĝistaro, dirante, ke alia devus stari tie _____________ li.';
UPDATE ekzerceroj SET normaligita = 'la akuzito pledis antaux la jugxistaro dirante ke alia devus stari tie anstataux li' WHERE id = 1429 AND ekzerco_id = 169 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET demando = '[Al/Anstataŭ/Antaŭ/Apud/Ĉirkaŭ/Da/De/Dum/Ekster/El] la amaso, kiu staris [al/anstataŭ/antaŭ/apud/ĉirkaŭ/da/de/dum/ekster/el] li, li kriis, ke li estas amiko [al/anstataŭ/antaŭ/apud/ĉirkaŭ/da/de/dum/ekster/el] la popolo.' WHERE id = 1430 AND ekzerco_id = 169 AND demando = '___________ la amaso, kiu staris _________ li, li kriis, ke li estas amiko _________ la popolo.';
UPDATE ekzerceroj SET normaligita = 'al la amaso kiu staris antaux li li kriis ke li estas amiko de la popolo|al la amaso kiu staris cxirkaux li li kriis ke li estas amiko de la popolo|al la amaso kiu staris apud li li kriis ke li estas amiko de la popolo' WHERE id = 1430 AND ekzerco_id = 169 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET demando = 'La [al/anstataŭ/antaŭ/apud/ĉirkaŭ/da/de/dum/ekster/el]starantoj [al/anstataŭ/antaŭ/apud/ĉirkaŭ/da/de/dum/ekster/el]brakis lin, tuj kiam li promesis [al/anstataŭ/antaŭ/apud/ĉirkaŭ/da/de/dum/ekster/el]i sian amikon.' WHERE id = 1431 AND ekzerco_id = 169 AND demando = 'La __________ starantoj _________ brakis lin, tuj kiam li promesis ________i  sian amikon.';
UPDATE ekzerceroj SET normaligita = 'la apudstarantoj cxirkauxbrakis lin tuj kiam li promesis anstatauxi sian amikon' WHERE id = 1431 AND ekzerco_id = 169 AND COALESCE(normaligita, '') = '';
UPDATE ekzercoj SET komando = 'En la sekvantaj propozicioj elektu korekte unu el jenaj prepozicioj:' WHERE id = 169 AND komando = 'En la sekvantaj propoziciojn enmetu korekte jenajn prepoziciojn:';
UPDATE ekzercoj SET typo = 'elektlisto', x2u = 0, korektebla = 1 WHERE id = 169 AND typo = 'verkado-1';

-- 7. 13.4 (174) : prépositions → menus
UPDATE ekzerceroj SET demando = '[En/Ĝis/Inter/Je/Kontraŭ/Krom/Kun/Laŭ/Malgraŭ/Per] miaj konatoj mi havas neniun intiman amikon [en/ĝis/inter/je/kontraŭ/krom/kun/laŭ/malgraŭ/per] ŝia frato.' WHERE id = 1460 AND ekzerco_id = 174 AND demando = '________ miaj konatoj mi havas neniun intiman amikon _____________ ŝia frato.';
UPDATE ekzerceroj SET normaligita = 'inter miaj konatoj mi havas neniun intiman amikon krom sxia frato' WHERE id = 1460 AND ekzerco_id = 174 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET demando = '[En/Ĝis/Inter/Je/Kontraŭ/Krom/Kun/Laŭ/Malgraŭ/Per] mia opinio, ni trovos la solvon [en/ĝis/inter/je/kontraŭ/krom/kun/laŭ/malgraŭ/per] tiu libro.' WHERE id = 1461 AND ekzerco_id = 174 AND demando = '_________ mia opinio, ni trovos la solvon __________ tiu libro.';
UPDATE ekzerceroj SET normaligita = 'laux mia opinio ni trovos la solvon en tiu libro' WHERE id = 1461 AND ekzerco_id = 174 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET demando = 'Esperanto ne venkos [en/ĝis/inter/je/kontraŭ/krom/kun/laŭ/malgraŭ/per] la cirkonstancoj maturiĝos, tamen ĝi venkos, [en/ĝis/inter/je/kontraŭ/krom/kun/laŭ/malgraŭ/per] ĉiaj kontraŭuloj.' WHERE id = 1462 AND ekzerco_id = 174 AND demando = 'Esperanto ne venkos _________ la cirkonstancoj maturiĝos, tamen ĝi venkos, _____________ ĉiaj kontraŭuloj.';
UPDATE ekzerceroj SET normaligita = 'esperanto ne venkos gxis la cirkonstancoj maturigxos tamen gxi venkos malgraux cxiaj kontrauxuloj' WHERE id = 1462 AND ekzerco_id = 174 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET demando = '[En/Ĝis/Inter/Je/Kontraŭ/Krom/Kun/Laŭ/Malgraŭ/Per] mia surprizo, [en/ĝis/inter/je/kontraŭ/krom/kun/laŭ/malgraŭ/per] li venis ankaŭ liaj du amikoj.' WHERE id = 1463 AND ekzerco_id = 174 AND demando = '___________ mia surprizo, ___________ li venis ankaŭ liaj du amikoj.';
UPDATE ekzerceroj SET normaligita = 'je mia surprizo kun li venis ankaux liaj du amikoj|je mia surprizo krom li venis ankaux liaj du amikoj' WHERE id = 1463 AND ekzerco_id = 174 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET demando = 'Ni batalos [en/ĝis/inter/je/kontraŭ/krom/kun/laŭ/malgraŭ/per] ĉiuj rimedoj [en/ĝis/inter/je/kontraŭ/krom/kun/laŭ/malgraŭ/per] la akuzoj de niaj kontraŭuloj.' WHERE id = 1464 AND ekzerco_id = 174 AND demando = 'Ni batalos ________ ĉiuj rimedoj __________ la akuzoj de niaj kontraŭuloj.';
UPDATE ekzerceroj SET normaligita = 'ni batalos per cxiuj rimedoj kontraux la akuzoj de niaj kontrauxuloj' WHERE id = 1464 AND ekzerco_id = 174 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET demando = 'Mi vidis [en/ĝis/inter/je/kontraŭ/krom/kun/laŭ/malgraŭ/per] la propraj okuloj, ke li ne ĉeestis [en/ĝis/inter/je/kontraŭ/krom/kun/laŭ/malgraŭ/per] la dua kaj tria horoj.' WHERE id = 1465 AND ekzerco_id = 174 AND demando = 'Mi vidis __________ la propraj okuloj, ke li ne ĉeestis _________  la dua kaj tria horoj.';
UPDATE ekzerceroj SET normaligita = 'mi vidis per la propraj okuloj ke li ne cxeestis inter la dua kaj tria horoj' WHERE id = 1465 AND ekzerco_id = 174 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET demando = '[En/Ĝis/Inter/Je/Kontraŭ/Krom/Kun/Laŭ/Malgraŭ/Per] lia mistraktado, mi ne forgesos lin [en/ĝis/inter/je/kontraŭ/krom/kun/laŭ/malgraŭ/per] mia morto.' WHERE id = 1466 AND ekzerco_id = 174 AND demando = '_________ lia mistraktado, mi ne forgesos lin _________ mia morto.';
UPDATE ekzerceroj SET normaligita = 'malgraux lia mistraktado mi ne forgesos lin gxis mia morto' WHERE id = 1466 AND ekzerco_id = 174 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET demando = 'Zamenhof estis inda [en/ĝis/inter/je/kontraŭ/krom/kun/laŭ/malgraŭ/per] ĉiaj honoroj, sed eĉ [en/ĝis/inter/je/kontraŭ/krom/kun/laŭ/malgraŭ/per] la Movado li ne volis esti gvidanto.' WHERE id = 1467 AND ekzerco_id = 174 AND demando = 'Zamenhof estis inda __________ ĉiaj honoroj, sed eĉ _________     la Movado li ne volis esti gvidanto.';
UPDATE ekzerceroj SET normaligita = 'zamenhof estis inda je cxiaj honoroj sed ecx en la movado li ne volis esti gvidanto' WHERE id = 1467 AND ekzerco_id = 174 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET demando = '[En/Ĝis/Inter/Je/Kontraŭ/Krom/Kun/Laŭ/Malgraŭ/Per] la instruo de la historio, la pioniroj de novaj ideoj renkontas nenion [en/ĝis/inter/je/kontraŭ/krom/kun/laŭ/malgraŭ/per] mokoj kaj atakoj.' WHERE id = 1468 AND ekzerco_id = 174 AND demando = '___________ la instruo de la historio, la pioniroj de novaj ideoj renkontas nenion _________ mokoj kaj atakoj.';
UPDATE ekzerceroj SET normaligita = 'laux la instruo de la historio la pioniroj de novaj ideoj renkontas nenion krom mokoj kaj atakoj' WHERE id = 1468 AND ekzerco_id = 174 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET demando = 'Kiu ne estas [en/ĝis/inter/je/kontraŭ/krom/kun/laŭ/malgraŭ/per] ni, estas [en/ĝis/inter/je/kontraŭ/krom/kun/laŭ/malgraŭ/per] ni.' WHERE id = 1469 AND ekzerco_id = 174 AND demando = 'Kiu ne estas __________   ni, estas _________   ni.';
UPDATE ekzerceroj SET normaligita = 'kiu ne estas kun ni estas kontraux ni' WHERE id = 1469 AND ekzerco_id = 174 AND COALESCE(normaligita, '') = '';
UPDATE ekzercoj SET komando = 'En la sekvantaj propozicioj elektu korekte unu el jenaj prepozicioj:' WHERE id = 174 AND komando = 'En la sekvantajn propoziciojn enmetu korekte jenajn prepoziciojn:';
UPDATE ekzercoj SET typo = 'elektlisto', x2u = 0, korektebla = 1 WHERE id = 174 AND typo = 'verkado-1';

-- 8. 14.4 (179) : prépositions → menus
UPDATE ekzerceroj SET demando = '[Po/Por/Post/Preter/Pri/Pro/Sen/Sub/Tra/Trans] la manĝo, kiu kostis [po/por/post/preter/pri/pro/sen/sub/tra/trans] dudek steloj, ili ĉiuj foriris.' WHERE id = 1503 AND ekzerco_id = 179 AND demando = '__________ la manĝo, kiu kostis ________ dudek steloj, ili ĉiuj foriris.';
UPDATE ekzerceroj SET normaligita = 'post la mangxo kiu kostis po dudek steloj ili cxiuj foriris' WHERE id = 1503 AND ekzerco_id = 179 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET demando = 'Ni iris [po/por/post/preter/pri/pro/sen/sub/tra/trans] la riveron, kaj [po/por/post/preter/pri/pro/sen/sub/tra/trans] la aliborda arbetaro ni alvenis vilaĝon.' WHERE id = 1504 AND ekzerco_id = 179 AND demando = 'Ni iris _________ la riveron, kaj _________ la aliborda arbetaro ni alvenis vilaĝon.';
UPDATE ekzerceroj SET normaligita = 'ni iris trans la riveron kaj tra la aliborda arbetaro ni alvenis vilagxon|ni iris preter la riveron kaj tra la aliborda arbetaro ni alvenis vilagxon|ni iris trans la riveron kaj post la aliborda arbetaro ni alvenis vilagxon' WHERE id = 1504 AND ekzerco_id = 179 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET demando = '[Po/Por/Post/Preter/Pri/Pro/Sen/Sub/Tra/Trans] plua diskutado ni ekiris [po/por/post/preter/pri/pro/sen/sub/tra/trans] la longa silenta strato.' WHERE id = 1505 AND ekzerco_id = 179 AND demando = '___________ plua diskutado ni ekiris __________ la longa silenta strato.';
UPDATE ekzerceroj SET normaligita = 'post plua diskutado ni ekiris tra la longa silenta strato|sen plua diskutado ni ekiris tra la longa silenta strato' WHERE id = 1505 AND ekzerco_id = 179 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET demando = 'Mi dankis [po/por/post/preter/pri/pro/sen/sub/tra/trans] la mono, kiun li donis al mi [po/por/post/preter/pri/pro/sen/sub/tra/trans] la societa kaso.' WHERE id = 1506 AND ekzerco_id = 179 AND demando = 'Mi dankis __________ la mono, kiun li donis al mi _________ la societa kaso.';
UPDATE ekzerceroj SET normaligita = 'mi dankis pro la mono kiun li donis al mi por la societa kaso' WHERE id = 1506 AND ekzerco_id = 179 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET demando = '[Po/Por/Post/Preter/Pri/Pro/Sen/Sub/Tra/Trans] sia trankvila ekstero, li tute ne estis kontenta [po/por/post/preter/pri/pro/sen/sub/tra/trans] la irado de la afero.' WHERE id = 1507 AND ekzerco_id = 179 AND demando = '__________ sia trankvila ekstero, li tute ne estis kontenta _________ la irado de la afero.';
UPDATE ekzerceroj SET normaligita = 'sub sia trankvila ekstero li tute ne estis kontenta pri la irado de la afero' WHERE id = 1507 AND ekzerco_id = 179 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET demando = 'Li revenis [po/por/post/preter/pri/pro/sen/sub/tra/trans] du tagoj, kaj el la gajnitaj cent dolaroj li donis al siaj infanoj [po/por/post/preter/pri/pro/sen/sub/tra/trans] dudek.' WHERE id = 1508 AND ekzerco_id = 179 AND demando = 'Li revenis _______ du tagoj, kaj el la gajnitaj cent dolaroj li donis al siaj infanoj __________ dudek.';
UPDATE ekzerceroj SET normaligita = 'li revenis post du tagoj kaj el la gajnitaj cent dolaroj li donis al siaj infanoj po dudek' WHERE id = 1508 AND ekzerco_id = 179 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET demando = 'Li ne volis diskuti [po/por/post/preter/pri/pro/sen/sub/tra/trans] tio, do iris [po/por/post/preter/pri/pro/sen/sub/tra/trans] mi [po/por/post/preter/pri/pro/sen/sub/tra/trans] saluto.' WHERE id = 1509 AND ekzerco_id = 179 AND demando = 'Li ne volis diskuti _________ tio, do iris ________ mi _________ saluto.';
UPDATE ekzerceroj SET normaligita = 'li ne volis diskuti pri tio do iris preter mi sen saluto' WHERE id = 1509 AND ekzerco_id = 179 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET demando = '[Po/Por/Post/Preter/Pri/Pro/Sen/Sub/Tra/Trans] multaj kaŭzoj li ne povis atingi tiujn, kiuj jam staris [po/por/post/preter/pri/pro/sen/sub/tra/trans] la valeto.' WHERE id = 1510 AND ekzerco_id = 179 AND demando = '________ multaj kaŭzoj li ne povis atingi tiujn, kiuj jam staris ________ la valeto.';
UPDATE ekzerceroj SET normaligita = 'pro multaj kauxzoj li ne povis atingi tiujn kiuj jam staris trans la valeto|pro multaj kauxzoj li ne povis atingi tiujn kiuj jam staris preter la valeto' WHERE id = 1510 AND ekzerco_id = 179 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET demando = '[Po/Por/Post/Preter/Pri/Pro/Sen/Sub/Tra/Trans] la tuta nokto li laboris [po/por/post/preter/pri/pro/sen/sub/tra/trans] sia familio.' WHERE id = 1511 AND ekzerco_id = 179 AND demando = '_________ la tuta nokto li laboris _________ sia familio.';
UPDATE ekzerceroj SET normaligita = 'tra la tuta nokto li laboris por sia familio' WHERE id = 1511 AND ekzerco_id = 179 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET demando = 'La demando estis ankoraŭ [po/por/post/preter/pri/pro/sen/sub/tra/trans] juĝado, do mi nenion rajtis diri [po/por/post/preter/pri/pro/sen/sub/tra/trans] ĝi.' WHERE id = 1512 AND ekzerco_id = 179 AND demando = 'La demando estis ankoraŭ ________ juĝado, do mi nenion rajtis diri ________ ĝi.';
UPDATE ekzerceroj SET normaligita = 'la demando estis ankoraux sub jugxado do mi nenion rajtis diri pri gxi' WHERE id = 1512 AND ekzerco_id = 179 AND COALESCE(normaligita, '') = '';
UPDATE ekzercoj SET komando = 'En la subaj propozicioj elektu korekte unu el jenaj prepozicioj:' WHERE id = 179 AND komando = 'En la subajn propoziciojn enmetu korekte jenajn prepoziciojn:';
UPDATE ekzercoj SET typo = 'elektlisto', x2u = 0, korektebla = 1 WHERE id = 179 AND typo = 'verkado-1';

-- 9. 16.4 (193) : paires de prépositions → menus
UPDATE ekzerceroj SET demando = 'Ne kredu tion, kion vi aŭdis; ĝi estas nur bela rakonto [de antaŭ/de inter/el antaŭ/el trans/ĝis en/ĝis super/ĝis post/el sub] la monto.' WHERE id = 1617 AND ekzerco_id = 193 AND demando = 'Ne kredu tion, kion vi aŭdis; ĝi estas nur bela rakonto ________ la monto.';
UPDATE ekzerceroj SET normaligita = 'ne kredu tion kion vi auxdis gxi estas nur bela rakonto el trans la monto' WHERE id = 1617 AND ekzerco_id = 193 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET demando = 'Ni estas malnovaj amikoj; mi konas lin [de antaŭ/de inter/el antaŭ/el trans/ĝis en/ĝis super/ĝis post/el sub] la milito.' WHERE id = 1618 AND ekzerco_id = 193 AND demando = 'Ni estas malnovaj amikoj; mi konas lin __________ la milito.';
UPDATE ekzerceroj SET normaligita = 'ni estas malnovaj amikoj mi konas lin de antaux la milito' WHERE id = 1618 AND ekzerco_id = 193 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET demando = 'Ni troviĝas [de antaŭ/de inter/el antaŭ/el trans/ĝis en/ĝis super/ĝis post/el sub] la kapo en malfacilaĵoj.' WHERE id = 1619 AND ekzerco_id = 193 AND demando = 'Ni troviĝas __________ la kapo en malfacilaĵoj.';
UPDATE ekzerceroj SET normaligita = 'ni trovigxas gxis super la kapo en malfacilajxoj|ni trovigxas gxis en la kapo en malfacilajxoj' WHERE id = 1619 AND ekzerco_id = 193 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET demando = 'Li prenis [de antaŭ/de inter/el antaŭ/el trans/ĝis en/ĝis super/ĝis post/el sub] la servotablo specialan botelon por liaj amikoj rezervatan.' WHERE id = 1620 AND ekzerco_id = 193 AND demando = 'Li prenis __________ la servotablo specialan botelon por liaj amikoj rezervatan.';
UPDATE ekzerceroj SET normaligita = 'li prenis el sub la servotablo specialan botelon por liaj amikoj rezervatan' WHERE id = 1620 AND ekzerco_id = 193 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET demando = 'Se vi decidos iri, ni ne revidos nin [de antaŭ/de inter/el antaŭ/el trans/ĝis en/ĝis super/ĝis post/el sub] pli ol unu jaro.' WHERE id = 1621 AND ekzerco_id = 193 AND demando = 'Se vi decidos iri, ni ne revidos nin ___________    pli ol unu jaro.';
UPDATE ekzerceroj SET normaligita = 'se vi decidos iri ni ne revidos nin gxis post pli ol unu jaro' WHERE id = 1621 AND ekzerco_id = 193 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET demando = 'Kiam mi demandis, kio okazas, anonima respondo aŭdiĝis [de antaŭ/de inter/el antaŭ/el trans/ĝis en/ĝis super/ĝis post/el sub] la amaso.' WHERE id = 1622 AND ekzerco_id = 193 AND demando = 'Kiam mi demandis, kio okazas, anonima respondo aŭdiĝis _________ la amaso.';
UPDATE ekzerceroj SET normaligita = 'kiam mi demandis kio okazas anonima respondo auxdigxis de inter la amaso' WHERE id = 1622 AND ekzerco_id = 193 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET demando = 'Subita rememoro venis al mi [de antaŭ/de inter/el antaŭ/el trans/ĝis en/ĝis super/ĝis post/el sub] mia edziĝo.' WHERE id = 1623 AND ekzerco_id = 193 AND demando = 'Subita rememoro venis al mi __________ mia edziĝo.';
UPDATE ekzerceroj SET normaligita = 'subita rememoro venis al mi el antaux mia edzigxo|subita rememoro venis al mi de antaux mia edzigxo' WHERE id = 1623 AND ekzerco_id = 193 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET demando = '[De antaŭ/De inter/El antaŭ/El trans/Ĝis en/Ĝis super/Ĝis post/El sub] nia epoko la homoj ankoraŭ kredis neebla vojaĝon al la luno.' WHERE id = 1624 AND ekzerco_id = 193 AND demando = '_____________ nia epoko la homoj ankoraŭ kredis neebla vojaĝon al la luno.';
UPDATE ekzerceroj SET normaligita = 'gxis en nia epoko la homoj ankoraux kredis neebla vojagxon al la luno' WHERE id = 1624 AND ekzerco_id = 193 AND COALESCE(normaligita, '') = '';
UPDATE ekzercoj SET komando = 'Por plenigi la mankon en ĉiu el jenaj propozicioj, elektu unu el la jenaj paroj da prepozicioj:' WHERE id = 193 AND komando = 'Per unu el la jenaj paroj da prepozicioj plenigu la mankon en ĉiu el jenaj propozicioj:';
UPDATE ekzercoj SET typo = 'elektlisto', x2u = 0, korektebla = 1 WHERE id = 193 AND typo = 'verkado-1';

-- 10. 22.4 (229) : racines → menus
UPDATE ekzerceroj SET demando = 'Se unu fojo ne prosperis, ni devas netimigite [barakt/klopod/lukt/pen/prov/streb/streĉ/ŝvit]i duan fojon.' WHERE id = 1878 AND ekzerco_id = 229 AND demando = 'Se unu fojo ne prosperis, ni devas netimigite ________i duan fojon.';
UPDATE ekzerceroj SET normaligita = 'se unu fojo ne prosperis ni devas netimigite provi duan fojon' WHERE id = 1878 AND ekzerco_id = 229 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET demando = 'Kion vi pri[barakt/klopod/lukt/pen/prov/streb/streĉ/ŝvit]as, do al vi venas.' WHERE id = 1879 AND ekzerco_id = 229 AND demando = 'Kion vi pri________ as, do al vi venas.';
UPDATE ekzerceroj SET normaligita = 'kion vi pripenas do al vi venas|kion vi priklopodas do al vi venas' WHERE id = 1879 AND ekzerco_id = 229 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET demando = 'Li [barakt/klopod/lukt/pen/prov/streb/streĉ/ŝvit]as ĉe la ministro pri siaj domo kaj kampo.' WHERE id = 1880 AND ekzerco_id = 229 AND demando = 'Li ________ as ĉe la ministro pri siaj domo kaj kampo.';
UPDATE ekzerceroj SET normaligita = 'li klopodas cxe la ministro pri siaj domo kaj kampo' WHERE id = 1880 AND ekzerco_id = 229 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET demando = 'Nun en ilia kapo [barakt/klopod/lukt/pen/prov/streb/streĉ/ŝvit]is nova demando.' WHERE id = 1881 AND ekzerco_id = 229 AND demando = 'Nun en iia kapo      is nova demando.';
UPDATE ekzerceroj SET normaligita = 'nun en ilia kapo baraktis nova demando' WHERE id = 1881 AND ekzerco_id = 229 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET demando = 'Ekzistas homoj, kiuj de tempo al tempo sentas [barakt/klopod/lukt/pen/prov/streb/streĉ/ŝvit]adon al poezio.' WHERE id = 1882 AND ekzerco_id = 229 AND demando = 'Ekzistas homoj, kiuj de tempo al tempo sentas _________adon al poezio.';
UPDATE ekzerceroj SET normaligita = 'ekzistas homoj kiuj de tempo al tempo sentas strebadon al poezio' WHERE id = 1882 AND ekzerco_id = 229 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET demando = 'Dum la tuta vivo li [barakt/klopod/lukt/pen/prov/streb/streĉ/ŝvit]is kontraŭ la mizero.' WHERE id = 1883 AND ekzerco_id = 229 AND demando = 'Dum la tuta vivo li ________is kontraŭ la mizero.';
UPDATE ekzerceroj SET normaligita = 'dum la tuta vivo li luktis kontraux la mizero' WHERE id = 1883 AND ekzerco_id = 229 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET demando = 'La studento [barakt/klopod/lukt/pen/prov/streb/streĉ/ŝvit]is super siaj libroj.' WHERE id = 1884 AND ekzerco_id = 229 AND demando = 'La studento _________is super siaj libroj.';
UPDATE ekzerceroj SET normaligita = 'la studento sxvitis super siaj libroj|la studento penis super siaj libroj' WHERE id = 1884 AND ekzerco_id = 229 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET demando = 'La pioniroj devis fari grandajn forto[barakt/klopod/lukt/pen/prov/streb/streĉ/ŝvit]ojn por travivi la vintron.' WHERE id = 1885 AND ekzerco_id = 229 AND demando = 'La pioniroj devis fari gandajn forto     ________ojn por travivi la vintron.';
UPDATE ekzerceroj SET normaligita = 'la pioniroj devis fari grandajn fortostrecxojn por travivi la vintron' WHERE id = 1885 AND ekzerco_id = 229 AND COALESCE(normaligita, '') = '';
UPDATE ekzercoj SET komando = 'En ĉiu suba propozicio elektu unu el jenaj radikoj:' WHERE id = 229 AND komando = 'En ĉiun suban propozicion enmetu po unu el jenaj radikoj:';
UPDATE ekzercoj SET typo = 'elektlisto', x2u = 0, korektebla = 1 WHERE id = 229 AND typo = 'verkado-1';

-- 11. 23.4 (237) : racines → menus
UPDATE ekzerceroj SET demando = 'Oni konsilas kaj konsolas, sed [gard/defend/help/konserv/kovr/protekt/sav/ŝirm]i ne volas.' WHERE id = 1931 AND ekzerco_id = 237 AND demando = 'Oni konsilas kaj konsolas, sed _______i ne volas.';
UPDATE ekzerceroj SET normaligita = 'oni konsilas kaj konsolas sed helpi ne volas' WHERE id = 1931 AND ekzerco_id = 237 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET demando = 'Tio ne [gard/defend/help/konserv/kovr/protekt/sav/ŝirm]os nian aferon el pereo.' WHERE id = 1932 AND ekzerco_id = 237 AND demando = 'Tio ne _________os nian aferon el pereo.';
UPDATE ekzerceroj SET normaligita = 'tio ne savos nian aferon el pereo|tio ne protektos nian aferon el pereo' WHERE id = 1932 AND ekzerco_id = 237 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET demando = 'La ombrelo [gard/defend/help/konserv/kovr/protekt/sav/ŝirm]is nin kontraŭ la pluvo.' WHERE id = 1933 AND ekzerco_id = 237 AND demando = 'La ombrelo ______is nin kontraŭ la pluvo.';
UPDATE ekzerceroj SET normaligita = 'la ombrelo sxirmis nin kontraux la pluvo|la ombrelo protektis nin kontraux la pluvo' WHERE id = 1933 AND ekzerco_id = 237 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET demando = '[Gard/Defend/Help/Konserv/Kovr/Protekt/Sav/Ŝirm]u min kontraŭ miaj malamikoj.' WHERE id = 1934 AND ekzerco_id = 237 AND demando = '________u min kontraŭ miaj malamikoj.';
UPDATE ekzerceroj SET normaligita = 'defendu min kontraux miaj malamikoj|protektu min kontraux miaj malamikoj|gardu min kontraux miaj malamikoj' WHERE id = 1934 AND ekzerco_id = 237 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET demando = 'Kiun reĝo [gard/defend/help/konserv/kovr/protekt/sav/ŝirm]as, tiun ministro elektas.' WHERE id = 1935 AND ekzerco_id = 237 AND demando = 'Kiun reĝo ________as, tiun ministro elektas.';
UPDATE ekzerceroj SET normaligita = 'kiun regxo protektas tiun ministro elektas|kiun regxo defendas tiun ministro elektas' WHERE id = 1935 AND ekzerco_id = 237 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET demando = 'Kaŝita malĝojo ĉiam [gard/defend/help/konserv/kovr/protekt/sav/ŝirm]as mistere vian koron.' WHERE id = 1936 AND ekzerco_id = 237 AND demando = 'Kaŝita malĝojo ĉiam _________as mistere vian koron.';
UPDATE ekzerceroj SET normaligita = 'kasxita malgxojo cxiam kovras mistere vian koron' WHERE id = 1936 AND ekzerco_id = 237 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET demando = 'Li sukcesis [gard/defend/help/konserv/kovr/protekt/sav/ŝirm]i de putriĝo la kadavron.' WHERE id = 1937 AND ekzerco_id = 237 AND demando = 'Li sukcesis _________i de putriĝo la kadavron.';
UPDATE ekzerceroj SET normaligita = 'li sukcesis konservi de putrigxo la kadavron' WHERE id = 1937 AND ekzerco_id = 237 AND COALESCE(normaligita, '') = '';
UPDATE ekzercoj SET komando = 'En ĉiu suba propozicio elektu korekte unu el jenaj radikoj:' WHERE id = 237 AND komando = 'En ĉiun suban propozicion enmetu korekte unu el jenaj radikoj:';
UPDATE ekzercoj SET typo = 'elektlisto', x2u = 0, korektebla = 1 WHERE id = 237 AND typo = 'verkado-1';

-- 12. 24.4 (242) : verbes → menus de racines
UPDATE ekzerceroj SET demando = 'Malsato [detru/eksterm/elĉerp/formanĝ/konsum/nenig/nulig/perdig/pereig/ruinig]os lian forton.' WHERE id = 1954 AND ekzerco_id = 242 AND demando = 'Malsato __________os lian forton.';
UPDATE ekzerceroj SET normaligita = 'malsato elcxerpos lian forton' WHERE id = 1954 AND ekzerco_id = 242 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET demando = 'Kia granda homo [detru/eksterm/elĉerp/formanĝ/konsum/nen/nul/perd/pere/ruin]iĝis!' WHERE id = 1955 AND ekzerco_id = 242 AND demando = 'Kia granda homo _________iĝis!';
UPDATE ekzerceroj SET normaligita = 'kia granda homo nenigxis' WHERE id = 1955 AND ekzerco_id = 242 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET demando = 'Ne sufiĉas [detru/eksterm/elĉerp/formanĝ/konsum/nenig/nulig/perdig/pereig/ruinig]i, necesas plenigi la malplenon.' WHERE id = 1956 AND ekzerco_id = 242 AND demando = 'Ne sufiĉas _______i, necesas plenigi la malplenon.';
UPDATE ekzerceroj SET normaligita = 'ne suficxas detrui necesas plenigi la malplenon' WHERE id = 1956 AND ekzerco_id = 242 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET demando = 'Sekeco [detru/eksterm/elĉerp/formanĝ/konsum/nenig/nulig/perdig/pereig/ruinig]as la grenon.' WHERE id = 1957 AND ekzerco_id = 242 AND demando = 'Sekeco _______as la grenon.';
UPDATE ekzerceroj SET normaligita = 'sekeco pereigas la grenon' WHERE id = 1957 AND ekzerco_id = 242 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET demando = 'La krizo [detru/eksterm/elĉerp/formanĝ/konsum/nenig/nulig/perdig/pereig/ruinig]is al ni multajn amikojn.' WHERE id = 1958 AND ekzerco_id = 242 AND demando = 'La krizo _________is al ni multajn amikojn.';
UPDATE ekzerceroj SET normaligita = 'la krizo perdigis al ni multajn amikojn' WHERE id = 1958 AND ekzerco_id = 242 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET demando = 'Li baldaŭ [detru/eksterm/elĉerp/formanĝ/konsum/nenig/nulig/perdig/pereig/ruinig]is la tutan vinon el la barelo.' WHERE id = 1959 AND ekzerco_id = 242 AND demando = 'Li baldaŭ _________is la tutan vinon el la barelo.';
UPDATE ekzerceroj SET normaligita = 'li baldaux konsumis la tutan vinon el la barelo|li baldaux elcxerpis la tutan vinon el la barelo' WHERE id = 1959 AND ekzerco_id = 242 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET demando = 'La bordon iom post iom [detru/eksterm/elĉerp/formanĝ/konsum/nenig/nulig/perdig/pereig/ruinig]as la maro.' WHERE id = 1960 AND ekzerco_id = 242 AND demando = 'La bordon iom post iom ________as la maro.';
UPDATE ekzerceroj SET normaligita = 'la bordon iom post iom formangxas la maro' WHERE id = 1960 AND ekzerco_id = 242 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET demando = 'Tertremo [detru/eksterm/elĉerp/formanĝ/konsum/nenig/nulig/perdig/pereig/ruinig]is la urbon.' WHERE id = 1961 AND ekzerco_id = 242 AND demando = 'Tertremo _________is la urbon.';
UPDATE ekzerceroj SET normaligita = 'tertremo ruinigis la urbon|tertremo detruis la urbon' WHERE id = 1961 AND ekzerco_id = 242 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET demando = 'La komitato [detru/eksterm/elĉerp/formanĝ/konsum/nenig/nulig/perdig/pereig/ruinig]is sian antaŭan decidon.' WHERE id = 1962 AND ekzerco_id = 242 AND demando = 'La komitato ________is sian antaŭan decidon.';
UPDATE ekzerceroj SET normaligita = 'la komitato nuligis sian antauxan decidon' WHERE id = 1962 AND ekzerco_id = 242 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET demando = 'La malamikoj volis tute [detru/eksterm/elĉerp/formanĝ/konsum/nenig/nulig/perdig/pereig/ruinig]i nian popolon.' WHERE id = 1963 AND ekzerco_id = 242 AND demando = 'La malamikoj volis tute ________i nian popolon.';
UPDATE ekzerceroj SET normaligita = 'la malamikoj volis tute ekstermi nian popolon' WHERE id = 1963 AND ekzerco_id = 242 AND COALESCE(normaligita, '') = '';
UPDATE ekzercoj SET komando = 'En ĉiu suba propozicio elektu korekte unu el jenaj vortoj:' WHERE id = 242 AND komando = 'En ĉiun suban propozicion enmetu korekte po unu el jenaj vortoj:';
UPDATE ekzercoj SET typo = 'elektlisto', x2u = 0, korektebla = 1 WHERE id = 242 AND typo = 'verkado-1';

-- 13. 25.4 (251) : racines → menus
UPDATE ekzerceroj SET demando = 'La registaro [asign/atribu/dediĉ/destin/determin/difin/dispon]is grandan sumon por la batalo kontraŭ la tuberkulozo.' WHERE id = 2013 AND ekzerco_id = 251 AND demando = 'La registaro _________is grandan sumon por la batalo kontraŭ la tuberkulozo.';
UPDATE ekzerceroj SET normaligita = 'la registaro asignis grandan sumon por la batalo kontraux la tuberkulozo' WHERE id = 2013 AND ekzerco_id = 251 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET demando = 'La patro [asign/atribu/dediĉ/destin/determin/difin/dispon]is lin por komerca kariero.' WHERE id = 2014 AND ekzerco_id = 251 AND demando = 'La patro _________is lin por komerca kariero.';
UPDATE ekzerceroj SET normaligita = 'la patro destinis lin por komerca kariero' WHERE id = 2014 AND ekzerco_id = 251 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET demando = 'La sindikato [asign/atribu/dediĉ/destin/determin/difin/dispon]igis ĉambron al nia societo.' WHERE id = 2015 AND ekzerco_id = 251 AND demando = 'La sindikato ________igis 6ambron al nia societo.';
UPDATE ekzerceroj SET normaligita = 'la sindikato disponigis cxambron al nia societo' WHERE id = 2015 AND ekzerco_id = 251 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET demando = 'Niaj infanjaroj ofte [asign/atribu/dediĉ/destin/determin/difin/dispon]as nian estontan vivon.' WHERE id = 2016 AND ekzerco_id = 251 AND demando = 'Niaj infanjaroj ofte _________as nian estontan vivon.';
UPDATE ekzerceroj SET normaligita = 'niaj infanjaroj ofte determinas nian estontan vivon|niaj infanjaroj ofte difinas nian estontan vivon' WHERE id = 2016 AND ekzerco_id = 251 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET demando = 'Mi [asign/atribu/dediĉ/destin/determin/difin/dispon]is multajn jarojn al la lernado de lingvoj.' WHERE id = 2017 AND ekzerco_id = 251 AND demando = 'Mi ________is multajn jarojn al la lernado de lingvoj.';
UPDATE ekzerceroj SET normaligita = 'mi dedicxis multajn jarojn al la lernado de lingvoj' WHERE id = 2017 AND ekzerco_id = 251 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET demando = 'La juĝantoj [asign/atribu/dediĉ/destin/determin/difin/dispon]is al li la unuan premion.' WHERE id = 2018 AND ekzerco_id = 251 AND demando = 'La juĝantoj ________is al li la unuan premion.';
UPDATE ekzerceroj SET normaligita = 'la jugxantoj atribuis al li la unuan premion|la jugxantoj asignis al li la unuan premion' WHERE id = 2018 AND ekzerco_id = 251 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET demando = 'La policanoj klopodis [asign/atribu/dediĉ/destin/determin/difin/dispon]i la kaŭzon de la akcidento.' WHERE id = 2019 AND ekzerco_id = 251 AND demando = 'La policanoj klopodis _________i la kaŭzon de la akcidento.';
UPDATE ekzerceroj SET normaligita = 'la policanoj klopodis determini la kauxzon de la akcidento|la policanoj klopodis difini la kauxzon de la akcidento' WHERE id = 2019 AND ekzerco_id = 251 AND COALESCE(normaligita, '') = '';
UPDATE ekzercoj SET komando = 'En ĉiu suba propozicio elektu korekte unu el jenaj radikoj:' WHERE id = 251 AND komando = 'En ĉiun suban propozicion enmetu korekte po unu el jenaj radikoj:';
UPDATE ekzercoj SET typo = 'elektlisto', x2u = 0, korektebla = 1 WHERE id = 251 AND typo = 'verkado-1';

-- 14. 27.4 (265) : adjectifs → menus
UPDATE ekzerceroj SET demando = 'Depost la morto de lia filo ĉio fariĝis [apatia/glacia/indiferenta/inerta/malvarma/malvigla/senzorga] por li.' WHERE id = 2113 AND ekzerco_id = 265 AND demando = 'Depost la morto de lia filo ĉio fariĝis ________       por li.';
UPDATE ekzerceroj SET normaligita = 'depost la morto de lia filo cxio farigxis indiferenta por li|depost la morto de lia filo cxio farigxis glacia por li' WHERE id = 2113 AND ekzerco_id = 265 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET demando = 'Kiel [apatia/glacia/indiferenta/inerta/malvarma/malvigla/senzorga] tiu vorto, kiam ĝi rilatas al tia beleco!' WHERE id = 2114 AND ekzerco_id = 265 AND demando = 'Kiel __________tiu vorto, kiam ĝi rilatas al tia beleco!';
UPDATE ekzerceroj SET normaligita = 'kiel malvarma tiu vorto kiam gxi rilatas al tia beleco' WHERE id = 2114 AND ekzerco_id = 265 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET demando = 'La [apatia/glacia/indiferenta/inerta/malvarma/malvigla/senzorga] tavolo de antaŭjuĝoj de la mondo estas nun rompita.' WHERE id = 2115 AND ekzerco_id = 265 AND demando = 'La ________ tavolo de antaŭjuĝoj de la mondo estas nun rompita.';
UPDATE ekzerceroj SET normaligita = 'la glacia tavolo de antauxjugxoj de la mondo estas nun rompita|la inerta tavolo de antauxjugxoj de la mondo estas nun rompita' WHERE id = 2115 AND ekzerco_id = 265 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET demando = 'Malespera kaj [apatia/glacia/indiferenta/inerta/malvarma/malvigla/senzorga] li lasis fali la manojn.' WHERE id = 2116 AND ekzerco_id = 265 AND demando = 'Malespera kaj ________ li lasis fali la manojn.';
UPDATE ekzerceroj SET normaligita = 'malespera kaj apatia li lasis fali la manojn' WHERE id = 2116 AND ekzerco_id = 265 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET demando = 'Kvankam urĝis ekago pro la minacanta danĝero, li tamen restis [apatia/glacia/indiferenta/inerta/malvarma/malvigla/senzorga].' WHERE id = 2117 AND ekzerco_id = 265 AND demando = 'Kvankam urĝis ekago pro la minacanta danĝero, li tamen restis ________.';
UPDATE ekzerceroj SET normaligita = 'kvankam urgxis ekago pro la minacanta dangxero li tamen restis inerta|kvankam urgxis ekago pro la minacanta dangxero li tamen restis indiferenta' WHERE id = 2117 AND ekzerco_id = 265 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET demando = 'Sur tiu bela insulo, lia vivo estis [apatia/glacia/indiferenta/inerta/malvarma/malvigla/senzorga].' WHERE id = 2118 AND ekzerco_id = 265 AND demando = 'Sur tiu bela insulo, lia vivo estis ________.';
UPDATE ekzerceroj SET normaligita = 'sur tiu bela insulo lia vivo estis senzorga' WHERE id = 2118 AND ekzerco_id = 265 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET demando = 'Pro la [apatia/glacia/indiferenta/inerta/malvarma/malvigla/senzorga] fajro, pasis kelka tempo antaŭ ol la akvo bolis.' WHERE id = 2119 AND ekzerco_id = 265 AND demando = 'Pro la _________ fajro, pasis kelka tempo antaŭ ol la akvo bolis.';
UPDATE ekzerceroj SET normaligita = 'pro la malvigla fajro pasis kelka tempo antaux ol la akvo bolis' WHERE id = 2119 AND ekzerco_id = 265 AND COALESCE(normaligita, '') = '';
UPDATE ekzercoj SET komando = 'En ĉiu propozicio elektu unu el jenaj vortoj:' WHERE id = 265 AND komando = 'En ĉiujn propoziciojn enmetu po unu el jenaj vortoj:';
UPDATE ekzercoj SET typo = 'elektlisto', x2u = 0, korektebla = 1 WHERE id = 265 AND typo = 'verkado-1';

-- 13.4 (179) : en prod, la réponse principale avait déjà été saisie sans les variantes validées ;
-- on la remplace par la liste complète (seulement si elle n'a pas changé depuis)
UPDATE ekzerceroj SET normaligita = 'ni iris trans la riveron kaj tra la aliborda arbetaro ni alvenis vilagxon|ni iris preter la riveron kaj tra la aliborda arbetaro ni alvenis vilagxon|ni iris trans la riveron kaj post la aliborda arbetaro ni alvenis vilagxon' WHERE id = 1504 AND ekzerco_id = 179 AND normaligita = 'ni iris trans la riveron kaj tra la aliborda arbetaro ni alvenis vilagxon';
UPDATE ekzerceroj SET normaligita = 'post plua diskutado ni ekiris tra la longa silenta strato|sen plua diskutado ni ekiris tra la longa silenta strato' WHERE id = 1505 AND ekzerco_id = 179 AND normaligita = 'post plua diskutado ni ekiris tra la longa silenta strato';
UPDATE ekzerceroj SET normaligita = 'pro multaj kauxzoj li ne povis atingi tiujn kiuj jam staris trans la valeto|pro multaj kauxzoj li ne povis atingi tiujn kiuj jam staris preter la valeto' WHERE id = 1510 AND ekzerco_id = 179 AND normaligita = 'pro multaj kauxzoj li ne povis atingi tiujn kiuj jam staris trans la valeto';

-- Vérification
SELECT id, typo, korektebla, x2u, komando FROM ekzercoj WHERE id IN (127, 128, 141, 145, 146, 169, 174, 179, 193, 229, 237, 242, 251, 265);
SELECT ekzerco_id, COUNT(*) AS demandoj, SUM(COALESCE(normaligita, '') <> '') AS kun_respondoj FROM ekzerceroj
  WHERE ekzerco_id IN (127, 128, 141, 145, 146, 169, 174, 179, 193, 229, 237, 242, 251, 265) AND forigita = 0 GROUP BY ekzerco_id;
