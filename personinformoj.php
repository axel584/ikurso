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
	echo $adresse["adresse"]."<br/>";
	if ($adresse["complement"]!="") {
		echo $adresse["complement"]."<br/>";
	}
	echo $adresse["codepostal"]." ".$adresse["ville"]."<br/>";

}

function afficheAssociationNationale($pays) {
	if ($pays=="BE") {
		echo "<div class='row'>";
		echo "<h2>Association près de chez vous</h2>";
		echo "<b>Association Brusseloise</b><br/>";
		echo "<a href='http://www.esperantobruselo.org'>esperantobruselo.org</a><br/>";
		echo "<b>Association wallone</b><br/>";
		echo "<a href='http://www.esperanto-wallonie.be'>esperanto-wallonie.be</a><br/>";
		
		echo "</div>";
	}elseif ($pays=="CA") {
		echo "<div class='row'>";
		echo "<h2>Association près de chez vous</h2>";
		echo "<b>Société québécoise d'espéranto</b><br/>";
		echo "6595, rue Briand<br/>";
		echo "Montréal, Québec, H4E 3L4<br/>";
		echo "<a href='http://www.esperanto.qc.ca'>www.esperanto.qc.ca</a><br/>";
		echo "<a href='mailto:informo@esperanto.qc.ca'>informo@esperanto.qc.ca</a><br/>";
	}elseif ($pays=="FR") {
		echo "<div class='row'>";
		echo "<h2>Association près de chez vous</h2>";
		echo "<ul class='collection local'><li class='collection-item'>";
		echo "Espéranto-France<br/>";
		echo "4bis, rue de la Cerisaie<br/>";
		echo "75004 Paris";
		echo "</li></ul>";
		echo "</div>";
	} elseif ($pays=="CH") {
		echo "<div class='row'>";
		echo "<h2>Association près de chez vous</h2>";
		echo "<ul class='collection local'><li class='collection-item'>";
		echo "<span class='title'>Ecole de langues Esperanto</span><br/>";
		echo "Chemin des Postiers 27,<br/> 2300 La Chaux-de-Fonds,<br/> Suisse<br/>";
		echo "+41 32 926 74 07";
		echo "</li>";
		echo "<li class='collection-item'><span class='title'>Laŭzana Esperanto-Societo</span><br/>Ch. de la Vollombreuse 14<br/>CH 1004 Lausanne<br/>Tel : +41 76 411 14 55 / 21 647 29 28<br/><a href='mailto:sekretario@esperanto-lausanne.ch'>sekretario@esperanto-lausanne.ch</a></li>";
		echo "<li class='collection-item'><span class='title'>Stelo</span><br/>CH 1200 Genève<br/><a href='http://lastelo.ch/' target='_NEW'>http://lastelo.ch/</a><br/><a href='mailto:info@lastelo.ch'>info@lastelo.ch</a></li>";
		echo "</ul>";
		echo "</div>";
	} else {
		echo "<div class='row'>";
		echo "<h2>Association près de chez vous</h2>";
		echo "<ul class='collection local'>";
		echo "<li class='collection-item'>";
		echo "UEA : Universala Esperanto-Asocio<br/>";
		echo "<a href='http://www.uea.org/'>uea.org/</a><br/>";
		echo "</li>";
		echo "<li class='collection-item'>";
		echo "Espéranto-France<br/>";
		echo "4bis, rue de la Cerisaie<br/>";
		echo "75004 Paris";
		echo "<a href='http://www.esperanto-france.org'>esperanto-france.org</a><br/>";
		echo "</li>";
		echo "</ul>";
		echo "</div>";		

	}
	


}

function afficheAssociationFrancaise($idArthur) {
	$arrContextOptions=array( // correction probleme SSL
    "ssl"=>array(
        "verify_peer"=>false,
        "verify_peer_name"=>false,
    ),
	); 
	$json_url = "https://esperanto-france.org/api/personne/".$idArthur;
	//echo $json_url."<br/>";
	$json = file_get_contents($json_url, false, stream_context_create($arrContextOptions));
	//print($json);
	$data = json_decode($json, TRUE);
	//echo "id :".$data["id"]."<br/>";
	$nom = isset($data['nom']) ? $data['nom'] : "SANS NOM";
	//echo "nom :".$nom."<br/>";
	//var_dump($data);
	//echo "<hr>";
	//print_r($data);
	//echo "<hr>";
	echo "<span class='title'>".$nom."</span><br/>";
	if (isset($data["adresse"])) {
		foreach ($data["adresse"] as $adresse){
			if (isset($adresse['principal']) and $adresse['principal']) { // n'affiche que les adresses principales
				afficheAdresse($adresse);
			}
		}
	}
	if (isset($data["internet"])) {
		foreach ($data["internet"] as $url){
			afficheUrl($url);
		}	
	}
	if (isset($data["email"])) {
		foreach ($data["email"] as $email){
			afficheEmail($email);
		}	
	}
}

function afficheInformationNationale() {
	echo "<div class='row'>";
	echo "<h2>Association près de chez vous</h2>";
	echo "<ul class='collection local'><li class='collection-item'>";
	echo "Espéranto-France<br/>";
	echo "4bis, rue de la Cerisaie<br/>";
	echo "75004 Paris";
	echo "</li></ul>";
	echo "</div>";

}

function afficheDepartement($numeroDepartement) {
	$arrContextOptions=array( // correction probleme SSL
    "ssl"=>array(
        "verify_peer"=>false,
        "verify_peer_name"=>false,
    ),
	);  
	$json_url = "https://esperanto-france.org/api/panorama/zone/".$numeroDepartement;
	//echo $json_url;
	$json = file_get_contents($json_url, false, stream_context_create($arrContextOptions));
	$data = json_decode($json, TRUE);
	//echo "<pre>";
	if (sizeof($data["associations"])==0) {
		// on affiche les infos d'UFE
		afficheInformationNationale("FR");
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
					<span class="col s4 label">Identifiant :</span>
					<span class="col s6"><?php echo $persono['enirnomo'];?></span>
				</div>
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

<?php

if (($persono['lando']== null)||($persono['posxtkodo']== null && $persono['lando']=="FR")) {
	echo "<div class='row'><div class='col s12'><div class='card red  lighten-4'><div class='card-content'>";
	echo "Indiquez votre code postal et votre pays pour obtenir des informations sur l'espéranto près de chez vous.";
	echo "</div></div></div></div>";
}

?>


				<div class="row">
				<div class="col s10">
					<a class="btn waves-effect waves-light blue right" href="sxangxipersoninformojn.php">Modifier</a>
				</div>
			</div>			
			
<?php
if ($persono['lando']!="" && $persono['lando']!="FR") {
	// gérer ici les associations nationales != France
	afficheAssociationNationale($persono['lando']);
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
			<!--p><a href="<?php echo $vojo;?>miajlernantoj.php" class="btn waves-effect waves-light" >Gérer mes élèves</a></p-->
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
				$section = redirigeSectionParUtilisateur($persono_id);
				if ($section!=null) {
					echo "<a href='".$vojo.$section."' class='btn waves-effect waves-light' >Continuer le cours</a></p>";
				} else {
					?>
					<p>Si vous n'avez jamais suivi de cours d'espéranto, nous vous conseillons de commencer par le <b>Cours en 10 leçons</b>. Vous pourrez le suivre avec l’aide d'un correcteur ou en totale autonomie.<br>
					<a href="<?php echo $vojo;?>fr/cge/lec01.php" class="btn waves-effect waves-light" >Cours en 10 leçons</a></p>
					<p>Si vous avez quelques bases et que vous voulez approfondir, nous vous conseillons le cours <b>Gerda malaperis</b> :<br>
					<a href="<?php echo $vojo;?>fr/gerda/cxap01.php" class="btn waves-effect waves-light" >cours Gerda Malaperis</a></p>
					<p>Kaj se vi jam sekvis kurson kaj deziras plulerni la lingvon, vi povas sekvi la kurson <b>Paŝoj al plena Posedo</b> :</b> :<br>
					<a href="<?php echo $vojo;?>eo/ppp/pasxo01.php" class="btn waves-effect waves-light" >Paŝoj al plena posedo</a></p>
				<?php } ?>
			<?php } ?>
		<?php } ?>

	</aside>

	</div>
	
<?php include "pagxpiedo.inc.php";?>
