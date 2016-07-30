<?php 
$titolo="2 (du)";
$leciono = 2;
$section=isset($_GET["section"])?$_GET["section"]:"1";
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

			<h3>Kio okazas?</h3>
			<div class="row dialogo">
				<div class="col s12 m8">
					<p><b>Linda:</b> Tom!</p>
					<p><b>Tom:</b> Kio okazas al vi? Vi estas pala! Bela, sed pala.</p>
					<p><b>Linda:</b> Tom! Ne rigardu!</p>
					<p><b>Tom:</b>	Kio okazas?</p>
					<p><b>Linda:</b> Strange! Okazas io stranga, io tre stranga. Tiu ulo, tiu nova
					studento… Ne, ne, mi petas vin, ne rigardu. Estu diskreta.</p>
					<p><b>Tom:</b> Diable! Diru al mi. Kio estas tiu mistero?</p>
					<p><b>Linda:</b> Lia mano agas strange. Rigardu, se vi volas, sed plej diskrete.
					Turnu vin iomete, eble, sed tute nature. Li ne vidu, ke vi rigardas al li.</p>
					<p><b>Tom:</b> Vi pravas. Io stranga okazas. Dum ŝi ne rigardas al li – ŝi
					nun rigardas al la granda spegulo – lia mano iom post iom, tre tre
					malrapide, proksimiĝas al ŝia taso…</p>
					<p><b>Linda:</b> Estas io en lia mano.</p>
					<p><b>Tom:</b> Mi ne vidas. Li estas tro malproksima. Diable! Tiu alta forta
					knabo nun staras inter ili kaj mi. Mi ne plu vidas.</p>
				</div>
				<div class="col s12 m4">
					<img src="bildoj/gerda02-1.gif" class="responsive-img">
				</div>
			</div>
			<div class="row dialogo">
				<div class="col s12 m8">
					<p><b>Linda:</b> Sed mi vidas. Mi vidas bone. Mi vidas tre bone. Mi vidas tute bone. Ej!</p>
					<p><b>Tom:</b> Kio okazas?</p>
					<p><b>Linda:</b> Ŝi rigardas al li nun, kaj lia mano haltas.</p>
					<p><b>Tom:</b> Kaj kio plu? Diru al mi!</p>
					<p><b>Linda:</b> Nun li parolas al ŝi. Li montras al la pordo.</p>
					<p><b>Tom:</b> Eble li volas, ke ŝi rigardu al alia direkto, ke ŝi ne plu rigardu al li.</p>
					<p><b>Linda:</b> Prave, tute prave. Jen ŝi rigardas al la pordo. Li plu parolas
					kaj parolas. Dum ŝi ne rigardas al lia direkto, lia mano plu
					proksimiĝas al la taso. Ej!</p>
					<p><b>Tom:</b> Kio? Kio okazas?</p>
					<p><b>Linda:</b> Lia mano revenas, tute diskrete, kvazaŭ tute nature.</p>
					<p><b>Tom:</b> Ĉu estas io en lia mano?</p>
					<p><b>Linda:</b> Nenio plu. Sed tute certe nun estas io en ŝia taso.</p>
				</div>
				<div class="col s12 m4">
					<img src="bildoj/gerda02-2.gif" class="responsive-img">
				</div>
			</div>
		<?php 
		} // fin section 1
		if ($section=="2") {
		?>

			<section class="klarigo">
				<h4>-iĝ- : <i>devenir, …</i></h4>
				<p><span class="eo">proksima</span> : proche → <span class="eo">ili proksimiĝas</span> : ils se rapprochent</p>
				<p><span class="eo">stara</span> : debout → <span class="eo">li stariĝas</span> : il se lève</p>
				<p><span class="eo">viro</span> : homme, mâle → <span class="eo">la knabo viriĝas</span> : le garçon est en train de devenir un homme</p>
				<p><span class="eo">rapida</span> : vite, rapide → <span class="eo">rapidiĝo</span> : accélération</p>
	
				<h4>re- : <i>répétition, retour</i></h4>
				<p><span class="eo">ŝi vidas</span> : elle voit → <span class="eo">ŝi revidas</span> : elle revoit</p>
				<p><span class="eo">vi venas</span> : vous venez → <span class="eo">vi revenas</span> : vous revenez</p>
				<p><span class="eo">li fortiĝas</span> : il devient fort → <span class="eo">li refortiĝas</span> : il retrouve ses forces</p>
				<p><span class="eo">bela</span> : belle → <span class="eo">ŝi rebeliĝas</span> : elle redevient belle&nbsp;/ <span class="eo">rebeliĝo</span> : le fait de retrouver sa beauté</p>
				
				<h4>-ulo : <i>une personne</i></h4>
				<p><span class="eo">juna</span> : jeune → <span class="eo">junulo</span> : un jeune</p>
				<p><span class="eo">forta</span> : fort → <span class="eo">fortulo</span> : un homme fort</p>
				<p><span class="eo">stranga</span> : bizarre → <span class="eo">strangulo</span> : un type bizarre, un original</p>
	
				<h4>-n : <i>complément d'object direct d'un verbe</i></h4>
				<p><span class="eo">li vidas vin, li vin vidas, vin li vidas, vidas li vin, vidas vin li,
				</span> : il te voit</p>
				<p><span class="eo">vi vidas lin, vi lin vidas, lin vi vidas, vidas vi lin, vidas lin vi
				</span> : tu le vois</p>
				<p><span class="eo">mi petas vin</span> : je te demande (de faire quelque chose), je te prie</p>
	
				<p class="parto">
				Notez l'emploi de <b>estas</b> dans le sens de <em>il y a</em>&nbsp;:</p>
				<p><span class="eo">estas io en lia mano</span> : il y a quelque chose dans sa main</p>
				<p><span class="eo">estas nenio en lia mano</span> : il n'y a rien dans sa main, 
				il n'a rien dans la main</p>
	
				<p class="parto">
				Notez l'emploi de la forme d'adverbe en <b>-e</b> dans les cas suivants :</p>
				<p><span class="eo">estas prave</span> : c'est exact</p>
				<p><span class="eo">prave!</span> : exact !</p>
				<p><span class="eo">strange!</span> : bizarre !</p>
	
				<p class="parto">Faites attention à la différence de sens entre
				<b>ĉu</b> (interrogation) et <b>se</b> (condition)&nbsp;:</p>
				<p><span class="eo">mi ne vidas, ĉu estas io inter mi kaj vi</span> : 
					je ne vois pas s'il y a quelque chose entre vous et moi.
					(Y a-t-il quelque chose ? Je ne vois pas.)</p>
				<p><span class="eo">mi ne vidas, se estas io inter mi kaj vi.</span> : 
					s'il y a quelque chose entre moi et vous, alors je ne vois pas.
					(Cette chose m'empêche de voir.)</p>
			</section>

		<?php 
		} // fin section 2
		if ($section=="3") {
		?>
			<p class="parto">
			Dans ce chapitre nous ne vous indiquons la prononciation figurée que
			des mots qui pourraient présenter une difficulté. La lettre <b>ŭ</b> fait
			son apparition dans la diphtongue <b>aŭ</b> qu'il faut prononcer en une
			seule syllabe comme un <b>a</b> suivi d'un <b>o</b> ou d'un <b>ou</b> brefs. Vous
			verrez également apparaître <b>ĉ</b> [<i>tch</i>] et <b>ĝ</b> [<i>dj</i>].
			<div class="vortlisto row">
				<div class="col s12 l6">
					<p><span class="eo">agi</span> : agir</p>
					<p><span class="eo">alia</span> : autre <span class="eta">[<i>a-<b>li</b>-a</i>]</span></p>
					<p><span class="eo">alparoli</span> : adresser la parole à</p>
					<p><span class="eo">bona</span> : bon(ne)</p>
					<p class="sekva"><span class="eo">bone</span> : bien</p>
					<p><span class="eo">certa</span> : certain(e) <span class="eta">[<i><b>tsèr</b>-ta</i>]</span></p>
					<p class="sekva"><span class="eo">certe</span> : certainement</p>
					<p><span class="eo">ĉu</span> : est-ce que…, si (indique l'interrogation) <span class="eta">[<i><b>tchou</b></i>]</span></p>
					<p class="sekva"><span class="eo tab">li venas</span> : il vient</p>
					<p class="sekva"><span class="tab" />→ <span class="eo">ĉu li venas?</span> : vient-il ?</p>
					<p class="sekva"><span class="eo tab">vi scias</span> : tu sais</p>
					<p class="sekva"><span class="tab" />→ <span class="eo">ĉu vi scias</span> : est-ce que tu sais ?</p>
					<p class="sekva"><span class="eo tab">ĉu li venas</span> : vient-il ?</p>
					<p class="sekva"><span class="tab" />→ <span class="eo">rigardu, ĉu li venas</span> : regarde s'il vient</p>
					<p class="sekva"><span class="eo tab">ĉu li sidas?</span> : est-il assis ?</p>
					<p class="sekva"><span class="tab" />→ <span class="eo">mi ne scias, ĉu li sidas</span> : je ne sais pas s'il est assis</p>
					<p><span class="eo">diable !</span> : diable !, diantre ! <span class="eta">[<i>di-<b>a</b>-blè (trois syllabes !)</i>]</span></p>
					<p class="sekva"><span class="eo">diablo</span> : diable</p>
					<p><span class="eo">direkto</span> : direction</p>
					<p><span class="eo">diskreta</span> : discret, discrète</p>
					<p class="sekva"><span class="eo">diskrete</span> : discrètement, avec discrétion</p>
					<p><span class="eo">dum</span> : durant, pendant, pendant que</p>
					<p><span class="eo">ej !</span> : hé là !</p>
					<p><span class="eo">forta</span> : fort(e)</p>
					<p><span class="eo">halti</span> : s'arrêter <span class="eta">[<i>(h expiré)</i>]</span></p>
					<p><span class="eo">iĝ</span> : 	devenir <span class="eta">[iĝas: <i><b>i</b>-djasse</i>]</span></p>
					<p><span class="eo">ili</span> : ils</p>
					<p><span class="eo">inter</span> : entre, parmi</p>
					<p><span class="eo">io</span> : quelque chose <span class="eta">[<i>(deux syllabes !)</i>]</span></p>
					<p class="sekva"><span class="eo">io mistera</span> : quelque chose de mystérieux</p>
					<p><span class="eo">iom</span> : un peu <span class="eta">[<i>(deux syllabes !)</i>]</span></p>
					<p class="sekva"><span class="eo">iom post iom</span> : petit à petit, peu à peu</p>
					<p><span class="eo">iomete</span> : un petit peu</p>
					<p><span class="eo">junulo</span> : = jun- + -ulo</p>
					<p><span class="eo">ke</span> : que (exemple: je sais que…, il dit que…)</p>
					<p><span class="eo">kvazaŭ</span> : 	quasi-, comme si <span class="eta">[<i><b>kva</b>-zaou (ou bref)</i>]</span></p>
					<p><span class="eo">lia</span> : son, sa (à lui)</p>
					<p><span class="eo">mano</span> : main</p>
					<p><span class="eo">mistera</span> : mystérieux, mystérieuse</p>
					<p class="sekva"><span class="eo">mistere</span> : mystérieusement</p>
					<p class="sekva"><span class="eo">mistero</span> : mystère</p>
				</div>
				<div class="col s12 l6">
					<p><span class="eo">montri</span> : montrer, désigner</p>
					<p><span class="eo">natura</span> : naturel(le)</p>
					<p class="sekva"><span class="eo">nature</span> : naturellement</p>
					<p class="sekva"><span class="eo">naturo</span> : nature</p>
					<p><span class="eo">ne plu</span> : plus maintenant, ne… plus</p>
					<p><span class="eo">pala</span> : pâle</p>
					<p><span class="eo">paroli</span> : parler</p>
					<p><span class="eo">peti</span> : demander (de faire quelque chose) ; prier (de faire quelque chose)</p>
					<p class="sekva"><span class="eta">ne pas confondre avec <span class="eo">demandi</span> (poser une question). 
						On utilise <span class="eo">mi petas</span> pour dire «s'il vous/te plaît»</span></p>
					<p><span class="eo">plu</span> : plus, plus longtemps, plus loin</p>
					<p><span class="eo">pordo</span> : porte</p>
					<p><span class="eo">post</span> : après</p>
					<p><span class="eo">pravi</span> : avoir raison, être correct</p>
					<p class="sekva"><span class="eo">prava</span> : correct(e) (opinion, comportement, etc.)</p>
					<p class="sekva"><span class="eo">malpravi</span> : avoir tort, être faux</p>
					<p class="sekva"><span class="eo">malprava</span> : faux, erroné</p>
					<p><span class="eo">proksima</span> : proche</p>
					<p class="sekva"><span class="eo">malproksima</span> : éloigné(e)</p>
					<p class="sekva"><span class="eo">proksimiĝi</span> = <span class="eo">proksim</span>- + -<span class="eo">iĝ</span>- + -<span class="eo">i</span> : s'approcher</p>
					<p><span class="eo">rapida</span> : rapide, vif, vive</p>
					<p class="sekva"><span class="eo">malrapida</span> : lent</p>
					<p><span class="eo">reveni</span> = <span class="eo">re</span>- + <span class="eo">veni</span> : revenir</p>
					<p><span class="eo">se</span> : si (indique une condition)</p>
					<p><span class="eo">stari</span> : se tenir debout, être debout</p>
					<p><span class="eo">stranga</span> : bizarre <span class="eta">[<i><b>stranne</b>-ga</i>]</span></p>
					<p><span class="eo">strange</span> : bizarrement</p>
					<p class="sekva"><span class="eo tab">li rigardas al mi strange</span> : il me regarde bizarrement</p>
					<p class="sekva"><span class="eo tab">(estas) strange!</span> : (c'est) bizarre !</p>
					<p class="sekva"><span class="eo tab">strangulo</span> = <span class="eo">strang</span>– + –<span class="eo">ulo</span></p>
					<p><span class="eo">ŝi</span> : 	elle <span class="eta">[<i><b>chi</b></i>]</span></p>
					<p class="sekva"><span class="eo">ŝia</span> : son, sa (à elle) <span class="eta">[<i><b>chi</b>-a</i>]</span></p>
					<p><span class="eo">taso</span> : tasse</p>
					<p><span class="eo">tre</span> : très</p>
					<p><span class="eo">turni</span> : tourner</p>
					<p><span class="eo">ulo</span> : type, individu</p>
					<p><span class="eo">vidi</span> : voir</p>
					<p><span class="eo">vin</span> = <span class="eo">vi</span> + -<span class="eo">n</span> <span class="eta">[<i><b>vine</b></i>]</span></p>
					<p><span class="eo">voli</span> : vouloir</p>
				</div>
			</div>

		<?php 
		} // fin section 3
		if ($section=="4") {
		?>
			<fieldset class="ekzerco">
				<legend><b>Demandoj.</b> </legend>
				<input type="hidden" name="013_cxap02.0" value="Demandoj">

				<div class="tasko">
				<?php $demandoj=array (
					1 => "Linda estas ___. (malserioza / nova studento / bela kaj pala / io stranga)",
					2 => "Kio okazas? (Linda rigardas al la spegulo. / Malalta viro staras inter Tom kaj la pordo. / La blonda viro agas strange. / La nova studento proksimiĝas al Tom.)",
					3 => "Ĉu estas io en lia mano? (jes / ne)",
					4 => "Al kio montras la mistera ulo? (al la spegulo / al la pordo / al Linda / al Tom / al la angulo)",
					5 => "Al kio rigardas la juna knabino, kiu estas kun li? (al la spegulo / al la pordo / al Linda / al Tom / al la angulo)",
					6 => "Ĉu nun estas io en la taso? (jes / ne)"
					);
					ekzerco(True, 2);
				?>
				</div>
			</fieldset>

			<fieldset class="ekzerco">
				<legend>Elektu la ĝustan vorton.</legend>
				<input type="hidden" name="013_cxap02.1" value="Elektu la ĝustan vorton.">
				
				<p><em>Turnu vin iomete, <span class="input-field"><select><option>  ?  </option>
				<option>ĉu</option><option>se</option></select></span> vi volas.</em><br> 
				---> <em>Turnu vin iomete, <b>se</b> vi volas.</em></p>
				<p>Cet exercice attire votre attention sur la différence de sens entre
				<b>ĉu</b> (interrogation) et <b>se</b> (condition)&nbsp;:</p>
				<p><span class='eo'>mi ne vidas, ĉu estas io inter mi kaj vi</span> : 
				je ne vois pas s'il y a quelque chose entre vous et moi. (Y a-t-il quelque chose ? Je ne vois pas.)</p>
				<p><span class='eo'>mi ne vidas, se estas io inter mi kaj vi.</span> : 
				s'il y a quelque chose entre moi et vous, alors je ne vois pas. (Cette chose m'empêche de voir.)</p>
				<hr>
				<div class="tasko">
					<?php $demandoj=array (
						7 => "Mi ne vidas, [ĉu/se] la junulo parolas al la knabino, aŭ [ĉu/se] li nur rigardas al ŝi.",
						8 => "Vi vidas lin tute bone, [ĉu /se] ne?",
						9 => "[Ĉu/Se] li agas strange, li estas strangulo.",
						10 => "Mi parolas al knabinoj, [ĉu/se] ili rigardas al mi.",
						11 => "Mi ne scias, [ĉu/se] mi parolu al ŝi aŭ ne.",
						12 => "[Ĉu/Se] ŝi parolas al mi, [ĉu/se] mi reparolu al ŝi?",
						13 => "Li estas en universitato, [ĉu/se] li estas studento.",
						14 => "Mi ne certas, [ĉu/se] li estas studento. Li estas tro maljuna."
						);
						elektEkzerco();
					?>
				</div>
			</fieldset>

		<?php 
		} // fin section 4
		if ($section=="5") {
		?>

			<h3>Stranga strangulo</h3>
			<p>Tiu ulo estas stranga. Ĉu vi vidas lin? Tiu granda
			viro, vere forta, kiu staras proksime al la spegulo,
			kun io en la mano. Li ne plu estas tre juna, sed li ne
			estas maljuna. Ĉu vi vidas lin? Ĉu vi vidas lin nun?
			</p>
			<p>Turnu vin iomete. Jen. Nun vi certe vidas lin, ĉu ne?</p>
			<p>Nu, tiu stranga ulo parolas tute sola. Dum vi rigardas
			lin, li haltas, sed se vi ne rigardas, li reparolas. Li
			iras rapide al la pordo, staras proksime al tiu alia
			ulo, kiu sidas en la angulo kun bela knabino, staras
			proksime al ŝi, tute proksime al ŝi, fakte. Li
			rigardas ŝin, sed ne parolas al ŝi. Estas io en lia
			mano, sed mi ne scias, kio. Poste li revenas al la
			pordo, staras inter la pordo kaj la alta spegulo, kaj
			nenio okazas.</p>
			<p>Nun li malrapide proksimiĝas al la spegulo, parolas al
			la spegulo, dum juna virino sidas tute proksime. Sed li
			ne parolas al ŝi, li parolas al la spegulo! Strange,
			ĉu ne ? Vere stranga ulo !</p>
			<p>Nun, jen li malrapide revenas al alia angulo. Io estas
			tute ne-natura en lia rigardo.</p>
			<p>Ĉu vi scias, kiu estas tiu viro? Li estas forta kaj
			alta, sed pala, tro pala, multe tro pala. Li estas
			ne-nature pala. Vera strangulo !</p>
			<p>Ĉu mi demandu al li, kiu li estas? Diable! Mi ne plu
			vidas lin. Knabo kaj knabino staras inter li kaj mi.
			Ĉu vi vidas lin nun? Mi ne. Mi ne plu vidas lin. Ho
			jes, jen mi lin revidas. Fakte, li nun staras iom
			malproksime. Rigardu! Jen, nun li iras tre malrapide
			al la pordo. Vere, li agas plej strange. Mi demandas
			min…</p>
			<p>Kio estas en lia mano? Ĉu vi vidas? Ha, jen li
			reproksimiĝas. Mi bone vidas nun. Nun mi vidas, kio
			estas en lia mano. Estas taso. Estas nur taso. Rigardu,
			li agas vere strange! Li parolas al la taso. Li iras
			al tiu juna studentino, kiu sidas en la angulo, haltas,
			staras proksime al ŝi, sed ne parolas al ŝi. Li
			parolas nur al la taso. Li agas vere strange, vere tre
			strange, vere tro strange. Nun mi ne plu vidas lin.</p>
			<p>Ho jes ! Se mi turnas min iomete, mi revidas lin.
			Stranga ulo. Mi vere demandas al mi, kiu li estas. Li
			certe ne estas nova studento. Li estas tro maljuna.</p>

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