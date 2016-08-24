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

			<div class="vortlisto row">
				<div class="col s12 l6">
					<p><span class="eo">cent</span> : cent</p>
					<p><span class="eo">ĉefa</span> : principal(e), chef</p>
					<p><span class="eo">ĉokolado</span> : chocolat</p>
					<p><span class="eo">dek</span> : dix</p>
					<p class="sekva"><span class="eo">dek kvar</span> : quatorze</p>
					<p><span class="eo">dekstra</span> : droit(e) (côté) </p>
					<p class="sekva">→ <span class="eo">maldekstra</span> : gauche (côté)</p>
					<p><span class="eo">dolĉa</span> : doux; sucré</p>
					<p><span class="eo">flanko</span> : côté</p>
					<p><span class="eo">frue</span> : tôt, de bonne heure</p>
					<p><span class="eo">hieraŭ</span> : hier</p>
					<p><span class="eo">kvar</span> : quatre</p>
					<p><span class="eo">kvardek</span> : quarante</p>
					<p class="sekva"><span class="eo">kvardek kvar</span> : quarante-quatre</p>
					<p><span class="eo">magazeno</span> : magasin, boutique</p>
					<p><span class="eo">mateno</span> : matin</p>
					<p><span class="eo">meblo</span> : meuble</p>
				</div>
				<div class="col s12 l6">
					<p><span class="eo">nazo</span> : nez</p>
					<p><span class="eo">pano</span> : pain</p>
					<p><span class="eo">papero</span> : papier</p>
					<p><span class="eo">plani</span> : établir un plan, projeter de</p>
					<p class="sekva"><span class="eo">plano</span> : plan</p>
					<p><span class="eo">plenplena</span> : complètement plein, rempli</p>
					<p><span class="eo">poŝto</span> : poste (administation de distribution du courrier), courrier</p>
					<p><span class="eo">raporti</span> : rapporter, annoncer</p>
					<p><span class="eo">sako</span> : sac</p>
					<p><span class="eo">speco</span> : sorte, espèce, genre</p>
					<p><span class="eo">sporto</span> : sport</p>
					<p><span class="eo">strato</span> : rue</p>
					<p><span class="eo">ŝanco</span> : chance</p>
					<p><span class="eo">tasko</span> : tâche, besogne, devoir (scolaire)</p>
					<p><span class="eo">teo</span> : thé</p>
					<p><span class="eo">vendi</span> : vendre</p>
				</div>
			</div>

		<?php 
		} // fin section 3
		if ($section=="4") {
		?>

			<fieldset class="ekzerco">
				<legend><b>Demandoj</b> </legend>
				<input type="hidden" name="013_cxap15.0" value="Demandoj">
				<div class="tasko">
				<?php $demandoj=array (
					1 => "Kun kiu parolas Tom?",
					2 => "Ĉu ŝi bone dormis?",
					3 => "Ĉu Tom raportas unue?",
					4 => "Ĉu ŝi sukcesis paroligi la blondulon en la aŭto?",
					5 => "Kie ŝi poste vidis lin?",
					6 => "Kion la blondulo aĉetis?",
					7 => "Kial Linda ofte irus al la vendejo por multon aĉeti?",
					8 => "Kial ŝi tamen ne faras tion?",
					9 => "Kion trinkis Linda?"
					);
				ekzerco(True, 2);
				?>
				</div>
			</fieldset>

			<fieldset class="ekzerco">
				<legend>Trovu la vortojn.</legend>
				<input type="hidden" name="013_cxap15.1" value="Trovu la vortojn.">
				<div class="ekzemplo">
					<p><em>Ekzemple:</em></p>
					<p>ne alia → ne alia : <u>sama</u></p>
				</div>

				<div class="tasko">
					<p class="primaire-texte texte-moyen">La vortoj estas:</p>
					<p class="primaire-texte texte-moyen">ambaŭ, aŭto, aŭtomato, baldaŭ, bruo, ĉambro, diskuti, dormi, ekster, el, flegi, helpi, informi, kapo, konscia, kuraci, nokto, observi, opinio, perdi, piedo, resti, risko, ruĝa, sama, sekvi, semajno, vespero, vivi, voki</p>

					<?php $demandoj=array (
						10 => "al ekster :",
						11 => "atente rigardi :",
						12 => "ĉiuj el la du :",
						13 => "danĝero, necerteco :",
						14 => "daŭre esti en la sama loko :",
						15 => "ekmalhavi :",
						16 => "esti senkonscia, sed sana :",
						17 => "faciligi la agadon :",
						18 => "fina parto de kruro :",
						19 => "interparoli pri io :",
						20 => "io, kio funkcias per si mem :",
						21 => "iri malantaŭ io :",
						22 => "laŭte peti, ke iu venu :",
						23 => "malbela aŭdaĵo :",
						24 => "maltago :",
						25 => "motora veturilo :",
						26 => "ne alia :",
						27 => "ne en :",
						28 => "ne esti mortinta :",
						29 => "noktiĝo :",
						30 => "parto de domo :",
						31 => "parto de la korpo, kie estas la okuloj :",
						32 => "pensanta :",
						33 => "post mallonga tempo :",
						34 => "resanigi :",
						35 => "doni sciigon :",
						36 => "sep tagoj :",
						37 => "tio, kion oni pensas pri iu temo :",
						38 => "tomatokolora :",
						39 => "zorgi pri malsanulo :"
						);
						ekzerco(True, 1);
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
						<a href="#unua">Mistero en papervendejo</a><br>
						<a href="#dua">Du raportoj pri vendado</a>
					</div>
				</div>
			</div>

			<a id="unua" class="scrollspy"></a>
			<h3>Mistero en papervendejo</h3>
			
			<p>Kiam mi vidis Ivon hieraŭ, li ne nur alportis tre bonajn ĉokoladajn
			dolĉaĵojn, sed krome li raportis al mi pri la strangaj okazaĵoj en
			la papervendejo de Ĉefa Strato. Mi tre fidas lian raporton. Li sciis
			multon, ĉar li laboris kiel vendisto en tiu paperejo kelktempe kaj li
			plu havas amikajn rilatojn kun la homoj tieaj.</p>
			<p>
			Li diris, ke laŭ la aranĝo de la mebloj en la magazeno, la ideoj de
			la polico ne povas esti pravaj. Laŭ Ivo, la plano, kiun oni ne plu
			retrovis jam frue la matenon post la okazaĵoj — tiu gravega papero,
			kiu tiel nekompreneble perdiĝis — ne kuŝis sur la meblo, kie ĝi
			estis laŭ la polico, aŭ ĝi ankoraŭ estus tie la sekvantan matenon.
			Se ĝi ne plu troveblis sur tiu meblo — la meblo maldekstre staranta
			— frumatene la sekvantan tagon, oni suspektu unu el la vendistoj, ne
			la personon, kiu venis aĉeti la papersakojn, kaj kiun la polico
			suspektas.</p>
			<p>
			Laŭ Ivo, tiu persono ne povis iri apud la meblon, kie la plano
			laŭdire troviĝis. La vendistoj tuj rimarkus lin kaj suspektus ion
			nenaturan, ĉar tiu meblo, kiu staras flanke, sur la maldekstra
			flanko, fakte, ne estas alirebla al la homoj, kiuj venas en la
			magazenon nur por aĉeti ion. La polico do ne volas diri la veron.</p>
			<p>
			Tiu grava plano, kiu, laŭ la polico, kuŝis sur la maldekstraflanka
			meblo, venis per speciala poŝt-alporto tuj antaŭ la fermhoro. Oni
			metis ĝin sur la poŝtaĵojn, kiuj alvenis pli frue, kaj tie plu
			kuŝis. Nu, kompreneble, Ivo konas tiun meblon, kiel la tutan
			magazenon. Li diris, ke estas vere, ke oni ĉiam metas la alvenintajn
			poŝtaĵojn sur tiun meblon, ĝis la koncerna persono havas tempon
			okupiĝi pri ili. Neniam estas facile trovi momenton por la poŝtaĵoj,
			en tiu magazeno, ĉar la personoj, kiuj tie laboras, ne estas sufiĉe
			multaj rilate al la laboro, kiu devas esti farata.</p>
			<p>
			La demando, kiun mi starigas al mi, estas: kial diable oni sendis tiel
			gravan planon per la poŝto ? Tiuj, kiuj sendis ĝin, certe sciis, ke
			spionoj interesiĝos pri ĝi. La spionoj povus havi kunlaboranton en
			la poŝtejo, en la paperejo aŭ aliloke. Tiuj, kiuj sendis la planon,
			agis plej malserioze. La afero estas tiom pli nekomprenebla, ĉar oni
			sciis, ke tiu plano interesas same la dekstrulojn kiel la
			maldekstrulojn. Tiu papero havis — oni diras al ni — internacian
			gravecon. Kaj oni sendas ĝin poŝte al papermagazeno ! Konsentite, en
			la papervendejo, nekonate, kaŝe troviĝas unu el la ĉefaj
			kunlaborantoj de la Sekreta Servo, sed tamen !</p>
			<p>
			Stranga maniero agi, ĉu ne ?</p>
			<p>
			Nu, kiel mi diris al vi, Ivo tute malkonsentas kun la policaj ideoj
			ĉi-rilate. Tiutage, li iris aĉeti panon en la panejo, kiu staras tuj
			apud la papervendejo, kaj li tie troviĝis, kiam la suspektato
			envenis, kaj ankaŭ kiam tiu foriris kaj eniris la apudan magazenon
			por aĉeti siajn papersakojn.</p>
			<p>
			La polico opiniis tre grava la trovon de eta-etaj panpecetoj en la
			papervendejo, ĉe la maldekstra flanko, apud la meblo, pri kiu oni
			tiom parolas. Kiam ĝi eltrovis, ke la suspektato iris aĉeti panon
			tuj antaŭe, ĝi ege kontentis, kvazaŭ tiu malkovro donus respondon
			al la multaj demandoj, kiujn oni povas starigi al si en tiu stranga
			afero. Kial tiom da bruo pri tio ? La suspektato neniam neis, ke li
			iris de la panejo al la papermagazeno.</p>
			<p>
			Ivo estis en tiu panvendejo kaj diskutis kun la vendistino. Li
			diskutadis longe, ĉar li havas al ŝi amkomenceton kaj plezure
			longigis sian restadon apud ŝi. Tiu kompatinda homo, kiu poste
			aĉetis la papersakojn, do estis en la panejo, sed lia ĉeesto tie ne
			sufiĉas por povi diri, ke li faris ion malbonan poste en la apuda
			magazeno, ĉu ? Kiu povas diri, ke unu el la vendistoj ne havis pecon
			da pano en la paperejo ?</p>
			<p>
			Ivo bone rigardis la personon, kiun la polico poste eksuspektis. Iu,
			kiu volas fari ion suspektindan, ne agas tiamaniere, li diris.</p>
			<p>
			Kion ? Ĉu vi ne sciis, ke Ivo ametas la junan panvendistinon ? Nu, tio
			estas fakto. Ili iris kune trinki teon en «La dolĉa vivo». Ĉu vi
			konas ? Estas tiu tetrinkejo, kie ili havas kvardek kvar specojn de
			teo. Ĝi troviĝas dekstre de la Ĉefa Poŝtoficejo. Li sidis tie kun
			sia panvendistino, kiam la suspektato envenis la tetrinkejon, portante
			la papersakojn, kiujn li aĉetis antaŭ kelkaj minutoj. Estis la horo,
			kiam ĉiuj magazenoj fermiĝas. Kaj oni suspektas tiun viron ĝuste
			ĉar neniu plu venis en la papervendejon inter lia foriro kaj la
			momento, kiam oni fermis la magazenon.</p>
			<p>
			Nu, mi ne diras, ke Ivo tute ne povus miskompreni la faktojn. Sed
			miaopinie li estas plej fidinda homo. Mi kredas lin multe pli ol la
			policon.</p>
			<p>
			Fakte, la plej stranga afero, en lia raporto al mi, estas, ke, en kiu
			ajn magazeno aŭ trinkejo li troviĝas, tuj post li envenas la
			suspektata persono. Kvazaŭ tiu sekvus lin. Mirige, ĉu ne ? Tamen,
			Ivo ne estas aventurulo, kiu enmiksus sin en spionajn agadojn. Mi
			demandos lin, kion li opinias pri tiu fakto, ke la papersakulo tiom
			sekvis lin. Mi ne rimarkis la aferon, kiam li raportis al mi tiujn
			okazaĵojn hieraŭ. Nur rakontante al vi, mi ektrovis tion miriga.</p>
			<p>
			Alian informon mi devos ricevi de li. Mi devos demandi lin, kie li
			aĉetas tiujn dolĉaĵojn, kiujn li hieraŭ alportis. Estas speco de
			ĉokoladhava sukeraĵo, tre dolĉa, kion mi ege ŝatas, kaj mi ŝatus
			scii, kie oni ilin vendas. Mi bedaŭras, ke restas neniu plu. Mi jam
			finis la tutan saketon, tiom bonaj mi ilin trovis. Jes, bedaŭrinde,
			nenio postrestas el ili. Se vi provus ilin, vi trovus ilin bonegaj.</p>
			<p>
			Eble ne, fakte, ĉar niaj preferoj tiom malsamas. Estas stranga speco
			de ĉokolada dolĉaĵo. Ion similan mi neniam ricevis aŭ aĉetis
			antaŭe. Ne estas tro da ĉokolado, sed certe multe da sukero, tiel ke
			ĝi estas dolĉega. Jes, bonegaj dolĉaj aĵetoj tiuj sukeraĵoj
			estas.</p>
			<p>
			Kiel diable Ivo faras por trovi tiajn nekutimajn, sed bonegajn,
			aferojn ? Vere, li estas karulo, eĉ se liaj okuloj rigardas
			malsamflanken, kaj se lia nazo estas ridinde mallonga. Vi samopinias
			kun mi, ĉu ne, Johana ?</p>
			
			<a id="dua" class="scrollspy"></a>
			<h3>Du raportoj pri vendado</h3>
		
			<p>Sinjoroj, mi bedaŭrinde devas diri, ke la raporto pri la vendado de
			dolĉaĵoj tute ne estas fidinda. La funkciulo, kiu faris ĝin, estis
			tro memfida. Li konsideris fakte nur unu specon de dolĉaĵoj —
			tiujn, kiuj enhavas ĉokoladon — kaj li imagis, ke li povas esprimi
			ĝustajn opiniojn deirante nur de la informoj, kiujn li havigis al si
			pri tiuj.</p>
		
			<p>Estas vere, ke ĉokolado estas unu el la ĉefaj aĵoj, kiuj eniras en
			la faradon de dolĉaĵoj. Aŭ almenaŭ, oni povas diri, ke ĉokolado
			estas grava enmetaĵo — en dolĉaĵojn — se oni konsideras la
			demandon tutnacie. La afero montriĝas malsama, se oni konsideras nur
			unu urbon, kelkajn urbojn, la tutan nacion, kelkajn naciojn aŭ la
			tutan mondon. Inter tiu, tiu ĉi kaj tiu alia urbo, oni povas rimarki
			seriozajn malsimilecojn en la maniero kunmeti la dolĉaĵojn. Mi do
			petas vin ne forgesi, ke, en ĉi tiu diskuto, ni restas sur la
			tutnacia kampo. La situacio tute certe malsamus ankoraŭ pli, se ni
			rigardus ĝin internacie.</p>
		
			<p>Kvankam do — se ni konsideras la tutan nacion — ni devas konsenti
			pri la ĉefa loko, kiun okupas la ĉokoladhavaj dolĉaĵoj inter la
			tuto de la dolĉaĵoj, tamen ni ne povas akcepti raporton, kiu diras
			eĉ ne unu vorton pri, ekzemple, dolĉaĵoj faritaj el pura sukero kun
			iu aŭ alia aldonaĵo neĉokolada.</p>
		
			<p>La aferoj ne estas tiel simplaj, kiel ilin klarigas ĉi tiu raporto,
			kaj se ni deziras scii, kiel la situacio vere estas, ni devas proponi
			al iu alia, al iu pli fidinda, la taskon raporti pri la tutnacia
			dolĉaĵvendado.</p>
		
			<p>Kaj nun, se neniu petas la parolon rilate al ĉi tiu demando...
			ŝajnas, ke ne... neniu mano altiĝas... se neniu deziras esprimi sian
			opinion pri la dolĉaĵdemando, mi proponas, ke ni ekdiskutu la duan
			raporton, tiun pri la vendado de pano.</p>
		
			<p>Ankaŭ sur tiu kampo ne estas tiel facile ricevi la deziratajn
			informojn. Mi ne parolas pri tia flanka demando kiel la fakto, ke la
			peto de la panfaraj laboristoj pri mallongigo de la nokta labortempo
			ricevis jesan respondon. Mi konsideras tiun demandon flanka. Kaj mi ne
			priparolos ĝin, kvankam ni nun scias, ke estas rilato inter tiu
			decido kaj la malaltiĝo rimarkita ĉi-urbe en la vendado de la plej
			kutimaj specoj de pano. Evidentiĝis, ke la horo, ekde kiu la pano
			estas aĉetebla, frumatene, havas pli grandan gravecon ol oni antaŭe
			imagis.</p>
		
			<p>Mi do diris, ke mi ne parolos nun pri la kampo de laborrilatoj. Mi
			volas komence tuŝi nur la monan aspekton de la demando. Kaj
			ĉi-rilate mi povas diri nur unu aferon, nome, ke la situacio estas
			plej serioza.</p>
		
			<p>Vi povas fidi min, sinjoroj, ĉar mi konsideris tiun raporton tre
			atente, kaj tre zorgiga ĝi estas. Vi certe konatiĝis kun la
			informoj, kiujn enhavas la raporto pri panvendado, kaj vi verŝajne
			samopinias kiel mi, ĉu ne ? Tiu raporto estas ege interesa, sed tute
			ne trankviliga. Kiu ajn portas en sia koro la interesojn de la nacio
			sentos la saman zorgemon. Jen estas serioza situacio, pri kiu estas
			urĝe okupiĝi.</p>
		
			<p>La panistoj plendas, ke ili ne ricevas sufiĉe da mono por la vendata
			pano, almenaŭ kiom koncernas la plej ofte vendatan specon, sed kion
			ni povus fari sen endanĝerigi la tutan nacian vivon ?</p>
		
			<p>Ni ne trovis manieron kunordigi la malsamajn emojn de la koncernatoj,
			kaj ni troviĝas en sakstrato<A HREF="#notoj">[1]</A>, en sen-elira situacio. La etaj
			panvendistoj petas ion, la ĉiovendejoj<A HREF="#notoj">[2]</A> kaj aliaj grandegaj
			magazenoj volas ion alian, tiuj, kiuj aĉetas la panon havas ankoraŭ
			alian deziron, kaj kiam la panfaraj laboristoj intervenis dirante, ke
			neniu el miaj proponoj estas kontentiga por ili, mi troviĝis subite
			kun tia kapdoloro, ke mi tute simple ne plu povis pensi.</p>
		
			<p>Mi, kiu ĉiam ŝategis panon, jam plurajn tagojn vivas sen tuŝi eĉ
			unu panpecon. Kaj la nura sono de la vorto «pano» agas al mi
			malsanige.</p>
		
			<p>Trovi respondon al tiuj demandoj estas pli ol oni povas peti de mi
			sola. Mi do kunvokis vin al ĉi tiu kunsido, por ke ni diskutu plej
			serioze la demandon. Mi esperas, ke dank' al via helpo, estos eble
			surpaperigi proponojn, kiujn la tuta nacio povos akcepti. Nur unu
			afero estas certa, nome, ke se iuj enpoŝigos pli da mono ol antaŭe,
			sekve de niaj decidoj, tiuj estos nek vi, nek mi.</p>
		
			<p>Kaj nun, se vi permesas, sinjoroj, mi trinkos iom da akvo.</p>
		
			<a id="notoj"></a>
			<p class="rimarko"><strong>NOTOJ</strong> : 
			<ol>
				<li><span class="eo">Sakstrato</span> : strato sen elirejo (kiel sako, el kiu io povas eliri
				nur tra la loko, tra kiu ĝi eniris).</li>
				<li><span class="eo">Ĉiovendejo</span> : vendejo, en kiu oni vendas multajn malsamspecajn
				aferojn (ekzemple : manĝaĵon, vestaĵojn, librojn, televidilojn...)</li>
			</ol>
			

		<?php 
		recapitulatif_lecon_avant_envoi('GR',$leciono,$persono_id);
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