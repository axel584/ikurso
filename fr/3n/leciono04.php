 <?php
$titolo="4 (kvar)";
$leciono = 4;
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

	
			<p class="parto">Rigardu la filmon kaj detale priskribu kion vi vidas. Kiel aspektas la aktorojn, kion ili faras, kie ĝi situas.</p>

			<iframe width="560" height="315" src="https://www.youtube.com/embed/2ieAdfIQNlQ" frameborder="0" allowfullscreen></iframe>

			<?php
				$demandoj=array (
				1 => "Priskribo de la filmo :"
				);
				ekzerco(True, 20,"N",100);
			?>




			<p>Kompreneble, mankas la fino de la filmo, sed vi certe povas imagi la sekvon...</p>
			
			<?php
				$demandoj=array (
				2 => "Divenu kion okazos :"
				);
				ekzerco(True, 20,"N",50);
			?>

			<?php 
			} // fin section
			if ($section=="2") {
			?>

			<p class="parto">Jen la tuta filmo kun la fino : </p>
			<iframe width="560" height="315" src="https://www.youtube.com/embed/TvDXGfbk78g" frameborder="0" allowfullscreen></iframe>
				
			<?php
				$demandoj=array (
				3 => "Kion vi ŝatis aŭ ne ŝatis en tiu filmo :"
				);
				ekzerco(True, 20,"N",50);
			?>	

			<?php 
			} // fin section
			if ($section=="3") {
			?>
		
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
