<?php
if (isset($_SESSION['aligxilo'])) {
	$aligxilo=$_SESSION['aligxilo'];
} else {
	$aligxilo=array(
		"sekso"=>"",
		"familinomo"=>"",
		"personnomo"=>"",
		"adreso1"=>"",
		"adreso2"=>"",
		"posxtkodo"=>"",
		"urbo"=>"",
		"lando"=>"",
		"enirnomo"=>"",
		"retadreso"=>"",
		"naskigxdato"=>"",
		"kialo"=>""
	);
}
?>			

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
					<td class="col1">H.
						<input type="radio" name="sekso" value="M" <?php if ($aligxilo["sekso"]=="M") echo "checked"; ?>>
						F.
						<input type="radio" name="sekso" value="I" <?php if ($aligxilo["sekso"]=="I") echo "checked"; ?>>
					</td>
					<td class="col1">Nom :</td>
					<td nowrap><input type="text" size="30" name="familinomo" value="<?php echo $aligxilo["familinomo"];?>"></td>
				</tr>
				<tr>
					<td class="col1" colspan="2">Prénom :</td>
					<td nowrap><input type="text" size="30" name="personnomo" value="<?php echo $aligxilo["personnomo"];?>"></td>
				</tr>
				<tr>
					<td colspan="2" class="col1">Adresse :</td>
					<td nowrap><input type="text" size="30" name="adreso1" value="<?php echo $aligxilo["adreso1"];; ?>"></td>
				</tr>
				<tr>
					<td class="col1" colspan="2">Adresse (suite) :</td>
					<td nowrap><input type="text" size="30" name="adreso2" value="<?php echo $aligxilo["adreso2"]; ?>"></td>	
				</tr>
				<tr>
					<td colspan="2" class="col1">Code Postal :</td>
					<td><input type="text" size="6" name="posxtkodo" value="<?php echo $aligxilo["posxtkodo"]; ?>"></td>
				</tr>
				<tr>
					<td class="col1" colspan="2">Ville :</td>
					<td><input type="text" size="30" name="urbo" value="<?php echo $aligxilo["urbo"]; ?>"></td>
				</tr>
				<tr>
					<td colspan="2" class="col1"><b>Identifiant</b> : </td>
					<td nowrap><input type="text" size="30" name="nova_enirnomo" value="<?php echo $aligxilo["enirnomo"]; ?>"><em>&nbsp;(obligatoire)</em></td>
				</tr>
				<tr>
					<td colspan="2" class="col1"><b>Mot de passe</b> : </td>
					<td nowrap><input type="password" size="30" name="nova_pasvorto" value=""><em>&nbsp;(obligatoire)</em></td>
				</tr>
				<tr>
					<td colspan="2" class="col1"><b>Mot de passe <i>(confirmez)</i></b> : </td>
					<td><input type="password" size="30" name="pasvorto2" value="">&nbsp;<em>(obligatoire)</em></td>
				</tr>
				<tr>
					<td nowrap colspan="2" class="col1">Pays :</td>
					<td nowrap>
						<?php  konstruiMenuon("lando","landoj","kodo","nomo",$aligxilo["lando"]," where lingvo='fr' order by nomo","-- pays --");?>
					</td>
				</tr>
				<tr>
					<td colspan="2" class="col1"><span class="grava"><strong>ATTENTION !</strong></span></td>
					<td class="grava">
					<span class="rimarko">Votre inscription ne sera prise en compte que si vous indiquez une adresse électronique valide.
					
					</td>
				</tr>
				<tr>
					<td nowrap colspan="2" class="col1"><b>Adresse électronique</b> :</td>
					<td nowrap><input type="text" name="retadreso" size="50" value="<?php echo $aligxilo["retadreso"]; ?>"><em>&nbsp;(obligatoire)</em></td>
				</tr>
				<tr>
					<td nowrap colspan="2" class="col1">Date de naissance :</td>
					<td nowrap>
						<?php 
						//ereg("([0-9]{4})-([0-9]{1,2})-([0-9]{1,2})", $aligxilo["naskigxdato"],$nskdt); 
						$nskdt=explode("-", $aligxilo["naskigxdato"]);
						if (count($nskdt)==1) {
							$nskdt=array("00","00","0000");
						}
						?>
						<input type="text" name="naskigxdato_tago" size="3" maxlength="2" value="<?php if ($nskdt[2]!="00") echo $nskdt[2];?>">
						<?php if ($nskdt[1]!="00") {
								konstruiMenuon( "naskigxdato_monato", "monatoj", "kodo", "nomo",$nskdt[1], " where lingvo='fr'","-- mois --");
							} else {
								konstruiMenuon( "naskigxdato_monato", "monatoj", "kodo", "nomo", "", " where lingvo='fr'","-- mois --");}
						?>
						<input type="text" name="naskigxdato_jaro" size="5"  maxlength="4" value="<?php if ($nskdt[0]!="0000") echo $nskdt[0];?>">
					</td>
				</tr>
				<?php if ($kurso != "KE") { ?>
				<tr style="display:none;">
					<td nowrap colspan="2" class="col1">Préférence pour les messages :</td>
					<td nowrap>
						lettres accentuées <input type="radio" name="sistemo" value="U" checked> 
						&nbsp;&nbsp;&nbsp;système en X <input type="radio" name="sistemo" value="X" <?php if ($sistemo=="X"){echo "checked";}?>>
							<span class="rimarko">(<a href="#" 
							onClick="window.open('../../tipohelpo.php?rajto=S','helpo','resizable=yes,scrollbars=yes,location=no,top=50,left=50,width=550,height=600');">Quel système choisir </a>?)</span>
					</td>
				</tr>
				<?php } ?>
				<tr> 
					<td colspan="3" class="col1" style="text-align:left;">
						<br>Je d&eacute;sire recevoir la lettre mensuelle d’information <i>Esperanto Aktiv'</i> 
						par courrier &eacute;lectronique: <input type="checkbox" name="verdakrabo" checked>
	 				</td>
				</tr>
				<tr><td class="col1" colspan="3" style="text-align:left;">Autres précisions : <i>Qu’attendez-vous du cours, où avez-vous appris son existence,...</i></td></tr>
				<tr>
					<td colspan="3"> 
					<textarea name="kialo" cols="70" rows="5"><?=stripslashes($aligxilo["kialo"]);?></textarea>
				</td>
				</tr>
				<tr>
					<td colspan="3"> 
					<input class="bouton" type="submit" name="Submit" value="Envoyer"></td>
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