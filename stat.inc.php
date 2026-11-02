<?php
// En-tête commun des statistiques des correcteurs (statLaux*.php) : contrôle d'accès et onglets.
// La page définit $temo avant l'inclusion.
include "util.php";
require_once "api/StatistikojAPI.php";
$pagxtitolo="Statistiques";
$korpo="statistikoj";
$persono_id=isset($_SESSION["persono_id"])?(int)$_SESSION["persono_id"]:0;
if ($persono_id==0) {header("Location:index.php?erarkodo=8"); exit;}
$persono = apartigiPersonon($persono_id);
if (!$persono || ($persono["rajtoj"]!='A' && $persono["rajtoj"]!='K')) {header("Location:index.php?erarkodo=4"); exit;}
$statistikojAPI = new StatistikojAPI($bdd);
$temoj = array("kategorio" => array("statLauxKategorio.php", "Par catégorie"), "monato" => array("statLauxMonato.php", "Par mois"),
	"lando" => array("statLauxLando.php", "Par pays"), "kurso" => array("statLauxKurso.php", "Par cours"));

function procento(int $kiom, int $entute): string {
	return $entute > 0 ? number_format(100 * $kiom / $entute, 1, ",", "&nbsp;")."&nbsp;%" : "";
}
include "pagxkapo.inc.php";
?>
<div class="row">
	<article class="col s12 l10 offset-l1">
		<h1>Statistiques</h1>
		<ul class="tabs">
			<?php foreach ($temoj as $kodo => list($pagxo, $nomo)) { ?>
			<li class="tab"><a target="_self" href="<?php echo $pagxo; ?>"<?php if ($temo==$kodo) echo ' class="active"'; ?>><?php echo $nomo; ?></a></li>
			<?php } ?>
		</ul>
