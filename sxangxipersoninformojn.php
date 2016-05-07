<?
include "util.php";
$pagxtitolo=$lgv_sxangipersoninformojn;
$persono_id=$_SESSION["persono_id"];
if ($persono_id=="") {header("Location:index.php?erarkodo=8");}
$parto="1";
include "pagxkapo.inc.php";
?>
<div id="enhavo">
		<ul id="tabnav">
			<li class='aktiva'><a href="personinformoj.php?parto=1">Donn&eacute;es personnelles</a></li>
			<li><a href="personinformoj.php?parto=2">Mes voisins</a></li>
		</ul>
		<? if ($erarkodo=="2") echo "<p class='eraro'><i>$lgv_eraro2</i></p>"; ?>
		<? if ($erarkodo=="3") echo "<p class='eraro'><i>$lgv_eraro3</i></p>"; ?>
		<? if ($erarkodo=="6") echo "<p class='eraro'><i>$lgv_eraro6</i></p>"; ?>
		<? if ($erarkodo=="7") echo "<p class='eraro'><i>$lgv_eraro7</i></p>"; ?>
		<div id="kadro">
		<form name="inscription" action="sxangxipersoninformojn2.php" method="POST">
		<? if ($rapidvojo!="") { echo "<input type=\"hidden\" name=\"rapidvojo\" value=\"$rapidvojo\">";} ?>
		<table class="perso">
		<tbody>
			<tr>
				<td class="col1"><?=$lgv_familinomo;?> :</td>
				<td><input type="text" name="familinomo" size="30" value="<?=$persono->get_familinomo();?>"></td>
			</tr>
			<tr>
				<td class="col1"><?=$lgv_personnomo;?> :</td>
				<td>
					<input type="text" name="personnomo" size="30" value="<?=$persono->get_personnomo();?>">
					<? echo $lgv_vira; ?><input type="radio" name="sekso" value="M" <?if ($persono->get_sekso()=="M"){echo "checked";}?>>
					<? echo $lgv_virina; ?><input type="radio" name="sekso" value="I" <?if ($persono->get_sekso()=="I"){echo "checked";}?>>
				</td>
			</tr>
			<tr>
				<td class="col1"><? echo $lgv_adreso1; ?> :</td>
				<td><input type="text" name="adreso1"  size="30" value="<? echo stripslashes($persono->get_adreso1());?>"></td>
			</tr>
			<tr>
				<td  class="col1"><? echo $lgv_adreso2; ?> :</td>
				<td><input type="text" name="adreso2" size="30" value="<? echo stripslashes($persono->get_adreso2());?>"></td>
			</tr>
			<tr>
				<td class="col1"><?=$lgv_posxtkodo; ?> :</td>
				<td><input type="text" name="posxtkodo" value="<?=$persono->get_posxtkodo();?>"></td>
			</tr>
			<tr>
				<td class="col1"><? echo $lgv_urbo; ?> :</td>
				<td><input type="text" name="urbo" size="30" value="<?=$persono->get_urbo();?>"></td>
			</tr>
			<tr>
				<td class="col1"><?=$lgv_lando; ?> :</td>
				<td>
					<? 
					konstruiMenuon("lando","landoj","kodo","nomo",$persono->lando->get_kodo()," where lingvo='$lingvo' order by nomo","-- pays --"); 
					?>
				</td>
			<tr>
				<td class="col1"><?=$lgv_retadreso; ?> :</td>
				<td><?=$persono->get_retadreso();?></td>
			</tr>
			<tr>
				<td colspan="2" class="col1 rimarko">(Pour changer votre adresse électronique, veuillez 
				<a href="reago.php">contacter les administrateurs du cours</a>.)</td>
			</tr>
			<tr>
				<td class="col1"><?=$lgv_mesagxsistemo; ?></td>
				<td>
					<? $sistemo=$persono->get_sistemo(); ?>
					<? echo $lgv_unikode." "; ?><input type="radio" name="sistemo" value="U" checked>
					<? echo "&nbsp;&nbsp;&nbsp;".$lgv_ikse." "; ?><input type="radio" name="sistemo" value="X" <?if ($sistemo=="X"){echo "checked";}?>>
					<span class="rimarko"><br>(<a href="#" 
					onClick="window.open('tipohelpo.php?rajto=<?=$persono->rajtoj->get_kodo();?>&retadreso=<?=$persono->get_retadreso();?>','helpo','resizable=yes,scrollbars=yes,location=no,top=50,left=50,width=550,height=600');">Quel système choisir </a>?)</span>
				</td>
			</tr>
			<tr>
				<td class="col1"><?=$lgv_naskigxdato;?> :</td>
				<td>
					<? ereg("([0-9]{4})-([0-9]{1,2})-([0-9]{1,2})",$persono->get_naskigxdato(),$nskdt);?>
					<input type="text" name="naskigxdato_tago" size="3" maxlength="2" value="<?=$nskdt[3];?>">
					<? konstruiMenuon("naskigxdato_monato","monatoj","kodo","nomo",$nskdt[2]," where lingvo='$lingvo'","-- mois --");?>
					<input type="text" name="naskigxdato_jaro" size="5"  maxlength="4" value="<?=$nskdt[1];?>">
				</td>
			</tr>
		</tbody>
		</table>
		<p><?=$lgv_kialo;?></p>
		<p>
			<textarea name="kialo" cols="70" rows="5"><?=stripslashes($persono->get_kialo());?></textarea>
		</p>
		<p>
			<input class="bouton" type="submit" name="Submit" value="<? echo $lgv_sendu; ?>">
		</p>
		<p class="rimarko">
		Les informations vous concernant sont destinées à Espéranto-Jeunes et Espéranto-France. 
		Nous pouvons être amenés à les transmettre à des tiers (association espérantophone régionale 
		ou thématique, autres membres d’Espéranto-France ou Espéranto-Jeunes) ou utiliser ces coordonnées pour vous envoyer 
		des informations concernant l’association par Internet. Si vous ne le souhaitez pas, veuillez cocher cette case :
		<input type="checkbox" name="stopInfo" <? if ($persono->get_stopInfo()=="J") {echo "checked";}?>>.
		</p>
	</div>
<?include "pagxpiedo.inc.php";?>            