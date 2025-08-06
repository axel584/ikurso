<?php 
$titolo="19 (dek naŭ)";
$leciono = 19;
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

			<h3>Mi parolas plej serioze</h3>
			<div class="row dialogo">
				<div class="col s12 m8">
					<p><b>Petro</b>: Eble ni forkuris tro rapide. Ĉu vere fantomoj ekzistas?"
					<p><b>Ralf</b>:	Ĉu vi volas raporti pri la voĉo al viaj gepatroj? Se jes, vi
					ne plu estas mia amiko. Se ili scios, ke ni ludis en la malpermesita
					domaĉo, vi…</p>
					<p><b>Petro</b>: Ne. Mi tute ne volas diri al la gepatroj, ke ni ludis tie. Tio
					estas nia sekreto. Mi nur v…</p>
					<p><b>Ralf</b>:	Jes. Sekreto kunigas la amikojn. Se vi gardos la sekreton, vi
					restos mia amiko. Sed se vi malkaŝos ĝin al granduloj, mi… mi…
					mi suferigos vin, mi igos vin plori tiel grave, ke neniam plu en via
					tuta vivo vi forgesos tiun tagon. Kredu min, en via tuta vivo, tio
					estos la lasta fojo, kiam vi rompis promeson. Kio? Ĉu tio igas vin
					ridi?</p>
					<p><b>Petro</b>: Mi ne ridas, mi nur v…</p>
					<p><b>Ralf</b>:	Ankaŭ mi ne ridas. Mi parolas plej serioze. Oni ne ridas pri
					veraj danĝeroj, ĉu? Kaj se vi…</p>
					<p><b>Petro</b>: Sed mi tute ne volas diri ion al la gepatroj. Mi nur…</p>
					<p><b>Ralf</b>:	Kaj se vi rakontos ĝin en la lernejo, ne estos pli bone por
					vi. Mi plorigos vin tute same. Mi malpurigos viajn vestojn, kaj via
					patrino krios furioze kiam vi revenos hejmen. Mi kuŝigos vin en akvo
					kaj sidos sur via kapo. Mi kaptos vin per mia speciala kaptilo kaj
					veturigos vin en la montaron kaj forlasos vin tie, kaj vi estos tute
					sola kaj perdita, kaj vi ploros. Vi…</p>
				</div>
				<div class="col s12 m4">
					<img src="bildoj/gerda19-1.gif" class="responsive-img">
				</div>
			</div>

			<div class="row dialogo">
				<div class="col s12 m8">
					<p><b>Petro</b>: Vi eĉ ne scias ŝofori. Mi ne kredas je via kaptilo.  Kaj
					cetere, mi nur…</p>
					<p><b>Ralf</b>:	Jes, mi scias ŝofori.</p>
					<p><b>Petro</b>: Vi ne rajtas ŝofori ĉar vi estas tro juna. Kaj vi ne havas
					aŭton.</p>
					<p><b>Ralf</b>:	Mi ne zorgas pri tio, ĉu mi rajtas aŭ ne. Se mi farus nur
					tion, kion mi rajtas fari, mi farus nenion. Mi ŝtelos iun veturilon,
					jes, mi ŝtelos veturilon de iu instruisto en la lernejo kaj veturigos
					vin sur monton kaj lasos vin tie kaj vi ploros. Se vi parolos al iu el
					niaj samklasanoj aŭ samlernejanoj, la tuta lernejo ekscios pri la
					virino el la malnova domaĉo, kaj poste la gepatroj…</p>
					<p><b>Petro</b>: Vi diris "virino", do vi ne kredas, ke estas fantomo. Vi do
					konsentas, ke…</p>
					<p><b>Ralf</b>:	Kompreneble mi ne kredas je fantomoj. La virino, kiun ni
					aŭdis, estas virino, kiun mi kaptis kaj gardas tie. Mi planas igi ŝin
					mia servistino: ŝi faros ĉion, kion mi volos. Kaj se vi parolos pri
					ŝi… Nu, mi ne volas paroli pri tio, kio okazos al vi, ĉar vi tro
					timus…
				</div>
				<div class="col s12 m4">
					<img src="bildoj/gerda19-2.gif" class="responsive-img">
				</div>
			</div>

		<?php 
		} // fin section 1
		if ($section=="2") {
		?>

			<section class="klarigo">
				<p>Il n'y a pas de nouveau point de grammaire pour ce chapitre. 
				Vous devriez pouvoir tout comprendre sans trop de difficultés.</p>
			</section>

		<?php 
		} // fin section 2
		if ($section=="3") {
		?>

		<section class="klarigo">
			<p>Tous les mots ou racines de mot du chapitre 19 sont déjà connus. Vous devriez pouvoir les comprendre sans trop de difficultés.
			</p>
		</section>

		<?php 
		} // fin section 3
		if ($section=="4") {
		?>

			<?php 
				getEkzercon(90,$persono_id);
			?>
		
			<?php 
				getEkzercon(91,$persono_id);
			?>

		<?php 
		} // fin section 4
		if ($section=="5") {
			include "lasusono.inc.php";
		?>

			<h3>Dormu trankvile!</h3>
			
			<p>Bonan matenon, kara amiko, ĉiam absorbata en la lernado de la lingvo
			tutmonda !</p>
			<p>
			Vi demandas, kion ni faros ĉi-foje, ĉu ne ? Ĉu vi vere deziras fari
			ion ? Kial do ? Ĉu ne plaĉas al vi resti farante nenion dum kelka
			tempo ?</p>
			<p>
			Nu, se vi volas labori, laboru. Se vi volas enkapigi al vi vortojn,
			enkapigu. Se vi volas relegi jam legitajn rakontojn, relegu. Mi ne
			malhelpos vin. Mi ne ĝenos vin. Mi ne volas vin senkuraĝigi.</p>
			<p>
			Nur permesu, ke mi dormu trankvile. Mi decidis, ke ĉi tiu tago ne
			estos labortago por mi. Mi deklaras ĝin libertago.</p>
			<p>
			Ĉu vere vi sentas vin tre malfeliĉa, se unu tago pasas kaj vi ne
			ricevis vian kutiman legaĵon en la nova lingvo ? Kia stranga reago !</p>
			<p>
			Bonvolu do pardoni min, se ĉi tiu legaĵo estas tro mallonga por via
			leg- kaj lernsoifo<a href='#notoj'>[1]</a>. Mi kredas vin trovema, kaj fidas je via trovemo.
			Se vi volas labori, vi trovos laboron por fari. Kiu serĉas, tiu
			trovas. Serĉu do. Sed ne serĉu ĉe mi, ĉar mi ne deziras skribi
			nun. Mi deziras dormi, havigi al mi duan bonan matenmanĝon (mi jam
			manĝis unu, sed mi ŝategas matenmanĝojn !), iri promeni kun mia
			hundo tra la kamparo, ludi iom da muziko, fari ion ajn, kio plaĉos al
			mi, sed ne elpensi por vi malsaĝajn rakontojn, kiujn vi legos kvazaŭ
			soife pro nekomprenebla lernemo, kiu, ŝajne, allasas al vi eĉ ne unu
			tagon da nenifaro<a href='#notoj'>[2]</a>.</p>
			<p>
			Laboru do kuraĝe, lernu multajn vortojn, legu longajn rakontojn, kaj
			lasu min pasigi tagon tute senzorgan.</p>
			<p>
			Cetere, se vi volas fari kiel mi, ne hezitu. Mi atendas nenion de
			vi, ĉi-foje. Vian decidon — kredu min — mi perfekte komprenos.</p>
			<p>
			Mi dankas pro via komprenemo, kaj salutas vin plej sincere.</p>
			<p>
			Ĝis la revido !</p>
			
			<a id="notoj"></a>
			<p class="rimarko"><strong>NOTOJ</strong> : 
			<ol>
				<li><span class="eo">Leg- kaj lernsoifo</span> : necesas kompreni «legsoifo kaj lernsoifo»,
				t.e. granda deziro legi kaj lerni. 
				<li><span class="eo">Nenifaro</span> = neni(o)-faro, faro de nenio.</li>
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
