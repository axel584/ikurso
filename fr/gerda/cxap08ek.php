<?php 
$titolo="8 (ok)";
include "gerdakapo.inc.php"; 
?>
		<div class="klarigo">
			<h3>Demandoj</h3>
			<input type="hidden" name="013_cxap08.0" value="Demandoj">

			<div class="tasko">
			<?php $demandoj=array (
				1 => "&#264;u Linda estas trankvila? (jes / ne)",
				2 => "&#264;u Tom kaj Bob jam revenis? (jes / ne)",
				3 => "&#264;u Linda scias, kio okazis al Gerda? (jes / ne)",
				4 => "Kiu ekstaras kaj iras al la pordo? (Linda / Gerda / la juna viro, kiu metis ion en la kafon de Gerda / Bob / Tom)",
				5 => "Kiu sekvas? (Linda / Gerda / la juna viro, kiu metis ion en la kafon de Gerda / Bob / Tom)"
				);
			ekzerco(True, 2);
			?>
			</div>

			<h3>Ekzercoj 8.1</h3>

			<input type="hidden" name="013_cxap08.1" value="1. Elektu la &#285;ustan vorton.">
			<p>Elektu la &#285;ustan vorton.<br>
			("Berlino", "Londono" kaj "Parizo" estas urbo-nomoj.)</p>
			<div class="tasko">
				<?php $demandoj=array (
					6 => "[Oni/Onin] sendis [mi/min] al [Berlino/Berlinon] por paroli kun la [spiono/spionon].",
					7 => "En [Berlino/Berlinon] mi atendis kvar [tagoj/tagojn] sed ne vidis [li/lin].",
					8 => "La [tuta/tutan] [tempo/tempon] ili observis la [virino/virinon] en [Londono/Londonon].",
					9 => "Ili sekvis [&#349;i/&#349;in] al [Parizo/Parizon], sed en [tiu/tiun] [urbo/urbon] [ili/ilin] perdis [&#349;i/&#349;in].",
					10 => "Kiam [oni/onin] a&#365;dis [tiu/tiun] [nova&#309;o/nova&#309;on] el [Parizo/Parizon], [oni/onin] decidis, ke [mi/min] ne plu restu en la [urbo/urbon].",
				);
				elektEkzerco();
			?>
			</div>

			<h3>Ekzerco 8.2</h3>
			
			<p>Konservu la &#285;ustajn vortojn</p>
			<input type="hidden" name="013_cxap08.2" value="2. Konservu la &#285;ustajn vortojn.">
			<p>Ekzemplo:<br>
			<em>Vi parolu pri <select><option>&nbsp;&nbsp;?&nbsp;&nbsp;</option><option>vi</option>
			<option>si</option></select>. ---> Vi parolu pri <input value="vi" size="2">.</em></p>
			<br>
			<p>-- Nun faru vi:</p>

			<div class="tasko">
				<?php $demandoj=array (
					11 => "Mi konas [min/sin]. Mi do ne volas vidi [min/sin] en la spegulo. Tom estas pli bela ol mi, kaj mi ofte vidas lin rigardi [lin/sin] en la spegulo. Kiam li turnas [lin/sin] al mi, mi plene vidas [sian/lian] belan aspekton.",
					12 => "&#264;u vi volas piediri reen al [via/sia] &#265;ambro? Vi promenos longe, sed ne timu, ke [viaj/siaj] kruroj tro laboros kaj perdos [ilian/sian] tutan forton."
					);
				elektEkzerco();
			?>
			</div>
				

			<h3>Ekzerco 8.3</h3>

			<input type="hidden" name="013_cxap08.3" value="3. Elektu la &#285;ustan pronomon kaj kompletigu &#285;in.">
			<p>Ekzerco: Elektu la &#285;ustan pronomon kaj kompletigu &#285;in.</p>
			<p>Ekzemplo:<br>
			<em>Mi konas [mi* / si*] viza&#285;on. ---> Mi konas <input value="mian" size="4"> viza&#285;on.</em></p>
			<br>
			<p>-- Atente rigardu la tutan ekzercon unue!</p><br>
			<div class="tasko">

					<p>&#264;u vi havas informojn pri Linda? &#348;i ku&#349;is en 
					<input type="hidden" name="dd08.14.61" value="&#264;u vi havas informojn pri Linda? &#348;i ku&#349;is en ">
					[&#349;i*/si*] <input name="rr08.14.61" size="5" onkeyup='xAlUtf8(this)'> 
					&#265;ambro kaj ne sentis <input type="hidden" name="dd08.14.102" value=" &#265;ambro kaj ne sentis ">
					[&#349;i*/si*] <input name="rr08.14.102" size="5" onkeyup='xAlUtf8(this)'> 
					tre bone. Tom iris al <input type="hidden" name="dd08.14.139" value=" tre bone. Tom iris al ">
					[&#349;i*/si*] <input name="rr08.14.139" size="5" onkeyup='xAlUtf8(this)'> 
					kun <input type="hidden" name="dd08.14.158" value=" kun "> 
					[li*/si*] <input name="rr08.14.158" size="5" onkeyup='xAlUtf8(this)'> 
					kuracisto, sed &#349;i ne rigardis tiun kuraciston serioza. &#348;i preferis 
					<input type="hidden" name="dd08.14.245" value=" kuracisto, sed &#349;i ne rigardis tiun kuraciston serioza. &#348;i preferis"> 
					[&#349;i*/si*] <input name="rr08.14.245" size="5" onkeyup='xAlUtf8(this)'> 
					kuraciston; &#349;i vere ne amas <input type="hidden" name="dd08.14.293" value=" kuraciston; &#349;i vere ne amas "> 
					[li*/si*] <input name="rr08.14.293" size="5" onkeyup='xAlUtf8(this)'>. 
					Li do forsendis <input type="hidden" name="dd08.14.320" value=". Li do forsendis "> 
					[li*/si*] <input name="rr08.14.320" size="5" onkeyup='xAlUtf8(this)'> kaj vokis 
					<input type="hidden" name="dd08.14.340" value=" kaj vokis "> 
					[&#349;i*/si*] <input name="rr08.14.340" size="5" onkeyup='xAlUtf8(this)'>. 
					Strange, kiam &#349;i vidis <input type="hidden" name="dd08.14.384" value=". Strange, kiam &#349;i vidis "> 
					[li*/si*] <input name="rr08.14.384" size="5" onkeyup='xAlUtf8(this)'> 
					kuraciston, &#349;i sentis <input type="hidden" name="dd08.14.421" value=" kuraciston, &#349;i sentis "> 
					[&#349;i*/si*] <input name="rr08.14.421" size="5" onkeyup='xAlUtf8(this)'> 
					malbone, sed tuj kiam &#349;i vidis 
					<input type="hidden" name="dd08.14.472" value=" malbone, sed tuj kiam &#349;i vidis "> 
					[&#349;i*/si*] <input name="rr08.14.472" size="5" onkeyup='xAlUtf8(this)'> 
					kuraciston alveni, &#349;i jam sentis 
					<input type="hidden" name="dd08.14.525" value=" kuraciston alveni, &#349;i jam sentis ">
					[&#349;i*/si*] <input name="rr08.14.525" size="5" onkeyup='xAlUtf8(this)'> 
					pli bone. Oni <input type="hidden" name="dd08.14.554" value=" pli bone. Oni "> 
					[oni*/si*] <input name="rr08.14.554" size="5" onkeyup='xAlUtf8(this)'> 
					demandas, &#265;u &#349;i ametas <input type="hidden" name="dd08.14.598" value=" demandas, &#265;u &#349;i ametas ">
					[li*/&#349;i*/si*] <input name="rr08.14.598" size="5" onkeyup='xAlUtf8(this)'>  
					<input type="hidden" name="dd08.14.628" value=" kuraciston."> kuraciston.</p>			
				</div>
		</div> <!-- klarigo -->
<?php include "gerdapiedo.inc.php"; ?>