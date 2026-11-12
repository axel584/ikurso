<?php
// KursaEnhavoAPI.php - Cours, leçons et sections vus par un élève, pour l'API de l'application (#1088) :
// progression, contenu d'une section (lecioneroj.enhavo, #1087) et correction d'une leçon par le correcteur.

require_once __DIR__ . "/ProgresoAPI.php";
require_once __DIR__ . "/EkzercadoAPI.php";

require_once __DIR__ . "/IaKorektadoAPI.php";

class KursaEnhavoAPI {
    // cours suivis avec l'application, et dossier de leurs pages (images des exercices)
    const KURSOJ = array("CG" => "fr/cge", "GR" => "fr/gerda", "PP" => "eo/ppp");

    private $bdd;

    // Titres et noms en texte : certains sont enregistrés avec des entités HTML (« Premi&egrave;re le&ccedil;on »),
    // que les pages du site affichent telles quelles mais pas l'application (#1089), et parfois des balises
    // (« Le féminin des noms : <i>-in</i> », sql/64) : on les enlève.
    public static function teksto(?string $html): string {
        return html_entity_decode(strip_tags((string)$html), ENT_QUOTES | ENT_HTML5, "UTF-8");
    }

    public function __construct(PDO $bdd) {
        $this->bdd = $bdd;
    }

    // Texte réservé au visiteur sans compte ou à l'élève connecté : <!--se nekonektita-->…<!--alie-->…<!--/se--> (#1087).
    public static function kondicxoj(string $html, bool $konektita): string {
        return preg_replace_callback('~<!--se nekonektita-->(.*?)(?:<!--alie-->(.*?))?<!--/se-->~s', function ($m) use ($konektita) {
            return $konektita ? (isset($m[2]) ? $m[2] : "") : $m[1];
        }, $html);
    }

    // Les trois cours, avec la progression de l'élève et son correcteur s'il en a un.
    public function kursoj(int $persono_id): array {
        $demando = $this->bdd->prepare("SELECT k.kodo, k.nomo,
                (SELECT COUNT(*) FROM lecionoj l WHERE l.kurso = k.kodo) AS lecionoj,
                (SELECT COUNT(*) FROM lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id WHERE l.kurso = k.kodo) AS sekcioj,
                (SELECT COUNT(DISTINCT pl.lecionero_id) FROM personoj_lecioneroj pl
                    JOIN lecioneroj le ON le.id = pl.lecionero_id JOIN lecionoj l ON l.id = le.leciono_id
                    WHERE l.kurso = k.kodo AND pl.persono_id = ?) AS finitaj_sekcioj,
                nk.stato, nk.nunleciono, p.enirnomo AS korektanto_enirnomo, p.personnomo AS korektanto_personnomo,
                e.elekto, e.atendas
            FROM kursoj k
            LEFT JOIN nuna_kurso nk ON nk.kurso = k.kodo AND nk.studanto = ?
            LEFT JOIN personoj p ON p.id = nk.korektanto
            LEFT JOIN korektadaj_elektoj e ON e.kurso = k.kodo AND e.persono_id = ?
            WHERE k.kodo IN ('CG', 'GR', 'PP')
            ORDER BY k.id");
        $demando->execute(array($persono_id, $persono_id, $persono_id));
        return array_map(function ($v) {
            return array(
                "kodo" => $v["kodo"],
                "nomo" => self::teksto($v["nomo"]),
                "lecionoj" => (int)$v["lecionoj"],
                "sekcioj" => (int)$v["sekcioj"],
                "finitaj_sekcioj" => (int)$v["finitaj_sekcioj"],
                "nuna_leciono" => $v["nunleciono"] !== null ? (int)$v["nunleciono"] : null,
                "stato" => $v["stato"],
                "korektanto" => $v["korektanto_enirnomo"] !== null
                    ? array("enirnomo" => $v["korektanto_enirnomo"], "personnomo" => $v["korektanto_personnomo"],
                        "ia" => $v["korektanto_enirnomo"] === IaKorektadoAPI::ENIRNOMO) : null,
                // mode de correction choisi sans correcteur attribué (#627) : sen (seul), konato (correcteur connu à retrouver)
                "elekto" => $v["korektanto_enirnomo"] === null && $v["elekto"] !== null
                    ? ((int)$v["atendas"] === 1 ? "konato" : ($v["elekto"] === "sen" ? "sen" : null)) : null,
            );
        }, $demando->fetchAll(PDO::FETCH_ASSOC));
    }

    // Leçons d'un cours et leurs sections, avec ce que l'élève a fini et envoyé.
    public function lecionoj(string $kurso, int $persono_id): array {
        $demando = $this->bdd->prepare("SELECT l.id AS leciono_id, l.numero, l.titolo AS leciono_titolo,
                le.id, le.ordo, le.titolo, le.tipo, le.dauxro, le.lasta,
                EXISTS (SELECT 1 FROM personoj_lecioneroj pl WHERE pl.lecionero_id = le.id AND pl.persono_id = ?) AS finita,
                pli.id IS NOT NULL AS sendita, IFNULL(pli.korektita, 0) AS korektita
            FROM lecionoj l
            JOIN lecioneroj le ON le.leciono_id = l.id
            LEFT JOIN personoj_lecionoj pli ON pli.leciono_id = l.id AND pli.persono_id = ?
            WHERE l.kurso = ?
            ORDER BY l.numero, le.ordo");
        $demando->execute(array($persono_id, $persono_id, $kurso));
        $stato = (new ProgresoAPI($this->bdd))->lecionojStato($persono_id, $kurso);
        $lecionoj = array();
        foreach ($demando->fetchAll(PDO::FETCH_ASSOC) as $v) {
            $numero = (int)$v["numero"];
            if (!isset($lecionoj[$numero])) {
                $lecionoj[$numero] = array(
                    "numero" => $numero,
                    "titolo" => self::teksto($v["leciono_titolo"]),
                    "stato" => isset($stato[$numero]) ? $stato[$numero] : null,
                    "sendita" => (bool)$v["sendita"],
                    "korektita" => (bool)$v["korektita"],
                    "sekcioj" => array(),
                );
            }
            $lecionoj[$numero]["sekcioj"][] = array(
                "id" => (int)$v["id"],
                "ordo" => (int)$v["ordo"],
                "titolo" => self::teksto($v["titolo"]),
                "tipo" => $v["tipo"],
                "dauxro" => $v["dauxro"] !== null ? (int)$v["dauxro"] : null,
                "lasta" => (int)$v["lasta"] === 1,
                "finita" => (bool)$v["finita"],
            );
        }
        return array_values($lecionoj);
    }

    // Une section : contenu HTML (adresses relatives à la racine du site, marqueurs ##EKZERCO##, ##QCM##, ##RESUMO##
    // laissés pour placer exercices, QCM et récapitulatif), ses exercices sans les réponses attendues, et les sections
    // voisines. null si la section n'existe pas ou n'appartient pas à un des trois cours.
    public function sekcio(int $lecionero_id, int $persono_id): ?array {
        $demando = $this->bdd->prepare("SELECT le.id, le.ordo, le.titolo, le.tipo, le.dauxro, le.lasta, le.enhavo,
                l.kurso, l.numero, l.titolo AS leciono_titolo,
                EXISTS (SELECT 1 FROM personoj_lecioneroj pl WHERE pl.lecionero_id = le.id AND pl.persono_id = ?) AS finita,
                (SELECT MAX(a.id) FROM lecioneroj a WHERE a.leciono_id = le.leciono_id AND a.ordo =
                    (SELECT MAX(b.ordo) FROM lecioneroj b WHERE b.leciono_id = le.leciono_id AND b.ordo < le.ordo)) AS antauxa,
                (SELECT MAX(a.id) FROM lecioneroj a WHERE a.leciono_id = le.leciono_id AND a.ordo =
                    (SELECT MIN(b.ordo) FROM lecioneroj b WHERE b.leciono_id = le.leciono_id AND b.ordo > le.ordo)) AS sekva
            FROM lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id
            WHERE le.id = ?");
        $demando->execute(array($persono_id, $lecionero_id));
        $v = $demando->fetch(PDO::FETCH_ASSOC);
        if (!$v || !isset(self::KURSOJ[$v["kurso"]])) {
            return null;
        }
        $enhavo = self::kondicxoj((string)$v["enhavo"], true);
        $ekzercado = new EkzercadoAPI($this->bdd);
        $ekzercoj = array();
        foreach (EkzercadoAPI::ekzercojEnEnhavo($enhavo) as $e) {
            $ekzerco = $ekzercado->ekzerco($e["id"], $e["lingvo"], $persono_id, self::KURSOJ[$v["kurso"]]);
            if ($ekzerco !== null) {
                $ekzercoj[] = $ekzerco;
            }
        }
        return array(
            "id" => (int)$v["id"],
            "kurso" => $v["kurso"],
            "leciono" => (int)$v["numero"],
            "leciono_titolo" => self::teksto($v["leciono_titolo"]),
            "ordo" => (int)$v["ordo"],
            "titolo" => self::teksto($v["titolo"]),
            "tipo" => $v["tipo"],
            "dauxro" => $v["dauxro"] !== null ? (int)$v["dauxro"] : null,
            "lasta" => (int)$v["lasta"] === 1,
            "finita" => (bool)$v["finita"],
            "antauxa" => $v["antauxa"] !== null ? (int)$v["antauxa"] : null,
            "sekva" => $v["sekva"] !== null ? (int)$v["sekva"] : null,
            "enhavo" => $enhavo,
            "ekzercoj" => $ekzercoj,
        );
    }

    // Section d'une leçon par son ordre : id, ou null.
    public function sekcioId(string $kurso, int $numero, int $ordo): ?int {
        $demando = $this->bdd->prepare("SELECT le.id FROM lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id
            WHERE l.kurso = ? AND l.numero = ? AND le.ordo = ?");
        $demando->execute(array($kurso, $numero, $ordo));
        $id = $demando->fetchColumn();
        return $id !== false ? (int)$id : null;
    }

    // Dernière section de la leçon (épilogue et envoi des exercices) : id, ou null si la leçon n'existe pas.
    public function lastaSekcio(string $kurso, int $numero): ?int {
        $demando = $this->bdd->prepare("SELECT le.id FROM lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id
            WHERE l.kurso = ? AND l.numero = ? ORDER BY le.ordo DESC LIMIT 1");
        $demando->execute(array($kurso, $numero));
        $id = $demando->fetchColumn();
        return $id !== false ? (int)$id : null;
    }

    // Leçon envoyée et sa correction : message d'introduction et de conclusion du correcteur, et pour chaque exercice
    // les réponses de l'élève avec, une fois corrigées, juste ou fausse, la correction et les points.
    // null si la leçon n'existe pas.
    public function korekto(string $kurso, int $numero, int $persono_id): ?array {
        $demando = $this->bdd->prepare("SELECT id FROM lecionoj WHERE kurso = ? AND numero = ?");
        $demando->execute(array($kurso, $numero));
        $leciono_id = $demando->fetchColumn();
        if ($leciono_id === false) {
            return null;
        }
        $demando = $this->bdd->prepare("SELECT dato, komentario, enkonduko, konkludo, korektita FROM personoj_lecionoj
            WHERE persono_id = ? AND leciono_id = ? ORDER BY id LIMIT 1");
        $demando->execute(array($persono_id, $leciono_id));
        $sendo = $demando->fetch(PDO::FETCH_ASSOC);
        $demando = $this->bdd->prepare("SELECT le.enhavo FROM lecioneroj le WHERE le.leciono_id = ? ORDER BY le.ordo");
        $demando->execute(array($leciono_id));
        $ekzercado = new EkzercadoAPI($this->bdd);
        $ekzercoj = array();
        foreach ($demando->fetchAll(PDO::FETCH_COLUMN) as $enhavo) {
            foreach (EkzercadoAPI::ekzercojEnEnhavo((string)$enhavo) as $e) {
                $ekzerco = $ekzercado->ekzerco($e["id"], $e["lingvo"], $persono_id, self::KURSOJ[$kurso]);
                if ($ekzerco !== null) {
                    $ekzercoj[] = $ekzerco;
                }
            }
        }
        return array(
            "kurso" => $kurso,
            "leciono" => $numero,
            "sendita" => $sendo ? $sendo["dato"] : null,
            "korektita" => $sendo ? (int)$sendo["korektita"] === 1 : false,
            "komento" => $sendo && $sendo["komentario"] !== "" ? $sendo["komentario"] : null,
            "enkonduko" => $sendo && $sendo["enkonduko"] !== "" ? $sendo["enkonduko"] : null,
            "konkludo" => $sendo && $sendo["konkludo"] !== "" ? $sendo["konkludo"] : null,
            "ekzercoj" => $ekzercoj,
        );
    }
}
