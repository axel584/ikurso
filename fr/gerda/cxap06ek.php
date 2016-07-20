<?php 
$titolo="6 (ses)";
include "gerdakapo.inc.php"; 
?>
		<div class="klarigo">
		<h3>Demandoj</h3>
			<input type="hidden" name="013_cxap06.0" value="Demandoj">
			<div class="tasko">
			<?php $demandoj=array (
				1 => "Kion Tom, Bob kaj Linda a&#365;dis? (koridoron / strangan bruon / penson / la blondulon)",
				2 => "Kiu eble falis en la koridoro? (Tom / Bob / Linda / Gerda / la blondulo / Ronga)",
				3 => "Kiuj iras vidi? (Linda kaj Tom / Linda kaj Bob / Bob kaj Tom / &#265;iuj tri)",
				4 => "Kiu restas por observi? (Tom / Bob / Linda / la blondulo / Gerda)"
				);
			ekzerco(True, 2);
			?>
			</div>

<h3>Ekzerco</h3>

			<input type="hidden" name="013_cxap06.1" value="Elektu la &#285;ustan vorton.">
			<p>Elektu la &#285;ustan vorton.</p>
			<p><em>Ekzemple:&nbsp;
			<select><option>&nbsp;&nbsp;?&nbsp;&nbsp;</option><option>Li</option><option>Lin</option></select>
			 metas <select><option>&nbsp;&nbsp;?&nbsp;&nbsp;</option><option>&#285;i</option><option>&#285;in]</option>
			 </select> en la <select><option>&nbsp;&nbsp;?&nbsp;&nbsp;</option><option>po&#349;o</option>
			 <option>po&#349;on</option></select>.
  			---> <input value="Li" size="2"> metas <input value="&#285;in" size="3"> en la <input value="po&#349;on"
  			size="5">.</em></p><br>
  			<p>-- Nun decidu vi:</p>

			<div class="tasko">
				<?php $demandoj=array (
					1 => "La [blondulo/blondulon] metis [sukero/sukeron] en la [taso/tason] de [kafo/kafon].",
					2 => "[Li/Lin] volis iri en la [restoracio/restoracion], al la [bela/belan] [knabino/knabinon], sed [li/lin] falas en la [koridoro/koridoron].",
					3 => "Bob konsentas kun [Linda/Lindan].",
					4 => "[Ili/Ilin] rigardas al la [studentoj/studentojn].",
					5 => "[Iu/Iun] perdis [a&#309;o/a&#309;on] en la [restoracio/restoracion].",
					6 => "Ili metas [&#285;i/&#285;in] sur la [tablo/tablon] kaj decidas promeni al la [universitato/universitaton]. [Ili/Ilin] ekiras.",
				);
				elektEkzerco();
				?>
			</div>
		</div> <!-- klarigo -->
<?php include "gerdapiedo.inc.php"; ?>