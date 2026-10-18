-- Mot komputilo (ordinateur) dans le cours élémentaire (CG), issue #1073 :
-- ajouté au vocabulaire de la leçon 4.5, puis repris en leçon 7.2 comme exemple du suffixe -IL.
-- Le contenu affiché vient de fr/cge/lec04.php et fr/cge/lec07.php ; ce script met la base en accord.
-- Peut être rejoué sans risque.
SET NAMES utf8mb4;

-- 1. Vocabulaire à réviser de la leçon 4.5.
INSERT INTO vortoj (eo, fr, tipo, lecionero_id)
  SELECT 'komputilo', 'ordinateur', 'nom', 38
  FROM DUAL WHERE NOT EXISTS (SELECT 1 FROM vortoj WHERE eo = 'komputilo' AND lecionero_id = 38);

-- 2. Copie du texte de la page 7.2 utilisée par le redaktilo.
UPDATE lecioneroj SET enhavo = REPLACE(enhavo,
    '<span class="eo">sidilo</span>&nbsp;: siège</p>',
    '<span class="eo">sidilo</span>&nbsp;: siège</p>\n\t\t\t<p class="col s12"><span class="eo">komputi</span>&nbsp;: calculer&emsp;→&emsp;<span class="eo">komputilo</span>&nbsp;: ordinateur (vu en leçon 4)</p>')
WHERE id = 69 AND enhavo NOT LIKE '%komputilo%';
