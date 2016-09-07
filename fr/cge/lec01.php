<?php
$titolo="1 (unu)";
$leciono = 1;
$section=isset($_GET["section"])?$_GET["section"]:"1";
include "dlekkapo.inc.php";
?>
<div class="row">
	<article class="col s12 m10 l7 offset-m1 offset-l1">
		
		<section id="leciono-enhavo">
			<?php 
			getTitoloLecionero('CG',1,$section);
			
			if ($section=="1") {
			?>

			<p>Avant que vous ne commenciez cette première leçon, nous vous invitons à lire le <a href="intro.php?temo=intro">
			préambule</a>, qui vous donnera toutes les informations utiles sur la manière de suivre ce cours.</p>
		
			<p class="parto">En espéranto les mots s’écrivent phonétiquement, c’est-à-dire qu’ils
			s’écrivent comme ils se prononcent (et <i>vice versa</i>).</p>
			<p>Les lettres suivantes ont une prononciation différente de celle du
			français :</p>
			<div class="vortlisto row">
				<div class="col s12 m6">
					<p><span class="eo">c</span> : ts (tsar)</p>
					<p><span class="eo">ĉ</span> : tch (Tchèque)</p>
					<p><span class="eo">e</span> : entre é et è</p>
					<p><span class="eo">g</span> : g (gant)</p>
					<p><span class="eo">ĝ</span> : dj (Djibouti)</p>
					<p><span class="eo">h</span> : h (have en anglais)</p>
					<p><span class="eo">ĥ</span> : hr (Juan en espagnol)</p>
					<p><span class="eo">j</span> : y (yogourt)</p>
				</div>
				<div class="col s12 m6">
					<p><span class="eo">ĵ</span> : j (journal)</p>
					<p><span class="eo">o</span> : o (bol)</p>
					<p><span class="eo">r</span> : de préférence roulé (espagnol)</p>
					<p><span class="eo">s</span> : ss (santé, suisse)</p>
					<p><span class="eo">ŝ</span> : ch (chaud)</p>
					<p><span class="eo">u</span> : ou (tout)</p>
					<p><span class="eo">ŭ</span> : w (wapiti), ou bref (oui, waouh !)</p>
				</div>
			</div>
					
			<p>Les autres lettres de l'espéranto : <em>a, b, d, f,
			i, k, l, m, n, p, t, v, z</em> se prononcent comme en français. 
			Les lettres <em>q, w, x</em> et <em>y</em> n’existent pas en espéranto.</p>
			<p>Chaque voyelle, <em>a, e, i, o, u</em>, forme
			avec les consonnes voisines une syllabe séparée. Par contre, <em>j</em> et
			<em>ŭ</em>, qui sont parfois appelées <i>semi-voyelles</i>, sont des
			consonnes normales en espéranto, et font donc partie de la syllabe définie
			par une voyelle voisine. Vous trouverez des exemples plus tard dans les
			leçons à venir et nous reviendrons plus en détail sur la prononciation dans
			la quatrième leçon.</p>
			<?php 
			} // fin section 1
			if ($section=="2") {
			?>
			<p class="parto">Les <b>noms communs</b> et les <b>noms propres</b> assimilés finissent
			toujours par <b>-o</b>.</p>
			<p class="parto">Les <b>verbes à l’infinitif</b> finissent toujours par <b>-i</b>.</p>
			<p class="parto">Les <b>adjectifs</b> finissent toujours par <b>-a</b> et se placent
			normalement avant le nom qu’ils qualifient.</p>
			<p>Exemples :</p>
			
			<div class="vortlisto">
				<p><span class="eo">a<u>mi</u>ko</span> : ami</p>
				<p><span class="eo">a<u>mi</u>ka</span> : amical</p>
				<p><span class="eo"><u>es</u>ti</span> : être</p>
				<p><span class="eo"><u>no</u>va a<u>mi</u>ko</span> : un nouvel ami</p>
				<p><span class="eo"><u>sa</u>na <u>kna</u>bo</span> : un garçon en bonne santé</p>
			</div>
			<p class="rimarko"><strong>REMARQUE</strong> : Dans cet exemple, nous avons utilisé le soulignement pour indiquer que
			l’avant-dernière syllabe porte l’accent tonique, c’est-à-dire qu’on la
			prononce plus fort que les autres syllabes. En français, l’accent tonique
			est sur la dernière syllabe, aussi, pour prononcer correctement
			<span class="eo">a<u>mi</u>ko</span>, il vous suffit de prononcer d’abord le mot français
			<span class="eo">a<u>mi</u></span> puis de lui ajouter <span class="eo">ko</span>. Entraînez-vous avec les mots de
			vocabulaire de la page suivante.</p>

			<?php 
			} // fin section 2
			if ($section=="3") {
			?>
			<div class="vortlisto row">
				<div class="col s12 m4">
					<p><span class="eo">amiko</span> : ami</p>
					<p><span class="eo">Aŭstralio</span> : Australie</p>
					<p><span class="eo">biskvito</span> : biscuit</p>
					<p><span class="eo">Brazilo</span> : Brésil</p>
					<p><span class="eo">desegnisto</span> : dessinateur</p>
					<p><span class="eo">filo</span> : fils</p>
					<p><span class="eo">Francujo</span> : France</p>
					<p><span class="eo">frato</span> : frère</p>
					<p><span class="eo">instruisto</span> : instituteur</p>
					<p><span class="eo">knabo</span> : garçon</p>
					<p><span class="eo">kafo</span> : café</p>
					<p><span class="eo">kuko</span> : gâteau</p>
					
				</div>
				<div class="col s12 m4">
					<p><span class="eo">lakto</span> : lait</p>
					<p><span class="eo">lando</span> : pays</p>
					<p><span class="eo">patro</span> : père</p>
					<p><span class="eo">Pollando</span> : pologne</p>
					<p><span class="eo">profesio</span> : métier, profession</p>
					<p><span class="eo">psikologo</span> : psychologue</p>
					<p><span class="eo">pano</span> : pain</p>
					<p><span class="eo">studento</span> : étudiant</p>
					<p><span class="eo">sukero</span> : sucre</p>
					<p><span class="eo">teo</span> : thé</p>
					<p><span class="eo">urbo</span> : ville</p>
					<p><span class="eo">viro</span> : homme (mâle)</p>
					<p><span class="eo">Vjetnamio</span> : Vietnam</p>
				</div>
				<div class="col s12 m4">
					<p><span class="eo">bela</span> : beau</p>
					<p><span class="eo">bona</span> : bon</p>
					<p><span class="eo">ĉiam</span> : toujours</p>
					<p><span class="eo">en</span> : dans, en</p>
					<p><span class="eo">facila</span> : facile</p>
					<p><span class="eo">granda</span> : grand</p>
					<p><span class="eo">kiu</span> : qui</p>
					<p><span class="eo">nova</span> : nouveau</p>
					<p><span class="eo">sana</span> : sain, en bonne santé</p>
					<p><span class="eo">seka</span> : sec</p>
					<p><span class="eo">varma</span> : chaud</p>
				</div>
			</div>

			<?php 
			} // fin section 3
			if ($section=="4") {
			?>

			<p class="parto">Les <strong>pronoms personnels</strong> sont :</p>
			<div class="vortlisto row">
				<div class="col s12 m6">
					<p><span class="eo">mi</span> : je</p>
					<p><span class="eo">vi</span> : tu (ou <span class="eo">ci</span>, peu usité)</p>
					<p><span class="eo">li</span> : il (personne)</p>
					<p><span class="eo">ŝi</span> : elle (personne)</p>
					<p><span class="eo">ĝi</span> : il ou elle (non-personne)</p>
				</div>
				<div class="col s12 m6">
					<p><span class="eo">ni</span> : nous</p>
					<p><span class="eo">vi</span> : vous</p>
					<p><span class="eo">ili</span> : ils ou elles</p>
					<p><span class="eo">oni</span> : on</p>
					<p><span class="eo">si</span> : soi-même</p>
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
					<p><span class="eo">mi estas</span> : je suis</p>
					<p><span class="eo">li estas</span> : il est</p>
					<p><span class="eo">ŝi estas</span> : elle est</p>
				</div>
				<div class="col s12 m6">
					<p><span class="eo">ni estas</span> : nous sommes</p>
					<p><span class="eo">vi estas</span> : tu es, vous êtes</p>
					<p><span class="eo">ili estas</span> : ils ou elles sont</p>
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
					<p><span class="eo">mi estis</span> : j’étais, j'ai été, je fus</p>
					<p><span class="eo">mi estos</span> : je serai</p>
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
				<div class="col s12 m6">
					<p><span class="eo">biskvito</span> : un biscuit</p>
					<p><span class="eo">biskvitoj</span> : des biscuits</p>
				</div>
				<div class="col s12 m6">
					<p><span class="eo">pano</span> : du pain</p>
					<p><span class="eo">sukero</span> : du sucre</p>
				</div>
			</div>

			<p class="parto">Les <b>articles définis</b> (le, la, les) sont traduits par un seul mot
			<b>la</b>.</p>
			<div class="vortlisto row">
				<div class="col s12 m6">
					<p><span class="eo">la biskvito</span> : le biscuit</p>
					<p><span class="eo">la bonaj biskvitoj</span> : les bons biscuits</p>
				</div>
			</div>
					
			<p class="parto">Les <b>adjectifs possessifs</b> sont formés simplement en ajoutant la
			terminaison <b>-a</b> au pronom personnel. Quand ils sont employés sans
			être suivis par un nom, ils ont la fonction de nos pronoms possessifs.</p>
				
			<div class="vortlisto row">
				<div class="col s12 m4">
					<p><span class="eo">mi</span> : je</p>
					<p><span class="eo">vi</span> : tu, vous</p>
					<p><span class="eo">ŝi</span> : elle</p>
					<p><span class="eo">li</span> : lui</p>
					<p><span class="eo">ni</span> : nous</p>
					<p><span class="eo">ili</span> : ils, elles</p>
				</div>
				<div class="col s12 m4">
					<p><span class="eo">mia</span> : mon, ma</p>
					<p><span class="eo">via</span> : ton, ta, votre</p>
					<p><span class="eo">ŝia</span> : son, sa (à elle)</p>
					<p><span class="eo">lia</span> : son, sa (à lui)</p>
					<p><span class="eo">nia</span> : notre</p>
					<p><span class="eo">ilia</span> : leur</p>
				</div>
				<div class="col s12 m4">
					<p><span class="eo">miaj</span> : mes</p>
					<p><span class="eo">viaj</span> : tes, vos</p>
					<p><span class="eo">ŝiaj</span> : ses (à elle)</p>
					<p><span class="eo">liaj</span> : ses (à lui)</p>
					<p><span class="eo">niaj</span> : nos</p>
					<p><span class="eo">iliaj</span> : leurs</p>
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
			<p><em>Pour entendre ces phrases, cliquez sur bouton à gauche de la phrase.</em></p>
			
			<div class="vortlisto row">
				<p class="col s1"><a href="<?php echo $vojo;?>fr/son/l01-1.mp3" class="sm2_button"></a></p>
				<p class="col s11 m5"><span class="eo">Viaj filoj estas niaj amikoj.</span></p>
				<p class="col s11 offset-s1 m6">Vos fils sont nos amis.</p>
				<p class="col s1"><a href="<?php echo $vojo;?>fr/son/l01-2.mp3" class="sm2_button"></a></p>
				<p class="col s11 m5"><span class="eo">Iliaj kafoj estos varmaj.</span></p>
				<p class="col s11 offset-s1 m6">Leurs cafés seront chauds.</p>
				<p class="col s1"><a href="<?php echo $vojo;?>fr/son/l01-3.mp3" class="sm2_button"></a></p>
				<p class="col s11 m5"><span class="eo">La knaboj estas grandaj.</span></p>
				<p class="col s11 offset-s1 m6">Les garçons sont grands.</p>
				<p class="col s1"><a href="<?php echo $vojo;?>fr/son/l01-4.mp3" class="sm2_button"></a></p>
				<p class="col s11 m5"><span class="eo">Ŝia pano estis seka.</span></p>
				<p class="col s11 offset-s1 m6">Son pain (à elle) était sec.</p>
				<p class="col s1"><a href="<?php echo $vojo;?>fr/son/l01-5.mp3" class="sm2_button"></a></p>
				<p class="col s11 m5"><span class="eo">Vi estas lia filo.</span></p>
				<p class="col s11 offset-s1 m6">Tu es son fils (à lui).</p>
				<p class="col s1"><a href="<?php echo $vojo;?>fr/son/l01-6.mp3" class="sm2_button"></a></p>
				<p class="col s11 m5"><span class="eo">La instruisto estas sana.</span></p>
				<p class="col s11 offset-s1 m6">L'instituteur est en bonne santé.</p>
				<p class="col s1"><a href="<?php echo $vojo;?>fr/son/l01-7.mp3" class="sm2_button"></a></p>
				<p class="col s11 m5"><span class="eo">Via amiko estas bela.</span></p>
				<p class="col s11 offset-s1 m6">Ton ami est beau.</p>
				<p class="col s1"><a href="<?php echo $vojo;?>fr/son/l01-8.mp3" class="sm2_button"></a></p>
				<p class="col s11 m5"><span class="eo">La kuko estis lia.</span></p>
				<p class="col s11 offset-s1 m6">Le gâteau était à lui (était le sien)</p>
			</div>
	
			<p class="rimarko"><strong>REMARQUE</strong> :  
			Dans ces exemples les terminaisons <b>-aj</b> et <b>-oj</b> se prononcent bien
			entendu <span class="eo">aï</span> et <span class="eo">oï</span>,
			comme dans <em>ail</em> et <em>Tolstoï</em> : <span class="eo"><u>vi</u>-aï
			<u>fi</u>-loï</span>, <span class="eo"><u>ka</u>-foï</span>, 
			<span class="eo">a-<u>mi</u>-koï</span>, etc.
			</p>

			<?php 
			} // fin section 5
			if ($section=="6") {
			?>

				<div class="row">
					<div class="col s12">
						<div class="card-panel blue lighten-5">
						<!-- N'a pas encore de compte -->
						<?php if ($persono_id=="") { ?>
							<div class="row">
								<div class="col s12 m5">
									<p><b>J'ai déjà un compte :</b></p>
									<p>Je me connecte pour pouvoir compléter les exercices et demander l’aide d'un correcteur.</p>
									<p><a href="#konektigxi" class="btn waves-effect waves-light waves-light blue modal-trigger" data-activates="konektigxi">CONNEXION</a></p>
								</div>
								<div class="col s12 m7">
									<p><b>Je n’ai pas encore de compte :</b></p>
									<p>En créant un compte, vous pourrez suivre nos cours, voir votre progression et demander l’aide d’un correcteur.<br>C’est gratuit !</p>
								<p class="center"><a href="#aligxi" class="btn waves-effect waves-light blue modal-trigger" data-activates="aligxi">créer un compte</a></p>
								</div>
							</div>
							<p class="noto">Note&nbsp;: vous pouvez également suivre ce cours sans être inscrit sur ce site, mais dans ce cas vous ne pourrez pas bénéficier du suivi et de la correction des exercices.</p>
							<!-- A déjà un compte -->
							<?php } else { ?>
								<p>Pour bénéficier de notre service de correction, il vous suffit de compléter les exercices. Cliquez ensuite sur le bouton <b>ENREGISTRER MES RÉPONSES</b>.</p>
								<p>Lorsque vous aurez terminé la leçon, vous pourrez demander l’aide d’un correcteur à la fin section <b>1.8&nbsp;Épilogue</b>. Les exercices seront automatiquement envoyés à votre correcteur quand les administrateurs du cours vous en auront attribué un.</p>
							<?php } ?>
						</div>
					</div>
				</div>

			<fieldset class="ekzerco">
				<legend><strong>EXERCICE</strong> : Traduisez les phrases en espéranto.</legend>
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
						11 => "Le pain est à toi (« le pain est tien »)."
						);
						ekzerco(True, 1);
						?>
					</div>
			</fieldset>

			<fieldset class="ekzerco">
				<legend><strong>EXERCICE</strong> : Formez cinq phrases ayant un sens en combinant les mots de la leçon.</legend>
				<input type="hidden" name="013_cxap01.2" value="Formez cinq phrases ayant un sens en combinant les mots de la leçon.">
				<div class="tasko">
				<?php 	
					$demandoj=array (
					12 => "Formez une phrase ayant un sens en combinant les mots de la leçon",
					13 => "Formez une phrase ayant un sens en combinant les mots de la leçon",
					14 => "Formez une phrase ayant un sens en combinant les mots de la leçon",
					15 => "Formez une phrase ayant un sens en combinant les mots de la leçon",
					16 => "Formez une phrase ayant un sens en combinant les mots de la leçon"
					);
					ekzerco(True, 1);
				?>
				</div>
			</fieldset>
			<?php 
			} // fin section 
			if ($section=="7") {
			?>			
			<p class="parto">Voici quelques expressions pour entamer et finir une discussion. Ces expressions sont à apprendre par coeur dans un premier temps, vous verrez un peu plus tard dans les leçons pourquoi elles se construisent ainsi.</p>
		<div class="vortlisto">
			<div class="row">
				<p class="col s6 m3 eo">Saluton !</p><p class="col s6 m3">Salut !</p>
				<p class="col s6 m3 eo">Bonan tagon !</p><p class="col s6 m3">Bonjour !</p>
				<p class="col s6 m3 eo">Bonan matenon !</p><p class="col s6 m3">Bonjour ! (le matin)</p>
				<p class="col s6 m3 eo">Bonan vesperon !</p><p class="col s6 m3">Bonsoir !</p>
				<p class="col s6 m3 eo">Bonan nokton !</p><p class="col s6 m3">Bonne nuit !</p>
			</div>
			<div class="row">
				<p class="col s6 m3 eo">Mi loĝas en ...</p><p class="col s6 m3">J'habite à ...</p>
				<p class="col s6 m3 eo">Mi ŝatas ...</p><p class="col s6 m3">J'aime ... / J'apprécie ...</p>
			</div>
			<div class="row">
				<p class="col s6 m3 eo">Ĝis revido !</p><p class="col s6 m3">Au revoir !</p>
				<p class="col s6 m3 eo">Adiaŭ !</p><p class="col s6 m3">Adieu !</p>
			</div>
		</div>
			<?php 
			} // fin section 
			if ($section=="8") {
			?>
			<p class="parto">En vous aidant des expressions que l'on vient de voir et d'un peu de bon sens, essayez d'attribuer à chacune des personnes de la vidéo son nom, son domicile et sa profession.</p>
			<p>Ne vous attendez pas à comprendre <b>tout</b>, essayez juste de comprendre ce qui vous permettra de répondre au questionnaire. N'hésitez pas à regarder la vidéo plusieurs fois. Au besoin, prenez des notes sur du papier, l'exercice sera d'autant plus utile si vous essayez de répondre sérieusement aux questions. Si vous vous trompez, prenez un peu de temps pour vérifier dans la vidéo la bonne réponse avant d'essayer de donner une autre réponse.</p>
			<iframe width="560" height="315" src="https://www.youtube.com/embed/pTQEn0-fuQc" frameborder="0" allowfullscreen></iframe>


			<?php 
QCM(
	array(
		array(
			"question"=>"En kiu filmo estas Aleks ?",
			"propositions"=>array("filmo 1","filmo 2","filmo 3","filmo 4","filmo 5"),
			"indices"=>array("","",""),
			"reponse"=>2
		),
		array(
			"question"=>"En kiu filmo estas Allan ?",
			"propositions"=>array("filmo 1","filmo 2","filmo 3","filmo 4","filmo 5"),
			"indices"=>array("","",""),
			"reponse"=>5
		),
		array(
			"question"=>"En kiu filmo estas Anna Maria ?",
			"propositions"=>array("filmo 1","filmo 2","filmo 3","filmo 4","filmo 5"),
			"indices"=>array("","",""),
			"reponse"=>3
		),
		array(
			"question"=>"En kiu filmo estas Joanne ?",
			"propositions"=>array("filmo 1","filmo 2","filmo 3","filmo 4","filmo 5"),
			"indices"=>array("","",""),
			"reponse"=>1
		),
		array(
			"question"=>"En kiu filmo estas Tran Hoan ?",
			"propositions"=>array("filmo 1","filmo 2","filmo 3","filmo 4","filmo 5"),
			"indices"=>array("","",""),
			"reponse"=>4
		),
		array(
			"question"=>"Kiu loĝas en Aŭstralio ?",
			"propositions"=>array("Aleks","Allan","Anna Maria","Joanne","Tran Hoan"),
			"indices"=>array("","",""),
			"reponse"=>4
		),	
		array(
			"question"=>"Kiu loĝas en Brazilo ?",
			"propositions"=>array("Aleks","Allan","Anna Maria","Joanne","Tran Hoan"),
			"indices"=>array("","",""),
			"reponse"=>2
		),
		array(
			"question"=>"Kiu loĝas en Francio ?",
			"propositions"=>array("Aleks","Allan","Anna Maria","Joanne","Tran Hoan"),
			"indices"=>array("","",""),
			"reponse"=>1
		),
		array(
			"question"=>"Kiu loĝas en Pollando ?",
			"propositions"=>array("Aleks","Allan","Anna Maria","Joanne","Tran Hoan"),
			"indices"=>array("","",""),
			"reponse"=>3
		),
		array(
			"question"=>"Kiu loĝas en Vjetnamio ?",
			"propositions"=>array("Aleks","Allan","Anna Maria","Joanne","Tran Hoan"),
			"indices"=>array("","",""),
			"reponse"=>5
		),
		
		array(
			"question"=>"Kiu estas desegnisto ?",
			"propositions"=>array("Aleks","Allan","Anna Maria","Joanne","Tran Hoan"),
			"indices"=>array("","",""),
			"reponse"=>4
		),		
		array(
			"question"=>"Kiu estas intruisto ?",
			"propositions"=>array("Aleks","Allan","Anna Maria","Joanne","Tran Hoan"),
			"indices"=>array("","",""),
			"reponse"=>1
		),
		array(
			"question"=>"Kiu estas psikologo ?",
			"propositions"=>array("Aleks","Allan","Anna Maria","Joanne","Tran Hoan"),
			"indices"=>array("","",""),
			"reponse"=>3
		),
		array(
			"question"=>"Kiu estas studento ?",
			"propositions"=>array("Aleks","Allan","Anna Maria","Joanne","Tran Hoan"),
			"indices"=>array("","",""),
			"reponse"=>2
		),
		array(
			"question"=>"Kiu laboras pri importo-eksporto ?",
			"propositions"=>array("Aleks","Allan","Anna Maria","Joanne","Tran Hoan"),
			"indices"=>array("","",""),
			"reponse"=>5
		)
	)
);
			?>


			<?php 
			} // fin section 
			if ($section=="9") {
			?>
			<p class="parto">A votre tour ! En vous aidant du vocabulaire déjà vu et de la vidéo de l'exercice précédent, essayez de vous présenter à votre correcteur en quelques mots. N'oubliez pas les formules de politesse pour dire bonjour et au revoir. Si vous ne savez pas comment dire en espéranto votre profession, ce sera l'occasion de demander à votre correcteur. Vous devriez être capable de rédiger 4/5 phrases en espéranto.</p>
			<p>Cet exercice ne vous permettra pas uniquement de vérifier que vous avez assimilé le nouveau vocabulaire, mais également de faire connaissance avec votre correcteur qui vous sera attribué et qui corrigera vos exercices tout au long de ce cours. Aucune utilisation commerciale ne sera faite des informations que vous transmettrait.</p>

					<?php
						$demandoj=array (
						17 => "Je me présente :"
						);
						ekzerco(True, 5);
						?>


						<p class="parto">Voici un peu de vocabulaire qui peuvent vous aidez, n'apprenez pas ces mots par coeur, ils ne seront utiles que pour cet exercice.</p>
			<div class="vortlisto row">
				<div class="col s12 m4">
					<p><b>Profession</b></p>
					<p><span class="eo">emerito</span> : retraité</p>
					<p><span class="eo">funkciulo</span> : fonctionnaire</p>
					<p><span class="eo">ĵurnalisto</span> : journaliste</p>
					<p><span class="eo">laboristo</span> : ouvrier</p>
					<p><span class="eo">komputilisto</span> : informaticien</p>
					<p><span class="eo">oficisto</span> : employé</p>
					<p><span class="eo">senlaborulo</span> : chômeur</p>
					
				</div>
				<div class="col s12 m4">
					<p><b>Pays</b></p>
					<p><span class="eo">Afriko</span> : Afrique</p>
					<p><span class="eo">Belgio</span> : Belgique</p>
					<p><span class="eo">Eŭropo</span> : Europe</p>
					<p><span class="eo">Francujo</span> : France</p>
					<p><span class="eo">Kanado</span> : Canada</p>
					<p><span class="eo">Parizo</span> : Paris</p>
					<p><span class="eo">Svislando</span> : Suisse</p>
				</div>
				<div class="col s12 m4">
					<p><b>Adjectifs</b></p>
					<p><span class="eo">donacema</span> : généreux</p>
					<p><span class="eo">feliĉa</span> : heureux</p>
					<p><span class="eo">juna</span> : jeune</p>
					<p><span class="eo">maljuna</span> : vieux</p>
					<p><span class="eo">scivola</span> : curieux, qui aime apprendre</p>
					<p><span class="eo">sportema</span> : sportif, qui aime le sport</p>
					<p><span class="eo">vojaĝema</span> : voyageur, qui aime voyager</p>
				</div>
			</div>

			<?php 
			} // fin section 
			if ($section=="10") {
			?>

			<p>
			Dans l’exercice suivant, sélectionnez la réponse exacte en 
			cliquant sur le bouton associé. Attention&nbsp;! L’exercice est très facile (il 
			suffit d’avoir compris le cours), mais ne tentez pas de répondre au hasard, car il 
			y a tout de même 67 108 864 réponses possibles…
			</p>
			<?php 
QCM(
	array(
		array(
			"question"=>"Combien de syllabes y a-t-il dans 'viaj kukoj' ?",
			"propositions"=>array("3","4","5","6"),
			"indices"=>array("","",""),
			"reponse"=>2
		),
		array(
			"question"=>"Quelle est la place de l’accent tonique ?",
			"propositions"=>array("sur la dernière voyelle","sur l’avant-dernière syllabe","sur la dernière syllabe","sur la première voyelle"),
			"indices"=>array("","",""),
			"reponse"=>2
		),
		array(
			"question"=>"Comment se prononce la lettre 'ĝ' ?",
			"propositions"=>array("comme le 'g' de 'Alger'","comme le 'g' de 'Lagos'","comme le 'dj' de 'Djibouti'","aucun de ceux-ci"),
			"indices"=>array("","",""),
			"reponse"=>3
		),
		array(
			"question"=>"Comment écrit-on en espéranto le son 'ch' du mot français 'chat' ?",
			"propositions"=>array("ch","ŝ","ce son n’existe pas en espéranto","sch"),
			"reponse"=>2
		),		
		array(
			"question"=>"Comment écrit-on le son 'u' qui apparaît dans 'tutu' en français ?",
			"propositions"=>array("u","y","il n'existe pas en espéranto","&uuml;"),
			"reponse"=>3
		),
		array(
			"question"=>"Quel est le pronom de 3<sup>e</sup> personne féminin singulier ?",
			"propositions"=>array("mi","ili","ĝi","ŝi"),
			"reponse"=>4
		),
		array(
			"question"=>"Quelle est la terminaison caractéristique de l'infinitif ?",
			"propositions"=>array("-i","-is","-ar","-j"),
			"reponse"=>1
		),
		array(
			"question"=>"Quelle est la terminaison caractéristique de l’adjectif ?",
			"propositions"=>array("-as","-o","-j","-a"),
			"reponse"=>4
		),
		array(
			"question"=>"Quelle est la terminaison caractéristique du passé ?",
			"propositions"=>array("-i","-j","-a","-is"),
			"reponse"=>4
		),
		array(
			"question"=>"Quelle est la terminaison caractéristique du nom ?",
			"propositions"=>array("-o","-os","cela dépend du genre","-a"),
			"reponse"=>1
		),
		array(
			"question"=>"Comment dit-on 'du thé chaud' ?",
			"propositions"=>array("la varmo tea","varma teo","varmo teo","la varma teo"),
			"reponse"=>2
		),
		array(
			"question"=>"Comment dit-on 'de bons garçons' ?",
			"propositions"=>array("bona knaboj","la bonaj knaboj","bonaj knaboj","bonoj knaboj"),
			"reponse"=>3
		),
		array(
			"question"=>"Comment dit-on 'mes fils' ?",
			"propositions"=>array("mia filioj","miaj filoj","miaj filioj","mia filoj"),
			"reponse"=>2
		)	
	)
);
			?>
			
			<?php 
			} // fin section
			if ($section=="11") {
			?>

			<p>
			Espérons que nous ne vous avons pas effrayé pour ce premier contact avec
			l’espéranto. Vous n’avez certainement pas tout assimilé mais cela
			viendra petit à petit. Vous pouvez déjà remarquer avec l’exercice
			précédent que vous êtes capable d’exprimer en espéranto des phrases
			simples dont vous maîtrisez parfaitement la grammaire. 
			</p>
			<p>
			Un tel résultat ne pourrait pas être obtenu aussi rapidement s’il
			s’agissait d’apprendre l’allemand ou l’anglais&nbsp;! Pensez que
			potentiellement vous savez déjà conjuguer le verbe <i>esti</i> au présent,
			passé et futur de toutes les personnes, que vous connaissez les
			adjectifs possessifs et le pluriel. Avec la vingtaine de mots du
			vocabulaire vous pouvez déjà assembler un tas de phrases suivant les
			modèles&nbsp;:</p>
			<p class="eo container">
			      (la/mia/via...) -a -o estas -a.<br>
			      (la/mia/via...) -a -o estas -a -o.
			</p>
			<p>Donc à bientôt pour la prochaine leçon&nbsp;!</p>

			<div class="card-panel blue lighten-5">
				<p>
				L’inscription n’est indispensable que si vous désirez faire appel à un correcteur. Les correcteurs sont bénévoles et s’occupent chacun d’un nombre limité d'élèves.</p>
				<p>En demandant un correcteur, vous vous engagez à suivre le cours avec assiduité et informer votre correcteur en cas d’absence prolongée. Votre correcteur est là pour répondre à vos questions sur la langue espéranto, mais aussi sur l'utilisation que l’on peut faire de l’espéranto. N’hésitez pas à vous présenter et faire connaissance.</p>
				<p>Bon apprentissage !</p>	
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
								
		<ul class="collapsible" data-collapsible="expandable">

			<?php 
			// On affiche le sommaire de la lecon
			getEnhavtabelo('CG',$leciono); 
			?>

		</ul>	
	</aside>
</div>
<?php include "dlekpiedo.inc.php"; ?>
