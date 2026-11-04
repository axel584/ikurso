-- #1087 : contenu des sections du cours PP dans lecioneroj.enhavo, extrait de eo/ppp/ par sql/eltiri-enhavon.php.
-- La section est retrouvée par cours, numéro de leçon et ordre : le script vaut pour la prod et peut être rejoué.
-- lecioneroj est en MyISAM (pas de transaction) : en prod, sauvegarder d'abord la table.
SET NAMES utf8mb4;

-- leçon 1, section 2
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<div class="vortlisto row">
				<div class="col s12 m6">
					<p><span class="eo">ago</span>: io, kion oni faras.</p>
					<p><span class="eo">benzino</span>: hejtaĵo por irigi aŭtomobilon.</p>
					<p><span class="eo">certa</span>: malhezitema.</p>
					<p><span class="eo">dana</span>: rilata al la lando danujo.</p>
					<p><span class="eo">dato</span>: tago, en rilato al la tempo.</p>
					<p><span class="eo">efektiva</span>: reala.</p>
					<p><span class="eo">fabelo</span>: historio pri mirigaj okazaĵoj.</p>
					<p><span class="eo">ferio</span>: libertempo.</p>
					<p><span class="eo">fidi</span>: plenkredi pri iu aŭ io.</p>
					<p><span class="eo">frosti</span>: esti tre malvarma.</p>
					<p><span class="eo">froti</span>: preme movi ion sur io alia.</p>
					<p><span class="eo">glaso</span>: ujo, el kiu oni trinkas.</p>
					<p><span class="eo">gliti</span>: facile moviĝi sur grasa supraĵo.</p>
					<p><span class="eo">hejti</span>: varmigi ĉambron aŭ loĝejon.</p>
					<p><span class="eo">jako</span>: vestaĵo por la supra parto de la korpo.</p>
					<p><span class="eo">konsideri</span>: zorge atenti ion.</p>
					<p><span class="eo">kapti</span>: ekteni.</p>
					<p><span class="eo">kosto</span>: pago necesa por ricevi ion.</p>
					<p><span class="eo">lito</span>: aĵo, sur kiu oni dormas.</p>
					<p><span class="eo">marmoro</span>: bela blanka ŝtono.</p>
					<p><span class="eo">materialo</span>: krudaĵo necesa por plenumi ion.</p>
				</div>
				<div class="col s12 m6">
					<p><span class="eo">mediti</span>: pripensadi.</p>
					<p><span class="eo">metropolo</span>: granda urbego.</p>
					<p><span class="eo">moderna</span>: nuntempa.</p>
					<p><span class="eo">modesta</span>: malfiera.</p>
					<p><span class="eo">nu</span>: vorto uzata por atentigi pri tio, kio sekvos.</p>
					<p><span class="eo">ordinara</span>: kutima.</p>
					<p><span class="eo">paŭzo</span>: mallonga hezito.</p>
					<p><span class="eo">puto</span>: subterejo, el kiu oni levprenas kutime akvon.</p>
					<p><span class="eo">provizi</span>: havigi necesaĵojn.</p>
					<p><span class="eo">rakonti</span>: diri historion.</p>
					<p><span class="eo">rano</span>: vivantaĵeto, kiu loĝas sambone teron kaj akvon.</p>
					<p><span class="eo">ripozi</span>: resti nenion faranta, eble dormanta.</p>
					<p><span class="eo">ruli</span>: ĉirkaŭmove antaŭenigi ion.</p>
					<p><span class="eo">sobra</span>: malebria.</p>
					<p><span class="eo">speciala</span>: intencata por unu celo.</p>
					<p><span class="eo">supozi</span>: kredi ion vera.</p>
					<p><span class="eo">ŝultro</span>: plej supra trunkoparto.</p>
					<p><span class="eo">ŝvebi</span>: resti senmove pendanta, kvazaŭ fluge.</p>
					<p><span class="eo">teruro</span>: timego.</p>
					<p><span class="eo">urĝi</span>: plirapidigi.</p>
					<p><span class="eo">vojaĝi</span>: iri aŭ veturi por atingi lokon ne proksiman.</p>
				</div>
			</div>'
  WHERE l.kurso = 'PP' AND l.numero = 1 AND le.ordo = 2;

-- leçon 1, section 1
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<div class="rakonto">
				<h3>TRE MODERNA FABELO</h3>
							
				<p>Tiun ĉi eksterordinaran kaj freŝdatan fabelon mi nur peras transigante la respondecon al mia tre fidinda amiko — ni nomu lin Sen Dubo — kiu la unuan fojon rakontis ĝin ĉe blanka tablo, kie ne mankis glasoj.</p>
				<p>“Aŭdu nur”, — diris Sen. “Mia amiko, Ripsrops, veturis antaŭ nelonge per sia beleta ĉaro, vi scias, tiu Mercedes, inter Arĥangelsk kaj Kopenhago sur la ŝoseo. Sed li jam ne estis malproksime de Kopenhago, kiam ĉe benzinputo, post kiam li aĉetis hejtmaterialon kaj dum la agado de la benzinulo, li iom promenis. Subite li aŭdis voĉon sub si:</p>
				<p>“Sinjoro Ripsrops, sinjoro, bonvolu atendi…”</p>
				<p>Ripsrops rigardis malsupren kaj vidis ranon ruliĝantan al li. Li ne estas speciala ŝatanto de ranoj, sed io kaptis lin en la afero.</p>
				<img class="flot-d l-40 s-50" style="margin: 0 -1em 1em 1em;" src="eo/ppp/bildoj/rano.png" />
				<p>“Ĉu mi komprenas rane? Kaj ĉu vi povas paroli? Ĉu vi konas min?”</p>
				<p>La rano respondis:</p>
				<p>“Jes, kara sinjoro Ripsrops, mi povas paroli, sed mi ne parolas rane, sed dane. Mi petas vin, sinjoro Ripsrops… Mi frostas. Metu min en vian poŝon. Ĉu mi rajtas kunveturi al Kopenhago? Por bonfaro vi ricevos bonon!”</p>
				<p>Ripsrops tre miris, precipe, ke la rano frostas, kiam estas varme, sed rano estas rano, kaj ĉar la petita varmo ne kostos al li elspezojn, li metis la ranon en sian poŝon. (… Kion vi diras? Jes… Jes, li estis sobra kiel mi.)</p>
				<p>Iom post iom la rano iĝis hejmeca de Ripsrops. Ĝi petis eĉ manĝon kaj iom da akvo, kiujn Ripsrops, kiu konsideris la ranon cetere tre modesta, donis al sia kunvojaĝanto. Tiel ili alvenis vespere al la metropolo, eĉ al la loĝejo de Ripsrops, ĉar la rano petis ripozlokon. Ripsrops malfermis la pordon de sia loĝejo kaj tiam la rano denove ekparolis:</p>
				<p>“Kara sinjoro Ripsrops, mi estas tiel dormema. Ĉu mi rajtus dormi en tiu lito?”</p>
				<p>Ripsrops ekmeditis. Estis la unua fojo, ke iu fremdulo volis dormi en ilia familia lito, sed efektive sinjorino Ripsrops estis for kaj tiu ĉi mirinda rano estis tiel dormema. Li metis la ranon en la apudan liton kaj demetis sian jakon kaj komencis pretigi sin por la nokta trankvilo.</p>
				<img class="flot-g l-50 s-100" style="margin: 0 0 0 -1em;" src="eo/ppp/bildoj/regxinido.png" />
				<p>Li volis jam mallumigi, kiam li alrigardis la apudan liton kaj tiam li rimarkis, ke el la stranga rano fariĝis belega reĝidino, kiu supozeble apenaŭ estis provizita per noktovestoj. Lia rigardo ekglitis sur la marmoraj ŝultroj de la reĝidino. Ripsrops tute teruriĝis. Li frotis la okulojn. La reĝidino alrigardis lin kaj diris: “Ri i-ipsĉjo!”</p>
				<p>Sen Dubo, t.e. la rakontanto, nun faris longan paŭzon kaj sekvis iom malcerte la ŝvebon de la cigareda fumo.</p>
				<img class="flot-d l-30 s-50"  src="eo/ppp/bildoj/virino.png" style="margin: 0 0 0 -1em;">
				<p>Mi urĝis: “Nu, kiel estis poste?”</p>
				<p>Sen alrigardis min kaj diris: “Ĉu vi vere kredas tiun ĉi historion?”</p>
				<p>“Kredi? Tute ne. Kial mi kredu?”</p>
				<p>“Nu ankaŭ sinjorino Ripsrops, kiu tiumomente realvenis neatendite el sia feriado en Polinezio kaj malfermis la pordon de la dormoĉambro, ne kredis ĝin. Eĉ ne unu vorton…”</p>
				
				<p><b>F Szilágyi</b> el <i>Norda Prismo</i></p>
			</div>
			<p class="creditphoto">Bildoj:<br>@Ladybug /freepik<br>@v.ivash /freepik<br>@kues1 /freepik</p>'
  WHERE l.kurso = 'PP' AND l.numero = 1 AND le.ordo = 1;

-- leçon 1, section 3
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##EKZERCO:104##
			##EKZERCO:105##
			##EKZERCO:106##'
  WHERE l.kurso = 'PP' AND l.numero = 1 AND le.ordo = 3;

-- leçon 1, section 4
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##EKZERCO:107##
			##EKZERCO:108##
			##EKZERCO:109##'
  WHERE l.kurso = 'PP' AND l.numero = 1 AND le.ordo = 4;

-- leçon 1, section 5
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##RESUMO##'
  WHERE l.kurso = 'PP' AND l.numero = 1 AND le.ordo = 5;

-- leçon 2, section 2
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<div class="vortlisto row">
				<div class="col s12 m6">
					<p><span class="eo">bindo</span>: eksteraĵo de libro.</p>
					<p><span class="eo">ĉifi</span>: malglatigi.</p>
					<p><span class="eo">dio</span>: supernatura reganta estaĵo.</p>
					<p><span class="eo">diversa</span>: malsameca.</p>
					<p><span class="eo">esenco</span>: la ĉefa, plej necesa parto de io.</p>
					<p><span class="eo">falsa</span>: malvera.</p>
					<p><span class="eo">frapi</span>: bateti.</p>
					<p><span class="eo">glata</span>: priskribas ion, sur kiu mano facile glitas.</p>
					<p><span class="eo">instrui</span>: lernigi.</p>
					<p><span class="eo">kadro</span>: tio, per kiu oni ĉirkaŭigas, ekzemple fotografaĵon.</p>
					<p><span class="eo">klara</span>: malkonfuza.</p>
					<p><span class="eo">klaso</span>: aro de lernantoj, kiuj lernas kune.</p>
					<p><span class="eo">litero</span>: alfabeta signo.</p>
					<p><span class="eo">ludi</span>: fari ion por nura plezuro.</p>
					<p><span class="eo">matura</span>: plenkreskinta, plenpova.</p>
				</div>
				<div class="col s12 m6">
					<p><span class="eo">onklo</span>: frato de la patro aŭ patrino.</p>
					<p><span class="eo">pardoni</span>: malsevere trakti iun.</p>
					<p><span class="eo">plekti</span>: regule interkunigi laŭ longe, ekzemple harojn.</p>
					<p><span class="eo">problemo</span>: malfacila demando.</p>
					<p><span class="eo">psalmo</span>: speciala religia kanto.</p>
					<p><span class="eo">religio</span>: kredo pri supernaturaj aferoj.</p>
					<p><span class="eo">robo</span>: longa virina vesto.</p>
					<p><span class="eo">serioza</span>: zorge atent(ind)a.</p>
					<p><span class="eo">spegulo</span>: glata, brila aĵo, per kiu oni povas vidi sin.</p>
					<p><span class="eo">ŝlosi</span>: fermi, ekzemple pordon, per speciala ilo.</p>
					<p><span class="eo">ŝpari</span>: atente reteni, ekzemple monon.</p>
					<p><span class="eo">truo</span>: malplenaĵo en io.</p>
					<p><span class="eo">viziti</span>: ĉeesti; regule aliradi.</p>
					<p><span class="eo">zono</span>: io, kion oni metas ĉirkaŭ la korpomezon.</p>				
				</div>
			</div>'
  WHERE l.kurso = 'PP' AND l.numero = 2 AND le.ordo = 2;

-- leçon 2, section 1
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<div class="rakonto">

				 <h3>LA PSALMARO</h3>
				
				<p>Kiam Anna-Klara en sia sepa jaro vizitadis la unuan klason, iun tagon ŝi petis de mi psalmlibron.</p>
				<p>— Kial? – mi demandis.</p>
				<p>— Ĉar ankaŭ Gustavo havas.</p>
				<p>— Povas esti, — mi respondis, — sed mi neniam aŭdis, ke tiel etaj knabinoj havus psalmaron.</p>
				<p>— Sed ankaŭ Gustavo havas.</p>
				<img class="flot-d l-50 s-50" src="eo/ppp/bildoj/psalmaro.png"><p>Kion fari, mi iris aĉeti psalmaron.</p>
				<p>Mi trovis multe da diversaj psalmlibroj, malgrandajn, belajn librojn kun mola bindo, orkadraj paĝoj kaj ankaŭ grandajn librojn kun belaj, simplaj literoj. Mi aĉetis, kiu estis la malplej kosta, por ke la infano bontempe lernu la ŝparemon, precipe en tiaj seriozaj aferoj.</p>
				<p>Mi skribis la nomon de Anna-Klara en la libron kaj posttagmeze transdonis ĝin al ŝi. Ŝi ege ekĝojis, prenis la libron kaj diris:</p>
				<p>— Ĝi estas ĝuste tia, kia tiu de Gustavo.</p>
				<p>Mi eksidis kaj iomete meditadis pri la okazintaĵoj, kaj poste — la dioj pardonu min — mi iris al la pordo kaj enokulumis tra la ŝlosiltruo.</p>
				<p>Anna-Klara staris meze de la ĉambro, antaŭ la granda spegulo.</p>
				<img class="flot-d l-45 s-100" src="eo/ppp/bildoj/knabino-spegulo.jpg"><p>Kun la malfermita psalmaro ŝi kantis falsvoĉe. De tempo al tempo ŝi rigardis al la spegulo, ĉu ŝia zono bone kuŝas? Kelkfoje ŝi ordigis sian harplekton, kelkfoje glatigis ĉifon sur la robo, kiu ne estis bonorde sur ŝia ŝultro.</p>
				<p>Subite mi surprizis ŝin per pordmalfermo kaj eniris:</p>
				<p>— Kara Anna-Klara, — mi diris — psalmaro estas io multe pli serioza, ol vi imagas. Oni ne staru antaŭ spegulo por kanti el psalmaro. La psalmolibro ne estas por ludi per ĝi. Kiam vi estos pli aĝa, la instruist-onklino klarigos al vi, kio estas esence psalmaro.</p>
				<p>Anna-Klara sidis serioza kaj silenta. Ŝi rigardis sincere al mi kaj decidvoĉe diris:</p>
				<p>— Mi volas diri al vi nur unu aferon: oni ne eniras ĉambron antaŭ ol frapi.</p>
				<p>Mi ne kredas, ke Anna-Klara estas jam matura por religiaj problemoj.</p>
				
				<p><b>Hasse Z.</b> el la sveda: <b>Andreo Gauder</b> (el <i>Literatura Mondo</i>)</p>
			</div>
			<p class="creditphoto">Bildo: @bearfotos /freepik</p>'
  WHERE l.kurso = 'PP' AND l.numero = 2 AND le.ordo = 1;

-- leçon 2, section 3
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##EKZERCO:110:eo####EKZERCO:111:eo##'
  WHERE l.kurso = 'PP' AND l.numero = 2 AND le.ordo = 3;

-- leçon 2, section 4
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##EKZERCO:112:eo####EKZERCO:113:eo####EKZERCO:114:eo####EKZERCO:115:eo####EKZERCO:116:eo####EKZERCO:117:eo##'
  WHERE l.kurso = 'PP' AND l.numero = 2 AND le.ordo = 4;

-- leçon 2, section 5
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##RESUMO##'
  WHERE l.kurso = 'PP' AND l.numero = 2 AND le.ordo = 5;

-- leçon 3, section 2
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<div class="vortlisto row">
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
			</div>'
  WHERE l.kurso = 'PP' AND l.numero = 3 AND le.ordo = 2;

-- leçon 3, section 1
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<div class="rakonto">

			<h3>LA ŜTORMO</h3>
			
			<p>Kiam mi eniris la ĉefstraton de la malgranda vilaĝo, ĝi estis tute senhoma, krom ke unu maljunulo per la helpo de marŝbastono malrapide iris en la direkto al la haveno kaj mi sciis, ke la vilaĝanoj troviĝos tie, kien li iras. Estas tre strange, kiamaniere la fiŝkaptistoj, kiuj vivas per la maro, ekkonscias per ia telepatio, kiam danĝero minacas ŝipon, propran aŭ fremdan.</p>
			
			<p>Mi estis vidinta la ŝipeton tra la fenestro de mia domo, kiu staras sur la klifsupro ne malproksime de la vilaĝo. Mi sidis kun la edzino ĉe la tetablo, kiam ŝi subite ekkriis: “Ĉu tio estas ŝipeto, kion mi vidas?”</p>
			<p>Kaj kvankam estis apenaŭ kredeble, ke ŝi estu prava, tamen ja estis ŝipeto, malgranda fiŝkaptada ŝipeto, de la tipo ĝenerale uzata de la fiŝkaptistoj en la vilaĝoj sur la orientskota marbordo. Oni povis vidi ĝin nur intermite, kiam dum momento ĝi leviĝis al la supro de giganta marondo, antaŭ ol denove malaperi de la vido.</p>
			
			<p>Mi estis elirinta el la domo por iri al la deklivo apud la haveno, ĉar mi sciis, ke ĉiuj vilaĝanoj estos tie — ne por helpi, ĉar helpo estus neebla en tia ventego kia ĉi tiu, kaj ne por trovi plezuron en la vidotaĵo, ĉar la vidaĵo estas korŝira, kiam homoj baraktas por savi la vivon kontraŭ furiozantaj elementoj, sed nur ĉar ili ne povus resti hejme, ĉar ili estus tirataj al la scenejo kvazaŭ de magneto.</p>
			
			<p>La ŝtormo estis komenciĝinta senaverte. La antaŭtagmezo estis griza tamen senventa, ĝuste tia tago, kian ofte vidas en la monato novembro tiuj, kiuj loĝas sur la bordo de la Norda Maro: sed antaŭ nur unu horo ekblovis la ventego kun la subiteco de neatendita vangofrapo, kaj la ondoj fariĝis pli kaj pli altaj kaj grandaj.</p>
			
			<p>Kiam mi preterpasis la maljunulon — tiel malfortan, ke li apenaŭ povis stari kontraŭ la forto de la vento — mi kriis al li: “Ĉu vi scias, kia ŝipeto estas tiu?”</p>
			
			<p>“Ne”, li respondis, “sed ne estas kredeble, ke ĝi estu unu el niaj ŝipetoj. Ĉiuj niaj estis ĉe la fiŝejo preter la insulo, kaj sendube ili ĉiuj rapidis al la insula haveno tuj kiam oni aŭdis la radian averton pri ventego antaŭ du horoj. Neniu el la ŝipestroj riskus reveni ĉi tien dum ventego.”</p>
			
			<p>Mi venis al la deklivo super la haveno. La muroj de la haveno mem kaj la deklivo super ĝi estis kovritaj de grupoj de la vilaĝanoj. Tiuj, kiuj staris sur la deklivo, fikse rigardis tiudirekten, kie de tempo al tempo videblis eta nigra punkto, apenaŭ videbla inter la montecaj ondoj kiuj ĉirkaŭis ĝin. Tiuj, kiuj staris ĉe la haveno, nur atendis, atendadis en silento. Tiaj okazaĵoj kompreneble ne estas nekonataj en la marbordaj vilaĝoj, sed en ĉi tiu silento troviĝis io, kian mi neniam antaŭe sentis.</p>
			
			<img class="flot-d l-50 s-100" src="eo/ppp/bildoj/sxtormo1.jpg"><p>“Kio estas?” mi demandis al viro, kiu staris apude kaj kun kiu mi iomete konatiĝis. Li ĵetis al mi unu ekrigardon, kaj tuj poste liaj okuloj reserĉis la etan nigran punkton. La severeco de lia vizaĝo ne ŝanĝiĝis, kaj per sentrema voĉo li diris, “Tio estas mia filo: oni ĵus ricevis radian mesaĝon de la insulo, sciigantan, ke la ceteraj ŝipetoj, kiuj rifuĝis en la tiean havenon, estas en bona ordo, sed ke la <i>Ora Brilo</i> foriris de la aliaj ŝipetoj por reveni hejmen, unu horon antaŭ ol venis la radia ventegaverto.”</p>
			
			<p>Tiam mi komprenis, kial mi sentis ion nekutiman en la silento de la homamaso. De kiam mi ekloĝis en la vilaĝo, neniam danĝero trafis iun el la ŝipetoj apartenantaj al ĝi, sed tio estis unu el “niaj ŝipetoj”, kaj ĝia estro estis populara junulo, kiu edziĝis antaŭ nur du semajnoj. Kune kun li en la ŝipeto, mi sciis, estis liaj du pli junaj fratoj kaj du kuzoj: ĝi estis, laŭ nia dirmaniero, “familia ŝipeto”.</p>
			
			<p>La ŝipeto ŝajnis alproksimiĝi al ni laŭ eksterordinara rapideco. Vere ne tiel estis: ĝi venis malrapide, sed pro la fakto, ke ĝi alproksimiĝas al ebla katastrofo, ĝi ŝajnis veturi rapidege. Kaj ja katastrofo estis ne nur ebla sed verŝajna. Nia haveno ĉiam estas malfacile enirebla kiam la maro estas malkvieta, kaj ĉar la ondoj tiam kuris tiel furioze, estus ago de frenezulo provi eniri.</p>
			
			<p>“Dio ne permesu, ke ili provu eniri ĉi tien”, subdiris maljunulo apudstaranta, “la sola ŝanco estas preterveturi — iri laŭ la ventego ĝis ĝi forvelkas. Se ili provos eniri, la ondoj certe ĵetos ilin sur la rokojn ĉe la okcidenta promontoro, kaj la ŝipeto estos disfrakasita.”</p>
			
			<p>Ni neniam scios kial, sed la ŝipeto daŭrigis sian vojon kaj venadis rekte al ni. Mi malsupreniris al la haveno. Ĉi tie kelkaj el la homoj pretigis raketan aparaton, por provi pafsendi ŝnuron al la ŝipeto se tiu venos sufiĉe proksimen. Estis ago tute senutila, kaj ĉiuj tion sciis. La ŝnuro tute ne povus bori vojon tra tia ventego, kaj eĉ se al ĝi prosperus fari tion, ĝi tuj rompiĝus kiam la pezo de la ŝipeto, pelata de tiaj grandaj ondoj, plenstreĉus ĝin. Sed la laboro pretigi la aparaton estis preferinda al la nura atendado.</p>
			
			<p>Ŝajnis, ke la ŝipeto pli kaj pli rapide alproksimiĝas, ĝis fine ni povis vidi la homojn sur la ferdeko. Ĉiuj staris tenante la direktilon, pretaj movi ĝin per la tuta forto tuj kiam la ŝipestro, kiu staris en la ferdekmezo juĝante la distancon, donos la ordonon gvidi la ŝipeton trans la ondojn al la havena enirejo. Estis vana espero; la ŝipeto rifuzis respondi al la direktilo; ĝi estis kvazaŭ en la senkompata mano de giganto, kiu rifuzis liberigi ĝin sed pelis ĝin nerevokeble preter la enirejon. Dum ĝi preterdrivis la atendantan homamason la juna ŝipestro levis la manon:  ŝajnis al mi, ke li ne faras salutgeston, sed nur senkonscian geston de rezignacio.</p>
			
			<p>Ĉirkaŭ mi viroj kaj virinoj falis surgenuen kun manoj suprenlevitaj. Larmoj sin miksis kun la pluveroj sur la vizaĝoj de la virinoj, sed la viroj ne ploris. Ili staris kun nekovritaj kapoj kaj palaj senesprimaj vizaĝoj, tamen profunde en iliaj koroj bolegis malamo al ĉi tiu monstro, kiu prenas antaŭ iliaj okuloj ankoraŭ kvin viktimojn en la eterna lukto inter ĝi kaj la homaro.</p>
			
			<div style="background-image: url(''bildoj/sxtormo2.jpg'');background-position: 100% 100%;background-size:contain;background-repeat: no-repeat;padding-bottom:25em;margin: 0 -1em 0 -1em;padding-left: 1em;padding-right: 1em;">
				<p>Ni trovis iliajn kadavrojn en la sekvanta mateno, kiam forpasis la ŝtormo kaj la maro estis denove trankvila, kaj ni enterigis la kvin en unu tombon sub la ombro de la malnova preĝejo ĉe la supro de la havena deklivo, kiu alrigardas al la maro, sur kiu ili vivis kaj en kiu ili mortis. Kune ili dormas tie, kaj super ilia eterna restadejo aŭdiĝas la sovaĝa muĝado de la Norda Maro kaj la malgaja kriado de la mevoj.</p>
				<p><b>John S. Dinwoodie</b> (el <i>Esperanto en Skotlando</i>)</p>
			</div>
		</div>
		
		<p class="creditphoto">Bildoj:<br>Isabey Eugène, <i>Les Naufrageurs</i> (parto)<br>Stephen Davies /Adobe Stock</p>'
  WHERE l.kurso = 'PP' AND l.numero = 3 AND le.ordo = 1;

-- leçon 3, section 3
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##EKZERCO:118####EKZERCO:119##'
  WHERE l.kurso = 'PP' AND l.numero = 3 AND le.ordo = 3;

-- leçon 3, section 4
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##EKZERCO:120####EKZERCO:121####EKZERCO:122####EKZERCO:123####EKZERCO:124##'
  WHERE l.kurso = 'PP' AND l.numero = 3 AND le.ordo = 4;

-- leçon 3, section 5
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##RESUMO##'
  WHERE l.kurso = 'PP' AND l.numero = 3 AND le.ordo = 5;

-- leçon 4, section 1
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<div class="rakonto">
			<h3>CELSTACIO</h3>
 
 			<p>La stacieto estis malgranda kaj sufokaera. Sur la muroj enuis landkonigaj afiŝoj. La horloĝo malfunkciis. Ĝin strekis kruce gluitaj gazetstrioj. Sur la rando de apertita fenestro dormetis kato de fervojisto. Malantaŭ la kasa giĉeto homo suferis pro varmego. Li rekonsciiĝis nur je la voĉo de pasaĝero.</p>
			<img class="flot-d l-60 s-100" src="eo/ppp/bildoj/gicxeto.jpg"><p>– Kien?</p>
			<p>– Egale.</p>
			<p>– Per la klaso?</p>
			<p>– Egale.</p>
			<p>– Do eble Gzdzin?, demandis la kasisto. Li rigardis ne la pasaĝeron, sed fiksitan per kapnajleto horaron pri trajnoj trakurantaj lian stacieton.</p>
			<p>– Povas esti Gzdzin, konsentis la kliento.</p>
			<p>– Principe PKP <sup id="appel1"><a href="#note1">[1]</a></sup> devus koni la celstacion de siaj klientoj, grumbletis la fervojisto kaj reiris al la tableto, sur kiu kuŝis biletkajeroj. La kasisto estis malalta sekiĝinta olduleto. Li havis vulpecan vizaĝon de miopulo.</p>
			<p>– Do Gzdzin?</p>
			<p>– Gzdzin.</p>
			<p>– Tie estas nun malsvarme. Vi iras, sinjoro, ekzemple per vojo Z. Arbaro, vojetoj, vi plezure laciĝas per tiu arbaro. Vi povas kuŝiĝi ĉe la vojo, kuŝi kaj pensi nenion.</p>
			<p>– Bone, diris la pasaĝero, mi ne volas pensi.</p>
			<img class="flot-d l-40 s-50" src="eo/ppp/bildoj/trajnbiletoj.jpg"><p>La kasisto komencis plenigi blanketon.</p>
			<p>– Kombinata. Estos kombinata. Al Konopiski ekspreso kaj poste normala.</p>
			<p>– Ne, oponis la pasaĝero, ne povas esti kupeŝanĝo. Mi pensados pri tiu damna kupeŝanĝo kaj mi ja diris, ke mi ne volas pensi. Pri nenio.”</p>
			<p>– Aha, konsentis la kasisto.</p>
			<p>Li komencis skrapeti la kalvaĵon. Li studis la horaron, kvazaŭ li ne konus ĝin parkere.</p>
			<p>– Ĝis la tria dudek tri mi havas por vi, sinjoro, nenion sen kupeŝanĝo. Je la tria dudek tri iras laborista trajno al Wołów.”</p>
			<p>– Donu al Wołów, diris la pasaĝero.</p>
			<p>– Per la dua klaso?</p>
			<p>– Povas esti dua.</p>
			<p>– Mi donos al vi la unuan, diris la kasisto, en la dua povas esti plenplene. En Wołów estas hodiaŭ foiro.</p>
			<p>– Foiro? maltrankviliĝis la pasaĝero. Mi ne volas vian Wołów. Mi ne volas homamason. Mi volas kvieton. Sen la homa ridado, sen kvereloj, sen voĉoj. Sen virinoj, sen amikoj, sen infanoj. Damno kun tia kiel vi. Kasisto, kaj ne kapablas vendi bileton al homo.</p>
			<p>La fervojisto jesis kompreneme. Vere estis al li domaĝe, ke li ne scias helpi la pasaĝeron. Al liaj devoj apartenis ĝusta priservado de la PKP-aj klientoj. Li estis sperta kasisto. Dum sia vivo li certe vendis milionon da diversaj biletoj kaj la pasaĝerojn li havis diversajn. Li ankaŭ pri tiu ne miris. Estis nenio mirinda. Simple estis malbone al la ulo. Tiaj ne konas siajn celstaciojn. Ili fuĝas nenien.</p>
			<p>Li aliris la horaron kaj komencis serĉi. Li faris tion kiel gasto en restoracio. La trajna menuo de la malgranda stacieto estis aĉa. Ne estis tro por elekti: Jezowice, Kakolin, Barcz.</p>
			<p>– Mi havas, li diris kun kontento. Mi havas por vi Pustków. La kvina haltejo post Górów. Arbaro. Du kabanoj sume. De la staciestro kaj arbaristo. La arbaristo surda, maljuna. La virino gastama. Kaj lago. La lago ne kulturata, sovaĝa. Depost la tempo kiam oni donis ĝin al kooperativo ne estas fiŝistoj. Akva dezerto, ne lago. Povas esti al Pustkow.</p>
			<p>– Povas esti, diris la pasaĝero. Donu al tiu Pustków.</p>
			<p>– Per la dua? demandis la kasisto.</p>
			<p>– Per la unua, diris la pasaĝero.</p>
			<p>– Ne, meditis la fervojisto, ne valoras. Sep haltejoj, kaj la trajno malplena. Cetere la unua klaso entute ne estas en tiu vagonaro.</p>
			<p>– Donu la duan.</p>
			<p>La kasisto surnazigis okulvitrojn kaj komencis plenigi la duaklasan bileton al Pustków, kie estas lago, kvieto kaj la gastama virino de la duonsurda arbaristo, kaj kie oni pensas pri nenio. La pasaĝero apogis sin per la kubutoj je la kasa rando kaj rigardis kiel la fervojisto plenigas la bileton.</p>
			<p>Ĝuste tiam aliris lin knabino. Ŝi estis juna kaj tre bela.</p>
			<p>– Iru hejmen, ŝi diris al la homo, kiu ne konis la celstacion de sia vojaĝo. – Panjo ploras.</p>
			<p>La kasisto ĉesis plenigi la bileton. Li malfermis la tirkeston, prenis liniilon, almetis ĝin al la biletaj pintoj kaj kruce trastrekis ĝin per dikaj ruĝaj linioj.</p>
			
			<p><b>Czeslaw Ostankowicz</b>  el la pola: <b>Jerzy Grum</b> (el <i>Esperanto</i>)</p>
		</div>			
		<p><a id="note1" href="#appel1">[1]</a> PKP = mallongigo de Polskie Koleje Panstwowe (Polaj Ŝtataj Fervojoj).</p>
		
		<p class="creditphoto">Bildoj:<br><i>Portvakt vid station</i> https://digitaltmuseum.org/ (publikhavaĵo)<br>Horario kaj biletoj: publikhavaĵo /Wikimedia Commons</p>
		</section>'
  WHERE l.kurso = 'PP' AND l.numero = 4 AND le.ordo = 1;

-- leçon 4, section 2
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<div class="vortlisto row">
			<div class="col s12 m6">
				<p><span class="eo">afiŝo</span>: surmura presita sciigo.</p>
				<p><span class="eo">aperti</span>: malfermi.</p>
				<p><span class="eo">apogi</span>: subteni iun aŭ ion per io.</p>
				<p><span class="eo">bileto</span>: rajtiga papereto.</p>
				<p><span class="eo">damni</span>: kondamni (ofte uzata kiel sakro).</p>
				<p><span class="eo">dezerta</span>: senhoma.</p>
				<p><span class="eo">domaĝo</span>: bedaŭrindaĵo.</p>
				<p><span class="eo">ekspresa</span>: tre rapida.</p>
				<p><span class="eo">enui</span>: malplezuri pro senintereso.</p>
				<p><span class="eo">fero</span>: malmola metalo.</p>
				<p><span class="eo">foiro</span>: granda komerca kunveno.</p>
				<p><span class="eo">fuĝi</span>: forkuri por sin savi.</p>
				<p><span class="eo">funkcii</span>: plenumi sian taskon.</p>
				<p><span class="eo">gasto</span>: amika vizitanto.</p>
				<p><span class="eo">giĉeto</span>: fenestreto en muro, kie oni aĉetas, ekzemple biletojn.</p>
				<p><span class="eo">gluo</span>: fluaĵo, per kiu oni fiksas ion al io alia.</p>
				<p><span class="eo">grumbli</span>: murmuri malkontente.</p>
				<p><span class="eo">kabano</span>: iom kruda dometo.</p>
				<p><span class="eo">kajero</span>: maldika libreto.</p>
				<p><span class="eo">kalva</span>: senhara.</p>
				<p><span class="eo">kaso</span>: monkesto.</p>
				<p><span class="eo">kato</span>: hejmbesto kun belaj korpharoj.</p>
				<p><span class="eo">kombini</span>: kunmeti.</p>
				<p><span class="eo">kooperativo</span>: societo kunaganta.</p>
				<p><span class="eo">kubuto</span>: mezpunkto de la brako.</p>
				<p><span class="eo">kulturi</span>: prilabori la teron.</p>
				<p><span class="eo">kupeo</span>: parto de la vagono.</p>
				<p><span class="eo">laca</span>: bezonanta ripozon.</p>
				<p><span class="eo">lago</span>: etendaĵo da akvo, ĉiuflanke ĉirkaŭata de tero.</p>
			</div>
			<div class="col s12 m6">
				<p><span class="eo">linio</span>: kontinua streko.</p>				
				<p><span class="eo">menuo</span>: listo de haveblaj manĝaĵoj.</p>
				<p><span class="eo">miopa</span>: havanta neordinare mallongan vidpovon.</p>
				<p><span class="eo">najlo</span>: larĝkapa metala pinto.</p>
				<p><span class="eo">nazo</span>: korpoparto, per kiu oni flaras.</p>
				<p><span class="eo">olda</span>: maljuna, aŭ malnova.</p>
				<p><span class="eo">oponi</span>: kontraŭstari.</p>
				<p><span class="eo">parkere</span>: per la memoro.</p>
				<p><span class="eo">pasaĝero</span>: veturanto.</p>
				<p><span class="eo">pinto</span>: pika ekstremo.</p>
				<p><span class="eo">plori</span>: montri doloron per larmoj.</p>
				<p><span class="eo">principo</span>: fundamenta veraĵo.</p>
				<p><span class="eo">rando</span>: ĉirkaŭa ekstremaĵo de io.</p>
				<p><span class="eo">restoracio</span>: loko, kie oni povas manĝi se oni pagas.</p>
				<p><span class="eo">seka</span>: enhavanta neniom aŭ malmulte da akvo.</p>
				<p><span class="eo">skrapi</span>: iom akre froti ion.</p>
				<p><span class="eo">stacio</span>: loko, kie haltas publikaj veturiloj.</p>
				<p><span class="eo">streki</span>: desegni linion per unu movo de skribilo.</p>
				<p><span class="eo">strio</span>: longa mallarĝa peco kun paralelaj randoj.</p>
				<p><span class="eo">studi</span>: diligente esplori.</p>
				<p><span class="eo">suferi</span>: senti doloron.</p>
				<p><span class="eo">sufoki</span>: mortigi per senigo de aero.</p>
				<p><span class="eo">sumo</span>: ĉiuj partoj kune, kiel tuto.</p>
				<p><span class="eo">surda</span>: nepovanta aŭdi.</p>
				<p><span class="eo">svarmi</span>: esti tre multnombra.</p>
				<p><span class="eo">trajno</span>: vagonaro kun lokomotivo.</p>
				<p><span class="eo">vagono</span>: veturilo, kiun trenas lokomotivo.</p>
				<p><span class="eo">vitro</span>: malmola, travidebla, rompebla substanco.</p>
				<p><span class="eo">vulpo</span>: flavruĝa hundosimila rabobesto.</p>
			</div>
		</div>'
  WHERE l.kurso = 'PP' AND l.numero = 4 AND le.ordo = 2;

-- leçon 4, section 3
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##EKZERCO:125####EKZERCO:126##'
  WHERE l.kurso = 'PP' AND l.numero = 4 AND le.ordo = 3;

-- leçon 4, section 4
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##EKZERCO:127####EKZERCO:128####EKZERCO:129##				<p>Escepto al la supra regulo estas la propraj nomoj, ĉar ili sufiĉe indikas sian unikecon. Tio validas ankaŭ rilate geografiajn nomojn, krom se tiujn akompanas komunsignifa adjektivo, ekzemple: Tra Egiptujo fluas Nilo; ili velis laŭ Mediteraneo; sed ili velis laŭ la Norda Maro.</p>
			##EKZERCO:130##'
  WHERE l.kurso = 'PP' AND l.numero = 4 AND le.ordo = 4;

-- leçon 4, section 5
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##EKZERCO:131##'
  WHERE l.kurso = 'PP' AND l.numero = 4 AND le.ordo = 5;

-- leçon 4, section 6
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##RESUMO##'
  WHERE l.kurso = 'PP' AND l.numero = 4 AND le.ordo = 6;

-- leçon 5, section 1
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<div class="rakonto">
			<h3>LA UNUA KONGRESO DE ESPERANTO</h3>
 
 			<p>Ĝis 1900 kaj eĉ 1903 Esperanto estis ankoraŭ malofte parolata escepte en Ruslando. Ĝi funkciadis antaŭ ĉio skribe. Multaj el ĝiaj plej agemaj propagandistoj aŭ talentaj verkistoj en la okcidento ne kuraĝis paroli la lingvon, ĉar ili neniam havis antaŭan okazon aŭ sperton. Renkontoj inter diversnaciaj esperantistoj estis tiel maloftaj, ke oni citis ilin en la tiamaj gazetoj kiel gravajn aferojn.</p>
	 		<p>La atestoj sonas ĉiuj simile. La unua momento estis iom embarasa kaj malrapida, la dua malpli, kaj la sekvantaj horoj alportis veran plezuron kaj pli kaj pli fluan elparolon. La kompreno ĉiam estis klara. La grupo en Le Havre antaŭsentis, ke tie kuŝas la plej granda valoro de mondlingvo. Ĝi volis organizi eksperimenton. Efektive multaj homoj scias legi unu aŭ alian el la ĉefaj fremdaj lingvoj por profiti libron aŭ gazeton, sed paroli, tion povas tre malmultaj. Se do Esperanto sukcesos doni al la vojaĝantoj aŭ kongresanoj tiun grandan faciligon en la vivo, ĝi alportos al la homaro la solvon de plej urĝa problemo.</p>

	 		<p>Tial la grupo en Le Havre invitis kelkajn eksterlandajn esperantistojn al publikaj kunsidoj en somero 1903. La eksperimento bonege sukcesis kaj la facila parolebleco de la lingvo entuziasmigis la aŭskultintojn.</p>

		 	<img class="flot-d l-50 s-50" src="eo/ppp/bildoj/michaud-kaj-zamenhof.jpg"><p>El tiu ĉi provo devenis la Universalaj Kongresoj de Esperanto. La grupo en Le Havre donis ideon al la aliaj marbordaj grupoj francaj kaj anglaj organizi vere internacian feston en Esperanto. Ĝi okazis la 7-an kaj 8-an de aŭgusto 1904. La sukceso estis tiom granda kaj la entuziasmo tiel varme vekita, ke la ĉeestintoj proponis organizi veran kongreson en Aŭgusto 1905. Advokato Michaux el Boulogne-sur-Mer promesis aranĝi tion en sia urbo.</p>

			<p>D-ro Zamenhof mem faris la vojaĝon kun sia edzino. Ankaŭ la plej konataj esperantaj verkistoj el Varsovio: Grabowski, Kabe, Leo Belmont. Dum unu semajno fervora kolegaro ĝuis la renkontiĝon kaj kompreniĝon. Multaj neniam parolis Esperanton antaŭe. Ĝia facileco kaj flueco mirigis ilin eĉ en propra buŝo.</p>

			<p>En la franca havenurbo regis atmosfero tute unika. Ĉirkaŭ la teatro Bulonja svarmis fratiĝemaj homoj. Ĉiu alparolis unu la alian kvazaŭ bone konatojn. La mirakla pentekosta ĝojo kaptis blankbarbulojn, junulojn, pastrojn, instruistinojn, oficirojn, kuracistojn, scienculojn aŭ komercistojn, alkurintajn el tuta Eŭropo. Ĝis frumateno babilis grupoj de fervoraj sidantoj en ĉirkaŭaj restoracioj.</p>

			<p>Krom la parola sukceso, la Bulonja kongreso alportis al Esperanto ion pli: la inspiron idean kaj sentimentan. La unuan fojon oni vidis la fondinton. Liaj modesteco kaj genia spiriteco aperis al ĉiuj per rekta kontakto. Kiam la solena malfermo kunigis ĉiujn en teatra salonego la unuan vesperon, ĉies admiro kaj dankemo alflugis al tiu malalta viro, timema, iom ĝenata, kun rondaj okulvitroj kaj saĝa bonkoreco de patra kuracisto.</p>
	
		 	<p><img style="text-align:center;max-width:1600px;max-width:100%; margin:0" src="eo/ppp/bildoj/unua-kongreso.jpg"></p>

			<p>Post entuziasmaj ovacioj eksonis tra l’ subita silento lia voĉo simpla kaj senpretenda: “Mi salutas vin, karaj samideanoj, fratoj kaj fratinoj el la granda tutmonda familio, kiuj kunvenis el landoj proksimaj kaj malproksimaj, el la plej diversaj regnoj de la mondo por frate premi al si reciproke la manojn, pro la nomo de granda ideo, kiu ĉiujn nin ligas… Modesta estas nia kunveno… sed tra la aero de nia salono flugas misteraj sonoj, sonoj tre mallaŭtaj, ne aŭdeblaj por la orelo, sed senteblaj por ĉiu animo sentema: ĝi estas la sonoj de io granda, kiu nun naskiĝas…”</p>

			<p>La de Beaufront-a koncepto, ke “Esperanto estas nura lingvo kaj nenio pli” ricevis seriozan baton en Boulogne. La ĉeestintoj komprenis, ke forta “interna ideo” inspiras la tutan aferon kiel ĝi instigis la fondinton mem. Por li mondlingvo estis ne celo, sed rimedo al kunfratiĝo de homoj. Por multaj ĝi fariĝis simbolo de pli harmonia homaro.</p>

			<p>Laŭ la pure lingva vidpunkto, tiu idealismo de la esperantista movado havis grandan avantaĝon. Ĉiuj vivantaj lingvoj posedas propran “spiriton”. Ili reprezentas ian specon de naciismo kaj parte respegulas la psikologion de unu gento. Se Esperanto restus pure vorta kodo por komercaj katalogoj aŭ teknikaj korespondaĵoj, mankus al ĝi viviga kaj beliga elemento. La tuta “interna ideo” donis al ĝi animon kaj flugilojn. Esprimante aspirojn de la homaro al pli da unueco morala, ĝi kreis al si propran spiritan forton kaj donis signifon al sia ekliteraturo.</p>

			<p>La tuta antaŭmilita elokventado kaj poeziado en Esperanto pri la reamikiĝo de la popoloj povas nun ŝajni tro simpla kaj ripetema. Ĝi tamen estis la ĉefa vivofonto por la lingvo, kiu multon ŝuldas al tiu homara blovo. Cetere la komencaj literaturo kaj patriotismo de ĉiuj gentoj estas ankoraŭ multe pli simplaj. Tiu nova tutmondeca konscio ne povis naskiĝi kaj esprimiĝi alimaniere ol ĉiuj kolektivaj popolsentoj. Ĝi devis ankaŭ trapasi freŝan infanecon antaŭ ol atingi florantan junecon kaj klasikan maturecon.</p>
			
			<p>Prof <b>Edmond Privat</b> (el <i>Historio de la lingvo Esperanto</i>, mallongigita)</p>
		</div>'
  WHERE l.kurso = 'PP' AND l.numero = 5 AND le.ordo = 1;

-- leçon 5, section 2
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<div class="vortlisto row">
		<div class="col s12 m6">
			<p><span class="eo">advokato</span></span>: persono, kiu defendas alian en juĝejo.</p>
			<p><span class="eo">aero</span>: tio, kion oni spiras.</p>
			<p><span class="eo">animo</span>: spirito de la personeco.</p>
			<p><span class="eo">aranĝi</span>: meti laŭorde, ordigi.</p>
			<p><span class="eo">aspiri</span>: fervore celi, forte deziri.</p>
			<p><span class="eo">atesti</span>: pruvi, montri.</p>
			<p><span class="eo">atmosfero</span>: sentiĝo de la cirkonstancoj.</p>
			<p><span class="eo">barbo</span>: hararo sur la mentono.</p>
			<p><span class="eo">citi</span>: laŭvorte rediri aŭ reskribi.</p>
			<p><span class="eo">eksperimento</span>: kontrolata provo pruvi ion.</p>
			<p><span class="eo">elokventa</span>: povanta facile kaj flue paroladi.</p>
			<p><span class="eo">embaraso</span>: ĝena sento.</p>
			<p><span class="eo">entuziasmo</span>: fervorego.</p>
			<p><span class="eo">fervoro</span>: ardo por io.</p>
			<p><span class="eo">festo</span>: speciale aranĝita plezurkunveno.</p>
			<p><span class="eo">flui</span>: facile trapasi de unu loko al alia.</p>
			<p><span class="eo">fondi</span>: starigi organizon.</p>
			<p><span class="eo">fonto</span>: origino, deveno.</p>
			<p><span class="eo">genio</span>: elstara talentego.</p>
			<p><span class="eo">gento</span>: popoleto.</p>
			<p><span class="eo">harmonio</span>: agrablaj samtempaj sonoj; do</span>: agrabla kunestado.</p>
			<p><span class="eo">ideala</span>: perfekteca.</p>
			<p><span class="eo">inspiri</span>: estigi stimulan senton en ies spirito.</p>
			<p><span class="eo">instigi</span>: kuraĝigi iun, ke li faru ion.</p>
			<p><span class="eo">katalogo</span>: ordigita listo.</p>
			<p><span class="eo">klasika</span>: tradicia.</p>
			<p><span class="eo">kodo</span>: sistemo de senanimaj simboloj.</p>
			<p><span class="eo">kolego</span>: amika kunlaboranto.</p>
			<p><span class="eo">kolektivo</span>: aro da personoj kunlaborantaj.</p>
			<p><span class="eo">komerci</span>: profesie vendi kaj aĉeti.</p>
			<p><span class="eo">koncepto</span>: abstrakta kaj ĝenerala ideo.</p>
			<p><span class="eo">kongreso</span>: kunveno por diskuti komunan temon.</p>
			<p><span class="eo">kontakto</span>: interrilato.</p>
			<p><span class="eo">korespondi</span>: interŝanĝi leterojn.</p>
			<p><span class="eo">krei</span>: fari, estigi.</p>
			<p><span class="eo">kuraci</span>: resanigi malsanulojn.</p>
		</div>
		<div class="col s12 m6">
			<p><span class="eo">ligi</span>: ĉirkaŭŝnuri, kunŝnuri.</p>
			<p><span class="eo">literaturo</span>: tuto de la verkoj de unu kulturo.</p>
			<p><span class="eo">miraklo</span>: okazaĵo ne klarigebla laŭ la fizikaj leĝoj.</p>
			<p><span class="eo">mistero</span>: io nekonata, nekomprenata.</p>
			<p><span class="eo">moralo</span>: konduto de la spirito.</p>
			<p><span class="eo">naski</span>: estigi idon.</p>
			<p><span class="eo">oficiro</span>: armea  superulo.</p>
			<p><span class="eo">organizi</span>: detale aranĝi ion.</p>
			<p><span class="eo">ovacio</span>: entuziasmegaj aplaŭdoj.</p>
			<p><span class="eo">pastro</span>: religia funkciulo.</p>
			<p><span class="eo">patrioto</span>: homo, kiu arde amas sian patrolandon.</p>
			<p><span class="eo">pentekosto</span>: kristana festo, al kiu ligiĝas la ideo peri miraklan interkompreniĝon de diverslingvuloj.</p>
			<p><span class="eo">poezio</span>: arto verki versaĵojn.</p>
			<p><span class="eo">pretendi</span>: aserti sian rajton pri io.</p>
			<p><span class="eo">profiti</span>: ricevi utilon aŭ gajnon de io.</p>
			<p><span class="eo">propagando</span>: disvastigado de informoj.</p>
			<p><span class="eo">psikologio</span>: scienco pri la homa menso.</p>
			<p><span class="eo">regno</span>: lando kiel politika tuto.</p>
			<p><span class="eo">rimedo</span>: tio, kio servas por atingi celon.</p>
			<p><span class="eo">ripeti</span>: denove diri aŭ fari ion.</p>
			<p><span class="eo">rondo</span>: cirklo; societo.</p>
			<p><span class="eo">salono</span>: ĉambrego.</p>
			<p><span class="eo">scienco</span>: sistema tutaĵo de konoj.</p>
			<p><span class="eo">sentimento</span>: sentema animstato.</p>
			<p><span class="eo">signifo</span>: figuro, kiu anstataŭas aŭ reprezentas abstraktaĵon.</p>
			<p><span class="eo">solena</span>: ceremonieca.</p>
			<p><span class="eo">solvi</span>: trovi la respondon aŭ la rimedon.</p>
			<p><span class="eo">soni</span>: aŭdigi.</p>
			<p><span class="eo">speco</span>: komunkarakteriza grupo.</p>
			<p><span class="eo">spirito</span>: mensa aŭ animeca tuto de la homo.</p>
			<p><span class="eo">talento</span>: aparta spirita kapablo.</p>
			<p><span class="eo">teatro</span>: konstruo, en kiu oni prezentas spektaklojn.</p>
			<p><span class="eo">tekniko</span>: procedaro de arto aŭ medio.</p>
			<p><span class="eo">unika</span>: unusola.</p>
			<p><span class="eo">universala</span>: tutmonda, ĉie estanta.</p>
			<p><span class="eo">verki</span>: krei ion, plejofte libron, per arto aŭ scienco.</p>
		</div>
	</div>'
  WHERE l.kurso = 'PP' AND l.numero = 5 AND le.ordo = 2;

-- leçon 5, section 3
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##EKZERCO:132:eo####EKZERCO:133:eo##'
  WHERE l.kurso = 'PP' AND l.numero = 5 AND le.ordo = 3;

-- leçon 5, section 4
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##EKZERCO:134:eo####EKZERCO:135:eo####EKZERCO:136:eo##		
<p class="parto">Per la supraj ekzemploj evidentiĝas jena regulo: la tempo esprimata per la participa finaĵo (estinta, estanta, estonta tempo) estas tia en rilato al la tempo esprimata per la finaĵo de la ĉefa verbo de la propozicio. Tial povas okazi, ekzemple, ke -ONTO povas -IS: la ironto dormis — ĉar kvankam la dormado estas pasinta en rilato al la nuna momento, kaj eble ankaŭ jam la irado, en la momento de la dormado la irado ankoraŭ ne okazis.</p>'
  WHERE l.kurso = 'PP' AND l.numero = 5 AND le.ordo = 4;

-- leçon 5, section 5
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##EKZERCO:137:eo####EKZERCO:138:eo##'
  WHERE l.kurso = 'PP' AND l.numero = 5 AND le.ordo = 5;

-- leçon 5, section 6
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##RESUMO##'
  WHERE l.kurso = 'PP' AND l.numero = 5 AND le.ordo = 6;

-- leçon 6, section 1
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<div class="rakonto">
			<h3>MI FARIĜOS ORDEMULO</h3>
 
 			<p>Kiam mi je la 10-a vespere hejmenvenis en mian familian neston, mia edzino atendis min kun tiuj vortoj:</p>

 			<p>— Mi aŭskultis en la radio prelegon <i>Al gepatroj pri la edukado</i>.</p>

 			<p>— Tre bone vi faris, mi aŭtoritate kapjesis. Mi ŝatas, kiam vi kulturiĝas. Sed nun bonvolu doni al mi vespermanĝon, ĉar mi jam apenaŭ vidas pro la malsato.</p>

 			<p>— Ankaŭ tion de vi lernas la infano, diris riproĉe mia edzino kaj anstataŭ doni al mi vespermanĝon, eksidis. – Kion li lernas de mi?</p>

 			<p>— La senpaciencon. La fileto estas tial tiel nervoza, ĉar vi ne montras disciplinon.</p>

 			<p>Ŝi eksaltis kaj promenante tien kaj reen, daŭrigis:</p>

 			<img class="flot-d l-30 s-30" src="eo/ppp/bildoj/ordemulino.png"><p>— La infano kondutos, kiel li vidas de siaj gepatroj. Ĝuste tial mi petas vin, ke hejme vi estu pripensa kaj nenervoza, kiel tio decas al serioza patro. La infano…</p>

 			<p>— En ordo, mi interparolis sen nervozeco kaj pripensante, sed nun bonvolu doni al mi vespermanĝon.</p>

 			<p>— Ĉu vi vidas do, tia estas vi, subigis min mia edzino, ankaŭ la infanon vi ĉiam interrompas, vi ne havas paciencon lin finaŭskulti. De vi li lernis tiun malbelan kutimon, ke li ĉiam miksas sin en la aferojn de plenkreskuloj.</p>

 			<p>Post kio mi finaŭskultis la tutan radiparoladon en interpreto de mia edzino dum mallonga horeto, fine mi ricevis la vespermanĝon. Mi manĝis la fritaĵon per forko, kiam mia edzino ekriproĉis min:</p>

 			<p>— Kiel vi manĝas?</p>

 			<p>— Kion vi deziras?</p>

 			<p>— Kial vi ne uzas ankaŭ tranĉilon? Kaj ne manĝu tiel avide. La infano ne lernas bonorde manĝi, se lia patro kondutas ĉe la tablo, kiel barbaro.</p>

 			<img class="flot-g l-60 s-100" src="eo/ppp/bildoj/ordemulo2.png"><p>Mi pretigis min al kuŝiĝo. Mi metis mian veston sur la apogilon de seĝo. Mi volis kaŝi min sub la plumkovrilo, kiam denove alparolis min mia edzino:</p>

 			<p>— Kiel vi formetis viajn vestaĵojn?</p>

 			<p>— Kiel mi kutimas.</p>

 			<p>— Rigardu tien, kaj ŝi montris al alia seĝo.</p>

 			<p>Mi rigardis tien. Tie kuŝis la vestaĵoj de mia filo, ĵetitaj unu sur la alian.</p>

 			<p>— Vidu, ankaŭ tion de vi lernis la infano. Metu la vestaĵojn orde.</p>
 			<p>Mi metis miajn vestaĵojn laŭ ordo, ankaŭ tiujn de mia fileto kaj fine kuŝiĝis. Jam pasis la noktmezo.</p>
 			
 			<p>Matene je la sepa horo vekis min mia edzino:</p>

 			<p>— Leviĝu jam!</p>

 			<p>— Sed estas ankoraŭ frue, mi kontraŭdiris, mi devas iri en mian oficejon nur je la duono post la oka.</p>

 			<p>— De nun ĉiumatene vi ellitiĝos je la duono post la sesa, ŝi deklaris per voĉo ne permesanta kontraŭdiron. Kiel lernu la infano diligentecon, kiam li vidas kuŝi sian patron, kiam li jam devas iri en la lernejon?</p>

 			<p>Mi ellitiĝis kaj vestis min. Mia edzino diris al mi, ke mi faru mem mian matenmanĝon, ke mi povu estimi la hejman mastrumadon. Dum mi faris mian matenmanĝon, mi devis ofte enkuri al mia edzino – kiu ankoraŭ kuŝis en la lito – ĉar mi ne trovis la sukeron, la kafon, la buteron. Fine ŝi senpacience kriis:</p>

 			<p>— Ne estu tiel senhelpa. Rigardu ĉirkaŭ vi serioze kaj vi trovos ĉion. Kiel estu lerta, inventema la infano, se li havas tian patron?</p>

 			<p>Ĉio estus en la plej granda ordo, se hazarde mi ne estus aŭdinta tra la malfermita fenestro interparoladon, kio okazis sube en la ĝardeno inter mia fileto kaj onklo Keceli. Onklo Keceli estas la domzorganto.</p>

 			<p>— Vi estas la teroristo de la tuta domo, diris malhele onklo Keceli. Via patrino povus vin iom eduki!</p>

 			<p>— Ŝi ne havas tempon, onklo Keceli, ĉar ŝi ĉiam edukas paĉjon.</p>

 			<p><b>Kornel Toth</b> el la hungara: <b>Paulo Balkanyi</b> (el <i>Norda Prismo</i>)</p>
		</div>
		<p class="creditphoto">Bildoj:<br>@nakaridore /freepik<br>PixieMe /Adobe Stock</p>'
  WHERE l.kurso = 'PP' AND l.numero = 6 AND le.ordo = 1;

-- leçon 6, section 2
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<div class="vortlisto row">
		<div class="col s12 m6">
			<p><span class="eo">aŭtoritato</span>: ordonpovo.</p>
			<p><span class="eo">barbaro</span>: necivilizita homo.</p>
			<p><span class="eo">butero</span>: grasaĵo farita el lakto.</p>
			<p><span class="eo">deklari</span>: publike sciigi.</p>
			<p><span class="eo">diligenta</span>: konstante kaj zorge laborema.</p>
			<p><span class="eo">disciplino</span>: ordemo kaj obeemo.</p>
			<p><span class="eo">forko</span>: ilo kun dentoj uzata por levi ion.</p>
			<p><span class="eo">friti</span>: kuiri manĝaĵon en graso.</p>
			<p><span class="eo">hazardo</span>: neantaŭvidebla okazo.</p>
			<p><span class="eo">interpreti</span>: transklarigi.</p>
			<p><span class="eo">inventi</span>: elpensi ion novan. </p>
			<p><span class="eo">kafo</span>: speco de trinkaĵo. </p>
		</div>
		<div class="col s12 m6">
			<p><span class="eo">konduti</span>: agi laŭ certa maniero.</p>
			<p><span class="eo">lerta</span>: tre kapabla facile fari ion.</p>
			<p><span class="eo">mastro</span>: posedanto, ordonanto.</p>
			<p><span class="eo">nervoza</span>: malpacienca.</p>
			<p><span class="eo">nesto</span>: konstruaĵo de birdoj.</p>
			<p><span class="eo">ofico</span>: okupo.</p>
			<p><span class="eo">plumo</span>: tio, kio are kovras birdokorpojn (ankaŭ</span>: skribilo).</p>
			<p><span class="eo">prelego</span>: instrua parolado.</p>
			<p><span class="eo">riproĉi</span>: malmilde mallaŭdi iun.</p>
			<p><span class="eo">salti</span>: rapide levi sin de la tero.</p>
			<p><span class="eo">sukero</span>: dolĉaĵo, ĝenerale blanka. </p>
			<p><span class="eo">teroro</span>: terura kaj kruela regado.</p>
		</div>
	</div>'
  WHERE l.kurso = 'PP' AND l.numero = 6 AND le.ordo = 2;

-- leçon 6, section 3
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##EKZERCO:139:eo##'
  WHERE l.kurso = 'PP' AND l.numero = 6 AND le.ordo = 3;

-- leçon 6, section 4
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<h2>ADJEKTIVOJ PARTICIPAJ</h2>
<p class="parto">La ADJEKTIVOJ PARTICIPAJ priskribas ion aŭ iun en tempa rilato al la cetera kunteksto.</p>
<p>Vok<b>ANTA</b> voĉo estas voĉo, kiu tiumomente vokas.</p>
<p>Vok<b>INTA</b> voĉo estas voĉo, kiu pli frue vokis.</p>
<p>Vok<b>ONTA</b> voĉo estas voĉo, kiu iam pli malfrue vokos.</p>
<p>Vok<b>ATA</b> knabo estas knabo, kiun oni tiumomente vokas.</p>
<p>Vok<b>ITA</b> knabo estas knabo, kiun oni pli frue vokis.</p>
<p>Vok<b>OTA</b> knabo estas knabo, kiun oni iam pli malfrue vokos.</p>

<p>La tempo esprimata per la participa adjektivo estas la tempo en rilato al la ĉefa verbo en la propozicio, ankaŭ kiam tiu lasta estas nur subkomprenata —— ekzemple en la poemtitolo MALFRUANTAJ SOLENONTOJ (= Jen estas priskribo pri malfruantaj solenontoj). En la momento, kiam la poeto rimarkis ilin, tiuj personoj estis malfruANTaj, ĉar tiumomente ili malfruis; ili estis solenONToj, ĉar ilia soleno tiumomente ankoraŭ ne okazis. Estante adjektivoj, la participaj adjektivoj nombre akordiĝas kun la substantivo aŭ pronomo, kiun ili priskribas. Mi rimarkis, ke la knaboj, kiuj tiumomente kuris, iom pli malfrue falos = Mi rimarkis, ke la kurantaj knaboj estas falontaj.</p>

##EKZERCO:140:eo##<h2> KIE-TIE, KIEL-TIEL, KIA-TIA, KIAM-TIAM, KIOM-TIOM.</h2>
##EKZERCO:141:eo####EKZERCO:142:eo##'
  WHERE l.kurso = 'PP' AND l.numero = 6 AND le.ordo = 4;

-- leçon 6, section 5
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##EKZERCO:143:eo##'
  WHERE l.kurso = 'PP' AND l.numero = 6 AND le.ordo = 5;

-- leçon 6, section 6
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##RESUMO##'
  WHERE l.kurso = 'PP' AND l.numero = 6 AND le.ordo = 6;

-- leçon 7, section 1
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<div class="rakonto">
			<h3>IDE-KAMARADO</h3>
 
 			<img class="flot-d l-40 s-50" style="margin: 0 -1em 1em 1em;" src="eo/ppp/bildoj/amikoj-trinkas.png" />
 			<p>“Venu, ni iom trinku tie!</p>
	 		<p>Kara sinjoro mia, oni ne batos vin hejme pro duonhora malfruiĝo. Mi ne estas edziĝinta, sed mi komprenas tiajn aferojn. Tie ĉi oni povas ricevi bonegajn trinkaĵojn… kaj malmultekoste. Ni konas nin reciproke jam longe… trinku almenaŭ unufoje brandon kun mi…</p>
	 		<p>He, kelnero… alportu ion…!</p>
	 		<p>Sidiĝu, mia karega! Kvankam nia amikeco estas nova, jam mi tre ekŝatis vin. Mi estas tia homo, kiu kutimas ŝati siajn kamaradojn. Precipe mi admiras tiujn, kiuj povas esti ide-kamaradoj. Ĉu ne, mia frato, ni estas kvindek intelektuloj en la lando — kia fariĝus nia situacio, se ni ne defendos nin, konante unu la alian? Oni diras: “Nun profitemo regas la mondon, ne ekzistas mal-egoisma amikeco…” — sed mi ne kredas tion. Mi ne povas pensi, kiel la ordinara popolo. Nek nia eduko, nek nia karaktero, nek niaj ideoj permesas tion. La viajn mi ne konas, sed mi kredas je spirita ligo, kiu estas super la objekto, je la sento, kiu proksimigas la homojn unuj al aliaj.­ Pripensu, ĉu la vivo havus ian sencon, se ne ekzistus eĉ la bezono “ami unu la alian, proksimiĝi unu al la alia”? Nur ili estas tio, kio nin plialtigas super la publikon. Sed ankaŭ inter ni, intelektuloj, mankas tiaj kelkaj difinitaj ideaj ligoj; ĉiuj estas en sia klimato kaj serĉas sian memprofiton… Tial mi ĉirkaŭegas la bonan amikon, se mi trovas iun.</p>
	 		<p>Nia urbeto estas malgranda. La homo dronas, ĉiu inteligentulo havas multajn opiniojn pri la homoj, pri la vivo, — li havas sian filozofion. Ni ĉiuj bezonas amikon, kiu komprenos tiujn temojn, kiu aŭdigos siajn kontraŭajn opiniojn. Mi ja diris, mankas… mankas… En nia oficejo ni estas proksimume dek personoj. Ĉiuj estas inteligentaj, havas edukon, saĝaj personoj, sed mi ne povas esti intima amiko eĉ kun unu el ili.</p>
	 		<img class="flot-g l-50 s-100" style="margin: 0 1em 0 0;" src="eo/ppp/bildoj/malliberejo.jpg" />
	 		<p>Tute mala estis mia amikeco kun tiu junulo, sindonema… frata… Tiu nia knabo estis en granda oficejo. Unufoje lin trafis malbonŝanco… Jen, tia afero… Vi, kiel advokato, verŝajne estus akceptinta lian defendon… Vere, li estis tre homeca knabo, havis koron kiel el diamanto. Mi nur konis lin kiel sinceran kamaradon… Kion vi farus? Jen, tiaj estas la homoj… Unu mensogaĵo, kaj jen — ek en la malliberejon!… Kvankam li ne estis tute senkulpa, ne estrinte bone sian langon kaj babilinte tro multe… Multfoje mi diris al li: Filo mia, nia epoko ne estas tia, ke vi… ĉu vi pensas, ke vi plibonigos la mondon? Ricevadu vian malgrandan salajron, sidu en angulo!… ĉu ne, mia sinjoro? Ankaŭ ni ja havas niajn ideojn… Jes, tiu ĉi mondo ne estas en ordo, sed venos ĉies vico… Rigardu, ĉu mi malfermas la buŝon? Irante sur la tero oni ne devas lasi postsignojn… Sed la stulta knabo ne obeis. Li ĉiam iris laŭ sia kutimo, kvazaŭ li, tute sola, kapablus ŝanĝi la pozicion de la akso de la terglobo…</p>
			<p>Kelnero, filo mia… alportu al ni pluan glaseton da brando!</p>
			<p>Li ĉiam legadis, konjektante, ke tio, kion li legas, estas vera; li plenigadis sian cerbon per tio, kio estis skribita en la libroj. Sed… oni devas rigardi la vivon… la vivon… en la libroj estas nenio. Kiu scias, eble ankaŭ ni tiel legadas hejme… sed la vivo estas tute alia afero… Oni atentu la ĉirkaŭaĵon kaj la tempon… Kiam la ĝusta tempo estos veninta, tiam mi aliĝos al la afero eĉ pli sinofereme ol li; se mi ne verŝos mian sangon ĝis la lasta guto por la ideo, kiu estas en mia cerbo, mi estu fihomo. Sed mi ja diris, ke estas ankoraŭ sufiĉe da tempo por tio.</p>
			<p>Ah, ah… bruligis siajn fingrojn la knabo, bruligis… Nia urbeto estas malgranda, oni tuj trograndigas ion en interparoloj… Necesas vivi kviete, trankvile, rifuĝante en angulon. Sed li — tute male — parolatakis ĉiun, kiun li renkontis. Ĉiun gravulon de la lando li malamikigis al si. Fine li ekamikiĝis kun la famaĉaj homoj. Tiam mi admonis lin: Mia filo, ĉi tiuj ne havas religion, kredon; ili unue faras tion, kio estas farota plej laste!… Sed li ne volis aŭskulti min. La aliaj mensoge akuzis lin, kiam ili trovis du falsajn atestantojn… kaj la knabo estis ĵetita en malliberejon…</p>
			<p>Vi eble ne kredos, ke tiun tagon mi ĝis vespero vagadis de loko al loko kiel frenezulo. Kiam mi nur ekpensis pri li, miaj okuloj malsekiĝis. Jes, mi ploris! Ne kredu, se vi ne volas, mia frato; sed mi ja diris, ke mi estas tia homo, kiu ŝatas siajn kamaradojn. Precipe por tiu pereu mia animo, kiun mi tiel ŝatis!… Sen mensogo mi diras, ke mia koro preskaŭ krevis. Li havas nek monon, nek parencojn, lia patrino kaj la gefratoj atendas la vivrimedojn de li. Malfeliĉo… kaj kia malfeliĉo! Mi ne havas monon, ke mi donu… Se mi havus… mi ja diris, ke pereu mia animo… Sed estas konata afero… ni estas salajruloj… kaj oni povas klarigi nenion, irante al iu peti… Malbona kulpo… oni ekruinigas homon. Ĉiuj havas po dek krimoj je ĉiu el siaj fingroj… Mi eĉ ne povis rigardi lin, irantan en la malliberejon. Ĉu vi komprenas? Malvarma estas la vizaĝo de la malbenita loko… Sed mi volas fari por la malfeliĉa knabo ĉion, kion mi povos. Mi ja diris, ke mi estas preta oferi mian animon por kamarado…</p>
			<p>Kiam mi aŭdis, ke li elektis vin kiel sian advokaton, mi iĝis tre kontenta, ĉar lia afero estas delikata problemo. Ĝi ne estas afero, kiun ĉiu alia advokato kapablus mastri. Oni rakontis al mi pri la defenda parolado, kiun vi diris dum la unua akto (tiam mi estis malsaneta kaj ne povis veni en la juĝejon, sed la detalojn mi aŭdis de miaj amikoj); oni diras, ke vi diris laŭdindan defendparoladon. Eble vi savos la knabon…</p>
			<p>Kelnero…! Venu kaj enverŝu ankoraŭfoje!</p>
			<p>Trinku, mia frato, trinku! – Kredu, ke mi trinkas tion nur pro malĝojo. Se vi scius, kiel brulas mia koro! Se mi serĉadus dum dek jaroj, mi ne povus trovi alian tiel taŭgan kamaradon – kaj eĉ lin forrabis de mi la sorto. Kiu scias, kion li faras inter la ŝtonaj muroj nun, dum ni trinkas… Ho, la aĉa mondo…!</p>
			<p>Sed… ĉu vi scias kion? Eble tio estas bona leciono por li. Eble eĉ ne estos malbone por li, se li restos tie dum ia tempo… Li bezonis tian punon, ĉu ne? Hm? Kion vi diras? De tempo al tempo li estis tre malkvietiĝanta. Pro Dio, sur la vojo, kiun li iris, li povus esti farinta eĉ ion, pro kio oni punas per morto… Finfine, li restos tie dum unu-du jaroj… ankaŭ tion li bezonas… bezonas por sia estonta vivo… por la trankvileco de sia vivo… por nia idealo: ĉu vi komprenis? - bezonas por nia idealo. Mia karega frato, se vi ŝatas lin kiel mi, ne defendu lin… Se vi volas fari bonon al li, lasu lin, ke li suferu iom…</p>
			<p>Kion diris Mussolini? Li diris, ke por esti utila homo, oni devas pasigi iom da tempo en malliberejo; ĉu ne? Estas laŭdenda homo, tiu Mussolini, sendube… Dum la mizerega situacio de la socio estas por intelektulo necesege restadi en malliberejo. Ne estas alia medikamento por iĝi matura, por kompreni la vivon. Eble nia homo ankaŭ kredas tion, levos iom la kapon el libroj, vidos la ĉirkaŭaĵon kaj pentos pro sia blinda atakemo.</p>
			<p>Mi ja diris, ke se vi ŝatas lin, ne tro klopodu savi lin. Ne esploru ĉion tiel ĝisfunde. Mi aŭdis, ke vi estis tre verva en la juĝejo; mi kaj ĝojis kaj — pro la knabo ­— ĉagreniĝis. Mi invitis vin ĉi tien por priparoli la aferon. Li mem ja estas nervoza kaj incitos la juĝistojn per siaj bagatelaj diraĵoj kaj tute fuŝos la aferon… kaj iĝos kondamnita. Ha-ha… unu-du jaretojn li restos tie…</p>
			<p styl>Kial vi skuas la kapon? Se vi ricevos alpagon al via advokata honorario, ĉu vi diros, ke okazis io maljusta? Tio ja ne estos malbona por li, sed bona… Se vi volas, ne akceptu tiun monon. Faru sindoneman agon por kamarado kaj ne akceptu. Sed… kiom da liroj li estis dononta al vi? Dudek kvin lirojn, ĉu ne? Mi donos al vi tridek lirojn, sed vi nur kondamnigu lin… Vi vidas, ke mi ŝparas nenian oferon por kaŭzi bonon al li. Sed ĉu nur tion? Mi ja akre sentos la mankon de tia bona amiko kaj ide-kamarado…</p>
			<div style="background-image: url(''bildoj/kelnero.jpg'');background-position: 100% 100%;background-size:contain;background-repeat: no-repeat;padding-bottom:5em;margin: 0 -1em 0 -1em;padding-left: 1em;padding-right: 25em;">
			
			<p>Kion? Vi demandas, de kie mi prenos la tridek lirojn…? Nu, kiam nia knabo estis ĵetita en malliberejon, tiam — memkompreneble — lia posteno liberiĝis kaj restis vakanta… Kiel anstataŭulo mi prizorgas lian oficon kaj ekde ĉi-monato mi ricevados krom-salajron… sume proksimume kvardek lirojn aldone al mia salajro…</p>
			<p>Kelnero…! Ankoraŭ da brando…!”</p>

 			<p><b>Sabahattin Ali</b> el la turka: <b>Ferruh Canatay</b> (el <i>Esperantisto Slovaka</i>)</p>
			</div>
		</div>
		<p class="creditphoto">Bildoj:<br>maeching /Adobe Stock<br>reewungjunerr /Adobe Stock<br>panomporn /Adobe Stock</p>'
  WHERE l.kurso = 'PP' AND l.numero = 7 AND le.ordo = 1;

-- leçon 7, section 2
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<div class="vortlisto row">
		<div class="col s12 m6">
			<p><span class="eo">admoni</span>: averti iun, ke li ne faru ion.</p>
			<p><span class="eo">akra</span>: tranĉ- aŭ pik-kapabla.</p>
			<p><span class="eo">akso</span>: linio, ĉirkaŭ kiu turniĝas korpo. </p>
			<p><span class="eo">akto</span>: parto de dramo. </p>
			<p><span class="eo">akuzi</span>: aserti iun kulpa pri io.</p>
			<p><span class="eo">angulo</span>: spaco inter du renkontaj surfacoj; do: nerimarkata loko. </p>
			<p><span class="eo">bagatelo</span>: afero neserioza, negrava.</p>
			<p><span class="eo">bezoni</span>: esti en stato, ke io mankas.</p>
			<p><span class="eo">blinda</span>: nevidpova.</p>
			<p><span class="eo">brando</span>: forta alkoholaĵo.</p>
			<p><span class="eo">cerbo</span>: pensorgano.</p>
			<p><span class="eo">detalo</span>: malgranda parto.</p>
			<p><span class="eo">diamanto</span>: malmola valorŝtono.</p>
			<p><span class="eo">difini</span>: precize klarigi la signifon de io.</p>
			<p><span class="eo">droni</span>: morti, sufokiĝante en akvo.</p>
			<p><span class="eo">egoismo</span>: memamo.</p>
			<p><span class="eo">epoko</span>: jararo.</p>
			<p><span class="eo">esplori</span>: zorge peni por ekkoni ion.</p>
			<p><span class="eo">filozofio</span>: scienco pri la vivprincipoj.</p>
			<p><span class="eo">fingro</span>: ekstremaĵo de la mano.</p>
			<p><span class="eo">fundo</span>: plej malsupra parto.</p>
			<p><span class="eo">globo</span>: sfera objekto.</p>
			<p><span class="eo">grava</span>: grandinflua.</p>
			<p><span class="eo">guto</span>: globeto de fluaĵo.</p>
			<p><span class="eo">honorario</span>: pago por servo.</p>
			<p><span class="eo">inciti</span>: kolerigi.</p>
			<p><span class="eo">intelekto</span>: kapablo pensi kaj kompreni.</p>
			<p><span class="eo">intima</span>: profunde komunsenta kaj senĝena.</p>
			<p><span class="eo">justa</span>: laŭmerita.</p>
			<p><span class="eo">kamarado</span>: amika kunulo.</p>
			<p><span class="eo">kapabla</span>: povanta fari ion.</p>
			<p><span class="eo">karaktero</span>: individua trajtaro.</p>
			<p><span class="eo">kaŭzo</span>: tio, pro kio io okazas.</p>
		</div>
		<div class="col s12 m6">			
			<p><span class="eo">kelnero</span>: servisto en restoracio.</p>
			<p><span class="eo">klimato</span>: tutaĵo de la veteraj kondiĉoj.</p>
			<p><span class="eo">kondamni</span>: deklari iun kulpa.</p>
			<p><span class="eo">konjekti</span>: havi opinion pri io.</p>
			<p><span class="eo">kontenta</span>: havanta ĉion, kion oni dezirus.</p>
			<p><span class="eo">krevi</span>: subite rompiĝi pro interna premo.</p>
			<p><span class="eo">krimo</span>: ago kontraŭleĝa.</p>
			<p><span class="eo">kulpa</span>: intence aŭ konscie plenuminta ion riproĉindan.</p>
			<p><span class="eo">lango</span>: movebla karnaĵo en la buŝo.</p>
			<p><span class="eo">laŭdi</span>: esprimi favoran opinion.</p>
			<p><span class="eo">leciono</span>: tio, kion oni lernigas.</p>
			<p><span class="eo">liro</span>: speco de monero.</p>
			<p><span class="eo">medikamento</span>: saniga rimedo.</p>
			<p><span class="eo">mensogi</span>: diri malveron.</p>
			<p><span class="eo">objekto</span>: io konceptebla aŭ perceptebla.</p>
			<p><span class="eo">parenco</span>: membro de la sama familio.</p>
			<p><span class="eo">penti</span>: senti bedaŭron.</p>
			<p><span class="eo">perei</span>: tute neniiĝi.</p>
			<p><span class="eo">posteno</span>: ofico.</p>
			<p><span class="eo">pozicio</span>: loko, sur kiu io estas.</p>
			<p><span class="eo">puni</span>: kaŭzi al iu suferon kompense de ties malbonfaro.</p>
			<p><span class="eo">rabi</span>: perforte forpreni ion, kio apartenas al alia.</p>
			<p><span class="eo">sana</span>: normale funkcianta. </p>
			<p><span class="eo">sango</span>: ruĝa fluaĵo en la korpo.</p>
			<p><span class="eo">situacio</span>: tuto de la kondiĉoj kaj cirkonstancoj. </p>
			<p><span class="eo">skui</span>: rapide movi tien kaj reen.</p>
			<p><span class="eo">socio</span>: tuto da homoj kunvivantaj</p>
			<p><span class="eo">stulta</span>: malsaĝa</p>
			<p><span class="eo">utila</span>: uzinda.</p>
			<p><span class="eo">vaki</span>: esti neokupata.</p>
			<p><span class="eo">verŝi</span>: fluigi fluaĵon el ujo.</p>
			<p><span class="eo">vervo</span>: spirita fervoro. </p>
		</div>
	</div>'
  WHERE l.kurso = 'PP' AND l.numero = 7 AND le.ordo = 2;

-- leçon 7, section 3
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##EKZERCO:144:eo##'
  WHERE l.kurso = 'PP' AND l.numero = 7 AND le.ordo = 3;

-- leçon 7, section 4
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<h2>AKTIVAJ ADJEKTIVOJ PARTICIPAJ</h2>
<p>En la momento, kiam mi vekiĝ<b>AS</b>, la sonorilo ĝuste sonAS = Kiam mi vekiĝ<b>AS</b>, la sonorilo est<b>AS</b> son<b>A</b>nta.</p>
<p>En la momento, kiam mi vekiĝ<b>IS</b>, la sonorilo ĝuste sonIS = Kiam mi vekiĝ<b>IS</b>, la sonorilo est<b>IS</b> son<b>A</b>nta.</p>
<p>En la momento, kiam mi vekiĝ<b>OS</b>, la sonorilo ĝuste sonOS = Kiam mi vekiĝ<b>OS</b>, la sonorilo est<b>OS</b> son<b>A</b>nta.</p>
<p>En la momento, kiam mi vekiĝ<b>AS</b>, la sonorilo jam pli frue son<b>IS</b> = Kiam mi vekiĝ<b>AS</b>, la sonorilo est<b>AS</b> son<b>I</b>nta.</p>
<p>En la momento, kiam mi vekiĝ<b>IS</b>, la sonorilo jam pli frue son<b>IS</b> = Kiam mi vekiĝ<b>IS</b>, la sonorilo est<b>IS</b> son<b>I</b>nta.</p>
<p>En la momento, kiam mi vekiĝ<b>OS</b>, la sonorilo jam pli frue son<b>IS</b> = Kiam mi vekiĝ<b>OS</b>, la sonorilo est<b>OS</b> son<b>I</b>nta.</p>
<p>En la momento, kiam mi vekiĝ<b>AS</b>, la sonorilo ankoraŭ ne sonis (sed poste son<b>OS</b>) = Kiam mi vekiĝ<b>AS</b>, la sonorilo est<b>AS</b> son<b>O</b>nta.</p>
<p>En la momento, kiam mi vekiĝ<b>IS</b>, la sonorilo ankoraŭ ne sonis (sed poste son<b>OS</b>) = Kiam mi vekiĝ<b>IS</b>, la sonorilo est<b>IS</b> son<b>O</b>nta.</p>
<p>En la momento, kiam mi vekiĝ<b>OS</b>, la sonorilo ankoraŭ ne sonis (sed poste son<b>OS</b>) = Kiam mi vekiĝ<b>OS</b>, la sonorilo est<b>OS</b> son<b>O</b>nta.</p>
			##EKZERCO:145:eo##			<h2>PASIVAJ ADJEKTIVOJ PARTICIPAJ</h2>
<p>En la momento, kiam mi alven<b>AS</b>, oni ĝuste verŝ<b>AS</b> vinon = Kiam mi alven<b>AS</b>, la vino est<b>AS</b> verŝ<b>A</b>ta.</p>
<p>En la momento, kiam mi alven<b>IS</b>, oni ĝuste verŝ<b>IS</b> la vinon = Kiam mi alven<b>lS</b> la vino est<b>IS</b> verŝ<b>A</b>ta.</p>
<p>En la momento, kiam mi alven<b>OS</b>, oni ĝuste verŝ<b>OS</b> la vinon = Kiam mi alven<b>OS</b>, la vino est<b>OS</b> verŝ<b>A</b>ta.</p>
<p>En la momento, kiam mi alven<b>AS</b>, oni jam pli frue verŝ<b>IS</b> la vinon =  Kiam mi alven<b>AS</b>, la vino est<b>AS</b> verŝ<b>I</b>ta.</p>
<p>En la momento, kiam mi alven<b>IS</b>, oni jam pli frue verŝ<b>IS</b> la vinon = Kiam mi alven<b>IS</b>, la vino est<b>IS</b> verŝ<b>I</b>ta.</p>
<p>En la momento, kiam mi alven<b>OS</b>, oni jam pli frue verŝ<b>IS</b> la vinon = Kiam mi alven<b>OS</b> la vino est<b>OS</b> verŝ<b>I</b>ta.</p>
<p>En la momento, kiam mi alven<b>AS</b>, oni ankoraŭ ne verŝis (sed poste verŝ<b>OS</b>) la vinon = Kiam mi alven<b>AS</b>, la vino est<b>AS</b> verŝ<b>O</b>ta.</p>
<p>En la momento, kiam mi alven<b>IS</b>, oni ankoraŭ ne verŝis (sed poste verŝ<b>OS</b>) la vinon = Kiam mi alven<b>IS</b>, la vino est<b>IS</b> verŝ<b>O</b>ta.</p>
<p>En la momento, kiam mi alven<b>OS</b>, oni ankoraŭ ne verŝis (sed poste verŝ<b>OS</b>) la vinon = Kiam mi alven<b>OS</b>, la vino est<b>OS</b> verŝ<b>O</b>ta.</p>
			##EKZERCO:146:eo##'
  WHERE l.kurso = 'PP' AND l.numero = 7 AND le.ordo = 4;

-- leçon 7, section 5
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##EKZERCO:147:eo##'
  WHERE l.kurso = 'PP' AND l.numero = 7 AND le.ordo = 5;

-- leçon 7, section 6
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##RESUMO##'
  WHERE l.kurso = 'PP' AND l.numero = 7 AND le.ordo = 6;

-- leçon 8, section 1
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<div class="rakonto" style="background-image: url(''bildoj/urbeto.jpg'');background-position: 100% 00%;background-size:contain;background-repeat: no-repeat;background-size: 50%;">
			
			<h3>SIMPLA KONFESO</h3>
 
 			<p>Ĉu vi konas N, tiun ĉi urbeton en la orienta landparto? Se ne, vi perdis nenion. Ĉi urbetoj terure similas unu la alian kaj certe vi jam vidis tiaspecan vilaĝegon, kun unusola pavimita ĉefstrato, koto aŭ polvo sur la aliaj ĝisgenue, laŭ la sezono; tri preĝejoj sur la urbocentra placo kaj trifoje tri drinkejoj; kino, aro da grizaj, seninteresaj homoj, enuo… enuo… </p>
 			<p>Jarojn mi vivis tie — sed vi ja ne konas min, vi eĉ ne povus imagi, kiel mi suferis en tiu urbaĉo. Sed ne temas pri mi kaj estas superflue plendi. Jam delonge mi forlasis ĝin. Nun temos pri la sola homo, kiun mi renkontis en tiu kotujo kaj kiun mi ankoraŭ ne forgesis.</p>
 			<p>Tuj vi aŭdos, kial.</p>
 			<p>Li estis inĝeniero, la nomo ne gravas. Ni amikiĝis rapide kaj sen ia ajn signifa okazo. Cetere mi amikiĝas tre malfacile. Mi havas nur du-tri amikojn; ĉiuj miaspecaj, neplibonigeblaj maljunaj fraŭloj, kiuj opinias la geedziĝon eltrovo de la diablo kaj ofte ili fanfaronas, per kiaj ruzaĵoj ili evitis la reton de la ina gento. La ideala kunvivo de la inĝenier-familio tamen kortuŝis eĉ min kaj foje-foje mi pripensadis, ĉu mi ne faris stultaĵon, kiam mi — antaŭ 30 jaroj — tiu knabino — eh, negrave! Egale jam… kaj mi promesis rakonti pri la inĝeniero, ne pri mi.</p>
 			<p>La inĝeniero gvidis la konstruon de la kanalo kaj — ĉar ankaŭ la prizorgadon kaj inspekton de la kanalo oni konfidis al li — ekloĝis en la urbo. Laŭ sia ekstero li estis ĉiutaga, griza hometo, mezastatura, 35-40-jara, kun okulvitroj, kaj hararo jam iom maldensa, sed ne griziĝinta. Li havis superkritike grandan kaj ampleksan scion, ne nur en sia fako, sed ankaŭ krome li estis surprize erudicia, tamen modesta kaj ĝentila; mallonge tia, kiun oni nomis iam “ĝisplanda sinjoro”. Mi nomas lin simple: homo. </p>
			
 			<p>Ni ambaŭ ege malŝatis la t.n. “sociajn formalaĵojn”. Ni renkontiĝis ie, paroladis kaj — ĉar ankaŭ mi vidis ion el la mondo — bonege komprenis unu la alian. Ofte mi vizitis ilin preskaŭ ĉiutage kaj tie mi ekkonis “hejmon” en citiloj, pri kiu kantas la poetoj. La inĝeniero, lia edzino, preskaŭ dek jarojn pli juna blonda virineto, kaj la du filinoj formis kompletan unuon. La domon plenigis la paco, harmonio, trankvilo kaj kompreno. Estis vere resaniĝo por mi ŝanĝi mian solecon por unu-vespera restado de ili kaj vidi la feliĉon regantan en tiu familio.</p>
 			<p>Mi povas diri: mi estis ilia amiko. Intima amiko mi tamen ne estis. Neniam ni intime interparolis, krom unu fojon, ankaŭ tiam nevole kaj ĝuste tion mi intencas rakonti.</p>
 			<p>Estis komenco de printempo, la lastaj tagoj de aprilo, bela, varmeta vetero. Eble pro tio ni estis iom pli komunikemaj?</p>
 			<p>Mi vespermanĝis kun ili. Post la manĝo ni restadis iomete ankoraŭ ĉirkaŭ la tablo, ni babiladis, ŝercadis, kiel kutime. La edzino poste formetis la servicon kaj akompanate de la helpemaj filinoj malaperis en la kuirejo.</p>
 			<p>Mi restis duope kun la inĝeniero.</p>
 			<p>En la forno brulis ankoraŭ la fajro kaj en la densiĝanta malhelo la flagranta lumo de la flamoj kreis ian ankoraŭ ne sentitan romantikan humoron.</p>
 			<p>Dum minutoj ni admiris senvorte la flamludon. Miaj pensoj zigzagis en la estinto kaj estanto, ĝis foje — mi mem ne scias, kiel — vortoj ekverŝiĝis el mi. Mi rakontis la tragedion de mia vivo, kiu ja nur por dudekjarulo estis tragedio; nun, post pli ol tridek jaroj, ĝi estas nur memoro, eĉ ne dolora. Ĉu aŭskultas min iu, aŭ ne, mi ne pripensis. Mi rakontis kvazaŭ al mi mem la historion malnovan, ŝablonan, tamen belan por mi, ĉar ĝi estas la mia. Vi ja ĉiuj konas la temon milfoje vivitan kaj skribitan: nobla, riĉa familio… bela knabino… bela knabino… malriĉa knabo. Renkontoj sekretaj… rapidaj kisoj… malvolo de gepatroj… adiaŭo… ĵuroj: ĉiam, neniam! … kaj poste… nenio.</p> 
 			<p>“Mi do restis fraŭlo — mi finis — kaj mi ne bedaŭras! — mi almetis kun iom falsaplomba gesto. — Sed de kiam mi konas vin…”</p>
 			<p>Mi ĉesis. Li eble pensus, ke mi envias ilian feliĉon. Estis ja nur la restaĵo de la juneca romantiko, revekita de nekutima situacio.</p>
 			<p>Silento regis dum momento.</p>
 			<p>La inĝeniero dum la tuta tempo fiksrigardis la fajron kaj lia lipo apenaŭ moviĝis ekparolante:</p>
 			<p>“Nin…?”</p>
 			<p>La vorto sonis strange, tre strange! Min frapis io ne atendita, kvazaŭ la vorto enhavus amaron kaj malfeliĉon. Mi ne povis diri ion. Ni silentis longe, poste la inĝeniero subite, kvazaŭ vekita el sorĉa sonĝo ekĝemis, prenis cigaredon, ekfumis kaj komence balbute, poste pli kaj pli flue konfesis jene: </p>
 			<p>“Vi do kredas, ke mia vivo estas plena de belo, seninterrompa feliĉo?… Do, vi eble pravas… kion ni konsideras feliĉo? Mi amas mian familion, ankaŭ mia laboro plaĉas al mi… kun la homoj mi vivas harmonie… jes, feliĉo… Sed iam…”</p>
 			<p>Jam fluis la vortoj el li: </p>
 			<p>“Vi scias, iam, kiam mi estis ankoraŭ studento, mi estis tre enamiĝinta. Tre enamiĝinta — tio ja estas sensencaĵo! Oni amas aŭ ne amas; mi ne povas gradigi la amon. Sed oni ne filozofadu! Mi estis studento de inĝeniera fako, ŝi estis filologino. Du jarojn pli juna ol mi. Ni konatiĝis… mi ne scias kiel kaj kie. Inter studentoj okazas facile la interkonatiĝo… kaj mi ekamis ŝin.” </p>
 			<p>“Ne, ŝi ne estis bela. Malalta ŝi estis, kun iom kurbaj kruroj… ŝia nazeto estis stumpeta… Miaj kolegoj ofte ŝercis pri mia amo. Sed en ĝi troviĝis ia stranga beleco, ia interna koreco, aŭ altirpovo… mi ne povas esprimi, eĉ tiam mi ne povis, kvankam tiutempe mi preferis la precizajn terminojn.”</p>
 			<p>Iom li ekridetis.</p>
 			<p>“Mi estis inĝeniero estonta! Do mallonge: mi enamiĝis al ŝi kaj mi ne estis la sola; la duono de la klaso estis miaj samsortanoj. Kaj ŝi elektis min, kvankam jam en tiu tempo mi ne estis belulo.”</p>
 			<p>“Multfoje ni kunestis… ni promenadis kune, paroladis kaj… jes, ni ankaŭ kisadis. Mi estis feliĉa kaj fiera, ne nur, ĉar ŝi amas min, sed — laŭ vere vira maniero — ĉefe ĉar ŝi min amas kaj ne iun, kiu estas pli bela, pli saĝa ol mi, kiun ŝi ankaŭ estus povinta elekti.”</p>
 			<p>“La afero daŭris du jarojn, escepte nature la libertempojn, kiam ni forlasis la urbon kaj ni ambaŭ – almenaŭ mi certe — nombris la tagojn ĝis la nova studsezono.”</p>
 			<img class="flot-g l-50 s-100" style="margin: 0 0 0 -1em;" src="eo/ppp/bildoj/skribi-poemon.jpg" />
 			<p>“Kiel min konfuzis ĉi tiu sento! Juĝu vi mem, vi konas min kaj ankaŭ tiam mi estis la sama: mi verkis poemojn! Aĉajn poemojn. Sed ili plaĉis al ŝi kaj krom ŝi neniu sciis pri ili. Niaj kolegoj, ankaŭ inĝenieroj, trovis iom ridinda jam ankaŭ mian amon en la mondo de la logaritmoj kaj kompakt-moduloj. Mi verkis, notis, laŭtlegis la poemojn, donis ilin al ŝi, ĉar ŝi petis kaj mi ne bezonis ilin. Ŝi promesis, ke ŝi montros ilin al neniu.”</p>
 			<p>“Ili koncernas nur nin, samkiel niaj kisoj”, ŝi diris. </p>
 			<p>“Tiel ni vivis dum niaj universitataj jaroj. Poste mi finis la studadon, mi forlasis la urbon kaj vetkuregis por la ĉiutaga pano. Honte, sed vere: ni devas antaŭe manĝi kaj nur poste ni povas ami.”</p>
 			<p>“Ni priparolis nenion, interkonsentis pri nenio plua. Eĉ unu vorto ne estis pri geedziĝo, miaopinie tio estis natura, alie ne povas okazi, se unu amas la alian. Mi devas trovi postenon kaj ni devas atendi, ke ankaŭ ŝi finu la studadon. Ŝian adreson — en la universitata urbo — mi konis kaj foje mi skribis al ŝi. Tiutempe mi vagadis en Francujo, do ŝi ne povis respondi.”</p>
 			<p>“Oni diras, la amo malpliiĝas proporcie al la distanco kaj tempopaso. Eble, sed mi estas esceptulo. Eĉ unu komon mia sento ne aliiĝis, mi amis ŝin same, kiel antaŭe, kiel iam ajn, nur mi kutimiĝis al tiu ĉi amo. Ĝi apartenis al mia vivo, iĝis parto de mia mio, same kiel — se estas permesate uzi tian komparon — la ĉiutaga lego de la ĵurnalo. Ĝi iĝis kontinua sento, jam ne sentata. Se oni havus dentdoloron ekde sia naskiĝo, neniu kredus, ke dento povas ne dolori, aŭ la mankon de la doloro oni rigardus malsano. Strange, ĉu ne?”</p>
 			<p>Li gestis kvazaŭ forigante muŝon.</p>
 			<img class="flot-d l-40 s-50" style="margin: 0 -1em 1em 1em;" src="eo/ppp/bildoj/simpla-konfeso.jpg" />
 			<p>“Denove mi filozofadas. Kion mi rakontis? Jes! Pasis la jaroj. Mi laboris, pensadis pri ŝi kaj mi sentis certege, ke ankaŭ ŝi faras la samon.”</p>
 			<p>“Poste alvenis la konjunkturo, vi scias, la ‘ora epoko’. Mi akiris sufiĉe bonan kaj ĉefe konstantan postenon en la hejmolando. Mia unua sento estis: ŝi. Nur nun mi konstatis, kiel malmulton mi scias pri ŝi! La vizaĝon — jes, tion mi povus desegni precize, se mi scius desegni, sed ŝian adreson, nu, la adreson de ŝiaj gepatroj mi ne sciis. Nur la nomon de la urbeto — en la orienta landparto. Mi skribis leteron adresitan sen strato kaj numero: nek respondo venis, nek la letero revenis. Mi havis nek tempon por esplori, nek monon por esplorigi kaj mi jam rezignis. Mi ja estas tia: tre facile mi rezignas anstataŭ batali.”</p>
 			<p>“Kaj unu tagon en la ĵurnalo mi legis pri konkurso por printempaj amversaĵoj. La plej sukcesaj aperis en la ĵurnalo kaj mi — vi scias — kiel pasia leganto, legis ankaŭ tiujn. La tria aŭ kvara, je mia plej granda surprizo, estis unu el miaj faraĵoj! Eraro neebla, nenia dubo: mi ja konas la proprajn poemojn. Kaj ĝi, la ‘Simpla Konfeso’, estis mia plej kara ido.”</p>
 			<p>“Nepre mi devis konstati, kiu sendis la poemon? Se ŝi estas tiu, mi trovos ŝin. Se ne… do ankaŭ tiam mi scios kion fari.”</p>
 			<p>“La versaĵoj aperis anonime. Mi skribis al la redaktoro, poste mi persone vizitis lin: li rifuzis doni klarigon antaŭ la fermo de la konkurso. Ses monatoj ankoraŭ! La premio estas dumonata somerumo de Mediteraneo por du personoj, sufiĉe granda sumo, mi komprenu…”</p>
 			<p>“Mi komprenis. Post longa kaj persista petado li promesis peri leteron al la ensendinto. Tuj mi skribis: la amaj sentoj ariĝintaj dum jaroj nun ŝvebis, plenigis la paĝojn: konfeso, peto, riproĉoj kaj denove konfeso…” </p>
 			<p>“… la letero ekiris. Dum la sekvantaj semajnoj mi estis kvazaŭ somnambulo. Mi atendis la respondon kaj samtempe mi tremis… Ĉu ne ĉio estis superflua? Mia vivo jam preskaŭ enordiĝis… eble, verŝajne ankaŭ la ŝia… kaj nun… se ĉio renversiĝos?… ĉu inde?…”</p>
 			<p>“… sed la letero jam ekiris…”</p>
 			<p>Li ekhaltis momenton, kvazaŭ serĉante la rememorojn. Li fumsuĉis la cigaredon, kiu estis jam preskaŭ elbrulinta, elspiris la fumon kaj longe postrigardis ĝin. Mi atendis la daŭrigon nervostreĉe, preskaŭ mi ekkriis: “Do? Estis ŝi?”, sed mi bridis mian senton.</p>
 			<p>Post iom da tempo li parolis plu.</p>
 			<p>“Pasis preskaŭ du monatoj, ĝis respondo venis. Mi kredis, ke mia koro krevos, kiam mi rigardis la literojn konatajn sur la koverto. Eble horojn mi sidis apud la tablo, antaŭ mi la letero, ĝis mi ekhavis kuraĝon malfermi ĝin.”</p>
 			<p>“Jes, ŝi estis. Ŝi, ŝi. Ŝi sendis la poemon, ŝi ne donis ĝin al aliulo, ankaŭ nun ŝi gardas ĝin kune kun la aliaj, kun niaj memoroj. Ŝi ne forgesis min, neniam ŝi forgesos, ŝi atendis min, eĉ nun ŝi atendas, ŝi amas min, ĉu mi volas iri al ŝi…”</p>
 			<p>Fine do! mi ĝemis profunde. Nu, stultaĵo, mi ja estus povinta imagi la finon, nature “happy end”, mi ja vidis la finalon, ĉi tiun feliĉan familion.</p>
 			<p>“Vi povas ĉesi, amiko. Vera romano! Do, tiel vi retrovis vian amatinon, vian edzinon. Vi ja estas feliĉulo, maljunulo…”</p>
 			
	 			<p>La inĝeniero nun alrigardis min unuafoje dum la rakontado. Forte li fumsuĉis la cigaredon kaj returnis siajn okulojn al la fajro jam cindriĝanta. Dume la krepusko kovris la ĉambron per malhelo. Lia vizaĝo apenaŭ estis videbla kaj min ekregis ia stranga, malcerta sento. Miaj vortoj gaje ekestintaj stumpe pendis en la densiĝinta mallumo. Mi ne kuraĝis daŭrigi, kvankam mia amiko ne faris eĉ moveton.</p>
 			<div style="background-image: url(''bildoj/letero-alvenis.jpg'');background-position: 100% 100%;background-size:contain;background-repeat: no-repeat;padding-bottom:5em;margin: 0 -1em 0 -1em;padding-left: 1em;padding-right: 25em;">
	 			
 			<p>Ni sidis tiel, senvorte, dum longaj minutoj kaj mi jam sciis, ke okazos io neatendita.</p>
 			
 			<p>La inĝeniero fine moviĝis, la cigaredrestaĵon ĵetis en la fajron kaj ekparolis per strange raŭka voĉo:</p>
 			<p>“La letero… tiu letero… alvenis hieraŭ…”</p>

 			<p><b>László Böti</b> (el <i>Norda Prismo</i>)</p>
 			</div>
		</div>'
  WHERE l.kurso = 'PP' AND l.numero = 8 AND le.ordo = 1;

-- leçon 8, section 2
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<div class="vortlisto row">
		<div class="col s12 m6">
			<p><span class="eo">adreso</span>: loko, kie iu loĝas.</p>
			<p><span class="eo">akiri</span>: havigi al si.</p>
			<p><span class="eo">amara</span>: maldolĉa.</p>
			<p><span class="eo">amplekso</span>: grandeco.</p> 
			<p><span class="eo">anonima</span>: sennoma.</p>
			<p><span class="eo">aplombo</span>: granda memfido.</p>
			<p><span class="eo">blonda</span>: helkolora.</p>
			<p><span class="eo">brido</span>: kaprimeno por ĉevalo.</p> 
			<p><span class="eo">&nbsp;&nbsp;bridi (metafore)</span>: kvietigi, malhelpi.</p>
			<p><span class="eo">centro</span>: meza punkto aŭ parto.</p> 
			<p><span class="eo">cindro</span>: brulrestaĵo.</p>
			<p><span class="eo">ĉesi</span>: ne plu fari ion.</p>
			<p><span class="eo">densa</span>: tre proksime metitaj.</p>
			<p><span class="eo">dento</span>: elstaranta buŝosto.</p>
			<p><span class="eo">desegni</span>: per plumo aŭ krajono montri la trajtojn de io aŭ iu.</p>
			<p><span class="eo">diablo</span>: malbona spirito.</p>
			<p><span class="eo">dubi</span>: esti malcerta.</p>
			<p><span class="eo">erudicio</span>: granda klero.</p>
			<p><span class="eo">fako</span>: aparta dividaĵo aŭ branĉo.</p>
			<p><span class="eo">fanfaroni</span>: sin mem laŭdi.</p>
			<p><span class="eo">filologo</span>: sciencisto pri lingvoj.</p>
			<p><span class="eo">finalo</span>: fina parto.</p>
			<p><span class="eo">flagri</span>: intermite ekflami.</p>
			<p><span class="eo">flamo</span>: hela brulanta fajrgaso.</p>
			<p><span class="eo">formala</span>: laŭregula, laŭleĝa.</p>
			<p><span class="eo">forno</span>: fajrujo por hejti kaj kuiri.</p>
			<p><span class="eo">fumo</span>: vaporo de brulaĵo.</p>
			<p><span class="eo">grado</span>: mezuro de io.</p>
			<p><span class="eo">ĝentila</span>: bonmaniere afabla.</p>
			<p><span class="eo">humoro</span>: animstato.</p>
			<p><span class="eo">inĝeniero</span>: sciencmetoda teĥnikisto.</p>
			<p><span class="eo">inspekti</span>: kontroli ies agadon.</p>
			<p><span class="eo">ĵuri</span>: solene atesti.</p>
			<p><span class="eo">ĵurnalo</span>: ĉiutaga gazeto.</p>
			<p><span class="eo">kanalo</span>: artefarita rivero.</p>
			<p><span class="eo">kino</span>: teatro, kie oni montras filmojn.</p>
			<p><span class="eo">komo</span>: interpunkcia signo (,).</p>
			<p><span class="eo">kompakta</span>: densa kaj nedisiĝema.</p>
			<p><span class="eo">komuniki</span>: diskonigi.</p>
			<p><span class="eo">koncerni</span>: esti la afero de iu.</p>
			<p><span class="eo">konfesi</span>: deklari ion malbonan pri si mem.</p>
			<p><span class="eo">konfidi</span>: plenkrede transdoni.</p>
			<p><span class="eo">konjunkturo</span>: cirkonstancaro.</p>
			<p><span class="eo">konkurso</span>: konkuro por premio.</p>
			<p><span class="eo">kontinua</span>: seninterrompa.</p>
			<p><span class="eo">koverto</span>: kovrilo por letero.</p>
			<p><span class="eo">krepusko</span>: duonlumo matena aŭ vespera.</p>
			<p><span class="eo">kritiki</span>: montri la mankojn de iu aŭ io.</p>
			<p><span class="eo">kruro</span>: korpoparto, per kiu oni marŝas.</p>
			<p><span class="eo">kuiri</span>: prepari mangaĵon.</p>
			<p><span class="eo">kurba</span>: malrekta.</p>
			<p><span class="eo">logaritmo</span>: nombro de aritmetika progresio respondanta al alia nombro de geometria progresio.</p>
		</div>
		<div class="col s12 m6">			
			<p><span class="eo">maniero</span>: metodo de agado.</p>
			<p><span class="eo">moduli</span>: variigi la tonojn.</p>
			<p><span class="eo">muŝo</span>: doma insekto.</p>
			<p><span class="eo">nervo</span>: korpoparto, kiu transdonas impresojn al la cerbo. </p>
			<p><span class="eo">nobla</span>: havanta altajn moralajn kvalitojn.</p>
			<p><span class="eo">nombro</span>: nedifinita kvanto.</p>
			<p><span class="eo">noti</span>: skribi resumon.</p>
			<p><span class="eo">numero</span>: cifero. </p>
			<p><span class="eo">pasio</span>: arda deziro.</p>
			<p><span class="eo">pavimo</span>: ŝtona tegaĵo de strato.</p>
			<p><span class="eo">persisti</span>: energie daŭri aŭ daŭrigi.</p>
			<p><span class="eo">placo</span>: libera spaco en urbo.</p>
			<p><span class="eo">plaĉi</span>: kontentigi.</p>
			<p><span class="eo">plando</span>: suba parto de piedo.</p>
			<p><span class="eo">poemo</span>: versaĵo.</p>
			<p><span class="eo">poeto</span>: versaĵisto.</p>
			<p><span class="eo">polvo</span>: sekaj eretoj de tero.</p>
			<p><span class="eo">preciza</span>: klare determinita.</p>
			<p><span class="eo">premio</span>: donaco al konkursgajninto.</p>
			<p><span class="eo">promesi</span>: certigi, ke oni faros ion.</p>
			<p><span class="eo">proporcio</span>: rilato de partoj inter si.</p>
			<p><span class="eo">raŭka</span>: sonanta skrape kaj malklare.</p>
			<p><span class="eo">redaktoro</span>: persono, kiu estras gazeton.</p>
			<p><span class="eo">renversi</span>: faligi ion aŭ iun.</p>
			<p><span class="eo">reto</span>: truplena fadenplektaĵo.</p>
			<p><span class="eo">rezigni</span>: definitive forlasi ion.</p>
			<p><span class="eo">romano</span>: longa proza fikciaĵo.</p>
			<p><span class="eo">romantiko</span>: literatura doktrino, kiu preferas fantazion al racio.</p>
			<p><span class="eo">ruza</span>: lerte trompa.</p>
			<p><span class="eo">senco</span>: komprenebleco.</p>
			<p><span class="eo">servico</span>: manĝilaro.</p>
			<p><span class="eo">sezono</span>: jarkvarono, laŭ vidpunkto de la normala vetero.</p>
			<p><span class="eo">somnambulo</span>: persono, kiu marŝas dormante.</p>
			<p><span class="eo">sonĝo</span>: dumdorma mensbildo.</p>
			<p><span class="eo">sorĉi</span>: ĉarmegi.</p>
			<p><span class="eo">staturo</span>: korpalteco.</p>
			<p><span class="eo">stumpo</span>: mallonga restaĵo de io.</p>
			<p><span class="eo">suĉi</span>: alspiri al si.</p>
			<p><span class="eo">ŝablono</span>: modelo, laŭ kiu oni eltranĉas objekton; (metafore): banalaĵo.</p>
			<p><span class="eo">ŝerci</span>: paroli neserioze, ridige.</p>
			<p><span class="eo">termino</span>: speciala vorto aŭ esprimo.</p>
			<p><span class="eo">tragedio</span>: dramo kun malĝoja fino.</p>
			<p><span class="eo">turni</span>: ĉirkaŭmovi ion.</p>
			<p><span class="eo">universitato</span>: centro de supera studado.</p>
			<p><span class="eo">veti</span>: riski sumon en ludo.</p>
			<p><span class="eo">vetero</span>: stato de la atmosfero.</p>
			<p><span class="eo">zigzago</span>: linio, iranta alterne laŭ kontraŭaj direktoj.</p>
			<p><span class="eo">“happy end” </span>(anglaĵo) = feliĉa fino.</p>
		</div>
	</div>'
  WHERE l.kurso = 'PP' AND l.numero = 8 AND le.ordo = 2;

-- leçon 8, section 3
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##EKZERCO:148:eo##'
  WHERE l.kurso = 'PP' AND l.numero = 8 AND le.ordo = 3;

-- leçon 8, section 4
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<h2>ADVERBOJ PARTICIPAJ</h2>
<p class="parto">La adverboj participaj rilatas adverbe al la ĉefa verbo de la propozicio, kaj sekve la agado aŭ estado, kiun ili esprimas, estas agado de aŭ al la subjekto de la ĉefa verbo, aŭ estado de tiu subjekto. Ili ne povas havi rilaton kun aliaj substantivoj ol la subjekto en la propozicio.</p> 
<p>Ekz-e: <b>Legante</b> la ĵurnalon, la inĝeniero trovis sian junaĝan poemon. La inĝeniero verkis poemojn <b>inspirite</b> de la amo. En ambaŭ ekzemploj temas pri la inĝeniero, kiu ja legis kaj estis inspirita. “Legante” sciigas, kiam la inĝeniero trovis; “inspirite” sciigas, kiel aŭ kial li verkis.</p>
			##EKZERCO:149:eo####EKZERCO:150:eo##'
  WHERE l.kurso = 'PP' AND l.numero = 8 AND le.ordo = 4;

-- leçon 8, section 5
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##EKZERCO:151:eo####EKZERCO:152:eo##'
  WHERE l.kurso = 'PP' AND l.numero = 8 AND le.ordo = 5;

-- leçon 8, section 6
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##RESUMO##'
  WHERE l.kurso = 'PP' AND l.numero = 8 AND le.ordo = 6;

-- leçon 9, section 1
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<div class="rakonto">
			<h3>HORLOĜO — MALGRANDA MIRAKLO</h3>
 
 			<p>La poŝ- aŭ brakhorloĝo konsistas proksimume el 100&nbsp;diversaj partoj. Tiuj ĉi konsistaĵoj funkciigas unu la alian per matematika precizeco. La malgranda balanciero, kiu reguligas la funkciadon de la horloĝo, kiu dum tagoj kaj noktoj, jarojn post jaroj senĉese persisteme moviĝas, plenumas tiamaniere la mirindan funkcion, kiu ne povas esti efektivigata de iu alia maŝino aŭ mekanismo.</p> 
 			<p>Mi volas tion al vi pruvi per sekvantaj klarigoj.</p> 
 			<img class="flot-d l-60 s-100" src="eo/ppp/bildoj/horlogxoj.jpg"><p>La diametro de unu normala poŝhorloĝa balanciero mezuras 14-18&nbsp;mm. Vi bone scias, ke ĝi turniĝas, pli precize dirite balanciĝas tien kaj reen. Imagu nun, ke la balanciero — anstataŭ tien kaj reen balanciĝi — ruliĝas nur unudirekten. En tiu ĉi kazo iu imagita punkto sur la perimetro de la balanciero, dum unu turniĝo je 360&nbsp;angulaj gradoj, efektivigas 56,5&nbsp;mm longan vojon. Sed la balanciero ne turniĝas je 360&nbsp;gradoj, sed proksimume je 540&nbsp;gradoj, tial unu turniĝo poste mezuras tien 84,75&nbsp;mm kaj reen la samon. Dum unu sekundo la balanciero turniĝas ĉiam kvinfoje — do la punkto sur ĝia perimetro efektivigas vojon longan 423,75&nbsp;mm, dum unu minuto 2&nbsp;542&nbsp;cm (aŭ 25,4&nbsp;m), dum unu horo ĝi faras 1525&nbsp;m (proksimume 1 kaj duonon da km) kaj dum unu tago 36&nbsp;km (precize 36,612&nbsp;km). </p> 
 			<p>Horloĝo kutime funkcias sen riparo 3&nbsp;jarojn; dum tiu tempo la supozita punkto sur la perimetro de la balanciero efektivigas 39&nbsp;420&nbsp;km longan vojon, kio egalas preskaŭ al la longeco de la ekvatoro. La balanciero turniĝas sur du pivotoj, kies diametro mezuras nur 0,12&nbsp;mm.</p> 
 			<p>Lokomotivo, kiu funkcias po 10&nbsp;horoj tage per rapideco de po 45&nbsp;km hore, devus funkcii 89&nbsp;tagojn por efektivigi la saman vojon, kiun la balanciero plenumas dum 3&nbsp;jaroj. La lokomotivo devus funkcii 8&nbsp;900&nbsp;tagojn, t.e. dum 24&nbsp;jaroj ĉiutage 10&nbsp;horojn, ĝis ĝia akso faros la saman nombron de turniĝoj, kiun efektivigas la malgranda pivoto de balanciero dum 3&nbsp;jaroj.</p> 
 			<p>Mi estas tute certa, ke multaj el vi tute ne zorgas pri sia horloĝo kaj mi scias, ke vi neprave estas malkontentaj, se ĝi post 1-2&nbsp;jara bona funkciado subite ne montras precizan tempon aŭ iom difektiĝas.</p> 
 			<p>Se vi respektas la laboregon kaj malgrandecon de via horloĝo kaj se vi postulas de ĝi precizecon, vi devas ĝin ĝustatempe transdoni al horloĝista specialisto, kiu sanigos ĝin. La horloĝo estas via amiko, kiu al vi senĉese servas, tial ĝi meritas ankaŭ viaflanke dankoplenan zorgadon kaj delikatan manipuladon.</p> 
 			<p>La balanciero havas spiral-risorton, kiu konsistas el tre sentema hardika ŝtalo. Ĉiu nespecialista aŭ fuŝa tuŝeto difektas ĝin. La valoro de spiral-risorto estas kelkoblo de la valoro de sampeza oro; tamen, ĉiu fuŝulo kaj diletanto tre ŝatas piki en ĝin per kudrilo aŭ tranĉileto, se la horloĝo subite ĉesas funkcii.</p> 
 			<p>La plej granda malamiko de horloĝo estas la polvo. Ĝi enpenetras ĉien kaj ankaŭ en bone fermitan horloĝon. Ju pli malgranda estas la horloĝeto, des malpli da polvo sufiĉas por kaŭzi ĝian malfunkciadon kaj difektiĝon. Ankaŭ la oleado estas tre grava afero. Mi avertas vin, ne lubriku mem vian horloĝon per iu ajn maŝin-oleo. La ŝtonlagroj estas profundaĵetformaj kaj ili prizorgas la radpivotojn per oleo. Tiu devas esti flumoleca kaj likviĝema, por ke ĝi ne gluu. La eta kvanto kaj la necesa maldenseco de oleo estas kaŭzoj, ke ĝi iom post iom sekiĝas. Tial la internacia horloĝista organizo donas nur duonjaran garantion por brakhorloĝoj.</p> 
 			<img class="flot-d l-50 s-100" src="eo/ppp/bildoj/horlogxisto.jpg"><p>Se vi transdonas vian horloĝon al horloĝisto-fakulo por riparo, ne pensu, ke li ĝin nur simple purigos. Solida specialisto tre zorge ekzamenas, kiu ero el 100&nbsp;partoj de via horloĝo estas difektita. Li certe devos iun ripari aŭ anstataŭigi. La lubrikado de horloĝo estas vere malgranda scienco. Antaŭ ĉiu lubrikado devas esti forigita la malnova ŝmiraĵo, aliokaze ĝi senvalorigas la novan oleon. Por lubrikado estas uzataj tri diversspecaj oleoj.</p> 
 			<p>Ne postulu de via horloĝeto neeblaĵon — ekzemple, ke ĝi daŭre je sekundo precize montru la tempon laŭ radiosignaloj. La kronometro de observejo, laŭ kiu la tempo per radiosignalo estas elsendata, valoras centmilfoje pli multe ol via horloĝo. La observeja kronometro estas fermita en speciala vitra ujo, en kiu oni per baroskopo kontrolas konstantan aerpremon. Ĝi estas lokita en speciala ejo kun konstanta varmogrado, kie la ebleco de skuoj estas plej malgranda. La neprecizan funkciadon de via poŝ- aŭ brakhorloĝo kaŭzas la senĉesa moviĝo de via korpo, brako, aŭ ŝanĝiĝo de varmo kaj diversaj aliaj influoj.</p> 
 			<p>Ĉiu horloĝo laŭ sia grandeco kaj kvalito devas esti post 1-3 jaroj purigita kaj reviziita. Tio estas ĉe ĉiu alia maŝino pli frue urĝa kaj memkomprenebla, tial de unu horloĝo oni ne atendu eternan kaj precizan funkciadon.</p> 
 			<p>Konfidu vian horloĝon nur al vera specialisto kaj ne lasu ĝin detrui de iu ajn fuŝulo. Fuŝita horloĝo ne funkcias plu bone.</p> 
 			<p>Se vi zorgoplene manipulas vian horloĝon, ĝi rekompencas vin per relativa precizeco. Restreĉu horloĝon regule matene (aŭ vespere), dumnokte lasu ĝin en la sama pozicio (pendanta aŭ kuŝanta). Gardu ĝin antaŭ fortaj magnetoj (ekz. elektromotoroj, radioaparatoj), alie ĝia delikata spiral-risorto magnetiĝas kaj la precizeco de la horloĝo tute detruiĝas. Ŝirmu ĝin kontraŭ pli grandaj diferencoj de varmeco ol 20&nbsp;varmogradoj. Ekzemple la horloĝo portita dumtage sur brako aŭ en poŝo, ne povas montri precize, se ĝi dumnokte kuŝas sur glacimalvarma vitro de nokta tableto en nehejtita dormoĉambro. En malvarmo la horloĝo plirapidiĝas, en varmo ĝi malfruiĝas.</p> 
 			<p>Malnovaj, tre ofte riparitaj horloĝoj ne povas funkcii kiel la novaj. Ankaŭ bona horloĝo foruziĝas per sia senripoza aktiveco dum longaj jaroj kaj ĝi meritas ripozon. Tial la memoraĵojn pri niaj geavoj ni konservu plej bone en vitrinoj kaj ne uzu ilin plu.</p> 
 			<p>Al viaj horloĝoj mi deziras bonan funkciadon kaj precizan tempon.</p>

 			<p><b>Stanislav Knižek</b> (el <i>Esperantisto Slovaka</i>)</p>
		</div>
		
		<p class="creditphoto">Bildoj:<br>vitaly tiagunov /Adobe Stock<br>Fxquadro /Adobe Stock</p>'
  WHERE l.kurso = 'PP' AND l.numero = 9 AND le.ordo = 1;

-- leçon 9, section 2
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<div class="vortlisto row">
		<div class="col s12 m6">
			<p><span class="eo">balanci</span>: movi tien kaj reen.</p>
			<p><span class="eo">balanciero</span>: radeto en horloĝo, kiu reguligas la moviĝon.</p>
			<p><span class="eo">baroskopo</span>: aparato uzata por mezuri gaspremon.</p>
			<p><span class="eo">brako</span>: korpoparto de la ŝultro ĝis la mano.</p>
			<p><span class="eo">centimetro (cm)</span>: centono de metro.</p>
			<p><span class="eo">detrui</span>: ruinigi, neniigi.</p>
			<p><span class="eo">diametro</span>: mezuro trans cirklo tra la centro.</p>
			<p><span class="eo">difekti</span>: kaŭzi malbonon al io.</p>
			<p><span class="eo">diletanto</span>: persono, kiu okupiĝas nur supraĵe pri io.</p>
			<p><span class="eo">ekvatoro</span>: imaga linio ĉirkaŭ la tero, meze inter la polusoj. </p>
			<p><span class="eo">ekzameni</span>: detale esplori.</p>
			<p><span class="eo">elektro</span>: unu formo de fizika energio.</p>
			<p><span class="eo">garantii</span>: firme promesi ion.</p>
			<p><span class="eo">glacio</span>: akvo solidigita per malvarmo.</p>
			<p><span class="eo">influi</span>: rezultigi agadon de iu aŭ io.</p>
			<p><span class="eo">kazo</span>: difinita aparta okazo.</p>
			<p><span class="eo">kilometro (km)</span>: milo da metroj.</p>
			<p><span class="eo">konservi</span>: zorgi, ke io ne difektiĝu aŭ perdiĝu.</p>
			<p><span class="eo">konsisti</span>: havi kiel erojn.</p>
			<p><span class="eo">konstanta</span>: senŝanĝa, senĉesa.</p>
			<p><span class="eo">kontroli</span>: detale esplori, oficiale ekzameni.</p>
			<p><span class="eo">kronometro</span>: tre preciza horloĝo.</p>
			<p><span class="eo">kudri</span>: kunigi per fadeno kaj speciala pinta ilo.</p>
			<p><span class="eo">kvalito</span>: grado de boneco.</p>
			<p><span class="eo">kvanto</span>: nombro da objektoj aŭ personoj.</p>
			<p><span class="eo">lagro</span>: maŝina peco, kiu portas la akson de rado.</p>
			<p><span class="eo">likva</span>: flueca.</p>
			<p><span class="eo">lokomotivo</span>: maŝino por tiri vagonojn sur fervojo.</p>
			<p><span class="eo">lubriki</span>: olei maŝinon.</p>
			<p><span class="eo">magneto</span>: ferpeco kun altira povo.</p>
			<p><span class="eo">manipuli</span>: manuzi.</p>
			<p><span class="eo">maŝino</span>: aparato, kiu produktas, transsendas aŭ utiligas forton.</p>
			<p><span class="eo">matematiko</span>: scienco pri kalkulo.</p>
		</div>
		<div class="col s12 m6">			
			<p><span class="eo">mekanismo</span>: tuto de la pecoj de maŝino.</p>
			<p><span class="eo">memori</span>: konservi antaŭe ricevitajn ideojn.</p>
			<p><span class="eo">meriti</span>: esti inda je rekompenco.</p>
			<p><span class="eo">mezuri</span>: taksi kaj difini grandecon.</p>
			<p><span class="eo">milimetro (mm)</span>: dekono de centimetro.</p>
			<p><span class="eo">minuto</span>: sesdekono de horo.</p>
			<p><span class="eo">motoro</span>: maŝino, kiu produktas movon.</p>
			<p><span class="eo">normala</span>: ordinara, laŭkutima.</p>
			<p><span class="eo">oleo</span>: grasa fluidaĵo.</p>
			<p><span class="eo">penetri</span>: eniĝi al io.</p>
			<p><span class="eo">perimetro</span>: linio ĉirkaŭ figuro.</p>
			<p><span class="eo">piki</span>: enigi pinton en ion.</p>
			<p><span class="eo">pivoto</span>: turnpunkto.</p>
			<p><span class="eo">pruvi</span>: montri, ke io estas vera.</p>
			<p><span class="eo">punkto</span>: preciza loko, kie io okazas.</p>
			<p><span class="eo">pura</span>: sendifekta.</p>
			<p><span class="eo">rado</span>: rondaĵo turniĝanta ĉirkaŭ akso.</p>
			<p><span class="eo">regula</span>: ripetiĝanta post fiksita periodo.</p>
			<p><span class="eo">relativa</span>: pli-malplia.</p>
			<p><span class="eo">revizii</span>: ekzameni kaj kontroli.</p>
			<p><span class="eo">ripari</span>: rebonigi.</p>
			<p><span class="eo">risorto</span>: elasta metala fadeno.</p>
			<p><span class="eo">sekundo</span>: sesdekono de minuto.</p>
			<p><span class="eo">signalo</span>: komunika signo.</p>
			<p><span class="eo">solida</span>: firma, konfidinda.</p>
			<p><span class="eo">spiralo</span>: rondiranta linio, kiu malproksimiĝas de sia centro.</p>
			<p><span class="eo">ŝirmi</span>: protekti ion por eviti difekton.</p>
			<p><span class="eo">ŝmiri</span>: froti per grasaĵo.</p>
			<p><span class="eo">ŝtalo</span>: tre malmola metalo.</p>
			<p><span class="eo">valori</span>: havi meriton, altan prezon.</p>
			<p><span class="eo">varma</span>: sento produktata de brulo aŭ fajro.</p>
			<p><span class="eo">vitrino</span>: elmontra vitrujo.</p>
		</div>
	</div>'
  WHERE l.kurso = 'PP' AND l.numero = 9 AND le.ordo = 2;

-- leçon 9, section 3
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##EKZERCO:153:eo##'
  WHERE l.kurso = 'PP' AND l.numero = 9 AND le.ordo = 3;

-- leçon 9, section 4
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##EKZERCO:154:eo####EKZERCO:155:eo##'
  WHERE l.kurso = 'PP' AND l.numero = 9 AND le.ordo = 4;

-- leçon 9, section 5
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##EKZERCO:156:eo####EKZERCO:157:eo##'
  WHERE l.kurso = 'PP' AND l.numero = 9 AND le.ordo = 5;

-- leçon 9, section 6
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##RESUMO##'
  WHERE l.kurso = 'PP' AND l.numero = 9 AND le.ordo = 6;

-- leçon 10, section 1
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<div class="rakonto">
			<h3>KOLEKTANTO DE ĈIELARKOJ</h3>
 
 						<p>La atmosfero en la triaklasa kupeo estis sufoka. Ŝvitodoro ŝvebis en la aero. Kun malŝato mi pensis pri la multaj horoj de vojaĝo, kiuj ankoraŭ staris antaŭ mi.</p>
 			<p>Miaj kunvojaĝantoj vigle babilis pri temoj, kiuj eĉ ne por momento povis fiksi mian atenton.</p>
 			<img class="flot-d l-50 s-100" src="eo/ppp/bildoj/knabino-trajno.jpg"><p>Vidalvide de mi, ĉe la kontraŭa flanko de la fenestro, sidis dekjara nigrokula knabino. Sur ŝia vizaĝo ŝajnis al mi diveni la saman enuon, kiun mi mem sentis.</p>
 			<p>Mi decidis alparoli ŝin.</p>
 			<p>Responde al miaj demandoj Sita rakontis, ke ŝi lernas en la kvara klaso de elementa lernejo. Ŝi ŝatas la geografion kaj malŝatas la matematikon. Post kelkaj pluaj demandoj la konversacia materialo estis elĉerpita. Paŭzo ekestis.</p>
 			<p>Mi ekmemoris pri kelkaj leteroj kun diverslandaj poŝtmarkoj, kiujn mi havis en la poŝo, kaj pensis, ke per ili mi povus ĝojigi la knabinon.</p>
 			<p>“Ĉu vi kolektas ion, Sita?”</p>
 			<p>“Kolekti?… Ne, nenion mi kolektas”, ŝi respondis.</p>
 			<p>Silento. Mi ekserĉis alian temon por vivteni la konversacion.</p>
 			<p>“Kaj ĉu vi kolektas ion, sinjoro? Kion vi kolektas?”</p>
 			<p>La fronta atako de Sita frapis min neatendite.</p>
 			<p>Mi ja estis veterana kolektanto de ĉio imagebla. Por ne kompliki la aferon, mi volis diri ion simplan, kiel poŝtmarkojn aŭ bildkartojn. Tamen post momento tio ŝajnis al mi neinda banalaĵo. Dum tempero mi pretis konfesi al ŝi la sekreton de mia vivo: mi kolektas aventurojn! Sed tio ŝajnis tro abstrakta. Ŝi certe ne kapablus kompreni min.</p>
 			<p>Dum kelkaj sekundoj mi rigardis tra la fenestro meditante. Ĉar ni sidis en la unua vagono de la trajno, mi klare povis vidi tra la fenestro la vaportufon elŝprucatan el sub la lokomotivo. La sunradio rompiĝadis tra la vaporo kaj formis duonrondan zonon de ĉielarko ĉirkaŭ ĝi.</p>
 			<img class="flot-g l-40 s-40" style="margin: 0 1em 1em 0;" src="eo/ppp/bildoj/cxielarko1.jpg"><p>“Ĉielarko!” mi ekkriis kun admiro.</p>
 			<p>“Kion?… Ĉu ĉielarkojn vi kolektas?” demandis mia inkvizitoro kun la okuloj larĝe malfermitaj.</p>
 			<p>“Kion?… Jes, kompreneble, hm, ĉielarkojn. Ĉu io stranga pri tio?”</p>
 			<p>Sita ne sciis ĉu kredi al mi aŭ ne. Subokule ŝi ekzamenadis mian vizaĝon por malkovri sur ĝi ŝercan rideton. Sed ŝerca rideto tie malestis.</p>
 			<p>“Kaj kiel vi kolektas ilin?” ŝi kuraĝis finfine demandi.</p>
 			<p>La radoj de la vagono per monotona frapado akcentadis la sufokan atmosferon de la kupeo. La ĉielarko ĉirkaŭ la vaportufo vetkuradis kun la lokomotivo antaŭ miaj okuloj.</p>
 			<p>“Kiel mi kolektas ilin? Simple. Kie ajn mi vidas unu, mi enmetas ĝin en mian kolekton… Kompreneble, nur se mi ne havas ankoraŭ similan ekzempleron.”</p>
 			<p>La nigraj okuloj de Sita fikse rigardis min. Ili atendis. Ili atendis iun gravan malkovron.</p>
 			<p>“Ĉar ĉielarkoj povas esti, vi ja scias, tre diversspecaj…”</p>
 			<p>“La unua, kiu eniris mian kolekton, estis tre kutima ĉielarko. Mi vidis ĝin, kiam mi estis apenaŭ kvinjara. Mi subite ĉesigis la ludadon kun mia pli aĝa frato kaj aliaj vilaĝaj knaboj. Senspire mi gapis al la bunta miraklo. Ĝi ŝajnis tiel proksima!”</p>
 			<p>“Mia frato, vidinte mian admiron, diris: ‘Tiu, kiu sukcesas pasi sub la ĉielarko, ĉiam en la vivo sukcesos plenumi sian deziron!’ Li ŝajnis paroli serioze. Mi eĉ momenton ne dubis pri la vereco de lia aserto.”</p>
 			<p>“Senvorte, kvazaŭ hipnotita, mi ekmarŝis en la direkto de la mirinda pordego. Mi rapidis tra la vilaĝa strato ne deprenante la rigardon de la ĉielo, kaj alveninte al la rando de la vilaĝo mi daŭrigis la marŝadon tra la vasta paŝtejo. Ŝajnis al mi, ke mi rapide alproksimiĝas al la arko de ĉiuj sukcesoj.”</p>
 			<p>“Kaj ĉu vi sukcesis? Ĉu vi pasis sub ĝi?” senpaciencis Sita.</p>
 			<p>“Ne. La suno malleviĝadis pli kaj pli, kaj la ĉielarko paliĝis ĝis fina malapero. Nur mi restis sola kun mia senlima admiro, gapanta al la ĉielo.”</p>
 			<p>“La vidaĵo de tiu ĉielarko restis tiel profunde gravurita en mia menso, ke mi senhezite povas diri, ke ĝi restis mia propraĵo. Tiu estis mia unua sperto pri la posedo de ĉielarko. Posedo, cetere, kiun neniu povas de mi forpreni, okazu kio okazos.”</p>
 			<p>“Poste sekvis aliaj. Unu post la alia ili fariĝis miaj, kreante mian kolekton.”</p>
 			<p>Sita sidis senmova aŭskultante min. Ŝia patro proponis al ŝi oranĝon, sed ŝi malakceptis. Ŝi estis tro okupita per la rakonto.</p>
 			<p>“Kaj ĉu vi havas multajn ĉielarkojn, sinjoro? Kiaj ili estas?”</p>
 			<p>“Hm, jes. Ne estas multaj en mia kolekto, ĉar… mi ja ne prenis ĉiun ajn ĉielarkon. La kutimajn mi lasas por aliaj, kaj prenas nur la eksterordinarajn. Ekzemple…”</p>
 			<p>Dum momento mi intense serĉadis en la arĥivo de mia memoro iun elstaran ekzempleron el mia kolekto. Fine jen ĝi estis.</p>
 			<img class="flot-d l-60 s-100" src="eo/ppp/bildoj/cxielarko2.jpg"><p>“Mi troviĝis en antikva marborda urbeto de mia lando. Post pluva mateno subite disiĝis la nuboj kaj, eĉ antaŭ ol mi ekvidis la sunon, ĉielarkoj aperis sur la ĉielo. Mi diris ‘ĉielarkoj’, ĉar ne estis unu, sed du. Unu super la alia. La pli malgranda estis klara, kun koloroj tre intensaj. Unu el ĝiaj flankoj ripozis sur la antikvaj tegmentoj de la domaro, dum la alia dronis en la maron. Ĝi aspektis kvazaŭ simbolo esprimanta la ligon inter la urbo kaj la maro. Kaj la ĉielarko pravis. Dum multaj jarcentoj la loĝantoj de la urbo estis navigistoj, fiŝkaptistoj, piratoj, markomercistoj kaj maristoj sur ĉiuspecaj ŝipoj.”</p>
 			<p>“Super tiu ĉi bildo, kvazaŭ formante kadron al ĝi, etendiĝis la dua ĉielarko. Iomete pli pala ol la suba.”</p>
 			<p>“Kaj nun, Sita, se vi promesas ne rakonti ĝin al aliaj, mi diros al vi sekreton.”</p>
 			<p>“Mi promesas”, flustris la knabino.</p>
 			<p>Mi ĉirkaŭrigardis por certiĝi ke neniu aŭskultas nin. Tiam mi alproksimiĝis al la knabino.</p>
 			<p>“Imagu”, mi diris, “la koloroj de la supra ĉielarko estis renversitaj. Ĉiu bona kolektisto scias, ke 
la violkoloro kaj la blua estas la supraj koloroj, kaj la ruĝa kaj indiga troviĝas malsupre. Kaj tiel ili troviĝis en la malsupra ĉielarko. Sed en la supra la ordo estis renversita, kvazaŭ ĝi nur respegulus la alian.”</p>
 			<p>Sita rigardis min konsternite. Sur ŝia vizaĝo estis videble ke ŝi estis konscia pri la graveco de la sekreto.</p>
 			<p>“Kaj poste…?”</p>
 			<p>“Poste… Mi fotografis per kolora filmo la duoblan ĉielarkon, kaj se iu ne kredas, mi montras la foton. Aŭ mi diras ‘demandu Nina. Ŝi estis tie kaj ŝi povas konfirmi mian aserton’.”</p>
 			<p>“Sed mi prezentos al vi alian ekzempleron de mia kolekto”, mi reprenis la rakonton, jam kuraĝigita per la granda intereso, kiun la brunhaŭta amikino montris por mia kolekto.</p>
 			<p>“Okazis tio en alta montaro. Kune kun kelkaj amikoj mi troviĝis en tendaro, en valeto inter neĝaj pintoj. Pro la alteco ni ĉiuj sentis iom da sufokiĝo, kiu ne permesis al ni dormi.”</p>
 			<p>“Post longa sendorma horo mi decidis eliri el la tendo. Ekstere mi trovis mian amikon Georgon, sidantan sur ŝtono. Fumante li observis la naturon.”</p>
 			<p>“Estis plenluna nokto. La luno kvazaŭ grandega lanterno pendis super la proksima glaciejo, banante la rokecan pejzaĝon per blua mistera lumo. La ĉielo surhavis milojn da steloj. Ĉiuj brilegis tiel grandaj, kiajn mi ankoraŭ neniam vidis ilin. La altaĵa aero estis pura pro la maldenseco kaj sekeco. La videblo estis senfina.”</p>
 			<p>“Subite du flamoj aperis sur ambaŭ flankoj de la luno, apogante sin sur montojn ĉirkaŭ la glaciejo. ‘Kia stranga afero!’ diris Georgo, homo kun longa sperto montgrimpa.”</p>
 			<p>“Antaŭ niaj surprizitaj okuloj la du flamoj komencis leviĝadi transformiĝante en du kolonojn. Nun ili kurbiĝadis. Iom post iom ili formis arkon ĉirkaŭ la luno. Kaj fine la arko koloriĝis je ĉiuj koloroj de la ĉielarko.”</p>
 			<p>“La spektaklo estis eksterordinare bela. Ni staris tie kun la spiro retenita, kaj ĝuis intense.”</p>
 			<p>“Poste mi eksciis ke nur malmultaj homoj en la mondo ekzistas kiuj vidis similan fenomenon. Kaj kompreneble, mi estas tre fiera havi en mia kolekto tian maloftaĵon.”</p>
 			<p>Eta Sita senspire min aŭskultis. Ŝi glutis ĉiun mian vorton.</p>
 			<p>“Rakontu ankoraŭ, sinjoro”, ŝi diris kun peta voĉo, kiam mi ekpaŭzis. Kaj mi daŭrigis.</p>
 			<p>“Sed en mia kolekto troviĝas ne nur maloftaĵoj, sed eĉ veraj altvaloraj ekzempleroj. Mi prezentos al vi la plej altvaloran el ĉiuj miaj ĉielarkoj. La plej multekostan, por tiel diri.”</p>
 			<p>“En iu malproksima lando mi vizitis foje la iaman imperiestran palacon, kiu nun estas 
transformita en muzeon. Ĉiuj salonoj estis malfermitaj. Nur unu ĉambreton, en kiu la krono de la imperiestro estis gardata, oni malfermis nur je speciala peto de la vizitantoj. Post la necesaj formalaĵoj la gardisto malŝlosis la pordon, kaj mi eniris. Nun ni staris en malgranda ĉambro, malplena kaj sen ornamaĵoj. ‘Kio okazos?’ ni demandis nin. Sed la respondo jam venis.”</p>
 			<p>“El la planko, meze de la ĉambro, ekleviĝis kvarangula kolono. Kiam ĝi leviĝis ĝis la alteco de niaj brustoj, subite la metalaj vandoj de la kofro sur la supro de la kolono malfermiĝis lasante libera vitran skatolon. Kaj en ĝi la kronon.”</p>
 			<p>“Jes, vere, tie estis antaŭ niaj okuloj la ora kronego de la imperiestro, plena de brilaj juveloj. La plej belaj rubenoj kaj safiroj viciĝis tie unu apud la alia. Kaj pluraj perloj je grandeco neniam vidita.”</p>
 			<p>“Kia bankedo por la okuloj!”</p>
 			<p>“Sed la plej valora juvelo troviĝis sur la frunto de la krono. Ĝi estis brilianto granda kiel juglando. Neniam mi sonĝis eĉ pri io simila. Jam mi ne memoras ĉu ĝia nomo estas Kohinor aŭ Orlov, aŭ io alia, sed mi estas certa, ke ĝi estas unu el la plej grandaj briliantoj ekzistantaj en la mondo.”</p>
 			<p>“Subite okazis io neatendita. Tra trueto sur la kolora kurteno kiu kovris la fenestron, sunradio eniris, kaj tusis la kronon. Ĝi tuŝis precize la gigantan diamanton. Sammomente centoj da delikataj strioj de ĉielarkoj kovris la murojn kaj la plafonon de la ĉambreto. Subite ni jam ne troviĝis en senornama griza ĉambreto. Ni staris meze de luksa salono kun cento da ĉielarketoj kiuj multobligis la dimensiojn de la ejo, kaj kreis la ĝustan etoson por la observado de la imperiestra krono.”</p>
 			<p>“Jen, Sita, tiu ĉi estas la plej altvalora el ĉiuj miaj ĉielarkoj. Kaj mi devas al vi konfesi, ke por mi ĝi valoras pli ol se mi posedus la brilianton mem. Ĉar havante la juvelon, mi ĉiam timus ke iu ĝin forŝtelos de mi. Kaj krome, eble neniam mi sukcesus plu per ĝi krei tiel riĉan aron da ĉielarkoj.”</p>
 			<p>“Vere, sinjoro, mi kredas ke vi estas tre riĉa! Mi envias vin.”</p>
 			<p>“Ho, ne, ne diru tion”, mi rifuzis la flaton kun modesta rideto. “Eble iam ankaŭ vi povos fari vian propran kolekton, kaj fariĝi eĉ pli riĉa ol mi.”</p>
 			<p>“Sed ne kredu”, mi daŭrigis post ioma paŭzo, “ke ĉiuj ĉielarkoj el mia kolekto estas altvaloraj. Estas en ĝi ankaŭ kelkaj kiujn mi kolektis nur pro strangeco. Estas inter ili, ekzemple, unu komika ĉielarko.”</p>
 			<p>“Komika? Kiel povas esti ĉielarko komika? Rakontu, sinjoro.”</p>
 			<p>“Jen kiel okazis. Mi dormis en la sama ĉambro kun miaj gepatroj. Estis somermeza frumateno. Tra fendo apud la kurteno penetris iom da sunradioj, kiuj inundis la ĉambron per milda oranĝkolora duonlumo. Mi estis kuŝanta surdorse. Subite mi rimarkis sur la plafono kolorajn striojn. Post ioma observado mi konstatis, ke temis pri vera ĉielarko, en kiun endesegniĝis vico da montetoj, barante tiel partojn de kelkaj koloroj.”</p>
 			<p>“Mi fariĝis scivolema. Mi ĉirkaŭrigardis serĉante la fonton de la stranga ĉielarko, sed ne sukcesis malkovri ĝin. Mi klopodis fari logikajn deduktojn pri la direkto de la radioj. La serĉado de meblo kun dentumita rando restis senutila. Longe mi kuŝis sendorma, cerbumante.”</p>
 			<p>“En certa momento mia patrino vekiĝis. Kaj tio ĉion ŝanĝis.”</p>
 			<p>“Per sia unua movo ŝi elstreĉis la brakon al la nokta tableto, kaj el la glaso kun akvo ŝi elprenis sian falsan dentaron. Dum tiu operacio la ĉielarko malaperis de la plafono. Tuj poste ĝi reaperis vigle ondumanta, sed… sen la serio de montetoj. Jen estis la solvo de mia enigmo: komika ĉielarko kreita en glaso da akvo kaj borderita per falsdentaro!”</p>
 			<p>Mia kunvojaĝantino ekridis jam antaŭ la fino de la rakonto. Ŝi divenis la finon kaj ĝi amuzis ŝin. Nun ni kune ridis.</p>
 			<p>“Sinjoro”, ekparolis la knabino post momento. “Mi ŝatus kolekti ĉielarkojn.”</p>
 			<p>“Ĉu vere?”</p>
 			<p>“Ho jes, mi tiel ŝatus… Sed kiel komenci? Al vi estis facile komenci, vi ja havis fraton!”</p>
 			<p>“Kiel komenci? Jes, tio estas problemo”, mi diris penseme. “Tamen, mi havas ideon, Sita. Ekrigardu tra la fenestro.”</p>
 			<p>Ni klinis nin trans la fenestro, kaj mi indikis per la fingro al la ĉielarko, kiu fidele akompanadis ankoraŭ la vaportufon sub la lokomotivo. Kiam Sita rimarkis ĝin, ŝi ekkriis pro ekscitiĝo.</p>
 			<p>“Ĉu ĝi plaĉas al vi, Sita?… Ĉu vi ne kredas, ke ĝi taŭgus por komenci vian kolekton per ĝi?”</p>
 			<p>“Belega ĝi estas. Mi volus per ĝi komenci, sed kiel?”</p>
 			<p>“Jen kiel. Ni ŝanĝu la sidlokojn, tiel ke nur vi povu vidi ĝin. Mi promesas ne plu elrigardi tra la fenestro, kaj ĉar la suno baldaŭ subiros, vi estos la lasta kiu ĝin vidos. Ĝi restos nur via. La unua en via kolekto.”</p>
 			<p>“Vi estas vere bonkora, sinjoro. Sed tiu ĉi belega ĉielarko tiam mankos el via kolekto.”</p>
 			<p>Malpeze mi svingis la manon antaŭ mia vizaĝo:</p>
 			<p>“Ho ne zorgu, amikino, mi ne bezonas ĝin. Mi jam havas similan en mia kolekto.”</p>
 			<p>Dum duonhoro Sita fikse rigardadis tra la fenestro. Sur ŝia vizaĝo intensa koncentriĝo estis videbla. Jes, la proceso de la ekposedo de la unua ĉielarko ĉiam estas akompanata de psiĥaj konvulsioj. Eĉ de fizikaj doloroj kelkfoje.</p>
 			<p>Subite la patro de Sita ektiris ŝin je la brako. Ni estis atingintaj la stacion, kie ili devis forlasi la trajnon. Ni adiaŭis. Mia eta amikino brilis pro feliĉo.</p>
 			<p>Kaj ekde tiam mi ĉiam dum la vojaĝoj rigardadas tra la fenestro de la vagonaro. Mi tre dezirus denove vidi tian ĉielarkon, por meti ĝin en mian kolekton.</p>
 			<p>Ĉar, vi ja povis supozi, ke tian ĉielarkon mi ne havis ankoraŭ en mia kolekto. Mi mensogis al Sita nur por ke ŝi akceptu la donacon sen konsciencriproĉo. </p>

 			<p><b>Tibor Sekelj</b> (el <i>Esperanto</i>)</p>
		</div>
		
		<p class="creditphoto">Bildoj:<br>https://npgallery.nps.gov/ (publikhavaĵo)<br>Claudio Divizia /Adobe Stock<br>Nikki Zalewski /Adobe Stock</p>'
  WHERE l.kurso = 'PP' AND l.numero = 10 AND le.ordo = 1;

-- leçon 10, section 2
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<div class="vortlisto row">
		<div class="col s12 m6">
			<p><span class="eo">abstrakta</span>: malkonkreta.</p>
			<p><span class="eo">akcento</span>: plilaŭtigo de voĉo.</p>
			<p><span class="eo">amuzi</span>: gajigi.</p>
			<p><span class="eo">antikva</span>: malnovega.</p>
			<p><span class="eo">arĥivo</span>: dokumentujo.</p>
			<p><span class="eo">arko</span>: kurblinio.</p>
			<p><span class="eo">aventuro</span>: neordinara kaj ne atendita okazaĵo. </p>
			<p><span class="eo">bani</span>: meti en akvon por ĝin lavi. </p>
			<p><span class="eo">banala</span>: seninteresa, ĉar tre ordinara. </p>
			<p><span class="eo">bankedo</span>: komuna manĝo.</p>
			<p><span class="eo">bari</span>: fermi vojon per io.</p>
			<p><span class="eo">bildo</span>: videbla similaĵo de io. </p>
			<p><span class="eo">borderi</span>: stari ĉe la rando de io. </p>
			<p><span class="eo">brilianto</span>: speco de diamanto. </p>
			<p><span class="eo">bunta</span>: diverskolora. </p>
			<p><span class="eo">ĉerpi</span>: elpreni, eltiri.</p>
			<p><span class="eo">dedukti</span>: fari konkludon per logiko.</p>
			<p><span class="eo">dimensio</span>: mezuro.</p>
			<p><span class="eo">diveni</span>: supozi laŭ elpensado.</p>
			<p><span class="eo">dorso</span>: malantaŭo de la korpo.</p>
			<p><span class="eo">ekzemplero</span>: unuopa specimeno.</p>
			<p><span class="eo">enigmo</span>: malfacile komprenebla afero.</p>
			<p><span class="eo">etoso</span>: spirita atmosfero.</p>
			<p><span class="eo">fendi</span>: disigi laŭlonge ion.</p>
			<p><span class="eo">fenomeno</span>: malofta afero.</p>
			<p><span class="eo">filmo</span>: tio, sur kiu oni faras negativojn dum fotado. </p>
			<p><span class="eo">flati</span>: trolaŭdi.</p>
			<p><span class="eo">foti</span>: fari bildon sur filmon.</p>
			<p><span class="eo">fotografo</span>: homo, kiu fotas.</p>
			<p><span class="eo">fronto</span>: antaŭa parto de objekto.</p>
			<p><span class="eo">frunto</span>: superokula parto de vizaĝo.</p>
			<p><span class="eo">gapi</span>: rigardadi kun larĝe malfermitaj okuloj.</p>
			<p><span class="eo">gluti</span>: enstomakigi.</p>
			<p><span class="eo">gravuri</span>: desegni sur metalo aŭ ŝtono.</p>
			<p><span class="eo">grimpi</span>: pene supreniri.</p>
			<p><span class="eo">haŭto</span>: natura korpokovro de la homo.</p>
			<p><span class="eo">hipnoto</span>: arte kaŭzita dormo.</p>
			<p><span class="eo">imperio</span>: granda regno.</p>
			<p><span class="eo">indigo</span>: malhelblua koloro.</p>
			<p><span class="eo">indiki</span>: precize konigi ion.</p>
			<p><span class="eo">inkvizitoro</span>: rigora esploranto.</p>
			<p><span class="eo">intensa</span>: tre energia.</p>
			<p><span class="eo">inundo</span>: superakvego.</p>
			<p><span class="eo">juglando</span>: speco de nukso.</p>
			<p><span class="eo">juvelo</span>: multekosta ŝtono.</p>
			<p><span class="eo">karto</span>: kartonfolieto.</p>
			<p><span class="eo">kofro</span>: granda kesto, ujego.</p>
			<p><span class="eo">kolekti</span>: iom post iom amasigi samspecajn objektojn.</p>
			<p><span class="eo">komika</span>: ridiga, amuza.</p>
		</div>
		<div class="col s12 m6">			
			<p><span class="eo">kompliki</span>: malsimpligi.</p>
			<p><span class="eo">koncentra</span>: havanta komunan centron.</p>
			<p><span class="eo">konfirmi</span>: plicertigi.</p>
			<p><span class="eo">konsterni</span>: konfuzi, maltrankviligi. </p>
			<p><span class="eo">konversacio</span>: interparolado.</p>
			<p><span class="eo">konvulsio</span>: fortega skuiĝo.</p>
			<p><span class="eo">krono</span>: reĝa kapornamo. </p>
			<p><span class="eo">kurteno</span>: ŝtofa fenestrokovrilo. </p>
			<p><span class="eo">lanterno</span>: lampego.</p>
			<p><span class="eo">logiko</span>: rezonanta pensmaniero. </p>
			<p><span class="eo">lukso</span>: riĉa vivmaniero. </p>
			<p><span class="eo">marko</span>: distingiga signo.</p>
			<p><span class="eo">marŝi</span>: paŝi. </p>
			<p><span class="eo">meblo</span>: seĝo, tablo, lito, aŭ alia hejmobjekto.</p>
			<p><span class="eo">metalo</span>: malmola substanco.</p>
			<p><span class="eo">muzeo</span>: domo, kie oni konservas malnovajn interesaĵojn.</p>
			<p><span class="eo">navigi</span>: marveturi.</p>
			<p><span class="eo">nubo</span>: densaĵo sur la ĉielo.</p>
			<p><span class="eo">odori</span>: esti flarebla.</p>
			<p><span class="eo">operacio</span>: agmaniero.</p>
			<p><span class="eo">ornami</span>: plibeligi.</p>
			<p><span class="eo">palaco</span>: reĝa domego.</p>
			<p><span class="eo">paŝti</span>: manĝigi bestojn sur kampo.</p>
			<p><span class="eo">pejzaĝo</span>: landvidaĵo.</p>
			<p><span class="eo">perlo</span>: juvela globeto.</p>
			<p><span class="eo">pirato</span>: marrabisto.</p>
			<p><span class="eo">plafono</span>: plataĵo super ĉambro.</p>
			<p><span class="eo">planko</span>: tio, sur kiu oni paŝas en ĉambro.</p>
			<p><span class="eo">poŝto</span>: organizo por transporti leterojn.</p>
			<p><span class="eo">proceso</span>: sinsekvo de fenomenoj.</p>
			<p><span class="eo">psiĥo</span>: tuto de la mensaj fortoj.</p>
			<p><span class="eo">rubeno</span>: ruĝa valorŝtono.</p>
			<p><span class="eo">safiro</span>: blua valorŝtono.</p>
			<p><span class="eo">serio</span>: laŭorda sinsekvo.</p>
			<p><span class="eo">skatolo</span>: ujo el ligno aŭ simila materialo. </p>
			<p><span class="eo">spektaklo</span>: interesa vidaĵo.</p>
			<p><span class="eo">ŝpruci</span>: rapide elflui.</p>
			<p><span class="eo">ŝteli</span>: preni ion, kio apartenas al alia.</p>
			<p><span class="eo">ŝviti</span>: eligi fluaĵon tra la haŭto.</p>
			<p><span class="eo">tegmento</span>: domsupraĵo.</p>
			<p><span class="eo">tendo</span>: provizora loĝejeto el tolo.</p>
			<p><span class="eo">tufo</span>: densa aro da maldikaĵoj.</p>
			<p><span class="eo">valo</span>: intermonto.</p>
			<p><span class="eo">vando</span>: maldika mureto.</p>
			<p><span class="eo">vaporo</span>: gasa nubo.</p>
			<p><span class="eo">veterano</span>: homo, kiu longe servadis ĉe io.</p>
			<p><span class="eo">vigla</span>: vivoplena.</p>
			<p><span class="eo">violo</span>: floro kun karakteriza koloro.</p>		
		</div>
	</div>'
  WHERE l.kurso = 'PP' AND l.numero = 10 AND le.ordo = 2;

-- leçon 10, section 3
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##EKZERCO:158:eo##'
  WHERE l.kurso = 'PP' AND l.numero = 10 AND le.ordo = 3;

-- leçon 10, section 4
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<h2>KE / ĈU</h2>
			<p class="parto">Kiam oni raportas parolon, la verbtempo post KE aŭ ĈU en subpropozicio restas tiel sama, kiel la verbtempo en la origina parolo mem. Ekzemple:</p> 
			<p>a) “Mi kolekt<b>as</b> ĉielarkojn”, diris la sinjoro.<br/>La sinjoro diris, ke Li kolekt<b>as</b> ĉielarkojn.</p>
			<p>b) “Cu la veteranoj ven<b>os</b> al la kunveno?” demandis la sekretario.<br/>La sekretario demandis, ĉu la veteranoj ven<b>os</b> al la kunveno.</p>
			<p>c) “Prezent<b>u</b> vin tuj!” la inkvizitoro ordonas al la akuzito.<br/>La inkvizitoro ordonas al la akuzito, ke li prezent<b>u</b> sin tuj.</p>
			##EKZERCO:159:eo####EKZERCO:160:eo##'
  WHERE l.kurso = 'PP' AND l.numero = 10 AND le.ordo = 4;

-- leçon 10, section 5
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##EKZERCO:161:eo##'
  WHERE l.kurso = 'PP' AND l.numero = 10 AND le.ordo = 5;

-- leçon 10, section 6
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##RESUMO##'
  WHERE l.kurso = 'PP' AND l.numero = 10 AND le.ordo = 6;

-- leçon 11, section 1
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<div class="rakonto">
			<h3>SUR DALMATA FIŜISTINSULO</h3>
 
 			<p>Neniam ŝi vidis la sunon. Nur la karesojn de ĝiaj varmaj radioj ŝi sentis sur sia juna vizaĝo. Neniam ŝi vidis la lazuran bluon de la Adria Maro, nur ĝojplezure ŝi ĝuis, lulata per ĝiaj ondoj. Nek sian patrinon nek la patron ŝi vidis, nur palpkarese ŝi ekkonis iliajn kaloplenajn manojn kaj vizaĝojn, sur kiuj ŝi tiel bone konis ĉiun sulkon… Nenion ŝi iam ajn vidis, ĉar ŝi estis de la naskiĝo blinda…</p>
 			<img class="flot-d l-50 s-40" src="eo/ppp/bildoj/knabino-maro.jpg"><p>Jarojn longe ŝi vivis en la lernejoj por blinduloj kaj nur somere ŝi revenadis pasigi la ferion apud siaj karaj. Nun, ŝi denove troviĝas en sia fiŝistvilaĝo sur fora insuleto perdiĝinta en la marovasto. Feliĉa ŝi estis forlasi por ioma tempo bruegon de la grandurbo, en kiu ŝi vizitadas lernejon. Tamen, sidante sur la pruo de leĝera velboato, kiu petole saltetis sur la ŝaŭmantaj ondoj, kaj karesante la harojn de sia sepjara fratineto, ŝi pensis pri tiu grandurbo kien ŝi revenos post la ferio por fini sian lastan studjaron kaj kie ŝi, dank’ al siaj lertaj manoj, ricevos postenon. Ho, kiel ŝi revadis pri sia unua salajro! Pri ĉio, kion ŝi aĉetos per ĝi. En ŝia imago jam ĉiu monero estas fikselspezota! Al la patrino ŝi aĉetos kaptukon el belega pura silko… Ridetante ŝi imagas kiel la vilaĝaninoj rigardos ŝian patrinon, kiam ŝi kun tiu kaptuko aperos dimanĉe inter ili. Ĉiuj ekdeziros ĝin tuŝi por prijuĝi la kvaliton, kaj la patrino fiereme rakontos al ili ke ŝia Zlatica aĉetis ĝin. Jes, Zlatica, kiu nun laboras en la grandurbo kaj perlaboras tiom, ke ŝi eĉ povas de tempo al tempo helpi al ili… Kaj, al la patro?… Al li ŝi aĉetos novan pipon el rozoligno ĉar la malnovan forglutis la maro, kiam pasintan printempon tempesto surprizis lin, dum li estis ĵetanta reton en la maron. Ĝojos la patro pro tiu donaco… Al la frato? Ho, li jam fariĝis edziĝkandidato, kiu eĉ rajtas malkaŝe fumi. Al li ŝi aĉetos belegan arĝentan cigaredujon, kaj kiam li elpoŝigos ĝin, ĉiuj junulinoj el la vilaĝo admire rigardos!… Al la fratineto Mare, nepre ŝi aĉetos tiun grandan pupon, kiu palpebrumas kaj pepas: “Panjo, panjo!” Ho, kiel ŝiaj karbonigraj okuletoj mire gapos!…</p>
 			<p>Subite, iu granda ondo frapis la boatpruon kaj amaso da akveroj ŝprucmalsekigis ŝian korpon. Ŝi tremskuiĝis kaj la revaĵo disrompiĝis kvazaŭ sapveziko… Instinkte ŝi antaŭsentis tion, ŝia frato senzorge sidanta ĉe la poŭpo ne rimarkis: iom troe ili malproksimiĝis de la bordo. Laŭ timkrioj de la mevoj ŝi sentis alvenon de tempesto, kvankam la sunradioj ankoraŭ varme brilis.</p>
 			<p>— Mario, ni iru returnen. Ĉu vi rimarkas la tempestalvenon?</p>
 			<p>Mario nur memfide ekridetis kaj per sia sonora voĉo iom mokeme respondis: “Ne zorgu vi, grandurba sinjorino, kaj ne saligu al mi la cerbon!”</p>
 			<p>Ŝi eksilentis, sed ĉiuj ŝiaj sentoj streĉiĝis. Ne, ŝi ne eraras. Ne plu blovas la agrabla venteto. La veloj de la boato ne plu gaje kraketas sed knarkrakas sub ĉiam pli forta ventpremo. Sur la ondoj, la leĝera velboato ĉiam pli kaj pli supreniĝas kvazaŭ iu ĉevalo transsaltanta barojn.</p>
 			<p>— Mario, ni iru returnen! Fine… ni ne estas solaj, Mare povas ektimi de la ondoj.</p>
 			<p>— Mare ja estas fiŝista filino. Ĉu ne, Mare? Ni ne timas de la maro kiel tiu nia fratino, kiu tute urbaniĝis… ĉu ne, Mare?</p>
 			<p>La knabineto nenion respondis, nur pli forte sin premis al la fratino. Mario, tenante la poŭpon per siaj fortaj manoj, gaje fajfetis kaj videble ĝuis sian lertan manovradon. Ankaŭ li estis rimarkinta la malboniĝon de la vetero kaj rapidan plialtiĝon de la ondoj sed pro sia vireca fiero li ne volis obei al la “ina saĝo”… Subite, malaperis la rideto de sur lia vizaĝo. Jen, tie malantaŭ la fora horizonto, aperis ia verdnigra nubo kiu fulmrapide pligrandiĝadis kaj ĝiaj brakosimilaj ekstremoj minace disvastiĝadis. Fulmobriloj trakuris la ĉielon kaj perdiĝadis ien en la vasto. Eĥis timigaj tondrobruoj…</p>
 			<p>— Al diablo! ni eĉ malsekiĝos! — grumblis Mario por si mem kaj manovris por direkti la velboaton al la bordo. Sed jam estis iom malfrue. Li konsciiĝis pri tio. Kontraŭ la vento la leĝera velboato pene luktis por alproksimiĝi al la bordo kiu apenaŭ videbletis. Dume la tempesto rapide alproksimiĝis… La suno tute malaperis malantaŭ la nigra nubkurteno. Malheliĝis. La vento fantome ekhurlis kaj la ondoj furie ekdancis kvazaŭ la maro estus bolanta… La tempesto atakis per sia tuta sovaĝa forto.</p>
 			<img class="flot-g l-60 s-100" src="eo/ppp/bildoj/sxtormo-maro.jpg"><p>Portata per la ondegoj kvazaŭ juglandŝelo, post iu nova ventatako la velboato renversiĝis…</p>
 			<p>— Mario-o! — ekkriegis malgranda Mare, — sed en la sama momento fortaj brakoj kaptis ŝin kaj konata voĉo trankviligis la infanon:</p>
 			<p>— Mare, ne timu… Mare, via frato portos vin… ne timu! Luktante kontraŭ la ondoj, kun la fratineto en la manoj, li plenforte kriis al la fratino kiun li fojfoje vidis inter la ondoj.</p>
 			<p>— Zlatica-a-a, naĝu laŭ mia voĉo. Ne timu pri Mare, mi portos ŝin.</p>
 			<p>— Je-e-e-s! Eĥis ŝia respondo. Ekscio ke Mare estas en la manoj de la frato trankviligis Zlatican kaj ŝi eknaĝis per fortaj membrosvingoj, gvidata per la voĉo de Mario. Ŝi naĝis kuraĝe, sentime, kvankam la ondoj fojfoje superiris ŝian kapon. Ŝi ja estas infano de la maro… De tempo al tempo la frato vokkriis al ŝi kaj ŝi respondkriis. Tranĉante la ondojn ŝi naĝis kvazaŭ sireno… Post ioma tempo, ŝajnis al ŝi ke ĉiam malpli ofte ŝi aŭdas la voĉon de la frato… kaj ke ĝi malproksimiĝas, dume la hurlo de la vento superas la ondofrakason…</p>
 			<p>— Mario, Ma-ri-o-o! — krivokis ŝi, sed la voĉo de Mario ne aŭdiĝis plu. Sola ŝi estis. Sola… en tiu infero de la elementoj kaj sen gvidvoĉo de la frato. Tamen ŝi ne cedis al la teruro. Ŝi naĝis, naĝis en la direkton el kiu ŝi lastfoje aŭdis la voĉon de Mario. Sed vane… Ne estis eble gardi la direkton en la maro kiu infere bolis… </p>
 			<p>La tempo pasadis. Ŝi jam sentis lacon kaj por ŝpari la forton ŝi forlasis sin al la ondoj… — Mario certe atingos la bordon, — pensis ŝi, — kaj ili venos min trovi. Ili scias ke mi naĝas kiel fiŝo. Kaj, se mi forlasas min al la ondoj ili alproksimigos min al la bordo, — ŝi rezonis. Sed krom la ventofajfado kaj ondomuĝoj nenian bruon ŝi estis aŭdanta. Tamen ŝi esperis… De tempo al tempo por memkuraĝigo ŝi vokkriis: — Mario, Ma-ri-o!</p>
		<p>Ree minutoj fariĝis horoj. Kiom longe ŝi jam solas portata per la ondoj? Nur ne perdi kuraĝon, ne pensi pri ebla droniĝo! Vivi ŝi volas… kaj pense ŝi ekvagis tra sia vivo rememorante siajn geamikojn. Laŭ iliaj voĉoj ŝi ĉiam rekonadis ilin: “Pala voĉo”, “Nigra voĉo”, “Verda voĉo”… El ŝia brusto kelkfoje eliĝis ia nomo kvazaŭ voksopiro. Laca, tro laca ŝi ja estas. Tiu ĉi maro… kiu estis ŝia unua lulilo… ne povas ŝin nun malamike forrabi… el la vivo… </p>
 			<p class="center">⁂</p>
 			<p>En la vilaĝa ŝtondometo, okupita per sia hejmlaboro, la patrino ne rimarkis la veterŝanĝon. La patro, kiu pasigis du lastajn noktojn en fiŝkaptado kun la aliaj fiŝistoj el la vilaĝo, nun ripozis en la apuda ĉambro. La ventatako kunfrapis la larĝe malfermitan fenestron kaj la patro vekiĝinta ekvidis la nuboplenan ĉielon.</p>
 			<p>— Tempesto alvenas, ĉi-nokte ni ne povos fiŝkaptadi! — grumblis li por si mem. Li aliris la fenestron kaj alrigardis la marovaston, kiu etendiĝis antaŭ liaj okuloj. La malheliĝintan horizonton tranĉadis fulmoj kaj sur la bordorokojn disrompiĝis ondoj. La vizaĝo de la maljuna fiŝisto malsereniĝis. Forlasante la fenestron li rapidpaŝe eniris la kuirejon, kie lia edzino okupiĝis pri lavado.</p>
 			<p>— La infanoj jam revenis, ĉu ne? — demandis li.</p>
 			<p>— Verŝajne… Mi ne scias! — respondis ŝi.</p>
 			<p>— Tempesto alvenas, al diablo, kaj mi ŝatus vidi ilin hejme, — rediris la patro kaj prenante sian veston kaj ĉapon li rapide eliris.</p>
 			<p>En la malgranda insulhaveno la fiŝistoj okupiĝis pri plifirmigo de la boatoj kaj ŝipetoj. Rigarde esploris la patro la havenon sed lia velboato ne troviĝis ligita al la bordo.</p>
 			<p>— Amikoj, ĉu iu vidis Marion kaj nian velboaton?</p>
 			<p>— Marion? Ne, neniu vidis lin! — respondis iuj.</p>
 			<p>— Ĉu li eble per velboato…? ekdemandis iu junulo.</p>
 			<p>— Jes, tuj post la tagmanĝo li elveturis kun Zlatica kaj Mare… kaj ili ankoraŭ ne revenis! — lia vizaĝo streĉiĝis zorgoplene.</p>
 			<p>— Al diablo! Certe li malproksimen elveturis kaj la tempesto jam alvenis sur la maron! — diris iu mezaĝa viro.</p>
 			<p>— He, infanoj, infanoj! Neniam ili estas prudentaj! — sopiris iu maljunulo.</p>
 			<p>— Mi timas, ke la velboato ne povos rezisti al tia ĉi tempesto, malgraŭ la lerteco de Mario.</p>
 			<p>— Li estas sperta fiŝisto kaj certe li revenus ĝis nun se tio estus ebla, des pli ĉar la fratinoj estas kun li, — aldonis iu alia fiŝisto.</p>
 			<p>— Ni ne perdu la tempon, — diris iu altstatura viro. Jen, mia motorboato kies forton vi konas, per ĝi ni facile kontraŭstaros al la ondegoj. Venu ni kelkaj kaj iru serĉi ilin.</p>
 			<p>Ĉe tiuj vortoj jam kelkaj fiŝistoj ensaltis la motorboaton; inter la unuaj estis la zorgoplena patro. Dume, alkuris la patrino sekvata de la malmultnombraj loĝantoj de la vilaĝeto.</p>
 			<p>Timoplenaj okuloj esploradis la maron, sur kiu ne videblis io ajn alia krom la jam tre alten leviĝintaj ondoj.</p>
 			<p class="center">⁂</p>
 			<p>Jam unu horon per motorboato la bravaj fiŝistoj esploradis la bordoproksimajn regionojn. Neniun ili trovis. Iom okcidente troviĝas ia rokinsuleto kaj ili decidis tien direktiĝi. Malgraŭ la ventego ili senĉese vokkriis kaj daŭre esploradis la maron.</p>
 			<p>Kaj jen, sur unu rokpinto, svingante per sia ĉemizo, sidis Mario premante al sia brusto la sepjaran fratineton Mare. Danĝere estus iom pli proksimiĝi, ĉar la ondoj furioze frapadis sur la rokojn. Tamen lertaj manoj sukcese alĵetis al la junulo ferfadenan ŝnuregon, kiun li firme ligis al la rokpinto kaj per alia ŝnuro ligis al si la fratineton. Simiosimile li glitrampis laŭ la ŝnurego kaj helpe de la sindonaj amikoj, post pena streĉiĝo, li atingis la motorboaton.</p>
 			<p>— Ĉu… ĉu vi trovis Zlatican?! — estis lia unua demando. Post nea respondo, liaj okuloj pleniĝis de larmoj. Per kelkaj vortoj li klarigis kio okazis al ili kaj kiel li kun Mare surdorse, pli dank’ al la feliĉo ol al siaj muskoloj, atingis la rokinsuleton. Sed, Zlatica… ŝin li luktanta kontraŭ la ondegoj ne plu vidis, nek aŭdis delonge jam. Ĉiuj mutis. La patro, karesante la malsekajn harojn de Mare, kiu silente ploris en lia sino, kun larmoplenaj okuloj rigardis la larĝon de la maro… Ŝi, lia malfeliĉa filino… ŝi… Sed, ne! Li ne povis, ne volis ŝin kredi pereinta. Li kuŝigis la knabineton sur la boatfundon kaj kun petoplena rigardo ekkriis:</p>
 			<p>— Serĉu ni plue!</p>
 			<p>Ĉiuj jese kapsvingis.</p>
 			<p>— Mario, kie vi ŝin lastfoje vidis? demandis iu maljuna marlupo. Mario revigliĝis. Montrante per tremanta mano la okcidentan direkton li streĉe observis la marosurfacon. La motorboato ree ekveturis.</p>
 			<p class="center">⁂</p>
 			<p>Tri horojn ili serĉis senrezulte. La okuloj jam laciĝis pro streĉa observado. Iom post iom la maro trankviliĝis… Dume, ne havante plu forton por naĝi, Zlatica kuŝis surdorse forlasante sin al la kaprica danco de la ondoj. Ŝiaj membroj jam rigidiĝis. Laca ŝi estis, tiom laca. — “Estus eble pli bone se mi ne scipovus naĝi, ol tiu malrapida droniĝo”, — pensis ŝi amare. Tamen, de tempo al tempo preskaŭ aŭtomate ŝi vokkriis:</p>
 			<p>— Mario! Ma-ri-ooo!</p>
 			<p>— He-ej! He-e-ej! – eĥe alvenis ŝin raŭkaj voĉoj. Ŝi ektremis ne kredante al sia aŭdsento.</p>
 			<p>— Zla-ti-ca! He-e-ej! Aŭdiĝis vokoj jam pli proksime.</p>
 			<p>— Mario! Paĉjo! — ĝojkrie ŝi respondis kaj sentante novan forton eknaĝis al la direkto el kiu ŝi estis aŭdanta la vokojn…</p>
 			<p class="center">⁂</p>
 			<p>La ĉielo ankoraŭ estis kovrita per nuboj sed jam kelkaj sunradioj trapenetris ilin falante sur la amason, kiu mute staris ĉe la marbordo. La motorboato enhaveniĝis… Retenante spiron ĉiuj febre atendis. Malrapide surbordiĝis la maljuna fiŝisto apogante sian filinon. Mario portis la fratineton Mare, kiu dormis sur lia ŝultro. Ĉiuj eliris el la motorboato.</p>
 			<p>— Savitaj ili estas! ekis ĝojkrioj. La patrino, kies vizaĝon malsekigis larmoj alkuris ilin balbutante: — Infanoj miaj… infanoj! — Ĉiu deziris ion demandi, ekscii kie kaj kiel oni trovis ilin…</p>
 			<p>— Lasu ilin unue ripozi! grumblis iu el la savantoj. Ni ĉiuj tion nepre bezonas. Poste vi povas babilaĉi kiom ajn vi volas. Nur ion mi nun deziras diri al vi. Rigardu Zlatican! Nian Zlatican, pri kiu vi fojfoje mokeme diradis “grandurba sinjorino”… Sciu, ke ŝi luktis tri horojn sola sur la marondegoj! Ŝi pruvis al ni, ke ŝi restis vera fiŝista filino… Filino de la maro. Fieru pri ŝi!</p>
 			<p>La tuta amaso silente akompanis la savitojn kaj iliajn gepatrojn ĝis la domo. Mute ekstaris la patro ĉe la sojlo. Nur per forta manpremo li dankis al siaj amikoj-fiŝistoj.</p>
 			<p>La suno reaperis salutkaresante la insuleton perdiĝintan en la marovasto.</p>
 			<p class="center">⁂</p>
 			<p>Neniam ŝi vidos kiom ŝia patrino maljuniĝis, kiom la haroj de la patro griziĝis dum tiu fatala posttagmezo. Nur palpkaresante iliajn vizaĝojn ŝi malkovros novajn sulkojn, kiujn ŝi antaŭe ne konis.</p>

 			<p><b>Srdj Arandjelovic</b> (el <i>Monda Kulturo</i>)</p>
		</div>
		
		<p class="creditphoto">Bildoj:<br>progressman /Adobe Stock<br>Aivasovsky Ivan Constantinovich, <i>Tempête</i></p>'
  WHERE l.kurso = 'PP' AND l.numero = 11 AND le.ordo = 1;

-- leçon 11, section 2
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<div class="vortlisto row">
		<div class="col s12 m6">
			<p><span class="eo">adria maro</span>: la maro kuŝanta inter Italujo kaj Kroatio.</p>
			<p><span class="eo">aŭtomato</span>: io funkcianta sen homa direktado.</p>
			<p><span class="eo">boato</span>: ŝipeto.</p>
			<p><span class="eo">brava</span>: preta sentime fari sian devon. </p>
			<p><span class="eo">ĉapo</span>: plata kapvesto.</p>
			<p><span class="eo">ĉemizo</span>: subvesto.</p>
			<p><span class="eo">dalmatio</span>: regiono de Kroatio (plimulto de la teritorio) kaj Montenegro.</p>
			<p><span class="eo">danci</span>: ritme moviĝi laŭ muzika takto.</p>
			<p><span class="eo">eĥo</span>: ripetiĝo de sono.</p>
			<p><span class="eo">ekstrema</span>: plej malproksima.</p>
			<p><span class="eo">etendi</span>: plilongigi ĉiudirekten.</p>
			<p><span class="eo">fadeno</span>: longa maldika ŝnureto.</p>
			<p><span class="eo">fajfi</span>: krei sonon blovante tra la lipoj.</p>
			<p><span class="eo">fantomo</span>: spirito de mortinto; reaperanto.</p>
			<p><span class="eo">fatala</span>: malfeliĉiga, grava, ne evitebla.</p>
			<p><span class="eo">febro</span>: forta eksciteco.</p>
			<p><span class="eo">firma</span>: neŝancelebla.</p>
			<p><span class="eo">fulmo</span>: granda rapidpasanta ĉiela fajro.</p>
			<p><span class="eo">furio</span>: furioza virino.</p>
			<p><span class="eo">horizonto</span>: limo de la vidkapablo.</p>
			<p><span class="eo">hurli</span>: bleki sovaĝe.</p>
			<p><span class="eo">infero</span>: loko, kie mortintaj animoj suferegas.</p>
			<p><span class="eo">instinkto</span>: aŭtomata aktivigo, plejofte de bestoj.</p>
			<p><span class="eo">kalo</span>: malmolaĵo de la haŭto</p>
			<p><span class="eo">kandidato</span>: aspiranto al ofico</p>
			<p><span class="eo">kaprico</span>: subita, neantaŭvidebla emo.</p>
			<p><span class="eo">karbo</span>: nigra substanco, uzata por hejti.</p>
			<p><span class="eo">knari</span>: eligi akran bruon skrapan aŭ frotan.</p>
			<p><span class="eo">kraki</span>: eligi sekan bruon el ŝirado aŭ rompado.</p>
			<p><span class="eo">larĝa</span>: multampleksa.</p>
			<p><span class="eo">lazuro</span>: blua koloro de la ĉielo.</p>
			<p><span class="eo">leĝera</span>: malpeza.</p>
			<p><span class="eo">luli</span>: balanceti.</p>
			<p><span class="eo">lupo</span>: sovaĝa hundsimila besto.</p>
			<p><span class="eo">manovri</span>: fari laŭcelajn iradojn.</p>
		</div>
		<div class="col s12 m6">			
			<p><span class="eo">moki</span>: priridi iun.</p>
			<p><span class="eo">muskolo</span>: fibraĵo, kiu movas la membrojn de korpo.</p>
			<p><span class="eo">nepra</span>: neevitebla, deviga.</p>
			<p><span class="eo">palpi</span>: tuŝesplori per la mano.</p>
			<p><span class="eo">palpebro</span>: membrano kovranta la okulon.</p>
			<p><span class="eo">peni</span>: energie streĉi siajn fortojn.</p>
			<p><span class="eo">pepi</span>: birdokrieti.</p>
			<p><span class="eo">petoli</span>: amuziĝi infanece.</p>
			<p><span class="eo">pipo</span>: aparato, per kiu oni fumas tabakon.</p>
			<p><span class="eo">poŭpo</span>: ŝipmalantaŭo.</p>
			<p><span class="eo">pruo</span>: ŝipantaŭo.</p>
			<p><span class="eo">pupo</span>: ludila figureto.</p>
			<p><span class="eo">rampi</span>: antaŭeniri malfacile, foje surventre.</p>
			<p><span class="eo">regiono</span>: speciala land- aŭ marspaco.</p>
			<p><span class="eo">revi</span>: imagi tion, kion oni forte deziras.</p>
			<p><span class="eo">rezoni</span>: logike tiri konkludon el argumentoj.</p>
			<p><span class="eo">rigida</span>: nefleksebla.</p>
			<p><span class="eo">salo</span>: blanka substanco, uzata por gustigi manĝaĵojn.</p>
			<p><span class="eo">sapo</span>: substanco uzata por lavpurigi.</p>
			<p><span class="eo">silko</span>: delikata teksaĵo.</p>
			<p><span class="eo">simio</span>: homosimila besto. </p>
			<p><span class="eo">sino</span>: homa brusto.</p>
			<p><span class="eo">sireno</span>: marvirino kun fiŝa vosto.</p>
			<p><span class="eo">sojlo</span>: ŝtono aŭ trabo ĉe enireja fundo.</p>
			<p><span class="eo">sopiri</span>: ĝeme elspiri.</p>
			<p><span class="eo">sulko</span>: kavaĵeto.</p>
			<p><span class="eo">svingi</span>: moveti ion rapide ĉiudirekten.</p>
			<p><span class="eo">ŝaŭmo</span>: blankaĵo sur akvo aŭ alia fluaĵo.</p>
			<p><span class="eo">ŝelo</span>: malmola ekstera krusto.</p>
			<p><span class="eo">tempesto</span>: ŝtormo.</p>
			<p><span class="eo">trajto</span>: karakterizaĵo.</p>
			<p><span class="eo">tuko</span>: peco de teksaĵo.</p>
			<p><span class="eo">vasta</span>: granddimensia.</p>
			<p><span class="eo">velo</span>: granda tuko fiksita por kapti la venton.</p>
			<p><span class="eo">veziko</span>: globeto.</p>		
		</div>
	</div>'
  WHERE l.kurso = 'PP' AND l.numero = 11 AND le.ordo = 2;

-- leçon 11, section 3
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##EKZERCO:162:eo##'
  WHERE l.kurso = 'PP' AND l.numero = 11 AND le.ordo = 3;

-- leçon 11, section 4
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##EKZERCO:163:eo####EKZERCO:164:eo####EKZERCO:165:eo##'
  WHERE l.kurso = 'PP' AND l.numero = 11 AND le.ordo = 4;

-- leçon 11, section 5
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##EKZERCO:166:eo####EKZERCO:167:eo##'
  WHERE l.kurso = 'PP' AND l.numero = 11 AND le.ordo = 5;

-- leçon 11, section 6
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##RESUMO##'
  WHERE l.kurso = 'PP' AND l.numero = 11 AND le.ordo = 6;

-- leçon 12, section 1
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<div class="rakonto">
			<h3>DIA MASTRUMADO</h3>
 
 			<p>(Parolas Peruno, dio de la antikvaj slavoj:)</p>

 			<p>Vi sensperte vivas certe,<br/>
 			neestinte dio.<br/>
 			False ŝajnas, ke mi gajnas<br/>
 			en la profesio!</p>

 			<p>Mi matene devas pene<br/>
 			rosi kampan valon,<br/>
 			hejti sunon, kaj la lunon<br/>
 			fermi en la stalon.</p>
 			
 			<p>Noktfantomojn kaj demonojn<br/>
 			en la sakon loki,<br/>
 			la stelflokojn kiel kokojn<br/>
 			al nestejo voki.</p>
 			
 			<p>Ĉies buŝo: birdo, muŝo,<br/>
 			pulo, elefanto,<br/>
 			frue jam ĝi volas manĝi<br/>
 			el di-provianto.</p>
 			
 			<p>La ekstaro de l’homaro,<br/>
 			aĥ, ĝi kaŭzas servojn!<br/>
 			La lamento de l’homgento<br/>
 			ŝiras miajn nervojn!</p>
 			
 			<p>Nur se pikoj de formikoj<br/>
 			vian aŭdon ĝenus,<br/>
 			la matenan aŭdiencon<br/>
 			eble vi komprenus.</p>
 			
 			<p>Preĝoj svarmas kaj alarmas,<br/>
 			ĝis mi preskaŭ surdas:<br/>
 			tiu kantas, flustras, larmas,<br/>
 			tiu psalmojn gurdas.</p>
 			
 			<p>Ĉu kalkuli la postulojn?<br/>
 			Estus vane peni!<br/>
 			Kapo krevus, se mi devus<br/>
 			ĝin nur memorteni:</p>
 			
 			<p>Doni sanon kaj infanon,<br/>
 			panon por satmanĝi;<br/>
 			ke fabrikoj ĉesu ŝpini,<br/>
 			devus di’ aranĝi!</p>
 			
 			<p>“Gardu grenon kaj ĝardenon!”<br/>
 			oni al mi taskas;<br/>
 			nova krio: “Helpu dio!<br/>
 			La bovino naskas!” </p>
 			
 			<p>La vetero estu varma<br/>
 			kaj samtempe frosta,<br/>
 			la sekalo estu kara<br/>
 			kaj malmultekosta.</p>
 			
 			<p>Pluvu! Iu semis linon,<br/>
 			di’ ĝin rosu bene!<br/>
 			Pluvi? Oj ne! Sed porfojne<br/>
 			brilu sun’serene!</p>
 			
 			<p>Ve, ke estis virinaĉoj<br/>
 			estigitaj per mi!<br/>
 			La ĉagrenan bandon ĝenan<br/>
 			devos mi ekstermi!</p>
 			
 			<p>Tondro ilin…! Jam eĉ dio<br/>
 			devas ja blasfemi!<br/>
 			Se ne laktas la kaprino,<br/>
 			ili plendas ĉe mi.</p>
 			
 			<p>Ĉiu vivus ne per zorgoj,<br/>
 			sed per preĝovorto,<br/>
 			kvazaŭ oni havus dion<br/>
 			sole por komforto.</p>
 			
 			<p>Akvon, sekon, kampan sterkon<br/>
 			dio disdonacu!<br/>
 			Se porkulo sanon perdis,<br/>
 			mi lin rekuracu!</p> 
 			
 			<p>Ŝi min tedas, ĉe mi pledas,<br/>
 			ke ŝin oni svatu;<br/>
 			edzo preĝas, ke jam tondro<br/>
 			la edzinon batu!</p> 
 			
 			<p>Kiu volas loton gajni,<br/>
 			subaĉetas dion;<br/>
 			kiu pagis asekuron,<br/>
 			volas incendion!</p>
 			
 			<p>Ho, se mi ne tro indulgus<br/>
 			vin, la hombandaĉon,<br/>
 			mi vin premus kiel prunojn,<br/>
 			farus el vi kaĉon!”<br/>
 			
 			<p>Li enspiris naztabakon,<br/>
 			ternis bombobrue…<br/>
 			Tondro frapis, fulmo fajris,<br/>
 			pluvo ŝprucis flue.</p> 
 			
 			<p>Kredu, frato! Ne amuzas<br/>
 			tiu di-ekzerco!<br/>
 			Briksen mem — kompare tion —<br/>
 			estas preskaŭ ŝerco.</p> 

 			<p><b>Karel Havlíček Borovský</b> el la ĉeĥa: <b>Tomáš Pumpr</b> (el <i>La Bapto de Caro Vladimiro</i>)</p>
		</div>'
  WHERE l.kurso = 'PP' AND l.numero = 12 AND le.ordo = 1;

-- leçon 12, section 2
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<div class="vortlisto row">
		<div class="col s12 m6">
			<p><span class="eo">alarmo</span>: signalvoko.</p>
			<p><span class="eo">asekuri</span>: kontrakti kontraŭ eventuala perdo.</p>
			<p><span class="eo">aŭdienco</span>: oficiala akcepto.</p>
			<p><span class="eo">bando</span>: araĉo.</p>
			<p><span class="eo">bombo</span>: eksplodaĵo.</p>
			<p><span class="eo">bovo</span>: kampara besto, kies ino donas lakton.</p>
			<p><span class="eo">demono</span>: diablo.</p>
			<p><span class="eo">ekstermi</span>: tute detrui, neniigi.</p>
			<p><span class="eo">elefanto</span>: plej granda landbesto.</p>
			<p><span class="eo">floko</span>: malpeza peceto.</p>
			<p><span class="eo">fojno</span>: sekigita herbo.</p>
			<p><span class="eo">formiko</span>: speco de insekto,tre laborema.</p>
			<p><span class="eo">gajni</span>: akiri profite.</p>
			<p><span class="eo">greno</span>: kreskaĵo, el kiu oni faras panon.</p>
			<p><span class="eo">gurdo</span>: muzikilo, kiun oni funkciigas per turnilo.</p>
			<p><span class="eo">incendio</span>: brulego.</p>
			<p><span class="eo">indulgi</span>: trakti pardoneme.</p>
			<p><span class="eo">kaĉo</span>: manĝaĵo el faruno, kun lakto aŭ akvo.</p>
			<p><span class="eo">kapro</span>: barbhava kampara besto.</p>
		</div>
		<div class="col s12 m6">			
			<p><span class="eo">komforto</span>: ĉio, kio agrabligas la vivon.</p>
			<p><span class="eo">lakto</span>: blanka fluaĵo de bovino.</p>
			<p><span class="eo">lamenti</span>: plendadi ĝemante.</p>
			<p><span class="eo">muŝo</span>: fluginsekto.</p>
			<p><span class="eo">pledi</span>: prezenti sian aferon antaŭ juĝisto.</p>
			<p><span class="eo">loti</span>: decidi ion laŭ hazardo.</p>
			<p><span class="eo">lino</span>: kreskaĵo, el kiu oni faras tolon.</p>
			<p><span class="eo">porko</span>: besto, kiun oni grasigas por manĝi.</p>
			<p><span class="eo">profesio</span>: okupo, per kiu oni vivtenas sin.</p>
			<p><span class="eo">provianto</span>: provizoj de manĝaĵo.</p>
			<p><span class="eo">pruno</span>: speco de frukto.</p>
			<p><span class="eo">pulo</span>: parazita suĉinsekto.</p>
			<p><span class="eo">sako</span>: ujo el maldelikata ŝtofo.</p>
			<p><span class="eo">sekalo</span>: speco de greno.</p>
			<p><span class="eo">semi</span>: disĵeti grajnojn sur la teron.</p>
			<p><span class="eo">stalo</span>: bestloĝejo.</p>
			<p><span class="eo">sterko</span>: io uzata por plifekundigi la teron.</p>
			<p><span class="eo">svarmi</span>: amase kunestadi kaj moviĝi.</p>
			<p><span class="eo">svati</span>: sin proponi al iu kiel edz(in)on.</p>
			<p><span class="eo">tabako</span>: sekigitaj folioj, kiujn oni fumas.</p>
			<p><span class="eo">tasko</span>: difinita laboro.</p>
			<p><span class="eo">terni</span>: brue kaj subite elspiri tra la nazo.</p>
			<p>(<span class="eo">briksen</span>: ekzilloko de la aŭtoro.) </p>
		</div>
	</div>'
  WHERE l.kurso = 'PP' AND l.numero = 12 AND le.ordo = 2;

-- leçon 12, section 3
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##EKZERCO:168:eo##'
  WHERE l.kurso = 'PP' AND l.numero = 12 AND le.ordo = 3;

-- leçon 12, section 4
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##EKZERCO:169:eo####EKZERCO:170:eo####EKZERCO:171:eo##'
  WHERE l.kurso = 'PP' AND l.numero = 12 AND le.ordo = 4;

-- leçon 12, section 5
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##EKZERCO:172:eo##'
  WHERE l.kurso = 'PP' AND l.numero = 12 AND le.ordo = 5;

-- leçon 12, section 6
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##RESUMO##'
  WHERE l.kurso = 'PP' AND l.numero = 12 AND le.ordo = 6;

-- leçon 13, section 1
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<div class="rakonto">
			<h3>ZAMENHOF KAJ LA MOVADO</h3>
 
 			<p>Por kompreni la personecon de Zamenhof, oni devas distingi en lia karaktero du kontraŭajn tendencojn, kiuj daŭre bataladis inter si. De unu flanko lin pelis al altaj faroj granda idealismo kaj profunda kredo je la bono de la homa koro. De alia flanko fera malvarma racio kaj neŝanceligebla logiko kontrolis kaj modifis ĉiun lian impulson, tiel ke hodiaŭ ni ne trovas agon en lia tuta vivo, nek vorton en lia plena verkaro, kiu ne estis atente pesata kaj kribrita tra prudenta analizo. Nur homo kun granda morala supereco povis ne esti disŝirita de tiaj diverĝaj tendencoj, sed male superregi kaj harmoniigi ilin.</p>
 			<p>Kiel idealisto, Zamenhof ekde la junaĝo estis profunde impresita de la batalado inter popoloj de diversaj nacioj. Li supozis, ke du estas la kaŭzoj de la konfliktoj inter la homoj: lingvoj kaj religioj. Li ne povis stati inerta antaŭ spektaklo de sanganta homaro kaj ellaboris du planojn, kiuj – tamen respektante la lingvojn kaj religiojn – donu al la homoj la eblecon renkontiĝi kaj toleri sin reciproke sur neŭtrala tereno. La unua plano nomiĝis Esperanto kaj rapide disvastiĝis tra la tuta terglobo. La dua nomiĝis “homaranismo” aŭ “hilelismo” kaj ne sukcesis kolekti adeptojn. Al tiuj du idealoj, kiuj en lia menso kompletigis unu la alian, sed kiujn en la publika aktivado li nete dividis unu de la alia, Zamenhof dediĉis sian vivon.</p>
 			<img style="margin: 0; max-width: 100%;" src="eo/ppp/bildoj/zamenhof-en-cxambro.jpg"><p>Idealisto estis Zamenhof kaj samtempe malpasia aganto, kiu neniam sekvis sian instinkton aŭ emocion, sed nur obeis al sia logika inteligenteco. Ni ĉiuj scias, ke malgraŭ la interna impeto doni al la homaro solvon de la lingva problemo, li atendis naŭ jarojn antaŭ ol publikigi sian verkon kaj ke en tiuj naŭ jaroj li pacience elprovis plurajn formojn de Esperanto, korektadis kaj fundamente refaris ilin ĝis eltrovo de la definitiva. Tiu lia fera logika inteligenteco pli ol unu fojon savis Esperanton de la pereo, al kiu gvidus ĝin la fanatikuloj. La adorado, per kiu la unuaj esperantistoj ĉirkaŭis lin, neniam tuŝetis lian saĝecon. Li tuj komprenis, ke lingvo ne povas esti ligata al unu homo, sed nur al ĝiaj utiligantoj: tial, malgraŭ ĉiu malaprobo, tuj en la komenco li klopodis senpersonigi la Internacian Lingvon: li forĵetis por ĉiam ĉiajn rajtojn kaj rifuzadis esti leĝofaranto de la lingvo kaj gvidanto de la Movado. Kun karakteriza demokrata sento, li volis Lingvan Komitaton (nuntempe Akademio), kiu konstatu la naturan evoluon de la lingvo, kaj kies decidoj estu devigaj por ĉiuj. Konscia pri la neceso gardi la unuecon de la lingvo, li kreis la Fundamenton, sed samtempe, zorgema ne sufoki la maturiĝon de Esperanto li akceptis kaj mem vaste praktikis la metodon de neologismoj, nome de paralelaj formoj flanke de la fundamentaj. Zamenhof frue komprenis, ke Esperanto estas akceptebla de la tuta homaro nur kiel lingvo kaj ne kiel nova speco de mistiko. Tial, li mem verkis la faman Deklaracion de 1905, kiun la unua Kongreso en Boulogne-sur-Mer alprenis kaj kiu restis kiel dua Fundamento, ne por la lingvo, sed por la Movado, ĝis hodiaŭ. Eĉ pli reliefiĝas lia racia konduto en la lukto kontraŭ la reformistoj. Zamenhof daŭre agnoskis, ke Esperanto ne estas perfekta, sed ke reformoj povus ĝin ruinigi: projektoj de reformoj dependas de la preferoj de unuopaj personoj kaj komencante la reformadon ni neniam povos kontentigi ĉies postulojn kaj devos senĉese aldoni reformojn al reformoj. Kiam eksplodis la Ido-krizo, en la tiama Movado ĉiuj perdis la sinkontrolon escepte de Zamenhof. Boirac volis forlasi la prezidantecon de la Lingva Komitato, Sébert esperis je abstraktaj kompromisoj, la esperantistoj ĉie akre kverelis unu kontraŭ la alia. Sed en Varsovio jam en la unuaj krizaj tagoj Zamenhof en plej granda trankvilo skribas kun preciza antaŭvido, ke Ido estas mortnaskito, kontraŭ kiu ne valoras lukti, ĉar “la ruza konstruaĵo baldaŭ falos”. Li precize preparis la kontraŭagajn planojn kaj liaj antaŭvidoj tute plenumiĝis.</p>
 			<p>Sed, ne ĉiam la bolantaj esperantistoj de la unuaj tempoj sekvis lin. Plurfoje kaj vane li proponas la fondon de neŭtrala komuna asocio tutmonda: unue en <i>La Esperantisto</i>, jam en 1889, sub la nomo Tutmonda Ligo de Esperantistoj kaj poste en 1905. La reciproka malkonfido de la tiutempaj francaj gvidantoj kaŭzis, ke lia projekto eĉ ne estis diskutata en la Kongreso. Pasos tri jaroj ĝis kiam Hodler fondos U.E.A.; Zamenhof antaŭvidis kaj proponis tion 19&nbsp;jarojn pli frue!</p>
 			<p>Estas signo de vera grandeco ne aparteni al unu epoko, sed al ĉiuj epokoj, resti aktuala trans la jardekoj kaj la jarcentoj. Ni lasu momenton Zamenhof kaj pririgardu la nuntempajn problemojn de la Internacia Lingvo de li kreita kaj klopodu apliki al ili iom da Zamenhofa disciplino.</p>
 			<p>La transiro de la nuntempa polilingvisma ĥaoso en la internaciaj rilatoj al monolingvismo – kio ja estas la alpreno de Esperanto – signifas formorton de jarcentaj rutinoj kaj privilegioj. En tiu senco Esperanto povas esti konsiderata lingvorevolucio. Estas normale, ke kontraŭ ĝi koalicias ĉiuj malnovaj interesoj, kiuj akurate plektas ĉirkaŭ ĝi komploton de silento. Ĉiuj revolucioj estas unue faritaj ne de la larĝaj amasoj, sed de elitoj gvidataj de intelektuloj. Esperanto ne estas kaj ne povas esti movado de amasoj. Ĝia socia portanto estas malplimulta avangardo. Tiu avangarda elito – la nuntempa esperantistaro – havas la funkcion maturigi la cirkonstancojn, en kiuj la Internacia Lingvo atingos la finan celon.</p>
 			<p>Fundamentan gravecon havas la demando ĉu la Esperanto-Movado efektive plenumas la supre skizitan rolon.</p>
 			<p>En la nuna stadio, kiam niaj tezoj ankoraŭ ne estas popularaj kaj ni ne disponas pri la rimedoj de amasinformado, la disvastigo de la Internacia Lingvo dependas grandparte de persona propagando. Kaj ĉar la publiko ne distingas – eble prave – la ideon disde la homoj, la esperantistoj, volenevole, fariĝas prototipoj, laŭ kiuj estas juĝata la ideo de komuna lingvo. La tre delikata situacio donas al ĉiu el ni pezan respondecon. Ni povas adekvate plenumi ĝin, se ni enkondukos en nian Movadon tri internajn elitecojn: socia eliteco, kultura eliteco kaj eliteco de metodoj.</p>
 			<p>Estis tempo, kiam la Movado konsistis grandparte el sciencistoj kaj plej gravaj Akademianoj. Estis la ora franca periodo. Kaj estis tempo, antaŭ kaj post la lasta milito, kiam esperantismo fariĝis sinonimo de malgranda sekto, kun adeptoj praktikantaj strangajn kultojn. Ni hodiaŭ ne volas esti Asocio nur por altaj tavoloj, nek disdonejo de etaj vivĝojoj al vivmalfeliĉuloj. Movadano rajtas esti ĉiu esperantisto, el kiu ajn socia ŝtupo, el kiu ajn raso, el kiu ajn religia, filozofia kaj politika konvinko. Sed, ni ne volas en niaj aktivaj vicoj homojn, kiuj en la ordinara vivo estas konsiderataj fuŝuloj, fantaziuloj kaj sentaŭguloj. Nur tiu, kiu en sia ĉiutago estas serioze respektata, povas sukcese disradii siajn ideojn kaj influi la ĉirkaŭan medion. Bona aŭ malbona socia konsisto de nia Movado estas ekzisto-demando por la Internacia Lingvo.</p>
 			<p>Kial la Esperanto-Movado bezonas altan kulturan nivelon? Ĉar esperantismo, kiel lingvomovado, havas esence kulturan karakteron. Altigante la kulturan nivelon de la movado, ni kreas la kondiĉojn, en kiuj ni regajnas al niaj celoj la simpation de la intelektularo. Sen ili Esperanto ne havas esperon venki sian batalon. Tiu simpatio penetros ĉiujn tavolojn de la publika opinio, ĝis kiam la registaroj estos devigataj agnoski la Internacian Lingvon kiel fakton.</p>
 			<p>Kiam ni parolas pri movado, ni ne celas senkorpan abstraktaĵon, sed konkretan unuiĝon de individuoj. Tial, kiam mi parolas pri kultura nivelo de la Movado, ni scias, ke ĝi estas proksimume suma rezulto de la kultura nivelo de ĉiu unuopa membro. Ĉiu el ni devas kontribui levi la kulturan nivelon de la Esperanto-Movado per senĉesa ampleksigo de nia propra klereco. Malofte devo estas pli agrabla tasko ol en la nuna okazo. Nia spirito postulas ĉiutagan nutradon: la scio estas senlima, se ĝiajn ĝuojn ne bremsas horizonto. Same kiel la Imperiestro Marko Aŭrelio je la fino de la tago ne estis kontenta, se li ne estis farinta bonan agon, tiel ĉiu movadano je la fino de la tago ne devus esti kontenta, se li ne plivastigis sian propran kulturon. Zamenhof mem, dronanto en peza kaj zorgoplena vivo, ne postlasis unu tagon ĝis sia morto sen labori intelekte. En la nokto, kiam Varsovio ripozis, Zamenhof kreis por ni senmortajn tradukojn, paroladojn, leteraron, li ellaboris la doktrinon de hilelismo kaj verkis – eble kiel la unua – plenan gramatikon de la jida, hodiaŭ konservata en Muzeo en Jerusalemo. Zamenhof mem konfesis, ke li konis 12 lingvojn: plurajn el ili li flegis ĝis la lastaj tagoj. Kie ni trovu pli taŭgan ekzemplon?</p>
 			<p>Eliteco de metodoj signifas unue klaran diferencigon inter, unuflanke, la lasta celo kaj la afero mem kaj, aliflanke, ties rimedoj kaj la simboloj. Nia strebado estas difinita en la Deklaracio de Boulogne-sur-Mer: “disvastigi en la tuta mondo la uzadon de lingvo neŭtrale homa, kiu ne entrudante sin en la internan vivon de la popoloj kaj neniom celante elpuŝi la ekzistantajn lingvojn naciajn, donos al la homoj de malsamaj nacioj la eblon interkompreniĝadi inter si”. La enkonduko de Esperanto en ĉiujn internaciajn rilatojn estas la fina celo. La Esperanto-organizaĵoj – lokaj, regionaj, landaj kaj internaciaj – estas nepre havindaj, sed nur provizoraj rimedoj. Ilia potencigo estas necesa por la bono de la Internacia Lingvo. Sed nia rigardo ne povas halti ĉe la limoj de niaj societoj: ni ne povas luli nin en blinda kontenteco de partaj atingoj. La taksado de nia laboro devas esti multe pli alta kaj objektiva: ni devas percepti la pulsadon de la Internacia Lingvo kaj la progresojn de ĝia popularigo ne interne de ni, sed tie ĉe la publika opinio. En Mainz Prof. Lapenna parolis pri la tempo, kiam la Esperanto-organizaĵoj ne plu estos necesaj. Niaj strebadoj per la Esperanto-organizaĵoj celas al tiu tempo.</p>
 			<p>Hodiaŭ oni ne plu diskutas pri la du famaj vojoj, kiuj konduku Esperanton al ĝenerala akcepto: nome pri leĝfarado de supre – flanke de oficialaj instancoj – kaj pri la iompostioma ĝeneraligo de malsupre, flanke de la popolo. Ni superis tiun demandon ĉar ni laboras samtempe laŭ ambaŭ principoj. Hodiaŭ ni konscias, ke ambaŭ vojoj estas nedisigeblaj, ke agnosko de supre kuraĝigas plian disvastigon de la lingvo malsupre, ke, inverse, pli vasta aplikado malsupre trenas oficialajn rekonojn de supre. Sed, ankoraŭ en niaj tempoj, kelkaj adoras la simbolojn kaj kredas servi la aferon mem. Eksteraj simboloj – flagoj, insignoj, himnoj – estas nur pontoj por konvencie kaj sinteze prezenti nian veron. Tiuj rekoniloj estas respektindaj kaj tradiciaj, sed ni devas preteriri la simbolon kaj posedi la esencon. Ne tiu, kiu – sincere aŭ demagogie – multe krias “samideano, samideano” vere ion faras por la Internacia Lingvo, sed tiu, kiu pozitive utiligas ĝin kaj kreas per ĝi.</p>
 			<p>Eliteco de metodoj signifas, krome, aplikadon de informadaj principoj, kiuj bone koheras kun la jarcento. Jam delonge pasis la tempo de romantikismo. Esti romantikaj en epoko de atomismo signifas esti dekadencaj. Homoj vivantaj en tempoj de rapideco kaj de mondproblemoj ne plu atentas sentimentalajn argumentojn. Ili konvinkiĝas nur, se oni proponas avantaĝojn. Esperanto ne proponas al la mondo pliajn idealojn, sed simple solvon de la lingva ĥaoso, kun sekva nekalkulebla ekonomio de tempo, gajno de ekzakteco kaj defendo de la naciaj lingvoj kontraŭ lingvaj diskriminacioj. Kiel jam konstatis UNESKO, Esperanto grave kontribuas al disvastigo de scienco kaj kulturo. Ĝi, do, ne plu estas projekto – kiel en la pioniraj tempoj de esperantismo – sed vivanta lingvo, kiu jam nun estas praktike uzata tra la tuta mondo por ĉiaj internaciaj interŝanĝoj. Ĝi, fine, alportas al la homaro fundamentan bazon, sur kiu eblas efektivigi solidarecon kaj moralan unuecon inter la popoloj. Elitaj metodoj signifas prezenti al la homoj la palpeblajn faktojn pri Esperanto, alvoki kaj konfidi al ties racio prefere ol al malfirmaj emocioj. En nia laboro por Esperanto ni ne rajtas forgesi, ke Esperanto estas lingvo kaj nenio alia ol lingvo; ke ĝi evoluas laŭ la leĝoj de ĉiuj aliaj lingvoj, nome per alpreno de necesaj neologismoj kaj forlaso de nenecesaj arkaismoj.</p>
 			<p>“Esperantisto estas nomata ĉiu persono, kiu scias kaj uzas la lingvon Esperanto, tute egale por kiaj celoj li ĝin uzas. Apartenado al ia aktiva societo esperantista por ĉiu esperantisto estas rekomendinda, sed ne deviga”. Per tiuj vortoj la citita Deklaracio de 1905, la fondoŝtono de nia Asocio, difinas nin. Ĉiu alia ideo, eĉ interna, kiun ĉiu el ni ligas al Esperanto estas pure privata afero, pri kiu Esperantismo ne respondecas. En la sama Deklaracio Zamenhof mem ĝisdetale fiksis, ke ankaŭ liaj opinioj kaj verkoj havas privatan karakteron kaj estas por neniu devigaj.</p>
 			<p>Dum sia tuta vivo Zamenhof mem oferis siajn flankajn idealojn – kaj ni scias kiom fortaj kaj turmentaj ili estis – al la bono de Esperanto. Li ne nur verkis kaj akceptigis la Deklaracion, sed poste li plurfoje konfirmis ĝin. Plej solene tio okazis dum la malferma parolado pri la fondiĝo de U.E.A. en Barcelono en 1908.</p>
 			<p>Ni hodiaŭ kunvenis por honori D-ron Zamenhof en la tago de la datreveno de lia naskiĝo. La plej taŭga honorigo, pli ol teksi laŭdojn al lia nomo, estas firma sekvado de lia ekzemplo, utiligado de lia verko kaj laborado por ĝi, ĝis atingo de la lasta celo.</p>

 			<p><b>Gian Carlo Fighiera</b> (el <i>Esperanto</i>)</p>
		</div>
		
		<p class="creditphoto">Bildo: Zamenhof en laborĉambro (UEA Arkivo)</p>'
  WHERE l.kurso = 'PP' AND l.numero = 13 AND le.ordo = 1;

-- leçon 13, section 2
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<div class="vortlisto row">
		<div class="col s12 m6">
			<p><span class="eo">adekvata</span>: egalvalora</p>
			<p><span class="eo">adepto</span>: homo, kiu akceptis iun doktrinon</p>
			<p><span class="eo">agnoski</span>: rekoni</p>
			<p><span class="eo">aktuala</span>: nuntempa</p>
			<p><span class="eo">analizi</span>: esplori detale ion</p>
			<p><span class="eo">apliki</span>: uzi por speciala celo</p>
			<p><span class="eo">argumento</span>: rezona pruvo</p>
			<p><span class="eo">arkaismo</span>: io malnoviĝinta</p>
			<p><span class="eo">asocio</span>: grava societo</p>
			<p><span class="eo">atomo</span>: plej malgranda materiero</p>
			<p><span class="eo">avangardo</span>: grupo, kiu iras la unua</p>
			<p><span class="eo">bazo</span>: esenca principo</p>
			<p><span class="eo">bremso</span>: haltigilo</p>
			<p><span class="eo">cirkonstanco</span>: fakto rilate iun situacion</p>
			<p><span class="eo">dediĉi</span>: plene fordoni al</p>
			<p><span class="eo">definitiva</span>: decida, finofara</p>
			<p><span class="eo">dekadenco</span>: iompostioma ruiniĝo</p>
			<p><span class="eo">deklaracio</span>: oficiala anonco aŭ sciigo</p>
			<p><span class="eo">demagogio</span>: popolekscita agado de potencavidaj politikistoj</p>
			<p><span class="eo">demokrato</span>: iu, kiu kredas pri egalrajteco de ĉiuj homoj</p>
			<p><span class="eo">diskriminacio</span>: maljusta distingado</p>
			<p><span class="eo">diskuti</span>: interargumenti</p>
			<p><span class="eo">distingi</span>: rimarki diferencon inter homoj aŭ ideoj</p>
			<p><span class="eo">diverĝi</span>: malproksimiĝi unu de la alia</p>
			<p><span class="eo">doktrino</span>: akceptata principaro</p>
			<p><span class="eo">efektiva</span>: reale ekzistanta</p>
			<p><span class="eo">ekonomio</span>: administrada sistemo, ŝparado</p>
			<p><span class="eo">eksplodi</span>: diskrevi</p>
			<p><span class="eo">ekzakta</span>: severe preciza</p>
			<p><span class="eo">elito</span>: elektitaro</p>
			<p><span class="eo">emocio</span>: kortuŝo</p>
			<p><span class="eo">evolui</span>: disvolviĝi</p>
			<p><span class="eo">fanatika</span>: blinde fervora</p>
			<p><span class="eo">fantazio</span>: kaprica imagado</p>
			<p><span class="eo">flago</span>: simbola tolaĵo</p>
			<p><span class="eo">flegi</span>: prizorgi (ekz-e malsanulon)</p>
			<p><span class="eo">gramatiko</span>: reguloj aŭ studado de iu lingvo</p>
			<p><span class="eo">ĝenerala</span>: rilata al tutaĵo aŭ plimulto</p>
			<p><span class="eo">himno</span>: religia kanto</p>
			<p><span class="eo">ĥaoso</span>: kompleta ordomanko</p>
			<p><span class="eo">impeti</span>: antaŭenĵetiĝi</p>
			<p><span class="eo">impulso</span>: ekpuŝo</p>
			<p><span class="eo">individuo</span>: unuopa persono aŭ estaĵo</p>
			<p><span class="eo">inerta</span>: senenergia, nemoviĝema</p>
			<p><span class="eo">informi</span>: doni sciigojn aŭ klarigojn</p>
			<p><span class="eo">insigno</span>: distingiga signo</p>
			<p><span class="eo">instanco</span>: decidkapabla aŭtoritato</p>
			<p><span class="eo">inversa</span>: estanta en mala direkto</p>
			<p><span class="eo">kalkuli</span>: nombri, konsideri</p>
			<p><span class="eo">karakterizi</span>: montri ies karakteron</p>
			<p><span class="eo">klera</span>: instruita</p>
			<p><span class="eo">koalicio</span>: kunligo de diversaj interesoj por komuna celo</p>
			<p><span class="eo">kohera</span>: kunteniĝanta</p>
			<p><span class="eo">komploto</span>: sekreta aranĝo por malicaj celoj</p>
			<p><span class="eo">kompromiso</span>: interkonsento de konfliktaj interesoj</p>
			<p><span class="eo">konflikto</span>: aktiva malkonsento</p>
			<p><span class="eo">konkreta</span>: reale perceptebla, palpebla</p>
			<p><span class="eo">kontribui</span>: doni sian parton al komuna afero</p>
			<p><span class="eo">konvencio</span>: akceptita moro</p>
			<p><span class="eo">konvinki</span>: akceptigi per pruvoj</p>
		</div>
		<div class="col s12 m6">			
			<p><span class="eo">korekti</span>: ĝustigi eraron</p>
			<p><span class="eo">kribri</span>: apartigi pli delikatajn erojn</p>
			<p><span class="eo">krizo</span>: grave danĝera momento</p>
			<p><span class="eo">kulto</span>: kvazaŭreligia adorado</p>
			<p><span class="eo">limo</span>: loko, kiu difinas la ekstremon de io</p>
			<p><span class="eo">medio</span>: fizika aŭ spirita ĉirkaŭaĵo</p>
			<p><span class="eo">menso</span>: la spirita, nekorpa parto de homo</p>
			<p><span class="eo">metodo</span>: maniero atingi iun celon</p>
			<p><span class="eo">mistiko</span>: emo kredi je misteraj malklaraj kaj nepruveblaj kaŭzoj kaj efikoj</p>
			<p><span class="eo">modifi</span>: parte ŝanĝi</p>
			<p><span class="eo">monolingvismo</span>: doktrino pri unu komuna lingvo por ĉiuj</p>
			<p><span class="eo">neologismo</span>: nova vorto</p>
			<p><span class="eo">neta</span>: nekonfuza kaj preciza</p>
			<p><span class="eo">nivelo</span>: grado de alteco</p>
			<p><span class="eo">nutri</span>: doni manĝaĵon aŭ spiritan subtenon</p>
			<p><span class="eo">objektiva</span>: senpartia</p>
			<p><span class="eo">pacienco</span>: eco trankvile atendadi</p>
			<p><span class="eo">paralela</span>: egaldistanca laŭlonge</p>
			<p><span class="eo">percepti</span>: koni per la sentorganoj</p>
			<p><span class="eo">perfekta</span>: tute senmanka</p>
			<p><span class="eo">periodo</span>: difinita tempodaŭro</p>
			<p><span class="eo">pesi</span>: mezuri la pezon</p>
			<p><span class="eo">pioniro</span>: homo, kiu pretigas la vojon</p>
			<p><span class="eo">plano</span>: antaŭe decidita aranĝo por fari ion</p>
			<p><span class="eo">polilingvismo</span>: plurlingvisma doktrino</p>
			<p><span class="eo">ponto</span>: konstruaĵo por transiri super io</p>
			<p><span class="eo">potenco</span>: kapablo trudi sian aŭtoritaton</p>
			<p><span class="eo">pozitiva</span>: nepre certa</p>
			<p><span class="eo">praktika</span>: realigebla</p>
			<p><span class="eo">progresi</span>: disvolviĝi antaŭen</p>
			<p><span class="eo">projekto</span>: proponata ideo</p>
			<p><span class="eo">prototipo</span>: la unua, laŭ kiu ĉiuj postaj kreiĝas</p>
			<p><span class="eo">provizora</span>: portempa</p>
			<p><span class="eo">pulso</span>: korbatado</p>
			<p><span class="eo">puŝi</span>: preme delokigi</p>
			<p><span class="eo">racio</span>: kapablo koncepti principojn</p>
			<p><span class="eo">raso</span>: grupego da homoj samdevenaj</p>
			<p><span class="eo">rekomendi</span>: favore atentigi pri io</p>
			<p><span class="eo">reliefo</span>: atentiga distingeco</p>
			<p><span class="eo">revolucio</span>: subita grava ŝanĝiĝo</p>
			<p><span class="eo">rezulto</span>: logika sekvo</p>
			<p><span class="eo">rolo</span>: agado aŭ funkcio (ekz-e de aktoro)</p>
			<p><span class="eo">rutino</span>: kutimo, kiun oni daŭre kaj senpense ripetadas</p>
			<p><span class="eo">sekto</span>: aro da personoj aliĝintaj al stranga doktrino</p>
			<p><span class="eo">sentimentala</span>: havanta romantikan sentemon</p>
			<p><span class="eo">sinonimo</span>: vorto samsignifa</p>
			<p><span class="eo">sintezo</span>: sistemiga rezonado</p>
			<p><span class="eo">skizo</span>: rapida desegno</p>
			<p><span class="eo">solidara</span>: respondeca ĉiuj pri la aliaj</p>
			<p><span class="eo">stadio</span>: difinita grado de evoluo</p>
			<p><span class="eo">stati</span>: esti en certa kondiĉo</p>
			<p><span class="eo">strebi</span>: energie streĉi la fortojn</p>
			<p><span class="eo">ŝanceli</span>: malfirmigi</p>
			<p><span class="eo">taksi</span>: difini la valoron de io</p>
			<p><span class="eo">tavolo</span>: parto de la socio konsiderata kompare kun pli superaj kaj pli malsuperaj partoj</p>
			<p><span class="eo">tendenco</span>: daŭra inklino al io</p>
			<p><span class="eo">tezo</span>: scienca aserto</p>
			<p><span class="eo">tradicio</span>: ideo transdonita de pli fruaj generacioj</p>
			<p><span class="eo">traduki</span>: transigi de unu lingvo en alian</p>
			<p><span class="eo">treni</span>: pene tiri post si</p>
			<p><span class="eo">U.E.A.</span>: Universala Esperanto Asocio</p>	
		</div>
	</div>'
  WHERE l.kurso = 'PP' AND l.numero = 13 AND le.ordo = 2;

-- leçon 13, section 3
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##EKZERCO:173:eo##'
  WHERE l.kurso = 'PP' AND l.numero = 13 AND le.ordo = 3;

-- leçon 13, section 4
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##EKZERCO:174:eo####EKZERCO:175:eo####EKZERCO:176:eo##'
  WHERE l.kurso = 'PP' AND l.numero = 13 AND le.ordo = 4;

-- leçon 13, section 5
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##EKZERCO:177:eo##'
  WHERE l.kurso = 'PP' AND l.numero = 13 AND le.ordo = 5;

-- leçon 13, section 6
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##RESUMO##'
  WHERE l.kurso = 'PP' AND l.numero = 13 AND le.ordo = 6;

-- leçon 14, section 1
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<div class="rakonto">
			<h3>AVINJO</h3>
 
 			<p>– Ni restu en mallumo, li petis. Estas tiom ripozige aŭdi bruon de la ondoj inter la rifoj, kaj nenion vidi. </p>
 			<p>Mi estingis la lampon malantaŭ ni. La teraso fariĝis tute malhela. Dum momento, nenio estis videbla; sed baldaŭ ni perceptis konturojn de la sveltaj kolonetoj; sub necerta lumo falanta de miriadoj da steloj, la sablo, la rifoj, la maro nigris malsame. Niaj vizaĝoj fantomis pale unu al la alia. Kaj mi komprenis, ke mia amiko estis preta ellasi per konfidenco la tro streĉitajn nervojn. Cigaredo fosforeskis. Dum ĝia ekfajriĝo, mi rimarkis la kuntiritajn brovojn de mia amiko.</p>
 			<img class="flot-d l-60 s-100" src="eo/ppp/bildoj/avinjo.jpg"><p>– Nu, mi bezonas konsilon.</p>
 			<p>– Diru.</p>
 			<p>– Mi devas mortigi mian avinjon, kaj ne scias kiel.</p>
 			<p>Mi eksaltis:</p>
 			<p>– Ho!</p>
 			<p>– Jes. Mi devas mortigi ŝin. </p>
 			<p>– Sed kial?</p>
 			<p>– Ĉar ŝi jam mortis.</p>
 			<p>– Kion vi diras?</p>
 			<p>De sia reveno el Francujo, mia amiko ŝajnas eviti min, kaj, la tre malmultajn fojojn kiam mi povis alparoli lin, li aspektis ne tute sana mense. Li ne atentis; li ne respondis, aŭ respondis post kelkaj minutoj. Li agis kaj parolis hezite, nedecide, kvazaŭ obseda ideo posedus lin. Kaj nun… Ĉu tiu estis la obsedo?</p>
 			<p>– Jes. Ŝi jam mortis; kiel do mi povas fari, ke ŝi mortu?</p>
 			<p>– Ŝi? Avinjo Dalia? Ĉu vi parolas pri avinjo Dalia?</p>
 			<p>– Jes. Ĉu vi memoras ŝin?</p>
 			<p>Mi memoris la maljunulinon; preskaŭ naŭdekjara ŝi estis: sulka vizaĝo, hezitema voĉeto, ne plu vigla menso. La tutan tagon ŝi estis dormetanta kvazaŭ infano kiu pene trenas sin atendante baldaŭan definitivan endormiĝon. Avinjo Dalia, laca el sia longa vivo… Ĉu ŝi definitive endormiĝis?</p>
 			<p>– Aŭskultu, kaj ne interrompu min. Alie, mi ne kuraĝos ĉion rakonti.</p>
 			<p>Mi silentis obeeme. La maro daŭre grumblis inter la rifoj.</p>
 			<p>– Nu, kiam mi planis tiun vojaĝon al Côte d’Azur, avinjo Dalia neatendite ekvigliĝis. Lastan fojon, ŝi diris, mi volas vojaĝi; prenu min kun vi en via aŭtomobilo; kia ĝeno mi estos por vi? Vi kalkulu havi unu plian valizon; kaj tiel plu. Elna pledis por la afero de avinjo ĉe mi: finfine, kompatinda avinjo, kiajn ĝojojn ŝi havis de la vivo? Tri militoj venis kaj pasis, kaj ĉiam ŝi restis en sia provinca urbeto; la mondo ŝanĝiĝis, ŝi ne konas ĝin; se ŝi tiom deziras tiun vojaĝon, nu lasu…</p>
 			<p>Mi fine cedis al mia edzino kaj al avinjo Dalia. Foriris ni tri. Pasportoj, kofroj, devizoj, ŝaloj kaj kaŭĉuka botelo por avinjo. Kaj triumfe avinjo Dalia marŝis sur la laŭstranda promenejo de Cannes. Eble ŝia maljuna koro tro pleniĝis je maro, je ĉielo, je luma ĝojo de sunsubiroj: eĉ de sia propra sunsubiro. Ĝi krevis.</p>
 			<p>– Ho! Mi ne sciis!</p>
 			<p>– Silentu! Neniu sciis. Neniu scias. Ĉar ni komprenis, ke transporto de kadavro al nia lando kostos terure, ke oni devos plenumi nedireble multajn formalaĵojn, ke ni certe devos malfruigi nian revenon hejme je tagoj, eble je semajnoj, kaj tio signifus bato por mia entrepreno, por mia laboro, ni diris al neniu, ke avinjo mortis. Inter Elna kaj mi ne estis diskutoj. Ni tuj vestis avinjon por vojaĝi: ŝi veturos kun ni, en ombra angulo de nia aŭto, kovrita per ŝaloj. Malmultaj horoj dividis nin de nia hejmlanda limo: ŝi mortos oficiale tuj trapasinte ĝin, de ĝi nia urbo ne estas malproksima. Tien alvenintaj, ni esperis, ke nia familia kuracisto helpos nin, eventuale deklarante, ke la morto okazis unu-du horojn pli malfrue ol la vero, do trapasinte la landlimon.</p>
 			<p>Ni ekveturis tuj: ni pagis hotelkonton, ŝarĝis nian aŭton per valizoj kaj, profitante el la fakto, ke la ĉambro de avinjo havis fenestropordon al la ĝardeno de la hotelo (ni ne volis, ke ŝi estu devigata grimpi ŝtupojn), portis tien la veturilon kaj situigis avinjon sidanta sub aro da ŝaloj. La kapo apogiĝis dormmiene sur ŝultro: pala kiel ĉiam, ŝi ŝajnis, kiel ĉiam, dormeti.</p>
 			<p>Mi forglutis kilometron post kilometro, piedon sur la akcelilo, okulojn al rapid-montrilo. Jen la limo. Ni donis la tri pasportojn. Niaj koroj – niaj du koroj batis; neniu rimarkis, ke ne batas la tria.</p>
 			<p>Do, oficiale, laŭ la stampo sur sia pasporto, avinjo Dalia eniris vivanta nian landon.</p>
 			<p>Vespero estis falanta. Ni veturis inter montoj krute minacaj.</p>
 			<p>Neniu el ni emis paroli. Ni sentis interese la ĉeeston, kaj samtempe la malĉeeston, malantaŭ ni, de avinjo Dalia.</p>
 			<p>Subite Elna ekparolis:</p>
 			<p>– Tamen, ŝi diris, oni devos manĝi. Jes, sed kiel…</p>
 			<p>Nu… Ni haltigu la veturilon en malluma strateto; poste, ni – ni du – serĉos restoracion kaj manĝos.</p>
 			<p>Ni estis enirantaj mezgrandan urbon. Jen taŭga strato: malluma, silenta, soleca. Neniu ĝenos la grandan dormon de avinjo Dalia. Mi ŝlosis akurate ambaŭ pordojn de nia veturilo.</p>
 			<p>Post kelkaj minutoj, la lumoj, la bruo, la miksitaj odoroj de restoracio malstreĉis niajn nervojn kaj iom distris niajn deprimitajn spiritojn. Bonega vespermanĝo kaj taŭgaj alkoholaĵoj plie helpis nin momente forgesi pri la dormantino en senluma veturilo.</p>
 			<p>Jam estis la deka vespere kiam ni pagis kaj eliris. Ni iom penis trovi la strateton; sed, kvankam ni streĉis niajn okulojn en la mallumo, neniel ni povis vidi nian aŭtomobilon. Kaj ni devis konvinkiĝi, ke oni ŝtelis ĝin. Kun avinjo ene.</p>
 			<p>Strange, dum mia lango pasis febre sur miaj sekaj lipoj mi ne pensis pri nia situacio, nek pri la perdo de mia veturilo, nek pri avinjo Dalia. Mi pensis pri la ŝtelistoj. Kian mienon ili havos, kiam ili malkovros la kadavron! Kaj mia dua penso estis: ni devas retrovi ĉiukaze la veturilon, sed ni ne povas turni nin al la policejo: ili pridemandus nin, volus scii kion enhavis la aŭtomobilo. Nia nura espero estis, ke la ŝtelistoj, kiel ofte okazas, forlasu la aŭton, eventuale sen kromrado, sen radio, sen valizoj, sen la diablo kiu forportu ilin… sed kun avinjo.</p>
 			<p>Ni luis taksion. Ni pasigis tri kvaronojn de la nokto laŭirante ĉiujn stratojn, vojojn, placojn kaj stratetojn de tiu damnita urbo. Mi povas certigi al vi, ke mi konas ĝin parkere. Mi detale vizitis ĝin. Tute detale.</p>
 			<p>Nenio.</p>
 			<p>Ni maldungis la taksion. Ni pagis fabelan lu-prezon kaj ne aldonis trinkmonon. La taksiisto foriris ne sciante ĉu ĝoji pro la longa dungado aŭ ĉu grumbli pro manko de trinkmono. Mi opinias, ke li faris ambaŭ.</p>
 			<p>Jen ni en flavromana situacio. Ni sentis nin krimuloj. Nur, anstataŭ havi la problemon senigi nin de kadavro, ni devis solvi tiun rehavi nian kadavron. Sen kadavro, ni estas perditaj.</p>
 			<p>Grize mateniĝis. Pluveto ekfalis. Sed ni ne atentis ĝin. Ni estis marŝantaj sencele, senpense laŭ kampara vojeto ekster la urbo. Laceco, emocioj, timego malplenigis niajn kapojn. Elna donis al mi duonkuraĝige la brakon. Mi dankis per rideto senkolora.</p>
 			<p>Subite, en la duba lumo, jen vizio. Ĝi frapis nin kvazaŭ nerealeco. Nia veturilo fantomis, kotmakulita, antaŭ ni, ĉe kurbo de tiu vojeto. Mi legis kaj relegis la numeron sur la ŝildo. Nenia dubo, estis ĝi! Ni kuris, mi febre malfermis pordon ĉe kiu la ŝlosilo jam ne plu estis bezonata…</p>
 			<p>Avinjo ne estis tie. Valizoj, ŝaloj, radio, kromrado, ĉio netuŝita. Sed avinjo mankis.</p>
 			<p>Ni nin rigardis senespere. Kien la ŝtelistoj povis ĵeti ŝin? Ni serĉis en la proksimaj kampoj. Ni serĉis inter la arbetaroj. Nenio. Ni revenis al la aŭto, ĉiam serĉante, eĉ sub ĝi…</p>
	 		<p>– Ĉu mi povas helpi? demandis propone preterpasanta kamparano – Ĉu vi perdis ion?</p>
 			<p>– Jes. Kadavron! senvole elbuŝigis Elna per raŭka voĉo.</p>
 			<p>La kamparano haltis, gapis momenton, senmova, senesprima. Poste li ruĝiĝis:</p>
 			<p>– Ne, mi ne vidis ĝin..., li balbutis, kaj forkuris.</p>
 			<p>Kion fari nun? Ni ne povis iri al policejo, diri ke oni ŝtelis kadavron. Ni ne povis diri, ke avinjo forkuris: duonparalizita naŭdekjarulino ne forkuras tiel. Ni ne povis deklari, ke ŝi malaperis: kiam oni trovus la kadavron (mia Dio, kie? kiel?), oni konstatus, ke ĝi estis ĵetita jam post morto el la aŭtomobilo: tio estas elemente simpla; kaj ni… teruro!</p>
 			<p>Ni reengrimpis la aŭtomobilon. Mi silente startis. Ni veturis malrapide al nia urbo, al nia domo. En mia poŝo, sur pasporto, kuŝis avinjo vivanta; en mia veturilo tamen ne plu kuris avinjo mortinta.</p>
 			<p>Ni venigis hejmen niajn gekuzojn, kaj pristudis la situacion, kiun mi sincere klarigis al ili. Kaj, jen nova problemo. Avinjo Dalia, kiel vi scias, estis riĉa. Ŝi posedis multon; ŝi kompreneble testamentis, preskaŭ certe je favoro de ĉiuj siaj nepoj. Sed la testamento kuŝas fermita en tirkesto de ŝia komodo; kiel malfermi ĝin? Kiel pruvi, kiel diri eĉ al geamikoj, ke ŝi mortis?</p>
 			<p>Ŝi laŭleĝe vivas kaj eniris nian landon vivanta. Intertempe, ni neniun vidas, al neniu parolas, vivas solaj, kiel pestmalsanuloj evitas ĉies kontakton. Nur vin mi enlasis ĉi-vespere, profitante el momenta foresto de Elna. Kaj mi enlasis vin por peti, por preĝi vin: helpu min ne freneziĝi, sugestu al mi rimedon, por mortigi mian avinjon…</p>
 			<p>La maro ĉiam grumblis inter la rifoj. Mi ne vidis solvon, nek en la nigra inko bruete moviĝanta sub ni, nek en la lumetanta veluro silente etendiĝanta super ni.</p>
 			<p>Avinjo Dalia, kie vi estas?</p>

 			<p><b>Clelia Conterno Guglielminetti</b> (el <i>La Suda Stelo</i>)</p>
		</div>
		
		<p class="creditphoto">Bildo: thodonal /Adobe Stock</p>'
  WHERE l.kurso = 'PP' AND l.numero = 14 AND le.ordo = 1;

-- leçon 14, section 2
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<div class="vortlisto row">
		<div class="col s12 m6">
			<p><span class="eo">akceli</span>: plirapidigi.</p>
			<p><span class="eo">akurata</span>: ĝustatempa.</p>
			<p><span class="eo">aŭtomobilo</span>: motorveturilo.</p>
			<p><span class="eo">botelo</span>: vitra ujo.</p>
			<p><span class="eo">brovo</span>: hararo super la okulo.</p>
			<p><span class="eo">deprimi</span>: senkuraĝigi.</p>
			<p><span class="eo">devizo</span>: fremdmona ĉeko.</p>
			<p><span class="eo">distri</span>: agrable okupi.</p>
			<p><span class="eo">dungi</span>: interkonsenti kun servisto por ricevi lian servadon.</p>
			<p><span class="eo">entrepreni</span>: komenci la plenumadon de grava tasko.</p>
			<p><span class="eo">estingi</span>: ĉesigi bruladon aŭ lumadon.</p>
			<p><span class="eo">eventuala</span>: povanta okazi.</p>
			<p><span class="eo">fosforeski</span>: lumi en mallumo.</p>
			<p><span class="eo">hotelo</span>: loĝejo por vojaĝantoj.</p>
			<p><span class="eo">inko</span>: kolora fluaĵo uzata por skribi.</p>
			<p><span class="eo">kaŭĉuko</span>: elasta gumo.</p>
			<p><span class="eo">komodo</span>: tirkestaro.</p>
			<p><span class="eo">konfidenco</span>: sciigo, kiun oni konfidas, kaj kiu ne estu malkaŝota.</p>
			<p><span class="eo">konsili</span>: sugesti farotaĵon.</p>
			<p><span class="eo">konto</span>: komerca kalkulo.</p>
			<p><span class="eo">konturo</span>: ĉirkaŭanta limlinio de io.</p>
			<p><span class="eo">kruta</span>: preskaŭ vertikala.</p>
			<p><span class="eo">lipo</span>: buŝrando.</p>
			<p><span class="eo">lui</span>: havigi ion por provizora uzado, kontraŭ pago.</p>
			<p><span class="eo">nepo</span>: filo de fil(in)o.</p>
		</div>
		<div class="col s12 m6">			
			<p><span class="eo">obsedi</span>: premokupi la spiriton.</p>
			<p><span class="eo">paralizi</span>: perdigi la movkapablon.</p>
			<p><span class="eo">pasporto</span>: dokumento rajtiganta vojaĝi eksterlanden.</p>
			<p><span class="eo">pesto</span>: epidemia malsano.</p>
			<p><span class="eo">polico</span>: administracio por prizorgi la publikan ordon.</p>
			<p><span class="eo">prezo</span>: vendvaloro de objekto.</p>
			<p><span class="eo">provinco</span>: la lando, ekster la ĉefurbo.</p>
			<p><span class="eo">rifo</span>: danĝera roko en la maro.</p>
			<p><span class="eo">situo</span>: situacio.</p>
			<p><span class="eo">stampi</span>: frapreliefigi markon.</p>
			<p><span class="eo">starti</span>: ekiri.</p>
			<p><span class="eo">strando</span>: sabla marbordo.</p>
			<p><span class="eo">sugesti</span>: proponi, subinspiri.</p>
			<p><span class="eo">svelta</span>: ĉarme kaj elegante maldika.</p>
			<p><span class="eo">ŝalo</span>: lantuko.</p>
			<p><span class="eo">ŝildo</span>: tabuleto surskribita.</p>
			<p><span class="eo">taksio</span>: aŭtomobilo luebla kun ŝoforo.</p>
			<p><span class="eo">teraso</span>: eksterdoma sidejo.</p>
			<p><span class="eo">testamento</span>: skribaĵo, per kiu oni difinas postlasaĵon postmortan.</p>
			<p><span class="eo">trinki</span>: gluti fluaĵon.</p>
			<p><span class="eo">triumfo</span>: granda venko aŭ sukceso.</p>
			<p><span class="eo">valizo</span>: kofreto.</p>
			<p><span class="eo">veluro</span>: mola ŝtofo.</p>
			<p><span class="eo">vizio</span>: imagaĵo, iluzio.</p>
		</div>
	</div>'
  WHERE l.kurso = 'PP' AND l.numero = 14 AND le.ordo = 2;

-- leçon 14, section 3
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##EKZERCO:178:eo##'
  WHERE l.kurso = 'PP' AND l.numero = 14 AND le.ordo = 3;

-- leçon 14, section 4
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##EKZERCO:179:eo####EKZERCO:180:eo####EKZERCO:181:eo####EKZERCO:182:eo##'
  WHERE l.kurso = 'PP' AND l.numero = 14 AND le.ordo = 4;

-- leçon 14, section 5
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##EKZERCO:183:eo##'
  WHERE l.kurso = 'PP' AND l.numero = 14 AND le.ordo = 5;

-- leçon 14, section 6
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##RESUMO##'
  WHERE l.kurso = 'PP' AND l.numero = 14 AND le.ordo = 6;

-- leçon 15, section 1
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<div class="rakonto">
			<h3>LA UNIVERSO – EKSPLODANTA?</h3>
 
			<p>Ĉu la Universo estas senfina aŭ ne – estas demando, kiun oni ofte aŭdas. Grandaj distancoj, miriadoj da steloj kaj stelmondoj malebligas al ni havi superrigardon al la Kosmo en ĝia totaleco. La steloj nokte videblaj sur la ĉielo apartenas al la giganta stelsistemo, kiun astronomoj nomis “galaksio”. “Lakta vojo” estas nur la plej densa parto de la galaksio al kiu apartenas ankaŭ nia Suno kun la planedoj. Por trapasi galaksion de unu ekstremo al la alia la plej rapida heroldo de l’ Universo, la lumo, devas vojaĝi ĉirkaŭ 100&nbsp;000&nbsp;jarojn! Ĝi entenas proksimume 200&nbsp;miliardojn da stelo-sunoj (ĉiuj steloj estas sunoj!). Krom la steloj en ĝi estas nebuloj formitaj el la interstela gaso. Ili estas tre interesaj objektoj en la teleskopo. Sed ne ĉiuj nebulecaj objektoj en la ĉielo apartenas al nia Lakta vojo. Kelkaj estas tre malproksime ekster ĝi kaj konsistas en realo el la steloj kiel nia galaksio. Ili ja estas aliaj galaksioj kiuj etendiĝas ĝis la limo de la videbla Universo. Samtiel kiel la galaksioj konsistas el la steloj, la Universo, ĝis nun konata, konsistas el multego da galaksioj.</p>
			<img class="flot-g l-60 s-100" src="eo/ppp/bildoj/universo.jpg"><p>Kiamaniere esplori tiun egan kosmo-mondon?</p>
			<p>Peniga estis la laboro de la astronomoj ĝis kiam ili sukcesis elmezuri la distancojn ĝis la plej proksimaj galaksioj. La galaksio en la konstelacio de Andromedo (sola kiun oni ankoraŭ iel povas vidi nudokule) estas pli ol du milionojn da lumjaroj malproksime de ni. Homo ankoraŭ ne ekzistis sur la tero kiam la ĵus alvenanta lumradio forlasis tiun ĉi galaksion. La aliaj galaksioj estas eĉ nekompareble pli malproksimegaj.</p>
			<p>La astronomo Edwin Hubble, studante la galaksiojn per siatempe plej granda teleskopo de la mondo, malkovris en la jaro 1929a tre interesan kaj surprizan fenomenon – la galaksioj diskuregas (fuĝas) ĉiuflanken – for de la Lakta Vojo kvazaŭ ĝi estus la centro de la Universo!</p>
			<p>Por kompreni kiamaniere oni eltrovis tion ni revenu al unu el la fundamentaj metodoj de astronomia esplorado – la spektra analizo.</p>
			<p>Ĝis antaŭ nelonge la nura heroldo, kiu venadis ĝis ni el la mondo de steloj, estis la lumo. Do, la tuta scio pri la stela mondo devis baziĝi sur esplorado de ilia lumo. Jam de la tempo de Newton oni scias ke la “blanka” lumo konsistas el sep bazaj spektrokoloroj. La koloro mem estas fiziologia efekto en nia okulo. Kian koloron ni vidos, dependas de la ondolongo de la lumo (t.e. de ĝia frekvenco). Se dum unu sekundo, ekzemple, nia okulo ricevas pli da “ondfaloj”, ni vidos bluan koloron, se ĝi ricevas malpli, ni vidos la ruĝan. La lumo el la Suno kaj el aliaj steloj estas miksaĵo de ĉiuj spektraj koloroj (ruĝa, oranĝa, flava, verda, blua, viola). Per vitra prismo ni povas apartigi diversajn ondolongojn (kolorojn) unu disde la alia. Tion ni nomas “la spektro”. En la spektro de iu stelo ni vidas multajn nigrajn liniojn. Ili restas ĉiam sur la sama loko en la spektro kaj karakterizas ĉeeston de iu konata kemia elemento en la atmosfero de la stelo. Tiamaniere astronomoj sukcesis esplori kemian konsiston de malproksimegaj steloj sendepende al ilia distanco de ni. Sed ne nur tion! La spektra analizo ebligas eĉ konstati ĉu iu stelo alproksimiĝas al ni, aŭ kontraŭe, ĉu ĝi malproksimiĝas de ni!</p>
			<p>Kiamaniere?</p>
			<p>Helpu al ni simpla ekzemplo el la ĉiutaga vivo: imagu ni nin starantaj apud trajnreloj. Alvenas fajfante lokomotivo kaj pasas rapide preter ni. Dum la lokomotivo estas alvenanta, la sono de la fajfado estas alta. Kiam la lokomotivo pasas preter ni kaj komencas malproksimiĝadi de ni, la sono abrupte malplialtiĝas! La kaŭzo?</p>
			<div class="card flot-d l-40 s-100">
				<div class="card-image"><img src="eo/ppp/bildoj/doppler-efiko1.png"></div>
				<div class="card-content"><p><b>Doppler-efiko:</b> Fiksita mikrofono registras moviĝantajn policajn sirenojn je malsamaj tonaltoj depende de iliaj relativaj direktoj.<br>Fonto <a href="https://eo.wikipedia.org/wiki/Efiko_de_Doppler">https://eo.wikipedia.org/wiki/Efiko_de_Doppler</a></p></div>
			</div>
			<div class="card flot-d l-20 s-100" style="clear:both;">
				<div class="card-image"><img src="eo/ppp/bildoj/doppler-efiko2.png"></div>
				<div class="card-content"><p>Ruĝenŝoviĝo de spektraj linioj en la optika spektro de supergrapolo de lontanaj galaksioj (dekstre) kompare al la suno (maldekstre).</p></div>
			</div>

			<p>La alto de la sono dependas de ĝia frekvenco (la nombro de vibroj en unu sekundo), same kiel la koloro en la lumo dependas de la vibroj de elektromagnetaj ondoj. Ju pli multe da sonfrapoj en nia orelo, des pli alta la sono. Kompreneble, se la sonfonto alproksimiĝas al ni, nia orelo akceptas pli da ondfrapoj en unu sekundo, la frekvenco estas pli granda kaj la sono pli alta! Kontraŭe estas se la sonfonto malproksimiĝas de ni. Ĉi tiu interesa kaj grava fenomeno ricevis nomon “la Doppler-principo” laŭ ĝia eltrovinto, fizikisto Kristian Doppler.</p>
			<p>La sama efekto montriĝas ne nur de la sono, sed ankaŭ de la lumo. Se la lumfonto (ekzemple, iu stelo) alproksimiĝas al ni, la nigraj linioj en ĝia spektro (kiuj estas ĉiam sur precize difinita ondolongo) estas ŝovataj al blua parto de la spektro. El la diferenco de la fakta kaj normale atendata pozicio de linioj oni tute simple povas elkalkuli la rapidon de la lumfonto (t.e. la rapidon per kiu iu stelo alproksimiĝas al ni aŭ malproksimiĝas de ni!).</p>
			<p>Dum oni esploris tiamaniere stelojn el nia galaksio ĉio estis en ordo. Iuj steloj alproksimiĝadis, la aliaj fuĝadis de ni.</p>
			<p>Sed aplikante la Doppler-principon al la mondo de galaksioj oni konstatis emocian surprizegon – ĉiuj galaksioj malproksimiĝas de ni!! Eĉ pli! Hubble konstatis ke ju pli malproksime estas iu galaksio des pli rapide ĝi forkuregas de ni! Tio ne signifas ke ni estas la centro de la Universo, kaj ke ĉiuj galaksioj fuĝas de ni. Tute ne! Al observanto sur iu ajn galaksio montriĝus la sama efekto – ĉiuj estus fuĝantaj de li!</p>
			<p>Tio signifas ke ĉiuj galaksioj malproksimiĝas unu de la alia – do, la Universo estas en la stato de eksplodo!? La astronomo Lemaître supozis eĉ ke en la prakomenco de la Kosmo ekzistis nur unu granda praatomo entenanta tutan kosman materion kaj energion. Ĝi eksplodis kaj tial hodiaŭ la tuta Universo ekspansiiĝas.</p>
			<p>Sed aliaj astronomoj provis alimaniere klarigi tiun ĉi preskaŭ enigman problemon, ĉar dum lastaj jaroj novaj malkovroj multe komplikis la aferon. Nome, en la jaro 1959-a la astronomo Minkowski malkovris per la plej granda teleskopo de la mondo (sur la Monto Palomar) la grupon de galaksioj je distanco de 6&nbsp;miliardoj da lumjaroj (!) fuĝantaj de ni per la rapido de 138&nbsp;500&nbsp;kilometroj en sekundo, kio signifas preskaŭ duonon de la rapido de la lumo (300&nbsp;000&nbsp;km/sek).</p>
			<p>Sed laŭ la teorio de relativeco de Einstein neniu materia korpo povas atingi la lumrapidon. Estas certe ke per pli fortaj teleskopoj oni malkovros eĉ pli rapidfuĝantajn galaksiojn, sed tio kondukus – al la absurdo.</p>
			<p>Iutage oni verŝajne trovos galaksion malproksimiĝantan pli rapide ol la lumo mem! – la afero neebla laŭ la nuntempaj konceptoj de la teorio de relativeco.</p>
			<p>Kaj kio estos tiam?</p>
			<p>La konata franca astronomo Paul Couderc provis tre sprite klarigi tiun ĉi estontan absurd-problemon. Jen la klarigo de la problemo kiel ĝin priskribis Couderc: se ni, ekzemple, observas iun objekton per mikroskopo kaj rimarkas ke la objekto, rigardata en la mikroskopo, subite ekmalproksimiĝas – ni povas tiun ĉi okazaĵon klarigi laŭ du manieroj – aŭ la objekto fakte malproksimiĝas, aŭ la objekto restas sur sia loko, sed (pro iu ajn kaŭzo) la lenso (vitro) de la mikroskopo mallarĝiĝis! Do, la malproksimiĝo povas esti aŭ fakta, aŭ nur laŭŝajna (pro la ŝanĝo en la aparato mem). Couderc nun aplikas ĉi tiun analogion al la kosmaj okazaĵoj : faktan fuĝadon de la galaksioj la Doppler-principo povas registri, sed, se la kosmospaco plilarĝigas, la fuĝado de la galaksioj estas nur laŭŝajna, ĉar ni ne havas garantion ke la Doppler-principo estas kompetenta registri la plivastiĝon de la tuta kosmospaco…</p>
			<p>Ĉar la eventuala eksplodo de la Kosmo ja ne estas sensignifa etaĵo, multaj astronomoj dum lastaj jaroj cerbumas por klarigi tiun ĉi emocian problemon.</p>
			<p>Estas jam sufiĉa aro da spritaj klarigoj kiuj klopodas almenaŭ iel (sed, ho ve! – ne kontentige) respondi al la famaj demandoj: “Kial, do, la lumo venanta de la galaksioj estas <i>sortgrave ŝovata laŭ la ruĝa flanko de la spektro?</i>” “Ĉu la Kosmo, do, vere eksplodas?”</p>
			<p>Iuj astronomoj, ekzemple, provas respondi al ĉi-demando ankaŭ sekve: ne estas la ekspansio kaŭzo de la “ruĝiĝo” de la lumo, sed ĝi estas la “laciĝo” de la lumo dum tre longa kosma vojaĝo. Nome, la ruĝa lumo havas malpli grandan energion ol la blua – do se la blua perdas la energion pro la vojaĝo tra fortegaj gravitaj kampoj, la lumo devige transformiĝas al flava aŭ ruĝa lumo (la nigraj linioj sekve flankiĝas al ruĝa parto de la spektro).</p>
			<p>Sed al tiuj ĉi hipotezoj – same kiel al la similaj – mankas ankoraŭ multaj faktoj. Nia tuta koncepto pri la mondo en kiu ni vivas povas travivi ankoraŭ grandajn ŝanĝojn. Hodiaŭ ekestis demandoj neimageblaj en la klasika evolustadio de la fiziko kaj astronomio. Ĉu la gravito de Newton estas konstanta en la tempo? Per kiu rapido ĝi etendiĝas!? (Aŭ ĉu ĝi eĉ enprincipe etendiĝas?) Ĉu la Universo eĉ enprincipe eksplodas aŭ ĝi estas senfina kaj stabila? Ĉu ĝi eble nur pulsas?</p>
			<p>Konataj astronomoj opinias ke ankoraŭ multa tempo pasos antaŭ ol ni scios la respondojn al tiuj kaj similaj gravegaj demandoj.</p>
			<p>Sed tio ja ne malkuraĝigas nin. Bele diris Lessing: “Se iu per la dekstra mano donus al mi tutan veron, kaj per la maldekstra nur strebon al la vero, mi prenus la maldekstran!”</p>
 			<p><b>Toni Breider</b> (el <i>Homo kaj Kosmo</i>)</p>
		</div>
		
		<p class="creditphoto">Bildo: @kramynina /freepik</p>'
  WHERE l.kurso = 'PP' AND l.numero = 15 AND le.ordo = 1;

-- leçon 15, section 2
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<div class="vortlisto row">
		<div class="col s12 m6">
			<p><span class="eo">abrupta</span>: malagrable subita.</p>
			<p><span class="eo">absurda</span>: kontraŭa al la saĝo.</p>
			<p><span class="eo">analogio</span>: io, kio estas parte simila.</p>
			<p><span class="eo">astronomo</span>: homo, kiu studas la ĉielajn fenomenojn.</p>
			<p><span class="eo">astronomio</span>: studo de la ĉielaj fenomenoj.</p>
			<p><span class="eo">efekto</span>: forta impreso.</p>
			<p><span class="eo">ekspansio</span>: plietendiĝo.</p>
			<p><span class="eo">energio</span>: laborkapabla forto.</p>
			<p><span class="eo">fiziologio</span>: scienco pri la funkcioj de vivantaj estaĵoj.</p>
			<p><span class="eo">frekvenco</span>: nombro de periodoj en unu sekundo.</p>
			<p><span class="eo">galaksio</span>: stelamasego.</p>
			<p><span class="eo">gaso</span>: aersimila fluidaĵo.</p>
			<p><span class="eo">gravito</span>: reciproka altiro de la korpoj.</p>
			<p><span class="eo">heroldo</span>: diskoniganto.</p>
			<p><span class="eo">hipotezo</span>: provizore akceptata supozo.</p>
			<p><span class="eo">kemio</span>: scienco pri la konsisto de materiaĵoj.</p>
			<p><span class="eo">kompetenta</span>: kapabla plenumi ion.</p>
			<p><span class="eo">konstelacio</span>: grupo da steloj.</p>
		</div>
		<div class="col s12 m6">			
			<p><span class="eo">kosmo</span>: la tutaĵo de tio, kio ekzistas.</p>
			<p><span class="eo">lenso</span>: speciala vitraĵo tra kiu oni pasigas la lumradiojn.</p>
			<p><span class="eo">mikroskopo</span>: instrumento por vidigi malgrandegaĵojn.</p>
			<p><span class="eo">miliardo</span>: mil milionoj.</p>
			<p><span class="eo">nuda</span>: tute senvesta, nekovrita.</p>
			<p><span class="eo">planedo</span>: terbulo ĉirkaŭanta sunon.</p>
			<p><span class="eo">prismo</span>: vitraĵo uzata por analizi lumkonsiston.</p>
			<p><span class="eo">registri</span>: note enskribi.</p>
			<p><span class="eo">relo</span>: longa metalaĵo, sur kiu ruliĝas lokomotivoj ks.</p>
			<p><span class="eo">spaco</span>: senfinaĵo, en kiu moviĝas ĉiuj objektoj.</p>
			<p><span class="eo">spektro</span>: vico da diversaj koloraj lumradioj.</p>
			<p><span class="eo">stabila</span>: neŝanĝiĝema, firma.</p>
			<p><span class="eo">ŝovi</span>: puŝe delokigi.</p>
			<p><span class="eo">teleskopo</span>: instrumento por observi malproksimajn objektojn.</p>
			<p><span class="eo">totala</span>: ĉioma.</p>
			<p><span class="eo">universo</span>: la tuto de ĉio, kio ekzistas.</p>
			<p><span class="eo">vibri</span>: moviĝi tien-reen rapide.</p>
		</div>
	</div>'
  WHERE l.kurso = 'PP' AND l.numero = 15 AND le.ordo = 2;

-- leçon 15, section 3
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##EKZERCO:184:eo##'
  WHERE l.kurso = 'PP' AND l.numero = 15 AND le.ordo = 3;

-- leçon 15, section 4
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##EKZERCO:185:eo####EKZERCO:186:eo####EKZERCO:187:eo####EKZERCO:188:eo##'
  WHERE l.kurso = 'PP' AND l.numero = 15 AND le.ordo = 4;

-- leçon 15, section 5
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##EKZERCO:189:eo####EKZERCO:190:eo##'
  WHERE l.kurso = 'PP' AND l.numero = 15 AND le.ordo = 5;

-- leçon 15, section 6
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##RESUMO##'
  WHERE l.kurso = 'PP' AND l.numero = 15 AND le.ordo = 6;

-- leçon 16, section 1
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<div class="rakonto">
			<h3>UNU JARON EN LA FEINLANDO</h3>
 
			<p>Iufoje, estis en Centra Vjetnamio juna beletristo konata sub la nomo Tu Thuk. Distriktestro, li tamen preferis naturon, ol mandarenajn taskojn. Li ofte vojaĝadis tra sia pentrinda naskiĝlando, kies plej malproksimajn fontanojn kaj plej malgrandajn vojstrekojn li tute bone konis.</p>
			<p>En lia distrikto ekzistis malnova pagodo kun belega florĝardeno. Ĉiujare, je la dua monato de la lunkalendaro tie okazis granda florfesto. La pilgrimantoj plej ŝatis mirindan peonion, kies brileruĝaj floroj eligis ebriigan parfumon.</p>
			<p>Iun printempan matenon, ĉarma fraŭlino vizitis la faman lokon. Ŝi venis sola kaj, laŭŝajne, el tre malproksime. En sia admiro, ŝi fleksis florantan branĉon de la multvalora arbeto kaj ĝin rompis. La bonzoj postulis kompenson, je kio ŝi estis nekapabla. Vesperiĝis, kiam preterpasis Tu Thuk. Li demetis sian brokatan tunikon interŝanĝe de ŝia libereco.</p>
			<p>La juna mandareno estis tre amata de siaj administratoj precipe de tiu tago. Sed, li volis ĉiupreze sin liberigi de la katenoj de la honoraĵoj kaj profitoj. Iam, konsumita de sia ĉiama sopiro al senlima spaco, li rifuzis sian mandarenan sigelon kaj forvojaĝis.</p>
			<p>Li promenis en la malmulte frekventitaj lokoj, akompanate de knabo, kiu kunportis brandujon kaj gitaron. Li haltadis aŭ ĉe arbarrando, aŭ sur riverbordo, aŭ en bela groto, trinkante brandon, ludante muzikon, verkante poemojn…</p>
			<p>Iun matenon, lia barko estis glitanta sur la glata spegulo de l’ Orienta Maro, kiam li ekvidis ĉe la horizonto kvinkoloran nubon ŝvebantan super monto, kiu ŝajnis tute vapora. Akcelante siajn remilojn, li sin direktis tien. Li ŝnurfiksis sian barkon malsupre de la roko kaj surgrimpis la deklivon.</p>
			<p>Li longe ekstazis antaŭ granda groto, kies stalagmitoj kaj stalaktitoj movbrilis, kiel multe da kristalaj lampoj. Sed, apenaŭ li faris kelkajn paŝojn internen, jam la enirejo sin fermis kaj tuj lin ĉirkaŭis la plej kompleta mallumo. Timoplena, li tamen daŭrigis blindpalpe sian antaŭeniron. La grotovandoj estis muskokovritaj. La vojo estis longa kaj zigzaga. Fine, ekvidis malproksime malklaran lumeton, kiu kreskis kun lia espero.</p>
			<img class="flot-g l-50 s-100" src="eo/ppp/bildoj/persikarboj.jpg"><p>Tu Thuk eliris en vastegan ĝardenon de florantaj persikarboj. La aero estis diafana kaj parfumita, kaj milda suno verŝis sian lumon. Birdoj, kiujn li neniam estis vidinta ĥore prikantis lian alvenon. Du blujakaj servantinoj, kiuj ŝajne atendis lin delonge interflustris: “Jen li venas, la juna edziĝonto!”</p>
			<p>Al li fariĝis, kvazaŭ li estus revanta. Antaŭ liaj okuloj brilis la rubenaj tegmentoj kaj la jadaj muroj de lukse belaj palacoj. La du fraŭlinoj flugkuris en la ĉefan konstruaĵon por anonci lian alvenon. Post momento, ambaŭ reaperis, sin salute klinante antaŭ li: “Lia Nobela Moŝto estas petata eniri!”</p>
			<p>Li sekvis ilin tra longaj koridoroj el gemo, oro kaj arĝento, antaŭ ol atingi ĉambregon tapetitan per brokato kaj superverŝitan per blueta lumo. Sur sia trono el blanka santalligno, lin estis atendanta majesta kaj bela reĝino tute blanke vestita. Montrante al li blankan santallignan brakseĝon, ŝi demandis:</p>
			<p>“Juna beletristo, ĉu vi scias, kie vi estas? Ĉu vi memoras pri iu antaŭdestinita renkontiĝo?”</p>
			<p>Tu Thuk timeme skuetis sian kapon:</p>
			<p>“Kiel ŝatanto de verdaj montoj kaj bluaj akvaroj, mi vagadis tra multe da ravaj pejzaĝoj. Sed, mi neniam havis la feliĉon tien ĉi alveni. Estus malrespekte peti vian klarigon, sed mi ankoraŭ ne scias, kie mi troviĝas.”</p>
			<p>La reĝino ridetis:</p>
			<p>“Kiel vi povus scii? Jen vi estas en la sesa el la tridek ses grotoj de la Monto Fi Laj. Naskiĝinte el la akvaro, nia monto flosas sur la maro, aperas kaj malaperas laŭ la ventoj kaj la pluvoj. Via bonkoreco kaj via nobleco estas ĉiekonataj. Tial vi estas invitata en nian landon, kiun ĝis nun vidis neniu ordinara mortulo.”
			Ŝi sin turnis al siaj servantinoj. Tiuj ĉi komprenis la senparolan ordonon kaj fortiriĝis. Post momenta silento, eniris malreale bela fraŭlino. Tu Thuk tuj rekonis en ŝi tiun, kiu estis rompinta la florbranĉon. En sia kostumo el blanka vualo, ŝi aspektis milfoje pli gracie, ol dum la unua renkontiĝo.</p>
			<img class="flot-d l-50 s-100" src="eo/ppp/bildoj/cxiela-parfumo.jpg"><p>“Mia filino nomiĝas Ĉiela Parfumo, — diris la reĝino al la beletristo. Dum ŝia vojaĝo sur la tera mondo sin trafis malfeliĉo. Vi jam malavaris al ŝi bonfaron, kiun mi ne forgesas. Tial, mi permesas al ŝi kunligi sian vivon kun la via por estingi tiun dankŝuldon.</p>
			<p>”Tu Thuk, en sia granda emocio, ne sciis, kion respondi. Ĉio estis pretigita por la edziĝfesto, kiun ĉeestis ĉiuj feinoj de la tridek ses grotoj de la Monto Fi Laj. Ludis feina orkestro. Oni dancis, oni kantis, oni ebriiĝis pro la feina persikbrando.</p>
			<p class="center">⁂</p>
			<p>La tempo forpasis, kiel traflugo de la hirundoj. Jam la juna beletristo vivis unu jaron en feliĉo kaj revo. Iun matenon, blanka velo aperis sur malproksimaj ondoj kaj vekis en lia koro la sentojn pri lia tera naskiĝlando. Je la unua fojo, senlima malpleneco ekkaptis lin. Ŝajnis, ke al li mankis samtempe tro multe da aĵoj: lia patra pajlodometo sub bambutufo, la vastaj verdaj rizkampoj, kiuj lacigas la flugon de la cikonioj, la etaj bubalgardistoj ludantaj bambuflutojn sur la dorso de siaj bestoj, kiam vespere ili revenas sian vilaĝon. Tiun nokton, li ne povis fermi siajn okulojn kaj atente aŭskultis la bruon de l’ondoj, kiuj venis por estingiĝi ĉe liaj piedoj.</p>
			<p>Lia malĝojo kreskis tagon post tago kaj fariĝis nekonsolebla. Fine, li konfidis al sia feina edzino:</p>
			<p>“Mia Ĉiela Parfumo, ni jam gustumis unu jaron la dolĉecon de la geedza vivo. Mi estas tute feliĉa, sed mia koro estas tute konsumita de hejmveo. Lasu min rehejmiĝi ian tempon por revidi miajn familianojn; poste mi senprokraste revenos apud vi kaj ni kune vivos en nia eterna amo.”</p>
			<p>La feino restis tute enpensiga. Ĉe la insisto de sia edzo, ŝi turnis la kapon por kaŝi larmoguton kaj diris al li tra korŝira ekĝemo:</p>
			<p>“Mi neniel kuraĝus kontraŭstari al viaj intencoj. Sed, la surtera mondo estas malvasta kaj la surtera vivo, mallonga. Mi timas, ke vi retrovus nek la ombron de l’ salikoj, nek la bonodoron de l’ floroj de la pasintjara ĝardeno.”</p>
			<img class="flot-d l-30 s-40" style="margin: 0 -1em 0 1em" src="eo/ppp/bildoj/letero.png"><p>Ŝi konfesis siajn sentimentojn al sia patrino, kiu trankvile respondis:</p>
			<p>“Mi tute ne pensis, ke la ‘polvomondo’ tiel pezas ankoraŭ sur lia koro.”</p>
			<p>La disiĝo estis aflikta. Ĉiela Parfumo longe ploris. Ŝi pasigis al sia edzo leteron skribitan sur silka folio kaj petis lin malfermi ĝin, nur kiam li estos hejmen reveninta.</p>
			<p>Tu Thuk forveturis sur ĉaro el blanka nubo. En palpebruma daŭro li estis jam surteriĝinta.</p>
			<p>Li klopode rekonis sian naskiĝvilaĝon. Ĉio estis ŝanĝiĝinta, kaj la pejzaĝo kaj la domaro kaj la loĝantaro. Sole restis samaj la verda flanko de la montaro kaj la arĝenta rivereto, kiu serpentumis ĉe ĝia malsupro. Li sin parole turnis al respektinda blankbarba maljunulo. Aŭdante la nomon “Tu Thuk”, tiu ĉi kuntiris siajn brovojn, kvazaŭ serĉante ion en sia memoro:</p>
			<p>“Kiam mi estis ankoraŭ eta knabo, — li diris, — mi aŭdis malklare pri mia praonklo, kiu havis la saman nomon, kiel vi. Li iam foriris en la montaron kaj ne plu revenis.</p>
			<p>Tio okazis antaŭ proksimume unu jarcento…”</p>
			<p>La beletristo sentis sin pli sola, ol iam. Li volis denove engrimpi la nuban ĉaron, sed ĝi estis aliiĝinta en fenikson, kaj la ĉiela birdo jam malaperis ĉe la horizonto.</p>
			<p>Tu Thuk malfermis la leteron. Estis adiaŭa poemeto:</p>
			<p class="poemo">Meze de l’ nuboj naskiĝis amo de feniksoj<br />
			De l’ pasintjara unueco estas la fino<br />
			Ne plu serĉu sur la maro la paŝosignojn de la feinoj.<br />
			Pri estonta renkontiĝo estas nenia espero!</p>
			<p>Korpremita, Tu Thuk dankis sian maljunan pranepon kaj foriris en la montaron.</p> 			
			
			<p><b>Vu Kan</b> (el <i>Vjetnamio Antaŭenmarŝas</i>)</p>
		</div>
		
		<p class="creditphoto">Bildoj:<br>xiaoliangge /Adobe Stock<br>@tawatchai07 /freepik<br>vera Kuttelvaserova /Adobe Stock</p>'
  WHERE l.kurso = 'PP' AND l.numero = 16 AND le.ordo = 1;

-- leçon 16, section 2
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<div class="vortlisto row">
		<div class="col s12 m6">
			<p><span class="eo">administri</span>: prizorgi la funkciadon de grava organizo.</p>
			<p><span class="eo">aflikti</span>: suferigi.</p>
			<p><span class="eo">bambuo</span>: granda arbeca kano.</p>
			<p><span class="eo">barko</span>: ŝipeto.</p>
			<p><span class="eo">beletro</span>: belliteraturo.</p>
			<p><span class="eo">bonzo</span>: budaisma pastro.</p>
			<p><span class="eo">branĉo</span>: brako de arbo.</p>
			<p><span class="eo">brokato</span>: teksaĵo ornamita per oraj aŭ arĝentaj fadenoj.</p>
			<p><span class="eo">bubalo</span>: speco de granda bovo.</p>
			<p><span class="eo">cikonio</span>: granda longkrura birdo.</p>
			<p><span class="eo">destini</span>: antaŭfiksi la celon de io.</p>
			<p><span class="eo">diafana</span>: tralumebla sed netravidebla.</p>
			<p><span class="eo">distrikto</span>: administra regiono.</p>
			<p><span class="eo">ekstazo</span>: anima plezurego.</p>
			<p><span class="eo">feo</span>: supernatura fabela estaĵo.</p>
			<p><span class="eo">fenikso</span>: fabela birdo kiu renaskiĝas el propra cindro.</p>
			<p><span class="eo">fleksi</span>: kurbigi.</p>
			<p><span class="eo">flosi</span>: resti sur akvo.</p>
			<p><span class="eo">fluto</span>: tubeta muzikilo.</p>
			<p><span class="eo">folio</span>: maldika verdaĵero; maldika paperpeco k.s.</p>
			<p><span class="eo">fontano</span>: akvoŝprucigilo.</p>
			<p><span class="eo">frekventi</span>: ofte vizitadi.</p>
			<p><span class="eo">gemo</span>: valorŝtono.</p>
			<p><span class="eo">gitaro</span>: seskorda muzikilo.</p>
			<p><span class="eo">gracia</span>: facilmova, belproporcia.</p>
			<p><span class="eo">groto</span>: artefarita kaverno.</p>
			<p><span class="eo">hirundo</span>: speco de migranta birdo.</p>
			<p><span class="eo">honori</span>: trakti respekteme.</p>
			<p><span class="eo">ĥoro</span>: kantistaro.</p>
			<p><span class="eo">jado</span>: verdkolora mineralo.</p>
			<p><span class="eo">kalendaro</span>: tabelo montranta la datojn.</p>
			<p><span class="eo">kateno</span>: ligĉeno por malliberuloj.</p>
			<p><span class="eo">kompensi</span>: repagi egalvalore.</p>
		</div>
		<div class="col s12 m6">			
			<p><span class="eo">konsoli</span>: mildigi ies ĉagrenon.</p>
			<p><span class="eo">konsumi</span>: malrapide neniigi.</p>
			<p><span class="eo">koridoro</span>: endoma trairejo.</p>
			<p><span class="eo">kostumo</span>: maniero sin vesti.</p>
			<p><span class="eo">kristalo</span>: tre pura senkolora vitro.</p>
			<p><span class="eo">majesta</span>: imponaspekta.</p>
			<p><span class="eo">mandareno</span>: altranga ĉina ŝtatoficisto.</p>
			<p><span class="eo">musko</span>: mola kreskaĵo sur rokoj kaj arboj.</p>
			<p><span class="eo">nobelo</span>: altranga persono.</p>
			<p><span class="eo">orkestro</span>: muzikistaro.</p>
			<p><span class="eo">pagodo</span>: templo de aziaj dioj.</p>
			<p><span class="eo">pajlo</span>: seka grentrunketo.</p>
			<p><span class="eo">parfumo</span>: agrabla odoro.</p>
			<p><span class="eo">pentri</span>: kolore desegni.</p>
			<p><span class="eo">peonio</span>: speco de floro.</p>
			<p><span class="eo">persiko</span>: bongusta frukto.</p>
			<p><span class="eo">pilgrimi</span>: vojaĝi al sankta loko.</p>
			<p><span class="eo">prokrasti</span>: lasi ĝis pli malfrue.</p>
			<p><span class="eo">ravi</span>: ĉarmegi, admirigi.</p>
			<p><span class="eo">remi</span>: movi ŝipon per specialaj lignaj iloj.</p>
			<p><span class="eo">rizo</span>: nutrograjno kulturata en Azio.</p>
			<p><span class="eo">saliko</span>: eleganta apudakva arbo.</p>
			<p><span class="eo">santalo</span>: arbo kun bonodora ligno.</p>
			<p><span class="eo">serpento</span>: senpieda rampanta besto.</p>
			<p><span class="eo">sigelo</span>: stampilo.</p>
			<p><span class="eo">stalagmito</span>: vertikale staranta rokpintaĵo en kaverno.</p>
			<p><span class="eo">stalaktito</span>: pendanta rokpintaĵo en kaverno.</p>
			<p><span class="eo">tapeto</span>: murornamaĵo.</p>
			<p><span class="eo">trono</span>: seĝo de reĝo.</p>
			<p><span class="eo">tuniko</span>: speco de ĝisgenua ĉemizo.</p>
			<p><span class="eo">veo</span>: lamenta krio.</p>
			<p><span class="eo">Vjetnamio</span>: lando en sudorienta Azio.</p>
		</div>
	</div>'
  WHERE l.kurso = 'PP' AND l.numero = 16 AND le.ordo = 2;

-- leçon 16, section 3
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##EKZERCO:191:eo##'
  WHERE l.kurso = 'PP' AND l.numero = 16 AND le.ordo = 3;

-- leçon 16, section 4
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##EKZERCO:192:eo####EKZERCO:193:eo####EKZERCO:194:eo####EKZERCO:195:eo##'
  WHERE l.kurso = 'PP' AND l.numero = 16 AND le.ordo = 4;

-- leçon 16, section 5
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##EKZERCO:196:eo##'
  WHERE l.kurso = 'PP' AND l.numero = 16 AND le.ordo = 5;

-- leçon 16, section 6
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##RESUMO##'
  WHERE l.kurso = 'PP' AND l.numero = 16 AND le.ordo = 6;

-- leçon 17, section 1
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<div class="rakonto" style="background-image: url(''bildoj/rekomenco.jpg'');background-position: 100% 100%;background-size:contain;background-repeat: no-repeat">
			<h3>FENIKSO</h3>
 
			<p>La okuloj de la astronomo ruĝis kaj doloris. Dum longa juvelita nokto li staris ĉe la teleskopo aŭ skribis en notlibro, faris etajn krucojn sur grafikaĵoj, komparis diagramojn. Li estis laca.</p>
			<img class="flot-d l-50 s-40" src="eo/ppp/bildoj/astronomo.jpg"><p>“Mi bezonas bonan tagplenon da dormo”, li diris. “Sed, unue, legi miajn leterojn kaj la matenan ĵurnalon.”</p>
			<p>Li iris al sia skribotablo.</p>
			<p>Miloj kaj miloj da astroj; milionoj da kilometroj; lumjaroj; orbitoj kaj sistemoj; temperaturoj kiuj vaporigas feron kaj solidigas nitrogenon; aliaj gravitoj, lafaj montoj, amoniakaj maroj; glacirokoj kaj drivanta polvo; vasta matematiko de longaj nulovicoj; ekkompreneti tiun lumtremantan vualon el nigra veluro, gembrodita, tra kiu aerolitoj ofte trenas longajn lumfadenojn; la konoj kiuj ĉiam kreskigas nian respekton al la kosma mistero; tio estis la vivo de la astronomo. Lumo; lumjaroj; kaj mondoj kiuj pro la nulovicaj distancoj ŝajnas manoplenoj da brilega polvo ŝutitaj sur la vualon.</p>
			<p>Nun la okuloj de la astronomo, tiel longe fokusigitaj sur lumjarmile foraj steloj, fokusiĝis sur paperpecoj, ĉe la skribotablo en la studĉambro. Li revenis al la planedo Tero.</p>
			<p>Naŭzo kaj tremetoj maltrankviligis tiun eĉ pli malgrandan teron kiu estis lia korpo, tiun etetan sateliton, ligitan per gravito al la surfaco de planedo.</p>
			<p>La leteroj ne tre urĝis, kaj li metis ilin sub sian paperpremilon. La paperpremilo estas peco da fero: aerolito malgranda. La plimulto de la fera maso forvaporiĝis en la flugo antaŭ ol la aerolito trafis la teron. La objekto ne havis estetikan belon, sed ĝi plaĉis al la astronomo pro la profesia intereso kaj pro la mistero. Ĝi estis peceto de mortinta stelo, kiu traflugis grandajn vakuecojn kaj, esceptaĵo inter la matematikaj probabloj, renkontis alian stelon sufiĉe frue por ne tute elvaporiĝi.</p>
			<img class="flot-g l-60 s-100" src="eo/ppp/bildoj/astronomo-2.jpg"><p>La astronomo prenis la matenan ĵurnalon. Grandegaj majuskloj hurlis nervŝire.</p>
			<p>Aŭtentikaj fotaĵoj de murdistoj kiuj portis mankatenojn kaj generaloj kiuj portis brilajn ordenojn konkure postulis atenton. Ribeluloj, rifuĝintoj, protestaj procesioj, procesoj kun konfesoj, la konfesoj de kulpuloj kies vangoj estis kavaj kaj kies manoj senĉese tremetadis; filmstelinoj kun planedaj mamoj, sennaciecaj perdituloj sen pasportoj, tiuj astretoj sen normala gravito; karikaturo sur kiu fumofungo kreskis en trietaĝa ŝpruco; ferigaj, konsolaj statistikoj pri tankoj, kanonoj, aviadiloj, atombomboj, hidrogenbomboj, kobaltbomboj; la lastmodaj aktualaĵoj de Dior kaj Schiaparelli (ŝikaj virinoj portos malpli longajn jupojn ĉi-jare; la harnodo eksmodiĝas kaj la lernejknaba buklaro iĝas lastmoda; drakosango estos la nova koloro por unglako); la plej lastmodaj aktualaĵoj de la laboratorioj (ĉiu ŝika registaro nun havas stokon da hidrogenbomboj: la senskalpa harstilo baldaŭ estos laŭmoda, ĉiuj mondkonsciaj virinoj portos sterilecon sub la jupo kaj la lastmodaj jupoj mem estos faritaj el forvezikiĝinta haŭto; homsango estos la lastmoda kolorilo por la manoj de la ministraj moŝtoj); epizodoj sur landlimoj kiuj perturbas multajn nervsistemojn kaj pro kiuj pluraj nervsistemoj ne plu funkcias; la astronomo legis la ĵurnalon kaj sentis tordiĝantan vermonodon sub la stomako.</p>
			<p>Diplomatoj flugis tien kaj reen, ridetis por la fotografoj, frazis kave. Komentistoj serĉis signifon en la frazoj kaj represigis malnovajn mapojn kun novaj simboloj kaj novaj longiĝantaj, kurbaj sagoj. La edzino de fervojisto ĵus naskis kvaropon. Belegaj infanoj, ĉiuj kvar estis knabetoj. Oni vokis la knabojn naskitajn antaŭ dek ok jaroj al la flago. Sed faro longtempan kontrakton kun la armeo por interesa aventuroplena vivo. Ni havas la interesajn novajn armilojn. Flegistino riskis la vivon por savi akuŝantinon dum incendio en la hospitalo. La patrino kaj la bebo bone fartas. Niaj novaj tankoj montras grandegan teknikan progreson. Ili tiom deziris infanon, ke la edzino defiis kuracistojn kaj vetludis pri la vivo por naski. Tri kuracistoj avertis pri la danĝero de stroncio-90 en la atmosfero. Dekses-jarulino petis permeson edziniĝi: ni tiom amas unu la alian. Ni ne cedos eĉ centimetron de nia sankta teritorio. Mil cent dek kvar homoj proponis hejmon al la hundido trovita en la trajno. Ni devos esti fortegaj por defendi la pacon. Radioaktiva pluvo falis sur Pacifikan insulon. Sciencisto forkuris orienten. Dancistino forkuris okcidenten.</p>
			<img class="flot-d l-40 s-50" style="margin: 0 -1em 1em 1em;" src="eo/ppp/bildoj/aerolito.jpg" /><p>La astronomo karesis la aeroliton, solidan objekton kiu jam forvaporiĝis laŭ la ordonoj de la sorto. Ĝi restos, li pensis. La aerolito, la rifuĝinto el alia sistemo, estis konsole solida, difinita objekto en timige disvaporiĝema mondo. La astronomo vespiris kaj ŝaltis la radioaparaton.</p>
			<p>Sloganoj, generaloj, ĝeneraligoj, konfliktoj, debatoj, voĉdonoj, li denove vizitis la ĉefministron, la ambasadoro reflugis al la ĉefurbo, ni ne cedos unu centimetron, ni defendos niajn rajtojn, la kvar grandaj potencoj, la malgrandaj potencoj, la senpotencaj amasoj, nova provo pri la hidrogenbombo, tre interesaj rezultoj, stroncio-90, uranio-235, tre interesaj numeroj, la tiraneco de la bolŝevikoj, la militemo de la kapitalistoj, imperiismo, opresado, cenzurado, ŝtatperfido, spionado, la urbo estas kaptita per sturmo kaj oni portos malpli longajn jupojn ĉi-jare; ekspozicio pri novaj aviadiloj por varbi promesplenajn junulojn al la aerarmeoj; epidemio de poliomjelito la Ministerio de Publika Sano diras sterileco pro laboro inter radioaktivaj substancoj la Papo diras dudek mil novaj rifuĝintoj multaj vunditoj la Ruĝa Kruco diras striko inter la fervojistoj la Ministerio de Trafiko faras anoncon stroncio-90 uranio-235 hidrogeno kobalto ni ne cedos unu centimetron prestiĝo akuŝhospitalo tri grimpantoj mortis proksime al la pinto kaj jen la futbalrezultoj.</p>
			<p>La astronomo malŝaltis kaj rerigardis la ĵurnalon. Li bezonis dormon, eĉ urĝe. Amaso da bildoj kaj konceptoj ĥaosis en la kapo, pri mondo kiu havis ion por feliĉiĝi, sed ŝajne ne havis la saĝon por permesi al si feliĉon. Kio okazos finfine? li diris. Ni jam revas pri kolonioj sur aliaj planedoj kaj ne kapablas toleri unu la alian sur tiu ĉi bela, nature vivsubtenema planedo. Marso tradicie simbolas militon; tamen sur Marso troviĝas, eble ia verdaĵo, sed ne homoj.</p>
			<p>“Mi enlitiĝos”, la astronomo diris. “Eble la mondo aspektos pli feliĉa kiam mia cerbo estos freŝe vigla.”</p>
			<p>Sed, por konvinki sin pri solideco, li tenis la malgrandan aeroliton sur la manplato, kaj sentis kiel la centro de la tero allogas la premantan pezaĵon. La pezo estis iel konsola, kuraĝiga.</p>
			<p>“Ĉiu rifuĝinto povus rakonti historion”, la astronomo pensis, kaj remetis la aeroliton sur la leterojn; sed li daŭre fiksrigardis ĝin, pro la inerteco de granda laco; la malgranda objekto komencis iom hipnotigi lin; ĝiaj konturoj iĝis maldifinitaj antaŭ la dolorantaj okuloj. Lia kapo ekzumis kaj la aerolito iĝis tremanta planedo, mondo en alia sistemo.</p>
			<p>Al la astronomo ĝi rakontis historion.</p>
			<img class="flot-d l-50 s-50" style="margin: 0 1em 1em 1em;" src="eo/ppp/bildoj/spaco.jpg" /><p>“Tie, kie nun nigras absolute vaka spaco, kie nek gasoj kirliĝas nek roko pendas sur gravitoreto, iam estis planedo, planedo kun tero kaj maro, poste kun vivantaj estaĵoj en la maro, poste kun vivantaj estaĵoj en la maro kaj sur la tero. Sur tiu planedo, kiun vi neniam vidis per teleskopo, troviĝis montoj kiuj lumis purpurete sub la radioj de la stelo kiu estis la granda centro de tiu sistemo. Glaciriveroj malrapide fluis. Vivantaj estaĵoj spiris atmosferon malpli densan ol tiu de la tero, kun multe malpli da oksigeno. La gravitotiro estis malforta sur la malgranda planedo, kaj ĉiuj vivantaj estaĵoj havis piedetojn kun suĉteniloj. La plantoj marŝis serĉante la plej varmajn lokojn. La lumo estis tre forta pro la glacio kaj la neĝo. Ĉiuj vivantaj estaĵoj kiuj havis okulojn havis tre dikajn palpebrojn duoblajn; la travideblaj palpebroj kovris la okulojn ĉiam escepte dum la noktoj, kiam nur la astroj, inkluzive la Teron, estis videblaj, kaj la aliaj palpebroj ripozigis la okulojn.</p>
			<p>La plej inteligentaj bestoj sur tiu planedo estis la <i>rjuiaoj</i>; ili estis kovritaj per mallonga, densega ora felo, kiu brilis sub la forta respegulita lumo. La pensa aparato estis en la plej malsupra parto de la korpo, pro sekureco kontraŭ neĝŝtormoj kaj hajlo.</p>
			<p>Ĉio malsimilas al la plantaro kaj bestaro de la Tero; eble kosmaj memoroj malofte ĵetas detaleton de tiu planedo en vian menson dum sonĝo; sed teraj vortoj ne ekzistas por klarigi al vi la plimulton de tiuj detaloj. Lumo, koloroj, sonoj, substancoj, samis; sed ĉiuj kunmetaĵoj malsamis. Vi scias ke, laŭ la atestoj de la spektroskopo, la samaj elementoj, aŭ pluraj el ili, troviĝas ĉie… Sed alie, ĉio malsamis al la Tero.</p>
			<p>Ĉu feliĉo povis ekzisti sur tiu planedo? Ĉar la spektroskopo ne povas trovi feliĉon. Jes; feliĉo povis ekzisti sur tiu planedo. La <i>rjuiaoj</i> kapablis elekti unu la alian kiel kunulojn, admiri unu la alian kaj zorgi unu pri alia. Laŭ la difinaj vortoj de la Tero, Amo ekzistis inter ili; kaj familioj; kaj grupoj; kaj kiam ili pli evoluis, la grupoj grandiĝis. <i>Rjuiaoj</i> luktis kune, kontraŭ malvarmo, kontraŭ ŝtormoj; ili dresis plantojn por ke ili restu en bonaj lokoj; ili ebenigis montojn kaj trovis mineralojn en la grundo. Ili beligis sin per ametistoj kaj smeraldoj. Ili komencis regi la aliajn bestojn; kaj la aliaj bestoj iĝis pli grandaj, pli belaj, pli fekundaj.</p>
			<p>Iu vidis similecojn inter kvarco kaj glacio kaj la okulaj lensoj de amata <i>rjuiaino</i>; kaj alia provis rekrei la trajtojn de sia morta patrino sur roko. La arto naskiĝis.</p>
			<p>Jarmiloj kaj jarmiloj. Semi, konstrui, porti, komuniki, ariĝi.</p>
			<p>Ĉu do malfeliĉo ekzistis sur tiu planedo, inter belaj, lertaj, fortaj bestoj kiuj tiom kapablis feliĉi kaj venki la naturon?</p>
			<p>Jes, ankaŭ malfeliĉo povis ekzisti. La plimulto de la <i>rjuiaoj</i> havis bonajn intencojn kaj nur eraris kelkfoje pro malforteco aŭ miskompreno; sed ĉiam kelkaj perceptis ke la plej rapida vojo al ĝuado estis forpreni la laborfruktojn de aliaj. Envio ekzistis inter ili; malpacienco kaj, tial, malamo.</p>
			<p>Ili povis kvereli; ili provis distiri unu la alian per suĉiloj; poste ili lernis kiel ĵeti rokpecojn. Akraj glacipecoj… kaj poste ili trovis feron.</p>
			<p>Ili ekregis fajron kaj kreis la domon, la hejmon. Ili poste eksciis ke fajro povas mortigi.</p>
			<p>Jarmiloj kaj jarmiloj. Ariĝi pli strikte, venki distancojn, krei multajn, belajn, komplikajn ilojn. Jarmiloj kaj jarmiloj.</p>
			<p>Truante la teron por elpreni trezorojn, ili trovis multajn novajn substancojn, ili ne demetis envion, malpaciencon kaj malamon.</p>
			<p>Iam mi estis peco de stelo; kaj nur la silentaj steloj, senvivaj estaĵoj kaj sen scio, estis la alrigardantoj senkonsciaj  kiam la bela, rida, vivsubtenema planedo malaperis.</p>
			<p>La <i>rjuiaoj</i> havis ĉion: amon, amikecon, hejmojn, ilojn, artojn, metiojn, lumon, atmosferon, akvon, plantojn, bestojn. Milmiloj da aliaj steloj havis nur gasojn aŭ rokojn. Sed ili brilis kaj beligis la noktojn, la diversajn noktojn de la diversaj ĉefsteloj.</p>
			<p>La <i>rjuiaoj</i> havis senfinan variecon, kaj trovis novajn, strangajn substancojn; kaj komprenis kiel ili povos esprimi malamon plenplene, dum ili ankoraŭ, mallerte kaj vespirante pro la maladekvateco de esprimiloj, fuŝesprimis amon. La vasta plimulto de la <i>rjuiaoj</i> volis daŭre provi, volis vivi, eĉ maladekvate, sed vivi kaj vivigi kaj iel krei estontecon; sed kelkaj <i>rjuiaoj</i> volis havi ĉion tuj kaj iĝi tre gravaj.</p>
			
<p>Tial, ili eksplodigis la planedon.</p>
			<p>La katastrofo estis nur malgranda en la kosmo; subite tre bela lumego; pluvego da aerolitoj; nigra vakueco. Nenio ajn; ĉar astroj ofte mortas.</p>
			<p>Sed tiu planedo ne mortis nature; tiu planedo estis murdita. Amo, amikeco, hejmoj, iloj, artoj, metioj, tuj malaperis, ekmalestis. Milmiloj da belegaj komplikaĵoj kaj variaĵoj ne plu estis. Sur tiu planedo ne plu ekzistis eĉ lumo, eĉ maro, eĉ atmosfero por rekomenci. Aerolitoj forvaporiĝis en belaj lumostriaj flugoj; poste, silento, nigro, vakueco, absoluta nenio.”</p>
			<p>“Fino”, diris la astronomo.</p>
			<p>“Ne!” diris la aerolito, kun fera firmeco. “Ne fino; nur perdego, malŝparego, murdo de planedo vivsubtenema, eksperimento finita multe tro frue.”</p>
			<p>“Lumjarojn malproksime de tiu nigra, silenta vakueco, troviĝis la suno. Ĉirkaŭ la suno diversaj planedoj orbitis. Kaj, dum la lastaj, plej grandaj pecoj de la hejmo de la <i>rjuiaoj</i> ankoraŭ forvaporiĝis en flugo, dum tiu efemera beleco orpluvis en la vastega volbo, mistera nova energio ekvibris super la akvoj de la Tero.</p>
			<p>Kaj kelkaj etetaj, unuopaj ĉeloj ekekzistis en la akvoj sur la Tero.”</p>
			<p>La astronomo duone rekonsciiĝis.</p>
			<p>“Rekomenci…” li flustris, kun tragika senpersona espero. Kun fera firmo, la aerolito respondis: “Ĉiam rekomenci… aŭ daŭri kaj iri pli alten…”</p>
			<p>“Aŭ daŭri… aŭ daŭri… aŭ daŭri…” ritme pulsis la sango, brue en la lacegaj oreloj, kiam la kapo de la endormiĝinta astronomo falis sur la skribotablon.</p>
			<p>“Sur alia stelo, se ne ĉi tie…” diris merlo en la ĝardeno. “Aŭ daŭri… Aŭ daŭri…” ritmis la homa sango.</p>
				
			
			<p><b>Marjorie Boulton</b> (el <i>Belarto</i>)</p>
		</div>'
  WHERE l.kurso = 'PP' AND l.numero = 17 AND le.ordo = 1;

-- leçon 17, section 2
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<div class="vortlisto row">
		<div class="col s12 m6">
			<p><span class="eo">absoluta</span>: senkondiĉa, senescepta, senmanka.</p>
			<p><span class="eo">aerolito</span>: ŝtono falinta sur teron el la spaco.</p>
			<p><span class="eo">akuŝi</span>: elpuŝi el si idon.</p>
			<p><span class="eo">ambasadoro</span>: oficiala reprezentanto de regno eksterlande.</p>
			<p><span class="eo">ametisto</span>: violkolora gemo.</p>
			<p><span class="eo">amoniako</span>: gaso, NH3.</p>
			<p><span class="eo">armeo</span>: granda militistaro.</p>
			<p><span class="eo">arto</span>: homa kreado, plejofte reprezentanta iel belon.</p>
			<p><span class="eo">astro</span>: ĉiela korpo.</p>
			<p><span class="eo">aŭtentika</span>: nepre vera, originala; oficiale certigita.</p>
			<p><span class="eo">aviadi</span>: aerveturi.</p>
			<p><span class="eo">bebo</span>: infaneto, suĉinfano.</p>
			<p><span class="eo">bolŝeviko</span>: adepto de komunismo.</p>
			<p><span class="eo">brodi</span>: ornami teksaĵon per fadenaj desegnaĵoj.</p>
			<p><span class="eo">buklo</span>: harvolvaĵo.</p>
			<p><span class="eo">cenzuri</span>: oficiale kontroli presaĵojn k.a.</p>
			<p><span class="eo">ĉelo</span>: malgranda konsistaĵero.</p>
			<p><span class="eo">debato</span>: diskuto laŭ orda maniero.</p>
			<p><span class="eo">diagramo</span>: klariga desegno.</p>
			<p><span class="eo">diplomato</span>: politikisto, kiu rilatas kun alilandaj registaroj.</p>
			<p><span class="eo">drako</span>: fabela besto havanta flugilojn kaj ungegojn.</p>
			<p><span class="eo">dresi</span>: celkonforme eduki (plej ofte bestojn).</p>
			<p><span class="eo">ebena</span>: samnivele plata.</p>
			<p><span class="eo">efemera</span>: nedaŭra, rapide pasanta.</p>
			<p><span class="eo">ekspozicio</span>: publika elmontriĝado.</p>
			<p><span class="eo">epidemio</span>: disvastigita malsano.</p>
			<p><span class="eo">epizodo</span>: unu flanka agado en rakonto aŭ historio.</p>
			<p><span class="eo">estetiko</span>: beltaksado.</p>
			<p><span class="eo">etaĝo</span>: samnivela parto de domo.</p>
			<p><span class="eo">farti</span>: stati sane.</p>
			<p><span class="eo">fekunda</span>: fruktodona, naskipova.</p>
			<p><span class="eo">felo</span>: besthaŭto.</p>
			<p><span class="eo">fokuso</span>: kunigpunkto de tralensaj lumradioj.</p>
			<p><span class="eo">frazo</span>: vortkunaĵo; parolo belsona sed malmultsenca.</p>
			<p><span class="eo">futbalo</span>: ludo, en kiu oni batas pilkon per la piedoj.</p>
			<p><span class="eo">fungo</span>: speco de kreskaĵo foje manĝebla, foje venena.</p>
			<p><span class="eo">generalo</span>: armeestro.</p>
			<p><span class="eo">grafiko</span>: arto desegne reprezenti objektojn.</p>
			<p><span class="eo">grundo</span>: kulturebla tero.</p>
			<p><span class="eo">hajlo</span>: glaciiĝinta pluvo.</p>
			<p><span class="eo">hidrogeno</span>: senkolora malpeza gaso (H).</p>
			<p><span class="eo">hospitalo</span>: kuracejo.</p>
			<p><span class="eo">jupo</span>: virina vesto por la malsupra korpoparto.</p>
			<p><span class="eo">kanono</span>: pafilego.</p>
			<p><span class="eo">kapitalo</span>: profitodona riĉaĵo.</p>
			<p><span class="eo">karikaturo</span>: troigita kvazaŭportreto.</p>
			<p><span class="eo">kirli</span>: rondirigi fluaĵon.</p>
			<p><span class="eo">kobalto</span>: metalo (Co), kies kombinaĵoj blukoloras.</p>
			<p><span class="eo">kolonio</span>: grupo da homoj loĝantaj konstante en lando fremda.</p>
			<p><span class="eo">komenti</span>: klarigi la signifon de io.</p>
			<p><span class="eo">kontrakti</span>: interŝanĝi skribitajn promesojn pri io komunue plenumota.</p>
			<p><span class="eo">kvarco</span>: tre malmola ŝtono</p>
			<p><span class="eo">laboratorio</span>: scienca laborejo.</p>
			<p><span class="eo">lafo</span>: materio, kiu elfluas el vulkanoj.</p>
			<p><span class="eo">lako</span>: briliga ŝmiraĵo.</p>
			<p><span class="eo">lerta</span>: tre kapabla.</p>
			<p><span class="eo">logi</span>: tente altiri.</p>
		</div>
		<div class="col s12 m6">			
			<p><span class="eo">majusklo</span>: ĉeflitero, granda preslitero.</p>
			<p><span class="eo">mamo</span>: elstara brustparto, kiu ĉe inoj donas lakton.</p>
			<p><span class="eo">mapo</span>: geografia karto.</p>
			<p><span class="eo">marso</span>: la kvara planedo de nia suno; militodio.</p>
			<p><span class="eo">maso</span>: kvanto da materio konsistiganta iun korpon.</p>
			<p><span class="eo">merlo</span>: speco de birdo.</p>
			<p><span class="eo">metio</span>: manlabora profesio.</p>
			<p><span class="eo">mineralo</span>: substanco, kiu estas nek besta nek vegetaĵa.</p>
			<p><span class="eo">ministerio</span>: ministrejo.</p>
			<p><span class="eo">modo</span>: aktuala kutimo rilate vestojn ks.</p>
			<p><span class="eo">murdi</span>: krime mortigi.</p>
			<p><span class="eo">nitrogeno</span>: senkolora gaso (N).</p>
			<p><span class="eo">nodo</span>: ŝnurkunligaĵo.</p>
			<p><span class="eo">oksigeno</span>: senkolora gaso (O), necesa por spirado.</p>
			<p><span class="eo">opresi</span>: tirane premegi.</p>
			<p><span class="eo">orbito</span>: vojo de unu astro ĉirkaŭ alian.</p>
			<p><span class="eo">ordeno</span>: honora signo.</p>
			<p><span class="eo">pacifiko</span>: la oceano inter ameriko kaj azio.</p>
			<p><span class="eo">papo</span>: estro de la katolika eklezio.</p>
			<p><span class="eo">perfidi</span>: mallojale trompi.</p>
			<p><span class="eo">perturbo</span>: malordo en korpo, socio, ks.</p>
			<p><span class="eo">planti</span>: meti vegetaĵon en la teron por ke ĝi kresku.</p>
			<p><span class="eo">plata</span>: senreliefa.</p>
			<p><span class="eo">poliomjelito</span>: speco de epidemia malsano.</p>
			<p><span class="eo">probabla</span>: verŝajna.</p>
			<p><span class="eo">ribeli</span>: rifuzi obeon.</p>
			<p><span class="eo">ritmo</span>: perioda reveno de akcentoj.</p>
			<p><span class="eo">sago</span>: akrapinta pafaĵo.</p>
			<p><span class="eo">satelito</span>: korpo, kiu ĉirkaŭiras planedon.</p>
			<p><span class="eo">sekura</span>: estanta en sendanĝera loko.</p>
			<p><span class="eo">skalpo</span>: haŭto sur la kaposupro.</p>
			<p><span class="eo">slogano</span>: konciza propaganda frazo.</p>
			<p><span class="eo">smeraldo</span>: verdkolora gemo.</p>
			<p><span class="eo">spektroskopo</span>: ilo, per kiu oni studas spektron.</p>
			<p><span class="eo">spiono</span>: homo, kiu sekrete observas.</p>
			<p><span class="eo">statistiko</span>: cifertabeloj pri iu temo.</p>
			<p><span class="eo">sterila</span>: nekapabla naski.</p>
			<p><span class="eo">stilo</span>: karakteriza maniero esprimi siajn pensojn aŭ fari ion.</p>
			<p><span class="eo">striko</span>: ĉeso de laboro por subteni iun postulon.</p>
			<p><span class="eo">strikta</span>: severe preciza.</p>
			<p><span class="eo">stroncio</span>: flava metalo.</p>
			<p><span class="eo">sturmi</span>: kurataki.</p>
			<p><span class="eo">ŝalti</span>: funkciigi elektron.</p>
			<p><span class="eo">ŝika</span>: laŭmode bongusta.</p>
			<p><span class="eo">ŝtato</span>: regno.</p>
			<p><span class="eo">ŝuti</span>: verŝi substancon nefluidan.</p>
			<p><span class="eo">tanko</span>: milita aŭtomobilego.</p>
			<p><span class="eo">temperaturo</span>: grado de varmo.</p>
			<p><span class="eo">teritorio</span>: difinita lando sub iu aŭtoritato.</p>
			<p><span class="eo">ungo</span>: malmola kreskaĵo sur fingropinto.</p>
			<p><span class="eo">uranio</span>: kemia elemento (U).</p>
			<p><span class="eo">vakuo</span>: malplena spaco.</p>
			<p><span class="eo">varbi</span>: instigi al aligo.</p>
			<p><span class="eo">varii</span>: prezenti sinsekvajn diversajn ŝanĝiĝojn.</p>
			<p><span class="eo">vermo</span>: malgranda senpieda besto.</p>
			<p><span class="eo">volbo</span>: arkforma plafono.</p>
			<p><span class="eo">vundi</span>: difekti korpon.</p>
		</div>
	</div>'
  WHERE l.kurso = 'PP' AND l.numero = 17 AND le.ordo = 2;

-- leçon 17, section 3
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##EKZERCO:197:eo##'
  WHERE l.kurso = 'PP' AND l.numero = 17 AND le.ordo = 3;

-- leçon 17, section 4
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##EKZERCO:198:eo####EKZERCO:199:eo####EKZERCO:200:eo##'
  WHERE l.kurso = 'PP' AND l.numero = 17 AND le.ordo = 4;

-- leçon 17, section 5
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##EKZERCO:201:eo####EKZERCO:202:eo##'
  WHERE l.kurso = 'PP' AND l.numero = 17 AND le.ordo = 5;

-- leçon 17, section 6
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##RESUMO##'
  WHERE l.kurso = 'PP' AND l.numero = 17 AND le.ordo = 6;

-- leçon 18, section 1
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<div class="rakonto">
			<h3>PLEJ BONE RIDAS KIU LASTE RIDAS</h3>
 
			<p>Dum la manĝohoro la bazaruloj kutime kolektiĝis en la foira restoracio kaj senĉese babiladis. La temo estis preskaŭ ekskluzive pri ilia negoco. La negoco kaj foiroj kaj ĉio rilata estis la ĉiama temo. Oni pensus, ke for de la laboro, kiu konsistas plejparte el uzo de la voĉo, bazaruloj emus ripozi per silento, sed tute male. Ju pli ili parolas, des pli ili emas paroli, eĉ kiam ili estas raŭkaj.</p>
			<p>Ĉe la manĝotablo oni demandis al mi, ĉu mi konas Benzo’n. “Jes,” mi respondis. “Mi konas lin, sed nur supraĵe.”</p>
			<p>“Ho,” respondis la bazarulo, “li estis en vera kaĉo antaŭ nelonge. Neniam mi vidis viron pli turmentatan ol li. Tiu kompatinda bovo preskaŭ freneziĝis! Strange, ke vi ne aŭdis pri li.”</p>
			<p>“Sed kio okazis al li?”</p>
			<p>“Kio okazis? Ĉiuj ridis pri li. Jen kio okazis.”</p>
			<p>La bazarulo ĉirkaŭrigardis esprimplene, tusetis kaj komencis rakonti. (Mi poste konfirmiĝis, ke la rakonto, kiun la bazarulo rakontis, estas ja baze vera; sed ĝis kia grado li ornamis ĝin per elpensitaj detaloj, mi ne scias. Mi citas lian rakonton komplete, kiel li diris ĝin, kun la troigoj.)</p>
			<p>– Vi ĉiuj konas tiun pseŭdan lertulon, ĉu ne? Do la kaĉo startis tre simple. Kiam Benzo sklavumis ĉe cirka budo, li pruntis iom da pundoj al ulo, kiu laboris en la sama cirko. Tiu cirkisto promesis tuj redoni la pruntaĵon; sed tempo pasis, kaj la cirkisto ĉiam elpensis novajn turnojn por eviti la repagon. Tiu ludo daŭris, kaj Benzo pli kaj pli malpacienciĝis. La afero tedis lin, ne sole ĉar li ne emis roli kiel filantropo, sed ankaŭ ĉar aliaj vidos, kiel facile trompebla li estas. Komprenu, ke nenio pli frakasas la memestimon de trompisto, ol esti mem trompata antaŭ atestantoj. Fine Benzo komencis forte minaci la ŝuldanton. La ŝuldanto multe protestis kaj fine konvinkis Benzon, ke li ja volas repagi, sed ke li vere ne havas la gelt’on. Sed Benzo persistis kaj diris ke, se li ne povas repagi per mono, do li nepre devas repagi per io egalvalora. Post longa disputo la cirkisto diris al Benzo: “La sola oferto, kiun mi povas fari, estas repagi vin per leonido. Ĝi valoras multe pli ol la ŝuldata sumaĉo, sed por enkapigi al vi, ke mi ja estas honesta, kaj por ŝtopi vian kvakantan faŭkon, mi faras tiun oferton.”</p>
			<p>“Je la turmentita Kristo”, eksplodis Benzo. “Kion mi faru per leonido? Kia brila ideo! – vera geniaĵo! Kial ne oferti elefanton? Jen ideo: ofertu elefanton, faskon da elefantoj, mi ja amegas ilin, elefantojn de ĉiuj formatoj kaj koloroj, milojn da ili, – efektive mi aĉetis dudekon da ili ĉi-matene antaŭ la matenmanĝo!” peze sarkasmis Benzo.</p>
			<p>“Do, sarkasmu, sarkasmu, idioto! Ĉu vi demandas kion fari per valora leonido? Vi, kies metio estas vendi! For de mia vido, mi perdas paciencon pri vi. Jen vi aperas en ĝusta lumo! Vi, kiu fanfaronas ĝisnaŭze, ke vi povas vendi kion ajn! Kaj ni aŭskultis, dum vi pufigis vin per memlaŭdoj; sed nun, kiam mi ofertas al vi trezoran varon, vi ekŝrumpas kiel pikita baloneto! La leonido valoras pli ol duoble la ŝuldon, eĉ kretena vendisto scias tion. Ĉu tiu fakto ankoraŭ ne enpenetris la spongon en via kapo? Kion vi pensas? Ĉu vi pensas, ke oni povas aĉeti leonidojn tiel facile kiel kuniklojn? Leonoj ne petolas sur la kampoj ĉi tie, sciu. Oni ne kaptas ilin per papilia reto. Se vi estas tro stulta por akcepti la leonidon, nu, mi estas kontenta, ĉar mi certe ne volas fordoni ĝin. Sed ne plu ĝenu min. La afero finiĝu tiel. Neniu povos diri, ke mi ne faris malavaregan oferton.”</p>
			<p>Tiel daŭris la reciprokaj insultoj, kaj post multe da argumentoj Benzo akceptis la leonidon. Tuj li klopodis vendi ĝin, sed ne sukcesis. Diablo! tion li ne atendis. La leonido embarasis lin, ĉar estis tre maloportune kuntreni ĝin ĉie. Li forlasis la cirkolaboron kaj reiris al foiroj: sed ĝenaj malfacilaĵoj komenciĝis, kiam li provis enloĝiĝi. Li konstatis, ke dommastrinoj tute ne ŝatas havi leonidon en la ĉambroj.</p>
			<p>La rakontanto rigardis al ni ĉiuj kaj iom tro serioze ripetis: “Jes, amikoj. Kredu-ne-kredu, sed dommastrinoj – cetere tute normalaj homoj – havas tiun strangan kapricon, tiun nekompreneblan mankon, ke ili ne ŝatas havi leonidojn en la ĉambroj.”</p>
			<p>La rakontanto ekbruligis cigaredon kaj daŭrigis:</p>
			<p>– Post multaj ĝenaj provoj Benzo komencis ruzi por akceptiĝi en loĝejon. Li lasis la leonidon provizore ĉe iu, luprenis ĉambron, kaj post la mallumiĝo enportis la leonidon. Ĉiutage li devis ŝteliri, por aĉeti viandon por la besto, kaj reveni mistere kun volvaĵo sub la brako. Sed tiu damnita leonido manĝis senfine. Benzo pli kaj pli zorgumis. La kosto de la viando iĝis peza ŝarĝo. Kiam la dommastrino volis enveni por ordigi la ĉambron, ŝi trovis ke la pordo estas ŝlosita kontraŭ ŝi kaj ŝi komencis esti suspektema. La enporto de la misteraj pakaĵoj pliigis ŝian suspekton. Ŝi imagis ke io terure stranga okazas en la ĉambro, kaj kvereloj rezultiĝis, dum kiuj si faris amarajn aludojn al magiaj ritoj kaj nigra sorĉo, sed Benzo ne cedis eniron al ŝi. Fine li ricevis de ŝi forlas-avizon kaj li devis atendi oportunan momenton por ŝtele eliri kun sia leonido.</p>
			<p>Denove li serĉis ĉambron kaj denove li devis ruzi. En la nova loĝejo la farso rekomenciĝis. La leonido ŝajne volis ĉiam gluti, kaj se Benzo ne prethavis sufiĉe da viando, ĝi komencis muĝi; do, por senbruigi ĝin, li estis devigata plenŝtopi ĝin per manĝaĵo. Kaj la laboro, kaj la prizorgo de la besto, kaj la ĝeno, kaj la senmoneco: ĉio kune reduktis Benzon al kompatinda stato. La leonido pli kaj pli grasiĝis, dum Benzo pli kaj pli maldikiĝis. Dumtempe la besto kreskis kaj komencis agi iom minace, kaj samritme kun la kresko de la besto kreskis la premzorgo de Benzo. Unu vesperon li revenis en la ĉambron kaj trovis la leonon sur la lito; sed kiam li provis malsuprenigi ĝin ĝi murmuris terurige, do Benzo devis dormi sur la planko. Ni kunlaborantoj de Benzo multe ŝercopikis lin pri la okazaĵo, kaj li furioziĝis. Ĉiuj ridis pri li kaj diris, ke li estas pli sovaĝa ol la besto. La kompatinda Benzo fariĝis malbonhumora, malgrasa kaj diboĉaspekta pro nesufiĉa dormo, dum oni povis imagi glatan, grasrondan leonon trankvile ripozantan sur la lito kun rideto, kiu streĉiĝis de orelo al orelo. Benzo sovaĝe bojis kontraŭ niaj ŝercopikoj, kaj mankis nur tempo, por ke la homo bestiĝu kaj la besto homiĝu. Kompato komencis tuŝi nin, ĉar li ja estis en terura stato; sed niaj bonintencaj konsiloj nur pli kolerigis lin, ĉar li taksis ilin kiel blagojn. Li nun perdis ĉian iniciativon kaj ne povis pensi kion fari.</p>
			<p>Sed unu tagon venis la krizo. Dum lia foresto el la ĉambro la dommastrino havigis al si kroman ŝlosilon kaj malŝlosis lian ĉambropordon. Ŝi tre suspekteme ŝtelrigardis en lian ĉambron, atendante vidi mi-nescias-kion. Kio ajn estis ŝia atendo, ŝi certe ne estis preta ricevi tian ŝokon. Ŝi ŝovis la kapon en la ĉambron, kaj ŝiaj okuloj gluiĝis sur la besto. La leono subite antaŭenmoviĝis, kaj la dommastrino tujtuj fermtiris la pordon kaj reŝlosis ĝin. Ŝi staris frostigita dum momento kaj, post konsciiĝo, eligis kriĉon kiel lokomotiva fajfilo kaj forkuregis laŭ la koridoro ĝis duonvoje, kie ŝi falis en plena sveno. Alarmite, homoj kuris el la ĉambroj kaj komencis revivigi la dommastrinon. Ŝi rekonsciiĝis, malfermis la okulojn kaj ĉe la rememoro larĝigis la okulojn kaj komencis histerie kriegi:</p>
			<p>“Leonoj, teruraj leonoj en la ĉambro! Ho Dio, savu min! Ho Dio, ili saltis al mi, grandaj, sovaĝaj leonoj! Tiu diablo, tiu vampiro kaj lia sorĉarto, tiu monstro el infero!”</p>
			<p>“Sed kio estas, kio estas?” voĉoj demandis al ŝi.</p>
			<p>“En tiu ĉambro, tie, leono atakis min. Ĝi estas leona monstro. Ne eniru, pro la sanktuloj ne eniru: ĝi estas terura monstro, ĝi preskaŭ disŝiris min per la ungegoj… pli ol unu futon longaj! Ĝi saltegis al mi, ĝi havas kornojn, – je Dio, ne malfermu la pordon – estas ĉiuspecaj monstroj tie!”</p>
			<p>“Trankviliĝu, ne tremu, ni helpos!” diris la voĉoj; sed la dommastrino nur kriadis el tuta gorĝo panikan galimation da kontraŭdiroj. Iu vokis policanojn.</p>
			<p>“Nu”, diris unu el la policanoj, “regu vin kaj diru al ni, pri kio temas.”</p>
			<p>“En tiu ĉambro, numero ok, estas teruraj bestformaj monstroj. Apenaŭ mi eskapis viva?”</p>
			<p>“Nu, nu, ne ekscitiĝu, ni protektos vin,” diris la policano, per tono, kiun oni uzas por pacigi frenezulon. “Ĉu la bestoj havis gajajn kolorojn?” Kompreneble la policanoj pensis, ke ŝi estas aŭ freneza aŭ ebria. “Estu nur trankvila, ni forigos la bestojn, ne ĝenu vin, lasu al ni!”</p>
			<p>“Jes, jes, forigu ilin tuj – estu singarda, eniru armite – voku pastron, ke li ekzorcu la diablojn!”</p>
			<p>“Donu al ni la ŝlosilon!” diris la policano tute trankvile, kaj duonridete li kaj lia kolego alproksimiĝis al la pordo, sed ĝuste tiam aŭdiĝis muĝo el la ĉambro.</p>
			<p>“Jen, jen”, kriis la dommastrino. “Ĉu mi ne diris?”</p>
			<p>La grupeto da homoj tuj forkuris for de la pordo, kaj la du policanoj restis senmove. Post hezito unu diris al la alia: “Ni ne rajtas eniri privatan ĉambron sen serĉmandato.”</p>
			<p>Esprimo de malŝarĝo heligis la vizaĝojn de la policanoj de tiu elturno. Ili sin turnis al la dommastrino:</p>
			<p>“Kie troviĝas la luanto de la ĉambro?”</p>
			<p>“En la foiro, ĉe stando 13. Lia nomo estas Samuel Rogers.” La du policanoj iris al la stando kaj flustre parolis al Benzo. Li kviete foriris kun ili.</p>
			<p>Pasis tri tagoj, dum kiuj nin jukis la scivolo. Ĵaŭde matene li revenis, pasante tra la aleoj kun iom de la malnova aplombo.</p>
			<p>Ni kuris al li. “Kio okazis?” ni demandis.</p>
			<p>“Aranĝite, knaboj!” diris Benzo. “Nu kio? Iom da tondro kaj hajlo en la policejo, sed tio tusis min kiel akvo anseron. Nun ja ili transprenis la zorgon, kaj ĝi donis al ili urtikon en la kalsonon! Kion fari? Ili devis eltiri la leonon kun helpo de cirkaj dresistoj, kaj ili loĝigis ĝin ĉe la cirko. Tamen la besto ja restis mia! Tion ili ne povis ŝanĝi. Ili akuzis min pri rompo de l’ paco; mi kontraŭatakis, ke ili senrajte forprenis mian propraĵon. Diable, do mutigis ilin! Ili estis inter martelo kaj amboso – ne sciis kion fari. Mi vidis ilin danceti kiel kato sur fornoplato. Fine mi konsentis intertrakti, kaj ili vendis la leonidon al la zo’o – kredu, mi bone remburis la prezon! Jes, knaboj, lasu min fari: mi scias min aranĝi. En mia cerbo ne kreskas herbo. Kiu min tuŝas, min sentas!”</p>
			<p>Tion rakontis Benzo; sed pri tiu parto de la rakonto mi ne garantias. Mi mem rakontas nur la puran veron, kiel bonpia bazarulo; sed vi ĉiuj scias, ke Benzo mensogas kiel funebra parolo!</p>
				
			<p><b>Cezaro Rossetti</b> (el <i>Kredu Min, Sinjorino!</i>)</p>
		</div>'
  WHERE l.kurso = 'PP' AND l.numero = 18 AND le.ordo = 1;

-- leçon 18, section 2
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<div class="vortlisto row">
		<div class="col s12 m6">
			<p><span class="eo">aleo</span>: (ĉi tie) mallarĝa trapasejo.</p>
			<p><span class="eo">aludi</span>: nerekte paroli pri io.</p>
			<p><span class="eo">amboso</span>: feraĵo, sur kiu oni batas metalon.</p>
			<p><span class="eo">avizo</span>: anonco, informo.</p>
			<p><span class="eo">balono</span>: kaŭĉuka ludilo, kiun oni plenigas per aero aŭ malpeza gaso.</p>
			<p><span class="eo">bazaro</span>: vendejo.</p>
			<p><span class="eo">blago</span>: ŝerca mensogo.</p>
			<p><span class="eo">boji</span>: hunde bleki.</p>
			<p><span class="eo">budo</span>: ligna butiketo.</p>
			<p><span class="eo">cirko</span>: rondforma spektaklejo.</p>
			<p><span class="eo">disputi</span>: malpace diskuti.</p>
			<p><span class="eo">ekskluziva</span>: esceptanta ĉion alian.</p>
			<p><span class="eo">ekzorci</span>: preĝe forpeli diablon.</p>
			<p><span class="eo">eskapi</span>: sukcese forkuri aŭ eviti.</p>
			<p><span class="eo">farso</span>: neserioza teatraĵeto.</p>
			<p><span class="eo">fasko</span>: kunligita aro.</p>
			<p><span class="eo">faŭko</span>: besta buŝego.</p>
			<p><span class="eo">filantropo</span>: bonfaremulo.</p>
			<p><span class="eo">formato</span>: dimensio de libro (ks).</p>
			<p><span class="eo">funebro</span>: malĝoja sento pro ies morto.</p>
			<p><span class="eo">galimatio</span>: sensencaĵo, konfuzaĵo.</p>
			<p><span class="eo">gorĝo</span>: interno de la kolo.</p>
			<p><span class="eo">histerio</span>: konvulsia nerva malsano.</p>
			<p><span class="eo">idioto</span>: homo malinteligenta.</p>
			<p><span class="eo">iniciativo</span>: entreprenemo.</p>
			<p><span class="eo">juki</span>: kaŭzi malagrablan senton en la haŭto.</p>
			<p><span class="eo">kalsono</span>: subpantaloneto.</p>
			<p><span class="eo">korno</span>: malmola kapelstaraĵo.</p>
			<p><span class="eo">kreteno</span>: malspritegulo.</p>
			<p><span class="eo">kriĉi</span>: alte kaj are krii.</p>
			<p><span class="eo">kuniklo</span>: malgranda rapidkura longorela besto.</p>
			<p><span class="eo">kvaki</span>: bleki kiel ekz. rano.</p>
			<p><span class="eo">leono</span>: granda kateca rabobesto.</p>
			<p><span class="eo">magio</span>: arto fari mirindaĵojn.</p>
		</div>
		<div class="col s12 m6">			
			<p><span class="eo">mandato</span>: rajtigilo.</p>
			<p><span class="eo">martelo</span>: peza batilo.</p>
			<p><span class="eo">murmuri</span>: aŭdigi malfortan obtuzan bruon.</p>
			<p><span class="eo">negoco</span>: monprofita afero.</p>
			<p><span class="eo">oferti</span>: komerce proponi.</p>
			<p><span class="eo">oportuna</span>: facile uzebla; bone adaptita por sia celo.</p>
			<p><span class="eo">paki</span>: pretigi ion por transportado.</p>
			<p><span class="eo">paniko</span>: subita ektimego.</p>
			<p><span class="eo">papilio</span>: bela grandflugila insekto.</p>
			<p><span class="eo">pia</span>: religie respektema.</p>
			<p><span class="eo">prunti</span>: disponigi aŭ akcepti ion poste redonotan.</p>
			<p><span class="eo">pseŭda</span>: falsa, nur ŝajna.</p>
			<p><span class="eo">pufa</span>: plenblovita; plenŝtopita.</p>
			<p><span class="eo">pundo</span>: brita monunuo.</p>
			<p><span class="eo">redukti</span>: dimensie malgrandiĝi.</p>
			<p><span class="eo">remburi</span>: pufigi, enŝtopante ion.</p>
			<p><span class="eo">rito</span>: religia ceremonio.</p>
			<p><span class="eo">sarkasmo</span>: akra moko.</p>
			<p><span class="eo">sklavo</span>: homo senkondiĉe je dispono de iu mastro.</p>
			<p><span class="eo">spongo</span>: malpeza truplena materio, uzata por viŝi aŭ sorbi.</p>
			<p><span class="eo">stando</span>: montrejo en ekspozicio.</p>
			<p><span class="eo">sveni</span>: perdi momente la konscion.</p>
			<p><span class="eo">ŝarĝi</span>: meti pezan objekton sur ion.</p>
			<p><span class="eo">ŝrumpi</span>: malŝveli, malkreski.</p>
			<p><span class="eo">ŝtopi</span>: tute pleniĝi.</p>
			<p><span class="eo">ŝuldi</span>: devi laŭleĝe pagi iun sumon.</p>
			<p><span class="eo">tusi</span>: spasme elpuŝi aeron el la pulmoj.</p>
			<p><span class="eo">urtiko</span>: vegetaĵo, kies folioj estas kovritaj de pikiletoj.</p>
			<p><span class="eo">vampiro</span>: sangosuĉa fabela monstro.</p>
			<p><span class="eo">varo</span>: komercaĵo.</p>
			<p><span class="eo">viando</span>: karno uzata por nutrado.</p>
			<p><span class="eo">volvi</span>: ĉirkaŭmeti ion flekseblan ĉirkaŭ alian objekton.</p>
			<p><span class="eo">(GELT)</span>: neesperanta vorto, slange uzita = mono.</p>
			<p><span class="eo">(ZO’O)</span>: slanga mallongigo = bestĝardeno.</p>		
		</div>
	</div>'
  WHERE l.kurso = 'PP' AND l.numero = 18 AND le.ordo = 2;

-- leçon 18, section 3
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##EKZERCO:203:eo####EKZERCO:204:eo##'
  WHERE l.kurso = 'PP' AND l.numero = 18 AND le.ordo = 3;

-- leçon 18, section 4
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##EKZERCO:205:eo####EKZERCO:206:eo####EKZERCO:207:eo####EKZERCO:208:eo##'
  WHERE l.kurso = 'PP' AND l.numero = 18 AND le.ordo = 4;

-- leçon 18, section 5
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##EKZERCO:209:eo##'
  WHERE l.kurso = 'PP' AND l.numero = 18 AND le.ordo = 5;

-- leçon 18, section 6
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##RESUMO##'
  WHERE l.kurso = 'PP' AND l.numero = 18 AND le.ordo = 6;

-- leçon 19, section 1
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<div class="rakonto">
			<h3>KAJTO</h3>
 
			<img class="flot-d l-50 s-50" style="margin: 0 1em 1em 1em;" src="eo/ppp/bildoj/pekino-vintro.jpg" /><p>Vintre en Pekino, kiam sur la tero ankoraŭ troviĝas restanta neĝo kaj grizaj, kalvaj arboskeletoj disetendas siajn branĉojn en la serena spaco, en malproksimo ŝvebas unu aŭ du kajtoj. Por mi tio estas io surpriza kaj malĝojiga.</p>
			<p>La kajtsezono en mia naskiĝloko estas la dua monato de printempo. Aŭdante zumadon de vent-rado vi vidos kaplevante grizan kraboforman aŭ palbluan skolopendroforman kajton. Troviĝas ankaŭ solecaj tegolformaj kajtoj, kiuj ne havas vent-radon, ŝvebas malalte kaj aspektas kompatinde deprimitaj. En tiu tempo, sur la tero, salikoj kaj fruaj persikujoj burĝonas jam kaj kreas printempan mildon, en akordo kun la infanaj ornamaĵoj sur la firmamento. Kie mi estas nun? Ĉirkaŭe staras ankoraŭ la vintra rigoro, sed la delonge forpasinta printempo de la delonge adiaŭita naskiĝloko jam naĝas en la aero.</p>
			<img class="flot-g l-25 s-30" style="margin: 0 1em 1em -1em;" src="eo/ppp/bildoj/knabo-gapanta.jpg" />
			<p>Laŭkutime mi ne ŝatis kajtludon, cetere, eĉ abomenis ĝin, ĉar mi konsideris ĝin ludo de sentaŭgaj knabaĉoj. Kontraŭe estis mia plej juna frato. Li estis tiam ĉirkaŭ dekjara, malsanema kaj osteca, tamen amis pasie la kajtludon. Li ne havis monon por aĉeti kajton kaj mi malpermesis al li tian ludon. Li nur rigardis la firmamenton stulte kun gapanta buŝeto. Iam tio daŭris tre longe. Jen li ekkriis kun surpriziĝo, ĉar en malproksimo iu kraboforma kajto subite falis surteren, jen li saltis pro ĝojo, ĉar la implikitaj fadenoj de du tegolformaj kajtoj solviĝis. Ĉiuj ĉi liaj agoj, laŭ mia opinio, estis ridindaĵoj malŝatindaj.</p>
			<p>Iun tagon, mi ekrimarkis, ke mi malofte vidis lin, ŝajne, dum la lastaj tagoj, sed mi memoris, ke mi jam vidis lin en la malantaŭa ĝardeno kolekti velkajn bambuojn. Mi ekkomprenis kaj rapidis al malofte vizitita ĉambreto, kie diversaj objektoj estis entenataj. Mi puŝmalfermis la pordon kaj trovis lin efektive inter la amaso de polvokovritaj objektoj. Li sidis sur tabureto antaŭ granda kvadrata tabulsidilo. Li ekstaris konsternite kaj tremis pale. Sur la granda sidilo apogis sin skeleto de papiliforma kajto, sur kiu la papero ankoraŭ ne estis algluita. Sur benko kuŝis paro da ventradoj, kiuj estis servontaj kiel okuloj. Li estis ĵus okupata alglui al ili ruĝajn paperpecojn, kaj la laboro estis finota. Mi kontentiĝis pro la malkovro de lia sekreto, ludo de sentaŭga knabaĉo, evitante mian atenton. Mi tuj etendis miajn manojn kaj rompis flugilon de la papilio, ĵetis la ventradojn sur la teron kaj detruis ilin per piedpremo. Li ne estis mia rivalo laŭ aĝo aŭ forto, kompreneble mi gajnis plenan venkon. Tiam mi elpaŝis fiere kaj lasis lin stari en malespero en la ĉambreto. Kiel li statis poste, mi ne sciis kaj eĉ ne atentis.</p>
			<p>Tamen fine trafis min mia puno, tre longe post nia disiĝo, kiam mi fariĝis jam mezaĝulo. Je mia malfeliĉo, mi legis hazarde fremdlingvan libron traktantan pri infanoj kaj eksciis, ke ludo estas la plej justa ago de infanoj, kaj ludilo – ilia anĝelo; tiam tiu sceno de spirita persekutado en mia fruaĝo, kiu jam glitis el mia memoro dum la lastaj dudek jaroj, subite disvolviĝis antaŭ miaj okuloj kaj mia koro kvazaŭ fariĝis plumbo kaj subiĝis tre tre peze.   </p>						
			<img class="flot-d l-40 s-50" style="margin: 0 -1em 1em 1em;" src="eo/ppp/bildoj/kajto.jpg" /><p>Ĝi ne falis nete kaj tial derompiĝis, sed ĉiam subiĝis kaj subiĝis kun pezego.</p>
			<p>Mi konis ankaŭ rimedon por ripari mian pasintan eraron: donaci al li kajton, aprobi kaj kuraĝigi lin por la ludo aŭ ludi kune kun li. Ni krius, kurus, ridus – tamen tiam li jam delonge havis barbon kiel mi.</p>
			<p>Ankaŭ alian rimedon mi konis por ripari mian pasintan eraron: peti de li pardonon kaj atendi lian respondon: “Mi tute ne koleras vin.” Tiam mia koro certe plifaciliĝus. Tiu estas efektive praktikebla rimedo. Foje ni renkontiĝis, kiam sur ambaŭ vizaĝoj jam gravuriĝis sulkoj de vivpeno kaj mia koro forte peziĝis. Iom post iom nia interparolado direktis sin al la pasintaĵoj de infanaĝo. Mi menciis tiun okazaĵon kaj kulpigis min pri mia knabaĝa sensencaĵo. “Sed mi tute ne koleras vin.” Mi kredis, ke li tiel diros kaj mi tuj ricevos la pardonon kaj mia koro de nun plifaciliĝos.</p>
			<p>“Ĉu tiel okazis?” diris li mirigite kun rideto kvazaŭ aŭdante rakonton pri alia homo. Li memoris nenion.</p>
			<p>Plena forgeso; nenia ofendiĝo: do el kie venus la pardono. Pardono sen ofendiĝo estas simple mensogo.</p>
			<p>Kion mi povas esperi? Mia koro nur ĉiam pezas.</p>
			
				<p>Nun la naskiĝloka printempo denove naĝas en fremdurba aero, ĝi rememorigas min pri delonge forpasinta infanaĝo, kaj samtempe kunportas nepalpeblan malĝojon. Mi preferas rifuĝi en rigoran vintron – sed, ĉirkaŭe estas ja vintro tute klare, ĝi montras al mi neordinaran rigoron kaj malvarmon.</p>
				
			<p><b> Lu Sin</b>, el la ĉina: <b>S. J. Sű</b> (el <i>Sovaĝa Herbaro</i>)</p>
		</div>'
  WHERE l.kurso = 'PP' AND l.numero = 19 AND le.ordo = 1;

-- leçon 19, section 2
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<div class="vortlisto row">
		<div class="col s12 m6">
			<p><span class="eo">abomeni</span>: malamegi.</p>
			<p><span class="eo">akordo</span>: sameco de opinioj inter pluraj personoj.</p>
			<p><span class="eo">anĝelo</span>: ĉiela di-servanto.</p>
			<p><span class="eo">benko</span>: longforma sidilo.</p>
			<p><span class="eo">burĝono</span>: ŝvelaĵo sur vegetaĵo, el kiu formiĝas folioj aŭ floroj.</p>
			<p><span class="eo">firmamento</span>: ĉiela arkaĵo.</p>
			<p><span class="eo">impliki</span>: malorde ĉirkaŭvolviĝi.</p>
			<p><span class="eo">indigni</span>: senti koleron kaj malestimon.</p>
			<p><span class="eo">kajto</span>: fluganta infanludilo.</p>
			<p><span class="eo">krabo</span>: manĝebla marestaĵo kun du pinĉilegoj.</p>
			<p><span class="eo">kvadrato</span>: ortangulaĵo, kies kvar linioj estas samlongaj.</p>
			<p><span class="eo">milda</span>: malsevera.</p>
		</div>
		<div class="col s12 m6">			
			<p><span class="eo">osto</span>: malmola substanco, kiu formas skeleton.</p>
			<p><span class="eo">papero</span>: folio, sur kiu oni skribas.</p>
			<p><span class="eo">Pekino</span>: la ĉefurbo de Ĉinujo.</p>
			<p><span class="eo">persekuti</span>: konstante turmenti.</p>
			<p><span class="eo">plumbo</span>: tre peza, griza metalo.</p>
			<p><span class="eo">rivalo</span>: konkuranto.</p>
			<p><span class="eo">skeleto</span>: interna malmolaĵo, bazo de la homo aŭ besto.</p>
			<p><span class="eo">skolopendro</span>: multpieda ringforma krablanta insekto.</p>
			<p><span class="eo">tabulo</span>: plata longa peco da ligno.</p>
			<p><span class="eo">tabureto</span>: sendorsa seĝeto.</p>
			<p><span class="eo">tegolo</span>: maldika plataĵo, per kiaj oni kovras tegmentojn.</p>		
		</div>
	</div>'
  WHERE l.kurso = 'PP' AND l.numero = 19 AND le.ordo = 2;

-- leçon 19, section 3
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##EKZERCO:210:eo##'
  WHERE l.kurso = 'PP' AND l.numero = 19 AND le.ordo = 3;

-- leçon 19, section 4
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##EKZERCO:211:eo####EKZERCO:212:eo####EKZERCO:213:eo##'
  WHERE l.kurso = 'PP' AND l.numero = 19 AND le.ordo = 4;

-- leçon 19, section 5
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##EKZERCO:214:eo##'
  WHERE l.kurso = 'PP' AND l.numero = 19 AND le.ordo = 5;

-- leçon 19, section 6
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##RESUMO##'
  WHERE l.kurso = 'PP' AND l.numero = 19 AND le.ordo = 6;

-- leçon 20, section 1
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<div class="rakonto">
			<h3>LA VERKO DE MARIA SKŁODOWSKA-CURIE</h3>
 
			<p>Aŭtune de 1891 en la pariza Sorbono komencas studadon juna polino — Maria Skłodowska, alveninta el la lando, kiu de cent jaroj estis mallibera.</p>
			<p>Loĝante en eta, nehejtita mansardo, sur la sesa etaĝo de iu domo en Quartier Latin, baraktante kontraŭ la ĉiama manko de mono kaj la malfacilaĵoj de la vivo en fremda lando, ŝi studas samtempe fizikon kaj matematikon. Jam en 1893 Maria Skłodowska fariĝis licenciatino pri fiziko, akirante la unuan lokon; unu jaron pli poste, sur la dua loko, ŝi fariĝis licenciatino pri matematiko. Ŝi ekkonas tiam la jam elstaran francan fizikiston, Pierre Curie, kiu fariĝas ŝia edzo kaj la plej proksima scienca kunlaboranto. Komence la juna sciencistino okupiĝas pri la esploroj super magnetismo — tamen baldaŭ turninte la atenton sur la mirigan observon de Henri Becquerel, ŝi decidas ekokupiĝi pri la radiado eligata de la plej peza el inter la konataj tiam elementoj — uranio.</p>
			<p>En tiu tempo unu el la plej grandaj sciencaj enigmoj estis la trapenetrantaj radioj, malkovritaj en 1895 fare de Konrad Roentgen dum la esploroj super la elektraj malŝarĝoj en maldensigitaj gasoj. Becquerel provis difini, ĉu la kemiaj kombinoj de uranio ankaŭ eligas similajn radiojn — hazarde li rimarkis, ke preparaĵoj de uraniatoj nigrigas fotokliŝon tute <i>spontane</i>, antaŭ prilumigo aŭ efikado per elektra kurento. El kie do fontis la energio de ĉi tiuj misteraj nevideblaj radioj, efikantaj sur la kliŝon kaj jonizantaj la aeron(t.e. farantaj el la aero elektrokondukilon)? Maria Skłodowska kun la tuta energio komencis esplorojn pri ĉi tiu problemo — la genia scienca intuicio tuj montris al ŝi la vastecon de la perspektivoj, kiujn ekmalfermis la malkovro de Becquerel.</p>
			<p>En la komenco de la esploroj la juna sciencistino formulas la leĝon, kiu estas la fundamento de la novmalkovrita sfero de la fenomenoj, nomitaj de ŝi <i>radioaktiveco</i> de la materio; la radiadkapablo estas eco de elemento kaj ne de la kemiaj kombinoj (kion komence sugestis aliaj fizikistoj), kaj la intenseco de la radiado estas proporcia al la kvanto de ĉi tiu elemento en koncerna radioaktiva substanco. Sekve, la novmalkovrita de ŝi propreco de la materio kaj nomita radioaktiveco — estas la atoma eco de difinitaj elementoj.</p>
			<p>Maria Skłodowska aplikas novajn metodojn de mezurado de la mistera fenomeno. Baldaŭ ŝi malkovris, ke krom uranio la radioaktivajn ecojn havas ankaŭ torio. Esplorante la uraniajn ercojn ŝi konstatas, ke ili montras eĉ pli grandan radian aktivecon ol la kemie pura uranio. Ĉi tiu fakto mirigis kaj surprizis tiutempajn fizikistojn. Juna doktorkandidatino en Sorbono (kaj en tiu tempo, ŝiaj sciencaj aktivadoj, pro la fakto mem, ke ŝi estis virino, eĉ juna virino, elvokadis kelkfoje ironiajn rimarkojn flanke de pli aĝaj profesoroj) ne hezitis fari kuraĝan, kaj eĉ — laŭ ies rimarko — “simple fantazian” hipotezon: en la uraniaj ercoj troviĝas nekonata ĝis nun en la scienco kemia elemento pli aktiva ol uranio. Kaj krome — devas ekzisti pliaj radioaktivaj elementoj. Skłodowska antaŭvidas, du eble antaŭsentas — jam tiam — ke tiel esenca eco de la materialo, kiel la radiado, devas esti ligita kun iuj fundamentaj, ĝeneralaj naturaj leĝoj.</p>
			<p>Pierre Curie, profunde fascinita per la esploroj de la edzino rezignas pri siaj ĝisnunaj eksperimentoj en alia sfero de fiziko kaj komencas kunlaboron kun Maria — kiun kunlaboron finigos lia tragika morto sub la radoj de ŝarĝveturilo en 1906.
En la jaro 1898 geedzoj Curie publikigas komunikon, en kiu ili konstatas la malkovron de du novaj kemiaj elementoj — unuan, pro siaj karakterizaĵoj proksima al bismuto, ili nomis “polonio” (“… <i>se ekzisto de ĉi tiu nova elemento konfirmiĝos, ni proponas nomi ĝin polonio, laŭ la gepatra lando de unu el ni</i>”), kaj la alia, simila al bario, “radiumo”.</p>
			<p>Nun necesis apartigi el la ercoj kaj ricevi en la pura stato du elementojn. Tio estis penego tute eksterordinara kaj pro la ĝeneralaj malfacilaĵoj de la apartigado de nekonataj substancoj, kaj pro la escepte malfacilaj laborkondiĉoj de geedzoj Curie. La sciencistoj disponis sole pri unu malnova budo en la korto de la Lernejo pri Industria Fiziko kaj Kemio, ĉe la strato Lhomond. En ĉi tiu hazarda laboratorio “… <i>ni laboris — preskaŭ sen ies helpo — dum du jaroj, okupiĝante kune kaj pri la kemiaj laboroj, kaj pri la sciencaj esploroj super la radiado de ĉiam pli forte radioaktivaj elementoj, kiujn ni iom post iom ricevadis.</i>”</p>
			<p>La rezultojn de la esploroj en la malnova budo publikigas Maria Skłodowska en la jaro 1903 en la doktoriĝa disertacio <i>La esploroj super la radioaktivaj elementoj</i>. La Fakultato de Ekzaktaj Sciencoj en Sorbono atribuas al ŝi la titolon — doktoro de la fizikaj sciencoj. La Reĝa Londona Societo distingas geedzojn Curie per la arĝenta medalo je la nomo de Davy. Kaj en la sama jaro la scienca mondo omaĝas la malkovrintojn de radioaktivado per la plej alta distingo — Pierre kaj Maria Curie, kune kun Henri Becquerel, ricevas Nobelpremion pri fiziko.</p>
			<p>Nun ilia vivsituacio ŝanĝiĝas radikale. Pierre Curie investiĝas en la Katedro pri Fiziko de Sorbono; de ĉiuj flankoj ŝutiĝas medaloj, invitoj, proponoj de kunlaboro.</p>
			<p>Post la tragika morto de la edzo en 1906, Maria Skłodowska Curie ricevas la gvidon de la Katedro pri Fiziko, komence kiel eksterordinara profesoro, kaj de la jaro 1908 — jam regula profesoro de la pariza Sorbono. La unuan fojon en la historio de la fama franca altlernejo oni konfidis katedron al virino. Maria Skłodowska difinas la atompezon de radiumo, ŝi esploras la bazajn proprecojn de polonio kaj radiumo, ŝi preparas la unuan internacian modelon de la kvanta signado de la radiado, ŝi iniciatas la biologiajn kaj medicinajn esplorojn de radioaktiveco. Ekestas tiam nova branĉo de medicino — kuriterapio — aplikanta la radiumajn radiojn por kontraŭbatalo de tumoroj. En 1910 la sciencistino eldonas sian klasikan, 1000-paĝan verkon <i>Traité de Radioactivité</i> — la unuan eksplikon de la atingoj kaj principoj de la nova scienco. En decembro 1911 — la afero tute senprecedenca en la historio de la scienco — Maria Skłodowska-Curie la <i>duan fojon</i> ricevas Nobel-premion, ĉi-foje pri kemio.
Dum la Unua Mondmilito la sciencistino organizas trafikantan radiologian servon — helpo por vunditaj soldatoj — kio permesos al ŝi kolekti spertojn kaj pruvi la signifon de radiologio por kuracado. Post la milito ŝi organizas en Parizo Radiuman Instituton, estanta la monda centro de la esploroj en ĉi tiu sfero. Laŭ ŝia iniciato similaj institutoj fondiĝis en aliaj landoj, kaj ankaŭ — en 1932 — en ŝia gepatra lando, en Varsovio (Radiuma Instituto je la nomo de Maria Skłodowska-Curie). La listo de la distingoj kaj premioj atribuitaj al ŝi atingas jam la nombron 130. Tri uraniaj mineraloj estas nomitaj: kurito, sklodovskito, kaj kupro-sklodovskito. La plej altrangaj superaj lernejoj de la mondo lokigas ŝin sur la listoj de siaj honoraj doktoroj; cent sciencaj societoj proponas al ŝi la membrecon.</p>
			<p>La malkovroj en la kampo de radioaktiveco malfermis novan eraon por fiziko, biologio kaj medicino. Ankoraŭ en 1899 Maria Skłodowska starigis hipotezon pri “la atoma transformiĝado de radiumo” kaj pri la transformiĝado de la radioaktivaj elementoj. Tri jarojn poste W. Ramsay kaj F. Soddy konfirmis ĉi tiun hipotezon eksperimente kaj konstatis, ke preparaĵoj de radiumo estas fonto de alia elemento — heliumo. Iom poste Rutherford kaj Soddy prezentis la ĝeneralan teorion de la radioaktiva malkomponiĝo. Konfirmiĝis ankaŭ alia hipotezo de la genia sciencistino — ke ne sole la kemiaj elementoj kun granda atompezo (kiel ekzemple uranio aŭ radiumo) povas elmontri radiadon — tio devas esti pli ĝenerala eco de la materio. La ĝustecon de ĉi tiu hipotezo montris la malkovro de la radioaktivaj izotopoj de la malpezaj elementoj — tiaj kiel kalio kaj rubidio — kaj baldaŭ poste la malkovro de la artefarita radioaktiveco. La propreco de radioaktivado estas efektive ĝenerala propreco de la materio.</p>
			<p>La laboro de Maria kaj Pierre Curie, kaj poste tiu de Ernest Rutherford, permesis formi la unuan nuklean modelon de atomo, kaj ili ekkomencis la lavangan progreson de la nuklea fiziko alkondukante ĝis la liberigo kaj ekrego de la nuklea energio. En biologio kaj medicino ekestis apartaj branĉoj, ligitaj kun la aplikado de radioaktiveco. La esploroj super la influo de radioaktivado al la viva materio kaj la apliko de la radioaktivaj izotopoj en biologio malfermis novan eraon — de la molekula biologio, kiu provas hodiaŭ solvi la enigmon de la plej kaŝitaj fundamentoj de la vivo.</p>
			<p>Oni povas diri, ke la malkovro kaj esploro de la radioaktiveco de kemiaj elementoj fariĝis la bazo de preskaŭ la tuta nuntempa naturkono. Ĉi tiuj malkovroj ŝanĝis la antaŭajn, falsajn konceptojn pri la konstruo de la materio kaj ĝustendirektis la esplorojn pri ĝia strukturo. Dank’ al ĉi tiuj unuaj malkovroj estas ebla la hodiaŭa evoluo de la nuklea tekniko, kiu ricevas la decidan signifon en la civiliza progreso sur la tero. “<i>La Verkoj de Maria Skłodowska</i> — skribas unu sciencisto — <i>kaŭzis la potencan revolucion en la scio pri mikrokosmo, simile kiel la malkovro de Nikolao Kopernik elvokis renversiĝon en la scienco pri makrokosmo… La revolucia transformiĝo realigita dank’ al la laboroj de Maria Skłodowska ( … ) apartenas al tiuj grandaj atingoj, kiuj influis la konceptojn de la tuta naturkono.</i>”</p>
 			<p class="center">⁂</p>
			<p>La 4-an de julio 1934 Maria Skłodowska-Curie mortis pro la sangomalsano “kiu estis sekvo de longedaŭra efikado de la radioaktivaj substancoj, kiujn ŝi malkovris kune kun la edzo.” En la sama jaro ŝia filino, Irena Curie, publikigas kune kun la edzo, Fréderic Joliot, la komunikon pri la malkovro de la artefarita radioaktiveco de elementoj (kiu malkovro ankaŭ estis baldaŭ kronita per Nobel-premio). Komenciĝas la erao de radioaktivaj izotopoj kaj de la nuklea energio — nova erao en la historio de la scienco kaj de la homaro.</p>
				
		<p><b>Maciej Ilowiecki</b> (el <i>Heroldo de Esperanto</i>)</p>
	</div>'
  WHERE l.kurso = 'PP' AND l.numero = 20 AND le.ordo = 1;

-- leçon 20, section 2
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<div class="vortlisto row">
		<div class="col s12 m6">
			<p><span class="eo">aparta</span>: malkuna, disigita de.</p>
			<p><span class="eo">atribui</span>: destini; aljuĝi.</p>
			<p><span class="eo">bario</span>: arĝentblanka metalo.</p>
			<p><span class="eo">biologio</span>: scienco pri la fenomenoj de la vivo.</p>
			<p><span class="eo">bismuto</span>: flavblanka metalo.</p>
			<p><span class="eo">civilizi</span>: socie kulturi.</p>
			<p><span class="eo">disertacio</span>: verko traktanta pri scienca aŭ literatura temo.</p>
			<p><span class="eo">doktoro</span>: plej alta universitata diplomo.</p>
			<p><span class="eo">efiki</span>: havi rezulton.</p>
			<p><span class="eo">ekspliki</span>: klarigi kaj komprenigi ion.</p>
			<p><span class="eo">erao</span>: difinita epoko.</p>
			<p><span class="eo">erco</span>: neprilaborita metalo.</p>
			<p><span class="eo">fakultato</span>: fako de universitato.</p>
			<p><span class="eo">fascini</span>: nerezisteble allogi.</p>
			<p><span class="eo">formulo</span>: preciza dirformo.</p>
			<p><span class="eo">heliumo</span>: unu el la kemiaj elementoj (He).</p>
			<p><span class="eo">industrio</span>: produktado de riĉaĵoj.</p>
			<p><span class="eo">iniciati</span>: esti la unua, kiu proponas aŭ faras ion novan.</p>
			<p><span class="eo">instituto</span>: nomo de scienca aŭ artista altlernejo.</p>
			<p><span class="eo">intuicio</span>: kvazaŭinstinkta kono.</p>
			<p><span class="eo">ironio</span>: moka dirmaniero.</p>
			<p><span class="eo">izotopo</span>: atomo de elemento, kies atompezo diferencas.</p>
			<p><span class="eo">jono</span>: atomo, kiu gajnis aŭ perdis elektronojn.</p>
			<p><span class="eo">jonizi</span>: produkti jonojn.</p>
			<p><span class="eo">kalio</span>: unu el la kemiaj elementoj (K).</p>
			<p><span class="eo">katedro</span>: profesora seĝo.</p>
			<p><span class="eo">kliŝo</span>: fotografia negativo.</p>
			<p><span class="eo">komponi</span>: harmonie aranĝi; kunigi la kemiajn elementojn de io.</p>
			<p><span class="eo">kondiĉo</span>: cirkonstanco de kiu dependas efektiviĝo.</p>
			<p><span class="eo">korto</span>: spaco ĉirkaŭita de konstruoj aŭ muroj.</p>
			<p><span class="eo">kupro</span>: brunruĝa peza metalo (Cu).</p>
			<p><span class="eo">kurento</span>: fluo de elektro.</p>
			<p><span class="eo">lavango</span>: falanta neĝamasego.</p>
		</div>
		<div class="col s12 m6">			
			<p><span class="eo">licencio</span>: universitata rango.</p>
			<p><span class="eo">listo</span>: serio de nomoj.</p>
			<p><span class="eo">londono</span>: la ĉefurbo de britujo.</p>
			<p><span class="eo">makrokosmo</span>: la tuta universo.</p>
			<p><span class="eo">mansardo</span>: subtegmenta ĉambro.</p>
			<p><span class="eo">materio</span>: perceptebla substanco.</p>
			<p><span class="eo">medalo</span>: metala honoriga disko, stampita ambaŭflanke.</p>
			<p><span class="eo">medicino</span>: scienco pri sano kaj malsano.</p>
			<p><span class="eo">mikrokosmo</span>: malgranda universo; modelo de la universo.</p>
			<p><span class="eo">modelo</span>: malgranda kopiaĵo de io.</p>
			<p><span class="eo">molekulo</span>: plej malgranda ero de kemia korpo.</p>
			<p><span class="eo">nukleo</span>: atomkerno.</p>
			<p><span class="eo">omaĝi</span>: fari honoron al iu.</p>
			<p><span class="eo">Parizo</span>: la ĉefurbo de Francujo.</p>
			<p><span class="eo">perspektivo</span>: aspekto de io malproksima.</p>
			<p><span class="eo">pola</span>: rilata al Pollando.</p>
			<p><span class="eo">precedenco</span>: pasintaĵo, kiu pravigas nunan agadon.</p>
			<p><span class="eo">profesoro</span>: fakestro en universitato.</p>
			<p><span class="eo">radikala</span>: ĝisfunda, esenca.</p>
			<p><span class="eo">radiologio</span>: scienco pri radiokrea energio.</p>
			<p><span class="eo">rango</span>: grado de graveco de iu.</p>
			<p><span class="eo">soldato</span>: militisto.</p>
			<p><span class="eo">Sorbono</span>: universitato en Parizo.</p>
			<p><span class="eo">spontana</span>: propravola; ekestanta sen ekstera influo.</p>
			<p><span class="eo">strukturo</span>: kunaranĝo de diversaj partoj de tutaĵo.</p>
			<p><span class="eo">substanco</span>: ĉiu speco de materio.</p>
			<p><span class="eo">terapio</span>: arto kuraci.</p>
			<p><span class="eo">titolo</span>: nomo montranta rangon.</p>
			<p><span class="eo">torio</span>: unu el la kemiaj elementoj (Th).</p>
			<p><span class="eo">trafiko</span>: ĉirkaŭirado sur vojoj.</p>
			<p><span class="eo">tragika</span>: terure malfeliĉa.</p>
			<p><span class="eo">tumoro</span>: malsaneca ĉelaro kreskanta en organismo.</p>
			<p><span class="eo">Varsovio</span>: la ĉefurbo de Pollando.</p>
		</div>
	</div>'
  WHERE l.kurso = 'PP' AND l.numero = 20 AND le.ordo = 2;

-- leçon 20, section 3
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##EKZERCO:215:eo##'
  WHERE l.kurso = 'PP' AND l.numero = 20 AND le.ordo = 3;

-- leçon 20, section 4
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##EKZERCO:216:eo####EKZERCO:217:eo####EKZERCO:218:eo####EKZERCO:219:eo##'
  WHERE l.kurso = 'PP' AND l.numero = 20 AND le.ordo = 4;

-- leçon 20, section 5
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##EKZERCO:220:eo##'
  WHERE l.kurso = 'PP' AND l.numero = 20 AND le.ordo = 5;

-- leçon 20, section 6
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##RESUMO##'
  WHERE l.kurso = 'PP' AND l.numero = 20 AND le.ordo = 6;

-- leçon 21, section 1
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<div class="rakonto">
			<h3>KONFERANSEO</h3>
 
			<p>Kiam mi estis en la dua lerneja klaso ni prezentis teatraĵon kaj en ĝi mi partoprenis en rolo de popo. Ĉe ĉiu mia apero la publiko krevis pro rido kaj aplaŭdis vigle, malgraŭ ke la teatraĵo estis tragika — iu reĝfilino estas ŝtelita de ciganoj, ŝi suferas kaj mortas kiel almozulino malproksime de sia hejmo. Mi supozas, ke pri la rido kulpis mia barbo, ĉar ĉiuj komprenis, ke la barbo estas farita el kapra vosto.</p>
			<p>Ĉe ĉiu provo diri ion mia barbo turniĝis supren, fermadis mian buŝon, tiklis mian nazon kaj mi tuj ternis. Sed plej grandan sukceson mi atingis en la fino de la teatraĵo kiam la reĝfilino mortis. Mi devis levi miajn manojn kiel eble plej rapide kaj voki Dion preni ŝian animon, kaj mi faris tion tiel energie ke mia popa mantelo ŝiriĝis (mi estis ĝin surtretinta per miaj piedoj antaŭ ol levi la manojn) kaj la barbo malkroĉiĝis kaj mole falis sur la plankon. Mi kredas, ke eĉ Kin ne atingis tian sukceson — la salono apenaŭ ne detruiĝis pro aplaŭdado kaj rido.</p>
			<p>De tiam mi ekvivis kun la penso, ke mi estas naskita artisto. Kun paso de la tempo mi pliaĝiĝis kaj fariĝis helpadministranto, sed tiu penso pri mia destino ne lasis min eĉ dum minuto.</p>
			<p>Kaj jen, hazarde, antaŭ ne longe, oni sciiĝis, ke la urba konsilantaro aranĝas grandan vesperamuzon en la salonoj de la novkonstruita modela restoracio.</p>
			<p>Ĉio estis en ordo, sed en la lasta momento, sabate tagmeze, oni eksciis, ke forestos la konferanseo; la antaŭvidita persono ebriiĝis vendrede kaj malaperis. Sabate li sendis el urbo Sliven luksan telegramon: “Mi estas bone, kiel vi fartas”. La situacio minacis fariĝi danĝera, se mi ne enmiksiĝus. Tuj mi iris al la ĉefa urba respondeculo, kiu prizorgas la amuzon, kaj deklaris al li, ke mi estas preta konferansei, des pli ke mi havas sperton en tiaj aferoj, ja mi ludis en la lernejo la rolon de popo kaj tiel plu. Dum momento al mi ŝajnis, ke mi vidas ĝojan brilon el la okuloj de la respondeculo, sed poste li svingis per mano kaj diris:</p>
			<p>— Mi petas vin, kamarado Conev, klopodu, ke ĉio estu iom pli… ja vi komprenas, ni ne devas nin kompromiti kaj krome la nomo de nia urba konsilantaro… ĉu vi komprenas?…</p>
			<p>— Estu trankvila, kamarado, lasu tion al mi. Ni ja ludis en la pasinto, mi havas sufiĉan sperton, ne maltrankviliĝu!</p>
			<p>Sed Dio scias pro kio, la respondeculo daŭre rigardis min kun certa dubo kaj malgaje balancis la kapon.</p>
			<p>Eh, Dio mia — ĝemis li kaj al mi ŝajnis, ke li pentas pro la fakto, ke li entreprenis tiun respondecan kaj riskan aranĝon.</p>
			<p>Sed jen la vespero venis. Mi renkontadis la gastojn ĉe la pordo, manpremis neglekte kun ĉiuj gravaj personoj de la urbo kaj kiam ili demandis min: “He, kiel estas, ha? Ĉu ni amuzos nin?”, mi svingis per la mano dirante: “Mi petas — ĉu ne mi estas la konferanseo?” kaj similajn spritaĵojn. Poste mi ekvagis inter la tabloj kaj la gastoj konkuris regali min kaj demandi pri detaloj de la programo. Al ĉiuj mi respondadis sub sekreto, ke mi aranĝis ĉion kaj estos grandaj surprizoj kaj multe da rido. Neatendite tamen la respondeculo kaptis kaj eltiris min de ĉe unu tablo, kie mi klarigas la signifon kaj la rolon de la konferanseo kaj kriis al mi:</p>
			<p>— Kion vi faras? Jam estas la 22a horo kaj la programo ankoraŭ ne komenciĝis!?</p>
			<p>— Kia programo? — ekmiris mi.</p>
			<p>— Kiel kia?! — ekĝemis la respondeculo. Ja vi devas malfermi la amuzvesperon kaj prezenti la aktorojn kaj ties numerojn. La ĉestantoj jam protestas.</p>
			<p>— Ha, estos ankaŭ numeroj, ekĝojis mi. Tre bone, saĝe elpensite.</p>
			<p>Mi etendis mian manon por gratuli lin, sed li forpuŝis ĝin kaj montris al mi la scenejon. Meze de tondro de aplaŭdoj mi riverencis kaj sciigis per la movebla mikrofono, kiun oni enmanigis al mi, ke nia programo komenciĝas. Poste mi eksidis sur unu seĝo kaj diris al la sidantaj personoj de la najbara tablo, ke certe la programo estos tre interesa kaj mi komencis kanteti la kanton “Dornoj, knabinoj, dornoj”. En la sama momento la tuta salono ekkrevis pro rido. Mi turnis min malantaŭen kaj demandis pro kio oni ridas, sed la rido plifortiĝis. Tiam la respondeculo kriis en miajn orelojn: “Forĵetu tiun mikrofonon, sentaŭgulo!” Nur tiam mi vidis, ke mi tenas ankoraŭ la mikrofonon kaj la publiko aŭdas tion, kion mi parolas. Mi tamen devas diri, ke ankaŭ la respondeculo sin kompromitis, ĉar ĉiuj aŭdis kiel li min insultis.</p>
			<p>Ankaŭ post tio mi ne perdis mian trankvilon kaj sciigis, ke sekvos la unua punkto de la programo. En tiu momento antaŭ mi staris unu el la flutistoj de la orkestro kaj al mia kapo tuj venis la penso profiti la okazon kaj prezenti lin kiel plenumanton de ludado per fluto.</p>
			<p>— Kamarado Petrov (mi ne sciis ĉu li nomiĝas Petrov aŭ alie, sed tio ne gravis en la momento) ludos ion per fluto — anoncis mi. La flutisto retiriĝis kaj ekrigardis min ektimigite, sed mi mallaŭte kriis al li, ke ni pagas al la orkestrantoj ne por rigardi la plafonon, sed por ludi. Aŭdante mian koleran voĉon la flutisto konsciigis kaj tuj ekblovis sian instrumenton. En tiu momento alvenis, profunde spirante, alia prizorganto por la amuzo, kaj sciigis al mi, ke en la suba salono la iluziisto Ĉarli atendas min. Mi ordonis al la flutisto, ke li ludu ĝis kiam mi revenis kaj rapide iris al la suba salono. Sed intertempe la iluziisto estis perdinta paciencon kaj mem ekiris serĉi min. Tial estis necese, ke mi trovu eliron el tiu situacio. La publiko ja estis okupinta la lokojn kaj streĉe atendis. Konsiderante rapide kion fari, mi sciiĝis, ke ankaŭ mi scipovas artifikaĵojn kaj mi prenis la kravaton de la kolo de unu sinjoro, prenis ankaŭ unu tre grandan restoracian teleron kaj k-r-a-ŝ! — frapis la teleron je la plankon kaj la kravaton disŝiris je pecoj. La publiko komencis furioze aplaŭdi, nur la direktoro de la restoracio kaj la sinjoro restinta sen kravato ekrigardis min scivoleme — evidente i1i atendis, ke mi tuj rekreos antaŭ ĉies okuloj la teleron kaj la kravaton. Sed ilin mi trankviligis:</p>
			<p>— Civitanoj — diris mi — vi certe atendas, ke mi restarigos tion, kion mi rompis kaj ŝiris. Vere iuj iluziistoj faras tion, sed mi ne. Mi iras laŭ propra vojo.</p>
			<p>La publiko denove ekridis kontenta, ĉar tio vere estis tre ridinda, nur la direktoro protestis laŭte kaj ekiris serĉi la ĉefan respondeculon, kaj la posedanto de la kravato sin ĵetis kontraŭ min por bati min. Mi tamen lerte manovris kaj sukcesis eviti la frapon. En tiu momento alvenis la vera iluziisto kaj li flustris en mian orelon, ke li, se ne estus la publiko, deŝirus mian kapon, ĉar li kuris tra ĉiuj salonoj serĉante min. Mi tamen ne konfuziĝis pro tiuj minacoj kaj alproksimiĝante al la rekvizitoj de la iluziisto komencis malfermi skatolojn, korbojn kaj sakojn. Sed subite mi ekkriis, ĉar iu besteto mordis min kaj mi retiriĝante malantaŭen, falis en korbon, el kiu eliris 10 kolomboj, 17 blankaj musoj, 3 kolubroj, ĉirkaŭ 10 akvaj serpentoj kaj multaj aliaj etaj kaj nedanĝeraj bestetoj, kiuj tuj ekrampis inter la gastoj. La lastaj, mi ne scias pro kio, levis grandan bruon; iuj surtabliĝis kaj fariĝis tia tumulto, kvazaŭ okazus io eksterordinara. Al mi mem ĉio ŝajnis tre gaja kaj mi ridis elkore ĝis mi vidis, ke venas la ĉefa respondeculo, kiu havis teruran esprimon sur sia vizaĝo. Li ordonis al mi, ke mi tuj iru supren kaj liberigu la kompatindan flutiston. Mi plenumis tiun ordonon kaj alveninte en la supran salonon mi kun miro konstatis, ke la tuta publiko sidas kiel rigida kaj la flutisto daŭrigas blovadi en la fluton kun lastaj fortoj. Vidante min, li apenaŭ povis prononci: “Ah, jen vi finfine”, kaj svenante falis en la manojn de la ceteraj orkestrantoj, kiuj lin elportis.</p>
			<p>Por serenigi la atmosferon mi komencis rakonti ian anekdoton, sed mi ne povis fini ĝin, ĉar en la salonon ŝtorme eniris la gastoj el la suba salono kaj post ili inter la tabloj ekrampis la musoj, kunikloj, serpentoj, kolubroj, ratoj k.a. bestoj de la iluziisto Ĉarli Gicov. Okazis vera paniko, en kiu, kiel mi sukcesis vidi, la respondeculo svenis en la brakoj de unu dika sinjorino, kiu siavice konsideris lin muso kaj ekkriis per laŭta voĉo. Sia krio infektis ĉiujn ceterajn kaj baldaŭ la tuta salono eksimilis al vivanta maro, en kiu viroj kaj virinoj interpuŝante unu la alian, renversante kaj rompante ĉion sur sia vojo, direktiĝis al la eliro.</p>
			<p>Mi plifortigis la tumulton imitante per la mikrofono la voĉojn de diversaj sovaĝaj bestoj, de jaguaro ĝis bengala tigro. Do, persone por mi, la amuzo iris tre gaje kaj plene diferencis de aliaj tiaspecaj aranĝoj.</p>
			<p>La postan tagon, tamen, vokis min la ĉefa respondeculo kaj klarigis al mi, ke li sugestis al mia ĉefo, ke sentaŭguloj kiel mi ne devas okupi ŝtatan postenon. Poste li daŭrigis:</p>
			<p>— Krome, “Kara amiko”, je via konto ni kalkulis ĉiujn elspezojn por la amuzvespero, inkluzive la rompitajn kaj difektitajn objektojn je sumo 15 624 levoj. Kaj nun — konkludis li — for de ĉi tie, ĉar semi vidos vin ĉi tie refoje, ml sufokos vin per miaj propraj manoj.</p>
			<p>Dirante tion li ekĝemis “Oh” kaj kaptis sin je la okulo, kiu estis bluiĝinta — kredeble, la dika sinjorino frapis lin je tiu loko, opiniante lin muso.</p>
			<p>Sed, “se”… Mi mem intencis forlasi tiun filistran urbon kaj translokiĝi en la ĉefurbon, por tie plene dediĉi min al la arto.</p>
			<p>Kaj se la vizitantoj de la amuzvespero ne komprenis, ke mi estas la plej originala kaj kuraĝa konferanseo, ja vi karaj legantoj plene komprenis tion. Mi petas vin, kunhelpu, ke mi estu enoficigita kiel ŝtata konferanseo en Sofia. Skribu al la adreso: Vasil Conev, Sofia, Str. 6 septembro N 49.</p>

			<p><b>Vasil Conev</b>, el la bulgara: <b>Metodi Panĉev</b> (el <i>Belarto</i>)</p>
		</div>'
  WHERE l.kurso = 'PP' AND l.numero = 21 AND le.ordo = 1;

-- leçon 21, section 2
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<div class="vortlisto row">
		<div class="col s12 m6">
			<p><span class="eo">aktoro</span>: teatra ludisto.</p>
			<p><span class="eo">almozo</span>: monhelpo al malriĉulo.</p>
			<p><span class="eo">anekdoto</span>: mallonga sprita rakonto.</p>
			<p><span class="eo">aplaŭdi</span>: montri aprobon.</p>
			<p><span class="eo">artifiko</span>: trompa ruzaĵo.</p>
			<p><span class="eo">bengala</span>: rilata al Bengalujo, orienta regiono de Hindujo.</p>
			<p><span class="eo">cigano</span>: homo el vaganta hindujdevena gento.</p>
			<p><span class="eo">civito</span>: tutaĵo de la regnanoj.</p>
			<p><span class="eo">direktoro</span>: direktisto de ofico.</p>
			<p><span class="eo">dorno</span>: pikileto de vegetaĵo.</p>
			<p><span class="eo">evidenta</span>: klara kaj senduba.</p>
			<p><span class="eo">filistro</span>: senidealulo, vulgarulo.</p>
			<p><span class="eo">gratuli</span>: esprimi al iu kontentecon pri iu lia sukceso.</p>
			<p><span class="eo">ĝemi</span>: aŭdigi plendan brueton.</p>
			<p><span class="eo">iluzio</span>: erara penso aŭ opinio.</p>
			<p><span class="eo">imiti</span>: similigi sin aŭ ion al io aŭ iu alia.</p>
			<p><span class="eo">infekti</span>: havigi al iu malsanon.</p>
			<p><span class="eo">inkluziva</span>: enhavanta en si.</p>
			<p><span class="eo">instrumento</span>: speciala ilo; ĉi tie</span>: muzikilo.</p>
			<p><span class="eo">jaguaro</span>: amerika katsimila rabobesto.</p>
			<p><span class="eo">kolombo</span>: birdo kun forta hejmiga instinkto.</p>
			<p><span class="eo">kolubro</span>: nedanĝera serpento.</p>
			<p><span class="eo">kompromiti</span>: endanĝerigi.</p>
			<p><span class="eo">konferanseo</span>: programestro.</p>
		</div>
		<div class="col s12 m6">			
			<p><span class="eo">konkludo</span>: fino de rezonado; finrezulto.</p>
			<p><span class="eo">korbo</span>: portebla ujo farita el sekaj herbaĵoj ks.</p>
			<p><span class="eo">kravato</span>: ornama rubandaĵo, kiun viroj portas ĉirkaŭ la kolo.</p>
			<p><span class="eo">kroĉi</span>: ligi per hoko.</p>
			<p><span class="eo">levo</span>: bulgara monunuo.</p>
			<p><span class="eo">mantelo</span>: longa supervesto.</p>
			<p><span class="eo">mikrofono</span>: instrumento, kiu plilaŭtigas sonojn.</p>
			<p><span class="eo">mordi</span>: ŝiri per la dentoj.</p>
			<p><span class="eo">muso</span>: malgranda malutila besto.</p>
			<p><span class="eo">neglekti</span>: malzorgi, malatenti.</p>
			<p><span class="eo">originala</span>: ne simila al aliaj.</p>
			<p><span class="eo">popo</span>: grekortodoksa pastro.</p>
			<p><span class="eo">programo</span>: la enhavo de teatraĵo ks.</p>
			<p><span class="eo">prononci</span>: aŭdigi klare.</p>
			<p><span class="eo">protesti</span>: fari deklaron kontraŭ io.</p>
			<p><span class="eo">rato</span>: malutila besteto.</p>
			<p><span class="eo">rekvizito</span>: teatra ekipo.</p>
			<p><span class="eo">telegramo</span>: komuniko rapide transsendata.</p>
			<p><span class="eo">telero</span>: malprofunda manĝovazo.</p>
			<p><span class="eo">tigro</span>: granda katsimila rabobesto.</p>
			<p><span class="eo">tikli</span>: delikate kaj ridige tuŝeti iun.</p>
			<p><span class="eo">treti</span>: piedpremi.</p>
			<p><span class="eo">tumulto</span>: konfuza brua malordego.</p>
			<p><span class="eo">vosto</span>: postpenda hararo de besto.</p>
		</div>
	</div>'
  WHERE l.kurso = 'PP' AND l.numero = 21 AND le.ordo = 2;

-- leçon 21, section 3
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##EKZERCO:221:eo##'
  WHERE l.kurso = 'PP' AND l.numero = 21 AND le.ordo = 3;

-- leçon 21, section 4
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##EKZERCO:222:eo####EKZERCO:223:eo####EKZERCO:224:eo####EKZERCO:225:eo##'
  WHERE l.kurso = 'PP' AND l.numero = 21 AND le.ordo = 4;

-- leçon 21, section 5
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##EKZERCO:226:eo##'
  WHERE l.kurso = 'PP' AND l.numero = 21 AND le.ordo = 5;

-- leçon 21, section 6
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##RESUMO##'
  WHERE l.kurso = 'PP' AND l.numero = 21 AND le.ordo = 6;

-- leçon 22, section 1
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<div class="rakonto">
			<h3>VORTOJ DE ZAMENHOF</h3>
			<h4>(1) Pri Patriotismo</h4>
			<p>La dua kulpigo, kiun ni ofte devas aŭdi, estas tio, ke ni esperantistoj estas malbonaj patriotoj. Ĉar tiuj esperantistoj, kiuj traktas la esperantismon kiel ideon, predikas reciprokan justecon kaj fratecon inter la popoloj, kaj ĉar laŭ la opinio de la gentaj ŝovinistoj patriotismo konsistas en malamo kontraŭ ĉio, kio ne estas nia, tial ni laŭ ilia opinio estas malbonaj patriotoj, kaj ili diras, ke la esperantistoj ne amas sian patrujon. Kontraŭ tiu ĉi mensoga, malnobla kaj kalumnia kulpigo ni protestas plej energie, ni protestas per ĉiuj fibroj de nia koro! Dum la pseŭdo-patriotismo, t.e. la genta ŝovinismo, estas parto de tiu komuna malamo, kiu ĉion en la mondo detruas, la vera patriotismo estas parto de tiu granda tutmonda amo, kiu ĉion konstruas, konservas kaj feliĉigas. La esperantismo, kiu predikas amon, kaj la patriotismo, kiu ankaŭ predikas amon, neniam povas esti malamikaj inter si. Ĉiu povas paroli al ni pri ĉiuspeca amo, kaj ni kun danko lin aŭskultos; sed kiam pri amo al la patrujo parolas al ni ŝovinistoj, tiuj reprezentantoj de abomeninda malamo, tiuj mallumaj demonoj, kiuj ne sole inter la landoj, sed ankaŭ en sia propra patrujo konstante instigas homon kontraŭ homo — tiam ni kun la plej granda indigno nin deturnas. Vi, nigraj semantoj de malpaco, parolu nur pri malamo al ĉio, kio ne estas via, parolu pri egoismo, sed neniam uzu la vorton “amo”, ĉar en via buŝo la sankta vorto “amo” malpuriĝas.</p>
			<p>Vi staras nun antaŭ miaj okuloj, mia kara Litovujo, mia malfeliĉa patrujo, kiun mi neniam povas forgesi, kvankam mi forlasis vin kiel juna knabo. Vi, kiun mi ofte vidas en miaj sonĝoj, vi, kiun nenia alia parto de la tero iam povos anstataŭi en mia koro, vi atestu, kiu vin pli multe, pli kore kaj pli sincere amas: ĉu mi, idea esperantisto, kiu revis pri frateco inter ĉiuj viaj loĝantoj, kvankam mi devis bedaŭrinde forlasi vin, simile al multaj centoj da miloj da aliaj viaj filoj — aŭ ĉu tiuj personoj, kiuj deziras, ke vi apartenu nur al ili, kaj ĉiuj aliaj viaj filoj estu rigardataj kiel fremduloj aŭ sklavoj! Ho, patriotismo, patriotismo, kiam fine la homoj lernos kompreni ĝuste vian sencon! Kiam via sankta nomo ĉesos esti armilo en la manoj de diversaj malhonestuloj! Kiam fine ĉiu homo ricevos la rajton kaj la eblon algluiĝi per sia tuta koro al tiu peco da tero, kiu lin naskis!</p>
<p>Longe daŭros ankoraŭ malluma nokto sur la tero, sed ne eterne ĝi daŭros. Venos iam la tempo, kiam la homoj ĉesos esti lupoj unuj kontraŭ la aliaj, perforte altrudi al si reciproke siajn lingvojn kaj morojn, ili vivos inter si pace kaj frate, en plena interkonsento ili laboros sur la tero, sur kiu ili vivas, kaj kontraŭ tiuj krudaj fortoj de la naturo, kiuj ilin ĉiujn egale atakas. Kaj kune kaj interkonsente ili celados ĉiuj al unu vero, al unu feliĉo. Kaj se iam venos tiu feliĉa tempo, ĝi estos la frukto de konstanta kaj senlaca laborado de tiuj homoj, kiujn ni vidas nun en ĉi tiu ĉambrego kaj kies nomo, ankoraŭ tre malmulte konata kaj tre malmulte ŝatata, estas “esperantistoj”.</p>
			<p><i>(el <i>Parolado en la Guildhall</i>, Londono)</i></p>
			<h4>(2) Pri la Neceso Paroli Esperanton</h4>
			<p>Vi eble miros, ke mi parolas al vi ne ruse, sed esperante; vi eble diros, ke ĉar ni havas nun kongreson de samregnanoj kaj ĉiuj, aŭ almenaŭ preskaŭ ĉiuj ĝiaj partoprenantoj komprenas tre bone la saman lingvon, estas multe pli nature paroli al ili en tiu lingvo. Ekzistas tamen gravaj kaŭzoj, pro kiuj mi elektis por mia parolo tiun lingvon, por kiu ni batalas kaj por kiu ni kunvenis.</p>
			<p>Niaj kongresoj, ne sole la universalaj, sed ankaŭ la naciaj, havas antaŭ ĉio signifon instruan kaj edukan. Esperantistoj, disĵetitaj en diversaj urboj kaj urbetoj, kunvenas en pli aŭ malpli granda amaso, por aŭdi nian lingvon, por kontroli, ĉu ili ĝuste ellernis la lingvon, ĉu ili bone ĝin komprenas, por kompari sian propran manieron de parolado kun la parolmaniero de pli spertaj esperantistoj. Kiam ili poste revenas hejmen, ili ne sole mem parolas pli pure, sed ili alportas modelon de bona parolado al tiuj, kiuj restis hejme. Tiamaniere la kongresoj reguligas la uzadon de la lingvo, kaj dank’ al niaj kongresoj jam nun oni parolas Esperanton perfekte egale ne sole en la plej malproksimaj anguloj de ĉiu aparta regno, sed en ĉiuj plej malsamaj lokoj de la tuta tera globo. Jam nun, kiam oni aŭdas bonan kaj spertan esperantan oratoron, oni neniel povas diveni, al kiu nacio aŭ lando li apartenas. La plena aŭtonomia vivo de nia lingvo, kun ĝia absolute propra, ne pruntita kaj ne imitita spirito, ĉiam pli kaj pli fortikiĝas tiamaniere, kvazaŭ ĉiuj esperantistoj de la mondo loĝus kune sur unu malgranda peco da tero.</p>
			<p>Ne malpli grava estas la eduka signifo de la esperantistaj kongresoj. Izolitaj esperantistoj, kiuj neniam havis la eblon praktike apliki tion, kion ili lernis, ofte dubas, ĉu efektive per Esperanto oni povas tute bone interkompreniĝi. Eĉ interne de la esperantistaj grupoj oni ofte ne kuraĝas paroli esperante, oni balbutas, oni preferas paroli en sia nacia lingvo, kaj proporcie al la nekuraĝeco de la parolado aperas ankaŭ nekuraĝeco de propagando, ĉar la esperantistoj-balbutantoj malgraŭvole ne povas liberigi sin de la timo, ke eble tamen Esperanto estas afero pli teoria, ol praktika. Sed kiam la balbutanto venas al kongreso, kie li havas la eblon aŭdi bonajn kaj spertajn esperantistajn oratorojn, kiam li per siaj propraj oreloj kaj okuloj konvinkiĝas, kiel bele kaj flue oni povas paroli en Esperanto, li entuziasmiĝas, li vidas, ke li laboras por io viva kaj vivoplena, li revenas hejmen kun nova kuraĝo kaj energio. Niaj kongresoj, ne sole la universalaj, sed ankaŭ la lokaj, tiamaniere edukas konvinkitajn, sekve ankaŭ entuziasmajn batalantojn por nia afero.</p>
			<p>Tio estas la ĉefaj motivoj, pro kiuj ni en ĉiuj niaj kongresoj ne sole en la universalaj, sed ankaŭ en la naciaj aŭ regionaj, nepre devas paroli ne sole pri Esperanto, sed ankaŭ per Esperanto.</p>

			<p><b>L. L. Zamenhof</b> (el <i>Parolado en St. Petersburg</i>, 1910)</p>
		</div>'
  WHERE l.kurso = 'PP' AND l.numero = 22 AND le.ordo = 1;

-- leçon 22, section 2
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<div class="vortlisto row">
		<div class="col s12 m6">
			<p><span class="eo">aŭtonomio</span>: politika sendependeco.</p>
			<p><span class="eo">fibro</span>: kunplektitaj korpaj aŭ vegetaĵaj fadenoj.</p>
			<p><span class="eo">fortika</span>: malfacile rompebla.</p>
			<p><span class="eo">izoli</span>: apartigi de la aliaj.</p>
			<p><span class="eo">kalumnii</span>: malutili al iu per mensogaj akuzoj.</p>
			<p><span class="eo">Litovujo</span>: provinco en tiama rusia Pollando.</p>
			<p><span class="eo">moro</span>: ĝenerala vivmaniero; kutima konduto.</p>
		</div>
		<div class="col s12 m6">			
			<p><span class="eo">motivo</span>: kialo.</p>
			<p><span class="eo">oratoro</span>: homo, kiu publike paroladas.</p>
			<p><span class="eo">prediki</span>: fari religian aŭ kvazaŭreligian paroladon.</p>
			<p><span class="eo">rusa</span>: rilata al Ruslando.</p>
			<p><span class="eo">ŝovinisto</span>: fanatika patrioto.</p>
			<p><span class="eo">teorio</span>: supozo rezulte de rezonado.</p>		
		</div>
	</div>'
  WHERE l.kurso = 'PP' AND l.numero = 22 AND le.ordo = 2;

-- leçon 22, section 3
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##EKZERCO:227:eo##'
  WHERE l.kurso = 'PP' AND l.numero = 22 AND le.ordo = 3;

-- leçon 22, section 4
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##EKZERCO:228:eo####EKZERCO:229:eo####EKZERCO:230:eo####EKZERCO:231:eo##'
  WHERE l.kurso = 'PP' AND l.numero = 22 AND le.ordo = 4;

-- leçon 22, section 5
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##EKZERCO:232:eo####EKZERCO:233:eo##'
  WHERE l.kurso = 'PP' AND l.numero = 22 AND le.ordo = 5;

-- leçon 22, section 6
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##RESUMO##'
  WHERE l.kurso = 'PP' AND l.numero = 22 AND le.ordo = 6;

-- leçon 23, section 1
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<div class="rakonto">
			<h3>SALOMONO KAJ LA OAZA NIMFO</h3>
			<p>Iun tagon, dum kontrolvojaĝo en la oazoj de la malalta Saŭra, mi min trovis en palmareto duone subsabligita, nomata “Ouled-Raffa”, kie vegetas maldensa popolo. Deveninte de la arabaj venkakirintoj kaj sudanaj sklavinoj forrabitaj el la bordoj de la Nigero, la negroida loĝantaro ennestiĝas en dometoj el premita tero; ĉi tiuj kabanoj staras apud putoj, el kiuj akvon iomete magnezian ĉerpas nefrivolaj dromedaroj. Ĉirkaŭe la okrokolora dezerto envolvas la verdantan insuleton, kiel smeraldon en ĝia juvelujo.</p>
			<p>Post sukoplena festeno konsistanta el kaprido turnrostita super lignardaĵoj, stufita grio terure flampikanta pro paprika saŭco kaj daktiloj arte surŝutitaj de blonda sablo, okazis la tradicia aŭskultado al kelkaj geplendantoj. La aferoj al mi prezentataj estis zorge elektitaj de la vilaĝestro, honesta sklavkomercisto, kiu deziris sin vidigi, kiel la Salomonon de la dezerto.
			Post kiam banale lamentis pluraj kampistoj, alvenis jam nejuna virino, sen ĉarmo, sen belo, delonge fuŝita pro ĉiuj laboroj kutime rezervitaj al la aminda sekso. Ŝi sidiĝis fronte al mi, interplektante siajn mallongajn krurojn sub blua robo. Por transdoni niajn neforgesindajn decidojn al la posteularo, la registristo pretigis sian plumon, antaŭtaksante siajn honorariojn.
			La oaza nimfo akceptis modestan teniĝon, klarigis sian voĉon kaj jene rakontis:</p>
			<p>“Mi estas Jamina bent Mabruk, de dek jaroj edzino de Mohamed ben Kadur. Antaŭ kvin jaroj mia edzo foriĝis kaj neniam sciigis tion, kio al li okazis. La famo disvastiĝas, ke li soldatiĝis en la itala meharistaro. Nun tute sola mi restas, kaj soleco danĝere insidas kontraŭ virta virino. Ankoraŭ juna mi estas, ŝi aldonis ruĝiĝante kaj mallevante siajn bovajn okulojn; mi posedas etan bienon: domon, kvaronakron da estonta hordeo, unu gravedan kaprinon kaj naŭ ekflorantajn palmojn. Mi volas vivi kiel sinjorino, kaj ne kiel forlasita ŝuaĉo. Mia reputacio…”</p>
			<p>“Sufiĉe,” ekkriis la vilaĝestro brue ruktante. Sin turnante al mi li daŭrigis: “Jes, Via Majora Moŝto, tiu porkida Mohamed foriris kaj iĝis servisto de alilanda soldataro. Kial tiu judo — li lerte teren kraĉis kun fiera malestimo — kial tiu fripono ne soldatiĝis en la franca militistaro, he? Tiu malfidelulo meritas, ke mi fortranĉu lian dekstran orelon… La du orelojn,” li eksplodis, post pripensa momento. “Estu malbenitaj la gepatroj de tiu skabia azeno, tiu naŭza kanajlo, tiu hundaĉo, tiu…”</p>
			<p>Li perdis la spiron kaj flamiĝante pro indigno ĉirkaŭrigardis la tremantan ĉeestantaron kun fulmoplenaj okuloj. Mi verdiktis: “Tia trolonga forrestado efektive similas al finofara rezigno de ĉiuj rajtoj de mastreco. Do mi proponas liberigi la virinon el la ligiloj de la edzeco.”</p>
			<p>“Mi aŭdas kaj obeas,” noble diris la tribestro. “La geedziĝo estas rompita, kaj la eksedzino konservos la akiritan bienon. Skribu, registristo.”</p>
			<p>Ĉiu aprobis kaj taktoplene gratulis la orbuŝan Salomonon. Tute rejuniĝinte la elĉenigita koketulino forkuris kiel gazelo, akompanate per la avidaj rigardoj de du-tri mezaĝaj kandidatoj al la ĵus neokupita loko.</p>
			<p>Dum tri monatoj mi restadis en Ksabi, kie la kvazaŭa rivero Saŭra malaperas en la sablojn. Mi instalis mian tendaron apud puto kun sensala akvo, kaj prilaboris la vojon al Reggan.</p>
			<p>Iun vesperon, en la “mire bela horo”, kiam la sablodunoj malvetoniĝas kaj ridetas al la subiranta suno, tiam aperis majesta mehari per digna malrapideco alvenante de la sudo. Estis belega besto preskaŭ tute blanka, rajdata de altstatura kaj fiermiena viro, kiu ceremonie salutis min. Mi invitis lin momente ripozi, laŭ la gastigleĝoj de la dezerto. Mi rimarkis la fremdan ekipaĵon, kaj konkludis, ke de tre malproksime venas la vojaĝanto. Sorbinte teon parfumitan per freŝa mento, li klarigis sian voĉon kaj jene rakontis:</p>
			<p>“Mi originas de apuda lando, kaj forestinte dum pluraj jaroj mi revenas al mia vilaĝo. Pro enuo kaj nomada altireco, iun tagon mi ĝisiris al Fezano kaj soldatiĝis en la itala meharistaro. Post kvinjara servado mi rehejmeniras, ricevinte tiun belan rajdobeston kiun vi tie vidas, kaj gajninte sufiĉe da mono por aĉeti nombrajn daktilarbojn. Dank’ al Dio — poreterne laŭdata Li estu — de nun mi kviete vivos kun mia familio.”</p>
			<p>Subite mi memoris la scenon de la liberigita amatino. Sed mi silentis, ĉar maldece estas paroli pri virino al mahometano, kaj enmiksiĝi en la geedzajn aferojn mi neniel ŝatas. Trinkinte la tri ritajn tasojn da teo la vagemulo surmehariĝis.</p>
			<p>“Iru pace,” mi adiaŭis lin.</p>
			<p>“Sur vin la savo,” li respondis.</p>
			<p>Kaj li malaperis, kvazaŭ sorbata de la viola noktiĝo.</p>
			<p>Kio okazos, kiam la revenanto hejmen atingis? Ĉu li senkapigos sian kunvivintinon, kiel en tragedio de Shakespeare? Ĉu fluos la sango de la perfida nimfo sur la varman sablon de la paca oazeto? Ne, sendube li ĝojos, kiam li ekscios, ke malembarasite de sia malnova edzino, li povos per la mono honeste enspezita el la itala militkaso aĉeti dekkvinjaran belulineton, kiu al li donos iom da plezuro kaj multe da zorgoj.</p>
			<p>Sed nur Allah estas granda!</p>

			<p><b>Jean Ribillard</b> (el <i>Esperanto</i>)</p>
		</div>'
  WHERE l.kurso = 'PP' AND l.numero = 23 AND le.ordo = 1;

-- leçon 23, section 2
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<div class="vortlisto row">
		<div class="col s12 m6">
			<p><span class="eo">akro</span>: unuo de termezuro.</p>
			<p><span class="eo">arabo</span>: nordafrikulo.</p>
			<p><span class="eo">ardi</span>: esti varmega.</p>
			<p><span class="eo">azeno</span>: kvarpieda longorela ŝarĝbesto.</p>
			<p><span class="eo">bieno</span>: terposedaĵo.</p>
			<p><span class="eo">ceremonio</span>: formala ĝentileco.</p>
			<p><span class="eo">ĉarma</span>: delikate plaĉa kaj loga.</p>
			<p><span class="eo">daktilo</span>: speco de frukto.</p>
			<p><span class="eo">digno</span>: memrespekto.</p>
			<p><span class="eo">dromedaro</span>: unuĝiba besto, kiun oni rajdas en dezerto.</p>
			<p><span class="eo">duno</span>: sabla monteto.</p>
			<p><span class="eo">ekipi</span>: provizi iun per necesaj iloj.</p>
			<p><span class="eo">festeno</span>: luksa kaj abunda manĝo.</p>
			<p><span class="eo">fripono</span>: ruza malhonestulo.</p>
			<p><span class="eo">frivola</span>: malserioza.</p>
			<p><span class="eo">gazelo</span>: svelta rapidkura besto.</p>
			<p><span class="eo">graveda</span>: portanta naskotan idon.</p>
			<p><span class="eo">grio</span>: senŝeligitaj grajnogrenoj.</p>
			<p><span class="eo">hordeo</span>: grenspeco.</p>
			<p><span class="eo">insidi</span>: prepari por trompi iun.</p>
			<p><span class="eo">instali</span>: starigi kaj funkciigi ion.</p>
			<p><span class="eo">itala</span>: rilata al Italujo.</p>
			<p><span class="eo">judo</span>: viro de la hebrea gento.</p>
			<p><span class="eo">kanajlo</span>: malnobla homo.</p>
			<p><span class="eo">koketa</span>: ornamama kaj flirtema.</p>
			<p><span class="eo">kraĉi</span>: elĵeti salivon el la buŝo.</p>
			<p><span class="eo">magnezio</span>: kemia elemento (Mg)</p>
			<p><span class="eo">mahometano</span>: religia sekvanto de Mahometo.</p>
			<p><span class="eo">majoro</span>: oficira armea rango.</p>
			<p><span class="eo">malvo</span>: rozviola floro.</p>
			<p><span class="eo">meharisto</span>: araba soldato rajdanta sur dromedaro nomata mehari.</p>
		</div>
		<div class="col s12 m6">			
			<p><span class="eo">mento</span>: aroma vegetaĵo.</p>
			<p><span class="eo">negro</span>: nigrulo.</p>
			<p><span class="eo">nimfo</span>: virina diaĵo de akvo, arbaro kaj monto.</p>
			<p><span class="eo">nomado</span>: migrulo.</p>
			<p><span class="eo">oazo</span>: fekunda insulo en la dezerto.</p>
			<p><span class="eo">okro</span>: speco de mineralo uzata kiel farbo.</p>
			<p><span class="eo">origino</span>: devenloko.</p>
			<p><span class="eo">palmo</span>: varmlanda arbo.</p>
			<p><span class="eo">papriko</span>: ruĝa pipro.</p>
			<p><span class="eo">rajdi</span>: sidi sur dorso de besto.</p>
			<p><span class="eo">reputacio</span>: publika opinio pri iu.</p>
			<p><span class="eo">rezervi</span>: konservi por iu destino.</p>
			<p><span class="eo">rivero</span>: granda akvofluo.</p>
			<p><span class="eo">rukti</span>: brue eligi stomakgasojn tra la buŝo.</p>
			<p><span class="eo">salomono</span>: biblia reĝo konata kiel lerta juĝisto.</p>
			<p><span class="eo">saŭco</span>: spica manĝfluaĵo.</p>
			<p><span class="eo">skabio</span>: infekta haŭtmalsano.</p>
			<p><span class="eo">sorbi</span>: enspirante altiri fluaĵon iom post iom en sian buŝon.</p>
			<p><span class="eo">stufi</span>: longe kuiri viandon en fermita kaserolo.</p>
			<p><span class="eo">sudana</span>: rilata al sudano.</p>
			<p><span class="eo">suko</span>: nutra fluaĵo.</p>
			<p><span class="eo">ŝuo</span>: piedvesto.</p>
			<p><span class="eo">takto</span>: kapablo ĉiam agi kun ĝentileco kaj delikateco.</p>
			<p><span class="eo">teo</span>: trinkaĵo farita el sekigitaj folioj.</p>
			<p><span class="eo">tono</span>: nuanco de sono aŭ koloro.</p>
			<p><span class="eo">tribo</span>: grupo de homoj samdevenaj.</p>
			<p><span class="eo">vegeti</span>: vivi inerte.</p>
			<p><span class="eo">venki</span>: superi malamikon. </p>
			<p><span class="eo">virto</span>: konstanta emo fari bonon.</p>
			<p><span class="eo">verdikto</span>: decido de juĝanto.</p>		
		</div>
	</div>'
  WHERE l.kurso = 'PP' AND l.numero = 23 AND le.ordo = 2;

-- leçon 23, section 3
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##EKZERCO:234:eo##'
  WHERE l.kurso = 'PP' AND l.numero = 23 AND le.ordo = 3;

-- leçon 23, section 4
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##EKZERCO:235:eo####EKZERCO:236:eo####EKZERCO:237:eo##'
  WHERE l.kurso = 'PP' AND l.numero = 23 AND le.ordo = 4;

-- leçon 23, section 5
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##EKZERCO:238:eo####EKZERCO:239:eo##'
  WHERE l.kurso = 'PP' AND l.numero = 23 AND le.ordo = 5;

-- leçon 23, section 6
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##RESUMO##'
  WHERE l.kurso = 'PP' AND l.numero = 23 AND le.ordo = 6;

-- leçon 24, section 1
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<div class="rakonto">
			<h3>LA AĜOJ DE LA HOMO (1)</h3>
			
			<p>Je la unua jaro, li similas reĝon kuŝantan en portlito, ĉiuj lin ĉirkaŭbrakas kaj kisas;<br>
			je la dua jaro, li similas porkon, kiu baraktas en malpuraĵoj;<br>
			je la deka jaro, li saltadas kiel kapreolo;<br>
			je la dudeka jaro, li blekas kiel ĉevalo, vostumas kiel pavo, kaj postulas inon;<br>
			kiam li akiras edzinon, li similas azenon;<br>
			kiam li akiris idojn, li fariĝas aŭdaca kiel hundo, por havigi al ili panon kaj vivtenon;<br>
			fine, maljuniĝinte, li similas simion…</p>
            
            <p><b>Rabeno Ŝimeon Ben Eleazar</b> el la aramea: <i>A. Nurak</i> (el <i>La Nica Literatura Revuo</i>)</p>
            
            <h3>LA AĜOJ DE LA HOMO (2)</h3>
            
			<p>En supra ĉambro, lulo… lulo…<br>
			Anĝele dormas la etulo:<br>
			Etaĝo.</p>
			
			<p>Sed baldaŭ li el dorm’ sin ŝiras<br>
			Kaj pri la bela mondo miras:<br>
			Miraĝo.</p>
			
			<p>Jam ne plu side li tamburas,<br>
			Sed tra la dom’ esplore kuras:<br>
			Kuraĝo.</p>
			
			<p>Kun vundoj li (kaj sen rubandoj)<br>
			Revenas el stratbubaj bandoj:<br>
			Bandaĝo.</p>
			
			<p>Kaj baldaŭ sekvas li kun ĝojo<br>
			Knabinon ĉien sur la vojo:<br>
			Vojaĝo.</p>
			
			<p>Al ŝi li donas sian nomon:<br>
			Por fondi kune novan domon:<br>
			Domaĝo.</p>
			
			<p>Li tiam estas tre utila<br>
			Fortika viro, kvankam vila:<br>
			Vilaĝo.</p>
			
			<p>Kaj post rapida tempopaso<br>
			Postrestas nur senviva maso:<br>
			Masaĝo.</p>
			<p>P.S.<br>
			Ni ne apliku al Virino<br>
			Ĉi tiun viv- kaj rimo-saĝon,<br>
			Ĉar de l’ komenco ĝis la fino<br>
			Ŝi ĉiam havas saman aĝon:<br>
			Avantaĝo.</p>
 
 			<p><b>Raymond Schwartz</b> (el <i>La Stranga Butiko</i>)</p>      
 			
 			<h3>LA AĜOJ DE LA HOMO (3)</h3>

			<p>Kaj unu homo ludas multajn rolojn<br>
			En sia viv’, kun aĝoj sep por aktoj.<br>
			Unue la infano, ploradante<br>
			Ĉe l’ brakoj de la vartistino.<br>
			Tiam La juna lernejknabo, plendetante,<br>
			Havante librosakon, kun vizaĝo<br>
			Matenopura, rampetante kiel<br>
			Limako nevolonte al lernejo.<br>
			Kaj tiam la amanto, sopirante<br>
			Kiel fornego, kun balad’ malgaja<br>
			Al brovo de la amatino. Tiam<br>
			Soldato, plena je mirigaj ĵuroj,<br>
			Havante barbon kvazaŭ leopardo,<br>
			Ĵaluza pri honoro, malpacema,<br>
			Celante tiun aerglobon, gloron,<br>
			Eĉ de la faŭko de la pafilego.<br>
			Kaj tiam, la juĝisto, dikakorpa<br>
			Pro multe da donacoj de kaponoj,<br>
			Severokula, kun tondita barbo<br>
			Laŭ profesio lia, kaj dirante<br>
			Sentencojn saĝoplenajn, kaj ekzemplojn<br>
			Modernajn. Tiel li la rolon ludas.<br>
			La sesa aĝo transmoviĝas tiam<br>
			Je grimacul’ maldika, en pantofloj,<br>
			Portanta okulvitrojn, kun saketo<br>
			Ĉe l’ flanko; liaj ŝtrumpoj, konservitaj<br>
			Ankoraŭ de juneco, jam tro larĝaj<br>
			Por la malgrasaj kruroj. Lia voĉo<br>
			Ne plu vireca baso, sanĝiĝinte<br>
			En infanecan sopranaĉon, pepas<br>
			Kaj fajfas en la son’. La lasta sceno<br>
			De l’ stranga okazplena historio —<br>
			Maljunegeco — nura forgeseco,<br>
			Sen dentoj, sen okuloj, gusto, ĉio.</p>
 
            <p><b>William Shakespeare</b>, el la angla: <b>Ivy Kellerman</b> (el <i>Kiel Plaĉas al Vi</i>)</p>

		</div>'
  WHERE l.kurso = 'PP' AND l.numero = 24 AND le.ordo = 1;

-- leçon 24, section 2
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<div class="vortlisto row">
		<div class="col s12 m6">
			<p><span class="eo">aŭdaci</span>: maltimi.</p>
			<p><span class="eo">balado</span>: rakonta poeziaĵo.</p>
			<p><span class="eo">bandaĝo</span>: longa tolaĵo por kovri vundon.</p>
			<p><span class="eo">baso</span>: plej malalta vira voĉo.</p>
			<p><span class="eo">bleki</span>: krii kiel besto.</p>
			<p><span class="eo">bubo</span>: petola knabeto.</p>
			<p><span class="eo">ĉevalo</span>: kvarpieda rajdbesto.</p>
			<p><span class="eo">gloro</span>: famo kaj honoro.</p>
			<p><span class="eo">grimaco</span>: tordiĝo de la vizaĝo.</p>
			<p><span class="eo">ĵaluza</span>: timanta pri perdo de kara objekto.</p>
			<p><span class="eo">kapono</span>: kastrita koko, kiun oni manĝas.</p>
			<p><span class="eo">kapreolo</span>: cervosimila besto.</p>
			<p><span class="eo">leopardo</span>: afrika katsimila rabobesto.</p>
		</div>
		<div class="col s12 m6">			
			<p><span class="eo">limako</span>: ĝardena rampuleto.</p>
			<p><span class="eo">masaĝi</span>: kurace premfroti la muskolojn.</p>
			<p><span class="eo">miraĝo</span>: erariga alloga iluzio.</p>
			<p><span class="eo">pantoflo</span>: hejma piedvesto.</p>
			<p><span class="eo">pavo</span>: birdo kun granda bela vosto.</p>
			<p><span class="eo">rimo</span>: versfina samsoneco.</p>
			<p><span class="eo">rubando</span>: longa mallarĝa teksaĵo.</p>
			<p><span class="eo">sentenco</span>: mallonga frazo en havanta ĝeneralan moralan principon.</p>
			<p><span class="eo">soprano</span>: plej alta virina voĉo.</p>
			<p><span class="eo">tamburo</span>: muzikilo, kiun oni batas per bastonoj.</p>
			<p><span class="eo">varti</span>: zorgi infaneton.</p>
			<p><span class="eo">vila</span>: kovrita per densaj mallongaj haroj.</p>
		</div>
	</div>'
  WHERE l.kurso = 'PP' AND l.numero = 24 AND le.ordo = 2;

-- leçon 24, section 3
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##EKZERCO:240:eo##'
  WHERE l.kurso = 'PP' AND l.numero = 24 AND le.ordo = 3;

-- leçon 24, section 4
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##EKZERCO:241:eo####EKZERCO:242:eo####EKZERCO:243:eo####EKZERCO:244:eo####EKZERCO:245:eo##'
  WHERE l.kurso = 'PP' AND l.numero = 24 AND le.ordo = 4;

-- leçon 24, section 5
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##EKZERCO:246:eo####EKZERCO:247:eo####EKZERCO:248:eo##'
  WHERE l.kurso = 'PP' AND l.numero = 24 AND le.ordo = 5;

-- leçon 24, section 6
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##RESUMO##'
  WHERE l.kurso = 'PP' AND l.numero = 24 AND le.ordo = 6;

-- leçon 25, section 1
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<div class="rakonto">
			<h3>FLUGANTAJ SEMOJ</h3>
			
			<p>Antaŭ trideko da jaroj mia patro aĉetis kamparan domon kun terpeco de du-tri hektaroj, plejparte herbokampo kaj iama torfejo. La herbo de nia kampo donis furaĝon por unu ĉevalo, kaj ni sentis nin kiel veraj kamparanoj. Sed dise ni plantis piceojn kaj pinojn, kelkajn betulojn kaj fraksenojn kaj citizojn kaj apud la domo pli delikatajn arbojn kiel tujon, kameciparidon kaj noblan abion.</p>
			<p>Nun disvolviĝas sur nia grundo peco da sovaĝa naturo. Tiuj arboj, kiujn ni plantis, kiam mi estis knabo, fariĝis grandaj, sed tie kaj ĉi tie, en la plej diversaj lokoj, je longa distanco de la grandaj arboj, ekaperas nun amaso da malgrandaj arbetoj, tute surprize, ĉar oni povas konstati, ke ili estas infanoj de la gepatroj, kiuj kreskas malproksime de tiuj lokoj, kie sukcesis enradikiĝi tiuj ĉi novalvenintoj.</p>
			<p>En fora angulo staras granda acero. Ankaŭ ĝi ekhavis nun idojn je longa distanco de sia loko. Ĝia globa nukso portas grandan flugilon, duope la nuksoj formas perfektan ŝvebaviadilon — ĝemeloj kiel ĉiam estas tiuj fruktoj. En kvieta vetero la semo ronde turniĝas, kiam ĝi malleviĝas tra la aero, sed kiam la vento forte blovas, la flugilo helpas al la semo longe forflugi. Neniel, tamen, komparebla kun la betulo, kiu vere nin turmentas sur la grundo.</p>
			<p>Kiel trudherbo la betulo ekaperas ĉie, la fruktetoj estas tre malpezaj kaj krome ĉirkaŭitaj de papere maldika, korforma portilo, por ke la vento povu ilin disen kirli. Sekve fariĝas tro multaj el tiuj belaj, blankŝelaj arboj ĉi tie, kaj nun ni devas haki kaj multe peni por forigi ilin, tiomgrade la etaj, flugantaj konfetoj komencas transpreni la potencon.</p>
			<p>Eĉ nun montriĝis kelkaj ulmoj, kaj ilin tamen ni ĝis nun evitis sur la tereno. Ni malkovris, ke ili sendube devenas de la komunuma vojo, situanta je distanco de kvinminuta promeno de tie ĉi. Forta vento supozeble portis aere la flugilhavajn ulmofruktojn, kaj nun ili desupre falis al ni kvazaŭ manao el la ĉielo, sed malpli bonvenaj ol la manao de la Biblio, al kiu asignis la popola kredo ja i.a. ankaŭ la ulmofruktojn. Kiam mi estis knabo, miaj kamaradoj kaj mi kolektis manaon en la strato antaŭ nia lernejo, de granda parko, kaj ni gustumis la nukseton, kiu sidas en la mezo de la flugilo. Ni imagis al ni la situacion dum la dezerta migrado, tutaj neĝamasoj da tiuj ĉi fruktoj abundis, malavaro de la naturo. Kaj ni imagis al ni la amatan parkon, al si mem tute lasitan, iom post iom transformita al unu grandega arbaro plena de ventokirlita manao.</p>
			<p>Preta, la naturo embuskas ĉie de niaj ĝardenoj kaj kampoj. Se nur malmultajn jarojn ni lasas la bridon, jam transformiĝas tiu tero, kiu antaŭe estis sub plugilo aŭ forkego, kaj fariĝas el ĝi sovaĝa naturo, kreita el senĉesa luktado inter tiuj plantoj, kiuj sin trudas en la regionon de la senbridigita socio de plantoj. Pratempa dana pejzaĝo reaperas, certe ne tre diferenca de tiu mondo, en kiu vivis niaj malproksimaj prapatroj antaŭ du-tri jarmiloj.</p>
			<p>La granda movoforto malantaŭ tiu ĉi proceso de transformiĝo estas la semdisvastiĝo. Kaj antaŭ ĉio la disvastiĝo per la vento portis sian parton al la ŝanĝiĝo de la grandaj, malfermitaj, herbokovritaj ebenaĵoj inter tiuj arboj, kiujn ni plantis, kiam mi estis knabo, al la nuna, fekunda arbara kaj arbetara pejzaĝo, tiel varia kaj rida de sovaĝaj floroj.</p>
			<p>Ĉe la vojeto apud la domo staras miloj da leondentoj — eble la plej potenca floro de nia sovaĝa floraro, potenca, ĉar ĉien ĝi povas penetri, kaj ĉar ĝi per sia fortika pivotradiko solide povas persisti. Estas la perventa disvastigado, kiu ĉeestigas ĝin ĉie ĉe niaj vojoj, en niaj kampoj, en niaj ĝardenoj.</p>
			<p>La leondento estas la unua kaj plej bela floro de nia infaneco. Kun mia knabineto mi eliris por studi ĝin. Singarde ni plukis unu el la finflorintaj kapoj kaj rigardis la malgrandan, iomete volbitan tabureton, kiu estas dense okupita de areto da lanugaj ombreloj, ĉiu portanta unu grajnon. Kaj tiam, per unuigitaj fortoj, ni faris blovan veteran, kaj leviĝis nubeto da paraŝutoj el la malgranda startejo sur la kava flortigo, alte aeren turniĝis la nubeto kaj disflugis en ĉiujn direktojn, disportita de aerfluoj kaj ventetoj, multaj el ĝiaj eroj baldaŭ malaperis el nia vidpovo, for de la patrina planto.</p>
			<p>Ĉe nia kampara domo ni posedas lageton, dense ĉirkaŭitan de fragmito kaj tifao sur preskaŭ sia tuta bordo. Tia granda, grasa tifao konsistas el miloj da grajnoj. Per la ungoj ni povas distaŭzi ilin, kaj la dense kunpremita pelto malfiksiĝas en sennombrajn floketojn, kiujn la vento alten forportas. Ĉe la lago, kie ĝi kreskas, ĉio ja estas okupita. La flokoj bezonas amasflugi super la ĉirkaŭanta pejzaĝo, estas necese, ke ili neĝu de supre al la tuta regiono, por ke iu floko povu ĝermi sur la bordo de alia lageto kun pli da spaco ol ĉe la nia.</p>
			<p>Dise inter la fragmitoj de la lago kaj pli malproksime en la akvo kreskas planto kun belaj konikoj el helruĝaj floroj kaj kun freŝe verdaj folioj. Estas la plantaga alismo — ĝiaj folioj rememorigas pri plantago.</p>
			<p>Alismo forsendas siajn grajnojn en la mondon laŭ la akva vojo. Ĝiaj malgrandaj frukteroj estas nete aranĝitaj en ringo. Se oni dismanipulas la ringon kaj faligas la grajnojn en la akvon, ili restas flosantaj. La vando, kiu ĉirkaŭas la semon, konsistas el grandaj, aerplenaj ĉeloj. La semo portas naĝozonon, flosante sur la akvo ĝi povas fari longan vojaĝon, malproksimen for de la gepatra planto.</p>
			<p>Kiam ĝi estas flosinta dum iom da tempo, la akvo penetras en la naĝozonon, la semo pezigas, la vojaĝo finiĝis, la semo malsupreniĝas al la fundo, kaj ekĝermas. Tiel komencas sian vivon multaj akvoplantoj.</p>
			<p>Ankaŭ ĝis la kamentubo de nia domo disvastiĝis la naturo. Granda urtiko enradikiĝis ĉe ĝia bazo, kaj unu-du metrojn de tie, en la malnova, muskokovrita parto de nia pajlotegmento, ekdisvolviĝis malgranda sorpo. Tiun ĉi lastan praarbaran ĝermon ni facile povas devenigi el vico de sorpoj, kiuj staras apenaŭ cent metrojn disde la domo, kaj kiom koncernas la urtikon, ho ve, tro da ili abundas sur la tereno. Sed de tie ĝis la dorso de la domo, jen tamen salto. Estas bestoj, supozeble birdoj, kiuj prizorgas la transporton tien. Disvastigado de semo per bestoj okazas grandskale. La etaj, malgrandaj urtikgrajnoj facile povas alfiksiĝi sur la plumaro de birdo, kaj la interesiĝo de la birdoj al la sorpaj beroj estas perfekta faktoro en la disvastiĝbiologio de la arbo: la ruĝaj beroj logas la birdojn al kunlaboro.</p>
			<p>La sturnoj atakas niajn ĉerizojn — la vivo estas vigla en la arboj, kaj tio estas pli je la profito de la arboj ol de ni. Grajnoj el multaj plantoj estas manĝataj tutaj kun la dika, ŝirma ŝelo, kaj eble ili finas la vojaĝon, perditaj en la ekskrementoj de birdo aŭ pli granda besto, en iu malproksima loko, kie la kondiĉoj por ĝermado estas favoraj. En bovina kuko aŭ en ĉevala piro, perdita ie en la erikejo, elĝermas plantetoj nekonataj tie, kie regas eriko kaj mirtelo.</p>
			<p>La lapon kun ĝia densa ekipaĵo de hokoj oni apenaŭ povas forŝiri el trikita bluzo. La solidaj hoketoj efektive prizorgas, ke la infloreskoj de la lapo kiel kaŝpasaĝeroj estu longe forportataj sur la felo de besto, for al lokoj, kie estas pli da ŝancoj, por ke la semo ĝermu, ol en densa kreskaĵaro de larĝfoliaj lapoj. Ankaŭ asperulo, hundolango, galio, agrimonio jam longe antaŭ Odiseo konis la avantaĝon esti ŝtelportata de besta felo.</p>
			<p>Grandaj bestoj kaj malgrandaj bestoj agas kiel semistoj. Ursoj, paseroj kaj formikoj. Sur nia tereno ni havas du-tri konsiderindajn formikejojn de la rando de abiaro. Iliaj etaj loĝantoj urĝe portadas siajn blankajn, ovosimilajn pupojn, sed ankaŭ aliaj objektoj estas transportindaj, i.a. grajnoj — pli ol cent metrojn ili pene povas forporti ilin. Grajnoj de violo kaj primolo kaj multaj aliaj plantoj surhavas oleoriĉan kaj vitaminhavan alpendaĵon, kiun la formikoj ŝatas manĝi, kaj kiu instigas ilin forporti la grajnojn. En la tropikoj la formikoj portas grajnojn kaj fruktojn supren al la arboj kaj aranĝas milojn da pendantaj ĝardenetoj, mejlojn vaste en la kunplektitaj branĉoj de la praarbaro.</p>
			<p>Sed aliaj plantoj disvolvas en siaj ŝajne tiel delikataj ĉelaroj sufiĉe da energio por povi mem dissendi en la mondon siajn grajnojn per forta puŝo. En nia vilaĝo estas ĝardenisto, kiu travivis invadon de balzamino sur sia tero. Antaŭ kvar-kvin jaroj li ricevis ĉaron da arbara humo por siaj potplantoj. La humamaso kuŝis iom da tempo de la rando de la hortikulturejo. La postan someron aperis la unuaj balzaminoj, kaj jaro post jaro ili disvastiĝis kaj nun atingis de unu fino de la entrepreno ĝis la alia kaj ankoraŭ eĉ konsiderindan distancon en la ĝardenon de la najbaro. Tra tiuj jaroj oni povis observi la progresantan fronton de la balzaminaj trupoj, ĝis fine ili nun okupadis la tutan hortikulturejon.</p>
			<p>La balzamino kun sia fragila sukstreĉo estas ĉarma planto. Ĝi havas fajroruĝan tigon, freŝe verdajn foliojn, flavajn kun ruĝaj punktoj, ĝia longa frukto estas kapsulo kun multaj grajnoj. La frukto estas la pafilo de la planto. Se oni tuŝas per fingro ĝian pinton, ĝi krakete eksplodas, kaj grajnoj dissaltas en ĉiujn direktojn. En frakcio de sekundo la diskrevinta frukto retroruliĝas kaj finas sian ekziston falante al la tero kiel taŭzita fadenaro, dum la grajnetoj rapidegas for de la gepatra planto. Aktiva, drama memdisvastigo de semo.</p>
			
			<p><b>Paul Neergaard</b> (el <i>La Vivo de la Plantoj</i>)</p>

		</div>'
  WHERE l.kurso = 'PP' AND l.numero = 25 AND le.ordo = 1;

-- leçon 25, section 2
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<div class="vortlisto row">
		<div class="col s12 m6">
			<p><span class="eo">abio</span>: konifera arbo.</p>
			<p><span class="eo">acero</span>: speco de arbo.</p>
			<p><span class="eo">agrimonio</span>: speco de herbo.</p>
			<p><span class="eo">aktiva</span>: agema.</p>
			<p><span class="eo">alismo (plantaga)</span>: speco de herbeca marĉoplanto.</p>
			<p><span class="eo">asigni</span>: destini, disponigi.</p>
			<p><span class="eo">asperulo</span>: speco de floro.</p>
			<p><span class="eo">balzamino</span>: speco de planto.</p>
			<p><span class="eo">bero</span>: frukto de diversaj plantoj.</p>
			<p><span class="eo">betulo</span>: blankligna arbo.</p>
			<p><span class="eo">bluzo</span>: vesto por la supra korpoparto.</p>
			<p><span class="eo">citizo</span>: arbo kun flavaj floroj.</p>
			<p><span class="eo">ĉerizo</span>: ruĝkolora bongusta frukto.</p>
			<p><span class="eo">ekskremento</span>: tiu parto de la nutraĵo, kiun oni poste eligas el la korpo.</p>
			<p><span class="eo">embusko</span>: sinkaŝo por surprize ataki malamikon.</p>
			<p><span class="eo">eriko</span>: arbeto kun rozaj aŭ blankaj floroj.</p>
			<p><span class="eo">faktoro</span>: kaŭzo de fenomeno.</p>
			<p><span class="eo">fragila</span>: tiel delikata ke ĝi facile rompiĝus.</p>
			<p><span class="eo">fragmito</span>: speco de fortika herbo.</p>
			<p><span class="eo">frakcio</span>: ono.</p>
			<p><span class="eo">frakseno</span>: arbo kun fleksebla ligno.</p>
			<p><span class="eo">furaĝo</span>: manĝaĵo por bestoj.</p>
			<p><span class="eo">galio</span>: speco de planto.</p>
			<p><span class="eo">grajno</span>: malgranda semo.</p>
			<p><span class="eo">ĝemelo</span>: dunaskito.</p>
			<p><span class="eo">ĝermo</span>: komenca formo de estonta vegetaĵo aŭ besto</p>
			<p><span class="eo">haki</span>: battranĉi.</p>
			<p><span class="eo">hektaro</span>: unuo do termezurado.</p>
			<p><span class="eo">hoko</span>: pinta ferkurbaĵo.</p>
			<p><span class="eo">hortikulturo</span>: la metio kulturi plantojn.</p>
			<p><span class="eo">humo</span>: nigrebruna tero uzata kiel sterko.</p>
			<p><span class="eo">infloresko</span>: la aranĝo de floroj sur tigo.</p>
			<p><span class="eo">invadi</span>: perforte eniri kaj okupi.</p>
			<p><span class="eo">kameciparido</span>: konifera arbo.</p>
			<p><span class="eo">kameno</span>: fajrujo.</p>
			<p><span class="eo">konfetoj</span>: karnavalaj paper-pecetoj.</p>
			<p><span class="eo">kapsulo</span>: skatoletforma ujo.</p>
			<p><span class="eo">koniko</span>: duaorda kurbo.</p>
			<p><span class="eo">kuko</span>: franda bakaĵo.</p>
			<p><span class="eo">lanugo</span>: delikata plumaro aŭ hararo.</p>
			<p><span class="eo">lapo</span>: speco de planto.</p>
		</div>
		<div class="col s12 m6">			
			<p><span class="eo">manao</span>: ĉiela nutraĵo.</p>
			<p><span class="eo">mejlo</span>: mezuro de distanco.</p>
			<p><span class="eo">metro</span>: mezuro por linioj.</p>
			<p><span class="eo">migri</span>: translokiĝi de loko al loko.</p>
			<p><span class="eo">mirtelo</span>: speco de arbeto.</p>
			<p><span class="eo">nukso</span>: frukto en malmola ŝelo.</p>
			<p><span class="eo">Odiseo</span>: heroo de greka poemo, kiu dek jarojn vagadis tra la mondo.</p>
			<p><span class="eo">ombrelo</span>: kontraŭpluva ŝirmilo.</p>
			<p><span class="eo">ovo</span>: maturiĝonta bestĝermo en ŝelo.</p>
			<p><span class="eo">paraŝuto</span>: aparato por malrapide fali tra la aero.</p>
			<p><span class="eo">parko</span>: publika plezurkampo.</p>
			<p><span class="eo">pasero</span>: birdspeco.</p>
			<p><span class="eo">pelto</span>: speciale preparita felo.</p>
			<p><span class="eo">piceo</span>: konifera arbo.</p>
			<p><span class="eo">pino</span>: konifera arbo.</p>
			<p><span class="eo">piro</span>: bongusta frukto.</p>
			<p><span class="eo">plantago</span>: ofta plurjara herbo.</p>
			<p><span class="eo">plugi</span>: tranĉi la teron per speciala kulturilo.</p>
			<p><span class="eo">pluki</span>: deŝiri floron.</p>
			<p><span class="eo">poto</span>: speco de vazo.</p>
			<p><span class="eo">primolo</span>: printempa floro.</p>
			<p><span class="eo">radiko</span>: subtera parto de vegetaĵo, per kiu ĝi alsuĉas nutraĵon.</p>
			<p><span class="eo">retro-</span>: sufikso, kiu signifas “dorseniri”.</p>
			<p><span class="eo">ringo</span>: cirkloformaĵo.</p>
			<p><span class="eo">skalo</span>: dimensioj de desegnaĵo rilate al la reala objekto.</p>
			<p><span class="eo">sorpo</span>: arbo, kies fruktojn oni manĝas tromaturajn.</p>
			<p><span class="eo">sturno</span>: speco de birdo.</p>
			<p><span class="eo">taŭzi</span>: ĉifante malordigi.</p>
			<p><span class="eo">tereno</span>: difinita terspaco.</p>
			<p><span class="eo">tifao</span>: speco de marĉherbo.</p>
			<p><span class="eo">tigo</span>: flortrunketo.</p>
			<p><span class="eo">torfo</span>: spongeca substanco, per kiu oni povas hejti.</p>
			<p><span class="eo">triki</span>: teksi per vergetoj.</p>
			<p><span class="eo">tropiko</span>: paralelo je 23° de la ekvatoro.</p>
			<p><span class="eo">trupo</span>: soldataro.</p>
			<p><span class="eo">tubo</span>: longa kava cilindro.</p>
			<p><span class="eo">tujo</span>: konifera arbo.</p>
			<p><span class="eo">ulmo</span>: speco de fortika arbo.</p>
			<p><span class="eo">urso</span>: speco de granda rabobesto.</p>
			<p><span class="eo">vitamino</span>: helpa nutrofaktoro necesa por la sano.</p>
		</div>
	</div>'
  WHERE l.kurso = 'PP' AND l.numero = 25 AND le.ordo = 2;

-- leçon 25, section 3
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##EKZERCO:249:eo##'
  WHERE l.kurso = 'PP' AND l.numero = 25 AND le.ordo = 3;

-- leçon 25, section 4
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##EKZERCO:250:eo####EKZERCO:251:eo##'
  WHERE l.kurso = 'PP' AND l.numero = 25 AND le.ordo = 4;

-- leçon 25, section 5
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##EKZERCO:252:eo####EKZERCO:253:eo##'
  WHERE l.kurso = 'PP' AND l.numero = 25 AND le.ordo = 5;

-- leçon 25, section 6
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##RESUMO##'
  WHERE l.kurso = 'PP' AND l.numero = 25 AND le.ordo = 6;

-- leçon 26, section 1
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<div class="rakonto">
			<h3>KIEL NI MORTIGADIS LEPORON POR LA ANTAŬKRISTNASKA VESPERAMANĜO</h3>
			
			<p>Pasintjare je Kristnasko ricevis la patro de iu sia kolego en la oficejo vivan leporon. Ĉi tiun pliriĉigon de la antaŭkristnaska manĝokarto kvitancis la tuta familio kun dankemo kompreneble, krom la avineto, kiu ĉiam opoziciis. Sed eĉ ŝi, vidante, ke ŝi estis de la familia konsilantaro voĉdone superita, eĉ ŝi submetis sin al ĉi tiu decido, kaj kiel persono sperta ŝi prenis sur sin la taskon organizi la tutan preparon de la leporo por la antaŭkristnaska vespermanĝo. Poste la avineto elserĉis en “La hejma konsilanto” la devizon “Leporo”, kie estis skribite (paĝo 824): “Mortigado de la leporo — vidu la samon sub la devizo ‘Kuniklo’.” Ĉi tiu saĝa libro poste konsilis, ke “kuniklon, same kiel leporon, ni ekprenos je malantaŭaj kruroj kaj mortigos per bato inter la orelojn” (paĝo 381). Post ĉi tiu grava konstato estis la taskoj dividitaj jene: la patro — mortigo de la leporo, la patrino — ĝia prilaboro. La frato Fabiano estis tenonta la leporon je kruroj. La avineto — kontrolo de la tuta procedo. La aveto estis destinita kiel unua, mi kiel dua rezervulo.</p>
			<p>Poste do la afero komenciĝis. La patro suprenfaldis al si la manikojn, elprenis la leporon el kesteto kaj transdonis ĝin al la frato Fabiano, kiu — laŭ la konsilo — ekprenis ĝin je malantaŭaj kruroj. La patro dismetis la gambojn, trifoje profunde ekspiris kaj levis la manon, por doni al la leporo mortigan baton; sed subite la animalo ekkomprenis, ke la afero fariĝas grava — ĝi ekskuiĝis, kaj Fabiano kontraŭvole ĝin liberlasis. Anstataŭ la leporo ricevis la baton Fabiano; por la plua batalo li estis tiamaniere perdita.</p>
			<p>La avineto (kaj samtempe estro de nia familio) kiel unua ekkomprenis la situacion kaj ekkuregis kontraŭ la leporo, kiu en senpripensa fuĝo zigzage kuregis tra la ĉambro. Bedaŭrinde, ŝia fulmorapida ago restis senefika, ĉar la leporo enkuris malantaŭ la ŝrankon — kaj evidente ĉi tiu loko al ĝi ekplaĉis, ĉar ĝi ne montris multe da emo ĉi lokon forlasi. Intertempe rekonsciiĝis kaj organizis sin pluaj taĉmentoj, kaj post pli longa proklamo de la avineto, ke ŝi kontraŭstaris kaj avertis, kaj post mallonga familia interkonsento estis decidite la leporon elpeli kun helpo de balailo. Ĉi tiu ideo estis tuj realigita. La atendata rezulto ne venis, ĉar la leporo forkuradis antaŭ la balailo, sed ne forlasadis la lokon malantaŭ la ŝranko. La patrino alkuris kun brosbalailo, por helpi elpeli ĝin de la alia flanko. Ne vidante alian eblon, la leporo subrampis la ŝrankon, kaj ree komencis senpripense kuregi zigzage tra la ĉambro. En la batalon intermetis sin la patro; li ĵetegadis post la leporon kuirtranĉilojn — sed li sukcesis nur frakasi la vitron en la fenestro, unu tranĉilon rompi kaj unu enigi en la pordon tiel profunden, ke ne estis eble ĝin eltiri. En ĉi tiu fazo de la batalo mi rangaltiĝis je unua rezervulo, ĉar mi nokaŭtis la aveton per viandpistilo.</p>
 			<p class="center">⁂</p>
 			<p>Post plua horo de la batalo estis mallonga ripozo, kiun uzis ankaŭ la leporo. Ĝi estis en angulo, moke vidigis la dentojn kaj starsidis. Tion mi ne povis toleri, kaj tial mi ĵetegis post ĝin denove la viandpistilon; ĉi-tiufoje detruiĝis nur vitro de la librosŝranko. La batalo denove komenciĝis kun ankoraŭ pli granda rapideco kaj vervo, sed montriĝis, ke ĉiuj disponeblaj bataliloj, t.e. balailo, brosbalailo, resto da kuirtranĉiloj kaj viandpistilo, ke ĉiuj tiuj rimedoj ne sufiĉas. Subite venis al mi savoporta ideo: mi enkuris la loĝejĉambron kaj alportis al la patro kuglopafilon, por ke li mortigu la leporon tiumaniere. La patro ekcelis, sed poste li ŝanĝis sian decidon kaj donis al mi kapofrapon; kaj kiam li ekvidis, ke la leporo intertempe enkuris la loĝejĉambron, ĉar mi lasis la pordon malfermita, mi ricevis ankoraŭ unu kapofrapon. Jes, tiel la mondo rekompencas!</p>
 			<p>La batalo transportiĝis en la loĝejĉambron, kio estis granda avantaĝo — por la leporo, kompreneble. Ĉi tie ĝi trovis multe pli da ebloj por defendo, kaj estas necese aldoni, ke ĝi uzis ilin rimarkinde. De tempo al tempo ĝi haltis kaj starigis la orelojn — sed tuj ĝi denove daŭrigis la vojon, ne permesante al ni respiri. La situacio estis senespera; la tempo senkompate pasis — estis jam la naŭa vespere, kaj ni ankoraŭ senĉese ĉaspeladis la leporon, kiu kontraŭstaris al sia fatalo kaj estis kuranta de unu angulo al la alia, entute malatentante, ke ĝi estas destinita al la antaŭkristnaska vespermanĝo. La patro intertempe rompis ĉiujn restantajn tranĉilojn, kaj komencis do ĵetegadi post la leporon diversajn aĵojn, ekzemple paperpezilojn, cindrujojn, ŝuojn kaj inkujojn; kelkajn el tiuj aĵoj li sukcesis detrui komplete, aliajn nur parte.</p>
 			<p>La persekutado denove ĉesis, ĉar estis necese solidigi la fortojn por plua, eble jam fine decidiga fazo de la batalo. La ĝisnuna stato de la batalo estis jena:</p>
 			<p>A. La leporo:<br>
	 		&nbsp;&nbsp;&nbsp;&nbsp;viva kaj sana, perdoj: neniaj.</p>
	 		<p>B. Nia familio:</p>
		 	<p>&nbsp;&nbsp;&nbsp;&nbsp;1. hom-perdoj:<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;a. la frato Fabiano intertempe rekonsciiĝis - sed vidante, ke la batalo furiozas sur alia fronto (en la loĝejĉambro), li uzis la okazon kaj eltrinkis al la patro duonon da botelo kun sorpa likvoro. Post malebriiĝo li estos transdonita al la milita tribunalo. Por plua batalo — malkapabla.<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;b. la aveto ĝis nun ne rekonsciiĝis.<br>
		 	&nbsp;&nbsp;&nbsp;&nbsp;2. material-perdoj:<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;a. du fenestroj kaj vitro de la libroŝranko frakasitaj, kvin kuir-tranĉiloj rompitaj, entute aŭ parte detruitaj kvar cindrujoj, du paperpeziloj, unu seĝo, unu brosbalailo, unu fajrostango.<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;b. pluaj perdoj: ĝenerala stato de ambaŭ ĉambroj: kaduka. Estas necese alvoki la ĉambropentriston, lakiston, tapetiston kaj mebliston.</p>
			<p>Post rekomenco de la batalo plenumiĝis la sorto de dekduo da desert-teleroj, kiujn la avineto ĵetegadis post la leporon kiel diskon, plue detruiĝis la edziniĝ-dotaĵo de teleroj kaj supujoj de mia patrino (mi piedpuŝetis — ĝis nun mi ne scias, kion — kaj detiris la tablotukon de sur la manĝopreparita tablo). La patrino faligis la kristnaskan arbeton, kiu brulneniiĝis. La batalo venis al sia kulmino. Laŭ ordono de estro de la ĉefa stabo (= la avineto) mi malfermis la pordon en la kuirejon. La leporo ne antaŭvidis ruzon kaj denove enkuris la manĝaĵ-preparejon — sed ho ve! La afero finiĝis tute alie, ol ni atendis. Nome, subite iu ekfrapetis sur la pordon, kaj antaŭ ol ni povis iel reagi, la pordo malfermiĝis kaj malkaŝis al niaj surprizitaj okuloj nian najbarinon, sinjorinon Nováčková. “Bonan vesperon, feliĉan kaj gajan Kristnaskon — kaj sanon, ĉefe la sanon, ĝi estas la plej grava”, babilaĉis la najbarino el la pordo, eĉ iomete ne zorgante pri tio, ke la patro superŝutas ŝin per koleregaj rigardoj. Ni ĉiuj estis tiom surprizitaj per ŝia subita ekapero, ke ni ne estis kapablaj ekprotesti. Ankaŭ la leporo atenteme aŭskultis, sed vidante, ke ĉi tie ĝi ekscios nenion novan, ĝi uzis la okazon, ke la pordo restis malfermita, kaj definitive entombigis niajn esperojn pri sengrasa lepora rostaĵo. La patro terure ekmalbenis, enfalis en la dialogon de la najbarino per ia stranga preĝo, ‘Dio mia, pardonu al mi, ke mi ekbategos ĉi virinaĉon — sed forprenu de mi iom da forto, por ke mi ne ekbategu ŝin tro, ĉar alie oni povus min malliberigi’, kaj poste ĵetiĝis kontraŭ sinjorino Nováčková; sed ŝi antaŭvidis la danĝeron kaj fuĝis. Iam mi aŭdis, ke malkontentigita kolerego povas malbone efiki je la sano; tial la patro — por eviti la eblajn sekvojn — donis al mi du kapofrapojn, ĉiujn ceterajn ekinsultis kaj foriris en restoracion, por tie vespermanĝi.</p>
			<p>Jen, kiel ununura animalo povas detrui la trankvilon de la tuta familio! La patro forestas, la patrino ploras en la kuirejo, kaj la avineto prelegas al la kvar nudaj muroj pri tio, ke ŝi konsilis bone — sed neniu pri tio zorgis.</p>
			<p>Intertempe rekonsciiĝis la aveto kaj la frato Fabiano — sed tro malfrue; tiel ili fariĝis nur atestantoj de la malglora fino de la batalo. Volante helpi mildigi la pezan familian atmosferon, Fabiano komencis elakvigadi malgrandajn fiŝetojn el la akvario de la patro — laŭdire por la solena vespermanĝo. Pro ĉi tiu neaŭdita kaj malpia ago kondamnis lin la aveto juĝisto al batpuno. Fabiano kronis sian pledparolon per vortoj, ke li agis sub influo de alkoholo kaj pro la juneca senpripenseco — sed la aveto estis senindulga. Vortoj de la verdikto plenumiĝis, pro kio la avino pridonacis la plenumanton per la nomo “la maljuna kanajlo”— ĉar kulpas ne la bubo, sed la malbona edukmaniero. Malŝarĝinte sian koron, la avineto foriris al noktmeza meso, la aveto — en gastejon.</p>
			<p>Ĉiuj foriris — kaj mi restu hejme? Ankaŭ mi forlasis la naskiĝdomon, por partopreni en nia ŝatata antaŭkristnaska ludo. Sciu, estis ĉe ni unu germandevena mokinda policano; li nomiĝis Frederiko Fric, sed ni principe kaj senescepte nomis lin “Zweimal Fric”*. Je kio li estis pli ridinda, je tio li volis esti pli severa. Precipe li zorgis pri nokta trankvilo; li paŝis tra la stratoj, ĉiuvespere post la deka horo, antaŭkristnaske post la noktomezo, kaj atentis, ke neniu bruu kaj ke ĉiuj iru en ordo hejmen. Ni elpensis jenan ludon: ni diskuris tra la ĉefplaco, kaj subite unu el ni forte ekfajfis tra la fingroj. Zweimal Fric tuj kuris al li kaj serĉis la fajfilon (kiun, kompreneble, li trovis neniam); la akuzito malkonfesadis, mi ne fajfis — kaj subite aŭdiĝis fajfado el la kontraŭa flanko. Li do kuris tien, sed fajfsonoj senĉese antaŭ li forkuris. Konkludinte, ke ni pellacigis lin sufiĉe, ni kuniris sur antaŭe interkonsentita loko, per la tuta forto ekkriegis: “Zweimal Fric!”, kaj poste ni disiris hejmen.</p>
			<p>Mi do ĝojis, kiel Zweimal Fric ree estos kuranta tra la stratoj, sed ĉi jare la ludo ne okazis — kaj mi tuj diros al vi, kial. Mi elkuris el la domo — kaj kion mi vidas? Zweimal Fric pelas tra la strato nian leporon! Renversita mondo! Leporoj kuras tra la stratoj — ĉu li, la ŝtata oficisto, povas tion toleri? Li devas ĝin elpeli el la urbo. Kion dirus al li alie liaj superuloj?</p>
			<p>La leporo kuras sur la trotuaron, zigzagas, nun estas sur la ŝoseo — sed la policano ne laciĝas kaj sekvas ĝin kaptoproksime. Sed — kapti ĝin? Sensencaĵo! De maldekstre ruliĝas ŝarĝ-aŭtomobilo, de dekstre ankaŭ: la haltigiloj ekgrincas, tintas vitro, ekkrio — sed la leporo elkuras viva kaj sana, kaj post ĝi — Zweimal Fric. Dank’ al Dio, okazis nenio, ankaŭ ambaŭ ŝoforoj ĝustatempe elsaltis, sed la aŭtomobilojn riparos neniu plu.</p>
			<p>La leporo daŭrigas, Zweimal Fric ĝin postsekvas. Kontraŭ ili paŝas avo kun bastono en la mano. La leporo enkuras al li sub la piedojn, la maljunulo perdas la ekvilibron, falas kaj en instinkto de memsavo eksvingas la bastonon, kiu trovas kiel celon la polican kaskon kaj surkapigas ĝin al Zweimal Fric ĝis la oreloj. La persekutado finiĝas — la leporo venkas kaj fuĝas, senĉese fuĝas for el la urbo. Ankoraŭfoje ĝi kaŭzas karambolon — ĉi-tiufoje de kvar aŭtomobiloj kaj unu motociklo — sed fine ĝi atingas la sopiratan arbar-randon kaj malaperas.</p>
			<p>Zweimal Fric versimile vidis, ke la leporo elkuris el nia domo, kaj nia najbarino certe volonte al li sciigis, al kiu la leporo apartenis; alie mi ne scias klarigi al mi la fakton, kial la sekvantan tagon ekfrapis du policistoj senhezite ĝuste sur nian pordon. La patro ilin elĵetis, ekinsultis la najbarinon kaj eltrinkis reston da sorpa likvoro. Poste lia rimeno ekdancis sur certa korpoparto de la frato Fabiano, por ke li memoru ke alkoholaĵo ne estas taŭga trinkaĵo por infanoj — kaj kvankam mi eltrinkis nenion, ankaŭ mi havis la okazon gajni spertojn, ĉu la batregaligo per rimeno estas agrabla.</p>
			<p>Necesas aldoni, ke la patron oni juĝos pro ofendo de ŝtata oficisto kaj ke li devas aĉeti al la policano Zweimal Fric novan kaskon. La patrino senĉese ploras. La avineto forloĝiĝis, la aveto pasigas la tutajn tagojn en gastejo. La frato Fabiano forkuris el la hejmo, kaj mi malsukcesos en naturscienco. Krome oni klasifikos miajn morojn kiel “ankoraŭ malkontentigajn”, ĉar mi estas aroganta. Diris al mi tion la instruisto, ĉar al lia demando, kion mi scias pri leporo, mi respondis “nenion”, kaj poste mi rakontis al li ĉi tiun historieton.</p>

 
			<p><b>Vladimír Vaňa</b> (el <i>Esperanto</i>)</p>
		</div>
		
		<p>* germana vorto “Zweimal” signifas en esp. traduko “duoble”.</p>'
  WHERE l.kurso = 'PP' AND l.numero = 26 AND le.ordo = 1;

-- leçon 26, section 2
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<div class="vortlisto row">
		<div class="col s12 m6">
			<p><span class="eo">akvario</span>: vitra akvujo en kiu estas fiŝoj.</p>
			<p><span class="eo">animalo</span>: vivanta estaĵo, sed ne vegetaĵo.</p>
			<p><span class="eo">aroganta</span>: impertinenta, fieraĉa.</p>
			<p><span class="eo">balai</span>: forpuŝi polvon aŭ malpuraĵon.</p>
			<p><span class="eo">broso</span>: speciala ilo uzata por forigi malpuraĵon.</p>
			<p><span class="eo">deserto</span>: lasta parto de manĝo.</p>
			<p><span class="eo">disko</span>: metala ronda plataĵo uzata en ĵetludoj.</p>
			<p><span class="eo">doto</span>: geedziĝa havaĵo.</p>
			<p><span class="eo">ekvilibro</span>: egalpezeco.</p>
			<p><span class="eo">faldi</span>: refleksi ion maldikan, tiel ke unu parto kuŝas sur alia.</p>
			<p><span class="eo">fazo</span>: evolustadio.</p>
			<p><span class="eo">gambo</span>: kruro.</p>
			<p><span class="eo">grinci</span>: eligi malagrablan frotsonon.</p>
			<p><span class="eo">kaduka</span>: ruiniga.</p>
			<p><span class="eo">karamboli</span>: kolizii.</p>
			<p><span class="eo">kasko</span>: soldata aŭ oficista kapŝirmilo.</p>
			<p><span class="eo">klasifiki</span>: aranĝi laŭ klasoj aŭ gradoj.</p>
			<p><span class="eo">kristo</span>: laŭ la kristanoj, la filo de dio.</p>
			<p><span class="eo">kuglo</span>: konusforma metalaĵo, kiun oni ĵetas per pafilo.</p>
			<p><span class="eo">kulmino</span>: la plej alta punkto, la ekstremo.</p>
			<p><span class="eo">kvitanco</span>: ricevatesto.</p>
		</div>
		<div class="col s12 m6">			
			<p><span class="eo">leporo</span>: longorela besteto simila al kuniklo.</p>
			<p><span class="eo">likvoro</span>: alkoholaĵo.</p>
			<p><span class="eo">maniko</span>: parto de vesto, kiu kovras la brakon.</p>
			<p><span class="eo">meso</span>: katolika diservo.</p>
			<p><span class="eo">motociklo</span>: biciklo kun motoro.</p>
			<p><span class="eo">nokaŭti</span>: senkonsciigi per bato.</p>
			<p><span class="eo">opozicio</span>: kontraŭstaro.</p>
			<p><span class="eo">pisti</span>: batpecetigi.</p>
			<p><span class="eo">procedo</span>: difinita agmaniero.</p>
			<p><span class="eo">proklami</span>: oficiale kaj publike anonci.</p>
			<p><span class="eo">rimeno</span>: longa mallarĝa leda strio.</p>
			<p><span class="eo">stabo</span>: armeestraro.</p>
			<p><span class="eo">stango</span>: longa peco de ligno aŭ metalo.</p>
			<p><span class="eo">supo</span>: manĝaĵo el akvo, en kiu oni kuiris viandon kaj legomojn.</p>
			<p><span class="eo">ŝoforo</span>: kondukisto de aŭtomobilo.</p>
			<p><span class="eo">ŝranko</span>: meblo, en kiu oni pendigas vestojn aŭ konservas manĝaĵojn.</p>
			<p><span class="eo">taĉmento</span>: aro da homoj senditaj por speciala celo.</p>
			<p><span class="eo">tinti</span>: seke resoni.</p>
			<p><span class="eo">tribunalo</span>: juĝistaro.</p>
			<p><span class="eo">trotuaro</span>: apudvoja irejo por piedirantoj.</p>		
		</div>
	</div>'
  WHERE l.kurso = 'PP' AND l.numero = 26 AND le.ordo = 2;

-- leçon 26, section 3
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##EKZERCO:254:eo##'
  WHERE l.kurso = 'PP' AND l.numero = 26 AND le.ordo = 3;

-- leçon 26, section 4
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##EKZERCO:255:eo####EKZERCO:256:eo####EKZERCO:257:eo####EKZERCO:258:eo####EKZERCO:259:eo##'
  WHERE l.kurso = 'PP' AND l.numero = 26 AND le.ordo = 4;

-- leçon 26, section 5
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##EKZERCO:260:eo##'
  WHERE l.kurso = 'PP' AND l.numero = 26 AND le.ordo = 5;

-- leçon 26, section 6
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##RESUMO##'
  WHERE l.kurso = 'PP' AND l.numero = 26 AND le.ordo = 6;

-- leçon 27, section 1
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<div class="rakonto">
			<h3>ROBERT BURNS KIEL MONDPOETO</h3>
			
			<p>Ĉiujare pli ol 100&nbsp;000&nbsp;vizitantoj venas al la Burns-Muzeo en Alloway, apud Ayr en sudokcidenta Skotlando, apud la malgranda farmdomo, kie Robert Burns naskiĝis dum la ŝtorma nokto de la 25-a de januaro, 1759. Ĉiujare novaj tradukoj de la poemoj de Burns aperas en multaj lingvoj. Mi ĵus ricevis belan volumon de polaj versversioj de D-ro Stanisław Kryński kaj aliaj. En Moskvo mi ricevis kun plezuro de Samuel Jakovleviĉ Marŝak ekzempleron de liaj bonegaj rusaj tradukoj; li informis min, ke nur malfacile li akiris ekzmpleron por mi, kvankam oni presigis 200&nbsp;000&nbsp;ekzemplerojn de ĉiu eldono; tiel entuziasme la rusoj aĉetas kaj legas Burns. Ĉinaj, hindustanaj, afrikansaj, hungaraj, eĉ anglaj tradukoj estas daŭre entreprenitaj; kio estas tiom pli surpriza, ĉar la plej bonaj el la poemoj estas verkitaj en la skota lingvo, kiun jam dum generacioj la eduka sistemo malmulte kultivis, kaj kiu nun malfortiĝas kaj estas diluata per alsimiliĝo al la angla aŭ usona por sia ĉiutaga uzado inter la nuntempaj loĝantoj de Skotlando, eĉ en kamparaj paroĥoj, kie ĝi plej vigle vivadas.</p>
			<p>Evidente la enhavo pli ol la lingvo aŭ la stilo rekomendis la poezion de Burns al milionoj en multaj landoj dum preskaŭ du jarcentoj post lia unua eldono en 1786. Post malpli ol unu jaro jam aperis usona eldono; la presisto konstatis, ke li trovos pretan merkaton por la malkaŝaj radikalaj demokratiaj diraĵoj de la skota poeto. La unua poemo mem, <i>La Du Hundoj</i>, en la malnova tradicio de la bestfablo, konsistas el konversacio inter la Newfoundland-dorlothundo (Caesar) de terposedanto, kaj la ŝafhundo de plugisto (Luath), pri socio kaj politiko. Burns vivis dum ekonomia revolucio, kiam la agentoj de la terposedantoj ofte senkompate forpelis familiojn de la bienoj por faciligi agrikulturajn plibonigojn. La ŝafhundo de la plugisto komentas:</p>
 
			<p>&nbsp;&nbsp;&nbsp;<i>Tre multaj homoj plej honestaj,<br>
			&nbsp;&nbsp;&nbsp;Virtemaj, decaj kaj modestaj,<br>
			&nbsp;&nbsp;&nbsp;Estas krudmane forpelitaj<br>
			&nbsp;&nbsp;&nbsp;De orgojluloj mon-avidaj…</i></p>
 
			<p>Samtempe Burns ĉiam rigardis la individuan homon, kaj ne kondamnis individuojn simple pro ilia klasa aparteno. La sama hundo poste komentas pri la terposedantoj:</p>
 
			<p>&nbsp;&nbsp;&nbsp;<i>El tiu brava trup’ fervora<br>
				&nbsp;&nbsp;&nbsp;Neniu estas malickora.</i></p>
 
			<p>Burns havis potencan intelekton, kaj kapablis partopreni la intelektajn diskutojn de la edinburga socio, en epoko kiam la Edinburga Universitato troviĝis inter la du-tri kulturaj centroj de la mondo. Sed lia koro, la fonto de emocio, emis venki lian kapon, kaj li mem skribis: “La koro, la mentoro de bono kaj malbon’.”</p>
			<p>Ĝuste pro la impulsoj de sia koro Burns enretiĝis en amaferojn, kiuj inspiris multajn el liaj plej belaj kantoj, kaj kondukis al okazaj malagrablaĵoj kun la eklezia aŭtoritato. Jean Armour, la bonkora edzino de la Poeto, traktis trankvilanime la deviojn de sia pasia edzo, simple komentante, “Nia Roĉjo estus devinta havi du edzinojn,” eĉ kiam li alportis en la hejmon, por ke ŝi lin vartu, la bastardan infanon, kiun naskis al li servistino en la loka trinkejo en Dumfries. Malamante hipokritecon, Burns verkis satirojn kiel <i>La Preĝo de Pia Vilĉjo</i> pri hipokritaj personecoj en la eklezia ortodoksio.</p>
			<p>Kiel kritikanto de politikaj moroj, Burns ne timis paroli kontraŭ la senkoraj intrigoj de la kortegoj kaj aristokrataro luktantaj por privilegioj. Li demandis:</p>
 
			<p>&nbsp;&nbsp;&nbsp;<i>Kial pli bonstatas unu,<br>
				&nbsp;&nbsp;&nbsp;Se l’ homoj fratas?</i></p>
 
			<p>Kaj li advokatis la fundamentan valoron de la ordinaraj homoj:</p>
 
			<p>&nbsp;&nbsp;&nbsp;La rang’  - la homon stampas nur,<br>
			&nbsp;&nbsp;&nbsp;Sed estas hom’ la oro!*</p>
 
			<p>Burns aprobis la batalon de la amerikaj koloniistoj por sendependeco dum la 1770-aj jaroj, kaj ankaŭ la Francan Revolucion dum ĝia plej frua fazo de aspiro al Libereco, Egaleco kaj Frateco, ĉar li antaŭvidis epokon kiam “homo sur la tuta mond’ por homo estos frato”*. Sed la teroran kaj tiranan evoluon de la Revolucio li kontraŭis.</p>
			<p>La arda koro de Burns estis plenplena de simpatio ankaŭ por la bestoj, kiel ekzemple montras lia poemo al la muso, kies neston li renversis per la plugilo, aŭ la novjara saluto al lia maljuna ĉevalino Manjo. Li verkis senteme pri la fundamenta aferoj de la familio, kiel ekzemple en <i>La Sabatvespero de la Kamparano</i>.</p>
 
			<p>&nbsp;&nbsp;&nbsp;<i>Kreo al beboj kaj edzino<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;De ĝoj’ endoma<br>
			&nbsp;&nbsp;&nbsp;Estas la celo kaj kulmino<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;De l’ vivo homa.</i></p>
 
			<p>Li estis krome poeto de amikeco kaj sociemo, kaj opiniis, ke la mondo estas kreita fundamente por la vivo homa:</p>
 
			<p>&nbsp;&nbsp;&nbsp;<i>Ĉar tekstis jene testamento,<br>
			&nbsp;&nbsp;&nbsp;Kiam ekestis homa gento:<br>
			&nbsp;&nbsp;&nbsp;Honesta hom’ kun arda sento<br>
			&nbsp;&nbsp;&nbsp;Por samsortano<br>
			&nbsp;&nbsp;&nbsp;Estas la sofa plenumanto<br>
			&nbsp;&nbsp;&nbsp;De l’ naturplano.</i></p>
 
			<p>Kun tia sento ĉiujare, ĉirkaŭ la 25-a de januaro, kunsidoj sur kvin kontinentoj festas la Senmortan Memoron pri Robert Burns.</p>

			<p><b>Douglas Young</b>, el la skota: <b>William Auld</b> (el <i>Esperanto en Skotlando</i>)</p>
		</div>
		
		<p>* Traduko de Reto Rossetti</p>'
  WHERE l.kurso = 'PP' AND l.numero = 27 AND le.ordo = 1;

-- leçon 27, section 2
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<div class="vortlisto row">
		<div class="col s12 m6">
			<p><span class="eo">afrikansa</span>: rilata al nederlanddevena lingvo parolata en Sudafriko.</p>
			<p><span class="eo">agento</span>: komisiito.</p>
			<p><span class="eo">agrikulturo</span>: terkulturado.</p>
			<p><span class="eo">amerika</span>: rilata al la termaso okcidente de Atlantiko.</p>
			<p><span class="eo">aristokrato</span>: nobelo.</p>
			<p><span class="eo">bastardo</span>: eksteredzeca infano.</p>
			<p><span class="eo">demokratio</span>: demokrataro.</p>
			<p><span class="eo">devii</span>: devojiĝi.</p>
			<p><span class="eo">dilui</span>: maldensigi likvaĵon.</p>
			<p><span class="eo">Edinburgo</span>: la ĉefurbo de Skotlando.</p>
			<p><span class="eo">eklezio</span>: tuto de la anoj de iu kristana religio.</p>
			<p><span class="eo">fablo</span>: versrakonto, en kiu bestoj aŭ objektoj rolas kiel homoj.</p>
			<p><span class="eo">farmi</span>: lui bienon por ĝin kulturi.</p>
			<p><span class="eo">generacio</span>: tuto de la samaĝaj homoj samtempe vivantaj.</p>
			<p><span class="eo">hindustana</span>: rilata al lingvo parolata en Hindujo.</p>
		</div>
		<div class="col s12 m6">			
			<p><span class="eo">honesta</span>: konforma al honoro, virto kaj justeco.</p>
			<p><span class="eo">hungara</span>: rilata al Hungarujo.</p>
			<p><span class="eo">intrigi</span>: ruze kombini por atingi ion.</p>
			<p><span class="eo">kontinento</span>: granda terdividaĵo.</p>
			<p><span class="eo">kultivi</span>: kulturi la teron.</p>
			<p><span class="eo">malica</span>: konscie malbonfarema.</p>
			<p><span class="eo">mentoro</span>: saĝa gvidanto.</p>
			<p><span class="eo">merkato</span>: vendosfero.</p>
			<p><span class="eo">orgojla</span>: fierega.</p>
			<p><span class="eo">ortodoksa</span>: konforma al tradicia doktrino.</p>
			<p><span class="eo">paroĥo</span>: eklezia distrikteto.</p>
			<p><span class="eo">satiro</span>: verko, kiu kritike primokas ion aŭ iun.</p>
			<p><span class="eo">ŝafo</span>: lanprodukta besto.</p>
			<p><span class="eo">teksto</span>: enhavkonsisto de libro.</p>
			<p><span class="eo">tirano</span>: senindulga kaj severa reganto.</p>
			<p><span class="eo">versio</span>: tradukvarianto.</p>
			<p><span class="eo">volumo</span>: unuopa libro.</p>
		</div>
	</div>'
  WHERE l.kurso = 'PP' AND l.numero = 27 AND le.ordo = 2;

-- leçon 27, section 3
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##EKZERCO:261:eo##'
  WHERE l.kurso = 'PP' AND l.numero = 27 AND le.ordo = 3;

-- leçon 27, section 4
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##EKZERCO:262:eo####EKZERCO:263:eo####EKZERCO:264:eo####EKZERCO:265:eo##'
  WHERE l.kurso = 'PP' AND l.numero = 27 AND le.ordo = 4;

-- leçon 27, section 5
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##EKZERCO:266:eo####EKZERCO:267:eo##'
  WHERE l.kurso = 'PP' AND l.numero = 27 AND le.ordo = 5;

-- leçon 27, section 6
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##RESUMO##'
  WHERE l.kurso = 'PP' AND l.numero = 27 AND le.ordo = 6;

-- leçon 28, section 1
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<div class="rakonto">
			<h3>LA AMO DE OTELO KAJ DESDEMONA</h3>
			
			<p><i>Sen la scio de la patro, Desdemona edziniĝis al la nigrulo Otelo. Eksciante pri tio, la patro, Brabancio, akuzas Otelon antaŭ la Doĝo. Jago estas la kornedo de Otelo.</i></p>
			
			<p>DOĜO:<br>
			Venigu Desdemonan.</p>
				
			<p>OTELO:<br>
			Kornedo, gvidu: vi la lokon scias.<br>
			<i>Foriras JAGO kaj servistoj</i><br>
			Kaj dume, kiel pure mi konfesas<br>
			al Dio la malvirtojn de la sango,<br>
			do tiel vere al oreloj viaj<br>
			prezentos mi solene, kiel mi<br>
			prosperis ame ĉe la sinjorino,<br>
			kaj ŝi ĉe mi.<br></p>
			
			<p>DOĜO:<br>
			Rakontu ĝin, Otelo.</p>
			
			<p>OTELO:<br>
			Min amis ŝia patro, invitadis,<br>
			demandis min pri mia historio<br>
			laŭjare: la bataloj, la sieĝoj<br>
			kaj sortoŝanĝoj, kiujn mi trapasis.<br>
			Mi ĝin raportis, jam de l’ infanaĝo<br>
			ĝis la momento, kiam li ĝin petis.<br>
			Jen temis pri fatalaj akcidentoj,<br>
			pri aventuroj sur la ter’ kaj maro,<br>
			saviĝo el la tuj-mortiga breĉo;<br>
			kiel min kaptis krudaj malamikoj<br>
			kaj vendis en sklavecon; kiel oni<br>
			absolvis min, kaj jen mi pluvojaĝis:<br>
			tra kavernegoj kaj dezertaj vastoj,<br>
			abismoj, krudaj rokoj kaj montegoj<br>
			tuŝantaj la ĉielon — jen pri kio<br>
			li petis min rakonti. Kaj ankoraŭ<br>
			pri l’ kanibaloj, la antropofagoj<br>
			manĝantaj unu alian, kaj la homoj<br>
			kun kapo sub la ŝultroj. Tion aŭdi<br>
			tre emis Desdemona, sed konstante<br>
			la taskoj de la domo ŝin fortiris.<br>
			Rapide plenuminte ilin, tuj<br>
			ŝi jam revenis kaj avid-orele<br>
			ŝi sorbis mian temon. Mi rimarkis,<br>
			kaj baldaŭ mi en horo aŭspicia<br>
			parolis tiel trafe, ke ĝi tiris<br>
			de ŝi fervoran peton, ke mi volu<br>
			rakonti mian tutan pilgrimadon,<br>
			kiun fragmente ŝi ja iom aŭdis,<br>
			sed ne en plena sekvo. Mi konsentis;<br>
			kaj ofte ŝiajn larmojn mi ellogis,<br>
			se mi parolis pri dolora bato<br>
			trafinta min junaĝe. Je la fino<br>
			ŝi pagis min per mondo da suspiroj.<br>
			Ŝi diris, kiel stranga tio estis,<br>
			tre stranga; kaj kortuŝa, plej kortuŝa.<br>
			Ŝi eĉ bedaŭris, ke ŝi tion aŭdis,<br>
			kaj tamen revis: ho, se nur ŝi<br>
			mem estus povinta iĝi tia viro!<br>
			Ŝi dankis min, kaj diris, se mi havas<br>
			amikon, kiu amas ŝin, mi nur<br>
			instruu lin rakonti mian temon,<br>
			kaj tio svatus ŝin. Ĉe tiu varmo<br>
			mi ekparolis. Vere, ŝi min amis<br>
			pro la danĝeroj, kiujn mi travivis:<br>
			mi amis ŝin, ĉar ŝi kompatis ilin.<br>
			Nur tia estis mia sorĉinfluo.<br>
			La sinjorino venas: ŝi atestu.</p>
			
			<p><i>Venas DESDEMONA, JAGO kaj servistoj</i></p>

			<p>DOĜO:<br>
			Tia rakonto, vere, gajnus eĉ<br>
			mian filinon! Bona Brabancio,<br>
			akceptu ĉi fariĝon eksterordan.<br>
			Prefere ja rompitan glavon uzi,<br>
			ol siajn nudajn manojn.</p>

			<p>BRABANCIO:<br>
			Mi petegas,<br>
			aŭskultu ankaŭ ŝin. Se ŝi konfesos,<br>
			ke ŝi la amindumon partoprenis,<br>
			pereu mi, se mia miskulpigo<br>
			trafus la viron! — Venu, bona mia.<br>
			En jena nobla societo, kie<br>
			plej ŝuldas vi obeon?</p>

			<p>DESDEMONA:<br>
			Nobla patro,<br>
			ĉi tie mia devo disduiĝas.<br>
			Al vi mi estas ŝulda pro la vivo<br>
			kaj edukado: vivo kaj eduko<br>
			instruas min respekti vin; vi estas<br>
			mastro de mia devo — mi, ĝis nun,<br>
			estas filino via. Sed jen mia edzo;<br>
			kaj tian devon, kian manifestis<br>
			mia patrino, preferinte vin<br>
			al sia patro — tion, mi pretendas,<br>
			mi rajtu montri nun al mia edzo,<br>
			la Maŭro.</p>

			<p>BRABANCIO:<br>
			Dio gardu vin! Mi finis.<br>
			Mi petas, moŝto, al la ŝtataferoj!<br>
			Preferus mi adopti, ol generi<br>
			infanon! Venu, Maŭro…</p>

			<p>OTELO <i>alpaŝas</i><br>
			Mi donas al vi nun, el tuta koro<br>
			(ĉar vi jam havas ĝin), kion alie<br>
			per tuta koro kontraŭ vi mi gardus.<br>
			Pro vi, Trezoro, mi profunde ĝojas,<br>
			ke mi infanon plian ne posedas,<br>
			ĉar via fuĝo farus min tirana<br>
			por ĝin kateni. Mi jam finis, moŝto.</p>

			<p>DOĜO:<br>
			Permesu ke, per saĝo de sentencoj,<br>
			mi helpu, ke vi prenu en favoron<br>
			ĉi tiujn geamantojn…<br>
			Se jam ne eblas la aferon ŝanĝi,<br>
			necesas sin konforme rearanĝi.<br>
			Kiu lamentas pasintaĵon spite,<br>
			altiras nur mizeron senprofite.<br>
			Kontraŭ la nepra bato de l‘ Fortuno,<br>
			la pacienc’ nin armas per imuno.<br>
			Kiu la perdon ridas, ĝin elstrekas:<br>
			kiu ĝin ploras, daŭre ĝin revekas.</p>

			<p>BRABANCIO:<br>
			Do sekve, se la turkoj Cipron prenos,<br>
			ni ĝin ne perdos, se ni ridmienos!<br>
			Tre bele la sentenco ja sonoras<br>
			por tiu, kies koron ĝi ne boras.<br>
			Sed ve, se la aflikto devas ĉerpi<br>
			de l’ povra pacienco por sin helpi!<br>
			Tiaj sentencoj, el suker’ kaj galo,<br>
			valoras por la senco kaj la malo.<br>
			Ha, kial vorti? — La vundita koro<br>
			per vortoj ne saniĝos de l’ doloro.<br>
			Mi humile petas vin, transiru al la<br>
			aferoj de ŝtato.</p>
			
			<p><b>William Shakespeare</b>, el la angla: <b>Reto Rossetti</b> (el: <i>Otelo, la Maŭro de Venecio</i>)</p>'
  WHERE l.kurso = 'PP' AND l.numero = 28 AND le.ordo = 1;

-- leçon 28, section 2
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<div class="vortlisto row">
		<div class="col s12 m6">
			<p><span class="eo">abismo</span>: profundegaĵo.</p>
			<p><span class="eo">absolvi</span>: pardoni la pekojn.</p>
			<p><span class="eo">adopti</span>: alpreni iun kiel sian filon aŭ filinon.</p>
			<p><span class="eo">akcidento</span>: malfeliĉa neatendita okazo.</p>
			<p><span class="eo">antropofago</span>: hommanĝulo.</p>
			<p><span class="eo">aŭspicio</span>: antaŭsigno pri estonteco.</p>
			<p><span class="eo">breĉo</span>: trarompaĵo.</p>
			<p><span class="eo">cipro</span>: insulo mediteranea.</p>
			<p><span class="eo">doĝo</span>: estro de la venecia respubliko.</p>
			<p><span class="eo">fortuno</span>: bona sorto.</p>
			<p><span class="eo">fragmento</span>: derompita peceto.</p>
			<p><span class="eo">galo</span>: maldolĉa hepatsuko.</p>
			<p><span class="eo">generi</span>: naskigi.</p>
			<p><span class="eo">glavo</span>: pikbatalilo.</p>
		</div>
		<div class="col s12 m6">			
			<p><span class="eo">imuna</span>: ŝirmata, netuŝata.</p>
			<p><span class="eo">kanibalo</span>: hommanĝulo.</p>
			<p><span class="eo">kaverno</span>: natura subtera kavo.</p>
			<p><span class="eo">konforma</span>: samforma.</p>
			<p><span class="eo">kornedo</span>: standardisto.</p>
			<p><span class="eo">manifesti</span>: evidentigi.</p>
			<p><span class="eo">maŭro</span>: nigrulo el nordafriko.</p>
			<p><span class="eo">povra</span>: kompatinda; malriĉa.</p>
			<p><span class="eo">sieĝi</span>: ĉirkaŭi fortikaĵon por ĝin kapti.</p>
			<p><span class="eo">spiti</span>: kontraŭstari la volon de iu alia.</p>
			<p><span class="eo">suspiri</span>: sopirĝemi, vespiri.</p>
			<p><span class="eo">trezoro</span>: valoraĵo.</p>
			<p><span class="eo">turka</span>: rilata al Turkujo.</p>
		</div>
	</div>'
  WHERE l.kurso = 'PP' AND l.numero = 28 AND le.ordo = 2;

-- leçon 28, section 3
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##EKZERCO:268:eo##'
  WHERE l.kurso = 'PP' AND l.numero = 28 AND le.ordo = 3;

-- leçon 28, section 4
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##EKZERCO:269:eo####EKZERCO:270:eo####EKZERCO:271:eo##'
  WHERE l.kurso = 'PP' AND l.numero = 28 AND le.ordo = 4;

-- leçon 28, section 5
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##EKZERCO:272:eo##'
  WHERE l.kurso = 'PP' AND l.numero = 28 AND le.ordo = 5;

-- leçon 28, section 6
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##RESUMO##'
  WHERE l.kurso = 'PP' AND l.numero = 28 AND le.ordo = 6;

-- leçon 29, section 1
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<div class="rakonto">
			<h3>LA KVARA PIPO</h3>
			
			<p>La plej silentega radio flugkuras miljarojn, sed mallonga estas la vivo de l'' homo: infanjaroj kun ludoj, amo kaj laboro, malsanoj kaj mono. Estas teleskopoj, estas la saĝo kaj okuloj, sed kiel konstrui tiajn pesilojn por ekpesi la mallongan vivon: sur unu pesilteleron meti la silentegan radion, la vicaron de la nombroj, spacon, mondojn, kaj sur la alian la vegetadon de la grajno, kiu ĝermas, spikiĝas kaj forvelkas? Kiu scias, ĉu eblas, ke kvardek mizeraj jaroj superpezos?…</p>
			<p>Estas la milito. Iam oni elektos la epiteton “La Granda” aŭ “La Malgranda” por tuj distingi ĝin de aliaj militoj pasintaj kaj estontaj. Por la homoj vivintaj tiun jaron ĝi estis simple — la milito, kiel estis simple — la pesto, kiel estis simple — la morto.
Estis la milito kaj sur la eta punkto — sur la punkto inter punktoj — proksime de la ŝtonamaso, kiu antaŭe estis nomita la urbo Ipr, kuŝis, sidis, manĝis kaj mortadis fremdaj, alvenintaj homoj. Oni nomadis tiujn la 118-a batallinia regimento de la franca armeo. La regimento kunformita en la sudo, en Provenco, konsistis el kamparanoj — vinfaristoj aŭ paŝtistoj. Dum ses monatoj la krispeharaj malhelaj homoj manĝis kaj dormis en la argilozaj kavaĵoj, pafadis, mortadis suprenĵetante la manojn, unu post alia kaj en la stabo de la korpuso estis signite, ke la 118-a batallinia regimento defendas la poziciojn de “La Nigra Transirejo”.</p>
			<p>Aliflanke je la distance, de 500 paŝoj sidis aliaj homoj kaj same pafadis. Inter ili estis malmulte da krispaj kaj nigraj. La blanketaj kaj helokulaj ja ŝajnis pli grandaj, pli krudaj ol tiuj vinfaristoj kaj parolis nesimilan lingvon. Ĉi tio estis la agrikulturistoj de Pomerio, oni nomadis ilin en la alia stabo la 87-a rezerva bataliono de la germana armeo.</p>
			<p>Ĉi tiuj estis la malamikoj kaj inter la malamikoj estis la tero pri kiu la vinfaristoj kaj la agrikulturistoj diras: “La neniesa”. Ĝi apartenis nek al la Germana imperio, nek al la Franca respubliko, nek al la Belga reĝregno. La disfrakasita de la obusoj, trarodegita laŭlonge kaj laŭlarge per la forlasitaj tranĉeoj, abunde farĉita per la homostoj kaj rusta metalo, ĝi estis la tero morta kaj neniesa. Eĉ ne unu herbeto restis nedifektita sur ĝia fava haŭto kaj je la julia tagmezo ĝi peze fiodoris je fekaĵoj kaj sango. Sed neniam por ia ajn benita ĝardeno kun korpulentaj fruktoj kaj floroj de oranĝerioj, la homoj tiele batalegis, kiel por ĉi tiu deziriga putra senuza tero. Ĉiun tagon iu elgrimpadis el la terenoj franca aŭ germana sur la terenon nomatan “la neniesa” kaj fermentadis la flavan argilon per la densa varmega sango.
Unuj diradis ke Francujo batalas por la libero, la aliaj, ke ĝi volas forrabi la karbon kaj feron. Sed la soldato de la 118-a batallinia regimento Pierre Dubois militis nur tial, ke estis milito. Sed antaŭ la milito estis la vinberaro. Kiam pluvis tro ofte aŭ la vitojn atakadis filokseroj, Pierre estiĝis malserena kaj vipis per seka branĉo la hundon, ĉar al li ŝajnis, ke tiu troe manĝas ĉe li. Sed en la bona jaro vendinte profite la vinberarojn, li sin vestigis en la amelumitan surĉemizon kaj veturis en la proksiman urbeton. Tie en la taverno “La Rendevuo de la Princoj” li ĝojis plene, t.e. ke li frapadis la servistinon sur la larĝan brusonan dorson kaj ĵetinte en la meĥanikan gurdon du soldojn, li aŭskultadis, malferminte la buŝon, la kvodlibeton. Unu fojon Pierre ekmalsanis, ĉe li aperis absceso en la orelo kaj ĉi tio estis dolora. Kiam li estis malgranda li ŝatis rajdi sur kaprino kaj ŝteli de la patrino sekigitajn figojn. Pierre havis la edzinon Jeanne kaj li ofte ame kunpremadis ŝiajn mamojn, krutajn kaj brunetajn kiel la vinberaroj en la sunabunda bonjaro. Tiel estis la vivado de Pierre Dubois. Kaj poste Francujo komencis batali por la libero aŭ akiri la karbon kaj li estiĝis soldato de la 118-a batallinia regimento.</p>
			<p>Distance 500 paŝojn de Pierre Dubois sidis Peter Debau kaj la vivo de tiu estis nesimila al la vivo de Pierre, same kiel estas nesimila la terpomo je la vinbero aŭ nordo je sudo kaj ĝi estis senlime simila same kiel estas similaj unu la aliajn ĉiuj fruktoj de la Tero, ĉiuj landoj kaj ĉiuj vivoj. Peter eĉ unu fojon ne manĝis vinberojn, li nur vidis tiujn en la fenestroj de magazenoj. La muzikon li ne ŝatis, sed festotage li kegloludis. Li malsereniĝadis kiam la herbo flaviĝadis kaj la bovino de Peter produktis malmulte da lakto. Li neniam havis oreldoloron. Iam li malvarmumis kaj dum semajno kuŝis havante tre altan temperaturon.</p>
			<p>Estinte knabo li ludis kun la maljuna depatra vertago kaj per la kasketo li kaptadis la sunrebrilojn. Lia edzino Johanna estis blanka kiel lakto, malkompakta kiel la kuirita terpomo kaj ĉi tio plaĉis al Peter. Tiel vivis Peter. Poste — unuj parolis ke Germanujo batalas por la libero, la aliaj — ke ĝi volas forrabi la feron kaj karbon — Peter Debau estiĝis la soldato de la 87-a rezerva bataliono.
Sur la neniestereno estis nek libero nek karbo — estis nur la rubaro de la ostoj kaj rusta pikdrataro, sed la homo volis per ĉiuj ajn rimedoj akiri la neniesan terenon. Pri tio oni ekpensis en la staboj kaj menciis en la paperaro. La 24an de aprilo 1916 la leŭtenanto alvokis al si soldaton Pierre Dubois kaj ordonis je la dua horo post la noktomezo tragrimpi la forlasitan tranĉeon, nomitan “La Kata Koridoro”, ĝis la germanaj pozicioj kaj kaŝrigardi kie estas dislokitaj la malamikaj postenoj.</p>
			<p>Pierre Dubois estis dudek-ok jara. Ĉi tio certe estas tre malmulte — la silentega radio flugkuras dum jarcentoj. Sed Pierre, ekaŭdinte la ordonon, ekpensis, ke estis la filokseroj pereigantaj la vinberojn kaj la malsanoj pereigantaj la homon, sed aperis la milito kaj por la homo necesas kalkuli ne jarojn, sed la horojn. Ĝis la dua post la noktmezo restis ankoraŭ 3 horoj kaj 15 minutoj. Li sukcesis alkudri la butonon, skribi al Jeanne ke ŝi ne forgesu surguti la sulfuron sur la junajn vitojn kaj laŭte ŝmactrinkante, varmigante la manojn super la kruĉo eltrinki la nigran acidan kafon.</p>
			<p>Je la dua postnoktmeze Pierre rampis sur la gliteca argilo por konkeri la neniesan terenon. Li longedaŭre trarampadis la tranĉeon, nomitan “La Kata Koridoro”, kunpuŝiĝante kun ostoj kaj pikdrataroj. Poste la koridoro finiĝis. Dekstre kaj maldekstre estis la samaj forlasitaj tranĉeoj, orfecaj kiel forlasitaj domoj. Pripensante kiun elekti: ĉu la dekstran aŭ maldekstran — ili ambaŭ kondukis al la malamikoj, tio estis — al la morto. Pierre decidis ekripozeti kaj uzante la kaŝitecon de la loko, ekfumi la povran soldatan pipon, malpurigitan de argilo. Estis tre mallaŭte — la homo kutime laŭte pafadis tage, sed nokte ili mortigadis unu alian sen bruo, sendante solecajn homojn, serpentumantajn kiel Pierre, aŭ fosante la subfosaĵojn. Pierre fumis la pipon kaj rigardis al la malplena steloza ĉielo. Li ne mezuris, nek divenprovadis, nek komparadis la mondojn kun sia vilaĝeto en Provenco. Li nur ekpensis: “se tie en la sudo estas la sama nokto — por la vinberoj tio estas bona kaj al Jeanne same, Jeanne ŝatas la varmajn noktojn.” Li kuŝis kaj fumis, ĝojante per la tuta varmo de sia harabunda besteca korpo de tio, ke tie ĉi sur la morta neniesa tero, li ankoraŭ estas viva, li spiras kaj fumas kaj kapablas ekmoveti la manon kaj piedon.</p>
			<p>Sed Pierre ankoraŭ ne sukcesis fumigi bone la pipon, kiam depost ia angulo aperis homo. Iu rampis renkonten al li. Pierre vidis la vizaĝon — helan kaj larĝan, ne similan al la vizaĝoj de vinfaristoj kaj paŝtistoj de Provenco, la fremdan vizaĝon, fremdan ŝirmkaskon, fremdajn butonojn. Ĉi tiu estis Peter Debau, sed por Pierre li estis simple la malamiko, kiel simple estis la milito, aŭ simple — estis la morto. Li ne sciis, ke vespere la germana leŭtenanto alvokis al si soldaton Peter kaj donis al tiu la ordonon, ke Peter same riparis la kapoton, skribis al Johanna, ke ŝi ne forgesadu la gravedajn bovinojn, kaj ŝmacante trinketis la supaĉon. Pierre ne sciis pri tio, sed se li eĉ scius, ĉioegale li ne komprenus — ja tiun jaron estis milito. Peter estis por Pierre simple la malamiko, sed renkontinte la malamkon alrampantan renkonten, Pierre kiel la antikva praulo en la arbaroj, kiel la lupo fleksiĝis, streĉis sin, preparante sin alkroĉiĝi en la kaptitaĵon. Kaj apude Peter ekvidinte la malamikon tiel proksime, ke li aŭdis kiel batadas la fremda koro, kiel la praulo, kiel la lupo liberigis la manojn, submetis la krurojn, mezurante la pli bonan eksalton.
Ili kuŝis unu kontraŭ la alia. Ĉiu atendis kaj ne volis komenci. La manoj de ambaŭ estis videblaj kaj, ne rigardante la vizaĝon, ili ambaŭ atentege rigardadis la malamikecajn manojn.</p>
			<p>Kaj la pipo de Pierre fumis. La malamikoj kuŝis apude, ne volante mortigi, sed firme sciante, ke mortigi estas necese, ili kuŝis pace kaj laŭte spiradis unu al la alia en la vizaĝon. Ili kiel la bestoj alflaradis la fremdan lanon. La odoro estis parenca kaj konata, la odoro de la soldato, de tramalseka kapoto, ŝvito, malbona supo, argilo. La alvenintaj el la malproksimaj terenoj, el Provenco, el Pomerio sur ĉi tiun teron, neniesan kaj fremdan, ili sciis: la malamiko — oni strangolu. Ili ne penis interparoli: estas multaj fremdaj terenoj kaj fremdlingvoj. Sed ili pace kuŝis apude kaj la pipo de Pierre fumis kaj Peter (kiu ne povis ekfumi la sian, sciante, ke la plej eta manmovo — ekestos batalo kaj morto) enspirinte avide la tabakofumon, malfermis la buŝon. Li per ĉi tio petis kaj Pierre komprenis lin, kaj ankoraŭ pli proksimen eltiris sian kapon. Peter prenis la pipon per la dentoj el la dentoj. Kaj la okuloj de ambaŭ kiel ĝisnune ne lasadis la liberiĝintajn, kvazaŭ senvivajn, manojn. Enspirinte la tabakfumon Peter redonis la pipon al Pierre kaj tiu siavice, jam ne atendante la peton post la fumenspiro proponis la pipon al la malamiko. Tiel ili faris kelkfoje, dolĉe fumante la soldatan pipon, la du malamikoj sur la neniesa tero, kiun oni nepreĝe konkeru. Ili enspiradis la tabakfumon singarde, malrapide, tre, tre malrapide. La plej silentega radio flugkuras dum miljaroj, sed ili sciis, ke por unu el ili ĉi tio estas la lasta pipo. Okazis la malfeliĉo — la pipo ne finfuminte ĝis la fino, estingiĝis. Iu el la du enmeditiĝis kaj ĝustatempe ne plilongigis per la englutita enspiro ties mallongan vivon. Ĉu tiu estis Pierre, ekmemorinta la brunhaŭtan Jeanne, aŭ Peter adiaŭinta kun la blanketa Johanna? Iu el tiuj du… Ili sciis, ke elpreni la flamigilon neeblas, ke je plej eta manmovo — ekestos la lukto kaj morto. Sed iu unua ekdecidis, ĉu Pierre, defendanta la francan respublikon, kaj en la malantaŭa poŝo konservanta la silikon kun la longa ŝnuro,– ĉu Peter, kiu havis alumetojn kaj kiu batalis por la germana imperio? Iu el tiuj du…</p>
			<p>Ili kunkroĉiĝis kaj komencis strangoli unu la alian. La pipo elfalis kaj enargiliĝis. Ili strangoladis kaj batadis unu la alian, strangoladis longe, silente, ruliĝante sur la tero, kovrante sin per la argilbuloj. Poste, ĉar neniu povis superforti, ili per la dentoj enkroĉiĝis en la durajn vilajn vangojn, en la angiozajn kolojn, eligantajn la parencan kaj konatan odoron, fermentante la flavan argilon per la varmega sango. Ili denove eksilentis, denove pace kuŝis apude, nur sen la pipo, mortaj sur la morta kaj neniesa tero.
Baldaŭ ĉesis esti videblaj la plej silentegaj radioj, irantaj de la steloj al la Tero, mateniĝis, kaj kiel ĉiun tagon, la homoj mortigantaj dum la nokto silente, rampante sur argilo kaj fosante la subfosaĵojn, ekvidinte la Sunon, komencis murdadi laŭte, pafante el la pafiloj kaj kanonoj. En la du staboj oni enskribis en la listojn de la malaperintoj tiel diversajn kaj similajn du soldatojn, sed kiam denove alvenis la nokto, ekrampis sur la teron, nomitan “la neniesa”, novaj homoj por fari tion, kion faris nek Pierre, nek Peter, ja tiun jaron estis la milito.
En la vilaĝeto de Provenco la brunhaŭta Jeanne, ŝutante per sulfuro la vitojn, ploris pro Pierre kaj fininte plori, ŝi enlasis en sian hejmon alian edzon – Paul, ĉar iu devis surtranĉi la vitojn kaj kunpremadi ŝiajn mamojn, krutajn kiel la vinberaroj en la rikoltabunda jaro kaj tre malproksime de ŝi, sed pli proksime ol stelo de stelo, en la vilaĝeto de Pomerio ploris la blanketa Johanna, alŝutante la nutraĵon al la gravedaj bovinoj kaj ĉar la bovinoj postulis multe da zorgoj kaj ŝia karno blanka kiel la lakto ne povis vivi sen la karesoj, en la bieno aperis la nova edzo laŭ antaŭnomo Paul. Eksciinte, ke la viroj finfumis sian lastan pipon, du virinoj tristegis kaj poste denove ĝojis kun la aliaj edzoj, ja tiun jaron, same kiel dum aliaj jaroj, estis la vivo.</p>
			<p>En aprilo 1916 la neniesa tero odoranta de la fekaĵo kaj sango, ĉesis resti neniesa. En la varma serena tago sur ĝi mortis tre multe da homoj el diversaj provincoj kaj la flava argilo, fermentita de la sango, estiĝis ies propra laŭleĝa tereno. Unuan fojon laŭlonge de la tranĉeo, havinta la nomon “La Kata Koridoro”, la homoj antaŭe rampintaj sur la ventro ekiris trankvile, ne ekfleksante eĉ la kapon. Sur la tranĉekurbigo tie, kie finiĝis la “Kata Koridoro” kaj disbranĉiĝis dekstren kaj maldekstren aliaj tranĉeoj, ne havantaj nomojn, ili ekvidis du skeletojn, ĉirkaŭbrakumantajn unu la alian, kiel feliĉaj amantoj, ekkaptitaj de la morto. Apude kuŝis neglektite la eta pipo.
Jen ĝi estas antaŭ mi, la povra soldata pipo, malpurigita per argilo kaj sango, la pipo, kiu estiĝis en la milito “La Pipo de Paco!” En ĝi ankoraŭ grizas iom da cindro — la postsigno de la du vivoj, forbruligitaj pli rapide ol la pinĉokvanto de la tabako, la vivoj mizeraj kaj belegaj. Kiel konstrui tiun pesilon, ke oni pesu la vegetadon de la homgrajno, ke oni ĵetu sur unu pesilteleron milmilojn da jaroj kaj sur la alian tiom da tempo dum kiu povas fumi la eta soldata pipo?…</p>

			<p><b>Ilja Erenburg</b>, el la rusa: <b>Viktor Gruŝko</b> (el <i>Norda Prismo</i>)</p>
		</div>'
  WHERE l.kurso = 'PP' AND l.numero = 29 AND le.ordo = 1;

-- leçon 29, section 2
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<div class="vortlisto row">
		<div class="col s12 m6">
			<p><span class="eo">absceso</span>: pusamaso.</p>
			<p><span class="eo">abunda</span>: grandkvanta.</p>
			<p><span class="eo">acida</span>: akragusta.</p>
			<p><span class="eo">alumeto</span>: ekbruliga lignopeco.</p>
			<p><span class="eo">amelo</span>: substanco uzata por rigidigi tolaĵon.</p>
			<p><span class="eo">angio</span>: korpa tubo, tra kiu fluas sango.</p>
			<p><span class="eo">argilo</span>: glueca tero.</p>
			<p><span class="eo">belga</span>: rilata al Belgujo.</p>
			<p><span class="eo">bulo</span>: globforma peco de materialo.</p>
			<p><span class="eo">butono</span>: vestkuntenilo.</p>
			<p><span class="eo">drato</span>: metalfadeno.</p>
			<p><span class="eo">dura</span>: malmola.</p>
			<p><span class="eo">epiteto</span>: kvalitiga adjektivo.</p>
			<p><span class="eo">farĉo</span>: viandpecetoj, kiujn oni enmetas internen de manĝaĵo.</p>
			<p><span class="eo">favo</span>: parazita kaphaŭta malsano.</p>
			<p><span class="eo">feki</span>: eligi ekskrementon.</p>
			<p><span class="eo">fermento</span>: organika substanco, kiu kaŭzas malkomponiĝon.</p>
			<p><span class="eo">figo</span>: dolĉa mola frukto.</p>
			<p><span class="eo">filoksero</span>: tre malgranda insekto.</p>
			<p><span class="eo">flari</span>: percepti per la nazo.</p>
			<p><span class="eo">fosi</span>: fari kavaĵon en la tero.</p>
			<p><span class="eo">kapoto</span>: granda dika mantelo.</p>
			<p><span class="eo">keglo</span>: ligna staraĵo, kiun oni renversas per pilko.</p>
			<p><span class="eo">kolo</span>: korpoparto inter kapo kaj trunko.</p>
			<p><span class="eo">konkeri</span>: militakiri.</p>
			<p><span class="eo">korpulenta</span>: dikventra.</p>
			<p><span class="eo">korpuso</span>: granda armedividaĵo.</p>
			<p><span class="eo">krispa</span>: neregule ondeta.</p>
			<p><span class="eo">kruĉo</span>: speco de vazo kun tenilo.</p>
			<p><span class="eo">kudri</span>: kunligi per fadeno.</p>
			<p><span class="eo">kvodlibeto</span>: muzikaĵo diversspeca kaj varia.</p>
			<p><span class="eo">lano</span>: ŝafhararo.</p>
		</div>
		<div class="col s12 m6">			
			<p><span class="eo">leŭtenanto</span>: oficiro sub kapitano.</p>
			<p><span class="eo">magazeno</span>: luksa butiko.</p>
			<p><span class="eo">mekanika</span>: farata per maŝino.</p>
			<p><span class="eo">obuso</span>: kuglego.</p>
			<p><span class="eo">oranĝerio</span>: varma halo por konservi arbojn dumvintre.</p>
			<p><span class="eo">orfo</span>: knabo, kies patro aŭ patrino mortis.</p>
			<p><span class="eo">-oz</span>: sufikso signifanta plena de, riĉa je.</p>
			<p><span class="eo">pinĉi</span>: premi inter du fingroj.</p>
			<p><span class="eo">Pomerio</span>: germana provinco.</p>
			<p><span class="eo">princo</span>: reĝido.</p>
			<p><span class="eo">Provenco</span>: suda regiono de Francujo.</p>
			<p><span class="eo">putri</span>: malkomponiĝi.</p>
			<p><span class="eo">regimento</span>: parto de armeo.</p>
			<p><span class="eo">rendevuo</span>: interkonsentita renkontiĝo.</p>
			<p><span class="eo">respubliko</span>: reĝimo, en kiu regas popolaj reprezentantoj.</p>
			<p><span class="eo">rikolti</span>: detranĉi kaj kolekti, ekz-e grenon.</p>
			<p><span class="eo">rodi</span>: mordeti.</p>
			<p><span class="eo">rubo</span>: senvaloraĵoj, forĵetindaĵoj.</p>
			<p><span class="eo">siliko</span>: malmola ŝtono, per kiu oni povas fari fajron.</p>
			<p><span class="eo">soldo</span>: malgranda monero.</p>
			<p><span class="eo">spiko</span>: vico de grajnoj sur tigo.</p>
			<p><span class="eo">strangoli</span>: sufokpremi la gorĝon de iu.</p>
			<p><span class="eo">sulfuro</span>: flava materialo trovebla ĉe vulkanoj.</p>
			<p><span class="eo">ŝmaci</span>: kisi aŭ manĝi brue.</p>
			<p><span class="eo">taverno</span>: trinkejo.</p>
			<p><span class="eo">tranĉeo</span>: protekta fosaĵo.</p>
			<p><span class="eo">trista</span>: malĝoja.</p>
			<p><span class="eo">ventro</span>: meza parto de la korpo.</p>
			<p><span class="eo">vino</span>: alkohola trinkaĵo.</p>
			<p><span class="eo">vito</span>: vinberarbeto.</p>
			<p><span class="eo">vertago</span>: speco de hundo kun mallongaj kruroj.</p>		
		</div>
	</div>'
  WHERE l.kurso = 'PP' AND l.numero = 29 AND le.ordo = 2;

-- leçon 29, section 3
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##EKZERCO:273:eo##'
  WHERE l.kurso = 'PP' AND l.numero = 29 AND le.ordo = 3;

-- leçon 29, section 4
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##EKZERCO:274:eo####EKZERCO:275:eo####EKZERCO:276:eo####EKZERCO:277:eo##'
  WHERE l.kurso = 'PP' AND l.numero = 29 AND le.ordo = 4;

-- leçon 29, section 5
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##EKZERCO:278:eo##'
  WHERE l.kurso = 'PP' AND l.numero = 29 AND le.ordo = 5;

-- leçon 29, section 6
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##RESUMO##'
  WHERE l.kurso = 'PP' AND l.numero = 29 AND le.ordo = 6;

-- leçon 30, section 1
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<div class="rakonto">
			<h3>GEEDZIĜO EN HODIAŬA MANIERO</h3>
			
			<p>Ili interkonatiĝis en la montaro Mátra. La knabino, Anikó, apenaŭ eliris iam el la Somerumejo: taglonge ŝi ŝtopis al si la sciencon en la kapon en la fino de la ĝardeno, sub la pirujo, kie neniun ŝi ĝenis. Ŝi lernis juron en la vespera universitato, preparis sin por ekzameno. Kun Dezsö, la milda kaj timema scienca esploristo, ŝi interkonatiĝis jam en la unua tago. Ili tagmanĝadis ĉe la sama tablo, kaj kiomfoje Anikó havis tempon, ili veturis kune inter la montojn en la Trabanto de Dezsö, aŭ promenadis post la tagmanĝo sur la ombraj vojoj.</p>
			<p>La asignita somerum-tempo de Dezsö pasis pli frue. Anikó restis ankoraŭ por kelkaj tagoj; ŝi estis poste devonta meti ekzamenon. Ili interkonsentis, ke tiam kaj tiam, tie kaj tie ili renkontiĝos, du semajnojn post tiu tago, en Budapeŝto.</p>
			<p>Ili adiaŭis, la viro sidiĝis en sian aŭton, la knabino enŝovis la kapon tra la fenestreto:</p>
			<p>— Mi vin priŝmacos ankoraŭfoje, — ŝi diris, — la buĝeto tion permesas. Poste, ne forgesu, ke vi estas mia tablo, sed ankaŭ mi estu via vekielmankas, alie estos krako en via melono.</p>
			<p>La guston de la kiso iom konfuzis, ke li ne komprenis precize la tekston de la knabino; li volis do informiĝi:</p>
			<p>— Kiel mi komprenu tion, mia kara?</p>
			<p>— Nu, tiel, scienca kapo, ke vi devas profundigi la situon, kaj aŭ <i>ciao bambina</i>, aŭ <i>you are my destiny</i>. Ĉu klare?</p>
			<p>Ne estis klare, sed li hontis plu demandadi, nur ridetis kun la senkulpe bonvola rideto karakteriza pri la sciencaj kadruloj; lia rideto ankoraŭ unufoje trakaresis la knabinon, kies floranta virineco preskaŭ disstreĉis la venene verdan pantalonon, kiu subzone, kaj la flavan puloveron, kiu superzone ŝin kovris.</p>
			<p>— <i>Ciao, my destiny</i> —  li mansignis, poste tuj donis gason kaj forpolvis.</p>
			<p>Al tiu ĉi improvizo li povis danki, ke li konsciiĝis pri la situacio — la vortoj de la knabino signifas: aŭ por eterne finite, aŭ eterne kune. Kiam li alvenis Budapeŝton, li jam decidis favore al la dua el la solvoj, kaj ĉi tiu decidiĝo plifortiĝis en li tago post tago.
Poste venis la tago de la rendevuo. Apenaŭ li ĉirkaŭrigardis en la somera restoracio, li ekvidis Anikó-n ĉe flankestara tablo. Ŝi ŝajnis laca: la ekzamenoj iom longigis ŝiajn trajtojn, paligis ŝiajn kolorojn. La animagorda ĉirkaŭaĵo instigis lin je deklaro.</p>
			<p>— Mi decidis favore al la geedziĝo, — li volus diri, sed la knabino lin antaŭis:</p>
			<p>— Mi furaĝis min, — tiavorte ŝi lin salutis kaj klaketigante la fingrojn ŝi diris laŭvice, kion ŝi konsumis: kazinan ovon, skatolon da anĉovoj, kotleton Vienan, — kaj tiu kreteno diris nur poste, ke ankaŭ rostitan hepaton ili havas. En ega saŭco mi sidis, kio estos, se vi min traskuis. Poŝremburo estas luna, eĉ telekupron mi ne havas, telefoni al iu sciuro.</p>
			<p>Subite ŝi eksilentis.</p>
			<p>— Ĉu vi scias, kiel vi rigardas min? Kiel kolĥozprezidanto, kiun oni alvokis diri sian raporton latine.</p>
			<p>— Kiel ĉi tio venis al vi en la kapon?</p>
			<p>— Heninde! Tiel ĝi venis al mi en la kapon, ke ĝi venis al mi en la kapon, ĉar se ĝi ne venus al mi en la kapon, mi ne estus ĝin dirinta. Ĉu ne vere? Kaj vi ankoraŭ ne kisis min.</p>
			<p>— Efektive!</p>
			<p>En tiu momento, kiam li sentis la haŭton de la knabino per siaj lipoj, lia mondkoncepto ŝanĝiĝis:</p>
			<p>— Mi decidis — li volus diri, sed Anikó tiris ansan kofron el sub la tablo kaj komencis en ĝi serĉe fosadi.</p>
			<p>— Ĉu vi tagmanĝos, Didiliĉjo? — ŝi demandis tute senatente.</p>
			<p>— Tagmanĝi? Je la kvina posttagmeze? — miregis Dezsö, — jam delonge mi estas trans la tagmanĝo.</p>
			<p>— Jen ĝi estas! — diris Anikó. — Tamen bone mi memoris, ke mi ĝin metis  ĉi tien. Notoj por lerno. De Ödön mi ricevis ilin. Ankaŭ li frekventas la vesperan. Klasa membro li estas, krom ke li lamas. Forpiedbatita en matĉo, nun li akvopoloas. En la baseno li estas animale klasa. Ha! 			<p>Pagu, kaj ni iru. Ĉu vi estas kun la ĉaro?</p>
			<p>Dezsö mansignis al la kelnero, levis la brakon, interfrotis sian polekson kun la montrofingro; dume kapobalance signis, ke li venis kun ĉaro.</p>
			<p>— Vi min kunprenos, ĉu ne? — alridetis lin la knabino, tiel varmege, ke lin kovris ia dolĉa ŝvito.</p>
			<p>— Jes… jes… — li balbutis —, ankaŭ mi mem ĝuste pensis pri tio.</p>
			<p>Ili sidiĝis en la ĉaro, kaj li direktis ĝin sendemande al la Rozmonteto. Tie li loĝis.</p>
			<p>— Ĉu via menso ferias, Didiliĉjo? — demandis la knabino kaj sian manon ŝi glitigis milde sur la lian. — Ni iros al Ujpeŝto. </p>
			<p>— Ĉu al vi?</p>
			<p>— Al mi? Ne tie mi loĝas.</p>
			<p>— Kial do ni iros tien?</p>
			<p>— Ni reportos al Ödön la notojn; mi montris ilin, ĉu vi ne memoras? Odön estas tiu, kiu estas klasa, krom ke li lamas. Ĉu vi fakte ne memoras? Mi promesis, ke la notoj hodiaŭ estos tie. Lia kunkapo bezonas ilin, kiu prokrastis ĝis aŭtuno kaj nun ilin kunportos al la provinco por tie lerni. Ankoraŭ du libroj estas urĝaj: tiu de Rózsa, kiu loĝas en Buda kaj tiu de Nuskó. Atendu iom, mi skribis en ĝin ŝian adreson; Érdliget. Tuj mi diros ankaŭ la straton.</p>
			<p>— Érdliget? — demandis Dezsö obtuze.</p>
			<p>— Kiel vi diras. Vi ne sajnas feliĉa, Didiliĉjo.</p>
			<p>— Mi nome kalkulis je tio, ke ĉi tiu posttagmezo estas nia, ke ni priparolos, kiel estos poste…</p>
			<p>— Ni priparolos, — allasis la knabino, — sed antaŭe ni reportos la notojn, vi estas Krezo sen krizo, vi ne komprenas tion, prunte mi ricevis ĉiujn notojn. Ĉu falis jam la monero en via aŭtomato?</p>
			<p>— Sekve — ekparolis la scienca esploristo post kelka silentado — de Ujpeŝto ni iros al Érdliget…</p>
			<p>— Kaj dume ni prenos la vojon tra la Placo de Rondo en Buda. Scienca kapo, vi gvatas la vojon, kvazaŭ vi volus ĝin manĝi. Ĉu vi tute ne scivolas pri miaj ekzamenoj? Unu el la membroj estis animale kretena, oni ne scias, de kie oni ennovigas tiajn zizelojn. Li ne povis sin esprimi. Per sia ega muzelo li kovradis sian kretenecon, sed tiel grandan muzelon ankaŭ li ne povis gravmieni, ke tiu ne elŝovu sin el sub ĝi.</p>
			<p>— Vesperiĝos, kiam ni revenos Budapeŝton — diris la knabino en Érdliget.</p>
			<p>— Nu, vi vidas — diris Dezsö vigle.</p>
			<p>— Kion mi vidas?</p>
			<p>— Ke pasis la tago, nun jam apenaŭ ni havos tempon interparoli. Kvankam mi plej konscience pripensis ĉion kaj mi decidis…</p>
			<p>— Pardonu, ke mi tretas sur vian tekston, sed mi devas fari salton ankaŭ al amikino Sári.</p>
			<p>— Al Sári? — eĥis la viro funebre.</p>
			<p>— Vi ne scias, kiu estas Sári, sed ne grave. Ŝi loĝas en la strato Thököly. Necesas tien iri, por ke ŝi ne mortigu sin. Ŝia pasaĝero tiris for la strion, inter tiaj cirkonstancoj iu devas elskui el ŝi la barbituraĵojn. Ĉu klare?</p>
Dezsö malsereniĝis.</p>
			<p>— Ankaŭ vi povas tie dormi — konsolis lin la knabino.</p>
			<p>La viro skuis la kapon, demetis Anikó-n antaŭ la loĝejo de Sári kaj mishumore veturis plu hejmen. La svatiĝo restis en li ŝtopita.</p>
			<p>— Mi decidis, Anikó — li volis diri tiutage, sekvatage, triatage, sed nur kvaratage venis ties vico. En sia loĝejo ĉion li preparis por la solena okazaĵo. Sur la rultableto estis florbukedo, en telereto du ringoj, sur glacio troviĝis ĉampano.</p>
			<p>— Animale! — eksplodis la ekzaltiĝo de Anikó jam antaŭ la domo. — Ĉefkapo vi estas, Didiliĉjo. En animale altara loko vi loĝas. Brute bela!</p>
			<p>Per la samaj epitetoj ŝi karakterizis ankaŭ la loĝejon, kaj pri la elvido ŝi diris:</p>
			<p>— Kapacite altara!</p>
			<p>Ŝi ĉirkaŭiris en la ĉambro, laŭvice elprovis la konkoformajn apogseĝojn, elprovis la kanapon, pririgardis la bildojn, sed flankentiris la buŝon:</p>
			<p>— Ne sufiĉe abstraktaj.</p>
			<p>La viro kelkfoje faris provojn venigi ŝin el la ĉambro en la halon, proksimen al la florbukedo, kie atendus ilin la ĉampano kaj la deklaro: — Mi decidis, Anikó.</p>
			<p>— Kio la breĉo? — demandis fine la knabino. — Ĉu krevis la digo? Dezsö skuis la kapon, kaj staris tie obstine antaŭ la rultableto, de tie li vokadis mansigne la knabinon. Fine ĉi tiu ekkriis:</p>
			<p>— Tiel vi okulumadas, kiel ia oĉjo tentanta per sukero.</p>
			<p>— Venu, mia kara. Mi vin petas, venu.</p>
			<p>Fine Anikó cedis al la voko. Ŝi rimarkis la bukedon.</p>
			<p>— Beste bela, — ŝi diris —, se mi estus kapro, mi paŝtiĝus sur ĝi.</p>
			<p>Kaj tiam ŝi ekvidis ankaŭ la ringojn sur la telero.</p>
			<p>— Kaj kion vi volas per tiuj? Ĉu ili estas de viaj prapatroj?</p>
			<p>Dezsö ridetis timeme.</p>
			<p>— Ĉu vi ne divenas?</p>
			<p>— Mi ne amas divenadi — kaj ŝi jam ekiris reen en la ĉambron, sed la viro ŝin retenis:</p>
			<p>— Se ankaŭ vi mem volas tion, Anikó mia kara, vi estos mia edzino.</p>
			<p>Sur ŝia vizaĝo aperis ega tropika rideto, ŝia buŝo malfermiĝis ĝisorele, ŝiaj okuloj grandronde.</p>
			<p>— Brute bona, Didiliĉjo. Tial do vi gravmanieradis, kiel kandidato perdinta siajn oponantojn? Vi svatas vin pri mi? Kia areno! Tia scienca kapo, kiel vi, edzinigas min! Heninde!</p>
			<p>Ŝi tenis momenton da paŭzo, poste ŝi paŝis pli proksimen al la viro.</p>
			<p>— Ĉu vi pripensis tion bone, Didiliĉjo? Ĉar mi estas kapabla eĉ edziniĝi al vi.</p>
			<p>— Mi ne estas homo de senpripensaj decidoj.</p>
			<p>— Efektive. Vi aĝas tridek kvin, kaj eĉ unufoje ĝis nun vi ne edziĝis. Mi nur ne komprenas, kial vi volas elekti ĝuste min? Aŭtoĉara kapo vi estas, kaj ankaŭ loĝejon vi havas. Kial ĝuste min?</p>
			<p>Dezsö rigardis la nazon de ŝia ŝuo kaj sentis, ke la sango alfluegas lian kapon, li sentis sin kiel lampiono eklumigita en nekonvena tempo.</p>
			<p>— Ĉar mi vin amas, — li flustris, kaj poste singarde li alrigardis la knabinon.</p>
			<p>— Ankaŭ mi vin amas, — diris ĉi tiu dolĉe.</p>
			<p>— Ni, scienculoj, estas tre okupitaj homoj, sed ni tre scias ami. </p>
			<p>— Ĉe ni, normuloj, la situacio estas tia sama. Sed se ni jam venis ĝis ĉi tie, ni alŝucu la ĉampanon.</p>
			<p>— Je nia feliĉo.</p>
			<p>Ili remetis la glasojn sur la rultableton.</p>
			<p>— Unu aferon mi ne komprenas, — ekparolis la viro inter zorgoj.</p>
			<p>— Vi gajnis. Mi, nome, komprenas nenion.</p>
			<p>— En Mátraháza, kiam ni adiaŭis, vi diris tra la fenestreto de la ĉaro: aŭ <i>ciao bambina</i>, aŭ <i>you are my destiny</i>. Precize mi memoras viajn vortojn.</p>
			<p>— Nu, kaj kio, se mi diris tion? — kun ĉi tio Anikó premis la kapon de la viro inter siajn manplatojn, kaj antaŭ ol kisi lin surbuŝe, esplore ŝi rigardadis lian vizaĝon.</p>
			<p>— Vi estas dolĉa, kiel lerneja direktoro kredanta sin gimnaziano. Mi tute ne memoris tion.</p>
			<p>— Ĉu ne? Mi pensis, ke vi starigis min antaŭ elekton.</p>
			<p>— Antaŭ ultimaton? — ridis la knabino. — Neniel. Sed, se vi volas, ankaŭ tio estas ebla.</p>
			<p>— Mi volas, kompreneble ke mi volas tion. Kaj nun ni sidiĝu kaj priparolu, ke viaparte kiel vi imagas kaj miaparte kiel mi imagas la aferon, ĉar la geedziĝo, ĉu ne…</p>
			<p>— Estas serioza afero. Kiel vi diras, jes, Didiliĉjo. Tiom serioza, ke nun ni tuj iros alporti mian bagon…</p>
			<p>— Vian bagon… — eĥis Dezsö konsternite.</p>
			<p>— Ĉu vi volas tele-edzecon?</p> 
			<p>— Ne. Tamen…</p>
			<p>— Mi ne amas tiajn etburĝajn skrupedantaĵojn.</p>
			<p>Dezsö cedis al la rezoluta opinio. Post duonhoro ili jam estis en la sublua ĉambro, kiun Anikó loĝis en kvaropo. En la sublua dezerteco la kvar knabinaj litoj, kvar oazoj de la bunta, kolora kaj refreŝiga malordo, estis tiom same da eksperimentoj por tio, ke ĉiu el ili povu krei por si hejmon sur kelkaj kvadratmetroj da loko kaj stampi tiun hejmon per sia individueco.</p>
			<p>Dezsö, karesante al si la mentonon, observadis la imperion de Anikó. Ĝi konsistis, krom la lito, el kesto kovrita per bona peco da kolora papero; en la kesto estis bretoj, sur la bretoj troviĝis libroj, malsupre inter ŝuoj estis turista kafkuirilo, kaj kompota botelo kovrita per peco da tabulo kun dufingre da porkograso. Sur la lito: blua-ruĝa kvadratita kovrilo, kuseneto kun dube pura tegilo; laŭlonge-laŭlarĝe vestoj, ŝaloj. Sur seĝo: libro malfermita, turnita surventren, apud ĝi, en cindrujo, amaseto da cigaredaj stumpoj ruĝaj de lipoŝminko. Sur la muro: eltonditaj el magazinoj, puŝnajle fiksitaj reprodoj el modernaj majstroj, kadrita sorbopapero kun buntaj inkmakuloj, sur kiu pendis unuflanke fungo kun flava bantokravato sur sia tigo, aliflanke rusta ŝaftintilo kun verda silka galono. Sur la kesto: botelo de viskio <i>Black and White</i>, dike surfluigita per fandita kandelo, per verda, blua, viola, ruĝa oleofarbo.</p>
			<p>Lia rigardo gluiĝis al la vidaĵo.</p>
			<p>— Vi rigardas, kion kapablas la laboranta popolo? — demandis Anikó.</p>
			<p>Kiam ili revenis en la loĝejon de Dezsö, Anikó ĉirkaŭrigardis agoprete, kaj ju pli longe ŝi rigardadis, des pli profunde plugiĝis la sulko inter ŝiaj du brovoj. Malaprobe ŝi ŝancelis sian kapon:</p>
			<p>— Mi tramodernigos ĉi tiun rancan trogloditejon. Tiel oni ne povas loĝi.</p>
			<p>— Bone, — diris la viro rompite, — tre bone. Dume mi promenos iom, por ne ĝeni vin en via krea aktivado.</p>
			<p>Post trihora vagado li revenis hejmen.</p>
			<p>Kelkagrade li preparis sin dume, la kreaĵo lin tamen konsternis. Ŝajnis, ke li enpaŝis fremdan loĝejon. Iom post iom li malkovris la ornam-objektojn de la knabino: la botelon de viskio, la fungon, la tintilon, poste ankaŭ siajn proprajn ornam-objektojn — ĉi tiujn pli malfacile. La ribelema spirito de Anikó ŝanĝis ne nur ilian lokon, sed ankaŭ ilian funkcion. La dikventra itala vazo staris kun la buŝo malsupren, sur ĝia fundo kuŝis granda blanka ŝtono en la formo de la abstraktaj statuoj. Sur la bretoj ŝi kelkloke disŝovis la librojn, kaj en la breĉon tiel estiĝintan ŝi metis vazon kun arbobranĉoj, en alian unu maskon el Oceanio, en la trian kvar pecojn de brulligno kunigitajn en arta ordo. Super la lito pendis peco da rusta lado kadre al admono skribita per primitivaj literoj: “Veturigu sen akcidento”.</p>
			<p>— De kie vi akiris ĉi tion?</p>
			<p>— Kion vi diras pri mia tualeta ĉambro?</p>
			<p>La spegulon de la banoĉambro kadris tri lignokuleroj, sub ĝi troviĝis la kesto de malpuraj tolaĵoj, turnita flank-alsupre kaj kovrita per tapiŝo, sur ĝi tupetiga kombilo, pinĉilo, boteleto da kolonja akvo, ungoraspilo, ungotondilo, krome bombonujo kun jena tuĉa teksto surflanke: “Miaj cindroj”.</p>
			<p>— Vi gapas kiel Kristoforo Kolumbo kredanta malkovri Amerikon.</p>
			<p>Anikó kuŝis sur la kanapo en bikini-kostumo, en la feliĉo de la bone farita laboro.</p>
			<p>— Nun ni furaĝos nin, ĉu bone?</p>
			<p>— Bone. Kaj poste ni priparolos…</p>
			<p>— Mi scias, mi scias, niajn “komunajn aferojn”…</p>
			<p>Post la vespermanĝo Dezsö trapensis, kion multan li volus priparoli kun la knabino antaŭ la geedziĝo. Post iom da gorĝpreparo li ekparolis:</p>
			<p>— Mi kredas, nenio malhelpas, ke ni priparolu la farendaĵojn koneksajn kun nia geedziĝo kaj interagordu niajn imagaĵojn pri la geedza vivo, ekzemple, kio estas via opinio…</p>
			<p>— Ĉu vi amas Petöfi? — demandis la knabino. – Mi ne. Kion vi volis teksti? Mi aŭskultos vin kun pia enprofundiĝo.</p>
			<p>— Antaŭ tia grandsignifa paŝo kiel la geedziĝo, la konscia homo pripensas kaj konsideras ĉion, pesante la ŝancojn favorajn kaj malfavorajn. Mi mem, ĉiuokaze, estas decidiĝinta, ke mi metas mian vivon sur tute novajn fundamentojn; kiamaniere, tion mi eksplikos al vi konkrete… Diru, ĉu vi ne rigardas la geedziĝon serioza afero?</p>
			<p>— Kiel do mi ne rigardus ĝin tia? — respondis la knabino. — La geedzeco estas tia institucio, kiun ankaŭ la revolucio ne povas malhavi.</p>
			<p>— Propre dirite, — parolis plu Dezsö iom nervoze, — la problemojn ni povas solvi ankaŭ dummarŝe, ĉi tio sekve ne estas urĝa, sed pri la praktika flanko de la afero tamen ni devas decidi: kiam ni geedziĝos, kiujn ni invitos, kiuj estos la atestantoj…</p>
			<p>— Aŭskultu min, Didiliĉjo, — diris la knabino, — nun mi sidiĝos en via sino, por ke vi ne eksplodu. Mi scias, ke por vi la geedziĝo estas granda afero. Sed mi volas nenian arenon, nenian etburĝan cirkon, mirtokronon, nek honorfraŭlinojn, nek nuptomarŝon, nek geedziĝfestenon, ke la oldaj kranioj tie idiotadu, leku sian buŝon humida, aludadu pri la nuptonokto. Nenion. Ni eniros — ni eliros geedze. Vi grimacas kiel iu glutinta skatolon da alumetoj.</p>
			<p>— Kompreneble. Ĉio estos laŭ via deziro. Mi estus volinta fari iel alie, vi scias, ĉiu familio havas siajn tradiciojn.</p>
			<p>— La tradicioj estas por tio, ke oni havu sur kion surtreti. Dimanĉe ne. Tiam ni ripozos. Merkredo ne estas bona, ankaŭ ĵaŭdo ne. Nek vendredo. — Ŝi kalkulis la tagojn sur la fingroj. — Sabato! Ĉu bone?… Grandioze, sabate mi fariĝos via kunsortulino.</p>
			<p>Sabate Dezsö jam estis ekironta, kiam Anikó telefonis.</p>
			<p>— Mi tremolis jam, ke mi ne trovos vin hejme, Didiliĉjo. Estas morta gaso, por hodiaŭ la alianco estas luna.</p>
			<p>La vortojn li ne komprenis, nur el la akcentado li divenis, ke io ne estas en ordo.</p>
			<p>— Kion vi volas diri? — li demandis incitite. La knabino respondis tiel same incitite:</p>
			<p>— Mi ricevis ekstran laboron, ĝisvespere mi gurdas la melodion, mi ne havas tempon edziniĝadi.</p>
			<p>— Kaj nun vi diras tion?</p>
			<p>— Nun oni diris ankaŭ al mi.</p>
			<p>En sia turmento, sian korpopezon li metadis de unu piedo sur la alian kaj gratadis sian nukon.</p>
			<p>— Ĉu tie vi ankoraŭ?…</p>
			<p>— Jes, ĉi tie.</p>
			<p>— Mi jam pensis, ke oni malligis nin. Kial vi ne parolas? Kial vi silentas?</p>
			<p>— Stulta situacio, — li ekparolis post granda fortostreĉo. — Kial vi silentas? — demandis ĉi-foje li.</p>
			<p>Tiam eksonoris la rido de la knabino kaj plenigis la aparaton per ebria ĝojo:</p>
			<p>— Kion mi ne donus por tio, se mi povus vidi vin, Didiliĉjo! Se mi povus vidi vian vizaĝon funebre kadritan! Du nigrajn ĉevalojn oni devus jungi antaŭ vin kaj vi veturigus la ĉerkon en la tombejon.</p>
			<p>— Ĉu vi spritumas pri ĉi tio? Tiom ne grava ĝi estas por vi? Mi opiniis…</p>
			<p>— Trankvi, trankvi, nenia pereo. Mi scias mian devon kaj ne forlasos vin en via honto. Unu semajnon post hodiaŭ mi kondukos vin al la altaro de la matrikulisto, por ke la kolegoj ne montru fingre la peke falintan sciencan esploriston.</p>
			<p>— Ne koleru, mi petas, mi ne komprenas. Finfine, se laborulino anoncas, ke…</p>
			<p>— La laborulino nenion anoncis.</p>
			<p>— Sek kial do ne?</p>
			<p>— Ĉar ŝajnis, ke tio estos en ordo. Jen kial ne, Didiliĉjo. Kaj, cetere, mi havas teruran huŝon de tio, ke la kapisto eksciu la aferon.</p>
			<p>— Kiel ajn ni konsideras, mi vin petas, tia eksterordinara evento, ĉu ne… Kiu ne ripetiĝas, aŭ… kiel mi diru… Vi devus trasenti, mi vin petas…</p>
			<p>— Kie vi lasis vian cerbon? Vi kondutas kiel episkopo perdinta la adreson de Disinjoro. Per tio, ke mi ĵuros al vi eternan fidelon hodiaŭ posttagmeze, la kapisto ne ricevos premion. Nenia fabelo, la ekstran laboron oni devas tratreti. En la ŝtato de la laboruloj la plej ĉefa valoro estas la premio. Jen la situo.</p>
			<p>Ĉe la alia fino de la limo — muto.</p>
			<p>— Kaj nun, kial vi silentas kiel melono sur glacio? Reprenu vian menson, Didiliĉjo, aŭ vi restos fraŭlo.</p>
			<p>— La situacio estas eksterordinare malagrabla. Vi ne komprenas tiaĵojn. Kion fari pri la atestantoj? Por min komplezi ili foroferis sian semajnfinon. Ministra ĉefklasvidanto kaj…</p>
			<p>Ankoraŭ dufoje ili prokrastis la geedziĝon, sed fine tamen ĝi povis okazi. Ili ne renkontiĝis ofte, ili nur malofte povis koincidigi sian okupitecon. Sed sian ferion ili koincidigis. Aŭtune ili ekvojis, ĉirkaŭveturis la Balatonon en la Trabanto, kaj tendis jen tie, jen ĉi tie. La vetero estis favora al ili, la suno brilis, la akvo estis varma. Propre tiam ili enamiĝis unu al la alia.</p>
			<p>Lastatage sur supro de monteto ili adiaŭis al la Balatono, kiu iom post iom vestis sin per leĝeraj nebuloj. Dezsö pensis pri tio, ke en ĉi tiu ĉarma estaĵo li trovis la feliĉon de sia vivo. Ion similan pensis eble ankaŭ Anikó, ĉar subite ŝi turnis sin vidalvide al la viro kaj diris:</p>
			<p>— Animalan fortunon mi havas. Ĉi tio estas mia unua edzineco, kaj jen kiel feliĉa mi estas jam nun. Kion vi diros, Dediliĉjo?</p>
		
            <p><b>Emil Kolozsvári Grandpierre</b>, el la hungara: <b>Kolomano Kalocsay</b> (el <i>Hungara Viva</i>)</p>
		</div>'
  WHERE l.kurso = 'PP' AND l.numero = 30 AND le.ordo = 1;

-- leçon 30, section 2
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '<div class="vortlisto row">
		<div class="col s12 m6">
			<p><span class="eo">agordi</span>: emigi iun al io.</p>
			<p><span class="eo">akvopoloo</span>: pilkludo en naĝejo.</p>
			<p><span class="eo">alianco</span>: interligo.</p>
			<p><span class="eo">altaro</span>: rita tablo por religiaj oferoj.</p>
			<p><span class="eo">anĉovo</span>: speco de fiŝeto.</p>
			<p><span class="eo">anonci</span>: antaŭsciigi.</p>
			<p><span class="eo">anso</span>: kurba tenilo.</p>
			<p><span class="eo">areno</span>: loko en la centro de cirko por bataloj kaj ludoj.</p>
			<p><span class="eo">bago</span>: valizo.</p>
			<p><span class="eo">banto</span>: ornama nodo.</p>
			<p><span class="eo">barbiturato</span>: speco de drogo.</p>
			<p><span class="eo">baseno</span>: akvujo en ĝardeno.</p>
			<p><span class="eo">bikini-kostumo</span>: tre eta dupeca naĝkostumo.</p>
			<p><span class="eo">bombono</span>: sukeraĵo.</p>
			<p><span class="eo">breto</span>: horizontala tabulo por surmeti objektojn.</p>
			<p><span class="eo">bruto</span>: kvarpieda paŝtobesto.</p>
			<p><span class="eo">budapeŝto</span>: la ĉefurbo de hungarujo.</p>
			<p><span class="eo">buĝeto</span>: la sumo de la jaraj en- kaj el-spezoj.</p>
			<p><span class="eo">bukedo</span>: kunligaĵo de detranĉitaj floroj.</p>
			<p><span class="eo">burĝo</span>: mezklasulo.</p>
			<p><span class="eo">ĉampano</span>: speco de ŝaŭmvino.</p>
			<p><span class="eo">ĉerko</span>: kesto, en kiun oni metas kadavron.</p>
			<p><span class="eo">digo</span>: akvobarilo.</p>
			<p><span class="eo">ekstra</span>: plia, aldonita.</p>
			<p><span class="eo">evento</span>: grava okazaĵo.</p>
			<p><span class="eo">fandi</span>: fluecigi per varmo.</p>
			<p><span class="eo">farbo</span>: koloriga substanco.</p>
			<p><span class="eo">galono</span>: dika rubando por ornami aŭ borderi veston.</p>
			<p><span class="eo">gimnazio</span>: mezgrada lernejo.</p>
			<p><span class="eo">grandioza</span>: impone granda.</p>
			<p><span class="eo">grati</span>: froti per la ungoj.</p>
			<p><span class="eo">gvati</span>: kaŝe aŭ deĵore observi.</p>
			<p><span class="eo">heni</span>: ĉevalbleki.</p>
			<p><span class="eo">hepato</span>: granda glando, kiu produktas galon.</p>
			<p><span class="eo">humida</span>: malseka.</p>
			<p><span class="eo">huŝi</span>: fortimigi birdojn, kriante “Huŝ!”.</p>
			<p><span class="eo">improvizi</span>: fari ion senprepare.</p>
			<p><span class="eo">inciti</span>: koleretigi.</p>
			<p><span class="eo">jungi</span>: alligi beston al tirota veturilo.</p>
			<p><span class="eo">juro</span>: leĝoscienco.</p>
			<p><span class="eo">kanapo</span>: longa apogseĝo.</p>
			<p><span class="eo">kapacito</span>: la kvanto, kiun ujo povas enteni.</p>
			<p><span class="eo">kazino</span>: konstruaĵo por publikaj amuzaĵoj.</p>
			<p><span class="eo">klaki</span>: eligi mallongan sonon per rapida movo de io kontraŭ io.</p>
			<p><span class="eo">koincidi</span>: okazi en la sama momento.</p>
			<p><span class="eo">kolĥozo</span>: mastruma kolektivo.</p>
			<p><span class="eo">kolonjo</span>: urbo en Germanujo.</p>
			<p><span class="eo">kompoto</span>: manĝaĵo farita el fruktoj kuiritaj kun sukero.</p>
			<p><span class="eo">koneksa</span>: interligita.</p>
			<p><span class="eo">konko</span>: kalka tegaĵo de moluskoj.</p>
			<p><span class="eo">kotleto</span>: rostita viandpeco.</p>
			<p><span class="eo">kranio</span>: tutaĵo de la ostoj entenantaj la cerbon.</p>
			<p><span class="eo">Krezo</span>: tre riĉa homo en la antikva tempo.</p>
			<p><span class="eo">kulero</span>: manĝilo per kiu oni ĉerpas.</p>
			<p><span class="eo">kuseno</span>: remburita sako por la kap-apogo.</p>
		</div>
		<div class="col s12 m6">			
			<p><span class="eo">lado</span>: metala plato.</p>
			<p><span class="eo">lama</span>: malfacile paŝanta pro kripleco.</p>
			<p><span class="eo">lampiono</span>: lampeto.</p>
			<p><span class="eo">latino</span>: la lingvo de la romianoj.</p>
			<p><span class="eo">leki</span>: tuŝi per la lango.</p>
			<p><span class="eo">magazino</span>: perioda revuo.</p>
			<p><span class="eo">majstro</span>: titolo donata al homo fake elstare kompetenta.</p>
			<p><span class="eo">masko</span>: artefarita vizaĝo, vizaĝkaŝilo.</p>
			<p><span class="eo">matĉo</span>: ludo aranĝita inter du trupoj.</p>
			<p><span class="eo">matrikulo</span>: listo de anoj.</p>
			<p><span class="eo">melodio</span>: belsona muzikaĵo.</p>
			<p><span class="eo">melono</span>: granda sukplena frukto.</p>
			<p><span class="eo">mentono</span>: vizaĝparto sub la buŝo.</p>
			<p><span class="eo">mirto</span>: arbeto kun ĉiamverdaj folioj.</p>
			<p><span class="eo">muzelo</span>: elstara ĉirkaŭbuŝa kapoparto de bestoj.</p>
			<p><span class="eo">normo</span>: modelo de la ordinara tipo aŭ kutimo.</p>
			<p><span class="eo">nuko</span>: posta parto de la kolo.</p>
			<p><span class="eo">nupto</span>: geedziĝo.</p>
			<p><span class="eo">obstina</span>: firme necedema.</p>
			<p><span class="eo">obtuza</span>: malklara, kvazaŭ sufokata.</p>
			<p><span class="eo">Oceanio</span>: la tuto de la pacifikaj landoj.</p>
			<p><span class="eo">olda</span>: maljuna, malnova.</p>
			<p><span class="eo">pantalono</span>: dukrura vesto por la suba korpoduono.</p>
			<p><span class="eo">pedanta</span>: precize kaj detale zorganta pri malgravaĵoj.</p>
			<p><span class="eo">peki</span>: malobservi moralan leĝon.</p>
			<p><span class="eo">polekso</span>: dikfingro de la mano.</p>
			<p><span class="eo">pulovero</span>: trikita torsovesto.</p>
			<p><span class="eo">ranca</span>: ricevinta malagrablan odoron pro malkomponiĝo.</p>
			<p><span class="eo">raporti</span>: sciigi tion, kion oni vidis aŭ faris.</p>
			<p><span class="eo">raspi</span>: skrapi per speciala ilo.</p>
			<p><span class="eo">reprodo</span>: (mallongigo) = reproduktaĵo.</p>
			<p><span class="eo">rezoluta</span>: decidema, firmanima.</p>
			<p><span class="eo">sciuro</span>: malgranda besto vivanta en arboj.</p>
			<p><span class="eo">skrupulo</span>: dubo de konscienco.</p>
			<p><span class="eo">statuo</span>: homsimilaĵo el ŝtono.</p>
			<p><span class="eo">ŝminki</span>: ŝmiri la vizaĝon per kolorilo.</p>
			<p><span class="eo">tapiŝo</span>: teksita plankokovrilo.</p>
			<p><span class="eo">tegi</span>: kovri ion tiel, ke la kovro kaj la kovritaĵo unuiĝas.</p>
			<p><span class="eo">tele-</span>: prefikso, kiu signifas “en malproksimo”.</p>
			<p><span class="eo">telefono</span>: aparato por interparoli tra granda distanco.</p>
			<p><span class="eo">tenti</span>: instigi al io malpermesita.</p>
			<p><span class="eo">tremolo</span>: speco de arbo.</p>
			<p><span class="eo">troglodito</span>: kavernulo.</p>
			<p><span class="eo">tualeto</span>: necesaĵoj por sin vestado.</p>
			<p><span class="eo">tuĉi</span>: skribi per speciala nigrega inko.</p>
			<p><span class="eo">turisto</span>: homo vojaĝanta por plezuro.</p>
			<p><span class="eo">ultimato</span>: lasta averto antaŭ milito.</p>
			<p><span class="eo">vazo</span>: ujo.</p>
			<p><span class="eo">veneno</span>: vivdetrua substanco.</p>
			<p><span class="eo">viskio</span>: skota brando.</p>
			<p><span class="eo">zizelo</span>: malgranda mambesto, kiu dormas dum la vintro.</p>
			<p><span class="eo">trankvi</span>: (mallongigo) = trankviliĝi.</p>
			<p><span class="eo">ciao, bambina</span>: ĝis, knabino! (itale; legu</span>: ĉao, bambina).</p>
			<p><span class="eo">you are my destiny</span>: vi estas mia sorto (angle; legu</span>: ju ar maj des’tini).</p>
		</div>
	</div>'
  WHERE l.kurso = 'PP' AND l.numero = 30 AND le.ordo = 2;

-- leçon 30, section 3
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##EKZERCO:279:eo##'
  WHERE l.kurso = 'PP' AND l.numero = 30 AND le.ordo = 3;

-- leçon 30, section 4
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##EKZERCO:280:eo####EKZERCO:281:eo####EKZERCO:282:eo####EKZERCO:283:eo##'
  WHERE l.kurso = 'PP' AND l.numero = 30 AND le.ordo = 4;

-- leçon 30, section 5
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##EKZERCO:284:eo####EKZERCO:285:eo##'
  WHERE l.kurso = 'PP' AND l.numero = 30 AND le.ordo = 5;

-- leçon 30, section 6
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id SET le.enhavo = '##RESUMO##'
  WHERE l.kurso = 'PP' AND l.numero = 30 AND le.ordo = 6;
