<?php 
$titolo="12 (dek du)";
$leciono = 12;
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

			<h3>Bob ege soifas</h3>
			<div class="row dialogo">
				<div class="col s12 m8">
					<p>Bob duone malfermas la okulojn, ilin refermas, ilin malfermetas
					denove, ilin refermas, ĝemas, kaj finfine malfermas ilin tute larĝe.</p>
					<p>"Donu al mi ion por trinki," li diras.</p>
					<p>"Trinki? Kion vi deziras trinki?" demandas Tom.</p>
					<p>"Ion ajn. Brandon. Donu al mi glason da brando."</p>
					<p>"Kiel vi sentas vin?" diras fraŭlino Marta, la flegistino.</p>
					<p>"La kapo doloras," Bob respondas ĝeme. "Mi petas vin, bonvolu
					doni al mi ion por trinki."</p>
					<p>"Ĉu vi bonvolas iri," Tom petas la flegistinon, "kaj alporti
					al li glason da brando?"</p>
				</div>
				<div class="col s12 m4">
					<img src="bildoj/gerda12-1.gif" class="responsive-img">
				</div>
			</div>

			<div class="row dialogo">
				<div class="col s12 m8">
					<p>La flegistino iom hezitas, sed fine kapjesas.</p>
					<p>"Ĉu mi ankaŭ voku la policon?" ŝi diras. "Li ja ricevis
					baton, baton sufiĉe fortan, por ke li iĝu senkonscia. Laŭ mia
					opinio, tio pravigas, ke oni venigu la policon. ĉu vi ne konsentas?"</p>
					<p>"Ankaŭ akvon," diras Bob, antaŭ ol Tom trovas la tempon
					respondi al Marta. "Mi tre soifas. Mi trinkos brandon plezure, sed unue
					mi trinku akvon. Bonvolu alporti al mi tre grandan glason da akvo kaj
					iom grandan glason da brando."</p>
					<p>"Jes. Estus saĝe voki la policon," Tom respondas al la
					flegistino.</p>
					<p>"Se vi ne alportos al mi ion por trinki, mi iros mem," diras
					Bob. "Mi tre soifas. Vi ne povas imagi, kiom soifa mi min sentas.  Mi
					tuj iros trinki akvon. Kaj poste mi iros aĉeti brandon. ĉu oni povas
					ricevi brandon en la memserva restoracio?"</p>
					<p>"Ne, tute ne," Marta respondas, "sed mi havas brandon en mia
					ĉambro. Mi alportos ĝin al vi. Aŭ venu mem, se vi povas. ĉu vi
					povas stariĝi?"</p>
					<p>"Mi povas," diras Bob, tre malrapide stariĝante kun la helpo
					de Tom kaj de la flegistino, "kvankam dolore."</p>
					<p>Ili iras al ŝia ĉambro.</p>
					<p>"Trinku tiom da akvo, kiom vi deziras, " ŝi diras. "Kaj poste
					mi donos brandon al vi. Eksidu sur tiun seĝon, ĝi estas tre komforta,
					vi vidos."</p>
					<p>Bob sidiĝas sur la seĝon, iom ĝemas, kaj ricevas grandan
					glason da akvo kun videble grandega plezuro. "Doloras al mi la kapo,"
					li diras.</p>
					<p>"Diru," petas Tom, "kio okazis. Ĉu finfine vi klarigos al ni?
					Ni estas ege scivolaj."</p>
					<p>Bob pripensas iomete, trinkas iom da akvo, metas la manon al la
					kapo kun dolora esprimo survizaĝe, kaj fine respondas:</p>
					<p>"Mi ne povus klarigi. Nenio estas klara. Mi estis tie apud
					Gerda. Mi aŭdis nenion, mi aŭdis neniun bruon. Kaj subite ĉio
					eksplodis en mia kapo kaj mi mortis."</p>
				</div>
				<div class="col s12 m4">
					<img src="bildoj/gerda12-2.gif" class="responsive-img">
				</div>
			</div>

		<?php 
		} // fin section 1
		if ($section=="2") {
		?>

			<section class="klarigo">
	
				<h4>al- : <i>approche, direction vers</i></h4>
		
				<p><span class="eo">veni</span> : venir → <span class="eo">alveni</span> : arriver</p>
				<p><span class="eo">iri</span> : aller → <span class="eo">aliri</span> : s'approcher</p>
				<p><span class="eo">porti</span> : porter → <span class="eo">alporti</span> : apporter</p>
				<p><span class="eo">paroli</span> : parler → <span class="eo">alparoli</span> : s'adresser</p>
		
				<p><span class="eo">kapjesi = kap + jes + i</span> : faire oui de la tête 
				(«tête» + «oui» + fin de verbe)</p>
				
				<p><span class="eo">scivola = sci + vol + a</span> : curieux, curieuse 
				(«savoir» + «vouloir» + fin d'adjectif = «qui veut savoir»)</p>
		
				<p><span class="eo">klarigi = klar + ig + i</span> : expliquer 
				(«clair» + «rendre» + fin de verbe = «rendre clair»)</p>
		
				<p><span class="eo">survizaĝe = sur + vizaĝ + e</span> : sur son visage  
				(«sur» + «visage» + fin d'adverbe = <span class="eo">sur (la, lia, ŝia) vizaĝo</span>)</p>
		
				<h4>-a → -e </h4>
		
				<p><span class="eo">facila laboro</span> : un travail facile</p>
				<p><span class="eo">facile labori</span> : travailler facilement</p>
				<p><span class="eo">la laboro estas facila</span> : le travail est facile</p>
				<p><span class="eo">labori estas facile</span> : travailler est facile</p>
				<p><span class="eo">estas facile labori</span> : c'est facile de travailler</p>
				<p><span class="eo">estas bone lerni la lingvon</span> : c'est bien d'apprendre la langue</p>
				<p><span class="eo">ripari la aŭton estas dezirinde</span> : il est souhaitable de réparer la voiture</p>
				<p><span class="eo">riparado de la aŭto estas dezirinda</span> : la réparation de la voiture est souhaitable</p>
		
				<p><span class="eo">tiu demando estas nediskreta</span> : cette question est indiscrète</p>
				<p><span class="eo">tion demandi estas nediskrete</span> : il est indiscret de demander cela</p>
		
				<p><span class="eo">estis klare, ke la laboron faros li</span> :  il était clair que c'est lui qui ferait le travail</p>
				<p><span class="eo">estis klara decido, ke la laboron faros li</span> : la décision qu'il ferait le travail était claire&nbsp;; 
				il était clairement décidé qu'il ferait le travail</p>
		
				<p><span class="eo">estus bone, se vi povus veni</span> : ce serait bien si tu pouvais venir</p>
				<p><span class="eo">estus bona afero, se vi povus veni</span> : ce serait une bonne chose si tu pouvais venir</p>
		
				<h4>ja</h4>
				<p><b>ja</b> introduit souvent une explication à ce qui a été affirmé précédemment, mais cette particule sert aussi à mettre en avant un 
				point particulier&nbsp;:</p>
		
				<p><span class="eo">mi ne povas ĝin porti, ĝi ja estas tro granda</span> : je ne peux pas le porter, c'est trop gros</p>
		
				<p><span class="eo">li certe venos, li ja tre deziras vidi vin </span> : il viendra sûrement, car il a très envie de te voir</p>
		
				<p><span class="eo">vi ja scias …</span> : tu sais sûrement … ; assurément, tu sais …</p>
		
				<p><span class="eo">ĉu li ne venos? - jes ja!</span> : viendra-t-il?  - oh oui, assurément</p>
			</section>

		<?php 
		} // fin section 2
		if ($section=="3") {
		?>

			<div class="vortlisto row">
				<div class="col s12 l6">
					<p><span class="eo">aĉeti</span> : acheter</p>
					<p><span class="eo">akvo</span> : eau</p>
					<p><span class="eo">apud</span> : à côté, près de</p>
					<p><span class="eo">brando</span> : eau-de-vie, alcool</p>
					<p><span class="eo">ĉio</span> : tout, toute chose</p>
					<p><span class="eo">denove</span> : à nouveau</p>
					<p><span class="eo">doloro</span> : douleur</p>
					<p><span class="eo">doni</span> : donner</p>
					<p><span class="eo">duone</span> : (à) demi</p>
					<p><span class="eo">eksplodi</span> : exploser</p>
					<p><span class="eo">fraŭlino</span> : Mademoiselle</p>
					<p><span class="eo">glaso</span> : verre</p>
					<p><span class="eo">ĝemi</span> : gémir, geindre</p>
					<p><span class="eo">heziti</span> : hésiter</p>
					<p><span class="eo">ja</span> : certes, bien, assurément</p>
					<p><span class="eo">kiom</span> : combien, quelle quantité</p>
				</div>
				<div class="col s12 l6">
					<p><span class="eo">klara</span> : clair(e), simple</p>
					<p><span class="eo">kvankam</span> : bien que, quoique</p>
					<p><span class="eo">larĝa</span> : large</p>
					<p><span class="eo">laŭ</span> : selon, suivant; le long de</p>
					<p><span class="eo">morti</span> : mourir</p>
					<p><span class="eo">plezuro</span> : plaisir</p>
					<p><span class="eo">polico</span> : police</p>
					<p><span class="eo">porti</span> : porter</p>
					<p><span class="eo">pripensi</span> : réfléchir à, considérer, envisager</p>
					<p><span class="eo">ricevi</span> : recevoir</p>
					<p><span class="eo">seĝo</span> : chaise</p>
					<p><span class="eo">soifi</span> : avoir soif</p>
					<p class="sekva"><span class="eo">soifo</span> : soif</p>
					<p><span class="eo">sufiĉa</span> : suffisant(e)</p>
					<p><span class="eo">tiom</span> : tant (de), autant</p>
					<p><span class="eo">trinki</span> : boire</p>
				</div>

		<?php 
		} // fin section 3
		if ($section=="4") {
		?>

			<fieldset class="ekzerco">
				<legend><b>Demandoj</b> </legend>

				<input type="hidden" name="013_cxap12.0" value="Demandoj">
				<div class="tasko">
				<?php $demandoj=array (
					1 => "Kion Bob tuj deziras?",
					2 => "Kie oni povas trovi brandon?",
					3 => "Kion Bob trinkas unue?",
					4 => "Ĉu li povas bone klarigi, kio okazis?",
					5 => "Ĉu li aŭdis bruon?",
					6 => "Ĉu Bob vere mortis?"
				);
				ekzerco(True, 2);
				?>
				</div>
			</fieldset>
		
			<fieldset class="ekzerco">
				<legend>Forigu la vortojn kun {}.</legend>
				<input type="hidden" name="013_cxap12.1" value="Forigu la vortojn kun {}.">
				<div class="ekzemplo">
					<p><em>Ekzemple:</em></p>
					<p>Marko ŝatas {la} aŭton {de Marko}. → Marko ŝatas sian aŭton.</p>
					<p>{Petro} ŝatas {la} aŭton {de Ivano}. → Li ŝatas lian aŭton.</p>
				</div>
				
				<div class="tasko">
				<?php $demandoj=array (
					7 => "{Linda} rigardas al {Linda} en la spegulo.",
					8 => "{Tom} rigardas al {la blondulo}.",
					9 => "{Tom} rigardas al {la} kunulo {de Tom}.",
					10 => "{Tom} rigardas al {la} kunulo {de la blondulo}.",
					11 => "{La} amiko {de Bob} amas {Lindan}.",
					12 => "{La} amikino {de Tom} rigardas {la amikinon de Tom} en la spegulo.",
					13 => "{La} amikino {de Ivano} amas {Ivanon}.",
					14 => "{La blondulo} estas en {la} aŭto {de la blondulo}.",
					15 => "Gerda estas en la aŭto de {la} amiko {de Gerda}.",
					16 => "{Petro kaj Ivano} kaŝas {Petron kaj Ivanon} sub la tablo."
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

			<h3>Jen vi ree trinkas!</h3>
			
			<p>Sufiĉas! Nekredeble! Jam denove vi ektrinkas! Ne, amiketo, vi jam
			trinkis sufiĉe. Tro estas tro. Kial vi ĉiam devas troigi? La
			kuracisto diris: «Ne permesu, ke li ricevu tiom da glasoj. Unu jam
			estas multe por li. Aŭ ĉu vi volas, ke li fariĝu tute malsana? Se
			li plu soifas, akvon li trinku. Akvo estas bonega por la sano.»</p>
			<p>
			Kaj jen vi denove aĉetis brandon! Kion vi diris? Vi soifas, ĉu?
			Ho jes, vi soifas. Via soifo estas senfina. Via soifo estas ĉiama.</p>
			<p>
			Vere mi ne komprenas vin. Vi ne plu estas knabeto. Vi eĉ ne plu estas
			knabego. Vi estas viro, alta, forta, granda viro.</p>
			<p>
			Se almenaŭ vi ricevus plezuron el via trinkado! Sed pripensu iomete.
			Ĉu brando plezurigas vin? Eĉ ne. Fakte, ĝi eĉ ne sensoifigas vin.
			Vi tion diris al mi, ĉu ne? Laŭ vi mem, ĝi ne forsvenigas vian
			soifegon. Laŭ viaj diroj, tiel estas: post kiam vi trinkis glason, vi
			deziras denove trinki, vi tuj resentas la deziregon brandi.</p>
			<p>
			Viaj malsaĝaj diroj dolorigas al mi la koron. Kiam vi diras, ke ĉar
			vi estas tre grandkorpa, via brandotrinkego ne faras malbonon, kiel mi
			povus kredi vin? Mi havas okulojn kaj vidas. Kiam vi diras, ke korpa
			laborado tuj eligas el vi la troon da brando, ke laborante kun plena
			forto vi tuj elkorpigas la malsanigajn substancojn, permesu al mi
			esprimi mian plenan malkonsenton.</p>
			<p>
			Jes ja, vi estas granda, eĉ grandega. Jes ja, via korpo estas alta
			kaj larĝa. Vi estas forta kaj dika. Pli ol sufiĉe dika, verdire. Mi
			eĉ diru simple: tro dika, multe tro dika, ĉar la brando dikigas vin
			sen vin serioze fortigi.</p>
			<p>
			Kiam mi ekvidis vin la unuan tagon — ĉu vi memoras? — mi vin
			ekamis, ĝuste ĉar vi aspektis tiel bele. Fortegulo vi estis
			tiutempe. Jen bela viro, mi diris al mi, larĝa kaj forta. Tiutempe vi
			ne estis dika. Sed vi havis fortan korpon, belan vizaĝon, kun amika,
			plezuriga esprimo, kaj mi enamiĝis tuj. Mi ne imagis tiuepoke, ke vi
			fuŝos ĉion ĉi per brandemo, ke vi fuŝos vin mem, ke vi fuŝos nian
			kunan vivon, manke de volo. Mi ne imagis, ke vivi apud vi estos ĉiama
			doloro, ke mi vivos, ne apud fortulo, kiu helpos min, sed apud
			senvolulo, kiu fuŝos mian vivon.</p>
			<p>
			Ho! Mi konas viajn ĉiamajn rediraĵojn! Laŭ via opinio, mi estas
			senkora. Laŭ via sento, mi estas nekomprenema. Laŭ viaj paroloj, mi
			estas aŭtoritatema. Mi ŝatas Povon, laŭ vi. Mi deziras esti supera
			al vi, laŭ via pensmaniero, kaj mi volas ĉiam diradi al vi, kion vi
			faru. Tiel vi sentas nian rilaton, ĉu ne? Laŭ vi, mia sola deziro
			en la vivo estas superforti vin.</p>
			<p>
			Ne, amiketo; tiel ne estas. Mi tiom ŝatis, kiam mi sentis vin supera
			al mi. Ĝuste tio igis min vin ami: via maniero ĉiam superi la
			malfacilaĵojn de la vivo. Kio ajn okazis, la ĝusta decido estis
			klara por vi. Kio ajn okazis, vi ĉiam estis la plej forta, la plej
			saĝa, la plej supera.</p>
			<p>
			Kvankam ni travivis malfacilajn tagojn — ĉu vi memoras? — en la
			unua tempo de nia kunvivado, tamen ĉiam vi sukcesis elturni vin. Kiom
			ŝatinda estis la vivo apud vi tiuepoke! Kiom plezuriga!</p>
			<p>
			Ŝajnis, ke vi havas povon super la okazaĵoj, super la vivo. Povon vi
			havis, ĉar vi havis volon. Sed kio restas el via volo nun? Kio
			postrestas el via volforto, el via povo voli, kaj per tiu simpla volo
			aliigi la tutan vivon? Kie ĝi postrestis? Kien ĝi forsvenis? Kio
			okazis al ĝi? Kion vi faris el ĝi? Vi iras aĉeti brandon. Vi
			sidas apud glaso da brando. Vi rigardas ĝin. Vi rigardadas ĝin. Vi
			rigardegas ĝin. Kaj vi ne plu povas malkonsenti. Vi ne plu trovas en
			vi la volon kapnei<a href='#notoj'>[1]</a> al ĝi. Kial vi fuŝis nian vivon, kara? Kara,
			kara mia, eta mia karulo, koro mia, vivo mia, kial vi fuŝis ĉion
			inter ni?</p>
			<p>
			Kial vi permesis al tiu brando ricevi la Povon? Ĝi estas nia
			superulo nun! Decidas ĝi, kion ni faru. Kaj ni povas nur sekvi ĝian
			volon. Vi aĉetas ĝin, kaj tiu aĉetaĵo direktas la vivon ĉi tie.
			Aĉetadi brandon denove kaj denove, dum la akvo estas tiel bona ĉe
			ni, kia malsaĝa maniero vivi!</p>
			<p>
			Mi scias, ke vi ektrinkis brandon, kiam okazis tiuj timigaj
			malfacilaĵoj ĉe via laboro. Ne estis facile por vi. Ne estis klare,
			kion fari. Viaj labordonantoj ne volis, ke vi malkaŝe diru la veron.
			Ili timegis, ke la homoj ekstere scios la veron, ke oni klarigos al la
			tuta urbo, kion ili faris, ke la tuta urbo parolos pri ilia misfaro,
			pri tiu gravega fuŝo, pri tiu gravega misdirektado de la aferoj. Kaj
			ili elsendis vin for. Ili forsendis vin eksteren, timante, ke la
			polico intervenos.</p>
			<p>
			Forsendita! Senoficigita! Kaj sen eblo respondi, sen eblo rebati,
			sen eblo pravigi vin, klarigi, kion vi faris, kaj kial. Vi retrovis
			vin senlabora. Esti senlaborulo nuntempe ne estas facila vivo. Neniam
			estis, cetere. Vivo de senlaborulo ne estas facile akceptebla. Brando
			akceptigis ĝin pli facile al vi, ĉu ne? Aŭ almenaŭ tion vi
			imagis. Kun kiom da malpravo!</p>
			<p>
			Ĉar kvankam vi aĉetis pli kaj pli da brando, via vivo ne faciliĝis.
			Male. Estas pli malfacile trovi laboron, kiam oni montriĝas
			brandoplena. Kaj kvankam mi amis vin, kaj komprenis vian zorgadon, mi
			ne povis akcepti tion. Ĉiaokaze ne la fakton, ke vi iris ĉiam denove
			aĉeti brandon, kaj ke nia aĉetpovo pli kaj pli mallarĝiĝis.</p>
			<p>
			Kvankam vi ne trinkis tro multe en la unuaj tagoj, tamen mi ne
			akceptis. Mi timis, ke post la epoko kun unu duonglaso vespere venos
			epoko kun duonglaso posttagmeze, kaj poste epoko kun plenaj glasoj
			dumtage kaj ĉe noktiĝo, kaj tiel plu, kaj tiel plu.</p>
			<p>
			Kaj evidentiĝis finfine, ke mi pravis, ĉu ne?</p>
			<p>
			Kvankam mi konsentas, ke mi eble ne sufiĉe komprenis viajn zorgojn de
			senlaborulo, tamen, ĉu oni povas diri, ke se mi agus alimaniere
			rilate al vi, vi ne trinkus tiun diablan brandon? Kvankam eble estas
			iom da vero en tio, tamen tiu pensmaniero ŝajnas al mi neĝusta. Kiom
			ofte mi pensis: «Jen estas la fina glaso. Post ĉi tiu li ne plu
			trinkos brandon!» Sed tiom ofte la faktoj montris min malprava.</p>
			<p>
			Kaj nun, kion fari? Ĉu vi povus tion diri al mi? Kiel eligi vin el
			tiu diabla emo? Kiel resanigi vin, kaj samokaze rebonigi nian
			kompatindan, fuŝitan kunekziston?</p>
			<p>
			Se vi scius, kiom mi malamas tiun brandon! Kara, kara, se almenaŭ vi
			komprenus min! Mi vin amas. Mi vin amegas. Ankoraŭ plu. Eĉ se de
			tempo al tempo mi diras la malon, mia koro ankoraŭ batas amege por
			vi.</p>
			<p>
			Sed kiom ĝi doloras! Kiom doloras vidi vin fordoni vian vivon al
			brando! Karulo! Karulo mia! Ĉu vere vi ne povas forigi el vi tiun
			diablan emon? Ĉu vi ne povus reekprovi, eĉ se nur kompate al mi?</p>
			<p>
			Ekzistas malsanulejoj, kie oni kuracas brandemon, mi aŭdis. Oni tie
			akceptus vin. Mi petegas vin, konsentu iri al tia malsanulejo! Mi
			faros ion ajn, por ke vi akceptu tiun ideon. Mi laboros ankoraŭ pli
			multe ol nun, se ne estos eble alimaniere.</p>
			<p>
			Aŭ almenaŭ konsentu, ke venu vin kuraci faka kuracisto. Ekzistas
			kuracistoj, kiuj specialiĝis pri brandotrinkemo, oni diris al mi.
			Eble se ni rigardos la aferon malsano, eble estos por vi pli facile
			seniĝi de ĝi. Akceptu. Mi petegas vin, karulo, akceptu almenaŭ
			diskuti kun fakulo. Vi ne imagas, kian plezuregon tio donus al mi. Kaj
			kiel kontentega vi mem sentus vin! Vi sentus, ke vi refariĝas viro.
			Vi sentus reviviĝon, reviriĝon, refortiĝon. Vi refariĝus la
			fortega bonulo, kiu tiel ame iun belan tagon ekrilatis kun mi.</p>
			<p>
			Vi tion faros, ĉu ne? Jes, mi vidas en viaj okuloj, ke vi pli kaj
			pli konsentas. Mi vokos la kuracan fakulon. Li venos kaj resanigos
			vin. Kaj vi refariĝos vera viro. Kaj ni reamos ege ege bele unu la
			alian.</p>
			
			<a id="notoj"></a>
			<p class="rimarko"><strong>NOTOJ</strong> : 
			<ol>
				<li><span class="eo">Kapnei</span> (kap-ne-i) : diri «ne» per la kapo; montri per la kapo, 
				ke oni malkonsentas.</li>
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