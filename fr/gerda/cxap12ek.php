<?php 
$titolo="12 (dek du)";
include "gerdakapo.inc.php"; 
?>
		<div class="klarigo">
		<h3>Demandoj</h3>

			<input type="hidden" name="013_cxap12.0" value="Demandoj">
			<div class="tasko">
			<?php $demandoj=array (
				1 => "Kion Bob tuj deziras?",
				2 => "Kie oni povas trovi brandon?",
				3 => "Kion Bob trinkas unue?",
				4 => "&#264;u li povas bone klarigi, kio okazis?",
				5 => "&#264;u li a&#365;dis bruon?",
				6 => "&#264;u Bob vere mortis?"
			);
			ekzerco(True, 2);
			?>
			</div>

			<h3>Ekzerco</h3>
			
			<input type="hidden" name="013_cxap12.1" value="Forigu la vortojn kun {}.">
			<p>Forigu la vortojn kun "{}".</p>
			<p>Ekzemplo:<br>
			<em>Marko &#349;atas {la} a&#365;ton {de Marko}. ---> Marko &#349;atas sian a&#365;ton.<br>
			{Petro} &#349;atas {la} a&#365;ton {de Ivano}. ---> Li &#349;atas lian a&#365;ton.</em></p>
			<br>
			<p>-- Por vi:</p>
			
			<div class="tasko">
			<?php $demandoj=array (
				7 => "{Linda} rigardas al {Linda} en la spegulo.",
				8 => "{Tom} rigardas al {la blondulo}.",
				9 => "{Tom} rigardas al {la} kunulo {de Tom}.",
				10 => "{Tom} rigardas al {la} kunulo {de la blondulo}.",
				11 => "{La} amiko {de Bob} amas {Lindan}.",
				12 => "{La} amikino {de Tom} rigardas {la amikinon de Tom} en la spegulo.",
				13 => "{La} amikino {de Ivano} amas {Ivanon}.",
				14 => "{La blondulo} estas en {la} a&#365;to {de la blondulo}.",
				15 => "Gerda estas en la a&#365;to de {la} amiko {de Gerda}.",
				16 => "{Petro kaj Ivano} ka&#349;as {Petron kaj Ivanon} sub la tablo."
				);
				ekzerco(True,1);
			?>
			</div>
		</div> <!-- klarigo -->
<?php include "gerdapiedo.inc.php"; ?>