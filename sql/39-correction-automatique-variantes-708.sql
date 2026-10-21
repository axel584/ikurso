-- #708 : réponses justes refusées par la correction automatique (CG, Gerda malaperis, Paŝoj al plena posedo).
-- Variantes relevées dans les réponses fausses de la prod (données par au moins 10 élèves ou 3 % des répondants),
-- relues une à une ; entre parenthèses, le nombre d'élèves qui avaient donné cette réponse.
-- 1. Réponses attendues erronées (coquille ou accord manquant) : corrigées.
-- 2. Variantes ajoutées aux réponses attendues (normaligita), sous forme normalisée.
-- 3. Variantes plus tolérantes : Emmanuelle souhaite être le plus tolérant possible avec les élèves.
-- Généré par gen39.php : chaque variante est reconnue par kontroliRespondon(). Peut être rejoué sans risque.
SET NAMES utf8mb4;

-- 1. Réponses attendues erronées
UPDATE ekzerceroj SET normaligita = REPLACE(normaligita, 'sekajn bisvitojn', 'sekajn biskvitojn') WHERE id = 25 AND normaligita LIKE BINARY '%sekajn bisvitojn%';
UPDATE ekzerceroj SET normaligita = REPLACE(normaligita, 'la unua klason', 'la unuan klason') WHERE id = 967 AND normaligita LIKE BINARY '%la unua klason%';
UPDATE ekzerceroj SET normaligita = REPLACE(normaligita, 'la lemanto', 'la lernanto') WHERE id = 975 AND normaligita LIKE BINARY '%la lemanto%';
UPDATE ekzerceroj SET normaligita = REPLACE(normaligita, 'via korpon', 'vian korpon') WHERE id = 1049 AND normaligita LIKE BINARY '%via korpon%';
UPDATE ekzerceroj SET respondo = REPLACE(respondo, 'ĉirkaŭ via korpon', 'ĉirkaŭ vian korpon') WHERE id = 1049 AND respondo LIKE BINARY '%ĉirkaŭ via korpon%';

-- 2. Variantes acceptées

-- CG 2.9 n° 6 : La nouvelle boutique vend des gâteaux secs.
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|la nova butiko vendas biskvitojn sekajn') WHERE id = 25 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|la nova butiko vendas biskvitojn sekajn|%'; -- (14)

-- CG 1.10 n° 10 : Elle habitera dans une grande ville.
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|sxi logxos en urbo granda') WHERE id = 10 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|sxi logxos en urbo granda|%'; -- (17)

-- CG 3.9 n° 11 : Il aime sa sœur. (il s’agit de la sœur de sa femme)
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|li sxatas sxian fratinon') WHERE id = 56 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|li sxatas sxian fratinon|%'; -- (73)

-- CG 3.11 n° 22 : Combien as-tu de biscuits ? J’en ai 999.
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|kiom da biskvitoj havas vi mi havas nauxcent nauxdek naux') WHERE id = 67 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|kiom da biskvitoj havas vi mi havas nauxcent nauxdek naux|%'; -- (31)
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|kiom da biskvitoj vi havas mi havas nauxcent nauxdek naux biskvitojn') WHERE id = 67 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|kiom da biskvitoj vi havas mi havas nauxcent nauxdek naux biskvitojn|%'; -- (10)

-- CG 3.13 n° 23 : image 2.
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|kie estas la urbo varsovio gxi estas en pollando') WHERE id = 68 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|kie estas la urbo varsovio gxi estas en pollando|%'; -- (16)
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|kie estas la urbo varsovio la urbo varsovio estas en pollando') WHERE id = 68 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|kie estas la urbo varsovio la urbo varsovio estas en pollando|%'; -- (14)
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|kie estas la urbo varsovio varsovio estas en pollando') WHERE id = 68 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|kie estas la urbo varsovio varsovio estas en pollando|%'; -- (15)

-- CG 3.13 n° 24 : image 3. (FOTI = photographier)
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|kion fotas la viro la viro fotas insekton') WHERE id = 69 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|kion fotas la viro la viro fotas insekton|%'; -- (28)
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|kion fotas la viro li fotas insekton') WHERE id = 69 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|kion fotas la viro li fotas insekton|%'; -- (11)
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|kion fotas li li fotas insekton') WHERE id = 69 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|kion fotas li li fotas insekton|%'; -- (15)
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|kion la viro fotas la viro fotas insekton') WHERE id = 69 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|kion la viro fotas la viro fotas insekton|%'; -- (11)
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|kion li fotas li fotas la insekton') WHERE id = 69 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|kion li fotas li fotas la insekton|%'; -- (11)
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|kion oni fotas oni fotas insekton') WHERE id = 69 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|kion oni fotas oni fotas insekton|%'; -- (10)

-- CG 3.13 n° 25 : image 4.
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|kiu estas la viro li estas zamenhof') WHERE id = 70 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|kiu estas la viro li estas zamenhof|%'; -- (72)
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|kiu li estas li estas zamenhof') WHERE id = 70 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|kiu li estas li estas zamenhof|%'; -- (29)
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|kiu estas la viro la viro estas l l zamenhof') WHERE id = 70 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|kiu estas la viro la viro estas l l zamenhof|%'; -- (21)
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|kiu estas la viro li estas l l zamenhof') WHERE id = 70 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|kiu estas la viro li estas l l zamenhof|%'; -- (14)
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|kiu estas la viro li estas ludwik lejzer zamenhof') WHERE id = 70 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|kiu estas la viro li estas ludwik lejzer zamenhof|%'; -- (11)
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|kiu estas li li estas zamenhof') WHERE id = 70 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|kiu estas li li estas zamenhof|%'; -- (12)
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|kiu estas la viro la viro estas louislazare zamenhof') WHERE id = 70 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|kiu estas la viro la viro estas louislazare zamenhof|%'; -- (12)

-- CG 4.9 n° 10 : Kiu estas la Nacia Tago en via lando? (nacia = national-e)
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|la nacia tago en francujo estas la dekkvara de julio') WHERE id = 80 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|la nacia tago en francujo estas la dekkvara de julio|%'; -- (28)
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|en francujo la nacia tago estas la dekkvara de julio') WHERE id = 80 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|en francujo la nacia tago estas la dekkvara de julio|%'; -- (15)
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|la nacia tago en francio estas la dekkvara de julio') WHERE id = 80 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|la nacia tago en francio estas la dekkvara de julio|%'; -- (11)
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|la nacia tago estas la dekkvara de julio en mia lando') WHERE id = 80 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|la nacia tago estas la dekkvara de julio en mia lando|%'; -- (18)
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|la nacia tago estas la dekkvara de julio') WHERE id = 80 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|la nacia tago estas la dekkvara de julio|%'; -- (10)

-- CG 4.12 n° 24 : A-t-il oublié de porter du pain à la sœur de Petro ?
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|cxu li forgesis alporti panon al la fratino de petro') WHERE id = 89 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|cxu li forgesis alporti panon al la fratino de petro|%'; -- (57)

-- CG 4.12 n° 30 : Est-ce que le frère de la fille malade écrivait mal ?
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|cxu la frato de la malsana filino skribis malbone') WHERE id = 95 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|cxu la frato de la malsana filino skribis malbone|%'; -- (66)
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|cxu la frato de la malsana filino malbone skribis') WHERE id = 95 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|cxu la frato de la malsana filino malbone skribis|%'; -- (28)
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|cxu la frato de la knabino malsana skribis malbone') WHERE id = 95 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|cxu la frato de la knabino malsana skribis malbone|%'; -- (30)

-- CG 5.6 n° 5 : Simeono manĝos la du ovojn {vespere}.
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|kiam mangxos simeono la du ovojn') WHERE id = 107 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|kiam mangxos simeono la du ovojn|%'; -- (22)

-- CG 5.6 n° 6 : Esperanto estas {facila} lingvo.
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|kia lingvo esperanto estas') WHERE id = 108 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|kia lingvo esperanto estas|%'; -- (56)

-- CG 5.6 n° 11 : Qu’est-ce que c’est ? (Quelle chose est cette-chose ?)
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|kio estas cxi tio') WHERE id = 113 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|kio estas cxi tio|%'; -- (12)

-- CG 5.6 n° 24 : Qui sont-ils ?
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|kiuj estas ili') WHERE id = 126 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|kiuj estas ili|%'; -- (115)

-- CG 6.4 n° 1 : kio
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|que quoi') WHERE id = 127 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|que quoi|%'; -- (19)

-- CG 6.4 n° 2 : kia
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|quelle sorte') WHERE id = 128 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|quelle sorte|%'; -- (31)
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|de quelle sorte') WHERE id = 128 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|de quelle sorte|%'; -- (41)

-- CG 6.4 n° 3 : ĉial
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|pour toutes raisons') WHERE id = 129 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|pour toutes raisons|%'; -- (19)
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|pour toute sorte de raison') WHERE id = 129 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|pour toute sorte de raison|%'; -- (13)
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|pour toutes sortes de raison') WHERE id = 129 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|pour toutes sortes de raison|%'; -- (11)

-- CG 6.4 n° 4 : ĉiel
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|de toutes façons') WHERE id = 130 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|de toutes façons|%'; -- (10)
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|de toutes manières') WHERE id = 130 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|de toutes manières|%'; -- (12)

-- CG 6.4 n° 8 : iu
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|quelquun') WHERE id = 134 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|quelquun|%'; -- (609)

-- CG 6.10 n° 17 : En kia klubo vi estas membro?
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|mi estas membro de la junulara esperantista klubo') WHERE id = 143 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|mi estas membro de la junulara esperantista klubo|%'; -- (40)

-- CG 6.10 n° 18 : Kie okazis la kongreso, en kiu vi partoprenis? Ĉu en Granby?
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|ne la kongreso okazis en montrealo') WHERE id = 144 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|ne la kongreso okazis en montrealo|%'; -- (53)
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|la kongreso okazis en montrealo') WHERE id = 144 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|la kongreso okazis en montrealo|%'; -- (41)
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|la kongreso okazis en montrealo ne en granby') WHERE id = 144 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|la kongreso okazis en montrealo ne en granby|%'; -- (37)
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|ne la kongreso en kiu mi partoprenis okazis en montrealo') WHERE id = 144 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|ne la kongreso en kiu mi partoprenis okazis en montrealo|%'; -- (24)
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|la kongreso en kiu mi partoprenis okazis en montrealo ne en granby') WHERE id = 144 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|la kongreso en kiu mi partoprenis okazis en montrealo ne en granby|%'; -- (19)
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|ne la kongreso ne okazis en granby sed en montrealo') WHERE id = 144 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|ne la kongreso ne okazis en granby sed en montrealo|%'; -- (17)
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|ne gxi okazis en montrealo') WHERE id = 144 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|ne gxi okazis en montrealo|%'; -- (16)
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|la kongreso en kiu mi partoprenis ne okazis en granby sed en montrealo') WHERE id = 144 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|la kongreso en kiu mi partoprenis ne okazis en granby sed en montrealo|%'; -- (14)
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|la kongreso okazis en montrealo gxi ne okazis en granby') WHERE id = 144 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|la kongreso okazis en montrealo gxi ne okazis en granby|%'; -- (10)

-- CG 6.10 n° 19 : Kiajn amikojn vi vizitis en Montrealo?
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|mi vizitis esperantistajn amikojn en montrealo') WHERE id = 145 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|mi vizitis esperantistajn amikojn en montrealo|%'; -- (50)
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|ni vizitis esperantistajn amikojn en montrealo') WHERE id = 145 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|ni vizitis esperantistajn amikojn en montrealo|%'; -- (56)

-- CG 6.10 n° 20 : Kion vi manĝis por la tagmanĝo?
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|ni mangxis sandvicxojn') WHERE id = 146 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|ni mangxis sandvicxojn|%'; -- (85)
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|mi mangxis sandvicxojn') WHERE id = 146 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|mi mangxis sandvicxojn|%'; -- (51)
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|mi mangxis sandvicxojn por la tagmangxo') WHERE id = 146 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|mi mangxis sandvicxojn por la tagmangxo|%'; -- (63)
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|ni mangxis sandvicxojn por la tagmangxo') WHERE id = 146 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|ni mangxis sandvicxojn por la tagmangxo|%'; -- (137)

-- CG 6.10 n° 21 : Kion vi vizitis en Granby?
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|mi vizitis la zoon en granby') WHERE id = 147 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|mi vizitis la zoon en granby|%'; -- (10)
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|en granby mi vizitis la zoon') WHERE id = 147 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|en granby mi vizitis la zoon|%'; -- (12)
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|en granby ni vizitis la zoon') WHERE id = 147 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|en granby ni vizitis la zoon|%'; -- (20)
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|ni vizitis la zoon en granby') WHERE id = 147 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|ni vizitis la zoon en granby|%'; -- (17)
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|en granby mi vizitis la zoologian gxardenon') WHERE id = 147 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|en granby mi vizitis la zoologian gxardenon|%'; -- (18)
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|en granby ni vizitis la zoologian gxardenon') WHERE id = 147 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|en granby ni vizitis la zoologian gxardenon|%'; -- (31)
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|mi vizitis la zoologian gxardenon') WHERE id = 147 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|mi vizitis la zoologian gxardenon|%'; -- (19)
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|ni vizitis la zoologian gxardenon') WHERE id = 147 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|ni vizitis la zoologian gxardenon|%'; -- (25)
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|ni vizitis la zoologian gxardenon en granby') WHERE id = 147 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|ni vizitis la zoologian gxardenon en granby|%'; -- (25)

-- CG 6.10 n° 22 : Kio plaĉis al via frato?
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|al mia frato placxis la ursoj apud la enirejo') WHERE id = 148 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|al mia frato placxis la ursoj apud la enirejo|%'; -- (53)
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|la ursoj apud la enirejo placxis al mia frato') WHERE id = 148 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|la ursoj apud la enirejo placxis al mia frato|%'; -- (66)
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|la ursoj apud la enirejo tre placxis al mia frato') WHERE id = 148 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|la ursoj apud la enirejo tre placxis al mia frato|%'; -- (29)
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|la ursoj placxis al mia frato') WHERE id = 148 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|la ursoj placxis al mia frato|%'; -- (100)
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|al mia frato tre placxis la ursoj') WHERE id = 148 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|al mia frato tre placxis la ursoj|%'; -- (20)
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|al mia frato placxis la ursoj') WHERE id = 148 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|al mia frato placxis la ursoj|%'; -- (68)
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|la ursoj tre placxis al mia frato') WHERE id = 148 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|la ursoj tre placxis al mia frato|%'; -- (22)

-- CG 6.10 n° 23 : Kie estis la blanka urso?
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|la blanka urso estis ofte en la akvo') WHERE id = 149 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|la blanka urso estis ofte en la akvo|%'; -- (269)
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|la blanka urso ofte estis en la akvo') WHERE id = 149 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|la blanka urso ofte estis en la akvo|%'; -- (26)
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|gxi estis ofte en la akvo') WHERE id = 149 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|gxi estis ofte en la akvo|%'; -- (23)
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|la blanka urso estis en la akvo') WHERE id = 149 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|la blanka urso estis en la akvo|%'; -- (98)

-- CG 6.10 n° 24 : Kiajn ursojn vi vidis en la zoo?
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|ni vidis brunajn blankajn kaj nigrajn ursojn') WHERE id = 150 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|ni vidis brunajn blankajn kaj nigrajn ursojn|%'; -- (24)
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|mi vidis blankajn brunajn kaj nigrajn ursojn') WHERE id = 150 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|mi vidis blankajn brunajn kaj nigrajn ursojn|%'; -- (17)
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|ni vidis blankajn nigrajn kaj brunajn ursojn') WHERE id = 150 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|ni vidis blankajn nigrajn kaj brunajn ursojn|%'; -- (11)
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|ni vidis blankajn brunajn kaj nigrajn ursojn') WHERE id = 150 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|ni vidis blankajn brunajn kaj nigrajn ursojn|%'; -- (20)
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|ni vidis brunajn blankajn kaj nigrajn ursojn en la zoo') WHERE id = 150 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|ni vidis brunajn blankajn kaj nigrajn ursojn en la zoo|%'; -- (14)

-- CG 6.10 n° 25 : Per kio vi veturis al la Zoologia Ĝardeno?
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|mi veturis al la zoologia gxardeno per auxto') WHERE id = 151 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|mi veturis al la zoologia gxardeno per auxto|%'; -- (50)
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|mi veturis per auxto') WHERE id = 151 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|mi veturis per auxto|%'; -- (31)
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|ni veturis al la zoologia gxardeno per auxto') WHERE id = 151 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|ni veturis al la zoologia gxardeno per auxto|%'; -- (111)
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|mi veturis al la zoo per auxto') WHERE id = 151 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|mi veturis al la zoo per auxto|%'; -- (17)
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|mi veturis per auxto al la zoo') WHERE id = 151 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|mi veturis per auxto al la zoo|%'; -- (18)
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|ni veturis per auxto') WHERE id = 151 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|ni veturis per auxto|%'; -- (41)
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|ni veturis al la zoo per auxto') WHERE id = 151 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|ni veturis al la zoo per auxto|%'; -- (31)
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|ni veturis per auxto al la zoo') WHERE id = 151 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|ni veturis per auxto al la zoo|%'; -- (32)

-- CG 6.10 n° 26 : Kiuj bestoj estis por vi tre interesaj?
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|la grandaj simioj estis por mi tre interesaj') WHERE id = 152 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|la grandaj simioj estis por mi tre interesaj|%'; -- (46)
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|la grandaj simioj estis tre interesaj por mi') WHERE id = 152 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|la grandaj simioj estis tre interesaj por mi|%'; -- (52)
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|la grandaj simioj estis tre interesaj') WHERE id = 152 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|la grandaj simioj estis tre interesaj|%'; -- (18)
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|por mi la simioj estis tre interesaj') WHERE id = 152 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|por mi la simioj estis tre interesaj|%'; -- (26)
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|la simioj estis por mi tre interesaj') WHERE id = 152 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|la simioj estis por mi tre interesaj|%'; -- (11)

-- CG 6.12 n° 27 : bestoj - en - estas - interesaj - multaj - tiu - zoo.
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|estas multaj bestoj interesaj en tiu zoo') WHERE id = 153 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|estas multaj bestoj interesaj en tiu zoo|%'; -- (37)
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|en tiu zoo estas multaj interesaj bestoj') WHERE id = 153 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|en tiu zoo estas multaj interesaj bestoj|%'; -- (36)
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|en tiu zoo multaj bestoj estas interesaj') WHERE id = 153 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|en tiu zoo multaj bestoj estas interesaj|%'; -- (12)

-- CG 6.12 n° 28 : antaŭ - ĉiu - dum - estos - infanoj - kaĝo. - la - tagmanĝo
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|infanoj estos antaux cxiu kagxo dum la tagmangxo') WHERE id = 154 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|infanoj estos antaux cxiu kagxo dum la tagmangxo|%'; -- (12)
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|estos infanoj antaux cxiu kagxo dum la tagmangxo') WHERE id = 154 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|estos infanoj antaux cxiu kagxo dum la tagmangxo|%'; -- (28)

-- CG 6.12 n° 31 : arkto - blankaj - en - estas - ursoj.
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|estas blankaj ursoj en arkto') WHERE id = 157 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|estas blankaj ursoj en arkto|%'; -- (53)
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|blankaj ursoj estas en arkto') WHERE id = 157 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|blankaj ursoj estas en arkto|%'; -- (23)

-- CG 6.15 n° 34 : La strato estas larĝa JE* 50 metroj.
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|la strato estas largxa kvindek metrojn') WHERE id = 160 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|la strato estas largxa kvindek metrojn|%'; -- (41)

-- CG 6.15 n° 35 : D-ro (Doktoro) Zamenhof naskiĝis JE* la 15a de decembro 1859. (naskiĝi = naître)
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|dro zamenhof naskigxis la dekkvinan de decembro 1859') WHERE id = 161 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|dro zamenhof naskigxis la dekkvinan de decembro 1859|%'; -- (26)
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|doktoro zamenhof naskigxis la dekkvinan de decembro 1859') WHERE id = 161 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|doktoro zamenhof naskigxis la dekkvinan de decembro 1859|%'; -- (11)

-- CG 7.5 n° 7 : la solitude (sola = seul) :
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|la soleco') WHERE id = 174 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|la soleco|%'; -- (17)

-- CG 7.8 n° 19 : Se nun estas la dua, kioma horo estos post dudek minutoj ? (Se signifie «si» condition)
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|estos la dua kaj dudek minutoj') WHERE id = 181 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|estos la dua kaj dudek minutoj|%'; -- (17)
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|post dudek minutoj estos la dua kaj dudek') WHERE id = 181 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|post dudek minutoj estos la dua kaj dudek|%'; -- (12)

-- CG 7.8 n° 21 : Mi revenis je la kvara kaj duono, kaj ŝi revenis dudek kvin minutojn antaŭ mi. Je la kioma
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|sxi revenis je la kvara kaj kvin minutoj') WHERE id = 183 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|sxi revenis je la kvara kaj kvin minutoj|%'; -- (15)

-- CG 7.8 n° 22 : Fatima iras labori je la sepa matene kaj revenas post naŭ horoj. Je la kioma ŝi revenas?
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|sxi revenas je la kvara posttagmeze') WHERE id = 184 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|sxi revenas je la kvara posttagmeze|%'; -- (115)
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|fatima revenas je la kvara posttagmeze') WHERE id = 184 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|fatima revenas je la kvara posttagmeze|%'; -- (17)

-- CG 7.8 n° 23 : image 1.
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|estas dek kvin antaux la deka') WHERE id = 185 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|estas dek kvin antaux la deka|%'; -- (10)

-- CG 7.8 n° 25 : image 3.
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|estas la tria kaj tridek') WHERE id = 187 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|estas la tria kaj tridek|%'; -- (27)

-- CG 7.8 n° 26 : image 4.
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|estas du antaux la sesa') WHERE id = 188 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|estas du antaux la sesa|%'; -- (61)
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|estas du antaux la sesa posttagmeze') WHERE id = 188 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|estas du antaux la sesa posttagmeze|%'; -- (47)
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|estas du antaux la dekoka') WHERE id = 188 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|estas du antaux la dekoka|%'; -- (115)
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|estas la deksepa kaj kvindek ok') WHERE id = 188 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|estas la deksepa kaj kvindek ok|%'; -- (103)
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|estas la kvina kaj kvindek ok') WHERE id = 188 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|estas la kvina kaj kvindek ok|%'; -- (11)

-- CG 8.5 n° 11 : Si elle venait à 8h nous pourrions manger à 8h30.
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|se sxi venus je la oka ni povus mangxi je la oka kaj tridek') WHERE id = 199 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|se sxi venus je la oka ni povus mangxi je la oka kaj tridek|%'; -- (49)

-- CG 8.5 n° 12 : Je désire qu’elle vienne à 8h mais je crois qu’elle ne viendra pas avant 9h.
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|mi deziras ke sxi venu je la oka sed mi kredas ke sxi ne venos antaux la nauxa') WHERE id = 200 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|mi deziras ke sxi venu je la oka sed mi kredas ke sxi ne venos antaux la nauxa|%'; -- (157)

-- CG 8.5 n° 16 : Il croyait que je ne viendrais pas avant 9h mais je suis venue à 8h moins 5.
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|li kredis ke mi ne venos antaux la nauxa sed mi venis je kvin antaux la oka') WHERE id = 204 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|li kredis ke mi ne venos antaux la nauxa sed mi venis je kvin antaux la oka|%'; -- (102)

-- CG 8.8 n° 28 : Anna skribis * nomon sur * libro per * skribilo. (Elle a écrit son propre nom sur le livre
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|sian sxia lia') WHERE id = 216 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|sian sxia lia|%'; -- (45)

-- GR 1.4 n° 1 : Kiu sidas en la angulo? (Tom / Linda / blonda viro / juna knabino / maljuna viro)
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|la blonda viro sidas en la angulo') WHERE id = 282 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|la blonda viro sidas en la angulo|%'; -- (23)

-- GR 1.4 n° 2 : Kiu iras al li? (Tom / Linda / blonda viro / juna knabino / maljuna viro)
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|la juna knabino iras al li') WHERE id = 283 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|la juna knabino iras al li|%'; -- (21)

-- GR 1.4 n° 4 : Kiu estas (eble) la plej bela virino en la mondo? (Tom / Linda / blonda viro / bela knabin
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|linda estas la plej bela virino en la mondo') WHERE id = 285 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|linda estas la plej bela virino en la mondo|%'; -- (44)

-- GR 1.4 n° 5 : Kiu estas (eble) la plej malserioza knabo en la universitato? (Tom / Linda / blonda viro /
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|tom estas (eble) la plej malserioza knabo en la universitato') WHERE id = 286 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|tom estas (eble) la plej malserioza knabo en la universitato|%'; -- (32)

-- GR 2.4 n° 5 : Al kio rigardas la juna knabino, kiu estas kun li? (al la spegulo / al la pordo / al Linda
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|la juna knabino kiu estas kun li rigardas al la pordo') WHERE id = 303 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|la juna knabino kiu estas kun li rigardas al la pordo|%'; -- (19)

-- GR 3.4 n° 3 : Ĉu Linda kaj Tom permesas, ke Bob sidu ĉe ilia tablo? (jes / ne)
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|jes linda kaj tom permesas ke bob sidu cxe ilia tablo') WHERE id = 315 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|jes linda kaj tom permesas ke bob sidu cxe ilia tablo|%'; -- (69)

-- GR 4.4 n° 4 : Ĉu Bob konas la blondulon? (jes / ne)
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|bob ne konas la blondulon') WHERE id = 324 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|bob ne konas la blondulon|%'; -- (14)

-- GR 4.4 n° 5 : Kion instruas Gerda? (novajn lingvojn / lingvistikon / kriptaĵo-sciencon)
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|gerda instruas la kriptajxosciencon') WHERE id = 325 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|gerda instruas la kriptajxosciencon|%'; -- (12)

-- GR 4.4 n° 7 : Kiu estas la sola bela virino en la tuta mondo, por Tom? (Gerda / Linda / Ronga / la knabi
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|por tom linda estas la sola bela virino en la tuta mondo') WHERE id = 327 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|por tom linda estas la sola bela virino en la tuta mondo|%'; -- (41)

-- GR 9.4 n° 6 : * diris la kuracisto? - Li diris, ke mi estu senzorga, ke mia malsano ne estas tro serioza
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|kion diris la kuracisto') WHERE id = 402 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|kion diris la kuracisto|%'; -- (25)

-- GR 9.4 n° 7 : * vi resaniĝos? - Baldaŭ. Eble post kelkaj tagoj.
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|kiam vi resanigxos') WHERE id = 403 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|kiam vi resanigxos|%'; -- (32)

-- GR 9.4 n° 8 : * vi iros unue post la resaniĝo? - Unue mi iros en bonan restoracion.
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|kien vi iros unue post la resanigxo') WHERE id = 404 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|kien vi iros unue post la resanigxo|%'; -- (21)

-- GR 9.4 n° 10 : * helpas vin dum la malsano? - Mia amiko Petro.
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|kiu helpas vin dum la malsano') WHERE id = 406 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|kiu helpas vin dum la malsano|%'; -- (26)

-- GR 9.4 n° 11 : * estas via patrino? - En sia oficejo; ŝi devas multe labori tie.
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|kie estas via patrino') WHERE id = 407 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|kie estas via patrino|%'; -- (28)

-- GR 9.4 n° 12 : * vi ne povas iri piede? - Ĉar miaj kruroj estas tute senfortaj.
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|kial vi ne povas iri piede') WHERE id = 408 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|kial vi ne povas iri piede|%'; -- (27)

-- GR 9.4 n° 14 : * tio okazis? - En mia laborejo.
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|kie tio okazis') WHERE id = 410 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|kie tio okazis|%'; -- (27)

-- GR 9.4 n° 15 : * ili metis en vian laborlokon? - Neniun, do la laboro restas nefarita kaj atendas min.
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|kiun ili metis en vian laborlokon') WHERE id = 411 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|kiun ili metis en vian laborlokon|%'; -- (19)

-- GR 9.4 n° 16 : * ili metis neniun en vian lokon? - Ĉar laboristo por mia laboro estas malofte trovebla.
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|kial ili metis neniun en vian lokon') WHERE id = 412 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|kial ili metis neniun en vian lokon|%'; -- (25)

-- GR 10.4 n° 5 : Ĉu Tom ŝatas la novan aventuron? (jes / ne)
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|tom ne sxatas la novan aventuron') WHERE id = 417 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|tom ne sxatas la novan aventuron|%'; -- (10)

-- GR 23.4 n° 7 : Kato, kiu manĝis, normale volas dormi.
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|kato mangxinta normale volas dormi') WHERE id = 858 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|kato mangxinta normale volas dormi|%'; -- (16)

-- GR 24.4 n° 9 : POST KIAM LI longe PRIPENSIS la aferon, li decidis ekagi.
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|pripensinte longe la aferon li decidis ekagi') WHERE id = 876 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|pripensinte longe la aferon li decidis ekagi|%'; -- (22)

-- GR 24.4 n° 14 : La blondulo forveturis, DUM Tom kaj Linda OBSERVIS LIN.
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|observate de tom kaj linda la blondulo forveturis') WHERE id = 881 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|observate de tom kaj linda la blondulo forveturis|%'; -- (25)

-- PP 3.3 n° 58 : Skotlando estas montara lando. Ĝi troviĝas en la norda parto de Britujo.
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|skotlando estas montara lando kiu trovigxas en la norda parto de britujo') WHERE id = 1075 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|skotlando estas montara lando kiu trovigxas en la norda parto de britujo|%'; -- (4)

-- PP 7.4 n° 13 : La instruisto pardonis la kulpulon, ĉar li jam pentis (= ĉar li est[as/is/os] pent[ant/int
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|la instruisto pardonis la kulpulon cxar li estis pentinta') WHERE id = 1250 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|la instruisto pardonis la kulpulon cxar li estis pentinta|%'; -- (7)

-- PP 7.4 n° 14 : Oni ĵetis ŝnuron al la naĝanto, ĝuste kiam li ekdronis (est[as/is/os] dron[ant/int/ont]a).
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|oni jxetis sxnuron al la nagxanto gxuste kiam li estis dronanta') WHERE id = 1251 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|oni jxetis sxnuron al la nagxanto gxuste kiam li estis dronanta|%'; -- (9)

-- PP 7.4 n° 15 : Kiam mi kuris tiel rapide, mia koro ankoraŭ-ne-krevis-sed-poste-krevos (= mia koro est[as/
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|kiam mi kuris tiel rapide mia koro estis krevonta') WHERE id = 1252 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|kiam mi kuris tiel rapide mia koro estis krevonta|%'; -- (9)

-- PP 7.4 n° 16 : Hodiaŭ mi ankoraŭ-ne-iris-sed-poste-iros (est[as/is/os] ir[ant/int/ont]a) al la urbo.
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|hodiaux mi estas ironta al la urbo') WHERE id = 1253 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|hodiaux mi estas ironta al la urbo|%'; -- (4)

-- PP 7.4 n° 17 : Li ne sukcesas kapti la ranon, kiam ĝi jam pli frue saltis (est[as/is/os] salt[ant/int/ont
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|li ne sukcesas kapti la ranon kiam gxi estas saltinta') WHERE id = 1254 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|li ne sukcesas kapti la ranon kiam gxi estas saltinta|%'; -- (6)
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|li ne sukcesas kapti la ranon kiam gxi estis saltinta') WHERE id = 1254 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|li ne sukcesas kapti la ranon kiam gxi estis saltinta|%'; -- (4)

-- PP 7.4 n° 18 : Mi ĉiam ĉeestas, kiam li prelegas (est[as/is/os] preleg[ant/int/ont]a).
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|mi cxiam cxeestas kiam li estas preleganta') WHERE id = 1255 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|mi cxiam cxeestas kiam li estas preleganta|%'; -- (15)

-- PP 7.4 n° 19 : Morgaŭ mi laboros (est[as/is/os] labor[ant/int/ont]a) la tutan tagon.
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|morgaux mi estos laboranta la tutan tagon') WHERE id = 1256 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|morgaux mi estos laboranta la tutan tagon|%'; -- (13)

-- PP 7.4 n° 20 : Li certe malhelpos min, kiam mi ankoraŭ-ne-parolis-sed-poste-parolos (= kiam mi est[as/is/
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|li certe malhelpos min kiam mi estos parolonta') WHERE id = 1257 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|li certe malhelpos min kiam mi estos parolonta|%'; -- (11)

-- PP 7.4 n° 21 : Li ricevos ovacion, kiam li finos sian paroladon (est[as/is/os] parol[ant/int/ont]a).
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|li ricevos ovacion kiam li estos parolinta') WHERE id = 1258 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|li ricevos ovacion kiam li estos parolinta|%'; -- (10)

-- PP 7.4 n° 22 : Kiam mi jam pli frue solvis (est[as/is/os] solv[ant/int/ont]a) la misteron, la kulpulon mi
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|kiam mi estis solvinta la misteron la kulpulon mi facile trovis') WHERE id = 1259 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|kiam mi estis solvinta la misteron la kulpulon mi facile trovis|%'; -- (9)

-- PP 7.4 n° 23 : Mi retrovis lin, ĝuste kiam oni ankoraŭ ne forsendis (sed poste sendos) lin (li est[as/is/
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|mi retrovis lin gxuste kiam li estis forsendota') WHERE id = 1260 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|mi retrovis lin gxuste kiam li estis forsendota|%'; -- (6)

-- PP 7.4 n° 24 : Li ĉiam esploras la vagonon, kiam oni ankoraŭ ne plenigis (sed poste plenigos) ĝin (ĝi est
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|li cxiam esploras la vagonon kiam gxi estas plenigota') WHERE id = 1261 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|li cxiam esploras la vagonon kiam gxi estas plenigota|%'; -- (9)

-- PP 7.4 n° 25 : Kiam mi alvenos, la tagordon oni ankoraŭ-ne-difinis-sed-poste-difinos (la tagordo est[as/i
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|kiam mi alvenos la tagordo estos difinota') WHERE id = 1262 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|kiam mi alvenos la tagordo estos difinota|%'; -- (5)
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|kiam mi alvenos la tagordon estos difinota') WHERE id = 1262 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|kiam mi alvenos la tagordon estos difinota|%'; -- (5)

-- PP 7.4 n° 26 : Medikamenton oni ne bezonas (medikamento ne est[as/is/os] bezon[at/it/ot]a), kiam oni esta
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|medikamento ne estas bezonata kiam oni estas sana') WHERE id = 1263 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|medikamento ne estas bezonata kiam oni estas sana|%'; -- (11)

-- PP 7.4 n° 27 : Kiam ajn li aperis, oni laŭdis lian bonkorecon (lia bonkoreco est[as/is/os] laŭd[at/it/ot]
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|kiam ajn li aperis lia bonkoreco estis lauxdata') WHERE id = 1264 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|kiam ajn li aperis lia bonkoreco estis lauxdata|%'; -- (13)

-- PP 7.4 n° 28 : Kiam ajn li aperos, oni laŭdos lian bonkorecon (lia bonkoreco est[as/is/os] laŭd[at/it/ot]
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|kiam ajn li aperos lia bonkoreco estos lauxdata') WHERE id = 1265 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|kiam ajn li aperos lia bonkoreco estos lauxdata|%'; -- (12)

-- PP 7.4 n° 29 : Kiam vi ricevos mian leteron, oni certe jam pli frue retrovis vian monujon (via monujo cer
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|kiam vi ricevos mian leteron via monujo certe estos retrovita') WHERE id = 1266 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|kiam vi ricevos mian leteron via monujo certe estos retrovita|%'; -- (10)

-- PP 7.4 n° 30 : Dum ni serĉis lin, oni jam pli frue dronigis lin (li est[as/is/os] dronig[at/it/ot]a).
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|dum ni sercxis lin li estis dronigita') WHERE id = 1267 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|dum ni sercxis lin li estis dronigita|%'; -- (13)

-- PP 7.4 n° 31 : Kiam oni jam pli frue fermis la pordon (la pordo est[as/is/os] ferm[at/it/ot]a), la vizita
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|kiam la pordo estas fermita la vizitantoj ne povas eniri') WHERE id = 1268 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|kiam la pordo estas fermita la vizitantoj ne povas eniri|%'; -- (9)

-- PP 7.4 n° 32 : Ĝuste kiam ni alvenis, oni esploris tiun demandon (tiu demando est[as/is/os] esplor[at/it/
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|gxuste kiam ni alvenis tiu demando estis esplorata') WHERE id = 1269 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|gxuste kiam ni alvenis tiu demando estis esplorata|%'; -- (11)

-- 3. Variantes plus tolérantes, validées par Emmanuelle (synonymes, réponses courtes, autres prépositions ou points de vue)

-- CG 1.10 n° 7 : Quels gâteaux étaient secs ?
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|kiuj biskvitoj estis sekaj') WHERE id = 7 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|kiuj biskvitoj estis sekaj|%'; -- (57)

-- CG 1.10 n° 13 : Voici des biscuits. Lesquels sont bons ?
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|jen kuketoj kiuj estas bonaj') WHERE id = 13 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|jen kuketoj kiuj estas bonaj|%'; -- (26)

-- CG 1.6 n° 2 : Ton biscuit est sec.
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|via kuketo estas seka') WHERE id = 2 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|via kuketo estas seka|%'; -- (13)

-- CG 2.9 n° 10 : Le frère en bonne santé avait une petite sœur malade.
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|la sana frato havis malsanan fratineton') WHERE id = 29 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|la sana frato havis malsanan fratineton|%'; -- (25)

-- CG 2.9 n° 12 : Le bel oiseau attrapa un petit insecte.
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|la bela birdo kaptis etan insekton') WHERE id = 31 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|la bela birdo kaptis etan insekton|%'; -- (13)

-- CG 2.9 n° 14 : De l’eau froide ne lave pas (ne lavas) un petit garçon.
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|malvarma akvo ne lavas knabeton') WHERE id = 33 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|malvarma akvo ne lavas knabeton|%'; -- (16)

-- CG 3.11 n° 18 : Soixante minutes font une heure. (utiliser le verbe esti)
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|sesdek minutoj estas horo') WHERE id = 63 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|sesdek minutoj estas horo|%'; -- (56)

-- CG 3.11 n° 20 : Sept jours font une semaine.
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|sep tagoj estas semajno') WHERE id = 65 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|sep tagoj estas semajno|%'; -- (56)

-- CG 3.11 n° 19 : Seize heures font un jour ; huit heures font une nuit.
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|dek ses horoj estas tago ok horoj estas nokto') WHERE id = 64 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|dek ses horoj estas tago ok horoj estas nokto|%'; -- (31)
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|dekses horoj estas tago ok horoj estas nokto') WHERE id = 64 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|dekses horoj estas tago ok horoj estas nokto|%'; -- (22)

-- CG 3.13 n° 23 : image 2.
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|kio estas la lando la lando estas pollando') WHERE id = 68 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|kio estas la lando la lando estas pollando|%'; -- (67)
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|kio estas la cxefurbo de pollando la cxefurbo de pollando estas varsovio') WHERE id = 68 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|kio estas la cxefurbo de pollando la cxefurbo de pollando estas varsovio|%'; -- (10)

-- CG 4.7 n° 5 : Mia skribotablo (= bureau) estas * la fenestro.
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|mia skribotablo estas cxe la fenestro') WHERE id = 75 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|mia skribotablo estas cxe la fenestro|%'; -- (21)

-- CG 4.7 n° 7 : Estas paperoj * la muro.
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|estas paperoj sur la muro') WHERE id = 77 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|estas paperoj sur la muro|%'; -- (23)

-- CG 4.11 n° 15 : Fatima deziras aĉeti novajn ŝuojn al la infanoj.
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|fatima aimerait acheter de nouvelles chaussures aux enfants') WHERE id = 83 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|fatima aimerait acheter de nouvelles chaussures aux enfants|%'; -- (11)

-- CG 4.11 n° 18 : La infanoj kuras al la lernejo, kaj en la lernejo ili skribos la novan lecionon.
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|les enfants courent à lécole et à lécole ils vont écrire la nouvelle leçon') WHERE id = 85 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|les enfants courent à lécole et à lécole ils vont écrire la nouvelle leçon|%'; -- (10)

-- CG 4.12 n° 25 : Est-ce que les enfants vont danser dans l’école ?
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|cxu la infanoj iras danci en la lernejo') WHERE id = 90 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|cxu la infanoj iras danci en la lernejo|%'; -- (70)
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|cxu la infanoj iros danci en la lernejo') WHERE id = 90 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|cxu la infanoj iros danci en la lernejo|%'; -- (30)

-- CG 4.12 n° 27 : Est-ce que le père lavera les petites tasses dans la maison de Fatima ?
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|cxu la patro lavos la tasetojn en la domo de fatima') WHERE id = 92 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|cxu la patro lavos la tasetojn en la domo de fatima|%'; -- (18)

-- CG 4.12 n° 28 : Est-ce que la nouvelle institutrice a oublié le livre dans une pièce de l’école ?
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|cxu la nova instruistino forgesis la libron en lerneja cxambro') WHERE id = 93 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|cxu la nova instruistino forgesis la libron en lerneja cxambro|%'; -- (11)

-- CG 4.12 n° 32 : Ta mère vient-elle d’Europe ?
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|cxu via patrino estas el euxropo') WHERE id = 97 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|cxu via patrino estas el euxropo|%'; -- (20)
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|cxu via patrino estas de euxropo') WHERE id = 97 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|cxu via patrino estas de euxropo|%'; -- (14)

-- CG 5.6 n° 1 : {Simeono kaj Fatima} estas miaj amikoj.
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|kiuj estas viaj amikoj') WHERE id = 103 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|kiuj estas viaj amikoj|%'; -- (47)

-- CG 5.6 n° 10 : Mi trinkas teon kun {Fatima}.
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|kun kiu vi trinkas teon') WHERE id = 112 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|kun kiu vi trinkas teon|%'; -- (66)

-- CG 5.6 n° 9 : Esperanto estas {tre} facila.
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|kiel esperanto estas facila') WHERE id = 111 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|kiel esperanto estas facila|%'; -- (79)

-- CG 6.4 n° 7 : nenies
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|de personne à personne') WHERE id = 133 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|de personne à personne|%'; -- (11)
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|à personne') WHERE id = 133 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|à personne|%'; -- (91)

-- CG 6.7 n° 14 : Ŝi portas ĉapelon * la dorso.
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|sxi portas cxapelon sur la dorso') WHERE id = 140 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|sxi portas cxapelon sur la dorso|%'; -- (86)

-- CG 6.7 n° 15 : La floroj kreskas (kreski=pousser) * la rokoj.
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|la floroj kreskas sur la rokoj') WHERE id = 141 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|la floroj kreskas sur la rokoj|%'; -- (28)

-- CG 6.7 n° 13 : Li grimpis * la pinto (=le sommet).
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|li grimpis sur la pinto') WHERE id = 139 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|li grimpis sur la pinto|%'; -- (26)

-- CG 6.10 n° 17 : En kia klubo vi estas membro?
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|mi estas membro en junulara esperantista klubo') WHERE id = 143 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|mi estas membro en junulara esperantista klubo|%'; -- (10)
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|mi estas membro en la junulara esperantista klubo') WHERE id = 143 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|mi estas membro en la junulara esperantista klubo|%'; -- (25)

-- CG 6.12 n° 31 : arkto - blankaj - en - estas - ursoj.
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|estas blankaj ursoj en la arkto') WHERE id = 157 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|estas blankaj ursoj en la arkto|%'; -- (77)
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|en arkto estas la blankaj ursoj') WHERE id = 157 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|en arkto estas la blankaj ursoj|%'; -- (22)
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|estas ursoj blankaj en la arkto') WHERE id = 157 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|estas ursoj blankaj en la arkto|%'; -- (11)
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|la blankaj ursoj estas en arkto') WHERE id = 157 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|la blankaj ursoj estas en arkto|%'; -- (70)
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|blankaj ursoj estas en la arkto') WHERE id = 157 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|blankaj ursoj estas en la arkto|%'; -- (25)
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|en la arkto estas blankaj ursoj') WHERE id = 157 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|en la arkto estas blankaj ursoj|%'; -- (21)
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|la blankaj ursoj estas en la arkto') WHERE id = 157 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|la blankaj ursoj estas en la arkto|%'; -- (11)
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|la ursoj blankaj estas en arkto') WHERE id = 157 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|la ursoj blankaj estas en arkto|%'; -- (17)

-- CG 7.8 n° 26 : image 4.
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|estas du antaux la sesa vespere') WHERE id = 188 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|estas du antaux la sesa vespere|%'; -- (67)

-- CG 6.10 n° 19 : Kiajn amikojn vi vizitis en Montrealo?
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|esperantistajn amikojn') WHERE id = 145 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|esperantistajn amikojn|%'; -- (18)

-- CG 6.10 n° 20 : Kion vi manĝis por la tagmanĝo?
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|sandvicxojn') WHERE id = 146 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|sandvicxojn|%'; -- (12)

-- CG 6.10 n° 22 : Kio plaĉis al via frato?
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|la ursoj') WHERE id = 148 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|la ursoj|%'; -- (17)
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|la ursoj apud la enirejo') WHERE id = 148 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|la ursoj apud la enirejo|%'; -- (17)

-- CG 6.10 n° 25 : Per kio vi veturis al la Zoologia Ĝardeno?
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|per auxto') WHERE id = 151 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|per auxto|%'; -- (35)

-- CG 6.10 n° 26 : Kiuj bestoj estis por vi tre interesaj?
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|la grandaj simioj') WHERE id = 152 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|la grandaj simioj|%'; -- (32)

-- CG 6.10 n° 21 : Kion vi vizitis en Granby?
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|la zoo') WHERE id = 147 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|la zoo|%'; -- (12)

-- CG 8.5 n° 12 : Je désire qu’elle vienne à 8h mais je crois qu’elle ne viendra pas avant 9h.
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|mi volas ke sxi venu je la oka sed mi kredas ke sxi ne venos antaux la nauxa') WHERE id = 200 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|mi volas ke sxi venu je la oka sed mi kredas ke sxi ne venos antaux la nauxa|%'; -- (16)

-- CG 8.5 n° 15 : Que faire ? (Qu’est-ce que je «dois-faire» ?)
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|kion fari') WHERE id = 203 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|kion fari|%'; -- (51)
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|kion mi farendas') WHERE id = 203 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|kion mi farendas|%'; -- (22)

-- GR 1.4 n° 8 : { -a -as en est- li -o restoraci- student- }
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|li estas en restoracio studenta') WHERE id = 289 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|li estas en restoracio studenta|%'; -- (19)

-- GR 1.4 n° 9 : { -a jen labor- nov- -o }
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|jen laboro nova') WHERE id = 290 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|jen laboro nova|%'; -- (12)

-- GR 1.4 n° 10 : { -a -as nenio nun okaz- special- }
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|nun nenio okazas speciala') WHERE id = 291 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|nun nenio okazas speciala|%'; -- (42)
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|nenio nun okazas speciala') WHERE id = 291 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|nenio nun okazas speciala|%'; -- (10)
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|nenio okazas speciala nun') WHERE id = 291 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|nenio okazas speciala nun|%'; -- (18)

-- GR 17.4 n° 12 : Mi scias certe * tio, ke mi vidis ĝin * miaj propraj okuloj.
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|mi scias certe pri tio ke mi vidis gxin per miaj propraj okuloj') WHERE id = 599 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|mi scias certe pri tio ke mi vidis gxin per miaj propraj okuloj|%'; -- (42)

-- vérification
SELECT id, normaligita FROM ekzerceroj WHERE id IN (25, 967, 975, 1049, 10, 56, 67, 68, 69, 70, 80, 89, 95, 107, 108, 113, 126, 127, 128, 129, 130, 134, 143, 144, 145, 146, 147, 148, 149, 150, 151, 152, 153, 154, 157, 160, 161, 174, 181, 183, 184, 185, 187, 188, 199, 200, 204, 216, 282, 283, 285, 286, 303, 315, 324, 325, 327, 402, 403, 404, 406, 407, 408, 410, 411, 412, 417, 858, 876, 881, 1075, 1250, 1251, 1252, 1253, 1254, 1255, 1256, 1257, 1258, 1259, 1260, 1261, 1262, 1263, 1264, 1265, 1266, 1267, 1268, 1269, 7, 13, 2, 29, 31, 33, 63, 65, 64, 75, 77, 83, 85, 90, 92, 93, 97, 103, 112, 111, 133, 140, 141, 139, 203, 289, 290, 291, 599) ORDER BY id;
