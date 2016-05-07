<? 
$titolo="7 (sep)";
include "gerdakapo.inc.php"; 
?>
		<div class="klarigo">
			<h3>Demandoj</h3>
			<input type="hidden" name="013_cxap07.0" value="Demandoj">
			<div class="tasko">
			<? $demandoj=array (
				1 => "&#264;u Gerda ankora&#365; vivas? (jes / ne)",
				2 => "Kiel batas la koro de Gerda? (forte / malforte / nekonscie / konscie / ver&#349;ajne)",
				3 => "Kiun Tom volas informi? (la blondulon / la profesoron pri lingvistiko / la a&#365;toritatojn / spionon)",
				4 => "&#264;u iu, kiu perdis la konscion, ku&#349;u kun la kapo pli alta ol la piedoj? (jes / ne)"
				);
			ekzerco("U", 2);
			?>
			</div>

		<h3>Ekzerco 7.1</h3>
		<p>Elektu la &#285;ustan vorton.</p>
		<input type="hidden" name="013_cxap07.1" value="Elektu la &#285;ustan vorton.">
		<p>Ekzemplo :<br>
		<em><select><option>&nbsp;&nbsp;?&nbsp;&nbsp;</option><option>Mi</option><option>Min</option></select>
		restis tie unu <select><option>&nbsp;&nbsp;?&nbsp;&nbsp;</option><option>semajno</option><option>semajnon]</option>
		</select>. ---> <input value="Mi" size="2"> restis tie unu <input value="semajnon" size="8">.</em></p>
		<br>
		<p>-- Nun faru vi:</p>

			<div class="tasko">
				<? $demandoj=array (
					5 => "La [sukerpeco/sukerpecon] falis en la [kafo/kafon].",
					6 => "Sed [mi/min] ne deziras [sukero/sukeron] en [mia/mian] [kafo/kafon].",
					7 => "Jen [Linda/Lindan] venas en la [restoracio/restoracion]!",
					8 => "Eble [&#349;i/&#349;in] deziras [kafo/kafon] kun [sukero/sukeron].",
					9 => "[Tiu/Tiun] [tago/tagon] [mi/min] laboris tre multe.",
					10 => "[Li/Lin] restis tie unu [tago/tagon]; [mi/min] restis dum [tuta/tutan] [semajno/semajnon].",
					11 => "Demandu, [kio/kion] [li/lin] faras! --- Ne! Demandu [vi/vin]!",
					12 => "La [kafo/kafon], [kiu/kiun] [vi /vin] havas, estas sen [sukero/sukeron].",
					13 => "La [kafo/kafon], [kiu/kiun] [vi/vin] metis sur la [tablo/tablon], [ili/ilin] ne trinkis.",		
					14 => "La [viro/viron], [kiu/kiun] metis [kafo/kafon] sur la [tablo/tablon], ne estas [studento/studenton].",	
					15 => "La [tablo/tablon], sur [kiu/kiun] estas la [kafo/kafon], estas tro [malgranda/malgrandan].",
					16 => "&#264;u [vi/vin] havas iom da [kafo/kafon]? --- [Mi/Min] havas tri [tasoj/tasojn] da [kafo/kafon]."
					);
				elektEkzerco();
				?>
			</div>

		<h3>Ekzerco 7.2</h3>
		<p>Elektu la &#285;ustan vorton.</p>
		<input type="hidden" name="013_cxap07.2" value="Elektu la &#285;ustan vorton.">
		<p>Ekzemplo:<br>
		<em>&#264;u Tom estas same alta <select><option>&nbsp;&nbsp;?&nbsp;&nbsp;</option><option>kiel</option>
		<option>ol</option></select> Bob, a&#365; &#265;u li estas pli alta <select><option>&nbsp;&nbsp;?&nbsp;&nbsp;</option>
		<option>kiel</option><option>ol</option></select> Bob?<br>
  		---> &#264;u Tom estas same alta <input value="kiel" size="4"> Bob, a&#365; &#265;u li estas pli alta 
  		<input value="ol" size="2"> Bob?</em></p>
		<br><p>-- Nun faru vi:</p>

			<div class="tasko">
				<? $demandoj=array (
					17 => "[Kiel/Ol] vi scias, Bob estas pli alta [kiel/ol] Tom, sed malpli alta [kiel/ol] la stranga blondulo.",
					18 => "Mi preferus resti &#265;i tie [kiel/ol] iri informi la a&#365;toritatojn.",
					19 => "La vero ofte &#349;ajnas pli absurda [kiel/ol] imaga&#309;oj.",
					20 => "Li i&#285;is pli kaj pli forta; li i&#285;is forta [kiel/ol] fortulo.",
					21 => "Iru pli rapide, a&#365; iru malpli rapide; iru [kiel/ol] vi volas!"
				);
				elektEkzerco();
			?>
			</div>
		</div> <!-- klarigo -->
<? include "gerdapiedo.inc.php"; ?>