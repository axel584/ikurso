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

		<p><b>BO</b> : <i>parenté par alliance</i></p>
		<div class="row">
			<p class="col s6 m3 eo">filo</p><p class="col s6 m3">fils</p>
			<p class="col s6 m3 eo">bofilo</p><p class="col s6 m3">beau-fils, gendre</p>
			<p class="col s6 m3 eo">fratino</p><p class="col s6 m3">sœur</p>
			<p class="col s6 m3 eo">bofratino</p><p class="col s6 m3">belle-sœur</p>
		</div>

		<p><b>DIS</b> : <i>dispersion</i></p>
		<div class="row">
			<p class="col s6 m3 eo">doni</p><p class="col s6 m3">donner</p>
			<p class="col s6 m3 eo">disdoni</p><p class="col s6 m3">distribuer</p>
			<p class="col s6 m3 eo">semi</p><p class="col s6 m3">semer</p>
			<p class="col s6 m3 eo">dissemi</p><p class="col s6 m3">disséminer</p>
		</div>

		<p><b>EK</b> : <i>soudaineté d’une action commençante</i></p>
		<div class="row">
			<p class="col s6 m3 eo">dormi</p><p class="col s6 m3">dormir</p>
			<p class="col s6 m3 eo">ekdormi</p><p class="col s6 m3">s’endormir</p>
			<p class="col s6 m3 eo">pluvi</p><p class="col s6 m3">pleuvoir</p>
			<p class="col s6 m3 eo">ekpluvi</p><p class="col s6 m3">commencer à pleuvoir</p>
			<p class="col s6 m3 eo">ek ! :</p><p class="col s6 m3">allez !, en avant !, allons-y !, en route !</p>
		</div>

		<p><b>EKS</b> : <i>cessation d’une fonction ou d’un état social</i></p>
		<div class="row">
			<p class="col s6 m3 eo">prezidanto</p><p class="col s6 m3">président</p>
			<p class="col s6 m3 eo">eksprezidanto</p><p class="col s6 m3">ex-président</p>
			<p class="col s6 m3 eo">edziĝi</p><p class="col s6 m3">se marier</p>
			<p class="col s6 m3 eo">eksedziĝi</p><p class="col s6 m3">divorcer (en parlant d’un homme)</p>
			<p class="col s6 m3 eo">eksiĝi</p><p class="col s6 m3">démissionner</p>
		</div>
		
		<p><b>FI</b> : <i>mépris</i></p>
		<div class="row">
			<p class="col s6 m3 eo">virino</p><p class="col s6 m3">femme</p>
			<p class="col s6 m3 eo">fivirino</p><p class="col s6 m3">femme de mauvaise vie</p>
			<p class="col s6 m3 eo">komercisto</p><p class="col s6 m3">commerçant</p>
			<p class="col s6 m3 eo">fikomercisto</p><p class="col s6 m3">mercanti</p>
			<p class="col s6 m3 eo">fi ! : </p><p class="col s6 m3">pouah !</p>
		</div>
		
		<p><b>GE</b> : <i>réunion des deux sexes</i></p>
		<div class="row">
			<p class="col s6 m3 eo">patro</p><p class="col s6 m3">père</p>
			<p class="col s6 m3 eo">gepatroj</p><p class="col s6 m3">parents</p>
			<p class="col s6 m3 eo">sinjoro</p><p class="col s6 m3">monsieur</p>
			<p class="col s6 m3 eo">gesinjoroj</p><p class="col s6 m3">mesdames et messieurs</p>
			<p class="col s6 m3 eo">gea</p><p class="col s6 m3">mixte</p>
		</div>

		<p><b>MAL</b> : <i>contraire, inverse</i></p>
		<div class="row">
			<p class="col s6 m3 eo">amiko</p><p class="col s6 m3">ami</p>
			<p class="col s6 m3 eo">malamiko</p><p class="col s6 m3">ennemi</p>
			<p class="col s6 m3 eo">fermi</p><p class="col s6 m3">fermer</p>
			<p class="col s6 m3 eo">malfermi</p><p class="col s6 m3">ouvrir</p>
			<p class="col s6 m3 eo">la malo</p><p class="col s6 m3">le contraire</p>
		</div>

		<p><b>MIS</b> : <i>action ratée, exécutée "de travers"</i></p>
		<div class="row">
			<p class="col s6 m3 eo">kompreni</p><p class="col s6 m3">comprendre</p>
			<p class="col s6 m3 eo">miskompreni</p><p class="col s6 m3">comprendre de travers</p>
			<p class="col s6 m3 eo">paŝo</p><p class="col s6 m3">pas</p>
			<p class="col s6 m3 eo">mispaŝo</p><p class="col s6 m3">faux pas</p>
		</div>

		<p><b>PRA</b> : <i>éloignement dans les degrés de parenté et dans le temps</i></p>
		<div class="row">
			<p class="col s6 m3 eo">nepo</p><p class="col s6 m3">petit-fils</p>
			<p class="col s6 m3 eo">pranepo</p><p class="col s6 m3">arrière-petit-fils</p>
			<p class="col s6 m3 eo">avo</p><p class="col s6 m3">grand-père</p>
			<p class="col s6 m3 eo">praavo</p><p class="col s6 m3">arrière-grand-père</p>
			<p class="col s6 m3 eo">arbaro</p><p class="col s6 m3">forêt</p>
			<p class="col s6 m3 eo">praarbaro</p><p class="col s6 m3">forêt vierge</p>
		</div>

		<p><b>RE</b> : <i>répétition, retour en arrière</i></p>
		<div class="row">
			<p class="col s6 m3 eo">fari</p><p class="col s6 m3">faire</p>
			<p class="col s6 m3 eo">refari</p><p class="col s6 m3">refaire</p>
			<p class="col s6 m3 eo">veni</p><p class="col s6 m3">venir</p>
			<p class="col s6 m3 eo">reveni</p><p class="col s6 m3">revenir</p>
			<p class="col s6 m3 eo">ree</p><p class="col s6 m3">de nouveau</p>
			<p class="col s6 m3 eo">ĝis revido !</p><p class="col s6 m3">au revoir !</p>
		</div>
		<?php 
		} // fin section 1
		if ($section=="2") {
		?>

		<p><b>AĈ</b> : <i>péjoratif</i></p>
		<div class="row">
			<p class="col s6 m3 eo">domo</p><p class="col s6 m3">maison</p>
			<p class="col s6 m3 eo">domaĉo</p><p class="col s6 m3">masure</p>
			<p class="col s6 m3 eo">skribi</p><p class="col s6 m3">écrire</p>
			<p class="col s6 m3 eo">skribaĉi</p><p class="col s6 m3">griffonner</p>
			<p class="col s6 m3 eo">aĉa</p><p class="col s6 m3">moche, mauvais</p>
		</div>
		
		<p><b>AD</b> : <i>action qui dure ou se réitère</i></p>
		<div class="row">
			<p class="col s6 m3 eo">paroli</p><p class="col s6 m3">parler</p>
			<p class="col s6 m3 eo">parolado</p><p class="col s6 m3">discours</p>
			<p class="col s6 m3 eo">rigardi</p><p class="col s6 m3">regarder</p>
			<p class="col s6 m3 eo">rigardadi</p><p class="col s6 m3">contempler</p>
			<p class="col s6 m3 eo">kanti</p><p class="col s6 m3">chanter</p>
			<p class="col s6 m3 eo">kantado</p><p class="col s6 m3">action de chanter</p>
			<p class="col s6 m3 eo">ade</p><p class="col s6 m3">sans arrêt</p>
		</div>

		<p><b>Aĵ</b> : <i>chose concrète caractérisée par l’idée exprimée dans le radical</i></p>
		<div class="row">
			<p class="col s6 m3 eo">sendi</p><p class="col s6 m3">envoyer</p>
			<p class="col s6 m3 eo">sendaĵo</p><p class="col s6 m3">envoi (chose envoyée)</p>
			<p class="col s6 m3 eo">bovo</p><p class="col s6 m3">bœuf</p>
			<p class="col s6 m3 eo">bovaĵo</p><p class="col s6 m3">viande de bœuf</p>
			<p class="col s6 m3 eo">reala</p><p class="col s6 m3">réel</p>
			<p class="col s6 m3 eo">realaĵo</p><p class="col s6 m3">réalité, chose réelle</p>
		</div>
		
		<p><br><b>AN</b> : <i>membre d’une collectivité, adhérent</i></p>
		<div class="row">
			<p class="col s6 m3 eo">Kanado</p><p class="col s6 m3">Canada</p>
			<p class="col s6 m3 eo">kanadano</p><p class="col s6 m3">Canadien</p>
			<p class="col s6 m3 eo">Kristo</p><p class="col s6 m3">Christ</p>
			<p class="col s6 m3 eo">kristano</p><p class="col s6 m3">chrétien</p>
			<p class="col s6 m3 eo">rotariano</p><p class="col s9">rotarien (membre du Rotary)</p>
		</div>
		
		<p><b>AR</b> : <i>collection de, ensemble de</i></p>
		<div class="row">
			<p class="col s6 m3 eo">vorto</p><p class="col s6 m3">mot</p>
			<p class="col s6 m3 eo">vortaro</p><p class="col s6 m3">dictionnaire</p>
			<p class="col s6 m3 eo">ŝafo</p><p class="col s6 m3">mouton</p>
			<p class="col s6 m3 eo">ŝafaro</p><p class="col s6 m3">troupeau de moutons</p>
			<p class="col s6 m3 eo">membraro</p><p class="col s9">les membres (d’une association)</p>
		</div>
		
		<p><b>ĈJ</b> : <i>diminutif caressant masculin (appliqué à la première ou aux deux premières syllabes du mot)</i></p>
		<div class="row">
			<p class="col s6 m3 eo">patro</p><p class="col s6 m3">père</p>
			<p class="col s6 m3 eo">paĉjo</p><p class="col s6 m3">papa</p>
			<p class="col s6 m3 eo">Petro</p><p class="col s6 m3">Pierre</p>
			<p class="col s6 m3 eo">Peĉjo</p><p class="col s6 m3">Pierrot</p>
			<p class="col s6 m3 eo">Jozefo</p><p class="col s6 m3">Joseph</p>
			<p class="col s6 m3 eo">Joĉjo</p><p class="col s6 m3">Jo, Jos</p>
			<p class="col s6 m3 eo">Tinĉjo</p><p class="col s6 m3">Tintin</p>
		</div>
		
		<p><b>EBL</b> : <i>la possibilité passive («qui peut être…»)</i></p>
		<div class="row">
			<p class="col s6 m3 eo">vidi</p><p class="col s6 m3">voir</p>
			<p class="col s6 m3 eo">videbla</p><p class="col s6 m3">visible</p>
			<p class="col s6 m3 eo">kredi</p><p class="col s6 m3">croire</p>
			<p class="col s6 m3 eo">nekredebla</p><p class="col s6 m3">incroyable</p>
			<p class="col s6 m3 eo">ebla</p><p class="col s6 m3">possible</p>
			<p class="col s6 m3 eo">eble</p><p class="col s6 m3">peut-être</p>
		</div>

		<p><b>EC</b> : <i>l’état, la qualité abstraite correspondant à l’idée exprimée dans la racine</i></p>
		<div class="row">
			<p class="col s6 m3 eo">viro</p><p class="col s6 m3">homme</p>
			<p class="col s6 m3 eo">vireco</p><p class="col s6 m3">virilité</p>
			<p class="col s6 m3 eo">verda</p><p class="col s6 m3">vert</p>
			<p class="col s6 m3 eo">verdeco</p><p class="col s6 m3">verdeur</p>
			<p class="col s6 m3 eo">infano</p><p class="col s6 m3">enfant</p>
			<p class="col s6 m3 eo">infaneco</p><p class="col s6 m3">enfance</p>
		</div>
		
		<p><b>EG</b> : <i>augmentatif</i></p>
		<div class="row">
			<p class="col s6 m3 eo">vento</p><p class="col s6 m3">vent</p>
			<p class="col s6 m3 eo">ventego</p><p class="col s6 m3">tempête</p>
			<p class="col s6 m3 eo">ridi</p><p class="col s6 m3">rire</p>
			<p class="col s6 m3 eo">ridegi</p><p class="col s6 m3">se tordre (de rire)</p>
			<p class="col s6 m3 eo">ege</p><p class="col s6 m3">extrêmement</p>
		</div>
		
		<p><b>EJ</b> : <i>lieu caractéristique de l’action ou de l’objet concerné</i></p>
		<div class="row">
			<p class="col s6 m3 eo">lerni</p><p class="col s6 m3">apprendre</p>
			<p class="col s6 m3 eo">lernejo</p><p class="col s6 m3">école</p>
			<p class="col s6 m3 eo">dormi</p><p class="col s6 m3">dormir</p>
			<p class="col s6 m3 eo">dormejo</p><p class="col s6 m3">dortoir</p>
			<p class="col s6 m3 eo">tombo</p><p class="col s6 m3">tombe</p>
			<p class="col s6 m3 eo">tombejo</p><p class="col s6 m3">cimetière</p>
			<p class="col s6 m3 eo">ejo</p><p class="col s6 m3">local, salle</p>
		</div>
		
		<p><b>EM</b> : <i>le penchant, la tendance</i></p>
		<div class="row">
			<p class="col s6 m3 eo">ŝpari</p><p class="col s6 m3">économiser</p>
			<p class="col s6 m3 eo">ŝparema</p><p class="col s6 m3">économe</p>
			<p class="col s6 m3 eo">babili</p><p class="col s6 m3">bavarder</p>
			<p class="col s6 m3 eo">babilema</p><p class="col s6 m3">bavard</p>
			<p class="col s6 m3 eo">emi</p><p class="col s6 m3">avoir tendance à</p>
		</div>
		
		<p><b>END</b> : <i>obligation passive («qui doit être…»)</i></p>
		<div class="row">
			<p class="col s6 m3 eo">legi</p><p class="col s6 m3">lire</p>
			<p class="col s6 m3 eo">legenda</p><p class="col s6 m3">qu’il faut lire (à lire)</p>
			<p class="col s6 m3 eo">fari</p><p class="col s6 m3">faire</p>
			<p class="col s6 m3 eo">farenda</p><p class="col s6 m3">qu’il faut faire (à faire)</p>
		</div>
		
		<p><b>ER</b> : <i>unité constitutive de la collection</i></p>
		<div class="row">
			<p class="col s6 m3 eo">salo</p><p class="col s6 m3">sel</p>
			<p class="col s6 m3 eo">salero</p><p class="col s6 m3">grain de sel</p>
			<p class="col s6 m3 eo">mono</p><p class="col s6 m3">argent</p>
			<p class="col s6 m3 eo">monero</p><p class="col s6 m3">pièce de monnaie</p>
			<p class="col s6 m3 eo">ero</p><p class="col s6 m9">détail, morceau, élément, item</p>
		</div>
		
		<p><b>EStr</b> : <i>celui qui commande effectivement au lieu indiqué par la racine</i></p>
		<div class="row">
			<p class="col s6 m3 eo">urbo</p><p class="col s6 m3">ville</p>
			<p class="col s6 m3 eo">urbestro</p><p class="col s6 m3">maire</p>
			<p class="col s6 m3 eo">estri</p><p class="col s6 m3">diriger</p>
			<p class="col s6 m3 eo">estro</p><p class="col s6 m3">chef</p>
		</div>
		
		<p><b>ET</b> : <i>diminutif</i></p>
		<div class="row">
			<p class="col s6 m3 eo">bela</p><p class="col s6 m3">beau</p>
			<p class="col s6 m3 eo">beleta</p><p class="col s6 m3">joli</p>
			<p class="col s6 m3 eo">varma</p><p class="col s6 m3">chaud</p>
			<p class="col s6 m3 eo">varmeta</p><p class="col s6 m3">tiède</p>
			<p class="col s6 m3 eo">eta</p><p class="col s6 m3">petit</p>
			<p class="col s6 m3 eo">iomete</p><p class="col s6 m3">un petit peu</p>
		</div>
		
		<p><b>ID</b> : <i>descendant, rejeton</i></p>
		<div class="row">
			<p class="col s6 m3 eo">kato</p><p class="col s6 m3">chat</p>
			<p class="col s6 m3 eo">katido</p><p class="col s6 m3">chaton</p>
			<p class="col s6 m3 eo">reĝo</p><p class="col s6 m3">roi</p>
			<p class="col s6 m3 eo">reĝido</p><p class="col s6 m3">prince</p>
			<p class="col s6 m3 eo">ido</p><p class="col s6 m9">descendant, petit (d’un animal)</p>
		</div>
		
		<p><b>IG</b> : <i>faire (devant un infinitif), rendre tel ou tel</i></p>
		<div class="row">
			<p class="col s6 m3 eo">pura</p><p class="col s6 m3">propre</p>
			<p class="col s6 m3 eo">purigi</p><p class="col s6 m3">nettoyer (rendre propre)</p>
			<p class="col s6 m3 eo">morti</p><p class="col s6 m3">mourir</p>
			<p class="col s6 m3 eo">mortigi</p><p class="col s6 m3">tuer (faire mourir)</p>
			<p class="col s6 m3 eo">scii</p><p class="col s6 m3">savoir</p>
			<p class="col s6 m3 eo">sciigi</p><p class="col s6 m3">faire savoir, informer</p>
			<p class="col s6 m3 eo">igi</p><p class="col s6 m9">rendre (tel), faire (faire)</p>
		</div>
		
		<p><b>IĜ</b> : <i>devenir tel ou tel</i></p>
		<div class="row">
			<p class="col s6 m3 eo">sidi</p><p class="col s6 m3">être assis</p>
			<p class="col s6 m3 eo">sidiĝi</p><p class="col s6 m3">s’asseoir</p>
			<p class="col s6 m3 eo">ruĝa</p><p class="col s6 m3">rouge</p>
			<p class="col s6 m3 eo">ruĝiĝi</p><p class="col s6 m3">rougir</p>
			<p class="col s6 m3 eo">iĝi</p><p class="col s6 m3">devenir</p>
		</div>
		
		<p><b>IL</b> : <i>outil, instrument</i></p>
		<div class="row">
			<p class="col s6 m3 eo">ŝlosi</p><p class="col s6 m3">fermer à clef</p>
			<p class="col s6 m3 eo">ŝlosilo</p><p class="col s6 m3">clef</p>
			<p class="col s6 m3 eo">razi</p><p class="col s6 m3">raser</p>
			<p class="col s6 m3 eo">razilo</p><p class="col s6 m3">rasoir</p>
			<p class="col s6 m3 eo">sidi</p><p class="col s6 m3">être assis</p>
			<p class="col s6 m3 eo">sidilo</p><p class="col s6 m3">siège</p>
			<p class="col s6 m3 eo">ilo</p><p class="col s6 m3">instrument</p>
		</div>
		
		<p><b>IN</b> : <i>sexe féminin</i></p>
		<div class="row">
			<p class="col s6 m3 eo">onklo</p><p class="col s6 m3">oncle</p>
			<p class="col s6 m3 eo">onklino</p><p class="col s6 m3">tante</p>
			<p class="col s6 m3 eo">koko</p><p class="col s6 m3">coq</p>
			<p class="col s6 m3 eo">kokino</p><p class="col s6 m3">poule</p>
			<p class="col s6 m3 eo">ina</p><p class="col s6 m3">féminin</p>
		</div>
		
		<p><b>IND</b> : <i>qui mérite d’être..., digne de...</i></p>
		<div class="row">
			<p class="col s6 m3 eo">admiri</p><p class="col s6 m3">admirer</p>
			<p class="col s6 m3 eo">admirinda</p><p class="col s6 m3">admirable</p>
			<p class="col s6 m3 eo">laŭdi</p><p class="col s6 m3">louer</p>
			<p class="col s6 m3 eo">laŭdinda</p><p class="col s6 m3">louable</p>
		</div>
		
		<p><b>ING</b> : <i>ce dans quoi on insère ou introduit quelque chose</i></p>
		<div class="row">
			<p class="col s6 m3 eo">plumo</p><p class="col s6 m3">plume</p>
			<p class="col s6 m3 eo">plumingo</p><p class="col s6 m3">porte-plume</p>
			<p class="col s6 m3 eo">cigaredo</p><p class="col s6 m3">cigarette</p>
			<p class="col s6 m3 eo">cigaredingo</p><p class="col s6 m3">fume-cigarette</p>
			<p class="col s6 m3 eo">glavo</p><p class="col s6 m3">épée</p>
			<p class="col s6 m3 eo">glavingo</p><p class="col s6 m3">fourreau</p>
		</div>
		
		<p><b>IST</b> : <i>profession, activité habituelle</i></p>
		<div class="row">
			<p class="col s6 m3 eo">instrui</p><p class="col s6 m3">enseigner</p>
			<p class="col s6 m3 eo">instruisto</p><p class="col s6 m3">instituteur</p>
			<p class="col s6 m3 eo">piano</p><p class="col s6 m3">piano</p>
			<p class="col s6 m3 eo">pianisto</p><p class="col s6 m3">pianiste</p>
			<p class="col s6 m3 eo">esperantisto</p><p class="col s6 m3">espérantiste</p>
		</div>
		
		<p><b>NJ</b> : <i>diminutif caressant féminin (appliqué à la première ou aux deux premières syllabes du mot)</i></p>
		<div class="row">
			<p class="col s6 m3 eo">patrino</p><p class="col s6 m3">mère</p>
			<p class="col s6 m3 eo">panjo</p><p class="col s6 m3">maman</p>
			<p class="col s6 m3 eo">Maria</p><p class="col s6 m3">Marie</p>
			<p class="col s6 m3 eo">Manjo</p><p class="col s6 m3">Mariette</p>
		</div>
		
		<p><b>OBL</b> : <i>forme les multiplicatifs</i></p>
		<div class="row">
			<p class="col s6 m3 eo">du</p><p class="col s6 m3">deux</p>
			<p class="col s6 m3 eo">duobla</p><p class="col s6 m3">double</p>
			<p class="col s6 m3 eo">multobligi</p><p class="col s6 m9">multiplier, reproduire en plusieurs exemplaires</p>
		</div>
		
		<p><b>ON</b> : <i>forme les nombres fractionnaires</i></p>
		<div class="row">
			<p class="col s6 m3 eo">kvar</p><p class="col s6 m3">quatre</p>
			<p class="col s6 m3 eo">kvarono</p><p class="col s6 m3">un quart</p>
			<p class="col s6 m3 eo">duonhoro</p><p class="col s6 m3">demi-heure</p>
			<p class="col s6 m3 eo">tri</p><p class="col s6 m3">trois</p>
			<p class="col s6 m3 eo">triope</p><p class="col s6 m3">à trois</p>
			<p class="col s6 m3 eo">unuopa</p><p class="col s6 m3">individuel</p>
			<p class="col s6 m3 eo">ope</p><p class="col s6 m3">en groupe, à plusieurs</p>
		</div>
		
		<p><b>UJ</b> : <i>contenant, récipient pour contenir…</i></p>
		<div class="row">
			<p class="col s6 m3 eo">salujo</p><p class="col s6 m3">salière</p>
			<p class="col s6 m3 eo">piprujo</p><p class="col s6 m3">poivrière</p>
			<p class="col s6 m3 eo">supujo</p><p class="col s6 m3">soupière</p>
			<p class="col s6 m3 eo">ujo</p><p class="col s6 m3">récipient</p>
		</div>
		
		<p><b>UL</b> : <i>individu caractérisé par…</i></p>
		<div class="row">
			<p class="col s6 m3 eo">sankta</p><p class="col s6 m3">saint</p>
			<p class="col s6 m3 eo">sanktulo</p><p class="col s6 m3">un saint</p>
			<p class="col s6 m3 eo">kontraŭ</p><p class="col s6 m3">contre</p>
			<p class="col s6 m3 eo">kontraŭulo</p><p class="col s6 m3">un adversaire, un opposant</p>
			<p class="col s6 m3 eo">stulta</p><p class="col s6 m3">stupide</p>
			<p class="col s6 m3 eo">stultulo</p><p class="col s6 m3">un sot</p>
			<p class="col s6 m3 eo">kunulino</p><p class="col s6 m3">compagne</p>
			<p class="col s6 m3 eo">aĉulo</p><p class="col s6 m3">salopard</p>
		</div>
		
		<p><b>UM</b> : <i>indéterminé</i></p>
		<div class="row">
			<p class="col s6 m3 eo">kolo</p><p class="col s6 m3">cou</p>
			<p class="col s6 m3 eo">kolumo</p><p class="col s6 m3">col (de chemise)</p>
			<p class="col s6 m3 eo">plena</p><p class="col s6 m3">plein</p>
			<p class="col s6 m3 eo">plenumi</p><p class="col s6 m3">accomplir</p>
			<p class="col s6 m3 eo">umilo</p><p class="col s6 m3">gadget</p>
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
		<fieldset class="ekzerco">
			<legend><strong>EXERCICE</strong> : Traduisez les phrases en français.</legend>

			<input type="hidden" name="013_cxap07.1" value="1. Traduisez les mots en français.">
			<div class="tasko">
			<?php
				$demandoj=array (
				1 => "(&quot;edzo&quot; = époux) : edzino, edziĝi, eksedzo, geedzoj",
				2 => "(&quot;viro&quot; = homme) : virino, vireto, viraĉo, vira",
				3 => "(&quot;bovo&quot; = bœuf) : bovino, bovido, bovaro, bovejo",
				4 => "(&quot;varma&quot; = chaud) : malvarma, varmeco, varmeta, malvarmiĝi",
				5 => "(&quot;aro&quot; = groupe) : ŝiparo (ŝipo = bateau), abelaro (abelo = abeille), stelaro (stelo = étoile)"
				);
				ekzerco(False,2);
			?>
			</div>
		</fieldset>
		<p>Vous trouverez aussi qu’il est amusant de créer ses propres mots espéranto à partir des radicaux&nbsp;:</p>
		<fieldset class="ekzerco">
			<legend><strong>EXERCICE</strong> : Traduisez les mots en espéranto.</legend>
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
		</fieldset>

		<?php 
		} // fin section 3
		if ($section=="4") {
		?>
		
		<p><a href="../son/pv7-1.mp3" type="audio/mp3"><i class="material-icons">volume_up</i></a>
		Se junulo ne lernis, maljunulo ne scias.
		</p>
		<p><a href="../son/pv7-2.mp3" type="audio/mp3"><i class="material-icons">volume_up</i></a>
		Juneco ne scias, maljuneco ne povas.
		</p>
		<p><a href="../son/pv7-3.mp3" type="audio/mp3"><i class="material-icons">volume_up</i></a>
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
			<p class="col s6"><b>Kioma horo estas ?</b></p><p class="col s6">Quelle heure est-il ?</p>
			<p class="col s6">– Estas la dua.</p><p class="col s6">– Il est deux heures.</p>
			<p class="col s6">– Estas la dua kaj dek.</p><p class="col s6">– Il est deux heures dix.</p>
			<p class="col s6">– Estas dek antaŭ la dua.</p><p class="col s6">– Il est deux heures moins dix.</p>
		</div>
		
		<p class="rimarko"><strong>REMARQUE</strong> : 
		  <span class="eo">La dua kaj dek</span> et <span class="eo">dek antaŭ la dua</span> sont des formes
		  raccourcies de
		  <span class="eo">la dua horo kaj dek minutoj</span> et 
		  <span class="eo">dek minutoj antaŭ la dua horo</span>.
		</p>
		
		<div class="vortlisto row">
			<p class="col s6"><b>Je kioma horo</b> ŝi venis ?</p><p class="col s6">À quelle heure est-elle venue&nbsp;? </p>
			<p class="col s6">– Ŝi venis je la dua.</p><p class="col s6">– Elle est venue à deux heures.</p>
			<p class="col s6">– Ŝi venis je la dua kaj dek.</p><p class="col s6">etc.</p>
			<p class="col s12">– Ŝi venis je dek antaŭ la dua.</p>
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
		<p><span class="eo">la dua kaj kvarono</span> = <span class="eo">la dua kaj dek kvin</span></p>
		<p><span class="eo">la dua kaj duono</span> = <span class="eo">la dua kaj tridek</span></p>
		<p><span class="eo">je la kioma…?</span> = <span class="eo">je kioma horo…?</span></p>
		<p><span class="eo">la kioma estas ?</span> = <span class="eo">kioma horo estas?</span></p>
		<p><span class="eo">tagmezo</span> = midi (<i>milieu du jour</i>)</p>
		<p><span class="eo">noktomezo</span> = minuit (<i>milieu de la nuit</i>)</p>

		<fieldset class="ekzerco">
			<legend><strong>EXERCICE</strong> : Répondez aux questions suivantes.</legend>
			<input type="hidden" name="013_cxap07.3" value="3. Répondez aux questions suivantes.">
			<?php atentigo(); ?>
			<div class="tasko">
			<?php
				$demandoj=array (
				19 => "Se nun estas la dua, kioma horo estos post dudek minutoj ? (<b>Se</b> signifie «si» condition)",  
				20 => "Se nun estas la dek-unua, kioma horo estis antaŭ dek minutoj ?",
				21 => "Mi revenis je la kvara kaj duono, kaj ŝi revenis dudek kvin minutojn antaŭ mi. Je la kioma ŝi revenis ?",
				22 => "Fatima iras labori je la sepa matene kaj revenas post naŭ horoj. Je la kioma ŝi revenas ?"
				);
				ekzerco(True, 1);
			?>
			</div>
		</fieldset>

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
