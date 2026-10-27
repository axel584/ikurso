<?php
// AktivigoAPI.php - mails d'activation du compte et de changement de mot de passe,
// envoyés depuis la fiche d'administration (#878) et relance des comptes pas activés (#639).
// Les mails passent par mailViaSES() et sont notés dans le protokolo (util.php, db.inc.php).

class AktivigoAPI {
    // catégorie du protokolo pour la relance automatique : sert aussi à ne relancer qu'une fois
    const REMEMORIGO = "RAPPEL ACTIVATION";

    private $bdd;
    private $dosierujo;

    public function __construct(PDO $bdd) {
        $this->bdd = $bdd;
        $this->dosierujo = __DIR__ . "/../mails";
    }

    private function persono(int $persono_id): ?array {
        $demando = $this->bdd->prepare("SELECT id, enirnomo, retadreso, aktivigo, aktivigita FROM personoj WHERE id = ?");
        $demando->execute(array($persono_id));
        $persono = $demando->fetch(PDO::FETCH_ASSOC);
        return $persono ?: null;
    }

    // Clé d'activation de la personne, créée si elle n'en a pas (elle sert aussi au lien de mot de passe).
    private function sxlosilo(array $persono): string {
        if (!empty($persono["aktivigo"])) {
            return $persono["aktivigo"];
        }
        $aktivigo = md5(uniqid((string)rand(), true));
        $demando = $this->bdd->prepare("UPDATE personoj SET aktivigo = ? WHERE id = ?");
        $demando->execute(array($aktivigo, $persono["id"]));
        return $aktivigo;
    }

    // Lien d'activation ; $fonto (« rememorigo », « administranto ») est noté dans le protokolo à l'activation.
    public static function ligilo(string $retadreso, string $aktivigo, string $fonto = ""): string {
        global $urlracine;
        return rtrim($urlracine, "/")."/aktivigi.php?retadreso=".urlencode($retadreso)."&aktivigo=".urlencode($aktivigo)
            .($fonto !== "" ? "&fonto=".urlencode($fonto) : "");
    }

    // Envoie le lien d'activation. $sxablono : fichier de mails/ contenant ##LIEN_ACTIVATION##.
    public function sendiAktivigilon(int $persono_id, string $sxablono, string $objekto, string $fonto, string $kategorio): bool {
        $persono = $this->persono($persono_id);
        if (!$persono || $persono["retadreso"] === "") {
            return false;
        }
        $ligilo = self::ligilo($persono["retadreso"], $this->sxlosilo($persono), $fonto);
        $enhavo = str_replace("##LIEN_ACTIVATION##", $ligilo, file_get_contents($this->dosierujo."/".$sxablono));
        $enhavo = str_replace("##ENIRNOMO##", htmlspecialchars($persono["enirnomo"]), $enhavo);
        mailViaSES($persono["retadreso"], $objekto, $enhavo);
        protokolo($persono_id, $kategorio, $persono["retadreso"]." a reçu un lien d'activation (".$sxablono.")");
        return true;
    }

    // Envoie un lien pour choisir un nouveau mot de passe (même mail que « Mot de passe oublié »).
    // Renvoie "" si le mail est parti, sinon la raison.
    public function sendiPasvortLigilon(int $persono_id): string {
        global $urlracine;
        $persono = $this->persono($persono_id);
        if (!$persono || $persono["retadreso"] === "") {
            return "Ce compte n'a pas d'adresse e-mail.";
        }
        // le lien désigne le compte par son adresse : elle doit être unique
        $demando = $this->bdd->prepare("SELECT COUNT(*) FROM personoj WHERE retadreso = ?");
        $demando->execute(array($persono["retadreso"]));
        if ((int)$demando->fetchColumn() > 1) {
            return "Plusieurs comptes ont cette adresse e-mail : supprimez les comptes inutiles avant d'envoyer le lien.";
        }
        $ligilo = rtrim($urlracine, "/")."/index.php?novigiPasvorton=ok&retadreso=".urlencode($persono["retadreso"])."&aktivigo=".urlencode($this->sxlosilo($persono));
        $enhavo = file_get_contents($this->dosierujo."/novigiPasvorton.html");
        $enhavo = str_replace("##LIEN##", $ligilo, $enhavo);
        $enhavo = str_replace("##ENIRNOMO##", htmlspecialchars($persono["enirnomo"]), $enhavo);
        mailViaSES($persono["retadreso"], "Votre mot de passe sur les cours d'espéranto Ikurso", $enhavo);
        protokolo($persono_id, "réinitialisation du mot de passe", $persono["retadreso"]." a reçu un lien pour changer son mot de passe (envoyé par un administrateur)");
        return "";
    }

    // Comptes à relancer (#639) : inscrits avant-hier (au moins 24 heures avant le cron de la nuit),
    // pas encore activés, jamais relancés. Les invités (G) n'ont pas d'adresse.
    public function rememorigendaj(): array {
        $demando = $this->bdd->prepare("SELECT id FROM personoj p
            WHERE p.aktivigita = 0 AND p.rajtoj <> 'G' AND p.retadreso <> '' AND p.ekdato = DATE_SUB(CURDATE(), INTERVAL 2 DAY)
            AND NOT EXISTS (SELECT 1 FROM protokolo pr WHERE pr.persono_id = p.id AND pr.kategorio = ?)");
        $demando->execute(array(self::REMEMORIGO));
        return array_map("intval", $demando->fetchAll(PDO::FETCH_COLUMN));
    }
}
