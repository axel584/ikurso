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