<?php
$titolo="1 (unu)";
$leciono = 1;
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
			getTitoloLecionero('CG',1,$section);
			displayWarningSiLecioneroManquante($persono_id,'CG',1,$section);
			
			if ($section=="1") {
			?>

			<p>Avant que vous ne commenciez cette première leçon, nous vous invitons à lire le <a href="intro.php?temo=intro">
			préambule</a>, qui vous donnera toutes les informations utiles sur la manière de suivre ce cours.</p>
		
			<p class="parto">En espéranto les mots s’écrivent phonétiquement, c’est-à-dire qu’ils
			s’écrivent comme ils se prononcent (et <i>vice versa</i>).</p>

			<div class="card-panel blue lighten-5 center">
				Souvenez-vous bien de cette règle sans exception&nbsp;: <b>une lettre = un son</b>.
			</div>

			<p class="parto">L’<b>alphabet</b> espéranto comporte 28 lettres&nbsp;:</p>
			<div class="container row">
					<p class="col s12 row" style="font-size: 1.5em"><span class="col s1">&nbsp;A&nbsp;</span><span class="col s1">&nbsp;B&nbsp;</span><span class="col s1">&nbsp;C&nbsp;</span><span class="col s1">&nbsp;Ĉ&nbsp;</span><span class="col s1">&nbsp;D&nbsp;</span><span class="col s1">&nbsp;E&nbsp;</span><span class="col s1">&nbsp;F</span></p>
					<p class="col s12 row" style="font-size: 1.5em"><span class="col s1">&nbsp;G&nbsp;</span><span class="col s1">&nbsp;Ĝ&nbsp;</span><span class="col s1">&nbsp;H&nbsp;</span><span class="col s1">&nbsp;Ĥ&nbsp;</span><span class="col s1">&nbsp;I&nbsp;</span><span class="col s1">&nbsp;J&nbsp;</span><span class="col s1">&nbsp;Ĵ</span></p>
					<p class="col s12 row" style="font-size: 1.5em"><span class="col s1">&nbsp;K&nbsp;</span><span class="col s1">&nbsp;L&nbsp;</span><span class="col s1">&nbsp;M&nbsp;</span><span class="col s1">&nbsp;N&nbsp;</span><span class="col s1">&nbsp;O&nbsp;</span><span class="col s1">&nbsp;P&nbsp;</span><span class="col s1">&nbsp;R</span></p>
					<p class="col s12 row" style="font-size: 1.5em"><span class="col s1">&nbsp;S&nbsp;</span><span class="col s1">&nbsp;Ŝ&nbsp;</span><span class="col s1">&nbsp;T&nbsp;</span><span class="col s1">&nbsp;U&nbsp;</span><span class="col s1">&nbsp;Ŭ&nbsp;</span><span class="col s1">&nbsp;V&nbsp;</span><span class="col s1">&nbsp;Z</span></p>
			</div>
			
			<p>
			Les lettres <b>q</b>, <b>w</b>, <b>x</b> et <b>y</b> n’existent pas en
			espéranto mais on y trouve six lettres qui n’existent pas en français&nbsp;:
			<span class="eo">ĉ</span>, <span class="eo">ĝ</span>, <span class="eo">ĥ</span>, <span class="eo">ĵ</span>, <span class="eo">ŝ</span>, <span class="eo">ŭ</span> (à remarquer qu’elles ont toutes un accent circonflexe sauf le <span class="eo">ŭ</span> dont
			l’accent est en fait un demi-cercle).</p>

			<p>Les lettres suivantes ont une prononciation différente de celle du
			français&nbsp;:</p>
			<div class="vortlisto row">
				<div class="col s12 m6">
					<p><span class="eo">c</span>&nbsp;: ts (tsar)</p>
					<p><span class="eo">ĉ</span>&nbsp;: tch (Tchèque)</p>
					<p><span class="eo">e</span>&nbsp;: entre é et è</p>
					<p><span class="eo">g</span>&nbsp;: g (gant)</p>
					<p><span class="eo">ĝ</span>&nbsp;: dj (Djibouti)</p>
					<p><span class="eo">h</span>&nbsp;: h (have en anglais)</p>
					<p><span class="eo">ĥ</span>&nbsp;: hr (Juan en espagnol)</p>
					<p><span class="eo">j</span>&nbsp;: y (yogourt)</p>
				</div>
				<div class="col s12 m6">
					<p><span class="eo">ĵ</span>&nbsp;: j (journal)</p>
					<p><span class="eo">o</span>&nbsp;: o (bol)</p>
					<p><span class="eo">r</span>&nbsp;: de préférence roulé (espagnol)</p>
					<p><span class="eo">s</span>&nbsp;: ss (santé, suisse)</p>
					<p><span class="eo">ŝ</span>&nbsp;: ch (chaud)</p>
					<p><span class="eo">u</span>&nbsp;: ou (tout)</p>
					<p><span class="eo">ŭ</span>&nbsp;: w (wapiti), ou bref (oui, waouh&nbsp;!)</p>
				</div>
			</div>

			<p>Les autres lettres de l’espéranto (<span class="eo">a</span>, <span class="eo">b</span>, <span class="eo">d</span>, 
				<span class="eo">f</span>, <span class="eo">i</span>, <span class="eo">k</span>, <span class="eo">l</span>, 
				<span class="eo">m</span>, <span class="eo">n</span>, <span class="eo">p</span>, <span class="eo">t</span>, 
				<span class="eo">v</span>, <span class="eo">z</span>) se prononcent comme en français. 
			<p>Chaque voyelle, <span class="eo">a</span>, <span class="eo">e</span>, <span class="eo">i</span>, 
				<span class="eo">o</span>, <span class="eo">u</span>, forme
			avec les consonnes voisines une syllabe séparée. Par contre, <span class="eo">j</span> et
			<span class="eo">ŭ</span>, qui sont parfois appelées <i>semi-voyelles</i>, sont des
			consonnes normales en espéranto, et font donc partie de la syllabe définie
			par une voyelle voisine. Vous trouverez des exemples plus tard dans les
			leçons à venir et nous reviendrons plus en détail sur la prononciation dans
			la quatrième leçon.</p>
			
						<p class="parto">Quand on a besoin d’épeler un mot en espéranto on ne dit pas <i>a</i>,
			<i>bé</i>, <i>cé</i>,… <i>ache</i>,… <i>zèd</i> comme en français mais
			<span class="eo">a</span>, <span class="eo">bo</span>, <span class="eo">co</span>, <span class="eo">do</span>, <span class="eo">e</span>, etc., c’est-à-dire que le nom des voyelles correspond à leur son et que le nom des consonnes se
			forme en leur ajoutant la terminaison <span class="eo">-o</span>.</p>
	
			<p>Exemples :</p>
			<div class="container">
				<p><span class="eo">griza</span>&nbsp;: go, ro, i, zo, a</p>
				<p><span class="eo">ruĝa</span>&nbsp;: ro, u, ĝo, a</p>
			</div>
	
			<p class="rimarko"><strong>REMARQUE</strong> : 
				Il n’y a que très peu de racines en espéranto qui ont une consonne
				double. Un exemple est <span class="eo">Finno</span> (finnois). Comme chaque lettre se
				prononce, on dit <span class="eo"><u>fin</u>-no</span>. Certains mots composés peuvent avoir
				une consonne double, par exemple <span class="eo">Pollando</span> (Pologne) de <span class="eo">Polo</span>,
				<span class="eo">lando</span>, et on prononce <span class="eo">Pol-<u>lan</u>-do</span>.
			</p>

			<?php 
			} // fin section 1
			if ($section=="2") {
			?>
			<p class="parto">Les <b>noms communs</b> et les <b>noms propres</b> assimilés finissent
			toujours par <b>-o</b>.</p>
			<p class="parto">Les <b>verbes à l’infinitif</b> finissent toujours par <b>-i</b>.</p>
			<p class="parto">Les <b>adjectifs</b> finissent toujours par <b>-a</b> et se placent
			généralement avant le nom qu’ils qualifient.</p>
			<p>Exemples&nbsp;:</p>
			
			<div class="row">
				<p class="col s6"><span class="eo">a<u>mi</u>ko</span>&nbsp;: un ami</p>
				<p class="col s6"><span class="eo">a<u>mi</u>ka</span>&nbsp;: amical(e)</p>
				<p class="col s6"><span class="eo"><u>no</u>va a<u>mi</u>ko</span>&nbsp;: un nouvel ami</p>
				<p class="col s6"><span class="eo"><u>es</u>ti</span>&nbsp;: être</p>
				<p class="col s6"><span class="eo"><u>sa</u>na <u>kna</u>bo</span>&nbsp;: un garçon en bonne santé</p>
			</div>
			
			<p class="rimarko"><strong>REMARQUE</strong>&nbsp;: Dans cet exemple, nous avons utilisé le soulignement pour indiquer que
			l’avant-dernière syllabe porte l’accent tonique, c’est-à-dire qu’on la
			prononce plus fort que les autres syllabes. En français, l’accent tonique
			est sur la dernière syllabe, aussi, pour prononcer correctement
			<span class="eo">a<u>mi</u>ko</span>, il vous suffit de prononcer d’abord le mot français
			<span class="eo">a<u>mi</u></span> puis de lui ajouter <span class="eo">ko</span>. Entraînez-vous avec les mots de
			vocabulaire de la page suivante.</p>
			

			<fieldset class="vortoj">
				<legend>VOCABULAIRE</legend>
				<div>
					<?php if ($persono) { ?>
					<p class="eo eta">Ces mots seront automatiquement ajoutés à votre vocabulaire à réviser lorsque vous aurez terminé d'étudier cette section. Le nombre de mots à réviser sera indiqué sur le bouton affiché au-dessus du sommaire.</p>
					<?php } ?>
				</div>
				<div class="vortlisto row">
					<p class="col s12 m4"><span class="eo">amiko</span>&nbsp;: ami</p>
					<p class="col s12 m4"><span class="eo">nova</span>&nbsp;: nouveau</p>
					<p class="col s12 m4"><span class="eo">esti</span>&nbsp;: être</p>
					<p class="col s12 m4"><span class="eo">amika</span>&nbsp;: amical(e)</p>
					<p class="col s12 m8"><span class="eo">sana</span>&nbsp;: sain, en bonne santé</p>
				</div>
			</fieldset>
			

			<?php 
			} // fin section 2
			if ($section=="3") {
			?>
			<?php if ($persono) { ?>
			<p class="eo eta">Ces mots seront automatiquement ajoutés à votre vocabulaire à réviser lorsque vous aurez terminé d'étudier cette section.</p>
			<?php } ?>
			<fieldset class="vortoj">
				<legend>MOTS À RETENIR</legend>
				<div class="vortlisto row">
					<div class="col s12 m6 l4">
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/viro.mp3" class="sm2_button"></a> <span class="eo">viro</span>&nbsp;: homme (mâle)</p>
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/virino.mp3" class="sm2_button"></a> <span class="eo">virino</span>&nbsp;: femme</p>
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/patro.mp3" class="sm2_button"></a> <span class="eo">patro</span>&nbsp;: père</p>
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/patrino.mp3" class="sm2_button"></a> <span class="eo">patrino</span>&nbsp;: mère</p>
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/filo.mp3" class="sm2_button"></a> <span class="eo">filo</span>&nbsp;: fils</p>
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/filino.mp3" class="sm2_button"></a> <span class="eo">filino</span>&nbsp;: fille</p>
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/frato.mp3" class="sm2_button"></a> <span class="eo">frato</span>&nbsp;: frère</p>
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/fratino.mp3" class="sm2_button"></a> <span class="eo">fratino</span>&nbsp;: sœur</p>
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/studento.mp3" class="sm2_button"></a> <span class="eo">studento</span>&nbsp;: étudiant</p>
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/instruisto.mp3" class="sm2_button"></a> <span class="eo">instruisto</span>&nbsp;: instituteur</p>
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/knabo.mp3" class="sm2_button"></a> <span class="eo">knabo</span>&nbsp;: garçon</p>
					</div>
					<div class="col s12 m6 l4">
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/pano.mp3" class="sm2_button"></a> <span class="eo">pano</span>&nbsp;: pain</p>
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/kafo.mp3" class="sm2_button"></a> <span class="eo">kafo</span>&nbsp;: café</p>
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/kuko.mp3" class="sm2_button"></a> <span class="eo">kuko</span>&nbsp;: gâteau</p>
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/lakto.mp3" class="sm2_button"></a> <span class="eo">lakto</span>&nbsp;: lait</p>
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/sukero.mp3" class="sm2_button"></a> <span class="eo">sukero</span>&nbsp;: sucre</p>
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/teo.mp3" class="sm2_button"></a> <span class="eo">teo</span>&nbsp;: thé</p>
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/urbo.mp3" class="sm2_button"></a> <span class="eo">urbo</span>&nbsp;: ville</p>
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/lando.mp3" class="sm2_button"></a> <span class="eo">lando</span>&nbsp;: pays</p>					
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/francujo-francio.mp3" class="sm2_button"></a> <span class="eo">Francujo/Francio<sup>[1]</sup></span>&nbsp;: France</p>
					</div>
					<div class="col s12 m6 l4">
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/bela.mp3" class="sm2_button"></a> <span class="eo">bela</span>&nbsp;: beau</p>
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/bona.mp3" class="sm2_button"></a> <span class="eo">bona</span>&nbsp;: bon</p>
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/facila.mp3" class="sm2_button"></a> <span class="eo">facila</span>&nbsp;: facile</p>
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/granda.mp3" class="sm2_button"></a> <span class="eo">granda</span>&nbsp;: grand</p>
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/seka.mp3" class="sm2_button"></a> <span class="eo">seka</span>&nbsp;: sec</p>
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/varma.mp3" class="sm2_button"></a> <span class="eo">varma</span>&nbsp;: chaud</p>
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/kiu.mp3" class="sm2_button"></a> <span class="eo">kiu</span>&nbsp;: qui, quel</p>					
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/kaj.mp3" class="sm2_button"></a> <span class="eo">kaj</span>&nbsp;: et</p>
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/jen.mp3" class="sm2_button"></a> <span class="eo">jen</span>&nbsp;: voici</p>
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/cxiam.mp3" class="sm2_button"></a> <span class="eo">ĉiam</span>&nbsp;: toujours</p>					
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/en.mp3" class="sm2_button"></a> <span class="eo">en</span>&nbsp;: dans, en</p>
					</div>
				</div>
			</fieldset>
				<div class="notoj">
				<p><span class="eo">[1]</span> Historiquement, les noms de pays étaient construits à partir du nom des habitants, auquel on ajoutait le suffixe -<b>ujo</b> qui désigne le contenant. Ainsi, à partir de <span class="eo">Franco</span> (Français), on construisait <span class="eo">Francujo</span> (France). Par la suite, certains espérantistes ont remarqué qu’un grand nombre de personnes originaires d’un pays n’habitent plus ce pays. Certains Français habitent ailleurs qu’en France, et la France accueille des personnes de tous les pays du monde. Pour cette raison, un nouveau suffixe a vu le jour&nbsp;: -<b>io</b>. Les deux formes cohabitent pour de nombreux pays&nbsp;: <span class="eo">Francujo/Francio</span>, <span class="eo">Belgujo/Belgio</span>…</p></div>

			<?php 
			} // fin section 3
			if ($section=="4") {
			?>

			<p class="parto">Les <strong>pronoms personnels</strong> sont :</p>
			<div class="vortlisto row">
				<div class="col s12 m6">
					<p><span class="eo">mi</span>&nbsp;: je</p>
					<p><span class="eo">vi</span>&nbsp;: tu (ou <span class="eo">ci</span>, peu usité)</p>
					<p><span class="eo">li</span>&nbsp;: il (personne)</p>
					<p><span class="eo">ŝi</span>&nbsp;: elle (personne)</p>
					<p><span class="eo">ĝi</span>&nbsp;: il ou elle (non-personne)</p>
				</div>
				<div class="col s12 m6">
					<p><span class="eo">ni</span>&nbsp;: nous</p>
					<p><span class="eo">vi</span>&nbsp;: vous</p>
					<p><span class="eo">ili</span>&nbsp;: ils ou elles</p>
					<p><span class="eo">oni</span>&nbsp;: on</p>
				</div>
			</div>

			<p class="rimarko"><strong>REMARQUE</strong> : 
			Prononcez-vous <span class="eo">ŝi</span> et <span class="eo">ĝi</span>
			comme il faut&nbsp;? Regardez bien la table en début de leçon.</p>
				
			<p>On emploie <span class="eo">li</span> pour les personnes de sexe masculin et 
			<span class="eo">ŝi</span> pour
			celles de sexe féminin. On peut, à la rigueur, étendre cet usage aux
			animaux familiers mais, à part ces derniers, on utilise <span class="eo">ĝi</span> pour
			désigner les objets, les pays, les animaux, les concepts abstraits… bref
			tout ce qui n’est pas une personne. Au pluriel, <span class="eo">ili</span> s’applique aux
			personnes des deux sexes et aux non-personnes pareillement.
			</p>
				
			<a id="temps"class="scrollspy"></a>
			
			<p class="parto">Au <b>présent</b>, les verbes remplacent leur terminaison <b>-i</b> par 
			<b>-as</b> à toutes les personnes.</p>

			<div class="vortlisto row">
				<div class="col s12 m6">
					<p><span class="eo">mi estas</span>&nbsp;: je suis</p>
					<p><span class="eo">li estas</span>&nbsp;: il est</p>
					<p><span class="eo">ŝi estas</span>&nbsp;: elle est</p>
					<p><span class="eo">ĝi estas</span>&nbsp;: il/elle est</p>
				</div>
				<div class="col s12 m6">
					<p><span class="eo">ni estas</span>&nbsp;: nous sommes</p>
					<p><span class="eo">vi estas</span>&nbsp;: tu es, vous êtes</p>
					<p><span class="eo">ili estas</span>&nbsp;: ils ou elles sont</p>
				</div>
			</div>

			<p class="rimarko"><strong>REMARQUE</strong> : 
			N’oubliez pas l’accent tonique sur l’avant-dernière syllabe et
			prononcez bien toutes les lettres, y compris le <b>s</b> final&nbsp;: <span class="eo">estas</span> rime
			avec le mot français <em>tasse</em> et non pas <em>tas</em>.</p>			
			
			<p class="parto">Au <b>futur</b>, la terminaison sera <b>-os</b>, alors qu’au <b>passé</b>, elle 
			sera <b>-is</b>. Nous nous contenterons de ces trois temps pour le moment.</p>
			
			<div class="vortlisto row">
				<div class="col s12 m6">
					<p><span class="eo">mi estis</span>&nbsp;: j’étais, j'ai été, je fus</p>
					<p><span class="eo">mi estos</span>&nbsp;: je serai</p>
				</div>
			</div>
				
			<p class="rimarko"><strong>REMARQUE</strong> :</p>
			<p>Prononcez : <span class="eo">mi-<u>ès</u>-tass</span>, 
			<span class="eo">mi-<u>ès</u>-tiss</span>, <span class="eo">mi-<u>ès</u>-toss</span>.
			</p>
			
			<p class="parto">On marque le <b>pluriel</b> en ajoutant un <b>-j</b> à la fin des noms et des
			adjectifs qui s’y rapportent.</p>
			
			<a id="articles" class="scrollspy"></a>
			
			<p class="parto">Les <b>articles indéfinis</b> (un, une, des) et <b>partitifs</b> 
			(du, de la, des) n’existent pas en espéranto.</p>

			<div class="vortlisto row">
				<div class="col s12 m4">
					<p><span class="eo">biskvito</span>&nbsp;: un biscuit</p>
					<p><span class="eo">biskvitoj</span>&nbsp;: des biscuits</p>
				</div>
				<div class="col s12 m4">
					<p><span class="eo">pano</span>&nbsp;: du pain</p>
					<p><span class="eo">sukero</span>&nbsp;: du sucre</p>
				</div>
			</div>

			<p class="parto">Les <b>articles définis</b> (le, la, les, l’) sont traduits par un seul mot&nbsp;: <b>la</b>.</p>
			<div class="vortlisto row">
				<div class="col s12 m6">
					<p><span class="eo">la biskvito</span>&nbsp;: le biscuit</p>
					<p><span class="eo">la bonaj biskvitoj</span>&nbsp;: les bons biscuits</p>
				</div>
			</div>
					
			<p class="parto">Les <b>adjectifs possessifs</b> sont formés simplement en ajoutant la
			terminaison <b>-a</b> au pronom personnel. Quand ils sont employés sans
			être suivis par un nom, ils ont la fonction de nos pronoms possessifs.</p>
				
			<div class="vortlisto row">
				<div class="col s12 m4">
					<p><span class="eo">mi</span>&nbsp;: je</p>
					<p><span class="eo">vi</span>&nbsp;: tu, vous</p>
					<p><span class="eo">ŝi</span>&nbsp;: elle</p>
					<p><span class="eo">li</span>&nbsp;: il</p>
					<p><span class="eo">ĝi</span>&nbsp;: il, elle (non-personne)</p>
					<p><span class="eo">ni</span>&nbsp;: nous</p>
					<p><span class="eo">ili</span>&nbsp;: ils, elles</p>
				</div>
				<div class="col s12 m4">
					<p><span class="eo">mia</span>&nbsp;: mon, ma</p>
					<p><span class="eo">via</span>&nbsp;: ton, ta, votre</p>
					<p><span class="eo">ŝia</span>&nbsp;: son, sa (à elle)</p>
					<p><span class="eo">lia</span>&nbsp;: son, sa (à lui)</p>
					<p><span class="eo">ĝia</span>&nbsp;: son, sa</p>
					<p><span class="eo">nia</span>&nbsp;: notre</p>
					<p><span class="eo">ilia</span>&nbsp;: leur</p>
				</div>
				<div class="col s12 m4">
					<p><span class="eo">miaj</span>&nbsp;: mes</p>
					<p><span class="eo">viaj</span>&nbsp;: tes, vos</p>
					<p><span class="eo">ŝiaj</span>&nbsp;: ses (à elle)</p>
					<p><span class="eo">liaj</span>&nbsp;: ses (à lui)</p>
					<p><span class="eo">ĝiaj</span>&nbsp;: ses</p>
					<p><span class="eo">niaj</span>&nbsp;: nos</p>
					<p><span class="eo">iliaj</span>&nbsp;: leurs</p>
				</div>
			</div>
					
			<p class="rimarko"><strong>REMARQUE</strong> :
			Dans les mots <span class="eo">mia</span>, <span class="eo">via</span>, etc. 
			la lettre <strong>i</strong> conserve sa fonction de
			voyelle et fait syllabe&nbsp;: <span class="eo"><u>mi</u>-a</span>, <span class="eo"><u>vi</u>-a</span>, 
			<span class="eo">i-<u>li</u>-a</span>, …<br>
			Ne prononcez donc pas <span class="eo">mia</span> comme dans <em>amiable</em> mais comme dans 
			<em>un ami à moi</em>. </p>

			<?php 
			} // fin section 4
			if ($section=="5") {
			?>
			<p class="noprint"><em>Pour entendre ces phrases, cliquez sur le bouton à gauche de la phrase.</em></p>
			
			<div class="vortlisto row">
				<p class="col s12 m6"><a href="<?php echo $vojo;?>fr/son/frazoj/l01-1.mp3" class="sm2_button"></a>
				<span class="eo">Viaj filoj estas niaj amikoj.</span></p>
				<p class="col s11 offset-s1 m6">Vos fils sont nos amis.</p>
				<p class="col s12 m6"><a href="<?php echo $vojo;?>fr/son/frazoj/l01-2.mp3" class="sm2_button"></a>
					<span class="eo">Iliaj kafoj estos varmaj.</span></p>
				<p class="col s11 offset-s1 m6">Leurs cafés seront chauds.</p>
				<p class="col s12 m6"><a href="<?php echo $vojo;?>fr/son/frazoj/l01-3.mp3" class="sm2_button"></a>
					<span class="eo">La knaboj estas grandaj.</span></p>
				<p class="col s11 offset-s1 m6">Les garçons sont grands.</p>
				<p class="col s12 m6"><a href="<?php echo $vojo;?>fr/son/frazoj/l01-4.mp3" class="sm2_button"></a>
					<span class="eo">Ŝia pano estis seka.</span></p>
				<p class="col s11 offset-s1 m6">Son pain (à elle) était sec.</p>
				<p class="col s12 m6"><a href="<?php echo $vojo;?>fr/son/frazoj/l01-5.mp3" class="sm2_button"></a>
					<span class="eo">Vi estas lia filo.</span></p>
				<p class="col s11 offset-s1 m6">Tu es son fils (à lui).</p>
				<p class="col s12 m6"><a href="<?php echo $vojo;?>fr/son/frazoj/l01-6.mp3" class="sm2_button"></a>
					<span class="eo">La instruisto estas sana.</span></p>
				<p class="col s11 offset-s1 m6">L'instituteur est en bonne santé.</p>
				<p class="col s12 m6"><a href="<?php echo $vojo;?>fr/son/frazoj/l01-7.mp3" class="sm2_button"></a>
					<span class="eo">Via amiko estas bela.</span></p>
				<p class="col s11 offset-s1 m6">Ton ami est beau.</p>
				<p class="col s12 m6"><a href="<?php echo $vojo;?>fr/son/frazoj/l01-8.mp3" class="sm2_button"></a>
					<span class="eo">La kuko estis lia.</span></p>
				<p class="col s11 offset-s1 m6">Le gâteau était à lui (était le sien)</p>
			</div>
	
			<p class="rimarko"><strong>REMARQUE</strong> :  
			Dans ces exemples les terminaisons <b>-aj</b> et <b>-oj</b> se prononcent
			<span class="eo">aï</span> et <span class="eo">oï</span>,
			comme dans <em>ail</em> et <em>Tolstoï</em> : <span class="eo"><u>vi</u>-aï
			<u>fi</u>-loï</span>, <span class="eo"><u>ka</u>-foï</span>, 
			<span class="eo">a-<u>mi</u>-koï</span>, etc.
			</p>

			<?php 
			} // fin section 5
			if ($section=="6") {
			?>

				<div class="row noprint">
					<div class="col s12">
						<div class="card-panel blue lighten-5">
						<!-- N'a pas encore de compte -->
						<?php if ($persono_id=="") { ?>
							<div class="row">
								<div class="col s12 m5">
									<p><b>J'ai déjà un compte&nbsp;:</b></p>
									<p>Je me connecte pour pouvoir compléter les exercices et demander l’aide d'un correcteur.</p>
									<p><a href="#konektigxi" class="btn waves-effect waves-light waves-light blue modal-trigger" data-target="konektigxi">CONNEXION</a></p>
								</div>
								<div class="col s12 m7">
									<p><b>Je n’ai pas encore de compte&nbsp;:</b></p>
									<p>En créant un compte, vous pourrez suivre nos cours, voir votre progression et demander l’aide d’un correcteur.<br>C’est gratuit&nbsp;!</p>
								<p class="center"><a href="#aligxi" class="btn waves-effect waves-light blue modal-trigger" data-target="aligxi">créer un compte</a></p>
								</div>
							</div>
							<p class="noto">Note&nbsp;: vous pouvez également suivre ce cours sans être inscrit sur ce site, mais dans ce cas vous ne pourrez pas bénéficier du suivi et de la correction des exercices.</p>
							<!-- A déjà un compte -->
							<?php } else { ?>
								<p>Pour bénéficier de notre service de correction, il vous suffit de compléter les exercices. Cliquez ensuite sur le bouton <b>ENREGISTRER MES RÉPONSES</b>.</p>
								<p>Lorsque vous aurez terminé la leçon, vous pourrez demander l’aide d’un correcteur à la fin de la section <b>Épilogue et envoi des exercices</b>. Les exercices seront automatiquement envoyés à votre correcteur quand les administrateurs du cours vous en auront attribué un.</p>
							<?php } ?>
						</div>
					</div>
				</div>

				<p class="parto">Ce premier exercice consiste à traduire quelques phrases simples en espéranto. 
					Ce type d’exercice permet de contrôler si vous avez bien assimilé le vocabulaire et les points grammaticaux vus dans la leçon.
					Lorsque vous traduisez une phrase, vous devez traduire le sens de cette phrase, et non pas les mots un par un&nbsp;:
					une langue n’est pas le calque d’une autre langue.
					Par exemple, vous avez vu que <span class="eo">sana</span> signifie «en bonne santé&nbsp;»&nbsp;: 
					ici, un seul mot en espéranto permet de traduire une expression de 3 mots en français.
				</p>
				
			<?php 
				getEkzercon(1,$persono_id);
			?>

			<?php 
			} // fin section 
			if ($section=="7") {
			?>			
			<p class="parto">Voici quelques expressions pour entamer et finir une discussion. Ces expressions sont à apprendre par cœur dans un premier temps, vous verrez un peu plus tard dans les leçons pourquoi elles se construisent ainsi.</p>
		<fieldset class="vortoj">
			<div class="vortlisto nocol">
				<div class="row">
					<p class="col s6 m4"><a href="<?php echo $vojo;?>fr/son/vortoj/saluton.mp3" class="sm2_button"></a>
						<span class="eo">Saluton!</span></p>
						<p class="col s6 m8">Salut&nbsp;!, Bonjour&nbsp;!</p>
					<p class="col s6 m4"><a href="<?php echo $vojo;?>fr/son/vortoj/bonan-tagon.mp3" class="sm2_button"></a>
						<span class="eo">Bonan tagon!</span></p><p class="col s6 m8">Bonjour&nbsp;!</p>
				</div>
				<div class="row">
					<p class="col s6 m4"><a href="<?php echo $vojo;?>fr/son/vortoj/bonan-matenon.mp3" class="sm2_button"></a>
						<span class="eo">Bonan matenon!</span></p><p class="col s6 m8">Bonjour&nbsp;! (le matin)</p>
					<p class="col s6 m4"><a href="<?php echo $vojo;?>fr/son/vortoj/bonan-vesperon.mp3" class="sm2_button"></a>
						<span class="eo">Bonan vesperon!</span></p><p class="col s6 m8">Bonsoir&nbsp;!</p>
				</div>
				<div class="row">
					<p class="col s6 m4"><a href="<?php echo $vojo;?>fr/son/vortoj/bonan-nokton.mp3" class="sm2_button"></a>
						<span class="eo">Bonan nokton!</span></p><p class="col s6 m8">Bonne nuit&nbsp;!</p>
					<p class="col s6 m4"><a href="<?php echo $vojo;?>fr/son/vortoj/mi-logxas-en.mp3" class="sm2_button"></a>
						<span class="eo">Mi loĝas en…</p><p class="col s6 m8">J’habite à…</p>
				</div>
				<div class="row">
					<p class="col s6 m4"><a href="<?php echo $vojo;?>fr/son/vortoj/mi-sxatas.mp3" class="sm2_button"></a>
						<span class="eo">Mi ŝatas…</span></p><p class="col s6 m8">J’aime… / J'apprécie…</p>
					<p class="col s6 m4"><a href="<?php echo $vojo;?>fr/son/vortoj/dankon.mp3" class="sm2_button"></a>
						<span class="eo">Dankon!</span></p><p class="col s6 m8">Merci&nbsp;!</p>
				</div>
				<div class="row">
					<p class="col s6 m4"><a href="<?php echo $vojo;?>fr/son/vortoj/gxis-revido.mp3" class="sm2_button"></a>
						<span class="eo">Ĝis revido!</span></p><p class="col s6 m8">Au revoir&nbsp;!</p>
					<p class="col s6 m4"><a href="<?php echo $vojo;?>fr/son/vortoj/adiaux.mp3" class="sm2_button"></a>
						<span class="eo">Adiaŭ!</span></p><p class="col s6 m8">Adieu&nbsp;!</p>
				</div>
				<div class="row">
					<p class="col s6 m4"><a href="<?php echo $vojo;?>fr/son/vortoj/bonvolu.mp3" class="sm2_button"></a>
						<span class="eo">Bonvolu…</span></p><p class="col s6 m8">Veuillez… / … s’il vous plaît</p>
					<p class="col s6 m4"><a href="<?php echo $vojo;?>fr/son/vortoj/bonvolu-eniri.mp3" class="sm2_button"></a>
						<span class="eo">Bonvolu eniri.</span></p><p class="col s6 m8">Veuillez entrer. / Entrez, s’il vous plaît.</p>
				</div>
			</div>
		</fieldset>
			<?php 
			} // fin section 
			if ($section=="8") {
			?>
			<p class="parto">En vous aidant des expressions que l’on vient de voir et d’un peu de bon sens, essayez d'attribuer à chacune des personnes de la vidéo son nom, son domicile et sa profession.</p>
			<p>Ne vous attendez pas à comprendre <b>tout</b>, essayez juste de comprendre ce qui vous permettra de répondre au questionnaire. N’hésitez pas à regarder la vidéo plusieurs fois. Au besoin, prenez des notes sur du papier, l’exercice sera d’autant plus utile si vous essayez de répondre sérieusement aux questions. Si vous vous trompez, prenez un peu de temps pour vérifier dans la vidéo la bonne réponse avant d'essayer de donner une autre réponse.</p>
			<p>
			<p>Pour vous aider à mieux comprendre, vous trouverez à la fin de cette page une liste de quelques mots nouveaux.</p>
			<iframe width="560" height="315" src="https://www.youtube.com/embed/pTQEn0-fuQc" frameborder="0" allowfullscreen></iframe>
			</p>


			<?php 
QCM(
	array(
		array(
			"question"=>"En kiu filmo estas Aleks?",
			"propositions"=>array("filmo 1","filmo 2","filmo 3","filmo 4","filmo 5"),
			"indices"=>array("","",""),
			"reponse"=>2
		),
		array(
			"question"=>"En kiu filmo estas Joanne?",
			"propositions"=>array("filmo 1","filmo 2","filmo 3","filmo 4","filmo 5"),
			"indices"=>array("","",""),
			"reponse"=>1
		),
		array(
			"question"=>"En kiu filmo estas Tran Hoan?",
			"propositions"=>array("filmo 1","filmo 2","filmo 3","filmo 4","filmo 5"),
			"indices"=>array("","",""),
			"reponse"=>4
		),
		array(
			"question"=>"Kiu loĝas en Brazilo?",
			"propositions"=>array("Aleks","Allan","Anna Maria","Joanne","Tran Hoan"),
			"indices"=>array("","",""),
			"reponse"=>2
		),
		array(
			"question"=>"Kiu loĝas en Pollando?",
			"propositions"=>array("Aleks","Allan","Anna Maria","Joanne","Tran Hoan"),
			"indices"=>array("","",""),
			"reponse"=>3
		),
		array(
			"question"=>"Kiu loĝas en Vjetnamio?",
			"propositions"=>array("Aleks","Allan","Anna Maria","Joanne","Tran Hoan"),
			"indices"=>array("","",""),
			"reponse"=>5
		),
		
		array(
			"question"=>"Kiu estas desegnisto?",
			"propositions"=>array("Aleks","Allan","Anna Maria","Joanne","Tran Hoan"),
			"indices"=>array("","",""),
			"reponse"=>4
		),		
		array(
			"question"=>"Kiu estas psikologo?",
			"propositions"=>array("Aleks","Allan","Anna Maria","Joanne","Tran Hoan"),
			"indices"=>array("","",""),
			"reponse"=>3
		),
		array(
			"question"=>"Kiu estas studento?",
			"propositions"=>array("Aleks","Allan","Anna Maria","Joanne","Tran Hoan"),
			"indices"=>array("","",""),
			"reponse"=>2
		),
		array(
			"question"=>"Kie loĝas la instruisto?",
			"propositions"=>array("Aŭstralio","Brazilo","Francio","Pollando","Vjetnamio"),
			"indices"=>array("","",""),
			"reponse"=>3
		)
	)
);
			?>

			<p>Quelques mots nouveaux utilisés dans cet exercice&nbsp;:</p>
			<div class="vortlisto row">
				<div class="col s12 m4">
					<p><span class="eo">Aŭstralujo/Aŭstralio</span>&nbsp;: Australie</p>
					<p><span class="eo">Brazilo</span>&nbsp;: Brésil</p>
				</div>
				<div class="col s12 m4">
					<p><span class="eo">Vjetnamujo/Vjetnamio</span>&nbsp;: Vietnam</p>
					<p><span class="eo">Pollando</span>&nbsp;: Pologne</p>
				</div>
				<div class="col s12 m4">
					<p><span class="eo">profesio</span>&nbsp;: métier, profession</p>
					<p><span class="eo">desegnisto</span>&nbsp;: dessinateur</p>
					<p><span class="eo">psikologo</span>&nbsp;: psychologue</p>
				</div>
			</div>

			<?php 
			} // fin section 
			if ($section=="9") {
			?>
			<p class="parto">Dans l’exercice précédent, vous avez vu comment interroger sur l’identité d’une personne ou d’une chose. On utilise pour cela le mot interrogatif <b>kiu</b>&nbsp;:</p>
			<div class="vortlisto row">
				<p class="col s12 m6"><a href="<?php echo $vojo;?>fr/son/frazoj/kiu-logxas-en-brazilo.mp3" class="sm2_button"></a>
					<span class="eo"><b>Kiu</b> loĝas en Brazilo?</span></p><p class="col s11 m6 offset-s1"><b>Qui</b> habite au Brésil&nbsp;?</p>
				<p class="col s12 m6"><a href="<?php echo $vojo;?>fr/son/frazoj/en-kiu-filmo.mp3" class="sm2_button"></a>
				<span class="eo">En <b>kiu</b> filmo estas Aleks?</span></p><p class="col s11 m5 offset-s1">Dans <b>quel</b> film est Aleks&nbsp;?</p>
			</div>
			
			<p>On traduit généralement <b>kiu</b> par <em>qui</em>, <em>quel(le)</em>, <em>lequel</em> ou <em>laquelle</em>. </p>
				
			<p>Voici quelques autres exemples :</p>
			<div class="row">
				<p class="col s12 m6"><a href="<?php echo $vojo;?>fr/son/frazoj/kiu-estas-la-nova-instruisto.mp3" class="sm2_button"></a><span class="eo"><b>Kiu</b> estas la nova instruisto?<br>&emsp;&emsp;– Estas Marko. Estas mia patro.</span></p><p class="col s11 m6 offset-s1">Qui est le nouvel instituteur&nbsp;?<br>– C’est Marko. C'est mon père.</p>
			</div>
			<div class="row">
				<p class="col s12 m6"><a href="<?php echo $vojo;?>fr/son/frazoj/en-kiu-urbo-logxas-anna-maria.mp3" class="sm2_button"></a><span class="eo">En <b>kiu</b> urbo loĝas Anna Maria?<br>&emsp;&emsp;– Ŝi loĝas en Vroclavo.</span></p><p class="col s11 m6 offset-s1">Dans <b>quelle</b> ville habite Anna Maria&nbsp;?<br>– Elle habite à Wrocław.</p>
			</div>
			<div class="row">
				<p class="col s12 m6"><a href="<?php echo $vojo;?>fr/son/frazoj/parizo-varsovio-kaj-romo.mp3" class="sm2_button"></a><span class="eo">Parizo, Varsovio kaj Romo estas urboj. <b>Kiu</b> estas en Pollando?</span></p><p class="col s11 m6 offset-s1">Paris, Varsovie et Rome sont des villes. <b>Laquelle</b> est en Pologne&nbsp;?</p>
			</div>
			
			<p class="parto"><b>Kiu</b> se met au pluriel (<b>kiuj</b>) si l’on interroge sur plusieurs personnes ou plusieurs choses. Par exemple&nbsp;:</p>
			
			<div class="row">
				<p class="col s12 m6"><a href="<?php echo $vojo;?>fr/son/frazoj/jen-kukoj.mp3" class="sm2_button"></a><span class="eo">Jen kukoj. <b>Kiuj</b> estas bonaj?</span></p><p class="col s11 m6 offset-s1">Voici des gâteaux. <b>Lesquels</b> sont bons&nbsp;?</p>
			</div>
			<div class="row">
				<p class="col s12 m6"><a href="<?php echo $vojo;?>fr/son/frazoj/kiuj-estas-viaj-instruistoj.mp3" class="sm2_button"></a><span class="eo"><b>Kiuj</b> estas viaj instruistoj?<br>&emsp;&emsp;– Marko kaj Petro.</span></p><p class="col s11 m6 offset-s1"><b>Qui</b> sont tes professeurs&nbsp;?<br>– Marko et Petro.</p>
			</div>

			<p class="parto">Dans l’exercice précédent, vous avez également vu comment poser une question pour interroger sur le lieu&nbsp;:</p>
			<div class="vortlisto row">
				<p class="col s12 m6"><a href="<?php echo $vojo;?>fr/son/frazoj/kie-logxas-la-instruisto.mp3" class="sm2_button"></a><span class="eo"><b>Kie</b> loĝas la instruisto?</span></p><p class="col s11 m6 offset-s1"><b>Où</b> habite le professeur&nbsp;?</p>
			</div>
			
			<p>Voici d’autres exemples de questions commençant par <b>kie</b>&nbsp;:</p>
			<div class="row">
				<p class="col s12 m6"><a href="<?php echo $vojo;?>fr/son/frazoj/kie-studas-allan.mp3" class="sm2_button"></a><span class="eo"><b>Kie</b> studas Allan?</span></p><p class="col s11 m6 offset-s1"><b>Où</b> étudie Allan&nbsp;?</p>
			</div>
			<div class="row">
				<p class="col s12 m6"><a href="<?php echo $vojo;?>fr/son/frazoj/kie-estas-chaumont.mp3" class="sm2_button"></a><span class="eo"><b>Kie</b> estas la urbo Chaumont?<br>&emsp;&emsp;– Ĝi estas en Francujo.</span></p><p class="col s11 m6 offset-s1"><b>Où</b> est la ville de Chaumont&nbsp;?<br>– Elle est en France.</p>
			</div>

			<?php
			} // fin section 9
			if ($section=="10") {
			?>

			<?php 
				getEkzercon(2,$persono_id);
			?>

			<?php 
				getEkzercon(3,$persono_id);
			?>

			<?php 
			} // fin section 
			if ($section=="11") {
			?>
			<p class="parto">À votre tour&nbsp;! En vous aidant du vocabulaire déjà vu et de la vidéo de l’exercice précédent, essayez de vous présenter à votre correcteur en quelques mots. N’oubliez pas les formules de politesse pour dire bonjour et au revoir. Si vous ne savez pas comment dire en espéranto votre profession, ce sera l’occasion de demander à votre correcteur. Vous devriez être capable de rédiger 4 ou 5 phrases en espéranto.</p>
			<p>Cet exercice ne vous permettra pas uniquement de vérifier que vous avez assimilé le nouveau vocabulaire, mais également de faire connaissance avec le correcteur qui vous sera attribué et qui corrigera vos exercices tout au long de ce cours.</p>
			<p>Aucune utilisation commerciale ne sera faite des informations que vous transmettrez.

			<?php 
				getEkzercon(4,$persono_id);
			?>


						<p class="parto">Voici un peu de vocabulaire qui peut vous aider. Vous n’avez pas besoin de retenir tous ces mots dès maintenant. Ils ne seront utiles que pour cet exercice.</p>
			<div class="vortlisto row">
				<div class="col s12 m6">
					<p><b>Profession</b></p>
					<p><a href="<?php echo $vojo;?>fr/son/vortoj/emerito.mp3" class="sm2_button"></a> <span class="eo">emerito</span>&nbsp;: retraité</p>
					<p><a href="<?php echo $vojo;?>fr/son/vortoj/funkciulo.mp3" class="sm2_button"></a> <span class="eo">funkciulo</span>&nbsp;: fonctionnaire</p>
					<p><a href="<?php echo $vojo;?>fr/son/vortoj/jxurnalisto.mp3" class="sm2_button"></a> <span class="eo">ĵurnalisto</span>&nbsp;: journaliste</p>
					<p><a href="<?php echo $vojo;?>fr/son/vortoj/laboristo.mp3" class="sm2_button"></a> <span class="eo">laboristo</span>&nbsp;: ouvrier</p>
					<p><a href="<?php echo $vojo;?>fr/son/vortoj/komputilisto.mp3" class="sm2_button"></a> <span class="eo">komputilisto</span>&nbsp;: informaticien</p>
					<p><a href="<?php echo $vojo;?>fr/son/vortoj/oficisto.mp3" class="sm2_button"></a> <span class="eo">oficisto</span>&nbsp;: employé</p>
					<p><a href="<?php echo $vojo;?>fr/son/vortoj/senlaborulo.mp3" class="sm2_button"></a> <span class="eo">senlaborulo</span>&nbsp;: chômeur</p>
					<p><b>Pays</b></p>
					<p><a href="<?php echo $vojo;?>fr/son/vortoj/afriko.mp3" class="sm2_button"></a> <span class="eo">Afriko</span>&nbsp;: Afrique</p>
					<p><a href="<?php echo $vojo;?>fr/son/vortoj/belgio.mp3" class="sm2_button"></a> <span class="eo">Belgio</span>&nbsp;: Belgique</p>
					<p><a href="<?php echo $vojo;?>fr/son/vortoj/euxropo.mp3" class="sm2_button"></a> <span class="eo">Eŭropo</span>&nbsp;: Europe</p>
				</div>
				<div class="col s12 m6">
					<p><a href="<?php echo $vojo;?>fr/son/vortoj/francujo.mp3" class="sm2_button"></a> <span class="eo">Francujo</span>&nbsp;: France</p>
					<p><a href="<?php echo $vojo;?>fr/son/vortoj/kanado.mp3" class="sm2_button"></a> <span class="eo">Kanado</span>&nbsp;: Canada</p>
					<p><a href="<?php echo $vojo;?>fr/son/vortoj/parizo.mp3" class="sm2_button"></a> <span class="eo">Parizo</span>&nbsp;: Paris</p>
					<p><a href="<?php echo $vojo;?>fr/son/vortoj/svislando.mp3" class="sm2_button"></a> <span class="eo">Svislando</span>&nbsp;: Suisse</p>
					<p><b>Adjectifs</b></p>
					<p><a href="<?php echo $vojo;?>fr/son/vortoj/donacema.mp3" class="sm2_button"></a> <span class="eo">donacema</span>&nbsp;: généreux</p>
					<p><a href="<?php echo $vojo;?>fr/son/vortoj/felicxa.mp3" class="sm2_button"></a> <span class="eo">feliĉa</span>&nbsp;: heureux</p>
					<p><a href="<?php echo $vojo;?>fr/son/vortoj/juna.mp3" class="sm2_button"></a> <span class="eo">juna</span>&nbsp;: jeune</p>
					<p><a href="<?php echo $vojo;?>fr/son/vortoj/maljuna.mp3" class="sm2_button"></a> <span class="eo">maljuna</span>&nbsp;: vieux</p>
					<p><a href="<?php echo $vojo;?>fr/son/vortoj/scivolema.mp3" class="sm2_button"></a> <span class="eo">scivolema</span>&nbsp;: curieux, qui aime apprendre</p>
					<p><a href="<?php echo $vojo;?>fr/son/vortoj/sportema.mp3" class="sm2_button"></a> <span class="eo">sportema</span>&nbsp;: sportif, qui aime le sport</p>
					<p><a href="<?php echo $vojo;?>fr/son/vortoj/vojagxema.mp3" class="sm2_button"></a> <span class="eo">vojaĝema</span>&nbsp;: voyageur, qui aime voyager</p>
				</div>
				<div class="col s12">
					<br><p><b>Expression utile</b></p>
					<p><a href="<?php echo $vojo;?>fr/son/frazoj/kiel-oni-diras.mp3" class="sm2_button"></a><span class="eo">Kiel oni diras … en Esperanto?</span>&nbsp;: Comment dit-on … en espéranto&nbsp;?</p>
			</div>

			<?php 
			} // fin section 
			if ($section=="12") {
			?>

			<p>
			Dans l’exercice suivant, sélectionnez la réponse exacte en 
			cliquant sur le bouton associé. Attention&nbsp;! L’exercice est très facile (il 
			suffit d’avoir compris le cours), mais ne tentez pas de répondre au hasard, car il 
			y a tout de même 67 108 864 réponses possibles…
			</p>
			<?php 
QCM(
	array(
		array(
			"question"=>"Combien de syllabes y a-t-il dans 'viaj kukoj'&nbsp;?",
			"propositions"=>array("3","4","5","6"),
			"indices"=>array("","",""),
			"reponse"=>2
		),
		array(
			"question"=>"Quelle est la place de l’accent tonique&nbsp;?",
			"propositions"=>array("sur la dernière voyelle","sur l’avant-dernière syllabe","sur la dernière syllabe","sur la première voyelle"),
			"indices"=>array("","",""),
			"reponse"=>2
		),
		array(
			"question"=>"Comment se prononce la lettre 'ĝ'&nbsp;?",
			"propositions"=>array("comme le 'g' de 'Alger'","comme le 'g' de 'Lagos'","comme le 'dj' de 'Djibouti'","aucun de ceux-ci"),
			"indices"=>array("","",""),
			"reponse"=>3
		),
		array(
			"question"=>"Comment écrit-on en espéranto le son 'ch' du mot français 'chat'&nbsp;?",
			"propositions"=>array("ch","ŝ","ce son n’existe pas en espéranto","sch"),
			"reponse"=>2
		),		
		array(
			"question"=>"Comment écrit-on le son 'u' qui apparaît dans 'tutu' en français&nbsp;?",
			"propositions"=>array("u","y","il n'existe pas en espéranto","&uuml;"),
			"reponse"=>3
		),
		array(
			"question"=>"Quel est le pronom de 3<sup>e</sup> personne féminin singulier&nbsp;?",
			"propositions"=>array("mi","ili","ĝi","ŝi"),
			"reponse"=>4
		),
		array(
			"question"=>"Quelle est la terminaison caractéristique de l'infinitif&nbsp;?",
			"propositions"=>array("-i","-is","-ar","-j"),
			"reponse"=>1
		),
		array(
			"question"=>"Quelle est la terminaison caractéristique de l’adjectif&nbsp;?",
			"propositions"=>array("-as","-o","-j","-a"),
			"reponse"=>4
		),
		array(
			"question"=>"Quelle est la terminaison caractéristique du passé&nbsp;?",
			"propositions"=>array("-i","-j","-a","-is"),
			"reponse"=>4
		),
		array(
			"question"=>"Quelle est la terminaison caractéristique du nom&nbsp;?",
			"propositions"=>array("-o","-os","cela dépend du genre","-a"),
			"reponse"=>1
		),
		array(
			"question"=>"Comment dit-on 'du thé chaud'&nbsp;?",
			"propositions"=>array("la varmo tea","varma teo","varmo teo","la varma teo"),
			"reponse"=>2
		),
		array(
			"question"=>"Comment dit-on 'de bons garçons'&nbsp;?",
			"propositions"=>array("bona knaboj","la bonaj knaboj","bonaj knaboj","bonoj knaboj"),
			"reponse"=>3
		),
		array(
			"question"=>"Comment dit-on 'mes fils'&nbsp;?",
			"propositions"=>array("mia filioj","miaj filoj","miaj filioj","mia filoj"),
			"reponse"=>2
		)	
	)
);
			?>
			
			<?php 
			} // fin section
			if ($section=="13") {
			?>

			<p>Nous espérons que ce premier contact avec
			l’espéranto vous a plu. Vous n’avez peut-être pas tout assimilé mais cela
			viendra petit à petit. Vous pouvez déjà remarquer avec l’exercice
			précédent que vous êtes capable d’exprimer en espéranto des phrases
			simples dont vous maîtrisez parfaitement la grammaire. 
			</p>
			<p>
			Un tel résultat ne pourrait pas être obtenu aussi rapidement s’il
			s’agissait d’apprendre une autre langue&nbsp;! Pensez que
			potentiellement vous savez déjà conjuguer le verbe <i>esti</i> au présent,
			passé et futur de toutes les personnes, que vous connaissez les
			adjectifs possessifs et le pluriel. Avec les mots du
			vocabulaire vous pouvez déjà assembler un tas de phrases suivant les
			modèles&nbsp;:</p>
			<p class="eo container">
			      (la/mia/via...) -a -o estas -a.<br>
			      (la/mia/via...) -a -o estas -a -o.
			</p>
			<p>Donc à bientôt pour la prochaine leçon&nbsp;!</p>

			<div class="card-panel blue lighten-5">
				<p>L’inscription n’est indispensable que si vous désirez faire appel à un correcteur. Cette inscription est gratuite.</p>
				<p>Votre correcteur est là pour répondre à vos questions sur la langue espéranto, mais aussi sur l'utilisation que l’on peut faire de l’espéranto. N’hésitez pas à vous présenter et faire connaissance. En cas d’absence, n’oubliez pas d’en avertir votre correcteur&nbsp;!</p>
				<p>Bon apprentissage&nbsp;!</p>	
			</div>
		
		<?php 
				recapitulatif_lecon_avant_envoi('CG',$leciono,$persono_id);
		} // fin section
		?>	
		</section>

		<section id="leciono-fino">
			<div id="marko" class="right-align">
				<?php getBoutonFinSection('CG',1,$section,$persono_id); ?>
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