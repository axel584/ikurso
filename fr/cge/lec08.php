<?php
$titolo="8 (ok)";
$leciono = 8;
$section=isset($_GET["section"])?$_GET["section"]:"1";
include "dlekkapo.inc.php";

?>

<div class="row">
	<article class="col s12 m10 l7 offset-m1 offset-l1">
		<section id="leciono-enhavo">
			<?php 
			getTitoloLecionero('CG',8,$section);
			
			if ($section=="1") {
			?>
			<p class="parto">
			Maintenant, il ne nous reste que quelques terminaisons grammaticales à
			apprendre avant de pouvoir lire couramment en espéranto. Nous avons vu
			que les verbes se terminent en <b>-as</b> (présent), <b>-is</b> (passé), 
			<b>-os</b> (futur). Il y a aussi&nbsp;:
			</p>
			<div class="row vortlisto">
				<p class="col s4">le <b>conditionnel</b> :</p>
				<p class="col s1"><b>-us</b></p>
				<p class="col s7"><span class="eo">Se mi est<b>us</b> riĉa, mi vojaĝ<b>us</b> multe.</span></p>
				<p class="col s7 offset-s5">= Si j’étais riche, je voyagerais beaucoup.</p>
			</div>
			<div class="row">
				<p class="col s12">et</p>
			</div>
			<div class="row vortlisto">
				<p class="col s4">l’<b>impératif-subjonctif</b> :</p>
				<p class="col s1"><b>-u</b></p>
				<p class="col s7"><span class="eo">Ferm<b>u</b> la pordon kaj sidiĝ<b>u</b>!</span></p>
				<p class="col s7 offset-s5">= Ferme la porte et assieds-toi !</p>
				<p class="col s7 offset-s5"><span class="eo">Li ferm<b>u</b> la pordon kaj sidiĝ<b>u</b>!</span></p>
				<p class="col s7 offset-s5">= Qu’il ferme la porte et qu’il s’asseye !</p>
				<p class="col s7 offset-s5"><span class="eo">Mi volas, ke vi ven<b>u</b>.</span></p>
				<p class="col s7 offset-s5">= Je veux que tu viennes.</p>
			</div>
	
			<p class="rimarko"><strong>REMARQUE</strong> : 
			Remarquez que, contrairement au français :</p>
			<p><b>1.</b> Le conditionnel s’applique aux deux propositions de la phrase et pas seulement à la dernière.</p>
			<p><b>2.</b> Le conditionnel ne s’utilise pas pour montrer le futur dans le passé.</p>
			<div class="row">
				<p class="col s11 offset-s1">Je crois qu’il viendra : <span class="eo">Mi kredas, ke li venos.</span></p>
				<p class="col s11 offset-s1">Je croyais qu’il viendrait :  <span class="eo">Mi kredis, ke li ven<b>os</b>.</span></p>
			</div>
	
			<a id="participes" class="scrollspy"></a>

			<p class="parto">Enfin, il reste les <b>participes</b> (mots qui s’emploient comme verbes,
			adjectifs, adverbes ou noms)&nbsp;:
			</p>
	
			<div class="row vortlisto">
				<p class="col s12"><b>Participes de la voix active</b></p>
				<div class="col s12 row">
					<p class="col s2">Présent :</p>
					<p class="col s2"><img src="<?php echo $vojo;?>fr/cge/bildoj/leganta.jpg" class="responsive-img" alt="Ŝi estas leganta."></p>
					<p class="col s1">-<b>ant</b></p>
					<p class="col s7"><span class="eo">Ŝi estas leg<b>ant</b>a.</span><br>= Elle est lisant (en train de lire).</p>
				</div>
				<div class="col s12 row">
					<p class="col s2">Passé :</p>
					<p class="col s2"><img src="<?php echo $vojo;?>fr/cge/bildoj/leginta.jpg" class="responsive-img" alt="Ŝi estas leginta."></p>
					<p class="col s1">-<b>int</b></p>
					<p class="col s7"><span class="eo">Ŝi estas leg<b>int</b>a.</span>
						<br>= Elle est ayant lu (elle a lu, elle a fini de lire).</p>
				</div>
				<div class="col s12 row">
					<p class="col s2">Futur :</p>
					<p class="col s2"><img src="<?php echo $vojo;?>fr/cge/bildoj/legonta.jpg" class="responsive-img" alt="Ŝi estas legonta."></p>
					<p class="col s1">-<b>ont</b></p>
					<p class="col s7"><span class="eo">Ŝi estas leg<b>ont</b>a.</span><br>= Elle est devant lire (sur le point de lire).</p>
				</div>
			</div>
			<div class="row vortlisto">
				<p class="col s12"><b>Participes de la voix passive</b></p>
				<div class="col s12 row">
					<p class="col s2">Présent :</p>
					<p class="col s2"><img src="<?php echo $vojo;?>fr/cge/bildoj/legata.jpg" class="responsive-img" alt="La libro estas legata."></p>
					<p class="col s1">-<b>at</b></p>
					<p class="col s7"><span class="eo">La libro estas leg<b>at</b>a.</span><br>= Le livre est lu (en train d’être lu).</p>
				</div>
				<div class="col s12 row">
					<p class="col s2">Passé :</p>
					<p class="col s2"><img src="<?php echo $vojo;?>fr/cge/bildoj/legita.jpg" class="responsive-img" alt="La libro estas legita."></p>
					<p class="col s1">-<b>it</b></p>
					<p class="col s7"><span class="eo">La libro estas leg<b>it</b>a.</span>
						<br>= Le livre est lu (ayant été lu).</p>
				</div>
				<div class="col s12 row">
					<p class="col s2">Futur :</p>
					<p class="col s2"><img src="<?php echo $vojo;?>fr/cge/bildoj/legota.jpg" class="responsive-img" alt="La libro estas legota."></p>
					<p class="col s1">-<b>ot</b></p>
					<p class="col s7"><span class="eo">La libro estas leg<b>ot</b>a.</span><br>= Le livre est devant être lu (à lire).</p>
				</div>
			</div>
			
			<p class="parto">Ces participes peuvent prendre la terminaison du pluriel. Par exemple : </p>
			<div class="row">
				<p class="col s12"><span class="eo">Ili estas legantaj</span> : Ils sont en train de lire</p>
				<p class="col s12"><span class="eo">Ili estas legintaj</span> : Ils ont lu</p>
				<p class="col s12"><span class="eo">La libroj estas legataj</span> : Les livres sont lus</p>
			</div>

			<p class="parto">En résumé :</p>
			<div class="row">
				<p class="col s12 l6"><span class="eo">leg<b>ant</b>a</span> = <span class="eo">kiu legas</span> = qui lit, lisant</p>
				<p class="col s12 l6"><span class="eo">leg<b>ant</b>aj</span> = <span class="eo">kiuj legas</span> = qui lisent, lisant</p>
			</div>
			<div class="row">
				<p class="col s12 l6"><span class="eo">leg<b>int</b>a</span> = <span class="eo">kiu legis</span> = qui a lu, qui lisait, ayant lu</p>
				<p class="col s12 l6"><span class="eo">leg<b>int</b>aj</span> = <span class="eo">kiuj legis</span> = qui ont lu, qui lisaient, ayant lu</p>
			</div>
			<div class="row">
				<p class="col s12 l6"><span class="eo">leg<b>ont</b>a</span> = <span class="eo">kiu legos</span> = qui lira</p>
				<p class="col s12 l6"><span class="eo">leg<b>ont</b>aj</span> = <span class="eo">kiuj legos</span> = qui liront</p>
			</div>
			<div class="row">
				<p class="col s12 l6"><span class="eo">leg<b>at</b>a</span> = <span class="eo">kiun oni legas</span> = qu’on lit</p>
				<p class="col s12 l6"><span class="eo">leg<b>at</b>aj</span> = <span class="eo">kiujn oni legas</span> = qu’on lit</p>
			</div>
			<div class="row">
				<p class="col s12 l6"><span class="eo">leg<b>it</b>a</span> = <span class="eo">kiun oni legis</span> = qu’on a lu, lu</p>
				<p class="col s12 l6"><span class="eo">leg<b>it</b>aj</span> = <span class="eo">kiujn oni legis</span> = qu’on a lus, lus</p>
			</div>
			<div class="row">
				<p class="col s12 l6"><span class="eo">leg<b>ot</b>a</span> = <span class="eo">kiujn oni legos</span> = qu’on lira</p>
				<p class="col s12 l6"><span class="eo">leg<b>ot</b>aj</span> = <span class="eo">kiujn oni legos</span> = qu’on lira</p>
			</div>
	
			<p class="rimarko"><strong>REMARQUES</strong> : </p>
			<ol>
				<li>Le français dit «&nbsp;la porte est fermée&nbsp;» sans distinguer si on est en train de fermer la porte 
				(<span class="eo">la pordo estas ferm<b>at</b>a</span>), 
				ou si la porte est en position fermée (<span class="eo">la pordo estas ferm<b>it</b>a</span>).
				</li>
				<li>En combinant le verbe <span class="eo">esti</span> et les 6 formes de participes, 
				on obtient un grand nombre de formes composées. Sachez toutefois que
				l’espéranto préfère les formes simples et n’utilise les formes
				composées que lorsque ces dernières apportent une précision
				indispensable.</li>
			</ol>
			
			<p class="parto">Les participes peuvent prendre la forme des adjectifs (terminaison en
			<b>-a</b>), des adverbes (<b>-e</b>), ou des noms (<b>-o</b>). 
			Leur utilisation permet beaucoup de précision, de souplesse et de concision. 
			Bien que nous ne puissions pas vous indiquer ici toute la gamme des 
			applications, nous vous invitons à saisir le sens des participes dans 
			les exemples suivants&nbsp;:</p>
			<div class="row vortlisto">
				<p class="col s12 eo">La leg<b>ant</b>o havas bonan voĉon, sed la antaŭa leg<b>int</b>o havis pli bonan.</p>
				<p class="col s11 offset-s1">= Le lecteur a une bonne voix, mais le lecteur précédent (en) avait une meilleure.</p>
				<p class="col s12 eo">Mi opinias tamen, ke la leg<b>ont</b>o havos la plej bonan voĉon el ĉiuj.</p>
				<p class="col s11 offset-s1">= Je suis d’avis, toutefois, que le lecteur à venir aura la meilleure voix de tous.</p>
				<p class="col s12 eo">Leg<b>ant</b>e ni lernas.</p>
				<p class="col s11 offset-s1">= Nous apprenons en lisant.</p>
				<p class="col s12 eo">Manĝ<b>ont</b>e la pomon, li ekvidis la vermon.</p>
				<p class="col s11 offset-s1">= Sur le point de manger la pomme, il aperçut le ver.</p>
				<p class="col s12 eo">La konstru<b>at</b>a domo.</p>
				<p class="col s11 offset-s1">= La maison en train d’être construite.</p>
				<p class="col s12 eo">La skrib<b>ot</b>a letero.</p>
				<p class="col s11 offset-s1">= La lettre à écrire, c-à-d. devant être écrite.</p>
				<p class="col s12 eo">La ferm<b>it</b>a pordo.</p>
				<p class="col s11 offset-s1">= La porte fermée, c-à-d. qui a été fermée.</p>
			</div>

			<fieldset class="vortoj">
				<legend>VOCABULAIRE À RETENIR</legend>
				<div>
					<?php if ($persono) { ?>
					<p class="eo eta">Ces mots seront automatiquement ajoutés à votre vocabulaire à réviser lorsque vous aurez terminé d'étudier cette section. Le nombre de mots à réviser sera indiqué sur le bouton affiché au-dessus du sommaire.</p>
					<?php } ?>
				</div>
				<div class="vortlisto row">
					<p class="col s12 m4"><span class="eo">voĉo</span> : voix</p>
					<p class="col s12 m4"><span class="eo">pordo</span> : porte</p>
					<p class="col s12 m4"><span class="eo">vermo</span> : ver</p>
					<p class="col s12 m4"><span class="eo">letero</span> : lettre (courrier)</p>
					<p class="col s12 m4"><span class="eo">honori</span> : honorer</p>
					<p class="col s12 m4"><span class="eo">diablo</span> : diable</p>
					<p class="col s12 m4"><span class="eo">adori</span> : adorer</p>
				</div>
			</fieldset>

		<?php 
		} // fin section 1
		if ($section=="2") {
		?>

			<p><a href="<?php echo $vojo;?>fr/son/pv8-1.mp3" class="sm2_button"></a> <span class="eo">Vivanton ni malhonoras, mortinton ni adoras.</span></p>
			<p>
			<a href="<?php echo $vojo;?>fr/son/pv8-2.mp3" class="sm2_button"></a> <span class="eo">Dancu diabloj, sed ne en mia arbaro.</span></p>

			<div class="vortlisto row">
				<p class="col s6 m4"><span class="eo">honori</span> : honorer</p>
				<p class="col s6 m4"><span class="eo">diablo</span> : diable</p>
				<p class="col s6 m4"><span class="eo">adori</span> : adorer</p>
			</div>
			
			<p class="parto">Dans le premier proverbe, on souligne qu’on juge différemment une personne morte ou vivante, on la déshonore de son vivant, mais on la vénère quand elle est morte. Dans le deuxième proverbe, le diable personnifie les problèmes qui peuvent arriver et ceux-ci ne sont pas considérés comme graves s’ils ne sont pas chez soi.</p>
			
		<?php 
		} // fin section 2
		if ($section=="3") {
		?>
		<fieldset class="ekzerco">
			<legend><strong>EXERCICE</strong> : Complétez les phrases selon le modèle.</legend>
			<input type="hidden" name="013_cxap08.1" value="1. Complétez les phrases selon le modèle.">
			<?php atentigo(); ?>
				<div class="ekzemplo row">
					<p><em>Exemples :</em></p>
					<p>La virino, kiu legas, estas ______.<br>
					→ La virino, kiu legas, estas leganta virino.</p>
					<p>La libro, kiun la virino legas, estas ______.<br>
					→ La libro, kiun la virino legas, estas legata libro.</p>
				</div>
			<div class="tasko">
			<?php
				$demandoj=array (
				1 => "La infano, kiu ludas estas ______ .",
				2 => "La junulo, kiu studis, estas ______ .",
				3 => "La katoj, kiuj dormas, estas ______ .",
				4 => "La birdoj, kiuj flugos, estas ______ .",
				5 => "La junulino, kiu vojaĝas, estas ______ .",
				6 => "La kuko, kiun la infano manĝas, estas ______ .",
				7 => "La ĵurnaloj, kiujn la junulo legis, estas ______ .",
				8 => "La frukto, kiun la birdo manĝas, estas ______ .",
				9 => "La amiko, kiun mi renkontos, estas ______ .",
				10 => "La pordo, kiun li fermis, estas ______ ."
				);
				ekzerco(True, 1);
			?>
			</div>
		</fieldset>

		<?php 
		} // fin section 3
		if ($section=="4") {
		?>
		<fieldset class="ekzerco">
			<legend><strong>EXERCICE</strong> : Traduisez en espéranto en utilisant la terminaison verbale appropriée.</legend>
			<input type="hidden" name="013_cxap08.2" value="2. Traduisez en espéranto en utilisant la terminaison verbale appropriée.">
			<?php atentigo(); ?>
			<div class="tasko">
			<?php
				$demandoj=array (
				11 => "Si elle venait à 8h nous pourrions manger à 8h30.",
				12 => "Je désire qu’elle vienne à 8h mais je crois qu’elle ne viendra pas avant 9h.",
				13 => "Va là-bas, assieds-toi et ouvre le sucrier !",
				14 => "Cet imbécile veut me rencontrer à l’étable. Qu’il [y] aille en premier, et qu’il m’attende. Je viendrai quand je voudrai.",
				15 => "Que faire ? (Qu’est-ce que je «dois-faire» ?)",
				16 => "Il croyait que je ne viendrais pas avant 9h mais je suis venue à 8h moins 5.",
				17 => "Sur le point de chanter, il se mit à rire. (préfixe ek-)",
				18 => "Elle se mit à rougir en griffonnant le nom du garçon."
				);
				ekzerco(True, 1);
			?>
			</div>
		</fieldset>
	
		<?php 
		} // fin section 4
		if ($section=="5") {
		?>

			<p>
			Vous pouvez désormais lire des textes faciles. Traduisez le texte suivant en français. Le vocabulaire nouveau se trouve à la
			fin de l’exercice.
			</p>
			<input type="hidden" name="013_cxap08.3" value="3. Veuillez traduire en français les anecdotes suivantes.">
			
			<fieldset class="ekzerco">
				<legend><strong>EXERCICE</strong> : Traduisez en français.</legend>
				<div class="tasko">
				<?php
					$demandoj=array (
					19 => "<br>Juĝisto:  Ĉu vi do asertas, ke vi iris en la domon opiniante, ke ĝi estas via domo ?<br>Akuzato: Jes, sinjoro juĝisto.<br>Juĝisto:  Sed kial vi forkuris, kiam la sinjorino envenis ?<br>Akuzato: Mi opiniis, ke ŝi estas mia edzino !",
					20 => "<br>Patrino en tramo: Joĉjo, kial vi sidas kun fermitaj okuloj ? Ĉu vi estas laca ?<br>Joĉjo: Ne ! Ne plaĉas al mi vidi starantajn virinojn."
				   );
					ekzerco(False, 5);
				?>
				</div>
			</fieldset>

			<fieldset class="vortoj">
				<legend>VOCABULAIRE À RETENIR</legend>
				<div>
					<?php if ($persono) { ?>
					<p class="eo eta">Ces mots seront automatiquement ajoutés à votre vocabulaire à réviser lorsque vous aurez terminé d'étudier cette section. Le nombre de mots à réviser sera indiqué sur le bouton affiché au-dessus du sommaire.</p>
					<?php } ?>
				</div>
				<div class="vortlisto row">
					<p class="col s12 m6"><span class="eo">juĝisto</span> : juge</p>
					<p class="col s12 m6"><span class="eo">aserti</span> : affirmer, prétendre</p>
					<p class="col s12 m6"><span class="eo">akuzato</span> : l’accusé</p>
					<p class="col s12 m6"><span class="eo">forkuri</span> : se sauver, c-à-d. courir au loin</p>
					<p class="col s12 m6"><span class="eo">tramo</span> : tramway</p>
					<p class="col s12 m6"><span class="eo">okulo</span> : œil</p>
					<p class="col s12 m6"><span class="eo">opinii</span> : penser, avoir une opinion</p>
					<p class="col s12 m6"><span class="eo">stari</span> : être debout</p>
					<p class="col s12 m6"><span class="eo">laca</span> : fatigué</p>
					<p class="col s12 m6"><span class="eo">plaĉi</span> : plaire</p>
				</div>
			</fieldset>
			
			<?php 
			} // fin section 5
			if ($section=="6") {
			?>
			
			<p class="parto">Dans la <a href="lec01.php?section=4">première leçon</a>, vous avez vu les pronoms personnels. Pour mémoire, en voici de nouveau la liste.</p>
			<div class="vortlisto row">
				<div class="col s12 m6">
					<p><span class="eo">mi</span> : je</p>
					<p><span class="eo">vi</span> : tu (ou <span class="eo">ci</span>, peu usité)</p>
					<p><span class="eo">li</span> : il (personne)</p>
					<p><span class="eo">ŝi</span> : elle (personne)</p>
					<p><span class="eo">ĝi</span> : il ou elle (non-personne)</p>
				</div>
				<div class="col s12 m6">
					<p><span class="eo">ni</span> : nous</p>
					<p><span class="eo">vi</span> : vous</p>
					<p><span class="eo">ili</span> : ils ou elles</p>
					<p><span class="eo">oni</span> : on</p>
				</div>
			</div>
			 <p>Vous avez vu également comment on construit les adjectifs possessifs à partir des pronoms en ajoutant la terminaison -<b>a</b>&nbsp;:</p>
			<div class="row">
				<p class="col s12"><span class="eo">Li manĝas mi<b>an</b> kukon.</span> : Il mange mon gâteau.</p>
				<p class="col s12"><span class="eo">Mi ŝatas ŝi<b>ajn</b> kukojn.</span> : J’aime ses gâteaux.</p>
				<p class="col s12"><span class="eo">Ni ludas kun ili<b>aj</b> infanoj.</span> : Nous jouons avec leurs enfants.</p>
			</div>

			<p class="parto">Considérez maintenant la phrase suivante&nbsp;:</p>
			
			<div class="row">
				<div class="col s7 m9 l8">
					<p><b>Mario joue avec son chien.</b></p>
					<p>Dans cette phrase, <b>son</b> peut se rapporter à lui-même (c’est son propre chien) ou à quelqu’un d’autre (c'est par exemple le chien de son frère ou sa grand-mère).</p>
					<p>En espéranto, on utilise dans ce cas des pronoms différents pour indiquer si <b>son</b> se rapporte à lui-même, ou à quelqu’un d’autre.</p>
			<p>On différencie donc trois cas&nbsp;:</p>
					
				</div>
				<div class="col s5 m3 l4"><img class="responsive-img" src="<?=$vojo?>fr/cge/bildoj/li-ludas-kun-hundo.jpg"></div>
			</div>
			
			<fieldset>
				<div class="row">
					<div class="col s12">
						<p><span class="eo">Mario ludas kun <b>sia</b> hundo.</span><br>= Mario joue avec son propre chien.</p>
						<p><span class="eo">Mario ludas kun <b>lia</b> hundo.</span><br> = Mario joue avec le chien d’une personne de sexe masculin.</p>
						<p><span class="eo">Mario ludas kun <b>ŝia</b> hundo.</span><br>= Mario joue avec le chien d’une personne de sexe féminin.</p>
					</div>
				</div>
			</fieldset>
			
			<p>Autre exemple&nbsp;:</p>

			<div class="row">
				<p class="col s12"><span class="eo">Ŝi kisis sian edzon.</span> =&nbsp;Elle a embrassé son (propre) mari.</p>
				<p class="col s12"><span class="eo">Ŝi kisis ŝian edzon.</span> =&nbsp;Elle a embrassé son mari (le mari d’une autre femme).</p>
			</div>

			<p class="parto">De la même façon, on différencie&nbsp;:</p>
			<div class="row">
				<p class="col s12"><span class="eo">Johano lavis <b>sin</b>.</span> = Jean s’est lavé.</span></p>
				<p class="col s12"><span class="eo">Johano lavis <b>lin</b>.</span> = Jean l’a lavé. (il a lavé une autre personne, de sexe masculin)</span></p>
				<p class="col s12"><span class="eo">Johano lavis <b>ŝin</b>.</span> = Jean l’a lavée (il a lavé une autre personne, de sexe féminin)</span></p>
			</div>
			
			<p>Autre exemple&nbsp;:</p>
			
			<div class="row">
				<p class="col s12"><span class="eo">Sofia diris al <b>si</b> … </span> = Sophie s’est dit … (à elle-même)</span></p>
				<p class="col s12"><span class="eo">Sofia diris al <b>li</b> … </span> = Sophie lui a dit …, (à une autre personne de sexe masculin)</span></p>
				<p class="col s12"><span class="eo">Sofia diris al <b>ŝi</b> … </span> = Sophie lui a dit …, (à une autre personne de sexe féminin)</span></p>
			</div>
			
		<fieldset class="memoru">
			<legend>À RETENIR</legend>
			<div class="regulo row">
			<p><b>Si</b> est le <b>pronom réfléchi</b> de la 3<sup>e</sup> personne, du singulier ou du
			pluriel. <b>Sia</b> est l’adjectif possessif correspondant. <b>Si</b> et <b>sia</b> se rapportent toujours au sujet du verbe. 
			</p>
			</div>
		</fieldset>
		
		<p>Crédits photos :</p>
		<p class="creditphoto">Marvin Meyer, <a href="https://stocksnap.io/author/41003">https://stocksnap.io/author/41003</a></p>
			

		<?php 
		} // fin section 6
		if ($section=="7") {
		?>
		
			<fieldset class="ekzerco">
				<legend><strong>EXERCICE</strong> : Traduisez ces textes en français.</legend>
				<p>Le vocabulaire nouveau se trouve à la fin de l’exercice.</p>
				<input type="hidden" name="013_cxap08.4" value="4. Même exercice.">
				<div class="tasko">
				<?php
					$demandoj=array (
					21 => "<br>- Incitas min, ke mia edzino daŭre parolas pri sia antaŭa edzo.<br>- Tio estas nenio ! La mia paroladas pri sia estonta edzo !",
					22 => "<br>En kafejo:<br>- Kial vi rigardadas al la pordo ?<br>- Mi observadas, ĉu ne iu foriras kun mia surtuto. Kun la via jam antaŭ dek minutoj foriris iu.",
					23 => "<br>La junaj geedzoj havis konflikton hejme, kaj poste dum la aŭto-veturado ili ambaŭ obstine silentis. Preterpasante aron da azenoj la edzo diris moke:<br>- Ĉu parencoj de vi ?<br>- Jes, boparencoj !"
					);
					ekzerco (False, 5);
				?>
				</div>
			</fieldset>
		
			<div class="vortlisto row">
				<p class="col s6"><span class="eo">inciti</span> : irriter</p>
				<p class="col s6"><span class="eo">daŭre</span> : continuellement</p>
				<p class="col s6"><span class="eo">estonta</span> : futur (participe futur de <em>esti</em>)</p>
				<p class="col s6"><span class="eo">kafejo</span> : café (restaurant)</p>
				<p class="col s6"><span class="eo">for-iri</span> : partir</p>
				<p class="col s6"><span class="eo">surtuto</span> : pardessus</p>
				<p class="col s6"><span class="eo">jam</span> : déjà</p>
				<p class="col s6"><span class="eo">konflikto</span> : conflit</p>
				<p class="col s6"><span class="eo">hejme</span> : à la maison</p>
				<p class="col s6"><span class="eo">aŭto-veturado</span> : trajet en voiture</p>
				<p class="col s6"><span class="eo">ambaŭ</span> : tous deux</p>
				<p class="col s6"><span class="eo">moke</span> : par moquerie</p>
				<p class="col s6"><span class="eo">obstine</span> : avec obstination</p>
				<p class="col s6"><span class="eo">silenti</span> : garder le silence</p>
				<p class="col s6"><span class="eo">preter-pasi</span> : dépasser, passer (devant)…</p>
				<p class="col s6"><span class="eo">parenco</span> : parent (personne de la même famille)</p>
			</div>
		<?php 
		} // fin section 7
		if ($section=="8") {
		?>
			<p>
			Lisez régulièrement le texte suivant à haute voix en ayant soin
			d’appliquer l’accent tonique sur l’avant-dernière syllabe comme il se
			doit.
			</p>
			
			<div class="vortlisto">
				<p>
				La lingvo Esperanto estis kreita de Doktoro Zamenhof, por ke la homoj de
				la diversaj nacioj povu interŝanĝi siajn ideojn sen malfacilaĵo.
				Esperanto volas, ke sur la tuta mondo ĉiu povu esprimi tion, kion li aŭ
				ŝi pensas per lingvo facila por ĉiuj popoloj, lernebla en kelkaj
				semajnoj. Simpla, fleksebla, belsona, vere internacia en siaj elementoj,
				la lingvo Esperanto prezentas al la mondo la solan praktikan solvon de
				lingvo internacia, ĉar, facila por homoj kleraj, Esperanto estas
				preskaŭ sen peno komprenata ankaŭ de la personoj nemulte instruitaj.
				Mil faktoj atestas la grandan meriton de la internacia lingvo Esperanto.
				</p>
				<p><i>(adapté du Nouveau cours rationnel et complet d’Espéranto - SAT-Amikaro, Paris)</i></p>
			</div>
			
		<p class="rimarko"><strong>REMARQUE</strong> : </p>
		<p>Surveillez attentivement la lettre <b>R</b> qui doit être roulée comme
			en italien et la lettre <b>H</b> qui est toujours expirée comme dans les mots
			anglais <i>hand</i>, <i>hair</i>, <i>have</i>.</p>

		<?php 
		} // fin section 8
		if ($section=="9") {
		?>

			<p>
			Dans cette leçon nous avons achevé l’étude de la conjugaison. Vous
			connaissez donc dès à présent toutes les formes verbales possibles. Et
			enfin, bonne nouvelle&nbsp;!, il ne vous reste plus qu’une autre leçon avant
			de passer le petit examen qui constitue la 10<sup>e</sup> leçon. Ensuite, on vous
			décernera une attestation de cours.
			</p>

		<?php 
			recapitulatif_lecon_avant_envoi('CG',$leciono,$persono_id);
		} // fin derniere section
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
