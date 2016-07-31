<?php 
$titolo="7 (sep)";
$leciono = 7;
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

			<h3>En la koridoro</h3>
			<div class="row dialogo">
				<div class="col s12 m8">
					<p><i>(En la koridoro)</i></p>
					<p><b>Tom:</b> Jen ŝi estas. Ni pravis. ŝi apenaŭ havis la tempon alveni
					ĝis la angulo, jam ŝi falis. Videble, ŝi estas nekonscia. ŝi perdis
					la konscion kaj falis.</p>
					<p><b>Bob:</b> Ĉu ŝi ankoraŭ vivas?</p>
					<p><b>Tom:</b> Jes. Ne timu. ŝi perdis la konscion, sed ŝi ne perdis la
					vivon. La koro batas. Ĝi batas malforte, sed tamen batas. ŝi do
					vivas. Eble ŝi apenaŭ vivas, sed ŝi vivas.</p>
					<p><b>Bob:</b> Kion ni faru?</p>
					<p><b>Tom:</b> Kion vi opinias?</p>
					<p><b>Bob:</b> ŝajnas, ke ŝi dormas.</p>
				</div>
				<div class="col s12 m4">
					<img src="bildoj/gerda07-1.gif" class="responsive-img">
				</div>
			</div>
			<div class="row dialogo">
				<div class="col s12">
					<p><b>Tom:</b> Ni devas informi la aŭtoritatojn. Tuj. Mi iros. Ili eble
					decidos voki doktoron, kuraciston, kaj almenaŭ tuj sendos flegistinon.
					Certe estas flegistino en ĉi tiu universitato, ĉu ne?</p>
					<p><b>Bob:</b> Verŝajne, sed mi ne scias certe. Mi estas ĉi tie apenaŭ unu
					semajnon.</p>
					<p><b>Tom:</b> Nu, mi tuj iros informi ilin. Restu ĉi tie kun ŝi. Sed ni
					unue metu ŝin pli bone, ke ŝi kuŝu komforte, kun la piedoj pli altaj
					ol la kapo.</p>
					<p><b>Bob:</b> Ĉu vere? Ĉu vere vi volas, ke ŝi kuŝu kun la piedoj pli
					altaj ol la kapo? Tio ne estas komforta.</p>
					<p><b>Tom:</b> Tamen, kiam iu perdis la konscion, tio estas la ĝusta pozicio,
					se mi bone memoras, kion oni instruis al mi.</p>
				</div>
			</div>

		<?php 
		} // fin section 1
		if ($section=="2") {
		?>

			<section class="klarigo">
				<h4>-os : <i>forme future du verbe</i></h4>
				<p><span class="eo">mi estos</span> : je serai</p>
				<p><span class="eo">ĉu vi venos?</span> : viendras-tu ?</p>
				<p><span class="eo">ili komprenos</span> : ils comprendront</p>

			<h4>-isto : <i>indique la profession, l'occupation habituelle</i></h4>
				<p><span class="eo">instrui</span> : enseigner → <span class="eo">instruisto</span> : enseignant</p>
				<p><span class="eo">labori</span> : travailler → <span class="eo">laboristo</span> : travailleur</p>
	
				<p class="noto"><b>NOTE</b> : Au pluriel, la terminaison <em>-n</em> est ajoutée à la terminaison <em>-j</em> :</p>
				<p><span class="eo">mi konas belajn knabinojn</span> : je connais des belles filles</p>
				<p><span class="eo">grandajn manojn li havas</span> : il a des grandes mains</p>
				<p><span class="eo">la viroj, kiujn ŝi amas</span> : les hommes qu'elle aime</p>
				<p><span class="eo">la viroj, kiuj ŝin amas</span> : les hommes qui l'aiment</p>
			
				<h4><i>Autres utilisations de la terminaison</i> -n</h4>
			
				<p class="parto">En plus de montrer le complément d'objet direct, la terminaison <em>-n</em>
				sert aussi à montrer le mouvement (complément de lieu avec mouvement).
				Toutefois si le mouvement est déjà implicitement indiqué par la
				préposition qui introduit le complément (par exemple grâce à une
				préposition <b>al</b> ou <b>ĝis</b>) alors la terminaison <b>-n</b> ferait double
				emploi et on ne l'utilise pas.</p>
	
				<p><span class="eo">li iris en la ĝardenon</span> : il est entré dans le jardin</p>
				<p><span class="eo">li iris al la ĝardeno</span> : il est allé jusqu'au jardin</p>
		
				<p><span class="eo">li foriras Parizon</span> : il part à Paris</p>
				<p><span class="eo">li foriras al Parizo</span> : il part à Paris</p>

				<p class="parto">La terminaison <b>-n</b> n'est pas utilisée uniquement pour indiquer le
				complément d'objet direct, ou la direction d'un mouvement, mais aussi
				dans l'expression du moment, de la durée, de la mesure, de la valeur,
				quand il n'y a pas de préposition&nbsp;:</p>
	
				<p><span class="eo">mi restis la tutan semajnon</span> : je suis resté toute la semaine</p>
				<p>Dans ce cas la terminaison <b>-n</b> remplace la préposition qui est alors
				sous-entendue&nbsp;; ainsi, si vous utilisez une préposition, vous ne devez
				pas utiliser la terminaison <b>-n</b>, et vous pouvez dans ce cas exprimer la
				même idée avec la phrase&nbsp;:</p>
	
				<p><span class="eo">mi restis dum la tuta semajno</span> : je suis resté durant toute la semaine</p>
				<p><span class="eo">li venis la postan tagon</span> : il est venu le jour d'après</p>
				<p><span class="eo">ĝi estas unu metron alta</span> : cela est haut d'un mètre</p>
			</section>

		<?php 
		} // fin section 2
		if ($section=="3") {
		?>

			<div class="vortlisto row">
				<div class="col s12 l6">
					<p><span class="eo">ambaŭ</span> : tous deux, tous les deux, l'un et l'autre</p>
					<p><span class="eo">almenaŭ</span> : au moins, du moins</p>
					<p><span class="eo">apenaŭ</span> : à peine</p>
					<p><span class="eo">aŭtoritato</span> : autorité</p>
					<p><span class="eo">bati</span> : battre, frapper</p>
					<p><span class="eo">doktoro</span> : docteur</p>
					<p><span class="eo">dormi</span> : dormir</p>
					<p><span class="eo">fari</span> : faire</p>
					<p><span class="eo">flegi</span> : soigner</p>
					<p class="sekva"><span class="eo">flegisto</span> : infirmier</p>
					<p class="sekva"><span class="eo">flegistino</span> : infirmière</p>
					<p><span class="eo">ĝis</span> : jusqu'à</p>
					<p><span class="eo">ĝusta</span> : correct(e), exact(e)</p>
					<p><span class="eo">informi</span> : informer</p>
					<p class="sekva"><span class="eo">informo</span> : information</p>
					<p><span class="eo">kapo</span> : tête</p>
					<p><span class="eo">komforta</span> : confortable</p>
					<p><span class="eo">konscia</span> : conscient(e)</p>
					<p class="sekva"><span class="eo">konscii</span> : être conscient, avoir conscience</p>
					<p class="sekva"><span class="eo">konscio</span> : conscience</p>
				</div>
				<div class="col s12 l6">
					<p><span class="eo">koro</span> : cœur</p>
					<p><span class="eo">kuraci</span> : soigner, guérir</p>
					<p class="sekva"><span class="eo">kuracisto</span> : médecin</p>
					<p><span class="eo">kuŝi</span> : être couché, être étendu, reposer (gésir)</p>
					<p><span class="eo">memori</span> : se souvenir, se rappeler</p>
					<p><span class="eo">ol</span> : que (dans une comparaison)</p>
					<p><span class="eo">opinii</span> : être d'avis, penser, croire</p>
					<p class="sekva"><span class="eo">opinio</span> : opinion, avis</p>
					<p><span class="eo">piedo</span> : pied</p>
					<p><span class="eo">pozicio</span> : position</p>
					<p><span class="eo">semajno</span> : semaine</p>
					<p><span class="eo">sendi</span> : envoyer, expédier</p>
					<p><span class="eo">unu</span> : un(e)</p>
					<p class="sekva"><span class="eo">unua</span> : premier, première</p>
					<p class="sekva"><span class="eo">unue</span> : premièrement, d'abord</p>
					<p><span class="eo">vivi</span> : vivre</p>
					<p><span class="eo">voki</span> : appeler</p>
				</div>
			</div>

		<?php 
		} // fin section 3
		if ($section=="4") {
		?>

			<fieldset class="ekzerco">
				<legend><b>Demandoj</b></legend>
				<input type="hidden" name="013_cxap07.0" value="Demandoj">
				<div class="tasko">
				<?php $demandoj=array (
					1 => "Ĉu Gerda ankoraŭ vivas? (jes / ne)",
					2 => "Kiel batas la koro de Gerda? (forte / malforte / nekonscie / konscie / verŝajne)",
					3 => "Kiun Tom volas informi? (la blondulon / la profesoron pri lingvistiko / la aŭtoritatojn / spionon)",
					4 => "Ĉu iu, kiu perdis la konscion, kuŝu kun la kapo pli alta ol la piedoj? (jes / ne)"
					);
				ekzerco(True, 2);
				?>
				</div>
			</fieldset>

			<fieldset class="ekzerco">
				<legend><b>Elektu la ĝustan vorton.</b></legend>
				<input type="hidden" name="013_cxap07.1" value="Elektu la ĝustan vorton.">
				<div class="ekzemplo">
					<p><em>Ekzemple:</em></p>
					<p><span class="input-field"><select><option> ? </option><option>Mi</option><option>Min</option></select></span>
					restis tie unu <span class="input-field"><select><option> ? </option><option>semajno</option><option>semajnon]</option>
					</select></span>.</p>
					<p>→ <b>Mi</b> restis tie unu <b>semajnon</b>.</p>
				</div>
					
				<div class="tasko">
					<?php $demandoj=array (
						5 => "La [sukerpeco/sukerpecon] falis en la [kafo/kafon].",
						6 => "Sed [mi/min] ne deziras [sukero/sukeron] en [mia/mian] [kafo/kafon].",
						7 => "Jen [Linda/Lindan] venas en la [restoracio/restoracion]!",
						8 => "Eble [ŝi/ŝin] deziras [kafo/kafon] kun [sukero/sukeron].",
						9 => "[Tiu/Tiun] [tago/tagon] [mi/min] laboris tre multe.",
						10 => "[Li/Lin] restis tie unu [tago/tagon]; [mi/min] restis dum [tuta/tutan] [semajno/semajnon].",
						11 => "Demandu, [kio/kion] [li/lin] faras! --- Ne! Demandu [vi/vin]!",
						12 => "La [kafo/kafon], [kiu/kiun] [vi /vin] havas, estas sen [sukero/sukeron].",
						13 => "La [kafo/kafon], [kiu/kiun] [vi/vin] metis sur la [tablo/tablon], [ili/ilin] ne trinkis.",		
						14 => "La [viro/viron], [kiu/kiun] metis [kafo/kafon] sur la [tablo/tablon], ne estas [studento/studenton].",	
						15 => "La [tablo/tablon], sur [kiu/kiun] estas la [kafo/kafon], estas tro [malgranda/malgrandan].",
						16 => "Ĉu [vi/vin] havas iom da [kafo/kafon]? --- [Mi/Min] havas tri [tasoj/tasojn] da [kafo/kafon]."
						);
					elektEkzerco();
					?>
				</div>
			</fieldset>

			<fieldset class="ekzerco">
				<legend><b>Elektu la ĝustan vorton.</b></legend>
				<input type="hidden" name="013_cxap07.2" value="Elektu la ĝustan vorton.">
				<div class="ekzemplo">
					<p><em>Ekzemple:</em></p>
					<p>Ĉu Tom estas same alta <span class="input-field"><select><option>  ?  </option><option>kiel</option>
					<option>ol</option></select></span> Bob, aŭ ĉu li estas pli alta <span class="input-field"><select><option>  ?  </option>
					<option>kiel</option><option>ol</option></select></span> Bob?</p>
			  		<p>→ Ĉu Tom estas same alta <b>kiel</b> Bob, aŭ ĉu li estas pli alta <b>ol</b> Bob?</p>
				</div>
		
					<div class="tasko">
						<?php $demandoj=array (
							17 => "[Kiel/Ol] vi scias, Bob estas pli alta [kiel/ol] Tom, sed malpli alta [kiel/ol] la stranga blondulo.",
							18 => "Mi preferus resti ĉi tie [kiel/ol] iri informi la aŭtoritatojn.",
							19 => "La vero ofte ŝajnas pli absurda [kiel/ol] imagaĵoj.",
							20 => "Li iĝis pli kaj pli forta; li iĝis forta [kiel/ol] fortulo.",
							21 => "Iru pli rapide, aŭ iru malpli rapide; iru [kiel/ol] vi volas!"
						);
						elektEkzerco();
			?>
				

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