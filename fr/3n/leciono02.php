 <?php
$titolo="2 (du)";
$leciono = 2;
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

	
			<p class="parto">En la venonta paĝo, vi devos aŭskulti tekston kaj respondi al kelkaj demandoj. Ĉi-tie troviĝas kelkaj vortoj el tiu teksto. Prenu iom da tempo por legi tiujn vortojn kaj memoru ilin se vi ankoraŭ ne konas ilin.</p>


		<div class="vortlisto row">
			<div class="col s12 m4">
				<p><span class="eo">amplifilo</span> : amplificateur</p>
				<p><span class="eo">bendo</span> : bande</p>
				<p><span class="eo">eltrovaĵo</span> : découverte</p>
				<p><span class="eo">estingi</span> : éteindre</p>
				<p><span class="eo">fajrobrigadisto</span> : pompier</p>
				

			</div>
			<div class="col s12 m4">
				<p><span class="eo">frekvenco</span> : fréquence</p>
				<p><span class="eo">fritilo</span> : filtre</p>
				<p><span class="eo">generatoro</span> : générateur</p>
				<p><span class="eo">herco</span> : hertz</p>			
				<p><span class="eo">kemia</span> : chimique</p>
				

			</div>
			<div class="col s12 m4">
				<p><span class="eo">korpusklo</span> : corpuscule</p>
				<p><span class="eo">patento</span> : brevet</p>
				<p><span class="eo">ŝaŭmo</span> : écume, mousse</p>
				<p><span class="eo">toksa</span> : toxique</p>			
			</div>
		</div>


			
			<?php 
			} // fin section
			if ($section=="2") {
			?>
			<fieldset class="ekzerco">
				<legend>Aŭskultu la tekston <b>nur unu foje</b> kaj respondu la demandon.</legend>
			<div class="tasko">
				<p>
					<audio controls="controls">Votre navigateur ne supporte pas la lecture du fichier audio.
						<source src="<?php echo $vojo;?>fr/3n/son/Estingi_fajron.mp3" type="audio/mp3">
					</audio>
				</p>
<?php
QCM(
	array(
		array(
			"question"=>"Laŭ vi, en kiu kategorio de la gazeto aperis tiu artikolo ?",
			"propositions"=>array("Politiko","Scienco","Turismo","Ekonomio"),
			"indices"=>array("","",""),
			"reponse"=>2
		)
	)
);
?>
			</div>

			</fieldset>

			<?php 
			} // fin section
			if ($section=="3") {
			?>

			<fieldset class="ekzerco">
				<legend>Aŭskultu <b>duan fojon</b> kaj respondu la demandon per vera aŭ malvera.</legend>
			<div class="tasko">
				<p>
					<audio controls="controls">Votre navigateur ne supporte pas la lecture du fichier audio.
						<source src="<?php echo $vojo;?>fr/3n/son/Estingi_fajron.mp3" type="audio/mp3">
					</audio>
				</p>
<?php
QCM(
	array(
		array(
			"question"=>"Du ĉinaj inĝinieroj trovis novan metodon por estingi fajron",
			"propositions"=>array("Vera","Malvera"),
			"indices"=>array("","",""),
			"reponse"=>2
		),
		array(
			"question"=>"La aparato postulis 1200 dolarojn",
			"propositions"=>array("Vera","Malvera"),
			"indices"=>array("","",""),
			"reponse"=>1
		),
		array(
			"question"=>"La inventistoj filmis pruvon de sia funkcianta aparato",
			"propositions"=>array("Vera","Malvera"),
			"indices"=>array("","",""),
			"reponse"=>1
		),
		array(
			"question"=>"Tiu aparato aĉeteblas je la kosto de 600 dolaroj",
			"propositions"=>array("Vera","Malvera"),
			"indices"=>array("","",""),
			"reponse"=>2
		)
	)
);
?>
			</div>

			</fieldset>

			<?php 
			} // fin section
			if ($section=="4") {
			?>

			<fieldset class="ekzerco">
				<legend>Aŭskultu <b>plian fojon</b> kaj respondu la demandon.</legend>
			<div class="tasko">
				<p>
					<audio controls="controls">Votre navigateur ne supporte pas la lecture du fichier audio.
						<source src="<?php echo $vojo;?>fr/3n/son/Estingi_fajron.mp3" type="audio/mp3">
					</audio>
				</p>
				<p>Tiu frazo estas en la teksto sed unu vorto estis anstataŭigita per alia vorto. Kiun vorton ?</p>
				<p><span class="eo">La eltrovaĵo ŝajnas interesa, ĉar ĝi estas pli senriska ol la kutimaj kontraŭbrulaj metodoj.</span></p>

				<?php
				$demandoj=array (
				1 => "la ŝanĝita vorto estas :",
				2 => "la originala vorto estis :"
				);
				ekzerco(True, 1);
			?>

			</div>

			</fieldset>

			<?php 
			} // fin section
			if ($section=="5") {
			?>

			<?php 
			} // fin section
			if ($section=="6") {
			?>			
		
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
<?php include "piedo.inc.php"; ?>
