<?php
include "util.php";
$pagxtitolo="Événements locaux";
$persono_id=$_SESSION["persono_id"];
if ($persono_id=="") {header("Location:index.php?erarkodo=8");}
$persono = apartigiPersonon($persono_id);
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
				echo "Début : ";
				echo "Fin :";
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
	if ($row["lando"]!=null && $row["lando"]!="") {
		echo " - ".$row["lando"];
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
