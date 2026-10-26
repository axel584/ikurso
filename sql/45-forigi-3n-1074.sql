-- #1074 : suppression du cours prototype de 3e niveau (3N), jamais terminé ; Paŝoj al plena posedo (PP) a pris sa place.
-- Données en prod (2026-10-26) : 4 leçons, 14 sections, aucun exercice ni mot, 1 inscription (2016), 10 réponses.
-- Faire une sauvegarde de ces lignes avant (voir la procédure dans le ticket). Peut être rejoué sans risque.
DELETE r FROM respondoj r JOIN lecioneroj le ON le.id = r.lecionero_id JOIN lecionoj l ON l.id = le.leciono_id WHERE l.kurso = '3N';
DELETE pl FROM personoj_lecioneroj pl JOIN lecioneroj le ON le.id = pl.lecionero_id JOIN lecionoj l ON l.id = le.leciono_id WHERE l.kurso = '3N';
DELETE pl FROM personoj_lecionoj pl JOIN lecionoj l ON l.id = pl.leciono_id WHERE l.kurso = '3N';
DELETE t FROM takso_leciono t JOIN lecionoj l ON l.id = t.leciono_id WHERE l.kurso = '3N';
DELETE le FROM lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id WHERE l.kurso = '3N';
DELETE FROM lecionoj WHERE kurso = '3N';
DELETE FROM korektebla_kurso WHERE kurso = '3N';
DELETE FROM nuna_kurso WHERE kurso = '3N';
-- dernier cours choisi par l'élève (affiché sur sa page personnelle)
UPDATE personoj SET kurso = 'PP' WHERE kurso = '3N';
DELETE FROM kursoj WHERE kodo = '3N';
