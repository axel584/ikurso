<?php
$titolo="5 (kvin)";
$leciono = 5;
$section=isset($_GET["section"])?$_GET["section"]:"1";
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

			<h3>Iu mistera substanco</h3>
			<div class="row dialogo">
				<div class="col s12 m8">
					<p><b>Bob:</b> Nu, vi ankoraŭ ne diris al mi, kio okazis, dum vi spione
					rigardis tiun paron.</p>
					<p><b>Linda:</b> Okazis io vere stranga.</p>
					<p><b>Tom:</b> Vere stranga, fakte. En la mano de tiu junulo estis io.</p>
					<p><b>Bob:</b> Kio?</p>
					<p><b>Linda:</b> Ni ne povis vidi.  Io tre eta. Malgranda afero. Afereto.</p>
					<p><b>Tom:</b> Kaj dum ŝi ne rigardis, lia mano alproksimiĝis al ŝia taso.</p>
					<p><b>Linda:</b> Kaj kiam ŝi ekrigardis lin, lia mano ekhaltis.</p>
					<p><b>Tom:</b> Tiam li montris ion al ŝi. Evidente, li deziris forturni ŝian
					atenton.</p>
					<p><b>Linda:</b> Kaj li sukcesis. Li plene sukcesis. Ŝi rigardis al la pordo.
					Kaj dum ŝi rigardis for, lia mano subite estis super ŝia taso, dum
					unu sekundo, ne pli, kaj tute nature revenis. Malplena.</p>
					<p><b>Bob:</b> Ĉu ĝi estis plena antaŭe?</p>
					<p><b>Tom:</b> Ne plena. Kompreneble, ĝi ne estis plena. Sed estis io en ĝi,
					kaj post kiam ĝi estis dum sekundo super la taso de Gerda, estis plu
					nenio en ĝi.</p>
					<p><b>Linda:</b> Certe estas iu mistera substanco.</p>
					<p><b>Tom:</b> Iu drogo.</p>
					<p><b>Bob:</b> Kiel vi povas scii, ke ne estis tute simple peco da sukero?</p>
					<p><b>Linda:</b> Li ne agus tiel kaŝe, se estus nur sukero.</p>
					<p><b>Tom:</b> Cetere, ĉi tie ne estas peca sukero. Estas nur pulvora sukero,
					en sukerujoj.</p>
				</div>
				<div class="col s12 m4">
					<img src="bildoj/gerda05-1.gif" class="responsive-img">
				</div>
			</div>
			
			<div class="row dialogo">
				<div class="col s12 m8">
					<p><b>Bob:</b> Eble li havis sukerpecon en la poŝo kaj…</p>
					<p><b>Tom:</b> Ĉu vi ofte promenas kun sukerpecoj en via poŝo?</p>
					<p><b>Bob:</b> Vi pravas. Tiu ideo estas absurda. Tamen…</p>
					<p><b>Linda:</b> Rigardu! Jen ŝi ekstaras, kaj ekiras for.</p>
					<p><b>Bob:</b> Ŝi ŝajnas tute normala. Verŝajne vi imagis ion draman, dum
					temas pri tute simpla, tute natura okazaĵo.</p>
				</div>
				<div class="col s12 m4">
					<img src="bildoj/gerda05-2.gif" class="responsive-img">
				</div>
			</div>
		
		<?php 
		} // fin section 1
		if ($section=="2") {
		?>
		
			<section class="klarigo">
				<h4>-us : <i>forme conditionnelle du verbe</i></h4>
				<p><span class="eo">se mi konus lin, mi irus</span> : si je le connaissais, j'irais</p>
				<p><span class="eo">mi dezirus demandi vin</span> : je désirerais vous demander</p>
		
				<h4>-n : <i>terminaison du complément d'object direct</i></h4>
				<p><span class="eo">mi konas tiu<b>n</b> juna<b>n</b> viro<b>n</b></span> : je connais ce jeune homme</p>
				<p><span class="eo">tiun juna<b>n</b> viro<b>n</b> mi konas</span> : je connais ce jeune homme</p>
				<p><span class="eo">tiun juna<b>n</b> viro<b>n</b> konas mi</span> : je connais ce jeune homme</p>
				<p><span class="eo">tiu juna viro konas mi<b>n</b></span> : ce jeune homme me connaît</p>
				<p><span class="eo">tiu juna viro mi<b>n</b> konas</span> : ce jeune homme me connaît</p>
				<p><span class="eo">mi<b>n</b> konas tiu juna viro</span> : ce jeune homme me connaît</p>

				<p><span class="eo">kiu vidis li<b>n</b>?</span> : qui l'a vu ?</p>
				<p><span class="eo">kiu<b>n</b> vidis li?</span> : qui a-t-il vu ?</p>

				<p><span class="eo">la viro, kiu<b>n</b> rigardis la knabino</span> : l'homme que la fillette regardait</p>
				<p><span class="eo">la viro, kiu rigardis la knabino<b>n</b></span> : l'homme qui regardait la fillette</p>
		
				<h4>ek- : <i>indique le commencement, le début avec soudaineté</i></h4>
				<p><span class="eo">iri</span> : aller → <span class="eo">ekiri</span> : se mettre en marche</p>
				<p><span class="eo">sidi</span> : être assis → <span class="eo">eksidi</span> : s'asseoir</p>
				<p><span class="eo">ek!</span> : en route !, allons-y !</p>
			
				<h4>-et- : <i>indique une diminution, une réduction</i></h4>
				<p><span class="eo">virino</span> : femme → <span class="eo">virineto</span> : petite femme</p>
				<p><span class="eo">bela</span> : beau (belle) → <span class="eo">beleta</span> : mignon(ne)</p>
				<p><span class="eo">mi komprenas</span> : je comprends → <span class="eo">mi komprenetas</span> : je comprends plus ou moins, je pense comprendre</p>
		
				<h4>for- : <i>indique l'éloignement</i></h4>
				<p><span class="eo">iri</span> : aller → <span class="eo">foriri</span> : s'en aller</p>
				<p><span class="eo">esti</span> : être → <span class="eo">foresti</span> : être absent<br><span class="eo">foresto</span> : absence</p>
			
				<h4>-ujo : <i>indique le contenant</i></h4>
				<p><span class="eo">sukero</span> : sucre → <span class="eo">sukerujo</span> : sucrier</p>

				<h4>ĉi : <i>indique la proximité</i></h4>
				<p><span class="eo">tiu ĉi viro estas juna</span> : cet homme-ci est jeune</p>
				<p><span class="eo">tio ĉi estas nekomprenebla</span> : ceci est incompréhensible</p>
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
					<p><span class="eo">afero</span> : affaire, sujet, chose</p>
					<p><span class="eo">absurda</span> : absurde</p>
					<p><span class="eo">ankoraŭ</span> : encore</p>
					<p class="sekva"><span class="eo">ankoraŭ ne</span> : pas encore</p>
					<p><span class="eo">atenti</span> : prêter attention, être attentif</p>
					<p><span class="eo">atento</span> : attention</p>
					<p><span class="eo">cetere</span> : d'ailleurs, du reste</p>
					<p><span class="eo">ĉi</span> : (indique la proximité)</p>
					<p class="sekva tab"><span class="eo">ĉi tie</span> : ici-même</p>
					<p class="sekva tab"><span class="eo">ĉi tio</span> : ceci (cette chose-ci)</p>
					<p class="sekva tab"><span class="eo">ĉi tiu</span> : ceci, celui-ci, celle-ci, ce… -ci</p>
					<p><span class="eo">da</span> : de (après une expression de quantité)</p>
					<p><span class="eo">dramo</span> : drame</p>
					<p><span class="eo">drogo</span> : drogue</p>
					<p><span class="eo">evidenta</span> : évident(e)</p>
					<p><span class="eo">eta</span> : petit(e)</p>
					<p><span class="eo">for</span> : loin, au loin</p>
					<p><span class="eo">havi</span> : avoir</p>
					<p><span class="eo">imagi</span> : imaginer</p>
					<p class="sekva"><span class="eo">imago</span> : imagination</p>
					<p><span class="eo">iu</span> : quelque, quelqu'un</p>
					<p><span class="eo">kaŝe</span> : en cachette</p>
					<p class="sekva"><span class="eo">kaŝi</span> : cacher, dissimuler</p>
					<p><span class="eo">normala</span> : normal(e)
				</div>
				<div class="col s12 l6">
					<p><span class="eo">ofta</span> : fréquent(e)</p>
					<p class="sekva"><span class="eo">ofte</span> : souvent, fréquemment</p>
					<p><span class="eo">paro</span> : couple, paire</p>
					<p><span class="eo">peco</span> : morceau, bout, pincée</p>
					<p><span class="eo">plena</span> : plein(e)</p>
					<p class="sekva"><span class="eo">plene</span> : pleinement, complètement, entièrement</p>
					<p><span class="eo">poŝo</span> : poche</p>
					<p><span class="eo">promeni</span> : se promener</p>
					<p><span class="eo">sekundo</span> : seconde (de temps)</p>
					<p><span class="eo">subita</span> : soudain(e)</p>
					<p class="sekva"><span class="eo">subite</span> : soudainement</p>
					<p><span class="eo">substanco</span> : substance</p>
					<p><span class="eo">sukcesi</span> : réussir, avoir du succès</p>
					<p><span class="eo">sukero</span> : sucre</p>
					<p><span class="eo">super</span> : sur, au-dessus</p>
					<p><span class="eo">ŝajni</span> : sembler, avoir l'air</p>
					<p><span class="eo">tiam</span> : alors, à cet instant</p>
					<p><span class="eo">tie</span> : là, là-bas</p>
					<p><span class="eo">tie ĉi</span> = ĉi tie</p>
					<p><span class="eo">tio ĉi</span> = ĉi tio</p>
					<p><span class="eo">tiu ĉi</span> = ĉi tiu</p>
					<p><span class="eo">tiel</span> : ainsi, de cette façon</p>

		<?php 
		} // fin section 3
		if ($section=="4") {
		?>

			<?php 
				getEkzercon(58,$persono_id);
			?>

			<?php 
				getEkzercon(59,$persono_id);
			?>


		<?php 
		} // fin section 4
		if ($section=="5") {
			include "lasusono.inc.php";
		?>

			<h3>Ĉu vere vi ne volas labori?</h3>
			<p>Rigardu, la sukerujo estas malplena. Se iu dezirus sukeron, li ne
			povus havi ĝin. Vi iras promeni kun Izabela, vi parolas kun ŝi dum
			la tuta tago pri arto kaj scienco, eble, sed eble ankaŭ pri malpli
			belaj aferoj — la diablo scias, pri kio vi parolas, kiam vi promenas
			kun ŝi — kaj dume la sukerujoj staras tute malplenaj sur la tabloj.</p>
			
			<p>Vi tute ne atentas vian laboron. Ŝajnas, ke nur Izabela gravas por
			vi. Mi konsentas, ke ŝi estas tre bela junulino. Sed tamen vi agas
			malprave. Se subite iu dezirus sukeron, ĉe kiu li ekhavus ĝin ?</p>
			
			<p>Nur imagu ! Se Profesoro Zuzu venus kaj vidus, ke la sukerujoj estas
			malplenaj... Mi ne povas imagi — pli bone: mi preferas ne imagi —
			kio okazus, se li tion vidus. Vi scias, ke havi multe da sukero tre
			gravas por li. Vere mi ne komprenas vin.</p>
			
			<p>Vi ne estas serioza. Vi ne laboras serioze. Kiam vi ne promenas, vi
			sidas en angulo kaj atentas nenion, nur Izabelan. Ofte mi demandas
			min, ĉu vi estas normala. Se via imago malpli laborus, certe pli
			laborus viaj manoj. Vi povus tamen atenti, ĉu la sukerujoj estas
			plenaj.</p>
			
			<p>Se mi ne estus kun vi, se mi ne atentus la simplajn aferojn de la
			labortago, nenio okazus normale. Vi permesas al vi iri promeni, vi
			iras kaŝi vin en la naturo kun via belulino, kaj vi tute ne
			konsideras, ke vi estas en la universitato por labori mane, ne por
			deklari vian amon dum tuta tago, ne por rigardi vin en la spegulo por
			vidi, ĉu vi ne ŝajnas tro malbela por Izabela, ne por komuniki al
			ŝi la belajn esprimojn de via juna, drama imago, sed por labori.</p>
			
			<p>Atenti la sukerujojn estas via laboro, ne mia. Se mi permesus al mi
			agi kiel vi... Ne. Mi tion ne povas imagi. Mi estas serioza, mi ne
			iras promeni, mi ne iras kaŝe sidi dum la labortago kun bela fortulo.</p>
			
			<p>Mi ne plu estas tiel juna, kiel vi, sed tamen... Se vi nur scius, kiel
			ofte viroj min petas... La viroj, kiuj konas min, konsideras ke...
			hehe<a href='#notoj'>[1]</a>... Nu, viroj estas viroj, ĉu ne ? Sed mi neniam konsentas. Mi
			neniam diras «jes». Mi neniam jesas al ili. Ami la virojn ne estas mia
			specialaĵo. Ne por atenti la virojn la universitato petas min veni,
			nur por labori. Ne havu strangajn ideojn pri mi. Mi atentas vin, juna
			viro, nur rilate al via laboro. Ke la sukerujoj estas malplenaj, tio
			gravas por mi. Sed ke vi parolas bele kaj havas ne malbelan vizaĝon,
			tio al mi tute ne gravas. Vi povus plibeliĝi de tago al tago, mi ne
			atentus vian plibeliĝon, mi atentus vian laboron kaj rigardus —
			inter-alie — ĉu la sukerujoj estas plenaj, ĉu ili estas malplenaj.
			Kaj se ili ne estas tute plenaj, permesu, ke mi tion diru al vi.</p>
			
			<p>Se mi revidus vin reiri promeni kun Izabela dum la labortago kaj ne
			atenti vian laboron, mi turnus min<a href='#notoj'>[2]</A> al Profesoro Zuzu kaj dirus la
			aferon al li. Ne gravas al vi, ĉu vere ? Ĉu vere tion vi respondis ?
			Diable ! Bela respondo ! Nu, bone ! Se vi preferas agi neserioze, se
			vi preferas ne labori, la dramo okazu. Al mi tute ne gravas. Mi diras
			tion por vi, ne por mi.</p>
			
			<p>Ĉu vi imagas, ke povus gravi por mi, ke vi ne laboras normale, ke vi
			malkonsentas labori ? Tute ne gravas. Mi estas bona kun vi kaj
			komunikas al vi miajn ideojn. Sed se vi ne volas konsideri ilin
			serioze, tio estas via afero.</p>
			
			<p>Ĉu laboro pri sukerujoj estas tro malalta por vi ? Ĉu vi imagas, ke
			vi estas en la universitato kiel studento ? Kiel profesoro, eble ? Ne,
			ne, kara mia. Vi estas simpla laborulo. Estas tro multe da ideoj en
			via imago, kaj tro malmulte da laborforto en viaj manoj. Ne.
			Laborforton vi havas. Mi volis diri: tro malmulte da laborvolo.</p>
			
			<p>Tro ofte mi vidas vin promeni kun la manoj en la poŝoj. Ĉu vi estus
			tiel malforta, ke vi ne plu povus labori nun ? Vi eble ne estas tre
			granda, sed vi ne ŝajnas malforta. Ĉu vi jam laboris tro multe ?
			Diable ! Mi ne povas kompreni vin.</p>
			
			<p>Kiam mi estis juna, mi ne konis knabojn, kiuj laboris tiel malmulte,
			kiel vi. Knaboj, kiuj ne laboris, ĉe ni ne ekzistis. Mi ne diras, ke
			vi estas malbona knabo. Mi konsideras nur, ke vi agas absurde. Mi
			konsentas, ke Izabela kaj vi estas bela paro. Sed... Eble vi
			konsideras, ke mi parolas tro multe pri aferoj, kiuj ne rilatas al mi.
			Pardonu, sed tamen permesu, ke mi komuniku al vi miajn ideojn. Rilatoj
			estas pli bonaj, se tiuj, kiuj laboras kune, estas sinceraj, ĉu ne ?
			Kaj vidi junan viron kiel vi, plenan de forto, promeni tuttage kun
			knabino, dum li povus multe labori, kaj dum la sukerujoj estas
			malplenaj, nu, tio estas tro.</p>
			
			<p class="rimarko"><strong>NOTES</strong> : 
		
			<ol>
				<li><span class="eo">Hehe</span>: pli malpli kiel ho ! (Se vi ne komprenas «hehe», tute ne
		    	gravas).</li>
				<li><span class="eo">Mi turnus min al</span>: mi irus paroli al.</li>
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
