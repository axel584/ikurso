<?php
// SendadoAPI.php - Envoi d'une leçon au correcteur (ajax/sendiLecionon.php, ajax/petiKorektanton.php et l'API lernado, #1088).
// Premier envoi d'un cours : un correcteur est attribué automatiquement (troviPlejTauganKorektanton()).
// Envoi suivant : la leçon part au correcteur de l'élève pour ce cours.
// Correcteur IA (#1130) : pas de mail au correcteur, la leçon est mise en file pour cron/ia_korektado.php.
// Premier envoi sans correcteur : l'élève choisit d'abord un mode de correction (#627, KorektadaElektoAPI).
// Utilise les fonctions de util.php et db.inc.php : apartigiPersonon(), troviPlejTauganKorektanton(), protokolo(),
// mailViaSmtp(), mailViaSES().

require_once __DIR__ . "/RespondojAPI.php";
require_once __DIR__ . "/ProgresoAPI.php";
require_once __DIR__ . "/IaKorektadoAPI.php";
require_once __DIR__ . "/KorektadaElektoAPI.php";

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

    // Envoie la leçon : au correcteur de l'élève s'il en a un, sinon selon le mode de correction choisi ($elekto, #627).
    // Sans $elekto : le choix déjà fait pour ce cours (sans correcteur, correcteur connu en attente), sinon un correcteur
    // bénévole, comme avant #627 (anciennes versions de l'application).
    // Renvoie "sendita", "sendita_ia", "korektanto_atribuita", "sen_korektanto", "atendas_korektanton", "konato_malplena",
    // "nevalida_elekto", "neniu_respondo" ou "ne_aktivigita".
    public function sendi(int $persono_id, string $kurso, int $leciono, int $lecionero_id, string $komento, ?int $ekdato,
                          ?string $elekto = null, string $teksto = ""): string {
        if ($this->korektanto($persono_id, $kurso) !== null) {
            return $this->sendiAlKorektanto($persono_id, $kurso, $leciono, $lecionero_id, $komento, $ekdato);
        }
        if ($elekto === null) {
            $nuna = (new KorektadaElektoAPI($this->bdd))->elekto($persono_id, $kurso);
            if ($nuna && $nuna["elekto"] === "sen") {
                $elekto = "sen";
            } elseif ($nuna && (int)$nuna["atendas"] === 1) {
                return $this->atendiKorektanton($persono_id, $kurso, $leciono, $lecionero_id, $ekdato);
            } else {
                $elekto = "volontulo";
            }
        }
        return $this->petiKorektanton($persono_id, $kurso, $leciono, $lecionero_id, $komento, $ekdato, $elekto, $teksto);
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
            return "sendita_ia";
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

    // Premier envoi d'un cours, selon le mode de correction choisi (#627) : correcteur attribué puis leçon envoyée,
    // correction par IA, correcteur connu à retrouver par un administrateur, ou pas de correcteur.
    // Renvoie "korektanto_atribuita", "sendita_ia", "atendas_korektanton", "sen_korektanto", "konato_malplena",
    // "nevalida_elekto", "ne_aktivigita" ou "neniu_respondo".
    public function petiKorektanton(int $persono_id, string $kurso, int $leciono, int $lecionero_id, string $komento, ?int $ekdato,
                                    string $elekto = "volontulo", string $teksto = ""): string {
        $persono = apartigiPersonon($persono_id);
        if (!$persono || (int)$persono["aktivigita"] === 0) {
            return "ne_aktivigita";
        }
        $elektoj = new KorektadaElektoAPI($this->bdd);
        if (!in_array($elekto, KorektadaElektoAPI::ELEKTOJ, true) || ($elekto === "ia" && !isset(IaKorektadoAPI::KURSOJ[$kurso]))) {
            return "nevalida_elekto";
        }
        if ($elekto === "sen") { // l'élève continue seul : la leçon est terminée, rien n'est envoyé
            $elektoj->registri($persono_id, $kurso, "sen");
            $this->bdd->prepare("UPDATE personoj SET kurso = ? WHERE id = ?")->execute(array($kurso, $persono_id));
            (new ProgresoAPI($this->bdd))->finiSekcion($persono_id, $lecionero_id, $ekdato);
            return "sen_korektanto";
        }
        $teksto = trim($teksto);
        if ($elekto === "konato" && $teksto === "") {
            return "konato_malplena";
        }
        if ($this->nombroDeRespondoj($persono_id, $kurso, $leciono) == 0) {
            return "neniu_respondo";
        }
        if ($elekto === "ia") {
            $elektoj->registri($persono_id, $kurso, "ia");
            return $this->atribuiIan($persono, $kurso, $leciono, $lecionero_id, $komento, $ekdato);
        }
        $korektanto_id = null;
        if ($elekto === "konato") {
            $korektanto_id = $elektoj->troviKonaton($teksto, $kurso);
            $elektoj->registri($persono_id, $kurso, "konato", $teksto, $korektanto_id === null);
            if ($korektanto_id === null) { // un administrateur fera le lien
                $this->avertiAdministrantojn($persono, $kurso, $teksto);
                return $this->atendiKorektanton($persono_id, $kurso, $leciono, $lecionero_id, $ekdato);
            }
        } elseif ($elekto === "sama") {
            $sama = $elektoj->samaKorektanto($persono_id, $kurso);
            $korektanto_id = $sama ? (int)$sama["id"] : null;
            $elektoj->registri($persono_id, $kurso, "sama");
        } else {
            $elektoj->registri($persono_id, $kurso, "volontulo");
        }
        $this->memoriLecionon($persono_id, $lecionero_id, null);
        $this->bdd->prepare("UPDATE personoj SET kurso = ?, rajtoj = 'P' WHERE id = ?")->execute(array($kurso, $persono_id));
        list($respondojHtml) = (new RespondojAPI($this->bdd))->mesagxo($persono_id, $leciono, $kurso, $this->urlracine);
        $fonto = $this->kapo($leciono).$respondojHtml.$this->komento($komento)."</body></html>";
        (new ProgresoAPI($this->bdd))->finiSekcion($persono_id, $lecionero_id, $ekdato);

        if ($korektanto_id === null) {
            $korektanto_id = troviPlejTauganKorektanton($persono_id, $kurso);
        }
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
        protokolo($persono["id"], "ATTRIBUTION AUTOMATIQUE", "l'élève a reçu ".$korektanto["enirnomo"]." comme correcteur (choix : "
            .KorektadaElektoAPI::etikedo($elekto).")");
        return "korektanto_atribuita";
    }

    // Changement de mode de correction depuis le profil (#627, #1130) : du correcteur bénévole à la correction
    // automatique ($alIa), ou l'inverse. Seulement pour le cours en cours (nuna_kurso K ou N).
    // Renvoie "farita", "neniu_kurso", "jam" (déjà dans ce mode), "nevalida_kurso" ou "neniu_korektanto".
    public function sxangxiKorektadon(int $persono_id, string $kurso, bool $alIa): string {
        $demando = $this->bdd->prepare("SELECT id, korektanto FROM nuna_kurso WHERE studanto = ? AND kurso = ? AND stato IN ('K', 'N')");
        $demando->execute(array($persono_id, $kurso));
        $nk = $demando->fetch(PDO::FETCH_ASSOC);
        if (!$nk) {
            return "neniu_kurso";
        }
        $malnova = apartigiPersonon((int)$nk["korektanto"]);
        if (IaKorektadoAPI::estasIa($malnova) === $alIa) {
            return "jam";
        }
        $ia = new IaKorektadoAPI($this->bdd, $this->urlracine);
        $studanto = apartigiPersonon($persono_id);
        if ($alIa) {
            if (!isset(IaKorektadoAPI::KURSOJ[$kurso]) || $ia->korektanto() === null) {
                return "nevalida_kurso";
            }
            $nova_id = (int)$ia->korektanto()["id"];
        } else {
            $nova_id = troviPlejTauganKorektanton($persono_id, $kurso);
            if (!$nova_id) {
                return "neniu_korektanto";
            }
        }
        $this->bdd->prepare("UPDATE nuna_kurso SET korektanto = ? WHERE id = ?")->execute(array($nova_id, $nk["id"]));
        (new KorektadaElektoAPI($this->bdd))->registri($persono_id, $kurso, $alIa ? "ia" : "volontulo");
        if ($alIa) {
            // les leçons pas encore corrigées partent en correction automatique ; l'ancien correcteur est prévenu
            $demando = $this->bdd->prepare("SELECT pl.leciono_id FROM personoj_lecionoj pl JOIN lecionoj l ON l.id = pl.leciono_id
                WHERE pl.persono_id = ? AND l.kurso = ? AND pl.korektita = 0");
            $demando->execute(array($persono_id, $kurso));
            foreach ($demando->fetchAll(PDO::FETCH_COLUMN) as $leciono_id) {
                $ia->enviciigi($persono_id, (int)$leciono_id);
            }
            mailViaSES($studanto["retadreso"], "Votre correcteur I-kurso",
                str_replace("##SENIRNOMO##", htmlspecialchars((string)$studanto["enirnomo"]), file_get_contents(__DIR__."/../mails/doniStuIAFR.html")));
            if ($malnova && $malnova["retadreso"] != "") {
                mailViaSES($malnova["retadreso"], "Élève passé à la correction automatique",
                    "<p>Bonjour,</p><p>Votre élève <strong>".htmlspecialchars((string)$studanto["enirnomo"])."</strong> a choisi la correction automatique "
                    ."pour le cours ".htmlspecialchars($kurso).". Vous n'avez plus à corriger ses leçons de ce cours.</p><p>Merci pour votre aide&nbsp;!</p><p>L'équipe d'I-Kurso</p>");
            }
        } else {
            $nova = apartigiPersonon($nova_id);
            mailViaSES($studanto["retadreso"], "Votre correcteur I-kurso", str_replace(array("##KPERSONNOMO##", "##KRETADRESO##", "##SENIRNOMO##"),
                array((string)$nova["personnomo"], (string)$nova["retadreso"], (string)$studanto["enirnomo"]), self::sxablono("redoniStu", $kurso)));
            mailViaSES($nova["retadreso"], "Nouvel élève sur I-kurso", str_replace(
                array("##SENIRNOMO##", "##SLANDO##", "##SPOSXTKODO##", "##SURBO##", "##SRETADRESO##", "##SNASKIGXDATO##"),
                array((string)$studanto["enirnomo"], (string)$studanto["lando"], (string)$studanto["posxtkodo"], (string)$studanto["urbo"],
                    (string)$studanto["retadreso"], (string)$studanto["naskigxdato"]), self::sxablono("redoniKor", $kurso)));
        }
        protokolo($persono_id, "CHANGEMENT DE CORRECTION", "cours ".$kurso." : ".($alIa ? "correction automatique (IA)" : "correcteur bénévole")
            ." à la place de ".($malnova ? $malnova["enirnomo"] : "?"));
        return "farita";
    }

    // Correction par IA choisie par l'élève (#627, #1130) : le correcteur IA lui est attribué et la leçon part en correction.
    private function atribuiIan(array $persono, string $kurso, int $leciono, int $lecionero_id, string $komento, ?int $ekdato): string {
        $ia = (new IaKorektadoAPI($this->bdd, $this->urlracine))->korektanto();
        if ($ia === null) { // compte du correcteur IA absent (sql/62 pas joué)
            return "nevalida_elekto";
        }
        $persono_id = (int)$persono["id"];
        $leciono_id = $this->memoriLecionon($persono_id, $lecionero_id, $komento !== "" ? $komento : null);
        $this->bdd->prepare("UPDATE personoj SET kurso = ?, rajtoj = 'S' WHERE id = ?")->execute(array($kurso, $persono_id));
        $this->bdd->prepare("INSERT INTO nuna_kurso (ekdato, lastdato, korektanto, studanto, kurso, nunleciono, stato) VALUES (NOW(), NOW(), ?, ?, ?, ?, 'K')")
            ->execute(array($ia["id"], $persono_id, $kurso, max(1, $leciono)));
        (new ProgresoAPI($this->bdd))->finiSekcion($persono_id, $lecionero_id, $ekdato);
        (new IaKorektadoAPI($this->bdd, $this->urlracine))->enviciigi($persono_id, $leciono_id);
        mailViaSES($persono["retadreso"], "Votre correcteur I-kurso",
            str_replace("##SENIRNOMO##", htmlspecialchars((string)$persono["enirnomo"]), file_get_contents(__DIR__."/../mails/doniStuIAFR.html")));
        protokolo($persono_id, "ATTRIBUTION AUTOMATIQUE", "l'élève a choisi la correction automatique (IA) pour le cours ".$kurso);
        return "sendita_ia";
    }

    // Correcteur connu pas encore retrouvé (#627) : la leçon est gardée (personoj_lecionoj) pour le correcteur
    // qu'un administrateur attribuera, et la section est terminée.
    private function atendiKorektanton(int $persono_id, string $kurso, int $leciono, int $lecionero_id, ?int $ekdato): string {
        if ($this->nombroDeRespondoj($persono_id, $kurso, $leciono) == 0) {
            return "neniu_respondo";
        }
        $this->memoriLecionon($persono_id, $lecionero_id, null);
        $this->bdd->prepare("UPDATE personoj SET kurso = ?, rajtoj = 'P' WHERE id = ? AND rajtoj <> 'S'")->execute(array($kurso, $persono_id));
        (new ProgresoAPI($this->bdd))->finiSekcion($persono_id, $lecionero_id, $ekdato);
        return "atendas_korektanton";
    }

    // Mail aux administrateurs : un élève attend le correcteur qu'il a indiqué (#627).
    private function avertiAdministrantojn(array $persono, string $kurso, string $teksto): void {
        $h = function ($t) { return htmlspecialchars((string)$t, ENT_QUOTES, "UTF-8"); };
        $url = rtrim($this->urlracine, "/")."/administri.php?celpersono_id=".(int)$persono["id"];
        $enhavo = "<p>L'élève <strong>".$h($persono["enirnomo"])."</strong> a choisi, pour le cours ".$h($kurso)
            .", d'être corrigé par un correcteur qu'il connaît : « ".$h($teksto)." ».</p>"
            ."<p>Aucun correcteur de ce cours ne correspond à ce texte (identifiant ou adresse e-mail). "
            ."Retrouvez-le et attribuez-le depuis la fiche de l'élève : <a href=\"".$h($url)."\">".$h($url)."</a></p>"
            ."<p>Ses leçons sont enregistrées en attendant.</p>";
        foreach ($this->bdd->query("SELECT retadreso FROM personoj WHERE rajtoj = 'A' AND retadreso <> ''")->fetchAll(PDO::FETCH_COLUMN) as $retadreso) {
            mailViaSES($retadreso, "Correcteur connu à retrouver pour ".$persono["enirnomo"], $enhavo);
        }
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
