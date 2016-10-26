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
			Maintenant, il ne nous reste que quelques terminaisons grammaticales &agrave;
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
				<p class="col s8 offset-s4"><b>Participes de la voix active</b></p>
				<p class="col s2">Présent :</p><p class="col s2"><b>-ant</b></p><p class="col s8"><span class="eo">Mi estas leganta.</span></p>
				<p class="col s8 offset-s4">= Je suis lisant (en train de lire).</p>
				<p class="col s2 offset-s2"><b>-int</b></p><p class="col s8"><span class="eo">Mi estas leginta.</span></p>
				<p class="col s8 offset-s4">= Je suis ayant lu (j’ai lu, j’ai fini de lire).</p>
				<p class="col s2 offset-s2"><b>-ont</b></p><p class="col s8"><span class="eo">Mi estas legonta.</span></p>
				<p class="col s8 offset-s4">= Je suis devant lire (sur le point de lire).</p>
			</div>
			<div class="row vortlisto">
				<p class="col s8 offset-s4"><b>Participes de la voix passive</b></p>
				<p class="col s2">Présent :</p><p class="col s2"><b>-at</b></p><p class="col s8"><span class="eo">La libro estas legata.</span></p>
				<p class="col s8 offset-s4">= Le livre est lu (en train d’être lu).</p>
				<p class="col s2">Passé :</p><p class="col s2"><b>-it</b></p><p class="col s8"><span class="eo">La libro estas legita.</span></p>
				<p class="col s8 offset-s4">= Le livre est lu (ayant été lu).</p>
				<p class="col s2">Futur :</p><p class="col s2"><b>-ot</b></p><p class="col s8"><span class="eo">La libro estas legota.</span></p>
				<p class="col s8 offset-s4">= Le livre est devant être lu (à lire).</p>
			</div>
	
			<p>En résumé :</p>
			<p><span class="eo">leganta</span> = <span class="eo">kiu legas</span> = qui lit, lisant</p>
			<p><span class="eo">leginta</span> = <span class="eo">kiu legis</span> = qui a lu, qui lisait, ayant lu</p>
			<p><span class="eo">legonta</span> = <span class="eo">kiu legos</span> = qui lira</p>
			<p></p>
			<p><span class="eo">legata</span> = <span class="eo">kiun oni legas</span> = qu’on lit</p>
			<p><span class="eo">legita</span> = <span class="eo">kiun oni legis</span> = qu’on a lu, lu</p>
			<p><span class="eo">legota</span> = <span class="eo">kiun oni legos</span> = qu’on lira</p>
	
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
				<p class="col s12 eo">La leg<b>ant</b>o havas bonan voĉon, sed la antaŭa leg<b>int</b>o havis pli bonan</p>
				<p class="col s11 offset-s1">= Le lecteur a une bonne voix, mais le lecteur précédent (en) avait une meilleure</p>
				<p class="col s12 eo">Mi opinias tamen, ke la leg<b>ont</b>o havos la plej bonan voĉon el ĉiuj</p>
				<p class="col s11 offset-s1">= Je suis d’avis, toutefois, que le lecteur à venir aura la meilleure voix de tous</p>
				<p class="col s12 eo">Leg<b>ant</b>e ni lernas</p>
				<p class="col s11 offset-s1">= Nous apprenons en lisant</p>
				<p class="col s12 eo">Manĝ<b>ont</b>e la pomon, li ekvidis la vermon</p>
				<p class="col s11 offset-s1">= Sur le point de manger la pomme, il aperçut le ver</p>
				<p class="col s12 eo">La konstru<b>at</b>a domo</p>
				<p class="col s11 offset-s1">= La maison en train d’être construite</p>
				<p class="col s12 eo">La skrib<b>ot</b>a letero</p>
				<p class="col s11 offset-s1">= La lettre à écrire, c-à-d. devant être écrite</p>
				<p class="col s12 eo">La ferm<b>it</b>a pordo</p>
				<p class="col s11 offset-s1">= La porte fermée, c-à-d. qui a été fermée</p>
			</div>
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
			
		<?php 
		} // fin section 2
		if ($section=="3") {
		?>
		<fieldset class="ekzerco">
			<legend><strong>EXERCICE</strong> : Traduisez en espéranto en utilisant la terminaison verbale appropriée.</legend>
			<input type="hidden" name="013_cxap08.1" value="1. Traduisez en espéranto en utilisant la terminaison verbale appropriée.">
			<?php atentigo(); ?>
			<div class="tasko">
			<?php
				$demandoj=array (
				1 => "Si elle venait à 8h nous pourrions manger à 8h30.",
				2 => "Je désire qu’elle vienne à 8h mais je crois qu’elle ne viendra pas avant 9h.",
				3 => "Va là-bas, assieds-toi et ouvre le sucrier !",
				4 => "Cet imbécile veut me rencontrer à l’étable. Qu’il [y] aille en premier, et qu’il m’attende. Je viendrai quand je voudrai.",
				5 => "Que faire ? (Qu’est-ce que je «dois-faire» ?)",
				6 => "Il croyait que je ne viendrais pas avant 9h mais je suis venue à 8h moins 5.",
				7 => "Sur le point de chanter, il se mit à rire. (préfixe ek-)",
				8 => "Elle se mit à rougir en griffonnant le nom du garçon."
				);
				ekzerco(True, 1);
			?>
			</div>
		</fieldset>
	
		<?php 
		} // fin section 3
		if ($section=="4") {
		?>

			<p>
			Vous pouvez désormais lire des textes faciles. Traduisez le texte suivant en français. Le vocabulaire nouveau se trouve à la
			fin de l’exercice.
			</p>
			<input type="hidden" name="013_cxap08.2" value="2. Veuillez donc traduire en français les anecdotes suivantes.">
			
			<fieldset class="ekzerco">
				<legend><strong>EXERCICE</strong> : Traduisez en français.</legend>
				<div class="tasko">
				<?php
					$demandoj=array (
					9 => "<br>Juĝisto:  Ĉu vi do asertas, ke vi iris en la domon opiniante, ke ĝi estas via domo ?<br>Akuzato: Jes, sinjoro juĝisto.<br>Juĝisto:  Sed kial vi forkuris, kiam la sinjorino envenis ?<br>Akuzato: Mi opiniis, ke ŝi estas mia edzino !",
					10 => "<br>Patrino en tramo: Joĉjo, kial vi sidas kun fermitaj okuloj ? Ĉu vi estas laca ?<br>Joĉjo: Ne ! Ne plaĉas al mi vidi starantajn virinojn."
				   );
					ekzerco(False, 5);
				?>
				</div>
			</fieldset>

			<div class="vortlisto row">
				<p class="col s12 m6"><span class="eo">juĝisto</span> : juge</p>
				<p class="col s12 m6"><span class="eo">aserti</span> : affirmer, prétendre</p>
				<p class="col s12 m6"><span class="eo">akuzato</span> : l’accusé</p>
				<p class="col s12 m6"><span class="eo">forkuri</span> : se sauver, c-à-d. courir au loin</p>
				<p class="col s12 m6"><span class="eo">tramo</span> : tramway</p>
				<p class="col s12 m6"><span class="eo">okulo</span> : œil</p>
				<p class="col s12 m6"><span class="eo">stari</span> : être debout</p>
				<p class="col s12 m6"><span class="eo">laca</span> : fatigué</p>
				<p class="col s12 m6"><span class="eo">plaĉi</span> : plaire</p>
			</div>
			
			<?php 
			} // fin section 4
			if ($section=="5") {
			?>
			
			<p class="parto">
			<b>Si</b> est le <b>pronom réfléchi</b> de la 3<sup>e</sup> personne, du singulier ou du
			pluriel, quand il se rapporte au sujet du verbe. <b>Sia</b> est l’adjectif
			possessif réfléchi correspondant.
			</p>
			
			<div class="row">
				<p class="col s6"><span class="eo">Johano lavis sin.</span></p><p class="col s6"><span class="eo">Johano lavis lin.</span></p>
				<p class="col s6">= Jean s’est lavé</p><p class="col s6">= Jean l’a lavé, c-à-d. une autre personne, de sexe masculin</p>
			</div>
			<div class="row">
				<p class="col s6"><span class="eo">Sofia diris al si.</span></p><p class="col s6"><span class="eo">Sofia diris al ŝi.</span></p>
				<p class="col s6">= Sophie s’est dit, à elle-même.</p><p class="col s6">= Sophie lui a dit, c-à-d. à une autre personne de sexe féminin.</p>
			</div>
			<div class="row">
				<p class="col s6"><span class="eo">Ŝi kisis sian edzon.</span></p><p class="col s6"><span class="eo">Ŝi kisis ŝian edzon.</span></p>
				<p class="col s6">= Elle a embrassé son (propre) mari.</p><p class="col s6">= Elle a embrassé son mari, c-à-d. le mari d’une autre femme.</p>
			</div>

		<?php 
		} // fin section 5
		if ($section=="6") {
		?>
		
			<fieldset class="ekzerco">
				<legend><strong>EXERCICE</strong> : Traduisez ces textes en français.</legend>
				<p>Le vocabulaire nouveau se trouve à la fin de l’exercice.</p>
				<input type="hidden" name="013_cxap08.3" value="3. Même exercice.">
				<div class="tasko">
				<?php
					$demandoj=array (
					11 => "<br>- Incitas min, ke mia edzino daŭre parolas pri sia antaŭa edzo.<br>- Tio estas nenio ! La mia paroladas pri sia estonta edzo !",
					12 => "<br>En kafejo:<br>- Kial vi rigardadas al la pordo ?<br>- Mi observadas, ĉu ne iu foriras kun mia surtuto. Kun la via jam antaŭ dek minutoj foriris iu.",
					13 => "<br>La junaj geedzoj havis konflikton hejme, kaj poste dum la aŭto-veturado ili ambaŭ obstine silentis. Preterpasante aron da azenoj la edzo diris moke:<br>- Ĉu parencoj de vi ?<br>- Jes, boparencoj !"
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
		} // fin section 6
		if ($section=="7") {
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
		} // fin section 7
		if ($section=="8") {
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
