-- #945 : CG leçon 6, exercice 4 (« Formez des phrases avec les mots suivants ») : ordres des mots justes refusés
-- par la correction automatique. Relevés dans les réponses refusées de la prod (depuis 2023) ; entre parenthèses,
-- le nombre d'élèves qui avaient donné cette réponse. Les réponses avec « ĉiu infanoj » (au lieu de ĉiuj) restent refusées.
-- Variantes ajoutées aux réponses attendues (normaligita), sous forme normalisée. Peut être rejoué sans risque.
SET NAMES utf8mb4;

-- CG 6.12 n° 27 : bestoj - en - estas - interesaj - multaj - tiu - zoo.
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|en tiu zoo estas multaj bestoj interesaj') WHERE id = 153 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|en tiu zoo estas multaj bestoj interesaj|%'; -- (8)

-- CG 6.12 n° 28 : antaŭ - ĉiu - dum - estos - infanoj - kaĝo. - la - tagmanĝo
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|antaux cxiu kagxo estos infanoj dum la tagmangxo') WHERE id = 154 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|antaux cxiu kagxo estos infanoj dum la tagmangxo|%'; -- (4)
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|estos infanoj dum la tagmangxo antaux cxiu kagxo') WHERE id = 154 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|estos infanoj dum la tagmangxo antaux cxiu kagxo|%'; -- (7)

-- CG 6.12 n° 29 : apud - ĉu - enirejo ? - estis - kaĝoj - la - multaj
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|cxu apud la enirejo estis multaj kagxoj') WHERE id = 155 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|cxu apud la enirejo estis multaj kagxoj|%'; -- (11)

-- CG 6.12 n° 31 : arkto - blankaj - en - estas - ursoj.
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|estas ursoj blankaj en arkto') WHERE id = 157 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|estas ursoj blankaj en arkto|%'; -- (7)
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|ursoj blankaj estas en arkto') WHERE id = 157 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|ursoj blankaj estas en arkto|%'; -- (5)
UPDATE ekzerceroj SET normaligita = CONCAT(normaligita, '|estas en arkto blankaj ursoj') WHERE id = 157 AND CONCAT('|', normaligita, '|') NOT LIKE BINARY '%|estas en arkto blankaj ursoj|%'; -- (4)
