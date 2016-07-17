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
		
		
		if ($section=="1") {
		?>

		<p class="parto">Retenez les expressions suivantes, elles vous serviront.</p>
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
			<p class="col s6"><span class="eo">Bonan apetiton !</span></p><p class="col s6">Bon appétit !</p>
			<p class="col s6"><span class="eo">Je via sano !</span></p><p class="col s6">À votre santé !</p>
			<p class="col s6"><span class="eo">Same al vi !</span></p><p class="col s6">Pareillement !</p>
			<p class="col s6"><span class="eo">Dankon !</span></p><p class="col s6">Merci !</p>
			<p class="col s6"><span class="eo">Ne dankinde !</span></p><p class="col s6">Pas de quoi !</p>
		</div>

		<p>
		Si deux personnes arrivent à parler d’elles-mêmes pendant cinq
		minutes chacune, elles peuvent donc facilement entretenir une
		conversation de dix minutes ! À la fin de ce cours en 10 leçons,
		vous devriez être capable de faire un petit discours sur vous-même en
		espéranto, en vous aidant éventuellement d’un résumé en français.
		</p>

		<p>Voyons l’exemple de Robert Lebrun :</p>
		<div class="vortlisto">
			<p><a href="../son/l05.mp3" type="audio/mp3"><i class="material-icons">volume_up</i></a></p>
			<p>Saluton !<br>
			Mia nomo estas Roberto Bruno. Mi loĝas en Kanado. Mi komencis
			lerni Esperanton antaŭ kvar semajnoj. Ĝi estas tre facila lingvo.
			Mi loĝas en domo kun mia edzino kaj niaj infanoj. Ni havas unu
			filon kaj du filinojn. Mi kolektas poŝtmarkojn kaj bildkartojn kaj
			ŝatas interŝanĝi ilin kun esperantistoj en aliaj landoj.</p>
		</div>

		<h3>Vocabulaire</h3>

		<div class="vortlisto row">
			<p class="col s12 m6"><span class="eo">interŝanĝi</span> : échanger</p>
			<p class="col s12 m6"><span class="eo">antaŭ</span> : avant (ici : «il y a…»)</p>
			<p class="col s12 m6"><span class="eo">bildkarto</span> : carte postale (illustrée)</p>
		</div>
		<p><span class="eo">loĝi, domo, edzo, infano, kolekti, poŝtmarko, lando</span>&nbsp;: se reporter au vocabulaire de la <a href="lec04.php">leçon précédente</a>
		</p>
		<p><span class="eo">nomo, komenci, lerni, facila, lingvo, kun, ŝati</span>&nbsp;: se reporter au <a href="vocabula.php">lexique général du cours</a>
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
		Remarquez que, dans un tableau rectangulaire de 9 lignes et 5
		colonnes, l’on peut identifier 45 cases différentes en utilisant
		simplement 5 lettres au début et 9 chiffres à la fin : A1, A2, C3, ...
		H9. De la même façon, il existe en espéranto 45 mots correspondants à
		toutes les combinaisons possibles par concaténation de 5 débuts de
		mots et de 9 terminaisons. Ces mots sont appelés <b>corrélatifs</b>.
		Nous avons rempli quelques cases. 
		</p>
		<p>À vous de compléter le tableau. La
		signification exacte des mots trouvés vous sera expliquée ensuite.
		</p>
		
		<table class="bordered">
			<tr>
				<td width="15%"> </td>
				<td width="15%"><b>ki-</b></td>
				<td width="15%"><b>ti-</b></td>
				<td width="15%"><b>i-</b></td>
				<td width="15%"><b>ĉi-</b></td>
				<td width="15%"><b>neni-</b></td>
			</tr>
			<tr><td><b>-o</b></td><td>...</td><td>...</td><td>...</td><td>...</td><td>nenio</td></tr>
			<tr><td><b>-a</b></td><td>kia</td><td>...</td><td>...</td><td>...</td><td>...</td></tr>
			<tr><td><b>-e</b></td><td>...</td><td>...</td><td>ie</td><td>...</td><td>...</td></tr>
			<tr><td><b>-u </b></td><td>...</td><td>tiu</td><td>...</td><td>...</td><td>...</td></tr>
			<tr><td><b>-om</b></td><td>...</td><td>...</td><td>...</td><td>ĉiom</td><td>...</td></tr>
			<tr><td><b>-am</b></td><td>...</td><td>...</td><td>iam</td><td>...</td><td>...</td></tr>
			<tr><td><b>-el</b></td><td>...</td><td>...</td><td>...</td><td>...</td><td>neniel</td></tr>
			<tr><td><b>-al</b></td><td>kial</td><td>...</td><td>...</td><td>...</td><td>...</td></tr>
			<tr><td><b>-es</b></td><td>...</td><td>ties</td><td>...</td><td>...</td><td>...</td></tr>
		</table>
		<p>
		Le sens de tout corrélatif est la combinaison des sens des deux
		parties qui le composent comme indiqué dans le schéma suivant.
		(Insérez la partie gauche à la place du "___" de la partie droite.)
		</p>
		
		<pre>
                   +===========+
        quel(le),  | KI      O |  ___ chose (en général)
 lequel, laquelle  |           |
                   |         A |  ___ sorte de, espèce de, genre de
   ce, cet, cette  | TI        |
                   |         U |  ___ personne (voir note [1])
                   |           |
 un(e) certain(e)  | I      ES |  de ___ personne (voir note [2]) 
                   |           |
                   |        OM |  en ___ quantité (voir note [3])
          tout(e)  |   I       |
                   |        AM |  à ___ temps, moment
                   |           |
(ne) ... aucun(e)  | NENI   AL |  pour ___ raison, cause, motif
                   |           |
                   |        EL |  de ___ manière, façon
                   |           |
                   |         E |  à ___ lieu, endroit
                   +===========+
		</pre>
				
		<p>Exemples :</p>
		<table class="bordered">
			<tr>
				<td width="10%"><b>Corrélatif</b></td>
				<td width="40%"><b>Composition</b></td>
				<td width="40%"><b>Signification</b></td>
			</tr><tr>
				<td><b>ĉiam</b></td>
				<td span class="eo">ĉI- + -AM</td>
				<td>"tout(e)" + "à ___ moment"<br>"à tout moment" => toujours</td>
			</tr><tr>
				<td><b>nenial</b></td>
				<td class="eo">NENI- + -AL</td>
				<td>"pour ___ raison" + "(ne) ... aucun(e)"<br>pour aucune raison</td>
			</tr><tr>
				<td><b>tie</b></td>
				<td class="eo">TI- + -E</td>
				<td>"à ___ lieu" + "ce, cet(te)"<br/>à ce lieu => ici, là</td>
			</tr>
		</table>

		<p class="rimarko"><strong>NOTES</strong> : </p>
		<p><span class="eo"><b>1.</b></span> Un corrélatif en <b>-U</b> peut avoir trois valeurs&nbsp;:</p>
		<p>Le plus souvent c’est un <b>adjectif</b> accompagnant un nom&nbsp;:</p>
		<div class="row">
			<p class="col s6"><span class="eo">Kiun frukton vi volas?</span></p><p class="col s6">Quel fruit veux-tu&nbsp;?</p>
			<p class="col s6"><span class="eo">Mi volas tiun frukton.</span></p><p class="col s6">Je veux ce fruit(-là).</p>
			<p class="col s6"><span class="eo">Mi volas neniun frukton.</span></p><p class="col s6">Je ne veux aucun fruit.</p>
			<p class="col s6"><span class="eo">Kiun amikon vi renkontis?</span></p><p class="col s6">Quel ami avez-vous rencontré&nbsp;?</p>
		</div>

		<p>Le nom peut parfois être sous-entendu si le contexte est clair&nbsp;:</p>
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
		
		<p>Employé seul, il s’agit le plus souvent d’un <b>pronom</b> qui désigne une personne&nbsp;:</p>
		<div class="row">
			<p class="col s6"><span class="eo">Kiu venis ?</span></p><p class="col s6">Qui est venu ?</p>
			<p class="col s6"><span class="eo">– Iu.</span></p><p class="col s6">– Quelqu’un.</p>
			<p class="col s6"><span class="eo">– Neniu.</span></p><p class="col s6">– Personne.</p>
			<p class="col s6"><span class="eo">– Ĉiu.</span></p><p class="col s6">– Chacun.</p>
		</div>
		
		<p><span class="eo"><b>2.</b></span> Tout corrélatif en <b>-ES</b> est associé à un pronom en <b>-U</b> et marque la possession&nbsp;:</p>
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
		
		<p><span class="eo"><b>3.</b></span> Les corrélatifs en <b>-OM</b> (quantité) sont souvent suivi par la préposition <span class="eo">da</span>&nbsp;:</p>
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
			<p class="col s2"><span class="eo">kiel?</span></p><p class="col s10">comment&nbsp;? de quelle manière&nbsp;? (réponse&nbsp;: bien, élégamment…)</p>
			<p class="col s2"><span class="eo">kiam?</span></p><p class="col s10">quand&nbsp;? à quel moment&nbsp;? (réponse&nbsp;: cet après-midi, le soir…)</p>
			<p class="col s2"><span class="eo">kie?</span></p><p class="col s10">où&nbsp;? en quel lieu&nbsp;? (réponse&nbsp;: tout près, au Canada…)</p>
			<p class="col s2"><span class="eo">kial?</span></p><p class="col s10">pourquoi&nbsp;? pour quelle raison&nbsp;? (réponse&nbsp;: parce que…)</p>
			<p class="col s2"><span class="eo">kiom?</span></p><p class="col s10">combien&nbsp;? quelle quantité&nbsp;? (réponse&nbsp;: un peu, beaucoup…)</p>
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
		
		<p><a href="../son/pv5.mp3" type="audio/mp3"><i class="material-icons">volume_up</i></a></p>
		<p><span class="eo">En ĉiu malbono estas iom da bono.</span> : Dans tout mal il y a un peu de bien.</p>
		
		<?php 
		} // fin section 
		if ($section=="6") {
		?>

		<fieldset class="ekzerco">
			<legend><strong>EXERCICE</strong></legend>
			<p>Transformez chaque phrase en interrogation en remplaçant le texte
		entre accolades par un corrélatif en <b>KI-</b>.</p>
		<p>Exemples :<br>
		Ŝi amas {min} → Kiun ŝi amas ?<br>
		{Ŝi} amas min → Kiu amas min ?<br>
		Li promenas kun {belaj} knabinoj → Kun kiaj knabinoj li promenas&nbsp;?</p>
		
		<input type="hidden" name="013_cxap05.1" value="1. Transformez chaque phrase en interrogation en remplaçant le texte entre accolades par un corrélatif en KI-.">
		<?php atentigo();	?>
		<div class="tasko">
		<?php
			$demandoj=array (
			1 => "{Simeono kaj Fatima} estas miaj amikoj.",
			2 => "Simeono kaj Fatima estas {miaj amikoj}.",
			3 => "Ili lo&#285;as {en E&#365;ropo}.",
			4 => "Simeono man&#285;os {la du ovojn} vespere.",
			5 => "Simeono man&#285;os la du ovojn {vespere}.",
			6 => "Esperanto estas {facila} lingvo.",
			7 => "Maria promenas {bicikle}.",
			8 => "Petro a&#265;etos {tiun} bildon.", 
			9 => "Esperanto estas {tre} facila.",
			10 => "Mi trinkas teon kun {Fatima}."
			);
			ekzerco("U", 1);
		?>
		</div>
		</fieldset>

		<fieldset class="ekzerco">
			<legend><strong>EXERCICE</strong> : Traduisez en espéranto</legend>
			<input type="hidden" name="013_cxap05.2" value="2. Traduisez en espéranto.">
			<?php atentigo(); ?>
			<div class="tasko">
			<?php
				$demandoj=array (
				11 => "Qu’est-ce que c’est ? (Quelle-chose est cette-chose&nbsp;?)",
				12 => "Où est ma tasse ?",
				13 => "Quel livre est le mien ?",
				14 => "Qui a mangé mon gâteau ?",
				15 => "Quand mangerez-vous ?",
				16 => "Tout est mouillé. (mouillé: contraire de SEKA)",
				17 => "J’ai tout oublié.",
				18 => "Mon crayon (krajono) est quelque part.",
				19 => "&Agrave; ce moment, il était en bonne santé.",
				20 => "Combien &ecirc;tes-vous&nbsp;?",
				21 => "Comment court-elle&nbsp;?",
				22 => "Qu’écrivez-vous&nbsp;?  (Quelle chose écrivez-vous&nbsp;?)",
				23 => "Je ne suis l’épouse de personne.",
				24 => "Qui sont-ils&nbsp;?"
				);
				ekzerco("U", 1);
			?>
			</div>
		</fieldset>

		<?php 
		} // fin section 
		if ($section=="7") {
		?>
		<p>
		Toutes nos excuses pour cette leçon qui, nous le savons, est plutôt
		indigeste. Nous avons préféré vous présenter la totalité du sujet
		«corrélatifs» en une seule fois pour que vous saisissiez bien la
		cohérence d’ensemble, mais nous savons qu’il vous faudra de la
		pratique pour assimiler tout ça. On aura donc l’occasion d’y revenir
		souvent.
		</p>
		<?php 
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
								
		<ul class="collapsible" data-collapsible="expandable">

			<?php 
			// On affiche le sommaire de la lecon
			getEnhavtabelo('CG',$leciono); 
			?>

		</ul>	
				
	</aside>
</div>
<?php include "dlekpiedo.inc.php"; ?>