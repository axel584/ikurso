<?php 
$titolo="Paŝo 1 (unu)";
$leciono = 1;
$section=isset($_GET["section"])?htmlspecialchars($_GET["section"]):"1";
if (!is_numeric($section)) {
	if ($persono_id=="") {header("Location:../../index.php?erarkodo=24");}
}
include "pppkapo.inc.php";
?>
<div class="row">
	<article class="col s12 m10 l7 offset-m1 offset-l1">
		
		<section id="leciono-enhavo">
		<?php 
		getTitoloLecionero('PP',$leciono,$section);
		?>
		<?php
		if ($section=="1") {
		?>
			<div class="vortlisto row">
				<div class="col s12 m6">

					<p><span class="eo">AGO</span>: io, kion oni faras.</p>
					<p><span class="eo">BENZINO</span>: hejtaĵo por irigi aŭtomobilon.</p>
					<p><span class="eo">CERTA</span>: malhezitema.</p>
					<p><span class="eo">DANA</span>: rilata al la lando Danujo.</p>
					<p><span class="eo">DATO</span>: tago, en rilato al la tempo.</p>
					<p><span class="eo">EFEKTIVA</span>: reala.</p>
					<p><span class="eo">FABELO</span>: historio pri mirigaj okazaĵoj.</p>
					<p><span class="eo">FERIO</span>: libertempo.</p>
					<p><span class="eo">FIDI</span>: plenkredi pri iu aŭ io.</p>
					<p><span class="eo">FROSTI</span>: esti tre malvarma.</p>
					<p><span class="eo">FROTI</span>: preme movi ion sur io alia.</p>
					<p><span class="eo">GLASO</span>: ujo, el kiu oni trinkas.</p>
					<p><span class="eo">GLITI</span>: facile movigi sur grasa supraĵo.</p>
					<p><span class="eo">HEJTI</span>: varmigi ĉambron aŭ loĝejon.</p>
					<p><span class="eo">JAKO</span>: vestaĵo por la supra parto de la korpo.</p>
					<p><span class="eo">KONSIDERI</span>: zorge atenti ion.</p>
					<p><span class="eo">KAPTI</span>: ekteni.</p>
					<p><span class="eo">KOSTO</span>: pago necesa por ricevi ion.</p>
					<p><span class="eo">LITO</span>: aĵo, sur kiu oni dormas.</p>
					<p><span class="eo">MARMORO</span>: bela blanka ŝtono.</p>
					<p><span class="eo">MATERIALO</span>: krudaĵo necesa por plenumi ion.</p>
				</div>
				<div class="col s12 m6">
					<p><span class="eo">MEDITI</span>: pripensadi.</p>
					<p><span class="eo">METROPOLO</span>: granda urbego.</p>
					<p><span class="eo">MODERNA</span>: nuntempa.</p>
					<p><span class="eo">MODESTA</span>: malfiera.</p>
					<p><span class="eo">NU</span>: vorto uzata por atentigi pri tio, kio sekvos.</p>
					<p><span class="eo">ORDINARA</span>: kutima.</p>
					<p><span class="eo">PAŬZO</span>: mallonga hezito.</p>
					<p><span class="eo">PUTO</span>: subterejo, el kiu oni levprenas kutime akvon.</p>
					<p><span class="eo">PROVIZI</span>: havigi necesaĵojn.</p>
					<p><span class="eo">RAKONTI</span>: diri historion.</p>
					<p><span class="eo">RANO</span>: vivantaĵeto, kiu loĝas sambone teron kaj akvon.</p>
					<p><span class="eo">RIPOZI</span>: resti nenion faranta, eble dormanta.</p>
					<p><span class="eo">RULI</span>: ĉirkaŭmove antaŭenigi ion.</p>
					<p><span class="eo">SOBRA</span>: malebria.</p>
					<p><span class="eo">SPECIALA</span>: intencata por unu celo.</p>
					<p><span class="eo">SUPOZI</span>: kredi ion vera.</p>
					<p><span class="eo">ŜULTRO</span>: plej supra trunkoparto.</p>
					<p><span class="eo">ŜVEBI</span>: resti senmove pendanta, kvazaŭ fluge.</p>
					<p><span class="eo">TERURO</span>: timego.</p>
					<p><span class="eo">URĜI</span>: plirapidigi.</p>
					<p><span class="eo">VOJAĜI</span>: iri aŭ veturi por atingi lokon ne proksiman.</p>
				</div>

				
			
		<?php 
		} // fin section 1
		if ($section=="2") {
		?>
			<h3>TRE MODERNA FABELO</h3>
						
				<p>Tiun ĉi eksterordinaran kaj freŝdatan fabelon mi nur peras transigante la respondecon al mia tre fidinda amiko — ni nomu lin Sen Dubo — kiu la unuan fojon rakontis ĝin ĉe blanka tablo, kie ne mankis glasoj.
				<p>"Aŭdu nur" — diris Sen. "Mia amiko, Ripsrops, veturis antaŭ nelonge per sia beleta ĉaro, vi scias, tiu Mercedes, inter Arĥangelsk kaj Kopenhago sur la ŝoseo. Sed li jam ne estis malproksime de Kopenhago, kiam ĉe benzinputo, post kiam li aĉetis hejtmaterialon kaj dum la agado de la benzinulo, li iom promenis. Subite li aŭdis voĉon sub si:</p>
				<p>"Sinjoro Ripsrops, sinjoro, bonvolu atendi..."</p>
				<p>Ripsrops rigardis malsupren kaj vidis ranon ruliĝantan al li. Li ne estas speciala ŝatanto de ranoj, sed io kaptis lin en la afero.</p>
				<p>"Ĉu mi komprenas rane? Kaj ĉu vi povas paroli? Ĉu vi konas min?"</p>
				<p>La rano respondis:</p>
				<p>"Jes, kara sinjoro Ripsrops, mi povas paroli, sed mi ne parolas rane, sed dane. Mi petas vin, sinjoro Ripsrops... Mi frostas. Metu min en vian poŝon. Ĉu mi rajtas kunveturi al Kopenhago? Por bonfaro vi ricevos bonon!"</p>
				<p>Ripsrops tre miris, precipe, ke la rano frostas, kiam estas varme, sed rano estas rano, kaj ĉar la petita varmo ne kostos al li elspezojn, li metis la ranon en sian poŝon. (... Kion vi diras? Jes... Jes, li estis sobra kiel mi.)</p>
				<p>Iom post iom la rano iĝis hejmeca de Ripsrops. Ĝi petis eĉ manĝon kaj iom da akvo, kiujn Ripsrops, kiu konsideris la ranon cetere tre modesta, donis al sia kunvojaĝanto. Tiel ili alvenis vespere al la metropolo, eĉ al la loĝejo de Ripsrops, ĉar la rano petis ripozlokon. Ripsrops malfermis la pordon de sia loĝejo kaj tiam la rano denove ekparolis:</p>
				<p>"Kara sinjoro Ripsrops, mi estas tiel dormema. Ĉu mi rajtus dormi en tiu lito?"</p>
				<p>Ripsrops ekmeditis. Estis la unua fojo, ke iu fremdulo volis dormi en ilia familia lito, sed efektive sinjorino Ripsrops estis for kaj tiu ĉi mirinda rano estis tiel dormema. Li metis la ranon en la apudan liton kaj demetis sian jakon kaj komencis pretigi sin por la nokta trankvilo. Li volis jam mallumigi, kiam li alrigardis la apudan liton kaj tiam li rimarkis, ke el la stranga rano fariĝis belega reĝidino, kiu supozeble apenaŭ estis provizita per noktovestoj. Lia rigardo ekglitis sur la marmoraj ŝultroj de la reĝidino. Ripsrops tute teruriĝis. Li frotis la okulojn. La reĝidino alrigardis lin kaj diris:</p>
				<p>"Ri i-ipsĉjo!"</p>
				<p>Sen Dubo, t.e. la rakontanto, nun faris longan paŭzon kaj sekvis iom malcerte la ŝvebon de la cigareda fumo.</p>
				<p>Mi urĝis:</p>
				<p>"Nu, kiel estis poste?"</p>
				<p>Sen alrigardis min kaj diris:</p>
				<p>"Ĉu vi vere kredas tiun ĉi historion?"</p>
				<p>"Kredi? Tute ne. Kial mi kredu?"</p>
				<p>"Nu ankaŭ sinjorino Ripsrops, kiu tiumomente realvenis neatendite el sia feriado en Polinezio kaj malfermis la pordon de la dormoĉambro, ne kredis ĝin. Eĉ ne unu vorton..."</p>

                                                                                   <p><b>F Szilágyi</b> <i>(el 'Norda Prismo')</i></p>
			
		<?php 
		} // fin section 2
		if ($section=="3") {
		?>

			<?php 
				getEkzercon(104,$persono_id);
			?>

			<?php 
				getEkzercon(105,$persono_id);
			?>

			<?php 
				getEkzercon(106,$persono_id);
			?>

		<?php 
		} // fin section 2
		if ($section=="4") {
		?>

			<?php 
				getEkzercon(107,$persono_id);
			?>

			<?php 
				getEkzercon(108,$persono_id);
			?>

			<?php 
				getEkzercon(109,$persono_id);
			?>
			
		<?php 
		} // envoie de la leçon
		if ($section=="5") {
			recapitulatif_lecon_avant_envoi('PP',$leciono,$persono_id);
		} // fin section 6
		?>
		</section>
		
		<section id="leciono-fino">
			<div id="marko" class="right-align">
				<?php getBoutonFinSection('PP',$leciono,$section,$persono_id); ?>
				<a id="farita" class="btn-floating btn-large light-blue darken-1 hide"><i class="material-icons">done_all</i></a>
			</div>
			<div class="ligoj">
				<?php getLecioneroAntauxa('PP',$leciono,$section); ?>
				<?php getLecioneroVenonta('PP',$leciono,$section); ?>
			</div>
		</section>
		
	</article>
	
	<?php include "pppflanko.inc.php"; ?>

</div>

<?php include "ppppiedo.inc.php"; ?>