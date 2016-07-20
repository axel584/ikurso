<?php 
$titolo="24 (dudek kvar)";
include "gerdakapo.inc.php"; 
?>
		<div class="klarigo">
		<h3>Nova mistero!</h3>

		<p>KARA KAJ ESTIMATA LEGINTO,</p>
		<p>
		Vi legis &#265;i tiun aventuron &#285;is la fino. Sendube vi estas kontenta, ke
		&#265;io fini&#285;is bone. Sed &#265;u vi rimarkis, ke en la rakonto grava
		kontra&#365;diro trovi&#285;as? Alivorte, en unu loko la a&#365;toro diras ion, kaj
		en alia li diras la kontra&#365;on. Vi ne rimarkis, &#265;u vere?  Beda&#365;rinde!
		Nun vi devos relegi la tutan tekston por trovi, pri kio temas. Legu
		atente, kaj se post unu legado vi ne trovis, relegu duan fojon, trian
		fojon, ktp. Certe vi fine trovos. Kaj se ne, nu, la vortoj kaj
		esprimmanieroj de Esperanto pli bone meti&#285;os en vian kapeton...
		</p>
		<div class="tasko">
		<?php $demandoj=array(
			1 => "&#264;u vi konas la respondon ?"
			);
			ekzerco(True, 10);
		?>
		</div>

		<h3>Demandoj, sed ne ekzercoj</h3>

		<p>Respondu libere.</p>
		<input type="hidden" name="013_cxap25.1" value="Respondu libere.">
		<p>
		&#264;ar tiu &#265;i estas la lasta &#265;apitro de la GERDA-kurso, ne estas
		demandoj pri la teksto, kaj ne estas ekzercoj. En ilia loko estas
		demandoj pri la tuta kurso, pri via opinio pri la kurso. Mi esperas, ke
		vi zorge respondos ilin, &#265;ar viaj respondoj helpos nin plibonigi la
		kurson.
		</p>
		<p>-- Respondu per multegaj vortoj!</p>

		<div class="tasko">
		<?php $demandoj=array(
			2 => "Kiom da Esperanto vi jam sciis, kiam vi komencis la GERDA-kurson? Kiel vi lernis Esperanton anta&#365;e?",
			3 => "&#264;u la GERDA-kurso estis por vi utila? &#264;u vi sukcesis multe lerni per &#285;i? &#264;u vi &#285;uis &#285;in?",
			4 => "&#264;u vi pensas, ke la teksto uzita (la rakonto &quot;Gerda malaperis!&quot;) estis bone elektita? &#264;u &#285;ia lingva&#309;o estas tro simpla? &#264;u la rakonto estas tro stulta, infaneca a&#365; malinteresa?",
			5 => "&#264;u la demandoj pri la teksto estis utilaj? &#264;u eble estus pli bone havi nur ekzercojn post &#265;iu &#265;apitro, sen demandoj? &#264;u la demandoj estu malpli simplaj, por ke oni povu respondi ilin per pli da vortoj?",
			6 => "&#264;u la ekzercoj estis utilaj? &#264;u la vortaro-ekzercoj, en kiuj oni devas parigi vortojn kaj difinojn, estis utilaj? Kiuj estis la plej utilaj ekzercoj, kaj kiuj estis la malplej utilaj? &#264;u vi povas proponi aliajn specojn de ekzercoj?",
			7 => "&#264;u la &quot;vortlisto&quot; estis sufi&#265;e bona? &#264;u &#285;i enhavu pli da gramatikaj klarigoj, a&#365; pli da ekzemploj? &#264;u &#285;i estu havebla en aliaj lingvoj? &#264;u eble vi e&#265; povus helpi traduki &#285;in al alia lingvo?",
			8 => "&#264;u vi uzis a&#365; havas iujn aliajn lernilojn, ekzemple vortaron a&#365; lernolibron pri Esperanto? Kiujn?",
			9 => "&#264;u vi volas plulerni Esperanton? Kiel? &#264;u kurso simila al la GERDA-kurso, sed kun bonaj literaturaj tekstoj anstata&#365; la GERDA-rakonto, estus utila por vi? &#264;u vi preferus simple trastudi iun libron en Esperanto? &#264;u vi volus trastudi libron diskutante &#285;in kun iu? &#264;u vi volas lerni pli pri la historio kaj celoj de la Esperanto-Movado?",
			);
			ekzerco(True, 5);
			?>
			</div>
		</div> <!-- klarigo -->
<?php include "gerdapiedo.inc.php"; ?>