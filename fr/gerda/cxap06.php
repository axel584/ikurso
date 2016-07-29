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

		<?php 
		} // fin section 3
		if ($section=="4") {
		?>

			<fieldset class="ekzerco">
				<legend><b>Demandoj</b> </legend>
				<input>
				<div class="tasko">
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