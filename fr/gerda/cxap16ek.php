<?php 
$titolo="16 (dek ses)";
include "gerdakapo.inc.php"; 
?>
		<div class="klarigo">
		<h3>Demandoj</h3>
		<input type="hidden" name="013_cxap16.0" value="Demandoj">
			<div class="tasko">
			<?php $demandoj=array (
				1 => "Kion faris la junulo, post kiam li eliris el la vendejo?",
				2 => "Kien li subite eniris?",
				3 => "Kial Linda hezitis sekvi lin tien?",
				4 => "Kiel aspektis la restoracio?",
				5 => "Kion man&#285;is Linda?",
				6 => "Kion faris la soldatoj?",
				7 => "Kia estas Linda?",
				8 => "Kio estas Linda?",
				9 => "Kion rimarkas Linda post la telera milito?"
				);
			ekzerco(True, 2);
			?>
			</div>


		<h3>Notoj</h3>
		<p>
		Nun vi devas lerni kelkajn novajn vortojn. La unua vorto ver&#349;ajne ne
		estas por vi nova; &#285;i estas la vorto <span class="eo">ESPERANTO</span>. Se vi tion ne jam
		sciis, nun mi informas vin: Esperanto estas la nomo de tiu &#265;i lingvo,
		kiun vi nun lernas.
		</p>
		<p>
		Ne ridu tro pri tiu klarigo! En kelkaj lingvoj Esperanto ja havas
		alian nomon. Ekzemple, en la lingvo, kiun parolas pli da homoj ol iun
		alian lingvon en la mondo, Esperanton oni nomas "shi4 jie4 yu3". &#264;u
		vi tion jam sciis? Mi gratulas! A&#365; &#265;u eble tiu granda lingvo estas
		via lingvo?
		</p>
		<p>
		La aliaj vortoj, kiujn mi volas nun klarigi, estas vortoj, kiuj helpos
		nin paroli pri la lingvo.
		</p>
		<p>
		Ekzistas en Esperanto kvar grandaj vortklasoj (vortospecoj):
		</p>
		<p>
		<span class="eo">SUBSTANTIVOJ (o-vortoj)</span>, kiuj montras a&#309;ojn: tablo, knabino, spegulo,
		libero, amo,...
		</p>
		<p>
		<span class="eo">ADJEKTIVOJ (a-vortoj)</span>, kiuj montras ecojn: bela, juna, granda,
		studenta, ka&#349;a,...
		</p>
		<p>
		<span class="eo">VERBOJ</span> (kun fina&#309;oj <em>-i</em>, <em>-is</em>, <em>-as</em>, <em>-os</em>, 
		<em>-u</em>, <em>-us</em>), kiuj montras agojn a&#365; situaciojn: esti, scii, rigardi, proksimigi, amiki&#285;i,...
		</p>
		<p>
		<span class="eo">ADVERBOJ (e-vortoj)</span>, kiuj montras manierojn: tute, kompreneble,
		ver&#349;ajne, fakte, ka&#349;e,...
		</p>
		<p>
		Aliaj vortklasoj, pri kiuj ni volos paroli, estas:
		</p>
		<p>
		<span class="eo">PREPOZICIOJ</span>, kiuj montras rilatojn: de, al, kun, pri, da,...
		</p>
		<p>
		<span class="eo">PRONOMOJ</span>, kiuj resendas al substantivoj: mi, ni, vi, li, &#349;i, &#285;i,
		ili, si, oni.
		</p>
		<p>
		<span class="eo">ARTIKOLO</span>, kiu montras konatecon: la.
		</p>

		<h3>Ekzerco</h3>
			<div class="ekzerco">
				<p>Nun mi povas klarigi, kiel <em>kia</em> kaj <em>kiel</em> estas malsamaj.</p>
				<p>Per <em>kia</em> oni demandas pri eco, do pri adjektivo (a-vorto).</p>
				<p>Per <em>kiel</em> oni demandas pri maniero, do pri adverbo (e-vorto).</p>
				<p class="ekz"><strong>Kia</strong> estas via amiko? - Li estas bel<strong>a</strong>.</p>
				<p class="ekz"><strong>Kiel</strong> vi man&#285;as? - Mi man&#285;as malrapid<strong>e</strong>.</p>
				<p class="ekz">&#348;ia viza&#285;o subite i&#285;is ru&#285;<strong>a</strong>.</p>
				<p class="ekz"><strong>Kia</strong> &#285;i i&#285;is? - &#284;i i&#285;is ru&#285;<strong>a</strong>.</p>
				<p class="ekz"><strong>Kiel</strong> &#285;i i&#285;is ru&#285;a? - Subit<strong>e</strong>.</p>
			</div>
			
			<input type="hidden" name="013_cxap16.1" value="Metu la &#285;ustan vorton.">
			<p>Metu la &#285;ustan vorton.</p>
			<p>&#264;iu mankanta vorto estas unu el: kiel, kia, kian, kiaj, kiajn.</p>

			<div class="tasko">
			<?php $demandoj=array (
				10 => "Kun [5] sako li eliris? - Li eliris kun papera sako.",
				11 => "[5] li forveturos? - Mi pensas, ke li forveturos a&#365;te.",
				12 => "[5] numeron vi notis? - Mi notis lian a&#365;tan numeron.",
				13 => "[5] vi sekvis lin? - Mi sekvis lin iom malproksime.",
				14 => "[5] li estis vestita? - Li estis vestita per multkoloraj vestoj.",
				15 => "[5] vi sentas vin hodia&#365;? - Mi sentas min tre bone, dankon.",
				16 => "[5] estas via sano? - Multe pli bona ol hiera&#365;.",
				17 => "[5] virojn &#349;atas Linda? - &#348;i &#349;atas blondulojn.",
				18 => "[5] vi ekkonis lin? - Ni estis en la sama lernejo.",
				19 => "[5] restas Gerda? - &#348;i restas soifa."
				);
				plenigEkzerco("U");
				?>
				</div>
		</div> <!-- klarigo -->
<?php include "gerdapiedo.inc.php"; ?>