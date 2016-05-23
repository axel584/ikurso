<?php
	if (substr($subjekto,0,3)=="lec") {
		if ($subjekto=="lec01.php"){ 
			include "../../aligxi.inc.php";	 
		} else {
?>

	<h3>Envoi des exercices au tuteur</h3>
<?php
					if ($erarkodo=="1") {echo "<div class=\"eraro\"><span class=\"eraro\">Le mot de passe ou l’identifiant est erroné</span></div>";}
					if ($erarkodo=="2") {echo "<div class=\"eraro\"><span class=\"eraro\">Vous n’avez pas rempli toutes les données obligatoires du formulaire d’inscription</span></div>";} 
					if ($erarkodo=="3") {echo "<div class=\"eraro\"><span class=\"eraro\">Vous avez tapé deux mots de passe différents</span></div>";} 
					if ($erarkodo=="6") {echo "<div class=\"eraro\"><span class=\"eraro\">Adresse électronique invalide</span></div>";} 
					if ($erarkodo=="7") {echo "<div class=\"eraro\"><span class=\"eraro\">Cet identifiant existe déjà. Veuillez en choisir un autre, merci</span></div>";} 
					if ($erarkodo=="8") {echo "<div class=\"eraro\"><span class=\"eraro\">Votre session a expiré, veuillez vous identifier.</span></div>";} 
					if ($erarkodo=="13") {echo "<div class=\"eraro\"><span class=\"eraro\">$noto : Le résultat du QCM n’est pas suffisant. Veuillez recommencer.</span></div>";} 
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
		<?php } ?>
<?php } ?>
</form>
</div>
<?php include "../../pagxpiedo.inc.php"; ?>
