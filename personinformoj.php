<?php
include "util.php";
$pagxtitolo="Données personnelles";
$korpo="informoj";
$persono_id=$_SESSION["persono_id"];
if ($persono_id=="") {header("Location:index.php?erarkodo=8");}
$persono = apartigiPersonon($persono_id);
include "pagxkapo.inc.php";

function afficheUrl($url) {
	echo "<a target='_NEW' href='".$url["url"]."'>".$url["url"]."</a><br/>";
}

function afficheEmail($email) {
	echo "<a href='mailto:".$email["email"]."'>".$email["email"]."</a><br/>";
}

function afficheAdresse($adresse) {
	echo "<p>".$adresse["adresse"]."<br/>";
	if ($adresse["complement"]!="") {
		echo $adresse["complement"]."<br/>";
	}
	echo $adresse["codepostal"]." ".$adresse["ville"]."</p>";

}

function afficheAssociationFrancaise($idArthur) {
	$json_url = "https://esperanto-france.org/api/personne/".$idArthur;
	$json = file_get_contents($json_url);
	$data = json_decode($json, TRUE);
	echo "<span class='title'>".$data["nom"]."</span>";
	foreach ($data["adresse"] as $adresse){
		afficheAdresse($adresse);
	}
	foreach ($data["internet"] as $url){
		afficheUrl($url);
	}	
	foreach ($data["email"] as $email){
		afficheEmail($email);
	}	
	// echo "<pre>";
	// print_r($data);
	// echo "</pre>";
}

function afficheInformationNationale($idArthur) {
	echo "<div class='row'>";
	echo "<h2>Association près de chez vous</h2>";
	echo "Espéranto-France<br/>";
	echo "4bis, rue de la Cerisaie<br/>";
	echo "75004 Paris";
	echo "</div>";

}

function afficheDepartement($numeroDepartement) {
	$json_url = "https://esperanto-france.org/api/panorama/zone/".$numeroDepartement;
	//echo $json_url;
	$json = file_get_contents($json_url);
	$data = json_decode($json, TRUE);
	//echo "<pre>";
	if (sizeof($data["associations"])==0) {
		// on affiche les infos d'UFE
		afficheInformationNationale();
	} elseif (sizeof($data["associations"])==1) {
		echo "<div class='row'>";
		echo "<h2>Association près de chez vous</h2>";
		echo "<ul class='collection local'>";
		$id = $data["associations"][0]["id"];
		afficheAssociationFrancaise($id);
		echo "</div>";
	} elseif (sizeof($data["associations"])>1) {
		echo "<div class='row'>";
		echo "<h2>Associations près de chez vous</h2>";
		echo "<ul class='collection local'>";
		foreach ($data["associations"] as $association){
			echo "<li class='collection-item'>";
			afficheAssociationFrancaise($association["id"]);
			echo "</li>";
		}
		echo "</ul>";
		echo "</div>";
	}
	//print_r($data["associations"]);
	//echo "</pre>";	
}

?>

	<div class="row">
		<article class="col s12 m9 l6 offset-m1 offset-l1">
			<h1>Données personnelles</h1>
<?php
if (isset($_GET["aktivigo"])) { 
?>
			<div id="novaUzanto" class="card-panel blue lighten-5 center">
			<p>Votre compte est maintenant activé. Vous pouvez compléter vos informations personnelles.</p>
		</div>
<?php
}
?>
			<section id="enhavo">
				<div class="row">
				<span class="col s4 label">Nom :</span>
				<span class="col s6"><?php echo $persono['familinomo'];?></span>
			</div>
				<div class="row">
				<span class="col s4 label">Prénom :</span>
				<span class="col s6"><?php echo $persono['personnomo'];?>
					<?php if ($persono['sekso']=='M'){echo " (H)";}
						elseif ($persono['sekso']=='I'){echo " (F)";}
					?></span>
			</div>
			
				<div class="row">
				<span class="col s4 label">Adresse :</span>
				<span class="col s6">
					<?php echo $persono['adreso1']; 
					if ($persono['adreso2']!="") {
						echo "<br>".$persono['adreso2'];
					}
						echo "<br>".$persono['posxtkodo']." ".$persono['urbo'];
						echo "<br>";
						simplaVorto("nomo","landoj","where kodo='".$persono['lando']."'");
					?>
				</span>
			</div>
	
				<div class="row">
				<span class="col s4 label">E-mail :</span>
				<span class="col s6"><?php echo $persono['retadreso'];?></span>
			</div>
	
				<div class="row">
				<span class="col s4 label">Date de naissance :</span>
				<span class="col s6">
					<?php $nskdt = explode("-",$persono['naskigxdato']);
						if (count($nskdt)==3) {
							if (($nskdt[0]!="00")&&($nskdt[2]!="0000")) {
								echo $nskdt[2]." ";
								simplaVorto("nomo","monatoj"," where kodo='".$nskdt[1]."'");
								echo " ".$nskdt[0];
							} 
						}
					?>
				</span>
			</div>

				<div class="row">
				<div class="col s10">
					<a class="btn waves-effect waves-light blue right" href="sxangxipersoninformojn.php">Modifier</a>
				</div>
			</div>			
			
<?php
if ($persono['lando']!="" && $persono['lando']!="FR") {
	// gérer ici les associations nationales != France
}
if ($persono['lando']=="FR" && $persono['posxtkodo']!="") {
	// cas des départements français : on recherche dans arthur
	$departement = substr($persono['posxtkodo'],0,2);
	//echo $departement;
	afficheDepartement($departement);

}
			//<div class="row">
			//</div>

?>			



			</section>



		
			<section id="rimarko" class="rimarko primaire-texte texte-moyen">
			<div class="row">
				<div class="col s12">
					<p class="noto">
					Les informations vous concernant sont destinées à Espéranto-Jeunes et Espéranto-France. 
					Nous pouvons être amenés à les transmettre à des tiers (association espérantophone régionale ou thématique, autres membres d’Espéranto-France ou Espéranto-Jeunes) ou utiliser ces coordonnées pour vous envoyer des informations concernant l’association par Internet.
					</p>
					<p  class="noto">Vous disposez d’un droit d’accès, de modification, de rectification et de suppression des données 
					qui vous concernent (art. 34 de la loi «Informatique et Libertés») sur la page suivante.
					</p>
				</div>
			</div>
		</section>
		</article>
	
		<aside class="col s12 m10 l4 offset-m1 offset-l1">


		<!-- pour les élèves uniquement qui ont commencé un cours -->
		<?php if (jamKomencisKurson($persono_id)) { ?>


			<ul class="collapsible" data-collapsible="expandable">

			<li>
			<?php if ($persono['kurso']=="CG" || $persono['kurso']=="GR" ) { ?>
				<div class="collapsible-header"><a href="memoriVortojn.php">Outil de révision du vocabulaire</a></div>
			<?php } ?>
				<div class="collapsible-header"><a href="statistikoj.php">Statistiques</a></div>
			</li>
			</ul>



			<h2>Mes cours</h2>
			
			<p><span class="primaire-texte texte-moyen">Dernier cours choisi : </span><?php simplaVorto("nomo","kursoj"," where kodo='".$persono['kurso']."'"); ?></p>
			<p><span class="primaire-texte texte-moyen">Mon correcteur est :</span><br>
				<?php $korektanto = getKorektantonElLernanto($persono['id'],$persono['kurso']); 
				if ($korektanto==null) {
					echo "Pas de correcteur attribué";
				} else {
					echo $korektanto['personnomo']." ".$korektanto['familinomo']; 
					echo "&nbsp;(<a href='mailto:".$korektanto['retadreso']."'>".$korektanto['retadreso']."</a>)";
				}
				?>
				
				</p>
			<h5>Cours suivis :</h5>
			<?php getCoursElLernanto($persono['id']);?>			
			<!-- pour les administrateurs ou informateurs ou korekteur --> 
		<?php } elseif (($persono["rajtoj"]=="I") or ($persono["rajtoj"]=="A")or ($persono["rajtoj"]=="K")) { ?>
			<p><a href="<?php echo $vojo;?>miajlernantoj.php" class="btn waves-effect waves-light" >Gérer mes élèves</a></p>
		<!-- cas des élèves qui n'ont pas encore commencé le cours -->
		<?php } else { 
			// différencier le cas des élèves inscrits au ikurso des autres
			if ($persono['kurso']=="KE") {
			?>
			<h2>Mes cours</h2>
			<p><span class="primaire-texte texte-moyen">Cours choisi : </span><?php simplaVorto("nomo","kursoj"," where kodo='".$persono['kurso']."'"); ?></p>
			<p><span class="primaire-texte texte-moyen">En attente d'attribution d'un correcteur.</span></p>
			<?php
			} else {
			?>
			<p>Si vous n'avez jamais suivi de cours d'espéranto, nous vous conseillons de commencer par le <b>Cours en 10 leçons</b>. Vous pourrez le suivre avec l’aide d'un correcteur ou en totale autonomie.<br>
			<a href="<?php echo $vojo;?>fr/cge/lec01.php" class="btn waves-effect waves-light" >Cours en 10 leçons</a></p>
			<p>Si vous quelques bases et que vous voulez approfondir, nous vous conseillons le cours <b>Gerda malaperis</b> :<br>
			<a href="<?php echo $vojo;?>fr/gerda/cxap01.php" class="btn waves-effect waves-light" >cours Gerda Malaperis</a></p>
			<?php } ?>
		<?php } ?>

	</aside>

	</div>
	
<?php include "pagxpiedo.inc.php";?>
