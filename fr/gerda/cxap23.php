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

			<div class="vortlisto row">
				<div class="col s12 l6">
					<p><span class="eo">angla</span> : anglais</p>
					<p><span class="eo">desegni</span> : dessiner, tracer</p>
					<p class="sekva"><span class="eo">desegno</span> : dessin, tracé</p>
					<p><span class="eo">ilo</span> : instrument, outil, ustensile</p>
					<p><span class="eo">kavo</span> : cavité, trou</p>
					<p><span class="eo">kies</span> : à qui ? dont, de qui, duquel, de laquelle, desquel(le)s</p>
					<p><span class="eo">kofro</span> : coffre, malle</p>
				</div>
				<div class="col s12 l6">
					<p><span class="eo">kontraŭ</span> : contre</p>
					<p><span class="eo">korko</span> : liège, bouchon (bouteille)</p>
					<p><span class="eo">literaturo</span> : littérature</p>
					<p><span class="eo">protekti</span> : protéger</p>
					<p><span class="eo">signo</span> : signe</p>
					<p><span class="eo">telefono</span> : téléphone</p>
					<p><span class="eo">tiri</span> : tirer</p>
				</div>
			</div>

		<?php 
		} // fin section 3
		if ($section=="4") {
		?>

			<fieldset class="ekzerco">
				<legend><b>Demandoj</b> </legend>
				<input type="hidden" name="013_cxap23.0" value="Demandoj">
				<div class="tasko">
				<?php $demandoj=array (
					1 => "Kiel Bob sukcesis antaŭi la bandon?",
					2 => "Kiom da trezorserĉantoj envenis la kavernon?",
					3 => "Kio mirigas la tri studentojn?",
					4 => "Kie, laŭ la malnova dokumento, troviĝas la trezoro?"
				);
				ekzerco(True, 2);
				?>
				</div>
			</fieldset>

			<h3>Notoj</h3>
			
			<p>En ĉapitro 9 vi lernis pri la finaĵo <b>-it-</b>. (<span class="eo">La kapo de Bob estis <b>batita</b>.</span>)</p>
			<p>En ĉapitro 11 vi lernis pri la finaĵo <b>-ant-</b>. (<span class="eo">Linda pensas, sin <b>demandante</b>, ĉu…</span>)</p>
			<p>Poste, en ĉapitro 14, aperas la finaĵoj <span class="eo">-at-</span> 
			kaj <b>-int-</b>. (<span class="eo">Ĉambro <b>nekonata</b>. Kvazaŭ ŝi estus <b>laborinta</b>.</span>)</p>
			<p>La vortoj kun <b>-ant-</b> kaj <b>-at-</b> rilatas al la nuno, 
			al la estonteco (al tio, kio okazas aŭ estas nun).</p>
			<p>La vortoj kun <b>-int-</b> kaj <b>-it-</b> rilatas al la estinteco (al tio, kio okazis aŭ estis antaŭe).</p>
			<p>Ekzistas ankaŭ finaĵoj <b>-ont-</b> kaj <sb>-ot-</b> por la estonteco (tio, kio	okazos aŭ estos poste).</p>
			<p class="parto">Vortoj kun la finaĵoj <b>-ant-</b>, <b>-at-</b>, 
			<b>-int-</b>, <b>-it-</b>, <b>-ont-</b>, 
			<b>-ot-</b> estas nomataj <b>PARTICIPOJ</b>, kaj tiuj
			finaĵoj estas la <b>PARTICIPAJ FINAĴOJ</b>.</p>
			<p>La participoj kun <b>-nt-</b> estas la <b>SUBJEKTAJ PARTICIPOJ</b>; ili rilatas al
			la subjekto de la participigita verbo. Oni nomas ilin ankaŭ <b>AKTIVAJ PARTICIPOJ</b>.</p>
			<p>La participoj kun nur <b>-t-</b> estas la <b>OBJEKTAJ PARTICIPOJ</b>; ili rilatas
			al la objekto de la participigita verbo. Oni nomas ilin ankaŭ <b>PASIVAJ
			PARTICIPOJ</b>.</p>
			<div class="container">
				<table class="bordered">
					<tr>
						<td></td><td>SUBJEKTA</td><td>OBJEKTA</td>
					</tr>
					<tr>
						<td>ANTAŬE</td><td>-int-</td><td>-it</td>
					</tr>
					<tr>
						<td>NUN</td><td>-ant-</td><td>-at-</td>
					</tr>
					<tr>
						<td>POSTE</td><td>-ont-</td><td>-ot-</td>
					</tr>
				</table>
			</div>

			<p>Jen kelkaj ekzemploj:</p>
			<p class="tab"><span class="eo">La polico serĉas malaperintan virinon [virinon, kiu malaperis].</span></p>
			<p class="tab"><span class="eo">La virino estas enŝlosita en forlasita domo [domo, kiun oni forlasis].</span></p>
			<p class="tab"><span class="eo">Linda rigardas la kriegantajn soldatojn [soldatojn, kiuj kriegas].</span></p>
			<p class="tab"><span class="eo">Ŝi iomete timas pro la ĵetataj teleroj [teleroj, kiujn oni ĵetas].</span></p>
			<p class="tab"><span class="eo">Ĉu vi streĉe atendas la venontan ĉapitron [ĉapitron, kiu venos]?</span></p>
			<p class="tab"><span class="eo">Kion trovas la kaptotaj krimuloj [krimuloj, kiujn oni kaptos]?</span></p>

			<p class="parto">Se la ĉefa parolo estas nuna (supre estas <b>serĉas</b>, <b>estas</b>, <b>rigardas</b>,…), oni povas "traduki" la participojn jene:
			</p>
			<div class="row">
				<p class="col s6 l3">x-inta</p><p class="col s6 l3">→ kiu x-is</p>
				<p class="col s6 l3">x-ita</p><p class="col s6 l3">→ kiun oni x-is</p>
				<p class="col s6 l3">x-anta</p><p class="col s6 l3">→ kiu x-as</p>
				<p class="col s6 l3">x-ata</p><p class="col s6 l3">→ kiun oni x-as</p>
				<p class="col s6 l3">x-onta</p><p class="col s6 l3">→ kiu x-os</p>
				<p class="col s6 l3">x-ota</p><p class="col s6 l3">→ kiun oni x-os</p>
			</div>
			<p class="parto">Tamen, se la ĉefa parolo ne estas nuna, oni normale ne povas tiel
			simple "traduki". Ekzemple:</p>
			<p class="tab"><span class="eo">Hieraŭ matene Bob pensis pri la farota laboro.</span></p>
			<p class="tab">Sed eble li faris la laboron hieraŭ vespere. Se hodiaŭ oni dirus,
			ke hieraŭ matene Bob pensis pri la laboro, kiun oni faros, tio
			signifus, ke eĉ hodiaŭ la laboro ankoraŭ ne estas farita. Pli ĝusta
			"traduko" estas do: Hieraŭ matene Bob pensis pri la laboro, kiu estis
			objekto de posta faro.</p>
			<p class="tab"><span class="eo">Morgaŭ vespere Bob rigardos la faritan laboron.</span>
			<p class="tab">Sed eble li faros la laboron morgaŭ vespere. Se hodiaŭ oni dirus,
			ke morgaŭ vespere Bob rigardos la laboron, kiun oni faris, tio
			signifus, ke jam hodiaŭ la laboro estas farita. Pli ĝusta "traduko"
			estas do: Morgaŭ vespere Bob rigardos la laboron, kiu estos objekto de
			antaŭa faro.</p>

			<p>Ĉu tiu klarigo estas komprenebla? Se ne, tio ne tro gravas, ĉar la
			realo estas multe pli simpla ol mia klarigo. Kompreneble oni normale ne
			tradukas participojn; oni komprenas ilin sentraduke. <span class="eo">Manĝonta</span>
			signifas kvazaŭ <span class="eo">malsata</span>; <span class="eo">manĝanta</span> 
			signifas kvazaŭ <span class="eo">ĉe-tabla</span>;
			<span class="eo">manĝinta</span> signifas kvazaŭ <span class="eo">sata</span>.</p>
	
			<p>Provu la sekvantan ekzercon, en kiu oni devas reskribi uzante participon!</p>

			<fieldset class="ekzerco">
				<legend>Transformu la frazojn uzante participon.</legend>
				<input type="hidden" name="013_cxap23.1" value="Transformu la frazojn uzante participon.">
				<div class="ekzemplo">
					<p><em>Ekzemple:</em></p>
					<p>Mi serĉas monujon, kiun mi perdis. → Mi serĉas perditan monujon.</p>
				</div>

				<div class="tasko">
				<?php $demandoj=array(
					5 => "La strangulo parolas al si mem, ne atentante la studentojn, kiuj lin rigardas.",
					6 => "La studento redonas la librojn, kiujn li jam legis.",
					7 => "Kato, kiu manĝis, normale volas dormi.",
					8 => "La policanoj ne rekonos la krimulon, kiun ili serĉas.",
					9 => "Li zorge purigis la aŭton, kiun li volis vendi.",
					10 => "En la universitato Marta estas virino, kiun ĉiu konas.",
					11 => "Ŝi provis legi la numeron de la aŭto, dum ĝi veturas.",
					12 => "Tiam ŝi ankoraŭ havis la monujon, kiun ŝi poste perdis.",
					13 => "Li pensis pri la suferoj, kiujn li jam travivis.",
					14 => "Mi plendos pri la seĝoj, kiuj malaperis.",
					15 => "Mi devis atendi la buson, kiu venis poste.",
					16 => "Ŝi longe adiaŭis la amikon, kiu devis foriri."
					);
					ekzerco(True,1);
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