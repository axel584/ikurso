<?php
// SendadoAPI.php - Envoi d'une leçon au correcteur (ajax/sendiLecionon.php, ajax/petiKorektanton.php et l'API lernado, #1088).
// Premier envoi d'un cours : un correcteur est attribué automatiquement (troviPlejTauganKorektanton()).
// Envoi suivant : la leçon part au correcteur de l'élève pour ce cours.
// Correcteur IA (#1130) : pas de mail au correcteur, la leçon est mise en file pour cron/ia_korektado.php.
// Utilise les fonctions de util.php et db.inc.php : apartigiPersonon(), troviPlejTauganKorektanton(), protokolo(),
// mailViaSmtp(), mailViaSES().

require_once __DIR__ . "/RespondojAPI.php";
require_once __DIR__ . "/ProgresoAPI.php";
require_once __DIR__ . "/IaKorektadoAPI.php";

class SendadoAPI {
    const KURSOJ = array("CG" => "fr/cge/", "GR" => "fr/gerda/", "PP" => "eo/ppp/");

    private $bdd;
    private $urlracine;

    public function __construct(PDO $bdd, string $urlracine) {
        $this->bdd = $bdd;
        $this->urlracine = $urlracine;
    }

    // Correcteur de l'élève pour ce cours (ligne de personoj), ou null.
    public function korektanto(int $persono_id, string $kurso): ?array {
        $demando = $this->bdd->prepare("SELECT personoj.* FROM nuna_kurso JOIN personoj ON personoj.id = nuna_kurso.korektanto
            WHERE nuna_kurso.kurso = ? AND studanto = ?");
        $demando->execute(array($kurso, $persono_id));
        $vico = $demando->fetch(PDO::FETCH_ASSOC);
        return $vico ?: null;
    }

    // Envoie la leçon : au correcteur de l'élève s'il en a un, sinon en lui attribuant un correcteur.
    // Renvoie "sendita", "korektanto_atribuita", "neniu_respondo" ou "ne_aktivigita".
    public function sendi(int $persono_id, string $kurso, int $leciono, int $lecionero_id, string $komento, ?int $ekdato): string {
        if ($this->korektanto($persono_id, $kurso) !== null) {
            return $this->sendiAlKorektanto($persono_id, $kurso, $leciono, $lecionero_id, $komento, $ekdato);
        }
        return $this->petiKorektanton($persono_id, $kurso, $leciono, $lecionero_id, $komento, $ekdato);
    }

    // Leçon envoyée au correcteur déjà attribué. Renvoie "sendita", "neniu_korektanto" ou "neniu_respondo".
    public function sendiAlKorektanto(int $persono_id, string $kurso, int $leciono, int $lecionero_id, string $komento, ?int $ekdato): string {
        $korektanto = $this->korektanto($persono_id, $kurso);
        if ($korektanto === null) {
            return "neniu_korektanto";
        }
        $studanto = apartigiPersonon($persono_id);
        list($respondojHtml, $nombro) = (new RespondojAPI($this->bdd))->mesagxo($persono_id, $leciono, $kurso, $this->urlracine);
        if ($nombro == 0) {
            return "neniu_respondo";
        }
        if (IaKorektadoAPI::estasIa($korektanto)) {
            $leciono_id = $this->memoriLecionon($persono_id, $lecionero_id, $komento);
            (new IaKorektadoAPI($this->bdd, $this->urlracine))->enviciigi($persono_id, $leciono_id);
            $this->bdd->prepare("UPDATE nuna_kurso SET nunleciono = ?, stato = 'K', lastdato = CURDATE() WHERE studanto = ? AND kurso = ?")
                ->execute(array($leciono, $persono_id, $kurso));
            (new ProgresoAPI($this->bdd))->finiSekcion($persono_id, $lecionero_id, $ekdato);
            return "sendita";
        }
        $fonto = $this->kapo($leciono)."<p>Sendu vian korekton al : ".$studanto["retadreso"]."<br>\n".$respondojHtml.$this->komento($komento)."</body></html>";
        $this->memoriLecionon($persono_id, $lecionero_id, $komento);
        $subjekto = $this->subjekto($kurso, $leciono, $studanto["enirnomo"]);
        // envoi au correcteur + copie à l'élève
        mailViaSmtp($korektanto["retadreso"], $studanto["retadreso"], $subjekto, stripslashes($fonto));
        mailViaSES($studanto["retadreso"], "Copie de ".$subjekto, stripslashes($fonto));
        $atentigo = file_get_contents(__DIR__."/../mails/novaleciono.html");
        $url = rtrim($this->urlracine, "/")."/vidiLecionon.php?numleciono=".$leciono."&kurso=".$kurso."&studanto=".$persono_id;
        mailViaSES($korektanto["retadreso"], "Nouvelle leçon de ".$studanto["enirnomo"], str_replace("##URL##", $url, $atentigo));
        $this->bdd->prepare("UPDATE nuna_kurso SET nunleciono = ?, stato = 'K', lastdato = CURDATE() WHERE studanto = ? AND kurso = ?")
            ->execute(array($leciono, $persono_id, $kurso));
        (new ProgresoAPI($this->bdd))->finiSekcion($persono_id, $lecionero_id, $ekdato);
        return "sendita";
    }

    // Premier envoi d'un cours : un correcteur est attribué à l'élève, puis la leçon lui est envoyée.
    // Renvoie "korektanto_atribuita", "ne_aktivigita" ou "neniu_respondo".
    public function petiKorektanton(int $persono_id, string $kurso, int $leciono, int $lecionero_id, string $komento, ?int $ekdato): string {
        $persono = apartigiPersonon($persono_id);
        if (!$persono || (int)$persono["aktivigita"] === 0) {
            return "ne_aktivigita";
        }
        if ($this->nombroDeRespondoj($persono_id, $kurso, $leciono) == 0) {
            return "neniu_respondo";
        }
        $this->memoriLecionon($persono_id, $lecionero_id, null);
        $this->bdd->prepare("UPDATE personoj SET kurso = ?, rajtoj = 'P' WHERE id = ?")->execute(array($kurso, $persono_id));
        list($respondojHtml) = (new RespondojAPI($this->bdd))->mesagxo($persono_id, $leciono, $kurso, $this->urlracine);
        $fonto = $this->kapo($leciono).$respondojHtml.$this->komento($komento)."</body></html>";
        (new ProgresoAPI($this->bdd))->finiSekcion($persono_id, $lecionero_id, $ekdato);

        $korektanto_id = troviPlejTauganKorektanton($persono_id, $kurso);
        $korektanto = apartigiPersonon($korektanto_id);
        $this->bdd->prepare("UPDATE personoj SET rajtoj = 'S' WHERE id = ?")->execute(array($persono_id)); // cxiukaze igas lin studanto
        // nunleciono = la leçon envoyée : l'élève ne commence pas forcément par la leçon 1 (#897)
        $this->bdd->prepare("INSERT INTO nuna_kurso (ekdato, lastdato, korektanto, studanto, kurso, nunleciono) VALUES (NOW(), NOW(), ?, ?, ?, ?)")
            ->execute(array($korektanto_id, $persono_id, $kurso, max(1, $leciono)));

        $alStudanto = str_replace(array("##KPERSONNOMO##", "##KRETADRESO##", "##SENIRNOMO##"),
            array((string)$korektanto["personnomo"], $korektanto["retadreso"], $persono["enirnomo"]), self::sxablono("doniStu", $kurso));
        mailViaSES($persono["retadreso"], "Votre correcteur I-kurso", $alStudanto);
        $alKorektanto = str_replace(array("##SENIRNOMO##", "##SID##", "##SURBO##", "##SRETADRESO##", "##SNASKIGXDATO##", "##KNOMO##"),
            array($persono["enirnomo"], $persono["id"], $persono["urbo"]." (".$persono["lando"].")", $persono["retadreso"],
                (string)$persono["naskigxdato"], $korektanto["enirnomo"]), self::sxablono("doniKor", $kurso));
        mailViaSES($korektanto["retadreso"], "Nouvel élève sur I-kurso", $alKorektanto);
        // la leçon au correcteur + copie à l'élève
        $subjekto = $this->subjekto($kurso, $leciono, $persono["enirnomo"]);
        mailViaSmtp($korektanto["retadreso"], $persono["retadreso"], $subjekto, stripslashes($fonto));
        mailViaSES($persono["retadreso"], "Copie de ".$subjekto, stripslashes($fonto));
        protokolo($persono["id"], "ATTRIBUTION AUTOMATIQUE", "l'élève a reçu ".$korektanto["enirnomo"]." comme correcteur");
        return "korektanto_atribuita";
    }

    private function nombroDeRespondoj(int $persono_id, string $kurso, int $leciono): int {
        $demando = $this->bdd->prepare("SELECT COUNT(*) FROM respondoj
            JOIN ekzerceroj ON ekzerceroj.id = respondoj.ekzercero_id
            JOIN ekzercoj ON ekzercoj.id = ekzerceroj.ekzerco_id
            JOIN lecioneroj ON lecioneroj.id = ekzercoj.lecionero_id
            JOIN lecionoj ON lecioneroj.leciono_id = lecionoj.id
            WHERE persono_id = ? AND lecionoj.numero = ? AND kurso = ?");
        $demando->execute(array($persono_id, $leciono, $kurso));
        return (int)$demando->fetchColumn();
    }

    // Leçon envoyée (personoj_lecionoj), une seule fois, avec le commentaire de l'élève au premier envoi à son correcteur.
    // Renvoie l'identifiant de la leçon.
    private function memoriLecionon(int $persono_id, int $lecionero_id, ?string $komento): int {
        $demando = $this->bdd->prepare("SELECT leciono_id FROM lecioneroj WHERE id = ?");
        $demando->execute(array($lecionero_id));
        $leciono_id = $demando->fetchColumn();
        $demando = $this->bdd->prepare("SELECT COUNT(*) FROM personoj_lecionoj WHERE persono_id = ? AND leciono_id = ?");
        $demando->execute(array($persono_id, $leciono_id));
        if ((int)$demando->fetchColumn() > 0) {
            return (int)$leciono_id;
        }
        if ($komento === null) {
            $this->bdd->prepare("INSERT INTO personoj_lecionoj (dato, persono_id, leciono_id) VALUES (NOW(), ?, ?)")
                ->execute(array($persono_id, $leciono_id));
        } else {
            $this->bdd->prepare("INSERT INTO personoj_lecionoj (dato, persono_id, leciono_id, komentario) VALUES (NOW(), ?, ?, ?)")
                ->execute(array($persono_id, $leciono_id, $komento));
        }
        return (int)$leciono_id;
    }

    private function kapo(int $leciono): string {
        return "<html><head><title>Cours d'Espéranto : leçon ".$leciono."</title>\n"
            ."<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\"\n>"
            ."<style>body{font-family:\"Courier New\", Courier, sans-serif;font-size:small}</style>\n"
            ."</head><body>";
    }

    private function komento(string $komento): string {
        return "<p>Commentaire de l'élève :<br>\n<span style=\"color:blue\">".$komento."</span></p>\n";
    }

    private function subjekto(string $kurso, int $leciono, string $enirnomo): string {
        $prefikso = array("CG" => "lec", "GR" => "gerda cxap", "PP" => "leciono ");
        return (isset($prefikso[$kurso]) ? $prefikso[$kurso] : "").sprintf('%02d', $leciono)." de ".$enirnomo;
    }

    // Mail d'attribution du correcteur : modèle propre au cours s'il existe (doniStuCGFR.html), sinon commun (doniStuFR.html).
    private static function sxablono(string $nomo, string $kurso): string {
        $dosiero = __DIR__."/../mails/".$nomo.(isset(self::KURSOJ[$kurso]) ? $kurso : "")."FR.html";
        if (!file_exists($dosiero)) {
            $dosiero = __DIR__."/../mails/".$nomo."FR.html";
        }
        return file_get_contents($dosiero);
    }
}
