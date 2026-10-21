<?php
// ProgresoAPI.php - Progression de l'élève dans les leçons d'un cours (#910).

class ProgresoAPI {
    private $bdd;

    public function __construct(PDO $bdd) {
        $this->bdd = $bdd;
    }

    // Section où reprendre chaque leçon commencée : [numéro de leçon => ordo de la section].
    // C'est la section qui suit la plus avancée des sections finies, ou la dernière section
    // (épilogue et envoi des exercices) quand celle-ci est finie. Les leçons pas encore
    // commencées sont absentes : leur lien reste celui de la section 1.
    public function reprenSekcioj(int $persono_id, string $kurso): array {
        $demando = $this->bdd->prepare("SELECT l.numero, le.ordo, MAX(pl.persono_id IS NOT NULL) AS farita
            FROM lecionoj l
            JOIN lecioneroj le ON le.leciono_id = l.id
            LEFT JOIN personoj_lecioneroj pl ON pl.lecionero_id = le.id AND pl.persono_id = ?
            WHERE l.kurso = ?
            GROUP BY l.numero, le.ordo
            ORDER BY l.numero, le.ordo DESC");
        $demando->execute(array($persono_id, $kurso));
        // on parcourt chaque leçon depuis sa dernière section : la première section finie
        // rencontrée est la plus avancée, et la section vue juste avant est la suivante
        $sekcioj = array();
        $sekva = array();
        foreach ($demando->fetchAll(PDO::FETCH_ASSOC) as $vico) {
            $numero = (int)$vico["numero"];
            if (isset($sekcioj[$numero])) {
                continue;
            }
            if ($vico["farita"]) {
                $sekcioj[$numero] = isset($sekva[$numero]) ? $sekva[$numero] : (int)$vico["ordo"];
            } else {
                $sekva[$numero] = (int)$vico["ordo"];
            }
        }
        return $sekcioj;
    }
}
