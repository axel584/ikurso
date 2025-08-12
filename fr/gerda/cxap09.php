<?php 
$titolo="9 (naŭ)";
$leciono = 9;
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
		?>
		<?php
		if ($section=="1") {
			include "gerdasono.inc.php";
		?>
			<h3>Gerda malaperis</h3>
			<div class="row dialogo">
				<div class="col s12 m8">
					<p>"Ŝi kuŝas meze de la koridoro! Venu, venu tuj. Certe la afero
					urĝas," diras Tom.</p>
					<p>Li rigardas la flegistinon: ŝi estas dika, grasa virino kun
					bluaj okuloj, ruĝaj haroj, kaj tre ronda vizaĝo. Jam kelkajn minutojn
					li provas diri, kio okazis, sed ŝajnas, ke tiu flegistino ne rapide
					komprenas. La vorto "urĝa" ŝajnas ne ekzisti en ŝia vortaro.</p>
					<p>"Kuŝas, ĉu? Meze de la koridoro, ĉu vere?" ŝi diras.</p>
					<p>Videble, la flegistino apenaŭ povas kredi.</p>
					<p>"Kial, diable, ŝi kuŝus meze de la koridoro?" ŝi demandas.</p>
					<p>"Mi petas, venu urĝe. Mi ne scias, kial ŝi kuŝas tie. Mi nur
					diras, kion mi vidis. Ni trovis ŝin tie. Eble ŝi estis malsana.  Mi
					ne scias. Ŝi svenis, ŝi perdis la konscion. Nun certe oni devas urĝe
					okupiĝi pri ŝi."</p>
					<p>"Stranga afero!"</p>
					<p>"Nu, mi ne estas fakulo. Vi jes. Okupiĝi pri malsanaj homoj
					estas via fako, ĉu ne? Venu tuj. Urĝas!"</p>
					<p>"Nu, nu, nu, nu. Kial, diable, ŝi svenis en la koridoro?
					Stranga ideo! Oni neniam svenas tie."</p>
					<p>"Ĉu vere? Kie do oni svenas en ĉi tiu universitato? Pardonu
					min, sed mi ne konas la tradiciojn. Mi estas novulo. Apenaŭ unu
					semajnon mi estas ĉi tie."</p>
					<p>"Juna viro, en ĉi tiu universitato, oni svenas en la
					klasĉambroj, oni svenas en la restoracio, oni svenas en la
					dorm-ĉambroj, oni svenas en la banĉambroj, eble eĉ oni povus sveni
					en iu administra oficejo. Sed pri sveno koridora mi neniam aŭdis.
					Stranga epoko! Stranga generacio! Oni faras ion ajn niaepoke."</p>
					<p>"Vi parolas, parolas, paroladas, kaj dume tiu kompatinda
					knabino kuŝas en koridoro, kaj neniu zorgas pri ŝi!"</p>
					<p>"Nu, nu, ne maltrankviliĝu, juna viro, ne havu zorgojn. Ni tuj
					rapidos tien, kaj mi tuj prizorgos ŝin."</p>
					<p>Kaj ili kune rapidas al la loko, kie Tom lasis sian amikon kun
					Gerda.</p>
					<p>Sed jen subite Tom haltas.</p>
				</div>
				<div class="col s12 m4">
					<img src="bildoj/gerda09-1.gif" class="responsive-img">
				</div>
			</div>

			<div class="row dialogo">
				<div class="col s12 m8">
					<p>"Kio okazas? Kial vi ekhaltis?" demandas la flegistino.</p>
					<p>"Ŝi estis ĉi tie, kaj ne plu estas, sed…"</p>
					<p>"Sed estas iu alia, kaj <i>li</i> estas senkonscia, ŝajnas al mi. Ĉu vi konas lin?"</p>
					<p>"Jes, estas mia amiko Bob. Kio okazis al li?"</p>
					<p>La flegistino iras al Bob, kiu falsidas ĉe la koridora muro.
					Ŝi tuŝas lian kapon.</p>
					<p>"Batita! Oni batis la kapon al li!"</p>
					<p>"Diable! Bob, Bob! Respondu! Ĉu vi aŭdas min? Diru, mi petas! Kio okazis?”</p>
					<p>Sed Bob ne respondas, kaj Tom iĝas pli kaj pli maltrankvila.</p>
				</div>
				<div class="col s12 m4">
					<img src="bildoj/gerda09-2.gif" class="responsive-img">
				</div>
			</div>

		<?php 
		} // fin section 1
		if ($section=="2") {
		?>

			<section class="klarigo">
				<h4>-ita  : <i>participe passé passif</i></h4>
				<p><span class="eo">fari</span> : faire → <span class="eo">farita : </span>fait</p>
				<p><span class="eo">vidi</span> : voir → <span class="eo">vidita</span> : vu(e)</p>
				<p><span class="eo">perdita peco</span> : une pièce perdue</p>
				<p><span class="eo">ni estas informitaj</span> : nous sommes informés</p>
	
				<h4>-ad-: <i>indique une action particulièrement prolongée ou répétée</i></h4>
				<p><span class="eo">paroli</span> : parler<span class="eo"> → paroladi</span> : faire un discours, parler longtemps</p>
				<p><span class="eo">la penso</span> : la pensée → <span class="eo">la pensado</span> : la réflexion (cogitation)</p>
				<p><span class="eo">memoro</span> : mémoire → <span class="eo">memorado</span> : remémoration, le fait de se rappeler</p>
	
				<p><span class="eo">la respondo estis longa</span> : la réponse était longue</p>
				<p><span class="eo">la respondado estis longa</span> : le temps de réponse était long, la réponse était longue à venir</p>
	
				<p><span class="eo">li rigardis</span> : il regardait</p> 
				<p><span class="eo">li ekrigardis</span> : il regarda</p> 
				<p><span class="eo">li rigardadis</span> : il contemplait</p>
	
				<h4>-ar- : <i>indique le regroupement, la collectivité</i></h4>
	
				<p><span class="eo">vorto</span> : mot → <span class="eo">vortaro</span> : dictionnaire, vocabulaire</p>
				<p><span class="eo">homo</span> : être humain → <span class="eo">homaro</span> : humanité</p>
				<p><span class="eo">la studentaro</span> : le corps étudiant (d'une université)</p>
				<p><span class="eo">la kuracistaro</span> : le corps médical, tous les médecins (des environs)</p>
	
				<h4>-inda : <i>indique la valeur, le mérite</i></h4>
	
				<p><span class="eo">ami</span> : aimer → <span class="eo">aminda</span> : aimable</p>
				<p><span class="eo">vidi</span> : voir → <span class="eo">vidinda</span> : à voir, méritant d'être vu(e)</p>
				<p><span class="eo">havi</span> : avoir → <span class="eo">havinda</span> : à avoir</p>
	
				<h4>-inda / -ebla : <i>(différences de sens)</i></h4>
	
				<p><span class="eo">havinda</span> : à avoir</p>
				<p><span class="eo">havebla</span> : que l'on peut avoir, disponible</p>
				<p><span class="eo">aminda</span> : qui mérite d'être aimé</p>
				<p><span class="eo">amebla</span> : que l'on peut aimer</p>
	
				<h4>sen- : <i>sans, indique la privation</i></h4>
	
				<p><span class="eo">senkora</span> : sans cœur</p>
				<p><span class="eo">senforta</span> : sans force</p>
				<p><span class="eo">senhelpa</span> : sans aide</p>
				<p><span class="eo">senkompate</span> : sans pitié</p>
	
				<h4>ajn</h4>
				<p><span class="eo">kien ajn vi iros, mi sekvos vin</span> : où que tu ailles, je te suivrai</p>
				<p><span class="eo">mi faros kion ajn vi diros</span> : je ferai tout ce que tu me diras</p>
				<p><span class="eo">li diras ion ajn</span> : il dit n'importe quoi</p>
				<p><span class="eo">iru ien ajn</span> : va n'importe où ; va où tu veux</p>
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
					<p><span class="eo">administra</span> : administratif, administrative</p>
					<p class="sekva"><span class="eo">administri</span> : administrer</p>
					<p><span class="eo">ajn</span> : n'importe qu-… </p>
					<p class="sekva"><span class="eo">iu ajn</span> : n'importe qui, n'importe quel</p>
					<p class="sekva"><span class="eo">io ajn</span> : n'importe quoi</p>
					<p class="sekva"><span class="eo">kiu ajn</span> : quiconque, n'importe quel… qui</p>
					<p class="sekva"><span class="eo">kiun ajn</span> : qui que ce soit que, n'importe quel… que</p>
					<p><span class="eo">amiko</span> : ami</p>
					<p><span class="eo">bani</span> : baigner</p>
					<p class="sekva"><span class="eo">bani sin</span> : se baigner</p>
					<p><span class="eo">blua</span> : bleu(e)</p>
					<p><span class="eo">dika</span> : épais(se)</p>
					<p><span class="eo">epoko</span> : époque, âge</p>
					<p><span class="eo">generacio</span> : génération</p>
					<p><span class="eo">grasa</span> : gros(se), gras(se)</p>
					<p><span class="eo">haro</span> : cheveu</p>
					<p><span class="eo">homo</span> : être humain, homme</p>
					<p><span class="eo">kelkaj</span> : quelques, peu de</p>
					<p><span class="eo">kial</span> : pourquoi</p>
					<p><span class="eo">kie</span> : où</p>
					<p class="sekva tab"><span class="eo">kie ajn</span> : n'importe où que, partout où, en quelque endroit que ce soit que</p>
					<p class="sekva tab"><span class="eo">kie ajn vi estas</span> : où que tu sois, partout où tu es</p>
					<p><span class="eo">klaso</span> : classe</p>
					<p><span class="eo">kompati</span> : avoir pitié, compatir</p>
					<p class="sekva"><span class="eo">kompatinda</span> : digne de pitié, à plaindre</p>
					<p><span class="eo">kredi</span> : croire</p>
					<p><span class="eo">lasi</span> : laisser</p>
				</div>
				<div class="col s12 l6">
					<p><span class="eo">loko</span> : endroit, lieu</p>
					<p><span class="eo">mezo</span> : milieu</p>
					<p class="sekva"><span class="eo">meze de</span> : au milieu de</p>
					<p><span class="eo">minuto</span> : minute (temps)</p>
					<p><span class="eo">muro</span> : mur</p>
					<p><span class="eo">neniu</span> : personne; aucun</p>
					<p><span class="eo">ofico</span> : fonction, emploi</p>
					<p><span class="eo">oficejo</span> (= <span class="eo">ofic</span>- + -<span class="eo">ejo</span>) : bureau, office</p>
					<p><span class="eo">okulo</span> : œil</p>
					<p><span class="eo">okupi</span> : occuper</p>
					<p><span class="eo">okupiĝi pri</span> : s'occuper de</p>
					<p class="sekva"><span class="eo">okupi sin pri</span> = <span class="eo">okupiĝi pri</span></p>
					<p><span class="eo">provi</span> : essayer</p>
					<p><span class="eo">rondo</span> : rond (nom), cercle</p>
					<p class="sekva"><span class="eo">ronda</span> : rond(e), circulaire</p>
					<p><span class="eo">sana</span> : en bonne santé</p>
					<p><span class="eo">sen</span> : sans</p>
					<p><span class="eo">sveni</span> : s'évanouir</p>
					<p><span class="eo">tradicio</span> : tradition</p>
					<p><span class="eo">trovi</span> : trouver</p>
					<p><span class="eo">tuŝi</span> : toucher</p>
					<p><span class="eo">urĝa</span> : urgent(e)</p>
					<p><span class="eo">vorto</span> : mot</p>
					<p class="sekva"><span class="eo">vortaro</span> : dictionnaire</p>
					<p><span class="eo">zorgi</span> : se faire du souci&nbsp;; s'occuper de, prendre soin de </p>
					<p class="sekva"><span class="eo">zorgo</span> : souci, inquiétude; attention, sollicitude</p>
				</div>
			</div>

		<?php 
		} // fin section 3
		if ($section=="4") {
		?>

			<?php 
				getEkzercon(69,$persono_id);
			?>

			<?php 
				getEkzercon(70,$persono_id);
			?>
		
		<?php 
		} // fin section 4
		if ($section=="5") {
			include "lasusono.inc.php";
		?>

			<h3>Zorgi pri zorgado</h3>
			
			<p>Kion kredi? Ĉu liajn okulojn? Ĉu liajn vortojn? Liaj vortoj
			alvokas kompaton. Li montras sin kompatinda. Li diras ion ajn, por ke
			oni kompatu lin. Sed la okuloj! Oni povas sin demandi, ĉu ili ne
			estas pli kredindaj ol la vortoj, kiujn li eldiras. Kaj ili ne
			esprimas la samon. Tiuj pale bluaj okuloj estas strange senesprimaj.
			Ĉu ne strange, ke ili restas tiel senesprimaj, dum li parolas tiel
			bele, por ke ni kompatu lin?</p>
			
			<p>«Multo estas dirita, sed nenio farita», li diras. «Multe da parolado,
			malmulte da agado», li plu diras. Sed, ĝuste, ĉu, kiam li tion
			diras, li ne parolas pri si? «Rigardu, kiel maldika mi estas», li
			diras, «jen kiel agas la zorgoj al mia kompatinda korpo. Mia sano iom
			post iom forsvenas. Vidu: miaj haroj forfalas. Baldaŭ mi estos tute
			senhara. Aŭ restos nur kelkaj haroj sur mia kapo. De tago al tago mi
			pli kaj pli senhariĝas. Baldaŭ mi estos tute malsana, ĉar tiu
			senhalta zorgado agas tre malbone al mia sano, tiel ke mia bela hararo iom post iom malgrandiĝas, iom post iom forperdiĝas.</p>
			
			<p>«La kuracisto diris al mi: «Se vi volas, ke mi kuracu vin, kaj vi
			resaniĝu, tiu zorgado devas halti. Sen tio, sen via kunlaboro, la
			plej bona kuracisto ne povas sukcesi. Mi trovas vin helpinda. Mi
			deziras kuraci vin, mi deziras nenion alian, ol ke vi plene resaniĝu,
			sed vi devas helpi min. Por min helpi, vi devas labori super<a href='#notoj'>[1]</a> viaj
			zorgoj. Zorgado nur povas malhelpi mian laboron. Via malsano rilatas
			nur al via troa zorgado. Ankaŭ via maldikiĝo. Ne temas pri alia grava
			malsano. Ne temas pri tiu serioza malsano, pri kiu vi pensadas la
			tutan tempon. Ne. Kelkaj malsanoj estas tre seriozaj. Ne via. Temas
			nur pri tio, ke vi tro zorgas. Kiam via troa okupiĝado pri tiuj
			zorgoj haltos, via sano revenos. Sed mi estas senpova rilate al via
			trozorgado. Nur vi povas helpi vin kaj kuraci vin tiurilate»».</p>
			
			<p>«Jen kion la kuracisto diris al mi. «Vivu senzorge», li diris, «kaj vi
			resaniĝos». Kaj, kredu min, li estas tre bona kuracisto. Li scias,
			pri kio li parolas. Do, kiam li petas min ne plu zorgi, mi devas ne
			plu zorgi, se mi volas retrovi mian sanon, se mi volas, ke la falado
			de miaj haroj finfine haltu. Sed vivi senzorge ne estas simple. Mi
			provis ne plu zorgi, mi provis kaj provadis. Sed kion ajn mi faras, mi
			malsukcesas. Kiel ajn mi provas ne zorgi, zorgoj revenadas. Kaj mi eĉ
			pli kaj pli zorgas pri mia malsukcesa provado ne zorgi: mi ne sukcesas
			ne plu zorgi, kaj tiu penso, ke mi tro zorgas, ĉar mi ne povas ne
			zorgi, tro okupas min. La penso fariĝi senharulo estas timinda, ĉu
			ne? Kaj tion mi pensas la tutan tagon. Kion fari, diable, kion fari?»</p>
			
			<p>Jen kiel li parolas. Li tute certe deziras, ke ni lin kompatu. Li
			certe pensas: «Se ili kompatos min, ili faros la aferojn por mi, kaj
			mi povos trankvile dormi, dum ili faras mian laboron». Tion diras liaj
			okuloj.</p>
			
			<p>Estas vere, ke, antaŭe, lia korpo estis tiel grasa, ke ĝi estis tute
			ronda, kaj nun li sengrasiĝis. Ankaŭ estas fakto, ke lia hararo,
			tiel dika antaŭe, tre maldikiĝis. Sed dum liaj vortoj parolas pri
			malsano, zorgado, senhariĝo, malgrasiĝo, liaj pale bluaj okuloj ne
			elvokas<a href='#notoj'>[2]</a> kompatindan vivon. Ili esprimas la ideon «Mi estas pli
			forta ol vi. Mia korpo eble estas maldika kaj malforta, pli malforta
			ol la viaj, sed mi pli fortas pense. Mi havis la bonan ideon agi tiel,
			ke vi kompatu min. Kaj nun vi kredas min malsana, kaj vi faros la
			tutan laboron por mi. Tiel mi povos senzorge dormi, kaj regrasiĝi
			trankvile».</p>
		
			<a id="notoj"></a>
			<p class="rimarko"><strong>NOTOJ</strong> : 
			<ol>
				<li><span class="eo">Labori super io</span> : labori pri io.</li>
				<li><span class="eo">Elvoki</span> : fari, ke pensoj venas pri...</li>
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
