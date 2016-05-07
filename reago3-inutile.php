<?
include "util.php";
$pagxtitolo="Envoi de message";
header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
header("Pragma: no-cache"); // HTTP/1.0
include "pagxkapo.inc.php";
?>
		<div id="enhavo">
			<ul id="tabnav"></ul>
			<div id="kadro">
				<div class="klarigo">
					<h2>Votre message</h2>
					<form method="post" action="reago.php">
					<p>Ce formulaire vous permet d'envoyer un message aux administrateurs du cours.
					Il ne doit être utilisé que pour des questions concernant les cours d'espéranto ou ce site.</p>
					<p>Si vous avez perdu votre chat, si vous cherchez des cours de macramé ou si vous souhaitez 
					connaître les programmes télé pour le week-end prochain, vous n'obtiendrez aucune réponse 
					en vous adressant ici. 
					</p>
					<? if ($_GET["erarkodo"]=="15"){
						echo "<p class='eraro'>L'adresse électronique est obligatoire</p>";}
					?>
					<table class="perso">
						<tr>
							<td class="col1">Votre adresse &eacute;lectronique :</td>
								<td><input name="sendinto" size="60" value="** obligatoire **" onFocus="this.value=''"></td>
						</tr>
						<tr>
							<td class="col1">Sujet de votre message : </td>
							<td><input name="subjekto" size="60" value="<?if ($_SESSION["subjekto"]) {echo $subjekto;}?>"></td>
						</tr>
					</table>
					<table class="perso">
						<tr><td class="col1">&nbsp;&nbsp;Commentaires / Komentoj :</td></tr>
					</table>
					<textarea name="komento" rows="8" cols="80"><?if ($_SESSION["komento"]) {echo $komento;}?></textarea></td></tr>
					<p><input class="bouton" type="submit" value="envoyer">&nbsp;&nbsp;
					<input class="bouton" type="reset" value="effacer"></p>
					<p><input type="hidden" name="lastpagxo" value="<?echo $_POST['lastpagxo'];?>"></p>
					</form>
				</div>
			</div>
		</div>
<? include "pagxpiedo.inc.php" ?>
