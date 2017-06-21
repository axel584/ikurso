<?php
include "util.php";
$pagxtitolo="Événements locaux";
$persono_id=$_SESSION["persono_id"];
$action = isset($_GET['action']) ? $_GET['action'] : "";
include "pagxkapo.inc.php";

// quelques fontctions



function dates2string($debut,$fin) {
	// liste des mois en français
	$nomMois = array("01"=>"Janvier","02"=>"Février","03"=>"Mars","04"=>"Avril","05"=>"Mai","06"=>"Juin","07"=>"Juillet","08"=>"Août","09"=>"Septembre","10"=>"	Octobre","11"=>"Novembre","12"=>"Décembre");

	$res = "";
	$structDebut = explode("-", $debut);
	$structFin = explode("-", $fin);
	$res .= $structDebut[2]; // on affiche le jour du début
	if ($fin!=null && $fin!="" && $structDebut[1]!=$structFin[1]) {  // si le mois de fin est différent du mois de début, on affiche le mois de début
		$res .= " ".$nomMois[$structDebut[1]];	
	}
	if ($fin!=null && $fin!="" && $structDebut[0]!=$structFin[0]) {  // si l'année de fin est différent de l'année de début, on affiche l'année de début
		$res .= " ".$structDebut[0];	
	}
	if ($fin!=null && $fin!="") { // si on a une fin, on affiche le tiret et le reste la date de fin
		$res .= "-".$structFin[2]." ".$nomMois[$structFin[1]]." ".$structFin[0];	
	} else { // si on n'a pas de date de fin, on affiche le mois de début et l'année de début
		$res .= " ".$nomMois[$structDebut[1]]." ".$structDebut[0];	
	}
	return $res;
}

function url2string($url) {
	return "<a href='".$url."'>".$url."</a>";
}

function mail2string($mail) {
	return $mail;
}

?>

	<div class="row">
		<article class="col s12 m9 l6 offset-m1 offset-l1">
			<h1>Événements locaux</h1>
			<section id="enhavo">

			<!-- ici on met la zone d'édition (pour ajout ou pour modification) -->

			<?php
			if ($action=="add") {
			      echo '<div class="row">';
			        echo '<div class="col s12 m12">';
			          echo '<div class="card deep-purple lighten-5">';
			            echo '<div class="card-content">';
			              echo '<div><span class="card-title">Nouvelle activité</span></div>';
			              //echo '<div class="row"><input name="radioGeographique" type="radio" id="France" value="France"/><label for="France">France</label><input name="radioGeographique" type="radio" id="Europe"  value="Europe"/><label for="Europe">Europe</label><input name="radioGeographique" type="radio" id="Ailleurs"  value="Ailleurs"/><label for="Ailleurs">Ailleurs</label><input name="radioGeographique" type="radio" id="Mondiaux"  value="Mondiaux"/><label for="Mondiaux">Mondiaux</label></div>';
			              echo '<div class="row"><input name="radioGeographique" type="radio" id="France" value="France" checked="checked"/><label for="France">France</label></div>';
			              echo '<div class="row"><div class="input-field col s6"><span id="detail_geographique"><input id="departemento" type="text" class="validate"><label for="departemento">Numéro de Département</label></span></div></div>';
			              echo '<div class="row"><div class="input-field col s6"><input id="komenco" type="text" class="validate" placeholder="DD/MM/AAAA"><label for="komenco">Début</label></div><div class="input-field col s6"><input id="fino" type="text" class="validate" placeholder="DD/MM/AAAA"><label for="fino">Fin</label></div>';
			              echo '<div class="input-field col s12"><p id="helpilo-dato" class="helpilo">Ne pas indiquer de date de fin si l\'événement dure une seule journée.</p></div>';
			              echo '</div>';
			              echo '<div class="row"><div class="input-field col s12"><input id="priskribo" type="text" class="validate"><label for="priskribo">Description</label><p id="helpilo-priskribo" class="helpilo">Description en français, sur une seule phrase, terminée par la ville de l\'événement.</p></div></div>';
			              echo '<div class="row"><div class="input-field col s12"><input id="url" type="text" class="validate"><label for="url">Adresse site internet</label></div></div>';
			              echo '<div class="row"><div class="input-field col s12"><input id="mail" type="text" class="validate"><label for="mail">Adresse courriel de contact</label></div></div>';
			            echo '<div class="card-action">';
			              echo '<a href="#" id="registri_eventon">Enregistrer</a>';
			            echo '</div>';
			          echo '</div>';
			        echo '</div>';
			      echo '</div>';
			}

			?>


			<a class="btn-floating btn-large waves-effect waves-light red" href='?action=add'><i class="material-icons">add</i></a> Ajouter un événement
			<!-- ici on met le tableau avec les données -->
				
			
          
<?php 



$query = "select id, persono_id, komenco, fino, tipo, priskribo, lando, departemento, url, mail from eventoj order by tipo, komenco";
$result = $bdd->query($query) or die(print_r($bdd->errorInfo()));
$tipo_precedent="";
while ($row = $result->fetch()) {
	if ($row["tipo"]!=$tipo_precedent) {
		echo "<table class='striped'><thead><tr><th>".$row["tipo"]."</th></tr></thead><tbody>";
		$tipo_precedent=$row["tipo"];
	}
	echo "<tr><td>";
	echo "<b>".dates2string($row["komenco"],$row["fino"]);
	if ($row["lando"]!=null && $row["lando"]!="" && $row["lando"]!="France") {
		echo " - ".$row["lando"];
	}
	if ($row["departemento"]!=null && $row["departemento"]!="") {
		echo " - (".$row["departemento"].")";
	}	
	echo ".</b> ";
	echo $row["priskribo"];
	echo "<br/>";
	echo url2string($row["url"]).mail2string($row["mail"]);
	echo "</td>";

	echo "</tr>";
}
echo "</tbody></table>";

?>


        </tbody>
      </table>


			</section>
		
		</article>
	
		<aside class="col s12 m10 l4 offset-m1 offset-l1">

		<!-- ici on garde de la place pour accéder à certaines fonctionnalité -->

	</aside>

	</div>
	
<?php include "pagxpiedo.inc.php";?>
