<?php
$titolo="8 (ok)";
$leciono = 8;
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
			getTitoloLecionero('CG',8,$section);
			displayWarningSiLecioneroManquante($persono_id,'CG',8,$section);
			
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
				<p class="col s11 offset-s1">Je crois qu’il viendra. : <span class="eo">Mi kredas, ke li venos.</span></p>
				<p class="col s11 offset-s1">Je croyais qu’il viendrait. :  <span class="eo">Mi kredis, ke li ven<b>os</b>.</span></p>
			</div>
	
			<a id="participes" class="scrollspy"></a>

			<p class="parto">Enfin, il reste les <b>participes</b> (mots qui s’emploient comme verbes,
			adjectifs, adverbes ou noms)&nbsp;:
			</p>
	
			<div class="row vortlisto">
				<p class="col s12"><b>Participes de la voix active</b></p>
				<div class="col s12 row">
					<p class="col s3 m2 l2">Présent :<br>
					<b>-ant</b></p>
					<p class="col s9 m7 l6"><span class="eo">Ŝi estas leg<b>ant</b>a.</span><br>= Elle est lisant (en train de lire).</p>
					<p class="col s9 offset-s3 m3 l4"><img src="<?php echo $vojo;?>fr/cge/bildoj/leganta.jpg" class="responsive-img" alt="Ŝi estas leganta."></p>
				</div>
				<div class="col s12 row">
					<p class="col s3 m2 l2">Passé :<br>
						<b>-int</b></p>
					<p class="col s9 m7 l6"><span class="eo">Ŝi estas leg<b>int</b>a.</span>
						<br>= Elle est ayant lu (elle a lu, elle a fini de lire).</p>
					<p class="col s9 offset-s3 m3 l4"><img src="<?php echo $vojo;?>fr/cge/bildoj/leginta.jpg" class="responsive-img" alt="Ŝi estas leginta."><br></p>
				</div>
				<div class="col s12 row">
					<p class="col s3 m2 l2">Futur :<br>
						<b>-ont</b></p>
					<p class="col s9 m7 l6"><span class="eo">Ŝi estas leg<b>ont</b>a.</span><br>= Elle est devant lire (sur le point de lire).<br>
					<p class="col s9 offset-s3 m3 l4"><img src="<?php echo $vojo;?>fr/cge/bildoj/legonta.jpg" class="responsive-img" alt="Ŝi estas legonta.">
					</p>
				</div>
			</div>
			<div class="row vortlisto">
				<p class="col s12"><b>Participes de la voix passive</b></p>
				<div class="col s12 row">
					<p class="col s3 m2 l2">Présent :<br>
						<b>-at</b></p>
					<p class="col s9 m7 l6"><span class="eo">La libro estas leg<b>at</b>a.</span><br>= Le livre est lu (en train d’être lu).</p>
					<p class="col s9 offset-s3 m3 l4"><img src="<?php echo $vojo;?>fr/cge/bildoj/legata.jpg" class="responsive-img" alt="La libro estas legata.">
					</p>
				</div>
				<div class="col s12 row">
					<p class="col s3 m2 l2">Passé :<br>
						<b>-it</b></p>
					<p class="col s9 m7 l6"><span class="eo">La libro estas leg<b>it</b>a.</span>
						<br>= Le livre est lu (ayant été lu).</p>
						<p class="col s9 offset-s3 m3 l4"><img src="<?php echo $vojo;?>fr/cge/bildoj/legita.jpg" class="responsive-img" alt="La libro estas legita."></p>
				</div>
				<div class="col s12 row">
					<p class="col s3 m2 l2">Futur :<br>
						<b>-ot</b></p>
					<p class="col s9 m7 l6"><span class="eo">La libro estas leg<b>ot</b>a.</span><br>= Le livre est devant être lu (à lire).</p>
					<p class="col s9 offset-s3 m3 l4"><img src="<?php echo $vojo;?>fr/cge/bildoj/legota.jpg" class="responsive-img" alt="La libro estas legota.">
					</p>
				</div>
			</div>
			
			<p class="parto">Ces participes peuvent prendre la terminaison du pluriel. Par exemple : </p>
			<div class="row">
				<p class="col s12"><span class="eo">Ili estas legantaj.</span>&nbsp;: Ils sont en train de lire.</p>
				<p class="col s12"><span class="eo">Ili estas legintaj.</span>&nbsp;: Ils ont lu.</p>
				<p class="col s12"><span class="eo">La libroj estas legataj.</span>&nbsp;: Les livres sont lus.</p>
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
				<p class="col s12 l6"><span class="eo">leg<b>ot</b>a</span> = <span class="eo">kiun oni legos</span> = qu’on lira</p>
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
			<b>-a</b>), des adverbes (<b>-e</b>), ou des noms (<b>-o</b>). Les participes utilisés comme noms peuvent aussi se mettre au féminin.</p>
			<p class="parto">Leur utilisation permet beaucoup de précision, de souplesse et de concision. 
			Bien que nous ne puissions pas vous indiquer ici toute la gamme des applications, nous vous invitons à saisir le sens des participes dans 
			les exemples suivants&nbsp;:</p>
			<div class="row vortlisto">
				<p class="col s12 eo">La leg<b>ant</b>o havas bonan voĉon, sed la antaŭa leg<b>int</b>o havis pli bonan.</p>
				<p class="col s11 offset-s1">= Le lecteur a une bonne voix, mais le lecteur précédent (en) avait une meilleure.</p>
				<p class="col s12 eo">La leg<b>ant</b>ino havas bonan voĉon, sed la antaŭa leg<b>int</b>ino havis pli bonan.</p>
				<p class="col s11 offset-s1">= La lectrice a une bonne voix, mais la lectrice précédente (en) avait une meilleure.</p>
				<p class="col s12 eo">Mi opinias tamen, ke la leg<b>ont</b>o havos la plej bonan voĉon el ĉiuj.</p>
				<p class="col s11 offset-s1">= Je suis d’avis, toutefois, que le lecteur à venir aura la meilleure voix de tous.</p>
				<p class="col s12 eo">Mi opinias tamen, ke la leg<b>ont</b>ino havos la plej bonan voĉon el ĉiuj.</p>
				<p class="col s11 offset-s1">= Je suis d’avis, toutefois, que la lectrice à venir aura la meilleure voix de toutes.</p>
				<p class="col s12 eo">Leg<b>ant</b>e ni lernas.</p>
				<p class="col s11 offset-s1">= Nous apprenons en lisant.</p>
				<p class="col s12 eo">Manĝ<b>ont</b>e la pomon, li / ŝi ekvidis la vermon.</p>
				<p class="col s11 offset-s1">= Sur le point de manger la pomme, il / elle aperçut le ver.</p>
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
					<p class="col s12 m4"><a href="<?php echo $vojo;?>fr/son/vortoj/vocxo.mp3" class="sm2_button"></a><span class="eo">voĉo</span> : voix</p>
					<p class="col s12 m4"><a href="<?php echo $vojo;?>fr/son/vortoj/pordo.mp3" class="sm2_button"></a><span class="eo">pordo</span> : porte</p>
					<p class="col s12 m4"><a href="<?php echo $vojo;?>fr/son/vortoj/vermo.mp3" class="sm2_button"></a><span class="eo">vermo</span> : ver</p>
					<p class="col s12 m4"><a href="<?php echo $vojo;?>fr/son/vortoj/letero.mp3" class="sm2_button"></a><span class="eo">letero</span> : lettre (courrier)</p>
					<p class="col s12 m4"><a href="<?php echo $vojo;?>fr/son/vortoj/honori.mp3" class="sm2_button"></a><span class="eo">honori</span> : honorer</p>
					<p class="col s12 m4"><a href="<?php echo $vojo;?>fr/son/vortoj/diablo.mp3" class="sm2_button"></a><span class="eo">diablo</span> : diable</p>
					<p class="col s12 m4"><a href="<?php echo $vojo;?>fr/son/vortoj/adori.mp3" class="sm2_button"></a><span class="eo">adori</span> : adorer</p>
				</div>
			</fieldset>

		<?php 
		} // fin section 1
		if ($section=="2") {
		?>

			<p><a href="<?php echo $vojo;?>fr/son/frazoj/vivanton-ni-malhonoras.mp3" class="sm2_button"></a> <span class="eo">Vivanton ni malhonoras, mortinton ni adoras.</span></p>
			<p>
			<a href="<?php echo $vojo;?>fr/son/frazoj/dancu-diabloj.mp3" class="sm2_button"></a> <span class="eo">Dancu diabloj, sed ne en mia arbaro.</span></p>

			<div class="vortlisto row">
				<p class="col s6 m4"><a href="<?php echo $vojo;?>fr/son/vortoj/honori.mp3" class="sm2_button"></a><span class="eo">honori</span>&nbsp;: honorer</p>
				<p class="col s6 m4"><a href="<?php echo $vojo;?>fr/son/vortoj/diablo.mp3" class="sm2_button"></a><span class="eo">diablo</span>&nbsp;: diable</p>
				<p class="col s6 m4"><a href="<?php echo $vojo;?>fr/son/vortoj/adori.mp3" class="sm2_button"></a><span class="eo">adori</span>&nbsp;: adorer</p>
			</div>
			
			<p class="parto">Dans le premier proverbe, on souligne qu’on juge différemment une personne morte ou vivante, on la déshonore de son vivant, mais on la vénère quand elle est morte. Dans le deuxième proverbe, le diable personnifie les problèmes qui peuvent arriver et ceux-ci ne sont pas considérés comme graves s’ils ne sont pas chez soi.</p>
			
		<?php 
		} // fin section 2
		if ($section=="3") {
		?>
			<?php 
				getEkzercon(32,$persono_id);
			?>

		<?php 
		} // fin section 3
		if ($section=="4") {
		?>
			<?php 
				getEkzercon(33,$persono_id);
			?>
	
		<?php 
		} // fin section 4
		if ($section=="5") {
		?>

			<p>
			Vous pouvez désormais lire des textes faciles. Traduisez le texte suivant en français. Le vocabulaire nouveau se trouve à la
			fin de l’exercice.
			</p>
			<input type="hidden" name="013_cxap08.3" value="3. Veuillez traduire en français les anecdotes suivantes.">
			
			<?php 
				getEkzercon(34,$persono_id);
			?>

			<fieldset class="vortoj">
				<legend>VOCABULAIRE À RETENIR</legend>
				<div>
					<?php if ($persono) { ?>
					<p class="eo eta">Ces mots seront automatiquement ajoutés à votre vocabulaire à réviser lorsque vous aurez terminé d'étudier cette section. Le nombre de mots à réviser sera indiqué sur le bouton affiché au-dessus du sommaire.</p>
					<?php } ?>
				</div>
				<div class="vortlisto row">
					<p class="col s12 m6"><a href="<?php echo $vojo;?>fr/son/vortoj/jugxisto.mp3" class="sm2_button"></a><span class="eo">juĝisto</span>&nbsp;: juge</p>
					<p class="col s12 m6"><a href="<?php echo $vojo;?>fr/son/vortoj/aserti.mp3" class="sm2_button"></a><span class="eo">aserti</span>&nbsp;: affirmer, prétendre</p>
					<p class="col s12 m6"><a href="<?php echo $vojo;?>fr/son/vortoj/akuzato.mp3" class="sm2_button"></a><span class="eo">akuzato</span>&nbsp;: l’accusé</p>
					<p class="col s12 m6"><a href="<?php echo $vojo;?>fr/son/vortoj/forkuri.mp3" class="sm2_button"></a><span class="eo">forkuri</span>&nbsp;: se sauver, c-à-d. courir au loin</p>
					<p class="col s12 m6"><a href="<?php echo $vojo;?>fr/son/vortoj/tramo.mp3" class="sm2_button"></a><span class="eo">tramo</span>&nbsp;: tramway</p>
					<p class="col s12 m6"><a href="<?php echo $vojo;?>fr/son/vortoj/okulo.mp3" class="sm2_button"></a><span class="eo">okulo</span>&nbsp;: œil</p>
					<p class="col s12 m6"><a href="<?php echo $vojo;?>fr/son/vortoj/opinii.mp3" class="sm2_button"></a><span class="eo">opinii</span>&nbsp;: penser, avoir une opinion</p>
					<p class="col s12 m6"><a href="<?php echo $vojo;?>fr/son/vortoj/stari.mp3" class="sm2_button"></a><span class="eo">stari</span>&nbsp;: être debout</p>
					<p class="col s12 m6"><a href="<?php echo $vojo;?>fr/son/vortoj/laca.mp3" class="sm2_button"></a><span class="eo">laca</span>&nbsp;: fatigué</p>
					<p class="col s12 m6"><a href="<?php echo $vojo;?>fr/son/vortoj/placxi.mp3" class="sm2_button"></a><span class="eo">plaĉi</span>&nbsp;: plaire</p>
				</div>
			</fieldset>
			
			<?php 
			} // fin section 5
			if ($section=="6") {
			?>
			
			<p class="parto">Dans la <a href="lec01.php?section=4">première leçon</a>, vous avez vu les pronoms personnels. Pour mémoire, en voici de nouveau la liste.</p>
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
			 <p>Vous avez vu également comment on construit les adjectifs possessifs à partir des pronoms en ajoutant la terminaison -<b>a</b>&nbsp;:</p>
			<div class="row">
				<p class="col s12"><a href="<?php echo $vojo;?>fr/son/frazoj/li-mangxas-mian-kukon.mp3" class="sm2_button"></a><span class="eo">Li manĝas mi<b>an</b> kukon.</span>&nbsp;: Il mange mon gâteau.</p>
				<p class="col s12"><a href="<?php echo $vojo;?>fr/son/frazoj/mi-sxatas-sxiajn-kukojn.mp3" class="sm2_button"></a><span class="eo">Mi ŝatas ŝi<b>ajn</b> kukojn.</span>&nbsp;: J’aime ses gâteaux.</p>
				<p class="col s12"><a href="<?php echo $vojo;?>fr/son/frazoj/ni-ludas-kun-iliaj-infanoj.mp3" class="sm2_button"></a><span class="eo">Ni ludas kun ili<b>aj</b> infanoj.</span>&nbsp;: Nous jouons avec leurs enfants.</p>
			</div>

			<p class="parto">Considérez maintenant la phrase suivante&nbsp;:</p>
			
			<div class="row">
				<div class="col s7 m8 l9">
					<p><b>Mario joue avec son chien.</b></p>
					<p>Dans cette phrase, <b>son</b> peut se rapporter à lui-même (c’est son propre chien) ou à quelqu’un d’autre (c'est par exemple le chien de son frère ou sa grand-mère).</p>
					<p>En espéranto, on utilise dans ce cas des pronoms différents pour indiquer si <b>son</b> se rapporte à lui-même, ou à quelqu’un d’autre.</p>
			<p>On différencie donc trois cas&nbsp;:</p>
					
				</div>
				<div class="col s5 m4 l3 noprint">
					<img class="responsive-img" alt="Mario ludas kun hundo" src="<?=$vojo?>fr/cge/bildoj/li-ludas-kun-hundo.jpg"><br><span class="creditphoto">photo : <a href="https://stocksnap.io/author/41003">Marvin Meyer</a></span>
				</div>
			</div>
			
			<fieldset>
				<div class="row">
					<div class="col s12">
						<p><a href="<?php echo $vojo;?>fr/son/frazoj/mario-ludas-kun-sia.mp3" class="sm2_button"></a><span class="eo">Mario ludas kun <b>sia</b> hundo.</span><br>= Mario joue avec son propre chien.</p>
						<p><a href="<?php echo $vojo;?>fr/son/frazoj/mario-ludas-kun-lia.mp3" class="sm2_button"></a><span class="eo">Mario ludas kun <b>lia</b> hundo.</span><br> = Mario joue avec le chien d’une personne de sexe masculin.</p>
						<p><a href="<?php echo $vojo;?>fr/son/frazoj/mario-ludas-kun-sxia.mp3" class="sm2_button"></a><span class="eo">Mario ludas kun <b>ŝia</b> hundo.</span><br>= Mario joue avec le chien d’une personne de sexe féminin.</p>
					</div>
				</div>
			</fieldset>
			
			<p>Autre exemple&nbsp;:</p>

			<div class="row">
				<p class="col s12"><a href="<?php echo $vojo;?>fr/son/frazoj/sxi-kisis-sian.mp3" class="sm2_button"></a><span class="eo">Ŝi kisis sian edzon.</span> =&nbsp;Elle a embrassé son (propre) mari.</p>
				<p class="col s12"><a href="<?php echo $vojo;?>fr/son/frazoj/sxi-kisis-sxian.mp3" class="sm2_button"></a><span class="eo">Ŝi kisis ŝian edzon.</span> =&nbsp;Elle a embrassé son mari (le mari d’une autre femme).</p>
			</div>

			<p class="parto">De la même façon, on différencie&nbsp;:</p>
			<div class="row">
				<p class="col s12"><a href="<?php echo $vojo;?>fr/son/frazoj/johano-lavis-sin.mp3" class="sm2_button"></a><span class="eo">Johano lavis <b>sin</b>.</span> = Jean s’est lavé.</span></p>
				<p class="col s12"><a href="<?php echo $vojo;?>fr/son/frazoj/johano-lavis-lin.mp3" class="sm2_button"></a><span class="eo">Johano lavis <b>lin</b>.</span> = Jean l’a lavé. (il a lavé une autre personne, de sexe masculin)</span></p>
				<p class="col s12"><a href="<?php echo $vojo;?>fr/son/frazoj/johano-lavis-sxin.mp3" class="sm2_button"></a><span class="eo">Johano lavis <b>ŝin</b>.</span> = Jean l’a lavée (il a lavé une autre personne, de sexe féminin)</span></p>
			</div>
			
			<p>Autre exemple&nbsp;:</p>
			
			<div class="row">
				<p class="col s12"><span class="eo">Sofia diris al <b>si</b> … </span> = Sophie s’est dit … (à elle-même)</span></p>
				<p class="col s12"><span class="eo">Sofia diris al <b>li</b> … </span> = Sophie lui a dit … (à une autre personne de sexe masculin)</span></p>
				<p class="col s12"><span class="eo">Sofia diris al <b>ŝi</b> … </span> = Sophie lui a dit … (à une autre personne de sexe féminin)</span></p>
			</div>
			
			<fieldset class="memoru">
				<legend>À RETENIR</legend>
				<div class="regulo row">
					<p><b>Si</b> est le <b>pronom réfléchi</b> de la 3<sup>e</sup> personne, du singulier ou du
					pluriel. <b>Sia</b> est l’adjectif possessif correspondant.</p>
					<p><b>Si</b> et <b>sia</b> se rapportent toujours au sujet du verbe. </p>
				</div>
			</fieldset>
		
			<p class="parto">Notez bien que comme <b>si</b> et <b>sia</b> se rapportent toujours au sujet, ils ne peuvent pas faire partie du sujet.</p>
			<p>Exemples :<br>
			<div class="row">
				<p class="col s12"><a href="<?php echo $vojo;?>fr/son/frazoj/mario-kaj-lia-hundo.mp3" class="sm2_button"></a><span class="eo"><b>Mario kaj <u>lia</u> hundo</b> ludas en la parko.</span>&nbsp;: dans cette phrase, le sujet est <b>Mario kaj lia hundo</b> => pas de réfléchi dans ce cas.</p>
				<p class="col s12"><a href="<?php echo $vojo;?>fr/son/frazoj/mario-ludas-en-la-parko.mp3" class="sm2_button"></a><span class="eo">Mario ludas en la parko <b>kun <u>sia</u> hundo</b>.</span>&nbsp;: dans cette phrase, le sujet est <b>Mario</b>, et ici <b>kun sia hundo</b> est complément => on emploie le réfléchi.</p>
			</div>
			

		<?php 
		} // fin section 6
		if ($section=="7") {
		?>
			<?php 
				getEkzercon(35,$persono_id);
			?>
		
		<?php 
		} // fin section 7
		if ($section=="8") {
		?>
		
			<?php 
				getEkzercon(36,$persono_id);
			?>
		
			<div class="vortlisto row">
				<p class="col s12 m6"><span class="eo">ambaŭ</span>&nbsp;: tous deux</p>
				<p class="col s12 m6"><span class="eo">aŭto-veturado</span>&nbsp;: trajet en voiture</p>
				<p class="col s12 m6"><span class="eo">azeno</span>&nbsp;: âne</p>
				<p class="col s12 m6"><span class="eo">daŭre</span>&nbsp;: continuellement</p>
				<p class="col s12 m6"><span class="eo">estonta</span>&nbsp;: futur (participe futur de <em>esti</em>)</p>
				<p class="col s12 m6"><span class="eo">inciti</span>&nbsp;: irriter</p>
				<p class="col s12 m6"><span class="eo">foriri (for-iri)</span>&nbsp;: partir</p>
				<p class="col s12 m6"><span class="eo">hejme</span>&nbsp;: à la maison</p>
				<p class="col s12 m6"><span class="eo">jam</span>&nbsp;: déjà</p>
				<p class="col s12 m6"><span class="eo">kafejo</span>&nbsp;: café (restaurant)</p>
				<p class="col s12 m6"><span class="eo">konflikto</span>&nbsp;: conflit</p>
				<p class="col s12 m6"><span class="eo">surtuto</span>&nbsp;: pardessus</p>
				<p class="col s12 m6"><span class="eo">moke</span>&nbsp;: par moquerie</p>
				<p class="col s12 m6"><span class="eo">obstine</span>&nbsp;: avec obstination</p>
				<p class="col s12 m6"><span class="eo">parenco</span>&nbsp;: parent (personne de la même famille)</p>
				<p class="col s12 m6"><span class="eo">preter-pasi</span>&nbsp;: dépasser, passer (devant)…</p>
				<p class="col s12 m6"><span class="eo">silenti</span>&nbsp;: garder le silence</p>
			</div>
		<?php 
		} // fin section 8
		if ($section=="9") {
		?>
			<p>
			Lisez régulièrement le texte suivant à haute voix en ayant soin
			d’appliquer l’accent tonique sur l’avant-dernière syllabe comme il se
			doit.
			</p>
			
			<div class="vortlisto">
				<p><a href="<?php echo $vojo;?>fr/son/frazoj/accent_tonique.m4a" class="sm2_button"></a>&nbsp;
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
		} // fin section 9
		if ($section=="10") {
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
		pubAndroid();
		pubFacebook();
		?>
	</aside>
</div>
<?php include "dlekpiedo.inc.php"; ?>
