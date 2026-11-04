<?php
// #1087 : extrait le contenu des sections d'un cours de ses fichiers PHP (fr/cge/lec01.php…)
// et écrit le script SQL qui le range dans lecioneroj.enhavo.
// À lancer en ligne de commande, dans le conteneur : php sql/eltiri-enhavon.php CG > sql/NN-….sql
// Fait pour le cours en 10 leçons (sql/55) : lec01.php… n'incluent plus que le gabarit leciono.inc.php,
// le script ne peut donc être relancé qu'à partir des fichiers d'avant (git show 880ff09f:fr/cge/lec01.php…).
// Il servira pour Gerda malaperis et Paŝoj, en ajoutant leur dossier dans $kursoj.
//
// Chaque section (bloc if ($section=="N") { … }) est exécutée avec des fonctions de remplacement :
// les parties dynamiques deviennent des marqueurs que montriLecioneron() (webui.inc.php) remplace à l'affichage :
//   ##EKZERCO:N##          exercice N (getEkzercon)
//   ##QCM:[json]##         QCM(…), ##QCM_BILDOJ:[json]## pour QCM_bildoj(…)
//   ##RESUMO##             récapitulatif de la leçon avant l'envoi
//   <!--se nekonektita-->…<!--alie-->…<!--/se-->   texte selon que l'élève a un compte connecté ou non
// Les liens et les images deviennent relatifs à la racine du site (fr/son/…, fr/cge/bildoj/…).
if (php_sapi_name() !== "cli") { exit; }

$kursoj = array("CG" => array("dosierujo" => "fr/cge", "dosieroj" => "lec%02d.php", "lecionoj" => 10));
$kurso = isset($argv[1]) ? $argv[1] : "";
if (!isset($kursoj[$kurso])) { fwrite(STDERR, "usage : php sql/eltiri-enhavon.php CG\n"); exit(1); }
$k = $kursoj[$kurso];
$radiko = dirname(__DIR__)."/";
$VOJO = "@@VOJO@@";

// fonctions de remplacement, appelées par le code des sections
function getEkzercon($id, $persono_id) { echo "##EKZERCO:".(int)$id."##"; }
function QCM($qcm) { echo "##QCM:".json_encode($qcm, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES)."##"; }
function QCM_bildoj($qcm) {
	global $k;
	foreach ($qcm as &$demando) { $demando["bildo"] = ligilo($demando["bildo"], $k["dosierujo"]); }
	echo "##QCM_BILDOJ:".json_encode($qcm, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES)."##";
}
function recapitulatif_lecon_avant_envoi($kurso, $leciono, $persono_id) { echo "##RESUMO##"; }
function montriKonsilon($teksto) {
	global $vojo;
	echo "<div class='card-panel blue-grey lighten-5 konsilo'><p><i class='material-icons left'>lightbulb_outline</i>";
	echo "<strong>Conseil&nbsp;:</strong> ".$teksto." <a href='".$vojo."helpo.php?section=kurso#konsiloj'>Nos conseils pour apprendre</a></p></div>\n";
}

// adresse relative à la racine du site
function ligilo($url, $dosierujo) {
	global $VOJO;
	if (strpos($url, $VOJO) === 0) { return substr($url, strlen($VOJO)); }
	if (preg_match('~^([a-z]+:|#|/)~i', $url)) { return $url; }
	return $dosierujo."/".$url;
}

// conditions sur la session, remplacées par des commentaires HTML ; if ($persono) est toujours vrai
// ($persono est un tableau, même pour un visiteur) : la condition disparaît
function anstatauxiKondicxojn($kodo) {
	$stako = array();
	return preg_replace_callback('~<\?php\s*(if \(\$persono\) \{|if \(empty\(\$_SESSION\["persono_id"\]\)\) \{|\} else \{|\})\s*\?>~',
		function ($m) use (&$stako) {
			if ($m[1] === 'if ($persono) {') { $stako[] = ""; return ""; }
			if ($m[1] === '} else {') { return end($stako) === "" ? "" : "<!--alie-->"; }
			if ($m[1] === '}') { return array_pop($stako) === "" ? "" : "<!--/se-->"; }
			$stako[] = "se"; return "<!--se nekonektita-->";
		}, $kodo);
}

echo "-- #1087 : contenu des sections du cours ".$kurso." dans lecioneroj.enhavo, extrait de ".$k["dosierujo"]."/ par sql/eltiri-enhavon.php.\n";
echo "-- La section est retrouvée par cours, numéro de leçon et ordre : le script vaut pour la prod et peut être rejoué.\n";
echo "-- lecioneroj est en MyISAM (pas de transaction) : en prod, sauvegarder d'abord la table.\n";
echo "SET NAMES utf8mb4;\n";
for ($leciono = 1; $leciono <= $k["lecionoj"]; $leciono++) {
	$fonto = file_get_contents($radiko.$k["dosierujo"]."/".sprintf($k["dosieroj"], $leciono));
	$fonto = anstatauxiKondicxojn($fonto);
	preg_match_all('~if\s*\(\$section\s*==\s*"(\d+)"\)\s*\{~', $fonto, $m, PREG_OFFSET_CAPTURE);
	$n = count($m[0]);
	for ($i = 0; $i < $n; $i++) {
		$komenco = $m[0][$i][1] + strlen($m[0][$i][0]);
		$fino = $i + 1 < $n ? $m[0][$i + 1][1] : strpos($fonto, "</section>", $komenco);
		$kodo = trim(substr($fonto, $komenco, $fino - $komenco));
		if ($i + 1 == $n) { $kodo = preg_replace('~\?>$~', "", $kodo); } // la dernière se termine en HTML
		$kodo = preg_replace('~\}\s*(//[^\n]*)?$~', "", trim($kodo));      // accolade fermante de la section
		$vojo = $VOJO; $persono = array("x" => 1); $persono_id = ""; $section = $m[1][$i][0];
		ob_start();
		eval($kodo);
		$html = trim(ob_get_clean());
		$html = preg_replace_callback('~\b(href|src)=(["\'])(.*?)\2~', function ($a) use ($k) {
			return $a[1]."=".$a[2].ligilo($a[3], $k["dosierujo"]).$a[2];
		}, $html);
		if (strpos($html, $VOJO) !== false || strpos($html, "<?") !== false) {
			fwrite(STDERR, "leçon $leciono section $section : PHP ou \$vojo restant\n"); exit(1);
		}
		$sql = str_replace(array("\\", "'"), array("\\\\", "''"), $html);
		echo "\n-- leçon $leciono, section $section\n";
		echo "UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '".$sql."'\n";
		echo "  WHERE l.kurso = '".$kurso."' AND l.numero = ".$leciono." AND le.ordo = ".(int)$section.";\n";
	}
}
