<?php
$titolo="4 (kvar)";
$gxisdatigDato="2005-11-09";
include "gerdakapo.inc.php"; 
?>
		<div class="klarigo">
			<h3>Demandoj</h3>

			<input type="hidden" name="013_cxap04.0" value="Demandoj">
		
			<div class="tasko">
			<?php $demandoj=array (
				1 => "Pri kio Linda kaj Tom parolis? (pri Bob / pri amo / pri la blondulo / pri kripta&#309;o-scienco)",
				2 => "Kiu sidas kun la viro, pri kiu Linda kaj Tom parolis? (Gerda / Ronga / blonda junulo / Bob / neniu)",
				3 => "Kiu scias, kiu estas Gerda? (Bob / Linda / Tom)",
				4 => "&#264;u Bob konas la blondulon? (jes / ne)",
				5 => "Kion instruas Gerda? (novajn lingvojn / lingvistikon / kripta&#309;o-sciencon)",
				6 => "Kiu estas profesoro pri lingvistiko? (Bob / Linda / Tom / Gerda / Ronga / la blondulo)",
				7 => "Kiu estas la sola bela virino en la tuta mondo, por Tom? (Gerda / Linda / Ronga / la knabino en la angulo)",
			);
			ekzerco("U", 2);
			?>
			</div>

			<h3>Ekzerco</h3>
			<input type="hidden" name="013_cxap04.1" value="Elektu la &#285;ustan vorton.">
			<p>Elektu la &#285;ustan vorton.</p>
			<p><em>Ekzemple:&nbsp;
			<select><option>&nbsp;&nbsp;?&nbsp;&nbsp;</option><option>Mi</option><option>Min</option></select>
			 diris <select><option>&nbsp;&nbsp;?&nbsp;&nbsp;</option><option>tio</option><option>tion</option>
			 </select> al <select><option>&nbsp;&nbsp;?&nbsp;&nbsp;</option><option>vi</option><option>vin</option></select>.
			  ---> <input value="Mi" size="2"> diris <input value="tion" size="4"> al <input value="vi" size="2">.</em><br><br></p>

			<div class="tasko">
			<?php $demandoj=array (
				8 => "[Ili/Ilin] demandas [mi/min].",
				9 => "[Multo/Multon] diras [li/lin] al la studentoj.",
				10 => "Al la studentoj li demandas [tio/tion], [kio/kion] [li/lin] ne scias, sed [ili/ilin] diras [nenio/nenion].",
				11 => "[Ili/Ilin] ne scias.",
				12 => "[Linda/Lindan] ne sidas sole. Venas [bela/belan] [junulo/junulon].",
				13 => "[Tio/Tion] certe estas la [universitato/universitaton].",
				14 => "La [studentoj/studentojn] montras al [mi/min] la [studenta/studentan] [restoracio/restoracion].",
				15 => "[Mi/Min] petas [vi/vin], diru al [mi/min] [tio/tion].",
				16 => "La [blondulo/blondulon], [kiu/kiun] staras en la [restoracio/restoracion], estas [stranga/strangan].",
				17 => "[Ili/Ilin] ne pardonas la [nova/novan] [studento/studenton].",
				18 => "[Li/Lin] ne komprenas. [Tio/Tion] estas [mistera/misteran].",
				19 => "[Li/Lin] preferas [sinceraj/sincerajn] [junuloj/junulojn]."
			);
			elektEkzerco();
			?>
			</div>

		</div> <!-- klarigo -->
<?php include "gerdapiedo.inc.php"; ?>
