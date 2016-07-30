<?php 
$titolo="8 (ok)";
$leciono = 8;
$section=isset($_GET["section"])?$_GET["section"]:"1";
include "gerdakapo.inc.php";
?>
<div class="row">
	<article class="col s12 m10 l7 offset-m1 offset-l1">
		
		<section id="leciono-enhavo">
		<?php 
		getTitoloLecionero('GR',$leciono,$section);
		?>
		<?php
		if ($section=="1") {
			include "gerdasono.inc.php";
		?>

			<h3>Linda ne scias, kion fari</h3>
			<div class="row dialogo">
				<div class="col s12 m8">
					<p>En la universitata memserva restoracio, Linda sidas kaj pensas.
					ŝi pensas ne tre trankvile. Fakte, ŝiaj pensoj iĝas pli kaj pli
					maltrankvilaj.</p>
					<p>Ŝi observas la junan viron, kiu metis ion en la kafon de
					Gerda.</p>
					<p>Ŝi pli kaj pli maltrankviliĝas.</p>
					<p>Tom kaj Bob estas for jam longe. Ili ne revenas. ĉu do vere
					okazis io al Gerda? Sed kio okazis? ĉu io grava?</p>
					<p>Linda observas la junulon kaj pensas:</p>
					<p>"Kion mi faros, se li ekstaros kaj foriros?</p>
					<p>"Ĉu mi sekvos lin? ĉu mi sekvu lin?</p>
					<p>"Kion mi faru, se li iros eksteren? ĉu mi sekvu lin eksteren?
					ĉu mi sekvu lin ekstere? Mi ne scias, kion mi faru. Mi ne scias, kion
					mi faros. Mi ne scias, ĉu mi sekvos lin aŭ ne.</p>
					<p>"Kaj se li foriros en aŭto? ĉu ankaŭ mi sekvu lin aŭte?</p>
					<p>"Jam estas vespero. Baldaŭ venos nokto. Jes. Baldaŭ
					noktiĝos. ĉu mi sekvu lin nokte?</p>
					<p>"Kaj eĉ se li ne iros eksteren de la universitato, eĉ se li
					restos ĉi tie, ĉu mi sekvu lin?</p>
					<p>
					"Se li eliros tra tiu ĉi pordo, li iros en la koridoron al iu
					ĉambro. Ĉu mi sekvu lin en la koridoron? Ĉu mi sekvu lin en la
					koridoro? Ĉu mi sekvu lin en la ĉambron, en kiun li eniros? Ne.
					Neeble. Mi atendos en la koridoro. Sed se nenio okazos? Se li restos
					longe plu en la ĉambro?</p>
				</div>
				<div class="col s12 m4">
					<img src="bildoj/gerda08-1.gif" class="responsive-img">
				</div>
			</div>
			<div class="row dialogo">
				<div class="col s12 m8">
					<p>"Kaj se li eliros tra tiu pordo, li iros eksteren, verŝajne al
					la urbo. Ĉu mi sekvu lin al la urbo? Ĉu mi sekvu lin en la urbon?
					Ĉu mi sekvu lin en la urbo?</p>
					<p>"Se li iros piede, eble li vidos min, verŝajne li vidos min.
					Li suspektos, ke mi lin sekvas. Li turnos sin al mi. Mi ektimos. Mi
					paliĝos kaj tuj poste ruĝiĝos. Ĉiaokaze, mi maltrankviliĝos. Jam
					nun mi maltrankviliĝas.</p>
					<p>"Se li iros per buso, li eĉ pli certe vidos, ke mi sekvas lin,
					ĉar ni devos kune atendi ĉe la haltejo."</p>
					<p>Linda ne sukcesas decidi, kion ŝi faru.</p>
					<p>Ŝi timas. Ŝia koro batas rapide. Ŝi volus, ke Tom kaj Bob
					estu kun ŝi, ke ili helpu ŝin, ke ili helpu ŝin decidi. Ŝi estas
					tute sola. Ŝi sentas, ke ŝia koro rapidiĝas, sed ŝi ne scias, kion
					fari.</p>
					<p>Kaj jen, antaŭ ol ŝi povis decidi, antaŭ ol ŝi sukcesis
					retrankviliĝi, jen la juna viro ekstaras. Li rigardas al la koridora
					pordo. ĉu tien li iros? Li rigardas al la pordo, tra kiu oni eliras al
					la urbo. ĉu tien? Jes, tien li iras.</p>
					<p>Kaj Linda aŭtomate ekstaras kaj ekpaŝas al la sama pordo. Ne
					ŝi decidis. ŝajnas, ke ŝia korpo decidis mem. ŝajnas, ke ŝiaj
					kruroj agas mem. Nu, ĉiaokaze, jen Linda sekvas lin. Al kiu mistera
					destino?</p>
				</div>
				<div class="col s12 m4">
					<img src="bildoj/gerda08-2.gif" class="responsive-img">
				</div>
			</div>

		<?php 
		} // fin section 1
		if ($section=="2") {
		?>

			<section class="klarigo">
		    	<h4>-ejo : <i>indique l'emplacement, le lieu (souvent collectif)</i></h4>
				<p><span class="eo">dormi</span> : dormir → <span class="eo">dormejo</span> : «dortoir» («chambre» se dit <span class="eo">dormoĉambro</span>)</p>
				<p><span class="eo">lerni</span> : apprendre → <span class="eo">lernejo</span> : école</p>
	
				<p><span class="eo">li aŭtas en la urbo</span> : il se déplace en voiture dans la ville<br>
					<span class="eo">li aŭtas en la urbon</span> : il se rend, en voiture, en ville</p>
				<p><span class="eo">li aŭtas tie</span> : il se déplace en voiture là-bas<br>
					<span class="eo">li aŭtas tien</span> : il se rend en voiture là-bas</p>
	
				<p><span class="eo">ŝi mem diris ĝin</span> : elle le dit elle-même<br>
					<span class="eo">ŝi diris ĝin al si</span> : elle se le dit (mot-à-mot : elle le dit à soi)</p>
				<p><span class="eo">li diris ĝin al si</span> : il se le dit<br>
					<span class="eo">li diris ĝin al ŝi</span> : il le lui dit à elle)</p>
	
				<p><span class="eo">ili komprenos tion mem</span> : ils comprendront cela d'eux-mêmes<br>
					<span class="eo">ili komprenos sin</span> : ils se comprendront<br>
					<span class="eo">ili komprenos unu la alian</span> : ils se comprendront l'un l'autre<br>
					<span class="eo">ili komprenos ilin</span> : ils les comprendront</p>
	
				<p><span class="eo">li servas lin</span> : il le sert<br>
					<span class="eo">li servas sin</span> : il se sert</p>
	
				<p><span class="eo">li amis ŝian flegistinon</span> : il aimait son infirmière à elle<br>
					<span class="eo">li amis lian flegistinon</span> : il aimait l'infirmière d'un autre<br>
					<span class="eo">li amis sian flegistinon</span> : il aimait son infirmière (sa propre infirmière)</p>
					
				<h4><i>j'irai en voiture là-bas</i></h4>
	
				<p><span class="eo">mi tien iros aŭte</span> : j'irai là-bas «automobilement»</p>
				<p><span class="eo">mi tien iros per aŭto</span> : j'irai là-bas au moyen d'une voiture</p>
				<p><span class="eo">mi tien iros en aŭto</span> : j'irai là-bas dans une voiture</p>
				<p><span class="eo">mi tien aŭtos</span> : j'«automobilerai» là-bas</p>
			</section>

		<?php 
		} // fin section 2
		if ($section=="3") {
		?>

			<div class="vortlisto row">
				<div class="col s12 l6">
					<p><span class="eo">atendi</span> : attendre</p>
					<p><span class="eo">aŭ</span> : ou</p>
					<p><span class="eo">aŭto</span> : voiture, automobile <span class="eta">[<i><b>aou</b>-to</i>]</span></p>
					<p><span class="eo">aŭtomato</span> : automate</p>
					<p><span class="eo">baldaŭ</span> : bientôt</p>
					<p><span class="eo">buso</span> : car, bus, autocar</p>
					<p><span class="eo">ĉambro</span> : chambre, pièce dans une maison ou un bâtiment</p>
					<p class="sekva tab"><span class="eo">dormoĉambro</span> : chambre à coucher</p>
					<p class="sekva tab"><span class="eo">manĝoĉambro</span> : salle à manger</p>
					<p><span class="eo">ĉar</span> : parce que</p>
					<p><span class="eo">ĉiaokaze</span> : dans tous les cas, en tout cas</p>
					<p><span class="eo">destino</span> : destin, destinée</p>
					<p><span class="eo">eĉ</span> : même, et en plus</p>
					<p class="sekva tab"><span class="eo">li promenas senhalte, eĉ nokte</span> : il se promène sans cesse, même la nuit</p>
					<p><span class="eo">ekster</span> : hors de, à l'extérieur de (préposition)</p>
					<p class="sekva"><span class="eo">ekstere</span> : dehors, à l'extérieur (adverbe, lieu)</p>
					<p class="sekva"><span class="eo">eksteren</span> : vers le dehors, vers l'extérieur (adverbe, direction)</p>
					<p><span class="eo">el</span> : hors de, de</p>
					<p><span class="eo">helpi</span> : aider</p>
					<p><span class="eo">korpo</span> : corps</p>
					<p><span class="eo">kruro</span> : jambe</p>
				</div>
				<div class="vortlisto row">
					<p><span class="eo">longa</span> : long(ue)</p>
					<p><span class="eo">mem</span> : soi-même</p>
					<p class="sekva"><span class="eo">mi mem, vi mem</span> : moi-même, toi-même</p>
					<p class="sekva">→ <span class="eo">memserva restoracio</span> : cafétéria, restaurant self-service</p>
					<p><span class="eo">nokto</span> : nuit</p>
					<p><span class="eo">paŝi</span> : marcher</p>
					<p class="sekva"><span class="eo">paŝo</span> : pas (nom)</p>
					<p><span class="eo">per</span> : par, à l'aide de (instrument, moyen de transport...)</p>
					<p><span class="eo">ruĝa</span> : rouge</p>
					<p><span class="eo">sekvi</span> : suivre</p>
					<p><span class="eo">senti</span> : ressentir, sentir, éprouver</p>
					<p><span class="eo">servi</span> : servir</p>
					<p><span class="eo">si</span> : se, soi, lui, elle, eux (pronom réfléchi 3ème personne)</p>
					<p><span class="eo">suspekti</span> : suspecter</p>
					<p><span class="eo">tien</span> : vers là, vers là-bas</p>
					<p class="sekva">iru tien !</span> : allez là-bas !</p>
					<p class="sekva">venu ĉi tien !</span> : venez ici !</p>
					<p><span class="eo">tomato</span> : tomate</p>
					<p><span class="eo">tra</span> : à travers</p>
					<p><span class="eo">urbo</span> : ville</p>
					<p><span class="eo">vespero</span> : soir</p>	
				</div>
			</div>

		<?php 
		} // fin section 3
		if ($section=="4") {
		?>

			<fieldset class="ekzerco">
				<legend><b>Demandoj</b> </legend>
				<input>
				<div class="tasko">
				?>
				</div>
			</fieldset>

		<?php 
		} // fin section 4
		if ($section=="5") {
		?>

			<h4>xxxx</h4>

		<?php 
		} // fin section 5
		?>

		</section>
		
		<section id="leciono-fino">
			<div id="marko" class="right-align">
				<?php getBoutonFinSection('GR',$leciono,$section,$persono_id); ?>
				<a id="farita" class="btn-floating btn-large light-blue darken-1 hide"><i class="material-icons">done_all</i></a>
			</div>
			<div class="ligoj">
				<?php getLecioneroAntauxa('GR',$leciono,$section); ?>
				<?php getLecioneroVenonta('GR',$leciono,$section); ?>
			</div>
		</section>
		
	</article>
	
	<aside class="col s12 m10 l3 offset-m1 push-l1">
								
		<ul class="collapsible" data-collapsible="expandable">

			<?php 
			// On affiche le sommaire de la lecon
			getEnhavtabelo('GR',$leciono); 
			?>
		</ul>	
		
		<p>
			Elŝutu ĉiujn rakontojn (entute: 25) en unu dosiero:
			 <a href="<?php echo $vojo;?>fr/gerda/son/gerda-malaperis.zip">gerda-malaperis.zip</a>
		</p>
		
	</aside>
</div>

<?php include "gerdapiedo.inc.php"; ?>