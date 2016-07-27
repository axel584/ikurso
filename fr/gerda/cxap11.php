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