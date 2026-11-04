<?php
// LernadoAPI.php - API de l'élève (api.php?path=lernado/…, #1088) : tout ce qu'il faut pour suivre un cours
// sans page PHP (application mobile). Description complète dans api/openapi.yaml.
// L'élève est identifié par JWTAuth::validateJWT() (Bearer de auth/token, ou session du site).
// api.php inclut util.php avant cette classe : connexion $bdd, fonctions de correction et d'envoi de mails.

require_once __DIR__ . "/JWTAuth.php";
require_once __DIR__ . "/KursaEnhavoAPI.php";
require_once __DIR__ . "/EkzercadoAPI.php";
require_once __DIR__ . "/ProgresoAPI.php";
require_once __DIR__ . "/SendadoAPI.php";
require_once __DIR__ . "/VortojAPI.php";

class LernadoAPI {
    private $bdd;
    private $urlracine;
    private $persono_id;

    public function __construct(PDO $bdd, string $urlracine) {
        $this->bdd = $bdd;
        $this->urlracine = $urlracine;
    }

    public function handleRequest(): void {
        $persono_id = (int)JWTAuth::getPersonoIdFromJWT();
        $persono = $persono_id > 0 ? apartigiPersonon($persono_id) : false;
        if (!$persono || $persono["rajtoj"] == "G") {
            $this->eraro(401, "Non authentifié");
        }
        $this->persono_id = $persono_id;
        $metodo = $_SERVER['REQUEST_METHOD'];
        $s = array_values(array_filter(explode('/', isset($_GET['path']) ? $_GET['path'] : ''), 'strlen'));
        $n = count($s);
        try {
            if ($metodo === 'GET' && $n === 2 && $s[1] === 'kursoj') {
                $this->respondi(200, array("kursoj" => (new KursaEnhavoAPI($this->bdd))->kursoj($persono_id)));
            } elseif ($metodo === 'GET' && $n === 3 && $s[1] === 'kursoj') {
                $this->kurso($this->kursoKodo($s[2]));
            } elseif ($metodo === 'GET' && $n === 3 && $s[1] === 'sekcioj') {
                $this->sekcio((int)$s[2]);
            } elseif ($metodo === 'POST' && $n === 4 && $s[1] === 'sekcioj' && $s[3] === 'fini') {
                $this->finiSekcion((int)$s[2]);
            } elseif ($metodo === 'POST' && $n === 2 && $s[1] === 'respondoj') {
                $this->respondo();
            } elseif ($n === 5 && $s[1] === 'lecionoj') {
                $this->leciono($metodo, $this->kursoKodo($s[2]), (int)$s[3], $s[4]);
            } elseif ($metodo === 'GET' && $n === 2 && $s[1] === 'vortoj') {
                $this->vortoj();
            } elseif ($metodo === 'PUT' && $n === 3 && $s[1] === 'vortoj') {
                $this->forigiVorton((int)$s[2]);
            } elseif ($metodo === 'GET' && $n === 2 && $s[1] === 'revizio') {
                $this->respondi(200, array("vortoj" => (new VortojAPI($this->bdd))->revizio($persono_id)));
            } elseif ($metodo === 'POST' && $n === 2 && $s[1] === 'revizio') {
                $this->revizioRespondo();
            }
            $this->eraro(404, "Endpoint non trouvé");
        } catch (Throwable $e) {
            error_log("api lernado : " . $e->getMessage());
            $this->eraro(500, "Erreur interne du serveur");
        }
    }

    private function kursoKodo(string $kodo): string {
        if (!isset(KursaEnhavoAPI::KURSOJ[$kodo])) {
            $this->eraro(404, "Cours inconnu");
        }
        return $kodo;
    }

    private function kurso(string $kodo): void {
        $this->respondi(200, array("kodo" => $kodo, "lecionoj" => (new KursaEnhavoAPI($this->bdd))->lecionoj($kodo, $this->persono_id)));
    }

    private function sekcio(int $id): void {
        $sekcio = (new KursaEnhavoAPI($this->bdd))->sekcio($id, $this->persono_id);
        if ($sekcio === null) {
            $this->eraro(404, "Section introuvable");
        }
        $this->respondi(200, $sekcio);
    }

    // « Terminé ! » : section finie, ses mots entrent dans la révision du vocabulaire, et la section où aller ensuite.
    private function finiSekcion(int $id): void {
        $enhavo = new KursaEnhavoAPI($this->bdd);
        $sekcio = $enhavo->sekcio($id, $this->persono_id);
        if ($sekcio === null) {
            $this->eraro(404, "Section introuvable");
        }
        $korpo = $this->korpo();
        $progreso = new ProgresoAPI($this->bdd);
        $progreso->finiSekcion($this->persono_id, $id, isset($korpo["ekdato"]) && is_int($korpo["ekdato"]) ? $korpo["ekdato"] : null);
        $novajVortoj = aldoniNovajnVortojnEnMemorilo($this->persono_id);
        $sekva = $progreso->sekvaSekcio($this->persono_id, $sekcio["kurso"], $sekcio["leciono"], $sekcio["ordo"]);
        $this->respondi(200, array(
            "novaj_vortoj" => (int)$novajVortoj,
            "sekva" => $sekva !== null ? $enhavo->sekcioId($sekcio["kurso"], $sekcio["leciono"], $sekva["ordo"]) : null,
        ));
    }

    // Réponse à une question, enregistrée et corrigée tout de suite si l'exercice est corrigé automatiquement.
    private function respondo(): void {
        $korpo = $this->korpo();
        $ekzercero_id = isset($korpo["ekzercero_id"]) && is_int($korpo["ekzercero_id"]) ? $korpo["ekzercero_id"] : 0;
        $respondo = isset($korpo["respondo"]) && is_string($korpo["respondo"]) ? $korpo["respondo"] : "";
        if ($respondo === "") {
            $this->eraro(400, "Paramètres 'ekzercero_id' et 'respondo' requis");
        }
        $ekzercado = new EkzercadoAPI($this->bdd);
        $ekzercero = $ekzercado->ekzercero($ekzercero_id);
        if ($ekzercero === null) {
            $this->eraro(404, "Question introuvable");
        }
        $gxusta = $ekzercado->registri($this->persono_id, $ekzercero_id, $respondo, $ekzercero["korektebla"]);
        $this->respondi(200, array("ekzercero_id" => $ekzercero_id, "gxusta" => $gxusta));
    }

    private function leciono(string $metodo, string $kurso, int $numero, string $ago): void {
        $enhavo = new KursaEnhavoAPI($this->bdd);
        $lastaSekcio = $enhavo->lastaSekcio($kurso, $numero);
        if ($lastaSekcio === null) {
            $this->eraro(404, "Leçon introuvable");
        }
        if ($metodo === 'GET' && $ago === 'resumo') {
            // ce qui manque avant d'envoyer la leçon (#1022)
            $progreso = new ProgresoAPI($this->bdd);
            $mankantaj = array();
            foreach ($progreso->mankantajRespondoj($this->persono_id, $kurso, $numero) as $ekzerco_id => $e) {
                $mankantaj[] = array("ekzerco_id" => $ekzerco_id, "komando" => $e["komando"], "ordo" => $e["ordo"],
                    "numeroj" => array_map('intval', $e["numeroj"]));
            }
            $this->respondi(200, array(
                "nefinitaj_sekcioj" => array_map(function ($s) {
                    return array("ordo" => (int)$s["ordo"], "titolo" => $s["titolo"]);
                }, $progreso->nefinitajSekcioj($this->persono_id, $kurso, $numero)),
                "mankantaj_respondoj" => $mankantaj,
            ));
        } elseif ($metodo === 'GET' && $ago === 'korekto') {
            $this->respondi(200, $enhavo->korekto($kurso, $numero, $this->persono_id));
        } elseif ($metodo === 'POST' && $ago === 'sendi') {
            $korpo = $this->korpo();
            // le commentaire part dans le mail du correcteur, en HTML
            $komento = isset($korpo["komento"]) && is_string($korpo["komento"]) ? htmlspecialchars($korpo["komento"], ENT_QUOTES, "UTF-8") : "";
            $rezulto = (new SendadoAPI($this->bdd, $this->urlracine))->sendi($this->persono_id, $kurso, $numero, $lastaSekcio, $komento, null);
            if ($rezulto === "ne_aktivigita") {
                $this->eraro(403, "Ce compte n'est pas validé, merci de cliquer sur le lien reçu par email");
            }
            if ($rezulto === "neniu_respondo") {
                $this->eraro(422, "Aucune réponse dans cette leçon");
            }
            $this->respondi(200, array("rezulto" => $rezulto));
        }
        $this->eraro(404, "Endpoint non trouvé");
    }

    private function vortoj(): void {
        $kurso = $this->kursoKodo(isset($_GET["kurso"]) ? (string)$_GET["kurso"] : "");
        $nivelo = isset($_GET["nivelo"]) ? (string)$_GET["nivelo"] : "";
        if ($nivelo !== "" && !isset(VortojAPI::NIVELOJ[$nivelo])) {
            $this->eraro(400, "Niveau inconnu");
        }
        $prefikso = isset($_GET["prefikso"]) ? (string)$_GET["prefikso"] : "";
        $vortoj = (new VortojAPI($this->bdd))->listo($kurso, $this->persono_id, $prefikso, $nivelo);
        $this->respondi(200, array("vortoj" => array_map(function ($v) {
            return array("id" => (int)$v["id"], "eo" => $v["eo"], "fr" => $v["fr"], "leciono" => (int)$v["numero"],
                "ordo" => (int)$v["ordo"], "nivelo" => $v["nivelo"], "sono" => $v["sono"]);
        }, $vortoj)));
    }

    // Retirer un mot de la révision, ou l'y remettre (#914).
    private function forigiVorton(int $vorto_id): void {
        $korpo = $this->korpo();
        if (!isset($korpo["forigita"]) || !is_bool($korpo["forigita"])) {
            $this->eraro(400, "Paramètre 'forigita' (booléen) requis");
        }
        if (!(new VortojAPI($this->bdd))->forigi($this->persono_id, $vorto_id, $korpo["forigita"])) {
            $this->eraro(404, "Mot introuvable");
        }
        $this->respondi(200, array("id" => $vorto_id, "forigita" => $korpo["forigita"]));
    }

    private function revizioRespondo(): void {
        $korpo = $this->korpo();
        $vorto_id = isset($korpo["vorto_id"]) && is_int($korpo["vorto_id"]) ? $korpo["vorto_id"] : 0;
        $respondo = isset($korpo["respondo"]) && is_string($korpo["respondo"]) ? $korpo["respondo"] : "";
        $rezulto = (new VortojAPI($this->bdd))->kontroli($this->persono_id, $vorto_id, $respondo);
        if ($rezulto === null) {
            $this->eraro(404, "Ce mot n'est pas dans votre révision");
        }
        $this->respondi(200, array("vorto_id" => $vorto_id, "gxusta" => $rezulto["gxusta"], "fr" => $rezulto["fr"],
            "bona_respondo" => $rezulto["bona_respondo"], "sono" => $rezulto["sono"]));
    }

    private function korpo(): array {
        $korpo = json_decode(file_get_contents('php://input'), true);
        return is_array($korpo) ? $korpo : array();
    }

    private function respondi(int $kodo, $datumoj): void {
        http_response_code($kodo);
        echo json_encode($datumoj, JSON_UNESCAPED_UNICODE);
        exit;
    }

    private function eraro(int $kodo, string $mesagxo): void {
        $this->respondi($kodo, array("error" => $mesagxo));
    }
}
