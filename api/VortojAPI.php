<?php
// VortojAPI.php - lexique d'un cours, avec le niveau de l'élève sur chaque mot (#391).
// Le niveau vient de personoj_vortoj.nombrilo (révision du vocabulaire, memoriVortojn.php) :
// 1 au premier passage et après chaque erreur, +1 à chaque bonne réponse.
// Mêmes catégories que le graphique de memoriVortojn.php (statMotsParForce).

class VortojAPI {
    const NIVELOJ = array(
        "nevidita" => "Pas encore vus",
        "lernenda" => "À apprendre",
        "lernata"  => "En cours",
        "konata"   => "Bien connus",
    );

    private $bdd;

    public function __construct(PDO $bdd) {
        $this->bdd = $bdd;
    }

    // Niveau d'un mot d'après son compteur (null : pas encore dans la révision de l'élève).
    public static function nivelo($nombrilo): string {
        if ($nombrilo === null) {
            return "nevidita";
        }
        if ((int)$nombrilo <= 1) {
            return "lernenda";
        }
        return (int)$nombrilo < 5 ? "lernata" : "konata";
    }

    // Mots du cours, triés par ordre alphabétique : eo, fr, numero (leçon), ordo (section), nivelo.
    // $prefikso filtre sur le début du mot espéranto ou français, $nivelo sur le niveau (clé de NIVELOJ).
    public function listo(string $kurso, int $persono_id, string $prefikso = "", string $nivelo = ""): array {
        $demando = "SELECT v.eo, v.fr, l.numero, le.ordo, pv.nombrilo
            FROM vortoj v
            JOIN lecioneroj le ON le.id = v.lecionero_id
            JOIN lecionoj l ON l.id = le.leciono_id
            LEFT JOIN personoj_vortoj pv ON pv.vorto_id = v.id AND pv.persono_id = ?
            WHERE l.kurso = ?";
        $parametroj = array($persono_id, $kurso);
        if ($prefikso !== "") {
            $demando .= " AND (v.eo LIKE ? OR v.fr LIKE ?)";
            $sxablono = addcslashes($prefikso, "%_\\") . "%";
            $parametroj[] = $sxablono;
            $parametroj[] = $sxablono;
        }
        $demando .= " ORDER BY v.eo";
        $rezulto = $this->bdd->prepare($demando);
        $rezulto->execute($parametroj);
        $vortoj = array();
        foreach ($rezulto->fetchAll(PDO::FETCH_ASSOC) as $vico) {
            $vico["nivelo"] = self::nivelo($vico["nombrilo"]);
            unset($vico["nombrilo"]);
            if ($nivelo === "" || $vico["nivelo"] === $nivelo) {
                $vortoj[] = $vico;
            }
        }
        return $vortoj;
    }
}
