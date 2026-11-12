<?php
// IaKorektadoAPI.php - Correcteur IA (#1130) : un compte correcteur (enirnomo « ia-korektanto ») dont les leçons
// sont corrigées par un modèle de langue via OpenRouter, comme le ferait un correcteur bénévole.
//
// - À l'envoi d'une leçon à ce correcteur (SendadoAPI), elle est mise en file d'attente (table ia_korektadoj).
// - cron/ia_korektado.php corrige les leçons en attente : il envoie la consigne (api/ia-konsigno.md) et la leçon
//   (consignes, questions, corrigés types, réponses de l'élève, sans nom ni adresse), et enregistre la réponse
//   par KorektadoAPI, comme une correction humaine, avec le mail « Votre leçon a été corrigée ».
// - Après MAKS_PROVOJ échecs, ou pour un cours que l'IA ne corrige pas encore, la leçon reste au correcteur IA et les
//   administrateurs sont prévenus par mail : ils peuvent attribuer un correcteur bénévole (administri.php), ajouter du
//   crédit sur OpenRouter, changer de modèle… puis relancer la correction (cron/ia_korektado.php --relancer).
// - Plafond de dépense par jour : au-delà, les leçons attendent le lendemain (administrateurs prévenus une fois par jour).
//
// Réglages dans config.php (jamais dans le dépôt) : $OPENROUTER_KEY, $IA_MODELO, $IA_TAGA_LIMO (dollars par jour).
// Utilise apartigiPersonon(), protokolo() et mailViaSES() de db.inc.php / util.php.

require_once __DIR__ . "/KorektadoAPI.php";

class IaKorektadoAPI {
    const ENIRNOMO = "ia-korektanto";
    const MODELO = "anthropic/claude-haiku-5.5";
    const TAGA_LIMO = 1.0;
    const MAKS_PROVOJ = 3;
    // longueur maximale d'une réponse envoyée au modèle (coût borné) : la plus longue réponse en base en novembre 2026
    // était une rédaction de Paŝoj de 5 395 caractères ; au-delà, la réponse est coupée et le modèle en est averti
    const MAKS_LONGECO = 6000;
    // cours que l'IA sait corriger, avec le nom donné au modèle (les mêmes que python/ia/korekti.py) ;
    // api/ia-konsigno.md a des règles pour chacun (langue des explications)
    const KURSOJ = array("CG" => "Cours élémentaire (CG)", "GR" => "Gerda malaperis (GR)", "PP" => "Paŝoj al plena posedo (PP)");
    // titres des sections qui contiennent le texte de lecture sur lequel portent les questions (Gerda, Paŝoj)
    const TEKSTAJ_SEKCIOJ = array("Rakonto", "Legaĵo");
    const URL = "https://openrouter.ai/api/v1/chat/completions";
    const ENKONDUKO = "<p>Cette leçon a été corrigée automatiquement par une intelligence artificielle. "
        ."Elle peut parfois se tromper : si une correction vous semble fausse, n'hésitez pas à nous le signaler.</p>";

    const SKEMO = array(
        "name" => "korektado",
        "strict" => true,
        "schema" => array(
            "type" => "object",
            "additionalProperties" => false,
            "required" => array("respondoj", "konkludo"),
            "properties" => array(
                "respondoj" => array(
                    "type" => "array",
                    "items" => array(
                        "type" => "object",
                        "additionalProperties" => false,
                        "required" => array("id", "gxusta", "korekto"),
                        "properties" => array(
                            "id" => array("type" => "string"),
                            "gxusta" => array("type" => "boolean"),
                            "korekto" => array("type" => "string"),
                        ),
                    ),
                ),
                "konkludo" => array("type" => "string"),
            ),
        ),
    );

    private $bdd;
    private $urlracine;
    private $sxlosilo;
    private $modelo;
    private $tagaLimo;
    private $korektanto = false;

    public function __construct(PDO $bdd, string $urlracine, ?string $sxlosilo = null, ?string $modelo = null, ?float $tagaLimo = null) {
        $this->bdd = $bdd;
        $this->urlracine = $urlracine;
        $this->sxlosilo = $sxlosilo !== null && trim($sxlosilo) !== "" ? trim($sxlosilo) : null;
        $this->modelo = $modelo ?: self::MODELO;
        $this->tagaLimo = $tagaLimo !== null ? $tagaLimo : self::TAGA_LIMO;
    }

    // Avec les réglages de config.php.
    public static function elAgordoj(PDO $bdd): self {
        global $urlracine, $OPENROUTER_KEY, $IA_MODELO, $IA_TAGA_LIMO;
        return new self($bdd, (string)$urlracine, isset($OPENROUTER_KEY) ? $OPENROUTER_KEY : null,
            isset($IA_MODELO) ? $IA_MODELO : null, isset($IA_TAGA_LIMO) ? (float)$IA_TAGA_LIMO : null);
    }

    // Le compte du correcteur IA (ligne de personoj), ou null s'il n'existe pas.
    public function korektanto(): ?array {
        if ($this->korektanto === false) {
            $demando = $this->bdd->prepare("SELECT * FROM personoj WHERE enirnomo = ?");
            $demando->execute(array(self::ENIRNOMO));
            $this->korektanto = $demando->fetch(PDO::FETCH_ASSOC) ?: null;
        }
        return $this->korektanto;
    }

    public static function estasIa(?array $korektanto): bool {
        return $korektanto !== null && isset($korektanto["enirnomo"]) && $korektanto["enirnomo"] === self::ENIRNOMO;
    }

    // Leçon envoyée au correcteur IA : à corriger (de nouveau si elle était déjà passée).
    public function enviciigi(int $persono_id, int $leciono_id): void {
        $this->bdd->prepare("INSERT INTO ia_korektadoj (persono_id, leciono_id, stato, provoj, kreita) VALUES (?, ?, 'atendas', 0, NOW())
            ON DUPLICATE KEY UPDATE stato = 'atendas', provoj = 0, eraro = NULL, kreita = NOW(), farita = NULL")
            ->execute(array($persono_id, $leciono_id));
    }

    // Dépense du jour (dollars), essais ratés compris.
    public function tagaKosto(): float {
        return (float)$this->bdd->query("SELECT COALESCE(SUM(kosto), 0) FROM ia_korektadoj WHERE lasta_provo >= CURDATE()")->fetchColumn();
    }

    // Corrige les leçons en attente, les plus anciennes d'abord. Renvoie une ligne de compte rendu par leçon.
    public function traktiAtendantajn(int $limo = 10): array {
        $raporto = array();
        // après un échec, nouvel essai 5 min plus tard, puis 10 min : une courte panne ne fait pas passer à un bénévole
        $demando = $this->bdd->prepare("SELECT * FROM ia_korektadoj WHERE stato = 'atendas'
            AND (lasta_provo IS NULL OR lasta_provo < NOW() - INTERVAL (5 * provoj) MINUTE) ORDER BY kreita LIMIT ".(int)$limo);
        $demando->execute();
        $vicoj = $demando->fetchAll(PDO::FETCH_ASSOC);
        if ($vicoj && $this->sxlosilo === null) { // rien à signaler tant qu'aucune leçon n'attend
            $this->averti("sen-sxlosilo-".date("Y-m-d"), "Correction par IA : pas de clé OpenRouter",
                "<p>Des leçons attendent la correction par IA, mais \$OPENROUTER_KEY n'est pas défini dans config.php.</p>");
            return array("pas de clé OpenRouter (\$OPENROUTER_KEY dans config.php)");
        }
        foreach ($vicoj as $vico) {
            if ($this->tagaKosto() >= $this->tagaLimo) {
                $raporto[] = "plafond du jour atteint (".$this->tagaLimo." \$) : les leçons suivantes attendent demain";
                $this->averti("plafond-".date("Y-m-d"), "Correction par IA : plafond du jour atteint",
                    "<p>La dépense du jour a atteint le plafond de ".$this->tagaLimo." \$ (\$IA_TAGA_LIMO dans config.php). "
                    ."Les leçons en attente seront corrigées demain.</p><p>Pour les corriger aujourd'hui, relevez le plafond.</p>");
                break;
            }
            $raporto[] = $this->korekti($vico);
        }
        return $raporto;
    }

    // Remet en attente les leçons en échec (après un ajout de crédit, un changement de modèle…). Renvoie leur nombre.
    public function relanci(): int {
        $demando = $this->bdd->prepare("UPDATE ia_korektadoj SET stato = 'atendas', provoj = 0, lasta_provo = NULL WHERE stato = 'malsukcesis'");
        $demando->execute();
        return $demando->rowCount();
    }

    // Corrige une leçon de la file (ligne de ia_korektadoj). Renvoie une ligne de compte rendu.
    public function korekti(array $vico): string {
        $persono_id = (int)$vico["persono_id"];
        $leciono_id = (int)$vico["leciono_id"];
        $nomo = "élève ".$persono_id.", leçon ".$leciono_id;
        $leciono = $this->leciono($persono_id, $leciono_id);
        if ($leciono === null) {
            $this->bdd->prepare("UPDATE ia_korektadoj SET stato = 'malplena', farita = NOW() WHERE id = ?")->execute(array($vico["id"]));
            return $nomo." : aucune réponse, rien à corriger";
        }
        // un administrateur a pu entre-temps attribuer un autre correcteur
        $demando = $this->bdd->prepare("SELECT korektanto FROM nuna_kurso WHERE studanto = ? AND kurso = ?");
        $demando->execute(array($persono_id, $leciono["kurso"]));
        $korektanto = $this->korektanto();
        if (!$korektanto || (int)$demando->fetchColumn() !== (int)$korektanto["id"]) {
            $this->bdd->prepare("UPDATE ia_korektadoj SET stato = 'transdonita' WHERE id = ?")->execute(array($vico["id"]));
            return $nomo." : l'élève n'a plus le correcteur IA, leçon laissée à son correcteur";
        }
        if (!isset(self::KURSOJ[$leciono["kurso"]])) {
            return $nomo." : ".$this->malsukcesi($vico, $leciono, "le cours ".$leciono["kurso"]." n'est pas encore corrigé par l'IA");
        }
        $this->bdd->prepare("UPDATE ia_korektadoj SET provoj = provoj + 1, lasta_provo = NOW(), modelo = ? WHERE id = ?")
            ->execute(array($this->modelo, $vico["id"]));
        $provoj = (int)$vico["provoj"] + 1;

        $respondo = null;
        try {
            $respondo = $this->peti($leciono["por_modelo"]);
            $korektado = $this->analizi($respondo["respondo"], array_keys($leciono["mapo"]));
        } catch (RuntimeException $e) {
            $this->bdd->prepare("UPDATE ia_korektadoj SET eraro = ?, kosto = COALESCE(kosto, 0) + ? WHERE id = ?")
                ->execute(array(mb_substr($e->getMessage(), 0, 2000), $respondo ? $this->kosto($respondo["respondo"]) : 0, $vico["id"]));
            if ($provoj >= self::MAKS_PROVOJ) {
                $vico["provoj"] = $provoj;
                return $nomo." : ".$this->malsukcesi($vico, $leciono, $e->getMessage());
            }
            return $nomo." : échec, nouvel essai plus tard (".$e->getMessage().")";
        }

        $this->registri($leciono, $korektado, $persono_id, $leciono_id);
        $uzo = isset($respondo["respondo"]["usage"]) ? $respondo["respondo"]["usage"] : array();
        $this->bdd->prepare("UPDATE ia_korektadoj SET stato = 'farita', farita = NOW(), eraro = NULL, provizanto = ?,
            kosto = COALESCE(kosto, 0) + ?, tokens_eniro = ?, tokens_eliro = ?, sekundoj = ? WHERE id = ?")
            ->execute(array(
                isset($respondo["respondo"]["provider"]) ? mb_substr((string)$respondo["respondo"]["provider"], 0, 100) : null,
                $this->kosto($respondo["respondo"]),
                isset($uzo["prompt_tokens"]) ? (int)$uzo["prompt_tokens"] : null,
                isset($uzo["completion_tokens"]) ? (int)$uzo["completion_tokens"] : null,
                $respondo["sekundoj"],
                $vico["id"],
            ));
        protokolo($persono_id, "CORRECTION IA", "leçon ".$leciono["kurso"]." ".$leciono["numero"]." corrigée par ".$this->modelo);
        return $nomo." : corrigée en ".$respondo["sekundoj"]." s, ".$this->kosto($respondo["respondo"])." \$";
    }

    // La leçon telle que la voit le modèle (sans nom ni adresse de l'élève), et pour chaque question envoyée
    // (r1, r2…) la réponse de l'élève en base et le nombre de points de la question. Null s'il n'y a aucune réponse.
    public function leciono(int $persono_id, int $leciono_id): ?array {
        $demando = $this->bdd->prepare("SELECT l.kurso, l.numero, l.titolo AS leciono_titolo, le.titolo AS lecionero_titolo,
                e.id AS ekzerco_id, e.komando, e.komando_detalo, e.ekzemplo, e.typo,
                er.demando, er.respondmodelo, er.respondo AS modelo, er.normaligita, er.poentoj, r.id AS respondo_id, r.respondo
            FROM lecionoj l JOIN lecioneroj le ON le.leciono_id = l.id JOIN ekzercoj e ON e.lecionero_id = le.id
            JOIN ekzerceroj er ON er.ekzerco_id = e.id
            JOIN respondoj r ON r.ekzercero_id = er.id AND r.persono_id = ?
            WHERE l.id = ? AND (r.forigita = 0 OR r.forigita IS NULL) AND TRIM(r.respondo) <> ''
            ORDER BY le.ordo, e.id, er.numero, r.id");
        $demando->execute(array($persono_id, $leciono_id));
        $vicoj = $demando->fetchAll(PDO::FETCH_ASSOC);
        if (!$vicoj) {
            return null;
        }
        $ekzercoj = array();
        $mapo = array();
        $lasta = null;
        foreach ($vicoj as $v) {
            if ($lasta !== $v["ekzerco_id"]) {
                $ekzercoj[] = array(
                    "sekcio" => self::senHtml($v["lecionero_titolo"]),
                    "tipo" => $v["typo"],
                    "komando" => self::senHtml($v["komando"]),
                    "komando_detalo" => self::senHtml($v["komando_detalo"]),
                    "ekzemplo" => self::senHtml($v["ekzemplo"]),
                    "demandoj" => array(),
                );
                $lasta = $v["ekzerco_id"];
            }
            $id = "r".(count($mapo) + 1);
            $mapo[$id] = array("respondo_id" => (int)$v["respondo_id"], "poentoj" => (int)$v["poentoj"]);
            $ekzercoj[count($ekzercoj) - 1]["demandoj"][] = array(
                "id" => $id,
                "demando" => self::senHtml($v["demando"]),
                "modelo" => self::senHtml($v["respondmodelo"]) ?: self::senHtml($v["modelo"]),
                "akceptataj" => $v["normaligita"] ? explode("|", $v["normaligita"]) : null,
                "respondo" => self::tondi(trim((string)$v["respondo"])),
            );
        }
        $kurso = $vicoj[0]["kurso"];
        $teksto = $this->legajxo($leciono_id);
        return array(
            "kurso" => $kurso,
            "numero" => (int)$vicoj[0]["numero"],
            "mapo" => $mapo,
            "por_modelo" => array(
                "kurso" => isset(self::KURSOJ[$kurso]) ? self::KURSOJ[$kurso] : $kurso,
                "leciono" => (int)$vicoj[0]["numero"],
                "titolo" => self::senHtml($vicoj[0]["leciono_titolo"]),
            ) + ($teksto !== null ? array("teksto" => $teksto) : array()) + array(
                "ekzercoj" => $ekzercoj,
            ),
        );
    }

    // Texte de lecture de la leçon (première section « Rakonto » ou « Legaĵo »), en texte brut ; null s'il n'y en a pas.
    private function legajxo(int $leciono_id): ?string {
        $demando = $this->bdd->prepare("SELECT titolo, enhavo FROM lecioneroj WHERE leciono_id = ? ORDER BY ordo");
        $demando->execute(array($leciono_id));
        foreach ($demando->fetchAll(PDO::FETCH_ASSOC) as $v) {
            if (in_array(self::senHtml($v["titolo"]), self::TEKSTAJ_SEKCIOJ, true)) {
                $teksto = self::senHtml(preg_replace('/<\/(p|h\d|li)>/i', "\n", (string)$v["enhavo"]));
                return $teksto === null ? null : preg_replace("/\n{3,}/", "\n\n", preg_replace("/[ \t]*\n[ \t]*/", "\n", $teksto));
            }
        }
        return null;
    }

    // Appel à OpenRouter. Renvoie ['respondo' => réponse décodée, 'sekundoj' => durée] ; RuntimeException en cas d'erreur.
    private function peti(array $por_modelo): array {
        $korpo = array(
            "model" => $this->modelo,
            "messages" => array(
                array("role" => "system", "content" => file_get_contents(__DIR__."/ia-konsigno.md")),
                array("role" => "user", "content" => json_encode($por_modelo, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT)),
            ),
            "response_format" => array("type" => "json_schema", "json_schema" => self::SKEMO),
            // la réflexion du modèle compte dans max_tokens : on la limite pour laisser la place à la correction
            // (sinon une longue leçon de Paŝoj peut être coupée, finish_reason « length »)
            "max_tokens" => 24000,
            "reasoning" => array("max_tokens" => 8000),
            "usage" => array("include" => true),
            // seulement des fournisseurs qui respectent le format demandé, ne gardent pas les données
            // et ne s'en servent pas pour l'entraînement
            "provider" => array("require_parameters" => true, "data_collection" => "deny"),
        );
        $ch = curl_init(self::URL);
        curl_setopt_array($ch, array(
            CURLOPT_POST => true,
            CURLOPT_POSTFIELDS => json_encode($korpo, JSON_UNESCAPED_UNICODE),
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_TIMEOUT => 300,
            CURLOPT_HTTPHEADER => array(
                "Authorization: Bearer ".$this->sxlosilo,
                "Content-Type: application/json",
                "X-Title: iKurso - correction par IA",
            ),
        ));
        $komenco = microtime(true);
        $teksto = curl_exec($ch);
        $kodo = (int)curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $eraro = curl_error($ch);
        curl_close($ch);
        if ($teksto === false) {
            throw new RuntimeException("OpenRouter injoignable : ".$eraro);
        }
        $respondo = json_decode($teksto, true);
        if ($kodo !== 200 || !is_array($respondo) || isset($respondo["error"])) {
            $mesagxo = is_array($respondo) && isset($respondo["error"]["message"]) ? $respondo["error"]["message"] : mb_substr($teksto, 0, 300);
            throw new RuntimeException("OpenRouter ".$kodo." : ".$mesagxo);
        }
        return array("respondo" => $respondo, "sekundoj" => round(microtime(true) - $komenco, 1));
    }

    // La correction rendue par le modèle, vérifiée : une entrée par question envoyée, et une conclusion.
    private function analizi(array $respondo, array $idoj): array {
        $teksto = isset($respondo["choices"][0]["message"]["content"]) ? trim((string)$respondo["choices"][0]["message"]["content"]) : "";
        if (strpos($teksto, "```") === 0) {
            $teksto = trim(preg_replace('/^```(json)?|```$/', "", $teksto));
        }
        $korektado = json_decode($teksto, true);
        if (!is_array($korektado) || !isset($korektado["respondoj"]) || !is_array($korektado["respondoj"])
            || !isset($korektado["konkludo"]) || !is_string($korektado["konkludo"])) {
            $fino = isset($respondo["choices"][0]["finish_reason"]) ? $respondo["choices"][0]["finish_reason"] : "?";
            throw new RuntimeException("réponse illisible (finish_reason ".$fino.")");
        }
        $respondoj = array();
        foreach ($korektado["respondoj"] as $r) {
            if (is_array($r) && isset($r["id"], $r["gxusta"]) && is_bool($r["gxusta"])) {
                $respondoj[(string)$r["id"]] = array("gxusta" => $r["gxusta"], "korekto" => isset($r["korekto"]) ? (string)$r["korekto"] : "");
            }
        }
        $mankas = array_diff($idoj, array_keys($respondoj));
        if ($mankas) {
            throw new RuntimeException(count($mankas)." réponse(s) sans correction");
        }
        return array("respondoj" => $respondoj, "konkludo" => $korektado["konkludo"]);
    }

    private function registri(array $leciono, array $korektado, int $persono_id, int $leciono_id): void {
        $datumoj = array();
        foreach ($leciono["mapo"] as $id => $m) {
            $k = $korektado["respondoj"][$id];
            $datumoj[$m["respondo_id"]] = array(
                "gxusta" => $k["gxusta"],
                "korekto" => trim($k["korekto"]) === "" ? null : self::alHtml($k["korekto"]),
                // question notée : tous les points si la réponse est juste, aucun sinon
                "poentoj" => $m["poentoj"] > 0 ? ($k["gxusta"] ? $m["poentoj"] : 0) : null,
            );
        }
        $konkludo = trim($korektado["konkludo"]) === "" ? null : "<p>".self::alHtml($korektado["konkludo"])."</p>";
        (new KorektadoAPI($this->bdd, $this->urlracine))->registri($this->korektanto(), $persono_id, $leciono["kurso"],
            $leciono["numero"], $leciono_id, $datumoj, self::ENKONDUKO, $konkludo, true, "novakorektadoIA.html");
    }

    // La leçon reste en échec, les administrateurs sont prévenus.
    private function malsukcesi(array $vico, array $leciono, string $kialo): string {
        $persono_id = (int)$vico["persono_id"];
        $this->bdd->prepare("UPDATE ia_korektadoj SET stato = 'malsukcesis', eraro = ? WHERE id = ?")
            ->execute(array(mb_substr($kialo, 0, 2000), $vico["id"]));
        protokolo($persono_id, "CORRECTION IA", "échec : ".$kialo);
        $studanto = apartigiPersonon($persono_id);
        $radiko = rtrim($this->urlracine, "/");
        $h = function ($t) { return htmlspecialchars((string)$t, ENT_QUOTES, "UTF-8"); };
        $this->averti(null, "Correction par IA : échec pour ".$studanto["enirnomo"],
            "<p>La correction par IA de la leçon ".$h($leciono["kurso"])." ".$h($leciono["numero"])." de <strong>".$h($studanto["enirnomo"])."</strong> a échoué"
            .((int)$vico["provoj"] > 0 ? " après ".(int)$vico["provoj"]." essais" : "").".</p>"
            ."<p>Cause : ".$h($kialo)."</p>"
            ."<p>La leçon reste au correcteur IA, en attente. Vous pouvez :</p><ul>"
            ."<li>attribuer un correcteur bénévole depuis la <a href=\"".$h($radiko."/administri.php?celpersono_id=".$persono_id)."\">fiche de l'élève</a>, puis le prévenir ;</li>"
            ."<li>ou corriger la cause (crédit OpenRouter épuisé, modèle indisponible, clé…) puis relancer les leçons en échec : "
            ."<code>php cron/ia_korektado.php --relancer</code>.</li></ul>"
            ."<p><a href=\"".$h($radiko."/vidiLecionon.php?numleciono=".$leciono["numero"]."&kurso=".$leciono["kurso"]."&studanto=".$persono_id)."\">Voir la leçon</a></p>");
        return "échec (".$kialo."), administrateurs prévenus";
    }

    // Mail aux administrateurs ; avec une clé, une seule fois (par exemple une fois par jour pour le plafond).
    private function averti(?string $sxlosilo, string $temo, string $html): void {
        if ($sxlosilo !== null) {
            $dosiero = sys_get_temp_dir()."/ikurso-ia-".$sxlosilo;
            if (file_exists($dosiero)) {
                return;
            }
            touch($dosiero);
        }
        $enhavo = "<html><head><meta charset=\"utf-8\"></head><body style=\"font-family:Verdana,Arial,sans-serif;font-size:13px\">"
            .$html."</body></html>";
        foreach ($this->bdd->query("SELECT retadreso FROM personoj WHERE rajtoj = 'A' AND retadreso <> ''")->fetchAll(PDO::FETCH_COLUMN) as $retadreso) {
            mailViaSES($retadreso, $temo, $enhavo);
        }
    }

    private function kosto(array $respondo): float {
        return isset($respondo["usage"]["cost"]) ? (float)$respondo["usage"]["cost"] : 0.0;
    }

    private static function tondi(string $respondo): string {
        $longeco = mb_strlen($respondo);
        if ($longeco <= self::MAKS_LONGECO) {
            return $respondo;
        }
        return mb_substr($respondo, 0, self::MAKS_LONGECO)."\n[… réponse coupée : ".$longeco." caractères au total]";
    }

    private static function senHtml(?string $t): ?string {
        if ($t === null) {
            return null;
        }
        $t = preg_replace('/<br\s*\/?>/i', "\n", $t);
        $t = trim(html_entity_decode(strip_tags($t), ENT_QUOTES | ENT_HTML5, "UTF-8"));
        return $t === "" ? null : $t;
    }

    // texte du modèle en HTML ; sans les caractères hors du plan de base (émojis) : la connexion à la base est en utf8 sur 3 octets
    private static function alHtml(string $t): string {
        $t = preg_replace('/[\x{10000}-\x{10FFFF}]/u', "", trim($t));
        return nl2br(htmlspecialchars(trim($t), ENT_NOQUOTES, "UTF-8"), false);
    }
}
