				<div class="rim" style="float:right">
				<p>
				Téléchargez<br>ce lexique<br>au format pdf :<br> 
				<a href="http://ikurso.esperanto-jeunes.org/doc/LexiqueDLEK-Ikurso.pdf">
				<img src="http://ikurso.esperanto-jeunes.org/bildoj/pdf-dist.png" alt="Lexique - 55 Ko" 
				title="Lexique - 55 Ko" align="bottom" border="0"></a></p>
				</div>
				<p>Ce lexique contient en principe tous les mots nécessaires pour les
				exercices, plus quelques autres &agrave; titre d'information. Attention: les
				mots choisis ici sont ceux qui se traduisent par une racine simple en
				espéranto. Vous y trouverez par exemple <em>bon</em>, mais pas <em>mauvais</em>, car
				<em>malbona</em> est un dérivé de <em>bona</em>. Cherchez donc les contraires, les
				verbes, les noms, etc. ayant un sens apparenté au mot que vous cherchez.</p>
				<p class="note">
				Les chiffres entre parenthèses renvoient &agrave; la leçon où le mot
				est introduit ou expliqué (pas toujours celle où il apparaît la
				première fois). Le premier chiffre fait référence au numéro 
				de la leçon du <b>"Cours en dix leç;ons"</b>, le deuxième chiffre fait 
				référence au numéro de la leçon du <b>"Kurso de Esperanto"</b>.
				</p>

<table class="voca">
<tr>
	<td width="12%" class="eo">&nbsp;</td><td width="20%" class="eo">&nbsp;</td>
	<td width="12%" class="eo">&nbsp;</td><td width="20%" class="eo">&nbsp;</td>
	<td width="12%" class="eo">&nbsp;</td><td width="20%" class="eo">&nbsp;</td>
</tr>
<?
$filename = "vortlisto.txt";
$fd = fopen($filename, "r");
$i=0;
$res="";
while($tab = fgetcsv($fd, 1024, "\\")){
	
	if ($i%3==0){$res.= "<tr>";}
	$res.= "<td class=\"eo\">".$tab[0]." ";
	if (($tab[1].$tab[2])!=""){
		$res.= "<span class=\"numero\"> (";
		if ($tab[1]) {$res.= $tab[1];} else {$res.= "-";}
		$res.= "/";
		if ($tab[2]) {$res.= $tab[2];} else {$res.= "-";}
		$res.= ")</span>";
	}
	$res.= "</td><td class=\"fr\"> ".$tab[3]."</td>\n";
	if ($i%3==2) {$res.= "</tr>\n";}
	$i++;
}
fclose($fd);
if ($metodo=="X") {
	$utf8 = array(
		"&#264;" => "Cx",	"&#284;" => "Gx",	"&#292;" => "Hx",
		"&#308;" => "Jx",	"&#348;" => "Sx",	"&#364;" => "Ux",
		"&#265;" => "cx",	"&#285;" => "gx",	"&#293;" => "hx",
		"&#309;" => "jx",	"&#349;" => "sx",	"&#365;" => "ux"
		);
	foreach($utf8 as $key => $val) {
		$res=str_replace($key,$val,$res);
	}
}
echo $res;

?>
</tr>
</table>