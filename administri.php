<?php
// Gestion des comptes : élèves en attente, recherche, fiche d'une personne, cours et correcteur,
// commentaires, élèves d'un correcteur. Les formulaires gardent leurs scripts de traitement :
// administri2.php (fiche), administriNunanKurson.php (correcteur), sercxi.php (recherche),
// delete.php, eniri-por-administranto.php, aldoniNoton.php et forigiNoton.php.
include "util.php";
require_once __DIR__ . "/api/AdministriAPI.php";
require_once __DIR__ . "/api/AgordojAPI.php";
$pagxtitolo="Gérer les utilisateurs";
$korpo="informoj";
$persono_id=isset($_SESSION["persono_id"])?$_SESSION["persono_id"]:"";
if ($persono_id=="") {header("Location:index.php?erarkodo=8"); exit;}
$persono = apartigiPersonon($persono_id);
if ($rajto!='A' && $rajto!='I'){header("Location:index.php?erarkodo=4"); exit;}
$administranto = ($persono["rajtoj"]=='A'); // les informateurs (I) consultent seulement

$celpersono_id = isset($_REQUEST["celpersono_id"]) && ctype_digit((string)$_REQUEST["celpersono_id"]) ? (int)$_REQUEST["celpersono_id"] : 0;
$celpersono = $celpersono_id ? apartigiPersonon($celpersono_id) : null;
if (!$celpersono) {
	$celpersono_id = 0;
}
$administriEraro = isset($_GET["erarkodo"]) ? $_GET["erarkodo"] : "";
$api = new AdministriAPI($bdd);

function h($teksto): string {
	return htmlspecialchars((string)$teksto, ENT_QUOTES, "UTF-8");
}

// « 2026-10-26 » ou « 2026-10-26 14:00:00 » → « 26/10/2026 », vide si la date est absente
function dato($dato): string {
	$partoj = explode("-", substr((string)$dato, 0, 10));
	if (count($partoj) != 3 || (int)$partoj[0] == 0) {
		return "";
	}
	return $partoj[2]."/".$partoj[1]."/".$partoj[0];
}

// liste déroulante d'une table de référence (rajtoj, landoj, kursoj, monatoj)
function listo($nomo, $tabelo, $elektita, $malplena, $ordo = " order by nomo") {
	echo "<select name='".h($nomo)."' id='".h($nomo)."'>";
	if ($malplena !== null) {
		echo "<option value=''>".h($malplena)."</option>";
	}
	foreach (konstruiListon($tabelo, "kodo", "nomo", $ordo) as $listero) {
		echo "<option value='".h($listero["valuo"])."'".((string)$listero["valuo"] === (string)$elektita ? " selected" : "").">".h($listero["vidigito"])."</option>";
	}
	echo "</select>";
}

// formulaire d'attribution d'un correcteur (administriNunanKurson.php)
function korektantoFormularo($celpersono_id, $kurso, $elektita, $api) {
	$korektantoj = $api->korektantojLauxKurso($kurso);
	echo "<form method='post' action='administriNunanKurson.php' class='korektanto-formularo'>";
	echo "<input type='hidden' name='celpersono_id' value='".(int)$celpersono_id."'>";
	echo "<input type='hidden' name='kurso' value='".h($kurso)."'>";
	echo "<div class='input-field'><select name='korektanto_id'>";
	echo "<option value=''>Pas de correcteur</option>";
	foreach ($korektantoj as $k) {
		echo "<option value='".$k["id"]."'".($k["id"] == $elektita ? " selected" : "").">".h($k["enirnomo"])." (".$k["lernantoj"]."/".$k["kapablo"].") ".$k["procento"]."%</option>";
	}
	echo "</select><label>Correcteur</label></div>";
	echo "<button type='submit' class='btn-small waves-effect waves-light'><i class='material-icons left'>save</i>Attribuer</button>";
	echo "</form>";
}

if ($celpersono_id && $administranto) {
	$_SESSION["admin_id"]=$_SESSION["persono_id"]; // pour revenir à son compte après « se connecter comme »
}

include "pagxkapo.inc.php";
?>
	</form><!-- ferme le formulaire principal ouvert par pagxkapo.inc.php : cette page a ses propres formulaires, qui ne peuvent pas y être imbriqués -->

<div class="row administri">

	<article class="col s12 l9 push-l3">
		<?php if (isset($_GET["validi"])) { ?>
			<div class="card-panel green lighten-4">La fiche a été correctement mise à jour.</div>
		<?php } ?>
		<?php if ($administriEraro == "9") { ?>
			<div class="card-panel red lighten-4">Cet élève a déjà un correcteur.</div>
		<?php } ?>
		<?php if ($administriEraro == "11") { ?>
			<div class="card-panel red lighten-4">Choisissez un correcteur avant de sauvegarder.</div>
		<?php } ?>

<?php if (!$celpersono_id) { ?>
		<h1>Gérer les utilisateurs</h1>
		<p>Choisissez un élève en attente ou recherchez un compte.</p>
<?php } else {
	$agordoj = (new AgordojAPI($bdd))->legi($celpersono_id);
	$naskigxdato = explode("-", (string)$celpersono["naskigxdato"]);
	if (count($naskigxdato) != 3) { $naskigxdato = array("0000", "00", "00"); }
?>
		<h1><?php echo h($celpersono["enirnomo"]); ?> <span class="grey-text fiche-numero">fiche n° <?php echo $celpersono_id; ?></span></h1>

		<div class="card">
			<div class="card-content">
				<form name="administri2" id="administri2" method="post" action="administri2.php">
					<input type="hidden" name="celpersono_id" value="<?php echo $celpersono_id; ?>">
					<div class="row">
						<div class="col s12">
							<label class="sekso"><input name="sekso" type="radio" value="M" <?php if ($celpersono["sekso"]=='M') echo "checked"; ?>><span>Homme</span></label>
							<label class="sekso"><input name="sekso" type="radio" value="I" <?php if ($celpersono["sekso"]=='I') echo "checked"; ?>><span>Femme</span></label>
						</div>
						<div class="input-field col s12 m6"><input type="text" id="familinomo" name="familinomo" value="<?php echo h($celpersono["familinomo"]); ?>"><label for="familinomo">Nom</label></div>
						<div class="input-field col s12 m6"><input type="text" id="personnomo" name="personnomo" value="<?php echo h($celpersono["personnomo"]); ?>"><label for="personnomo">Prénom</label></div>
						<div class="input-field col s12 m6"><input type="text" id="celenirnomo" name="celenirnomo" value="<?php echo h($celpersono["enirnomo"]); ?>"><label for="celenirnomo">Identifiant *</label></div>
						<div class="input-field col s12 m6"><input type="email" id="retadreso" name="retadreso" value="<?php echo h($celpersono["retadreso"]); ?>"><label for="retadreso">Adresse électronique *</label></div>
						<div class="input-field col s12 m6"><input type="text" id="adreso1" name="adreso1" value="<?php echo h($celpersono["adreso1"]); ?>"><label for="adreso1">Adresse</label></div>
						<div class="input-field col s12 m6"><input type="text" id="adreso2" name="adreso2" value="<?php echo h($celpersono["adreso2"]); ?>"><label for="adreso2">Adresse (suite)</label></div>
						<div class="input-field col s4 m2"><input type="text" id="posxtkodo" name="posxtkodo" value="<?php echo h($celpersono["posxtkodo"]); ?>"><label for="posxtkodo">Code postal</label></div>
						<div class="input-field col s8 m4"><input type="text" id="urbo" name="urbo" value="<?php echo h($celpersono["urbo"]); ?>"><label for="urbo">Ville</label></div>
						<div class="input-field col s12 m6"><?php listo("lando", "landoj", $celpersono["lando"], "—"); ?><label>Pays</label></div>
						<div class="input-field col s12 m6"><?php listo("rajtoj", "rajtoj", $celpersono["rajtoj"], "—"); ?><label>Droits</label></div>
						<div class="input-field col s12 m6"><?php listo("kurso", "kursoj", $celpersono["kurso"], ($celpersono["kurso"]=="" || $celpersono["kurso"]=="--") ? "Aucun cours choisi" : null); ?><label>Dernier cours choisi</label></div>
						<div class="col s12 m6 naskigxdato">
							<span class="grey-text">Date de naissance</span>
							<div class="row">
								<div class="input-field col s3"><input type="text" id="naskigxdato_tago" name="naskigxdato_tago" maxlength="2" value="<?php if ($naskigxdato[2]!="00") echo h($naskigxdato[2]); ?>" placeholder="jour"></div>
								<div class="input-field col s5"><?php listo("naskigxdato_monato", "monatoj", $naskigxdato[1]!="00" ? $naskigxdato[1] : "", "mois", ""); ?></div>
								<div class="input-field col s4"><input type="text" id="naskigxdato_jaro" name="naskigxdato_jaro" maxlength="4" value="<?php if ($naskigxdato[0]!="0000") echo h($naskigxdato[0]); ?>" placeholder="année"></div>
							</div>
						</div>
						<div class="col s12 m6">
							<span class="grey-text">Mails reçus</span><br>
							<label><input type="checkbox" class="filled-in" name="rappel" <?php if ($agordoj["RAPPEL"]) { echo "checked"; } ?>><span>rappels</span></label>
							<label><input type="checkbox" class="filled-in" name="saviezvous" <?php if ($agordoj["SAVIEZVOUS"]) { echo "checked"; } ?>><span>le saviez-vous</span></label>
						</div>
						<div class="input-field col s12">
							<textarea id="kialo" name="kialo" class="materialize-textarea"><?php echo h(stripslashes((string)$celpersono["kialo"])); ?></textarea>
							<label for="kialo">Commentaire de l’élève</label>
						</div>
					</div>
					<p class="fiche-informoj grey-text">
						Compte activé : <strong><?php echo $celpersono["aktivigita"]==1 ? "oui" : "non"; ?></strong>
						· Inscription : <strong><?php echo h(dato($celpersono["ekdato"])); ?></strong>
						· Dernière connexion : <strong><?php echo h(dato($celpersono["lasteniro"])); ?></strong>
					</p>
				</form>
			</div>
			<?php if ($administranto) { ?>
			<div class="card-action">
				<button type="submit" form="administri2" class="btn waves-effect waves-light"><i class="material-icons left">save</i>Enregistrer</button>
				<a class="btn-flat waves-effect" href="eniri-por-administranto.php?persono_id=<?php echo $celpersono_id; ?>"><i class="material-icons left">login</i>Se connecter comme <?php echo h($celpersono["enirnomo"]); ?></a>
				<form method="post" action="delete.php" class="forigi">
					<input type="hidden" name="celpersono_id" value="<?php echo $celpersono_id; ?>">
					<button type="submit" class="btn-flat waves-effect red-text"><i class="material-icons left">delete</i>Supprimer</button>
				</form>
			</div>
			<?php } ?>
		</div>

<?php
	// cours suivis et correcteur, pour les élèves (S) et ceux qui attendent un correcteur (P)
	if ($celpersono["rajtoj"]=='S' || $celpersono["rajtoj"]=='P') {
		$kursoj = $api->kursojDeLernanto($celpersono_id);
		$havasKurson = false;         // inscrit au cours choisi, ni terminé ni abandonné
		$havasSekvitanKurson = false; // suit actuellement le cours choisi (N ou K)
?>
		<div class="card">
			<div class="card-content">
				<span class="card-title">Cours et correcteur</span>
				<div class="tabelo"><table class="striped">
					<thead><tr><th>Cours</th><th>Correcteur</th><th>Dernière leçon reçue</th></tr></thead>
					<tbody>
<?php	foreach ($kursoj as $kurso) {
			$elektitaKurso = ($celpersono["kurso"] == $kurso["kurso"]);
			if ($elektitaKurso && $kurso["stato"] != 'H' && $kurso["stato"] != 'F') { $havasKurson = true; }
			$sekvata = $elektitaKurso && ($kurso["stato"] == 'N' || $kurso["stato"] == 'K');
			if ($sekvata) { $havasSekvitanKurson = true; }
?>
						<tr>
							<td><?php echo h($kurso["kurso_nomo"]); ?><?php if ($sekvata) { echo " <span class='new badge' data-badge-caption='en cours'></span>"; } ?></td>
							<td>
								<?php if ($sekvata && $celpersono["rajtoj"]=='P' && $administranto) {
									// élève remis en attente : on peut lui donner un autre correcteur
									korektantoFormularo($celpersono_id, $kurso["kurso"], 0, $api);
								} else { ?>
									<a href="administri.php?celpersono_id=<?php echo (int)$kurso["korektanto_id"]; ?>"><?php echo h($kurso["korektanto_enirnomo"]); ?></a>
								<?php } ?>
							</td>
							<td>
								<?php if ($kurso["leciono_titolo"]=="") { echo "Pas de leçon en cours"; }
								else { echo h($kurso["leciono_titolo"])." <span class='grey-text'>(".h(dato($kurso["lastdato"])).")</span>"; } ?>
								<?php if ($kurso["stato"]=='F') { ?>
									· <a href="diplome.php?kurso=<?php echo urlencode($kurso["kurso"]); ?>&amp;clef=<?php echo urlencode((string)$celpersono["aktivigo"]); ?>" target="_blank">Diplôme</a>
								<?php } ?>
							</td>
						</tr>
<?php	}
		// on ne propose un correcteur que si l'élève ne suit pas déjà le cours choisi et ne l'a pas commencé
		if (!$havasKurson && !$havasSekvitanKurson) {
			$kursoKodo = (string)$celpersono["kurso"];
			$plejTauga = 0;
?>
						<tr>
							<td><?php echo $kursoKodo != "" && $kursoKodo != "--" ? h($api->kursoNomo($kursoKodo)) : "<span class='grey-text'>Aucun cours choisi</span>"; ?></td>
							<td>
								<?php if ($kursoKodo != "" && $kursoKodo != "--") {
									$plejTauga = troviPlejTauganKorektanton($celpersono_id, $kursoKodo);
									$idealo = $plejTauga ? apartigiPersonon($plejTauga) : null;
									if ($idealo) { echo "<p class='grey-text'>Correcteur idéal : ".h($idealo["enirnomo"])."</p>"; }
									if ($administranto) { korektantoFormularo($celpersono_id, $kursoKodo, $plejTauga, $api); }
								} else {
									echo "<span class='grey-text'>Choisissez d’abord un cours dans la fiche.</span>";
								} ?>
							</td>
							<td>Pas de leçon en cours</td>
						</tr>
<?php	} ?>
					</tbody>
				</table></div>
			</div>
		</div>
<?php } ?>

<?php $lecioneroj = $api->lecioneroj($celpersono_id); ?>
		<ul class="collapsible">
			<li>
				<div class="collapsible-header"><i class="material-icons">history</i>Historique des sections vues <span class="badge"><?php echo count($lecioneroj); ?></span></div>
				<div class="collapsible-body">
					<?php if (!$lecioneroj) { echo "<p class='grey-text'>Aucune section terminée.</p>"; } ?>
					<?php foreach ($lecioneroj as $lecionero) { ?>
						<div>[<?php echo h($lecionero["kurso"]); ?>] <?php echo h($lecionero["leciono_titolo"]); ?> – <?php echo (int)$lecionero["ordo"]; ?> : <?php echo h(strip_tags((string)$lecionero["lecionero_titolo"])); ?> <span class="grey-text">(<?php echo h(dato($lecionero["dato"])); ?>)</span></div>
					<?php } ?>
				</div>
			</li>
		</ul>

<?php if ($administranto) {
	$pagxo = "administri.php?celpersono_id=".$celpersono_id;
?>
		<div class="card">
			<div class="card-content">
				<span class="card-title">Commentaires des correcteurs</span>
				<?php $komentoj = $api->komentoj($celpersono_id); ?>
				<?php if (!$komentoj) { echo "<p class='grey-text'>Aucun commentaire.</p>"; } else { ?>
				<ul class="collection komentoj">
					<?php foreach ($komentoj as $komento) { ?>
						<li class="collection-item">
							<a class="secondary-content red-text" title="Supprimer ce commentaire" href="forigiNoton.php?noto_id=<?php echo (int)$komento["id"]; ?>&amp;stud_id=<?php echo $celpersono_id; ?>&amp;pagxo=<?php echo urlencode($pagxo); ?>"><i class="material-icons">delete</i></a>
							<span class="grey-text">de <?php echo h($komento["korektanto"]); ?> le <?php echo h(dato($komento["dato"])); ?> :</span>
							<?php echo h($komento["teksto"]); ?>
						</li>
					<?php } ?>
				</ul>
				<?php } ?>
				<form method="post" action="aldoniNoton.php" class="row aldoni-noton">
					<input type="hidden" name="stud_id" value="<?php echo $celpersono_id; ?>">
					<input type="hidden" name="pagxo" value="<?php echo h($pagxo); ?>">
					<div class="input-field col s12 m9"><input type="text" id="teksto" name="teksto"><label for="teksto">Ajouter un commentaire</label></div>
					<div class="col s12 m3"><button type="submit" class="btn-small waves-effect waves-light"><i class="material-icons left">add</i>Ajouter</button></div>
				</form>
			</div>
		</div>
<?php } ?>

<?php // élèves du correcteur (ou de l'administrateur qui corrige)
	if ($celpersono["rajtoj"]=='A' || $celpersono["rajtoj"]=='K') {
		$maksimumoj = $api->maksimumoj($celpersono_id);
		$lernantoj = $api->lernantojDeKorektanto($celpersono_id);
?>
		<h2>Ses élèves <span class="grey-text">(<?php echo count($lernantoj); ?>)</span></h2>
		<p>Nombre maximum d’élèves pour chaque cours :
			<?php foreach ($maksimumoj as $maks) { ?>
				<span class="chip"><?php echo h($maks["kurso"]); ?> : <?php echo (int)$maks["kiom"]; ?></span>
			<?php } ?>
			<?php if (!$maksimumoj) { echo "<span class='grey-text'>aucun</span>"; } ?>
		</p>
		<?php if (!$lernantoj) { echo "<p class='grey-text'>Aucun élève.</p>"; } ?>
		<?php foreach ($lernantoj as $lernanto) { ?>
		<div class="card lernanto">
			<div class="card-content">
				<span class="card-title"><a href="administri.php?celpersono_id=<?php echo (int)$lernanto["id"]; ?>"><?php echo h($lernanto["enirnomo"]); ?></a>
					<span class="grey-text">(<?php echo h(trim($lernanto["personnomo"]." ".$lernanto["familinomo"])); ?>)</span></span>
				<p><a href="mailto:<?php echo h($lernanto["retadreso"]); ?>"><?php echo h($lernanto["retadreso"]); ?></a></p>
				<div class="row">
					<div class="col s12 m6">
						<?php echo h(dato($lernanto["naskigxdato"])); ?><br>
						<?php if ($lernanto["adreso1"]!="") { echo h($lernanto["adreso1"])."<br>"; } ?>
						<?php if ($lernanto["adreso2"]!="") { echo h($lernanto["adreso2"])."<br>"; } ?>
						<?php echo h($lernanto["posxtkodo"]." ".$lernanto["urbo"]); ?> <?php if ($lernanto["lando"]!="") { echo "(".h($lernanto["lando"]).")"; } ?>
					</div>
					<div class="col s12 m6">
						<em>cours suivi :</em> <strong><?php echo h($lernanto["kurso_nomo"]); ?></strong><br>
						<em>inscription le :</em> <?php echo h(dato($lernanto["ekdato"])); ?><br>
						<em>dernière leçon :</em> <?php echo h($lernanto["leciono_titolo"]); ?> <?php echo h(dato($lernanto["lastdato"])) ?: "--/--/--"; ?>
					</div>
				</div>
				<?php if ((string)$lernanto["kialo"]!="") { ?><p><em>commentaire de l’élève :</em> <?php echo h(stripslashes((string)$lernanto["kialo"])); ?></p><?php } ?>
				<?php foreach ($api->komentoj((int)$lernanto["id"]) as $komento) { ?>
					<p class="grey-text"><em>de <?php echo h($komento["korektanto"]); ?> le <?php echo h(dato($komento["dato"])); ?> :</em> <?php echo h($komento["teksto"]); ?></p>
				<?php } ?>
			</div>
		</div>
		<?php } ?>
<?php } ?>
<?php } // fin de la fiche ?>
	</article>

	<aside class="col s12 l3 pull-l9">
		<div class="card">
			<div class="card-content">
				<span class="card-title">Rechercher</span>
				<form method="post" action="sercxi.php">
					<div class="input-field"><input type="text" id="s_celenirnomo" name="celenirnomo"><label for="s_celenirnomo">Identifiant</label></div>
					<div class="input-field"><input type="text" id="s_retadreso" name="retadreso"><label for="s_retadreso">Adresse e-mail</label></div>
					<div class="input-field"><input type="text" id="s_familinomo" name="familinomo"><label for="s_familinomo">Nom</label></div>
					<div class="input-field"><input type="text" id="s_personnomo" name="personnomo"><label for="s_personnomo">Prénom</label></div>
					<div class="input-field"><input type="text" id="s_urbo" name="urbo"><label for="s_urbo">Ville</label></div>
					<div class="input-field"><input type="text" id="s_posxtkodo" name="posxtkodo"><label for="s_posxtkodo">Code postal (début)</label></div>
					<button type="submit" class="btn waves-effect waves-light"><i class="material-icons left">search</i>Rechercher</button>
				</form>
			</div>
		</div>

		<?php $atendantaj = $api->atendantaj(); ?>
		<ul class="collection with-header atendantaj">
			<li class="collection-header"><strong>Élèves en attente</strong> <span class="badge"><?php echo count($atendantaj); ?></span></li>
			<?php foreach ($atendantaj as $atendanto) { ?>
				<a class="collection-item<?php if ($atendanto["id"] == $celpersono_id) { echo " active"; } ?>" href="administri.php?celpersono_id=<?php echo (int)$atendanto["id"]; ?>"><?php echo h($atendanto["enirnomo"]); ?> <span class="grey-text">(<?php echo h(trim($atendanto["personnomo"]." ".$atendanto["familinomo"])); ?>)</span></a>
			<?php } ?>
			<?php if (!$atendantaj) { ?><li class="collection-item grey-text">Aucun élève en attente</li><?php } ?>
		</ul>
	</aside>
</div>

<?php include "pagxpiedo.inc.php"; ?>
