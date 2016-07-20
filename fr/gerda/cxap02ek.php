<?php 
$titolo="2 (du)";
include "gerdakapo.inc.php"; 
?>
		<div class="klarigo">
			<h3>Demandoj</h3>
			<input type="hidden" name="013_cxap02.0" value="Demandoj">

			<div class="tasko">
			<?php $demandoj=array (
				1 => "Linda estas ___. (malserioza / nova studento / bela kaj pala / io stranga)",
				2 => "Kio okazas? (Linda rigardas al la spegulo. / Malalta viro staras inter Tom kaj la pordo. / La blonda viro agas strange. / La nova studento proksimi&#285;as al Tom.)",
				3 => "&#264;u estas io en lia mano? (jes / ne)",
				4 => "Al kio montras la mistera ulo? (al la spegulo / al la pordo / al Linda / al Tom / al la angulo)",
				5 => "Al kio rigardas la juna knabino, kiu estas kun li? (al la spegulo / al la pordo / al Linda / al Tom / al la angulo)",
				6 => "&#264;u nun estas io en la taso? (jes / ne)"
				);
				ekzerco(True, 2);
			?>
			</div>

			<h3>Ekzerco</h3>
			<p>Elektu la &#285;ustan vorton.></p>
			<p><em>Turnu vin iomete, <select><option>&nbsp;&nbsp;?&nbsp;&nbsp;</option>
			<option>&#265;u</option><option>se</option></select> vi volas. ---> 
			Turnu vin iomete, <input value="se" size="2"> vi volas.</em></p>
			<p>
			Cet exercice attire votre attention sur la différence de sens entre
			<b>&#265;u</b> (interrogation) et <b>se</b> (condition) :<br>
			<span class='ekz'>mi ne vidas, &#265;u estas io inter mi kaj vi</span> :&nbsp;
			je ne vois pas s'il y a quelque chose entre vous et moi.
			<br>(Y a-t-il quelque chose ? Je ne vois pas.)<br>
			<span class='ekz'>mi ne vidas, se estas io inter mi kaj vi.</span> :&nbsp;
			s'il y a quelque chose entre moi et vous, alors je ne vois pas.
			(Cette chose m'empêche de voir.)</p>
			<input type="hidden" name="013_cxap02.1" value="Elektu la &#285;ustan vorton.">
			<p>&nbsp;</p>
			<div class="tasko">
			<?php $demandoj=array (
				7 => "Mi ne vidas, [&#265;u/se] la junulo parolas al la knabino, a&#365; [&#265;u/se] li nur rigardas al &#349;i.",
				8 => "Vi vidas lin tute bone, [&#265;u /se] ne?",
				9 => "[&#264;u/Se] li agas strange, li estas strangulo.",
				10 => "Mi parolas al knabinoj, [&#265;u/se] ili rigardas al mi.",
				11 => "Mi ne scias, [&#265;u/se] mi parolu al &#349;i a&#365; ne.",
				12 => "[&#264;u/Se] &#349;i parolas al mi, [&#265;u/se] mi reparolu al &#349;i?",
				13 => "Li estas en universitato, [&#265;u/se] li estas studento.",
				14 => "Mi ne certas, [&#265;u/se] li estas studento. Li estas tro maljuna."
				);
				elektEkzerco();
			?>
			</div>
		</div> <!-- klarigo -->
<?php include "gerdapiedo.inc.php"; ?>