<?php
include "util.php";
$pagxtitolo="Envoi de message";
$persono_id=isset($_SESSION["persono_id"])?$_SESSION["persono_id"]:"";
$erarkodo=isset($_GET["erarkodo"])?$_GET["erarkodo"]:"";
$q=isset($_GET["q"])?$_GET["q"]:"";
if ($persono_id!="") {
	$persono = apartigiPersonon($persono_id);
} else {
	$persono = array(
		"rajtoj"=>"",
		"retadreso"=>""
		);
}
include "pagxkapo.inc.php";
?>
		<div id="enhavo">
			<ul id="tabnav"></ul>
			<div id="kadro">
				<div class="klarigo">
					<h2>Votre message</h2>
					<form method="post" action="reago2.php">
					<?php if ($erarkodo=="15"){
						echo "<div class='atentigo'><p class='eraro'>".$lgv_eraro15."</p></div>";
					} elseif ($erarkodo=="16"){
						echo "<div class='atentigo'><p class='eraro'>".$lgv_eraro16."</p></div>";
					} else {
					?>
						<p>Ce formulaire vous permet d'envoyer un message aux administrateurs du cours.
						Il ne doit être utilisé que pour des questions concernant les cours d'espéranto ou ce site.</p>
						<p class="grava">
						Avant de poser votre question : lisez les <a href="http://ikurso.esperanto-jeunes.org/fr/intro.php">
						pages d'aide</a>.
						<?php if (($persono["rajtoj"]=="K")||($persono["rajtoj"]=="A")) {	?>
							et le <a href="http://ikurso.esperanto-jeunes.org/helppagxo.php">
							Guide du correcteur</a>.
						<?php } ?>
						 Votre réponse y est déjà peut-être !
						<?php if ($persono["rajtoj"]) {	?>
						<p class="grava">Et si votre question est d'ordre général, le 
						<a href="http://ikurso.esperanto-jeunes.org/forum/index.php">forum</a> pourra aussi vous être utile.</p>
						<?php } ?>
						<br>
					<?php } ?>
					<table class="perso">
						<tr>
							<td class="col1">Votre adresse &eacute;lectronique :</td>
								<td><input name="sendinto" size="60" value="<?php if (isset($_SESSION["sendinto"])) {echo $_SESSION["sendinto"];}else {echo "** obligatoire **";}?>" onFocus="this.value=''"></td>
						</tr>
						<tr>
							<td class="col1">Sujet de votre message : </td>
							<td><input name="temo" size="60" value="<?php if (isset($_SESSION["temo"])) {echo $_SESSION["temo"];}?>"></td>
						</tr>
					</table>
					<table class="perso">
						<tr><td class="col1">&nbsp;&nbsp;Commentaires / Komentoj :</td></tr>
					</table>
					<textarea name="komento" rows="8" cols="80"><?php if (isset($_SESSION["komento"])) {echo $_SESSION["komento"];}?></textarea></td></tr>
					<p><input class="bouton" type="submit" value="envoyer">&nbsp;&nbsp;
					<input class="bouton" type="reset" value="effacer"></p>
					<p><input type="hidden" name="lastpagxo" value="<?php echo $_POST['lastpagxo'];?>"></p>
					<input type="hidden" name="reagopagxo" value="<?=$q?>">
					</form>
				</div>
			</div>
		</div>
<? include "pagxpiedo.inc.php" ?>
