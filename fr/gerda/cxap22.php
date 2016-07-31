<?php 
$titolo="22 (dudek du)";
$leciono = 22;
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

			<h3>En la kaverno</h3>
			<div class="row dialogo">
				<div class="col s12 m8">
					<p>Baldaŭ venis la policanoj, por ilin liberigi. Gerda reiris
					hejmen, al siaj filino kaj edzo. Sed Bob rapidis al la flughaveno. Li
					volis ĉeesti kun Linda kaj Tom, kiam la policano arestos la kaptintojn
					de Gerda.</p>
					<p>Estis sufiĉe multekosta vojaĝo, sed la familio de Gerda –
					riĉa familio – pagis por ili la bileton, tiel esprimante sian
					dankemon.</p>
					<p>Ĉar la policano kaj la gejunuloj sciis pli frue ol la
					ŝtelistoj, kie troviĝas la trezoro, ili havis multe da tempo por
					prepari sin. Ili ne dubis, ke la aliaj venos kiel eble plej baldaŭ,
					kaj ke la tuta bando venos. Kutime tiaj homoj ne fidas sin reciproke,
					kaj volas kune ĉeesti por certiĝi, ke neniu kaŝos por si parton de
					la trovaĵo.</p>
					<p>La loko indikita troviĝis ĉe la piedo de monto, en kaverno,
					kie, videble, neniu paŝis jam de jaroj.</p>
					<p>"Feliĉe, ke ili ne kaŝis tiun trezoron trans la maro,
					ekzemple sur insulo, kien nur per ŝipo oni povas iri. Se estis vere
					internacia societo, kiel Gerda diris, tio estis ebla, ĉu ne?" Tiel
					parolis Linda.</p>
					<p>"Vi pravas," diris Tom. "Mi tute ne ŝatus vojaĝi ŝipe. La
					maro ĉiam igas min malsana. Mi ŝatas rigardi la maron, resti ĉe la
					maro, libertempi apud la maro, sed ne vojaĝi per ŝipo sur ĝi: ŝipoj
					konstante dancas sur la maro, kaj ilia danco tute ne plaĉas al mi.
					Feliĉe, ke hodiaŭ oni povas iri preskaŭ ien ajn aviadile.  Aviadiloj
					preskaŭ tute ne dancas. Sed eĉ aviadiloj nur duone plaĉas al mi.
					Plej multe mi preferas, kiam mi veturas sur tero, sur bona firma tero.
					Mi bezonas sub mi ion pli firman ol akvo kaj aero. Plej plaĉe estas
					promeni piede sur bona tera vojo. Mi…"</p>
					<p>Sed Linda interrompis lian paroladon, iom strangan en tiuj
					kondiĉoj, en kiuj ili troviĝis:</p>
					<p>"Kiam alvenos la trezor-serĉantoj, laŭ via opinio?" ŝi
					demandis la policanon.</p>
					<p>"Morgaŭ, tute certe. Ili ne povus alveni hodiaŭ, ĉar ne plu
					estis aviadilo post la nia, kaj aŭte ili bezonus la tutan nokton.
					Verŝajne Bob flugos en la sama aviadilo."</p>
					<p>La temperaturo estis plaĉa, kaj bela la vetero. Ili starigis
					sian tendon en la proksimeco, tamen bone prizorgante, ke ĝi ne estu
					videbla por alvenantoj. La sola maniero, laŭ kiu la trezorserĉantoj
					povus alveni antaŭ la morgaŭa tago, estus, ke ili flugu per malgranda
					aviadilo, speciale luita. Sed lui specialan aviadilon kostas tiel
					multe, ke plej verŝajne ili ne uzos tiun rimedon.</p>
					<p>La sekvantan matenon, niaj amikoj vekiĝis frue. Tuj la
					policano kaj la gestudentoj aranĝis, ke ĉiu el ili, unu post la alia,
					gardostaros en loko, de kie eblas facile observi la solan vojon — aŭ
					pli ĝuste vojaĉon – laŭ kiu oni povas proksimiĝi al la kaverno,
					kaj ke ĉiu havos en la kaverno sian difinitan kaŝejon.</p>
					<p>Post tri horoj da atendado, io fine okazis. Linda, kiu
					gardostaris en la iom alta observejo, faris la deciditan signalon, kaj
					rapide kuris de supre al siaj kunuloj.</p>
					<p>"Aŭto alvenas!" ŝi kriis.</p>
					<p>En tiu ege soleca regiono, kiu povus veni aŭte per tiu tera
					vojaĉo, se ne la trezorserĉantoj? La tri atendantoj sin kaŝis, ĉiu
					en sia difinita loko, malantaŭ rokoj, da kiuj oportune troviĝis multe
					en la kaverno.</p>
				</div>
				<div class="col s12 m4">
					<img src="bildoj/gerda22-1.gif" class="responsive-img">
				</div>
			</div>


		<?php 
		} // fin section 1
		if ($section=="2") {
		?>

			<section class="klarigo">
				<h4>-eca : <i>relatif à, qui a l'apparence, certaines des caractéristiques</i></h4>
				<p><span class="eo">infano</span> : enfant → <span class="eo">infaneca</span> : infantile</p>
				<p><span class="eo">sola</span> : seul → <span class="eo">soleca</span> : solitaire</p>
				<p><span class="eo">ruĝa</span> : rouge → <span class="eo">ruĝeca</span> : rougeaud, rougeâtre</p>
			</section>

		<?php 
		} // fin section 2
		if ($section=="3") {
		?>

			<div class="vortlisto row">
				<div class="col s12 l6">
					<p><span class="eo">aviadi</span> : voler (en avion)</p>
					<p class="sekva"><span class="eo">aviadilo</span> : avion</p>
					<p><span class="eo">danci</span> : danser</p>
					<p><span class="eo">familio</span> : famille</p>
					<p><span class="eo">gardostari</span> : monter la garde</p>
					<p><span class="eo">hodiaŭ</span> : aujourd'hui</p>
					<p><span class="eo">kosti</span> : coûter</p>
					<p><span class="eo">maro</span> : mer</p>
					<p><span class="eo">morgaŭ</span> : demain</p>
					<p><span class="eo">multekosta</span> : cher, chère</p>
					<p><span class="eo">pagi</span> : payer</p>
					<p><span class="eo">parto</span> : partie</p>
				</div>
				<div class="col s12 l6">
					<p><span class="eo">prepari</span> : préparer</p>
					<p><span class="eo">rimedo</span> : moyen, ressource, remède</p>
					<p><span class="eo">supre</span> : en-haut</p>
					<p class="sekva">→ <span class="eo">malsupre</span> : en-bas</p>
					<p class="sekva">→ <span class="eo">supren</span> : vers le haut (direction)</p>
					<p class="sekva">→ <span class="eo">malsupren</span> : vers le bas (direction)</p>
					<p><span class="eo">ŝipo</span> : bateau</p>
					<p><span class="eo">temperaturo</span> : température</p>
					<p><span class="eo">tendo</span> : tente</p>
					<p><span class="eo">tero</span> : terre, sol</p>
					<p><span class="eo">vetero</span> : temps (météo)</p>
					<p><span class="eo">vojaĝi</span> : voyager</p>
				</div>
			</div>

		<?php 
		} // fin section 3
		if ($section=="4") {
		?>

			<fieldset class="ekzerco">
				<legend><b>Demandoj</b> </legend>
				<input type="hidden" name="013_cxap22.0" value="Demandoj">
				<div class="tasko">
				<?php $demandoj=array (
					1 => "Kie troviĝas la loko indikita?",
					2 => "Kial Tom tute ne ŝatus vojaĝi ŝipe?",
					3 => "Kiel oni povas iri preskaŭ ĉien ajn?",
					4 => "Kiom da homoj atendas la trezorserĉantojn?",
					5 => "Kion rimarkas Linda observante la vojon?",
				);
				ekzerco(True, 2);
				?>
				</div>
			</fieldset>
					
			<fieldset class="ekzerco">
				<legend>Trovu la vortojn.</legend>
				<input type="hidden" name="013_cxap22.1" value="Trovu la vortojn.">
				<div class="ekzemplo">
					<p><em>Ekzemple:</em></p>
					<p>ekpreni kaj firme teni → ekpreni kaj firme teni : <b>kapti</b></p>
				</div>		
				<p class="primaire-texte texte-moyen">La vortoj estas:</p>
				<p class="primaire-texte texte-moyen">aparato, aperi, bezoni, dokumento, edzo, elporti, filo, frato, gardi, hejmo, historio, horloĝo, ĵeti, kapti, konduki, kontroli, lasta, legi, letero, mono, motivo, obei, obstina, pasi, plaĉi, preni, preskaŭ, problemo, promesi, riĉa, sata, serĉi, skribi, solvi, suferi, ŝanĝi, ŝteli, teruro, tipo, uzi</p>
		
				<div class="tasko">
				<?php $demandoj=array(
					6 => "aliigi : [15].",
					7  => "aparato por montri la horojn : [15].",
					8  => "atenti, zorgi kontraŭ danĝero aŭ ebla malbono, teni : [15].",
					9 => "certigi, ke oni ion faros : [15].",
					10  => "detale esplori, ĉu io estas ĝusta aŭ ĝuste farita : [15].",
					11 => "domo aŭ loko, kie oni konstante vivas : [15].",
					12 => "ekpreni kaj firme teni : [15].",
					13 => "ekzemplo prezentanta iun specon : [15].",
					14 => "estanta post ĉiuj aliaj : [15].",
					15 => "firme restanta ĉe siaj opinio kaj volo : [15].",
					16 => "grava skribaĵo : [15].",
					17 => "irigi kun si : [15].",
					18 => "kapti por teni, porti aŭ uzi; havigi al si; akcepti, ricevi : [15].",
					19 => "kaŝe forpreni ion de alia homo : [15].",
					20 => "kontentigi, feliĉigi, ĝojigi : [15].",
					21 => "kun multe da havaĵo, da mono, da io ajn : [15].",
					22 => "kunaĵo de objektoj kaj iloj servanta por ion fari : [15].",
					23 => "ne bezonanta manĝaĵon : [15].",
					24 => "ne kontraŭstari, vivi kun io ĝisfine : [15].",
					25 => "ne tute, sed ne tute ne : [15].",
					26 => "pagilo konsistanta el pecoj kun difinitaj valoroj : [15].",
					27 => "preni kiel rimedon, agi per io por kontentigi bezonon : [15].",
					28 => "provadi por trovi : [15].",
					29 => "rapide forigi de si tra la aero : [15].",
					30 => "scienco pri pasintaj okazaĵoj; rakonto pri okazintaĵo : [15].",
					31 => "sekvi per okuloj kaj kompreni ion skribitan : [15].",
					32 => "sekvi tion, kion volas alia persono : [15].",
					33 => "senti doloron, travivi malfeliĉaĵon : [15].",
					34 => "sin vidigi, ekmontriĝi, iĝi videbla : [15].",
					35 => "skribaĵo sendita al alia homo : [15].",
					36 => "solvota demando, malfacilaĵo : [15].",
					37 => "suferi pro manko de iu necesa, necesigi ion : [15].",
					38 => "surpaperigi vortojn : [15].",
					39 => "timego : [15].",
					40 => "tio, kio igas iun agi aŭ opinii en iu maniero : [15].",
					41 => "trairi, preteriri; transirante malaperi, ne daŭri : [15].",
					42 => "trovi la respondon al demando, la rimedon kontraŭ malfacilaĵo : [15].",
					43 => "vira ido de samaj gepatroj : [15].",
					44 => "vira homido : [15].",
					45 => "viro ligita al virino por kunvivado kaj nasko de infanoj : [15]."
					);
					plenigEkzerco("U");
					?>
					</div>
			</fieldset>
		
		<?php 
		} // fin section 4
		if ($section=="5") {
		?>

			<h3>xxxx</h3>

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