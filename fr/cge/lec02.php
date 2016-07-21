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
	
		<?php 
		} // fin section 3
		if ($section=="2") {
		?>
		
		<p class="parto">Il existe une autre terminaison, bien pratique, qui nous permet de
		reconnaître le complément d’objet direct dans une phrase. Il s’agit de
		la terminaison <b>-n</b> que l’on ajoute à la fin des noms, pronoms
		et des adjectifs pour former le complément d’objet direct. On
		reconnaîtra donc le complément d’objet direct par sa terminaison <b>-n</b>
		que l’on nomme également <b>accusatif</b>.</p>
		
		<div class="vortlisto row">
			<p class="col s6">
				<a href="<?php echo $vojo;?>fr/son/l02-1.mp3" type="audio/mp3"><i class="material-icons">volume_up</i></a>
				<span class="eo">Mi sukeras la varma<b>n</b> kafo<b>n</b>.</span></p>
			<p class="col s6">Je sucre le café chaud.</p>
		</div>
		
		<p class="rimarko"><strong>REMARQUE :</strong> 
		Prononcez bien le n final sans nasaliser la voyelle précédente&nbsp;: 
		<span class="eo">varman</span> rime avec le mot français <em>Anne</em>, 
		et <span class="eo">kafon</span> avec <em>tonne</em>.</p>
		
		<p>Au pluriel : </p>
		<div class="vortlisto row">
			<p class="col s6"><a href="<?php echo $vojo;?>fr/son/l02-2.mp3" type="audio/mp3"><i class="material-icons">volume_up</i></a>
				<span class="eo">Ni sukeras la varmaj<b>n</b> kafoj<b>n</b>.</span></p>
			<p class="col s6">Nous sucrons les cafés chauds.</p>
		</div>

		<p class="rimarko"><strong>REMARQUE</strong> : 
		Notez que la terminaison du pluriel vient avant celle de l’accusatif, qui
		elle-même vient toujours en dernier. Prononcez <span class="eo">varmajn</span> comme
		<span class="eo"><em><u>var</u>m-ail-ne</em></span> (e muet) et <span class="eo">kafojn</span> comme 
		<span class="eo"><em><u>ka</u>f-oï-ne</em></span> (e muet).</p>
		
		<?php 
		} // fin section
		if ($section=="3") {
		?>
		
		<p class="parto">En général les compléments autres que les compléments d’objet direct
		(par exemple, les compléments circonstanciels) sont introduits par des
		prépositions et ne prennent pas la marque de l’accusatif <b>-n</b>.  Ceci
		car la préposition qui les introduit nous permet de reconnaître leur
		fonction de complément. Nous verrons ces prépositions plus tard, ainsi
		que d’autres cas dans lesquels l’usage de l’accusatif peut être utile,
		y compris après une préposition.</p>
		<p>Avec le verbe <i>être</i> qui n’a jamais de complément d’objet direct, on
		n’utilise pas l’accusatif, car le verbe <i>être</i> implique que le sujet et
		l’attribut sont « équivalents ».</p>
		<p>« Elle est belle. » équivaut à « Elle = belle. »</p>
	
		<?php 
		} // fin section
		if ($section=="4") {
		?>
		
		<p class="parto">Le suffixe <b>-in</b> vous a déj&agrave; permis d’augmenter votre vocabulaire en
		doublant le nombre d’êtres vivants sexués que vous êtes capable de nommer.
		Quand vous saurez dire <em>cheval</em>, <em>bélier</em>, <em>souris m&acirc;le</em>,
		<em>acteur</em>, etc. vous saurez également dire <em>jument</em>,
		<em>brebis</em>, <em>souris femelle</em>, <em>actrice</em>, etc. </p>
		
		<p class="parto">Le préfixe <b>mal-</b> fera de même en vous permettant de conna&icirc;tre le
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
	
		<?php 
		} // fin section
		if ($section=="5") {
		?>
		
		<p class="parto">Pour mettre une phrase à la <b>forme négative</b> il suffit d’ajouter le mot
		<b>ne</b> avant le verbe.</p>
		
		<div class="vortlisto row">
			<p class="col s6"><a href="<?php echo $vojo;?>fr/son/l02-3.mp3" type="audio/mp3"><i class="material-icons">volume_up</i></a>
				<span class="eo">Mi <b>ne</b> sukeras la kafon.</span></p>
			<p class="col s6">Je ne sucre pas le café.</p>
		</div>

		<p class="rimarko"><strong>REMARQUE</strong> : 
		Prononcez bien <span class="eo">ne</span> entre <em>né</em> et <em>nè</em>.
		</p>
	
		<?php 
		} // fin section
		if ($section=="6") {
		?>
		
		<p>Maintenant un peu de <b>vocabulaire</b> :</p>

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
				<p><span class="eo">renkonti</span> : rencontrer</p>
				<p><span class="eo">skribi</span> : écrire</p>
				<p><span class="eo">sukeri</span> : sucrer</p>
				<p><span class="eo">trinki</span> : boire</p>
				<p><span class="eo">vendi</span> : vendre</p>
				<p><span class="eo">vidi</span> : voir</p>
				<p><span class="eo">akvo</span> : eau</p>
				<p><span class="eo">amo</span> : amour</p>
			</div>
			<div class="col s12 m4">
				<p><span class="eo">birdo</span> : oiseau</p>
				<p><span class="eo">butiko</span> : boutique</p>
				<p><span class="eo">insekto</span> : insecte</p>
				<p><span class="eo">limonado</span> : limonade</p>
				<p><span class="eo">papero</span> : papier</p>
				<p><span class="eo">plumo</span> : plume</p>
				<p><span class="eo">taso</span> : tasse</p>
				<p><span class="eo">pura</span> : propre</p>
			</div>
		</div>

		<p class="rimarko"><strong>REMARQUE</strong> : 
		N’oubliez pas que vous connaissez aussi les féminins et les contraires
		des mots appris, quand ils sont possibles. Lisez les mots à haute voix
		en vous reportant aux indications de prononciation de la première
		leçon.</p>
		
		<p>Notez que tous les verbes se conjuguent exactement comme le verbe
		<span class="eo">esti</span> en changeant le <b>-i</b> final pour <b>-as</b> au présent,
		<b>-is</b> au passé et <b>-os</b> au futur. Ces trois temps simples nous
		suffiront pour le moment.</p>
				
		<?php 
		} // fin section
		if ($section=="7") {
		?>
				
		<fieldset class="ekzerco">
			<legend><strong>EXERCICE</strong> : Traduisez les phrases en espéranto.</legend>
			<input type="hidden" name="013_cxap02.1" value="1. Traduisez en espéranto.">
			<div class="tasko">
			<?php
				$demandoj=array (
				1 => "Un garçon en bonne santé boit du lait chaud.",
				2 => "La nouvelle boutique vend des gâteaux secs.",
				3 => "Le grand instituteur a rencontré les nouveaux amis.",
				4 => "Les bons amis feront un beau gâteau.",
				5 => "La petite fille a rencontré les s&oelig;urs laides.",
				6 => "Le frère bien portant avait une petite s&oelig;ur malade.",
				7 => "Le père lavera les petites tasses.",
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
		if ($section=="8") {
		?>
		
		<fieldset class="ekzerco">
			<legend><strong>EXERCICE</strong> : Remplacez la portion de phrase entre { } par le pronom personnel approprié. </legend>
			<p>Choisissez parmi les pronoms suivants : li, ŝi, ĝi ou ili</p>
			<p>Ex.: {<i>La knabo</i>} vendas kukojn. → <b>Li</b> vendas kukojn. </p>
			<?php atentigo();?>
			<input type="hidden" name="013_cxap02.2" value="2. Remplacez la portion de phrase entre {} par le pronom personnel approprié : li, ŝi, ĝi ou ili">
			<div class="tasko">
			<?php
				$demandoj=array (
				11 => "{La kuko} estas bela.",
				12 => "{Mia amikino} estas bela.",
				13 => "{La bela birdo} trinkas akvon.",
				14 => "{La butikoj} estas malpuraj.",
				15 => "{La akvo} estas varma.",
				16 => "{Mia frato} lavas la tasojn.",
				17 => "{La viro} havas novan amikon.",
				18. => "{Miaj fratoj} kaptis malsanan birdon.",
				19. => "{La virino} ne sukeris mian teon."
				);
				ekzerco(True, 1);
			?>
			</div>
		</fieldset>
	
		<?php 
		} // fin section
		if ($section=="9") {
		?>
		<fieldset class="ekzerco">
			<legend><strong>EXERCICE</strong> : Formez des phrases ayant un sens en utilisant les mots donnés.</legend>
			<p>Attention : vous pouvez être amené à conjuguer les verbes et à mettre des mots à l’accusatif.</p>
			<?php atentigo();	?>
			<input type="hidden" name="013_cxap02.3" value="3. Formez des phrases ayant un sens en utilisant les mots donnés.">
			<div class="tasko">
			<?php 
				$demandoj=array (
				20. => "amikino - la - malvarma - mia - sukeri - teo.",
				21. => "akvo - bela - birdo - la - pura - trinki.",
				22. => "amiko - bona - limonado - vendi - via.",
				23. => "forgesi - mi - papero - porti.",
				24. => "bela - esti - fratino - knabino - mia."
				);
				ekzerco(True, 1);
			?>
			</div>
		</fieldset>
			
		<?php 
		} // fin section
		if ($section=="10") {
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
		<p>Vous pouvez maintenant envoyer vos exercices à votre correcteur. Mais avant, nous vous proposons un petit QCM pour vous permettre de faire le point sur ce que vous avez appris. Voyez vite page suivante&nbsp;!
		</p>

		
	<?php 
	} // fin section
	if ($section=="11") {
	?>
	<p>Voici un petit exercice de révision. Sélectionnez la réponse exacte en 
	cliquant sur le bouton associé. Si vous ne savez pas quelle réponse donner à une question, n’hésitez pas à relire le cours&nbsp;: toutes les réponses s’y trouvent&nbsp;!</p>

	<input type="hidden" name="013_cxap02.4" value="QCM">
	<div class="tasko" id="qcm">
		<?php
			questionQCM("01", "Que signifient respectivement 'mala', 'malbona', 'malsana' ?", 
			array("mal, mauvais, malade", "mauvais, mauvais, malade", "contraire, mauvais, malade", "(pas de réponse)"),$eraroj,$memorkurso);				
			questionQCM("02", "Que signifie 'malbelaj virinoj' ?",
			array("des hommes laids", "de belles femmes", "des femmes laides", "(pas de réponse)"),$eraroj,$memorkurso);
			questionQCM("03", "Quel est le féminin pluriel de 'mia granda amiko' ?",
			array("miaj grandaj amikinoj", "mia granda amikinoj", "miaj grandinaj amikinoj", "(pas de réponse)"),$eraroj,$memorkurso);
			questionQCM("04","Traduisez 'la boutique est vieille'", 
			array("la butiko estas malbela", "la butiko estas malnovan","la butiko estas malnova", "(pas de réponse)"),$eraroj,$memorkurso);
			questionQCM("05", "Traduisez 'je ne bois pas d’eau':", 
			array("mi maltrinkas akvon", "mi ne trinkas akvon", "mi trinkas ne akvon", "(pas de réponse)"),$eraroj,$memorkurso);
			questionQCM("06", "Traduisez 'j’ai oublié la limonade' :",
			array("mi petis limonadon", "mi havas forgesi la limonadon", "mi forgesis la limonadon", "(pas de réponse)"),$eraroj,$memorkurso);
			questionQCM("07", "Quel est le complément d’objet direct dans 'mon frère boira de l’eau lundi' ?",
			array("mon frère", "de l’eau", "lundi", "(pas de réponse)"),$eraroj,$memorkurso);
			questionQCM("08", "Quel est le complément d’objet direct dans 'que boira mon frère lundi' ?",
			array("que", "mon frère", "lundi", "(pas de réponse)"),$eraroj,$memorkurso);
			questionQCM("09", "Quelle est la fonction de 'médecin' dans 'tu seras médecin' ?",
			array("sujet", "complément d’objet direct", "attribut du sujet", "(pas de réponse)"),$eraroj,$memorkurso);
		?>
	</div>
			
	<?php 
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
								
		<ul class="collapsible" data-collapsible="expandable">

			<?php 
			// On affiche le sommaire de la lecon
			getEnhavtabelo('CG',$leciono); 
			?>

		</ul>	
				
	</aside>
</div>
<?php include "dlekpiedo.inc.php"; ?>
