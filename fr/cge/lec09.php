<?php
$titolo="9 (na&#365;)";
$leciono = 9;
$section=isset($_GET["section"])?htmlspecialchars($_GET["section"]):"1";
if (!is_numeric($section)) {
	if ($persono_id=="") {header("Location:../../index.php?erarkodo=24");}
}
include "dlekkapo.inc.php";

?>

<div class="row">
	<article class="col s12 m10 l7 offset-m1 offset-l1">
				
		<section id="leciono-enhavo">

		<?php 
		getTitoloLecionero('CG',9,$section);
		displayWarningSiLecioneroManquante($persono_id,'CG',9,$section);

		if ($section=="1") {
		?>

			<p class="parto">
			Une des meilleures façons d’apprendre une langue, c’est en la chantant.
			Vous n’aurez sûrement pas de difficulté à reconnaître la mélodie de
			<i>Frère Jacques</i> dans le texte suivant&nbsp;:
			</p>

			<p>
			     Frato Jako, frato Jako,<br/>
			     Levu vin, levu vin.<br/>
			     Jen la sonorilo, jen la sonorilo;<br/>
			     Bim bam bom, bim bam bom.<br/>
			</p>
			<p>
			     Frato Jako, frato Jako,<br/>
			     Lavu vin, lavu vin.<br/>
			     Metu vian veston, metu vian veston;<br/>
			     Bim bam bom, bim bam bom.<br/>
			</p>
			<p>
			     Frato Jako, frato Jako,<br/>
			     Kuru do, kuru do<br/>
			     Tuj al la lernejo, tuj al la lernejo;<br/>
			     Bim bam bom, bim bam bom.<br/>
			</p>

			<fieldset class="vortoj">
				<legend>VOCABULAIRE À RETENIR</legend>
				<div>
					<?php if ($persono) { ?>
					<p class="eo eta">Ces mots seront automatiquement ajoutés à votre vocabulaire à réviser lorsque vous aurez terminé d'étudier cette section. Le nombre de mots à réviser sera indiqué sur le bouton affiché au-dessus du sommaire.</p>
					<?php } ?>
				</div>
				<div class="vortlisto row">
					<p class="col s6 m4"><a href="<?php echo $vojo;?>fr/son/vortoj/jen-2.mp3" class="sm2_button"></a><span class="eo">jen</span>&nbsp;: voici, voilà</p>
					<p class="col s6 m4"><a href="<?php echo $vojo;?>fr/son/vortoj/sonorilo.mp3" class="sm2_button"></a><span class="eo">sonorilo</span>&nbsp;: cloche</p>
					<p class="col s6 m4"><a href="<?php echo $vojo;?>fr/son/vortoj/do.mp3" class="sm2_button"></a><span class="eo">do</span>&nbsp;: donc</p>
					<p class="col s6 m4"><a href="<?php echo $vojo;?>fr/son/vortoj/tuj.mp3" class="sm2_button"></a><span class="eo">tuj</span>&nbsp;: tout de suite</p>
					<p class="col s6 m4"><a href="<?php echo $vojo;?>fr/son/vortoj/vesto.mp3" class="sm2_button"></a><span class="eo">vesto</span>&nbsp;: vêtement</p>
				</div>
			</fieldset>

			<p class="parto">
			Une autre version de <i>Frère Jacques</i> est celle élaborée par un groupe
			de musiciens et chanteurs espérantistes du Brésil&nbsp;:
			</p>
			
			<p>
			     Bonan tagon ! Bonan tagon !<br/>
			     Mi deziras al vi !<br/>
			     Havu bonan tagon ! Havu bonan tagon,<br/>
			     Vi kaj la famili’ !<br/>
			</p>
			<p>
			     Nun sidiĝu ! Nun sidiĝu,<br/>
			     Mia kara fraŭlin’ !<br/>
			     Diru nun belsone : ĉu vi fartas bone ?<br/>
			     Belulin’, kisu min !<br/>
			</p>
			<p>
			     Ĝis revido ! Ĝis revido,<br/>
			     Mia kara fraŭlin’ !<br/>
			     Ĝis alia fojo ! Estos granda ĝojo<br/>
			     Vidi vin, kisi vin !<br/>
			</p>
			
			<fieldset class="vortoj">
				<legend>VOCABULAIRE À RETENIR</legend>
				<div>
					<?php if ($persono) { ?>
					<p class="eo eta">Ces mots seront automatiquement ajoutés à votre vocabulaire à réviser lorsque vous aurez terminé d'étudier cette section. Le nombre de mots à réviser sera indiqué sur le bouton affiché au-dessus du sommaire.</p>
					<?php } ?>
				</div>
				<div class="vortlisto row">
					<p class="col s6 m6"><a href="<?php echo $vojo;?>fr/son/vortoj/belsone.mp3" class="sm2_button"></a><span class="eo">belsone</span>&nbsp;: d’un beau son</p>
					<p class="col s6 m6"><a href="<?php echo $vojo;?>fr/son/vortoj/farti.mp3" class="sm2_button"></a><span class="eo">farti</span>&nbsp;: se porter</p>
					<p class="col s6 m6"><a href="<?php echo $vojo;?>fr/son/vortoj/gxojo.mp3" class="sm2_button"></a><span class="eo">ĝojo</span>&nbsp;: joie</p>
					<p class="col s6 m6"><a href="<?php echo $vojo;?>fr/son/vortoj/gxis-revido.mp3" class="sm2_button"></a><span class="eo">ĝis revido</span>&nbsp;: au revoir</p>
					<p class="col s6 m6"><a href="<?php echo $vojo;?>fr/son/vortoj/frauxlo.mp3" class="sm2_button"></a><span class="eo">fraŭlo</span>&nbsp;: homme célibataire</p>
					<p class="col s6 m6"><a href="<?php echo $vojo;?>fr/son/vortoj/frauxlino.mp3" class="sm2_button"></a><span class="eo">fraŭlino</span>&nbsp;: demoiselle</p>
				</div>
			</fieldset>

		<?php 
		} // fin section
		if ($section=="2") {
		?>

			<p class="parto">
			Vous avez remarqué l’élision du <b>-o</b> final dans certains mots
			(famili’, fraŭlin’), ce qui se fait couramment en poésie avec la
			terminaison des noms et le <b>a</b> de l’article <b>la</b>&nbsp;:
			</p>
			<p><a href="<?php echo $vojo;?>fr/son/frazoj/esperanto-estas-la-espero.mp3" class="sm2_button"></a><span class="eo">Esperanto estas la espero de l’ mond’.</span></p>
			
			<p class="parto">L’élision ne change pas la place de l’accent tonique :</p>
			<p><span class="eo">fraŭ-<u>li</u>-no</span> devient <span class="eo">fraŭ-<u>lin’</u></span></p>


		<?php 
		} // fin section
		if ($section=="3") {
		?>
		
			<p class="parto">
			Dans la 3<sup>e</sup> leçon, nous avons parlé des <b>adverbes</b> et nous avons
			expliqué que ceux qui sont dérivés d’autres mots se terminent par
			<b>-e</b>. Mais beaucoup d’adverbes ne sont pas des dérivés et appartiennent
			au groupe des mots dits primaires. Voici quelques adverbes se terminant
			en <b>-aŭ</b> parmi les plus usités en espéranto.
			</p>
			
			<?php if ($persono) { ?>
			<p class="eo eta">Les adverbes présentés ci-dessous seront automatiquement ajoutés à votre vocabulaire à réviser lorsque vous aurez terminé d'étudier cette section. Le nombre de mots à réviser sera indiqué sur le bouton affiché au-dessus du sommaire.</p>
			<?php } ?>

			<div class="row">
				<p class="col s12"><a href="<?php echo $vojo;?>fr/son/vortoj/almenaux.mp3" class="sm2_button"></a><b>almenaŭ</b> : au moins</p>
				<p class="col s11 offset-s1"><span class="eo">Donu al mi <b>almenaŭ</b> du minutojn.</span></p>
				<p class="col s12"><a href="<?php echo $vojo;?>fr/son/vortoj/ankaux.mp3" class="sm2_button"></a><b>ankaŭ</b> : aussi, également (précède le mot sur lequel on insiste)</p>
				<p class="col s11 offset-s1"><span class="eo"><b>Ankaŭ</b> Johano lavas sin.</span> Jean aussi se lave. (Il n’y a pas que les autres qui se lavent&nbsp;: lui aussi se lave.)</p>
				<p class="col s11 offset-s1"><span class="eo">Johano <b>ankaŭ</b> lavas sin.</span> Jean se lave aussi. (Il fait plusieurs choses, par exemple se peigne, se rase, etc. Et il se lave aussi.)</p>
				<p class="col s11 offset-s1"><span class="eo">Johano lavas <b>ankaŭ</b> sin.</span> Jean se lave aussi. (Jean ne lave pas seulement d’autres personnes, mais il se lave lui-même aussi.)</p>
				<p class="col s12"><a href="<?php echo $vojo;?>fr/son/vortoj/ankoraux.mp3" class="sm2_button"></a><b>ankoraŭ</b> : encore</p>
				<p class="col s11 offset-s1"><span class="eo">Mi <b>ankoraŭ</b> ne vidis lin. Ĉu li ankoraŭ estas tie?</span> (Je ne l’ai pas encore vu. Est-ce qu’il est encore ici&nbsp;?)</p>
				<p class="col s12"><a href="<?php echo $vojo;?>fr/son/vortoj/apenaux.mp3" class="sm2_button"></a><b>apenaŭ</b> : à peine</p>
				<p class="col s11 offset-s1"><span class="eo">Li dormis <b>apenaŭ</b> kvin minutojn.</span></p>
				<p class="col s12"><a href="<?php echo $vojo;?>fr/son/vortoj/baldaux.mp3" class="sm2_button"></a><b>baldaŭ</b> : bientôt</p>
				<p class="col s11 offset-s1"><span class="eo">Venu <b>baldaŭ</b>, mi petas.</span></p>
				<p class="col s12"><a href="<?php echo $vojo;?>fr/son/vortoj/hieraux.mp3" class="sm2_button"></a><b>hieraŭ</b> : hier (<b>antaŭhieraŭ</b>&nbsp;: avant-hier)</p>
				<p class="col s11 offset-s1"><span class="eo">Mi renkontis lin <b>hieraŭ</b> (antaŭhieraŭ).</span></p>
				<p class="col s12"><a href="<?php echo $vojo;?>fr/son/vortoj/hodiaux.mp3" class="sm2_button"></a><b>hodiaŭ</b> : aujourd’hui</p>
				<p class="col s11 offset-s1"><span class="eo"><b>Hodiaŭ</b> estas bela tago.</span></p>
				<p class="col s12"><a href="<?php echo $vojo;?>fr/son/vortoj/morgaux.mp3" class="sm2_button"></a><b>morgaŭ</b> : demain</p>
				<p class="col s11 offset-s1"><span class="eo">Kial plenumi</span> (accomplir) <span class="eo"><b>morgaŭ</b> tion, kion oni povas fari hodiaŭ?</span></p>
				<p class="col s12"><a href="<?php echo $vojo;?>fr/son/vortoj/preskaux.mp3" class="sm2_button"></a><b>preskaŭ</b> : presque</p>
				<p class="col s11 offset-s1"><span class="eo">Li <b>preskaŭ</b> falis.</span></p>
			</div>

		<?php 
		} // fin section
		if ($section=="4") {
		?>

			<p class="parto">Voici cinq autres mots très fréquents terminés par <b>-aŭ</b>&nbsp;:</p>
		
			<?php if ($persono) { ?>
			<p class="eo eta">Ces mots seront automatiquement ajoutés à votre vocabulaire à réviser lorsque vous aurez terminé d'étudier cette section. Le nombre de mots à réviser sera indiqué sur le bouton affiché au-dessus du sommaire.</p>
			<?php } ?>

			<div class="row">
				<p class="col s12"><a href="<?php echo $vojo;?>fr/son/vortoj/ambaux.mp3" class="sm2_button"></a><b>ambaŭ</b> : tous les deux (adjectif ou pronom numéral)</p>
				<p class="col s11 offset-s1"><span class="eo">Ili <b>ambaŭ</b> estas en la ĝardeno.</span></p>
				<p class="col s12"><a href="<?php echo $vojo;?>fr/son/vortoj/anstataux.mp3" class="sm2_button"></a><b>anstataŭ</b> : au lieu de (prép.)</p>
				<p class="col s11 offset-s1"><span class="eo">Ŝi dormis <b>anstataŭ</b> legi.</span></p>
				<p class="col s12"><a href="<?php echo $vojo;?>fr/son/vortoj/antaux.mp3" class="sm2_button"></a><b>antaŭ</b> : avant, devant (prép.)</p>
				<p class="col s11 offset-s1"><span class="eo"><b>Antaŭ</b> ĉio oni devas peti informojn.<br>La monumento staras <b>antaŭ</b> la muzeo.</span></p>
				<p class="col s12"><a href="<?php echo $vojo;?>fr/son/vortoj/cxirkaux.mp3" class="sm2_button"></a><b>ĉirkaŭ</b> : autour de, environ (prép.)</p>
				<p class="col s11 offset-s1"><span class="eo">Ili vojaĝis <b>ĉirkaŭ</b> la terglobo.<br/>Venu <b>ĉirkaŭ</b> la dua (horo).</span></p>
				<p class="col s12"><a href="<?php echo $vojo;?>fr/son/vortoj/kontraux.mp3" class="sm2_button"></a><b>kontraŭ</b> : contre (prép.) </p>
				<p class="col s11 offset-s1"><span class="eo">Ni batalas <b>kontraŭ</b> la inflacio.<br/><b>Kontraŭ</b> doloro helpas bonhumoro.</span></p>
			</div>

			<p class="rimarko"><strong>REMARQUE</strong> : 
			Pour tous ces mots en <b>aŭ</b> vous devez faire
			très attention à placer correctement l’accent tonique. Les
			francophones ont souvent la mauvaise habitude de prononcer
			<b>tchir-<u>ka</u>-ou</b> alors que <b>kaŭ</b> ne forme qu’une seule syllabe. La
			prononciation exacte est donc :</p>
			
			<div class="row">
				<p class="col s2"><a href="<?php echo $vojo;?>fr/son/vortoj/cxirkaux.mp3" class="sm2_button"></a><span class="eo">ĉirkaŭ</span></p><p class="col s10">(<u>tchir</u>-kaw)</p>
				<p class="col s2"><a href="<?php echo $vojo;?>fr/son/vortoj/morgaux.mp3" class="sm2_button"></a><span class="eo">morgaŭ</span></p><p class="col s10">(<u>mor</u>-gaw)</p>
				<p class="col s2"><a href="<?php echo $vojo;?>fr/son/vortoj/hieraux.mp3" class="sm2_button"></a><span class="eo">hieraŭ</span></p><p class="col s10">(hi-<u>è</u>-raw)</p>
				<p class="col s2"><a href="<?php echo $vojo;?>fr/son/vortoj/hodiaux.mp3" class="sm2_button"></a><span class="eo">hodiaŭ</span></p><p class="col s10">(ho-<u>di</u>-aw)</p>
			</div>

		<?php 
		} // fin section
		if ($section=="5") {
		?>

			<p class="parto">Parmi les mots invariables fréquemment employés, on trouve aussi&nbsp;:</p>
		
			<div class="row">
				<p class="col s12"><b>ĉi</b> : indique la proximité </p>
				<p class="col s5 offset-s1"><a href="<?php echo $vojo;?>fr/son/vortoj/cxi-tio.mp3" class="sm2_button"></a><span class="eo">ĉi tio</span> ou <span class="eo">tio ĉi</span>&nbsp;: cette chose-ci</p>
				<p class="col s6"><a href="<?php echo $vojo;?>fr/son/vortoj/cxi-tie.mp3" class="sm2_button"></a><span class="eo">ĉi tie</span> ou <span class="eo">tie ĉi</span>&nbsp;: ici</p>
				<p class="col s11 offset-s1"><a href="<?php echo $vojo;?>fr/son/vortoj/cxio-cxi.mp3" class="sm2_button"></a><span class="eo">ĉi ĉio</span> ou <span class="eo">ĉio ĉi</span>&nbsp;: tout ceci</p>
				<p class="col s11 offset-s1"><a href="<?php echo $vojo;?>fr/son/vortoj/tiu-knabo.mp3" class="sm2_button"></a><span class="eo">tiu knabo</span>&nbsp;: ce garçon(-là)</p>
				<p class="col s11 offset-s1"><a href="<?php echo $vojo;?>fr/son/vortoj/tiu-cxi-cxi-tiu-knabo.mp3" class="sm2_button"></a><span class="eo">tiu ĉi knabo, ĉi tiu knabo</span>&nbsp;: ce garçon-ci</p>
				<p class="col s11 offset-s1"><a href="<?php echo $vojo;?>fr/son/vortoj/cxi-matene.mp3" class="sm2_button"></a><span class="eo">ĉi-matene</span>&nbsp;: ce matin</p>
				<p class="col s11 offset-s1"><a href="<?php echo $vojo;?>fr/son/vortoj/cxi-foje.mp3" class="sm2_button"></a><span class="eo">ĉi-foje</span>&nbsp;: cette fois-ci</p>
				<p class="col s12"><b>ajn</b> : exprime l’indétermination généralisée</p>
				<p class="col s5 offset-s1"><a href="<?php echo $vojo;?>fr/son/vortoj/iu-ajn.mp3" class="sm2_button"></a><span class="eo">iu ajn</span>&nbsp;: n’importe qui</p>
				<p class="col s6"><a href="<?php echo $vojo;?>fr/son/vortoj/io-ajn.mp3" class="sm2_button"></a><span class="eo">io ajn</span>&nbsp;: n’importe quoi</p>
				<p class="col s5 offset-s1"><a href="<?php echo $vojo;?>fr/son/vortoj/ie-ajn.mp3" class="sm2_button"></a><span class="eo">ie ajn</span>&nbsp;: n’importe où</p>
				<p class="col s6"><a href="<?php echo $vojo;?>fr/son/vortoj/iam-ajn.mp3" class="sm2_button"></a><span class="eo">iam ajn</span>&nbsp;: n’importe quand</p>
				<p class="col s11 offset-s1"><a href="<?php echo $vojo;?>fr/son/vortoj/iru-ien.mp3" class="sm2_button"></a><span class="eo">iru ien!</span>&nbsp;: allez (allez-vous en) quelque part&nbsp;!</p>
				<p class="col s11 offset-s1"><a href="<?php echo $vojo;?>fr/son/vortoj/iru-ien-ajn.mp3" class="sm2_button"></a><span class="eo">iru ien ajn!</span>&nbsp;: allez-vous en n’importe où&nbsp;!</p>
				<p class="col s11 offset-s1"><a href="<?php echo $vojo;?>fr/son/vortoj/iru-kien-vi-volas.mp3" class="sm2_button"></a><span class="eo">iru, kien vi volas!</span>&nbsp;: allez où vous voulez&nbsp;!</p>
				<p class="col s11 offset-s1"><a href="<?php echo $vojo;?>fr/son/vortoj/iru-kien-ajn-vi-volas.mp3" class="sm2_button"></a><span class="eo">iru, kien ajn vi volas!</span>&nbsp;: allez (n’importe où) où vous voulez&nbsp;!</p>
			</div>

		<?php 
		} // fin section
		if ($section=="6") {
		?>
			<div class="row">
				<p class="col s12"><a href="<?php echo $vojo;?>fr/son/frazoj/kiam-kato-promenas.mp3" class="sm2_button"></a><span class="eo">Kiam kato promenas, la musoj festenas.</span></p>
				<p class="col s11 offset-s1">Quand le chat n’est pas là, les souris dansent. (<i>festoient</i>)</p>
				<p class="col s12"><a href="<?php echo $vojo;?>fr/son/frazoj/kion-oni-volas.mp3" class="sm2_button"></a><span class="eo">Kion oni volas, tion oni povas.</span></p>
				<p class="col s11 offset-s1">Quand on veut, on peut. (<i>ce qu’on veut, on le peut</i>)</p>
				<p class="col s12"><a href="<?php echo $vojo;?>fr/son/frazoj/kia-patro-tia-filo.mp3" class="sm2_button"></a><span class="eo">Kia patro, tia filo.</span></p>
				<p class="col s11 offset-s1">Tel père, tel fils.</p>
				<p class="col s12"><a href="<?php echo $vojo;?>fr/son/frazoj/amiko-de-amiko.mp3" class="sm2_button"></a><span class="eo">Amiko de amiko estas ankaŭ amiko.</span></p>
				<p class="col s11 offset-s1">L’ami de mon ami est mon ami. (<i>un ami d’ami est aussi un ami</i>)</p>
				<p class="col s12"><a href="<?php echo $vojo;?>fr/son/frazoj/se-mi-scius.mp3" class="sm2_button"></a><span class="eo">Se mi scius, kie mi falos, mi tien metus tapiŝon.</span> (= <i>tapis</i>)</p>
				<p class="col s11 offset-s1"><i>Devinez vous-même…</i></p>
			</div>

			<fieldset class="vortoj">
				<legend>VOCABULAIRE À RETENIR</legend>
				<div>
					<?php if ($persono) { ?>
					<p class="eo eta">Ces mots seront automatiquement ajoutés à votre vocabulaire à réviser lorsque vous aurez terminé d'étudier cette section. Le nombre de mots à réviser sera indiqué sur le bouton affiché au-dessus du sommaire.</p>
					<?php } ?>
				</div>
				<div class="vortlisto row">
					<p class="col s12 m6"><a href="<?php echo $vojo;?>fr/son/vortoj/muso.mp3" class="sm2_button"></a><span class="eo">muso</span>&nbsp;: souris</p>
					<p class="col s12 m6"><a href="<?php echo $vojo;?>fr/son/vortoj/tapisxo.mp3" class="sm2_button"></a><span class="eo">tapiŝo</span>&nbsp;: tapis</p>
					<p class="col s12 m6"><a href="<?php echo $vojo;?>fr/son/vortoj/fali.mp3" class="sm2_button"></a><span class="eo">fali</span>&nbsp;: tomber</p>
					<p class="col s12 m6"><a href="<?php echo $vojo;?>fr/son/vortoj/festeni.mp3" class="sm2_button"></a><span class="eo">festeni</span>&nbsp;: festoyer</p>
				</div>
			</fieldset>

		<?php 
		} // fin section
		if ($section=="7") {
		?>

			<div class="float-right w30">
				<a href="https://fr.wikipedia.org/wiki/La_Esperantisto">
					<img class="responsive-img" src="<?php echo $vojo;?>fr/cge/bildoj/la-esperantisto.jpg"></a>
			</div>
			<p class="parto">Les premières revues en espéranto datent du XIX<sup>e</sup> siècle avec <a href="https://fr.wikipedia.org/wiki/La_Esperantisto"><em>La Esperantisto</em></a>. De nos jours, 
			on en trouve provenant des quatre coins du monde, sur des sujets divers et variés, comme vous le verrez.
			</p>

			<p class="parto">Les revues plus connues sont celles des associations internationales&nbsp;: 
				<a href="https://uea.org/revuoj/esperanto"><i>Esperanto</i></a>, éditée par l’association mondiale d’espéranto, 
				tout à fait convenable pour de nouveaux apprenants de la langue, 
				et dont les sujets ne s’adressent pas qu’aux jeunes.<br> 
				Dans le même esprit, citons également <a href="http://esperanto-ondo.ru/"><i>La Ondo de Esperanto</i></a>.</p>
				<p>Certains magazines s’adressent tout particulièrement aux débutants en proposant des textes rédigés dans un style facile. C’est le cas de <a href="https://www.tejo.org/fr/revuo-kontakto/"><i>Kontakto</i></a> ou de <a href="http://www.ipernity.com/doc/stano.marcek/album/670161"><i>Juna Amiko</i></a>. Il est possible de télécharger les anciens numéro de <i>Juna amiko</i> sur <a href="http://www.eventoj.hu/juna-amiko/">http://www.eventoj.hu/juna-amiko/</a>.</p>
			<p class="parto">Aleks vous présente ici un petit tour du monde des magazines en espéranto&nbsp;:<br>
					<span class="eta">(vous pouvez activer les sous-titres en français)</span>
				</p>
			<p><iframe width="560" height="315" src="https://www.youtube.com/embed/yVjtft16rNo?rel=0"
frameborder="0" allowfullscreen></iframe></p>
				<p>Vous pouvez également lire directement en ligne la revue <a href="https://esperanto-france.org/le-monde-de-l-esperanto">Le Monde de l’espéranto</a>, revue bilingue éditée par Espéranto-France.</p>
			<div class="row">
				<p class="col s3"><a href="https://uea.org/revuoj/esperanto"><img class="responsive-img" src="<?php echo $vojo;?>fr/cge/bildoj/revuo-Esperanto.jpg"></a></p>
				<p class="col s3"><a href="http://kontakto.tejo.org/"><img class="responsive-img" src="<?php echo $vojo;?>fr/cge/bildoj/revuo-Kontakto.jpg"></a></p>
				<p class="col s3"><a href="http://esperanto-ondo.ru/"><img class="responsive-img" src="<?php echo $vojo;?>fr/cge/bildoj/revuo-ondo-de-esperanto.jpg"></a></p>
				<p class="col s3"><a href="http://www.beletraalmanako.com/"><img class="responsive-img" src="<?php echo $vojo;?>fr/cge/bildoj/revuo-beletra-almanako.jpg"></a></p>
			</div>
			<div class="row">
				<div class="col s9">
					<p>Les médias ne sont pas en manquent, en Espérantie&nbsp;: nombreux sont les livres, 
						albums de musique, applications pour téléphones, sites internet, qui se développent chaque année. 
						Pour s’y retrouver, des revues dédiées, comme <a href="http://www.beletraalmanako.com/"><i>Beletra Almanako</i></a> 
						ou <i>Literatura Foiro</i>, publient des critiques et des interviews.</p>
					<p>Sur le site <a href="http://bitarkivo.org/doku.php">BitArkivo</a>, vous pourrez lire en ligne des magazines en espéranto du monde entier.</p>
					<p class="parto">L’espéranto permet un accès à une culture mondiale avec un filtre moins important que les médias traditionnels. 
						Cela permet ainsi à des revues comme <a href="https://osiek.org/lagazeto/"><i>La Gazeto</i></a> de parler de l’histoire mondiale, 
						à <i>Sennaciulo</i> de débattre des problèmes politiques actuels&nbsp;; <i>Etnismo</i> traite des questions éthniques, 
						et la revue <a href="http://www.monato.be/"><i>Monato</i></a> possède des correspondants dans de très nombreux pays, 
						qui rapportent des évènements marquants d’un point de vue local. 
						Des revues évoquent également les religions&nbsp;: l’espéranto est à l’aise avec le bouddhisme, le catholicisme, 
						l’islam, l’ōmoto, etc.</p>
					<p class="parto">Une part non négligeable des revues sont les organes d’information des associations nationales d’espéranto, qui font le point, 
						parfois avec des articles bilingues, sur les rencontres qui ont lieu entre espérantophones, les lieux intéressants à visiter 
						dans le pays, ou même le continent&nbsp;: <a href="https://www.esperanto-afriko.org/"><i>Esperanto en Afriko</i></a> et <a href="http://www.esperantoazia.net/index.php?mid=bulteno"><i>Esperanto en Azio</i></a> par exemple. </p>
					<p>Certaines, comme la revue française <i>Espéranto-Info</i>, s’adressent directement à des personnes ne parlant pas l’espéranto, 
						pour leur présenter les divers aspects de l’Espérantie et quelques mots croisés et phrases de base.</p>
				</div>
				<div class="col s3">
					
					<a href="http://www.monato.net/"><img class="responsive-img" src="<?php echo $vojo;?>fr/cge/bildoj/revuo-monato.jpg"></a>
					<a href="http://esperantoinfo.info/"><img class="responsive-img" src="<?php echo $vojo;?>fr/cge/bildoj/revuo-esperanto-info.jpg"></a>
				</div>
			</div>
			<p class="parto">Pour finir, n’oublions pas que l’espéranto permet de traiter également de sujets techniques, et pour cela les associations 
				spécialisées (en science, médecine, enseignement, etc.) éditent des revues pour mettre en valeur les dernières avancées. 
				Par exemple&nbsp;: <a href="https://eo.wikipedia.org/wiki/Hungara_Fervojista_Mondo"><i>Hungara Fervojista Mondo</i></a> (cheminots hongrois),
				<a href="http://interrev.com/mir/index.php/mir"><i>Medicina Internacia Revuo</i></a> ou encore 
				<a href="https://scienca-revuo.info/"><i>Scienca Revuo</i></a> pour n’en citer que quelques-unes. 
			</p>	
			<p class="parto">Page suivante, nous vous invitons à lire un extrait d’article, que vous traduirez à titre exercice.</p>
			
			<div class="card-panel blue lighten-5">
				<div class="float-right w30">
					<a href="https://esperanto-france.org/le-monde-de-l-esperanto">
						<img class="responsive-img" src="<?php echo $vojo;?>fr/cge/bildoj/revuo-LME.jpg"></a>
				</div>
				<p>Et pour découvrir quelques revues en espéranto, nous vous recommandons&nbsp;:</p>
				<p><a href="https://esperanto-france.org/le-monde-de-l-esperanto"><i>Le Monde de l’Espéranto</i></a>, la revue d’Espéranto-France, accessible en ligne&nbsp;; et d’autres revues dans notre <a href="https://ikurso.esperanto-france.org/butiko.php">boutique en ligne</a>.
				</p>
				<p>Pour en savoir plus&nbsp;:</p>
				<ul>
					<li><a href="https://fr.wikipedia.org/wiki/Esp%C3%A9rantie#M%C3%A9dias">https://fr.wikipedia.org/wiki/Espérantie#Médias</a></li>
					<li><a href="https://fr.wikipedia.org/wiki/Liste_des_p%C3%A9riodiques_en_esp%C3%A9ranto">https://fr.wikipedia.org/wiki/Liste_des_périodiques_en_espéranto</a></li>
					<li><a href="https://eo.wikipedia.org/wiki/Esperanto-gazeto">https://eo.wikipedia.org/wiki/Esperanto-gazeto</a></li>
				</ul>
			</div>
		<?php 
		} // fin section
		if ($section=="8") {
		?>
	
			<?php 
				getEkzercon(37,$persono_id);
			?>
			
			<p class="noto">NOTE : <span class="eo">Ŝerbruko</span>&nbsp;: Sherbrooke (ville du Québec)</p>
			

			<fieldset class="vortoj">
				<legend>VOCABULAIRE À RETENIR</legend>
				<div>
					<?php if ($persono) { ?>
					<p class="eo eta">Ces mots seront automatiquement ajoutés à votre vocabulaire à réviser lorsque vous aurez terminé d'étudier cette section. Le nombre de mots à réviser sera indiqué sur le bouton affiché au-dessus du sommaire.</p>
					<?php } ?>
				</div>
				<div class="vortlisto row">
					<p class="col s12 m6"><span class="eo">gvidi</span>&nbsp;: guider, diriger</p>
					<p class="col s12 m6"><span class="eo">Brazilo</span>&nbsp;: Brésil</p>
					<p class="col s12 m6"><span class="eo">Braziljo</span>&nbsp;: Brasilia</p>
					<p class="col s12 m6"><span class="eo">senti</span>&nbsp;: sentir, ressentir</p>
					<p class="col s12 m6"><span class="eo">kresko</span>&nbsp;: croissance, accroissement</p>
					<p class="col s12 m6"><span class="eo">samideano</span>&nbsp;: partisan (ici : espérantiste)</p>
					<p class="col s12 m6"><span class="eo">gastigi</span>&nbsp;: recevoir (des invités), offrir l’hospitalité</p>
					<p class="col s12 m6"><span class="eo">kutima</span>&nbsp;: habituel</p>
					<p class="col s12 m6"><span class="eo">Usono</span>&nbsp;: États-Unis</p>
					<p class="col s12 m6"><span class="eo">plie</span>&nbsp;: de plus</p>
					<p class="col s12 m6"><span class="eo">aranĝo</span>&nbsp;: manifestation</p>
					<p class="col s12 m6"><span class="eo">asocio</span>&nbsp;: association</p>
					<p class="col s12 m6"><span class="eo">najbaro</span>&nbsp;: voisin</p>
					<p class="col s12 m6"><span class="eo">rubriko</span>&nbsp;: rubrique</p>
					<p class="col s12 m6"><span class="eo">numero</span>&nbsp;: numéro (d’une revue)</p>
					<p class="col s12 m6"><span class="eo">bulteno</span>&nbsp;: bulletin</p>
					<p class="col s12 m6"><span class="eo">organizi</span>&nbsp;: organiser</p>
					<p class="col s12 m6"><span class="eo">vidpunkto</span>&nbsp;: point de vue</p>
					<p class="col s12 m6"><span class="eo">Pasko</span>&nbsp;: Pâques</p>
					<p class="col s12 m6"><span class="eo">tradicio</span>&nbsp;: tradition</p>
					<p class="col s12 m6"><span class="eo">supozi</span>&nbsp;: supposer</p>
					<p class="col s12 m6"><span class="eo">Flandro</span>&nbsp;: Flandres </p>
					<p class="col s12 m6"><span class="eo">Nederlando</span>&nbsp;: Pays-Bas</p>
				</div>
			</fieldset>

		<?php 
		} // fin section
		if ($section=="9") {
		?>
			<p>
			Vous venez de franchir la dernière étape de votre apprentissage. La dixième et dernière leçon consiste en un examen qui va vous permettre d'évaluer l'ensemble de vos connaissances. Les questions sont faciles, il n'y a pas de piège. Vous connaissez déjà toutes les réponses, cet examen a pour seul objectif de vous en convaincre.
			</p>
			
			<p>
			Que de chemin parcouru depuis le début de ce cours&nbsp;! Nous espérons que vous aurez pris autant plaisir à le suivre que nous en avons pris à l'élaborer. Mais ce cours n'est pas statique, il évolue en fonction de vos retours. N'hésitez pas à nous contacter si vous avez des remarques, des suggestions ou des envies que nous pourrons réaliser pour les générations futures d'élèves.
			</p>
			
			<p>
			Faites connaître ce cours autour de vous, c'est la meilleure façon qu'il continue à vivre.
			</p>
		
		<?php 
			recapitulatif_lecon_avant_envoi('CG',$leciono,$persono_id);
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
								
		<?php
			// lien vers la révision du vocabulaire
			getLigiloAlMemorilo($persono_id);
		?>

		<ul class="collapsible" data-collapsible="expandable">

			<?php 
			// On affiche le sommaire de la lecon
			getEnhavtabelo('CG',$leciono); 
			?>

		</ul>	
		
		<?php
		pubAndroid();
		pubFacebook();
		?>
				
	</aside>
</div>
<?php include "dlekpiedo.inc.php"; ?>
