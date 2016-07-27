<?php 
$titolo="17 (dek sep)";
$leciono = 17;
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

			<h3>Mi solvos la problemon</h3>
			<div class="row dialogo">
				<div class="col s12 m8">
					<p>"Sed kial, kial, kial?" diris la policano preskaŭ krie al sia
					edzino, kiu estis lia plej helpema kunlaboranto. "Diru al mi kial, kaj
					mi solvos la problemon. Oni ne kaptas homon por la simpla plezuro
					travivi aventuron! ŝi ne estas riĉa. Ne kun la espero ricevi monon
					ili ŝin kaptis. ŝi ĉiam vivis plej trankvilan, honestan vivon. Do,
					ne ĉar ŝi enmiksis sin en iun kriman agadon ili ŝin kaptis. Pro kio
					do? Por kio?"</p>
					<p>"Ŝi instruas, vi diris al mi. Kion do ŝi instruas? Kio estas
					ŝia fako?"</p>
					<p>"Ŝi instruas historion, sed ŝi estas specialisto pri la
					sekretaj lingvoj de la dek-sepa kaj dek-oka jarcentoj."</p>
					<p>"Pro tio verŝajne ŝi malaperis, sed ni ne trovos la motivon
					uzante nur nian imagon. Ni prefere uzu la faktojn. Ni provu kunmeti
					ilin, rekunmeti la sinsekvon de la okazaĵoj. Kiel la afero
					komenciĝis?"</p>
					<p>"Ni ne scias multon. Mi raportu jene. Du gestudentoj -- Tom kaj
					Linda -- rimarkis, ke alta blondulo metas ion en la tason de Gerda. Ili
					rimarkis pro lia kaŝa, ŝtela maniero agi. Iom poste, Gerda eliras el
					la memserva restoracio tra la pordo koridora.  Tuj poste aŭdiĝas
					bruo, kvazaŭ iu falus. Bob, kiu aliĝis al Tom kaj Linda intertempe,
					eliras kune kun Tom. Ili trovas Gerdan en la koridoro: ŝi kuŝas
					senkonscia. Tom foriras serĉe al helpo, dum Bob gardas la junan
					profesorinon. Kiam Tom revenas kun la flegistino, Gerda malaperis, sed
					ĉi-foje Bob estas senkonscia, batita al-kape.  Intertempe la blondulo
					eliris tra la alia pordo de la memserva restoracio, kaj sekvis Linda.
					ŝi sukcesas kunveturi en lia aŭto, sed ne sukcesas igi lin diri ion
					helpan. Tamen ŝi notas la numeron, markon kaj tipon de la aŭto..."</p>
				</div>
				<div class="col s12 m4">
					<img src="bildoj/gerda17-1.gif" class="responsive-img">
				</div>
			</div>

			<div class="row dialogo">
				<div class="col s12 m8">
					<p>"Ĉu la aŭto estis lia? ĉu ne estis ŝtelita veturilo?"</p>
					<p>"Ne. Verŝajne li ne suspektis, ke iu suspektos ion. Kiam ŝi
					petis, ke li veturigu ŝin, tio al li ne plaĉis, sed li verŝajne
					opiniis, ke estos eĉ pli suspekte malakcepti ŝin."</p>
					<p>"Vi do scias, kiu li estas, ĉu ne?"</p>
					<p>"Jes, ni kontrolis. Estas la frato de fraŭlino Marta, unu el
					la universitataj flegistinoj, tiu, kiun Tom venigis."</p>
					<p>"Interese! Plej interese! La gefratoj eble kunlaboras en iu
					malhonesta agado. Kion ili respondas al via demandado pri tiuj strangaj
					okazaĵoj?"</p>
					<p>"La flegistino nur rediras la samon, kiel Tom. Kaj la blondulon
					ni ankoraŭ ne pridemandis."</p>
					<p>"Kial?"</p>
					<p>"Por ke li ne suspektu, ke ni suspektas lin. Li estas nia sola
					ŝanco retrovi Gerdan. Bedaŭrinde, en la lastaj tagoj, li vivas plej
					normalan vivon, iris al neniu speciala loko, faris nenion atentindan.
					Eble li ludis sian rolon kaj ĝin finis. La aliaj -- tiuj, kiuj
					forkuris kun Gerda, kiam Bob, kiu gardis ŝin, estis senkonsciigita --
					certe estas la gravuloj. Ili devas ekzisti, ĉar nek la alta blondulo,
					nek lia fratino Marta povis forporti Gerdan. Se evidentiĝos, ke la
					tasko de la blondulo estis nur faligi ian dormigan substancon en la
					trinkaĵon de Gerda, ni lin pridemandos. Ni ĝis nun esperis, ke li
					kondukos nin al la malaperinta belulino. Sed pli kaj pli ŝajnas, ke
					tio ne okazos.</p>
				</div>
				<div class="col s12 m4">
					<img src="bildoj/gerda17-2.gif" class="responsive-img">
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