<?php
// KorektadaElektoAPI.php - Choix du mode de correction d'un cours (#627), table korektadaj_elektoj (sql/63).
// À la fin de la première leçon d'un cours, l'élève sans correcteur choisit :
//   sama      le correcteur qu'il avait pour un autre cours, s'il corrige aussi celui-ci (proposé seulement dans ce cas) ;
//   volontulo un correcteur bénévole attribué automatiquement (troviPlejTauganKorektanton()) ;
//   konato    un correcteur qu'il connaît : identifiant ou adresse e-mail d'un correcteur de ce cours, sinon un
//             administrateur fait le lien (atendas = 1, liste dans administri.php) ;
//   sen       pas de correcteur : il continue seul, sans envoi ; il pourra choisir un correcteur à la fin d'une autre leçon ;
//   ia        la correction automatique (#1130), pour les cours que l'IA sait corriger.
// L'attribution elle-même est dans SendadoAPI::petiKorektanton().

require_once __DIR__ . "/IaKorektadoAPI.php";

class KorektadaElektoAPI {
    const ELEKTOJ = array("sama", "volontulo", "konato", "sen", "ia");

    private $bdd;

    public function __construct(PDO $bdd) {
        $this->bdd = $bdd;
    }

    // Choix enregistré pour ce cours (elekto, teksto, atendas, dato), ou null.
    public function elekto(int $persono_id, string $kurso): ?array {
        $demando = $this->bdd->prepare("SELECT elekto, teksto, atendas, dato FROM korektadaj_elektoj WHERE persono_id = ? AND kurso = ?");
        $demando->execute(array($persono_id, $kurso));
        $vico = $demando->fetch(PDO::FETCH_ASSOC);
        return $vico ?: null;
    }

    public function registri(int $persono_id, string $kurso, string $elekto, ?string $teksto = null, bool $atendas = false): void {
        $this->bdd->prepare("INSERT INTO korektadaj_elektoj (persono_id, kurso, elekto, teksto, atendas, dato) VALUES (?, ?, ?, ?, ?, NOW())
            ON DUPLICATE KEY UPDATE elekto = VALUES(elekto), teksto = VALUES(teksto), atendas = VALUES(atendas), dato = NOW()")
            ->execute(array($persono_id, $kurso, $elekto, $teksto !== null ? mb_substr($teksto, 0, 255) : null, $atendas ? 1 : 0));
    }

    // Un administrateur a attribué un correcteur : plus de rapprochement en attente.
    public function solvi(int $persono_id, string $kurso): void {
        $this->bdd->prepare("UPDATE korektadaj_elektoj SET atendas = 0 WHERE persono_id = ? AND kurso = ?")
            ->execute(array($persono_id, $kurso));
    }

    // Correcteur (bénévole) de l'élève pour un autre cours, s'il accepte des élèves pour celui-ci ; le plus récent.
    public function samaKorektanto(int $persono_id, string $kurso): ?array {
        $demando = $this->bdd->prepare("SELECT p.id, p.enirnomo, p.personnomo, p.familinomo
            FROM nuna_kurso nk JOIN personoj p ON p.id = nk.korektanto
            JOIN korektebla_kurso kk ON kk.korektanto = p.id AND kk.kurso = ? AND kk.kiom_lernantoj > 0
            WHERE nk.studanto = ? AND nk.kurso <> ? AND p.enirnomo <> ?
            ORDER BY nk.lastdato DESC, nk.id DESC LIMIT 1");
        $demando->execute(array($kurso, $persono_id, $kurso, IaKorektadoAPI::ENIRNOMO));
        $vico = $demando->fetch(PDO::FETCH_ASSOC);
        return $vico ?: null;
    }

    // Choix proposés à l'élève pour ce cours, dans l'ordre d'affichage : [kodo, titolo, priskribo].
    public function ebloj(int $persono_id, string $kurso): array {
        $ebloj = array();
        $sama = $this->samaKorektanto($persono_id, $kurso);
        if ($sama) {
            $ebloj[] = array("kodo" => "sama", "titolo" => "Garder mon correcteur, ".self::nomo($sama),
                "priskribo" => "Il corrige aussi ce cours.");
        }
        $ebloj[] = array("kodo" => "volontulo", "titolo" => $sama ? "Un autre correcteur bénévole" : "Un correcteur bénévole",
            "priskribo" => "Un correcteur de l'association vous est attribué et corrige vos leçons.");
        $ebloj[] = array("kodo" => "konato", "titolo" => "Un correcteur que je connais déjà",
            "priskribo" => "Indiquez son prénom, son identifiant ou son adresse e-mail.");
        if (isset(IaKorektadoAPI::KURSOJ[$kurso])) {
            $ebloj[] = array("kodo" => "ia", "titolo" => "La correction automatique",
                "priskribo" => "Vos leçons sont corrigées par une intelligence artificielle, quelques minutes après l'envoi. Elle peut parfois se tromper.");
        }
        $ebloj[] = array("kodo" => "sen", "titolo" => "Continuer sans correcteur",
            "priskribo" => "Vous poursuivez seul ; vous pourrez demander un correcteur à la fin d'une prochaine leçon.");
        return $ebloj;
    }

    // Correcteur de ce cours dont l'identifiant ou l'adresse e-mail est exactement ce texte (sans tenir compte de la casse), ou null.
    public function troviKonaton(string $teksto, string $kurso): ?int {
        $teksto = trim($teksto);
        if ($teksto === "") {
            return null;
        }
        $demando = $this->bdd->prepare("SELECT DISTINCT p.id FROM personoj p JOIN korektebla_kurso kk ON kk.korektanto = p.id AND kk.kurso = ?
            WHERE p.rajtoj IN ('K', 'A') AND p.enirnomo <> ? AND (LOWER(p.enirnomo) = LOWER(?) OR LOWER(p.retadreso) = LOWER(?))");
        $demando->execute(array($kurso, IaKorektadoAPI::ENIRNOMO, $teksto, $teksto));
        $idoj = $demando->fetchAll(PDO::FETCH_COLUMN);
        return count($idoj) === 1 ? (int)$idoj[0] : null;
    }

    // Élèves qui attendent qu'un administrateur retrouve leur correcteur.
    public function atendantaj(): array {
        return $this->bdd->query("SELECT e.persono_id, p.enirnomo, e.kurso, e.teksto, e.dato FROM korektadaj_elektoj e
            JOIN personoj p ON p.id = e.persono_id WHERE e.atendas = 1 ORDER BY e.dato")->fetchAll(PDO::FETCH_ASSOC);
    }

    // Choix faits hier, par choix (mail quotidien des administrateurs).
    public function hieraux(): array {
        return $this->bdd->query("SELECT elekto, COUNT(*) AS kiom FROM korektadaj_elektoj
            WHERE dato >= CURDATE() - INTERVAL 1 DAY AND dato < CURDATE() GROUP BY elekto ORDER BY kiom DESC")->fetchAll(PDO::FETCH_KEY_PAIR);
    }

    // Libellé court d'un choix, pour l'administration et les statistiques.
    public static function etikedo(string $elekto): string {
        $etikedoj = array("sama" => "même correcteur qu'au cours précédent", "volontulo" => "correcteur bénévole",
            "konato" => "correcteur connu", "sen" => "sans correcteur", "ia" => "correction automatique (IA)");
        return isset($etikedoj[$elekto]) ? $etikedoj[$elekto] : $elekto;
    }

    private static function nomo(array $persono): string {
        $nomo = trim($persono["personnomo"]." ".$persono["familinomo"]);
        return $nomo !== "" ? $nomo : $persono["enirnomo"];
    }
}
