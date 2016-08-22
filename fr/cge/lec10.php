<?php
$titolo="10 (dek)";
$leciono = 10;
$section=isset($_GET["section"])?$_GET["section"]:"1";
include "dlekkapo.inc.php";
?>

<div class="row">
	<article class="col s12 m10 l7 offset-m1 offset-l1">
				
		<section id="leciono-enhavo">
		
		<?php 
		getTitoloLecionero('CG',10,$section);

		if ($section=="1") {
		?>

			<p>
			Vous voilà rendu à la 10<sup>e</sup> et dernière leçon de votre cours. Elle
			consistera en un petit examen qui nous permettra d’évaluer vos
			connaissances de l’espéranto écrit. Votre tuteur le corrigera comme
			d’habitude, et recevrez un <i>atestilo</i> (attestation de fin de cours).
			</p>

		<fieldset class="ekzerco">
			<legend><strong></strong> Mettez les mots suivants au pluriel.</legend>
			<?php atentigo(); ?>
			<input type="hidden" name="013_cxap10.1" value="1. Mettez les mots suivants au pluriel.">
			<div class="tasko row">
			<?php
				$demandoj=array (
				1 => "amiko",
				2 => "butiko",
				3 => "minuto",
				4 => "manĝanta",
				5 => "nokto",
				6 => "kiu",
				7 => "multa",
				8 => "babilema",
				9 => "legita",
				);
				ekzerco ("U", 1, "J");
			?>
			</div>
		</fieldset>

		<fieldset class="ekzerco">
			<legend><strong></strong> Donnez le féminin des noms suivants.</legend>
			<input type="hidden" name="013_cxap10.2" value="2. Donnez le féminin des noms suivants.">
			<div class="tasko row">
			<?php
				$demandoj=array (
				10 => "filo",
				11 => "patro",
				12 => "amiko",
				13 => "bovo",
				14 => "knabo",
				15 => "edzo",
				16 => "junulo",
				17 => "urso",
				18 => "doktoro",
				);
				ekzerco ("U", 1, "J");
			?>
			</div>
		</fieldset>
			
		<fieldset class="ekzerco">
			<legend><strong></strong> Donnez le contraire des mots suivants.</legend>
			<input type="hidden" name="013_cxap10.3" value="3. Donnez le contraire des mots suivants.">
			<div class="tasko row">
			<?php
				$demandoj=array (
				19 => "bona",
				20 => "bela",
				21 => "nova",
				22 => "facila",
				23 => "fermi",
				24 => "helpi",
				25 => "multe",
				26 => "antaŭ",
				27 => "amo",
				);
				ekzerco ("U", 1, "J");
			?>
			</div>
		</fieldset>
			
		<fieldset class="ekzerco">
			<legend><strong></strong> Mettez les phrases suivantes à la forme interrogative (ĉu).</legend>
			<input type="hidden" name="013_cxap10.4" value="4. Mettez les phrases suivantes à la forme interrogative (ĉu).">
			<div class="tasko">
			<?php
				$demandoj=array (
				28 => "La pano estas blanka.",
				29 => "Ŝi loĝas en Kanado.",
				30 => "La urso estis ofte en la akvo."
				);
				ekzerco ("U", 1);
			?>
			</div>
		</fieldset>

		<fieldset class="ekzerco">
			<legend><strong></strong> Traduisez les phrases suivantes en prenant soin d’appliquer la règle de l’accusatif (-n) au complément d’objet direct.</legend>
			<input type="hidden" name="013_cxap10.5" value="5. Traduisez les phrases suivantes.">
			<div class="tasko">
			<?php
				$demandoj=array (
				31 => "L’oiseau attrape des insectes.",
				32 => "Les filles ont oublié le gâteau.",
				33 => "Le parc a reçu un nouveau nom.",
				34 => "Fermez la porte et asseyez-vous ici.",
				35 => "Nous avons admiré beaucoup de bêtes."
				);
				ekzerco(True,1);
			?>
			</div>
		</fieldset>

		<fieldset class="ekzerco">
			<legend><strong></strong> Recopiez les phrases en choisissant la bonne réponse parmi celles qui sont proposées
   (emploi de l’adjectif possessif).</legend>
			<input type="hidden" name="013_cxap10.6" value="6. Recopiez les phrases en choisissant la bonne réponse parmi celles qui sont proposées (emploi de l’adjectif possessif).">
			<div class="tasko">
			<?php
				$demandoj=array (
				36 => "mia taso : (notre tasse) (ma tasse)",
				37 => "via sano : (votre santé) (leur santé)",
				38 => "lia ŝuo : (sa chaussure à lui) (… à elle)",
				39 => "ŝia edzo : (son mari à elle) (sa femme à lui)",
				40 => "ilia urbo : (sa ville à lui) (leur ville à eux)"
				);
				ekzerco(False,1);
			?>
			</div>
		</fieldset>

		<fieldset class="ekzerco">
			<legend><strong></strong> Recopiez les phrases en choisissant le bon corrélatif.</legend>
			<input type="hidden" name="013_cxap10.7" value="7. Recopiez les phrases en choisissant le bon corrélatif.">
			<div class="tasko">
			<?php
				$demandoj=array (
				41 => "Jen tri belaj fruktoj. (Tiun) (Kiun) vi deziras ?",
				42 => "La libro de mia onklo estas (nenie) (ĉiu).",
				43 => "(iu) (tia) estas la vero.",
				44 => "(kiom) (tial) da lakto vi deziras ?",
				45 => "Mi (nenies) (iel) faros la laboron."
				);
				ekzerco ("U", 1);
			?>
			</div>
		</fieldset>

		<fieldset class="ekzerco">
			<legend><strong></strong> Recopiez les phrases en choisissant la bonne réponse parmi celles qui sont proposées.</legend>
			<input type="hidden" name="013_cxap10.8" value="8. Recopiez les phrases en choisissant la bonne réponse parmi celles qui sont proposées.">
			<div class="tasko">
			<?php
				$demandoj=array (
				46 => "Alberto deziras iri (dum) (al) Eŭropo.",
				47 => "Niaj amikoj estas (en) (ĝis) la domo.",
				48 => "Li ofte ludas (sub) (anstataŭ) studi.",
				49 => "Ŝi alvenos (ĉirkaŭ) (sur) la tria horo.",
				50 => "Ĉu vi rimarkis la belan arbon (dum) (antaŭ) la domo?"
				);
				ekzerco ("U", 1);
			?>
			</div>
		</fieldset>

		<fieldset class="ekzerco">
			<legend><strong></strong> Indiquez le préfixe ou le suffixe correspondant à l’explication puis fournissez-en un exemple.</legend>
			<input type="hidden" name="013_cxap10.9" value="9. Indiquez le préfixe ou le suffixe correspondant à l’explication puis fournissez-en un exemple.">
			<div class="tasko">
			<?php
				$demandoj=array (
				51 => "les deux sexes réunis dans le même mot :",
				52 => "l’être caractérisé par la racine du mot :",
				53 => "action ratée ou faite de travers :",
				54 => "ce qui sert à augmenter, à amplifier :",
				55 => "ce qui indique que c’est digne de quelque chose :"
				);
				ekzerco(True, 1);
			?>
			</div>
		</fieldset>

		<fieldset class="ekzerco">
			<legend><strong></strong> Thème - Traduisez.</legend>
			<input type="hidden" name="013_cxap10.10" value="10. Thème - Traduisez.">
			<div class="tasko">
			<?php
				$demandoj=array (
			   56 => "<br>Bonjour&nbsp;! Mon nom est Jacques. Je suis jardinier et j’aime beaucoup les fleurs. Je travaille dans le jardin zoologique de Granby, cela veut dire que j’aime aussi les bêtes. Quand je suis en train de travailler, je chante souvent. Tous mes amis me disent que les fleurs du zoo sont belles parce que je chante avec joie. Est-ce que vous pensez que cela est possible&nbsp;?" 
				);
				ekzerco(True, 10);
			?>
			</div>
		</fieldset>

		<fieldset class="ekzerco">
			<legend><strong></strong> Version - Traduisez.</legend>
			<input type="hidden" name="013_cxap10.11" value="11. Version - Traduisez.">
			<div class="tasko">
			<?php
				$demandoj=array (
				57 => "<br>Kara amikino,<br>Jen mia unua letero al vi. Mi deziras interŝanĝi leterojn kaj amikiĝi kun vi. Mi estas esperantisto de nur du monatoj sed mi progresas rapide, ĉar mi studas la lingvon ĉiun tagon. Mi deziras multe vojaĝi tra la mondo kaj se mi estus riĉa, tio estus tre facila. Mi kredas, ke Esperanto estas utila por trovi geamikojn en multaj landoj. Se vi opinias, ke ni povas interŝanĝi amikaĵojn, skribu al mi kaj mi certe respondos. Dankon kaj ĝis baldaŭ!<br>Via kanada amiko, Petro."
				);
				ekzerco(False, 10);
			?>
			</div>
		</fieldset>

		<?php 
		} // fin section
		if ($section=="2") {
		?>
		
		<p>Bravo ! Vous avez terminé, il ne vous reste qu'à envoyer vos réponses à votre correcteur. Une fois que celui ci aura corrigé vos réponses, vous pourrez consulter votre attestation de réussite dans votre espace personnel.</p>
		
		<p>Afin de continuer votre apprentissage, vous pouvez suivre le cours <i>Gerda Malaperis</i>, basé sur une histoire policière, ce cours vous permettra d'enrichir votre vocabulaire et de consolider vos connaissances de la langue.</p>
		
		<p>Bonne continuation dans le monde de l'espéranto !</p>
		
		<?php 
		} // fin derniere section
		?>	
		</section>

		<section id="leciono-fino">
			<div id="marko" class="right-align">
				<?php getBoutonFinSection('CG',$leciono,$section,$persono_id); ?>
				<a id="farita" class="btn-floating btn-large light-blue darken-1 hide"><i class="material-icons">done_all</i></a>
			</div>
			<div class="ligoj">
				<?php getLecioneroAntauxa('CG',$leciono,$section); ?>
				<?php getLecioneroVenonta('CG',$leciono,$section); ?>
			</div>
		</section>

	</article>
			
	<aside class="col s12 m10 l3 offset-m1 push-l1">
								
		<ul class="collapsible" data-collapsible="expandable">

			<?php 
			// On affiche le sommaire de la lecon
			getEnhavtabelo('CG',$leciono); 
			?>

		</ul>	
				
	</aside>
</div>
<?php include "dlekpiedo.inc.php"; ?>
