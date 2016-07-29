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