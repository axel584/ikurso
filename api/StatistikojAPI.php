<?php
// StatistikojAPI.php - Activité des élèves la veille, pour le mail quotidien des administrateurs (issue #1037),
// et statistiques des correcteurs (statLaux*.php, #1075) : élèves, places, pays, mois et leçons.

class StatistikojAPI {
    // Une page restée ouverte toute la nuit ne doit pas compter comme du travail.
    const MAKSIMUMA_DAUXRO = 3600;
    // Statuts de nuna_kurso : N pas commencé, K en cours, F fini, H abandon.
    // Les élèves sont les comptes P (prospect) et S (élève).

    private $bdd;

    public function __construct(PDO $bdd) {
        $this->bdd = $bdd;
    }

    // Par élève et par cours : pages validées hier, temps passé (secondes) et leçons terminées.
    // Une leçon est terminée quand sa dernière page (l'envoi) est validée : personoj_lecionoj.dato
    // ne convient pas, car la colonne est mise à jour quand le correcteur corrige la leçon.
    public function laboroHieraux(): array {
        $demando = $this->bdd->prepare(
            "SELECT p.enirnomo, l.kurso, COUNT(*) AS pagxoj,
                    COALESCE(SUM(LEAST(GREATEST(TIMESTAMPDIFF(SECOND, pl.ekdato, pl.dato), 0), ?)), 0) AS sekundoj,
                    GROUP_CONCAT(CASE WHEN le.ordo = (SELECT MAX(le2.ordo) FROM lecioneroj le2 WHERE le2.leciono_id = le.leciono_id)
                                      THEN l.numero END ORDER BY l.numero) AS finitaj
             FROM personoj_lecioneroj pl
             JOIN personoj p ON p.id = pl.persono_id
             JOIN lecioneroj le ON le.id = pl.lecionero_id
             JOIN lecionoj l ON l.id = le.leciono_id
             WHERE pl.dato >= CURDATE() - INTERVAL 1 DAY AND pl.dato < CURDATE()
             GROUP BY p.id, p.enirnomo, l.kurso
             ORDER BY pagxoj DESC, p.enirnomo");
        $demando->execute(array(self::MAKSIMUMA_DAUXRO));
        return $demando->fetchAll(PDO::FETCH_ASSOC);
    }

    // Révision du vocabulaire hier : nombre d'élèves, de réponses et de bonnes réponses.
    public function vortojHieraux(): array {
        $demando = $this->bdd->prepare(
            "SELECT COUNT(DISTINCT persono_id) AS lernantoj, COUNT(*) AS respondoj, COALESCE(SUM(bona), 0) AS bonaj
             FROM personoj_vortoj_respondoj
             WHERE dato >= CURDATE() - INTERVAL 1 DAY AND dato < CURDATE()");
        $demando->execute();
        return $demando->fetch(PDO::FETCH_ASSOC);
    }

    // Par cours : élèves en cours, correcteurs, nombre maximum d'élèves et places restantes ; ligne « Total » à la fin.
    public function kategorioj(): array {
        $vicoj = array();
        foreach ($this->bdd->query("SELECT kodo, nomo FROM kursoj ORDER BY kodo")->fetchAll(PDO::FETCH_ASSOC) as $kurso) {
            $vicoj[$kurso["kodo"]] = array("nomo" => $kurso["nomo"], "lernantoj" => 0, "korektantoj" => 0, "lokoj" => 0);
        }
        $lernantoj = $this->bdd->query("SELECT nk.kurso, COUNT(*) AS kiom FROM nuna_kurso nk JOIN personoj p ON p.id = nk.studanto
            WHERE nk.stato IN ('K', 'N') GROUP BY nk.kurso");
        foreach ($lernantoj->fetchAll(PDO::FETCH_ASSOC) as $vico) {
            if (isset($vicoj[$vico["kurso"]])) {
                $vicoj[$vico["kurso"]]["lernantoj"] = (int)$vico["kiom"];
            }
        }
        $lokoj = $this->bdd->query("SELECT kk.kurso, SUM(kk.kiom_lernantoj) AS lokoj, COUNT(*) AS korektantoj
            FROM korektebla_kurso kk JOIN personoj p ON p.id = kk.korektanto WHERE kk.kiom_lernantoj > 0 GROUP BY kk.kurso");
        foreach ($lokoj->fetchAll(PDO::FETCH_ASSOC) as $vico) {
            if (isset($vicoj[$vico["kurso"]])) {
                $vicoj[$vico["kurso"]]["lokoj"] = (int)$vico["lokoj"];
                $vicoj[$vico["kurso"]]["korektantoj"] = (int)$vico["korektantoj"];
            }
        }
        $sumo = array("nomo" => "Total", "lernantoj" => 0, "lokoj" => 0);
        foreach ($vicoj as &$vico) {
            $vico["restantaj"] = $vico["lokoj"] - $vico["lernantoj"];
            $sumo["lernantoj"] += $vico["lernantoj"];
            $sumo["lokoj"] += $vico["lokoj"];
        }
        unset($vico);
        // un correcteur de plusieurs cours ne compte qu'une fois dans le total
        $sumo["korektantoj"] = (int)$this->bdd->query("SELECT COUNT(DISTINCT p.id) FROM personoj p
            JOIN korektebla_kurso kk ON kk.korektanto = p.id WHERE p.rajtoj IN ('K', 'A') AND kk.kiom_lernantoj > 0")->fetchColumn();
        $sumo["restantaj"] = $sumo["lokoj"] - $sumo["lernantoj"];
        return array("kursoj" => array_values($vicoj), "sumo" => $sumo);
    }

    // Élèves inscrits par sexe : M (hommes), I (femmes), autre (non renseigné).
    public function seksoj(): array {
        $vico = $this->bdd->query("SELECT SUM(sekso = 'M') AS viroj, SUM(sekso = 'I') AS virinoj,
            SUM(sekso IS NULL OR sekso NOT IN ('M', 'I')) AS nekonataj FROM personoj WHERE rajtoj IN ('P', 'S')")->fetch(PDO::FETCH_ASSOC);
        return array_map("intval", $vico);
    }

    // Élèves en cours (pas encore commencé ou en cours) par pays, du plus nombreux au moins nombreux.
    public function landoj(): array {
        $demando = $this->bdd->query("SELECT IF(p.lando IS NULL OR p.lando IN ('', 'XX', '--'), 'XX', p.lando) AS kodo,
                COALESCE(l.nomo, 'Inconnu') AS nomo, COUNT(*) AS kiom
            FROM personoj p JOIN nuna_kurso nk ON nk.studanto = p.id
            LEFT JOIN landoj l ON l.kodo = IF(p.lando IS NULL OR p.lando IN ('', 'XX', '--'), 'XX', p.lando)
            WHERE p.rajtoj IN ('P', 'S') AND nk.stato IN ('N', 'K')
            GROUP BY kodo, nomo ORDER BY kiom DESC, nomo");
        return $demando->fetchAll(PDO::FETCH_ASSOC);
    }

    // Par mois (AAAAMM, le plus récent d'abord), depuis 2002 :
    // aligxis inscrits, aktivigita inscriptions validées, ekis élèves qui ont reçu un correcteur,
    // monatHaltis / monatFinis élèves qui ont commencé ce mois et ont depuis abandonné / fini,
    // tagoj total des jours mis pour finir par ces derniers, haltis / finis abandons et fins de cours de ce mois.
    public function monatoj(): array {
        $monatoj = array();
        $nun = (int)date("Y");
        for ($jaro = 2002; $jaro <= $nun; $jaro++) {
            for ($monato = 1; $monato <= 12; $monato++) {
                $monatoj[sprintf("%04d%02d", $jaro, $monato)] = array("aligxis" => 0, "aktivigita" => 0, "ekis" => 0,
                    "monatHaltis" => 0, "monatFinis" => 0, "tagoj" => 0, "haltis" => 0, "finis" => 0);
            }
        }
        $aligxoj = $this->bdd->query("SELECT DATE_FORMAT(ekdato, '%Y%m') AS monato, SUM(aktivigita = 1) AS aktivigita, COUNT(*) AS kiom
            FROM personoj WHERE ekdato IS NOT NULL GROUP BY monato");
        foreach ($aligxoj->fetchAll(PDO::FETCH_ASSOC) as $vico) {
            if (isset($monatoj[$vico["monato"]])) {
                $monatoj[$vico["monato"]]["aligxis"] = (int)$vico["kiom"];
                $monatoj[$vico["monato"]]["aktivigita"] = (int)$vico["aktivigita"];
            }
        }
        $kursoj = $this->bdd->query("SELECT nk.stato, DATE_FORMAT(nk.ekdato, '%Y%m') AS ek, DATE_FORMAT(nk.findato, '%Y%m') AS fin,
                DATEDIFF(nk.findato, nk.ekdato) AS tagoj
            FROM nuna_kurso nk JOIN personoj p ON p.id = nk.studanto");
        foreach ($kursoj->fetchAll(PDO::FETCH_ASSOC) as $vico) {
            if (!isset($monatoj[$vico["ek"]])) {
                continue;
            }
            $monatoj[$vico["ek"]]["ekis"]++;
            if ($vico["fin"] === null || !isset($monatoj[$vico["fin"]])) {
                continue;
            }
            if ($vico["stato"] == "H") {
                $monatoj[$vico["fin"]]["haltis"]++;
                $monatoj[$vico["ek"]]["monatHaltis"]++;
            } elseif ($vico["stato"] == "F") {
                $monatoj[$vico["fin"]]["finis"]++;
                $monatoj[$vico["ek"]]["monatFinis"]++;
                $monatoj[$vico["ek"]]["tagoj"] += (int)$vico["tagoj"];
            }
        }
        krsort($monatoj);
        return array_filter($monatoj, function ($m) {
            return $m["ekis"] > 0 || $m["haltis"] > 0 || $m["finis"] > 0;
        });
    }

    // Par cours : élèves pas encore commencés (N), en cours (par leçon), abandons (par leçon), fins de cours (F).
    // Un abandon sans leçon connue compte dans « sen_leciono ».
    public function kursoj(): array {
        $kursoj = array();
        foreach ($this->bdd->query("SELECT kodo, nomo FROM kursoj ORDER BY kodo")->fetchAll(PDO::FETCH_ASSOC) as $kurso) {
            $kursoj[$kurso["kodo"]] = array("nomo" => $kurso["nomo"], "N" => 0, "F" => 0, "H" => 0, "lecionoj" => array());
        }
        foreach ($this->bdd->query("SELECT kurso, numero, titolo FROM lecionoj ORDER BY kurso, numero")->fetchAll(PDO::FETCH_ASSOC) as $leciono) {
            if (isset($kursoj[$leciono["kurso"]])) {
                $kursoj[$leciono["kurso"]]["lecionoj"][(int)$leciono["numero"]] = array("titolo" => $leciono["titolo"], "K" => 0, "H" => 0);
            }
        }
        $demando = $this->bdd->query("SELECT nk.kurso, nk.nunleciono, nk.stato, COUNT(*) AS kiom
            FROM nuna_kurso nk JOIN personoj p ON p.id = nk.studanto GROUP BY nk.kurso, nk.nunleciono, nk.stato");
        foreach ($demando->fetchAll(PDO::FETCH_ASSOC) as $vico) {
            if (!isset($kursoj[$vico["kurso"]])) {
                continue;
            }
            $kurso = &$kursoj[$vico["kurso"]];
            $kiom = (int)$vico["kiom"];
            $leciono = $vico["nunleciono"] === null ? null : (int)$vico["nunleciono"];
            if ($vico["stato"] == "N" || $vico["stato"] == "F") {
                $kurso[$vico["stato"]] += $kiom;
            } elseif (($vico["stato"] == "K" || $vico["stato"] == "H") && $leciono !== null && isset($kurso["lecionoj"][$leciono])) {
                $kurso["lecionoj"][$leciono][$vico["stato"]] += $kiom;
            } elseif ($vico["stato"] == "H") {
                $kurso["H"] += $kiom;
            }
            unset($kurso);
        }
        foreach ($kursoj as &$kurso) {
            $kurso["enKurso"] = $kurso["N"] + array_sum(array_column($kurso["lecionoj"], "K"));
            $kurso["entute"] = $kurso["enKurso"] + $kurso["F"] + $kurso["H"] + array_sum(array_column($kurso["lecionoj"], "H"));
        }
        unset($kurso);
        return $kursoj;
    }
}
