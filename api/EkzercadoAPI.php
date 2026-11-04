<?php
// EkzercadoAPI.php - Exercices des sections pour l'élève (#1088) : questions sans les réponses attendues,
// réponses de l'élève et correction automatique d'une réponse (ajax/memkorektado.php et l'API lernado).
// Utilise kontroliRespondon(), normaligita() (util.php) et frazoPartoj(), frazoValoroj() (webui.inc.php).

class EkzercadoAPI {
    private $bdd;

    public function __construct(PDO $bdd) {
        $this->bdd = $bdd;
    }

    // Exercices placés dans le contenu d'une section par les marqueurs ##EKZERCO:N## ou ##EKZERCO:N:eo## (#1087),
    // dans leur ordre : [["id" => N, "lingvo" => "fr" | "eo"], …].
    public static function ekzercojEnEnhavo(string $enhavo): array {
        preg_match_all('~##EKZERCO:(\d+)(?::([a-z]+))?##~', $enhavo, $trovoj, PREG_SET_ORDER);
        return array_map(function ($t) {
            return array("id" => (int)$t[1], "lingvo" => isset($t[2]) && $t[2] !== "" ? $t[2] : "fr");
        }, $trovoj);
    }

    // Un exercice et ses questions, avec les réponses de l'élève et les corrections de son correcteur.
    // Jamais les réponses attendues (ekzerceroj.respondo, normaligita). $dosierujo : dossier du cours,
    // pour l'adresse des images (ekzerceroj.bildo est relatif à la page de la leçon).
    public function ekzerco(int $id, string $lingvo, int $persono_id, string $dosierujo): ?array {
        $demando = $this->bdd->prepare("SELECT id, komando, komando_detalo, ekzemplo, typo, x2u, korektebla FROM ekzercoj WHERE id = ?");
        $demando->execute(array($id));
        $ekzerco = $demando->fetch(PDO::FETCH_ASSOC);
        if (!$ekzerco) {
            return null;
        }
        // une seule réponse par question : la première enregistrée, celle qu'affiche la page (getEkzercon)
        $demandoj = $this->bdd->prepare("SELECT ee.id, ee.numero, ee.demando, ee.respondmodelo, ee.normaligita, ee.bildo, ee.poentoj,
                r.respondo, r.gxusta, r.korekto, r.poentoj AS lernantaj_poentoj
            FROM ekzerceroj ee
            LEFT JOIN respondoj r ON r.id = (SELECT MIN(r2.id) FROM respondoj r2 WHERE r2.ekzercero_id = ee.id AND r2.persono_id = ?)
            WHERE ee.ekzerco_id = ? AND ee.forigita = 0
            ORDER BY ee.numero");
        $demandoj->execute(array($persono_id, $id));
        $korektebla = (int)$ekzerco["korektebla"] === 1;
        $listo = array();
        foreach ($demandoj->fetchAll(PDO::FETCH_ASSOC) as $vico) {
            $listo[] = $this->demando($vico, $ekzerco["typo"], $korektebla, $dosierujo);
        }
        return array(
            "id" => (int)$ekzerco["id"],
            "lingvo" => $lingvo,
            "komando" => $ekzerco["komando"],
            "komando_detalo" => $ekzerco["komando_detalo"] !== "" ? $ekzerco["komando_detalo"] : null,
            "ekzemplo" => $ekzerco["ekzemplo"] !== "" ? $ekzerco["ekzemplo"] : null,
            "typo" => $ekzerco["typo"],
            "x2u" => (int)$ekzerco["x2u"] === 1,
            "korektebla" => $korektebla,
            "demandoj" => $listo,
        );
    }

    private function demando(array $vico, string $typo, bool $korektebla, string $dosierujo): array {
        $teksto = $vico["demando"];
        $elektoj = null;
        // QCM d'examen : « Kiun anoncon vi povas elekti? <qcm>la unuan / la duan</qcm> », choix gardés tels quels
        // (avec leurs espaces) car c'est la valeur enregistrée comme réponse
        if (preg_match('~<qcm>(.*)</qcm>~s', $teksto, $qcm)) {
            $elektoj = explode("/", $qcm[1]);
            $teksto = trim(str_replace($qcm[0], "", $teksto));
        }
        $partoj = null;
        $valoroj = null;
        // phrase à trous (plenigu) ou à menus (elektlisto) : la réponse est la phrase complète
        if ($typo == "plenigu" || $typo == "elektlisto") {
            $partoj = array_map(function ($p) {
                if ($p[0] == "teksto") {
                    return array("tipo" => "teksto", "teksto" => $p[1]);
                }
                return $p[0] == "truo" ? array("tipo" => "truo") : array("tipo" => "elekto", "elektoj" => $p[1]);
            }, frazoPartoj($teksto, $typo));
            $valoroj = $vico["respondo"] !== null ? frazoValoroj(frazoPartoj($teksto, $typo), (string)$vico["respondo"]) : array();
        }
        return array(
            "id" => (int)$vico["id"],
            "numero" => (int)$vico["numero"],
            "demando" => $teksto,
            "elektoj" => $elektoj,
            "partoj" => $partoj,
            "respondmodelo" => $vico["respondmodelo"] !== null && $vico["respondmodelo"] !== "" ? $vico["respondmodelo"] : null,
            "bildo" => $vico["bildo"] !== "" ? $dosierujo."/".$vico["bildo"] : null,
            "poentoj" => $vico["poentoj"] !== null ? (int)$vico["poentoj"] : null,
            // une question sans corrigé type n'est pas corrigée automatiquement, même dans un exercice qui l'est
            "korektebla" => $korektebla && trim((string)$vico["normaligita"]) !== "",
            "respondo" => $vico["respondo"],
            "valoroj" => $valoroj,
            "gxusta" => $vico["gxusta"] !== null ? (int)$vico["gxusta"] === 1 : null,
            "korekto" => $vico["korekto"] !== null && $vico["korekto"] !== "" ? $vico["korekto"] : null,
            "lernantaj_poentoj" => $vico["lernantaj_poentoj"] !== null ? (int)$vico["lernantaj_poentoj"] : null,
        );
    }

    // Question d'un exercice qui n'est pas supprimée : ["korektebla" => exercice corrigé automatiquement], ou null.
    public function ekzercero(int $ekzercero_id): ?array {
        $demando = $this->bdd->prepare("SELECT ee.id, e.korektebla FROM ekzerceroj ee JOIN ekzercoj e ON e.id = ee.ekzerco_id
            WHERE ee.id = ? AND ee.forigita = 0");
        $demando->execute(array($ekzercero_id));
        $vico = $demando->fetch(PDO::FETCH_ASSOC);
        return $vico ? array("korektebla" => (int)$vico["korektebla"] === 1) : null;
    }

    // Enregistre la réponse de l'élève à une question et la corrige si l'exercice est corrigé automatiquement :
    // true (juste), false (fausse) ou null (non corrigée, y compris une question sans corrigé type).
    // La réponse est enregistrée échappée, comme elle est réaffichée telle quelle dans les pages.
    public function registri(int $persono_id, int $ekzercero_id, string $respondo, bool $korektebla): ?bool {
        $respondo = htmlspecialchars($respondo);
        $gxusta = null;
        if ($korektebla) {
            $demando = $this->bdd->prepare("SELECT normaligita FROM ekzerceroj WHERE id = ?");
            $demando->execute(array($ekzercero_id));
            $bonaRespondo = trim((string)$demando->fetchColumn());
            if ($bonaRespondo !== "") {
                $gxusta = kontroliRespondon($respondo, $bonaRespondo) ? 1 : 0;
            }
        }
        $ekzistas = $this->bdd->prepare("SELECT COUNT(*) FROM respondoj WHERE persono_id = ? AND ekzercero_id = ?");
        $ekzistas->execute(array($persono_id, $ekzercero_id));
        $parametroj = array('persono_id' => $persono_id, 'ekzercero_id' => $ekzercero_id, 'respondo' => $respondo,
            'normaligita' => normaligita($respondo), 'gxusta' => $gxusta);
        if ((int)$ekzistas->fetchColumn() === 0) {
            $this->bdd->prepare("INSERT INTO respondoj (persono_id, dato, ekzercero_id, respondo, normaligita, gxusta)
                VALUES (:persono_id, NOW(), :ekzercero_id, :respondo, :normaligita, :gxusta)")->execute($parametroj);
        } else {
            $this->bdd->prepare("UPDATE respondoj SET respondo = :respondo, normaligita = :normaligita, gxusta = :gxusta
                WHERE persono_id = :persono_id AND ekzercero_id = :ekzercero_id")->execute($parametroj);
        }
        return $gxusta === null ? null : $gxusta === 1;
    }
}
