<?php
// AdministriAPI.php - Lectures de la page d'administration des comptes (administri.php).
// Les enregistrements restent dans les scripts existants : administri2.php (fiche),
// administriNunanKurson.php (correcteur), delete.php, aldoniNoton.php, forigiNoton.php.

class AdministriAPI {
    private $bdd;

    public function __construct(PDO $bdd) {
        $this->bdd = $bdd;
    }

    // Élèves qui attendent un correcteur : compte activé, cours choisi (première leçon faite), droit P.
    public function atendantaj(): array {
        $demando = $this->bdd->query("SELECT id, enirnomo, personnomo, familinomo, kurso, ekdato FROM personoj
            WHERE rajtoj = 'P' AND aktivigita = 1 AND kurso <> '' ORDER BY id");
        return $demando->fetchAll(PDO::FETCH_ASSOC);
    }

    // Cours suivis par l'élève, avec son correcteur et sa dernière leçon, du plus ancien au plus récent.
    public function kursojDeLernanto(int $studanto_id): array {
        $demando = $this->bdd->prepare("SELECT n.id, n.kurso, n.stato, n.lastdato, n.nunleciono,
                k.id AS korektanto_id, k.enirnomo AS korektanto_enirnomo, ku.nomo AS kurso_nomo, l.titolo AS leciono_titolo
            FROM nuna_kurso n
            JOIN personoj k ON k.id = n.korektanto
            JOIN kursoj ku ON ku.kodo = n.kurso
            LEFT JOIN lecionoj l ON l.numero = n.nunleciono AND l.kurso = n.kurso
            WHERE n.studanto = ? ORDER BY n.lastdato");
        $demando->execute(array($studanto_id));
        return $demando->fetchAll(PDO::FETCH_ASSOC);
    }

    // Sections marquées « terminé », par cours, leçon et section.
    public function lecioneroj(int $persono_id): array {
        $demando = $this->bdd->prepare("SELECT l.kurso, pl.dato, l.titolo AS leciono_titolo, le.ordo, le.titolo AS lecionero_titolo
            FROM personoj_lecioneroj pl
            JOIN lecioneroj le ON le.id = pl.lecionero_id
            JOIN lecionoj l ON l.id = le.leciono_id
            WHERE pl.persono_id = ? ORDER BY l.kurso, l.numero, le.ordo");
        $demando->execute(array($persono_id));
        return $demando->fetchAll(PDO::FETCH_ASSOC);
    }

    // Commentaires des correcteurs sur l'élève.
    public function komentoj(int $studanto_id): array {
        $demando = $this->bdd->prepare("SELECT ko.id, ko.dato, ko.teksto, p.enirnomo AS korektanto
            FROM komentoj ko LEFT JOIN personoj p ON p.id = ko.korektanto
            WHERE ko.studanto = ? ORDER BY ko.dato, ko.id");
        $demando->execute(array($studanto_id));
        return $demando->fetchAll(PDO::FETCH_ASSOC);
    }

    // Correcteurs du cours, du moins chargé au plus chargé : élèves en cours (N ou K) / nombre accepté.
    // Un correcteur qui n'accepte personne et n'a aucun élève n'est pas proposé.
    public function korektantojLauxKurso(string $kurso): array {
        $demando = $this->bdd->prepare("SELECT p.id, p.enirnomo, SUM(kk.kiom_lernantoj) AS kapablo
            FROM personoj p JOIN korektebla_kurso kk ON kk.korektanto = p.id
            WHERE kk.kurso = ? GROUP BY p.id, p.enirnomo");
        $demando->execute(array($kurso));
        $korektantoj = array();
        foreach ($demando->fetchAll(PDO::FETCH_ASSOC) as $vico) {
            $korektantoj[(int)$vico["id"]] = array("id" => (int)$vico["id"], "enirnomo" => $vico["enirnomo"],
                "kapablo" => (int)$vico["kapablo"], "lernantoj" => 0);
        }
        $demando = $this->bdd->prepare("SELECT korektanto, COUNT(*) AS kiom FROM nuna_kurso
            WHERE kurso = ? AND stato IN ('K', 'N') GROUP BY korektanto");
        $demando->execute(array($kurso));
        foreach ($demando->fetchAll(PDO::FETCH_ASSOC) as $vico) {
            if (isset($korektantoj[(int)$vico["korektanto"]])) {
                $korektantoj[(int)$vico["korektanto"]]["lernantoj"] = (int)$vico["kiom"];
            }
        }
        $rezulto = array();
        foreach ($korektantoj as $k) {
            if ($k["kapablo"] == 0 && $k["lernantoj"] == 0) {
                continue;
            }
            $k["procento"] = $k["kapablo"] == 0 ? 100 : (int)floor(100 * $k["lernantoj"] / $k["kapablo"]);
            $rezulto[] = $k;
        }
        usort($rezulto, function ($a, $b) {
            return $a["procento"] <=> $b["procento"];
        });
        return $rezulto;
    }

    // Nombre maximum d'élèves accepté par le correcteur, pour chaque cours.
    public function maksimumoj(int $korektanto_id): array {
        $demando = $this->bdd->prepare("SELECT ku.nomo AS kurso, kk.kiom_lernantoj AS kiom
            FROM korektebla_kurso kk JOIN kursoj ku ON ku.kodo = kk.kurso WHERE kk.korektanto = ?");
        $demando->execute(array($korektanto_id));
        return $demando->fetchAll(PDO::FETCH_ASSOC);
    }

    // Élèves en cours (N ou K) du correcteur, avec leur cours et leur dernière leçon.
    public function lernantojDeKorektanto(int $korektanto_id): array {
        $demando = $this->bdd->prepare("SELECT p.id, p.enirnomo, p.familinomo, p.personnomo, p.retadreso,
                p.adreso1, p.adreso2, p.lando, p.posxtkodo, p.urbo, p.kialo, p.naskigxdato,
                n.ekdato, n.lastdato, ku.nomo AS kurso_nomo, l.titolo AS leciono_titolo
            FROM nuna_kurso n
            JOIN personoj p ON p.id = n.studanto
            LEFT JOIN kursoj ku ON ku.kodo = n.kurso
            LEFT JOIN lecionoj l ON l.numero = n.nunleciono AND l.kurso = n.kurso
            WHERE p.rajtoj = 'S' AND n.stato IN ('N', 'K') AND n.korektanto = ?
            ORDER BY p.enirnomo");
        $demando->execute(array($korektanto_id));
        return $demando->fetchAll(PDO::FETCH_ASSOC);
    }

    public function kursoNomo(string $kodo): string {
        $demando = $this->bdd->prepare("SELECT nomo FROM kursoj WHERE kodo = ?");
        $demando->execute(array($kodo));
        return (string)$demando->fetchColumn();
    }
}
