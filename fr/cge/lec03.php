<?php
$titolo="3 (tri)";
$leciono = 3;
$section=isset($_GET["section"])?htmlspecialchars($_GET["section"]):"1";
if (!is_numeric($section)) {
	if ($persono_id=="") {header("Location:../../index.php?erarkodo=24");}
}
include "dlekkapo.inc.php";
?>
<div class="row">
	<article class="col s12 m10 l7 offset-m1 offset-l1">
				
		<section id="leciono-enhavo">
		<?php 
		getTitoloLecionero('CG',$leciono,$section);
		displayWarningSiLecioneroManquante($persono_id,'CG',3,$section);
			if ($section=="1") {
			?>
			<p class="parto">Nous avons vu pas mal de choses dans la 2<sup>e</sup> leçon. Voici un tableau qui
				résume une structure de phrase très courante&nbsp;:</p>
				<div class="container">
					<table class="bordered">
						<tr>
							<td>Sujet<br>Adjectif Nom</td>
							<td>Verbe</td>
							<td>Complément d’objet direct<br>Adjectif Nom</td>
						</tr>
						<tr class="eo">
							<td>____-a   ____-o<br>____-aj  ____-oj</td>
							<td>____-is<br>____-as<br>____-os</td>
							<td>____-an   ____-on<br>____-ajn  ____-ojn</td>
						</tr>
						<tr><td>Mia patrino</td><td>lavas</td><td>mian fraton.</td></tr>
						<tr><td>Niaj fratinoj</td><td>vidis</td><td>viajn instruistojn.</td></tr>
					</table>
				</div>
			<p class="parto">
			Comme les fonctions de sujet, verbe et complément d’objet sont marquées
			sans ambiguïté par la terminaison, on peut fort bien les intervertir sans
			changer le sens de la phrase. Cette relative liberté de l’ordre des mots
			permet de mettre en valeur certains groupes de mots ou de clarifier le
			sens. Toutefois, dans ce cours, nous nous contenterons le plus souvent de
			l’ordre que nous utilisons le plus souvent en français&nbsp;: sujet, verbe, compléments.
			</p>
			
			<div class="row container">
				<div class="col s6">
					<p><span class="eo">La knabino vidis <b>min</b></span>.</p>
					<p><span class="eo"><b>Min</b> vidis la knabino.</span></p>
					<p><span class="eo"><b>Min</b> la knabino vidis.</span></p>
					<p><span class="eo">…</span></p>
				</div>
				<div class="col s6">= La fille m’a vu.</div>
			</div>

			<p>
			Dans la section suivante, nous vous proposons, à titre d’exercice, deux autres exemples illustrant la façon dont
			on peut modifier l’ordre des mots.</p>
	
		<fieldset class="vortoj">
			<legend>VOCABULAIRE À RETENIR</legend>
			<div>
				<?php if ($persono) { ?>
				<p class="eo eta">Ces mots seront automatiquement ajoutés à votre vocabulaire à réviser lorsque vous aurez terminé d'étudier cette section.</p>
				<?php } ?>
			</div>
			<div class="vortlisto row">
				<p class="col s12 m4"><a href="<?php echo $vojo;?>fr/son/vortoj/knabino.mp3" class="sm2_button"></a><span class="eo">knabino</span> : fille</p>
				<p class="col s12 m4"><a href="<?php echo $vojo;?>fr/son/vortoj/patrino.mp3" class="sm2_button"></a><span class="eo">patrino</span> : mère</p>
				<p class="col s12 m4"><a href="<?php echo $vojo;?>fr/son/vortoj/fratino.mp3" class="sm2_button"></a><span class="eo">fratino</span> : sœur</p>
			</div>
		</fieldset>

		<?php 
		} // fin section 
		if ($section=="2") {
		?>
			<?php 
				getEkzercon(9,$persono_id);
			?>

		<?php 
		} // fin section 1
		if ($section=="3") {
		?>
		
		<p class="parto">Voici maintenant un peu de vocabulaire.</p>
		<?php if ($persono) { ?>
		<p >Ces mots seront automatiquement ajoutés à votre vocabulaire à réviser lorsque vous aurez terminé d'étudier cette section.</p>
		<?php } ?>
	
		<fieldset class="vortoj">
			<div class="vortlisto row">
				<div class="col s12 m6">
					<h2>Noms</h2>
					<p><span class="eo"><a href="<?php echo $vojo;?>fr/son/vortoj/horo.mp3" class="sm2_button"></a>horo</span>&nbsp;: heure</p>
					<p><span class="eo"><a href="<?php echo $vojo;?>fr/son/vortoj/jaro.mp3" class="sm2_button"></a>jaro<sup>[1]</sup></span>&nbsp;: année</p>
					<p><span class="eo"><a href="<?php echo $vojo;?>fr/son/vortoj/mateno.mp3" class="sm2_button"></a>mateno</span>&nbsp;: matin</p>
					<p><span class="eo"><a href="<?php echo $vojo;?>fr/son/vortoj/minuto.mp3" class="sm2_button"></a>minuto</span>&nbsp;: minute</p>
					<p><span class="eo"><a href="<?php echo $vojo;?>fr/son/vortoj/semajno.mp3" class="sm2_button"></a>semajno</span>&nbsp;: semaine</p>
					<p><span class="eo"><a href="<?php echo $vojo;?>fr/son/vortoj/nokto.mp3" class="sm2_button"></a>nokto</span>&nbsp;: nuit</p>
					<p><span class="eo"><a href="<?php echo $vojo;?>fr/son/vortoj/tago.mp3" class="sm2_button"></a>tago</span>&nbsp;: jour</p>
					<p><span class="eo"><a href="<?php echo $vojo;?>fr/son/vortoj/vespero.mp3" class="sm2_button"></a>vespero</span>&nbsp;: soir, soirée</p>
				</div>
				<div class="col s12 m6">
					<h2>Adjectifs</h2>
					<p><span class="eo"><a href="<?php echo $vojo;?>fr/son/vortoj/blanka.mp3" class="sm2_button"></a>blanka</span>&nbsp;: blanc</p>
					<p><span class="eo"><a href="<?php echo $vojo;?>fr/son/vortoj/blua.mp3" class="sm2_button"></a>blua</span>&nbsp;: bleu</p>
					<p><span class="eo"><a href="<?php echo $vojo;?>fr/son/vortoj/bruna.mp3" class="sm2_button"></a>bruna</span>&nbsp;: brun (marron)</p>
					<p><span class="eo"><a href="<?php echo $vojo;?>fr/son/vortoj/flava.mp3" class="sm2_button"></a>flava</span>&nbsp;: jaune</p>
					<p><span class="eo"><a href="<?php echo $vojo;?>fr/son/vortoj/griza.mp3" class="sm2_button"></a>griza</span>&nbsp;: gris</p>
					<p><span class="eo"><a href="<?php echo $vojo;?>fr/son/vortoj/nigra.mp3" class="sm2_button"></a>nigra</span>&nbsp;: noir</p>
					<p><span class="eo"><a href="<?php echo $vojo;?>fr/son/vortoj/rugxa.mp3" class="sm2_button"></a>ruĝa</span>&nbsp;: rouge</p>
					<p><span class="eo"><a href="<?php echo $vojo;?>fr/son/vortoj/verda.mp3" class="sm2_button"></a>verda</span>&nbsp;: vert</p>
				</div>
				<div class="col s12 m6">
					<h2>Verbes</h2>
					<p><span class="eo"><a href="<?php echo $vojo;?>fr/son/vortoj/atendi.mp3" class="sm2_button"></a>atendi</span>&nbsp;: attendre</p>
					<p><span class="eo"><a href="<?php echo $vojo;?>fr/son/vortoj/demandi.mp3" class="sm2_button"></a>demandi <sup>[2]</sup></span>&nbsp;: demander</p>
					<p><span class="eo"><a href="<?php echo $vojo;?>fr/son/vortoj/fumi.mp3" class="sm2_button"></a>fumi</span>&nbsp;: fumer</p>
					<p><span class="eo"><a href="<?php echo $vojo;?>fr/son/vortoj/kuri.mp3" class="sm2_button"></a>kuri</span>&nbsp;: courir</p>
					<p><span class="eo"><a href="<?php echo $vojo;?>fr/son/vortoj/peti.mp3" class="sm2_button"></a>peti <sup>[3]</sup></span>&nbsp;: demander</p>
					<p><span class="eo"><a href="<?php echo $vojo;?>fr/son/vortoj/promeni.mp3" class="sm2_button"></a>promeni</span>&nbsp;: se promener</p>
					<p><span class="eo"><a href="<?php echo $vojo;?>fr/son/vortoj/respondi.mp3" class="sm2_button"></a>respondi</span>&nbsp;: répondre</p>
					<p><span class="eo"><a href="<?php echo $vojo;?>fr/son/vortoj/soifi.mp3" class="sm2_button"></a>soifi <sup>[4]</sup></span>&nbsp;: avoir soif</p>
					<p><span class="eo"><a href="<?php echo $vojo;?>fr/son/vortoj/vivi.mp3" class="sm2_button"></a>vivi</span>&nbsp;: vivre</p>
				</div>
				<div class="col s12 m6">
					<h2>Adverbe</h2>
					<p><span class="eo"><a href="<?php echo $vojo;?>fr/son/vortoj/nur.mp3" class="sm2_button"></a>nur</span>&nbsp;: seulement</p>
				</div>
			</div>
		</fieldset>
				
		<div class="notoj">
			<p><span class="eo">[1]</span> Rappelez-vous que le <em><span class="eo">j</span></em> est prononcé comme le <em>y</em> dans yoghourt.</p>
			<p><span class="eo">[2]</span> <em><span class="eo">demandi</span></em> : poser une question.</p>
			<p><span class="eo">[3]</span> <em><span class="eo">peti</span></em> : demander pour obtenir quelque chose.</p>
			<p><span class="eo">[4]</span> <em><span class="eo">soifi</span></em> : bien prononcer le <em>o</em> et le <em>i</em> séparément (<span class="eo">so-<u>i</u>-fi</span>).</p>
		</div>

		<?php 
		} // fin section 1
		if ($section=="4") {
		?>
		
		<p>
		Expression d’une certaine «sagesse populaire» – ce qui n’est pas synonyme
		de vérité absolue –, les proverbes sont surtout de minuscules poèmes avec
		leurs rimes, leurs rythmes et l’originalité de leur syntaxe. Nous en
		introduisons quelques-uns à chaque leçon pour vous familiariser avec leurs
		sonorités.
		</p>
		
		<p><i>Cliquez sur le bouton <a class="sm2_button disabled"></a>pour écouter la phrase&nbsp;: </a></i></p>
		<p><a href="<?php echo $vojo;?>fr/son/frazoj/pv3.mp3" class="sm2_button"></a> <span class="eo">Akvo kura – akvo pura</span><br>
		&emsp;&emsp;De l’eau courante (<i>qui court</i>) [c’est] de l’eau pure (<i>propre</i>)</p>
	
		<?php 
		} // fin section
		if ($section=="5") {
		?>
	
		<p class="parto">
		Les <b>adverbes</b> jouent un peu le même rôle que les adjectifs, mais au
		lieu de préciser les idées exprimées par des noms, ils précisent les idées
		exprimées par des verbes, des adjectifs, d’autres adverbes ou même des
		phrases entières.  Le plus souvent, ils expriment la manière, la cause, le
		temps ou le lieu.
		</p>
		<p>
		En espéranto, les adverbes se terminent généralement par <b>-e</b> (et c’est
		toujours le cas lorsqu’il s’agit d’un adverbe dérivé d’un autre mot). 
		</p>
		<p>
		Avec cette terminaison vous connaissez maintenant la totalité des
		terminaisons qui marquent la catégorie du mot. L’idée fondamentale exprimée
		par la racine d’un mot peut être utilisée de différentes façons grâce à un
		simple changement de terminaison :
		</p>
	
		<div class="vortlisto row">
			<p class="col s6"><span class="eo">sana</span> = sain, en bonne santé</p>
			<p class="col s6"><span class="eo">Li estas sana.</span></p>
			<p class="col s6"><span class="eo">sano</span> = santé</p>
			<p class="col s6"><span class="eo">Li havas bonan sanon.</span></p>
			<p class="col s6"><span class="eo">sani</span> = être en bonne santé</p>
			<p class="col s6"><span class="eo">Li sanas.</span></p>
			<p class="col s6"><span class="eo">sane</span> = sainement</p>
			<p class="col s6"><span class="eo">Li sane vivas</span> (ou : <span class="ekz">li vivas sane</span>).</p>
		</div>
		
		<p class="parto">
		En général l’adverbe précède le mot qu’il précise. Toutefois, quand
		l’adverbe est employé comme complément d’une phrase, il est fréquent qu’il prenne la
		place usuelle des compléments, après le verbe.
		</p>

		<div class="vortlisto row">
			<p class="col s12">Exemples :
			<p class="col s12 m5"><a href="<?php echo $vojo;?>fr/son/frazoj/insektoj-vivas-nokte.mp3" class="sm2_button"></a> <span class="eo">Insektoj vivas <b>nokte</b>.</span></p>
			<p class="col s12 m7">Les insectes vivent <b>la nuit</b>.</p>
			<p class="col s12 m5"><a href="<?php echo $vojo;?>fr/son/frazoj/li-malbone-skribis.mp3" class="sm2_button"></a> <span class="eo"> Li <b>malbone</b> skribis.</span></p>
			<p class="col s12 m7">Il a <b>mal</b> écrit.</p>
			<p class="col s12 m5"><a href="<?php echo $vojo;?>fr/son/frazoj/sxi-seke-respondis.mp3" class="sm2_button"></a><span class="eo"> Ŝi <b>seke</b> respondis.</span></p>
			<p class="col s12 m7">Elle a répondu <b>sèchement</b>.</p>
			<p class="col s12 m5"><a href="<?php echo $vojo;?>fr/son/frazoj/ni-renkontos-lin-promene.mp3" class="sm2_button"></a> <span class="eo">Ni renkontos lin <b>promene</b>.</span></p>
			<p class="col s12 m7">Nous le rencontrerons <b>lors de la promenade</b>.</p>
			<p class="col s12 m5"><a href="<?php echo $vojo;?>fr/son/frazoj/ni-iros-bicikle.mp3" class="sm2_button"></a> <span class="eo">Ni iros <b>bicikle</b>.</span></p>
			<p class="col s12 m7">Nous irons <b>en vélo</b>.</p>			
		</div>
		
		<fieldset class="vortoj">
			<legend>VOCABULAIRE À RETENIR</legend>
			<div>
				<?php if ($persono) { ?>
				<p class="eo eta">Ces mots seront automatiquement ajoutés à votre vocabulaire à réviser lorsque vous aurez terminé d'étudier cette section.</p>
				<?php } ?>
			</div>
			<div class="vortlisto row">
				<p class="col s12 m6"><a href="<?php echo $vojo;?>fr/son/vortoj/sano.mp3" class="sm2_button"></a><span class="eo">sano</span> : santé</p>
				<p class="col s12 m6"><a href="<?php echo $vojo;?>fr/son/vortoj/sane.mp3" class="sm2_button"></a><span class="eo">sane</span> : sainement</p>
				<p class="col s12 m6"><a href="<?php echo $vojo;?>fr/son/vortoj/sani.mp3" class="sm2_button"></a><span class="eo">sani</span> : être en bonne santé</p>
			</div>
		</fieldset>

		<?php 
		} // fin section 1
		if ($section=="6") {
		?>
		
		<p class="parto">
		En espéranto, chaque voyelle (<em>a</em>, <em>e</em>, <em>i</em>, <em>o</em>,
		<em>u</em>) forme une syllabe. Le mot espéranto <span class="eo">sane</span> a donc deux
		syllabes (<em>sa-ne</em>).  Alors qu’en français, le <em>-e</em> final est
		généralement muet (comme, par exemple, dans <em>père</em>), il n’existe rien
		de tel en espéranto.
		</p>
		<p>
		Dans <span class="eo">soifi</span> il y a trois syllabes (<span class="eo">so-i-fi</span>), alors que le
		français <em>soif</em> ne contient qu’une syllabe.
		</p>
		            
		<?php 
		} // fin section
		if ($section=="7") {
		?>
		
			<?php 
				getEkzercon(10,$persono_id);
			?>

		<?php 
		} // fin section
		if ($section=="8") {
		?>

		<p class="parto">Les <b>nombres cardinaux</b> n’ont pas de terminaison spéciale et ils restent
		invariables.
		</p>
		<p>
			<audio controls="controls">Votre navigateur ne supporte pas la lecture du fichier audio.
				<source src="<?php echo $vojo;?>fr/son/nombroj.mp3" type="audio/mp3">
			</audio>
		</p>
		
		<fieldset class="vortoj">
			<div class="vortlisto row">
				<div class="col s6 m3">
					<p>0 : <span class="eo">nul</span></p>
					<p>1 : <span class="eo">unu</span></p>
					<p>2 : <span class="eo">du</span></p>
					<p>3 : <span class="eo">tri</span></p>
					<p>4 : <span class="eo">kvar</span></p>
					<p>5 : <span class="eo">kvin</span></p>
					<p>6 : <span class="eo">ses</span></p>
					<p>7 : <span class="eo">sep</span></p>
					<p>8 : <span class="eo">ok</span></p>
					<p>9 : <span class="eo">naŭ</span></p>
				</div>
				<div class="col s6 m3">
					<p>10 : <span class="eo">dek</span></p>
					<p>11 : <span class="eo">dek unu</span></p>
					<p>12 : <span class="eo">dek du</span></p>
					<p>13 : <span class="eo">dek tri</span></p>
					<p>14 : <span class="eo">dek kvar</span></p>
					<p>15 : <span class="eo">dek kvin</span></p>
					<p></p>
					<p>20 : <span class="eo">dudek</span></p>
					<p>21 : <span class="eo">dudek unu</span></p>
					<p>22 : <span class="eo">dudek du</span></p>
					<p>23 : <span class="eo">dudek tri</span></p>
				</div>
				<div class="col s6 m3">
					<p>30 : <span class="eo">tridek</span></p>
					<p>31 : <span class="eo">tridek unu</span></p>
					<p>32 : <span class="eo">tridek du</span></p>
					<p></p>
					<p>40 : <span class="eo">kvardek</span></p>
					<p>50 : <span class="eo">kvindek</span></p>
					<p>60 : <span class="eo">sesdek</span></p>
					<p>70 : <span class="eo">sepdek</span></p>
					<p>80 : <span class="eo">okdek</span></p>
					<p>90 : <span class="eo">naŭdek</span></p>
					<p>99 : <span class="eo">naŭdek naŭ</span></p>
				</div>
				<div class="col s6 m3">
					<p>100 : <span class="eo">cent</span></p>
					<p>200 : <span class="eo">ducent</span></p>
					<p>300 : <span class="eo">tricent</span></p>
					<p></p>
					<p>1000 : <span class="eo">mil</span></p>
					<p></p>
					<p>2000 : <span class="eo">du mil</span></p>
					<p>3000 : <span class="eo">tri mil</span></p>
				</div>
			</div>
		</fieldset>
		
		<div class="vortlisto row">
			<p class="col s12 l6">749 : <span class="eo">sepcent kvardek naŭ</span></p>
			<p class="col s12 l6">1&nbsp;998 : <span class="eo">mil naŭcent naŭdek ok</span></p>
			<p class="col s12 l6">1&nbsp;515 : <span class="eo">mil kvincent dek kvin</span></p>
			<p class="col s12 l6">2&nbsp;051 : <span class="eo">du mil kvindek unu</span></p>
			<p class="col s12">52&nbsp;354 : <span class="eo">kvindek du mil tricent kvindek kvar</span></p>
			<p class="col s12">76&nbsp;240 : <span class="eo">sepdek ses mil ducent kvardek</span></p>
		</div>

		<p class="rimarko"><strong>REMARQUES</strong> : </p>
		<ul class="klarigo">
			<li>Le <b>a</b> de <span class="eo">naŭ</span> se prononce comme «ow» anglais dans «cow», «how», «now»,
		ou encore «au» en allemand, espagnol, italien...</li>
			<li>Le mot <span class="eo">dek</span> utilisé pour le chiffre des dizaines se colle au nombre qui le multiplie. Par exemple on écrit en un seul mot <span class="eo">dudek</span> (= 20, c’est-à-dire 2 fois 10) ou <span class="eo">sesdek</span> (= 60, c’est-à-dire 6 fois 10).</li>
			<li>De la même manière, le mot <span class="eo">cent</span> utilisé pour le chiffre des centaines se colle au nombre qui le multiplie. Par exemple on écrit en un seul mot <span class="eo">tricent</span> (= 300, c’est-à-dire 3 fois 100).</li>
		</ul>
		
		<a id="ordinaux" class="scrollspy"></a>
		<p class="parto">Les <b>nombres ordinaux</b> se forment par adjonction de la terminaison
		<em>-a</em> d’adjectif aux nombres cardinaux. Comme tous les adjectifs, ils
		peuvent prendre la marque du pluriel <b>-j</b> et celle du complément <b>-n</b>.
		</p>

		<fieldset class="vortoj">
			<div class="vortlisto row">
				<div class="col s12 m4">
					<p><span class="eo">unua</span>&nbsp;: premier</p>
					<p><span class="eo">dua</span>&nbsp;: deuxième</p>
					<p><span class="eo">tria</span>&nbsp;: troisième</p>
					<p><span class="eo">kvara</span>&nbsp;: quatrième</p>
				</div>
				<div class="col s12 m4">
					<p><span class="eo">dudeka</span>&nbsp;: 20<sup>e</sup></p>
					<p><span class="eo">sepdek-unua</span>&nbsp;: 71<sup>e</sup></p>
					<p><span class="eo">centa</span>&nbsp;: 100<sup>e</sup></p>
					<p><span class="eo">dek-kvara</span>&nbsp;: 14<sup>e</sup></p>
				</div>
				<div class="col s12 m4">
					<p><span class="eo">unue</span>&nbsp;: premièrement</p>
					<p><span class="eo">due</span>&nbsp;: deuxièmement</p>
					<p><span class="eo">trie</span>&nbsp;: troisièmement</p>
					<p><span class="eo">dek-kvare</span>&nbsp;: quatorzièmement</p>
				</div>
			</div>
		</fieldset>

		<p class="rimarko"><strong>REMARQUES</strong> : </p>
		<ul class="klarigo">
			<li>Dans les nombres ordinaux, on sépare généralement les mots par des tirets.</li>
</
			<li>On peut aussi utiliser les chiffres pour écrire les nombres ordinaux. On fait alors généralement suivre les chiffres de <b>-a</b>. Par exemple&nbsp;: <span class="eo">1-a</span>, <span class="eo">20-a</span>, <span class="eo">71-a</span>.</li>
		</ul>
			
		<p class="parto">Pour poser une question et demander <em>combien de…</em>, on utilise l’interrogatif <b>kiom da</b>.</p>

		<p>Exemples :</p>
		<div class="row vortlisto">
			<p class="col s12 m6"><a href="<?php echo $vojo;?>fr/son/frazoj/la-unuaj-knaboj.mp3" class="sm2_button"></a>
				<span class="eo">La <b>unuaj</b> knaboj venas.</span></p>
			<p class="col s12 m6">Les <b>premiers</b> garçons arrivent.</p>

			<p class="col s12 m6"><a href="<?php echo $vojo;?>fr/son/frazoj/kiom-da-plumoj.mp3" class="sm2_button"></a>
				<span class="eo"><b>Kiom da</b> plumoj vi petis?<br>&emsp;&emsp;– Mi petis ses plumojn.</span></p>			
			<p class="col s12 m6"><b>Combien de</b> plumes as-tu demandées&nbsp;?<br>– J’ai demandé six plumes.</p>
			
			<p class="col s12 m6"><a href="<?php echo $vojo;?>fr/son/frazoj/kiom-da-sandvicxoj.mp3" class="sm2_button"></a>
				<span class="eo"><b>Kiom da</b> sandviĉoj vi jam manĝis?<br>&emsp;&emsp;– Ni jam manĝis tri.</span></p>
			<p class="col s12 m6"><b>Combien de</b> sandwichs avez-vous déjà mangés&nbsp;?<br>– Nous [en] avons déjà mangé trois.</p>
			
			<p class="col s12 m6"><a href="<?php echo $vojo;?>fr/son/frazoj/kiom-da-infanoj.mp3" class="sm2_button"></a>
				<span class="eo"><b>Kiom da</b> infanoj estos?<br>&emsp;&emsp;– Estos dek du infanoj.</span></p>
			<p class="col s12 m6"><b>Combien</b> y aura-t-il <b>d’</b>enfants&nbsp;?<br>– Il y aura douze enfants.</p>
		</div>
		
		<p class="rimarko"><strong>REMARQUE</strong> : N’employez <b>jamais</b> l’accusatif après <span class="eo">kiom da</span>.</p>

		<h3>De nouveaux corrélatifs</h3>
		<p>
			Dans la leçon précédente, nous vous avions présenté le début du tableau des corrélatifs, dans lequel nous avions rangé quelques corrélatifs commençant par KI- (interrogatifs) et NENI- (négatifs). Nous pouvons le compléter avec <span class="eo">kiom</span>, le corrélatif interrogatif de quantité, et ainsi ajouter la colonne des corrélatifs terminés par <span class="eo"><b>-om</b></span>&nbsp;:
		</p>
		<div class="korelativoj">
			<table class="highlight">
				<thead>
					<tr>
						<th> </th>
						<th>Individualité<br /><span class="eo">-U</span></th>
						<th>Chose<br /><span class="eo">-O</span></th>
						<th>Lieu<br /><span class="eo">-E</span></th>
						<th>Temps<br /><span class="eo">-AM</span></th>
						<th>Manière<br /><span class="eo">-EL</span></th>
						<th>Quantité<br /><span class="eo">-OM</span></th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th>Interrogatif<br /><span class="eo">KI-</span></th>
						<td><span class="eo">kiu</span><br />qui&nbsp;? lequel&nbsp;?</td>
						<td><span class="eo">kio</span><br />que&nbsp;? quoi&nbsp;?</td>
						<td><span class="eo">kie</span><br />où&nbsp;?</td>
						<td><span class="eo">kiam</span><br />quand&nbsp;?</td>
						<td><span class="eo">kiel</span><br />comment&nbsp;?</td>
						<td><span class="eo">kiom</span><br />combien&nbsp;?</td>
					</tr>
					<tr>
						<th>Négatif<br /><span class="eo">NENI-</span></th>
						<td><span class="eo">neniu</span><br />personne</td>
						<td><span class="eo">nenio</span><br />rien</td>
						<td><span class="eo">nenie</span><br />nulle&nbsp;part</td>
						<td><span class="eo">neniam</span><br />jamais</td>
						<td><span class="eo">neniel</span><br />impossible</td>
						<td><span class="eo">neniom</span><br />aucun</td>
					</tr>
				</tbody>
			</table>
		</div>						
		<?php
		} // fin section
		if ($section=="9") {
		?>

			<?php 
				getEkzercon(11,$persono_id);
			?>

		<?php 
		} // fin section
		if ($section=="10") {
		?>
		<p class="parto">Nous avons vu de nombreux exemples de <b>verbes transitifs</b> :
		<span class="eo">vidi</span>, <span class="eo">trinki</span>, <span class="eo">skribi</span>...
		<p>Il s'agit des verbes qui s'utilisent avec un complément d'objet :</p>

			<div class="container">
				<p><span class="eo">Mi vidas <b>mian patron</b>.</span>&nbsp;: Je vois mon père.</p>
				<p><span class="eo">Mia patro trinkas <b>kafon</b>.</span>&nbsp;: Mon père boit du café.</p>
				<p><span class="eo">Vi skribas <b>libron</b>.</span>&nbsp;: Tu écris un livre.</p>
			</div>

		</p>
		<p class="parto">
		En revanche, on appelle <b>verbe intransitif</b> un verbe qui n’exprime pas une action
		venant d’un sujet vers un complément d’objet&nbsp;; parfois un tel verbe décrit
		simplement l’état du sujet. Ex.: <em>vivi</em>, <em>promeni</em>, <em>kuri</em>,
		<em>esti</em>, <em>sani</em>...
		</p>
		<p>
		Quand un verbe intransitif est suivi d’un adjectif ou d’un nom, ce dernier
		n’est pas un complément d’objet direct mais un attribut qui décrit le
		sujet ou une éphitète détachées (2<sup>e</sup> exemple ci-dessous). La terminaison <b>-n</b> de l’accusatif <b>n’est donc jamais
		employée</b> dans ce cas.
		</p>
		<div class="container">
			<p><span class="eo">Li estas sana.</span>&nbsp;: Il est en bonne santé.</p>
			<p><span class="eo">Li promenas soifa.</span>&nbsp;: Il se promène assoiffé.</p>
			<p><span class="eo">Li estas instruisto.</span>&nbsp;: Il est instituteur.</p>
			<p><span class="eo">Ŝia frato estas bela knabo.</span>&nbsp;: Son frère est (un) beau garçon.</p>
		</div>

		<p>À noter que certains verbes intransitifs n’ont pas de sujet du tout. Par exemple :</p>
			<div class="container">
				<p><span class="eo">Pluvas.</span>&nbsp;: Il pleut.</p>
				<p><span class="eo">Sunas.</span>&nbsp;: Il fait beau, il y a du soleil.</p>
			</div>

			<p>Leur équivalent en français utilise le sujet <b>il</b> qui ne se traduit pas en espéranto.</p>
			

		<?php 
		} // fin section
		if ($section=="11") {
		?>
		
			<?php 
				getEkzercon(12,$persono_id);
			?>

		<?php 
		} // fin section
		if ($section=="12") {
		?>
		<p class="parto"><b>Kio</b> permet de demander ce qu’est quelque chose. On peut aussi l’utiliser pour interroger ce qu’est une personne, par exemple ce qu’elle fait dans la vie, quelle est sa position sociale, etc. Il se traduit souvent par <em>que, quoi</em>.</p>
		</p>
		<p>Le pronom <b>tio</b> permet de reprendre ce qui est désigné dans la question. Il se traduit souvent par <em>ce</em>, <em>c’</em> (comme dans <em>c’est</em>), <em>cela</em>, <em>ça</em>.</p>
		
		<p><b>REMARQUE</b> : Si vous souhaitez interroger l’identité de la personne, savoir quel est son nom, vous utilisez le pronom interrogatif <b>kiu</b> que vous avez déjà vu dans la leçon&nbsp;1.</p>

		<p>Exemples :</p>
		<div class="row">
			<p class="col s5 m3"><img class="responsive-img" src="<?=$vojo?>fr/cge/bildoj/img-02-01.jpg" alt="une tasse de café chaud"></p>
			<p class="col s7 m9"><span class="eo"><b>Kio</b> estas tio?<br>– <b>Tio</b> estas kafo.</span></p>
		</div>
		<div class="row">
			<p class="col s5 m3"><img class="responsive-img" src="<?=$vojo?>fr/cge/bildoj/img-02-02.jpg" alt="un panier rempli de baguettes de pain"></p>
			<p class="col s7 m9"><span class="eo">Kaj <b>tio</b>?<br>– <b>Tio</b> estas pano.</span></p>
		</div>
		<div class="row">
			<p class="col s5 m3"><img class="responsive-img" src="<?=$vojo?>fr/cge/bildoj/allan.jpg" alt="Allan, étudiant brésilien."></p>
			<div class="col s6 m9 row">
				<p class="col s12 m6"><span class="eo"><b>Kio</b> estas la viro?<br>– Li estas studento.<br>– Li estas Brazilano.</span></p> 
				<p class="col s12 m6"><span class="eo"><b>Kiu</b> estas la viro?<br>– Li estas Allan.</span></p> 
			</div>
		</div>
		
		<p class="parto">Lorsque <b>kio</b> est complément d’objet direct, il prend la terminaison <b>n</b> de l’accusatif.</p>
		<p>Exemple :</p>
		<div class="row">
			<p class="col s6 m4 offset-m1"><span class="eo">Kio<b>n</b> vi vidas?</span></p><p class="col s6 m7">Que vois-tu&nbsp;?</p>
			<p class="col s6 m4 offset-m1"><span class="eo">– Mi vidas birdo<b>n</b>.</span></p><p class="col s6 m7">– Je vois un oiseau.</p>
		</div>
		
		<p class="parto">Comme <b>kio</b> se réfère à quelque chose d’indéfini, il ne prend <b>jamais</b> la marque du pluriel.
		<br />De même, <b>kio</b> n’est jamais suivi par un nom en -o.</p>
		<p>Exemples :</p>
		<div class="row">
			<p class="col s6 m4 offset-m1"><span class="eo">Ki<b>o</b> estas tio?</span></p><p class="col s6 m7">Qu’est ce que c’est&nbsp;?</p>
			<p class="col s6 m4 offset-m1"><span class="eo">Ki<b>u</b> libr<b>o</b> estas via&nbsp;?</span></p><p class="col s6 m7">Quel livre est le tien&nbsp;?</p>
		</div>

		<h3>Plus aucun corrélatif ne vous échappe&nbsp;!</h3>
		<p>
		Vous avez maintenant l’habitude de ce tableau&nbsp;: nous pouvons y ajouter la ligne des démonstratifs, les corrélatifs commençant par <span class="eo"><b>TI</b>-</span>, tel que <span class="eo">tio</span>, que vous venez de voir. Complétons alors ce tableau&nbsp;:
		</p>
		<div class="korelativoj">
			<table class="highlight">
				<thead>
					<tr>
						<th> </th>
						<th>Individualité<br /><span class="eo">-U</span></th>
						<th>Chose<br /><span class="eo">-O</span></th>
						<th>Lieu<br /><span class="eo">-E</span></th>
						<th>Temps<br /><span class="eo">-AM</span></th>
						<th>Manière<br /><span class="eo">-EL</span></th>
						<th>Quantité<br /><span class="eo">-OM</span></th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th>Interrogatif<br /><span class="eo">KI-</span></th>
						<td><span class="eo">kiu</span><br />qui&nbsp;? lequel&nbsp;?</td>
						<td><span class="eo">kio</span><br />que&nbsp;? quoi&nbsp;?</td>
						<td><span class="eo">kie</span><br />où&nbsp;?</td>
						<td><span class="eo">kiam</span><br />quand&nbsp;?</td>
						<td><span class="eo">kiel</span><br />comment&nbsp;?</td>
						<td><span class="eo">kiom</span><br />combien&nbsp;?</td>
					</tr>
					<tr>
						<th>Négatif<br /><span class="eo">NENI-</span></th>
						<td><span class="eo">neniu</span><br />personne</td>
						<td><span class="eo">nenio</span><br />rien</td>
						<td><span class="eo">nenie</span><br />nulle&nbsp;part</td>
						<td><span class="eo">neniam</span><br />jamais</td>
						<td><span class="eo">neniel</span><br />impossible</td>
						<td><span class="eo">neniom</span><br />aucun</td>
					</tr>
					<tr>
						<th>Démonstratif<br /><span class="eo">TI-</span></th>
						<td><span class="eo">tiu</span><br />celui-là,<br />celle-là</td>
						<td><span class="eo">tio</span><br />cela</td>
						<td><span class="eo">tie</span><br />là, là-bas</td>
						<td><span class="eo">tiam</span><br />à ce moment</td>
						<td><span class="eo">tiel</span><br />ainsi</td>
						<td><span class="eo">tiom</span><br />autant&nbsp;de</td>
					</tr>
				</tbody>
			</table>
		<?php 
		} // fin section
		if ($section=="13") {
		?>
		<div class="row">
			<p class="col s6 m3 center-align"><img class="responsive-img" src="<?=$vojo?>fr/cge/bildoj/varsovio.jpg" alt="Une carte de la Pologne avec la ville de Varsovie"><br>-1-</p>
			<p class="col s6 m3 center-align"><img class="responsive-img" src="<?=$vojo?>fr/cge/bildoj/prof.jpg" alt="Un professeur devant un tableau présente la leçon."><br>-2-</p>
			<p class="col s6 m3 center-align"><img class="responsive-img" src="<?=$vojo?>fr/cge/bildoj/insekto.jpg" alt="Une personne prend une photo d'un insecte"><br>-3-</span></p>
			<p class="col s6 m3 center-align"><img class="responsive-img" src="<?=$vojo?>fr/cge/bildoj/zamenhof.jpg" alt="Une photo en noir et blanc du créateur de l'espéranto : Louis Lazare Zamenhof"><br>-4-</p>
		</div>
		
			<?php 
				getEkzercon(13,$persono_id);
			?>
		
		<p>Crédits photos :</p>
		<p class="creditphoto">1. Carte de le Pologne. <a href="https://commons.wikimedia.org/wiki/File%3ARelief_Map_of_Poland.png">By derivative work Виктор_В [CC BY-SA 3.0 (http://creativecommons.org/licenses/by-sa/3.0)], via Wikimedia Commons</a></p>
		<p class="creditphoto">2. <a href="https://commons.wikimedia.org/wiki/File%3ATeaching.png">By uploaded by Xiaphias (USDA Forestry Service website) [Public domain], via Wikimedia Commons</a></p>
		<p class="creditphoto">3. <em>E. Richard, 2016</em></p>
		<p class="creditphoto">4. L. L. Zamenhof <a href="https://commons.wikimedia.org/wiki/File%3A1908-kl-t-zamenhof.jpg">[Public domain], via Wikimedia Commons</a></p> 
		
		<?php 
		} // fin section
		if ($section=="14") {
		?>
			<p>Résumons-nous.</p>
			<p>Vous avez maintenant appris à former toutes sortes de
			compléments grâce à la forme d’adverbe en <b>-e</b>. De plus, vous savez
			compter de 1 à 999 999 et pour cela il ne vous a fallu apprendre que...
			12 mots nouveaux. Qui dit mieux&nbsp;?
			</p>
		<?php 
			recapitulatif_lecon_avant_envoi('CG',$leciono,$persono_id);
		} // fin section 
		?>	
		</section>

		<section id="leciono-fino">
			<div id="marko" class="right-align">
				<?php getBoutonFinSection('CG',$leciono,$section,$persono_id); ?>
				<a id="farita" class="btn-floating btn-large light-blue darken-1 hide"><i class="material-icons">done_all</i></a>
			</div>
			<div class="ligoj">
				<?php getLecioneroAntauxa('CG',$leciono,$section); ?>
				<?php getLecioneroVenonta('CG',$leciono,$section); ?>
			</div>
		</section>

	</article>
			
	<aside class="col s12 m10 l3 offset-m1 push-l1">

		<?php
			// lien vers la révision du vocabulaire
			getLigiloAlMemorilo($persono_id);
		?>
		<ul class="collapsible" data-collapsible="expandable">
			<?php 
			// On affiche le sommaire de la lecon
			getEnhavtabelo('CG',$leciono); 
			?>
		</ul>	

		<?php
		pubAndroid();
		pubFacebook();
		?>
	</aside>
</div>
<?php include "dlekpiedo.inc.php"; ?>
