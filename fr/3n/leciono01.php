 <?php
$titolo="1 (unu)";
$leciono = 1;
$section=isset($_GET["section"])?$_GET["section"]:"1";
include "dlekkapo.inc.php";
?>
<div class="row">
	<article class="col s12 m10 l7 offset-m1 offset-l1">
		
		<section id="leciono-enhavo">
			<?php 
			getTitoloLecionero('3N',1,$section);
			
			if ($section=="1") {
			?>

	
			<p class="parto">Per minimume 100 vortoj, prezentu vin. Kiel vi nomiĝas ? Kion vi faras/is profesie ? Kie vi loĝas ? Kion vi faras dum via libertempo ? Ĉu vi havas infanojn ? Ĉu vi havas dorlotbestojn ? Kompreneble, vi ne estas devigata respondi al ĉiuj demandoj kaj vi povas aldoni informoj pri aliaj temoj por ke via korektanto pli bone konatu vin. Trankviliĝu : ni ne uzos tiun informojn por sendi reklamon !</p>


			<?php
				$demandoj=array (
				1 => "Jen mia prezentado :"
				);
				ekzerco(True, 8);
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
				<?php getBoutonFinSection('3N',1,$section,$persono_id); ?>
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
<?php include "dlekpiedo.inc.php"; ?>
