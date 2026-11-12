<?php
// KorektadoAPI.php - Enregistrement de la correction d'une leçon : celle d'un correcteur (ajax/registriKorektadon.php)
// et celle du correcteur IA (IaKorektadoAPI, #1130). Même écriture en base, même mail à l'élève.
// Utilise mailViaSES() de util.php.

class KorektadoAPI {
    private $bdd;
    private $urlracine;

    public function __construct(PDO $bdd, string $urlracine) {
        $this->bdd = $bdd;
        $this->urlracine = $urlracine;
    }

    // $korektado : [respondo_id => ['gxusta' => bool, 'korekto' => ?string (HTML), 'poentoj' => ?int]].
    // Une réponse absente du tableau n'est pas modifiée. $korektanto : ligne de personoj.
    // $sxablono : mail envoyé à l'élève (dans mails/), sauf si $sendiMesagxon est faux.
    public function registri(array $korektanto, int $studanto_id, string $kurso, int $leciono, int $leciono_id,
                             array $korektado, ?string $enkonduko, ?string $konkludo, bool $sendiMesagxon,
                             string $sxablono = "novakorektado.html"): void {
        $demando = $this->bdd->prepare("UPDATE respondoj SET gxusta = :gxusta, korekto = :korekto, poentoj = :poentoj
            WHERE id = :id AND persono_id = :studanto");
        foreach ($korektado as $respondo_id => $k) {
            $demando->execute(array(
                "gxusta" => !empty($k["gxusta"]) ? 1 : 0,
                "korekto" => isset($k["korekto"]) ? $k["korekto"] : null,
                "poentoj" => isset($k["poentoj"]) ? $k["poentoj"] : null,
                "id" => (int)$respondo_id,
                "studanto" => $studanto_id,
            ));
        }

        // introduction et conclusion sur la leçon de l'élève
        $this->bdd->prepare("UPDATE personoj_lecionoj SET enkonduko = ?, konkludo = ?, korektita = 1 WHERE persono_id = ? AND leciono_id = ?")
            ->execute(array($enkonduko, $konkludo, $studanto_id, $leciono_id));

        if (!$sendiMesagxon) {
            return;
        }
        $demando = $this->bdd->prepare("SELECT retadreso FROM personoj WHERE id = ?");
        $demando->execute(array($studanto_id));
        $retadreso = $demando->fetchColumn();
        $enhavo = file_get_contents(__DIR__."/../mails/".$sxablono);
        $url = rtrim($this->urlracine, "/")."/vidiLecionon.php?numleciono=".$leciono."&kurso=".$kurso;
        // nom et adresse de la personne qui a corrigé, pour que l'élève puisse lui écrire (#1023)
        $nomo = trim($korektanto["personnomo"]." ".$korektanto["familinomo"]);
        $enhavo = str_replace(
            array("##URL##", "##KPERSONNOMO##", "##KRETADRESO##"),
            array($url, htmlspecialchars($nomo != "" ? $nomo : $korektanto["enirnomo"]), htmlspecialchars((string)$korektanto["retadreso"])),
            $enhavo);
        mailViaSES($retadreso, "Votre leçon a été corrigée", $enhavo);
    }
}
