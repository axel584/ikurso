<?php
$subjekto="antauxklarigo.php";
$leciono = 0;
$temo=isset($_GET["temo"])?$_GET["temo"]:"antauxklarigo";
$gxisdatigDato="2016-07-01";
include "pppkapo.inc.php"
?>
<div class="row">
	<article class="col s12 m10 l7 offset-m1 offset-l1">
		<section id="leciono-kapo">
			<h1>Paŝoj al plena posedo<br/>de William Auld</h1>
		</section>
		
		<section id="leciono-enhavo">

			<h2>ANTAŬKLARIGO</h2>
			
			<p class="parto">Tiu ĉi kurso estas planita tiel, ke ĉiun "paŝon" la studanto komencu per legado de la legaĵo. Kiam li renkontas vorton, kiun li ne konas, aŭ kies signifon li ne povas diveni laŭ la kunteksto, nur tiam li sin turnu al la sekcio "Vortaro", kaj pere de la klarigo tie donita li klopodu kompreni la sencon de la vorto en ĝia aktuala kunteksto. Nur en okazo de absoluta bezono, aŭ eventuale por kontroli sian koncepton pri la signifo de la vorto, li sin turnu al nacilingva vortaro. (La difinoj en tiu ĉi vortprovizo ne celas esti kompletaj kaj definitivaj — tio ja estas la tasko de la vortaristoj; ili celas nur ebligi al la studanto kompreniĝon pri la kuntekste uzita vorto.)</p>
			<p class="parto">La celo de tiu ĉi agmaniero estas: liberiĝi kiel eble plej komplete el la katenoj de la nacilingva pensado. Kompreneble, se temas pri arbnomoj (ekzemple) li eble devos konsulti vortaron antaŭ ol scii, pri kiu arbo fakte temas. Finkompreninte la legaĵon, li povas fari la lingvajn ekzercojn de tiu "paŝo".</p>
			<p class="parto">En la komenco mi supozas ĉe la studanto posedon de la gramatiko kaj elementan vortprovizon de ĉ. 700 vortoj (ekzemple tiuj en Gerda Malaperis; sed ĝenerale tiuj vortoj estos pli-malpli komunaj al ĉiuj studintoj en elementa kurso). En tiu ĉi kurso estas klarigataj 1.682 vortoj; kun la elementa vortaro, do, la studanto en la fino devus disponi pri ĉ. 2.400 radikoj. Post la unuaj lecionoj, la sperta esperantisto eble rimarkos, ke kelkfoje la vortprovizo de la legaĵo ne ĉiam kongruas kun tiu de la ekzercoj; kelkfoje, ekzemple, vorto enkondukita en la ekzercoj aperas nur poste en la antaŭlegaĵa vortaro. Tio okazas ĉar ĉiu nova vorto en la legaĵo estas klarigita sed nur por tiuj, kiuj volas tralegi la libron ignorante aŭ lasante por posta tralaboro la ekzercojn. Supozeble neniu studanto plendos pri tro multe da klarigoj.</p>
			<p class="parto">Estas menciinde, ke la nombro da vortoj en la listoj ne indikas la malfacilecon de la teksto. Ĉiu studanto tuj rekonas certan nombron de la novaj vortoj — la preciza nombro dependos de lia lingvoscio — kaj ne bezonos sin turni al la klarigoj. La tekstoj estas aranĝitaj progresige, kaj ilia malfacileco estas ĝenerale gramatika aŭ stilistika.</p>
			<p class="parto">Tiu kurso celas memlernantojn kaj korektantoj scios helpi al vi kun la donita ekzercmaterialo. La devizo de tiu kurso estas: Esperanton oni plej bone lernas per studado de bona Esperanto. Laŭeble evitu la nacian lingvon; komprenu en Esperanto, kaj vi pensos en Esperanto!</p>
			
			
			
			<?php if ($persono_id=="") { ?>
				<div class="row">
					<div class="col s12">
						<div class="card-panel blue lighten-5">
							<!-- N'a pas encore de compte -->
								<h5 class="center">Mi deziras plibonigi mian esperantan nivelon</h5>
								<div class="row">
									<p class="center">Se vi kreas konton, vi povos sekvi la kurson, vidi vian progreson kaj ricevi helpon de sperta volontulo.<br>Tute senpage!</p>
									<p class="center"><a href="#aligxi" class="btn waves-effect waves-light blue modal-trigger" data-target="aligxi">Krei konton</a>&nbsp;<a href="#tuto-inscription" class="modal-trigger tooltipped" data-position="top" data-delay="50" data-tooltip="voir la vidéo de présentation" data-target="tuto-inscription"><i class="material-icons blue-text">help_outline</i></a></p>
								<p class="noto">NOTE&nbsp;: vi tamen povas sekvi la kurson sen konto sed vi ne povos ricevi korektadon.<br><a href="<?php echo $vojo;?>fr/ppp/pasxo01.php?section=1" class="btn-flat small blue-text"><i class="material-icons right">arrow_right</i>Ek al la unua paŝo...</a></p>
								</div>
						</div>
					</div>
				</div>
			<!-- A déjà un compte -->
			<?php } elseif ($persono['rajtoj']=="P") {
			?>
				<!-- N'est pas déjà inscrit à un cours -->
				<div class="row">
					<div class="col s12">
						<div class="card-panel blue lighten-5">
							<h5 class="center">Mi tuj deziras komenci!</h5>
							<div class="row">
								<p><span class="noto">Mi zorge legas ĉiujpaĝojn de la lecionoj, mi plenumas la ekzercojn kaj mi povos aliĝi je la fino de la unua paĝo. Miajn ekzercojn ricevos auxtomate mia korektanto.</span>
								<p><a href="<?php echo $vojo;?>eo/ppp/pasxo01.php?section=1" class="btn-flat small blue-text"><i class="material-icons right">arrow_right</i>Ek al la unua paŝo...</a></p>
								</p>
							</div>		
						</div>
					</div>
				</div>
			<?php } ?>

		</section>

	</article>

	<aside class="col s12 m10 l3 offset-m1 push-l1">
			<ul class="collapsible" data-collapsible="expandable">
				<li class="active">
					<div class="collapsible-header"><i class="material-icons">toc</i>Enhavo</div>
					<div class="collapsible-body">
						<ul id="kurso-enhavtabelo" class="collection">
							<li><a href="pasxo01.php">1. Tre moderna fabelo</a></li>
							<li><a href="pasxo02.php">2. La psalmaro</a></li>
							<li><a href="pasxo03.php">3. La ŝtormo</a></li>
							<li><a href="pasxo04.php">4. Celstacio</a></li>
							<li><a href="pasxo05.php">5. La unua Kongreso de Esperanto</a></li>
							<li><a href="pasxo06.php">6. Mi fariĝos ordemulo</a></li>
						</ul>
					</div>
				</li>
			</ul>
		</aside>	
	
</div>

<?php include "ppppiedo.inc.php"; ?>
