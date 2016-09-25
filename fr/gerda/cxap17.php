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
		} // fin section 1
		if ($section=="2") {
		?>

			<section class="klarigo">
	
				<h4>-ano : <i>membre d'un groupe ; habitant</i></h4>
		
				<p><span class="eo">urbo</span> : ville → <span class="eo">urbano</span> : citadin</p>
				<p><span class="eo">Parizo</span> : Paris → <span class="eo">parizano</span> : parisien</p>
				<p><span class="eo">polico</span> : police → <span class="eo">policano</span> : membre des forces de police&nbsp;;
				<span class="eo">policisto</span> : policier</p>
				<p><span class="eo">lando</span> : pays → <span class="eo">samlandano</span> : compatriote</p>
		
				<h4>ge : <i>des deux sexes sans distinction</i></h4>
		
				<p><span class="eo">frato</span> : frère → <span class="eo">gefratoj</span> : frères et sœurs</p>
				<p><span class="eo">patro</span> : père → <span class="eo">gepatroj</span> : parents</p>
				<p><span class="eo">sinjoro X</span> (ikso) : M. X → <span class="eo">gesinjoroj X</span> : M. et Mme X</p>
		
				<h4><i>épouser, se marier</i></h4>
		
				<p><span class="eo">Jozefo edziĝis</span> : Joseph s'est marié (litt. «est devenu mari»)</p>
				<p><span class="eo">Marta edziniĝis</span> : Martha s'est mariée (litt. «est devenue épouse»)</p>
				<p><span class="eo">Jozefo kaj Marta geedziĝis</span> : Joseph et Martha se sont mariés (litt. «sont devenus mari et femme»)</p>
			</section>

		<?php 
		} // fin section 2
		if ($section=="3") {
		?>

			<div class="vortlisto row">
				<div class="col s12 l6">
					<p><span class="eo">aperi</span> : apparaître</p>
					<p class="sekva">→ <span class="eo">malaperi</span> : disparaître</p>
					<p><span class="eo">aliĝi</span> : = <span class="eo">al</span>- + -<span class="eo">iĝi</span>s : se joindre, adhérer</p>
					<p><span class="eo">dek-sepa</span> : dix-septième</p>
					<p><span class="eo">dua</span> : second, deuxième</p>
					<p><span class="eo">edzo</span> : époux</p>
					<p class="sekva"><span class="eo">edzino</span> : épouse</p>
					<p><span class="eo">frato</span> : frère</p>
					<p class="sekva"><span class="eo">fratino</span> : soeur</p>
					<p><span class="eo">gardi</span> : garder</p>
					<p class="sekva"><span class="eo">sin gardi</span> : prendre garde, surveiller, être prudent</p>
					<p class="sekva"><span class="eo">singarda</span> : prudent</p>
					<p><span class="eo">historio</span> : histoire</p>
					<p><span class="eo">honesta</span> : honnête</p>
					<p><span class="eo">ia</span> : un certain, une espèce de</p>
					<p><span class="eo">jaro</span> : année</p>
					<p><span class="eo">jarcento</span> : siècle</p>
					<p><span class="eo">kapti</span> : capturer</p>
					<p><span class="eo">konduki</span> : conduire</p>
					<p><span class="eo">kontroli</span> : vérifier, contrôler</p>
					<p><span class="eo">krimo</span> : crime</p>
					<p><span class="eo">kvara</span> : quatrième</p>
				</div>
				<div class="col s12 l6">
					<p><span class="eo">lasta</span> : dernier</p>
					<p><span class="eo">marko</span> : marque (tous les sens)</p>
					<p><span class="eo">mono</span> : argent</p>
					<p><span class="eo">motivo</span> : motif, mobile</p>
					<p><span class="eo">plaĉi</span> : plaire, être apprécié</p>
					<p><span class="eo">preskaŭ</span> : presque</p>
					<p><span class="eo">pro</span> : à cause de, pour</p>
					<p><span class="eo">problemo</span> : problème</p>
					<p><span class="eo">riĉa</span> : riche</p>
					<p><span class="eo">rolo</span> : rôle</p>
					<p><span class="eo">sep</span> : sept</p>
					<p><span class="eo">serĉi</span> : chercher</p>
					<p><span class="eo">solvi</span> : résoudre</p>
					<p><span class="eo">suko</span> : jus</p>
					<p><span class="eo">ŝteli</span> : voler, dérober</p>
					<p class="sekva"><span class="eo">ŝtele</span> : par vol; à la dérobée, furtivement</p>
					<p><span class="eo">tipo</span> : type, modèle</p>
					<p><span class="eo">tria</span> : troisième</p>
					<p><span class="eo">uzi</span> : utiliser</p>
				</div>
			</div>

		<?php 
		} // fin section 3
		if ($section=="4") {
		?>

			<fieldset class="ekzerco">
				<legend><b>Demandoj</b> </legend>
				<input type="hidden" name="013_cxap17.0" value="Demandoj">
				<div class="tasko">
				<?php $demandoj=array (
					1 => "Pri kio parolas la policano?",
					2 => "Kion precize instruas Gerda?",
					3 => "Kiu estas la alta blondulo?",
					4 => "Kiu estas Marta?",
					5 => "Kial oni ankoraŭ ne pridemandis la blondulon?",
					6 => "Kiel la policano esperas retrovi Gerdan?",
				);
				ekzerco(True, 2);
				?>
				</div>
			</fieldset>

			<h3>Notoj</h3>
			<p>Jen ankoraŭ kelkaj vortoj, kiujn ni uzos por paroli pri la lingvo.</p>
			<p class="parto">Grupon de vortoj kun verbo en la centro oni nomas FRAZO. Jen ekzemplo:</p>
			<p><span class="eo"> Linda rigardas la blondulon.</span></p>
			<p class="parto">Frazo normale havas subjekton. La <b>SUBJEKTO</b> estas tio, kio faras la
			agadon de la verbo. En tiu ĉi frazo <span class="eo">Linda</span> estas la subjekto.</p>
			<p class="parto">Frazo ofte havas objekton. La <b>OBJEKTO</b> estas tio, al kio la agado de la
			verbo estas farata. En ĉi tiu frazo la objekto estas <span class="eo">la blondulon</span>.</p>
			<p class="parto">Oni montras la objekton aŭ per prepozicio (<span class="eo">Linda rigardas al la
			blondulo</span>) aŭ per la finaĵo <b>-n</b>. Tiun finaĵon <b>-n</b> oni nomas
			<b>AKUZATIVO</b>. Kiel vi jam lernis, oni uzas akuzativon ne nur por montri la objekton en frazo, sed ankaŭ por aliaj aferoj.</p>
			<p class="parto">Jam en la oka ĉapitro vi lernis pri la pronomo <b>si</b>.</p>
			<p>La pronomo <b>si</b> estas la <b>REFLEKSIVA PRONOMO</b> de Esperanto. Esprimoj uzantaj ĝin estas <b>REFLEKSIVOJ</b>.</p>
			<p>Kiel vi jam scias, <em>si</em> resendas al la subjekto.</p>
			<p>Ekzemple:</p>
			<p><span class="eo">Linda vidas sin.</span> signifas: <span class="eo">Linda vidas Lindan.</span></p>
			<p class="parto">Oni devas scii, ke <b>si</b> resendas al la plej proksima subjekto. Normale
			tio estas la subjekto de la plej malgranda frazo (aŭ <em>subfrazo</em>), en kiu ĝi aperas. Do en la frazo:</p>
			<p><span class="eo">Tom scias, ke Linda vidas sin.</span></p>
			<p><span class="eo">si</span> resendas al <span class="eo">Linda</span> 
			(la subjekto de <span class="eo">vidas</span>), ne al <span class="eo">Tom</span> (la
			subjekto de <span class="eo">scias</span>).</p>
			<p>Pro tio, <em>si</em> neniam povas esti mem la subjekto aŭ parto de la
			subjekto de iu verbo. Ekzemple, jena frazo estus tute neebla, se oni
			enmetus la vorton <em>sia</em>:</p>
			<p><span class="eo">Linda pensas, ke ___ opinio estas prava.</span></p>
			<p>En tiu frazo <span class="eo">sia</span> devus resendi al la subjekto de <span class="eo">estas</span>, kiu
			estas… <span class="eo">sia opinio</span>. Neeble!
			</p>
			<p>En ĉi tiu ĉapitro estas pli malfacila ekzerco pri refleksivoj.</p>

			<h3>Ekzerco 1</h3>

			<p>Nun vi scias kvar vortojn, kiuj aspektas simile: 
			<span class="eo">per</span>, <span class="eo">por</span>, <span class="eo">pri</span>, 
			<span class="eo">pro</span>.
			</p>
			<p><b>per</b> montras <b>ilon</b>: 
			<span class="eo">Mi venis per aŭto.</span></p>
			<p><b>por</b> montras <b>celon</b>: 
			<span class="eo">Mi aĉetis kafon por vi (por trinki).</span> (<span class="eo">celo</span> = tio, kion oni volas havi aŭ fari.)</p>
			<p><b>pri</b> montras <b>temon</b>: 
			<span class="eo">Mi parolis/lernis pri historio.</span></p>
			<p><b>pro</b> montras <b>kialon</b>: 
			<span class="eo">Ŝi ŝatas lin pro liaj blondaj haroj.</span></p>

			<fieldset class="ekzerco">
				<legend>Enmetu unu el tiuj vortoj en ĉiun lokon.</legend>
				<input type="hidden" name="013_cxap17.1" value="1. Enmetu unu el tiuj vortoj en ĉiun lokon.">

				<div class="tasko">
				<?php $demandoj=array(
					7 => "Mi multe lernadis ___ lingvistiko ___ sukcesi en la universitato.",
					8 => "___ la malfrua horo mi decidis veturi ___ aŭto, ___ esti pli rapida.",
					9 => "___ kio temas? - Mi ne scias; mi ĵus alvenis.",
					10 => "Mi dankas vin ___ via helpo.",
					11 => "___ la bruo en mia angulo, estis ___ mi tre malfacile aŭdi.",
					12 => "Mi scias certe ___ tio, ke mi vidis ĝin ___ miaj propraj okuloj.",
					13 => "Ŝi venis ___ instrui kriptaĵo-sciencon, sed mi neniam aŭdis ___ tiu fako."
					);
					ekzerco(True, 1);
					?>
				</div>
			</fieldset>

			<fieldset class="ekzerco">
				<legend>Anstataŭigu la vortojn inter "{}" per la ĝusta pronomo.</legend>
				<input type="hidden" name="013_cxap17.2" value="2. Anstataŭigu la vortojn inter "{}" per la ĝusta pronomo.">
				<div class="ekzemplo">
					<p><em>Ekzemple:</em></p>
					<p>{Tom} scias, ke {Linda} rigardas al {Tom}.</p>
					<p>→ Li scias, ke <b>ŝi</b> rigardas al <b>li</b>.</p>
				</div>
				<p class="primaire-texte texte-moyen">Forigu la vortojn kun "{}"!</p>
	
				<div class="tasko">
				<?php $demandoj=array(
					14 => "Marko pensas, ke {Marko} rompis {la} tason {de Marko}.",
					15 => "Marko pensas, ke {Tom} rompis {la} tason {de Marko}.",
					16 => "Tom pensas, ke {Tom} rompis {la} tason {de Marko}.",
					17 => "Tom pensas, ke {Tom} rompis {la} tason {de Tom}.",
					18 => "Tom pensas, ke {Marko} rompis {la} tason {de Tom}.",
					19 => "De Petro {Linda} aŭdas malveran rakonton pri {Linda}.",
					20 => "De Petro {Linda} aŭdas, ke Tom rakontis malveraĵon pri {Linda}.",
					21 => "Ivano scias, kie {Petro} kaŝis {la} tason {de Petro}, sed {Ivano} ne scias, kie {Petro} kaŝis {la} tason {de Ivano}.",
					22 => "{Linda} timas, ke la spiono sekvas {Lindan} tra la urbo.",
					23 => "{Petro} timas, ke {Linda} amas {Lindan} pli ol {Petron}.",
					24 => "{Linda} ĉiam pensas, ke {la} opinio {de Linda} estas prava.",
					25 => "Marko diras, ke {Petro} perdis {la} tason {de Marko}.",
					26 => "Sed Petro diras, ke {Marko} perdis {la} tason {de Marko}.",
					27 => "Linda ne scias, ke {Marko} {Lindan} amas.",
					28 => "Linda ne scias, ke {Marko} {Gerdan} amas."
					);
					ekzerco(True, 1);
					?>
				</div>
			</fieldset>

		<?php 
		} // fin section 4
		if ($section=="5") {
			//include "lasusono.inc.php";
		?>

			<div class="row">
				<div class="col s12">
					<div class="card-panel blue lighten-5">
						En tiu ĉapitro, estas du malsamaj rakontoj de <i>Lasu min paroli plu !</i>.<br>
						<a href="#unua">Edzokaptaj inoj</a><br>
						<a href="#dua">Instruista amo</a>
					</div>
				</div>
			</div>
			
			<a id="unua" class="scrollspy"></a>
			<h3>Edzokaptaj inoj</h3>
		
			<p>Jes, kiam, antaŭ kelkaj jaroj, li diris al mi, ke mi estas la plej
			bela knabino, kiun li iam ajn vidis, mi preskaŭ enamiĝis. Neniam
			viro parolis pri mia beleco similvorte. Neniam viro, simple parolante,
			direktis tiajn kortuŝajn okulojn al mi.</p>
		
			<p>Sed post iom da tempo mi konsciiĝis, ke li ne vere amas min, kaj ke
			mi neniam povos lin ami, eĉ se nur pro lia mono. Kaj nun ni eksciis,
			ke li volas edziĝi al Aneta!</p>
		
			<p>Ĉu vi komprenas, kial li volas edziĝi al ŝi? Ŝi havas plaĉan
			vizaĝon, iamaniere, sed ŝi ne estas bela. Li estas tre riĉa.
			Verŝajne ŝin interesas lia mono. Nu, se li volas esti malsaĝa, tio
			estas lia problemo.</p>
			
			<p>Lia fratino edziniĝis al riĉulo, kaj tio estas multe pli
			sendanĝera. Se la edzo havas tiom da mono, kiom la edzino, almenaŭ
			ambaŭ havas dekomence certecon, ke la alia ne serĉas en geedziĝo
			eblecon riĉe vivi.</p>
			
			<p>Multaj knabinoj jam provis edziniĝe ŝteli la monon de Rikardo. Se vi
			scius, kiom da edzkaptemaj inoj li jam devis forsendi! Sed ĉiam
			revenas novaj, kaj ĉi tiu sukcesis. Ĉi-foje, li estas kaptita.
			Finita, la libereco. Li falis en ŝian kaptilon. Antaŭe li estis tre
			singarda<A HREF="#notoj">[1]</A>. Li bone gardis sin je ĉiu provo lin faligi en la
			kaptilon. Sed la lasta ino — kiel do ŝi nomiĝas? mi forgesis... ha
			jes! Aneta! — Aneta, la lasta el longa aro, perfekte ludis sian
			rolon. La lastan fojon, li preskaŭ kaptiĝis, kio montras, ke eble li
			fariĝis malpli singarda.</p>
			
			<p>Tiun lastan fojon, pri kiu mi parolas... eble mi devus diri «la
			antaŭlastan fojon», se vi konsideras, ke la vera lasta fojo estas ĉi
			tiu fojo, kun tiu Aneta... nu, negrave... tiun lastan fojon, mi diris,
			la kaptemulino estis tute senmona. La plej senhava, plej malriĉa
			knabino el la tuta urbo. Sed ŝi estis bela. Granda, sportema, sentima<A HREF="#notoj">[2]</A>, 
			sed sentema<A HREF="#notoj">[2]</A> — almenaŭ laŭŝajne — ŝi montris sin tiel
			aminda, ke li preskaŭ ekamis ŝin je la unua rigardo. La afero
			daŭris pli ol unu jaron. Ho jes, dum pli ol unu jaro ili vidadis unu
			la alian kvazaŭ sen interrompo.</p>
			
			<p>Ekzistas tia tipo de virino, kiu tre nature plaĉas. Ŝi estas tia.
			Tamen, ŝi sukcesis plaĉi al li ne nur pro sia natura amindeco, sed,
			krom tio, ankaŭ pro io alia. Pro volo. Pro decido. Ŝi volis lian
			monon, ŝi decidis, ke ŝi havos ĝin, kaj do — samokaze — lin. Kaj
			ŝi agis tute laŭplane, bone pripensante unu paŝon post la alia, por
			realigi sian deziron. Ŝi neniam mispaŝis.</p>
			
			<p>Ŝi serĉis pri li ĉiaspecajn informojn, kaj ŝi uzis siajn sciojn
			por plejproksimiĝi al li, kaj al lia koro. Ekzemple, kiam ŝi
			eksciis, ke li estas tre kantema, kaj eĉ estas ano de iu gea
			kantogrupo, ŝi tuj decidis aniĝi al tiu grupo. Alian fojon, oni
			diris al ŝi, ke li ĵus eliĝis el la militservo. Nu, ŝi serĉis la
			plej etajn informojn pri li, kaj sukcesis aranĝi la aferojn
			tiamaniere, ke ŝi estu la unua persono, kiu troviĝos sur lia vojo,
			kiam li alvenos en la urbon.</p>
			
			<p>Kaj ne nur ŝi agis. Ankaŭ ŝiaj gepatroj trovis pseŭdomotivon por
			esti foje akceptitaj de lia patro. Ŝi kvazaŭ ŝtele eniris en lian
			mondon por ŝteli lian amon, kaj la tutan riĉon, kiu iras kun ĝi, ĉe
			tia multmona homo. Ŝi uzis plej plene sian imagon por elpensi plej
			malsamajn manierojn enŝteliĝi<A HREF="#notoj">___</A> en lian vivon, kaj plaĉi al li. Sed
			eble ŝi trouzis ilin. Eble li suspektis ŝian planon kaj la ne plene
			honestajn motivojn, kiuj kuŝis malantaŭ ŝiaj tro oftaj aperoj ĉe
			lia flanko.</p>
			
			<p>Subite, liaj amikoj rimarkis, ke li fariĝas pli kaj pli malvarma en
			siaj rilatoj kun ŝi. Oni sentis, ke la speco de espero kaj amemo, kiu
			ĵus batigis lian koron, nun iom post iom malaperas, lasante la lokon
			al iu malŝato... ne, ne vere malŝato, kiel diri? Mi serĉas la
			ĝustan vorton, sed ne trovas ĝin, kiel ofte okazas al mi... do, ne
			estis malŝato, sed iu sento proksima al ĝi, iom simila... ha : jen
			mi trovis la vorton: neŝato. Neplaĉo. Li ne malamis ŝin,
			kompreneble, ankaŭ ne malŝatis ŝin, sed, tute simple, ŝi ne plu
			plaĉis al li. La sentoj, kiujn ŝi antaŭe estigis en li, simple
			malaperis. Mi gratulis lin. Li tiel ĵus eligis sin el serioza risko,
			el la risko edziĝi al monserĉa aventurulino, kiu ne indis, ke li
			kunigu sian vivon al la ŝia.</p>
			
			<p>Sed jen novan fojon simila situacio ĵus aperis. Pro tiu Aneta, jen
			lia koro ĵus rekomencis batadi pli vive, jen reaperis la konata
			miksaĵo el espero kaj, se ne amo mem, almenaŭ deziro ami, kaj nun,
			jen ni ekscias, ke li decidis fariĝi sia edzo.</p>
			
			<p>Eble tamen Aneta ne kaptis lin por lia mono. Finfine, mi ne konas la
			tutan historion. Kio ebligus al mi diri tion? Vi pravas. Se sincere
			paroli, mi ne rajtas tion diri pri ŝi. Mi preskaŭ ne konas ŝin. Pro
			kio do mi esprimis al vi tiujn malŝatajn ideojn, kiujn mi havis pri
			Aneta? Kial mi lasis mian imagon kapti min, koncerne ŝiajn motivojn
			? Mi ne estas honesta. Sed pro kio do? Ĉu pro deziro haltigi la
			geedziĝon? Ĉu tion mi deziras? Ĉu mi finfine rigardu la veron
			vizaĝ-al-vizaĝe? Kaj kiu estas tiu vero, se ne ke iĝi la edzino
			de Rikardo deziras plej forte mi?</p>
			
			<a id="notoj"></a>
			<p class="rimarko"><strong>NOTOJ</strong> : 
			<ol>
				<li><span class="eo">Singarda</span> : atentema kaj pripensema, por ne ricevi malbonaĵon aŭ
				malfeliĉon, aŭ por ne meti sin en realan aŭ imagitan danĝeron; 
				malema agi subite kaj senpense; neriskema.</li>
				<li><span class="eo">Sen-tim-a, sent-em-a.</span></li>
				<li><span class="eo">Enŝteliĝi</span> : eniri ŝtele, t.e. zorgante resti nerimarkita, kvazaŭ por 
				ŝteli</li>
			</ol>
			
			<a id="dua" class="scrollspy"></a>
			<h3>Instruista amo</h3>
			
			<p>Ne estas facile ami kun dudek kvin geknaboj. Ne rigardu min tiel mire,
			mi diras la veron. Mi volas diri, ke kiam oni estas instruisto, amas
			junulinon, kaj havas kun si klason de dudek kvin geknaboj, kiuj sekvas
			sian instruiston, kien ajn li iras, amrilatoj fariĝas malfacilaj.</p>
			<p>
			La domego, kie ni estis, dum tiu sur-monta semajno, estis malnova
			hotelo, kiun oni rearanĝis por infangrupoj. Estis en ĝi granda
			manĝejo por la grupaj manĝoj, kaj ankaŭ pli malgranda, pli plaĉa
			trinkejo, kie oni povis aĉeti kafon, sukon, ĉokoladon, teon kaj
			aliajn trinkaĵojn.</p>
			<p>
			Tie ŝi laboris. Kiam mi eniris la trinkejon, en la unua tago, kaj mi
			ekvidis ŝin, mia koro misbatis. Kaj mi samtempe iĝis certa, ke
			ankaŭ ŝia koro faris unu misbaton. Mi rigardis ŝin, ŝi rigardis
			min, ni ridetis.</p>
			<p>
			Ne daŭris pli ol unu sekundon tiu unua rigardo, sed mi sentis,
			kvazaŭ mi aliiĝus al nova homo. Neniam mi vidis iun tiel amindan,
			tiel feliĉige amvekan.</p>
			<p>
			La infanoj brue envenis post mi. Nu, vi scias, kiaj estas infanoj. Ili
			movis la seĝojn. Ili kriis. Ili vokis de unu angulo al alia plej
			laŭte. Unu paŝis sur la piedon de kunulo, kaj ĉi-lasta ekkriis,
			kvazaŭ oni ĵus provus mortigi lin. Nu, vi konas tian situacion.</p>
			<p>
			«Kiu ŝtelis mian monon?» iu kriis furioze. «Mia monujo malaperis!»</p>
			<p>
			«Ĝi falis el via poŝo», «Tie, ĉe la seĝpiedo», «Serĉu antaŭ ol
			suspekti!» samtempe kriis plej malsamaj voĉoj, dum sonis pliaj
			respondoj, al kiuj plene mankis ĝentileco.</p>
			<p>
			Sed mi nenion aŭdis. Mi nur povis rigardi ŝin. Post tiu unua
			rigardo, kiun mi antaŭe priparolis, mi direktis la okulojn aliloken
			dum unu sekundo, sed ne pli. Mia rigardo tuj revenis al ŝi kaj ne plu
			forlasis ŝin. Kvazaŭ iu supernatura forto min devigus ne movi la
			okulojn.</p>
			<p>
			Ankaŭ ŝi min rigardis plu, kun la sama feliĉplena rideto. Stranga,
			nekutima, silenta ĝojo ekokupis mian tutan estaĵon. Tute trankvile.
			Mia koro ne plu misbatis, sed ĝi ne batis kiel antaŭe. Ĝi estis
			kvazaŭ plena je suno, je bela, varma, plaĉa sed samtempe trankvila
			sunlumo.</p>
			<p>
			Dume, interinfana milito komenciĝis. «Mi vidis vin, vi provis ŝteli
			mian monujon», kriis iu knabino.</p>
			<p>
			«Ne gravas, vi jam estas tro riĉa», ride rebatis knabo.</p>
			<p>
			«Ĉi tiu estas mia seĝo, ne sidu sur ĝi», plendis tria infano.</p>
			<p>
			«Kiu faligis mian glason?» furiozis kvara.</p>
			<p>
			Objektoj komencis traflugi la aeron. La bruoj devus tuŝi mian
			atenton, konsciigi min, ke aŭdeblas vortaĉoj, ke okazas
			neallasindaj<a href='#notoj'>[1]</a> batoj, ke ploroj kaj plendoj kaj ridoj resonas tro
			brue de unu muro al alia.</p>
			<p>
			Sed mi kvazaŭ ne ĉeestis. Mia atento estis for. Ĝi ne direktiĝis
			al la infana milito, nur al tiuj bluaj okuloj, al tiu mirinda nazo, al
			tiuj brunaj haroj, tiel perfekte aranĝitaj.</p>
			<p>
			Kaj, pro nekomprenebla motivo, ankaŭ ŝiaj okuloj estis turnitaj nur
			al mi. Al mia tro dika nazo, al miaj senordaj haroj, al mia nespeciale
			bela vizaĝo.</p>
			<p>
			«Ne sidu ĉi tie», laŭtis knaba voĉo.</p>
			<p>
			«Mi rajtas sidi kie ajn mi volas», respondis alia.</p>
			<p>
			«Se vi sidiĝos sur ĉi tiun seĝon, vi tion bedaŭros», parolis tria,
			malamike.</p>
			<p>
			«Vi ne rajtas malpermesi al li sidi sur tiu seĝo», knabino kriis.</p>
			<p>
			Mil interkriadoj sonis samtempe. Mil objektoj, ŝajne, kune bruis en la
			trinkejo. Sed mi aŭdis nenion. Aŭ, pli ĝuste, mi aŭdetis ian
			kvazaŭ tre malproksiman bruon, kiu ne sukcesis kapti mian atenton.
			Mian atenton ja plene okupis la superbela vizaĝo de virino
			sensimila.</p>
			<p>
			Kaj jen ŝi ekridis.</p>
			<p>
			Mi rigardis ŝin eĉ pli, mire. Sed ŝi tro ridis por povi parole
			respondi al mia silenta demando.</p>
			<p>
			Ŝia mano montris al la ejo, al la nekredeblaj militspecaj agadoj,
			kiuj okazis en ĝi, al seĝoj kuŝantaj, al rompita taso, al kruroj,
			kapoj, brakoj, manoj moviĝantaj ĉiadirekte, dum vortaĉoj kaj
			militkrioj ĉie<a href='#notoj'>[2]</a> sonadis.</p>
			<p>
			Nur tiam mi ekkonsciis. «Geknaboj!» mi kriis. «Sufiĉas!»</p>
			<p>
			Neniam mi komprenis, kial mi havas aŭtoritaton. Sed aŭtoritaton mi
			havas. Naturan aŭtoritaton. Ĉu eble pro io en la voĉo? Mi ja ne
			estas alta fortegulo, kiel kelkaj viroj, kiujn infanoj rigardas kun ia
			timo, kaj sekve kun forta motivo ne riski malkontentigon. Ne. Mi estas
			ne pli ol mezalta kaj mezforta, kaj tute ne havas timigan aspekton.</p>
			<p>
			Sed la infanoj, al kiuj mi instruas, neniam faras ion, kion mi
			malpermesas. Sufiĉas, ke mi diru «atentu!», kaj la bruo haltas,
			envenas silento, dum la geknaboj nin rigardas atente kaj atende,
			atendante, fakte, ke mi precizigu miajn dezirojn. Eĉ, ofte, mi diras
			nenion. Nura rigardo, nura vizaĝesprimo, nura movo de la mano, kaj
			tuj ili trankviliĝas.</p>
			<p>
			Ĉi-foje, mia natura aŭtoritato ree agis. Apenaŭ mi devis aldoni
			kelkajn vortojn por precizigi, ke mi volas, ke ili restarigu la
			falintajn tablon kaj seĝojn, haltigu la batojn, remetu ordon kaj
			trankvilon en tiu plaĉa trinkejo. Post dek minutoj, ĉio estis ree en
			ordo, kaj ili interparolis trankvile, kvazaŭ neniu malamikeco iam ajn
			aperis inter ili.</p>
			<p>
			«Gratulon, sinjoro!» diris la plej bela voĉo, kiun mi iam ajn aŭdis.
			«Kiam mi ekvidis la malordon, mi imagis, ke ne eblos restarigi
			bonordon antaŭ ol noktiĝos».</p>
			<p>
			Nenio estis pli dolĉa al mia koro, ol ŝiaj gratulvortoj. Tiel
			komenciĝis inter ni plej feliĉa amrilato.</p>
			<p>
			Sed, kredu min, ne estas facile ami kun dudek kvin geknaboj. Mi ne
			povis forlasi la dormejon nokte, se unu el ili ne dormis. Tiu ja vekis
			kelkajn aliajn, kaj post dek minutoj la dormejo fariĝis brua ludejo.
			Iun tagon — estis ŝia libertago — ŝi konsentis veni promeni kun mi.
			Sed ankaŭ kunmarŝis la dudek kvin karuletoj, kio tamen mallarĝigis
			la eblecojn de plaĉa para interparolado.</p>
			<p>
			Kiam mi estis libera, kaj mia kunlaboranto<A HREF="#notoj">___</A> ilin gardis, ŝi
			laboris en la trinkejo. Se mi tien iris, plej ofte ankaŭ kelkaj el
			miaj klasanoj venis. Kaj kiam ŝi interrompis la laboron, mi ne
			estis libera, sed devis okupiĝi pri la dudek-kvino. Mia helpanto<A HREF="#notoj">___</A>
			ĉeestis nur dumtage, je precizaj horoj.</p>
			<p>
			Tamen, iom post iom, mi sukcesis trovi solvojn al la problemoj, kaj
			vidi ŝin ne tro malofte. Mi rakontis ĉion pri mi, pri mia vivo, pri
			miaj deziroj, pri mia amo, kiu certe daŭros ĝismorte, kaj ŝi same
			rakontis ĉion pri si. Ŝi estis ridema, kantema, sed ankaŭ laborema
			kaj plej fidinda homo, kun koro plena je ĝojo, kaj feliĉiga rideto.</p>
			<p>
			Post kiam mi revenis hejmen, certe plaĉis la foresto de la infanoj,
			sed mia soleco pezis al mi. Feliĉe, la urbo, kie mi instruas, ne
			estas tro malproksima. Kiel eble plej ofte mi reiris al la montara
			malnova hotelo, kaj nia amo de fojo al fojo grandiĝis. Nek ŝi nek mi
			plu havas gepatrojn kaj gefratojn, kaj nia geedziĝo estis plej
			simpla, kun nur kelkaj geamikoj. Almenaŭ laŭplane. Ĉar kiam eksonis
			la geedziĝa marŝmuziko kaj ni turnis nin por brak-en-brake eliri,
			silente, ridete kaj korbate larĝ-okulis al ni dudek-kvino da
			geamiketoj.</p>
		
			<a id="notoj"></a>
			<p class="rimarko"><strong>NOTOJ</strong> : 
			<ol>
				<li><span class="eo">Al-lasi</span> : lasi alveni, lasi enveni, kaj do permesi, lasi okazi, akcepti.</li>
				<li><span class="eo">Ĉie</span> : en la tuta loko.</li>
				<li><span class="eo">-anto</span> : persono, kiu ...-as, -anta homo.</li>
			</ol>

		<?php 
		} // fin section 5
		if ($section=="6") {
			recapitulatif_lecon_avant_envoi('GR',$leciono,$persono_id);
		} // fin section 6
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
