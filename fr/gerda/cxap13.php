<?php 
$titolo="13 (dek tri)";
$leciono = 13;
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

			<h3>Kara spionino!</h3>
			<div class="row dialogo">
				<div class="col s12 m8">
					<p>La vojo ŝajnas longa, kiam oni silentas la tutan tempon.
					Linda estas parolema; krome, ŝi deziras ricevi informojn pri sia
					stranga kunulo; ŝi do tute ne ŝatas tiun longan silentadon. Kial ne
					provi denove? Ŝi decidas, ke ŝi rekomencos paroli. Se li ne ŝatos,
					nu, li esprimos sian malŝaton, kaj ili plu veturos senvorte, kaj la
					vojo plu ŝajnos longega.
					<p>"Vi diris…," ŝi komencas, ne sciante, kiel ŝi finos, sed
					feliĉe ideo tuj venas: "Vi diris, ke vi havas zorgojn. Nu, ofte oni
					sentas sin pli bone, kiam oni esprimas siajn zorgojn al iu."</p>
					<p>"Vi estas scivolema, ĉu ne? Nu, mi ne volas esti malafabla kun
					tiel bela knabino, kiel vi. Pardonu, se mi ne montras min pli
					amikiĝema. Sed miajn zorgojn mi ne povas klarigi."</p>
					<p>"Ĉu vi estas certa? Oni ofte imagas, ke afero estas neebla,
					ĉar oni ne scias, kiel komenci, sed…s"</p>
					<p>"Ne. Kiom koncernas min, ne estas tiel. Mi ne povas rakonti pri
					miaj zorgoj, ĉar ili koncernas personojn, pri kiuj mi ne rajtas
					paroli. Oni devas esti diskreta, ĉu ne? Ĉu vi ŝatus, ke viaj amikoj
					rakontu ĉion pri vi al nekonato?"</p>
					<p>"Kompreneble ne. Mi bone komprenas vin. Fakte, mi ne estas
					speciale scivola. Mi komencis diri tion nur, ĉar mi trovis la silenton
					peza kaj la vojon pli kaj pli longa. Sed mi tute ne volus maldiskreti."</p>
					<p>"Estas fakto, ke oni kutime interparolas, kiam oni veturas
					kune. Mi verŝajne ne estis tre ĝentila, lasante tiun silenton daŭri
					kaj daŭri pli kaj pli peze por vi. Mi eĉ ne rimarkis, ke silento
					estiĝas kaj daŭras. Mi estis absorbita de miaj pensoj, de miaj
					zorgoj, kaj ankaŭ de la vojo. Oni devas atenti la vojon, kiam oni
					ŝoforas, ĉu ne? Strange, kvankam vi estas tre bela kaj sidas tuj apud
					mi, plej proksime al mi, mi tamen forgesis pri vi. Nur ekzistis por mi
					la vojo en miaj okuloj, kaj la zorgoj en mia kapo."</p>
					<p>"Ĉe mi okazis la malo. Mi daŭre pensis pri vi. Mi rimarkis,
					ke vi ne aspektas tre ĝoje. Vi ŝajnis malfeliĉa. Mi min demandis,
					ĉu mi povus helpi. Vi ja tre afable konsentis min veturigi. Mi sentas
					min danka. Mi volus redoni al vi similan servon. Mi opiniis, ke se mi
					helpas vin vortigi vian malĝojon, tio eble senpezigos vin, kaj mi
					estos kontenta agi helpe.  Eble estas stulte, sed mi ĉiam deziras
					feliĉigi la homojn."</p>
				</div>
				<div class="col s12 m4">
					<img src="bildoj/gerda13-1.gif" class="responsive-img">
				</div>
			</div>

			<div class="row dialogo">
				<div class="col s12 m8">
					<p>"Vere, vi estas tre bonkora. Mi ege bedaŭras, ke mi ne povas
					jesi al via propono. Sed, kiel mi jam diris, miaj zorgoj koncernas
					aferojn, pri kiuj mi ne rajtas rakonti. Nu, jen ni alvenas. Kie vi
					deziras, ke mi lasu vin?"</p>
					<p>"Kien precize vi iras? Kie vi haltos? Kie vi lasos la aŭton?
					Vi povus lasi min tie. Estos plej facile por vi."</p>
					<p>"Ĉiam scivola, ĉu ne? Vi ŝatus scii, kien mi iras," li diras
					ridante, dum Linda sentas sin ruĝiĝi, ĉar similan rimarkon ŝi tute
					ne atendis. Dum momento, ŝi ne scias, kiel respondi. ŝi sentas sin
					stulta.</p>
					<p>"Tute ne," ŝi fine diras, malvere. "Kien vi iras, tio tute ne
					interesas min. Mi proponis tion nur, ĉar tio ŝajnis plej facila. Sed
					se ĝenas vin, ke mi scios, vi povas lasi min ie ajn en la centro.
					Ekzemple ĉe la Internacia Hotelo, aŭ ĉe la Granda Teatro.
					ĉiaokaze, mi treege dankas vin kaj mi facile trovos mian vojon. Jen.
					Tie ĉi estas perfekte. Koran dankon, kaj ĝis revido, kara sinjoro."</p>
					<p>"Ĝis revido, kara spionino!"</p>
					<p>La aŭto forveturas, kaj Linda ne povas forturni la okulojn de
					ĝi. Kara spionino, vere! Kion li volis diri? Ĉu li suspektus? Nia
					kompatinda Linda ne scias, kion pensi.</p>
				</div>
				<div class="col s12 m4">
					<img src="bildoj/gerda13-2.gif" class="responsive-img">
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