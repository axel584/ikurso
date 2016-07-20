<?php 
$titolo="19 (dek na&#365;)";
include "gerdakapo.inc.php"; 
?>
		<div class="klarigo">
		<h3>Demandoj</h3>
		<input type="hidden" name="013_cxap19.0" value="Demandoj">
			<div class="tasko">
			<?php $demandoj=array (
				1 => "Kiuj estas Petro kaj Ralf?",
				2 => "Kial Ralf provas timigi Petron?",
				3 => "Kiamaniere li provas timigi lin?",
				4 => "&#264;u Petro estas timigita?",
				5 => "Kion Ralf rakontas pri la virino?"
			);
			ekzerco(True, 2);
			?>
			</div>

		<h3>Ekzerco</h3>
		<input type="hidden" name="013_cxap19.1" value="Trovu la vortojn.">
		<p>Trovu la vortojn.</p>
		<p><em>speco de agado : ---> speco de agado : <input value="maniero" size="8"></em></p>

		<p>La vortoj estas:<br>
		<textarea rows=4 cols=70>a&#265;eti, afabla, akcepti, apud, aran&#285;i, &#265;iam, dolori, fermi, fini, funkcii, glaso, &#285;emi, &#285;eni, heziti, klara, kontenta, lar&#285;a, maniero, manki, miksi, miri, morti, objekto, oportuna, ordo, panei, plezuro, polico, porti, ricevi, ripari, ripeti, sa&#285;a, se&#285;o, seka, soifi, sufi&#265;a, tia, trinki, veturi</textarea>

		<div class="tasko">
		<?php $demandoj=array(
			6 => "afero, io pripensebla : [15].",
			7 => "agi farante sian taskon, servon, oficon : [15].",
			8 => "bona sento de komforteco a&#365; &#285;ojo : [15].",
			9 => "de tiu speco : [15].",
			10 => "deziranta nenion alian ol tion, kion oni havas : [15].",
			11 => "ekhavi : [15].",
			12 => "ekmalfunkcii : [15].",
			13 => "en bezonata kiomo : [15].",
			14 => "enpreni akvon : [15].",
			15 => "esprimi doloran senton per neparolaj sonoj : [15].",
			16 => "facile uzebla, bona por la celo : [15].",
			17 => "fari tre malpla&#265;an senton : [15].",
			18 => "granda en la direkto nek de longo nek de diko : [15].",
			19 => "&#285;usta aran&#285;o a&#365; dismetado : [15].",
			20 => "havigi al si inter&#349;an&#285;e por mono : [15].",
			21 => "iri, sed ne pa&#349;ante : [15].",
			22 => "je &#265;iu tempo : [15].",
			23 => "konsenti ricevi ion : [15].",
			24 => "kontra&#365;krima administra&#309;o : [15].",
			25 => "kunmeti tiel, ke oni ne povas facile rekoni la partojn : [15].",
			26 => "malesti, foresti, ne esti sufi&#265;e multe : [15].",
			27 => "malfaciligi a&#365; malhelpi ies movojn, maloportuni al iu : [15].",
			28 => "meti en situacion a&#365; pozicion, kiu malebligas eniron a&#365; eliron : [15].",
			29 => "ne da&#365;rigi : [15].",
			30 => "ordigi, prizorgi : [15].",
			31 => "pla&#265;a per &#285;entileco, amikeco : [15].",
			32 => "povanta bone kaj &#285;uste decidi : [15].",
			33 => "preni kun si, havi kun si : [15].",
			34 => "pro dubo halti ne sciante, kion fari : [15].",
			35 => "proksime al : [15].",
			36 => "pura, travidebla, komprenebla : [15].",
			37 => "rebonigi, refunkciigi : [15].",
			38 => "rediri, refari : [15].",
			39 => "senakva a&#365; kun malmulte da akvo : [15].",
			40 => "senti bezonon trinki : [15].",
			41 => "senti strangecon, neatenditecon, nekutimecon : [15].",
			42 => "senvivi&#285;i : [15].",
			43 => "sidilo : [15].",
			44 => "speco de agado : [15].",
			45 => "ujo por trinka&#309;o : [15]."
			);
			plenigEkzerco("U");
			?>
			</div>
		</div> <!-- klarigo -->
<?php include "gerdapiedo.inc.php"; ?>