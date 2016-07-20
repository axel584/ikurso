<?php
$titolo="5 (kvin)";
include "gerdakapo.inc.php"; 
?>
		<div class="klarigo">
		<h3>Demandoj</h3>
			<input type="hidden" name="013_cxap05.0" value="Demandoj">
			<div class="tasko">
			<?php $demandoj=array (
				1 => "Kio estis en la mano de la blondulo anta&#365;e? (sukerpeco / la taso de Gerda / io tre malgranda / la taso de Linda / nenio)",
				2 => "Kio estis en lia mano poste? (sukerpeco / la taso de Gerda / io tre malgranda / la taso de Linda / nenio)",
				3 => "Kio estas en la sukerujoj tie? (sukerpecoj / pulvora sukero / iu drogo / mistera substanco / sekreta lingvo)",
				4 => "&#264;u estas normale promeni kun sukerpecoj en la po&#349;o? (jes / ne)",
				5 => "Kiu ekiras for? (Linda / Gerda / Tom / Bob / la blondulo)"
				);
			ekzerco(True, 2);
			?>
			</div>

		<h3>Ekzerco</h3>
			<input type="hidden" name="013_cxap05.1" value="Elektu la &#285;ustan vorton.">
			<p>Elektu la &#285;ustan vorton.</p>
			<p><em>Ekzemple:&nbsp;
			<select><option>&nbsp;&nbsp;?&nbsp;&nbsp;</option><option>Kiam</option><option>Se</option></select>
			li estus studento, mi lin konus.  ---> <input value="Se" size="2"> li estus studento, mi lin konus.</em></p>

			<div class="tasko">
				<?php $demandoj=array (
					6 => "Mi ne scias, [kiam/se] &#349;i venos al ni.",
					7 => "Mi tre multe laborus, [kiam/se] mi povus.",
					8 => "[Kiam/Se] li estas studento, li estas en la universitato.",
					9 => "[Kiam/Se] Tom estis juna, Gerda jam lernis kriptografion.",
					10 => "Mi volas paroli anka&#365; pri vi, [kiam/se] vi permesas.",
					11 => "Mi parolis kun &#349;i, [kiam/se] &#349;i sidis en la restoracio."
				);
				elektEkzerco();
				?>
			</div>
		</div> <!-- klarigo -->
<?php include "gerdapiedo.inc.php"; ?>