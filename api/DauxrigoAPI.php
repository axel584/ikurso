<?php
// DauxrigoAPI.php - Où continuer le cours : la section qui suit la dernière section terminée par l'élève.
// Sert au bouton « Continuer le cours » de la fin de la révision du vocabulaire (site et application).
// À la fin d'un cours, on propose le cours suivant (cours élémentaire → Gerda malaperis → Paŝoj al plena posedo).

class DauxrigoAPI {
    const SEKVA_KURSO = array("CG" => "GR", "GR" => "PP");
    const PREFIKSOJ = array("CG" => "fr/cge/", "GR" => "fr/gerda/", "PP" => "eo/ppp/");

    private $bdd;

    public function __construct(PDO $bdd) {
        $this->bdd = $bdd;
    }

    // null si l'élève n'a encore terminé aucune section, ou s'il a fini le dernier cours.
    // Sinon : sekcio_id (lecioneroj.id, pour l'application), url (relative à la racine du site),
    // kurso, kurso_nomo, leciono (numéro), titolo (sans balises) et nova_kurso (vrai si c'est le cours suivant).
    public function sekva(int $persono_id): ?array {
        $demando = $this->bdd->prepare("SELECT le.leciono_id, le.ordo, l.kurso, l.numero
            FROM personoj_lecioneroj pl JOIN lecioneroj le ON le.id = pl.lecionero_id JOIN lecionoj l ON l.id = le.leciono_id
            WHERE pl.persono_id = ? ORDER BY pl.dato DESC LIMIT 1");
        $demando->execute(array($persono_id));
        $lasta = $demando->fetch(PDO::FETCH_ASSOC);
        if (!$lasta) {
            return null;
        }
        // section suivante de la même leçon
        $sekva = $this->unua("le.leciono_id = ? AND le.ordo > ?", array($lasta["leciono_id"], $lasta["ordo"]));
        // sinon première section de la leçon suivante
        if (!$sekva) {
            $sekva = $this->unua("l.kurso = ? AND l.numero = ?", array($lasta["kurso"], (int)$lasta["numero"] + 1));
        }
        // sinon début du cours suivant
        $nova = false;
        if (!$sekva && isset(self::SEKVA_KURSO[$lasta["kurso"]])) {
            $sekva = $this->unua("l.kurso = ? AND l.numero = 1", array(self::SEKVA_KURSO[$lasta["kurso"]]));
            $nova = true;
        }
        if (!$sekva || !isset(self::PREFIKSOJ[$sekva["kurso"]])) {
            return null;
        }
        return array(
            "sekcio_id" => (int)$sekva["id"],
            "url" => self::PREFIKSOJ[$sekva["kurso"]] . $sekva["retpagxo"] . "?section=" . (int)$sekva["ordo"],
            "kurso" => $sekva["kurso"],
            "kurso_nomo" => $sekva["kurso_nomo"],
            "leciono" => (int)$sekva["numero"],
            "titolo" => trim(html_entity_decode(strip_tags((string)$sekva["titolo"]), ENT_QUOTES, "UTF-8")),
            "nova_kurso" => $nova,
        );
    }

    private function unua(string $kondicxo, array $parametroj): ?array {
        $demando = $this->bdd->prepare("SELECT le.id, le.ordo, le.titolo, l.kurso, l.numero, l.retpagxo, k.nomo AS kurso_nomo
            FROM lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id JOIN kursoj k ON k.kodo = l.kurso
            WHERE " . $kondicxo . " ORDER BY le.ordo LIMIT 1");
        $demando->execute($parametroj);
        $vico = $demando->fetch(PDO::FETCH_ASSOC);
        return $vico ?: null;
    }
}
