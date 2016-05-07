<?
	if (substr($subjekto,0,3)=="lec") {
		if ($subjekto=="lec01.php"){ 
			include "../../aligxi.inc.php";	 
		} else {
?>

	<h3>Envoi des exercices au tuteur</h3>
<?
					if ($erarkodo=="1") {echo "<div class=\"eraro\"><span class=\"eraro\">$lgv_eraro1</span></div>";}
					if ($erarkodo=="2") {echo "<div class=\"eraro\"><span class=\"eraro\">$lgv_eraro2</span></div>";} 
					if ($erarkodo=="3") {echo "<div class=\"eraro\"><span class=\"eraro\">$lgv_eraro3</span></div>";} 
					if ($erarkodo=="6") {echo "<div class=\"eraro\"><span class=\"eraro\">$lgv_eraro6</span></div>";} 
					if ($erarkodo=="7") {echo "<div class=\"eraro\"><span class=\"eraro\">$lgv_eraro7</span></div>";} 
					if ($erarkodo=="8") {echo "<div class=\"eraro\"><span class=\"eraro\">$lgv_eraro8</span></div>";} 
					if ($erarkodo=="13") {echo "<div class=\"eraro\"><span class=\"eraro\">$noto : $lgv_eraro13</span></div>";} 
?>
	<div class="encadre">
		<p id="formularo">
		<input type="hidden" name="jamaligxi" value="jes"> 
		<!--<? if (!$persono_id) { ?>
		-->
			La correction des exercices est réservée aux personnes qui se sont préalablement inscrites.
			Avant de cliquer sur le bouton <em>Envoyer</em>, n’oubliez pas de donner votre identifiant 
			d’inscription et votre mot de passe.
			Ils sont indispensables pour que nous puissions envoyer votre devoir à votre correcteur.
			</p>
			<p>Votre identifiant : 
			<input type="text" name="ktrl_enirnomo" size="30" value="** obligatoire **" onFocus="this.value=''"></p>
			<p>Votre mot de passe :
			<input type="password" name="ktrl_pasvorto" size="30" value=""></p>

		<!--
		<? } else { ?>		
			Et maintenant, <strong><? echo $persono['enirnomo']; ?></strong>, il ne vous reste plus qu'à envoyer vos
			exercices à votre tuteur en cliquant sur le bouton <em>Envoyer</em> ci-dessous. Vous pouvez ajouter
			des commentaires qui seront également transmis à votre tuteur.
			</p>
		<? } ?>
		-->
		<p>Commentaires :</p>
		<p><textarea name="kialo" rows="8" cols= "80"><? if (isset($memorkurso["kialo"])){echo  stripslashes($memorkurso["kialo"]);}?></textarea>
		</p>
		<p><input class="bouton" type="submit" name="Submit" value="Envoyer">&nbsp;&nbsp;&nbsp;&nbsp;
		<input class="bouton" type="reset" value="Effacer tout"></p>
	</div>
		<? } ?>
<? } ?>
</form>
</div>
<? include "../../pagxpiedo.inc.php"; ?>