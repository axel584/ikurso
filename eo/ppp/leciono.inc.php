<?php
// Page d'un pas de Paŝoj al plena posedo : pasxo01.php à pasxo30.php définissent $leciono puis incluent ce gabarit.
// Le contenu des sections est en base, dans lecioneroj.enhavo (#1087).
$section=isset($_GET["section"])?htmlspecialchars($_GET["section"]):"1";
include "pppkapo.inc.php";
?>
<div class="row">
	<article class="col s12 m10 l7 offset-m1 offset-l1">

		<section id="leciono-enhavo">
		<?php
		getTitoloLecionero('PP',$leciono,$section);
		montriLecioneron('PP',$leciono,$section,$persono_id);
		?>
		</section>
		
		<section id="leciono-fino">
			<div id="marko" class="right-align">
				<?php getBoutonFinSection('PP',$leciono,$section,$persono_id); ?>
				<a id="farita" class="btn-floating btn-large light-blue darken-1 hide"><i class="material-icons">done_all</i></a>
			</div>
			<div class="ligoj">
				<?php getLecioneroAntauxa('PP',$leciono,$section); ?>
				<?php getLecioneroVenonta('PP',$leciono,$section); ?>
			</div>
		</section>
		
	</article>
	
	<?php include "pppflanko.inc.php"; ?>

</div>

<?php include "ppppiedo.inc.php"; ?>			