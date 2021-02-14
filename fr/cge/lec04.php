<?php
$titolo="4 (kvar)";
$leciono = 4;
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
		getTitoloLecionero('CG',$leciono,$section);
		displayWarningSiLecioneroManquante($persono_id,'CG',4,$section);
		
			if ($section=="1") {
			?>
			<p class="parto">Vous avez déjà vu plusieurs façons de poser des questions&nbsp;:</p>
			<div class="row vortlisto">
				<p class="col s12"><span class="eo"><b>Kiu</b> loĝas en Brazilo?</span>&nbsp;: <b>Qui</b> habite au Brésil&nbsp;?</p>
				<p class="col s12"><span class="eo"><b>Kie</b> estas la kato?</span>&nbsp;: <b>Où</b> est le chat&nbsp;?</p>
				<p class="col s12"><span class="eo"><b>Kiel</b> vi fartas?</span>&nbsp;: <b>Comment</b> allez-vous&nbsp;? / <b>Comment</b> vas-tu&nbsp;?</p>
			</div>
				
			<p class="parto">Jetons maintenant un coup d’œil sur les <b>questions et réponses</b> correspondant à une
			affirmation donnée.</p>
			<div class="row vortlisto">
				<p class="col s2">Énoncé :</p>
				<p class="col s10"><span class="eo">La pano estas bruna.</span> = Le pain est brun.</p>
				<p class="col s2">Question :</p>
				<p class="col s10"><span class="eo"><b>Ĉu</b> la pano estas bruna?</span> = Est-ce que le pain est brun ? (le pain est-il brun ?)</p>
				<p class="col s2">Réponse :</p>
				<p class="col s10"><span class="eo"><b>Jes</b>, la pano estas bruna.</span> = Oui, le pain est brun.</p>
				<p class="col s10 offset-s2">_________   ou   ___________ </p>
				<p class="col s10 offset-s2"><span class="eo"><b>Ne</b>, la pano ne estas bruna, sed (ĝi estas) blanka.</span> = Non, le pain n’est pas brun mais (il est) blanc.</p>
			</div>
			<div class="row vortlisto">
				<p class="col s2">Énoncé :</p>
				<p class="col s10"><span class="eo">Iu venis.</span> = Quelqu’un est venu.</p>
				<p class="col s2">Question :</p>
				<p class="col s10"><span class="eo"><b>Ĉu</b> iu venis?</span> = <b>Est-ce que</b> quelqu’un est venu&nbsp;?</p>
				<p class="col s2">Réponse :</p>
				<p class="col s10"><span class="eo"><b>Jes</b>, mia frato venis.</span> = <b>Oui</b>, mon frère est venu.</p>
				<p class="col s10 offset-s2">_________   ou   ___________ </p>
				<p class="col s10 offset-s2"><span class="eo"><b>Ne</b>, neniu venis.</span> = <b>Non</b>, personne n’est venu.</p>
			</div>
				
			<p>
			Vous aurez remarqué que <span class="eo">ne</span> sert aussi bien en début de phrase que devant
			le verbe. <span class="eo">Jes</span> signifie <i>oui</i> et <span class="eo">sed</span> signifie <i>mais</i>.
			</p>
			<p class="parto">Toute question est construite à partir d’une affirmation. On forme la
			question en plaçant devant l’énoncé le mot interrogatif <span class="eo">ĉu</span> (est-ce
			que ?). Remarquez qu’en espéranto (tout comme en français quand on emploie
			<i>est-ce que ?</i>), on ne modifie pas l’ordre des mots.  On place donc
			simplement le mot <span class="eo">ĉu</span> au début de la phrase.
			</p>
			<div class="row vortlisto">
				<p class="col s4">Question :</p>
				<p class="col s8">Est-ce que les garçons vendront le gâteau ?</p>
				<p class="col s4">Affirmation sous-jacente :</p>
				<p class="col s8">Les garçons vendront le gâteau.<br><span class="eo">La knaboj vendos la kukon.</span></p>
				<p class="col s4">Question en espéranto :</p>
				<p class="col s8"><span class="eo">Ĉu la knaboj vendos la kukon?</span></p>
			</div>
			<p>
			Fonctionnent de cette façon toutes les questions auxquelles on doit
			répondre par <i>oui</i> ou par <i>non</i> (questions «fermées»).
			</p>

		<?php 
		} // fin section
		if ($section=="2") {
		?>
		
			<?php 
				getEkzercon(14,$persono_id);
			?>

		<?php 
		} // fin section
		if ($section=="3") {
		?>
			<p class="parto">Dans la première leçon, vous avez vu que l’alphabet de l’espéranto comporte 28 lettres, et que la prononciation de l’espéranto est phonétique. </p>
			
			<p class="parto">Vous allez maintenant faire un exercice de prononciation. Lisez les mots suivants à voix haute en faisant attention à l’accent tonique (indiqué par un soulignement). Votre prononciation s’améliorera petit à petit.</p>
			<p>Les syllabes accentuées sont soulignées et, comme d’habitude, le petit bouton à gauche vous indique la présence d’échantillons sonores associés. Cet exercice est avant tout un exercice de prononciation, aussi il n’est pas nécessaire de chercher à retenir tous ces mots.
			</p>
			<div class="row">
				<p class="col s6"><a href="<?php echo $vojo;?>fr/son/s1-01.mp3" class="sm2_button"></a><b>a</b> (a comme dans <i>patte</i>)</p>
				<p class="col s2 eo"><u>blan</u>ka</p>
				<p class="col s2 eo"><u>sa</u>na</p>
				<p class="col s2 eo"><u>gran</u>da</p>
			</div>
			<div class="row">
				<p class="col s6"><a href="<?php echo $vojo;?>fr/son/s1-02.mp3" class="sm2_button"></a><b>e</b> (è comme dans <i>sec</i>)</p>
				<p class="col s2 eo"><u>be</u>la</p>
				<p class="col s2 eo"><u>ple</u>na</p>
				<p class="col s2 eo"><u>ver</u>da</p>
			</div>
			<div class="row">
				<p class="col s6"><a href="<?php echo $vojo;?>fr/son/s1-03.mp3" class="sm2_button"></a><b>i</b> (i comme dans <i>fini</i>)</p>
				<p class="col s2 eo"><u>vi</u>vi</p>
				<p class="col s2 eo"><u>a</u>mi</p>
				<p class="col s2 eo"><u>trin</u>ki</p>
			</div>
			<div class="row">
				<p class="col s6"><a href="<?php echo $vojo;?>fr/son/s1-04.mp3" class="sm2_button"></a><b>o</b> (o comme dans <i>botte</i>)</p>
				<p class="col s2 eo"><u>o</u>vo</p>
				<p class="col s2 eo"><u>do</u>mo</p>
				<p class="col s2 eo"><u>ki</u>o</p>
			</div>
			<div class="row">
				<p class="col s6"><a href="<?php echo $vojo;?>fr/son/s1-05.mp3" class="sm2_button"></a><b>u</b> (ou comme dans <i>sou</i>)</p>
				<p class="col s2 eo"><u>u</u>nu</p>
				<p class="col s2 eo"><u>plu</u>mo</p>
				<p class="col s2 eo"><u>su</u>no</p>
			</div>
	
			<p class="rimarko"><strong>REMARQUE</strong> : 
			Les voyelles <i>o</i> et <i>e</i> peuvent être prononcées plus ou 
			moins ouvertes du moment qu’il n’y a pas de confusion possible avec les voyelles proches.</p>

			<p class="parto">Les consonnes se prononcent comme en français, sauf :</p>
	
			<div class="row">
				<p class="col s1"><a href="<?php echo $vojo;?>fr/son/s2-01.mp3" class="sm2_button"></a></p>
				<p class="col s5"><b>c</b> (ts comme dans <i>tsigane</i>)</p>
				<p class="col s2 eo">ci<u>ga</u>no</p><p class="col s2 eo"><u>dan</u>ci</p><p class="col s2 eo">bi<u>ci</u>klo</p>
			</div>
			<div class="row">
				<p class="col s1"><a href="<?php echo $vojo;?>fr/son/s2-02.mp3" class="sm2_button"></a></p>
				<p class="col s5"><b>ĉ</b> (tch comme dans <i>tchèque</i>)</p>
				<p class="col s2 eo"><u>ĉe</u>ĥo</p><p class="col s2 eo"><u>ĉam</u>bro</p><p class="col s2 eo">ĉoko<u>la</u>do</p>
			</div>
			<div class="row">
				<p class="col s1"><a href="<?php echo $vojo;?>fr/son/s2-03.mp3" class="sm2_button"></a></p>
				<p class="col s5"><b>g</b> (g comme dans <i>gare</i>)</p>
				<p class="col s2 eo"><u>la</u>go</p><p class="col s2 eo">gus<u>tu</u>mi</p><p class="col s2 eo">geogra<u>fi</u>o</p>
			</div>
			<div class="row">
				<p class="col s1"><a href="<?php echo $vojo;?>fr/son/s2-04.mp3" class="sm2_button"></a></p>
				<p class="col s5"><b>ĝ</b> (dj comme dans <i>Abidjan</i>)</p>
				<p class="col s2 eo"><u>lo</u>ĝi</p><p class="col s2 eo"><u>se</u>ĝo</p><p class="col s2 eo"><u>man</u>ĝi</p>
			</div>
			<div class="row">
				<p class="col s1"><a href="<?php echo $vojo;?>fr/son/s2-05.mp3" class="sm2_button"></a></p>
				<p class="col s5"><b>h</b> (h expiré [note 1])</p>
				<p class="col s2 eo"><u>ha</u>vi</p><p class="col s2 eo"><u>ho</u>ro</p><p class="col s2 eo">lip<u>ha</u>ro</p>
			</div>
			<div class="row">
				<p class="col s1"><a href="<?php echo $vojo;?>fr/son/s2-06.mp3" class="sm2_button"></a></p>
				<p class="col s5"><b>ĥ</b> (hr [note 2])</p>
				<p class="col s2 eo"><u>e</u>ĥo</p><p class="col s2 eo"><u>ĥo</u>ro</p><p class="col s2 eo">ĥe<u>mi</u>o</p>
			</div>
			<div class="row">
				<p class="col s1"><a href="<?php echo $vojo;?>fr/son/s2-07.mp3" class="sm2_button"></a></p>
				<p class="col s5"><b>j</b> (y comme dans <i>yogourt</i>)</p>
				<p class="col s2 eo"><u>jes</u></p><p class="col s2 eo"><u>ja</u>ro</p><p class="col s2 eo"><u>ju</u>na</p>
			</div>
			<div class="row">
				<p class="col s1"><a href="<?php echo $vojo;?>fr/son/s2-08.mp3" class="sm2_button"></a></p>
				<p class="col s5"><b>ĵ</b> (j comme dans <i>journal</i>)</p>
				<p class="col s2 eo">ĵur<u>na</u>lo</p><p class="col s2 eo">ĵa<u>lu</u>za</p><p class="col s2 eo">tea<u>tra</u>ĵo</p>
			</div>
			<div class="row">
				<p class="col s1"><a href="<?php echo $vojo;?>fr/son/s2-09.mp3" class="sm2_button"></a></p>
				<p class="col s5"><b>r</b> (roulé [note 3])</p>
				<p class="col s2 eo">te<u>a</u>tro</p><p class="col s2 eo"><u>ku</u>ri</p><p class="col s2 eo">ri<u>gar</u>di</p>
			</div>
			<div class="row">
				<p class="col s1"><a href="<?php echo $vojo;?>fr/son/s2-10.mp3" class="sm2_button"></a></p>
				<p class="col s5"><b>ŝ</b> (ch comme dans <i>chemise</i>)</p>
				<p class="col s2 eo"><u>ŝa</u>ti</p><p class="col s2 eo"><u>po</u>ŝo</p><p class="col s2 eo"><u>fu</u>ŝa</p>
			</div>
			
			<p class="rimarko"><strong>REMARQUE</strong> : 
			Concernant <span class="eo">ŭ</span>, voir la section suivante sur les diphtongues.</p>
			
			<p class="rimarko"><strong>NOTES</strong> : </p>
			<ol>
			<li><span class="eo">h</span> est <b>toujours</b> expiré comme dans <i>hand</i>,
			  <i>hair</i> anglais ou <i>haben</i>, <i>Haus</i> de l’allemand.</li>
			<li> <span class="eo">ĥ</span> est une sorte de <i>h</i> plus fortement expiré ou de
			  <i>r</i> français fortement grasseyé. Il est proche du <i>ach-laut</i>
			  allemand et des sons qui lui correspondent dans beaucoup d’autres langues
			  (<i>jota</i> espagnole, <i>x</i> russe, <i>h</i> finnois, <i>khi</i>
			  grec, <i>kha</i> arabe, <i>khaf</i> hébreu…). Ce son n’existe pas en
			  français mais il s’entend souvent dans des exclamations ou dans des
			  imitations de l’allemand <i>Ach !</i>, <i>Achtung !</i>, etc.</li>
			<li> <span class="eo">r</span> est de préférence roulé comme en espagnol, italien, grec, etc.
			  Si vous ne pouvez pas produire ce son, un <i>r</i> français peut convenir à
			  condition de le distinguer clairement du <i>h</i> et du <i>ĥ</i>.</li>
			</ol>
		
		<?php 
		} // fin section
		if ($section=="4") {
		?>
			<p class="parto">
			Les combinaisons suivantes de voyelles (<b>a</b>, <b>e</b>, <b>o</b>,
			<b>u</b>) et de semi-voyelle <b>j</b> ou <b>ŭ</b> forment un seul son
			complexe qu’on appelle traditionnellement diphtongue. Cependant, si la
			semi-voyelle est suivie par une voyelle, elle appartient à la syllabe
			suivante où elle reprend son rôle de consonne.
			</p>
				
			<div class="row">
				<p class="col s1"><a href="<?php echo $vojo;?>fr/son/s3-01.mp3" class="sm2_button"></a></p>
				<p class="col s5"><b>aj</b> (comme dans <i>ail</i>, <i>aïe</i>)</p>
				<p class="col s2 eo">kaj</p>
				<p class="col s2 eo">se<u>maj</u>no</p>
				<p class="col s2 eo"><u>ma</u>jo</p>
			</div>
			<div class="row">
				<p class="col s1"><a href="<?php echo $vojo;?>fr/son/s3-02.mp3" class="sm2_button"></a></p>
				<p class="col s5"><b>oj</b> (comme dans <i>Tolstoï</i>)</p>
				<p class="col s2 eo"><u>kna</u>boj</p>
				<p class="col s2 eo"><u>koj</u>no</p>
				<p class="col s2 eo">vo<u>ja</u>ĝi</p>
			</div>
			<div class="row">
				<p class="col s1"><a href="<?php echo $vojo;?>fr/son/s3-03.mp3" class="sm2_button"></a></p>
				<p class="col s5"><b>ej</b> (comme dans <i>soleil</i>)</p>
				<p class="col s2 eo">plej</p>
				<p class="col s2 eo"><u>mej</u>lo</p>
				<p class="col s2 eo">ler<u>ne</u>jo</p>
			</div>
			<div class="row">
				<p class="col s1"><a href="<?php echo $vojo;?>fr/son/s3-04.mp3" class="sm2_button"></a></p>
				<p class="col s5"><b>uj</b> (comme dans <i>grenouille</i>)</p>
				<p class="col s2 eo">tuj</p>
				<p class="col s2 eo"><u>ki</u>uj</p>
				<p class="col s2 eo">mo<u>nu</u>jo</p>
			</div>
			<div class="row">
				<p class="col s1"><a href="<?php echo $vojo;?>fr/son/s3-05.mp3" class="sm2_button"></a></p>
				<p class="col s5"><b>aŭ</b> (comme l’anglais <i>now</i>)</p>
				<p class="col s2 eo">naŭ</p>
				<p class="col s2 eo"><u>an</u>taŭ</p>
				<p class="col s2 eo">an<u>ta</u>ŭe</p>
			</div>
			<div class="row">
				<p class="col s1"><a href="<?php echo $vojo;?>fr/son/s3-06.mp3" class="sm2_button"></a></p>
				<p class="col s5"><b>eŭ</b> (è + w anglais)</p>
				<p class="col s2 eo">Eŭ<u>ro</u>po</p>
				<p class="col s2 eo">neŭ<u>tra</u>la</p>
				<p class="col s2 eo">Eŭ<u>kli</u>do</p>
			</div>

			<p class="rimarko"><strong>REMARQUE</strong> : 
			Les combinaisons <span class="eo">ai</span>, <span class="eo">au</span>, <span class="eo">oi</span>, <span class="eo">ou</span>, <span class="eo">ii</span>,
			<span class="eo">iu</span> etc. – qui ne sont pas rares en espéranto – <b>ne sont pas</b>
			des diphtongues, mais bel et bien deux voyelles juxtaposées, formant donc
			deux syllabes&nbsp;:</p>
			<p>
			<a href="<?php echo $vojo;?>fr/son/s3-07.mp3" class="sm2_button"></a> <span class="eo">balai</span> (ba-<u>la</u>-i), <span class="eo">balau</span> (ba-<u>la</u>-u), <span class="eo">neniigi</span> (ne-ni-<u>i</u>-gi), <span class="eo">neniu</span> (ne-<u>ni</u>-u), etc.
			</p>

		<?php 
		} // fin section
		if ($section=="5") {
		?>
			<p class="parto">Voici une liste de mots qui représentent les différents sons de l’espéranto. 
			Lisez-les à voix haute en faisant attention à l’accent tonique (indiqué par un soulignement). Votre prononciation s’améliorera petit à petit. 
			</p>
			<?php if ($persono) { ?>
			<p class="eo eta"><b>NOTE </b>: Les mots précédés de <span class="marque">•</span> seront automatiquement ajoutés à votre vocabulaire à réviser lorsque vous aurez terminé d'étudier cette section.</p>
			<?php } ?>
			
			<fieldset class="vortoj">
				<div class="vortlisto row">
					<div class="col s12 m6">
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/acxeti.mp3" class="sm2_button"></a><span class="marque">•</span> <span class="eo">a<u>ĉe</u>ti</span>&nbsp;: acheter</p>
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/anglujo.mp3" class="sm2_button"></a><span class="marque">•</span> <span class="eo">An<u>glu</u>jo / An<u>gli</u>o</span>&nbsp;: Angleterre</p>
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/anonco.mp3" class="sm2_button"></a>&nbsp;&nbsp;<span class="eo">a<u>non</u>co</span>&nbsp;: annonce</p>
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/antaux.mp3" class="sm2_button"></a>&nbsp;&nbsp;<span class="eo"><u>an</u>taŭ</span>&nbsp;: avant</p>
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/biciklo.mp3" class="sm2_button"></a><span class="marque">•</span> <span class="eo">bi<u>ci</u>klo</span>&nbsp;: bicyclette</p>
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/bildkarto.mp3" class="sm2_button"></a><span class="marque">•</span> <span class="eo">bild<u>kar</u>to</span>&nbsp;: carte postale</p>
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/bildo.mp3" class="sm2_button"></a><span class="marque">•</span> <span class="eo"><u>bil</u>do</span>&nbsp;: image</p>
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/cxambro.mp3" class="sm2_button"></a><span class="marque">•</span> <span class="eo"><u>ĉam</u>bro</span>&nbsp;: pièce</p>
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/cxinio.mp3" class="sm2_button"></a><span class="marque">•</span> <span class="eo">Ĉi<u>ni</u>o</span>&nbsp;: Chine</p>
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/cxokolado.mp3" class="sm2_button"></a><span class="marque">•</span> <span class="eo">ĉoko<u>la</u>do</span>&nbsp;: chocolat</p>
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/danco.mp3" class="sm2_button"></a><span class="marque">•</span> <span class="eo"><u>dan</u>co</span>&nbsp;: danse</p>
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/deziri.mp3" class="sm2_button"></a><span class="marque">•</span> <span class="eo">de<u>zi</u>ri</span>&nbsp;: désirer</p>
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/domo.mp3" class="sm2_button"></a><span class="marque">•</span> <span class="eo"><u>do</u>mo</span>&nbsp;: maison</p>
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/edzo.mp3" class="sm2_button"></a><span class="marque">•</span> <span class="eo"><u>ed</u>zo</span>&nbsp;: époux</p>
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/edzino.mp3" class="sm2_button"></a><span class="marque">•</span> <span class="eo">ed<u>zi</u>no</span>&nbsp;: épouse</p>
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/el.mp3" class="sm2_button"></a><span class="marque">•</span> <span class="eo">el (3)</span>&nbsp;: hors de</p>
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/esperantisto.mp3" class="sm2_button"></a><span class="marque">•</span> <span class="eo">esperan<u>tis</u>to</span>&nbsp;: espérantiste</p>
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/ehxo.mp3" class="sm2_button"></a>&nbsp;&nbsp;<span class="eo"><u>e</u>ĥo</span>&nbsp;: écho</p>
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/euxropo.mp3" class="sm2_button"></a><span class="marque">•</span> <span class="eo">Eŭ<u>ro</u>po</span>&nbsp;: Europe</p>
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/euxklido.mp3" class="sm2_button"></a>&nbsp;&nbsp;<span class="eo">Eŭ<u>kli</u>do</span>&nbsp;: Euclide</p>
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/geografio.mp3" class="sm2_button"></a>&nbsp;&nbsp;<span class="eo">geogra<u>fi</u>o</span>&nbsp;: géographie</p>
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/gustumi.mp3" class="sm2_button"></a><span class="marque">•</span> <span class="eo">gus<u>tu</u>mi</span>&nbsp;: goûter</p>
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/gxardeno.mp3" class="sm2_button"></a><span class="marque">•</span> <span class="eo">ĝar<u>de</u>no</span>&nbsp;: jardin</p>
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/gxojo.mp3" class="sm2_button"></a><span class="marque">•</span> <span class="eo"><u>ĝo</u>jo</span>&nbsp;: joie</p>
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/hxoro.mp3" class="sm2_button"></a>&nbsp;&nbsp;<span class="eo"><u>ĥo</u>ro</span>&nbsp;: chœur</p>
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/infano.mp3" class="sm2_button"></a><span class="marque">•</span> <span class="eo">in<u>fa</u>no</span>&nbsp;: enfant</p>

<p><a href="<?php echo $vojo;?>fr/son/vortoj/iu.mp3" class="sm2_button"></a><span class="marque">•</span> <span class="eo">iu</span>&nbsp;: quelqu’un</p>
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/jahxto.mp3" class="sm2_button"></a>&nbsp;&nbsp;<span class="eo"><u>jaĥ</u>to</span>&nbsp;: yacht</p>
					</div>
					<div class="col s12 m6">
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/jam.mp3" class="sm2_button"></a><span class="marque">•</span> <span class="eo">jam</span>&nbsp;: déjà</p>
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/jxaluza.mp3" class="sm2_button"></a><span class="marque">•</span> <span class="eo">ĵa<u>lu</u>za</span>&nbsp;: jaloux</p>
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/jxauxdo.mp3" class="sm2_button"></a><span class="marque">•</span> <span class="eo"><u>ĵaŭ</u>do</span>&nbsp;: jeudi</p>
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/jxurnalo.mp3" class="sm2_button"></a><span class="marque">•</span> <span class="eo">ĵur<u>na</u>lo</span>&nbsp;: journal</p>
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/kaj.mp3" class="sm2_button"></a><span class="marque">•</span> <span class="eo">kaj (4)</span>&nbsp;: et</p>
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/kio.mp3" class="sm2_button"></a><span class="marque">•</span> <span class="eo"><u>ki</u>o</span>&nbsp;: quoi</p>
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/kolekti.mp3" class="sm2_button"></a><span class="marque">•</span> <span class="eo">ko<u>lek</u>ti</span>&nbsp;: collectionner, rassembler</p>
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/lando.mp3" class="sm2_button"></a><span class="marque">•</span> <span class="eo"><u>lan</u>do</span>&nbsp;: pays</p>
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/leciono.mp3" class="sm2_button"></a><span class="marque">•</span> <span class="eo">leci<u>o</u>no</span>&nbsp;: leçon</p>
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/lernejo.mp3" class="sm2_button"></a><span class="marque">•</span> <span class="eo">ler<u>ne</u>jo</span>&nbsp;: école</p>
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/libro.mp3" class="sm2_button"></a><span class="marque">•</span> <span class="eo"><u>li</u>bro</span>&nbsp;: livre</p>
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/logxi.mp3" class="sm2_button"></a><span class="marque">•</span> <span class="eo"><u>lo</u>ĝi</span>&nbsp;: habiter</p>
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/majo.mp3" class="sm2_button"></a>&nbsp;&nbsp;<span class="eo"><u>ma</u>jo</span>&nbsp;: mai</p>
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/mangxi.mp3" class="sm2_button"></a><span class="marque">•</span> <span class="eo"><u>man</u>ĝi</span>&nbsp;: manger</p>
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/mejlo.mp3" class="sm2_button"></a>&nbsp;&nbsp;<span class="eo"><u>mej</u>lo</span>&nbsp;: mille (1,8 km)</p>
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/muro.mp3" class="sm2_button"></a>&nbsp;&nbsp;<span class="eo"><u>mu</u>ro</span>&nbsp;: mur</p>
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/monujo.mp3" class="sm2_button"></a>&nbsp;&nbsp;<span class="eo">mo<u>nu</u>jo</span>&nbsp;: porte-monnaie</p>
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/neuxtrala.mp3" class="sm2_button"></a><span class="marque">•</span> <span class="eo">neŭ<u>tra</u>la</span>&nbsp;: neutre</p>
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/ovo.mp3" class="sm2_button"></a><span class="marque">•</span> <span class="eo"><u>o</u>vo</span>&nbsp;: œuf</p>
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/plej.mp3" class="sm2_button"></a><span class="marque">•</span> <span class="eo">plej</span>&nbsp;: plus (superlatif)</p>
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/posxtmarko.mp3" class="sm2_button"></a><span class="marque">•</span> <span class="eo">poŝt<u>mar</u>ko</span>&nbsp;: timbre-poste</p>
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/sageto.mp3" class="sm2_button"></a>&nbsp;&nbsp;<span class="eo">sa<u>ge</u>to</span>&nbsp;: fléchette</p>
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/sandvicxo.mp3" class="sm2_button"></a><span class="marque">•</span> <span class="eo">sand<u>vi</u>ĉo</span>&nbsp;: sandwich</p>
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/sporto.mp3" class="sm2_button"></a><span class="marque">•</span> <span class="eo"><u>spor</u>to</span>&nbsp;: sport</p>
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/sxuo.mp3" class="sm2_button"></a><span class="marque">•</span> <span class="eo"><u>ŝu</u>o</span>&nbsp;: chaussure</p>
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/teatrajxo.mp3" class="sm2_button"></a>&nbsp;&nbsp;<span class="eo">tea<u>tra</u>ĵo</span>&nbsp;: pièce de théâtre</p>
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/veni.mp3" class="sm2_button"></a><span class="marque">•</span> <span class="eo"><u>ve</u>ni</span>&nbsp;: venir</p>
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/vojagxi.mp3" class="sm2_button"></a><span class="marque">•</span> <span class="eo">vo<u>ja</u>ĝi</span>&nbsp;: voyager</p>
					</div>
				</div>
			</fieldset>		

		<?php 
		} // fin section
		if ($section=="6") {
		?>
		
		<p class="parto">Dans la leçon 2, vous avez vu quelques compléments introduits par des prépositions&nbsp;: <span class="eo">antaŭ</span> (avant, devant), <span class="eo">sub</span> (sous, en-dessous de), <span class="eo">sur</span> (sur, au-dessus de), <span class="eo">super</span> (au-dessus de, par-dessus).</p>
		<p>Voici quelques autres prépositions&nbsp;:</p>
		
		<table class="retrait striped bordered">
			<tr><td class="eo">apud</td><td> - près de, à côté (indique la proximité)</td></tr>
			<tr><td class="eo">ĉe</td><td>- chez, auprès de, tout près de (indique la proximité immédiate)</td></tr>
			<tr><td class="eo">al</td><td>- à, vers (indique le but d’un mouvement ou le bénéficiaire d’une action)</td></tr>
			<tr><td class="eo">de</td><td>indique la possession ou la provenance.</td></tr>
			<tr><td class="eo">el</td><td>indique le mouvement hors d’un lieu, l’origine ou la matière.</td></tr>
		</table>

		<p>Exemples :</p>
		<div class="vortlisto row">
			<p class="col s6"><a href="<?php echo $vojo;?>fr/son/frazoj/prep-01.mp3" class="sm2_button"></a><span class="eo">La butiko estas <b>apud</b> la lernejo.</span></p>
			<p class="col s6">La boutique est à côté de l’école.</p>
			<p class="col s6"><a href="<?php echo $vojo;?>fr/son/frazoj/prep-02.mp3" class="sm2_button"></a><span class="eo">La tablo estas <b>ĉe</b> la muro.</span></p>
			<p class="col s6">La table est tout près du mur, contre le mur.</p>
			<p class="col s6"><a href="<?php echo $vojo;?>fr/son/frazoj/prep-03.mp3" class="sm2_button"></a><span class="eo">Estas biciklo <b>ĉe</b> la domo.</span></p>
			<p class="col s6">Il y a un vélo contre la maison.</p>
			<p class="col s6"><a href="<?php echo $vojo;?>fr/son/frazoj/prep-04.mp3" class="sm2_button"></a><span class="eo">Mia frato iras <b>al</b> Anglio.</span></p>
			<p class="col s6">Mon frère va en Angleterre.</p>
			<p class="col s6"><a href="<?php echo $vojo;?>fr/son/frazoj/prep-05.mp3" class="sm2_button"></a><span class="eo">Ŝi respondis <b>al</b> mi.</span></p>
			<p class="col s6">Elle m’a répondu.</p>
			<p class="col s6"><a href="<?php echo $vojo;?>fr/son/frazoj/prep-06.mp3" class="sm2_button"></a><span class="eo">Mia amiko venas <b>de</b> Pollando.</span></p>
			<p class="col s6">Mon ami vient de Pologne.</p>
			<p class="col s6"><a href="<?php echo $vojo;?>fr/son/frazoj/prep-07.mp3" class="sm2_button"></a><span class="eo">La filo <b>de</b> mia frato manĝas ovon <b>el</b> ĉokolado</span>.</p>
			<p class="col s6">Le fils de mon frère mange un œuf en chocolat.</p>
			<p class="col s6"><a href="<?php echo $vojo;?>fr/son/frazoj/prep-08.mp3" class="sm2_button"></a><span class="eo">Li kuras <b>el</b> la lernejo.</span></p>
			<p class="col s6">Il court hors de l’école, il sort en courant de l’école.</p>
		</div>
		
		
		<fieldset class="vortoj">
			<legend>Retenez bien ces quatre petits mots très fréquents&nbsp;:</legend>
			<ul class="klarigo">
				<li><strong>al</strong> indique le but d’un mouvement (<span class="eo">ŝi kuras al la lernejo</span>) ou le bénéficiaire de l’action (<span class="eo">li respondis al mi</span>).</li>
				<li><strong>de</strong> indique la possession (<span class="eo">la filo de mia frato</span>) ou la provenance (<span class="eo">li venas de la lernejo</span>).</li>
				<li><strong>el</strong> indique le mouvement hors d’un lieu (<span class="eo">li kuras el la lernejo</span>&nbsp;: il court hors de l’école, il sort en courant de l’école), l’origine (<span class="eo">teatraĵo el via lando</span>) ou la matière (<span class="eo">ovo el ĉokolado</span>&nbsp;: un œuf en chocolat).</li>
				<li><strong>kaj</strong> = et</li>
			</ul>
		</fieldset>


		<?php 
		} // fin section
		if ($section=="7") {
		?>
		<div class="row">
			<p class="col s6 m3 center-align"><img class="responsive-img" src="<?=$vojo?>fr/cge/bildoj/al-la-lernejo.jpg"><br>-4-</p>
			<p class="col s6 m3 center-align"><img class="responsive-img" src="<?=$vojo?>fr/cge/bildoj/apud-la-fenestro.jpg"><br>-5-</span></p>
			<p class="col s6 m3 center-align"><img class="responsive-img" src="<?=$vojo?>fr/cge/bildoj/cxokoladaj-insektoj.jpg"><br>-6-</p>
			<p class="col s6 m3 center-align"><img class="responsive-img" src="<?=$vojo?>fr/cge/bildoj/paperoj-cxe-la-muro.jpg"><br>-7-</p>
		</div>
		
			<?php 
				getEkzercon(15,$persono_id);
			?>
		
		<p>Crédits photos :</p>
		<p class="creditphoto">1. <em>Enfants en route pour l’école</em>. <a href="http://monde.ccdmd.qc.ca/ressource/?id=93435">Youri Thomas</a></p>
		<p class="creditphoto">2, 3, 4. iKurso/ E. Richard</p>
		<?php 
		} // fin section
		if ($section=="8") {
		?>
			<p class="parto">Vous avez vu dans la leçon précédente quelques mots de vocabulaire se rapportant à la date&nbsp;: </p>
			<div class="vortlisto row">
				<p class="col s6 m4"><a href="<?php echo $vojo;?>fr/son/vortoj/semajno.mp3" class="sm2_button"></a><span class="eo">semajno</span>&nbsp;: semaine</p>
				<p class="col s6 m4"><a href="<?php echo $vojo;?>fr/son/vortoj/tago.mp3" class="sm2_button"></a><span class="eo">tago</span>&nbsp;: jour</p>
				<p class="col s6 m4"><a href="<?php echo $vojo;?>fr/son/vortoj/jaro.mp3" class="sm2_button"></a><span class="eo">jaro</span>&nbsp;: année</p>
			</div>
			
			<p>Vous avez également appris comment dire les nombres, et vous savez donc déjà dire par exemple en quelle année nous sommes.</p>
			<p>Nous allons maintenant voir comment dire la date complète en espéranto. Cela vous permettra aussi de faire une petite révision des nombres&nbsp;!</p>
				
			<?php if ($persono) { ?>
			<p class="eta">Les mots présentés ici seront automatiquement ajoutés à votre vocabulaire à réviser lorsque vous aurez terminé d'étudier cette section.</p>
			<?php } ?>
			
			<fieldset class="vortoj">
				<div class="vortlisto row">
					<p class="col s12"><a href="<?php echo $vojo;?>fr/son/vortoj/dato.mp3" class="sm2_button"></a><span class="eo">dato</span>&nbsp;: date</p>
					<p class="col s6 m4"><a href="<?php echo $vojo;?>fr/son/vortoj/hodiaux.mp3" class="sm2_button"></a><span class="eo">hodiaŭ</span>&nbsp;: aujourd’hui</p>
					<p class="col s6 m4"><a href="<?php echo $vojo;?>fr/son/vortoj/morgaux.mp3" class="sm2_button"></a><span class="eo">morgaŭ</span>&nbsp;: demain</p>
					<p class="col s6 m4"><a href="<?php echo $vojo;?>fr/son/vortoj/hieraux.mp3" class="sm2_button"></a><span class="eo">hieraŭ</span>&nbsp;: hier</p>
				</div>
				<br>
				<p>Les jours de la semaine&nbsp;: <a href="<?php echo $vojo;?>fr/son/vortoj/tagoj-de-la-semajno.mp3" class="sm2_button"></a><span class="eo">la tagoj de la semajno</span></p>
				<div class="vortlisto row">
					<div class="col s6">
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/lundo.mp3" class="sm2_button"></a><span class="eo">lundo</span>&nbsp;: lundi</p>
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/mardo.mp3" class="sm2_button"></a><span class="eo">mardo</span>&nbsp;: mardi</p>
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/merkredo.mp3" class="sm2_button"></a><span class="eo">merkredo</span>&nbsp;: mercredi</p>
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/jxauxdo.mp3" class="sm2_button"></a><span class="eo">ĵaŭdo</span>&nbsp;: jeudi</p>
					</div>
					<div class="col s6">
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/vendredo.mp3" class="sm2_button"></a><span class="eo">vendredo</span>&nbsp;: vendredi</p>
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/sabato.mp3" class="sm2_button"></a><span class="eo">sabato</span>&nbsp;: samedi</p>
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/dimancxo.mp3" class="sm2_button"></a><span class="eo">dimanĉo</span>&nbsp;: dimanche</p>
					</div>
				</div>
				<br>
				<p>Les mois de l’année&nbsp;: <a href="<?php echo $vojo;?>fr/son/vortoj/monatoj-de-la-jaro.mp3" class="sm2_button"></a><span class="eo">la monatoj de la jaro</span></p>
				<div class="vortlisto row">
					<div class="col s6">
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/januaro.mp3" class="sm2_button"></a><span class="eo">januaro</span>&nbsp;: janvier</p>
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/februaro.mp3" class="sm2_button"></a><span class="eo">februaro</span>&nbsp;: février</p>
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/marto.mp3" class="sm2_button"></a><span class="eo">marto</span>&nbsp;: mars</p>
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/aprilo.mp3" class="sm2_button"></a><span class="eo">aprilo</span>&nbsp;: avril</p>
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/majo.mp3" class="sm2_button"></a><span class="eo">majo</span>&nbsp;: mai</p>
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/junio.mp3" class="sm2_button"></a><span class="eo">junio</span>&nbsp;: juin</p>
					</div>
					<div class="col s6">
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/julio.mp3" class="sm2_button"></a><span class="eo">julio</span>&nbsp;: juillet</p>
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/auxgusto.mp3" class="sm2_button"></a><span class="eo">aŭgusto</span>&nbsp;: août</p>
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/septembro.mp3" class="sm2_button"></a><span class="eo">septembro</span>&nbsp;: septembre</p>
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/oktobro.mp3" class="sm2_button"></a><span class="eo">oktobro</span>&nbsp;: octobre</p>
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/novembro.mp3" class="sm2_button"></a><span class="eo">novembro</span>&nbsp;: novembre</p>
						<p><a href="<?php echo $vojo;?>fr/son/vortoj/decembro.mp3" class="sm2_button"></a><span class="eo">decembro</span>&nbsp;: décembre</p>
					</div>
				</div>
			</fieldset>
			
			<p class="parto">Exemples :</p>
			<div class="vortlisto row">
				<p class="col s12"><a href="<?php echo $vojo;?>fr/son/frazoj/dato-01.mp3" class="sm2_button"></a><span class="eo">Hodiaŭ estas lundo la dua de aŭgusto.</span>&nbsp;: Aujourd’hui nous sommes le lundi 2 août.</p>
				<p class="col s12"><a href="<?php echo $vojo;?>fr/son/frazoj/dato-02.mp3" class="sm2_button"></a><span class="eo">Morgaŭ estos mardo la tria de aŭgusto.</span>&nbsp;: Demain nous serons le mardi 3 août.</p>
				<p class="col s12"><a href="<?php echo $vojo;?>fr/son/frazoj/dato-03.mp3" class="sm2_button"></a><span class="eo">Hieraŭ estis dimanĉo la unua de aŭgusto.</span>&nbsp;: Hier c’était dimanche 1<sup>er</sup> août.</p>
				<p class="col s12"><a href="<?php echo $vojo;?>fr/son/frazoj/dato-04.mp3" class="sm2_button"></a><span class="eo">En januaro estas tridek unu tagoj.</span>&nbsp;: En janvier il y a 31 jours.</p>
				<p class="col s12"><a href="<?php echo $vojo;?>fr/son/frazoj/dato-05.mp3" class="sm2_button"></a><span class="eo">La unua de Majo estas la Tago de la Laboro</span>&nbsp;: Le premier mai est la Fête du Travail (littéralement "le Jour du Travail")</p>
			</div>
			
			<p class="parto">Lorsqu’on indique une date précise, on emploie souvent la terminaison <b>n</b> de l’accusatif. Vous verrez par la suite que l’accusatif est employé pour certains compléments, et pas uniquement pour le complément direct.</p>
							
			<div class="vortlisto row">
				<p><a href="<?php echo $vojo;?>fr/son/frazoj/dato-06.mp3" class="sm2_button"></a><span class="eo">Ili venos la deka<b>n</b> de aprilo.</span>&nbsp;: Ils viendront le 10 avril.</p>
				<p><a href="<?php echo $vojo;?>fr/son/frazoj/dato-07.mp3" class="sm2_button"></a><span class="eo">La dua<b>n</b> de julio, mi edziĝos. </span>&nbsp;: Le 2 juillet, je me marierai.</p>
				<p><a href="<?php echo $vojo;?>fr/son/frazoj/dato-08.mp3" class="sm2_button"></a><span class="eo">Parizo, la 15-a<b>n</b> de decembro 2018</span>&nbsp;: Paris, le 15 décembre 2018 (par exemple au début d’une lettre)</p>
			</div>
				
			<p class="parto">On peut utiliser également la forme adverbiale pour les jours et les mois.</p>
			<div class="vortlisto row">
				<p><a href="<?php echo $vojo;?>fr/son/frazoj/dato-09.mp3" class="sm2_button"></a><span class="eo">Dimanĉ<b>e</b> mi ne laboras.</span>&nbsp;: Je ne travaille pas le dimanche.</p>
			</div>
			
			<div class="card-panel blue lighten-5">Cela fait beaucoup de nouvelles choses à mémoriser, mais ne vous tracassez pas trop. Prenez un peu de temps pour assimiler tout ça et n’hésitez pas à revenir relire cette page dans quelques jours. N’oubliez pas de pratiquer régulièrement, par exemple en indiquant la date du jour à votre correcteur quand vous lui enverrez vos prochains exercices.</div>
			
		</section>
		
		<?php 
		} // fin section
		if ($section=="9") {
		?>
		
			<?php 
				getEkzercon(16,$persono_id);
			?>
	

		<?php 
		} // fin section
		if ($section=="10") {
		?>
			<p class="parto">Les <b>noms propres</b> se terminent en principe par <b>-o</b> comme les noms
			communs, mais il peuvent aussi parfois garder leur forme et leur
			orthographe d’origine (par exemple <i>Shakespeare</i> ou <span class="eo">Ŝekspiro</span>).
			Par ailleurs, les prénoms de femme en <b>-a</b> sont assez fréquents.</p>
			<p>Lisez les phrases suivantes qui forment de petits récits. Les
			comprenez-vous ?</p>
			<p>Vous noterez que <span class="eo">Simeono</span>, <span class="eo">Petro</span> et <span class="eo">Fatima</span> sont des noms propres de personnes. </p>
			<div class="vortlisto">
				<p>Simeono estas la edzo de Fatima. Li amas ŝin. Li, la edzino kaj la infanoj loĝas en Eŭropo, en granda domo.</p>
				<p>Fatima deziras aĉeti novajn ŝuojn al la infanoj.</p>
				<p>Petro, la filo de Fatima, ŝatas gitari. Maria, lia juna fratino, preferas promeni bicikle.</p>
				<p>Simeono atendas en la butiko. Li jam havas du ovojn, sed li deziras aĉeti sandviĉon. Li manĝos ilin vespere.</p>
			</div>
			<p>Dans l’exercice page suivante, vous allez maintenant traduire ces phrases en français.</p>

	
		<?php 
		} // fin section
		if ($section=="11") {
		?>
		
			<?php 
				getEkzercon(17,$persono_id);
			?>
	
		<?php 
		} // fin section
		if ($section=="12") {
		?>
		
			<?php 
				getEkzercon(18,$persono_id);
			?>
	
			<?php 
				getEkzercon(19,$persono_id);
			?>

		<?php 
		} // fin section
		if ($section=="13") {
		?>

		<div class="row">
			<div class="col s12 m6">
				<p class="parto">L’espéranto est chanté depuis sa naissance, puisque Louis Lazare Zamenhof avait déjà écrit les paroles d’un hymne, <i>La Espero</i>, toujours entonné lors des grandes rencontres espérantistes.</p>
			</div>
			<div class="col s10 offset-s1 m6">
				<div class="video-container">
				<iframe width="560" height="315" src="https://www.youtube.com/embed/shNsmyrNN2g" frameborder="0" allowfullscreen></iframe>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col s12">
				<p class="parto">Tous les styles musicaux sont aujourd’hui représentés dans la culture espérantophone. Certaines chansons sont des adaptations des langues nationales, d’autres des productions originales en espéranto. La gamme s’étend du hiphop de la Pafklik’ au reggae de Jonny M, en passant par le rock-pop de Kore, et de l’électro d’Inicialoj dc au répertoire de Brassens par Jacques Yvart, en passant par la bossa nova de Flávio Fonseca… pour n’en citer que quelques-uns.</p>
			</div>
			
			<div class="col s12 m9">
				<p>Certains artistes sont autoproduits, mais les associations nationales servent souvent de maisons de production. Les premiers labels apparus sont issus des éditeurs de livres LF-Koop en Suisse et Edistudio en Italie. Aujourd’hui, le label <a href="https://www.vinilkosmo-mp3.com/fr/">Vinilkosmo</a> propose, près de Toulouse, l’un des principaux studios d’enregistrement des artistes espérantophones.</p>
			</div>
			<div class="col s6 m3 offset-s4">
				<a href="https://www.vinilkosmo-mp3.com/fr/"><img src="<?php echo $vojo;?>fr/cge/bildoj/vinilkosmo.gif" class="responsive-img" alt="Vinilkosmo"></a>
			</div>

		</div>

		<div class="row">
			<div class="col s12">
				<p class="parto">Parmi les chanteurs de l’Espérantie, présentons-en quelques-uns, de différents horizons&nbsp;:</p>
				<ul>
					<li><i class="material-icons tiny contraste-texte-A">star</i> <b>JoMo</b>, un chanteur français éclectique, connu pour ses adaptations, comme <em>La Bamba</em> (<em>La Bambo</em>), et ses productions originales dans différents styles (rock, folk, traditionnel).</li>
					<li><i class="material-icons tiny contraste-texte-A">star</i> <b>Ĵomart kaj Nataŝa</b>, un duo kazakh installé en Suède, aux chansons à texte originales.</li>
					<li><i class="material-icons tiny contraste-texte-A">star</i> <b>Kajto</b>, un groupe frison de musique populaire, aux paroles faciles à comprendre, qu’il est bon de reprendre en cœur ou en canon.</li>
					<li><i class="material-icons tiny contraste-texte-A">star</i> <b>Amplifiki</b>, <b>Persone</b>, <b>Martin & la Talpoj</b> : trois groupes de rock-pop issus les uns des autres.</li>
				</ul>
			</div>
			<div class="col s12 m7">
				<p><i class="material-icons tiny contraste-texte-A">star</i> <b>Gijom</b>, un artiste de chanson, dont le répertoire, original et adapté du français, est en partie disponible gratuitement sur son site internet.</p>
				<p><i class="material-icons tiny contraste-texte-A">star</i> Enfin, deux chansons faciles, pour commencer la navigation sur YouTube&nbsp;: <i>Jen</i> des Argentins <b>La Porkoj</b> et <i>Bluaj fragoj</i> du groupe brésilien <b>Merlin</b>.</p>
			</div>
			<div class="col s8 m5 offset-s2">
				<video class="responsive-video" controls>
					<source src="<?php echo $vojo;?>fr/cge/bildoj/jen.mp4" type="video/mp4">
				</video>
			</div>
		</div>

		<div class="row">
			<div class="col s12">
				<p class="parto">Pour en savoir plus, rendez-vous sur la Toile :</p>
				<ul>
					<li><a href="https://fr.wikipedia.org/wiki/Musique_esp%C3%A9rantophone">https://fr.wikipedia.org/wiki/Musique_espérantophone</a></li>
					<li><a href="https://eo.wikipedia.org/wiki/Esperanto-muziko">https://eo.wikipedia.org/wiki/Esperanto-muziko</a></li>
					<li><a href="https://eo.wikipedia.org/wiki/Esperanto-muzikalbumoj">https://eo.wikipedia.org/wiki/Esperanto-muzikalbumoj</a></li>
				</ul>
			</div>
		</div>

		<div class="row">
			<div class="col s12">
				<p class="parto">Et pour découvrir l’espéranto en musique :</p>
				<ul>
					<li>à la radio : <a href="http://muzaiko.info/">muzaiko.info</a></li>
					<li>en albums : <a href="https://www.vinilkosmo-mp3.com/fr/">vinilkosmo.com</a></li>
					<li>dans notre boutique en ligne : <a href="<?=$urlracine?>butiko.php">https://ikurso.esperanto-france.org/butiko.php</a></li>
				</ul>
			</div>
		</div>
		
		<?php 
		} // fin section
		if ($section=="14") {
		?>
			<p>
			La prononciation ne devrait plus avoir le moindre secret pour vous
			désormais. Toutefois n’hésitez pas à interroger votre correcteur s’il
			vous reste un doute. Par ailleurs, vous voyez que malgré un vocabulaire
			encore limité vous êtes déjà capable de faire de vraies phrases et de
			comprendre un petit récit. 
			</p>
		<?php 
			recapitulatif_lecon_avant_envoi('CG',$leciono,$persono_id);
		} // fin section 
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
