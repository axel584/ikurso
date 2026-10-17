-- Leçon 7 du cours élémentaire (CG), exercices 1 et 2 : les mots en espéranto des questions
-- sont affichés en bleu (<span class="eo">), comme dans les pages de leçon, au lieu d'être
-- entre guillemets « » ou " " (remarque d'Emmanuelle sur l'incohérence des guillemets).
-- À jouer après 05-lecon7-exercices.sql. Peut être rejoué sans risque.
SET NAMES utf8mb4;

UPDATE ekzerceroj SET demando = '<span class="eo">edzino</span> (<span class="eo">edzo</span> = époux)&nbsp;:' WHERE ekzerco_id = 28 AND kodo = 'ekz07_35';
UPDATE ekzerceroj SET demando = '<span class="eo">edziĝi</span> (<span class="eo">edzo</span> = époux)&nbsp;:' WHERE ekzerco_id = 28 AND kodo = 'ekz07_36';
UPDATE ekzerceroj SET demando = '<span class="eo">geedzoj</span> (<span class="eo">edzo</span> = époux)&nbsp;:' WHERE ekzerco_id = 28 AND kodo = 'ekz07_37';
UPDATE ekzerceroj SET demando = '<span class="eo">reedziĝi</span> (<span class="eo">edzo</span> = époux)&nbsp;:' WHERE ekzerco_id = 28 AND kodo = 'ekz07_38';
UPDATE ekzerceroj SET demando = '<span class="eo">virino</span> (<span class="eo">viro</span> = homme)&nbsp;:' WHERE ekzerco_id = 28 AND kodo = 'ekz07_39';
UPDATE ekzerceroj SET demando = '<span class="eo">vireto</span> (<span class="eo">viro</span> = homme)&nbsp;:' WHERE ekzerco_id = 28 AND kodo = 'ekz07_40';
UPDATE ekzerceroj SET demando = '<span class="eo">vireco</span> (<span class="eo">viro</span> = homme)&nbsp;:' WHERE ekzerco_id = 28 AND kodo = 'ekz07_41';
UPDATE ekzerceroj SET demando = '<span class="eo">vira</span> (<span class="eo">viro</span> = homme)&nbsp;:' WHERE ekzerco_id = 28 AND kodo = 'ekz07_42';
UPDATE ekzerceroj SET demando = '<span class="eo">bovino</span> (<span class="eo">bovo</span> = bœuf)&nbsp;:' WHERE ekzerco_id = 28 AND kodo = 'ekz07_43';
UPDATE ekzerceroj SET demando = '<span class="eo">bovaro</span> (<span class="eo">bovo</span> = bœuf)&nbsp;:' WHERE ekzerco_id = 28 AND kodo = 'ekz07_44';
UPDATE ekzerceroj SET demando = '<span class="eo">bovejo</span> (<span class="eo">bovo</span> = bœuf)&nbsp;:' WHERE ekzerco_id = 28 AND kodo = 'ekz07_45';
UPDATE ekzerceroj SET demando = '<span class="eo">bovaĵo</span> (<span class="eo">bovo</span> = bœuf)&nbsp;:' WHERE ekzerco_id = 28 AND kodo = 'ekz07_46';
UPDATE ekzerceroj SET demando = '<span class="eo">malvarma</span> (<span class="eo">varma</span> = chaud)&nbsp;:' WHERE ekzerco_id = 28 AND kodo = 'ekz07_47';
UPDATE ekzerceroj SET demando = '<span class="eo">varmeco</span> (<span class="eo">varma</span> = chaud)&nbsp;:' WHERE ekzerco_id = 28 AND kodo = 'ekz07_48';
UPDATE ekzerceroj SET demando = '<span class="eo">varmeta</span> (<span class="eo">varma</span> = chaud)&nbsp;:' WHERE ekzerco_id = 28 AND kodo = 'ekz07_49';
UPDATE ekzerceroj SET demando = '<span class="eo">malvarmiĝi</span> (<span class="eo">varma</span> = chaud)&nbsp;:' WHERE ekzerco_id = 28 AND kodo = 'ekz07_50';
UPDATE ekzerceroj SET demando = '<span class="eo">ŝiparo</span> (<span class="eo">ŝipo</span> = bateau)&nbsp;:' WHERE ekzerco_id = 28 AND kodo = 'ekz07_51';
UPDATE ekzerceroj SET demando = '<span class="eo">abelaro</span> (<span class="eo">abelo</span> = abeille)&nbsp;:' WHERE ekzerco_id = 28 AND kodo = 'ekz07_52';
UPDATE ekzerceroj SET demando = '<span class="eo">stelaro</span> (<span class="eo">stelo</span> = étoile)&nbsp;:' WHERE ekzerco_id = 28 AND kodo = 'ekz07_53';
UPDATE ekzerceroj SET demando = 'cuire à petit feu (<span class="eo">boli</span> = bouillir)&nbsp;:' WHERE ekzerco_id = 29 AND kodo = 'ekz07_06';
UPDATE ekzerceroj SET demando = 'vieillir (<span class="eo">maljuna</span> = vieux)&nbsp;:' WHERE ekzerco_id = 29 AND kodo = 'ekz07_30';
UPDATE ekzerceroj SET demando = 'un imbécile (<span class="eo">stulta</span>)&nbsp;:' WHERE ekzerco_id = 29 AND kodo = 'ekz07_08';
UPDATE ekzerceroj SET demando = 'un ordinateur (<span class="eo">komputi</span> = calculer)&nbsp;:' WHERE ekzerco_id = 29 AND kodo = 'ekz07_31';
UPDATE ekzerceroj SET demando = 'une nouvelle (<span class="eo">nova</span> = nouveau)&nbsp;:' WHERE ekzerco_id = 29 AND kodo = 'ekz07_10';
UPDATE ekzerceroj SET demando = 'réchauffer (<span class="eo">varma</span> = chaud)&nbsp;:' WHERE ekzerco_id = 29 AND kodo = 'ekz07_32';
UPDATE ekzerceroj SET demando = 'la solitude (<span class="eo">sola</span> = seul)&nbsp;:' WHERE ekzerco_id = 29 AND kodo = 'ekz07_12';
UPDATE ekzerceroj SET demando = 'une église (<span class="eo">preĝi</span> = prier)&nbsp;:' WHERE ekzerco_id = 29 AND kodo = 'ekz07_13';
UPDATE ekzerceroj SET demando = 'une Parisienne (<span class="eo">Parizo</span> = Paris)&nbsp;:' WHERE ekzerco_id = 29 AND kodo = 'ekz07_33';
UPDATE ekzerceroj SET demando = 'un dentiste (<span class="eo">dento</span> = dent)&nbsp;:' WHERE ekzerco_id = 29 AND kodo = 'ekz07_15';
UPDATE ekzerceroj SET demando = 'un vendeur (<span class="eo">vendi</span> = vendre)&nbsp;:' WHERE ekzerco_id = 29 AND kodo = 'ekz07_34';
UPDATE ekzerceroj SET demando = 'un pauvre (<span class="eo">riĉa</span> = riche)&nbsp;:' WHERE ekzerco_id = 29 AND kodo = 'ekz07_17';
UPDATE ekzerceroj SET demando = 'une salle de jeu (<span class="eo">ludi</span> = jouer)&nbsp;:' WHERE ekzerco_id = 29 AND kodo = 'ekz07_18';
