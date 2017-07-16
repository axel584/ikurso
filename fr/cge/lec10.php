<?php
$titolo="10 (dek)";
$leciono = 10;
$section=isset($_GET["section"])?$_GET["section"]:"1";
include "dlekkapo.inc.php";
?>

<div class="row">
	<article class="col s12 m10 l7 offset-m1 offset-l1">
				
		<section id="leciono-enhavo">
		
		<?php 
		getTitoloLecionero('CG',10,$section);
		displayWarningSiLecioneroManquante($persono_id,'CG',$leciono,$section);

		if ($section=="1") {
		?>

			<p>
			Vous voilà rendu à la 10<sup>e</sup> et dernière leçon de votre cours. Elle
			consistera en un petit examen qui nous permettra d’évaluer vos
			connaissances de l’espéranto écrit. Votre tuteur le corrigera comme
			d’habitude, et vous recevrez un <i>atestilo</i> (attestation de fin de cours).
			</p>

			<?php 
				getEkzercon(38,$persono_id);
				getEkzercon(39,$persono_id);
				getEkzercon(40,$persono_id);
				getEkzercon(41,$persono_id);
				getEkzercon(42,$persono_id);
				getEkzercon(43,$persono_id);
				getEkzercon(44,$persono_id);
				getEkzercon(45,$persono_id);
				getEkzercon(46,$persono_id);
				getEkzercon(47,$persono_id);
				getEkzercon(48,$persono_id);
			?>

		<?php 
		} // fin section
		if ($section=="2") {
		?>
		
		<p>Bravo ! Vous avez terminé, il ne vous reste qu'à envoyer vos réponses à votre correcteur. Une fois que celui ci aura corrigé vos réponses, vous pourrez consulter votre attestation de réussite dans votre espace personnel.</p>
		
		<p>Afin de continuer votre apprentissage, vous pouvez suivre le cours <i>Gerda Malaperis</i>, basé sur une histoire policière, ce cours vous permettra d'enrichir votre vocabulaire et de consolider vos connaissances de la langue.</p>
		
		<p>Bonne continuation dans le monde de l'espéranto !</p>
		
		<?php 
			recapitulatif_lecon_avant_envoi('CG',$leciono,$persono_id);
		} // fin derniere section
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
		pubFacebook();
		?>
				
	</aside>
</div>
<?php include "dlekpiedo.inc.php"; ?>
