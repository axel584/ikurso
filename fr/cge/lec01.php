<?php
$titolo="1 (unu)";
$section=isset($_GET["section"])?$_GET["section"]:"1";
include "dlekkapo.inc.php";
?>
<div class="row">
	<article class="col s12 m10 l7 offset-m1 offset-l1">
		<section id="leciono-kapo">
			<h1>Leçon 1</h1>
			<ul id="progreso">
				<li id="lec1" class="nuna"></li>
				<li id="lec2" class="nova"></li>
				<li id="lec3" class="nova"></li>
				<li id="lec4" class="nova"></li>
				<li id="lec5" class="nova"></li>
				<li id="lec6" class="nova"></li>
				<li id="lec7" class="nova"></li>
				<li id="lec8" class="nova"></li>
				<li id="lec9" class="nova"></li>
				<li id="lec10" class="nova"></li>
				<li id="lec11" class="nova"></li>
			</ul>
		</section>
		
		<section id="leciono-enhavo">
			<?php 
			getTitoloLecionero('CG',1,$section);
			
			if ($section=="1") {
			?>
			<section id="section1">

				<p>Avant que vous ne commenciez cette première leçon, nous vous invitons à lire le <a href="intro.php?temo=intro">
			préambule</a>, qui vous donnera toutes les informations utiles sur la manière de suivre ce cours.</p>
			
				<p>En espéranto les mots s’écrivent phonétiquement, c’est-à-dire qu’ils
				s’écrivent comme ils se prononcent (et <i>vice versa</i>).</p>
				<p>Les lettres suivantes ont une prononciation différente de celle du
				français :</p>
				<table class='retrait'>
					<tr>
						<td width='20' class="ekz">c</td>
						<td width='5' class="ekz">:  </td>
						<td width='200' class="fr">ts (tsar)</td>
						<td width='20' class="ekz">&#309;</td>
						<td width='5' class="ekz">:  </td>
						<td width='200' class="fr">j (je)</td>
					</tr>
					<tr>
						<td class="ekz">&#265;</td>
						<td class="ekz">:  </td>
						<td class="fr">tch (Tchécoslovaquie)</td>
						<td class="ekz">o</td>
						<td class="ekz">:  </td>
						<td class="fr">o (bol)</td>
					</tr>
					<tr>
						<td class="ekz">e</td>
						<td class="ekz">:  </td>
						<td class="fr">entre é et è</td>
						<td class="ekz">r</td>
						<td class="ekz">:  </td>
						<td class="fr">de préférence roulé (espagnol)</td>
					</tr>
					<tr>
						<td class="ekz">g</td>
						<td class="ekz">:  </td>
						<td class="fr">g (gant)</td>
						<td class="ekz">s</td>
						<td class="ekz">:  </td>
						<td class="fr">ss (santé, suisse)</td>
					</tr>
					<tr>
						<td class="ekz">&#285;</td>
						<td class="ekz">:  </td>
						<td class="fr">dj (adjudant)</td>
						<td class="ekz">&#349;</td>
						<td class="ekz">:  </td>
						<td class="fr">ch (chaud)</td>
					</tr>
					<tr>
						<td class="ekz">h</td>
						<td class="ekz">:  </td>
						<td class="fr">h (have en anglais)</td>
						<td class="ekz">u</td>
						<td class="ekz">:  </td>
						<td class="fr">ou (tout)</td>
					</tr>
					<tr>
						<td class="ekz">&#293;</td>
						<td class="ekz">:  </td>
						<td class="fr">hr (Juan en espagnol)</td>
						<td class="ekz">&#365;</td>
						<td class="ekz">:  </td>
						<td class="fr">w (wapiti), ou bref (oui, waouh&#160;!)</td>
					</tr>
					<tr>
						<td class="ekz">j</td>
						<td class="ekz">:  </td>
						<td class="fr">y (yogourt)</td>
						<td class="ekz">&nbsp;</td>
						<td class="ekz">&nbsp;</td>
						<td class="fr">&nbsp;</td>
					</tr>
					</table>
				<p>Les autres lettres de l'espéranto&nbsp;: <em>a, b, d, f,
			i, k, l, m, n, p, t, v, z</em> se prononcent comme en français. 
			Les lettres <em>q, w, x</em> et <em>y</em> n’existent pas en espéranto.</p>
				<p>Chaque voyelle, <em>a, e, i, o, u</em>, forme
			avec les consonnes voisines une syllabe séparée. Par contre, <em>j</em> et
			<em>&#365;</em>, qui sont parfois appelées <i>semi-voyelles</i>, sont des
			consonnes normales en espéranto, et font donc partie de la syllabe définie
			par une voyelle voisine. Vous trouverez des exemples plus tard dans les
			leçons à venir et nous reviendrons plus en détail sur la prononciation dans
			la quatrième leçon.</p>
			</section>
	
			<?php 
			} // fin section 1
			if ($section=="2") {
			?>
			<section id="section2">
				<p>Les <b>noms communs</b> et les <b>noms propres</b> assimilés finissent
				toujours par <b>-o</b>.</p>
				<p>Les <b>verbes à l’infinitif</b> finissent toujours par <b>-i</b>.</p>
				<p>Les <b>adjectifs</b> finissent toujours par <b>-a</b> et se placent
				normalement avant le nom qu’ils qualifient.</p>
				<p>Exemples :</p>
				<table class='retrait'>
			<tr>
				<td width='80' class="ekz">a<u>mi</u>ko :</td>
				<td width='80' class='kaov-fr'>ami</td>
			</tr>
			<tr>
				<td class="ekz">a<u>mi</u>ka :</td>
				<td class="fr">amical</td>
			</tr>
			<tr>
				<td class="ekz"><u>es</u>ti :</td>
				<td class="fr">&ecirc;tre</td>
			</tr>
			<tr>
				<td class="ekz"><u>no</u>va a<u>mi</u>ko :</td>
				<td class="fr">un nouvel ami</td>
			</tr>
			<tr>
				<td class="ekz"><u>sa</u>na <u>kna</u>bo :</td>
				<td class="fr">un garçon en bonne santé</td>
			</tr>
			</table>
				<div class='rim'><p><b>Remarque</b> : 
			Dans cet exemple, nous avons utilisé le soulignement pour indiquer que
			l’avant-dernière syllabe porte l’accent tonique, c’est-à-dire qu’on la
			prononce plus fort que les autres syllabes. En français, l’accent tonique
			est sur la dernière syllabe, aussi, pour prononcer correctement
			<span class="ekz">a<u>mi</u>ko</span>, il vous suffit de prononcer d’abord le mot français
			<span class="ekz">a<u>mi</u></span> puis de lui ajouter <span class="ekz">ko</span>. Entraînez-vous avec les mots de
			vocabulaire ci-après.</p></div>
			</section>

			<?php 
			} // fin section 2
			if ($section=="3") {
			?>
			<section id="section3">
				<h2>Vocabulaire</h2>
			
				<table class="voca">
			<tr>
				<td class="eo" width='90'>amiko</td><td class="fr" width='130'>ami</td>
				<td class="eo" width='90'>kafo</td><td class="fr" width='130'>café</td>
				<td class="eo" width='90'>bela </td><td class="fr" width='130'>beau</td>
			</tr>
			<tr>
				<td class="eo">filo</td><td class="fr">fils</td>
				<td class="eo">kuko </td><td class="fr">gâteau</td>
				<td class="eo">granda </td><td class="fr">grand</td>
			</tr>
			<tr>
				<td class="eo">frato</td><td class="fr">frère</td>
				<td class="eo">lakto</td><td class="fr">lait</td>
				<td class="eo">nova</td><td class="fr"> nouveau</td>
			</tr>
			<tr>
				<td class="eo">viro</td><td class="fr">homme (mâle)</td>
				<td class="eo">pano</td><td class="fr">pain</td>
				<td class="eo">bona</td><td class="fr"> bon</td>
			</tr>
			<tr>
				<td class="eo">knabo</td><td class="fr">garçon</td>
				<td class="eo">sukero</td><td class="fr">sucre</td>
				<td class="eo">seka</td><td class="fr">sec</td>
			</tr>
			<tr>
				<td class="eo">patro</td><td class="fr">père</td>
				<td class="eo">teo </td><td class="fr">thé</td>
				<td class="eo">varma </td><td class="fr">chaud</td>
			</tr>
			<tr>
				<td class="eo">instruisto</td><td class="fr">instituteur</td>
				<td class="eo">biskvito </td><td class="fr">biscuit</td>
				<td class="eo">sana </td><td class="fr">sain, en bonne santé</td>
			</tr>
			</table>
			</section>

			<?php 
			} // fin section 3
			if ($section=="4") {
			?>
			<section id="section4">
				<p>Les <strong>pronoms personnels</strong> sont :</p>
				<table class='retrait'>
				<tr>
					<td width='20' class="ekz">mi</td>
					<td width='5' class="ekz">:  </td>
					<td width='200' class="fr">je</td>
					<td width='20' class="ekz">ni</td>
					<td width='5' class="ekz">:  </td>
					<td width='200' class="fr">nous</td>
				</tr>
				<tr>
					<td class="ekz">vi</td>
					<td class="ekz">:  </td>
					<td class="fr">tu (ou <span class="ekz">ci</span>, peu usité)</td>
					<td class="ekz">vi</td>
					<td class="ekz">:  </td>
					<td class="fr">vous</td>
				</tr>
				<tr>
					<td class="ekz">li</td>
					<td class="ekz">:  </td>
					<td class="fr">il (personne)</td>
					<td class="ekz">ili</td>
					<td class="ekz">:  </td>
					<td class="fr">ils ou elles</td>
				</tr>
				<tr>
					<td class="ekz">&#349;i</td>
					<td class="ekz">:  </td>
					<td class="fr">elle (personne)</td>
					<td class="ekz">oni</td>
					<td class="ekz">:  </td>
					<td class="fr">on</td>
				</tr>
				<tr>
					<td class="ekz">&#285;i</td>
					<td class="ekz">:  </td>
					<td class="fr">il ou elle (non-personne)</td>
					<td class="ekz">si</td>
					<td class="ekz">:  </td>
					<td class="fr">soi-m&ecirc;me.</td>
				</tr>
				</table>

				<div class="rimarko"><p><b>Remarque</b> : 
			Prononcez-vous <span class="ekz">&#349;i</span> et <span class="ekz">&#285;i</span>
			comme il faut&#160;? Regardez bien la table en début de leçon.</p></div>
				<p>
			On emploie <span class="ekz">li</span> pour les personnes de sexe masculin et 
			<span class="ekz">&#349;i</span> pour
			celles de sexe féminin. On peut, à la rigueur, étendre cet usage aux
			animaux familiers mais, à part ces derniers, on utilise <span class="ekz">&#285;i</span> pour
			désigner les objets, les pays, les animaux, les concepts abstraits... bref
			tout ce qui n’est pas une personne. Au pluriel, <span class="ekz">ili</span> s’applique aux
			personnes des deux sexes et aux non-personnes pareillement.
			</p>
				<p>Au <b>présent</b>, les verbes remplacent leur terminaison <b>-i</b> par 
			<b>-as</b> à toutes les personnes.</p>
				<table class='retrait'>
			<tr>
				<td width='60' class="ekz">mi estas</td>
				<td width='5' class="ekz">:  </td>
				<td width='120' class="fr">je suis</td>
				<td width='60' class="ekz">ni estas</td>
				<td width='5' class="ekz">:  </td>
				<td width='120' class="fr">nous sommes</td>
			</tr>
			<tr>
				<td class="ekz">li estas</td>
				<td class="ekz">:  </td>
				<td class="fr">il est</td>
				<td class="ekz">vi estas</td>
				<td class="ekz">:  </td>
				<td class="fr">tu es, vous &ecirc;tes</td>
			</tr>
			<tr>
				<td class="ekz">&#349;i estas</td>
				<td class="ekz">:  </td>
				<td class="fr">elle est</td>
				<td class="ekz">ili estas</td>
				<td class="ekz">:  </td>
				<td class="fr">ils ou elles sont</td>
			</tr>
			<tr>
				<td class="ekz">&#285;i estas</td>
				<td class="ekz">:  </td>
				<td class="fr">il ou elle est</td>
				<td class="ekz">&nbsp;</td>
				<td class="ekz">&nbsp;</td>
				<td class="fr">&nbsp;</td>
			</tr>
			</table>

				<div class="rimarko">
				<p><b>Remarque</b> : 
			N’oubliez pas l’accent tonique sur l’avant-dernière syllabe et
			prononcez bien toutes les lettres, y compris le s final : <span class="ekz">estas</span> rime
			avec le mot français <em>tasse</em> et non pas <em>tas</em>.</p></div>
			
				<p>Au <b>futur</b>, la terminaison sera <b>-os</b>, alors qu’au <b>passé</b>, elle 
			sera <b>-is</b>. Nous nous contenterons de ces trois temps pour le moment.</p>
				<table class='retrait'>
			<tr>
				<td width='60' class="ekz">mi estis</td>
				<td width='5' class="ekz">:  </td>
				<td width='200' class="fr">j’étais, j'ai été, je fus</td>
			</tr>
			<tr>
				<td class="ekz">mi estas</td>
				<td class="ekz">:  </td>
				<td class="fr">je suis</td>
			</tr>
			<tr>
				<td class="ekz">mi estos</td>
				<td class="ekz">:  </td>
				<td class="fr">je serai</td>
			</tr>
			</table>

				<div class="rimarko"><p><b>Remarque</b> : 
			Prononcez : <span class="ekz">mi-<u>ès</u>-tass</span>, 
			<span class="ekz">mi-<u>ès</u>-tiss</span>, <span class="ekz">mi-<u>ès</u>-toss</span>.
			</p></div>
				<p>On marque le <b>pluriel</b> en ajoutant un <b>-j</b> à la fin des noms et des
			adjectifs qui s’y rapportent.</p>
				<p>Les <b>articles indéfinis</b> (un, une, des) et <b>partitifs</b> 
			(du, de la, des) n’existent pas en espéranto.</p>
				<table class='retrait'>
				<tr>
					<td width='100'  class="ekz">un biscuit :</td>
					<td width='120' class="fr">biskvito</td>
					<td width='100'  class="ekz">des biscuits :</td>
					<td width='120' class="fr">biskvitoj</td>
				</tr>
				<tr>
					<td width='70'  class="ekz">du pain :</td>
					<td width='100' class="fr">pano</td>
					<td width='70'  class="ekz">du sucre :</td>
					<td width='100' class="fr">sukero</td>
				</tr>
			</table>

				<p>
			Les <b>articles définis</b> (le, la, les) sont traduits par un seul mot
			<b>la</b>.</p>
				<table class='retrait'>
			<tr>
				<td width='150'  class="ekz">le biscuit :</td>
				<td width='150' class="fr">la biskvito</td>
			</tr>
			<tr>
				<td class="ekz">les bons biscuits :</td>
				<td class="fr">la bonaj biskvitoj</td>
			</tr>
			</table>
			
				<p>Les <b>adjectifs possessifs</b> sont formés simplement en ajoutant la
			terminaison <b>-a</b> au pronom personnel. Quand ils sont employés sans
			être suivis par un nom, ils ont la fonction de nos pronoms possessifs.</p>
				<table class='retrait'>
			<tr>
				<td width='20' class="ekz">mi</td>
				<td width='5' class="ekz">:  </td>
				<td width='150' class="fr">je</td>
				<td width='20' class="ekz">mia</td>
				<td width='5' class="ekz">:  </td>
				<td width='150' class="fr">mon, ma</td>
			</tr>
			<tr>
				<td class="ekz">vi</td>
				<td class="ekz">:  </td>
				<td class="fr">tu, vous</td>
				<td class="ekz">via</td>
				<td class="ekz">:  </td>
				<td class="fr">ton, ta, votre</td>
			</tr>
			<tr>
				<td class="ekz">&#349;i</td>
				<td class="ekz">:  </td>
				<td class="fr">elle</td>
				<td class="ekz">&#349;ia</td>
				<td class="ekz">:  </td>
				<td class="fr">son, sa (à elle) </td>
			</tr>
			<tr>
				<td class="ekz">li</td>
				<td class="ekz">:  </td>
				<td class="fr">lui</td>
				<td class="ekz">lia</td>
				<td class="ekz">:  </td>
				<td class="fr">son, sa (à lui)</td>
			</tr>
			<tr>	
				<td class="ekz">ni</td>
				<td class="ekz">:  </td>
				<td class="fr">nous</td>
				<td class="ekz">nia</td>
				<td class="ekz">:  </td>
				<td class="fr">notre, nos</td>
			</tr>
			<tr>
				<td class="ekz">ili</td>
				<td class="ekz">:  </td>
				<td class="fr">ils ou elles</td>
				<td class="ekz">ilia</td>
				<td class="ekz">:  </td>
				<td class="fr">leur</td>
			</tr>
			</table>

				<div class="rimarko"><p><b>Remarque</b> : 
			Dans les mots <span class="ekz">mia</span>, <span class="ekz">via</span>, etc. 
			la lettre <strong>i</strong> conserve sa fonction de
			voyelle et fait syllabe&nbsp;: <span class="ekz"><u>mi</u>-a</span>, <span class="ekz"><u>vi</u>-a</span>, 
			<span class="ekz">i-<u>li</u>-a</span>,...
			Ne prononcez donc pas <span class="ekz">mia</span> comme dans <em>amiable</em> mais comme dans 
			<em>un ami à moi</em>. </p></div>
			</section>

			<?php 
			} // fin section 4
			if ($section=="5") {
			?>
			<section id="section5">
				<p><em>Pour entendre ces phrases, cliquez sur le haut-parleur</em> :<br/>
				<a href="../son/l01.wav"><img src="../pix/icon20.gif"></a></p>
				<table class='retrait'>
				<tr>
					<td width='250'>Vos fils sont nos amis.</td>
					<td width='250' class="ekz">Viaj filoj estas niaj amikoj.</td>
				</tr>
				<tr>
					<td>Leurs cafés seront chauds.</td>
					<td class="ekz">Iliaj kafoj estos varmaj.</td>
				</tr>
				<tr>
					<td>Les garçons sont grands.</td>
					<td class="ekz">La knaboj estas grandaj.</td>
				</tr>
				<tr>
					<td>Son pain (à elle) était sec.</td>
					<td class="ekz">&#348;ia pano estis seka.</td>
				</tr>
				<tr>
					<td>Tu es son fils (à lui).</td>
					<td class="ekz">Vi estas lia filo.</td>
				</tr>
				<tr>
					<td>L'instituteur est en bonne santé.</td>
					<td class="ekz">La instruisto estas sana.</td>
				</tr>
				<tr>
					<td>Ton ami est beau.</td>
					<td class="ekz">Via amiko estas bela.</td>
				</tr>
				<tr>
					<td>Le g&acirc;teau était à lui (était le sien)</td>
					<td class="ekz">La kuko estis lia.</td>
				</tr>
				</table>
	
				<div class='rim'><p><b>Remarque</b> : 
				Dans ces exemples les terminaisons <b>-aj</b> et <b>-oj</b> se prononcent bien
				entendu <span class="ekz">a&iuml;</span> et <span class="ekz">o&iuml;</span>,
				comme dans <em>ail</em> et <em>Tolsto&iuml;</em> : <span class="ekz"><u>vi</u>-a&iuml;
				<u>fi</u>-lo&iuml;</span>, <span class="ekz"><u>ka</u>-fo&iuml;</span>, 
				<span class="ekz">a-<u>mi</u>-ko&iuml;</span>, etc.</p></div>
			</section>

			<?php 
			} // fin section 5
			if ($section=="6") {
			?>
			<section id="section6">

				<p>Pour bénéficier de notre service de correction, vous devrez compléter le bulletin
d’inscription qui se trouve à la fin de cette leçon, lorsque vous aurez terminé les exercices.</p>
				<p>Traduisez en espéranto :</p>
				<input type="hidden" name="013_cxap01.1" value="Traduisez en espéranto.">
				<div class="tasko">
				<?php
					$demandoj=array (
					1 => "Le thé est chaud.",
					2 => "Ton biscuit est sec.",
					3 => "Votre ami était beau",
					4 => "Les nouveaux instituteurs seront grands.",
					5 => "Mon frère est leur instituteur.",
					6 => "Vos fils seront ses amis (à lui).",
					7 => "Les gâteaux étaient bons.",
					8 => "Le pain sera sec.",
					9 => "Un garçon en bonne santé est beau.",
					10 => "Des garçons sains seront grands.",
					11 => "Le pain est à toi (&quot;le pain est tien&quot;)."
					);
					ekzerco("U", 1);
				?>
				</div>

				<p>Formez cinq phrases ayant un sens en combinant les mots de la leçon.</p>
				<input type="hidden" name="013_cxap01.2" value="Formez cinq phrases ayant un sens en combinant les mots de la leçon.">
				<div class="tasko">
				<?php 	
					$demandoj=array (
					12 => " ",
					13 => " ",
					14 => " ",
					15 => " ",
					16 => " "
					);
					ekzerco("U", 1);
				?>
				</div>
			<?php 
			} // fin section 6
			if ($section=="7") {
			?>

					<p>
					Dans l’exercice suivant, sélectionnez la réponse exacte en 
					cliquant sur le bouton associé. Attention! L’exercice est très facile (il 
					suffit d’avoir compris le cours), mais ne tentez pas de répondre au hasard, car il 
					y a tout de m&ecirc;me 67&nbsp;108&nbsp;864&nbsp;réponses possibles...
					</p>
				<?php
				$eraroj=isset($_GET["eraroj"])?unserialize(urldecode($_GET["eraroj"])):array();
				
				if (in_array("02",$eraroj)) {
					echo "deux en erreurs <br/>";
				}
				if (in_array("03",$eraroj)) {
					echo "trois en erreurs <br/>";
				}
				
				
				
				?>
				<input type="hidden" name="013_cxap01.3" value="QCM">
				<div class="tasko" id="qcm">
					<?php
					questionQCM("01","Combien de syllabes y a-t-il dans 'viaj kukoj' ?",array("3","4","5","6","(pas de réponse)"),$eraroj,$memorkurso);
					questionQCM("02","Quelle est la place de l’accent tonique ?",array("sur la dernière voyelle","sur l’avant-dernière syllabe","sur la dernière syllabe","sur la première voyelle","(pas de réponse)"),$eraroj,$memorkurso);
					questionQCM("03","Comment se prononce la lettre 'ĝ' ?",array("comme le 'g' de 'Alger'","comme le 'g' de 'Lagos'","comme le 'dj' de 'Djibouti'","aucun de ceux-ci","(pas de réponse)"),$eraroj,$memorkurso);
					questionQCM("04","Comment écrit-on en espéranto le son 'ch' du mot français 'chat' ?",array("ch","ŝ","ce son n’existe pas en espéranto","sch","(pas de réponse)"),$eraroj,$memorkurso);
					questionQCM("05","Comment écrit-on le son 'u' qui apparaît dans 'tutu' en français ?",array("u","y","il n'existe pas en espéranto","&uuml;","(pas de réponse)"),$eraroj,$memorkurso);
					questionQCM("06","Quel est le pronom de 3<sup>e</sup> personne féminin singulier ?",array("mi","ili","ĝi","ŝi","(pas de réponse)"),$eraroj,$memorkurso);
					questionQCM("07","Quelle est la terminaison caractéristique de l'infinitif ?",array("-i","-is","-ar","-j","(pas de réponse)"),$eraroj,$memorkurso);
					questionQCM("08","Quelle est la terminaison caractéristique de l’adjectif ?",array("-as","-o","-j","-a","(pas de réponse)"),$eraroj,$memorkurso);
					questionQCM("09","Quelle est la terminaison caractéristique du passé ?",array("-i","-j","-a","-is","(pas de réponse)"),$eraroj,$memorkurso);
					questionQCM("10","Quelle est la terminaison caractéristique du nom ?",array("-o","-os","cela dépend du genre","-a","(pas de réponse)"),$eraroj,$memorkurso);
					questionQCM("11","Comment dit-on 'du thé chaud' ?",array("la varmo tea","varma teo","varmo teo","la varma teo","(pas de réponse)"),$eraroj,$memorkurso);
					questionQCM("12","Comment dit-on 'de bons garçons' ?",array("bona knaboj","la bonaj knaboj","bonaj knaboj","bonoj knaboj","(pas de réponse)"),$eraroj,$memorkurso);
					questionQCM("13","Comment dit-on 'mes fils' ?",array("mia filioj","miaj filoj","miaj filioj","mia filoj","(pas de réponse)"),$eraroj,$memorkurso);
					?>
				</div>
			</section>
			
			<?php 
			} // fin section 6
			if ($section=="7") {
			?>
			<section id="section7">
				<p>
				Espérons que nous ne vous avons pas effrayé pour ce premier contact avec
				l’espéranto. Vous n’avez certainement pas tout assimilé mais cela
				viendra petit à petit. Vous pouvez déjà remarquer avec l’exercice
				précédent que vous &ecirc;tes capable d’exprimer en espéranto des phrases
				simples dont vous maîtrisez parfaitement la grammaire. 
				</p>
				<p>
				Un tel résultat ne pourrait pas être obtenu aussi rapidement s’il
				s’agissait d’apprendre l’allemand ou l’anglais&nbsp;! Pensez que
				potentiellement vous savez déjà conjuguer le verbe <i>esti</i> au présent,
				passé et futur de toutes les personnes, que vous connaissez les
				adjectifs possessifs et le pluriel. Avec la vingtaine de mots du
				vocabulaire vous pouvez déjà assembler un tas de phrases suivant les
				modèles :</p>
				<p class='ekz-eo'>
				      (la/mia/via...) -a -o estas -a.<br>
				      (la/mia/via...) -a -o estas -a -o.
				</p>
				<p>Donc à bientôt pour la prochaine leçon&#160;</p>

				<p>
				L’inscription n’est indispensable que si vous désirez faire appel à un
				correcteur. Si c’est le cas, remplissez soigneusement le formulaire
				ci-dessous <i>après avoir effectué les exercices de la leçon</i>. Une
				confirmation d’inscription vous parviendra par courrier électronique
				dans les prochains jours. Attendez de la recevoir avant de commencer la
				deuxième leçon.
				</p>
				<p>
				Par ailleurs nous vous proposons de vous abonner à une lettre d’information 
				mensuelle sur les activités liées à l’espéranto. Cette lettre est 
				éditée par l’association Espéranto-Jeunes et hébergée par Yahoogroupes. 
				Vous pouvez donc très facilement vous désabonner à tout moment et la
				protection des données personnelles (adresse électronique par exemple) est 
				assurée correctement. 
				</p>
			</section>
			
			<?php 
			} // fin section 7
			?>	

		</section>

		<section id="leciono-fino">
			<div id="marko" class="right-align">
				<?php getBoutonFinSection('CG',1,$section,$persono_id); ?>
				<a id="farita" class="btn-floating btn-large light-blue darken-1 hide"><i class="material-icons">done_all</i></a>
			</div>
			<div class="ligoj">
				<?php getLecioneroAntauxa('CG',1,$section); ?>
				<?php getLecioneroVenonta('CG',1,$section); ?>
			</div>
		</section>
	</article>
	
	<aside class="col s12 m10 l3 offset-m1 push-l1">
								
		<ul class="collapsible" data-collapsible="expandable">

			<?php 
			// On affiche le sommaire de la lecon
			getEnhavtabelo('CG',1); 
			?>

			<!-- TODO : il faut remplacer cette section suivante par une fonction qui va rechercher en base le vocabulaire -->

			<!--<li>
				<div class="collapsible-header"><i class="material-icons">library_books</i>Vocabulaire de la leçon</div>
				<div class="collapsible-body">
					<table class="vortaro bordered striped responsive-table">
						<tr><td>apud</td><td>à côté de</td></tr>
						<tr><td>(aŭto)bus/o</td><td>autobus</td></tr>
						<tr><td>ceter/a</td><td>restant, autre</td></tr>
						<tr><td>en</td><td>en, dedans</td></tr>
						<tr><td>ĝis</td><td>jusqu’à</td></tr>
						<tr><td>halt/i</td><td>s’arrêter</td></tr>
						<tr><td>apud</td><td>à côté de</td></tr>
						<tr><td>(aŭto)bus/o</td><td>autobus</td></tr>
						<tr><td>ceter/a</td><td>restant, autre</td></tr>
						<tr><td>en</td><td>en, dedans</td></tr>
						<tr><td>ĝis</td><td>jusqu’à</td></tr>
						<tr><td>halt/i</td><td>s’arrêter</td></tr>
						<tr><td>apud</td><td>à côté de</td></tr>
						<tr><td>(aŭto)bus/o</td><td>autobus</td></tr>
						<tr><td>ceter/a</td><td>restant, autre</td></tr>
						<tr><td>en</td><td>en, dedans</td></tr>
						<tr><td>ĝis</td><td>jusqu’à</td></tr>
						<tr><td>halt/i</td><td>s’arrêter</td></tr>
						<tr><td>apud</td><td>à côté de</td></tr>
						<tr><td>(aŭto)bus/o</td><td>autobus</td></tr>
						<tr><td>ceter/a</td><td>restant, autre</td></tr>
						<tr><td>en</td><td>en, dedans</td></tr>
						<tr><td>ĝis</td><td>jusqu’à</td></tr>
						<tr><td>halt/i</td><td>s’arrêter</td></tr>
						<tr><td>apud</td><td>à côté de</td></tr>
						<tr><td>(aŭto)bus/o</td><td>autobus</td></tr>
						<tr><td>ceter/a</td><td>restant, autre</td></tr>
						<tr><td>en</td><td>en, dedans</td></tr>
						<tr><td>ĝis</td><td>jusqu’à</td></tr>
						<tr><td>halt/i</td><td>s’arrêter</td></tr>
					</table>			
				</div>
			</li> -->
		</ul>	
				
	</aside>
</div>

<?php include "dlekpiedo.inc.php"; ?>
