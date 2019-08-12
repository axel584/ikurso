<?php 
$titolo="4 (kvar)";
$leciono = 4;
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

			<h3>Kio estas tiu Gerda?</h3>
			<div class="row dialogo">
				<div class="col s12 m8">
					<p><b>Bob:</b> Diru al mi sincere, pri kio vi parolis.</p>
					<p><b>Tom:</b> Ni parolis pri tiu ulo.</p>
					<p><b>Bob:</b> Kiu ulo?</p>
					<p><b>Tom:</b> Tiu viro ĉe la angulo. Tiu juna viro.</p>
					<p><b>Bob:</b> Pri kiu vi parolas? Ĉu pri tiu blondulo, kiu sidas kun Gerda?</p>
					<p><b>Linda:</b> Gerda! Vi do scias, ke ŝia nomo estas Gerda! Vi do konas ŝin!</p>
					<p><b>Bob:</b> Nu, mi ne vere konas ŝin. Mi scias, kiu ŝi estas. Tio estas
					alia afero.</p>
					<p><b>Linda:</b> Kiu do ŝi estas?</p>
					<p><b>Bob:</b> Sed vi ne respondis al mi. Vi ne respondis al mia demando. Ĉu
					vere pri tiu blonda junulo vi parolis?</p>
					<p><b>Tom:</b> Jes. Pri li.</p>
					<p><b>Bob:</b> Mi ne konas lin. Mi neniam vidis lin antaŭe.</p>
					<p><b>Linda:</b> Sed, diru al mi, kiu estas tiu Gerda?</p>
					<p><b>Bob:</b> Ŝi venis por instrui. Temas pri io mistera, fakte.
					Kriptaĵoscienco.</p>
					<p><b>Linda:</b> Kio? Kiel vi diris? Krip-ta-ĵo-sci-en-co, ĉu?  Kio estas tio?</p>
					<p><b>Bob:</b> Ĉu vere vi ne scias, kio estas kriptaĵoscienco? Oni diras
					ankaŭ "kriptografio".</p>
					<p><b>Linda:</b> Ne. Mi ne scias. Mi tute ne scias. ĉu vi scias, Tom?</p>
					<p><b>Tom:</b> Ĉu tio ne estas la arto kompreni, pri kio temas sekreta
					mesaĝo?</p>
					<p><b>Bob:</b> Prave. Jen ŝia fako. Fakte, ŝia fako estas la malnovaj sekretaj lingvoj.</p>
				</div>
				<div class="col s12 m4">
					<img src="bildoj/gerda04-1.gif" class="responsive-img">
				</div>
			</div>
			<div class="row dialogo">
				<div class="col s12 m8">
					<p><b>Tom:</b> Mi ne komprenas. Kiu, en universitato, volas lerni pri la
					malnovaj sekretaj lingvoj?</p>
					<p><b>Bob:</b> Ankaŭ mi ne tute komprenas. Estis ideo de Ronga, la profesoro
					pri lingvistiko. Li konsideras, ke sekretaj lingvoj estas aspekto de la
					arto komuniki, kaj ke ili do rilatas al lingvistiko.</p>
					<p><b>Linda:</b> Eble jes. Eble li pravas. Kaj tamen tiu ideo estas iom stranga,
					ĉu vi ne konsentas?</p>
					<p><b>Bob:</b> Jes. Ĝi aspektis strange ankaŭ al mi, kiam oni parolis pri
					ĝi.</p>
					<p><b>Linda:</b> Eble Ronga, la lingvistika profesoro, nur deziris, ke bela
					virino kunlaboru kun li. ĉu ne estas bona ideo kunlabori kun bela
					knabino, kiam tio estas ebla?</p>
					<p><b>Tom:</b> Mi jam diris al vi, ke ŝi ne estas bela. Nur vi estas bela.</p>
					<p><b>Bob:</b> Mi ne konsentas. Estas fakto, ke Linda estas tre bela, ke ŝi
					estas la plej bela knabino en la mondo. Sed ankaŭ Gerda estas bela,
					iom malpli bela, sed tamen bela; ĉu vi konsentas?</p>
					<p><b>Tom:</b>	Tute ne. Por vi, eble. Sed por mi ne. Por mi, nur Linda
					ekzistas kiel bela virino.</p>
					<p><b>Bob:</b>	Ĉu vi volas diri, ke por vi Linda estas la sola bela virino en
					la tuta mondo?</p>
					<p><b>Tom:</b> Jes, por mi, Linda estas la sola bela virino en la tuta mondo.</p>
					<p><b>Bob:</b> Diable! Vi verŝajne amas ŝin.</p>
				</div>
				<div class="col s12 m4">
					<img src="bildoj/gerda04-2.gif" class="responsive-img">
				</div>
			</div>

		<?php 
		} // fin section 1
		if ($section=="2") {
		?>

			<section class="klarigo">
				<h4>-aĵo : <i>quelque chose de concret ayant la qualité de…</i></h4>
				<p><span class="eo">nova</span> : nouveau → <span class="eo">nov<b>aĵo</b></span> : une nouvelle, nouveauté</p>
				<p><span class="eo">okazi</span> : arriver, se passer, survenir → <span class="eo">okaz<b>aĵo</b></span> : événement</p>
				<p><span class="eo">arto</span> : art  → <span class="eo"> art<b>aĵo</b></span> : objet d'art</p>
				<p>kriptaĵo= kripta afero, io kripta</p>
				<p>kriptaĵoscienco = scienco pri kriptaĵoj</p>
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
					<p><span class="eo">afero</span> : affaire, sujet, chose</p>
					<p><span class="eo">aĵo</span> : chose, objet (synonyme de <span class="eo">afero</span>, mais plus concret) <span class="eta">[<i><b>a</b>-jo</i>]</span></p>
					<p><span class="eo">antaŭ</span> : avant, en avant de, devant (prép.) <span class="eta">[<i><b>anne</b>-taou</i>]</span></p>
					<p class="sekva"><span class="eo">antaŭe</span> : avant, auparavant (adv.) <span class="eta">[<i>anne-<b>ta</b>-ouè</i>]</span></p>
					<p><span class="eo">arto</span> : art</p>
					<p><span class="eo">deziri</span> : désirer</p>
					<p><span class="eo">do</span> : donc</p>
					<p><span class="eo">ekzisti</span> : exister</p>
					<p><span class="eo">fako</span> : spécialité, discipline, département (sens propre&nbsp;: compartiment, case)</p>
					<p><span class="eo">ideo</span> : idée</p>
					<p><span class="eo">instrui</span> : enseigner</p>
					<p><span class="eo">kiam</span> : quand</p>
					<p><span class="eo">komuniki</span> : communiquer</p>
					<p><span class="eo">koni</span> : connaître</p>
					<p><span class="eo">konsideri</span> : considérer</p>
					<p><span class="eo">konsenti</span> : consentir, être en accord</p>
					<p><span class="eo">kripta</span> : secret, volontairement inintelligible</p>
					<p><span class="eo">kriptografio</span> : cryptographie</p>
					<p><span class="eo">lerni</span> : apprendre</p>
				</div>
				<div class="col s12 l6">
					<p><span class="eo">lingvo</span> : langue</p>
					<p><span class="eo">lingvistiko</span> : linguistique</p>
					<p><span class="eo">malpli</span> : moins</p>
					<p><span class="eo">mesaĝo</span> : message</p>
					<p><span class="eo">neniam</span> : jamais</p>
					<p><span class="eo">nomo</span> : nom</p>
					<p><span class="eo">oni</span> : on</p>
					<p><span class="eo">por</span> : pour, dans le but de</p>
					<p><span class="eo">profesoro</span> : professeur</p>
					<p><span class="eo">respondi</span> : répondre</p>
					<p><span class="eo">rilati</span> : avoir un rapport, une relation avec</p>
					<p class="sekva"><span class="eo">rilato</span> : rapport, lien, relation</p>
					<p><span class="eo">scienco</span> : science</p>
					<p><span class="eo">sekreta</span> : secret (adj.), secrète</p>
					<p class="sekva"><span class="eo">sekreto</span> : secret (nom)</p>
					<p><span class="eo">temas pri</span> : (il) s'agit de</p>
					<p class="sekva"><span class="eo">temas pri vi</span> : il s'agit de vous</p>
					<p class="sekva"><span class="eo">la mesaĝo temas pri vi</span> : le message parle de vous</p>
					<p><span class="eo">temo</span> : sujet, thème</p>
					<p><span class="eo">voli diri</span> : vouloir dire, signifier</p>
					<p><span class="eo">ne tute</span> : pas tout à fait</p>
					<p class="sekva"><span class="eo">tute ne</span> : pas du tout</p>
				</div>
			</div>

		<?php 
		} // fin section 3
		if ($section=="4") {
		?>

			<?php 
				getEkzercon(56,$persono_id);
			?>

			<?php 
				getEkzercon(57,$persono_id);
			?>

		<?php 
		} // fin section 4
		if ($section=="5") {
			include "lasusono.inc.php";
		?>

			<h3>Lingvistiko</h3>
			<p>Mi deziras, ke vi komprenu, ke lingvistiko estas scienco inter multaj
			aliaj sciencoj. Lingvistiko estas mia fako. Oni do prave povas diri,
			ke mi estas fakulo pri lingvistiko. Lingvistiko estas mia specialaĵo,
			se vi volas.</p>
			
			<p>Sed la fakto, ke mi lernis multe pri lingvoj kaj pri lingvistiko, la
			fakto, ke mi estis studento pri tiu fako, ne permesas al vi diri, ke
			mi scias multe pri la aliaj sciencoj. Multaj sciencaj aferoj estas por
			mi misteraj, en fakoj, kiuj ne estas la mia.</p>
			
			<p>Nu, ni ne parolu pri tio. Ni ne parolu pri tiuj aliaj sciencoj. Ni
			parolu nur pri mia fako, nome lingvistiko. Lingvistiko estas la
			scienco pri lingvo. Pri lingvoj, se vi preferas. Lingvistiko, t.e. (=
			tio estas) lingvoscienco... jes, oni povas diri ankaŭ
			«lingvoscienco»..., estas la scienco pri tio, kiel ni esprimas nin
			lingve. Mi demandas, kaj vi respondas. Kiel ? Ĉu mane ? Ne. Ni ne
			demandas kaj respondas mane. Por demandi kaj respondi, ne niaj manoj
			agas, ni tute ne agas, fakte, ni parolas.</p>
			
			<p>Eble oni povas diri, ke paroli jam estas agi. Ke parolo estas ago. Sed
			tamen, se oni povas konsideri, ke paroli estas agi, parolo tamen ne
			estas mana ago, parolo estas lingva ago.</p>
			
			<p>Kiam do ni demandas kaj respondas, ni parolas, t.e. ni agas lingve.
			Kiam ni komunikas parole, ni rilatas lingve inter ni. Nia interrilato
			estas lingva. Niaj komunikoj estas lingvaj. Lingvo ekzistas por
			komuniki, por ke ni rilatu inter ni, por ke ni povu diri al aliulo,
			kio okazas, kio okazis, ĉu ni konsentas kun li, ĉu ni ne konsentas,
			ĉu ni deziras, ke li agu por ni. Lingvo ekzistas por lerni kaj por
			instrui. Se ideo venas al vi, eble vi deziras ĝin komuniki. Nu, por
			tio lingvo ekzistas. Por tio multaj lingvoj ekzistas. Por tio ni
			lernas ilin. Por rilati inter ni, ne nur mane, sed ankaŭ parole.</p>

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