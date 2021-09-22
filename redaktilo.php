<?php
// pour débugguer
error_reporting(E_ALL); 
ini_set('display_errors', 1);

include "util.php";
$pagxtitolo="stirpanelo";
$korpo="hejmo";
$section=isset($_GET["section"])?$_GET["section"]:"protokolo";
$kurso=isset($_GET["kurso"])?$_GET["kurso"]:"";
$leciono=isset($_GET["leciono"])?$_GET["leciono"]:"";
$lecionero=isset($_GET["lecionero"])?$_GET["lecionero"]:"";
$ekzerco=isset($_GET["ekzerco"])?$_GET["ekzerco"]:"";
$ekzercero=isset($_GET["ekzercero"])?$_GET["ekzercero"]:"";
if (isset($celpersono_id)) {$celpersono = apartigiPersonon($celpersono_id);}
include "pagxkapo.inc.php";
?>

<div class="row">

	<article class="col s12 m9">
		<div>
			<?php
			if ($kurso=="") {
				// liste des cours
				$demandoKursoj = "select id,kodo,nomo from kursoj";
				$resultKursoj = $bdd->query($demandoKursoj) or die(print_r($bdd->errorInfo()));
				while ($rowKursoj=$resultKursoj->fetch()) {
					echo "<p><span>".$rowKursoj['nomo']."</span>&nbsp;<a href='redaktilo.php?kurso=".$rowKursoj['kodo']."' class='waves-effect waves-light btn'><i class='material-icons'>expand_more</i></a></p>";
				}
			} else {
				$demandoKursoj = "select id,kodo,nomo from kursoj where kodo='".$kurso."'";
				$resultKursoj = $bdd->query($demandoKursoj) or die(print_r($bdd->errorInfo()));
				$rowKursoj=$resultKursoj->fetch();
				echo "<h3>Cours : ".$rowKursoj['nomo']."</h3>";
				// listes des leçons
				if ($leciono=="") {
					$demandoLecionoj = "select id,numero,titolo,retpagxo,kurso,unua,lasta from lecionoj where kurso='".$kurso."'";
					$resultLecionoj = $bdd->query($demandoLecionoj) or die(print_r($bdd->errorInfo()));
					while ($rowLecionoj=$resultLecionoj->fetch()) {
						echo "<p><span>".$rowLecionoj['titolo']."</span>&nbsp;<a href='redaktilo.php?ago=REDAKTILECIONON&kurso=".$kurso."&leciono=".$rowLecionoj['id']."' class='waves-effect waves-light btn'><i class='material-icons'>edit</i></a>&nbsp;<a href='redaktilo.php?kurso=".$kurso."&leciono=".$rowLecionoj['id']."' class='waves-effect waves-light btn'><i class='material-icons'>expand_more</i></a></p>";		
					}
					echo "<br/><a href='redaktilo.php?kurso=".$rowKursoj['kodo']."' class='waves-effect waves-light btn'><i class='material-icons'>add</i></a>";

				} else {
					$demandoLecionoj = "select id,numero,titolo,retpagxo,kurso,unua,lasta from lecionoj where id='".$leciono."'";
					$resultLecionoj = $bdd->query($demandoLecionoj) or die(print_r($bdd->errorInfo()));
					$rowLecionoj=$resultLecionoj->fetch();
					echo "<p><h4>Leçon : ".$rowLecionoj['titolo']."</h4></p>";
					// listes des sections
					if ($lecionero=="") {
						$demandoLecioneroj = "select id,leciono_id,titolo,tipo,enhavo,ordo,unua,lasta,dauxro,android from lecioneroj where leciono_id='".$leciono."'";
						$resultLecioneroj = $bdd->query($demandoLecioneroj) or die(print_r($bdd->errorInfo()));
						while ($rowLecioneroj=$resultLecioneroj->fetch()) {
							echo "<p><span>".$rowLecioneroj['titolo']."</span>&nbsp;<a href='redaktilo.php?ago=REDAKTILECIONERON&kurso=".$kurso."&leciono=".$leciono."&lecionero=".$rowLecioneroj['id']."' class='waves-effect waves-light btn'><i class='material-icons'>edit</i></a>&nbsp;<a href='redaktilo.php?kurso=".$kurso."&leciono=".$leciono."&lecionero=".$rowLecioneroj['id']."' class='waves-effect waves-light btn'><i class='material-icons'>expand_more</i></a>";		
						}
						echo "<br/><a href='redaktilo.php?kurso=".$rowLecionoj['id']."' class='waves-effect waves-light btn'><i class='material-icons'>add</i></a>";
					} else {
						// mettre le titre de la section
						$demandoLecioneroj = "select id,leciono_id,titolo,tipo,enhavo,ordo,unua,lasta,dauxro,android from lecioneroj where id='".$lecionero."'";
						$resultLecioneroj = $bdd->query($demandoLecioneroj) or die(print_r($bdd->errorInfo()));
						$rowLecioneroj=$resultLecioneroj->fetch();
						echo "<p><h5>Section : ".$rowLecioneroj['titolo']."</h5></p>";
						// listes des sections
						if ($ekzerco=="") {
							$demandoEkzercoj = "select id,komando,lecionero_id,komando_detalo,ekzemplo,typo,x2u,korektebla from ekzercoj where lecionero_id='".$lecionero."'";
							$resultEkzercoj = $bdd->query($demandoEkzercoj) or die(print_r($bdd->errorInfo()));
							while ($rowEkzercoj=$resultEkzercoj->fetch()) {
							echo "<p><span>".$rowEkzercoj['komando']."</span>&nbsp;<a href='redaktilo.php?ago=REDAKTIEKZERCO&kurso=".$kurso."&leciono=".$leciono."&lecionero=".$lecionero."&ekzerco=".$rowEkzercoj['id']."' class='waves-effect waves-light btn'><i class='material-icons'>edit</i></a>&nbsp;<a href='redaktilo.php?kurso=".$kurso."&leciono=".$leciono."&lecionero=".$lecionero."&ekzerco=".$rowEkzercoj['id']."' class='waves-effect waves-light btn'><i class='material-icons'>expand_more</i></a></p>";		
							}
							echo "<a href='redaktilo.php?kurso=".$rowLecionoj['id']."' class='waves-effect waves-light btn'><i class='material-icons'>add</i></a>";

						} else {
							$demandoEkzercoj = "select id,komando,lecionero_id,komando_detalo,ekzemplo,typo,x2u,korektebla from ekzercoj where id='".$ekzerco."'";
							$resultEkzercoj = $bdd->query($demandoEkzercoj) or die(print_r($bdd->errorInfo()));
							$rowEkzercoj=$resultEkzercoj->fetch();
							echo "<p><h6>Exercice : ".$rowEkzercoj['komando']."</h6></p>";
							// liste des questions
							if ($ekzercero=="") {
								$demandoEkzerceroj = "SELECT id,ekzerco_id,kodo,numero,demando,respondo,normaligita,bildo,forigita,korektebla	 FROM ekzerceroj where ekzerco_id='".$ekzerco."'";
								$resultEkzerceroj = $bdd->query($demandoEkzerceroj) or die(print_r($bdd->errorInfo()));
								while ($rowEkzerceroj=$resultEkzerceroj->fetch()) {
									echo "<p><span>".$rowEkzerceroj['demando']."</span>&nbsp;<a href='redaktilo.php?ago=REDAKTIEKZERCO&kurso=".$kurso."&leciono=".$leciono."&lecionero=".$lecionero."&ekzerco=".$ekzerco."&ekzercero=".$rowEkzerceroj['id']."' class='waves-effect waves-light btn'><i class='material-icons'>edit</i></a></p>";		
								} 
								echo "<a href='redaktilo.php?kurso=".$kurso."&leciono=".$leciono."&lecionero=".$lecionero."&ekzerco=".$ekzerco."' class='waves-effect waves-light btn'><i class='material-icons'>add</i></a>";
							} else {


							}

						}
					}
				}
			}
			?>

		</div>
	</article>

<aside class="col s12 m3">
		<ul class="collapsible" data-collapsible="expandable">
			<li class="active">
				<div class="collapsible-header"><i class="material-icons">toc</i>Administration</div>
				<div class="collapsible-body">
					<ul id="enhavtabelo" class="collection">
					<li class=""><div><a href="stirpanelo.php?section=protokolo" class="">Carnet de bord</a></div></li>
					<li class=""><div><a href="stirpanelo.php?section=korektantoj" class="">Correcteurs</a></div></li>
					<li class=""><div><a href="redaktilo.php" class="">Editeur</a></div></li>
					</ul>
				</div>		
			</li>
		</ul>	
	</aside>
			
</div>
<?php include "pagxpiedo.inc.php"; ?>	