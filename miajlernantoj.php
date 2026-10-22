<?php
include "util.php";
require_once "api/LernantojAPI.php";
$pagxtitolo="Mes élèves";
$korpo="miajlernantoj";
$eksaj=isset($_GET["eksaj"]) && $_GET["eksaj"]=="jes";
$farite=isset($_GET["farite"])?$_GET["farite"]:"";
$persono_id=isset($_SESSION["persono_id"])?(int)$_SESSION["persono_id"]:0;
if ($persono_id==0) {header("Location:index.php?erarkodo=8"); exit;}
$persono = apartigiPersonon($persono_id);
if (!$persono || ($persono["rajtoj"]!='A' && $persono["rajtoj"]!='K')) {header("Location:index.php?erarkodo=4"); exit;}

$lernantojAPI = new LernantojAPI($bdd);
// dernière leçon de chaque cours : le bouton « A fini » n'apparaît qu'à ce moment-là
const LASTAJ_LECIONOJ = array("CG" => 10, "GR" => 26, "KE" => 18, "PP" => 30);

function h($teksto): string {
	// certaines données anciennes sont déjà échappées ou contiennent des antislashs
	return htmlspecialchars(stripslashes((string)$teksto), ENT_QUOTES, "UTF-8", false);
}

function datoFr($dato): string {
	$partoj = explode("-", substr((string)$dato, 0, 10));
	if (count($partoj)!=3 || (int)$partoj[0]==0) {
		return "";
	}
	return $partoj[2]."/".$partoj[1]."/".$partoj[0];
}

function tagojKoloro(int $tagoj): string {
	if ($tagoj<10) return "green";
	if ($tagoj<31) return "orange";
	return "red";
}

function montriKomentojn(array $lernanto, array $komentoj, int $persono_id) {
	echo "<p class='etikedo'>Commentaires des correcteurs</p>";
	if (!$komentoj) {
		echo "<p class='malplena'>Aucun commentaire.</p>";
	}
	echo "<ul class='komentoj'>";
	foreach ($komentoj as $komento) {
		echo "<li>";
		if ((int)$komento["korektanto"]==$persono_id) {
			echo "<a href='forigiNoton.php?noto_id=".(int)$komento["id"]."&amp;pagxo=miajlernantoj.php' class='tooltipped' data-tooltip='Supprimer ce commentaire'><i class='material-icons tiny'>delete</i></a> ";
		}
		echo "<em>".h($komento["korektanto_nomo"])." le ".datoFr($komento["dato"])."</em> : ".h($komento["teksto"])."</li>";
	}
	echo "</ul>";
	echo "<form method='post' action='aldoniNoton.php' class='aldoni-noton'>";
	echo "<input type='hidden' name='stud_id' value='".(int)$lernanto["studanto"]."'>";
	echo "<input type='hidden' name='pagxo' value='miajlernantoj.php".($lernanto["stato"]=="F" || $lernanto["stato"]=="H" ? "?eksaj=jes" : "")."'>";
	echo "<div class='input-field'><input type='text' name='teksto' id='teksto".(int)$lernanto["kursid"]."' required>";
	echo "<label for='teksto".(int)$lernanto["kursid"]."'>Ajouter un commentaire</label>";
	echo "<span class='helper-text'>Visible uniquement par les correcteurs. Ne pas l’utiliser pour contacter les administrateurs.</span></div>";
	echo "<button type='submit' class='btn-flat waves-effect'><i class='material-icons left'>add_comment</i>Ajouter</button>";
	echo "</form>";
}

function montriHistorion(array $lecioneroj) {
	echo "<ul class='collapsible historio'><li>";
	echo "<div class='collapsible-header'><i class='material-icons'>history</i>Historique des leçons&nbsp;: ".count($lecioneroj)." page(s) terminée(s)</div>";
	echo "<div class='collapsible-body'>";
	if (!$lecioneroj) {
		echo "<p class='malplena'>Aucune page terminée.</p>";
	} else {
		echo "<table class='striped'><thead><tr><th>Page</th><th>Terminée le</th></tr></thead><tbody>";
		foreach ($lecioneroj as $lecionero) {
			echo "<tr><td>".(int)$lecionero["numero"].".".(int)$lecionero["ordo"]." ".h(strip_tags($lecionero["lecionero_titolo"]))."</td>";
			echo "<td>".datoFr($lecionero["dato"])." ".substr($lecionero["dato"], 11, 5)."</td></tr>";
		}
		echo "</tbody></table>";
	}
	echo "</div></li></ul>";
}

function montriLernanton(array $lernanto, LernantojAPI $lernantojAPI, int $persono_id) {
	$eksa = ($lernanto["stato"]=="F" || $lernanto["stato"]=="H");
	$lastdato = datoFr($lernanto["lastdato"]);
	echo "<div class='card lernanto'><div class='card-content'>";

	// en-tête : jours sans envoi, nom, cours
	echo "<div class='kapo'>";
	if (!$eksa) {
		$tagoj = (int)$lernanto["tagoj"];
		echo "<span class='tagoj ".tagojKoloro($tagoj)." tooltipped' data-tooltip='Jours depuis le dernier envoi (ou l’inscription)'>".$tagoj."</span>";
	}
	echo "<div class='nomo'><span class='card-title'>".h($lernanto["enirnomo"])."</span> ";
	echo "<span class='plena-nomo'>".h(trim($lernanto["personnomo"]." ".$lernanto["familinomo"]))."</span><br>";
	echo "<a href='mailto:".h($lernanto["retadreso"])."'>".h($lernanto["retadreso"])."</a></div>";
	echo "<span class='kurso chip'>".h($lernanto["kursnomo"])."</span>";
	echo "</div>";

	// dernière leçon et accès à la correction
	echo "<div class='leciono'>";
	if ($eksa) {
		echo "<p>".($lernanto["stato"]=="F" ? "A fini le cours le " : "A abandonné le ").($lastdato ?: "--/--/--");
		echo " — dernière leçon&nbsp;: <b>".h($lernanto["leciono_titolo"])."</b></p>";
	} elseif ($lastdato=="") {
		echo "<p>Aucune leçon envoyée pour l’instant.</p>";
	} else {
		echo "<p>Dernière leçon envoyée&nbsp;: <b>".h($lernanto["leciono_titolo"])."</b>, le ".$lastdato."</p>";
		if ($lernanto["kurso"]!="KE") { // les leçons du logiciel ne sont pas envoyées en ligne
			$numero = $lernanto["nunleciono"]!==null ? (int)$lernanto["nunleciono"] : 1;
			echo "<a class='btn-large waves-effect waves-light contraste-A' href='vidiLecionon.php?numleciono=".$numero."&amp;kurso=".urlencode($lernanto["kurso"])."&amp;studanto=".(int)$lernanto["studanto"]."'>";
			echo "<i class='material-icons left'>rate_review</i>Corriger la leçon ".$numero."</a>";
		}
	}
	echo "</div>";

	echo "<div class='row'>";
	// coordonnées
	echo "<div class='col s12 m4 informoj'>";
	$linioj = array("Inscription le ".datoFr($lernanto["ekdato"]));
	if (datoFr($lernanto["naskigxdato"])!="") $linioj[] = "Né(e) le ".datoFr($lernanto["naskigxdato"]);
	foreach (array($lernanto["adreso1"], $lernanto["adreso2"], trim($lernanto["posxtkodo"]." ".$lernanto["urbo"]), $lernanto["lando"]) as $linio) {
		if (trim((string)$linio)!="") $linioj[] = h($linio);
	}
	echo "<p class='etikedo'>Coordonnées</p><p>".implode("<br>", $linioj)."</p>";
	if (!$eksa) {
		// préférences d'envoi des mails (#920)
		echo "<p>".($lernanto["rappel"] ? "Reçoit les rappels automatiques" : "<i class='material-icons tiny'>notifications_off</i> Ne reçoit pas les rappels automatiques")."</p>";
	}
	echo "</div>";
	// commentaires
	echo "<div class='col s12 m8'>";
	echo "<p class='etikedo'>Commentaire de l’élève</p>";
	echo "<p>".($lernanto["kialo"]!="" ? nl2br(h($lernanto["kialo"])) : "<span class='malplena'>Aucun commentaire.</span>")."</p>";
	montriKomentojn($lernanto, $lernantojAPI->komentoj((int)$lernanto["studanto"]), $persono_id);
	echo "</div>";
	echo "</div>";

	if (!$eksa) {
		montriHistorion($lernantojAPI->lecioneroj((int)$lernanto["studanto"], (string)$lernanto["kurso"]));
	}
	echo "</div>";

	// actions sur le suivi de l'élève
	echo "<div class='card-action'>";
	if ($eksa) {
		if ($lernanto["stato"]=="H") {
			echo "<form method='POST' action='repreniLernanton.php'>";
			echo "<input type='hidden' name='studanto' value='".(int)$lernanto["studanto"]."'>";
			echo "<input type='hidden' name='enirnomo' value='".h($lernanto["enirnomo"])."'>";
			echo "<input type='hidden' name='idnunaKurso' value='".(int)$lernanto["kursid"]."'>";
			echo "<button type='submit' class='btn waves-effect waves-light primaire'>Récupérer l’élève</button>";
			echo "</form>";
		}
	} else {
		if ($lernanto["kurso"]=="KE") {
			echo "<form method='POST' action='miajlernantoj2.php' class='ke'>";
			echo "<input type='hidden' name='nunleciono' value='".(int)$lernanto["nunleciono"]."'>";
			echo "<div class='input-field inline'><select name='leciono'>";
			echo "<option value='".(int)$lernanto["kursid"]."-N'>Pas encore commencé</option>";
			foreach ($lernantojAPI->lecionoj("KE") as $leciono) {
				echo "<option value='".(int)$lernanto["kursid"]."-".(int)$leciono["numero"]."'".((int)$lernanto["nunleciono"]==(int)$leciono["numero"] ? " selected" : "").">".h($leciono["titolo"])."</option>";
			}
			echo "</select></div> <button type='submit' class='btn-flat waves-effect'>Valider</button>";
			echo "</form>";
		}
		if (isset(LASTAJ_LECIONOJ[$lernanto["kurso"]]) && (int)$lernanto["nunleciono"]==LASTAJ_LECIONOJ[$lernanto["kurso"]]) {
			echo "<form method='POST' action='miajlernantoj2.php'>";
			echo "<input type='hidden' name='nunleciono' value='".(int)$lernanto["nunleciono"]."'>";
			echo "<input type='hidden' name='leciono' value='".(int)$lernanto["kursid"]."-F'>";
			echo "<button type='submit' class='btn waves-effect waves-light contraste-B tooltipped' data-tooltip='L’élève recevra un message pour obtenir son diplôme'>A fini</button>";
			echo "</form>";
		}
		echo "<form method='POST' action='miajlernantoj2.php'>";
		echo "<input type='hidden' name='nunleciono' value='".(int)$lernanto["nunleciono"]."'>";
		echo "<input type='hidden' name='leciono' value='".(int)$lernanto["kursid"]."-H'>";
		echo "<button type='submit' class='btn-flat waves-effect tooltipped' data-tooltip='Vous libérez ainsi une place pour un nouvel élève'>A abandonné</button>";
		echo "</form>";
	}
	echo "</div></div>";
}

function montriListon(array $lernantoj, LernantojAPI $lernantojAPI, int $persono_id) {
	if (!$lernantoj) {
		echo "<p>Aucun élève.</p>";
	}
	foreach ($lernantoj as $lernanto) {
		montriLernanton($lernanto, $lernantojAPI, $persono_id);
	}
}

$nunajLernantoj = $lernantojAPI->lernantoj($persono_id, false);
$eksajLernantoj = $lernantojAPI->lernantoj($persono_id, true);
include "pagxkapo.inc.php";
?>
<div class="row">
	<article class="col s12 l10 offset-l1">
		<h1>Mes élèves</h1>

		<?php if ($farite=="jes") { ?>
			<p class="card-panel green lighten-4">Vos données ont été mises à jour.</p>
		<?php } ?>
		<p class="gvidilo-ligilo">Pour savoir comment gérer vos élèves, lisez le <a href="gvidilo.php">Guide du correcteur</a>.
			Pour changer le nombre d’élèves que vous suivez&nbsp;: <a href="sxangxiNBlernantoj.php">modifier le nombre d’élèves</a>.</p>

		<ul class="tabs">
			<li class="tab"><a href="#nunaj"<?php if (!$eksaj) echo ' class="active"'; ?>>Élèves en cours (<?php echo count($nunajLernantoj); ?>)</a></li>
			<li class="tab"><a href="#eksaj"<?php if ($eksaj) echo ' class="active"'; ?>>Anciens élèves (<?php echo count($eksajLernantoj); ?>)</a></li>
		</ul>
		<div id="nunaj"><?php montriListon($nunajLernantoj, $lernantojAPI, $persono_id); ?></div>
		<div id="eksaj"><?php montriListon($eksajLernantoj, $lernantojAPI, $persono_id); ?></div>
	</article>
</div>
<?php include "pagxpiedo.inc.php";?>
