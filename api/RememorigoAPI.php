<?php
// RememorigoAPI.php - Rappels par mail aux élèves inactifs depuis 6 puis 10 jours (cron/rappel.php,
// mails/rappel.html et rappel2.html). La dernière activité est la plus récente de deux dates : la dernière page
// terminée (personoj_lecioneroj.dato) et la dernière révision du vocabulaire (personoj_vortoj.lastfojo). Un élève
// qui révise tous les jours sans terminer de nouvelle page ne reçoit donc pas de rappel ; il le reçoit 6 jours
// après sa dernière page ou révision. Seuls les élèves qui ont déjà terminé une page sont concernés, et ceux qui
// ont refusé les rappels (agordo RAPPEL) sont exclus.

class RememorigoAPI {
    const AGORDO = "RAPPEL";

    private $bdd;

    public function __construct(PDO $bdd) {
        $this->bdd = $bdd;
    }

    // Élèves dont la dernière activité date d'exactement $tagoj jours : id, enirnomo, personnomo, familinomo,
    // retadreso, lasteniro (date de la dernière activité).
    public function ricevontoj(int $tagoj): array {
        $demando = $this->bdd->prepare("SELECT p.id, p.enirnomo, p.personnomo, p.familinomo, p.retadreso,
                CAST(GREATEST(pl.lasta, IFNULL(pv.lasta, pl.lasta)) AS DATE) AS lasteniro
            FROM personoj p
            JOIN personoj_agordoj pa ON pa.persono_id = p.id AND pa.agordo = ? AND pa.rajto = 1
            JOIN (SELECT persono_id, MAX(dato) AS lasta FROM personoj_lecioneroj GROUP BY persono_id) pl
                ON pl.persono_id = p.id
            LEFT JOIN (SELECT persono_id, MAX(lastfojo) AS lasta FROM personoj_vortoj GROUP BY persono_id) pv
                ON pv.persono_id = p.id
            HAVING lasteniro = DATE_SUB(CURDATE(), INTERVAL ? DAY)");
        $demando->execute(array(self::AGORDO, $tagoj));
        return $demando->fetchAll(PDO::FETCH_ASSOC);
    }
}
