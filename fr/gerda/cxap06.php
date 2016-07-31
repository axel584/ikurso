<?php 
$titolo="6 (ses)";
$leciono = 6;
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
				<h4><i>terminaison du complément d'object direct (pour montrer un mouvement)</i></h4>
				<p><span class="eo">la taso falis sur la tablo</span> : 
				la tasse, qui était déjà sur la table tomba (tout en restant sur la table)</p>
				<p><span class="eo">la taso falis sur la tablon</span> : la tasse tomba sur la table</p>
				<p><span class="eo">li promenis en la ĝardeno</span> : il se promenait dans le jardin</p>
				<p><span class="eo">li promenis en la ĝardenon</span> : il alla se promener dans le jardin</p>

				<p class="parto">Notez bien les différences de sens entre les différents modes (-as, -u, -us)
				dans les phrases interrogatives ci-dessous&nbsp;:</p>

				<p><span class="eo">ĉu li restas?</span> : est-ce qu'il reste&nbsp;?</p>
				<p><span class="eo">ĉu li restu?</span> : est-ce qu'il doit rester ?&nbsp;; faut-il qu'il reste&nbsp;?</p>
				<p><span class="eo">ĉu li restus?</span> : est-ce qu'il resterait (si…)&nbsp;?</p>

				<p><span class="eo">kion mi diras</span> : que dis-je&nbsp;?</p>
				<p><span class="eo">kion mi diru</span> : que dois-je dire&nbsp;?&nbsp;; que dire&nbsp;?</p>
				<p><span class="eo">kion mi dirus</span> : que dirais-je (si…)&nbsp;?</p>
			</section>

		<?php 
		} // fin section 2
		if ($section=="3") {
		?>

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

			<fieldset class="ekzerco">
				<legend><b>Demandoj</b></legend>
				<input type="hidden" name="013_cxap06.0" value="Demandoj">
				<div class="tasko">
				<?php $demandoj=array (
					1 => "Kion Tom, Bob kaj Linda aŭdis? (koridoron / strangan bruon / penson / la blondulon)",
					2 => "Kiu eble falis en la koridoro? (Tom / Bob / Linda / Gerda / la blondulo / Ronga)",
					3 => "Kiuj iras vidi? (Linda kaj Tom / Linda kaj Bob / Bob kaj Tom / ĉiuj tri)",
					4 => "Kiu restas por observi? (Tom / Bob / Linda / la blondulo / Gerda)"
					);
				ekzerco(True, 2);
				?>
				</div>
			</fieldset>

			<fieldset class="ekzerco">
				<legend><b>Elektu la ĝustan vorton.</b></legend>
				<input type="hidden" name="013_cxap06.1" value="Elektu la ĝustan vorton.">
				<div class="ekzemplo">
					<p><em>Ekzemple:</em></p>
					<p><span class="input-field"><select><option> ? </option><option>Li</option><option>Lin</option></select></span>
					 metas <span class="input-field"><select><option> ? </option><option>ĝi</option><option>ĝin]</option>
					 </select></span> en la <span class="input-field"><select><option> ? </option><option>poŝo</option>
					 <option>poŝon</option></select></span>.
					</p>
		  			<p>→ <b>Li</b> metas <b>ĝin</b> en la <b>poŝon</b>.</p>
				</div>

				<div class="tasko">
					<?php $demandoj=array (
						1 => "La [blondulo/blondulon] metis [sukero/sukeron] en la [taso/tason] de [kafo/kafon].",
						2 => "[Li/Lin] volis iri en la [restoracio/restoracion], al la [bela/belan] [knabino/knabinon], sed [li/lin] falas en la [koridoro/koridoron].",
						3 => "Bob konsentas kun [Linda/Lindan].",
						4 => "[Ili/Ilin] rigardas al la [studentoj/studentojn].",
						5 => "[Iu/Iun] perdis [aĵo/aĵon] en la [restoracio/restoracion].",
						6 => "Ili metas [ĝi/ĝin] sur la [tablo/tablon] kaj decidas promeni al la [universitato/universitaton]. [Ili/Ilin] ekiras.",
					);
					elektEkzerco();
					?>
				</div>
			</fieldset>

		<?php 
		} // fin section 4
		if ($section=="5") {
		?>

			<h3>xxxx</h3>

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