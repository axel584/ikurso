<?php
// AgordojAPI.php - Préférences d'envoi des mails non sollicités (#920).
// Une ligne par personne et par réglage, toujours présente : rajto = 1 si la personne reçoit le mail.

class AgordojAPI {
    // réglage => description affichée
    const AGORDOJ = array(
        "RAPPEL" => "les messages de rappel pour m'inviter à continuer le cours",
        "SAVIEZVOUS" => "les anecdotes « Le saviez-vous ? » après chaque journée de travail",
    );

    private $bdd;

    public function __construct(PDO $bdd) {
        $this->bdd = $bdd;
    }

    public static function ekzistas(string $agordo): bool {
        return array_key_exists($agordo, self::AGORDOJ);
    }

    // Lignes par défaut d'un nouveau compte (tous les mails acceptés).
    public function kreiDefauxltajn(int $persono_id): void {
        $demando = $this->bdd->prepare("INSERT IGNORE INTO personoj_agordoj (persono_id, agordo, rajto, dato) VALUES (?, ?, 1, NOW())");
        foreach (array_keys(self::AGORDOJ) as $agordo) {
            $demando->execute(array($persono_id, $agordo));
        }
    }

    // [réglage => bool] ; un réglage sans ligne compte comme refusé.
    public function legi(int $persono_id): array {
        $agordoj = array_fill_keys(array_keys(self::AGORDOJ), false);
        $demando = $this->bdd->prepare("SELECT agordo, rajto FROM personoj_agordoj WHERE persono_id = ?");
        $demando->execute(array($persono_id));
        foreach ($demando->fetchAll(PDO::FETCH_ASSOC) as $vico) {
            if (isset($agordoj[$vico["agordo"]])) {
                $agordoj[$vico["agordo"]] = (bool)$vico["rajto"];
            }
        }
        return $agordoj;
    }

    public function havasRajton(int $persono_id, string $agordo): bool {
        $agordoj = $this->legi($persono_id);
        return !empty($agordoj[$agordo]);
    }

    // Modifie un réglage. Renvoie true si la valeur a changé.
    // personoj.stop_rappel est tenu à jour tant que l'ancien code peut revenir.
    public function sxangxi(int $persono_id, string $agordo, bool $rajto): bool {
        if (!self::ekzistas($agordo)) {
            return false;
        }
        $antauxe = $this->havasRajton($persono_id, $agordo);
        $demando = $this->bdd->prepare("INSERT INTO personoj_agordoj (persono_id, agordo, rajto, dato) VALUES (?, ?, ?, NOW())
            ON DUPLICATE KEY UPDATE dato = IF(rajto <=> VALUES(rajto), dato, NOW()), rajto = VALUES(rajto)");
        $demando->execute(array($persono_id, $agordo, $rajto ? 1 : 0));
        if ($agordo == "RAPPEL") {
            $demando = $this->bdd->prepare("UPDATE personoj SET stop_rappel = ? WHERE id = ?");
            $demando->execute(array($rajto ? "N" : "J", $persono_id));
        }
        return $antauxe != $rajto;
    }

    // Signature du lien de désinscription : un clic suffit, sans connexion,
    // mais on ne peut pas fabriquer le lien d'une autre personne.
    public static function sxlosilo(int $persono_id, string $agordo): string {
        return hash_hmac("sha256", $persono_id."|".$agordo, self::sekreto());
    }

    public static function kontroliSxlosilon(int $persono_id, string $agordo, string $sxlosilo): bool {
        return self::ekzistas($agordo) && hash_equals(self::sxlosilo($persono_id, $agordo), $sxlosilo);
    }

    public static function malaboniLigilo(int $persono_id, string $agordo): string {
        global $urlracine;
        return rtrim($urlracine, "/")."/malaboni.php?id=".$persono_id."&agordo=".$agordo."&sxlosilo=".self::sxlosilo($persono_id, $agordo);
    }

    // Clé dérivée de $JWT_SECRET (config.php), propre aux liens de désinscription.
    private static function sekreto(): string {
        global $JWT_SECRET;
        if (empty($JWT_SECRET)) {
            throw new RuntimeException("JWT_SECRET n'est pas défini dans config.php");
        }
        return hash_hmac("sha256", "malaboni", $JWT_SECRET);
    }
}
