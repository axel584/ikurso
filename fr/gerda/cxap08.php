<?php 
$titolo="8 (ok)";
$leciono = 8;
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

			<h3>Linda ne scias, kion fari</h3>
			<div class="row dialogo">
				<div class="col s12 m8">
					<p>En la universitata memserva restoracio, Linda sidas kaj pensas.
					Ŝi pensas ne tre trankvile. Fakte, ŝiaj pensoj iĝas pli kaj pli
					maltrankvilaj.</p>
					<p>Ŝi observas la junan viron, kiu metis ion en la kafon de
					Gerda.</p>
					<p>Ŝi pli kaj pli maltrankviliĝas.</p>
					<p>Tom kaj Bob estas for jam longe. Ili ne revenas. Ĉu do vere
					okazis io al Gerda? Sed kio okazis? Ĉu io grava?</p>
					<p>Linda observas la junulon kaj pensas:</p>
					<p>“Kion mi faros, se li ekstaros kaj foriros?</p>
					<p>“Ĉu mi sekvos lin? Ĉu mi sekvu lin?</p>
					<p>“Kion mi faru, se li iros eksteren? Ĉu mi sekvu lin eksteren?
					Ĉu mi sekvu lin ekstere? Mi ne scias, kion mi faru. Mi ne scias, kion
					mi faros. Mi ne scias, ĉu mi sekvos lin aŭ ne.</p>
					<p>“Kaj se li foriros en aŭto? Ĉu ankaŭ mi sekvu lin aŭte?</p>
					<p>“Jam estas vespero. Baldaŭ venos nokto. Jes. Baldaŭ
					noktiĝos. Ĉu mi sekvu lin nokte?</p>
					<p>”Kaj eĉ se li ne iros eksteren de la universitato, eĉ se li
					restos ĉi tie, ĉu mi sekvu lin?</p>
					<p>
					“Se li eliros tra tiu ĉi pordo, li iros en la koridoron al iu
					ĉambro. Ĉu mi sekvu lin en la koridoron? Ĉu mi sekvu lin en la
					koridoro? Ĉu mi sekvu lin en la ĉambron, en kiun li eniros? Ne.
					Neeble. Mi atendos en la koridoro. Sed se nenio okazos? Se li restos
					longe plu en la ĉambro?</p>
				</div>
				<div class="col s12 m4">
					<img src="bildoj/gerda08-1.gif" class="responsive-img">
				</div>
			</div>
			<div class="row dialogo">
				<div class="col s12 m8">
					<p>“Kaj se li eliros tra tiu pordo, li iros eksteren, verŝajne al
					la urbo. Ĉu mi sekvu lin al la urbo? Ĉu mi sekvu lin en la urbon?
					Ĉu mi sekvu lin en la urbo?</p>
					<p>“Se li iros piede, eble li vidos min, verŝajne li vidos min.
					Li suspektos, ke mi lin sekvas. Li turnos sin al mi. Mi ektimos. Mi
					paliĝos. Aŭ mia vizaĝo iĝos ruĝa kiel tomato. Jes, mi konas min. Mi
					paliĝos kaj tuj poste ruĝiĝos. Ĉiaokaze, mi maltrankviliĝos. Jam
					nun mi maltrankviliĝas.</p>
					<p>“Se li iros per buso, li eĉ pli certe vidos, ke mi sekvas lin,
					ĉar ni devos kune atendi ĉe la haltejo.”</p>
					<p>Linda ne sukcesas decidi, kion ŝi faru.</p>
					<p>Ŝi timas. Ŝia koro batas rapide. Ŝi volus, ke Tom kaj Bob
					estu kun ŝi, ke ili helpu ŝin, ke ili helpu ŝin decidi. Ŝi estas
					tute sola. Ŝi sentas, ke ŝia koro rapidiĝas, sed ŝi ne scias, kion
					fari.</p>
					<p>Kaj jen, antaŭ ol ŝi povis decidi, antaŭ ol ŝi sukcesis
					retrankviliĝi, jen la juna viro ekstaras. Li rigardas al la koridora
					pordo. Ĉu tien li iros? Li rigardas al la pordo, tra kiu oni eliras al
					la urbo. Ĉu tien? Jes, tien li iras.</p>
					<p>Kaj Linda aŭtomate ekstaras kaj ekpaŝas al la sama pordo. Ne
					ŝi decidis. Ŝajnas, ke ŝia korpo decidis mem. Ŝajnas, ke ŝiaj
					kruroj agas mem. Nu, ĉiaokaze, jen Linda sekvas lin. Al kiu mistera
					destino?</p>
				</div>
				<div class="col s12 m4">
					<img src="bildoj/gerda08-2.gif" class="responsive-img">
				</div>
			</div>

		<?php 
		} // fin section 1
		if ($section=="2") {
		?>

			<section class="klarigo">
		    	<h4>-ejo : <i>indique l'emplacement, le lieu (souvent collectif)</i></h4>
				<p><span class="eo">dormi</span> : dormir → <span class="eo">dormejo</span> : «dortoir» («chambre» se dit <span class="eo">dormoĉambro</span>)</p>
				<p><span class="eo">lerni</span> : apprendre → <span class="eo">lernejo</span> : école</p>

		    	<h4><i>Accusatif de direction</i></h4>
				<p><span class="eo">li aŭtas en la urbo</span> : il se déplace en voiture dans la ville<br>
					<span class="eo">li aŭtas en la urbon</span> : il se rend, en voiture, en ville</p>
				<p><span class="eo">li aŭtas tie</span> : il se déplace en voiture là-bas<br>
					<span class="eo">li aŭtas tien</span> : il se rend en voiture là-bas</p>
	
		    	<h4>si : <i>Pronom réfléchi</i></h4>
				<p><span class="eo">ŝi mem diris ĝin</span> : elle le dit elle-même<br>
					<span class="eo">ŝi diris ĝin al si</span> : elle se le dit (mot-à-mot : elle le dit à soi)</p>
				<p><span class="eo">li diris ĝin al si</span> : il se le dit<br>
					<span class="eo">li diris ĝin al ŝi</span> : il le lui dit à elle)</p>
	
				<p><span class="eo">ili komprenos tion mem</span> : ils comprendront cela d'eux-mêmes<br>
					<span class="eo">ili komprenos sin</span> : ils se comprendront<br>
					<span class="eo">ili komprenos unu la alian</span> : ils se comprendront l'un l'autre<br>
					<span class="eo">ili komprenos ilin</span> : ils les comprendront</p>
	
				<p><span class="eo">li servas lin</span> : il le sert<br>
					<span class="eo">li servas sin</span> : il se sert</p>
	
				<p><span class="eo">li amis ŝian flegistinon</span> : il aimait son infirmière à elle<br>
					<span class="eo">li amis lian flegistinon</span> : il aimait l'infirmière d'un autre<br>
					<span class="eo">li amis sian flegistinon</span> : il aimait son infirmière (sa propre infirmière)</p>
					
				<h4><i>j'irai en voiture là-bas</i></h4>
	
				<p><span class="eo">mi tien iros aŭte</span> : j'irai là-bas «automobilement»</p>
				<p><span class="eo">mi tien iros per aŭto</span> : j'irai là-bas au moyen d'une voiture</p>
				<p><span class="eo">mi tien iros en aŭto</span> : j'irai là-bas dans une voiture</p>
				<p><span class="eo">mi tien aŭtos</span> : j'«automobilerai» là-bas</p>
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
					<p><span class="eo">atendi</span> : attendre</p>
					<p><span class="eo">aŭ</span> : ou</p>
					<p><span class="eo">aŭto</span> : voiture, automobile <span class="eta">[<i><b>aou</b>-to</i>]</span></p>
					<p><span class="eo">aŭtomato</span> : automate</p>
					<p><span class="eo">baldaŭ</span> : bientôt</p>
					<p><span class="eo">buso</span> : car, bus, autocar</p>
					<p><span class="eo">ĉambro</span> : chambre, pièce dans une maison ou un bâtiment</p>
					<p class="sekva tab"><span class="eo">dormoĉambro</span> : chambre à coucher</p>
					<p class="sekva tab"><span class="eo">manĝoĉambro</span> : salle à manger</p>
					<p><span class="eo">ĉar</span> : parce que</p>
					<p><span class="eo">ĉiaokaze</span> : dans tous les cas, en tout cas</p>
					<p><span class="eo">destino</span> : destin, destinée</p>
					<p><span class="eo">eĉ</span> : même, et en plus</p>
					<p class="sekva tab"><span class="eo">li promenas senhalte, eĉ nokte</span> : il se promène sans cesse, même la nuit</p>
					<p><span class="eo">ekster</span> : hors de, à l'extérieur de (préposition)</p>
					<p class="sekva"><span class="eo">ekstere</span> : dehors, à l'extérieur (adverbe, lieu)</p>
					<p class="sekva"><span class="eo">eksteren</span> : vers le dehors, vers l'extérieur (adverbe, direction)</p>
					<p><span class="eo">el</span> : hors de, de</p>
					<p><span class="eo">helpi</span> : aider</p>
					<p><span class="eo">korpo</span> : corps</p>
					<p><span class="eo">kruro</span> : jambe</p>
				</div>
				<div class="col s12 l6">
					<p><span class="eo">longa</span> : long(ue)</p>
					<p><span class="eo">mem</span> : soi-même</p>
					<p class="sekva"><span class="eo">mi mem, vi mem</span> : moi-même, toi-même</p>
					<p class="sekva">→ <span class="eo">memserva restoracio</span> : cafétéria, restaurant self-service</p>
					<p><span class="eo">nokto</span> : nuit</p>
					<p><span class="eo">paŝi</span> : marcher</p>
					<p class="sekva"><span class="eo">paŝo</span> : pas (nom)</p>
					<p><span class="eo">per</span> : par, à l'aide de (instrument, moyen de transport...)</p>
					<p><span class="eo">ruĝa</span> : rouge</p>
					<p><span class="eo">sekvi</span> : suivre</p>
					<p><span class="eo">senti</span> : ressentir, sentir, éprouver</p>
					<p><span class="eo">servi</span> : servir</p>
					<p><span class="eo">si</span> : se, soi, lui, elle, eux (pronom réfléchi 3<sup>e</sup> personne)</p>
					<p><span class="eo">suspekti</span> : suspecter</p>
					<p><span class="eo">tien</span> : vers là, vers là-bas</p>
					<p class="sekva">iru tien!</span> : allez là-bas !</p>
					<p class="sekva">venu ĉi tien!</span> : venez ici !</p>
					<p><span class="eo">tomato</span> : tomate</p>
					<p><span class="eo">tra</span> : à travers</p>
					<p><span class="eo">urbo</span> : ville</p>
					<p><span class="eo">vespero</span> : soir</p>	
				</div>
			</div>

		<?php 
		} // fin section 3
		if ($section=="4") {
		?>

			<?php 
				getEkzercon(65,$persono_id);
			?>

			<?php 
				getEkzercon(66,$persono_id);
			?>

			<?php 
				getEkzercon(67,$persono_id);
			?>
				
			<?php 
				getEkzercon(68,$persono_id);
			?>

		<?php 
		} // fin section 4
		if ($section=="5") {
			include "lasusono.inc.php";
		?>

			<h3>Iru kiel vi volas</h3>
			<p>Oni nomas tiun restoracion «memserva restoracio», ĉar en ĝi oni
			servas sin mem. Ne estas ulo, kiu venas al via tablo kun via tomato
			aŭ kafo. Vi devas servi vin mem.</p>
			
			<p>Ĉu vi ne volas iri al memserva restoracio? Vi preferas, ke oni servu
			vin. Nu, bone. Kiel vi volas. Ĉiaokaze, mi ne iros kun vi. Vi devos
			iri sola. Mi devas resti ĉi tie. Mi laboros en mia ĉambro.</p>
			
			<p>Kion? Ĉu vi timas perdiĝi? Ne timu. Miaopinie, vi ne riskas
			perdiĝi. Estas tre simple iri tien. Nur sekvu tion, kion Tom diris al
			vi. Tiel vi ne perdiĝos.</p>
			
			<p>Se vi ne volas iri al memserva restoracio, iru do al alia restoracio.
			Ne gravas al mi. Same pri tio, ĉu vi iru buse, aŭte aŭ piede. Busi
			eble estas pli bone ol piediri, almenaŭ rilate al la piedoj, sed la
			buson vi devas atendi. Okazas, ke oni atendas longe. Aŭto estas pli
			rapida ol buso, kaj vi povas foriri per ĝi, kiam vi volas, sed ĉu vi
			havas aŭton?</p>
			
			<p>Vi baldaŭ havos aŭton, ĉu? Nu, bone, sed «baldaŭ» ne estas «nun».
			Se vi deziras iri al la urbo nun, tre gravas, ĉu vi havas aŭton nun.
			Ke vi havos ĝin baldaŭ, tio estas grava iurilate, mi konsentas, sed
			tio ne helpas vin nun, eĉ iomete, por iri al la urbo, ĉu? Por aŭti
			ĝis la urbo, oni devas havi aŭton.</p>
			
			<p>Sed fakte vi povas iri tien promene. Piediri estas bone por la koro.
			Kaj ankaŭ por la kapo, cetere. Kiam venas nokto, la urbo iĝas tiel
			bela! Kiam oni subite ekvidas la tutan urbon de malproksime, kaj
			noktiĝas, oni ekhavas senton pri io mistera, io ekstermonda, eĉ
			supermonda.</p>
			
			<p>Ne estas tro longe ĝis la urbo. Kompreneble, vi ne estos tie tuj, vi
			devos tamen promeni iom da tempo. Sed ne estas tro longe. Ne timu, ke
			viaj kruroj tro laboros kaj perdos sian tutan forton.</p>
			
			<p>Sed mi deziris diskuti kun vi ankaŭ pri io tute alia. Ĉu vi havas
			informojn pri Ana? Ŝi kuŝis en sia ĉambro kaj ne sentis sin tre
			bone. Tom iris al ŝi kun sia kuracisto, sed ŝi ne rigardas tiun
			kuraciston serioza, ŝi preferas sian kuraciston, ŝi vere ne amas
			lian. Li do forsendis sian kuraciston kaj vokis ŝian. Strange, kiam
			ŝi vidis lian kuraciston, ŝi sentis sin malbone, sed tuj kiam ŝi
			vidis sian kuraciston eniri en ŝian ĉambron
			<a href='#notoj'>[1]</a>, ŝi jam sentis sin pli bone.</p>
			
			<p>Oni sin demandas, pri kio vere temas, ĉu ne? Ho, ĉu vi jam foriras?
			Do, bonan vesperon, kaj ankaŭ bonan nokton! Ĝis revido! Ni
			revidos nin baldaŭ, verŝajne. Do, ĝis!</p>
			
			<a id="notoj"></a>
			<p class="rimarko"><strong>NOTOJ</strong> : 
			<ol>
				<li><span class="eo">Ŝi vidis sian kuraciston</span> : kiu vidis? — ŝi. La kuraciston de
				kiu? — de ŝi (de tiu, kiu vidis).<br>
				<span class="eo">Eniri en ŝian ĉambron</span> : kiu eniris? — ne ŝi, sed la kuracisto. 
				En la ĉambron de kiu? — ne de la kuracisto (ne de tiu, kiu eniris), sed
				de ŝi. Se vi dirus: «Ŝi vidis la kuraciston eniri en sian ĉambron»,
				tio volus diri, ke ŝi vidis la kuraciston eniri en la ĉambron de la kuracisto.</li>
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
