<?php
$titolo="2 (du)";
$leciono = 2;
$section=isset($_GET["section"])?$_GET["section"]:"1";
include "dlekkapo.inc.php";

<div class="row">
	<article class="col s12 m10 l7 offset-m1 offset-l1">
				
<section id="leciono-enhavo">
<?php 
getTitoloLecionero('CG',$leciono,$section);


if ($section=="1") {
?>

<p>Les <b>noms</b> désignant des êtres vivants sexués peuvent prendre la
marque du <b>féminin</b>. Pour ce faire on remplace la terminaison
<b>-o</b> du nom par la terminaison <b>-ino</b> ou, dit autrement, on
intercale le suffixe <b>-in</b> entre la terminaison et ce qui la précède.</p>
<table class='retrait'>
<tr>
	<td width='50' class='ekz'>viro</td>
	<td width='120' class='fr'>homme (m&acirc;le)</td>
	<td width='50' class='ekz'>vir<b>in</b>o :</td>
	<td width='120' class='fr'>femme</td>
</tr>
<tr>
	<td class='ekz'>amiko :</td>
	<td class='fr'>ami</td>
	<td class='ekz'>amik<b>in</b>o :</td>
	<td class='fr'>amie</td>
</tr>
<tr>
	<td class='ekz'>filo :</td>
	<td class='fr'>fils</td>
	<td class='ekz'>fil<b>in</b>o :</td>
	<td class='fr'>fille</td>
</tr>
</table>

<p>Lors de la première leçon nous avons vu qu’en espéranto les adjectifs
s’accordent en nombre avec les noms auxquels ils se rapportent. Par contre, ils ne s’accordent jamais en genre.
</p>
<table class='retrait'>
<tr>
<td class='ekz'>la grandaj viroj :</td><td class='fr'>les grands hommes</td><td width='20'>&nbsp;</td>
<td class='ekz'> la grandaj virinoj :</td><td class='fr'>les grandes femmes</td></tr>
</table>

<?php 
} // fin section 3
if ($section=="2") {
?>

<p>Il existe une autre terminaison, bien pratique, qui nous permet de
reconna&icirc;tre le complément d’objet direct dans une phrase. Il s’agit de
la terminaison <b>-n</b> que l’on ajoute &agrave; la fin des noms, pronoms
et des adjectifs pour former le complément d’objet direct. On
reconna&icirc;tra donc le complément d’objet direct par sa terminaison <b>-n</b>
que l’on nomme également <b>accusatif</b>.</p>

<table class='retrait'>
<tr>
	<td width='50'><a href="../son/l02-1.wav"><img src="../pix/icon20.gif"></a></td>
	<td width='200' class='ekz'>Mi sukeras la varma<b>n</b> kafo<b>n</b></td>
	<td width='200' class='fr'>Je sucre le café chaud</td>
</tr>
</table>

<div class='rim'><p><b>Remarque</b> : 
Prononcez bien le n final sans nasaliser la voyelle précédente : 
<span class='ekz'>varman</span> rime avec le mot français <em>Anne</em>, 
et <span class='ekz'>kafon</span> avec <em>tonne</em>.</p></div>
<p>Au pluriel : </p>
<table  class='retrait'>
<tr>
	<td width='50'><a href="../son/l02-2.wav"><img src="../pix/icon20.gif"></a></td>
	<td width='200' class='ekz'>Ni sukeras la varmaj<b>n</b> kafoj<b>n</b></td>
	<td width='300' class='fr'>Nous sucrons les cafés chauds</td>
</tr>
</table>

<div class='rim'><p><b>Remarque</b> : 
Notez que la terminaison du pluriel vient avant celle de l’accusatif, qui
elle-même vient toujours en dernier. Prononcez <span class='ekz'>varmajn</span> comme
<em><u>var</u>m-ail-ne</em> (e muet) et <span class='ekz'>kafojn</span> comme 
<em><u>ka</u>f-o&iuml;-ne</em> (e muet).</p></div>

<?php 
} // fin section
if ($section=="3") {
?>

<p>En général les compléments autres que les compléments d’objet direct
(par exemple, les compléments circonstanciels) sont introduits par des
prépositions et ne prennent pas la marque de l’accusatif <b>-n</b>.  Ceci
car la préposition qui les introduit nous permet de reconna&icirc;tre leur
fonction de complément. Nous verrons ces prépositions plus tard, ainsi
que d’autres cas dans lesquels l’usage de l’accusatif peut être utile,
y compris après une préposition.</p>
<p>Avec le verbe <i>être</i> qui n’a jamais de complément d’objet direct, on
n’utilise pas l’accusatif, car le verbe <i>être</i> implique que le sujet et
l’attribut sont &#171;équivalents&#187;.</p>
<p>
<i>"Elle est belle."</i>   équivaut &agrave;   <i>"Elle = belle."</i>
</p>

<?php 
} // fin section
if ($section=="4") {
?>

<p>Le suffixe <b>-in</b> vous a déj&agrave; permis d’augmenter votre vocabulaire en
doublant le nombre d’êtres vivants sexués que vous êtes capable de nommer.
Quand vous saurez dire <em>cheval</em>, <em>bélier</em>, <em>souris m&acirc;le</em>,
<em>acteur</em>, etc. vous saurez également dire <em>jument</em>,
<em>brebis</em>, <em>souris femelle</em>, <em>actrice</em>, etc. </p>
<p>Le préfixe <b>mal-</b> fera de même en vous permettant de conna&icirc;tre le
contraire des mots auxquels il s’accole. Quand vous aurez assimilé
<em>aimer</em>, <em>beau</em>, <em>gauche</em>, <em>vrai</em>, etc. vous saurez
dire aussi <em>détester</em>, <em>laid</em>, <em>droite</em>, <em>faux</em>, etc.</p>
<table class='retrait'>
<tr>
	<td width='80' class='ekz'>amiko :</td>
	<td width='120' class='fr'>ami</td>
	<td width='80' class='ekz'>malamiko :</td>
	<td width='120' class='fr'>ennemi</td>
</tr>
<tr>
	<td class='ekz'>bela :</td>
	<td class='fr'>beau</td>
	<td class='ekz'>malbela :</td>
	<td class='fr'>laid</td>
</tr>
<tr>
	<td class='ekz'>nova :</td>
	<td class='fr'>nouveau</td>
	<td class='ekz'>malnova :</td>
	<td class='fr'>ancien, vieux</td>
</tr>
</table>

<?php 
} // fin section
if ($section=="5") {
?>

<p>Pour mettre une phrase &agrave; la <b>forme négative</b> il suffit d’ajouter le mot
<b>ne</b> avant le verbe.  </p>

<table class='retrait'>
<tr>
	<td width='50'><a href="../son/l02-3.wav"><img src="../pix/icon20.gif"></a></td>
	<td width='200' class='ekz'>Mi <b>ne</b> sukeras la kafon</td>
	<td width='200' class='fr'>Je ne sucre pas le café</td>
</tr>
</table>
</p>
<p>
<div class='rim'><p><b>Remarque</b> : 
Prononcez bien <span class='ekz'>ne</span> entre <em>né</em> et <em>nè</em>.
</p></div>

<?php 
} // fin section
if ($section=="6") {
?>

<p>Maintenant un peu de <b>vocabulaire</b> :</p>
<table class='voca'>
<tr>
	<td class='eo' width='90'>ami</td><td class='fr' width='130'>aimer</td>
	<td class='eo' width='90'>renkonti</td><td class='fr' width='130'>rencontrer</td>
	<td class='eo' width='90'>birdo</td><td class='fr' width='130'>oiseau</td>
</tr>
<tr>
	<td class='eo'>fari</td><td class='fr'>faire</td>
	<td class='eo'>skribi</td><td class='fr'>écrire</td>
	<td class='eo'>butiko</td><td class='fr'>boutique</td>
</tr>
<tr>
	<td class='eo'>forgesi</td><td class='fr'>oublier</td>
	<td class='eo'>sukeri</td><td class='fr'>sucrer</td>
	<td class='eo'>insekto</td><td class='fr'>insecte</td>
</tr>

<tr>
	<td class='eo'>havi</td><td class='fr'>avoir</td>
	<td class='eo'>trinki</td><td class='fr'>boire</td>
	<td class='eo'>limonado</td><td class='fr'>limonade</td>
</tr>
<tr>
	<td class='eo'>kapti</td><td class='fr'>attraper</td>
	<td class='eo'>vendi</td><td class='fr'>vendre</td>
	<td class='eo'>papero</td><td class='fr'>papier</td>
</tr>

<tr>
	<td class='eo'>lavi</td><td class='fr'>laver</td>
	<td class='eo'>vidi</td><td class='fr'>voir</td>
	<td class='eo'>plumo</td><td class='fr'>plume</td>
</tr>

<tr>
	<td class='eo'>peti</td><td class='fr'>demander</td>
	<td class='eo'>akvo</td><td class='fr'>eau</td>
	<td class='eo'>taso</td><td class='fr'>tasse</td>
</tr>
<tr>
	<td class='eo'>porti</td><td class='fr'>porter</td>
	<td class='eo'>amo</td><td class='fr'>amour</td>
	<td class='eo'>pura</td><td class='fr'>propre</td>
</tr>	
</table>

<div class='rim'><p><b>Remarque</b> : 
N’oubliez pas que vous connaissez aussi les féminins et les contraires
des mots appris, quand ils sont possibles. Lisez les mots &agrave; haute voix
en vous reportant aux indications de prononciation de la première
leçon.</p></div>
<p>Notez que tous les verbes se conjuguent exactement comme le verbe
<span class='ekz'>esti</span> en changeant le <b>-i</b> final pour <b>-as</b> au présent,
<b>-is</b> au passé et <b>-os</b> au futur. Ces trois temps simples nous
suffiront pour le moment.</p>

<?php 
} // fin section
if ($section=="7") {
?>
			
			<p>Traduisez en espéranto :</p>
			<input type="hidden" name="013_cxap02.1" value="1. Traduisez en espéranto :">
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

<?php 
} // fin section
if ($section=="8") {
?>
			
			<p>Remplacez la portion de phrase entre {} par le pronom personnel
			approprié : li, &#349;i, &#285;i ou ili</p>
			<p>Ex.: {<i>La knabo</i>} vendas kukojn.  -> <b>Li</b> vendas kukojn. </p>
			<?php atentigo();?>
			<input type="hidden" name="013_cxap02.2" value="2. Remplacez la portion de phrase entre {} par le pronom personnel approprié : li, &#349;i, &#285;i ou ili">
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
				ekzerco("U", 1);
			?>
			</div>


<?php 
} // fin section
if ($section=="9") {
?>
			<p>
			Formez des phrases ayant un sens en utilisant les mots donnés.<br>
			Attention : vous pouvez être amené &agrave; conjuguer les verbes et &agrave; mettre
			des mots &agrave; l’accusatif.
			</p>
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
				ekzerco("U", 1);
			?>
			</div>

<?php 
} // fin section
if ($section=="10") {
?>
			<p>
			Résumons-nous. Vous avez maintenant appris &agrave; former le féminin de tout nom
			d’être vivant et le contraire de tout mot (nom, adjectif, verbe, etc.) pour
			peu que ceux-ci aient un sens. Vous avez constaté que tous les verbes se
			conjuguent comme le verbe <span class="ekz">esti</span> que vous connaissiez déj&agrave;, et vous
			avez appris la structure <b>-a -o -as -an -on</b> qui vous permet
			d’exprimer l’action d’un sujet sur quelque chose ou quelqu’un d’autre. Pas
			mal, non&#160;?
			</p>
			<p>
			Pour terminer en beauté, voici un exercice facultatif mais ultra-simple, 
			sous forme de questionnaire &agrave; choix multiples. Contrairement &agrave; celui de 
			la première leçon, il n’est pas éliminatoire et vous recevrez sa correction 
			en même temps que le reste.
			</p>
			
<?php 
} // fin section
if ($section=="11") {
?>			
			
			<input type="hidden" name="013_cxap02.4" value="4. QCM">
			<div class="tasko" id="qcm">
				<p>
					<input type="hidden" name="900 dmd 01" value="Que signifient respectivement 'mala', 'malbona', 'malsana'?">
					<input type="hidden" name="900 resp 01" value="mal, mauvais, malade/mauvais, mauvais, malade/contraire, mauvais, malade/(pas de réponse)">
					01. Que signifient respectivement 'mala', 'malbona', 'malsana'?
				</p><p>
					<input style="display:none;" type="radio" name="900 01" <?php if($memorkurso["900_01"]==""){echo "checked";}?>>
					<input type="radio" name="900 01" value="1" <?php if($memorkurso["900_01"]=="1"){echo "checked";}?>> mal, mauvais, malade<br>
					<input type="radio" name="900 01" value="2" <?php if($memorkurso["900_01"]=="2"){echo "checked";}?>> mauvais, mauvais, malade<br>
					<input type="radio" name="900 01" value="3" <?php if($memorkurso["900_01"]=="3"){echo "checked";}?>> contraire, mauvais, malade<br>
				</p><p>
					<input type="hidden" name="900 dmd 02" value="Que signifie 'malbelaj virinoj'?">
					02. Que signifie 'malbelaj virinoj'?
					<input type="hidden" name="900 resp 02" value="des hommes laids/de belles femmes/des femmes laides/(pas de réponse)">
				</p><p>
					<input style="display:none;" type="radio" name="900 02" <?php if($memorkurso["900_02"]==""){echo "checked";}?>>
					<input type="radio" name="900 02" value="1" <?php if($memorkurso["900_02"]=="1"){echo "checked";}?>> des hommes laids<br>
					<input type="radio" name="900 02" value="2" <?php if($memorkurso["900_02"]=="2"){echo "checked";}?>> de belles femmes<br>
					<input type="radio" name="900 02" value="3" <?php if($memorkurso["900_02"]=="3"){echo "checked";}?>> des femmes laides<br>
				</p><p>
					<input type="hidden" name="900 dmd 03" value="Quel est le féminin pluriel de 'mia granda amiko'?">
				<input type="hidden" name="900 resp 03" value="miaj grandaj amikinoj/mia granda amikinoj/miaj grandinaj amikinoj/(pas de réponse)">
					03. Quel est le féminin pluriel de 'mia granda amiko'?
				</p><p>
					<input style="display:none;" type="radio" name="900 03" <?php if($memorkurso["900_03"]==""){echo "checked";}?>>
					<input type="radio" name="900 03" value="1" <?php if($memorkurso["900_03"]=="1"){echo "checked";}?>> miaj grandaj amikinoj<br>
					<input type="radio" name="900 03" value="2" <?php if($memorkurso["900_03"]=="2"){echo "checked";}?>> mia granda amikinoj<br>
					<input type="radio" name="900 03" value="3" <?php if($memorkurso["900_03"]=="3"){echo "checked";}?>> miaj grandinaj amikinoj<br>
				</p><p>
					<input type="hidden" name="900 dmd 04" value="Traduisez 'la boutique est vieille':">
					04. Traduisez 'la boutique est vieille':
					<input type="hidden" name="900 resp 04" value="la butiko estas malbela/la butiko estas malnovan/la butiko estas malnova/(pas de réponse)">
				</p><p>
					<input style="display:none;" type="radio" name="900 04" <?php if($memorkurso["900_04"]==""){echo "checked";}?>>
					<input type="radio" name="900 04" value="1" <?php if($memorkurso["900_04"]=="1"){echo "checked";}?>> la butiko estas malbela<br>
					<input type="radio" name="900 04" value="2" <?php if($memorkurso["900_04"]=="2"){echo "checked";}?>> la butiko estas malnovan<br>
					<input type="radio" name="900 04" value="3" <?php if($memorkurso["900_04"]=="3"){echo "checked";}?>> la butiko estas malnova<br>
				</p><p>
					<input type="hidden" name="900 dmd 05" value="Traduisez 'je ne bois pas d’eau':">
					05. Traduisez 'je ne bois pas d’eau':
					<input type="hidden" name="900 resp 05" value="mi maltrinkas akvon/mi ne trinkas akvon/mi trinkas ne akvon/(pas de réponse)">
				</p><p>
					<input style="display:none;" type="radio" name="900 05" <?php if($memorkurso["900_05"]==""){echo "checked";}?>>
					<input type="radio" name="900 05" value="1" <?php if($memorkurso["900_05"]=="1"){echo "checked";}?>> mi maltrinkas akvon<br>
					<input type="radio" name="900 05" value="2" <?php if($memorkurso["900_05"]=="2"){echo "checked";}?>> mi ne trinkas akvon<br>
					<input type="radio" name="900 05" value="3" <?php if($memorkurso["900_05"]=="3"){echo "checked";}?>> mi trinkas ne akvon<br>
				</p><p>
					<input type="hidden" name="900 dmd 06" value="Traduisez 'j’ai oublié la limonade' :">
					06. Traduisez 'j’ai oublié la limonade':
					<input type="hidden" name="900 resp 06" value="mi petis limonadon/mi havas forgesi la limonadon/mi forgesis la limonadon/(pas de réponse)">
				</p><p>
					<input style="display:none;" type="radio" name="900 06"  <?php if($memorkurso["900_06"]==""){echo "checked";}?>>
					<input type="radio" name="900 06" value="1" <?php if($memorkurso["900_06"]=="1"){echo "checked";}?>> mi petis limonadon<br/>
					<input type="radio" name="900 06" value="2" <?php if($memorkurso["900_06"]=="2"){echo "checked";}?>> mi havas forgesi la limonadon<br/>
					<input type="radio" name="900 06" value="3" <?php if($memorkurso["900_06"]=="3"){echo "checked";}?>> mi forgesis la limonadon<br/>
				</p><p>
					<input type="hidden" name="900 dmd 07" value="Quel est le complément d'objet direct dans 'mon frère boira de l’eau lundi'?">
					07. Quel est le complément d'objet direct dans 'mon frère boira de l’eau lundi'?
					<input type="hidden" name="900 resp 07" value="mon frère/de l’eau/lundi/(pas de réponse)">
				</p><p>
					<input style="display:none;" type="radio" name="900 07"  <?php if($memorkurso["900_07"]==""){echo "checked";}?>>
					<input type="radio" name="900 07" value="1" <?php if($memorkurso["900_07"]=="1"){echo "checked";}?>> mon frère<br/>
					<input type="radio" name="900 07" value="2" <?php if($memorkurso["900_07"]=="2"){echo "checked";}?>> de l’eau<br/>
					<input type="radio" name="900 07" value="3" <?php if($memorkurso["900_07"]=="3"){echo "checked";}?>> lundi<br/>
				</p><p>
					<input type="hidden" name="900 dmd 08" value="Quel est le complément d’objet direct dans 'que boira mon frère lundi'?">
					08. Quel est le complément d’objet direct dans 'que boira mon frère lundi'?
					<input type="hidden" name="900 resp 08" value="que/mon frère/lundi/(pas de réponse)">
				</p><p>
					<input style="display:none;" type="radio" name="900 08"  <?php if($memorkurso["900_08"]==""){echo "checked";}?>>
					<input type="radio" name="900 08" value="1" <?php if($memorkurso["900_08"]=="1"){echo "checked";}?>> que<br/>
					<input type="radio" name="900 08" value="2" <?php if($memorkurso["900_08"]=="2"){echo "checked";}?>> mon frère<br/>
					<input type="radio" name="900 08" value="3" <?php if($memorkurso["900_08"]=="3"){echo "checked";}?>> lundi<br/>
				</p><p>
					<input type="hidden" name="900 dmd 09" value="Quelle est la fonction de 'médecin' dans 'tu seras médecin'?">
					09. Quelle est la fonction de 'médecin' dans 'tu seras médecin'?
					<input type="hidden" name="900 resp 09" value="sujet/complément d’objet direct/attribut du sujet/(pas de réponse)">
				</p><p>
					<input style="display:none;" type="radio" name="900 09"  <?php if($memorkurso["900_09"]==""){echo "checked";}?>>
					<input type="radio" name="900 09" value="1" <?php if($memorkurso["900_09"]=="1"){echo "checked";}?>> sujet<br/>
					<input type="radio" name="900 09" value="2" <?php if($memorkurso["900_09"]=="2"){echo "checked";}?>> complément d’objet direct<br/>
					<input type="radio" name="900 09" value="3" <?php if($memorkurso["900_09"]=="3"){echo "checked";}?>> attribut du sujet<br/>
				</p>
		</div>

<?php 
} // fin section
if ($section=="12") {
?>		
<p>
Bravo, la deuxième leçon est terminée, vous pouvez envoyer votre leçon.
</p>

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
