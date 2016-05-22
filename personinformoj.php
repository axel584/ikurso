<?php
include "util.php";
$pagxtitolo=$lgv_personinformoj;
$persono_id=$_SESSION["persono_id"];
if ($persono_id=="") {header("Location:index.php?erarkodo=8");}
$persono = apartigiPersonon($persono_id);
$parto=isset($_GET["parto"])?$_GET["parto"]:"";
if ($parto=="") {$parto=1;}

// ***** ER 19/04/2016 : suppression de l'onglet "mes voisins" *****
$parto=1;

include "pagxkapo.inc.php";
?>
		<div id="enhavo">
		<ul id="tabnav">
			<!--
			// ***** ER 19/04/2016 : suppression de l'onglet "mes voisins" *****
			<li <? if ($parto=="1") {echo " class='aktiva'";}?>><a href="personinformoj.php?parto=1">Donn&eacute;es personnelles</a></li>
			<li <? if ($parto=="2") {echo " class='aktiva'";}?>><a href="personinformoj.php?parto=2">Mes voisins</a></li>
			-->
			<li class="aktiva"><a href="personinformoj.php?parto=1">Donn&eacute;es personnelles</a></li>
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
					<td nowrap><?=simplaVorto("nomo","landoj","where lingvo='fr' and kodo='".$persono['lando']."'");?></td>
				</tr>
				<tr>
					<td class="col1">Adresse électronique :</td>
					<td nowrap><?=$persono['retadreso'];?></td>
				</tr>
				<tr>
					<td  class="col1">Date de naissance :</td>
					<td>
						<?php 
						//ereg("([0-9]{4})-([0-9]{1,2})-([0-9]{1,2})",$persono['naskigxdato'],$nskdt);
						$nskdt = explode("-",$persono['naskigxdato']);
						if (($nskdt[0]!="00")&&($nskdt[2]!="0000")) {
							echo $nskdt[2]." ";
							simplaVorto("nomo","monatoj"," where kodo='".$nskdt[1]."' and lingvo='fr'");
							echo " ".$nskdt[0];
						} ?>
					</td>
				</tr>
				<tr>
				<?php if ($persono['rajtoj']=="S" || $persono['rajtoj']=="P") {
				?>	
					<td class="col1">Dernier cours choisi :</td>
					<td><?php
						simplaVorto("nomo","kursoj"," where kodo='".$persono['kurso']."' and lingvo='fr'");
						// php $kurso = new kursoj;
						// $kurso->load_by_kodo($persono['kurso'],$persono->lingvo['kodo']); 
						// echo $kurso['nomo'];
						?>
					</td>
				<?php }else {?>
					<td class="col1">Droits :</td>
					<td><?=simplaVorto("nomo","rajtoj"," where kodo='".$persono['rajtoj']."' and lingvo='fr'");;?></td>
				<?php }?>
				</tr>
				<?php if ($persono['rajtoj']=="S") { ?>
				<tr>
					<td class="col1">Mon correcteur :</td>
					
					<?php 
					$nuna_kurso = new nuna_kurso;
					$nuna_kurso->load_by_studanto_kaj_kurso($persono['id'],$kurso['kodo']);
					$korektanto = new personoj;
					$korektanto->load_by_id($nuna_kurso->korektanto['id']);
					?>
					<td><?=$korektanto['personnomo'];?> <?=$korektanto['familinomo'];?> : <a href="mailto:<?=$korektanto['retadreso'];?>"><?=$korektanto['retadreso'];?></a></td>
				</tr>					
				<?php }?>
				<tr>
					<td class="col1">Préférence pour les messages :</td>
					<td>
						<?phpif ($persono['sistemo']=='U'){echo $lgv_unikode;}
						else {echo $lgv_ikse;}?>
					</td>
				</tr>
				<tr>
					<td class="col1" valign="top">Commentaire :</td>
					<td valign="top"><textarea cols="60" rows="4"><?php echo stripSlashes($persono['kialo']);?></textarea></td>
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
				<a href="sxangxipersoninformojn.php">Cliquez ici pour modifier vos donn&eacute;es personnelles</a>
				</p>
				
			<? // ***** ER 19/04/2016 ***** } else { ?>
		  		<!-- Mes amis ? Mes collegues de departement ? Les Esperantistes pres de chez moi ? -->
			   <? 
				  /***** ER 19/04/2016 ***** 
			   if ($persono->lando->get_kodo()=='FR') {
					$idDepartemento=substr($persono->get_posxtkodo(),0,2);
					// unue, ni sercas la liston de ciuj korektantoj de la sama departemento
					$korektantoj = listoDepartemento($idDepartemento, "K");
					$nbKorektantoj = sizeof($korektantoj);	
					if ($nbKorektantoj > 0) {
						echo "<h3>Ils sont correcteurs et habitent dans le même département que moi :</h3>";
						foreach ($korektantoj as $korektanto) {
				?>
						<!--***** ER 19/04/2016 : suppression du lien "mp" vers le forum ***** 
						<a href="forum/privmsg.php?mode=post&amp;u=<?=$korektanto['id']?>">
						<img src="forum/templates/subSilver/images/lang_french/icon_pm.gif" 
							alt="Envoyer un message privé" title="Envoyer un message privé" border='0' /></a>-->
						&nbsp;<?=utf8_encode($korektanto['enirnomo'])?>&nbsp;(<?=utf8_encode($korektanto['personnomo'])?>)&nbsp;-&nbsp;	
						<?=$korektanto['posxtkodo']?>&nbsp;<?=utf8_encode($korektanto['urbo'])?><br>		
				<?		}
					}
					// poste ni sercas la liston de ciuj lernantoj de la sama departemento
					$lernantoj = listoDepartemento($idDepartemento, "S");
					$nbLernantoj = sizeof($lernantoj);	
					if ($nbLernantoj > 0) {
						echo "<h3>Ils sont élèves et habitent dans le même département que moi :</h3>";
						foreach ($lernantoj as $lernanto) {
						?>
						<!--***** ER 19/04/2016 : suppression du lien "mp" vers le forum ***** <a href="forum/privmsg.php?mode=post&amp;u=<?=$lernanto['id']?>">
						<img src="forum/templates/subSilver/images/lang_french/icon_pm.gif" 
							alt="Envoyer un message privé" title="Envoyer un message privé" border='0' /></a>-->
						&nbsp;<?=utf8_encode($lernanto['enirnomo'])?>&nbsp;(<?=utf8_encode($lernanto['personnomo'])?>)&nbsp;-&nbsp;	
						<?=$lernanto['posxtkodo']?>&nbsp;<?=utf8_encode($lernanto['urbo'])?><br>		
						<? }
					}
			   }
			    ?>
   		<? } */?>
   	</div>
<? include "pagxpiedo.inc.php";?>                     