<?php
// StatistikojAPI.php - Activité des élèves la veille, pour le mail quotidien des administrateurs (issue #1037).

class StatistikojAPI {
    // Une page restée ouverte toute la nuit ne doit pas compter comme du travail.
    const MAKSIMUMA_DAUXRO = 3600;

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
}
