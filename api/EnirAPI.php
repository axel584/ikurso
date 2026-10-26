<?php
// EnirAPI.php - Retrouver le compte qui se connecte, par son identifiant ou son adresse e-mail (issue #516).
// Utilisé par ajax/eniri.php (fenêtre de connexion du site) et AuthentificationAPI::login().

class EnirAPI {
    const KOLUMNOJ = "id, aktivigita, pasvorto_md5, enirnomo, rajtoj, retadreso, personnomo, familinomo";

    private $bdd;

    public function __construct(PDO $bdd) {
        $this->bdd = $bdd;
    }

    // Compte correspondant à ce qu'a saisi la personne, ou null. Le contrôle de l'activation et du
    // mot de passe reste à l'appelant (le mot de passe sert seulement à départager les doublons).
    // Les invités (#1092) n'ont ni e-mail ni mot de passe : ils ne sont jamais proposés.
    public function trovi(string $identigilo, string $pasvorto): ?array {
        // L'identifiant d'abord : certains anciens identifiants sont l'adresse e-mail d'un autre compte.
        $demando = $this->bdd->prepare("SELECT " . self::KOLUMNOJ . " FROM personoj WHERE enirnomo = ? AND rajtoj <> 'G'");
        $demando->execute(array($identigilo));
        $persono = $demando->fetch(PDO::FETCH_ASSOC);
        if ($persono || strpos($identigilo, "@") === false) {
            return $persono ?: null;
        }

        // Puis l'adresse e-mail. Elle est unique depuis qu'on le vérifie à l'inscription, mais de vieux
        // comptes la partagent : on prend celui dont le mot de passe correspond, le plus récemment utilisé.
        $demando = $this->bdd->prepare("SELECT " . self::KOLUMNOJ . " FROM personoj
            WHERE LOWER(TRIM(retadreso)) = LOWER(TRIM(?)) AND rajtoj <> 'G' ORDER BY lasteniro DESC, id DESC");
        $demando->execute(array($identigilo));
        $personoj = $demando->fetchAll(PDO::FETCH_ASSOC);
        foreach ($personoj as $kandidato) {
            if (hash_equals((string)$kandidato["pasvorto_md5"], md5($pasvorto))) {
                return $kandidato;
            }
        }
        return $personoj ? $personoj[0] : null;
    }
}
