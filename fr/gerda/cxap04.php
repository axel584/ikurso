<?php 
$titolo="4 (kvar)";
$leciono = 4;
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