<?php
// GoogleAPI.php - Inscription et connexion avec un compte Google (#119).
//
// Le bouton « Continuer avec Google » (Google Identity Services) remet au navigateur, ou à l'application, un jeton
// d'identité signé par Google (JWT RS256). Le serveur en vérifie la signature avec les clés publiques de Google,
// l'émetteur, le destinataire (notre Client ID), l'expiration et l'adresse vérifiée, puis :
// - retrouve le compte par l'identifiant Google (sub), sinon par l'adresse e-mail (le compte Google lui est relié) ;
// - sinon crée le compte, déjà activé (Google a vérifié l'adresse), avec un identifiant provisoire : l'élève choisit
//   le sien juste après (elektiIdentigilon.php, ou l'écran de l'application), enirnomo_elektota vaut 1 d'ici là.
//
// config.php : $GOOGLE_CLIENT_ID (Client ID web, aussi destinataire des jetons de l'application Android),
// $GOOGLE_CLIENT_IDS (autres Client ID acceptés, facultatif) et $GOOGLE_CERTS (adresse ou fichier des clés publiques ;
// par défaut celles de Google, les tests e2e y mettent leurs propres clés).

require_once __DIR__ . "/AgordojAPI.php";

class GoogleAPI {
    const CERTS = "https://www.googleapis.com/oauth2/v1/certs";
    const ELDONANTOJ = array("accounts.google.com", "https://accounts.google.com");
    const PROVIZORA = "google_";
    // tolérance d'horloge entre Google et le serveur
    const DERIVO = 300;

    private $bdd;

    public function __construct(PDO $bdd) {
        $this->bdd = $bdd;
    }

    // Client ID web, pour le bouton du site ; "" si la connexion Google n'est pas configurée.
    public static function klientoId(): string {
        global $GOOGLE_CLIENT_ID;
        return isset($GOOGLE_CLIENT_ID) ? (string)$GOOGLE_CLIENT_ID : "";
    }

    public static function aktiva(): bool {
        return self::klientoId() !== "";
    }

    // Contenu du jeton s'il est valide (sub, email, given_name, family_name…), sinon null.
    public function kontroli(string $jxetono): ?array {
        if (!self::aktiva()) {
            return null;
        }
        $partoj = explode(".", $jxetono);
        if (count($partoj) !== 3) {
            return null;
        }
        $kapo = json_decode(self::base64url($partoj[0]), true);
        $enhavo = json_decode(self::base64url($partoj[1]), true);
        if (!is_array($kapo) || !is_array($enhavo) || ($kapo["alg"] ?? "") !== "RS256" || !isset($kapo["kid"])) {
            return null;
        }
        $atestilo = $this->sxlosiloj()[(string)$kapo["kid"]] ?? null;
        $publika = $atestilo !== null ? openssl_pkey_get_public($atestilo) : false;
        if ($publika === false
            || openssl_verify($partoj[0] . "." . $partoj[1], self::base64url($partoj[2]), $publika, OPENSSL_ALGO_SHA256) !== 1) {
            return null;
        }
        $nun = time();
        if (!in_array($enhavo["iss"] ?? "", self::ELDONANTOJ, true)
            || !in_array($enhavo["aud"] ?? "", self::klientoj(), true)
            || !is_numeric($enhavo["exp"] ?? null) || $enhavo["exp"] + self::DERIVO < $nun
            || (isset($enhavo["iat"]) && is_numeric($enhavo["iat"]) && $enhavo["iat"] - self::DERIVO > $nun)
            || !isset($enhavo["sub"]) || !preg_match('/^[0-9A-Za-z_-]{1,64}$/', (string)$enhavo["sub"])
            || ($enhavo["email_verified"] ?? false) !== true || !isset($enhavo["email"])) {
            return null;
        }
        return $enhavo;
    }

    // Compte de cette personne, créé si besoin : ["persono" => ligne personoj, "nova" => bool].
    public function konto(array $enhavo): array {
        $sub = (string)$enhavo["sub"];
        $retadreso = strtolower(trim((string)$enhavo["email"]));

        $persono = $this->trovi("google_id = ?", $sub);
        if (!$persono) {
            // même adresse : le compte existant est relié au compte Google, sans doublon
            $persono = $this->trovi("LOWER(TRIM(retadreso)) = ?", $retadreso);
            if ($persono) {
                $demando = $this->bdd->prepare("UPDATE personoj SET google_id = ?, aktivigita = 1 WHERE id = ?");
                $demando->execute(array($sub, $persono["id"]));
                $this->protokolo((int)$persono["id"], "GOOGLE", $persono["enirnomo"] . " a relié son compte Google");
                return array("persono" => $this->trovi("id = ?", $persono["id"]), "nova" => false);
            }
            return array("persono" => $this->krei($sub, $retadreso, $enhavo), "nova" => true);
        }
        if ((int)$persono["aktivigita"] === 0) {
            $demando = $this->bdd->prepare("UPDATE personoj SET aktivigita = 1 WHERE id = ?");
            $demando->execute(array($persono["id"]));
            $persono["aktivigita"] = 1;
        }
        return array("persono" => $persono, "nova" => false);
    }

    // Identifiant proposé à l'élève : son prénom, sinon le début de son adresse, sans accents ni espaces,
    // suivi d'un numéro s'il est déjà pris.
    public function proponi(int $persono_id): string {
        $persono = $this->trovi("id = ?", $persono_id);
        $bazo = "";
        foreach (array((string)($persono["personnomo"] ?? ""), strstr((string)($persono["retadreso"] ?? ""), "@", true) ?: "") as $fonto) {
            $bazo = self::simpligi($fonto);
            if (mb_strlen($bazo) >= 3) {
                break;
            }
        }
        if (mb_strlen($bazo) < 3) {
            $bazo = "lernanto";
        }
        $bazo = mb_substr($bazo, 0, 26);
        for ($n = 1; $n < 1000; $n++) {
            $propono = $n === 1 ? $bazo : $bazo . $n;
            if (!$this->okupita($propono, $persono_id)) {
                return $propono;
            }
        }
        return $bazo . random_int(1000, 9999);
    }

    // Enregistre l'identifiant choisi. Renvoie un message d'erreur, ou null si c'est fait.
    public function elekti(int $persono_id, string $enirnomo): ?string {
        $enirnomo = trim($enirnomo);
        if ($enirnomo === "") {
            return "Merci de choisir un identifiant";
        }
        if (strpos($enirnomo, "@") !== false) {
            return "Merci de choisir un identifiant qui ne soit pas un e-mail car il serait visible par les autres élèves";
        }
        if (mb_strlen($enirnomo) > 32) {
            return "L'identifiant ne doit pas dépasser 32 caractères";
        }
        if (stripos($enirnomo, self::PROVIZORA) === 0 || stripos($enirnomo, "gasto_") === 0) {
            return "Merci de choisir un autre identifiant";
        }
        if ($this->okupita($enirnomo, $persono_id)) {
            return "Un compte existe déjà avec cet identifiant";
        }
        $demando = $this->bdd->prepare("UPDATE personoj SET enirnomo = ?, enirnomo_elektota = 0 WHERE id = ?");
        try {
            $demando->execute(array($enirnomo, $persono_id));
        } catch (PDOException $e) {
            // pris entre-temps (clé unique)
            return "Un compte existe déjà avec cet identifiant";
        }
        $this->protokolo($persono_id, "GOOGLE", $enirnomo . " a choisi son identifiant");
        return null;
    }

    public function elektota(int $persono_id): bool {
        $demando = $this->bdd->prepare("SELECT enirnomo_elektota FROM personoj WHERE id = ?");
        $demando->execute(array($persono_id));
        return (int)$demando->fetchColumn() === 1;
    }

    public function protokolo(int $persono_id, string $kategorio, string $teksto): void {
        $demando = $this->bdd->prepare("INSERT INTO protokolo (persono_id, horo, ip, kategorio, teksto) VALUES (?, NOW(), ?, ?, ?)");
        $demando->execute(array($persono_id, $_SERVER["REMOTE_ADDR"] ?? "", $kategorio, $teksto));
    }

    private function krei(string $sub, string $retadreso, array $enhavo): array {
        $personnomo = mb_substr(trim((string)($enhavo["given_name"] ?? "")), 0, 32);
        $familinomo = mb_substr(trim((string)($enhavo["family_name"] ?? "")), 0, 32);
        $demando = $this->bdd->prepare("INSERT INTO personoj (ekdato, lasteniro, enirnomo, enirnomo_elektota, retadreso,
                personnomo, familinomo, rajtoj, aktivigita, google_id)
            VALUES (NOW(), NOW(), ?, 1, ?, ?, ?, 'P', 1, ?)");
        $demando->execute(array(self::PROVIZORA . bin2hex(random_bytes(8)), $retadreso,
            $personnomo !== "" ? $personnomo : null, $familinomo !== "" ? $familinomo : null, $sub));
        $persono_id = (int)$this->bdd->lastInsertId();
        (new AgordojAPI($this->bdd))->kreiDefauxltajn($persono_id);
        $this->protokolo($persono_id, "COMPTE ACTIF", $retadreso . " s'est inscrit avec son compte Google");
        return $this->trovi("id = ?", $persono_id);
    }

    // $kondicxo est une constante de cette classe, jamais une valeur reçue
    private function trovi(string $kondicxo, $valoro): ?array {
        $demando = $this->bdd->prepare("SELECT id, enirnomo, enirnomo_elektota, rajtoj, retadreso, personnomo, familinomo,
                aktivigita, pasvorto_md5
            FROM personoj WHERE " . $kondicxo . " AND rajtoj <> 'G' ORDER BY lasteniro DESC, id DESC LIMIT 1");
        $demando->execute(array($valoro));
        $persono = $demando->fetch(PDO::FETCH_ASSOC);
        return $persono ?: null;
    }

    private function okupita(string $enirnomo, int $krom_id): bool {
        $demando = $this->bdd->prepare("SELECT 1 FROM personoj WHERE enirnomo = ? AND id <> ?");
        $demando->execute(array($enirnomo, $krom_id));
        return (bool)$demando->fetchColumn();
    }

    private static function simpligi(string $teksto): string {
        $teksto = strtolower(iconv("UTF-8", "ASCII//TRANSLIT//IGNORE", $teksto) ?: "");
        return preg_replace('/[^a-z0-9]/', "", $teksto);
    }

    private static function klientoj(): array {
        global $GOOGLE_CLIENT_IDS;
        $klientoj = array(self::klientoId());
        if (isset($GOOGLE_CLIENT_IDS) && is_array($GOOGLE_CLIENT_IDS)) {
            $klientoj = array_merge($klientoj, array_map("strval", $GOOGLE_CLIENT_IDS));
        }
        return array_values(array_filter($klientoj, fn($k) => $k !== ""));
    }

    // Clés publiques de Google ({kid: certificat PEM}), gardées une heure dans le dossier temporaire.
    private function sxlosiloj(): array {
        global $GOOGLE_CERTS;
        $fonto = isset($GOOGLE_CERTS) && $GOOGLE_CERTS !== "" ? (string)$GOOGLE_CERTS : self::CERTS;
        if (!preg_match('#^https?://#', $fonto)) {
            $json = @file_get_contents($fonto);
            return is_string($json) ? (json_decode($json, true) ?: array()) : array();
        }
        $kasxmemoro = sys_get_temp_dir() . "/ikurso-google-certs-" . md5($fonto) . ".json";
        if (is_file($kasxmemoro) && filemtime($kasxmemoro) > time() - 3600) {
            $sxlosiloj = json_decode((string)file_get_contents($kasxmemoro), true);
            if (is_array($sxlosiloj) && $sxlosiloj) {
                return $sxlosiloj;
            }
        }
        $ch = curl_init($fonto);
        curl_setopt_array($ch, array(CURLOPT_RETURNTRANSFER => true, CURLOPT_TIMEOUT => 10));
        $json = curl_exec($ch);
        $kodo = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
        $sxlosiloj = is_string($json) && $kodo === 200 ? json_decode($json, true) : null;
        if (!is_array($sxlosiloj) || !$sxlosiloj) {
            error_log("GoogleAPI : clés publiques de Google injoignables (" . $kodo . ")");
            return array();
        }
        @file_put_contents($kasxmemoro, $json, LOCK_EX);
        return $sxlosiloj;
    }

    private static function base64url(string $teksto): string {
        return (string)base64_decode(strtr($teksto, "-_", "+/") . str_repeat("=", (4 - strlen($teksto) % 4) % 4));
    }
}
