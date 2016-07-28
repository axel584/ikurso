<?php 
$titolo="24 (dudek kvar)";
$leciono = 24;
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

			<h3>La trezoro de la Lumo</h3>
			<div class="row dialogo">
				<div class="col s12 m8">
					<p>"Nur papero!" kriis Ronga.</p>
					<p>"Ankaŭ estas libro!" diris Marta, sed jam Ronga laŭtlegis:
					<i>"Tie ĉi kuŝas la Trezoro de la Lumo. Pro la daŭra
					persekutado, la Sankta kaj Sekreta Frataro de la Lumo-Serĉantoj
					baldaŭ ĉesos ekzisti. Sed ĝia Spirito plu vivos. Iun tagon, homoj
					retrovos la Sanktajn Principojn kaj rekomencos ilin apliki. Por ili
					estas ĉi tie kaŝita la Trezoro de la Lumo.</i></p>
					<p><i>"Ĝi estas skribita en la Speciala Lingvo de la Frataro, sed
					certe homoj troviĝos, kiuj ĝin povos kompreni. La Trezoro konsistas
					el la arto praktike apliki kaj defendi la Veron, la Justecon, la
					Dignecon, la Respekton al ĉiu homo, la Interkomprenon, la Honestecon,
					la Amon, la Kompatemon kaj la Konon de si mem kaj de sia ĝusta loko.</i></p>
					<p><i>"Por la Frataro, la Spiritaj Valoroj estas la plej altaj. Tial
					ĝia Trezoro estas pure Spirita.</i></p>
					<p><i>"Al vi, homo, kiu trovis ĝin, trans multaj aŭ malmultaj
					tagoj, semajnoj, monatoj, jaroj, jardekoj aŭ jarcentoj, Saluton kaj
					Fratecon!"</i></p>
					<p>
								* * *
					</p>
					<p>Ili sidis en komfortaj brakseĝoj en la hejmo de Gerda.</p>
					<p>"Kio okazis poste?" ĉi-lasta demandis.</p>
					<p>"Ni malkaŝis nin, kaj mi ilin arestis," diris la policano.
					"La loka polico estis antaŭe informita, kaj enŝlosis ilin."</p>
					<p>"Ĉu vi scias, kiel komenciĝis la afero?" scivolis Tom.</p>
					<p>"Proksimume. Kiam Marta estis flegistino en la hospitalo, ŝi
					ĉeestis kirurgian operacion de historiisto, Prof. (=Profesoro) Kosadi.
					Kiam ĉi-lasta estis duone dormanta, duone vekiĝanta, li parolis
					nekonscie pri la trezoro de la Lumoserĉantoj. Li diris, ke temas pri
					malnova societo, elita, tre riĉa, pri kies trezoro li eksciis hazarde
					legante en la Vatikana Biblioteko."</p>
					<p>"Jes," daŭrigis Gerda. "Tiun parton de la afero mi konas. Li
					faris historian esploron en la Biblioteko Vatikana. Inter la paĝoj de
					malnova libro, li trovis dokumenton en la sekreta lingvo de la
					Lumoserĉantoj. Li antaŭe kelktempe interesiĝis pri tiu sekreta
					societo internacia, kaj iom komprenis ĝian sekretan lingvon. Li
					komprenis, ke tiu papero indikas, kie troviĝas la trezoro de la
					Lumoserĉantoj, sed mem ne povis traduki ĉiujn detalajn indikojn. Li
					ricevis la permeson fotokopii la dokumenton. Foje, kiam ni
					renkontiĝis, li parolis pri tio al mi. Li diris, ke eble homoj provos
					trovi tiun trezoron, ĉar pli kaj pli multaj personoj interesiĝas pri
					la malnovaj sekretaj societoj. Li sciis, ke mi estas la sola persono en
					la mondo, kiu vere ĝisfunde studis tiujn malnovajn sekretajn lingvojn,
					kaj li petis min solene promesi, ke mi neniam kunlaboros kun homoj
					serĉantaj la trezoron pro materia intereso."</p>
					<p>"Kion li volis, ke oni faru pri ĝi?" Linda demandis.</p>
					<p>"Ke ĝi transiru al iu muzeo aŭ ŝtata institucio."</p>
					<p>Tom intervenis:</p>
					<p>"Kiel Marta ricevis la fotokopion?"</p>
					<p>"Tion ŝi mem klarigis al mi," respondis la policano: "ŝi
					konstatis, ke la substanco uzita antaŭ la operacio por dormigi la
					profesoron estas unu el tiuj, kiujn oni kelkfoje uzas por t.n. (= tiel
					nomata) narkoanalizo. Post la operacio, kiam la profesoro kuŝis en sia
					ĉambro – li havis privatan ĉambron kaj do estis sola – ŝi injektis
					al li tiun substancon, kaj pridemandis lin. Sub la influo de la
					koncerna substanco, oni dormas, sed dormante aŭdas kaj respondas
					demandojn, ĝenerale dirante la veron. Li do dorme respondis al ŝi.
					Per tiu metodo ŝi eksciis pri tio, ke nur unu persono en la mondo,
					nome Gerda, komprenas tiun sekretan lingvon, kaj pri multaj aliaj
					aferoj."</p>
				</div>
				<div class="col s12 m4">
					<img src="bildoj/gerda24-1.gif" class="responsive-img">
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