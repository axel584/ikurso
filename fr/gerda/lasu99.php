<?php 
$titolo="";
include "gerdakapo.inc.php";
?>
<table class="klarigo">
	<tr>
		<td>
			<h3 class="kapo"><a name="enhavo">Table des mati&egrave;res / Enhavo</a></h3>

			<p>Les textes de ce recueil utilisent le codage Unicode (UTF8) permettant
			de restituer correctement les lettres accentu&eacute;es de l'esp&eacute;ranto.
			Si votre syst&egrave;me ne permet pas de restituer correctement ces caract&egrave;res, 
			vous pouvez visualiser ces textes avec la convetion qui consiste &agrave; 
			remplacer l'accent des lettres accentu&eacute;es par un "x"
			qui suit la lettre en question. Nous avons donc </p>
			<center>
			<p>
			<tt>&#264;, &#284;, &#292;, &#308;, &#348;, &#365;, &#265;, &#285;, &#293;, &#309;, &#349;, &#365;</tt> au lieu de&nbsp;:</p>
			<img src="../cge/&#265;apel.jpg" align="top" />
			</center>

			<p>Si vous voulez installer tous les textes sur votre disque vous pouvez tout
			t&eacute;l&eacute;charger d'un coup&nbsp;: <a href="lasu.zip">cliquez ici</a> pour
			r&eacute;cup&eacute;rer le fichier compress&eacute; par PKZIP (200 Ko environ).</p>
			<ul>
			<?php
				$tlasu = array (
					"01" => "&nbsp;&nbsp;1.&nbsp;&nbsp;Izabela",
					"02" => "&nbsp;&nbsp;2.&nbsp;&nbsp;Stranga strangulo",
					"03" => "&nbsp;&nbsp;3.&nbsp;&nbsp;Amdeklaro",
					"04" => "&nbsp;&nbsp;4.&nbsp;&nbsp;Lingvistiko",
					"05" => "&nbsp;&nbsp;5.&nbsp;&nbsp;&#264;u vere vi ne volas labori?",
					"06" => "&nbsp;&nbsp;6.&nbsp;&nbsp;La ulo, kiu ne plu pensas",
					"07" => "&nbsp;&nbsp;7.&nbsp;&nbsp;Oni venis el alia mondo",
					"08" => "&nbsp;&nbsp;8.&nbsp;&nbsp;Iru kiel vi volas",
					"09" => "&nbsp;&nbsp;9.&nbsp;&nbsp;Zorgi pri zorgado",
					"10" => "10.&nbsp;&nbsp;La fortegulo",
					"11" => "11.&nbsp;&nbsp;Malkontentas la mekanikisto",
					"12" => "12.&nbsp;&nbsp;Jen vi ree trinkas!",
					"13" => "13.&nbsp;&nbsp;Revenis amo, feli&#265;u ni!",
					"14" => "14a.&nbsp;Silentu, enaj vo&#265;oj",
					"14b" => "14b.&nbsp;Timiga diro",
					"15" => "15a.&nbsp;Mistero en papervendejo",
					"15b" => "15b.&nbsp;Du raportoj pri vendado",
					"16" => "16a.&nbsp;La vesperfu&#349;ulo",
					"16b" => "16b.&nbsp;&#264;u mal&#285;ojon memori, a&#365; imagi feli&#265;on ?",
					"17" => "17a.&nbsp;Edzokaptaj inoj",
					"17b" => "17b.&nbsp;Instruista amo",
					"18" => "18a.&nbsp;La letersoifa patrino",
					"18b" => "18b.&nbsp;Mi atendas gravan leteron",
					"19" => "19.&nbsp;&nbsp;&nbsp;Dormu trankvile!",
					"20" => "20a.&nbsp; La fakulo-instruisto venis de malproksime",
					"20b" => "20b.&nbsp;Troa scivolo kondukas morten",
					"21" => "21a.&nbsp; Ho, bela naski&#285;urbo!",
					"21b" => "21b.&nbsp;Adia&#365;, lando amata!",
					"22" => "22a.&nbsp;Ek al fora insulo!",
					"22b" => "22b.&nbsp;Skribas malliberulo",
					"23" => "23a.&nbsp;Sekreta servo",
					"23b" => "23b.&nbsp;Ameriko, jen mi venas",
					"24" => "24a.&nbsp;Literaturo amindas, sed tamen...",
					"24b" => "24b.&nbsp;La &#285;ojoj de petveturado",
					"25" => "25.&nbsp;&nbsp;&nbsp;La tri plendoj de S-ro Kursano"
				); 
				if ($metodo=="X") {
					$utf8 = array(
						"&#264;" => "&#264;",	"&#284;" => "&#284;",	"&#292;" => "&#292;",
						"&#308;" => "&#308;",	"&#348;" => "&#348;",	"&#364;" => "&#365;",
						"&#265;" => "&#265;",	"&#285;" => "&#285;",	"&#293;" => "&#293;",
						"&#309;" => "&#309;",	"&#349;" => "&#349;",	"&#365;" => "&#365;"
						);
					foreach ($tlasu as $numlasu => $titlasu){
						foreach($utf8 as $key => $val) {
							$titlasu=str_replace($key,$val,$titlasu);
							$tlasu[$numlasu]=$titlasu;
						}
					}
				}
				foreach ($tlasu as $key => $val) {
					echo "<li><a href='lasu".$key.".php'>".$val."</a><li>\n";
				}
			?>
			</ul>
</div>
<?php include "gerdapiedo.inc.php"; ?>