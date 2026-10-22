<?php
// SaviezvousAPI.php - « Le saviez-vous ? » envoyés à chaque élève (#891).
// personoj.saviezvous_senditaj : liste JSON des messages envoyés, [{"numero":3,"dato":"2026-10-23"}, …].
// Le compteur personoj.saviezvous reste tenu à jour tant qu'un retour arrière est possible.

class SaviezvousAPI {
    private $bdd;
    private $dosierujo;

    public function __construct(PDO $bdd) {
        $this->bdd = $bdd;
        $this->dosierujo = __DIR__ . "/../mails";
    }

    // Messages déjà envoyés à la personne.
    public function senditaj(int $persono_id): array {
        $demando = $this->bdd->prepare("SELECT saviezvous_senditaj FROM personoj WHERE id = ?");
        $demando->execute(array($persono_id));
        return self::malkodi($demando->fetchColumn());
    }

    public static function malkodi($json): array {
        $listo = json_decode((string)$json, true);
        return is_array($listo) ? $listo : array();
    }

    // Numéros des messages existants (mails/saviezvousNNN.html et .txt), dans l'ordre.
    public function ekzistantaj(): array {
        $numeroj = array();
        foreach (glob($this->dosierujo . "/saviezvous[0-9][0-9][0-9].html") as $dosiero) {
            $numero = (int)substr(basename($dosiero, ".html"), 10);
            if (file_exists($this->dosierujo . sprintf("/saviezvous%03d.txt", $numero))) {
                $numeroj[] = $numero;
            }
        }
        sort($numeroj);
        return $numeroj;
    }

    // Prochain message à envoyer : le plus petit numéro pas encore envoyé, ou null s'ils l'ont tous été.
    public function sekva(array $senditaj): ?int {
        $jam = array_column($senditaj, "numero");
        foreach ($this->ekzistantaj() as $numero) {
            if (!in_array($numero, $jam)) {
                return $numero;
            }
        }
        return null;
    }

    // [titre, contenu HTML] du message.
    public function enhavo(int $numero): array {
        return array(
            trim(file_get_contents($this->dosierujo . sprintf("/saviezvous%03d.txt", $numero))),
            file_get_contents($this->dosierujo . sprintf("/saviezvous%03d.html", $numero)),
        );
    }

    // Ajoute le message à la liste des envois de la personne.
    public function registri(int $persono_id, int $numero): void {
        $senditaj = $this->senditaj($persono_id);
        $senditaj[] = array("numero" => $numero, "dato" => date("Y-m-d"));
        $demando = $this->bdd->prepare("UPDATE personoj SET saviezvous_senditaj = ?, saviezvous = GREATEST(saviezvous, ?) WHERE id = ?");
        $demando->execute(array(json_encode($senditaj), $numero, $persono_id));
    }
}
