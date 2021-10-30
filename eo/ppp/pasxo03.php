<?php 
$titolo="Paŝo 3 (tri)";
$leciono = 3;
$section=isset($_GET["section"])?htmlspecialchars($_GET["section"]):"1";
include "pppkapo.inc.php";
?>
<div class="row">
	<article class="col s12 m10 l7 offset-m1 offset-l1">
		
		<section id="leciono-enhavo">
		<?php 
		getTitoloLecionero('PP',$leciono,$section);
		?>
		<?php
		if ($section=="2") {
		?>
			<div class="vortlisto row">
				<div class="col s12 m6">
					<p><span class="eo">amaso</span>: multnombra aro.</p>
					<p><span class="eo">aparato</span>: ilaro por plenumi ion.</p>
					<p><span class="eo">aparteni</span>: esti ies posedaĵo.</p>
					<p><span class="eo">averti</span>: antaŭsciigi kaj atentigi.</p>
					<p><span class="eo">barakti</span>: forte movi sin por liberiĝi de io.</p>
					<p><span class="eo">bastono</span>: longa, maldika peco de ligno.</p>
					<p><span class="eo">blovi</span>: ekmovi la aeron.</p>
					<p><span class="eo">boli</span>: varmiĝi je 100 gradoj; forte malkvietiĝi.</p>
					<p><span class="eo">bordo</span>: apudakva tero.</p>
					<p><span class="eo">bori</span>: fari truon en io.</p>
					<p><span class="eo">deklivo</span>: klinita supraĵo.</p>
					<p><span class="eo">direkto</span>: la ĝusta vojo de unu loko al alia.</p>
					<p><span class="eo">distanco</span>: longeco inter du lokoj.</p>
					<p><span class="eo">drivi</span>: sekvi la iron de la akvo.</p>
					<p><span class="eo">elemento</span>: unu el la fundamentaj eroj de tutaĵo.</p>
					<p><span class="eo">fenestro</span>: truo, kiun oni povas trarigardi, en muro de konstruaĵo.</p>
					<p><span class="eo">fiksi</span>: senmovigi ion.</p>
					<p><span class="eo">ferdeko</span>: supra promenejo de ŝipo.</p>
					<p><span class="eo">fiŝo</span>: estaĵo, kiu vivas en akvo.</p>
					<p><span class="eo">frakasi</span>: disrompi, dispecetigi.</p>
					<p><span class="eo">furioza</span>: freneze kolera.</p>
					<p><span class="eo">gaja</span>: rideme feliĉa.</p>
					<p><span class="eo">genuo</span>: mezo de kruro.</p>
					<p><span class="eo">gesto</span>: mansigno.</p>
					<p><span class="eo">giganto</span>: grandegulo.</p>
					<p><span class="eo">grupo</span>: aro.</p>
					<p><span class="eo">haveno</span>: apudborda ejo por ŝipoj.</p>
					<p><span class="eo">intermita</span>: interrompiĝanta.</p>
					<p><span class="eo">juĝi</span>: konsideri por decidi pri.</p>
					<p><span class="eo">ĵeti</span>: rapide formovi de si ion tra la aero en alian lokon.</p>
					<p><span class="eo">kadavro</span>: korpo de mortinto.</p>
					<p><span class="eo">katastrofo</span>: subita malfeliĉega okazaĵo.</p>
					<p><span class="eo">klifo</span>: marborda altaĵo.</p>
					<p><span class="eo">kompati</span>: senti kortuŝon pri ies malfeliĉo.</p>
					<p><span class="eo">konscii</span>: scii tre klare.</p>
					<p><span class="eo">kuzo</span>: filo de onklo aŭ onklino.</p>
					<p><span class="eo">larmo</span>: akvero el la okuloj.</p>
					<p><span class="eo">ligno</span>: materialo de arboj.</p>
					<p><span class="eo">lukti</span>: korpe batali kontraŭ iu aŭ io.</p>
					<p><span class="eo">magneto</span>: io, kio povas altiri.</p>
					<p><span class="eo">maniero</span>: tiel, kiel oni faras ion.</p>
					<p><span class="eo">maro</span>: la akvo, kiu plejparte kovras la teron.</p>
					<p><span class="eo">marŝi</span>: iri piede.</p>
					<p><span class="eo">mesaĝo</span>: parola aŭ skriba informo, sendita de unu persono al alia.</p>
				</div>
				<div class="col s12 m6">
					<p><span class="eo">mevo</span>: marbirdo.</p>
					<p><span class="eo">miksi</span>: meti kune diversaĵojn.</p>
					<p><span class="eo">monstro</span>: nenormalega estaĵo.</p>
					<p><span class="eo">muĝi</span>: aŭdigi fortan bruon.</p>
					<p><span class="eo">muro</span>: la flanko de domo, ĉambro, ks.</p>
					<p><span class="eo">nordo</span>: la direkto de afriko al eŭropo.</p>
					<p><span class="eo">okcidento</span>: la direkto al eŭropo de azio.</p>
					<p><span class="eo">ombro</span>: mallumaĵo.</p>
					<p><span class="eo">ondo</span>: akvo, kiu leviĝas kaj refalas supraĵe de la maro.</p>
					<p><span class="eo">oriento</span>: la direkto al azio de eŭropo.</p>
					<p><span class="eo">pafi</span>: ĵeti ĵetaĵon per ĵetilo.</p>
					<p><span class="eo">peli</span>: irigi rapide antaŭen.</p>
					<p><span class="eo">permesi</span>: konsenti, ke iu faru ion.</p>
					<p><span class="eo">pezi</span>: altiriĝi teren.</p>
					<p><span class="eo">pluvo</span>: akvo, kiu falas de la ĉielo.</p>
					<p><span class="eo">populara</span>: konata kaj amata de la popolo.</p>
					<p><span class="eo">promontoro</span>: alta terpeco antaŭeniĝanta en la maron.</p>
					<p><span class="eo">propra</span>: apartenanta nur al iu aŭ io.</p>
					<p><span class="eo">punkto</span>: malgranda ronda signo, per kiu oni finas propozicion.</p>
					<p><span class="eo">raketo</span>: fajraĵo, kiun oni pafas en la aeron.</p>
					<p><span class="eo">rekta</span>: nedeflankiĝante alcela.</p>
					<p><span class="eo">rezignacio</span>: cedemo.</p>
					<p><span class="eo">rifuĝi</span>: foriri en iun lokon por eviti danĝeron.</p>
					<p><span class="eo">roko</span>: ŝtonego.</p>
					<p><span class="eo">savi</span>: liberigi iun el danĝero.</p>
					<p><span class="eo">sceno</span>: loko en teatro, kie aktoroj ludas.</p>
					<p><span class="eo">sendi</span>: foririgi iun.</p>
					<p><span class="eo">serĉi</span>: klopodi por trovi.</p>
					<p><span class="eo">skota</span>: rilata al skotlando.</p>
					<p><span class="eo">sovaĝa</span>: krude fortega.</p>
					<p><span class="eo">ŝanco</span>: ebleco fari.</p>
					<p><span class="eo">ŝipo</span>: veturilo por veturi sur akvo.</p>
					<p><span class="eo">ŝiri</span>: rompi ion, forte tirante.</p>
					<p><span class="eo">ŝnuro</span>: longa, forta tirilo.</p>
					<p><span class="eo">ŝtormo</span>: fortega, pluva ventego.</p>
					<p><span class="eo">telepatio</span>: senpera interkompreniĝo sen parolo kaj gestoj.</p>
					<p><span class="eo">tipo</span>: ekzemplo de specialaĵo.</p>
					<p><span class="eo">tiri</span>: movi ion aŭ iun al si.</p>
					<p><span class="eo">tombo</span>: tertruo, en kiun oni metas kadavrojn.</p>
					<p><span class="eo">trafi</span>: atingi per io.</p>
					<p><span class="eo">vana</span>: senrezulta, senutila.</p>
					<p><span class="eo">vango</span>: vizaĝflanko.</p>
					<p><span class="eo">viktimo</span>: tiu, kiu estas oferita.</p>
				</div>
			</div>

		<?php 
		} // fin section 1
		if ($section=="1") {
		?>
		<div class="rakonto">

			<h3>LA ŜTORMO</h3>
			
			<p>Kiam mi eniris la ĉefstraton de la malgranda vilaĝo, ĝi estis tute senhoma, krom ke unu maljunulo per la helpo de marŝbastono malrapide iris en la direkto al la haveno kaj mi sciis, ke la vilaĝanoj troviĝos tie, kien li iras. Estas tre strange, kiamaniere la fiŝkaptistoj, kiuj vivas per la maro, ekkonscias per ia telepatio, kiam danĝero minacas ŝipon, propran aŭ fremdan.</p>
			
			<p>Mi estis vidinta la ŝipeton tra la fenestro de mia domo, kiu staras sur la klifsupro ne malproksime de la vilaĝo. Mi sidis kun la edzino ĉe la tetablo, kiam ŝi subite ekkriis: “Ĉu tio estas ŝipeto, kion mi vidas?”</p>
			<p>Kaj kvankam estis apenaŭ kredeble, ke ŝi estu prava, tamen ja estis ŝipeto, malgranda fiŝkaptada ŝipeto, de la tipo ĝenerale uzata de la fiŝkaptistoj en la vilaĝoj sur la orientskota marbordo. Oni povis vidi ĝin nur intermite, kiam dum momento ĝi leviĝis al la supro de giganta marondo, antaŭ ol denove malaperi de la vido.</p>
			
			<p>Mi estis elirinta el la domo por iri al la deklivo apud la haveno, ĉar mi sciis, ke ĉiuj vilaĝanoj estos tie — ne por helpi, ĉar helpo estus neebla en tia ventego kia ĉi tiu, kaj ne por trovi plezuron en la vidotaĵo, ĉar la vidaĵo estas korŝira, kiam homoj baraktas por savi la vivon kontraŭ furiozantaj elementoj, sed nur ĉar ili ne povus resti hejme, ĉar ili estus tirataj al la scenejo kvazaŭ de magneto.</p>
			
			<p>La ŝtormo estis komenciĝinta senaverte. La antaŭtagmezo estis griza tamen senventa, ĝuste tia tago, kian ofte vidas en la monato novembro tiuj, kiuj loĝas sur la bordo de la Norda Maro: sed antaŭ nur unu horo ekblovis la ventego kun la subiteco de neatendita vangofrapo, kaj la ondoj fariĝis pli kaj pli altaj kaj grandaj.</p>
			
			<p>Kiam mi preterpasis la maljunulon — tiel malfortan, ke li apenaŭ povis stari kontraŭ la forto de la vento — mi kriis al li: “Ĉu vi scias, kia ŝipeto estas tiu?”</p>
			
			<p>“Ne”, li respondis, “sed ne estas kredeble, ke ĝi estu unu el niaj ŝipetoj. Ĉiuj niaj estis ĉe la fiŝejo preter la insulo, kaj sendube ili ĉiuj rapidis al la insula haveno tuj kiam oni aŭdis la radian averton pri ventego antaŭ du horoj. Neniu el la ŝipestroj riskus reveni ĉi tien dum ventego.”</p>
			
			<p>Mi venis al la deklivo super la haveno. La muroj de la haveno mem kaj la deklivo super ĝi estis kovritaj de grupoj de la vilaĝanoj. Tiuj, kiuj staris sur la deklivo, fikse rigardis tiudirekten, kie de tempo al tempo videblis eta nigra punkto, apenaŭ videbla inter la montecaj ondoj kiuj ĉirkaŭis ĝin. Tiuj, kiuj staris ĉe la haveno, nur atendis, atendadis en silento. Tiaj okazaĵoj kompreneble ne estas nekonataj en la marbordaj vilaĝoj, sed en ĉi tiu silento troviĝis io, kian mi neniam antaŭe sentis.</p>
			
			<p>“Kio estas?” mi demandis al viro, kiu staris apude kaj kun kiu mi iomete konatiĝis. Li ĵetis al mi unu ekrigardon, kaj tuj poste liaj okuloj reserĉis la etan nigran punkton. La severeco de lia vizaĝo ne ŝanĝiĝis, kaj per sentrema voĉo li diris, “Tio estas mia filo: oni ĵus ricevis radian mesaĝon de la insulo, sciigantan, ke la ceteraj ŝipetoj, kiuj rifuĝis en la tiean havenon, estas en bona ordo, sed ke la <i>Ora Brilo</i>‡ foriris de la aliaj ŝipetoj por reveni hejmen, unu horon antaŭ ol venis la radia ventegaverto.”</p>
			
			<p>Tiam mi komprenis, kial mi sentis ion nekutiman en la silento de la homamaso. De kiam mi ekloĝis en la vilaĝo, neniam danĝero trafis iun el la ŝipetoj apartenantaj al ĝi, sed tio estis unu el “niaj ŝipetoj”, kaj ĝia estro estis populara junulo, kiu edziĝis antaŭ nur du semajnoj. Kune kun li en la ŝipeto, mi sciis, estis liaj du pli junaj fratoj kaj du kuzoj: ĝi estis, laŭ nia dirmaniero, “familia ŝipeto”.</p>
			
			<p>La ŝipeto ŝajnis alproksimiĝi al ni laŭ eksterordinara rapideco. Vere ne tiel estis: ĝi venis malrapide, sed pro la fakto, ke ĝi alproksimiĝas al ebla katastrofo, ĝi ŝajnis veturi rapidege. Kaj ja katastrofo estis ne nur ebla sed verŝajna. Nia haveno ĉiam estas malfacile enirebla kiam la maro estas malkvieta, kaj ĉar la ondoj tiam kuris tiel furioze, estus ago de frenezulo provi eniri.</p>
			
			<p>“Dio ne permesu, ke ili provu eniri ĉi tien”, subdiris maljunulo apudstaranta, “la sola ŝanco estas preterveturi — iri laŭ la ventego ĝis ĝi forvelkas. Se ili provos eniri, la ondoj certe ĵetos ilin sur la rokojn ĉe la okcidenta promontoro, kaj la ŝipeto estos disfrakasita.”</p>
			
			<p>Ni neniam scios kial, sed la ŝipeto daŭrigis sian vojon kaj venadis rekte al ni. Mi malsupreniris al la haveno. Ĉi tie kelkaj el la homoj pretigis raketan aparaton, por provi pafsendi ŝnuron al la ŝipeto se tiu venos sufiĉe proksimen. Estis ago tute senutila, kaj ĉiuj tion sciis. La ŝnuro tute ne povus bori vojon tra tia ventego, kaj eĉ se al ĝi prosperus fari tion, ĝi tuj rompiĝus kiam la pezo de la ŝipeto, pelata de tiaj grandaj ondoj, plenstreĉus ĝin. Sed la laboro pretigi la aparaton estis preferinda al la nura atendado.</p>
			
			<p>Ŝajnis, ke la ŝipeto pli kaj pli rapide alproksimiĝas, ĝis fine ni povis vidi la homojn sur la ferdeko. Ĉiuj staris tenante la direktilon, pretaj movi ĝin per la tuta forto tuj kiam la ŝipestro, kiu staris en la ferdekmezo juĝante la distancon, donos la ordonon gvidi la ŝipeton trans la ondojn al la havena enirejo. Estis vana espero; la ŝipeto rifuzis respondi al la direktilo; ĝi estis kvazaŭ en la senkompata mano de giganto, kiu rifuzis liberigi ĝin sed pelis ĝin nerevokeble preter la enirejon. Dum ĝi preterdrivis la atendantan homamason la juna ŝipestro levis la manon:  ŝajnis al mi, ke li ne faras salutgeston, sed nur senkonscian geston de rezignacio.</p>
			
			<p>Ĉirkaŭ mi viroj kaj virinoj falis surgenuen kun manoj suprenlevitaj. Larmoj sin miksis kun la pluveroj sur la vizaĝoj de la virinoj, sed la viroj ne ploris. Ili staris kun nekovritaj kapoj kaj palaj senesprimaj vizaĝoj, tamen profunde en iliaj koroj bolegis malamo al ĉi tiu monstro, kiu prenas antaŭ iliaj okuloj ankoraŭ kvin viktimojn en la eterna lukto inter ĝi kaj la homaro.</p>
			
			<p>Ni trovis iliajn kadavrojn en la sekvanta mateno, kiam forpasis la ŝtormo kaj la maro estis denove trankvila, kaj ni enterigis la kvin en unu tombon sub la ombro de la malnova preĝejo ĉe la supro de la havena deklivo, kiu alrigardas al la maro, sur kiu ili vivis kaj en kiu ili mortis. Kune ili dormas tie, kaj super ilia eterna restadejo aŭdiĝas la sovaĝa muĝado de la Norda Maro kaj la malgaja kriado de la mevoj.</p>
			
			<p><b>John S. Dinwoodie</b> (el <i>Esperanto en Skotlando</i>)</p>
		</div>


<?php 
		} // fin section 2
		if ($section=="3") {
		?>

			<?php 
				getEkzercon(118,$persono_id);
				getEkzercon(119,$persono_id);
				
			?>

		<?php 
		} // fin section 2
		if ($section=="4") {
		?>

			<?php 
				getEkzercon(120,$persono_id);
				getEkzercon(121,$persono_id);
				getEkzercon(122,$persono_id);
				getEkzercon(123,$persono_id);
				getEkzercon(124,$persono_id);
			?>                  
<?php 
		} // envoie de la leçon
		if ($section=="5") {
			recapitulatif_lecon_avant_envoi('PP',$leciono,$persono_id);
		} // fin section 6
		?>
		</section>
		
		<section id="leciono-fino">
			<div id="marko" class="right-align">
				<?php getBoutonFinSection('PP',$leciono,$section,$persono_id); ?>
				<a id="farita" class="btn-floating btn-large light-blue darken-1 hide"><i class="material-icons">done_all</i></a>
			</div>
			<div class="ligoj">
				<?php getLecioneroAntauxa('PP',$leciono,$section); ?>
				<?php getLecioneroVenonta('PP',$leciono,$section); ?>
			</div>
		</section>
		
	</article>
	
	<?php include "pppflanko.inc.php"; ?>

</div>

<?php include "ppppiedo.inc.php"; ?>			