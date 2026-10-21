-- Paŝoj al plena posedo : correction automatique du groupe 4 de #1083, « trouver l'erreur et la corriger »
-- (231 = 22.4, 236 = 23.4, 255 = 26.4, 262 = 27.4, 271 = 28.4). Format et réponses validés par Emmanuelle.
-- - la phrase fautive est pré-remplie dans le champ de réponse (respondmodelo) : l'élève la corrige directement ;
-- - réponses attendues (normaligita) : la phrase entière corrigée, ou la correction seule (le mot corrigé, ou le petit groupe
--   corrigé quand l'erreur porte sur l'ordre des mots ou une préposition) ; phrase entière obligatoire pour 231 n° 36 et 236 n° 16 ;
-- - consigne complétée (« korektu ilin rekte en la propozicio ») et correction automatique (korektebla = 1).
-- Les réponses types (respondo) sont déjà en place (sql/33 et sql/34).
-- Généré par gen-g4.php : chaque forme acceptée est reconnue par kontroliRespondon(), la phrase fautive non modifiée ne l'est pas.
-- Ne remplace pas une valeur existante ; peut être rejoué sans risque.
SET NAMES utf8mb4;

-- 231
UPDATE ekzerceroj SET respondmodelo = 'La gepatroj de Jozefo tre ĉagrenis pro lia maldiligenteco.' WHERE id = 1896 AND ekzerco_id = 231 AND COALESCE(respondmodelo, '') = '';
UPDATE ekzerceroj SET normaligita = 'la gepatroj de jozefo tre cxagrenigxis pro lia maldiligenteco|cxagrenigxis|tre cxagrenigxis' WHERE id = 1896 AND ekzerco_id = 231 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET respondmodelo = 'Homo plene vivas nur tiam, kiam li havas krean ĝojon en lia ĉiutaga laboro.' WHERE id = 1897 AND ekzerco_id = 231 AND COALESCE(respondmodelo, '') = '';
UPDATE ekzerceroj SET normaligita = 'homo plene vivas nur tiam kiam li havas krean gxojon en sia cxiutaga laboro|sia|en sia|sia cxiutaga laboro|en sia cxiutaga laboro' WHERE id = 1897 AND ekzerco_id = 231 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET respondmodelo = 'En tiu tempo oni ne vidis tiom da novajn konstruaĵojn, kiel nun.' WHERE id = 1898 AND ekzerco_id = 231 AND COALESCE(respondmodelo, '') = '';
UPDATE ekzerceroj SET normaligita = 'en tiu tempo oni ne vidis tiom da novaj konstruajxoj kiel nun|novaj konstruajxoj|da novaj konstruajxoj|tiom da novaj konstruajxoj' WHERE id = 1898 AND ekzerco_id = 231 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET respondmodelo = 'Boteloj plenaj da akvo estas tre pezaj.' WHERE id = 1899 AND ekzerco_id = 231 AND COALESCE(respondmodelo, '') = '';
UPDATE ekzerceroj SET normaligita = 'boteloj plenaj de akvo estas tre pezaj|de akvo|plenaj de akvo|de' WHERE id = 1899 AND ekzerco_id = 231 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET respondmodelo = 'La ministro enoficigis tiun pastron kiel anstataŭanta episkopo.' WHERE id = 1900 AND ekzerco_id = 231 AND COALESCE(respondmodelo, '') = '';
UPDATE ekzerceroj SET normaligita = 'la ministro enoficigis tiun pastron kiel anstatauxantan episkopon|la ministro enoficigis tiun pastron kiel anstatauxan episkopon|anstatauxantan episkopon|kiel anstatauxantan episkopon|anstatauxan episkopon|kiel anstatauxan episkopon' WHERE id = 1900 AND ekzerco_id = 231 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET respondmodelo = 'Kiam vi bruligas fajron, tre gravas, kion lignon vi surmetas.' WHERE id = 1901 AND ekzerco_id = 231 AND COALESCE(respondmodelo, '') = '';
UPDATE ekzerceroj SET normaligita = 'kiam vi bruligas fajron tre gravas kian lignon vi surmetas|kian|kian lignon' WHERE id = 1901 AND ekzerco_id = 231 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET respondmodelo = 'La temanĝo prenita ni veturis hejmen.' WHERE id = 1902 AND ekzerco_id = 231 AND COALESCE(respondmodelo, '') = '';
UPDATE ekzerceroj SET normaligita = 'preninte la temangxon ni veturis hejmen|post la temangxo ni veturis hejmen' WHERE id = 1902 AND ekzerco_id = 231 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET respondmodelo = 'Mi ne scias, se tiu poŝtmarko servis por afrankado.' WHERE id = 1903 AND ekzerco_id = 231 AND COALESCE(respondmodelo, '') = '';
UPDATE ekzerceroj SET normaligita = 'mi ne scias cxu tiu posxtmarko servis por afrankado|cxu' WHERE id = 1903 AND ekzerco_id = 231 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET respondmodelo = 'La kongreso okazos de la 20-an ĝis la 27-an de majo.' WHERE id = 1904 AND ekzerco_id = 231 AND COALESCE(respondmodelo, '') = '';
UPDATE ekzerceroj SET normaligita = 'la kongreso okazos de la 20a gxis la 27a de majo|de la 20a gxis la 27a de majo|de la 20a gxis la 27a|la 20a gxis la 27a|20a gxis 27a|20a 27a' WHERE id = 1904 AND ekzerco_id = 231 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET respondmodelo = 'Tiun beston oni nomas talpon.' WHERE id = 1905 AND ekzerco_id = 231 AND COALESCE(respondmodelo, '') = '';
UPDATE ekzerceroj SET normaligita = 'tiun beston oni nomas talpo|talpo' WHERE id = 1905 AND ekzerco_id = 231 AND COALESCE(normaligita, '') = '';
UPDATE ekzercoj SET komando = 'En la subaj propozicioj troviĝas po unu eraro. Trovu la erarojn kaj korektu ilin rekte en la propozicio.' WHERE id = 231 AND komando = 'En la subaj propozicioj troviĝas po unu eraro. Trovu la erarojn kaj korektu ilin.';
UPDATE ekzercoj SET korektebla = 1 WHERE id = 231 AND typo = 'verkado-1';

-- 236
UPDATE ekzerceroj SET respondmodelo = 'La kongreso komenciĝis la 3-a de aŭgusto.' WHERE id = 1921 AND ekzerco_id = 236 AND COALESCE(respondmodelo, '') = '';
UPDATE ekzerceroj SET normaligita = 'la kongreso komencigxis la 3an de auxgusto|la 3an|3an|la 3an de auxgusto' WHERE id = 1921 AND ekzerco_id = 236 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET respondmodelo = 'En la akceptejo regis viglan atmosferon.' WHERE id = 1922 AND ekzerco_id = 236 AND COALESCE(respondmodelo, '') = '';
UPDATE ekzerceroj SET normaligita = 'en la akceptejo regis vigla atmosfero|vigla atmosfero|regis vigla atmosfero' WHERE id = 1922 AND ekzerco_id = 236 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET respondmodelo = 'Kiel abonanto de via gazeto bonvolu publikigi mian anonceton.' WHERE id = 1923 AND ekzerco_id = 236 AND COALESCE(respondmodelo, '') = '';
UPDATE ekzerceroj SET normaligita = 'kiel abonanto de via gazeto mi petas vin publikigi mian anonceton|kiel abonanto de via gazeto mi petas ke vi publikigu mian anonceton|cxar mi estas abonanto de via gazeto bonvolu publikigi mian anonceton' WHERE id = 1923 AND ekzerco_id = 236 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET respondmodelo = 'Li faris decidon, kiu mutigis sian edzinon pro mirego.' WHERE id = 1924 AND ekzerco_id = 236 AND COALESCE(respondmodelo, '') = '';
UPDATE ekzerceroj SET normaligita = 'li faris decidon kiu mutigis lian edzinon pro mirego|lian|lian edzinon' WHERE id = 1924 AND ekzerco_id = 236 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET respondmodelo = 'La anekdotoj, kiujn li skribis dum lia libertempo, estas tre amuzaj.' WHERE id = 1925 AND ekzerco_id = 236 AND COALESCE(respondmodelo, '') = '';
UPDATE ekzerceroj SET normaligita = 'la anekdotoj kiujn li skribis dum sia libertempo estas tre amuzaj|sia|dum sia|dum sia libertempo' WHERE id = 1925 AND ekzerco_id = 236 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET respondmodelo = 'La sekretario elparolis vortojn jam de longe atenditaj.' WHERE id = 1926 AND ekzerco_id = 236 AND COALESCE(respondmodelo, '') = '';
UPDATE ekzerceroj SET normaligita = 'la sekretario elparolis vortojn jam de longe atenditajn|la sekretario elparolis vortojn jam delonge atenditajn|atenditajn' WHERE id = 1926 AND ekzerco_id = 236 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET respondmodelo = 'Ĉesu vian petoladon!' WHERE id = 1927 AND ekzerco_id = 236 AND COALESCE(respondmodelo, '') = '';
UPDATE ekzerceroj SET normaligita = 'cxesigu vian petoladon|cxesu petoladi|cxesigu' WHERE id = 1927 AND ekzerco_id = 236 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET respondmodelo = 'Niaj gastoj ne ankoraŭ alvenis.' WHERE id = 1928 AND ekzerco_id = 236 AND COALESCE(respondmodelo, '') = '';
UPDATE ekzerceroj SET normaligita = 'niaj gastoj ankoraux ne alvenis|ankoraux ne|ankoraux ne alvenis' WHERE id = 1928 AND ekzerco_id = 236 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET respondmodelo = 'Mia amiko montris min gravan dokumenton.' WHERE id = 1929 AND ekzerco_id = 236 AND COALESCE(respondmodelo, '') = '';
UPDATE ekzerceroj SET normaligita = 'mia amiko montris al mi gravan dokumenton|al mi|montris al mi' WHERE id = 1929 AND ekzerco_id = 236 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET respondmodelo = 'Multaj ribelintoj estas en la karcerejoj.' WHERE id = 1930 AND ekzerco_id = 236 AND COALESCE(respondmodelo, '') = '';
UPDATE ekzerceroj SET normaligita = 'multaj ribelintoj estas en la karceroj|multaj ribelintoj estas en la malliberejoj|karceroj|en la karceroj|malliberejoj|en la malliberejoj' WHERE id = 1930 AND ekzerco_id = 236 AND COALESCE(normaligita, '') = '';
UPDATE ekzercoj SET komando = 'En la subaj propozicioj troviĝas po unu eraro. Trovu la erarojn kaj korektu ilin rekte en la propozicio.' WHERE id = 236 AND komando = 'En la subaj propozicioj troviĝas po unu eraro. Trovu la erarojn kaj korektu ilin.';
UPDATE ekzercoj SET korektebla = 1 WHERE id = 236 AND typo = 'verkado-1';

-- 255
UPDATE ekzerceroj SET respondmodelo = 'Tiel estis la lernejo.' WHERE id = 2032 AND ekzerco_id = 255 AND COALESCE(respondmodelo, '') = '';
UPDATE ekzerceroj SET normaligita = 'tia estis la lernejo|tia' WHERE id = 2032 AND ekzerco_id = 255 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET respondmodelo = 'En la festvespero oni prezentis teatraĵeton, verkita de la prezidanto.' WHERE id = 2033 AND ekzerco_id = 255 AND COALESCE(respondmodelo, '') = '';
UPDATE ekzerceroj SET normaligita = 'en la festvespero oni prezentis teatrajxeton verkitan de la prezidanto|verkitan|verkitan de la prezidanto' WHERE id = 2033 AND ekzerco_id = 255 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET respondmodelo = 'La ĉeestantoj, larĝe malfermis iliajn monujojn por kunhelpi en la starigo de la monumento.' WHERE id = 2034 AND ekzerco_id = 255 AND COALESCE(respondmodelo, '') = '';
UPDATE ekzerceroj SET normaligita = 'la cxeestantoj largxe malfermis siajn monujojn por kunhelpi en la starigo de la monumento|siajn|siajn monujojn' WHERE id = 2034 AND ekzerco_id = 255 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET respondmodelo = 'Ni legu tiun libron, ĉar ĝi estas grave koni la opinion de la aŭtoro.' WHERE id = 2035 AND ekzerco_id = 255 AND COALESCE(respondmodelo, '') = '';
UPDATE ekzerceroj SET normaligita = 'ni legu tiun libron cxar estas grave koni la opinion de la auxtoro|ni legu tiun libron cxar gravas koni la opinion de la auxtoro|estas grave|gravas|cxar estas grave|cxar gravas' WHERE id = 2035 AND ekzerco_id = 255 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET respondmodelo = 'Ili konsideris Esperanton kiel ekzotika aspiro.' WHERE id = 2036 AND ekzerco_id = 255 AND COALESCE(respondmodelo, '') = '';
UPDATE ekzerceroj SET normaligita = 'ili konsideris esperanton kiel ekzotikan aspiron|ekzotikan aspiron|kiel ekzotikan aspiron' WHERE id = 2036 AND ekzerco_id = 255 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET respondmodelo = 'La nova kurso komencos post du semajnoj.' WHERE id = 2037 AND ekzerco_id = 255 AND COALESCE(respondmodelo, '') = '';
UPDATE ekzerceroj SET normaligita = 'la nova kurso komencigxos post du semajnoj|komencigxos' WHERE id = 2037 AND ekzerco_id = 255 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET respondmodelo = 'Ni tre ĝojus, kiam vi povus plenumi nian peton.' WHERE id = 2038 AND ekzerco_id = 255 AND COALESCE(respondmodelo, '') = '';
UPDATE ekzerceroj SET normaligita = 'ni tre gxojus se vi povus plenumi nian peton|se' WHERE id = 2038 AND ekzerco_id = 255 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET respondmodelo = 'La aliĝoj estos akceptitaj nur ĝis la fino de junio.' WHERE id = 2039 AND ekzerco_id = 255 AND COALESCE(respondmodelo, '') = '';
UPDATE ekzerceroj SET normaligita = 'la aligxoj estos akceptataj nur gxis la fino de junio|akceptataj|estos akceptataj' WHERE id = 2039 AND ekzerco_id = 255 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET respondmodelo = 'Ni forigu la malsaton en la neevoluiĝintaj landoj!' WHERE id = 2040 AND ekzerco_id = 255 AND COALESCE(respondmodelo, '') = '';
UPDATE ekzerceroj SET normaligita = 'ni forigu la malsaton en la neevoluintaj landoj|ni forigu la malsaton en la malpli evoluintaj landoj|ni forigu la malsaton en la subevoluintaj landoj|neevoluintaj|malpli evoluintaj|subevoluintaj|neevoluintaj landoj|malpli evoluintaj landoj|subevoluintaj landoj' WHERE id = 2040 AND ekzerco_id = 255 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET respondmodelo = 'La homa socio estas daŭre ŝanĝanta.' WHERE id = 2041 AND ekzerco_id = 255 AND COALESCE(respondmodelo, '') = '';
UPDATE ekzerceroj SET normaligita = 'la homa socio dauxre sxangxigxas|la homa socio estas dauxre sxangxigxanta|sxangxigxas|dauxre sxangxigxas|sxangxigxanta|dauxre sxangxigxanta' WHERE id = 2041 AND ekzerco_id = 255 AND COALESCE(normaligita, '') = '';
UPDATE ekzercoj SET komando = 'Ĉiu el la subaj propozicioj enhavas po unu eraro. Trovu la erarojn kaj korektu ilin rekte en la propozicio:' WHERE id = 255 AND komando = 'Ĉiu el la subaj propozicioj enhavas po unu eraro. Trovu la erarojn kaj korektu ilin:';
UPDATE ekzercoj SET korektebla = 1 WHERE id = 255 AND typo = 'verkado-1';

-- 262
UPDATE ekzerceroj SET respondmodelo = '“Tiel grandan kunvenon ni ne jam vidis!”' WHERE id = 2083 AND ekzerco_id = 262 AND COALESCE(respondmodelo, '') = '';
UPDATE ekzerceroj SET normaligita = 'tiel grandan kunvenon ni ankoraux neniam vidis|tiel grandan kunvenon ni neniam vidis|tiel grandan kunvenon ni ankoraux ne vidis|neniam|ankoraux neniam|ankoraux ne|ni neniam vidis|ni ankoraux neniam vidis|ni ankoraux ne vidis' WHERE id = 2083 AND ekzerco_id = 262 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET respondmodelo = 'Svislandon nur reprezentis unu delegito.' WHERE id = 2084 AND ekzerco_id = 262 AND COALESCE(respondmodelo, '') = '';
UPDATE ekzerceroj SET normaligita = 'svislandon reprezentis nur unu delegito|reprezentis nur unu delegito|nur unu delegito|reprezentis nur unu' WHERE id = 2084 AND ekzerco_id = 262 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET respondmodelo = 'La ekspozicio estis malfermata dum la tuta tago.' WHERE id = 2085 AND ekzerco_id = 262 AND COALESCE(respondmodelo, '') = '';
UPDATE ekzerceroj SET normaligita = 'la ekspozicio estis malfermita dum la tuta tago|la ekspozicio estis malfermita la tutan tagon|malfermita|estis malfermita' WHERE id = 2085 AND ekzerco_id = 262 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET respondmodelo = 'La naturbelaĵoj de nia regiono altiras ĉiujare multaj miloj da turistoj.' WHERE id = 2086 AND ekzerco_id = 262 AND COALESCE(respondmodelo, '') = '';
UPDATE ekzerceroj SET normaligita = 'la naturbelajxoj de nia regiono altiras cxiujare multajn milojn da turistoj|multajn milojn|multajn milojn da turistoj' WHERE id = 2086 AND ekzerco_id = 262 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET respondmodelo = 'Ni vizitis la monaĥejon, kiun la popolo estas konstruinta antaŭ multaj jarcentoj.' WHERE id = 2087 AND ekzerco_id = 262 AND COALESCE(respondmodelo, '') = '';
UPDATE ekzerceroj SET normaligita = 'ni vizitis la monahxejon kiun la popolo konstruis antaux multaj jarcentoj|konstruis|la popolo konstruis' WHERE id = 2087 AND ekzerco_id = 262 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET respondmodelo = 'En la lastaj jaroj li ellaboris multajn protokolojn de internaciajn konferencojn.' WHERE id = 2088 AND ekzerco_id = 262 AND COALESCE(respondmodelo, '') = '';
UPDATE ekzerceroj SET normaligita = 'en la lastaj jaroj li ellaboris multajn protokolojn de internaciaj konferencoj|internaciaj konferencoj|de internaciaj konferencoj' WHERE id = 2088 AND ekzerco_id = 262 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET respondmodelo = 'Tiu packonferenco en 1919 faris grandan maljustecon.' WHERE id = 2089 AND ekzerco_id = 262 AND COALESCE(respondmodelo, '') = '';
UPDATE ekzerceroj SET normaligita = 'tiu packonferenco en 1919 faris grandan maljustajxon|tiu packonferenco en 1919 faris grandan maljuston|maljustajxon|maljuston|grandan maljustajxon|grandan maljuston' WHERE id = 2089 AND ekzerco_id = 262 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET respondmodelo = 'Ni ne povas plenumi la multajn mendojn gis nun ricevitaj.' WHERE id = 2090 AND ekzerco_id = 262 AND COALESCE(respondmodelo, '') = '';
UPDATE ekzerceroj SET normaligita = 'ni ne povas plenumi la multajn mendojn gxis nun ricevitajn|ni ne povas plenumi la multajn mendojn ricevitajn gxis nun|ricevitajn|gxis nun ricevitajn|ricevitajn gxis nun' WHERE id = 2090 AND ekzerco_id = 262 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET respondmodelo = 'Vi nur devas pagi la sendkostojn.' WHERE id = 2091 AND ekzerco_id = 262 AND COALESCE(respondmodelo, '') = '';
UPDATE ekzerceroj SET normaligita = 'vi devas pagi nur la sendkostojn|pagi nur la sendkostojn|nur la sendkostojn|devas pagi nur' WHERE id = 2091 AND ekzerco_id = 262 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET respondmodelo = 'Tiu vojaĝo kostos vin ducent dolarojn.' WHERE id = 2092 AND ekzerco_id = 262 AND COALESCE(respondmodelo, '') = '';
UPDATE ekzerceroj SET normaligita = 'tiu vojagxo kostos al vi ducent dolarojn|al vi|kostos al vi' WHERE id = 2092 AND ekzerco_id = 262 AND COALESCE(normaligita, '') = '';
UPDATE ekzercoj SET komando = 'En ĉiu el la subaj propozicioj troviĝas po unu eraro. Trovu la erarojn kaj korektu ilin rekte en la propozicio:' WHERE id = 262 AND komando = 'En ĉiu el la subaj propozicioj troviĝas po unu eraro. Trovu la erarojn kaj korektu ilin:';
UPDATE ekzercoj SET korektebla = 1 WHERE id = 262 AND typo = 'verkado-1';

-- 271
UPDATE ekzerceroj SET respondmodelo = 'La nova filmo estos prezentita dum la kongreso.' WHERE id = 2151 AND ekzerco_id = 271 AND COALESCE(respondmodelo, '') = '';
UPDATE ekzerceroj SET normaligita = 'la nova filmo estos prezentata dum la kongreso|prezentata|estos prezentata' WHERE id = 2151 AND ekzerco_id = 271 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET respondmodelo = 'La ekskurso estis tre agrabla kaj tial niaj samideanoj ne bedaŭris ilian partoprenon.' WHERE id = 2152 AND ekzerco_id = 271 AND COALESCE(respondmodelo, '') = '';
UPDATE ekzerceroj SET normaligita = 'la ekskurso estis tre agrabla kaj tial niaj samideanoj ne bedauxris sian partoprenon|sian|sian partoprenon' WHERE id = 2152 AND ekzerco_id = 271 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET respondmodelo = 'Ni esperas, ke vi havu agrablan vojaĝon.' WHERE id = 2153 AND ekzerco_id = 271 AND COALESCE(respondmodelo, '') = '';
UPDATE ekzerceroj SET normaligita = 'ni esperas ke vi havos agrablan vojagxon|havos' WHERE id = 2153 AND ekzerco_id = 271 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET respondmodelo = 'Tiun konstruaĵon oni uzos kiel la centro de la japanaj studoj en Eŭropo.' WHERE id = 2154 AND ekzerco_id = 271 AND COALESCE(respondmodelo, '') = '';
UPDATE ekzerceroj SET normaligita = 'tiun konstruajxon oni uzos kiel la centron de la japanaj studoj en euxropo|tiun konstruajxon oni uzos kiel centron de la japanaj studoj en euxropo|la centron|centron|kiel la centron|kiel centron' WHERE id = 2154 AND ekzerco_id = 271 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET respondmodelo = 'Tiu prelego estis tre amuza kaj lernema.' WHERE id = 2155 AND ekzerco_id = 271 AND COALESCE(respondmodelo, '') = '';
UPDATE ekzerceroj SET normaligita = 'tiu prelego estis tre amuza kaj instrua|tiu prelego estis tre amuza kaj instruiga|instrua|instruiga' WHERE id = 2155 AND ekzerco_id = 271 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET respondmodelo = 'Ni ne deziras miksi nin en la disputo.' WHERE id = 2156 AND ekzerco_id = 271 AND COALESCE(respondmodelo, '') = '';
UPDATE ekzerceroj SET normaligita = 'ni ne deziras miksi nin en la disputon|ni ne deziras enmiksigxi en la disputon|en la disputon|la disputon|disputon|enmiksigxi en la disputon' WHERE id = 2156 AND ekzerco_id = 271 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET respondmodelo = 'Ne necesas, ke la homoj morti kaj mortigi por la patrujo.' WHERE id = 2157 AND ekzerco_id = 271 AND COALESCE(respondmodelo, '') = '';
UPDATE ekzerceroj SET normaligita = 'ne necesas ke la homoj mortu kaj mortigu por la patrujo|mortu kaj mortigu' WHERE id = 2157 AND ekzerco_id = 271 AND COALESCE(normaligita, '') = '';
UPDATE ekzerceroj SET respondmodelo = 'La ministro kaj siaj kunuloj ne petis la opinion de la parlamento.' WHERE id = 2158 AND ekzerco_id = 271 AND COALESCE(respondmodelo, '') = '';
UPDATE ekzerceroj SET normaligita = 'la ministro kaj liaj kunuloj ne petis la opinion de la parlamento|liaj|liaj kunuloj' WHERE id = 2158 AND ekzerco_id = 271 AND COALESCE(normaligita, '') = '';
UPDATE ekzercoj SET komando = 'Ĉiu el la subaj propozicioj enhavas po unu eraro. Trovu la erarojn kaj korektu ilin rekte en la propozicio:' WHERE id = 271 AND komando = 'Ĉiu el la subaj propozicioj enhavas po unu eraro. Trovu la erarojn kaj korektu ilin:';
UPDATE ekzercoj SET korektebla = 1 WHERE id = 271 AND typo = 'verkado-1';

-- Vérification
SELECT id, typo, korektebla, komando FROM ekzercoj WHERE id IN (231, 236, 255, 262, 271);
SELECT ekzerco_id, COUNT(*) AS demandoj, SUM(COALESCE(respondmodelo, '') <> '') AS antauxplenigitaj, SUM(COALESCE(normaligita, '') <> '') AS kun_respondoj
  FROM ekzerceroj WHERE ekzerco_id IN (231, 236, 255, 262, 271) AND forigita = 0 GROUP BY ekzerco_id;
