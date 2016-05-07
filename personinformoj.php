<?
include "util.php";
$pagxtitolo=$lgv_personinformoj;
$persono_id=$_SESSION["persono_id"];
if ($persono_id=="") {header("Location:index.php?erarkodo=8");}
$parto=$_GET["parto"];
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
		<!--<? echo (ini_get('session.gc_maxlifetime')); ?> --> 
		
		<? // ***** ER 19/04/2016 ***** if ($parto=="1") { */ ?>
			<table class="perso">
			<tbody>
				<tr>
					<td class="col1"><?=$lgv_familinomo;?> :</td>
					<td nowrap><?=$persono->get_familinomo();?></td>
				</tr>
				<tr>
					<td class="col1"><?=$lgv_personnomo;?> :</td>
					<td nowrap><?=$persono->get_personnomo();?>
					<?if ($persono->get_sekso()=='M'){echo " (H)";}
						elseif ($persono->get_sekso()=='I'){echo " (F)";}
					?>
					</td>
				</tr>
				<tr>
					<td class="col1"><?=$lgv_adreso1;?> :</td>
					<td nowrap><?=$persono->get_adreso1();?></td>
				</tr>
				<? if ($persono->get_adreso2()!=""){?>
				<tr>
					<td nowrap>&nbsp;</td>
					<td nowrap><?=$persono->get_adreso2();?></td>
				</tr>
				<?}?>
				<tr>
					<td>&nbsp;</td>
					<td><? echo $persono->get_posxtkodo()." ".$persono->get_urbo();?></td>
				</tr>
				<tr>
					<td nowrap>&nbsp;</td>
					<td nowrap><?=$persono->lando->get_nomo();?></td>
				</tr>
				<tr>
					<td class="col1"><?=$lgv_retadreso; ?> :</td>
					<td nowrap><?=$persono->get_retadreso();?></td>
				</tr>
				<tr>
					<td  class="col1"><?=$lgv_naskigxdato; ?> :</td>
					<td>
						<? ereg("([0-9]{4})-([0-9]{1,2})-([0-9]{1,2})",$persono->get_naskigxdato(),$nskdt);
						if (($nskdt[1]!="00")&&($nskdt[3]!="0000")) {
							echo $nskdt[3]." ";
							simplaVorto("nomo","monatoj"," where kodo='$nskdt[2]' and lingvo='$lingvo'");
							echo " ".$nskdt[1];
						} ?>
					</td>
				</tr>
				<tr>
				<? if ($persono->rajtoj->get_kodo()=="S" || $persono->rajtoj->get_kodo()=="P") {
				?>	
					<td class="col1"><?=$lgv_sekvitakurso;?> :</td>
					<td><? $kurso = new kursoj;
						$kurso->load_by_kodo($persono->get_kurso(),$persono->lingvo->get_kodo()); 
						echo $kurso->get_nomo();?>
					</td>
				<?}else {?>
					<td class="col1"><?=$lgv_rajtoj;?> :</td>
					<td><?=$persono->rajtoj->get_nomo();?></td>
				<?}?>
				</tr>
				<? if ($persono->rajtoj->get_kodo()=="S") { ?>
				<tr>
					<td class="col1">Mon correcteur :</td>
					
					<? 
					$nuna_kurso = new nuna_kurso;
					$nuna_kurso->load_by_studanto_kaj_kurso($persono->get_id(),$kurso->get_kodo());
					$korektanto = new personoj;
					$korektanto->load_by_id($nuna_kurso->korektanto->get_id());
					?>
					<td><?=$korektanto->get_personnomo();?> <?=$korektanto->get_familinomo();?> : <a href="mailto:<?=$korektanto->get_retadreso();?>"><?=$korektanto->get_retadreso();?></a></td>
				</tr>					
				<?}?>
				<tr>
					<td class="col1"><?=$lgv_mesagxsistemo;?></td>
					<td>
						<?if ($persono->get_sistemo()=='U'){echo $lgv_unikode;}
						else {echo $lgv_ikse;}?>
					</td>
				</tr>
				<tr>
					<td class="col1" valign="top"><?=$lgv_komento; ?> :</td>
					<td valign="top"><textarea cols="60" rows="4"><?echo stripSlashes($persono->get_kialo());?></textarea></td>
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