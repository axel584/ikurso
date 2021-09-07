<?php
include "util.php";
$pagxtitolo="stirpanelo";
$korpo="hejmo";
$section=isset($_GET["section"])?$_GET["section"]:"protokolo";
$kurso=isset($_GET["kurso"])?$_GET["kurso"]:"";
$leciono=isset($_GET["leciono"])?$_GET["leciono"]:"";
$lecionero=isset($_GET["lecionero"])?$_GET["lecionero"]:"";
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
					echo "<h2>".$rowKursoj['nomo']."</h2><a href='redaktilo.php?kurso=".$rowKursoj['kodo']."' class='waves-effect waves-light btn'><i class='material-icons'>expand_more</i></a>";
				}
			} else {
				$demandoKursoj = "select id,kodo,nomo from kursoj where kodo='".$kurso."'";
				$resultKursoj = $bdd->query($demandoKursoj) or die(print_r($bdd->errorInfo()));
				$rowKursoj=$resultKursoj->fetch();
				echo "<h1>".$rowKursoj['nomo']."</h1>";
				// listes des leçons
				if ($leciono=="") {
					$demandoLecionoj = "select id,numero,titolo,retpagxo,kurso,unua,lasta from lecionoj where kurso='".$kurso."'";
					$resultLecionoj = $bdd->query($demandoLecionoj) or die(print_r($bdd->errorInfo()));
					while ($rowLecionoj=$resultLecionoj->fetch()) {
						echo "<h2>".$rowLecionoj['titolo']."</h2><a href='redaktilo.php?ago=REDAKTILECIONON&kurso=".$kurso."&leciono=".$rowLecionoj['id']."' class='waves-effect waves-light btn'><i class='material-icons'>edit</i></a>&nbsp;<a href='redaktilo.php?kurso=".$kurso."&leciono=".$rowLecionoj['id']."' class='waves-effect waves-light btn'><i class='material-icons'>expand_more</i></a>";		
					}
					echo "<br/><a href='redaktilo.php?kurso=".$rowKursoj['kodo']."' class='waves-effect waves-light btn'><i class='material-icons'>add</i></a>";

				} else {
					echo "leciono detail";
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