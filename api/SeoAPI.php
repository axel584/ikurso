<?php
// SeoAPI.php - Référencement : titres des sections, adresse de référence des pages et plan du site (#1076, #1077).

class SeoAPI {
    // Cours ouverts aux moteurs de recherche, et dossier de leurs pages.
    // Paŝoj al plena posedo reste exclu (robots.txt) : les droits sur le livre ne sont pas certains.
    const KURSOJ = array("CG" => "fr/cge/", "GR" => "fr/gerda/");

    // Pages publiques hors leçons, pour le plan du site, sous leur adresse de référence (kanonaUrl : sans index.php).
    const PAGXOJ = array("", "fr/cge/intro.php", "fr/gerda/", "fr/gerda/lasu00.php", "fr/gerda/vocabula.php",
        "fr/elsxutoj.php", "helpo.php?section=enskribo", "helpo.php?section=kurso", "helpo.php?section=kielskribi",
        "helpo.php?section=kajposte", "helpo.php?section=kielhelpi", "kionova.php", "kiujniestas.php", "doc/DLEK.pdf");

    private $bdd;

    public function __construct(PDO $bdd) {
        $this->bdd = $bdd;
    }

    // Titre d'une section de leçon, sans balises (« Exemples de phrases »), ou null.
    public function sekcioTitolo(string $kurso, int $leciono, int $ordo): ?string {
        $demando = $this->bdd->prepare("SELECT le.titolo FROM lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id
            WHERE l.kurso = ? AND l.numero = ? AND le.ordo = ?");
        $demando->execute(array($kurso, $leciono, $ordo));
        $titolo = $demando->fetchColumn();
        return $titolo === false ? null : trim(html_entity_decode(strip_tags($titolo), ENT_QUOTES, "UTF-8"));
    }

    // Adresses (relatives à la racine du site) de toutes les sections des cours ouverts aux moteurs.
    public function lecionojUrl(): array {
        $demando = $this->bdd->query("SELECT l.kurso, l.retpagxo, le.ordo FROM lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id
            WHERE l.kurso IN ('" . implode("','", array_keys(self::KURSOJ)) . "') AND l.retpagxo <> ''
            ORDER BY l.kurso, l.numero, le.ordo");
        $urloj = array();
        foreach ($demando->fetchAll(PDO::FETCH_ASSOC) as $vico) {
            $urloj[] = self::KURSOJ[$vico["kurso"]] . $vico["retpagxo"] . "?section=" . (int)$vico["ordo"];
        }
        return $urloj;
    }

    // Adresse de référence d'une page : sans index.php ni paramètres, sauf le numéro de section
    // des leçons et la rubrique de l'aide, qui changent vraiment le contenu. Une leçon sans
    // paramètre affiche sa section 1 : la page passe alors $sekcio pour avoir la même adresse.
    public static function kanonaUrl(string $urlracine, string $requestUri, ?string $sekcio = null): string {
        $vojo = parse_url($requestUri, PHP_URL_PATH) ?: "/";
        $vojo = preg_replace('#/index\.php$#', '/', $vojo);
        parse_str((string)parse_url($requestUri, PHP_URL_QUERY), $parametroj);
        $gardi = array();
        $sekcio = $sekcio ?? ($parametroj["section"] ?? null);
        if ($sekcio !== null && preg_match('/^[a-z0-9]+$/', (string)$sekcio)) {
            $gardi["section"] = (string)$sekcio;
        }
        return rtrim($urlracine, "/") . $vojo . ($gardi ? "?" . http_build_query($gardi) : "");
    }
}
