<?php 
$titolo="Paŝo 2 (du)";
$leciono = 2;
$section=isset($_GET["section"])?htmlspecialchars($_GET["section"]):"1";
include "pppkapo.inc.php";
?>
<div class="row">
	<article class="col s12 m10 l7 offset-m1 offset-l1">
		
		<section id="leciono-enhavo">
		<?php 
		getTitoloLecionero('PP',$leciono,$section);
		?>
		<?php
		if ($section=="2") {
		?>
			<div class="vortlisto row">
				<div class="col s12 m6">
					<p><span class="eo">bindo</span>: eksteraĵo de libro.</p>
					<p><span class="eo">ĉifi</span>: malglatigi.</p>
					<p><span class="eo">dio</span>: supernatura reganta estaĵo.</p>
					<p><span class="eo">diversa</span>: malsameca.</p>
					<p><span class="eo">esenco</span>: la ĉefa, plej necesa parto de io.</p>
					<p><span class="eo">falsa</span>: malvera.</p>
					<p><span class="eo">frapi</span>: bateti.</p>
					<p><span class="eo">glata</span>: priskribas ion, sur kiu mano facile glitas.</p>
					<p><span class="eo">instrui</span>: lernigi.</p>
					<p><span class="eo">kadro</span>: tio, per kiu oni ĉirkaŭigas, ekzemple fotografaĵon.</p>
					<p><span class="eo">klara</span>: malkonfuza.</p>
					<p><span class="eo">klaso</span>: aro de lernantoj, kiuj lernas kune.</p>
					<p><span class="eo">litero</span>: alfabeta signo.</p>
					<p><span class="eo">ludi</span>: fari ion por nura plezuro.</p>
					<p><span class="eo">matura</span>: plenkreskinta, plenpova.</p>
				</div>
				<div class="col s12 m6">
					<p><span class="eo">onklo</span>: frato de la patro aŭ patrino.</p>
					<p><span class="eo">pardoni</span>: malsevere trakti iun.</p>
					<p><span class="eo">plekti</span>: regule interkunigi laŭ longe, ekzemple harojn.</p>
					<p><span class="eo">problemo</span>: malfacila demando.</p>
					<p><span class="eo">psalmo</span>: speciala religia kanto.</p>
					<p><span class="eo">religio</span>: kredo pri supernaturaj aferoj.</p>
					<p><span class="eo">robo</span>: longa virina vesto.</p>
					<p><span class="eo">serioza</span>: zorge atent(ind)a.</p>
					<p><span class="eo">spegulo</span>: glata, brila aĵo, per kiu oni povas vidi sin.</p>
					<p><span class="eo">ŝlosi</span>: fermi, ekzemple pordon, per speciala ilo.</p>
					<p><span class="eo">ŝpari</span>: atente reteni, ekzemple monon.</p>
					<p><span class="eo">truo</span>: malplenaĵo en io.</p>
					<p><span class="eo">viziti</span>: ĉeesti; regule aliradi.</p>
					<p><span class="eo">zono</span>: io, kion oni metas ĉirkaŭ la korpomezon.</p>				
				</div>
			</div>
				
			
		<?php 
		} // fin section 1
		if ($section=="1") {
		?>
			<div class="rakonto">

				 <h3>LA PSALMARO</h3>
				
				<p>Kiam Anna-Klara en sia sepa jaro vizitadis la unuan klason, iun tagon ŝi petis de mi psalmlibron.</p>
				<p>— Kial? – mi demandis.</p>
				<p>— Ĉar ankaŭ Gustavo havas.</p>
				<p>— Povas esti, — mi respondis, — sed mi neniam aŭdis, ke tiel etaj knabinoj havus psalmaron.</p>
				<p>— Sed ankaŭ Gustavo havas.</p>
				<img style="float:left;max-width:800px;max-width:30%;" src="bildoj/psalmaro.png"><p>Kion fari, mi iris aĉeti psalmaron.</p>
				<p>Mi trovis multe da diversaj psalmlibroj, malgrandajn, belajn librojn kun mola bindo, orkadraj paĝoj kaj ankaŭ grandajn librojn kun belaj, simplaj literoj. Mi aĉetis, kiu estis la malplej kosta, por ke la infano bontempe lernu la ŝparemon, precipe en tiaj seriozaj aferoj.</p>
				<p>Mi skribis la nomon de Anna-Klara en la libron kaj posttagmeze transdonis ĝin al ŝi. Ŝi ege ekĝojis, prenis la libron kaj diris:</p>
				<p>— Ĝi estas ĝuste tia, kia tiu de Gustavo.</p>
				<p>Mi eksidis kaj iomete meditadis pri la okazintaĵoj, kaj poste — la dioj pardonu min — mi iris al la pordo kaj enokulumis tra la ŝlosiltruo.</p>
				<p>Anna-Klara staris meze de la ĉambro, antaŭ la granda spegulo.</p>
				<img style="float:right;max-width:800px;max-width:45%;" src="bildoj/knabino-spegulo.jpg"><p>Kun la malfermita psalmaro ŝi kantis falsvoĉe. De tempo al tempo ŝi rigardis al la spegulo, ĉu ŝia zono bone kuŝas? Kelkfoje ŝi ordigis sian harplekton, kelkfoje glatigis ĉifon sur la robo, kiu ne estis bonorde sur ŝia ŝultro.</p>
				<p>Subite mi surprizis ŝin per pordmalfermo kaj eniris:</p>
				<p>— Kara Anna-Klara, — mi diris — psalmaro estas io multe pli serioza, ol vi imagas. Oni ne staru antaŭ spegulo por kanti el psalmaro. La psalmolibro ne estas por ludi per ĝi. Kiam vi estos pli aĝa, la instruist-onklino klarigos al vi, kio estas esence psalmaro.</p>
				<p>Anna-Klara sidis serioza kaj silenta. Ŝi rigardis sincere al mi kaj decidvoĉe diris:</p>
				<p>— Mi volas diri al vi nur unu aferon: oni ne eniras ĉambron antaŭ ol frapi.</p>
				<p>Mi ne kredas, ke Anna-Klara estas jam matura por religiaj problemoj.</p>
				
				<p><b>Hasse Z.</b> el la sveda: <b>Andreo Gauder</b> (el <i>Literatura Mondo</i>)</p>
			</div>
			<p class="creditphoto">Bildo: @bearfotos /freepik</p>

<?php 
		} // fin section 2
		if ($section=="3") {
		?>

			<?php 
				getEkzercon(110,$persono_id,"eo");
				getEkzercon(111,$persono_id,"eo");
				
			?>

		<?php 
		} // fin section 2
		if ($section=="4") {
		?>

			<?php 
				getEkzercon(112,$persono_id,"eo");
				getEkzercon(113,$persono_id,"eo");
				getEkzercon(114,$persono_id,"eo");
				getEkzercon(115,$persono_id,"eo");
				getEkzercon(116,$persono_id,"eo");
				getEkzercon(117,$persono_id,"eo");
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