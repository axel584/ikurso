<?php
// Page d'un chapitre de Gerda malaperis : cxap01.php à cxap25.php et ekzameno_a2.php définissent $leciono puis incluent ce gabarit.
// Le contenu des sections est en base, dans lecioneroj.enhavo (#1087).
$section=isset($_GET["section"])?htmlspecialchars($_GET["section"]):"1";
if (!is_numeric($section)) {
	if (empty($persono_id)) {header("Location:../../index.php?erarkodo=24"); exit;}
}
include "gerdakapo.inc.php";
?>
<div class="row">
	<article class="col s12 m10 l7 offset-m1 offset-l1">

		<section id="leciono-enhavo">
		<?php
		getTitoloLecionero('GR',$leciono,$section);
		montriLecioneron('GR',$leciono,$section,$persono_id);
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
	
	<?php include "gerdaflanko.inc.php"; ?>

</div>

<?php include "gerdapiedo.inc.php"; ?>