<?php
include "util.php";
$pagxtitolo="Modification de vos données personnelles";
$persono_id=$_SESSION["persono_id"];
if ($persono_id=="") {header("Location:index.php?erarkodo=8");}
$persono = apartigiPersonon($persono_id);
$parto="1";
$erarkodo = isset($_GET['erarkodo']) ? $_GET['erarkodo'] : "";
include "pagxkapo.inc.php";
?>
<div id="enhavo">
		<ul id="tabnav">
			<li class='aktiva'><a href="personinformoj.php?parto=1">Donn&eacute;es personnelles</a></li>
		</ul>
		<?php if ($erarkodo=="2") echo "<p class='eraro'><i>Vous n’avez pas rempli toutes les données obligatoires du formulaire d’inscription</i></p>"; ?>
		<?php if ($erarkodo=="3") echo "<p class='eraro'><i>Vous avez tapé deux mots de passe différents</i></p>"; ?>
		<?php if ($erarkodo=="6") echo "<p class='eraro'><i>Adresse électronique invalide</i></p>"; ?>
		<?php if ($erarkodo=="7") echo "<p class='eraro'><i>Cet identifiant existe déjà. Veuillez en choisir un autre, merci</i></p>"; ?>
		<div id="kadro">
		<form name="inscription" action="sxangxipersoninformojn2.php" method="POST">
		<?php if (isset($rapidvojo)) { echo "<input type=\"hidden\" name=\"rapidvojo\" value=\"$rapidvojo\">";} ?>
		<table class="perso">
		<tbody>
			<tr>
				<td class="col1">Nom :</td>
				<td><input type="text" name="familinomo" size="30" value="<?=$persono['familinomo'];?>"></td>
			</tr>
			<tr>
				<td class="col1">Prénom :</td>
				<td>
					<input type="text" name="personnomo" size="30" value="<?=$persono['personnomo'];?>">
					H. <input type="radio" name="sekso" value="M" <?php if ($persono['sekso']=="M"){echo "checked";}?>>
					F. <input type="radio" name="sekso" value="I" <?php if ($persono['sekso']=="I"){echo "checked";}?>>
				</td>
			</tr>
			<tr>
				<td class="col1">Adresse :</td>
				<td><input type="text" name="adreso1"  size="30" value="<?php echo stripslashes($persono['adreso1']);?>"></td>
			</tr>
			<tr>
				<td  class="col1">Adresse (suite) :</td>
				<td><input type="text" name="adreso2" size="30" value="<?php echo stripslashes($persono['adreso2']);?>"></td>
			</tr>
			<tr>
				<td class="col1">Code Postal :</td>
				<td><input type="text" name="posxtkodo" value="<?=$persono['posxtkodo'];?>"></td>
			</tr>
			<tr>
				<td class="col1">Ville :</td>
				<td><input type="text" name="urbo" size="30" value="<?=$persono['urbo'];?>"></td>
			</tr>
			<tr>
				<td class="col1">Pays :</td>
				<td>
					<?php 
					konstruiMenuon("lando","landoj","kodo","nomo",$persono['lando']," where lingvo='fr' order by nomo","-- pays --"); 
					?>
				</td>
			<tr>
				<td class="col1">Adresse électronique :</td>
				<td><?=$persono['retadreso'];?></td>
			</tr>
			<tr>
				<td colspan="2" class="col1 rimarko">(Pour changer votre adresse électronique, veuillez 
				<a href="reago.php">contacter les administrateurs du cours</a>.)</td>
			</tr>
			<tr>
				<td class="col1">Préférence pour les messages :</td>
				<td>
					<?php $sistemo=$persono['sistemo']; ?>
					lettres accentuées<input type="radio" name="sistemo" value="U" checked>
					<?php echo "&nbsp;&nbsp;&nbsp;système en X "; ?><input type="radio" name="sistemo" value="X" <?php if ($sistemo=="X"){echo "checked";}?>>
					<span class="rimarko"><br>(<a href="#" 
					onClick="window.open('tipohelpo.php?rajto=<?=$persono->rajtoj['kodo'];?>&retadreso=<?=$persono['retadreso'];?>','helpo','resizable=yes,scrollbars=yes,location=no,top=50,left=50,width=550,height=600');">Quel système choisir </a>?)</span>
				</td>
			</tr>
			<tr>
				<td class="col1">Date de naissance :</td>
				<td>
					<?php 
					//ereg("([0-9]{4})-([0-9]{1,2})-([0-9]{1,2})",$persono['naskigxdato'],$nskdt);
					$nskdt=explode("-",$persono['naskigxdato']);
					?>
					<input type="text" name="naskigxdato_tago" size="3" maxlength="2" value="<?=$nskdt[2];?>">
					<?php konstruiMenuon("naskigxdato_monato","monatoj","kodo","nomo",$nskdt[1]," where lingvo='fr'","-- mois --");?>
					<input type="text" name="naskigxdato_jaro" size="5"  maxlength="4" value="<?=$nskdt[0];?>">
				</td>
			</tr>
		</tbody>
		</table>
		<p>Autres précisions : <i>Qu’attendez-vous du cours, où avez-vous appris son existence,...</i></p>
		<p>
			<textarea name="kialo" cols="70" rows="5"><?=stripslashes($persono['kialo']);?></textarea>
		</p>
		<p class="rimarko">
		Les informations vous concernant sont destinées à Espéranto-Jeunes et Espéranto-France. 
		Nous pouvons être amenés à les transmettre à des tiers (association espérantophone régionale 
		ou thématique, autres membres d’Espéranto-France ou Espéranto-Jeunes) ou utiliser ces coordonnées pour vous envoyer 
		des informations concernant l’association par Internet. Si vous ne le souhaitez pas, veuillez cocher cette case :
		<input type="checkbox" name="stopInfo" <?php if ($persono['stop_info']=="J") {echo "checked";}?>>.
		</p>
		<p>
			<input class="bouton" type="submit" name="Submit" value="Envoyer">
		</p>		
	</div>
<?php include "pagxpiedo.inc.php";?>            