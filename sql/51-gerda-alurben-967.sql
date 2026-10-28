-- #967 : Gerda leçon 10, exercice « Plenigu ĉiun truon », phrase 21 : « alurben » n'est jamais vu dans le cours
-- et seuls 10 % des élèves le trouvaient (alurbo, alurbe, alurba…). Le mot est donné en entier, il reste deux trous ;
-- la réponse attendue ne change pas.
-- Peut être rejoué sans risque.
SET NAMES utf8mb4;
UPDATE ekzerceroj
SET demando = 'Ŝi observ* lin, kaj kiam li eliras tra la pordo alurben, ŝi sekvas li*.',
    respondo = 'Ŝi observ<b>adas</b> lin, kaj kiam li eliras tra la pordo alurben, ŝi sekvas li<b>n</b>.'
WHERE id = 2391 AND kodo = 'gr10_21';
