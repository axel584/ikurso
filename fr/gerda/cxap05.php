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

				<p><span class="eo">tiu ĉi viro estas juna</span> : cet homme-ci est jeune</p>
				<p><span class="eo">tio ĉi estas nekomprenebla</span> : ceci est incompréhensible</p>
			</section>
			
		<?php 
		} // fin section 2
		if ($section=="3") {
		?>

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

			<fieldset class="ekzerco">
				<legend><b>Demandoj</b></legend>
				<input type="hidden" name="013_cxap05.0" value="Demandoj">
				<div class="tasko">
				<?php $demandoj=array (
					1 => "Kio estis en la mano de la blondulo antaŭe? (sukerpeco / la taso de Gerda / io tre malgranda / la taso de Linda / nenio)",
					2 => "Kio estis en lia mano poste? (sukerpeco / la taso de Gerda / io tre malgranda / la taso de Linda / nenio)",
					3 => "Kio estas en la sukerujoj tie? (sukerpecoj / pulvora sukero / iu drogo / mistera substanco / sekreta lingvo)",
					4 => "Ĉu estas normale promeni kun sukerpecoj en la poŝo? (jes / ne)",
					5 => "Kiu ekiras for? (Linda / Gerda / Tom / Bob / la blondulo)"
					);
				ekzerco(True, 2);
				?>
				</div>
			</fieldset>

			<fieldset class="ekzerco">
				<legend><b>Elektu la ĝustan vorton.</b></legend>
				<input type="hidden" name="013_cxap05.1" value="Elektu la ĝustan vorton.">
				<div class="ekzemplo">
					<p><em>Ekzemple: </em></p>
					<p><span class="input-field"><select><option> ? </option><option>Kiam</option><option>Se</option></select></span>
					li estus studento, mi lin konus.</p>
					<p>→ <b>Se</b> li estus studento, mi lin konus.</p>
				</div>
	
				<div class="tasko">
					<?php $demandoj=array (
						6 => "Mi ne scias, [kiam/se] ŝi venos al ni.",
						7 => "Mi tre multe laborus, [kiam/se] mi povus.",
						8 => "[Kiam/Se] li estas studento, li estas en la universitato.",
						9 => "[Kiam/Se] Tom estis juna, Gerda jam lernis kriptografion.",
						10 => "Mi volas paroli ankaŭ pri vi, [kiam/se] vi permesas.",
						11 => "Mi parolis kun ŝi, [kiam/se] ŝi sidis en la restoracio."
					);
					elektEkzerco();
					?>
				</div>
			</fieldset>


		<?php 
		} // fin section 4
		if ($section=="5") {
		?>

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