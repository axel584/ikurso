<? 
$titolo="10 (dek)";
include "gerdakapo.inc.php"; 
?>
		<div class="klarigo">
		<h3>Demandoj</h3>
		<input type="hidden" name="013_cxap10.0" value="Demandoj">

			<div class="tasko">
			<? $demandoj=array (
				1 => "Kiu ne emas fidi la flegistinon? (Tom / Bob / Linda / Gerda / la blondulo)",
				2 => "Kie Tom kaj Bob retrovis sin reciproke? (en lernejo / en universitato / en la urbego, kie ili vivis tiutempe)",
				3 => "Estas ___ flegistino(j) en la universitato. (unu / du / tri / kvar / kvin)",
				4 => "Pri kiu zorgas Tom? (pri Bob / pri Gerda / pri Linda / pri la flegistino)",
				5 => "&#264;u Tom &#349;atas la novan aventuron? (jes / ne)",
				6 => "Kiun amas Tom? (Gerdan / Lindan / Rongan / la flegistinon)"				
			);
			ekzerco("U", 2);
			?>
			</div>

		<h3>Ekzerco</h3>
		<input type="hidden" name="013_cxap10.1" value="Anstata&#365;igu la stelon per la &#285;usta vorto a&#365; vortero.">

		<p>Anstata&#365;igu la stelon per la &#285;usta vorto a&#365; vortero.</p>
		<p>Ekzemplo:<br>
		<em>Tom [*] Linda estas student[*]. ---> Tom kaj Linda estas studentoj.</em></p>
			
		<p>-- Nun faru vi:</p><br>

			<div class="tasko">
			<? $demandoj=array (
				7 => "Tom [3] Linda estas student[3]. En universitat[3] restoraci[3] ili observas blond[3] junul[3], kiu agas plej strange: dum li parolas [3] knabino, li ka&#349;[3] metas io[3] en &#349;i[3] kafotaso[3].",
				8 => "Eble estis drogo, &#265;ar tuj post ki[3] &#349;i ekstaras kaj forlasas la restoracio[3], [3] la koridoro[3] &#349;i jam perdas la konscion. Intertemp[3], Bob sid[3]is &#265;e Tom kaj Linda.",
				9 => "Li povas rakont[3] al ili[3], ki[3] estas la knabino: &#349;i estas Gerda, nova instruist[3] pri kripta&#309;oscienco ([3]novaj sekretaj lingvoj). Ronga, la profesoro pri lingvistiko, volis, ke &#349;i ven[3] al la universitato [3] instru[3] kaj labor[3] kun li.",
				10 => "Kiam ili a&#365;das &#349;i[3] falbruon el la koridor[3], Bob kaj Tom rapidas por helpi &#349;i[3]. Bob metas &#349;in bone, tiel [3] &#349;i ku&#349;u komforte, kaj Tom ir[3] vok[3] flegistinon.",
				11 => "Tiu flegistino, dika, grasa kaj parolema, nur post long[3] diskut[3] kun Tom, konscii&#285;as [3] tio, ke la afero ur&#285;as. Se &#349;i est[3] pli zorgema, &#349;i [3] rapidus kaj eble ne okazus jeno:",
				12 => "Kiam Tom fine [3]venas kun la flegistino, Gerda estas for, kaj Bob sidas &#265;e la koridor[3] mur[3], bat[3]a surkape. Kion [3]tempe faras Linda? &#348;i pli kaj pli [3]trankvil[3]as, lasite sola [3] la universitata restoracio kun la blond[3] strang[3].",
				13 => "&#348;i observ[3] lin, kaj kiam li eliras tra la pordo alurb[3], &#349;i[3] sekvas li[3]. Linda estas junulino iom tim[3], certe belega. Tom am[3]as &#349;in; li havas okulojn nur [3] &#349;i.",
				14 => "Li zorgas pri &#349;i. &#264;u &#349;i trov[4] en dan&#285;ero? Ki[3], fakte, &#349;i iros? Kaj Gerda, kien &#349;i[3] fori&#285;is? Ki[3] okaz[3] kun &#349;i? La afero [4] pli kaj pli mistera!"
			);
			plenigEkzerco("U");
			?>
			</div>

		</div> <!-- klarigo -->
<? include "gerdapiedo.inc.php"; ?>