<?php
// si on est sur la page des exercices, on affiche le formulaire 
// pour les envoyer
echo "<input type=\"hidden\" name=\"010_titolo\" value=\"".$titolo."\">";
echo "<input type=\"hidden\" name=\"kurso\" value=\"".$kurso."\">";

if (($parto=="ek")&&($numcxap!="01")){ ?>

		<div class="encadre">
		<?php if ($persono_id=="") { ?>
			<p>La correction des exercices est réservée aux personnes qui se sont préalablement inscrites.
			Avant de cliquer sur le bouton <em>Envoyer</em>, n’oubliez pas de donner votre identifiant 
			d’inscription et votre mot de passe.
			Ils sont indispensables pour que nous puissions envoyer votre devoir à votre correcteur.
			</p>
			<p class="formularo">Votre identifiant : 
			<input type="text" name="ktrl_enirnomo" size="30" value="** obligatoire **" onFocus="this.value=''"></p>
			<p>Votre mot de passe :
			<input type="password" name="ktrl_pasvorto" size="30" value=""></p>
		<?php } else {?>
			<p><strong><?php echo $persono['enirnomo']; ?></strong>, &#265;u vi bone relegis vian taskon?
			Se jes, vi povas sendi ĝin alklakante la butonon <em>Envoyer</em> ĉi-sube. Se vi deziras
			aldoni rimarkojn aŭ demandojn por via korektanto, simple skribu ilin en la jena kadro.
			</p>
			<input type="hidden" name="ktrl_enirnomo" value="<?=$persono['enirnomo']?>">
			<input type="hidden" name="ktrl_pasvorto" value="<?=$persono['pasvorto']?>">
		<?php } ?>
	
			<input type="hidden" name="jamaligxi" value="jes"> 

			<p class="formularo">Komentoj :</p>
			<p><textarea name="kialo" rows="5" cols= "65"><?php if (isset($memorkurso["kialo"])){echo  stripslashes($memorkurso["kialo"]);}?></textarea>
			</p>
			<p><input class="bouton" type="submit" name="Submit" value="Envoyer">&nbsp;&nbsp;&nbsp;&nbsp;
			<input class="bouton" type="reset" value="Effacer tout"></p>
		</div> <!-- aligxilo -->
<?php 
} 
if ($parto=="") { ?>
<div id="lernu">
	<i>Bildoj el : </i><a href="http://www.lernu.net/"><br>
	<img src="bildoj/lernu.png" alt="lernu" align="bottom" border="0"></a>
</div>
<?php } ?>
				</div> <!-- kadro -->
<?php if ($parto=="ek") { ?>
			</form>
<?php } ?>
			</div> <!-- enhavo -->

<?php 
include "../../pagxpiedo.inc.php";
?>