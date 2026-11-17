<?php
// QcmAPI.php - Réponses aux QCM des pages de cours (sql/88), pour repérer les questions les plus difficiles.
// POST api.php?path=qcm, appelé à chaque clic sur une proposition, par le site (js/ikurso.js) comme par
// l'application, élève connecté, invité ou simple visiteur : statistiques anonymes, sans l'élève.
// La réponse attendue et l'empreinte de la question sont lues dans la page elle-même (lecioneroj.enhavo,
// marqueur ##QCM:[json]## ou ##QCM_BILDOJ:[json]##) : le client ne dit que ce qu'il a choisi.
// Lecture : malfacilaj(), pour la page des statistiques statLauxQcm.php.

require_once __DIR__ . "/DauxrigoAPI.php";

class QcmAPI {
    const FONTOJ = array("retejo" => "R", "apo" => "A");
    const MAKS_PROVOJ = 50;

    private $bdd;

    public function __construct(PDO $bdd) {
        $this->bdd = $bdd;
    }

    public function handleRequest(): void {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            $this->respondi(405, array("error" => "Méthode non autorisée"));
        }
        $korpo = json_decode(file_get_contents('php://input'), true);
        $korpo = is_array($korpo) ? $korpo : array();
        $entjero = function (string $nomo) use ($korpo): int {
            return isset($korpo[$nomo]) && is_int($korpo[$nomo]) ? $korpo[$nomo] : 0;
        };
        $fonto = isset($korpo["fonto"]) && is_string($korpo["fonto"]) ? $korpo["fonto"] : "";
        try {
            $gxusta = $this->registri($entjero("lecionero_id"), $entjero("demando"), $entjero("propono"), $entjero("provo"), $fonto);
        } catch (Throwable $e) {
            error_log("api qcm : " . $e->getMessage());
            $this->respondi(500, array("error" => "Erreur interne du serveur"));
        }
        if ($gxusta === null) {
            $this->respondi(400, array("error" => "Question ou proposition inconnue"));
        }
        $this->respondi(200, array("gxusta" => $gxusta));
    }

    // Enregistre un clic ; rend vrai si la proposition est la bonne, null si la question ou la proposition n'existe pas.
    public function registri(int $lecionero_id, int $demando, int $propono, int $provo, string $fonto): ?bool {
        if (!isset(self::FONTOJ[$fonto]) || $provo < 1) {
            return null;
        }
        $demandoj = $this->demandojDeLecionero($lecionero_id);
        if ($demandoj === null || !isset($demandoj[$demando - 1])) {
            return null;
        }
        $d = $demandoj[$demando - 1];
        if ($propono < 1 || $propono > count($d["propositions"])) {
            return null;
        }
        $gxusta = $propono === (int)$d["reponse"];
        $peto = $this->bdd->prepare("INSERT INTO qcm_respondoj (lecionero_id, demando, spuro, propono, gxusta, provo, fonto)
            VALUES (?, ?, ?, ?, ?, ?, ?)");
        $peto->execute(array($lecionero_id, $demando, self::spuro($d), $propono, $gxusta ? 1 : 0,
            min($provo, self::MAKS_PROVOJ), self::FONTOJ[$fonto]));
        return $gxusta;
    }

    // Questions dont au moins $minimumo élèves ont donné un premier essai, de la plus difficile à la plus facile
    // (part de premiers essais faux). Seules comptent les réponses à la version actuelle de chaque question.
    // Pour chaque question : kurso, leciono, sekcio (ordo), titolo, url, demando, teksto, propositions, reponse,
    // unuaj (premiers essais), eraroj (premiers essais faux), klakoj (tous les clics), malgxustaj (mauvaises
    // propositions choisies, tous essais confondus : rang => nombre, de la plus choisie à la moins choisie).
    public function malfacilaj(int $minimumo = 1): array {
        $vicoj = $this->bdd->query("SELECT lecionero_id, demando, spuro, SUM(provo = 1) AS unuaj,
                SUM(provo = 1 AND gxusta = 0) AS eraroj, COUNT(*) AS klakoj
            FROM qcm_respondoj GROUP BY lecionero_id, demando, spuro")->fetchAll(PDO::FETCH_ASSOC);
        $malgxustaj = array();
        foreach ($this->bdd->query("SELECT lecionero_id, demando, spuro, propono, COUNT(*) AS n
            FROM qcm_respondoj WHERE gxusta = 0 GROUP BY lecionero_id, demando, spuro, propono") as $v) {
            $malgxustaj[$v["lecionero_id"] . "/" . $v["demando"] . "/" . $v["spuro"]][(int)$v["propono"]] = (int)$v["n"];
        }
        $sekcioj = array();
        $rezulto = array();
        foreach ($vicoj as $v) {
            $id = (int)$v["lecionero_id"];
            if (!array_key_exists($id, $sekcioj)) {
                $sekcioj[$id] = $this->sekcio($id);
            }
            $s = $sekcioj[$id];
            $d = $s !== null && isset($s["demandoj"][$v["demando"] - 1]) ? $s["demandoj"][$v["demando"] - 1] : null;
            // question disparue ou modifiée depuis : ses anciennes réponses ne comptent plus
            if ($d === null || self::spuro($d) !== $v["spuro"] || (int)$v["unuaj"] < $minimumo) {
                continue;
            }
            $m = isset($malgxustaj[$id . "/" . $v["demando"] . "/" . $v["spuro"]]) ? $malgxustaj[$id . "/" . $v["demando"] . "/" . $v["spuro"]] : array();
            arsort($m);
            $rezulto[] = array(
                "lecionero_id" => $id,
                "kurso" => $s["kurso"],
                "leciono" => $s["leciono"],
                "sekcio" => $s["ordo"],
                "titolo" => $s["titolo"],
                "url" => $s["url"],
                "demando" => (int)$v["demando"],
                "teksto" => isset($d["question"]) ? (string)$d["question"] : "",
                "bildo" => isset($d["bildo"]) ? (string)$d["bildo"] : "",
                "propositions" => array_map('strval', $d["propositions"]),
                "reponse" => (int)$d["reponse"],
                "unuaj" => (int)$v["unuaj"],
                "eraroj" => (int)$v["eraroj"],
                "klakoj" => (int)$v["klakoj"],
                "malgxustaj" => $m,
            );
        }
        usort($rezulto, function ($a, $b) {
            return [$b["eraroj"] / $b["unuaj"], $b["unuaj"]] <=> [$a["eraroj"] / $a["unuaj"], $a["unuaj"]];
        });
        return $rezulto;
    }

    // Questions du QCM d'une page (tableau JSON du marqueur), ou null s'il n'y en a pas.
    public static function demandoj(string $enhavo): ?array {
        if (!preg_match('~##(?:QCM_BILDOJ|QCM):(.*?)##~s', $enhavo, $m)) {
            return null;
        }
        $demandoj = json_decode($m[1], true);
        if (!is_array($demandoj)) {
            return null;
        }
        foreach ($demandoj as $d) {
            if (!is_array($d) || !isset($d["propositions"], $d["reponse"]) || !is_array($d["propositions"])) {
                return null;
            }
        }
        return array_values($demandoj);
    }

    public static function spuro(array $demando): string {
        return md5(json_encode(array(
            isset($demando["question"]) ? $demando["question"] : "",
            isset($demando["bildo"]) ? $demando["bildo"] : "",
            $demando["propositions"],
            (int)$demando["reponse"],
        ), JSON_UNESCAPED_UNICODE));
    }

    private function demandojDeLecionero(int $lecionero_id): ?array {
        $peto = $this->bdd->prepare("SELECT enhavo FROM lecioneroj WHERE id = ?");
        $peto->execute(array($lecionero_id));
        $enhavo = $peto->fetchColumn();
        return $enhavo === false ? null : self::demandoj((string)$enhavo);
    }

    private function sekcio(int $lecionero_id): ?array {
        $peto = $this->bdd->prepare("SELECT le.enhavo, le.ordo, le.titolo, l.kurso, l.numero, l.retpagxo
            FROM lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id WHERE le.id = ?");
        $peto->execute(array($lecionero_id));
        $v = $peto->fetch(PDO::FETCH_ASSOC);
        if (!$v) {
            return null;
        }
        $prefikso = isset(DauxrigoAPI::PREFIKSOJ[$v["kurso"]]) ? DauxrigoAPI::PREFIKSOJ[$v["kurso"]] : "";
        return array(
            "demandoj" => self::demandoj((string)$v["enhavo"]) ?? array(),
            "kurso" => $v["kurso"],
            "leciono" => (int)$v["numero"],
            "ordo" => (int)$v["ordo"],
            "titolo" => trim(html_entity_decode(strip_tags((string)$v["titolo"]), ENT_QUOTES, "UTF-8")),
            "url" => $prefikso . $v["retpagxo"] . "?section=" . (int)$v["ordo"],
        );
    }

    private function respondi(int $kodo, array $datumoj): void {
        http_response_code($kodo);
        echo json_encode($datumoj, JSON_UNESCAPED_UNICODE);
        exit;
    }
}
