<?php 
$titolo="11 (dek unu)";
$leciono = 11;
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

			<h3>Linda havas ideon</h3>
			<div class="row dialogo">
				<div class="col s12 m8">
					<p>Linda ekhavis ideon. Ŝi aliris la junan blondan viron, dum li
					proksimiĝis al sia aŭto, kaj alparolis lin:</p>
					<p>"Sinjoro, ĉu vi bonvolus helpi al mi?"</p>
					<p>Li turnis sin al ŝi kun vizaĝo ŝajne ne tre kontenta, kaj
					ŝin rigardis dum longa senvorta minuto.</p>
					<p>"Kiel mi povus vin helpi?" li fine demandis, kaj li tuj
					aldonis: "Bonvolu pardoni min, se mi respondas nee, sed al mi tempo
					vere mankas. Mi devas urĝe veturi al la urbo."</p>
					<p>"Ĝuste tiel vi povas min helpi. Mia aŭto paneas. Io estas
					fuŝita en ĝi. Mi ne sukcesas ĝin irigi…"</p>
					<p>"Pardonu min, sed mi ne sukcesus rebonigi la aferon, eĉ kun
					plej granda bonvolo. Pri mekaniko mi scias nenion. Mi ĉiam miras vidi,
					ke veturiloj entute funkcias. Kiam mi vidas motoron, ĉiam mirigas min,
					ke tia ŝajne senorda aranĝo de pecoj kaj objektoj igas aŭton iri.
					Mi…"</p>
					<p>"Mi ne petas vin ripari mian veturilon, vi min miskomprenis.
					Mi demandas nur, ĉu vi bonvolus akcepti min en via aŭto ĝis la
					urbo."</p>
					<p>La ideo de Linda estis jena: sekvi lin estus danĝere, sed se
					li veturos aŭte, mi petos lin akcepti, ke mi veturu kun li, kaj dum la
					veturado mi igos lin paroli. Mi diskrete faros ŝajne banalajn
					demandojn, kaj paroligos lin. Tiel mi scios kiel eble plej multe pri
					li.</p>
					<p>"Nu, bone," li fine konsentas. "Konsentite, venu." Kaj li
					malfermas la pordon de la aŭto por ŝi.</p>
				</div>
				<div class="col s12 m4">
					<img src="bildoj/gerda11-1.gif" class="responsive-img">
				</div>
			</div>

			<div class="row dialogo">
				<div class="col s12 m8">
					<p>"Dankon, vi vere estas tre afabla. Tio ege helpas min. Mi plej
					sincere dankas."</p>
					<p>"Ne dankinde," li respondas, iom seke. Kaj li ekirigas la
					motoron.</p>
					<p>"Mi ne ŝatas la ideon, ke mi devos venigi ripariston,
					mekanikiston," ŝi diras. "Mi tute ne ŝatas aŭtojn, fakte. Mi havas
					veturilon, ĉar estas tre oportune, sed mi ne ŝatas aŭtojn."</p>
					<p>La alta junulo nur silentas.</p>
					<p>"Ne estas facile igi lin diri ion," pensas Linda, iom zorge,
					sin demandante, ĉu estis saĝe enmiksi sin en tiun aventuron. ŝi
					forte deziras lin paroligi, sed samtempe timas malkontentigi lin.
					Neniam estas facile trovi plene kontentigan manieron agi.</p>
					<p>"Ĉu ĝenas vin, se mi parolas?" ŝi demandas, "vi eble estas
					silentema."</p>
					<p>"Mi havas zorgojn," li respondas.</p>
					<p>"Mi ne volas ĝeni vin. Estas jam tiel bonkore, ke vi min
					veturigas. Mi vere sentas grandegan dankemon al vi."</p>
					<p>"Ne dankinde," li ripetas, kaj silentas plu, pripensema.</p>
				</div>
				<div class="col s12 m4">
					<img src="bildoj/gerda11-2.gif" class="responsive-img">
				</div>
			</div>

		<?php 
		} // fin section 1
		if ($section=="2") {
		?>

			<section class="klarigo">
	
				<h4>-ante : <i>participe présent actif, forme adverbiale</i></h4>
		
				<p><span class="eo">laborante, li silentas</span> : il reste silencieux en travaillant</p>
				<p><span class="eo">ni diskutis promenante</span> : nous parlions en nous promenant</p>
				<p><span class="eo">vi lernis la lingvon parolante ĝin</span> : vous avez appris la langue en la parlant</p>
		
				<h4>-ig- : <i>rendre, faire devenir</i></h4>
		
				<p><span class="eo">granda</span> : grand(e) → <span class="eo">grandigi</span> : agrandir</p>
				<p><span class="eo">(pli) forta</span> : (plus) fort(e) → <span class="eo">(pli)fortigi</span> : renforcer</p>
				<p><span class="eo">facila</span> : facile → <span class="eo">faciligi</span> : faciliter</p>
				<p><span class="eo">scii</span> : savoir → <span class="eo">sciigi</span> : informer ou faire savoir</p>
				<p><span class="eo">stari</span> : se tenir debout → <span class="eo">starigi</span> : lever; mettre debout</p>
				<p><span class="eo">kontenta</span> : content(e) → <span class="eo">kontentiga</span> : satisfaisant(e)</p>
				<p><span class="eo">maltrankvila</span> : troublé(e) ; angoissé(e) → 
				<span class="eo">maltrankviliga</span> : troublant(e) ; angoissant(e)</p>
		
				<h4>-ilo : <i>instrument, outil</i></h4>
		
				<p><span class="eo">labori</span> : travailler → <span class="eo">laborilo</span> : outil de travail</p>
				<p><span class="eo">dormi</span> : dormir → <span class="eo">dormigi</span> : faire dormir → <span class="eo">dormigilo</span> : somnifère</p>
				<p><span class="eo">veturi</span> : aller (autrement qu'à pied) → <span class="eo">veturilo</span> : véhicule</p>
		
				<p><span class="eo">mia aŭto paneas, ĝi ekpaneis hieraŭ</span> : mon auto est en panne, elle est tombée en panne hier</p>
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
					<p><span class="eo">afabla</span> : affable, gentil(le)</p>
					<p><span class="eo">akcepti</span> : accepter</p>
					<p><span class="eo">aldoni</span> : ajouter</p>
					<p><span class="eo">aranĝi</span> : arranger, combiner, agencer</p>
					<p class="sekva"><span class="eo">aranĝo</span> : combinaison, arrangement</p>
					<p><span class="eo">banala</span> : banal(e)</p>
					<p><span class="eo">bonvoli</span> : bien vouloir</p>
					<p><span class="eo">ĉiam</span> : toujours</p>
					<p><span class="eo">dankon</span> : merci</p>
					<p><span class="eo">ne dankinde</span> : pas de quoi</p>
					<p><span class="eo">entute</span> : en tout, au total</p>
					<p class="sekva"><span class="eo">ni rigardu, ĉu la aŭto entute funkcias</span> : 
						regardons si au total la voiture fonctionne</p>
					<p><span class="eo">fermi</span> : fermer</p>
					<p class="sekva"><span class="eo">→ malfermi</span> : ouvrir</p>
					<p><span class="eo">fini</span> : finir</p>
					<p><span class="eo">funkcii</span> : fonctionner, marcher</p>
					<p><span class="eo">ĝeni</span> : gêner, inconforter</p>
					<p><span class="eo">igi</span> : rendre, causer, entraîner (quelqu'un à faire quelque chose quelque chose à 
						se faire d'une certaine façon), faire (faire)</p>
					<p><span class="eo">kiel eble plej</span> : autant que possible</p>
					<p><span class="eo">konsentite</span> : OK, d'accord</p>
				</div>
				<div class="col s12 l6">
					<p><span class="eo">kontenta</span> : content(e), satisfait(e)</p>
					<p><span class="eo">maniero</span> : manière</p>
					<p><span class="eo">manki</span> : manquer de</p>
					<p><span class="eo">mekaniko</span> : mécanique, mécanisme</p>
					<p><span class="eo">miksi</span> : mélanger</p>
					<p><span class="eo">miri</span> : s'étonner</p>
					<p><span class="eo">motoro</span> : moteur</p>
					<p><span class="eo">objekto</span> : objet, chose</p>
					<p><span class="eo">oportuna</span> : pratique, adéquat</p>
					<p><span class="eo">ordo</span> : ordre</p>
					<p><span class="eo">panei</span> : être en panne</p>
					<p class="sekva"><span class="eo">paneo</span> : panne</p>
					<p><span class="eo">ripari</span> : réparer</p>
					<p><span class="eo">ripeti</span> : répéter</p>
					<p><span class="eo">saĝa</span> : sage</p>
					<p><span class="eo">seka</span> : sec</p>
					<p><span class="eo">tia</span> : tel(le), telle sorte de</p>
					<p><span class="eo">troviĝi</span> : se trouver</p>
					<p><span class="eo">turni sin al</span> : s'adresser à, parler à, demander à, contacter</p>
					<p><span class="eo">veturi</span> : aller (en utilisant un véhicule)</p>
				</div>
			</div>

		<?php 
		} // fin section 3
		if ($section=="4") {
		?>

			<?php 
				getEkzercon(73,$persono_id);
			?>
		
			<?php 
				getEkzercon(74,$persono_id);
			?>

		<?php 
		} // fin section 4
		if ($section=="5") {
			include "lasusono.inc.php";
		?>

			<h3>Malkontentas la mekanikisto</h3>
			
			<p>Mi miras, ke li ne dankis min. Estis tamen granda servo, kiun mi faris
			al li. Mi helpis, ĉu ne? Mi nenion misfaris, mi nenion fuŝis, mi
			nenion malbonigis. Nur okazis tio, ke mi malsukcesis.</p>
			<p>
			Kion vi volas? Mi ne povas fari mirindaĵojn. Mi estas homo, sinjoro,
			simpla homo, kiu perlaboras la vivon<a href='#notoj'>[1]</a> laborante per siaj manoj. Kaj
			per sia kapo. Jes, la kapo, ĉar oni devas kompreni, kio misfunkcias.
			Nu, mi komprenis. Li tute fuŝis sian motoron. Ne mirige, kun tia
			maniero ekrapidi, kaj subite ekmalrapidi, kaj ree eĉ pli subite
			rerapidi. Tiuj motoroj estas malfortaj.</p>
			<p>
			Li do ne diru, ke mi ne helpis, ĉar mi helpis. Aŭ almenaŭ mi
			provis. Se motoro estas tute fuŝita, ĝi ne estas riparebla tujtuj.
			Ĉiam la sama afero: ili ne povas atendi. Sed li ne diris eĉ etan,
			eĉ apenaŭ aŭdeblan «dankon!». Li eĉ ne danketis. 
			Senkora homo! 
			Vere ne helpinda.</p>
			<p>
			Kion ajn oni faras, li ne dankas. Eĉ misparolante, eĉ fuŝe, li
			povus esprimi sian dankon, eĉ per la mano, eĉ per la kapo. Kiel ajn
			li volas. Per la piedoj eĉ, se li preferas. Aŭ per la haroj. Kiel
			ajn li deziras. Nur li danku.</p>
			<p>
			Konsentite, la afero ne estas finita, la servo ne estas finfarita. Sed
			la mesaĝo estas dirita: «Vi fuŝis vian aŭton, sinjoro, mi faros
			tion, kio eblas, ne pli, ĉar mi estas nur homo».</p>
			<p>
			Mi ne speciale volas, ke li longe paroladu. Mi ne deziras, ke li
			dankadu min dum tagoj kaj tagoj, ke li esprimadu siajn dankojn ĉiam
			kaj ĉiam, ĝis mia vivo estos finita. Nur kelkaj dankvortoj, kaj mi
			estus kontenta. Tamen ne estas malfacile. Ekzistas homoj, kiuj
			dankegas vin, ĉar tute malgranda servo estas al ili farita. Eta
			helpo, kaj jen venas longa danka deklarado. Kvazaŭ dank' al vi<a href='#notoj'>[2]</A> ili
			vivus plu, eĉ se vi faris nenion, aŭ almenaŭ nenion gravan.</p>
			<p>
			Sed tiu ĉi simple ne dankis. Eĉ ne unu vorto. Mi ne havis la tempon
			rigardi, kio okazas al li, jam la pordo estis fermita, jam li estis
			for. Tiel foriri sendanke... ĉu vi imagas? Mi ne ŝatas tian
			manieron agi. Kvazaŭ la aliaj ne ekzistus, kvazaŭ ni ne indus
			kelkajn vortojn de danko. Vere, li estas malbonmaniera homo.</p>
			<p>
			Lia motoro estas fuŝita. Kion li faris per tiu aŭto, mi iom povas
			imagi. Tute ne estas nature, ke la motoro tiamaniere fuŝiĝis, se li
			agis normale. Ofte oni sin demandas, kion la homoj faras per siaj
			veturiloj. Nu, mi faris, kion mi povis. Mi longe rigardadis la
			motoron, provis ĉu tion, ĉu tion ĉi, ĉu tion alian, rebonigis
			kelkajn aferetojn, kiuj misfunkciis, remetis unu novan pecon. La tutan
			farindan laboron mi faris.</p>
			<p>
			Sed superhomaĵojn mi ne povas fari. Se li fuŝis sian motoron tiel
			grave, kion mi faru? Ĉiam estas la sama afero. Ili aŭtas kiel
			malsaĝuloj, kvazaŭ ili tute perdis la kapon<a href='#notoj'>[3]</a>, jes kiel senkapaj
			knabegoj ili irigas sian veturilon, kaj poste ili miras, ke post
			kelkaj tagoj ĝi ankoraŭ ne estas riparita.</p>
			<p>
			Tiuj motoroj ne estas tre serioze faritaj. Almenaŭ oni estu afabla
			kun ili. Se ne, ili facile fuŝiĝas.</p>
			<p>
			Nu, se mi devas remeti tutan novan motoron, ne mirinde, ke li kelktage
			atendu. Mi parolis tute afable al li, ne eldiris eĉ plej etan
			malbelan vorton, kaj tamen mi povus, se konsideri tian nekredeblan
			manieron fuŝi belan novan veturileton.</p>
			<p>
			Ne mi faris, ke lia aŭto ne plu funkcias. Sed mi laboris super ĝi,
			restis longan tempon en la laborejo ĉe tiu fuŝita motoro. Sed ĉar
			la aŭto ne estas jam plene riparita, tiu sinjoro senigas min de la
			simpla, unuvorta danko, kiun mi devus aŭdi.</p>
			<p>
			Por tiaj homoj ni laboras! La vivo vere ne estas facila. Kontentigi
			la homojn niaepoke ne plu eblas. Mi tion diras al vi, sinjoro, ĉar
			almenaŭ vi ŝajnas komprenema. Tia agmaniero tute senigas min de la
			emo labori.</p>
					
			<a id="notoj"></a>
			<p class="rimarko"><strong>NOTOJ</strong> : 
			<ol>
				<li><span class="eo">Perlabori la vivon</span> : ekhavi, per sia laboro, tion, kion oni devas
				havi por vivi.</li>
				<li><span class="eo">Dank' al vi, danke al vi</span> : pro via dankinda helpo.</li>
				<li><span class="eo">Perdi la kapon</span> : ekmispensi, ekpensi fuŝe, perdi la povon ĝuste pensi.</li>
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
