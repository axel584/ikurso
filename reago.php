<?
include "util.php";
$pagxtitolo="Envoi de message";
$persono_id=$_SESSION["persono_id"];
if ($persono_id!="") {
	$persono = apartigiPersonon($persono_id);
}
include "pagxkapo.inc.php";
?>
		<div id="enhavo">
			<ul id="tabnav"></ul>
			<div id="kadro">
				<div class="klarigo">
					<h2>Votre message</h2>
					<form method="post" action="reago2.php">
					<? if ($_GET["erarkodo"]=="15"){
						echo "<p class='eraro'>".$lgv_eraro15."</p>";
					} elseif ($_GET["erarkodo"]=="16"){
						echo "<p class='eraro'>".$lgv_eraro16."</p>";
					} else {
					?>
						<p>Ce formulaire vous permet d'envoyer un message aux administrateurs du cours.
						Il ne doit être utilisé que pour des questions concernant les cours d'espéranto ou ce site.</p>
						<p class="grava">
						Avant de poser votre question : lisez les <a href="http://ikurso.esperanto-jeunes.org/fr/intro.php">
						pages d'aide</a>.
						<? if (($persono["rajtoj"]=="K")||($persono["rajtoj"]=="A")) {	?>
							et le <a href="http://ikurso.esperanto-jeunes.org/helppagxo.php">
							Guide du correcteur</a>.
						<? } ?>
						 Votre réponse y est déjà peut-être !
						<? if ($persono["rajtoj"]) {	?>
						<p class="grava">Et si votre question est d'ordre général, le 
						<a href="http://ikurso.esperanto-jeunes.org/forum/index.php">forum</a> pourra aussi vous être utile.</p>
						<? } ?>
						<br>
					<? } ?>
					<table class="perso">
						<tr>
							<td class="col1">Votre adresse &eacute;lectronique :</td>
								<td><input name="sendinto" size="60" value="<?if ($_SESSION["sendinto"]) {echo $sendinto;}else {echo "** obligatoire **";}?>" onFocus="this.value=''"></td>
						</tr>
						<tr>
							<td class="col1">Sujet de votre message : </td>
							<td><input name="temo" size="60" value="<?if ($_SESSION["temo"]) {echo $temo;}?>"></td>
						</tr>
					</table>
					<table class="perso">
						<tr><td class="col1">&nbsp;&nbsp;Commentaires / Komentoj :</td></tr>
					</table>
					<textarea name="komento" rows="8" cols="80"><?if ($_SESSION["komento"]) {echo $komento;}?></textarea></td></tr>
					<p><input class="bouton" type="submit" value="envoyer">&nbsp;&nbsp;
					<input class="bouton" type="reset" value="effacer"></p>
					<p><input type="hidden" name="lastpagxo" value="<?echo $_POST['lastpagxo'];?>"></p>
					<input type="hidden" name="reagopagxo" value="<?=$_GET["q"]?>">
					</form>
				</div>
			</div>
		</div>
<? include "pagxpiedo.inc.php" ?>
