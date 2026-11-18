<?php
// EnirAPI.php - Retrouver le compte qui se connecte, par son identifiant ou son adresse e-mail (issue #516).
// Utilisé par ajax/eniri.php (fenêtre de connexion du site) et AuthentificationAPI::login().

class EnirAPI {
    const KOLUMNOJ = "id, aktivigita, pasvorto_md5, enirnomo, rajtoj, retadreso, personnomo, familinomo";

    private $bdd;

    public function __construct(PDO $bdd) {
        $this->bdd = $bdd;
    }

    // Le mot de passe saisi correspond-il à l'empreinte ? Les mots de passe passent par stripslashes() à l'inscription
    // et à la connexion (« mot\\passe » devient « motpasse ») ; la page d'inscription aligxi.php l'a longtemps oublié :
    // les comptes créés par elle avec une barre oblique inverse ont l'empreinte du mot de passe tel quel.
    public static function pasvortoGxustas(?string $md5, string $pasvorto): bool {
        if (!is_string($md5) || $md5 === "") {
            return false;
        }
        return hash_equals($md5, md5(stripslashes($pasvorto))) || hash_equals($md5, md5($pasvorto));
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
            if (self::pasvortoGxustas($kandidato["pasvorto_md5"], $pasvorto)) {
                return $kandidato;
            }
        }
        return $personoj ? $personoj[0] : null;
    }
}
