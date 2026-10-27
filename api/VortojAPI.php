<?php
// VortojAPI.php - lexique d'un cours, avec le niveau de l'élève sur chaque mot (#391).
// Le niveau vient de personoj_vortoj.nombrilo (révision du vocabulaire, memoriVortojn.php) :
// 1 au premier passage et après chaque erreur, +1 à chaque bonne réponse.
// Mêmes catégories que le graphique de memoriVortojn.php (statMotsParForce).
// personoj_vortoj.forigita : mot retiré de la révision par l'élève (#914), quel que soit son compteur.

class VortojAPI {
    const NIVELOJ = array(
        "nevidita" => "Pas encore vus",
        "lernenda" => "À apprendre",
        "lernata"  => "En cours",
        "konata"   => "Bien connus",
        "forigita" => "Retirés de la révision",
    );

    private $bdd;

    public function __construct(PDO $bdd) {
        $this->bdd = $bdd;
    }

    // Niveau d'un mot d'après son compteur (null : pas encore dans la révision de l'élève).
    public static function nivelo($nombrilo, $forigita = 0): string {
        if ((int)$forigita === 1) {
            return "forigita";
        }
        if ($nombrilo === null) {
            return "nevidita";
        }
        if ((int)$nombrilo <= 1) {
            return "lernenda";
        }
        return (int)$nombrilo < 5 ? "lernata" : "konata";
    }

    // Mots du cours, triés par ordre alphabétique : id, eo, fr, numero (leçon), ordo (section), nivelo.
    // $prefikso filtre sur le début du mot espéranto ou français, $nivelo sur le niveau (clé de NIVELOJ).
    public function listo(string $kurso, int $persono_id, string $prefikso = "", string $nivelo = ""): array {
        $demando = "SELECT v.id, v.eo, v.fr, l.numero, le.ordo, pv.nombrilo, pv.forigita
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
            $vico["nivelo"] = self::nivelo($vico["nombrilo"], $vico["forigita"]);
            unset($vico["nombrilo"], $vico["forigita"]);
            if ($nivelo === "" || $vico["nivelo"] === $nivelo) {
                $vortoj[] = $vico;
            }
        }
        return $vortoj;
    }

    // Retire un mot de la révision de l'élève, ou l'y remet (#914). Un mot pas encore vu est créé déjà retiré,
    // pour qu'aldoniNovajnVortojnEnMemorilo() ne l'ajoute plus. Renvoie false si le mot n'existe pas.
    public function forigi(int $persono_id, int $vorto_id, bool $forigita): bool {
        $demando = $this->bdd->prepare("SELECT COUNT(*) FROM vortoj WHERE id = ?");
        $demando->execute(array($vorto_id));
        if ((int)$demando->fetchColumn() === 0) {
            return false;
        }
        $demando = $this->bdd->prepare("SELECT COUNT(*) FROM personoj_vortoj WHERE persono_id = ? AND vorto_id = ?");
        $demando->execute(array($persono_id, $vorto_id));
        if ((int)$demando->fetchColumn() > 0) {
            $demando = $this->bdd->prepare("UPDATE personoj_vortoj SET forigita = ? WHERE persono_id = ? AND vorto_id = ?");
            $demando->execute(array($forigita ? 1 : 0, $persono_id, $vorto_id));
        } elseif ($forigita) {
            $demando = $this->bdd->prepare("INSERT INTO personoj_vortoj (persono_id, vorto_id, nombrilo, venontaFojo, forigita) VALUES (?, ?, 1, NOW(), 1)");
            $demando->execute(array($persono_id, $vorto_id));
        }
        return true;
    }
}
