<?php
// KontoAPI.php - Suppression de son compte par l'élève lui-même (issue #1029)
//
// Supprime exactement les tables exportées par EksportoAPI : un élève qui a gardé son export
// peut ainsi être remis en base à l'identique.

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
}
