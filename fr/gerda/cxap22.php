<?php 
$titolo="22 (dudek du)";
$leciono = 22;
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

			<h3>En la kaverno</h3>
			<div class="row dialogo">
				<div class="col s12 m8">
					<p>Baldaŭ venis la policanoj, por ilin liberigi. Gerda reiris
					hejmen, al siaj filino kaj edzo. Sed Bob rapidis al la flughaveno. Li
					volis ĉeesti kun Linda kaj Tom, kiam la policano arestos la kaptintojn
					de Gerda.</p>
					<p>Estis sufiĉe multekosta vojaĝo, sed la familio de Gerda –
					riĉa familio – pagis por ili la bileton, tiel esprimante sian
					dankemon.</p>
					<p>Ĉar la policano kaj la gejunuloj sciis pli frue ol la
					ŝtelistoj, kie troviĝas la trezoro, ili havis multe da tempo por
					prepari sin. Ili ne dubis, ke la aliaj venos kiel eble plej baldaŭ,
					kaj ke la tuta bando venos. Kutime tiaj homoj ne fidas sin reciproke,
					kaj volas kune ĉeesti por certiĝi, ke neniu kaŝos por si parton de
					la trovaĵo.</p>
					<p>La loko indikita troviĝis ĉe la piedo de monto, en kaverno,
					kie, videble, neniu paŝis jam de jaroj.</p>
					<p>"Feliĉe, ke ili ne kaŝis tiun trezoron trans la maro,
					ekzemple sur insulo, kien nur per ŝipo oni povas iri. Se estis vere
					internacia societo, kiel Gerda diris, tio estis ebla, ĉu ne?" Tiel
					parolis Linda.</p>
					<p>"Vi pravas," diris Tom. "Mi tute ne ŝatus vojaĝi ŝipe. La
					maro ĉiam igas min malsana. Mi ŝatas rigardi la maron, resti ĉe la
					maro, libertempi apud la maro, sed ne vojaĝi per ŝipo sur ĝi: ŝipoj
					konstante dancas sur la maro, kaj ilia danco tute ne plaĉas al mi.
					Feliĉe, ke hodiaŭ oni povas iri preskaŭ ien ajn aviadile.  Aviadiloj
					preskaŭ tute ne dancas. Sed eĉ aviadiloj nur duone plaĉas al mi.
					Plej multe mi preferas, kiam mi veturas sur tero, sur bona firma tero.
					Mi bezonas sub mi ion pli firman ol akvo kaj aero. Plej plaĉe estas
					promeni piede sur bona tera vojo. Mi…"</p>
					<p>Sed Linda interrompis lian paroladon, iom strangan en tiuj
					kondiĉoj, en kiuj ili troviĝis:</p>
					<p>"Kiam alvenos la trezor-serĉantoj, laŭ via opinio?" ŝi
					demandis la policanon.</p>
					<p>"Morgaŭ, tute certe. Ili ne povus alveni hodiaŭ, ĉar ne plu
					estis aviadilo post la nia, kaj aŭte ili bezonus la tutan nokton.
					Verŝajne Bob flugos en la sama aviadilo."</p>
					<p>La temperaturo estis plaĉa, kaj bela la vetero. Ili starigis
					sian tendon en la proksimeco, tamen bone prizorgante, ke ĝi ne estu
					videbla por alvenantoj. La sola maniero, laŭ kiu la trezorserĉantoj
					povus alveni antaŭ la morgaŭa tago, estus, ke ili flugu per malgranda
					aviadilo, speciale luita. Sed lui specialan aviadilon kostas tiel
					multe, ke plej verŝajne ili ne uzos tiun rimedon.</p>
					<p>La sekvantan matenon, niaj amikoj vekiĝis frue. Tuj la
					policano kaj la gestudentoj aranĝis, ke ĉiu el ili, unu post la alia,
					gardostaros en loko, de kie eblas facile observi la solan vojon — aŭ
					pli ĝuste vojaĉon – laŭ kiu oni povas proksimiĝi al la kaverno,
					kaj ke ĉiu havos en la kaverno sian difinitan kaŝejon.</p>
					<p>Post tri horoj da atendado, io fine okazis. Linda, kiu
					gardostaris en la iom alta observejo, faris la deciditan signalon, kaj
					rapide kuris de supre al siaj kunuloj.</p>
					<p>"Aŭto alvenas!" ŝi kriis.</p>
					<p>En tiu ege soleca regiono, kiu povus veni aŭte per tiu tera
					vojaĉo, se ne la trezorserĉantoj? La tri atendantoj sin kaŝis, ĉiu
					en sia difinita loko, malantaŭ rokoj, da kiuj oportune troviĝis multe
					en la kaverno.</p>
				</div>
				<div class="col s12 m4">
					<img src="bildoj/gerda22-1.gif" class="responsive-img">
				</div>
			</div>


		<?php 
		} // fin section 1
		if ($section=="2") {
		?>

			<section class="klarigo">
				<h4>-eca : <i>relatif à, qui a l'apparence, certaines des caractéristiques</i></h4>
				<p><span class="eo">infano</span> : enfant → <span class="eo">infaneca</span> : infantile</p>
				<p><span class="eo">sola</span> : seul → <span class="eo">soleca</span> : solitaire</p>
				<p><span class="eo">ruĝa</span> : rouge → <span class="eo">ruĝeca</span> : rougeaud, rougeâtre</p>
			</section>

		<?php 
		} // fin section 2
		if ($section=="3") {
		?>

			<div class="vortlisto row">
				<div class="col s12 l6">
					<p><span class="eo">aviadi</span> : voler (en avion)</p>
					<p class="sekva"><span class="eo">aviadilo</span> : avion</p>
					<p><span class="eo">danci</span> : danser</p>
					<p><span class="eo">familio</span> : famille</p>
					<p><span class="eo">gardostari</span> : monter la garde</p>
					<p><span class="eo">hodiaŭ</span> : aujourd'hui</p>
					<p><span class="eo">kosti</span> : coûter</p>
					<p><span class="eo">maro</span> : mer</p>
					<p><span class="eo">morgaŭ</span> : demain</p>
					<p><span class="eo">multekosta</span> : cher, chère</p>
					<p><span class="eo">pagi</span> : payer</p>
					<p><span class="eo">parto</span> : partie</p>
				</div>
				<div class="col s12 l6">
					<p><span class="eo">prepari</span> : préparer</p>
					<p><span class="eo">rimedo</span> : moyen, ressource, remède</p>
					<p><span class="eo">supre</span> : en-haut</p>
					<p class="sekva">→ <span class="eo">malsupre</span> : en-bas</p>
					<p class="sekva">→ <span class="eo">supren</span> : vers le haut (direction)</p>
					<p class="sekva">→ <span class="eo">malsupren</span> : vers le bas (direction)</p>
					<p><span class="eo">ŝipo</span> : bateau</p>
					<p><span class="eo">temperaturo</span> : température</p>
					<p><span class="eo">tendo</span> : tente</p>
					<p><span class="eo">tero</span> : terre, sol</p>
					<p><span class="eo">vetero</span> : temps (météo)</p>
					<p><span class="eo">vojaĝi</span> : voyager</p>
				</div>
			</div>

		<?php 
		} // fin section 3
		if ($section=="4") {
		?>

			<fieldset class="ekzerco">
				<legend><b>Demandoj</b> </legend>
				<input type="hidden" name="013_cxap22.0" value="Demandoj">
				<div class="tasko">
				<?php $demandoj=array (
					1 => "Kie troviĝas la loko indikita?",
					2 => "Kial Tom tute ne ŝatus vojaĝi ŝipe?",
					3 => "Kiel oni povas iri preskaŭ ĉien ajn?",
					4 => "Kiom da homoj atendas la trezorserĉantojn?",
					5 => "Kion rimarkas Linda observante la vojon?",
				);
				ekzerco(True, 2);
				?>
				</div>
			</fieldset>
					
			<fieldset class="ekzerco">
				<legend>Trovu la vortojn.</legend>
				<input type="hidden" name="013_cxap22.1" value="Trovu la vortojn.">
				<div class="ekzemplo">
					<p><em>Ekzemple:</em></p>
					<p>ekpreni kaj firme teni → ekpreni kaj firme teni : <b>kapti</b></p>
				</div>		
				<p class="primaire-texte texte-moyen">La vortoj estas:</p>
				<p class="primaire-texte texte-moyen">aparato, aperi, bezoni, dokumento, edzo, elporti, filo, frato, gardi, hejmo, historio, horloĝo, ĵeti, kapti, konduki, kontroli, lasta, legi, letero, mono, motivo, obei, obstina, pasi, plaĉi, preni, preskaŭ, problemo, promesi, riĉa, sata, serĉi, skribi, solvi, suferi, ŝanĝi, ŝteli, teruro, tipo, uzi</p>
		
				<div class="tasko">
				<?php $demandoj=array(
					6 => "aliigi : [15].",
					7  => "aparato por montri la horojn : [15].",
					8  => "atenti, zorgi kontraŭ danĝero aŭ ebla malbono, teni : [15].",
					9 => "certigi, ke oni ion faros : [15].",
					10  => "detale esplori, ĉu io estas ĝusta aŭ ĝuste farita : [15].",
					11 => "domo aŭ loko, kie oni konstante vivas : [15].",
					12 => "ekpreni kaj firme teni : [15].",
					13 => "ekzemplo prezentanta iun specon : [15].",
					14 => "estanta post ĉiuj aliaj : [15].",
					15 => "firme restanta ĉe siaj opinio kaj volo : [15].",
					16 => "grava skribaĵo : [15].",
					17 => "irigi kun si : [15].",
					18 => "kapti por teni, porti aŭ uzi; havigi al si; akcepti, ricevi : [15].",
					19 => "kaŝe forpreni ion de alia homo : [15].",
					20 => "kontentigi, feliĉigi, ĝojigi : [15].",
					21 => "kun multe da havaĵo, da mono, da io ajn : [15].",
					22 => "kunaĵo de objektoj kaj iloj servanta por ion fari : [15].",
					23 => "ne bezonanta manĝaĵon : [15].",
					24 => "ne kontraŭstari, vivi kun io ĝisfine : [15].",
					25 => "ne tute, sed ne tute ne : [15].",
					26 => "pagilo konsistanta el pecoj kun difinitaj valoroj : [15].",
					27 => "preni kiel rimedon, agi per io por kontentigi bezonon : [15].",
					28 => "provadi por trovi : [15].",
					29 => "rapide forigi de si tra la aero : [15].",
					30 => "scienco pri pasintaj okazaĵoj; rakonto pri okazintaĵo : [15].",
					31 => "sekvi per okuloj kaj kompreni ion skribitan : [15].",
					32 => "sekvi tion, kion volas alia persono : [15].",
					33 => "senti doloron, travivi malfeliĉaĵon : [15].",
					34 => "sin vidigi, ekmontriĝi, iĝi videbla : [15].",
					35 => "skribaĵo sendita al alia homo : [15].",
					36 => "solvota demando, malfacilaĵo : [15].",
					37 => "suferi pro manko de iu necesa, necesigi ion : [15].",
					38 => "surpaperigi vortojn : [15].",
					39 => "timego : [15].",
					40 => "tio, kio igas iun agi aŭ opinii en iu maniero : [15].",
					41 => "trairi, preteriri; transirante malaperi, ne daŭri : [15].",
					42 => "trovi la respondon al demando, la rimedon kontraŭ malfacilaĵo : [15].",
					43 => "vira ido de samaj gepatroj : [15].",
					44 => "vira homido : [15].",
					45 => "viro ligita al virino por kunvivado kaj nasko de infanoj : [15]."
					);
					plenigEkzerco("U");
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
						<a href="#unua">Ek al fora insulo!</a><br>
						<a href="#dua">Skribas malliberulo</a>
					</div>
				</div>
			</div>

			<a id="unua" class="scrollspy"></a>
			<h3>Ek al fora insulo!</h3>
		
			<p>Mi saltas pro ĝojo, mi dancas pro ĝojo, mi eksplodas per rido pro
			ĝojo. Estas aranĝite: mi forvojaĝos. Hieraŭ jam mi ricevis
			antaŭan sciigon, ke verŝajne mia espero realiĝos. La ĉefoj bezonis
			iun, sed mi timis, ke ili preferos Petron. Petro estas pli ŝatata,
			ĝenerale, en la oficejo. Li estas pli laborema ol mi, tio estas
			fakto. Sed ili bezonis lin por alia tasko, pli malfacila ol ĉi tiu.</p>
			
			<p>Mia tasko estos sufiĉe simpla. Nur mi estu tre firma en la diskutoj,
			ili diris. Esti firma ne prezentas problemon al mi, feliĉe. Mia
			firmeco estas konata de la tuta oficistaro kaj de niaj aŭtoritatoj.
			Kiam mi decidis diri «ne», mi diras «ne», kiom ajn oni provas ŝanĝi
			mian pozicion. Mi firme tenas mian pozicion. Tial ili fidas min
			ĉi-okaze. Ili scias, ke mi agos laŭ iliaj interesoj. Oni fojfoje
			plendas pri mia obstineco. Nu, ĉi-foje ĝi servos al bona celo. Oni
			ne sukcesos min movi. Kaj tian homon ili deziris sendi, homon, kiun
			oni ne movos de la pozicio, kiun li promesis teni.</p>
			
			<p>Mi do forvojaĝos. Unue aviadile. Poste ŝipe. Mi antaŭĝojas ŝipi.
			Al aviadiloj mi ne havas specialan ŝaton. Mi ne malŝatas flugi
			aviadile; mi tre ŝatas vojaĝi, do kial mi plendus, se miaj ĉefoj
			sendas min malproksimen aviadile? Sed ŝipon mi antaŭĝojas. Mi
			neniam ŝipis sur vera granda maro. Oni diris al mi, ke tio estas tre
			malstreĉa. Kaj oni povas movi sin. Ĝuste tio min ĝenas en
			aviadiloj. Estas tre malmulte da ebleco por moviĝi. Kaj verdire mi
			estas tre moviĝema. Se mi ne povas movi miajn krurojn, iom promeni,
			iri de loko al loko, mi perdas la kapon. Mi, pri kiu oni tiel ofte
			diras, ke «mi havas la kapon sur la ĝusta loko»! Prave, se almenaŭ
			oni permesas al mi moviĝi.</p>
			
			<p>Do ne gravas, ke mi devos uzi aviadilon dum parto de la vojaĝo. Sed
			mi iras al insulo, kien oni ne povas flugi, tial ili pagas al mi, ne
			nur la aviadilan vojaĝon, sed ankaŭ la ŝipan. Blua maro senfina!
			La plaĉa dancado de la ŝipo! Afablaj kunuloj, kiuj ridetas la tutan
			tempon, ĉar ili sentas sin feliĉaj, ke ili vojaĝas de insulo al
			insulo. Ha, la sento de senfina libereco!</p>
			
			<p>Kaj la penso, ke tiuj aliaj vojaĝantoj certe pagis multe da mono por
			ŝipi en la insularon, dum mi iras por mia laboro, por eĉ ne
			malfacila laboro, nur ĉar bonŝance mi scias la bezonatan lingvon,
			kaj ĉar mi estas konata kiel firma persono, tiu penso — ke la aliaj
			pagas mem, kaj mi ne — estas plej plezuriga.</p>
			
			<p>Hodiaŭ mi ricevis la biletojn. Aviadila bileto estas tute banala. Mi
			jam havis kelkajn en mia vivo. Sed ŝipbileton mi neniam tenis en miaj
			manoj, kaj la tuŝo de ĝi naskas en mi plej plaĉan plezuron.
			
			<p>Kompreneble, la amikoj tuj rimarkis mian ĝojon, kaj ne hezitis ĝin
			alsalti. «Vi prikantas la bele bluan maron kaj la riĉajn
			kunŝipulojn», ili diris, «kaj kiam vi troviĝos surloke, la maro
			estos brune verdaĉa, aŭ nigraĉa, la moviĝo de la ŝipo igos vin
			malsana, kaj la riĉaj vojaĝantoj estos nur bando da aventuruloj, kiuj
			konstante ĝenos vin».</p>
			
			<p>Mi multe ridis aŭskultante ilin. Ili ne povis agi alimaniere. Ĉiu el
			ili ŝatus okupi mian lokon, kaj per siaj senkuraĝigaj vortoj ili
			esprimis tiun senton, ke tro bonŝanca estas mi. Sed ili ankaŭ ŝatas
			min, ili estas bonaj amikoj, kaj ili amike ridis pri mia troa imagado.
			«La realo estos alia», ili ripetis. Nu, bone, eĉ se ĝi estos alia,
			mi akceptos ĝin. Mi ne timas ŝipmalsanon aŭ verdaĉan multemovan
			maron. Mi eĉ ne timas aventuremajn kunvojaĝantojn.</p>
			
			<p>Mi deziris iri al tiu insulo, mi subkomprenigis al miaj ĉefoj, ke mi
			estas la ĝusta persono tiurilate, mi agis laŭcele, uzante la
			ĝustajn rimedojn, mi trovis solvon al ĉiuj problemoj — aŭ
			pseŭdoproblemoj — kaj respondon al ĉiu demando, mi agis laŭ mia
			obstina, firma maniero, kiel kutime, kaj mi sukcesis venigi ilin al la
			dezirata decido.</p>
			
			<p>Granda vojaĝo baldaŭ komenciĝos. Morgaŭ mi devos vizitadi la
			ĉefajn magazenojn de la urbo, ĉar multon ankoraŭ necesas aĉeti.
			Ĉiam mankas aferoj, kiam oni preparas grandan vojaĝon al malproksima
			loko.</p>
			
			<p>Ne estas facile decidi pri la vestoj. Kelkfoje la vetero estas
			malvarma tie, sed ĝenerale ĝi estas bela kaj plaĉa. Ĉu preni
			serioze la opiniojn, ke necesas antaŭvidi malvarman veteron kaj
			kunpreni vestojn laŭ tiu ebleco? Aŭ ĉu ili sennecese aldonos pezon
			al la jam sufiĉa pezo de la aferoj, kiujn mi kunportos?</p>
			
			<p>Oni diris, ke kelkaj kavernoj estas vizitindaj, ĉar la naturo en ili
			alprenis plej strangan aspekton, vere vidindan. Ne ekzistas io simila
			aliloke. Eble do estus saĝe kunpreni varmajn vestojn. Kavernoj ĉiam
			estas malsekaj kaj malvarmaj. Se krome la vetero ne montriĝos plej
			bela...</p>
			
			<p>Jes, la preparado de vojaĝo ne estas ĉiurilate facila, sed tamen ĝi
			estas interesa. Ĉar oni jam antaŭvojaĝas en-image.</p>
			
			<p>Multekostajn aferojn mi ne kunprenos. Oni devas konsideri la riskon de
			ŝtelo aŭ perdo. Mi ne ŝatas multekostajn aferojn. Kaj eble mi povos
			aĉeti tie, surloke. Mi devos informiĝi pri la vivkostoj tieaj. Eble
			varmaj vestoj ne kostas multe kaj facile aĉeteblas. Se jes, tio
			solvus la problemon.</p>
			
			<p>Estas ankaŭ montoj, kiujn oni vizitu. Supre de monto, ĝenerale, la
			temperaturo estas malalta. Sed ĉu mi iros supren? Ĉu valoros la
			laciĝon? Oni facile laciĝas marŝante supren en montaro. Eble oni
			povas veturi ĝis la supro de la plej belaj montoj. Sed eĉ veture,
			oni malvarmiĝas. Nu, mi vidos. Se estas tro multekoste por aĉeti
			varmajn vestojn, mi ne aĉetos ilin.</p>
			
			<p>La Oficejo pagas al mi la vojaĝon, ĝi pagas la restadon en tre bona
			hotelo, ĝi pagas kelkajn aliajn hotelajn tranoktadojn en tiu aŭ alia
			lando survoje, mi tamen ne povus atendi, ke ĝi krome pagos miajn
			vestojn! Se mi bezonos varmajn vestojn por iri al la montosuproj, kaj
			trovos ilin tro multekostaj, mi decidos pri io alia. Mi ne iros al la
			montosuproj kaj trovos aliajn vidindaĵojn. Ili ne mankas, oni diris
			al mi.</p>
			
			<p>Mi skribos al mia familio. Ankaŭ pri tio mi antaŭĝojas. Mi ŝategas
			skribi por rakonti miajn aventurojn. Tiam mi sentas min en tre
			proksima rilato kun ĉiuj familianoj. Estas feliĉo havi grandan
			familion. Multaj ne samopinias, sed al mi tio plaĉas. Mi skribos al
			miaj gepatroj, al la gefratoj, kompreneble, sed ankaŭ al onkloj kaj
			onklinoj, kaj al iliaj gefiloj, kaj, krom ili, al la amikoj. Mi
			pasigos multajn noktojn leterskribante. Mi scias, ke ĉiu tre ĝojos
			ricevi novaĵojn de mi.</p>
			
			<p>Multaj personoj trovus stranga mian deziron pasigi la vesperojn kaj
			noktojn en hotelĉambro, skribante leteron post letero al tuta aro da
			familianoj, kaj al la tuta amikaro, dum mi povus viziti la dancejojn,
			ludejojn, teatrojn aŭ aliajn lokojn. La diablo eble scias, kiom da
			ejoj ekzistas nur por kapti la monon de la eksterlandanoj. Vojaĝantoj
			ofte estas monperdemaj. Eble ili estas riĉaj kaj vojaĝas per sia
			mono. Sed mi vojaĝos en tute aliaj kondiĉoj, ĉar nur per la mono de
			la Oficejo. Do mi ne iros danci kun nekonataj lokanoj, aŭ rigardi
			solece teatraĵon. Mi restos enhotele kaj skribos al miaj cent
			familianoj.</p>
			
			<p>Kia vivo! Kia feliĉo! Kia plezuro! Mi apenaŭ eltenas la streĉon
			atendi ĝis venos la Tago de la Granda Forveturo. Oni diris, ke estas
			kelkaj malsanoj tie, pri kiuj oni devas sin gardi. Nu, mi informiĝos.
			Mia familia kuracisto certe povos diri al mi, ĉu iu aŭ alia faro
			estas deviga, aŭ eĉ simple farinda, kiel rimedo antaŭgardi la
			sanon. Mi forte deziras ne malsaniĝi tie. Mi ne ŝatus restadi longe
			en malsanulejo fore de la tuta familio kaj amikaro. Mi kompreneble
			amikiĝus kun lokanoj, se mi devus longe resti tie, sed se tio ne
			estas necesa, mi preferas ne.</p>
			
			<p>Diable! Kiel rapide la tempo pasas! Jam estas preskaŭ la kvina kaj
			duono. Tereza baldaŭ alvenos, kaj mi ankoraŭ nenion preparis. Kaj mi
			promesis al ŝi pomkukon kaj mian specialan fruktosukan trinkaĵon.
			Ek, al la laboro! Mi povas pensi pri mia vojaĝo ankaŭ preparante la
			manĝon.</p>
			
			<a id="dua" class="scrollspy"></a>
			<h3>Skribas malliberulo</h3>
		
			<p>Kara Amikino,</p>
		
			<p>Mi ne konas vin, sed vi permesos, ĉu ne?, ke mi nomu vin amikino. Mi
			ne scias, kiel danki vin. Via letero estas por mi tiel neatendita
			belaĵo, ke mi ne trovas vortojn por esprimi, kion mi sentas. Ĝi
			estis korvarmiga. Kaj mi starigas al mi multajn demandojn: Kiel vi
			eksciis pri mi? Kiu pri mi parolis al vi? Kiel eblas, ke vi havis
			tiun ideon ekrilati kun mi letere? Kiu ajn intervenis por rilatigi
			vin kun mi, mi tiun plej sincere dankas.</p>
			
			<p>Jes, kiel vi diras en via letero — kaj mi gratulas vin pro via
			realeca imagpovo — vivo en malliberejo ne estas facila. Tiuj, kiuj
			estas plene liberaj, ne konas la valoron de libereco. Libereco similas
			al sano. Oni ekkonscias ĝian havindecon nur post kiam oni perdis
			ĝin. Ĉu vi konas la komencon de «Sinjoro Tadeo» de Mickiewicz<a href="#notoj">[1]</a>?</p>
			
			<p class="citajxo">
			Litvo<a href="#notoj">[2]</A>! Patrujo<a href="#notoj">[3]</A> mia, simila al sano,<br>
			Vian grandan valoron ekkonas litvano<br>
			Vin perdinte...</p>
		
			<p>Nu, tion saman mi povas diri pri libereco. </p>
		
			<p>Pri manĝoj kaj similaj aferoj mi ne tro povus plendi. Ni ne estas en
			granda, riĉula hotelo, kompreneble, sed tiuj aspektoj de nia vivo
			estas akcepteblaj. Kio apenaŭ estas eltenebla<A HREF="#notoj">[4]</A>, tio estas la manko
			de libereco. Ne povi eliri. Ne povi viziti magazenojn. Neniam povi
			decidi pri siaj movoj. Ne promeni en naturo. Ne vidi domojn, urbon,
			kampojn. Scii, ke antaŭ longe ne estos libertempo, ne estos ebleco
			vojaĝi al maro aŭ montoj. Tio estas... kiel mi povus diri? Ne
			ekzistas vorto por klarigi tion... tio estas subiga. Subfaliga. Ĉu vi
			komprenas?</p>
			
			<p>La alia terura afero, por viroj, en la malliberejoj de ĉi tiu lando,
			estas la manko de virinoj. Vi ne imagas, kiom mankas virinoj al ni. Ne
			nur por para amo aŭ por plezuro korpa. Sed nur vidi virinon, aŭdi
			inan voĉon, rigardi la belecon kaj dolĉecon de ina persono! Tiu
			neebleco estas terura manko por ni.</p>
			
			<p>Estas ĉi tie kelkaj junuloj kun bela vizaĝo kaj korpo maldika. Se vi
			scius, kiel oni rigardas ilin! Kaj ne temas nur pri rigardoj,
			kompreneble. Ĉu vi trovas min aĉa, ĉar mi priparolas tiajn aferojn? 
			Pardonu min. Ili estas parto de nia realo ĉi tie, kaj la afero
			estas perfekte komprenebla en mondo, kie virinoj tute forestas.</p>
			
			<p>La fakto, ke la propono interŝanĝi leterojn kun kompatinda
			malliberulo venis de virino, igis la aferon eĉ pli kor-altiga al mi.
			Ĉu vi komprenas mian esprimon? «Kor-altiga»: per tio, mi volas diri,
			ke mi sentas, kvazaŭ mia koro estus pli bela, pli granda, pli sana,
			nu, pli alta, tio estas, en pli bona pozicio.</p>
			
			<p>Jes, la ideo, ke iu nekonata virino pensas pri mi, deziras skribi al
			mi, eĉ sciante, ke mi malbonagis, tio estas plaĉe varmiga al mia
			koro. Se vi scius, kiel sola mi estas!</p>
			
			<p>Amikojn oni trovas mem, ĉu ne?, kaj ili estas grava parto de la
			vivo. Oni decidas mem, ke kun tiu aŭ alia persono oni ekrilatos
			amike. Sed ĉi tie estas neniu amiko, neniu persono estas kun ni, ĉar
			ni decidis esti kune. Tio estas terura. Eĉ la anoj de la bando, kiuj
			estis arestitaj kun mi, tute ne estas amikoj. Nur kunlaborantoj. Aĉaj
			kunkrimuloj, fakte.</p>
			
			<p>Ĉu eble ni iĝos geamikoj? Mi tion esperas. Sed eble tio estas troa.
			Mi ne rajtas esperi tion. Kiel vi amikus al mi, kiu mem metis min
			ekster la normalan vivon?</p>
			
			<p>Pardonu min, se mi diras al vi aferojn, kiuj ne plaĉas. Mi sentas min
			ĝenata. Mi ne scias, kion skribi, kaj mi estas tiel kontenta skribi,
			pensi pri vi, imagi vin. Ĉu vi bonvolos sendi al mi foton de vi? Vi
			igas min malpli sola. Vi venas aldoni al la ĉi-tiea nenormala,
			soldateca atmosfero ion virinecan, kion ĝi vere bezonas.</p>
			
			<p>Nun mi devas halti. Mi tre streĉe atendas vian respondon.</p>
			
			<p>Via sincera amiko malliberulo,</p>
			
			<p>Paŭlo</p>
		
			<a id="notoj"></a>
			<p class="rimarko"><strong>NOTOJ</strong> : 
			<ol>
				<li>Fama verkisto. Prononcu : Mickjeviĉ.</li>
				<li><span class="eo">Litvo</span> : unu el la du ĉefaj partoj de malnova Pollando.</li>
				<li><span class="eo">Patrujo</span> : patrolando.</li>
				<li><span class="eo">Elteni</span> : elporti.</li>
			</ol>
		
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