-- #1117 : cours élémentaire, 88 mots fréquents de la méthode de Zagreb (leçons 1 à 10 d'Esperanto 12) que les élèves
-- voient déjà dans les pages ou les exercices, mais qui n'étaient pas dans le vocabulaire à réviser. Chaque mot est
-- rattaché à la première page où il apparaît en espéranto (forme simple, ou dérivée quand le mot simple n'apparaît pas :
-- kuiristo, relegi, mallongaj, subtenis, interŝanĝi…). Les pages ne changent pas. Script rejouable.
SET NAMES utf8mb4;
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'hotelo', 'hôtel', 'nom', 57 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'hotelo' AND lecionero_id = 57); -- 6.7
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'labori', 'travailler', 'verbe', 271 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'labori' AND lecionero_id = 271); -- 4.8
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'li', 'il', 'pronom', 4 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'li' AND lecionero_id = 4); -- 1.4
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'ŝi', 'elle', 'pronom', 4 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'ŝi' AND lecionero_id = 4); -- 1.4
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'ĝi', 'il, elle (chose, animal)', 'pronom', 4 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'ĝi' AND lecionero_id = 4); -- 1.4
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'ili', 'ils, elles', 'pronom', 4 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'ili' AND lecionero_id = 4); -- 1.4
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'jes', 'oui', 'adv', 32 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'jes' AND lecionero_id = 32); -- 4.1
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'ĉu', 'est-ce que (question fermée)', 'adv', 32 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'ĉu' AND lecionero_id = 32); -- 4.1
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'hejmo', 'foyer, maison (chez soi)', 'nom', 76 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'hejmo' AND lecionero_id = 76); -- 8.5
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'ke', 'que (conjonction)', 'conjonction', 74 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'ke' AND lecionero_id = 74); -- 8.1
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'kia', 'quel, de quelle sorte', 'pronom', 44 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'kia' AND lecionero_id = 44); -- 5.2
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'kuiri', 'cuisiner', 'verbe', 69 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'kuiri' AND lecionero_id = 69); -- 7.2
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'legi', 'lire', 'verbe', 68 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'legi' AND lecionero_id = 68); -- 7.1
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'sed', 'mais', 'conjonction', 32 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'sed' AND lecionero_id = 32); -- 4.1
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'diri', 'dire', 'verbe', 254 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'diri' AND lecionero_id = 254); -- 1.11
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'pri', 'au sujet de, sur, concernant', 'préposition', 55 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'pri' AND lecionero_id = 55); -- 6.6
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'se', 'si (condition)', 'conjonction', 74 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'se' AND lecionero_id = 74); -- 8.1
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'alia', 'autre', 'adj', 43 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'alia' AND lecionero_id = 43); -- 5.1
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'kompreni', 'comprendre', 'verbe', 80 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'kompreni' AND lecionero_id = 80); -- 8.10
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'longa', 'long', 'adj', 461 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'longa' AND lecionero_id = 461); -- 10.2
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'per', 'au moyen de, avec, par', 'préposition', 55 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'per' AND lecionero_id = 55); -- 6.6
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'post', 'après', 'préposition', 55 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'post' AND lecionero_id = 55); -- 6.6
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'riĉa', 'riche', 'adj', 69 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'riĉa' AND lecionero_id = 69); -- 7.2
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'strato', 'rue', 'nom', 64 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'strato' AND lecionero_id = 64); -- 6.15
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'tra', 'à travers, par', 'préposition', 55 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'tra' AND lecionero_id = 55); -- 6.6
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'aŭ', 'ou, ou bien', 'conjonction', 72 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'aŭ' AND lecionero_id = 72); -- 7.7
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'sen', 'sans', 'préposition', 55 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'sen' AND lecionero_id = 55); -- 6.6
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'devi', 'devoir', 'verbe', 76 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'devi' AND lecionero_id = 76); -- 8.5
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'kiam', 'quand', 'adv', 13 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'kiam' AND lecionero_id = 13); -- 2.7
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'ricevi', 'recevoir', 'verbe', 474 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'ricevi' AND lecionero_id = 474); -- 9.6
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'vera', 'vrai', 'adj', 80 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'vera' AND lecionero_id = 80); -- 8.10
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'aŭdi', 'entendre', 'verbe', 460 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'aŭdi' AND lecionero_id = 460); -- 10.1
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'for', 'loin, au loin (foriri : partir)', 'adv', 79 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'for' AND lecionero_id = 79); -- 8.9
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'inter', 'entre, parmi', 'préposition', 55 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'inter' AND lecionero_id = 55); -- 6.6
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'kien', 'où (avec mouvement)', 'adv', 44 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'kien' AND lecionero_id = 44); -- 5.2
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'meti', 'mettre', 'verbe', 82 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'meti' AND lecionero_id = 82); -- 9.1
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'nacio', 'nation', 'nom', 272 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'nacio' AND lecionero_id = 272); -- 4.9
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'piedo', 'pied', 'nom', 463 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'piedo' AND lecionero_id = 463); -- 10.4
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'preni', 'prendre', 'verbe', 472 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'preni' AND lecionero_id = 472); -- 8.2
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'sia', 'son, sa, ses (à soi)', 'pronom', 78 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'sia' AND lecionero_id = 78); -- 8.7
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'sola', 'seul', 'adj', 471 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'sola' AND lecionero_id = 471); -- 7.5
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'ĉe', 'chez, à, auprès de', 'préposition', 55 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'ĉe' AND lecionero_id = 55); -- 6.6
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'aŭto', 'voiture', 'nom', 56 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'aŭto' AND lecionero_id = 56); -- 6.8
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'dum', 'pendant, durant', 'préposition', 55 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'dum' AND lecionero_id = 55); -- 6.6
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'ĉar', 'parce que, car', 'conjonction', 80 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'ĉar' AND lecionero_id = 80); -- 8.10
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'ĉi', 'proximité (tiu ĉi : celui-ci, ĉi tie : ici)', 'adv', 86 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'ĉi' AND lecionero_id = 86); -- 9.7
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'aŭskulti', 'écouter', 'verbe', 461 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'aŭskulti' AND lecionero_id = 461); -- 10.2
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'monato', 'mois', 'nom', 271 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'monato' AND lecionero_id = 271); -- 4.8
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'tempo', 'temps', 'nom', 464 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'tempo' AND lecionero_id = 464); -- 10.5
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'doktoro', 'docteur', 'nom', 64 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'doktoro' AND lecionero_id = 64); -- 6.15
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'por', 'pour', 'préposition', 55 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'por' AND lecionero_id = 55); -- 6.6
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'resti', 'rester', 'verbe', 10 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'resti' AND lecionero_id = 10); -- 2.3
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'ĉio', 'tout', 'pronom', 44 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'ĉio' AND lecionero_id = 44); -- 5.2
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'bezoni', 'avoir besoin de', 'verbe', 461 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'bezoni' AND lecionero_id = 461); -- 10.2
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'fojo', 'fois', 'nom', 82 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'fojo' AND lecionero_id = 82); -- 9.1
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'pensi', 'penser', 'verbe', 80 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'pensi' AND lecionero_id = 80); -- 8.10
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'tuta', 'tout, entier', 'adj', 80 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'tuta' AND lecionero_id = 80); -- 8.10
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'zorgi', 's''occuper de, prendre soin de', 'verbe', 64 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'zorgi' AND lecionero_id = 64); -- 6.15
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'krii', 'crier', 'verbe', 68 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'krii' AND lecionero_id = 68); -- 7.1
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'ludi', 'jouer', 'verbe', 471 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'ludi' AND lecionero_id = 471); -- 7.5
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'noto', 'note', 'nom', 461 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'noto' AND lecionero_id = 461); -- 10.2
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'tamen', 'cependant, pourtant', 'adv', 472 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'tamen' AND lecionero_id = 472); -- 8.2
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'tiom', 'autant, tant (de)', 'adv', 274 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'tiom' AND lecionero_id = 274); -- 3.12
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'aperi', 'apparaître', 'verbe', 272 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'aperi' AND lecionero_id = 272); -- 4.9
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'kelkaj', 'quelques', 'adj', 80 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'kelkaj' AND lecionero_id = 80); -- 8.10
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'pro', 'à cause de', 'préposition', 55 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'pro' AND lecionero_id = 55); -- 6.6
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'teni', 'tenir', 'verbe', 474 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'teni' AND lecionero_id = 474); -- 9.6
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'feliĉa', 'heureux', 'adj', 254 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'feliĉa' AND lecionero_id = 254); -- 1.11
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'diversa', 'divers, différent', 'adj', 80 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'diversa' AND lecionero_id = 80); -- 8.10
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'ideo', 'idée', 'nom', 80 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'ideo' AND lecionero_id = 80); -- 8.10
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'informi', 'informer', 'verbe', 85 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'informi' AND lecionero_id = 85); -- 9.5
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'mondo', 'monde', 'nom', 80 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'mondo' AND lecionero_id = 80); -- 8.10
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'rakonti', 'raconter', 'verbe', 462 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'rakonti' AND lecionero_id = 462); -- 10.3
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'ŝajni', 'sembler', 'verbe', 10 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'ŝajni' AND lecionero_id = 10); -- 2.3
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'daŭri', 'durer', 'verbe', 461 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'daŭri' AND lecionero_id = 461); -- 10.2
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'ia', 'une sorte de, quelque', 'pronom', 44 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'ia' AND lecionero_id = 44); -- 5.2
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'io', 'quelque chose', 'pronom', 44 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'io' AND lecionero_id = 44); -- 5.2
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'naski', 'donner naissance à', 'verbe', 64 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'naski' AND lecionero_id = 64); -- 6.15
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'opinii', 'penser, être d''avis', 'verbe', 472 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'opinii' AND lecionero_id = 472); -- 8.2
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'parto', 'partie', 'nom', 461 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'parto' AND lecionero_id = 461); -- 10.2
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'pasi', 'passer', 'verbe', 79 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'pasi' AND lecionero_id = 79); -- 8.9
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'proponi', 'proposer', 'verbe', 462 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'proponi' AND lecionero_id = 462); -- 10.3
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'silento', 'silence', 'nom', 79 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'silento' AND lecionero_id = 79); -- 8.9
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'telefono', 'téléphone', 'nom', 463 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'telefono' AND lecionero_id = 463); -- 10.4
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'tro', 'trop', 'adv', 221 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'tro' AND lecionero_id = 221); -- 2.12
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'ĵeti', 'jeter', 'verbe', 68 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'ĵeti' AND lecionero_id = 68); -- 7.1
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'ŝanĝi', 'changer', 'verbe', 43 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'ŝanĝi' AND lecionero_id = 43); -- 5.1
INSERT INTO vortoj (eo, fr, tipo, lecionero_id) SELECT 'simpla', 'simple', 'adj', 80 FROM DUAL
  WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'simpla' AND lecionero_id = 80); -- 8.10
