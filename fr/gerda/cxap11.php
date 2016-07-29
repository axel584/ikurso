<?php 
$titolo="11 (dek unu)";
$leciono = 11;
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

		<?php 
		} // fin section 3
		if ($section=="4") {
		?>

			<fieldset class="ekzerco">
				<legend><b>Demandoj</b> </legend>
				<input>
				<div class="tasko">
				?>
				</div>
			</fieldset>

		<?php 
		} // fin section 4
		if ($section=="5") {
		?>

			<h3>xxxx</h3>

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