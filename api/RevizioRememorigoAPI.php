<?php
// RevizioRememorigoAPI.php - Rappel par mail quand des mots de vocabulaire attendent d'être révisés (#1120).
// Envoyé par cron/rappel.php une seule fois, le jour où les plus anciens mots à réviser attendent depuis
// REMEMORIGO_POST jours. Si l'élève révise, la date de ses plus anciens mots avance, et un nouveau rappel
// pourra partir quand d'autres mots attendront à leur tour. Un élève parti depuis longtemps ne reçoit rien :
// ses plus anciens mots attendent depuis bien plus longtemps.

require_once __DIR__ . "/AgordojAPI.php";

class RevizioRememorigoAPI {
    const AGORDO = "REVIZIO";
    const REMEMORIGO_POST = 3; // jours
    const EKZEMPLOJ = 5;

    private $bdd;

    public function __construct(PDO $bdd) {
        $this->bdd = $bdd;
    }

    // Élèves à prévenir aujourd'hui : id, enirnomo, personnomo, retadreso, nombre de mots à réviser.
    // Les invités (G) et les comptes inactifs (I) sont exclus, comme ceux qui ont refusé ces rappels.
    public function ricevontoj(): array {
        $demando = $this->bdd->prepare("SELECT p.id, p.enirnomo, p.personnomo, p.retadreso,
                SUM(pv.venontaFojo <= NOW()) AS kiom
            FROM personoj p
            JOIN personoj_agordoj pa ON pa.persono_id = p.id AND pa.agordo = ? AND pa.rajto = 1
            JOIN personoj_vortoj pv ON pv.persono_id = p.id AND pv.forigita = 0
            WHERE p.rajtoj NOT IN ('G', 'I') AND p.retadreso <> ''
            GROUP BY p.id, p.enirnomo, p.personnomo, p.retadreso
            HAVING DATE(MIN(pv.venontaFojo)) = DATE_SUB(CURDATE(), INTERVAL ? DAY)");
        $demando->execute(array(self::AGORDO, self::REMEMORIGO_POST));
        return $demando->fetchAll(PDO::FETCH_ASSOC);
    }

    // Quelques mots à réviser, en français : l'élève devra les retrouver en espéranto.
    public function ekzemploj(int $persono_id): array {
        $demando = $this->bdd->prepare("SELECT v.fr FROM personoj_vortoj pv JOIN vortoj v ON v.id = pv.vorto_id
            WHERE pv.persono_id = ? AND pv.forigita = 0 AND pv.venontaFojo <= NOW() ORDER BY RAND() LIMIT " . self::EKZEMPLOJ);
        $demando->execute(array($persono_id));
        return $demando->fetchAll(PDO::FETCH_COLUMN);
    }

    // Contenu du mail à partir du modèle mails/revizio.html.
    public static function mesagxo(string $modelo, array $ricevonto, array $ekzemploj, string $radiko): string {
        $h = function ($t) { return htmlspecialchars((string)$t, ENT_QUOTES, "UTF-8"); };
        $kiom = (int)$ricevonto["kiom"];
        $nomo = trim((string)$ricevonto["personnomo"]) !== "" ? $ricevonto["personnomo"] : $ricevonto["enirnomo"];
        $listo = "";
        foreach ($ekzemploj as $fr) {
            $listo .= "<li>" . $h($fr) . "</li>";
        }
        return str_replace(
            array("##NOM##", "##KIOM##", "##EKZEMPLOJ##", "##LIGILO##", "##MALABONI##"),
            array($h($nomo), $kiom . " " . ($kiom > 1 ? "mots attendent" : "mot attend"), $listo,
                $h(rtrim($radiko, "/") . "/memoriVortojn.php"),
                $h(AgordojAPI::malaboniLigilo((int)$ricevonto["id"], self::AGORDO))),
            $modelo);
    }
}
