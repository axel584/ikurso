<?php
$titolo="7 (sep)";
$section=isset($_GET["section"])?$_GET["section"]:"1";
include "dlekkapo.inc.php";

?>

<main class="row">
	<article class="col s12 m10 l7 offset-m1 offset-l1">
		<section id="leciono-kapo">
			<h1>Leçon 7</h1>
			<!--<ul id="progreso">
				<li id="lec1" class="farita"></li>
				<li id="lec2" class="farita"></li>
				<li id="lec3" class="farita"></li>
				<li id="lec4" class="farita"></li>
				<li id="lec5" class="farita"></li>
				<li id="lec6" class="nuna"></li>
				<li id="lec7" class="nova"></li>
				<li id="lec8" class="nova"></li>
				<li id="lec9" class="nova"></li>
				<li id="lec10" class="nova"></li>
				<li id="lec11" class="nova"></li>
			</ul>-->
		</section>
				
<section id="leciono-enhavo">

<?php 
getTitoloLecionero('CG',7,$section);


if ($section=="1") {
?>

<p>
Dans la deuxième leçon nous avons dit qu’il était facile d’élargir
le vocabulaire de l’espéranto à l’aide d’affixes (préfixes et
suffixes). Voici maintenant la liste des affixes les plus importants,
avec des exemples qui illustrent leur application. Il n’est pas
nécessaire de les apprendre tous en une seule fois. Contentez-vous de
constater avec quelle facilité l’on construit de nouveaux mots tout en
réduisant la masse du vocabulaire à apprendre par c&oelig;ur.
</p>

<table class="retrait">
<tr><td colspan="5" style="eo"><br><b>BO</b><span class="fr"> : <i>parenté par alliance</i></span></td></tr>
<tr>
	<td width="20">&nbsp;</td>
	<td width="90" class="eo">filo</td>
	<td width="150" class="fr">fils</td>
	<td width="90" class="eo">bofilo</td>
	<td width="150" class="fr">beau-fils, gendre</td>
</tr>
<tr>
	<td>&nbsp;</td>
	<td class="eo">fratino</td>
	<td class="fr">s&oelig;ur</td>
	<td class="eo">bofratino</td>
	<td class="fr">belle-s&oelig;ur</td>
</tr>
<tr><td colspan="5" style="eo"><br><b>DIS</b><span class="fr"> : <i>dispersion</i></span></td></tr>
<tr>
	<td>&nbsp;</td>
	<td class="eo">doni</td>
	<td class="fr">donner</td>
	<td class="eo">disdoni</td>
	<td class="fr">distribuer</td>
</tr>
<tr>
	<td>&nbsp;</td>
	<td class="eo">semi</td>
	<td class="fr">semer</td>
	<td class="eo">dissemi</td>
	<td class="fr">disséminer</td>
</tr>
<tr><td colspan="5" style="eo"><br><b>EK</b><span class="fr"> : <i>soudaineté d’une action commençante</i></span></td></tr>
<tr>
	<td>&nbsp;</td>
	<td class="eo">dormi</td>
	<td class="fr">dormir</td>
	<td class="eo">ekdormi</td>
	<td class="fr">s’endormir</td>
</tr>
<tr>
	<td>&nbsp;</td>
	<td class="eo">pluvi</td>
	<td class="fr">pleuvoir</td>
	<td class="eo">ekpluvi</td>
	<td class="fr">commencer à pleuvoir</td>
</tr>
<tr>
	<td>&nbsp;</td>
	<td class="eo">ek&#160;! : </td>
	<td class="fr" colspan="3">allez&#160;!, en avant&#160;!, allons-y&#160;!, en route&#160;!</td>
</tr>
<tr><td colspan="5" style="eo"><br><b>EKS</b><span class="fr"> : <i>cessation d’une fonction ou d’un état social</i></span></td></tr>
<tr>
	<td>&nbsp;</td>
	<td class="eo">prezidanto</td>
	<td class="fr">président</td>
	<td class="eo">eksprezidanto</td>
	<td class="fr">ex-président</td>
</tr>
<tr>
	<td>&nbsp;</td>
	<td class="eo">edzi&#285;i</td>
	<td class="fr">se marier</td>
	<td class="eo">eksedzi&#285;i</td>
	<td class="fr">divorcer (en parlant d’un homme)</td>
</tr>
<tr>
	<td>&nbsp;</td>
	<td class="eo">eksi&#285;i</td>
	<td class="fr">démissionner</td>
	<td class="eo">&nbsp;</td>
	<td class="fr">&nbsp;</td>
</tr>
<tr><td colspan="5" style="eo"><br><b>FI</b><span class="fr"> : <i>mépris</i></span></td></tr>
<tr>
	<td>&nbsp;</td>
	<td class="eo">virino</td>
	<td class="fr">femme</td>
	<td class="eo">fivirino</td>
	<td class="fr">femme de mauvaise vie</td>
</tr>
<tr>
	<td>&nbsp;</td>
	<td class="eo">komercisto</td>
	<td class="fr">commerçant</td>
	<td class="eo">fikomercisto</td>
	<td class="fr">mercanti</td>
</tr>
<tr>
	<td>&nbsp;</td>
	<td class="eo">fi&#160;! : </td>
	<td class="fr">pouah&#160;!</td>
	<td class="eo">&nbsp;</td>
	<td class="fr">&nbsp;</td>
</tr>
<tr><td colspan="5" style="eo"><br><b>GE</b><span class="fr"> : <i>réunion des deux sexes</i></span></td></tr>
<tr>
	<td>&nbsp;</td>
	<td class="eo">patro</td>
	<td class="fr">père</td>
	<td class="eo">gepatroj</td>
	<td class="fr">parents</td>
</tr>
<tr>
	<td>&nbsp;</td>
	<td class="eo">sinjoro</td>
	<td class="fr">monsieur</td>
	<td class="eo">gesinjoroj</td>
	<td class="fr">mesdames et messieurs</td>
</tr>
<tr>
	<td>&nbsp;</td>
	<td class="eo">gea</td>
	<td class="fr">mixte</td>
	<td class="eo">&nbsp;</td>
	<td class="fr">&nbsp;</td>
</tr>
<tr><td colspan="5" style="eo"><br><b>MAL</b><span class="fr"> : <i>contraire, inverse</i></span></td></tr>
<tr>
	<td>&nbsp;</td>
	<td class="eo">amiko</td>
	<td class="fr">ami</td>
	<td class="eo">malamiko</td>
	<td class="fr">ennemi</td>
</tr>
<tr>
	<td>&nbsp;</td>
	<td class="eo">fermi</td>
	<td class="fr">fermer</td>
	<td class="eo">malfermi</td>
	<td class="fr">ouvrir</td>
</tr>
<tr>
	<td>&nbsp;</td>
	<td class="eo">la malo</td>
	<td class="fr">le contraire</td>
	<td class="eo">&nbsp;</td>
	<td class="fr">&nbsp;</td>
</tr>
<tr><td colspan="5" style="eo"><br><b>MIS</b><span class="fr"> : <i>action ratée, exécutée "de travers"</i></span></td></tr>
<tr>
	<td>&nbsp;</td>
	<td class="eo">kompreni</td>
	<td class="fr">comprendre</td>
	<td class="eo">miskompreni</td>
	<td class="fr">comprendre de travers</td>
</tr>
<tr>
	<td>&nbsp;</td>
	<td class="eo">pa&#349;o</td>
	<td class="fr">pas</td>
	<td class="eo">mispa&#349;o</td>
	<td class="fr">faux pas</td>
</tr>

<tr><td colspan="5" style="eo"><br><b>PRA</b><span class="fr"> : <i>éloignement dans les degrés de parenté et dans le temps</i></span></td></tr>
<tr>
	<td>&nbsp;</td>
	<td class="eo">nepo</td>
	<td class="fr">petit-fils</td>
	<td class="eo">pranepo</td>
	<td class="fr">arrière-petit-fils</td>
</tr>
<tr>
	<td>&nbsp;</td>
	<td class="eo">avo</td>
	<td class="fr">grand-père</td>
	<td class="eo">praavo</td>
	<td class="fr">arrière-grand-père</td>
</tr>
<tr>
	<td>&nbsp;</td>
	<td class="eo">arbaro</td>
	<td class="fr">forêt</td>
	<td class="eo">praarbaro</td>
	<td class="fr">forêt vierge</td>
</tr>
<tr><td colspan="5" style="eo"><br><b>RE</b><span class="fr"> : <i>répétition, retour en arrière</i></span></td></tr>
<tr>
	<td>&nbsp;</td>
	<td class="eo">fari</td>
	<td class="fr">faire</td>
	<td class="eo">refari</td>
	<td class="fr">refaire</td>
</tr>
<tr>
	<td>&nbsp;</td>
	<td class="eo">veni</td>
	<td class="fr">venir</td>
	<td class="eo">reveni</td>
	<td class="fr">revenir</td>
</tr>
<tr>
	<td>&nbsp;</td>
	<td class="eo">ree</td>
	<td class="fr">de nouveau</td>
	<td class="eo">&#285;is revido&#160;!</td>
	<td class="fr">au revoir&#160;!</td>
</tr>
</table>

<?php 
} // fin section 1
if ($section=="2") {
?>

<table class="retrait">
<tr><td colspan="5" style="eo"><br><b>A&#264;</b><span class="fr"> : <i>péjoratif</i></span></td></tr>
<tr>
	<td width="20">&nbsp;</td>
	<td class="eo" width="90">domo</td>
	<td class="fr" width="150">maison</td>
	<td class="eo" width="90">doma&#265;o</td>
	<td class="fr" width="150">masure</td>
</tr>
<tr>
	<td>&nbsp;</td>
	<td class="eo">skribi</td>
	<td class="fr">écrire</td>
	<td class="eo">skriba&#265;i</td>
	<td class="fr">griffonner</td>
</tr>
<tr>
	<td>&nbsp;</td>
	<td class="eo">a&#265;a</td>
	<td class="fr">moche, mauvais</td>
	<td class="eo">&nbsp;</td>
	<td class="fr">&nbsp;</td>
</tr>
<tr><td colspan="5" style="eo"><br><b>AD</b><span class="fr"> : <i>action qui dure ou se réitère</i></span></td></tr>
<tr>
	<td>&nbsp;</td>
	<td class="eo">paroli</td>
	<td class="fr">parler</td>
	<td class="eo">parolado</td>
	<td class="fr">discours</td>
</tr>
<tr>
	<td>&nbsp;</td>
	<td class="eo">rigardi</td>
	<td class="fr">regarder</td>
	<td class="eo">rigardadi</td>
	<td class="fr">contempler</td>
</tr>
<tr>
	<td>&nbsp;</td>
	<td class="eo">kanti</td>
	<td class="fr">chanter</td>
	<td class="eo">kantado</td>
	<td class="fr">action de chanter</td>
</tr>
<tr>
	<td>&nbsp;</td>
	<td class="eo">ade</td>
	<td class="fr">sans arrêt</td>
	<td class="eo">&nbsp;</td>
	<td class="fr">&nbsp;</td>
</tr>
<tr><td colspan="5" style="eo"><br><b>A&#309;</b><span class="fr"> : <i>chose concrète caractérisée par l’idée exprimée dans le radical</i></span></td></tr>
<tr>
	<td>&nbsp;</td>
	<td class="eo">sendi</td>
	<td class="fr">envoyer</td>
	<td class="eo">senda&#309;o</td>
	<td class="fr">envoi (chose envoyée)</td>
</tr>
<tr>
	<td>&nbsp;</td>
	<td class="eo">bovo</td>
	<td class="fr">b&oelig;uf</td>
	<td class="eo">bova&#309;o</td>
	<td class="fr">viande de b&oelig;uf</td>
</tr>
<tr>
	<td>&nbsp;</td>
	<td class="eo">reala</td>
	<td class="fr">réel</td>
	<td class="eo">reala&#309;o</td>
	<td class="fr">réalité, chose réelle</td>
</tr>
<tr><td colspan="5" style="eo"><br><b>AN</b><span class="fr"> : <i>membre d’une collectivité, adhérent</i></span></td></tr>
<tr>
	<td>&nbsp;</td>
	<td class="eo">Kanado</td>
	<td class="fr">Canada</td>
	<td class="eo">kanadano</td>
	<td class="fr">Canadien</td>
</tr>
<tr>
	<td>&nbsp;</td>
	<td class="eo">Kristo</td>
	<td class="fr">Christ</td>
	<td class="eo">kristano</td>
	<td class="fr">chrétien</td>
</tr>
<tr>
	<td>&nbsp;</td>
	<td class="eo">rotariano</td>
	<td class="fr" colspan="3">rotarien (membre du Rotary)</td>
</tr>
<tr><td colspan="5" style="eo"><br><b>AR</b><span class="fr"> : <i>collection de, ensemble de</i></span></td></tr>
<tr>
	<td>&nbsp;</td>
	<td class="eo">vorto</td>
	<td class="fr">mot</td>
	<td class="eo">vortaro</td>
	<td class="fr">dictionnaire</td>
</tr>
<tr>
	<td>&nbsp;</td>
	<td class="eo">&#349;afo</td>
	<td class="fr">mouton</td>
	<td class="eo">&#349;afaro</td>
	<td class="fr">troupeau de moutons</td>
</tr>
<tr>
	<td>&nbsp;</td>
	<td class="eo">membraro</td>
	<td class="fr" colspan="3">les membres (d’une association)</td>
</tr>
<tr><td colspan="5" style="eo"><br><b>&#264;J</b><span class="fr"> : <i>diminutif caressant masculin (appliqué à la première ou aux deux premières syllabes du mot)</i></span></td></tr>
<tr>
	<td>&nbsp;</td>
	<td class="eo">patro</td>
	<td class="fr">père</td>
	<td class="eo">pa&#265;jo</td>
	<td class="fr">papa</td>
</tr>
<tr>
	<td>&nbsp;</td>
	<td class="eo">Petro</td>
	<td class="fr">Pierre</td>
	<td class="eo">Pe&#265;jo</td>
	<td class="fr">Pierrot</td>
</tr>
<tr>
	<td>&nbsp;</td>
	<td class="eo">Jozefo</td>
	<td class="fr">Joseph</td>
	<td class="eo">Jo&#265;jo</td>
	<td class="fr">Jo, Jos</td>
</tr>
<tr>
	<td>&nbsp;</td>
	<td class="eo">Tin&#265;jo</td>
	<td class="fr">Tintin</td>
	<td class="eo">&nbsp;</td>
	<td class="fr">&nbsp;</td>
</tr>
<tr><td colspan="5" style="eo"><br><b>EBL</b><span class="fr"> : <i>la possibilité passive ("qui peut être...")</i></span></td></tr>
<tr>
	<td>&nbsp;</td>
	<td class="eo">vidi</td>
	<td class="fr">voir</td>
	<td class="eo">videbla</td>
	<td class="fr">visible</td>
</tr>
<tr>
	<td>&nbsp;</td>
	<td class="eo">kredi</td>
	<td class="fr">croire</td>
	<td class="eo">nekredebla</td>
	<td class="fr">incroyable</td>
</tr>
<tr>
	<td>&nbsp;</td>
	<td class="eo">ebla</td>
	<td class="fr">possible</td>
	<td class="eo">eble</td>
	<td class="fr">peut-être</td>
</tr>
<tr><td colspan="5" style="eo"><br><b>EC</b><span class="fr"> : <i>l’état, la qualité abstraite correspondant à l’idée exprimée dans la racine</i></span></td></tr>
<tr>
	<td>&nbsp;</td>
	<td class="eo">viro</td>
	<td class="fr">homme</td>
	<td class="eo">vireco</td>
	<td class="fr">virilité</td>
</tr>
<tr>
	<td>&nbsp;</td>
	<td class="eo">verda</td>
	<td class="fr">vert</td>
	<td class="eo">verdeco</td>
	<td class="fr">verdeur</td>
</tr>
<tr>
	<td>&nbsp;</td>
	<td class="eo">infano</td>
	<td class="fr">enfant</td>
	<td class="eo">infaneco</td>
	<td class="fr">enfance</td>
</tr>
<tr><td colspan="5" style="eo"><br><b>EG</b><span class="fr"> : <i>augmentatif</i></span></td></tr>
<tr>
	<td>&nbsp;</td>
	<td class="eo">vento</td>
	<td class="fr">vent</td>
	<td class="eo">ventego</td>
	<td class="fr">tempête</td>
</tr>
<tr>
	<td>&nbsp;</td>
	<td class="eo">ridi</td>
	<td class="fr">rire</td>
	<td class="eo">ridegi</td>
	<td class="fr">se tordre (de rire)</td>
</tr>
<tr>
	<td>&nbsp;</td>
	<td class="eo">ege</td>
	<td class="fr">extrêmement</td>
	<td class="eo">&nbsp;</td>
	<td class="fr">&nbsp;</td>
</tr>
<tr><td colspan="5" style="eo"><br><b>EJ</b><span class="fr"> : <i>lieu caractéristique de l’action ou de l’objet concerné</i></span></td></tr>
<tr>
	<td>&nbsp;</td>
	<td class="eo">lerni</td>
	<td class="fr">apprendre</td>
	<td class="eo">lernejo</td>
	<td class="fr">école</td>
</tr>
<tr>
	<td>&nbsp;</td>
	<td class="eo">dormi</td>
	<td class="fr">dormir</td>
	<td class="eo">dormejo</td>
	<td class="fr">dortoir</td>
</tr>
<tr>
	<td>&nbsp;</td>
	<td class="eo">tombo</td>
	<td class="fr">tombe</td>
	<td class="eo">tombejo</td>
	<td class="fr">cimetière</td>
</tr>
<tr>
	<td>&nbsp;</td>
	<td class="eo">ejo</td>
	<td class="fr">local, salle</td>
	<td class="eo">&nbsp;</td>
	<td class="fr">&nbsp;</td>
</tr>
<tr><td colspan="5" style="eo"><br><b>EM</b><span class="fr"> : <i>le penchant, la tendance</i></span></td></tr>
<tr>
	<td>&nbsp;</td>
	<td class="eo">&#349;pari</td>
	<td class="fr">économiser</td>
	<td class="eo">&#349;parema</td>
	<td class="fr">économe</td>
</tr>
<tr>
	<td>&nbsp;</td>
	<td class="eo">babili</td>
	<td class="fr">bavarder</td>
	<td class="eo">babilema</td>
	<td class="fr">bavard</td>
</tr>
<tr>
	<td>&nbsp;</td>
	<td class="eo">emi</td>
	<td class="fr" colspan="3">avoir tendance à</td>
</tr>
<tr><td colspan="5" style="eo"><br><b>END</b><span class="fr"> : <i>obligation passive ("qui doit être...")</i></span></td></tr>
<tr>
	<td>&nbsp;</td>
	<td class="eo">legi</td>
	<td class="fr">lire</td>
	<td class="eo">legenda</td>
	<td class="fr">qu’il faut lire (à lire)</td>
</tr>
<tr>
	<td>&nbsp;</td>
	<td class="eo">fari</td>
	<td class="fr">faire</td>
	<td class="eo">farenda</td>
	<td class="fr">qu’il faut faire (à faire)</td>
</tr>
<tr><td colspan="5" style="eo"><br><b>ER</b><span class="fr"> : <i>unité constitutive de la collection</i></span></td></tr>
<tr>
	<td>&nbsp;</td>
	<td class="eo">salo</td>
	<td class="fr">sel</td>
	<td class="eo">salero</td>
	<td class="fr">grain de sel</td>
</tr>
<tr>
	<td>&nbsp;</td>
	<td class="eo">mono</td>
	<td class="fr">argent</td>
	<td class="eo">monero</td>
	<td class="fr">pièce de monnaie</td>
</tr>
<tr>
	<td>&nbsp;</td>
	<td class="eo">ero</td>
	<td class="fr" colspan="3">détail, morceau, élément, item</td>
</tr>
<tr><td colspan="5" style="eo"><br><b>EStr</b><span class="fr"> : <i>celui qui commande effectivement au lieu indiqué par la racine</i></span></td></tr>
<tr>
	<td>&nbsp;</td>
	<td class="eo">urbo</td>
	<td class="fr">ville</td>
	<td class="eo">urbestro</td>
	<td class="fr">maire</td>
</tr>
<tr>
	<td>&nbsp;</td>
	<td class="eo">estri</td>
	<td class="fr">diriger</td>
	<td class="eo">estro</td>
	<td class="fr">chef</td>
</tr>
<tr><td colspan="5" style="eo"><br><b>ET</b><span class="fr"> : <i>diminutif</i></span></td></tr>
<tr>
	<td>&nbsp;</td>
	<td class="eo">bela</td>
	<td class="fr">beau</td>
	<td class="eo">beleta</td>
	<td class="fr">joli</td>
</tr>
<tr>
	<td>&nbsp;</td>
	<td class="eo">varma</td>
	<td class="fr">chaud</td>
	<td class="eo">varmeta</td>
	<td class="fr">tiède</td>
</tr>
<tr>
	<td>&nbsp;</td>
	<td class="eo">eta</td>
	<td class="fr">petit</td>
	<td class="eo">iomete</td>
	<td class="fr">un petit peu</td>
</tr>
<tr><td colspan="5" style="eo"><br><b>ID</b><span class="fr"> : <i>descendant, rejeton</i></span></td></tr>
<tr>
	<td>&nbsp;</td>
	<td class="eo">kato</td>
	<td class="fr">chat</td>
	<td class="eo">katido</td>
	<td class="fr">chaton</td>
</tr>
<tr>
	<td>&nbsp;</td>
	<td class="eo">re&#285;o</td>
	<td class="fr">roi</td>
	<td class="eo">re&#285;ido</td>
	<td class="fr">prince</td>
</tr>
<tr>
	<td>&nbsp;</td>
	<td class="eo">ido</td>
	<td class="fr" colspan="3">descendant, petit (d’un animal)</td>
</tr>
<tr><td colspan="5" style="eo"><br><b>IG</b><span class="fr"> : <i>faire (devant un infinitif), rendre tel ou tel</i></span></td></tr>
<tr>
	<td>&nbsp;</td>
	<td class="eo">pura</td>
	<td class="fr">propre</td>
	<td class="eo">purigi</td>
	<td class="fr">nettoyer (rendre propre)</td>
</tr>
<tr>
	<td>&nbsp;</td>
	<td class="eo">morti</td>
	<td class="fr">mourir</td>
	<td class="eo">mortigi</td>
	<td class="fr">tuer (faire mourir)</td>
</tr>
<tr>
	<td>&nbsp;</td>
	<td class="eo">scii</td>
	<td class="fr">savoir</td>
	<td class="eo">sciigi</td>
	<td class="fr">faire savoir, informer</td>
</tr>
<tr>
	<td>&nbsp;</td>
	<td class="eo">igi</td>
	<td class="fr" colspan="3">rendre (tel), faire (faire)</td>
</tr>
<tr><td colspan="5" style="eo"><br><b>I&#284;</b><span class="fr"> : <i>devenir tel ou tel</i></span></td></tr>
<tr>
	<td>&nbsp;</td>
	<td class="eo">sidi</td>
	<td class="fr">être assis</td>
	<td class="eo">sidi&#285;i</td>
	<td class="fr">s’asseoir</td>
</tr>
<tr>
	<td>&nbsp;</td>
	<td class="eo">ru&#285;a</td>
	<td class="fr">rouge</td>
	<td class="eo">ru&#285;i&#285;i</td>
	<td class="fr">rougir</td>
</tr>
<tr>
	<td>&nbsp;</td>
	<td class="eo">i&#285;i</td>
	<td class="fr">devenir</td>
	<td class="eo">&nbsp;</td>
	<td class="fr">&nbsp;</td>
</tr>
<tr><td colspan="5" style="eo"><br><b>IL</b><span class="fr"> : <i>outil, instrument</i></span></td></tr>
<tr>
	<td>&nbsp;</td>
	<td class="eo">&#349;losi</td>
	<td class="fr">fermer &agrave; clef</td>
	<td class="eo">&#349;losilo</td>
	<td class="fr">clef</td>
</tr>
<tr>
	<td>&nbsp;</td>
	<td class="eo">razi</td>
	<td class="fr">raser</td>
	<td class="eo">razilo</td>
	<td class="fr">rasoir</td>
</tr>
<tr>
	<td>&nbsp;</td>
	<td class="eo">sidi</td>
	<td class="fr">être assis</td>
	<td class="eo">sidilo</td>
	<td class="fr">siège</td>
</tr>
<tr>
	<td>&nbsp;</td>
	<td class="eo">ilo</td>
	<td class="fr">instrument</td>
	<td class="eo">&nbsp;</td>
	<td class="fr">&nbsp;</td>
</tr>
<tr><td colspan="5" style="eo"><br><b>IN</b><span class="fr"> : <i>sexe féminin</i></span></td></tr>
<tr>
	<td>&nbsp;</td>
	<td class="eo">onklo</td>
	<td class="fr">oncle</td>
	<td class="eo">onklino</td>
	<td class="fr">tante</td>
</tr>
<tr>
	<td>&nbsp;</td>
	<td class="eo">koko</td>
	<td class="fr">coq</td>
	<td class="eo">kokino</td>
	<td class="fr">poule</td>
</tr>
<tr>
	<td>&nbsp;</td>
	<td class="eo">ina</td>
	<td class="fr">féminin</td>
	<td class="eo">&nbsp;</td>
	<td class="fr">&nbsp;</td>
</tr>
<tr><td colspan="5" style="eo"><br><b>IND</b><span class="fr"> : <i>qui mérite d’être..., digne de...</i></span></td></tr>
<tr>
	<td>&nbsp;</td>
	<td class="eo">admiri</td>
	<td class="fr">admirer</td>
	<td class="eo">admirinda</td>
	<td class="fr">admirable</td>
</tr>
<tr>
	<td>&nbsp;</td>
	<td class="eo">la&#365;di</td>
	<td class="fr">louer</td>
	<td class="eo">la&#365;dinda</td>
	<td class="fr">louable</td>
</tr>
<tr><td colspan="5" style="eo"><br><b>ING</b><span class="fr"> : <i>ce dans quoi on insère ou introduit quelque chose</i></span></td></tr>
<tr>
	<td>&nbsp;</td>
	<td class="eo">plumo</td>
	<td class="fr">plume</td>
	<td class="eo">plumingo</td>
	<td class="fr">porte-plume</td>
</tr>
<tr>
	<td>&nbsp;</td>
	<td class="eo">cigaredo</td>
	<td class="fr">cigarette</td>
	<td class="eo">cigaredingo</td>
	<td class="fr">fume-cigarette</td>
</tr>
<tr>
	<td>&nbsp;</td>
	<td class="eo">glavo</td>
	<td class="fr">épée</td>
	<td class="eo">glavingo</td>
	<td class="fr">fourreau</td>
</tr>
<tr><td colspan="5" style="eo"><br><b>IST</b><span class="fr"> : <i>profession, activité habituelle</i></span></td></tr>
<tr>
	<td>&nbsp;</td>
	<td class="eo">instrui</td>
	<td class="fr">enseigner</td>
	<td class="eo">instruisto</td>
	<td class="fr">instituteur</td>
</tr>
<tr>
	<td>&nbsp;</td>
	<td class="eo">piano</td>
	<td class="fr">piano</td>
	<td class="eo">pianisto</td>
	<td class="fr">pianiste</td>
</tr>
<tr>
	<td>&nbsp;</td>
	<td class="eo">esperantisto</td>
	<td class="fr">espérantiste</td>
	<td class="eo">&nbsp;</td>
	<td class="fr">&nbsp;</td>
</tr>
<tr><td colspan="5" style="eo"><br><b>NJ</b><span class="fr"> : <i>diminutif caressant féminin (appliqué à la première ou aux deux premières syllabes du mot)</i></span></td></tr>
<tr>
	<td>&nbsp;</td>
	<td class="eo">patrino</td>
	<td class="fr">mère</td>
	<td class="eo">panjo</td>
	<td class="fr">maman</td>
</tr>
<tr>
	<td>&nbsp;</td>
	<td class="eo">Maria</td>
	<td class="fr">Marie</td>
	<td class="eo">Manjo</td>
	<td class="fr">Mariette</td>
</tr>
<tr><td colspan="5" style="eo"><br><b>OBL</b><span class="fr"> : <i>forme les multiplicatifs</i></span></td></tr>
<tr>
	<td>&nbsp;</td>
	<td class="eo">du</td>
	<td class="fr">deux</td>
	<td class="eo">duobla</td>
	<td class="fr">double</td>
</tr>
<tr>
	<td>&nbsp;</td>
	<td class="eo">multobligi</td>
	<td class="fr" colspan="3">multiplier, reproduire en plusieurs exemplaires</td>
</tr>
<tr><td colspan="5" style="eo"><br><b>ON</b><span class="fr"> : <i>forme les nombres fractionnaires</i></span></td></tr>
<tr>
	<td>&nbsp;</td>
	<td class="eo">kvar</td>
	<td class="fr">quatre</td>
	<td class="eo">kvarono</td>
	<td class="fr">un quart</td>
</tr>
<tr>
	<td>&nbsp;</td>
	<td class="eo">duonhoro</td>
	<td class="fr">demi-heure</td>
	<td class="eo">&nbsp;</td>
	<td class="fr">&nbsp;</td>
</tr>
<tr><td colspan="5" style="eo"><br><b>OP</b><span class="fr"> : <i>forme les collectifs</i></span></td></tr>
<tr>
	<td>&nbsp;</td>
	<td class="eo">tri</td>
	<td class="fr">trois</td>
	<td class="eo">triope</td>
	<td class="fr">à trois</td>
</tr>
<tr>
	<td>&nbsp;</td>
	<td class="eo">unuopa</td>
	<td class="fr">individuel</td>
	<td class="eo">ope</td>
	<td class="fr">en groupe, à plusieurs</td>
</tr>
<tr><td colspan="5" style="eo"><br><b>UJ</b><span class="fr"> : <i>contenant, récipient pour contenir...</i></span></td></tr>
<tr>
	<td>&nbsp;</td>
	<td class="eo">salujo</td>
	<td class="fr">salière</td>
	<td class="eo">piprujo</td>
	<td class="fr">poivrière</td>
</tr>
<tr>
	<td>&nbsp;</td>
	<td class="eo">supujo</td>
	<td class="fr">soupière</td>
	<td class="eo">ujo</td>
	<td class="fr">récipient</td>
</tr>
<tr><td colspan="5" style="eo"><br><b>UL</b><span class="fr"> : <i>individu caractérisé par...</i></span></td></tr>
<tr>
	<td>&nbsp;</td>
	<td class="eo">sankta</td>
	<td class="fr">saint</td>
	<td class="eo">sanktulo</td>
	<td class="fr">un saint</td>
</tr>
<tr>
	<td>&nbsp;</td>
	<td class="eo">kontra&#365;</td>
	<td class="fr">contre</td>
	<td class="eo">kontra&#365;ulo</td>
	<td class="fr">un adversaire, un opposant</td>
</tr>
<tr>
	<td>&nbsp;</td>
	<td class="eo">stulta</td>
	<td class="fr">stupide</td>
	<td class="eo">stultulo</td>
	<td class="fr">un sot</td>
</tr>
<tr>
	<td>&nbsp;</td>
	<td class="eo">kunulino</td>
	<td class="fr">compagne</td>
	<td class="eo">a&#265;ulo</td>
	<td class="fr">salopard</td>
</tr>
<tr><td colspan="5" style="eo"><br><b>UM</b><span class="fr"> : <i>indéterminé</i></span></td></tr>
<tr>
	<td>&nbsp;</td>
	<td class="eo">kolo</td>
	<td class="fr">cou</td>
	<td class="eo">kolumo</td>
	<td class="fr">col (de chemise)</td>
</tr>
<tr>
	<td>&nbsp;</td>
	<td class="eo">plena</td>
	<td class="fr">plein</td>
	<td class="eo">plenumi</td>
	<td class="fr">accomplir</td>
</tr>
<tr>
	<td>&nbsp;</td>
	<td class="eo">umilo</td>
	<td class="fr">gadget</td>
	<td class="eo">&nbsp;</td>
	<td class="fr">&nbsp;</td>
</tr>
</table>

<?php 
} // fin section 2
if ($section=="3") {
?>

<?php atentigo(); ?>

<p>
L’espéranto est fascinant, n’est-ce pas&#160;? Voici l’occasion de mettre à
l’épreuve vos connaissances. Essayez de traduire en français les mots
suivants construits à partir des affixes que nous venons de voir.
Parfois vous comprendrez le sens en espéranto sans toutefois pouvoir
trouver l’équivalent français exact&nbsp; donnez alors votre propre
explication.
</p>
<input type="hidden" name="013_cxap07.1" value="1. Essayez de traduire en français les mots suivants construits à partir des affixes que nous venons de voir.">
<div class="tasko">
<?php
	$demandoj=array (
	1 => "(&quot;edzo&quot; = époux): edzino, edzi&#285;i, eksedzo, geedzoj",
	2 => "(&quot;viro&quot; = homme): virino, vireto, vira&#265;o, vira",
	3 => "(&quot;bovo&quot; = b&oelig;uf): bovino, bovido, bovaro, bovejo",
	4 => "(&quot;varma&quot; = chaud): malvarma, varmeco, varmeta, malvarmi&#285;i",
	5 => "(&quot;aro&quot; = groupe): &#349;iparo (&#349;ipo = bateau), abelaro (abelo = abeille), stelaro (stelo = étoile)"
	);
	ekzerco("X",2);
?>
</div>
<p>
Vous trouverez aussi qu’il est amusant de créer ses propres mots espéranto à partir des radicaux:
</p>
<input type="hidden" name="013_cxap07.2" value="2. Vous trouverez aussi qu’il est amusant de créer ses propres mots espéranto à partir des radicaux.">
<?php atentigo(); ?>
<div class="tasko">
<?php
	$demandoj=array (
	6 => "Cuire à petit feu (&quot;boli&quot; = bouillir):", 
	7 => "Homme méprisable (&quot;viro&quot;):",
	8 => "Un imbécile (&quot;stulta&quot;):",
	9 => "Un temps affreux (&quot;vetero&quot; = temps):", 
	10 => "Une nouvelle (&quot;nova&quot; = nouveau):", 
	11 => "Un flocon de neige (&quot;ne&#285;o&quot; = neige):", 
	12 => "La solitude (&quot;sola&quot; = seul):", 
	13 => "Une église (&quot;pre&#285;i&quot; = prier):", 
	14 => "Polycopier (&quot;multa&quot; = beaucoup):", 
	15 => "Un dentiste (&quot;dento&quot; = dent):", 
	16 => "Une ex-présidente :", 
	17 => "Un pauvre (&quot;ri&#265;a&quot; = riche):", 
	18 => "Une salle de jeu (&quot;ludi&quot; = jouer):"
	);
	ekzerco ("U", 1);
?>
</div> 

<?php 
} // fin section 3
if ($section=="4") {
?>

<p>
<a href="../son/pv7-1.wav"><img src="../pix/icon20.gif"></a>
- Se junulo ne lernis, maljunulo ne scias.
</p>
<p>
<a href="../son/pv7-2.wav"><img src="../pix/icon20.gif"></a>
- Juneco ne scias, maljuneco ne povas.
</p>
<p>
<a href="../son/pv7-3.wav"><img src="../pix/icon20.gif"></a>
- Estro ne malsatas.
</p>
<table class="voca">
<tr>
	<td class="eo" width="60">se</td><td class="fr" width="150">si (condition)</td>
	<td class="eo" width="60">sata</td><td class="fr" width="150">rassasié, repu</td>
	<td class="eo" width="60">malsati</td><td class="fr" width="200">avoir faim, souffrir de la faim</td>
</tr>
</table>
</p>
<p>
L’interprétation des proverbes est assez délicate car on y emploie des
métaphores, une syntaxe et un rythme très particuliers. Par exemple,
dans <em>juneco ne scias...</em>, on personnifie la jeunesse et la
vieillesse. Dans <em>se junulo ne lernis...</em>, au delà du sens immédiat un
peu obscur (si un jeune n’a pas appris, un vieillard ne sait pas) il
faut comprendre que le jeune et le vieillard sont une seule et même
personne : ce que l’on n’apprend pas étant jeune, on ne le saura
jamais. Quant à <em>estro ne malsatas</em>, on ne sait pas s’il faut
l’interpréter comme une simple constatation (un chef n’a pas faim),
comme une revendication de chef (un chef n’a pas à souffrir de la
faim), ou comme le sourd reproche d’un peuple affamé à ses chefs qui
ne se privent de rien. Les proverbes sont de très courts poèmes aux
multiples résonances.
</p>


<?php 
} // fin section 4
if ($section=="5") {
?>

<p>
Il y a deux questions fondamentales : &#171;quelle heure est-il&#160;?&#187; et
&#171;à quelle heure...&#160;?&#187;.
</p>
<table class="retrait">
	<tr><td class="ekz" width="200"><b>Kioma horo estas&#160;?</b></td><td class="fr" width="200">Quelle heure est-il&#160;?</td></tr>
	<tr><td class="ekz">Estas la dua.</td><td class="fr">Il est deux heures.</td></tr>
	<tr><td class="ekz">Estas la dua kaj dek.</td><td class="fr">Il est deux heures dix.</td></tr>
	<tr><td class="ekz">Estas dek anta&#365; la dua.</td><td class="fr">Il est deux heures moins dix.</td></tr>
</table>

<div class="rim"><p><b>Remarque</b> : 
  &#171;La dua kaj dek&#187; et &#171;dek anta&#365; la dua&#187; sont des formes
  raccourcies de
  &#171;la dua horo kaj dek minutoj&#187; et 
  &#171;dek minutoj anta&#365; la dua horo&#187;.
</p></div>
</p>
<table class="retrait">
	<tr><td class="ekz" width="200"><b>Je kioma horo</b> &#349;i venis&#160;?</td><td class="fr" width="200">à quelle heure est-elle venue&#160;? </td></tr>
	<tr><td class="ekz">&#348;i venis je la dua.</td><td class="fr">Elle est venue à deux heures.</td></tr>
	<tr><td class="ekz">&#348;i venis je la dua kaj dek.</td><td class="fr">Etc.</td></tr>
	<tr><td class="ekz">&#348;i venis je dek anta&#365; la dua.</td></tr>
</table>
<p>
Remarquez bien qu’on utilise la forme ordinale du numéral (la dua, la
tria, la dek-unua...). On étend même cette forme à l’adverbe "kiom" qui
devient ainsi l’adjectif "kioma" (<i>combien-ième</i>).
</p>
<p>
Vous pouvez dire l’heure avec un nombre entre 1h et 24h, mais vous
pouvez aussi vous limiter à 1h-12h avec un adverbe qui précise le
moment de la journée :
</p>
<table class="retrait">
	<tr><td class="eo" width="150">nokte</td><td class="fr" width="200">de la nuit</td></tr>
	<tr><td class="eo">matene</td><td class="fr">du matin</td></tr>
	<tr><td class="eo">anta&#365;tagmeze</td><td class="fr">du matin (mot-à-mot: <i>de l’avant-midi</i>)</td></tr>
	<tr><td class="eo">posttagmeze</td><td class="fr">de l’après-midi</td></tr>
	<tr><td class="eo">vespere</td><td class="fr">du soir</td></tr>
</table>
<p>Exemples :</p>
<table class="retrait">
	<tr><td colspan="2" class="ekz">&#348;i dancis &#285;is la dua nokte (a&#365; : matene).</td></tr>
	<tr><td>&nbsp;</td><td class="fr">= Elle a dansé jusqu’à deux heures du matin.</td></tr>
	<tr><td>&nbsp;</td></tr>
	<tr><td colspan="2" class="ekz">Mi ofte tagman&#285;as je la unua posttagmeze.</td></tr>
	<tr><td></td><td class="fr">= Je déjeune souvent à une heure de l’après-midi.</td></tr>
	<tr><td>&nbsp;</td></tr>
	<tr><td colspan="2" class="ekz"> Mi iras labori je la sepa matene kaj revenas je la oka vespere.</td></tr>
	<tr><td></td><td class="fr">= Je pars travailler à 7h du matin et je reviens à 8h du soir.</td></tr>
	<tr><td>&nbsp;</td></tr>
</table>
<p>Enfin notez quelques cas particuliers :</p>
<table class="retrait">
	<tr class="fr"><td class="ekz" width="200">la dua kaj kvarono</td><td>=</td><td width="200">la dua kaj dek kvin</td></tr>
	<tr class="fr"><td class="ekz">la dua kaj duono</td><td>=</td><td>la dua kaj tridek</td></tr>
	<tr class="fr"><td class="ekz">je la kioma...&#160;?</td><td>=</td><td>je kioma horo...&#160;?</td></tr>
	<tr class="fr"><td class="ekz">la kioma estas&#160;?</td><td>=</td><td>kioma horo estas&#160;?</td></tr>
	<tr class="fr"><td class="ekz">tagmezo</td><td>=</td><td>midi (<i>milieu du jour</i>)</td></tr>
	<tr class="fr"><td class="ekz">noktomezo</td><td>=</td><td>minuit (<i>milieu de la nuit</i>)</td></tr>
</table>
<p>
<p>Répondez aux questions suivantes.</p>
<input type="hidden" name="013_cxap07.3" value="3. Répondez aux questions suivantes.">
<?php atentigo(); ?>
<div class="tasko">
<?php
	$demandoj=array (
	19 => "Se nun estas la dua, kioma horo estos post dudek minutoj&#160;? (&quot;Se&quot; signifie &quot;si&quot; condition)",  
	20 => "Se nun estas la dek-unua, kioma horo estis anta&#365; dek minutoj&#160;?",
	21 => "Mi revenis je la kvara kaj duono, kaj &#349;i revenis dudek kvin minutojn anta&#365; mi. Je la kioma &#349;i revenis&#160;?",
	22 => "Fatima iras labori je la sepa matene kaj revenas post na&#365; horoj. Je la kioma &#349;i revenas&#160;?"
	);
	ekzerco("U", 1);
?>
</div>

<?php 
} // fin section 5
if ($section=="6") {
?>

<p>
Dans cette leçon vous avez fait connaissance avec l’une des
caractéristiques les plus originales de l’espéranto&#160;: la dérivation.
Avec la pratique l’utilisation des préfixes et suffixes vous paraîtra
tellement naturelle que vous n’y ferez même plus attention.
</p>

<?php 
} // fin derniere section
?>	
</section>


				
				<!-- TODO : il faut remplacer cette section suivante par une fonction qui va rechercher en base le précédent et le suivant -->
				<section id="leciono-fino">
					<div id="marko" class="right-align">
						<a id="nova" class="waves-effect waves-light btn tooltipped light-blue darken-1" data-position="top" data-delay="50" data-tooltip="j'ai fini d'étudier cette section">Terminé !</a>
						<a id="farita" class="btn-floating btn-large invisible light-blue darken-1"><i class="material-icons">done_all</i></a>
					</div>
					<div class="ligoj">
						<?php getLecioneroAntauxa('CG',7,$section); ?>
						<?php getLecioneroVenonta('CG',7,$section); ?>
					</div>
				</section>


			</article>
			
			<aside class="col s12 m10 l4 offset-m1">
								
				<ul class="collapsible" data-collapsible="expandable">

					<?php 
					// On affiche le sommaire de la lecon
					getEnhavtabelo('CG',7); 
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
