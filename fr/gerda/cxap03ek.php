<? 
$titolo="3 (tri)";
include "gerdakapo.inc.php"; 
?>
<div class="klarigo">
			<h3>Demandoj</h3>
			<input type="hidden" name="013_cxap03.0" value="Demandoj">
			<div class="tasko">
			<? $demandoj=array (
				1 => "Kiuj aspektas kiel spionoj? (Linda kaj Tom / Linda kaj Bob / Bob kaj Tom / Gerda kaj la blondulo)",
				2 => "&#264;u Bob salutas ilin tuj? (jes /ne)",
				3 => "&#264;u Linda kaj Tom permesas, ke Bob sidu &#265;e ilia tablo? (jes / ne)",
				4 => "Kiu ne volas esti maldiskreta? (Bob / Tom / Linda / Gerda / la blondulo)",
				5 => "Kio estas sur la viza&#285;o de Linda? (bela deklaro / bona tago / mistera esprimo / io pli grava)"
				);
				ekzerco("U", 2);
			?>
			</div>

			<h3>Ekzerco</h3>
			<input type="hidden" name="013_cxap03.1" value="Formu frazojn.">
			<p>Formu frazojn.</p>
			<p><em>{ -as aspekt- &#265;u kiel la -o -o student- ul- ? } ---> &#264;u la ulo aspektas kiel studento?</em></p>
			<div class="tasko">
			<? $demandoj=array (
				6 => "{ -as -bon- mal- ne -o pardon- -ul- }",
				7 => "{ -e -is mi post- re- -ven- }",
				8 => "{ -a- al -as -in- -j -j jun- knab- -o -o- parol- vir- }"
			);
			ekzerco("U", 1);
			?>
			</div>
		</div> <!-- klarigo -->
<? include "gerdapiedo.inc.php"; ?>