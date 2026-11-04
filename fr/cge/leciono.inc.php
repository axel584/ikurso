<?php
// Page d'une leçon du cours en 10 leçons : lec01.php à lec10.php définissent $leciono puis incluent ce gabarit.
// Le contenu des sections est en base, dans lecioneroj.enhavo (#1087).
$section=isset($_GET["section"])?htmlspecialchars($_GET["section"]):"1";
if (!is_numeric($section)) {
	if (empty($persono_id)) {header("Location:../../index.php?erarkodo=24"); exit;}
}
include "dlekkapo.inc.php";
?>

<div class="row">
	<article class="col s12 m10 l7 offset-m1 offset-l1">

		<section id="leciono-enhavo">
		<?php
		getTitoloLecionero('CG',$leciono,$section);
		displayWarningSiLecioneroManquante($persono_id,'CG',$leciono,$section);
		montriLecioneron('CG',$leciono,$section,$persono_id);
		?>
		</section>

		<section id="leciono-fino">
			<div id="marko" class="right-align">
				<?php getBoutonFinSection('CG',$leciono,$section,$persono_id); ?>
				<a id="farita" class="btn-floating btn-large light-blue darken-1 hide"><i class="material-icons">done_all</i></a>
			</div>
			<div class="ligoj">
				<?php getLecioneroAntauxa('CG',$leciono,$section); ?>
				<?php getLecioneroVenonta('CG',$leciono,$section); ?>
			</div>
		</section>

	</article>
			
	<aside class="col s12 m10 l3 offset-m1 push-l1">
								
		<?php
			// lien vers la révision du vocabulaire
			getLigiloAlMemorilo($persono_id);
		?>

		<ul class="collapsible" data-collapsible="expandable">

			<?php 
			// On affiche le sommaire de la lecon
			getEnhavtabelo('CG',$leciono); 
			?>

		</ul>	
		
		<?php
		pubAndroid();
		pubFacebook();
		?>
				
	</aside>
</div>
<?php include "dlekpiedo.inc.php"; ?>
