<?php
// KontoAPI.php - Suppression de son compte (issue #1029) ou de sa progression dans un cours (issue #1027)
// par l'élève lui-même.
//
// La suppression du compte efface exactement les tables exportées par EksportoAPI : un élève qui a
// gardé son export peut ainsi être remis en base à l'identique.

require_once __DIR__ . "/EksportoAPI.php";

class KontoAPI {
    private $bdd;

    public function __construct(PDO $bdd) {
        $this->bdd = $bdd;
    }

    // Les correcteurs et administrateurs ont des élèves rattachés : leur compte se supprime par un administrateur.
    public static function rajtasForigi(array $persono): bool {
        return !in_array($persono["rajtoj"], array("K", "A"), true);
    }

    public function pasvortoGxustas(int $persono_id, string $pasvorto): bool {
        $demando = $this->bdd->prepare("SELECT pasvorto_md5 FROM personoj WHERE id = ?");
        $demando->execute(array($persono_id));
        $md5 = $demando->fetchColumn();
        return is_string($md5) && hash_equals($md5, md5($pasvorto));
    }

    public function forigi(int $persono_id): void {
        // Les tables sont en MyISAM (pas de transaction) : personoj est supprimée en dernier,
        // pour qu'une interruption laisse un compte encore visible et donc à supprimer de nouveau.
        foreach (array_reverse(EksportoAPI::TABELOJ) as $tabelo => list($kolumno)) {
            $demando = $this->bdd->prepare("DELETE FROM `$tabelo` WHERE `$kolumno` = ?");
            $demando->execute(array($persono_id));
        }
    }

    // Progression d'un élève, par table : jointure qui rattache chaque ligne (alias t) à une leçon (alias l).
    const PROGRESO = array(
        "respondoj" => "LEFT JOIN ekzerceroj e ON e.id = t.ekzercero_id
                        LEFT JOIN ekzercoj z ON z.id = e.ekzerco_id
                        JOIN lecioneroj le ON le.id = COALESCE(z.lecionero_id, t.lecionero_id)
                        JOIN lecionoj l ON l.id = le.leciono_id",
        "personoj_lecioneroj" => "JOIN lecioneroj le ON le.id = t.lecionero_id JOIN lecionoj l ON l.id = le.leciono_id",
        "personoj_lecionoj" => "JOIN lecionoj l ON l.id = t.leciono_id",
        "takso_leciono" => "JOIN lecionoj l ON l.id = t.leciono_id",
        "personoj_vortoj" => "JOIN vortoj v ON v.id = t.vorto_id JOIN lecioneroj le ON le.id = v.lecionero_id JOIN lecionoj l ON l.id = le.leciono_id",
        "personoj_vortoj_respondoj" => "JOIN vortoj v ON v.id = t.vorto_id JOIN lecioneroj le ON le.id = v.lecionero_id JOIN lecionoj l ON l.id = le.leciono_id",
    );

    // Cours dans lesquels l'élève a une progression : [kodo => nomo]
    public function kursojKunProgreso(int $persono_id): array {
        $partoj = array();
        $parametroj = array();
        foreach (self::PROGRESO as $tabelo => $kunigo) {
            $partoj[] = "SELECT l.kurso FROM `$tabelo` t $kunigo WHERE t.persono_id = ?";
            $parametroj[] = $persono_id;
        }
        $demando = $this->bdd->prepare(
            "SELECT k.kodo, k.nomo FROM kursoj k WHERE k.kodo IN (" . implode(" UNION ", $partoj) . ") ORDER BY k.id");
        $demando->execute($parametroj);
        return $demando->fetchAll(PDO::FETCH_KEY_PAIR);
    }

    // L'inscription au cours (nuna_kurso) et le correcteur sont conservés : seul le travail de l'élève est effacé.
    public function forigiProgreson(int $persono_id, string $kurso): void {
        foreach (self::PROGRESO as $tabelo => $kunigo) {
            $demando = $this->bdd->prepare("DELETE t FROM `$tabelo` t $kunigo WHERE t.persono_id = ? AND l.kurso = ?");
            $demando->execute(array($persono_id, $kurso));
        }
    }
}
