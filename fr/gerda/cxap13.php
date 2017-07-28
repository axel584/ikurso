<?php 
$titolo="13 (dek tri)";
$leciono = 13;
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

			<h3>Kara spionino!</h3>
			<div class="row dialogo">
				<div class="col s12 m8">
					<p>La vojo ŝajnas longa, kiam oni silentas la tutan tempon.
					Linda estas parolema; krome, ŝi deziras ricevi informojn pri sia
					stranga kunulo; ŝi do tute ne ŝatas tiun longan silentadon. Kial ne
					provi denove? Ŝi decidas, ke ŝi rekomencos paroli. Se li ne ŝatos,
					nu, li esprimos sian malŝaton, kaj ili plu veturos senvorte, kaj la
					vojo plu ŝajnos longega.
					<p>"Vi diris…," ŝi komencas, ne sciante, kiel ŝi finos, sed
					feliĉe ideo tuj venas: "Vi diris, ke vi havas zorgojn. Nu, ofte oni
					sentas sin pli bone, kiam oni esprimas siajn zorgojn al iu."</p>
					<p>"Vi estas scivolema, ĉu ne? Nu, mi ne volas esti malafabla kun
					tiel bela knabino, kiel vi. Pardonu, se mi ne montras min pli
					amikiĝema. Sed miajn zorgojn mi ne povas klarigi."</p>
					<p>"Ĉu vi estas certa? Oni ofte imagas, ke afero estas neebla,
					ĉar oni ne scias, kiel komenci, sed…s"</p>
					<p>"Ne. Kiom koncernas min, ne estas tiel. Mi ne povas rakonti pri
					miaj zorgoj, ĉar ili koncernas personojn, pri kiuj mi ne rajtas
					paroli. Oni devas esti diskreta, ĉu ne? Ĉu vi ŝatus, ke viaj amikoj
					rakontu ĉion pri vi al nekonato?"</p>
					<p>"Kompreneble ne. Mi bone komprenas vin. Fakte, mi ne estas
					speciale scivola. Mi komencis diri tion nur, ĉar mi trovis la silenton
					peza kaj la vojon pli kaj pli longa. Sed mi tute ne volus maldiskreti."</p>
					<p>"Estas fakto, ke oni kutime interparolas, kiam oni veturas
					kune. Mi verŝajne ne estis tre ĝentila, lasante tiun silenton daŭri
					kaj daŭri pli kaj pli peze por vi. Mi eĉ ne rimarkis, ke silento
					estiĝas kaj daŭras. Mi estis absorbita de miaj pensoj, de miaj
					zorgoj, kaj ankaŭ de la vojo. Oni devas atenti la vojon, kiam oni
					ŝoforas, ĉu ne? Strange, kvankam vi estas tre bela kaj sidas tuj apud
					mi, plej proksime al mi, mi tamen forgesis pri vi. Nur ekzistis por mi
					la vojo en miaj okuloj, kaj la zorgoj en mia kapo."</p>
					<p>"Ĉe mi okazis la malo. Mi daŭre pensis pri vi. Mi rimarkis,
					ke vi ne aspektas tre ĝoje. Vi ŝajnis malfeliĉa. Mi min demandis,
					ĉu mi povus helpi. Vi ja tre afable konsentis min veturigi. Mi sentas
					min danka. Mi volus redoni al vi similan servon. Mi opiniis, ke se mi
					helpas vin vortigi vian malĝojon, tio eble senpezigos vin, kaj mi
					estos kontenta agi helpe.  Eble estas stulte, sed mi ĉiam deziras
					feliĉigi la homojn."</p>
				</div>
				<div class="col s12 m4">
					<img src="bildoj/gerda13-1.gif" class="responsive-img">
				</div>
			</div>

			<div class="row dialogo">
				<div class="col s12 m8">
					<p>"Vere, vi estas tre bonkora. Mi ege bedaŭras, ke mi ne povas
					jesi al via propono. Sed, kiel mi jam diris, miaj zorgoj koncernas
					aferojn, pri kiuj mi ne rajtas rakonti. Nu, jen ni alvenas. Kie vi
					deziras, ke mi lasu vin?"</p>
					<p>"Kien precize vi iras? Kie vi haltos? Kie vi lasos la aŭton?
					Vi povus lasi min tie. Estos plej facile por vi."</p>
					<p>"Ĉiam scivola, ĉu ne? Vi ŝatus scii, kien mi iras," li diras
					ridante, dum Linda sentas sin ruĝiĝi, ĉar similan rimarkon ŝi tute
					ne atendis. Dum momento, ŝi ne scias, kiel respondi. Ŝi sentas sin
					stulta.</p>
					<p>"Tute ne," ŝi fine diras, malvere. "Kien vi iras, tio tute ne
					interesas min. Mi proponis tion nur, ĉar tio ŝajnis plej facila. Sed
					se ĝenas vin, ke mi scios, vi povas lasi min ie ajn en la centro.
					Ekzemple ĉe la Internacia Hotelo, aŭ ĉe la Granda Teatro.
					Ĉiaokaze, mi treege dankas vin kaj mi facile trovos mian vojon. Jen.
					Tie ĉi estas perfekte. Koran dankon, kaj ĝis revido, kara sinjoro."</p>
					<p>"Ĝis revido, kara spionino!"</p>
					<p>La aŭto forveturas, kaj Linda ne povas forturni la okulojn de
					ĝi. Kara spionino, vere! Kion li volis diri? Ĉu li suspektus? Nia
					kompatinda Linda ne scias, kion pensi.</p>
				</div>
				<div class="col s12 m4">
					<img src="bildoj/gerda13-2.gif" class="responsive-img">
				</div>
			</div>

		<?php 
		} // fin section 1
		if ($section=="2") {
		?>

			<section class="klarigo">
	
				<h4>koncerne … -n</h4>
			
				<p><span class="eo">koncerne vian proponon</span> : pour ce qui est de votre proposition</p>
				<p><span class="eo">kiom koncernas min</span> : pour autant que je sois concerné</p>
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
					<p><span class="eo">absorbi</span> : absorber</p>
					<p><span class="eo">bedaŭri</span> : regretter</p>
					<p><span class="eo">centro</span> : centre</p>
					<p><span class="eo">daŭri</span> : durer</p>
					<p><span class="eo">daŭrigi</span> : continuer (quelque chose)</p>
					<p><span class="eo">ekzemplo</span> : exemple</p>
					<p><span class="eo">feliĉa</span> : heureux, -euse</p>
					<p class="sekva"><span class="eo">feliĉe</span> : heureusement</p>
					<p><span class="eo">forgesi</span> : oublier</p>
					<p><span class="eo">ĝentila</span> : poli(e), courtois</p>
					<p><span class="eo">ĝojo</span> : joie, bonheur</p>
					<p class="sekva"><span class="eo">ĝoja</span> : joyeux, -euse, content(e)</p>
					<p><span class="eo">hotelo</span> : hôtel</p>
					<p><span class="eo">ie</span> : quelque part</p>
					<p><span class="eo">interesi</span> : intéresser</p>
					<p class="sekva"><span class="eo">interesa</span> : intéressant(e)</p>
					<p><span class="eo">internacia</span> : international(e)</p>
					<p><span class="eo">komenci</span> : commencer</p>
					<p><span class="eo">konato</span> : connaissance</p>
					<p><span class="eo">koncerni</span> : concerner</p>
					<p class="sekva"><span class="eo">koncerne …-n</span> : concernant</p>
					<p><span class="eo">krome</span> : de plus, en outre</p>
					<p><span class="eo">kutimi</span> : avoir l'habitude de, avoir coutume</p>
				</div>
				<div class="col s12 l6">
					<p class="sekva"><span class="eo">kutimo</span> : habitude, coutume</p>
					<p><span class="eo">momento</span> : moment</p>
					<p><span class="eo">nacio</span> : nation</p>
					<p class="sekva"><span class="eo">nacia</span> : national(e)</p>
					<p><span class="eo">nekonato</span> : (un) inconnu</p>
					<p><span class="eo">perfekta</span> : parfait(e)</p>
					<p><span class="eo">persono</span> : personne</p>
					<p><span class="eo">peza</span> : lourd, pesant</p>
					<p><span class="eo">preciza</span> : précis(e)</p>
					<p><span class="eo">proponi</span> : suggérer, proposer&nbsp;; offrir</p>
					<p><span class="eo">rajti</span> : avoir le droit de</p>
					<p class="sekva"><span class="eo">rajto</span> : (le) droit (de faire quelque chose)</p>
					<p><span class="eo">rakonti</span> : raconter</p>
					<p><span class="eo">ridi</span> : rire</p>
					<p><span class="eo">rideti</span> : sourire</p>
					<p><span class="eo">rimarki</span> : remarquer, noter</p>
					<p><span class="eo">simila</span> : similaire</p>
					<p><span class="eo">stulta</span> : stupide, idiot(e), imbécile</p>
					<p><span class="eo">ŝofori</span> : conduire</p>
					<p><span class="eo">ŝoforo</span> : conducteur, chauffeur</p>
					<p><span class="eo">teatro</span> : théâtre</p>
					<p><span class="eo">vojo</span> : voie, route, chemin</p>
				</div>
			</div>

		<?php 
		} // fin section 3
		if ($section=="4") {
		?>

			<?php 
				getEkzercon(76,$persono_id);
			?>
		
			<?php 
				getEkzercon(77,$persono_id);
			?>


		<?php 
		} // fin section 4
		if ($section=="5") {
			//include "lasusono.inc.php";
		?>

			<h3>Revenis amo, feli&#265;u ni!</h3>
			
			<p>Mi devas rakonti al vi. Mi estas tiel feliĉa! Mi retrovis ŝin! Mi
			revidis ŝin! Kiun? Karletan, kompreneble. Evidente mi parolas pri
			Karleta. Pri kiu mi parolus? Ĉu ekzistas alia virino en la mondo?
			Jes, mi revidis ŝin.</p>
			<p>
			Ŝi sidis ĉe tablo en trinkejo, sola, antaŭ taso da kafo. Mi soifis,
			kaj eniris la trinkejon. Mi tuj rimarkis ŝin. Ŝi aspektis kiel
			persono, kiu atendas iun. Mi min demandis, ĉu mi iru al ŝi, ĉu mi
			iru sidi ĉe la apuda tablo, aŭ ĉu ĉe pli malproksima. Mi decidis
			iri iom pli malproksimen. Mi trovis bonan lokon, de kie mi povis
			facile observi ŝin.</p>
			<p>
				Mi volis komence observi ŝian vizaĝon, provi ekscii, laŭ ŝia
				esprimo, ĉu ŝi feliĉas aŭ ne. Krome, mi deziris ne aliri ŝin tuj,
				ĉar ŝajnis al mi, ke estas pli saĝe lasi mian koron trankviliĝi
				antaŭ ol ekrilati kun ŝi.</p>
			<p>
			Ĉu vi memoras tiun tagon, tiun dolorigan tagon, kiam ŝi forlasis min
			? Antaŭ longe tio okazis. Ŝi malkontentis pri mi, pri io, kion mi
			fuŝe faris. Kaj, malsaĝe, mi malkonsentis pardonpeti pri mia fuŝo.
			Kiel malsaĝa mi estis! Ŝi pravis, kaj mi ne. Se tiuepoke mi sincere
			dirus: «Jes, mi mispaŝis. Bonvolu pardoni min. Mi estas fuŝulo. Mi
			riparos la aferon.», ŝi certe plu restus kun mi, ĉar ŝi trovis min
			plej aminda. Sed mi malsaĝe volis, ke ŝi konsideru min prava.</p>
			<p>
			Ŝi tiam opiniis, ke vivo kun mi ne estos ebla, se mi devas senmanke
			senti min prava, eĉ kiam mi fuŝe agis kaj estas evidente malprava.
			Jes, tiam ŝi foriris, lasante min sola, malĝojige sola. Mi sentis
			min forgesita, forlasita.</p>
			<p>
			Kiom mi bedaŭris mian malsaĝan reagon! Sed mia bedaŭro ne helpis.
			Simpla bedaŭro neniam helpas, ĉu?</p>
			<p>
			La vivo iĝis seninteresa por mi. Mi laboris laŭkutime. La ekzisto
			estis daŭro, ne vivo. Mi eĉ min demandis, ĉu estas iu ajn intereso
			en daŭrigo de tiu vivo. Se vivo estas senĝoja, senplezura, kial
			daŭrigi ĝin? La ideo min mortigi envenis en mian kapon, kaj restadis
			en ĝi dum kelka tempo. Mi hezitis: ĉu plu vivi, aŭ ĉu morti tuj?
			Kio estas preferinda, kiam la vivo perdis ĉian intereson?</p>
			<p>
			Se paroli sincere, mi diru, ke mi timas la morton. Nur ĉar mi ĝin
			timas, mi forlasis la ideon min mortigi. Mi do daŭrigis mian
			malfeliĉan ekziston.</p>
			<p>
			Kaj jen Karleta trovis alian viron, kaj enamiĝis al li. Mi konis lin.
			Li nomiĝas Jozefo. Malseriozulo. Fuŝulo. La ideo, ke ŝi emas
			kunvivi kun simila ulo, dum mi ekzistas, estis... nu... mi ne trovas
			vortojn por esprimi, kion mi sentis. Mi ne povis porti tiun pezon. Mia
			koro estis peza. Pli kaj pli peza.</p>
			<p>
			Tamen, mia vivo... ne, vivo ne estas ĝusta vorto, tiel vivi ne estas
			vivi, mi diru: mia ekzistado... tamen, do, mia ekzistado estis
			seninteresa. Mi provis forgesi ŝin, sed ne povis. Amikoj proponis al
			mi promenojn, veturadojn, agadojn, teatrovidon, diskutojn,
			kuntrinkadon. Ili estis tre afablaj. Sed nenio interesis min.</p>
			<p>
			Mi eĉ pensis pri tio, ĉu mi mortigu Jozefon. Mian morton mi timas —
			mi pensis — ne la morton de aliuloj! Ĉu vi trovas min timige
			malŝatinda? Pardonu, mi nur sinceras pli ol kutime. Jes, komence mi
			havis tiun ideon. Meti finon al<a href='#notoj'>[1]</a> mia doloro mortigante mian
			malamikon.</p>
			<p>
			Mi malamis lin. Kaj en malamo kuŝas nekredebla forto. Ĉu vi jam
			sentis tion? Eble vi neniam malamis. Videble, vi estas plej bonkora
			homo.</p>
			<p>
			Mi tamen forlasis la ideon meti finon al la vivo de Jozefo (eble ĉar
			mi timas la policon!). Mi provis revidi Karletan, sed Jozefo forlasis
			la urbon, kaj Karleta sekvis lin for. Ŝi trovis alian laboron, ie,
			kaj mi plu restis same sola.</p>
			<p>
			Komence mi pensis: «Ŝi ne rajtas fari tion al mi. Ŝi ne havas tiun
			rajton. Ŝi devas vivi kun akceptinda viro, saĝa, bonkora, juna.
			Unuvorte, kun viro kiel mi. Ne kun fuŝulo kiel Jozefo».</p>
			<p>
			Sed poste mia pensmaniero aliiĝis. Kion similaj pensoj ja povus
			alporti al mi? Nenion helpan, nur bedaŭron. Fakte, mi ne pensis
			prave, ĉu? Ŝi ja rajtas fari el sia vivo, kion ŝi volas. Kaj mi ne
			havas rajton devigi ŝin min ami. Ŝi rajtas forlasi min, se mi agas
			malsaĝe. Neniam ni kunigis niajn vivojn antaŭ iu urba aŭ alia
			aŭtoritato. Mi do havis neniun rajton super ŝi. Tiuj kaj similaj
			konsideroj helpis min forlasi mian ne-sanan pensovojon, kaj aliri
			vojon pli bonan.</p>
			<p>
			Mi atendis ion ajn, sed ne tiun trinkejan revidon. Kara Karleta! Dum
			ŝi sidis tie en la angulo, ŝi estis ankoraŭ pli bela, ol kiam mi
			komence konatiĝis kun ŝi. Sed ŝi aspektis malĝoje.</p>
			<p>
			Okazis io eĉ pli neatendita ol la fakto, ke mi revidis ŝin: subite,
			ŝi turnis la okulojn al mi, min vidis, kaj ekstaris. Ŝi ekpaŝis en
			mia direkto, ne tre rapide, tiel ke mi havis sufiĉe da tempo por min
			demandi, kion ŝi diros.</p>
			<p>
			Min tuŝis timo. Mi kvazaŭ antaŭsentis, ke doloriga bato falos sur
			min. Mi timis, ke ŝiaj unuaj vortoj estigos eksplodon de doloraj
			sentoj en mia kompatinda koro.</p>
			<p>
			Sed tute male. Apenaŭ mi povis kredi miajn okulojn: jen ŝi sidis
			apud mi kaj ekparolis kun larĝa rideto. Ho, tiu rideto! Similan
			rideton mi neniam vidis. Neniam en mia vivo mi sentis min tiel
			kortuŝita. Tiu rideto estis mesaĝisto pri baldaŭaj feliĉoj.</p>
			<p>
			«Kara Petro!» ŝi diris. «Kiel mi ĝojas vin revidi! Se vi scius,
			kiel feliĉa mi estas! Oni diris al mi, ke vi forlasis la urbon, kaj
			jen mi retrovas vin. Ĉu vi ankoraŭ min malamas?»</p>
			<p>
			Imagu tion! Ŝi opiniis, ke mi malamas ŝin. Eble mi iomete ŝin
			malamis, kiam ŝi forlasis min, sed tamen... Mi repensis pri miaj
			mortig-ideoj; ili koncernis min, kaj poste Jozefon, sed ŝin neniam.</p>
			<p>
			«Mi neniam malamis vin», mi respondis, «nur Jozefon».</p>
			<p>
			Kaj tiam ŝi rakontis pri Jozefo. Liaj proponoj tute ne estis
			seriozaj. Tuj kiam li alvenis en tiun alian urbon, li faris similajn
			proponojn al alia virino, kaj forlasis Karletan. Estis tre dolore al
			ŝi, ĉar ŝi imagis, ke li estos la viro en ŝia vivo. Sed iom post
			iom ŝi retrovis sian kortrankvilon. Pli kaj pli ŝi rememoris nian
			antaŭan amrilaton kiel vere feliĉigan.</p>
			<p>
			Ŝi do deziris rerilati kun mi. Sed iu malsaĝulo fuŝ-informis ŝin
			dirante, ke mi foriris, ke mi forlasis mian laboron, kaj trovis alian
			malproksime. Li intermiksis mian nomon kun tiu de aliulo, ĉar niaj
			nomoj intersimilas.</p>
			<p>
			Mi klarigis al ŝi la vojon, kiun miaj pensoj kaj sentoj iris dum tiu
			longa tempo malproksime de ŝi. Krome, mi diris, kiom mi nun konscias
			mian malsaĝecon. Mi diris, kiom mi bedaŭras, ke mi lasis tro altan
			opinion pri mi mem fuŝi belegan amon.</p>
			<p>
			Tiumomente ni komencis ridi unu kun la alia. Kiom ni ridis! Ni ne
			vere scias, kial. Nur, ĉar estis tiel bone retroviĝi kune, kaj
			rimarki, ke ni tuj povas tiel forte reami unu la alian.</p>
			<p>
			Ni parolis pri ĉio kaj nenio, ĉiam ridante. Ni rakontis niajn vivojn
			unu al la alia. Ni estis ĝojaj, neimageble ĝojaj. Mi metis mian
			manon sur ŝian manon, proksimigis mian kapon al ŝia kapo. Niaj koroj
			batis aŭdeble, aŭ apenaŭ malpli ol aŭdeble. Ni sentis kuniĝon. Ni
			forlasis la kafejon, promenis en la urbo, ĉiam ride diskutante, ĉiam
			kun ĝojplenaj vizaĝoj. Ni iris al mia cambro. Ni...</p>
			<p>
			Nu, nu, nu, nu. Ĉu vi scias, kio estas feliĉo? Vere, amiko, se vi
			povus imagi...</p>

			<a id="notoj"></a>
			<p class="rimarko"><strong>NOTOJ</strong> : 
			<ol>
				<li><span class="eo">Meti finon al <em>x</em></span> : fari, ke x finiĝu; igi, ke <em>x</em> ne plu ekzistu.</li>
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
	
	<?php include "gerdaflanko.inc.php"; ?>

</div>

<?php include "gerdapiedo.inc.php"; ?>
