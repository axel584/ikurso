<?php 
$titolo="15 (dek kvin)";
$leciono = 15;
$section=isset($_GET["section"])?$_GET["section"]:"1";
include "gerdakapo.inc.php";
?>
<div class="row">
	<article class="col s12 m10 l7 offset-m1 offset-l1">
		
		<section id="leciono-enhavo">
		<?php 
		getTitoloLecionero('GR',$leciono,$section);

		if ($section=="1") {
			include "gerdasono.inc.php";
		?>

			<h3>Preciza raporto</h3>
			<div class="row dialogo">
				<div class="col s12 m8">
					<p>"Bonan matenon, ho plej bela, ĉu vi bone dormis?"</p>
					<p>"Bonan matenon, Tom. Mi ne dormis tre multe. Kaj vi, ĉu vi
					dormis kontentige?"</p>
					<p>"Perfekte, kara, perfekte. Sed diru do al via plej fidinda
					amiko, kial vi ne sufiĉe dormis."</p>
					<p>"Ĉu ne estas klare al vi? Mi tro pensis. Mi pensadis tutnokte
					pri ĉio, kio okazis hieraŭ."</p>
					<p>"Estas fakto, ke mi ne revidis vin hieraŭ, post kiam mi eliris
					kun Bob por okupiĝi pri Gerda. Ni lasis vin en la memserva restoracio
					kun la tasko observi la blondulon. Kiam mi revenis, vi estis for. Kien
					vi iris? ĉu vi faros al mi precizan raporton?"</p>
					<p>"Kun plezuro, sed ankaŭ vi raportos al mi poste, ĉu ne? Nu,
					mi veturis al la urbocentro kun tiu junulo. Mi rakontis al li, ke io
					fuŝa okazis al mia aŭto, kaj mi petis lin min veturigi. Li hezitis,
					sed fine decidis jese. Mi deziris lin paroligi, por ekscii pri li kiel
					eble plej multe, sed mi ne sukcesis. Ni diris unu al la alia nur tre
					banalajn aferojn."</p>
					<p>"Ĉu vi almenaŭ scias, kien li iris en la urbo, laŭ kiuj
					stratoj, al kiu domo?"</p>
					<p>"Atendu. Mi rakontos ĉion. Por ke mia peto ŝajnu natura, mi
					petis lin lasi min en la centro. Li lasis min ĉe la dekstra flanko de
					la Granda Teatro, kaj li veturis plu. Mi ne sciis, kion fari. Mi
					promenis en la urbo, pensante, ke mia ideo ne estis tiel bona: mi
					eksciis nenion pri li, kaj troviĝis sen aŭto en la mezo de la urbo.
					Fakte, mi sentis min iom stulta. Mi promenis de strato al strato,
					provante elpensi planon, kaj jen subite mi vidas lin eliri el la
					poŝtoficejo. Mi estis nekredeble bonŝanca. Imagu! Se mi estus
					troviĝinta naz-al-naze kun li ĝuste kiam li eliris el la
					poŝt-oficejo...! Sed mi vidis lin sufiĉe frue por min kaŝi."</p>
				</div>
				<div class="col s12 m4">
					<img src="bildoj/gerda15-1.gif" class="responsive-img">
				</div>
			</div>

			<div class="row dialogo">
				<div class="col s12 m8">
					<p>"Feliĉe, ke vi vidis lin sufiĉe frue!"</p>
					<p>"Kiel mi diris: mi estis bonŝanca, mi vidis lin ĝustatempe.
					Nu, li iris piede, kaj mi decidis lin sekvi. Ĉu vi konas tiun grandan
					magazenon, kiu vendas kvardek malsamajn specojn de pano kaj ĉiaspecajn
					ĉokoladojn kaj aliajn dolĉaĵojn? Sur la maldekstra flanko de la
					strato, kiu iras al la ĉefa Sportocentro. Estas granda vendejo de
					mebloj apude. Nu, ne gravas, ĉu vi konas aŭ ne. Li eniris tiun
					panejon, aŭ tiun dolĉaĵvendejon, aŭ tiun… nu… tiun pan- kaj
					dolĉaĵvendejon, kaj eliris post minuto portante paperan sakon, kiu
					aspektis plenplena. ŝajnis, ke li aĉetis la tutan magazenon. Mi devas
					diri, ke ili vendas tre bonajn aĵojn en tiu ejo.  Mi, kiu tiom ŝatas
					ĉokoladon kaj dolĉaĵojn, ofte irus tien kaj aĉetus multon, se mi ne
					timus dikiĝi. Nu… e… kion mi rakontis?"</p>
					<p>"Vi raportis pri via spiona sekvado, sed vi devojiĝis de la
					ĉefa vojo de via raporto al flankaj konsideroj pri pano kaj ĉokolado.
					Fakte, ĉu vi deziras iom pli da pano? Kion vi trinkas ĉi-matene?
					Teon, mi vidas. ĉu vi ŝatus, ke mi replenigu vian tason?"</p>
					<p>"Jes, dankon. Mi plezure trinkos plian tason da teo. Dankon,
					Tom, kara. Nu, do…"</p>
				</div>
				<div class="col s12 m4">
					<img src="bildoj/gerda15-2.gif" class="responsive-img">
				</div>
			</div>

		<?php 
		} // fin section 1
		if ($section=="2") {
		?>

			<section class="klarigo">
	
				<p><span class="eo">bonŝanca</span> : chanceux, -euse</p>
		
				<p><span class="eo">devojiĝi (de + <span class="eo">voj</span> + <span class="eo">iĝi</span>)</span> : dévier ; s'écarter ; dériver</p>
			</section>

		<?php 
		} // fin section 2
		if ($section=="3") {
		?>

		<?php 
		} // fin section 3
		if ($section=="4") {
		?>

			<fieldset class="ekzerco">
				<legend><b>Demandoj</b> </legend>
				<input>
				<div class="tasko">
				?>
				</div>
			</fieldset>

		<?php 
		} // fin section 4
		if ($section=="5") {
		?>

			<h3>xxxx</h3>

		<?php 
		} // fin section 5
		?>

		</section>
		
		<section id="leciono-fino">
			<div id="marko" class="right-align">
				<?php getBoutonFinSection('GR',$leciono,$section,$persono_id); ?>
				<a id="farita" class="btn-floating btn-large light-blue darken-1 hide"><i class="material-icons">done_all</i></a>
			</div>
			<div class="ligoj">
				<?php getLecioneroAntauxa('GR',$leciono,$section); ?>
				<?php getLecioneroVenonta('GR',$leciono,$section); ?>
			</div>
		</section>
		
	</article>
	
	<aside class="col s12 m10 l3 offset-m1 push-l1">
								
		<ul class="collapsible" data-collapsible="expandable">

			<?php 
			// On affiche le sommaire de la lecon
			getEnhavtabelo('GR',$leciono); 
			?>
		</ul>	
		
		<p>
			Elŝutu ĉiujn rakontojn (entute: 25) en unu dosiero:
			 <a href="<?php echo $vojo;?>fr/gerda/son/gerda-malaperis.zip">gerda-malaperis.zip</a>
		</p>
		
	</aside>
</div>

<?php include "gerdapiedo.inc.php"; ?>