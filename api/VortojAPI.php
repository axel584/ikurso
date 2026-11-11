<?php
// VortojAPI.php - lexique d'un cours, avec le niveau de l'élève sur chaque mot (#391).
// Le niveau vient de personoj_vortoj.nombrilo (révision du vocabulaire, memoriVortojn.php) :
// 1 au premier passage et après chaque erreur, +1 à chaque bonne réponse.
// Mêmes catégories que le graphique de memoriVortojn.php (statMotsParForce).
// personoj_vortoj.forigita : mot retiré de la révision par l'élève (#914), quel que soit son compteur.
// Prononciation d'un mot (#712) : fichier de fr/son/vortoj, nommé comme dans les pages de vocabulaire des leçons.

class VortojAPI {
    const NIVELOJ = array(
        "nevidita" => "Pas encore vus",
        "lernenda" => "À apprendre",
        "lernata"  => "En cours",
        "konata"   => "Bien connus",
        "forigita" => "Retirés de la révision",
    );

    const SONOJ = "fr/son/vortoj/";

    private static $sonoj = null;
    private $bdd;

    public function __construct(PDO $bdd) {
        $this->bdd = $bdd;
    }

    // Niveau d'un mot d'après son compteur (null : pas encore dans la révision de l'élève).
    public static function nivelo($nombrilo, $forigita = 0): string {
        if ((int)$forigita === 1) {
            return "forigita";
        }
        if ($nombrilo === null) {
            return "nevidita";
        }
        if ((int)$nombrilo <= 1) {
            return "lernenda";
        }
        return (int)$nombrilo < 5 ? "lernata" : "konata";
    }

    // Fichier son d'un mot (chemin depuis la racine du site), ou null. Le nom du fichier vient de la première
    // forme, celle qu'affiche le lexique : « ĝis revido » → gxis-revido.mp3, « mi ŝatas ... » → mi-sxatas.mp3,
    // « ek! » → ek.mp3 ; « Ĉinujo|Ĉinio » n'a pas de son même si cxinio.mp3 existe.
    public static function sono(string $eo): ?string {
        if (self::$sonoj === null) {
            self::$sonoj = array();
            foreach (glob(__DIR__."/../".self::SONOJ."*.mp3") as $dosiero) {
                self::$sonoj[strtolower(basename($dosiero, ".mp3"))] = basename($dosiero);
            }
        }
        $formo = explode("|", $eo)[0];
        $sxlosilo = str_replace(array("...", "…", "!", "?", ",", "."), "", konvX($formo));
        $sxlosilo = strtolower(trim(preg_replace("/[\s']+/u", "-", trim($sxlosilo)), "-"));
        return isset(self::$sonoj[$sxlosilo]) ? self::SONOJ.self::$sonoj[$sxlosilo] : null;
    }

    // Mots du cours, triés par ordre alphabétique : id, eo, fr, numero (leçon), ordo (section), nivelo, sono.
    // $prefikso filtre sur le début du mot espéranto ou français, $nivelo sur le niveau (clé de NIVELOJ).
    public function listo(string $kurso, int $persono_id, string $prefikso = "", string $nivelo = ""): array {
        $demando = "SELECT v.id, v.eo, v.fr, l.numero, le.ordo, pv.nombrilo, pv.forigita
            FROM vortoj v
            JOIN lecioneroj le ON le.id = v.lecionero_id
            JOIN lecionoj l ON l.id = le.leciono_id
            LEFT JOIN personoj_vortoj pv ON pv.vorto_id = v.id AND pv.persono_id = ?
            WHERE l.kurso = ?";
        $parametroj = array($persono_id, $kurso);
        if ($prefikso !== "") {
            $demando .= " AND (v.eo LIKE ? OR v.fr LIKE ?)";
            $sxablono = addcslashes($prefikso, "%_\\") . "%";
            $parametroj[] = $sxablono;
            $parametroj[] = $sxablono;
        }
        $demando .= " ORDER BY v.eo";
        $rezulto = $this->bdd->prepare($demando);
        $rezulto->execute($parametroj);
        $vortoj = array();
        foreach ($rezulto->fetchAll(PDO::FETCH_ASSOC) as $vico) {
            $vico["nivelo"] = self::nivelo($vico["nombrilo"], $vico["forigita"]);
            $vico["sono"] = self::sono($vico["eo"]);
            unset($vico["nombrilo"], $vico["forigita"]);
            if ($nivelo === "" || $vico["nivelo"] === $nivelo) {
                $vortoj[] = $vico;
            }
        }
        return $vortoj;
    }

    // Retire un mot de la révision de l'élève, ou l'y remet (#914). Un mot pas encore vu est créé déjà retiré,
    // pour qu'aldoniNovajnVortojnEnMemorilo() ne l'ajoute plus. Renvoie false si le mot n'existe pas.
    public function forigi(int $persono_id, int $vorto_id, bool $forigita): bool {
        $demando = $this->bdd->prepare("SELECT COUNT(*) FROM vortoj WHERE id = ?");
        $demando->execute(array($vorto_id));
        if ((int)$demando->fetchColumn() === 0) {
            return false;
        }
        $demando = $this->bdd->prepare("SELECT COUNT(*) FROM personoj_vortoj WHERE persono_id = ? AND vorto_id = ?");
        $demando->execute(array($persono_id, $vorto_id));
        if ((int)$demando->fetchColumn() > 0) {
            $demando = $this->bdd->prepare("UPDATE personoj_vortoj SET forigita = ? WHERE persono_id = ? AND vorto_id = ?");
            $demando->execute(array($forigita ? 1 : 0, $persono_id, $vorto_id));
        } elseif ($forigita) {
            $demando = $this->bdd->prepare("INSERT INTO personoj_vortoj (persono_id, vorto_id, nombrilo, venontaFojo, forigita) VALUES (?, ?, 1, NOW(), 1)");
            $demando->execute(array($persono_id, $vorto_id));
        }
        return true;
    }

    // Mots à réviser maintenant, dans le désordre : id, fr, tipo. Sans la traduction espéranto attendue (#1088).
    public function revizio(int $persono_id): array {
        $demando = $this->bdd->prepare("SELECT v.id, v.fr, v.tipo FROM personoj_vortoj pv JOIN vortoj v ON v.id = pv.vorto_id
            WHERE pv.persono_id = ? AND pv.forigita = 0 AND pv.venontaFojo <= NOW() ORDER BY RAND()");
        $demando->execute(array($persono_id));
        return $demando->fetchAll(PDO::FETCH_ASSOC);
    }

    // Calendrier des rappels de révision de l'application (#1120) : les mots à réviser maintenant, et ceux qui le seront
    // dans les 8 prochains jours, regroupés par heure. « tempo » est la fin de l'heure (secondes Unix) : à ce moment,
    // tous les mots du groupe sont à réviser ; l'application en déduit le nombre de mots à chaque rappel.
    public function kalendaro(int $persono_id): array {
        $demando = $this->bdd->prepare("SELECT COUNT(*) FROM personoj_vortoj WHERE persono_id = ? AND forigita = 0 AND venontaFojo <= NOW()");
        $demando->execute(array($persono_id));
        $nun = (int)$demando->fetchColumn();
        $demando = $this->bdd->prepare("SELECT (FLOOR(UNIX_TIMESTAMP(venontaFojo) / 3600) + 1) * 3600 AS tempo, COUNT(*) AS nombro
            FROM personoj_vortoj WHERE persono_id = ? AND forigita = 0 AND venontaFojo > NOW() AND venontaFojo <= DATE_ADD(NOW(), INTERVAL 8 DAY)
            GROUP BY tempo ORDER BY tempo");
        $demando->execute(array($persono_id));
        $venontaj = array_map(fn($v) => array("tempo" => (int)$v["tempo"], "nombro" => (int)$v["nombro"]), $demando->fetchAll(PDO::FETCH_ASSOC));
        return array("nun" => $nun, "venontaj" => $venontaj);
    }

    // Jours avant de reproposer un mot après la n-ième bonne réponse d'affilée : 1, 6, puis le double à chaque fois.
    private static function intervalo(int $nombrilo): int {
        return $nombrilo <= 1 ? 1 : ($nombrilo == 2 ? 6 : 2 * self::intervalo($nombrilo - 1));
    }

    // Une variante de la réponse attendue (séparées par |) suffit ; casse, ponctuation et système x ignorés.
    private static function gxustas(string $lernanta, string $bona): bool {
        $forigendaj = array("." => "", "," => "", "'" => "", "!" => "", "?" => "", "-" => "", "_" => "");
        foreach (explode("|", $bona) as $varianto) {
            if (strtolower(konvX(trim(strtr($lernanta, $forigendaj)))) == strtolower(konvX(trim(strtr($varianto, $forigendaj))))) {
                return true;
            }
        }
        return false;
    }

    // Réponse de l'élève en révision du vocabulaire. Bonne réponse : le mot revient plus tard ; mauvaise : son compteur
    // repart à 1 et il revient au plus tôt. Renvoie ["gxusta", "fr", "bona_respondo" (première variante), "respondo"
    // (réponse échappée), "sono"], ou null si le mot n'est pas dans la révision de l'élève.
    public function kontroli(int $persono_id, int $vorto_id, string $respondo): ?array {
        $respondo = mb_ereg_replace('\xc2\xa0', ' ', htmlspecialchars($respondo, ENT_QUOTES)); // espaces insécables (#774)
        $demando = $this->bdd->prepare("SELECT v.fr, v.eo, pv.nombrilo FROM vortoj v
            JOIN personoj_vortoj pv ON pv.vorto_id = v.id AND pv.persono_id = ? WHERE v.id = ?");
        $demando->execute(array($persono_id, $vorto_id));
        $vico = $demando->fetch(PDO::FETCH_ASSOC);
        if (!$vico) {
            return null;
        }
        $gxusta = self::gxustas($respondo, $vico["eo"]);
        if ($gxusta) {
            $this->bdd->prepare("UPDATE personoj_vortoj SET nombrilo = nombrilo + 1, venontaFojo = DATE_ADD(NOW(), INTERVAL ? DAY), lastfojo = NOW()
                WHERE vorto_id = ? AND persono_id = ?")->execute(array(self::intervalo((int)$vico["nombrilo"]), $vorto_id, $persono_id));
        } else {
            $this->bdd->prepare("UPDATE personoj_vortoj SET nombrilo = 1, lastfojo = NOW() WHERE vorto_id = ? AND persono_id = ?")
                ->execute(array($vorto_id, $persono_id));
        }
        if ($gxusta || $respondo !== "") {
            $this->bdd->prepare("INSERT INTO personoj_vortoj_respondoj (persono_id, vorto_id, dato, bona, respondo) VALUES (?, ?, NOW(), ?, ?)")
                ->execute(array($persono_id, $vorto_id, $gxusta ? 1 : 0, $respondo));
        }
        return array("gxusta" => $gxusta, "fr" => $vico["fr"], "bona_respondo" => explode("|", $vico["eo"])[0],
            "respondo" => $respondo, "sono" => self::sono($vico["eo"]));
    }
}
