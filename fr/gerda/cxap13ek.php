<?php 
$titolo="13 (dek tri)";
include "gerdakapo.inc.php"; 
?>
		<div class="klarigo">
		<h3>Demandoj</h3>
		<input type="hidden" name="013_cxap13.0" value="Demandoj">
			<div class="tasko">
			<?php $demandoj=array (
				1 => "Kie sidas Linda?",
				2 => "Kial &#349;i volas paroli kun la blondulo?",
				3 => "&#264;u la blondulo volas klarigi siajn zorgojn?",
				4 => "Kiel Linda klarigas sian scivolon?",
				5 => "Kien precize veturas la blondulo?",
				6 => "Kie nun staras Linda?",
				7 => "Kion &#349;i timas vidante la forveturantan a&#365;ton?"
			);
			ekzerco(True, 2);
			?>
			</div>

		<h3>Ekzerco</h3>
			<input type="hidden" name="013_cxap13.1" value="Trovu la vortojn.">
			<p>Trovu la vortojn.</p>
			<p>Ekzemplo: <em>faradi : ---> faradi : <input value="agi"></em></p>
			<br>
			<p>La vortoj estas:<br>
			<textarea rows=4 cols=70>agi, alia, ami, angulo, aspekti, blondo, demandi, direkti, dum, grava, iri, kara, knabo, mano, mistera, montri, nun, permesi, peti, prava, preferi, serioza, saluti, spiono, stari, stranga, studento, tago, universitato, viza&#285;o</textarea></p>
			<div class="tasko">
			<?php $demandoj=array (
				8  => "anta&#365;a parto de la kapo : [15].",
				9  => "atentinda : [15].",
				10  => "centro de supera instruado : [15].",
				11  => "&#265;i tiam : [15].",
				12  => "diri &quot;bonan tagon&quot; : [15].",
				13  => "dudek kvar horoj : [15].",
				14  => "eltrovisto de sekretoj : [15]. ",
				15  => "en la tempo de : [15].",
				16  => "faradi : [15].",
				17  => "fina parto de brako : [15].",
				18  => "havanta &#285;ustan opinion : [15].",
				19  => "irigi la&#365; la &#285;usta vojo : [15].",
				20  => "juna vira homo : [15].",
				21  => "kiun oni amas a&#365; &#349;atas : [15].",
				22  => "konsenti, ke iu faru ion : [15].",
				23  => "lernanto &#265;e universitato : [15].",
				24  => "malnormala : [15].",
				25  => "ne konata, ne komprenata : [15].",
				26  => "ne la sama : [15].",
				27  => "ne ludema, grava : [15].",
				28  => "nek ku&#349;i, nek sidi, nek iel movi&#285;i : [15].",
				29  => "pala koloro de haroj : [15].",
				30  => "peti informon : [15].",
				31  => "pli &#349;ati : [15].",
				32  => "sciigi, ke oni volas ion ricevi : [15].",
				33  => "sin movi piede : [15].",
				34  => "&#349;ajni la&#365;vide : [15].",
				35  => "&#349;ategi : [15].",
				36  => "tie, kie muroj kuniras : [15].",
				37  => "videbligi : [15]."
				);
				plenigEkzerco("U");
				?>
			</div>
		</div> <!-- klarigo -->
<?php include "gerdapiedo.inc.php"; ?>