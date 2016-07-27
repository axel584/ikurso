<?php 
$titolo="9 (naŭ)";
$leciono = 9;
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
					ne scias. ŝi svenis, ŝi perdis la konscion. Nun certe oni devas urĝe
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
					<p><b>Bob:</b> Pardonu min. Mi volas diri, ke io estas pli grava.</p>
				</div>
				<div class="col s12 m4">
					<img src="bildoj/gerda09-1.gif" class="responsive-img">
				</div>
			</div>

			<div class="row dialogo">
				<div class="col s12 m8">
					<p>Sed jen subite Tom haltas.</p>
					<p>"Kio okazas? Kial vi ekhaltis?" demandas la flegistino.</p>
					<p>"Ŝi estis ĉi tie, kaj ne plu estas, sed…"</p>
					<p>"Sed estas iu alia, kaj <i>li</i> estas senkonscia, ŝajnas al mi. Ĉu vi konas lin?"</p>
					<p>"Jes, estas mia amiko Bob. Kio okazis al li?"</p>
					<p>La flegistino iras al Bob, kiu falsidas ĉe la koridora muro.
					ŝi tuŝas lian kapon.</p>
					<p>"Batita! Oni batis la kapon al li!"</p>
					<p>"Diable! Bob, Bob! Respondu! Ĉu vi aŭdas min? Diru ion, mi petas! Kio okazis?</p>
					<p>Sed Bob ne respondas, kaj Tom iĝas pli kaj pli maltrankvila.</p>
				</div>
				<div class="col s12 m4">
					<img src="bildoj/gerda09-2.gif" class="responsive-img">
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