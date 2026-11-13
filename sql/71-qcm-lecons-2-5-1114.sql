-- Cours élémentaire, leçons 2 à 5 : un petit QCM facultatif, avec indices, à la fin des pages de cours où l'on perd
-- le plus d'élèves (analyse des abandons page par page, #1114) : 2.2, 2.4, 2.7, 3.8, 4.5, 4.8, 5.2 (sous le tableau
-- des corrélatifs). Enregistrements de fr/son/vortoj en 3.8, 4.5 et 4.8. Comme sql/69 et sql/70 pour la leçon 1.
-- Script rejouable : pas de second QCM sur une page.
SET NAMES utf8mb4;

UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id
SET le.enhavo = CONCAT(le.enhavo, '
<p><b>Petit test&nbsp;:</b> vérifiez que vous avez bien compris (facultatif).</p>
##QCM:[{"question": "<span class=''eo''>La kato dormas sub la tablo.</span> Où est le chat&nbsp;?", "propositions": ["sur la table", "sous la table", "devant la table"], "indices": ["« sur » se dit sur ; sub, c’est « sous ».", "", "« devant » se dit antaŭ ; sub, c’est « sous »."], "reponse": 2}, {"question": "Comment dit-on «&nbsp;Le pain est sur la table&nbsp;»&nbsp;?", "propositions": ["La pano estas super la tablo.", "La pano estas sub la tablo.", "La pano estas sur la tablo."], "indices": ["super, c’est au-dessus, sans toucher : le pain touche la table.", "sub, c’est « sous ».", ""], "reponse": 3}, {"question": "<span class=''eo''>Estas sukero en via kafo.</span> veut dire…", "propositions": ["Il y a du sucre dans ton café.", "Le sucre est ton café.", "Ton café est sucré."], "indices": ["", "estas sans sujet en début de phrase se traduit par « il y a ».", "presque ! Mais la phrase dit « il y a du sucre » : estas sans sujet = « il y a »."], "reponse": 1}]##')
WHERE l.kurso = 'CG' AND l.numero = 2 AND le.ordo = 4 AND le.enhavo NOT LIKE '%##QCM%';

UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id
SET le.enhavo = CONCAT(le.enhavo, '
<p><b>Petit test&nbsp;:</b> vérifiez que vous avez bien compris (facultatif).</p>
##QCM:[{"question": "Comment dit-on «&nbsp;Je ne sucre pas le café&nbsp;»&nbsp;?", "propositions": ["Mi sukeras ne la kafon.", "Mi ne sukeras la kafon.", "Mi ne sukeras ne la kafon."], "indices": ["ne se place avant le verbe.", "", "ne se met une seule fois, avant le verbe."], "reponse": 2}, {"question": "<span class=''eo''>neniam</span> veut dire…", "propositions": ["rien", "personne", "jamais"], "indices": ["« rien » se dit nenio (-o : chose).", "« personne » se dit neniu (-u : individu).", ""], "reponse": 3}, {"question": "Comment dit-on «&nbsp;Je ne le vois nulle part&nbsp;»&nbsp;?", "propositions": ["Mi vidas ĝin nenie.", "Mi ne vidas ĝin nenie.", "Mi vidas ĝin neniam."], "indices": ["", "un seul mot négatif suffit : nenie veut déjà dire « nulle part ».", "neniam veut dire « jamais » ; « nulle part » se dit nenie (-e : lieu)."], "reponse": 1}]##')
WHERE l.kurso = 'CG' AND l.numero = 2 AND le.ordo = 7 AND le.enhavo NOT LIKE '%##QCM%';

UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id
SET le.enhavo = CONCAT(le.enhavo, '
<p><b>Petit test&nbsp;:</b> vérifiez que vous avez bien compris (facultatif).</p>
##QCM:[{"question": "Comment dit-on «&nbsp;une amie&nbsp;»&nbsp;?", "propositions": ["amika", "amikino", "amikina"], "indices": ["amika est un adjectif (amical) ; pour le féminin, on ajoute -in- avant le -o.", "", "un nom finit par -o : amik-in-o."], "reponse": 2}, {"question": "<span class=''eo''>fratino</span> veut dire…", "propositions": ["frère", "frères", "sœur"], "indices": ["« frère » se dit frato ; -in- donne le féminin.", "« frères » se dit fratoj ; -in- donne le féminin.", ""], "reponse": 3}, {"question": "Comment dit-on «&nbsp;les grandes femmes&nbsp;»&nbsp;?", "propositions": ["la grandaj virinoj", "la grandinaj virinoj", "la granda virinoj"], "indices": ["", "l’adjectif ne se met pas au féminin.", "l’adjectif se met au pluriel comme le nom : grandaj."], "reponse": 1}]##')
WHERE l.kurso = 'CG' AND l.numero = 2 AND le.ordo = 2 AND le.enhavo NOT LIKE '%##QCM%';

UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id
SET le.enhavo = CONCAT(le.enhavo, '
<p><b>Petit test&nbsp;:</b> vérifiez que vous avez bien compris (facultatif).</p>
##QCM:[{"question": "Écoutez et choisissez le nombre&nbsp;: <a href=''fr/son/vortoj/dudek.mp3'' class=''sm2_button''></a>", "propositions": ["12", "2", "20"], "indices": ["12 se dit dek du ; dudek, c’est 2 fois 10.", "2 se dit du ; dudek, c’est 2 fois 10.", ""], "reponse": 3}, {"question": "Écoutez et choisissez le nombre&nbsp;: <a href=''fr/son/vortoj/kvindek.mp3'' class=''sm2_button''></a>", "propositions": ["50", "15", "5"], "indices": ["", "15 se dit dek kvin ; kvindek, c’est 5 fois 10.", "5 se dit kvin ; kvindek, c’est 5 fois 10."], "reponse": 1}, {"question": "Comment s’écrit «&nbsp;300&nbsp;»&nbsp;?", "propositions": ["tri cent", "tridek", "tricent"], "indices": ["cent se colle au nombre qui le multiplie : tricent.", "tridek, c’est 30 (3 fois 10).", ""], "reponse": 3}, {"question": "Comment dit-on «&nbsp;le premier&nbsp;»&nbsp;?", "propositions": ["la unu", "la unua", "la unue"], "indices": ["les ordinaux prennent la terminaison -a des adjectifs : unua.", "", "unue veut dire « premièrement »."], "reponse": 2}]##')
WHERE l.kurso = 'CG' AND l.numero = 3 AND le.ordo = 8 AND le.enhavo NOT LIKE '%##QCM%';

UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id
SET le.enhavo = CONCAT(le.enhavo, '
<p><b>Petit test&nbsp;:</b> vérifiez que vous avez bien compris (facultatif).</p>
##QCM:[{"question": "Écoutez&nbsp;: que veut dire ce mot&nbsp;? <a href=''fr/son/vortoj/lernejo.mp3'' class=''sm2_button''></a>", "propositions": ["leçon", "école", "livre"], "indices": ["« leçon » se dit leciono.", "", "« livre » se dit libro."], "reponse": 2}, {"question": "Écoutez&nbsp;: que veut dire ce mot&nbsp;? <a href=''fr/son/vortoj/acxeti.mp3'' class=''sm2_button''></a>", "propositions": ["acheter", "goûter", "habiter"], "indices": ["", "« goûter » se dit gustumi.", "« habiter » se dit loĝi."], "reponse": 1}, {"question": "Écoutez&nbsp;: que veut dire ce mot&nbsp;? <a href=''fr/son/vortoj/sxuo.mp3'' class=''sm2_button''></a>", "propositions": ["œuf", "chocolat", "chaussure"], "indices": ["« œuf » se dit ovo.", "« chocolat » se dit ĉokolado.", ""], "reponse": 3}]##')
WHERE l.kurso = 'CG' AND l.numero = 4 AND le.ordo = 5 AND le.enhavo NOT LIKE '%##QCM%';

UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id
SET le.enhavo = CONCAT(le.enhavo, '
<p><b>Petit test&nbsp;:</b> vérifiez que vous avez bien compris (facultatif).</p>
##QCM:[{"question": "<span class=''eo''>hieraŭ</span> veut dire…", "propositions": ["demain", "hier", "aujourd’hui"], "indices": ["« demain » se dit morgaŭ.", "", "« aujourd’hui » se dit hodiaŭ."], "reponse": 2}, {"question": "Écoutez&nbsp;: quel jour est-ce&nbsp;? <a href=''fr/son/vortoj/mardo.mp3'' class=''sm2_button''></a>", "propositions": ["mardi", "mercredi", "samedi"], "indices": ["", "« mercredi » se dit merkredo.", "« samedi » se dit sabato."], "reponse": 1}, {"question": "Comment dit-on «&nbsp;Ils viendront le 10 avril&nbsp;»&nbsp;?", "propositions": ["Ili venos la deka aprilo.", "Ili venos la dek de aprilo.", "Ili venos la dekan de aprilo."], "indices": ["on dit « le dixième d’avril » (la deka de aprilo), et pour une date précise on ajoute souvent -n.", "pour la date, on emploie l’ordinal (deka = dixième), souvent avec -n : la dekan.", ""], "reponse": 3}]##')
WHERE l.kurso = 'CG' AND l.numero = 4 AND le.ordo = 8 AND le.enhavo NOT LIKE '%##QCM%';

UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id
SET le.enhavo = CONCAT(le.enhavo, '
<p><b>Petit test&nbsp;:</b> vérifiez que vous avez bien compris (facultatif).</p>
##QCM:[{"question": "<span class=''eo''>kial</span> veut dire…", "propositions": ["quand", "pourquoi", "comment"], "indices": ["« quand » se dit kiam (-am : temps) ; -al exprime la cause.", "", "« comment » se dit kiel (-el : manière) ; -al exprime la cause."], "reponse": 2}, {"question": "Comment dit-on «&nbsp;toujours&nbsp;»&nbsp;?", "propositions": ["iam", "tiam", "ĉiam"], "indices": ["iam veut dire « un jour » (i- : indéfini).", "tiam veut dire « alors » (ti- : démonstratif).", ""], "reponse": 3}, {"question": "Avec ti- (démonstratif) et -e (lieu), on obtient…", "propositions": ["tie (là)", "kie (où)", "ĉie (partout)"], "indices": ["", "kie commence par ki- (interrogatif).", "ĉie commence par ĉi- (totalité)."], "reponse": 1}]##')
WHERE l.kurso = 'CG' AND l.numero = 5 AND le.ordo = 2 AND le.enhavo NOT LIKE '%##QCM%';
