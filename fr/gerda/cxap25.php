<?php 
$titolo="25 (dudek kvin)";
$leciono = 25;
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

			<h3>Tiom da riskoj kaj zorgoj</h3>
			<div class="row dialogo">
				<div class="col s12 m8">
					<p>"Sed vi ne respondis pri la fotokopio!"
					</p>
					<p>"Ho, pardonu. La profesoro havis ĝin en sia paperujo. Li
					fartis tre malbone post la operacio. Marta simple prenis la dokumenton
					el lia paperujo, dum li dormis; ŝi ja sciis, ke li ne vivos longe. Li
					fartis malbone. Lia sanstato ne lasis multe da espero. Fakte, li
					baldaŭ mortis post tio. Neniu do zorgis pri la malaperinta papero."</p>
					<p>"Kiel Ronga enmiksiĝis en la aranĝon?"</p>
					<p>"Li estis la amanto de Marta, kaj ŝi rakontis al li. Li vivas
					tiamaniere, ke li daŭre bezonas multe da mono. Li organizis la aferon.
					Estas li kaj kolego Fergus, kiuj forportis Gerdan, post kiam ili batis
					Bob senkonscia. La oficejo de Fergus estas tute proksima.  Tien ili
					portis ŝin, kaj tie ili atendis, ĝis la vojo estis libera kaj ili
					povis veturigi ŝin al la forlasita domo."</p>
					<p>Gerda parolis:</p>
					<p>"La frato de Marta plurfoje vizitis min, antaŭ kelkaj monatoj.
					Li provis igi min traduki por li la dokumenton. Sed kiam mi demandis,
					de kie li ricevis ĝin, li hezitis, iom paliĝis, ne respondis tuj, kaj
					mi komprenis, ke li ne agis honeste. Mi memoris la vortojn de Prof.
					Kosadi, kaj malakceptis kunlabori. Sed li revenis unufoje, dufoje,
					trifoje. Mi ĉiufoje rifuzis. Kiam mi poste ricevis inviton instrui pri
					malnovaj sekretaj lingvoj en la kadro de kurso de Prof. Ronga, mi tute
					ne imagis, ke estas rilato inter Ronga kaj la junulo, kiu tiel ofte
					venis al mia hejmo insisti, por ke mi traduku la paperon pri l' trezoro."</p>
					<p>"Jes," diris Tom. "Pro via plurfoja rifuzo ili elpensis tiun
					planon. Kapti vin kaj perforte devigi vin traduki la tekston."</p>
					<p>"Tiom da riskoj kaj zorgoj por nenio!" komentis Gerda. "Kia
					malsaĝeco! Kia stulteco!"</p>
					<p>"Jes. Amatoroj," diris la policano malestime. "Ili agis amatore
					ekde la komenco. Pro tio ni tiel facile ilin kaptis. Sed pri tiu
					amatoreco vi danku Dion, Gerda. Pro tiu amatoreco ni povis liberigi
					vin, kaj vi plu vivas. Neamatoroj en simila situacio ne hezitus: vin
					uzinte, ili vin mortigus."</p>
					<p>"Ĉu vere?"</p>
					<p>"Jes. Vi sciis tro multe. Estus tro danĝere lasi vin vivi.
					Sincere, vi povas danki Dion, ke nur amatoroj planis kaj realigis tiun
					aferon."</p>
					<p>Gerda silentis, pensema.</p>
					<p>"Terure!" ŝi fine diris. "Ĉiaokaze, mi plej sincere dankas
					vin, ĉiun el vi. Vi agis mirinde. Vi savis min kaj mian filinon. Sed,
					Bob, kion vi opinias pri la tuta afero? Vi ankoraŭ diris nenion."</p>
					<p>Bob rigardis ŝin, kun iom stranga esprimo.</p>
					<p>"Mi plezure trinkus glason da brando," li diris. Kaj li restis
					malĝojeta, dum ĉiuj aliaj ekridis.</p>
				</div>
				<div class="col s12 m4">
					<img src="bildoj/gerda25-1.gif" class="responsive-img">
				</div>
			</div>

		<?php 
		} // fin section 1
		if ($section=="2") {
		?>

			<section class="klarigo">
				<p>Il n'y a pas de nouveau point de grammaire pour ce chapitre. 
				Vous devriez pouvoir tout comprendre sans trop de difficultés.</p>
			</section>

		<?php 
		} // fin section 2
		if ($section=="3") {
		?>

			<div class="vortlisto row">
				<div class="col s12 l6">
					<p><span class="eo">Dio</span> : Dieu</p>
					<p><span class="eo">estimi</span> : estimer</p>
					<p><span class="eo">farti</span> : se porter (bien ou mal)</p>
					<p><span class="eo">insisti</span> : insister</p>
					<p><span class="eo">inviti</span> : inviter</p>
					<p><span class="eo">kadro</span> : cadre, structure</p>
					<p><span class="eo">kolego</span> : collègue</p>
					<p><span class="eo">komenti</span> : commenter</p>
				</div>
				<div class="col s12 l6">
					<p><span class="eo">kurso</span> : cours (d'un professeur)</p>
					<p><span class="eo">organizi</span> : organiser</p>
					<p><span class="eo">paperujo</span> : malette, cartable</p>
					<p><span class="eo">pluraj</span> : plusieurs</p>
					<p><span class="eo">rifuzi</span> : refuser</p>
					<p><span class="eo">stato</span> : état, condition, manière d'être, position</p>
					<p><span class="eo">teksto</span> : texte</p>
				</div>
			</div>

		<?php 
		} // fin section 3
		if ($section=="4") {
		?>

			<h3>Nova mistero!</h3>
	
			<p>KARA KAJ ESTIMATA LEGINTO,</p>
			<p>
			Vi legis ĉi tiun aventuron ĝis la fino. Sendube vi estas kontenta, ke
			ĉio finiĝis bone. Sed ĉu vi rimarkis, ke en la rakonto grava
			kontraŭdiro troviĝas? Alivorte, en unu loko la aŭtoro diras ion, kaj
			en alia li diras la kontraŭon. Vi ne rimarkis, ĉu vere?  Bedaŭrinde!
			Nun vi devos relegi la tutan tekston por trovi, pri kio temas. Legu
			atente, kaj se post unu legado vi ne trovis, relegu duan fojon, trian
			fojon, ktp. Certe vi fine trovos. Kaj se ne, nu, la vortoj kaj
			esprimmanieroj de Esperanto pli bone metiĝos en vian kapeton…
			</p>
			<fieldset class="ekzerco">
				<legend></legend>
				<div class="tasko">
				<?php $demandoj=array(
					1 => "Ĉu vi konas la respondon ?"
					);
					ekzerco(True, 5);
				?>
				</div>
			</fieldset>
	
			<h3>Demandoj, sed ne ekzercoj</h3>
	
			<fieldset class="ekzerco">
				<legend>Respondu libere.</legend>
				<input type="hidden" name="013_cxap25.1" value="Respondu libere.">
				<p class="primaire-texte texte-moyen">
				Ĉar tiu ĉi estas la lasta ĉapitro de la GERDA-kurso, ne estas
				demandoj pri la teksto, kaj ne estas ekzercoj. En ilia loko estas
				demandoj pri la tuta kurso, pri via opinio pri la kurso. Mi esperas, ke
				vi zorge respondos ilin, ĉar viaj respondoj helpos nin plibonigi la
				kurson.
				</p>
				<p class="primaire-texte texte-moyen">Respondu per multegaj vortoj!</p>

				<div class="tasko">
				<?php $demandoj=array(
					2 => "Kiom da Esperanto vi jam sciis, kiam vi komencis la GERDA-kurson? Kiel vi lernis Esperanton antaŭe?",
					3 => "Ĉu la GERDA-kurso estis por vi utila? Ĉu vi sukcesis multe lerni per ĝi? Ĉu vi ĝuis ĝin?",
					4 => "Ĉu vi pensas, ke la teksto uzita (la rakonto <i>Gerda malaperis!</i>) estis bone elektita? Ĉu ĝia lingvaĵo estas tro simpla? Ĉu la rakonto estas tro stulta, infaneca aŭ malinteresa?",
					5 => "Ĉu la demandoj pri la teksto estis utilaj? Ĉu eble estus pli bone havi nur ekzercojn post ĉiu ĉapitro, sen demandoj? Ĉu la demandoj estu malpli simplaj, por ke oni povu respondi ilin per pli da vortoj?",
					6 => "Ĉu la ekzercoj estis utilaj? Ĉu la vortaro-ekzercoj, en kiuj oni devas parigi vortojn kaj difinojn, estis utilaj? Kiuj estis la plej utilaj ekzercoj, kaj kiuj estis la malplej utilaj? Ĉu vi povas proponi aliajn specojn de ekzercoj?",
					7 => "Ĉu la <i>vortlisto</i> estis sufiĉe bona? Ĉu ĝi enhavu pli da gramatikaj klarigoj, aŭ pli da ekzemploj? Ĉu ĝi estu havebla en aliaj lingvoj? Ĉu eble vi eĉ povus helpi traduki ĝin al alia lingvo?",
					8 => "Ĉu vi uzis aŭ havas iujn aliajn lernilojn, ekzemple vortaron aŭ lernolibron pri Esperanto? Kiujn?",
					9 => "Ĉu vi volas plulerni Esperanton? Kiel? Ĉu kurso simila al la GERDA-kurso, sed kun bonaj literaturaj tekstoj anstataŭ la GERDA-rakonto, estus utila por vi? Ĉu vi preferus simple trastudi iun libron en Esperanto? Ĉu vi volus trastudi libron diskutante ĝin kun iu? Ĉu vi volas lerni pli pri la historio kaj celoj de la Esperanto-Movado?",
					);
					ekzerco(True, 2);
					?>
				</div>
			</fieldset>

		<?php 
		} // fin section 4
		if ($section=="5") {
			//include "lasusono.inc.php";
		?>

			<h3>La tri plendoj de s-ro Kursano</h3>
		
			<p>Sinjoro policano, mi havas plendon. Tri plendojn, fakte. Ĉu vi
			bonvolas noti?</p>
			
			<p>Mi esperas, ke vi povos fari ion, ĉar mia digno malbonfartas, kaj mi
			esperas, ke dank' al via interveno, ĝi refartos bone. Pri kio mi
			plendas? Pri multo, sinjoro policano, mi plendas pri multo.
			Multrilate oni malbonagis kontraŭ mi.</p>
			
			<p>Unue mi plendas pri provo ŝteli de mi monon. Due pri persekutado. Kaj
			trie... atendu... lasu min pripensi momenteton, estis ankaŭ io alia,
			sed ŝajnas, ke mi forgesis. Ha jes, kompreneble! Pri malvera
			promeso. Malhonesta promeso, se vi preferas.</p>
			
			<p>Oni diris al mi, ke, se mi pagos la kurson, mi finfine scios esprimi
			min en tiu lingvo, kaj mi konstatas, ke mi ne scias. Tio estas
			malhonesta, ĉu ne? Oni invitis min elpoŝigi mian monon, kaj kion mi
			ricevis? Ian komencan kaj malprecizan ideon pri la lingvo. Oni agis
			nejuste al mi. Mi ne ricevis ion samvaloran kiel la mono, kiun mi
			pagis. Tial mi petas vin skribi mian plendon, mian unuan: provo ŝteli
			monon de mi.</p>
			
			<p>Dua plendo: oni min persekutis. Kiel oni persekutis min, vi volas scii
			? Ĉefe la instruanto min persekutis, sed fojfoje ankaŭ la
			kunlernantoj. Imagu tion: esti persekutata de siaj samklasanoj!
			Nekredeble, ĉu? Tamen tio okazis. Mi diras la veron. Mi estas homo
			sincera, kaj tial ne elportas malhonestaĵojn, kaj malhonestaĵojn mi
			konstante travivis dum la daŭro de tiu kurso. Ili persekutis min
			dirante, ke mia maniero min esprimi en la tutmonda lingvo ne estas
			ĝusta. Konstante mankis iu N, ili diris; mi uzis la vortfinaĵon A
			kiam devus esti E, ili diris, ktp ktp ( = kaj tiel plu). Ĉiufoje mi
			aŭdis similajn rimarkojn, malestimajn. Ĉu mi povus allasi, ke oni
			min malrespektu tiamaniere? Ne, sinjoro policano. Mi povas akcepti
			multon malplaĉan, sed malrespekton mi firme rifuzas.</p>
			
			<p>Kiam homo ne rajtas paroli tute simple sen ricevi de ĉiuj flankoj
			rimarkojn pri tio, ke li sin esprimas fuŝe, kiel nomi tion, se ne
			persekutado? Konstante oni alsaltis min, ĉar mi diris IGI kaj ne
			IĜI, aŭ DE kaj ne DA. Estis organizita milito kontraŭ mia sento pri
			memdigno, kontraŭ mia memvaloro. Oni konstante provadis malaltigi min
			kaj estigi en mi sentojn de malplivaloro. Ĉu ni ne vivas en libera
			lando, kie, laŭtradicie, la digneco de homa persono estas respektata
			? Mi kuraĝe rifuzis lasi ilin subigi min, sed ili insistis. Plurfoje
			mi konstatis, ke ili trovas plezuron en la fakto diri al mi, ke mi
			fuŝlernis. Estas faka vorto, kiu difinas tiun sintenon, sed mi
			momente forgesis ĝin. Mia memoro ne fartas tre bone post tiu laciga
			lingvokurso.</p>
			
			<p>Kaj, trie, mi prezentas plendon pri malvera promeso. Oni promesis al
			mi, ke mi lernos facilan lingvon en plaĉa atmosfero. Fakte la lingvo
			estas tre malfacila, kaj la atmosfero... nu, plej bone eĉ ne paroli
			pri ĝi. Mi opiniis, ke oni uzos seriozan lernolibron, kie ĉio estas
			bonorde prezentita kaj klare difinita. Fakte, oni uzis neinteresan
			rakonton, pri kiu mi nenion komprenis, verŝajne ĉar nenio estis
			kompreninda. Ili eĉ ne sukcesis uzi ĉiufoje tekston kun sama
			longeco. Kelkfoje, la teksto, kiun ni legis kaj studis, havis malpli
			ol unu paĝon, alifoje ĝi estis dupaĝa. Estis suferige, por mia
			digneco de mezjuna viro, devi sekvi la knabecajn rakontojn. kiujn tiu
			kurso proponis al ni. Jam antaŭ longe mi forlasis la infanetan
			lernejon kaj nur persono, kies kapo fuŝe funkcias, povis imagi, ke
			tia rakontaĉo kontentigos normalan kursanaron.</p>
			
			<p>Cetere, kiom koncernas la normalecon de miaj samkursanoj... nu, ankaŭ
			ĉi-rilate estas preferinde silenti. Jen, sinjoro policano. Ĉu vi
			notis ĉion? Ĉi tio estas mia plendo. Mi insistas, por ke vi
			transsendu ĝin al la superaj aŭtoritatoj. Mi deziras, ke oni
			rejustigu la situacion, ke oni repagu al mi mian monon, kaj ke oni
			informu ĉiujn personojn, ke la lernado estos tute malsama ol ili
			atendas.</p>
			
			<p>Saluton, sinjoro policano. Fartu bone. Estas tempo, ke mi foriru. Kaj
			bonvole ne plendu, se mi brufermas la pordon. Mia furiozo devas
			esprimiĝi iamaniere, ĉu kun, ĉu sen N ĉe la vortofino. Ĝis la
			revido! Aŭ, pli bone eĉ, adiaŭ!
			</p>

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
		<?php
		pubFacebook();
		?>
	</aside>
</div>

<?php include "gerdapiedo.inc.php"; ?>