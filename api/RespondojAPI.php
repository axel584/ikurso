<?php
// RespondojAPI.php - Réponses d'un élève à une leçon, mises en forme pour le mail envoyé au correcteur.
// Utilisé par ajax/sendiLecionon.php, ajax/resendiLecionon.php et ajax/petiKorektanton.php.

class RespondojAPI {
    // Dossier des pages de chaque cours, pour le lien vers la page de l'exercice.
    const DOSIEROJ = array("CG" => "fr/cge/", "GR" => "fr/gerda/", "PP" => "eo/ppp/", "3N" => "fr/3n/");

    private $bdd;

    public function __construct(PDO $bdd) {
        $this->bdd = $bdd;
    }

    // [html, nombre de réponses]. Chaque consigne est suivie du lien vers la page de l'exercice,
    // pour qu'un correcteur qui connaît mal le cours puisse la consulter (#781).
    public function mesagxo(int $persono_id, int $leciono, string $kurso, string $urlracine): array {
        $demando = $this->bdd->prepare(
            "SELECT ekzercoj.komando, ekzerceroj.demando, respondoj.respondo, respondoj.gxusta,
                    lecionoj.retpagxo, lecioneroj.ordo
             FROM respondoj
             JOIN ekzerceroj ON ekzerceroj.id = respondoj.ekzercero_id
             JOIN ekzercoj ON ekzercoj.id = ekzerceroj.ekzerco_id
             JOIN lecioneroj ON lecioneroj.id = ekzercoj.lecionero_id
             JOIN lecionoj ON lecioneroj.leciono_id = lecionoj.id
             WHERE respondoj.persono_id = ? AND lecionoj.numero = ? AND lecionoj.kurso = ?
             ORDER BY lecioneroj.ordo, ekzerceroj.numero");
        $demando->execute(array($persono_id, $leciono, $kurso));
        $html = "";
        $kiom = 0;
        $antauxa = null;
        while ($vico = $demando->fetch(PDO::FETCH_ASSOC)) {
            $kiom++;
            // une nouvelle consigne, ou la même consigne sur une autre page
            if (array($vico["komando"], $vico["ordo"]) !== $antauxa) {
                $antauxa = array($vico["komando"], $vico["ordo"]);
                $html .= "<h5>" . $vico["komando"] . "</h5>\n";
                if (isset(self::DOSIEROJ[$kurso]) && $vico["retpagxo"] != "") {
                    $url = rtrim($urlracine, "/") . "/" . self::DOSIEROJ[$kurso] . $vico["retpagxo"] . "?section=" . (int)$vico["ordo"];
                    $html .= "<p><a href=\"" . htmlspecialchars($url, ENT_QUOTES, "UTF-8") . "\">" . htmlspecialchars($url, ENT_QUOTES, "UTF-8") . "</a></p>\n";
                }
            }
            $koloro = $vico["gxusta"] == 1 ? "green" : "blue";
            $html .= "<p>" . $vico["demando"] . "<br>\n<span style=\"color:" . $koloro . "\">" . $vico["respondo"] . "</span></p>\n";
        }
        return array($html, $kiom);
    }
}
