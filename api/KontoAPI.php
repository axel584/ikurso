<?php
// KontoAPI.php - Suppression de son compte (issue #1029) ou de sa progression dans un cours (issue #1027)
// par l'élève lui-même.
//
// La suppression du compte efface exactement les tables exportées par EksportoAPI : un élève qui a
// gardé son export peut ainsi être remis en base à l'identique.

require_once __DIR__ . "/EksportoAPI.php";
require_once __DIR__ . "/IaKorektadoAPI.php";

class KontoAPI {
    private $bdd;

    public function __construct(PDO $bdd) {
        $this->bdd = $bdd;
    }

    // Les correcteurs et administrateurs ont des élèves rattachés : leur compte se supprime par un administrateur.
    public static function rajtasForigi(array $persono): bool {
        return !in_array($persono["rajtoj"], array("K", "A"), true);
    }

    public function pasvortoGxustas(int $persono_id, string $pasvorto): bool {
        $demando = $this->bdd->prepare("SELECT pasvorto_md5 FROM personoj WHERE id = ?");
        $demando->execute(array($persono_id));
        $md5 = $demando->fetchColumn();
        require_once __DIR__ . "/EnirAPI.php";
        return EnirAPI::pasvortoGxustas(is_string($md5) ? $md5 : null, $pasvorto);
    }

    // $avertiKorektantojn : prévenir les correcteurs de l'élève (#1108) ; faux pour un invité fusionné dans un vrai compte.
    public function forigi(int $persono_id, bool $avertiKorektantojn = true): void {
        // relevés avant l'effacement, qui emporte nuna_kurso et le nom de l'élève
        $averti = $avertiKorektantojn ? $this->korektantojPorAverti($persono_id) : array();
        // Les tables sont en MyISAM (pas de transaction) : personoj est supprimée en dernier,
        // pour qu'une interruption laisse un compte encore visible et donc à supprimer de nouveau.
        foreach (array_reverse(EksportoAPI::TABELOJ) as $tabelo => list($kolumno)) {
            $demando = $this->bdd->prepare("DELETE FROM `$tabelo` WHERE `$kolumno` = ?");
            $demando->execute(array($persono_id));
        }
        $this->avertiKorektantojn($averti);
    }

    // Correcteurs bénévoles attribués à l'élève (#1108), un par correcteur avec ses cours, et de quoi reconnaître l'élève :
    // identifiant et prénom (pas son adresse : le mail ne doit pas recréer de données personnelles).
    // Le correcteur IA n'a personne à prévenir.
    public function korektantojPorAverti(int $persono_id): array {
        $demando = $this->bdd->prepare("SELECT k.id, k.enirnomo, k.personnomo, k.retadreso, nk.kurso, ku.nomo AS kursonomo,
                s.enirnomo AS s_enirnomo, s.personnomo AS s_personnomo
            FROM nuna_kurso nk
            JOIN personoj k ON k.id = nk.korektanto
            JOIN personoj s ON s.id = nk.studanto
            LEFT JOIN kursoj ku ON ku.kodo = nk.kurso
            WHERE nk.studanto = ? AND nk.korektanto > 0 AND k.id <> s.id AND k.enirnomo <> ? AND k.retadreso <> ''
            ORDER BY k.id, nk.id");
        $demando->execute(array($persono_id, IaKorektadoAPI::ENIRNOMO));
        $korektantoj = array();
        foreach ($demando->fetchAll(PDO::FETCH_ASSOC) as $v) {
            $id = (int)$v["id"];
            if (!isset($korektantoj[$id])) {
                $korektantoj[$id] = array("id" => $id, "enirnomo" => $v["enirnomo"], "personnomo" => $v["personnomo"],
                    "retadreso" => $v["retadreso"], "s_enirnomo" => $v["s_enirnomo"], "s_personnomo" => $v["s_personnomo"],
                    "kursoj" => array());
            }
            $kurso = $v["kursonomo"] !== null && $v["kursonomo"] !== "" ? $v["kursonomo"] : $v["kurso"];
            if (!in_array($kurso, $korektantoj[$id]["kursoj"], true)) {
                $korektantoj[$id]["kursoj"][] = $kurso;
            }
        }
        return array_values($korektantoj);
    }

    // Un mail par correcteur, noté dans son compte rendu (celui de l'élève vient d'être effacé).
    public function avertiKorektantojn(array $korektantoj): void {
        if (!$korektantoj) {
            return;
        }
        $sxablono = file_get_contents(__DIR__ . "/../mails/forigitaKonto.html");
        $h = function ($t) { return htmlspecialchars((string)$t, ENT_QUOTES, "UTF-8"); };
        foreach ($korektantoj as $k) {
            $personnomo = trim((string)$k["s_personnomo"]);
            $kursoj = implode(", ", $k["kursoj"]);
            $teksto = str_replace(array("##KNOMO##", "##SENIRNOMO##", "##SPERSONNOMO##", "##KURSOJ##"),
                array($h(trim((string)$k["personnomo"]) !== "" ? $k["personnomo"] : $k["enirnomo"]), $h($k["s_enirnomo"]),
                    $personnomo !== "" ? " (".$h($personnomo).")" : "", $h($kursoj)), $sxablono);
            mailViaSES($k["retadreso"], "Votre élève ".$k["s_enirnomo"]." a supprimé son compte", $teksto);
            protokolo($k["id"], "COMPTE SUPPRIMÉ", "élève ".$k["s_enirnomo"]." (".$kursoj.") a supprimé son compte : correcteur prévenu");
        }
    }

    // Progression d'un élève, par table : jointure qui rattache chaque ligne (alias t) à une leçon (alias l).
    const PROGRESO = array(
        "respondoj" => "LEFT JOIN ekzerceroj e ON e.id = t.ekzercero_id
                        LEFT JOIN ekzercoj z ON z.id = e.ekzerco_id
                        JOIN lecioneroj le ON le.id = COALESCE(z.lecionero_id, t.lecionero_id)
                        JOIN lecionoj l ON l.id = le.leciono_id",
        "personoj_lecioneroj" => "JOIN lecioneroj le ON le.id = t.lecionero_id JOIN lecionoj l ON l.id = le.leciono_id",
        "personoj_lecionoj" => "JOIN lecionoj l ON l.id = t.leciono_id",
        "takso_leciono" => "JOIN lecionoj l ON l.id = t.leciono_id",
        "personoj_vortoj" => "JOIN vortoj v ON v.id = t.vorto_id JOIN lecioneroj le ON le.id = v.lecionero_id JOIN lecionoj l ON l.id = le.leciono_id",
        "personoj_vortoj_respondoj" => "JOIN vortoj v ON v.id = t.vorto_id JOIN lecioneroj le ON le.id = v.lecionero_id JOIN lecionoj l ON l.id = le.leciono_id",
    );

    // Cours dans lesquels l'élève a une progression : [kodo => nomo]
    public function kursojKunProgreso(int $persono_id): array {
        $partoj = array();
        $parametroj = array();
        foreach (self::PROGRESO as $tabelo => $kunigo) {
            $partoj[] = "SELECT l.kurso FROM `$tabelo` t $kunigo WHERE t.persono_id = ?";
            $parametroj[] = $persono_id;
        }
        $demando = $this->bdd->prepare(
            "SELECT k.kodo, k.nomo FROM kursoj k WHERE k.kodo IN (" . implode(" UNION ", $partoj) . ") ORDER BY k.id");
        $demando->execute($parametroj);
        return $demando->fetchAll(PDO::FETCH_KEY_PAIR);
    }

    // L'inscription au cours (nuna_kurso) et le correcteur sont conservés : seul le travail de l'élève est effacé.
    public function forigiProgreson(int $persono_id, string $kurso): void {
        foreach (self::PROGRESO as $tabelo => $kunigo) {
            $demando = $this->bdd->prepare("DELETE t FROM `$tabelo` t $kunigo WHERE t.persono_id = ? AND l.kurso = ?");
            $demando->execute(array($persono_id, $kurso));
        }
    }
}
