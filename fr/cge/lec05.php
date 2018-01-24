<?php
$titolo="5 (kvin)";
$leciono = 5;
$section=isset($_GET["section"])?$_GET["section"]:"1";
include "dlekkapo.inc.php";
?>
<div class="row">
	<article class="col s12 m10 l7 offset-m1 offset-l1">
				
		<section id="leciono-enhavo">
		<?php 
		getTitoloLecionero('CG',$leciono,$section);
		displayWarningSiLecioneroManquante($persono_id,'CG',5,$section);
		
		
		if ($section=="1") {
		?>

		<p class="parto">Un petit récapitulatif des expressions que nous avons déjà vues et quelques nouvelles expressions.</p>
		<div class="vortlisto">
			<div class="row">
				<p class="col s6 m3 eo">Saluton !</p><p class="col s6 m3">Salut !</p>
				<p class="col s6 m3 eo">Bonan tagon !</p><p class="col s6 m3">Bonjour !</p>
				<p class="col s6 m3 eo">Bonan matenon !</p><p class="col s6 m3">Bonjour ! (le matin)</p>
				<p class="col s6 m3 eo">Bonan vesperon !</p><p class="col s6 m3">Bonsoir !</p>
				<p class="col s6 m3 eo">Bonan nokton !</p><p class="col s6 m3">Bonne nuit !</p>
			</div><div class="row">
				<p class="col s6 m3 eo">Ĝis revido !</p><p class="col s6 m3">Au revoir !</p>
				<p class="col s6 m3 eo">Adiaŭ !</p><p class="col s6 m3">Adieu !</p>
			</div>
		</div>
		<p></p>

		<div class="vortlisto row">
			<p class="col s6"><span class="eo">Kiel vi fartas ?</span></p><p class="col s6">Comment allez-vous ?</p>
			<p class="col s5 offset-s1"><span class="eo">– Bone. Kaj vi ?</span></p><p class="col s6">Bien. Et vous ?</p>
			<p class="col s5 offset-s1"><span class="eo">– Bonege.</span></p><p class="col s6">Parfaitement bien.</p>
			<p class="col s5 offset-s1"><span class="eo">– Sufiĉe bone.</span></p><p class="col s6">Assez bien. (ça va)</p>
			<p class="col s5 offset-s1"><span class="eo">– Ne tro bone.</span></p><p class="col s6">Pas trop bien.</p>
		</div>

		<fieldset class="vortoj">
			<legend>EXPRESSIONS À RETENIR</legend>
			<?php if ($persono) { ?>
			<p class="eo eta">Les expressions suivantes seront automatiquement ajoutées à votre vocabulaire à réviser lorsque vous aurez terminé d'étudier cette section.</p>
			<?php } ?>
			<div class="vortlisto row">
				<p class="col s6"><span class="eo">Bonan apetiton !</span></p><p class="col s6">Bon appétit !</p>
				<p class="col s6"><span class="eo">Je via sano !</span></p><p class="col s6">À votre santé !</p>
				<p class="col s6"><span class="eo">Same al vi !</span></p><p class="col s6">Pareillement !</p>
				<p class="col s6"><span class="eo">Dankon !</span></p><p class="col s6">Merci !</p>
				<p class="col s6"><span class="eo">Ne dankinde !</span></p><p class="col s6">Pas de quoi !</p>
			</div>
		</fieldset>

		<p>
		Si deux personnes arrivent à parler d’elles-mêmes pendant cinq
		minutes chacune, elles peuvent donc facilement entretenir une
		conversation de dix minutes ! À la fin de ce cours en 10 leçons,
		vous devriez être capable de faire un petit discours sur vous-même en
		espéranto, en vous aidant éventuellement d’un résumé en français.
		</p>

		<p>Voyons l’exemple de Robert Lebrun :</p>
		<div class="vortlisto">
			<p><a class="player-audio" href="<?php echo $vojo;?>fr/son/l05.mp3" class="sm2_button"></a></p>
			<p>Saluton !<br>
			Mia nomo estas Roberto Bruno. Mi loĝas en Kanado. Mi komencis
			lerni Esperanton antaŭ kvar semajnoj. Ĝi estas tre facila lingvo.
			Mi loĝas en domo kun mia edzino kaj niaj infanoj. Ni havas unu
			filon kaj du filinojn. Mi kolektas poŝtmarkojn kaj bildkartojn kaj
			ŝatas interŝanĝi ilin kun esperantistoj en aliaj landoj.</p>
		</div>

		<p class="noto">
			<b>NOTE</b> : <span class="eo">antaŭ kvar semajnoj</span> = il y a 4 semaines (littéralement «&nbsp;avant 4 semaines&nbsp;»)</p>
			

		<fieldset class="vortoj">
			<legend>MOTS À RETENIR</legend>
			<?php if ($persono) { ?>
			<p class="eo eta">Les mots suivants seront automatiquement ajoutés à votre vocabulaire à réviser lorsque vous aurez terminé d'étudier cette section.</p>
			<?php } ?>
			<div class="vortlisto row">
				<p class="col s12 m6"><span class="eo">nomo</span> : nom</p>
				<p class="col s12 m6"><span class="eo">bildkarto</span> : carte postale (illustrée)</p>
				<p class="col s12 m6"><span class="eo">lingvo</span> : langue (que l’on parle)</p>
				<p class="col s12 m6"><span class="eo">komenci</span> : commencer (quelque chose)</p>
				<p class="col s12 m6"><span class="eo">interŝanĝi</span> : échanger</p>
				<p class="col s12 m6"><span class="eo">ŝati</span> : aimer, apprécier</p>
				<p class="col s12 m6"><span class="eo">lerni</span> : apprendre</p>
				<p class="col s12 m6"><span class="eo">kun</span> : avec</p>
			</div>
		</fieldset>

		<p><span class="eo">loĝi, domo, edzo, infano, kolekti, poŝtmarko, lando</span>&nbsp;: se reporter au vocabulaire de la <a href="lec04.php">leçon précédente</a>
		</p>
		</p>

		<?php 
		} // fin section 
		if ($section=="2") {
		?>
		
		<p class="parto">
		Les corrélatifs forment un tableau très utile de petits mots reliés
		entre eux par le sens et par la forme. Ils constituent un bon exemple
		des avantages que l’on trouve à construire des mots de façon
		<b>systématique</b>. 
		</p>

		<p>
		Tout corrélatif est la combinaison de deux éléments, comme présentés dans le schéma suivant. Par exemple, si nous associons par exemple l'élément <span class="eo">ki-</span>, qui permet de poser une question, avec l'élément <span class="eo">-am</span>, qui a la signification de «temps, moment», on obtient le corrélatif <span class="eo">kiam</span>, qui signifie <em>quand</em>.</p>

		<img src="<?php echo $vojo;?>fr/cge/bildoj/correlatifs.svg" class="responsive-img">
		
		<p>Vous retrouverez dans le schéma ci-dessus des corrélatifs que vous avez déjà rencontrés dans les leçons précédentes&nbsp;:</p>
		<div class="row vortlisto">
			<p class="col s4 m3"><span class="eo">kiu</span> : qui, quel</p>
			<p class="col s4 m3"><span class="eo">neniu</span> : personne</p>
			<p class="col s4 m6"><span class="eo">iu</span> : quelqu’un</p>
			<p class="col s4 m3"><span class="eo">kio</span> : quoi</p>
			<p class="col s8 m9"><span class="eo">nenio</span> : rien</p>
			<p class="col s4 m3"><span class="eo">kie</span> : où</p>
			<p class="col s8 m9"><span class="eo">nenie</span> : nulle part</p>
			<p class="col s4 m3"><span class="eo">kiam</span> : quand</p>
			<p class="col s4 m3"><span class="eo">neniam</span> : jamais</p>
			<p class="col s4 m6"><span class="eo">ĉiam</span> : toujours</p>
			<p class="col s6 m4"><span class="eo">kiel</span> : comment, comme</p>
			<p class="col s6 m8"><span class="eo">tiel</span> : ainsi, comme ça</p>
			<p class="col s12"><span class="eo">kiom</span> : combien</p>
		</div>
		
		<p class="parto">Voici quelques autres exemples de corrélatifs&nbsp;</p>

		<table class="bordered">
			<tr>
				<td width="15%"><b>Corrélatif</b></td>
				<td width="20%"><b>Composition</b></td>
				<td width="65%"><b>Exemples</b></td>
			</tr><tr>
				<td><b>ĉiu</b></td>
				<td><span class="eo">ĈI</span> + <span class="eo">U</span></td>
				<td><em>tout(e)</em> + <em>(adjectif)</em><br>«toute chose» => chaque, chacun(e)</td>
			</tr><tr>
				<td><b>tie</b></td>
				<td><span class="eo">TI</span> + <span class="eo">E</span></td>
				<td><em>ce, cet(te)</em> + <em>lieu</em><br/>à ce lieu => ici, là</td>
			</tr><tr>
				<td><b>tiam</b></td>
				<td><span class="eo">TI</span> + <span class="eo">AM</span></td>
				<td><em>ce, cet(te)</em> + <em>moment</em><br/>à ce moment</td>
			</tr><tr>
				<td><b>iam</b></td>
				<td><span class="eo">I</span> + <span class="eo">AM</span></td>
				<td><em>indéfini</em> + <em>moment</em><br/>à un moment, un jour</td>
			</tr><tr>
				<td><b>neniom</b></td>
				<td><span class="eo">NENI</span> + <span class="eo">OM</span></td>
				<td><em>aucun</em> + <em>quantité</em><br/>aucun</td>
			</tr>
			</tr><tr>
				<td><b>kiu</b></td>
				<td><span class="eo">KI</span> + <span class="eo">U</span></td>
				<td><em>quel(le), lequel , laquelle</em> + <em>(adjectif)</em><br/>quel(le), lequel , laquelle, qui</td>
			</tr>
		</table>

		<p class="parto">Les corrélatifs se terminant par <b>U</b> sont souvent des adjectifs accompagnant un nom&nbsp;:</p>
		<div class="row">
			<p class="col s6"><span class="eo">Kiun frukton vi volas?</span></p><p class="col s6">Quel fruit veux-tu&nbsp;?</p>
			<p class="col s6"><span class="eo">Mi volas tiun frukton.</span></p><p class="col s6">Je veux ce fruit(-là).</p>
			<p class="col s6"><span class="eo">Mi volas neniun frukton.</span></p><p class="col s6">Je ne veux aucun fruit.</p>
			<p class="col s6"><span class="eo">Kiun amikon vi renkontis?</span></p><p class="col s6">Quel ami avez-vous rencontré&nbsp;?</p>
		</div>

		<p>Cependant, le nom peut parfois être sous-entendu si le contexte est clair&nbsp;:</p>
		<div class="row">
			<p class="col s6"><span class="eo">Jen fruktoj: kiun (frukton) vi volas?</span></p>
			<p class="col s6">Voici des fruits : lequel veux-tu&nbsp;? </p>
			<p class="col s6"><span class="eo">– Mi volas tiun (frukton).</span></p>
			<p class="col s6">– Je veux celui-là.</p>
			<p class="col s6"><span class="eo">– Mi volas neniun (frukton).</span></p>
			<p class="col s6">– Je n’en veux aucun.</p>
			<p class="col s6"><span class="eo">Jen la frukto, kiun (frukton) vi volis.</span></p>
			<p class="col s6">Voici le fruit que tu voulais.</p>
		</div>
		
		<p>Employé seul, un corrélatif en <b>U</b> est très souvent un <b>pronom</b> qui désigne une personne&nbsp;:</p>
		<div class="row">
			<p class="col s6"><span class="eo">Kiu venis ?</span></p><p class="col s6">Qui est venu ?</p>
			<p class="col s6"><span class="eo">– Iu.</span></p><p class="col s6">– Quelqu’un.</p>
			<p class="col s6"><span class="eo">– Neniu.</span></p><p class="col s6">– Personne.</p>
			<p class="col s6"><span class="eo">– Ĉiu.</span></p><p class="col s6">– Chacun.</p>
		</div>
		
		<p class="parto">Les corrélatifs en <b>ES</b> sont souvent associés à un pronom en <b>U</b> et marquent alors la possession&nbsp;:</p>
		<div class="row">
			<p class="col s3"><span class="eo">kies (= de kiu)</span></p><p class="col s9">de qui, à qui, dont, duquel</p>
			<p class="col s3"><span class="eo">ties (= de tiu)</span></p><p class="col s9">de celui-là, à celui-là</p>
			<p class="col s3"><span class="eo">ies  (= de iu)</span></p><p class="col s9">de quelqu’un, à quelqu’un</p>
			<p class="col s3"><span class="eo">ĉies (= de ĉiu)</span></p><p class="col s9">de chacun, de tout le monde, à tout le monde</p>
			<p class="col s3"><span class="eo">nenies (= de neniu)</span></p><p class="col s9">de personne, à personne</p>
		</div>
		
		<p>Exemples :</p>
		<div class="row">
			<p class="col s6"><span class="eo">Kies amiko vi estas ?</span></p><p class="col s6">De qui es-tu l’ami ?</p>
			<p class="col s6"><span class="eo">Mi estas ĉies amiko.</span></p><p class="col s6">Je suis l’ami de tous (de chacun).</p>
			<p class="col s6"><span class="eo">La viro, kies amikon mi vidis.</span></p><p class="col s6">L’homme dont j’ai vu l’ami</p>
			<p class="col s6"><span class="eo">La viro, kun kies amiko ni trinkis.</span></p><p class="col s6">L’homme avec l’ami duquel nous avons bu</p>
		</div>
		
		<p class="parto">Les corrélatifs en <b>-OM</b> (quantité) sont souvent suivi par la préposition <span class="eo">da</span>&nbsp;:</p>
		<div class="row">
			<p class="col s6"><span class="eo">Kiom da kukoj vi deziras?</span></p><p class="col s6">Combien de gâteaux veux-tu ?</p>
			<p class="col s6"><span class="eo">Mi jam manĝis tiom da ili!</span></p><p class="col s6">J’en ai déjà tellement mangé !</p>
		</div>
		<?php
		} // fin section 

		if ($section=="3") {
		?>
		<p>
		Après toute cette théorie, un peu de pratique ne vous fera pas de mal.
		Regardez les mots de la liste qui suit. Décomposez chaque corrélatif,
		recherchez son sens d’après les explications du paragraphe précédent
		et comparez-le avec celui qui est donné ici.
		</p>
		<div class="vortlisto row">
			<p class="col s2"><span class="eo">tio</span></p><p class="col s10">cette chose, cela, ce</p>
			<p class="col s2"><span class="eo">kio&nbsp;?</span></p><p class="col s10">quelle chose&nbsp;? quoi&nbsp;?</p>
			<p class="col s2"><span class="eo">iam</span></p><p class="col s10">à un (certain) moment, un jour, (il était) une fois</p>
			<p class="col s2"><span class="eo">nenie</span></p><p class="col s10">nulle part</p>
			<p class="col s2"><span class="eo">kiel?</span></p><p class="col s10">comment&nbsp;? de quelle manière&nbsp;? (<em>réponses possibles</em>&nbsp;: bien, élégamment…)</p>
			<p class="col s2"><span class="eo">kiam?</span></p><p class="col s10">quand&nbsp;? à quel moment&nbsp;? (<em>réponses possibles</em>&nbsp;: cet après-midi, le soir…)</p>
			<p class="col s2"><span class="eo">kie?</span></p><p class="col s10">où&nbsp;? en quel lieu&nbsp;? (<em>réponses possibles</em>&nbsp;: tout près, au Canada…)</p>
			<p class="col s2"><span class="eo">kial?</span></p><p class="col s10">pourquoi&nbsp;? pour quelle raison&nbsp;? (<em>réponse possible</em>&nbsp;: parce que…)</p>
			<p class="col s2"><span class="eo">kiom?</span></p><p class="col s10">combien&nbsp;? quelle quantité&nbsp;? (<em>réponses possibles</em>&nbsp;: un peu, beaucoup…)</p>
			<p class="col s2"><span class="eo">ĉiam</span></p><p class="col s10">toujours</p>
			<p class="col s2"><span class="eo">tiel</span></p><p class="col s10">ainsi, de cette façon</p>
			<p class="col s2"><span class="eo">ie</span></p><p class="col s10">quelque part</p>
		</div>
		
		<p class="rimarko"><strong>REMARQUES :</strong> </p>
		<ol>
			<li>Faites bien attention à l’accent tonique des corrélatifs&nbsp;: 
			<span class="eo">ne-<u>ni</u>-e</span>, <span class="eo"><u>ki</u>-u</span>, <span class="eo"><u>ti</u>-al</span>, <span class="eo"><u>i</u>-om</span>, <span class="eo">ne-<u>ni</u>-es</span>.</li>
			<li>Les corrélatifs en <b>KI-</b> servent à former des phrases interrogatives 
			(qui&nbsp;?, où&nbsp;?, quand&nbsp;?, comment&nbsp;?) et des propositions relatives.</li>
		</ol>
		
		<?php 
		} // fin section 
		if ($section=="4") {
		?>
		
		<p class="parto">
		Les corrélatifs terminés par <b>-A</b> et <b>-U</b> prennent la forme de l’accusatif
		<b>-n</b> et du pluriel <b>-j</b>. Les corrélatifs en <b>-O</b> (<span class="eo">kio</span>,
		etc.) et en <b>-E</b> prennent le <b>-n</b> de l’accusatif mais jamais le <b>-j</b> du
		pluriel. Tous les autres sont invariables.
		</p>
		<div class="row">
			<p class="col s12"><span class="eo">Kun kiaj fruktoj vi faris tiun bonan kukon ?</span> : Avec quelles sortes de fruits as-tu fait ce bon gâteau ?</p>
			<p class="col s12"><span class="eo">Mi neniam manĝis tiajn kukojn.</span> : Je n’ai jamais mangé de tels gâteaux.</p>
			<p class="col s12"><span class="eo">Kiujn vi renkontis ?</span> : Qui (plur.) as-tu rencontré ? Lesquels as-tu rencontrés ?</p>
			<p class="col s12"><span class="eo">Mi vidis la kukon, kiun vi faris.</span> : J’ai vu le gâteau que tu as fait.</p>
			<p class="col s12"><span class="eo">Kion vi volas ?</span> : Que veux-tu ?</p>
		</div>

		<?php 
		} // fin section 
		if ($section=="5") {
		?>
		
		<p><a href="<?php echo $vojo;?>fr/son/pv5.mp3" class="sm2_button"></a> <span class="eo">En ĉiu malbono estas iom da bono.</span> : Dans tout mal il y a un peu de bien.</p>
		

		<fieldset class="vortoj">
			<legend>À RETENIR</legend>
			<?php if ($persono) { ?>
			<p class="eo eta">Ce mot sera automatiquement ajouté à votre vocabulaire à réviser lorsque vous aurez terminé d'étudier cette section.</p>
			<?php } ?>
			<div class="vortlisto row">
				<p class="col s12"><span class="eo">malbono</span> : le mal, du mal</p>
			</div>
		</fieldset>
		
		<?php 
		} // fin section 
		if ($section=="6") {
		?>

			<?php 
				getEkzercon(20,$persono_id);
			?>

			<?php 
				getEkzercon(21,$persono_id);
			?>

		<fieldset class="vortoj">
			<legend>MOTS À RETENIR</legend>
			<?php if ($persono) { ?>
			<p class="eo eta">Les mots suivants seront automatiquement ajoutés à votre vocabulaire à réviser lorsque vous aurez terminé d'étudier cette section.</p>
			<?php } ?>
			<div class="vortlisto row">
				<p class="col s12 m6"><span class="eo">malseka</span> : mouillé</p>
				<p class="col s12 m6"><span class="eo">krajono</span> : crayon</p>
				<p class="col s12 m6"><span class="eo">vespere</span> : le soir, au soir</p>
				<p class="col s12 m6"><span class="eo">bicikle</span> : en vélo</p>
			</div>
		</fieldset>

		<?php 
		} // fin section 
		if ($section=="7") {
		?>
		<div class="row">
			<div class="col s12">
				<p class="parto">Vous qui apprenez l’espéranto, vous aurez certainement assez tôt envie de lire ou d’écrire pour mettre en pratique votre apprentissage.</p>
				<p>Pour assouvir votre soif de lecture, vous allez avoir un certain choix, car la littérature en espéranto se compose d’œuvres au style varié et s’est constituée de nombreux ouvrages au fil des ans.</p>
				<p>En effet, le <strong>premier roman original en espéranto</strong> apparut en 1907, sous la plume d’Henri Valienne et s’intitule <em>Kastelo de Prelongo</em>. Auparavant, les publications provenaient soit des traductions, soit de poésies.</p>
			</div>
		</div>
		<div class="row">
			<div class="col s9">
				<p>Citons d’abord quelques œuvres très connues à découvrir ou redécouvrir en espéranto : <em>Le Seigneur des anneaux</em>, <em>Don Quichotte</em>, <em>Le Petit Prince</em>, <em>Hamlet</em>… Vous apprécierez alors les traductions de qualités qui seront un moyen indéniable de progresser et d’approfondir votre vocabulaire.</p>
				<p>Et puis il existe la littérature originale, loin d’être négligeable, car il se trouve dans le monde de l’espéranto quelques auteurs connus, reconnus et prolifiques&nbsp;: William Auld, Marjorie Boulton, Trevor Steel… Leurs livres sont devenus des classiques, voire des incontournables.</p>
				<p class="parto">Un autre fait est à noter, certains livres sont parus en espéranto et ont ensuite été traduits vers des langues nationales, comme <em>Kroata milita noktlibro</em>, de Spomenka Ŝtimec (<em>Journal de nuit</em>) ou <em>Kumeŭaŭa, la filo de la ĝangalo</em> de Tibor Sekelj (<em>Kumewawa, le fils de la jungle</em>).</p>
				<div class="row">
					<div class="col s6">
						<img src="<?php echo $vojo;?>fr/cge/bildoj/mastro-ringoj.png" class="responsive-img" alt="La Majstro de l' ringoj" />
					</div>
					<div class="col s4">
						<img src="<?php echo $vojo;?>fr/cge/bildoj/eta-princo.jpg" class="responsive-img" alt="La Eta Princo" />
					</div>
				</div>
			</div>
			<div class="col s3">
				<img src="<?php echo $vojo;?>fr/cge/bildoj/don-quichotte.jpg" class="responsive-img" alt="Don Quichotte" />
			</div>
		</div>
		<div class="row">
			<div class="col s8 m9">
				<p>La <strong>bande-dessinée</strong> (d’accord, pour certains, ce n’est pas de la « littérature ») mais nous ne pouvons pas ne pas l’évoquer&nbsp;: que diriez-vous de lire <em>Tintin au Tibet</em>, <em>Astérix et Cléopâtre</em>, ou le <em>Petit Spirou</em> en espéranto ?</p>
				<p>L’espéranto, grâce à la littérature, prend tout son sens&nbsp;: les <strong>œuvres originales</strong> participent à l’enrichissement du patrimoine culturel et les <strong>œuvres traduites</strong> ouvrent des accès entre les cultures.</p>
				<p class="parto">Êtes-vous prêt à partir à la découverte des <a href="http://katalogo.uea.org/katalogo.php?inf=8587">sagas islandaises</a>&nbsp;? À partager le <a href="http://katalogo.uea.org/katalogo.php?inf=8943">récit d’une famille hollandaise hanté par la colonisation</a>&nbsp;? À en apprendre plus sur <a href="http://katalogo.uea.org/katalogo.php?inf=7813">le père de la langue maltaise</a>&nbsp;? Ou souhaitez-vous vous plonger dans un <a href="http://katalogo.uea.org/index.php?inf=6111">recueil de nouvelles coréennes</a>&nbsp;? <p>
				<p>Vous êtes chanceux de pouvoir lire ces livres, car ils ne sont pas édités en français&nbsp;!</p>
			</div>
			<div class="col s4 m3">
				<img src="<?php echo $vojo;?>fr/cge/bildoj/La_templo_de_l_suno.jpg" class="responsive-img" alt="La Eta Princo" />
			</div>
		</div>
		<div class="row">
			<div class="s12">
				<p><strong>Quelques liens utiles pour prolonger votre découverte&nbsp;:</strong></p>
				<ul>
					<li><a href="https://fr.wikipedia.org/wiki/Littérature_espérantophone">article de wikipédia sur la littérature espérantophone</a></li>
					<li><a href="https://esperanto-france.org/doc/UFE_Catalogue.pdf">catalogue de la librairie d'Espéranto-France</a></li>
				</ul>
				<p><strong>Livres électroniques</strong>&nbsp;:</p>
				<ul>
					<li><a href="http://esperanto-ondo.ru/Libroj/Libroj.php">esperanto-ondo.ru/Libroj/Libroj.php</a></li>
					<li><a href="http://www.bitlibroj.com/originalaesperantoliteraturo/originalaprozoesperanto.html">www.bitlibroj.com/originalaesperantoliteraturo/originalaprozoesperanto.html</a></li>
					<li><a href="http://www.librejo.com/index.html">www.librejo.com</a></li>
				</ul>
			</div>
		</div>
		<?php 
		} // fin section 
		if ($section=="8") {
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
		pubFacebook();
		?>		
	</aside>
</div>
<?php include "dlekpiedo.inc.php"; ?>