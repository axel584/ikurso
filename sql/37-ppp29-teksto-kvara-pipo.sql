-- Texte « La kvara pipo » (tekstoj.id = 'ppp29', Paŝoj al plena posedo 29) : mêmes coquilles que dans eo/ppp/pasxo29.php,
-- vérifiées sur l'édition papier (enmeditigis → enmeditiĝis, ad → aŭ), et entrées du glossaire du paragraphe concerné
-- (« enmeditigis » était traduit d'après la coquille, « ad » comme le suffixe -ad-).
-- Le contenu est du JSON échappé (ĝ = ĝ, ŭ = ŭ, é = é).
-- Ne s'applique que si la coquille est encore présente ; peut être rejoué sans risque.
SET NAMES utf8mb4;

UPDATE tekstoj SET enhavo = REPLACE(REPLACE(REPLACE(REPLACE(enhavo,
    'Iu el la du enmeditigis kaj', 'Iu el la du enmediti\\u011dis kaj'),
    'Jeanne, ad Peter', 'Jeanne, a\\u016d Peter'),
    '"enmeditigis": "s''interposer, mettre au milieu"', '"enmediti\\u011dis": "se plonger dans ses pens\\u00e9es"'),
    '{"ad": "-age, -ation", ', '{"a\\u016d": "ou", ')
  WHERE id = 'ppp29' AND enhavo LIKE BINARY '%Iu el la du enmeditigis kaj%';

-- Vérification
SELECT id, enhavo LIKE BINARY '%enmeditigis%' AS restas_enmeditigis, enhavo LIKE BINARY '%ad Peter%' AS restas_ad
  FROM tekstoj WHERE id = 'ppp29';
