<?php
$titolo="8 (ok)";
$leciono = 8;
$section=isset($_GET["section"])?$_GET["section"]:"1";
include "dlekkapo.inc.php";

?>

<main class="row">
	<article class="col s12 m10 l7 offset-m1 offset-l1">
				
<section id="leciono-enhavo">

<?php 
getTitoloLecionero('CG',8,$section);


if ($section=="1") {
?>

<p>
Maintenant, il ne nous reste que quelques terminaisons grammaticales &agrave;
apprendre avant de pouvoir lire couramment en espéranto. Nous avons vu
que les verbes se terminent en <b>-as</b> (présent), <b>-is</b> (passé), 
<b>-os</b> (futur). Il y a aussi&#160;:
</p>
<a id="cg052"></a>
<table class="retrait">
<tr class="fr">
	<td width="180">le <b>conditionnel</b>&#160;:</td>
	<td class="eo" width="30"><b>-us</b></td>
	<td class="ekz" width="300">Se mi est<b>us</b> ri&#265;a, mi voja&#285;<b>us</b> multe </td>
</tr>
	<tr class="fr"><td>&nbsp;</td>&nbsp;<td>&nbsp;</td><td>= Si j’étais riche, je voyagerais beaucoup</td></tr>
	<tr class="fr"><td>&nbsp;</td></tr>
	<tr class="fr"><td>et</td></tr>
	<tr class="fr"><td>&nbsp;</td></tr>
	<tr class="fr"><td>l’<b>impératif-subjonctif</b>&#160;:</td><td class="eo"><b>-u</b></td><td class="ekz">Ferm<b>u</b> la pordon kaj sidi&#285;<b>u</b>&#160;!</td></tr>
	<tr class="fr"><td>&nbsp;</td><td>&nbsp;</td><td>= Ferme la porte et assieds-toi&#160;!</td></tr>
	<tr class="fr"><td>&nbsp;</td><td>&nbsp;</td><td class="ekz">Li ferm<b>u</b> la pordon kaj sidi&#285;<b>u</b>&#160;!</td></tr>
	<tr class="fr"><td>&nbsp;</td><td>&nbsp;</td><td>= Qu’il ferme la porte et qu’il s’asseye&#160;!</td></tr>
	<tr class="fr"><td>&nbsp;</td><td>&nbsp;</td><td class="ekz">Mi volas, ke vi ven<b>u</b></td></tr>
	<tr class="fr"><td>&nbsp;</td><td>&nbsp;</td><td>= Je veux que tu viennes</td></tr>
</table>

<div class="rim"><p><b>Remarque</b> : 
Remarquez que, contrairement au fran&ccedil;ais :</p>
<ol>
	<li><p>Le conditionnel s’applique aux deux propositions 
	de la phrase et pas seulement &agrave; la dernière.</p></li>
	<li><p>Le conditionnel ne s’utilise pas pour montrer le 
	futur dans le passé</p>
	<p>je crois qu’il viendra : mi kredas, ke li venos</p>
	<p>je croyais qu’il viendrait :  mi kredis, ke li ven<b>os</b></p>
	</li>
</ol>
</p></div>
<hr>

<a id="cg053"></a><p>
Enfin, il reste les <b>participes</b> (mots qui s’emploient comme verbes,
adjectifs, adverbes ou noms)&#160;:
</p>

<table class="retrait">
<caption><b>Participes de la voix active</b></caption>
<tr class="fr">
	<td width="150">Présent&#160;:</td>
	<td width="50"><b>-ant</b></td>
	<td width="200" class="ekz">Mi estas leganta</td>
</tr>
<tr><td colspan="2"></td><td>= Je suis lisant (en train de lire)</td></tr>
<tr><td>Passé&#160;:</td><td><b>-int</b></td><td class="ekz">Mi estas leginta</td></tr>
<tr><td colspan="2"></td><td>= Je suis ayant lu (j’ai lu, j’ai fini de lire)</td></tr>
<tr><td>Futur&#160;:</td><td><b>-ont</b></td><td class="ekz">Mi estas legonta</td></tr>
<tr><td colspan="2"></td><td>= Je suis devant lire (sur le point de lire)</td></tr>
</table>
<p>&nbsp;</p>
<table class="retrait">
<caption><b>Participes de la voix passive</b></caption>
<tr>
	<td width="150">Présent&#160;:</td>
	<td width="50"><b>-at</b></td>
	<td width="200" class="ekz">La libro estas legata</td></tr>
<tr><td colspan="2"></td><td>= Le livre est lu (en train d’être lu)</td></tr>
<tr><td>Passé&#160;:</td><td><b>-it</b></td><td class="ekz">La libro estas legita</td></tr>
<tr><td colspan="2"></td><td>= Le livre est lu (ayant été lu)</td></tr>
<tr><td>Futur&#160;:</td><td><b>-ot</b></td><td class="ekz">La libro estas legota</td></tr>
<tr><td colspan="2"></td><td>= Le livre est devant être lu (&agrave; lire)</td></tr>
</table>

<p>En résumé :</p>
<table class="retrait">
	<tr class="ekz"><td width="80">leganta</td><td>=</td><td width="100">kiu legas</td><td width="150" class="fr">"qui lit", "lisant"</td></tr>
	<tr class="ekz"><td>leginta</td><td>=</td><td>kiu legis</td><td class="fr">"qui a lu", "qui lisait", "ayant lu"</td></tr>
	<tr class="ekz"><td>legonta</td><td>=</td><td>kiu legos</td><td class="fr">"qui lira"</td></tr>
	<tr class="ekz"><td></td><td> </td></tr>
	<tr class="ekz"><td>legata</td><td>=</td><td>kiun oni legas</td><td class="fr">"qu’on lit"</td></tr>
	<tr class="ekz"><td>legita</td><td>=</td><td>kiun oni legis</td><td class="fr">"qu’on a lu", "lu"</td></tr>
	<tr class="ekz"><td>legota</td><td>=</td><td>kiun oni legos</td><td class="fr">"qu’on lira"</td></tr>
</table>

<div class="rim"><p><b>Remarque</b> : 
<ol>
	<li><p>Le français dit "la porte est fermée" sans distinguer si</p>
	<p>on est en train de fermer la porte (la pordo estas ferm<b>at</b>a)</p>
	<p>la porte est en position fermée (la pordo estas ferm<b>it</b>a)</p></li>
	<li><p>En combinant le verbe "esti" et les 6 formes de participes, 
	on obtient un grand nombre de formes composées. Sachez toutefois que
	l’espéranto préfère les formes simples et n’utilise les formes
	composées que lorsque ces dernières apportent une précision
	indispensable.</p></li>
</ol>
</p></div>
<hr>
<p>
Les participes peuvent prendre la forme des adjectifs (terminaison en
<b>-a</b>), des adverbes (<b>-e</b>), ou des noms (<b>-o</b>). 
Leur utilisation permet beaucoup de précision, de souplesse et de concision. 
Bien que nous ne puissions pas vous indiquer ici toute la gamme des 
applications, nous vous invitons &agrave; saisir le sens des participes dans 
les exemples suivants&#160;:
</p>
<table class="retrait">
	<tr><td colspan="2" class="ekz">La leg<b>ant</b>o havas bonan vo&#265;on, sed la anta&#365;a leg<b>int</b>o havis pli bonan</td></tr>
	<tr><td width="50">&nbsp;</td><td class="fr">= Le lecteur a une bonne voix, mais le lecteur précédent (en) avait une meilleure</td></tr>
	<tr><td>&nbsp;</td></tr>

	<tr><td colspan="2" class="ekz">Mi opinias tamen, ke la leg<b>ont</b>o havos la plej bonan vo&#265;on el &#265;iuj</td></tr>

	<tr><td></td><td>= Je suis d’avis, toutefois, que le lecteur &agrave; venir aura la meilleure voix de tous</td></tr>
	<tr><td>&nbsp;</td></tr>
	 	
	<tr><td colspan="2"  class="ekz">Leg<b>ant</b>e ni lernas</td></tr>
	<tr><td>&nbsp;</td><td class="fr">= Nous apprenons en lisant</td></tr>
	<tr><td>&nbsp;</td></tr>
		 
	<tr><td colspan="2" class="ekz">Man&#285;<b>ont</b>e la pomon, li ekvidis la vermon</td></tr>
	
	<tr><td>&nbsp;</td><td class="fr">= Sur le point de manger la pomme, il aperçut le ver</td></tr>
	<tr><td>&nbsp;</td></tr>
		 
	<tr><td colspan="2" class="ekz">La konstru<b>at</b>a domo</td></tr>
	
	<tr><td>&nbsp;</td><td class="fr">= La maison en train d’être construite</td></tr>
	<tr><td>&nbsp;</td></tr>
	
	<tr><td colspan="2" class="ekz">La skrib<b>ot</b>a letero</td></tr>
	
	<tr><td>&nbsp;</td><td class="fr">= La lettre &agrave; écrire, c-&agrave;-d. devant être écrite</td></tr>
	<tr><td>&nbsp;</td></tr>
		 	
	<tr><td colspan="2" class="ekz">La ferm<b>it</b>a pordo</td></tr>

	<tr><td>&nbsp;</td><td class="fr">= La porte fermée, c-&agrave;-d. qui a été fermée</td></tr>
	<tr><td>&nbsp;</td></tr>
	</table>

<?php 
} // fin section 1
if ($section=="2") {
?>

<p>
<a href="../son/pv8-1.wav"><img src="../pix/icon20.gif"></a>
- Vivanton ni malhonoras, mortinton ni adoras.
</p>
<p>
<a href="../son/pv8-2.wav"><img src="../pix/icon20.gif"></a>
- Dancu diabloj, sed ne en mia arbaro.
</p>

<table class="voca">
<tr>
	<td class="eo" width="12%">honori</td><td class="fr" width="20%">honorer</td>
	<td class="eo" width="12%">diablo</td><td class="fr" width="20%">diable</td>
	<td class="eo" width="12%">adori</td><td class="fr" width="20%">adorer</td>
</tr>
</table>

<?php 
} // fin section 2
if ($section=="3") {
?>

<p>Traduisez en espéranto en utilisant la terminaison verbale appropriée.</p>
<input type="hidden" name="013_cxap08.1" value="1. Traduisez en espéranto en utilisant la terminaison verbale appropriée.">
<?php atentigo(); ?>
<div class="tasko">
<?php
	$demandoj=array (
	1 => "Si elle venait &agrave; 8h nous pourrions manger à 8h30.",
	2 => "Je désire qu’elle vienne &agrave; 8h mais je crois qu’elle ne viendra pas avant 9h.",
	3 => "Va là-bas, assieds-toi et ouvre le sucrier&#160;!",
	4 => "Cet imbécile veut me rencontrer &agrave; l’étable. Qu’il [y] aille en premier, et qu’il m’attende. Je viendrai quand je voudrai.",
	5 => "Que faire&#160;? (Qu’est-ce que je &quot;dois-faire&quot;?)",
	6 => "Il croyait que je ne viendrais pas avant 9h mais je suis venue à 8h moins 5.",
	7 => "Sur le point de chanter, il se mit &agrave; rire. (préfixe ek-)",
	8 => "Elle se mit &agrave; rougir en griffonnant le nom du garçon."
	);
	ekzerco("U", 1);
?>
</div>

<?php 
} // fin section 3
if ($section=="4") {
?>

<p>
Vous pouvez désormais lire des textes faciles. Veuillez donc traduire en
français les anecdotes suivantes. Le vocabulaire nouveau se trouve à la
fin de l’exercice.
</p>
<input type="hidden" name="013_cxap08.2" value="2. Veuillez donc traduire en français les anecdotes suivantes.">

<div class="tasko">
<?php
	$demandoj=array (
	9 => "<br>Ju&#285;isto:  &#264;u vi do asertas, ke vi iris en la domon opiniante, ke &#285;i estas via domo&#160;?<br>Akuzato: Jes, sinjoro ju&#285;isto.<br>Ju&#285;isto:  Sed kial vi forkuris, kiam la sinjorino envenis&#160;?<br>Akuzato: Mi opiniis, ke &#349;i estas mia edzino&#160;!",
	10 => "<br>Patrino en tramo: Jo&#265;jo, kial vi sidas kun fermitaj okuloj&#160;? &#264;u vi estas laca&#160;?<br>Jo&#265;jo: Ne&#160;! Ne pla&#265;as al mi vidi starantajn virinojn."
   );
	ekzerco("X", 5);
?>
</div>
<table class="voca">
<tr>
	<td class="eo" width="12%">ju&#285;isto</td><td class="fr" width="20%">juge</td>
	<td class="eo" width="12%">aserti</td><td class="fr" width="20%">affirmer, prétendre</td>
	<td class="eo" width="12%">akuzato</td><td class="fr" width="20%">l’accusé</td>
</tr>
<tr>
	<td class="eo" width="12%">forkuri</td><td class="fr" width="20%"  colspan="3">se sauver, c-à-d. courir au loin</td>
	<td class="eo" width="12%">&nbsp;</td><td class="fr" width="20%">&nbsp;</td>
</tr>
<tr>
	<td class="eo" width="12%">tramo</td><td class="fr" width="20%">tramway</td>
	<td class="eo" width="12%">okulo</td><td class="fr" width="20%">&oelig;il</td>
	<td class="eo" width="12%">stari</td><td class="fr" width="20%">être debout</td>
</tr>
<tr>
	<td class="eo" width="12%">laca</td><td class="fr" width="20%">fatigué</td>
	<td class="eo" width="12%">pla&#265;i</td><td class="fr" width="20%">plaire</td>
	<td class="eo" width="12%">&nbsp;</td><td class="fr" width="20%">&nbsp;</td>
</tr>
</table>

<?php 
} // fin section 4
if ($section=="5") {
?>

<p>
<b>Si</b> est le <b>pronom réfléchi</b> de la 3e personne, du singulier ou du
pluriel, quand il se rapporte au sujet du verbe. <b>Sia</b> est l’adjectif
possessif réfléchi correspondant.
</p>
<table class="retrait">
	<tr><td width="250" class="ekz">Johano lavis sin.</td><td width="250" class="ekz">Johano lavis lin.</td></tr>
	<tr><td class="fr">= Jean s’est lavé</td><td class="fr">= Jean l’a lavé, c-&agrave;-d. une autre personne, de sexe masculin</td></tr>
	<tr><td>&nbsp;</td></tr>
	<tr><td class="ekz">Sofia diris al si.</td><td class="ekz">Sofia diris al &#349;i.</td></tr>
	<tr><td class="fr">= Sophie s’est dit, &agrave; elle-même </td><td class="fr">= Sophie lui a dit, c-&agrave;-d. &agrave; une autre personne de sexe féminin</td></tr>
	<tr><td>&nbsp;</td></tr>
	<tr><td class="ekz">&#348;i kisis sian edzon.</td><td class="ekz">&#348;i kisis &#349;ian edzon.</td></tr>
	<tr><td class="fr">= Elle a embrassé son (propre) mari</td><td class="fr">= Elle a embrassé son mari, c-&agrave;-d. le mari d’une autre femme</td></tr>
</table>

<?php 
} // fin section 5
if ($section=="6") {
?>

<p>Veuillez traduire ces textes en français. Le vocabulaire nouveau se trouve à la
fin de l’exercice.</p>
<input type="hidden" name="013_cxap08.3" value="3. Même exercice.">
<div class="tasko">
<?php
	$demandoj=array (
	11 => "<br>- Incitas min, ke mia edzino da&#365;re parolas pri sia anta&#365;a edzo.<br>- Tio estas nenio&#160;! La mia paroladas pri sia estonta edzo&#160;!",
	12 => "<br>En kafejo:<br>- Kial vi rigardadas al la pordo&#160;?<br>- Mi observadas, &#265;u ne iu foriras kun mia surtuto. Kun la via jam anta&#365; dek minutoj foriris iu.",
	13 => "<br>La junaj geedzoj havis konflikton hejme, kaj poste dum la a&#365;to-veturado ili amba&#365; obstine silentis. Preterpasante aron da azenoj la edzo diris moke:<br>- &#264;u parencoj de vi&#160;?<br>- Jes, boparencoj&#160;!"
	);
	ekzerco ("X", 5);
?>
</div>
<table class="voca">
<tr>
	<td class="eo" width="12%">inciti</td><td class="fr" width="20%">irriter</td>
	<td class="eo" width="12%">da&#365;re</td><td class="fr" width="20%">continuellement</td>
	<td class="eo" width="12%">estonta</td><td class="fr" width="20%">futur (participe futur de "esti")</td>
</tr>
<tr>
	<td class="eo" width="12%">kafejo</td><td class="fr" width="20%">café (restaurant)</td>
	<td class="eo" width="12%">for-iri</td><td class="fr" width="20%">partir</td>
	<td class="eo" width="12%">surtuto</td><td class="fr" width="20%">pardessus</td>
</tr>
<tr>
	<td class="eo" width="12%">jam</td><td class="fr" width="20%">déjà</td>
	<td class="eo" width="12%">&nbsp;</td><td class="fr" width="20%">&nbsp;</td>
	<td class="eo" width="12%">&nbsp;</td><td class="fr" width="20%">&nbsp;</td>
</tr>
<tr>
	<td class="eo" width="12%">konflikto</td><td class="fr" width="20%">conflit</td>
	<td class="eo" width="12%">hejme</td><td class="fr" width="20%">à la maison</td>
	<td class="eo" width="12%">a&#365;to-veturado</td><td class="fr" width="20%">trajet en voiture</td>
</tr>
<tr>
	<td class="eo" width="12%">amba&#365;</td><td class="fr" width="20%">tous deux</td>
	<td class="eo" width="12%">moke</td><td class="fr" width="20%">par moquerie</td>
	<td class="eo" width="12%">obstine</td><td class="fr" width="20%">avec obstination</td>
</tr>
<tr>
	<td class="eo" width="12%">silenti</td><td class="fr" width="20%">garder le silence</td>
	<td class="eo" width="12%">preter-pasi</td><td class="fr" width="20%">dépasser, passer (devant...)</td>
	<td class="eo" width="12%">parenco</td><td class="fr" width="20%">parent (personne de la même famille)</td>
</tr>
</table>

<?php 
} // fin section 6
if ($section=="7") {
?>

<p>
Lisez régulièrement le texte suivant &agrave; haute voix en ayant soin
d’appliquer l’accent tonique sur l’avant-dernière syllabe comme il se
doit.
</p>
<blockquote><p>
  La lingvo Esperanto estis kreita de Doktoro Zamenhof, por ke la homoj de
  la diversaj nacioj povu inter&#349;an&#285;i siajn ideojn sen malfacila&#309;o.
  Esperanto volas, ke sur la tuta mondo &#265;iu povu esprimi tion, kion li a&#365;
  &#349;i pensas per lingvo facila por &#265;iuj popoloj, lernebla en kelkaj
  semajnoj. Simpla, fleksebla, belsona, vere internacia en siaj elementoj,
  la lingvo Esperanto prezentas al la mondo la solan praktikan solvon de
  lingvo internacia, &#265;ar, facila por homoj kleraj, Esperanto estas
  preska&#365; sen peno komprenata anka&#365; de la personoj nemulte instruitaj.
  Mil faktoj atestas la grandan meriton de la internacia lingvo Esperanto.*
</p>
<p>
  	<i>* (adapté du Nouveau cours rationnel et complet d’Espéranto - SAT-Amikaro, Paris)</i></p>
</blockquote>

<div class="rim"><p><b>Remarque</b> : 
Surveillez attentivement la lettre R qui doit être roulée comme
en italien et la lettre H qui est toujours expirée comme dans les mots
anglais "hand, hair, have".</p>
</div>

<?php 
} // fin section 7
if ($section=="8") {
?>

<p>
Dans cette leçon nous avons achevé l’étude de la conjugaison. Vous
connaissez donc dès &agrave; présent toutes les formes verbales possibles. Et
enfin, bonne nouvelle&#160;!, il ne vous reste plus qu’une autre leçon avant
de passer le petit examen qui constitue la 10ème leçon. Ensuite, on vous
décernera une attestation de cours.
</p>

<?php 
} // fin derniere section
?>	
</section>


				
				<!-- TODO : il faut remplacer cette section suivante par une fonction qui va rechercher en base le précédent et le suivant -->
				<section id="leciono-fino">
					<div id="marko" class="right-align">
						<?php getBoutonFinSection('CG',8,$section,$persono_id); ?>
						<a id="farita" class="btn-floating btn-large invisible light-blue darken-1"><i class="material-icons">done_all</i></a>
					</div>
					<div class="ligoj">
						<?php getLecioneroAntauxa('CG',8,$section); ?>
						<?php getLecioneroVenonta('CG',8,$section); ?>
					</div>
				</section>


			</article>
			
			<aside class="col s12 m10 l4 offset-m1">
								
				<ul class="collapsible" data-collapsible="expandable">

					<?php 
					// On affiche le sommaire de la lecon
					getEnhavtabelo('CG',8); 
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
		</main>



<?php include "dlekpiedo.inc.php"; ?>
