<?php
// Recalcule personoj_vortoj_respondoj.bona pour les réponses enregistrées du 2026-02-24 au 2026-10-20.
//
// Pendant cette période, kontroliVorton.php passait "TRUE"/"FALSE" en paramètre de requête préparée :
// MariaDB (sans mode strict) convertissait la chaîne en 0, et toutes les réponses étaient enregistrées fausses
// (corrigé par le commit 4e9c4576). La réponse saisie est conservée : on rejoue la comparaison de l'époque.
//
// 1. Exporter les réponses concernées depuis la prod (lecture seule) :
//      mysql --defaults-extra-file=<fichier> -B -N <base> -e "SELECT r.persono_id, r.vorto_id, r.dato, HEX(r.respondo), HEX(v.eo)
//        FROM personoj_vortoj_respondoj r JOIN vortoj v ON v.id = r.vorto_id
//        WHERE r.dato > '2026-02-24 17:11:05' AND r.dato < '2026-10-20 10:23:00' AND r.bona = 0" > respondoj.tsv
// 2. Générer le SQL :
//      php 2026-10-recalcul-bona.php < respondoj.tsv > 2026-10-recalcul-bona.sql
// 3. Sauvegarder la table (MyISAM, pas de transaction), puis appliquer :
//      mysqldump --defaults-extra-file=<fichier> <base> personoj_vortoj_respondoj > ~/avant-recalcul-bona-$(date +%F).sql
//      mysql --defaults-extra-file=<fichier> <base> < 2026-10-recalcul-bona.sql
//
// Le SQL généré contient les réponses des élèves : il ne doit pas être commité.
// Il peut être rejoué sans risque : seules les lignes encore à bona = 0 sont modifiées.

// Copies de konvX() (util.php) et kontroliVorton() (ajax/kontroliVorton.php), inchangées sur la période.
function konvX($buff) {
	$utf8 = array(
			"Ĉ" => "Cx",	"Ĝ" => "Gx",	"Ĥ" => "Hx",
			"Ĵ" => "Jx",	"Ŝ" => "Sx",	"Ŭ" => "Ux",
			"ĉ" => "cx",	"ĝ" => "gx",	"ĥ" => "hx",
			"ĵ" => "jx",	"ŝ" => "sx",	"ŭ" => "ux",
			"\xcc\x82" => "x" , "\xcc\x86" => "x"
		);
	foreach($utf8 as $key => $val) {
		$buff=mb_ereg_replace($key,$val,$buff);
	}
	return($buff);
}

function kontroliVorton($lernantaRespondo,$bonaRespondo) {
	if (strpos($bonaRespondo,"|")!==false) {
		return kontroliVorton($lernantaRespondo,substr($bonaRespondo, 0,strpos($bonaRespondo, "|"))) || kontroliVorton($lernantaRespondo,substr($bonaRespondo, strpos($bonaRespondo, "|")+1));
	} else {
		$trans = array("." => "", "," => "", "'" => "","!" => "","?" => "","-" => "","_" => "");
		$bonaRespondo = trim(strtr($bonaRespondo, $trans));
		$lernantaRespondo = trim(strtr($lernantaRespondo,$trans));
		return strtolower(konvX($lernantaRespondo))==strtolower(konvX($bonaRespondo));
	}
}

mb_regex_encoding("UTF-8");
$bonaj = array();
$kiom = 0;
while (($linio = fgets(STDIN)) !== false) {
	list($persono_id, $vorto_id, $dato, $respondo, $eo) = explode("\t", rtrim($linio, "\n"));
	$kiom++;
	// la réponse est enregistrée telle qu'elle a été comparée (après htmlspecialchars et retrait des espaces insécables)
	if (kontroliVorton(hex2bin($respondo), hex2bin($eo))) {
		$bonaj[] = sprintf("(%d,%d,'%s',X'%s')", $persono_id, $vorto_id, preg_replace('/[^0-9: -]/', '', $dato), preg_replace('/[^0-9A-F]/', '', $respondo));
	}
}

echo "-- Généré par 2026-10-recalcul-bona.php : ".count($bonaj)." bonnes réponses sur ".$kiom." réponses de la période.\n";
echo "SET NAMES utf8;\n";
echo "CREATE TEMPORARY TABLE bonaj (persono_id INT NOT NULL, vorto_id INT NOT NULL, dato TIMESTAMP NOT NULL, respondo VARBINARY(128) NOT NULL, KEY (persono_id, vorto_id, dato));\n";
foreach (array_chunk($bonaj, 1000) as $pako) {
	echo "INSERT INTO bonaj VALUES\n".implode(",\n", $pako).";\n";
}
echo "UPDATE personoj_vortoj_respondoj r JOIN bonaj b ON b.persono_id = r.persono_id AND b.vorto_id = r.vorto_id AND b.dato = r.dato AND BINARY r.respondo = b.respondo\n";
echo "SET r.bona = 1, r.dato = r.dato\n";
echo "WHERE r.bona = 0 AND r.dato > '2026-02-24 17:11:05' AND r.dato < '2026-10-20 10:23:00';\n";
echo "SELECT ROW_COUNT() AS modifiees;\n";
