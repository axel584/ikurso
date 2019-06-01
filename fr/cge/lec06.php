<?php
$titolo="6 (ses)";
$leciono = 6;
$section=isset($_GET["section"])?$_GET["section"]:"1";
include "dlekkapo.inc.php";
?>

<div class="row">
	<article class="col s12 m10 l7 offset-m1 offset-l1">
				
		<section id="leciono-enhavo">
		<?php 
		getTitoloLecionero('CG',$leciono,$section);
		displayWarningSiLecioneroManquante($persono_id,'CG',6,$section);
		
		
		if ($section=="1") {
		?>
		
		<p>Faisons une petite révision des terminaisons vues jusqu’à maintenant&nbsp;:</p>
		
		<div class="row">
			<p class="col s4">Sujet<br/>Adjectif Nom</p>
			<p class="col s2">Adverbe</p>
			<p class="col s2">Verbe</p>
			<p class="col s4">Complément d’objet direct<br>Adjectif Nom</p>
		</div>
		<div class="row">
			<p class="col s4">____-a   ____-o<br>____-aj   ____-oj</p>
			<p class="col s2">____-e</p>
			<p class="col s2">____-is<br>____-as<br>____-os</p>
			<p class="col s4">____-an   ____-on<br>____-ajn  ____-ojn</p>
		</div>
		<div class="row">
			<p class="col s4 eo">Mia patrino</p>
			<p class="col s2 eo">bone</p>
			<p class="col s2 eo">lavas</p>
			<p class="col s4 eo">mian fraton.</p>
		</div>
		<div class="row">
			<p class="col s4 eo">Niaj fratinoj</p>
			<p class="col s2 eo">ĝoje</p>
			<p class="col s2 eo">vidis</p>
			<p class="col s4 eo">viajn instruistojn.</p>
		</div>
		
		<?php 
		} // fin section 1
		if ($section=="2") {
		?>
		
		<p>
		Nous avons vu que, pour transformer une phrase en question, il suffit
		de placer le mot <span class="eo">ĉu</span> (est-ce que ?) au début de la phrase. La réponse
		attendue est alors <span class="eo">jes</span> ou <span class="eo">ne</span>&nbsp;:
		</p>
		<div class="vortlisto row">
			<p class="col s6">La knabino manĝis.</p><p class="col s6">– <b>ĉu</b> la knabino manĝis ?</p>
			<p class="col s6">La knabino ne manĝis.</p><p class="col s6">– <b>ĉu</b> la knabino ne manĝis ?</p>
		</div>
		
		<p class="parto">Les mots interrogatifs en <b>ki-</b> permettent de poser des questions sur
		des morceaux spécifiques de la phrase sans utiliser le mot <span class="eo">ĉu</span>&nbsp;:
		</p>
		<div class="vortlisto row">
			<p class="col s12">La knabino trinkas varman ĉokoladon matene.</p>
			<p class="col s6">– <b>Kion</b> trinkas la knabino matene?</p><p class="col s6">– <b>Varman ĉokoladon.</b></p>
			<p class="col s6">– <b>Kiu</b> trinkas ĉokoladon?</p><p class="col s6">– <b>La knabino.</b></p>
			<p class="col s6">– <b>Kian</b> ĉokoladon ŝi trinkas?</p><p class="col s6">– <b>Varman.</b></p>
			<p class="col s6">– <b>Kiam</b> ŝi trinkas ĉokoladon?</p><p class="col s6">– <b>Matene.</b></p>
		</div>
		
		<fieldset class="vortoj">
			<legend>À RETENIR</legend>
			<?php if ($persono) { ?>
			<p class="eo eta">Ce mot sera automatiquement ajouté à votre vocabulaire à réviser lorsque vous aurez terminé d'étudier cette section.</p>
			<?php } ?>
			<div class="vortlisto row">
				<p class="col s12"><span class="eo">matene</span>&nbsp;: le matin, au matin</p>
			</div>
		</fieldset>

		<?php 
		} // fin section 2
		if ($section=="3") {
		?>

		<p class="parto">
		La lettre <b>c</b> se prononce comme <em>ts</em> tout
		comme beaucoup de Québécois prononcent le <em>t</em> devant <em>u</em> et <em>i</em> (<em>tsu</em>
		pour <em>tu</em>, <em>tsire</em> pour <em>tire</em>). Ainsi&nbsp;:
		</p>
		
		<div class="vortlisto row">
			<p class="col s3"><span class="eo">danco</span></p>
			<p class="col s3"><span class="eo">leciono</span></p>
			<p class="col s3"><span class="eo">biciklo</span></p>
			<p class="col s3"><span class="eo">scienco</span></p>
			<p class="col s3">(<u>dan</u>-tso)</p>
			<p class="col s3">(lè-tsi-<u>o</u>-no)</p>
			<p class="col s3">(bi-<u>tsi</u>-klo)</p>
			<p class="col s3">(stsi-<u>èn</u>-tso)</p>
		</div>
		<p class="parto">N’oubliez pas l’accent tonique&nbsp;: toujours sur l’avant-dernière syllabe.
		Notez aussi que <b>h</b> est toujours prononcé&nbsp;:</p>
		<div class="vortlisto row">
			<p class="col s3"><span class="eo"><u>ha</u>vi</span></p>
			<p class="col s3"><span class="eo"><u>hel</u>pi</span></p>
			<p class="col s3"><span class="eo">lip<u>ha</u>roj</span></p>
			<p class="col s3"><span class="eo">he<u>ro</u>a</span></p>
			<p class="col s3">(avoir)</p>
			<p class="col s3">(aider)</p>
			<p class="col s3">(moustache)</p>
			<p class="col s3">(héroique)</p>
		</div>

		<fieldset class="vortoj">
			<legend>MOTS À RETENIR</legend>
			<?php if ($persono) { ?>
			<p class="eo eta">Ces mots seront automatiquement ajoutés à votre vocabulaire à réviser lorsque vous aurez terminé d'étudier cette section.</p>
			<?php } ?>
			<div class="vortlisto row">
				<p class="col s12 m6"><span class="eo">scienco</span>&nbsp;: science</p>
				<p class="col s12 m6"><span class="eo">helpi</span>&nbsp;: aider</p>
			</div>
		</fieldset>
		<?php 
		} // fin section 3
		if ($section=="4") {
		?>
		
		<p>Voici un petit exercice pour vous remettre en mémoire ce que vous avez appris à 
		la leçon précédente.</p>
		
			<?php 
				getEkzercon(22,$persono_id);
			?>
		<?php 
		} // fin section 3
		if ($section=="5") {
		?>
		
		<p>À distinguer :</p>
		<div class="vortlisto row">
			<p class="col s6"><span class="eo">nova</span>&nbsp;: nouveau</p><p class="col s6"><span class="eo">malnova</span>&nbsp;: ancien, périmé</p>
			<p class="col s6"><span class="eo">juna</span>&nbsp;: jeune</p><p class="col s6"><span class="eo">maljuna</span>&nbsp;: vieux, âgé</p>
		</div>
		
		<p><span class="eo">maljuna amiko</span>&nbsp;: un vieil ami (= un ami âgé)</p>
		<p><span class="eo">malnova amiko</span>&nbsp;: un vieil ami (= un ami de longue date)</p>
		
		<p class="parto"><b>Proverbe</b></p>
		<p><a href="<?php echo $vojo;?>fr/son/pv6.mp3" class="sm2_button"></a> Bona estas domo nova kaj amiko malnova.</p>
		
		<?php 
		} // fin section 5
		if ($section=="6") {
		?>

		<p class="parto">
		Dans les leçons précédentes, vous avez vu quelques prépositions. Voici maintenant une liste plus complète des prépositions les plus fréquemment employées en espéranto.</p>
		<table class="retrait striped bordered">
			<tr><td class="eo">al</td><td>- à, vers (indique le but d’un mouvement ou le bénéficiaire d’une action)</td></tr>
			<tr><td class="eo">ĉe</td><td>- chez, auprès de, tout près de</td></tr>
			<tr><td class="eo">de</td><td>- de, à partir de, depuis (temps, lieu)</td></tr>
			<tr><td class="eo">dum</td><td>- durant, pendant (est également conjonction et signifie «pendant que», «tandis que»)</td></tr>
			<tr><td class="eo">en</td><td>- dans, en, à l’intérieur de</td></tr>
			<tr><td class="eo">ĝis</td><td>- jusqu’à (est également conjonction et signifie alors «jusqu’à ce que»)</td></tr>
			<tr><td class="eo">por</td><td>- pour, à l’intention de</td></tr>
			<tr><td class="eo">pro</td><td>- en raison de, à cause de («pour», «par», «de»,…)</td></tr>
			<tr><td class="eo">sub</td><td>- sous, en-dessous de</td></tr>
			<tr><td class="eo">sur</td><td>- sur, au-dessus de (en touchant l’objet)</td></tr>
			<tr><td class="eo">anstataŭ</td><td>- au lieu de, à la place de</td></tr>
			<tr><td class="eo">antaŭ</td><td>- avant, devant</td></tr>
			<tr><td class="eo">apud</td><td>- près de, à côté de</td></tr>
			<tr><td class="eo">da</td><td>- de (indique la quantité)</td></tr>
			<tr><td class="eo">ekster</td><td>- hors de, en dehors de</td></tr>
			<tr><td class="eo">el</td><td>- de (indique l’origine), hors de (mouvement)</td></tr>
			<tr><td class="eo">inter</td><td>- parmi, entre</td></tr>
			<tr><td class="eo">kun</td><td>- avec (indique l’accompagnement)</td></tr>
			<tr><td class="eo">per</td><td>- par, au moyen de, avec (instrument)</td></tr>
			<tr><td class="eo">post</td><td>- après</td></tr>
			<tr><td class="eo">pri</td><td>- au sujet de, à propos de</td></tr>
			<tr><td class="eo">sen</td><td>- sans</td></tr>
			<tr><td class="eo">super</td><td>- au-dessus de</td></tr>
			<tr><td class="eo">tra</td><td>- à travers, au travers de</td></tr>
		</table>

		<?php 
		} // fin section 6
		if ($section=="7") {
		?>

		<div class="row">
			<p class="col s6 m3 center-align"><img class="responsive-img" src="<?=$vojo?>fr/cge/bildoj/mangxi-dum-vojagxo.jpg"><br>-9-</p>
			<p class="col s6 m3 center-align"><img class="responsive-img" src="<?=$vojo?>fr/cge/bildoj/hotelo-por-insektoj.jpg"><br>-10-</p>
			<p class="col s6 m3 center-align"><img class="responsive-img" src="<?=$vojo?>fr/cge/bildoj/sabla-kastelo.jpg"><br>-11-</p>
			<p class="col s6 m3 center-align"><img class="responsive-img" src="<?=$vojo?>fr/cge/bildoj/kato-en-shranko.jpg"><br>-12-</p>
			<p class="col s6 m3 center-align"><img class="responsive-img" src="<?=$vojo?>fr/cge/bildoj/sur-la-pinto.jpg"><br>-13-</p>
			<p class="col s6 m3 center-align"><img class="responsive-img" src="<?=$vojo?>fr/cge/bildoj/cxapelo-cxe-dorso.jpg"><br>-14-</p>
			<p class="col s6 m3 center-align"><img class="responsive-img" src="<?=$vojo?>fr/cge/bildoj/floroj-inter-rokoj.jpg"><br>-15-</span></p>
			<p class="col s6 m3 center-align"><img class="responsive-img" src="<?=$vojo?>fr/cge/bildoj/libroj-esperanto.jpg"><br>-16-</span></p>
		</div>
		
			<?php 
				getEkzercon(23,$persono_id);
			?>

		<p>Crédits photos :</p>
		<p class="creditphoto">11. Diego Delso, <a href="http://delso.photo/">delso.photo</a>, License CC-BY-SA</p>
		<p class="creditphoto">Autres photos : iKurso/ E. Richard</p>

		<fieldset class="vortoj">
			<legend>VOCABULAIRE À RETENIR</legend>
			<div>
				<?php if ($persono) { ?>
				<p class="eo eta">Ces mots seront automatiquement ajoutés à votre vocabulaire à réviser lorsque vous aurez terminé cette section. Le nombre de mots à réviser sera indiqué sur le bouton affiché au-dessus du sommaire.</p>
				<?php } ?>
			</div>
			<div class="vortlisto row">
				<p class="col s6"><span class="eo">kastelo</span> : château</p>
				<p class="col s6"><span class="eo">ĉapelo</span> : chapeau</p>
				<p class="col s6"><span class="eo">dorso</span> : dos</p>
				<p class="col s6"><span class="eo">vojaĝo</span> : voyage</p>
			</div>
		</fieldset>
		<?php 
		} // fin section 7
		if ($section=="8") {
		?>

		<p class="parto">Voici un premier récit. Lisez-le en faisant attention à l’usage des prépositions. Dans la section suivante, nous vous présenterons en second récit, puis vous aurez un exercice avec des questions sur ces deux récits.</p>
		<p><b>Vojaĝo al Montrealo por la Esperanto-kongreso</b></p>
		<p>
			<audio controls="controls">Votre navigateur ne supporte pas la lecture du fichier audio.
				<source src="<?php echo $vojo;?>fr/son/l06.mp3" type="audio/mp3">
			</audio>
		</p>
		<p>
			  Mi estas membro de junulara esperantista klubo kaj mi partoprenis en
			  la Esperanto-kongreso, kiu okazis en Montrealo. Dum preskaŭ tri horoj
			  ni vojaĝis de Kebeko en nia aŭtobuseto kaj ne haltis, ĝis ni alvenis
			  al Montrealo. Tie ni ankaŭ vizitis esperantistajn amikojn. Por la
			  tagmanĝo ni manĝis sandviĉojn, kiuj estis sub la seĝoj, sur kiuj
			  ni sidis dum la vojaĝo.
			</p>

		<fieldset class="vortoj">
			<legend>MOTS À RETENIR</legend>
			<?php if ($persono) { ?>
			<p class="eo eta">Ces mots seront automatiquement ajoutés à votre vocabulaire à réviser lorsque vous aurez terminé d'étudier cette section.</p>
			<?php } ?>
			<div class="vortlisto row">
				<p class="col s12 m6"><span class="eo">junularo</span>&nbsp;: jeunesse</p>		
				<p class="col s12 m6"><span class="eo">partopreni en</span>&nbsp;: participer à</p>
				<p class="col s12 m6"><span class="eo">okazi</span>&nbsp;: avoir lieu</p>
				<p class="col s12 m6"><span class="eo">Kebeko</span>&nbsp;: Québec (la ville)</p>
				<p class="col s12 m6"><span class="eo">(aŭto)buseto</span>&nbsp;: minibus</p>
				<p class="col s12 m6"><span class="eo">halti</span>&nbsp;: s’arrêter</p>
				<p class="col s12 m6"><span class="eo">alveni al</span>&nbsp;: arriver à (ou dans)</p>
				<p class="col s12 m6"><span class="eo">ankaŭ</span>&nbsp;: aussi</p>
				<p class="col s12 m6"><span class="eo">viziti</span>&nbsp;: visiter</p>
				<p class="col s12 m6"><span class="eo">seĝo</span>&nbsp;: siège</p>
				<p class="col s12"><span class="eo">tagmanĝo</span>&nbsp;: repas du midi (France : déjeuner, Canada : dîner)</p>
			</div>
		</fieldset>

		<p>
		Si vous rencontrez un terme inconnu qui n’est pas expliqué dans les
		listes de vocabulaire, ou si vous avez un doute,
		reportez-vous au <a href="vocabula.php">lexique général du cours</a>.
		</p>
		
		<?php 
		} // fin section 8
		if ($section=="9") {
		?>
		
		<p><b>Vizito en zoologia ĝardeno</b></p>
		<p>
		  Kun miaj fratoj mi veturis per aŭto al la zoo (<i>zoologia ĝardeno</i>). Ĝi estas
		  ekster la urbo Granby (Kebekio*). Ni admiris tie multajn bestojn el
		  ĉiuj kontinentoj. Al mia frato tre plaĉis la ursoj apud la enirejo.
		  Inter la kaĝoj de la brunaj kaj blankaj ursoj estas la kaĝo de la
		  nigra urso el okcidenta Kanado. La blanka urso el la Arkto estis ofte
		  en la akvo. Por mi la grandaj simioj estis tre interesaj. Sen tiaj
		  bestoj zoo ne povas esti kompleta.
		</p>

		<p>* <span class="eo">Kebekio</span>&nbsp;: état du Québec</p>
		
		<fieldset class="vortoj">
			<legend>MOTS À RETENIR</legend>
			<?php if ($persono) { ?>
			<p class="eo eta">Ces mots seront automatiquement ajoutés à votre vocabulaire à réviser lorsque vous aurez terminé d'étudier cette section.</p>
			<?php } ?>
			<div class="vortlisto row">
				<p class="col s12 m6"><span class="eo">veturi</span>&nbsp;: aller<sup>[1]</sup></p>
				<p class="col s12 m6"><span class="eo">urbo</span>&nbsp;: ville</p>
				
				<p class="col s12 m6"><span class="eo">admiri</span>&nbsp;: admirer</p>
				<p class="col s12 m6"><span class="eo">besto</span>&nbsp;: bête, animal</p>
				<p class="col s12 m6"><span class="eo">multaj</span>&nbsp;: beaucoup de, de nombreux</p>
				<p class="col s12 m6"><span class="eo">kontinento</span>&nbsp;: continent</p>
				<p class="col s12 m6"><span class="eo">plaĉi al</span>&nbsp;: plaire à</p>
				<p class="col s12 m6"><span class="eo">urso</span>&nbsp;: ours</p>
				<p class="col s12 m6"><span class="eo">enirejo</span>&nbsp;: entrée</p>
				<p class="col s12 m6"><span class="eo">kaĝo</span>&nbsp;: cage</p>
				<p class="col s12 m6"><span class="eo">Arkto</span>&nbsp;: Arctique</p>
				<p class="col s12 m6"><span class="eo">ofte</span>&nbsp;: souvent</p>
				<p class="col s12 m6"><span class="eo">simio</span>&nbsp;: singe</p>
				<p class="col s12 m6"><span class="eo">interesa</span>&nbsp;: intéressant</p>
				<p class="col s12 m6"><span class="eo">kompleta</span>&nbsp;: complet</p>
			</div>
			<p><small>[1]</small> par un moyen de locomotion quelconque</p>
		</fieldset>
		
		<?php 
		} // fin section 9
		if ($section=="10") {
		?>
		<p class="parto">Dans cet exercice, vous devrez répondre à des questions sur les deux textes des pages précédentes. Voici de nouveau ces deux textes.</p>
		<p><b>Vojaĝo al Montrealo por la Esperanto-kongreso</b></p>
		<p>Mi estas membro de junulara esperantista klubo kaj mi partoprenis en
			  la Esperanto-kongreso, kiu okazis en Montrealo. Dum preskaŭ tri horoj
			  ni vojaĝis de Kebeko en nia aŭtobuseto kaj ne haltis, ĝis ni alvenis
			  al Montrealo. Tie ni ankaŭ vizitis esperantistajn amikojn. Por la
			  tagmanĝo ni manĝis sandviĉojn, kiuj estis sub la seĝoj, sur kiuj
			  ni sidis dum la vojaĝo.</p>
		<p><b>Vizito en zoologia ĝardeno</b></p>
		<p>
		  Kun miaj fratoj mi veturis per aŭto al la zoo (<i>zoologia ĝardeno</i>). ĝi estas
		  ekster la urbo Granby (Kebekio*). Ni admiris tie multajn bestojn el
		  ĉiuj kontinentoj. Al mia frato tre plaĉis la ursoj apud la enirejo.
		  Inter la kaĝoj de la brunaj kaj blankaj ursoj estas la kaĝo de la
		  nigra urso el okcidenta Kanado. La blanka urso el la Arkto estis ofte
		  en la akvo. Por mi la grandaj simioj estis tre interesaj. Sen tiaj
		  bestoj zoo ne povas esti kompleta.
		</p>

			<?php 
				getEkzercon(24,$persono_id);
			?>
		
		<fieldset class="vortoj">
			<legend>MOTS À RETENIR</legend>
			<?php if ($persono) { ?>
			<p class="eo eta">Ces mots seront automatiquement ajoutés à votre vocabulaire à réviser lorsque vous aurez terminé d'étudier cette section.</p>
			<?php } ?>
			<div class="vortlisto row">
				<p class="col s12 m6"><span class="eo">membro</span>&nbsp;: membre, adhérent</p>
				<p class="col s12 m6"><span class="eo">klubo</span>&nbsp;: club</p>
			</div>
		</fieldset>

		<?php 
		} // fin section 10
		if ($section=="11") {
		?>
		
		<p class="parto">On emploie tout simplement le verbe <span class="eo">esti</span> et, en général, on met le sujet
		après le verbe&nbsp;</p>
		
		<div class="row">
			<p class="col s6"><span class="eo">Estas pano en la butiko.</span></p><p class="col s6">Il y a du pain dans la boutique.</p>
			<p class="col s6"><span class="eo">Estas urso en la kaĝo.</span></p><p class="col s6">Un ours est dans la cage. Il y a un ours dans la cage.</p>
		</div>
		
		<?php 
		} // fin section 11
		if ($section=="12") {
		?>

			<?php 
				getEkzercon(25,$persono_id);
			?>

		<?php 
		} // fin section 12
		if ($section=="13") {
		?>
		<p class="parto">
		Nous avons vu dans la deuxième leçon la façon d’indiquer le complément d’objet <i>direct</i> par la terminaison <b>-n</b>&nbsp;:<br>
		<span class="eo">Birdo kaptas insekto<b>n</b></span>. Cette forme s’appelle l’accusatif. </p>
		
		<p class="parto">Lorsqu’une phrase contient deux compléments d’objet, l’un des deux doit être un complément <i>indirect</i>. </p>
		<p>Par exemple :</p>
		<p><span class="eo">Mi aĉetas ŝuojn al la infanoj</span>&nbsp;: J’achète des chaussures aux enfants.</p>

		<div class="row">
			<p class="col s6">Le complément d’objet direct :</p><p class="col s4"><span class="eo">ŝuojn</span></p>
			<p class="col s6">Le complément d’objet indirect :</p><p class="col s4"><span class="eo">al la infanoj</span></p>
		</div>

		<p>Généralement le complément indirect est introduit par une préposition et dans ce cas il ne prend pas la terminaison de l’accusatif.</p> 
		
		<?php 
		} // fin section 13
		if ($section=="14") {
		?>
		<p class="parto">
		L’espéranto se veut clair et concis. Aussi pouvez-vous remplacer, dans
		certains cas, une préposition par la forme de l’accusatif – pour
		indiquer le but du mouvement, le temps, la mesure ou le prix.
		</p>
		<p>Exemples :</p>
		<div class="vortlisto row">
			<p class="col s6"><span class="eo">Mi veturas al Montrealo</span><br><i>ou</i>
			<br><span class="eo">Mi veturas Montrealon</span></p>
			<p class="col s6">Je vais à Montréal.</p>
		</div>
		<div class="vortlisto row">
			<p class="col s6"><span class="eo">Mi vojaĝis dum unu semajno.</span><br><i>ou</i>
				<br><span class="eo">Mi vojaĝis unu semajnon.</span></p>
			<p class="col s6">J’ai voyagé [pendant] une semaine.</p>
		</div>
		<p class="parto">
		Notez que cette «disparition» de la préposition et son remplacement par
		l’accusatif est possible également pour certains compléments d’objet
		indirects s’il n’y a pas de risque de confusion avec un complément
		d’objet direct.
		</p>
		
		<div class="vortlisto row">
			<p class="col s6"><span class="eo">Ŝi multe helpis al mi</span><br><i>ou</i>
			<br><span class="eo">Ŝi multe helpis min</span></p>
			<p class="col s6">Elle m’a beaucoup aidé.</p>
		</div>
		<div class="vortlisto row">
			<p class="col s6"><span class="eo">Mi demandos al li pri tio.</span><br><i>ou</i>
			<br><span class="eo">Mi demandos lin pri tio.</span><br><i>ou</i>
			<br><span class="eo">Mi demandos tion al li.</span></p>
			<p class="col s6">Je lui demanderai cela, je l’interrogerai à ce sujet.</p>
		</div>

		<?php 
		} // fin section 14
		if ($section=="15") {
		?>
			<?php 
				getEkzercon(26,$persono_id);
			?>
		
		<p>* <span class="eo">je</span> = à, à propos de, en rapport avec, etc.</p>
		<p>
		Il s’agit d’une préposition «joker» dont le sens est indéterminé, ce qui
		veut dire qu’elle est utilisée lorsque aucune autre préposition ne
		convient.</p>

		<p>Exemples : </p>
		<div class="vortlisto row">
			<p class="col s12 m6"><span class="eo">Li kredas je Dio</span> = Il croit en Dieu.</p>
			<p class="col s12 m6"><span class="eo">Je via sano&nbsp;!</span> = à votre santé&nbsp;!</p>
		</div>
		
		<p class="parto">On peut parfois utiliser <b>deux prépositions</b> à la suite l’une de l’autre
		pour nuancer le sens. </p>
		<p>Exemple : </p>
		<div class="vortlisto row">
			<p class="col s12"><span class="eo">La kato saltis <i>de sur</i> la tablo.</span> = Le chat a sauté de dessus la table.</p>
		</div>

		<p>
		Si une de ces prépositions est <span class="eo">al</span> – qui indique le but d’un mouvement
		– on aura plutôt recours à l’accusatif pour la remplacer.
		</p>
		<p>Exemples :</p>
		<div class="vortlisto row">
			<p class="col s12"><span class="eo">Ŝi iris <i>al en</i> la domo.</span> = <span class="eo">Ŝi iris en la domo<b>n</b>.</span></p>
			<p class="col s12"><span class="eo">La kato kuris <i>al sub</i> la tablo.</span> = <span class="eo">La kato kuris sub la tablo<b>n</b>.</span></p>
		</div>

		<p class="rimarko"><strong>REMARQUE</strong> : </p>
		<p>Cette affinité de l’accusatif avec l’idée de but d’un mouvement explique
		pourquoi il ne faut jamais utiliser l’accusatif après les prépositions
		qui indiquent déjà une direction ou un mouvement, comme <span class="eo">al</span>, <span class="eo">ĝis</span>
		ou <span class="eo">el</span>.</p>
		<p>Ainsi, l’on dira : <span class="eo">Ni veturas al Montrealo.</span> ou <span class="eo">Ni veturas
		Montrealon.</span> mais jamais <span class="eo">Ni veturas al Montrealon.</span> qui serait un
		pléonasme.</p>
	
		<?php 
		} // fin section 15
		if ($section=="16") {
		?>
		<p class="parto">
		La question correspondant à ce complément de lieu avec mouvement sera
		naturellement <span class="eo">kien&nbsp;?</span>, c’est-à-dire <span class="eo">kie&nbsp;?</span> avec la terminaison
		d’accusatif. Tous les adverbes de lieu ont cette possibilité de montrer le but d’un mouvement en prenant la terminaison d’accusatif.
		</p>
		<p>Exemple :</p>
		<div class="vortlisto row">
			<p class="col s6"><span class="eo">Kien vi veturis?</span></p><p class="col s6">Où êtes-vous allés ?</p>
			<p class="col s5 offset-s1"><span class="eo">– Montrealon.</span></p><p class="col s6">à Montréal (<i>but du mouvement</i>)</p>
			<p class="col s5 offset-s1"><span class="eo">– ien.</span></p><p class="col s6">quelque part (<i>but du mouvement</i>)</p>
			<p class="col s5 offset-s1"><span class="eo">– nenien.</span></p><p class="col s6">nulle part (<i>but du mouvement</i>)</p>
			<p class="col s5 offset-s1"><span class="eo">– ĝardenen.</span></p><p class="col s6">au jardin (<i>but du mouvement</i>)</p>

			<p class="col s6"><span class="eo">Kie vi estas?</span></p><p class="col s6">Où êtes-vous ?</p>
			<p class="col s11 offset-s1"><span class="eo">– en Montrealo.</span></p>
			<p class="col s11 offset-s1"><span class="eo">– ie.</span></p>
			<p class="col s11 offset-s1"><span class="eo">– nenie.</span></p>
			<p class="col s5 offset-s1"><span class="eo">– ĝardene.</span></p>
		</div>
		<p>Cette opposition <span class="eo">kie</span>/<span class="eo">kien</span> vous rappellera peut-être</p>
		<p><i>dónde / a dónde</i> en espagnol</p>
		<p><i>ubi / quo</i> en latin</p>
		<p><i>wo / wohin</i> en allemand</p>
		<p><i>gde / kuda</i> en russe</p>
	
		<?php 
		} // fin section 16
		if ($section=="17") {
		?>
		<p>Récapitulation des différents emplois de l’accusatif&nbsp;:</p>
		<p>1. complément d’objet direct, </p>
		<p>2. remplacement d’une préposition seule, </p>
		<p>3. remplacement de <em>al</em> dans une combinaison de deux prépositions, </p>
		<p>4. adverbe indiquant le mouvement vers un lieu.</p>

			<?php 
				getEkzercon(27,$persono_id);
			?>
	
		<?php 
		} // fin section 17
		if ($section=="18") {
		?>
			<p>
			Ouf&nbsp;! Cette leçon était bien longue. Toutefois elle consiste
			essentiellement en un approfondissement de notions déjà connues et
			elle n’a pas dû vous poser de problèmes insurmontables.
			</p>
			<p>
			Maintenant que nous avons entamé la deuxième moitié de ce cours, il
			n’est pas inutile de jeter un regard en arrière pour voir le chemin
			parcouru. Depuis combien de temps avez-vous commencé l’étude de ce
			cours&nbsp;? N’est-ce pas surprenant de voir tout ce que vous êtes déjà
			capable de comprendre et de dire&nbsp;? Évidemment vous n’avez pas
			nécessairement assimilé tout le vocabulaire que nous vous avons
			présenté mais vous sentez bien qu’à chaque leçon vous faites un grand
			pas en avant.
			</p>
	
<?php 
	recapitulatif_lecon_avant_envoi('CG',$leciono,$persono_id);
} // fin section 
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
