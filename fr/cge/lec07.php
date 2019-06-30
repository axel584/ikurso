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
			<p class="col s12"><span class="marque">•</span> <span class="eo">filo</span>&nbsp;: fils&emsp;→&emsp;<span class="marque">•</span> <span class="eo">bofilo</span>&nbsp;: beau-fils, gendre</p>
			<p class="col s12"><span class="marque">•</span> <span class="eo">fratino</span>&nbsp;: sœur&emsp;→&emsp;<span class="marque">•</span> <span class="eo">bofratino</span>&nbsp;: belle-sœur</p>
		</div>

		<p><b>DIS</b> : <i>dispersion</i></p>
		<div class="row">
			<p class="col s12"><span class="marque">•</span>  <span class="eo">doni</span>&nbsp;: donner&emsp;→&emsp;<span class="marque">•</span>  <span class="eo">disdoni</span>&nbsp;: distribuer</p>
			<p class="col s12"><span class="marque">•</span>  <span class="eo">semi</span>&nbsp;: semer&emsp;→&emsp;<span class="marque">•</span>  <span class="eo">dissemi</span>&nbsp;: disséminer</p>
		</div>

		<p><b>EK</b> : <i>soudaineté d’une action commençante</i></p>
		<div class="row">
			<p class="col s12"><span class="marque">•</span>  <span class="eo">dormi</span>&nbsp;: dormir&emsp;→&emsp;<span class="marque">•</span>  <span class="eo">ekdormi</span>&nbsp;: s’endormir</p>
			<p class="col s12"><span class="marque">•</span>  <span class="eo">pluvi</span>&nbsp;: pleuvoir&emsp;→&emsp;<span class="marque">•</span>  <span class="eo">ekpluvi</span>&nbsp;: commencer à pleuvoir</p>
			<p class="col s12"><span class="marque">•</span>  <span class="eo">ek !</span>&nbsp;: allez !, en avant !, allons-y !, en route !</p>
		</div>

		<p><b>EKS</b> : <i>cessation d’une fonction ou d’un état social</i></p>
		<div class="row">
			<p class="col s12"><span class="marque">•</span>  <span class="eo">prezidanto</span>&nbsp;: président&emsp;→&emsp;<span class="marque">•</span>  <span class="eo">eksprezidanto</span>&nbsp;: ex-président</p>
			<p class="col s12"><span class="marque">•</span>  <span class="eo">edziĝi</span>&nbsp;: se marier&emsp;→&emsp;<span class="marque">•</span>  <span class="eo">eksedziĝi</span>&nbsp;: divorcer (en parlant d’un homme)</p>
			<p class="col s12"><span class="marque">•</span>  <span class="eo">eksiĝi</span>&nbsp;: démissionner</p>
		</div>
		
		<p><b>FI</b> : <i>mépris</i></p>
		<div class="row">
			<p class="col s12"><span class="eo">virino</span>&nbsp;: femme&emsp;→&emsp;<span class="eo">fivirino</span>&nbsp;: femme de mauvaise vie</p>
			<p class="col s12"><span class="marque">•</span> <span class="eo">komercisto</span>&nbsp;: commerçant&emsp;→&emsp;<span class="eo">fikomercisto</span>&nbsp;: mercanti</p>
			<p class="col s12"> <span class="eo">fi!</span>&nbsp;: pouah !</p>
		</div>
		
		<p><b>GE</b> : <i>réunion des deux sexes</i></p>
		<div class="row">
			<p class="col s12"><span class="eo">patro</span>&nbsp;: père&emsp;→&emsp;<span class="marque">•</span> <span class="eo">gepatroj</span>&nbsp;: parents</p>
			<p class="col s12"><span class="marque">•</span> <span class="eo">sinjoro</span>&nbsp;: monsieur&emsp;→&emsp;<span class="marque">•</span> <span class="eo">gesinjoroj</span>&nbsp;: mesdames et messieurs</p>
			<p class="col s12"><span class="marque">•</span> <span class="eo">gea</span>&nbsp;: mixte</p>
		</div>

		<p><b>MAL</b> : <i>contraire, inverse</i></p>
		<div class="row">
			<p class="col s12"><span class="eo">amiko</span>&nbsp;: ami&emsp;→&emsp;<span class="eo">malamiko</span>&nbsp;: ennemi</p>
			<p class="col s12"><span class="marque">•</span> <span class="eo">fermi</span>&nbsp;: fermer&emsp;→&emsp;<span class="marque">•</span> <span class="eo">malfermi</span>&nbsp;: ouvrir</p>
			<p class="col s12"><span class="marque">•</span> <span class="eo">la malo</span>&nbsp;: le contraire</p>
		</div>

		<p><b>MIS</b> : <i>action ratée, exécutée «&nbsp;de travers&nbsp;»</i></p>
		<div class="row">
			<p class="col s12"><span class="marque">•</span> <span class="eo">kompreni</span>&nbsp;: comprendre&emsp;→&emsp;<span class="marque">•</span> <span class="eo">miskompreni</span>&nbsp;: comprendre de travers</p>
			<p class="col s12"><span class="marque">•</span> <span class="eo">paŝo</span>&nbsp;: pas&emsp;→&emsp;<span class="eo">mispaŝo</span>&nbsp;: faux pas</p>
		</div>

		<p><b>PRA</b> : <i>éloignement dans les degrés de parenté et dans le temps</i></p>
		<div class="row">
			<p class="col s12"><span class="marque">•</span> <span class="eo">nepo</span>&nbsp;: petit-fils&emsp;→&emsp;<span class="marque">•</span> <span class="eo">pranepo</span>&nbsp;: arrière-petit-fils</p>
			<p class="col s12"><span class="marque">•</span> <span class="eo">avo</span>&nbsp;: grand-père&emsp;→&emsp;<span class="marque">•</span> <span class="eo">praavo</span>&nbsp;: arrière-grand-père</p>
			<p class="col s12"><span class="marque">•</span> <span class="eo">arbaro</span>&nbsp;: forêt&emsp;→&emsp;<span class="eo">praarbaro</span>&nbsp;: forêt vierge</p>
		</div>

		<p><b>RE</b> : <i>répétition, retour en arrière</i></p>
		<div class="row">
			<p class="col s12"><span class="eo">fari</span>&nbsp;: faire&emsp;→&emsp; <span class="marque">•</span> <span class="eo">refari</span>&nbsp;: refaire</p>
			<p class="col s12"><span class="eo">veni</span>&nbsp;: venir&emsp;→&emsp; <span class="marque">•</span> <span class="eo">reveni</span>&nbsp;: revenir</p>
			<p class="col s12"><span class="marque">•</span> <span class="eo">ree</span>&nbsp;: de nouveau</p>
			<p class="col s12"><span class="eo">ĝis revido !</span>&nbsp;: au revoir !</p>
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
			<p class="col s12"><span class="eo">domo</span>&nbsp;: maison&emsp;→&emsp;<span class="eo">domaĉo</span>&nbsp;: masure</p>
			<p class="col s12"><span class="eo">skribi</span>&nbsp;: écrire&emsp;→&emsp;<span class="eo">skribaĉi</span>&nbsp;: griffonner</p>
			<p class="col s12"><span class="eo">aĉa</span>&nbsp;: moche, mauvais</p>
		</div>
		
		<p><b>AD</b> : <i>action qui dure ou se réitère</i></p>
		<div class="row">
			<p class="col s12"><span class="eo"><span class="marque">•</span> paroli</span>&nbsp;: parler&emsp;→&emsp;<span class="eo"><span class="marque">•</span> parolado</span>&nbsp;: discours</p>
			<p class="col s12"><span class="eo"><span class="marque">•</span> rigardi</span>&nbsp;: regarder&emsp;→&emsp;<span class="eo"><span class="marque">•</span> rigardadi</span>&nbsp;: contempler</p>
			<p class="col s12"><span class="eo"><span class="marque">•</span> kanti</span>&nbsp;: chanter&emsp;→&emsp;<span class="eo"><span class="marque">•</span> kantado</span>&nbsp;: action de chanter</p>
			<p class="col s12"><span class="eo"><span class="marque">•</span> ade</span>&nbsp;: sans arrêt</p>
		</div>

		<p><b>Aĵ</b> : <i>chose concrète caractérisée par l’idée exprimée dans le radical</i></p>
		<div class="row">
			<p class="col s12"><span class="eo"><span class="marque">•</span> sendi</span>&nbsp;: envoyer&emsp;→&emsp;<span class="eo"><span class="marque">•</span> sendaĵo</span>&nbsp;: envoi (chose envoyée)</p>
			<p class="col s12"><span class="eo"><span class="marque">•</span> bovo</span>&nbsp;: bœuf&emsp;→&emsp;<span class="eo"><span class="marque">•</span> bovaĵo</span>&nbsp;: viande de bœuf</p>
			<p class="col s12"><span class="eo"><span class="marque">•</span> reala</span>&nbsp;: réel&emsp;→&emsp;<span class="eo"><span class="marque">•</span> realaĵo</span>&nbsp;: réalité, chose réelle</p>
		</div>
		
		<p><br><b>AN</b> : <i>membre d’une collectivité, adhérent</i></p>
		<div class="row">
			<p class="col s12"><span class="eo"><span class="marque">•</span> Kanado</span>&nbsp;: Canada&emsp;→&emsp;<span class="eo"><span class="marque">•</span> kanadano</span>&nbsp;: Canadien</p>
			<p class="col s12"><span class="eo"><span class="marque">•</span> Kristo</span>&nbsp;: Christ&emsp;→&emsp;<span class="eo"><span class="marque">•</span> kristano</span>&nbsp;: chrétien</p>
			<p class="col s12"><span class="eo">rotariano</span>&nbsp;: rotarien (membre du Rotary)</p>
		</div>
		
		<p><b>AR</b> : <i>collection de, ensemble de</i></p>
		<div class="row">
			<p class="col s12"><span class="eo"><span class="marque">•</span> vorto</span>&nbsp;: mot&emsp;→&emsp;<span class="eo"><span class="marque">•</span> vortaro</span>&nbsp;: dictionnaire</p>
			<p class="col s12"><span class="eo"><span class="marque">•</span> ŝafo</span>&nbsp;: mouton&emsp;→&emsp;<span class="eo"><span class="marque">•</span> ŝafaro</span>&nbsp;: troupeau de moutons</p>
			<p class="col s12"><span class="eo">arbo</span>&nbsp;: arbre&emsp;→&emsp;<span class="eo">arbaro</span>&nbsp;: forêt</p>
			<p class="col s12"><span class="eo"><span class="marque">•</span> membraro</span>&nbsp;: les membres (d’une association)</p>
		</div>
		
		<p><b>ĈJ</b> : <i>diminutif affectueux masculin (appliqué à la première ou aux deux premières syllabes du mot)</i></p>
		<div class="row">
			<p class="col s12"><span class="eo">patro</span>&nbsp;: père&emsp;→&emsp;<span class="eo">paĉjo</span>&nbsp;: papa</p>
			<p class="col s12"><span class="eo">Petro</span>&nbsp;: Pierre&emsp;→&emsp;<span class="eo">Peĉjo</span>&nbsp;: Pierrot</p>
			<p class="col s12"><span class="eo">Jozefo</span>&nbsp;: Joseph&emsp;→&emsp;<span class="eo">Joĉjo</span>&nbsp;: Jo, Jos</p>
			<p class="col s12"><span class="eo">Tinĉjo</span>&nbsp;: Tintin</p>
		</div>
		
		<p><b>EBL</b> : <i>la possibilité passive («qui peut être…»)</i></p>
		<div class="row">
			<p class="col s12"><span class="eo">vidi</span>&nbsp;: voir&emsp;→&emsp;<span class="eo"><span class="marque">•</span> videbla</span>&nbsp;: visible</p>
			<p class="col s12"><span class="eo">kredi</span>&nbsp;: croire&emsp;→&emsp;<span class="eo"><span class="marque">•</span> nekredebla</span>&nbsp;: incroyable</p>
			<p class="col s12"><span class="eo"><span class="marque">•</span> ebla</span>&nbsp;: possible</p>
			<p class="col s12"><span class="eo"><span class="marque">•</span> eble</span>&nbsp;: peut-être</p>
		</div>

		<p><b>EC</b> : <i>l’état, la qualité abstraite correspondant à l’idée exprimée dans la racine</i></p>
		<div class="row">
			<p class="col s12"><span class="eo">viro</span>&nbsp;: homme&emsp;→&emsp;<span class="eo"><span class="marque">•</span> vireco</span>&nbsp;: virilité</p>
			<p class="col s12"><span class="eo">verda</span>&nbsp;: vert&emsp;→&emsp;<span class="eo"><span class="marque">•</span> verdeco</span>&nbsp;: verdeur</p>
			<p class="col s12"><span class="eo">infano</span>&nbsp;: enfant&emsp;→&emsp;<span class="eo"><span class="marque">•</span> infaneco</span>&nbsp;: enfance</p>
		</div>
		
		<p><b>EG</b> : <i>augmentatif</i></p>
		<div class="row">
			<p class="col s12"><span class="eo"><span class="marque">•</span> vento</span>&nbsp;: vent&emsp;→&emsp;<span class="eo"><span class="marque">•</span> ventego</span>&nbsp;: tempête</p>
			<p class="col s12"><span class="eo"><span class="marque">•</span> ridi</span>&nbsp;: rire&emsp;→&emsp;<span class="eo"><span class="marque">•</span> ridegi</span>&nbsp;: se tordre (de rire)</p>
			<p class="col s12"><span class="eo"><span class="marque">•</span> ege</span>&nbsp;: extrêmement</p>
		</div>
		
		<p><b>EJ</b> : <i>lieu caractéristique de l’action ou de l’objet concerné</i></p>
		<div class="row">
			<p class="col s12"><span class="eo">lerni</span>&nbsp;: apprendre&emsp;→&emsp;<span class="eo">lernejo</span>&nbsp;: école</p>
			<p class="col s12"><span class="eo">dormi</span>&nbsp;: dormir&emsp;→&emsp;<span class="eo"><span class="marque">•</span> dormejo</span>&nbsp;: dortoir</p>
			<p class="col s12"><span class="eo"><span class="marque">•</span> tombo</span>&nbsp;: tombe&emsp;→&emsp;<span class="eo"><span class="marque">•</span> tombejo</span>&nbsp;: cimetière</p>
			<p class="col s12"><span class="eo"><span class="marque">•</span> ejo</span>&nbsp;: local, salle</p>
		</div>
		
		<p><b>EM</b> : <i>le penchant, la tendance</i></p>
		<div class="row">
			<p class="col s12"><span class="eo"><span class="marque">•</span> ŝpari</span>&nbsp;: économiser&emsp;→&emsp;<span class="eo"><span class="marque">•</span> ŝparema</span>&nbsp;: économe</p>
			<p class="col s12"><span class="eo"><span class="marque">•</span> babili</span>&nbsp;: bavarder&emsp;→&emsp;<span class="eo"><span class="marque">•</span> babilema</span>&nbsp;: bavard</p>
			<p class="col s12"><span class="eo"><span class="marque">•</span> emi</span>&nbsp;: avoir tendance à</p>
		</div>
		
		<p><b>END</b> : <i>obligation passive («qui doit être…»)</i></p>
		<div class="row">
			<p class="col s12"><span class="eo"><span class="marque">•</span> legi</span>&nbsp;: lire&emsp;→&emsp;<span class="eo"><span class="marque">•</span> legenda</span>&nbsp;: qu’il faut lire (à lire)</p>
			<p class="col s12"><span class="eo">fari</span>&nbsp;: faire&emsp;→&emsp;<span class="eo"><span class="marque">•</span> farenda</span>&nbsp;: qu’il faut faire (à faire)</p>
		</div>
		
		<p><b>ER</b> : <i>unité constitutive de la collection</i></p>
		<div class="row">
			<p class="col s12"><span class="eo"><span class="marque">•</span> salo</span>&nbsp;: sel&emsp;→&emsp;<span class="eo"><span class="marque">•</span> salero</span>&nbsp;: grain de sel</p>
			<p class="col s12"><span class="eo"><span class="marque">•</span> mono</span>&nbsp;: argent&emsp;→&emsp;<span class="eo"><span class="marque">•</span> monero</span>&nbsp;: pièce de monnaie</p>
			<p class="col s12"><span class="eo">ero</span>&nbsp;: détail, morceau, élément, item</p>
		</div>
		
		<p><b>ESTR</b> : <i>celui qui commande effectivement au lieu indiqué par la racine</i></p>
		<div class="row">
			<p class="col s12"><span class="eo">urbo</span>&nbsp;: ville&emsp;→&emsp;<span class="eo"><span class="marque">•</span> urbestro</span>&nbsp;: maire, bourgmestre</p>
			<p class="col s12"><span class="eo"><span class="marque">•</span> estri</span>&nbsp;: diriger&emsp;→&emsp;<span class="eo"><span class="marque">•</span> estro</span>&nbsp;: chef</p>
		</div>
		
		<p><b>ET</b> : <i>diminutif</i></p>
		<div class="row">
			<p class="col s12"><span class="eo">bela</span>&nbsp;: beau&emsp;→&emsp;<span class="eo"><span class="marque">•</span> beleta</span>&nbsp;: joli</p>
			<p class="col s12"><span class="eo">varma</span>&nbsp;: chaud&emsp;→&emsp;<span class="eo"><span class="marque">•</span> varmeta</span>&nbsp;: tiède</p>
			<p class="col s12"><span class="eo">eta</span>&nbsp;: petit&emsp;→&emsp;<span class="eo"><span class="marque">•</span> iomete</span>&nbsp;: un petit peu</p>
		</div>
		
		<p><b>ID</b> : <i>descendant, rejeton</i></p>
		<div class="row">
			<p class="col s12"><span class="eo">kato</span>&nbsp;: chat&emsp;→&emsp;<span class="eo"><span class="marque">•</span> katido</span>&nbsp;: chaton</p>
			<p class="col s12"><span class="eo"><span class="marque">•</span> reĝo</span>&nbsp;: roi&emsp;→&emsp;<span class="eo"><span class="marque">•</span> reĝido</span>&nbsp;: prince</p>
			<p class="col s12"><span class="eo">ido</span>&nbsp;: descendant, petit (d’un animal)</p>
		</div>
		
		<p><b>IG</b> : <i>faire (devant un infinitif), rendre tel ou tel</i></p>
		<div class="row">
			<p class="col s12"><span class="eo">pura</span>&nbsp;: propre&emsp;→&emsp;<span class="eo"><span class="marque">•</span> purigi</span>&nbsp;: nettoyer (rendre propre)</p>
			<p class="col s12"><span class="eo"><span class="marque">•</span> morti</span>&nbsp;: mourir&emsp;→&emsp;<span class="eo"><span class="marque">•</span> mortigi</span>&nbsp;: tuer (faire mourir)</p>
			<p class="col s12"><span class="eo"><span class="marque">•</span> scii</span>&nbsp;: savoir&emsp;→&emsp;<span class="eo"><span class="marque">•</span> sciigi</span>&nbsp;: faire savoir, informer</p>
			<p class="col s12"><span class="eo">igi</span>&nbsp;: rendre (tel), faire (faire)</p>
		</div>
		
		<p><b>IĜ</b> : <i>devenir tel ou tel</i></p>
		<div class="row">
			<p class="col s12"><span class="eo"><span class="marque">•</span> sidi</span>&nbsp;: être assis&emsp;→&emsp;<span class="eo"><span class="marque">•</span> sidiĝi</span>&nbsp;: s’asseoir</p>
			<p class="col s12"><span class="eo">ruĝa</span>&nbsp;: rouge&emsp;→&emsp;<span class="eo"><span class="marque">•</span> ruĝiĝi</span>&nbsp;: rougir</p>
			<p class="col s12"><span class="eo"><span class="marque">•</span> iĝi</span>&nbsp;: devenir</p>
		</div>
		
		<p><b>IL</b> : <i>outil, instrument</i></p>
		<div class="row">
			<p class="col s12"><span class="eo"><span class="marque">•</span> ŝlosi</span>&nbsp;: fermer à clef&emsp;→&emsp;<span class="eo"><span class="marque">•</span> ŝlosilo</span>&nbsp;: clef</p>
			<p class="col s12"><span class="eo"><span class="marque">•</span> razi</span>&nbsp;: raser&emsp;→&emsp;<span class="eo"><span class="marque">•</span> razilo</span>&nbsp;: rasoir</p>
			<p class="col s12"><span class="eo"><span class="marque">•</span> sidi</span>&nbsp;: être assis&emsp;→&emsp;<span class="eo"><span class="marque">•</span> sidilo</span>&nbsp;: siège</p>
			<p class="col s12"><span class="eo"><span class="marque">•</span> ilo</span>&nbsp;: instrument</p>
		</div>
		
		<p><b>IN</b> : <i>sexe féminin</i></p>
		<div class="row">
			<p class="col s12"><span class="eo"><span class="marque">•</span> onklo</span>&nbsp;: oncle&emsp;→&emsp;<span class="eo"><span class="marque">•</span> onklino</span>&nbsp;: tante</p>
			<p class="col s12"><span class="eo"><span class="marque">•</span> koko</span>&nbsp;: coq&emsp;→&emsp;<span class="eo"><span class="marque">•</span> kokino</span>&nbsp;: poule</p>
			<p class="col s12"><span class="eo"><span class="marque">•</span> ina</span>&nbsp;: féminin</p>
		</div>
		
		<p><b>IND</b> : <i>qui mérite d’être..., digne de...</i></p>
		<div class="row">
			<p class="col s12"><span class="eo"><span class="marque">•</span> admiri</span>&nbsp;: admirer&emsp;→&emsp;<span class="eo"><span class="marque">•</span> admirinda</span>&nbsp;: admirable</p>
			<p class="col s12"><span class="eo">laŭdi</span>&nbsp;: louer&emsp;→&emsp;<span class="eo">laŭdinda</span>&nbsp;: louable</p>
		</div>
		
		<p><b>ING</b> : <i>ce dans quoi on insère ou introduit quelque chose</i></p>
		<div class="row">
			<p class="col s12"><span class="eo">plumo</span>&nbsp;: plume&emsp;→&emsp;<span class="eo">plumingo</span>&nbsp;: porte-plume</p>
			<p class="col s12"><span class="eo"><span class="marque">•</span> cigaredo</span>&nbsp;: cigarette&emsp;→&emsp;<span class="eo">cigaredingo</span>&nbsp;: fume-cigarette</p>
			<p class="col s12"><span class="eo"><span class="marque">•</span> glavo</span>&nbsp;: épée&emsp;→&emsp;<span class="eo">glavingo</span>&nbsp;: fourreau</p>
		</div>
		
		<p><b>IST</b> : <i>profession, activité habituelle</i></p>
		<div class="row">
			<p class="col s12"><span class="eo"><span class="marque">•</span> instrui</span>&nbsp;: enseigner&emsp;→&emsp;<span class="eo">instruisto</span>&nbsp;: enseignant</p>
			<p class="col s12"><span class="eo">piano</span>&nbsp;: piano&emsp;→&emsp;<span class="eo"><span class="marque">•</span> pianisto</span>&nbsp;: pianiste</p>
			<p class="col s12"><span class="eo">esperantisto</span>&nbsp;: espérantiste</p>
		</div>
		
		<p><b>NJ</b> : <i>diminutif affectueux féminin (appliqué à la première ou aux deux premières syllabes du mot)</i></p>
		<div class="row">
			<p class="col s12"><span class="eo">patrino</span>&nbsp;: mère&emsp;→&emsp;<span class="eo"><span class="marque">•</span> panjo</span>&nbsp;: maman</p>
			<p class="col s12"><span class="eo">Maria</span>&nbsp;: Marie&emsp;→&emsp;<span class="eo">Manjo</span>&nbsp;: Mariette</p>
		</div>
		
		<p><b>OBL</b> : <i>forme les multiplicatifs</i></p>
		<div class="row">
			<p class="col s12"><span class="eo">du</span>&nbsp;: deux&emsp;→&emsp;<span class="eo"><span class="marque">•</span> duobla</span>&nbsp;: double</p>
			<p class="col s12"><span class="eo"><span class="marque">•</span> multobligi</span>&nbsp;: multiplier, reproduire en plusieurs exemplaires</p>
		</div>
		
		<p><b>ON</b> : <i>forme les nombres fractionnaires</i></p>
		<div class="row">
			<p class="col s12"><span class="eo">kvar</span>&nbsp;: quatre&emsp;→&emsp;<span class="eo"><span class="marque">•</span> kvarono</span>&nbsp;: un quart</p>
			<p class="col s12"><span class="eo"><span class="marque">•</span> duonhoro</span>&nbsp;: demi-heure</p>
		</div>	
		<p><b>OP</b> : <i>forme les collectifs</i></p>
		<div class="row">
			<p class="col s12"><span class="eo">tri</span>&nbsp;: trois&emsp;→&emsp;<span class="eo"><span class="marque">•</span> triope</span>&nbsp;: à trois</p>
			<p class="col s12"><span class="eo"><span class="marque">•</span> unuopa</span>&nbsp;: individuel</p>
			<p class="col s12"><span class="eo"><span class="marque">•</span> ope</span>&nbsp;: en groupe, à plusieurs</p>
		</div>
		
		<p><b>UJ</b> : <i>contenant, récipient pour contenir…</i></p>
		<div class="row">
			<p class="col s12"><span class="eo">salo</span>&nbsp;: sel&emsp;→&emsp;<span class="eo">salujo</span>&nbsp;: salière</p>
			<p class="col s12"><span class="eo"><span class="marque">•</span> supo</span>&nbsp;: soupe&emsp;→&emsp;<span class="eo">supujo</span>&nbsp;: soupière</p>
			<p class="col s12"><span class="eo">mono</span>&nbsp;: argent&emsp;→&emsp;<span class="eo"><span class="marque">•</span> monujo</span>&nbsp;: portemonnaie</p>
			<p class="col s12"><span class="eo"><span class="marque">•</span> ujo</span>&nbsp;: récipient</p>
		</div>
		
		<p><b>UL</b> : <i>individu caractérisé par…</i></p>
		<div class="row">
			<p class="col s12"><span class="eo"><span class="marque">•</span> sankta</span>&nbsp;: saint&emsp;→&emsp;<span class="eo"><span class="marque">•</span> sanktulo</span>&nbsp;: un saint</p>
			<p class="col s12"><span class="eo">kontraŭ</span>&nbsp;: contre&emsp;→&emsp;<span class="eo">kontraŭulo</span>&nbsp;: un adversaire, un opposant</p>
			<p class="col s12"><span class="eo"><span class="marque">•</span> stulta</span>&nbsp;: stupide&emsp;→&emsp;<span class="eo"><span class="marque">•</span> stultulo</span>&nbsp;: un sot</p>
			<p class="col s12"><span class="eo"><span class="marque">•</span> kunulino</span>&nbsp;: compagne</p>
			<p class="col s12"><span class="eo">aĉulo</span>&nbsp;: salopard</p>
		</div>
		
		<p><b>UM</b> : <i>indéterminé</i></p>
		<div class="row">
			<p class="col s12"><span class="eo"><span class="marque">•</span> kolo</span>&nbsp;: cou&emsp;→&emsp;<span class="eo"><span class="marque">•</span> kolumo</span>&nbsp;: col (de chemise)</p>
			<p class="col s12"><span class="eo"><span class="marque">•</span> plena</span>&nbsp;: plein&emsp;→&emsp;<span class="eo"><span class="marque">•</span> plenumi</span>&nbsp;: accomplir</p>
			<p class="col s12"><span class="eo"><span class="marque">•</span> umilo</span>&nbsp;: gadget</p>
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
		
		<p><a href="<?php echo $vojo;?>fr/son/frazoj/se-junulo-ne-lernis.mp3" class="sm2_button"></a>
		Se junulo ne lernis, maljunulo ne scias.
		</p>
		<p><a href="<?php echo $vojo;?>fr/son/frazoj/juneco-ne-scias.mp3" class="sm2_button"></a>
		Juneco ne scias, maljuneco ne povas.
		</p>
		<p><a href="<?php echo $vojo;?>fr/son/frazoj/estro-ne-malsatas.mp3" class="sm2_button"></a>
		Estro ne malsatas.
		</p>
		
		<div class="vortlisto row">
			<p class="col s6"><span class="eo">se</span>&nbsp;: si (condition)</p>
			<p class="col s6"><span class="eo">sata</span>&nbsp;: rassasié, repu</p>
			<p class="col s6"><span class="eo">malsati</span>&nbsp;: avoir faim, souffrir de la faim</p>
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
			<p class="col s12"><a href="<?php echo $vojo;?>fr/son/frazoj/kioma-horo-estas.mp3" class="sm2_button"></a>
				<span class="eo"><b>Kioma horo estas?</b></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Quelle heure est-il ?</p>
			<div class="col s12 row">
				<p class="col s4 m3"><img src="<?php echo $vojo;?>fr/cge/bildoj/2h.png" class="responsive-img" alt="estas la dua"></p>
				<p class="col s8 m9"><br><a href="<?php echo $vojo;?>fr/son/frazoj/estas-la-dua.mp3" class="sm2_button"></a><span class="eo">– Estas la dua.</span><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;– Il est deux heures.</p>
			</div>
			<div class="col s12 row">
				<p class="col s4 m3"><img src="<?php echo $vojo;?>fr/cge/bildoj/2h10.png" class="responsive-img" alt="estas la dua"></p>
				<p class="col s8 m9"><br><a href="<?php echo $vojo;?>fr/son/frazoj/estas-la-dua-kaj-dek.mp3" class="sm2_button"></a><span class="eo">– Estas la dua kaj dek.</span><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;– Il est deux heures dix.</p>
			</div>
			<div class="col s12 row">
				<p class="col s4 m3"><img src="<?php echo $vojo;?>fr/cge/bildoj/1h50.png" class="responsive-img" alt="estas la dua"></p>
				<p class="col s8 m9"><br><a href="<?php echo $vojo;?>fr/son/frazoj/estas-dek-antau-la-dua.mp3" class="sm2_button"></a><span class="eo">– Estas dek antaŭ la dua.</span><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;– Il est deux heures moins dix.</p>
			</div>
		</div>
		
		<p class="rimarko"><strong>REMARQUE</strong> : 
		  <span class="eo">La dua kaj dek</span> et <span class="eo">dek antaŭ la dua</span> sont des formes
		  raccourcies de
		  <span class="eo">la dua horo kaj dek minutoj</span> et 
		  <span class="eo">dek minutoj antaŭ la dua horo</span>.
		</p>
		
		<div class="vortlisto row">
			<p class="col s12 m6">
				<a href="<?php echo $vojo;?>fr/son/frazoj/je-kioma-horo-sxi-venis.mp3" class="sm2_button"></a>
				<span class="eo"><b>Je kioma horo</b> ŝi venis?</span></p><p class="col s12 m6">&nbsp;&nbsp;&nbsp;À quelle heure est-elle venue&nbsp;? </p>
			<p class="col s12 m6">
				<a href="<?php echo $vojo;?>fr/son/frazoj/sxi-venis-je-la-dua.mp3" class="sm2_button"></a>
				<span class="eo">– Ŝi venis je la dua.</span></p><p class="col s12 m6">&nbsp;&nbsp;&nbsp;– Elle est venue à deux heures.</p>
			<p class="col s12 m6">
				<a href="<?php echo $vojo;?>fr/son/frazoj/sxi-venis-je-la-dua-kaj-dek.mp3" class="sm2_button"></a>
				<span class="eo">– Ŝi venis je la dua kaj dek.</span></p><p class="col s12 m6">etc.</p>
			<p class="col s12">
				<a href="<?php echo $vojo;?>fr/son/frazoj/sxi-venis-je-dek-antau-la-dua.mp3" class="sm2_button"></a>
				<span class="eo">– Ŝi venis je dek antaŭ la dua.</span></p>
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
			<p class="col s12 m6"><a href="<?php echo $vojo;?>fr/son/vortoj/nun.mp3" class="sm2_button"></a><span class="eo">nun</span>&nbsp;: maintenant</p>
			<p class="col s12 m6"><a href="<?php echo $vojo;?>fr/son/vortoj/nokte.mp3" class="sm2_button"></a><span class="eo">nokte</span>&nbsp;: de la nuit</p>
			<p class="col s12 m6"><a href="<?php echo $vojo;?>fr/son/vortoj/matene.mp3" class="sm2_button"></a><span class="eo">matene</span>&nbsp;: du matin</p>
			<p class="col s12 m6"><a href="<?php echo $vojo;?>fr/son/vortoj/vespere.mp3" class="sm2_button"></a><span class="eo">vespere</span>&nbsp;: du soir</p>
			<p class="col s12"><a href="<?php echo $vojo;?>fr/son/vortoj/antautagmeze.mp3" class="sm2_button"></a><span class="eo">antaŭtagmeze</span>&nbsp;: du matin (mot-à-mot&nbsp;: <i>de l’avant-midi</i>)</p>
			<p class="col s12"><a href="<?php echo $vojo;?>fr/son/vortoj/posttagmeze.mp3" class="sm2_button"></a><span class="eo">posttagmeze</span>&nbsp;: de l’après-midi</p>
		</div>
		
		<p>Exemples :</p>
		<div class="row">
			<p class="col s12"><a href="<?php echo $vojo;?>fr/son/frazoj/sxi-dancis-gxis.mp3" class="sm2_button"></a><span class="eo">Ŝi dancis ĝis la dua nokte</span> (aŭ : <span class="eo">matene</span>).</p>
			<p class="col s11 offset-s1">= Elle a dansé jusqu’à deux heures du matin.</p>
			<p class="col s12"><a href="<?php echo $vojo;?>fr/son/frazoj/mi-ofte-mangxas.mp3" class="sm2_button"></a><span class="eo">Mi ofte tagmanĝas je la unua posttagmeze.</span></p>
			<p class="col s11 offset-s1">= Je déjeune souvent à une heure de l’après-midi.</p>
			<p class="col s12"><a href="<?php echo $vojo;?>fr/son/frazoj/mi-iras-labori.mp3" class="sm2_button"></a><span class="eo">Mi iras labori je la sepa matene kaj revenas je la oka vespere.</span></p>
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
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/filo-2.mp3" class="sm2_button"></a><span class="eo">filo</span>&nbsp;: fils<br>
						   <a href="<?php echo $vojo;?>fr/son/vortoj/bofilo.mp3" class="sm2_button"></a><span class="eo">bofilo</span>&nbsp;: beau-fils, gendre</p>
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/fratino.mp3" class="sm2_button"></a><span class="eo">fratino</span>&nbsp;: sœur<br>
						   <a href="<?php echo $vojo;?>fr/son/vortoj/bofratino.mp3" class="sm2_button"></a><span class="eo">bofratino</span>&nbsp;: belle-sœur</p>
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/doni.mp3" class="sm2_button"></a><span class="eo">doni</span>&nbsp;: donner<br>
						   <a href="<?php echo $vojo;?>fr/son/vortoj/disdoni.mp3" class="sm2_button"></a><span class="eo">disdoni</span>&nbsp;: distribuer</p>
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/semi.mp3" class="sm2_button"></a><span class="eo">semi</span>&nbsp;: semer<br>
						   <a href="<?php echo $vojo;?>fr/son/vortoj/dissemi.mp3" class="sm2_button"></a><span class="eo">dissemi</span>&nbsp;: disséminer</p>
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/dormi.mp3" class="sm2_button"></a><span class="eo">dormi</span>&nbsp;: dormir<br>
						   <a href="<?php echo $vojo;?>fr/son/vortoj/ekdormi.mp3" class="sm2_button"></a><span class="eo">ekdormi</span>&nbsp;: s’endormir</p>
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/pluvi.mp3" class="sm2_button"></a><span class="eo">pluvi</span>&nbsp;: pleuvoir<br>
						   <a href="<?php echo $vojo;?>fr/son/vortoj/ekpluvi.mp3" class="sm2_button"></a><span class="eo">ekpluvi</span>&nbsp;: commencer à pleuvoir</p>
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/ek.mp3" class="sm2_button"></a><span class="eo">ek!</span>&nbsp;: allez&nbsp;!, en avant&nbsp;!, allons-y&nbsp;!, en route&nbsp;!</p>
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/prezidanto.mp3" class="sm2_button"></a><span class="eo">prezidanto</span>&nbsp;: président<br>
						   <a href="<?php echo $vojo;?>fr/son/vortoj/eksprezidanto.mp3" class="sm2_button"></a><span class="eo">eksprezidanto</span>&nbsp;: ex-président</p>
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/edzigxi.mp3" class="sm2_button"></a><span class="eo">edziĝi</span>&nbsp;: se marier<br>
						   <a href="<?php echo $vojo;?>fr/son/vortoj/eksedzigxi.mp3" class="sm2_button"></a><span class="eo">eksedziĝi</span>&nbsp;: divorcer</p>
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/eksigxi.mp3" class="sm2_button"></a><span class="eo">eksiĝi</span>&nbsp;: démissionner</p>
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/komercisto.mp3" class="sm2_button"></a><span class="eo">komercisto</span>&nbsp;: commerçant</p>
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/gepatroj.mp3" class="sm2_button"></a><span class="eo">gepatroj</span>&nbsp;: parents</p>
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/sinjoro.mp3" class="sm2_button"></a><span class="eo">sinjoro</span>&nbsp;: monsieur<br>
						   <a href="<?php echo $vojo;?>fr/son/vortoj/gesinjoroj.mp3" class="sm2_button"></a><span class="eo">gesinjoroj</span>&nbsp;: mesdames et messieurs</p>
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/gea.mp3" class="sm2_button"></a><span class="eo">gea</span>&nbsp;: mixte</p>
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/fermi.mp3" class="sm2_button"></a><span class="eo">fermi</span>&nbsp;: fermer<br>
						   <a href="<?php echo $vojo;?>fr/son/vortoj/malfermi.mp3" class="sm2_button"></a><span class="eo">malfermi</span>&nbsp;: ouvrir</p>
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/la-malo.mp3" class="sm2_button"></a><span class="eo">la malo</span>&nbsp;: le contraire</p>
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/paroli.mp3" class="sm2_button"></a><span class="eo">paroli</span>&nbsp;: parler<br>
						   <a href="<?php echo $vojo;?>fr/son/vortoj/parolado.mp3" class="sm2_button"></a><span class="eo">parolado</span>&nbsp;: discours</p>
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/rigardi.mp3" class="sm2_button"></a><span class="eo">rigardi</span>&nbsp;: regarder<br>
						   <a href="<?php echo $vojo;?>fr/son/vortoj/rigardadi.mp3" class="sm2_button"></a><span class="eo">rigardadi</span>&nbsp;: contempler</p>
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/kanti.mp3" class="sm2_button"></a><span class="eo">kanti</span>&nbsp;: chanter<br>
						   <a href="<?php echo $vojo;?>fr/son/vortoj/kantado.mp3" class="sm2_button"></a><span class="eo">kantado</span>&nbsp;: action de chanter</p>
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/ade.mp3" class="sm2_button"></a><span class="eo">ade</span>&nbsp;: sans arrêt</p>
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/sendi.mp3" class="sm2_button"></a><span class="eo">sendi</span>&nbsp;: envoyer<br>
						   <a href="<?php echo $vojo;?>fr/son/vortoj/sendajxo.mp3" class="sm2_button"></a><span class="eo">sendaĵo</span>&nbsp;: envoi (chose envoyée)</p>
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/bovo.mp3" class="sm2_button"></a><span class="eo">bovo</span>&nbsp;: bœuf<br>
						   <a href="<?php echo $vojo;?>fr/son/vortoj/bovajxo.mp3" class="sm2_button"></a><span class="eo">bovaĵo</span>&nbsp;: viande de bœuf</p>
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/reala.mp3" class="sm2_button"></a><span class="eo">reala</span>&nbsp;: réel<br>
						   <a href="<?php echo $vojo;?>fr/son/vortoj/realajxo.mp3" class="sm2_button"></a><span class="eo">realaĵo</span>&nbsp;: réalité, chose réelle</p>
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/kanado-2.mp3" class="sm2_button"></a><span class="eo">Kanado</span>&nbsp;: Canada<br>
						   <a href="<?php echo $vojo;?>fr/son/vortoj/kanadano.mp3" class="sm2_button"></a><span class="eo">kanadano</span>&nbsp;: Canadien</p>
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/kristo.mp3" class="sm2_button"></a><span class="eo">Kristo</span>&nbsp;: Christ<br>
						   <a href="<?php echo $vojo;?>fr/son/vortoj/kristano.mp3" class="sm2_button"></a><span class="eo">kristano</span>&nbsp;: chrétien</p>
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/vorto.mp3" class="sm2_button"></a><span class="eo">vorto</span>&nbsp;: mot<br>
						   <a href="<?php echo $vojo;?>fr/son/vortoj/vortaro.mp3" class="sm2_button"></a><span class="eo">vortaro</span>&nbsp;: dictionnaire</p>
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/sxafo.mp3" class="sm2_button"></a><span class="eo">ŝafo</span>&nbsp;: mouton<br>
						   <a href="<?php echo $vojo;?>fr/son/vortoj/sxafaro.mp3" class="sm2_button"></a><span class="eo">ŝafaro</span>&nbsp;: troupeau de moutons</p>
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/membraro.mp3" class="sm2_button"></a><span class="eo">membraro</span>&nbsp;: les membres (d’une association)</p>
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/ebla.mp3" class="sm2_button"></a><span class="eo">ebla</span>&nbsp;: possible<br>
						   <a href="<?php echo $vojo;?>fr/son/vortoj/eble.mp3" class="sm2_button"></a><span class="eo">eble</span>&nbsp;: peut-être</p>
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/vireco.mp3" class="sm2_button"></a><span class="eo">vireco</span>&nbsp;: virilité</p>
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/verdeco.mp3" class="sm2_button"></a><span class="eo">verdeco</span>&nbsp;: verdeur</p>
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/infaneco.mp3" class="sm2_button"></a><span class="eo">infaneco</span>&nbsp;: enfance</p>
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/vento.mp3" class="sm2_button"></a><span class="eo">vento</span>&nbsp;: vent<br>
						   <a href="<?php echo $vojo;?>fr/son/vortoj/ventego.mp3" class="sm2_button"></a><span class="eo">ventego</span>&nbsp;: tempête</p>
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/ridi.mp3" class="sm2_button"></a><span class="eo">ridi</span>&nbsp;: rire<br>
						   <a href="<?php echo $vojo;?>fr/son/vortoj/ridegi.mp3" class="sm2_button"></a><span class="eo">ridegi</span>&nbsp;: se tordre (de rire)</p>
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/ege.mp3" class="sm2_button"></a><span class="eo">ege</span>&nbsp;: extrêmement</p>
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/tombo.mp3" class="sm2_button"></a><span class="eo">tombo</span>&nbsp;: tombe<br>
						   <a href="<?php echo $vojo;?>fr/son/vortoj/tombejo.mp3" class="sm2_button"></a><span class="eo">tombejo</span>&nbsp;: cimetière</p>
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/ejo.mp3" class="sm2_button"></a><span class="eo">ejo</span>&nbsp;: local, salle</p>
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/sxpari.mp3" class="sm2_button"></a><span class="eo">ŝpari</span>&nbsp;: économiser<br>
						   <a href="<?php echo $vojo;?>fr/son/vortoj/sxparema.mp3" class="sm2_button"></a><span class="eo">ŝparema</span>&nbsp;: économe</p>
					</div>
					<div class="col s12 m6">
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/babili.mp3" class="sm2_button"></a><span class="eo">babili</span>&nbsp;: bavarder<br>
						   <a href="<?php echo $vojo;?>fr/son/vortoj/babilema.mp3" class="sm2_button"></a><span class="eo">babilema</span>&nbsp;: bavard</p>
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/emi.mp3" class="sm2_button"></a><span class="eo">emi</span>&nbsp;: avoir tendance à</p>
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/legi.mp3" class="sm2_button"></a><span class="eo">legi</span>&nbsp;: lire<br>
						   <a href="<?php echo $vojo;?>fr/son/vortoj/legenda.mp3" class="sm2_button"></a><span class="eo">legenda</span>&nbsp;: qu’il faut lire (à lire)</p>
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/salo.mp3" class="sm2_button"></a><span class="eo">salo</span>&nbsp;: sel<br>
						   <a href="<?php echo $vojo;?>fr/son/vortoj/salero.mp3" class="sm2_button"></a><span class="eo">salero</span>&nbsp;: grain de sel</p>
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/mono.mp3" class="sm2_button"></a><span class="eo">mono</span>&nbsp;: argent<br>
						   <a href="<?php echo $vojo;?>fr/son/vortoj/monero.mp3" class="sm2_button"></a><span class="eo">monero</span>&nbsp;: pièce de monnaie</p>
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/estri.mp3" class="sm2_button"></a><span class="eo">estri</span>&nbsp;: diriger<br>
						   <a href="<?php echo $vojo;?>fr/son/vortoj/estro.mp3" class="sm2_button"></a><span class="eo">estro</span>&nbsp;: chef<br>
						   <a href="<?php echo $vojo;?>fr/son/vortoj/urbestro.mp3" class="sm2_button"></a><span class="eo">urbestro</span>&nbsp;: maire, bourgmestre</p>
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/beleta.mp3" class="sm2_button"></a><span class="eo">beleta</span>&nbsp;: joli</p>
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/varmeta.mp3" class="sm2_button"></a><span class="eo">varmeta</span>&nbsp;: tiède</p>
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/iomete.mp3" class="sm2_button"></a><span class="eo">iomete</span>&nbsp;: un petit peu</p>
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/katido.mp3" class="sm2_button"></a><span class="eo">katido</span>&nbsp;: chaton</p>
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/regxo.mp3" class="sm2_button"></a><span class="eo">reĝo</span>&nbsp;: roi<br>
						   <a href="<?php echo $vojo;?>fr/son/vortoj/regxido.mp3" class="sm2_button"></a><span class="eo">reĝido</span>&nbsp;: prince</p>
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/purigi.mp3" class="sm2_button"></a><span class="eo">purigi</span>&nbsp;: nettoyer (rendre propre)</p>
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/morti.mp3" class="sm2_button"></a><span class="eo">morti</span>&nbsp;: mourir<br>
						   <a href="<?php echo $vojo;?>fr/son/vortoj/mortigi.mp3" class="sm2_button"></a><span class="eo">mortigi</span>&nbsp;: tuer (faire mourir)</p>
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/scii.mp3" class="sm2_button"></a><span class="eo">scii</span>&nbsp;: savoir<br>
						   <a href="<?php echo $vojo;?>fr/son/vortoj/sciigi.mp3" class="sm2_button"></a><span class="eo">sciigi</span>&nbsp;: faire savoir, informer</p>
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/sidi.mp3" class="sm2_button"></a><span class="eo">sidi</span>&nbsp;: être assis<br>
						   <a href="<?php echo $vojo;?>fr/son/vortoj/sidigxi.mp3" class="sm2_button"></a><span class="eo">sidiĝi</span>&nbsp;: s’asseoir<br>
						   <a href="<?php echo $vojo;?>fr/son/vortoj/sidilo.mp3" class="sm2_button"></a><span class="eo">sidilo</span>&nbsp;: siège</p>
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/rugxigxi.mp3" class="sm2_button"></a><span class="eo">ruĝiĝi</span>&nbsp;: rougir</p>
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/igxi.mp3" class="sm2_button"></a><span class="eo">iĝi</span>&nbsp;: devenir</p>
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/sxlosi.mp3" class="sm2_button"></a><span class="eo">ŝlosi</span>&nbsp;: fermer à clef<br>
						   <a href="<?php echo $vojo;?>fr/son/vortoj/sxlosilo.mp3" class="sm2_button"></a><span class="eo">ŝlosilo</span>&nbsp;: clef</p>
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/razi.mp3" class="sm2_button"></a><span class="eo">razi</span>&nbsp;: raser<br>
						   <a href="<?php echo $vojo;?>fr/son/vortoj/razilo.mp3" class="sm2_button"></a><span class="eo">razilo</span>&nbsp;: rasoir</p>
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/ilo.mp3" class="sm2_button"></a><span class="eo">ilo</span>&nbsp;: instrument</p>
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/onklo.mp3" class="sm2_button"></a><span class="eo">onklo</span>&nbsp;: oncle<br>
						   <a href="<?php echo $vojo;?>fr/son/vortoj/onklino.mp3" class="sm2_button"></a><span class="eo">onklino</span>&nbsp;: tante</p>
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/koko.mp3" class="sm2_button"></a><span class="eo">koko</span>&nbsp;: coq<br>
						   <a href="<?php echo $vojo;?>fr/son/vortoj/kokino.mp3" class="sm2_button"></a><span class="eo">kokino</span>&nbsp;: poule</p>
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/ina.mp3" class="sm2_button"></a><span class="eo">ina</span>&nbsp;: féminin</p>
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/admiri.mp3" class="sm2_button"></a><span class="eo">admiri</span>&nbsp;: admirer<br>
						   <a href="<?php echo $vojo;?>fr/son/vortoj/admirinda.mp3" class="sm2_button"></a><span class="eo">admirinda</span>&nbsp;: admirable</p>
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/cigaredo.mp3" class="sm2_button"></a><span class="eo">cigaredo</span>&nbsp;: cigarette</p>
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/glavo.mp3" class="sm2_button"></a><span class="eo">glavo</span>&nbsp;: épée</p>
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/instrui.mp3" class="sm2_button"></a><span class="eo">instrui</span>&nbsp;: enseigner<br>
							<a href="<?php echo $vojo;?>fr/son/vortoj/instruisto.mp3" class="sm2_button"></a><span class="eo">instruisto</span>&nbsp;: enseignant</p>
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/panjo.mp3" class="sm2_button"></a><span class="eo">panjo</span>&nbsp;: maman</p>
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/duobla.mp3" class="sm2_button"></a><span class="eo">duobla</span>&nbsp;: double</p>
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/multobligi.mp3" class="sm2_button"></a><span class="eo">multobligi</span>&nbsp;: multiplier, reproduire en plusieurs exemplaires</p>
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/duonhoro.mp3" class="sm2_button"></a><span class="eo">duonhoro</span>&nbsp;: demi-heure</p>
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/unuopa.mp3" class="sm2_button"></a><span class="eo">unuopa</span>&nbsp;: individuel</p>
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/ope.mp3" class="sm2_button"></a><span class="eo">ope</span>&nbsp;: en groupe, à plusieurs</p>
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/supo.mp3" class="sm2_button"></a><span class="eo">supo</span>&nbsp;: soupe</p>
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/ujo.mp3" class="sm2_button"></a><span class="eo">ujo</span>&nbsp;: récipient</p>
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/sankta.mp3" class="sm2_button"></a><span class="eo">sankta</span>&nbsp;: saint<br>
						   <a href="<?php echo $vojo;?>fr/son/vortoj/sanktulo.mp3" class="sm2_button"></a><span class="eo">sanktulo</span>&nbsp;: un saint</p>
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/stulta.mp3" class="sm2_button"></a><span class="eo">stulta</span>&nbsp;: stupide<br>
						   <a href="<?php echo $vojo;?>fr/son/vortoj/stultulo.mp3" class="sm2_button"></a><span class="eo">stultulo</span>&nbsp;: un sot</p>
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/kunulino.mp3" class="sm2_button"></a><span class="eo">kunulino</span>&nbsp;: compagne</p>
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/kolo.mp3" class="sm2_button"></a><span class="eo">kolo</span>&nbsp;: cou<br>
						   <a href="<?php echo $vojo;?>fr/son/vortoj/kolumo.mp3" class="sm2_button"></a><span class="eo">kolumo</span>&nbsp;: col (de chemise)</p>
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/plena.mp3" class="sm2_button"></a><span class="eo">plena</span>&nbsp;: plein<br>
						   <a href="<?php echo $vojo;?>fr/son/vortoj/plenumi.mp3" class="sm2_button"></a><span class="eo">plenumi</span>&nbsp;: accomplir</p>
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/umilo.mp3" class="sm2_button"></a><span class="eo">umilo</span>&nbsp;: gadget</p>
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
