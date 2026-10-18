<?php
// EksportoAPI.php - Export des données personnelles d'un élève (droit d'accès et portabilité, issue #1028)
//
// La partie "tabeloj" contient les lignes telles qu'elles sont en base, colonne par colonne,
// pour pouvoir les réinsérer si l'élève supprime son compte puis veut le retrouver.
// La partie "respondoj_legeblaj" ne sert qu'à la lecture : elle n'est pas à réimporter.

class EksportoAPI {
    const VERSIO = 1;

    // Ces colonnes ne sont pas exportées : ce sont des secrets, pas des informations sur l'élève.
    const KASITAJ_KOLUMNOJ = array("pasvorto_md5", "aktivigo");

    // table => [colonne qui désigne l'élève, description]
    const TABELOJ = array(
        "personoj"                  => array("id", "Vos informations personnelles (le mot de passe n'est pas exporté)."),
        "nuna_kurso"                => array("studanto", "Les cours que vous avez suivis, avec leur état et votre correcteur."),
        "personoj_lecionoj"         => array("persono_id", "Les leçons envoyées à votre correcteur, avec vos commentaires et les siens."),
        "personoj_lecioneroj"       => array("persono_id", "Les pages de cours que vous avez terminées."),
        "respondoj"                 => array("persono_id", "Vos réponses aux exercices et leur correction."),
        "takso_leciono"             => array("persono_id", "Vos évaluations des leçons."),
        "personoj_vortoj"           => array("persono_id", "Votre progression dans la révision du vocabulaire."),
        "personoj_vortoj_respondoj" => array("persono_id", "Vos réponses dans la révision du vocabulaire."),
        "komentoj"                  => array("studanto", "Les remarques des correcteurs à votre sujet."),
        "korektebla_kurso"          => array("korektanto", "Les cours que vous corrigez (correcteurs)."),
        "legitajxoj"                => array("persono_id", "Les textes lus sur Ni legu, avec vos notes et commentaires."),
        "legotajxoj"                => array("persono_id", "Les textes mis de côté pour plus tard sur Ni legu."),
        "eventoj"                   => array("persono_id", "Les événements que vous avez proposés."),
        "protokolo"                 => array("persono_id", "L'historique de vos connexions et actions sur le site."),
    );

    private $bdd;

    public function __construct(PDO $bdd) {
        $this->bdd = $bdd;
    }

    public function eksporti(int $persono_id): array {
        $tabeloj = array();
        foreach (self::TABELOJ as $tabelo => list($kolumno, $priskribo)) {
            $tabeloj[$tabelo] = array(
                "priskribo" => $priskribo,
                "linioj" => $this->linioj($tabelo, $kolumno, $persono_id),
            );
        }
        return array(
            "formato" => "ikurso-eksporto",
            "versio" => self::VERSIO,
            "eksportita_je" => date("c"),
            "priskribo" => "Données vous concernant enregistrées sur ikurso.esperanto-france.org. "
                ."La partie « tabeloj » reprend chaque table de la base telle quelle et permet de restaurer votre compte. "
                ."La partie « respondoj_legeblaj » présente vos réponses avec le texte des questions, pour la lecture.",
            "tabeloj" => $tabeloj,
            "respondoj_legeblaj" => $this->respondojLegeblaj($persono_id),
        );
    }

    private function linioj(string $tabelo, string $kolumno, int $persono_id): array {
        // $tabelo et $kolumno viennent de la constante TABELOJ, jamais de l'utilisateur.
        $demando = $this->bdd->prepare("SELECT * FROM `$tabelo` WHERE `$kolumno` = ?");
        $demando->execute(array($persono_id));
        $linioj = $demando->fetchAll(PDO::FETCH_ASSOC);
        foreach ($linioj as &$linio) {
            foreach (self::KASITAJ_KOLUMNOJ as $kasita) {
                unset($linio[$kasita]);
            }
        }
        return $linioj;
    }

    private function respondojLegeblaj(int $persono_id): array {
        $demando = $this->bdd->prepare(
            "SELECT k.nomo AS kurso, l.numero AS leciono, le.titolo AS lecionero,
                    COALESCE(z.komando, r.komando) AS komando,
                    COALESCE(e.demando, r.demando) AS demando, r.respondo, r.gxusta, r.korekto, r.dato
             FROM respondoj r
             LEFT JOIN ekzerceroj e ON e.id = r.ekzercero_id
             LEFT JOIN ekzercoj z ON z.id = e.ekzerco_id
             LEFT JOIN lecioneroj le ON le.id = COALESCE(z.lecionero_id, r.lecionero_id)
             LEFT JOIN lecionoj l ON l.id = le.leciono_id
             LEFT JOIN kursoj k ON k.kodo = l.kurso
             WHERE r.persono_id = ?
             ORDER BY r.dato, r.id");
        $demando->execute(array($persono_id));
        return $demando->fetchAll(PDO::FETCH_ASSOC);
    }
}
