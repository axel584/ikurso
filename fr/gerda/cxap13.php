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
		} // fin section 1
		if ($section=="2") {
		?>

			<section class="klarigo">
	
				<h4>koncerne … -n</h4>
			
				<p><span class="eo">koncerne vian proponon</span> : pour ce qui est de votre proposition</p>
				<p><span class="eo">kiom koncernas min</span> : pour autant que je sois concerné</p>
			</section>

		<?php 
		} // fin section 2
		if ($section=="3") {
		?>

			<div class="vortlisto row">
				<div class="col s12 l6">
					<p><span class="eo">absorbi</span> : absorber</p>
					<p><span class="eo">bedaŭri</span> : regretter</p>
					<p><span class="eo">centro</span> : centre</p>
					<p><span class="eo">daŭri</span> : durer</p>
					<p><span class="eo">daŭrigi</span> : continuer (quelque chose)</p>
					<p><span class="eo">ekzemplo</span> : exemple</p>
					<p><span class="eo">feliĉa</span> : heureux, -euse</p>
					<p class="sekva"><span class="eo">feliĉe</span> : heureusement</p>
					<p><span class="eo">forgesi</span> : oublier</p>
					<p><span class="eo">ĝentila</span> : poli(e), courtois</p>
					<p><span class="eo">ĝojo</span> : joie, bonheur</p>
					<p class="sekva"><span class="eo">ĝoja</span> : joyeux, -euse, content(e)</p>
					<p><span class="eo">hotelo</span> : hôtel</p>
					<p><span class="eo">ie</span> : quelque part</p>
					<p><span class="eo">interesi</span> : intéresser</p>
					<p class="sekva"><span class="eo">interesa</span> : intéressant(e)</p>
					<p><span class="eo">internacia</span> : international(e)</p>
					<p><span class="eo">komenci</span> : commencer</p>
					<p><span class="eo">konato</span> : connaissance</p>
					<p><span class="eo">koncerni</span> : concerner</p>
					<p class="sekva"><span class="eo">koncerne …-n</span> : concernant</p>
					<p><span class="eo">krome</span> : de plus, en outre</p>
					<p><span class="eo">kutimi</span> : avoir l'habitude de, avoir coutume</p>
				</div>
				<div class="col s12 l6">
					<p class="sekva"><span class="eo">kutimo</span> : habitude, coutume</p>
					<p><span class="eo">momento</span> : moment</p>
					<p><span class="eo">nacio</span> : nation</p>
					<p class="sekva"><span class="eo">nacia</span> : national(e)</p>
					<p><span class="eo">nekonato</span> : (un) inconnu</p>
					<p><span class="eo">perfekta</span> : parfait(e)</p>
					<p><span class="eo">persono</span> : personne</p>
					<p><span class="eo">peza</span> : lourd, pesant</p>
					<p><span class="eo">preciza</span> : précis(e)</p>
					<p><span class="eo">proponi</span> : suggérer, proposer; offrir</p>
					<p><span class="eo">rajti</span> : avoir le droit de</p>
					<p class="sekva"><span class="eo">rajto</span> : (le) droit (de faire quelque chose)</p>
					<p><span class="eo">rakonti</span> : raconter</p>
					<p><span class="eo">ridi</span> : rire</p>
					<p><span class="eo">rideti</span> : sourire</p>
					<p><span class="eo">rimarki</span> : remarquer, noter</p>
					<p><span class="eo">simila</span> : similaire</p>
					<p><span class="eo">stulta</span> : stupide, idiot(e), imbécile</p>
					<p><span class="eo">ŝofori</span> : conduire</p>
					<p><span class="eo">ŝoforo</span> : conducteur, chauffeur</p>
					<p><span class="eo">teatro</span> : théâtre</p>
					<p><span class="eo">vojo</span> : voie, route, chemin</p>
				</div>
			</div>

		<?php 
		} // fin section 3
		if ($section=="4") {
		?>

			<fieldset class="ekzerco">
				<legend><b>Demandoj</b> </legend>
				<input type="hidden" name="013_cxap13.0" value="Demandoj">
				<div class="tasko">
				<?php $demandoj=array (
					1 => "Kie sidas Linda?",
					2 => "Kial ŝi volas paroli kun la blondulo?",
					3 => "Ĉu la blondulo volas klarigi siajn zorgojn?",
					4 => "Kiel Linda klarigas sian scivolon?",
					5 => "Kien precize veturas la blondulo?",
					6 => "Kie nun staras Linda?",
					7 => "Kion ŝi timas vidante la forveturantan aŭton?"
				);
				ekzerco(True, 2);
				?>
				</div>
			</fieldset>

			<fieldset class="ekzerco">
				<legend>Trovu la vortojn.</legend>
				<input type="hidden" name="013_cxap13.1" value="Trovu la vortojn.">
				<div class="ekzemplo">
					<p><em>Ekzemple:</em></p>
					<p>faradi → faradi : <u>agi</u></p>
				</div>
				<div class="tasko">
					<p class="primaire-texte texte-moyen">La vortoj estas:</p>
					<p class="primaire-texte texte-moyen">agi, alia, ami, angulo, aspekti, blondo, demandi, direkti, dum, grava, iri, kara, knabo, mano, mistera, montri, nun, permesi, peti, prava, preferi, serioza, saluti, spiono, stari, stranga, studento, tago, universitato, vizaĝo</p>
					<?php $demandoj=array (
					8  => "antaŭa parto de la kapo : [15].",
					9  => "atentinda : [15].",
					10  => "centro de supera instruado : [15].",
					11  => "ĉi tiam : [15].",
					12  => "diri &quot;bonan tagon&quot; : [15].",
					13  => "dudek kvar horoj : [15].",
					14  => "eltrovisto de sekretoj : [15]. ",
					15  => "en la tempo de : [15].",
					16  => "faradi : [15].",
					17  => "fina parto de brako : [15].",
					18  => "havanta ĝustan opinion : [15].",
					19  => "irigi laŭ la ĝusta vojo : [15].",
					20  => "juna vira homo : [15].",
					21  => "kiun oni amas aŭ ŝatas : [15].",
					22  => "konsenti, ke iu faru ion : [15].",
					23  => "lernanto ĉe universitato : [15].",
					24  => "malnormala : [15].",
					25  => "ne konata, ne komprenata : [15].",
					26  => "ne la sama : [15].",
					27  => "ne ludema, grava : [15].",
					28  => "nek kuŝi, nek sidi, nek iel moviĝi : [15].",
					29  => "pala koloro de haroj : [15].",
					30  => "peti informon : [15].",
					31  => "pli ŝati : [15].",
					32  => "sciigi, ke oni volas ion ricevi : [15].",
					33  => "sin movi piede : [15].",
					34  => "ŝajni laŭvide : [15].",
					35  => "ŝategi : [15].",
					36  => "tie, kie muroj kuniras : [15].",
					37  => "videbligi : [15]."
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