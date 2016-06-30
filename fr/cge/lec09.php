<?php
$titolo="9 (na&#365;)";
$section=isset($_GET["section"])?$_GET["section"]:"1";
include "dlekkapo.inc.php";

?>

<main class="row">
	<article class="col s12 m10 l7 offset-m1 offset-l1">
		<section id="leciono-kapo">
			<h1>Leçon 9</h1>
			<!--<ul id="progreso">
				<li id="lec1" class="farita"></li>
				<li id="lec2" class="farita"></li>
				<li id="lec3" class="farita"></li>
				<li id="lec4" class="farita"></li>
				<li id="lec5" class="farita"></li>
				<li id="lec6" class="nuna"></li>
				<li id="lec7" class="nova"></li>
				<li id="lec8" class="nova"></li>
				<li id="lec9" class="nova"></li>
				<li id="lec10" class="nova"></li>
				<li id="lec11" class="nova"></li>
			</ul>-->
		</section>
				
<section id="leciono-enhavo">

<?php 
getTitoloLecionero('CG',9,$section);


if ($section=="1") {
?>

<p>
Une des meilleures façons d’apprendre une langue, c’est en la chantant.
Vous n’aurez sûrement pas de difficulté à reconnaître la mélodie de
<i>Frère Jacques</i> dans le texte suivant&#160;:
</p>
<blockquote>
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
</blockquote>

<table class="voca">
<tr>
	<td width="12%" class="eo">jen</td><td width="20%" class="fr">voici, voilà</td>
	<td width="12%" class="eo">sonorilo</td><td width="20%" class="fr">cloche</td>
	<td width="12%" class="eo">do</td><td width="20%" class="fr">donc</td>
</tr>
<tr>
	<td class="eo">tuj</td><td class="fr">tout de suite</td>
	<td class="eo">vesto</td><td class="fr">vêtement</td>
	<td>&nbsp;</td><td>&nbsp;</td>
</tr>
</table>
<p>
Une autre version de <i>Frère Jacques</i> est celle élaborée par un groupe
de musiciens et chanteurs espérantistes du Brésil&#160;:
</p>

<blockquote>
<p>
     Bonan tagon&#160;! Bonan tagon&#160;!<br/>
     Mi deziras al vi&#160;!<br/>
     Havu bonan tagon&#160;! Havu bonan tagon,<br/>
     Vi kaj la famili’&#160;!<br/>
</p>
<p>
     Nun sidi&#285;u&#160;! Nun sidi&#285;u,<br/>
     Mia kara fra&#365;lin’&#160;!<br/>
     Diru nun belsone&#160;: &#265;u vi fartas bone&#160;?<br/>
     Belulin’, kisu min&#160;!<br/>
</p>
<p>
     &#284;is revido&#160;! &#284;is revido,<br/>
     Mia kara fra&#365;lin’&#160;!<br/>
     &#284;is alia fojo&#160;! Estos granda &#285;ojo<br/>
     Vidi vin, kisi vin&#160;!<br/>
</p>
</blockquote>

<table class="voca">
<tr>
	<td width="12%" class="eo">belsone</td><td width="20%" class="fr">d’un beau son</td>
	<td width="12%" class="eo">farti</td><td width="20%" class="fr">se porter</td>
	<td width="12%" class="eo">&#285;ojo</td><td width="20%" class="fr">joie</td>
</tr>
<tr>
	<td class="eo">&#285;is revido</td><td class="fr">au revoir</td>
	<td class="eo">fra&#365;lo</td><td class="fr">homme célibataire</td>
	<td class="eo">fra&#365;lino</td><td class="fr">demoiselle</td>
</tr>
</table>

<?php 
} // fin section
if ($section=="2") {
?>

<p>
Vous avez remarqué l’élision du <b>-o</b> final dans certains mots
(famili’, fra&#365;lin’), ce qui se fait couramment en poésie avec la
terminaison des noms et le <em>a</em> de l’article <em>la</em>&#160;:
</p>
<p class="ekz">Esperanto estas la espero de l’ mond’.</p>
<p>L’élision ne change pas la place de l’accent tonique :</p>
<p><span class="ekz">fra&#365;-<u>li</u>-no</span>  devient  <span class="ekz">fra&#365;-<u>lin’</u></span></p>


<?php 
} // fin section
if ($section=="3") {
?>

<p>
Dans la 3e leçon, nous avons parlé des <b>adverbes</b> et nous avons
expliqué que ceux qui sont dérivés d’autres mots se terminent par
<b>-e</b>. Mais beaucoup d’adverbes ne sont pas des dérivés et appartiennent
au groupe des mots dits primaires. Voici quelques adverbes se terminant
en <b>-a&#365;</b> parmi les plus usités en espéranto.
</p>
<table class="retrait">
<tr>
	<td width="10%" class="eo">almena&#365;&#160;:</td>
	<td width="20%" class="fr">au moins</td>
	<td width="70%" class="ekz">Donu al mi almena&#365; du minutojn.</td></tr>
<tr><td colspan="3">&nbsp;</td></tr>
<tr><td class="eo">anka&#365;&#160;:</td>
	<td class="fr">aussi, également<br>(précède le mot<br>sur lequel on insiste)</td>
	<td class="ekz">Anka&#365; Johano lavas sin.<span class="fr">(Il n’y a pas que Marie qui se lave)<br/></span>
		Johano anka&#365; lavas sin.<span class="fr"> (Non seulement il se peigne, mais il se lave également)</span><br/>
		Johano lavas anka&#365; sin.<span class="fr"> (Jean ne lave pas seulement d’autres personnes)</span></td></tr>
<tr><td colspan="3">&nbsp;</td></tr>
<tr><td class="eo">ankora&#365;&#160;:</td>
	<td class="fr">encore</td>
	<td class="ekz">Mi ankora&#365; ne vidis &#349;in. &#265;u li ankora&#365; estas tie&#160;?</td></tr>
<tr><td colspan="3">&nbsp;</td></tr>
<tr><td class="eo">apena&#365;&#160;:</td>
	<td class="fr">à peine</td>
	<td class="ekz">Li dormis apena&#365; kvin minutojn.</td></tr>
<tr><td colspan="3">&nbsp;</td></tr>
<tr><td class="eo">balda&#365;&#160;:</td>
	<td class="fr">bient&ocirc;t</td>
	<td class="ekz">Venu balda&#365;, mi petas.</td></tr>
<tr><td colspan="3">&nbsp;</td></tr>
<tr><td class="eo">hiera&#365;&#160;:</td>
	<td class="fr">hier</td>
	<td class="ekz">Mi renkontis lin hiera&#365; (anta&#365;hiera&#365;).</td></tr>
<tr><td colspan="3">&nbsp;</td></tr>
<tr><td class="eo">hodia&#365;&#160;:</td>
	<td class="fr">aujourd’hui</td>
	<td class="ekz">Hodia&#365; estas bela tago.</td></tr>
<tr><td colspan="3">&nbsp;</td></tr>
<tr><td class="eo">morga&#365;&#160;:</td>
	<td class="fr">demain</td>
	<td class="ekz">Kial plenumi <span class="fr">(accomplir)</span> morga&#365; tion, kion oni povas fari hodia&#365;&#160;?</td></tr>
<tr><td colspan="3">&nbsp;</td></tr>
<tr><td class="eo">preska&#365;&#160;:</td>
	<td class="fr">presque</td>
	<td class="ekz">Li preska&#365; falis.</td></tr>
</table>

<?php 
} // fin section
if ($section=="4") {
?>

<p>Voici cinq autres mots très fréquents terminés par <b>-a&#365;</b>&#160;:</p>
<table class="retrait">
<tr>
	<td width="10%" class="eo">amba&#365;&#160;:</td>
	<td width="40%" class="fr">tous les deux (adjectif ou pronom numéral)</td>
	<td width="50%" class="ekz">Ili amba&#365; estas en la &#285;ardeno.</td></tr>
<tr><td colspan="3">&nbsp;</td></tr>
<tr><td class="eo">anstata&#365;&#160;:</td>
	<td class="fr">au lieu de (prép.)</td>
	<td class="ekz">&#348;i dormis anstata&#365; legi.</td></tr>
<tr><td colspan="3">&nbsp;</td></tr>
<tr><td class="eo">anta&#365;&#160;:</td>
	<td class="fr">avant, devant (prép.)</td>
	<td class="ekz">Anta&#365; &#265;io oni devas peti informojn.<br/>La monumento staras anta&#365; la muzeo.</td></tr>
<tr><td colspan="3">&nbsp;</td></tr>
<tr><td class="eo">&#265;irka&#365;&#160;:</td>
	<td class="fr">autour de, environ (prép.)</td>
	<td class="ekz">Ili voja&#285;is &#265;irka&#365; la terglobo.<br/>Venu &#265;irka&#365; la dua (horo).</td></tr>
<tr><td colspan="3">&nbsp;</td></tr>
<tr><td class="eo">kontra&#365;&#160;:</td>
	<td class="fr">contre (prép.) </td>
	<td class="ekz">Ni batalas kontra&#365; la inflacio.<br/>Kontra&#365; doloro helpas bonhumoro.</td></tr>
</table>


<div class="rim"><p><b>Remarque</b> : 
Pour tous ces mots en <em>a&#365;</em> vous devez faire
très attention à placer correctement l’accent tonique. Les
francophones ont souvent la mauvaise habitude de prononcer
<em>tchir-<u>ka</u>-ou</em> alors que <em>ka&#365;</em> ne forme qu’une seule syllabe. La
prononciation exacte est donc :</p>
<p>&#265;irka&#365;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u>tchir</u>-kaw</p>
<p>morga&#365;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u>mor</u>-gaw</p>
<p>hiera&#365;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;hi-<u>è</u>-raw</p>
<p>hodia&#365;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ho-<u>di</u>-aw</p>
</div>

<?php 
} // fin section
if ($section=="5") {
?>

<p>Parmi les mots invariables fréquemment employés, on trouve aussi:</p>

<p><b>&#265;i</b> :  indique la proximité </p>

<table class="retrait">
	<tr><td width="90" class="eo">&#265;i tio :</td><td width="200" class="fr">cette chose-ci</td><td width="200" class="eo">&#265;i tie<span class="fr"> : ici</span></td></tr>
	<tr><td class="eo">&#265;io &#265;i :</td><td class="fr">tout ceci</td></tr>
	<tr><td class="eo">&#265;i-matene :</td><td class="fr">ce matin</td><td class="eo">&#265;i-foje<span class="fr"> : cette fois-ci</span></td></tr>
</table>

<table class="retrait">
	<tr><td width="100" class="ekz">tiu knabo :</td><td width="100" class="fr">ce garçon(-là)</td></tr>
	<tr><td class="ekz">tiu &#265;i knabo, &#265;i tiu knabo :</td><td class="fr">ce garçon-ci</td></tr>
</table>
<a id="cg065"></a>
<p><b>ajn</b> :  exprime l’indétermination généralisée</p>

<table class="retrait">
	<tr><td width="90" class="eo">iu ajn :</td><td width="200" class="fr">n’importe qui</td><td class="eo" width="90">io ajn :</td><td class="fr" width="200" >n’importe quoi</td></tr>
	<tr><td class="eo">ie ajn :</td><td class="fr">n’importe o&ugrave;</td><td class="eo">iam ajn :</td><td class="fr">n’importe quand</td></tr>
</table>

<table class="retrait">
	<tr><td class="ekz">iru ien&#160;! :</td><td class="fr">allez (allez-vous en) quelque part&#160;!</td></tr>
	<tr><td class="ekz">iru ien ajn&#160;! :</td><td class="fr">allez-vous en n’importe o&ugrave;&#160;!</td></tr>
	<tr><td colspan="2">&nbsp;</td></tr>
	<tr><td class="ekz">iru, kien vi volas&#160;! :</td><td class="fr">allez o&ugrave; vous voulez&#160;!</td></tr>
	<tr><td class="ekz">iru, kien ajn vi volas&#160;! :</td><td class="fr">allez (n’importe o&ugrave;) o&ugrave; vous voulez&#160;!</td></tr>
</table>

<?php 
} // fin section
if ($section=="6") {
?>

<p>
<table>
	<tr>
		<td><a href="../son/pv9-1.wav"><img src="../pix/icon20.gif"></a>
		<td class="ekz">Kiam kato promenas, la musoj festenas.</td>
		<td class="fr">Quand le chat n’est pas là, les souris dansent (<i>festoient</i>);</td>
	</tr>
	<tr>
		<td><a href="../son/pv9-2.wav"><img src="../pix/icon20.gif"></a>
		<td class="ekz">Kion oni volas, tion oni povas.</td>
		<td class="fr">Quand on veut, on peut. (<i>ce qu’on veut, on le peut</i>)</td>
	</tr>
	<tr>
		<td><a href="../son/pv9-3.wav"><img src="../pix/icon20.gif"></a></td>
		<td class="ekz">Kia patro, tia filo.</td>
		<td class="fr">Tel père, tel fils.</td>
	</tr>
	<tr>
		<td><a href="../son/pv9-4.wav"><img src="../pix/icon20.gif"></a></td>
		<td class="ekz">Amiko de amiko estas anka&#365; amiko.</td>
		<td class="fr">L’ami de mon ami est mon ami. (<i>un ami d’ami est aussi un ami</i>)</td>
	</tr>
	<tr>
		<td><a href="../son/pv9-5.wav"><img src="../pix/icon20.gif"></a></td>
		<td class="ekz">Se mi scius, kie mi falos, mi tien metus tapi&#349;on  <br>(= <i>tapis</i>).</td>
		<td class="fr"><i>Devinez vous-même...</i></td>
	</tr>
</table>

<?php 
} // fin section
if ($section=="7") {
?>

<p>
Il existe une centaine de publications en espéranto. Celles-ci sont
éditées par des maisons indépendantes, par des associations
nationales ou internationales, et elles se font l’écho du mouvement
espérantiste dans le monde.
</p>

<?php 
} // fin section
if ($section=="8") {
?>

<?php atentigo(); ?>
<p>
Traduisez les articles suivants puisés dans diverses revues. Le vocabulaire nouveau se trouve à la fin de l’exercice.
<a href="../son/l09-1.wav"><img src="../pix/icon20.gif"></a>&nbsp;<a href="../son/l09-1.rm"><img src="../pix/icon20-1.gif"></a>
</p>
<input type="hidden" name="013_cxap09.1" value="1. Traduisez les articles suivants puisés dans diverses revues.">
<div class="tasko">
<?php
	$demandoj=array (
	1 => "<br>19 geinstruistoj gvidas Esperanto-kursojn por 303 gelernantoj en la brazila urbo Salvadoro. Kiel en la resto de la lando, anka&#365; en Salvadoro oni sentas kreskon de la intereso pri la Internacia Lingvo post la 66a Universala Kongreso en Brazilio.",
	2 => "<br>Bela parketo en la centro de la sud-franca urbo Pau &#309;us ricevis la nomon Zamenhof. La urb-estro de Pau, André Labarrère, fari&#285;is ministro en majo. Li dufoje subtenis le&#285;proponojn, kiuj celas meti Esperanton en egalan situacion kun aliaj lingvoj. Li estas honora membro de la loka Esperanto-societo, kaj pasint-jare li persone malfermis ekspozicion pri Esperanto, kiu restis unu monaton en la urba biblioteko.",
	3 => "<br>La 11an de oktobro 1980, grupo de samideanoj de Bostona Esperanto-Klubo veturis al &#348;erbruko (Kebekio) por esti gastigataj de &#349;erbruka Esperanto-Societo (&#348;ES) dum speciala semajnfina aran&#285;o. Plie montrealanoj el la du kluboj kunvenis sabatvespere por partopreni komunan man&#285;on en restoracio kaj vesperon en la kutima renkontejo de &#349;ES &#265;e la loka universitato. Naciecoj reprezentitaj: Francio, Japanio, Kanado, Usono.",
	4 => "Kio okazas &#265;e la junularaj esperantistaj asocioj de la landoj najbaraj de ni&#160;? Por respondi al tiu demando, jen nova rubriko. &#265;i-numere ni donos nova&#309;ojn pri NEJ (Nederlanda Esperantista Junularo) kaj FEJA (Flandra Esperanta Junulara Asocio). Tiuj du asocioj havas komunan bultenon. La plej interesa afero, kiun tiuj uloj organizas -- almena&#365; el nia vidpunkto -- estas la Paska Renkonti&#28;o. &#284;i nun i&#285;is tradicia kaj, kiel la nomo anta&#365;supozigas, &#285;i okazas dum la Paska semajnfino."
   );
	ekzerco ("X", 8);
?>
</div>

<table class="voca">
<tr>
	<td width="12%" class="eo">gvidi</td><td width="20%" class="fr">guider, diriger</td>
	<td width="12%" class="eo">Brazilo</td><td width="20%" class="fr">Brésil</td>
	<td width="12%" class="eo">Brazilio</td><td width="20%" class="fr">Brasilia</td>
</tr>
<tr>
	<td class="eo">senti</td><td class="fr">sentir, ressentir</td>
	<td class="eo">kresko</td><td class="fr" colspan="3">croissance, accroissement</td>
</tr>
<tr>
	<td width="12%" class="eo">samideano</td><td width="20%" class="fr">partisan (ici&#160;: espérantiste)</td>
	<td width="12%" class="eo">&#348;erbruko</td><td width="20%" class="fr">Sherbrooke</td>
	<td width="12%" class="eo">gastigi</td><td width="20%" class="fr">recevoir (des invités), offrir l’hospitalité</td>
</tr>
<tr>
	<td class="eo">kutima</td><td class="fr">habituel</td>
	<td class="eo">Usono</td><td class="fr">&Eacute;tats-Unis</td>
	<td class="eo">plie</td><td class="fr">de plus</td>
</tr>
<tr>
	<td class="eo">aran&#285;o</td><td class="fr">manifestation</td>
	<td></td>&nbsp;<td></td>
	<td></td>&nbsp;<td></td>
</tr>
<tr>
	<td width="12%" class="eo">asocio</td><td width="20%" class="fr">association</td>
	<td width="12%" class="eo">najbaro</td><td width="20%" class="fr">voisin</td>
	<td width="12%" class="eo">rubriko</td><td width="20%" class="fr">rubrique</td>
</tr>
<tr>
	<td class="eo">numero</td><td class="fr">numéro (revue)</td>
	<td class="eo">bulteno</td><td class="fr">bulletin</td>
	<td class="eo">organizi</td><td class="fr">organiser</td>
</tr>
<tr>
	<td class="eo">vidpunkto</td><td class="fr">point de vue</td>
	<td class="eo">Pasko</td><td class="fr">P&acirc;ques</td>
	<td class="eo">tradicio</td><td class="fr">tradition</td>
</tr>
<tr>
	<td class="eo">supozi</td><td class="fr">supposer</td>
	<td class="eo">Flandro</td><td class="fr">Flandres </td>
	<td class="eo">Nederlando</td><td class="fr">Pays-Bas</td>
</tr>
</table>

<?php 
} // fin section
if ($section=="9") {
?>
<p>
Vous venez de franchir la dernière étape de votre apprentissage. La dixième et dernière leçon consiste en un examen qui va vous permettre d'évaluer l'ensemble de vos connaissances. Les questions sont faciles, il n'y a pas de piège. Vous connaissez déjà toutes les réponses, cet examen a pour seul objectif de vous en convaincre.
</p>

<p>
Que de chemin parcouru depuis le début de ce cours, j'espère que vous aurez pris autant plaisir à le suivre que nous en avons pris à l'élaborer. Mais ce cours n'est pas statique, il évolue en fonction de vos retours. N'hésitez pas à nous contacter si vous avez des remarques, des suggestions ou des envies que nous pourrons réaliser pour les générations futures d'élèves.
</p>

<p>
Faites connaître ce cours autours de vous, c'est la meilleure façon qu'il continue à vivre.
</p>

<?php 
} // fin derniere section
?>	
</section>


				
				<!-- TODO : il faut remplacer cette section suivante par une fonction qui va rechercher en base le précédent et le suivant -->
				<section id="leciono-fino">
					<div id="marko" class="right-align">
						<a id="nova" class="waves-effect waves-light btn tooltipped light-blue darken-1" data-position="top" data-delay="50" data-tooltip="j'ai fini d'étudier cette section">Terminé !</a>
						<a id="farita" class="btn-floating btn-large invisible light-blue darken-1"><i class="material-icons">done_all</i></a>
					</div>
					<div class="ligoj">
						<?php getLecioneroAntauxa('CG',9,$section); ?>
						<?php getLecioneroVenonta('CG',9,$section); ?>
					</div>
				</section>


			</article>
			
			<aside class="col s12 m10 l4 offset-m1">
								
				<ul class="collapsible" data-collapsible="expandable">

					<?php 
					// On affiche le sommaire de la lecon
					getEnhavtabelo('CG',9); 
					?>

					<!-- TODO : il faut remplacer cette section suivante par une fonction qui va rechercher en base le vocabulaire -->

					<!--<li>
						<div class="collapsible-header"><i class="material-icons">library_books</i>Vocabulaire de la leçon</div>
						<div class="collapsible-body">
							<table class="vortaro bordered striped responsive-table">
								<tr><td>apud</td><td>à côté de</td></tr>
								<tr><td>(aŭto)bus/o</td><td>autobus</td></tr>
								<tr><td>ceter/a</td><td>restant, autre</td></tr>
								<tr><td>en</td><td>en, dedans</td></tr>
								<tr><td>ĝis</td><td>jusqu’à</td></tr>
								<tr><td>halt/i</td><td>s’arrêter</td></tr>
								<tr><td>apud</td><td>à côté de</td></tr>
								<tr><td>(aŭto)bus/o</td><td>autobus</td></tr>
								<tr><td>ceter/a</td><td>restant, autre</td></tr>
								<tr><td>en</td><td>en, dedans</td></tr>
								<tr><td>ĝis</td><td>jusqu’à</td></tr>
								<tr><td>halt/i</td><td>s’arrêter</td></tr>
								<tr><td>apud</td><td>à côté de</td></tr>
								<tr><td>(aŭto)bus/o</td><td>autobus</td></tr>
								<tr><td>ceter/a</td><td>restant, autre</td></tr>
								<tr><td>en</td><td>en, dedans</td></tr>
								<tr><td>ĝis</td><td>jusqu’à</td></tr>
								<tr><td>halt/i</td><td>s’arrêter</td></tr>
								<tr><td>apud</td><td>à côté de</td></tr>
								<tr><td>(aŭto)bus/o</td><td>autobus</td></tr>
								<tr><td>ceter/a</td><td>restant, autre</td></tr>
								<tr><td>en</td><td>en, dedans</td></tr>
								<tr><td>ĝis</td><td>jusqu’à</td></tr>
								<tr><td>halt/i</td><td>s’arrêter</td></tr>
								<tr><td>apud</td><td>à côté de</td></tr>
								<tr><td>(aŭto)bus/o</td><td>autobus</td></tr>
								<tr><td>ceter/a</td><td>restant, autre</td></tr>
								<tr><td>en</td><td>en, dedans</td></tr>
								<tr><td>ĝis</td><td>jusqu’à</td></tr>
								<tr><td>halt/i</td><td>s’arrêter</td></tr>
							</table>			
						</div>
					</li> -->
				</ul>	
				
			</aside>
		</main>



<?php include "dlekpiedo.inc.php"; ?>
