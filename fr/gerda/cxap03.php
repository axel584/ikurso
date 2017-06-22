<?php 
$titolo="3 (tri)";
$leciono = 3;
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

			<h3>Amdeklaro</h3>
			<div class="row dialogo">
				<div class="col s12 m8">
					<p><b>Bob:</b> Diable! Kio okazas? Vi aspektas kiel spionoj. Ĉu mi povas sidi
					kun vi?</p>
					<p><b>Linda:</b> Saluton, Bob.</p>
					<p><b>Tom:</b> Bonan tagon, Bob.</p>
					<p><b>Bob:</b> Bonan tagon, Linda. Bonan tagon, Tom. Pardonu, ke mi ne salutis
					vin tuj.</p>
					<p><b>Linda:</b> Ne gravas. Nun vi salutis, kaj ni pardonas vin.</p>
					<p><b>Bob:</b> Ĉu vi permesas, ke mi sidu ĉe via tablo?</p>
					<p><b>Linda:</b> Kompreneble, vi sidu kun ni.</p>
					<p><b>Bob:</b> Mi tamen ne volas esti maldiskreta. Eble Tom parolas pri amo
					kaj preferas esti sola kun vi.</p>
					<p><b>Tom:</b> Mi ne parolis pri amo.</p>
					<p><b>Linda:</b> Li nur diris, ke mi estas la plej bela virino en la tuta mondo.</p>
					<p><b>Bob:</b> Li pravas. Tio ne estas amdeklaro, tio estas simpla fakto.</p>
					<p><b>Tom:</b> Prave. Simpla fakto.</p>
					<p><b>Bob:</b> Nu, certe, Linda estas tre bela, sed ne tio gravas nun.</p>
					<p><b>Linda:</b> Ne gravas, ĉu? Ne gravas, ke mi estas bela, ĉu? Jen bela deklaro!</p>
					<p><b>Bob:</b> Pardonu min. Mi volas diri, ke io estas pli grava.</p>
				</div>
				<div class="col s12 m4">
					<img src="bildoj/gerda03-1.gif" class="responsive-img">
				</div>
			</div>
			<div class="row dialogo">
				<div class="col s12 m8">
					<p><b>Tom:</b> Kio? Pri kio vi parolas? Kio estas pli grava?</p>
					<p><b>Bob:</b> Vi ne vidis min, dum mi proksimiĝis al vi, sed mi vin
					rigardis.</p>
					<p><b>Linda:</b> Mi ne komprenas, pri kio vi parolas.</p>
					<p><b>Bob:</b> Mi parolas pri via vizaĝo.</p>
					<p><b>Linda:</b> Kio pri mia vizaĝo? Ĉu ĝi ne estas bela?</p>
					<p><b>Bob:</b> Ho jes, ĝi estas bela, ĝi estas la plej bela en la mondo.
					Sed ĝi estis mistera!</p>
					<p><b>Linda:</b> Mistera? Ĉu mia vizaĝo estis mistera?</p>
					<p><b>Bob:</b> Jes. Via vizaĝo estis mistera. Fakte, viaj vizaĝoj estis
					misteraj. Mistera vizaĝo de spionino ĉe mistera vizaĝo de spiono.
					Vi aspektis strange. Vi aspektis mistere. Mi bone rigardis vin, dum mi
					proksimiĝis al vi, kaj estis mistera esprimo sur via vizaĝo, Linda,
					kaj ankaŭ sur via, Tom. Kiel mi jam diris, vi aspektis kiel spionoj.</p>
				</div>
				<div class="col s12 m4">
					<img src="bildoj/gerda03-2.gif">
				</div>
			</div>

		<?php 
		} // fin section 1
		if ($section=="2") {
		?>
		
		<section class="klarigo">
			<h4>-j : <i>pluriel</i></h4>
			<p><span class="eo">viro</span> : (une) homme → <span class="eo">viroj</span> : (des) hommes</p>
			<p><span class="eo">virino</span> : (une) femme → <span class="eo">virinoj</span> : (des) femmes</p>
			<p><span class="eo">juna viro</span> : (un) jeune homme → <span class="eo">junaj viroj</span> : (des) jeunes hommes</p>
			<p><span class="eo">bela tago</span> : (une) belle journée → <span class="eo">belaj tagoj</span> : (de) belles journées</p>
			<p><span class="eo">mi scias</span> : je sais → <span class="eo">scio</span> : savoir (n.), connaissance</p>
			
			<h4>-i : <i>infinitif</i></h4>
			<p><span class="eo">kompreni estas pardoni</span> : comprendre c'est pardonner</p>

			<p><span class="eo">mi salutas lin</span> : je le salue<br>
				<span class="eo">mi volas saluti lin</span> : je veux le saluer</p>

			<p><span class="eo">li komprenas</span> : il comprend<br>
				<span class="eo">li povas kompreni</span> : il peut comprendre<br>
				<span class="eo">la povo kompreni</span> : la capacité de comprendre</p>
			
			<h4>-is : <i>verbe, temps passé</i></h4>
			<p><span class="eo">mi estis</span> : j'étais, je fus, j'ai été</p>
			<p><span class="eo">li venis</span> : il est venu, il vint, il venait</p>
			<p><span class="eo">ŝi amis vin</span> : elle t'a aimé, elle t'aima, elle t'aimait</p>
			
			<h4>-a (avec un pronom personnel)</h4>
			<p>Ajoutée à la base d'un pronom personnel (<span class="eo">mi</span>, <span class="eo">vi</span>, <span class="eo">li</span>, <span class="eo">ŝi</span>, <span class="eo">ĝi</span>, <span class="eo">ni</span>, <span class="eo">ili</span>), 
			la terminaison -<b>a</b> sert à former des adjectifs possessifs.</p>
			
			<h4>-ebl- : <i>possibilité</i></h4>
			<p><span class="eo">kompreni</span> : comprendre → <span class="eo">komprenebla</span> : compréhensible</p>
			<p><span class="eo">vidi</span> : voir → <span class="eo">videbla</span> : visible&nbsp;/ <span class="eo">nevidebla</span> : invisible</p>
			<p><span class="eo">ami</span> : aimer → <span class="eo">amebla</span> : aimable, qui peut être aimé</p>
		
			<h4>mal- : <i>utilisé pour obtenir le contraire, l'antonyme.</i></h4>
			<p><span class="eo">ami</span> : aimer → <span class="eo">ne ami</span> : ne pas aimer, <span class='ekz'>malami</span> : haïr</p>
			<p><span class="eo">forta</span> : fort → <span class="eo">ne forta/neforta</span> : pas fort / <span class="eo">malforta</span> : faible</p>
		
			<p><span class="eo">tio ne gravas</span> : ça n'a pas d'importance<br>
				<span class="eo">ne tio gravas</span> : ce n'est pas cela qui importe</p>
			<p><span class="eo">li aspektas kiel studento</span> : il a l'air d'un étudiant</p>
			<p><span class="eo">ŝi aspektas june</span> : elle paraît jeune<br>
				<span class="eta">(On utilise aussi <span class='eo'>ŝi aspektas juna</span>, 
				ce que certains puristes désapprouvent.)</span></p>
		</section>

		<?php 
		} // fin section 2
		if ($section=="3") {
		?>

		<p class="parto">À partir de cette leçon nous ne vous indiquerons plus la prononciation 
		figurée sauf exception.</p>
			<?php if ($persono) { ?>
			<p class="eo eta">Ces mots seront automatiquement ajoutés à votre vocabulaire à réviser lorsque vous aurez terminé d'étudier cette section.</p>
			<?php } ?>
			<div class="vortlisto row">
				<div class="col s12 l6">
					<p><span class="eo">amdeklaro</span> = <span class="eo">am</span>- + <span class="eo">deklaro</span><br>= deklaro de amo = deklaro pri amo</p>
					<p><span class="eo">ami</span> : aimer</p>
					<p class="sekva"><span class="eo">amo</span> : amour</p>
					<p><span class="eo">ankaŭ</span> : aussi <span class="eta">[<i><b>anne</b>-kaou (ou bref)</i>]</span></p>
					<p><span class="eo">aspekti</span> : ressembler (à)</p>
					<p class="sekva"><span class="eo">aspekto</span> : aspect, apparence, ressemblance</p>
					<p><span class="eo">bonan tagon</span> : bonjour</p>
					<p><span class="eo">ĉe</span> : à (comme dans «à la table»), à côté, près de</p>
					<p><span class="eo">de</span> : de (possession)</p>
					<p><span class="eo">deklari</span> : déclarer</p>
					<p class="sekva"><span class="eo">deklaro</span> : déclaration</p>
					<p><span class="eo">esprimi</span> : exprimer</p>
					<p class="sekva"><span class="eo">esprimo</span> : expression</p>
					<p><span class="eo">grava</span> : important(e)</p>
					<p class="sekva"><span class="eo">gravi</span> : avoir de l'importance</p>
					<p><span class="eo">ĝi</span> : il, elle (pour les non-personnes : objets, animaux, abstractions…)</p>
					<p class="sekva"><span class="eo">ĝia</span> : son, sa (à lui,neutre)</p>
					<p><span class="eo">jam</span> : déjà</p>
					<p><span class="eo">kiel</span> : comme, à (comme dans «ressembler à»)&nbsp;; comment</p>
					<p><span class="eo">kompreni</span> : comprendre</p>
					<p class="sekva"><span class="eo">kompreneble</span> : naturellement, bien entendu</p>
					<p><span class="eo">mia</span> : mon, ma</p>
				</div>
				<div class="col s12 l6">
					<p><span class="eo">ne gravas</span> : ça n'a pas d'importance, peu importe</p>
					<p><span class="eo">ni</span> : nous</p>
					<p class="sekva"><span class="eo">nia</span> : notre</p>
					<p><span class="eo">pardoni</span> : pardonner</p>
					<p><span class="eo">permesi</span> : permettre</p>
					<p><span class="eo">pli</span> : plus (en plus grande quantité)</p>
					<p><span class="eo">povi</span> : pouvoir, être capable de</p>
					<p><span class="eo">preferi</span> : préférer</p>
					<p><span class="eo">pri</span> : à propos de</p>
					<p><span class="eo">saluti</span> : saluer</p>
					<p class="sekva"><span class="eo tab">salutis</span> : <i>voir <b>-is</b> dans la partie <i>klarigoj</i></i></p>
					<p><span class="eo">simpla</span> : simple</p>
					<p><span class="eo">spiono</span> : espion</p>
					<p><span class="eo">sur</span> : sur</p>
					<p><span class="eo">tablo</span> : table</p>
					<p><span class="eo">tago</span> : jour</p>
					<p><span class="eo">tamen</span> : néanmoins, toutefois, quand même, cependant</p>
					<p><span class="eo">tio</span> : cela, ça, cette chose-là, ce</p>
					<p class="sekva"><span class="eo">tio estas simpla</span> : c'est simple</p>
					<p><span class="eo">tuj</span> : immédiatement, sur le champ</p>
					<p><span class="eo">via</span> : votre</p>
					<p><span class="eo">vizaĝo</span> : face, visage</p>
				</div>
			</div>

		<?php 
		} // fin section 3
		if ($section=="4") {
		?>

			<?php 
				getEkzercon(54,$persono_id);
			?>

			<?php 
				getEkzercon(55,$persono_id);
			?>

		<?php 
		} // fin section 4
		if ($section=="5") {
		?>

			<div class="row">
				<div class="col s12">
					<div class="card-panel blue lighten-5">
						Grâce à ce que vous avez appris dans cette leçon, vous devriez sans problème pouvoir comprendre le texte suivant. L'histoire n'est pas liée à celle de <i>Gerda malaperis</i>, mais elle vous permettra de découvrir d'autres constructions de mots.
					</div>
				</div>
			</div>

		<?php
			include "lasusono.inc.php";
		?>

			<h3>Amdeklaro</h3>
			<p>Izabela, pardonu min, sed mia deklaro estas plej grava. Permesu, ke mi
			parolu al vi. Permesu, ke mi rigardu al vi, al via bela, serioza
			vizaĝo.</p>
			
			<p>Mi min demandas, ĉu vi povas kompreni min. Eble ne. Eble vi ne povas.
			Okazas io stranga en mi. Io tute nekomprenebla. Vi estas tro bela. Tio
			estas la grava fakto, la sola vere grava fakto en la mondo.</p>
			
			<p>Mi rigardis al via tro bela vizaĝo, kaj io nekomprenebla okazis en
			mi. Io nekomprenebla okazis al mi. Mi ne plu komprenas min. Mi ne plu
			estas mi. Mi rigardis vin, mi simple rigardis vin, kaj mi ne plu estas
			la juna malserioza knabo, kiu mi estis.</p>
			
			<p>Mi estis knabo, kaj nun estas viro. Mi estis malforta, kaj mia forto
			nun estas nekompreneble granda. Mi estas kvazaŭ tute nova. Mi estis
			sola en la mondo. Nun mi povas esti kun vi. Se vi volas, kompreneble.</p>
			
			<p>Mi volas proksimiĝi al vi. Mi volas esti kun vi. Mi volas paroli al
			vi pri la belo de la tago, pri la bono de la naturo, pri la grando de
			la mondo. Mi volas paroli al vi pri viaj belaj manoj, pri via bela
			vizaĝo.</p>
			
			<p>Mi scias, ke vi estas mistera. Virinoj al mi aspektas mistere. Mi
			volas ke vi, mistera virino, rigardu al mi, amu min. Mi volas sidi ĉe
			via tablo, mi volas paroli kun vi dum la tuta tago, dum multaj kaj
			multaj tutaj tagoj. Mi scias, ke mi ne esprimas min bone. Pardonu min,
			mi petas. Mi estas certa, ke vi komprenas min. Sed eble ne. Eble vi ne
			povas kompreni. Mi volas, ke vi komprenu min, sed eble vi ne povas. Mi
			petas vin, montru al mi, ke vi komprenas. Montru al mi, ke vi
			permesas, ke mi parolu plu. Diru al mi, ke vi permesas, ke mi deklaru
			plu, kiel forte mi amas vin. Certe vi permesas, ĉu ne?</p>
			
			<p>Ho Izabela, permesu, ke mia mano proksimiĝu al via mano, ke mia mano
			iomete haltu sur via mano. Ĉu ne? Ĉu vi ne volas? Ĉu vi
			malpermesas? Ĉu mi estas nepardonebla? Ĉu mi agis nepardoneble?
			Mi agis nur nature.</p>
			
			<p>Mi parolas serioze. Ĉu mi estis malprava? Ĉu vi ne pardonas min?
			Tamen, Izabela, mi nur amas. Ĉu vi ne volas, ke mi amu vin? Ĉu vi
			ne povas min ami? Ĉu vi ne volas min ami? Ĉu vi ne volas min ?</p>
			
			<p>Permesu tamen, ke mi vin rigardu. Mi parolas plej serioze. Vi ne
			komprenas, ke mi amas vin, ĉu? Ĉu eble vi ne scias, ke vi estas
			bela, tre bela, tre tre bela, fakte ?</p>
			
			<p>Se vi ne volas, ke mi amu vin tute, se vi preferas, ke mi ne amu vin,
			eble vi tamen permesas, ke mi amu vin iomete. Nur iomete, Izabela, mi
			petas. Se vi ne permesas, ke mi amu vin multe, mi petas vin, permesu,
			ke mi amu vin iomete.</p>
			
			<p>Amo estas la plej alta vero en la mondo. Kio estas pli bela? Kio
			estas pli granda? Kio estas pli forta? Nenio.</p>
			
			<p>Mi povas plej serioze deklari al vi, ke nenio estas pli bela, nenio
			estas pli alta, nenio estas pli forta. Mi povas ankaŭ diri: nenio
			estas pli natura. Tio estas la plej certa vero en la tuta mondo.</p>
			
			<p>Mi amas vin, Izabela. Mi vin amas forte. Mi amas vin pli kaj pli.</p>
			
			<p>Mi petas vin, pardonu al mi, sed se vi povas, ankaŭ vi amu min. Ĉu
			vi scias, kiel simpla estas amo? Kiel simpla kaj bona? Nenio estas
			pli simpla. Nenio estas pli bona.</p>
			
			<p>Mi amas vin, Izabela. Pardonu, se mi parolas iom strange. Sed mia amo
			estas tro forta, tro grava. Ne gravas, se vi ne komprenas. La sola,
			simpla fakto estas, ke mi amas vin. Kaj ke tio estas bona.</p>

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
