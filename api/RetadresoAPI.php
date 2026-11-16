<?php
// RetadresoAPI.php - changement d'adresse e-mail par l'élève (#1107).
//
// La nouvelle adresse reste en attente (personoj.nova_retadreso…) et personoj.retadreso ne change pas
// tant qu'elle n'est pas validée : les mails (rappels, corrections, cron), la connexion par adresse et
// « Mot de passe oublié » continuent d'utiliser l'ancienne. La validation se fait par un lien envoyé à la
// nouvelle adresse (clé aléatoire, valable VALIDECO_TAGOJ jours) ; l'ancienne adresse est informée de la demande.
// Utilisé par retadreso.php (site, administration) et LernadoAPI (application).
// mailViaSES() et protokolo() viennent de util.php et db.inc.php.

require_once __DIR__ . "/IaKorektadoAPI.php";

class RetadresoAPI {
    const VALIDECO_TAGOJ = 7;
    const KATEGORIO = "CHANGEMENT ADRESSE";

    private $bdd;
    private $dosierujo;

    public function __construct(PDO $bdd) {
        $this->bdd = $bdd;
        $this->dosierujo = __DIR__ . "/../mails";
    }

    public static function normaligi(string $retadreso): string {
        return strtolower(trim($retadreso));
    }

    // Demande en attente et encore valable : ["retadreso" => …, "dato" => …, "gxis" => date limite] ou null.
    public function atendanta(int $persono_id): ?array {
        $demando = $this->bdd->prepare("SELECT nova_retadreso, nova_retadreso_dato,
                nova_retadreso_dato + INTERVAL " . self::VALIDECO_TAGOJ . " DAY AS gxis
            FROM personoj WHERE id = ? AND nova_retadreso IS NOT NULL
              AND nova_retadreso_dato > NOW() - INTERVAL " . self::VALIDECO_TAGOJ . " DAY");
        $demando->execute(array($persono_id));
        $v = $demando->fetch(PDO::FETCH_ASSOC);
        return $v ? array("retadreso" => $v["nova_retadreso"], "dato" => $v["nova_retadreso_dato"], "gxis" => $v["gxis"]) : null;
    }

    // Pourquoi l'adresse ne peut pas devenir celle du compte, ou "" si elle le peut.
    public function eraro(int $persono_id, string $nova): string {
        if (!checkEmail($nova)) {
            return "Cette adresse e-mail n'est pas valide.";
        }
        $demando = $this->bdd->prepare("SELECT retadreso FROM personoj WHERE id = ?");
        $demando->execute(array($persono_id));
        if (self::normaligi((string)$demando->fetchColumn()) === $nova) {
            return "C'est déjà l'adresse de votre compte.";
        }
        $demando = $this->bdd->prepare("SELECT COUNT(*) FROM personoj WHERE id <> ? AND (LOWER(retadreso) = ?
            OR (LOWER(nova_retadreso) = ? AND nova_retadreso_dato > NOW() - INTERVAL " . self::VALIDECO_TAGOJ . " DAY))");
        $demando->execute(array($persono_id, $nova, $nova));
        if ((int)$demando->fetchColumn() > 0) {
            return "Cette adresse e-mail est déjà utilisée par un autre compte.";
        }
        return "";
    }

    // Enregistre la demande et envoie les deux mails. Renvoie "" si c'est fait, sinon la raison du refus.
    public function peti(int $persono_id, string $nova): string {
        $this->forigiEksvalidajn();
        $nova = self::normaligi($nova);
        $eraro = $this->eraro($persono_id, $nova);
        if ($eraro !== "") {
            return $eraro;
        }
        $sxlosilo = bin2hex(random_bytes(32));
        $this->bdd->prepare("UPDATE personoj SET nova_retadreso = ?, nova_retadreso_sxlosilo = ?, nova_retadreso_dato = NOW() WHERE id = ?")
            ->execute(array($nova, $sxlosilo, $persono_id));
        $persono = $this->persono($persono_id);
        $this->sendiLigilon($persono);
        mailViaSES($persono["retadreso"], "Demande de changement d'adresse sur I-kurso", $this->sxablono("retadresoInformo.html", array(
            "##ENIRNOMO##" => $persono["enirnomo"], "##NOVA##" => $nova)));
        protokolo($persono_id, self::KATEGORIO, "demande : ".$persono["retadreso"]." → ".$nova." (lien envoyé à la nouvelle adresse)");
        return "";
    }

    // Renvoie le lien de validation (et repart pour VALIDECO_TAGOJ jours). Faux s'il n'y a pas de demande en cours.
    public function resendi(int $persono_id): bool {
        if ($this->atendanta($persono_id) === null) {
            return false;
        }
        $this->bdd->prepare("UPDATE personoj SET nova_retadreso_dato = NOW() WHERE id = ?")->execute(array($persono_id));
        $persono = $this->persono($persono_id);
        $this->sendiLigilon($persono);
        protokolo($persono_id, self::KATEGORIO, "lien renvoyé à ".$persono["nova_retadreso"]);
        return true;
    }

    public function nuligi(int $persono_id, string $kiu = "l'élève"): void {
        $persono = $this->persono($persono_id);
        if (!$persono || $persono["nova_retadreso"] === null) {
            return;
        }
        $this->malplenigi($persono_id);
        protokolo($persono_id, self::KATEGORIO, "demande annulée par ".$kiu." (".$persono["nova_retadreso"].")");
    }

    // Validation par le lien : renvoie l'identifiant du compte, ou la raison de l'échec.
    public function validiPerSxlosilo(string $sxlosilo) {
        if (!preg_match('/^[0-9a-f]{64}$/', $sxlosilo)) {
            return "Ce lien n'est pas valide.";
        }
        $demando = $this->bdd->prepare("SELECT id FROM personoj WHERE nova_retadreso_sxlosilo = ?
            AND nova_retadreso_dato > NOW() - INTERVAL " . self::VALIDECO_TAGOJ . " DAY");
        $demando->execute(array($sxlosilo));
        $persono_id = $demando->fetchColumn();
        if ($persono_id === false) {
            return "Ce lien n'est plus valable : il a expiré, a déjà servi ou la demande a été annulée. Vous pouvez refaire la demande depuis vos données personnelles.";
        }
        $eraro = $this->validi((int)$persono_id, "lien de validation");
        return $eraro === "" ? (int)$persono_id : $eraro;
    }

    // Applique la demande en cours : la nouvelle adresse devient celle du compte. "" si c'est fait.
    public function validi(int $persono_id, string $kiel): string {
        $persono = $this->persono($persono_id);
        if (!$persono || $this->atendanta($persono_id) === null) {
            return "Il n'y a pas de changement d'adresse en attente.";
        }
        $malnova = $persono["retadreso"];
        $nova = $persono["nova_retadreso"];
        // l'adresse a pu être prise entre-temps (inscription d'un autre compte)
        $eraro = $this->eraro($persono_id, $nova);
        if ($eraro !== "") {
            return $eraro;
        }
        $this->bdd->prepare("UPDATE personoj SET retadreso = ?, nova_retadreso = NULL, nova_retadreso_sxlosilo = NULL,
            nova_retadreso_dato = NULL WHERE id = ?")->execute(array($nova, $persono_id));
        protokolo($persono_id, self::KATEGORIO, $malnova." → ".$nova." (validé par ".$kiel.")");
        $this->sxangxiAbonon($persono, $malnova, $nova);
        $this->avertiKorektantojn($persono, $nova);
        return "";
    }

    // Demandes expirées : vidées, pour qu'une adresse abandonnée redevienne libre. Renvoie leur nombre.
    public function forigiEksvalidajn(): int {
        $demando = $this->bdd->prepare("UPDATE personoj SET nova_retadreso = NULL, nova_retadreso_sxlosilo = NULL, nova_retadreso_dato = NULL
            WHERE nova_retadreso IS NOT NULL AND nova_retadreso_dato <= NOW() - INTERVAL " . self::VALIDECO_TAGOJ . " DAY");
        $demando->execute();
        return $demando->rowCount();
    }

    public static function ligilo(string $sxlosilo): string {
        global $urlracine;
        return rtrim($urlracine, "/")."/retadreso.php?sxlosilo=".$sxlosilo;
    }

    private function persono(int $persono_id): ?array {
        $demando = $this->bdd->prepare("SELECT id, enirnomo, personnomo, familinomo, retadreso, nova_retadreso, nova_retadreso_sxlosilo
            FROM personoj WHERE id = ?");
        $demando->execute(array($persono_id));
        return $demando->fetch(PDO::FETCH_ASSOC) ?: null;
    }

    private function malplenigi(int $persono_id): void {
        $this->bdd->prepare("UPDATE personoj SET nova_retadreso = NULL, nova_retadreso_sxlosilo = NULL, nova_retadreso_dato = NULL WHERE id = ?")
            ->execute(array($persono_id));
    }

    private function sendiLigilon(array $persono): void {
        mailViaSES($persono["nova_retadreso"], "Confirmez votre nouvelle adresse sur I-kurso", $this->sxablono("retadresoValidi.html", array(
            "##ENIRNOMO##" => $persono["enirnomo"], "##LIEN##" => self::ligilo($persono["nova_retadreso_sxlosilo"]),
            "##TAGOJ##" => (string)self::VALIDECO_TAGOJ)));
    }

    // valeurs échappées pour le HTML, sauf les liens (construits ici)
    private function sxablono(string $dosiero, array $anstatauxoj): string {
        $teksto = file_get_contents($this->dosierujo . "/" . $dosiero);
        foreach ($anstatauxoj as $sxlosilo => $valoro) {
            $teksto = str_replace($sxlosilo, $sxlosilo === "##LIEN##" ? $valoro : htmlspecialchars((string)$valoro, ENT_QUOTES, "UTF-8"), $teksto);
        }
        return $teksto;
    }

    // Lettre Espéranto-Aktiv : l'abonnement suit l'adresse. Sympa injoignable : noté, sans bloquer le changement.
    private function sxangxiAbonon(array $persono, string $malnova, string $nova): void {
        try {
            require_once __DIR__ . "/SympaAPI.php";
            $sympa = new SympaAPI();
            if ($sympa->isMember($malnova)) {
                $sympa->unsubscribe($malnova);
                $sympa->subscribe($nova, trim($persono["personnomo"]." ".$persono["familinomo"]));
                protokolo($persono["id"], self::KATEGORIO, "abonnement Espéranto-Aktiv transféré à ".$nova);
            }
        } catch (Throwable $e) {
            error_log("RetadresoAPI : abonnement Sympa non transféré (".$e->getMessage().")");
            protokolo($persono["id"], self::KATEGORIO, "abonnement Espéranto-Aktiv NON transféré (Sympa injoignable)");
        }
    }

    // Correcteur de chaque cours en cours (pas le correcteur IA) : la nouvelle adresse de son élève.
    private function avertiKorektantojn(array $persono, string $nova): void {
        $demando = $this->bdd->prepare("SELECT DISTINCT k.id, k.enirnomo, k.personnomo, k.retadreso
            FROM nuna_kurso nk JOIN personoj k ON k.id = nk.korektanto
            WHERE nk.studanto = ? AND nk.stato = 'K' AND nk.korektanto > 0 AND k.id <> nk.studanto AND k.enirnomo <> ? AND k.retadreso <> ''");
        $demando->execute(array($persono["id"], IaKorektadoAPI::ENIRNOMO));
        foreach ($demando->fetchAll(PDO::FETCH_ASSOC) as $k) {
            mailViaSES($k["retadreso"], "Nouvelle adresse de votre élève ".$persono["enirnomo"], $this->sxablono("retadresoKorektanto.html", array(
                "##KNOMO##" => trim((string)$k["personnomo"]) !== "" ? $k["personnomo"] : $k["enirnomo"],
                "##SENIRNOMO##" => $persono["enirnomo"], "##NOVA##" => $nova)));
            protokolo($k["id"], self::KATEGORIO, "prévenu de la nouvelle adresse de son élève ".$persono["enirnomo"]);
        }
    }
}
