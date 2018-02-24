<?php
$titolo="7 (sep)";
$leciono = 7;
$section=isset($_GET["section"])?$_GET["section"]:"1";
include "dlekkapo.inc.php";
?>

<div class="row">
	<article class="col s12 m10 l7 offset-m1 offset-l1">

		<section id="leciono-enhavo">
		
		<?php 
		getTitoloLecionero('CG',7,$section);
		displayWarningSiLecioneroManquante($persono_id,'CG',7,$section);
		
		if ($section=="1") {
		?>
		
		<p>
		Dans la deuxième leçon nous avons dit qu’il était facile d’élargir
		le vocabulaire de l’espéranto à l’aide d’affixes (préfixes et
		suffixes). Voici maintenant la liste des affixes les plus importants,
		avec des exemples qui illustrent leur application. Il n’est pas
		nécessaire de les apprendre tous en une seule fois. Contentez-vous de
		constater avec quelle facilité l’on construit de nouveaux mots tout en
		réduisant la masse du vocabulaire à apprendre par cœur.
		</p>

		<?php if ($persono) { ?>
		<p class="eo eta"><b>NOTE </b>: Les mots précédés de <span class="marque">•</span> seront automatiquement ajoutés à votre vocabulaire à réviser lorsque vous aurez terminé d'étudier cette section.</p>
		<?php } ?>

		<p><b>BO</b> : <i>parenté par alliance</i></p>
		<div class="row">
			<p class="col s12"><span class="marque">•</span> <span class="eo">filo</span> : fils&emsp;→&emsp;<span class="marque">•</span> <span class="eo">bofilo</span> : beau-fils, gendre</p>
			<p class="col s12"><span class="marque">•</span> <span class="eo">fratino</span> : sœur&emsp;→&emsp;<span class="marque">•</span> <span class="eo">bofratino</span> : belle-sœur</p>
		</div>

		<p><b>DIS</b> : <i>dispersion</i></p>
		<div class="row">
			<p class="col s12"><span class="marque">•</span>  <span class="eo">doni</span> : donner&emsp;→&emsp;<span class="marque">•</span>  <span class="eo">disdoni</span> : distribuer</p>
			<p class="col s12"><span class="marque">•</span>  <span class="eo">semi</span> : semer&emsp;→&emsp;<span class="marque">•</span>  <span class="eo">dissemi</span> : disséminer</p>
		</div>

		<p><b>EK</b> : <i>soudaineté d’une action commençante</i></p>
		<div class="row">
			<p class="col s12"><span class="marque">•</span>  <span class="eo">dormi</span> : dormir&emsp;→&emsp;<span class="marque">•</span>  <span class="eo">ekdormi</span> : s’endormir</p>
			<p class="col s12"><span class="marque">•</span>  <span class="eo">pluvi</span> : pleuvoir&emsp;→&emsp;<span class="marque">•</span>  <span class="eo">ekpluvi</span> : commencer à pleuvoir</p>
			<p class="col s12"><span class="marque">•</span>  <span class="eo">ek !</span> : allez !, en avant !, allons-y !, en route !</p>
		</div>

		<p><b>EKS</b> : <i>cessation d’une fonction ou d’un état social</i></p>
		<div class="row">
			<p class="col s12"><span class="marque">•</span>  <span class="eo">prezidanto</span> : président&emsp;→&emsp;<span class="marque">•</span>  <span class="eo">eksprezidanto</span> : ex-président</p>
			<p class="col s12"><span class="marque">•</span>  <span class="eo">edziĝi</span> : se marier&emsp;→&emsp;<span class="marque">•</span>  <span class="eo">eksedziĝi</span> : divorcer (en parlant d’un homme)</p>
			<p class="col s12"><span class="marque">•</span>  <span class="eo">eksiĝi</span> : démissionner</p>
		</div>
		
		<p><b>FI</b> : <i>mépris</i></p>
		<div class="row">
			<p class="col s12"><span class="eo">virino</span> : femme&emsp;→&emsp;<span class="eo">fivirino</span> : femme de mauvaise vie</p>
			<p class="col s12"><span class="marque">•</span> <span class="eo">komercisto</span> : commerçant&emsp;→&emsp;<span class="eo">fikomercisto</span> : mercanti</p>
			<p class="col s12"> <span class="eo">fi!</span> : pouah !</p>
		</div>
		
		<p><b>GE</b> : <i>réunion des deux sexes</i></p>
		<div class="row">
			<p class="col s12"><span class="eo">patro</span> : père&emsp;→&emsp;<span class="marque">•</span> <span class="eo">gepatroj</span> : parents</p>
			<p class="col s12"><span class="marque">•</span> <span class="eo">sinjoro</span> : monsieur&emsp;→&emsp;<span class="marque">•</span> <span class="eo">gesinjoroj</span> : mesdames et messieurs</p>
			<p class="col s12"><span class="marque">•</span> <span class="eo">gea</span> : mixte</p>
		</div>

		<p><b>MAL</b> : <i>contraire, inverse</i></p>
		<div class="row">
			<p class="col s12"><span class="eo">amiko</span> : ami&emsp;→&emsp;<span class="eo">malamiko</span> : ennemi</p>
			<p class="col s12"><span class="marque">•</span> <span class="eo">fermi</span> : fermer&emsp;→&emsp;<span class="marque">•</span> <span class="eo">malfermi</span> : ouvrir</p>
			<p class="col s12"><span class="marque">•</span> <span class="eo">la malo</span> : le contraire</p>
		</div>

		<p><b>MIS</b> : <i>action ratée, exécutée «&nbsp;de travers&nbsp;»</i></p>
		<div class="row">
			<p class="col s12"><span class="marque">•</span> <span class="eo">kompreni</span> : comprendre&emsp;→&emsp;<span class="marque">•</span> <span class="eo">miskompreni</span> : comprendre de travers</p>
			<p class="col s12"><span class="marque">•</span> <span class="eo">paŝo</span> : pas&emsp;→&emsp;<span class="eo">mispaŝo</span> : faux pas</p>
		</div>

		<p><b>PRA</b> : <i>éloignement dans les degrés de parenté et dans le temps</i></p>
		<div class="row">
			<p class="col s12"><span class="marque">•</span> <span class="eo">nepo</span> : petit-fils&emsp;→&emsp;<span class="marque">•</span> <span class="eo">pranepo</span> : arrière-petit-fils</p>
			<p class="col s12"><span class="marque">•</span> <span class="eo">avo</span> : grand-père&emsp;→&emsp;<span class="marque">•</span> <span class="eo">praavo</span> : arrière-grand-père</p>
			<p class="col s12"><span class="marque">•</span> <span class="eo">arbaro</span> : forêt&emsp;→&emsp;<span class="eo">praarbaro</span> : forêt vierge</p>
		</div>

		<p><b>RE</b> : <i>répétition, retour en arrière</i></p>
		<div class="row">
			<p class="col s12"><span class="eo">fari</span> : faire&emsp;→&emsp; <span class="marque">•</span> <span class="eo">refari</span> : refaire</p>
			<p class="col s12"><span class="eo">veni</span> : venir&emsp;→&emsp; <span class="marque">•</span> <span class="eo">reveni</span> : revenir</p>
			<p class="col s12"><span class="marque">•</span> <span class="eo">ree</span> : de nouveau</p>
			<p class="col s12"><span class="eo">ĝis revido !</span> : au revoir !</p>
		</div>

		<?php 
		} // fin section 1
		if ($section=="2") {
		?>

		<?php if ($persono) { ?>
		<p class="eo eta"><b>NOTE </b>: Les mots précédés de <span class="marque">•</span> seront automatiquement ajoutés à votre vocabulaire à réviser lorsque vous aurez terminé d'étudier cette section.</p>
		<?php } ?>

		<p><b>AĈ</b> : <i>péjoratif</i></p>
		<div class="row">
			<p class="col s12"><span class="eo">domo</span> : maison&emsp;→&emsp;<span class="eo">domaĉo</span> : masure</p>
			<p class="col s12"><span class="eo">skribi</span> : écrire&emsp;→&emsp;<span class="eo">skribaĉi</span> : griffonner</p>
			<p class="col s12"><span class="eo">aĉa</span> : moche, mauvais</p>
		</div>
		
		<p><b>AD</b> : <i>action qui dure ou se réitère</i></p>
		<div class="row">
			<p class="col s12"><span class="eo"><span class="marque">•</span> paroli</span> : parler&emsp;→&emsp;<span class="eo"><span class="marque">•</span> parolado</span> : discours</p>
			<p class="col s12"><span class="eo"><span class="marque">•</span> rigardi</span> : regarder&emsp;→&emsp;<span class="eo"><span class="marque">•</span> rigardadi</span> : contempler</p>
			<p class="col s12"><span class="eo"><span class="marque">•</span> kanti</span> : chanter&emsp;→&emsp;<span class="eo"><span class="marque">•</span> kantado</span> : action de chanter</p>
			<p class="col s12"><span class="eo"><span class="marque">•</span> ade</span> : sans arrêt</p>
		</div>

		<p><b>Aĵ</b> : <i>chose concrète caractérisée par l’idée exprimée dans le radical</i></p>
		<div class="row">
			<p class="col s12"><span class="eo"><span class="marque">•</span> sendi</span> : envoyer&emsp;→&emsp;<span class="eo"><span class="marque">•</span> sendaĵo</span> : envoi (chose envoyée)</p>
			<p class="col s12"><span class="eo"><span class="marque">•</span> bovo</span> : bœuf&emsp;→&emsp;<span class="eo"><span class="marque">•</span> bovaĵo</span> : viande de bœuf</p>
			<p class="col s12"><span class="eo"><span class="marque">•</span> reala</span> : réel&emsp;→&emsp;<span class="eo"><span class="marque">•</span> realaĵo</span> : réalité, chose réelle</p>
		</div>
		
		<p><br><b>AN</b> : <i>membre d’une collectivité, adhérent</i></p>
		<div class="row">
			<p class="col s12"><span class="eo"><span class="marque">•</span> Kanado</span> : Canada&emsp;→&emsp;<span class="eo"><span class="marque">•</span> kanadano</span> : Canadien</p>
			<p class="col s12"><span class="eo"><span class="marque">•</span> Kristo</span> : Christ&emsp;→&emsp;<span class="eo"><span class="marque">•</span> kristano</span> : chrétien</p>
			<p class="col s12"><span class="eo">rotariano</span> : rotarien (membre du Rotary)</p>
		</div>
		
		<p><b>AR</b> : <i>collection de, ensemble de</i></p>
		<div class="row">
			<p class="col s12"><span class="eo"><span class="marque">•</span> vorto</span> : mot&emsp;→&emsp;<span class="eo"><span class="marque">•</span> vortaro</span> : dictionnaire</p>
			<p class="col s12"><span class="eo"><span class="marque">•</span> ŝafo</span> : mouton&emsp;→&emsp;<span class="eo"><span class="marque">•</span> ŝafaro</span> : troupeau de moutons</p>
			<p class="col s12"><span class="eo">arbo</span> : arbre&emsp;→&emsp;<span class="eo">arbaro</span> : forêt</p>
			<p class="col s12"><span class="eo"><span class="marque">•</span> membraro</span> : les membres (d’une association)</p>
		</div>
		
		<p><b>ĈJ</b> : <i>diminutif caressant masculin (appliqué à la première ou aux deux premières syllabes du mot)</i></p>
		<div class="row">
			<p class="col s12"><span class="eo">patro</span> : père&emsp;→&emsp;<span class="eo">paĉjo</span> : papa</p>
			<p class="col s12"><span class="eo">Petro</span> : Pierre&emsp;→&emsp;<span class="eo">Peĉjo</span> : Pierrot</p>
			<p class="col s12"><span class="eo">Jozefo</span> : Joseph&emsp;→&emsp;<span class="eo">Joĉjo</span> : Jo, Jos</p>
			<p class="col s12"><span class="eo">Tinĉjo</span> : Tintin</p>
		</div>
		
		<p><b>EBL</b> : <i>la possibilité passive («qui peut être…»)</i></p>
		<div class="row">
			<p class="col s12"><span class="eo">vidi</span> : voir&emsp;→&emsp;<span class="eo"><span class="marque">•</span> videbla</span> : visible</p>
			<p class="col s12"><span class="eo">kredi</span> : croire&emsp;→&emsp;<span class="eo"><span class="marque">•</span> nekredebla</span> : incroyable</p>
			<p class="col s12"><span class="eo"><span class="marque">•</span> ebla</span> : possible</p>
			<p class="col s12"><span class="eo"><span class="marque">•</span> eble</span> : peut-être</p>
		</div>

		<p><b>EC</b> : <i>l’état, la qualité abstraite correspondant à l’idée exprimée dans la racine</i></p>
		<div class="row">
			<p class="col s12"><span class="eo">viro</span> : homme&emsp;→&emsp;<span class="eo"><span class="marque">•</span> vireco</span> : virilité</p>
			<p class="col s12"><span class="eo">verda</span> : vert&emsp;→&emsp;<span class="eo"><span class="marque">•</span> verdeco</span> : verdeur</p>
			<p class="col s12"><span class="eo">infano</span> : enfant&emsp;→&emsp;<span class="eo"><span class="marque">•</span> infaneco</span> : enfance</p>
		</div>
		
		<p><b>EG</b> : <i>augmentatif</i></p>
		<div class="row">
			<p class="col s12"><span class="eo"><span class="marque">•</span> vento</span> : vent&emsp;→&emsp;<span class="eo"><span class="marque">•</span> ventego</span> : tempête</p>
			<p class="col s12"><span class="eo"><span class="marque">•</span> ridi</span> : rire&emsp;→&emsp;<span class="eo"><span class="marque">•</span> ridegi</span> : se tordre (de rire)</p>
			<p class="col s12"><span class="eo"><span class="marque">•</span> ege</span> : extrêmement</p>
		</div>
		
		<p><b>EJ</b> : <i>lieu caractéristique de l’action ou de l’objet concerné</i></p>
		<div class="row">
			<p class="col s12"><span class="eo">lerni</span> : apprendre&emsp;→&emsp;<span class="eo">lernejo</span> : école</p>
			<p class="col s12"><span class="eo">dormi</span> : dormir&emsp;→&emsp;<span class="eo"><span class="marque">•</span> dormejo</span> : dortoir</p>
			<p class="col s12"><span class="eo"><span class="marque">•</span> tombo</span> : tombe&emsp;→&emsp;<span class="eo"><span class="marque">•</span> tombejo</span> : cimetière</p>
			<p class="col s12"><span class="eo"><span class="marque">•</span> ejo</span> : local, salle</p>
		</div>
		
		<p><b>EM</b> : <i>le penchant, la tendance</i></p>
		<div class="row">
			<p class="col s12"><span class="eo"><span class="marque">•</span> ŝpari</span> : économiser&emsp;→&emsp;<span class="eo"><span class="marque">•</span> ŝparema</span> : économe</p>
			<p class="col s12"><span class="eo"><span class="marque">•</span> babili</span> : bavarder&emsp;→&emsp;<span class="eo"><span class="marque">•</span> babilema</span> : bavard</p>
			<p class="col s12"><span class="eo"><span class="marque">•</span> emi</span> : avoir tendance à</p>
		</div>
		
		<p><b>END</b> : <i>obligation passive («qui doit être…»)</i></p>
		<div class="row">
			<p class="col s12"><span class="eo"><span class="marque">•</span> legi</span> : lire&emsp;→&emsp;<span class="eo"><span class="marque">•</span> legenda</span> : qu’il faut lire (à lire)</p>
			<p class="col s12"><span class="eo">fari</span> : faire&emsp;→&emsp;<span class="eo"><span class="marque">•</span> farenda</span> : qu’il faut faire (à faire)</p>
		</div>
		
		<p><b>ER</b> : <i>unité constitutive de la collection</i></p>
		<div class="row">
			<p class="col s12"><span class="eo"><span class="marque">•</span> salo</span> : sel&emsp;→&emsp;<span class="eo"><span class="marque">•</span> salero</span> : grain de sel</p>
			<p class="col s12"><span class="eo"><span class="marque">•</span> mono</span> : argent&emsp;→&emsp;<span class="eo"><span class="marque">•</span> monero</span> : pièce de monnaie</p>
			<p class="col s12"><span class="eo">ero</span> : détail, morceau, élément, item</p>
		</div>
		
		<p><b>ESTR</b> : <i>celui qui commande effectivement au lieu indiqué par la racine</i></p>
		<div class="row">
			<p class="col s12"><span class="eo">urbo</span> : ville&emsp;→&emsp;<span class="eo"><span class="marque">•</span> urbestro</span> : maire, bourgmestre</p>
			<p class="col s12"><span class="eo"><span class="marque">•</span> estri</span> : diriger&emsp;→&emsp;<span class="eo"><span class="marque">•</span> estro</span> : chef</p>
		</div>
		
		<p><b>ET</b> : <i>diminutif</i></p>
		<div class="row">
			<p class="col s12"><span class="eo">bela</span> : beau&emsp;→&emsp;<span class="eo"><span class="marque">•</span> beleta</span> : joli</p>
			<p class="col s12"><span class="eo">varma</span> : chaud&emsp;→&emsp;<span class="eo"><span class="marque">•</span> varmeta</span> : tiède</p>
			<p class="col s12"><span class="eo">eta</span> : petit&emsp;→&emsp;<span class="eo"><span class="marque">•</span> iomete</span> : un petit peu</p>
		</div>
		
		<p><b>ID</b> : <i>descendant, rejeton</i></p>
		<div class="row">
			<p class="col s12"><span class="eo">kato</span> : chat&emsp;→&emsp;<span class="eo"><span class="marque">•</span> katido</span> : chaton</p>
			<p class="col s12"><span class="eo"><span class="marque">•</span> reĝo</span> : roi&emsp;→&emsp;<span class="eo"><span class="marque">•</span> reĝido</span> : prince</p>
			<p class="col s12"><span class="eo">ido</span> : descendant, petit (d’un animal)</p>
		</div>
		
		<p><b>IG</b> : <i>faire (devant un infinitif), rendre tel ou tel</i></p>
		<div class="row">
			<p class="col s12"><span class="eo">pura</span> : propre&emsp;→&emsp;<span class="eo"><span class="marque">•</span> purigi</span> : nettoyer (rendre propre)</p>
			<p class="col s12"><span class="eo"><span class="marque">•</span> morti</span> : mourir&emsp;→&emsp;<span class="eo"><span class="marque">•</span> mortigi</span> : tuer (faire mourir)</p>
			<p class="col s12"><span class="eo"><span class="marque">•</span> scii</span> : savoir&emsp;→&emsp;<span class="eo"><span class="marque">•</span> sciigi</span> : faire savoir, informer</p>
			<p class="col s12"><span class="eo">igi</span> : rendre (tel), faire (faire)</p>
		</div>
		
		<p><b>IĜ</b> : <i>devenir tel ou tel</i></p>
		<div class="row">
			<p class="col s12"><span class="eo"><span class="marque">•</span> sidi</span> : être assis&emsp;→&emsp;<span class="eo"><span class="marque">•</span> sidiĝi</span> : s’asseoir</p>
			<p class="col s12"><span class="eo">ruĝa</span> : rouge&emsp;→&emsp;<span class="eo"><span class="marque">•</span> ruĝiĝi</span> : rougir</p>
			<p class="col s12"><span class="eo"><span class="marque">•</span> iĝi</span> : devenir</p>
		</div>
		
		<p><b>IL</b> : <i>outil, instrument</i></p>
		<div class="row">
			<p class="col s12"><span class="eo"><span class="marque">•</span> ŝlosi</span> : fermer à clef&emsp;→&emsp;<span class="eo"><span class="marque">•</span> ŝlosilo</span> : clef</p>
			<p class="col s12"><span class="eo"><span class="marque">•</span> razi</span> : raser&emsp;→&emsp;<span class="eo"><span class="marque">•</span> razilo</span> : rasoir</p>
			<p class="col s12"><span class="eo"><span class="marque">•</span> sidi</span> : être assis&emsp;→&emsp;<span class="eo"><span class="marque">•</span> sidilo</span> : siège</p>
			<p class="col s12"><span class="eo"><span class="marque">•</span> ilo</span> : instrument</p>
		</div>
		
		<p><b>IN</b> : <i>sexe féminin</i></p>
		<div class="row">
			<p class="col s12"><span class="eo"><span class="marque">•</span> onklo</span> : oncle&emsp;→&emsp;<span class="eo"><span class="marque">•</span> onklino</span> : tante</p>
			<p class="col s12"><span class="eo"><span class="marque">•</span> koko</span> : coq&emsp;→&emsp;<span class="eo"><span class="marque">•</span> kokino</span> : poule</p>
			<p class="col s12"><span class="eo"><span class="marque">•</span> ina</span> : féminin</p>
		</div>
		
		<p><b>IND</b> : <i>qui mérite d’être..., digne de...</i></p>
		<div class="row">
			<p class="col s12"><span class="eo"><span class="marque">•</span> admiri</span> : admirer&emsp;→&emsp;<span class="eo"><span class="marque">•</span> admirinda</span> : admirable</p>
			<p class="col s12"><span class="eo">laŭdi</span> : louer&emsp;→&emsp;<span class="eo">laŭdinda</span> : louable</p>
		</div>
		
		<p><b>ING</b> : <i>ce dans quoi on insère ou introduit quelque chose</i></p>
		<div class="row">
			<p class="col s12"><span class="eo">plumo</span> : plume&emsp;→&emsp;<span class="eo">plumingo</span> : porte-plume</p>
			<p class="col s12"><span class="eo"><span class="marque">•</span> cigaredo</span> : cigarette&emsp;→&emsp;<span class="eo">cigaredingo</span> : fume-cigarette</p>
			<p class="col s12"><span class="eo"><span class="marque">•</span> glavo</span> : épée&emsp;→&emsp;<span class="eo">glavingo</span> : fourreau</p>
		</div>
		
		<p><b>IST</b> : <i>profession, activité habituelle</i></p>
		<div class="row">
			<p class="col s12"><span class="eo"><span class="marque">•</span> instrui</span> : enseigner&emsp;→&emsp;<span class="eo">instruisto</span> : enseignant</p>
			<p class="col s12"><span class="eo">piano</span> : piano&emsp;→&emsp;<span class="eo"><span class="marque">•</span> pianisto</span> : pianiste</p>
			<p class="col s12"><span class="eo">esperantisto</span> : espérantiste</p>
		</div>
		
		<p><b>NJ</b> : <i>diminutif caressant féminin (appliqué à la première ou aux deux premières syllabes du mot)</i></p>
		<div class="row">
			<p class="col s12"><span class="eo">patrino</span> : mère&emsp;→&emsp;<span class="eo"><span class="marque">•</span> panjo</span> : maman</p>
			<p class="col s12"><span class="eo">Maria</span> : Marie&emsp;→&emsp;<span class="eo">Manjo</span> : Mariette</p>
		</div>
		
		<p><b>OBL</b> : <i>forme les multiplicatifs</i></p>
		<div class="row">
			<p class="col s12"><span class="eo">du</span> : deux&emsp;→&emsp;<span class="eo"><span class="marque">•</span> duobla</span> : double</p>
			<p class="col s12"><span class="eo"><span class="marque">•</span> multobligi</span> : multiplier, reproduire en plusieurs exemplaires</p>
		</div>
		
		<p><b>ON</b> : <i>forme les nombres fractionnaires</i></p>
		<div class="row">
			<p class="col s12"><span class="eo">kvar</span> : quatre&emsp;→&emsp;<span class="eo"><span class="marque">•</span> kvarono</span> : un quart</p>
			<p class="col s12"><span class="eo"><span class="marque">•</span> duonhoro</span> : demi-heure</p>
		</div>	
		<p><b>OP</b> : <i>forme les collectifs</i></p>
		<div class="row">
			<p class="col s12"><span class="eo">tri</span> : trois&emsp;→&emsp;<span class="eo"><span class="marque">•</span> triope</span> : à trois</p>
			<p class="col s12"><span class="eo"><span class="marque">•</span> unuopa</span> : individuel</p>
			<p class="col s12"><span class="eo"><span class="marque">•</span> ope</span> : en groupe, à plusieurs</p>
		</div>
		
		<p><b>UJ</b> : <i>contenant, récipient pour contenir…</i></p>
		<div class="row">
			<p class="col s12"><span class="eo">salo</span> : sel&emsp;→&emsp;<span class="eo">salujo</span> : salière</p>
			<p class="col s12"><span class="eo"><span class="marque">•</span> supo</span> : soupe&emsp;→&emsp;<span class="eo">supujo</span> : soupière</p>
			<p class="col s12"><span class="eo">mono</span> : argent&emsp;→&emsp;<span class="eo"><span class="marque">•</span> monujo</span> : portemonnaie</p>
			<p class="col s12"><span class="eo"><span class="marque">•</span> ujo</span> : récipient</p>
		</div>
		
		<p><b>UL</b> : <i>individu caractérisé par…</i></p>
		<div class="row">
			<p class="col s12"><span class="eo"><span class="marque">•</span> sankta</span> : saint&emsp;→&emsp;<span class="eo"><span class="marque">•</span> sanktulo</span> : un saint</p>
			<p class="col s12"><span class="eo">kontraŭ</span> : contre&emsp;→&emsp;<span class="eo">kontraŭulo</span> : un adversaire, un opposant</p>
			<p class="col s12"><span class="eo"><span class="marque">•</span> stulta</span> : stupide&emsp;→&emsp;<span class="eo"><span class="marque">•</span> stultulo</span> : un sot</p>
			<p class="col s12"><span class="eo"><span class="marque">•</span> kunulino</span> : compagne</p>
			<p class="col s12"><span class="eo">aĉulo</span> : salopard</p>
		</div>
		
		<p><b>UM</b> : <i>indéterminé</i></p>
		<div class="row">
			<p class="col s12"><span class="eo"><span class="marque">•</span> kolo</span> : cou&emsp;→&emsp;<span class="eo"><span class="marque">•</span> kolumo</span> : col (de chemise)</p>
			<p class="col s12"><span class="eo"><span class="marque">•</span> plena</span> : plein&emsp;→&emsp;<span class="eo"><span class="marque">•</span> plenumi</span> : accomplir</p>
			<p class="col s12"><span class="eo"><span class="marque">•</span> umilo</span> : gadget</p>
		</div>

		<?php 
		} // fin section 2
		if ($section=="3") {
		?>
		
		<p>
		L’espéranto est fascinant, n’est-ce pas ? Voici l’occasion de mettre à
		l’épreuve vos connaissances. Essayez de traduire en français les mots
		suivants construits à partir des affixes que nous venons de voir.
		Parfois vous comprendrez le sens en espéranto sans toutefois pouvoir
		trouver l’équivalent français exact  donnez alors votre propre
		explication.
		</p>
			<?php 
				getEkzercon(28,$persono_id);
			?>
		<p>Vous trouverez aussi qu’il est amusant de créer ses propres mots espéranto à partir des radicaux&nbsp;:</p>
			<?php 
				getEkzercon(29,$persono_id);
			?>

		<?php 
		} // fin section 3
		if ($section=="4") {
		?>
		
		<p><a href="<?php echo $vojo;?>fr/son/pv7-1.mp3" class="sm2_button"></a>
		Se junulo ne lernis, maljunulo ne scias.
		</p>
		<p><a href="<?php echo $vojo;?>fr/son/pv7-2.mp3" class="sm2_button"></a>
		Juneco ne scias, maljuneco ne povas.
		</p>
		<p><a href="<?php echo $vojo;?>fr/son/pv7-3.mp3" class="sm2_button"></a>
		Estro ne malsatas.
		</p>
		
		<div class="vortlisto row">
			<p class="col s6"><span class="eo">se</span> : si (condition)</p>
			<p class="col s6"><span class="eo">sata</span> : rassasié, repu</p>
			<p class="col s6"><span class="eo">malsati</span> : avoir faim, souffrir de la faim</p>
		</div>
		<p class="parto">
		L’interprétation des proverbes est assez délicate car on y emploie des
		métaphores, une syntaxe et un rythme très particuliers.</p>
		<p>Par exemple,
		dans <span class="eo">juneco ne scias…</span>, on personnifie la jeunesse et la
		vieillesse.</p>
		<p>Dans <span class="eo">se junulo ne lernis…</span>, au delà du sens immédiat un
		peu obscur (si un jeune n’a pas appris, un vieillard ne sait pas) il
		faut comprendre que le jeune et le vieillard sont une seule et même
		personne : ce que l’on n’apprend pas étant jeune, on ne le saura
		jamais.</p>
		<p>Quant à <span class="eo">estro ne malsatas</span>, on ne sait pas s’il faut
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
		
		<p class="parto">
		Il y a deux questions fondamentales : «&nbsp;quelle heure est-il&nbsp;?&nbsp;» et
		«&nbsp;à quelle heure…&nbsp;?&nbsp;».
		</p>
		<div class="vortlisto row">
			<p class="col s12"><span class="eo"><b>Kioma horo estas ?</b></span>&nbsp;&nbsp;&nbsp;Quelle heure est-il ?</p>
			<div class="col s12 row">
				<p class="col s4 m3"><img src="<?php echo $vojo;?>fr/cge/bildoj/2h.png" class="responsive-img" alt="estas la dua"></p>
				<p class="col s8 m9"><span class="eo"><br>– Estas la dua.</span><br>– Il est deux heures.</p>
			</div>
			<div class="col s12 row">
				<p class="col s4 m3"><img src="<?php echo $vojo;?>fr/cge/bildoj/2h10.png" class="responsive-img" alt="estas la dua"></p>
				<p class="col s8 m9"><span class="eo"><br>– Estas la dua kaj dek.</span><br>– Il est deux heures dix.</p>
			</div>
			<div class="col s12 row">
				<p class="col s4 m3"><img src="<?php echo $vojo;?>fr/cge/bildoj/1h50.png" class="responsive-img" alt="estas la dua"></p>
				<p class="col s8 m9"><span class="eo"><brr>– Estas dek antaŭ la dua.</span><br>– Il est deux heures moins dix.</p>
			</div>
		</div>
		
		<p class="rimarko"><strong>REMARQUE</strong> : 
		  <span class="eo">La dua kaj dek</span> et <span class="eo">dek antaŭ la dua</span> sont des formes
		  raccourcies de
		  <span class="eo">la dua horo kaj dek minutoj</span> et 
		  <span class="eo">dek minutoj antaŭ la dua horo</span>.
		</p>
		
		<div class="vortlisto row">
			<p class="col s12 m6"><span class="eo"><b>Je kioma horo</b> ŝi venis?</span></p><p class="col s12 m6">À quelle heure est-elle venue&nbsp;? </p>
			<p class="col s12 m6"><span class="eo">– Ŝi venis je la dua.</span></p><p class="col s12 m6">– Elle est venue à deux heures.</p>
			<p class="col s12 m6"><span class="eo">– Ŝi venis je la dua kaj dek.</span></p><p class="col s12 m6">etc.</p>
			<p class="col s12"><span class="eo">– Ŝi venis je dek antaŭ la dua.</span></p>
		</div>
		<p>
		Remarquez bien qu’on utilise la forme ordinale du numéral (la dua, la
		tria, la dek-unua…). On étend même cette forme à l’adverbe <span class="eo">kiom</span> qui
		devient ainsi l’adjectif <span class="eo">kioma</span> (<i>combien-ième</i>).
		</p>
		<p>
		Vous pouvez dire l’heure avec un nombre entre 1h et 24h, mais vous
		pouvez aussi vous limiter à 1h-12h avec un adverbe qui précise le
		moment de la journée&nbsp;:
		</p>
		<div class="vortlisto row">
			<p class="col s4 m2"><span class="eo">nokte</span></p><p class="col s8 m4">de la nuit</p>
			<p class="col s4 m2"><span class="eo">matene</span></p><p class="col s8 m4">du matin</p>
			<p class="col s4 m2"><span class="eo">antaŭtagmeze</span></p><p class="col s8 m4">du matin (mot-à-mot&nbsp;: <i>de l’avant-midi</i>)</p>
			<p class="col s4 m2"><span class="eo">posttagmeze</span></p><p class="col s8 m4">de l’après-midi</p>
			<p class="col s4 m2"><span class="eo">vespere</span></p><p class="col s8 m4">du soir</p>
			<p class="col s4 m2"><span class="eo">nun</span></p><p class="col s8 m4">maintenant</p>
		</div>
		
		<p>Exemples :</p>
		<div class="row">
			<p class="col s12"><span class="eo">Ŝi dancis ĝis la dua nokte</span> (aŭ : <span class="eo">matene</span>).</p>
			<p class="col s11 offset-s1">= Elle a dansé jusqu’à deux heures du matin.</p>
			<p class="col s12"><span class="eo">Mi ofte tagmanĝas je la unua posttagmeze.</span></p>
			<p class="col s11 offset-s1">= Je déjeune souvent à une heure de l’après-midi.</p>
			<p class="col s12"><span class="eo">Mi iras labori je la sepa matene kaj revenas je la oka vespere.</span></p>
			<p class="col s11 offset-s1">= Je pars travailler à 7h du matin et je reviens à 8h du soir.</p>
		</div>

		<p>Enfin notez quelques cas particuliers :</p>
		<div class="vortlisto row">
			<div class="col s12 row">
				<p class="col s4 m3"><img src="<?php echo $vojo;?>fr/cge/bildoj/2h15.png" class="responsive-img" alt="estas la dua kaj kvarono"></p>
				<p class="col s8 m9"><br><span class="eo">la dua kaj kvarono</span> = <span class="eo">la dua kaj dek kvin</span></p>
			</div>
			<div class="col s12 row">
				<p class="col s4 m3"><img src="<?php echo $vojo;?>fr/cge/bildoj/2h30.png" class="responsive-img" alt="estas la dua kaj duono"></p>
				<p class="col s8 m9"><span class="eo"><br>la dua kaj duono</span> = <span class="eo">la dua kaj tridek</span></p>
			</div>
			<div class="col s12 row">
				<p class="col s4 m3"><img src="<?php echo $vojo;?>fr/cge/bildoj/2h45.png" class="responsive-img" alt="estas kvarono antau la tria"></p>
				<p class="col s8 m9"><span class="eo"><br>kvarono antaŭ la tria</span> = <span class="eo">la dua kaj kvardek kvin</span></p>
			</div>
			<p class="s12"><span class="eo">je la kioma…?</span> = <span class="eo">je kioma horo…?</span></p>
			<p class="s12"><span class="eo">la kioma estas ?</span> = <span class="eo">kioma horo estas?</span></p>
			<p class="s12"><span class="eo">tagmezo</span> = midi (<i>milieu du jour</i>)</p>
			<p class="s12"><span class="eo">noktomezo</span> = minuit (<i>milieu de la nuit</i>)</p>
		</div>

		<?php 
		} // fin section
		if ($section=="6") {
		?>
			<?php 
				getEkzercon(30,$persono_id);
			?>

		<br>
		<div class="row">
			<p class="col s6 m3 center-align"><img class="responsive-img" src="<?=$vojo?>fr/cge/bildoj/9h45.jpg"><br>-1-</p>
			<p class="col s6 m3 center-align"><img class="responsive-img" src="<?=$vojo?>fr/cge/bildoj/6h00.jpg"><br>-2-</p>
			<p class="col s6 m3 center-align"><img class="responsive-img" src="<?=$vojo?>fr/cge/bildoj/3h30.jpg"><br>-3-</span></p>
			<p class="col s6 m3 center-align"><img class="responsive-img" src="<?=$vojo?>fr/cge/bildoj/17h58.jpg"><br>-4-</p>
		</div>

			<?php 
				getEkzercon(31,$persono_id);
			?>
		<?php 
		} // fin section 6
		if ($section=="7") {
		?>

		<p class="parto">Voici un tableau récapitulatif du vocabulaire que vous avez vu dans cette leçon.</p>
		<?php if ($persono) { ?>
		<p class="eo eta">Ces mots ont été automatiquement ajoutés à votre vocabulaire à réviser.</p>
		<?php } ?>

			<fieldset class="vortoj">
				<div class="vortlisto row">
					<div class="col s12 m6">
						<p><span class="eo">filo</span> : fils<br>
						   <span class="eo">bofilo</span> : beau-fils, gendre</p>
						<p><span class="eo">fratino</span> : sœur<br>
						   <span class="eo">bofratino</span> : belle-sœur</p>
						<p><span class="eo">doni</span> : donner<br>
						   <span class="eo">disdoni</span> : distribuer</p>
						<p><span class="eo">semi</span> : semer<br>
						   <span class="eo">dissemi</span> : disséminer</p>
						<p><span class="eo">dormi</span> : dormir<br>
						   <span class="eo">ekdormi</span> : s’endormir</p>
						<p><span class="eo">pluvi</span> : pleuvoir<br>
						   <span class="eo">ekpluvi</span> : commencer à pleuvoir</p>
						<p><span class="eo">ek !</span> : allez !, en avant !, allons-y !, en route !</p>
						<p><span class="eo">prezidanto</span> : président<br>
						   <span class="eo">eksprezidanto</span> : ex-président</p>
						<p><span class="eo">edziĝi</span> : se marier<br>
						   <span class="eo">eksedziĝi</span> : divorcer</p>
						<p><span class="eo">eksiĝi</span> : démissionner</p>
						<p><span class="eo">komercisto</span> : commerçant</p>
						<p><span class="eo">gepatroj</span> : parents</p>
						<p><span class="eo">sinjoro</span> : monsieur<br>
						   <span class="eo">gesinjoroj</span> : mesdames et messieurs</p>
						<p><span class="eo">gea</span> : mixte</p>
						<p><span class="eo">fermi</span> : fermer<br>
						   <span class="eo">malfermi</span> : ouvrir</p>
						<p><span class="eo">la malo</span> : le contraire</p>
						<p><span class="eo">paroli</span> : parler<br>
						   <span class="eo">parolado</span> : discours</p>
						<p><span class="eo">rigardi</span> : regarder<br>
						   <span class="eo">rigardadi</span> : contempler</p>
						<p><span class="eo">kanti</span> : chanter<br>
						   <span class="eo">kantado</span> : action de chanter</p>
						<p><span class="eo">ade</span> : sans arrêt</p>
						<p><span class="eo">sendi</span> : envoyer<br>
						   <span class="eo">sendaĵo</span> : envoi (chose envoyée)</p>
						<p><span class="eo">bovo</span> : bœuf<br>
						   <span class="eo">bovaĵo</span> : viande de bœuf</p>
						<p><span class="eo">reala</span> : réel<br>
						   <span class="eo">realaĵo</span> : réalité, chose réelle</p>
						<p><span class="eo">Kanado</span> : Canada<br>
						   <span class="eo">kanadano</span> : Canadien</p>
						<p><span class="eo">Kristo</span> : Christ<br>
						   <span class="eo">kristano</span> : chrétien</p>
						<p><span class="eo">vorto</span> : mot<br>
						   <span class="eo">vortaro</span> : dictionnaire</p>
						<p><span class="eo">ŝafo</span> : mouton<br>
						   <span class="eo">ŝafaro</span> : troupeau de moutons</p>
						<p><span class="eo">membraro</span> : les membres (d’une association)</p>
						<p><span class="eo">ebla</span> : possible<br>
						   <span class="eo">eble</span> : peut-être</p>
						<p><span class="eo">vireco</span> : virilité</p>
						<p><span class="eo">verdeco</span> : verdeur</p>
						<p><span class="eo">infaneco</span> : enfance</p>
						<p><span class="eo">vento</span> : vent<br>
						   <span class="eo">ventego</span> : tempête</p>
						<p><span class="eo">ridi</span> : rire<br>
						   <span class="eo">ridegi</span> : se tordre (de rire)</p>
						<p><span class="eo">ege</span> : extrêmement</p>
						<p><span class="eo">tombo</span> : tombe<br>
						   <span class="eo">tombejo</span> : cimetière</p>
						<p><span class="eo">ejo</span> : local, salle</p>
						<p><span class="eo">ŝpari</span> : économiser<br>
						   <span class="eo">ŝparema</span> : économe</p>
					</div>
					<div class="col s12 m6">
						<p><span class="eo">babili</span> : bavarder<br>
						   <span class="eo">babilema</span> : bavard</p>
						<p><span class="eo">emi</span> : avoir tendance à</p>
						<p><span class="eo">legi</span> : lire<br>
						   <span class="eo">legenda</span> : qu’il faut lire (à lire)</p>
						<p><span class="eo">salo</span> : sel<br>
						   <span class="eo">salero</span> : grain de sel</p>
						<p><span class="eo">mono</span> : argent<br>
						   <span class="eo">monero</span> :pièce de monnaie</p>
						<p><span class="eo">estri</span> : diriger<br>
						   <span class="eo">estro</span> : chef<br>
						   <span class="eo">urbestro</span> : maire, bourgmestre</p>
						<p><span class="eo">beleta</span> : joli</p>
						<p><span class="eo">varmeta</span> : tiède</p>
						<p><span class="eo">iomete</span> : un petit peu</p>
						<p><span class="eo">katido</span> : chaton</p>
						<p><span class="eo">reĝo</span> : roi<br>
						   <span class="eo">reĝido</span> : prince</p>
						<p><span class="eo">purigi</span> : nettoyer (rendre propre)</p>
						<p><span class="eo">morti</span> : mourir<br>
						   <span class="eo">mortigi</span> : tuer (faire mourir)</p>
						<p><span class="eo">scii</span> : savoir<br>
						   <span class="eo">sciigi</span> : faire savoir, informer</p>
						<p><span class="eo">sidi</span> : être assis<br>
						   <span class="eo">sidiĝi</span> : s’asseoir<br>
						   <span class="eo">sidilo</span> : siège</p>
						<p><span class="eo">ruĝiĝi</span> : rougir</p>
						<p><span class="eo">iĝi</span> : devenir</p>
						<p><span class="eo">ŝlosi</span> : fermer à clef<br>
						   <span class="eo">ŝlosilo</span> : clef</p>
						<p><span class="eo">razi</span> : raser<br>
						   <span class="eo">razilo</span> : rasoir</p>
						<p><span class="eo">ilo</span> : instrument</p>
						<p><span class="eo">onklo</span> : oncle<br>
						   <span class="eo">onklino</span> : tante</p>
						<p><span class="eo">koko</span> : coq<br>
						   <span class="eo">kokino</span> : poule</p>
						<p><span class="eo">ina</span> : féminin</p>
						<p><span class="eo">admiri</span> : admirer<br>
						   <span class="eo">admirinda</span> : admirable</p>
						<p><span class="eo">cigaredo</span> : cigarette</p>
						<p><span class="eo">glavo</span> : épée</p>
						<p><span class="eo">instrui</span> : enseigner<br>
							<span class="eo">instruisto</span> : enseignant</p>
						<p><span class="eo">panjo</span> : maman</p>
						<p><span class="eo">duobla</span> : double</p>
						<p><span class="eo">multobligi</span> : multiplier, reproduire en plusieurs exemplaires</p>
						<p><span class="eo">duonhoro</span> : demi-heure</p>
						<p><span class="eo">unuopa</span> : individuel</p>
						<p><span class="eo">ope</span> : en groupe, à plusieurs</p>
						<p><span class="eo">supo</span> : soupe</p>
						<p><span class="eo">ujo</span> : récipient</p>
						<p><span class="eo">sankta</span> : saint<br>
						   <span class="eo">sanktulo</span> : un saint</p>
						<p><span class="eo">stulta</span> : stupide<br>
						   <span class="eo">stultulo</span> : un sot</p>
						<p><span class="eo">kunulino</span> : compagne</p>
						<p><span class="eo">kolo</span> : cou<br>
						   <span class="eo">kolumo</span> : col (de chemise)</p>
						<p><span class="eo">plena</span> : plein<br>
						   <span class="eo">plenumi</span> : accomplir</p>
						<p><span class="eo">umilo</span> : gadget</p>
					</div>
				</div>
			</fieldset>		

		<?php 
		} // fin section
		if ($section=="8") {
		?>

			<p>
			Dans cette leçon vous avez fait connaissance avec l’une des
			caractéristiques les plus originales de l’espéranto&#160;: la dérivation.
			Avec la pratique l’utilisation des préfixes et suffixes vous paraîtra
			tellement naturelle que vous n’y ferez même plus attention.
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
