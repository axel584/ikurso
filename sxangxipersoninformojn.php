<?php
include "util.php";
$pagxtitolo="Modification des données personnelles";
$korpo="informoj";
$persono_id=$_SESSION["persono_id"];
if ($persono_id=="") {header("Location:index.php?erarkodo=8");}
$persono = apartigiPersonon($persono_id);
$erarkodo = isset($_GET['erarkodo']) ? $_GET['erarkodo'] : "";
include "pagxkapo.inc.php";
// on converti la chaîne date en truc joliment écrit :
$nomMois = array("01"=>"Janvier","02"=>"Février","03"=>"Mars","04"=>"Avril","05"=>"Mai","06"=>"Juin","07"=>"Juillet","08"=>"Août","09"=>"Septembre","10"=>"Octobre","11"=>"Novembre","12"=>"Décembre");
$elementNaskigxdato = explode("-",$persono["naskigxdato"]);
if (count($elementNaskigxdato)==3) {
	$naskigxdato = $elementNaskigxdato[2]." ".$nomMois[$elementNaskigxdato[1]].", ".$elementNaskigxdato[0];
} else {
	$naskigxdato = "";
}

?>
</form> <!-- on ferme le formulaire principal -->
<div class="row">
	<article class="col s12 m10 l7 offset-m2 offset-l2">
		<h1>Données personnelles</h1>

		<div id="novaUzanto" class="card-panel blue lighten-5 center hide">
			<p>Votre compte est maintenant activé. Vous pouvez compléter vos informations personnelles.</p>
		</div>

		<p>Votre identifiant est : <?php echo $persono['enirnomo'];?><br>
			<span class="noto contraste-texte-A">(Pour changer votre adresse électronique, veuillez contacter les administrateurs du cours.)</span>
		</p>
		
		<form name="inscription" action="sxangxipersoninformojn2.php" method="POST">
			<div class="row">
				<div class="input-field col s6 l4">
					<input id="personnomo" name="personnomo" value="<?php echo $persono['personnomo'];?>" type="text" class="validate" required="" aria-required="true">
					<label for="personnomo">Prénom</label>
				</div>

				<div class="input-field col s6 l4">
					<input id="familinomo" name="familinomo" value="<?php echo $persono['familinomo'];?>" type="text" class="validate" required="" aria-required="true">
					<label for="familinomo">Nom</label>
				</div>
			</div>

			<div class="row">

				<div class="col s6 m4">
					<label for="naskigxdato" class="">Date de naissance</label>
					<input id="naskigxdato" name="naskigxdato" type="date" value="<?php echo $naskigxdato;?>" class="datepicker"s>
				</div>
				<div class="col s3">
					<input type="radio" name="sekso" id="seksoM" value="M" <?php if ($persono['sekso']=="M"){echo "checked";}?>>
					<label for="seksoM">H.</label>
					<input type="radio" name="sekso" id="seksoI" value="I" <?php if ($persono['sekso']=="I"){echo "checked";}?>>
					<label for="seksoI">F.</label>
				</div>
			</div>

			<div class="row">
				<span class="input-field col s12">
					<input type="text" name="adreso1" value="<?php echo stripslashes($persono['adreso1']);?>" />
					<label for="adreso1">Adresse</label>
				</span>
				<span class="input-field col s12">
					<input type="text" name="adreso2" value="<?php echo stripslashes($persono['adreso2']);?>" />
					<label for="adreso2">Adresse (suite)</label>
				</span>
			</div>

			<div class="row">
				<div class="input-field col s4 m2">
					<input type="text" name="posxtkodo" value="<?php echo $persono['posxtkodo'];?>" />
					<label for="posxtkodo">Code Postal</label>
				</div>
				
				<div class="input-field col s8 m5">
					<input type="text" name="urbo" value="<?php echo $persono['urbo'];?>" />
					<label for="urbo">Ville</label>
				</div>

				<div class="input-field col s12 m5">
					<?php konstruiMenuon("lando","landoj","kodo","nomo",$persono["lando"]," order by nomo","-- pays --");  ?>
					<label for="lando">Pays</label>
				</div>
			</div>
			
			<section id="rimarko" class="rimarko primaire-texte texte-moyen">
				<div class="row">
					<div class="col s12">
						<p class="noto">
						Les informations vous concernant sont destinées à Espéranto-Jeunes et Espéranto-France. 
						Nous pouvons être amenés à les transmettre à des tiers (association espérantophone régionale ou thématique, autres membres d’Espéranto-France ou Espéranto-Jeunes) ou utiliser ces coordonnées pour vous envoyer des informations concernant l’association par Internet.<br>
						<input type="checkbox" id="stopInfo" name="stopInfo" />
						<label for="stopInfo">Je ne souhaite pas que mes données personnelles soit transmises à tiers, ni utilisées pour m’envoyer des informations sur l’association.</label>
						</p>
					</div>
				</div>
			</section>

			<div class="row">
				<div class="col s12">
					<input class="btn blue right" type="submit" name="Submit" value="Enregister les modifications">
				</div>
			</div>	

		<div class="rimarko">
			<p  class="noto">Vous disposez d’un droit d’accès, de modification, de rectification et de suppression des données 
			qui vous concernent (art. 34 de la loi «Informatique et Libertés»).
			</p>
		</div>

	</article>
</div>
<?php include "pagxpiedo.inc.php";?>            