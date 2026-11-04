<?php
// RenovigajSxlosilojAPI.php - Refresh tokens de l'application mobile (#1088), table renovigaj_sxlosiloj.
// Le jeton n'est rendu qu'une fois, à sa création ; la base n'en garde que l'empreinte SHA-256.
// Chaque utilisation le remplace par un nouveau (rotation). Un jeton déjà remplacé qui revient
// a probablement été volé : tous les jetons de la personne sont alors révoqués.

class RenovigajSxlosilojAPI {
    const TTL = 5184000; // 60 jours

    private $bdd;

    public function __construct(PDO $bdd) {
        $this->bdd = $bdd;
    }

    private static function hakajxo(string $sxlosilo): string {
        return hash('sha256', $sxlosilo);
    }

    public function krei(int $persono_id): string {
        $sxlosilo = rtrim(strtr(base64_encode(random_bytes(32)), '+/', '-_'), '=');
        $demando = $this->bdd->prepare("INSERT INTO renovigaj_sxlosiloj (persono_id, hakajxo, kreita, eksvalidigxo)
            VALUES (?, ?, NOW(), DATE_ADD(NOW(), INTERVAL ? SECOND))");
        $demando->execute(array($persono_id, self::hakajxo($sxlosilo), self::TTL));
        return $sxlosilo;
    }

    // Échange un refresh token contre un nouveau : ["persono_id" => …, "sxlosilo" => nouveau jeton], ou null
    // si le jeton est inconnu, expiré ou révoqué.
    public function renovigi(string $sxlosilo): ?array {
        $demando = $this->bdd->prepare("SELECT id, persono_id, uzita, revokita, eksvalidigxo < NOW() AS eksvalida
            FROM renovigaj_sxlosiloj WHERE hakajxo = ?");
        $demando->execute(array(self::hakajxo($sxlosilo)));
        $vico = $demando->fetch(PDO::FETCH_ASSOC);
        if (!$vico || $vico["revokita"] !== null || $vico["eksvalida"]) {
            return null;
        }
        $persono_id = (int)$vico["persono_id"];
        if ($vico["uzita"] !== null) {
            $this->revokiCxiujn($persono_id);
            return null;
        }
        // une seule requête marque le jeton utilisé : deux appels simultanés n'obtiennent pas chacun un jeton
        $marki = $this->bdd->prepare("UPDATE renovigaj_sxlosiloj SET uzita = NOW() WHERE id = ? AND uzita IS NULL");
        $marki->execute(array($vico["id"]));
        if ($marki->rowCount() !== 1) {
            return null;
        }
        return array("persono_id" => $persono_id, "sxlosilo" => $this->krei($persono_id));
    }

    // Déconnexion : révoque le jeton. Renvoie false s'il est inconnu.
    public function revoki(string $sxlosilo): bool {
        $demando = $this->bdd->prepare("UPDATE renovigaj_sxlosiloj SET revokita = NOW() WHERE hakajxo = ? AND revokita IS NULL");
        $demando->execute(array(self::hakajxo($sxlosilo)));
        return $demando->rowCount() === 1;
    }

    public function revokiCxiujn(int $persono_id): void {
        $demando = $this->bdd->prepare("UPDATE renovigaj_sxlosiloj SET revokita = NOW() WHERE persono_id = ? AND revokita IS NULL");
        $demando->execute(array($persono_id));
    }
}
