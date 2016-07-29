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