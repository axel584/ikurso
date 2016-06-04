<?php
include "util.php";
$pagxtitolo=$lgv_personinformoj;
$persono_id=$_SESSION["persono_id"];
if ($persono_id=="") {header("Location:index.php?erarkodo=8");}
$persono = apartigiPersonon($persono_id);
$parto=isset($_GET["parto"])?$_GET["parto"]:"";
$erarkodo = isset($_GET['erarkodo']) ? $_GET['erarkodo'] : "";
if ($parto=="") {$parto=1;}

// ***** ER 19/04/2016 : suppression de l'onglet "mes voisins" *****
$parto=1;

include "pagxkapo.inc.php";

if ($erarkodo=="16") echo "<div class='atentigo'><p class='eraro'>Cours inconnu.</p></div>";
if ($erarkodo=="17") echo "<div class='atentigo'><p class='eraro'>Attestation introuvable pour ce cours.</p></div>";
?>
		<div id="enhavo">
		<ul id="tabnav">
			<!--
			// ***** ER 19/04/2016 : suppression de l'onglet "mes voisins" *****
			<li <? if ($parto=="1") {echo " class='aktiva'";}?>><a href="personinformoj.php?parto=1">Donn&eacute;es personnelles</a></li>
			<li <? if ($parto=="2") {echo " class='aktiva'";}?>><a href="personinformoj.php?parto=2">Mes voisins</a></li>
			-->
			<li class="aktiva"><a href="personinformoj.php?parto=1">Données personnelles</a></li>
		</ul>
		<div id="kadro">
		
		<?php // ***** ER 19/04/2016 ***** if ($parto=="1") { */ ?>
			<table class="perso">
			<tbody>
				<tr>
					<td class="col1">Nom :</td>
					<td nowrap><?=$persono['familinomo'];?></td>
				</tr>
				<tr>
					<td class="col1">Prénom :</td>
					<td nowrap><?=$persono['personnomo'];?>
					<?php if ($persono['sekso']=='M'){echo " (H)";}
						elseif ($persono['sekso']=='I'){echo " (F)";}
					?>
					</td>
				</tr>
				<tr>
					<td class="col1">Adresse :</td>
					<td nowrap><?=$persono['adreso1'];?></td>
				</tr>
				<?php if ($persono['adreso2']!=""){?>
				<tr>
					<td nowrap>&nbsp;</td>
					<td nowrap><?=$persono['adreso2'];?></td>
				</tr>
				<?php }?>
				<tr>
					<td>&nbsp;</td>
					<td><?php echo $persono['posxtkodo']." ".$persono['urbo'];?></td>
				</tr>
				<tr>
					<td nowrap>&nbsp;</td>
					<td nowrap><?=simplaVorto("nomo","landoj","where kodo='".$persono['lando']."'");?></td>
				</tr>
				<tr>
					<td class="col1">Adresse électronique :</td>
					<td nowrap><?=$persono['retadreso'];?></td>
				</tr>
				<tr>
					<td  class="col1">Date de naissance :</td>
					<td>
						<?php 
						$nskdt = explode("-",$persono['naskigxdato']);
						if (count($nskdt)==3) { // si on n'arrive pas à découper la date, c'est qu'elle est vide
							if (($nskdt[0]!="00")&&($nskdt[2]!="0000")) {
								echo $nskdt[2]." ";
								simplaVorto("nomo","monatoj"," where kodo='".$nskdt[1]."'");
								echo " ".$nskdt[0];
							} 
						}
						?>
					</td>
				</tr>
				<tr>
				<?php if ($persono['rajtoj']=="S" || $persono['rajtoj']=="P") {
				?>	
					<td class="col1">Dernier cours choisi :</td>
					<td><?php
						simplaVorto("nomo","kursoj"," where kodo='".$persono['kurso']."'");
						?>
					</td>
				<?php }else {?>
					<td class="col1">Droits :</td>
					<td><?=simplaVorto("nomo","rajtoj"," where kodo='".$persono['rajtoj']."'");;?></td>
				<?php }?>
				</tr>
				<?php if ($persono['rajtoj']=="S") { ?>
				<tr>
					<td class="col1">Mon correcteur :</td>
					
					<?php 
					// on récupère les coordonnées du correcteur de l'élève
					$korektanto = getKorektantonElLernanto($persono['id']);
					?>
					<td><?=$korektanto['personnomo'];?> <?=$korektanto['familinomo'];?> : <a href="mailto:<?=$korektanto['retadreso'];?>"><?=$korektanto['retadreso'];?></a></td>
				</tr>					
				<?php }?>
				<tr>
					<td class="col1">Préférence pour les messages :</td>
					<td>
						<?php if ($persono['sistemo']=='U'){echo "lettres accentuées";}
						else {echo "système en X";}?>
					</td>
				</tr>
				<tr>
					<td class="col1" valign="top">Commentaire :</td>
					<td valign="top"><?php echo stripSlashes(nl2br($persono['kialo']));?></td>
				</tr>
				<tr>
					<td class="col1" valign="top">Cours suivis :</td>
					<td valign="top">
						<?php
						getCoursElLernanto($persono['id']);
						?>
					</td>
				</tr>
			</tbody>
			</table>

				<p class="rimarko">
				Les informations vous concernant sont destinées à Espéranto-Jeunes et Espéranto-France. 
				Nous pouvons être amenés à les transmettre à des tiers (association espérantophone régionale 
				ou thématique, autres membres d’Espéranto-France ou Espéranto-Jeunes) ou utiliser ces coordonnées pour vous envoyer 
				des informations concernant l’association par Internet.
				</p>
				<p  class="rimarko">Vous disposez d’un droit d’accès, de modification, de rectification et de suppression des données 
				qui vous concernent (art. 34 de la loi «Informatique et Libertés») sur la page suivante.
				</p>
				<br /><p>
				<!--
				<?=$lgv_porsxangxi?> : <input class="bouton" type="button" name="sxangxi" value="<?=$lgv_sxangxu;?>" onClick="document.location.href='sxangxipersoninformojn.php';">
				-->
				<a class="bouton" href="sxangxipersoninformojn.php">Modifier mes données personnelles</a>
				</p>
				
   	</div>
<? include "pagxpiedo.inc.php";?>                     