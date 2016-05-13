<?php 
$titolo="11 (dek unu)";
include "gerdakapo.inc.php"; 
?>
		<div class="klarigo">
		<h3>Demandoj</h3>
		<input type="hidden" name="013_cxap11.0" value="Demandoj">
			<div class="tasko">
			<?php $demandoj=array (
				1 => "De kiu Linda petas helpon?",
				2 => "&#264;u la juna blonda viro estas kontenta?",
				3 => "Kien la blondulo volas veturi?",
				4 => "Kion volas Linda de li?",
				5 => "&#264;u la blondulo konsentas?",
				6 => "Pri kio Linda parolas dum la veturo?",
				7 => "&#264;u la blondulo estas parolema?"
			);
			ekzerco("U", 2);
			?>
			</div>

		<h3>Ekzerco</h3>

		<input type="hidden" name="013_cxap11.1" value="Plenigu per la &#285;usta formo : 'i&#285;' a&#365; 'ig'.">
		<p>Plenigu per la &#285;usta formo : "i&#285;" a&#365; "ig".</p>
		<p>Ekzemplo:<br>
		<em>Tio facil</em><select><option>?</option><option>i&#285;</option>
		<option>ig</option></select><em>as la laboron. La laboro facil</em><select><option>?</option><option>i&#285;</option>
		<option>ig</option></select><em>as</em>.
		  <em>---> Tio facil</em><input value="ig" size="2"><em>as la laboron. La laboro facil</em><input value="i&#285;" size="2"><em>as.</em></p>
		<br><p>--> Faru vi:</p>
		
		<div class="tasko">
			<?php $demandoj=array(
				1 => "Mi volis aspekti pli bele ol normale. Mi [2]is min pli bela anta&#365; la promenado.<br>Anta&#365; la promenado, mi [2]is pli bela. Penjo ridis pri mi, &#265;ar mi plibel[2]is min. Ni veturis en la urbon.<br>Vetur[2]is nin Penjo. &#348;i [2]is mia amiko tuj post mia unua tago en la laborejo.<br>Anta&#365; la forveturo &#349;i trovis min en mia &#265;ambro, kie mi plibel[2]is.",
				2 => "La urbo trov[2]as tro malproksime de nia laborejo por iri piede.<br>Penjo ne havas a&#365;ton, sed &#349;i sukcesis hav[2]i al si la a&#365;ton de Bob.",
				3 => "Post longa promenado en la urbo ni volis eksidi en trinkejo.<br>Tuj post kiam ni sid[2]is &#265;e tablo, iu ulo turnis sin. Li turn[2]is al ni kaj ekrigardis nin.<br>Ni eksentis nin malbonaj. Lia rigardado malbonsent[2]is nin. Ni devis agi.<br>Ni ne plu restis sidaj, ni restar[2]is, tiel dev[2]ante lin forturni sin.<br>Li komprenis, ke li &#285;enis nin ade rigardante al ni.<br>Ni kompren[2]is al li, ke rigardado povas esti maldiskreta.",
				4 => "Mi lernas multon en la urbo. &#284;i lern[2]as min pri la vivo.<br>Multhoma kunvivado lern[2]as kvaza&#365; a&#365;tomate en la urbo."
			);
			plenigEkzerco("U");
			?>
			</div>
		</div> <!-- klarigo -->
<?php include "gerdapiedo.inc.php"; ?>