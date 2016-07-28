<?php 
$titolo="21 (dudek unu)";
$leciono = 21;
$section=isset($_GET["section"])?$_GET["section"]:"1";
include "gerdakapo.inc.php";
?>
<div class="row">
	<article class="col s12 m10 l7 offset-m1 offset-l1">
		
		<section id="leciono-enhavo">
		<?php 
		getTitoloLecionero('GR',$leciono,$section);

		if ($section=="1") {
			include "gerdasono.inc.php";
		?>

			<h3>La sekreta societo</h3>
			<div class="row dialogo">
				<div class="col s12 m8">
					<p>Gerda sentas sin pli bone. Ŝi ĵus finis manĝi. Foriris
					Linda, Tom kaj la policano. Ŝi parolas kun Bob, tre mallaŭte. Ili ja
					devas atenti, ĉu iu proksimiĝas aŭ ne. Feliĉe, eĉ sen speciale
					aŭskulti, ŝi ĉiam bone aŭdis, sufiĉe frue, kiam la aĉulo venas.
					Bob plaĉas al ŝi. Li estas granda kaj forta, kun esprimo de bonkora,
					sindonema hundo.</p>
					<p>Ili parolas pri siaj vivoj, pri la lastaj okazaĵoj. Kiam ŝi
					parolas pri sia edzo, lia vizaĝo ŝanĝiĝas, alprenas iom malĝojan
					esprimon. Ĉu li enamiĝus al ŝi?</p>
					<p>Kaj jen aŭdiĝas paŝoj. Bob saltas sub la liton, provas
					rapide trovi ne tro malkomfortan pozicion sub la lito. "Ne brui," li
					diras al si, "plej grave, plej necese estas ne brui!"</p>
					<p>Envenas la gardanto, la aĉa malgrasulo, kiu, per siaj vortoj
					pri manĝo, tiom suferigis Gerdan. Sed ĉi-foje ŝi povos kontentigi
					lin. Kia plezuro!</p>
					<p>"Mi konsentas," krias Gerda, kiam la maldika aĉulo malfermas
					la pordon. "Mi akceptas vian proponon. Mi ne plu elportas. Mi tradukos
					vian aĉan paperon. Liberigu mian filinon, kaj donu al mi manĝi, mi
					petas."</p>
					<p>"Jen," simple diras la maldikuleto, kaj li elprenas el sako
					panon, kolbason, kukon, fruktojn, ĉokoladon, kaj eĉ botelon da lakto.
					Gerda manĝas silente; ŝi povus manĝi eĉ pli, kvankam ŝi ĵus iom
					manĝis. Bob, aŭdante la manĝobruon, pli kaj pli malsatas, sed kion
					li povus fari?</p>
					<p>"Nu, bonvolu klarigi al mi, kio estas skribita sur tiu malnova
					papero," la vizitanto diras.</p>
					<p>Kaj Gerda klarigas. Ŝi rakontas, ke temas pri la trezoro de la
					Lumoserĉantoj. La Lumoserĉantoj estis sekreta societo, kiu naskiĝis
					en la dek-kvina jarcento kaj daŭris, jen forta, jen malforta, laŭ la
					epokoj, ĝis la mezo de la dek-oka jarcento. Ĝi havis membrojn en tre
					multaj landoj, en popoloj plej malsamaj.  Katolikoj, protestantoj,
					ortodoksuloj, judoj, islamanoj, budhanoj kaj aliaj estis membroj de tiu
					internacia aŭ supernacia societo. Ilia celo estis sekrete labori por
					la unuigo de la mondo, de la popoloj, por la harmoniigo de la religioj,
					kaj por ke la malsamaj tradicioj interkompreniĝu. Ili estis morala kaj
					filozofia elito. Ili estis elpensintaj sekretan lingvon, kiu ebligis al
					ili komuniki, el kiu ajn lando aŭ popolo ili estis. La ŝtatoj, kiam
					ili malkovris la ekziston de la Lumoserĉantoj, ektimis tiujn homojn,
					miskomprenis iliajn celojn, kaj ilin persekutis. Inter la
					Lumoserĉantoj, tre riĉaj homoj troviĝis. Tial, laŭ diversaj
					malnovaj dokumentoj, ilia trezoro estas multvalora. Tiu ĉi papero
					estas fotokopio de dokumento, kiu tre precize indikas, kie oni kaŝis
					la trezoron.</p>
					<p>Gerda klarigas, tradukas, kaj la viro notas ĉiun detalon sur
					etan notlibron. Kiam ŝi finis, li diras:</p>
					<p>"Dankon. Nun ni havas, kion ni deziris. Mi foriras. Mi lasas
					vin tie ĉi. Ni decidos poste, kion ni faros el vi. Adiaŭ, belulino,
					adiaŭ."</p>
					<p>Nur post kiam la pordo fermiĝis kaj la bruo de la paŝoj
					forsvenis, aŭdiĝas de sub la lito voĉo, kiu diras:</p>
					<p>"Ĉu vi lasis al mi iom de tiu kuko?"</p>
				</div>
				<div class="col s12 m4">
					<img src="bildoj/gerda21-1.gif" class="responsive-img">
				</div>
			</div>
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