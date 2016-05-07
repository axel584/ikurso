			<div class="encadre" id="aligxilo">
			<p class="rimarko">
			Pour vous inscrire, vous devez indiquer au moins un <strong>identifiant</strong>, un <strong>mot de passe</strong> 
			et votre <strong>adresse courriel</strong>.<br>
			Vous pouvez choisir librement votre identifiant et votre mot de passe, en prenant par exemple votre prénom, un surnom ou 
			ce que vous voulez. Si l’identifiant que vous avez choisi est déjà utilisé par quelqu’un, le système vous en demandera 
			un autre.<br/>
			Nous vous invitons également à indiquer vos coordonnées : elles nous permettront de vous envoyer une
			attestation lorsque vous aurez terminé le cours. (Vos coordonnées et votre adresse courriel ne seront
			en aucun cas visibles pour les autres utilisateurs et vous pourrez à tout moment y accéder et les modifier
			sur ce site.)<a href="#noto"><sup>[1]</sup></a>.
			</p>
			<table class="perso">

				<tr>
					<td class="col1"><? echo $lgv_vira; ?>
						<input type="radio" name="sekso" value="M" <? if ($aligxilo["sekso"]=="M") echo "checked"; ?>>
						<? echo $lgv_virina; ?>
						<input type="radio" name="sekso" value="I" <? if ($aligxilo["sekso"]=="I") echo "checked"; ?>>
					</td>
					<td class="col1"><? echo $lgv_familinomo; ?> :</td>
					<td nowrap><input type="text" size="30" name="familinomo" value="<? echo $aligxilo["familinomo"];?>"></td>
				</tr>
				<tr>
					<td class="col1" colspan="2"><? echo $lgv_personnomo; ?> :</td>
					<td nowrap><input type="text" size="30" name="personnomo" value="<? echo $aligxilo["personnomo"];?>"></td>
				</tr>
				<tr>
					<td colspan="2" class="col1"><? echo $lgv_adreso1; ?> :</td>
					<td nowrap><input type="text" size="30" name="adreso1" value="<? echo $aligxilo["adreso1"];; ?>"></td>
				</tr>
				<tr>
					<td class="col1" colspan="2"><?=$lgv_adreso2; ?> :</td>
					<td nowrap><input type="text" size="30" name="adreso2" value="<? echo $aligxilo["adreso2"]; ?>"></td>	
				</tr>
				<tr>
					<td colspan="2" class="col1"><? echo $lgv_posxtkodo; ?> :</td>
					<td><input type="text" size="6" name="posxtkodo" value="<? echo $aligxilo["posxtkodo"]; ?>"></td>
				</tr>
				<tr>
					<td class="col1" colspan="2"><? echo $lgv_urbo; ?> :</td>
					<td><input type="text" size="30" name="urbo" value="<? echo $aligxilo["urbo"]; ?>"></td>
				</tr>
				<tr>
					<td colspan="2" class="col1"><b><? echo $lgv_enirnomo; ?></b> : </td>
					<td nowrap><input type="text" size="30" name="nova_enirnomo" value="<? echo $aligxilo["enirnomo"]; ?>"><em>&nbsp;<?=$lgv_deviga;?></em></td>
				</tr>
				<tr>
					<td colspan="2" class="col1"><b><? echo $lgv_pasvorto1; ?></b> : </td>
					<td nowrap><input type="password" size="30" name="nova_pasvorto" value=""><em>&nbsp;<?=$lgv_deviga;?></em></td>
				</tr>
				<tr>
					<td colspan="2" class="col1"><b><?=$lgv_pasvorto2; ?></b> : </td>
					<td><input type="password" size="30" name="pasvorto2" value="">&nbsp;<em><?=$lgv_deviga;?></em></td>
				</tr>
				<tr>
					<td nowrap colspan="2" class="col1"><? echo $lgv_lando; ?> :</td>
					<td nowrap>
						<?  konstruiMenuon("lando","landoj","kodo","nomo",$aligxilo["lando"]," where lingvo='$lingvo' order by nomo","-- pays --");?>
					</td>
				</tr>
				<tr>
					<td colspan="2" class="col1"><span class="grava"><strong>ATTENTION !</strong></span></td>
					<td class="grava">
					<span class="rimarko">Votre inscription ne sera prise en compte que si vous indiquez une adresse électronique valide.
					
					</td>
				</tr>
				<tr>
					<td nowrap colspan="2" class="col1"><b><? echo $lgv_retadreso; ?></b> :</td>
					<td nowrap><input type="text" name="retadreso" size="50" value="<? echo $aligxilo["retadreso"]; ?>"><em>&nbsp;<?=$lgv_deviga;?></em></td>
				</tr>
				<tr>
					<td nowrap colspan="2" class="col1"><? echo $lgv_naskigxdato; ?> :</td>
					<td nowrap>
						<? ereg("([0-9]{4})-([0-9]{1,2})-([0-9]{1,2})", $aligxilo["naskigxdato"],$nskdt); ?>
						<input type="text" name="naskigxdato_tago" size="3" maxlength="2" value="<? if ($nskdt[3]!="00") echo $nskdt[3];?>">
						<? if ($nskdt[2]!="00") {
								konstruiMenuon( "naskigxdato_monato", "monatoj", "kodo", "nomo",$nskdt[2], " where lingvo='$lingvo'","-- mois --");
							} else {
								konstruiMenuon( "naskigxdato_monato", "monatoj", "kodo", "nomo", "", " where lingvo='$lingvo'","-- mois --");}
						?>
						<input type="text" name="naskigxdato_jaro" size="5"  maxlength="4" value="<? if ($nskdt[1]!="0000") echo $nskdt[1];?>">
					</td>
				</tr>
				<? if ($kurso != "KE") { ?>
				<tr style="display:none;">
					<td nowrap colspan="2" class="col1"><?=$lgv_mesagxsistemo; ?></td>
					<td nowrap>
						<? echo $lgv_unikode." "; ?><input type="radio" name="sistemo" value="U" checked> 
						<? echo "&nbsp;&nbsp;&nbsp;".$lgv_ikse." "; ?>
						<input type="radio" name="sistemo" value="X" <?if ($sistemo=="X"){echo "checked";}?>>
							<span class="rimarko">(<a href="#" 
							onClick="window.open('../../tipohelpo.php?rajto=S','helpo','resizable=yes,scrollbars=yes,location=no,top=50,left=50,width=550,height=600');">Quel système choisir </a>?)</span>
					</td>
				</tr>
				<? } ?>
				<tr> 
					<td colspan="3" class="col1" style="text-align:left;">
						<br>Je d&eacute;sire recevoir la lettre mensuelle d’information <i>Esperanto Aktiv'</i> 
						par courrier &eacute;lectronique: <input type="checkbox" name="verdakrabo" checked>
	 				</td>
				</tr>
				<tr><td class="col1" colspan="3" style="text-align:left;"><?=$lgv_kialo; ?></td></tr>
				<tr>
					<td colspan="3"> 
					<textarea name="kialo" cols="70" rows="5"><?=stripslashes($aligxilo["kialo"]);?></textarea>
				</td>
				</tr>
				<tr>
					<td colspan="3"> 
					<input class="bouton" type="submit" name="Submit" value="<? echo $lgv_sendu; ?>"></td>
				</tr>
				<tr>
					<td colspan="3">
					<p class="rimarko" id="noto">
					<strong>[1]</strong> Les informations vous concernant sont destinées à Espéranto-Jeunes et Espéranto-France. 
					Nous pouvons être amenés à les transmettre à des tiers (association espérantophone régionale 
					ou thématique, autres membres d’Espéranto-France ou Espéranto-Jeunes) ou utiliser ces coordonnées pour vous envoyer 
					des informations concernant l’association par Internet. Si vous ne le souhaitez pas, veuillez cocher cette case :
					<input type="checkbox" name="stopInfo">.
					</p>
					<p  class="rimarko">Vous disposez d’un droit d’accès, de modification, de rectification et de suppression des données 
					qui vous concernent (art. 34 de la loi «Informatique et Libertés»). Il vous suffit pour cela 
					d’aller sur la page <a href="http://ikurso.esperanto-jeunes.org/dev/personinformoj.php">
					Données personnelles</a>.

					</p>
				</tr>
			</table>