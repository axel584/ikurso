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