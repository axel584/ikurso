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
			//include "lasusono.inc.php";
		?>

			<div class="row">
				<div class="col s12">
					<div class="card-panel blue lighten-5">
						En tiu ĉapitro, estas du malsamaj rakontoj de <i>Lasu min paroli plu !</i>.<br>
						<a href="#unua">Sekreta servo</a><br>
						<a href="#dua">Ameriko, jen mi venas!</a>
					</div>
				</div>
			</div>

			<a id="unua" class="scrollspy"></a>
			<h3>Sekreta servo</h3>
			
			<p>Kial diable mi entiriĝis<a href="#notoj">[1]</a> en tiun aferon ? Mi ne estis sufiĉe
			singarda. Oni neniam gardas sin sufiĉe kontraŭ tiuj danĝeraj
			decidoj. Fakte, mi eĉ ne rimarkis, ke mi ion decidas. Tiuepoke, mi
			estis simpla soldato. Ĉar miaj gepatroj multege vojaĝis kaj
			konstante translokiĝis de unu lando al alia, mi lernis diversajn
			lingvojn. Tute senkonscie, fakte. Knabeto lernas rapide, eĉ se nur
			ludante kun aliaj infanoj, kiam li vivas portempe<a href="#notoj">[2]</a> en lando, kies
			lingvon li neniam lernis antaŭe. Li eĉ ne bezonas iradi al la
			lernejo por kutimiĝi al tute nova maniero esprimi sin. Se li
			allernejas, estas pli bone, sed lerneja instruado ne vere necesas por
			lerni lingvon. Se oni estas ankoraŭ tre juna kaj vivas en la koncerna
			lando. Konstante oni devas uzi la lingvon, ree kaj ree aperas novaj
			okazoj ĝin uzi, en novaj kondiĉoj, tiel ke ĉiuj vortoj kaj ĉio
			alia enkapiĝas eĉ sen plej eta fortostreĉo.</p>
			
			<p>Tial mi vere bone scipovis kelkajn lingvojn. Ankaŭ lingvojn ne tre
			konatajn nialande. Kaj kiam miaj diablaj ĉefoj tion eksciis — oni
			neniam estas tro diskreta; se mi estus imaginta la sekvojn, mi estus
			silentinta pri miaj lingvoscioj — jes, kiam miaj ĉefoj tion eksciis,
			ili proponis al mi oficejan laboron: traduki dokumentojn, aŭ almenaŭ
			tiujn legi, kaj mallonge klarigi al ili, pri kio temas en tiuj
			paperoj.</p>
			
			<p>Nu, mi ne speciale ŝatis la soldatan vivon, «la dolĉan vivon», kiel
			ni tiutempe kromnomis<a href="#notoj">[3]</a> ĝin. Porti pezan sakon marŝante tuttage sur
			sunvarmega vojo, aŭ kuŝi sur akveca tero ludante militon, ne estas
			por mi la plej tipa tipo de vivo feliĉa. Kaj mi aŭdis, ke la
			bonŝanculoj, kiuj militservas oficeje, ricevas multe pli bonajn
			manĝojn ol tiuj, kiuj fortigas sian korpon kaj lernas la arton ne
			pensi en ĉiutagaj kampaj soldatludoj.</p>
			
			<p>Mi ŝatas bone manĝi. Tio estas unu el miaj multaj malfortaĵoj.
			Krome, miaj muskoloj pli rapide laciĝas ol mia kapo, kaj mi estis
			tiel lacega fine de tiuj liber-aeraj soldattagoj, ke mi sentis,
			kvazaŭ mi apenaŭ vivus plu. Eĉ signi per okulo estis tro lacige por
			mi en tiuj vesperoj.</p>
			
			<p>Mi rakontas ĉion ĉi por klarigi al vi, kial mi tiel facile
			entiriĝis en la Centron kun granda C. Mi kompreneble petas vian
			protekton, ĉar... Ne. Pri tio pli poste. Min altiris tien la scio, ke
			mi ne plu lacigos mian korpon ĝismorte rolante kiel serpento aŭ
			hundo, aŭ kiel pezeg-portanto, en lokoj maldolĉaj. Miaj kruroj kaj
			piedoj ne estas speciale belaj — ili eĉ estas vere malbelaj, se
			paroli sincere — sed mi ŝatas ilin, ĉar ili ĉiam servis min amike,
			kaj la «dolĉa vivo» de simpla soldato pli kaj pli eluzis<a href="#notoj">[4]</a> ilin,
			tiel ke mi sentis min iĝanta iom pli malalta ĉiutage.</p>
			
			<p>Cetere, mia tuta korpo eluziĝis. Mi jam ne havis multe da graso
			antaŭ ol komenci, sed tiu malmulto perdiĝis en la unuaj semajnoj.
			Oni provis kredigi al mi, ke per tia konstanta funkciado je sia plej
			alta povo mia korpo fariĝos ĉiurilate fortega, sanega kaj multopova
			— «Vi estas Davidoj, mi faros Goljatoj el vi», diris unu el niaj
			suferigistoj, forgesante, kun la tipa senkapa funkciado de la
			militistaro, ke el tiuj du karuloj, Goljato montriĝis la perdinto —
			sed mi havis fortajn dubojn pri miaj ŝancoj sukcesi. Laŭ ilia
			agmaniero, eĉ se ilia celo sincere estis nin fortigi, ŝajnis al mi,
			ke la ŝancoj perdi la vivon kaj la malmultan saĝon, kiun ni junuloj
			havis, estis multe pli grandaj ol la ŝancoj realigi ilian celon: fari
			supervirojn el ni.</p>
			
			<p>Kompare kun tiu Goljatigo, sidi en komforta oficejo tradukante paperon
			post papero ŝajnis al mi celo plej dezirinda. Kiam oni faris al mi
			tiucelan proponon, mi ne forĵetis ĝin. Kiel mi ĵus diris, mi ne
			estas superhomo, kaj en similaj kondiĉoj por nee respondi necesus
			superhoman forton.</p>
			
			<p>Mi neniam estis speciale sindonema. Mi ĉiam celis pli protekti mian
			sanon kaj kontentigi mian emon bone vivi ol doni min al la Patrolando.
			Tute ne estis certe, cetere, ke mi estos malpli patrolandama en
			oficejo ol en la kampoj kaj montoj.</p>
			
			<p>Mi do alvenis en la Centron. Mi tute ne sciis, pri kio temas. Oni igis
			min promesi, ke mi plene gardos la sekretojn pri ĉio, kion mi vidos,
			aŭdos, tuŝos aŭ iamaniere sentos tie, kaj ĉar tiuj realistoj ne
			kredas je simpla promesado, tuj kiam mi promesis, ili klarigis al mi,
			kiel rapide mi malaperus<a href="#notoj">[5]</a> el ĉi tiu vivo — tiel diskrete, ke eĉ
			la polico ne starigos al si demandojn — se ŝance mi ion dirus pri la
			Centro kaj tio, kion ĝi faras.</p>
			
			<p>Traduki per si mem ne estas tia agado, kia portas vin al plejsupro de
			feliĉo, sed almenaŭ la dokumentoj estis interesaj. Mi ĉiam multe
			interesiĝis pri ĉio, kio okazas sur la Tero, kaj tiuj raportoj aŭ
			aliaj skribaĵoj min interesis. Ni tradukis plej strangajn paperojn,
			fojfoje eĉ leterojn senditajn de soldatfamilio el «malamika» lando al
			militservanto, do plenaj je informoj pri la vivo en la devenloko, kaj
			kaptitaj la-diablo-scias-kiel.</p>
			
			<p>Sed poste... Ne. Mi ne povas rakonti. Mi bezonas protekton, pli bonan
			protekton kontraŭ ili. Ili estas tiel danĝeraj. Aŭ ĉu tion mi
			imagas ? Ne. Ili estas grandpovaj. Ili estas kvazaŭ ŝtato en la
			ŝtato. La malnova timo plu kuŝas malsupre en mia koro. Kaj tamen mi
			devus rakonti. Se ne por via plezuro, almenaŭ por la sano de mia kapo
			kaj de mia korpo, laca plu porti ĉion ĉi neniam parolante pri ĝi.
			Ĉu gardi sekretojn tutvive estas eble al ne-superhomo ? Ĉiam gardi
			multe da gravegaj sekretoj estas konstanta streĉo, kaj tiu streĉo
			estas malpli kaj malpli elportebla. Eĉ kiam la sekretoj estas
			ridindaj.</p>
			
			<p>Kaj mult-aspekte, la vivo en la Centro estis ridiga. Aŭ ridinda. Tiuj
			homoj prenis sin tiel serioze ! La ideo partopreni en kaŝa, subtera,
			subsupraĵa milito tutmonda naskis en ili senton pri graveco, kiu
			fojfoje perdigis al ili la kapon.</p>
			
			<p>Krome, ni tie vivis en konstanta streĉiĝo. Kaj ridi montriĝis bona
			rimedo por gardi nin kontraŭ la danĝeraj sekvoj de tiu ĉiam streĉa
			atmosfero.</p>
			
			<p>Foje... Se vi scius... Vi ridegos, kiam vi ekscios. Foje, unu el tiuj
			spion-ĉefoj — li nomiĝis Alb...</p>
			
			<p>Ho ! Kio okazas al mi ? Tra la fenestro, iu ekĵetis... mi svenas, mi
			svenas... Kapo turniĝas. Rigardu: en la koron ĝi eniĝis, ĝi
			teniĝas tute firme... tiu afereto... Mortiga substanco... Kial vi
			malfermis la fenestron ? Kial vi igis min stari apud ĝi ? Ĉu vi... ?
			Haaaaa !</p>
		
			<a id="notoj"></a>
			<p class="rimarko"><strong>NOTOJ</strong> : 
			<ol>
				<li>En-tir-iĝ-i.<br>
				<li><span class="eo">Portempe</span> : por iu tempo, dum iu tempo, dum iu daŭro.</li>
				<li><span class="eo">Krom-nomi</span> : doni kroman, anstataŭan nomon.</li>
				<li><span class="eo">Eluzi</span> : malbonigi aŭ malgrandigi per longa uzado.</li>
				<li>En la originalo : malaperos (preseraro). Ne temas pri futuro en
				pasinteco, sed pri vera kondicionalo (vidu la postan "se mi dirus").</li>
			</ol>
			
			<a id="dua" class="scrollspy"></a>
			<h3>Ameriko, jen mi venas!</h3>
		
			<p>- Kiam vi forveturos?</p>
		
			<p>- Venontan<a href="#notoj">[1]</a> semajnon.</p>
			
			<p>- Aviadile, ĉu ne?</p>
			
			<p>- Jes, aviadile. Neniu plu vojaĝas al Usono<a href="#notoj">[2]</a> ŝipe en nia epoko.
			Flugi estas tiel pli rapide!</p>
			
			<p>- Ĉu vi devas prepari ankoraŭ multon?</p>
			
			<p>- Ne, ĉio jam estas preparita. Mi havas ĉiujn dokumentojn. Mi devas
			ankoraŭ solvi la demandon pri mono, tio restas mia sola problemo nun.</p>
			
			<p>- Kial estas problemo?</p>
			
			<p>- Mi agis stulte. Mi ne okupiĝis pri tiu afero sufiĉe frue kaj nun
			la dolaro<a href="#notoj">[3]</a> altiĝas de tago al tago.</p>
			
			<p>- Vi do devus rapidi aĉeti viajn dolarojn.</p>
			
			<p>- Jes, sed mi aŭdis, ke nun la dolaro estas tro forta, kaj ke la
			usonaj aŭtoritatoj volas ĝin malaltigi.</p>
			
			<p>- Kial? Ili estis malkontentaj, kiam la dolaro estis malforta,
			kvazaŭ tio volus diri, ke la valoro de la tuta lando, de la tuta
			popolo, malaltiĝis. Ĉu vere nun ili estas malĝojaj pri tio, ke la
			dolaro fariĝis plivalora?</p>
			
			<p>- Jes, ĉar ili ne povas vendi tiel facile siajn produktojn<a HREF="#notoj">[4]</a>
			eksterlande.</p>
			
			<p>- Prave. La valoro de la produktoj, kiuj venas de Usono, nun iĝis pli
			alta por homoj, kiuj ne perlaboras dolarojn.</p>
			
			<p>- Ĝuste. Ĉio usona nun fariĝis pli multekosta por eksterlandanoj,
			kaj pro tio Usono vendas malpli, kaj sekve suferas. Estis jam sufiĉe
			grava senlaboreco tie. Nun, se ili vendos malpli al aliaj landoj, eble
			la senlaboruloj iĝos eĉ pli multaj, kaj tion ili timas.</p>
			
			<p>- Sincere, mi dubas pri tio. Vendi eksterlande ne tiom gravas al tiel
			granda lando. La landanaro jam aĉetas preskaŭ ĉion, kion oni
			produktas tie. La eksteraj vendoj prezentas per si nur malgrandan
			parton de la tuto.</p>
			
			<p>- Ĉu tiel estas? Se jes, mi devus ne konsideri tiun eblan malaltiĝon
			de la dolaro.</p>
			
			<p>- Mi ne volas interveni en vian decidon. Estas iu risko en ambaŭ
			eblecoj. Ĉu vi jam estis en Usono antaŭe?</p>
			
			<p>- Ne. Ĉu vi?</p>
			
			<p>- Jes, mi estis tie. Fakte, mi laboris tie, kiam mi estis juna, kaj mi
			tien reveturis antaŭ du jaroj. Ĉiuj tie plendis pri la situacio, kaj
			mi facile kredas, ke por malriĉulo, ekzemple por homo senlabora, la
			vivo devas esti tre zorgiga tie. Sed tamen, dum mi travojaĝis la
			landon, mia konstanta sento estis, ke tio estas unu el la plej riĉaj
			landoj en la mondo.</p>
			
			<p>- Ĉu vere?</p>
			
			<p>- Jes. Ekzemple, vi ne povus imagi, kiom oni donas al vi por manĝi en
			restoracioj. Tiom pli ol en Eŭropo, por simila kosto.</p>
			
			<p>- Sed ĉu la manĝaĵoj estas same plaĉaj, kiel ĉe ni?</p>
			
			<p>- Ne. Estas pli bone ĉe ni tiurilate. Ĉefe, en nia lando, la manĝoj
			estas pli malsamaj. Vi povas facile ricevi ĉiutage ion malsaman en
			restoracioj. Sed eble mi ne rajtas tiel paroli pri Usono. Mia kono de
			tiu grandega lando estas tiel supraĵa!</p>
			
			<p>- Tamen, tio, kion vi diras, estas tre interesa. Mi antaŭĝojas
			viziti tiun landon, pri kiu oni aŭdas tiom da malsamaj opinioj.</p>
			
			<p>- Nu, mi esperas, ke vi solvos vian dolarproblemon kontentige. Ĝis
			revido, kaj bonan vojaĝon!</p>
		
			<a id="notoj"></a>
			<p class="rimarko"><strong>NOTOJ</strong> : 
			<ol>
				<li><span class="eo">Venonta</span> : kiu venos, kiu sekvos, kiu okazos post la nuna tempo
				(venanta = kiu venas; veninta = kiu venis).</li>
				<li><span class="eo">Usono</span> : la lando inter Kanado kaj Meksikio (kun Alasko kaj Havajo);
				la nomo devenas de <i><b>U</b>nited <b>S</b>tates of <b>N</b>orth America.</i></li>
				<li><span class="eo">Dolaro</span> : mon-unuo en Usono, Aŭstralio, Kanado kaj kelkaj aliaj landoj.</li>
				<li><span class="eo">Produkti</span> : fari aŭ estigi aĵojn (produktojn), ĉefe kun la celo
				ilin vendi aŭ havigi al iu, kiu ilin uzos.</li>
			</ol>

		<?php 
		} // fin section 5
		if ($section=="6") {
			recapitulatif_lecon_avant_envoi('GR',$leciono,$persono_id);
		} // fin section 6
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
		<?php
		pubFacebook();
		?>
	</aside>
</div>

<?php include "gerdapiedo.inc.php"; ?>