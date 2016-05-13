<?php 
$titolo="21 (dudek unu)";
include "gerdakapo.inc.php"; 
?>
		<div class="klarigo">
		<h3>Demandoj</h3>
		<input type="hidden" name="013_cxap21.0" value="Demandoj">
			<div class="tasko">
			<?php $demandoj=array (
				1 => "Pri kio parolas Gerda kaj Bob?",
				2 => "Kio okazas post iom da tempo?",
				3 => "Kion promesas Gerda?",
				4 => "Pri kio temas la papero?",
				5 => "Kiuj estas la Lumoser&#265;antoj?",
				6 => "Kial la &#349;tatoj persekutis ilin?",
				7 => "Kiam la a&#265;ulo foriras?"
			);
			ekzerco("U", 2);
			?>
			</div>

		<h3>Ekzerco</h3>
		<input type="hidden" name="013_cxap21.1" value="Trovu la vortojn.">
		<p>Trovu la vortojn.</p>
		<p>Ekzemplo: <em>kunligita aro : ---> kunligita aro : <input value="grupo" size="6"></em></p>

		<p>La vortoj estas:<br>
		<textarea rows=4 cols=70>bruna, dekstra, dol&#265;a, flanko, fojo, flugi, frua, gratuli, grupo, hiera&#365;, &#309;us, kelnero, koloro, kuko, mateno, meblo, milito, muziko, nazo, noto, okazi, pano, papero, plafono, plano, plata, po&#349;to, raporti, reala, rompi, soldato, speco, sporto, strato, supo, &#349;anco, tasko, telero, vendi, vesti</textarea>
		
		<div class="tasko">
		<?php $demandoj=array(
			8 => "administrejo por transportado de leteroj : [15].",
			9 => "agrable sentiganta, kiel sukero : [15].",
			10 => "ano de la militistaro : [15].",
			11 => "anta&#365;e pripensita kaj ordigita aran&#285;o de realigota agado : [15].",
			12 => "aro de a&#309;oj kun samaj ecoj : [15].",
			13 => "arto aran&#285;i sonojn en maniero pla&#265;a por a&#365;skultado : [15].",
			14 => "&#265;e la flanko kontra&#365;a al tiu de la koro : [15].",
			15 => "&#265;iu el la okazoj, kiam io okazas : [15].",
			16 => "dekstra a&#365; maldekstra parto : [15].",
			17 => "ebleco de sukceso : [15].",
			18 => "elstara parto meze de viza&#285;o : [15].",
			19 => "esti&#285;i, fari&#285;i en iu loko a&#365; momento : [15].",
			20 => "farota laboro a&#365; servo : [15].",
			21 => "fordoni ion inter&#349;an&#285;e por mono, mala&#265;eti : [15].",
			22 => "frua parto de tago anta&#365; tagmezo : [15].",
			23 => "granda movebla objekto por uzado en domo : [15].",
			24 => "&#285;entile esprimi al iu sian kontentecon pro ties sukceso a&#365; feli&#265;o : [15].",
			25 => "io plata, el kio oni man&#285;as : [15].",
			26 => "je la tago anta&#365; la nuna tago : [15].",
			27 => "korpaj ludoj : [15].",
			28 => "kovri la korpon per io portebla : [15].",
			29 => "kunligita aro : [15].",
			30 => "malalta a&#365; maldika : [15].",
			31 => "maldika a&#309;o, sur kiu oni skribas, kaj el kiu oni faras librojn : [15].",
			32 => "mallonga memoriga skriba&#309;o : [15].",
			33 => "mallonge anta&#365;e : [15].",
			34 => "man&#285;a&#309;o kun multe da akvo : [15].",
			35 => "okazanta pli anta&#365;e, proksime al la komencotempo : [15].",
			36 => "pansimila sed pli dol&#265;a baka&#309;o : [15].",
			37 => "perforte dispecigi : [15].",
			38 => "reciproka mortigado inter malamikaj homgrupoj : [15].",
			39 => "restoracia servisto, kiu alportas la trinka&#309;ojn kaj man&#285;a&#309;ojn : [15].",
			40 => "ru&#285;eco, blueco, bruneco, verdeco, nigreco, ktp : [15].",
			41 => "ru&#285;ete terkolora : [15].",
			42 => "sciigi al alia persono, kion oni a&#365;dis, vidis kaj trovis : [15].",
			43 => "sin movi tra la aero : [15].",
			44 => "speco de simpla man&#285;a&#309;o : [15].",
			45 => "supra kovrilo de &#265;ambro : [15].",
			46 => "vere ekzistanta kaj kontrolebla : [15].",
			47 => "vojo inter domoj en urbo : [15]."
			);
			plenigEkzerco("U");
			?>
			</div>

		</div> <!-- klarigo -->
<?php include "gerdapiedo.inc.php"; ?>