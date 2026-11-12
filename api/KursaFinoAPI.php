<?php
// KursaFinoAPI.php - Fin d'un cours : l'élève passe en « fini » (stato F), ce qui affiche le lien vers son attestation
// de réussite. Fait par le correcteur depuis miajlernantoj.php, ou par le correcteur IA quand il corrige la dernière
// leçon (l'examen) d'un cours (IaKorektadoAPI). Mails : aux informateurs (rajtoj I) et à l'élève.
// Utilise mailViaSES() de util.php.

class KursaFinoAPI {
    private $bdd;

    public function __construct(PDO $bdd) {
        $this->bdd = $bdd;
    }

    // Passe le cours (ligne de nuna_kurso) en « fini » s'il est pas commencé ou en cours, et envoie les mails.
    // Faux si le cours était déjà fini ou abandonné.
    public function fini(int $nunaKurso_id): bool {
        $demando = $this->bdd->prepare("UPDATE nuna_kurso SET stato = 'F', findato = CURDATE(), lastdato = CURDATE()
            WHERE id = ? AND stato IN ('N', 'K')");
        $demando->execute(array($nunaKurso_id));
        if ($demando->rowCount() === 0) {
            return false;
        }
        $demando = $this->bdd->prepare("SELECT s.*, k.nomo AS kursnomo, k.kodo, ko.enirnomo AS korektanto_nomo
            FROM nuna_kurso nk JOIN personoj s ON s.id = nk.studanto JOIN kursoj k ON k.kodo = nk.kurso
            JOIN personoj ko ON ko.id = nk.korektanto
            WHERE nk.id = ?");
        $demando->execute(array($nunaKurso_id));
        $studanto = $demando->fetch(PDO::FETCH_ASSOC);
        if (!$studanto) {
            return true;
        }
        $h = function ($t) { return htmlspecialchars((string)$t, ENT_QUOTES, "UTF-8"); };

        // mail aux informateurs : un nouvel espérantiste
        $dosiero = __DIR__."/../mails/finiInfFR.html";
        $informistoj = implode(",", $this->bdd->query("SELECT retadreso FROM personoj WHERE rajtoj = 'I'")->fetchAll(PDO::FETCH_COLUMN));
        if ($informistoj !== "" && file_exists($dosiero)) {
            $enhavo = file_get_contents($dosiero);
            foreach (array("ENIRNOMO" => "enirnomo", "NASKIGXDATO" => "naskigxdato", "PERSONNOMO" => "personnomo",
                    "FAMILINOMO" => "familinomo", "SEKSO" => "sekso", "RETADRESO" => "retadreso", "ADRESO1" => "adreso1",
                    "ADRESO2" => "adreso2", "LANDO" => "lando", "POSXTKODO" => "posxtkodo", "URBO" => "urbo",
                    "KURSO" => "kursnomo", "KOREKTANTO" => "korektanto_nomo") as $sxlosilo => $kampo) {
                $enhavo = str_replace("##".$sxlosilo."##", $h($studanto[$kampo]), $enhavo);
            }
            mailViaSES($informistoj, "un esperantiste de plus !", $enhavo);
        }

        // mail de félicitations à l'élève (le code du cours vient de la base : on ne garde que des lettres)
        $dosiero = __DIR__."/../mails/finiStu".preg_replace('/[^A-Z]/', '', strtoupper((string)$studanto["kodo"])).".html";
        if (file_exists($dosiero)) {
            mailViaSES($studanto["retadreso"], "Félicitations !",
                str_replace("##ENIRNOMO##", $h($studanto["enirnomo"]), file_get_contents($dosiero)));
        }
        return true;
    }

    // Le cours de l'élève suivi par ce correcteur, s'il est pas commencé ou en cours : id de nuna_kurso, sinon null.
    public function nunaKurso(int $studanto_id, string $kurso, int $korektanto_id): ?int {
        $demando = $this->bdd->prepare("SELECT id FROM nuna_kurso WHERE studanto = ? AND kurso = ? AND korektanto = ?
            AND stato IN ('N', 'K') ORDER BY id DESC LIMIT 1");
        $demando->execute(array($studanto_id, $kurso, $korektanto_id));
        $id = $demando->fetchColumn();
        return $id === false ? null : (int)$id;
    }

    // La leçon est-elle la dernière de son cours (l'examen) ?
    public function cxuLasta(int $leciono_id): bool {
        $demando = $this->bdd->prepare("SELECT lasta FROM lecionoj WHERE id = ?");
        $demando->execute(array($leciono_id));
        return (int)$demando->fetchColumn() === 1;
    }
}
