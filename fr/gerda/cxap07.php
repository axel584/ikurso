<?php 
$titolo="7 (sep)";
$leciono = 7;
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

			<h3>En la koridoro</h3>
			<div class="row dialogo">
				<div class="col s12 m8">
					<p><i>(En la koridoro)</i></p>
					<p><b>Tom:</b> Jen ŝi estas. Ni pravis. ŝi apenaŭ havis la tempon alveni
					ĝis la angulo, jam ŝi falis. Videble, ŝi estas nekonscia. ŝi perdis
					la konscion kaj falis.</p>
					<p><b>Bob:</b> Ĉu ŝi ankoraŭ vivas?</p>
					<p><b>Tom:</b> Jes. Ne timu. ŝi perdis la konscion, sed ŝi ne perdis la
					vivon. La koro batas. Ĝi batas malforte, sed tamen batas. ŝi do
					vivas. Eble ŝi apenaŭ vivas, sed ŝi vivas.</p>
					<p><b>Bob:</b> Kion ni faru?</p>
					<p><b>Tom:</b> Kion vi opinias?</p>
					<p><b>Bob:</b> ŝajnas, ke ŝi dormas.</p>
				</div>
				<div class="col s12 m4">
					<img src="bildoj/gerda07-1.gif" class="responsive-img">
				</div>
			</div>
			<div class="row dialogo">
				<div class="col s12">
					<p><b>Tom:</b> Ni devas informi la aŭtoritatojn. Tuj. Mi iros. Ili eble
					decidos voki doktoron, kuraciston, kaj almenaŭ tuj sendos flegistinon.
					Certe estas flegistino en ĉi tiu universitato, ĉu ne?</p>
					<p><b>Bob:</b> Verŝajne, sed mi ne scias certe. Mi estas ĉi tie apenaŭ unu
					semajnon.</p>
					<p><b>Tom:</b> Nu, mi tuj iros informi ilin. Restu ĉi tie kun ŝi. Sed ni
					unue metu ŝin pli bone, ke ŝi kuŝu komforte, kun la piedoj pli altaj
					ol la kapo.</p>
					<p><b>Bob:</b> Ĉu vere? Ĉu vere vi volas, ke ŝi kuŝu kun la piedoj pli
					altaj ol la kapo? Tio ne estas komforta.</p>
					<p><b>Tom:</b> Tamen, kiam iu perdis la konscion, tio estas la ĝusta pozicio,
					se mi bone memoras, kion oni instruis al mi.</p>
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