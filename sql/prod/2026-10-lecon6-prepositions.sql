-- Mise en prod de la correction des réponses acceptées en leçon 6 (CG 6.7, prépositions avec images), issue #965.
-- Reprend sql/11-lecon6-prepositions.sql : la question 12 n'accepte plus ĉe, la question 14 n'accepte plus malantaŭ.
--
-- Aucun fichier PHP à déployer : seule la base change, le script peut être joué à tout moment.
-- La table ekzerceroj est en MyISAM (pas de transaction) : faire d'abord une sauvegarde, qui permet
-- de revenir en arrière en la rejouant :
--   mysqldump -u <login> -p <base> ekzerceroj > ~/avant-lecon6-prepositions-$(date +%F).sql
-- puis :
--   mysql -u <login> -p <base> < 2026-10-lecon6-prepositions.sql
--
-- Le script s'arrête à la première erreur et peut être rejoué sans risque.
-- Les réponses déjà enregistrées gardent leur note (gxusta n'est pas recalculé).
SET NAMES utf8mb4;

-- 0. Contrôle : les questions 138 et 140 doivent être les phrases du chat et du chapeau.
-- Sinon la sous-requête renvoie 2 lignes et le script s'arrête.
-- (pas de lettre accentuée dans les LIKE : le ĉ de la question 140 est stocké en forme décomposée)
SELECT IF((SELECT count(*) FROM ekzerceroj
           WHERE (id = 138 AND kodo = 'ekz06_12' AND demando LIKE 'La kato estas%la pordo.')
              OR (id = 140 AND kodo = 'ekz06_14' AND demando LIKE '%portas %apelon%la dorso.')) = 2,
          'contrôle OK', (SELECT 1 UNION SELECT 2)) AS controle;

UPDATE ekzerceroj SET normaligita = 'la kato estas malantaux la pordo|malantaux'
WHERE id = 138 AND kodo = 'ekz06_12';

UPDATE ekzerceroj SET normaligita = 'sxi portas cxapelon cxe la dorso|cxe'
WHERE id = 140 AND kodo = 'ekz06_14';

-- Résumé attendu : une seule préposition acceptée par question.
SELECT id, kodo, normaligita FROM ekzerceroj WHERE id IN (138, 140);
