<?php 
$titolo="6 (ses)";
$leciono = 6;
$section=isset($_GET["section"])?htmlspecialchars($_GET["section"]):"1";
if (!is_numeric($section)) {
	if ($persono_id=="") {header("Location:../../index.php?erarkodo=24");}
}
include "gerdakapo.inc.php";
?>
<div class="row">
	<article class="col s12 m10 l7 offset-m1 offset-l1">
		
		<section id="leciono-enhavo">
		<?php 
		getTitoloLecionero('GR',$leciono,$section);
		?>
		<?php
		if ($section=="1") {
			include "gerdasono.inc.php";
		?>

			<h3>Gerda falas en la koridoro</h3>
			<div class="row dialogo">
				<div class="col s12 m8">
					<p><b>Tom:</b> Ĉu vi aŭdis? Kio estis tio?</p>
					<p><b>Bob:</b> Jes, mi aŭdis. Mi aŭdis ion.</p>
					<p><b>Linda:</b> Ankaŭ mi aŭdis strangan bruon, kvazaŭ iu falus en la
					koridoro.</p>
					<p><b>Bob:</b> Kvazaŭ <i>ŝi</i> falus.</p>
					<p><b>Tom:</b> Mi havis la saman penson kiel vi. Ankaŭ mi pensis tion.
					Ankaŭ mi pensis: jen Gerda falas en la koridoro.</p>
					<p><b>Linda:</b> Ĉu ni iru vidi?</p>
					<p><b>Tom:</b> Kompreneble. Ni iru tuj.</p>
					<p><b>Bob:</b> Mi iru kun Tom, sed vi restu ĉi tie, Linda. Observu tiun
					junulon, kun kiu Gerda parolis, kaj kiu eble metis drogon en ŝian
					kafon.</p>
					<p><b>Linda:</b> Ĉu vi ambaŭ foriras kaj mi restu tute sola? Mi iom timas.</p>
					<p><b>Bob:</b> Ni ne havas la tempon diskuti. Ni devas iri vidi tuj. Restu
					trankvile ĉi tie. Vi nenion riskas. Venu, Tom, ni ne perdu tempon.</p>
				</div>
				<div class="col s12 m4">
					<img src="bildoj/gerda06-1.gif" class="responsive-img">
				</div>
			</div>

		<?php 
		} // fin section 1
		if ($section=="2") {
		?>

			<section class="klarigo">
				<h4>Terminaison du complément d'object direct (pour montrer la destination d’une mouvement)</h4>
				<p class="parto">Certaines prépositions de lieu peuvent indiquer le lieu où se passe l’action (le sujet réalise l’action dans ce lieu) ou le lieu vers lequel il y un mouvement (le sujet se déplace vers ce lieu ou déplace quelque chose vers ce lieu).</p>
				<p>C’est le cas des prépositions <span class="eo">en</span>, <span class="eo">sur</span> et <span class="eo">sub</span>. 
				
				<p>Exemples :</p>
				<div class="row">
					<p class="col s12"><span class="eo">la taso falis <b>sur</b> la tabl<b>o</b></span> : la tasse est tombée sur la table</p>
					<p class="col s11 offset-s1"><i>la tasse, qui était déjà sur la table tomba (tout en restant sur la table)</i></p>
					<p class="col s12"><span class="eo">la taso falis <b>sur</b> la tabl<b>on</b></span> : la tasse est tombée sur la table</p>
					<p class="col s11 offset-s1"><i>la tasse n’était pas sur la table avant de tomber</i></p>
					<p class="col s12"><span class="eo">li promenis <b>en</b> la ĝarden<b>o</b></span> : il se promenait dans le jardin</p>
					<p class="col s11 offset-s1"><i>il est resté dans le jardin pendant sa promenade</i></p>
					<p class="col s12"><span class="eo">li promenis <b>en</b> la ĝarden<b>on</b></span> : il alla se promener dans le jardin</p>
					<p class="col s11 offset-s1"><i>il n’était pas dans le jardin, il y est allé en se promenant</i></p>
				</div>
				
				<p class="parto"><b>Note :</b> On n’utilise jamais l’accusatif après les prépositions <span class="eo">al</span>, <span class="eo">ĝis</span>,<span class="eo">el</span> et <span class="eo">de</span> car ces prépositions portent en elles-mêmes le sens du mouvement vers ou depuis un lieu.</p>
					<p>Exemples : </p>
					<p><span class="eo">mi iras <b>al</b> Pariz<b>o</b></span> : je vais à Paris</p>
					<p><span class="eo">mi restas <b>ĝis</b> la fin<b>o</b></span> : je reste jusqu’à la fin</p>
					<p><span class="eo">mi venas <b>el</b> la panvendej<b>o</b></span> : je viens de la boulangerie</p>
					<p><span class="eo">mi spektas tiun filmon <b>de</b> la komenc<b>o</b></span> : je regarde ce film depuis le début</p>

				<h4>Différences entre les différents modes (-as, -u, -us)</h4>
				<p class="parto">Notez bien les différences de sens entre les différents modes (-as, -u, -us)
				dans les phrases interrogatives ci-dessous&nbsp;:</p>

				<div class="row">
					<p class="col s12"><span class="eo">ĉu li rest<b>as</b>?</span>&nbsp;: est-ce qu'il reste&nbsp;?</p>
					<p class="col s12"><span class="eo">ĉu li rest<b>u</b>?</span>&nbsp;: est-ce qu'il doit rester ?&nbsp;; faut-il qu'il reste&nbsp;?</p>
					<p class="col s12"><span class="eo">ĉu li rest<b>us</b>?</span>&nbsp;: est-ce qu'il resterait (si…)&nbsp;?</p>

					<p class="col s12"><span class="eo">kion mi dir<b>as</b></span>&nbsp;: que dis-je&nbsp;?</p>
					<p class="col s12"><span class="eo">kion mi dir<b>u</b></span>&nbsp;: que dois-je dire&nbsp;?&nbsp;; que dire&nbsp;?</p>
					<p class="col s12"><span class="eo">kion mi dir<b>us</b></span>&nbsp;: que dirais-je (si…)&nbsp;?</p>
				</div>
			</section>

		<?php 
		} // fin section 2
		if ($section=="3") {
		?>

			<?php if ($persono) { ?>
			<p class="eo eta">Ces mots seront automatiquement ajoutés à votre vocabulaire à réviser lorsque vous aurez terminé d'étudier cette section.</p>
			<?php } ?>
			<div class="vortlisto row">
				<div class="col s12 l6">
					<p><span class="eo">ambaŭ</span> : tous deux, tous les deux, l'un et l'autre</p>
					<p><span class="eo">aŭdi</span> : entendre</p>
					<p><span class="eo">bruo</span> : bruit</p>
					<p><span class="eo">decidi</span> : décider<br>
						<span class="eo">decido</span> : décision</p>
					<p><span class="eo">devi</span> : devoir (verbe)<br>
							<span class="eo">vi devas</span> : tu dois, vous devez</p>
					<p><span class="eo">devo</span> : devoir (nom)</p>
					<p><span class="eo">diskuti</span> : discuter<br>
						<span class="eo">diskuto</span> : discussion</p>
					<p><span class="eo">fali</span> : tomber<br>
						<span class="eo">falo</span> : chute</p>
					<p><span class="eo">kafo</span> : café</p>
				</div>
				<div class="col s12 l6">
					<p><span class="eo">koridoro</span> : couloir, corridor</p>
					<p><span class="eo">meti</span> : mettre, poser, placer</p>
					<p><span class="eo">observi</span> : observer</p>
					<p><span class="eo">pensi</span> : penser</p>
					<p><span class="eo">perdi</span> : perdre</p>
					<p><span class="eo">resti</span> : rester</p>
					<p><span class="eo">riski</span> : risquer</p>
					<p><span class="eo">sama</span> : le même, la même, identique, pareil(le)</p>
					<p><span class="eo">tempo</span> : temps</p>
					<p><span class="eo">timi</span> : craindre, avoir peur</p>
					<p><span class="eo">trankvila</span> : tranquille, calme</p>
				</div>
			</div>

		<?php 
		} // fin section 3
		if ($section=="4") {
		?>

			<?php 
				getEkzercon(60,$persono_id);
			?>

			<?php 
				getEkzercon(61,$persono_id);
			?>

		<?php 
		} // fin section 4
		if ($section=="5") {
			include "lasusono.inc.php";
		?>

			<h3>La ulo, kiu ne plu pensas</h3>
			<p>Pri kio mi pensas, li demandis. Ĉu vi aŭdis lin? Kiel strangaj tiuj
			uloj estas! Kvazaŭ mi scius, pri kio mi pensas. Ĉu mi vere pensis
			ion? Ĉu oni devas pensi dum la tuta tempo? Tio ne ŝajnas al mi
			prava.</p>
			
			<p>Mi perdis la forton pensi antaŭ multe da tempo. Kiam mi estis juna,
			fakte. Mi foriris por promeni en la naturo. La naturo estis bela. Mia
			povo pensi forfalis dum tiu promeno. Kaj nun, mi estas «la ulo, kiu ne
			pensas».</p>
			
			<p>Verdire (ver-dire), mi ne estas la sola. Ankaŭ aliaj viroj kaj
			virinoj, ankaŭ aliaj knaboj kaj knabinoj preferas ne pensi. Ankaŭ
			multaj universitataj profesoroj neniam pensas. Ili ŝajnas pensi, sed
			ne pensas vere. Ili agas, kvazaŭ ili pensus. Nur agas kvazaŭ ; ĉu
			vi komprenas?</p>
			
			<p>Mi scias. Antaŭ iom da tempo, ankaŭ mi instruis en universitato. Sed
			mi ne volis forperdi mian forton en absurdan agon, kiel pensi. Estas
			tro riske. Imagu! Se mi perdus miajn ideojn! Mi verŝajne havas
			ideojn. Mi ne scias tute certe — mi neniam rigardas ilin — sed plej
			verŝajne ideojn mi havas.</p>
			
			<p>Se jes, miaj ideoj restas trankvilaj en iu anguleto en mi. Mi timas
			perdi ilin kaj do neniam iras ilin vidi. Fakte, mi ne scias, ĉu ili
			ekzistas. Verŝajne ili restas solaj en iu anguleto de mi. Solaj kaj
			trankvilaj. Ili ne timu mian venon. Mi ne riskas veni.</p>
			
			<p>Ĉu vi aŭdis pri Kartezio<a href='#notoj'>[1]</a>? 
			Li estis granda profesoro antaŭ multe
			da tempo. Li diris: «Mi pensas, do mi estas». Mi diras malsame: «Mi ne
			pensas, tamen mi estas. Mi ne pensas, tamen mi ekzistas». Mi scias, ke
			mi ekzistas. Pri mia ekzisto mi estas tute certa. «Kiel vi povas tion
			scii, se vi ne pensas?» vi eble demandas vin. Nu, karuloj, mi scias,
			ke mi ekzistas: mi aŭdas. Mi aŭdas, do mi estas. Mi aŭdas, do mi
			ekzistas.</p>
			
			<p>«Ĉu esti, ĉu ne esti, jen la demando», diris alia grandulo. Nu, por
			mi, tio ne estas demando. Mi estas, kaj tio estas bela fakto por mi.
			Eble mi estas stranga, sed mi amas mian ekziston. La fakto, ke mi
			ekzistas, estas por mi — eble ne por vi! — bela fakto. Antaŭ la
			demando «ĉu esti, ĉu ne esti», mi tute ne timas. Mi respondas simple
			«esti», kaj restas tute trankvila.</p>
			
			<p>«Mi aŭdas, do mi ekzistas», mi diris. Jes, mi aŭdas. Mi aŭdas tre
			bone. Mi havas tre bonan aŭdpovon. Fakte, mi aŭdis vin diri ion ne
			tre belan pri mi. Haha! Vi pensis, ke mi ne aŭdas, ĉu ne? Sed mi
			aŭdas plej bone. Vi povas diri ion tre malforte, kvazaŭ vi tute
			perdus la forton paroli. Tamen mi aŭdas vin. Mia aŭdo estas tre
			bona. Tro bona, eble. Ofte okazas, ke mi aŭdas aferojn, kiujn mi
			devus ne aŭdi. Jes, mi aŭdas vere tre bone.</p>
			
			<p>Same pri mia vidpovo: mi ankaŭ vidas tre bone. Nur mia penspovo ne
			estas bona kiel miaj aŭdo kaj vido. Mi malamas pensi. Mi ne havas la
			tempon pensi. Mi havas tempon por neseriozaj aferoj, ne havas tempon
			por seriozaj, ĉu vi komprenas?</p>
			
			<p>Se mi metas mian forton en tiun laboron — pensi estas labori, ĉu ne? 
			— mi perdas ĝin. Mi tute ne deziras perdi mian forton. Estas bone
			esti forta<a href='#notoj'>[2]</a>.</p>
			
			<p>Verdire, ŝajni forta estas ankoraŭ pli bone, en la nuna mondo,
			ŝajnas al mi. Plej ofte gravas la aspekto. Se vi ŝajnas forta, oni
			timas vin, kvazaŭ vi estus forta. Se vi estas forta, sed ŝajnas
			malforta, oni ne konsideras vin serioze. Nur se la aliaj vidas, ke,
			kun via malforta aspekto, vi tamen estas vere forta, nur tiam ili
			konsideras vin serioze.</p>
			
			<p>Ĉu vi aŭdis min? Mi diris, ke mia forto estas grava por mi. Mi do ne
			volas perdi ĝin, kaj mi do malkonsentas pensi. La aliaj pensu pri
			tiel gravaj demandoj kiel «ĉu esti, ĉu ne esti», «ĉu mi pensas, kaj
			do ekzistas? ĉu mi ne pensas, kaj do ne ekzistas?». Ne mi. Mi ne
			deziras diskuti pri tiuj demandoj. Mi povas observi min multatempe, mi
			neniam vidas deziron pripensi pri la demando de mia ekzisto. Sed mi
			bone komprenas, ke vi eble havas aliajn dezirojn. Eble vi deziras
			pridiskuti la demandon, ĉu vi ekzistas. Diskutu ĝin do, sed ne kun
			mi.</p>
			
			<p>Pensu vi, se vi volas. Pensu, fakte, kion vi volas. Ne gravas al mi,
			ĉu vi pensas, ĉu vi ne pensas, ĉu vi pensas prave, ĉu vi pensas
			malprave. Tute ne gravas al mi. Viaj pensoj povas fali unu post la
			alia sur la tablon, vi povas meti ilin en vian tason da kafo, vi povas
			kaŝi ilin en sukerujon, tute ne gravas al mi. Se viaj pensoj faras
			grandan bruon dum-fale, ne gravas al mi. Se ili ne falas sur la
			tablon, kaj bruon tute ne faras, kaj restas trankvile en via poŝo,
			same ne gravas al mi. Nur unu peton mi havas: permesu al mi ne pensi.
			Kaj post tiu deklaro, permesu, ke mi salutu vin. Bonan tagon! Ne
			pensu tro! Kaj la forto restu kun vi!</p>
			
			<a id="notoj"></a>
			<p class="rimarko"><strong>NOTOJ</strong> : 
			<ol>
				<li><span class="eo">Kartezio</span> = Descartes.</li>
				<li>En Esperanto, oni diras: estas —e —i, —i estas —e, estas —e,
				ke … Same kiel oni diras: <i>natura ago</i>, sed <i>nature agi</i>,
				same oni diras <i>la ago estas natura</i>, sed <i>agi estas
				nature</i></li>
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
	
	<?php include "gerdaflanko.inc.php"; ?>

</div>

<?php include "gerdapiedo.inc.php"; ?>
