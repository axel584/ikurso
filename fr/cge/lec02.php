<?php
$titolo="2 (du)";
$leciono = 2;
$section=isset($_GET["section"])?$_GET["section"]:"1";
include "dlekkapo.inc.php";
?>

<div class="row">
	<article class="col s12 m10 l7 offset-m1 offset-l1">
				
		<section id="leciono-enhavo">
		<?php 
		getTitoloLecionero('CG',$leciono,$section);
		
		
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
			<p class="col s6"><span class="eo">viro</span> : homme (mâle)</p>
			<p class="col s6"><span class="eo">vir<b>in</b>o</span> : femme</p>
			<p class="col s6"><span class="eo">amiko</span> : ami</p>
			<p class="col s6"><span class="eo">amik<b>in</b>o</span> : amie</p>
			<p class="col s6"><span class="eo">filo</span> : fils</p>
			<p class="col s6"><span class="eo">fil<b>in</b>o</span> : fille</p>
		</div>
		
		<p>Lors de la première leçon nous avons vu qu’en espéranto les adjectifs
		s’accordent en nombre avec les noms auxquels ils se rapportent. Par contre, ils ne s’accordent jamais en genre.
		</p>
		<div class="vortlisto row">
			<p class="col s6"><span class="eo">la grandaj viroj</span> : les grands hommes</p>
			<p class="col s6"><span class="eo">la grandaj virinoj</span> : les grandes femmes</p>
		</div>
		
		<fieldset class="vortoj">
			<legend>VOCABULAIRE À RETENIR</legend>
			<div>
				<?php if ($persono) { ?>
				<p class="eo eta">Ces mots seront automatiquement ajoutés à votre vocabulaire à réviser lorsque vous aurez terminé d'étudier cette section. Le nombre de mots à réviser sera indiqué sur le bouton affiché au-dessus du sommaire.</p>
				<?php } ?>
			</div>
			<div class="vortlisto row">
				<p class="col s12 m4"><span class="eo">virino</span> : femme</p>
				<p class="col s12 m4"><span class="eo">amikino</span> : amie</p>
				<p class="col s12 m4"><span class="eo">filino</span> : fille</p>
			</div>
		</fieldset>

		<?php 
		} // fin section 
		if ($section=="3") {
		?>
		
		<p class="parto">Il existe une autre terminaison, bien pratique, qui nous permet de
		reconnaître le complément d’objet direct dans une phrase. Il s’agit de
		la terminaison <b>-n</b> que l’on ajoute à la fin des noms, pronoms
		et des adjectifs pour former le complément d’objet direct. On
		reconnaîtra donc le complément d’objet direct par sa terminaison <b>-n</b>
		que l’on nomme également <b>accusatif</b>.</p>
		
		<div class="vortlisto row">
			<p class="col s6">
				<a href="<?php echo $vojo;?>fr/son/l02-1.mp3" class="sm2_button"></a>
				<span class="eo">Mi sukeras la varma<b>n</b> kafo<b>n</b>.</span></p>
			<p class="col s6">Je sucre le café chaud.</p>
		</div>
		
		<p class="rimarko"><strong>REMARQUE :</strong> 
		Prononcez bien le n final sans nasaliser la voyelle précédente&nbsp;: 
		<span class="eo">varman</span> rime avec le mot français <em>Anne</em>, 
		et <span class="eo">kafon</span> avec <em>tonne</em>.</p>
		
		<p>Au pluriel : </p>
		<div class="vortlisto row">
			<p class="col s6"><a href="<?php echo $vojo;?>fr/son/l02-2.mp3" class="sm2_button"></a>
				<span class="eo">Ni sukeras la varmaj<b>n</b> kafoj<b>n</b>.</span></p>
			<p class="col s6">Nous sucrons les cafés chauds.</p>
		</div>

		<p class="rimarko"><strong>REMARQUE</strong> : </p>
		
		<ul>
			<li>Notez que la terminaison du pluriel vient avant celle de l’accusatif, qui
		elle-même vient toujours en dernier. Prononcez <span class="eo">varmajn</span> comme
		<span class="eo"><em><u>var</u>m-ail-ne</em></span> (e muet) et <span class="eo">kafojn</span> comme 
		<span class="eo"><em><u>ka</u>f-oï-ne</em></span> (e muet).</li>
		</ul>
		
		<p class="parto"><strong>ATTENTION</strong> : Avec le verbe <i>être</i> qui n’a jamais de complément d’objet direct, on
		n’utilise pas l’accusatif, car le verbe <i>être</i> implique que le sujet et
		l’attribut sont « équivalents ».</p>
		<p><span class="eo">Ŝi estas bela.</span> équivaut à : <span class="eo">Ŝi = bela</span>.</p>
		<p><span class="eo">Li estas instruisto.</span> équivaut à : <span class="eo">Li = instruisto</span>.</p>

		
		
		<?php 
		} // fin section
		if ($section=="4") {
		?>
		
		<p class="parto">Il existe d’autres compléments, tels que les compléments de temps, de lieu, de manière, etc. Ils sont généralement introduits par une préposition. Dans la première leçon, vous avez déjà vu la préposition <span class="eo">en</span>, qui sert à introduire un complément de lieu.</p>
		<p>Exemples :</p>
		<div class="vortlisto row">
			<p class="col s6"><span class="eo">Aleks loĝas <b>en</b> Francujo.</span></p>
			<p class="col s6">Alex habite en France.</p>
			<p class="col s6">Estas sukero <b>en</b> via kafo.</p><p>Il y a du sucre dans ton café.</p>
		</div>
		
		<p class="rimarko">Notez que <span class="eo">estas</span>, employé sans sujet en début de phrase, comme dans l’exemple précédent, se traduit généralement par <em>il y a</em>. Nous aurons l’occasion d’y revenir dans une autre leçon.</p>
		<p class="parto">Voici quelques autres prépositions permettant d’introduire un complément de lieu&nbsp;:</p>
		
		<table class="retrait striped bordered">
			<tr><td class="eo">antaŭ</td><td>- avant, devant</td></tr>
			<tr><td class="eo">sub</td><td>- sous, en-dessous de</td></tr>
			<tr><td class="eo">sur</td><td>- sur, au-dessus de (en touchant l’objet)</td></tr>
			<tr><td class="eo">super</td><td>- au-dessus de, par-dessus</td></tr>
		</table>

		<p>Exemples :</p>
		<div class="vortlisto row">
			<p class="col s6"><span class="eo">La pano estas <b>sur</b> la tablo.</span></p>
			<p class="col s6">Le pain est sur la table.</p>
			<p class="col s6"><span class="eo">La kato dormas <b>sub</b> la tablo.</span></p>
			<p class="col s6">Le chat dort sous la table.</p>
			<p class="col s6"><span class="eo">Mi vidas la sunon <b>super</b> la arboj.</span></p>
			<p class="col s6">Je vois le soleil par-dessus les arbres.</p>
			<p class="col s6"><span class="eo">Estas floroj <b>antaŭ</b> la domo.</span></p>
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
		
		<fieldset class="ekzerco">
			<legend><strong>EXERCICE</strong> : En vous aidant des images, recopiez chaque phrase en complétant avec la préposition qui convient.</legend>
			<input type="hidden" name="013_cxap02.1" value="En vous aidant des images, recopiez chaque phrase en complétant avec la préposition qui convient.">
			<p>Utilisez une fois chacune des prépositions suivantes&nbsp;: <b>antaŭ</b>, <b>sur</b>, <b>super</b>, <b>sub</b>.<br>
			Le vocabulaire nouveau se trouve au bas de cette page.</p>
			<div class="tasko">
			<hr>
			<?php 	
				$demandoj=array (
				1 => "La birdo flugas ... la akvo.",
				2 => "La bicikloj estas ... la domo.",
				3 => "Ili promenas ... la pluvo.",
				4 => "La libroj estas ... la tablo.",
				);
				ekzerco(True, 1);
			?>
			</div>
		</fieldset>
		
		<fieldset class="vortoj">
			<legend>VOCABULAIRE À RETENIR</legend>
			<div>
				<?php if ($persono) { ?>
				<p class="eo eta">Ces mots seront automatiquement ajoutés à votre vocabulaire à réviser lorsque vous aurez terminé cette section. Le nombre de mots à réviser sera indiqué sur le bouton affiché au-dessus du sommaire.</p>
				<?php } ?>
			</div>
			<div class="vortlisto row">
				<p class="col s6"><span class="eo">akvo</span> : eau</p>
				<p class="col s6"><span class="eo">arbo</span> : arbre</p>
				<p class="col s6"><span class="eo">biciklo</span> : vélo</p>
				<p class="col s6"><span class="eo">birdo</span> : oiseau</p>
				<p class="col s6"><span class="eo">domo</span> : maison</p>
				<p class="col s6"><span class="eo">floro</span> : fleur</p>
				<p class="col s6"><span class="eo">libro</span> : livre</p>
				<p class="col s6"><span class="eo">pluvo</span> : pluie</p>
				<p class="col s6"><span class="eo">suno</span> : soleil</p>
				<p class="col s6"><span class="eo">tablo</span> : table</p>
				<p class="col s6"><span class="eo">vidi</span> : voir</p>
				<p class="col s6"><span class="eo">promeni</span> : se promener</p>
				<p class="col s12 m6"><span class="eo">flugi</span> : voler (oiseau, avion, etc.)</p>
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
			<p class="col s6"><span class="eo">amiko</span> : ami</p>
			<p class="col s6"><span class="eo">malamiko</span> : ennemi</p>
			<p class="col s6"><span class="eo">bela</span> : beau, belle</p>
			<p class="col s6"><span class="eo">malbela</span> : laid(e)</p>
			<p class="col s6"><span class="eo">nova</span> : nouveau, nouvelle</p>
			<p class="col s6"><span class="eo">malnova</span> : ancien(ne), vieux, vieille</p>
		</div>
	
		<fieldset class="vortoj">
			<legend>VOCABULAIRE À RETENIR</legend>
			<div>
				<?php if ($persono) { ?>
				<p class="eo eta">Ces mots seront automatiquement ajoutés à votre vocabulaire à réviser lorsque vous aurez terminé d'étudier cette section. Le nombre de mots à réviser sera indiqué sur le bouton affiché au-dessus du sommaire.</p>
				<?php } ?>
			</div>
			<div class="vortlisto row">
				<p class="col s12 m4"><span class="eo">malamiko</span> : ennemi</p>
				<p class="col s12 m4"><span class="eo">malbela</span> : laid(e)</p>
				<p class="col s12 m4"><span class="eo">malnova</span> : ancien(ne), vieux, vieill</p>
			</div>
		</fieldset>

		<?php 
		} // fin section
		if ($section=="7") {
		?>
		
		<p class="parto">Pour mettre une phrase à la <b>forme négative</b> il suffit d’ajouter le mot
		<b>ne</b> avant le verbe.</p>
		
		<div class="row">
			<p class="col s6"><a href="<?php echo $vojo;?>fr/son/l02-3.mp3" class="sm2_button"></a>
				<span class="eo">Mi <b>ne</b> sukeras la kafon.</span></p>
			<p class="col s6">Je <b>ne</b> sucre <b>pas</b> le café.</p>
		</div>

		<p class="rimarko"><strong>REMARQUE</strong> : 
		Prononcez bien <span class="eo">ne</span> entre <em>né</em> et <em>nè</em>.
		</p>
		
		<p class="parto">D'autres mots peuvent aussi être utilisés pour donner un sens négatif à la phrase.</p>
		
		<div class="vortlisto row">
			<p class="col s6 m3"><span class="eo">neniam</span> : jamais</p>
			<p class="col s6 m3"><span class="eo">neniu</span> : personne</p>
			<p class="col s6 m3"><span class="eo">nenio</span> : rien</p>
			<p class="col s6 m3"><span class="eo">nenie</span> : nulle part</p>
			<hr>
			<p class="col s12 m6"><span class="eo">Mi <b>neniam</b> sukeras mian kafon.</span></p><p class="col s11 m6 offset-s1">Je ne sucre jamais mon café.</p>
			<p class="col s12 m6"><span class="eo">Kiu venis? – <b>Neniu</b> venis.</span></p><p class="col s11 m6 offset-s1">Qui est venu ? – Personne n’est venu.</p>
			<p class="col s12 m6"><span class="eo">Kio estas en la taso? – Estas <b>nenio</b>.</span></p><p class="col s11 m6 offset-s1">Qu’y-a-t-il dans la tasse ? – Il n’y a rien.</p>
			<p class="col s12 m6"><span class="eo">Kie estas la kato? Mi vidas ĝin <b>nenie</b>!</span></p><p class="col s11 m6 offset-s1">Où est le chat ? Je ne le vois nulle part&nbsp;!</p>
		</div>

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
					<p><span class="eo">ami</span> : aimer</p>
					<p><span class="eo">fari</span> : faire</p>
					<p><span class="eo">forgesi</span> : oublier</p>
					<p><span class="eo">havi</span> : avoir</p>
					<p><span class="eo">kapti</span> : attraper</p>
					<p><span class="eo">lavi</span> : laver</p>
					<p><span class="eo">porti</span> : porter</p>
					<p><span class="eo">peti</span> : demander</p>
				</div>
				<div class="col s12 m4">
					<p><span class="eo">skribi</span> : écrire</p>
					<p><span class="eo">sukeri</span> : sucrer</p>
					<p><span class="eo">trinki</span> : boire</p>
					<p><span class="eo">renkonti</span> : rencontrer</p>
					<p><span class="eo">vendi</span> : vendre</p>
					<p><span class="eo">amo</span> : amour</p>
					<p><span class="eo">kato</span> : chat</p>
				</div>
				<div class="col s12 m4">
					
					<p><span class="eo">butiko</span> : boutique</p>
					<p><span class="eo">insekto</span> : insecte</p>
					<p><span class="eo">limonado</span> : limonade</p>
					<p><span class="eo">papero</span> : papier</p>
					<p><span class="eo">plumo</span> : plume</p>
					<p><span class="eo">taso</span> : tasse</p>
					<p><span class="eo">pura</span> : propre</p>
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
				<p class="col s12"><span class="eo">Mi forgesis trinki akvon.</span> : J’ai oublié [de] boire [de l’] eau.</p>
			</div>
				
		<?php 
		} // fin section
		if ($section=="9") {
		?>
				
		<fieldset class="ekzerco">
			<legend><strong>EXERCICE</strong> : Traduisez les phrases en espéranto.</legend>
			<input type="hidden" name="013_cxap02.2" value="1. Traduisez en espéranto.">
			<div class="tasko">
			<?php
				$demandoj=array (
				1 => "Un garçon en bonne santé boit du lait chaud.",
				2 => "La nouvelle boutique vend des gâteaux secs.",
				3 => "Le grand instituteur a rencontré les nouveaux amis.",
				4 => "Les bons amis feront toujours un beau gâteau.",
				5 => "La petite fille a rencontré les s&oelig;urs laides.",
				6 => "Le frère bien portant avait une petite s&oelig;ur malade.",
				7 => "Personne ne lavera les petites tasses.",
				8 => "Le bel oiseau attrapa un petit insecte.",
				9 => "La nouvelle boutique a vendu de la mauvaise limonade.",
				10 => "De l’eau froide ne lave pas (&quot;ne lavas&quot;) un petit garçon."
				);
				ekzerco ("U", 1);
			?>
			</div>
		</fieldset>
		
		<?php 
		} // fin section
		if ($section=="10") {
		?>
		
		<fieldset class="ekzerco">
			<legend><strong>EXERCICE</strong> : Remplacez la portion de phrase entre { } par le pronom personnel approprié. </legend>
			<p>Choisissez parmi les pronoms suivants : li, ŝi, ĝi ou ili</p>
			<p>Ex.: {<i>La knabo</i>} vendas kukojn. → <b>Li</b> vendas kukojn. </p>
			<?php atentigo();?>
			<input type="hidden" name="013_cxap02.3" value="2. Remplacez la portion de phrase entre {} par le pronom personnel approprié : li, ŝi, ĝi ou ili">
			<div class="tasko">
			<?php
				$demandoj=array (
				11 => "{La kuko} estas bela.",
				12 => "{Mia amikino} estas bela.",
				13 => "{La bela birdo} ĉiam trinkas akvon.",
				14 => "{La butikoj} estas malpuraj.",
				15 => "{La akvo} estas varma.",
				16 => "{Mia frato} neniam lavas la tasojn.",
				17 => "{La viro} havas novan amikon.",
				18 => "{Miaj fratoj} kaptis malsanan birdon.",
				19 => "{La virino} ne sukeris mian teon."
				);
				ekzerco(True, 1);
			?>
			</div>
		</fieldset>
	
		<?php 
		} // fin section
		if ($section=="11") {
		?>
		<fieldset class="ekzerco">
			<legend><strong>EXERCICE</strong> : Formez des phrases ayant un sens en utilisant les mots donnés.</legend>
			<p>Attention : vous pouvez être amené à conjuguer les verbes et à mettre des mots à l’accusatif.</p>
			<input type="hidden" name="013_cxap02.4" value="3. Formez des phrases ayant un sens en utilisant les mots donnés.">
			<div class="tasko">
			<?php 
				$demandoj=array (
				20 => "amikino - la - malvarma - mia - sukeri - teo.",
				21 => "akvo - bela - birdo - la - pura - trinki.",
				22 => "amiko - bona - limonado - vendi - via.",
				23 => "forgesi - mi - papero - porti.",
				24 => "bela - esti - fratino - knabino - mia."
				);
				ekzerco(True, 1);
			?>
			</div>
		</fieldset>
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
				<p class="col s6"><span class="eo">Kiel vi fartas ?</span></p><p class="col s6">Comment allez-vous&nbsp;?</p>
				<p class="col s5 offset-s1"><span class="eo">– Bone. Kaj vi ?</span></p><p class="col s6">– Bien. Et vous&nbsp;?</p>
				<p class="col s5 offset-s1"><span class="eo">– Bonege.</span></p><p class="col s6">– Parfaitement bien.</p>
				<p class="col s5 offset-s1"><span class="eo">– Sufiĉe bone.</span></p><p class="col s6">– Assez bien. (ça va)</p>
				<p class="col s5 offset-s1"><span class="eo">– Ne tro bone.</span></p><p class="col s6">– Pas trop bien.</p>
			</div>
		</fieldset>
		
		<p class="parto"><b>Kiel? Tiel!</b></p>
		
		<p>Comme dans l’exemple ci-dessus, <b>kiel</b> permet d’interroger sur la manière d’être ou la manière de faire quelque chose. Vous vous souvenez peut-être que dans la leçon précédente (<a href="lec01.php?section=10">section 1.10</a>), nous vous avions présenté cette phrase pour demander comment dire un certain mot en espéranto&nbsp;:<br><span class="eo">Kiel oni diras … en Esperanto?</span> : Comment dit-on … en espéranto&nbsp;?</p>
		
		<p>À une question commençant par <b>kiel</b> on peut répondre par exemple en utilisant <b>tiel</b>.

		<p><b>Kiel</b> peut aussi être utilisé dans une comparaison.</p>
		
		<p>Exemples :</p>
		<div class="vortlisto row">
			<p class="col s6"><span class="eo">Kiel vi faras?</span></p><p class="col s6">Comment faites-vous&nbsp;?</p>
			<p class="col s6"><span class="eo">– Tiel!</span></p><p class="col s6">– Comme ça&nbsp;!</p>
			<p class="col s6"><span class="eo">Tiel estas.</span></p><p class="col s6">C’est ainsi.</p>
			<p class="col s6"><span class="eo">Ŝi skribas kiel mia patrino.</span></p><p class="col s6">Elle écrit comme ma mère.</p>
		</div>

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
			"question"=>"Que signifient respectivement 'mala', 'malbona', 'malsana' ?",
			"propositions"=>array("mal, mauvais, malade", "mauvais, mauvais, malade", "contraire, mauvais, malade"),
			"indices"=>array("","",""),
			"reponse"=>3
		),
		array(
			"question"=>"Que signifie 'malbelaj virinoj' ?",
			"propositions"=>array("des hommes laids", "de belles femmes", "des femmes laides"),
			"indices"=>array("","",""),
			"reponse"=>3
		),
		array(
			"question"=>"Quel est le féminin pluriel de 'mia granda amiko' ?",
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
			"question"=>"Quel est le complément d’objet direct dans 'mon frère boira de l’eau lundi' ?",
			"propositions"=>array("mon frère", "de l’eau", "lundi"),
			"indices"=>array("","",""),
			"reponse"=>2
		),
		array(
			"question"=>"Quel est le complément d’objet direct dans 'que boira mon frère lundi' ?",
			"propositions"=>array("que", "mon frère", "lundi"),
			"indices"=>array("","",""),
			"reponse"=>1
		),
		array(
			"question"=>"Quelle est la fonction de 'médecin' dans 'tu seras médecin' ?",
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
		pubFacebook();
		?>
				
	</aside>
</div>
<?php include "dlekpiedo.inc.php"; ?>
