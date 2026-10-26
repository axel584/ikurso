<?php
// GastoAPI.php - Mode invité (#1092) : un visiteur sans compte fait les exercices comme un élève.
//
// À sa première action enregistrée (réponse, « Terminé ! »), une ligne personoj de droit G est créée
// et son id gardé en session dans $_SESSION["gasto_id"]. $_SESSION["persono_id"] reste réservé aux
// comptes connectés : le reste du site voit toujours un visiteur, avec le bouton CONNEXION.
// À l'inscription, la ligne de l'invité devient le compte ; à la connexion, elle est fusionnée dans le compte.

require_once __DIR__ . "/AgordojAPI.php";
require_once __DIR__ . "/KontoAPI.php";

class GastoAPI {
    const RAJTO = "G";

    private $bdd;

    public function __construct(PDO $bdd) {
        $this->bdd = $bdd;
    }

    // Élève dont les pages de cours affichent le travail : la personne connectée, sinon l'invité, sinon "".
    public static function lernantoId(): string {
        if (!empty($_SESSION["persono_id"])) {
            return (string)$_SESSION["persono_id"];
        }
        return !empty($_SESSION["gasto_id"]) ? (string)(int)$_SESSION["gasto_id"] : "";
    }

    // Comme lernantoId(), mais crée l'invité s'il n'existe pas encore : à n'appeler que pour enregistrer.
    // L'identifiant de session n'est pas régénéré ici : les appels parallèles (un par champ quitté)
    // attendent le verrou de l'ancienne session et créeraient chacun leur invité.
    public function akiriLernantoId(): int {
        if (!empty($_SESSION["persono_id"])) {
            return (int)$_SESSION["persono_id"];
        }
        $gasto_id = isset($_SESSION["gasto_id"]) ? (int)$_SESSION["gasto_id"] : 0;
        if ($gasto_id > 0 && $this->estasGasto($gasto_id)) {
            // lasteniro sert au nettoyage des invités inactifs
            $demando = $this->bdd->prepare("UPDATE personoj SET lasteniro = NOW() WHERE id = ?");
            $demando->execute(array($gasto_id));
            return $gasto_id;
        }
        $gasto_id = $this->krei();
        $_SESSION["gasto_id"] = $gasto_id;
        // pour la mesure d'audience : le JS envoie l'événement Matomo « Invité créé » (#1094)
        if (!headers_sent()) {
            header("X-Ikurso-Gasto: kreita");
        }
        return $gasto_id;
    }

    public function estasGasto(int $persono_id): bool {
        $demando = $this->bdd->prepare("SELECT 1 FROM personoj WHERE id = ? AND rajtoj = ?");
        $demando->execute(array($persono_id, self::RAJTO));
        return (bool)$demando->fetchColumn();
    }

    // Sans e-mail ni mot de passe et jamais activé : la connexion le refuse. enirnomo est obligatoire et unique.
    private function krei(): int {
        $demando = $this->bdd->prepare("INSERT INTO personoj (ekdato, enirnomo, retadreso, rajtoj, aktivigita) VALUES (NOW(), ?, '', ?, 0)");
        $demando->execute(array("gasto_" . bin2hex(random_bytes(8)), self::RAJTO));
        return (int)$this->bdd->lastInsertId();
    }

    // Inscription d'un invité : sa ligne devient le compte, ses réponses et sa progression restent en place.
    // Le mot de passe est en MD5 comme pour les autres comptes, sinon la connexion le refuserait.
    public function konverti(int $gasto_id, string $enirnomo, string $pasvorto, string $retadreso, string $aktivigo): bool {
        $demando = $this->bdd->prepare("UPDATE personoj SET enirnomo = ?, pasvorto_md5 = ?, retadreso = ?, aktivigo = ?,
            rajtoj = 'P', ekdato = NOW(), lasteniro = NOW() WHERE id = ? AND rajtoj = ?");
        $demando->execute(array($enirnomo, md5($pasvorto), $retadreso, $aktivigo, $gasto_id, self::RAJTO));
        if ($demando->rowCount() !== 1) {
            return false;
        }
        (new AgordojAPI($this->bdd))->kreiDefauxltajn($gasto_id);
        return true;
    }

    // À la connexion ou à l'activation : le travail de l'invité de la session passe au compte.
    public function transdoniAlKonto(int $persono_id): void {
        $gasto_id = isset($_SESSION["gasto_id"]) ? (int)$_SESSION["gasto_id"] : 0;
        unset($_SESSION["gasto_id"]);
        $this->transdoni($gasto_id, $persono_id);
    }

    // Pareil quand l'invité a déjà été retiré de la session (connexion par l'API, voir SessionAuth::login).
    public function transdoni(int $gasto_id, int $persono_id): void {
        if ($gasto_id > 0 && $gasto_id !== $persono_id && $this->estasGasto($gasto_id)) {
            $this->kunfandi($gasto_id, $persono_id);
        }
    }

    // Quand l'invité et le compte ont répondu à la même question, on garde la réponse la plus récente,
    // sauf si celle du compte a déjà été corrigée. dato est remis à lui-même dans les UPDATE :
    // la colonne se met sinon à jour toute seule (ON UPDATE CURRENT_TIMESTAMP).
    // Tables en MyISAM, donc sans transaction : la ligne de l'invité est supprimée en dernier.
    private function kunfandi(int $gasto_id, int $persono_id): void {
        $this->ekzekuti("DELETE g FROM respondoj g JOIN respondoj p ON p.ekzercero_id = g.ekzercero_id AND p.persono_id = ?
            WHERE g.persono_id = ? AND (p.korekto IS NOT NULL OR p.dato >= g.dato)", array($persono_id, $gasto_id));
        $this->ekzekuti("DELETE p FROM respondoj p JOIN respondoj g ON g.ekzercero_id = p.ekzercero_id AND g.persono_id = ?
            WHERE p.persono_id = ?", array($gasto_id, $persono_id));
        $this->ekzekuti("UPDATE respondoj SET persono_id = ?, dato = dato WHERE persono_id = ?", array($persono_id, $gasto_id));

        $this->ekzekuti("DELETE g FROM personoj_lecioneroj g JOIN personoj_lecioneroj p ON p.lecionero_id = g.lecionero_id AND p.persono_id = ?
            WHERE g.persono_id = ?", array($persono_id, $gasto_id));
        $this->ekzekuti("UPDATE personoj_lecioneroj SET persono_id = ?, dato = dato WHERE persono_id = ?", array($persono_id, $gasto_id));

        $this->ekzekuti("DELETE g FROM personoj_vortoj g JOIN personoj_vortoj p ON p.vorto_id = g.vorto_id AND p.persono_id = ?
            WHERE g.persono_id = ?", array($persono_id, $gasto_id));
        $this->ekzekuti("UPDATE personoj_vortoj SET persono_id = ? WHERE persono_id = ?", array($persono_id, $gasto_id));
        $this->ekzekuti("UPDATE personoj_vortoj_respondoj SET persono_id = ?, dato = dato WHERE persono_id = ?", array($persono_id, $gasto_id));

        (new KontoAPI($this->bdd))->forigi($gasto_id);
    }

    // Invités sans activité depuis $monatoj mois, supprimés avec leurs données. Renvoie leur nombre.
    public function forigiNeaktivajn(int $monatoj): int {
        $demando = $this->bdd->prepare("SELECT id FROM personoj WHERE rajtoj = ? AND lasteniro < NOW() - INTERVAL ? MONTH");
        $demando->execute(array(self::RAJTO, $monatoj));
        $ids = $demando->fetchAll(PDO::FETCH_COLUMN);
        $konto = new KontoAPI($this->bdd);
        foreach ($ids as $id) {
            $konto->forigi((int)$id);
        }
        return count($ids);
    }

    private function ekzekuti(string $sql, array $parametroj): void {
        $demando = $this->bdd->prepare($sql);
        $demando->execute($parametroj);
    }
}
