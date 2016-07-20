<?php 
$titolo="9 (na&#365;)";
include "gerdakapo.inc.php"; 
?>
		<div class="klarigo">
			<h3>Demandoj</h3>
			<input type="hidden" name="013_cxap09.0" value="Demandoj">

			<div class="tasko">
			<?php $demandoj=array (
				1 => "&#264;u la flegistino venas tuj? (jes / ne)",
				2 => "&#264;u oni ofte svenas en koridoro? (jes / ne)",
				3 => "Kial Tom ekhaltas? (Li estas novulo. / Gerda ne plu estas tie. / Okupi&#285;i pri malsanuloj ne estas lia fako.)",
				4 => "Kiu sidas &#265;e la muro? (Tom / Bob / linda / Gerda / la flegistino)",
				5 => "&#264;u Bob paroladas? (jes / ne)"
				);
			ekzerco(True, 2);
			?>
			</div>

		<h3>Ekzerco</h3>

		<input type="hidden" name="013_cxap09.1" value="Kompletigu la frazon per la &#285;usta demandovorto.">
		<p>Kompletigu la frazon per la &#285;usta demandovorto.</p>
		<p>Akzemplo:<br>
		<em><input value="" size="6"> vi iras? - Mi iras al la urbo. 
		---> <input value="Kien" size="6"> vi iras? - Mi iras al la urbo.</em></p>
		<p>La demandovortoj jam lernitaj estas:
			kio, kion, kiu, kiun, kiel, kiam, kial, kie, kien, &#265;u.</p><br>

		<p>-- Jen por vi:</p>
		<div class="tasko">
		<?php $demandoj=array (
			6. => "[6] diris la kuracisto? - Li diris, ke mi estu senzorga, ke mia malsano ne estas tro serioza.",
			7. => "[6] vi resani&#285;os? - Balda&#365;. Eble post kelkaj tagoj.",
			8. => "[6] vi iros unue post la resani&#285;o? - Unue mi iros en bonan restoracion.",
			9. => "[6] vi iros sola? - Ne, amikoj iros kun mi.",
			10. => "[6] helpas vin dum la malsano? - Mia amiko Petro.",
			11. => "[6] estas via patrino? - En sia oficejo; &#349;i devas multe labori tie.",
			12. => "[6] vi ne povas iri piede? - &#264;ar miaj kruroj estas tute senfortaj.",
			13. => "[6] vi ekmalsanis? - Mi ekmalsanis tre subite.",
			14. => "[6] tio okazis? - En mia laborejo.",
			15. => "[6] ili metis en vian laborlokon? - Neniun, do la laboro restas nefarita kaj atendas min.",
			16. => "[6] ili metis neniun en vian lokon? - &#264;ar laboristo por mia laboro estas malofte trovebla."
			);
			plenigEkzerco("U");
		?>
		</div>
		</div> <!-- klarigo -->
<?php include "gerdapiedo.inc.php"; ?>