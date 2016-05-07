<? 
$titolo="14 (dek kvar)";
include "gerdakapo.inc.php"; 
?>
		<div class="klarigo">
		<h3>Demandoj</h3>
		<input type="hidden" name="013_cxap14.0" value="Demandoj">
			<div class="tasko">
			<? $demandoj=array (
				1 => "&#264;u Gerda sciis, kie &#349;i estas?",
				2 => "Kiel aspektis la &#265;ambro, en kiu Gerda ku&#349;as?",
				3 => "Kial Gerda estis lacega?",
				4 => "&#264;u &#349;i &#349;atis sian malliberecon?",
				5 => "Kiel &#349;i provis liberi&#285;i?",
				6 => "Kio vekis &#349;in?",
				7 => "Pri kio la infanoj parolis?",
				8 => "Kial la infanoj ne helpis &#349;in?",
				9 => "Kun kiu Gerda estis post la forkuro de la infanoj?"				
				);
			ekzerco("U", 2);
			?>
			</div>

			<h3>Ekzerco</h3>
			<input type="hidden" name="013_cxap14.1" value="Trovu la vortojn.">
			<p>Trovu la vortojn.</p>
			<p>Ekzemplo: <em>parto :  ---> parto : <input value="peco" size="15"></em></p>
			<p>La vortoj estas:<br>
			<textarea rows=4 cols=70>absurda, a&#309;o, deziri, drogo, eta, evidenta, fakto, fora, ideo, imagi, instrui, ka&#349;i, kiam, komuniki, koni, konsenti, lerni, mesa&#285;o, nomo, paro, peco, plena, promeni, pulvoro, respondi, sekreto, subita, super, &#349;ajni, temo</textarea>
		
			<div class="tasko">
			<? $demandoj=array (
				10 => "afero : [15].",
				11 => "akiri scion : [15].",
				12 => "aspekti : [15].",
				13 => "diri reage al demando : [15].",
				14 => "dormigilo : [15].",
				15 => "en kiu tempo : [15].",
				16 => "enhavanta &#265;ion enhaveblan : [15].",
				17 => "facile videbla, komprenebla : [15].",
				18 => "fari por si ideon pri io : [15].",
				19 => "havi ideon pri : [15].",
				20 => "havi similan opinion : [15].",
				21 => "io el tre malgrandaj partetoj : [15].",
				22 => "io, kio restu ka&#349;ita, ne konata : [15].",
				23 => "iradi pro plezuro : [15].",
				24 => "komunika&#309;o : [15].",
				25 => "kontra&#365; la normala sa&#285;o : [15].",
				26 => "lernigi : [15].",
				27 => "malgranda : [15].",
				28 => "malmontri : [15].",
				29 => "malproksima : [15].",
				30 => "parto : [15].",
				31 => "pensa&#309;o : [15].",
				32 => "pli alta ol : [15].",
				33 => "rapida, ne atendita : [15].",
				34 => "rilatanta duo : [15].",
				35 => "sciigi, konigi : [15].",
				36 => "tio, pri kio io estas : [15].",
				37 => "vera&#309;o : [15].",
				38 => "voli havi : [15].",
				39 => "vorto, per kiu persono estas konata : [15]."
				);
				plenigEkzerco("U");
				?>
				</div>
		</div> <!-- klarigo -->
<? include "gerdapiedo.inc.php"; ?>