-- Révision du vocabulaire : remarques de Jean-Luc (mai 2021, #994).
-- Synonymes justes refusés : ils sont acceptés. Traductions qui appelaient un autre mot : le français est précisé
-- (comme dans les leçons, par exemple « envoi (chose envoyée) » en leçon 7).
-- La première variante de eo reste celle affichée dans la correction et dans le lexique.
--
-- Les mises à jour portent sur l'id ET l'ancienne valeur : le script vaut pour la prod
-- (mêmes id) et peut être rejoué sans risque.
-- vortoj est en MyISAM (pas de transaction) : en prod, sauvegarder d'abord la table :
--   mysqldump -u <login> -p <base> vortoj > ~/avant-vocabulaire-994-$(date +%F).sql
SET NAMES utf8mb4;

-- « petit » : eta est accepté, comme dans les deux autres entrées (331, 660).
UPDATE vortoj SET eo = 'malgranda|eta'
  WHERE id IN (1410, 1411) AND eo = 'malgranda';
-- « hors de » : ekster est accepté, comme dans l'entrée 164.
UPDATE vortoj SET eo = 'el|ekster'
  WHERE id = 762 AND eo = 'el';
-- « sans arrêt » : senĉese et senhalte sont acceptés.
UPDATE vortoj SET eo = 'ade|senĉese|senhalte'
  WHERE id = 280 AND eo = 'ade';
-- « se sauver » : fuĝi est accepté.
UPDATE vortoj SET eo = 'forkuri|fuĝi'
  WHERE id = 392 AND eo = 'forkuri';
-- « correct, exact » : korekta et ekzakta sont acceptés.
UPDATE vortoj SET eo = 'ĝusta|prava|korekta|ekzakta'
  WHERE id = 722 AND eo = 'ĝusta|prava';
-- « chant » appelait kanto : c'est le mot en -ado de la leçon 7.
UPDATE vortoj SET fr = 'chant (action de chanter)'
  WHERE id = 279 AND fr = 'chant';
-- « envoi » appelait sendo : c'est le mot en -aĵo de la leçon 7.
UPDATE vortoj SET fr = 'envoi (chose envoyée)'
  WHERE id = 282 AND fr = 'envoi';
-- « les membres » appelait membroj : c'est le mot en -aro de la leçon 7.
UPDATE vortoj SET fr = 'l''ensemble des membres (d''une association)'
  WHERE id = 295 AND fr = 'les membres';
-- « manifestation » appelait manifestacio (manifestation de rue) : aranĝo est un événement organisé.
UPDATE vortoj SET fr = 'manifestation (événement organisé)'
  WHERE id = 435 AND fr = 'manifestation';
-- « secret » appelait sekreta, qui a sa propre entrée (638).
UPDATE vortoj SET fr = 'crypté, chiffré, volontairement inintelligible'
  WHERE id = 623 AND fr = 'secret, volontairement inintelligible';
