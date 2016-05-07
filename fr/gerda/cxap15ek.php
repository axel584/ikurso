<? 
$titolo="15 (dek kvin)";
include "gerdakapo.inc.php"; 
?>
		<div class="klarigo">
		<h3>Demandoj</h3>
		<input type="hidden" name="013_cxap15.0" value="Demandoj">
			<div class="tasko">
			<? $demandoj=array (
				1 => "Kun kiu parolas Tom?",
				2 => "&#264;u &#349;i bone dormis?",
				3 => "&#264;u Tom raportas unue?",
				4 => "&#264;u &#349;i sukcesis paroligi la blondulon en la a&#365;to?",
				5 => "Kie &#349;i poste vidis lin?",
				6 => "Kion la blondulo a&#265;etis?",
				7 => "Kial Linda ofte irus al la vendejo por multon a&#265;eti?",
				8 => "Kial &#349;i tamen ne faras tion?",
				9 => "Kion trinkis Linda?"
				);
			ekzerco("U", 2);
			?>
			</div>

		<h3>Ekzerco</h3>
	
		<input type="hidden" name="013_cxap15.1" value="Trovu la vortojn.">
		<p>Trovu la vortojn.</p>
		<p><em>ne alia : ---> ne alia : <input value="sama" size="15"></em></p>

		<p>La vortoj estas:<br>
		<textarea rows=4 cols=70>amba&#365;, a&#365;to, a&#365;tomato, balda&#365;, bruo, &#265;ambro, diskuti, dormi, ekster, el, flegi, helpi, informi, kapo, konscia, kuraci, nokto, observi, opinio, perdi, piedo, resti, risko, ru&#285;a, sama, sekvi, semajno, vespero, vivi, voki</textarea>

		<div class="tasko">
			<? $demandoj=array (
				10 => "al ekster : [15].",
				11 => "atente rigardi : [15].",
				12 => "&#265;iuj el la du : [15].",
				13 => "dan&#285;ero, necerteco : [15].",
				14 => "da&#365;re esti en la sama loko : [15].",
				15 => "ekmalhavi : [15].",
				16 => "esti senkonscia, sed sana : [15].",
				17 => "faciligi la agadon : [15].",
				18 => "fina parto de kruro : [15].",
				19 => "interparoli pri io : [15].",
				20 => "io, kio funkcias per si mem : [15].",
				21 => "iri malanta&#365; io : [15].",
				22 => "la&#365;te peti, ke iu venu : [15].",
				23 => "malbela a&#365;da&#309;o : [15].",
				24 => "maltago : [15].",
				25 => "motora veturilo : [15].",
				26 => "ne alia : [15].",
				27 => "ne en : [15].",
				28 => "ne esti mortinta : [15].",
				29 => "nokti&#285;o : [15].",
				30 => "parto de domo : [15].",
				31 => "parto de la korpo, kie estas la okuloj : [15].",
				32 => "pensanta : [15].",
				33 => "post mallonga tempo : [15].",
				34 => "resanigi : [15].",
				35 => "doni sciigon : [15].",
				36 => "sep tagoj : [15].",
				37 => "tio, kion oni pensas pri iu temo : [15].",
				38 => "tomatokolora : [15].",
				39 => "zorgi pri malsanulo : [15]."
				);
				plenigEkzerco("U");
				?>
			</div>

		</div> <!-- klarigo -->
<? include "gerdapiedo.inc.php"; ?>