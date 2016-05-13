<?php 
$titolo="18 (dek ok)";
include "gerdakapo.inc.php"; 
?>
		<div class="klarigo">
		<h3>Demandoj</h3>
		<input type="hidden" name="013_cxap18.0" value="Demandoj">
			<div class="tasko">
			<?php $demandoj=array (
				1 => "Kiu parolas komence de la &#265;apitro, kaj pri kio?",
				2 => "Kiel sentas sin Gerda?",
				3 => "Kiom facile &#349;i legis la dokumenton?",
				4 => "Kial &#349;i ne diras, kio estas skribita en la dokumento?",
				5 => "Kion kunportas la a&#265;ulo, kiam li revenas, kaj kial?",
				6 => "Kia estas la vo&#265;o de la filino de Gerda?",
				7 => "Kion Gerda ricevas por man&#285;i?"
			);
			ekzerco("U", 2);
			?>
			</div>

		<h3>Notoj</h3>

		<div class="ekzerco">
			<p>&#264;u vi scias, kion signifas <span class="eo">signifas</span>? Se ne, jen klarigo:</p>
			<p><span class="eo">SIGNIFI</span> estas <span class="eo">doni ideon</span>, 
			<span class="eo">esti komprenata en certa maniero</span>.</p>
			<p><span class="eo">SIGNIFO</span> estas la ideo donata a&#365; komunikata. Oni povas paroli pri la
			signifo de vorto (<span class="eo">Perdi</span> signifas <span class="eo">ekmalhavi</span>, ekzemple) a&#365; de io
			alia (Ru&#285;a lumo povas signifi <span class="eo">Haltu!</span>).</p>
			<p>
			Por la sekvanta ekzerco vi devos parigi la vortojn kaj la signifojn.
			<span class="eo">Centro</span> kaj <span class="eo">mezo</span> estas bona paro, &#265;ar 
			<span class="eo">centro</span> signifas <span class="eo">mezon</span> (ne precize, sed preska&#365;).
			</p>
		</div>
		<h3>Ekzerco</h3>

		<input type="hidden" name="013_cxap18.1" value="Trovu la vortojn.">
		<p>Trovu la vortojn.</p>
		<p><em>centro : ---> centro : <input value="mezo" size="5"></em></p>
		<br>
		<p>La vortoj estas:<br>
		<textarea rows=4 cols=70>amiko, aventuro, bani, bluo, dan&#285;ero, danki, ege, epoko, facila, fu&#349;i, homo, kial, kie, klaso, kompati, kredi, mezo, minuto, okulo, rondo, sana, sen, silenti, sveni, &#349;ati, tradicio, unua, ur&#285;a, vorto, zorgi</textarea>

		<div class="tasko">
		<?php $demandoj=array(
			8 => "ama(n)to a&#365; &#349;ata(n)to : [15].",
			9 => "ameti : [15].",
			10 => "centro : [15].",
			11 => "en kiu loko : [15].",
			12 => "enakvigi : [15].",
			13 => "esprimi feli&#265;on pro io ricevita : [15].",
			14 => "esti atenta, sin okupi : [15].",
			15 => "farebla sen granda laboro : [15].",
			16 => "fari tre malbone : [15].",
			17 => "grupo de amikoj (ekzemple) : [15].",
			18 => "grupo de lernantoj : [15].",
			19 => "io kutime farata : [15].",
			20 => "kun bone funkcianta korpo : [15].",
			21 => "mallasta : [15].",
			22 => "ne kun : [15].",
			23 => "ne paroli, fari nenian bruon : [15].",
			24 => "ne&#265;iutaga okaza&#309;aro : [15].",
			25 => "ofta okulkoloro de blonduloj : [15].",
			26 => "parto de parolo : [15].",
			27 => "perdi la konscion : [15].",
			28 => "pro kio : [15].",
			29 => "rigardi kiel veran : [15].",
			30 => "risko de malbono : [15].",
			31 => "senti la suferojn de alia homo : [15].",
			32 => "sesdek sekundoj : [15].",
			33 => "tempo en historio : [15].",
			34 => "tia, ke oni devas tuj fari &#285;in : [15].",
			35 => "tre tre : [15].",
			36 => "vidilo en kapo: [15].",
			37 => "viro a&#365; virino : [15]."
		);
		plenigEkzerco("U");
		?>
		</div>
		</div> <!-- klarigo -->
<?php include "gerdapiedo.inc.php"; ?>