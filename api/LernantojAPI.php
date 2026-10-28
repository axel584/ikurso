<?php
// LernantojAPI.php - Élèves d'un correcteur, pour la page miajlernantoj.php.

class LernantojAPI {
    // Statuts de nuna_kurso : N pas commencé, K en cours, F fini, H abandon.
    const NUNAJ = array("N", "K");
    const EKSAJ = array("F", "H");

    private $bdd;

    public function __construct(PDO $bdd) {
        $this->bdd = $bdd;
    }

    // Élèves en cours (eksaj = false) ou anciens élèves (eksaj = true), le plus récemment actif en premier.
    // tagoj : jours écoulés depuis le dernier envoi, ou depuis l'inscription si rien n'a été envoyé.
    public function lernantoj(int $korektanto_id, bool $eksaj): array {
        $statoj = $eksaj ? self::EKSAJ : self::NUNAJ;
        $demando = $this->bdd->prepare(
            "SELECT nk.id AS kursid, nk.studanto, nk.stato, nk.kurso, nk.nunleciono, nk.ekdato, nk.lastdato,
                    TO_DAYS(NOW()) - TO_DAYS(IF(nk.lastdato > 0, nk.lastdato, nk.ekdato)) AS tagoj,
                    p.enirnomo, p.personnomo, p.familinomo, p.naskigxdato, p.retadreso,
                    p.adreso1, p.adreso2, p.posxtkodo, p.urbo, p.lando, p.kialo,
                    k.nomo AS kursnomo, l.titolo AS leciono_titolo, pa.rajto AS rappel
             FROM nuna_kurso nk
             JOIN personoj p ON p.id = nk.studanto
             LEFT JOIN personoj_agordoj pa ON pa.persono_id = nk.studanto AND pa.agordo = 'RAPPEL'
             LEFT JOIN kursoj k ON k.kodo = nk.kurso
             LEFT JOIN lecionoj l ON l.kurso = nk.kurso AND l.numero = nk.nunleciono
             WHERE nk.korektanto = ? AND nk.stato IN (?, ?)
             ORDER BY nk.lastdato DESC");
        $demando->execute(array_merge(array($korektanto_id), $statoj));
        return $demando->fetchAll(PDO::FETCH_ASSOC);
    }

    // L'élève est-il suivi en ce moment par ce correcteur ?
    public function cxuSekvas(int $korektanto_id, int $studanto): bool {
        $demando = $this->bdd->prepare(
            "SELECT 1 FROM nuna_kurso WHERE korektanto = ? AND studanto = ? AND stato IN (?, ?) LIMIT 1");
        $demando->execute(array_merge(array($korektanto_id, $studanto), self::NUNAJ));
        return (bool)$demando->fetchColumn();
    }

    // Pages terminées par l'élève dans ce cours, dans l'ordre du cours.
    public function lecioneroj(int $studanto, string $kurso): array {
        $demando = $this->bdd->prepare(
            "SELECT pl.dato, l.numero, l.titolo AS leciono_titolo, le.ordo, le.titolo AS lecionero_titolo
             FROM personoj_lecioneroj pl
             JOIN lecioneroj le ON le.id = pl.lecionero_id
             JOIN lecionoj l ON l.id = le.leciono_id
             WHERE pl.persono_id = ? AND l.kurso = ?
             ORDER BY l.numero, le.ordo");
        $demando->execute(array($studanto, $kurso));
        return $demando->fetchAll(PDO::FETCH_ASSOC);
    }

    // Commentaires des correcteurs et administrateurs sur l'élève.
    public function komentoj(int $studanto): array {
        $demando = $this->bdd->prepare(
            "SELECT ko.id, ko.korektanto, ko.dato, ko.teksto, p.enirnomo AS korektanto_nomo
             FROM komentoj ko
             LEFT JOIN personoj p ON p.id = ko.korektanto
             WHERE ko.studanto = ?
             ORDER BY ko.dato, ko.id");
        $demando->execute(array($studanto));
        return $demando->fetchAll(PDO::FETCH_ASSOC);
    }

    // Cours que le correcteur peut corriger : nombre maximum d'élèves voulu et nombre d'élèves en cours.
    public function korekteblajKursoj(int $korektanto_id): array {
        $demando = $this->bdd->prepare(
            "SELECT ku.kodo, ku.nomo, kk.kiom_lernantoj,
                    (SELECT COUNT(*) FROM nuna_kurso nk
                     WHERE nk.korektanto = kk.korektanto AND nk.kurso = kk.kurso AND nk.stato IN (?, ?)) AS nunaj
             FROM korektebla_kurso kk
             JOIN kursoj ku ON ku.kodo = kk.kurso
             WHERE kk.korektanto = ?
             ORDER BY ku.id");
        $demando->execute(array_merge(self::NUNAJ, array($korektanto_id)));
        return $demando->fetchAll(PDO::FETCH_ASSOC);
    }

    // Leçons d'un cours, pour avancer un élève à la main (cours KE, sans envoi en ligne).
    public function lecionoj(string $kurso): array {
        $demando = $this->bdd->prepare("SELECT numero, titolo FROM lecionoj WHERE kurso = ? ORDER BY numero");
        $demando->execute(array($kurso));
        return $demando->fetchAll(PDO::FETCH_ASSOC);
    }
}
