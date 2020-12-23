<?php
$titolo="2 (du)";
$leciono = 2;
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
		displayWarningSiLecioneroManquante($persono_id,'CG',2,$section);
		
		if ($section=="1") {
		?>

		<p class="parto">Pour introduire cette leçon, nous vous proposons un petit test. Il vous permettra de réviser ce que vous avez vu dans la leçon 1 et de découvrir un peu de vocabulaire de la leçon 2.</p>
		<p>Retrouvez le texte qui convient à l'image (attention, quelques mots sont à deviner… et seront expliqués dans la leçon 2. Soyez attentif et imaginatif&nbsp;!</p>

<?php 
QCM_bildoj(
	array(
		array(
			"bildo"=>"bildoj/img-02-01.jpg",
			"url"=>"http://monde.ccdmd.qc.ca/recherche/?demande=collection&str=Denis%20Chabot",
			"auteur"=>"Denis Chabot",
			"propositions"=>array("La kafo estas varma","La cafeo estas varma","La kafo estas ĉauda"),
			"indices"=>array("","attention, la lettre c se prononce ts",""),
			"reponse"=>1
		),
		array(
			"bildo"=>"bildoj/img-02-02.jpg",
			"url"=>"http://monde.ccdmd.qc.ca/recherche/?demande=collection&str=Denis%20Chabot",
			"auteur"=>"Denis Chabot",
			"propositions"=>array("La biskivtoj estas en pano","La panoj estas en korbo","La paneoj estas sekaj"),
			"indices"=>array("","",""),
			"reponse"=>2
		),
		array(
			"bildo"=>"bildoj/img-02-03.jpg",
			"url"=>"http://monde.ccdmd.qc.ca/recherche/?demande=collection&str=Katherine%20Lissitsa",
			"auteur"=>"Katherine Lissitsa",
			"propositions"=>array(" La filo estas kun birdoj","Patro estas kun birdoj","La knabino estas kun birdoj"),
			"indices"=>array("","",""),
			"reponse"=>3
		),
		array(
			"bildo"=>"bildoj/img-02-04.jpg",
			"url"=>"http://monde.ccdmd.qc.ca/recherche/?demande=collection&str=Denis%20Chabot",
			"auteur"=>"Denis Chabot",
			"propositions"=>array("La knabo lernas","La patro estas instruisto","La knabo estas sana kaj bona filo"),
			"indices"=>array("","",""),
			"reponse"=>1
		),
		array(
			"bildo"=>"bildoj/img-02-05.jpg",
			"url"=>"http://monde.ccdmd.qc.ca/recherche/?demande=collection&str=Marcel+Labont%E9",
			"auteur"=>"Marcel Labonté",
			"propositions"=>array("Bela filo estas mia instruisto","Bela virino estas ilia instruistino","Instruisto estas mia"),
			"indices"=>array("","",""),
			"reponse"=>2
		)

	)
);
?>

		<?php 
		}
		if ($section=="2") {
		?>
		
		<p class="parto">Les <b>noms</b> désignant des êtres vivants sexués peuvent prendre la
		marque du <b>féminin</b>. Pour ce faire on remplace la terminaison
		<b>-o</b> du nom par la terminaison <b>-ino</b> ou, dit autrement, on
		intercale le suffixe <b>-in</b> entre la terminaison et ce qui la précède.</p>
		
		<div class="vortlisto row">
			<p class="col s6"><a href="<?php echo $vojo;?>fr/son/vortoj/viro.mp3" class="sm2_button"></a> <span class="eo">viro</span>&nbsp;: homme (mâle)</p>
			<p class="col s6"><a href="<?php echo $vojo;?>fr/son/vortoj/virino.mp3" class="sm2_button"></a> <span class="eo">vir<b>in</b>o</span>&nbsp;: femme</p>
			<p class="col s6"><a href="<?php echo $vojo;?>fr/son/vortoj/amiko.mp3" class="sm2_button"></a> <span class="eo">amiko</span>&nbsp;: ami</p>
			<p class="col s6"><a href="<?php echo $vojo;?>fr/son/vortoj/amikino.mp3" class="sm2_button"></a> <span class="eo">amik<b>in</b>o</span>&nbsp;: amie</p>
			<p class="col s6"><a href="<?php echo $vojo;?>fr/son/vortoj/filo.mp3" class="sm2_button"></a> <span class="eo">filo</span>&nbsp;: fils</p>
			<p class="col s6"><a href="<?php echo $vojo;?>fr/son/vortoj/filino.mp3" class="sm2_button"></a> <span class="eo">fil<b>in</b>o</span>&nbsp;: fille</p>
		</div>
		
		<p>Lors de la première leçon nous avons vu qu’en espéranto les adjectifs
		s’accordent en nombre avec les noms auxquels ils se rapportent. Par contre, ils ne s’accordent jamais en genre.
		</p>
		<div class="vortlisto row">
			<p class="col s12"><a href="<?php echo $vojo;?>fr/son/vortoj/la-grandaj-viroj.mp3" class="sm2_button"></a> <span class="eo">la grandaj viroj</span>&nbsp;: les grands hommes</p>
			<p class="col s12"><a href="<?php echo $vojo;?>fr/son/vortoj/la-grandaj-virinoj.mp3" class="sm2_button"></a> <span class="eo">la grandaj virinoj</span>&nbsp;: les grandes femmes</p>
		</div>
		
		<fieldset class="vortoj">
			<legend>VOCABULAIRE À RETENIR</legend>
			<div>
				<?php if ($persono) { ?>
				<p class="eo eta">Ces mots seront automatiquement ajoutés à votre vocabulaire à réviser lorsque vous aurez terminé d'étudier cette section. Le nombre de mots à réviser sera indiqué sur le bouton affiché au-dessus du sommaire.</p>
				<?php } ?>
			</div>
			<div class="vortlisto row">
				<p class="col s12 m4"><a href="<?php echo $vojo;?>fr/son/vortoj/virino.mp3" class="sm2_button"></a> <span class="eo">virino</span> : femme</p>
				<p class="col s12 m4"><a href="<?php echo $vojo;?>fr/son/vortoj/amikino.mp3" class="sm2_button"></a> <span class="eo">amikino</span> : amie</p>
				<p class="col s12 m4"><a href="<?php echo $vojo;?>fr/son/vortoj/filino.mp3" class="sm2_button"></a> <span class="eo">filino</span> : fille</p>
			</div>
		</fieldset>

		<?php 
		} // fin section 
		if ($section=="3") {
		?>
		
		<p class="parto">Vous avez sûrement déjà entendu parler du complément d’objet direct (ou C.O.D.). Par exemple, dans la phrase&nbsp;:<br>
			&emsp;<b>Elle lit un livre.</b><br>
			si vous posez la question <em>Elle lit <u>quoi</u>&nbsp;?</em>, la réponse est <em>un livre</em>. Ici, <em>un livre</em> est le <b>complément d’objet direct</b>, c’est <b><u>l’objet sur lequel s’applique l’action</u></b>.</p>
			<p>De la même façon, dans la phrase&nbsp;:<br>
			&emsp;<b>Je conduis la voiture de mon père.</b><br>
			<em>la voiture de mon père</em> est le complément d’objet direct. <em>Je conduis <u>quoi</u>&nbsp;? La voiture de mon père</em>.
		</p>
		
		<p class="parto">En espéranto, on utilise la terminaison <b>n</b> pour indiquer le complément d’objet direct&nbsp;: on ajoute alors ce <b>n</b> à la fin des noms, des adjectifs et des pronoms. Par exemple&nbsp;:</p>
			
		<div class="vortlisto row">
			<p class="col s6">
				<a href="<?php echo $vojo;?>fr/son/frazoj/l02-1.mp3" class="sm2_button"></a>
				<span class="eo">Mi sukeras la varma<b>n</b> kafo<b>n</b>.</span></p>
			<p class="col s6">Je sucre le café chaud.</p>
		</div>
		
		<p class="rimarko"><strong>REMARQUE :</strong> 
		Prononcez bien le <b>n</b> final&nbsp;:	<span class="eo">belan</span> rime avec <em>Anne</em> et et <span class="eo">libron</span> avec <em>tonne</em>.</p>
		
		<p>Au pluriel, la terminaison <b>n</b> se place après la terminaison <b>j</b> du pluriel&nbsp;: </p>
		<div class="vortlisto row">
			<p class="col s6">
				<a href="<?php echo $vojo;?>fr/son/frazoj/l02-2.mp3" class="sm2_button"></a>
				<span class="eo">Ni sukeras la varmaj<b>n</b> kafoj<b>n</b>.</span></p>
			<p class="col s6">Nous sucrons les cafés chauds.</p>
		</div>

		<p class="parto">En français, il n’y a pas de terminaison pour marquer le complément d’objet direct. C’est l’ordre des mots qui indique le complément d’objet direct, l’ordre normal de la phrase étant SUJET – VERBE – COMPLÉMENT.</p>
		<p> En espéranto, l’ordre des mots est plus libre, et la terminaison <b>n</b> permet alors d’identifier le complément d’objet direct.</p>
		
		<p class="rimarko">C’est le même principe que dans des langues telles que l’allemand, le polonais, le russe ou le latin, pour n’en citer que quelques-unes.</p>
		<p>On parle alors d’<b>accusatif</b>.</p>
		
		<p class="parto">Voici un exemple montrant la souplesse qu’apporte l’utilisation de l’accusatif pour indiquer le complément d’objet direct&nbsp;:</p>
		<div class="row">
			<p class="col s12"><span class="eo">mi vidas li<b>n</b> = li<b>n</b> mi vidas</span>&nbsp;: je le vois</p>
			<p class="col s11 offset-s1">je vois <em>quoi</em>&nbsp;? <em>lui</em> = C.O.D. marqué ici par l’accusatif (-<b>n</b>)</p>
		</div>
		<div class="row">
			<p class="col s12"><span class="eo">mi<b>n</b> li vidas = li vidas mi<b>n</b></span>&nbsp;: il me voit</p>
			<p class="col s11 offset-s1">il voit <em>quoi (ou qui)</em>&nbsp;? <em>me (=moi)</em> = C.O.D. marqué ici par l’accusatif (-<b>n</b>)</p>
		</div>
		
		<p>Vous aurez sûrement remarqué dans ce dernier exemple que le pronom <em>je</em> prend une autre forme lorsqu’il est complément d’objet direct et devient <em>me</em>. Donc même en français, on trouve pour les pronoms des formes différentes selon qu’on les emploie comme sujet ou comme complément d’objet direct. En espéranto, cette forme est régulière&nbsp;: pour les pronoms, comme pour les noms, on ajoute simplement la terminaison <b>n</b> et donc <span class="eo">li</span> devient <span class="eo">li<b>n</b></span> et <span class="eo">mi</span> devient <span class="eo">mi<b>n</b></span>.</p>
		
		<p class="parto"><strong>ATTENTION</strong> : Le verbe <i>être</i> n’a jamais de complément d’objet direct, donc on
		n’utilise pas l’accusatif. On dit donc par exemple&nbsp;:</p>
		<div class="row">
			<p class="col s12"><span class="eo">Mi estas vir<u>o</u>.</span></p>
			<p class="col s12"><span class="eo">Li estas instruist<u>o</u>.</span></p>
		</div>
		
		<p>En effet, le verbe être est un verbe d’état&nbsp;: il «relie», il «décrit» ce qui vient ensuite. Ce qui vient ensuite n’est pas le résultat d’une action comme <em>lire</em> ou <em>conduire</em>, il se contente de décrire ce qui <em>est</em>. Un verbe d’état n’a pas/ne peut pas avoir de complément d’objet direct.</p>
		<p><span class="eo">Li estas instruisto.</span> équivaut à : <span class="eo">Li</span> = <span class="eo">instruisto</span>.</p>
		
		<p>Dans cette phrase, <span class="eo">li</span> est le <b>sujet</b> et <span class="eo">instruisto</span> est l’<b>attribut du sujet</b>.</p>

		<p class="parto">Il existe un petit groupe  de verbes d’état, après lesquels on ne met donc pas l’accusatif&nbsp;: <span class="eo">esti</span> (être), <span class="eo">resti</span> (rester), <span class="eo">ŝajni</span> (sembler), <span class="eo">aspekti</span> (paraître).</p>
		
		<p>Exemples&nbsp;:</p>
		<div class="row">
			<p class="col s12 m6"><span class="eo">La vetero ŝajnas bela.</span>&nbsp;: Le temps semble beau.</p>
			<p class="col s11 offset-s1 m6">→ verbe d’<b>état</b> : ŝajni</p>
			<p class="col s12 m6"><span class="eo">Ŝi aspektas granda.</span>&nbsp;: Elle paraît grande.</p>
			<p class="col s11 offset-s1 m6">→ verbe d’<b>état</b> : aspekti</p>
		</div>

		<p>Notez bien la différence entre&nbsp;:</p>
		<div class="row">
			<p class="col s12 m6"><span class="eo">Ili estas najbaroj.</span>&nbsp;: Ils sont voisins.</p>
			<p class="col s11 offset-s1 m6">→ verbe d’<b>état</b> : esti</p>
		</div>
		<p>et :</p>
		<div class="row">
			<p class="col s12"><span class="eo">Li rigardas la najbaro<b>n</b>.</span>&nbsp;: Il regarde le voisin.</p>
			<p class="col s11 offset-s1">→ verbe d’<b>action</b>&nbsp;: rigardi, donc ici <span class="eo">najbaro</span> est C.O.D. et on le met à l’accusatif.</p>
		</div>
		
		<h2>C’est à vous&nbsp;!</h2>
		<p class="parto">Pour chaque phrase, indiquez à quel endroit vous mettriez l’accusatif si vous deviez la traduire en espéranto&nbsp;:</p>
			
			<?php
			QCM(
				array(
					array(
						"question"=>"Il mange du poisson.",
						"propositions"=>array("il", "du poisson", "il n’y a pas besoin d’accusatif"),
						"indices"=>array("","",""),
						"reponse"=>2
					),
					array(
						"question"=>"Les enfants apprennent leurs leçons.",
						"propositions"=>array("les enfants", "leurs leçons", "il n’y a pas besoin d’accusatif"),
						"indices"=>array("","",""),
						"reponse"=>2
					),
					array(
						"question"=>"Mon frère est informaticien.",
						"propositions"=>array("mon frère", "informaticien", "il n’y a pas besoin d’accusatif"),
						"indices"=>array("","",""),
						"reponse"=>3
					),
					array(
						"question"=>"Mes parents mangent les restes d’hier soir.",
						"propositions"=>array("mes parents", "les restes", "les restes d’hier soir", "il n’y a pas besoin d’accusatif"),
						"indices"=>array("",",","",""),
						"reponse"=>3
					),
					array(
						"question"=>"Il promène le chien.",
						"propositions"=>array("il", "le chien", "il n’y a pas besoin d’accusatif"),
						"indices"=>array("","",""),
						"reponse"=>2
					),
					array(
						"question"=>"Il se promène le matin.",
						"propositions"=>array("il", "le matin", "il n’y a pas besoin d’accusatif"),
						"indices"=>array("","",""),
						"reponse"=>3
					),
				)
			);
		?>
		
		<?php 
		} // fin section
		if ($section=="4") {
		?>
		
		<p class="parto">Il existe d’autres compléments, tels que les compléments de temps, de lieu, de manière, etc. Ils sont généralement introduits par une préposition. Dans la première leçon, vous avez déjà vu la préposition <span class="eo">en</span>, qui sert à introduire un complément de lieu.</p>
		<p>Exemples :</p>
		<div class="vortlisto row">
			<p class="col s6"><a href="<?php echo $vojo;?>fr/son/frazoj/aleks-logxas.mp3" class="sm2_button"></a> <span class="eo">Aleks loĝas <b>en</b> Francujo.</span></p>
			<p class="col s6">Alex habite en France.</p>
			<p class="col s6"><a href="<?php echo $vojo;?>fr/son/frazoj/estas-sukero.mp3" class="sm2_button"></a> <span class="eo">Estas sukero <b>en</b> via kafo.</span></p><p class="col s6">Il y a du sucre dans ton café.</p>
		</div>
		
		<p class="rimarko">Notez que <span class="eo">estas</span>, employé sans sujet en début de phrase, comme dans l’exemple précédent, se traduit généralement par <em>il y a</em>. Nous aurons l’occasion d’y revenir dans une autre leçon.</p>
		<p class="parto">Voici quelques autres prépositions permettant d’introduire un complément de lieu&nbsp;:</p>
		
		<table class="retrait striped bordered">
			<tr><td class="eo">antaŭ</td><td>avant, devant</td></tr>
			<tr><td class="eo">sub</td><td>sous, en-dessous de</td></tr>
			<tr><td class="eo">sur</td><td>sur, au-dessus de (avec contact)</td></tr>
			<tr><td class="eo">super</td><td>au-dessus de, par-dessus (sans contact)</td></tr>
		</table>

		<table class="framed centered">
			<tr>
				<td>
					<img class="responsive-img" src="<?=$vojo?>fr/cge/bildoj/birdo-antaux-benko.jpg">
					<span class="eo">La birdo estas <b>antaŭ</b> la benko.</span>
				</td>
				<td>
					<img class="responsive-img" src="<?=$vojo?>fr/cge/bildoj/birdo-sub-benko.jpg">
					<span class="eo">La birdo estas <b>sub</b> la benko.</span>
				</td>
			</tr>
			<tr>
				<td>
					<img class="responsive-img" src="<?=$vojo?>fr/cge/bildoj/birdo-sur-benko.jpg">
					<span class="eo">La birdo estas <b>sur</b> la benko.</span>
				</td>
				<td>
					<img class="responsive-img" src="<?=$vojo?>fr/cge/bildoj/birdo-super-benko.jpg">
					<span class="eo">La birdo estas <b>super</b> la benko.</span>
				</td>
			</tr>
		</table>

		<p>Exemples :</p>
		<div class="vortlisto row">
			<p class="col s6"><a href="<?php echo $vojo;?>fr/son/frazoj/la-pano-estas-sur.mp3" class="sm2_button"></a> <span class="eo">La pano estas <b>sur</b> la tablo.</span></p>
			<p class="col s6">Le pain est sur la table.</p>
			<p class="col s6"><a href="<?php echo $vojo;?>fr/son/frazoj/la-kato-dormas.mp3" class="sm2_button"></a> <span class="eo">La kato dormas <b>sub</b> la tablo.</span></p>
			<p class="col s6">Le chat dort sous la table.</p>
			<p class="col s6"><a href="<?php echo $vojo;?>fr/son/frazoj/ni-vidas-la-sunon.mp3" class="sm2_button"></a> <span class="eo">Ni vidas la sunon <b>super</b> la arboj.</span></p>
			<p class="col s6">Nous voyons le soleil par-dessus les arbres.</p>
			<p class="col s6"><a href="<?php echo $vojo;?>fr/son/frazoj/estas-floroj.mp3" class="sm2_button"></a> <span class="eo">Estas floroj <b>antaŭ</b> la domo.</span></p>
			<p class="col s6">Il y a des fleurs devant la maison.</p>
		</div>
		
		<?php 
		} // fin section 4
		if ($section=="5") {
		?>
		<div class="row">
			<p class="col s6 m3 center-align"><img class="responsive-img" src="<?=$vojo?>fr/cge/bildoj/birdo-maro.jpg"><br>-1-</p>
			<p class="col s6 m3 center-align"><img class="responsive-img" src="<?=$vojo?>fr/cge/bildoj/bicikloj-domo.jpg"><br>-2-</p>
			<p class="col s6 m3 center-align"><img class="responsive-img" src="<?=$vojo?>fr/cge/bildoj/promeni-pluvo.jpg"><br>-3-</span></p>
			<p class="col s6 m3 center-align"><img class="responsive-img" src="<?=$vojo?>fr/cge/bildoj/libroj-tablo.jpg"><br>-4-</p>
		</div>
		
			<?php 
				getEkzercon(5,$persono_id);
			?>
		
		<fieldset class="vortoj">
			<legend>VOCABULAIRE À RETENIR</legend>
			<div>
				<?php if ($persono) { ?>
				<p class="eo eta">Ces mots seront automatiquement ajoutés à votre vocabulaire à réviser lorsque vous aurez terminé cette section. Le nombre de mots à réviser sera indiqué sur le bouton affiché au-dessus du sommaire.</p>
				<?php } ?>
			</div>
			<div class="vortlisto row">
				<p class="col s6"><a href="<?php echo $vojo;?>fr/son/vortoj/akvo.mp3" class="sm2_button"></a><span class="eo">akvo</span> : eau</p>
				<p class="col s6"><a href="<?php echo $vojo;?>fr/son/vortoj/arbo.mp3" class="sm2_button"></a><span class="eo">arbo</span> : arbre</p>
				<p class="col s6"><a href="<?php echo $vojo;?>fr/son/vortoj/biciklo.mp3" class="sm2_button"></a><span class="eo">biciklo</span> : vélo</p>
				<p class="col s6"><a href="<?php echo $vojo;?>fr/son/vortoj/birdo.mp3" class="sm2_button"></a><span class="eo">birdo</span> : oiseau</p>
				<p class="col s6"><a href="<?php echo $vojo;?>fr/son/vortoj/domo.mp3" class="sm2_button"></a><span class="eo">domo</span> : maison</p>
				<p class="col s6"><a href="<?php echo $vojo;?>fr/son/vortoj/floro.mp3" class="sm2_button"></a><span class="eo">floro</span> : fleur</p>
				<p class="col s6"><a href="<?php echo $vojo;?>fr/son/vortoj/libro.mp3" class="sm2_button"></a><span class="eo">libro</span> : livre</p>
				<p class="col s6"><a href="<?php echo $vojo;?>fr/son/vortoj/pluvo.mp3" class="sm2_button"></a><span class="eo">pluvo</span> : pluie</p>
				<p class="col s6"><a href="<?php echo $vojo;?>fr/son/vortoj/suno.mp3" class="sm2_button"></a><span class="eo">suno</span> : soleil</p>
				<p class="col s6"><a href="<?php echo $vojo;?>fr/son/vortoj/tablo.mp3" class="sm2_button"></a><span class="eo">tablo</span> : table</p>
				<p class="col s6"><a href="<?php echo $vojo;?>fr/son/vortoj/vidi.mp3" class="sm2_button"></a><span class="eo">vidi</span> : voir</p>
				<p class="col s6"><a href="<?php echo $vojo;?>fr/son/vortoj/promeni.mp3" class="sm2_button"></a><span class="eo">promeni</span> : se promener</p>
				<p class="col s12 m6"><a href="<?php echo $vojo;?>fr/son/vortoj/flugi.mp3" class="sm2_button"></a><span class="eo">flugi</span> : voler (oiseau, avion, etc.)</p>
			</div>
		</fieldset>

		<?php 
		} // fin section 5
		if ($section=="6") {
		?>
		
		<p class="parto">Le suffixe <b>-in</b> vous a déjà permis d’augmenter votre vocabulaire en
		doublant le nombre d’êtres vivants sexués que vous êtes capable de nommer.
		Quand vous saurez dire <em>cheval</em>, <em>bélier</em>, <em>souris mâle</em>,
		<em>acteur</em>, etc. vous saurez également dire <em>jument</em>,
		<em>brebis</em>, <em>souris femelle</em>, <em>actrice</em>, etc. </p>
		
		<p class="parto">Le préfixe <b>mal-</b> fera de même en vous permettant de connaître le
		contraire des mots auxquels il s’accole. Quand vous aurez assimilé
		<em>aimer</em>, <em>beau</em>, <em>gauche</em>, <em>vrai</em>, etc. vous saurez
		dire aussi <em>détester</em>, <em>laid</em>, <em>droite</em>, <em>faux</em>, etc.</p>

		<div class="vortlisto row">
			<p class="col s6"><a href="<?php echo $vojo;?>fr/son/vortoj/amiko.mp3" class="sm2_button"></a> <span class="eo">amiko</span>&nbsp;: ami</p>
			<p class="col s6"><a href="<?php echo $vojo;?>fr/son/vortoj/malamiko.mp3" class="sm2_button"></a> <span class="eo">malamiko</span>&nbsp;: ennemi</p>
			<p class="col s6"><a href="<?php echo $vojo;?>fr/son/vortoj/bela.mp3" class="sm2_button"></a> <span class="eo">bela</span>&nbsp;: beau, belle</p>
			<p class="col s6"><a href="<?php echo $vojo;?>fr/son/vortoj/malbela.mp3" class="sm2_button"></a> <span class="eo">malbela</span>&nbsp;: laid(e)</p>
			<p class="col s6"><a href="<?php echo $vojo;?>fr/son/vortoj/nova.mp3" class="sm2_button"></a> <span class="eo">nova</span>&nbsp;: nouveau, nouvelle</p>
			<p class="col s6"><a href="<?php echo $vojo;?>fr/son/vortoj/malnova.mp3" class="sm2_button"></a> <span class="eo">malnova</span>&nbsp;: ancien(ne), vieux, vieille</p>
		</div>
	
		<fieldset class="vortoj">
			<legend>VOCABULAIRE À RETENIR</legend>
			<div>
				<?php if ($persono) { ?>
				<p class="eo eta">Ces mots seront automatiquement ajoutés à votre vocabulaire à réviser lorsque vous aurez terminé d'étudier cette section. Le nombre de mots à réviser sera indiqué sur le bouton affiché au-dessus du sommaire.</p>
				<?php } ?>
			</div>
			<div class="vortlisto row">
				<p class="col s12 m6"><a href="<?php echo $vojo;?>fr/son/vortoj/malamiko.mp3" class="sm2_button"></a> <span class="eo">malamiko</span> : ennemi</p>
				<p class="col s12 m6"><a href="<?php echo $vojo;?>fr/son/vortoj/malbela.mp3" class="sm2_button"></a> <span class="eo">malbela</span> : laid(e)</p>
				<p class="col s12 m6"><a href="<?php echo $vojo;?>fr/son/vortoj/malnova.mp3" class="sm2_button"></a> <span class="eo">malnova</span> : ancien(ne), vieux, vieille</p>
			</div>
		</fieldset>

		<?php 
		} // fin section
		if ($section=="7") {
		?>
		
		<p class="parto">Pour mettre une phrase à la <b>forme négative</b> il suffit d’ajouter le mot
		<b>ne</b> avant le verbe.</p>
		
		<div class="row">
			<p class="col s6"><a href="<?php echo $vojo;?>fr/son/frazoj/l02-3.mp3" class="sm2_button"></a>
				<span class="eo">Mi <b>ne</b> sukeras la kafon.</span></p>
			<p class="col s6">Je <b>ne</b> sucre <b>pas</b> le café.</p>
		</div>

		<p class="rimarko"><strong>REMARQUE</strong>&nbsp;: 
		Prononcez bien <span class="eo">ne</span> entre <em>né</em> et <em>nè</em>.
		</p>
		
		<p class="parto">D'autres mots peuvent aussi être utilisés pour donner un sens négatif à la phrase. En voici quelques-uns&nbsp;:</p>
		
		<div class="vortlisto row">
			<p class="col s6 m3"><span class="eo">neniam</span>&nbsp;: jamais</p>
			<p class="col s6 m3"><span class="eo">neniu</span>&nbsp;: personne</p>
			<p class="col s6 m3"><span class="eo">nenio</span>&nbsp;: rien</p>
			<p class="col s6 m3"><span class="eo">nenie</span>&nbsp;: nulle part</p>
			<hr>
			<p class="col s12 m6"><a href="<?php echo $vojo;?>fr/son/frazoj/mi-neniam-sukeras.mp3" class="sm2_button"></a> <span class="eo">Mi <b>neniam</b> sukeras mian kafon.</span></p><p class="col s11 m6 offset-s1">Je <b>ne</b> sucre <b>jamais</b> mon café.</p>
			<p class="col s12 m6"><a href="<?php echo $vojo;?>fr/son/frazoj/kiu-venis.mp3" class="sm2_button"></a> <span class="eo">Kiu venis? – <b>Neniu</b> venis.</span></p><p class="col s11 m6 offset-s1">Qui est venu ? – <b>Personne</b> n’est venu.</p>
			<p class="col s12 m6"><a href="<?php echo $vojo;?>fr/son/frazoj/kio-estas-en-la-taso.mp3" class="sm2_button"></a> <span class="eo">Kio estas en la taso? – Estas <b>nenio</b>.</span></p><p class="col s11 m6 offset-s1">Qu’y-a-t-il dans la tasse ? – Il n’y a <b>rien</b>.</p>
			<p class="col s12 m6"><a href="<?php echo $vojo;?>fr/son/frazoj/kie-estas-la-kato.mp3" class="sm2_button"></a> <span class="eo">Kie estas la kato? Mi vidas ĝin <b>nenie</b>!</span></p><p class="col s11 m6 offset-s1">Où est le chat ? Je ne le vois <b>nulle part</b>&nbsp;!</p>
		</div>

		<p>Dans les exemples précédents, vous pouvez remarquer que les mots se répondant ont la même terminaison&nbsp;:<br/>
			<span class="eo">ki<u>u</u></span> (qui) / <span class="eo">neni<u>u</u></span> (personne)<br/>
			<span class="eo">ki<u>o</u></span> (quoi, que) / <span class="eo">neni<u>o</u></span> (rien)<br/>
			<span class="eo">ki<u>e</u></span> (où) / <span class="eo">neni<u>e</u></span> (nulle part)
		</p>
		<p>Vous pouvez aussi remarquer que les mots qui ont la même fonction ont le même préfixe : interrogatif <span class="eo">ki-</span> et négatif  <span class="eo">neni-</span>. Vous commencez à avoir l'habitude avec l'espéranto, ce n'est évidemment pas un hasard…</p>

		<h3>Vos premiers corrélatifs</h3>
		<p>Ces petits mots,<span class="eo">kiu</span>, <span class="eo">kie</span>, <span class="eo">neniam</span>, etc. font partie d’un groupe spécifique en espéranto&nbsp;: les <strong>corrélatifs</strong>, ou <span class="eo">tabel-vortoj</span> (de <span class="eo">tabelo</span>&nbsp;: tableau, et <span class="eo">vortoj</span>&nbsp;: mots) car on peut les ranger de manière logique dans un tableau. Ce tableau contient en tout 45 mots&nbsp;; mais pas d'inquiétude, nous vous les présenterons au fur et à mesure des leçons. Vous découvrirez alors comment leur construction sans exception facilite leur apprentissage.
		</p>
		<div class="korelativoj">
			<table class="highlight">
				<thead>
					<tr>
						<th></th>
						<th>Individualité<br /><span class="eo">-U</span></th>
						<th>Chose<br /><span class="eo">-O</span></th>
						<th>Lieu<br /><span class="eo">-E</span></th>
						<th>Temps<br /><span class="eo">-AM</span></th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th>Interrogatif<br /><span class="eo">KI-</span></th>
						<td><span class="eo">kiu</span><br />qui&nbsp;? lequel&nbsp;?</td>
						<td><span class="eo">kio</span><br />que&nbsp;? quoi&nbsp;?</td>
						<td><span class="eo">kie</span><br />où&nbsp;?</td>
						<td><span class="eo">kiam</span><br />quand&nbsp;?</td>
					</tr>
					<tr>
						<th>Négatif<br /><span class="eo">NENI-</span></th>
						<td><span class="eo">neniu</span><br />personne</td>
						<td><span class="eo">nenio</span><br />rien</td>
						<td><span class="eo">nenie</span><br />nulle part</td>
						<td><span class="eo">neniam</span><br />jamais</td>
					</tr>
				</tbody>
			</table>
		</div>
		<p>
			Vous remarquerez que de par leur construction régulière, vous venez par la même occasion d’apprendre à poser un nouveau type de question grâce à <span class="eo">kiam</span>&nbsp;!
		</p>

		<?php
		} // fin section
		if ($section=="8") {
		?>

		<p class="parto">Voici maintenant un peu de vocabulaire.</p>
		<?php if ($persono) { ?>
		<p class="eo eta">Ces mots seront automatiquement ajoutés à votre vocabulaire à réviser lorsque vous aurez terminé d'étudier cette section.</p>
		<?php } ?>

		<fieldset class="vortoj">
			<div class="vortlisto row">
				<div class="col s12 m4">
					<p><a href="<?php echo $vojo;?>fr/son/vortoj/ami.mp3" class="sm2_button"></a> <span class="eo">ami</span>&nbsp;: aimer</p>
					<p><a href="<?php echo $vojo;?>fr/son/vortoj/fari.mp3" class="sm2_button"></a> <span class="eo">fari</span>&nbsp;: faire</p>
					<p><a href="<?php echo $vojo;?>fr/son/vortoj/forgesi.mp3" class="sm2_button"></a> <span class="eo">forgesi</span>&nbsp;: oublier</p>
					<p><a href="<?php echo $vojo;?>fr/son/vortoj/havi.mp3" class="sm2_button"></a> <span class="eo">havi</span>&nbsp;: avoir</p>
					<p><a href="<?php echo $vojo;?>fr/son/vortoj/kapti.mp3" class="sm2_button"></a> <span class="eo">kapti</span>&nbsp;: attraper</p>
					<p><a href="<?php echo $vojo;?>fr/son/vortoj/lavi.mp3" class="sm2_button"></a> <span class="eo">lavi</span>&nbsp;: laver</p>
					<p><a href="<?php echo $vojo;?>fr/son/vortoj/porti.mp3" class="sm2_button"></a> <span class="eo">porti</span>&nbsp;: porter</p>
					<p><a href="<?php echo $vojo;?>fr/son/vortoj/peti.mp3" class="sm2_button"></a> <span class="eo">peti</span>&nbsp;: demander</p>
				</div>
				<div class="col s12 m4">
					<p><a href="<?php echo $vojo;?>fr/son/vortoj/skribi.mp3" class="sm2_button"></a> <span class="eo">skribi</span>&nbsp;: écrire</p>
					<p><a href="<?php echo $vojo;?>fr/son/vortoj/sukeri.mp3" class="sm2_button"></a> <span class="eo">sukeri</span>&nbsp;: sucrer</p>
					<p><a href="<?php echo $vojo;?>fr/son/vortoj/trinki.mp3" class="sm2_button"></a> <span class="eo">trinki</span>&nbsp;: boire</p>
					<p><a href="<?php echo $vojo;?>fr/son/vortoj/renkonti.mp3" class="sm2_button"></a> <span class="eo">renkonti</span>&nbsp;: rencontrer</p>
					<p><a href="<?php echo $vojo;?>fr/son/vortoj/vendi.mp3" class="sm2_button"></a> <span class="eo">vendi</span>&nbsp;: vendre</p>
					<p><a href="<?php echo $vojo;?>fr/son/vortoj/amo.mp3" class="sm2_button"></a> <span class="eo">amo</span>&nbsp;: amour</p>
					<p><a href="<?php echo $vojo;?>fr/son/vortoj/kato.mp3" class="sm2_button"></a> <span class="eo">kato</span>&nbsp;: chat</p>
				</div>
				<div class="col s12 m4">
					
					<p><a href="<?php echo $vojo;?>fr/son/vortoj/butiko.mp3" class="sm2_button"></a> <span class="eo">butiko</span>&nbsp;: boutique</p>
					<p><a href="<?php echo $vojo;?>fr/son/vortoj/insekto.mp3" class="sm2_button"></a> <span class="eo">insekto</span>&nbsp;: insecte</p>
					<p><a href="<?php echo $vojo;?>fr/son/vortoj/limonado.mp3" class="sm2_button"></a> <span class="eo">limonado</span>&nbsp;: limonade</p>
					<p><a href="<?php echo $vojo;?>fr/son/vortoj/papero.mp3" class="sm2_button"></a> <span class="eo">papero</span>&nbsp;: papier</p>
					<p><a href="<?php echo $vojo;?>fr/son/vortoj/plumo.mp3" class="sm2_button"></a> <span class="eo">plumo</span>&nbsp;: plume</p>
					<p><a href="<?php echo $vojo;?>fr/son/vortoj/taso.mp3" class="sm2_button"></a> <span class="eo">taso</span>&nbsp;: tasse</p>
					<p><a href="<?php echo $vojo;?>fr/son/vortoj/pura.mp3" class="sm2_button"></a> <span class="eo">pura</span>&nbsp;: propre</p>
				</div>
			</div>
		</fieldset>

		<p class="rimarko"><strong>REMARQUE</strong> : 
		N’oubliez pas que vous connaissez aussi les féminins et les contraires
		des mots appris, quand ils sont possibles. Lisez les mots à haute voix
		en vous reportant aux indications de prononciation de la première
		leçon.</p>
		
		<p class="parto">Notez que tous les verbes se conjuguent exactement comme le verbe
		<span class="eo">esti</span> en changeant le <b>-i</b> final pour <b>-as</b> au présent,
		<b>-is</b> au passé et <b>-os</b> au futur. Ces trois temps simples nous
		suffiront pour le moment.</p>
		
		<p class="parto">Dans l’exemple suivant, vous remarquerez que certains petits mots employés en français ne se retrouvent pas en espéranto. Ils sont écrits ici entre crochets.</p>
			<div class="vortlisto row">
				<p class="col s12"><a href="<?php echo $vojo;?>fr/son/frazoj/mi-forgesis-trinki-akvon.mp3" class="sm2_button"></a> <span class="eo">Mi forgesis trinki akvon.</span>&nbsp;: J’ai oublié [de] boire [de l’] eau.</p>
			</div>
				 
		<?php 
		} // fin section
		if ($section=="9") {
		?>
			<p class="parto">Voici à nouveau un exercice de traduction. Comme vous l’avez vu dans la leçon précédente,
				ce type d’exercice permet de contrôler si vous avez bien assimilé le vocabulaire et les points grammaticaux vus dans la leçon.
				Avant de commencer à écrire votre réponse, réfléchissez bien au sens de la phrase et évitez de faire du mot à mot. 
				Rappelez-vous&nbsp;: une langue n’est pas le calque d’une autre langue&nbsp;!</p>
			</p>
			<?php 
				getEkzercon(6,$persono_id);
			?>
		
		<?php 
		} // fin section
		if ($section=="10") {
		?>
		
			<?php 
				getEkzercon(7,$persono_id);
			?>
	
		<?php 
		} // fin section
		if ($section=="11") {
		?>
			<?php 
				getEkzercon(8,$persono_id);
			?>
	<?php 
		} // fin section
		
	if ($section=="12") {
	?>
	<p class="parto">Voici quelques expressions pour demander à quelqu’un comment il va. Apprenez-les par cœur dans un premier temps. Nous les reverrons par la suite.</p>
		<?php if ($persono) { ?>
		<p class="eo eta">Ces mots seront automatiquement ajoutés à votre vocabulaire à réviser lorsque vous aurez terminé d'étudier cette section.</p>
		<?php } ?>

		<fieldset class="vortoj">
			<legend>EXPRESSIONS À RETENIR</legend>
			<div class="vortlisto row">
				<p class="col s6"><a href="<?php echo $vojo;?>fr/son/frazoj/kiel-vi-fartas.mp3" class="sm2_button"></a> <span class="eo">Kiel vi fartas?</span></p><p class="col s6">Comment allez-vous&nbsp;?</p>
				<p class="col s5 offset-s1"><a href="<?php echo $vojo;?>fr/son/frazoj/bone-kaj-vi.mp3" class="sm2_button"></a> <span class="eo">– Bone. Kaj vi ?</span></p><p class="col s6">– Bien. Et vous&nbsp;?</p>
				<p class="col s5 offset-s1"><a href="<?php echo $vojo;?>fr/son/vortoj/bonege.mp3" class="sm2_button"></a> <span class="eo">– Bonege.</span></p><p class="col s6">– Parfaitement bien.</p>
				<p class="col s5 offset-s1"><a href="<?php echo $vojo;?>fr/son/frazoj/suficxe-bone.mp3" class="sm2_button"></a> <span class="eo">– Sufiĉe bone.</span></p><p class="col s6">– Assez bien. (ça va)</p>
				<p class="col s5 offset-s1"><a href="<?php echo $vojo;?>fr/son/frazoj/ne-trop-bone.mp3" class="sm2_button"></a> <span class="eo">– Ne tro bone.</span></p><p class="col s6">– Pas trop bien.</p>
			</div>
		</fieldset>
		
		<p class="parto"><b>Kiel? Tiel!</b></p>
		
		<p>Comme dans l’exemple ci-dessus, <b>kiel</b> permet d’interroger sur la manière d’être ou la manière de faire quelque chose. Vous vous souvenez peut-être que dans la leçon précédente (<a href="lec01.php?section=11">section 1.11</a>), nous vous avions présenté cette phrase pour demander comment dire un certain mot en espéranto&nbsp;:<br><span class="eo">Kiel oni diras … en Esperanto?<span>&nbsp;: Comment dit-on … en espéranto&nbsp;?</p>
		
		<p>À une question commençant par <b>kiel</b> on peut répondre par exemple en utilisant <b>tiel</b>.

		<p><b>Kiel</b> peut aussi être utilisé dans une comparaison.</p>
		
		<p>Exemples :</p>
		<div class="vortlisto row">
			<p class="col s6"><a href="<?php echo $vojo;?>fr/son/frazoj/kiel-vi-faras.mp3" class="sm2_button"></a> <span class="eo">Kiel vi faras?</span></p><p class="col s6">Comment faites-vous&nbsp;?</p>
			<p class="col s6"><a href="<?php echo $vojo;?>fr/son/frazoj/tiel.mp3" class="sm2_button"></a> <span class="eo">– Tiel!</span></p><p class="col s6">– Comme ça&nbsp;!</p>
			<p class="col s6"><a href="<?php echo $vojo;?>fr/son/frazoj/tiel-estas.mp3" class="sm2_button"></a> <span class="eo">Tiel estas.</span></p><p class="col s6">C’est ainsi.</p>
			<p class="col s6"><a href="<?php echo $vojo;?>fr/son/frazoj/sxi-skribas.mp3" class="sm2_button"></a> <span class="eo">Ŝi skribas kiel mia patrino.</span></p><p class="col s6">Elle écrit comme ma mère.</p>
		</div>

		<h3>Vous reprendrez bien un peu de corrélatifs ?</h3>
		<p>
			Vous avez peut-être reconnu la forme particulière de <span class="eo">kiel</span>. C’est effectivement une nouvelle famille de corrélatif, pour les questions de manière. Il se trouve que <span class="eo">tiel</span> est également un corrélatif, qui vous introduit le type démonstratif.
		</p>
		<div class="korelativoj">
			<table class="highlight">
				<thead>
					<tr>
						<th></th>
						<th>Individualité<br /><span class="eo">-U</span></th>
						<th>Chose<br /><span class="eo">-O</span></th>
						<th>Lieu<br /><span class="eo">-E</span></th>
						<th>Temps<br /><span class="eo">-AM</span></th>
						<th>Manière<br /><span class="eo">-EL</span></th>
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
					</tr>
					<tr>
						<th>Négatif<br /><span class="eo">NENI-</span></th>
						<td><span class="eo">neniu</span><br />personne</td>
						<td><span class="eo">nenio</span><br />rien</td>
						<td><span class="eo">nenie</span><br />nulle part</td>
						<td><span class="eo">neniam</span><br />jamais</td>
						<td><span class="eo">neniel</span><br />impossible</td>
					</tr>
					<tr>
						<th>Démonstratif<br /><span class="eo">TI-</span></th>
						<td><span class="eo">tiu</span><br />celui-là,<br />celle-là</td>
						<td><span class="eo">tio</span><br />cela</td>
						<td><span class="eo">tie</span><br />là, là-bas</td>
						<td><span class="eo">tiam</span><br />à ce moment</td>
						<td><span class="eo">tiel</span><br />ainsi</td>
	
					</tr>
				</tbody>
			</table>
		</div>
		<p>
			Petit à petit, ce tableau se remplit et les conversations deviennent de plus en plus riches !
		</p>

		<?php
		} // fin section
		
	if ($section=="13") {
	?>
	<p>Voici un petit exercice de révision. Sélectionnez la réponse exacte en 
	cliquant sur le bouton associé. Si vous ne savez pas quelle réponse donner à une question, n’hésitez pas à relire le cours&nbsp;: toutes les réponses s’y trouvent&nbsp;!</p>



	<?php
QCM(
	array(
		array(
			"question"=>"Que signifient respectivement 'mala', 'malbona', 'malsana'&nbsp;?",
			"propositions"=>array("mal, mauvais, malade", "mauvais, mauvais, malade", "contraire, mauvais, malade"),
			"indices"=>array("","",""),
			"reponse"=>3
		),
		array(
			"question"=>"Que signifie 'malbelaj virinoj'&nbsp;?",
			"propositions"=>array("des hommes laids", "de belles femmes", "des femmes laides"),
			"indices"=>array("","",""),
			"reponse"=>3
		),
		array(
			"question"=>"Quel est le féminin pluriel de 'mia granda amiko'&nbsp;?",
			"propositions"=>array("miaj grandaj amikinoj", "mia granda amikinoj", "miaj grandinaj amikinoj"),
			"indices"=>array("","",""),
			"reponse"=>1
		),
		array(
			"question"=>"Traduisez 'la boutique est vieille'",
			"propositions"=>array("la butiko estas malbela", "la butiko estas malnovan","la butiko estas malnova"),
			"indices"=>array("","",""),
			"reponse"=>3
		),
		array(
			"question"=>"Traduisez 'je ne bois pas d’eau':",
			"propositions"=>array("mi maltrinkas akvon", "mi ne trinkas akvon", "mi trinkas ne akvon"),
			"indices"=>array("","",""),
			"reponse"=>2
		),
		array(
			"question"=>"Traduisez 'j’ai oublié la limonade' :",
			"propositions"=>array("mi petis limonadon", "mi havas forgesi la limonadon", "mi forgesis la limonadon"),
			"indices"=>array("","",""),
			"reponse"=>3
		),
		array(
			"question"=>"Quel est le complément d’objet direct dans 'mon frère boira de l’eau lundi'&nbsp;?",
			"propositions"=>array("mon frère", "de l’eau", "lundi"),
			"indices"=>array("","",""),
			"reponse"=>2
		),
		array(
			"question"=>"Quel est le complément d’objet direct dans 'que boira mon frère lundi'&nbsp;?",
			"propositions"=>array("que", "mon frère", "lundi"),
			"indices"=>array("","",""),
			"reponse"=>1
		),
		array(
			"question"=>"Quelle est la fonction de 'médecin' dans 'tu seras médecin'&nbsp;?",
			"propositions"=>array("sujet", "complément d’objet direct", "attribut du sujet"),
			"indices"=>array("","",""),
			"reponse"=>3
		)
	)
);
	?>
	<?php 
	} // fin section 
	if ($section=="14") {
		?>			
		<p>Résumons-nous.</p>
		<p>Vous avez maintenant appris à former le féminin de tout nom
		d’être vivant et le contraire de tout mot (nom, adjectif, verbe, etc.) pour
		peu que ceux-ci aient un sens. Vous avez constaté que tous les verbes se
		conjuguent comme le verbe <span class="eo">esti</span> que vous connaissiez déjà, et vous
		avez appris la structure <b>-a -o -as -an -on</b> qui vous permet
		d’exprimer l’action d’un sujet sur quelque chose ou quelqu’un d’autre. Pas
		mal, non&nbsp;?
		</p>
		<p>Vous pouvez maintenant envoyer vos exercices à votre correcteur&nbsp;!
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
