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