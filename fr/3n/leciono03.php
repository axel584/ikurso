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

			<p>Tie, skribu la nomon de la filmo en via lingvo aŭ en la originala lingvo de la filmo.</p>

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
			<p class="parto">Jen priskribo de alia lernanto elektita hazarde, provu trovi la nomon de la filmo. Klaku sur "Kontroli" por vidi la titolon de la filmo. Ne eblas kontroli ĉu vi ĝuste trovis la respondon ĉar la lernantoj povus skribi la titolon alimaniere kaj vi mem elektu ĉu via respondo estas ĝusta aŭ ne.</p>
			<?php list($lernanto,$priskribo,$titolo) = getHazardaPriskriboDeFilmo($persono_id); ?>
			<fieldset class="ekzerco">
			<legend>La plej ŝatata filmo de <?=$lernanto?>.</legend>
			<div class="tasko">
				<p>
					<?=$priskribo?>
				</p>
				<p><label for="titolo">Provu trovi la titolon de tiu filmo :</label><input id='titolo' type='text' name='titolo'/>
				<a id="kontroliRespondon_button" class="waves-effect waves-light btn tooltipped light-blue darken-1" data-respondo="<?=$titolo?>" data-position="top" data-delay="50" data-tooltip="Montri la respondon de <?=$lernanto?>">Kontroli mian respondon !</a>
				</p>
			</div>

			</fieldset>

			

			<?php 
			} // fin section
			if ($section=="3") {
			?>
			<p>Vi sendos vian lecionon al via korektanto. Ne forgesu ke via priskribo estos montrita al aliaj lernantoj. Se via korekanto proponas plibonigojn al via teksto, bonvolu korekti vian tekston sur la retejo. Por fari tion, sufiĉas iri sur la unua paĝo de tiu leciono, ŝanĝi vian tekston kaj klaki sur la butonon por registri vian ŝanĝon.</p>


		
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
