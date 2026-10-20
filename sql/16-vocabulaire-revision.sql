-- Révision du vocabulaire : réponses justes refusées et questions ambiguës.
-- Relevé sur les réponses d'avril à octobre 2026 (mots au taux d'erreur le plus élevé) :
-- l'élève donnait un synonyme correct, ou la traduction française appelait un autre mot.
-- La première variante de eo reste celle affichée dans la correction et dans le lexique.
--
-- Les mises à jour portent sur l'id ET l'ancienne valeur : le script vaut pour la prod
-- (mêmes id) et peut être rejoué sans risque.
-- vortoj est en MyISAM (pas de transaction) : en prod, sauvegarder d'abord la table :
--   mysqldump -u <login> -p <base> vortoj > ~/avant-vocabulaire-revision-$(date +%F).sql
SET NAMES utf8mb4;

-- « considérer » appelait konsideri, qui est accepté.
UPDATE vortoj SET fr = 'réfléchir à, envisager', eo = 'pripensi|konsideri'
  WHERE id = 912 AND eo = 'pripensi';
-- « parler à » appelait alparoli, accepté comme sin turni al.
UPDATE vortoj SET fr = 's''adresser à, demander à, contacter', eo = 'turni sin al|sin turni al|alparoli'
  WHERE id = 886 AND eo = 'turni sin al';
-- « pratique » appelait praktika, qui n'a pas le même sens.
UPDATE vortoj SET fr = 'commode, adéquat'
  WHERE id = 876 AND fr = 'pratique, adéquat';
-- « naturellement » en premier appelait nature.
UPDATE vortoj SET fr = 'bien entendu, bien sûr, naturellement'
  WHERE id = 589 AND fr = 'naturellement, bien entendu';
-- « marcher » appelait marŝi.
UPDATE vortoj SET fr = 'fonctionner, marcher (pour un appareil)'
  WHERE id = 864 AND fr = 'fonctionner, marcher';
-- Sans trait d'union, sepdek unua peut se lire « les soixante-dix premiers » : on le refuse, mais on prévient.
UPDATE vortoj SET fr = 'soixante et onzième, 71e (avec un trait d''union)'
  WHERE id = 142 AND fr = 'soixante et onzième, 71e';
-- realo et kiom eble plej sont corrects.
UPDATE vortoj SET eo = 'realaĵo|realeco|realo'
  WHERE id = 286 AND eo = 'realaĵo|realeco';
UPDATE vortoj SET eo = 'kiel eble plej|kiom eble plej'
  WHERE id = 866 AND eo = 'kiel eble plej';
-- Braziljo (Brasilia) est confondu avec Brazilo (le Brésil) et sert peu : il n'est plus proposé aux
-- nouveaux élèves (lecionero_id = 0), ceux qui le révisent déjà le gardent.
UPDATE vortoj SET lecionero_id = 0
  WHERE id = 427 AND eo = 'Braziljo';
