<?php
// SaviezvousAPI.php - « Le saviez-vous ? » envoyés à chaque élève (#891).
// personoj.saviezvous_senditaj : liste JSON des messages envoyés, [{"numero":3,"dato":"2026-10-23"}, …].
// Le compteur personoj.saviezvous reste tenu à jour tant qu'un retour arrière est possible.

class SaviezvousAPI {
    // Dans les messages, lien « continuer votre apprentissage » : remplacé pour chaque élève (venontaLecionoUrl).
    const LIGILO = "##URL_VENONTA_LECIONO##";

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

    // Messages existants (numéro, titre), dans l'ordre, pour la page saviezvous.php : table saviezvous,
    // limitée aux numéros dont les fichiers existent.
    public function listo(): array {
        $ekzistantaj = $this->ekzistantaj();
        $demando = $this->bdd->query("SELECT numero, titolo FROM saviezvous ORDER BY numero");
        return array_values(array_filter($demando->fetchAll(PDO::FETCH_ASSOC), function ($vico) use ($ekzistantaj) {
            return in_array((int)$vico["numero"], $ekzistantaj);
        }));
    }

    // Contenu du message sans l'enveloppe du mail (ce qui est entre <body> et </body>), ou null s'il n'existe pas.
    public function korpo(int $numero): ?string {
        if (!in_array($numero, $this->ekzistantaj())) {
            return null;
        }
        $html = $this->enhavo($numero)[1];
        return preg_match('#<body[^>]*>(.*)</body>#is', $html, $trovita) ? $trovita[1] : $html;
    }

    // Page où l'élève reprend le cours (section ou leçon suivante, première leçon s'il n'a pas commencé),
    // sinon l'accueil du site : administrateurs, correcteurs, cours terminé. Reprend la redirection faite
    // à la connexion (getRedirectionParDroits, db.inc.php), qui renvoie sinon vers une page du compte.
    public static function venontaLecionoUrl(int $persono_id, string $urlracine): string {
        $radiko = rtrim($urlracine, "/") . "/";
        $pagxo = (string)getRedirectionParDroits($persono_id);
        if ($pagxo === "" || in_array($pagxo, array("administri.php", "miajlernantoj.php", "personinformoj.php"))) {
            return $radiko;
        }
        return $radiko . $pagxo;
    }

    // Remplace le lien du message par la page où cet élève reprend le cours.
    public static function personigi(string $html, int $persono_id, string $urlracine): string {
        return str_replace(self::LIGILO, htmlspecialchars(self::venontaLecionoUrl($persono_id, $urlracine), ENT_QUOTES, "UTF-8"), $html);
    }

    // Ajoute le message à la liste des envois de la personne.
    public function registri(int $persono_id, int $numero): void {
        $senditaj = $this->senditaj($persono_id);
        $senditaj[] = array("numero" => $numero, "dato" => date("Y-m-d"));
        $demando = $this->bdd->prepare("UPDATE personoj SET saviezvous_senditaj = ?, saviezvous = GREATEST(saviezvous, ?) WHERE id = ?");
        $demando->execute(array(json_encode($senditaj), $numero, $persono_id));
    }
}
