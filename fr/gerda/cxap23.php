<?php 
$titolo="23 (dudek tri)";
$leciono = 23;
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

			<h3>La trezoro en kofro</h3>
			<div class="row dialogo">
				<div class="col s12 m8">
					<p>Post duonhoro, iu envenis. Estis Bob!</p>
					<p>"Kie sin kaŝas la Lumserĉantoj?" li kriis, "ĉu en la
					mallumo?"</p>
					<p>La aliaj sin montris.</p>
					<p>"Rekaŝu vin, ili tuj alvenos," li diris.</p>
					<p>"Kiel vi faris por antaŭi ilin?"</p>
					<p>"Dank' al Gerda: ŝi telefone aranĝis, ke veturilo atendu min
					ĉe la flughaveno, kaj ke ŝoforo min veturigu ĉi tien. Mono solvas
					multajn problemojn, kaj ŝi estas riĉa, kiel vi scias; ŝi donis tre
					precizajn indikojn por ebligi al la ŝoforo trovi la lokon, kaj jen mi estas.
					Sed niaj trezorserĉantoj tuj alvenos. Ili flugis en la sama aviadilo,
					kiel mi, kaj kiam la ŝoforo min trovis, mi vidis ilin iri al oficejo,
					kie oni luas aŭtojn."</p>
					<p>Tom kuris supren al la observejo. Post kelkaj minutoj, la aliaj
					aŭdis lian signalon.</p>
					<p>Envenis la kavernon flegistino Marta, ŝia frato la alta
					blondulo, la malgrasulo, kiu rilatis kun Gerda, kiam ŝi estis
					mallibera, kaj du aliaj viroj.</p>
					<p>"Profesoro Ronga!" mire diris al si la tri gestudentoj, kaj tuj
					poste ili aldonis: "Kaj Profesoro Fergus!"</p>
					<p>La unua instruis lingvistikon, la dua anglan literaturon.</p>
					<p>Laŭ la malnova dokumento, la trezoro troviĝis en kofro metita
					en kavo aranĝita en la rokoj, kaj la ŝtonoj, kiuj ĝin kovris kaj
					kaŝis, kuŝis laŭ preciza desegno. Fakte, la ĝusta loko estis
					indikita per signoj tiel multaj, kvankam diskretaj, ke la pasado de l'
					jarcentoj ne povu forpreni ĉiujn. Pro tiuj precizaj indikoj, la ĝusta
					loko iĝis rapide trovita. La grupo forprenis la kaŝantajn ŝtonojn.
					Montriĝis, ke la kavo estis plenigita per korko kaj diversaj aliaj
					substancoj, kies celo verŝajne estis protekti la kofron kontraŭ
					malsekeco.</p>
					<p>La kofro, kiun ili eltiris, ne estis tre granda, nek speciale
					bela aŭ valora. Ĝi estis ŝlosita. Per siaj iloj, ili ĝin malfermis.</p>
				</div>
				<div class="col s12 m4">
					<img src="bildoj/gerda23-1.gif" class="responsive-img">
				</div>
			</div>


		<?php 
		} // fin section 1
		if ($section=="2") {
		?>

			<section class="klarigo">
				<p>Il n'y a pas de nouveau point de grammaire pour ce chapitre. 
				Vous devriez pouvoir tout comprendre sans trop de difficultés.</p>
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