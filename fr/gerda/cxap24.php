<?php 
$titolo="24 (dudek kvar)";
$leciono = 24;
$section=isset($_GET["section"])?htmlspecialchars($_GET["section"]):"1";
if (!is_numeric($section)) {
	if ($persono_id=="") {header("Location:../../index.php?erarkodo=24");}
}
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

			<h3>La trezoro de la Lumo</h3>
			<div class="row dialogo">
				<div class="col s12 m8">
					<p>"Nur papero!" kriis Ronga.</p>
					<p>"Ankaŭ estas libro!" diris Marta, sed jam Ronga laŭtlegis:
					<i>"Tie ĉi kuŝas la Trezoro de la Lumo. Pro la daŭra
					persekutado, la Sankta kaj Sekreta Frataro de la Lumo-Serĉantoj
					baldaŭ ĉesos ekzisti. Sed ĝia Spirito plu vivos. Iun tagon, homoj
					retrovos la Sanktajn Principojn kaj rekomencos ilin apliki. Por ili
					estas ĉi tie kaŝita la Trezoro de la Lumo.</i></p>
					<p><i>"Ĝi estas skribita en la Speciala Lingvo de la Frataro, sed
					certe homoj troviĝos, kiuj ĝin povos kompreni. La Trezoro konsistas
					el la arto praktike apliki kaj defendi la Veron, la Justecon, la
					Dignecon, la Respekton al ĉiu homo, la Interkomprenon, la Honestecon,
					la Amon, la Kompatemon kaj la Konon de si mem kaj de sia ĝusta loko.</i></p>
					<p><i>"Por la Frataro, la Spiritaj Valoroj estas la plej altaj. Tial
					ĝia Trezoro estas pure Spirita.</i></p>
					<p><i>"Al vi, homo, kiu trovis ĝin, trans multaj aŭ malmultaj
					tagoj, semajnoj, monatoj, jaroj, jardekoj aŭ jarcentoj, Saluton kaj
					Fratecon!"</i></p>
					<p>
								* * *
					</p>
					<p>Ili sidis en komfortaj brakseĝoj en la hejmo de Gerda.</p>
					<p>"Kio okazis poste?" ĉi-lasta demandis.</p>
					<p>"Ni malkaŝis nin, kaj mi ilin arestis," diris la policano.
					"La loka polico estis antaŭe informita, kaj enŝlosis ilin."</p>
					<p>"Ĉu vi scias, kiel komenciĝis la afero?" scivolis Tom.</p>
					<p>"Proksimume. Kiam Marta estis flegistino en la hospitalo, ŝi
					ĉeestis kirurgian operacion de historiisto, Prof. (=Profesoro) Kosadi.
					Kiam ĉi-lasta estis duone dormanta, duone vekiĝanta, li parolis
					nekonscie pri la trezoro de la Lumoserĉantoj. Li diris, ke temas pri
					malnova societo, elita, tre riĉa, pri kies trezoro li eksciis hazarde
					legante en la Vatikana Biblioteko."</p>
					<p>"Jes," daŭrigis Gerda. "Tiun parton de la afero mi konas. Li
					faris historian esploron en la Biblioteko Vatikana. Inter la paĝoj de
					malnova libro, li trovis dokumenton en la sekreta lingvo de la
					Lumoserĉantoj. Li antaŭe kelktempe interesiĝis pri tiu sekreta
					societo internacia, kaj iom komprenis ĝian sekretan lingvon. Li
					komprenis, ke tiu papero indikas, kie troviĝas la trezoro de la
					Lumoserĉantoj, sed mem ne povis traduki ĉiujn detalajn indikojn. Li
					ricevis la permeson fotokopii la dokumenton. Foje, kiam ni
					renkontiĝis, li parolis pri tio al mi. Li diris, ke eble homoj provos
					trovi tiun trezoron, ĉar pli kaj pli multaj personoj interesiĝas pri
					la malnovaj sekretaj societoj. Li sciis, ke mi estas la sola persono en
					la mondo, kiu vere ĝisfunde studis tiujn malnovajn sekretajn lingvojn,
					kaj li petis min solene promesi, ke mi neniam kunlaboros kun homoj
					serĉantaj la trezoron pro materia intereso."</p>
					<p>"Kion li volis, ke oni faru pri ĝi?" Linda demandis.</p>
					<p>"Ke ĝi transiru al iu muzeo aŭ ŝtata institucio."</p>
					<p>Tom intervenis:</p>
					<p>"Kiel Marta ricevis la fotokopion?"</p>
					<p>"Tion ŝi mem klarigis al mi," respondis la policano: "ŝi
					konstatis, ke la substanco uzita antaŭ la operacio por dormigi la
					profesoron estas unu el tiuj, kiujn oni kelkfoje uzas por t.n. (= tiel
					nomata) narkoanalizo. Post la operacio, kiam la profesoro kuŝis en sia
					ĉambro – li havis privatan ĉambron kaj do estis sola – ŝi injektis
					al li tiun substancon, kaj pridemandis lin. Sub la influo de la
					koncerna substanco, oni dormas, sed dormante aŭdas kaj respondas
					demandojn, ĝenerale dirante la veron. Li do dorme respondis al ŝi.
					Per tiu metodo ŝi eksciis pri tio, ke nur unu persono en la mondo,
					nome Gerda, komprenas tiun sekretan lingvon, kaj pri multaj aliaj
					aferoj."</p>
				</div>
				<div class="col s12 m4">
					<img src="bildoj/gerda24-1.gif" class="responsive-img">
				</div>
			</div>


		<?php 
		} // fin section 1
		if ($section=="2") {
		?>

			<section class="klarigo">

				<p class="parto">
				En la antaŭa ĉapitro vi lernis pri ĉiuj ses participoj en
				Esperanto, sed ni uzis ilin nur kiel adjektivojn. Adjektivon oni povas
				uzi aŭ apud substantivo (<span class="eo">Ŝi vidas blondan viron.</span>), aŭ kun iuj
				verboj, ekzemple <b>esti</b> (<span class="eo">La viro estas blonda</span>). Ankaŭ participajn
				adjektivojn oni povas uzi en tiuj du manieroj:
		
		   		<p class="tab"><span class="eo">Mi vizitas la enŝlositan virinon.</span></p>
				<p class="tab"><span class="eo">La virino estas enŝlosita.</span></p>
				
				<h3>Participaj adjektivoj</h3>
	
				<p>La participaj adjektivoj havas la saman signifon en ambaŭ situacioj.</p>
				<p>Oni povas montri la subjekton de objekta (pasiva) participo per la
				prepozicio <b>de</b>:</p>
	
		   		<p class="tab"><span class="eo">Mi vizitas la virinon enŝlositan de la blondulo.</span></p>
		   		<p class="tab"><span class="eo">La virino estas enŝlosita de la blondulo.</span></p>
	
	
		   		<p>Tiuj frazoj signifas preskaŭ same kiel:</p>
			   	<p class="tab"><span class="eo">Mi vizitis la virinon, kiun la blondulo enŝlosis.</span></p>
			   	<p class="tab"><span class="eo">La blondulo enŝlosis la virinon.</span></p>
	 
	 			<p>Tiuj lastaj frazoj estas tamen pli simplaj kaj pro tio pli bonaj.</p>
				<p>Eblas uzi ankaŭ subjektan (aktivan) participon post la verbo <b>esti</b>:</p>
	
			   	<p class="tab"><span class="eo">La blondulo estas enŝlosinta la virinon.</span></p>
	
				<p>Tiaj "kunmetitaj verbotempoj" estas tamen tre maloftaj. Preskaŭ ĉiam
				sufiĉas simple:
				</p>
	
			   	<p class="tab"><span class="eo">La blondulo enŝlosis la virinon.</span></p>
			   	
			   	<h3>Participaj substantivoj</h3>
	
				<p>Participoj uziĝas ne nur adjektive, sed ankaŭ adverbe kaj
				substantive. Ni konsideru unue ilian substantivan uzadon.
				</p>
				<p>Participaj substantivoj havas kompreneble la finaĵon <b>-o</b>:
				malaperinto, krieganto, kaptoto. Oni devas memori, ke participa
				substantivo ĉiam signifas personon, aŭ ulon. <span class="eo">Malaperinto</span> estas do
				<span class="eo">malaperinta ulo</span>, <span class="eo">krieganto</span> estas 
				<span class="eo">krieganta ulo</span>, kaj <span class="eo">kaptoto</span>
				estas <span class="eo">kaptota ulo</span>. Se oni volas paroli pri aĵo, oni povas uzi
				kroman finaĵon <b>-aĵ-</b>. </p>
				<p><span class="eo">Donitaĵo</span> estas ekzemple aĵo donita, io donita.</p>

			   	<h3>Participaj adverboj</h3>
				<p>
				Participaj adverboj havas la finaĵon <b>-e</b>: enirante, forironte,
				vidinte. Pri participaj adverboj oni devas memori, ke ili ĉiam
				rilatas al la subjekto de la frazo. Ekzemple, la frazo:
				</p>
	
			   	<p class="tab"><span class="eo">Bob vidis Lindan enirante la restoracion.</span></p>
	
				<p>Devas signifi:</p>
	
			   	<p class="tab"><span class="eo">Bob vidis Lindan, dum li (Bob) eniris la restoracion.</span></p>
	
				<p>Jen aliaj ekzemploj:</p>
	
			   	<p class="tab"><span class="eo">Forironte Bob turnis sin al la pordo.</span> (Bob turnis sin al la pordo por foriri.)
			   	<p class="tab"><span class="eo"> Vidinte Lindan Bob iris al ŝia tablo.</span>
					(Post kiam li vidis Lindan, Bob iris al ŝia tablo.)</p>
	
				<p class="parto">Kompreneble oni povas uzi ankaŭ objektajn (pasivajn) participajn
				adverbojn:
				</p>
	
			   	<p class="tab"><span class="eo">Bob forlasis la restoracion ne vidite de Linda.</span></p>
			   	<p class="tab"><span class="eo">Observate de la studentoj li ne kuraĝis foriri.</span></p>
			   	<p class="tab"><span class="eo">Kaptote de la malamiko li decidis sin mortigi.</span></p>
	
				<p class="parto">
				En skriba Esperanto oni ofte uzas tiajn frazojn kun participaj
				adverboj, sed en parolata Esperanto ili ne estas tiom uzataj. Oni
				preferas paroli per simplaj mallongaj frazoj.
				</p>
			</section>

		<?php 
		} // fin section 2
		if ($section=="3") {
		?>

			<?php if ($persono) { ?>
			<p class="eo eta">Ces mots seront automatiquement ajoutés à votre vocabulaire à réviser lorsque vous aurez terminé d'étudier cette section.</p>
			<?php } ?>
			<div class="vortlisto row">
				<div class="col s12 l6">
					<p><span class="eo">apliki</span> : appliquer (sur quelque chose ou à quelque chose)</p>
					<p><span class="eo">biblioteko</span> : bibliothèque</p>
					<p><span class="eo">ĉesi</span> : cesser, s'arrêter de faire quelque chose</p>
					<p><span class="eo">defendi</span> : défendre, protéger</p>
					<p><span class="eo">fundo</span> : fond </p>
					<p><span class="eo">ĝenerala</span> : général(e)</p>
					<p><span class="eo">ĝisfunde</span> : parfaitement, totalement (litt.: jusqu'au fond)</p>
					<p><span class="eo">hazardo</span> : hasard</p>
					<p class="sekva"><span class="eo">hazarde</span> : par hasard</p>
					<p><span class="eo">hospitalo</span> : hôpital</p>
					<p><span class="eo">influo</span> : influence</p>
					<p><span class="eo">injekti</span> : injecter</p>
					<p><span class="eo">institucio</span> : institution</p>
					<p><span class="eo">justa</span> : juste, équitable</p>
					<p><span class="eo">kirurgio</span> : chirurgie (science, pratique)</p>
					<p><span class="eo">koncerna</span> : concerné(e)</p>
					<p><span class="eo">konsisti</span> : consister (en), se composer (de)</p>
					<p><span class="eo">konstati</span> : constater (que)</p>
				</div>
				<div class="col s12 l6">
					<p><span class="eo">materio</span> : matière</p>
					<p><span class="eo">metodo</span> : méthode</p>
					<p><span class="eo">monato</span> : mois</p>
					<p><span class="eo">muzeo</span> : musée</p>
					<p><span class="eo">narkoanalizo</span> : narco-analyse</p>
					<p><span class="eo">operacio</span> : operation</p>
					<p><span class="eo">paĝo</span> : page</p>
					<p><span class="eo">praktiko</span> : pratique</p>
					<p><span class="eo">privata</span> : privé(e)</p>
					<p><span class="eo">proksimume</span> : approximativement</p>
					<p><span class="eo">renkonti</span> : rencontrer (quelqu'un)</p>
					<p class="sekva"><span class="eo">renkontiĝi</span> : se rencontrer, se réunir</p>
					<p><span class="eo">respekti</span> : respecter</p>
					<p><span class="eo">sankta</span> : saint(e), sacré(e)</p>
					<p><span class="eo">solena</span> : solennel(le)</p>
					<p><span class="eo">spirito</span> : esprit</p>
					<p><span class="eo">studi</span> : étudier</p>
					<p><span class="eo">Vatikano</span> : Vatican</p>
				</div>
			</div>

		<?php 
		} // fin section 3
		if ($section=="4") {
		?>

			<?php 
				getEkzercon(100,$persono_id);
			?>
	
	
			<?php 
				getEkzercon(101,$persono_id);
			?>

		<?php 
		} // fin section 4
		if ($section=="5") {
			//include "lasusono.inc.php";
		?>

			<div class="row">
				<div class="col s12">
					<div class="card-panel blue lighten-5">
						En tiu ĉapitro, estas du malsamaj rakontoj de <i>Lasu min paroli plu !</i>.<br>
						<a href="#unua">Literaturo amindas, sed tamen...</a><br>
						<a href="#dua">La ĝojoj de petveturado</a>
					</div>
				</div>
			</div>

			<a id="unua" class="scrollspy"></a>
			<h3>Literaturo amindas, sed tamen...</h3>
		
			<p>La terura afero, koncerne Eduardon, estas, ke nur literaturo interesas
			lin. Ĉu vi tion konstatis ? Nur pri literaturo li okupiĝas
			ĝisfunde. Mi konstatis tion ankoraŭ hieraŭ, kaj mi ne dubas, ke mi
			rekonstatos ĝin morgaŭ.</p>
			
			<p>Kiam mi renkontis lin hieraŭ, lia edzino ĵus rakontis al mi pri tiu
			grava problemo koncerne la koston de la domo, kiun ili farigas en la
			apudurba kamparo. Ŝi ĵus parolis al mi tre precize pri la monaj
			malfacilaĵoj, kiujn ili renkontis. Multaspekta afero, kiun mi
			plejparte forgesis. Vi certe jam konstatis, ke mi neniam sentas min
			hejme, kiam oni prezentas al mi pri-monajn konsiderojn, speciale se
			parolas la edzino de Eduardo, ĉar ŝi emas miksi la faktojn. Ne estis
			facile sekvi ŝiajn klarigojn.</p>
			
			<p>Tamen, unu aferon mi perfekte komprenis, nome, ke por ili la situacio
			fariĝas de tago al tago pli serioza. La ŝtata institucio, kiu
			promesis al ili monon — kontraŭ repago nur post jaroj, je tre
			kontentigaj kondiĉoj — pro mi-ne-scias-kio subite ekdecidis pri
			novaj kondiĉoj, tiel streĉaj, ke ili ne plu povos akcepti. Krome, la
			onklino, kiu antaŭ longe promesis, ke kiam ŝi mortos, ŝia tuta
			riĉo — grandega, laŭdire — estos por ili, lastminute preferis tute
			malsaman aranĝon kaj decidis doni preskaŭ ĉion al hospitaloj,
			muzeoj, bibliotekoj kaj similaj institucioj, tiel ke nun, kiam ŝi
			mortis, ŝia riĉego transiras al nefamilianoj, kaj Eduardo
			retroviĝas senigita ankaŭ je tiu espero solvi la monproblemon.</p>
			
			<p>Sed vi konstatos, se vi renkontos lin, ke tio ne ŝajnas tuŝi lin.
			Ĉiu alia persono, en similaj kondiĉoj, havus gravajn zorgojn. Ne li.
			Li paroladis al mi dum proksimume du horoj pri nova libro, kiu ĵus
			aperis, kaj pri nova plano prezenti en proksimume dumilpaĝa libro la
			tutan leteraron de iu literatura grandulo, al mi perfekte nekonata.</p>
			
			<p>Ĉu vi komprenas tian sintenon? Rimarku, ke tiu sinteno ebligas al li
			forkuri de la malplaĉa realo, protekti sin kontraŭ doloraj zorgoj,
			ne studi la fundon de l' problemo. Li tuŝos la fundon de malriĉeco
			antaŭ ol konstati, ke mon-problemo stariĝas. Oni ĉesas
			maltrankviliĝi, kiam oni forflugas en nerealecajn konsiderojn pri
			nerealaĵoj. Kia metodo! Bona por li, verŝajne, sed ne por la
			edzino. Ŝi portas la tutan pezon de la materiaj zorgoj, de kiuj
			forkuras la literaturama edzo. Ĉu vi trovas tion ĵusta? Mi ne.</p>
			
			<p>Aliflanke, tia li estas de naskiĝo, tia li certe restos ĝismorte. Mi
			dubas, ĉu li povus fariĝi iom pli praktika, post tiom da jaroj da
			flugado en la alta spirita aero.</p>
			
			<p>«Mi respektas viajn ideojn», li foje diris al mi, «mi respektas viajn
			sintenojn kaj preferojn, respektu do miajn. Vi estas materi-ama, mi
			amas studadon kaj esploradon kaj literaturajn ĝojigaĵojn. Vi ĉesis
			interesiĝi pri libroj tuj, kiam vi eliris el la lernejo. Mi ĉesis
			okupiĝi pri sporto tiuepoke. Vi estas fortmuskola kaj korpe
			bonfunkcianta, sed kun malplena kapo. Mi fariĝis sengrasa maldikulo,
			mi tuj laciĝas, kiam mi faras ian braklaboron, kaj, kvankam mi estas
			malpeza, mi eĉ ne havas la rapidmovecon de tia ulo, kiel vi, sed mia
			kapo plenas je belaĵoj, kaj ili donas sunan koloron al mia vivo, eĉ
			en tempoj de malfacileco».</p>
			
			<p>Nu, bone. Li bele parolas. Eduardo ĉiam estis senĉesa parolanto. Li
			jam montriĝis la plej belvorta el niaj samklasanoj, kiam ni kune
			lernejis. Sed mi ne ĉesas pensi pri lia kompatinda edzino, kies koron
			manĝetadas zorgoj pri l' morgaŭo.</p>
			
			<p>«Kie ni trovos monon?» ŝi ripete demandas al si. «De kie diable mono
			venos? La muroj de nia domo jam komencas malrapide altiĝi, sed ni
			neniam sukcesos pagi ĝin. Kaj mi tiom antaŭĝojis je la ideo vivi en
			nia familia domo! Havi hejmon en sia domo, kia bela celo! Sed ni ne
			realigos ĝin. Oni forprenos la domon de ni kaj ĝin vendos, ĉar ni
			ne povos pagi. Aŭ polico venos, arestos nin, kaj oni ĵetos nin en
			malliberejon!»</p>
			
			<p>Ŝi troigas, evidente. Sed tamen! Imagu al vi! Ŝi timas retroviĝi
			en malliberejo, kaj li, dume, revas nur pri literaturo kaj dumilpaĝaj
			libroj! Ĉu ilia para vivo sukcesos supervivi tian streĉiĝon, tian
			kontraŭecon en la manieroj pensi? Vere, ilia situacio min	maltrankviligas.</p>
			
			<p>Mi konstatis, ke ŝi multe maldikiĝis, kaj ke ŝia vizaĝo alprenis
			aĉan koloron, nesanan. Tiel ŝatinda virineto! Mia koro ŝiriĝis,
			kiam mi vidis ŝin tiel senhelpa.
			</p>

			<a id="dua" class="scrollspy"></a>
			<h3>La ĝojoj de petveturado</h3>
		
			<p>Ĉu estas vi, Johana? Kio okazis? Kial vi ne revenis hejmen? Kial
			vi telefonas tiel malfrue?</p>
			<p>...</p>
			
			<p>Kion? Kiun vi renkontis? Mi ne komprenas. Parolu pli klare, kara,
			bonvolu. Kio okazis al via voĉo? Mi apenaŭ rekonas ĝin.</p>
			<p>...</p>
			
			<p>En la hospitalo, ĉu? Vi estas en hospitalo! Mi timas. Diru al mi,
			kio okazis. Kion vi faras en hospitalo?</p>
			<p>...</p>
			
			<p>Kion vi ĵus diris pri aŭto? Mi fakte tre malbone aŭdas vin. La
			aŭto estas fuŝita? Kies aŭto? Ĉu mia aŭto? Johana! Kion vi
			faris?</p>
			<p>...</p>
			
			<p>Malfeliĉa hazardo, malfeliĉa hazardo! Kiajn vortojn vi uzas!
			Ŝajnas al mi, ke vi ne ŝoforis tre atente.</p>
			<p>...</p>
			
			<p>Kion? Ne vi ŝoforis! Sed mi ĉiam diris al vi, ke mi akceptas, ke vi
			uzu mian aŭton, sed ne ke iu alia ol vi ŝoforu!</p>
			<p>...</p>
			
			<p>Vi mem ne povis! Bela rimarko! Kaj kial diable vi ne povis ŝofori,
			dum vi lernis direkti aŭton jam antaŭ pluraj jaroj? Ne, Johana.
			Vere, mi ne komprenas vin.</p>
			<p>...</p>
			
			<p>Brando! Vi trinkis tiom da brando, ke vi ne plu klare vidis! Ĉu
			tion vi ĵus diris al mi? Kial do vi trinkis tiom da brando? Ili
			trinkigis vin, ĉu? Sed kiuj estas tiuj «ili»?</p>
			<p>...</p>
			
			<p>Vi ne scias! Vi ne konas ilin! Pli kaj pli bele! Vi renkontis
			ulojn, kaj trinkis kun ili tiom da brando, ke vi ne plu povis direkti
			mian aŭton, kaj vi nun telefonas el hospitalo. Vere, mi ne scias,
			kion pensi. Kion vi ĵus diris? Mortis, ĉu? Kiu mortis?</p>
			<p>...</p>
			
			<p>Li ankoraŭ ne tute mortis, sed estas nun mortanta? Ĉio ĉi estas
			neimageble serioza. Kiu troviĝis tie, kaj mortis, aŭ mortas?</p>
			<p>...</p>
			
			<p>La aŭto surveturis lin! Johana! Mi perdas la kapon! Vi parolas
			tiel trankvile! Kion? Ha jes, ili donis trankviligan substancon al
			vi. Jes, mi scias, kuracistoj estas tiaj. Tuj, kiam okazis io drama,
			nuntempe, ili havigas al oni trankviligilon. Tial vi parolas tiel
			strange. Sed kia terura okazaĵo! Vere, mia kapo turniĝas. Rediru al
			mi — ĉar mi nenion komprenas — kiu ŝoforis, kiam la aŭto
			surveturis tiun kompatindan sinjoron?</p>
			<p>...</p>
			
			<p>Kion vi diris? La ĉefo de la polico direktis mian aŭtomobilon?</p>
			<p>...</p>
			
			<p>Ne li? La ĉefo de la polico ne estis la homo en la aŭto, sed la
			homo, sur kiu la veturilo pasis? Kion? Ĉu la mortanto estas la
			policĉefo? Ho, Johana, ne estas vere, ĉu? Ne, ne! Filino mia,
			kion diable vi faris?</p>
			<p>...</p>
			
			<p>Ne vi faris! Sed kiu, kiu do? Kiu ŝoforis? Provu paroli pli klare,
			mi malbone aŭdas.</p>
			<p>...</p>
			
			<p>Nekonato! Sed kiel vi renkontis tiun nekonaton? Kion? Li petveturis
			? Ha jes, kompreneble, li petveturis! Mi tion imagas perfekte. Li
			staris apud la vojo signante al pasantaj aŭtoj, ke li deziras veturon.
			Kaj vi, simplulino, akceptis lin kaj ...</p>
			<p>...</p>
			
			<p>Bela! Li estis tre bela! Jen belega respondo! Johana, ĉu vere vi
			estas sesjara knabino? Tion oni kredus, aŭdante vin. Bela! Mi
			parolos al vi pri beleco kiam vi hejmenvenos! Vi aŭdos min, tion mi
			promesas al vi.</p>
			<p>...</p>
			
			<p>Kaj poste vi haltis por enaŭtigi alian. Kaj tiu havis botelon da...
			kion vi diras? Biero, ne brando, biero, ĉu? Ha jes! Komence biero.
			Kaj poste vi trovis brandon! Kie? La sama, ĉu? Tiu dua
			petveturanto diris, ke li havas ankaŭ brandon, kaj vi... nekredeble!
			Ĉu vi trinkis en la aŭto?</p>
			<p>...</p>
			
			<p>Ha, feliĉe vi havis la ideon halti por trinki. Kion vi...? Tion mi
			povas imagi, ke la naturo estis tre bela tiuloke. Ho jes, mi facile
			prezentas al mi enkape la vidaĵon: vi en bela naturo kun du beluloj,
			kaj... Kion vi diris?</p>
			<p>...</p>
			
			<p>Nur unu estis bela! Jes, kompreneble. La alia estis nur la
			homo-kun-biero-kaj-brando. Sed poste, kio okazis?</p>
			<p>...</p>
			
			<p>Kompreneble, vi sentis vin necerta pri vi! Kiel povus esti alie, post
			tiom da trinkado? Kaj do vi petis tiun alian ŝofori. Sed verŝajne
			ankaŭ tiu trinkis tro multe, kaj... Terure! Rakontu do precize, kio
			okazis, dum li direktis la aŭton.</p>
			<p>...</p>
			
			<p>Jes. En kiun urbeton vi eniris? Mi ne komprenis la nomon.</p>
			<p>...</p>
			
			<p>Ha jes, mi vidas, jes, tie. Kaj tuj post la unuaj domoj estas tiu vojo
			dekstre, kaj...</p>
			<p>...</p>
			
			<p>Kion? Li veturis en la nazon de alia aŭto, kiu alvenis, kaj li
			sukcesis samtempe surveturi piediranton! Kaj tiu estis la policĉefo
			! Johana, Johana, mia filino, kiel eblas!</p>
			<p>...</p>
			
			<p>Kion? Ĉu vi diris, ke viaj du petveturantoj sukcesis forkuri, antaŭ
			ol la polico alvenis? Kaj ĉu vere neniu ilin haltigis? Ĉu oni ne
			kaptis ilin? Neniu rimarkis! Sed ili estis krimuloj! Almenaŭ tiu,
			kiu ŝoforis!</p>
			<p>...</p>
			
			<p>Sed vi mem, kial vi nenion diris al la homoj tie? Jes, kompreneble,
			vi estis kelkmomente nekonscia, kaj dum tiu momento ili perdigis sin.
			Sed... sed... se tiuj du malaperis, tiam la polico neniam kredos, ke
			ili entute ekzistas! Ĉu iu ilin vidis?</p>
			<p>...</p>
			
			<p>Ne, kompreneble. Neniu vidis ion ajn. Ĉio okazis tro rapide. Tiuj du
			junulaĉoj malaperis for, kaj restis sur la strato vi, plena je
			brando, mortanta policĉefo, kaj du rompaĉitaj, pecigitaj aŭtoj. Kaj
			sur la aŭto, el kiu oni vidis vin eliri, kiam vi rekonsciiĝis,
			troviĝas mia numerplato!</p>
			<p>...</p>
			
			<p>Se almenaŭ vi ne estus mia filino, mi povus diri, ke oni ŝtelis mian
			aŭton, sed kun vi en ĝi...</p>
			<p>...</p>
			
			<p>Silentu, mi petas, Johana. Nenion diru plu. Kaj agu tuj. Jen mia koro
			reagas strange. Mi sentas doloron. Mi petas vin, telefonu al
			kuracisto, ke li venu tujtuj al mi. Mi... Mi timas, ke nevole, jes ja,
			tute certe nevole, sed tamen... mi timas, ke vi mortigis du homojn!
			Ne plu estas aero ĉi... ĉi tie. M... mi ne p... ne plu po... povas
			paro... </p>

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
	
	<?php include "gerdaflanko.inc.php"; ?>

</div>

<?php include "gerdapiedo.inc.php"; ?>
