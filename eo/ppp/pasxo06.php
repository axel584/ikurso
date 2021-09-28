<?php 
$titolo="Paŝo 6 (ses)";
$leciono = 6;
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
		if ($section=="1") {
		?>

		<div class="rakonto">
			<h3>MI FARIĜOS ORDEMULO</h3>
 
 			<p>Kiam mi je la 10-a vespere hejmenvenis en mian familian neston, mia edzino atendis min kun tiuj vortoj:</p>

 			<p>— Mi aŭskultis en la radio prelegon <i>Al gepatroj pri la edukado</i>.</p>

 			<p>— Tre bone vi faris, – mi aŭtoritate kapjesis. — Mi ŝatas, kiam vi kulturiĝas. Sed nun bonvolu doni al mi vespermanĝon, ĉar mi jam apenaŭ vidas pro la malsato.</p>

 			<p>— Ankaŭ tion de vi lernas la infano, diris riproĉe mia edzino kaj anstataŭ doni al mi vespermanĝon, eksidis. – Kion li lernas de mi?</p>

 			<p>— La senpaciencon. La fileto estas tial tiel nervoza, ĉar vi ne montras disciplinon.</p>

 			<p>Ŝi eksaltis kaj promenante tien kaj reen, daŭrigis:</p>

 			<p>— La infano kondutos, kiel li vidas de siaj gepatroj. Ĝuste tial mi petas vin, ke hejme vi estu pripensa kaj nenervoza, kiel tio decas al serioza patro. La infano...</p>

 			<p>— En ordo, mi interparolis sen nervozeco kaj pripensante, sed nun bonvolu doni al mi vespermanĝon.</p>

 			<p>— Ĉu vi vidas do, tia estas vi, subigis min mia edzino, ankaŭ la infanon vi ĉiam interrompas, vi ne havas paciencon lin finaŭskulti. De vi li lernis tiun malbelan kutimon, ke li ĉiam miksas sin en la aferojn de plenkreskuloj.</p>

 			<p>Post kio mi finaŭskultis la tutan radiparoladon en interpreto de mia edzino dum mallonga horeto, fine mi ricevis la vespermanĝon. Mi manĝis la fritaĵon per forko, kiam mia edzino ekriproĉis min:</p>

 			<p>— Kiel vi manĝas?</p>

 			<p>— Kion vi deziras?</p>

 			<p>— Kial vi ne uzas ankaŭ tranĉilon? Kaj ne manĝu tiel avide. La infano ne lernas bonorde manĝi, se lia patro kondutas ĉe la tablo, kiel barbaro.</p>

 			<p>Mi pretigis min al kuŝiĝo. Mi metis mian veston sur la apogilon de seĝo. Mi volis kaŝi min sub la plumkovrilo, kiam denove alparolis min mia edzino:</p>

 			<p>— Kiel vi formetis viajn vestaĵojn?</p>

 			<p>— Kiel mi kutimas.</p>

 			<p>— Rigardu tien, kaj ŝi montris al alia seĝo.</p>

 			<p>Mi rigardis tien. Tie kuŝis la vestaĵoj de mia filo, ĵetitaj unu sur la alian.</p>

 			<p>— Vidu, ankaŭ tion de vi lernis la infano. Metu la vestaĵojn orde. Mi metis miajn vestaĵojn laŭ ordo, ankaŭ tiujn de mia fileto kaj fine kuŝiĝis. Jam pasis la noktmezo.</p>
 			
 			<p>Matene je la sepa horo vekis min mia edzino:</p>

 			<p>— Leviĝu jam!</p>

 			<p>— Sed estas ankoraŭ frue – mi kontraŭdiris – mi devas iri en mian oficejon nur je la duono post la oka. </p>

 			<p>— De nun ĉiumatene vi ellitiĝos je la duono post la sesa – ŝi deklaris per voĉo ne permesanta kontraŭdiron. – Kiel lernu la infano diligentecon, kiam li vidas kuŝi sian patron, kiam li jam devas iri en la lernejon?</p>

 			<p>Mi ellitiĝis kaj vestis min. Mia edzino diris al mi, ke mi faru mem mian matenmanĝon, ke mi povu estimi la hejman mastrumadon. Dum mi faris mian matenmanĝon, mi devis ofte enkuri al mia edzino – kiu ankoraŭ kuŝis en la lito – ĉar mi ne trovis la sukeron, la kafon, la buteron. Fine ŝi senpacience kriis:</p>

 			<p>— Ne estu tiel senhelpa. Rigardu ĉirkaŭ vi serioze kaj vi trovos ĉion. Kiel estu lerta, inventema la infano, se li havas tian patron?</p>

 			<p>Ĉio estus en la plej granda ordo, se hazarde mi ne estus aŭdinta tra la malfermita fenestro interparoladon, kio okazis sube en la ĝardeno inter mia fileto kaj onklo Keceli. Onklo Keceli estas la domzorganto.</p>

 			<p>— Vi estas la teroristo de la tuta domo – diris malhele onklo Keceli. – Via patrino povus vin iom eduki!</p>

 			<p>— Ŝi ne havas tempon, onklo Keceli, ĉar ŝi ĉiam edukas paĉjon.</p>

 			<p><b>Kornel Toth</b> el la hungara: <b>Paulo Balkanyi</b> (el <i>Norda Prism</i>)</p>
		</div>

		<?php 
		} // fin section 1
		if ($section=="2") {
		?>


	<div class="vortlisto row">
		<div class="col s12 m6">

		</div>
		<div class="col s12 m6">

	
		</div>

<?php 
		} // fin section 2
		if ($section=="3") {
		?>

			<?php 
				getEkzercon(125,$persono_id);
				getEkzercon(126,$persono_id);
				
			?>

		<?php 
		} // fin section 2
		if ($section=="4") {
		?>

			<?php 
				getEkzercon(127,$persono_id);
				getEkzercon(128,$persono_id);
				getEkzercon(129,$persono_id);
				getEkzercon(130,$persono_id);
				getEkzercon(131,$persono_id);
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