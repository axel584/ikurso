 <?php
$titolo="3 (tri)";
$leciono = 3;
$section=isset($_GET["section"])?$_GET["section"]:"1";
include "kapo.inc.php";
?>
<div class="row">
	<article class="col s12 m10 l7 offset-m1 offset-l1">
		
		<section id="leciono-enhavo">
			<?php 
			getTitoloLecionero('3N',$leciono,$section);
			
			if ($section=="1") {
			?>

	
			<p class="parto">Rakontu vian plej ŝatatan filmon. Detale priskribu la rakonton kaj diru kial vi ŝatis ĝin. Sed NE nomu tiun filmon. La aliaj lernantoj devos trovi la nomon de tiu filmo legante vian priskribon. Elektu sufiĉe konatan filmon.</p>


			<?php
				$demandoj=array (
				1 => "Mia plej ŝatata filmo temas pri :"
				);
				ekzerco(True, 20);
			?>

			<p>Tie, skribu la nomon de la filmo en via lingvo aux en la originala lingvo de la filmo.</p>

			<?php
				$demandoj=array (
				2 => "Mia plej ŝatata filmo nomiĝas :"
				);
				ekzerco(False, 1);
			?>
			
			<?php 
			} // fin section
			if ($section=="2") {
			?>


			<p>Ĝis baldaŭ por la venonta leciono&nbsp;!</p>

			<div class="card-panel blue lighten-5">
				<p>Aliĝi estas devigata nur por ricevi helpon de korektanto. Korektantoj estas volontuloj kiuj laboras senpage. Ili sekvas limigitan nombron de lernantoj. Pro tio, se vi petas korektanton, provu sekvi la kurson serioze kaj regule. Se vi ne povas sendi viajn lecionojn dum pluraj semajnoj, informu vian korektanton por ke li povu klopodi la taskojn de alia lernanto.
				<p>Agrablan vojaĝon tra niaj lecionoj !</p>	
			</div>
		
		<?php 
				recapitulatif_lecon_avant_envoi('3N',$leciono,$persono_id);
		} // fin section
		?>	
		</section>

		<section id="leciono-fino">
			<div id="marko" class="right-align">
				<?php getBoutonFinSection('3N',$leciono,$section,$persono_id); ?>
				<a id="farita" class="btn-floating btn-large light-blue darken-1 hide"><i class="material-icons">done_all</i></a>
			</div>
			<div class="ligoj">
				<?php getLecioneroAntauxa('3N',$leciono,$section); ?>
				<?php getLecioneroVenonta('3N',$leciono,$section); ?>
			</div>
		</section>
	</article>
	
	<aside class="col s12 m10 l3 offset-m1 push-l1">
								
		<ul class="collapsible" data-collapsible="expandable">

			<?php 
			// On affiche le sommaire de la lecon
			getEnhavtabelo('3N',$leciono); 
			?>

		</ul>	
	</aside>
</div>
<?php include "piedo.inc.php"; ?>
